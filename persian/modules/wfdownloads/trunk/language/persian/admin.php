<?php
/**
 * $Id: admin.php,v 1.13 2006/04/10 18:39:34 malanciault Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// %%%%%%	Module NMDe 'MyDownloads' (Admin)	  %%%%%
// Buttons
define("_AM_WFD_BMODIFY","ویرایش");
define("_AM_WFD_BDELETE","حذف");
define("_AM_WFD_BADD","اضافه");
define("_AM_WFD_BAPPROVE","تایید");
define("_AM_WFD_BIGNORE","نادیده بگیر");
define("_AM_WFD_BCANCEL","رد کن");
define("_AM_WFD_BSAVE","ذخیره");
define("_AM_WFD_BRESET","ریست");
define("_AM_WFD_BMOVE","جابجا کردن فایل ها");
define("_AM_WFD_BUPLOAD","بارگذاری");
define("_AM_WFD_BDELETEIMAGE","عکس انتخاب شده را حذف کن");
define("_AM_WFD_BRETURN","بازگشت به جایی که قبلا بودید");
define("_AM_WFD_DBERROR","خطا در دستیابی به دیتابیس: لطفا این خطا را به سایت farsixoops.com گزارش کنید");
//Banned Users
define("_AM_WFD_NONBANNED","ممنوع نشده");
define("_AM_WFD_BANNED","ممنوع شده");
define("_AM_WFD_EDITBANNED","ویرایش کاربران ممنوع شده");
// Other Options
define("_AM_WFD_TEXTOPTIONS","گزینه های متن:");
define("_AM_WFD_ALLOWHTML"," فعال کردن کد های html");
define("_AM_WFD_ALLOWSMILEY"," فعال کردن لبخندکها");
define("_AM_WFD_ALLOWXCODE"," فعال کردن کد های زوپس");
define("_AM_WFD_ALLOWIMAGES"," فعال کردن عکس ها");
define("_AM_WFD_ALLOWBREAK"," شکستن خود به خود خط ها توسط زوپس؟");
define("_AM_WFD_UPLOADFILE","فایل با موفقیت بارگذاری شد");
define("_AM_WFD_NOMENUITEMS","هیچ گزینه ای در داخل منو وجود ندارد");

// Admin Bread crumb
define("_AM_WFD_PREFS","ویژگی ها");
define("_AM_WFD_PERMISSIONS","دسترسی ها");
define("_AM_WFD_BINDEX","صفحه اصلی مدیریت");
define("_AM_WFD_BLOCKADMIN","بلاک ها");
define("_AM_WFD_GOMODULE","برو به صفحه اصلی ماژول");
define("_AM_WFD_BHELP","کمک");
define("_AM_WFD_ABOUT","درباره");
// Admin Summary
define("_AM_WFD_SCATEGORY","شاخه‌ها: ");
define("_AM_WFD_SFILES","فایل‌ها: ");
define("_AM_WFD_SNEWFILESVAL","ارسال شده‌ها: ");
define("_AM_WFD_SMODREQUEST","درخواست های اصلاح: ");
define("_AM_WFD_SREVIEWS","‌نقدها: ");
define("_AM_WFD_SMIRRORS","همسان‌ها: ");
// Admin Main Menu
define("_AM_WFD_MCATEGORY","مدیریت شاخه ها");
define("_AM_WFD_INDEXPAGE","مدیریت صفحه اصلی");
define("_AM_WFD_MUPLOADS","بارگذاری عکس");
define("_AM_WFD_MMIMETYPES","مدیریت mimetype");
define("_AM_WFD_MCOMMENTS","نظر ها");
define("_AM_WFS_MVOTEDATA","رای ها");
// waiting reviews
define("_AM_WFD_AREVIEWS","مدیریت نقد ها");
define("_AM_WFD_AREVIEWS_WAITING","نقد های منتظر برای تایید:");
define("_AM_WFD_AREVIEWS_INFO","اطلاعات مدیریت نقد ها");
define("_AM_WFD_AREVIEWS_APPROVE","<b>تایید</b> نقد جدید");
define("_AM_WFD_AREVIEWS_APPROVED","نقد مورد نظر تایید شد.");
define("_AM_WFD_AREVIEWS_EDIT","<b>ویرایش</b> نقد جدید و تایید آن");
define("_AM_WFD_AREVIEWS_DELETE","<b>حذف</b> نقد جدید");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW","ساختن شاخه جدید");
define("_AM_WFD_CCATEGORY_MODIFY","ویرایش شاخه");
define("_AM_WFD_CCATEGORY_MOVE","انتقال فایل های شاخه");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE","نام شاخه: ");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED","خطا در انتقال فایل ها: فایل ها به این شاخه منتقل نشدند");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT","خطا در انتقال فایل ها: این شاخه پیدا نشد");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED","فایل ها منتقل شدند");
define("_AM_WFD_CCATEGORY_CREATED","شاخه جدید ساخته شد و پایگاه داده به روز شد");
define("_AM_WFD_CCATEGORY_MODIFIED","شاخه انتخاب شده ویرایش شد و پایگاه داده به روز شد");
define("_AM_WFD_CCATEGORY_DELETED","شاخه انتخاب شده حذف شد و پایگاه داده به روز شد");
define("_AM_WFD_CCATEGORY_AREUSURE","هشدار: ایا مطمان هستید که میخواهید این شاخه و تمام فایل ها و نظر های آن را حذف کنید؟");
define("_AM_WFD_CCATEGORY_NOEXISTS","شما اول باید یک شاخه بسازید تا بتوانید فایل جدید بارگذاری کنید");
define("_AM_WFD_FCATEGORY_GROUPPROMPT","دسترسی ها به شاخه: <div style='padding-top: 8px;'><span style='font-weight: normal;'>گروه هایی را که مایل هستید به این شاخه دسترسی داشته باشند انتخاب کنید</span></div>");
define("_AM_WFD_FCATEGORY_TITLE","نام شاخه: ");
define("_AM_WFD_FCATEGORY_WEIGHT","وزن شاخه: ");
define("_AM_WFD_FCATEGORY_SUBCATEGORY","به عنوان زیر شاخه در نظر بگیر: ");
define("_AM_WFD_FCATEGORY_CIMAGE","انتخاب عکس برای شاخه: ");
define("_AM_WFD_FCATEGORY_DESCRIPTION","شرح شاخه: ");
define("_AM_WFD_FCATEGORY_SUMMARY","خلاصه شاخه: ");
define("_AM_WFD_CCATEGORY_CHILDASPARENT","شما نمیتوانید یک زیر شاخه را به عنوان شاخه اصلی در نظر بگیرید");

/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED","صفحه اصلی ماژول ویرایش شد و پایگاه داده با موفقیت به روز شد");
define("_AM_WFD_IPAGE_INFORMATION","اطلاعات صفحه اصلی");
define("_AM_WFD_IPAGE_MODIFY","ویرایش صفحه اصلی");
define("_AM_WFD_IPAGE_CIMAGE","انتخاب عکس صفحه اصلی:");
define("_AM_WFD_IPAGE_CTITLE","عنوان صفحه اصلی:");
define("_AM_WFD_IPAGE_CHEADING","سر تیتر برای صفحه اصلی:");
define("_AM_WFD_IPAGE_CHEADINGA","جهت سرتیتر صفحه اصلی:");
define("_AM_WFD_IPAGE_CFOOTER","فوتر صفحه اصلی:");
define("_AM_WFD_IPAGE_CFOOTERA","جهت فوتر صفحه اصلی:");
define("_AM_WFD_IPAGE_CLEFT","چپ چین");
define("_AM_WFD_IPAGE_CCENTER","وسط چین");
define("_AM_WFD_IPAGE_CRIGHT","راست چین");

/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT","مدیریت دسترسی ها");
define("_AM_WFD_PERM_PERMSNOTE","<div><b>توجه:</b>لطفا توجه کنید حتی اگر شما دسترسی های صحیح  را برای گروه ها برای دیدن انتخاب کنید، گروه ممکن است به دلیل اینکه به خود ماژول دسترسی ندارد نتواند بلاکها و متون را مشاهده کند. برای انجام این کار،به قسمت<b>مدیریت ماژول سیستم > گروه ها</b>، بروید و گروه مورد نظر را انتخاب کرده و مربع کنار دسترسی به ماژول را تیک بزنید.</div>");
define("_AM_WFD_PERM_CPERMISSIONS","دسترسی به شاخه ها");
define("_AM_WFD_PERM_CSELECTPERMISSIONS","شاخه هایی را که هر گروه مجاز به دیدن آن است انتخاب کنید");
define("_AM_WFD_PERM_CNOCATEGORY","نمتوان دسترسی ها را ست کرد: هنوز هیچ شاخه ای ساخته نشده است");
define("_AM_WFD_PERM_FPERMISSIONS","دسترسی به فایل ها");
define("_AM_WFD_PERM_FNOFILES","نمیتوان دسترسی ها را ست کرد: هنوز هیچ فایلی ساخته نشده است");
define("_AM_WFD_PERM_FSELECTPERMISSIONS","فایل هایی را که هر گروه مجاز به دیدن آن است انتخاب کنید");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD","تصویر با موفقیت به شاخه هدف بارگذاری شد");
define("_AM_WFD_DOWN_NOIMAGEEXIST","خطا: فایلی برای بارگذاری انتخاب نشده است. لطفا دوباره تلاش کنید.");
define("_AM_WFD_DOWN_IMAGEEXIST","این تصویر قبلا آپلود شده است");
define("_AM_WFD_DOWN_FILEDELETED","فایل حذف شده است");
define("_AM_WFD_DOWN_FILEERRORDELETE","خطا در حذف فایل: فایل حذف نشد");
define("_AM_WFD_DOWN_NOFILEERROR","خطا در حذف فایل: فایلی برای حذف انتخاب نشده است");
define("_AM_WFD_DOWN_DELETEFILE","هشدار: آیا اطمینان دارید که میخواهید این فایل تصویر را حذف کنید؟");
define("_AM_WFD_DOWN_IMAGEINFO","مشخصات سرور");
define("_AM_WFD_DOWN_NOTSET","مسیر بارگذاری مشخص نشده است.");
define("_AM_WFD_DOWN_SERVERPATH","مسیر سرور در جایی که زوپس نصب شده: ");
define("_AM_WFD_DOWN_UPLOADPATH","مسیر باگذاری در حال حاضر: ");
define("_AM_WFD_DOWN_UPLOADPATHDSC","توجه: مسیر بارگذاری *باید* به صورت یک مسیرسرور کامل  به عنوان شاخه بارگذاری شما تعریف شود.");
define("_AM_WFD_DOWN_SPHPINI","<b>اطلاعات گرفته شده از فایل PHP INI:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS","وضعیت Safe Mode: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS","وضعیت Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS","وضعیت بارگذاری روی سرور: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE","بیشترین حجم فایل مجاز برای بارگذاری: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE","بیشترین حجم نوشته مجاز در هنگام ارسال پست: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS"," (این ممکن است مشکل ایجاد کند)");
define("_AM_WFD_DOWN_GDLIBSTATUS","پشتیبانی از GD Library: ");
define("_AM_WFD_DOWN_GDLIBVERSION","نسخه GD Library: ");
define("_AM_WFD_DOWN_GDON","<b>فعال</b> (تصاویر تمبری قابل دسترسی)");
define("_AM_WFD_DOWN_GDOFF","<b>غیر فعال</b> (تصاویر تمبری غیر قابل دسترسی)");
define("_AM_WFD_DOWN_OFF","<b>خاموش</b>");
define("_AM_WFD_DOWN_ON","<b>روشن</b>");
define("_AM_WFD_DOWN_CATIMAGE","شاخه تصاویر");
define("_AM_WFD_DOWN_SCREENSHOTS","تصویر اسکرین شات");
define("_AM_WFD_DOWN_MAINIMAGEDIR","تصاویر اصلی");
define("_AM_WFD_DOWN_FCATIMAGE","آدرس شاخه تصاویر");
define("_AM_WFD_DOWN_FSCREENSHOTS","آدرس شاخه اسکرین شات ها");
define("_AM_WFD_DOWN_FMAINIMAGEDIR","آدرس شاخه تصاویر اصلی");
define("_AM_WFD_DOWN_FUPLOADIMAGETO","تصویر : ");
define("_AM_WFD_DOWN_FUPLOADPATH","شاخه: ");
define("_AM_WFD_DOWN_FUPLOADURL","آدرس: ");
define("_AM_WFD_DOWN_FOLDERSELECTION","انتخاب شاخه آپلود:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE","نمایش تصویر انتخاب شده:");
define("_AM_WFD_DOWN_FUPLOADIMAGE","بارگذاری تصویر جدید درون مقصد انتخاب شده:");

// Main Index defines
define("_AM_WFD_MINDEX_DOWNSUMMARY","خلاصه وضعیت قسمت مدیریت ماژول");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN","فایل هایی که در سایت قرار گرفته اند:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN","فایل هایی که به طور خودکار در سایت قرار گرفته اند:");
define("_AM_WFD_MINDEX_AUTOEXPIRE","فایل هایی که زمان قرار گرفتن آنها در سایت به طور خودکار تمام شده:");
define("_AM_WFD_MINDEX_OFFLINEDOWN","فایل های آف لاین:");
define("_AM_WFD_MINDEX_ID","شماره شناسه (ID)");
define("_AM_WFD_MINDEX_TITLE","نام فایل");
define("_AM_WFD_MINDEX_POSTER","فرستنده");
define("_AM_WFD_MINDEX_SUBMITTED","تاریخ ارسال");
define("_AM_WFD_MINDEX_ONLINESTATUS","حالت آنلاین");
define("_AM_WFD_MINDEX_PUBLISHED","قرار گرفته در سایت");
define("_AM_WFD_MINDEX_ACTION","عمل");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND","توجه: فایلی که با این گزینه تطبیق کند وجود ندارد.");
define("_AM_WFD_MINDEX_PAGE","<b>صفحه:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT','<ul><li>جزییات صفحه اصلی ماژول WFDownloads.</li><li>شما به آسانی میتوانید عکس لوگو، سرصفحه و پا صفحه را تغییر دهید و آن را طبق نظر خودتان درآورید</li></ul><br /><br />Note: The Logo image choosen will be used throughout WF-Downloads.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES","فایل های ارسال شده");
define("_AM_WFD_SUB_FILESWAITINGINFO","اطلاعات فایل های منتظر برای تایید");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION","فایل های منتظر برای تایید: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE","<b>تایید</b> فایل جدید بدون بررسی صلاحیت فایل.");
define("_AM_WFD_SUB_EDITWAITINGFILE","<b>ویرایش</b> فایل جدید و سپس تایید کردن آن.");
define("_AM_WFD_SUB_DELETEWAITINGFILE","<b>حذف</b> فایل جدید.");
define("_AM_WFD_SUB_NOFILESWAITING","فایلی که با این گزینه تطبیق کند وجود ندارد");
define("_AM_WFD_SUB_NEWFILECREATED","اطلاعات فایل جدید ساخته شد و پایگاه داده با موفقیت به روز شد.");
// Mimetypes
define("_AM_WFD_MIME_ID","شماره شناسه (ID)");
define("_AM_WFD_MIME_EXT","پسوند");
define("_AM_WFD_MIME_NAME","نوع برنامه");
define("_AM_WFD_MIME_ADMIN","مدیر");
define("_AM_WFD_MIME_USER","کاربر");
// Mimetype Form
define("_AM_WFD_MIME_CREATEF","ساختن Mimetype");
define("_AM_WFD_MIME_MODIFYF","اصلاح Mimetype");
define("_AM_WFD_MIME_EXTF","پسوند فایل:");
define("_AM_WFD_MIME_NAMEF","نوع/نام برنامه:<div style='padding-top: 8px;'><span style='font-weight: normal;'>برنامه ای را که با این پسوند کار میکند بنویسید.</span></div>");
define("_AM_WFD_MIME_TYPEF","Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Enter each mimetype associated with the file extension. Each mimetype must be seperated with a space.</span></div>");
define("_AM_WFD_MIME_ADMINF","Mimetype مجاز برای مدیر");
define("_AM_WFD_MIME_ADMINFINFO","<b>Mimetypes که برای بارگذاری توسط مدیر مجاز هستند:</b>");
define("_AM_WFD_MIME_USERF","Mimetype مجاز برای کاربر");
define("_AM_WFD_MIME_USERFINFO","<b>Mimetypes که برای بارگذاری توسط کاربر مجاز هستند:</b>");
define("_AM_WFD_MIME_NOMIMEINFO","هیچ mimetype انتخاب نشده است.");
define("_AM_WFD_MIME_FINDMIMETYPE","جستجو برای یافتن mimetype های جدید:");
define("_AM_WFD_MIME_EXTFIND","جستجو برای پسوند فایل:<div style='padding-top: 8px;'><span style='font-weight: normal;'>پسوند فایلی را که میخواهید جستجو کنید وارد کنید.</span></div>");
define("_AM_WFD_MIME_INFOTEXT","<ul><li>mimetype های جدید را به آسانی میتوان دراین صفحه ساخت، ویرایش کرد یا حذف نمود.</li>
	<li>جستجو برای یافتن mimetype های جدید خارج از این وب سایت.</li>
	<li>دیدن mimetype های مجاز در بارگذاری توسط مدیر و کاربر.</li>
	<li>تغییر وضعیت mimetype ها برای بارگذاری.</li></ul>
	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE","ساختن");
define("_AM_WFD_MIME_CLEAR","پاک کردن");
define("_AM_WFD_MIME_CANCEL","انصراف");
define("_AM_WFD_MIME_MODIFY","اصلاح");
define("_AM_WFD_MIME_DELETE","حذف");
define("_AM_WFD_MIME_FINDIT","دریافت پسوند!");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS","Mimetype های انتخاب شده پاک شوند؟");
define("_AM_WFD_MIME_MIMEDELETED","Mimetype %s حذف شد.");
define("_AM_WFD_MIME_CREATED","اطلاعات Mimetype ساخته شد");
define("_AM_WFD_MIME_MODIFIED","اطلاعات Mimetype ویرایش شد");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION","اطلاعات رای ها");
define("_AM_WFD_VOTE_TOTALVOTES","همه رای ها: ");
define("_AM_WFD_VOTE_REGUSERVOTES","رای های کاربران عضو: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES","رای های کاربران مهمان: %s");
define("_AM_WFD_VOTE_USER","کاربر");
define("_AM_WFD_VOTE_IP","آدرس IP");
define("_AM_WFD_VOTE_USERAVG","متوسط ارزش گذاری");
define("_AM_WFD_VOTE_TOTALRATE","کل ارزش");
define("_AM_WFD_VOTE_DATE","تاریخ ارسال رای");
define("_AM_WFD_VOTE_RATING","ارزش");
define("_AM_WFD_VOTE_NOREGVOTES","هیچ رایی از کاربران عضو وجود ندارد");
define("_AM_WFD_VOTE_NOUNREGVOTES","هیچ رایی از کاربران غیر عضو وجود ندارد");
define("_AM_WFD_VOTE_VOTEDELETED","اطلاعات رای حذف شد.");
define("_AM_WFD_VOTE_ID","شماره شناسه (ID)");
define("_AM_WFD_VOTE_FILETITLE","عنوان فایل");
define("_AM_WFD_VOTE_DISPLAYVOTES","اطلاعات رای ها");
define("_AM_WFD_VOTE_NOVOTES","هیچ رایی از کاربران عضو برای نشان دادن وجود ندارد");
define("_AM_WFD_VOTE_DELETE","هیچ رایی از کاربران عضو برای نشان دادن وجود ندارد");
define("_AM_WFD_VOTE_DELETEDSC","<b>حذف کردن</b> اطلاعات رای های انتخاب شده از پایگاه داده.");

// Modifications
/*
define("_AM_WFD_MOD_TOTMODREQUESTS","همه تقاضا ها برای اصلاح: ");
define("_AM_WFD_MOD_MODREQUESTS","فایل های ارسال شده");
define("_AM_WFD_MOD_MODREQUESTSINFO","Modified Files Information");
define("_AM_WFD_MOD_MODID","ID");
define("_AM_WFD_MOD_MODTITLE","نام");
define("_AM_WFD_MOD_MODPOSTER","فرستنده اصلی: ");
define("_AM_WFD_MOD_DATE","ارسال شده");
define("_AM_WFD_MOD_NOMODREQUEST","There are no requests that match this critera");
define("_AM_WFD_MOD_MODIFYSUBMIT","ارسال کننده");
define("_AM_WFD_MOD_ORIGINAL","اطلاعات اصلی فایل");
define("_AM_WFD_MOD_REQDELETED","تقاضای اصلاح فایل از پایگاه داده پاک شد");
define("_AM_WFD_MOD_REQUPDATED","فایل انتخاب شده اصلاح شد و پایگاه داده به روز شد");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS","کل درخواستهای اصلاح فایل: ");
define("_AM_WFD_MOD_MODREQUESTS","فایل های اصلاح شده");
define("_AM_WFD_MOD_MODREQUESTSINFO","اطلاعات فایل های اصلاح شده");
define("_AM_WFD_MOD_MODID","شماره شناسه (ID)");
define("_AM_WFD_MOD_MODTITLE","نام");
define("_AM_WFD_MOD_MODPOSTER","فرستنده اصلی: ");
define("_AM_WFD_MOD_DATE","تاریخ ارسال");
define("_AM_WFD_MOD_NOMODREQUEST","هیچ درخواستی که با این گزینه تطبیق کند وجود ندارد.");
define("_AM_WFD_MOD_TITLE","نام فایل: ");
define("_AM_WFD_MOD_LID","شماره شناسه (ID) فایل: ");
define("_AM_WFD_MOD_CID","شاخه: ");
define("_AM_WFD_MOD_URL","آدرس فایل: ");
define("_AM_WFD_MOD_MIRROR","آدرس همسان فایل: ");
define("_AM_WFD_MOD_SIZE","حجم فایل: ");
define("_AM_WFD_MOD_PUBLISHER","سازنده:");
define("_AM_WFD_MOD_LICENSE","مجوز نرم افزار: ");
define("_AM_WFD_MOD_FEATURES","ویژگی های کلیدی: ");
define("_AM_WFD_MOD_FORUMID","انجمن: ");
define("_AM_WFD_MOD_LIMITATIONS","محدودیت های نرم افزار: ");
define("_AM_WFD_MOD_DHISTORY","تاریخچه فایل: ");
define("_AM_WFD_MOD_SCREENSHOT","تصور نمایه: ");
define("_AM_WFD_MOD_HOMEPAGE","وب سایت فایل: ");
define("_AM_WFD_MOD_HOMEPAGETITLE","عنوان وب سایت: ");
define("_AM_WFD_MOD_VERSION","نسخه: ");
define("_AM_WFD_MOD_SHOTIMAGE","تصور نمایه: ");
define("_AM_WFD_MOD_FILESIZE","حجم فایل: ");
define("_AM_WFD_MOD_PLATFORM","نرم افزار و بستر مورد نیاز: ");
define("_AM_WFD_MOD_PRICE","قیمت: ");
define("_AM_WFD_MOD_LICENCE","مجوز نرم افزار: ");
define("_AM_WFD_MOD_DESCRIPTION","شرح: ");
define("_AM_WFD_MOD_REQUIREMENTS","نیازمندی ها: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER","ارسال کننده: ");
define("_AM_WFD_MOD_MODIFYSUBMIT","ارسال کننده");
define("_AM_WFD_MOD_PROPOSED","جزییات پیشنهادی فایل");
define("_AM_WFD_MOD_ORIGINAL","جزییات اصلی فایل");
define("_AM_WFD_MOD_REQDELETED","تقاضای اصلاح فایل از پایگاه داده حذف شد");
define("_AM_WFD_MOD_REQUPDATED","فایل انتخاب شده اصلاح شد و پایگاه داده به روز شد");
define('_AM_WFD_MOD_VIEW','دیدن');
define("_AM_WFD_MOD_FILENAME","نام فایل در سرور: ");
define("_AM_WFD_MOD_FILETYPE","نوع فایل در سرور: ");
define("_AM_WFD_MOD_STATUS","حالت: ");
define("_AM_WFD_MOD_RATING","امتیاز: ");
define("_AM_WFD_MOD_HITS","تعداد دریافت: ");
define("_AM_WFD_MOD_VOTES","رای ها: ");
define("_AM_WFD_MOD_COMMENTS","نظرها: ");
define("_AM_WFD_MOD_PUBLISHED","در سایت قرار گرفته در تاریخ: ");
define("_AM_WFD_MOD_EXPIRED","منقضی شده در: ");
define("_AM_WFD_MOD_UPDATED","به روز شده در: ");
define("_AM_WFD_MOD_OFFLINE","آف لاین: ");
define("_AM_WFD_MOD_REQUESTDATE","تاریخ درخواست: ");
define("_AM_WFD_MOD_IPADDRESS","آدرس IP: ");
define("_AM_WFD_MOD_NOTIFYPUB","آگهی: ");
define("_AM_WFD_MOD_PAYPALEMAIL","ایمیل PayPal: ");
define("_AM_WFD_MOD_SUMMARY","خلاصه: ");

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC","تایید نقد: ");
define("_AM_WFD_REV_ID","شماره شناسه (ID)");
define("_AM_WFD_REV_TITLE","عنوان");
define("_AM_WFD_REV_REVIEWTITLE","عنوان نقد");
define("_AM_WFD_REV_POSTER","ارسال کننده");
define("_AM_WFD_REV_SUBMITDATE","تاریخ ارسال");
define("_AM_WFD_REV_FTITLE","عنوان نقد: ");
define("_AM_WFD_REV_FRATING","ارزش نقد: ");
define("_AM_WFD_REV_FDESCRIPTION","شرح نقد: ");
define("_AM_WFD_REV_FAPPROVE","تاید نقد: ");
define("_AM_WFD_REV_ACTION","عمل");
define("_AM_WFD_REV_NOWAITINGREVIEWS","هیچ نقدی منتظر برای تایید یافت نشد");
define("_AM_WFD_REVIEW_APPROVETHIS","تایید نقد");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS","هیچ نقد قرار گرفته در سایت یافت نشد");
define("_AM_WFD_REV_REVIEW_UPDATED","نقد انتخاب شده اصلاح گردید و پایگاه داده با موفقیت به روز شد");
define("_AM_WFD_REV_REVIEW_TOTAL","کل نقدها:");
define("_AM_WFD_REV_REVIEW_WAITING","نقدهای منتظر برای تایید");
define("_AM_WFD_REV_REVIEW_PUBLISHED","نقدهای قرار گرفته در سایت");


//File management
define("_AM_WFD_FILE_SUBMITTERID","شماره شناسه ارسال کننده فایل: <br /><br />اگر میخواهید ارسال کننده فایل عوض نشود به این عدد دست نزنید، با عوض کردن این عدد میتوانید شناسه ارسال کننده فایل را عوض کنید");
define("_AM_WFD_FILE_ID","شماره شناسه (ID) فایل: ");
define("_AM_WFD_FILE_IP","آدرس (IP) ارسال کننده فایل: ");
define("_AM_WFD_FILE_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>پسوند های مجاز برای مدیر</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE","اصلاح اطلاعات فایل");
define("_AM_WFD_FILE_CREATENEWFILE","ساختن فایل جدید");
define("_AM_WFD_FILE_TITLE","نام فایل: ");
define("_AM_WFD_FILE_DLURL","آدرس لینک فایل: ");
define("_AM_WFD_FILE_FILENAME","محل قرار گیری فایل در سرور:<br /><br /><span style='font-weight: normal;'>توجه: اگر میخواهید از فایلی که قبلا روی سرور آپلود کرده اید به عنوان فایل دانلودی استفاده کنید،باید نوع فایل را نیز در قسمت پایین به درستی وارد کنید</span> ");
define("_AM_WFD_FILE_FILETYPE","نوع فایل: ");
define("_AM_WFD_FILE_MIRRORURL","همسان فایل: ");
define("_AM_WFD_FILE_SUMMARY","خلاصه ای از فایل: ");
define("_AM_WFD_FILE_DESCRIPTION","شرح فایل: ");
define("_AM_WFD_FILE_SUMMARY","خلاصه ای از فایل: ");
define("_AM_WFD_FILE_DUPLOAD"," بارگذاری فایل:");
define("_AM_WFD_FILE_CATEGORY","انتخاب شاخه: ");
define("_AM_WFD_FILE_HOMEPAGETITLE","نام وب سایت: ");
define("_AM_WFD_FILE_HOMEPAGE","آدرس وب سایت: ");
define("_AM_WFD_FILE_SIZE","حجم فایل: ");
define("_AM_WFD_FILE_VERSION","نسخه فایل: ");
define("_AM_WFD_FILE_PUBLISHER","سازنده فایل: ");
define("_AM_WFD_FILE_PLATFORM","نرم افزار و بستر مورد نیاز: ");
define("_AM_WFD_FILE_LICENCE","مجوز نرم افزار: ");
define("_AM_WFD_FILE_LIMITATIONS","محدودیت های نرم افزار: ");
define("_AM_WFD_FILE_PRICE","قیمت: ");
define("_AM_WFD_FILE_KEYFEATURES","ویژگی های کلیدی:<br /><br /><span style='font-weight: normal;'>هرکدام از ویژگی ها را با | از هم جدا کنید.</span>");
define("_AM_WFD_FILE_REQUIREMENTS","نیازمندی های سیستم:<br /><br /><span style='font-weight: normal;'>هرکدام از نیازمندی ها را با | از هم جدا کنید.</span>");
define("_AM_WFD_FILE_HISTORY","تاریخچه ویرایش فایل:<br /><br /><span style='font-weight: normal;'>برای اضافه کردن یک تاریخچه جدید از فایل و فقط وقتی از آن استفاده کنید که تاریخچه قبلی فایل نیاز به ویرایش داشته باشد.</span>");
define("_AM_WFD_FILE_HISTORYD","اضافه کردن تاریخچه جدید برای فایل:<br /><br /><span style='font-weight: normal;'>شماره نسخه و تاریخ به صورت خودکار اضافه می شوند</span>");
define("_AM_WFD_FILE_HISTORYVERS","<b>نسخه: </b>");
define("_AM_WFD_FILE_HISTORDATE"," <b>تاریخ:</b> ");
define("_AM_WFD_FILE_FILESSTATUS"," فایل آفلاین شود؟<br /><br /><span style='font-weight: normal;'>فایل برای تمام کاربران سایت غیر قابل دیدن خواهد شد.</span>");
define("_AM_WFD_FILE_SETASUPDATED","  فایل در صفحه اصلی با نشان به روز شدگی نمایش داده شود؟<br /><br /><span style='font-weight: normal;'>فایل دارای نشان به روز خواهد شد.</span>");
define("_AM_WFD_FILE_SHOTIMAGE","انتخاب تصویر نمایه: ");
define("_AM_WFD_FILE_DISCUSSINFORUM","انتخاب انجمن برای بحث راجع به این فایل؟");
define("_AM_WFD_FILE_PUBLISHDATE","تاریخ قرار گرفتن فایل:");
define("_AM_WFD_FILE_EXPIREDATE","تاریخ انقضای فایل:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE","<br /><br />حذف تاریخ قرار گرفتن در سایت:");
define("_AM_WFD_FILE_CLEAREXPIREDATE","<br /><br />حذف تاریخ منقضی شدن:");
define("_AM_WFD_FILE_PUBLISHDATESET","گذاشتن تاریخ قرار گرفتن در سایت: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH"," گذاشتن تاریخ/ساعت قرار گرفتن در سایت");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE"," گذاشتن تاریخ/ساعت منقضی شدن");
define("_AM_WFD_FILE_SETPUBLISHDATE","<b>گذاشتن تاریخ قرار گرفتن در سایت: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE","<b>گذاشتن تاریخ قرار گرفتن در سایت جدید: </b><br />تاریخ قرار گرفتن در سایت:");
define("_AM_WFD_FILE_SETPUBDATESETS","<b>گذاشتن تاریخ قرار گرفتن در سایت: </b><br />قرار گرفته در تاریخ:");
define("_AM_WFD_FILE_EXPIREDATESET"," گذاشتن تاریخ منقضی شدن: ");
define("_AM_WFD_FILE_SETEXPIREDATE","<b>گذاشتن تاریخ منقضی شدن: </b>");
define("_AM_WFD_FILE_MUSTBEVALID","تصویر نمایه باید یک عکس معتبر و در شاخه %s باشد (مثال: shot.gif).اگر فایل تصویری ندارید این قسمت را خالی بگذارید.");
define("_AM_WFD_FILE_EDITAPPROVE","تایید فایل:");
define("_AM_WFD_FILE_NEWFILEUPLOAD","فایل جدید ساخته شد و پایگاه داده با موفقیت به روز شد");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE","فایل انتخاب شده اصلاح شد و پایگاه داده به روز شد");
define("_AM_WFD_FILE_REALLYDELETEDTHIS","واقعا تصمیم دارید این مورد حذف شود؟");
define("_AM_WFD_FILE_FILEWASDELETED","فایل %s با موفقیت از پایگاه داده حذف شد");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE"," از نام فایل بارگذاری شده برای نام فایل استفاده شود؟");
define("_AM_WFD_FILE_FILEAPPROVED","فایل تایید شد و پایگاه داده با موفقیت به روز شد");
define("_AM_WFD_FILE_CREATENEWSSTORY","<b>ساختن خبر از اطلاعات دانلود</b>");
define("_AM_WFD_FILE_SUBMITNEWS","ارسال فایل به عنوان خبر؟");
define("_AM_WFD_FILE_NEWSCATEGORY","شاخه ای را که خبر ها در آن ساخته شوند انتخاب کنید:");
define("_AM_WFD_FILE_NEWSTITLE","عنوان خبر:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>اگر میخواهید از نام فایل برای عنوان خبر استفاده شود این قسمت را خالی بگذارید</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT","خراب شده: ");
define("_AM_WFD_BROKEN_FILE","گزارش فایل های خراب");
define("_AM_WFD_BROKEN_FILEIGNORED","گزارش فایل خراب نادیده گرفته شد و از پایگاه داده  با موفقیت حذف گردید ");
define("_AM_WFD_BROKEN_NOWACK","حالت قدر دانی عوض شد و پایگاه داده به روز شد");
define("_AM_WFD_BROKEN_NOWCON","خرابی فایل تایید شد و پایگاه داده به روز شد");
define("_AM_WFD_BROKEN_REPORTINFO","اطلاعات گزارش خرابی فایل");
define("_AM_WFD_BROKEN_REPORTSNO","گزارش خرابی فایل منتظر برای تایید:");
define("_AM_WFD_BROKEN_IGNOREDESC","<b>گزارش را نادیده بگیر</b> و فقط گزارش خرابی فایل را حذف کن");
define("_AM_WFD_BROKEN_IGNORE_ALT","نادیده گرفتن گزارش خرابی فایل و حذف آن");
define("_AM_WFD_BROKEN_DELETEDESC","<b>فایل را حذف کن</b> و گزارش خرابی فایل را نیز حذف کن");
define("_AM_WFD_BROKEN_DELETE_ALT","حذف فایل و گزارش خرابی فایل");
define("_AM_WFD_BROKEN_EDITDESC","<b>فایل را ویرایش کن</b> تا مشکل بر طرف شود");
define("_AM_WFD_BROKEN_EDIT_ALT","ویرایش فایل برای بر طرف کردن مشکل احتمالی");
define("_AM_WFD_BROKEN_ACKDESC","<b>قدر دانی از گزارش خرابی فایل</b> گذاشتن حالت قدردانی  برای گزارش فایل خراب.");
define("_AM_WFD_BROKEN_ACK_ALT","تشکر از گزارش صحیح خرابی فایل");
define("_AM_WFD_BROKEN_CONFIRMDESC","<b>تاید خرابی فایل</b> گذاشتن حالت تایید برای گزارش فایل خراب.");
define("_AM_WFD_BROKEN_CONFIRM_ALT","تایید گزارش خرابی فایل");


define("_AM_WFD_BROKEN_ID","شماره شناسه (ID)");
define("_AM_WFD_BROKEN_TITLE","عنوان");
define("_AM_WFD_BROKEN_REPORTER","گزارش دهنده");
define("_AM_WFD_BROKEN_FILESUBMITTER","ارسال کننده فایل");
define("_AM_WFD_BROKEN_DATESUBMITTED","تاریخ ارسال");
define("_AM_WFD_BROKEN_ACTION","عمل");
define("_AM_WFD_BROKEN_NOFILEMATCH","هیچ گزارش خرابی فایلی که با این گزینه تطبیق کند وجود ندارد");
define("_AM_WFD_BROKENFILEDELETED","شرح فایل حذف از پایگاه داده حذف گردید و گزارش خرابی فایل حذف شد.");
define("_AM_WFD_BROKEN_DOWNLOAD_DONT_EXISTS","این فایل دیگر وجود ندارد");


/*
* About defines
*/
define("_AM_WFD_BY","توسط");

