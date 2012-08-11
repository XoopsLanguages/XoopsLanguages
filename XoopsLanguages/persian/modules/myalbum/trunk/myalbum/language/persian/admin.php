<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_AM_LOADED' ) ) {

define('MYALBUM_AM_LOADED' , 1 ) ;

// Index (Categories)
define("_AM_H3_FMT_CATEGORIES" , "مدیریت شاخه ها (%s)" ) ;
define("_AM_CAT_TH_TITLE" , "نام" ) ;
define("_AM_CAT_TH_PHOTOS" , "تصوير" ) ;
define("_AM_CAT_TH_OPERATION" , "مدیریت" ) ;
define("_AM_CAT_TH_IMAGE" , "بنر" ) ;
define("_AM_CAT_TH_PARENT" , " شاخه ی مادر" ) ;
define("_AM_CAT_TH_IMGURL" , "مسیر بنر" ) ;
define("_AM_CAT_MENU_NEW" , "ساختن شاخه " ) ;
define("_AM_CAT_MENU_EDIT" , "ویرایش شاخه" ) ;
define("_AM_CAT_INSERTED" , "شاخه ساخته شد" ) ;
define("_AM_CAT_UPDATED" , "شاخه تغییر کرد" ) ;
define("_AM_CAT_BTN_BATCH" , "درخواست دادن" ) ;
define("_AM_CAT_LINK_MAKETOPCAT" , "ساخت یک شاخه ی جدیددر بالا" ) ;
define("_AM_CAT_LINK_ADDPHOTOS" , "وارد کردن تصوير در شاخه" ) ;
define("_AM_CAT_LINK_EDIT" , "ویرایش این شاخه" ) ;
define("_AM_CAT_LINK_MAKESUBCAT" , "ساخت شاخه ی جدید به عنوان زیر شاخه این شاخه" ) ;
define("_AM_CAT_FMT_NEEDADMISSION" , "%s تصوير  نیازمند تاییدمیباشند" ) ;
define("_AM_CAT_FMT_CATDELCONFIRM" , "%s will be deleted with its sub-categories, images, comments. OK?" ) ;


// Admission
define("_AM_H3_FMT_ADMISSION" , "تایید (%s) تصوير" ) ;
define("_AM_TH_SUBMITTER" , "ارسال کننده" ) ;
define("_AM_TH_TITLE" , "عنوان" ) ;
define("_AM_TH_DESCRIPTION" , " توضیح" ) ;
define("_AM_TH_CATEGORIES" , "شاخه" ) ;
define("_AM_TH_DATE" , "آخرین بارگذاری" ) ;


// Photo Manager
define("_AM_H3_FMT_PHOTOMANAGER" , "مدیریت تصوير (%s)" ) ;
define("_AM_TH_BATCHUPDATE" , "به روز رسانی تصاویر چک شده" ) ;
define("_AM_OPT_NOCHANGE" , "- بدون تغییر -" ) ;
define("_AM_JS_UPDATECONFIRM" , "این بخش ها بعد از به روز رسانی چک میشود موافقید؟" ) ;


// Module Checker
define("_AM_H3_FMT_MODULECHECKER" , "(%s) گالری چک شد" ) ;

define("_AM_H4_ENVIRONMENT" , "چک کردن محیط" ) ;
define("_AM_MB_PHPDIRECTIVE" , "PHP دستور دهنده" ) ;
define("_AM_MB_BOTHOK" , "هر دو صحیح هستند" ) ;
define("_AM_MB_NEEDON" , "نیازمندی ها روشن" ) ;


