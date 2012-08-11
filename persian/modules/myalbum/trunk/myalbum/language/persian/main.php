<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MB_LOADED' ) ) {

define('MYALBUM_MB_LOADED' , 1 ) ;

//%%%%%%		Module Name 'myAlbum-P'		%%%%%

// New in myAlbum-P

// only "Y/m/d" , "d M Y" , "M d Y" can be interpreted
define("_ALBM_DTFMT_YMDHI" , "d M Y H:i" ) ;

define("_ALBM_NEXT_BUTTON" , "بعدی" ) ;
define("_ALBM_REDOLOOPDONE" , "انجام شد." ) ;

define("_ALBM_BTN_SELECTALL" , "انتخاب همه" ) ;
define("_ALBM_BTN_SELECTNONE" , "انتخاب انجام شد" ) ;
define("_ALBM_BTN_SELECTRVS" , "از انتخاب خارج شد" ) ;

define("_ALBM_FMT_PHOTONUM" , "%s تصویر در صفحه" ) ;

define("_ALBM_AM_ADMISSION" , "تایید کردن تصوير ها" ) ;
define("_ALBM_AM_ADMITTING" , "تصوير ها تایید شد" ) ;
define("_ALBM_AM_LABEL_ADMIT" , "تایید تصاویر که شما چک کرده اید" ) ;
define("_ALBM_AM_BUTTON_ADMIT" , "تایید" ) ;
define("_ALBM_AM_BUTTON_EXTRACT" , "خلاصه" ) ;

define("_ALBM_AM_PHOTOMANAGER" , "مدیریت تصوير ها" ) ;
define("_ALBM_AM_PHOTONAVINFO" , "Photo No. %s-%s (out of %s photos hit)" ) ;
define("_ALBM_AM_LABEL_REMOVE" , "پاک کردن تصاویر چک شده" ) ;
define("_ALBM_AM_BUTTON_REMOVE" , "پاک کن!" ) ;
define("_ALBM_AM_JS_REMOVECONFIRM" , "آیا پاک شود؟" ) ;
define("_ALBM_AM_LABEL_MOVE" , "عوض کردن شاخه ی تصاویر چک شده" ) ;
define("_ALBM_AM_BUTTON_MOVE" , "حرکت" ) ;
define("_ALBM_AM_BUTTON_UPDATE" , "اصلاح کردن" ) ;
define("_ALBM_AM_DEADLINKMAINPHOTO" , "تصویر اصلی موجود نیست" ) ;

define("_ALBM_RADIO_ROTATETITLE" , "چرخش تصوير" ) ;
define("_ALBM_RADIO_ROTATE0" , "بدون دور" ) ;
define("_ALBM_RADIO_ROTATE90" , "چرخش به راست" ) ;
define("_ALBM_RADIO_ROTATE180" , "چرخش 180 درجه" ) ;
define("_ALBM_RADIO_ROTATE270" , "چرخش به چپ" ) ;


// New MyAlbum 1.0.1 (and 1.2.0)
define("_ALBM_MOREPHOTOS","تصاویر بیشتر از%s");
define("_ALBM_REDOTHUMBS","Redo Thumbnails (<a href='redothumbs.php'>re-start</a>)");
define("_ALBM_REDOTHUMBSINFO","Too large a number may lead to server time out.");
define("_ALBM_REDOTHUMBSNUMBER","تعداد تصاویر تمبری در این زمان");
define("_ALBM_REDOING","ثبت کن: ");
define("_ALBM_BACK","بازگشت");
define("_ALBM_ADDPHOTO","اضافه کردن تصوير");