//block defines
define("_AM_WFD_BADMIN","مدیریت بلاک ها");
define("_AM_WFD_BLKDESC","شرح");
define("_AM_WFD_TITLE","عنوان");
define("_AM_WFD_SIDE","جهت");
define("_AM_WFD_WEIGHT","وزن");
define("_AM_WFD_VISIBLE","قابل دیدن");
define("_AM_WFD_ACTION","عمل");
define("_AM_WFD_SBLEFT","چپ");
define("_AM_WFD_SBRIGHT","راست");
define("_AM_WFD_CBLEFT","وسط چپ");
define("_AM_WFD_CBRIGHT","وسط راست");
define("_AM_WFD_CBCENTER","وسط وسط");
define("_AM_WFD_ACTIVERIGHTS","فعال شود");
define("_AM_WFD_ACCESSRIGHTS","دسترسی ها");

//image admin icon
define("_AM_WFD_ICO_EDIT","این آیتم را ویرایش کن");
define("_AM_WFD_ICO_DELETE","این آیتم را حذف کن");
define("_AM_WFD_ICO_ONLINE","آنلاین");
define("_AM_WFD_ICO_OFFLINE","آفلاین");
define("_AM_WFD_ICO_APPROVED","تایید شده");
define("_AM_WFD_ICO_NOTAPPROVED","تاید نشده");

