<?php

declare(strict_types=1);

namespace Xoops\Upgrade {
    function is_writable(string $path): bool
    {
        return !in_array($path, $GLOBALS['unwritableUpgradeTestPaths'] ?? [], true) && \is_writable($path);
    }
}

namespace {
    use Xoops\Upgrade\UpgradeControl;
    use Xoops\Upgrade\XoopsUpgrade;

    require __DIR__ . '/bootstrap.php';
    require __DIR__ . '/fixtures/XoopsMySQLDatabaseStub.php';
    defined('XOOPS_PATH') || define('XOOPS_PATH', XOOPS_TRUST_PATH);

    class PermissionTestPatch extends XoopsUpgrade
    {
        public bool $done = false;

        public function __construct(array $files)
        {
            $this->tasks = ['test'];
            $this->usedFiles = $files;
        }

        public function check_test(): bool
        {
            return $this->done;
        }
    }

    class PermissionTestControl extends UpgradeControl
    {
        public array $directories = [];
        public array $patches = [];

        public function getDirList(string $dirname): array
        {
            return $this->directories;
        }

        public function createPatch(string $className): XoopsUpgrade
        {
            return $this->patches[$className];
        }
    }

    function permissionCheck(bool $condition, string $message): void
    {
        if (!$condition) {
            throw new \RuntimeException($message);
        }
    }

    $control = new PermissionTestControl(new \XoopsMySQLDatabase());
    permissionCheck(!$control->buildUpgradeQueue(), 'Empty upgrade queue should not require an upgrade');
    permissionCheck([] === $control->needWriteFiles, 'Empty upgrade queue should not require writable files');

    $first = new PermissionTestPatch([]);
    $later = new PermissionTestPatch(['phpunit.xml.dist', 'nonexistent-test-file']);
    $control->directories = ['upd-2.3.3-to-2.4.0', 'upd_2.5.10-to-2.5.11'];
    $control->patches = ['Upgrade_240' => $first, 'Upgrade_2511' => $later];
    $unwritableUpgradeTestPaths = [XOOPS_ROOT_PATH . '/phpunit.xml.dist'];
    permissionCheck($control->buildUpgradeQueue(), 'Pending patches were not detected');
    permissionCheck([] === $control->needWriteFiles, 'A later patch blocked the first patch');

    $control->upgradeQueue['upd-2.3.3-to-2.4.0']->applied = true;
    permissionCheck(['phpunit.xml.dist'] === $control->getNextPatchWriteFiles(), 'The next patch did not report its unwritable relative path');
    $unwritableUpgradeTestPaths = [];
    permissionCheck([] === $control->getNextPatchWriteFiles(), 'Writable or missing paths incorrectly blocked the patch');
    $control->upgradeQueue['upd_2.5.10-to-2.5.11']->applied = true;
    permissionCheck([] === $control->getNextPatchWriteFiles(), 'Applied patches should not require writable files');

    $realControl = new UpgradeControl(new \XoopsMySQLDatabase());
    $patch = new \Upgrade_2511(new \XoopsMySQLDatabase(), $realControl);
    permissionCheck($patch->usedFiles === [XOOPS_VAR_PATH], '2.5.11 patch requires unrelated legacy directories');

    echo "Upgrade permission queue and legacy directory checks passed.\n";
}
