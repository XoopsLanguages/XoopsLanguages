<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NW_NAME','اخبار ');

// A brief description of this module
define('_MI_NW_DESC','برای ساختن بخش خبری پیشرفته کاربران می‌توانند خبر ارسال کنند و نظر دهند.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NW_BNAME1','سرفصل‌های اخبار');
define('_MI_NW_BNAME3','خبر مهم امروز');
define('_MI_NW_BNAME4','سر تیتر اخبار');
define('_MI_NW_BNAME5','اخبار جدید');
define('_MI_NW_BNAME6','مدیریت اخبار');
define('_MI_NW_BNAME7','جابجایی بین عناوین');

// Sub menus in main menu block
define('_MI_NW_SMNAME1','ارسال خبر');
define('_MI_NW_SMNAME2','آرشیو');

// Names of admin menu items
define('_MI_NW_ADMENU2','مدیریت سرفصل‌ها');
define('_MI_NW_ADMENU3','نوشتن/ویرایش خبر');
define('_MI_NW_GROUPPERMS','دسترسی برای دیدن/ارسال/تایید اخبار');
// Added by Hervé for prune option
define('_MI_NW_PRUNENEWS','هرس‌کردن اخبار (prune)');
// Added by Hervé
define('_MI_NW_EXPORT','خروجی اخبار (export)');

// Title of config items
define('_MI_NW_STORYHOME','تعداد خبرهایی را که درصفحه نشان داده می‌شوند انتخاب کنید');
define('_MI_NW_NOTIFYSUBMIT','بله را انتخاب کنید تا پیام آگهی‌رسانی بعد از ارسال خبر به مدیر فرستاده شود');
define('_MI_NW_DISPLAYNAV','بله را انتخاب کنید تا navigation box در بالای صفحه نشان داده شود');
define('_MI_NW_AUTOAPPROVE','تایید خودکار خبرها بدون نیاز به بررسی مدیر؟');
define("_MI_NW_ALLOWEDSUBMITGROUPS","گروه‌هایی که می‌توانند خبر ارسال کنند");
define("_MI_NW_ALLOWEDAPPROVEGROUPS","گروه‌هایی که می‌توانند خبرها را تایید کنند");
define("_MI_NW_NEWSDISPLAY","ساختار نشان دادن اخبار");
define("_MI_NW_NAMEDISPLAY","نام نویسنده");
define("_MI_NW_COLUMNMODE","ستون‌ها");
define("_MI_NW_STORYCOUNTADMIN","تعداد خبرهای جدیدی که در صفحه مدیریت نشان داده می‌شود: ");
define('_MI_NW_UPLOADFILESIZE','حداکثر حجم فایل مجاز برای بارگذاری (کیلوبایت) 1048576 = 1 مگابایت');
define("_MI_NW_UPLOADGROUPS","گروه‌های مجاز برای بارگذاری");

// Description of each config items
define('_MI_NW_STORYHOMEDSC','');
define('_MI_NW_NOTIFYSUBMITDSC','');
define('_MI_NW_DISPLAYNAVDSC','');
define('_MI_NW_AUTOAPPROVEDSC','');
define("_MI_NW_ALLOWEDSUBMITGROUPSDESC","گروه‌های انتخاب‌شده می‌توانند خبر ارسال کنند");
define("_MI_NW_ALLOWEDAPPROVEGROUPSDESC","گروه‌های انتخاب‌شده می‌توانند خبر تایید کنند");
define("_MI_NW_NEWSDISPLAYDESC","نمایش به شیوه مرسوم (classic) خبرها را بر اساس تاریخ انتشار نمایش می‌دهد. نمایش از روی سرفصل (by topic) خبرها رابر اساس سرفصل نشان می‌دهد به طوری که آخرین خبر هر سرفصل به طور کامل و بقیه خبرها در آن سرفصل به صورت لینک در زیر آن نمایش داده می‌شوند.");
define('_MI_NW_ADISPLAYNAMEDSC','چگونگی نمایش نام نویسنده خبر را انتخاب کنید.');
define("_MI_NW_COLUMNMODE_DESC","می‌توانید تعداد ستون‌هایی را که برای نمایش اخبار استفاده می‌شود انتخاب کنید");
define("_MI_NW_STORYCOUNTADMIN_DESC","");
define("_MI_NW_UPLOADFILESIZE_DESC","");
define("_MI_NW_UPLOADGROUPS_DESC","گروه‌هایی را که می‌توانند فایل بارگذاری کنند انتخاب کنید");

