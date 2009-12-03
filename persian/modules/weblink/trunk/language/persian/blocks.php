<?php
//=========================================================
// WebLinks Module
// for waiting plugin
// 2007-09-01 K.OHWADA
//=========================================================	
// Translated to Persian By :   www.irxoops.org version 1.85
// --- define language begin ---
if( !defined('WEBLINKS_LANG_BL_LOADED') )
{

define('WEBLINKS_LANG_BL_LOADED', 1);
// top.html
define("_MB_WEBLINKS_DISP","نمايش");
define("_MB_WEBLINKS_LINKS","لينکها");
define("_MB_WEBLINKS_CHARS","طول عنوان");
define("_MB_WEBLINKS_LENGTH"," حروف");
define("_MB_WEBLINKS_NEWDAYS","روزهاي لينک جديد");
define("_MB_WEBLINKS_DAYS"," روزها");
define("_MB_WEBLINKS_POPULAR","برخوردهاي لينک محبوب");
define("_MB_WEBLINKS_HITS","دفعات بازديد");
define("_MB_WEBLINKS_PIXEL"," نقطه");
define("_MB_WEBLINKS_RATING","درجه");
define("_MB_WEBLINKS_VOTES","راي ها");
define("_MB_WEBLINKS_COMMENTS","نظر ها");

// catlist.html
define('_MB_WEBLINKS_TOTAL_LINKS',"در کل");
define("_MB_WEBLINKS_IMAGE_MODE","تصوير شاخه را انتخاب کنيد");
define("_MB_WEBLINKS_IMAGE_MODE_0","هيچ");
define("_MB_WEBLINKS_IMAGE_MODE_1","فولدر");
define("_MB_WEBLINKS_IMAGE_MODE_2","تصوير تنظيمات");
define('_MB_WEBLINKS_MAX_WIDTH',"حداکثر عرض تصوير");
define('_MB_WEBLINKS_WIDTH_DEFAULT',"عرض اوليه تصوير");
define("_MB_WEBLINKS_DISPSUB","حداکثر تعداد زير شاخه ها");

// atom feed
define("_MB_WEBLINKS_NUM_FEED","تعداد تغذيه کننده ها");
define("_MB_WEBLINKS_NUM_TITLE","طول عنوان");
define("_MB_WEBLINKS_NUM_SUMMARY","طول خلاصه");
define("_MB_WEBLINKS_NUM_CONTENT","تعداد تغذيه کننده هايي که محتوا را نمايش مي دهند");
define("_MB_WEBLINKS_LINK_ID","شناسه لينک");
define("_MB_WEBLINKS_NO_LINK_ID","هيچ شناسه لينکي موجود نيست");
define("_MB_WEBLINKS_NO_ATOMFEED","هيچ تغذيه کننده متناظري موجود نيست");
define("_MB_WEBLINKS_MORE","اطلاعات بيشتر");

// 2006-11-03
// random block
define('_MB_WEBLINKS_MAX_DESC','بیشترین اندازه توضیحات');
define('_MB_WEBLINKS_SHOW_DATE', 'زمان نمایش');
define('_MB_WEBLINKS_MODE_URL','سبک نمایش آدرس');
define('_MB_WEBLINKS_MODE_URL_SINGLE','singlelink.php');
define('_MB_WEBLINKS_MODE_URL_VISIT','visit.php');
define('_MB_WEBLINKS_MODE_URL_DIRECT','نمایش بی درنگ آدرس');
define('_MB_WEBLINKS_URL_EMPTY','آدرس های خالی');
define('_MB_WEBLINKS_URL_EMPTY_INCLUDE','همراه با آدرس های خالی');
define('_MB_WEBLINKS_URL_EMPTY_EXCLUDE','بدن آدرس های خالی');
define('_MB_WEBLINKS_CATEGORY','شاخه');
define('_MB_WEBLINKS_WITH_SUBCAT','همراه با زیر شاخه');
define('_MB_WEBLINKS_MODE','نوع لینک');
define('_MB_WEBLINKS_RECOMMEND','سایت سفارشی');
define('_MB_WEBLINKS_MUTUAL','سایت دو طرفه');
define('_MB_WEBLINKS_RANDOM','شکل تصادفی');
define('_MB_WEBLINKS_ORDER','سفارشی کردن');
define('_MB_WEBLINKS_ORDER_DESC','Valid when "Random sort" is No');
define('_MB_WEBLINKS_TIME_UPDATE','زمان به روز رسانی');
define('_MB_WEBLINKS_TIME_CREATE','زمان ساخت');
define('_MB_WEBLINKS_TITLE','عنوان');
define('_MB_WEBLINKS_ASC', 'صعودی');
define('_MB_WEBLINKS_DESC','محبوبیت');

// === 2007-03-25 ===
// google map
define('_MB_WEBLINKS_GM_MODE','نوع نقشه گوگل');
define('_MB_WEBLINKS_GM_MODE_DSC','0:بدون نمایش , 1:پیش فرض , 2:مقدار  زیر');
define('_MB_WEBLINKS_GM_LATITUDE','عرض جغرافیای');
define('_MB_WEBLINKS_GM_LONGITUDE','طول جغرافیای');
define('_MB_WEBLINKS_GM_ZOOM','بزرگنمای');
define('_MB_WEBLINKS_GM_HEIGHT','ارتفاع نقشه');
define('_MB_WEBLINKS_GM_TIMEOUT','Delay time for drawing');
define('_MB_WEBLINKS_GM_TIMEOUT_DSC','msec  -1:window.onload');

// 2007-04-08
define('_MB_WEBLINKS_PHOTOS', 'تعداد تصاویر');

// === 2007-08-01 ===
define('_MB_WEBLINKS_CAT_TITLE_LENGTH','طول عنوان شاخه');
define('_MB_WEBLINKS_GM_DESC_LENGTH','پهنا و گنجايش نشانه هاي نقشه');
define('_MB_WEBLINKS_GM_WORDWRAP','پهنا و wordwrap در نقشه');

// === 2007-10-10 ===
define('_MB_WEBLINKS_GM_MARKER_WIDTH','عرض نشانه گذار نقشه');

// === 2008-02-17 ===
define('_MB_WEBLINKS_GM_CONTROL','کنترل نقشه');
define('_MB_WEBLINKS_GM_CONTROL_DSC','0:نمایش نده, 1:نمایش');
define('_MB_WEBLINKS_GM_TYPE_CONTROL','کنترل نوع نقشه');

}
// --- define language end ---

?>