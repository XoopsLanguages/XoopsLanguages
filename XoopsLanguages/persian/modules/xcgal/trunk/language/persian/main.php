<?php
// $Id: main.php,v 1.4 2005/09/22 08:08:02 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// shortcuts for Byte, Kilo, Mega

define("_MD_BYTES","Bytes");

define("_MD_KB","KB");

define("_MD_MB","MB");



define("_MD_NPICS","%s تصویر");

define("_MD_PICS","تصاویر");

define("_MD_ALBUM","آلبوم");

define("_MD_ERROR","بازگشت");

define("_MD_KEYS","کلمات کلیدی");

define("_MD_CONTINUE","ادامه");



define("_MD_RANDOM","تصاویر تصادفی");

define("_MD_LASTUP","آخرین تصاویر بارگزاری شده");

define("_MD_LASTCOM","آخرین نظرها");

define("_MD_TOPN","تصاویر پر بیننده");

define("_MD_TOPRATED","بالاترین امتیازات");

define("_MD_LASTHITS","آخرین تصاویر دیده شده");

define("_MD_SEARCH","جستجوی نتایج");

define("_MD_USEARCH","عکس های فرستاده شده از طرف: ");

define("_MD_MOST_SENT","بیشترین کارت پستالهای فرستاده شده");



define("_MD_ACCESS_DENIED",".شما اجازه دسترسی به این صفحه را ندارید");

define("_MD_PERM_DENIED",".شما اجازه انجام دادن این کار را ندارید");

define("_MD_PARAM_MISSING","اسکریپت بدون پارامتر های لازم فراخوانی شده است.");

define("_MD_NON_EXIST_AP","!آلبوم/عکس انتخاب شده وجود ندارد");

define("_MD_QUOTA_EXCEEDED","فضای شما تمام شده است<br /><br />شما به میزان [quota]K فضا در اختیار دارید، و تصاویر بارگزاری شده توسط شما تا کنون [space]K فضا اشغال کرده اند، اضافه کردن این تصویر باعث خواهد شد که فضای شما بیش از آن چیزی که به شما اختصاص داده شده است پر شود.");

define("_MD_GD_FILE_TYPE_ERR","اگر از کتابخانه عکس GD استفاده کنید فقط پسوند های JPEG و PNG قابل بارگزاری خواهند بود.");

define("_MD_INVALID_IMG","تصویری که بارگزاری کردید خراب است یا به وسیله کتابخانه GD قابل شناسایی نیست");

define("_MD_RESIZE_FAILED","ناتوانی در تولید آیکن یا عکس با اندازه کوچکتر.");

define("_MD_NO_IMG_TO_DISPLAY","تصویری برای نشان دادن وجود ندارد");

define("_MD_NO_EXIST_CAT","شاخه انتخاب شده وجود ندارد");

define("_MD_ORPHAN_CAT","شاخه والد این شاخه وجود ندارد، به مدیریت شاخه های ماژول بروید تا این مشکل را برطرف کنید.");

define("_MD_DIRECTORY_RO","پوشه '%s' قابل نوشتن نیست تصاویر را نمیتوان حذف کرد");

define("_MD_PIC_IN_INVALID_ALBUM","تصویر در آلبومی که وجود ندارد قرار دارد (%s)!؟");

define("_MD_GD_VERSION_ERR","PHP سرور شما از GD نسخه 2.x پشتیابنی نمیکند لطفا در صفحه ویژگی های ماژول به  GD نسخه 1.x تغییر دهید");

define("_MD_NO_GD_FOUND","PHP اجرا شده در سرور شده از کتابخانه عکس GD پشتیبانی نمیکند، هاست خود را چک کنید و ببینید ImageMagick یا Netpbm نصب هست یا نه");

define("_MD_IM_ERROR","خطا در اجرای ImageMagick - مقدار بازگشتی:");

define("_MD_IM_ERROR_CMD","خط فرمان :");

define("_MD_IM_ERROR_CONV","پاسخ برنامه تبدیل:");



// ------------------------------------------------------------------------- //

// File include/theme_func.php

// ------------------------------------------------------------------------- //

