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

define("_AM_ADSLIGHT_CONF","پیکربندی آگهی ها");
define("_AM_ADSLIGHT_ADDON","پلاگین ها");
define("_AM_ADSLIGHT_ANNDEL","تبلیغات انتخاب شده حذف شد");
define("_AM_ADSLIGHT_ADDCATPRINC","اضافه کردن یک شاخه");
define("_AM_ADSLIGHT_CATNAME","نام شاخه :");
define("_AM_ADSLIGHT_ADDSUBCAT","حذف یک شاخه");
define("_AM_ADSLIGHT_DELSUBCAT","Supprimer une cat&eacute;gorie");
define("_AM_ADSLIGHT_MODIFSUBCAT","ویرایش شاخه");
define("_AM_ADSLIGHT_ADD","Add");
define("_AM_ADSLIGHT_CATDEL","شاخه مورد نظر حذف شد");
define("_AM_ADSLIGHT_OUI","بله");
define("_AM_ADSLIGHT_NON","خیر");
define("_AM_ADSLIGHT_SURDELCAT","هشدار: آیا مطمئن هستید که می خواهید حذف کنیداین شاخه، و همه ی زیر شاخه و تبلیغات آن.");
define("_AM_ADSLIGHT_IN","به عنوان زیر شاخه : ");
define("_AM_ADSLIGHT_MODIF","اصلاح کردن");
define("_AM_ADSLIGHT_MODIFCAT","اصلاح شاخه");
define("_AM_ADSLIGHT_CAT","شاخه :");
define("_AM_ADSLIGHT_SUBCAT","زیر شاخه :");
define("_AM_ADSLIGHT_CONFMYA","پیکربندی آگهی های");
define("_AM_ADSLIGHT_CATADD","شاخه اضافه شد");
define("_AM_ADSLIGHT_SUBCATADD","زیر شاخه اظافه شد");
define("_AM_ADSLIGHT_ANNMOD","آگهی ها تغییر یافته ");
define("_AM_ADSLIGHT_NOANNVAL","در حال حاضر تبلیغات برای تائید وجود ندارد.");
define("_AM_ADSLIGHT_NOMODACTIV","Moderation فعال نیست, آگهی برای تائید نیست");
define("_AM_ADSLIGHT_MODANN","ویرایش یک آگهی");
define("_AM_ADSLIGHT_ALLMODANN","(همه تبلیغات می تواند توسط مدیر اصلاح شوند.)");
define("_AM_ADSLIGHT_HELLO","سلام ");
define("_AM_ADSLIGHT_ANNVALID","آگهی مورد تایید قرار گرفته");
define("_AM_ADSLIGHT_DEL","حذف");
define("_AM_ADSLIGHT_SAVMOD","ذخیره تغییرات شما");
define("_AM_ADSLIGHT_MODTYPE","تغییر نوع آگهی");
define("_AM_ADSLIGHT_ANNACCEPT","تبلیغات شما مورد تایید قرار گرفته");
define("_AM_ADSLIGHT_CONSULTTO","لطفا تماس بگیرید :");
define("_AM_ADSLIGHT_THANK","با تشکر از شما");
define("_AM_ADSLIGHT_TEAMOF","گروه");
define("_AM_ADSLIGHT_RETURN","بازگشت");
define("_AM_ADSLIGHT_MODSUBCAT","تغییر نام زیرشاخه");
define("_AM_ADSLIGHT_MODCAT","تغییر نام شاخه اصلی");
define("_AM_ADSLIGHT_GO","برو");
define("_AM_ADSLIGHT_SENDBY","اضافه شده توسط :");
define("_AM_ADSLIGHT_EMAIL","پست الکترونیک :");
define("_AM_ADSLIGHT_TEL","تلفن :");
define("_AM_ADSLIGHT_TOWN","شهر :");
define("_AM_ADSLIGHT_COUNTRY","کشور :");
define("_AM_ADSLIGHT_TITLE2","عنوان :");
define("_AM_ADSLIGHT_TYPE","نوع :");
define("_AM_ADSLIGHT_PRICE2","قیمت :");
define("_AM_ADSLIGHT_CAT2","شاخه :");
define("_AM_ADSLIGHT_DESCRIPTION","گوگل کد adsence و یا کد بنر :<br/>Format: width = 300 height = 250");
define("_AM_ADSLIGHT_THEREIS","موجود است ");
define("_AM_ADSLIGHT_WAIT","آگهی  در انتظار برای تائید");
define("_AM_ADSLIGHT_ADDTYPE","اضافه کردن نوع");
define("_AM_ADSLIGHT_ERRORTYPE","خطا : نوع");
define("_AM_ADSLIGHT_EXIST","موجود است!");
define("_AM_ADSLIGHT_ERRORCAT","خطا : شاخه");
define("_AM_ADSLIGHT_ERRORSUBCAT","خطا : زیر شاخه");
define("_AM_ADSLIGHT_TYPEMOD","نوع آگهی اصلاح شد");
define("_AM_ADSLIGHT_TYPEDEL","نوع آگهی حذف شد");
define("_AM_ADSLIGHT_ADDTYPE2","نوع تبلیغات اضافه شد");
define("_AM_ADSLIGHT_ACCESMYANN","تبلیغات");
define("_AM_ADSLIGHT_IMGCAT","تصویر :");
define("_AM_ADSLIGHT_REPIMGCAT","شاخه تصاویر :");
define("_AM_ADSLIGHT_GESTCAT","تعمیر و نگهداری شاخه ها");
define("_AM_ADSLIGHT_ADDPRICE","اضافه کردن نوع قیمت");
define("_AM_ADSLIGHT_MODPRICE","اصلاح نوع قیمت");
define("_AM_ADSLIGHT_ADDPRICE2","نوع قیمت اضافه شده");
define("_AM_ADSLIGHT_PRICEMOD","نوع قیمت اصلاح شده");
define("_AM_ADSLIGHT_PRICEDEL","نوع قیمت حذف شده");
define("_AM_ADSLIGHT_ORDRE","مرتب کردن :");
define("_AM_ADSLIGHT_ORDRECLASS","ترتیب شاخه :");
define("_AM_ADSLIGHT_ORDREALPHA","مرتب کردن بر اساس حروف الفبا");
define("_AM_ADSLIGHT_ORDREPERSO","Personalised Order");
define("_AM_ADSLIGHT_BIGCAT","شاخه اصلی");
define("_AM_ADSLIGHT_HELP1","<b>برای اضافه کردن شاخه :</b> با کلیک بر روی تصویر <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"اضافه کردن شاخه\"> alongside the category you want to add the category under.<p><b>برای تغییر یا حذف شاخه :</b> با کلیک بر روی نام شاخه");
define("_AM_ADSLIGHT_HELP2","<B>Category Order :</B> integer in brackets corresponds to the order within the superior category or of the principal category. Negative integers can be used.: -1");
	
