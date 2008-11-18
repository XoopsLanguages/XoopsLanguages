<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @version     $Id: install.php 2042 2008-09-01 08:54:19Z phppp $
 * Add Persian Language by Persain Xoops Project www.irxoops.org
 */

define( "SHOW_HIDE_HELP", "نمایش/عدم‌نمایش متن راهنما" );

// Configuration check page
define( "SERVER_API", "API کارگزار" );
define( "PHP_EXTENSION", "افزونه %s" );
define( "CHAR_ENCODING", "سیستم کدگذاری کاراکترها" );
define( "XML_PARSING", "تجزیه XML" );
define( "REQUIREMENTS", "نیازمندی‌ها" );
define( "_PHP_VERSION", "نسخهٔ PHP" );
define( "RECOMMENDED_SETTINGS", "تنظیمات پیشنهادی" );
define( "RECOMMENDED_EXTENSIONS", "افزونه‌های پیشنهادی" );
define( "SETTING_NAME", "نام تنظیمات" );
define( "RECOMMENDED", "پیشنهاد شده" );
define( "CURRENT", "فعلی" );
define( "RECOMMENDED_EXTENSIONS_MSG", "این افزونه ها برای استفاده معمولی لازم نمی‌باشد، اما شاید برای بعضی از امکانات اضافی به آنها نیاز باشد 
 (مثل سایت‌های چند زبانه و پشتیبانی از RSS). بنابراین، نصب آنها الزامی است." );
define( "NONE", "هیچکدام" );
define( "SUCCESS", "موفقیت‌آمیز" );
define( "WARNING", "اخطار" );
define( "FAILED", "ناموفق" );



// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "جادوی نصب زوپس" );

define( "LANGUAGE_SELECTION", "انتخاب زبان" );
define( "LANGUAGE_SELECTION_TITLE", "زبان مورد نظر خود را انتخاب کنید");		// L128
define( "INTRODUCTION", "معرفی زوپس" );
define( "INTRODUCTION_TITLE", "به دستیار نصب زوپس خوش‌آمدید" );		// L0
define( "CONFIGURATION_CHECK", "برسی تنظیمات" );
define( "CONFIGURATION_CHECK_TITLE", "برسی تنظیمات کارگزار شما" );
define( "PATHS_SETTINGS", "تنظیمات مسیرها" );
define( "PATHS_SETTINGS_TITLE", "تنظیمات مسیرها" );
define( "DATABASE_CONNECTION", "اتصال پایگاه‌های داده" );
define( "DATABASE_CONNECTION_TITLE", "اتصال پایگاه‌های داده" );
define( "DATABASE_CONFIG", "پیکربندی پایگاه‌های داده" );
define( "DATABASE_CONFIG_TITLE", "پیکربندی پایگاه‌های داده" );
define( "CONFIG_SAVE", "ذخیره پیکربندی" );
define( "CONFIG_SAVE_TITLE", "ذخیره پیکربندی  سیستم شما" );
define( "TABLES_CREATION", "ایجاد جدول ها" );
define( "TABLES_CREATION_TITLE", "ساخت جداولی پایگاه‌های داده" );
define( "INITIAL_SETTINGS", "تنظیمات اولیه" );
define( "INITIAL_SETTINGS_TITLE", "لطفا تنظیمات اولیه خود را وارد کنید" );
define( "DATA_INSERTION", "اضافه کردن اطلاعات" );
define( "DATA_INSERTION_TITLE", "ذخیره تنظیمات شما در پایگاه‌های داده" );
define( "WELCOME", "خوش آمدید" );
define( "WELCOME_TITLE", "به سایت زوپس خود خوش آمدید" );		// L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "شاخهٔ فیزیکی زوپس" );
define( "XOOPS_URLS", "آدرس اینترنتی" );

define( "XOOPS_ROOT_PATH_LABEL", "شاخهٔ فیزیکی محل قرار گیری هسته زوپس" ); // L55
define( "XOOPS_ROOT_PATH_HELP", "محل فیزیکی پروندههای زوپس بر روی کارگزار" ); // L59

define( "XOOPS_LIB_PATH_LABEL", "شاخهٔ کتابخانه‌های زوپس" );
define( "XOOPS_LIB_PATH_HELP", "مسیر شاخهٔ کتابخانه‌ٔ زوپس بودن باید با اسلش پایانی باشد. برای امنیت بیشتر این شاخه را به خارج از " . XOOPS_ROOT_PATH_LABEL . " منتقل کنید.");
define( "XOOPS_DATA_PATH_LABEL", "شاخهٔ پرونده‌های دادهٔ زوپس" );
define( "XOOPS_DATA_PATH_HELP", "مسیر شاخهٔ پرونده‌های داده زوپس (قابل نوشتن) بدون نیاز به اسلش پایانی. برای امنیت بیشتر این شاخه را به خارج از " . XOOPS_ROOT_PATH_LABEL . " منتقل کنید." );

define( "XOOPS_URL_LABEL", "آدرس وب‌سایت (URL)" ); // L56
define( "XOOPS_URL_HELP", "آدرسی اصلی که بعد از نصب زوپس برای دسترسی به سایت از آن استفاده می‌کنید" ); // L58

define( "LEGEND_CONNECTION", "ارتباط با کارگزار" );
define( "LEGEND_DATABASE", "پایگاه‌های داده" ); // L51

define( "DB_HOST_LABEL", "نام کارگزار میزبان" );	// L27
define( "DB_HOST_HELP",  "نام کارگزار میزبان پایگاه‌های داده. اگر مطمئن نیستید، <em>localhost</em> را انتخاب کنید زیرا در بیشتر موارد کار می‌کند"); // L67
define( "DB_USER_LABEL", "نام کاربری" );	// L28
define( "DB_USER_HELP",  "نام حساب کاربری که برای برقراری تماس با پایگاه‌های داده از آن استفاده می‌شود"); // L65
define( "DB_PASS_LABEL", "واژهٔ رمز" );	// L52
define( "DB_PASS_HELP",  "واژهٔ رمز حساب کاربری پایگاه‌های داده"); // L68
define( "DB_NAME_LABEL", "نام پایگاه‌های داده" );	// L29
define( "DB_NAME_HELP",  "نام پایگاه‌های داده در میزبان. اگر پایگاه‌های داده در میزبان موجود نیست سیستم نصب سعی می‌کند آن را بسازد"); // L64
define( "DB_CHARSET_LABEL", "تنظیم کاراکتر پایگاه‌های داده" );
define( "DB_CHARSET_HELP",  "MySQL از مجموعه کاراکترهایی پشتیبانی می‌کند که شما را قادر می‌سازد که داده را با استفاده از مجموعه‌های مختلفی از کاراکترها ذخیره کنید و براساس دسته‌ای از مجموعه ها، مقایسه انجام دهید.");
define( "DB_COLLATION_LABEL", "مقایسهٔ پایگاه‌های داده" );
define( "DB_COLLATION_HELP",  "تنظيم مقايسه گر برای مقايسهٔ كاراكترها.");
define( "DB_PREFIX_LABEL", "پیشوند نام جداول" );	// L30
define( "DB_PREFIX_HELP",  "این پیشوند برای جلوگیری از تضاد نام‌ها در پایگاه‌های داده، به نام تمام جداول پایگاه‌های داده اضافه می‌شود. اگر مطمئن نیستید آن را در حالت پیشفرض باقی گذارید"); // L63
define( "DB_PCONNECT_LABEL", "استفاده از اتصال پایا" );	// L54
define( "DB_PCONNECT_HELP",  "حالت پیش فرض 'نه' است. اگر مطمئن نیستید 'نه' را انتخاب کنید"); // L69
define( "DB_DATABASE_LABEL", "پایگاه داده ها" );

define( "LEGEND_ADMIN_ACCOUNT", "حساب کاربری مدیر اصلی سایت" );
define( "ADMIN_LOGIN_LABEL", "شناسه ورود" ); // L37
define( "ADMIN_EMAIL_LABEL", "پست‌الکترونیکی مدیر" ); // L38
define( "ADMIN_PASS_LABEL", "واژهٔ رمز مدیر" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "تکرار واژهٔ رمز" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "قبلی" ); // L42
define( "BUTTON_NEXT", "بعدی" ); // L47

// Messages
define( "XOOPS_FOUND", "%s پیدا شد" );
define( "CHECKING_PERMISSIONS", "دسترسی شاخه‌ها و پرونده‌ها رو بررسی کنید ..." ); // L82
define( "IS_NOT_WRITABLE", "%s قابل نوشتن نیست." ); // L83
define( "IS_WRITABLE", "%s قابل نوشتن است." ); // L84

define( "XOOPS_PATH_FOUND", "مسیر صحیح یافت شد." );

define( "READY_CREATE_TABLES", "هیچ کدام از جدول‌های زوپس پیدا نشد.<br />سیستم نصب آماده است که الان جدول‌های زوپس را بسازد.<br />با کلیک بر روی دکمه <em>بعدی</em> این کار انجام می‌شود." );
define( "XOOPS_TABLES_FOUND", "جدول های سیستم زوپس در حال حاضر در پایگاه‌های داده‌ای شما موجود است.<br />با کلیک بروید دکمه <em>بعدی</em> به مرحله بعدی بروید." ); // L131
define( "XOOPS_TABLES_CREATED", "سیستم جدول‌های زوپس ساخته شد.<br />با استفاده از دکمه <em>بعدی</em> به مرحله بعد بروید." );
define( "READY_INSERT_DATA", "سیستم نصب آماده است که اطلاعات وارد شده شما را به پایگاه‌های داده اضافه کند." );
define( "READY_SAVE_MAINFILE", "سیستم نصب آماده است تا تنظیمات انجام شده را بر روی <em>mainfile.php</em> ذخیره کند.<br />با کلیک بر روی دکمه <em>بعدی</em> این کار انجام می‌شود." );
define( "SAVED_MAINFILE", "تنظیمات در mainfile.php ذخیره شد" );
define( "SAVED_MAINFILE_MSG", "سیستم نصب تنظیمات شما را در <em>mainfile.php</em> ذخیره کرد. با استفاده از دکمه <em>بعدی</em> به مرحله بعد بروید." );
define( "DATA_ALREADY_INSERTED", "اطلاعات زوپس در پایگاه‌های داده‌ٔ شما پیدا شد.<br />با کلیک بر روی دکمه <em>بعدی</em> به مرحله بعدی بروید." );
define( "DATA_INSERTED", "اطلاعات اصلی در پایگاه‌های داده ثبت شد.<br />با استفاده از دکمه <em>بعدی</em> به مرحله بعد بروید." );


// %s is database name
define( "DATABASE_CREATED", "پایگاه‌های دادهٔ %s ساخته شد !" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "ناتوان در ساخت جدول %s" ); // L118
define( "TABLE_CREATED", "جدول %s ساخته شد." ); // L45
define( "ROWS_INSERTED", "%d ورودی به جدول %s اضافه شد." ); // L119
define( "ROWS_FAILED", "خطا در وارد کردن %d ورودی به جدول %s." ); // L120
define( "TABLE_ALTERED", "جدول %s به روز شد."); // L133
define( "TABLE_NOT_ALTERED", "خطا در به روز کردن جدول %s."); // L134
define( "TABLE_DROPPED", "جدول %s حذف شد."); // L163
define( "TABLE_NOT_DROPPED", "خطا در حذف کردن جدول %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "ناتوانی در اتصال به شاخه مورد نظر. لطفا بررس کنيد که شاخهٔ مورد نظر ساخته شد و دسترسی‌های آن بر روی کارگزارصحيح باشد." );
define( "ERR_NO_XOOPS_FOUND", "سیستم نصب زوپس نمی‌تواند شاخهٔ مشخص شده را پیدا کند." );
define( "ERR_INVALID_EMAIL", "پست‌الکترونیکی صحیح نمی‌باشد" ); // L73
define( "ERR_REQUIRED", "لطفا تمام اطلاعات لازم را وارد کنید." ); // L41
define( "ERR_PASSWORD_MATCH", "دو واژهٔ رمز وارد شده یکی نیست" );
define( "ERR_NEED_WRITE_ACCESS", "در کارگزار باید به شاخه‌ها و پرونده‌های تعیین شده در ادامه دسترسی نوشتن داده شود<br />(مثلا<em>دسترسی 777 directory_name</em> در کارگزارهای UNIX/LINUX)" ); // L72
define( "ERR_NO_DATABASE", "ناتوان در ساخت پایگاه‌های داده. برای کسب اطلاعات بیشتر با مدیر کارگزار خود تماس بگیرید." ); // L31
define( "ERR_NO_DBCONNECTION", "ناتوان در برقراری ارتباط با پایگاه‌های داده." ); // L106
define( "ERR_WRITING_CONSTANT", "خطا در نوشت ثابت %s." ); // L122

define( "ERR_COPY_MAINFILE", "نا توان در نسخه‌برداری از پروندهٔ توزیع‌ها بر روی mainfile.php" );
define( "ERR_WRITE_MAINFILE", "mainfile.php قابل نوشتن نیست. لطفا دسترسی‌های این پرونده را بررسی کنید و دوباره امتحان کنید.");
define( "ERR_READ_MAINFILE", "mainfile.php را برای خواندن اطلاعات نمی‌توان باز کرد" );

define( "ERR_INVALID_DBCHARSET", "از کارکتر '%s' پشتیبانی نمی‌شود." );
define( "ERR_INVALID_DBCOLLATION", "از collation '%s' پشتیبانی نمی‌شود." );
define( "ERR_CHARSET_NOT_SET", "کارکتر پیش فرض تنظیم شده در پایگاه‌های دادهٔ زوپس تنظیم نشد." );

//




define("_INSTALL_CHARSET", "utf-8");
?>