// Name of config item values
define("_MI_NW_NEWSCLASSIC","مرسوم (خبرهای پشت سر هم)");
define("_MI_NW_NEWSBYTOPIC","بر اساس سرفصل (by topic)");
define("_MI_NW_DISPLAYNAME1","شناسه کاربری");
define("_MI_NW_DISPLAYNAME2","نام واقعی");
define("_MI_NW_DISPLAYNAME3","نویسنده را نشان نده");
define("_MI_NW_UPLOAD_GROUP1","ارسال‌کننده‌ها و تاییدکننده‌ها");
define("_MI_NW_UPLOAD_GROUP2","فقط تاییدکننده‌ها");
define("_MI_NW_UPLOAD_GROUP3","غیر‌فعال کردن امکان بارگذاری فایل");

// Text for notifications
define('_MI_NW_GLOBAL_NOTIFY','کلی');
define('_MI_NW_GLOBAL_NOTIFYDSC','تنظیمات اطلاع‌رسانی اخبار');

define('_MI_NW_STORY_NOTIFY','نوشته');
define('_MI_NW_STORY_NOTIFYDSC','تنظیمات اطلاع‌رسانی مورد استفاده در همین فروم');

define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFY','عنوان جدید');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYCAP','وقتی یک عنوان جدید ایجاد شد مرا با خبر کن');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYDSC','آگهی‌رسانی برای ساخته شدن عنوان جدید');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع‌رسانی خودکار : موضوع حبری جدید');

define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFY','خبر جدید ارسال شده');       
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYCAP','هر خبر جدیدی که ارسال شد مرا با خبر کن');                           
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYDSC','آگهی‌رسانی برای ارسال یک خبر جدید');                
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع‌رسانی خودکار:خبر جدید ارسال شده');                              

define('_MI_NW_GLOBAL_NEWSTORY_NOTIFY','خبر جدید');       
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYCAP','هر خبر جدیدی در سایت قرار گرفت مرا با خبر کن');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYDSC','آگهی‌رسانی برای قرار گرفتن یک خبر جدید در سایت');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع‌رسانی خودکار:خبر جدید');                              

define('_MI_NW_STORY_APPROVE_NOTIFY','خبر تایید شده');
define('_MI_NW_STORY_APPROVE_NOTIFYCAP','هر خبری که تایید شد مرا با خبر کن');
define('_MI_NW_STORY_APPROVE_NOTIFYDSC','آگهی‌رسانی برای خبر تایید شده');
define('_MI_NW_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع‌رسانی خودکار:خبر تایید شده');

define('_MI_NW_RESTRICTINDEX','سرفصل‌های خبری را محدود به صفحه اصلی خبر کن؟');
define('_MI_NW_RESTRICTINDEXDSC','اگر روی بله باشد کاربر فقط خبرها را در صفحه اصلی سرفصل خواهد دید و در صورتی می‌توانند یک خبر را به طور کامل ببینند که دسترسی داشته باشند');

define('_MI_NW_NEWSBYTHISAUTHOR','همه خبرهای ارسال شده از طرف: ');
define('_MI_NW_NEWSBYTHISAUTHORDSC','اگر این گزینه را روی بله بگذارید، لینک  \'خبرهای این نویسنده\' قابل مشاهده می‌شود');

