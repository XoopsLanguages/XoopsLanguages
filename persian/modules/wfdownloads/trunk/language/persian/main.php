<?php
/**
 * $Id: main.php,v 1.2 2005/12/23 06:20:33 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */


//Todo - Still to remove redundat defines from this area.
define("_MD_WFD_NODOWNLOAD","این فایل وجود ندارد!");
define("_MD_WFD_DOWNLOADMINPOSTS","باید تعداد پست های خود را اضافه کنید<br />سپس می توانید فایل ها را دریافت کنید");
define("_MD_WFD_UPLOADMINPOSTS","باید تعداد پست های خود را اضافه کنید<br />سپس می توانید فایل ها را بارگذاری کنید");

define("_MD_WFD_SUBCATLISTING","فهرست شاخه ها");
define("_MD_WFD_ISADMINNOTICE","وب مستر : مشکلی در این تصویر وجود دارد.");
define("_MD_WFD_THANKSFORINFO","با تشکر از ارسال شما. هر وقت ارسال شما توسط یکی از مدیران تایید شد از آن مطلع می شوید.");
define("_MD_WFD_ISAPPROVED","با تشکر از ارسال شما. در خواست شما تایید شد و در فهرست قرار گرفت");
define("_MD_WFD_THANKSFORHELP","با تشکر از کمک شما برای اصلاح این شاخه");
define("_MD_WFD_FORSECURITY","برای مسایل امنیتی شناسه و IP شما ذخیره شد.");
define("_MD_WFD_NOPERMISETOLINK","این فایل متعلق به سایت شما نیست <br /><br />لطفا به مدیر سایتتون بگید :<br /><b>فایل های سایت دیگرانو ندزد.</b> <br /><br /><b>ویژگی های یک فایل دزد:</b> یه آدم تنبل که لینک های سایتهای دیگران را میدزده و جوری نشون میده که انگار همه زحمت ها رو اون کشیده<br /><br />  شماره IP <b>نگهداری شد</b>.");
define("_MD_WFD_SUMMARY","خلاصه<br /><br /><span style='font-weight: normal;'>می توانید این قسمت را خالی بگذارید<br />در صورت خالی بودن یک خلاصه به طور اوتو ماتیک نوشته خواهد شد</span>");
define("_MD_WFD_DESCRIPTION","توضیح");
define("_MD_WFD_SUBMITCATHEAD","فرم ارسال فایل");
define("_MD_WFD_MAIN","اصلی");
define("_MD_WFD_POPULAR","پر طرفدار");
define("_MD_WFD_NEWTHISWEEK","در این هفته قرار داده شده");
define("_MD_WFD_UPTHISWEEK","در این هفته به روز شده");
define("_MD_WFD_POPULARITYLTOM","دفعات دریافت فایل (از کم به زیاد)");
define("_MD_WFD_POPULARITYMTOL","دفعات دریافت فایل(از زیاد به کم)");
define("_MD_WFD_TITLEATOZ","عنوان (از الف-ی)");
define("_MD_WFD_TITLEZTOA","عنوان (از ی-الف)");
define("_MD_WFD_DATEOLD","تاریخ (فایلهای قدیمی اول)");
define("_MD_WFD_DATENEW","تاریخ (فایلهای جدید اول)");
define("_MD_WFD_RATINGLTOH","محبوبیت (از رای کم به زیاد)");;
define("_MD_WFD_RATINGHTOL","محبوبیت (از رای زیاد به کم)");
define("_MD_WFD_DESCRIPTIONC","توضیح: ");
define("_MD_WFD_CATEGORYC","شاخه: ");
define("_MD_WFD_VERSION","نسخه");
define("_MD_WFD_SUBMITDATE","تاریخ ارسال");
define("_MD_WFD_DLTIMES"," %s بار گرفته شده");
define("_MD_WFD_FILESIZE","حجم فایل");
define("_MD_WFD_SUPPORTEDPLAT","بستر های نرم افزاری مورد نیاز");
define("_MD_WFD_HOMEPAGE","نشانی سایت");
define("_MD_WFD_PUBLISHERC","سازنده فایل: ");
define("_MD_WFD_RATINGC","محبوبیت: ");
define("_MD_WFD_ONEVOTE","1 رای");
define("_MD_WFD_NUMVOTES","%s رای");
define("_MD_WFD_RATETHISFILE","به این فایل رای دهید");
define("_MD_WFD_REVIEWTHISFILE","این فایل را نقد کنید");
define("_MD_WFD_REVIEWS","نقد ها:");
define("_MD_WFD_DOWNLOADHITS","تعداد دریافت فایل");
define("_MD_WFD_MODIFY","اصلاح اطلاعات فایل");
define("_MD_WFD_REPORTBROKEN","گزارش خرابی لینک");
define("_MD_WFD_BROKENREPORT","فرم گزارش خرابی لینک");
define("_MD_WFD_SUBMITBROKEN","ارسال");
define("_MD_WFD_BEFORESUBMIT","قبل از اینکه گزارش خرابی لینک را بفرستید مطمان شوید که این فایل در سایت وجود ندارد و یا اینکه سایت دان نشده است.");
define("_MD_WFD_TELLAFRIEND","این فایل را به بقیه پیشنهاد کنید");
define("_MD_WFD_EDIT","ویرایش");
define("_MD_WFD_THEREARE","در حال حاضر <b>%s</b> <i>شاخه</i> و <b>%s</b> <i>فایل برای دریافت </i> در سایت وجود دارد");
define("_MD_WFD_THEREIS","در حال حاضر <b>%s</b> <i>یک شاخه</i> و <b>%s</b> <i>فایل برای دریافت </i> در سایت وجود دارد");
define("_MD_WFD_LATESTLIST","لیست فایل های اخیر");
define("_MD_WFD_FILETITLE","عنوان فایل: ");
define("_MD_WFD_DLURL","آدرس فایل (URL): ");
define("_MD_WFD_UPLOAD_FILENAME","آدرس اصلی فایل در سرور: ");
define("_MD_WFD_UPLOAD_FILETYPE","نوع فایل: ");

