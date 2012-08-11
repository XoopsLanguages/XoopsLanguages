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
 * @version     $Id: install.php 2055 2008-09-05 06:26:48Z phppp $
 */

define("SHOW_HIDE_HELP","Show/hide help text" );

// Configuration check page
define("SERVER_API","سرور API" );
define("PHP_EXTENSION","%s توسیع" );
define("CHAR_ENCODING","حروف encoding" );
define("XML_PARSING","XML پارسنگ" );
define("REQUIREMENTS","ضروریات" );
define("_PHP_VERSION","PHP نسخہ" );
define("RECOMMENDED_SETTINGS","سفارشی سیٹنگز" );
define("RECOMMENDED_EXTENSIONS","سفارشی توسیعات" );
define("SETTING_NAME","سیٹنگ کا نام" );
define("RECOMMENDED","سفارشات" );
define("CURRENT","حال" );
define("RECOMMENDED_EXTENSIONS_MSG","یہ توسیعات عام استعمال کیلۓ ضروری ہیں لیکن آپ کسے مخصوص ضرورت کیلے ان مین ردوبدل کرسکتے ہیں جیسے (like the multi-language or RSS support). لیکن ان کو تنصیب کرنے کی سفارش کی جاتی ہے" );
define("NONE","کچھ نہیں" );
define("SUCCESS","کامیاب" );
define("WARNING","خبردار" );
define("FAILED","ناکام" );



// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","زوپس کی تنصیب کا ٹونہانا" );

define("LANGUAGE_SELECTION","زبان کا انتخابب" );
define("LANGUAGE_SELECTION_TITLE","اپنے زبان کا انتخاب کریں");        // L128
define("INTRODUCTION","تعارف" );
define("INTRODUCTION_TITLE","زوپس کے تنصیبی معاون میں آپکو خوش آمدید" );        // L0
define("CONFIGURATION_CHECK","کنفیگریشن چیک" );
define("CONFIGURATION_CHECK_TITLE","سرور کی کنفیگریشن چیک کر رہا ہے" );
define("PATHS_SETTINGS","راہ کی سیٹنگ" );
define("PATHS_SETTINGS_TITLE","راہ کی سیٹنگز" );
define("DATABASE_CONNECTION","ڈیٹابیس کا کنیکشن" );
define("DATABASE_CONNECTION_TITLE","ڈیٹا بیئس کا کنیکشن" );
define("DATABASE_CONFIG","ڈیٹابیس کی کنفیگریشن" );
define("DATABASE_CONFIG_TITLE","ڈیٹابیس کی کنفیگریشن" );
define("CONFIG_SAVE","کنفیگریشن محفوظ" );
define("CONFIG_SAVE_TITLE","سسٹم کے کنفیگریشن کو محفوظ کرنا" );
define("TABLES_CREATION","ٹیبلز وجود میں لانا" );
define("TABLES_CREATION_TITLE","ڈیٹا بیس کے ٹیبلز وجود میں لانا" );
define("INITIAL_SETTINGS","ابدتدائ سیٹنگز" );
define("INITIAL_SETTINGS_TITLE","براۓ مہربانی ابتدائ سیٹنگز داخل کریں" );
define("DATA_INSERTION","ڈیٹا کا داخل کرنا" );
define("DATA_INSERTION_TITLE","آپکے سیٹنگز کو ڈیٹابیس مین محفوظ کر رہا ہے" );
define("WELCOME","خوش آمدید" );
define("WELCOME_TITLE","زوپس کے سائٹ میں آپکو خوش آمدید" );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","زوپس کا طبیعیاتی راہ" );
define("XOOPS_URLS","ویب کا مقام" );

define("XOOPS_ROOT_PATH_LABEL","زوپس کے ڈاکیومنٹ کی جڑوں کی طبعیاتی راہ" );
define("XOOPS_ROOT_PATH_HELP","زوپس کے ڈاکیومنٹ کی طیعیاتی راہ (served) ڈایریکٹری بغیر سلاش کے" );

define("XOOPS_LIB_PATH_LABEL","زوپس لائبریری کا ڈایریکٹری" );
define("XOOPS_LIB_PATH_HELP","طبیعیاتی راہ زوپس لایبریری ڈایریکٹری تک بغیر سالش کے ، کا تعیں کرین محفوظ بنانے کیلۓ" . XOOPS_ROOT_PATH_LABEL . " آگے کی مطابقت کیلۓ اس ڈیریکٹری");
define("XOOPS_DATA_PATH_LABEL","زوپس ڈیٹا فایلز کی ڈایریکٹری" );
define("XOOPS_DATA_PATH_HELP","طبیعیاتی راہ زوپس کے ڈیٹا فایلز کیلۓ بغیر سلاش کے لکہنے کے قابل بنایئں (writable)  آگے کی مطابقت کیلۓ اس ڈایریکٹری کا تعین کرین۔ محفوظ بنانے کیلۓ " . XOOPS_ROOT_PATH_LABEL . "زوپس کا پاتھ " );

