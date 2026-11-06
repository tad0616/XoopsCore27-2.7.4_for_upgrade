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
echo "Core package copy order passed.\n";
