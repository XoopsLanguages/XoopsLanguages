<?php
// $Id: admin.php,v 4.04 2008/06/05 15:35:33 wishcraft Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_XFORUM_FORUMCONF","تنظیمات انجمن");
define("_AM_XFORUM_ADDAFORUM","اضافه کردن یکانجمن");
define("_AM_XFORUM_SYNCFORUM","همگام سازی انجمن");
define("_AM_XFORUM_REORDERFORUM","مرتب سازی دوباره");
define("_AM_XFORUM_FORUM_MANAGER","انجمن‌ها");
define("_AM_XFORUM_PRUNE_TITLE","هرس کردن");
define("_AM_XFORUM_CATADMIN","شاخه‌ها");
define("_AM_XFORUM_GENERALSET","تنظیمات ماژول" );
define("_AM_XFORUM_MODULEADMIN","مدیریت ماژول:");
define("_AM_XFORUM_HELP","کمک");
define("_AM_XFORUM_ABOUT","درباره");
define("_AM_XFORUM_BOARDSUMMARY","آمار Board");
define("_AM_XFORUM_PENDING_POSTS_FOR_AUTH","تایید پست‌های معلق");
define("_AM_XFORUM_POSTID","ID پست");
define("_AM_XFORUM_POSTDATE","تاریخ پست");
define("_AM_XFORUM_POSTER","فرستنده");
define("_AM_XFORUM_TOPICS","تاپیک‌ها");
define("_AM_XFORUM_SHORTSUMMARY","خلاصه‌ی Board");
define("_AM_XFORUM_TOTALPOSTS","مجموع پست‌ها");
define("_AM_XFORUM_TOTALTOPICS","مجموع تاپیک‌ها");
define("_AM_XFORUM_TOTALVIEWS","مجموع دیده شده‌ها");
define("_AM_XFORUM_BLOCKS","بلاک‌ها");
define("_AM_XFORUM_SUBJECT","عنوان");
define("_AM_XFORUM_APPROVE","تایید  پست");
define("_AM_XFORUM_APPROVETEXT","محتوای این پست");
define("_AM_XFORUM_POSTAPPROVED","این پست تایید شد");
define("_AM_XFORUM_POSTNOTAPPROVED","پست تایید نشد");
define("_AM_XFORUM_POSTSAVED","پست ذخیره شد");
define("_AM_XFORUM_POSTNOTSAVED","پست ذخیره نشد");

define("_AM_XFORUM_TOPICAPPROVED","تاپیک تایید شد");
define("_AM_XFORUM_TOPICNOTAPPROVED","تاپیکتایید نشد");
define("_AM_XFORUM_TOPICID","ID تاپیک");
define("_AM_XFORUM_ORPHAN_TOPICS_FOR_AUTH","تایید نکردن تاپیک‌های ارسال شده");


define('_AM_XFORUM_DEL_ONE','فقط این پیام را پاککن');
define('_AM_XFORUM_POSTSDELETED','پیام انتخاب شده حذف شد');
define('_AM_XFORUM_NOAPPROVEPOST','در حال حاضر هیچ پست منتظر برای تایید موجود نیست.');
define('_AM_XFORUM_SUBJECTC','عنوان:');
define('_AM_XFORUM_MESSAGEICON','شکلکپیام:');
define('_AM_XFORUM_MESSAGEC','پیام:');
define('_AM_XFORUM_CANCELPOST','لغو کردن ارسال');
define('_AM_XFORUM_GOTOMOD','برو به ماژول');

