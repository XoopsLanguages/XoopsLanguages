<?php
// $Id: local.php,v 1.1.2.3.2.1 2005/09/18 13:49:06 mithyt2 Exp $

// Local handler for string and encoding
class XoopsLocal
{	
	// localized substr
	function &substr($str, $start, $length, $trimmarker = '...')
	{
	    if ( !XOOPS_USE_MULTIBYTES ) {
	        return ( strlen($str) - $start <= $length ) ? substr( $str, $start, $length ) : substr( $str, $start, $length - strlen($trimmarker) ) . $trimmarker;
	    }
	    if (function_exists('mb_internal_encoding') && @mb_internal_encoding(_CHARSET)) {
	        $str2 = mb_strcut( $str , $start , $length - strlen( $trimmarker ) );
	        return $str2 . ( mb_strlen($str)!=mb_strlen($str2) ? $trimmarker : '' );
	    }
	}
	
	function &utf8_encode(&$text)
	{
		$text = XoopsLocal::convert_encoding($text, 'utf-8');
	        return $text;
	    }
	
	function &convert_encoding(&$text, $to='utf-8', $from='')
	{
		if(empty($text)) {		
			return $text;
		}
	    if(empty($from)) $from = _CHARSET;
	    if (empty($to) || !strcasecmp($to, $from)) return $text;
	
		if(XOOPS_USE_MULTIBYTES && function_exists('mb_convert_encoding')) $converted_text = @mb_convert_encoding($text, $to, $from);
		else
		if(function_exists('iconv')) $converted_text = @iconv($from, $to . "//TRANSLIT", $text);
		$text = empty($converted_text)?$text:$converted_text;
	
	    return $text;
	}

	function &trim($text)
	{
	    return trim($text);
	}
	
	/*
	* Function to display formatted times in user timezone
	*/
	function formatTimestamp($time, $format="l", $timeoffset="")
	{
	    global $xoopsConfig, $xoopsUser;
	    $usertimestamp = xoops_getUserTimestamp($time, $timeoffset);
	    switch (strtolower($format)) {
	        case 's':
	        $datestring = _SHORTDATESTRING;
	        break;
	        case 'm':
	        $datestring = _MEDIUMDATESTRING;
	        break;
	        case 'mysql':
	        $datestring = "d.m.Y H:m:s";
	        break;
	        case 'rss':
	    	$datestring = "r";
	        break;
	        case 'l':
	        $datestring = _DATESTRING;
	        break;
	        case 'c':
	        case 'custom':	        
	        if(date("dmY", $usertimestamp) == date("dmY")){
				$datestring = _TODAY;
			}elseif(date("dmY", $usertimestamp+24*60*60) == date("dmY")){
				$datestring = _YESTERDAY;
			}elseif(date("Y", $usertimestamp) == date("Y")){
				$datestring = _MONTHDAY;
			}else{
				$datestring = _YEARMONTHDAY;
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
	function &hello($text)
	{
		return "<div>Pozdrav, ".$text."</div>";
	}
}
?>