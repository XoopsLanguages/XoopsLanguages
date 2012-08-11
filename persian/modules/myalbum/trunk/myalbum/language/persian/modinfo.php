<?php
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {

define('MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","آلبوم من");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","Creates a photos section where users can search/submit/rate various photos.");

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","تصاویر جدید");
define("_ALBM_BNAME_HITS","تصاویر  عالی");
define("_ALBM_BNAME_RANDOM","تصاویر تصادفی");
define("_ALBM_BNAME_RECENT_P","تصاویر جدید به وسیله ی تصاویر تمبری");
define("_ALBM_BNAME_HITS_P","بهترین تصوير ها به وسیله ی تصاویر تمبری");

// Config Items
define("_ALBM_CFG_PHOTOSPATH" , "محل بار گذاری تصویر" ) ;
define("_ALBM_CFG_DESCPHOTOSPATH" , "مسیر به سمت دکیومنت نصب زوپس.<br />(شاخه ی اول را به وسیله ی کارکتر '/' از بقیه جدا کنید . شاخه ی آخر به '/' نیاز ندارد.)<br />دسترسی شاخه ی  در سیستم های یونیک باید 777 یا 707 باشد" ) ;
define("_ALBM_CFG_THUMBSPATH" , "محل بار گذاری تصاویر تمبری " ) ;
define("_ALBM_CFG_DESCTHUMBSPATH" , "مسیر یکنواخت به تصویر" ) ;
//define("_ALBM_CFG_USEIMAGICK" , "برای تعمیر کردن تصوير ها از امیج مجیک استفاده کنید" ) ;
//define("_ALBM_CFG_DESCIMAGICK" , "Not use ImageMagick cause Not work resize or rotate the main photo, and make thumbnails by GD.<br />You'd better use ImageMagick if you can." ) ;
define("_ALBM_CFG_IMAGINGPIPE" , "ویرایش گر  تصاویر  سرور" ) ;
define("_ALBM_CFG_DESCIMAGINGPIPE" , "Almost all PHP environments can use GD. But GD is functionally inferior than 2 other packages.<br />بهتر است اگر میتوانید از ImageMagick یا NetPBM استفاده کنید" ) ;
define("_ALBM_CFG_FORCEGD2" , "Force GD2 conversion" ) ;
define("_ALBM_CFG_DESCFORCEGD2" , "Even if the GD is a bundled version of PHP, it force GD2(truecolor) conversion.<br />Some configured PHP fails to create thumbnails in GD2<br />This configuration is significant only when using GD" ) ;
define("_ALBM_CFG_IMAGICKPATH" , "مسیر به امیج مجیک" ) ;
define("_ALBM_CFG_DESCIMAGICKPATH" , "Although the full path to 'convert' should be written, leave it blank in most environments.<br />This configuration is significant only when using ImageMagick" ) ;
define("_ALBM_CFG_NETPBMPATH" , "مسیر از طرف NetPBM" ) ;
define("_ALBM_CFG_DESCNETPBMPATH" , "Alhough the full path to 'pnmscale' should be written, leave it blank in most environments.<br />This configuration is significant only when using NetPBM" ) ;
define("_ALBM_CFG_POPULAR" , "نمایش محبوب ترین ها" ) ;
define("_ALBM_CFG_NEWDAYS" , "روز هاي بين آيکن ها نمايش داده ميشوند 'جدید'&'به روز شده'" ) ;
define("_ALBM_CFG_NEWPHOTOS" , "عدد تصوير هاي جديد در بالاي صفحه هست" ) ;
define("_ALBM_CFG_DEFAULTORDER" , "پيشينه بر اساس نگاه شاخه بندي شده" ) ;
define("_ALBM_CFG_PERPAGE" , "نمایش تصوير ها با صفحه" ) ;
define("_ALBM_CFG_DESCPERPAGE" , "عدد انتخابی را وارد کنید و با '|' از هم جدا کنید<br />eg) 10|20|50|100" ) ;
define("_ALBM_CFG_ALLOWNOIMAGE" , "اجازه ی پیشنهاد کردن تصوير به دیگران" ) ;
define("_ALBM_CFG_MAKETHUMB" , "درست کردن تصاویر کوچک" ) ;
define("_ALBM_CFG_DESCMAKETHUMB" , "When you change 'No' to 'Yes', You'd better 'Redo thumbnails'." ) ;
//define("_ALBM_CFG_THUMBWIDTH" , "Thumb Image Width" ) ;
//define("_ALBM_CFG_DESCTHUMBWIDTH" , "The height of thumbs will be decided from the width automatically." ) ;
define("_ALBM_CFG_THUMBSIZE" , "سایز تصاویر تمبری ( پیکسل)" ) ;
define("_ALBM_CFG_THUMBRULE" , "Calculation rule for building thumbnails" ) ;
define("_ALBM_CFG_WIDTH" , "بیشترین عرض  تصوير" ) ;
define("_ALBM_CFG_DESCWIDTH" , "This means the photo's width to be resized.<br />If you use GD without truecolor, this means the limitation of width." ) ;
define("_ALBM_CFG_HEIGHT" , "بیشترین ارتفاع تصوير" ) ;
define("_ALBM_CFG_DESCHEIGHT" , "This means the photo's height to be resized.<br />If you use GD without truecolor, this means the limitation of height." ) ;
define("_ALBM_CFG_FSIZE" , "بیشترین سایز تصوير" ) ;
define("_ALBM_CFG_DESCFSIZE" , "محدود کردن سایز تصوير ها برای اپلود ( بیت)" ) ;
define("_ALBM_CFG_MIDDLEPIXEL" , "بیشترین سایز تصوير در نما ی تنها" ) ;
define("_ALBM_CFG_DESCMIDDLEPIXEL" , "مشخص کردن ( طول) x ( عرض)<br />(eg. 480x480)" ) ;
define("_ALBM_CFG_ADDPOSTS" , "تعداد پست های که کاربر میتواند زیر تصوير بزند را وارد کنید" ) ;
define("_ALBM_CFG_DESCADDPOSTS" , "معمولی, 0 یا 1. زیر 0 میانگین 0" ) ;
define("_ALBM_CFG_CATONSUBMENU" , "ثبت بهترین شاخه ها در زیر منو" ) ;
define("_ALBM_CFG_NAMEORUNAME" , "نمایش نام فرستنده" ) ;
define("_ALBM_CFG_DESCNAMEORUNAME" , "نامی را که نمایش داده شود انتخاب کنید" ) ;
define("_ALBM_CFG_VIEWCATTYPE" , "نوع دیدن در شاخه" ) ;
define("_ALBM_CFG_COLSOFTABLEVIEW" , "تعداد ستون های که در جدول دیده شود" ) ;
define("_ALBM_CFG_ALLOWEDEXTS" , "فایل اضافی را میتوانید آپلود کنید" ) ;
define("_ALBM_CFG_DESCALLOWEDEXTS" , "فرمت های ورودی را به '|' از هم جدا کنید. (eg 'jpg|jpeg|gif|png') .<br />All characters must be lowercase. Don't insert periods or spaces<br />Never add php or phtml etc." ) ;
define("_ALBM_CFG_ALLOWEDMIME" , "MIME Types can be uploaded" ) ;
define("_ALBM_CFG_DESCALLOWEDMIME" , "Input MIME Types with separator '|'. (eg 'image/gif|image/jpeg|image/png')<br />If you want to be checked by MIME Type, leave this blank" ) ;
define("_ALBM_CFG_USESITEIMG" , "Use [siteimg] in ImageManager Integration" ) ;
define("_ALBM_CFG_DESCUSESITEIMG" , "The Integrated Image Manager input [siteimg] instead of [img].<br />You have to hack module.textsanitizer.php for each module to enable tag of [siteimg]" ) ;

define("_ALBM_OPT_USENAME" , "نام واقعی" ) ;
define("_ALBM_OPT_USEUNAME" , "شناسه ی کاربری" ) ;

define("_ALBUM_OPT_CALCFROMWIDTH" , "پهنا: تایین شده     ارتفاع: پیشفرض" ) ;
define("_ALBUM_OPT_CALCFROMHEIGHT" , "پهنا: پیش فرض  ارتفاع : تایین شده" ) ;
define("_ALBUM_OPT_CALCWHINSIDEBOX" , "گذاشتن سایز تایین شده" ) ;

define("_ALBM_OPT_VIEWLIST" , "دیدن لیست" ) ;
define("_ALBM_OPT_VIEWTABLE" , "دیدن جدول" ) ;


// Sub menu titles
define("_ALBM_TEXT_SMNAME1","ارسال تصوير");
define("_ALBM_TEXT_SMNAME2","تصاویر  محبوب");
define("_ALBM_TEXT_SMNAME3","بهترین ارزیابی");
define("_ALBM_TEXT_SMNAME4","تصاویر من");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","تایید تصوير ها");
define("_ALBM_MYALBUM_ADMENU1","مدیریت تصوير");
define("_ALBM_MYALBUM_ADMENU2","اضافه کردن/ویرایش شاخه ها");
define("_ALBM_MYALBUM_ADMENU_GPERM","تنظیمات دسترسی ها");
define("_ALBM_MYALBUM_ADMENU3","چک کردن پیکر بندی و محیط");
define("_ALBM_MYALBUM_ADMENU4","ثبت کردن شاخه");
define("_ALBM_MYALBUM_ADMENU5","دوباره ساختن تصاویر تمبری");
define("_ALBM_MYALBUM_ADMENU_IMPORT","اضافه کردن تصوير");
define("_ALBM_MYALBUM_ADMENU_EXPORT","انتقال تصوير");
define("_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN","مديريت بلاک ها و گروه ها");
define("_ALBM_MYALBUM_ADMENU_MYTPLSADMIN","تلمپ ها");


// Text for notifications
define('_MI_MYALBUM_GLOBAL_NOTIFY','سراسری');
define('_MI_MYALBUM_GLOBAL_NOTIFYDSC','Global notification options with myAlbum-P');
define('_MI_MYALBUM_CATEGORY_NOTIFY','شاخه ها');
define('_MI_MYALBUM_CATEGORY_NOTIFYDSC','Notification options that apply to the current photo category');
define('_MI_MYALBUM_PHOTO_NOTIFY','تصوير');
define('_MI_MYALBUM_PHOTO_NOTIFYDSC','Notification options that apply to the current photo');

define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY','تصوير جدید');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP','وقتی تصاویر جدید فرستاده شد من را آگاه کن');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC','وقتی یک نظر جدید برای تصوير فرستاده شد اطلاع  داده شد');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}: auto-notify : تصوير جدید');

define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY','تصوير جدید');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP','وقتی یک نظر جدید برای تصوير مجود در این شاخه فرستاده شد من را آگاه کن');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC','وقتی یه نظر جدید برای تصوير موجود در این شاخه فرستاده شد . اطلاع داده شد');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}: auto-notify : تصوير جدید');

}

?>