<?php
/**
 * $Id: admin.php,v 1.1 2004/01/12 15:40:57 catzwolf Exp $
 * Module: pages
 * Version: v1.0.2
 * Release Date: 20 November 2003
 * Author: Catzwolf
 * Licence: GNU
 */

/**
 * Uni Lang defines
 */ 
define("_AM_SUBMIT","ارسال");
define("_AM_CREATE","ساختن");
define("_AM_YES","بله");
define("_AM_NO","نه");
define("_AM_CANCEL","انصراف");
define("_AM_DELETE","حذف");
define("_AM_MODIFY","اصلاح");

define("_AM_UPDATED","دیتابیس به روز شد");
define("_AM_NOTUPDATED","خطایی در آپدیت دیتابیس رخ داد");
define("_AM_CANNOTDELETELASTONE","شما نمی توانید این آیتم را حذف کنید صفحه برای درست کار کردن حد اقل به یک ایتم نیاز دارد");
define("_AM_NODEFAULTPAGESET","هشدار : صفحه دیفالت تعریف نشده است");
define("_AM_DEFAULTPAGESET","صفحه دیفالت نام گذاری شد");
define("_AM_TOTALNUMCHANL","همه صفحه ها");

/**
 * Lang defines for topics.php
 */
define("_AM_CHANADMIN","مدیریت صفحه ها");
define("_AM_ADDCHAN","ساختن صفحه جدید");
define("_AM_CHANQ","نام زیر منو:<br /><br /><span style='font-weight: normal;'>نامی که در زیر منوی ماژول صفحه در منوی اصلی نشان داده می شود</span>");
define("_AM_CHANA","متن صفحه:");
define("_AM_CHANW","وزن صفحه:");
define("_AM_MODIFYCHAN","اصلاح صفحه");
define("_AM_NOTOPICTOEDIT","این صفحه در دیتابیس وجود ندارد!");
define("_AM_MODIFYTHISCHAN","اصلاح این صفحه");
define("_AM_DELCHAN","حذف صفحه");
define("_AM_DELTHISCHAN","حذف این صفحه");
define("_AM_NOCHANTOEDIT","هیچ صفحه ای برای اصلاح کردن در دیتابیس وجود ندارد");
define("_AM_CHANISDELETED","صفحه \"%s\" حذف شده است");
define("_AM_CHANCREATED","صفحه ساخته و ذخیره شد");
define("_AM_CHANNOTCREATED","خطا: صفحه ساخته و ذخیره نشد");
define("_AM_CHANMODIFY","صفحه اصلاح و ذخیره شد");
define("_AM_CHANNOTMODIFY","خطا: صفحه اصلاح و ذخیره نشد");
define("_AM_CHANIMAGEEXIST","خطا: فایل بر روس سرور وجود دارد لطفا یکی دیگر را انتخاب کنید");
define("_AM_CHANNOIMAGEEXIST","عکسی انتخاب نشده است");
define("_AM_SUBALLOW","اجازه");
define("_AM_SUBDELETE","حذف");
define("_AM_SUBRETURN","بازگشت به بخش مدیریت");
define("_AM_AUTHOR","نویسنده");
define("_AM_PUBLISHED","قرار داده شده");
define("_AM_SUBPREVIEW","دید مدیریتی صفحه");
define("_AM_SUBADMINPREV","این دید مدیریت از این صفحه است");
define("_AM_DBUPDATED","کانال دیتابیس به روز شد");
define("_AM_TITLE","عناون :");
define("_AM_CHAIMAGE","لوگوی صفحه :");
define("_AM_CHANHTML","یک صفحه HTML را انتخاب کنید:<br /><br /><span style='font-weight: normal;'>این صفحه به عنوان<br />متن اصلی به کار خواهد رفت.</span>");
define("_AM_DOHTMLDB","وارد کردن یک صفحه HTML به درون دیتابیس؟ <br /><br /><span style='font-weight: normal;'> این گزینه صفحه HTML را  برای دسترسی سریع تر<br /> درون دیتابیس ذخیره میکند</span>");
define("_AM_DOCLICKTOIMPORT"," ");
define("_AM_ACTION","عمل");
define("_AM_OPTIONS","گزینه ها:");
define("_AM_ADMINPAGE","صفحه اصلی مدیریت");
define("_AM_ADMINSPPAGE","صفحات خاص مدیریت");
define("_AM_PAGESLIST","لیست صفحه ها");
define("_AM_DOHTML"," غیر فعال کردن کد های HTML");
define("_AM_DOSMILEY"," غیر فعال کردن اسمایلی");
define("_AM_DOXCODE"," غیر فعال کردن کد های Xoops");
define("_AM_BREAKS"," استفاده از شکستن خود به خودی صفحه ها در زوپس <br />(بهتر است در هنگام استفاده از HTML غیر فعال باشد)");
define("_AM_DEFAULT","به عنوان صفحه پیش فرض در صفحه اصلی ماژول انتخاب شود؟");
define("_AM_ISSUBMENU","لینک زیر منو");
define("_AM_ALLOWCOMMENTSCHANHTML","اجازه برای نظر دادن در این صفحه داده شود؟");
define("_AM_TEXTLINKHTML","کد HTML برای لینک متنی");
define("_AM_BUTTONHTML","کد HTML برای لینک دکمه ای");
define("_AM_LOGOHTML","کد HTML برای لینک لوگو");
define("_AM_BANNERHTML","کد HTML برای لینک بنر");
define("_AM_ADDNEWSFEEDJS","اضافه کردن کد گذاشتن اخبار به صورت جاوا اسکریپت در صفحه لینک به ما؟");
define("_AM_CHANHDL","عنوان صفحه :<br /><br /><span style='font-weight: normal;'>نامی که در صفحه اصلی دیده می شود</span>");
define("_AM_ID","ID");
define("_AM_PAGETITLE","عنوان");
define("_AM_WEIGHT","وزن");
define("_AM_DEFAULTPAGE","صفحه اصلی");
define("_AM_GENERALSET","تنظیمات ماژول");
define("_AM_MAINADMIN","صفحه اصلی ماژول");
define("_AM_CREATENEWPAGE","ساختن صفحه جدید");
define("_AM_GROUPPERMISSIONS","دسترسی ها به ماژول");
define("_AM_ISMAINPAGELINK","لینک های صفحه اصلی");
define("_AM_PUBLISHEDDATE","قرار داده شده");
define("_AM_EXPIREDDATE","به پایان رسیده");
define("_AM_READ","خوانده شده");
define("_AM_INEEDHELP","گرفتن کمک");

