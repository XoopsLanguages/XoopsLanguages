<?php
/**
 * $Id: modinfo.php,v 1.6 2006/04/08 21:15:08 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFD_NAME","دریافت فایل (WF-Downloads)");

// A brief description of this module
define("_MI_WFD_DESC","فضایی برای دانلود/ارسال/ارزش گذاری فایل های مختلف فراهم میکند.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFD_BNAME1","آخرین دریافت‌ها");
define("_MI_WFD_BNAME2","بهترین دریافت‌ها");

// Sub menu titles
define("_MI_WFD_SMNAME1","ارسال فایل");
define("_MI_WFD_SMNAME2","بیشتر دانلود شده");
define("_MI_WFD_SMNAME3","بیشتر رای داده شده");

// Names of admin menu items
define("_MI_WFD_BINDEX","صفحه‌ی اصلی");
define("_MI_WFD_INDEXPAGE","مدیریت صفحه اصلی ماژول");
define("_MI_WFD_MCATEGORY","مدیریت شاخه ها");
define("_MI_WFD_MDOWNLOADS","مدیریت فایل ها");
define('_MI_WFD_REVIEWS','مدیریت نقد ها');
define("_MI_WFD_MUPLOADS","بارگذاری عكس");
define("_MI_WFD_MMIMETYPES","مدیریت Mimetype ها");
define("_MI_WFD_PERMISSIONS","تنظیمات سطح دسترسی ها");
define("_MI_WFD_MVOTEDATA","مدیریت رای ها");
define("_MI_WFD_MMIRRORS","مدیریت همسان ها");

// Title of config items
define('_MI_WFD_POPULAR','تعداد دانلود برای پر طرفدار شدن');
define('_MI_WFD_POPULARDSC','تعداد دانلودی که باعث میشود فایل جزو فایل های پر طرفدار قرار گیرد.');

//Display Icons
define("_MI_WFD_ICONDISPLAY","چگونگی نمایش فایل های پرطرفدار و جدید:");
define("_MI_WFD_DISPLAYICONDSC","انتخاب اینکه چطور فایل های پر طرفدار و جدید در صفحه نمایش داده شوند.");
define("_MI_WFD_DISPLAYICON1","نمایش بر اساس آیكن‌ها");
define("_MI_WFD_DISPLAYICON2","نمایش بر اساس متن");
define("_MI_WFD_DISPLAYICON3","بدون نمایش");

define("_MI_WFD_DAYSNEW","روز‌های دریافت جدید:");
define("_MI_WFD_DAYSNEWDSC","تعداد روز‌هایی كه فایل دریافتی به عنوان جدید محسوب می‌شود.");
define("_MI_WFD_DAYSUPDATED","روز‌های به روز شده‌ی جدید");
define("_MI_WFD_DAYSUPDATEDDSC","تعداد روز‌هایی كه یك فایل دریافتی به عنوان به روز شده محسوب می‌شود.");

define('_MI_WFD_PERPAGE','تعداد فایل در صفحه');
define('_MI_WFD_PERPAGEDSC','تعداد فایلی که در هر صفحه از هر شاخه نمایش داده می شود.');

define('_MI_WFD_TEMPLATESET','انتخاب الگو');
define('_MI_WFD_TEMPLATESETDSC','الگوی را برای استفاده در ماژول انتخاب کنید.<br />این به شما امکان میدهد که بتوانید نحوه نمایش فایل ها در صفحه تعییین کنید');
define('_MI_WFD_TEMPLATESET1','پیشفرض');
define('_MI_WFD_TEMPLATESET2','حرفه ای');

define('_MI_WFD_USESHOTS','نمایش تصویر برنامه');
define('_MI_WFD_USESHOTSDSC','بلی را انتخاب كنید تا برای برنامه تصویر نشان داده‌شود.');
define('_MI_WFD_SHOTWIDTH','طول تصویر نمایشی');
define('_MI_WFD_SHOTWIDTHDSC','نمایش طول تصویر برای دریافت');
define('_MI_WFD_SHOTHEIGHT','عرض تصویر نمایشی');
define('_MI_WFD_SHOTHEIGHTDSC','نمایش عرض تصویر برای دریافت');
define('_MI_WFD_CHECKHOST','غیرفعال كردن دریافت مستقیم');
define('_MI_WFD_REFERERS','این سایت ها میتوانند مستقیما به فایل های شما لینک دهند <br />هر کدام را با  | از هم جدا کنید ');

define("_MI_WFD_ANONPOST","ارسال فایل توسط مهمان ها: ");
define("_MI_WFD_ANONPOSTDSC","به كاربران مهمان اجازه‌می‌دهید كه به سایت شما فایل/همسان ارسال كنند؟");
define("_MI_WFD_ANONPOST1","هیچ کدام");
define("_MI_WFD_ANONPOST2","فقط فایل");
define("_MI_WFD_ANONPOST3","فقط همسان");
define("_MI_WFD_ANONPOST4","هر دو");

define('_MI_WFD_AUTOAPPROVE','تایید خودكار فایل/ همسانت های ارسال شده');
define('_MI_WFD_AUTOAPPROVEDSC','این گزینه را انتخاب کنید تا فایل/همسان ها بدون بررسی مدیران تایید شوند.');
define('_MI_WFD_AUTOAPPROVE1','هیچکدام');
define('_MI_WFD_AUTOAPPROVE2','فقط فایل');
define('_MI_WFD_AUTOAPPROVE3','فقط همسان');
define('_MI_WFD_AUTOAPPROVE4','هر دو');

define('_MI_WFD_REVIEWAPPROVE','تایید خودکار نقد های ارسال شده');
define('_MI_WFD_REVIEWAPPROVEDSC','این گزینه را انتخاب کنید تا نقد های ارسال شده بدون بررسی مدیران تایید شوند.');
define("_MI_WFD_REVIEWANONPOST","نقد های کاربران مهمان:");
define("_MI_WFD_REVIEWANONPOSTDSC","آیا به کاربران مهمان اجازه میدهید نقد های جدید به داخل وب سایت آپلود کنند؟");

define('_MI_WFD_MAXFILESIZE','حجم فایل (KB)');
define('_MI_WFD_MAXFILESIZEDSC','بیشترین حجمی که  برای بارگذاری مجاز است.');
define('_MI_WFD_IMGWIDTH','عرض تصویر برای بارگذاری');
define('_MI_WFD_IMGWIDTHDSC','بیشترین عرضی که برای تصویر بارگذاری شده مجاز است');
define('_MI_WFD_IMGHEIGHT','ارتفاع  تصویر برای بارگذاری');
define('_MI_WFD_IMGHEIGHTDSC','بیشترین ارتفاعی که برای تصویر بارگذاری شده مجاز است');

define('_MI_WFD_AUTOSUMMARY','فعال کردن خلاصه');
define('_MI_WFD_AUTOSUMMARYDESC','به طور اوتو ماتیک خلاصه را بر اساس x کاراکتر تعریف شده بنویس');
define('_MI_WFD_AUTOSUMMARYLENGTH','طول خلاصه');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','حداکثر تعداد کاراکتر نشان داده شده در خلاصه');

define('_MI_WFD_UPLOADDIR','شاخه بارگذاری (بدون داشتن اسلش در آخر)');
define('_MI_WFD_UPLOADDIRDSC','شاخه بارگذاری *باید* یک مسیر کامل داشته باشد!');

define('_MI_WFD_DOWNLOADMINPOSTS',"حداقل تعداد پست مورد نیاز برای دریافت فایل");
define('_MI_WFD_DOWNLOADMINPOSTS_DESC',"حداقل تعداد پستی را که میخواهید کاربران برای  دریافت کردن فایل ها داشته باشند بنویسید.");
define('_MI_WFD_UPLOADMINPOSTS',"حداقل تعداد پست مورد نیاز برای بارگذاری فایل");
define('_MI_WFD_UPLOADMINPOSTSDSC',"حداقل تعداد پستی را که میخواهید کاربران برای  بارگذاری فایل ها داشته باشند بنویسید");

define('_MI_WFD_ALLOWSUBMISS','ارسال کاربران عضو: ');
define('_MI_WFD_ALLOWSUBMISSDSC','اجازه به كاربران برای ارسال فایل/همسان');
define('_MI_WFD_ALLOWSUBMISS1','هیچکدام');
define('_MI_WFD_ALLOWSUBMISS2','فقط فایل');
define('_MI_WFD_ALLOWSUBMISS3','فقط همسان');
define('_MI_WFD_ALLOWSUBMISS4','هر دو');

define('_MI_WFD_ALLOWUPLOADS','بارگذاری کاربران عضو:');
define('_MI_WFD_ALLOWUPLOADSDSC','اجازه به كاربران برای ارسال مستقیم فایل به سایت شما');
define('_MI_WFD_SCREENSHOTS','شاخه مربوط به تصویر برنامه‌ها');
define('_MI_WFD_CATEGORYIMG','شاخه مربوط به تصاویر شاخه ها');
define('_MI_WFD_MAINIMGDIR','شاخه تصویر اصلی');
define('_MI_WFD_USETHUMBS','استفاده‌از تصاویر تمبر‌ی‌شكل');
define("_MI_WFD_USETHUMBSDSC","فایل های پشتیبانی شونده: JPG, GIF, PNG.<div style='padding-top: 8px;'>ماژول دریافت فایل از تصاویر تمبری شکل برای تصاویر استفاده میکند.اگر سرور شما از این گزینه پشتیبانی نمیکند روی 'نه' قرار دهیدتا از تصویر اصلی استفاده شود.</div>");
define('_MI_WFD_DATEFORMAT','نوع نمایش تاریخ:');
define('_MI_WFD_DATEFORMATDSC','استفاده از کد زمانی پیشفرض برای wfdownloads:');
define('_MI_WFD_SHOWDISCLAIMER','نمایش شرایط قبل از ارسال توسط کاربر؟');
define('_MI_WFD_SHOWDOWNDISCL','نمایش شرایط قبل از دانلود توسط کاربر؟');
define('_MI_WFD_DISCLAIMER','متن شرایط ارسال را وارد کنید:');
define('_MI_WFD_DOWNDISCLAIMER','متن شرایط دانلود را وارد کنید:');
define('_MI_WFD_PLATFORM','بستر های نرم افزاری  را وارد کنید:');
define('_MI_WFD_SUBCATS','زیر شاخه ها:');
define('_MI_WFD_VERSIONTYPES','حالت نسخه:');
define('_MI_WFD_LICENSE','مجوز را وارد کنید:');
define('_MI_WFD_LIMITS','محدودیت های فایل را وارد کنید:');

define("_MI_WFD_SUBMITART","دسترسی گروه ها برای  ارسال فایل:");
define("_MI_WFD_SUBMITARTDSC","گروه هایی را که میتوانند فایل جدید ارسال کنند انتخاب کنید");

define("_MI_WFD_IMGUPDATE","تصاویر تمبری شکل به روز شوند؟");
define("_MI_WFD_IMGUPDATEDSC","اگر این گزینه را انتخاب کنید تصاویر تمبری شکل در هر صفحه به روز می شوند، در غیر ین صورت اولین تصویر تمبری شکل استفاده خواهد شد. <br /><br />");
define("_MI_WFD_QUALITY","كیفیت تصاویر تمبری‌شكل");
define("_MI_WFD_QUALITYDSC","كمترین:0 بیشترین:100");
define("_MI_WFD_KEEPASPECT","حفظ كردن نسبت طول و عرض تصویر؟");
define("_MI_WFD_KEEPASPECTDSC","");
define("_MI_WFD_ADMINPAGE","تعداد فایل ها در صفحه مدیریت:");
define("_MI_WFD_AMDMINPAGEDSC","تعداد فایل جدیدی که در قسمت مدیریت نمایش داده میشود.");
define("_MI_WFD_ARTICLESSORT","چینش پیشفرض فایل ها:");
define("_MI_WFD_ARTICLESSORTDSC"," انتخاب چینش پیشفرض برای فهرست فایل ها.");
define("_MI_WFD_TITLE","عنوان");
define("_MI_WFD_RATING","رتبه‌بندی");
define("_MI_WFD_WEIGHT","وزن");
define("_MI_WFD_POPULARITY","محبوبیت");
define("_MI_WFD_SUBMITTED2","تاریخ ارسال");
define('_MI_WFD_COPYRIGHT','اعلان حق كپی');
define('_MI_WFD_COPYRIGHTDSC','این گزینه را انتخاب کنید تا یک اعلان حق کپیدر صفحه دانلود نمایش داده شود.');

// Description of each config items
define('_MI_WFD_PLATFORMDSC','وارد کردن فهرست بستر های نرم افزاری <br />هر کدام را با | از هم جدا کنید مهم: اگر سایت شما در حال کار است این گزینه ها را تغییر ندهید،و جدید ها را به انتهای فهرست اضافه کنید');
define('_MI_WFD_SUBCATSDSC','بله را انتخاب کنید تا زیر شاخه ها نمایش داده شوند.انتخاب نه باعث خواهد شد که زیر شاخه ها در فهرست دیده نشوند');
define('_MI_WFD_LICENSEDSC','فهرست بستر ها برای وارد کردن <br />هر کدام را با | از هم جدا کنید');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY','کلی');
define('_MI_WFD_GLOBAL_NOTIFYDSC','گزینه های کلی آگهی رسانی دریافت فایل');

define('_MI_WFD_CATEGORY_NOTIFY','شاخه');
define('_MI_WFD_CATEGORY_NOTIFYDSC','گزینه های آگهی رسانی برای این شاخه');

define('_MI_WFD_FILE_NOTIFY','فایل');
define('_MI_WFD_FILE_NOTIFYDSC','گزینه های آگهی رسانی برای این فایل');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY','شاخه‌ی جدید');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP','وقتی یك شاخه‌ی جدید ایجاد شد مرا باخبر كن');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC','دریافت آگهی هنگامی كه یك  شاخه جدید ایجاد شد.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: شاخه جدید');

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY','درخواست اصلاح فایل');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP','وقتی در خواستی برای اصلاح فایل داده میشود مرا باخبر كن');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC','دریافت آگهی هنگامی که درخواستی برای اصلاح فایل داده میشود.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: درخواست اصلاح فایل');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY','گزارش فایل خراب شده');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP','هر گزارش فایل خرابی ه ارسال شد مرا با خبر کن');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC','دریافت آگهی هنگامی که گزارش فایل خربی ارسال میشود.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: گزارش فایل خراب');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY','فایل ارسال شده');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP','هر فایلی که ارسال شد و منتظر برای تایید بود مرا با خبر کن');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC','دریافت آگهی هنگامی که هر فایل جدیدی ارسال میشود و منتظربرای تایید است.');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: فایل جدید ارسال شده');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY','فایل جدید');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP','وقتی یك فایل جدید  در سایت قرار گرفت مرا باخبر كن');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC','دریافت آگهی هنگامی كه یك فایل جدید در سایت قرار گرفت');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: فایل جدید');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY','فایل ارسال شده');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP','هنگامی كه یك‌فایل ارسال شد و منتظر تایید بود مرا باخبر كن');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC','دریافت آگهی هنگامی كه یك فایل منتظربرای تایید در این شاخه ارسال شد.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: فایل جدید ارسال شده در شاخه');

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY','فایل جدید');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP','اگر یك فایل در این شاخه ارسال شد مرا باخبر كن.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC','دریافت آگهی رسانی هنگامی كه یك فایل جدید در این شاخه ارسال شد.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: فایل جدید در شاخه');

define('_MI_WFD_FILE_APPROVE_NOTIFY','فایل تایید شده');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP','هنگامی كه این فایل تایید شد مرا باخبر كن.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC','دریافت آگهی هنگامی كه این فایل تایید شد.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: فایل تایید شده');

define('_MI_WFD_AUTHOR_INFO',"اطلاعات توسعه دهنده ماژول");
define('_MI_WFD_AUTHOR_NAME',"توسعه دهندهr");
define('_MI_WFD_AUTHOR_DEVTEAM',"تیم توسعه");
define('_MI_WFD_AUTHOR_WEBSITE',"وب سایت توسعه دهنده");
define('_MI_WFD_AUTHOR_EMAIL',"پست الکترونیکی توسعه دهنده");
define('_MI_WFD_AUTHOR_CREDITS',"افراد تیم");
define('_MI_WFD_MODULE_INFO',"اطلاعات توسعه ماژول");
define('_MI_WFD_MODULE_STATUS',"حالت توسعه دهندگی");
define('_MI_WFD_MODULE_DEMO',"سایت برای نمایش");
define('_MI_WFD_MODULE_SUPPORT',"سایت رسمی  پشتیبانی");
define('_MI_WFD_MODULE_BUG',"ارسال یک خطا برای این ماژول");
define('_MI_WFD_MODULE_FEATURE',"پیشنهاد یک ویژگی جدید برای این مازول");
define('_MI_WFD_MODULE_DISCLAIMER',"شرایط استفاده");
define('_MI_WFD_RELEASE',"تاریخ انتشار: ");

define('_MI_WFD_MODULE_MAILLIST',"فهرست ایمیلی اسمارتفکتوری");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS',"اعلان های فهرست ایمیلی");
define('_MI_WFD_MODULE_MAILBUGS',"فهرست ایمیلی خطا ها");
define('_MI_WFD_MODULE_MAILFEATURES',"فهرست ایمیلی ویژگی ها");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC',"دریافت آخرین اعلان ها ازاسمارتفکتوری.");
define('_MI_WFD_MODULE_MAILBUGSDSC'," فهرست ایمیلی بررسی و ارسال خطا های");
define('_MI_WFD_MODULE_MAILFEATURESDSC',"فهرست ایمیلی درخواست ویژگی های جدید.");

define('_MI_WFD_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY SMARTFACTORY \"AS IS\" AND \"WITH ALL FAULTS.\"
SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN SMARTFACTORY WEBSITE. IN NO
EVENT WILL SMARTFACTORY BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
SMARTFACTORY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFD_AUTHOR_CREDITSTEXT',"The SmartFactory Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish, Kiang<br />and anyone else who has contributed to either directly or indirectly.");
define('_MI_WFD_AUTHOR_BUGFIXES',"Bug Fix History");

define('_MI_WFD_COPYRIGHTIMAGE',"Images copyright WF-Project and may only be used with permission");


// mirror defines
define('_MI_WFD_MIRROR_USEIMAGES','لوگیی فایل های همسان نشان داده شوند؟'); // not implemented yet
define('_MI_WFD_MIRROR_USEIMAGESDSC','بله را انتخاب کنید تا برای هر همسان یک لوگو قرار داده شود'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTH','عرض لوگو'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTHDSC','عرضی که لوگو با آن نمایش داده میشود'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHT','ارتفاع لوگو'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHTDSC','ارتفاع لوگو برای نمایش'); // not implemented yet
define('_MI_WFD_MIRROR_AUTOAPPROVE','تایید خودکار لوگو های ارسال شده');
define('_MI_WFD_MIRROR_AUTOAPPROVEDSC','گزینه را انتخاب کنید تا لوگو ها بدون بررسی تایید شوند.');

define('_MI_WFD_MIRROR_MAXIMGWIDTH','عرض لوگوی بارگذاری'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGWIDTHDSC','حداکثر عرض لوگو قابل قبول برای بارگذاری'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHT','ارتفاع لوگو'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHTDSC','حداکثر ارتفاع لوگو قابل قبول برای بارگذاری'); // not implemented yet

define('_MI_WFD_MIRROR_ENABLE','فعال کردن سیستم  فایل همسان');
define('_MI_WFD_MIRROR_ENABLEDSC','');
define('_MI_WFD_MIRROR_ENABLEONCHK','فعال کردن بررسی آن ۀآین سرور');
define('_MI_WFD_MIRROR_ENABLEONCHKDSC','فعال کردن بررسی سرور برای همسان ها<br />این میتواند باعث کم شدن سرعت سرور شما بشود<br />اگر تعداد زیادی همسان داشته باشد');
define('_MI_WFD_MIRROR_ALLOWSUBMISS','ارسال همسان به وسله کاتربران:');
define('_MI_WFD_MIRROR_ALLOWSUBMISSDSC','اجازه به کاربران برای ارسال همسان های جدید');
define('_MI_WFD_MIRROR_MIRRORIMAGES','شاخه ای که لوگو های  همسان ها در آن قرار میگیرند'); // not implemented yet
define('_MI_WFD_MIRROR_MIRRORIMAGESDSC','شاخه ای که لوگو های  همسان ها در آن قرار میگیرند'); // not implemented yet
?>