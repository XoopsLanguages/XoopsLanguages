<?php
//  ------------------------------------------------------------------------ ////                XOOPS - PHP Content Management System                      ////                    Copyright (c) 2000 XOOPS.org                           ////                       <http://www.xoops.org/>                             ////  ------------------------------------------------------------------------ ////  This program is free software; you can redistribute it and/or modify     ////  it under the terms of the GNU General Public License as published by     ////  the Free Software Foundation; either version 2 of the License, or        ////  (at your option) any later version.                                      ////                                                                           ////  You may not change or alter any portion of this comment or credits       ////  of supporting developers from this source code or any supporting         ////  source code which is considered copyrighted (c) material of the          ////  original comment or credit authors.                                      ////                                                                           ////  This program is distributed in the hope that it will be useful,          ////  but WITHOUT ANY WARRANTY; without even the implied warranty of           ////  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            ////  GNU General Public License for more details.                             ////                                                                           ////  You should have received a copy of the GNU General Public License        ////  along with this program; if not, write to the Free Software              ////  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA ////  ------------------------------------------------------------------------ ////  Original Author: Alphalogic <alphafake@hotmail.com>					     ////  Original Author Website: http://www.alphalogic-network.de		         ////  ------------------------------------------------------------------------ ////  XOOPS Version made by: (XOOPS 1.3.x and 2.0.x version)			         ////  Jan304 <http://www.jan304.org>									         ////  ------------------------------------------------------------------------ ////  Author:     tank                                                         ////  Website:    http://www.customvirtualdesigns.com                          ////  E-Mail:     tanksplace@comcast.net                                       ////  Date:       12/15/2008                                                   ////  Module:     Shoutbox                                                     ////  File:       language/english/modinfo.php                                 ////  Version:    4.05                                                         ////  ------------------------------------------------------------------------ ////  Change Log                                                               ////  ***                                                                      ////  Version 4.01 Initial CVD Release 10/05/2008                              ////  ***                                                                      ////  Version 4.02  11/01/2008                                                 ////  New: Add captcha enable parameter text                                   ////  New: Improve upon some of the text translations                          ////  ***                                                                      ////  Version 4.03  11/15/2008                                                 ////  New: Eliminate local module copy of the captcha class                    ////  New: Add preference parameter for setting/enabling wordwrap              ////  New: Add preference parameter to enable/disable avatar display in block  ////  New: Add Frameworks captcha support                                      ////  ***                                                                      ////  Version 4.04  12/01/2008                                                 ////  New: Add selectable guest avatars                                        ////  ***                                                                      ////  Version 4.05  12/15/2008                                                 ////  Bug Fix: Clean up a few minor typos                                      ////  ***                                                                      //
// The name of this module
define("_MI_SHOUTBOX_NAME","پیام کوتاه");

// A brief description of this module
define("_MI_SHOUTBOX_DESC","دارای یک بلاک برای گذاشتن پیام کوتاه به همراه یک پاپ آپ");

// Menu
define('_MI_SHOUTBOX_MENU_DB','پایگاه داده');
define('_MI_SHOUTBOX_MENU_FILE','فایل');
define('_MI_SHOUTBOX_MENU_STATUS','وضعیت');

// Names of blocks for this module (Not all module has blocks)
define("_MI_SHOUTBOX_BLOCK","پیام کوتاه");

// Categories
define("_MI_SHOUTBOX_CAT1","--- تنظیمات کلی ---"); 
define("_MI_SHOUTBOX_PREF_CAT1","******* تنظیمات کلی *******"); 
define("_MI_SHOUTBOX_CAT2","--- تنظیمات بلاک ---"); 
define("_MI_SHOUTBOX_PREF_CAT2","******* تنظیمات بلاک *******");
define("_MI_SHOUTBOX_CAT3","--- تنظیمات پاپ آپ ---");
define("_MI_SHOUTBOX_PREF_CAT3","******* تنظیمات پاپ آپ *******"); 
define("_MI_SHOUTBOX_CAT4","--- تنظیمات متن ورودی ---");
define("_MI_SHOUTBOX_PREF_CAT4","******* تنظیمات متن ورودی *******");  

