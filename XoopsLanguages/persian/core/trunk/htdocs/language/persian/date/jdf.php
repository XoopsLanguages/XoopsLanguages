<?php
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
include_once dirname(__FILE__) . '/jalali.php';

function jdate($type,$maket="now")
{
    $GLOBALS['xoopsLogger']->addDeprecated("Function " . __FUNCTION__ . "() is deprecated, use XoopsLocaleJalali::jdate() instead");
    return XoopsLocaleJalali::jdate($type,$maket);
}


function jmaketime($hour,$minute,$second,$jmonth,$jday,$jyear)
{
	list( $year, $month, $day ) = jalali_to_gregorian($jyear, $jmonth, $jday);
	$i=mktime($hour,$minute,$second,$month,$day,$year);
	return $i;
}

///Find Day Begining Of Month
function mstart($month,$day,$year)
{
	list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
	list( $year, $month, $day ) = jalali_to_gregorian($jyear, $jmonth,"1");
	$timestamp=mktime(0,0,0,$month,$day,$year);
	return date("w",$timestamp);
}

//Find Number Of Days In This Month
function lastday ($month,$day,$year)
{
	$lastdayen=date("d",mktime(0,0,0,$month+1,0,$year));
	list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
	$lastdatep=$jday;
	$jday=$jday2;
	while($jday2!="1")
	{
		if($day<$lastdayen)
		{
			$day++;
			list( $jyear, $jmonth, $jday2 ) = gregorian_to_jalali($year, $month, $day);
			if($jdate2=="1") break;
			if($jdate2!="1") $lastdatep++;
		}
		else
		{
			$day=0;
			$month++;
			if($month==13)
			{
					$month="1";
					$year++;
			}
		}

	}
	return $lastdatep-1;
}

//translate number of month to name of month
function monthname($month)
{

    if($month=="01") return _JDF_Far;

    if($month=="02") return _JDF_Ord;

    if($month=="03") return _JDF_Kho;

    if($month=="04") return _JDF_Tir;

    if($month=="05") return _JDF_Mor;

    if($month=="06") return _JDF_Sha;

    if($month=="07") return _JDF_Meh;

    if($month=="08") return _JDF_Aba;

    if($month=="09") return _JDF_Aza;

    if($month=="10") return _JDF_Dey;

    if($month=="11") return _JDF_Bah;

    if($month=="12") return _JDF_Esf;
}

////here convert to  number in persian
// http://www.phpclasses.org/package/6626-PHP-Convert-numbers-to-Arabic-representation.html
function Convertnumber2farsi($number)
{
    $GLOBALS['xoopsLogger']->addDeprecated("Function " . __FUNCTION__ . "() is deprecated, use XoopsLocaleJalali::Convertnumber2farsi() instead");
    xoops_load("XoopsUserUtility");
    return XoopsLocaleJalali::Convertnumber2farsi($number);
}///end convert to number in persian
////here convert to  number in english
function Convertnumber2english($number)
{
    $GLOBALS['xoopsLogger']->addDeprecated("Function " . __FUNCTION__ . "() is deprecated, use XoopsLocaleJalali::Convertnumber2english() instead");
    return XoopsLocaleJalali::Convertnumber2english($number);
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

function div($a,$b) {
    return (int) ($a / $b);
}

function gregorian_to_jalali ($g_y, $g_m, $g_d)
{
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);



   $gy = $g_y-1600;
   $gm = $g_m-1;
   $gd = $g_d-1;

   $g_day_no = 365*$gy+div($gy+3,4)-div($gy+99,100)+div($gy+399,400);

   for ($i=0; $i < $gm; ++$i)
      $g_day_no += $g_days_in_month[$i];
   if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0)))
      /* leap and after Feb */
      $g_day_no++;
   $g_day_no += $gd;

   $j_day_no = $g_day_no-79;

   $j_np = div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
   $j_day_no = $j_day_no % 12053;

   $jy = 979+33*$j_np+4*div($j_day_no,1461); /* 1461 = 365*4 + 4/4 */

   $j_day_no %= 1461;

   if ($j_day_no >= 366) {
      $jy += div($j_day_no-1, 365);
      $j_day_no = ($j_day_no-1)%365;
   }

   for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
      $j_day_no -= $j_days_in_month[$i];
   $jm = $i+1;
   $jd = $j_day_no+1;

   return array($jy, $jm, $jd);
}

function jalali_to_gregorian($j_y, $j_m, $j_d)
{
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


   $jy = $j_y-979;
   $jm = $j_m-1;
   $jd = $j_d-1;

   $j_day_no = 365*$jy + div($jy, 33)*8 + div($jy%33+3, 4);
   for ($i=0; $i < $jm; ++$i)
      $j_day_no += $j_days_in_month[$i];

   $j_day_no += $jd;

   $g_day_no = $j_day_no+79;

   $gy = 1600 + 400*div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
   $g_day_no = $g_day_no % 146097;

   $leap = true;
   if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */
   {
      $g_day_no--;
      $gy += 100*div($g_day_no,  36524); /* 36524 = 365*100 + 100/4 - 100/100 */
      $g_day_no = $g_day_no % 36524;

      if ($g_day_no >= 365)
         $g_day_no++;
      else
         $leap = false;
   }

   $gy += 4*div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
   $g_day_no %= 1461;

   if ($g_day_no >= 366) {
      $leap = false;

      $g_day_no--;
      $gy += div($g_day_no, 365);
      $g_day_no = $g_day_no % 365;
   }

   for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)
      $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
   $gm = $i+1;
   $gd = $g_day_no+1;

   return array($gy, $gm, $gd);
}

/*
 * Function to Convert user input time (yyyy-mm-dd hh:mm:ss) in persian to english && Hegira date to Gregorian - by irmtfan (www.jadoogaran.org)
 */
function inputTimeToGregorian($usertime)
{
    $GLOBALS['xoopsLogger']->addDeprecated("Function " . __FUNCTION__ . "() is deprecated, use XoopsLocaleJalali::inputTimeToGregorian() instead");
    return XoopsLocaleJalali::inputTimeToGregorian($usertime);
}