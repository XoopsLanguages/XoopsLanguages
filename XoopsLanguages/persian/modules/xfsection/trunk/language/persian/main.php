<?php
// $Id: main.php,v 1.2 2005/06/20 15:03:23 ohwada Exp $

// 2004/03/27 K.OHWADA
// add submit modify

// 2004/01/29 herve
// multi language
//   add _WFS_ERROR_IMAGE

// 2003/11/21 K.OHWADA
// view and edit for pure html file
//   add _WFS_DISBR, _WFS_ENAAMP
// article.php
//  _WFS_ARTCLE_MORE

//%%%%%%
define("_WFS_PRINTER","صفحه آماده برای چاپ");
define("_WFS_COMMENTS","نظر");
define("_WFS_PREVPAGE","صفحه قبل");
define("_WFS_NEXTPAGE","صفحه بعد");
define("_WFS_RETURNTOP","<< برگشت به بالا");

//%%%%%%

define("_WFS_TOP","بالا");
define("_WFS_POSTERC","فرستنده:");
define("_WFS_DATEC","تاریخ:");
define("_WFS_EDITNOTALLOWED","شما اجازه ویرایش این نظر را ندارید");
define("_WFS_ANONNOTALLOWED","کاربران ناشناس مجاز به فرستادن پست نیستند");
define("_WFS_THANKSFORPOST","با تشکر از مطلبی که ارسال کردید"); //submission of news comments
define("_WFS_DELNOTALLOWED","شما اجازه پاک کردن این نظر را ندارید");
define("_WFS_AREUSUREDEL","آیا مطمان هستید که میخواهید این نظر و زیر شاخه هایش را پاک کنید؟");
define("_WFS_YES","بله");
define("_WFS_NO","نه");
define("_PL_COMMENTSDEL","نظر هتا با موفقیت پاک شد");

//%%%%%%

define("_WFS_TITLE","عنوان");
define("_WFS_CATEGORY","بخش");
define("_WFS_HTMLISFINE","HTML is permitted, but double-check those URLs and HTML tags!");
define("_WFS_ALLOWEDHTML","مجاز به استفاده از html:");
define("_WFS_DISABLESMILEY","غیر فعال کردن شکلک");
define("_WFS_DISABLEHTML","غیر فعال کردن html");
define("_WFS_POST","پست");
define("_WFS_PREVIEW","پیش نمایش");
define("_WFS_GO","ارسال");

//%%%%%%
define("_WFS_ARTICLES","مقاله ها");
define("_WFS_VIEWS"," %s بار خوانده شده "); //********* Updated ************
define("_WFS_DATE","تاریخ: "); //********* Updated ************
define("_WFS_WRITTEN","نوشته: "); //********* Updated ************
define("_WFS_PRINTERFRIENDLY","صفحه آماده برای چاپ");

define("_WFS_TOPICC","بخش:");
define("_WFS_URL","آدرس لینک:");
define("_WFS_NOSTORY","متاسفانه مقاله انتخاب شده وجود ندارد");
define("_WFS_RETURN2INDEX","بازگشت به صفحه اصلی راهنما");
define("_WFS_BACK2CAT","بازگشت به شاخه");
define("_WFS_BACK2","بازگشت");
//%%%%%%	File Name print.php 	%%%%%

define("_WFS_URLFORSTORY","آدرس این مقاله:");

// %s represents your site name
define("_WFS_THISCOMESFROM","این مقاله از طرف %s فرستاده شده ");

/////// wfsection
define("_WFS_CATEGORYS","بخش");
define("_WFS_POSTS","مقاله ها");
define("_WFS_PUBLISHED","آخرین مقاله ها");
define("_WFS_WELCOME","%s نفر این قسمت را میخوانند ");

define("_WFS_ARTICLE","مقاله");
define("_WFS_AUTHER","نویسنده: "); //********* Updated ************
define("_WFS_AUTH","نویسنده"); //updated
define("_WFS_CAUTH","<b>نام نویسنده</b> (برای پیش فرض گرفتن نویسنده اصلی این قسمت را خالی بگذارید)"); //updated
define("_WFS_LASTUPDATE","به روز شد");

