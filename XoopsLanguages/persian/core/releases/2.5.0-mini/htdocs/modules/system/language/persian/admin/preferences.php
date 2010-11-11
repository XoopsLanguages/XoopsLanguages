<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fa
 * _CHARSET     UTF-8
 * @version     $Id$
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN", "ویژگی‌ها");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL", "General Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS", "User Info Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER", "Meta Tags and Footer");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR", "Word Censoring Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH", "Search Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER", "Mail Setup");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION", "Authentication Options");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS", "<ul><li>مدیریت تمام تنظیمات وب سایت.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION", "A faire");
*/
define("_MD_AM_SITEPREF","ویژگی‌های سایت");
define("_MD_AM_SITENAME","عنوان سایت");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN","شعار برای سایت شما");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML","پست‌الکترونیکی مدیر سایت");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE","زبان پیش فرض");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE","ماژول برای صفحه‌ی اول");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE","هیچ‌کدام");
define("_MD_AM_SERVERTZ","منطقه‌ی زمانی کارگزار");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ","منطقه‌ی زمانی پیش‌فرض");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME","قالب پیش‌فرض");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET","انتخاب قالب");
define("_MD_AM_CUSTOM_REDIRECT", "استفاده از ریدایرکشن jGrowl");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "تغییر ریدایکشن قدیمی با سیستم jQuery");
define("_MD_AM_ANONNAME","نام برای اعضای نا‌شناس (مهمان)");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS","حداقل مقدار نویسه‌ی مجاز برای واژه‌ی رمز");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY","هنگامی که عضو جدیدی در سایت ثبت شد توسط پست‌الکترونیکی به مدیر سایت اطلاع داده شود؟");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE","اجازه به اعضا برای حذف عضویت خود؟");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG","نمایش تصویر در حال بارگیری ؟");
define("_MD_AM_USEGZIP","استفاده از فشرده‌سازی gzip؟");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL","انتخاب سطح سخت‌گیری (strictness) برای شناسه‌ی کاربری در هنگام عضویت");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT","سخت (فقط اعداد و حرف انگلیسی)");
define("_MD_AM_MEDIUM","متوسط");
define("_MD_AM_LIGHT","سبک (قابل استفاده برای زبان‌های دو بایتی مثل فارسی)");
define("_MD_AM_USERCOOKIE","نام برای کوکی عضو");
define("_MD_AM_USERCOOKIEDSC","این کوکی فقط شامل شناسه‌ی کاربری عضو است که اگر عضو، گزینه‌ی نگه‌داری شناسه‌ی کاربری به مدت یک سال را انتخاب‌کرده باشد در هر بار ورود به سایت شناسه‌ی وی در محل ورود نوشته می‌شود");
define("_MD_AM_USEMYSESS","استفاده از نشست‌های سفارشی");
define("_MD_AM_USEMYSESSDSC","بله را انتخاب کنید تا نشست‌های سفارشی مقدار بگیرند");
define("_MD_AM_SESSNAME","نام نشست");
define("_MD_AM_SESSNAMEDSC","نام نشست (فقط وقتی فعال است که 'استفاده از نشست‌های سفارشی' روی بله باشد)");
define("_MD_AM_SESSEXPIRE","انقضای نشست‌‌ها");
define("_MD_AM_SESSEXPIREDSC","بیشترین مقداری که یک نشست می‌تواند فعال بماند به دقیقه (فقط وقتی فعال است که 'استفاده از نشست‌های سفارشی' روی بله باشد. فقط وقتی کار می‌کند که از php ۴.۲.۰  به بالا استفاده شود.)");
define("_MD_AM_BANNERS","فعال‌کردن تبلیغات بنر‌ها؟");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP","آدرس IP شما");
define("_MD_AM_MYIPDSC","این IP در شمارش دیده شدن بنرها محاسبه نم‌یشود");
define("_MD_AM_ALWDHTML","کد‌های HTML در همه‌ی پستها فعال شود");
define("_MD_AM_INVLDMINPASS","ورودی غیر مجاز برای حد‌اقل نویسه‌ی واژه‌ی رمز");
define("_MD_AM_INVLDUCOOK","ورودی غیر مجاز برای نام کوکی کاربر.");
define("_MD_AM_INVLDSCOOK","ورودی غیر مجاز برای نام نشست کاربر.");
define("_MD_AM_INVLDSEXP","ورودی غیر مجاز برای زمان انقضای نشست.");
define("_MD_AM_ADMNOTSET","پست‌الکترونیکی مدیر سایت نوشته نشده است.");
define("_MD_AM_YES","بله");
define("_MD_AM_NO","نه");
define("_MD_AM_DONTCHNG","تغییر نکرد!");
define("_MD_AM_REMEMBER","توجه کنید که chmod این فایل را روی 666 قرار دهید تا سیستم بتواند درون آن بنویسد.");
define("_MD_AM_IFUCANT","اگر شما نمی‌توانید دسترسی را تغییر دهید شما باید مابقی فایل را به صورت دستی ویرایش کنید .");


