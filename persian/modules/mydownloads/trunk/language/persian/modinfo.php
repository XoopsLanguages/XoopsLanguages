<?php
// $Id: modinfo.php,v 1.13 2003/03/27 12:11:05 w4z004 Exp $
// Module Info

// The name of this module
define("_MI_MYDOWNLOADS_NAME","دريافت فايل");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","ساخت بخش دریافت فایل , کاربران میتواندد فایل ارسال کنند یا فایل دریافت کنند.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","دريافت فايلهاي قبلي");
define("_MI_MYDOWNLOADS_BNAME2","بيشترين دريافت فايل");

// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","فرستادن فايل");
define("_MI_MYDOWNLOADS_SMNAME2","فایل های همه گاني");
define("_MI_MYDOWNLOADS_SMNAME3","محبوب ترين فایل ها");

// Names of admin menu items
define("_MI_MYDOWNLOADS_ADMENU2","وارد/ويرايش كردن فايل ها");
define("_MI_MYDOWNLOADS_ADMENU3","فايل هاي ارسال شده");
define("_MI_MYDOWNLOADS_ADMENU4","فايل هاي شكسته");
define("_MI_MYDOWNLOADS_ADMENU5","فايل هاي اصلاح شده");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR','تعداد بازدید های که باعث میشوند یک فایل جز محبوب ها قرار بگیرد');
define('_MI_MYDOWNLOADS_NEWDLS','بیشترین تعداد انلود های که در صفحه اصلی نمایش داده میشوند');
define('_MI_MYDOWNLOADS_PERPAGE','بیشترین تعداد فایل هایی که در هر صفحه نمایش داده میشوند');
define('_MI_MYDOWNLOADS_USESHOTS','اگر میخواهید برای هر فایل یه تصویر نمایش داده شود بله را انتخاب کنید');
define('_MI_MYDOWNLOADS_SHOTWIDTH','بیشترین عرض تصویر را وارد کنید');
define('_MI_MYDOWNLOADS_CHECKHOST','عدم اجازه لینک فایل مستقیم؟ (leeching)');
define('_MI_MYDOWNLOADS_REFERERS','این سایت ها بدون واسطه به فایل شما لینک میدهند <br />هر کدام را با | از بقیه جدا کنید');
define("_MI_MYDOWNLOADS_ANONPOST","اجازه به کاربر مهمان برای ارسال فایل؟");
define('_MI_MYDOWNLOADS_AUTOAPPROVE','تایید خودکار فایل های ارسال شده بدون برسی مدیر؟');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC','');
define('_MI_MYDOWNLOADS_NEWDLSDSC','');
define('_MI_MYDOWNLOADS_PERPAGEDSC','');
define('_MI_MYDOWNLOADS_USESHOTSDSC','');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC','');
define('_MI_MYDOWNLOADS_REFERERSDSC','');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY','کلی');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC','تنظیمات اطلاع رسانی دانلود');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY','شاخه');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC','تنظیمات اطلاع رسانی که برای همین شاخه به کار میرود');

define('_MI_MYDOWNLOADS_FILE_NOTIFY','فایل');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC','تنظیمات اطلاع رسانی که برای همین فایل به کار میرود');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','شاخه جدید');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','هرگاه شاخه جدیدی ایجاد شد مرا باخبر کن');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC','هرگاه شاخه جدیدی ایجاد شد به من ارسال کن');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:شاخه جدید');                              

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','درخواست اصلاح فایل');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','هر گاه درخواستی برای اصلاح فایل رسید مرا با خبر کن');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC','هر گاه درخواستی برای اصلاح فایل رسید به من ارسال کن');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار: درخواست اصلاح فایل');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','ارسال فایل از خارج سایت');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','هر گزارشی راجع به ارسال فایل از خارج سایت رسید مرا با خبر کن');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','هر گزارشی راجع به ارسال فایل از خارج سایت رسید به من ارسال کن');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:ارسال فایل از خارج سایت');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','فایل ارسال شده');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP','هر فایلی ارسال شد مرا با خبر کن');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC','هر فایلی ارسال شد به من ارسال کن');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل ارسال شده');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','فایل جدید');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP','هر فایل جدیدی ارسال شد مرا با خبر کن');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','هر فایل جدیدی ارسال شد به من ارسال کن');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}اطلاع رسانی خودکار:فایل جدید');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','فایل ثبت شده');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP','هر فایل جدیدی ثبت شد مرا با خبر کن');   
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC','هر فایل جدیدی ثبت شد به من ارسال کن');      
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل ثبت شده در شاخه'); 

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','فایل جدید');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP','وقتی یک فایل در همین شاخه قرار گرفت مرا با خبر کن');   
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC','وقتی یک فایل در همین شاخه قرار گرفت به من ارسال کن');      
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل جدید در شاخه'); 

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY','فایل تایید شده');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP','هر فایلی تایید شد مرا با خبر کن');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC','هر فایلی تایید شد به من ارسال کن');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل تایید شده');
// ajout Hervé
define('_MI_MYDOWNLOADS_MIMETYPE',"Mime Types");
define('_MI_MYDOWNLOADS_MIMETYPE_DSC',"Enter the authorized mime types separated by a |");
define('_MI_MYDOWNLOADS_MAXUPLOAD_SIZE',"Max uploaded files size");
define('_MI_MYDOWNLOADS_USE_EDITOR',"Use Kiovi?");
define('_MI_MYDOWNLOADS_AUTO_SUMMARY',"Automatic Summary ?");

// Added in v1.4
define('_MI_MYDOWNLOADS_UPLOAD_FOLDER',"انتخاب مسير آپلود");
define('_MI_MYDOWNLOADS_UPLOAD_URL',"انتخاب آدرس");
define('_MI_MYDOWNLOADS_RENAME_FILES',"تغيير نام هنگام آپلود فايل ها؟");

// Added in v1.44
define('_MI_MYDOWNLOADS_SHOW_UPDATED',"نمايش بروز رساني و عكس جديد؟");

// Added in v1.45
define("_MI_MYDOWNLOADS_FORM_OPTIONS","تنظيمات فرم");
define("_MI_MYDOWNLOADS_FORM_COMPACT","Compact");
define("_MI_MYDOWNLOADS_FORM_DHTML","DHTML");
define("_MI_MYDOWNLOADS_FORM_SPAW","Spaw Editor");
define("_MI_MYDOWNLOADS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYDOWNLOADS_FORM_FCK","FCK Editor");
define("_MI_MYDOWNLOADS_FORM_KOIVI","Koivi Editor");
define("_MI_MYDOWNLOADS_FORM_TINYEDITOR","TinyEditor");
define("_MI_MYDOWNLOADS_ADMENU1","Index");

define('_MI_MYDL_SHOTSUPLOAD_FOLDER',"انتخاب پوشه آپلود براي عكس ها ( بدون / در آخر(");
define('_MI_MYDL_SHOTSUPLOAD_URL',"انتخاب آدرس منطبق بر عكس دانلود (بدون / در آخر(");
define("_MI_MYDOWNLOADS_PLATFORM","پايگاه");

// Added in version 1.5
define("_MI_MYDOWNLOADS_PAGER","از اطلاعا رساني در صفحه اول استفاده شود؟");
define("_MI_MYDOWNLOADS_ADMENU6","دسترسي ها");
?>
