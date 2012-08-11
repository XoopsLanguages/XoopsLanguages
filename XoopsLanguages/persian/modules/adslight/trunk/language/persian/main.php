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


define("_ADSLIGHT_ADDON","Addon");
define("_ADSLIGHT_ANNONCES","آگهی های تبلیعاتی شاخه");
define("_ADSLIGHT_LOGOLINK","ماژول رایگان زوپس AdsLight (آگهی تبلیغات)");
define("_ADSLIGHT_MAIN","صفحه اصلی");
define("_ADSLIGHT_ADDFROM","آگهی و نیازمندیها");
define("_ADSLIGHT_NEWTOD","آگهی های جدید  اضافه شده در این شاخه امروز");
define("_ADSLIGHT_NEWTRED","آگهی های جدید اضافه شده در سه روز گذشه در این شاخه");
define("_ADSLIGHT_NEWWEEK","آگهی های جدید اضافه شده در طی این هفته در این شاخه");
define("_ADSLIGHT_INTRO","<b>شما می توانید آگهی های خود را به صورت مجانی اضافه کنید<br />برای این کار بر روی شاخه ای که میخواهید کلیک کنید,<br />شما میتوانید ببینیدو اضافه کنید آگهی و نیازمندیها در این شاخه'لینک</b>");
define("_ADSLIGHT_PRICE","قیمت");
define("_ADSLIGHT_DATE","تاریخ");
define("_ADSLIGHT_TITLE","عنوان");
define("_ADSLIGHT_CAT","شاخه");
define("_ADSLIGHT_THE","The");
define("_ADSLIGHT_LASTADD","آخرین آگهی و نیازمندیهای قرار گرفته در سایت");
define("_ADSLIGHT_PREV","آگهی های قبلی");
define("_ADSLIGHT_NEXT","آگهی بعدی");
define("_ADSLIGHT_THEREIS","موجود هست");
define("_ADSLIGHT_INTHISCAT","آگهی های طبقه بندی شده در این شاخه");
define("_ADSLIGHT_AVAILAB","زیر شاخه موجود هست:");
define("_ADSLIGHT_ADMINCADRE","پنل مدیریت");
define("_ADSLIGHT_WAIT","آگهی در انتظار تائید");
define("_ADSLIGHT_NO_CLA","آگهی برای در انتظار تائید نیست");
define("_ADSLIGHT_SEEIT","مشاهده آگهی های معلق");
define("_ADSLIGHT_LOCAL","موقعیت :");
define("_ADSLIGHT_LOCAL2","موقعیت");
define("_ADSLIGHT_ANNFROM","آگهی های دیگر از");
define("_ADSLIGHT_ADDED","اضافه شده");
define("_ADSLIGHT_GORUB","برو به شاخه ");
define("_ADSLIGHT_DATE2","این آگهی و نیازمندیها افزوده شد در تاریخ");
define("_ADSLIGHT_SUPPRANN","آگهی شما حذف شود");
define("_ADSLIGHT_MODIFANN","آگهی شما اصلاح شود");
define("_ADSLIGHT_PHOTO","تصویر");
define("_ADSLIGHT_VIEW","مشاهده");
define("_ADSLIGHT_CONTACT","تماس");
define("_ADSLIGHT_BYMAIL2","پست الکترونیک");
define("_ADSLIGHT_TYPE_USURE","پوشش آگهی");
define("_ADSLIGHT_STOP2","فهرست دوره برای آگهی");
define("_ADSLIGHT_STOP3","به پایان رسید, حذف شد");

define("_ADSLIGHT_VU2","این");
define("_ADSLIGHT_OTHER","اگر شمامی خواهید یک آگهی دیگر قرار دهید ");
define("_ADSLIGHT_THANK","با تشکر از شما برای استفاده از خدمات ما آگهی طبقه بندی شده.");
define("_ADSLIGHT_TEAM","گروه");
define("_ADSLIGHT_ACTUALY","موجود است");
define("_ADSLIGHT_ADVERTISEMENTS","آگهی فعال");
	//define("_ADSLIGHT_DISPO","disponible jusqu'au");
