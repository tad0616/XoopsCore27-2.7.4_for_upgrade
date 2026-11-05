<?php
/**
 * @copyright    2000-2026 XOOPS Project https://xoops.org/
 * @license      GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author       XOOPS Development Team
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */

defined('XOOPS_ROOT_PATH') || exit('Restricted access');

//2.7.0

// Navigation
// TODO-TRANSLATE 原文: 'Menu Manager'
define('_AM_SYSTEM_MENUS_NAV_MAIN', '選單管理');
// TODO-TRANSLATE 原文: 'Back to Menu List'
define('_AM_SYSTEM_MENUS_NAV_BACK', '返回選單列表');
// TODO-TRANSLATE 原文: 'Category View'
define('_AM_SYSTEM_MENUS_NAV_CATEGORY', '分類檢視');
// TODO-TRANSLATE 原文: '<strong>Tips:</strong><ul>' . '<li>Use language constants (e.g. MENUS_HOME) as titles so they can be translated.</li>' . '<li>Create a custom menus.php in your language folder to override constant values.</li>' . '<li>Drag items to reorder. Nesting is supported up to 3 levels deep.</li>' . '</ul>'
define('_AM_SYSTEM_MENUS_NAV_TIPS', '<strong>提示：</strong><ul><li>標題可使用語系常數（例如 MENUS_HOME），以便翻譯。</li><li>在您的語系資料夾建立自訂的 menus.php，即可覆寫常數值。</li><li>拖曳項目即可調整順序，最多支援 3 層巢狀。</li></ul>');

// Common
// TODO-TRANSLATE 原文: 'Active'
define('_AM_SYSTEM_MENUS_ACTIVE', '啟用');
// TODO-TRANSLATE 原文: 'Enabled'
define('_AM_SYSTEM_MENUS_ACTIVE_YES', '已啟用');
// TODO-TRANSLATE 原文: 'Disabled'
define('_AM_SYSTEM_MENUS_ACTIVE_NO', '已停用');
// TODO-TRANSLATE 原文: 'Saved successfully'
define('_AM_SYSTEM_MENUS_SAVED', '儲存成功');
// TODO-TRANSLATE 原文: 'Deleted successfully'
define('_AM_SYSTEM_MENUS_DELETED', '刪除成功');
// TODO-TRANSLATE 原文: 'Order saved'
define('_AM_SYSTEM_MENUS_ORDER_SAVED', '順序已儲存');
// TODO-TRANSLATE 原文: 'List Categories'
define('_AM_SYSTEM_MENUS_LISTCAT', '分類列表');
// TODO-TRANSLATE 原文: 'List Items'
define('_AM_SYSTEM_MENUS_LISTITEM', '項目列表');

