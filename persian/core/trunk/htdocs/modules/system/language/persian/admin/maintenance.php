<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fa
 * _CHARSET     UTF-8
 * @version     $Id:$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "تعمیرات");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","تمام تعمیرات");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Dump");

define("_AM_SYSTEM_MAINTENANCE_SESSION","خالی کردن جدول sessions در پایگاه داده ها");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","تعمیر نشست‌ها : موفق");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","تعمیر نشست‌ها : خطا");
define("_AM_SYSTEM_MAINTENANCE_CACHE","خالی کردن شاخه کش");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","تعمیر کش : موفق");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","تعمیر کش : خطا");
define("_AM_SYSTEM_MAINTENANCE_TABLES","تعمیر جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","تعمیر کش : موفق");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","تعمیر کش : خطا");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","بهینه سازی, برسی, تعمیر و آنالیز جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","تعمیر پایگاه داده‌ها : موفق");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","تعمیر پایگاه داده‌ها : خطا");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","بهینه کردن جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","برسی جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","تعمیر جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","آنالیز جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"ANALYZE TABLE analyzes and stores the key distribution for a table. During the analysis, the table is locked with a read lock.<br />
CHECK TABLE checks a table or tables for errors.<br />
OPTIMIZE TABLE to reclaim the unused space and to defragment the data file.<br />
REPAIR TABLE repairs a possibly corrupted table.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","نتیجه");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","بدون نتیجه");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","وظیفه خالی کردن کش");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","وظیفه خالی کردن جدول نشست‌ها");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","وظیفه پایگاه داده‌ها");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","هیچ چیز برای تعمیر انتخاب نشده است.");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","بهینه کردن");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","برسی"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","تعمیر");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","آنالیز");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","انتخاب جدول‌ها یا ماژول‌ها");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","اضافه کردن دستور DROP TABLE IF EXISTS 'tables' در dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "یا");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "و");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "شما باید یک جدول یا ماژول انتخاب کنید.");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "هیچ جدولی");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "جدول‌ها");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "ساختمان");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "تعداد رکورد‌ها");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "فایل ساخته شد");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "نتایج");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "رکورد‌ها");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>شما میتوانید تغمیرات ساده ای بر روی زوپس خود اعمال کنید: خالی کردن کش و جدول نشست‌ها, و تعمیر جدول‌های پایگاه داده‌ها</li>
</ul>");

?>