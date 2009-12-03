<?php
// $Id: modinfo.php,v 1.30 2007/11/26 22:38:47 marcellobrandao Exp $
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
// translated by irmtfan @ irxoops.org
define("_MI_YOG_NUMBPICT_TITLE","تعداد تصاویر");
define("_MI_YOG_NUMBPICT_DESC" ,"تعداد تصاویری که یک کاربر میتو.اند در صفحه اش داشته باشد");
define("_MI_YOG_ADMENU1","صفحه اصلی");
define("_MI_YOG_ADMENU2" ,"درباره");
define("_MI_YOG_SMNAME1" ,"ارسال");
define("_MI_YOG_THUMW_TITLE" , "عرض تصاویر بند انگشتی");
define("_MI_YOG_THUMBW_DESC" , "عرض تصاویر بند انگشتی به پیکسل<br />یعنی بزرگترین اندازه تصویر بند انگشتی در عرض خواهد بود <br />تمام خصوصیات تغییر میکنند");
define("_MI_YOG_THUMBH_TITLE" , "ارتفاع تصاویر بند انگشتی");
define("_MI_YOG_THUMBH_DESC" , "ارتفاع تصاویر بند انگشتی به پیکسل<br />یعنی بزرگترین اندازه تصویر بند انگشتی در ارتفاع خواهد بود <br />تمام خصوصیات تغییر میکنند");
define("_MI_YOG_RESIZEDW_TITLE" , "عرض تصویر تغییر اندازه داده شده");
define("_MI_YOG_RESIZEDW_DESC" , "عرض تصویر تغییر اندازه داده شده به پیکسل<br />یعنی بزرگترین اندازه تصویر بند انگشتی در عرض خواهد بود <br />تمام خصوصیات تغییر میکنند<br /> تصویر اصلی بزرگتر از این تصویر است <br />در نتیجه با تغییر اندازه قالب سایت شما حفظ شده و به هم نخواهد ریخت");
define("_MI_YOG_RESIZEDH_TITLE" , "ارتفاع تصویر تغییر اندازه داده شده");
define("_MI_YOG_RESIZEDH_DESC" , "ارتفاع تصویر تغییر اندازه داده شده به پیکسل<br />یعنی بزرگترین اندازه تصویر بند انگشتی در ارتفاع خواهد بود <br />تمام خصوصیات تغییر میکنند<br /> تصویر اصلی بزرگتر از این تصویر است <br />در نتیجه با تغییر اندازه قالب سایت شما حفظ شده و به هم نخواهد ریخت");
define("_MI_YOG_ORIGINALW_TITLE" , "حداکثر عرض مجاز برای تصویر اصلی");
define("_MI_YOG_ORIGINALW_DESC" , "حداکثر عرض مجاز برای تصویر اصلی به پیکسل<br />این به این معنی است که عرض تصویر بارگذاری شده نمیتواند بزرگتر از این مقدار باشد<br />وگرنه بارگذاری نخواهد شد");
define("_MI_YOG_ORIGINALH_TITLE" , "حداکثر ارتفاع مجاز برای تصویر اصلی");
define("_MI_YOG_ORIGINALH_DESC" , "حداکثر ارتفاع مجاز برای تصویر اصلی به پیکسل<br />این به این معنی است که ارتفاع تصویر بارگذاری شده نمیتواند بزرگتر از این مقدار باشد<br />وگرنه بارگذاری نخواهد شد");
define("_MI_YOG_PATHUPLOAD_TITLE" , "مسیر بارگذاری ها");
define("_MI_YOG_PATHUPLOAD_DESC" , "مسیر فیزیکی برای بارگذاری فایل ها<br />در لینوکس به این صورت است /var/www/uploads<br />در ویندوز به این صورت C:/Program Files/www");
define("_MI_YOG_LINKPATHUPLOAD_TITLE","لینک به مسیر بارگذاری فایل");
define("_MI_YOG_LINKPATHUPLOAD_DESC","ادرس مسیر بارگذاری روی نت <br />مانند http://www.yoursite.com/uploads");
define("_MI_YOG_MAXFILEBYTES_TITLE","حداکثر سایز به بایت");
define("_MI_YOG_MAXFILEBYTES_DESC","این حداکثر اندازه ای است که یک تصویر میتواند داشته باشد<br /> شما میتوانید با ضرب 1024 اندازه آن را به کیلو بایت و مگا بایت دراورید مثلا 512000 مساوی است با 500 کیلو بایت<br /> توجه کنید که حداکثر مقدار بارگذاری در  php.ini نوشته شده. الان سرور روی این عدد است: ".ini_get('post_max_size'));