define("_ADSLIGHT_MODADMIN","تغییر این آگهی و نیازمندیها (مدیر)");
define("_ADSLIGHT_AND","and");
define("_ADSLIGHT_WAIT3","نیازمندیها آگهی (های) در حال انتظار برای تایید");
define("_ADSLIGHT_CREATBY","نوشته شده توسط");
define("_ADSLIGHT_FOR","برای");
define("_ADSLIGHT_OF","از");
define("_ADSLIGHT_VIEW2","مشاهده");
define("_ADSLIGHT_VIEWANN2","نیازمندیها آگهی خود را مشاهده کنید");
define("_ADSLIGHT_ACCESADMIN","مدیریت آگهی های من");
define("_ADSLIGHT_NOANNINCAT","هیچ آگهی در این گروه وجود ندارد!");
define("_ADSLIGHT_INCAT","در");
define("_ADSLIGHT_CAT2","شاخه");
	
   
// addlisting.php //
define("_ADSLIGHT_DESC","توضیحات");
define("_ADSLIGHT_ADDANNONCE2","افزودن آگهی و نیازمندیها در این شاخه");
define("_ADSLIGHT_ADDANNONCE3","افزودن آگهی و نیازمندیها");
define("_ADSLIGHT_ANNMODERATE","آگهی شما در نوبت انتظار برای تائید قرار گرفته است, will run for");
define("_ADSLIGHT_NOBIZ","تبلیغات تجاری مجاز نیست");
define("_ADSLIGHT_REDIRECT_BIZ","مشاهده نرخ تجاری ما");
define("_ADSLIGHT_ANNNOMODERATE","آگهی و نیازمندیها شما فورا شروع خواهد شد و اجرا خواهد شد برای ");
define("_ADSLIGHT_FORMEMBERS2","فقط کاربران ساین میتوانند آگهی ارسال کنند <br />لطفا ثبت نام کنید یا وارد شوید اگر شما قبلا در ثبت نام کرده اید.");
define("_ADSLIGHT_OR","یا");
define("_ADSLIGHT_DAY","روز");
define("_ADSLIGHT_CAT3","شاخه :");
define("_ADSLIGHT_TITLE2","عنوان :");
define("_ADSLIGHT_TYPE","نوع :");
define("_ADSLIGHT_NOTYPE","هیچ نوع");
define("_ADSLIGHT_CLASSIFIED_AD","آگهی و نیازمندیها :");
define("_ADSLIGHT_CHARMAX","(حداکثر 255 کاراکتر)");
define("_ADSLIGHT_IMG","اضافه کردن تصویر :");
define("_ADSLIGHT_IMG2","اضافه کردن تصویر دوم :");
define("_ADSLIGHT_IMG3","اضافه کردن تصویر سوم :");
define("_ADSLIGHT_PRICE2","قیمت :");
define("_ADSLIGHT_EMAIL","پست الکترونیک :");
define("_ADSLIGHT_TEL","تلفن :");
define("_ADSLIGHT_TOWN","شهر :");
define("_ADSLIGHT_COUNTRY","کشور :");
define("_ADSLIGHT_VALIDATE","اعتبار");
define("_ADSLIGHT_SELECTYPE","انتخاب نوع آگهی و نیازمندیها");
define("_ADSLIGHT_SELECTCAT","انتخاب یک شاخه");
define("_ADSLIGHT_SELECTYPOTHER","از نوع دیگر");
define("_ADSLIGHT_SELECTCATOTHER","شاخه دیگر");
define("_ADSLIGHT_RETURN","برگشت");
define("_ADSLIGHT_FILES","فایلها با این فرمت");
define("_ADSLIGHT_FILESTOP","ارسال امکانپذیر نیست. ارسال متوقف شده است");
define("_ADSLIGHT_YIMG","تصویر شما");
define("_ADSLIGHT_TOBIG","خیلی بزرگ است.<p> استفاده از تابع <b>صفحه قبلی</b> بازگشت به فرم اضافه کردن فایل");
define("_ADSLIGHT_ADSADDED","تبلیغات شما اضافه شد.");
define("_ADSLIGHT_PRINT","نسخه قابل چاپ این آگهی و نیازمندیها");
define("_ADSLIGHT_FRIENDSEND","ارسال این آگهی به دوستان");
define("_ADSLIGHT_IMGPISP","عکس در دسترس است");
define("_ADSLIGHT_VALIDERORMSG","اشتباهات که در جلوگیری از ذخیره شدن این آگهی وجود دارد!");
define("_ADSLIGHT_VALIDTITLE","عنوان مورد نیاز است.");
define("_ADSLIGHT_VALIDTYPE","نوع مورد نیاز است.");
define("_ADSLIGHT_VALIDCAT","شاخه مورد نیاز است.");
define("_ADSLIGHT_VALIDANN","توضیحات مورد نیاز است.");
define("_ADSLIGHT_VALIDTOWN","شهر مورد نیاز است.");
define("_ADSLIGHT_VALIDEMAIL","پست الکترونیک مورد نیاز است.");
define("_ADSLIGHT_VALIDSUBMITTER","نام مورد نیاز است.");
define("_ADSLIGHT_VALIDMSG","برای ذخیره آگهی لطفا این خطار را اصلاح کنید");
	


