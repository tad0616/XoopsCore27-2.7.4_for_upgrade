<?php
/**
 * SCEditor (BBCode) Editor for XOOPS
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              XOOPS Development Team
 * @since               2.7.3
 * @package             xoopseditor
 */
/*
 * Associated with editor_registry.php
 */
// TODO-TRANSLATE 原文: 'SCEditor (BBCode)'
define('_XOOPS_EDITOR_SCEDITOR', 'SCEditor（BBCode）');

/*
 * Toolbar command labels and prompts, published to the browser as
 * window.xoopsSCEditorLang by sceditor.php and consumed by js/xoops-bbcode.js
 * (which falls back to English when a key is missing).
 */
// TODO-TRANSLATE 原文: 'Strikethrough'
define('_XOOPS_EDITOR_SCEDITOR_STRIKE', '刪除線');
// TODO-TRANSLATE 原文: 'Align left'
define('_XOOPS_EDITOR_SCEDITOR_LEFT', '靠左對齊');
// TODO-TRANSLATE 原文: 'Align center'
define('_XOOPS_EDITOR_SCEDITOR_CENTER', '置中對齊');
// TODO-TRANSLATE 原文: 'Align right'
define('_XOOPS_EDITOR_SCEDITOR_RIGHT', '靠右對齊');
// TODO-TRANSLATE 原文: 'Font Size'
define('_XOOPS_EDITOR_SCEDITOR_SIZE', '字型大小');
// TODO-TRANSLATE 原文: 'Size (%s):'
define('_XOOPS_EDITOR_SCEDITOR_SIZE_PROMPT', '大小（%s）：');
// TODO-TRANSLATE 原文: 'Email'
define('_XOOPS_EDITOR_SCEDITOR_EMAIL', '電子郵件');
// TODO-TRANSLATE 原文: 'Email address:'
define('_XOOPS_EDITOR_SCEDITOR_EMAIL_PROMPT', '電子郵件地址：');
// TODO-TRANSLATE 原文: 'Site URL'
define('_XOOPS_EDITOR_SCEDITOR_SITEURL', '站內網址');
// TODO-TRANSLATE 原文: 'Site-relative path:'
define('_XOOPS_EDITOR_SCEDITOR_SITEURL_PROMPT', '站內相對路徑：');
// TODO-TRANSLATE 原文: 'Quote'
define('_XOOPS_EDITOR_SCEDITOR_QUOTE', '引言');
// TODO-TRANSLATE 原文: 'Code'
define('_XOOPS_EDITOR_SCEDITOR_CODE', '程式碼');
// TODO-TRANSLATE 原文: 'Bulleted list'
define('_XOOPS_EDITOR_SCEDITOR_LIST', '項目符號清單');
// TODO-TRANSLATE 原文: 'Image'
define('_XOOPS_EDITOR_SCEDITOR_IMAGE', '圖片');
// TODO-TRANSLATE 原文: 'Image URL:'
define('_XOOPS_EDITOR_SCEDITOR_IMAGE_PROMPT', '圖片網址：');
// TODO-TRANSLATE 原文: 'YouTube'
define('_XOOPS_EDITOR_SCEDITOR_YOUTUBE', 'YouTube');
// TODO-TRANSLATE 原文: 'YouTube URL or video ID:'
define('_XOOPS_EDITOR_SCEDITOR_YOUTUBE_PROMPT', 'YouTube 網址或影片 ID：');
// TODO-TRANSLATE 原文: 'Width:'
define('_XOOPS_EDITOR_SCEDITOR_WIDTH_PROMPT', '寬度：');
// TODO-TRANSLATE 原文: 'Height:'
define('_XOOPS_EDITOR_SCEDITOR_HEIGHT_PROMPT', '高度：');
// TODO-TRANSLATE 原文: 'Wiki link'
define('_XOOPS_EDITOR_SCEDITOR_WIKI', 'Wiki 連結');
// TODO-TRANSLATE 原文: 'Wiki page:'
define('_XOOPS_EDITOR_SCEDITOR_WIKI_PROMPT', 'Wiki 頁面：');
// TODO-TRANSLATE 原文: 'MP3 audio'
define('_XOOPS_EDITOR_SCEDITOR_MP3', 'MP3 音訊');
// TODO-TRANSLATE 原文: 'MP3 URL (https://.../file.mp3):'
define('_XOOPS_EDITOR_SCEDITOR_MP3_PROMPT', 'MP3 網址（https://.../file.mp3）：');
// TODO-TRANSLATE 原文: 'The image could not be uploaded:'
define('_XOOPS_EDITOR_SCEDITOR_UPLOAD_FAILED', '圖片無法上傳：');
// TODO-TRANSLATE 原文: 'The image is larger than this image category allows.'
define('_XOOPS_EDITOR_SCEDITOR_UPLOAD_TOOBIG', '圖片超過此圖片分類允許的大小。');
