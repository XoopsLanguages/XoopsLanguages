<?php
// $Id: lang_jdf_persian.php,v 1 2004/11/20 22:09:15 irmtfan www.jadoogaran.org Exp $
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

/* jdate function */
//set 1 if you want translate number to farsi or if you don't like set 0
// اگه میخواید عددها رو به فارسی نشون بده روی 1 قرار بدید و اگه میخواید انگلیسی نشون بده روی 0 بزارید
define("_JDF_USE_PERSIANNUM","1");
//

///chosse your timezone
// زمان محلی خود را انتخاب کنید تا بر اساس آن زمان محاسبه شود
define("_JDF_TZhours","0");
define("_JDF_TZminute","0");
//

define('_JDF_AM_LONG','قبل از ظهر');
define('_JDF_PM_LONG','بعد از ظهر');

define('_JDF_AM_SHORT','ق.ظ');
define('_JDF_PM_SHORT','ب.ظ');

define('_JDF_Sat_LONG','شنبه');
define('_JDF_Sun_LONG','یکشنبه');
define('_JDF_Mon_LONG','دوشنبه');
define('_JDF_Tue_LONG','سه شنبه');
define('_JDF_Wed_LONG','چهارشنبه');
define('_JDF_Thu_LONG','پنجشنبه');
define('_JDF_Fri_LONG','جمعه');

define('_JDF_Sat_SHORT','ش');
define('_JDF_Sun_SHORT','ی');
define('_JDF_Mon_SHORT','د');
define('_JDF_Tue_SHORT','س');
define('_JDF_Wed_SHORT','چ');
define('_JDF_Thu_SHORT','پ');
define('_JDF_Fri_SHORT','ج');

//English ordinal suffix, textual, 2 characters; i.e. "th", "nd"
//  وقتی میخواهیم بگویم چندیمن عدد به کار میرود در انگلیسی دو نویسه است ولی در فارسی یک نویسه »م« برای آن کافی است مثال: چهارم ، پنجم
define('_JDF_Suffix','م');
//

/* monthname function */
define('_JDF_Far','فروردین');
define('_JDF_Ord','اردیبهشت');
define('_JDF_Kho','خرداد');
define('_JDF_Tir','تیر');
define('_JDF_Mor','مرداد');
define('_JDF_Sha','شهریور');
define('_JDF_Meh','مهر');
define('_JDF_Aba','آبان');
define('_JDF_Aza','آذر');
define('_JDF_Dey','دی');
define('_JDF_Bah','بهمن');
define('_JDF_Esf','اسفند');

/* Convertnumber2farsi && Convertnumber2english functions */
define('_JDF_Num0','۰');
define('_JDF_Num1','۱');
define('_JDF_Num2','۲');
define('_JDF_Num3','۳');
define('_JDF_Num4','۴');
define('_JDF_Num5','۵');
define('_JDF_Num6','۶');
define('_JDF_Num7','۷');
define('_JDF_Num8','۸');
define('_JDF_Num9','۹');
?>