// New MyAlbum 1.0.0
define("_ALBM_PHOTOBATCHUPLOAD","ثبت تصاویر بارگذاری شده در سرور قبلی");
define("_ALBM_PHOTOUPLOAD","بار گذاری تصویر");
define("_ALBM_PHOTOEDITUPLOAD","تصوير ویرایش شد و دوباره بارگذاری شد");
define("_ALBM_MAXPIXEL","بیشتر سایز پیکسل ها");
define("_ALBM_MAXSIZE","بیشتر سایز تصوير(بایت)");
define("_ALBM_PHOTOTITLE","عنوان");
define("_ALBM_PHOTOPATH","مسیر");
define("_ALBM_TEXT_DIRECTORY","فهرست راهنما");
define("_ALBM_DESC_PHOTOPATH","Type the full path of the directory including photos to be registered");
define("_ALBM_MES_INVALIDDIRECTORY","راهنمای تایین شده را وارد کنید");
define("_ALBM_MES_BATCHDONE","%s تصوير ثبت شده است");
define("_ALBM_MES_BATCHNONE","هیچ تصويری در راهنما پیدا نشد");
define("_ALBM_PHOTODESC","توضیح");
define("_ALBM_PHOTOCAT","شاخه");
define("_ALBM_SELECTFILE","انتخاب تصوير");
define("_ALBM_NOIMAGESPECIFIED","حطا: هیچ تصويری بارگذاری نشده");
define("_ALBM_FILEERROR","Error: Photos are too big or there is a problem with the configuration");
define("_ALBM_FILEREADERROR","خطا: تصوير قابل خواندن نیست");

define("_ALBM_BATCHBLANK","Leave title blank to use file names as title");
define("_ALBM_DELETEPHOTO","پاک شود؟");
define("_ALBM_VALIDPHOTO","معتبر( سالم)");
define("_ALBM_PHOTODEL","تصوير پاک شود؟");
define("_ALBM_DELETINGPHOTO","تصوير پاک شد");
define("_ALBM_MOVINGPHOTO","تصوير منتقل شد");

define("_ALBM_STORETIMESTAMP","ناتوان در زدن timestamp");

define("_ALBM_POSTERC","فرستنده: ");
define("_ALBM_DATEC","زمان ارسال: ");
define("_ALBM_EDITNOTALLOWED","شما اجازه ی ویرایش این پیام را ندارید");
define("_ALBM_ANONNOTALLOWED","کاربر مهمان اجازه ارسال پیام را ندارد");
define("_ALBM_THANKSFORPOST","از واگذاری شما متشکریم!");
define("_ALBM_DELNOTALLOWED","شما اجازه ی پاک کردن این پیام را ندارید");
define("_ALBM_GOBACK","بازگشت به عقب");
define("_ALBM_AREYOUSURE","آیا شما میخواهید این پیام و تمام پیام های مرتبط با آن را پاک کنید");
define("_ALBM_COMMENTSDEL","پیام ها با موفقیت پاک شد");

// End New

define("_ALBM_THANKSFORINFO","از شما به خاطر این اطلاعات متشکریم. ما در کمترین زمان به آن ها رسیدگی میکنیم");
define("_ALBM_BACKTOTOP","بازگشت به بهترین تصوير ها");
define("_ALBM_THANKSFORHELP","Thank you for helping to maintain this directory's integrity.");
define("_ALBM_FORSECURITY","For security reasons your user name and IP address will also be temporarily recorded.");

define("_ALBM_MATCH","تطابق");
define("_ALBM_ALL","همه");
define("_ALBM_ANY","هیچ");
define("_ALBM_NAME","نام");
define("_ALBM_DESCRIPTION","شرح");

define("_ALBM_MAIN","اصلی");
define("_ALBM_NEW","جدید");
define("_ALBM_UPDATED","به روز رسانی");
define("_ALBM_POPULAR","محبوب");
define("_ALBM_TOPRATED","بهترین ارزیابی شده ها");

