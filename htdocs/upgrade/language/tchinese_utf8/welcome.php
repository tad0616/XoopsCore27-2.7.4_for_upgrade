<?php

// _LANGCODE: zh-TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team(繁體中文:依 2.7.4 英文版翻譯)

// TODO-TRANSLATE 原文: <<<'EOT' <h2>XOOPS Upgrader</h2> <p> <em>Upgrade</em> will examine this XOOPS in…(全文見 english 原檔)
define(
    '_XOOPS_UPGRADE_WELCOME',
    '<h2>XOOPS 升級程式</h2>

<p>
<em>升級程式</em>會檢查此 XOOPS 安裝，並套用必要的修補，使其與新版 XOOPS 程式碼相容。
修補內容可能包含資料庫變更、為新設定項目加入預設值、檔案與資料更新等。
<p>
每套用一個修補，升級程式都會回報狀態，並等待您確認後才繼續。升級結束時，
會交由系統模組的更新功能接手。

<div class="alert alert-warning">
升級完成後，別忘了：
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> 刪除 upgrade 資料夾</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> 更新有變動的模組</li>
</div>
',
);
