<?php
/* Basicly translated by voltan @ www.irxoops.org versions: 0.44 and 0.74
Updated & made necessary changes by stranger @ www.impresscms.ir since version: 0.81
*/
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3forum' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {






// Appended by Xoops Language Checker -GIJOE- in 2007-09-28 15:55:31
define($constpref.'_DEFAULT_OPTIONS','Default checked in post form');
define($constpref.'_DEFAULT_OPTIONSDSC','List checked options separated by comma(,).<br />eg) smiley,xcode,br,number_entity<br />You can add these options: special_entity html attachsig u2t_marked');

// Appended by Xoops Language Checker -GIJOE- in 2007-09-27 16:50:40
define($constpref.'_BODY_EDITOR','ویرایشگر محتوا');
define($constpref.'_BODY_EDITORDSC','WYSIWYG editor will be enabled under only forums allowing HTML. With forums escaping HTML specialchars, xoopsdhtml will be displayed automatically.');

// Appended by Xoops Language Checker -GIJOE- in 2007-09-26 17:55:46
define($constpref.'_ADMENU_POSTHISTORIES','تاریخچه');

// Appended by Xoops Language Checker -GIJOE- in 2007-05-18 17:34:37
define($constpref.'_ADMENU_MYLANGADMIN','زبان');
define($constpref.'_SHOW_BREADCRUMBS','نمایش مسیر ');
define($constpref.'_ANTISPAM_GROUPS','گروه های که باید با محافظ هرزنامه ها چک شوند');
define($constpref.'_ANTISPAM_GROUPSDSC','معمولا همه بلاک ها تنظیم شوند.');
define($constpref.'_ANTISPAM_CLASS','شماره کلاس محافظ هرزنامه');
define($constpref.'_ANTISPAM_CLASSDSC','مقدار پیش فرض "پیشفرض" است . اگر شما محافظ هرزنامه ها را برای مهمان ها خاموش کرده اید, این مورد را خالی بگذارید');

// Appended by Xoops Language Checker -GIJOE- in 2007-03-26 11:39:16
define($constpref.'_ADMENU_MYTPLSADMIN','الگو ها');
define($constpref.'_ADMENU_MYBLOCKSADMIN','بلاک ها / دسترسی ها');
define($constpref.'_ADMENU_MYPREFERENCES','ویژگی ها');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","انجمن ها");

// A brief description of this module
define($constpref."_DESC","ماژول انجمن برای ایمپرس و زوپس");

// Names of blocks for this module (Not all module has blocks)
define($constpref."_BNAME_LIST_TOPICS","مباحث");
define($constpref."_BDESC_LIST_TOPICS","این بلاک برای چند هدف قابل استفاده است. و طبیعتا شما می توانید آن را چندباره استفاده کنید.");
define($constpref."_BNAME_LIST_POSTS","پیام ها");
define($constpref."_BNAME_LIST_FORUMS","انجمن ها");

define($constpref.'_ADMENU_CATEGORYACCESS','دسترسی شاخه ها');
define($constpref.'_ADMENU_FORUMACCESS','دسترسی انجمن ها');
define($constpref.'_ADMENU_ADVANCEDADMIN','تنظیمات');

