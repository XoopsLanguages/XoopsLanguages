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
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @since           2.3.0
 * @subpackage      Xoops Locale Language 
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

setlocale(LC_ALL, 'fa_IR');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"	
// insert double '\' before 't', 'r', 'n'
define("_TODAY", "امروز G:i:s");
define("_YESTERDAY", "دیروز G:i:s");
define("_MONTHDAY", "G:i:s l j F Y");
define("_YEARMONTHDAY", "G:i l j F Y");
define("_JDF_USE_HEGIRADATE","1");

define("_ELAPSE", "%s پیش");

define("_TIMEFORMAT_DESC", "Valid formats: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />".
                            "\"c\" or \"custom\" - format determined according to interval to present; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />".
                            "specified string - Refer to <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">PHP manual</a>."
							);
//start add file for jalali calendar
include_once("date/jdf.php");
//end add file for jalali calendar
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
        
        if ($format == "rss" || $format == "r") {
            $TIME_ZONE = "";
            if (!empty($GLOBALS['xoopsConfig']['server_TZ'])) {
                $server_TZ = abs( intval( $GLOBALS['xoopsConfig']['server_TZ'] * 3600.0 ) );
                $prefix = ($GLOBALS['xoopsConfig']['server_TZ'] < 0) ?  " -" : " +";
                $TIME_ZONE = $prefix . date("Hi", $server_TZ);
            }
            $date = gmdate("D, d M Y H:i:s", intval($time)) . $TIME_ZONE;
            return $date;
        }
        
        if ( ($format == "elapse" || $format == "e") && $time < time() ) {
            $elapse = time() - $time;
            if ( $days = floor( $elapse / (24 * 3600) ) ) {
                $num = $days > 1 ? sprintf(_DAYS, $days) : _DAY;
            } elseif ( $hours = floor( ( $elapse % (24 * 3600) ) / 3600 ) ) {
                $num = $hours > 1 ? sprintf(_HOURS, $hours) : _HOUR;
            } elseif ( $minutes = floor( ( $elapse % 3600 ) / 60 ) ) {
                $num = $minutes > 1 ? sprintf(_MINUTES, $minutes) : _MINUTE;
            } else {
                $seconds = $elapse % 60;
                $num = $seconds > 1 ? sprintf(_SECONDS, $seconds) : _SECOND;
            }
            $ret = sprintf(_ELAPSE, $num);
               return $ret;
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
            $datestring = "Y-m-d H:i:s";
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
                $today_timestamp = mktime(0, 0, 0, date("m", $current_timestamp), date("d", $current_timestamp), date("Y", $current_timestamp));
            }
            
            if ( abs($elapse_today = $usertimestamp - $today_timestamp) < 24*60*60 ) {
                $datestring = ($elapse_today > 0) ? _TODAY : _YESTERDAY;
            } else {
                if (!isset($monthy_timestamp)) {
                    $monthy_timestamp[0] = mktime(0, 0, 0, 0, 0, date("Y", $current_timestamp));
                    $monthy_timestamp[1] = mktime(0, 0, 0, 0, 0, date("Y", $current_timestamp) + 1);
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
	     return ucfirst(jdate($datestring,$usertimestamp));
	   } else {
             return ucfirst(date($datestring,$usertimestamp));
           }
	// End hacked by irmtfan for show hegira date in persian and other languages www.jadoogaran.org
	}
// end add jalali calendar for persian language 
	function number_format($number)
	{
    	return number_format($number, 2, '.', ',');
	}
	
	function money_format($format, $number)
	{
    	setlocale(LC_MONETARY, 'fa_IR');
    	return money_format($format, $number);
	}
}
?>
