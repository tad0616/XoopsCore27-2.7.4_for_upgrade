<?php

// _LANGCODE: zh-TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team(繁體中文:依 2.7.4 英文版翻譯)

// TODO-TRANSLATE 原文: 'XOOPS Smarty4 Migration'
define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty 4 移轉');

// TODO-TRANSLATE 原文: 'Scanner Results'
define('_XOOPS_SMARTY4_SCANNER_RESULTS', '掃描結果');
// TODO-TRANSLATE 原文: 'Run Scan'
define('_XOOPS_SMARTY4_SCANNER_RUN', '執行掃描');
// TODO-TRANSLATE 原文: 'Exit Scanner'
define('_XOOPS_SMARTY4_SCANNER_END', '離開掃描');
// TODO-TRANSLATE 原文: 'Rule'
define('_XOOPS_SMARTY4_SCANNER_RULE', '規則');
// TODO-TRANSLATE 原文: 'Match'
define('_XOOPS_SMARTY4_SCANNER_MATCH', '符合內容');
// TODO-TRANSLATE 原文: 'File'
define('_XOOPS_SMARTY4_SCANNER_FILE', '檔案');
// TODO-TRANSLATE 原文: 'Fix Count'
define('_XOOPS_SMARTY4_SCANNER_FIXED', '修正數');
// TODO-TRANSLATE 原文: 'Manual review required'
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', '需人工檢查');
// TODO-TRANSLATE 原文: 'Can be auto-fixed: foreach item variable will be renamed by appending "_item" (e.g. "foo" becomes "foo_item").'
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', '可自動修正：foreach 的 item 變數會在名稱後加上「_item」（例如「foo」會變成「foo_item」）。');
// TODO-TRANSLATE 原文: 'Not Writeable'
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', '無法寫入');

// TODO-TRANSLATE 原文: 'Rescan Options'
define('_XOOPS_SMARTY4_RESCAN_OPTIONS', '重新掃描選項');

// TODO-TRANSLATE 原文: 'Click the "Yes" checkbox below and then click the Run Scan button to try to automatically fix any issues found.'
define('_XOOPS_SMARTY4_FIX_BUTTON', '勾選下方的「是」，再按「執行掃描」，即可嘗試自動修正找到的問題。');
// TODO-TRANSLATE 原文: 'Mark Complete'
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', '標記為完成');

// TODO-TRANSLATE 原文: 'Template Directory (optional)'
define('_XOOPS_SMARTY4_TEMPLATE_DIR', '樣板目錄（選填）');
// TODO-TRANSLATE 原文: 'Template Extension (optional)'
define('_XOOPS_SMARTY4_TEMPLATE_EXT', '樣板副檔名（選填）');


// TODO-TRANSLATE 原文: <<<'EOT' <h3>XOOPS 2.7.0 introduces a significant change: Smarty 4</h3> <p>Unfor…(全文見 english 原檔)
define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    '<h3>XOOPS 2.7.0 有一項重大變更：Smarty 4</h3>

<p>這項變更可能會讓部分舊佈景無法正常運作。因此在進行升級前，請務必依照下列步驟操作：

<li>執行 preflight.php，檢查是否有過時的佈景或模組樣板。</li>
<li>如果發現問題，請參閱此文件了解需要的修改，再進行升級。</li>
<li>完成必要的修改後，再執行一次 preflight.php。</li>
<li>如果已經沒有問題，就可以開始升級。</li>
</p>',
);
