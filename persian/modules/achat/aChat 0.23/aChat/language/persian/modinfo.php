<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

// Créé par Niluge_Kiwi
// v 0.2 2006/08/25 20:11:36
// ======================================================================== //
//
//   www.lmdmf.net
//
// kiwiiii@gmail.com
//
// ======================================================================== //
//

// Module Info

// The name of this module
define('_MI_ACHAT_NAME', 'پیام کوتاه');
// A brief description of this module
define('_MI_ACHAT_DESC','اين ماژول براي چت کردن و با تکنلوژي آزاکس ساخته شده');

// Menu
define("_MI_ACHAT_HOME", "خانه");
define("_MI_ACHAT_PURGE", "پاكسازي كردن");
define("_MI_ACHAT_PERM", "دسترسي ها");
define("_MI_ACHAT_UTILITIES", "ابزار ها");

define("_MI_ACHAT_SMNAME1","ديدن گزارش ها");
define("_MI_ACHAT_SMNAME2","ديدن آرشيو");

define("_MI_ACHAT_GOTO_INDEX","رفتن به ماژول");
define("_MI_ACHAT_HELP","کمک");

// Templates
define('_MI_ACHAT_TDESC0',"پلمپ اصلي براي نمايش اصلي.");
define('_MI_ACHAT_TDESC1',"تلمپ براي نمايش پيام ها");
define('_MI_ACHAT_TDESC2',"تلمپ براي گزارش ها (وظيفه ي پاکسازي)");

// Blocks
define('_MI_ACHAT_BNAME1','چت');
define('_MI_ACHAT_BDESC1','بلاک هاي که نمايش داده ميشود براي ماژول چت');
define('_MI_ACHAT_BNAME2','چت ايستاده( ساکن)');
define('_MI_ACHAT_BDESC2',"بلاک هاي قبلا ديده شده به وصيله ي پيام هاي قبلخارج از اتو ريفريش و صفحه ي ارسال");

// Config
define('_MI_ACHAT_NBRE_MSG_AFF','تعداد پيام هايي که نمايش داده شود');
define('_MI_ACHAT_NBRE_MSG_AFFDSC','تعداد پيام هاي که در صفحه ي اصلي ماژول چت نمايش داده شود (index.php)');

define('_MI_ACHAT_TMP_REFRESH','زمان ريفرش کردن');
define('_MI_ACHAT_TMP_REFRESHDSC','(ثانيه)<br /> شما ميتوانيد هر عدد شناوري را قرار دهيد, براي مثال 1.5,اما از اعداد 3 رقمي نميتوانيد بزرگتر قرار دهيد!(به خاطر باگ در جاوا اسکريپ.)');

define('_MI_ACHAT_USER_SMILIES','از لبخند ها استفاده شود؟');
define('_MI_ACHAT_USE_BBCODES','از کد هاي بي بي استفاده شود؟');

define('_MI_ACHAT_ALLOWED_COLORS','رنگ هاي قابل دسترس براي پيام ها');
define('_MI_ACHAT_ALLOWED_COLORSDESC','رنگ ها رابه وصيله ي | از هم جدا کنيد , و به وسيله ي# خارج کنيد.<br />مثال : "000000|FFFFFF"  رنگ سفيد  و سياه انتخواب شده است<br />ميتوانيد 8 رنگ انتخواب کنيد.');

define('_MI_ACHAT_PURGE_FOLDER','پوشه براي ثبت کردن ها (به وصيله ي پاکسازي)');
define('_MI_ACHAT_PURGE_FOLDERDESC','خالي کردن در پوشه ي قرار دادي (modules/aChat/logs)');

define('_MI_ACHAT_NICK4GUESTS','کاربر مهمان ميتواند نام نمايشي انتخواب کند');
define('_MI_ACHAT_NICK4GUESTSDESC',"نام نمايشي مهمان به رنگ خاکستري نشان داده شود (can be modified on modules/aChat/templates/aChat.css)");
?>