define("_ALBM_POPULARITYLTOM","بر اساس محبوبیت ( از کمترین به بیشترین)");
define("_ALBM_POPULARITYMTOL","بر اساس محبوبیت ( از بیشترین به کمترین)");
define("_ALBM_TITLEATOZ","عنوان (A to Z)");
define("_ALBM_TITLEZTOA","عنوان (Z to A)");
define("_ALBM_DATEOLD","زمان ( از تصاویر قدیمی به جدید)");
define("_ALBM_DATENEW","زمان ( از تصاویر جدید به قدیمی)");
define("_ALBM_RATINGLTOH","رتبه( از پایین ترین امتیاز به بلاترین امتیاز");
define("_ALBM_RATINGHTOL","رتبه ( از بالترین امتیاز به پایین ترین امتیاز");
define("_ALBM_LIDASC","شماره ثبت ( از کوچک به بزرگ)");
define("_ALBM_LIDDESC","شماره ثبت ( از بزرگ به کوچک)");

define("_ALBM_NOSHOTS","هیچ پرده ی گرمی موجود نیست");
define("_ALBM_EDITTHISPHOTO","ویرایش این تصوير");

define("_ALBM_DESCRIPTIONC","شرح");
define("_ALBM_EMAILC","ایمیل");
define("_ALBM_CATEGORYC","شاخه");
define("_ALBM_SUBCATEGORY","زیر شاخه");
define("_ALBM_LASTUPDATEC","آخرین به روز رسانی");
define("_ALBM_TELLAFRIEND","تماس با دوستان");
define("_ALBM_SUBJECT4TAF","این تصوير برای شماست");
define("_ALBM_HITSC","Hits");
define("_ALBM_RATINGC","درجه");
define("_ALBM_ONEVOTE","1 رای");
define("_ALBM_NUMVOTES","%s رای");
define("_ALBM_ONEPOST","1 ارسال");
define("_ALBM_NUMPOSTS","%s ارسال");
define("_ALBM_COMMENTSC","پیام ها");
define("_ALBM_RATETHISPHOTO","ارزیابی کردن این تصوير");
define("_ALBM_MODIFY","اصلاح کردن");
define("_ALBM_VSCOMMENTS","دیدن و فرستادن پیام");

define("_ALBM_DIRECTCATSEL","انتخاب شاخه");
define("_ALBM_THEREARE","تعداد <b>%s</b> تصوير در پایگاه داده ها موجود است");
define("_ALBM_LATESTLIST","Latest Listings");

define("_ALBM_VOTEAPPRE","رای شما بر  ارزش این تصوير اضافه میکند");
define("_ALBM_THANKURATE","از شما متشکریم که وقت گذاشتید و به این تصوير از %s نمرهدادید");
define("_ALBM_VOTEONCE","لطفا برای این تصوير بیشتر از یک رای ندهید");
define("_ALBM_RATINGSCALE","امتیاز از 1 تا 10 شاخه بندی شده است . 1 کمترین امتیاز و 10 بیشترین امتیاز است");
define("_ALBM_BEOBJECTIVE","لطفا نظر اصلی خود را انتخاب کنید انتخاب عدد 1 یا عدد 10 نمیتواند مفید باشد");
define("_ALBM_DONOTVOTE","به تصاویر  که خودتان فرستاده اید رای ندهید");
define("_ALBM_RATEIT","ارزیابی کنید");

define("_ALBM_RECEIVED","ما تصوير شما را دریافت کرده ایم . از شما متشکریم");
define("_ALBM_ALLPENDING","تمام تصاویر پست شده ای که در این مدت تایید شده");

define("_ALBM_RANK","نشان");
define("_ALBM_CATEGORY","شاخه");
define("_ALBM_HITS","Hits");
define("_ALBM_RATING","رتبه");
define("_ALBM_VOTE","رای");
define("_ALBM_TOP10","%s 10 تای برتر"); // %s is a photo category title

define("_ALBM_SORTBY","شاخه بندی کردن به وسیله ی:");
define("_ALBM_TITLE","عنوان");
define("_ALBM_DATE","زمان");
define("_ALBM_POPULARITY","محبوبیت");
define("_ALBM_CURSORTEDBY","تصاویر فعلی به وسیله ی %s شاخه بندی شد");
define("_ALBM_FOUNDIN","ریختن در:");
define("_ALBM_PREVIOUS","قبلی");
define("_ALBM_NEXT","بعدی");
define("_ALBM_NOMATCH","هیج تصويری با درخواست شما مطابقت ندارد");

