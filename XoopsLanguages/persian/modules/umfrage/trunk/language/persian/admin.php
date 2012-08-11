<?php

// $Id: admin.php 1 2007-10-30 11:28:51Z LupusC $
//%%%%%%	Admin Module Name  Polls 	%%%%%
define("_AM_DBUPDATED","پایگاه داده با موفقیت به روز شد!");
define("_AM_POLLCONF","تنظیمات نظرسنجی ها");
define("_AM_POLLSLIST","فهرست نظرسنجی ها");
define("_AM_AUTHOR","سازنده این نظرسنجی");
define("_AM_DISPLAYBLOCK","در بلاک نمایش داده شود؟");
define("_AM_POLLQUESTION","پرسش نظرسنجی");
define("_AM_VOTERS","همه رای دهنده ها");
define("_AM_VOTES","همه رای ها");
define("_AM_EXPIRATION","تاریخ به پایان رسیدن نظرسنجی");
define("_AM_EXPIRED","به پایان رسیده است");
define("_AM_VIEWLOG","دیدن اطلاعات");
define("_AM_CREATNEWPOLL","ساختن نظرسنجی جدید");
define("_AM_POLLDESC","شرح نظرسنجی");
define("_AM_DISPLAYORDER","مکان نظرسنجی");
define("_AM_ALLOWMULTI","اجازه برای انتخاب چند گزینه؟");
define("_AM_MULTI_LIMIT","رای دهنده چه تعداد گزینه را میتواند انتخاب کند؟");
define("_AM_MULTI_LIMIT_HELP","این گزینه فقط در موقعی مورد نیاز است که شما از امکان انتخاب چند گزینه استفاده کرده باشید. برای عدم ایجاد محدودیت این گزینه را خالی بگذارید.");
define("_AM_NOTIFY","وقتی که نظرسنجی تمام شد به سازنده نظرسنجی اطلاع بده؟");
define("_AM_NOTIFY_VOTER","به کاربر در مورد رای دهی اطلاع رسانی شود؟");
define("_AM_POLLOPTIONS","گزینه ها");
define("_AM_EDITPOLL","ویرایش نظرسنجی");
define("_AM_FORMAT","فرمت: yyyy-mm-dd hh:mm:ss<br> توجه: تاریخ باید میلادی وارد شود . به طور خودکار تبدیل به هجری شمسی میگردد.");
define("_AM_CURRENTTIME","تاریخ و ساعت در حال حاضر %s است");
define("_AM_EXPIREDAT","در تاریخ %s به اتمام رسیده است");
define("_AM_RESTART","این نظرسنجی را دوباره شروع کن");
define("_AM_ADDMORE","اضافه کردن گزینه های بیشتر");
define("_AM_RUSUREDEL","آیا اطمینان دارید که میخواهید این نظرسنجی و نظر هایش را حذف کنید؟");
define("_AM_RESTARTPOLL","نظرسنجی را دوباره شروع کن");
define("_AM_RESET","تمام اطلاعات این نظرسنجی پاک شود؟");
define("_AM_ADDPOLL","اضافه کردن نظرسنجی");
define('_AM_LOGSLIST','Logauswertung');
define('_AM_RETURNLIST','zur&uuml;ck zur Liste');
define('_AM_AUTOBLOCKREMOVE','بعد از پایان نظرسنجی از بلاک حذف شود');
define('_AM_POLLTYPE','نوع نظرسنجی');
define('_AM_POLLTYPE1','نظرسنجی معمولی');
define('_AM_POLLTYPE2','نظرسنجی پنهان, نتایج مخفی');
define('_AM_POLLTYPE3','نظرسنجی پنهان, نمایش نتایج');
define('_AM_POLLINFO','<table>
   <tr><td>وب سایت پروژه:</td><td><a href="http://sourceforge.net/projects/umfrage">http://sourceforge.net/projects/umfrage</a></td></tr>
   <tr><td>گزارش باگ:</td><td><a href="http://sourceforge.net/tracker/?group_id=208418&atid=1005616">http://sourceforge.net/tracker/?group_id=208418&atid=1005616</a><br></td></tr>
   <tr><td>درخواست برای نسخه های بعد:</td><td><a href="http://sourceforge.net/tracker/?group_id=208418&atid=1005619">http://sourceforge.net/tracker/?group_id=208418&atid=1005619</a><br></td></tr>
</table>');

// wellwine
define("_AM_LOGID","شماره شناسه (ID) رای");
define("_AM_OPTIONID","انتخاب گزینه");
define("_AM_IP","آدرس IP");
define("_AM_VOTER","رای دهنده");
define("_AM_VOTETIME","زمانی که رای داده شده است"); 
?>
