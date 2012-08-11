<?php
// $Id: admin.php,v 1.2 2005/06/20 15:03:23 ohwada Exp $

// 2004/03/27 K.OHWADA
// error message
//   _AM_DIR_NOT_WRITABLE
//   _AM_EDIT_ARTICLE_RETURN
// copy mode
//   _AM_COPY_ARTICLE_EXPLANE
// multi language in reorder.php
//   _AM_CATEGORY_REORDERED
//   _AM_ARTICLE_REORDERED
//   _AM_CATEGORY_REORDER_RETURN

// 2004/02/28 K.OHWADA
// admin menu same as popup menu
//   add _AM_PATH_MANAGEMENT  _AM_LIST_BROKEN
// multi langauge
//   add _AM_DUPLICATE_ARTICLES
// unify a article menu and a title

// 2003/11/21 K.OHWADA
// rename WFsection to XFsection
// add menu: bulk import

// admin menu same as popup menu
define("_AM_PREFERENCE",'ویژگی ها');
define("_AM_PATH_MANAGEMENT","مدیریت مسیر ها");
define("_AM_LIST_BROKEN",'فهرست فایل های خراب');

//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","پایگاه داده با موفقیت به روز شد!");
define("_AM_STORYID","شماره شناسه (ID)");
define("_AM_TITLE","عنوان");
define("_AM_SUMMARY","خلاصه");
define("_AM_CATEGORY","نام شاخه"); //******
define("_AM_CATEGORY2","ویرایش این شاخه:"); //******
define("_AM_POSTER","نویسنده");
define("_AM_SUBMITTED2","تاریخ ارسال");
define("_AM_NOSHOWART2","نمایش نده");
define("_AM_ACTION","عمل");
define("_AM_EDIT","ویرایش");
define("_AM_DELETE","حذف");
define("_AM_LAST10ARTS","مقاله های قرار گرفته روی سایت");
define("_AM_PUBLISHED","تاریخ قرار گرفتن روی سایت");
define("_AM_PUBLISHEDON","Publication Date");
define("_AM_GO","ارسال");
define("_AM_EDITARTICLE","ویرایش مقاله");
define("_AM_POSTNEWARTICLE","ویرایش مقاله");
define("_AM_RUSUREDEL","آیا اطمینان دارید که میخواهید این مقاله و تمام نظر های آن را حذف کنید؟");
define("_AM_YES","بله");
define("_AM_NO","نه");
define("_AM_ALLOWEDHTML"," HTML مجاز:");
define("_AM_DISAMILEY","غیر فعال کردن لبخندک ها");
define("_AM_DISHTML","غیر فعال کردن HTML");
define("_AM_PREVIEW","پیش نمایش");
define("_AM_SAVE","ذخیره");
define("_AM_ADD","اضافه");
define("_AM_SMILIE","اضافه کردن لبخندک به مقاله");
define("_AM_EXGRAPHIC","اضافه کردن گرافیک از خارج سایت به مقاله");
define("_AM_GRAPHIC","اضافه کردن گرافیک از داخل سایت به مقاله");
define("_AM_FILESHOWDESCRIPT","بارگذاری شرح فایل"); //new
define("_AM_ARTICLEMANAGEMENT","مدیریت مقاله ها");
define("_AM_ARTICLEMANAGEMENTLINKS","لینک های مدیریت مقاله ها");
define("_AM_ARTICLEPREVIEW","پیش نمایش مقاله");
define("_AM_ADDMCATEGORY","اضافه کردن شاخه جدید");
define("_AM_CATEGORYNAME","نام شاخه");
define("_AM_CATEGORYTAKEMETO","اینجا را کلیک کنید تا شاخه جدید ساخته شود.");
define("_AM_NOCATEGORY","خطا - هیچ شاخه ای ساخته نشد.");
define("_AM_MAX40CHAR","(حداکثر: 40 کاراکتر)");
define("_AM_CATEGORYIMG","تصویر شاخه");
define("_AM_IMGNAEXLOC","نام تصویر + پسوند در %s وجود دارد");
define("_AM_IN","<b>ساختن در شاخه</b> <br />(اگر خالی بگذارید شاخه در ریشه ساخته می شود و گرنه در شاخه ای که مشخص کرده اید به  عنوان زیر شاخه قرار می گیرد)");
define("_AM_MOVETO","<b>انتقال به شاخه</b> (خالی بگذارید تا منتقل نشود)");
define("_AM_MODIFYCATEGORY","ویرایش شاخه");
define("_AM_MODIFY","ویرایش");
define("_AM_PARENTCATEGORY","شاخه والد");
define("_AM_SAVECHANGE","ذخیره کردن تغییرات");
define("_AM_DEL","حذف");
define("_AM_CANCEL","انصراف");
define("_AM_WAYSYWTDTTAL","هشدار: آیا اطمینان دارید که میخواهید این بخش و تمام مقاله ها و نظر های آن را حذف کنید؟");
// Added in Beta6
define("_AM_CATEGORYSMNGR","مدیر شاخه ها");
define("_AM_PEARTICLES","ایجاد شاخه جدید");
define("_AM_GENERALCONF","تنظیمات کلی");