// Config language definitions...
define("_MI_SHOUTBOX_TITLE1","مهمان ها امکان زدن پیام را داشته باشند؟"); 
define("_MI_SHOUTBOX_TITLE2","مهمان ها امکان انتخاب نام را داشته باشند؟");
define("_MI_SHOUTBOX_DESC2","اگر مهمان ها بتوانند پیام بزنند آیا امکان انتخاب نام داشته باشند؟");
define("_MI_SHOUTBOX_TITLE3","اجازه برای استفاده از کد های زوپس");
define("_MI_SHOUTBOX_DESC3","اجازه به کاربران برای استفاده از کدهای زوپس. مثال: [b], [url=], و غیره");
define("_MI_SHOUTBOX_TITLE4","فرمت زمانی");
define("_MI_SHOUTBOX_DESC4","زمان ها و تاریخ با چه فرمتی در شات باکس نشان داده شوند؟ (<a href='http://www.php.net/manual/en/function.date.php' target='_blank'>راهنما</a>)");
define("_MI_SHOUTBOX_TITLE5","تعداد پیام کوتاه");
define("_MI_SHOUTBOX_DESC5","بیشترین تعداد پیام کوتاهی که بعد از آن یکی یکی از پیام ها حذف میشود. (0 = بدون حذف شدن پیام، در انتخاب صفر دقت کنید)");
define("_MI_SHOUTBOX_TITLE6","بیشترین تعداد پیام");
define("_MI_SHOUTBOX_DESC6","چه تعداد پیام درون بلاک نمایش داده شود؟");
define("_MI_SHOUTBOX_TITLE7","ذخیره کردن");
define("_MI_SHOUTBOX_DESC7","مشخص کنید که پیام های کوتاه باید در کجا ذخیره شوند");
define("_MI_SHOUTBOX_OP7_F","فایل[cvs]");
define("_MI_SHOUTBOX_OP7_D","پایگاه داده [mysql]");