// display-image.php //
define("_ADSLIGHT_CLOSEF","بستن این پنجره");
	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN","ین تبلیغات از بخش شاخه بندی آگهی در سایت ");
define("_ADSLIGHT_SENDTO","<b>ارسال این آگهی به دوستان</b><br><br>شما میتوانید ارسال کنید آگهی شماره ");
define("_ADSLIGHT_FRIEND","به یک دوست :");
define("_ADSLIGHT_NAME","نام شما :");
define("_ADSLIGHT_MAIL","پست الکترونیک شما :");
define("_ADSLIGHT_NAMEFR","اسم دوست شما :");
define("_ADSLIGHT_MAILFR","پست الکترونیک دوست شما :");
define("_ADSLIGHT_SENDFR","ارسال");
define("_ADSLIGHT_ANNSEND","آگهی و نیازمندیها انتخاب شده ارسال شد");
define("_ADSLIGHT_SUBJET","یک آگهی جالب از");
define("_ADSLIGHT_HELLO","سلام");
define("_ADSLIGHT_MESSAGE","فکر میکند این آگهی ممکن است برای شما جالب باشد و این پیام را برای شما ارسال کرده است.");
define("_ADSLIGHT_INTERESS","تبلیغات و نیازمندیها دیگر دیده می شود در ");
define("_ADSLIGHT_TEL2","تلفن :");
define("_ADSLIGHT_BYMAIL","پست الکترونیک :");
define("_ADSLIGHT_DISPO","منقضی می شود در تاریخ");
define("_ADSLIGHT_NOMAIL","ایمیل کاربران عضو نمایش داده نمی شود ، برای تماس با آنها بوسیله پست الکترونیک از طریق سایت ما ،لطفا استفاده کنید از لینک پست الکترونیک در همان اگهی. ");

// modify.php //
define("_ADSLIGHT_OUI","بله");
define("_ADSLIGHT_NON","خیر");
define("_ADSLIGHT_SURDELANN","توجه : شما مطمئنید هستید که این آگهی حذف شود");
define("_RETURNANN","بازگشت به فهرست شاخه بندی آگهی");
define("_ADSLIGHT_ANNDEL","نیازمندیها آگهی انتخاب حذف شده است");
define("_ADSLIGHT_ANNMOD2","نیازمندیها آگهی انتخاب شده اصلاح شد");
define("_ADSLIGHT_NOMODIMG","آگهی و نیازمندیها شما شامل عکس<br />(تصویر را نمیتوان تغییر داد)");
define("_ADSLIGHT_DU","اضافه شده در تاریخ");   
define("_ADSLIGHT_MODIFBEFORE","تغییرات در این آگهی و نیازمندیها باید توسط مدیر سایت تایید شده و در صف انتظار قرار داده شد");
define("_ADSLIGHT_SENDBY","ارسال شده توسط :");
define("_ADSLIGHT_NUMANNN","نیازمندیها آگهی شماره :");
define("_ADSLIGHT_NEWPICT","تصویر جدید :");
define("_ADSLIGHT_ACTUALPICT","تصویر فعلی :");
define("_ADSLIGHT_DELPICT","حذف این تصویر");
   
// contact.php //

define("_ADSLIGHT_CONTACTAUTOR","تماس با نویسنده این آگهی و نیازمندیها");
define("_ADSLIGHT_TEXTAUTO","این پیام به صورت خودکار سه فیلد اول را ارسال میکند, اسم شما, پست الکترونیک شما, و شماره تلفن شما, نیازی نیست شما مجدد این اطلاعات را در پیام خود وارد کنید.");
define("_ADSLIGHT_YOURNAME","اسم شما :");
define("_ADSLIGHT_YOUREMAIL","پست الکترونیک شما :");
define("_ADSLIGHT_YOURPHONE","تلفن شما :");
define("_ADSLIGHT_YOURMESSAGE","متن پیام شما :");
define("_ADSLIGHT_VALIDMESS","متن پیام مورد نیاز است.");
define("_ADSLIGHT_MESSEND","پیام شما ارسال شده است...");
define("_ADSLIGHT_CLASSIFIED","آگهی و نیازمندیها ");
define("_ADSLIGHT_FROM","ارسال شده توسط ");
	
	//contact form ip
define("_ADSLIGHT_YOUR_IP","آی پی شما هست ");
define("_ADSLIGHT_IP_LOGGED"," and has been logged! Action will be taken on any abuse on this system.");

