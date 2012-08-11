<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","پایگاه‌داده با موفقیت به‌روز شد!");
define("_AM_CONFIG","تنظیمات اخبار");
define("_AM_AUTOARTICLES","خبر‌های خودکار");
define("_AM_STORYID","شناسه خبر");
define("_AM_TITLE","عنوان");
define("_AM_TOPIC","سرفصل");
define("_AM_POSTER","فرستنده");
define("_AM_PROGRAMMED","زمان/تاریخ برنامه‌ریزی شده");
define("_AM_ACTION","عمل");
define("_AM_EDIT","ویرایش");
define("_AM_DELETE","حذف");
define("_AM_LAST10ARTS","آخرین %d خبر قرار‌گرفته در سایت");
define("_AM_PUBLISHED","تاریخ قرار گرفتن"); // Published Date
define("_AM_GO","برو!");
define("_AM_EDITARTICLE","ویرایش خبر");
define("_AM_POSTNEWARTICLE","نوشتن خبر جدید");
define("_AM_ARTPUBLISHED","خبر شما در سایت قرار گرفت!");
define("_AM_HELLO","سلام %s");
define("_AM_YOURARTPUB","خبری که برای سایت ارسال کرده‌بودید در سایت قرار گرفت");
define("_AM_TITLEC","عنوان: ");
define("_AM_URLC","آدرس: ");
define("_AM_PUBLISHEDC","تاریخ قرار‌گرفتن: ");
define("_AM_RUSUREDEL","آیا اطمینان دارید که می‌خواهید این خبر و تمام نظرهای آن را حذف کنید؟");
define("_AM_YES","بله");
define("_AM_NO","نه");
define("_AM_INTROTEXT","متن وارد شده");
define("_AM_EXTEXT","متن اضافی");
define("_AM_ALLOWEDHTML","اجازه برای استفاده از کدهای HTML: ");
define("_AM_DISAMILEY","غیر‌فعال کردن لبخندکها");
define("_AM_DISHTML","غیر فعال‌کردن HTML");
define("_AM_APPROVE","تایید");
define("_AM_MOVETOTOP","این خبر را بالا ببر");
define("_AM_CHANGEDATETIME","تغییر زمان/تاریخ قرار گرفتن خبر در سایت");
define("_AM_NOWSETTIME","در حال حاضر در این تاریخ قرار دارد: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","زمان در حال حاضر عبارت است از: %s");  // %s is the current datetime
define("_AM_SETDATETIME","تعیین زمان/تاریخ قرار گرفتن خبر در سایت");
define("_AM_MONTHC","ماه:");
define("_AM_DAYC","روز:");
define("_AM_YEARC","سال:");
define("_AM_TIMEC","زمان:");
define("_AM_PREVIEW","پیش‌نمایش");
define("_AM_SAVE","ذخیره");
define("_AM_PUBINHOME","قرار گرفتن خبر در صفحه اصلی؟");
define("_AM_ADD","اضافه");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","اضافه‌کردن یک سرفصل اصلی");
define("_AM_TOPICNAME","عنوان سرفصل");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(حداکثر: 255 نویسه)");
define("_AM_TOPICIMG","تصویر سرفصل");
define("_AM_IMGNAEXLOC","نام تصویر + پیشوند در %s قرار دارد");
define("_AM_FEXAMPLE","به عنوان مثال: games.gif");
define("_AM_ADDSUBTOPIC","اضافه‌کردن یک زیر سرفصل");
define("_AM_IN","در");
define("_AM_MODIFYTOPIC","اصلاح سرفصل");
define("_AM_MODIFY","اصلاح");
define("_AM_PARENTTOPIC","سرفصل والد");
define("_AM_SAVECHANGE","ذخیره تغییرات");
define("_AM_DEL","حذف");
define("_AM_CANCEL","انصراف");
define("_AM_WAYSYWTDTTAL","هشدار: آیا مطمئن هستید که می‌خواهید این سر فصل را با تمام خبرها و نظرهای موجود در آن حذف کنید؟");


