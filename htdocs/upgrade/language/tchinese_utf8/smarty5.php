<?php

// _LANGCODE: zh-TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team(繁體中文:依 2.7.4 英文版翻譯)

// TODO-TRANSLATE 原文: 'XOOPS Smarty 5 Readiness'
define('_XOOPS_SMARTY5_MIGRATION', 'XOOPS Smarty 5 相容性檢查');
// TODO-TRANSLATE 原文: 'Security token mismatch — the request was ignored. Please rescan and try again.'
define('_XOOPS_SMARTY5_BADTOKEN', '安全憑證不符，已忽略此請求。請重新掃描後再試一次。');
// TODO-TRANSLATE 原文: 'No templates were scanned — the directory or extension was not valid. Nothing was recorded; please correct it and rescan.'
define('_XOOPS_SMARTY5_SCAN_SKIPPED', '未掃描任何樣板：目錄或副檔名無效，沒有記錄任何結果。請修正後重新掃描。');

// --- Scanner report (Smarty5ScannerOutput) ---
// TODO-TRANSLATE 原文: 'Smarty 5 Readiness — Scan Results'
define('_XOOPS_SMARTY5_SCANNER_RESULTS', 'Smarty 5 相容性檢查：掃描結果');
// TODO-TRANSLATE 原文: 'Rule'
define('_XOOPS_SMARTY5_SCANNER_RULE', '規則');
// TODO-TRANSLATE 原文: 'Tier'
define('_XOOPS_SMARTY5_SCANNER_TIER', '等級');
// TODO-TRANSLATE 原文: 'Match'
define('_XOOPS_SMARTY5_SCANNER_MATCH', '符合內容');
// TODO-TRANSLATE 原文: 'File'
define('_XOOPS_SMARTY5_SCANNER_FILE', '檔案');
// TODO-TRANSLATE 原文: 'Fix Count'
define('_XOOPS_SMARTY5_SCANNER_FIXED', '修正數');
// TODO-TRANSLATE 原文: 'Not writable — fix file permissions to auto-repair.'
define('_XOOPS_SMARTY5_SCANNER_NOT_WRITABLE', '無法寫入：請修正檔案權限以便自動修復。');

// Per-issue notes
// TODO-TRANSLATE 原文: 'Forward-compatible — can be auto-fixed (valid on Smarty 4 and 5).'
define('_XOOPS_SMARTY5_NOTE_AUTOFIX', '向前相容：可自動修正（在 Smarty 4 與 5 皆有效）。');
// TODO-TRANSLATE 原文: 'Smarty 4 blocker — will not compile. Move PHP logic to the module controller and assign() the result, or register a plugin.'
define('_XOOPS_SMARTY5_NOTE_BLOCKER', 'Smarty 4 阻擋項目：將無法編譯。請將 PHP 邏輯移到模組控制器並以 assign() 傳入結果，或註冊外掛。');
// TODO-TRANSLATE 原文: 'Possible literal markup (e.g. inline JS/ASP) — review; not auto-fixed.'
define('_XOOPS_SMARTY5_NOTE_WARN', '可能是原樣輸出的標記（例如行內 JS／ASP）：請檢查，不會自動修正。');
// TODO-TRANSLATE 原文: 'Manual rework required before Smarty 5 — not auto-fixed.'
define('_XOOPS_SMARTY5_NOTE_MANUAL', '改用 Smarty 5 前需人工修改：不會自動修正。');

// Readiness summary
// TODO-TRANSLATE 原文: 'Smarty 5 Readiness Summary'
define('_XOOPS_SMARTY5_SUMMARY', 'Smarty 5 相容性摘要');
// TODO-TRANSLATE 原文: 'Files checked'
define('_XOOPS_SMARTY5_SUMMARY_CHECKED', '已檢查檔案');
// TODO-TRANSLATE 原文: 'Smarty 4 blockers (must fix)'
define('_XOOPS_SMARTY5_SUMMARY_BLOCKERS', 'Smarty 4 阻擋項目（必須修正）');
// TODO-TRANSLATE 原文: 'Forward-compatible (auto-fixable)'
define('_XOOPS_SMARTY5_SUMMARY_AUTOFIX', '向前相容（可自動修正）');
// TODO-TRANSLATE 原文: 'Manual rework (plan for Smarty 5)'
define('_XOOPS_SMARTY5_SUMMARY_MANUAL', '需人工修改（為 Smarty 5 預作規劃）');

// --- Repair report (Smarty5RepairOutput) ---
// TODO-TRANSLATE 原文: 'Smarty 5 Readiness — Repairs Applied'
define('_XOOPS_SMARTY5_REPAIR_RESULTS', 'Smarty 5 相容性檢查：已套用的修正');
// TODO-TRANSLATE 原文: 'Backup'
define('_XOOPS_SMARTY5_REPAIR_BACKUP', '備份');