define("_MD_THM_ALB_LT","به لیست آلبوم ها برو");

define("_MD_THM_ALB_LL","لیست آلبوم ها");

define("_MD_THM_GAL_MYT","به گالری شخصی من برو");

define("_MD_THM_GAL_MYL","گالری شخصی من");

define("_MD_THM_ADM_MT","به دسترسی مدیر برو");

define("_MD_THM_ADM_ML","دسترسی مدیر");

define("_MD_THM_USER_MT","به دسترسی کاربر برو");

define("_MD_THM_USER_ML","دسترسی کاربر");

define("_MD_THM_UPLT","یک تصویر را در آلبوم بارگزاری کن ");

define("_MD_THM_UPLL","بارگزاری  یک تصویر");
define("_MD_THM_UPLLMORE","بارگزاری چند تصویر");
define("_MD_THM_LAST_UPL","آخرین بارگزاری ها");

define("_MD_THM_LAST_COM","آخرین نظر ها");

define("_MD_THM_MOST_VIEW","تصاویر پر بیننده");

define("_MD_THM_TOP_RATE","بالاترین امتیازات");

define("_MD_THM_SEARCH","جستجو");

define("_MD_THM_UPL_APPR","تایید بارگزاری");



define("_MD_THM_ALBMGR_LNK","آلبومهای مرا بساز/مرتب کن");

define("_MD_THM_MODIFY_LNK","آلبومهای مرا اصلاح کن");

define("_MD_THM_CAT","شاخه");

define("_MD_THM_ALB","آلبوم ها");

define("_MD_THM_PIC","تصاویر");

define("_MD_THM_ALBONPAGE","%d آلبوم در %d صفحه");

define("_MD_THM_DATE","تاریخ");

define("_MD_THM_NAME","نام فایل");

define("_MD_THM_SORT_DA","بر اساس تاریخ و به صورت صعودی مرتب شود");

define("_MD_THM_SORT_DD","بر اساس تاریخ و به صورت نزولی مرتب شود");

define("_MD_THM_SORT_NA","بر اساس نام و به صورت صعودی مرتب شود");

define("_MD_THM_SORT_ND","بر اساس نام و به صورت نزولی مرتب شود");

define("_MD_THM_PICPAGE","%d تصویر در %d صفحه");

define("_MD_THM_USERPAGE","%d کاربر در %d صفحه");



// ------------------------------------------------------------------------- //

// File include/functions.inc.php

// ------------------------------------------------------------------------- //



define("_MD_FUNC_FNAME","نام فایل: ");

define("_MD_FUNC_FSIZE","سایز فایل: ");

define("_MD_FUNC_DIM"," ابعاد: ");

define("_MD_FUNC_DATE","تاریخی که اضافه شده: ");

define("_MD_FUNC_COM","%s نظر");

define("_MD_FUNC_VIEW","%s بار دیده شده");

define("_MD_FUNC_VOTE","%s رای");

define("_MD_FUNC_SEND","%s بار");

define("_MD_FUNC_DELUSER","کاربر حذف شده");

// ------------------------------------------------------------------------- //

// File admin.php

// ------------------------------------------------------------------------- //

define("_MD_ADMIN_LEAVE","از قسمت دسترسی مدیر خارج شدید");

define("_MD_ADMIN_ENTER","به قسمت دسترسی مدیر وارد شدید");



// ------------------------------------------------------------------------- //

// File albmgr.php

// ------------------------------------------------------------------------- //



define("_MD_ALBMGR_NEED_NAME","آلبومها باید یک نام داشته باشند");

define("_MD_ALBMGR_CONF_MOD","آیا مطمئن هستید که میخواهید این تغییر را انجام دهید؟");

define("_MD_ALBMGR_NO_CHANGE","شما هیچ تغییری صورت ندادید");

define("_MD_ALBMGR_NEW_ALB","آلبوم جدید");

define("_MD_ALBMGR_CONF_DEL1","آیا مطمئن هستید که میخواهید این آلبوم را حذف کنید؟");

