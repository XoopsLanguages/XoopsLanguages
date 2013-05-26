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
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @since           2.5.7
 * @package			language::date
 * @author          irmtfan <irmtfan@yahoo.com>
 * @version         $Id: jalali.php
 */
/*
Jalali Date function by Milad Rastian (miladmovie AT yahoo DOT com)

//The main function which convert Gregorian to Jalali calendars is:
// Copyright (C) 2000  Roozbeh Pournader and Mohammad Toossi
//you can see complete note of those function in down of the page

		AND JALAI DATE FUNCTION
this function is simillar than date function in PHP
you can find more about it in http://jdf.farsiprojects.com
		Copyright (C)2003 FARSI PROJECTS GROUP

         //   //\\           //        //\\           //          //////
        //   //  \\         //        //  \\         //            //
       //   //    \\       //        //    \\       //            //
  \\  //   /////\\\\\     //        /////\\\\\     //            //
   \\//   //        \\   ///////   //        \\   //////////   /////

    ///////      //\\         //////   ////////
   //     //    //  \\         //     //
  //     //    //    \\       //     ///////
 //     //    /////\\\\\     //     //
////////     //        \\   //     /////////

*/
defined("XOOPS_ROOT_PATH") or die("Restricted access");
// lang file in the persian language directory
include_once dirname(dirname(__FILE__)) . '/locale.lang.php';
// config file in the persian language directory
include_once dirname(dirname(__FILE__)) . '/locale.config.php';

class XoopsLocaleJalali
{
	/*
	 * persian and english number arrays
	*/
	public static $_numArrEnFa = array(_JDF_NUM0, _JDF_NUM1, _JDF_NUM2, _JDF_NUM3, _JDF_NUM4, _JDF_NUM5, _JDF_NUM6, _JDF_NUM7, _JDF_NUM8, _JDF_NUM9,'.'=>'.');
	public static $_numArrFaEn = array(_JDF_NUM0 => "0", _JDF_NUM1 => "1", _JDF_NUM2 =>"2", _JDF_NUM3=>"3", _JDF_NUM4=>"4", _JDF_NUM5=>"5", _JDF_NUM6=>"6", _JDF_NUM7=>"7", _JDF_NUM8=>"8", _JDF_NUM9=>"9",'.'=>'.');
    /**
     * Function which is same as date() php function for jalali calendar
     * string jdate ( string $format [, int $timestamp = time() ] )
     * Setting $timeoffset to null (by default) will skip timezone calculation for user, using default timezone instead, which is a MUST for cached contents
     *
     * @param $time
     * @param string $format
     * @param null $timeoffset
     * @return string
     */
	static function jdate($format, $timestamp = "now" )
	{
		$result="";
		$timestamp = ($timestamp == "now") ? time() : $timestamp; // backward compatibility
		$timestamp+= _JDF_TZhours*3600+_JDF_TZminute*60;
		$date = date("Y-m-d G:i:s N-l", $timestamp);
		$dateStr = explode(" ", $date);
		list($year, $month, $day) = explode("-",$dateStr[0]);	 
		list($jyear, $jmonth, $jday) = self::gregorian_to_jalali($year, $month, $day);
		list($hour, $minute, $second) = explode(":",$dateStr[1]);
		list($numDay, $weekDay) = explode("-",$dateStr[2]);

		for($i=0;$i<strlen($format);$i++)
		{
			switch ($format[$i])
			{
				// day
				case "d":
					$result.= ($jday<10) ? "0" . $jday : $jday;
					break;
				case "j":
					$result.=$jday;
					break;
				case "l":
					$result.= constant( "_JDF_" . strtoupper($weekDay) );
					break;
				case "D":
					$result.= constant( "_JDF_" . strtoupper(substr($weekDay,0,3)) );
					break;
				case "N": // 1 (for Shanbe) through 7 (for Jome)
					$result.= ($numDay <= 5) ? $numDay+2 : $numDay - 5;
					break;
				case "w": // 0 (for Jome) through 6 (for Panjshanbe)
					$result.= ($numDay <= 4) ? $numDay+2 : $numDay - 5;
					break;
				case "S":
					$result.=_JDF_Suffix;
					break;
				case "z": // TO DO: The day of the year (starting from 0)
					break;
				// week
				case "W": // TO DO: ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)
					break;
				// month
				case "F":
				case "M":
					$result.=constant("_JDF_MONTH" . $jmonth);
					break;
				case "m":
					$result .= ($jmonth<10) ? "0".$jmonth : $jmonth;
					break;
				case "n":
					$result.=$jmonth;
					break;
				case "t":
					$result.=self::jNumDayMonth($jmonth,$jyear);
					break;
				// year
				case "y":
					$result.= substr($jyear,2,2);
					break;
				case "Y":
					$result.=$jyear;
					break;
				case "L":
					$result.= self::jleapYear($jyear);
					break;
				case "o": // TO DO: ISO-8601 year number. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. (added in PHP 5.1.0)
					break;
				// time
				case "A":
					$result .= ($hour > 12) ? _JDF_PM_LONG : _JDF_AM_LONG;
					break;
				case "a":
					$result .= ($hour > 12) ? _JDF_PM_SHORT : _JDF_AM_SHORT;
					break;
					
				// timezone
				case "I": // TO DO: Whether or not the date is in daylight saving time
					break;
				// time
				case "g":
					$result .= ($hour > 12) ? $hour - 12 : $hour;
					break;
				case "G":
					$result .= $hour;
					break;
				case "h":
					$result .= ($hour > 12) ? $hour - 12 : "0" . $hour;
					break;
				case "H":
					$result .= ($hour > 12) ? $hour : "0" . $hour;;
					break;
				case "i":
					$result .= $minute;
					break;
				case "s":
					$result .= $second;
					break;
				/*case "u":
					$result .= $micro;
					break;*/
				// timezone
				case "e":
				case "O":
				case "P":
				case "T":
				case "Z":
					if (!isset($gregorian[$format[$i]])) {
						$gregorian[$format[$i]] = date($format[$i],$timestamp);
					}
					$result.=$gregorian[$format[$i]];
					break;
				default:
					$result.= "{$format[$i]}";
					break;
			}
		}
		return self::Convertnumber2farsi($result);
	}


