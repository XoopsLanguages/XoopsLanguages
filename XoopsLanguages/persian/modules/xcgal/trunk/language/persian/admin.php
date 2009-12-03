<?php
// $Id: admin.php,v 1.2 2005/09/01 13:58:33 mcleines Exp $
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
define("_AM_CONFIG","تنظیمات گالری");
define("_AM_GENERALCONF","ویژگی های کلی");
define("_AM_CATMNGR","مدیریت شاخه ها");
define("_AM_USERMNGR","مدیریت کاربران");
define("_AM_GROUPMNGR","مدیریت گروه ها");
define("_AM_BATCHADD","اضافه کردن جمعی تصاویر");
define("_AM_ECARDMNGR","مدیریت کارت پستال ها");
define("_AM_PICAPP","تصاویر منتظر برای تایید");

define("_AM_PARAM_MISSING","اسکریپت با تعداد پارامتر نامناسب فراخوانی شده است..");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","مدیریت کاربران ماژول گالری");
define("_AM_USERMGR_USHOW","نشان دادن تمام کاربران با آلبوم ها/تصاویر شان ");
define("_AM_USERMGR_USHOWDEL","نشان دادن تصاویر کاربران حذف شده");
define("_AM_USERMGR_ULIST","فهرست کاربران");
define("_AM_USERMGR_USER","کاربر");
define("_AM_USERMGR_ALBUMS","آلبوم ها");
define("_AM_USERMGR_PICS","تصاویر");
define("_AM_USERMGR_QUOTA","فضای استفاده شده");
define("_AM_USERMGR_ALB","آلبوم");
define("_AM_USERMGR_DELUID","شماره کابری (id) کاربر حذف شده");
define("_AM_USERMGR_OPT","عمل ها");
define("_AM_USERMGR_NOTMOVE","** جابجا نکن **");
define("_AM_USERMGR_DEL","حذف");
define("_AM_USERMGR_PROPS","مشخصات");
define("_AM_USERMGR_EDITP","ویرایش تصاویر");