// message //
define("_ADSLIGHT_CONTACTAFTERANN","پاسخ به آگهی شما ");
define("_ADSLIGHT_MESSFROM","پیام از");
define("_ADSLIGHT_FROMANNOF","از تبلیغات طبقه بندی شده در تاریخ");
define("_ADSLIGHT_REMINDANN","شما باید پاسخ دهید به تبلیغ خود در ");
define("_ADSLIGHT_STARTMESS","در زیر پاسخ به آگهی شما است ");
define("_ADSLIGHT_ENDMESS","!!!  لطفا این پست الکترونیک را reply  نکنید, به فرستنده ارسال نمی شود. اگر میخواهید به فرستنده پاسخ دهید, از اطلاعات بالا استفاده کنید.  !!!");
define("_ADSLIGHT_CANJOINT","شما میتوانید پاسخ دهید به");
define("_ADSLIGHT_TO","در");
define("_ADSLIGHT_ORAT","یا در");
define("_ADSLIGHT_NOMAIL2","ایمیل کاربران عضو نمایش داده نمی شود ، برای تماس با آنها بوسیله پست الکترونیک از طریق سایت ما ،لطفا استفاده کنید از لینک پست الکترونیک در همان اگهی., شما میتوانید پاسخ دهید به این آگهی با استفاده از آدرس زیر. ");
define("_ADSLIGHT_MESSAGE_END","پایان پیام.");
define("_ADSLIGHT_SECURE_SEND","این پیغام با استفاده از فرم تماس امن فرستاده شد ، فرستنده آدرس پست الکترونیک شما را نمی داند.");
// message end //
define("_ADSLIGHT_HOW_LONG","چه مدت خواهید  آگهی نشان داده شود.");
define("_ADSLIGHT_WILL_LAST","مدت زمان فعال بودن آگهی(روز)");
	
//for search on index page
define("_ADSLIGHT_SEARCHRESULTS","نتیجه جستجوی آگهی و نیازمندی ها");
define("_ADSLIGHT_SEARCH_LISTINGS","جستجو در آگهی ها : ");
define("_ADSLIGHT_ALL_WORDS","تمام کلمات استفاده شده");
define("_ADSLIGHT_ANY_WORDS","هر کلمه ای");
define("_ADSLIGHT_EXACT_MATCH","جواب دقیق");
define("_ADSLIGHT_ONLYPIX","فقط نمایش<br /> آگهی های دارای تصویر");
define("_ADSLIGHT_SEARCH","جستجو در آگهی ها");
define("_ADSLIGHT_REQUIRED","* ضروری ");
define("_ADSLIGHT_MY_ADS","تمام آگهی ها از ");
define("_ADSLIGHT_VIEW_MY_ADS","مشاهده تمام آگهی ها از ");
define("_ADSLIGHT_COMMENTS_HEAD","<h3>نظرات در مورد این فروشنده</h3>");
define("_ADSLIGHT_PREMIUM_DAY","<b> روز, اگر شما آن را تغییر ندهید.</b> ");
define("_ADSLIGHT_PREMIUM_LONG_HEAD","<b>آگهی و نیازمندیها شما فورا شروع خواهد شد.</b> ");
define("_ADSLIGHT_PREMIUM_MEMBER","<b>از آنجا که شما عضو ویژه هستید.شما می توانید انتخاب کنید مدت زمان آگهی خود را.<br /><br />این آخرین بار خواهد بود </b>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD","<b>آگهی شما در صف انتظار تائید قرار گرفت</b>");

