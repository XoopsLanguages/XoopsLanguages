<?php /* English Translation by Marcelo Yuji Himoro <http://yuji.ws> & Suin <http://suin.jp>*/
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'bulletin' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

// a flag for this language file has already been read or not.


// Appended by Xoops Language Checker -GIJOE- in 2009-01-18 07:28:25
define($constpref.'_COM_ORDER','سفارشی کردن comment-integration');

// Appended by Xoops Language Checker -GIJOE- in 2008-05-19 05:51:18
define($constpref.'_CONFIG145','خوراک های RSS درون فایل backend.php (فقط در زوپس کیوب)');
define($constpref.'_CONFIG145_D','');
define($constpref.'_COM_DIRNAME','نام d3forum برای استفاده در سیستم یکسان سازی نظر ها');
define($constpref.'_COM_FORUM_ID','forum_id در d3forum برای یکسان سازی نظر ها');
define($constpref.'_COM_VIEW','نمایش نظر یکسان شده');
define($constpref.'_COM_POSTSNUM','بیشترین تعداد پست های نمایش داده شده در نظر های یکسان');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Bulletin");

// A brief description of this module
define($constpref."_DESC","ماژول اخبار . امکان ساخت شاخه, کاربران میتوانند به راحتی نظر ارسال کنند.");

// Names of blocks for this module (Not all module has blocks)
define($constpref."_BNAME1","سرفصل های خبری");
define($constpref."_BDESC1","");
define($constpref."_BNAME2","خبر های مهم امروز");
define($constpref."_BDESC2","");
define($constpref."_BNAME3","تقویم");
define($constpref."_BDESC3","");
define($constpref."_BNAME4","آخرین اخبار");
define($constpref."_BDESC4","");
define($constpref."_BNAME5","آخرین اخبار در هر شاخه");
define($constpref."_BDESC5","");
define($constpref."_BNAME6","آخرین نظر های  اخبار");
define($constpref."_BDESC6","");

// Sub menu
define($constpref."_SMNAME1","ارسال خبر");
define($constpref."_SMNAME2","آرشیو");

// Admin
define($constpref."_ADMENU2","مدیریت شاخه ها");
define($constpref."_ADMENU3","ارسال نوشته جدید");
define($constpref."_ADMENU4","مدیریت دسترسی های ارسال کننده خبر");
define($constpref."_ADMENU5","مدیریت اخبار");
define($constpref."_ADMENU7","تصاویر اخبار");
define($constpref.'_ADMENU_MYLANGADMIN','زبان ها');
define($constpref.'_ADMENU_MYTPLSADMIN','تمپلیت ها');
define($constpref.'_ADMENU_MYBLOCKSADMIN','بلاک /دسترسی ها');

// Title of config items
define($constpref."_CONFIG1","تعداد اخبار نمایش داده شده در صفحه اصلی");
define($constpref."_CONFIG1_D","تعداد اخبار نمایش داده شده در صفحه اصلی ماژول را مشخص کنید.");
define($constpref."_CONFIG2","نمایش  جعبه آگاهی رسانی؟");
define($constpref."_CONFIG2_D","با انتخاب 'بله' جعبه گزینه های آگاهی رسانی برای هر صفحه خبری نمایش داده میشود.");
define($constpref."_CONFIG3","ارتفاع کادر  ارسال / ویرایش خبر");
define($constpref."_CONFIG3_D","تعداد خط های ارسال خبر را در صفحه submit.php مشخص کنید.");
define($constpref."_CONFIG4","عرض کادر ارسال / ویرایش خبر");
define($constpref."_CONFIG4_D","تعداد ستون های ارسال خبر در صفحه submit.php را مشخص کنید.");
define($constpref."_CONFIG5","تنظیم زمان");
define($constpref."_CONFIG5_D","استفاده از  تاریخ PHP / روش تابع زمان بندی زوپس مورد استفاده است.");
define($constpref."_CONFIG6","حساب کردن اخبار فرستاده شده جز پست های  ارسالی کاربر");
define($constpref."_CONFIG6_D","وقتی پست ارسال شده  از صفحه submit.php تایید شد, تعداد پست های کاربر اضافه شود.");
define($constpref."_CONFIG7","مسیر شاخه تصاویر");
define($constpref."_CONFIG7_D","تنظیم بسته اصلی.");
define($constpref."_CONFIG8","آدرس تصویر صفحه پیرینت خبر");
define($constpref."_CONFIG8_D","آدرس لوگوی نمایش داده شده در صفحه چاپ خبر را مشخص کنید.");
define($constpref."_CONFIG9","تعویض نام سایت با نام خبر");
define($constpref."_CONFIG9_D","جایگزین شدن نام سایت با موضوع خبر ارسالی. این گزینه برای سایت های SEO مفید است .SEO مخفف Search Engine Optimization می باشد که بر اساس قوانین آن سایت ها برای موتورهای جستجو بهینه می شوند..");
define($constpref."_CONFIG10","ارجا دادن آدرس RSS به xoops_module_header");
define($constpref."_CONFIG10_D","");
// 1.01 added
define($constpref."_CONFIG11","آیکن 'چاپ' نمایش داده شود؟");
define($constpref."_CONFIG11_D","");
define($constpref."_CONFIG12","آیکن 'معرفی به یک دوست' نمایش داده شود");
define($constpref."_CONFIG12_D","");
define($constpref."_CONFIG13","استفاده از ماژول معرفی به یک دوست؟");
define($constpref."_CONFIG13_D","");
define($constpref."_CONFIG14","لینک RSS نمایش داده شود؟");
define($constpref."_CONFIG14_D","");
// 2.00 added
define($constpref."_CONFIG15","فعال  کردن نمایش نوشته های وابسته");
define($constpref."_CONFIG15_D","");
define($constpref."_CONFIG16","نمایش اخبار جدید در هر شاخه؟");
define($constpref."_CONFIG16_D","نمایش لیست خبر های جدید در هر شاخه در زیر هر نوشته.");
define($constpref."_CONFIG17","تعداد  نوشته های جدید در هر شاخه خبری.");
define($constpref."_CONFIG17_D","");
define($constpref."_CONFIG18","نمایش مسر صفحه (breadcrumbs) شاخه؟");
define($constpref."_CONFIG18_D","شاخه درختی در هر صفحه نمایش داده میشود.");define($constpref.'_CONFIG19','استفاده از common/fckeditor');
define($constpref.'_CONFIG19_D', 'فرستنده بتواند از ویرایشگر FCKeditor در زوپس استفاده کند اگر او اجازه استفاده از کد ها HTML را داشت');


