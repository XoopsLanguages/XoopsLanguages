<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","مدیریت ماژول‌ها");
define("_MD_AM_MODULE","ماژول");
define("_MD_AM_VERSION","نسخه");
define("_MD_AM_LASTUP","آخرین به روز‌رسانی");
define("_MD_AM_DEACTIVATED","غیر فعال شده");
define("_MD_AM_ACTION","انجام عمل");
define("_MD_AM_DEACTIVATE","غیر فعال کن");
define("_MD_AM_ACTIVATE","فعال کن");
define("_MD_AM_UPDATE","به روز کن");
define("_MD_AM_DUPEN","ورود اطلاعات در جدول ماژول به صورت دوتایی انجام شده است");
define("_MD_AM_DEACTED","ماژول انتخاب شده غیر‌فعال شد شما می‌توانید به سهولت ماژول را از نصب خارج کنید (uninstall)");
define("_MD_AM_ACTED","ماژول انتخاب شده فعال شد");
define("_MD_AM_UPDTED","ماژول انتخاب شده به روز شد!");
define("_MD_AM_SYSNO","ماژول سیستم را نمی‌توان غیر فعال کرد");
define("_MD_AM_STRTNO","این ماژول به عنوان صفحه اول انتخاب شده است. لطفا در قسمت ویژگی‌ها (preferences) ماژول صفحه اول را به ماژولی که می‌خواهید عوض کنید.");
define("_MD_AM_DOMAINS_IN","در دامنه");
// added in RC2
define("_MD_AM_PCMFM","لطفا تایید کنید:");

// added in RC3
define("_MD_AM_ORDER","محل قرار‌گیری در منوی اصلی");
define("_MD_AM_ORDER0","(0 = در منوی اصلی نشان داده نمی‌شود)");
define("_MD_AM_ACTIVE","فعال (Active)");
define("_MD_AM_INACTIVE","غیر‌فعال (Inactive)");
define("_MD_AM_NOTINSTALLED","نصب‌نشده");
define("_MD_AM_NOCHANGE","بدون تغییر");
define("_MD_AM_INSTALL","نصب");
define("_MD_AM_UNINSTALL","خارج کردن از نصب (Uninstall)");
define("_MD_AM_SUBMIT","ارسال");
define("_MD_AM_CANCEL","انصراف");
define("_MD_AM_DBUPDATE","پایگاه‌داده با موفقیت به روز شد!");
define("_MD_AM_BTOMADMIN","بازگشت به صفحه‌ی اصلی مدیریت ماژول‌ها");

// %s represents module name
define("_MD_AM_FAILINS","ناتوانی در نصب %s.");
define("_MD_AM_FAILACT","ناتوانی در فعال‌کردن %s.");
define("_MD_AM_FAILDEACT","ناتوانی در غیر فعال‌کردن %s.");
define("_MD_AM_FAILUPD","ناتوانی در به روز کردن %s.");
define("_MD_AM_FAILUNINS","ناتوانی در خارج کردن از نصب %s.");
define("_MD_AM_FAILORDER","ناتوانی در تغییرمحل قرارگیری در منوی اصلی %s.");
define("_MD_AM_FAILWRITE","ناتوانی در نوشتن در منوی اصلی");
define("_MD_AM_ALEXISTS","ماژول %s در حال حاضر وجود دارد");
define("_MD_AM_ERRORSC","خطا:");
define("_MD_AM_OKINS","ماژول %s با موفقیت نصب شد");
define("_MD_AM_OKACT","ماژول %s با موفقیت فعال شد");
define("_MD_AM_OKDEACT","ماژول %s با موفقیت غیر‌فعال شد");
define("_MD_AM_OKUPD","ماژول %s با موفقیت به روز شد");
define("_MD_AM_OKUNINS","ماژول %s با موفقیت از نصب خارج شد");
define("_MD_AM_OKORDER","ماژول %s با موفقیت تغییر کرد");

