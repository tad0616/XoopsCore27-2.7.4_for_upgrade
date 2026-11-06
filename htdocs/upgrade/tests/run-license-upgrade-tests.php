<?php

declare(strict_types=1);

$mode = $argv[1] ?? '';
$base = $argv[2] ?? (sys_get_temp_dir() . '/xoops_license_test_' . bin2hex(random_bytes(8)));
define('XOOPS_ROOT_PATH', $base . '/site');
define('XOOPS_VAR_PATH', $base . '/data');
define('XOOPS_VERSION', 'XOOPS 2.7.4');
$_SERVER['HTTP_HOST'] = 'example.test';
require __DIR__ . '/bootstrap.php';
require __DIR__ . '/fixtures/XoopsMySQLDatabaseStub.php';
require dirname(__DIR__) . '/language/english/upgrade.php';
require dirname(__DIR__, 2) . '/include/license.php';
require dirname(__DIR__) . '/upd-2.3.3-to-2.4.0/index.php';
require dirname(__DIR__) . '/upd-2.4.0-to-2.4.1/index.php';

function licenseCheck(bool $condition, string $message): void
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

$db = new XoopsMySQLDatabase();
$control = new Xoops\Upgrade\UpgradeControl($db);
$patch240 = new Upgrade_240($db, $control);
$patch241 = new Upgrade_241($db, $control);
if ('verify' === $mode) {
    licenseCheck($patch240->check_version() && $patch241->check_license(), 'Generated key was not loaded on a subsequent request');
    exit(0);
}

function verifyNextRequest(string $base): void
{
    $pipes = [];
    $process = proc_open([PHP_BINARY, __FILE__, 'verify', $base], [
        0 => ['pipe', 'r'],
        1 => ['pipe', 'w'],
        2 => ['pipe', 'w'],
    ], $pipes);
    if (!is_resource($process)) {
        throw new RuntimeException('Could not start verification request');
    }
    fclose($pipes[0]);
    $output = stream_get_contents($pipes[1]) . stream_get_contents($pipes[2]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    licenseCheck(0 === proc_close($process), 'Verification request failed: ' . $output);
}

mkdir($base);
try {
    licenseCheck(!$patch240->check_version(), 'Default key should require an upgrade');
    licenseCheck(false === $patch240->apply_version(), 'Missing license directory was accepted');
    licenseCheck(strpos($patch240->message(), 'not writable') !== false, 'Missing directory was not reported');
    licenseCheck(strpos($patch240->message(), 'xoops_data/data') !== false, 'License directory was not identified');
    licenseCheck(false === $patch241->apply_license(), 'Missing license directory was accepted by 2.4.1');
    licenseCheck(strpos($patch241->message(), 'not writable') !== false, '2.4.1 missing directory was not reported');

    mkdir(XOOPS_VAR_PATH . '/data', 0777, true);
    mkdir(XOOPS_VAR_PATH . '/data/license.php');
    licenseCheck(false === $patch240->apply_version(), 'License destination conflict was accepted');
    licenseCheck(strpos($patch240->message(), 'xoops_data/data/license.php') !== false, 'License write failure was not identified');
    rmdir(XOOPS_VAR_PATH . '/data/license.php');
    $wrapper = dirname(__DIR__, 2) . '/include/license.php';
    $original = file_get_contents($wrapper);
    licenseCheck(true === $patch240->apply_version(), '2.4.0 license generation failed');
    licenseCheck(is_file(XOOPS_VAR_PATH . '/data/license.php'), 'License was not written to xoops_data');
    licenseCheck(file_get_contents($wrapper) === $original, 'Core license loader was overwritten');
    verifyNextRequest($base);

    chmod(XOOPS_VAR_PATH . '/data/license.php', 0666);
    unlink(XOOPS_VAR_PATH . '/data/license.php');
    licenseCheck(true === $patch241->apply_license(), '2.4.1 license generation failed');
    licenseCheck(file_get_contents($wrapper) === $original, '2.4.1 overwrote the core license loader');
    verifyNextRequest($base);
    echo "License generation, missing directory and subsequent-request checks passed.\n";
} finally {
    $license = XOOPS_VAR_PATH . '/data/license.php';
    if (is_file($license)) {
        chmod($license, 0666);
        unlink($license);
    }
    if (is_dir(XOOPS_VAR_PATH . '/data')) {
        rmdir(XOOPS_VAR_PATH . '/data');
    }
    if (is_dir(XOOPS_VAR_PATH)) {
        rmdir(XOOPS_VAR_PATH);
    }
    rmdir($base);
}