// Text for notifications
define($constpref."_GLOBAL_NOTIFY","سراسری");
define($constpref."_GLOBAL_NOTIFYDSC","گزینه های آگاهی رسانی سراسری اخبار.");

define($constpref."_STORY_NOTIFY","خبر فعلی");
define($constpref."_STORY_NOTIFYDSC","گزینه های آگاهی رسانی در خبر فعلی  استفاده شود.");

define($constpref."_GLOBAL_NEWCATEGORY_NOTIFY","شاخه جدید");
define($constpref."_GLOBAL_NEWCATEGORY_NOTIFYCAP","وقتی شاخه جدیدی ساخته شد مرا با خبر کن.");
define($constpref."_GLOBAL_NEWCATEGORY_NOTIFYDSC","وقتی شاخه جدیدی ساخته شد مرا با خبر کن.");
define($constpref."_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: شاخه جدید ساخته شد");

define($constpref."_GLOBAL_STORYSUBMIT_NOTIFY","ارسال خبر جدید");       
define($constpref."_GLOBAL_STORYSUBMIT_NOTIFYCAP","وقتی خبر جدیدی ارسال شد مرا با خبر کن.");                           
define($constpref."_GLOBAL_STORYSUBMIT_NOTIFYDSC","وقتی خبر جدیدی ارسال شد مرا با خبر کن.");                
define($constpref."_GLOBAL_STORYSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}:خبر جدید فرستاده شد");                      

define($constpref."_GLOBAL_NEWSTORY_NOTIFY","انتشار خبر جدید");       
define($constpref."_GLOBAL_NEWSTORY_NOTIFYCAP","وقتی خبر جدیدی منتشر شد مرا با خبر کن.");
define($constpref."_GLOBAL_NEWSTORY_NOTIFYDSC","وقتی خبر جدیدی منتشر شد مرا با خبر کن.");
define($constpref."_GLOBAL_NEWSTORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: خبر جدید منتشر شد");

define($constpref."_STORY_APPROVE_NOTIFY","تایید خبر");
define($constpref."_STORY_APPROVE_NOTIFYCAP","وقتی این خبر تایید شد مرا با خبر کن.");
define($constpref."_STORY_APPROVE_NOTIFYDSC","وقتی این خبر تایید شد مرا با خبر کن.");
define($constpref."_STORY_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: تایید خبر");

// added 2.01
define($constpref."_NOTIFY5_TITLE", "نظر جدید اضافه شد");
define($constpref."_NOTIFY5_CAPTION", "وقتی نظر جدیدی اضافه شد مرا با خبر کن.");
define($constpref."_NOTIFY5_DESC", "وقتی نظر جدیدی اضافه شد مرا با خبر کن.");
define($constpref."_NOTIFY5_SUBJECT", "[{X_SITENAME}] {X_MODULE}: نظر جدید اضافه شد");

}
?>