define("_MD_AM_COMMODE","حالت نمایش پیشفرض پست‌ها");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER","نوع قرار گیری پیشفرض پست‌ها");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML","اجازه استفاده از کد‌های html در پست‌ها؟");
define("_MD_AM_DEBUGMODE","حالت خطا‌گیری");
define("_MD_AM_DEBUGMODEDSC","چندین حالت مختلف برای خطا‌گیری. در یک سایت در حال اجرا باید خاموش باشد");
define("_MD_AM_AVATARALLOW","اجازه به اعضا برای بارگذاری تصویر (avatar) خود؟");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP","حد‌اقل پست مورد نیاز");
define("_MD_AM_AVATARMPDSC","حد‌اقل پست مورد نیاز که عضو را مجاز به بارگذاری تصویر (avatar) می‌کند، را وارد کنید");
define("_MD_AM_AVATARW","بیشترین عرض مجاز آواتور (پیکسل)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH","بیشترین طول مجاز آواتور (پیکسل)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX","بیشترین حجم مجاز آواتور (byte)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF","تنظیمات تصاویر (avatar)‌های بارگذاری شده توسط اعضا");
define("_MD_AM_CHNGUTHEME","قالب (theme) همه اعضا را تغییر بده");
define("_MD_AM_NOTIFYTO","انتخاب گروهی که پست‌الکترونیکی اطلاع‌رسانی ثبت شدن اعضا به آن فرستاده شود");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME","اجازه به اعضا برای انتخاب قالب (theme)");
define("_MD_AM_ALLOWIMAGE","اجازه به اعضا برای نشان دادن فایل‌های تصویری در پست ؟");