// WFSECTION
define("_AM_UPDATEFAIL","بارگذاری ناموفق بود.");
define("_AM_EDITFILE","ویرایش فایل متصل شده");
define("_AM_CATEGORYDESC","متن ظاهر شده با بردن موس روی نام شاخه");
define("_AM_FILESBASEPATH","مسیر فایل های متصل شده:");
define("_AM_AGRAPHICPATH","مسیر تصاویر 'مقاله ها' :");
define("_AM_SGRAPHICPATH","مسیر تصاویر 'شاخه ها' :");
define("_AM_SMILIECPATH","مسیر لبخنک ها:");
define("_AM_HTMLCPATH","مسیر فایل های HTML :");
define("_AM_FILEUPLOADSPATH","فایل های متصل شده: ");
define("_AM_FILEUPLOADSTEMPPATH","Attached Temp: ");
define("_AM_ARTICLESFILEPATH","تصاویر مقاله ها: ");
define("_AM_SECTIONFILEPATH","تصاویر شاخه ها: ");
define("_AM_SMILIEFILEPATH","تصاویر لبخندک ها: ");
define("_AM_HTMLFILEPATH"," فایل های HTML: ");
define("_AM_UPLOADCONFIGFILE","بارگذاری فایل تنظیمات: ");
define("_AM_ARTICLESAPAGE","تعداد مقاله نشان داده شده در هر صفحه:");
define("_AM_ARTICLESAPAGE2","تعداد مقاله نشان داده شده در هر صفحه قبل از اینکه مرورگر صفحات نمایش داده شود:");
define("_AM_NOIMG","بدون تصویر");
define("_AM_PIDINVALID","شاخه والد نا معتبر است.");
define("_AM_NOTITLE","عنوانی وجود ندارد. یک عنوان لازم است.");
define("_AM_FILEDEL","هشدار: آیا اطمینان دارید که می خواهید این فایل را حذف کنید؟");
define("_AM_AFERTSETCATE","بعد از اضافه کردن شاخه ها می توانید مقاله اضافه کنید.");
define("_AM_IMGUPLOAD","بارگذاری تصویر برای شاخه ها");
define("_AM_IMGUPLOAD2","در حال حاضر پوشه ذخیره تصاویر عبارت است از:");
define("_AM_IMGNAME","نام فایل (خالی بگذارید تا همان نام فایل بارگذاری شده در نظر گرفته شود)");
define("_AM_UPLOADED","بارگذاری شد!");
define("_AM_ISNOTWRITABLE","قابل دسترسی برای نوشتن نیست!");
define("_AM_UPLOADFAIL","هشدار: این بارگذاری ناموفق بود. علت:");
define("_AM_NOTALLOWEDMINETYPE","شما مجاز به بارگذاری این نوع فایل نیستید.");
define("_AM_FILETOOBIG","اندازه فایل بیشتر از اندازه مجاز برای بارگذاری است!");

define("_AM_CATEGORYMENU","تنظیمات صفحه راهنمای شاخه ها");
define("_AM_ARTICLE2MENU","تنظیمات صفحه راهنمای مقاله ها");
define("_AM_ARTICLEPAGEMENU","تنظیمات صفحه مقاله ها");
define("_AM_BLOCKMENU","تنظیمات بلاک ها");
define("_AM_ADMINEDITMENU","تنظیسمات کلی مقاله ها");
define("_AM_ADMINCONFIGMENU","تنظیمات مدیر");

define("_AM_ARTIMGUPLOAD","بارگذاری تصویر");
define("_AM_TOPPAGETYPE","نشان دادن لینک به مقاله ها به جای تعداد مقاله ها؟");
define("_AM_SHOWCATPIC","نشان دادن تصویر شاخه در صفحه راهنمای شاخه؟");
define("_AM_WYSIWYG","استفاده از ویرایشگر WYSIWYG به جای ویرایشگر زوپس؟");
define("_AM_SHOWCOMMENTS","نمایش نظر های کاربران در مقاله؟");
define("_AM_SUBMITTED","مقاله های ارسال شده توسط کاربر"); //added

