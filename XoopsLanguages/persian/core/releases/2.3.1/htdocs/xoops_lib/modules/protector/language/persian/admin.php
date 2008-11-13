<?php

// mymenu


// Appended by Xoops Language Checker -GIJOE- in 2007-10-18 05:36:24
define('_AM_LABEL_COMPACTLOG','گزارش فشرده');
define('_AM_BUTTON_COMPACTLOG','فشرده کن!');
define('_AM_JS_COMPACTLOGCONFIRM','گزارش های تکراری (IP,Type) حذف شوند');
define('_AM_LABEL_REMOVEALL','حذف همه گزارش ها');
define('_AM_BUTTON_REMOVEALL','حذف همه');
define('_AM_JS_REMOVEALLCONFIRM','تمام گزارشات با موفقیت حذف شد. آیا  تایید میکنید؟');

// Appended by Xoops Language Checker -GIJOE- in 2007-07-30 05:37:51
define('_AM_FMT_CONFIGSNOTWRITABLE','لطفا شاخه configs را قابل نوشتن کنید: %s');

define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','دسترسی ها');
define('_MD_A_MYMENU_MYPREFERENCES','ویژگی ها');

// index.php
define("_AM_TH_DATETIME","زمان");
define("_AM_TH_USER","کاربر");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","محاجم");
define("_AM_TH_TYPE","نوح حمله");
define("_AM_TH_DESCRIPTION","توضیحات");

define( "_AM_TH_BADIPS" , 'IP های بد<br /><br /><span style="font-weight:normal;">هر IP ی که در این کادر بنویسید جز IP های بد محاصبه میشود و دسترسیش مسدود میگردد<br />صفحه ی خالی یعنی اینکه تمام IP ها اجازه ی کار دارند</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'IP های مجاز برای کاربران گروه 1 <br /><br /><span style="font-weight:normal;">اگر این کادر را پر کنید فقط  IP های برای گروه 1 ( وب مستر ها) مورد تایید خواهد بود که در این کادر وارد شده باشد وب مستر ها با IP های دیگر قادر به انجام هیچ کاری نخواهند بود<br />192.168. به معنای 192.168.* هم است<br />صفحه ی خالی یعنی اینکه تمام IP ها اجازه ی کار دارند</span>' ) ;

define( "_AM_LABEL_REMOVE" , "حذف کردن گزارش های چک شده:" ) ;
define( "_AM_BUTTON_REMOVE" , "حذف کن!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "آیا حذف شود؟" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "فایل های مربوط به IP ها به روز شد" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "این فایل متعلق به یک ip بد است و قابل بازکردن نمیباشد" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "فایل های مربوط به اجازه دادن به وب مستر ها ( group=1) باز نمیشود" ) ;
define( "_AM_MSG_REMOVED" , "گزارش های ثبت شده حذف شد" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "مدیریت پیشوند نام جدول های پایگاه داده ها" ) ;
define( "_AM_MSG_DBUPDATED" , "پایگاه داده ها با موفقیت به روز شد" ) ;
define( "_AM_CONFIRM_DELETE" , "تمام اطلاعات دروپ( حذف) میشود . موافقید؟" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "اگر شما میخواهید پیشوند نام جدول های پایگاه داده ها را تغییر دهید,<br /> فایل %s/mainfile.php را دستی ویراش کنید.<br />در حال حاضر ('XOOPS_DB_PREFIX', '<b>%s</b>')  به عنوان پیشوند نام جدول های پایگاه داده ها تعریف شده است;<br />پیشوند نام جدول های پایگاه داده ها  اسمی است که به ابتدای نام جدول های  پایگاه داده ها اضافه میشود" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","امن نیست");

define("_AM_ADV_REGISTERGLOBALS","این گزینه باعث حملات  و نفوذ های زیادی میشود.<br />اگر شما میتوانید .htaccess به کار ببرید . ویرایشش کنید یا یکی بسازید...");
define("_AM_ADV_ALLOWURLFOPEN","این گزینه به حمله کنندگان اجازه میدهد که اسکیریپ های را از راه دور بر روی سرور اجرا کنند<br />فقط مسئول سرور میتواند این گزینه را تغییر دهد<br />اگر شما مسئول سرور هستید  php.ini یا httpd.conf را ویرایش کنید<br /><b>نمونه ای از httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />اگر با مدیریت سرور دسترسی ندارید  با مسئول سرور تماس بگیرید");
define("_AM_ADV_USETRANSSID","ID نشست ( سشن) شما در تگ های  anchor نمایش داده میشود.<br />برای جلوگیری از دزدی  جلسه ی شما این خط ها را به .htaccess در XOOPS_ROOT_PATH.  اضافه کنید<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","این گزینه باعث حمله از نوع تزریق به SQL ('SQL Injections') میشود.<br />فراموش نکنید که   'پاکسازی اجباری (Force sanitizing *)' را در ویژگی های ماژول روشن کنید.");
define("_AM_ADV_LINK_TO_PREFIXMAN","برو به مدیریت پیشوند پایگاه داده ها");
define("_AM_ADV_MAINUNPATCHED","شما باید mainfile.php را ویرایش کنید لینک های مورد نظر در راهنمای ماژول قرار دارد");

define("_AM_ADV_SUBTITLECHECK","برای برسی عملکرد صحیح ماژول اینجا را چک کنید");
define("_AM_ADV_CHECKCONTAMI","آلودگی ها");
define("_AM_ADV_CHECKISOCOM","قرطینه کردن نظرات (");



?>