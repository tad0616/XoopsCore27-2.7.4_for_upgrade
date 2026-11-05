<?php
// _LANGCODE: zh-TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team(繁體中文:依 2.7.4 英文版翻譯)

// TODO-TRANSLATE 原文: 'XOOPS Physical paths'
define('LEGEND_XOOPS_PATHS', 'XOOPS 實體路徑');
// TODO-TRANSLATE 原文: 'Database Character Set'
define('LEGEND_DATABASE', '資料庫字元集');

// TODO-TRANSLATE 原文: 'XOOPS library directory'
define('XOOPS_LIB_PATH_LABEL', 'XOOPS 程式庫目錄');
// TODO-TRANSLATE 原文: 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.'
define('XOOPS_LIB_PATH_HELP', 'XOOPS 程式庫目錄的實體路徑，結尾不要加斜線（為了向後相容）。為了安全，請將此資料夾放在網站根目錄之外。');
// TODO-TRANSLATE 原文: 'XOOPS datafiles directory'
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 資料檔目錄');
// TODO-TRANSLATE 原文: 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.'
define('XOOPS_DATA_PATH_HELP', 'XOOPS 資料檔（可寫入）目錄的實體路徑，結尾不要加斜線（為了向後相容）。為了安全，請將此資料夾放在網站根目錄之外。');

// TODO-TRANSLATE 原文: 'Database character set and collation'
define('DB_COLLATION_LABEL', '資料庫字元集與定序');
// TODO-TRANSLATE 原文: "As of 4.12 MySQL supports custom character set and collation. However it is more complex than expected, so DON'T make any change unless you are confident with your choice."
define('DB_COLLATION_HELP', 'MySQL 從 4.12 起支援自訂字元集與定序，但實際上比想像中複雜，除非您對自己的選擇有把握，否則請勿變更。');
// TODO-TRANSLATE 原文: 'Do not change'
define('DB_COLLATION_NOCHANGE', '不變更');

// TODO-TRANSLATE 原文: 'Path found.'
define('XOOPS_PATH_FOUND', '已找到路徑。');
// TODO-TRANSLATE 原文: 'Could not access the specified folder. Please verify that it exists and is readable by the server.'
define('ERR_COULD_NOT_ACCESS', '無法存取指定的資料夾，請確認資料夾存在且伺服器可以讀取。');
// TODO-TRANSLATE 原文: 'Checking file and directory permissions...'
define('CHECKING_PERMISSIONS', '正在檢查檔案與目錄權限…');
// TODO-TRANSLATE 原文: 'The server must be given write access to the following files and folder<br>(i.e. <em>chmod 777 directory_name</em> on a UNIX/LINUX server)'
define('ERR_NEED_WRITE_ACCESS', '必須讓伺服器對下列檔案與資料夾有寫入權限<br>（例如在 UNIX/Linux 伺服器上執行 <em>chmod 777 目錄名稱</em>）');
// TODO-TRANSLATE 原文: '%s is NOT writable.'
define('IS_NOT_WRITABLE', '%s 無法寫入。');
// TODO-TRANSLATE 原文: '%s is writable.'
define('IS_WRITABLE', '%s 可以寫入。');
// TODO-TRANSLATE 原文: 'Error writing content to mainfile.php, write the content into mainfile.php manually.'
define('ERR_COULD_NOT_WRITE_MAINFILE', '寫入 mainfile.php 時發生錯誤，請手動將內容寫入 mainfile.php。');