define("XOOPS_URL_LABEL","ویب سائٹ کا مقام (URL)" ); // L56
define("XOOPS_URL_HELP","مرکزی اڈریس جو زوپس کی تنصیب کیلے استعمال ہوا" ); // L58

define("LEGEND_CONNECTION","سرور کنیکشن" );
define("LEGEND_DATABASE","ڈیٹابیس" ); // L51

define("DB_HOST_LABEL","سرور کا میزبان" );    // L27
define("DB_HOST_HELP",  "چھوڑیں۔ کیونکہ بعض اوقات لوکل ہوسٹ کار آمد ہے <em>localhost</em>  ڈیٹابیس سرور کا میزبان اگر آپ کو پتہ نہین تو "); // L67
define("DB_USER_LABEL","رکن کا نام" );    // L28
define("DB_USER_HELP",  "رکن کے اکاونٹ کا نام جو ڈیٹابیس سرور سے کنیکٹ کرنے میں استعمال ہوا ہوr"); // L65
define("DB_PASS_LABEL","پاس ورڈ" );    // L52
define("DB_PASS_HELP",  "ڈیٹابیس رکن کا پاس ورد"); // L68
define("DB_NAME_LABEL","ڈیٹابیس کا نام" );    // L29
define("DB_NAME_HELP",  "ڈیٹابیس میزبان کا نام اگر ڈیٹابیس پہلے سے موجود نہ ہو تو انسٹالر اس کو وجود میں لانے کی کوشش کرے گا"); // L64
define("DB_CHARSET_LABEL","ڈیٹا بیس character set" );
define("DB_CHARSET_HELP",  "MySQL کے اندر ایسے حروف سیٹ ہيں جو  کریش ہونے سے روکتی ہیں آپ ایسے حروف کا انخاب کر ستکے ہین اگر نہین پتا تو ایسے ہی رہنے دیں.");
define("DB_COLLATION_LABEL","ڈیٹابیس collation" );
define("DB_COLLATION_HELP",  "A collation قواعد کا سیٹ جو کپمریزن کا کام کرتا ہۓ.");
define("DB_PREFIX_LABEL","ٹیبل کا اصاق" );    // L30
define("DB_PREFIX_HELP",  "یہ الصاق ٹیبل میں لصاق کا اضافہ کرتا ہے تاکہ کسی کنفلکٹ سے بچا جاے۔ اگر آپکو پتہ نہیں تو اسے ایسے ہی چھوڑیں"); // L63
define("DB_PCONNECT_LABEL","کنیکشن استعمال کریں persistent " );    // L54
define("DB_PCONNECT_HELP",  "ترجیحی ہے   'نہین '. کا انتخاب کریں 'NO' اگر آپکو پتہ نہیں تو"); // L69
define("DB_DATABASE_LABEL","ڈیٹابیس" );