define("_MD_ALBMGR_CONF_DEL2","تمامی تصاویر و نظرهای موجود در آن پاک خواهند شد");

define("_MD_ALBMGR_SELECT_FIRST","اول یک آلبوم انتخاب کنید");

define("_MD_ALBMGR_ALB_MGR","مدیر آلبوم ها");

define("_MD_ALBMGR_MY_GAL","* گالری من *");

define("_MD_ALBMGR_NO_CAT","* بدون شاخه *");

define("_MD_ALBMGR_DEL","حذف");

define("_MD_ALBMGR_NEW","جدید");

define("_MD_ALBMGR_APPLY","تغییرات را ثبت کن");

define("_MD_ALBMGR_SELECT","انتخاب شاخه");



// ------------------------------------------------------------------------- //

// File db_input.php

// ------------------------------------------------------------------------- //



define("_MD_DB_ALB_NEED_TITLE","شما باید یک عنوان به آلبوم خود بدهید");

define("_MD_DB_NO_NEED","به روز کردن لازم نیست");

define("_MD_DB_ALB_UPDATED","آلبوم به روز شد");

define("_MD_DB_UNKOWN","آلبوم انتخاب شده وجود ندارد یا شما برای بارگزاری در این آلبوم دسترسی ندارید");

define("_MD_DB_NO_PICUP","هیچ تصویری بارگزاری نشد!<br /><br />اگر شما واقعا تصویری را برای بارگزاری انتخاب کردید، بررسی کنید که آیا سرور اجازه بارگزاری فایل را میدهد یا نه...");

define("_MD_DB_ERR_MKDIR","ناتوانی در ایجاد پوشه %s !");

define("_MD_DB_DEST_DIR_RO","پوشه مقصد %s به وسیله اسکریپت قابل نوشتن نیست!");

define("_MD_DB_ERR_FEXT","فقط فایل های با پسوند مقابل قابل قبول هستند : <br /><br />%s.");

define("_MD_DB_ERR_MOVE","انتقال %s به %s غیر ممکن است!");

define("_MD_DB_ERR_PIC_SIZE","اندازه تصویری که میخوهید آن را بارگزاری کنید خیلی بزرگ است (حداکثر اندازه مجاز %s در %s است) !");

define("_MD_DB_ERR_FSIZE","اندازه فایلی که میخوهید آن را بارگزاری کنید خیلی بزرگ است (حداکثر اندازه مجاز %s KB است) !");

define("_MD_DB_ERR_IMG_INVALID","فایلی که بارگزاری کرده اید یک عکس مجاز نیست!");

define("_MD_DB_IMG_ALLOWED","شما می توانید %sعکس را بارگزاری کنید ");

define("_MD_DB_ERR_INSERT","تصویر '%s' به آلبوم اضافه نشد ");

define("_MD_DB_UPLOAD_SUCC","تصویر شما با موفقیت بارگزاری شد<br /><br />بعد از تایید مدیر در سایت قرار میگیرد");

define("_MD_DB_UPL_SUCC","تصویر شما با موفقیت اضافه شد");

// ------------------------------------------------------------------------- //

// File delete.php

// ------------------------------------------------------------------------- //

define("_MD_DEL_CAPTION","عنوان");

define("_MD_DEL_FS_PIC","تصویر با بزرگترین اندازه");

define("_MD_DEL_DEL_SUCCESS","با موفقیت حذف شد");

define("_MD_DEL_NS_PIC","تصویر با اندازه طبیعی");

define("_MD_DEL_ERR_DEL","حذف نمیشود");

define("_MD_DEL_THUMB","آیکون تصاویر");

define("_MD_DEL_COMMENT","نظر");

define("_MD_DEL_IMGALB","عکس در آلبوم");

define("_MD_DEL_ALB_DEL_SUC","آلبوم '%s' حذف شد");

define("_MD_DEL_ALBMGR","مدیر آلبوم ها");

define("_MD_DEL_INVALID","داده های نادرست از طرف '%s'رسیده است ");

define("_MD_DEL_CREATE","ساختن آلبوم '%s'");

define("_MD_DEL_UPDATE","آلبوم '%s' با عنوان '%s' و نمایه '%s'به روز شد ");

