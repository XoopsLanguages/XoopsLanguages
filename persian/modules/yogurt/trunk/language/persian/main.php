<?php
// $Id: main.php,v 1.40 2007/10/30 00:10:24 marcellobrandao Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
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
//Present in many files (videos pictures etc...)
// translated by irmtfan @ irxoops.org
define("_MD_YOGURT_DELETE","حذف");
define("_MD_YOGURT_EDITDESC","ویرایش شرح");
define("_MD_YOGURT_TOKENEXPIRED","کد امنیتی شما منقضی شده است<br />لطفا دوباره انجام دهید");
define("_MD_YOGURT_DESC_EDITED","شرح با موفقیت ویرایش شد");
define("_MD_YOGURT_CAPTION","نام ظاهری");
define("_MD_YOGURT_YOUCANUPLOAD","شما فقط میتوانید فایل های jpg را تا حد %s کیلو بایت بارگذاری کنید");
define("_MD_YOGURT_UPLOADPICTURE","بارگذاری تصویر");
define("_MD_YOGURT_NOCACHACA","ماژول بد بد...برای شما این عمل مجاز نیست<br />
متاسفانه ماژول در راهی که نباید عمل میکند. امیدوار باشید که با سعی مجدد دوباره درست عمل کند. ");//Funny general error message
define("_MD_YOGURT_PAGETITLE","%s - %s شبکه گروهی");
define("_MD_YOGURT_SUBMIT","ارسال");
define("_MD_YOGURT_VIDEOS","ویدیو ها");
define("_MD_YOGURT_SCRAPBOOK","یاداشت ها");
define("_MD_YOGURT_PHOTOS","تصاویر");
define("_MD_YOGURT_FRIENDS","دوستان");
define("_MD_YOGURT_TRIBES","قبیله ها");
define("_MD_YOGURT_NOTRIBESYET","هنوز قبیله های وجود ندارد");
define("_MD_YOGURT_MYTRIBES","قبیله های من");
define("_MD_YOGURT_ALLTRIBES","همه قبیله ها");
define("_MD_YOGURT_PROFILE","پروفایل");
define("_MD_YOGURT_HOME","صفحه اصلی");
define("_MD_YOGURT_CONFIGSTITLE","تنظیمات من");

##################################################### PICTURES #######################################################
//submit.php (for pictures submission
define("_MD_YOGURT_UPLOADED","بارگذاری با موفقیت انجام شد");

//delpicture.php
define("_MD_YOGURT_ASKCONFIRMDELETION","ایا اطمینان دارید که میخواهید این تصویر را حذف کنید؟");
define("_MD_YOGURT_CONFIRMDELETION","بله لطفا حذفش کن!");

//album.php
define("_MD_YOGURT_YOUHAVE","شما دارای %s تصویر در آلبوم خود هستید.");
define("_MD_YOGURT_YOUCANHAVE","شما حداکثر میتوانید %s تصویر داشته باشید.");
define("_MD_YOGURT_DELETED","تصویر با موفقیت حذف شد");
define("_MD_YOGURT_SUBMIT_PIC_TITLE","بارگذاری تصویر");
define("_MD_YOGURT_SELECT_PHOTO","انتخاب تصویر");
define("_MD_YOGURT_NOTHINGYET","هنوز هیچ تصویری در این آلبوم وجود ندارد");
define("_MD_YOGURT_AVATARCHANGE","این تصویر را آواتار جدید خود کنید");
define("_MD_YOGURT_PRIVATIZE","فقط شما میتوانید این تصویر را در آلبوم خود ببینید");
define("_MD_YOGURT_UNPRIVATIZE","هر کسی میتواند این تصویر را در آلبوم شما ببیند");
define("_MD_YOGURT_MYPHOTOS","تصاویر من");

//avatar.php
define("_MD_YOGURT_AVATAR_EDITED","آواتار شما عوض شد!");

//private.php
define("_MD_YOGURT_PRIVATIZED","از حالا به بعد فقط شما میتوانید این تصویر را در آلبوم خود ببینید");
define("_MD_YOGURT_UNPRIVATIZED","از حالا به بعد همه میتوانند این تصویر را در آلبوم شما ببینند");

########################################################## FRIENDS ###################################################
//friends.php
define("_MD_YOGURT_FRIENDSTITLE","دوستان %s");
define("_MD_YOGURT_NOFRIENDSYET","هنوز هیچ دوستی وجود ندارد");//also present in index.php
define("_MD_YOGURT_MYFRIENDS","دوستان من");
define("_MD_YOGURT_FRIENDSHIPCONFIGS","تنظیمات این رابطه دوستانه را تغییر بده.دوست خود را ارزیابی کنید.");

//class/yogurtfriendship.php
define("_MD_YOGURT_EDITFRIENDSHIP","رابطه دوستی شما با این عضو:");
define("_MD_YOGURT_FRIENDNAME","شناسه کاربری");
define("_MD_YOGURT_LEVEL","سطح دوستی:");
define("_MD_YOGURT_UNKNOWNACCEPTED","ملاقات حضوری پذیرفته نیست");
define("_MD_YOGURT_AQUAITANCE","سابقه آشنایی");//also present in index.php
define("_MD_YOGURT_FRIEND","دوست");//also present in index.php
define("_MD_YOGURT_BESTFRIEND","دوست صمیمی");//also present in index.php
define("_MD_YOGURT_FAN","طرفدار");//also present in index.php
define("_MD_YOGURT_SEXY","رابطه فعال");//also present in index.php
define("_MD_YOGURT_SEXYNO","نه");
define("_MD_YOGURT_SEXYYES","بله");
define("_MD_YOGURT_SEXYALOT","خیلی زیاد!");
define("_MD_YOGURT_TRUSTY","قابل اعتماد");
define("_MD_YOGURT_TRUSTYNO","نه");
define("_MD_YOGURT_TRUSTYYES","بله");
define("_MD_YOGURT_TRUSTYALOT","خیلی زیاد");
define("_MD_YOGURT_COOL","با حال");
define("_MD_YOGURT_COOLNO","نه");
define("_MD_YOGURT_COOLYES","بله");
define("_MD_YOGURT_COOLALOT","خیلی زیاد");
define("_MD_YOGURT_PHOTO","تصویر دوست");
define("_MD_YOGURT_UPDATEFRIEND","به روز کردن رابطه دوستی");

//editfriendship.php
define("_MD_YOGURT_FRIENDSHIPUPDATED","رابطه دوستی به روز شد");

//submitfriendpetition.php
define("_MD_YOGURT_PETITIONED","یک درخواست دوستی برای این عضو فرستاده شده است، صبر کنید تا او این رابطه را تایید کند تا بتوانید او را در فهرست دوستان خود ببینید.");
define("_MD_YOGURT_ALREADY_PETITIONED","شما قبلا درخواست دوستی با این فرد را فرستاده اید یا بالعکس او برای شما فرستاده است <br />، صبر کنید تا او این درخواست را تایید یا رد کند یا ببینید اگر او درخواست کرده شما باید در پروفایل خود او را تایید یا رد کنید.");

//makefriends.php
define("_MD_YOGURT_FRIENDMADE","به عنوان یک دوست اضافه شد!");

//delfriendship.php
define("_MD_YOGURT_FRIENDSHIPTERMINATED","رابطه دوستی خود با این فرد را قطع کردید");

############################################ VIDEOS ############################################################
//mainvideo.php
define("_MD_YOGURT_SETMAINVIDEO","از این لحظه به بعد این ویدیو در صفحه اول شما دیده خواهد شد.");

//seutubo.php
define("_MD_YOGURT_YOUTUBECODE","کد یوتیوب یا آدرس آن");
define("_MD_YOGURT_ADDVIDEO","اضافه کردن ویدیو");
define("_MD_YOGURT_ADDFAVORITEVIDEOS","اضافه کردن ویدیو های دلخواه");
define("_MD_YOGURT_ADDVIDEOSHELP","اگر میخواهید ویدیو خود را برای اشتراک بارگذاری کنید، آن را در سایت 
<a href=http://www.youtube.com>یوتیوب</a> و سپس آدرس آن را اینجا بگذارید "); //The name of the site will show after this
define("_MD_YOGURT_MYVIDEOS","ویدیو های من");
define("_MD_YOGURT_MAKEMAIN","این ویدیو را ویدیوی صفحه اصلی خود کنید");
define("_MD_YOGURT_NOVIDEOSYET","هنوز هیچ ویدیویی وجود ندارد");

//delvideo.php
define("_MD_YOGURT_ASKCONFIRMVIDEODELETION","آیا مطمانید که میخواهید این ویدیو را حذف کنید؟");
define("_MD_YOGURT_CONFIRMVIDEODELETION","بله");
define("_MD_YOGURT_VIDEODELETED","ویدیوی شما حذف شد");

//video_submited.php
define("_MD_YOGURT_VIDEOSAVED","ویدیوی شما ذخیره شد");

############################## TRIBES ########################################################
//class/yogurt_tribes.php
define("_MD_YOGURT_SUBMIT_TRIBE","ساخت یک قبیله جدید");
define("_MD_YOGURT_UPLOADTRIBE","ذخیره قبیله");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_IMAGE","تصویر قبیله");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_TITLE","عنوان");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_DESC","شرح");//also present in many ther tribes related
define("_MD_YOGURTCREATEYOURTRIBE","قبیله خود را بسازید!");//also present in many ther tribes related

//abandontribe.php
define("_MD_YOGURT_ASKCONFIRMABANDONTRIBE","آیا مطمانید که میخواهید از این قبیله بیرون بروید؟");
define("_MD_YOGURT_CONFIRMABANDON","بله لطفا مرا از این قبیله حذف کن");
define("_MD_YOGURT_TRIBEABANDONED","شما دیگر عضوی از این قبیله نیستید");

//becomemembertribe.php
define("_MD_YOGURT_YOUAREMEMBERNOW","حال شما عضوی از این انجمن هستید");
define("_MD_YOGURT_YOUAREMEMBERALREADY","شما همین الان عضو این قبیله هستید");

//delete_tribe.php
define("_MD_YOGURT_ASKCONFIRMTRIBEDELETION","آیا مطانید که میخواهید این قبیله را برای همیشه حذف کنید؟");
define("_MD_YOGURT_CONFIRMTRIBEDELETION","بله لطفا این قبیله را حذف کن");
define("_MD_YOGURT_TRIBEDELETED","قبیله حذف شد!");

//edit_tribe.php
define("_MD_YOGURT_MAINTAINOLDIMAGE","این تصویر را نگه دار");//also present in other tribes related
define("_MD_YOGURT_TRIBEEDITED","قبیله ویرایش شد");
define("_MD_YOGURT_EDIT_TRIBE","قبیله خود را ویرایش کنید");//also present in other tribes related
define("_MD_YOGURT_TRIBEOWNER","شما صاحب اصلی این قبیله هستید");//also present in other tribes related
define("_MD_YOGURT_MEMBERSDOFTRIBE","اعضای قبیله");//also present in other tribes related

//submit_tribe.php
define("_MD_YOGURT_TRIBE_CREATED","قبیله شما ساخته شد");

//kickfromtribe.php
define("_MD_YOGURT_CONFIRMKICK","بله او را بیرون بیانداز");
define("_MD_YOGURT_ASKCONFIRMKICKFROMTRIBE","آیا مطمانید که میخواهید این فرد را از قبیله بیرون کنید؟");
define("_MD_YOGURT_TRIBEKICKED","شما این فرد را از این قبیله بیرون کردید، ولی چه کسی میداند احتمالا با یک شناسه دیگر دوباره باز خواهد گشت!");

//Tribes.php
define("_MD_YOGURT_TRIBE_ABANDON","ترک این قبیله");
define("_MD_YOGURT_TRIBE_JOIN","به این قبیله ملحق شوید و به همه نشان دهید چه کسی هستید!");
define("_MD_YOGURT_TRIBE_SEARCH","جستجوی قبیله ها");
define("_MD_YOGURT_TRIBE_SEARCHKEYWORD","کلمات کلیدی");

######################################### SCRAPS #####################################################
//scrapbook.php
define('_MD_YOGURT_ENTERTEXTSCRAP',"متن یا کد های زوپس را وارد کنید");
define("_MD_YOGURT_SENDSCRAP","ارسال کردن یادداشت");
define("_MD_YOGURT_ANSWERSCRAP","پاسخ");//also present in configs.php
define("_MD_YOGURT_MYSCRAPBOOK","یادااشت های من");
define("_MD_YOGURT_CANCEL","لغو کردن");//also present in configs.php
define("_MD_YOGURT_SCRAPTIPS","نکته های یادداشت");
define("_MD_YOGURT_BOLD","درشت");
define("_MD_YOGURT_ITALIC","کج (ایتالیک)");
define("_MD_YOGURT_UNDERLINE","زیر خط دار");
define("_MD_YOGURT_NOSCRAPSYET","هنوز هیچ یادداشتی در این صفحه وجود ندارد");

//submit_scrap.php
define("_MD_YOGURT_SCRAP_SENT","با تشکر از مشارکت شما، یادداشت فرستاده شد");

//delete_scrap.php
define("_MD_YOGURT_ASKCONFIRMSCRAPDELETION","آیا اطمینان دارید که میخواهید این  یادداشت را حذف کنید؟");
define("_MD_YOGURT_CONFIRMSCRAPDELETION","بله لطفا این یادداشت را حذف کنید");
define("_MD_YOGURT_SCRAPDELETED","یادداشت حذف شد");

############################ CONFIGS ##############################################
//configs.php
define("_MD_YOGURT_CONFIGSEVERYONE","همه");
define("_MD_YOGURT_CONFIGSONLYEUSERS","فقط اعضای گروه یوزر");
define("_MD_YOGURT_CONFIGSONLYEFRIENDS","دوستان من");
define("_MD_YOGURT_CONFIGSONLYME","فقط من");
define("_MD_YOGURT_CONFIGSPICTURES","تصاویر شما را ببینند");      
define("_MD_YOGURT_CONFIGSVIDEOS","ویدیو های شما را ببینند"); 
define("_MD_YOGURT_CONFIGSTRIBES","قبیله های شما را ببینند"); 
define("_MD_YOGURT_CONFIGSSCRAPS","یادداشت های شما را ببینند"); 
define("_MD_YOGURT_CONFIGSSCRAPSSEND","برای شما یادداشت ارسال کنند");
define("_MD_YOGURT_CONFIGSFRIENDS","دوستان شما را ببینند");
define("_MD_YOGURT_CONFIGSPROFILECONTACT","ایمیل های شما را ببینند"); 
define("_MD_YOGURT_CONFIGSPROFILEGENERAL","اطلاعات شما را ببینند"); 
define("_MD_YOGURT_CONFIGSPROFILESTATS","آمار شما را ببینند");
define("_MD_YOGURT_WHOCAN","چه کسانی بتوانند:");

//submit_configs.php
define("_MD_YOGURT_CONFIGSSAVE","تنظیمات ذخیره شد!");

//class/yogurt_controler.php
define("_MD_YOGURT_NOPRIVILEGE","صاحب این پروفایل دسترسی هایی را برای دیدن آن قرار داده است<br />که بیشتر از چیزی است که شما الان دارید. <br />در نتیجه نمیتوانید آنها را ببینید. <br />یکی از دوستان او شوید اگر باز هم نتوانستید آن را ببینید پس فقط قابل دیدن برای خود آن شخص هستند <br />.");

###################################### OTHERS ##############################

//index.php
define("_MD_YOGURT_VISITORS","بازدید کننده ها (چه کسانی به تازگی پروفایل شما را دیده اند)");
define("_MD_YOGURT_USERDETAILS","جزییات کاربر");
define("_MD_YOGURT_USERCONTRIBUTIONS","مشارکت های کاربر");
define("_MD_YOGURT_FANS","طرفداران");
define("_MD_YOGURT_UNKNOWNREJECTING","من این فرد را نمیشناسم، اینها را وارد فهرست دوستان من نکن");
define("_MD_YOGURT_UNKNOWNACCEPTING","من این فرد را نمیشناسم، ولی در هر حال اینها را را وارد دوستان من بکن");
define("_MD_YOGURT_ASKINGFRIEND","آیا %sدوست شماست؟");
define("_MD_YOGURT_ASKBEFRIEND","آیا از این فرد میخواهید دوست شما باشد؟");
define("_MD_YOGURT_EDITPROFILE","ویرایش پروفایل خودتان");
define("_MD_YOGURT_SELECTAVATAR","تصاویر را در پروفایل خود بارگذاری کنید و یکی را به عنوان آواتار خود انتخاب کنید.");
define("_MD_YOGURT_SELECTMAINVIDEO","ویدیویی را به آلبوم ویدیو های خود اضافه کرده و سپس یکی را به عنوان ویدیوی اصلی خود انتخاب کنید");
define("_MD_YOGURT_NOAVATARYET","هنوز هیچ آواتاری وجود ندارد");
define("_MD_YOGURT_NOMAINVIDEOYET","هنوز هیچ ویدیوی اصلی وجود ندارد");
define("_MD_YOGURT_MYPROFILE","پروفایل من");
define("_MD_YOGURT_YOUHAVEXPETITIONS","شما %u درخواست برای ایجاد  رابطه دوستی دارید.");
define("_MD_YOGURT_CONTACTINFO","اطلاعات تماس");
define("_MD_YOGURT_SUSPENDUSER","کاربران معلق");
define("_MD_YOGURT_SUSPENDTIME","مقدار زمان معلق کردن بر حسب ثانیه");
define("_MD_YOGURT_UNSUSPEND","کاربران بیرون اورده شده از تعلیق");
define("_MD_YOGURT_SUSPENSIONADMIN","ابزار مدیریت تعلیق ها");

//suspend.php
define("_MD_YOGURT_SUSPENDED","این کاربر تا %s تعلیق میشود");
define("_MD_YOGURT_USERSUSPENDED","کاربر تعلیق شد");//als0 present in index.php

//unsuspend.php
define("_MD_YOGURT_USERUNSUSPENDED","کاربر از تعلیق بیرون اورده شد");

//searchmembers.php
define("_MD_YOGURT_SEARCH","جستجوی اعضا");
define("_MD_YOGURT_AVATAR","آواتار");
define("_MD_YOGURT_REALNAME","نام اصلی");
define("_MD_YOGURT_REGDATE","تاریخ عضویت");
define("_MD_YOGURT_EMAIL","ایمیل");
define("_MD_YOGURT_PM","پیام شخصی");
define("_MD_YOGURT_URL","آدرس وب سایت");
define("_MD_YOGURT_ADMIN","مدیریت");
define("_MD_YOGURT_PREVIOUS","قبلی");
define("_MD_YOGURT_NEXT","بعدی");
define("_MD_YOGURT_USERSFOUND","%s عضو پیدا شد");
define("_MD_YOGURT_TOTALUSERS","همه: %s عضو");
define("_MD_YOGURT_NOFOUND","هیچ عضوی پیدا نشد");
define("_MD_YOGURT_UNAME","شناسه کاربری");
define("_MD_YOGURT_ICQ","شماره ICQ");
define("_MD_YOGURT_AIM","AIM");
define("_MD_YOGURT_YIM","یاهو مسنجر");
define("_MD_YOGURT_MSNM","MSN  مسنجر");
define("_MD_YOGURT_LOCATION","محل زندگی");
define("_MD_YOGURT_OCCUPATION","شغل");
define("_MD_YOGURT_INTEREST","علاقه مندی ها");
define("_MD_YOGURT_URLC","آدرس وب سایت ها وبلاگ ها و غیره");
define("_MD_YOGURT_LASTLOGMORE","آخرین ورود بیش از <span style='color:#ff0000;'>X</span> روز پیش");
define("_MD_YOGURT_LASTLOGLESS","آخرین ورود کمتر از <span style='color:#ff0000;'>X</span> روز پیش");
define("_MD_YOGURT_REGMORE","تاریخ عضویت بیشتر از <span style='color:#ff0000;'>X</span> روز پیش");
define("_MD_YOGURT_REGLESS","تاریخ عضویت کمتر از <span style='color:#ff0000;'>X</span> روز پیش");
define("_MD_YOGURT_POSTSMORE","تعداد پست بیشتر از <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_POSTSLESS","تعداد پست کمتر از <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_SORT","مرتب شده بر اساس");
define("_MD_YOGURT_ORDER","جهت");
define("_MD_YOGURT_LASTLOGIN","آخرین ورود");
define("_MD_YOGURT_POSTS","تعداد پست");
define("_MD_YOGURT_ASC","صعودی");
define("_MD_YOGURT_DESC","نزولی");
define("_MD_YOGURT_LIMIT","تعداد اعضا در هر صفحه");
define("_MD_YOGURT_RESULTS","نتایج جستجو");

//26/10/2007
define("_MD_YOGURT_VIDEOSNOTENABLED","مدیر سایت این گزینه را غیر فعال کرده است");
define("_MD_YOGURT_FRIENDSNOTENABLED","مدیر سایت این گزینه را غیر فعال کرده است");
define("_MD_YOGURT_TRIBESNOTENABLED","مدیر سایت این گزینه را غیر فعال کرده است");
define("_MD_YOGURT_PICTURESNOTENABLED","مدیر سایت این گزینه را غیر فعال کرده است");
define("_MD_YOGURT_SCRAPSNOTENABLED","مدیر سایت این گزینه را غیر فعال کرده است");
?>