define("_MI_SHOUTBOX_TITLE11","لبخندکها درون بلاک نمایش داده شود؟"); 
define("_MI_SHOUTBOX_TITLE12","عرض صفحه نمایش پیام ها");
define("_MI_SHOUTBOX_DESC12","عرض صفحه نمایش پیام ها یکه درون بلاک نمایش داده میشود");
define("_MI_SHOUTBOX_TITLE13","طول صفحه نمایش");
define("_MI_SHOUTBOX_DESC13","طول صفحه نمایش پیام ها یکه درون بلاک نمایش داده میشود.");
define("_MI_SHOUTBOX_TITLE14","عرض حاشیه صفحه نمایش پیام ها");
define("_MI_SHOUTBOX_TITLE15","پاپ آپ فعال شود؟");
define("_MI_SHOUTBOX_DESC15","آیا کاربران بتوانند از پاپ آپ استفاده کنند؟");
define("_MI_SHOUTBOX_TITLE16","رفرش اوتو ماتیک در بلاک فعال شود؟");
define("_MI_SHOUTBOX_OP16_BA0","گزینه ریفریش خودکار را نمایش نده");
define("_MI_SHOUTBOX_OP16_BA1","گزینه ریفریش خودرکا را نمایش بده");
define("_MI_SHOUTBOX_TITLE17","نمایش پیام تنظیم Wordwrap");
define("_MI_SHOUTBOX_DESC17","This value imposes a limit on the number of characters to display per line in the ShoutBox block frame. Setting this value to 0 disables forced wordwrapping.");
define("_MI_SHOUTBOX_TITLE18","نمایش آواتور");
define("_MI_SHOUTBOX_DESC18","مشخص کنید که آواتور در بلاک ماژول نمایش داده شود یا خیر");
define("_MI_SHOUTBOX_TITLE19","آواتور مهمان");
define("_MI_SHOUTBOX_DESC19","<table><tr>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest1.gif\" width=60></td>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest2.gif\" width=60></td>
							   <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest3.gif\" width=60></td>
							   <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest4.gif\" width=60></td>
							   <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest5.gif\" width=60></td>
							   </tr><tr>
							   <td>مهمان۱</td>
                               <td>مهمان۲</td>
							   <td>مهمان۳</td>
							   <td>مهمان۴</td>
							   <td>مهمان۵ </td>
							   </tr></table>");
define("_MI_SHOUTBOX_OP19_GA0","هیچ کدام");
define("_MI_SHOUTBOX_OP19_GA1","مهمان۱");
define("_MI_SHOUTBOX_OP19_GA2","مهمان۲");
define("_MI_SHOUTBOX_OP19_GA3","مهمان۳");
define("_MI_SHOUTBOX_OP19_GA4","مهمان۴");
define("_MI_SHOUTBOX_OP19_GA5","مهمان۵");

define("_MI_SHOUTBOX_TITLE31","نشان دادن افراد آنلاین"); 
define("_MI_SHOUTBOX_DESC31","نشان دادن افراد آنلاین در پاپ آپ. هشدار : بلاک افراد آنلاین که در ماژول سیستم زوپس قرار دارد باید فعال باشد"); 
define("_MI_SHOUTBOX_TITLE32","نشان دادن نوار لبخندکها در پاپ آپ"); 
define("_MI_SHOUTBOX_TITLE33","به صدا درامدن آهنگ در هنگام زدن پیام جدید؟"); 
define("_MI_SHOUTBOX_TITLE34","آیا مهمان ها بتوانند از پاپ آپ استفاده کنند؟"); 
define("_MI_SHOUTBOX_DESC34","اگر پاپ آپ فعال بود مهمان ها بتوانند ازآن استفاده کنند؟"); 
define("_MI_SHOUTBOX_TITLE35","چت شبیه IRC"); 
define("_MI_SHOUTBOX_DESC35","فعال کردن دستورات IRC. در این لحظه فقط /quit و /nick."); 
define("_MI_SHOUTBOX_TITLE36","تمرکز اوتو ماتیک روی پیام ها");
define("_MI_SHOUTBOX_DESC36","به طور اوتوماتیک وقتی در پاپ آپ پیام جدید زده میشود روی آن تمرکز کند"); 
define("_MI_SHOUTBOX_TITLE37","عرض صفحه پاپ آپ"); 
define("_MI_SHOUTBOX_DESC37","عرض پیش فرضی که پاپ آپ با آن باز میشود (پیکسل)"); 
define("_MI_SHOUTBOX_TITLE38","عرض صفحه پاپ آپ"); 
define("_MI_SHOUTBOX_DESC38","عرض پیش فرضی که پاپ آپ با آن باز میشود (پیکسل)");
define("_MI_SHOUTBOX_TITLE40","Shout Text Input Type"); 
define("_MI_SHOUTBOX_DESC40","Shout text entry form selection"); 
define("_MI_SHOUTBOX_OP40_TL","متن یک خطه");
define("_MI_SHOUTBOX_OP40_TA","متن چند خطه");
define("_MI_SHOUTBOX_TITLE41","رديف هاي متن"); 
define("_MI_SHOUTBOX_DESC41","ارتفاع محل متن در ردیف ها"); 
define("_MI_SHOUTBOX_TITLE42","ستون های متن"); 
define("_MI_SHOUTBOX_DESC42","عرض محل متن در ستون ها"); 
define("_MI_SHOUTBOX_TITLE43","درازای خط متن"); 
define("_MI_SHOUTBOX_DESC43","Width of single line text entry in characters"); 
define("_MI_SHOUTBOX_TITLE44","بیشترین کارکتر متن"); 
define("_MI_SHOUTBOX_DESC44","بیشترین درازای متن ورودی"); 
define("_MI_SHOUTBOX_TITLE45","هشدار بیشترین متن ورودی"); 
define("_MI_SHOUTBOX_DESC45","فعال کردن پیام اطلاع رسانی وقتی به انتهای  محدوده متن قابل ورود نزدیک میشود");  
define("_MI_SHOUTBOX_TITLE46","فعال کردن Captcha"); 
define("_MI_SHOUTBOX_DESC46","فعال سازی پیکربندی کد های captcha موردنیاز (سیستم ضد هرزنامه)"); 
define("_MI_SHOUTBOX_OP46_A","غیر فعال - Frameworks/captcha یافت نشد. اگر از زوپس ۲.۳ استفاده میکنید استفاده از Captcha هسته زوپس را فعال کنید.");
define("_MI_SHOUTBOX_OP46_B","نمایش Captcha");
define("_MI_SHOUTBOX_OP46_C","فعال کردن Captcha از فروم ورکر");
define("_MI_SHOUTBOX_OP46_D","فعال کردن Captcha از هسته");
define('_MI_SHOUTBOX_EMPTY','');
?>