define("_MD_WFD_HOMEPAGEC","آدرس سایت: ");
define("_MD_WFD_UPLOAD_FILEC","بارگذاری فایل: ");
define("_MD_WFD_VERSIONC","نسخه: ");
define("_MD_WFD_FILESIZEC","حجم فایل: ");
define("_MD_WFD_NUMBYTES","%s بایت");
define("_MD_WFD_PLATFORMC","بستر نرم افزاری: ");
define("_MD_WFD_PRICE","قیمت");
define("_MD_WFD_LIMITS","محدودیت ها");
define("_MD_WFD_DOWNLICENSE","مجوز");
define("_MD_WFD_NOTSPECIFIED","وجود ندارد");
define("_MD_WFD_MIRRORSITE","آدرس همسان");
define("_MD_WFD_MIRROR","وب سایت  فایل همسان");
define("_MD_WFD_PUBLISHER","سازنده فایل ");
define("_MD_WFD_UPDATEDON","به روز شده در تاریخ:");
define("_MD_WFD_PRICEFREE","مجانی");
define("_MD_WFD_VIEWDETAILS","دیدن اطلاعات");
define("_MD_WFD_OPTIONS",'گزینه ها: ');
define("_MD_WFD_NOTIFYAPPROVE",'هنگامی که فایل تایید شد به من خبر بده');
define("_MD_WFD_VOTEAPPRE","از رای شما متشکریم");
define("_MD_WFD_THANKYOU","با سپاس از زمانی که برای رای دادن در %s گذاشتید."); // %s is your site name
define("_MD_WFD_VOTEONCE","خواهش میکنیم برای یک فایل چند بار رای ندهید");
define("_MD_WFD_RATINGSCALE","از 1 تا 10 میتونید رای بدید , یک یعنی ضعیف و بی استفاده و 10 یعنی قوی و کاربردی .");
define("_MD_WFD_BEOBJECTIVE","خواهش میکنیم بی طرفانه عمل کنید , اگر کسی یک  یا 10 بگیرد این فایل زیاد کاربردی نخواهد بود");
define("_MD_WFD_DONOTVOTE","برای فایل خودتان رای ندید");
define("_MD_WFD_RATEIT","ارسال رای!");
define("_MD_WFD_INTFILEFOUND","یک فایل خوب برای دریافت در %s پیدا کردم");  // %s is your site name
define("_MD_WFD_RANK","درجه");
define("_MD_WFD_CATEGORY","شاخه");
define("_MD_WFD_HITS","دفعات دریافت فایل");
define("_MD_WFD_RATING","محبوبیت");
define("_MD_WFD_VOTE","رای");
define("_MD_WFD_SORTBY","مرتیب سازی بر پایه:");
define("_MD_WFD_TITLE","عنوان");
define("_MD_WFD_DATE","تاریخ");
define("_MD_WFD_POPULARITY","پرطرفدار");
define("_MD_WFD_TOPRATED","محبوب");
define("_MD_WFD_CURSORTBY","فایل ها بر اساس %s مرتب سازی شده اند");
define("_MD_WFD_CANCEL","انصراف");
define("_MD_WFD_ALREADYREPORTED","شما پیش از این  گزارشی در مورد خرابی این فایل فرستاده اید");
define("_MD_WFD_MUSTREGFIRST","متاسفانه برای این کار باید اول وارد سایت شوید");
define("_MD_WFD_NORATING","هیچ محبوبیتی انتخاب نشده");
define("_MD_WFD_CANTVOTEOWN","شما نمیتونید به سایتی که خودتان وارد کردید رای بدید , تمام رای ها ذخیره و باز بینی میشوند.");
define("_MD_WFD_SUBMITDOWNLOAD","ارسال فایل ");
define("_MD_WFD_SUB_SNEWMNAMEDESC","<ul><li>تمام  فایل هایی که فرستاده می شوند اول بررسی شده و پس از تایید در سایت قرار می گیرند این ممکن است یک روز یا بیشتر طول بکشد.</li><li>برای ارسال فایل فقط لازم است گزینه های ستاره دار را پر کنید و پر کردن سایر گزینه ها اختیاری است ولی هر چه اطلاعات کامل تری از فایل ارسال کنید به ما بیشتر کمک کرده اید. شما دو راه برای ارسال فایل دارید میتوانید آدرس فایل (URL) را بفرستید یا خود فایل را بارگذاری کنید.لطفا توجه کنید که در حالتی که قصد دارید فایلی را از داخل هارد خود به سایت بارگذاری کنید فقط پسوند های محدودی از قبیل zip , pdf , rar , doc , ... پذیرفته می شوند. </li></ul>");
define("_MD_WFD_MAINLISTING","فهرست شاخه های اصلی");
define("_MD_WFD_LASTWEEK","هفته گذشته");
define("_MD_WFD_LAST30DAYS","30 روز گذشته");
define("_MD_WFD_1WEEK","یک هفته");
define("_MD_WFD_2WEEKS","2 هفته");
define("_MD_WFD_30DAYS","30 روز");
define("_MD_WFD_SHOW","نشان بده");
define("_MD_WFD_DAYS","روز");
define("_MD_WFD_NEWDOWNLOADS","فایل های اخیر");
define("_MD_WFD_TOTALNEWDOWNLOADS","همه فایل های اخیر");
define("_MD_WFD_DTOTALFORLAST","همه فایل های اخیر در فاصله");
define("_MD_WFD_AGREE","موافقم");
define("_MD_WFD_DOYOUAGREE","آیا شرایط بالا را قبول دارید؟");
define("_MD_WFD_DISCLAIMERAGREEMENT","شرایط");
define("_MD_WFD_DUPLOADSCRSHOT","بارگذاری تصویر برای فایل");
define("_MD_WFD_RESOURCEID","شماره فایل: ");
define("_MD_WFD_REPORTER","گزارش دهنده اصلی: ");
define("_MD_WFD_DATEREPORTED","تاریخ ارسال گزارش: ");
define("_MD_WFD_RESOURCEREPORTED","گزارش خرابی فایل");
define("_MD_WFD_BROWSETOTOPIC","<b>دیدن فایل ها بر اساس حروف الفبا</b>");
define("_MD_WFD_WEBMASTERACKNOW","تشکر از گزارش خرابی فایل: ");
define("_MD_WFD_WEBMASTERCONFIRM","تایید گزارش خرابی فایل: ");
define("_MD_WFD_DELETE","حذف");
define("_MD_WFD_DISPLAYING","نمایش بر اساس: ");
define("_MD_WFD_LEGENDTEXTNEW","فایل های امروز");
define("_MD_WFD_LEGENDTEXTNEWTHREE","فایل های 3 روز گذشته");
define("_MD_WFD_LEGENDTEXTTHISWEEK","فایل های این هفته");
define("_MD_WFD_LEGENDTEXTNEWLAST","فایل هایی که بیشتر از یک هفته است در سایت قرار گرفته اند");
define("_MD_WFD_THISFILEDOESNOTEXIST","خطا: این فایل وجود ندارد !");
define("_MD_WFD_BROKENREPORTED","خرابی فایل گزارش شد");
// visit
define("_MD_WFD_DOWNINPROGRESS","در حال دریافت فایل");
define("_MD_WFD_DOWNSTARTINSEC","دریافت فایل در عرض 3 ثانیه شروع می شود ....<b>لطفا صبر کنید</b>.");
define("_MD_WFD_DOWNNOTSTART","اگر دریافت فایل شروع نشد ، ");
define("_MD_WFD_CLICKHERE","اینجا را کلیک کنید!");
define("_MD_WFD_BROKENFILE","فایل خراب");
define("_MD_WFD_PLEASEREPORT","لفا فایل خراب را به وب مستر اطلاع دهید، ");
// Reviews
define("_MD_WFD_REV_TITLE","عنوان نقد:");
define("_MD_WFD_REV_RATING","محبوبیت :");
define("_MD_WFD_REV_DESCRIPTION","متن نقد:");
define("_MD_WFD_REV_SUBMITREV","ارسال نقد");
define("_MD_WFD_ERROR_CREATEREVIEW","خطا در هنگام ساختن نقد رخ داد");

