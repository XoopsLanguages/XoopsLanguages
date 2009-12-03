<?php
/**
 * Xoops multi-language string and encoding handling class
 *
 * @copyright	 The XOOPS project http://www.xoops.org/
 * @license      http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package      language
 * @version      $Id: local.php 108 2006-03-23 17:41:10Z phppp $
 * @author       D.J. (phppp)
 * @since        2.2
 */
 
/**
 * The class should be an abstract one using PHP embedded functions
 * based on which, 
 * each local language defines its own equalient methods
 *
 * A comprehensive handler is expected in Xoops 2.3 or 2.4
 */

class XoopsLocalEnglish
{	
	// localized substr
	function substr($str, $start, $length, $trimmarker = '...')
	{
	    if ( !XOOPS_USE_MULTIBYTES ) {
	        return ( strlen($str) - $start <= $length ) ? substr( $str, $start, $length ) : substr( $str, $start, $length - strlen($trimmarker) ) . $trimmarker;
	    }
	    if (function_exists('mb_internal_encoding') && @mb_internal_encoding(_CHARSET)) {
	        $str2 = mb_strcut( $str , $start , $length - strlen( $trimmarker ) );
	        return $str2 . ( mb_strlen($str)!=mb_strlen($str2) ? $trimmarker : '' );
	    }
	    return $str;
	}
	
	// Each local language should define its own equalient utf8_encode 
	function utf8_encode($text)
	{
		return utf8_encode($text);
    }
	
	function convert_encoding($text, $to = 'utf-8', $from = '')
	{
		if (empty($text)) {		
			return $text;
		}
	    if (empty($from)) {
		    $from = empty($GLOBALS["xlanguage"]['charset_base']) ? _CHARSET : $GLOBALS["xlanguage"]['charset_base'];
	    }
	    if (empty($to) || !strcasecmp($to, $from)) {
		    return $text;
	    }
	
		if (XOOPS_USE_MULTIBYTES && function_exists('mb_convert_encoding')) {
			$converted_text = @mb_convert_encoding($text, $to, $from);
		} elseif (function_exists('iconv')) {
			$converted_text = @iconv($from, $to . "//TRANSLIT", $text);
		}
		$text = empty($converted_text) ? $text : $converted_text;
	
	    return $text;
	}

	function trim($text)
	{
	    $ret = trim($text);
	    return $ret;
	}

	/**
	 * Get description for setting time format
	 */	
	function getTimeFormatDesc()
	{
		return _TIMEFORMAT_DESC;
	}
	
	/**
	 * Function to display formatted times in user timezone
	 *
	 * Setting $timeoffset to null (by default) will skip timezone calculation for user, using default timezone instead, which is a MUST for cached contents
	 */
	function formatTimestamp($time, $format = "l", $timeoffset = null)
	{
	    global $xoopsConfig, $xoopsUser;
	    
	    $format_copy = $format;
	    $format = strtolower($format);
	    
	    if ($format == "rss" || $format == "r"){
        	$TIME_ZONE = "";
        	if (!empty($GLOBALS['xoopsConfig']['server_TZ'])){
				$server_TZ = abs(intval($GLOBALS['xoopsConfig']['server_TZ'] * 3600.0));
				$prefix = ($GLOBALS['xoopsConfig']['server_TZ'] < 0) ?  " -" : " +";
				$TIME_ZONE = $prefix.date("Hi", $server_TZ);
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
	    	
	        if ( abs($elapse_today = $usertimestamp - $today_timestamp) < 24*60*60) {
				$datestring = ($elapse_today > 0) ? _TODAY : _YESTERDAY;
			} else {
		    	if (!isset($monthy_timestamp)) {
			    	$monthy_timestamp[0] = mktime(0, 0, 0, 0, 0, date("Y", $current_timestamp));
			    	$monthy_timestamp[1] = mktime(0, 0, 0, 0, 0, date("Y", $current_timestamp) + 1);
		    	}
		        if ($usertimestamp >= $monthy_timestamp[0] && $usertimestamp < $monthy_timestamp[1]) {
					$datestring = _MONTHDAY;
				} else{
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
	
	
	// adding your new functions
	// calling the function:
	// Method 1: echo xoops_local("hello", "Some greeting words");
	// Method 2: echo XoopsLocal::hello("Some greeting words");
	function hello($text)
	{
		$ret = "<div>Hello, ".$text."</div>";
		return $ret;
	}
}
?>