// Category
// TODO-TRANSLATE 原文: 'Add Category'
define('_AM_SYSTEM_MENUS_ADDCAT', '新增分類');
// TODO-TRANSLATE 原文: 'Edit Category'
define('_AM_SYSTEM_MENUS_EDITCAT', '編輯分類');
// TODO-TRANSLATE 原文: 'Delete Category'
define('_AM_SYSTEM_MENUS_DELCAT', '刪除分類');
// TODO-TRANSLATE 原文: 'Category Title'
define('_AM_SYSTEM_MENUS_CATTITLE', '分類標題');
// TODO-TRANSLATE 原文: 'A language constant name (e.g. MENUS_HOME) can be used here so the label is translatable.'
define('_AM_SYSTEM_MENUS_CATTITLE_DESC', '可在此使用語系常數名稱（例如 MENUS_HOME），讓標籤可被翻譯。');
// TODO-TRANSLATE 原文: 'Prefix (HTML)'
define('_AM_SYSTEM_MENUS_CATPREFIX', '前綴（HTML）');
// TODO-TRANSLATE 原文: 'Optional markup shown before the category title, such as a Font Awesome icon.'
define('_AM_SYSTEM_MENUS_CATPREFIX_DESC', '顯示在分類標題前的選用標記，例如 Font Awesome 圖示。');
// TODO-TRANSLATE 原文: 'Suffix (HTML)'
define('_AM_SYSTEM_MENUS_CATSUFFIX', '後綴（HTML）');
// TODO-TRANSLATE 原文: 'Optional markup shown after the category title.'
define('_AM_SYSTEM_MENUS_CATSUFFIX_DESC', '顯示在分類標題後的選用標記。');
// TODO-TRANSLATE 原文: 'URL'
define('_AM_SYSTEM_MENUS_CATURL', '網址');
// TODO-TRANSLATE 原文: 'Link for the category itself, such as "index.php" or an absolute URL.'
define('_AM_SYSTEM_MENUS_CATURL_DESC', '分類本身的連結，例如「index.php」或完整網址。');
// TODO-TRANSLATE 原文: 'Link Target'
define('_AM_SYSTEM_MENUS_CATTARGET', '連結開啟方式');
// TODO-TRANSLATE 原文: 'Position'
define('_AM_SYSTEM_MENUS_CATPOSITION', '位置');
// TODO-TRANSLATE 原文: 'Are you sure you want to delete the category "%s" and all its items?'
define('_AM_SYSTEM_MENUS_DELCAT_CONFIRM', '確定要刪除分類「%s」及其所有項目嗎？');

// Item
// TODO-TRANSLATE 原文: 'Add Item'
define('_AM_SYSTEM_MENUS_ADDITEM', '新增項目');
// TODO-TRANSLATE 原文: 'Edit Item'
define('_AM_SYSTEM_MENUS_EDITITEM', '編輯項目');
// TODO-TRANSLATE 原文: 'Delete Item'
define('_AM_SYSTEM_MENUS_DELITEM', '刪除項目');
// TODO-TRANSLATE 原文: 'Item Title'
define('_AM_SYSTEM_MENUS_ITEMTITLE', '項目標題');
// TODO-TRANSLATE 原文: 'A language constant name can be used here so the label is translatable.'
define('_AM_SYSTEM_MENUS_ITEMTITLE_DESC', '可在此使用語系常數名稱，讓標籤可被翻譯。');
// TODO-TRANSLATE 原文: 'Prefix (HTML)'
define('_AM_SYSTEM_MENUS_ITEMPREFIX', '前綴（HTML）');
// TODO-TRANSLATE 原文: 'Optional markup shown before the item title, such as a Font Awesome icon.'
define('_AM_SYSTEM_MENUS_ITEMPREFIX_DESC', '顯示在項目標題前的選用標記，例如 Font Awesome 圖示。');
// TODO-TRANSLATE 原文: 'Suffix (HTML)'
define('_AM_SYSTEM_MENUS_ITEMSUFFIX', '後綴（HTML）');
// TODO-TRANSLATE 原文: 'Optional markup shown after the item title. Supports the <{xoInboxCount}> placeholder.'
define('_AM_SYSTEM_MENUS_ITEMSUFFIX_DESC', '顯示在項目標題後的選用標記，可使用 <{xoInboxCount}> 佔位符。');
// TODO-TRANSLATE 原文: 'URL'
define('_AM_SYSTEM_MENUS_ITEMURL', '網址');
// TODO-TRANSLATE 原文: 'Link Target'
define('_AM_SYSTEM_MENUS_ITEMTARGET', '連結開啟方式');
// TODO-TRANSLATE 原文: 'Position'
define('_AM_SYSTEM_MENUS_ITEMPOSITION', '位置');
// TODO-TRANSLATE 原文: 'Parent Item'
define('_AM_SYSTEM_MENUS_ITEMPARENT', '上層項目');
// TODO-TRANSLATE 原文: 'Category'
define('_AM_SYSTEM_MENUS_ITEMCATEGORY', '分類');
// TODO-TRANSLATE 原文: 'Are you sure you want to delete the item "%s" and its sub-items?'
define('_AM_SYSTEM_MENUS_DELITEM_CONFIRM', '確定要刪除項目「%s」及其子項目嗎？');