define("_AM_USERMGR_UONPAGE","%d کابر در %d صفحه");
define("_AM_USERMGR_NOUSER","هیچ کاربری پیدا نشد");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","جستجوی تصاویر جدید");
define("_AM_SRCHNEW_SEL_DIR","انتخاب شاخه");
define("_AM_SRCHNEW_SEL_DIR_MSG","این تابع به شما این امکان را می دهد که تصاویر را به صورت جمعی بارگزاری کنید.<br /><br />شاخه ای را که تصاویر را در آن بارگزاری کرده اید انتخاب کنید");
define("_AM_SRCHNEW_NO_PIC_ADD","تصویری برای اضافه کردن وجود ندارد");
define("_AM_SRCHNEW_NEED_ONE_ALB","شما برای استفاده از این امکان حداقل به یک آلبوم احتیاج دارید.");
define("_AM_SRCHNEW_WARNING","هشدار");
define("_AM_SRCHNEW_CHG_PERM","اسکریپت نمیتواند در این شاخه چیزی بنویسد، شما باید قبل از تلاش برای بارگزاری chmode شاخه را به 755 یا 777 عوض کنید!");
define("_AM_SRCHNEW_TARGET_ALB","Put pictures of "</b>%s<b>" into </b>%s");
define("_AM_SRCHNEW_FOLDER","پوشه");
define("_AM_SRCHNEW_IMAGE","عکس");
define("_AM_SRCHNEW_ALB","آلبوم");
define("_AM_SRCHNEW_RESULT","نتیجه");
define("_AM_SRCHNEW_DIR_RO","غیر قابل نوشتن. ");
define("_AM_SRCHNEW_CANT_READ","غیر قابل خواندن. ");
define("_AM_SRCHNEW_INSERT","اضافه کردن تصاویر جدید به گالری");
define("_AM_SRCHNEW_LIST_NEW","فهرست تصاویر جدید");
define("_AM_SRCHNEW_INS_SEL","اضافه کردن تصاویر انتخاب شده");
define("_AM_SRCHNEW_NO_PIC","هیچ تصویر جدید یافت نشد");
define("_AM_SRCHNEW_PATIENT","لطفا صبور باشید، اسکریپ برای اضافه کردن تصاویر به زمان نیاز دارد");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : به این معنی است که تصاویر با موفقیت بارگزاری شدند<li><b>DP</b> : به این معنی است که تصویر تکراری است و در پایگاه داده وجود دارد<li><b>PB</b> : به این معنی است که تصویر را نمیتوان اضافه کرد، ویژگی ها و سطح دسترسی شاخه هایی را که تصاویر در آن قرار دارند بررسی کنید<li>اگر علایم OK, DP, PB نشان داده نشدند بر روی تصویر خراب کلیک کنید  تا خطاهای PHP احتمالی را ببینید<li>اگر مرورگر شما تمام شدن مهلت زمانی را نشان داد،بر روی بارگزاری مجدد بزنید</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","نام گروه");
define("_AM_GRPMGR_QUOTA","فضای دیسک سخت مورد استفاده");
define("_AM_GRPMGR_RATE","می توانند به تصاویر رای دهند");
define("_AM_GRPMGR_SENDCARD","می توانند کارت پستال ارسال کنند");
define("_AM_GRPMGR_COM","می توانند نظر بدهند");
define("_AM_GRPMGR_UPLOAD","می توانند تصویر بارگزاری کنند");
define("_AM_GRPMGR_PRIVATE","می توانند گالری شخصی داشته باشند");
define("_AM_GRPMGR_APPLY","اعمال تغییرات");
define("_AM_GRPMGR_MANAGE","مدیریت گروه های کاربری");
define("_AM_GRPMGR_PUB_APPR","تایید بارگزاری در آلبوم های عمومی (1)");
define("_AM_GRPMGR_PRIV_APPR","تایید بارگزاری در آلبوم های شخصی (2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> بارگزاری در آلبوم های عمومی نیاز به تایید از طرف مدیر دارد");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> بارگزاری در آلبوم های شخصی کاربران نیاز به تایید از طرف مدیر دارد");
define("_AM_GRPMGR_NOTES","توضیحات");
define("_AM_GRPMGR_SYN","همزمانی");
define("_AM_GRPMGR_SYN_NOTE"," بر روی 'همزمانی' کلیک کنید تا گروه های ماژول گالری با گروه های زوپس تطابق پیدا کنند");
define("_AM_GRPMGR_EMPTY","جدول گروه های ماژول گالری خالی بود!<br /><br />گروه های پیشفرض ساخته شدند.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","پارامتر های مورد نیاز برای عملیات '%s' پشتیابنی نمیشوند!");
define("_AM_CAT_UNKOWN","شاخه انتخاب شده در پایگاه داده وجود ندارد");
define("_AM_CAT_UGAL_CAT_RO","شاخه مربوط به گالری های کاربران را نمیتوان حذف کرد!");
define("_AM_CAT_MNGCAT","مدیریت شاخه ها");
define("_AM_CAT_CONF_DEL","آیا اطمینان دارید که میخواهید این شاخه را حذف کنید ؟");
define("_AM_CAT_CAT","شاخه");
define("_AM_CAT_OP","عمل ها");
define("_AM_CAT_MOVE","انتقال به");
define("_AM_CAT_UPCR","به روز کردن/ساختن شاخه");
define("_AM_CAT_PARENT","شاخه والد (بالایی)");
define("_AM_CAT_TITLE","عنوان شاخه");
define("_AM_CAT_DESC","شرح شاخه");
define("_AM_CAT_NOCAT","* شاخه ای نیست *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","مدیریت کارت پستال ماژول گالری");
define("_AM_CARDMGR_TIME","تاریخ");
define("_AM_CARDMGR_SUNAME","شناسه کاربری فرستنده");
define("_AM_CARDMGR_SEMAIL","ایمیل فرستنده");
define("_AM_CARDMGR_SIP","IP فرستنده");
define("_AM_CARDMGR_PID","شماره شناسایی (ID) تصویر");
define("_AM_CARDMGR_STATUS","گرفته شده");
define("_AM_CARDMGR_DEL_SELECTED","حذف کارت پستال های انتخاب شده");
define("_AM_CARDMGR_DEL_ALL","حذف تمام کارت پستال ها");
define("_AM_CARDMGR_DEL_PICKED","همه کارت پستال های گرفته شده را حذف کن");
define("_AM_CARDMGR_DEL_UNPICKED","همه کارت پستال های گرفته نشده را حذف کن");
define("_AM_CARDMGR_CONPAGE","%d کارت پستال در %d صفحه");

?> 