// configurations
define($constpref.'_TOP_MESSAGE','پیام در صفحه ی اول انجمن');
define($constpref.'_TOP_MESSAGEDEFAULT','<h1 class="d3f_title">صفحه ی اصلی انجمن ها</h1><p class="d3f_welcome">پیام شروع: انجمن و شاخه ی مورد نظر خود را انتخاب کرده و از آن بازدید کنید </p>');
define($constpref.'_ALLOW_HTML','اجازه ی استفاده از HTML ');
define($constpref.'_ALLOW_HTMLDSC','این را بدون اهمیت روشن نکنید! اگر روشن باشد و کاربری اسکریپتش خطرناک باشد، به آن کاربر و رایانه اش آسیب های جدی می رساند.');
define($constpref.'_ALLOW_TEXTIMG','اجازه ی نمایش تصویر خارجی در یک پیام');
define($constpref.'_ALLOW_TEXTIMGDSC','اگر کسی با استفاده از پیام حاوی عکی خارجی [img] به سایت حمله کرد . میتواند آی پی ها و اطلاعات کاربران بازدید کننده از پیام را مشاهده نمایید.');
define($constpref.'_ALLOW_SIG','اجازه ی استفاده از امضا');
define($constpref.'_ALLOW_SIGDSC','');
define($constpref.'_ALLOW_SIGIMG','اجازه ی نمایش تصویر خارجی در امضای کاربران');
define($constpref.'_ALLOW_SIGIMGDSC','اگر کسی با استفاده از پیام حاوی تصویری خارجی [img] به سایت حمله کرد . میتواند آی پی ها و اطلاعات کاربران بازدید کننده از پیام را مشاهده نمایید.');
define($constpref.'_USE_VOTE','استفاده از امکان رای دادن');
define($constpref.'_USE_SOLVED','استفاده از امکان "حل کردن"');
define($constpref.'_ALLOW_MARK','استفاده از امکان نشانه دار کردن ');
define($constpref.'_ALLOW_HIDEUID','اجازه دهید کاربر ثبت نام شده با نام واقعی خود پیام بزند');
define($constpref.'_POSTS_PER_TOPIC','بیشترین تعداد پیام ها در یک گفتگو');
define($constpref.'_POSTS_PER_TOPICDSC','گفتگو به تعداد پیام های انتخاب شده محدود میشود');
define($constpref.'_HOT_THRESHOLD','نمایش مباحث داغ');
define($constpref.'_HOT_THRESHOLDDSC','');
define($constpref.'_TOPICS_PER_PAGE','تعداد مباحث که در هر صفحه از انجمن نمایش داده میشود');
define($constpref.'_TOPICS_PER_PAGEDSC','');
define($constpref.'_VIEWALLBREAK','مباحث هر صفحه در محل تقاطع انجمن ها نمایش داده شوند');
define($constpref.'_VIEWALLBREAKDSC','');
define($constpref.'_SELFEDITLIMIT','محدوده ی زمانی برای ویرایش پیام توسط اعضا ( ثانیه)');
define($constpref.'_SELFEDITLIMITDSC','زمانی  را که کاربر به طور معمولی میتواند پیامش را ویرایش کند انتخاب کنید. با انتخاب عدد 0 کاربر توان ویرایش پیام خود را نخواهد داشت.');
define($constpref.'_SELFDELLIMIT','محدوده ی زمانی برای حذف پیام توسط اعضا (ثانیه)');
define($constpref.'_SELFDELLIMITDSC','زمانی را که کاربر میتواند به طور معمولی پیام خود را پاک کند انتخاب کنید. با انتخاب 0امکان پاک کردن پیام توسط کاربر را بگیرید. در هر صورت پیام های اصلی پاک نخواهد شد.');
define($constpref.'_CSS_URI','آدرس فایل های CSS این ماژول');
define($constpref.'_CSS_URIDSC','پچ های وابسته و مطلق قابل تنظیم. پیشفرض: index.css');
define($constpref.'_IMAGES_DIR','شاخه فایل های تصویری');
define($constpref.'_IMAGES_DIRDSC','پچ های وابسته در شاخه ماژول  تنظیم شوند . پیشفرض: images');
define($constpref.'_ANONYMOUS_NAME','نام کاربر مهمان');
define($constpref.'_ANONYMOUS_NAMEDSC','');
define($constpref.'_ICON_MEANINGS','آیکن های پیام ها');
define($constpref.'_ICON_MEANINGSDSC','همه ی آیکن ها را تعیین کنید. هر کدوم از نام ها را با (|) از بقیه جدا کنید. نام اولین تصویر مرتبط "posticon0.gif" است.');
define($constpref.'_ICON_MEANINGSDEF','هیچکدام|معمولی|ناراحت|خوشحال|زیادش کن|کمش کن|معمولی|سوال');
define($constpref.'_GUESTVOTE_IVL','رای دادن مهمان ها');
define($constpref.'_GUESTVOTE_IVLDSC','با انتخاب صفر امکان رای دادن مهمان ها غیر فعال میشود. با انتخاب  عدد های دیگر زمانی را که هر IP میتواند رای دهد ( ثانیه) مشخص کنید.');



// Notify Categories
define($constpref.'_NOTCAT_TOPIC', 'این گفتگو'); 
define($constpref.'_NOTCAT_TOPICDSC', 'اطلاع در مورد هدف این گفتگو');
define($constpref.'_NOTCAT_FORUM', 'این انجمن'); 
define($constpref.'_NOTCAT_FORUMDSC', 'اطلاع در مورد هدف این انجمن');
define($constpref.'_NOTCAT_CAT', 'این شاخه');
define($constpref.'_NOTCAT_CATDSC', 'اطلاع در مورد هدف این شاخه');
define($constpref.'_NOTCAT_GLOBAL', 'این ماژول');
define($constpref.'_NOTCAT_GLOBALDSC', 'اطلاع در مورد هدف این ماژول');