// ADDED FOR RATINGS
define("_ADSLIGHT_TOPRATED","دارای امتیاز بالا");
define("_ADSLIGHT_RATINGC","رتبه: ");
define("_ADSLIGHT_ONEVOTE","1 رای");
define("_ADSLIGHT_NUMVOTES","%s رای ها");
define("_ADSLIGHT_RATETHIS","امتیاز به این کاربر");
define("_ADSLIGHT_VOTEAPPRE","رای شما محترم می باشد.");
define("_ADSLIGHT_THANKURATE","با تشکر از شما برای شرکت در این نظر سنجی %s.");
define("_ADSLIGHT_VOTEFROMYOU","ورود از کاربران همچون شما برای کمک به بازدیدکنندگان دیگر تا انتخاب مناسبی داشته باشند.");
define("_ADSLIGHT_VOTEONCE","لطفا برای هر مورد بیشتر از یکبار رای ندهید ");
define("_ADSLIGHT_RATINGSCALE","مقیاس از 1 تا 10 ،1 یعنی ضعیف و 10 یعنی قوی و کاربردی.");
define("_ADSLIGHT_BEOBJECTIVE","Please be objective, if everyone receives a 1 or a 10, the ratings aren't very useful.");
define("_ADSLIGHT_DONOTVOTE","به فایل خودتان رای ندهید");
define("_ADSLIGHT_RATEIT","ارسال امتیاز!");
define("_ADSLIGHT_RATING","رتبه");
define("_ADSLIGHT_VOTE","رای");
define("_ADSLIGHT_NORATING","رتبه ای انتخاب نشده است");
define("_ADSLIGHT_CANTVOTEOWN","شما نمیتوانید به ارسالی خود رای دهید <br />همه رای ها ثبت و بازدید می شود.");
define("_ADSLIGHT_VOTEONCE2","رای برای مورد انتخابی فقط یک بار.<br />All همه رای ها ثبت و بازدید می شود.");
define("_ADSLIGHT_TOTALVOTES","رای های آگهی و نیازمندیها (کل رای ها: %s)");
define("_ADSLIGHT_USERTOTALVOTES","رای ها کاربران عضو(کل رای ها: %s)");
define("_ADSLIGHT_ANONTOTALVOTES","رای های کاربران مهمان (کل رای ها: %s)");
define("_ADSLIGHT_USERAVG","میانگین امتیاز کاربری");
define("_ADSLIGHT_TOTALRATE","کل رای ها");
define("_ADSLIGHT_NOREGVOTES","No Registered User Votes");
define("_ADSLIGHT_NOUNREGVOTES","No Unregistered User Votes");
define("_ADSLIGHT_VOTEDELETED","اطلاعات رای پاک شده");
define("_ADSLIGHT_USER_RATING","امتیاز کاربری: ");
define("_ADSLIGHT_RATETHISUSER","به این کاربررای دهید");
define("_ADSLIGHT_THANKURATEUSER","با تشکر از شما برای رای دادن به این کاربر در %s.");
define("_ADSLIGHT_RATETHISITEM","رتبه این مورد");
define("_ADSLIGHT_THANKURATEITEM","با تشکر از شما برای رای دادن به این مورد در %s.");
define("_ADSLIGHT_MY_PRICE","قیمت");
define("_ADSLIGHT_MY_DATE","تاریخ");
define("_ADSLIGHT_MY_TITLE","عنوان");
define("_ADSLIGHT_MY_LOCAL2","موقعیت");
define("_ADSLIGHT_MY_VIEW","مشاهده");
define("_ADSLIGHT_SORTBY","ترتیب با:");
define("_ADSLIGHT_CURSORTEDBY","آگهی در حال حاظر مرتب شده است بر اساس: %s");
define("_ADSLIGHT_POPULARITYLTOM","محبوبیت (کمترین به بیشترین بازدید)");
define("_ADSLIGHT_POPULARITYMTOL","محبوبیت (بیشترین به کمترین بازدید)");
define("_ADSLIGHT_TITLEATOZ","عنوان (A to Z)");
define("_ADSLIGHT_TITLEZTOA","عنوان (Z to A)");
define("_ADSLIGHT_DATEOLD","تاریخ (اول قدیمی ها)");
define("_ADSLIGHT_DATENEW","تاریخ (اول جدیدترین ها)");
define("_ADSLIGHT_RATINGLTOH","رتبه (کمترین امتیاز به بیشترین امتیاز)");
define("_ADSLIGHT_RATINGHTOL","رتبه (بیشترین امتیاز به کمترین امتیاز)");
define("_ADSLIGHT_PRICELTOH","قیمت (پایین ترین به بالاترین)");
define("_ADSLIGHT_PRICEHTOL","قیمت (بالاترین به پائین ترین)");
define("_ADSLIGHT_POPULARITY","محبوبیت");
define("_ADSLIGHT_ACTUALPICT2","Current second image :");
define("_ADSLIGHT_ACTUALPICT3","Current third image :");
define("_ADSLIGHT_NEWPICT2","New second image :");
define("_ADSLIGHT_NEWPICT3","New third image :");
define("_ADSLIGHT_SELECT_CONTACTBY","انتخاب گزینه");
define("_ADSLIGHT_CONTACTBY","تماس با من با استفاده از :");
define("_ADSLIGHT_CONTACT_BY_EMAIL","پست الکترونیک");
define("_ADSLIGHT_CONTACT_BY_PM","پیام خصوصی(PM)");
define("_ADSLIGHT_CONTACT_BY_BOTH","هر دو پست الکترونیک و PM");
define("_ADSLIGHT_CONTACT_BY_PHONE","فقط به وسیله تلفن");
define("_ADSLIGHT_ORBY"," با استفاده از ");
define("_ADSLIGHT_CONTACTBYMP"," پیام خصوصی(PM) ");
define("_ADSLIGHT_PREMYOUHAVE","شما دارید %s تصویر در البوم خود.");
define("_ADSLIGHT_YOUHAVE","شما دارید %s تصویر در البوم تصاویر.");
define("_ADSLIGHT_YOUCANHAVE","به عنوان عضو ویژه شما میتوانید %s تصویر در آلبوم خود داشته باشید.");
define("_ADSLIGHT_BMCANHAVE","به عنوان عضو عادی شما میتوانید %s تصویر در آلبوم خود داشته باشید");
define("_ADSLIGHT_UPGRADE_NOW","ارتقا به عضو ویژه");
define("_ADSLIGHT_DELETE","حذف");
define("_ADSLIGHT_EDITDESC","ویرایش توضیحات");
define("_ADSLIGHT_TOKENEXPIRED","Your Security Token has Expired<br /> مجدد سعی کنید");
define("_ADSLIGHT_DESC_EDITED","توضیحات تصویر شما با موفقیت ویرایش شد");
define("_ADSLIGHT_DELETED","تصویر با موفقیت حذف شد");
define("_ADSLIGHT_SUBMIT_PIC_TITLE","ارسال عکس به آلبوم شما");
define("_ADSLIGHT_SELECT_PHOTO","انتخاب تصویر");
define("_ADSLIGHT_CAPTION","(Caption)عنوان");
define("_ADSLIGHT_UPLOADPICTURE","بارگزاری تصویر");
define("_ADSLIGHT_YOUCANUPLOAD","شما فقط میتوانید فایل با فرمت jpg's با حجم %s KBytes بارگزاری کنید.");
define("_ADSLIGHT_ALBUMTITLE","%s's آلبوم");
define("_ADSLIGHT_WELCOME","به آلبوم خود خوش آمدید");
define("_ADSLIGHT_NOTHINGYET","هنوز در این آلبوم تصویری وجود ندارد");
define("_ADSLIGHT_NOCACHACA","متاسفانه هیچ cachaca برای شما ");
define("_ADSLIGHT_ADD_PHOTOS","اضافه کرد تصویر");
define("_ADSLIGHT_SHOWCASE","گالری");
define("_ADSLIGHT_EDIT_CAPTION","ویرایش عنوان( caption)");
define("_ADSLIGHT_EDIT","ویرایش");
define("_ADSLIGHT_SUBMITTER","نام ارسال کننده :");
define("_ADSLIGHT_ADD_LISTING","اضافه کردن آگهی");
define("_ADSLIGHT_SUBMIT","ارسال");
define("_ADSLIGHT_PRICETYPE","نوع قیمت :");
define("_ADSLIGHT_ADD_PHOTO_NOW","آیا شما میخواهید تصویر اضافه شود .");
define("_ADSLIGHT_ACTIVE","فعال");
define("_ADSLIGHT_INACTIVE","غیر فعال");
define("_ADSLIGHT_SOLD","رزرو شده");
define("_ADSLIGHT_STATUS","وضعیت");
define("_ADSLIGHT_REPLIES","پاسخها");
define("_ADSLIGHT_EXPIRES_ON","تاریخ انقضاء");
define("_ADSLIGHT_ADDED_ON","اضافه شده در");
define("_ADSLIGHT_REPLY_MESSAGE","پاسخ دادن");
define("_ADSLIGHT_REPLIED_ON","Replied on : ");
define("_ADSLIGHT_VIEWNOW","مشاهده");
define("_ADSLIGHT_REPLY_TITLE","پاسخها برای آگهی ");
define("_ADSLIGHT_ALL_USER_LISTINGS","تمام آگهی های ارسال شده توسط ");
define("_ADSLIGHT_REPLY","پاسخ -");
define("_ADSLIGHT_PAGES","صفحه -");
define("_ADSLIGHT_REALNAME","اسم");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS","مشاهده آگهی های شما");
define("_ADSLIGHT_REPLIED_BY","پاسخ از طرف : ");
define("_ADSLIGHT_DELETE_REPLY","حذف این پاسخ");
define("_ADSLIGHT_NO_REPLIES","پاسخی وجود ندارد");
define("_ADSLIGHT_THANKS","با تشکر از شما برای ما با استفاده از تبلیغات و نیازمندیها");
define("_ADSLIGHT_WEBMASTER","وبمستر");
define("_ADSLIGHT_YOUR_AD","آگهی شما");
define("_ADSLIGHT_AT","در");
define("_ADSLIGHT_VEDIT_AD","مشاهده و یا ویرایش آگهی شما در اینجا");
define("_ADSLIGHT_ALMOST","آگهی شما در حال انقضا می باشد");
define("_ADSLIGHT_EXPIRED","منقضی شده و حذف شده است");
define("_ADSLIGHT_YOUR_AD_ON","آگهی شما در");
define("_ADSLIGHT_VU","آگهی شما مشاهده شده است");
define("_ADSLIGHT_TIMES","زمان.");
define("_ADSLIGHT_STOP","آگهی و نیازمندیها شما منقضی شده است");
define("_ADSLIGHT_SOON","بزودی منقضی می شود");
define("_ADSLIGHT_MUSTLOGIN","برای تماس با صاحب این آگهی <br /> یا ارسال نظر شما باید وارد سیستم شوید.");
define("_ADSLIGHT_VIEW_AD","نمایش آگهی شما در");
define("_ADSLIGHT_MORE_PHOTOS","مشاهده موارد بیشتری عکس");
define("_ADSLIGHT_CANCEL","انصراف");

