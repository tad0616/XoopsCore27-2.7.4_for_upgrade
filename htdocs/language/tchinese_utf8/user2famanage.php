<?php
/**
 * Two-factor management strings.
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

// TODO-TRANSLATE 原文: 'Two-factor authentication'
define('_US_2FAM_TITLE', '雙因素驗證');
// TODO-TRANSLATE 原文: 'Your current password'
define('_US_2FAM_PASSWORD', '目前的密碼');
// TODO-TRANSLATE 原文: 'Set up an authenticator'
define('_US_2FAM_ENABLE', '設定驗證器');
// TODO-TRANSLATE 原文: 'Confirm authenticator'
define('_US_2FAM_CONFIRM', '確認驗證器');
// TODO-TRANSLATE 原文: 'Choose how you want to receive your second step: an authenticator app, or a code by e-mail.'
define('_US_2FAM_CHOOSE', '請選擇第二步驟驗證的方式：使用驗證器 App，或以電子郵件接收驗證碼。');
// TODO-TRANSLATE 原文: 'Use e-mail codes'
define('_US_2FAM_ENABLE_EMAIL', '使用電子郵件驗證碼');
// TODO-TRANSLATE 原文: 'E-mail codes: a six-digit code is sent to %s each time you sign in. Less secure than an authenticator app, because anyone who can read your e-mail can pass this step.'
define('_US_2FAM_EMAIL_HELP', '電子郵件驗證碼：每次登入時會寄送六位數驗證碼到 %s。安全性低於驗證器 App，因為任何能讀取您電子郵件的人都能通過這個步驟。');
// TODO-TRANSLATE 原文: 'We sent a six-digit code to %s. Enter it below to confirm. It is valid for ten minutes.'
define('_US_2FAM_EMAIL_STEP', '我們已將六位數驗證碼寄到 %s，請在下方輸入以確認，十分鐘內有效。');
// TODO-TRANSLATE 原文: 'Confirm e-mail codes'
define('_US_2FAM_CONFIRM_EMAIL', '確認電子郵件驗證碼');
// TODO-TRANSLATE 原文: 'The six-digit code from the e-mail we just sent you.'
define('_US_2FAM_CODE_HELP_EMAIL', '剛才寄給您的電子郵件中的六位數驗證碼。');
// TODO-TRANSLATE 原文: 'E-mail codes are enrolled. To make a change, enter your current password and the code we e-mail you, or a recovery code. Use the button below to request a code.'
define('_US_2FAM_ENABLED_EMAIL', '已設定電子郵件驗證碼。若要變更，請輸入目前的密碼與我們寄給您的驗證碼，或一組備用碼。請按下方按鈕索取驗證碼。');
// TODO-TRANSLATE 原文: 'Send me a code'
define('_US_2FAM_SEND', '寄驗證碼給我');
// TODO-TRANSLATE 原文: 'Manual setup key'
define('_US_2FAM_MANUAL', '手動設定金鑰');
// TODO-TRANSLATE 原文: 'QR code for your authenticator app'
define('_US_2FAM_SCAN', '驗證器 App 用的 QR Code');
// TODO-TRANSLATE 原文: 'You need an authenticator: any app or password manager that generates time-based one-time codes (TOTP) will work, on your phone or computer. If you do not have one yet, install one of your choice first (e.g. Google Authenticator, Microsoft Authenticator, Aegis or FreeOTP).'
define('_US_2FAM_STEP_APP', '您需要一個驗證器：任何能產生以時間為基礎的一次性驗證碼（TOTP）的 App 或密碼管理工具都可以，手機或電腦皆可。若還沒有，請先自行安裝一個（例如 Google Authenticator、Microsoft Authenticator、Aegis 或 FreeOTP）。');
// TODO-TRANSLATE 原文: 'In the app, add an account: scan this QR code, or choose manual entry and type the setup key shown below it.'
define('_US_2FAM_STEP_ADD', '在 App 中新增帳號：掃描這個 QR Code，或選擇手動輸入並鍵入下方顯示的設定金鑰。');
// TODO-TRANSLATE 原文: 'The app now shows a six-digit code that changes every 30 seconds. Type the code it shows right now into the field below and confirm.'
define('_US_2FAM_STEP_CODE', 'App 會顯示每 30 秒變換一次的六位數驗證碼。請將目前顯示的驗證碼輸入下方欄位並確認。');
// TODO-TRANSLATE 原文: 'The six-digit code your authenticator app shows right now.'
define('_US_2FAM_CODE_HELP', '驗證器 App 目前顯示的六位數驗證碼。');
// TODO-TRANSLATE 原文: 'This connection uses plain HTTP. Your password, session, authenticator setup key and recovery codes can be intercepted. Use HTTPS whenever possible.'
define('_US_2FAM_HTTP', '此連線使用未加密的 HTTP，您的密碼、登入狀態、驗證器設定金鑰與備用碼都可能被攔截。請盡可能使用 HTTPS。');
// TODO-TRANSLATE 原文: 'Save these recovery codes now'
define('_US_2FAM_CODES', '請立即儲存這些備用碼');
// TODO-TRANSLATE 原文: 'Each code works once. These codes will not be displayed again. Keep them somewhere safe, separate from this account.'
define('_US_2FAM_CODES_HELP', '每組備用碼只能使用一次，且之後不會再顯示。請妥善保存在與此帳號分開的安全地方。');
// TODO-TRANSLATE 原文: 'Disable two-factor authentication'
define('_US_2FAM_DISABLE', '停用雙因素驗證');
// TODO-TRANSLATE 原文: 'Replace recovery codes'
define('_US_2FAM_REGENERATE', '更換備用碼');
// TODO-TRANSLATE 原文: 'An authenticator is enrolled. Enter your current password and an authenticator or recovery code to make a change.'
define('_US_2FAM_ENABLED', '已設定驗證器。若要變更，請輸入目前的密碼，以及驗證器驗證碼或一組備用碼。');
// TODO-TRANSLATE 原文: 'Two-factor authentication is disabled.'
define('_US_2FAM_DISABLED', '雙因素驗證已停用。');
// TODO-TRANSLATE 原文: 'The site has paused two-factor challenges. Your factor is kept, and remember-me remains unavailable for enrolled accounts.'
define('_US_2FAM_PAUSED', '本站已暫停雙因素驗證。您的設定會保留，已設定雙因素驗證的帳號仍無法使用「記住我」。');
// TODO-TRANSLATE 原文: 'Two-factor setup or management is unavailable. Please contact the site administrator.'
define('_US_2FAM_UNAVAILABLE', '目前無法設定或管理雙因素驗證，請聯絡網站管理員。');
// TODO-TRANSLATE 原文: 'Setup expired or the account changed. Enter your password to start setup again.'
define('_US_2FAM_STARTAGAIN', '設定已逾時或帳號資料已變更，請輸入密碼重新開始設定。');
// TODO-TRANSLATE 原文: 'Your current password was not accepted.'
define('_US_2FAM_BADPASSWORD', '目前的密碼不正確。');
// TODO-TRANSLATE 原文: 'Reset this user’s two-factor authentication'
define('_US_2FAM_RESET', '重設此使用者的雙因素驗證');
// TODO-TRANSLATE 原文: 'Not enrolled'
define('_US_2FAM_STATUS_NONE', '未設定');
// TODO-TRANSLATE 原文: 'Authenticator app enrolled'
define('_US_2FAM_STATUS_TOTP', '已設定驗證器 App');
// TODO-TRANSLATE 原文: 'E-mail codes enrolled'
define('_US_2FAM_STATUS_EMAIL', '已設定電子郵件驗證碼');
// TODO-TRANSLATE 原文: 'Status unavailable'
define('_US_2FAM_STATUS_UNAVAILABLE', '無法取得狀態');
// TODO-TRANSLATE 原文: 'This disables the user’s second factor, whichever method they enrolled, and revokes their recovery codes and remember-me cookies. Existing signed-in sessions remain active. Enter your own administrator password to confirm.'
define('_US_2FAM_RESET_HELP', '這會停用該使用者的第二步驟驗證（不論設定的是哪種方式），並作廢其備用碼與「記住我」cookie；已登入的工作階段仍會保持有效。請輸入您自己的管理員密碼以確認。');
// TODO-TRANSLATE 原文: 'The user’s two-factor authentication was reset.'
define('_US_2FAM_RESET_DONE', '已重設該使用者的雙因素驗證。');
// TODO-TRANSLATE 原文: 'Back to account'
define('_US_2FAM_BACK', '返回帳號');
// TODO-TRANSLATE 原文: 'Two-factor authentication is enabled.'
define('_US_2FAM_DONE', '雙因素驗證已啟用。');
// TODO-TRANSLATE 原文: 'Previous recovery codes have been revoked.'
define('_US_2FAM_REPLACED', '先前的備用碼已作廢。');
// TODO-TRANSLATE 原文: '%s: two-factor authentication changed'
define('_US_2FAM_NOTICE_SUBJECT', '%s：雙因素驗證已變更');
// TODO-TRANSLATE 原文: 'Two-factor authentication or recovery codes were changed for your account at %s from %s. If this was not you, contact the site administrator.'
define('_US_2FAM_NOTICE_BODY', '有人從 %2$s 變更了您在 %1$s 帳號的雙因素驗證或備用碼。如果這不是您本人操作，請聯絡網站管理員。');
// TODO-TRANSLATE 原文: '%s: an administrator reset your two-factor authentication'
define('_US_2FAM_RESET_SUBJECT', '%s：管理員已重設您的雙因素驗證');
// TODO-TRANSLATE 原文: 'An administrator disabled your second factor and revoked its recovery codes at %s from %s. Existing signed-in sessions remain active. Sign in and set up two-factor authentication again. Contact the site administrator if this was unexpected.'
define('_US_2FAM_RESET_BODY', '管理員從 %2$s 停用了您在 %1$s 的第二步驟驗證，並作廢其備用碼；已登入的工作階段仍會保持有效。請登入後重新設定雙因素驗證。如非預期，請聯絡網站管理員。');
