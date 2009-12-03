<?php
// $Id: modinfo.php 26 2005-09-04 09:52:40Z tuff $

// The name of this module
define("_MI_LIAISE_NAME","Liaise");

// A brief description of this module
define("_MI_LIAISE_DESC","ایجاد کننده فرم برقراری ارتباط");

// admin/menu.php
define("_MI_LIAISE_ADMENU1","تماس بر اساس لیست");
define("_MI_LIAISE_ADMENU2","ایجاد یک فرم جدید");

//	preferences
define("_MI_LIAISE_TEXT_WIDTH","طول اصلی باکس");
define("_MI_LIAISE_TEXT_MAX","حداکثر طول اصلی  پیشفرض باکس ها");
define("_MI_LIAISE_TAREA_ROWS","ردیف های پیشفرض منطقه متنی");
define("_MI_LIAISE_TAREA_COLS","ستون های پیشفرض منطقه متنی");

######### version 1.1  additions #########
//	preferences
define("_MI_LIAISE_MAIL_CHARSET","رمز نوشتاری برای ای میل های ارسالی");

//	template descriptions
define("_MI_LIAISE_TMPL_MAIN_DESC","صفحهء اصلی Liaise");
define("_MI_LIAISE_TMPL_ERROR_DESC","صفحه نمایان در هنگام خطاها");

######### version 1.2 additions #########
//	template descriptions
define("_MI_LIAISE_TMPL_FORM_DESC","تمپلیت فرم ها");

//	preferences
define("_MI_LIAISE_MOREINFO","ارسال اطلاعات اضافی به همراه اطلاعات ارسالی");
define("_MI_LIAISE_MOREINFO_USER","نام کاربری و لینک رفتن به صفحهء اطلاعات کاربر");
define("_MI_LIAISE_MOREINFO_IP","آی پی آدرس فرستنده");
define("_MI_LIAISE_MOREINFO_AGENT","اطلاعات بروزر فرستنده");
define("_MI_LIAISE_MOREINFO_FORM","لینک فرم ارسالی");
define("_MI_LIAISE_MAIL_CHARSET_DESC","خالی بگذارید برای "._CHARSET);
define("_MI_LIAISE_PREFIX","پیشوند متن برای فیلدهای اجباری");
define("_MI_LIAISE_SUFFIX","پسوند متن برای فیلد های اجباری");
define("_MI_LIAISE_INTRO","متن مقدماتی در صفحه اصلی");
define("_MI_LIAISE_GLOBAL","متن نمایان در هر صفحهء فرم");

// admin/menu.php
define("_MI_LIAISE_ADMENU3","ایجاد محتویات فرم ها");

######### version 1.21 additions #########
// preferences default values
define("_MI_LIAISE_INTRO_DEFAULT","برای برقراری تماس با ما راحت باشید:");
define("_MI_LIAISE_GLOBAL_DEFAULT","[b]* اجباری[/b]");

######### version 1.23 additions #########
define("_MI_LIAISE_UPLOADDIR","مسیر طبیعی انبار کردن فایل ها بدون  رد پا گذاشتن");
define("_MI_LIAISE_UPLOADDIR_DESC","تمام فایل های آپلود شده زمانی انبار می شوند که توسط پیام شخصی ارسال شده باشند");

// --- captcha ---
define("_MI_LIAISE_CAPTCHA","تصویر امنیتی(Captcha):  ضد هرزنامه");
define("_MI_LIAISE_CAPTCHA_DESC","اگر بله را  انتخاب کنید تصاویر امنیتی(Captcha) فعال میشود");
?>