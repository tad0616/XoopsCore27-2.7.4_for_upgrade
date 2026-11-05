<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
// TODO-TRANSLATE 原文: 'Second step'
define('_US_2FA_TITLE', '第二步驟驗證');
// TODO-TRANSLATE 原文: 'Enter the code from your authenticator app'
define('_US_2FA_PROMPT', '請輸入驗證器 App 上顯示的驗證碼');
// TODO-TRANSLATE 原文: 'Authenticator code'
define('_US_2FA_CODE', '驗證器驗證碼');
// TODO-TRANSLATE 原文: 'We sent a six-digit code to %s. Enter it below.'
define('_US_2FA_PROMPT_EMAIL', '我們已將六位數驗證碼寄到 %s，請在下方輸入。');
// TODO-TRANSLATE 原文: 'Code from your e-mail'
define('_US_2FA_CODE_EMAIL', '電子郵件中的驗證碼');
// TODO-TRANSLATE 原文: 'Send a new code'
define('_US_2FA_SEND', '重新寄送驗證碼');
// TODO-TRANSLATE 原文: 'A new code was sent to %s. It is valid for ten minutes.'
define('_US_2FA_SENT', '新的驗證碼已寄到 %s，十分鐘內有效。');
// TODO-TRANSLATE 原文: 'A code was sent less than a minute ago. Check your inbox and spam folder before requesting another one.'
define('_US_2FA_SEND_WAIT', '不到一分鐘前已寄出驗證碼，請先檢查收件匣與垃圾郵件匣，再重新索取。');
// TODO-TRANSLATE 原文: 'The code could not be sent right now. Try again in a moment, or use a recovery code.'
define('_US_2FA_SEND_FAILED', '目前無法寄送驗證碼，請稍後再試，或改用備用碼。');
// TODO-TRANSLATE 原文: '%s: your sign-in code'
define('_US_2FA_EMAIL_SUBJECT', '%s：您的登入驗證碼');
// TODO-TRANSLATE 原文: 'Your sign-in code for %s is: %s It is valid for %d minutes and works once. If you did not request it, ignore this message and consider changing your password.'
define('_US_2FA_EMAIL_BODY', '您在 %s 的登入驗證碼是：

%s

此驗證碼 %d 分鐘內有效，且只能使用一次。如果您沒有要求此驗證碼，請忽略這封信，並考慮變更密碼。');
// TODO-TRANSLATE 原文: 'Use a recovery code instead'
define('_US_2FA_RECOVERY', '改用備用碼');
// TODO-TRANSLATE 原文: 'Each recovery code works once. Using one sends you an e-mail.'
define('_US_2FA_RECOVERY_HINT', '每組備用碼只能使用一次，使用後會寄電子郵件通知您。');
// TODO-TRANSLATE 原文: 'Continue'
define('_US_2FA_SUBMIT', '繼續');
// TODO-TRANSLATE 原文: 'This sign-in has expired or was interrupted. Please start again.'
define('_US_2FA_STARTAGAIN', '此次登入已逾時或被中斷，請重新開始。');
// TODO-TRANSLATE 原文: 'Back to the login form'
define('_US_2FA_BACKTOLOGIN', '返回登入表單');
// TODO-TRANSLATE 原文: 'That code was not accepted.'
define('_US_2FA_BADCODE', '驗證碼不正確。');
// TODO-TRANSLATE 原文: 'Too many attempts. The second step is locked for fifteen minutes; a recovery code still works.'
define('_US_2FA_LOCKED', '嘗試次數過多，第二步驟驗證已鎖定十五分鐘；備用碼仍可使用。');
// TODO-TRANSLATE 原文: 'The second step is not available right now. A recovery code still works, or contact the site administrator.'
define('_US_2FA_UNAVAILABLE', '第二步驟驗證目前無法使用。您仍可使用備用碼，或聯絡網站管理員。');
// TODO-TRANSLATE 原文: 'This account has two-factor authentication enabled. Please sign in through the site\'s login page.'
define('_US_2FA_REQUIRED', '此帳號已啟用雙因素驗證，請透過網站的登入頁面登入。');
// TODO-TRANSLATE 原文: 'This popup cannot complete a two-factor login over HTTP because your password would be sent without encryption. Use the site login instead, or ask the administrator to enable HTTPS for the site.'
define('_US_2FA_HTTP_LOGIN', '此彈出視窗無法透過 HTTP 完成雙因素登入，因為您的密碼會以未加密方式傳送。請改用網站的登入頁面，或請網站管理員為網站啟用 HTTPS。');
// TODO-TRANSLATE 原文: '%s: second step locked'
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s：第二步驟驗證已鎖定');
// TODO-TRANSLATE 原文: 'Five wrong second-step codes were entered for your account at %s from %s. The second step is locked for fifteen minutes. If this was not you, change your password.'
define('_US_2FA_LOCKED_MAIL_BODY', '您在 %s 的帳號從 %s 連續輸入了五次錯誤的第二步驟驗證碼，第二步驟驗證已鎖定十五分鐘。如果這不是您本人操作，請變更密碼。');
// TODO-TRANSLATE 原文: '%s: a recovery code was used'
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s：已使用一組備用碼');
// TODO-TRANSLATE 原文: 'A recovery code was used to sign in to your account at %s from %s. That code no longer works. If this was not you, change your password and reset your recovery codes.'
define('_US_2FA_RECOVERY_MAIL_BODY', '有人從 %2$s 使用備用碼登入您在 %1$s 的帳號，該組備用碼已失效。如果這不是您本人操作，請變更密碼並重設備用碼。');