//define("_AM_ALLTXT","<h4>Article Management</h4></div><div>With <b>Article Management</b> you can edit, delete or rename any article. This mode will show every article within the database.<br /><br />"); //added
// WF -> XF
//define("_AM_PUBLISHEDTXT","<h4>Article Published Management</h4></div><div><b>Article Published Management</b> will show all articles that have been published (Approved by Webmaster).<br /><br />These are all the articles that will be shown in category listing of the XF-Section index page (including all those controlled by groupaccess).<br /><br />"); //added
//define("_AM_SUBMITTEDTXT","<h4>Article Submission Management</h4></div><div><b>Article Submission management</b> will show all articles submitted by your website users and allow you to moderate them.<br /><br />To approve an article, click on <b>Edit</b> link, then highlight the <b>Approve</b> checkbox and the save the article. The submitted article will then be published.<br /><br />"); //added
//define("_AM_ONLINETXT","<h4>Article Online Management</h4></div><div><b>Article Online Management</b> will show all articles which status has been set to 'online'.<br /><br />To change the status of an article, click on the <b>Edit</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
//define("_AM_OFFLINETXT","<h4>Article Offline Management</h4></div><div><b>Article Offline Management</b> will show all articles which status has been set to <b>offline</b>.<br /><br />To change the status of an article, click on the <b>Edit</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
//define("_AM_EXPIREDTXT","<h4>Article Expired Management</h4></div><div><b>Article Expired Management</b> will show all articles that have expired.<br /><br />You can easily reset the expire date by clicking on <b>Edit</b> link and by changing the <b>Set the date/time of expiration</b> setting.<br /><br />"); //added
//define("_AM_AUTOEXPIRETXT","<h4>Article Auto Expired Management</h4></div><div><b>Article Auto Expired Management</b> will show all articles that have been set to expire on a certain date.<br /><br />You can reset the expire date by clicking on <b>Edit</b> link and changing the <b>Set the date/time of expiration</b> setting.<br /><br />"); //added
//define("_AM_AUTOTXT","<h4>Article Auto Management</h4></div><div><b>Article Auto Publish Management</b> will show all articles that have been set to publish at a future date.<br /><br />This setting can be changed by clicking on the <b>edit</b> link and changing the 'Set the date/time of publish' setting.<br /><br />"); //added
// WF -> XF
//define("_AM_NOSHOWTXT","<h4>No Show Article</h4></div><div><b>No Show Article</b> The are a special type of article, unlike your normal articles these will not show up in article index pages and will not be seen that way.&nbsp;&nbsp; Instead, these article will only show in the `XF-Section Menu block`.<br /><br />Using this option with HTML Pages and `No Display info` (Option on the edit article page) you can show just what you want. &nbsp;&nbsp;An example of this would be a `privacy notice` page etc.<br /><br />All other options control these types of articles also. i.e. published, expired, online/offline.<br /><br />"); //added