define("_AM_WFD_ICO_LINK","لینک مرتبط");
define("_AM_WFD_ICO_URL","اضافه کردن لینک مرتبط");
define("_AM_WFD_ICO_ADD","اضافه کردن");
define("_AM_WFD_ICO_APPROVE","تایید");
define("_AM_WFD_ICO_STATS","آمار");

define("_AM_WFD_ICO_IGNORE","نادیده بگیر");
define("_AM_WFD_ICO_ACK","قدر دانی از گزارش خرابی فایل");
define("_AM_WFD_ICO_REPORT","از گزارش خرابی فایل تشکر میکنید؟");
define("_AM_WFD_ICO_CONFIRM","تایید گزارش خرابی فایل");
define("_AM_WFD_ICO_CONBROKEN","خرابی فایل را تایید میکنید؟");





define("_AM_WFD_DB_IMPORT","وارد کردن داده");
define("_AM_WFD_DB_CURRENTVER","نسخه فعلی: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER","نسخه دیتابیس %s");
define("_AM_WFD_DB_MSG_ADD_DATA","داده  %s به جدول اضافه شدند ");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR","خطا در اضافه کردن داده ها به جدول %s");
define("_AM_WFD_DB_MSG_CHGFIELD","فیلد %s در جدول %s تغییر کرد");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR","خطا در عوض کردن فیلد %s در جدول %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE","جدول %s ساخته شد");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR","خطا در اضافه کردن جدول %s");
define("_AM_WFD_DB_MSG_NEWFIELD","فیلد %s با موفقیت اضافه شد");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR","خطا در اضافه کردن فیاد %s");
define("_AM_WFD_DB_NEEDUPDATE","پایگاه داده شما به روز نیست. لطفا جدول های موجود در پایگاه داده را به روز کنید!<br><b>توجه : اگر ماژول اسمارت سکشن را نصب کرده اید حتما قبل از اجرا کردن اسکریپت برای ارتقای این ماژول از پایگاه داده بک آپ بگیرید</b><br>");
define("_AM_WFD_DB_NOUPDATE","پایگاه داده شما به روز است. به روز رسانی نیازی نیست.");
define("_AM_WFD_DB_UPDATE_DB","به روز کردن پایگاه داده");
define("_AM_WFD_DB_UPDATE_ERR","خطا در ارتقا به نسخه %s");
define("_AM_WFD_DB_UPDATE_NOW","آپدیت کن!");
define("_AM_WFD_DB_UPDATE_OK","با موفقیت به نسخه %s ارتقا یافت");
define("_AM_WFD_DB_UPDATE_TO","ارتقا به نسخه %s");