define('_MI_NW_PREVNEX_LINK','لینک قبلی و بعدی را نشان بده؟');
define('_MI_NW_PREVNEX_LINK_DESC','وقتی این گزینه روی \'بله\' باشد، دو لینک جدید زیر هر خبر نمایش داده می‌شود. یکی از لینک‌ها برای رفتن به خبر بعدی و دیگری برای رفتن به خبر قبلی است بر اساس تاریخ انتشار خبر');
define('_MI_NW_SUMMARY_SHOW','نشان دادن جدول خلاصه خبر؟');
define('_MI_NW_SUMMARY_SHOW_DESC','وقتی شما از این گزینه استفاده می‌کنید، چند لینک قابل دسترسی از خبرهای جدید در زیر هر خبر نمایش داده می‌شوند');
define('_MI_NW_AUTHOR_EDIT','اجازه به نویسنده خبر برای ویرایش آن؟');
define('_MI_NW_AUTHOR_EDIT_DESC','با این گزینه، نویسنده خبر می‌تواند خبر ارسالی خود را ویرایش کند.');
define('_MI_NW_RATE_NEWS','فعال‌کردن ارزش‌یابی؟');
define('_MI_NW_TOPICS_RSS','فعال‌کردن RSS برای هر سرفصل؟');
define('_MI_NW_TOPICS_RSS_DESC',"وقتی شما این گزینه را روی 'بله' می‌گذارید بخش خروجی تغذیه‌کننده‌های RSS برای تمام سرفصل‌های خبری فعال می‌شود");
define('_MI_NW_DATEFORMAT',"فرمت تاریخ");
define('_MI_NW_DATEFORMAT_DESC',"لطفا برای کسب اطلاعات بیشتر در باره چگونگی انتخاب حالت‌های مختلف به این راهنمای php (http://fr.php.net/manual/en/function.date.php) مراجعه کنید. توجه، اگر شما چیزی تایپ نکنید حالت پیش‌فرض تاریخ نمایش داده می‌شود");
define('_MI_NW_META_DATA',"فعال‌کردن متاها (شرح و کلمات‌کلیدی) ؟");
define('_MI_NW_META_DATA_DESC',"اگر این گزینه را روی 'بله' بگذارید تایید‌کننده‌ها می‌توانند شرح‌ها و کلمات‌کلیدی را خود وارد نمایند.");
define('_MI_NW_BNAME8','خبرهای تصادفی');
define('_MI_NW_NEWSLETTER','خبرنامه');
define('_MI_NW_STATS','آمار');
define("_MI_NW_FORM_OPTIONS","انتخاب ویرایشگر");
define("_MI_NW_FORM_COMPACT","فشرده");
define("_MI_NW_FORM_DHTML","DHTML");
define("_MI_NW_FORM_SPAW","Spaw ویرایشگر");
define("_MI_NW_FORM_HTMLAREA","HtmlArea ویرایشگر");
define("_MI_NW_FORM_FCK","FCK ویرایشگر");
define("_MI_NW_FORM_KOIVI","Koivi ویرایشگر");
define("_MI_NW_FORM_OPTIONS_DESC","لطفا ویرایشگر متن خود را انتخاب کنید. اگر شما نصب 'ساده' دارید (e.g شما فقط از ویرایشگر های کلاسیک هسته زوپس استفاده می‌کنید، که در بسته استاندارد زوپس قرار دارند)، شما فقط میتوانید DHTML و Compact را انتخاب کنید");
define("_MI_NW_KEYWORDS_HIGH","برجسته‌کردن کلمات‌کلیدی؟");
define("_MI_NW_KEYWORDS_HIGH_DESC","اگر شما از این گزینه استفاده کنید، کلمات کلیدی جستجو‌شده در هر خبر برجسته خواهد شد");
define("_MI_NW_HIGH_COLOR","رنگ مورد استفاده برای برجسته‌کردن کلمات‌کلیدی؟");
define("_MI_NW_HIGH_COLOR_DES","فقط وقتی از این گزینه استفاده کنید که گزینه قبلی (برجسته‌کردن کلمات‌کلیدی) را فعال کرده‌باشید");
define("_MI_NW_INFOTIPS","طول tooltip");
define("_MI_NW_INFOTIPS_DES","اگر از این گزینه استفاده کنید, لینک های مرتبط با اخبار شامل اولین حرف خبر میشوند. اگر این گزینه را بر روی 0 قرار دهید راهنمایی اطلاعات خالی می ماند.");
define("_MI_NW_SITE_NAVBAR","استفاده از نویگیشن بار موزیلا یا اوپرا؟");
define("_MI_NW_SITE_NAVBAR_DESC","اگر این گزینه را روی بله بگذارید بازدیدکنندگان سایت شما می‌توانند برای مرور سایت شما از این‌ها استفاده کنند.");
define("_MI_NW_TABS_SKIN","از پوسته‌های که در تب‌ها می‌خواهید استفاده کنید");
define("_MI_NW_TABS_SKIN_DESC","این پوسته در تمام بلاک‌هایی که تب دارند استفاده می‌شود");
define("_MI_NW_SKIN_1","Bar Style");
define("_MI_NW_SKIN_2","Beveled");
define("_MI_NW_SKIN_3","Classic");
define("_MI_NW_SKIN_4","Folders");
define("_MI_NW_SKIN_5","MacOs");
define("_MI_NW_SKIN_6","Plain");
define("_MI_NW_SKIN_7","Rounded");
define("_MI_NW_SKIN_8","ZDnet style");