define('_AM_XFORUM_PREFERENCES','تنظیمات ماژول');
define('_AM_XFORUM_POLLMODULE','ماژول Xoops poll');
define('_AM_XFORUM_POLL_OK','آماده برای استفاده');
define('_AM_XFORUM_GDLIB1','GD1 library:');
define('_AM_XFORUM_GDLIB2','GD2 library:');
define('_AM_XFORUM_AUTODETECTED','شناسایی خودکار: ');
define('_AM_XFORUM_AVAILABLE','آماده‌است');
define('_AM_XFORUM_NOTAVAILABLE','<font color="red">آماده نیست</font>');
define('_AM_XFORUM_NOTWRITABLE','<font color="red">قابل دسترسی نیست</font>');
define('_AM_XFORUM_IMAGEMAGICK','ImageMagicK');
define('_AM_XFORUM_IMAGEMAGICK_NOTSET','تنظیم‌نشده');
define('_AM_XFORUM_ATTACHPATH','مسیر برای قرار دادن ضمائم');
define('_AM_XFORUM_THUMBPATH','مسیر برای قرار دادن تصاویر تمبری');
//define('_AM_XFORUM_RSSPATH','مسیر برای RSS feed');
define('_AM_XFORUM_REPORT','پیام‌های گزارش داده شده');
define('_AM_XFORUM_REPORT_PENDING','گزارش‌های معلق');
define('_AM_XFORUM_REPORT_PROCESSED','گزارش‌های پردازش شده');

define('_AM_XFORUM_CREATETHEDIR','بساز');
define('_AM_XFORUM_SETMPERM','گذاشتن دسترسی ها');
define('_AM_XFORUM_DIRCREATED','شاخه ساخته شد');
define('_AM_XFORUM_DIRNOTCREATED','شاخه شاخته نشد');
define('_AM_XFORUM_PERMSET','دسترسی تنظیم شد');
define('_AM_XFORUM_PERMNOTSET','دسترسی تنظیم نشد');

define('_AM_XFORUM_DIGEST','آگهای رسانی خلاصه ها');
define('_AM_XFORUM_DIGEST_PAST','<font color="red"> %d دقیقه پیش گذاشته شده است</font>');
define('_AM_XFORUM_DIGEST_NEXT',' %d دقیقه دیگر فرستاده می شود');
define('_AM_XFORUM_DIGEST_ARCHIVE','خلاصه در آرشیو قرار گرفت');
define('_AM_XFORUM_DIGEST_SENT','خلاصه در حال فرستاده شدن');
define('_AM_XFORUM_DIGEST_FAILED','خلاصه فرستاده نشد');