// Target options
// TODO-TRANSLATE 原文: 'Same window'
define('_AM_SYSTEM_MENUS_TARGET_SELF', '同一視窗');
// TODO-TRANSLATE 原文: 'New window'
define('_AM_SYSTEM_MENUS_TARGET_BLANK', '新視窗');

// Permissions
// TODO-TRANSLATE 原文: 'Groups that can see this category'
define('_AM_SYSTEM_MENUS_PERMISSION_VIEW_CATEGORY', '可看到此分類的群組');
// TODO-TRANSLATE 原文: 'Users must have category access before any of its items become visible.'
define('_AM_SYSTEM_MENUS_PERMISSION_VIEW_CATEGORY_DESC', '使用者必須先有分類的存取權限，才能看到其中的項目。');
// TODO-TRANSLATE 原文: 'Groups that can see this item'
define('_AM_SYSTEM_MENUS_PERMISSION_VIEW_ITEM', '可看到此項目的群組');
// TODO-TRANSLATE 原文: 'Item permissions are checked after the parent category permission.'
define('_AM_SYSTEM_MENUS_PERMISSION_VIEW_ITEM_DESC', '會先檢查所屬分類的權限，再檢查項目權限。');

// Errors
// TODO-TRANSLATE 原文: 'Category not found'
define('_AM_SYSTEM_MENUS_ERROR_CATNOTFOUND', '找不到分類');
// TODO-TRANSLATE 原文: 'Cannot delete a protected category'
define('_AM_SYSTEM_MENUS_ERROR_CATPROTECTED', '無法刪除受保護的分類');
// TODO-TRANSLATE 原文: 'Cannot activate: the category is inactive'
define('_AM_SYSTEM_MENUS_ERROR_CATINACTIVE', '無法啟用：所屬分類未啟用');
// TODO-TRANSLATE 原文: 'Item not found'
define('_AM_SYSTEM_MENUS_ERROR_ITEMNOTFOUND', '找不到項目');
// TODO-TRANSLATE 原文: 'Cannot delete a protected item'
define('_AM_SYSTEM_MENUS_ERROR_ITEMPROTECTED', '無法刪除受保護的項目');
// TODO-TRANSLATE 原文: 'Invalid parent item selected'
define('_AM_SYSTEM_MENUS_ERROR_ITEMPARENT', '選擇的上層項目無效');
// TODO-TRANSLATE 原文: 'Cannot set parent: it would create a circular reference'
define('_AM_SYSTEM_MENUS_ERROR_ITEMCYCLE', '無法設定上層項目：會形成循環參照');
// TODO-TRANSLATE 原文: 'Maximum nesting depth (3 levels) exceeded'
define('_AM_SYSTEM_MENUS_ERROR_ITEMDEPTH', '超過最大巢狀深度（3 層）');
// TODO-TRANSLATE 原文: 'Cannot activate: the parent item is inactive'
define('_AM_SYSTEM_MENUS_ERROR_PARENTINACTIVE', '無法啟用：上層項目未啟用');
// TODO-TRANSLATE 原文: 'There are no submenu items in this category.'
define('_AM_SYSTEM_MENUS_ERROR_NOITEMS', '此分類中沒有子選單項目。');
// TODO-TRANSLATE 原文: 'Enable this item before editing it'
define('_AM_SYSTEM_MENUS_ERROR_ITEMEDIT', '請先啟用此項目再編輯');
// TODO-TRANSLATE 原文: 'Enable this item before deleting it'
define('_AM_SYSTEM_MENUS_ERROR_ITEMDISABLE', '請先啟用此項目再刪除');
// The front-end MENUS_* labels live in language/<lang>/menus/menus.php.