define("_MD_DEL_DELPIC","تصویر حذف شد");

define("_MD_DEL_DELALB","آلبوم حذف شد");



// ------------------------------------------------------------------------- //

// File displayimage.php

// ------------------------------------------------------------------------- //

define("_MD_DIS_CONF_DEL","آیا مطمئن هستید که می خواهید این تصویر را حذف کنید؟ نظر ها هم حذف خواهند شد.");

define("_MD_DIS_DEL_PIC","این تصویر را پاک کن");

define("_MD_DIS_SIZE"," x %s x %s پيکسل");

define("_MD_DIS_VIEWS","%s بار ");

define("_MD_DIS_SLIDE","Slideshow");

define("_MD_DIS_STOP_SLIDE"," SLIDESHOW توقف ");

define("_MD_DIS_FULL","اینجا را کلیک کنید تا تصویر را با بزرگترین اندازه ببینید");

define("_MD_DIS_TITLE","اطلاعات تصویر");

define("_MD_DIS_FNAME","نام فایل");

define("_MD_DIS_ANAME","نام آلبوم");

define("_MD_DIS_RATING","امتیاز (%s رای)");

define("_MD_DIS_FSIZE","اندازه فایل");

define("_MD_DIS_DIMEMS","ابعاد");

define("_MD_DIS_DISPLAYED","دیده شده");

define("_MD_DIS_CAMERA","دوربین");

define("_MD_DIS_DATA_TAKEN","تاریخ گرفته شده");

define("_MD_DIS_APERTURE","روزنه");

define("_MD_DIS_EXPTIME","نمایش زمان");

define("_MD_DIS_FLENGTH","طول مرکزی");

define("_MD_DIS_COMMENT","نظر");

define("_MD_DIS_BACK_TNPAGE","بازگشت به صفحه آیکن تصاویر");

define("_MD_DIS_SHOW_PIC_INFO","اطلاعات تصاویر را نشان بده/پنهان کن");

define("_MD_DIS_SEND_CARD","این تصویر را به عنوان کارت پستال بفرست");

define("_MD_DIS_CARD_DISABLE","کارت پستالها نشان داده شود");

define("_MD_DIS_CARD_DISABLEMSG","شما اجازه فرستادن این کارت پستالها را ندارید");

define("_MD_DIS_NEXT","تصویر بعدی");

define("_MD_DIS_PREV","تصویر قبلی");

define("_MD_DIS_PICPOS","تصویر %s/%s");

define("_MD_DIS_RATE_THIS","امتیاز به این تصویر ");

define("_MD_DIS_NO_VOTE","(هنوز رایی داده نشده)");

define("_MD_DIS_RATINGCUR","(امتیاز در حال حاضر: %s / 5 با %s رای)");

define("_MD_DIS_RUBBISH","آشغال");

define("_MD_DIS_POOR","به درد نخور");

define("_MD_DIS_FAIR","متوسط");

define("_MD_DIS_GOOD","خوب");

define("_MD_DIS_EXCELLENT","بسیار خوب");

define("_MD_DIS_GREAT","عالی");

define("_MD_DIS_UPLOADER","فرستاده شده از طرف");

define("_MD_DIS_EXIF_ERR","نسخه PHP موجود در سرور شما از فرمت داده های EXIF در فایل های JPEG پشتیبانی نمیکند، لطفا این گزینه را در قسمت تنظیمات ماژول خاموش کنید.");

define("_MD_DIS_VIEW_MORE_BY","دیدن تصاویر دیگر فرستاده شده از طرف");

define("_MD_DIS_SUBIP","فرستنده ip");

define("_MD_DIS_SENT","به عنوان یک کارت پستال فرستاده شد");

// ------------------------------------------------------------------------- //

// File ecard.php

// ------------------------------------------------------------------------- //



define("_MD_CARD_TITLE","به عنوان یک کارت پستال بفرست");

define("_MD_CARD_INVALIDE_EMAIL","<b>هشدار</b> ایمیل نادرست");

define("_MD_CARD_ECARD_TITLE","یک کارت پستال از طرف %s برای تو ");

