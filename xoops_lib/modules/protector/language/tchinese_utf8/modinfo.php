<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // The name of this module
    // TODO-TRANSLATE 原文: 'Protector'
    define($constpref . '_NAME', 'Protector');

    // A brief description of this module
    // TODO-TRANSLATE 原文: 'This module protects your XOOPS site from various attacks like DoS, SQL Injection, and Variables contamination.'
    define($constpref . '_DESC', '此模組可保護您的 XOOPS 網站免於各種攻擊，例如 DoS、SQL 注入與變數污染。');

    // Menu
    // TODO-TRANSLATE 原文: 'Protector Center'
    define($constpref . '_ADMININDEX', 'Protector 中心');
    // TODO-TRANSLATE 原文: 'Security Advisory'
    define($constpref . '_ADVISORY', '安全建議');
    // TODO-TRANSLATE 原文: 'Prefix Manager'
    define($constpref . '_PREFIXMANAGER', '前置字管理');
    // TODO-TRANSLATE 原文: 'Permissions'
    define($constpref . '_ADMENU_MYBLOCKSADMIN', '權限');

    // Configs
    // TODO-TRANSLATE 原文: 'Temporary disabled'
    define($constpref . '_GLOBAL_DISBL', '暫時停用');
    // TODO-TRANSLATE 原文: 'All protections are disabled in temporary.<br>Don\'t forget turn this off after shooting the trouble'
    define($constpref . '_GLOBAL_DISBLDSC', '暫時停用所有防護。<br>問題排除後別忘了關閉此選項');

    // TODO-TRANSLATE 原文: 'Default language'
    define($constpref . '_DEFAULT_LANG', '預設語言');
    // TODO-TRANSLATE 原文: 'Specify the language set to display messages before processing common.php'
    define($constpref . '_DEFAULT_LANGDSC', '指定在載入 common.php 之前顯示訊息所用的語系');

    // TODO-TRANSLATE 原文: 'Reliable IPs'
    define($constpref . '_RELIABLE_IPS', '信任的 IP');
    // TODO-TRANSLATE 原文: 'set IPs you can rely separated with | . ^ matches the head of string, $ matches the tail of string.'
    define($constpref . '_RELIABLE_IPSDSC', '設定信任的 IP，以 | 分隔。^ 比對字串開頭，$ 比對字串結尾。');

    // TODO-TRANSLATE 原文: 'Logging level'
    define($constpref . '_LOG_LEVEL', '紀錄等級');
    define($constpref . '_LOG_LEVELDSC', '');

    // TODO-TRANSLATE 原文: 'Banned IP suspension time (sec)'
    define($constpref . '_BANIP_TIME0', '封鎖 IP 的停權時間（秒）');

    // TODO-TRANSLATE 原文: 'none'
    define($constpref . '_LOGLEVEL0', '不記錄');
    // TODO-TRANSLATE 原文: 'Quiet'
    define($constpref . '_LOGLEVEL15', '安靜');
    // TODO-TRANSLATE 原文: 'quiet'
    define($constpref . '_LOGLEVEL63', '較安靜');
    // TODO-TRANSLATE 原文: 'full'
    define($constpref . '_LOGLEVEL255', '完整');

    // TODO-TRANSLATE 原文: 'Protected IP bits for the session'
    define($constpref . '_HIJACK_TOPBIT', 'Session 保護的 IP 位元數');
    // TODO-TRANSLATE 原文: 'Anti Session Hi-Jacking:<br>Default 24/56 (netmask for IPV4/IPV6). (All bits are protected)<br>When your IP is not stable, set the IP range by number of the bits.<br>(eg) If your IP can move in the range of 192.168.0.0-192.168.0.255, set 24(bit) here'
    define($constpref . '_HIJACK_TOPBITDSC', '防止 Session 劫持：<br>預設 24/56（IPv4/IPv6 的網路遮罩）。（保護所有位元）<br>若您的 IP 不固定，請以位元數設定 IP 範圍。<br>（例）若您的 IP 會在 192.168.0.0-192.168.0.255 之間變動，請在此設定 24（位元）');
    // TODO-TRANSLATE 原文: 'Groups disallowed IP moving in a session'
    define($constpref . '_HIJACK_DENYGP', 'Session 中不允許變更 IP 的群組');
    // TODO-TRANSLATE 原文: 'Anti Session Hi-Jacking:<br>Select groups which is disallowed to move their IP in a session.<br>(I recommend to turn Administrator on.)'
    define($constpref . '_HIJACK_DENYGPDSC', '防止 Session 劫持：<br>選擇在同一個 session 中不允許變更 IP 的群組。<br>（建議勾選管理員）');
    // TODO-TRANSLATE 原文: 'Sanitizing null-bytes'
    define($constpref . '_SAN_NULLBYTE', '淨化空位元組');
    // TODO-TRANSLATE 原文: 'The terminating character "\\0" is often used in malicious attacks.<br>a null-byte will be changed to a space.<br>(highly recommended as On)'
    define($constpref . '_SAN_NULLBYTEDSC', '終止字元「\\0」常被用於惡意攻擊。<br>空位元組會被替換為空白。<br>（強烈建議開啟）');
    // TODO-TRANSLATE 原文: 'Exit if null bytes are found'
    define($constpref . '_DIE_NULLBYTE', '發現空位元組時結束執行');
    // TODO-TRANSLATE 原文: 'The terminating character "\\0" is often used in malicious attacks.<br>(highly recommended as On)'
    define($constpref . '_DIE_NULLBYTEDSC', '終止字元「\\0」常被用於惡意攻擊。<br>（強烈建議開啟）');
    // TODO-TRANSLATE 原文: 'Exit if bad files are uploaded'
    define($constpref . '_DIE_BADEXT', '上傳危險檔案時結束執行');
    // TODO-TRANSLATE 原文: 'If someone tries to upload files which have bad extensions like .php , this module exits your XOOPS.<br>If you often attach php files into B-Wiki or PukiWikiMod, turn this off.'
    define($constpref . '_DIE_BADEXTDSC', '若有人嘗試上傳 .php 等危險副檔名的檔案，此模組會中止 XOOPS 的執行。<br>如果您經常在 B-Wiki 或 PukiWikiMod 附加 php 檔，請關閉此選項。');
    // TODO-TRANSLATE 原文: 'Action if a contamination is found'
    define($constpref . '_CONTAMI_ACTION', '發現變數污染時的處置');
    // TODO-TRANSLATE 原文: 'Select the action when someone tries to contaminate system global variables into your XOOPS.<br>(recommended option is blank screen)'
    define($constpref . '_CONTAMI_ACTIONDS', '選擇有人嘗試污染 XOOPS 系統全域變數時的處置方式。<br>（建議選擇空白畫面）');
    // TODO-TRANSLATE 原文: 'Action if an isolated comment-in is found'
    define($constpref . '_ISOCOM_ACTION', '發現孤立註解時的處置');
    // TODO-TRANSLATE 原文: 'Anti SQL Injection:<br>Select the action when an isolated "/*" is found.<br>"Sanitizing" means adding another "*/" in tail.<br>(recommended option is Sanitizing)'
    define($constpref . '_ISOCOM_ACTIONDSC', '防止 SQL 注入：<br>選擇發現孤立的「/*」時的處置方式。<br>「淨化」是指在結尾補上「*/」。<br>（建議選擇淨化）');
    // TODO-TRANSLATE 原文: 'Action if a UNION is found'
    define($constpref . '_UNION_ACTION', '發現 UNION 時的處置');
    // TODO-TRANSLATE 原文: 'Anti SQL Injection:<br>Select the action when some syntax like UNION of SQL.<br>"Sanitizing" means changing "union" to "uni-on".<br>(recommended option is Sanitizing)'
    define($constpref . '_UNION_ACTIONDSC', '防止 SQL 注入：<br>選擇發現 SQL 的 UNION 等語法時的處置方式。<br>「淨化」是指將「union」改為「uni-on」。<br>（建議選擇淨化）');
    // TODO-TRANSLATE 原文: 'Force intval to variables like id'
    define($constpref . '_ID_INTVAL', '強制將 id 類變數轉為整數');
    // TODO-TRANSLATE 原文: 'All requests named "*id" will be treated as integer.<br>This option protects you from some kind of XSS and SQL Injections.<br>Though I recommend to turn this option on, it can cause problems with some modules.'
    define($constpref . '_ID_INTVALDSC', '所有名為「*id」的請求參數都會被當成整數處理。<br>此選項可防範部分 XSS 與 SQL 注入攻擊。<br>雖然建議開啟，但可能造成某些模組運作異常。');
    // TODO-TRANSLATE 原文: 'Protection from Directory Traversals'
    define($constpref . '_FILE_DOTDOT', '防止目錄穿越');
    // TODO-TRANSLATE 原文: 'It eliminates ".." from all requests looks like Directory Traversals'
    define($constpref . '_FILE_DOTDOTDSC', '從所有疑似目錄穿越的請求中移除「..」');

    // TODO-TRANSLATE 原文: 'Anti Brute Force'
    define($constpref . '_BF_COUNT', '防止暴力破解');
    // TODO-TRANSLATE 原文: "Set the maximum number of times a guest is allowed to try and login within 10 minutes. If the failed attempts to login exceed this, the guest's IP address will be banned."
    define($constpref . '_BF_COUNTDSC', '設定訪客在 10 分鐘內允許嘗試登入的最大次數。登入失敗次數超過此值時，該訪客的 IP 位址將被封鎖。');

    // TODO-TRANSLATE 原文: 'Bandwidth limitation'
    define($constpref . '_BWLIMIT_COUNT', '頻寬限制');
    // TODO-TRANSLATE 原文: 'Specify the max access to mainfile.php during watching time. This value should be 0 for normal environments which have enough CPU bandwidth. The number fewer than 10 will be ignored.'
    define($constpref . '_BWLIMIT_COUNTDSC', '指定監看時間內存取 mainfile.php 的最大次數。CPU 資源充足的一般環境請設為 0。小於 10 的數值會被忽略。');

    // TODO-TRANSLATE 原文: 'Modules out of DoS/Crawler checker'
    define($constpref . '_DOS_SKIPMODS', '不做 DoS／爬蟲檢查的模組');
    // TODO-TRANSLATE 原文: 'set the dirnames of the modules separated with |. This option will be useful with chatting module etc.'
    define($constpref . '_DOS_SKIPMODSDSC', '設定模組的目錄名稱，以 | 分隔。適用於聊天室等模組。');

    // TODO-TRANSLATE 原文: 'Watch time for high loadings (sec)'
    define($constpref . '_DOS_EXPIRE', '高負載監看時間（秒）');
    // TODO-TRANSLATE 原文: 'This value specifies the watch time for high-frequent reloading (F5 attack) and high loading crawlers.'
    define($constpref . '_DOS_EXPIREDSC', '此值指定監看頻繁重新載入（F5 攻擊）與高負載爬蟲的時間長度。');

    // TODO-TRANSLATE 原文: 'Bad counts for F5 Attack'
    define($constpref . '_DOS_F5COUNT', 'F5 攻擊判定次數');
    // TODO-TRANSLATE 原文: 'Preventing from DoS attacks.<br>This value specifies the reloading counts to be considered as a malicious attack.'
    define($constpref . '_DOS_F5COUNTDSC', '防止 DoS 攻擊。<br>此值指定重新載入幾次會被視為惡意攻擊。');
    // TODO-TRANSLATE 原文: 'Action against F5 Attack'
    define($constpref . '_DOS_F5ACTION', '對 F5 攻擊的處置');

    // TODO-TRANSLATE 原文: 'Bad counts for Crawlers'
    define($constpref . '_DOS_CRCOUNT', '爬蟲判定次數');
    // TODO-TRANSLATE 原文: 'Preventing from high loading crawlers.<br>This value specifies the access counts to be considered as a bad-manner crawler.'
    define($constpref . '_DOS_CRCOUNTDSC', '防止高負載爬蟲。<br>此值指定存取幾次會被視為不守規矩的爬蟲。');
    // TODO-TRANSLATE 原文: 'Action against high loading Crawlers'
    define($constpref . '_DOS_CRACTION', '對高負載爬蟲的處置');

    // TODO-TRANSLATE 原文: 'Welcomed User-Agent'
    define($constpref . '_DOS_CRSAFE', '歡迎的 User-Agent');
    // TODO-TRANSLATE 原文: 'A perl regex pattern for User-Agent.<br>If it matches, the crawler is never considered as a high loading crawler.<br>eg) /(bingbot|Googlebot|Yahoo! Slurp)/i'
    define($constpref . '_DOS_CRSAFEDSC', 'User-Agent 的 Perl 正規表示式。<br>符合時，該爬蟲永遠不會被視為高負載爬蟲。<br>例）/(bingbot|Googlebot|Yahoo! Slurp)/i');

    // TODO-TRANSLATE 原文: 'None (only logging)'
    define($constpref . '_OPT_NONE', '不處理（僅記錄）');
    // TODO-TRANSLATE 原文: 'Sanitizing'
    define($constpref . '_OPT_SAN', '淨化');
    // TODO-TRANSLATE 原文: 'Blank Screen'
    define($constpref . '_OPT_EXIT', '空白畫面');
    // TODO-TRANSLATE 原文: 'Ban the IP (No limit)'
    define($constpref . '_OPT_BIP', '封鎖 IP（無期限）');
    // TODO-TRANSLATE 原文: 'Ban the IP (moratorium)'
    define($constpref . '_OPT_BIPTIME0', '封鎖 IP（暫時停權）');

    // TODO-TRANSLATE 原文: 'None (only logging)'
    define($constpref . '_DOSOPT_NONE', '不處理（僅記錄）');
    // TODO-TRANSLATE 原文: 'Sleep'
    define($constpref . '_DOSOPT_SLEEP', '延遲回應');
    // TODO-TRANSLATE 原文: 'Blank Screen'
    define($constpref . '_DOSOPT_EXIT', '空白畫面');
    // TODO-TRANSLATE 原文: 'Ban the IP (No limit)'
    define($constpref . '_DOSOPT_BIP', '封鎖 IP（無期限）');
    // TODO-TRANSLATE 原文: 'Ban the IP (moratorium)'
    define($constpref . '_DOSOPT_BIPTIME0', '封鎖 IP（暫時停權）');
    // TODO-TRANSLATE 原文: 'DENY by .htaccess(Experimental)'
    define($constpref . '_DOSOPT_HTA', '以 .htaccess 拒絕（實驗性）');

    // TODO-TRANSLATE 原文: 'Groups never registered as Bad IP'
    define($constpref . '_BIP_EXCEPT', '永不列入封鎖 IP 的群組');
    // TODO-TRANSLATE 原文: 'A user who belongs to the group specified here will never be banned.<br>(I recommend to turn Administrator on.)'
    define($constpref . '_BIP_EXCEPTDSC', '屬於此處指定群組的使用者永遠不會被封鎖。<br>（建議勾選管理員）');

    // TODO-TRANSLATE 原文: 'Disable dangerous features in XOOPS'
    define($constpref . '_DISABLES', '停用 XOOPS 中的危險功能');

    // TODO-TRANSLATE 原文: 'Enable DB Layer trapping anti-SQL-Injection'
    define($constpref . '_DBLAYERTRAP', '啟用 DB 層防 SQL 注入攔截');
    // TODO-TRANSLATE 原文: 'Almost SQL Injection attacks will be canceled by this feature. This feature is required a support from databasefactory. You can check it on Security Advisory page. This setting must be on. Never turn it off casually.'
    define($constpref . '_DBLAYERTRAPDSC', '此功能可阻擋絕大多數的 SQL 注入攻擊，但需要 databasefactory 支援，可在「安全建議」頁面確認。此設定必須開啟，請勿隨意關閉。');
    // TODO-TRANSLATE 原文: 'Never checking _SERVER for anti-SQL-Injection'
    define($constpref . '_DBTRAPWOSRV', '防 SQL 注入時不檢查 _SERVER');
    // TODO-TRANSLATE 原文: 'Some servers always enable DB Layer trapping. It causes wrong detections as SQL Injection attack. If you got such errors, turn this option on. You should know this option weakens the security of DB Layer trapping anti-SQL-Injection.'
    define($constpref . '_DBTRAPWOSRVDSC', '部分伺服器會一律啟用 DB 層攔截，導致誤判為 SQL 注入攻擊。若遇到這類錯誤，請開啟此選項。請注意，此選項會降低 DB 層防 SQL 注入攔截的安全性。');

    // TODO-TRANSLATE 原文: 'enable anti-XSS (BigUmbrella)'
    define($constpref . '_BIGUMBRELLA', '啟用防 XSS（BigUmbrella）');
    // TODO-TRANSLATE 原文: 'This protects you from almost attacks via XSS vulnerabilities. But it is not 100%'
    define($constpref . '_BIGUMBRELLADSC', '可防範絕大多數利用 XSS 漏洞的攻擊，但無法保證百分之百。');

    // TODO-TRANSLATE 原文: 'anti-SPAM: URLs for normal users'
    define($constpref . '_SPAMURI4U', '防垃圾訊息：一般會員的網址數');
    // TODO-TRANSLATE 原文: 'If this number of URLs are found in POST data from users other than admin, the POST is considered as SPAM. 0 means disabling this feature.'
    define($constpref . '_SPAMURI4UDSC', '非管理員使用者送出的 POST 資料中若出現此數量的網址，該 POST 會被視為垃圾訊息。0 表示停用此功能。');
    // TODO-TRANSLATE 原文: 'anti-SPAM: URLs for guests'
    define($constpref . '_SPAMURI4G', '防垃圾訊息：訪客的網址數');
    // TODO-TRANSLATE 原文: 'If this number of URLs are found in POST data from guests, the POST is considered as SPAM. 0 means disabling this feature.'
    define($constpref . '_SPAMURI4GDSC', '訪客送出的 POST 資料中若出現此數量的網址，該 POST 會被視為垃圾訊息。0 表示停用此功能。');

    //3.40b
    // TODO-TRANSLATE 原文: 'Home'
    define($constpref . '_ADMINHOME', '首頁');
    // TODO-TRANSLATE 原文: 'About'
    define($constpref . '_ADMINABOUT', '關於');
    //3.50
    // TODO-TRANSLATE 原文: 'Stop Forum Spam'
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    // TODO-TRANSLATE 原文: 'Checks POST data against spammers registered on www.stopforumspam.com database. Requires php CURL lib.'
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', '比對 www.stopforumspam.com 資料庫中登記的垃圾訊息發送者，檢查 POST 資料。需要 PHP 的 CURL 函式庫。');
    // 3.60
    // TODO-TRANSLATE 原文: 'Overview'
    define($constpref . '_ADMINSTATS', '總覽');
    // TODO-TRANSLATE 原文: 'Suspension time in seconds for automatic IP bans'
    define($constpref . '_BANIP_TIME0DSC', '自動封鎖 IP 的停權時間（秒）');
}