// admin_forum_manager.php
define("_AM_XFORUM_NAME","نام");
define("_AM_XFORUM_CREATEFORUM","ایجاد انجمن");
define("_AM_XFORUM_EDIT","ویرایش");
define("_AM_XFORUM_CLEAR","پاک کردن گزینه ها");
define("_AM_XFORUM_DELETE","حذف");
define("_AM_XFORUM_ADD","اضافه‌کردن");
define("_AM_XFORUM_MOVE","انتقال");
define("_AM_XFORUM_ORDER","ردیف‌کردن");
define("_AM_XFORUM_TWDAFAP","این قسمت انجمن و تمام پیام‌های زده شده در آن را حذف خواهد کرد.<br><br>هشدار: آیا مطمئنید که این انجمن را می‌خواهید پاککنید؟");
define("_AM_XFORUM_FORUMREMOVED","انجمن‌ پاکشد.");
define("_AM_XFORUM_CREATENEWFORUM","ایجاد یکانجمن جدید");
define("_AM_XFORUM_EDITTHISFORUM","ویرایش انجمن:");
define("_AM_XFORUM_SET_FORUMORDER","تنظیم محل قرارگیری انجمن:");
define("_AM_XFORUM_ALLOWPOLLS","اجازه‌دادن نظرسنجی‌ها:");
define("_AM_XFORUM_ATTACHMENT_SIZE" ,"حداکثر سایز ممکن بر حسب KB:");
define("_AM_XFORUM_ALLOWED_EXTENSIONS","پسوند های مجاز:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' یعنی بدون محدودیت. برای جدا کردن از نشان '|' استفاده کنید.</span>");
//define("_AM_XFORUM_ALLOW_ATTACHMENTS","اجازه دادن پیوست:");
define("_AM_XFORUM_ALLOWHTML","اجازه دادن استفاده از HTML:");
define("_AM_XFORUM_YES","بله");
define("_AM_XFORUM_NO","خیر");
define("_AM_XFORUM_ALLOWSIGNATURES","اجازه دادن استفاده از امضا:");
define("_AM_XFORUM_HOTTOPICTHRESHOLD","تعداد عنوان های مهم:");
//define("_AM_XFORUM_POSTPERPAGE","تعداد پست‌ها در صفحه<span style='font-size: xx-small; font-weight: normal; display: block;'>(این گزینه تعداد پستها را<br> در عنوان نشان می دهد که<br> در هر صفحه اتز عنوان وجود دارد)</span>");
//define("_AM_XFORUM_TOPICPERFORUM","تعداد عنوان ها در انجمن<span style='font-size: xx-small; font-weight: normal; display: block;'>(این گزینه تعداد عنوان ها را در انجمن نشان می دهد<br> که در هر صفحه از انجمن<br> این تعداد عنوان وجود دارد)</span>");
//define("_AM_XFORUM_SHOWNAME","جایگزینی نام کاربری با نام واقعی:");
//define("_AM_XFORUM_SHOWICONSPANEL","نمایش پنل شکلک‌ها:");
//define("_AM_XFORUM_SHOWSMILIESPANEL","نمایش پنل Smiley ها:");
define("_AM_XFORUM_MODERATOR_REMOVE","حذف ناظر های کنونی");
define("_AM_XFORUM_MODERATOR_ADD","اظافه کردن ناظر");
define("_AM_XFORUM_ALLOW_SUBJECT_PREFIX","اجازه استفاده از پیشوند برای عنوان ها در این انجمن");
define("_AM_XFORUM_ALLOW_SUBJECT_PREFIX_DESC","این به کاربران اجازه می دهد پیوندی مناسب با موضوع عنوان به عنوان های این انجمن اضافه کنند");


// admin_cat_manager.php