define("_ALBM_CATEGORIES","شاخه ها");

define("_ALBM_SUBMIT","پیشنهاد کردن");
define("_ALBM_CANCEL","لغو کردن");

define("_ALBM_MUSTREGFIRST","Sorry, you don't have permission to perform this action.<br>Please register or login first!");
define("_ALBM_MUSTADDCATFIRST","Sorry, there are no categories to add to yet.<br>Please create a category first!");
define("_ALBM_NORATING","هیچ رتبه ای انتخاب نشده");
define("_ALBM_CANTVOTEOWN","You cannot vote on the resource you submitted.<br>All votes are logged and reviewed.");
define("_ALBM_VOTEONCE2","Vote for the selected resource only once.<br>All votes are logged and reviewed.");

//%%%%%%	Module Name 'MyAlbum' (Admin)	  %%%%%

define("_ALBM_PHOTOSWAITING","Photos Waiting for Validation");
define("_ALBM_PHOTOMANAGER","مدیریت تصاویر");
define("_ALBM_CATEDIT","اضافه کردن و ویرایش و پاک  کردن شاخه ها");
define("_ALBM_GROUPPERM_GLOBAL","دسترسی های سراسری");
define("_ALBM_CHECKCONFIGS","چک کردن پیکربندی و محیط");
define("_ALBM_BATCHUPLOAD","ثبت شاخه");
define("_ALBM_GENERALSET","صلیقه ها");
define("_ALBM_REDOTHUMBS2","باز سازی تصاویر تمبری");

define("_ALBM_SUBMITTER","فرستنده");
define("_ALBM_DELETE","پاک کردن");
define("_ALBM_NOSUBMITTED","هیچ تصوير جدیدی ارائه نشده");
define("_ALBM_ADDMAIN","ساخت شاخه ی اصلی");
define("_ALBM_IMGURL","آدرس تصوير (OPTIONAL Image height will be resized to 50): ");
define("_ALBM_ADD","اضافه");
define("_ALBM_ADDSUB","اضافه کردن زیر شاخه");
define("_ALBM_IN","در ( داخل)");
define("_ALBM_MODCAT","ویراش شاخه");
define("_ALBM_DBUPDATED","پایگاه داده ها با موفقیت به روز شد");
define("_ALBM_MODREQDELETED","درخواست اصلاح پاک شد");
define("_ALBM_IMGURLMAIN","آدرس تصوير (OPTIONAL and Only valid for main categories. Image height will be resized to 50): ");
define("_ALBM_PARENT","منشا شاخه:");
define("_ALBM_SAVE","تغییرات ذخیره شد");
define("_ALBM_CATDELETED","شاخه پاک شد");
define("_ALBM_CATDEL_WARNING","اخطار: آیا شما میخواید این شاخه را به همراه تمام تصوير ها و نظر های همراهش پاک  کنید؟");
define("_ALBM_YES","بله");
define("_ALBM_NO","نه");
define("_ALBM_NEWCATADDED","شاخه ی جدید با موفقیت ساخته شد!");
define("_ALBM_ERROREXIST","خطا: تصويری که شما آماده کرده اید در پایگاه داده ها موجود است.");
define("_ALBM_ERRORTITLE","خطا: شما باید عنوان را وارد کنید");
define("_ALBM_ERRORDESC","خطا: شما باید توضیح تصوير را وارد کنید");
define("_ALBM_WEAPPROVED","ما لینک  شما از تصاویر پایگاه داده ها را تایید کردیم");
define("_ALBM_THANKSSUBMIT","از شما به خاطر این ارسال متشکریم");
define("_ALBM_CONFUPDATED","پیکر بندی با موفقیت به روز شد");

}

?>