	static function jmaketime($hour,$minute,$second,$jmonth,$jday,$jyear)
	{
		list( $year, $month, $day ) = self::jalali_to_gregorian($jyear, $jmonth, $jday);
		$i=mktime($hour,$minute,$second,$month,$day,$year);
		return $i;
	}

	///Find Day Begining Of Month
	static function mstart($month,$day,$year)
	{
		list( $jyear, $jmonth, $jday ) = self::gregorian_to_jalali($year, $month, $day);
		list( $year, $month, $day ) = self::jalali_to_gregorian($jyear, $jmonth,"1");
		$timestamp=mktime(0,0,0,$month,$day,$year);
		return date("w",$timestamp);
	}

	//Find Number Of Days In This Month
	static function numDayMonth($year, $month, $day)
	{
		list( $jyear, $jmonth, $jday ) = self::gregorian_to_jalali($year, $month, $day);
		return self::jNumDayMonth($jmonth,$jyear);
	}
	static function jNumDayMonth($jmonth,$jyear)
	{
		return ($jmonth <=6) ? 31 : ( ($jmonth == 12) ? 29 + self::jLeapYear($jyear) : 30 );
	}
	//Find Leap year
	static function leapYear($year)
	{
		return date("L",mktime(0,0,0,1,1,$year));
	}
	static function jLeapYear($jyear)
	{
		return self::leapYear($jyear+621);
	}
	
	////here convert to  number in persian
	// http://www.phpclasses.org/package/6626-PHP-Convert-numbers-to-Arabic-representation.html
	static function Convertnumber2farsi($number)
	{
		if(_JDF_USE_PERSIANNUM == "0") return $number;
		$number = "{$number}";
		if(empty($number))	return _JDF_NUM0;
		$persian_number = '';
		$length = strlen($number);
		for($i=0;$i<$length;$i++) {
			if(isset(self::$_numArrEnFa[$number[$i]])) {
				$persian_number .= self::$_numArrEnFa[$number[$i]];
			} else {
				$persian_number .= "{$number[$i]}";
			}
		}
		return $persian_number;
	}///end convert to number in persian
	////here convert to  number in english
	static function Convertnumber2english($number)
	{
		$number = "{$number}";
		if(empty($number))	return 0;
		$english_number = '';
		$length = strlen($number);
		for($i=0;$i<$length;$i+=2) {
			$persian_one_digit = substr($number,$i,2);
			if(isset(self::$_numArrFaEn[$persian_one_digit])) {
				$english_number .= self::$_numArrFaEn[$persian_one_digit];
			} else {
				$english_number .= "{$number[$i]}";
				$i--;
			}
		}
		return $english_number;

	}


