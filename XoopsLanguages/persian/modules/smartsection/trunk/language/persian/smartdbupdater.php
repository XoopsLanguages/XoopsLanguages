<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/12 19:00:43 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

define("_SDU_IMPORT","Import");
define("_SDU_CURRENTVER","نسخهء فعلی: <span class='currentVer'>%s</span>");
define("_SDU_DBVER","ورژن پایگاه داده< %s");
define("_SDU_MSG_ADD_DATA","اطلاعات به جدول %s اضافه شدند");
define("_SDU_MSG_ADD_DATA_ERR","خطا در اضافه کردن اطلاعات در جدول %s");
define("_SDU_MSG_CHGFIELD","عوض کردن فیلد %s در جدول %s");
define("_SDU_MSG_CHGFIELD_ERR","خطا در عوض کردن فیلد %s در جدول %s");
define("_SDU_MSG_CREATE_TABLE","جدول %s ایجاد شد");
define("_SDU_MSG_CREATE_TABLE_ERR","خطا در ایجاد کردن جدول %s");
define("_SDU_MSG_NEWFIELD","فیلد %s با موفقیت اضافه شد");
define("_SDU_MSG_NEWFIELD_ERR","خطا در اضافه کردن فیلد %s");
define("_SDU_NEEDUPDATE","پایگاه داده شما بروز نمی باشد. لطفا جدول های پایگاه دادتون را بروز کنید!<br><b>توجه :SmartFactory همچنان پیشنهاد می کند که شما قبل از بروزرسانی ماژول خود یک بک آپ از جدول های اسمارت سکشن تهیه فذرمایید</b><br>");
define("_SDU_NOUPDATE","پایگاه داده شما بروز می باشد. بروزرسانی ضروری نمی باشد");
define("_SDU_UPDATE_DB","بروزرسانی پایگاه داده");
define("_SDU_UPDATE_ERR","خطاهای آپدیت کردن به ورژن %s");
define("_SDU_UPDATE_NOW","آپدیت کردن");
define("_SDU_UPDATE_OK","با موفقیت به ورژن %s آپدیت شد");
define("_SDU_UPDATE_TO","آپدیت کردن به ورژن %s");
define("_SDU_UPDATE_UPDATING_DATABASE","آپدیت کردن پایگاه داده...");


?>