define("_AM_H4_TABLE" , "چک کردن جدول" ) ;
define("_AM_MB_PHOTOSTABLE" , "جدول تصوير ها" ) ;
define("_AM_MB_DESCRIPTIONTABLE" , "توضیحات جدول" ) ;
define("_AM_MB_CATEGORIESTABLE" , "جدول شاخه ها" ) ;
define("_AM_MB_VOTEDATATABLE" , "جدول اطلاعات رای ها" ) ;
define("_AM_MB_COMMENTSTABLE" , "جدول نظر ها" ) ;
define("_AM_MB_NUMBEROFPHOTOS" , "تعداد تصويرها" ) ;
define("_AM_MB_NUMBEROFDESCRIPTIONS" , "تعداد توضیحات" ) ;
define("_AM_MB_NUMBEROFCATEGORIES" , "تعداد شاخه ها" ) ;
define("_AM_MB_NUMBEROFVOTEDATA" , "تعداد رای ها " ) ;
define("_AM_MB_NUMBEROFCOMMENTS" , "تعداد نظر ها" ) ;


define("_AM_H4_CONFIG" , "Config Check" ) ;
define("_AM_MB_PIPEFORIMAGES" , "ویرایش گر تصاویر در سرور" ) ;
define("_AM_MB_DIRECTORYFORPHOTOS" , "فهرست راهنمابرای تصوير ها" ) ;
define("_AM_MB_DIRECTORYFORTHUMBS" , "فهرست راهنما برای تصاویر تمبری" ) ;
define("_AM_ERR_LASTCHAR" , "Error: The last charactor should not be '/'" ) ;
define("_AM_ERR_FIRSTCHAR" , "Error: The first charactor should be '/'" ) ;
define("_AM_ERR_PERMISSION" , "Error: You first have to create and chmod 777 this directory by ftp or shell." ) ;
define("_AM_ERR_NOTDIRECTORY" , "Error: This is not a directory." ) ;
define("_AM_ERR_READORWRITE" , "Error: This directory is not writable nor readable. You should change the permission of the directory to 777." ) ;
define("_AM_ERR_SAMEDIR" , "Error: Photos Path should not be the same as Thumbs Path" ) ;
define("_AM_LNK_CHECKGD2" , "Check that 'GD2'is working correctly under your GD bundled with PHP" ) ;
define("_AM_MB_CHECKGD2" , "If the page linked to from here doesn't display correctly, you should not use your GD in truecolor mode." ) ;
define("_AM_MB_GD2SUCCESS" , "Success!<br />Perhaps, you can use GD2 (truecolor) in this environment." ) ;


define("_AM_H4_PHOTOLINK" , "چک کردن لینک  تصاویر تمبری و تصوير ها" ) ;
define("_AM_MB_NOWCHECKING" , "حالا چک شد ." ) ;
define("_AM_FMT_PHOTONOTREADABLE" , "تصویر اصلی (%s) قابل خواندن نیست." ) ;
define("_AM_FMT_THUMBNOTREADABLE" , "a thumbnail (%s) is not readable." ) ;
define("_AM_FMT_NUMBEROFDEADPHOTOS" , "%s فایل های تصوير مرده پیدا شد" ) ;
define("_AM_FMT_NUMBEROFDEADTHUMBS" , "%s thumbnails should be rebuilt." ) ;
define("_AM_FMT_NUMBEROFREMOVEDTMPS" , "%s فایل های به درد نخور پاک شد" ) ;
define("_AM_LINK_REDOTHUMBS" , "باز سازی تصاویر تمبری" ) ;
define("_AM_LINK_TABLEMAINTENANCE" , "نگه داشتن جدول ها" ) ;



// Redo Thumbnail
define("_AM_H3_FMT_RECORDMAINTENANCE" , "تغییر تصاویر گالری(%s)" ) ;

define("_AM_FMT_CHECKING" , "در حال چک %s ..." ) ;

define("_AM_FORM_RECORDMAINTENANCE" , "maintenance of photos like remaking thumbnails etc." ) ;

define("_AM_MB_FAILEDREADING" , "ناتولنی در خواندن" ) ;
define("_AM_MB_CREATEDTHUMBS" , "ساخت یک thumbnail" ) ;
define("_AM_MB_BIGTHUMBS" , "failed making a thumnail. copied." ) ;
define("_AM_MB_SKIPPED" , "skipped." ) ;
define("_AM_MB_SIZEREPAIRED" , "(repaired size fields of the record.)" ) ;
define("_AM_MB_RECREMOVED" , "this record has been removed." ) ;
define("_AM_MB_PHOTONOTEXISTS" , "تصوير اصلی وجود ندارد" ) ;
define("_AM_MB_PHOTORESIZED" , "اندازه ی تصوير اصلی تغییر کرد" ) ;

