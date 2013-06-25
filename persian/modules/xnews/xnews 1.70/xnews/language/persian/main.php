<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_MA_NW_PRINTER","صفحه مناسب چاپ");
define("_MA_NW_SENDSTORY","پیشنهاد این صفحه");
define("_MA_NW_READMORE","ادامه");
define("_MA_NW_COMMENTS","نظر");
define("_MA_NW_ONECOMMENT","1 نظر");
define("_MA_NW_BYTESMORE","%s کلمه در ادامه متن");
define("_MA_NW_NUMCOMMENTS","%s نظر");
define("_MA_NW_MORERELEASES","خبرهای دیگر از");


//%%%%%%		File Name submit.php		%%%%%
define("_MA_NW_SUBMITNEWS","ارسال خبر برای صفحه اول");
define("_MA_NW_TITLE","عنوان");
define("_MA_NW_TOPIC","دسته");
define("_MA_NW_THESCOOP","متن");
define("_MA_NW_NOTIFYPUBLISH","هنگام انتشار به من خبر بده");
define("_MA_NW_POST","بفرست");
define("_MA_NW_GO","برو!");
define("_MA_NW_THANKS","از نوشته شما سپاس گذاریم."); //submission of news article

define("_MA_NW_NOTIFYSBJCT","نوشته برای سایت من"); // Notification mail subject
define("_MA_NW_NOTIFYMSG","یک نوشته جدید برای صفحه اول سایت اومده."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_MA_NW_NEWSARCHIVES","آرشیو اخبار");
define("_MA_NW_ARTICLES","نوشته‌ها");
define("_MA_NW_VIEWS","بازدید");
define("_MA_NW_DATE","تاریخ");
define("_MA_NW_ACTIONS","کار");
define("_MA_NW_PRINTERFRIENDLY","صفحه مناسب چاپ");

define("_MA_NW_THEREAREINTOTAL"," %s نوشته در کل");

// %s is your site name
define("_MA_NW_INTARTICLE","نوشته جالب در سایت %s");
define("_MA_NW_INTARTFOUND","این یک خبر جالب است که در %s پیدا کردم");

define("_MA_NW_TOPICC","عنوان:");
define("_MA_NW_URL","آدرس:");
define("_MA_NW_NOSTORY","متاسفانه نوشته انتخاب شده وجود ندارد.");

//%%%%%%	File Name print.php 	%%%%%

define("_MA_NW_URLFORSTORY","نشانی این صفحه :");

// %s represents your site name
define("_MA_NW_THISCOMESFROM","نوشته‌ای از %s");

// Added by Hervé
define("_MA_NW_ATTACHEDFILES","فایل‌های پیوست‌شده:");
define("_MA_NW_ATTACHEDLIB","این خبر دارای فایل پیوست شده است");
define("_MA_NW_NEWSSAMEAUTHORLINK","خبرهای فرستاده شده توسط این شخص");
define("_MA_NW_NEWS_NO_TOPICS","متاسفانه سرفصلی برای ارسال خبر وجود ندارد. اول باید یک سرفصل بسازید");
define("_MA_NW_PREVIOUS_ARTICLE","خبر قبلی");
define("_MA_NW_NEXT_ARTICLE","خبر بعدی");
define("_MA_NW_OTHER_ARTICLES","سایر خبرها");

// Added by Hervé in version 1.3 for rating
define("_MA_NW_RATETHISNEWS","ارزش‌گذاری این خبر");
define("_MA_NW_RATEIT","رای دهید!");
define("_MA_NW_TOTALRATE","تمام رای‌ها");
define("_MA_NW_RATINGLTOH","ارزش‌گذاری (از کم به زیاد)");
define("_MA_NW_RATINGHTOL","ارزش‌گذاری (از زیاد به کم)");
define("_MA_NW_RATINGC","ارزش: ");
define("_MA_NW_RATINGSCALE","از 1 تا 10 می‌توانید رای دهید 1 یعنی به درد نخور و 10 یعنی عالی");
define("_MA_NW_BEOBJECTIVE","لطفا منصف باشید. اگر یکی 1 یا 10 بگیرد این ارزش‌یابی مفید نخواهد بود.");
define("_MA_NW_DONOTVOTE","برای نوشته‌های خودتان رای ندهید.");
define("_MA_NW_RATING","ارزش");
define("_MA_NW_VOTE","رای");
define("_MA_NW_NORATING","هیچ عددی انتخاب نشده است");
define("_MA_NW_USERAVG","میانگین ارزش این کاربر");
define("_MA_NW_DLRATINGS","ارزش این خبر (کل رای‌ها: %s)");
define("_MA_NW_ONEVOTE","1 رای");
define("_MA_NW_NUMVOTES","%u رای");		// Warning
define("_MA_NW_CANTVOTEOWN","شما نمی‌توانید به نوشته‌های خود رای دهید.<br />تمام رای‌ها ذخیره و بازبینی می‌شوند");
define("_MA_NW_VOTEDELETED","داده‌های ارزش‌گذاری حذف شد.");
define("_MA_NW_VOTEONCE","لطفا به یک نوشته بیش از یک بار رای ندهید");
define("_MA_NW_VOTEAPPRE","با تشکر از رای شما");
define("_MA_NW_THANKYOU","با تشکر از وقتی که برای رای دادن در سایت %s گذاشتید"); // %s is your site name
define("_MA_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR","نویسنده");
define("_MA_NW_META_DESCRIPTION","شرح Meta (برای موتورهای جستجو)");
define("_MA_NW_META_KEYWORDS","کلمات کلیدی Meta (برای موتورهای جستجو)");
define("_MA_NW_MAKEPDF","از این خبر یک pdf بساز");
define('_MD_POSTEDON',"ارسال شده در تاریخ: ");
define("_MA_NW_AUTHOR_ID","شناسه نویسنده");
define("_MA_NW_POST_SORRY","متاسفانه یا سرفصلی وجود ندارد و یا شما دسترسی به هیچ سرفصلی برای ارسال خبر ندارید. اگر شما وب‌مستر هستید، به صفحه دسترسی‌ها بروید و دسترسی‌ها برای 'ارسال' را تنظیم کنید.");

// Added in v 1.50
define("_MA_NW_LINKS","لینک‌ها");
define("_MA_NW_PAGE","صفحه‌ها");
define("_MA_NW_BOOKMARK_ME","این خبر را در این سایت‌ها بوک مارک کن");
define('_AM_NW_NEWS_TOTAL',"تعداد کل %u خبر");
define('_AM_NW_NEWS_WHOS_WHO',"اسامی ارسال‌کنندگان خبر");
define('_MA_NW_NEWS_LIST_OF_AUTHORS',"در اینجا فهرستی از تمام نویسندگان خبر این سایت را مشاهده می‌کنید، روی نام نویسنده کلیک کنید تا فهرست خبرهای ارسال شده را ببینید");
define('_AM_NW_NEWS_TOPICS_DIRECTORY',"شاخه سرفصل‌ها");
define("_MA_NW_PAGE_AUTO_SUMMARY","صفحه %d : %s");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","ارسال خبر به Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","ارسال خبر به del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","ارسال خبر به Digg");
define("_MA_NW_BOOKMARK_TO_FARK","ارسال خبر به Fark");
define("_MA_NW_BOOKMARK_TO_FURL","ارسال خبر به Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","ارسال خبر به Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","ارسال خبر به Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","ارسال خبر به Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","ارسال خبر به Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","ارسال خبر به یاهو");

// Added in version 1.56
define('_MA_NW_NOTYETSTORY',"متاسفانه خبر انتخاب‌شده شما هنوز منتشر نشده‌است. لطفا بعدا مراجعه و امتحان کنید.");
define('_MA_NW_SELECT_IMAGE',"انتخاب تصویر برای اضافه شدن به خبر");
define('_MA_NW_CURENT_PICTURE',"تصویر فعلی");

// Added in version 1.68
define("_MA_NW_SP",":");
define("_MA_NW_POSTED","فرستاده شده در تاریخ");

// Added in version 1.68 RC1
define("_MA_NW_NO_COMMENT","بدون نظر");
define("_MA_NW_METASIZE","متاسفانه شما نمیتوانید مطالب را به صورت '+len+' در محل ورود متن وارد کنید باید آنها را به طور کامل وارد کنید.");

// Added in version 1.68 RC3
define("_MA_NW_SEO_TOPICS","شاخه ها");
define("_MA_NW_SEO_ARTICLES","مطالب");
define("_MA_NW_SEO_PRINT","چاپ");
define("_MA_NW_SEO_PDF","pdf");
?>
