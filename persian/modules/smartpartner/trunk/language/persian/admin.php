<?php

/**
* $Id: admin.php,v 1.16 2006/02/13 17:42:13 malanciault Exp $
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

define("_AM_SPARTNER_ABOUT","درباره");
define("_AM_SPARTNER_ACTION","عملیات");
define("_AM_SPARTNER_ACTIVATE_PARTNER","فعال سازی تبلیغات");
define("_AM_SPARTNER_ACTIVE", _CO_SPARTNER_ACTIVE);
define("_AM_SPARTNER_ACTIVE_EDIT_SUCCESS"," تبلیغ مورد نظر با موفقیت ویرایش شد.");
define("_AM_SPARTNER_ACTIVE_EDITING","ویرایش و فعال سازی تبلیغ");
define("_AM_SPARTNER_ACTIVE_EDITING_INFO","شما می توانید این تبلیغ فعال را ویرایش کنید. تغییرات در سمت کاربر سریعاً اعمال خواهد شد.");
define("_AM_SPARTNER_ACTIVE_EXP","<b>تبلیغات فعال</b> : تبلیغات فعال این سایت");
define("_AM_SPARTNER_ACTIVE_PARTNERS","تبلیغات فعال");
define("_AM_SPARTNER_ACTIVE_PARTNERS_DSC","لیست تبلیغات فعال شده. این تبلیغات برای کاربران قابل مشاهده است. شما می توانید توسط گزینه های <b>عملیات</b> این تبلیغات را حذف یا ویرایش نمایید.");
define("_AM_SPARTNER_ALL","همه");
define("_AM_SPARTNER_ALL_EXP","<b>وضعیت همه</b> : تمام تبلیغات این ماژول با وضعیتشان.");
define("_AM_SPARTNER_ALLITEMS","همه تبلیغات این ماژول");
define("_AM_SPARTNER_ALLITEMSMSG","با انتخاب یک وضعیت، کلیه ی تبلیغات با وضعیت انتخاب شده را مشاهده کنید. در اینجا شما می توانید ترتیب نمایش را هم انتخاب کنید.");
define("_AM_SPARTNER_APPROVE","تایید");
define("_AM_SPARTNER_APPROVING","تایید کردن");
define("_AM_SPARTNER_ASC","صعودی");
define("_AM_SPARTNER_AVAILABLE","<span style='font-weight: bold; color: green;'>موجود</span>");
define("_AM_SPARTNER_NOTWRITABLE","<span style='font-weight: bold; color: red;'>قابل نوشتن نیست</span>");
define("_AM_SPARTNER_BLOCKS","بلاک ها و گروه ها");
define("_AM_SPARTNER_BLOCKSANDGROUPS","بلاک ها و گروه ها");
define("_AM_SPARTNER_BLOCKSTXT","این ماژول بلاک های زیر را دارد که شما می توانید از اینجا و یا از طریق ماژول سیستم ویرایش کنید.");
define("_AM_SPARTNER_BY","توسط");
define("_AM_SPARTNER_CANCEL", _CO_SPARTNER_CANCEL);
define("_AM_SPARTNER_CLEAR", _CO_SPARTNER_CLEAR);
define("_AM_SPARTNER_CREATE", _CO_SPARTNER_CREATE);
define("_AM_SPARTNER_CREATETHEDIR","ساخت یک پوشه");
define("_AM_SPARTNER_SETMPERM","تنظیم دسترسی های شاخه");
define("_AM_SPARTNER_DB_CHECKTABLES","چک کردن جداول");
define("_AM_SPARTNER_DB_CURRENTVER","نسخه کنونی: <span class='currentVer'>%s</span>");
define("_AM_SPARTNER_DB_DBVER","نسخه دیتابیس %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA","اطلاعات به جدول %s اضافه شد.");
define("_AM_SPARTNER_DB_MSG_ADD_DATA_ERR","خطا در هنگام اضافه کردن اطلاعات به جدول %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD","تغییر فیلد %s در جدول %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD_ERR","خطا در هنگام تغییر فیلد  %s در جدول %s");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE","جدول %s ساخته شد");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE_ERR","خطا در هنگام ساخت جدول %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD","اضافه کردن فیلد %s با موفقیت انجام گرفت");
define("_AM_SPARTNER_DB_MSG_NEWFIELD_ERR","خطا در هنگام اضافه کردن فیلد %s");
define("_AM_SPARTNER_DB_NEEDUPDATE","دیتابیس شما بروز نیست. لطفاً جداول آن را به ورژن بالاتر ارتقا دهید!");
define("_AM_SPARTNER_DB_NEEDUPDATE_WARNING","هشدار: قبل از اجرای اسکریپت آپگرید از جداول خود نسخه پشتیبان تهیه کنید.");
define("_AM_SPARTNER_DB_NOUPDATE","دیتابیس بروز است. نیازی به ارتقا دادن جداول نیست.");
define("_AM_SPARTNER_DB_UPDATE_DB","بروز کردن دیتابیس");
define("_AM_SPARTNER_DB_UPDATE_ERR","خطا در هنگام ارتقا به نسخه %s");
define("_AM_SPARTNER_DB_UPDATE_NOW","بروز کن!");
define("_AM_SPARTNER_DB_UPDATE_OK","ارتقا به نسخه %s با موفقیت انجام شد");
define("_AM_SPARTNER_DB_UPDATE_TO","ارتقا به نسخه %s");
define("_AM_SPARTNER_DELETE","حذف");
define("_AM_SPARTNER_DELETEPARTNER", _CO_SPARTNER_DELETEPARTNER);
define("_AM_SPARTNER_DELETEFILE","حذف فایل");
define("_AM_SPARTNER_DELETETHISP","آیا شما واقعا میخواهید این تبلیغ را حذف کنید؟");
define("_AM_SPARTNER_DELETETHISP","آیا می خواهید این تبلیغ را حذف کنید?");
define("_AM_SPARTNER_DESC","نزولی");
define("_AM_SPARTNER_DESCRIPTION", _CO_SPARTNER_DESCRIPTION);
define("_AM_SPARTNER_DESCRIPTION_DSC", _CO_SPARTNER_DESCRIPTION_DSC);
define("_AM_SPARTNER_DIRCREATED","پوشه با موفقیت ساخته شد ");
define("_AM_SPARTNER_DIRNOTCREATED","نمی توان چنین پوشه ای را ساخت");
define("_AM_SPARTNER_EDITFILE","Edit file");
define("_AM_SPARTNER_EDITING","ویرایش");
define("_AM_SPARTNER_EDITPARTNER", _CO_SPARTNER_EDITPARTNER);
define("_AM_SPARTNER_FILE","فایل ها");
define("_AM_SPARTNER_FILE_ADD","اضافه کردن فایل");
define("_AM_SPARTNER_FILE_ADDING","اضافه کردن فایل جدیدe");
define("_AM_SPARTNER_FILE_ADDING_DSC","لطفا فرم زیر را برای سفارش اضافه کردن یک فایل به تبلیغ پر کنید .");
define("_AM_SPARTNER_FILE_DELETE_ERROR","در هنگام حذف این فایل یه خطا روی داده.");
define("_AM_SPARTNER_FILE_DESCRIPTION","توضیحات");
define("_AM_SPARTNER_FILE_DESCRIPTION_DSC","توضیحات فایل آپلود شد.");
define("_AM_SPARTNER_FILE_EDITING","ویرایش فایل");
define("_AM_SPARTNER_FILE_EDITING_DSC","شما میتوانید این فایل را ویرایش کنید. تاثیر این ویرایش بلافاصله در بخش کاربر قابل دیدن است.");
define("_AM_SPARTNER_FILE_EDITING_ERROR","در هنگام بارگذاری این فایل یک خطا روی داده.");
define("_AM_SPARTNER_FILE_EDITING_SUCCESS","فایل با موفقیت ویرایش  شد.");
define("_AM_SPARTNER_FILE_INFORMATIONS","اطلاعات فایل");
define("_AM_SPARTNER_FILE_NAME","نام");
define("_AM_SPARTNER_FILE_NAME_DSC","Name that will be used to identify the file.");
define("_AM_SPARTNER_FILE_STATUS","فایل قابل دیدن باشد؟");
define("_AM_SPARTNER_FILE_STATUS_DSC","اگر نه را انتخاب کنید, این فایل در بخش کاربر قابل دیدن نیست.");
define("_AM_SPARTNER_FILE_TO_UPLOAD","فایل برای بارگذاری :");
define("_AM_SPARTNER_FILE_UPLOAD_ANOTHER","بارگذاری دوباره");
define("_AM_SPARTNER_FILEISDELETED","فایل با موفقیت حذف شد") ;
define("_AM_SPARTNER_FILENAME","نام فایل");
define("_AM_SPARTNER_FILES_LINKED","فایل های لینک شده به این تبلیغ");

define("_AM_SPARTNER_GOMOD","دیدن ماژول");
define("_AM_SPARTNER_GROUPS","گروه ها");
define("_AM_SPARTNER_GROUPSINFO","تنظیمات دسترسی ماژول ها و بلاک ها برای این گروه");
define("_AM_SPARTNER_HELP","راهنمایی");
define("_AM_SPARTNER_HITS", _CO_SPARTNER_HITS);
define("_AM_SPARTNER_ID","شماره تبلیغ");
define("_AM_SPARTNER_IMPORT","وارد کردن");
define("_AM_SPARTNER_IMPORT_ALL_PARTNERS","همه تبلیغات");
define("_AM_SPARTNER_IMPORT_AUTOAPPROVE","تایید بصورت خودکار");
define("_AM_SPARTNER_IMPORT_BACK","بازگشت به صفحه وارد کردن");
define("_AM_SPARTNER_IMPORT_ERROR","وقوع خطا در هنگام وارد کردن تبلیغات.");
define("_AM_SPARTNER_IMPORT_FILE_NOT_FOUND","پیدا نکردن فایل در <b>%s</b>");
define("_AM_SPARTNER_IMPORT_FROM","وارد کردن از %s");
define("_AM_SPARTNER_IMPORT_INFO","شما می توانید تبلیغات را مستقیما وارد کنید. همچنین میتوانید تبلیغات ماژول دیگری را هم وارد کنید. برای این کار آن را انتخاب و دکمه وارد کردن را بزنید.");
define("_AM_SPARTNER_IMPORT_MODULE_FOUND"," ماژول %s پیدا شد که در آن به تعداد %s تبلیغات وجود دارد که می توانید وارد کنید.");
define("_AM_SPARTNER_IMPORT_NO_MODULE","XoopsPartner نصب نیست. نمی توانید تبلیغی از آن وارد کنید.");
define("_AM_SPARTNER_IMPORT_PARTNER_ERROR","رخ دادن خطا در هنگام وارد کردن '%s'.");
define("_AM_SPARTNER_IMPORT_RESULT","نتیجه ی وارد کردن تبلیغات.");
define("_AM_SPARTNER_IMPORT_SETTINGS","تنظیمات وارد کردن");
define("_AM_SPARTNER_IMPORT_SUCCESS","تبلیغات با موفقیت به این ماژول اضافه شد.");
define("_AM_SPARTNER_IMPORT_TITLE","وارد کردن تبلیغات");
define("_AM_SPARTNER_IMPORT_XOOPSPARTNERS_110","تبلیغات XoopsPartners 1.1");
define("_AM_SPARTNER_IMPORTED_PARTNER","وارد کردن تبلیغات : <em>%s</em>");
define("_AM_SPARTNER_IMPORTED_PARTNERS","تبلیغات وارد شده : <em>%s</em>");
define("_AM_SPARTNER_IMPORT_SELECTION","وارد کردن تبلیغات انتخاب شده");
define("_AM_SPARTNER_IMPORT_SELECT_FILE","تبلیغات");
define("_AM_SPARTNER_IMPORT_SELECT_FILE_DSC","ماژولی که می خواهید تبلیغاتش وارد شود انتخاب کنید.");
define("_AM_SPARTNER_INACTIVATE_PARTNER","غیر فعال کردن تبلیغات");
define("_AM_SPARTNER_INACTIVE", _CO_SPARTNER_INACTIVE);
define("_AM_SPARTNER_INACTIVE_EDITING","ویرایش کردن یک تبلیغ فعال");
define("_AM_SPARTNER_INACTIVE_EDITING_INFO","شما می توانید تبلیغات فعال را ویرایش کنید. تغییرات ذخیره خواهند شد. اگر می خواهید تبلیغات برای کاربران نمایش داده شوند از منوی وضعیت گزینه فعال را انتخاب کنید.");
define("_AM_SPARTNER_INACTIVE_EXP","<b>تبلیغات فعال</b> : تبلیغات فعال به دلایل خاصی می توانندذ غیر فعال گردند.در این صورت کاربران قادر به مشاهده آن نخواهند بود.");
define("_AM_SPARTNER_INACTIVE_FIELD","غیر فعال");
define("_AM_SPARTNER_INACTIVE_PARTNERS","تبلیغات غیر فعال");
define("_AM_SPARTNER_INDEX","فهرست");
define("_AM_SPARTNER_INTRO", _CO_SPARTNER_INTRO);
define("_AM_SPARTNER_INVENTORY", _CO_SPARTNER_INVENTORY);
define("_AM_SPARTNER_LOGO", _CO_SPARTNER_LOGO);
define("_AM_SPARTNER_LOGO_DSC", _CO_SPARTNER_LOGO_DSC);
define("_AM_SPARTNER_LOGO_UPLOAD", _CO_SPARTNER_LOGO_UPLOAD);
define("_AM_SPARTNER_LOGO_UPLOAD_DSC", _CO_SPARTNER_LOGO_UPLOAD_DSC);
define("_AM_SPARTNER_MODADMIN","مدیر :");
define("_AM_SPARTNER_MODIFY", _CO_SPARTNER_MODIFY);
define("_AM_SPARTNER_NAME", _CO_SPARTNER_NAME);
define("_AM_SPARTNER_NO","odv");
define("_AM_SPARTNER_NOPARTNERS", _CO_SPARTNER_NOPARTNERS);
define("_AM_SPARTNER_NOTAVAILABLE","<span style='font-weight: bold; color: red;'>موجود نیست</span>");
define("_AM_SPARTNER_OPTS","اولویت");
define("_AM_SPARTNER_OPTIONS","گزینه ها");
define("_AM_SPARTNER_PARTNER", _CO_SPARTNER_PARTNER);
define("_AM_SPARTNER_PARTNER_APPROVE","قبول کردن این تبلیغ");
define("_AM_SPARTNER_PARTNER_CREATE", _CO_SPARTNER_PARTNER_CREATE);
define("_AM_SPARTNER_PARTNER_CREATED", _CO_SPARTNER_PARTNER_CREATED);
define("_AM_SPARTNER_PARTNER_CREATING", _CO_SPARTNER_PARTNER_CREATING);
define("_AM_SPARTNER_PARTNER_CREATING_DSC", _CO_SPARTNER_PARTNER_CREATING_DSC);
define("_AM_SPARTNER_PARTNER_DELETE", _CO_SPARTNER_PARTNER_DELETE);
define("_AM_SPARTNER_PARTNER_DELETE_ERROR","وقوع خطا در هنگام حذف تبلیغ.");
define("_AM_SPARTNER_PARTNER_DELETE_SUCCESS","این تبلیغ با موفقیت حذف شد.");
define("_AM_SPARTNER_PARTNER_EDIT", _CO_SPARTNER_PARTNER_EDIT);
define("_AM_SPARTNER_PARTNER_INFORMATIONS", _CO_SPARTNER_PARTNER_INFORMATIONS);
define("_AM_SPARTNER_PARTNER_NOT_CREATED", _CO_SPARTNER_PARTNER_NOT_CREATED);
define("_AM_SPARTNER_PARTNER_NOT_SELECTED","شما نمیتوانید یک تبلیغ را انتخاب کنید.");
define("_AM_SPARTNER_PARTNER_NOT_UPDATED", _CO_SPARTNER_PARTNER_NOT_UPDATED);
define("_AM_SPARTNER_PARTNERS", _CO_SPARTNER_PARTNERS);
define("_AM_SPARTNER_PATH","مسیر");
define("_AM_SPARTNER_PATH_ITEM","بارگذاری ها");
define("_AM_SPARTNER_PATH_IMAGES","لوگوهای تبلیغات");
define("_AM_SPARTNER_PATHCONFIGURATION","تنظیمات مسیر ماژول");
define("_AM_SPARTNER_POSITION","مکان");
define("_AM_SPARTNER_REJECTED", _CO_SPARTNER_REJECTED);
define("_AM_SPARTNER_REJECTED_EXP","<b>تبلیغات پذیرفته نشده</b> : ثبت تبلیغاتی که پذیرفته نشده اند. این تبلیغات برای کاربران نمایش داده نمی شود.");
define("_AM_SPARTNER_REJECTED_PARTNERS","تبلیغات پذیرفته نشده");
define("_AM_SPARTNER_REJECTED_EDITING","ویرایش تبلیغات پذیرفته نشده");
define("_AM_SPARTNER_REJECTED_EDITING_INFO","شما می توانید این تبلیغ را ویرایش کنید.اگر می خواهید تبلیغات برای کاربران نمایش داده شود از منوی وضعیت گزینه فعال را انتخاب کنید.");
define("_AM_SPARTNER_SELECT_SORT","انتخاب ترتیب نمایش :");
define("_AM_SPARTNER_SELECT_STATUS","انتخاب وضعیت");
define('_AM_SB_SETMPERM','تنظیمات دسترسی');
define("_AM_SPARTNER_NOFILE","این تبلیغ هیچ فایل ضمیمه ای ندارد.");
define("_AM_SPARTNER_PATH_FILES","فایل های ضمیمه");
define("_AM_SPARTNER_SHOWING","نمایش");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS","تنظیمات وارد کردن اطلاعات در سیستم تبلیغاتی");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS_VALUE","هیچ تنظیمی انجام نشده. لطفا دکمه وارد کردن را بزنید تا عملیات شروع شود");
define("_AM_SPARTNER_STATUS", _CO_SPARTNER_STATUS);
define("_AM_SPARTNER_STATUS_DSC","انتخاب وضعیت تبلیغات. تبلیغات غیر فعال در بخش عمومی نمایش داده نمی شوند.");
define("_AM_SPARTNER_SUMMARY", _CO_SPARTNER_SUMMARY);
define("_AM_SPARTNER_SUMMARY_REQ", _CO_SPARTNER_SUMMARY_REQ);
define("_AM_SPARTNER_SUMMARY_DSC", _CO_SPARTNER_SUMMARY_DSC);
define("_AM_SPARTNER_SUBMITTED", _CO_SPARTNER_SUBMITTED);
define("_AM_SPARTNER_SUBMITTED_APPROVE_SUCCESS","تبلیغات ثبت شده پذیرفته شدند.");
define("_AM_SPARTNER_SUBMITTED_EXP","<b>تبلیغات ثبت شده</b> : تبلیغاتی که جهت نمایش در این سایت ثبت شده اند");
define("_AM_SPARTNER_SUBMITTED_INFO","این تبلیغات در سایت شما ثبت شده اند. شما می توانید آنها را به دلخواه ویرایش کنید. پس از پذیرفتن آنها این تبلیغات برای کاربران نمایش داده می شوند.");
define("_AM_SPARTNER_SUBMITTED_PARTNERS","تبلیغات ثبت شده");
define("_AM_SPARTNER_SUBMITTED_TITLE","تبلیغات ثبت شده");
define("_AM_SPARTNER_TITLE","عنوان تبلیغ");
define("_AM_SPARTNER_TITLE_REQ", _CO_SPARTNER_TITLE_REQ);
define("_AM_SPARTNER_TOTAL_SUBMITTED","درخواست شده: ");
define("_AM_SPARTNER_TOTAL_ACTIVE","فعال شده: ");
define("_AM_SPARTNER_TOTAL_REJECTED","پذیرفته نشده: ");
define("_AM_SPARTNER_TOTAL_INACTIVE","غیر فعال شده: ");
define("_AM_SPARTNER_UPDATE_MODULE","بروز کردن ماژول");
define("_AM_SPARTNER_URL", _CO_SPARTNER_URL);
define("_AM_SPARTNER_URL_DSC", _CO_SPARTNER_URL_DSC);
define("_AM_SPARTNER_WEIGHT", _CO_SPARTNER_WEIGHT);
define("_AM_SPARTNER_WEIGHT_DSC", _CO_SPARTNER_WEIGHT_DSC);
define("_AM_SPARTNER_YES","بله");


//Redirect messages
define("_AM_SPARTNER_NOTSET_ACTIVE_SUCCESS","این تبلیغ ساخته شد.");
define("_AM_SPARTNER_NOTSET_INACTIVE_SUCCESS","این تبلیغ ساخته و غیر فعال شده است.");
define("_AM_SPARTNER_SUBMITTED_ACTIVE_SUCCESS","این تبلیغات ثبت شده پذیرفته شدند!");
define("_AM_SPARTNER_SUBMITTED_INACTIVE_SUCCESS","این تبلیغات ثبت شده غیر فعال هستند.");
define("_AM_SPARTNER_SUBMITTED_REJECTED_SUCCESS","این تبلیغات ثبت شده پذیرفته نشدند.");
define("_AM_SPARTNER_ACTIVE_ACTIVE_SUCCESS","سیستم تبلیغغاتی به روز شد.");
define("_AM_SPARTNER_ACTIVE_INACTIVE_SUCCESS","این تبلیغ غیر فعال شد.");
define("_AM_SPARTNER_INACTIVE_ACTIVE_SUCCESS","تبلیغات غیر فعال هم اکنون فعال شدند.");
define("_AM_SPARTNER_INACTIVE_INACTIVE_SUCCESS","تبلیغات غیر فعال به روز شدند.");
define("_AM_SPARTNER_REJECTED_ACTIVE_SUCCESS","تبلیغات رد شده پذیرفته شدند!");
define("_AM_SPARTNER_REJECTED_INACTIVE_SUCCESS","تبلیغات رد شده غیر فعال شدند.");
define("_AM_SPARTNER_REJECTED_REJECTED_SUCCESS","تبلیغات رد شده به روز شدند.");


define("_AM_SPARTNER_CATEGORY_EDIT","ویرایش شاخه");
define("_AM_SPARTNER_CATEGORY_DELETE","خذف شاخه");
define("_AM_SPARTNER_CATEGORIES","شاخه ها");
define("_AM_SPARTNER_CATEGORIES_DSC","لیست شاخه های ساخته شده این ماژول.");
define("_AM_SPARTNER_CATEGORIES_TITLE","شاخه های ساخته شده");
define("_AM_SPARTNER_CATEGORY","شاخه");
define("_AM_SPARTNER_CATEGORY_CREATE","ساخت یک شاخه ی جدید");
define("_AM_SPARTNER_CATEGORY_CREATE_INFO","فرم روبرو را پر کنید تا شاخه جدید ساخته شود. این شاخه برای کاربران نیز نمایش داده می شود.");
define("_AM_SPARTNER_CATEGORY_EDIT_INFO","شما می توانید این شاخه را ویرایش کنید.تغییرات این  این شاخه برای کاربران نیز نمایش داده می شود.");
define("_AM_SPARTNER_CATEGORY_REQ","شاخه*");
define("_AM_SPARTNER_CATEGORY_SAVE_ERROR","وقوع خطا در هنگام ذخیره سازی شاخه. در زیر لیست خطا ها را مشاهده می کنید :");
define("_AM_SPARTNER_CATHEADER","تنظیمات شاخه");
define("_AM_SPARTNER_CATID","شماره");
define("_AM_SPARTNER_CATEGORY_DSC","توضیحات شاخه");
define("_AM_SPARTNER_CATEGORY_DELETED","شاخه %s حذف گردید");
define("_AM_SPARTNER_CATEGORY_MODIFIED","این شاخه با موفقیت ویراش شد.");
define("_AM_SPARTNER_CATEGORY_WEIGHT","وزن شاخه");
define("_AM_SPARTNER_CATEGORY_IMAGE","تصویر شاخه");
define("_AM_SPARTNER_CATEGORY_IMAGE_DSC","تصویر این شاخه");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD","بارگذاری تصویر");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD_DSC","تصویر خود را از کامپیوتر انتخاب کنید. این تصویر بر روی سایت شما قرا خواهد گرفت.");
define("_AM_SPARTNER_CATEGORY_CREATING","ساختن شاخه جدید");
define("_AM_SPARTNER_CATEGORY_PARENT","شاخه اصلی");
define("_AM_SPARTNER_CATEGORY_PARENT_DSC","اگر شاخه اصلی را انتخاب کنید این شاخه به یک زیر شاخه تبدیل خواهد شد.");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE","ساختن زیر شاخه ها");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE_DSC","گزینه های خالی را با نام زیر شاخه ها پر کنید تا زیر شاخه ساخته شود.<br>برای نساختن زیر شاخه خالی بگذارید. برای گزینه های بیشتر دکمه اضافه را بزنید.");
define("_AM_SPARTNER_ADD_OPT","اضافه کردن %s  زیر شاخه");
define("_AM_SPARTNER_ADD_OPT_SUBMIT","اضافه کردن");
define("_AM_SPARTNER_CATEGORY_CREATED","شاخه جدید ساخته و ذخیره شد!");
define("_AM_SPARTNER_CATEGORY_SUBCAT_SAVE_ERROR","خطا در هنگتم ذخیره شاخه. لیست خطا ها:");
define("_AM_SPARTNER_CATEGORY_DELETE_CONFIRM","لطفا توجه کنید! با پاک کردن این شاخه تمام زیر شاخه ها به همراه تبلیغاتشان و نظرات کاربران حذف خواهند شد. آیا مطمئن هستید که می خواهید این رسته را حذف کنید؟");
define("_AM_SPARTNER_CATEGORY_DELETE_ERROR","وقوع خطا در هنگام خذف شاخه.");
define("_AM_SPARTNER_CATEGORY_NONE","هیچ شاخه ای در این ماژول وجود ندارد.");

//added with categories
define("_AM_SPARTNER_FILEUPLOAD_ERROR","وقوع خطا در هنگام بارگذاری فایل.");
define("_AM_SPARTNER_FILEUPLOAD_SUCCESS","فایل مورد نظر با موفقیت بارگذاری شد شد.");
define("_AM_SPARTNER_PATH_CATEGORY_IMAGES","تصاویر شاخه ها");
define("_AM_SPARTNER_CATEGORY_BELONG","شاخه");
define("_AM_SPARTNER_BELONG_CATEGORY_DSC","شاخه های اصلی");

define("_AM_SPARTNER_SUBCAT_CAT","زیر شاخه ها");
define("_AM_SPARTNER_SUBCAT_CAT_DSC","لیست زیر شاخه های این شاخه");
define("_AM_SPARTNER_CATCOLNAME","نام");
define("_AM_SPARTNER_UPLOAD","بارگذاری");
define("_AM_SPARTNER_UPLOAD_FILE","بارگذاری فایل");
define("_AM_SPARTNER_UPLOAD_FILE_NEW","بارگذاری فایل جدید");
define("_AM_SPARTNER_UPLOADED_DATE","بارگذاری شد");
define("_AM_SPARTNER_SUBDESCRIPT","توضیحات");
define("_AM_SPARTNER_NOSUBCAT","زیر شاخه ساخته نشد.");

//added with permissions and smartobjection

define("_AM_SPARTNER_OFFERS","پیشنهاد ها");
define("_AM_SPARTNER_CREATINGNEW","ساخت");
define("_AM_SPARTNER_OFFER_CREATE","ایجاد یک پیشنهاد");
define("_AM_SPARTNER_OFFER_CREATE_INFO","Fill this form in order to create an offer.");
define("_AM_SPARTNER_OFFERS_DSC","در اینجا لیست پیشنهاد ها را میبینید.");
define("_AM_SPARTNER_OFFER_EDIT","ویرایش پیشنهاد");
define("_AM_SPARTNER_OFFER_EDIT_INFO","");
define("_AM_SPARTNER_SHOW_SUMMARY","نمایش خلاصه صفحه تبلیغ");
define("_AM_SPARTNER_SHOW_SUMMARY_DSC","Note: if any users have partial view permissions, you should set this to 'yes.' Otherwise a partner detail page displayed in partial view mode will have no info at all other than the logo and name.");
define("_SMARTPARTNER_MESSAGE_FILE_ERROR","Error: Unable to store uploaded file for the following reasons:<br />%s");
define("_SMARTPARTNER_MESSAGE_WRONG_MIMETYPE","خطا: اجازه استفاده از این نوع فایل در سایت نیست. لطفا دوباره ارسال کنید.");

?>