define("_AM_TEXT_RECORDFORSTARTING" , "record's number starting with" ) ;
define("_AM_TEXT_NUMBERATATIME" , "number of records processed at a time" ) ;
define("_AM_LABEL_DESCNUMBERATATIME" , "Too large a number may lead to server time out." ) ;

define("_AM_RADIO_FORCEREDO" , "force recreating even if a thumbnail exists" ) ;
define("_AM_RADIO_REMOVEREC" , "remove records that don't link to a main photo" ) ;
define("_AM_RADIO_RESIZE" , "سایز تصاویری را که از اندازه   انتخابی  بزرگترند  به اندازه ی انتخابی تغییر بده" ) ;

define("_AM_MB_FINISHED" , "پایان یافت" ) ;
define("_AM_LINK_RESTART" , "ثبت" ) ;
define("_AM_SUBMIT_NEXT" , "بعدی" ) ;



// Batch Register
define("_AM_H3_FMT_BATCHREGISTER" , "ثبت شاخه توضیح در گالری (%s)" ) ;


// GroupPerm Global
define("_AM_ALBM_GROUPPERM_GLOBAL" , "تنظیم دسترسی ها" ) ;
define("_AM_ALBM_GROUPPERM_GLOBALDESC" , "دسترسی های گروه ها را به این ماژول تنظیم کنید" ) ;
define("_AM_ALBM_GPERMUPDATED" , "دسترسی ها با موفقیت  تغییر کرد" ) ;


// Import
define("_AM_H3_FMT_IMPORTTO" , 'وارد کردن تصوير ها از بقیه ی ماژول ها به %s' ) ;
define("_AM_FMT_IMPORTFROMMYALBUMP" , 'وارد کردن تصوير ها از ماژول "%s" به ماژول گالری( مای آلبوم)' ) ;
define("_AM_FMT_IMPORTFROMIMAGEMANAGER" , 'دریافت از مدیریت تصاویر زوپس' ) ;
define("_AM_CB_IMPORTRECURSIVELY" , 'وارد کردن زیر شاخه ی دریافت کننده' ) ;
define("_AM_RADIO_IMPORTCOPY" , 'کپی کردن تصوير ها ( پیام ها کپی نمیشود)' ) ;
define("_AM_RADIO_IMPORTMOVE" , 'انتقال تصوير ها ( move) (پیام ها منتقل میشود)' ) ;
define("_AM_MB_IMPORTCONFIRM" , 'انتقال تصوير ها تایید شود؟' ) ;
define("_AM_FMT_IMPORTSUCCESS" , 'شما میتواندی %s تصوير را دریافت کنید ( وارد کنید)' ) ;


// Export
define("_AM_H3_FMT_EXPORTTO" , 'انتقال تصوير  ها از %s به دیگر ماژول ها' ) ;
define("_AM_FMT_EXPORTTOIMAGEMANAGER" , 'منتقل کردن به مدیریت  تصاویر زوپس' ) ;
define("_AM_FMT_EXPORTIMSRCCAT" , 'منبع' ) ;
define("_AM_FMT_EXPORTIMDSTCAT" , 'مقصد' ) ;
define("_AM_CB_EXPORTRECURSIVELY" , 'به طرف تصويری که در این زیر شاخه هست' ) ;
define("_AM_CB_EXPORTTHUMB" , 'همراه تصوير اصلی تصویر تمبری  را هم انتقال بده' ) ;
define("_AM_MB_EXPORTCONFIRM" , 'انتقال تصوير ها تایید شود؟' ) ;
define("_AM_FMT_EXPORTSUCCESS" , 'شما میتوانید %s تصوير را منتقل کنید' ) ;


}

?>