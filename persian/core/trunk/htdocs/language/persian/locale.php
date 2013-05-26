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
 * @version         $Id: locale.php 8066 2011-11-06 05:09:33Z beckmi $
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

setlocale(LC_ALL,'fa_IR');
// lang file in the persian language directory
include_once dirname(__FILE__) . '/locale.lang.php';
// config file in the persian language directory
include_once dirname(__FILE__) . '/locale.config.php';

//start add file for jalali calendar config and language files
include_once dirname(__FILE__) . '/date/jalali.php';

//end add file for jalali calendar config and language files
class XoopsLocal extends XoopsLocalAbstract
{
// start add jalali calendar for persian language 
	/*
	* Function to display formatted times in user timezone
	*/
    function formatTimestamp($time, $format = "l", $timeoffset = null)
    {
        global $xoopsConfig, $xoopsUser;

        $format_copy = $format;
        $format = strtolower($format);

        if ($format == 'rss' || $format == 'r') {
            return parent::formatTimestamp($time, "rss", $timeoffset);
        }

        if (($format == 'elapse' || $format == 'e') && $time < time()) {
            return XoopsLocaleJalali::Convertnumber2farsi(parent::formatTimestamp($time, "elapse", $timeoffset));
        }
        // disable user timezone calculation and use default timezone,
        // for cache consideration
        if ($timeoffset === null) {
            $timeoffset = ($xoopsConfig['default_TZ'] == '') ? '0.0' : $xoopsConfig['default_TZ'];
        }
        $usertimestamp = xoops_getUserTimestamp($time, $timeoffset);
        switch ($format) {
            case 's':
                $datestring = _SHORTDATESTRING;
                break;

            case 'm':
                $datestring = _MEDIUMDATESTRING;
                break;

            case 'mysql':
                $datestring = 'Y-m-d H:i:s';
                break;

            case 'l':
                $datestring = _DATESTRING;
                break;

            case 'c':
            case 'custom':
                static $current_timestamp, $today_timestamp, $monthy_timestamp;
                if (!isset($current_timestamp)) {
                    $current_timestamp = xoops_getUserTimestamp(time(), $timeoffset);
                }
                if (!isset($today_timestamp)) {
                    $today_timestamp = mktime(0, 0, 0, date('m', $current_timestamp), date('d', $current_timestamp), date('Y', $current_timestamp));
                }

                if (abs($elapse_today = $usertimestamp - $today_timestamp) < 24 * 60 * 60) {
                    $datestring = ($elapse_today > 0) ? _TODAY : _YESTERDAY;
                } else {
                    if (!isset($monthy_timestamp)) {
                        $monthy_timestamp[0] = mktime(0, 0, 0, 0, 0, date('Y', $current_timestamp));
                        $monthy_timestamp[1] = mktime(0, 0, 0, 0, 0, date('Y', $current_timestamp) + 1);
                    }
                    if ($usertimestamp >= $monthy_timestamp[0] && $usertimestamp < $monthy_timestamp[1]) {
                        $datestring = _MONTHDAY;
                    } else {
                        $datestring = _YEARMONTHDAY;
                    }
                }
                break;

            default:
                if ($format != '') {
                    $datestring = $format_copy;
                } else {
                    $datestring = _DATESTRING;
                }
                break;
        }

	// Start hacked by irmtfan for show hegira date in persian and other languages www.jadoogaran.org
	if (_JDF_USE_HEGIRADATE && $format != 'mysql' ){
	    return XoopsLocaleJalali::jdate($datestring,$usertimestamp);
	} else {
		return ucfirst(date($datestring,$usertimestamp));
    }
	// End hacked by irmtfan for show hegira date in persian and other languages www.jadoogaran.org
	}
// end add jalali calendar for persian language 
	function number_format($number, $type = _NUM_TYPE)
	{
		switch ($type) {
			case "figure":
				return XoopsLocaleJalali::Convertnumber2farsi($number);
				break;
			case "word":
				return ($number > 0) ? self::num2Words($number) : _NUMWORDS_ZERO;
				break;
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
				return $_numWords["$highno"]." ".$novalue." ".self::num2Words($remainno);
			} else { 
				$unit=$highno%10;
				$ten =(int)($highno/10)*10;             
				return $_numWords["$ten"]." ".$_numWords["$unit"]." ".$novalue." ".self::num2Words($remainno);
			}
		}
	}	
	function money_format($format, $number)
	{
    	setlocale(LC_MONETARY,'fa_IR');
    	return money_format($format, $number);
	}
	// reserved for future versions
	// Core and module developers can use this syntax in the future versions: XoopsLocal::strtotime($inputtime)
	function strtotime($inputtime)
	{
		return strtotime(XoopsLocaleJalali::inputTimeToGregorian($inputtime));
	}

}
?>