	// "jalali.php" is convertor to and from Gregorian and Jalali calendars.
	// Copyright (C) 2000  Roozbeh Pournader and Mohammad Toossi
	//
	// This program is free software; you can redistribute it and/or
	// modify it under the terms of the GNU General Public License
	// as published by the Free Software Foundation; either version 2
	// of the License, or (at your option) any later version.
	//
	// This program is distributed in the hope that it will be useful,
	// but WITHOUT ANY WARRANTY; without even the implied warranty of
	// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	// GNU General Public License for more details.
	//
	// A copy of the GNU General Public License is available from:
	//
	//    <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">http://www.gnu.org/copyleft/gpl.html</a>
	//

	static function div($a,$b) {
		return (int) ($a / $b);
	}

	static function gregorian_to_jalali ($g_y, $g_m, $g_d)
	{
		$g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);



	   $gy = $g_y-1600;
	   $gm = $g_m-1;
	   $gd = $g_d-1;

	   $g_day_no = 365*$gy+self::div($gy+3,4)-self::div($gy+99,100)+self::div($gy+399,400);

	   for ($i=0; $i < $gm; ++$i)
		  $g_day_no += $g_days_in_month[$i];
	   if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0)))
		  /* leap and after Feb */
		  $g_day_no++;
	   $g_day_no += $gd;

	   $j_day_no = $g_day_no-79;

	   $j_np = self::div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
	   $j_day_no = $j_day_no % 12053;

	   $jy = 979+33*$j_np+4*self::div($j_day_no,1461); /* 1461 = 365*4 + 4/4 */

	   $j_day_no %= 1461;

	   if ($j_day_no >= 366) {
		  $jy += self::div($j_day_no-1, 365);
		  $j_day_no = ($j_day_no-1)%365;
	   }

	   for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
		  $j_day_no -= $j_days_in_month[$i];
	   $jm = $i+1;
	   $jd = $j_day_no+1;

	   return array($jy, $jm, $jd);
	}

	static function jalali_to_gregorian($j_y, $j_m, $j_d)
	{
		$g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


	   $jy = $j_y-979;
	   $jm = $j_m-1;
	   $jd = $j_d-1;

	   $j_day_no = 365*$jy + self::div($jy, 33)*8 + self::div($jy%33+3, 4);
	   for ($i=0; $i < $jm; ++$i)
		  $j_day_no += $j_days_in_month[$i];

	   $j_day_no += $jd;

	   $g_day_no = $j_day_no+79;

	   $gy = 1600 + 400*self::div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
	   $g_day_no = $g_day_no % 146097;

	   $leap = true;
	   if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */
	   {
		  $g_day_no--;
		  $gy += 100*self::div($g_day_no,  36524); /* 36524 = 365*100 + 100/4 - 100/100 */
		  $g_day_no = $g_day_no % 36524;

		  if ($g_day_no >= 365)
			 $g_day_no++;
		  else
			 $leap = false;
	   }

	   $gy += 4*self::div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
	   $g_day_no %= 1461;

	   if ($g_day_no >= 366) {
		  $leap = false;

		  $g_day_no--;
		  $gy += self::div($g_day_no, 365);
		  $g_day_no = $g_day_no % 365;
	   }

	   for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)
		  $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
	   $gm = $i+1;
	   $gd = $g_day_no+1;

	   return array($gy, $gm, $gd);
	}

	/*
	 * function to Convert user input time (yyyy-mm-dd hh:mm:ss) in persian to english && Hegira date to Gregorian - by irmtfan (www.jadoogaran.org)
	 */
	static function inputTimeToGregorian($usertime)
	{
		// convert persian numbers to english if exist
		$usertime = self::Convertnumber2english($usertime);
		list( $jdate, $time) = preg_split ( '/ /', $usertime );
		list( $hour, $minut, $sec ) =  preg_split ( '/:/', $time);
		list( $jyear, $jmonth, $jday ) =  preg_split ( '/-/', $jdate);
		if (_JDF_USE_HEGIRADATE) {
			$timestamp=self::jmaketime($hour - _JDF_TZhours,$minut - _JDF_TZminute,$sec,$jmonth,$jday,$jyear);
		} else {
			$timestamp=mktime($hour,$minut,$sec,$jmonth,$jday,$jyear);
		}
		$usertime=date("Y-m-d H:i:s",$timestamp);
		return $usertime;
	}
}