// fichier pref.php //
define("_AM_ADSLIGHT_CONFSAVE","تنظیمات ذخیره شده");
define("_AM_ADSLIGHT_ANNOCANPOST","کاربر مهمان می توانند آگهی ارسال کند :");
define("_AM_ADSLIGHT_PERPAGE","آگهی در صفحه :");
define("_AM_ADSLIGHT_MONEY","نماد واحد پول :");
define("_AM_ADSLIGHT_NUMNEW","تعداد آگهی های جدید :");
define("_AM_ADSLIGHT_MODERAT","مدیریت تبلیغات :");
define("_CAL_MAXIIMGS","حداکثر اندازه تصاویر :");
define("_AM_ADSLIGHT_TIMEANN","مدت آگهی :");
define("_AM_ADSLIGHT_INOCTET","بایت");
define("_AM_ADSLIGHT_INDAYS","روز");
define("_AM_ADSLIGHT_TYPEBLOC","نوع بلاک :");
define("_AM_ADSLIGHT_ANNRAND","آگهی تصادفی");
define("_AM_ADSLIGHT_LASTTEN","آخرین 10 آگهی");
define("_AM_ADSLIGHT_NEWTIME","آگهی جدید از :");

define("_AM_ADSLIGHT_DISPLPRICE","نمایش قیمت :");
define("_AM_ADSLIGHT_DISPLPRICE2","نمایش قیمت :");
define("_AM_ADSLIGHT_INTHISCAT","در این شاخه");
define("_AM_ADSLIGHT_DISPLSUBCAT","نمایش زیر شاخه ها :");
define("_AM_ADSLIGHT_ONHOME","در صفحه اصلی مازول");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","تعداد زیر شاخه برای نمایش :");
define("_AM_ADSLIGHT_IF","if");
define("_AM_ADSLIGHT_ISAT","is at");
define("_AM_ADSLIGHT_VIEWNEWCLASS","نمایش آگهی :");

