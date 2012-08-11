<?php

/**
* $Id: blocks.php,v 1.4 2006/01/27 19:38:01 fx2024 Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Persian Translators: HAMID, VOLTAN & نیما <www.xoops.ir>
* Licence: GNU
*/
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';

define('_MB_SPARTNER_PARTNERS_PSPACE','آیا بین تبلیغات فضای  خالی در نظر گرفته شود؟');
define('_MB_SPARTNER_BRAND','آیا در بلاک ها تبلیغات بصورت تصادفی نمایش داده شود؟');
define('_MB_SPARTNER_BLIMIT','بلاک ها را به تعداد xx تبلیغ محدود کن. (اگر عدد 0 وارد شود به معنی عدم محدودیت در تعداد تبلیغات نمایش داده شده در بلاک ها است.)');
define('_MB_SPARTNER_BSHOW','در بلاک های نمایش داده شود:');
define('_MB_SPARTNER_BORDER','سفارشی کردن محتویات بلاک به وسیله ی:');
define('_MB_SPARTNER_ID','نام کاربری');
define('_MB_SPARTNER_HITS','دفعات بازدید');
define('_MB_SPARTNER_TITLE','عنوان');
define('_MB_SPARTNER_WEIGHT','وزن چینش');
define('_MB_SPARTNER_ASC','صعودی');
define('_MB_SPARTNER_DESC','نزولی');
define('_MB_SPARTNER_IMAGES','تصاویر');
define('_MB_SPARTNER_TEXT','پیوند های متنی');
define('_MB_SPARTNER_BOTH','هر دو');
define('_MB_SPARTNER_FADE','محو کردن تصویر');
define('_MB_SPARTNER_SEE_ALL',"نمایش 'دیدن همه ی تبلیغات'");
define('_MB_SPARTNER_LANG_SEE_ALL',"دیدن همه ی تبلیغات");
define('_MB_SMARTPARTNER_CATEGORY',"شاخه");
define('_MB_SPARTNER_BWIDTH','عرض بلاک');
define('_MB_SPARTNER_BHEIGHT','ارتفاع بلاک');
define('_MB_SPARTNER_BSPEED','سرعت (1 تا 10; ده = سریع)');
define('_MB_SPARTNER_BSPACE','فضای بین هر اسلاید');
define('_MB_SPARTNER_BBG','رنگ پس زمینه (without #)');
define('_MB_SPARTNER_SORT','Sort by');
define('_MB_SPARTNER_ORDER','Order by');
define('_MB_SPARTNER_SHOW_SUBS','نمایش زیر شاخه ها');
define('_MB_SPARTNER_YES','بله');
define('_MB_SPARTNER_NO','خیر');
define('_MB_SPARTNER_LANG_SEE_ALL_OFFERS',"دیدن همه پیشنهاد ها...");
define('_MB_SPARTNER_SHOW_CURR_SUBS','نمایش زیر شاخه های شاخه فعلی');
?>