define("_AM_UPLOAD","تنظیمات بارگذاری");
define("_AM_REORDER","تنظیم چیدن صفحات");
define("_AM_UPLOADPATH","شاخه بارگذاری :");
define("_AM_REORDERADMIN","تغییر چیدن صفحه ها");
define("_AM_REORDERINTRO","برای تغییر چیده شدن صفحه ها در صفحه . لطفا وزن صفحات را تغییر داده و سپس روی ارسال کلیک کنید.");
define("_AM_UPLOADCHANLOGO","لوگوی این صفحه");
define("_AM_UPLOADCHANHTML","فایل ثابت HTML ");
define("_AM_EDITHTMLFILEEDIT","ویرایش فایل HTML  در ویرایشگر متنی");
define("_AM_CONNECTHTML"," اتصال با صفحه");
define("_AM_CHAN_UPLOADDIR","شاخه بارگذاری عکس ها");
define("_AM_CHAN_LINKIMAGES","شاخه بارگذاری لینک تصاویر");
define("_AM_CHAN_HTMLUPLOADDIR","شاخه بارگذاری فایل های HTML");

define("_AM_PUBLISHDATE","تاریخ قرار گرفتن صفحه:");
define("_AM_EXPIREDATE","تاریخ به پایان رسیدن زمان صفحه");
define("_AM_CLEARPUBLISHDATE","<br /><br />حذف تاریخ قرار گیری صفحه:");
define("_AM_CLEAREXPIREDATE","<br /><br />حذف تاریخ منقضی شدن:");
define("_AM_PUBLISHDATESET"," گذاشتن تاریخ قرار گیری صفحه: ");
define("_AM_SETDATETIMEPUBLISH"," گذاشتن تاریخ/ساعت قرار گیری صفحه");
define("_AM_SETDATETIMEEXPIRE","گذاشتن تاریخ/ساعت منقضی شدن صفحه");
define("_AM_SETPUBLISHDATE","<b>تاریخ قرار گرفتن صفحه: </b>");
define("_AM_SETEXPIREDATE","<b>تاریخ منقضی شدن صفحه: </b>");
define("_AM_EXPIREWARNING","<br />هشدار تاریخ منقضی شدن قبل از تایخ قرار گکرفتن صفحه است! ");

