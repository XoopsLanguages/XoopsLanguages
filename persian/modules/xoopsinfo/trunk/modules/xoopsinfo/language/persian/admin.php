<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: xoopsinfo 2.0
* Licence : GPL
* Authors :
*              - Jmorris
*              - Marco
*              - Christian
*              - DuGris (http://www.dugris.info)
*/


// Names of admin menu items
define("_AM_XI_ADMENU1","اطلاعات زوپس");
define("_AM_XI_ADMENU2","اطلاعات سرور");
define("_AM_XI_ADMENU3","اطلاعات MySql");
define("_AM_XI_ADMENU4","اطلاعات ماژول ها");
define("_AM_XI_ADMENU5","اطلاعات ادیتور ها");
define("_AM_XI_ADMENU6","اطلاعات تمپلیت ها");
define("_AM_XI_ADMENU7"," مدیریت فرمت ها");

define("_AM_XI_GOTOHOMEPAGE","بازگشت به قسمت کاربر");
define("_AM_XI_MODULEADMIN","- اطلاعات در مورد محیط زوپس شما");

define("_AM_XI_DOWN_SAFEMODESTATUS","وضعیت safe mode");
define("_AM_XI_DOWN_REGISTERGLOBALS","ثبت جهانی");
define("_AM_XI_DOWN_ALLOW_URL_FOPEN","allow_url_fopen");
define("_AM_XI_DOWN_USE_TRANS_SID","session.use_trans_sid");
define("_AM_XI_DOWN_SERVERUPLOADSTATUS","وضعیت بارگذاری روی سرور");
define("_AM_XI_DOWN_MAXUPLOADSIZE","بیشتر سایز آپلود فایل");
define("_AM_XI_DOWN_SAFEMODEPROBLEMS"," ممکن است مشکل ایجاد کند");
define("_AM_XI_DOWN_GDLIBSTATUS","پیشتبانی از کتابخانه ی GD");
define("_AM_XI_DOWN_GDLIBVERSION","نسخه ی کتاب خانه ی GD");
define("_AM_XI_DOWN_GDON"," تصاویر تمبری قابل استفاده هستند");
define("_AM_XI_DOWN_GDOFF","تصاویر تمبری غیر قابل استفاده هستند");
define("_AM_XI_DOWN_OFF","خاموش");
define("_AM_XI_DOWN_ON","روشن");

define("_AM_XI_EDITOR_CHECK","وضعیت");
define("_AM_XI_EDITOR_NAME","نام ادیتور");

define("_AM_XI_EDITOR_NONE","");
define("_AM_XI_EDITOR_INSTALL_OK","ماژول نصب شده");
define("_AM_XI_EDITOR_NO_INSTALL","ماژول نصب نشده");

define("_AM_XI_EDITOR_OK","Editor OK");
define("_AM_XI_EDITOR_ERROR","فایل پیدا نشد: class/... ");
define("_AM_XI_EDITOR_MODULE","ماژول نصب نشده - فایل پیدا شده: class/... ");
define("_AM_XI_EDITOR_CLASS","ماژول نصب شده فایل پیدا نشده : class/... ");

define("_AM_XI_MODULE_NAME","ماژول ها");
define("_AM_XI_MODULE_STATUS","وضعیت");
define("_AM_XI_MODULE_ACTION","فعال");
define("_AM_XI_MODULE_VERSION","نسخه");
define("_AM_XI_MODULE_XOOPS","نسخه نوشته در فایل xoops_version");
define("_AM_XI_MODULE_TABLE","نسخه نوشته شده در جدول ماژول در دیتابیس");
define("_AM_XI_MODULE_NEW","نسخه جدید");
define("_AM_XI_MODULE_UPDATE","به روز رسانی ماژول");
define("_AM_XI_MODULE_DOWNLOAD","دریافت نسخه ی جدید");
define("_AM_XI_MODULE_SUPPORT","پشتیبانی");
define("_AM_XI_MODULE_FORUM","تالار گفتگو");
define("_AM_XI_MODULE_BUG","گزارش باگ");
define("_AM_XI_MODULE_FEATURE","خصوصیت");

define("_AM_XI_XOOPS_VERSION","نسخه ی زوپس");
define("_AM_XI_XOOPS_URL","آدرس وب سایت");
define("_AM_XI_XOOPS_ROOT_PATH","محل فیزیکی زوپس");
define("_AM_XI_XOOPS_THEME","قالب پیش فرض");
define("_AM_XI_XOOPS_TEMPLATE","انتخاب تمپلیت پیش فرض");
define("_AM_XI_XOOPS_DEBUG","حالت خطا گیری");
define("_AM_XI_XOOPS_STARTPAGE","ماژول صفحه ی اول سایت شما");
define("_AM_XI_XOOPS_THEME_FROMFILE","چک کردن تمپلیت های برای اصلاح موارد جدید در سایت؟");

define("_AM_XI_PROTECTOR_MODULE","ماژول پروتکتور");
define("_AM_XI_PROTECTOR_MODULE_NOT","نصب نشده");
define("_AM_XI_PROTECTOR_MODULE_OK","نصب شده");
define("_AM_XI_PROTECTOR_PRECHECK","Pre check ");
define("_AM_XI_PROTECTOR_CHECK_ERR"," اگر میخواید  <a target='_blank' href='" . XOOPS_URL . "/modules/protector/docs/README'> قابل نوشتن باشد باید mainfile.php خود را ویرایش کنیدREADME</a>");
define("_AM_XI_PROTECTOR_PRECHECK_MSG","missing precheck");
define("_AM_XI_PROTECTOR_POSTCHECK","Post check");
define("_AM_XI_PROTECTOR_POSTCHECK_MSG","missing postcheck");
define("_AM_XI_PROTECTOR","<font color='#CC0000'>پروتکتو : </font>Temporary disabled");

define("_AM_XI_SERVER_SOFTWARE","نرم افزار های سرور");
define("_AM_XI_SERVER_PHP","نسخه ی php ");
define("_AM_XI_SERVER_MYSQL"," نسخه ی MySql");

define("_AM_XI_BROWSER","مرورگر");

define("_AM_XI_SAVE","ذخیره");

define("_AM_XI_MYSQL_ID","شماره");
define("_AM_XI_MYSQL_DB","پایگاه داده ها");
define("_AM_XI_MYSQL_INFO","اطلاعات");
define("_AM_XI_MYSQL_TIME","زمان");
define("_AM_XI_MYSQL_STATUS","وضعیت");
define("_AM_XI_MYSQL_DB_LENGTH","Data Base length");
define("_AM_XI_MYSQL_OCTETS","Octets");
define("_AM_XI_MYSQL_KOCTETS","Ko");

global $xoopsModule;
define("_AM_XI_MAKE_UPDATE","The update of the module was not made : ");
define("_AM_XI_MAKE_UPGRADE","نسخه ی جدید <font color='#CC0000'>" . $xoopsModule->name() . "</font> در دسترس است<br />برای دریافت آن به آدرس مقابل بروید:");
define("_AM_XI_NO_UPGRADE","شما از آخرین نسخه استفاده میکنید !!!");

define("_AM_XI_MIME_ID","Id");
define("_AM_XI_MIME_EXT","Extension");
define("_AM_XI_MIME_TYPES","Types Mime");
define("_AM_XI_MIME_NAME"," نوع کاربرد");
define("_AM_XI_MIME_TYPE","Mimetypes<br /><br /><span style='font-weight: normal;'>Enter each mimetype associated with the file extension. Each mimetype must be seperated with <font color='#CC0000'><b>|</b></font>.</span>");
define("_AM_XI_MIME_GROUPS","گروه ها");
define("_AM_XI_MIME_MODULES","ماژول: ");
define("_AM_XI_MIME_MTYPE","نوع: ");
define("_AM_XI_MIME_STATUS","نمایش");
define("_AM_XI_MIME_WIDTH","بیشترین عرض فایل");
define("_AM_XI_MIME_HEIGHT","بیشترین طول فایل");
define("_AM_XI_MIME_SIZE","بیشترین سایز فایل");
define("_AM_XI_MIME_ACTION","فعال");
define("_AM_XI_MIME_DISPLAY","نمایش: ");
define("_AM_XI_MIME_ALL","همه");
define("_AM_XI_MIME_VIEW","نمایش");
define("_AM_XI_MIME_HIDE","مخفی ");
define("_AM_XI_MIME_EDIT","ویرایش کردن");
define("_AM_XI_MIME_DELE","پاک کردن");
define("_AM_XI_MIME_DELETETHIS","پاک کردن این فرمت");
define("_AM_XI_MIME_NONE","هیچ");

define("_AM_XI_MIME_NEW","فرمت جدید");
define("_AM_XI_MIME_MODIFY","ویرایش کردن");
define("_AM_XI_MIME_CREATE","ساختن");
define("_AM_XI_MIME_CANCEL","لغو کردن");
define("_AM_XI_MIME_SAVEALL","ذخیره");

define("_AM_XI_MODULE_TEMPLATE","تمپلیت ها");
define("_AM_XI_MODULE_TEMPLATE_BLOCK","تمپلیت ها ( بلاک ها)");
define("_AM_XI_TPL_OVERRIDE_ON","تمپلیت های باطله روشن");
define("_AM_XI_TPL_OVERRIDE_OFF","تمپلیت های باطله خاموش");
define("_AM_XI_TPL_THEMES","قالب:");
?>