define("_AM_XFORUM_SETCATEGORYORDER","تنظیم محل شاخه:");
define("_AM_XFORUM_ACTIVE","فعال");
define("_AM_XFORUM_INACTIVE","غیرفعال");
define("_AM_XFORUM_STATE","وضعیت:");
define("_AM_XFORUM_CATEGORYDESC","توضیحات شاخه:");
define("_AM_XFORUM_SHOWDESC","نمایش دادن توضیحات؟");
define("_AM_XFORUM_IMAGE","تصویر:");
//define("_AM_XFORUM_SPONSORIMAGE","تصویر پشتیبان:");
define("_AM_XFORUM_SPONSORLINK","لینک پشتیبان:");
define("_AM_XFORUM_DELCAT","حذف شاخه");
define("_AM_XFORUM_WAYSYWTDTTAL","این قسمت انجمن‌های زیر شاخه را پاکنخواهد کرد.<br><br>WARNINGبرای پاککردن آن از ویرایش انجمن‌اقدام کنید. آیا مایلید شاخه‌را پاککنید؟");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_XFORUM_FORUMNAME","نام انجمن:");
define("_AM_XFORUM_FORUMDESCRIPTION","توضیحات انجمن:");
define("_AM_XFORUM_MODERATOR","ناظرین:");
define("_AM_XFORUM_REMOVE","حذف");
define("_AM_XFORUM_CATEGORY","شاخه:");
define("_AM_XFORUM_DATABASEERROR","خطای دیتابیس");
define("_AM_XFORUM_CATEGORYUPDATED","شاخه به روز شد.");
define("_AM_XFORUM_EDITCATEGORY","ویرایش شاخه:");
define("_AM_XFORUM_CATEGORYTITLE","عنوان شاخه:");
define("_AM_XFORUM_CATEGORYCREATED","شاخه ایجاد شد");
define("_AM_XFORUM_CREATENEWCATEGORY","ایجاد یک شاخه‌ی جدید");
define("_AM_XFORUM_FORUMCREATED","انجمن ایجاد شد");
define("_AM_XFORUM_ACCESSLEVEL","سطح دسترسی کامل:");
define("_AM_XFORUM_CATEGORY1","شاخه");
define("_AM_XFORUM_FORUMUPDATE","تنظیمات انجمن به روز شد.");
define("_AM_XFORUM_FORUM_ERROR","خطا: تنظیمات انجمن به روز نشد.");
define("_AM_XFORUM_CLICKBELOWSYNC","کلیک کردن زیر باعث می‌شود تاپیک‌ها و صفحه‌های فروم شما با مقداردهی صحیحی از دیتابیس تنظیم شوند. از این بخش هنگامی استفاده کنید که مطلع شده‌اید بی‌ نظمی در تعداد تاپیک‌ها و صفحهات وجود دارد. ");
define("_AM_XFORUM_SYNCHING","همزمان کردن صفه اصلی انجمن و انجمن ها (این کار ممکن است مدتی طول بکشد)");
define("_AM_XFORUM_CATEGORYDELETED","شاخه پاک شد.");
define("_AM_XFORUM_MOVE2CAT","بردن به شاخه‌:");
define("_AM_XFORUM_MAKE_SUBFORUM_OF","ایجاد زیرانجمن:");
define("_AM_XFORUM_MSG_FORUM_MOVED","انجمن منتقل شد.");
define("_AM_XFORUM_MSG_ERR_FORUM_MOVED","ناتوانی در بردن انجمن.");
define("_AM_XFORUM_SELECT","< انتخاب >");
define("_AM_XFORUM_MOVETHISFORUM","این انجمن را منتقل کن");
define("_AM_XFORUM_MERGE","ادغام");
define("_AM_XFORUM_MERGETHISFORUM","این انجمن را ادغام کن");
define("_AM_XFORUM_MERGETO_FORUM","این انجمن را ادغام کن به:");
define("_AM_XFORUM_MSG_FORUM_MERGED","انجمن ادغام شد!");
define("_AM_XFORUM_MSG_ERR_FORUM_MERGED","خطا در ادغام انجمن!");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_XFORUM_REORDERID","ID");
define("_AM_XFORUM_REORDERTITLE","عنوان");
define("_AM_XFORUM_REORDERWEIGHT","محل");
define("_AM_XFORUM_SETFORUMORDER","تغییر محل قرار گیری انجمن در شاخه");
define("_AM_XFORUM_BOARDREORDER","مکان انجمن تغییر داده شد");

// admin_permission.php
define("_AM_XFORUM_PERMISSIONS_TO_THIS_FORUM","دسترسی تاپیکها برای این انجمن");
define("_AM_XFORUM_CAT_ACCESS","می‌توانید به شاخه دسترسی داشته باشید");
define("_AM_XFORUM_CAN_ACCESS","می‌توانید به انجمن دسترسی داشته باشید");
define("_AM_XFORUM_CAN_VIEW","می‌توانید مطالب را بخوانید");
define("_AM_XFORUM_CAN_POST","می‌توانید عنوان جدید باز کنید");
define("_AM_XFORUM_CAN_REPLY","می‌توانید به عنوان ها پاسخ دهید");
define("_AM_XFORUM_CAN_EDIT","می‌توانید پیام‌ها ی خودتان را ویرایش کنید");
define("_AM_XFORUM_CAN_DELETE","می‌توانید پیام‌ها ی خودتان را حذف کنید");
define("_AM_XFORUM_CAN_ADDPOLL","می‌توانید نظر سنجی اضافه کنید");
define("_AM_XFORUM_CAN_VOTE","می‌توانید در نظر سنجی ها شرکت کنید");
define("_AM_XFORUM_CAN_ATTACH","می‌توانید فایل‌ها را به پیام خود پیوست کنید");
define("_AM_XFORUM_CAN_NOAPPROVE","می‌توانید پیام بدون نیاز به تایید بزنید");
define("_AM_XFORUM_ACTION","عمل");

