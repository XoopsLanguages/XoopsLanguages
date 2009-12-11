<?php
// $Id: modinfo.php,v 1.05 2009/06/24 23:45:00 wishcraft Exp $

// The name of this module
define("_MI_LAWSUIT_NAME","Lawsuit");

// A brief description of this module
define("_MI_LAWSUIT_DESC","ایجاد کننده فرم برقراری ارتباط");

// admin/menu.php
define("_MI_LAWSUIT_ADMENU1","صفحات");
define("_MI_LAWSUIT_ADMENU2","شاخه ها");
define("_MI_LAWSUIT_ADMENU3","فهرست فرم ها");
define("_MI_LAWSUIT_ADMENU4","ساخت فرم جدید");
define("_MI_LAWSUIT_ADMENU5","ویرایش پارامتر های فرم");
define("_MI_LAWSUIT_ADMENU6","گزارشات فرم");
define("_MI_LAWSUIT_ADMENU7","دسترسی ها");

//	preferences
define("_MI_LAWSUIT_TEXT_WIDTH","طول اصلی باکس");
define("_MI_LAWSUIT_TEXT_MAX","حداکثر طول اصلی  پیشفرض باکس ها");
define("_MI_LAWSUIT_TAREA_ROWS","ردیف های پیشفرض منطقه متنی");
define("_MI_LAWSUIT_TAREA_COLS","ستون های پیشفرض منطقه متنی");

//	preferences
define("_MI_LAWSUIT_MAIL_CHARSET","رمز نوشتاری برای ای میل های ارسالی");

//	template descriptions
define("_MI_LAWSUIT_TMPL_MAIN_DESC","صفحه اصلی Lawsuit");
define("_MI_LAWSUIT_TMPL_ERROR_DESC","صفحه ای که وقتی خطایی روی میدهد نمایش داده شود");
define("_MI_LAWSUIT_TMPL_PAGE_DESC","صفحه نمایش صفحه بندی تماس ها");
define("_MI_LAWSUIT_TMPL_FORM_DESC","الگو برای فرم");

//	preferences
define("_MI_LAWSUIT_MOREINFO","ارسال اطلاعات اضافی به همراه اطلاعات ارسالی");
define("_MI_LAWSUIT_MOREINFO_USER","نام کاربری و لینک رفتن به صفحهء اطلاعات کاربر");
define("_MI_LAWSUIT_MOREINFO_IP","آی پی آدرس فرستنده");
define("_MI_LAWSUIT_MOREINFO_AGENT","اطلاعات بروزر فرستنده");
define("_MI_LAWSUIT_MOREINFO_FORM","لینک فرم ارسالی");
define("_MI_LAWSUIT_MAIL_CHARSET_DESC","خالی بگذارید برای "._CHARSET);
define("_MI_LAWSUIT_PREFIX","پیشوند متن برای فیلدهای اجباری");
define("_MI_LAWSUIT_SUFFIX","پسوند متن برای فیلد های اجباری");
define("_MI_LAWSUIT_INTRO","متن مقدماتی در صفحه اصلی");
define("_MI_LAWSUIT_GLOBAL","متن نمایان در هر صفحهء فرم");

// admin/menu.php
define("_MI_LAWSUIT_ADMENU3","ساخت اجزا فرم");

// preferences default values
define("_MI_LAWSUIT_INTRO_DEFAULT","برای برقراری تماس با ما راحت باشید:");
define("_MI_LAWSUIT_GLOBAL_DEFAULT","[b]* اجباری[/b]");

######### version 1.23 additions #########
define("_MI_LAWSUIT_UPLOADDIR","مسیر طبیعی انبار کردن فایل ها بدون  رد پا گذاشتن");
define("_MI_LAWSUIT_UPLOADDIR_DESC","تمام فایل های آپلود شده زمانی انبار می شوند که توسط پیام شخصی ارسال شده باشند");

?>