define("_AM_ADSLIGHT_PERMADDNG",'نمیتوان اضافه کرد %s دسترسی %s برای گروه %s');
define("_AM_ADSLIGHT_PERMADDOK",'اضافه شد %s دسترسی %s برای گروه %s');
define("_AM_ADSLIGHT_PERMRESETNG",'Could not reset group permission for module %s');
define("_AM_ADSLIGHT_PERMADDNGP",'همه آیتمهای والد باید انتخاب شود.');
define("_AM_ADSLIGHT_EXPIRE",'تعداد روز نمایش آگهی.');
define("_AM_ADSLIGHT_DBUPDATED",'پایگاه داده ها بروز شد');

define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","پست الکترونیک");
define("_AM_ADSLIGHT_CONTACT_BY_PM","پیام خصوصی(PM)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","هر دو E-mail و PM");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","فقط با تلفن");
define("_AM_ADSLIGHT_CONTACTBY","تماس به وسله :");
define("_AM_ADSLIGHT_PREMIUM","آگهی ویژه :");

define("_AM_ADSLIGHT_OK","تائید");
define("_AM_ADSLIGHT_CATSMOD","شاخه اصلاح شد");
define("_AM_ADSLIGHT_ADDED_ON"," اضافه شده در تاریخ ");
define("_AM_ADSLIGHT_NUMANN","شماره آگهی :");

define("_AM_ADSLIGHT_ACTIVE","فعال");
define("_AM_ADSLIGHT_INACTIVE","غیرفعال");
define("_AM_ADSLIGHT_SOLD","رزرو شده");
define("_AM_ADSLIGHT_STATUS","وضعیت");
define("_AM_ADSLIGHT_UPDATECOMPLETE","بروزرسانی کامل شد");
define("_AM_ADSLIGHT_UPDATEMODULE","<b>بروزرسانی ماژول</b>");
define("_AM_ADSLIGHT_UPGRADEFAILED","خطا در بروزرسانی");
define("_AM_ADSLIGHT_UPGRADEFAILED0","بروزرسانی");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","خطا در دسترسی");
define("_AM_ADSLIGHT_THANKS","با تشکر از شما برای استفاده از تبلیغات و نیازمندیها");
define("_AM_ADSLIGHT_WEBMASTER","مدیر");
define("_AM_ADSLIGHT_YOUR_AD","آگهی شما");
define("_AM_ADSLIGHT_AT","at");
define("_AM_ADSLIGHT_VEDIT_AD","شما می توانید ببینید و ویرایش آگهی خود را در اینجا");
define("_AM_ADSLIGHT_YOUR_AD_ON","آگهی شما در");
define("_AM_ADSLIGHT_APPROVED","مورد تایید قرار گرفته.");
define("_AM_ADSLIGHT_EXPIRED","تمام شده است و حذف شده است.");
define("_AM_ADSLIGHT_CHECKER",'چک کردن دسترسی شاخه');
define("_AM_ADSLIGHT_DIRPERMS",'تغییر دسترسی شاخه به قابل نوشتن  ! => ');