define("_MD_CARD_VIEW_ECARD","اگر کارت پستال درست نشان داده نمی شود اینجا را کلیک کنید");

define("_MD_CARD_VIEW_MORE_PICS","برای دیدن تصاویر بیشتر اینجا را کلیک کنید");

define("_MD_CARD_SEND_SUCCESS","کارت پستال شما فرستاده شد");

define("_MD_CARD_SEND_FAILED","متاسفیم ولی سرور اجازه ارسال کارت پستال شما را نمیدهد");

define("_MD_CARD_FROM","از طرف");

define("_MD_CARD_YOUR_NAME","نام شما");

define("_MD_CARD_YOUR_EMAIL","آدرس ایمیل شما");

define("_MD_CARD_TO","به");

define("_MD_CARD_RCPT_NAME","نام گیرنده");

define("_MD_CARD_RCPT_EMAIL","آدرس ایمیل گیرنده");

define("_MD_CARD_GREETINGS","پیام تبریک");

define("_MD_CARD_MESSAGE","پیام");

define("_MD_CARD_PERHOUR","شما اجازه دارید فقط %s لطفا بعدا دوباره سعی کنید .کارت پستال در هر ساعت بفرستید ");

define("_MD_CARD_NOTINDB","نمی توان اطلاعات کارت پستال را به پایگاه داده فرستاد!<br />لطفا با مدیران سایت تماس بگیرید.");





// ------------------------------------------------------------------------- //

// File editpics.php

// ------------------------------------------------------------------------- //



define("_MD_EDITPICS_PIC_INFO","اطلاعات&nbsp;تصوير");

define("_MD_EDITPICS_TITLE","عنوان");

define("_MD_EDITPICS_DESC","شرح");

define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s بار دیده شده - %s رای");

define("_MD_EDITPICS_APPROVE","تایید تصویر");

define("_MD_EDITPICS_PP_APPROVE","به تعویق انداختن تایید");

define("_MD_EDITPICS_DEL_PIC","حذف کردن تصویر");

define("_MD_EDITPICS_RVIEW","ریست کردن شمارنده بازدیدها");

define("_MD_EDITPICS_RVOTES","ریست کردن رای ها");

define("_MD_EDITPICS_DCOM","پاک کردن نظر ها");

define("_MD_EDITPICS_UPL_APPROVAL","تایید بارگزاری");

define("_MD_EDITPICS_EDIT","ویرایش تصاویر");

define("_MD_EDITPICS_NEXT","تصویر بعدی");

define("_MD_EDITPICS_PREV","تصویر قبلی");

define("_MD_EDITPICS_NUMDIS","تعداد تصاویر برای نمایش");

define("_MD_EDITPICS_APPLY"," اجرای تغییرات");



// ------------------------------------------------------------------------- //

// File index.php

// ------------------------------------------------------------------------- //



define("_MD_INDEX_CONF_DEL","آیا اطمینان دارید که می خواهید این آلبوم را حذف کنید؟ تمام تصاویر و نظر ها هم حذف خواهند شد.");

define("_MD_INDEX_DEL","حذف");

define("_MD_INDEX_MOD","ویژگی ها");

define("_MD_INDEX_EDIT","ویرایش عکسها");

define("_MD_INDEX_STAT1","<b>[pictures]</b> تصویر در <b>[albums]</b> آلبوم و <b>[cat]</b> شاخه همراه با <b>[comments]</b> نظر وجود دارد و تصاویر <b>[views]</b> بار دیده شده اند.");

define("_MD_INDEX_STAT2","<b>[pictures]</b> تصویر در <b>[albums]</b> آلبوم وجود دارد و تصاویر <b>[views]</b> بار دیده شده اند.");

define("_MD_INDEX_USERS_GAL","گالری %s");

define("_MD_INDEX_STAT3","<b>[pictures]</b> تصویر در <b>[albums]</b> آلبوم همراه با <b>[comments]</b> نظر وجود دارد و تصاویر <b>[views]</b> بار دیده شده اند.");

define("_MD_INDEX_ULIST","لیست کاربران");