define("_AM_DOCTITLE","استفاده از عنوان سند");
define("_AM_CLEANHTML","پاک کردن کد های HTML داکیومنت در هنگام وارد کردن<br /><br /><span style='font-weight: normal;'>WARNING: This may have adverse affects on the document.</span>");
define("_AM_STRIPHTML","تمیز کردن کد های HTML  در وارد کردن<br /><br /><span style='font-weight: normal;'>WARNING: This will remove 'ALL' HTML tags from the document.</span>");
define("_AM_CLEANHTML2","پاک کردن کد های HTML داکیومنت در هنگام ذخیره کردن<br /><br /><span style='font-weight: normal;'>Strip unwanted MS Word tags. <br />May have adverse affect on Document.</span>");
define("_AM_STRIPHTML2","تمیز کردن کد های HTML  در ذخیره کردن<br /><br /><span style='font-weight: normal;'>WARNING: This will remove 'ALL' HTML tags from the document.</span>");

define("_AM_CLINKTOUS","تنظیمات صفحه تماس با ما");
define("_AM_CMODIFYLINK","تنظیمات صفحه تماس با ما:");
define("_AM_SUBMENUITEM","اضافه کردن به عنوان لینک در زیر منو؟");
define("_AM_MAINPAGEITEM","اضافه کردن به عنوان لینک در زیر صفحه؟");
define("_AM_TEXTLINK","عنوان لینک متنی:");
define("_AM_LINKPAGELOGO","لینک لوگو:");
define("_AM_BUTTON","تصویر برای لینک دکمه ای:");
define("_AM_LOGO","تصویر برای لینک لوگو:");
define("_AM_BANNER","تصویر برای لینک بنر:");
define("_AM_ADDNEWSFEED","اضافه کردن نیوز فید به لینک صفحه");
define("_AM_NEWSFEEDTITLE","عواننیوز فید:");
define("_AM_UPLOADIMAGE","بارگذاری ");
define("_AM_UPLOADLINKIMAGE","فایل برای بارگذاری:");
define("_AM_DIRSELECT","انتخاب شاخه بارگذاری:");
define("_AM_PREVIOUS","قبلی");
define("_AM_NEXT","بعدی");
define("_AM_LINKTOUS","لینک به ما");

define("_AM_REFER","تنظیمات صفحه پیشنهاد به یک دوست");
define("_AM_CCONFIGREFER","تنظیمات صفحه پیشنهاد به یک دوست:");
define("_AM_CREFERINTRO","معرفی این صفحه:<br /><span style='font-weight: normal;'>(This appears before the form)</span>");
define("_AM_REFERPAGELOGO","لوگوی پینهاد به یک دوست:");
define("_AM_EMAILSETTINGS","تنظیمات ایمیل");
define("_AM_EMAILADDRESS","استفاده از متن ذخیره کردن ایمیل");
define("_AM_USERSBLURB","اجازه به کاربران برای نوشتن متن دلخواه");
define("_AM_DEFBLURB","وارد کردن متن پیش فرض:");
define("_AM_CHECKEMAILADDRESS","چک کردن ایمیل قبل از ارسال؟");