// Added in version 1.50
define('_MI_NW_BNAME9','بایگانی‌ها');
define("_MI_NW_FORM_TINYEDITOR","ویرایشگر TinyEditor");
define("_MI_NW_FOOTNOTES","لینک‌های داخل خبر را به صورت قابل چاپ نمایش دهد؟");
define("_MI_NW_DUBLINCORE","فعال‌کردن موتور داده Dublin Core?");
define("_MI_NW_DUBLINCORE_DSC","برای اطلاعات بیشتر, <a href='http://dublincore.org/'>این لینک را بزنید</a>");
define("_MI_NW_BOOKMARK_ME"," نمایش گزینه 'این خبر را در این سایت ها بوک مارک کن' در بلاک ؟");
define("_MI_NW_BOOKMARK_ME_DSC","این بلاک در صفحه نمایش خبر قرار می‌گیرد");
define("_MI_NW_FF_MICROFORMAT","فعال‌کردن خلاصه‌های ریز در مرورگر فایرفاکس 2");
define("_MI_NW_FF_MICROFORMAT_DSC","برای اطلاعات بیشتر <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>این صفحه</a> را ببینید.");
define("_MI_NW_WHOS_WHO","اسامی ارسال‌کنندگان خبر");
define("_MI_NW_METAGEN","موتور متا");
define("_MI_NW_TOPICS_DIRECTORY","شاخه سرفصل‌ها");
define("_MI_NW_ADVERTISEMENT","تبلیغات");
define("_MI_NW_ADV_DESCR","یک متن یا کد جاوا اسکریپت را در اینجا وارد کنید تا در هر خبر نمایش یابد");
define("_MI_NW_MIME_TYPES","Mime Type های مجاز برای بارگذاری فایل را وارد کنید (هر کدام را در یک خط بنویسید)");
define("_MI_NW_ENHANCED_PAGENAV","استفاده از صفحه‌گذاری پیشرفته؟");
define("_MI_NW_ENHANCED_PAGENAV_DSC","با استفاده از این گزینه شما می‌توانید در خبر خود صفحات مختلف داشته باشید و هر صفحه دارای یک عنوان مستقل مربوط به خود است. این صفحه را باید به این صورت بنویسید: [pagrebreak:عنوان صفحه جدید]،لینک صفحات در یک منوی بازشونده نشان داده می‌شوند با استفاده از تگ [summary] می‌توانید خلاصه‌ای از صفحات را در ابتدای متن داشته باشید. توجه کنید که داخل عنوان صفحه از [ یا ] استفاده نکنید.");

// Added in version 1.54
define('_MI_NW_CATEGORY_NOTIFY','شاخه');
define('_MI_NW_CATEGORY_NOTIFYDSC','گزینه‌های آگاهی‌رسانی در شاخه فعلی قابل استفاده باشد');

define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFY','خبر جدید فرستاده شد');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYCAP','من را آگاه‌کن وقتی هر خبر جدیدی در این شاخه ارسال شد.');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYDSC','وقتی یک خبر جدید در این شاخه ارسال شد مرا با خبر کن.');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع‌رسانی خودکار:خبر جدید ارسال شده');

// Added in version 1.63
define('_MI_NW_TAGS',"استفاده از سیستم تگ گذاری؟");
define('_MI_NW_TAGS_DSC',"این سیستم بر پایه ماژول Tag ساخته شده توسط phppp کار میکند");
define("_MI_NW_BNAME10","توده تگ");
define("_MI_NW_BNAME11","تگ های برتر");
define("_MI_NW_INTRO_TEXT","متنی را که میخواهید در صفحه ارسال خبر نمایش داده شود وارد کنید");
define("_MI_NW_IMAGE_MAX_WIDTH","بیشترین اندازه عرض تصویر بعد از تغییر ابعداد");
define("_MI_NW_IMAGE_MAX_HEIGHT","بیشترین اندازه ارتفاع تصویر بعد از تغییر ابعداد");