// Added in Beta6
define("_AM_TOPICSMNGR","مدیریت سرفصل‌ها");
define("_AM_PEARTICLES","نوشتن/ویرایش خبرها");
define("_AM_NEWSUB","ارسال‌های جدید");
define("_AM_POSTED","فرستاده شده در");
define("_AM_GENERALCONF","تنظیمات اصلی");

// Added in RC2
define("_AM_TOPICDISPLAY","تصویر سرفصل نشان داده‌شود؟");
define("_AM_TOPICALIGN","موقعیت");
define("_AM_RIGHT","راست");
define("_AM_LEFT","چپ");

define("_AM_EXPARTS","خبرهای منقضی شده");
define("_AM_EXPIRED","منقضی شده در");
define("_AM_CHANGEEXPDATETIME","تغییر زمان/تاریخ منقضی شدن خبر در سایت");
define("_AM_SETEXPDATETIME","تعیین زمان/تاریخ منقضی شدن خبر در سایت");
define("_AM_NOWSETEXPTIME","در حال حاضر در این تاریخ قرار دارد: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","شما باید یک نام برای سرفصل وارد کنید!");
define("_AM_EMPTYNODELETE","چیزی برای حذف وجود ندارد!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM','دسترسی برای دیدن/ارسال/تایید اخبار');
define('_AM_SELFILE','یک فایل را برای بارگذاری انتخاب کنید');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE','خطا در هنگام اتصال فایل به خبر');
define('_AM_UPLOAD_ERROR','خطا در هنگام بارگذاری فایل');
define('_AM_UPLOAD_ATTACHFILE','فایل(ها)ی متصل شده');
define('_AM_APPROVEFORM','دسترسی برای تایید اخبار');
define('_AM_SUBMITFORM','دسترسی برای ارسال اخبار');
define('_AM_VIEWFORM','دسترسی برای دیدن اخبار');
define('_AM_APPROVEFORM_DESC','انتخاب کنید چه گروه‌هایی مجاز به تایید اخبار باشند');
define('_AM_SUBMITFORM_DESC','انتخاب کنید چه گروه‌هایی مجاز به ارسال اخبار باشند');
define('_AM_VIEWFORM_DESC','انتخاب کنید چه گروه‌هایی مجاز به دیدن اخبار باشند');
define('_AM_DELETE_SELFILES','حذف فایل‌های انتخاب شده');
define('_AM_TOPIC_PICTURE','بارگذاری تصویر');
define('_AM_UPLOAD_WARNING','<B>هشدار، فراموش نکنید که برای شاخه مقابل دسترسی برای نوشتن بدهید : %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE','ارتقا کامل شد');
define('_AM_NEWS_UPDATEMODULE','تمپلیت‌های ماژول و بلاک را به روز کنید');
define('_AM_NEWS_UPGRADEFAILED','ارتقا با مشکل روبرو شد');
define('_AM_NEWS_UPGRADE','ارتقا');
define('_AM_ADD_TOPIC','اضافه‌کردن سر فصل');
define('_AM_ADD_TOPIC_ERROR','خطا: سرفصل در حال حاضر وجود دارد!');
define('_AM_ADD_TOPIC_ERROR1','خطا: امکان اینکه این سرفصل را به عنوان سرفصل والد قرار داد وجود ندارد');
define('_AM_SUB_MENU','قرار دادن این سرفصل به عنوان یک زیر منو در منوی اصلی');
define('_AM_SUB_MENU_YESNO','زیرمنو؟');
define('_AM_HITS','بازدید');
define('_AM_CREATED','ساخته‌شده در');

define('_AM_TOPIC_DESCR',"شرح سرفصل");
define('_AM_USERS_LIST',"فهرست کاربران");
define('_AM_PUBLISH_FRONTPAGE',"در صفحه اصلی قرار گیرد؟");
define('_AM_NEWS_UPGRADEFAILED1','امکان ایجاد جدول stories_files وجود ندارد');
define('_AM_NEWS_UPGRADEFAILED2',"امکان تغییر طول عنوان سرفصل وجود ندارد");
define('_AM_NEWS_UPGRADEFAILED21',"امکان اضافه‌کردن فیلدهای جدید به جدول سرفصل‌ها وجود ندارد");
define('_AM_NEWS_UPGRADEFAILED3','امکان ایجاد جدول stories_votedata وجود ندارد');
define('_AM_NEWS_UPGRADEFAILED4',"امکان ایجاد دو فیلد 'rating' و 'votes' برای جدول 'story' وجود ندارد");
define('_AM_NEWS_UPGRADEFAILED0',"لطفا به پیغام‌ها توجه کنید و سعی کنید ایرادات را با رفتن به phpMyadmin و sql بر طرف کنید");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"خطا در اجرای فایل به‌روز رسانی! شما باید مدیر ماژول باشید تا ارتقا انجام شود");
define('_AM_NEWS_PRUNE_BEFORE',"هرس کردن خبرهایی که قبل از این تاریخ در سایت قرار گرفته‌اند");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"فقط خبرهایی را حذف کن که منقضی شده‌اند");
define('_AM_NEWS_PRUNE_CONFIRM',"هشدار، شما می‌خواهید اخباری را که قبل از %s منتشر شده‌اند پاک کنید (البته این کار غیر ممکن نیست). این عمل اخبار %s را نمایان می کند.<br />آیا اطمینان دارید؟");
define('_AM_NEWS_PRUNE_TOPICS',"محدود به سرفصل‌های زیر");
define('_AM_NEWS_PRUNENEWS','هرس کردن خبرها');
define('_AM_NEWS_EXPORT_NEWS','خروجی اخبار با فرمت xml');
define('_AM_NEWS_EXPORT_NOTHING',"متاسفانه چیزی برای خارج کردن وجود ندارد درخواست خود را بررسی کنید");
define('_AM_NEWS_PRUNE_DELETED','%d خبر حذف شد');
define('_AM_NEWS_PERM_WARNING','<h2>هشدار، شما سه فرم در پیش رو دارید در نتیجه سه دکمه برای ارسال دارید</h2>');
define('_AM_NEWS_EXPORT_BETWEEN','خروجی گرفتن از خبرهای قرار گرفته در سایت بین تاریخ');
define('_AM_NEWS_EXPORT_AND',' و ');
define('_AM_NEWS_EXPORT_PRUNE_DSC',"اگر هیچکدام را انتخاب نکنید همه سرفصل‌ها در نظر گرفته می‌شوند<br/> وگرنه فقط سرفصل‌های انتخاب شده در نظر گرفته می‌شوند");
define('_AM_NEWS_EXPORT_INCTOPICS','تعریف‌های سرفصل‌ها را هم شامل شود؟');
define('_AM_NEWS_EXPORT_ERROR','خطا در هنگام ایجاد فایل %s. عمل متوقف شد.');
define('_AM_NEWS_EXPORT_READY',"فایل خروجی به صورت xml برای دانلود آماده است <br /><a href='%s'>بر روی این لینک کلید کنید تا دانلود آغاز شود</a>.<br />فراموش نکنید که بعد از اتمام دانلود <a href='%s'>با کلیک بر روی این لینک آن را حذف کنید</a>");
define('_AM_NEWS_RSS_URL',"آدرس برای RSS feed");
define('_AM_NEWS_NEWSLETTER',"خبرنامه");
define('_AM_NEWS_NEWSLETTER_BETWEEN','انتخاب خبرهای قرار گرفته در سایت بین تاریخ');
define('_AM_NEWS_NEWSLETTER_READY',"فایل خبرنامه برای دانلود آماده است <br /><a href='%s'>بر روی این لینک کلید کنید تا دانلود آغاز شود</a>.<br />فراموش نکنید که بعد از اتمام دانلود <a href='%s'>با کلیک بر روی این لینک آن را حذف کنید</a>");
define('_AM_NEWS_DELETED_OK',"فایل با موفقیت حذف شد");
define('_AM_NEWS_DELETED_PB',"مشکلی در هنگام حذف فایل رخ داد");
define('_AM_NEWS_STATS0','آمار سرفصل‌ها');
define('_AM_NEWS_STATS','آمار');
define('_AM_NEWS_STATS1','نویسنده تک خبر');
define('_AM_NEWS_STATS2','همه');
define('_AM_NEWS_STATS3','آمار خبرها');
define('_AM_NEWS_STATS4','خبرهای بیشتر خوانده شده');
define('_AM_NEWS_STATS5','خبرهای کمتر خوانده شده');
define('_AM_NEWS_STATS6','خبرهای با ارزش بیشتر');
define('_AM_NEWS_STATS7','نویسنده‌هایی که خبرهایشان بیشتر از همه خوانده شده است');
define('_AM_NEWS_STATS8','نویسنده‌هایی که خبرهایشان بیشترین ارزش را کسب کرده است');
define('_AM_NEWS_STATS9','اعضایی که بالاترین همکاری را در ارسال خبر دارند');
define('_AM_NEWS_STATS10','آمار نویسنده‌ها');
define('_AM_NEWS_STATS11',"تعداد خبر فرستاده شده");
define('_AM_NEWS_HELP',"کمک");
define("_AM_NEWS_MODULEADMIN","مدیریت ماژول");
define("_AM_NEWS_GENERALSET","تنظیمات ماژول" );
define('_AM_NEWS_GOTOMOD','برو به ماژول');
define('_AM_NEWS_NOTHING',"متاسفانه چزی برای دانلود وجود ندارد مسیر خود را بررسی کنید");
define('_AM_NEWS_NOTHING_PRUNE',"متاسفانه خبری برای هرس‌شدن وجود ندارد درخواست خود را بررسی کنید");
define('_AM_NEWS_TOPIC_COLOR',"رنگ سرفصل");
define('_AM_NEWS_COLOR',"رنگ");
define('_AM_NEWS_REMOVE_BR',"تبدیل کدهای &lt;br&gt; به خط جدید؟");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>لطفا در صورتی که ورژن ماژول اخبار شما 1.1 یا 1.2.1 است با کلیک بر روی این لینک ماژول را ارتقا دهید !</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER',"سر صفحه");
define('_AM_NEWS_NEWSLETTER_FOOTER',"پا صفحه");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS',"کدهای html  حذف شوند؟");
define('_AM_NEWS_VERIFY_TABLES','تعمیر جدول‌ها');
define('_AM_NEWS_METAGEN',"موتور متا");
define('_AM_NEWS_METAGEN_DESC',"موتورمتا Metagen  سیستمی است که باعث بهتر ایندکس شدن لینک‌های خبری شما در موتورهای جستجو میشود<br />اگر کلمات کلیدی و شرح مطلب را خودتان ننویسید ماژول به طور اتوماتیک آنها را می‌نویسد.");
define('_AM_NEWS_BLACKLIST',"لیست سیاه");
define('_AM_NEWS_BLACKLIST_DESC',"کلمات نوشته شده در این لیست در ساختن کلمات موتور متا استفاده نمی‌شوند");
define('_AM_NEWS_BLACKLIST_ADD',"اضافه‌کردن");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"کلمات را برای اضافه شدن وارد کنید<br />(هر خط یک کلمه)");
define('_AM_NEWS_META_KEYWORDS_CNT',"حداکثر تعداد کلمات‌کلیدی برای ساخته‌شدن توسط موتور متا به صورت اتوماتیک");
define('_AM_NEWS_META_KEYWORDS_ORDER',"چینش کلمات‌کلیدی");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"ساخته شدن با ترتیبی که در متن ظاهر شده‌اند");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"به ترتیبی که بیشتر استفاده شده‌اند");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"به ترتیبی که کمتر استفاده شده‌اند");

?>