define("_AM_MENU","تنظیمات منو و صفحه");
define("_AM_LOGONNEWSFEED","گزینه های لوگو و نیوز فید");

define("_AM_MENUOTHER","سایر تنظیمات");
define("_AM_EMAILCHECK","چک کردن ایمیل ها قبل از ارسال؟");
define("_AM_DISPLAYPRIVACY","نمایش متن خصوصی");
define("_AM_PRIVACYSTATEMENT","وارد کردن متن خصوصی جدید:");

define("_AM_REORDERID","ID");
define("_AM_REORDERTITLE","عنوان");
define("_AM_REORDERWEIGHT","وزن");
define("_AM_REORDERCHANNEL","صفحه ها دوباره چیده شدند");

define("_AM_SERVERSTATUS","وضعیت سرور");
define("_AM_SAFEMODE","Safe Mode: ");
define("_AM_UPLOADS","بارگذاری سرور: ");
define("_AM_OFF","خاموش");
define("_AM_ON","روشن");
define("_AM_SAFEMODEPROBLEMS"," (ممکن است مشکل ایجاد کند) ");
define("_AM_ANDTHEMAX","حداکثر میزان بارگذاری مجاز: ");
define("_AM_DELETEFILE","هشدار<br/>این فایل را حذف می کنید");
define("_AM_ERRORDELETEFILE","خطا در حذف فایل");
define("_AM_TOTALEMAILSSENT","تعداد کل ایمیل هایی که از صفحه ما را پیشنهاد کنید ارسال شده اند");

define("_AM_NOTHINGHEREYET","هیچ صفحه ای ساخته نشد: بنابراین چیزی برای تنظیم وجود ندارد");
define("_AM_PAGEHTMLBODY","تنظیمات HTML  و بدنه صفحه");
define("_AM_FILEUPLOADED","فایل بارگذاری شد");
define("_AM_UPLOADDOC","تبدیل سند ورد:<br /><span style='font-weight: normal;'>این گزینه یک فایل ورد را به  HTML تبدیل می کند.<br />You must have word installed <br />and COM activated on your computer to work correctly.</span>");

define("_AM_IMGEDITPAGE","ویرایش صفحه");
define("_AM_IMGDELPAGE","حذف صفحه");
define("_AM_PERMISSIONCHECK","صفحه هایی را که مایلید به گروه ها دسترسی دهید تیک بزنید.");
define("_AM_EXPIREDATESET"," گذاشتن تاریخ انقضا: ");
define("_AM_WORDCOUNT"," تعداد کلمه: ");
define("_AM_NOTSET","قرار نگرفته");
define("_AM_REPORTBUGS","گزارش خطا");
//error data
define("_AM_WF_ERROR_DELCHANNEL","خطا در هنگام حذف اطلاعات صفحه: <br /><br />");
define("_AM_WF_ERROR_CREATCHANNEL","خطا در هنگام ساختن اطلاعات صفحه: <br /><br />");
define("_AM_WF_ERROR_UPDATCHANNEL","خطا در هنگام به روز کردن اطلاعات صفحه: <br /><br />");
define("_AM_WF_ERROR_UPDATLINK","خطا در هنگام به روز کردن صفحه  لینک به ما: <br /><br />");
define("_AM_WF_ERROR_UPDATREFER","خطا در هنگام به روز کردن اطلاعات صفحه پیشنهاد به یک دوست: <br /><br />");
define("_AM_MENU","منو");
define("_AM_UPLOADCHANTYP","انتخاب نوع بارگذاری");

define("_AM_HELP","متن صفحه کمک");
define("_AM_PAGE_CAN_VIEW","گروه هایی را که برای دیدن صفحات دسترسی دارند انتخاب کنید.");
?>