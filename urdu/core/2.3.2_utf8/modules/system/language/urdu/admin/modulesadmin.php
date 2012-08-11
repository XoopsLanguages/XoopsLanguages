<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","موڈیولز انتظامیہ");
define("_MD_AM_MODULE","موڈیول");
define("_MD_AM_VERSION","نسخہ");
define("_MD_AM_LASTUP","آجری خدیدیت");
define("_MD_AM_DEACTIVATED","غیر فوال کیا");
define("_MD_AM_ACTION","عمل");
define("_MD_AM_DEACTIVATE","غیر فعال کریں");
define("_MD_AM_ACTIVATE","فعال کریں");
define("_MD_AM_UPDATE","جدید بنایں");
define("_MD_AM_DUPEN","موڈیول ٹیبل میں ہم شکل داخلہ");
define("_MD_AM_DEACTED","آپکا منتخب موڈیول غیر فعال بنا دیا گیا- آپ اسے سسٹم سے ختنم کرسکتے ہیں");
define("_MD_AM_ACTED","منتخب موڈیول فعال بنا دیا گیا");
define("_MD_AM_UPDTED","منتخب موڈیول جدید بنا دیا گیا");
define("_MD_AM_SYSNO","سسٹم موڈیول غیر فعال نہیں ہو سکتا");
define("_MD_AM_STRTNO","یہ موڈیول ترجیحی طور پر پہلے صفحے کیلۓ منتخب ہے۔ آپ اسے اپنی ترجیحات کے مطابق تبدیل کرسکتے ہیں");

// added in RC2
define("_MD_AM_PCMFM","براۓ مہربانی اطاعت کریں");

// added in RC3
define("_MD_AM_ORDER","ترتیب");
define("_MD_AM_ORDER0","(0 = چھپا)");
define("_MD_AM_ACTIVE","فعال");
define("_MD_AM_INACTIVE","غیر فعال");
define("_MD_AM_NOTINSTALLED","تقرر نہیں ہوا");
define("_MD_AM_NOCHANGE","کوئ تبدیلی نہیں");
define("_MD_AM_INSTALL","تقرر");
define("_MD_AM_UNINSTALL","ختم کریں");
define("_MD_AM_SUBMIT","ارسال کریں");
define("_MD_AM_CANCEL","رد کریں");
define("_MD_AM_DBUPDATE","ڈیٹابیس کامیابی سے جدید کردایا گیا");
define("_MD_AM_BTOMADMIN","موڈیول انتظامیہ کے صفحے پر جایئں");

// %s represents module name
define("_MD_AM_FAILINS","ختم نہیں کرسکتا %s.");
define("_MD_AM_FAILACT","فعال نہیں کر سکا %s.");
define("_MD_AM_FAILDEACT","غیر فعال نہیں کرسکا%s.");
define("_MD_AM_FAILUPD","جدید نہیں کر سکا%s.");
define("_MD_AM_FAILUNINS","ختم نہیں کرسکا %s.");
define("_MD_AM_FAILORDER","دوبارہ ترتیب نہیں دے سکا %s.");
define("_MD_AM_FAILWRITE","مرکزی مینیو میں لکھ نہیں سکا");
define("_MD_AM_ALEXISTS","موڈیول پہلے سے موجود ہے %s ");
define("_MD_AM_ERRORSC","خطا(s):");
define("_MD_AM_OKINS","موڈیول کامیابی سے انسٹال کردیا گیا %s ");
define("_MD_AM_OKACT","موڈیول کامیابی سے فعال کردیا گیا %s ");
define("_MD_AM_OKDEACT","موڈیول کامیابی سے غیر فعال کردیا گیا %s ");
define("_MD_AM_OKUPD","موڈیول کامیابی سے جدید کردیا %s ");
define("_MD_AM_OKUNINS","موڈیول کامیابی سے ختم کردیا %s ");
define("_MD_AM_OKORDER","موڈیول کامیابی سے تبدیل کردیا %s ");

