<?php

/**
* $Id: main.php,v 1.14 2006/02/11 15:35:53 fx2024 Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Persian Translators: HAMID, VOLTAN & نیما <www.xoops.ir>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

/**
 * This does not belong here. However, since some admin.php constants are refereing to constants
 * defined in common.php, and since admin.php is automatically include when including mainfile.php
 * we need to include the common language file here.
 *
 * For next release : remove all reference to common constants in other language files.
 */
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}

define("_MD_SPARTNER_ADMIN_PAGE",":: بخش مدیریت ::");
define("_MD_SPARTNER_NOPARTNERSELECTED","شما تبلیغ تعریف شده ای را انتخاب نکرده اید.");
define("_MD_SPARTNER_NOTIFY","هنگامی که اجازه داده شد مرا با خبر کن");
define("_MD_SPARTNER_READMORE","اطلاعات بیشتر...");
define("_MD_SPARTNER_SUBMIT_ERROR","خطا در اضافه کردن یک تبلیغ.");
define("_MD_SPARTNER_SUBMIT_SUCCESS","تبلیغ با موفقیت اضافه شد.");
define("_MD_SPARTNER_DETAIL_CAT","کلیه ی تبلیغات این شاخه را مشاهده کنید");
define("_MD_SPARTNER_EDIT","ویرایش");
define("_MD_SPARTNER_DELETE","حذف");
define("_MD_SPARTNER_JOIN","در اینجا تبلیغات کنید");
define("_MD_SPARTNER_PARTNERS","تبلیغات");
define("_MD_SPARTNER_PARTNERSTITLE","تبلیغات ");
define("_MD_SPARTNER_PARTNER","تبلیغ");
define("_MD_SPARTNER_DESCRIPTION","توضیح");
define("_MD_SPARTNER_HITS","مشاهده شده");
define("_MD_SPARTNER_NOPART","در حال حاضر هیچ تبلیغی در این بخش وجود ندارد.");
//file join.php
define("_MD_SPARTNER_IMAGE","لوگو");
define("_MD_SPARTNER_TITLE","نام");
define("_MD_SPARTNER_URL","صفحه خانگی:");
define("_MD_SPARTNER_SEND","فرستادن درخواست");
define("_MD_SPARTNER_ERROR1","شما فرم را بدرستی کامل نکرده اید. لطفاً دوباره سعی کنید.");
define("_MD_SPARTNER_ERROR2","<center>اندازه ی تصویر بیشتر از 110 در 50 است. <a href='javascript:history.back(1)'>با یک تصویر دیگر امتحان کنید.</a></center>");
define("_MD_SPARTNER_ERROR3","<center>فایل تصویر وجود ندارد. <a href='javascript:history.back(1)'>یک تصویر دیگر را امتحان کنید.</a></center>");
define("_MD_SPARTNER_GOBACK","<a href='javascript:history.back(1)'>صفحه ی قبل</a>");
define("_MD_SPARTNER_NEWPARTNER","%s تبلیغ درخواست شد");
define("_MD_SPARTNER_SENDMAIL","پیام درخواست برای مدیر سایت فرستاده شد.<br /><a href='index.php'>بازگشت به فهرست</a>");
define("_MD_SPARTNER_CATEGORY_EMPTY","این شاخه خالی است.");

// Hack by marcan : More information on the SmartPartner module
define("_MD_SPARTNER_INTRO_TEXT","در اینجا لیستی از تبلیغات برگزیده ی ما وجود دارد. شما می توانید با کلیک روی لوگوی آنها به وب سایت آنها دسترسی داشته باشید");
define("_MD_SPARTNER_INTRO_JOIN","برای اینکه تبلیغ ما شوید فرم زیر را پر کنید تا ما در اسرع وقت با شما تماس بگیریم.");
define("_MD_SPARTNER_TITLE_DSC","عنوان شرکت شما");
define("_MD_SPARTNER_IMAGE_DSC","آدرس لوگوی شما");
define("_MD_SPARTNER_URL_DSC","وب سایت شما");
define("_MD_SPARTNER_DESCRIPTION_DSC","توضیح درمورد شرکت شما");
define("_MD_SPARTNER_BACKTOINDEX","بازگشت به فهرست تبلیغات");
define("_MD_SPARTNER_OFFER_INTRO","لیت پیشنهادات");

?>