// wfsarticle.php

define("_WFS_MAINTEXT"," متن مقاله");
//_WFS_ALLOWEDHTML
define("_WFS_DISAMILEY","غیر فعال کردن شکلک ها");
define("_WFS_DISHTML","غیر فعال کردن HTML");
//_WFS_PREVIEW
define("_WFS_SAVE","ذخیره");
//_WFS_GO

// themenews.php
define("_WFS_POSTEDBY","توسط");
define("_WFS_ON","در");
define("_WFS_READS","خوانده شده");
define("_WFS_FILEUPLOAD","بارگذاری فایل متصل شده");
define("_WFS_FILESHOWNAME","عنوان فایل متصل شده");
define("_WFS_ATTACHEDFILES","ویرایش فایل متصل شده");
define("_WFS_NOFILE","هیچ فایلی به این متن متصل نشده است");
define("_WFS_AFTERREGED",".فایل ها را نمیتوان به مقاله های بدون متن متصل کرد <br />.لطفا یک مقاله بسازید و سپس باز گردید و یک فایل به آن متصل کنید");
define("_WFS_FILES","فایل");
define("_WFS_COMMENTSNUM","نظر");
define("_WFS_CATEGORYDESC","شرح");
define("_WFS_CATEGORYHEAD","سر صفحه شاخه<br /><br />این htmlیا متن در بالای همه شاخه ها قرار میگیرد");
define("_WFS_CATEGORYFOOT","پا صفحه شاخه<br /><br />این html یا متن در پایین همه شاخه ها قرار میگیرد");
define("_WFS_FILEID","شماره شناسه فایل");
define("_WFS_FILEREALNAME","نام فایل ذخیره شده بر روی سرور");
define("_WFS_FILETEXT","متن برای جستجو");
define("_WFS_ARTICLEID","شماره شناسه مقاله");
define("_WFS_EXT","پسوند فایل");
define("_WFS_MINETYPE","نوع فایل");
define("_WFS_UPDATEDATE","آخرین بار به روز شده در تاریخ");
define("_WFS_DEL","حذف");
define("_WFS_CANCEL","انصراف");
define("_WFS_IMGADD","اضافه");
define("_WFS_UPLOAD","بار گزاری");
define("_WFS_LINKURL","لینک منبع برای این متن");
define("_WFS_LINKURLNAME","اسمی که میخواهید روی آدرس بالا قرار بگیرد");
define("_WFS_SUMMARY","خلاصه");
define("_WFS_LINK","لینک");
define("_WFS_NOTREADFILE","این فایل شناسایی نشد!");
define("_WFS_DOWNLOADNAME","نام فایل دانلود شده  برای کاربر");
define("_WFS_PAGEBREAK","صفحه جدید با گذاشتن کد روبرو ایجاد میشود: [pagebreak]");

