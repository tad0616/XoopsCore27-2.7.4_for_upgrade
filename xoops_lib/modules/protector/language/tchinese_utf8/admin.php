<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
// TODO-TRANSLATE 原文: 'Permissions'
define('_MD_A_MYMENU_MYBLOCKSADMIN','權限');
// TODO-TRANSLATE 原文: 'Preferences'
define('_MD_A_MYMENU_MYPREFERENCES','偏好設定');
// index.php
// TODO-TRANSLATE 原文: 'Time'
define('_AM_TH_DATETIME', '時間');
// TODO-TRANSLATE 原文: 'User'
define('_AM_TH_USER', '使用者');
// TODO-TRANSLATE 原文: 'IP'
define('_AM_TH_IP', 'IP');
// TODO-TRANSLATE 原文: 'AGENT'
define('_AM_TH_AGENT', '瀏覽器代理');
// TODO-TRANSLATE 原文: 'Type'
define('_AM_TH_TYPE', '類型');
// TODO-TRANSLATE 原文: 'Description'
define('_AM_TH_DESCRIPTION', '說明');
// TODO-TRANSLATE 原文: 'Bad IPs<br><br><span style="font-weight:normal;">Write each IP a line<br>blank means all IPs are allowed</span>'
define('_AM_TH_BADIPS','封鎖的 IP<br><br><span style="font-weight:normal;">每行一個 IP<br>留空表示允許所有 IP</span>');
// TODO-TRANSLATE 原文: 'Allowed IPs for Group=1<br><br><span style="font-weight:normal;">Write each IP a line.<br>192.168. means 192.168.*<br>blank means all IPs are allowed</span>'
define('_AM_TH_GROUP1IPS','管理員群組（Group=1）允許的 IP<br><br><span style="font-weight:normal;">每行一個 IP。<br>192.168. 代表 192.168.*<br>留空表示允許所有 IP</span>');
// TODO-TRANSLATE 原文: 'Compact log'
define('_AM_LABEL_COMPACTLOG', '精簡紀錄');
// TODO-TRANSLATE 原文: 'Compact it!'
define('_AM_BUTTON_COMPACTLOG', '精簡！');
// TODO-TRANSLATE 原文: 'Duplicated (IP,Type) records will be removed'
define('_AM_JS_COMPACTLOGCONFIRM', '將移除（IP, 類型）重複的紀錄');
// TODO-TRANSLATE 原文: 'Remove all records'
define('_AM_LABEL_REMOVEALL', '移除所有紀錄');
// TODO-TRANSLATE 原文: 'Remove all!'
define('_AM_BUTTON_REMOVEALL', '全部移除！');
// TODO-TRANSLATE 原文: 'All logs are removed absolutely. Are you really OK?'
define('_AM_JS_REMOVEALLCONFIRM', '所有紀錄都將被永久移除，確定嗎？');
// TODO-TRANSLATE 原文: 'Remove the records checked:'
define('_AM_LABEL_REMOVE', '移除勾選的紀錄：');
// TODO-TRANSLATE 原文: 'Remove!'
define('_AM_BUTTON_REMOVE', '移除！');
// TODO-TRANSLATE 原文: 'Remove OK?'
define('_AM_JS_REMOVECONFIRM', '確定要移除嗎？');
// TODO-TRANSLATE 原文: 'Files for IPs have been updated'
define('_AM_MSG_IPFILESUPDATED', 'IP 設定檔已更新');
// TODO-TRANSLATE 原文: 'The file for bad IP cannot be opened'
define('_AM_MSG_BADIPSCANTOPEN', '無法開啟封鎖 IP 設定檔');
// TODO-TRANSLATE 原文: 'The file for allowing group=1 cannot be opened'
define('_AM_MSG_GROUP1IPSCANTOPEN', '無法開啟管理員群組允許 IP 設定檔');
// TODO-TRANSLATE 原文: 'Records are removed'
define('_AM_MSG_REMOVED', '紀錄已移除');
// TODO-TRANSLATE 原文: 'Failed to delete records'
define('_AM_MSG_DELFAILED', '刪除紀錄失敗');
// TODO-TRANSLATE 原文: 'Turn the configs directory writable: %s'
define('_AM_FMT_CONFIGSNOTWRITABLE', '請將 configs 目錄設為可寫入：%s');
// prefix_manager.php
// TODO-TRANSLATE 原文: 'Prefix Manager'
define('_AM_H3_PREFIXMAN', '前置字管理');
// TODO-TRANSLATE 原文: 'Database Updated Successfully!'
define('_AM_MSG_DBUPDATED', '資料庫更新成功！');
// TODO-TRANSLATE 原文: 'All data will be dropped. OK?'
define('_AM_CONFIRM_DELETE', '所有資料都將被刪除，確定嗎？');
// TODO-TRANSLATE 原文: "If you want to change prefix,<br> edit %s/data/secure.php manually.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');"
define('_AM_TXT_HOWTOCHANGEDB','若要變更前置字，<br>請手動編輯 %s/data/secure.php。<br><br>define(\'XOOPS_DB_PREFIX\', \'<b>%s</b>\');');
// advisory.php
// TODO-TRANSLATE 原文: 'Not secure'
define('_AM_ADV_NOTSECURE', '不安全');
// TODO-TRANSLATE 原文: 'If you can see an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.'
define('_AM_ADV_TRUSTPATHPUBLIC', '如果您看到 -NG- 圖片，或連結回傳正常頁面，表示 XOOPS_TRUST_PATH 的位置不正確。XOOPS_TRUST_PATH 最好放在 DocumentRoot 之外；若無法做到，次佳的做法是在 XOOPS_TRUST_PATH 下放置 .htaccess（DENY FROM ALL）。');
// TODO-TRANSLATE 原文: 'Check that PHP files inside TRUST_PATH are set to read-only (it must be 404,403 or 500 error)'
define('_AM_ADV_TRUSTPATHPUBLICLINK', '確認 TRUST_PATH 內的 PHP 檔案無法從外部存取（必須回傳 404、403 或 500 錯誤）');
// TODO-TRANSLATE 原文: "If 'ON', this setting invites a variety of injecting attacks. If you can, set 'register_globals off' in php.ini, or if not possible, create or edit .htaccess in your XOOPS directory:"
define('_AM_ADV_REGISTERGLOBALS','若為「ON」，此設定容易招致各種注入攻擊。可以的話請在 php.ini 設定「register_globals off」；若無法修改，請在 XOOPS 目錄建立或編輯 .htaccess：');
// TODO-TRANSLATE 原文: "If 'ON', this setting allows attackers to execute arbitrary scripts on remote servers.<br>Only administrator can change this option.<br>If you are an admin, edit php.ini or httpd.conf.<br><b>Sample of httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Else, claim it to your administrators."
define('_AM_ADV_ALLOWURLFOPEN','若為「ON」，攻擊者可能藉此執行遠端伺服器上的任意程式。<br>只有伺服器管理員可以變更此選項。<br>如果您是管理員，請編輯 php.ini 或 httpd.conf。<br><b>httpd.conf 範例：<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>否則請向您的伺服器管理員反映。');
// TODO-TRANSLATE 原文: "If 'ON', your Session ID will be displayed in anchor tags etc.<br>To prevent session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>"
define('_AM_ADV_USETRANSSID','若為「ON」，您的 Session ID 會顯示在連結等標籤中。<br>為防止 session 劫持，請在 XOOPS_ROOT_PATH 的 .htaccess 加入一行：<br><b>php_flag session.use_trans_sid off</b>');
// TODO-TRANSLATE 原文: "This setting invites 'SQL Injections'.<br>Don't forget turning 'Force sanitizing *' ON in this module's preferences."
define('_AM_ADV_DBPREFIX','此設定容易招致「SQL 注入」攻擊。<br>別忘了在本模組的偏好設定中開啟「強制淨化 *」。');
// TODO-TRANSLATE 原文: 'Go to prefix manager'
define('_AM_ADV_LINK_TO_PREFIXMAN', '前往前置字管理');
// TODO-TRANSLATE 原文: 'You should edit your mainfile.php like written in README.'
define('_AM_ADV_MAINUNPATCHED', '請依 README 的說明修改您的 mainfile.php。');
// TODO-TRANSLATE 原文: 'Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection'
define('_AM_ADV_DBFACTORYPATCHED', '您的 databasefactory 已支援 DB 層防 SQL 注入攔截');
// TODO-TRANSLATE 原文: 'Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.'
define('_AM_ADV_DBFACTORYUNPATCHED', '您的 databasefactory 尚未支援 DB 層防 SQL 注入攔截，需要套用一些修補。');
// TODO-TRANSLATE 原文: 'Check if Protector works well'
define('_AM_ADV_SUBTITLECHECK', '檢查 Protector 是否正常運作');
// TODO-TRANSLATE 原文: 'Contamination'
define('_AM_ADV_CHECKCONTAMI', '變數污染');
// TODO-TRANSLATE 原文: 'Isolated Comments'
define('_AM_ADV_CHECKISOCOM', '孤立註解');
//XOOPS 2.5.4
// TODO-TRANSLATE 原文: 'and place in it the line below:'
define('_AM_ADV_REGISTERGLOBALS2', '並在其中加入下面這一行：');
//XOOPS 2.5.8
// TODO-TRANSLATE 原文: 'Prefix'
define('_AM_PROTECTOR_PREFIX', '前置字');
// TODO-TRANSLATE 原文: 'Tables'
define('_AM_PROTECTOR_TABLES', '資料表');
// TODO-TRANSLATE 原文: 'Updated'
define('_AM_PROTECTOR_UPDATED', '更新時間');
// TODO-TRANSLATE 原文: 'Copy'
define('_AM_PROTECTOR_COPY', '複製');
// TODO-TRANSLATE 原文: 'Actions'
define('_AM_PROTECTOR_ACTIONS', '動作');
// XOOPS 2.5.10 v Protector 3.60
// TODO-TRANSLATE 原文: 'Ban the IPs on checked records:'
define('_AM_LABEL_BAN_BY_IP', '封鎖勾選紀錄的 IP：');
// TODO-TRANSLATE 原文: 'IP Ban!'
define('_AM_BUTTON_BAN_BY_IP', '封鎖 IP！');
// TODO-TRANSLATE 原文: 'IP Bans OK?'
define('_AM_JS_BANCONFIRM', '確定要封鎖這些 IP 嗎？');
// TODO-TRANSLATE 原文: 'IPs are banned'
define('_AM_MSG_BANNEDIP', 'IP 已封鎖');
// TODO-TRANSLATE 原文: 'Protector Log Summary'
define('_AM_ADMINSTATS_TITLE', 'Protector 紀錄摘要');
// XOOPS 2.5.11
// TODO-TRANSLATE 原文: 'Last Month'
define('_AM_ADMINSTATS_LAST_MONTH', '最近一個月');
// TODO-TRANSLATE 原文: 'Last Week'
define('_AM_ADMINSTATS_LAST_WEEK', '最近一週');
// TODO-TRANSLATE 原文: 'Last Day'
define('_AM_ADMINSTATS_LAST_DAY', '最近一天');
// TODO-TRANSLATE 原文: 'Last Hour'
define('_AM_ADMINSTATS_LAST_HOUR', '最近一小時');