// Added in version 1.67
define("_MI_NW_CLONER","تکثیر");

define("_MI_NW_LATESTNEWS_BLOCK","بلاک آخرین اخبار");

// Added in version 1.68 BETA
define("_MI_NW_TOPICDISPLAY","نمایش سرفصل ها ");
define("_MI_NW_TOPICDISPLAYDESC","این گزینه نمایش عنوان سرفصل اخبار در عنوان هدر را فعال و غیر فعال میکند");

define("_MI_NW_SEOENABLE","فعال کردن SEO ");
define("_MI_NW_SEOENABLEDESC","این بخش قابلیت SEO را فعال/غیر فعال میکند.<br /> اگر <b>htaccess</b> انتخاب شود لینک به صورت زیر است: <br /> http://your.site.com/<b>xnews</b>/topics.1/your-topic-title.html <br /> اگر <b> path-info </b> انتخاب شود لینک به صورت زیر است: <br /> http://your.site.com/modules/xnews/index.php/topics.1/your-topic-title.html");

// Added in version 1.68 RC1
define("_MI_NW_EXTEND_META_DATA","گسترش متا داده های ورودی");
define("_MI_NW_EXTEND_META_DATA_DESC","این قسمت بین متن و محل متن قرار میگیرد تا کاربرا بتواند گسترش متا داده های ورودی را مدیریت کند.<br /> برای هر دو بخش توضیع و کلمات کلیدی.");

define("_MI_NW_NONE","نمایش نده");
define("_MI_NW_TOPONLY","فقط در بالا");
define("_MI_NW_BOTTOMONLY","فقط در پایین");
define("_MI_NW_BOTH","هر دو");
define("_MI_NW_DISPLAYLINKICNS","نمایش آیکن ها");
define("_MI_NW_DISPLAYLINKICNSDESC","نمایش آیکن چاپ و پی دی اف و تماس با دوستان در بالا یا پایین یا هر دو قسمت خبر");

define("_MI_NW_SEOPATH","مسیر SEO");
define("_MI_NW_SEOPATHDESC","میتوانید عنوانی برای لینک SEO در هر دو روش <b>htaccess</b> و <b>path-info</b> انتخاب کنید. <br /> اگر این بخش را خالی بگذارید لینک به صورت زیر است: <br /> http://your.site.com/topics.1/your-topic-title.html <br /> اگر عبارت <b>news</b> را وارد کنید لینک به صورت زیر میشود: <br /> http://your.site.com/<b>news</b>/topics.1/your-topic-title.html <br /><br /> <b>کارکتر های a-z و منها قابل قبول است . مثال : news-of-day</b>");
define("_MI_NW_SEOLEVEL","سطح SEO");
define("_MI_NW_SEOLEVELDESC","شما میتوایند انتخاب کنید که htaccess را در شاخه اصلی زوپس داشته باشید یا هر ماژول. <br /> ابن تنظیم ظاهر آدرس را تغییر میدهد . <br /> برپایه هسته: <br /> http://your.site.com/news/topics.1/your-topic-title.html <br /> برپایه ماژول: <br /> http://your.site.com/modules/xnews/news.topics.1/your-topic-title.html<br /><br /> این تنظیم فقط در حالت htaccess کار میکند و htaccess باید متناسب با این روش نصب شده باشد.");
define("_MI_NW_MODULE_LEVEL","برپایه ماژول");
define("_MI_NW_ROOT_LEVEL","برپایه هسته");

//ADDED wishcraft 1.68 RC3
define("_MI_NW_SEOENDOFURL","انتهای URL");
define("_MI_NW_SEOENDOFURL_DESC","پسوند فایل ها برای فایل های HTML");
define("_MI_NW_SEOENDOFURLRSS","انتهای URL");
define("_MI_NW_SEOENDOFURLRSS_DESC","پسوند فایل ها برای صفحات RSS");
define("_MI_NW_SEOENDOFURLPDF","انتهای URL");
define("_MI_NW_SEOENDOFURLPDF_DESC","پسوند فایل ها برای فایل های PDF");
?>