//Added for 1.2 RC1
define("_ADSLIGHT_ADDED_TO_CAT","یک آگهی جدید به شاخه اضافه شده است");
define("_ADSLIGHT_RECIEVING_NOTIF","شما عضو هستید برای دریافت اطلاعیه از این نوع.");
define("_ADSLIGHT_ERROR_NOTIF","اگر این خطا است یا شما مایل به دریافت اطلاعیه بیشتر نیستید، لطفا  به بخش آگاهی رسانی اشتراک خود مراجعه نمائید از طریق لینک زیر :");
define("_ADSLIGHT_FOLLOW_LINK","در اینجاهست یک لینک به آگهی جدید");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW","شما می توانید آگهی کامل را در لینک زیر ببینید");
define("_ADSLIGHT_LISTING_NUMBER","تعداد آگهی :");

define("_ADSLIGHT_NOREPLY","!!!  به این پیام پاسخ ندهید, شما جوابی دریافت نمی کنید.  !!!");
define("_ADSLIGHT_CAPTCHA","کد امنیتی :");

define("_ADSLIGHT_NEW_WAITING_SUBJECT","آگهی  جدید! در انتظار تایید ");
define("_ADSLIGHT_NEW_WAITING","یک آگهی جدید در انتظار تعدیل کردن موجود است.");
define("_ADSLIGHT_PLEASE_CHECK","لطفا با کلیک بر روی آدرس زیر این آگهی را برسی کنید.");
define("_ADSLIGHT_ADMIN","مدیر");
define("_ADSLIGHT_NEWAD","در زیر آگهی جدید قرار دارد.");
define("_ADSLIGHT_NEED_TO_LOGIN","شما باید با نام کاربری خود وارد سایت شوید");