//new version 0.9.2
define("_WFS_MAININDEX","صفحه راهنما");
define("_WFS_NOVIEWPERMISSION",".ببخشید شما به این قسمت دسترسی ندارید");
define("_WFS_WEBLINK","لینک:");
define("_WFS_VOTEAPPRE","سپاس به خاطر رای شما");
define("_WFS_THANKYOU","با تشکر از وقتی که برای رای دادن در %sگذاشتید "); // %s is your site name
define("_WFS_VOTEFROMYOU","رای هایی که شما میدهید به سایر اعضا کمک میکند که بتوانند بهتر مطالب با ارزش را انتخاب کنند");
define("_WFS_VOTEONCE","لطفا برای یک مطلب بیش از یک بار رای ندهید.");
define("_WFS_RATINGSCALE","شما می توانید از 1 تا 10 به مطالب رای دهید. 1 یعنی ضعیف و بدون محتوا و 10 یعنی عالی و شاهکار");
define("_WFS_BEOBJECTIVE","طفا منصفانه عمل کنید . اگر کسی 1 یا 10 بگیردمحتوای این مطلب محک نخواهد خورد.");
define("_WFS_DONOTVOTE","به نوشته های خودتان رای ندهید");
define("_WFS_RATEIT","امتیاز دهید");
define("_WFS_DESCRIPTIONC","شرح: ");
define("_WFS_EMAILC","ایمیل: ");
define("_WFS_CATEGORYC","شاخه: ");
define("_WFS_LASTUPDATEC","آخرین بار به روز شد: ");
define("_WFS_DLNOW","دانلود کنید");
define("_WFS_VERSION","ورژن");
define("_WFS_SUBMITDATE","تاریخ نوشته شدن متن");
define("_WFS_DLTIMES","بار %s دانلود شده");
define("_WFS_FILESIZE","اندازه فایل");
define("_WFS_SUPPORTEDPLAT","سایتهای پشتیبان");
define("_WFS_HOMEPAGE","صفحه اصلی");
define("_WFS_HITSC","تعداد: ");
define("_WFS_RATINGC","امتیاز: ");
define("_WFS_ONEVOTE","1 رای");
define("_WFS_NUMVOTES","%s رای");
define("_WFS_ONEPOST","1 پست");
define("_WFS_NUMPOSTS","%s پست");
define("_WFS_COMMENTSC","نظر ها: ");
define("_WFS_RATETHISFILE","به این مقاله امتیاز دهید");
define("_WFS_MODIFY","اصلاح");
define("_WFS_TELLAFRIEND","اطلاع به یک دوست");
define("_WFS_VSCOMMENTS","دیدن/فرستادن نظر ها");
define("_WFS_EDIT","ویرایش");
define("_WFS_SUBMIT","ثبت");
define("_WFS_BYTES","بایت");
define("_WFS_ALREADYREPORTED","شما قبلا گزارش اشتباه بودن این فایل را داده اید.");
define("_WFS_MUSTREGFIRST","متاسفانه شما برای این عمل دسترسی ندارید.<br>لطفا ابتدا ثبت نام کنید یا در سایت وارد شوید!");
define("_WFS_NORATING","هیچ امتیازی انتخاب نشده");
define("_WFS_CANTVOTEOWN","شما نمی توانید به نوشته های خودتان رای دهید.<br>تمام رای ها ذخیره و بررسی می شوند.");
define("_WFS_RANK","درجه");
define("_WFS_HITS","تعداد بازدید"); //updated
define("_WFS_RATING","امتیاز");
define("_WFS_VOTE","رای");
define("_WFS_TOP10","%s 10 تای اول"); // %s is a review category name
define("_WFS_CATEGORIES","شاخه ها");
define("_WFS_THANKSFORHELP","از همکاری شما در جهت اصلاح این شاخه تشکر می کنیم.");
define("_WFS_FORSECURITY","به دلیل مسایل امنیتی سایت شناسه کاربری و IP شما مداوما ذخیره می شود.");
define("_WFS_NUMBYTES","%s بایت");
define("_WFS_TIMES"," بار");
define("_WFS_DOWNLOADS","دانلود برای ");
define("_WFS_FILETYPE","نوع فایل: ");
define("_WFS_GROUPPROMPT","گروه های مجاز برای دستیابی به این قسمت:");
define("_WFS_REPORTBROKEN","گزارش فایل خراب شده");
define("_WFS_IMGNAME","(نام فایل (این قسمت را خالی بگذارید تا نام خود فایل اصلی جایگزین شود");
define("_WFS_POSTNEWARTICLE","- مطلب یا مقاله ای را که می فرستید پس از باز بینی و اصلاح در سایت قرار میگیرد این کار ممکن است یک روز یا بیشتر طول بکشد <br>- از فرستادن نظر های شخصی و مطالب کوتاه و بدون پایه و اساس خود داری کنید. این قسمت برای فرستادن نقد های جامع یا نوشته ها ، ترجمه ها و گرد اوری ها است. حتما سعی کنید مراجع خود را ذکر کنید یا لینک بدهید.<br> فرم ارسال مطلب");
define("_WFS_SMILIE","اضافه کردن شکلک به مقاله");
define("_WFS_EXGRAPHIC","اضافه کردن گرافیک از خارج سایت به مقاله");
define("_WFS_GRAPHIC","اضافه کردن گرافیک از داخل سایت به مقاله");
define("_WFS_NOIMG","بدون تصویر");
define("_WFS_ARTIMGUPLOAD","بار گزاری تصویر");
define("_WFS_POPULAR","پر طرفدار");
define("_WFS_RATEFILE","امتیاز");
define("_WFS_COMMENT","نظر ها");
define("_WFS_RATED","امتیاز");
define("_WFS_SUBMIT1","ارسال شده");
define("_WFS_VOTES","رای ها");
define("_WFS_SORTBY1","مرتب شده بر اساس:");
define("_WFS_TITLE1","عنوان");
define("_WFS_DATE1","تاریخ");
define("_WFS_ARTICLEID1","شماره شناسه مقاله");
define("_WFS_POPULARITY1","پر طرفدار بودن");
define("_WFS_CURSORTBY1","مقاله ها در حال حاضر بر اساس %s مرتب شده اند.");
define("_WFS_RATING1","امتیاز");
define("_WFS_NOTIFYPUBLISH","فرستادن ایمیل آگهی رسانی پس از قرار گرفتن مقاله در سایت");
define("_WFS_POPULARITYLTOM","پر طرافدار بودن (از کمتر به بیشتر)");
define("_WFS_POPULARITYMTOL","پر طرافدار بودن (از بیشتر به کمتر)");
define("_WFS_ARTICLEIDLTOM","شماره شناسه مقاله (9 - 1)");
define("_WFS_ARTICLEIDMTOL","شماره شناسه مقاله (1 - 9)");
define("_WFS_TITLEZTOA","عنوان (الف تا ی)");
define("_WFS_TITLEATOZ","عنوان (ی تا الف)");
define("_WFS_DATEOLD","تاریخ (اول قدیمی ها)");
define("_WFS_DATENEW","تاریخ (اول جدیدها)");
define("_WFS_RATINGLTOH","امتیاز (از کم به زیاد)");
define("_WFS_RATINGHTOL","امتیاز (از زیاد به کم)");
define("_WFS_SUBMITLTOH","ثبت شده (قدیم به جدید)");
define("_WFS_SUBMITHTOL","ثبت شده (جدید به قدیم)");
define("_WFS_WEIGHT","پرمحتوا به کم محتوا");
define("_WFS_NOTITLE","خطا: عنوانی برای مقاله انتخاب نشده است لطفا بازگردید و نامی برای مطلب خود بگذارید.");
define("_WFS_NOMAINTEXT","خطا: متن مقاله نوشته نشده است. لطفا باز گردید و متن مقاله را بنویسید.");
define("_WFS_RATINGA","امتیاز مقاله: %s");
define("_WFS_HTMLPAGE"," فایل HTML </b>(این فایل به جای متن قرار خواهد گرفت)");
define("_WFS_DBUPDATED","از مقاله ای که برای سایت ارسال کرده اید متشکریم.");
define("_WFS_INTFILEAT","به این مقاله در  %s نگاه کنید");
define("_WFS_INTFILEFOUND","یک مقاله جذاب را در %s پیدا کردم");
define("_WFS_DESCRIPTION","شرح فایل");
define("_WFS_ARTICLEADDIT","مقاله های اضافه شده");
define("_WFS_ARTICLELINK","لینک مقاله");
define("_WFS_MISCSETTINGS","سایر تنظیمات مقاله");
define("_WFS_FILEDESCRIPT","شرح فایل");
define("_WFS_ATTACHEDFILESTXT","<b>فایل های متصل شده</b><br/><br />تعداد فایل های متصل شده به این مقاله را نشان می دهد.شما میتوانید هر فایل را با  کلیک روی لینک ویرایش کنید.<br /><br />فایل ها تنها در حالتی می توانند به مقاله متصل شوند که شما اول یک مقاله بسازید و آن را ذخیره کنید و سپس با کلیک روی لینک 'ویرایش'  میتوانید به آن فایل متصل کنید.");
define("_WFS_DOWNLOAD","بارگذاری فایل متصل شده");
define("_WFS_PUBLISHEDHOME","در سایت قرار گرفته");
define("_WFS_ARTSIZE","اندازه %s");
define("_WFS_DISCLAIMER","<b>شرایط:</b> این سایت هیچ مسئولیتی در قبال نظر های ارسال شده توسط کاربران ندارد.");
define("_WFS_ONLYREGISTEREDUSERS","فقط کاربران عضو میتوانند گزارش خرابی فایل ارسال کنند!");
define("_WFS_THANKSFORINFO","با تشکر از اطلاع رسانی شما.به زودی درخواست شما بررسی خواهد شد.");
define("_WFS_FILEPERMISSION","فایل های مجاز برای این فایل");
define("_WFS_DOWNLOADED","دفعات دانلود");
define("_WFS_DOWNLOADSIZE","سایز فایل در هنگام دانلود");
define("_WFS_LASTACCESS","آخرین دستیابی روی سرور");
define("_WFS_LASTUPDATED","آخرین بار به روز شده در تاریخ");
define("_WFS_ERRORCHECK","چک کردن فایل برای اینکه مشخص شود آیا فایل بر روی سرور موجود است؟");
define("_AM_FILEATTACHED","فایل به مقاله متصل شده است؟");
define("_WFS_NODESCRIPT","هیچ شرحی برای فایل وجود ندارد");
define("_WFS_UPLOADED","بارگذاری ها: ");
define("_WFS_FILEMIMETYPE","نوع تغییر یافته فایل");

