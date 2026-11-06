<?php

declare(strict_types=1);

$manifest = json_decode(file_get_contents(dirname(__DIR__, 3) . '/upgrade.json'), true, 512, JSON_THROW_ON_ERROR);
$steps = $manifest['steps'] ?? [];
$expected = [
    ['op' => 'copy', 'from' => '{WORK}/xoops_lib/', 'to' => '{LIB}/'],
    ['op' => 'copy', 'from' => '{WORK}/xoops_data/', 'to' => '{VAR}/'],
    ['op' => 'copy', 'from' => '{WORK}/htdocs/', 'to' => '{ROOT}/'],
];
if (array_slice($steps, 0, 3) !== $expected) {
    throw new RuntimeException('Core package must copy libraries and data before the web root');
}
$obsoletePaths = [
    '{ROOT}/modules/system/templates/system_imagemanager2.html',
    '{ROOT}/modules/system/templates/system_imagemanager.html',
    '{ROOT}/class/libraries/vendor/kint-php',
    '{ROOT}/class/libraries/vendor/paragonie',
    '{ROOT}/class/libraries/vendor/symfony',
    '{ROOT}/modules/system/themes/legacy',
    '{ROOT}/class/mail/phpmailer',
];
$rootChmod = null;
foreach ($steps as $index => $step) {
    if ($step['op'] === 'chmod' && $step['path'] === '{ROOT}' && !empty($step['recursive'])) {
        $rootChmod = $index;
        break;
    }
}
if ($rootChmod === null) {
    throw new RuntimeException('Recursive root chmod is missing');
}
foreach ($obsoletePaths as $path) {
    $positions = [];
    foreach ($steps as $index => $step) {
        if ($step['op'] === 'delete' && $step['path'] === $path) {
            $positions[] = $index;
        }
    }
    if (count($positions) !== 2 || $positions[0] < 3 || $positions[0] >= $rootChmod || $positions[1] <= $rootChmod) {
        throw new RuntimeException("Cleanup must run after copying, before chmod, and retry after chmod: $path");
    }
}
foreach (['{WORK}', '{NEW_FILE}'] as $path) {
    $positions = [];
    foreach ($steps as $index => $step) {
        if ($step['op'] === 'delete' && $step['path'] === $path) {
            $positions[] = $index;
        }
    }
    if (count($positions) !== 1 || $positions[0] <= $rootChmod) {
        throw new RuntimeException("Upgrade source must be deleted once after chmod: $path");
    }
}
echo "Core package copy and cleanup order passed.\n";
