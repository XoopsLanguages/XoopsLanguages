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
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         kernel
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: locale.php 11355 2013-04-07 03:14:28Z beckmi $
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

setlocale(LC_ALL,'en_US');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"    
// insert double '\' before 't','r','n'
define("_TODAY","\T\o\d\a\y G:i");
define("_YESTERDAY","\Y\e\s\\t\e\\r\d\a\y G:i");
define("_MONTHDAY","n/j G:i");
define("_YEARMONTHDAY","Y/n/j G:i");
define("_ELAPSE","%s ago");
define("_TIMEFORMAT_DESC","Valid formats: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />" . "\"c\" or \"custom\" - format determined according to interval to present; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />" . "specified string - Refer to <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">PHP manual</a>.");
// START convert numbers into words added by irmtfan
define("_NUM_TYPE","word"); // you can choose "figure","word","image" 
define("_NUMWORDS_ZERO","Zero");
global $_numWords;
$_numWords = array(	'0'=> '' ,
					'1'=> 'one' ,
					'2'=> 'two' ,
					'3' => 'three',
					'4' => 'four',
					'5' => 'five',
					'6' => 'six',
					'7' => 'seven',
					'8' => 'eight',
					'9' => 'nine',
					'10' => 'ten',
					'11' => 'eleven',
					'12' => 'twelve',
					'13' => 'thirteen',
					'14' => 'fouteen',
					'15' => 'fifteen',
					'16' => 'sixteen',
					'17' => 'seventeen',
					'18' => 'eighteen',
					'19' => 'nineteen',
					'20' => 'twenty',
					'30' => 'thirty',
					'40' => 'fourty',
					'50' => 'fifty',
					'60' => 'sixty',
					'70' => 'seventy',
					'80' => 'eighty',
					'90' => 'ninty',
					'100' => 'hundred &',
					'1000' => 'thousand &',
					'1000000' => 'million',
					'1000000000' => 'billion');
// END convert numbers into words added by irmtfan
/**
 * A Xoops Local
 *
 * @package     kernel
 * @subpackage  Language
 *
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright   copyright (c) 2000-2009 XOOPS.org
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param unknown_type $number
     * @return unknown
     */
// START convert numbers into words added by irmtfan
	function number_format($number)
	{
		switch (_NUM_TYPE) {
			case "word":
				return ($number > 0) ? XoopsLocal::num2Words($number) : _NUMWORDS_ZERO;
				break;
			case "figure":
			default:
				return $number;
				break;
		}	
	}
	function num2Words($no)
	{
		global $_numWords;
		if($no == 0)
			return ' ';
		else {
			$novalue='';
			$highno=$no;
			$remainno=0;
			$value=100;
			$value1=1000;        
            while($no>=100)    {
                if(($value <= $no) &&($no  < $value1)) {
					$novalue=$_numWords["$value"];
					$highno = (int)($no/$value);
					$remainno = $no % $value;
					break;
                }
                $value= $value1;
                $value1 = $value * 1000;
            }
			if(array_key_exists("$highno",$_numWords)) {
				return $_numWords["$highno"]." ".$novalue." ".XoopsLocal::num2Words($remainno);
			} else { 
				$unit=$highno%10;
				$ten =(int)($highno/10)*10;             
				return $_numWords["$ten"]." ".$_numWords["$unit"]." ".$novalue." ".XoopsLocal::num2Words($remainno);
			}
		}
	}	
// END convert numbers into words added by irmtfan
    /**
     * Money Format 
     *
     * @param string $format
     * @param string $number
     * @return money format
     */
    function money_format($format, $number)
    {
        setlocale(LC_MONETARY,'en_US');
        return money_format($format, $number);
    }
}