define('_MD_AM_RUSUREINS','موڈیول کی تنصیب کیلۓ نیچھے دیا گیا بٹن دبایئں');
define('_MD_AM_RUSUREUPD','موڈیول کو جدید کرنے کیلۓ نیچھے دیا گیا بٹن دبایئں');
define('_MD_AM_RUSUREUNINS','آپ کو یقین ہے کہ آپ اس موڈیول کو ختم کرنا چاہیں گے');
define('_MD_AM_LISTUPBLKS','مندرجہ زیل تختہ جدید کیا جاۓ گا<br />تختوں کا انتخاب کریں جنہیں دوبارہ لکھنا ہے(ٹیمپلٹ اور طرز) <br />');
define('_MD_AM_NEWBLKS','نۓ تختے');
define('_MD_AM_DEPREBLKS','کھوٹ تختے');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','تنصیب کر رہا ہے ');
define('_MD_AM_TABLE_RESERVED','%s پہلے سے محوظ ٹیبل');
define('_MD_AM_CREATE_TABLES','ٹیبلیں وجود میںلار رہا ہے۔۔ ۔ ۔ ۔');
define('_MD_AM_TABLE_CREATED','ٹیبل وجود میں لاے %s ');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; ڈیٹا ٹیبل میں داخل کیا گیا %s');
define('_MD_AM_INSERT_DATA_FAILD','ڈیٹا بیس میں داخل نہیں کرسکا %s ');
define('_MD_AM_INSERT_DATA_DONE','موڈیول کا ڈیٹا کامیابی سے داخل کردیا گیا');
define('_MD_AM_MODULEID',' موڈیول کی شناخت: %s');
define('_MD_AM_SQL_FOUND','SQL پر فایل ملا %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL پر فایل نہیں ملا %s');
define('_MD_AM_SQL_NOT_CREATE',' %s خطا: وجود میں نہیں لاسکا');
define('_MD_AM_SQL_NOT_VALID','%s درست sql فائل نہیں ہے!');

define('_MD_AM_GROUP_ID',' گروپ کی شناخت: %s ');
define('_MD_AM_NAME',' نام: ');
define('_MD_AM_VALUE',' قدر: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','ٹیمپلٹس شامل کرہا ہے ۔ ۔ ۔');
define('_MD_AM_TEMPLATES_DELETE','ٹیمپلٹس حذف کرہا ہے ۔ ۔ ۔');
define('_MD_AM_TEMPLATES_UPDATE','ٹیمپلٹس جدید بنا رہا ہے ۔ ۔ ۔');

define('_MD_AM_TEMPLATE_ID','ٹیمپلٹس کی شناخت: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','ٹیمپلٹ  %s ڈیٹابیس میں شامل کرديا گیا');
define('_MD_AM_TEMPLATE_ADD_ERROR','خطا: ٹیمپلٹ ڈیٹابیس میں شامل نہیں کیا جا سکا %s');
define('_MD_AM_TEMPLATE_COMPILED','ٹیملٹ کی تالیف کیا گیا %s');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','خطا: ٹیمپلٹ کی تالیف کرنے میں ناکام ہوا %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','ٹیمپلٹ ڈیٹابیس سے حذف کردیا گیا %s');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','خطا: ٹیمپلٹ حذف نہیں کر سکا %s ڈیٹابییس سے. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','ٹیمپلٹ ڈیٹابیس میں داخل کردیا %s');
define('_MD_AM_TEMPLATE_RECOMPILE','ٹیمپلٹ  کی دوبارہ تالیف کی گئ %s');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','خطا: ٹیمپلٹ %s کی تالیف کرنے میں ناکام رہا');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','خطا: ٹیممپلٹ کی دوبارہ تالیف نہین کرسکا %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','خطا: پرانا ٹیمپلٹ حذف نہیں کرسکا %s. فایل کی جدیدیت سے نکل رہا ہے ');
define('_MD_AM_TEMPLATE_UPDATE','ٹیمپلٹ %s جدید کردیا گیا ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','خطا: جدید نہ کرسکا %s ٹیمپلٹ ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','تختے شامل کرہا ہے ۔ ۔ ۔');
define('_MD_AM_BLOCKS_DELETE','تختے حذف کر رہا ہے ۔ ۔ ۔ ');
define('_MD_AM_BLOCKS_REBUILD','تختے دوبارہ بنا رہا ہے۔ ۔ ۔ ');

define('_MD_AM_BLOCK_ID','  کی شناخت: %s ');