// Each Notifications
define($constpref.'_NOTIFY_TOPIC_NEWPOST', 'پیام جدید در گفتگو');
define($constpref.'_NOTIFY_TOPIC_NEWPOSTCAP', 'وقتی پیام جدیدی  در این گفتگو خورد مرا با خبر کن.');
define($constpref.'_NOTIFY_TOPIC_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}:{TOPIC_TITLE} پیام جدید در گفتگو');

define($constpref.'_NOTIFY_FORUM_NEWPOST', 'پیام جدید در انجمن');
define($constpref.'_NOTIFY_FORUM_NEWPOSTCAP', 'وقتی پیام جدیدی در این انجمن زده شد مرا با خبر کن');
define($constpref.'_NOTIFY_FORUM_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}:{FORUM_TITLE} پیام جدید در انجمن');

define($constpref.'_NOTIFY_FORUM_NEWTOPIC', 'گفتگو جدید در این انجمن');
define($constpref.'_NOTIFY_FORUM_NEWTOPICCAP', 'وقتی گفتگو جدیدی در این انجمن باز شد مرا با خبر کن.');
define($constpref.'_NOTIFY_FORUM_NEWTOPICSBJ', '[{X_SITENAME}] {X_MODULE}:{FORUM_TITLE} گفتگو جدید در انجمن');

define($constpref.'_NOTIFY_CAT_NEWPOST', 'پیام جدید در این شاخه');
define($constpref.'_NOTIFY_CAT_NEWPOSTCAP', 'وقتی پیام جدیدی در این شاخه زده شد مرا با خبر کن .');
define($constpref.'_NOTIFY_CAT_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} پیام جدید در شاخه');

define($constpref.'_NOTIFY_CAT_NEWTOPIC', 'گفتگو جدید در این شاخه');
define($constpref.'_NOTIFY_CAT_NEWTOPICCAP', 'وقتی گفتگو جدیدی در این شاخه زده شد مرا با خبر کن.');
define($constpref.'_NOTIFY_CAT_NEWTOPICSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} گفتگو جدید در شاخه');

define($constpref.'_NOTIFY_CAT_NEWFORUM', 'انجمن جدید در این شاخه');
define($constpref.'_NOTIFY_CAT_NEWFORUMCAP', 'وقتی انجمن جدیدی در این شاخه زده شد مرا با خبر کن');
define($constpref.'_NOTIFY_CAT_NEWFORUMSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} انجمن جدید در شاخه');

define($constpref.'_NOTIFY_GLOBAL_NEWPOST', 'پیام جدید در این ماژول');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTCAP', 'وقتی پیام جدیدی در این ماژول خورد مرا با خبر کن');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}: پیام جدید');

define($constpref.'_NOTIFY_GLOBAL_NEWTOPIC', 'گفتگو جدید در این ماژول');
define($constpref.'_NOTIFY_GLOBAL_NEWTOPICCAP', 'وقتی گفتگو جدیدی در این ماژول خورد مرا با خبر کن');
define($constpref.'_NOTIFY_GLOBAL_NEWTOPICSBJ', '[{X_SITENAME}] {X_MODULE}: گفتگو جدید');

define($constpref.'_NOTIFY_GLOBAL_NEWFORUM', 'انجمن جدید در این ماژول');
define($constpref.'_NOTIFY_GLOBAL_NEWFORUMCAP', 'وقتی انجمن جدیدی در این ماژول زده شد مرا با خبر کن');
define($constpref.'_NOTIFY_GLOBAL_NEWFORUMSBJ', '[{X_SITENAME}] {X_MODULE}:انجمن جدید');

define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULL', 'پیام جدید (متن کامل)');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULLCAP', 'هر پیام جدیدی را به من اطلاع بده (تمام پیام را در پیام بنویس).');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULLSBJ', '[{X_SITENAME}] {POST_TITLE}');
define($constpref.'_NOTIFY_GLOBAL_WAITING', 'بتازگی، درحال انتظار');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCAP', 'وقتی یک پیام منتظر تایید است اطلاع بده . فقط برای مدیر');
define($constpref.'_NOTIFY_GLOBAL_WAITINGSBJ', '[{X_SITENAME}] {X_MODULE}: New waiting');

}

?>