define('_MD_AM_RUSUREINS','برای نصب ماژول دکمه‌ی زیر را بزنید');
define('_MD_AM_RUSUREUPD','برای به روز کردن ماژول دکمه‌ی زیر را بزنید');
define('_MD_AM_RUSUREUNINS','آیا مطمئنید که می‌خواهید این ماژول را از نصب خارج کنید؟ (Uninstall)');
define('_MD_AM_LISTUPBLKS','بلاک‌های زیر آپدیت شدند <br />انتخاب کنید که کدام یک از گزینه‌ها دوباره نویسی (Overwrite) شوند؟<br />');
define('_MD_AM_NEWBLKS','بلاک‌های جدید');
define('_MD_AM_DEPREBLKS','بلاک‌های Deparced');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','نصب ');
define('_MD_AM_TABLE_RESERVED','%s یک جدول ذخیره شده است !');
define('_MD_AM_CREATE_TABLES','ساخت جدول....');
define('_MD_AM_TABLE_CREATED','جدول %s ساخته شد');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; اطلاعات به جدول %s وارد شد');
define('_MD_AM_INSERT_DATA_FAILD','ناتوان در وارد کردن اطلاعات %s به پایگاه‌هایداده.');
define('_MD_AM_INSERT_DATA_DONE','اطلاعات ماژول با موفقیت وارد شد.');
define('_MD_AM_MODULEID',' شماره‌ی ماژول: %s');
define('_MD_AM_SQL_FOUND','فایل SQl در %s پیدا شد');
define('_MD_AM_SQL_NOT_FOUND','فایل SQl در %s پیدا نشد');
define('_MD_AM_SQL_NOT_CREATE','خطا: ناتوان در ساخت %s ');
define('_MD_AM_SQL_NOT_VALID','%s SQl صحیح ندارد!');

define('_MD_AM_GROUP_ID',' شماره‌ی گروه: %s ');
define('_MD_AM_NAME',' نام: ');
define('_MD_AM_VALUE',' مقدار: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','اضافه کردن تمپلیت ...');
define('_MD_AM_TEMPLATES_DELETE','حذف تمپلیت ...');
define('_MD_AM_TEMPLATES_UPDATE','به روز کردن تمپلیت ...');

define('_MD_AM_TEMPLATE_ID','شماره تمپلیت: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','تمپلیت %s به پایگاه‌های داده اضافه شد');
define('_MD_AM_TEMPLATE_ADD_ERROR','خطا: ناتوان در وارد کردن تمپلیت %s به پایگاه‌های داده.');
define('_MD_AM_TEMPLATE_COMPILED','تمپلیت %s تالیف شد ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','خطا: اشکال در تالیف تمپلیت %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','تمپلیت %s از پایگاه‌های‌دادهحذف شد. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','خطا: ناتوان در حذف تمپلیت %s از پایگاه‌های‌داده. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','تمپلیت %s به پایگاه‌های‌داده وارد شد. ');
define('_MD_AM_TEMPLATE_RECOMPILE','تمپلیت %s دوباره تالیف شد');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','خطا: دوباره تالیف‌کردن تمپلیت %s شکست خورد');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','خطا: ناتوان در دوباره تالیف‌کردن تمپلیت %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','خطا: ناتوان در حذف تمپلیت قدیمی %s. بی نتیجه ماندن به روز کردن این فایل. ');
define('_MD_AM_TEMPLATE_UPDATE','تمپلیت %s به روز شد. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','خطا: ناتوان در به روز کردن تمپلیت %s. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','اضافه کردن بلاک ...');
define('_MD_AM_BLOCKS_DELETE','حذف بلاک ...');
define('_MD_AM_BLOCKS_REBUILD','دوباره‌سازی بلاک ...');

define('_MD_AM_BLOCK_ID',' شماره‌ی بلاک: %s ');