define("_MD_AM_USERACTV","نیاز به فعال‌شدن به وسیله‌ی عضو (انتخاب این گزینه توصیه می‌شود)");
define("_MD_AM_AUTOACTV","فعال شدن به صورت خودکار");
define("_MD_AM_ADMINACTV","فعال شدن به وسیله‌ی مدیر سایت");
define("_MD_AM_ACTVTYPE","انتخاب نوع فعال‌سازی (activation) اعضایی که در سایت ثبت نام می‌کنند");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP","انتخاب گروهی که پست‌الکترونیکی برای فعال‌کردن عضو ثبت شده به آن فرستاده شود");
define("_MD_AM_ACTVGROUPDSC","فقط هنگامی که «فعال شدن توسط مدیر سایت» انتخاب شده باشد معتبر است");
define("_MD_AM_USESSL", "انتخاب SSL برای ورود ");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "نام پست SSL در دسترس");
define("_MD_AM_SSLPOSTDSC", "نام متغیری که برای انتقال مقدار نشست از طریق ارسل استفاده می‌شود. اگر مطمئن نیستید، یک نام که حدس زدن آن سخت باشد را انتخاب کنید");
define("_MD_AM_DEBUGMODE0","خاموش");
define("_MD_AM_DEBUGMODE1","دیباگ فعال - خطی");
define("_MD_AM_DEBUGMODE2","دیباگ فعال - پاپ‌آپ");
define("_MD_AM_DEBUGMODE3","دیباگ تمپلیت‌های اسمارتی");
define("_MD_AM_MINUNAME", "حد‌اقل نویسه‌ی مجاز برای شناسه‌ی کاربری");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "حداکثر نویسه‌ی مجاز برای شناسه‌ی کاربری");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "تنظیمات اصلی");
define("_MD_AM_USERSETTINGS", "تنظیمات اعضا");
define("_MD_AM_ALLWCHGMAIL", "به اعضا اجازه می‌دهید که پست‌الکترونیکی خودشان را عوض کنند؟");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP Banning");
define("_MD_AM_BADEMAILS", "پست‌های‌الکترونیکی را که اعضا مجاز به انتخاب آن نیستند وارد کنید");
define("_MD_AM_BADEMAILSDSC", "هر کدام را با <b>|</b> از هم جدا کنید،غیر حساس به حروف بزرگ و کوچک، عضویت سریع فعال");
define("_MD_AM_BADUNAMES", "شناسه‌هایی را که اعضا مجاز به انتخاب آن نیستند وارد کنید");
define("_MD_AM_BADUNAMESDSC", "هر کدام را با <b>|</b>از هم جدا کنید، غیر حساس به حروف بزرگ و کوچک، عضویت سریع فعال");
define("_MD_AM_DOBADIPS", "فعال کردن بستن IP ؟");
define("_MD_AM_DOBADIPSDSC", "کاربرانی که آدرس IP مشخص شده است نمی‌توانند سایت شما را ببینند");
define("_MD_AM_BADIPS", "آدرس‌های IP که باید در این سایت بسته شود را وارد کنید.<br />به وسیله <b>|</b> از هم جدا کنید، غیر حساس به بزرگی و کوچکی، عضویت سریع فعال.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc به کاربرانی که آدرس IP با aaa.bbb.ccc شروع می‌شود اجازه نم‌یدهد<br />aaa.bbb.ccc$ به کاربرانی که آدرس IP با aaa.bbb.ccc تمام میشود اجازه نمیدهد<br />aaa.bbb.ccc به کاربرانی که آدرس IP شامل aaa.bbb.ccc باشد اجازه نم‌یدهد");
define("_MD_AM_PREFMAIN", "صفحه‌ی اصلی ویژگی‌ها");
define("_MD_AM_METAKEY", "کلمات کلیدی");
define("_MD_AM_METAKEYDSC", "کلمات کلیدی سرویسی است که به طور خلاصه محتوای سایت شما را مشخص می‌کند. این کلمات را به وسیله‌ی کاما یا اسپیس از هم جدا کنید. (مانند XOOPS, PHP, mySQL, portal system)");
define("_MD_AM_METARATING", "دسته‌بندی متا‌ها");
define("_MD_AM_METARATINGDSC", "دسته‌بندی بچسب‌های متا، سن و نوع محتوای درون سایت شما را نشان می‌دهد");
define("_MD_AM_METAOGEN", "General");
define("_MD_AM_METAO14YRS", "14 years");
define("_MD_AM_METAOREST", "Restricted");
define("_MD_AM_METAOMAT", "Mature");
define("_MD_AM_METAROBOTS", "ربات‌های‌متا");
define("_MD_AM_METAROBOTSDSC", "شاخه‌هایی که در اینجا باشند توسط موتور‌های جستجو دنبال می‌شوند و روبوت‌ها آنها را می‌خوانند.");
define("_MD_AM_INDEXFOLLOW", "Index, Follow");
define("_MD_AM_NOINDEXFOLLOW", "No Index, Follow");
define("_MD_AM_INDEXNOFOLLOW", "Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW", "No Index, No Follow");
define("_MD_AM_METAAUTHOR", "سازنده‌ی متا");
define("_MD_AM_METAAUTHORDSC", "تگ سازنده متا نام سازنده راهنمای قابل خواند شما را مشخص می‌کند. شکل‌های اطلاعاتی شامل نام, آدرس پست‌الکترونیکی وب مستر، نام سازمان یا URL پشتیبانی می‌شوند.");
define("_MD_AM_METACOPYR", "کپی‌رایت متا");
define("_MD_AM_METACOPYRDSC", "تگ متا کپی رایت شرح کپی رایتی را که شما می‌خواهید در راهنمای سایت توضیح دهید را تعریف می‌کند.");
define("_MD_AM_METADESC", "توضیح متا");
define("_MD_AM_METADESCDSC", "توضیح تگ متا توضیح اصلی سایت شماست");
define("_MD_AM_METAFOOTER", "متا‌ها (کلمت کلیدی و فوتر)");
define("_MD_AM_FOOTER", "فوتر");
define("_MD_AM_FOOTERDSC", "توجه کنید که حتما باید لینکها را به صورت کامل و با http:// وارد کنید و گرنه لینک در فوتر سایت درست نشان داده نخواهد شد");
define("_MD_AM_CENSOR", "گزینه‌های سانسور کلمات");
define("_MD_AM_DOCENSOR", "فعال‌کردن سانسور برای کلمات نا‌خواسته؟");
define("_MD_AM_DOCENSORDSC", "کلمات مشخص شده سانسور می‌شوند وقتی این گزینه روشن باشد. وقتی این گزینه خاموش باشد سرعت سایت شما بالاتر است.");
define("_MD_AM_CENSORWRD", "کلمات سانسور شده");
define("_MD_AM_CENSORWRDDSC", "کلماتی را که در پست‌های سایت شما باید فیلتر شود وارد کنید.<br />Sبا <b>|</b> از هم جدا کنید.");
define("_MD_AM_CENSORRPLC", "کلمات سانسور شده با این کلمات جایگزین شوند:");
define("_MD_AM_CENSORRPLCDSC", "کلمه‌ای که با کلمات سانسور شده جایگزین میشود را در باکس مقابل بنویسید");