define("_AM_ADSLIGHT_PHOTO1","تعداد تصویر :");
define("_AM_ADSLIGHT_SUBMITTER","ارسال شده توسط ");
define("_AM_ADSLIGHT_NBR_PHOTO","تصاویر");
define("_AM_ADSLIGHT_TITLE","عنوان");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","تاریخ اضافه شدن");
define("_AM_ADSLIGHT_DESC","توضیحات");

define("_AM_ADSLIGHT_FREECAT","This will be a free category");
define("_AM_ADSLIGHT_MODERATE_CAT","مدیریت این شاخه");
define("_AM_ADSLIGHT_VISIT_LINK","شما می توانید آگهی کامل در لینک زیر ببینید:");
define("_AM_ADSLIGHT_LISTING_NUMBER","شماره آگهی ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW","شما می توانید آگهی کامل در لینک زیر ببینید");
define("_AM_ADSLIGHT_NOREPLY","!!!  به این ایمیل پاسخ ندهید. شما پاسخی دریافت نمی کنید.  !!!");

define("_AM_ADSLIGHT_ADDED_TO_CAT","یک لیت جدید به شاخه اضافه شد ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","شما عضو هستید برای دریافت اطلاعیه از این نوع.");
define("_AM_ADSLIGHT_ERROR_NOTIF","اگر این ایمیل اشتباه ارسال شده  یا شما مایل به دریافت اطلاعیه های بیشتر نیستید ، لطفا به بخش اطلاع رسانی اشتراک خود  مراجعه کنید . لینک زیر :");
define("_AM_ADSLIGHT_FOLLOW_LINK","اینجا یک لینک به آگهی جدید است");
define("_AM_ADSLIGHT_CAPTCHA","کد مهرمانه :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","مدیریت زیر شاخه این شاخه");
define("_AM_ADSLIGHT_DOCUMENTATION","مستندات");
define("_AM_ADSLIGHT_FEATURES","حصوصیات");
define("_AM_ADSLIGHT_CLONE","چگومه تکثیر");
define("_AM_ADSLIGHT_INCOMPLETE","ناتمام");

// Added by iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE","اضافه کردن یک پوشش جدید");
define("_AM_ADSLIGHT_MODUSURE","تغییر نوع پوشش آگهی()");
define("_AM_ADSLIGHT_ADDUSURE2","پوشش جدید اضافه شد");
define("_AM_ADSLIGHT_USUREMOD","تغییرات ذخیره شد");
define("_AM_ADSLIGHT_USUREDEL","نوع پوشش حذف شد");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","نویسنده");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Change log");
define("_AM_ADSLIGHT_ABOUT_CREDITS","اعتبار");
define("_AM_ADSLIGHT_ABOUT_LICENSE","مجوز");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","اطلاعات ماژول");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","وب سایت پشتیبانی");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","تاریخ انتشار");
define("_AM_ADSLIGHT_ABOUT_STATUS","وضعیت");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","افراد شرکت کننده در توسعه ماژول.");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","اسم مستعار");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","وب سایت");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","نسخه");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","بررسی اجمالی");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Can add" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "چک کردن شاخه هایی که اجازه دسترسی داده شده است" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "انتخاب گروه مجاز برای ارسال تبلیغات." ) ;
define("_AM_ADSLIGHT_GROUPPERM","دسترسی برای ارسال");
define("_AM_ADSLIGHT_SUBMITFORM","Permission to file a listing");
define("_AM_ADSLIGHT_SUBMITFORM_DESC","انتخاب, که می تواند نمایش دهد آگهی");
define("_AM_ADSLIGHT_VIEWFORM","دسترسی برای مشاهده آگهی");
define("_AM_ADSLIGHT_VIEWFORM_DESC","Sگروهی را انتخاب کنید که می تواند آگهی را ببینید");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC","انتخاب, چه کسی می تواند مشاهده کند رزومه");
define("_AM_ADSLIGHT_SUPPORT","پشتیبانی از این برنامه");
define("_AM_ADSLIGHT_OP","Read my review");
define("_AM_ADSLIGHT_PREMIUM_DESC","انتخاب گروهی که میتوانند انتخاب کنند مدت زمان نمایش تبلیغات");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK","شما از آخرین نسخه این ماژول استفاده می کنید.");
define("_AM_ADSLIGHT_RELEASEISNOTOK","شما از آخرین نسخه ماژول استفاده نمیکنید، نسخه جدید در دسترس است.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD","دانلود.");
define("_AM_ADSLIGHT_NBR_PHOTO","عکس (ها)");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>توضیحات متا :</b><br/>برای بهینه سازی بهتر,</b>اضافه کنیداینجا توصیف دقیقی از طبقه خود را. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>کلمات کلیدی:</b><br/>برای سئو بهتر,</b>اضافه کنیداینجا توضیحات دقیق شاخه را.<br/><b><font color=\"#ff3300\">کلمات جدا شده توسط کاما</font></b>. ( english, espagne, france,...)");