define('_MD_AM_BLOCK_ACCESS','تختے کی دسترس کے حقوق شامل کرلۓ گۓ');
define('_MD_AM_BLOCK_ACCESS_ERROR','خطا: تختے تک دسترس کے حقوق شامل نہ کرسکا');
define('_MD_AM_BLOCK_ADD','تختہ %s شامل کیا گیا ');
define('_MD_AM_BLOCK_ADD_ERROR','خطا: تختہ شامل نہ کرسکا %s ڈیٹابیس میں ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','ڈیٹا بیس میں خطا سر زد ہوئ: %s ');
define('_MD_AM_BLOCK_CREATED','بنا دیا گیا %s تختہ ');
define('_MD_AM_BLOCK_DELETE','حذف کردیا گیا %s تختہ ');
define('_MD_AM_BLOCK_DELETE_DATA','ڈیٹابیس سے حذف کردیا گیا %s تختے کی ');
define('_MD_AM_BLOCK_DELETE_ERROR','خطا: تختہ حذف نہين کر سکا %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','خطا: ڈیٹابین سے تختے کی ٹیمپلٹ حذف نہین کرسکا  %s ');
define('_MD_AM_BLOCK_DEPRECATED','کھوٹ ہے %s تختے کی ٹیمپلٹ ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','جطا: کہوٹ تجتے کی ٹیمپلٹ حزف بہیں کرسکا  ');
define('_MD_AM_BLOCK_UPDATE','جدید کردیا گیا %s تختہ ');

/* Configs */
define('_MD_AM_GONFIG_ID','شناخت	ترجیح کی: %s');
define('_MD_AM_MODULE_DATA_ADD','موڈیول کی ترجیحاتی ڈیٹا شامل کرہا ہے ۔ ۔ ۔');
define('_MD_AM_MODULE_DATA_DELETE','موڈیول کی ترجیحاتی ڈیٹا حذف کر رہا ہے۔ ۔ ۔ ');
define('_MD_AM_MODULE_DATA_UPDATE','موڈیول ڈیٹا جدید کردہا.');

define('_MD_AM_CONFIG_ADD',' ترجیحاتی آپشن شامل کیا گیا');
define('_MD_AM_CONFIG_DATA_ADD',' ترخیح %s ڈیٹابیس میں شامل کریا گیا');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' خطا: ترجیحات ڈیٹابیس میں نہیں ڈال سکا %s ');
define('_MD_AM_GONFIG_DATA_DELETE','ترجیحی ڈیٹا ڈیٹابیس سے حذف کردیا گیا ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','جظا: ترجیحی ڈیٹا ڈیٹابیس سے حذف نہین کر سکا');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','گروپس کے حقوق سیٹ کر رہا ہے۔ ۔ ۔ ');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','خطا: گروپ کے اجازت نامے حذف نہین کر سکا ');
define('_MD_AM_GROUP_PERMS_DELETED','گروپ کے اجازت نامے حذف کردیۓ ');

define('_MD_AM_ACCESS_ADMIN_ADD',' %s منتظم کے حقوق دسترس گروپ کی شناخت کیلۓ شامل کردیۓ گۓ');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','خطا: منتظم کے حقوق دسترس گروپ کیلۓ شامل نہیں کر سکا %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR',' %s رکن کے حقوق دسترس گروپ کے شناخت کیلۓ شامل کردیۓ گۓ');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','خظا: رکن کے حقوق دسترس گروپ کیلۓ شامل نہين کر سکا: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','تعمیل کرنے میں ناکامیاب رہا %s');
define('_MD_AM_FAILED_SUCESS','%s کامیابی سے تعمیل کیا گیا.');

define('_MD_AM_DELETE_ERROR','خطا: حزف نہیں کرسکا %s');
define('_MD_AM_UPDATE_ERROR','خطا: جدید نہين کرسکا %s');
define('_MD_AM_DELETE_MOD_TABLES','موڈیول ٹیبلز حذف کرہا ہے۔ ۔ ۔ ');

define('_MD_AM_COMMENTS_DELETE','تبصرے حذف کر رہا ہے۔ ۔ ۔ ');
define('_MD_AM_COMMENTS_DELETE_ERROR','خطا: تبصرے حذف نہ کرسکا');
define('_MD_AM_COMMENTS_DELETED','تبصرے ہذف کردیۓ گۓ');

define('_MD_AM_NOTIFICATIONS_DELETE','اطلاعات حذف کررہا ہے۔ ۔ ۔ ');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','خطا: اطلاعات حذف نہ کرسکا');
define('_MD_AM_NOTIFICATIONS_DELETED','اطلاعات حذف کردیۓ');

define('_MD_AM_TABLE_DROPPED','گرادیا %s ٹیبل');
define('_MD_AM_TABLE_DROPPED_ERROR','خظا: ٹیبل نہيں گراسکا %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','خطا: ٹیبل گرانے کی اجازت نہیں %s !');
?>