define("_MD_AM_SEARCH", "گزینه‌های جستجو");
define("_MD_AM_DOSEARCH", "فعال کردن جستجو در کل سایت");
define("_MD_AM_DOSEARCHDSC", "اجازه‌ی جستجو بین پست‌ها و اطلاعات سایت شما.");
define("_MD_AM_MINSEARCH", "کمترین اندازه‌ی کلمات کلیدی");
define("_MD_AM_MINSEARCHDSC", "کمترین تعداد کلمات کلیدی که کاربران باید برای جستجو وارد کنند را مشخص کنید");
define("_MD_AM_MODCONFIG", "گزینه‌های پیکربندی ماژول");
define("_MD_AM_DSPDSCLMR", "شرایط عضویت (disclaimer) نشان داده شود؟");
define("_MD_AM_DSPDSCLMRDSC", "گزینه بله را انتخاب کنید تا در صفحه ثبت نام نشان داده شود");
define("_MD_AM_REGDSCLMR", "متن شرایط ثبت نام");
define("_MD_AM_REGDSCLMRDSC", "متنی را که در صفحه‌ی ثبت نام نشان داده می‌شود وارد کنید");
define("_MD_AM_ALLOWREG", "اجازه برای ثبت نام اعضای جدید در سایت داده شود؟ (بسیار مهم)");
define("_MD_AM_ALLOWREGDSC", "بله را انتخاب کنید تا امکان عضویت در سایت وجود داشته باشد");
define("_MD_AM_THEMEFILE", "چک کردن تمپلیت‌ها برای اصلاح");
define("_MD_AM_THEMEFILEDSC", "اگر این گزینه فعال باشد، تمپلیت‌های اصلاح شده در هنگام نمایش به طور خودکار دوباره کامپایل می‌شوند. در یک سایت باز و در حال کار باید روی خاموش باشد");
define("_MD_AM_CLOSESITE", "سایت بسته شود؟");
define("_MD_AM_CLOSESITEDSC", "اگر بله را انتخاب کنید سایت به روی عموم بسته می‌شود و فقط گروه‌های انتخاب شده مجاز به ورود به سایت هستند ");
define("_MD_AM_CLOSESITEOK", "گروه‌های مجاز برای ورود به سایت در هنگام بسته بودن سایت");
define("_MD_AM_CLOSESITEOKDSC", "اعضایی که در گروه گردانندگان سایت (webmasters) هستند به طور پیشفرض مجاز خواهند بود");
define("_MD_AM_CLOSESITETXT", "دلیل بستن سایت");
define("_MD_AM_CLOSESITETXTDSC", "دلیلی که برای بستن سایت به افرادی که به سایت مراجعه می‌کنند نشان‌داده می‌شود");
define("_MD_AM_SITECACHE", "کش عمومی سایت");
define("_MD_AM_SITECACHEDSC", "همه‌ی محتوای سایت برای یک مقدار تعیین‌شده‌ی زمان برای ارتقای عملکرد را کش می‌کند. تنظیم کش سایت-گسترده، کش ماژول-مرحله‌ای، کش بلاک-مرحله‌ای و هر مورد مرحله‌ی کش را باطل می‌کند.");
define("_MD_AM_MODCACHE", "کش عمومی ماژول‌ها");
define("_MD_AM_MODCACHEDSC", "همه‌ی محتوای سایت برای یک مقدار تعیین‌شده‌ی زمان برای ارتقای عملکرد را کش می‌کند. تنظیم کش سایت-گسترده هر مورد کش مر‌حله‌ای را باطل می‌کند..");
define("_MD_AM_NOMODULE", "هیچ ماژولی که قابلیت کش داشته باشد موجود نیست.");
define("_MD_AM_DTPLSET", "تمپلیت پیشفرض برای سایت");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "آدرس اینترنتی جایی که SSL در آنجا قرار دارد");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER","تنظیمات ارسال پست الکترونیکی");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","آدرس فرستنده");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","نام فرستنده");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","شناسه‌ی کاربری فرستنده");
define("_MD_AM_MAILFROMUIDDESC","هنگامی که سیستم باید پیام شخصی به اعضا بفرستد شناسه‌ی کدام عضو سایت به عنوان فرستنده نشان داده شود؟");
define("_MD_AM_MAILERMETHOD","روش تحویل پست‌الکترونیکی");
define("_MD_AM_MAILERMETHODDESC","روش استفاده شده رد تحویل پست‌الکترونیکی. حالت پیش فرض \"mail\", از حالت‌های دیگر وقتی استفاده کنید که یک trouble ساخته باشید.");
define("_MD_AM_SMTPHOST","SMTP میزبان");
define("_MD_AM_SMTPHOSTDESC","لیست کارگزار‌های SMTP که تلاش شده است با آنها تماس برقرار شود.");
define("_MD_AM_SMTPUSER","نام کاربری SMTPAuth");
define("_MD_AM_SMTPUSERDESC","نام کاربری برای تماس با کارگزار SMTP به وسیله SMTPAuth.");
define("_MD_AM_SMTPPASS","واژه‌ی‌ رمز SMTPAuth");
define("_MD_AM_SMTPPASSDESC","واژه‌ی‌ رمز برای تماس با سورو SMTP به وسلیه SMTPAuth.");
define("_MD_AM_SENDMAILPATH","مسیر ارسال‌کننده‌ی پست‌الکترونیکی");
define("_MD_AM_SENDMAILPATHDESC","مسیر برنامه‌ی ارسال‌کننده پست‌الکترونیکی (or substitute) در کارگزار شما.");
define("_MD_AM_THEMEOK","قالب‌های فعال برای انتخاب شدن");
define("_MD_AM_THEMEOKDSC","قالب‌هایی را که اعضا می‌توانند به عنوان قالب شخصی خود انتخاب کنند مشخص کنید");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","اینجا محل آدرس کارگزار soap است.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say 'yes'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","اگر شما به خدمات wdsl soap احتیاج دارید این گزینه را فعال کنید.");
define("_MD_AM_SOAP_USERNAME", "SOAP - نام کاربری SOAP");
define("_MD_AM_SOAP_USERNAMEDESC","این نام کاربری حساب شما در کارگزار  soap است.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - واژه رمز SOAP");
define("_MD_AM_SOAP_PASSWORDDESC","اگر شما برای کارگزار soap به واژه رمز نیاز دارید آن را اینجا وارد کنید.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - مشتری زنده");
define("_MD_AM_SOAP_KEEPCLIENTDESC","مشتری Soap را زنده نگه دار.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - حساب‌های اختصاصی");
define("_MD_AM_SOAP_FILTERPERSONDESC","حساب‌های اختصاصی که از تایید صندیت زوپس استفاده میکنند.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - نام میزبان Proxy");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","Proxy Server کارگزار SOAP.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - پورت Proxy");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","شماره پورت Proxy کارگزار SOAP <br>ie: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - نام کاربری Proxy");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","نام کاربری Proxy Server کارگزار SOAP");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - واژه رمز Proxy");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","واژه رمز Proxy Server کارگزار SOAP");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","نگهداری پرس و جو‌های زنده Soap برای <strong>xx</strong> ثانیه.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - زمان پاسخ SOAP گذشت");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","نگهداری پرس و جو‌های زنده Soap برای <strong>xx</strong> ثانیه.");
define("_MD_AM_SOAP_FIELDMAPPING","فیلدهای جستجوی کارگزار Xoops-Auth");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","توضیح این نقشه برداری بین فیلد‌های پایگاه داده‌های زوپس و فیلد‌های سندیت سیستم LDAP ." .
		"<br><br>شکل [Xoops Database field]=[Auth system SOAP attribute]" .
		"<br>برای مثال : email=mail" .
		"<br>به وسیله | از هم جدا کنید" .
		"<br><br>!! برای کاربران حرفه ای !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "پایگاه‌داده زوپس");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "شاخه LDAP استاندارد");