define("_ADSLIGHT_PROFILE","پروفایل ");

////AJOUTER PAR ILUC////
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1","آگهی شما");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2","ارسال");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3","جستجو");

//viewads.php
define("_ADSLIGHT_ALERTEABUS","گزارش تخلف");
define("_ADSLIGHT_CONTACT_SUBMITTER","تماس با");
define("_ADSLIGHT_SENDFRIENDS","معرفی این آگهی به دوستان");

//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO","<b>گزارش این آگهی:</b><br/><br/>آگهی شماره. ");
define("_ADSLIGHT_REPORTANNSEND","با تشکر از راهنمایی شما.<br/>آگهی فقط به مدیر گزارش شود.");
define("_ADSLIGHT_REPORTSUBJET","[هشدار] آگهی نامناسب ");
define("_ADSLIGHT_REPORTMESSAGE","معتقد است که این اطلاعیه غیر قانونی است و می خواست شما بدانید.");

//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL","برای اضافه کردن آگهی<br />لطفا در سایت ثبت نام کنید ");
define("_ADSLIGHT_ADD_LISTING_SUB","ثبت نام در سایت");
define("_ADSLIGHT_ADD_LISTING_BULLOK","شما می توانید آگهی اضافه کنید<br />برای ارسال تبلیغات : ");
define("_ADSLIGHT_ADD_LISTING_SUBOK","کلیک کنید");

//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1","ویرایش / حذف تبلیغات خود ، و همچنین گزارش به عنوان [رزرو شده] ...");
define("_ADSLIGHT_ADD_TITLEMENU2","ارسال رایگان آگهی ،  شما می توانید انتخاب کنید ازفهرست موضوعات");
define("_ADSLIGHT_ADD_TITLEMENU4","راهنمایی های خوب برای نوشتن آگهی.");
define("_ADSLIGHT_ADD_TITLEMENU5","جستجوی Cyble یا جستجو در منطقه شما.");
define("_ADSLIGHT_ADD_TITLEMENU6","خواندن و ارسال pm");
define("_ADSLIGHT_ADD_TITLEMENU7","شما یک پیام جدید دارید.");
define("_ADSLIGHT_ADD_TITLEMENU8","شما باید برای خواندن پیامهاهایتان وارد سایت شوید");
define("_ADSLIGHT_ADD_TITLEMENU9","شما باید برای دیدن مشخصات خود وارد سایت شوید.");
define("_ADSLIGHT_ADD_TITLEMENU10","مشاهده و یا ویرایش مشخصات خود در اینجا.");

