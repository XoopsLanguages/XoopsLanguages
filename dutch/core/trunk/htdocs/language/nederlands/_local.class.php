<?php

////////////////////////////////////////////////////////////////
//############################################################//
//## Translated by : Dylian Melgert                         ##//
//## Website       : http://www.dylian.melgert.net/software ##//
//## XOOPS version : 2.3 RC3                                ##//
//############################################################//
////////////////////////////////////////////////////////////////

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
		if(empty($text)) {		
			return $text;
		}
	    if(empty($from)) $from = empty($GLOBALS["xlanguage"]['charset_base']) ? _CHARSET : $GLOBALS["xlanguage"]['charset_base'];
	    if (empty($to) || !strcasecmp($to, $from)) return $text;
	
		if(XOOPS_USE_MULTIBYTES && function_exists('mb_convert_encoding')) $converted_text = @mb_convert_encoding($text, $to, $from);
		else
		if(function_exists('iconv')) $converted_text = @iconv($from, $to . "//TRANSLIT", $text);
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
	    
	    if(strtolower($format) == "rss" ||strtolower($format) == "r"){
        	$TIME_ZONE = "";
        	if(!empty($GLOBALS['xoopsConfig']['server_TZ'])){
				$server_TZ = abs(intval($GLOBALS['xoopsConfig']['server_TZ'] * 3600.0));
				$prefix = ($GLOBALS['xoopsConfig']['server_TZ'] < 0) ?  " -" : " +";
				$TIME_ZONE = $prefix.date("Hi", $server_TZ);
			}
			$date = gmdate("D, d M Y H:i:s", intval($time)) . $TIME_ZONE;
			return $date;
    	}
    	
    	// disable user timezone calculation and use default timezone,
    	// for cache consideration
    	if($timeoffset === null) {
	    	$timeoffset = ($xoopsConfig['default_TZ'] == '') ? '0.0' : $xoopsConfig['default_TZ'];
    	}
    	
	    $usertimestamp = xoops_getUserTimestamp($time, $timeoffset);
	    
	    switch (strtolower($format)) {
        case 's':
	        $datestring = _SHORTDATESTRING;
	        break;
        case 'm':
	        $datestring = _MEDIUMDATESTRING;
	        break;
        case 'mysql':
	        $datestring = "d-m-Y H:i:s";
	        break;
        case 'rss':
	    	$datestring = "r";
	        break;
        case 'l':
	        $datestring = _DATESTRING;
	        break;
	   	case 'e':
	   	case 'elapse':
		    static $current_timestamp;
        	if(!isset($current_timestamp)) {
		    	$current_timestamp = xoops_getUserTimestamp(time(), $timeoffset);
	    	}
			$elapse = $current_timestamp - $usertimestamp;
			if( $days = floor( $elapse / (24 * 3600) ) ) {
				$ret = sprintf(_ELAPSE_DAYS, $days);
			}elseif( $hours = floor( ( $elapse % (24 * 3600) ) / 3600 ) ) {
				$ret = sprintf(_ELAPSE_HOURS, $hours);
			}else {
				$minutes = floor( ( $elapse % (24 * 60) ) / 60 );
				$ret = sprintf(_ELAPSE_MINUTES, $minutes);
			}	   	
	   		return $ret;
	   		break;
        case 'c':
        case 'custom':
		    static $current_timestamp, $today_timestamp, $monthy_timestamp;
        	if(!isset($current_timestamp)) {
		    	$current_timestamp = xoops_getUserTimestamp(time(), $timeoffset);
	    	}
	    	if(!isset($today_timestamp)) {
		    	$today_timestamp = mktime(0, 0, 0, date("m", $current_timestamp), date("d", $current_timestamp), date("Y", $current_timestamp));
	    	}
	        if($usertimestamp >= $today_timestamp) {
				$datestring = _TODAY;
			}elseif($usertimestamp >= $today_timestamp - 24*60*60) {
				$datestring = _YESTERDAY;
			}else {
		    	if(!isset($monthy_timestamp)) {
			    	$monthy_timestamp = mktime(0, 0, 0, 0, 0, date("Y", $current_timestamp));
		    	}
		        if($usertimestamp >= $monthy_timestamp) {
					$datestring = _MONTHDAY;
				}else{
					$datestring = _YEARMONTHDAY;
				}
			}
	        break;
        default:
	        if ($format != '') {
	            $datestring = $format;
	        } else {
	            $datestring = _DATESTRING;
	        }
	        break;
	    }
	    
	    return ucfirst(date($datestring, $usertimestamp));
	}
	
	
	// adding your new functions
	// calling the function:
	// Method 1: echo xoops_local("hello", "Some greeting words");
	// Method 2: echo XoopsLocal::hello("Some greeting words");
	function hello($text)
	{
		$ret = "<div>Hallo, ".$text."</div>";
		return $ret;
	}
}
?>