define("_AM_XFORUM_PERM_TEMPLATE","تمپلیت دسترسی های پیشفرض");
define("_AM_XFORUM_PERM_TEMPLATE_DESC","میتواند به یک انجمن اضافه شود");
define("_AM_XFORUM_PERM_FORUMS","انتخاب انجمن ها");
define("_AM_XFORUM_PERM_TEMPLATE_CREATED","تمپلیت دسترسی ها ساخته شد");
define("_AM_XFORUM_PERM_TEMPLATE_ERROR","خطا در حین ساخته شدن تمپلیت دسترسی ها");
define("_AM_XFORUM_PERM_TEMPLATEAPP","اعمال دسترسی های پیشفرض");
define("_AM_XFORUM_PERM_TEMPLATE_APPLIED","دسترسی های پیشفرض در انجمن ها اعمال شد");
define("_AM_XFORUM_PERM_ACTION","عمل های دسترسی ها");
define("_AM_XFORUM_PERM_SETBYGROUP","اعمال دسترسی برای گروه ها به صورت مستقیم");

// admin_forum_prune.php

define("_AM_XFORUM_PRUNE_RESULTS_TITLE","نتیجه‌ی هرس‌کردن");
define("_AM_XFORUM_PRUNE_RESULTS_TOPICS","تاپیک‌ های هرس شده");
define("_AM_XFORUM_PRUNE_RESULTS_POSTS","پست‌های هرس شده");
define("_AM_XFORUM_PRUNE_RESULTS_FORUMS","انجمن‌های هرس شده");
define("_AM_XFORUM_PRUNE_STORE","به جای حذف کردن آن در این انجمن قرارشان بده:");
define("_AM_XFORUM_PRUNE_ARCHIVE","یک کپی از پست‌ها در آرشیو نگه دار");
define("_AM_XFORUM_PRUNE_FORUMSELERROR","شما فراموش کرده‌اید که انجمنی را برای هرس انتخاب کنید.");

define("_AM_XFORUM_PRUNE_DAYS","پاک کردن تاپیک بدون پاسخ در :");
define("_AM_XFORUM_PRUNE_FORUMS","انجمن‌هایی که هرس می‌شوند:");
define("_AM_XFORUM_PRUNE_STICKY","تاپیک‌های مهم(Sticky) را حفظ کن.");
define("_AM_XFORUM_PRUNE_DIGEST","تاپیک های خلاصه را حفظ کن");
define("_AM_XFORUM_PRUNE_LOCK","تاپیک‌های قفل را حفظ کن");
define("_AM_XFORUM_PRUNE_HOT","تاپیک‌هایی که بیشتر از این پاسخ‌ها را دارند نگه دار");
define("_AM_XFORUM_PRUNE_SUBMIT","تایید");
define("_AM_XFORUM_PRUNE_RESET","تنظیم دوباره");
define("_AM_XFORUM_PRUNE_YES","بله");
define("_AM_XFORUM_PRUNE_NO","نه");
define("_AM_XFORUM_PRUNE_WEEK","یک هفته");
define("_AM_XFORUM_PRUNE_2WEEKS","دو هفته");
define("_AM_XFORUM_PRUNE_MONTH","یک ماه");
define("_AM_XFORUM_PRUNE_2MONTH","دو ماه");
define("_AM_XFORUM_PRUNE_4MONTH","چهار ماه");
define("_AM_XFORUM_PRUNE_YEAR","یک سال");
define("_AM_XFORUM_PRUNE_2YEARS","دو سال");

