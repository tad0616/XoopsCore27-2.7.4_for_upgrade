<?php
/**
 * Messages logged by the 2.7.3 to 2.7.4 upgrade patch (upd_2.7.3-to-2.7.4/index.php).
 *
 * @copyright (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 */

// Task: user2fatable
// TODO-TRANSLATE 原文: 'Could not read information_schema to check for the user_2fa table'
define('_XOOPS_UPGRADE_274_2FA_TABLE_CHECK', '無法讀取 information_schema 來檢查 user_2fa 資料表');
// TODO-TRANSLATE 原文: 'Could not read information_schema; the user_2fa table was not created'
define('_XOOPS_UPGRADE_274_2FA_TABLE_NOT_CREATED', '無法讀取 information_schema；未建立 user_2fa 資料表');

// Task: twofactormode
// TODO-TRANSLATE 原文: 'Could not read the config table to check for the twofactor_mode preference'
define('_XOOPS_UPGRADE_274_MODE_CHECK', '無法讀取 config 資料表來檢查 twofactor_mode 偏好設定');
// TODO-TRANSLATE 原文: 'Could not read the configoption table to check the twofactor_mode options'
define('_XOOPS_UPGRADE_274_MODE_OPTIONS_CHECK', '無法讀取 configoption 資料表來檢查 twofactor_mode 選項');
// TODO-TRANSLATE 原文: 'Could not read the config table; the twofactor_mode preference was not inserted'
define('_XOOPS_UPGRADE_274_MODE_NOT_INSERTED', '無法讀取 config 資料表；未新增 twofactor_mode 偏好設定');
// TODO-TRANSLATE 原文: 'The twofactor_mode preference row was not found after it was inserted'
define('_XOOPS_UPGRADE_274_MODE_NOT_FOUND', '新增 twofactor_mode 偏好設定後找不到該筆資料');
// TODO-TRANSLATE 原文: 'Could not read the configoption table; the twofactor_mode options were not inserted'
define('_XOOPS_UPGRADE_274_MODE_OPTIONS_NOT_INSERTED', '無法讀取 configoption 資料表；未新增 twofactor_mode 選項');

// Task: emoticons
// TODO-TRANSLATE 原文: 'Could not read the smiles table to check the SCEditor emoticons'
define('_XOOPS_UPGRADE_274_EMOTICONS_CHECK', '無法讀取 smiles 資料表來檢查 SCEditor 表情符號');

// Task: editorprefs
// TODO-TRANSLATE 原文: 'The Editors preferences could not be checked'
define('_XOOPS_UPGRADE_274_EDITORS_CHECK', '無法檢查「編輯器」偏好設定');
// TODO-TRANSLATE 原文: 'The Editors preferences were not inserted'
define('_XOOPS_UPGRADE_274_EDITORS_NOT_INSERTED', '未新增「編輯器」偏好設定');
// %s is the preference name
// TODO-TRANSLATE 原文: 'Could not find the %s preference for its options'
define('_XOOPS_UPGRADE_274_EDITORS_OPTION_PARENT', '找不到 %s 偏好設定，無法新增其選項');
// %d is the preference category ID
// TODO-TRANSLATE 原文: 'Preference category %d is already used by another category; the Editors preferences need that ID'
define('_XOOPS_UPGRADE_274_EDITORS_CATEGORY_TAKEN', '偏好設定分類 %d 已被其他分類使用，但「編輯器」偏好設定需要使用該 ID');

// Migration locks; %s is the task being locked (twofactor_mode, emoticons, editorprefs)
// TODO-TRANSLATE 原文: 'Could not acquire the %s migration lock; retry the upgrade'
define('_XOOPS_UPGRADE_274_LOCK_ACQUIRE', '無法取得 %s 移轉鎖定，請重新執行升級');
// TODO-TRANSLATE 原文: 'Could not release the %s migration lock'
define('_XOOPS_UPGRADE_274_LOCK_RELEASE', '無法釋放 %s 移轉鎖定');
