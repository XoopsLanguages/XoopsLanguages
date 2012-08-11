<?php
/**
 * ****************************************************************************
 *  - TDMDownloads By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (www.xoops.org)
 *
 * La licence GNU GPL, garanti � l'utilisateur les droits suivants
 *
 * 1. La libert� d'ex�cuter le logiciel, pour n'importe quel usage,
 * 2. La libert� de l' �tudier et de l'adapter � ses besoins,
 * 3. La libert� de redistribuer des copies,
 * 4. La libert� d'am�liorer et de rendre publiques les modifications afin
 * que l'ensemble de la communaut� en b�n�ficie.
 *
 * @copyright   http://www.tdmxoops.net
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM (G.Mage); TEAM DEV MODULE
 *
 * ****************************************************************************
 */
// Non du module
define("_MI_TDMDOWNLOADS_NAME","TDMDownloads");

// Description du module
define("_MI_TDMDOWNLOADS_DESC","ایجاد بخش دریافت فایل که در آن کاربران میتوانند فایل ارسال / دریافت / ارزیابی کنند.");

// Bloc
define("_MI_TDMDOWNLOADS_BNAME1","فایل های اخیر");
define("_MI_TDMDOWNLOADS_BNAMEDSC1","نمایش فایل های اخیر");
define("_MI_TDMDOWNLOADS_BNAME2","برترین فایل ها");
define("_MI_TDMDOWNLOADS_BNAMEDSC2","نمایش برترین فایل ها");
define("_MI_TDMDOWNLOADS_BNAME3","فایل هایی با بیشترین رای");
define("_MI_TDMDOWNLOADS_BNAMEDSC3","نمایش فایل ها با بیشترین رای");
define("_MI_TDMDOWNLOADS_BNAME4","فایل های تصادفی");
define("_MI_TDMDOWNLOADS_BNAMEDSC4","نمایش فایل های تصادفی");

// Sous menu
define("_MI_TDMDOWNLOADS_SMNAME1","ارسال");
define("_MI_TDMDOWNLOADS_SMNAME2","جستجو");

// Menu administration
define("_MI_TDMDOWNLOADS_ADMENU1","صفحه اصلی");
define("_MI_TDMDOWNLOADS_ADMENU2","مدیریت شاخه ها");
define("_MI_TDMDOWNLOADS_ADMENU3","مدیریت فایل ها");
define("_MI_TDMDOWNLOADS_ADMENU4","فایل های خراب");
define("_MI_TDMDOWNLOADS_ADMENU5","فایل های ویرایش شده");
define("_MI_TDMDOWNLOADS_ADMENU6","مدیریت فیلد های اضافی");
define("_MI_TDMDOWNLOADS_ADMENU7","درباره");
define("_MI_TDMDOWNLOADS_ADMENU8","دسترسی");
define("_MI_TDMDOWNLOADS_ADMENU9","به روز کردن");
define("_MI_TDMDOWNLOADS_ADMENU10","وارد کردن اطلاعات");