// About.php constants
define('_AM_XFORUM_AUTHOR_INFO',"اطلاعات نویسنده:");
define('_AM_XFORUM_AUTHOR_NAME',"نویسنده:");
define('_AM_XFORUM_AUTHOR_WEBSITE',"وب‌ سایت‌ نویسنده:");
define('_AM_XFORUM_AUTHOR_EMAIL',"پست الکترونیکی نویسنده:");
define('_AM_XFORUM_AUTHOR_CREDITS',"اعتبارات");
define('_AM_XFORUM_MODULE_INFO',"اطلاعات سازندگان ماژول");
define('_AM_XFORUM_MODULE_STATUS',"وضعیت");
define('_AM_XFORUM_MODULE_DEMO',"سایت نمایشی");
define('_AM_XFORUM_MODULE_SUPPORT',"سایت پشتیبان رسمی");
define('_AM_XFORUM_MODULE_BUG',"گزارش دادن یک باگ برای این ماژول");
define('_AM_XFORUM_MODULE_FEATURE',"امکانات جدیدی برای این ماژول پیشنهاد کنید.");
define('_AM_XFORUM_MODULE_DISCLAIMER',"توضیحات");
define('_AM_XFORUM_AUTHOR_WORD',"سخن موسس");
define('_AM_XFORUM_BY','توسط');
define('_AM_XFORUM_AUTHOR_WORD_EXTRA',"
");

// admin_report.php
define("_AM_XFORUM_REPORTADMIN","مدیریت پیام های گزارش شده");
define("_AM_XFORUM_PROCESSEDREPORT","دیدن پاسخ ارسال شده توسط ناظر به گزارش فرستاده شده");
define("_AM_XFORUM_PROCESSREPORT","گزارش های ارسال شده");
define("_AM_XFORUM_REPORTTITLE","عنوان گزارش");
define("_AM_XFORUM_REPORTEXTRA","بخش اضافی");
define("_AM_XFORUM_REPORTPOST","پیام گزارش شده");
define("_AM_XFORUM_REPORTTEXT","متن گزارش ارسال شده");
define("_AM_XFORUM_REPORTMEMO","Process memo");

// admin_report.php
define("_AM_XFORUM_DIGESTADMIN","مدیریت خلاصه ها");
define("_AM_XFORUM_DIGESTCONTENT","متن خلاصه ها");

// admin_votedata.php
define("_AM_XFORUM_VOTE_RATINGINFOMATION","اطلاعات ارزش گذاری");
define("_AM_XFORUM_VOTE_TOTALVOTES","همه رای ها: ");
define("_AM_XFORUM_VOTE_REGUSERVOTES","رای های کاربران عضو: %s");
define("_AM_XFORUM_VOTE_ANONUSERVOTES","رای های کاربران مهمان: %s");
define("_AM_XFORUM_VOTE_USER","کاربر");
define("_AM_XFORUM_VOTE_IP","آدرس IP");
define("_AM_XFORUM_VOTE_USERAVG","متوسط ارزش گذاری کاربران");
define("_AM_XFORUM_VOTE_TOTALRATE","همه ارزش گذاری ها");
define("_AM_XFORUM_VOTE_DATE","ارسال شده ها");
define("_AM_XFORUM_VOTE_RATING","ارزش");
define("_AM_XFORUM_VOTE_NOREGVOTES","هیچ کاربر عضوی رای نداده است");
define("_AM_XFORUM_VOTE_NOUNREGVOTES","هیچ کاربر مهمانی رای نداده است");
define("_AM_XFORUM_VOTEDELETED","اطلاعات ارزش گذاری حذف شد.");
define("_AM_XFORUM_VOTE_ID","ID");
define("_AM_XFORUM_VOTE_FILETITLE","نام تاپیک");
define("_AM_XFORUM_VOTE_DISPLAYVOTES","اطلاعات ارزش گذاری");
define("_AM_XFORUM_VOTE_NOVOTES","هیچ رایی برای نشان دادن نیست");
define("_AM_XFORUM_VOTE_DELETE","هیچ رایی برای نشان دادن نیست");
define("_AM_XFORUM_VOTE_DELETEDSC","رای های انتخاب شده از دیتابیس <b>حذف شدند</b>");
?>