define("_MD_WFD_REV_SNEWMNAMEDESC"," لطفا فرم زیر را به طور کامل پر کنید و ما نقد شما را به محض اینکه بررسی کردیم در سایت قرار می دهیم.<br /><br />
با تشکر از وقتی که برای نوشتن عقاید خود میگذارید. ما میخواهیم همه کاربران سایت بتوانند هر چه بهتر و راحتتر از فایل ها استفاده کنند<br /><br />همه نقد ها به وسیله مدیران باز بینی و اصلاح شده و سپس در سایت قرار می گیرد
");
define("_MD_WFD_ISNOTAPPROVED","ارسال شما باید اول به وسیله یکی از مدیران تایید شود");
define("_MD_WFD_LICENCEC","مجوز نرم افزار: ");
define("_MD_WFD_LIMITATIONS","محدودیت های  نرم افزار: ");
define("_MD_WFD_KEYFEATURESC","ویژ گی های کلیدی:<br /><br /><span style='font-weight: normal;'>هر کدام از ویژگی ها را با علامت | از هم جدا کنید </span>");
define("_MD_WFD_REQUIREMENTSC","نیازمندی های  سیستم:<br /><br /><span style='font-weight: normal;'>هر کدام از ویژگی ها را با علامت | از هم جدا کنید</span>");
define("_MD_WFD_HISTORYC","تاریخچه  فایل:");
define("_MD_WFD_HISTORYD","اضافه کردن یک تاریخچه جدید:<br /><br /><span style='font-weight: normal;'>تاریخ اضافه شدن تاریخچه به فایل به طور اتوماتیک قرار گیرد</span>");
define("_MD_WFD_HOMEPAGETITLEC","عنوان سایت : ");
define("_MD_WFD_REQUIREMENTS","برنامه های مورد نیاز:");
define("_MD_WFD_FEATURES","ویژگی های کلیدی:");
define("_MD_WFD_HISTORY","تاریخچه فایل");
define("_MD_WFD_PRICEC","قیمت:");
define("_MD_WFD_SCREENSHOT","تصویر فایل :");
define("_MD_WFD_SCREENSHOTCLICK","تصویر را کامل نشان بده");
define("_MD_WFD_OTHERBYUID","فایل های دیگر فرستاده شده از طرف: ");
define("_MD_WFD_DOWNTIMES","زمان مورد نیاز برای دریافت فایل: ");
define("_MD_WFD_MAINTOTAL","کل فایل ها: ");
define("_MD_WFD_DOWNLOADNOW","دریافت فایل");
define("_MD_WFD_PAGES","<b>صفحات</b>");
define("_MD_WFD_REVIEWER","منتقد");
define("_MD_WFD_RATEDRESOURCE","محبوبیت فایل");
define("_MD_WFD_SUBMITTER","ارسال کننده");
define("_MD_WFD_REVIEWTITLE","این فایل را نقد کنید");
define("_MD_WFD_REVIEWTOTAL","<b>تعداد کل نقد ها:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE","عنوان نقد های  کاربران");
define("_MD_WFD_USERREVIEWS","نقد های اعضا را در مورد این فایل بخوانید %s");
define("_MD_WFD_NOUSERREVIEWS","اولین کسی باشید که برای این فایل نقد می نویسید: %s.");
define("_MD_WFD_ERROR","خطا در به روز رسانی  پایگاه داده: اطلاعات ذخیره نشد");
define("_MD_WFD_COPYRIGHT","حق کپی");
define("_MD_WFD_INFORUM","بحث راجع به این فایل در انجمن ها");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT","شما اجازه فرستادن فایل برای سایت را ندارید");
define("_MD_WFD_INFONOSAVEDB","اطلاعات به پایگاه داده اضافه نشد: <br /><br />");
define("_MD_WFD_NOTALLOWEDTOMOD","شما اجازه اصلاح این فایل را ندارید");


//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","اول کانال را بسازید");
define("_MD_WFD_REVIEW_CATPATH","مسیر شاخه:");
define("_MD_WFD_ADDREVIEW","اضافه کردن نقد");

//
define("_MD_WFD_NEWLAST","ارسال های فرستاده شده در هفته های قبل");
define("_MD_WFD_NEWTHIS","ارسال های این هفته");
define("_MD_WFD_THREE","ارسال های این سه روز");
define("_MD_WFD_TODAY","ار سال های امروز");
define("_MD_WFD_NO_FILES","هنوز فایلی وجود ندارد");


//mirror.php
define("_MD_WFD_MIRROR_AVAILABLE","همسان های قابل دست یابی:");
define("_MD_WFD_MIRROR_CATPATH","مسیر شاخه:");
define("_MD_WFD_MIRROR_FILENAME","نام فایل:");
define("_MD_WFD_DOWNLOADMIRRORS","دریافت فایل های همسان");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT","شما اجازه  ارسال همسان را ندارید");
define("_MD_WFD_MIRRORS","دریافت فایل های همسان:");
define("_MD_WFD_USERMIRRORSTITLE","فایل های همسان قابل دست سابی");
define("_MD_WFD_USERMIRRORS","فایل های همسان قابل دست یابی را در %s ببینید");
define("_MD_WFD_NOUSERMIRRORS","یک فایل همسان به %s اضافه کنید.");
define("_MD_WFD_TOTALMIRRORS","کل همسان ها:");
define("_MD_WFD_ADDMIRROR","اضافه کردن همسان");
define("_MD_WFD_MIRROR_TOTAL","<b>کل همسان ها:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE","عنوان وب سایت:");
define("_MD_WFD_MIRROR_HOMEURL","آدرس وب سایت:<br /><br />آدرس وب سایت را وارد کنید.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE","بارگذاری لوگوی سایت:<br /><br />ین لوگوی کوچک که معرف وب سایت شما خواهد بود.");
define("_MD_WFD_MIRROR_MIRRORIMAGE","لوگوی سایت:");
define("_MD_WFD_MIRROR_CONTINENT","قاره:");
define("_MD_WFD_MIRROR_LOCATION","مکان:<br /><br />مثال: لندن, انگلستان");
define("_MD_WFD_MIRROR_DOWNURL","آدرس فایل:<br /><br />آدرس فایل را وارد کنید.");
define("_MD_WFD_MIRROR_SUBMITMIRROR","ارسال همسان");
define("_MD_WFD_ERROR_CREATEMIRROR","خطا در هنگام ساختن همسان");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC","
لطفا فرم زیر را به طور کامل پر کنید، و ما فایل همسان شما را به زودی اضافه خواهیم کرد.<br /><br />
با تشکر از یاری شما در تهیه مکان های دیگر برای دریافت فایل در این صورت کاربران  سریعتر خواهند توانست فایل ها را دریافت کنند،<br /><br />تمام همسان های ارسالیقبل از قرار گرفتن در سایت توسط مدیران باز بینی میشوند.
");
define("_MD_WFD_MIRROR_HHOST","هاست");
define("_MD_WFD_MIRROR_HLOCATION","مکان");
define("_MD_WFD_MIRROR_HCONTINENT","قاره");
define("_MD_WFD_MIRROR_HDOWNLOAD","فایل");
define("_MD_WFD_MIRROR_OFFLINE","سروری که فایل بر رویش قرار دارد آف لاین است.");
define("_MD_WFD_MIRROR_ONLINE","سروری که فایل بر رویش قرار دارد آن لایناست.");
define("_MD_WFD_MIRROR_DISABLED","چک کردن هاست سرور مقدور نیست.");
//continents (used in mirrors page)
define("_MD_WFD_CONT1","آفریقا");
define("_MD_WFD_CONT2","قطب جنوب");
define("_MD_WFD_CONT3","آسیا");
define("_MD_WFD_CONT4","اروپا");
define("_MD_WFD_CONT5","آمریکای شمالی");
define("_MD_WFD_CONT6","آمریکای جنوبی");
define("_MD_WFD_CONT7","اقیانوسیه");


define("_MD_WFD_ADMIN_PAGE",":: قسمت مدیریت ::");
define("_MD_WFD_DOWNLOADS_LIST","فهرست فایل ها (%s)");
define("_MD_WFD_NEWDOWNLOADS_ALL","همه");
define("_MD_WFD_NEWDOWNLOADS_INTHELAST","در %s روز گذشته");
define("_MD_WFD_DOWNLOAD_MOST_POPULAR","فایل های بیشتر دریافت شده");
define("_MD_WFD_DOWNLOAD_MOST_RATED","فایل های با بیشترین امتیاز");
?>