// --- Preflight form / scan modes ---
// TODO-TRANSLATE 原文: 'Rescan Options'
define('_XOOPS_SMARTY5_RESCAN_OPTIONS', '重新掃描選項');
// TODO-TRANSLATE 原文: 'Run Scan'
define('_XOOPS_SMARTY5_SCANNER_RUN', '執行掃描');
// TODO-TRANSLATE 原文: 'End scan / proceed'
define('_XOOPS_SMARTY5_SCANNER_END', '結束掃描／繼續');
// TODO-TRANSLATE 原文: 'Scan mode'
define('_XOOPS_SMARTY5_SCAN_MODE', '掃描模式');
// TODO-TRANSLATE 原文: 'Smarty 4 (3→4 prerequisites)'
define('_XOOPS_SMARTY5_MODE_S4', 'Smarty 4（3→4 前置條件）');
// TODO-TRANSLATE 原文: 'Smarty 5 readiness'
define('_XOOPS_SMARTY5_MODE_S5', 'Smarty 5 相容性');
// TODO-TRANSLATE 原文: 'Both (recommended)'
define('_XOOPS_SMARTY5_MODE_BOTH', '兩者皆檢查（建議）');
// TODO-TRANSLATE 原文: 'Tick "Yes" and Run Scan to apply the forward-compatible auto-fixes (block inheritance and date_format). User-customised templates are backed up to *.preflight-bak first.'
define('_XOOPS_SMARTY5_FIX_BUTTON', '勾選「是」並按「執行掃描」，即可套用向前相容的自動修正（區塊繼承與 date_format）。使用者自訂的樣板會先備份為 *.preflight-bak。');

// --- Blocker gate ---
// TODO-TRANSLATE 原文: 'Run the Smarty 5 readiness scan before proceeding with the upgrade.'
define('_XOOPS_SMARTY5_GATE_RUN_SCAN_FIRST', '請先執行 Smarty 5 相容性掃描，再繼續升級。');
// TODO-TRANSLATE 原文: 'The upgrade cannot start while templates contain Smarty-4-incompatible tags that will not render.'
define('_XOOPS_SMARTY5_GATE_BLOCKED', '樣板中含有與 Smarty 4 不相容、無法顯示的標籤，因此無法開始升級。');
// TODO-TRANSLATE 原文: 'The following template(s) contain &lt;{php}&gt; / &lt;{include_php}&gt; tags removed in Smarty 4:'
define('_XOOPS_SMARTY5_GATE_BLOCKER_INTRO', '下列樣板含有 Smarty 4 已移除的 &lt;{php}&gt; ／ &lt;{include_php}&gt; 標籤：');
// TODO-TRANSLATE 原文: 'Move the PHP logic into the module controller and assign() the result to the template, or register a Smarty plugin. Then re-scan.'
define('_XOOPS_SMARTY5_GATE_GUIDANCE', '請將 PHP 邏輯移到模組控制器，以 assign() 將結果傳給樣板，或註冊 Smarty 外掛，然後重新掃描。');
// TODO-TRANSLATE 原文: 'Re-scan'
define('_XOOPS_SMARTY5_GATE_RESCAN', '重新掃描');
// TODO-TRANSLATE 原文: 'I understand that the template(s) listed above contain Smarty-4-incompatible tags that will not render, and I choose to proceed anyway.'
define('_XOOPS_SMARTY5_GATE_OVERRIDE_LABEL', '我了解上列樣板含有與 Smarty 4 不相容、無法顯示的標籤，但仍選擇繼續。');
// TODO-TRANSLATE 原文: 'Proceed despite blockers'
define('_XOOPS_SMARTY5_GATE_OVERRIDE_BUTTON', '仍要繼續');
// TODO-TRANSLATE 原文: 'No blockers found — you may proceed with the upgrade.'
define('_XOOPS_SMARTY5_GATE_PROCEED', '未發現阻擋項目，可以繼續升級。');

// --- Scanner offer (welcome panel) ---
// TODO-TRANSLATE 原文: <<<'EOT' <h3>Preparing your templates for Smarty 5</h3> <p>XOOPS 2.7.x runs on <…(全文見 english 原檔)
define(
    '_XOOPS_SMARTY5_SCANNER_OFFER',
    '<h3>讓您的樣板為 Smarty 5 做好準備</h3>

<p>XOOPS 2.7.x 使用 <strong>Smarty 4</strong>。這項相容性掃描能讓您的網站現在繼續在
Smarty 4 上正常運作，同時為未來的 Smarty 5 引擎預作準備，避免日後出現意外：</p>
<ul>
<li><strong>阻擋項目</strong>（<code>&lt;{php}&gt;</code>、<code>&lt;{include_php}&gt;</code>）以紅色標示，必須先移除才能開始升級。</li>
<li><strong>向前相容</strong>項目（區塊繼承、<code>date_format</code>）可依您的要求自動修正：會先備份，且在 Smarty 4 上輸出結果完全相同。</li>
<li><strong>需人工修改</strong>項目（<code>{insert}</code>、<code>{make_nocache}</code>、地區化日期格式、原生修飾器）只會列出供您規劃，絕不會自動改寫。</li>
</ul>',
);
