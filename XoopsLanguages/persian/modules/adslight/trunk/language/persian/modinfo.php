<?php

// AdsLight  version 1.0.60 $Id: add.php - 2010-03-03 02:43:47Z iLuc $    //
// ------------------------------------------------------------------------- //
//                     AdsLight Module for Xoops                             //
// ------------------------------------------------------------------------- //
//         Redesigned and ameliorate By iluc user at www.frxoops.org         //
//          Find it or report problems at www.i-luc.fr/adslight/             //
//      Started with the Classifieds module and made MANY changes            //
// ------------------------------------------------------------------------- //
//              Original credits below Version History                       //
// ------------------------------------------------------------------------- //
//                    Classified Module for Xoops                            //
//  By John Mordo user jlm69 at www.xoops.org and www.jlmzone.com            //
//      Started with the MyAds module and made MANY changes                  //
// ------------------------------------------------------------------------- //
// Original Author: Pascal Le Boustouller                                    //
// Author Website : pascal.e-xoops@perso-search.com                          //
// Licence Type   : GPL                                                      //
// ------------------------------------------------------------------------- //
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
//  Translate by Eshtehard.net                                               //
//  Official Xoops Support Site For Persians                                 //
//  Translate by www.irxoops.org                                             //
//  ------------------------------------------------------------------------ //

// The name of this module
define("_MI_ADSLIGHT_NAME ","آگهی و نیازمندیها");
define("_MI_ADSLIGHT_MENUADD","افزودن آگهی");

// A brief description of this module
define("_MI_ADSLIGHT_DESC","ماژول آگهی و نیازمندیها");

// Names of blocks for this module (Not all module has blocks)
define("_MI_ADSLIGHT_BNAME1","آگهی های جدید");
define("_MI_ADSLIGHT_BNAME1_DESC","بلاک آگهی های جدید");
define("_MI_ADSLIGHT_BNAME2","آگهی های برتر");
define("_MI_ADSLIGHT_BNAME2_DESC","بلاک آگهی های برتر");

// Names of admin menu items
define("_MI_ADSLIGHT_ADMENU0","صفحه اصلی مدیریت");
define("_MI_ADSLIGHT_ADMENU1","مدیریت شاخه ها");
define("_MI_ADSLIGHT_ADMENU2","دسترسی ها");
define("_MI_ADSLIGHT_ADMENU3","بلاکها");
define("_MI_ADSLIGHT_ADMENU4","تنظیمات");
define("_MI_ADSLIGHT_ADMENU5","گزینه ها");
define("_MI_ADSLIGHT_ADMENU6","وارد کردن");
define("_MI_ADSLIGHT_ADMENU7","درباره");
define("_MI_ADSLIGHT_ADMENU8","اسناد");
define("_MI_ADSLIGHT_ADMENU9","برو به ماژول");
define("_MI_ADSLIGHT_ADMENU10","بروزرسانی");
define("_MI_ADSLIGHT_ADMENU11","انجمن پشتیبانی");