define('_MD_AM_BLOCK_ACCESS','دسترسی بلاک‌های اضافه شده درست است');
define('_MD_AM_BLOCK_ACCESS_ERROR','خطا: ناتوان در اضافه کردن دسترسی صحیح بلاک ها');
define('_MD_AM_BLOCK_ADD','بلاک %s اضافه شد ');
define('_MD_AM_BLOCK_ADD_ERROR','خطا: ناتوان در اضافه کردن بلاک %s به پایگاه‌های داده! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','خطای پایگاه‌های داده: %s ');
define('_MD_AM_BLOCK_CREATED','بلاک %s ساخته شد ');
define('_MD_AM_BLOCK_DELETE','بلاک %s حذف شد. ');
define('_MD_AM_BLOCK_DELETE_DATA','تمپلیت بلاک %s از پایگاه‌های داده حذف شد. ');
define('_MD_AM_BLOCK_DELETE_ERROR','خطا: ناتوان در حذف بلاک %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','خطا: ناتوان در حذف تمپلیت بلاک %s از پایگاه‌های داده');
define('_MD_AM_BLOCK_DEPRECATED','تمپلیت بلاک %s منسوخ شده ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','خطا: ناتوان در حذف تمپلیت بلاک منسوخ شده.  ');
define('_MD_AM_BLOCK_UPDATE','بلاک %s به روز شد. ');

/* Configs */
define('_MD_AM_GONFIG_ID','شماره پیکر‌بندی: %s');
define('_MD_AM_MODULE_DATA_ADD','اضافه کردن اطلاعات پیکر‌بندی ماژول ...');
define('_MD_AM_MODULE_DATA_DELETE','حذف گزینه‌های پیکر‌بندی ماژول ...');
define('_MD_AM_MODULE_DATA_UPDATE','اطلاعات ماژول به روز شد.');

define('_MD_AM_CONFIG_ADD',' گزینه‌های پیکر‌بندی اضافه شد');
define('_MD_AM_CONFIG_DATA_ADD',' پیکر‌بندی %s به پایگاه‌های داده اضافه شد');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' خطا: ناتوان در وارد کردن اطلاعات پیکربندی %s به پایگاه‌های داده. ');
define('_MD_AM_GONFIG_DATA_DELETE','اطلاعات پیکربندی از پایگاه‌های داده حذف شد. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','خطا: ناتوان در حذف اطلاعات پیکربندی از پایگاه‌های داده');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','تنظیمات صحیح گروه...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','خطا: ناتوان در حذف دسترسی‌های گروه ');
define('_MD_AM_GROUP_PERMS_DELETED','دسترسی گروه حذف شد ');

define('_MD_AM_ACCESS_ADMIN_ADD','اضافه کردن دسترسی صحیح مدیر برای گروه شماره: %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','خطا: ناتوان در اضافه کردن دسترسی صحیح مدیریت برای گروه شماره %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','اضافه کردن دسترسی صحیح کاربری برای گروه شماره: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','خطا: ناتوان در اضافه کردن دسترسی صحیح کاربری برای گروه شماره: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','اجرا %s موفق آمیز نبود');
define('_MD_AM_FAILED_SUCESS','اجرا %s موفقیت آمیز بود.');

define('_MD_AM_DELETE_ERROR','خطا: ناتوان در حذف %s');
define('_MD_AM_UPDATE_ERROR','خطا: ناتوان درحذف %s');
define('_MD_AM_DELETE_MOD_TABLES','حذف جدول‌های ماژول ... ');

define('_MD_AM_COMMENTS_DELETE','حذف پیام‌ها ...');
define('_MD_AM_COMMENTS_DELETE_ERROR','خطا: ناتوان در حذف پیام‌ها');
define('_MD_AM_COMMENTS_DELETED','پیام‌ها حذف شد');

define('_MD_AM_NOTIFICATIONS_DELETE','حذف آگاهی‌رسانی‌ها');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','خطا: ناتوان در حذف آگاهی‌رسانی‌ها');
define('_MD_AM_NOTIFICATIONS_DELETED','آگاهی‌رسانی‌ها حذف شد');

define('_MD_AM_TABLE_DROPPED','جدول %s خالی شد!');
define('_MD_AM_TABLE_DROPPED_ERROR','خطا: ناتوان در خالی‌کردن جدول %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','خطا: عدم دسترسی در خالی‌کردن جدول %s!');

?>