//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK","فایل xml برای کارت وجود ندارد ، در عیر این صورت کارت انتخاب شده در تنظیمات ، مطابقت ندارد.");
define("_AM_ADSLIGHT_XMLUPGRADE","بروزرسانی xml");

//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE","فهرست فروم پشتیبانی.");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS","پیوند");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG","زبان");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC","توضیحات");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE","(پست الکترونیک)ترجمه");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE","آمار");
define("_AM_ADSLIGHT_STAT_NUM1","تبلیغات");
define("_AM_ADSLIGHT_STAT_NUM2"," شاخه");
define("_AM_ADSLIGHT_STAT_NUM3","کاربر");
define("_AM_ADSLIGHT_STAT_NUM4","نظر");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE","گزینه ها");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL"," ارسال نامه");
define("_AM_ADSLIGHT_USERMENU_COMMENT"," نظرها");
define("_AM_ADSLIGHT_USERMENU_BAMMIER"," بنر");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE","شاخه ها");
define("_AM_ADSLIGHT_CATMENU_CATEGORY"," اضافه کردن شاخه");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT"," مدیریت شاخه ها");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE","تبلیغات");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS"," تائید اعتبار آگهی(تائید آگهی های در انتظار برای تائید)  ");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS"," مشاهده آگهی ");
define("_AM_ADSLIGHT_ADS_MODIFADS"," ویرایش آگهی");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE","در حال دانلود");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS"," پلاگین");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS"," نقشه");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE","توسعه");
define("_AM_ADSLIGHT_DEVLLP_HACK"," پیشنهاد یک هک");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE"," ارسال ترجمه");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION"," پیشنهاد اصلاح");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH"," ارسال نقشه (.Swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM"," تالار گفتگو");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE"," اهداء کردن");
define("_AM_ADSLIGHT_DONATE","استفاده از AdsLight رایگان است و باقی خواهد ماند.<br />همچنین شما می توانید کمک مالی کنید <br />اگر می خواهید از من  حمایت کنید.<br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE","انجمن پشتیبانی AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL","http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=56");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1","http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=56/#googtrans/auto/en");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM","برو به تالار گفتمان");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2","http://www.i-luc.fr/adslight/modules/profile/register.php#googtrans/auto/en");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT","عضویت");


////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE","اخبار AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE","آگهی معتبر");
define("_AM_ADSLIGHT_NOANNVALADS","در حال حاضر تبلیغات وجود ندارد ");
define("_AM_ADSLIGHT_USURE","wear");

// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO",'<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal -روشی آسان و مطمئن برای پرداخت آنلاین.">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
');

?>