define("_MI_ADSLIGHT_CONFSAVE","تنظیمات ذخیره شده");
define("_MI_ADSLIGHT_CANPOST","کاربر مهمان می توانند آگهی ارسال کنند :");
define("_MI_ADSLIGHT_PERPAGE","آگهی در هر صفحه :");
define("_MI_ADSLIGHT_RES_PERPAGE","رزومه در هر صفحه :");
define("_MI_ADSLIGHT_MONEY","نشان ارز :");
define("_MI_ADSLIGHT_KOIVI","استفاده ازویرایشگر Koivi :");
define("_MI_ADSLIGHT_NUMNEW","تعداد آگهی های جدید :");
define("_MI_ADSLIGHT_MODERAT","تعدیل کردن آگهی :");
define("_MI_ADSLIGHT_DAYS","مدت زمان نمایش آگهی :");
define("_MI_ADSLIGHT_MAXIIMGS","حداکثر اندازه عکس :");
define("_MI_ADSLIGHT_MAXWIDE","حداکثر عرض عکس :");
define("_MI_ADSLIGHT_MAXHIGH","حداکثر ارتفاع عکس :");
define("_MI_ADSLIGHT_INBYTES","واحد bytes");
define("_MI_ADSLIGHT_INPIXEL","واحد pixels");
define("_MI_ADSLIGHT_INDAYS","روز");
define("_MI_ADSLIGHT_MUSTLOGIN","اجازه به کاربران ناشناس برای پاسخ به این آگهی طبقه بندی شده.");
define("_MI_ADSLIGHT_THRUMAIL","با استفاده از فرم ایمیل (توصیه شده است که نه ، به دلیل هرزنامه ها.)");
define("_MI_ADSLIGHT_TYPEBLOC","نوع بلوک :");
define("_MI_ADSLIGHT_JOBRAND","آگهی تصادفی");
define("_MI_ADSLIGHT_LASTTEN","آخرین 10 آگهی");
define("_MI_ADSLIGHT_NEWTIME","آگهی جدید از :");
define("_MI_ADSLIGHT_DISPLPRICE","نمایش قیمت:");
define("_MI_ADSLIGHT_DISPLPRICE2","نمایش قیمت :");
define("_MI_ADSLIGHT_INTHISCAT","در این شاخه");
define("_MI_ADSLIGHT_DISPLSUBCAT","نمایش زیر شاخه :");
define("_MI_ADSLIGHT_ONHOME","در صفحه اول ماژول");
define("_MI_ADSLIGHT_NBDISPLSUBCAT","تعداد زیرشاخه ها برای نشان دادن :");
define("_MI_ADSLIGHT_IF","اگر");
define("_MI_ADSLIGHT_ISAT","در");
define("_MI_ADSLIGHT_VIEWNEWCLASS","نمایش آگهی های جدید :");
define("_MI_ADSLIGHT_ORDREALPHA","مرتب کردن بر اساس حروف الفبا");
define("_MI_ADSLIGHT_ORDREPERSO","Personalised Order");
define("_MI_ADSLIGHT_CSORT_ORDER","ترتیب پیشفرض شاخه ها");
define("_MI_ADSLIGHT_LSORT_ORDER","ترتیب پیشفرض آگهی ها");
define("_MI_ADSLIGHT_ORDER_TITLE","مرتب سازی آگهی ها بر اساس عنوان");
define("_MI_ADSLIGHT_ORDER_PRICE","مرتب سازی آگهی ها بر اساس قیمت");
define("_MI_ADSLIGHT_ORDER_DATE","مرتب سازی آگهی ها بر اساس تاریخ (پیشفرض)");
define("_MI_ADSLIGHT_ORDER_POP","مرتب سازی آگهی ها بر اساس بازدید");
define("_MI_ADSLIGHT_DBUPDATED",'پایگاه داده به روز شده است.');
define("_MI_ADSLIGHT_GPERM_G_ADD" , "Can add" ) ;
define("_MI_ADSLIGHT_CAT2GROUPDESC" , "چک کردن شاخه ها که شما اجازه دسترسی دارید" ) ;
define("_MI_ADSLIGHT_GROUPPERMDESC" , "انتخاب گروه (های) مجاز به ارسال آگهی." ) ;
define("_MI_ADSLIGHT_GROUPPERM","ارسال دسترسی ها");
define("_MI_ADSLIGHT_SUBMITFORM","دسترسی ارسال آگهی");
define("_MI_ADSLIGHT_SUBMITFORM_DESC","انتخاب کنید ، چه کسی می تواند آگهی ارسال کند.");
define("_MI_ADSLIGHT_VIEWFORM","دسترسی نمایش آگهی");
define("_MI_ADSLIGHT_VIEWFORM_DESC","انتخاب کنید ، چه کسی می تواند آگهی ها را مشاهده کند");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC","انتخاب کنید ، چه کسی می تواند رزومه ها را مشاهده کند");
define("_MI_ADSLIGHT_SUPPORT","پشتیبانی از این نرم افزار");
define("_MI_ADSLIGHT_OP","Read my opinion");
define("_MI_ADSLIGHT_PREMIUM","دسترسی آگهی های ویژه");
define("_MI_ADSLIGHT_PREMIUM_DESC","چه کسی می تواند روزهای نمایش آگهی را مشخص کند");