//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS","شما می توانید اضافه کنید یک یا چند<br />آگهی  تبلیغاتی در این شاخه<br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK","برای اضافه کردن یک <br />آگهی  تبلیغاتی در این شاخه<br />شما باید درسایت عضو باشید");

// Reserved
define("_ADSLIGHT_RESERVED","رزرو شده");

// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE","قوانین سایت برای نوشتن یک آگهی مناسب<br />پیشنهاد ما برای نوشتن یک آگهی خوب<br />بنویسید یک آگهی مناسب برای سلیقه های مختلف");
define("_ADSLIGHT_TIPSWRITE_TITLE","نکاتی که برای نوشتن یک اگهی باید رعایت کنید");

define("_ADSLIGHT_TIPSWRITE_TEXT","<b>1. Une ou des photos</b><br><br>
Le premier contact qu&rsquo;auront les visiteurs avec votre annonce, va &ecirc;tre une ou des photos de l'objet que vous allez vendre.<br>Il est vivement conseill&eacute; de mettre une ou des photos de votre objet.<br>
Une petite annonce avec photo est 7 fois plus consult&eacute;e qu&rsquo;une annonce sans photo ! <br>Elle donne aussi une premi&egrave;re id&eacute;e de l&rsquo;&eacute;tat de votre objet.<br><br>
<br>- Un objet propre est toujours plus attrayante.<br>- Soignez la qualit&eacute; de la photo. (Pas trop sombre)<br>- Cadrez l'objet de sorte qu&rsquo;il soit visible. <br>- &Eacute;vitez les photos &lsquo;floues&rsquo;<br><br><b>2. Claire et d&eacute;taill&eacute;e</b><br><br>
Apr&egrave;s avoir soigneusement pr&eacute;par&eacute; les photos de l'objet que vous allez vendre. <br>Il vous faut maintenant r&eacute;diger l&rsquo;annonce.<br><br>
- &Eacute;vitez le langage &laquo; SMS &raquo;, il est imp&eacute;ratif que l&rsquo;annonce soit facilement lisible.<br>
Sans cela, vous perdez des chances de vendre votre pi&egrave;ce d&eacute;tach&eacute;e.<br><br>
- Le titre en majuscules ainsi que toute l&rsquo;annonce &eacute;crite en majuscules, <br>est vivement d&eacute;conseiller.<br><br>
- Les superlatifs sont &agrave; &eacute;viter.<br><br>
- &Eacute;crivez tous les d&eacute;tails et faites en sorte que les visiteurs puissent au mieux identifier votre pi&egrave;ce d&eacute;tach&eacute;e. Sans cela ils vous contacteront par mail ou t&eacute;l&eacute;phone pour vous demander. (Perte de temps pour vous et l&rsquo;acheteur) <br><br>
- &Eacute;vitez d&rsquo;&eacute;crire un roman, cela doit rester une annonce.<br><br>
- Le visiteur doit pouvoir obtenir un maximum d&rsquo;infos lors de la lecture de votre annonce, et cela rapidement. <br><br>
Plus une annonce est claire et pr&eacute;cise, plus elle a de chance d'aboutir &agrave; une transaction.<br><br>
Et n'oubliez pas, une bonne affaire, <br>c'est lorsque l&rsquo;acheteur et le vendeur y trouvent leur bonheur!");

//version 1.053
// maps.php
define("_ADSLIGHT_MAPS_TITLE","جستجو بر اساس منطقه");
define("_ADSLIGHT_MAPS_TEXT","انتخاب منطقه بر روی نقشه<br />برای دیدن آگهی های تبلیغاتی در منطقه است.");

//viewads.php
define("_ADSLIGHT_NOCLAS","در حال حاضر تبلیغات وجود ندارد<br />در این شاخه ...");

//version 1.063
// viawcats.php

define("_ADSLIGHT_ADD_LISTING_NOTADDSINTHISCAT","هیچ آگهی در این مجموعه وجود ندارد.<br />");
define("_ADSLIGHT_ADD_LISTING_NOTADDSSUBMIT","اضافه کردن تبلیغ");

//version 1.064
define("_ADSLIGHT_CATPLUS","<br/>&#187;&nbsp;بیشتر ...");
?>