define("_AM_WFD_GOMOD","برو به ماژول");
define("_AM_WFD_UPDATE_MODULE","به روز کردن ماژول");
define("_AM_WFD_MDOWNLOADS","مدیریت فایل ها");
define("_AM_WFD_DB_MSG_UPDATE_TABLE","عوض کردن مقدار فیلد در %s ");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR","خطا در عوض کردن مقدار فیلد در %s");

// Mirrors
// waiting mirrors
define("_AM_WFD_AMIRRORS","مدیریت همسان ها");
define("_AM_WFD_AMIRRORS_WAITING","همسان های منتظر برای تایید:");
define("_AM_WFD_AMIRRORS_INFO","اطلاعات مدیریت همسان ها");
define("_AM_WFD_AMIRRORS_APPROVE","<b>تایید</b> همسان جدید بدون بررسی صلاحیت.");
define("_AM_WFD_AMIRRORS_EDIT","<b>ویرایش</b> همسان جدید و سپس تایید آن.");
define("_AM_WFD_AMIRRORS_DELETE","<b>حذف</b> اطلاعات همسان جدید.");

//mirrors defines
define("_AM_WFD_MIRROR_MIRRORTITLE","هاست همسان");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS","هیچ همسانی که بر روی سایت قرار گرفته باشد پیدا نشد");
define("_AM_WFD_MIRROR_MIRROR_TOTAL","کل همسان ها:");
define("_AM_WFD_MIRROR_MIRROR_WAITING","همسان های منتظر");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED","همسان های قرار گرفته در سایت");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC","همسان های تایید شده: ");
define("_AM_WFD_MIRROR_ID","شماره شناسه (ID)");
define("_AM_WFD_MIRROR_TITLE","عنوان");
define("_AM_WFD_MIRROR_MUSTBEVALID","لوگوی صفحه اصلی باید یک تصویر مجاز  در شاخه %s باشد (مثال: shot.gif). اگر تصویری وجود ندارد آن را خالی بگذارید.");
define("_AM_WFD_MIRROR_POSTER","ارسال کننده");
define("_AM_WFD_MIRROR_SUBMITDATE","تاریخ ارسال");
define("_AM_WFD_MIRROR_FHOMEURLTITLE","عنوان وب سایت: ");
define("_AM_WFD_MIRROR_FHOMEURL","آدرس وب سایت: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE","بارگذاری لوگوی سایت:<br /><br />یک لوگوی کوچک که معرف وب سایت شما خواهد بود.");
define("_AM_WFD_MIRROR_MIRRORIMAGE","لوگوی سایت:");
define("_AM_WFD_MIRROR_CONTINENT","قاره:");
define("_AM_WFD_MIRROR_LOCATION","مکان:<br /><br />مثال: لندن, انگلستان");
define("_AM_WFD_MIRROR_DOWNURL","آدرس فایل:<br /><br />آدرس فایل را وارد کنید.");
define("_AM_WFD_MIRROR_FAPPROVE","تایید همسان: ");
define("_AM_WFD_MIRROR_ACTION","عمل");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS","هیچ همسان منتظر برای تایید یافت نشد");
define("_AM_WFD_MIRROR_MIRROR_UPDATED","همسان انتخاب شده اصلاح شد و پایگاه داده به روز شد");
define("_AM_WFD_MIRROR_APPROVETHIS","تایید همسان");

//continents (used in mirrors page)
define("_AM_WFD_CONT1","آفریقا");
define("_AM_WFD_CONT2","قطب جنوب");
define("_AM_WFD_CONT3","آسیا");
define("_AM_WFD_CONT4","اروپا");
define("_AM_WFD_CONT5","آمریکای شمالی");
define("_AM_WFD_CONT6","آمریکای جنوبی");
define("_AM_WFD_CONT7","اقیانوسیه");

define("_AM_WFD_HELP","کمک");

?>