define("_MI_ADSLIGHT_CATEGORY_NOTIFY",'شاخه'); 
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC",'گزینه آگاه سازی برای همین شاخه');
define("_MI_ADSLIGHT_NOTIFY","Listing"); 
define("_MI_ADSLIGHT_NOTIFYDSC",'گزینه آگاه سازی برای همین آگهی.');	
define("_MI_ADSLIGHT_GLOBAL_NOTIFY",'تمام بخش های آگهی و نیازمندیها ');
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC",'Global advert notification options.');
define("_MI_ADSLIGHT_NEWPOST_NOTIFY",'آگهی جدید');
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP",'اطلاع به من برای قرار گرفتن آگهی جدید در این شاخه');
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC",'دریافت آگهی وقتی آگهی جدید در این شاخه ارسال شد');
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی جدید در شاخه');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY",'آگهی جدید');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP",'وقتی آگهی جدید در این شاخه ارسال شد مرا خبر کن');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی آگهی جدید در این شاخه ارسال شد');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار: آگهی جدید در شاخه');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY",'آگهی بروزرسانی شد');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP",'وقتی آگهی در این شاخه بروزرسانی شد مرا خبر کن');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی آگهی ی در این شاخه بروز شد.');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی جدید در این شاخه');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY",'آگهی حذف شد');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP",'وقتی آگهی در این شاخه حذف شد مرا خبر کن');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی آگهی ی در این شاخه حذف شد.');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی جدید در این شاخه');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY",'آگهی جدید');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP",'وقتی آگهی جدید در یکی از شاخه ها اضافه شد مرا خبر کن.');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی لیتی در یکی از شاخه ها اضافه شد.');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی جدید در این شاخه');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY",'آگهی جدید');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP",'وقتی آگهی جدید در یکی از شاخه ها اضافه شد مرا خبر کن..');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی لیتی در یکی از شاخه ها اضافه شد..');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی جدید در این شاخه');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY",'آگهی بروزرسانی شد');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP",'وقتی آگهی در یکی از شاخه ها بروزرسانی شد مرا خبر کن.');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی آگهی ی در یکی از شاخه ها بروز شد.');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی آپدیت شد در شاخه');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY",'آگهی حذف شد');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP",'وقتی آگهی در یکی از شاخه ها حذف شد مرا خبر کن.');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC",'دریافت آگهی اطلاع رسانی وقتی آگهیی در یکی از شاخه ها حذف شد.');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ",'[{X_SITENAME}] {X_MODULE}: آگاهی رسانی خودکار : آگهی حذف شد در شاخه');
define("_MI_ADSLIGHT_RATE_USER","اجازه به کاربران برای ارزیابی فروشندگان ");
define("_MI_ADSLIGHT_RATE_ITEM","اجازه به کاربران برای ارزیابی موارد ");
define("_MI_ADSLIGHT_DIFF_NAME","اجازه به کاربران برای استفاده از نام های مختلف");
define("_MI_ADSLIGHT_DIFF_EMAIL","اجازه به کاربران برای استفاده از پست الکترونیک مختلف");
define("_MI_ADSLIGHT_NOT_PREMIUM","تعداد تصاویر -- عضو عادی");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC" ,"تعداد تصویری که کاربران عادی میتوانند در صفحه خود داشته باشند");
define("_MI_ADSLIGHT_NUMBPICT_TITLE","تعداد تصویر _ عضو ویژه");
define("_MI_ADSLIGHT_NUMBPICT_DESC" ,"تعداد تصویری که کاربران ویژه میتوانند در صفحه خود داشته باشند");
define("_MI_ADSLIGHT_SMNAME1" ,"ارسال");
define("_MI_ADSLIGHT_THUMW_TITLE" , "عرض تصویر کوچک");
define("_MI_ADSLIGHT_THUMBW_DESC" , "عرض تصویر کوچک بر حسب پیکسل<br />This means your picture thumbnail will have<br />at most this size in width<br />All proportions are maintained");
define("_MI_ADSLIGHT_THUMBH_TITLE" , "ارتفاع تصویر کوچک");
define("_MI_ADSLIGHT_THUMBH_DESC" , "ارتفاع تصویر کوچک بر حسب پیکسل<br />This means your picture thumbnail will have<br />at most this size in height<br />All proportions are maintained");
define("_MI_ADSLIGHT_RESIZEDW_TITLE" , "تغییر اندازه عرض تصویر");
define("_MI_ADSLIGHT_RESIZEDW_DESC" , "Resized picture width in pixels<br />This means your picture will have<br />at most this size in width<br />All proportions are maintained<br /> تصویر اصلی از این اندازه بزرگتر است <br />be resized so it wont break your template");
define("_MI_ADSLIGHT_RESIZEDH_TITLE" , "تغییر اندازه ارتفاع تصویر");
define("_MI_ADSLIGHT_RESIZEDH_DESC" , "Resized picture height in pixels<br />This means your picture will have<br />at most this size in height<br />All proportions are maintained<br /> تصویر اصلی از این اندازه بزرگتر است <br />be resized so it wont break your template design");
define("_MI_ADSLIGHT_ORIGW_TITLE" , "حداکثر عرض تصویر اصلی");
define("_MI_ADSLIGHT_ORIGW_DESC" , "Maximum original picture width in pixels<br />این به این معنی تصویر اصلی کاربر نمی تواند بیش از باشد <br />this size in height<br />or else it won't be uploaded");
define("_MI_ADSLIGHT_ORIGH_TITLE" , "حداکثر ارتفاع تصویر اصلی");
define("_MI_ADSLIGHT_ORIGH_DESC" , "Maximum original picture height in pixels<br />این به این معنی تصویر اصلی کاربر نمی تواند بیش از باشد <br />this size in height<br />or else it won't be uploaded");
define("_MI_ADSLIGHT_UPLOAD_TITLE" , "مسیر بارگزاری");
define("_MI_ADSLIGHT_UPLOAD_DESC" , "مسیر شاخه بارگزاری<br />در لینوکس باید مشابه این باشد /var/www/uploads<br />در ویندوز مشابه C:/Program Files/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI","لینک به شاخه بارگزاری شما");
define("_MI_ADSLIGHT_LINKUPLOAD_DE","این آدرس ریشه بارگزاری است <br />like http://www.yoursite.com/uploads");
define("_MI_ADSLIGHT_MAXFILEBYTES_T","حداکثر اندازه بر حسب بایت");
define("_MI_ADSLIGHT_MAXFILEBYTES_D","حداکثر اندازه تصویر بر حسب بایت <br />مثل 512000 for 500 KB");
define("_MI_ADSLIGHT_EDITOR","استفاده از ویرایشگر:");
define("_MI_ADSLIGHT_LIST_EDITORS","انتخاب ویرایشگر");
define("_MI_ADSLIGHT_LIGHTBOX","Lightbox effects");
define("_MI_ADSLIGHT_LIGHTBOX_DESC","استفاده از lightbox effects هنگام مشاهده عکس ها.");
define("_MI_ADSLIGHT_USE_COUNTRY" ,"استفاده از فیلد کشور");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC" ,"اگر انتخاب کنید گزینه'نه' فیلد کشور نشان داده نخواهد شد");
define("_MI_ADSLIGHT_SOLD_DAYS","مدت زمان قرار گرفتن در فهرست بعد از اضافه شدن علامت به فروش رفته ");
define("_MI_ADSLIGHT_SOLDINDAYS","روز");
define("_MI_ADSLIGHT_ALMOST","زمان موردنیاز نیاز به ارسال اخطاریه به تبلیغ در حال منقضی است.");
define("_MI_ADSLIGHT_ALMOST_DESC","روز");
define("_MI_ADSLIGHT_MAIN_CAT","اجازه به کاربران برای اضافه کردن آگهی در شاخه های اصلی");
define("_MI_ADSLIGHT_MAIN_CAT_DESC","یا فقط دسترسی اضافه کردن آگهی در زیر شاخه ها");
define("_MI_ADSLIGHT_ADMIN_EDITOR","ویرایشگر برای استفاده مدیر:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS","انتخاب ویرایشگر برای استفاده در بخش مدیریت.");
define("_MI_ADSLIGHT_CAT_DESC","توضیحات شاخه");
define("_MI_ADSLIGHT_DESC_CAT_DESC","اضافه کردن توضیحات برای هر شاخه بندی.");
define("_MI_ADSLIGHT_MUST_ADD_CAT","شما باید ابتدا یک شاخه اضافه کنید.");
define("_MI_ADSLIGHT_BNAME3","آگهی های جدید با تصویر");
define("_MI_ADSLIGHT_BNAME3_DESC","آگی های اخیر (با تصویر) بلاک");
define("_MI_ADSLIGHT_BNAME4","برترین آگهی ها (با تصویر)");
define("_MI_ADSLIGHT_BNAME4_DESC","آگهی های برتر (با تصویر) بلاک");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"استفاده از Captcha");
define("_AM_ADSLIGHT_TYPE_USURE","پوشش آگهی");
// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1","آگهی های شما");
define("_MI_ADSLIGHT_SMENU2","ارسال آگهی");
define("_MI_ADSLIGHT_SMENU3","جستجو"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01"," اگرشما پیشنهاد بهری دارید:<br /><br />- اصلاح<br />- ترجمه<br />- یک پیشنهاد<br />- گزارش مشکل <br />");
define("_MI_ADSLIGHT_SUPPORT02","به ما بپیوندید در پشتیبانی تالار گفتمان AdsLight ");
define("_MI_ADSLIGHT_SUPPORT03","> پشتیبانی تالار گفتمان AdsLight <");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE","نقشه فرانسه");
define("_MI_ADSLIGHT_MAPFRANCE_DESC","در منطقه شما");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU","اضافه کردن تبلیغ");
define("_MI_ADSLIGHT_ADDMENU_DESC","منو");

// version Adslight 1.0.2
// Active RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"Enable URL Rewrite");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"فعال کردن آدرس بازنویسی برای رتبه بندی بهتر.<br/>برای نصب rewrite, مطالعه فایل README.txt__متشکریم");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"فعال Snapshotدر صفحه اصلی ");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"فعال کردن تصویر thumbnail در صفحه خانگی<br/>اگر خاموش است آیکون <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> نشان می دهد وجود دارد یا ندارد عکس در آگهی.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"فعال کردن Snapshot در شاخه ها");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"فعال کردن نمایش تصویر thumbnail در شاخه ها<br/>اگر خاموش است آیکون<img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> نشان می دهد وجود دارد یا ندارد عکس در آگهی.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE","کد صفحه خانگی اضافی");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC","Put your adsense code or other here");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE","استفاده از کد های اضافی در صفحه اصلی");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC","محل کد اضافی بین آگهی ها<br />در صفحه اصلی و صفحه شاخه ها.<br /><br />Banners, Adsense code, etc. ...");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE","جایی که کد در آگهی نمایش داده خواهد شد");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC","Ex. If you choose 4 there will be 3 proposals before this code.<br />The code will be displayed in 4th position.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER","استفاده از کد زوپس بنر"); 
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC","اجازه می دهد به شما برای درج بنرهای زوپس بین proposals.<br />با انتخاب بله<br />NO insert code here");

// Version 1.0.5
// Code Adscence Catégories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE","Pub code on pages categories");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC","گوگل کد adsence و یا کد بنر:<br/>Format: عرض = 300 ارتفاع = 250");

// adslight_theme_set
define("_MI_ADSLIGHT_THEMESET","Choice of template set");

// Méta Description / keywords Categories
define("_MI_ADSLIGHT_CAT_META","Allow the seizure Meta description, Meta keywords categories?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","اگر شما این گزینه بله را انتخاب کنید,<br/> 
شما می توانید بنویسید کلمات کلیدی متا داده ها و توضیحات برای هر شاخه بندی <br/>( پیشنهاد برای رتبه بندی بهتر. )");

// Version 1.0.51
// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE","سفارشی کردن اطلاعات صفحه / اطلاع?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE","اگر شما 'بله'را انتخاب کنید  شما می توانید بنویسید.عنوان و متن اطلاعات صفحه /اطلاع");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE","عنوان صفحه اطلاعات / advice");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE","عنوان را در اینجا بنویسید (در صفحه اطلاعات نشان داده خواهد شد)/ advice");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE","متن اطلاعات صفحه / advice");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE","متن را در اینجا بنویسید (در صفحه اطلاعات نشان داده خواهد شد)/ advice");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET","انتخاب کارت از کشور شما");
define("_MI_ADSLIGHT_MAPSSET_DESC","اگر می خواهید برای کشور خود نقشه درست کنید.<br />داکیومنت را مطالعه کنید.تشکر");
define("_MI_ADSLIGHT_MAPSW_TITLE","عرض نقشه");
define("_MI_ADSLIGHT_MAPSH_TITLE","ارتفاع نقشه");


?>