define("_MI_YOG_PICTURE_NOTIFYTIT","آلبوم");
define("_MI_YOG_PICTURE_NOTIFYDSC","اگهی رسانی با توجه به آلبوم کاربر");
define("_MI_YOG_PICTURE_NEWPIC_NOTIFY","تصویر جدید");
define("_MI_YOG_PICTURE_NEWPIC_NOTIFYCAP","به من بگو کی این کاربر تصویر جدیدی ارسال کرد");
define("_MI_YOG_PICTURE_NEWPOST_NOTIFYDSC","هر وقت کاربر تصویر جدیدی ارسال کرد به من خبر بده");
define("_MI_YOG_PICTURE_NEWPIC_NOTIFYSBJ","{X_OWNER_NAME} تصویر جدیدی به این آلبوم ارسال کرده است");
//define("_MI_YOGURT_HOTTEST","Hottest Albums");
//define("_MI_YOGURT_HOTTEST_DESC","This block will show the hottest albums");
//define("_MI_YOGURT_HOTFRIENDS","Hot Friends");
//define("_MI_YOGURT_HOTFRIENDS_DESC","This block shows the users hot friends that have been added");
define("_MI_YOG_PICTURE_TEMPLATEINDEXDESC","این تمپلیت تصاویر مربوط به  یک کاربر را نشان میدهد");
define("_MI_YOG_PICTURE_TEMPLATEFRIENDSDESC","این تمپلیت تصاویر دوستان کاربر را نشان میدهد");
define("_MI_YOGURT_MYFRIENDS","دوستان من");
define("_MI_YOG_FRIENDSPERPAGE_TITLE" , "دوستان در هر صفحه");
define("_MI_YOG_FRIENDSPERPAGE_DESC" , "تعداد دوستانی را که در هر صفحه نمایش داده میشود بنویسید<br />این ها در صفحه دوستان من نوشته خواهد شد");
define("_MI_YOG_PICTURESPERPAGE_TITLE","تصاویر نشان داده شده در هر صفحه قبل از صفحه گذاری");

define("_MI_YOGURT_LAST","بلاک آخرین تصاویر");
define("_MI_YOGURT_LAST_DESC","آخرین تصاویری که به صورت مستقل از آلبوم ارسال شده اند");
define("_MI_YOG_DELETEPHYSICAL_TITLE","حذف فایل ها از پوشه بارگذاری به");
define("_MI_YOG_DELETEPHYSICAL_DESC","اگر بله را بزنید اسکریپیتی فعال شده و فایل ها را از پوشه بارگذداری حذف خواهد کرد و در دیتابیس نیز لینک های آنها را حذف میکند<br />در مورد این گزینه مواظب باشید اگر فایل ها را از پوشه خارج کنید و هنوز در دیتابیس باشند هنوز افراد میتوانند به آنها لینک  دهند<br />اگر آنها را حذف نکنید، فضای بیشتری را روی هارد دیسک سرور مصرف خواهد کرد.<br />این مورد را بر حسب نیاز خود تنظیم کنید.");

define("_MI_YOGURT_MYVIDEOS","ویدیو های من");
define("_MI_YOG_PICTURE_TEMPLATEALBUMDESC","الگو برای گالری تصاویر");
define("_MI_YOGURT_MYPICTURES","تصاویر من");
define("_MI_YOGURT_MODULEDESC","این ماژول شبکه گروهی از کاربران را مانند مای اسپیس و اورکات درست میکند");
define("_MI_YOG_TUBEW_TITLE","عرض ویدیو های یوتیوب");
define("_MI_YOG_TUBEW_DESC","عرض ویدیوی یوتیوب به پیکسل");
define("_MI_YOG_TUBEH_TITLE","ارتفاع ویدیو های یوتیوب");
define("_MI_YOG_TUBEH_DESC","ارتفاع ویدیو های یوتیوب به پیکسل");
define("_MI_YOG_PICTURE_TEMPLATESCRAPBOOKDESC","الگوی دفترچه یادداشت");
define("_MI_YOG_PICTURE_TEMPLATESEUTUBODESC","الگوی بخش ویدیو ها");
define("_MI_YOG_PICTURE_TEMPLATETRIBESDESC","الگوی قبیله ها");
define("_MI_YOGURT_MYSCRAPS","یادداشت های من");
define("_MI_YOGURT_MYTRIBES","قبیله های من");
define("_MI_YOG_TEMPLATENAVBARDESC","الگوی نوار پیمایش بالایی");

define("_MI_YOG_VIDEOSPERPAGE_TITLE","ویدیو ها در هر صفحه");
define("_MI_YOG_VIDEO_NOTIFYTIT","ویدیو ها");
define("_MI_YOG_VIDEO_NOTIFYDSC","آگهی های ویدیو ها");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFY","ویدیوی جدید");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFYCAP","هر وقت اینه کاربر ویدیوی جدیدی ارسال کرد مرا با خبر کن");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFYDSC","شرح ارسال ویدیوی جدید");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFYSBJ","{X_OWNER_NAME} ویدیوی جدیدی به پروفایلش فرستاده است");