// Pr�f�rences
define('_MI_TDMDOWNLOADS_POPULAR','تعداد بازدید های که باعث میشوند یک فایل جز محبوب ها قرار بگیرد');
define('_MI_TDMDOWNLOADS_POPULARDSC','');
define('_MI_TDMDOWNLOADS_NEWDLS',"تعداد بازدید های که باعث میشوند یک فایل جز محبوب ها قرار بگیرد");
define('_MI_TDMDOWNLOADS_NEWDLSDSC','');
define('_MI_TDMDOWNLOADS_PERPAGE','تعداد فایل هایی که در هر صفحه نمایش داده میشوند');
define('_MI_TDMDOWNLOADS_PERPAGEDSC','');
define('_MI_TDMDOWNLOADS_SUBCATPARENT','تعداد زیر شاخه هایی که در شاخه اصلی نمایش داده میشود');
define('_MI_TDMDOWNLOADS_SUBCATPARENTDSC','');
define('_MI_TDMDOWNLOADS_BLDATE','نمایش فایل های جدید در صفحه اصلی و شاخه ها (خلاصه)؟');
define('_MI_TDMDOWNLOADS_BLDATEDSC','');
define('_MI_TDMDOWNLOADS_BLPOP','نمایش فایل های مجبوب در صفحه اصلی و شاخه ها (خلاصه)؟');
define('_MI_TDMDOWNLOADS_BLPOPDSC','');
define('_MI_TDMDOWNLOADS_BLRATING','نمایش فایل ها با بیشترین رای در صفحه اصلی و شاخه ها (خلاصه)؟');
define('_MI_TDMDOWNLOADS_BLRATINGDSC','');
define('_MI_TDMDOWNLOADS_NBBL','تعداد فایل هاییکه در بخش خلاصه نمایش داده میشود؟');
define('_MI_TDMDOWNLOADS_NBBLDSC','');
define('_MI_TDMDOWNLOADS_LONGBL','طول عنوان خلاصه ');
define('_MI_TDMDOWNLOADS_LONGBLDSC','');
define('_MI_TDMDOWNLOADS_USETELLAFRIEND','استفاده از ماژول Tellafriend برای معرفی فایل به دوستان؟');
define('_MI_TDMDOWNLOADS_USETELLAFRIENDDSC','برای استفاده از این گزینه باید ماژول Tellafriend را نصب کنید');
define('_MI_TDMDOWNLOADS_USESHOTS',"استفاده از لوگو؟");
define('_MI_TDMDOWNLOADS_USESHOTSDSC','');
define('_MI_TDMDOWNLOADS_SHOTWIDTH',"ارتفاع لوگو");
define('_MI_TDMDOWNLOADS_SHOTWIDTHDSC','');
define('_MI_TDMDOWNLOADS_CHECKHOST',"عدم اجازه لینک فایل مستقیم؟ (leeching)");
define('_MI_TDMDOWNLOADS_CHECKHOSTDSC',"");
define('_MI_TDMDOWNLOADS_REFERERS',"این سایت ها بدون واسطه به فایل شما لینک میدهند هر کدام را با | از بقیه جدا کنید");
define('_MI_TDMDOWNLOADS_REFERERSDSC','');
define('_MI_TDMDOWNLOADS_MIMETYPE',"mime type های مجاز");
define('_MI_TDMDOWNLOADS_MIMETYPE_DSC',"mime type های مجاز را وارد کنید و آنها را با | از هم جدا کنید");
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE',"بیشترین اندازه فایل برای بارگذاری");
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZEDSC',"");
define("_MI_TDMDOWNLOADS_FORM_OPTIONS","ویرایشگر ها");
define("_MI_TDMDOWNLOADS_FORM_OPTIONSDSC","");
define('_MI_TDMDOWNLOADS_TOPORDER',"چگونگی ترتیب نمایش اطلاعات در صفحه اصلی؟");
define('_MI_TDMDOWNLOADS_TOPORDER1',"تاریخ ارسال (نزولی)");
define('_MI_TDMDOWNLOADS_TOPORDER2',"تاریخ ارسال (صعودی)");
define('_MI_TDMDOWNLOADS_TOPORDER3',"بازدید (نزولی)");
define('_MI_TDMDOWNLOADS_TOPORDER4',"بازدید (صعودی)");
define('_MI_TDMDOWNLOADS_TOPORDER5',"رای (نزولی)");
define('_MI_TDMDOWNLOADS_TOPORDER6',"رای (صعودی)");
define('_MI_TDMDOWNLOADS_TOPORDER7',"عنوان (نزولی)");
define('_MI_TDMDOWNLOADS_TOPORDER8',"عنوان (صعودی)");
define('_MI_TDMDOWNLOADS_TOPORDERDSC','');
define('_MI_TDMDOWNLOADS_SEARCHORDER',"چگونگی ترتیب نمایش اطلاعات در فهرست فایل ها؟");
define('_MI_TDMDOWNLOADS_SEARCHORDERDSC','');
define('_MI_TDMDOWNLOADS_PERPAGELISTE','تعداد دریافت هایی که در فهرست فایل ها نمایش داده میشد');
define('_MI_TDMDOWNLOADS_PERPAGELISTEDSC','');
define('_MI_TDMDOWNLOADS_AUTO_SUMMARY',"خلاصه خودکار؟");
define('_MI_TDMDOWNLOADS_AUTO_SUMMARYDSC',"");
define('_MI_TDMDOWNLOADS_SHOW_UPDATED',"نمایش تصاویر 'به روز شده' و 'جدید'  ؟");
define('_MI_TDMDOWNLOADS_SHOW_UPDATEDDSC',"");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD',"نوع دسترسی را برای 'دسترسی دانلود'  انتخاب کنید");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOADDSC',"");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD1',"دسترسی با شاخه");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD2',"دسترسی با فایل");
define('_MI_TDMDOWNLOADS_USEPAYPAL',"استفاده از دکمه 'کمک' به وسیله Paypal");
define('_MI_TDMDOWNLOADS_USEPAYPALDSC',"");
define('_MI_TDMDOWNLOADS_CURRENCYPAYPAL',"اهدای کمک");
define('_MI_TDMDOWNLOADS_CURRENCYPAYPALDSC',"");
define('_MI_TDMDOWNLOADS_IMAGEPAYPAL',"تصویر برای دکمه کمک به پروژه");
define('_MI_TDMDOWNLOADS_IMAGEPAYPALDSC',"لطفا آدرس تصویر را وارد کنید");
//new 1.1
define('_MI_TDMDOWNLOADS_PLATEFORM',"بستر های نرم افزاری");
define('_MI_TDMDOWNLOADS_PLATEFORM_DSC',"بستر های نرم افزاری مورد تایید را وارد کنید و آنها رابا | از هم جدا کنید");
define('_MI_TDMDOWNLOADS_PERPAGEADMIN','تعداد موارد در هر صفحه در بخش مدیریت');
define('_MI_TDMDOWNLOADS_PERPAGEADMINDSC','');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAME','تغیر نام فایل بارگذاری شده؟');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC','اگر این گزینه روی خیر باشد و شما فایلی را که هم اکنون نام آن موجود است بارگذاری کنید , سرور به طور خودکار فایل جدید را جایگزین فایل قبلی میکند');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX','پیشوند برای نام فایل های بارگذاری شده');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC','فقط در صورتی کار میکند که امکان تغییر نام فایل بعد از بارگذاری را روی بله قرار داده باشید');
define('_MI_TDMDOWNLOADS_USETAG','استفاده از ماژول TAG برای تولید تگ ها');
define('_MI_TDMDOWNLOADS_USETAGDSC','برای استفاده از این گزینه باید ماژول TAG را نصب کرده باشید');