define("_MD_AM_AUTH_CONFOPTION_AD", "شاخه و کپی فعال مایکروسافت");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "گزینه تایید سندیت Soap زوپس");
define("_MD_AM_AUTHENTICATION", "گزینه‌های تایید سندیت");
define("_MD_AM_AUTHMETHOD", "روش تایید سندیت");
define("_MD_AM_AUTHMETHODDESC", "مایلید از کدام روش تایید سندیت برای ثبت نام کاربران استفاده کنید.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - نام فیلد پست‌الکترونیکی");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","نام خصوصیت پست‌الکترونیکی در شاخه درختی LDAP.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - نام فیلد نام عادی");
define("_MD_AM_LDAP_NAME_ATTR_DESC","نام خصوصیت نام عادی در شاخه درختی LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - نام فیلد نام خانوادگی");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","نام خصوصیت نام خانوادگی در شاخه درختی LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - نام فیلد نام داده شده");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","نام خصوصیت نام داده شده در شاخه درختی LDAP.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - بر اساس");
define("_MD_AM_LDAP_BASE_DN_DESC", " DN اصلی (Distinguished Name) شاخه درختی LDAP");
define("_MD_AM_LDAP_PORT","LDAP - شماره‌ی پورت");
define("_MD_AM_LDAP_PORT_DESC","شماره پورتی که برای دسترسی به شاخه LDAP کارگزار لازم است");
define("_MD_AM_LDAP_SERVER","LDAP - نام کارگزار");
define("_MD_AM_LDAP_SERVER_DESC","نام کارگزار شاخه LDAP");