define("_MI_YOG_SCRAP_NOTIFYTIT","یادداشت ها");
define("_MI_YOG_SCRAP_NOTIFYDSC","آگهی های یادداشت ها");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFY","یاددااشت جدید");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFYCAP","وقتی یادداشت جدیدی به این قسمت اضافه شد مرا با خبر کن");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFYDSC","شرح آگهی رسانی برای یادداشت جدید");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFYSBJ","{X_OWNER_NAME} یادداشت جدیدی به پروفایلش فرستاده است");

define("_MI_YOG_MAINTUBEW_TITLE","عرض ویدیوی اصلی");
define("_MI_YOG_MAINTUBEW_DESC","عرض ویدیوی اصلی که در صفحه اول ماژول نشان داده میشود");
define("_MI_YOG_MAINTUBEH_TITLE","ارتفاع ویدیوی اصلی");
define("_MI_YOG_MAINTUBEH_DESC","ارتفاع ویدیوی اصلی که در صفحه اول ماژول نشان داده میشود");

//24/09/2007
define("_MI_YOGURT_MYCONFIGS","تنظیمات من");
define("_MI_YOG_PICTURE_TEMPLATECONFIGSDESC","الگوی تنظیمات برای کاربران");
define("_MI_YOG_PICTURE_TEMPLATEFOOTERDESC","الگوی پا صفحه ماژول");
define("_MI_YOG_PICTURE_TEMPLATEEDITTRIBE","الگوی خصوصیات صفحه قبیله ها");
define("_MI_YOGURT_LICENSE",'ماژول یوگارت ساخته شده توسط مارسلو برندو تحت مجوز اختیاری.');

//19/10/2007
define("_MI_YOG_TRIBESPERPAGE_TITLE","قبیله ها در هر صفحه");
define("_MI_YOG_TRIBESPERPAGE_DESC","تعداد قبیله ها در صفحه قبل از اینکه صفحه گذاری اعمال شود");
define("_MI_YOG_PICTURE_TEMPLATESEARCHRESULTDESC","این الگو نتایج یک جستجو را برای اعضا نشان میدهد");
define("_MI_YOG_PICTURE_TEMPLATETRIBEDESC","این الگو یک قبیله و اعضایش را نشان میدهد");

//22/10/2007
define("_MI_YOGURT_MYPROFILE","پروفایل من");
define("_MI_YOGURT_SEARCH","جستجوی اعضا");
define("_MI_YOG_PICTURE_TEMPLATESEARCHRESULTSDESC","الگوی نتایج جستجو");
define("_MI_YOG_PICTURE_TEMPLATESEARCHFORMDESC","الگوی فرم جستجو");

//26/10/2007
define("_MI_YOG_ENABLEPICT_TITLE","فعال کردن بخش تصاویر");
define("_MI_YOG_ENABLEPICT_DESC","بخش تصاویر را برای کاربران فعال میکند، گالری تصاویر را فعال خواهد کرد");
define("_MI_YOG_ENABLEFRIENDS_TITLE","قعال کردن بخش دوستان");
define("_MI_YOG_ENABLEFRIENDS_DESC","نبخش دوستان را برای گاربران فعال میکند، آجندای دوستان را فعال خواهد کرد");
define("_MI_YOG_ENABLEVIDEOS_TITLE","فعال کردن بخش ویدیو ها");
define("_MI_YOG_ENABLEVIDEOS_DESC","بخش ویدیو را برای کاربران فعال میکند، گالری ویدیو را فعال خواهد کرد");
define("_MI_YOG_ENABLESCRAPS_TITLE","فعال کردن بخش یادداشت");
define("_MI_YOG_ENABLESCRAPS_DESC","بخش یادداشت ها را فعال میکند. بخشی را فعال میکند که کاربران بتوانند برای هم یاد داشت های عمومی بفرستند. این گزینه مانند دیوار در فیس بوک است");
define("_MI_YOG_ENABLETRIBES_TITLE","فعال کردن بخش قبیله ها");
define("_MI_YOG_ENABLETRIBES_DESC","بخش قبیله ها را برای کاربران فعال خواهد کرد، کاربران قادر خواهند بود قبیله بسازند قبیله ها گروهی از اعضا هستند که علاقه مشترکی دارند");
define("_MI_YOG_SCRAPSPERPAGE_TITLE","تعداد یادداشت ها در هر صفحه");
define("_MI_YOG_SCRAPSPERPAGE_DESC","تعداد یادداشت در هر صفحه قبل از اینکه صفحه گذاری انجام شود");

//25/11/2007
define("_MI_YOGURT_FRIENDS","دوستان من");
define("_MI_YOGURT_FRIENDS_DESC","این بلاک دوستان یک نفر را نشان خواهد داد");

?>