// Notifications
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFY','سراسرس');
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC','اگاهی رسانی های سراسری دریافت فایل.');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFY','شاخه');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC',"تنظیمات اطلاع رسانی که برای همین شاخه به کار میرود.");
define('_MI_TDMDOWNLOADS_FILE_NOTIFY','فایل');
define('_MI_TDMDOWNLOADS_FILE_NOTIFYDSC',"تنظیمات اطلاع رسانی که برای همین فایل به کار میرود.");
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','شاخه جدید');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','هرگاه شاخه جدیدی ایجاد شد مرا باخبر کن.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC',"هرگاه شاخه جدیدی ایجاد شد به من ارسال کن");
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:شاخه جدید');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','اطلاع رسانی خودکار:شاخه جدید');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','هر گاه درخواستی برای اصلاح فایل رسید مرا با خبر کن.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC',"هر گاه درخواستی برای اصلاح فایل رسید به من ارسال کن.");
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}  اطلاع رسانی خودکار: درخواست اصلاح فایل');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','Broken File Submitted');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','هر گزارشی راجع به ارسال فایل خراب از سایت رسید مرا با خبر کن.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','هر گزارشی راجع به ارسال فایل  خراب از سایت رسید به من ارسال کن.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:ارسال فایل از خارج سایت‌');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','فایل ارسال شده');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP',"هر فایلی ارسال شد مرا با خبر کن (awaiting approval).");
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC',"هر فایلی ارسال شد به من ارسال کن (awaiting approval).");
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل ارسال شده');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','فایل جدید');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP',"هر فایل جدیدی ارسال شد مرا با خبر کن.");
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','هر فایل جدیدی ارسال شد به من ارسال کن.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل جدید');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','فایل ثبت شده');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP',"هر فایل جدیدی ثبت شد مرا با خبر کن.");
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC',"هر فایل جدیدی ثبت شد به من ارسال کن.");
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}  اطلاع رسانی خودکار:فایل ثبت شده در شاخه');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','فایل جدید');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP',"وقتی یک فایل در همین شاخه قرار گرفت مرا با خبر کن.");
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC',"وقتی یک فایل در همین شاخه قرار گرفت به من ارسال کن.");
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل جدید در شاخه');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY','فایل تایید شده');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP','هر فایلی تایید شد مرا با خبر کن.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC','هر فایلی تایید شد به من ارسال کن.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:فایل تایید شده');
?>