define("LEGEND_ADMIN_ACCOUNT","ناظم کا اکاؤنٹ" );
define("ADMIN_LOGIN_LABEL","ناظم کا لاگن" ); // L37
define("ADMIN_EMAIL_LABEL","ناظم کا ایمیل" ); // L38
define("ADMIN_PASS_LABEL","ناظم کا پاس ورڈ" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","پاس ورڈ کی تایئد" ); // L74

// Buttons
define("BUTTON_PREVIOUS","پچھلا" ); // L42
define("BUTTON_NEXT","آگے" ); // L47

// Messages
define("XOOPS_FOUND",  " ملا%s " );
define("CHECKING_PERMISSIONS","...فایل ڈایریکٹری کے اجازت نامے چیک کر رہا ہے" ); // L82
define("IS_NOT_WRITABLE","لکھنے کے قابل نہين %s " ); // L83
define("IS_WRITABLE",  "لکھنے کے قابل ہے %s " ); // L84

define("XOOPS_PATH_FOUND","راہ ملا" );

define("READY_CREATE_TABLES","زوپس کا کوئ ٹیبل نہیں ملا۔ <br />انسٹالر ابہھی نۓ ٹیبل بنانے کی کوشش کرے گا زوپس سسٹم کیلۓ<br />دبایئں <em>آگے</em> آگے جانے کیلۓ" );
define("XOOPS_TABLES_FOUND","زوپس سسٹم ٹیبل پہلے سے آپکے ڈیٹبیس میں موجود ہیں.<br />دبایں <em>آگے</em> اگلے قدم کیلۓ" ); // L131
define("XOOPS_TABLES_CREATED","زوپس سسٹم تیبل بناۓ گے<br />دبایئں <em>آگے </em> آگے جانے کیلۓ" );
define("READY_INSERT_DATA","انسٹالر ابھی ابتدائ ڈیٹا ڈیٹابیس میں داخل کرنے کیلۓ تیار ہے" );
define("READY_SAVE_MAINFILE","انسٹالر ابھی خصوصی ڈیٹا محفوظ کرنے کیلۓ تیار ہے <em>mainfile.php</em>.<br />دبایئں <em>آگے</em>آگے جانے کیلۓ" );
define("SAVED_MAINFILE","فایل میں سیٹنگزمحفوظ کرلیۓ گیے mainfile.php" );
define("SAVED_MAINFILE_MSG","انسٹلر نے فایل میں مخصوص دیٹا محفوظ کرلیا <em>mainfile.php</em>. دبایئں <em>آگے </em> آگے جانے لیلۓ" );
define("DATA_ALREADY_INSERTED","زوپس ڈیٹا ڈیٹابیس میں ملا<br />دبایئں <em>آگے </em> آگے جانے کیلۓ" );
define("DATA_INSERTED","ابتدائ ڈیٹا ڈیٹابیس میں داخل کردیا گیا<br />دبایئں <em>آگے </em> آگے جانے کیلۓ " );


// %s is database name
define("DATABASE_CREATED","وجود میں لایا گیا %s ڈیٹابیس" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","ٹیبل نیں بنا سکا %s" ); // L118
define("TABLE_CREATED","ٹیبل بنایا گیا %s " ); // L45
define("ROWS_INSERTED","%d انٹریز ٹیبل میں داخل کردیۓ گیۓ %s." ); // L119
define("ROWS_FAILED"," %d انٹریز کو ٹیبل میں داخل کرنے سے ناکام رہا %s." ); // L120
define("TABLE_ALTERED","جدید کردیا %s ٹیبل"); // L133
define("TABLE_NOT_ALTERED","ٹیبل جدید کرنے میں ناکام ہوگیا %s."); // L134
define("TABLE_DROPPED","ٹیبل گرادیا %s"); // L163
define("TABLE_NOT_DROPPED","ٹیبل حذف کرنے میں ناکام رہا %s."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","آپکا مخصوص کردہ فولڈر نہیں ملا برایے مہربانی فولڈر کے وجود کی تصدیو کرین اور یقینی بنایئں کہ فولڈر کو سرور پڑھ سکتا ہے " );
define("ERR_NO_XOOPS_FOUND","زوپس کی کوئ تنصیبات آپکے مخصوص کردہ فولڈر میں نہیں ملا" );
define("ERR_INVALID_EMAIL","ایمیل کارآمد نہیں ہے" ); // L73
define("ERR_REQUIRED","معلومات ضروری ہیں" ); // L41
define("ERR_PASSWORD_MATCH","دونوں پاس ورڈز مطابقت نہیں رکھتے" );
define("ERR_NEED_WRITE_ACCESS","مندرجہ ذیل فولدرزمیں سرور کو لکھنے کی اجازت چاہیۓ<br />(i.e. <em>chmod 777 directory_name</em> on a UNIX/LINUX server)<br />. اگر یہ نہیں درست طریقے سے نہیں بنے براۓ مہربانی انکو بنایں اور ان کے اجازت نامے سیٹ کردیں" );
define("ERR_NO_DATABASE","ڈیٹابیس نہیں بنا سکا۔ سرور انتظامیہ سے تفصیل کے بارے میں رابطہ کریں" ); // L31
define("ERR_NO_DBCONNECTION","ڈیٹابیس سرور سے کنیکٹ نہیں کر سکا" ); // L106
define("ERR_WRITING_CONSTANT","مواد لکھنے میں ناکام رہا %s." ); // L122

define("ERR_COPY_MAINFILE","میں کاپی نہیں کرسکا mainfile.php تقسیم کردہ فایلز  " );
define("ERR_WRITE_MAINFILE","فایل میں نہیں لکھ سکا براۓ مہربانی فایل کے اجازت نامے کو چیک کرکے دوبارہ کوشش کریں mainfile.php.");
define("ERR_READ_MAINFILE","فایل پڑھنے کیلۓ نہیں کھول سکا mainfile.php " );

define("ERR_INVALID_DBCHARSET","مددگار نہیں ہیں '%s' حروف." );
define("ERR_INVALID_DBCOLLATION"," collation '%s' کی حمایت نییں کرتا" );
define("ERR_CHARSET_NOT_SET","ترجیحی حروف کا سیٹ زوپس ڈیٹابیس کیلۓ نہیں ہے" );


define("_INSTALL_CHARSET","UTF-8");
?>