define("_MD_AM_LDAP_MANAGER_DN", "DN برای مدیریت LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN به کاربران اجازه می‌دهد جستجو ایجاد کنند (مانند manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "واژه‌ی‌ رمز برای مدیریت LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "واژه‌ی‌ رمز برای اجازه دادن به کاربران برای ایجاد جستجو");
define("_MD_AM_LDAP_VERSION", "نسخه‌ی پروتکول LDAP");
define("_MD_AM_LDAP_VERSION_DESC", "نسخه‌ی پروتکول LDAP : 2 یا 3");
define("_MD_AM_LDAP_USERS_BYPASS", "اجازه به کاربران برای سندیت گذرگاه LDAP");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "سندیت کاربران به وسیله روش داخلی زوپس");

define("_MD_AM_LDAP_USETLS", "استفاده از اتصال TLS");
define("_MD_AM_LDAP_USETLS_DESC", "استفاده از اتصال TLS (Transport Layer Security یا انتقال امن لایه‌ها). TLS به طور استاندارد از پورت 389 استفاده میکند<BR>" .
								  "و نسخه LDAP باید روی 3 تنظیم شده باشد.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "خاصیت LDAP در جستجوی کاربران استفاده شود");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "وقتی نام کاربری استفاده شده در تنظیمات DN بر روی بله تنظیم شده باشد، باید با نام کاربری زوپس یکی باشد");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "نام ورود استفاده شده در DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "نام کاربری زوپس که در LDAP DN استفاده شده است (eg : uid=<loginname>,dc=xoops,dc=org)<br>ورودی مستقیما از کارگزار LDAP خوانده می‌شود بدون جستجو");