// add disbr, enaamp
define("_WFS_DISBR","خط جدید را به کد br تبدیل نکن.");
define("_WFS_ENAAMP","تغیر &amp; به &amp;amp; در زمان ویرایش.");

// article.php
define("_WFS_ARTCLE_MORE","دو یا چند مقاله با این عنوان وجود دارند.");
define("_WFS_REPORT_BREOKEN_DOWNLOAD","گزارش فایل خراب");

// submit.php
define("_WFS_SUBMIT_FAIL","ارسال نا موفق بود.");
define("_WFS_BUT_SUBMIT_SUCCESS","ولی، این مقاله ارسال شد");
define("_WFS_SUBMITED_ARTICLE","مقاله ارسال شده");
define("_WFS_UPLOAD_END","بارگذاری شده!");
define("_WFS_UPLOAD_FAIL","این بارگذاری نا موفق بود");
define("_WFS_UPLOAD_NON","فایل بارگذاری شده روی سایت قرار نگرفت");
define("_WFS_UPLOAD_TOO_BIG","اندازه فایل بزرگتر از میزان مجاز است!\n حد اکثر اندازه فایل باید %s بایت  باشد.");
define("_WFS_UPLOAD_NOT_ALLOWED_MINE_TYPE","شما مجاز به بارگذاری این نوع فایل نیستید.");

// modify.php
define("_WFS_ARTICLE_BACK","بازگشت به مقاله");
define("_WFS_MODIFY_TITLE","ویرایش مقاله");
define("_WFS_MODIFY_END","بارگذاری!");
define("_WFS_MODIFY_FAIL","بارگذاری نا موفق.");
define("_WFS_ACTION","عمل");
define("_WFS_DELETE","حذف");
define("_WFS_FILE_DOWNLOADNAME","نام فایل");
define("_WFS_FILE_CHECK","چک کردن فایل");
define("_WFS_FILE_NOEXIST","وجود ندارد");
define("_WFS_FILE_NOFILE","مسیر فایل نا درست است");
define("_WFS_FILE_MODIFY_END","فایل به روز شده است!");
define("_WFS_FILE_DELETE_COMFROM","هشدار: آیا اطمینان دارید که میخواهید این فایل را حذف کنید؟");
define("_WFS_FILE_DELETE_END","حذف شد!");
define("_WFS_FILE_DELETE_FAIL","حذف نا موفق بود.");

// multi language in index.php
define("_WFS_ERROR_IMAGE","خطا: لطفا مسر/فایل تصویر را بررسی کنید.");

?>