define("_MD_INDEX_NO_UGAL","هیچ گالری ای که متعلق به کاربران باشد وجود ندارد");

define("_MD_INDEX_NALBS","%s آلبوم");

define("_MD_INDEX_NPICS","%s تصویر");

define("_MD_INDEX_LASTADD",", آخرین تصویر در %s اضافه شده است ");



// ------------------------------------------------------------------------- //

// File modifyalb.php

// ------------------------------------------------------------------------- //

define("_MD_MODIFYALB_UPD_ALB_N","آلبوم به روز شده %s");

define("_MD_MODIFYALB_GEN_SET"," تنظیمات کلی ");

define("_MD_MODIFYALB_ALB_TITLE","عنوان آلبوم");

define("_MD_MODIFYALB_ALB_CAT","عنوان شاخه");

define("_MD_MODIFYALB_ALB_DESC","شرح آلبوم");

define("_MD_MODIFYALB_ALB_THUMB","آیکن تصویری آلبوم");

define("_MD_MODIFYALB_ALB_PERM","اجازه دسترسی به این آلبوم");

define("_MD_MODIFYALB_CAN_VIEW"," دیدن آلبوم با");

define("_MD_MODIFYALB_CAN_UPLOAD","بازدید کننده ها میتوانند تصویر بارگزاری کنند");

define("_MD_MODIFYALB_CAN_COM","بازدید کننده ها میتوانند نظر ارسال کنند");

define("_MD_MODIFYALB_CAN_RATE","بازدید کننده ها میتوانند به تصاویر امتیاز بدهند");

define("_MD_MODIFYALB_USER_GAL","گالری کاربر");

define("_MD_MODIFYALB_NO_CAT","* بدون شاخه *");

define("_MD_MODIFYALB_ALB_EMPTY","آلبوم خالی است");

define("_MD_MODIFYALB_LAST_UPL","آخرین تصاویر بارگزاری شده");

define("_MD_MODIFYALB_PUB_ALB","آلبوم عمومی");

define("_MD_MODIFYALB_ME_ONLY","فقط من");

define("_MD_MODIFYALB_OWNER_ONLY","صاحب آلبوم (%s) فقط");

define("_MD_MODIFYALB_GROUP_ONLY"," اعضای گروه '%s' ");

define("_MD_MODIFYALB_ERR_NO_ALB","هیچ آلبومی را نمیتوانید تغییر دهید");

define("_MD_MODIFYALB_UPDATE","به روز کردن آلبوم");



// ------------------------------------------------------------------------- //

// File ratepic.php

// ------------------------------------------------------------------------- //

define("_MD_RATE_ALREADY","متاسفانه شما یک بار به این تصویر امتیاز داده اید");

define("_MD_RATE_OK","رای شما پذیرفته شد");



// ------------------------------------------------------------------------- //

// File search.php - OK

// ------------------------------------------------------------------------- //

define("_MD_SEARCH_TITLE","جستجو در کلکسیون تصاویر");



// ------------------------------------------------------------------------- //

// File upload.php

// ------------------------------------------------------------------------- //

define("_MD_UPL_TITLE","بارگزاری تصویر");

define("_MD_UPL_MAX_FSIZE","ماکزیمم سایز فایل تصویر %s KB");

define("_MD_UPL_ALBUM","آلبوم");

define("_MD_UPL_PICTURE","تصویر");

define("_MD_UPL_PIC_TITLE","عنوان تصویر");

define("_MD_UPL_DESCRIPTION","شرح تصویر");

define("_MD_UPL_KEYWORDS","کلمات کلیدی (هر کلمه را با فاصله از بقیه جدا کنید)");

define("_MD_UPL_ERR_NO_ALB_UPLOAD","متاسفانه آلبومی که شما مجاز به بارگزاری تصاویر در آن باشید وجود ندارد.");

define("_MD_UPL_YOURALB","آلبوم های شخصی شما");

define("_MD_UPL_ALBPUB","آلبوم های عمومی");

define("_MD_UPL_OUSERALB","آلبوم های کاربران دیگر");







?> 