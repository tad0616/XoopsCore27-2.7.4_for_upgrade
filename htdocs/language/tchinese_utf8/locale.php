<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops locale
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
// 合併說明:結構取自 2.7.4 english/locale.php;常數譯文與 setlocale 取自 2.5.11.2 繁中版。
// 2.5.11.2 繁中版的 money_format() 呼叫 PHP 8 已移除的同名函式,已改用 2.7.4 的實作。
defined('XOOPS_ROOT_PATH') || exit('禁止存取');

setlocale(LC_ALL, 'zh_TW.UTF-8');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
define('_TODAY', '今天 G:i');
define('_YESTERDAY', '昨天 G:i');
define('_MONTHDAY', 'n/j G:i');
define('_YEARMONTHDAY', 'Y/n/j G:i');
define('_ELAPSE', '%s 以前');
define('_TIMEFORMAT_DESC', '有效格式： \'s\' - ' . _SHORTDATESTRING . '; \'m\' - ' . _MEDIUMDATESTRING . '; \'l\' - ' . _DATESTRING . ';<br>' . '\'c\' or \'custom\' - format determined according to interval to present; \'e\' - Elapsed; \'mysql\' - Y-m-d H:i:s;<br>' . 'specified string - Refer to <a href=\'https://php.net/manual/en/function.date.php\' rel=\'external\'>PHP manual</a>.');

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * A Xoops Local
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /** 新台幣格式。Pattern 位置參數:%1$s = 金額, %2$s = 符號。 */
    private const CURRENCY = ['locale' => 'zh_TW', 'code' => 'TWD', 'symbol' => 'NT$', 'decimals' => 2, 'decSep' => '.', 'thouSep' => ',', 'pattern' => '%2$s%1$s'];

    /**
     * Number Formats
     *
     * @param  int|float|string $number
     * @return string
     *
     * @throws \TypeError when $number is not int, float, or a numeric string
     */
    public function number_format($number)
    {
        if (is_string($number) && is_numeric($number)) {
            $number = (float) $number;
        }

        return number_format($number, self::CURRENCY['decimals'], self::CURRENCY['decSep'], self::CURRENCY['thouSep']);
    }

    /**
     * Money Format
     *
     * @param  string    $format  legacy money_format()-style format string (ignored, kept for BC)
     * @param  int|float|string $number
     * @return string
     *
     * @throws \TypeError when $number is not int, float, or a numeric string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function money_format($format, $number)
    {
        $c = self::CURRENCY;

        if (extension_loaded('intl')) {
            static $fmt = null;
            if (null === $fmt) {
                $fmt = new \NumberFormatter($c['locale'], \NumberFormatter::CURRENCY);
            }
            if (is_string($number) && is_numeric($number)) {
                $number = (float) $number;
            }
            $result = $fmt->formatCurrency($number, $c['code']);
            if ($result !== false) {
                return $result;
            }
        }

        $amount = $this->number_format($number);

        return sprintf($c['pattern'], $amount, $c['symbol']);
    }
}
