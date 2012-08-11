<?php

/**
* $Id: modinfo.php,v 1.2 2005/05/27 22:52:49 malanciault Exp $
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;

define("_MI_SMEDIA_MD_NAME","اسمارت مدیا");

// A brief description of this module
define("_MI_SMEDIA_MD_DESC","سیستم مدیریت چند رسانه ای برای سایت زوپس شما");

// Config options
define("_MI_SMEDIA_ALL","همه");
define("_MI_SMEDIA_CAT_ON_INDEX"," تعداد شاخه ها در صفحه ی راهنما");
define("_MI_SMEDIA_CAT_ON_INDEXDSC","");
define("_MI_SMEDIA_CLI_PER_FOL","تعداد کلیپ ها در پوشه");
define("_MI_SMEDIA_CLI_PER_FOLDSC","");
define("_MI_SMEDIA_DEFAULT_LANGUAGE","زبان پیش فرض");
define("_MI_SMEDIA_FOL_PER_CAT","تعداد پوشه ها در شاخه");
define("_MI_SMEDIA_FOL_PER_CATDSC","");
define("_MI_SMEDIA_INDEX_MSG","پیام معرفی در صفحه ی راهنما");
define("_MI_SMEDIA_INDEX_MSGDSC","");
define("_MI_SMEDIA_LIST_IMG_WIDTH","عرض لیست تصاویر");
define("_MI_SMEDIA_LIST_IMG_WIDTHDSC","");
define("_MI_SMEDIA_MAIN_IMG_WIDTH","عرض تصویر اصلی");
define("_MI_SMEDIA_MAIN_IMG_WIDTHDSC","");
define("_MI_SMEDIA_HIGHLIGHT_COLOR","رنگ استفاده شده برای مشخص کردن کلمات جستجو ( های لایت)");
define("_MI_SMEDIA_HIGHLIGHT_COLORDSC","");

define("_MI_SMEDIA_CAT_ON_ADMIN","تعداد شاخه ها در صفحه در بخش مدیریت سایت");
define("_MI_SMEDIA_CAT_ON_ADMINDSC","");
define("_MI_SMEDIA_FOLDER_ON_ADMIN","تعداد پوشه ها ی نمایش داده شده در شاخه در بخش مدیریت سایت");
define("_MI_SMEDIA_FOLDER_ON_ADMINDSC","");

// Names of admin menu items
define("_MI_SMEDIA_ADMENU1","راهنما");
define("_MI_SMEDIA_ADMENU2","شاخه ها");
define("_MI_SMEDIA_ADMENU3","پوشه ها");
define("_MI_SMEDIA_ADMENU4","کلیپ ها");
define("_MI_SMEDIA_ADMENU5","دسترسی ها");
define("_MI_SMEDIA_ADMENU6","گروه ها و بلاک ها");
define("_MI_SMEDIA_ADMENU7","برو به ماژول");

//Names of Blocks and Block information
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT","لیست کلیپ های جدید");
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT_DSC","لیست از تمام کلیپ های جدید");

// About.php constants
define('_MI_SMEDIA_AUTHOR_INFO',"توسعه دهندگان");
define('_MI_SMEDIA_DEVELOPER_LEAD',"راهنمایی کنندگان");
define('_MI_SMEDIA_DEVELOPER_CONTRIBUTOR',"شرکت کنندگان");
define('_MI_SMEDIA_DEVELOPER_WEBSITE',"وب سایت");
define('_MI_SMEDIA_DEVELOPER_EMAIL',"ایمیل");
define('_MI_SMEDIA_DEVELOPER_CREDITS',"سازندگان");
define('_MI_SMEDIA_DEMO_SITE',"دموی سایت smartfactory");
define('_MI_SMEDIA_MODULE_INFO',"اطلاعات توسعه یافتگی ماژول");
define('_MI_SMEDIA_MODULE_STATUS',"وضعیت");
define('_MI_SMEDIA_MODULE_RELEASE_DATE',"تاریخ انتشار");
define('_MI_SMEDIA_MODULE_DEMO',"سایت دمو");
define('_MI_SMEDIA_MODULE_SUPPORT',"سایت رسمی پشتیبانی");
define('_MI_SMEDIA_MODULE_BUG',"گزارش باگ ها در این ماژول");
define('_MI_SMEDIA_MODULE_SUBMIT_BUG',"ارسال باگ");
define('_MI_SMEDIA_MODULE_FEATURE',"پیشنهادکردن یک امکان جدید برای این ماژول");
define('_MI_SMEDIA_MODULE_SUBMIT_FEATURE',"درخواست امکانات");
define('_MI_SMEDIA_MODULE_DISCLAIMER',"شرایط");
define('_MI_SMEDIA_AUTHOR_WORD',"جهان سازنده");
define('_MI_SMEDIA_VERSION_HISTORY',"تاریخ ورژن");
define('_MI_SMEDIA_BY',"به وسیله");

// Beta
define('_MI_SMEDIA_WARNING_BETA',"This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.");

// RC
define('_MI_SMEDIA_WARNING_RC',"This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SMEDIA_WARNING_FINAL',"This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.");
?>