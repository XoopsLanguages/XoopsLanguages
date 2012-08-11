<?php
// $Id: modinfo.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info

// The name of this module
define("_MI_NEWBB_NAME","انجمن ها (CBB)");

// A brief description of this module
define("_MI_NEWBB_DESC","ماژول انجمن‌های برنامه مدیریت محتوای زوپس");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BLOCK_TOPIC_POST","پاسخ‌های جدید در عنوان‌ها");
define("_MI_NEWBB_BLOCK_TOPIC","عنوان‌های دارای جدیدترین پاسخ");
define("_MI_NEWBB_BLOCK_POST","پاسخ‌های جدید");
define("_MI_NEWBB_BLOCK_AUTHOR","پیام دهندگان");
/*
define("_MI_NEWBB_BNAME2","تاپیک های پر بیننده");
define("_MI_NEWBB_BNAME3","تاپیک های دارای بیشترین پاسخ");
define("_MI_NEWBB_BNAME4","پیام های جدید در انجمن های خصوصی");
define("_MI_NEWBB_BNAME5","جدید ترین عنوان های چسبان");
define("_MI_NEWBB_BNAME6","پیام های جدید");
define("_MI_NEWBB_BNAME7","زنندگان بیشترین عنوان");
define("_MI_NEWBB_BNAME8","زنندگان بیشترین پست");
define("_MI_NEWBB_BNAME9","زنندگان بیشترین خلاصه");
define("_MI_NEWBB_BNAME10","زنندگان بیشترین عنوان های خلاصه");
define("_MI_NEWBB_BNAME11","پیام های جدید همراه با متن");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","صفحه اصلی مدیریت");
define("_MI_NEWBB_ADMENU_CATEGORY","شاخه‌ها");
define("_MI_NEWBB_ADMENU_FORUM","انجمن‌ها");
define("_MI_NEWBB_ADMENU_PERMISSION","دسترسی‌ها");
define("_MI_NEWBB_ADMENU_BLOCK","بلاک‌ها");
define("_MI_NEWBB_ADMENU_ORDER","ترتیب");
define("_MI_NEWBB_ADMENU_SYNC","همزمان کردن انجمن‌ها");
define("_MI_NEWBB_ADMENU_PRUNE","هرس کردن");
define("_MI_NEWBB_ADMENU_REPORT","گزارش‌ها");
define("_MI_NEWBB_ADMENU_DIGEST","خلاصه");
define("_MI_NEWBB_ADMENU_VOTE","نظرسنجی‌ها");



//config options

define("_MI_DO_DEBUG","حالت اشکال زدایی");
define("_MI_DO_DEBUG_DESC","پیام‌های خطا را نشان بده");

define("_MI_IMG_SET","نوع آیکنها");
define("_MI_IMG_SET_DESC","یکی را انتحاب کنید تا از آن در انجمن‌ها استفاده شود");

define("_MI_THEMESET","تنظیم تم");
define("_MI_THEMESET_DESC","عرض ماژول,اگر '"._NONE."' را انتخاب کنید عرض تم سایت مورد استفاده قرار می گیرد");

define("_MI_DIR_ATTACHMENT","آدرس برای قرارگرفتن فایلهای پیوست");
define("_MI_DIR_ATTACHMENT_DESC","مسیر فیزیکی فقط از ریشه زوپس به بعد نوشته می شود و نه قبل از آن، به عنوان مثال الان فایل‌های شما در شاخه  www.yoururl.com/uploads/newbb بارگذاری می شوند و چیزی که باید اینجا وارد شود عبارت است از '/uploads/newbb' بدون گذاشتن '/' در آخر مسیر و تصاویر تمبری شکل در شاخه '/uploads/newbb/thumbs' ذخیره خواهند شد");
define("_MI_PATH_MAGICK","مسیر برای ImageMagick");
define("_MI_PATH_MAGICK_DESC","معمولا '/usr/bin/X11' است. اگر ImageMagicK را نصب نکرده اید این قسمت را خالی بگذارید.");

define("_MI_SUBFORUM_DISPLAY","نوع نمایش زیر انجمن‌ها در صفحه اصلی انجمن‌ها");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","باز");
define("_MI_SUBFORUM_COLLAPSE","فشرده");
define("_MI_SUBFORUM_HIDDEN","مخفی");

define("_MI_POST_EXCERPT","نشان دادن خلاصه پست با بردن موس");
define("_MI_POST_EXCERPT_DESC","طول متن با بردن موس. 0  برای حالتی که چیزی نشان داده نشود.");

define("_MI_PATH_NETPBM","محل برای Netpbm");
define("_MI_PATH_NETPBM_DESC","معمولا '/usr/bin'. ا گر Netpbm را نصب نکرده اید ‌یا می‌خواهید به طور خودکار شناسایی شود این قسمت را خالی بگذارید");

define("_MI_IMAGELIB","کتابخانه تصاویر را برای استفاده انتخاب کنید");
define("_MI_IMAGELIB_DESC","انتخاب کنید که با چه کتابخانه تصاویر تمبری شکل ساخته شوند. برای اینکه به طور خودکار انتخاب شود این قسمت را خالی بگذارید.");

define("_MI_MAX_IMG_WIDTH","حد اکثر عرض فایل‌های تصویری");
define("_MI_MAX_IMG_WIDTH_DESC","حداکثر <strong>عرض</strong> فایل های تصویری بارگذاری شده را که اگر تصویر از آن بزرگتر شد از تصویر تمبری شکل استفاده شود وارد کنید. <br >اگر می‌خواهید تصاویر تمبری شکل شاخته نشوند 0 را وارد کنید.");

define("_MI_MAX_IMAGE_WIDTH","حداکثر عرض قابل قبول که بعد از آن آیکن برای عکس آپلود شده ساخته میشود");
define("_MI_MAX_IMAGE_WIDTH_DESC","حداکثر عرض فایل بارگذاری شده برای ساختن عکس های تمبری شکل. <br >براتی عکسی که عرض آن بیشتر از این مقدار باشد، عکس تمبری شکل ایجاد می شود.");

define("_MI_MAX_IMAGE_HEIGHT","حداکثر طول قابل قبول که بعد از آن آیکن برای عکس آپلود شده ساخته میشود");
define("_MI_MAX_IMAGE_HEIGHT_DESC","حداکثر ارتفاع  فایل بارگذاری شده برای ساختن عکس های تمبری شکل. <br >براتی عکسی که ارتفاع آن بیشتر از این مقدار باشد، عکس تمبری شکل ایجاد می شود.");

define("_MI_SHOW_DIS","شرایط انجمن ها در این قسمت ها نشان بده");
define("_MI_DISCLAIMER","شرایط انجمن ها");
define("_MI_DISCLAIMER_DESC","شرایطی را که میخواهید در انجمن ها در قسمت های که بالا مشخص کرده اید نشان داده شود بنویسید");
define("_MI_DISCLAIMER_TEXT","در انجمن ها تعداد زیادی پیام و اطلاعات زیادی وجود دارد.<br /><br />برای اینکه تعداد پیام های مشابه به حداقل برسد لطفا قبل از زدن پست حتما از امکان جستجو استفاده کنید.");
define("_MI_NONE","هیچ کدام");
define("_MI_POST","پست");
define("_MI_REPLY","پاسخ");
define("_MI_OP_BOTH","هم پست و هم پاسخ");
define("_MI_WOL_ENABLE","نوار افراد آن لاین را در انجمن ها فعال کن");
define("_MI_WOL_ENABLE_DESC","نواری را در زیر انجمن ها نشان می دهد که افراد آن لاین را در هر انجمن مشخص می کند. مدیران و ناظران سایت هم در این نوار با رنگ های مشخص شده در زیر نشان داده می شوند");
//define("_MI_WOL_ADMIN_COL","رنگ مدیر انجمن ها در نوار افراد آن لاین");
//define("_MI_WOL_ADMIN_COL_DESC","رنگی که با آن مدیران انجمن  از بقیه کاربران سایت در نوار افراد آن لاین مشخص می شود");
//define("_MI_WOL_MOD_COL","رنگ ناظر انجمن ها در نوار افراد آن لاین");
//define("_MI_WOL_MOD_COL_DESC","رنگی که با آن ناظران انجمن از بقیه کاربران سایت در نوار افراد آن لاین مشخص می شود");
//define("_MI_LEVELS_ENABLE","Enable HP/MP/EXP Levels Mod");
//define("_MI_LEVELS_ENABLE_DESC","<b>HP</b>  مشخص کننده تعداد متوسط پست های شما در روز است<br><b>MP</b>  مشخص کننده نسبت روز های عضویت شما به تعداد پست های شماست<br><b>EXP</b>هر زمان که پست می زنید اضافه می شود و هنگامی که به 100% رسید یک سطح به شما اضافه شده و این عدد دوباره صفر می شود");
define("_MI_NULL","غیر فعال");
define("_MI_TEXT","متنی");
define("_MI_GRAPHIC","ترسیمی");
define("_MI_USERLEVEL","سطوح مختلف HP/MP/EXP");
define("_MI_USERLEVEL_DESC","<strong>HP</strong> مشخص کننده تعداد متوسط پست های شما در روز است.<br /><strong>MP</strong>  مشخص کننده نسبت روز های عضویت شما به تعداد پست های شماست.<br /><strong>EXP</strong> هر زمان که پست می زنید اضافه می شود و هنگامی که به 100% رسید یک سطح به شما اضافه شده و این عدد دوباره صفر می شود.");
define("_MI_RSS_ENABLE","فعال کردن RSS Feed");
define("_MI_RSS_ENABLE_DESC","فعال کردن RSS Feed, که در زیر می توانید حد اکثر اندازه آن را مشخص کنید");
define("_MI_RSS_MAX_ITEMS","حداکثر تعداد موارد RSS");
define("_MI_RSS_MAX_DESCRIPTION","حداکثر طول متن یک مورد RSS");
define("_MI_RSS_UTF8","اینکد RSS به صورت UTF-8 باشد؟");
define("_MI_RSS_UTF8_DESCRIPTION","اگر 'UTF-8' فعال باشد از آن استفاده می شود وگرنه '"._CHARSET."' استفاده خواهد شد.");
define("_MI_RSS_CACHETIME","زمان کش برای RSS Feed");
define("_MI_RSS_CACHETIME_DESCRIPTION","زمانی که بعد از آن RSS Feed به روز می شود و دوباره ساخته می شود، عدد را به دقیقه وارد کنید.");

define("_MI_MEDIA_ENABLE","فعال کردن Media Features");
define("_MI_MEDIA_ENABLE_DESC","با فعال کردن این گزینه عکس های پیوست شده به پست در پست نشان داده می شوند");
define("_MI_USERBAR_ENABLE","فعال کردن Userbar");
define("_MI_USERBAR_ENABLE_DESC","مشخصات کاربر را در انجمن ها نشان می دهد: profile, PM, ICQ, MSN, etc...");

define("_MI_GROUPBAR_ENABLE","فعال کردن Groupbar");
define("_MI_GROUPBAR_ENABLE_DESC","گروه های را که کاربر در آن ها عضو است در مشخصات کاربر در انجمن ها نشان می دهد");

define("_MI_RATING_ENABLE","فعال کردن تابع ارزش گذاری");
define("_MI_RATING_ENABLE_DESC","اجازه ارزش گذاری به تاپیک ها را می دهد");

define("_MI_VIEWMODE","نوع دیدن پست ها در یک تاپیک");
define("_MI_VIEWMODE_DESC","برای اینکه تنظیمات موجود در هسته زوپس در قسمت تنظیمات کلی برای نشان دادن پست ها بی اثر شود بر روی حالت یک صفحه ای قرار دهید، حالت شاخه ای و هیچکدام باعث می شود که تنظیمات موجود در هسته اعمال شوند.");
define("_MI_COMPACT","فشرده");

define("_MI_MENUMODE","حالت پیشفرض منو");
define("_MI_MENUMODE_DESC","'انتخاب' - گزینه های انتخابی, 'شناور' - در IE ممکن است سرعت پایین باشد, 'کلیک' - به JAVASCRIPT نیاز دارد");

define("_MI_REPORTMOD_ENABLE","گزارش پست به ناظر ارسال شود؟");
define("_MI_REPORTMOD_ENABLE_DESC","کاربر می تواند گزارشی را در مورد یک پست به ناظر ارسال کند");
define("_MI_SHOW_JUMPBOX","پرش  در بین انجمن ها را نشان بده؟");
define("_MI_JUMPBOXDESC","اگر فعال باشد،یک منوی آبشاری به کاربران این امکان را می دهد که از یک انجمن یا عنوان به انجمن دیگری پرش کنند.");

define("_MI_SHOW_PERMISSIONTABLE","جدول دسترسی ها را نشان بده");
define("_MI_SHOW_PERMISSIONTABLE_DESC","اگر بله را انتخاب کنید دسترسی های هر فروم به کابر نشان داده می شود");

define("_MI_EMAIL_DIGEST","پست هایی را که به عنوان خلاصه قرار گرفته اند ایمیل کن");
define("_MI_EMAIL_DIGEST_DESC","مدت زمانی را که پست های خلاصه به کاربران ارسال شوند مشخص کنید");
define("_MI_NEWBB_EMAIL_NONE","ایمیل نزن");
define("_MI_NEWBB_EMAIL_DAILY","روزانه ایمیل بزن");
define("_MI_NEWBB_EMAIL_WEEKLY","هفتگی ایمیل بزن");

define("_MI_SHOW_IP","نشان دادن IP");
define("_MI_SHOW_IP_DESC","اگر بله را انتخاب کنید IP کاربر به ناظر انجمن و مدیران نشان داده می شود");

define("_MI_ENABLE_KARMA","فعال کردن نیاز به کارما");
define("_MI_ENABLE_KARMA_DESC","اینم گزینه به کاربران امکان می دهد برای خوانده شدن پیام هایشان نیاز به داشتن کارمای خاصی را انتخاب کنند");

define("_MI_KARMA_OPTIONS","گزینه های کارما برای پیام");
define("_MI_KARMA_OPTIONS_DESC","برای جدا کردن گزینه ها از ',' استفاده کنید.");

define("_MI_SINCE_OPTIONS","گزینه های زمانی برای 'دیدن از' و 'جستجو'");
define("_MI_SINCE_OPTIONS_DESC","عددهای مثبت به معنی روز و عددهای منفی به معنی ساعت هستند. برای جدا کردن گزینه ها از ',' استفاده کنید.");

define("_MI_SINCE_DEFAULT","گزینه پیشفرض برای 'از زمان'");
define("_MI_SINCE_DEFAULT_DESC","مقدار پیش فرض برای زمانی که کاربر خودش زمانی را انتخاب نکرده است.");

define("_MI_MODERATOR_HTML","اجازه استفاده از کد های HTML");
define("_MI_MODERATOR_HTML_DESC","این گزینه به مدیران و ناظران اجازه می دهد از کد های HTML در اسمی که برای هر عنوان انتخاب می کنند استفاده کنند");

define("_MI_USER_ANONYMOUS","اجازه به کاربران سایت برای زدن پست در حالت مهمان");
define("_MI_USER_ANONYMOUS_DESC","این گزینه به عضوی از سایت که اتگین کرده است این امکان را می دهد که در حال مهمان پست بزند");

define("_MI_ANONYMOUS_PRE","پیشوند (Prefix) برای کاربران مهمان");
define("_MI_ANONYMOUS_PRE_DESC","این یک پیشوند را به ابتدای نام کاربران مهمان اضافه می کند.");

define("_MI_REQUIRE_REPLY","اجازه برای نیازمندی به پاسخ برای خواندن پیام");
define("_MI_REQUIRE_REPLY_DESC","این گزینه به کاربرا ن این امکان را میدهد تا برای دیده شدن پستشان سایر کاربران باید ابتدا باید به پست پاسخ دهند");

define("_MI_EDIT_TIMELIMIT","محدودیت زمانی برای ویرایش پیام");
define("_MI_EDIT_TIMELIMIT_DESC","قرار دادن محدودیت زمانی برای ویرایش پیام ها توسط کاربران سایت به دقیقه");

define("_MI_DELETE_TIMELIMIT","محدودیت زمانی برای حذف پیام");
define("_MI_DELETE_TIMELIMIT_DESC","قرار دادن محدودیت زمانی برای حذف پیام ها توسط کاربران سایت به دقیقه");

define("_MI_POST_TIMELIMIT","ایجاد محدودیت زمانی برای زدن پست های پشت سر هم");
define("_MI_POST_TIMELIMIT_DESC","قرار دادن محدودیت زمانی برای زدن پیام پشت سر هم. به ثانیه، 0 به معنی بدون محدودیت است");

define("_MI_RECORDEDIT_TIMELIMIT","محدودیت زمانی برای ذخیره شدن اطلاعات مربوط به ویرایش شدن پیام");
define("_MI_RECORDEDIT_TIMELIMIT_DESC","قرار دادن محدودیت زمانی برای ذخیره شدن اطلاعات ویرایش پیام ها به دقیقه. 0 به معنی این است که عبارت ویرایش شد در زیر پیام ها اضافه نشود");

define("_MI_SUBJECT_PREFIX","اضافه کردن پیشوند به ابتدای عنوان");
define("_MI_SUBJECT_PREFIX_DESC","قرار دادن یک پیشوند مثلا [حل شده] در ابتدای نام یک عنوان.برای جدا کردن گزینه ها از ',' استفاده کنید،  اگر میخواهید هیچ پیشوندی نداشته باشید فقط NONE را باقی بگذارید.");
define("_MI_SUBJECT_PREFIX_DEFAULT",'<font color="#00CC00">[حل شده]</font>,<font color="#00CC00">[قطعی شده]</font>,<font color="#FF0000">[درخواست شده]</font>,<font color="#FF0000">[گزارش خطا]</font>,<font color="#FF0000">[حل نشده]</font>');

define("_MI_SUBJECT_PREFIX_LEVEL","سطح دسترسی برای گروه هایی که میتوانند پیشوند (Prefix) اضافه کنند");
define("_MI_SUBJECT_PREFIX_LEVEL_DESC","گروه های مجاز را انتخاب کنید");
define("_MI_SPL_DISABLE",'غیر فعال');
define("_MI_SPL_ANYONE",'همه گروه ها');
define("_MI_SPL_MEMBER",'کاربران عضو');
define("_MI_SPL_MODERATOR",'ناظران انجمن');
define("_MI_SPL_ADMIN",'مدیران انجمن');

define("_MI_SHOW_REALNAME","نشان دادن نام واقعی");
define("_MI_SHOW_REALNAME_DESC","نشان دادن نام واقعی به جای شناسه کاربر");

define("_MI_CACHE_ENABLE","فعال کردن Cache");
define("_MI_CACHE_ENABLE_DESC","تعدادی از نتایج میانی را به عنوان سشن ذخیره میکند تا از میزان فراخوانی از پیاگاه داده کم شود.");

define("_MI_QUICKREPLY_ENABLE","فعال کردن پاسخ سریع");
define("_MI_QUICKREPLY_ENABLE_DESC","این گزینه برای فعال کردن پاسخ سریع در زیر هر عنوان است");

define("_MI_POSTSPERPAGE","پست در صفحه");
define("_MI_POSTSPERPAGE_DESC","حداکثر تعداد پیام که در یک صفحه از عنوان نشان داده می شود");

define("_MI_POSTSFORTHREAD","حداکثر تعداد پیام در یک عنوان در حالت شاخه ای");
define("_MI_POSTSFORTHREAD_DESC","اگر تعداد پیام ها در یک عنوان بیشتر از این عدد باشد به طور خود به خود حالت صفحه ای انتخاب خواهد شد");

define("_MI_TOPICSPERPAGE","عنوان در صفحه");
define("_MI_TOPICSPERPAGE_DESC","حداکثر تعداد عنوان که در یک صفحه از انجمن نشان داده می شود");

define("_MI_IMG_TYPE","نوع آیکن ها");
define("_MI_IMG_TYPE_DESC","نوع فایل های تصویری آیکن ها در انجمن را انتخاب کنید.<br />- png: برای سرور های با سرعت بالا؛<br />- gif: برای سرعت های معمولی؛<br />- خودکار: gif برای IE و png برای بقیه مرورگر ها");

define("_MI_PNGFORIE_ENABLE","فعال کردن PNG hack");
define("_MI_PNGFORIE_ENABLE_DESC","هکی که باعث می شود در IE فایل های PNG ترنسپرنس شوند");

define("_MI_FORM_OPTIONS","ویرایشگر انجمن");
define("_MI_FORM_OPTIONS_DESC","گزینه هایی که کاربران می توانند برای انتخاب ویرایشگر در هنگام  پست زدن/ویرایش کردن پیام/پاسخ دادن به پیام داشته باشند posting/editing/replying.");
define("_MI_FORM_COMPACT","فشرده");
define("_MI_FORM_DHTML","DHTML");
define("_MI_FORM_SPAW","Spaw ویرایشگر");
define("_MI_FORM_HTMLAREA","HtmlArea ویرایشگر");
define("_MI_FORM_FCK","FCK ویرایشگر");
define("_MI_FORM_KOIVI","Koivi ویرایشگر");
define("_MI_FORM_TINYMCE","TinyMCE ویرایشگر");

define("_MI_MAGICK","ImageMagick");
define("_MI_NETPBM","Netpbm");
define("_MI_GD1","GD1 Library");
define("_MI_GD2","GD2 Library");
define("_MI_AUTO","خودکار");

define("_MI_WELCOMEFORUM","انجمنی که برای پست خوش آمد گویی عضو جدید به کار می رود");
define("_MI_WELCOMEFORUM_DESC","یک پیام بر مبنای اطلاعات کاربری که ثبت نام کرده است در هنگامی که برای اولین بار وارد انجمن شد ایجاد می شود");

define("_MI_PERMCHECK_ONDISPLAY","بررسی کردن دسترسی ها");
define("_MI_PERMCHECK_ONDISPLAY_DESC","بررسی کردن دسترسی برای ویرایش در صفحه نمایش");

define("_MI_USERMODERATE","فعال کردن نظارت کاربر");
define("_MI_USERMODERATE_DESC","");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','عنوان در انجمن');
define('_MI_NEWBB_THREAD_NOTIFYDSC',' تنظیمات آگهی رسانی که در عنوان هر انجمن به کار میرود ');

define('_MI_NEWBB_FORUM_NOTIFY','انجمن');
define('_MI_NEWBB_FORUM_NOTIFYDSC','تنظیمات آگهی رسانی که در هر انجمن به کار میرود');

define('_MI_NEWBB_GLOBAL_NOTIFY','کلی');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','تنظیمات آگهیرسانی به طور کلی');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','پیام جدید');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','وقتی پیام جدیدی در هر یک از عنوان های انجمن ها زده شد مرا با خبر کن');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','وقتی پیام جدیدی در هر یک از عنوان های انجمن ها زده شد به من ارسال کن');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:پیام جدید در هر عنوان');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','عنوان در انجمن جدید');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','وقتی عنوان جدیدی در هر یک از  انجمن ها زده شد مرا با خبر کن');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','وقتی عنوان جدیدی در هر یک از  انجمن ها زده شد به من ارسال کن');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار: عنوان جدید در هر انجمن');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','انجمن جدید');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','وقتی انجمن جدیدی در هر شاخه ایجاد شد مرا با خبر کن');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','وقتی انجمن جدیدی در هر شاخه ایجاد شد به من ارسال کن');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:انجمن جدید');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','پیام جدید');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','برای هر پست جدید مرا با خبر کن');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','هر پست جدید را برای من ارسال کن');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:پیام جدید');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','پیام جدید');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','هر پیام جدیدی که در همین انجمن زده شد مرا با خبر کن');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','هر پیام جدیدی که در همین انجمن زده شد به من ارسال کن');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خودکار:پیام جدید در انجمن');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','(پیام جدید(متن کامل');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP',' متن کامل هر پیام جدید را به من اطلاع بده ');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','متن کامل هر پیام جدید را به من ارسال کن');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} (اطلاع رسانی خودکار:پیام جدید(متن کامل');

define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY','خلاصه');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP','مرا از عنوان هایی که خلاصه هستند با خبر کن');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC','خلاصه ها را به من اطلاع بده');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} اطلاع رسانی خود کار: پست های خلاصه');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE","تست شاخه ها");
define("_MI_NEWBB_INSTALL_CAT_DESC","شاخه برای تست.");
define("_MI_NEWBB_INSTALL_FORUM_NAME","تست انجمن");
define("_MI_NEWBB_INSTALL_FORUM_DESC","انجمن برای تست.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT","انجمن با موفقیت کار میکند.");
define("_MI_NEWBB_INSTALL_POST_TEXT","
	به انجمن های سایت ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." خوش آمدید.<br />
	میتوانید ثبت نام کرده و سپس مبادرت به ارسال پیام کنید.<br /><br />
	اگر هر سوالی راجع به استفاده از CBB دارید, لطفا سایت پشتیبانی را بازدید کنید <a href=\"http://farsixoops.com/modules/newbb/\" target=\"_blank\" title=\"CBB @ farsixoops\">ماژول انجمن ها</a>.
	");
?>