// unify a article menu and a title
define("_AM_ALLTXT","با استفاده از  <b>مدیریت مقاله ها</b> شما میتوانید مقاله ها را ویرایش یا حذف کنید یا تغییر نام دهید. این حالت همه مقاله ها در پایگاه داده را نشان می دهد..<br /><br />"); //added
define("_AM_PUBLISHEDTXT","<b>مدیریت مقاله های قرار گرفته روی سایت</b> همه مقاله های  قابل مشاهده در سایت را نشان می دهد (این مقاله ها توسط مدیر تایید شده اند).<br /><br />در این قسمت تمام مقاله هایی که در صفحه راهنمای ماژول مقاله ها وجود دارند قابل مشاهده است.(که البته گروه های مختلف به مقاله های مختلف دسترسی دارند).<br /><br />"); //added
define("_AM_SUBMITTEDTXT","<b>مدیریت مقاله های ارسال شده</b> will show all articles submitted by your website users and allow you to moderate them.<br /><br />To approve an article, click on <b>Edit</b> link, then highlight the <b>Approve</b> checkbox and the save the article. The submitted article will then be published.<br /><br />"); //added
define("_AM_ONLINETXT","<b>مدیریت مقاله های آن لاین</b> will show all articles which status has been set to 'online'.<br /><br />To change the status of an article, click on the <b>Edit</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
define("_AM_OFFLINETXT","<b>مدیریت مقاله های اف لاین</b> will show all articles which status has been set to <b>offline</b>.<br /><br />To change the status of an article, click on the <b>Edit</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
define("_AM_EXPIREDTXT","<b>مدیریت مقاله های خاتمه یافته</b> will show all articles that have expired.<br /><br />You can easily reset the expire date by clicking on <b>Edit</b> link and by changing the <b>Set the date/time of expiration</b> setting.<br /><br />"); //added
define("_AM_AUTOEXPIRETXT","<div><b>مدیریت مقاله های خاتمه یافته به صورت خود کار</b> will show all articles that have been set to expire on a certain date.<br /><br />You can reset the expire date by clicking on <b>Edit</b> link and changing the <b>Set the date/time of expiration</b> setting.<br /><br />"); //added
define("_AM_AUTOTXT","<b>مدیریت مقاله های قرار گرفته روی سایت به صورت خود کار</b> will show all articles that have been set to publish at a future date.<br /><br />This setting can be changed by clicking on the <b>edit</b> link and changing the 'Set the date/time of publish' setting.<br /><br />"); //added
define("_AM_NOSHOWTXT","<b>مدیریت مقاله های نمایش داده نشده</b> The are a special type of article, unlike your normal articles these will not show up in article index pages and will not be seen that way.&nbsp;&nbsp; Instead, these article will only show in the `XF-Section Menu block`.<br /><br />Using this option with HTML Pages and `No Display info` (Option on the edit article page) you can show just what you want. &nbsp;&nbsp;An example of this would be a `privacy notice` page etc.<br /><br />All other options control these types of articles also. i.e. published, expired, online/offline.<br /><br />"); //added

define("_AM_BLOCKCONF","تنظیمات بلاک");
define("_AM_TITLE1","نام بلاک منوی اصلی:");
define("_AM_TITLE4","نام بلاک مقاله های جدید:");
define("_AM_TITLE5","نام بلاک مقاله های برتر:");
define("_AM_ORDER","Alternative 'Order' text:");
define("_AM_DATE","Alternative 'Date' text:");
define("_AM_HITS","Alternative 'Hits' text:");
define("_AM_DISP","Alternative 'Display' text:");
define("_AM_ARTCLS","Name of the Articles Block");
define("_AM_MENU_LINKS","<b>Menu Management Links</b>");
define("_AM_BAN","ممنوع کردن کاربر");
//New to version 0.9.2
define("_AM_CMODHEADER","چک کردن دسترسی به فایل");

// WF -> XF
define("_AM_CMODERRORINFO","چک کردن شاخه ها و فایل ها برای قابلیت نوشتن روی آنها.<br/><br/>XF-Section will try to CHMOD the directories used. An error message will be shown if the write permissions are not correct.");

define("_AM_FILEPATH","تنظیمات بارگذاری و تصاویر");

// WF -> XF
define("_AM_FILEPATHWARNING","Sets the path for directories used by XF-Section.  A warning will be given if a path used is incorrect.<br/><br/>Leave a field empty if you wish WF-Section to use the default path/s.<br/><br/>");

define("_AM_FILEUSEPATH","تغییر مسیر کاربر");
define("_AM_PATHEXIST","مسیر وجود دارد!");
define("_AM_PATHNOTEXIST","مسیر وجود ندارد! لطفا این را امتحان کنید!");
define("_AM_USERPATH","مسیر تعریف شده توسط کاربر");
define("_AM_SHOWSELIMAGE","نمایش تصاویر انتخاب شده در این لحظه: "); //******* Updated *******
define("_AM_SHOWSUBMENU","زیر شاخه ها در هر شاخه نمایش داده شوند؟");
define("_AM_MENUS","تنظیمات صفحه اصلی راهنما");
define("_AM_DEFAULTPATH","مسیر پیش فرض در حال استفاده");
define("_AM_SCROLLINGBLOCK","استفاده ار چرخش در بلاک مقاله های جدید؟ (فقط در این نسخه قابل استفاده است)");
define("_AM_BLOCKHEIGHT","قرار دادن ارتفاع بلاک چرخان");
define("_AM_DEFAULT"," پیش فرض");
define("_AM_BLOCKAMOUNT","تعداد خط ها برای چرخش");
define("_AM_BLOCKDELAY","تاخیر زمانی در بلاک چرخان (هر خط)");
define("_AM_LASTART","تعداد مقاله های جدید برای نمایش در صفحه مدیریت: ");
define("_AM_NUMUPLOADS","تعداد فایل هایی که میتوان در یک زمان بارگذاری کرد:");

// WF -> XF
define("_AM_WEBMASTONLY","فقط وب مستر بتواند تنظیمات ماژول مقاله ها را تغییر دهد؟");

define("_AM_DEFAULTS","ریست کردن همه تنظیمات به حالت پیش فرض؟");

define("_AM_NOCMODERROR","( درست )");
define("_AM_CMODERROR","( دسترسی نا درست است یا پوشه مورد نظر وجود ندارد! )");

// WF -> XF
define("_AM_REVERTED","تنظیمات ماژول به حالت پیش فرض برگردد؟");

define("_AM_GROUPPROMPT","دادن دسترسی به گروه های زیر:");
define("_AM_NOVIEWPERMISSION","متاسفانه شما دسترسی برای دیدن این قسمت را ندارید!");
define("_AM_FILE","فایل: ");
define("_AM_NOMAINTEXT","خطا: هیچ متن یا کد html در مقاله شما وجود ندارد! مقاله نمی تواند خالی باشد.ERROR: There is no Text/Html in your article! Article cannot be empty!");
define("_AM_DIR","پوشه: ");
define("_AM_MISC","تنظیمات مختلف");

define("_AM_ISNOTWRITABLE2"," بر روی سرور وجود ندارد! لطفا آن را به یک مسیر معتبر تغییر دهید!");
define("_AM_CANNOTMODIFY"," نمیتوان این را بدون داشتن یه مسیر معتبر اصلاح کرد");
define("_AM_PATH","مسیر: ");

define("_AM_CMODHEADER2","چک کردن فایل");
define("_AM_ARTICLEMENU","تنظیمات صفحه راهنمای مقاله ها");
define("_AM_APPROVE","تایید");
define("_AM_MOVETOTOP","این مقاله را ببر به بالا");
define("_AM_CHANGEDATETIME","تغییر تاریخ/زمان انتشار");
define("_AM_NOWSETTIME","زمان انتشار تنظیم شود روی: %s"); // %s is datetime for publication
define("_AM_CURRENTTIME","زمان در حال حاضر: %s");  // %s is the current datetime
define("_AM_SETDATETIME","قرار دادن زمان برای مقاله منتشر شده");
define("_AM_MONTHC","ماه:");
define("_AM_DAYC","روز:");
define("_AM_YEARC","سال:");
define("_AM_TIMEC","زمان:");
define("_AM_AUTOAPPROVE","مقاله های ارسال شده به طور خود کار تایید شوند؟");

// WF -> XF
define("_AM_DEFAULTTIME","Timestamp استفاده شده برای ماژول XF-Section:");
define("_AM_TURNOFFLINE","مخفی کردن XF-Section (فقط مدیر می تواند به ماژول دسترسی داشته باشد)");

define("_AM_SHOWMARTICLES","ستون مقاله ها نشان دهد؟");
define("_AM_SHOWMUPDATED","ستون به روز شده را نشان دهد؟");
define("_AM_SHORTCATTITLE","به طور خود کار طول عنوان شاخه  ها را کوتاه کند؟");
define("_AM_SHOWAUTHOR","ستون نام نویسنده را نشان دهد؟");
define("_AM_SHOWCOMMENTS2","ستون شمارش نظر ها را نشان دهد؟");
define("_AM_SHOWFILE","ستون شمارش فایل را نشان دهد؟");
define("_AM_SHOWRATED","ستون شمارش امتیاز را نشان دهد؟");
define("_AM_SHOWVOTES","ستون شمارش رای را نشان دهد؟");
define("_AM_SHOWPUBLISHED","ستون تاریخ قرار گرفتن در سایت را نشان دهد؟");
define("_AM_SHOWHITS","ستون تعداد بازدید را نشان دهد؟");
define("_AM_SHORTARTTITLE","به طور خود کار طول عنوان مقاله ها را کوتاه کند؟");
define("_AM_OFFLINE","<b>مخفی کردن مقاله ها</b> (حالت مقاله ها آف لاین شده و دیده نخواهند شد)");
define("_AM_BROKENREPORTS","گزارش های فایل های خراب");
define("_AM_NOBROKEN","فایل های خراب را گزارش نکن");
define("_AM_IGNORE","نادیده گرفتن");
define("_AM_FILEDELETED","فایل حذف شد.");
define("_AM_BROKENDELETED","گزارش فایل خراب حذف شد.");
define("_AM_IGNOREDESC","نادیده بگیر (گزارش را نادیده بگیر و فقط گزارش فایل خراب را <b>حذف کن</b>)");
define("_AM_DELETEDESC","حذف کن (<b>اطلاعات و فایل خراب را حذف کن</b> و <b>خود گزارش را هم حذف کن</b>.)");
define("_AM_REPORTER","فرستنده گزارش");
define("_AM_FILETITLE","عنوان فایل دانلودی: ");

// WF -> XF
define("_AM_DLCONF","تنظیمات فایل های دانلودی");

define("_AM_FILEDESCRIPT","شرح نام فایل");
define("_AM_STATUS","حالت");
define("_AM_UPLOAD","بارگذاری");
define("_AM_NOTIFYPUBLISH","وقتی در سایت قرار گرفت ایمیل آگهی رسانی را ارسال کن");
define("_AM_VIEWHTML","EditHTML");
define("_AM_VIEWWAYSIWIG","EditWYSIWYG");
define("_AM_CATEGORYT","شاخه");
define("_AM_ACCESS","دسترسی");
define("_AM_PAGE","صفحه");
define("_AM_ARTICLEMANAGE","مدیریت مقاله ها");
define("_AM_WEIGHTMANAGE","مدیریت وزن ها (محتوا)");
define("_AM_UPLOADMAN","مدیریت بارگذاری");

// WF -> XF
define("_AM_NOADMINRIGHTS","متاسفم ، فقط وب مستر می تواند تنظیمات ماژول را تغییر دهد");

define("_AM_FILECount","تعداد فایل ها");
define("_AM_ALLARTICLES","فهرست تمام مقاله ها");
define("_AM_PUBLARTICLES","فهرست مقاله های منتشر شده");
define("_AM_SUBLARTICLES","فهرست مقاله های ارسال شده");
define("_AM_ONLINARTICLES","فهرست مقاله های آن لاین");
define("_AM_OFFLIARTICLES","فهرست مقاله های آف لاین");
define("_AM_EXPIREDARTICLES","فهرست مقاله های منقضی شده");
define("_AM_AUTOEXPIREARTICLES","فهرست مقاله های منقضی شده به طور خودکار");
define("_AM_AUTOARTICLES","فهرست مقاله های منتشر شده به صورت خودکار");
define("_AM_NOSHOWARTICLES","فهرست مقاله های به نمایش در نیامده");
define("_NOADMINRIGHTS2","فقط وب مستر می تواند این تنظیمات را تغیر دهد!");
define("_AM_CANNOTHAVECATTHERE","خطا: این شاخه نمی تواند زیر شاخه خودش باشد!!");
define("_AM_SECTIONMANAGE","تنظیمات شاخه ها");
define("_AM_SECTIONMANAGELINK","لینک های تنظیمات شاخه ها");
define("_AM_FILEID","فایل");
define("_AM_FILEICON","آیکن");
define("_AM_FILESTORE","ذخیره شده به صورت");
define("_AM_REALFILENAME","نام حقیقی");
define("_AM_USERFILENAME","شناسه کاربری");
define("_AM_FILEMIMETYPE","نوع فایل");
define("_AM_FILESIZE","اندازه فایل");
define("_AM_FDCOUNTER","شمارنده");
define("_AM_EXPARTS","مقاله های منقضی شده");
define("_AM_EXPIRED","تاریخ انقضا به صورت خود کار");
define("_AM_CREATED","تاریخ ساخته شدن");
define("_AM_CHANGEEXPDATETIME","تغیر تاریخ/زمان منقضی شدن");
define("_AM_SETEXPDATETIME","قرار دادن  تاریخ/زمان منقضی شدن");
define("_AM_NOWSETEXPTIME","تاریخ انقضای مقاله برابر است با : %s");
define("_AM_ANONPOST","اجازه به کاربران مهمان برای ارسال مقاله؟");
define("_AM_NOTIFYSUBMIT","ارسال ایمیل به وب مستر در هنگام ارسال مقاله جدید؟");
define("_AM_SECTIONIMAGE","تصویر صفحه راهنمای اصلی");
define("_AM_SECTIONHEAD","سر صفحه صفحه راهنمای اصلی");
define("_AM_SECTIONFOOT","پا صفحه  صفحه راهنمای اصلی");
define("_AM_SHOWVOTESINART","اجازه به کاربران برای رای دادن به مقاله ها؟");
define("_AM_SHOWREALNAME","نشان دادن نام واقعی به جای شناسه کابری؟ (اگر نام واقعی وجود نداشت همان شناسه کابری نمایش داده می شود)");
define("_AM_SHOWCATEGORYIMG","نشان دادن تصویر بالایی در شاخه خودش؟");
define("_AM_EDITSERVERFILE","ویرایش فایل بر روی سرور");
define("_AM_CURRENTFILENAME","نام فایل در حال حاضر: ");
define("_AM_CURRENTFILESIZE","اندازه فایل: ");
define("_AM_UPLOADFOLD","پوشه برای بارگذاری: ");
define("_AM_UPLOADPATH","مسیر: ");
define("_AM_FREEDISKSPACE","فضای خالی بر روی هارد:");
define("_AM_RENAMETHIS","فایل تغییر نام داده شود؟");
define("_AM_RENAMEFILE","تغیر نام فایل");
define("_AM_SHOWSUMMARY","نشان دادن ستون خلاصه مقاله؟");
define("_AM_SHOWICON","نشان دادن ایکن های 'پر طرفدار و به روز شده' ؟");
define("_AM_INDEXHEADING","بالای صفحه اصلی راهنما");
define("_AM_EXTERNALARTICLE","مقاله خارج از سایت </b> این جایگزین متن و فایل html خواهد شد");

// added in WFS v1b6
define("_AM_POPULARITY","پر طرفدار بودن");
define("_AM_ARTICLESSORT","نوع چینش مقاله ها");
define("_AM_NAVTOOLTYPE","نوع ابزار پیمایش");
define("_AM_SELECTBOX","Select box");
define("_AM_SELECTSUBS","Select box with sub-sections");
define("_AM_LINKEDPATH","Linked path");
define("_AM_LINKSANDSELECT","Links and select box");
define("_AM_NONE","هیچ کدام");
define("_AM_CATEGORYWEIGHT","وزن (محتوا) شاخه");
define("_AM_ARTICLEWEIGHT","وزن (محتوا) مقاله");
define("_AM_WEIGHT","وزن (محتوا)");
define('_AM_DUPLICATECATEGORY','دو تا کردن شاخه');

// add
define('_AM_DUPLICATE_ARTICLES','مقاله های درونش را هم دو تا کن');

define('_AM_COPY','کپی');
define('_AM_TO','به');
define('_AM_NEWCATEGORYNAME','نام شاخه جدید');
define('_AM_DUPLICATE','دو تا کردن');
define('_AM_DUPLICATEWSUBS','دو تا کردن به همراه زیر شاخه ها');
define('_AM_ALLOWEDMIMETYPES','نوع فایل های مجاز');
define('_AM_MODIFYFILE','ویرایش فایل مقاله');
define('_AM_FILESTATS','آمار فایل متصل شده');
define('_AM_FILESTAT','آمار فایل برای این مقاله: ');
define('_AM_ERRORCHECK','چک کردن فایل');
define('_AM_LASTACCESS','آخرین دسترسی');
define('_AM_DOWNLOADED','تعداد دانلود');
define('_AM_DOWNLOADSIZE','اندازه فایل');
define('_AM_UPLOADFILESIZE','حداکثر اندازه فایل برای بارگذاری (KB) 1048576 = 1 Meg');
define('_AM_FILEMODE','قرار دادن دسترسی برای فایل بارگذاری شده');
define('_AM_IMGHEIGHT','حداکثر طول تصویر بارگذاری شده');
define('_AM_IMGWIDTH','حداکثر عرض تصویر بارگذاری شده');
define('_AM_FILEPERMISSION','دسترسی های فایل');
define('_AM_IMGESIZETOBIG','طول/ عرض تصویر بیشتر از مقدار مجاز است');
define('_AM_CATREORDERTEXT','شما در اینجا می توانید چینش تمام شاخه ها را عوض کنید.<br />شاخه های اصلی با آبی تیره، زیر شاخه ها با آبی روشن و سپس به تدریج خاکستری نشان داده شده اند.هر شاخه ای با توجه به وزنش چیده شده است..<br /><br />برای تغییر چینش مقاله ها,روی نام یه شاخه کلیک کنید و سپس فهرستی از تمام مقاله های درون آن نمایش داده می شود.');
define('_WFS_ATTACHFILE','متصل کردن فایل');
define('_WFS_ATTACHFILEACCESS','سطح دسترسی مانند دسترسی خود مقاله خواهد بود.شما میتوانید این حالت را بعدا با ویرایش فایل متصل شده تغیر دهید.');
define('_AM_WFSFILESHOW','فایل های متصل شده');
define('_AM_ATTACHEDFILE','فایل های قابل دیدن');
define('_AM_ATTACHEDFILEM','مدیریت فایل های متصل شده');
define('_AM_UPOADMANAGE','مدیریت فایل');
define('_AM_CAREORDER','وزن شاخه ها و مقاله ها');
define('_AM_CAREORDER2','تغییر چینش شاخه ها');
define('_AM_CAREORDER3','تغییر چینش مقاله ها');

define('_AM_PICON','نمایش آیکن های مقال ها (صفحه ها)؟');

// WF -> XF
define('_AM_JUSTHTML','<b> No Display info</b> (This option will stop XF-Section from displaying all info in the article. Just a plain html page or text.)');

define('_AM_NOSHOART','<b> No Show Article</b> (Using this option will prevent this article from being shown in the main index listing. Instead this article will only be shown in the article link menu block</b>.)');
define('_AM_INDEXPAGECONFIG','Index Page Management');

// WF -> XF
define('_AM_INDEXPAGECONFIGTXT','This allows you to change parts of the main index page of XF-Section.<br /><br />You can easily change the image logo, heading, header and footer text.');
//define('_AM_VISITSUPPORT','Visit the WF-section website for information, updates and help on its usage.<br /> WF-Sections v1 B6 &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Sections</a>');
define('_AM_VISITSUPPORT','');

define('_AM_REORDERID','ID');
define('_AM_REORDERPID','PID');
define('_AM_REORDERTITLE','نام');
define('_AM_REORDERDESCRIPT','شرح');
define('_AM_REORDERWEIGHT','وزن');
define('_AM_REORDERSUMMARY','خلاصه');

// index.php
define("_AM_DIR_NOT_WRITABLE","پوشه قابل نوشتن نیست");
define("_AM_EDIT_ARTICLE_RETURN","بازگشت به صفحه ویرایش مقاله");

// copy mode in index.php
define("_AM_COPY_ARTICLE_EXPLANE","کپی کردن مقاله. مقاله اصلی دست نخواهد خورد. فایل های متصل شده کپی نخواهند شد.");

// multi language in reorder.php
define("_AM_CATEGORY_REORDERED","نحوه چینش شاخه ها تغییر کرد!");
define("_AM_ARTICLE_REORDERED","نحوه چینش مقاله ها تغییر کرد!");
define("_AM_CATEGORY_REORDER_RETURN","بازگشت به صفحه تغییر چینش شاخه ها");

// *** add menu: bulk import ***
define("_AM_IMPORT","وارد کردن فایل های HTML به صورت یکجا (Bulk)");
define("_AM_IMPORT_DIRNAME","نام پوشه یا نام فایل");
define("_AM_IMPORT_HTMLPROC","Processing of HTML files");
define("_AM_IMPORT_EXTFILTER","External filter program name");

define("_AM_IMPORT_BODY","Only body part is taken out");
define("_AM_IMPORT_INDEXHTML","Delete a link to index.html, there are in the same directory or in one upper directory.");
define("_AM_IMPORT_LINK","Change a link to a title = file name");
define("_AM_IMPORT_IMAGE","Chage a link of an image file into an image directory. ");
define("_AM_IMPORT_ATMARK","change @ to &amp;#064;");
define("_AM_IMPORT_TEXTPROC","Processing of Text files");
define("_AM_IMPORT_TEXTPRE","Surround Text file by &lt;pre&gt; &lt;/pre&gt;");
define("_AM_IMPORT_IMAGEPROC","Processing of Image files");
define("_AM_IMPORT_IMAGEDIR","Image directory name");
define("_AM_IMPORT_IMAGECOPY","Copy image files to a image directory.");
define("_AM_IMPORT_TESTMODE","Test mode");
define("_AM_IMPORT_TESTDB","Not store in DB. Please remove a check, when you store. ");
define("_AM_IMPORT_TESTEXEC","Test");
define("_AM_IMPORT_TESTTEXT","Text display");
define("_AM_IMPORT_EXPLANE","A judgment of the kind of file is performed by the extension.<br>HTML file have extension of html or htm.<br>Text file have extension of txt.<br>Image file have extension of gif, jpg, jpeg, or png.<br>");
define("_AM_IMPORT_ERRDIREXI","Directory or file does not exist");
define("_AM_IMPORT_ERRFILEXI","Filter program does not exist");
define("_AM_IMPORT_ERRFILEXEC","Filter program is not executable");
define("_AM_IMPORT_ERRNOCOPY","No specification of image copy");
define("_AM_IMPORT_ERRNOIMGDIR","No specification of image directory");
define("_AM_IMPORT_ERRIMGDIREXI","Specified image directory is not directory");
define("_AM_IMPORT_ERRFILEEXI","File does not exist");

?>