define("_MD_AM_LDAP_FILTER_PERSON", "فیلترهای جستجو سوال LDAP برای پیدا کردن کاربران");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "فیلتر اختصاصی LDAP برای پیدا کردن کاربران. @@loginname@@ با نام ورود کاربر جایگزین می‌شود<br> اگر نمی‌دانید این گزینه چیکار میکند آ« را خالی بگذارید!" .
		"<br />نمونه : (&(objectclass=person)(samaccountname=@@loginname@@)) برای AD" .
		"<br />نمونه : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) برای LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "نام دامنه");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "نام دامنه ویندوز. فقط برای ADS و کارگزار NT");

define("_MD_AM_LDAP_PROVIS", "تدارک خودکار شناسه‌ی زوپس");
define("_MD_AM_LDAP_PROVIS_DESC", "ساخت پایگاه‌‌های‌داده‌ی کاربر زوپس در صورت عدم وجود");

define("_MD_AM_LDAP_PROVIS_GROUP", "گروه پیش فرض کاربران");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "کاربران جدید در این گروه قرار می‌گیرند");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "فیلدهای جستجوی کارگزار Xoops-Auth");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "توضیح این نقشه برداری بین فیلد‌های پایگاه داده‌های زوپس و فیلد‌های سندیت سیستم LDAP ." .
		"<br /><br />شکل [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br />برای مثال : email=mail" .
		"<br />به وسیله | از هم جدا کنید" .
		"<br /><br />!! برای کاربران حرفه ای !!");
		
define("_MD_AM_LDAP_PROVIS_UPD", "قوانین نگهداری حساب کاربری زوپس");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "حساب‌های کاربری زوپس همیشه با سرویس دهنده‌ی تایید سدندیت هماهنگ میشوند");


define("_MD_AM_CPANEL", "کنترل پنل پیش فرض مدیریت GUI");
define("_MD_AM_CPANELDSC", "قالب بخش مدیریت سایت");

define("_MD_AM_WELCOMETYPE", "تنظیمات پیغام ورود ");
define("_MD_AM_WELCOMETYPE_DESC", "روشی برای ارسال پیغام خوش آمد گویی به کاربری که موفق به ثبت نام شده.");
define("_MD_AM_WELCOMETYPE_EMAIL", "پست‌الکترونیکی");
define("_MD_AM_WELCOMETYPE_PM", "پیام شخصی");
define("_MD_AM_WELCOMETYPE_BOTH", "پست‌الکترونیکی و پیام شخصی");

define("_MD_AM_MODULEPREF", "ویژگی ماژول‌ها");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS", "تنظیمات ماژول سیستم");
?>