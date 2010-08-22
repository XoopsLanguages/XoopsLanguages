 
<?php
/*
* NAME : SENDME MODULE FOR XOOPS
* AUTHOR : ONASRE <Ȧ刓Ѡ>
* EMAIL : abu-elmajid@hotmail.com
* WEBSITE : WWW.abdALBASIT.COM DEMO SITE : WILDHELP.COM SUPPORT SITE : ARABXOOPS.COM
* VERSION : V1.6  Last Updated 2-March-2010
* License : FREE AS LONG AS U KEEP THIS TEXT , UNDER GNU LICENSE
* CREDITE : TOO MANY PEOPLE HELPED ME TO COME OUT WITH THIS MODULE ,
* MOST IMPORTANT ARE THE http://www.phpeasystep.com FOR THE TUTORIAL OF
* Creating a Simple PHP Forum . THAT WHT INSPIRED ME TO MAKE THIS MODULE , AND I USED THE SOURCE CODE
* WITH MY PROJECT .. AND MORE THX TO ..
* FRANKBLACK, MARIANE, Mowaffaq , FOU-LU , DYLIAN , RC-NET WEB SERVICES , ZELFAS , HASSAN EL-7WAJ ,..  GOOGLE :)
* AND MORE THX TO ARABXOOPS.COM COMMUNITY , TRABIS , GHIA AND ALL XOOPS.ORG COMMUNITY , FOR THEM I'M DOING THIS :)
* INFO : THIS MODULE WILL ALLOW YOUR GUESTS/MEMBERS TO SEND YOU EMAIL'S AND THE EMAILS
* WILL BE SAVED TO YOUR DATABASE .. SO SAY BY FOR LOST EMAIL .. NOT ANYMORE .
* IT ALSO ALLOWS YOU TO SEND OUT EMAIL TO ANYONE ..MUCH MORE ..
*/
//SendMe v1.5
define("_MI_SENDME_FOLLOWUP","اجازه پیگیری پیغام");
define("_MI_SENDME_FOLLOWUP_DESC","اگه بله باشد ؛ کاربر میتواند این پیغام را در ضورت داشتن پاسخ پیگیری کند");
define("_MI_SENDME_NOTIFY","با خبر کردن ادمین هنگام دریافت ایمیل جدید");

define("_MI_SENDME_ADNOTFIYSUB","شما ایمیل جدید دارید");
define("_MI_SENDME_ADNOTFIY","یک مهمان ایمیل فرستاد ؛ آیپی مهمان : ");
define("_MI_SENDME_ADNOTFIY1","نظر ارسال شده است");
define("_MI_SENDME_ADNOTFIY2","زمان فرستاده شد");
// Add Message errors
define("_MI_SENDME_NOCOMMENT","شما پیغام را ننوشتید");
define("_MI_SENDME_LONGCOMMENT","پیغام بیش از حد طولانیست");
define("_MI_SENDME_NOTITLE","شما موضوع انتخاب نکردید");
define("_MI_SENDME_NONAME","شما اسمتان را ننوشتید");
define("_MI_SENDME_NOEMAIL","شما ایمیلتات را وارد نکردید");
define("_MI_SENDME_EMAIL_NOT_OK","ایمیل وارد شده صحیح نمیباشد!");
define("_MI_SENDME_NOEMAIL_TO","شما ایمیل گیرنده را وارد نکردید ");
define("_MI_SENDME_ERROR_CODE","اشتباه در وارد کردن کد امنیتی");
define("_MI_SENDME_MESSAGE_SENT","پیغام فرستاده شد ؛ متشکریم");
define("_MI_SENDME_MESSAGE_SENT1","پیغام فرستاده شد برای ایمیل کاربر و  .");
define("_MI_SENDME_ERROR_MESSAGE","امکان فرستادن پیغام نیست ؛ بعدا تلاش کنید!");
define("_MI_SENDME_PASSWORD","یک پسورد وارد کنید ؛ برای پیگیری کردن پیغام");
define("_MI_SENDME_NOPASSWORD","بدون پسورد ");
define("_MI_SENDME_NOTIK_ID","بدون شناسه پیغام ");
define("_MI_SENDME_NOTIK_FOUND","پسورد یا شناسه پیغام اشتباه هست , همچنین ممکن است پیغام پاک شده باشد");

//SEND PAGE
define("_MI_SENDME_INDEX_PAGE","تماس با ما");
define("_MI_SENDME_EMAIL_SEND_NOW","فرستادن");
define("_MI_SENDME_CODE","کد امنیتی را وارد کنید");
define("_MI_SENDME_YOUR_COMMENT","پیغام");
define("_MI_SENDME_YOUR_COMMENTRETURN_NO","بدون پیغام");
define("_MI_SENDME_YOUR_COMMENTRETURN_NO2","پیغام فرستاده شد ؛ شما پیغام را یادداشت کنید ؛ برای پیگیری پیغام لازم است");
define("_MI_SENDME_YOUR_RETURNS","پیگیری پیغام");
define("_MI_SENDME_RETURN_PASSWORD","پسورد");
define("_MI_SENDME_RETURN_TIKET_NO","شناسه پیغام");
define("_MI_SENDME_RETURN_REDIERECT","منتقل کردن شما..");
define("_MI_SENDME_YOUR_COMMENT_COUNTS","Litter Left");
// DropDown
// The List
define("_MI_SENDME_PRORITY","اولویت");
define("_MI_SENDME_PSTATS","Stats");
define("_MI_SENDME_PH","زیاد");
define("_MI_SENDME_PM","متوسط");
define("_MI_SENDME_PK","اوکی");
define("_MI_SENDME_PL","کم");


// DELETE THINGS
define("_MI_ERORR_DELETED","پیغام پاک نمیشود");
define("_MI_DELETED_OK","پیغام پاک شد");
define("_MI_SENDME_DELETEALL","پاک کردن");
define("_MI_SENDME_DELETE_ALERT","هنگامی که پیغام پاک شود تمام جوابیه های پیغام نیز پاک میشود..");

// ATTACHMENT THINGS
define("_MI_SENDME_ATTACHMENTS","فایل ضمیمه");
define("_MI_SENDME_ATTACHMENTS1","فرمت فایل پشتیبانی نمیشود ");
define("_MI_SENDME_ATTACHMENTS2","حجم فایل زیاد است");
define("_MI_SENDME_ATTACHMENTS3","پیغام نمیتواند همراه فایل ضمیمه فرستاده شود ؛ بدون ضمیمه امتحان کنید");
define("_MI_SENDME_ATTACHMENTS4","فایل ضمیمه شد و  ");
define("_MI_SENDME_ATTACHMENTS_MAX_SIZE","حجم فایل ضمیمه");
define("_MI_SENDME_ATTACHMENTS_MAX_SIZEDSC","حداکثر حجم فایل ضمیمه <br> 1048576 ==> 1M");
define("_MI_SENDME_ATTACHMENTS_STORE","قولدر فایلهای ضمیمه");
define("_MI_SENDME_ATTACHMENTS_STOREDSC","سطح دسترسی فولدر را روی 777 بگذارید و فراموش نکنید آن را بگزارید بعد از Path ");
define("_MI_SENDME_ATTACHMENTS_EXT","ضمیمه های مجاز");
define("_MI_SENDME_ATTACHMENTS_EXTDSC","فقط فرمتهای بی خطر را مجاز قرار دهید");
define("_MI_SENDME_ATTACHMENTS_NOT_FOUND","فایل پیدا نشد... از ضحیح بودن فولدر مطمئن شوید");
define("_MI_SENDME_OPENATTACHMENT_ALERT","فایل ضمیمه ممکن است دارای ویروس باشد ؛ ابتدا از ویروسی نبودن آن با اسکن کردن مطلع شوید بعد آن را باز کنید");
//ADMIN INDEX
define("_MI_SENDME_SUBJECT","موضوع");
define("_MI_SENDME_SENDER_NAME","فرستنده");
define("_MI_SENDME_EMAIL","ایمیل");
define("_MI_SENDME_EMAIL2","فرستادن به");
define("_MI_SENDME_SENDTIME","زمان");
define("_MI_SENDME_SENDERIPS","آی پی");
define("_MI_SENDME_ATTACHMENT","فایل ضمیمه");
define("_MI_SENDME_NO_ATTACHMENT","هیچ");

define("_MI_SENDME_SELECTALL","انتخاب همه");
define("_MI_SENDME_DESELECTALL","هیچ انتخاب");
define("_MI_SENDME_REPLYS","پاسخها");
define("_MI_SENDME_STATS","Stats");
define("_MI_SENDME_HOW_MANY_INBOX","پیغام جدید .   ");
define("_MI_SENDME_MSG_INBOX_NO_READ","پیغامهای جدید");
define("_MI_SENDME_MSG_INBOX_OLD","پیغامهای قدیمی");
define("_MI_SENDME_MSG_TOTAL_INBOX","تمام پیغامها");
define("_MI_SENDME_MSG_REPLYS_NO","تمام پاسخها");
define("_MI_SENDME_MSGNEXT","بعدی");
define("_MI_SENDME_MSGPRV","قبلی");
define("_MI_SENDME_SAVEACOPY","نگه داشتن یک کپی");
define("_MI_SENDME_YES","بله");

define("_MI_SENDME_MAINPAGE","صفحه ماژول");
define("_MI_SENDME_ABOUT","نویسنده / مجوز");
define("_MI_SENDME_MOD_NAME","ماژول ");

//ADMIN READ & SEND MESSAGE
define("_MI_SENDME_BY_SUBJECT","موضوع : ");
define("_MI_SENDME_BY_THE_COMMENT","[ پیغام]");
define("_MI_SENDME_BY","فرستاده شده توسط : ");
define("_MI_SENDME_TO","فرستادن به ");
define("_MI_SENDME_SENDER_ADMINNAME","ادمین");
define("_MI_SENDME_SENDER_ADMINRE","پاسخ ادمین ");
define("_MI_SENDME_ADMIN_MESSAGE_SENT","پیغام فرستاده شد... در حال انتقال شما..");
define("_MI_SENDME_EMAIL_BY","ایمیل فرستنده  : ");
define("_MI_SENDME_EMAIL_TO","فرستادن ایمیل به :");
define("_MI_SENDME_SENT_TIME","زمان فرستادن  : ");
define("_MI_SENDME_SENT_IP","آی پی فرستنده  : ");
define("_MI_SENDME_BY_ID","بدون پیغام : ");
define("_MI_SENDME_SENDER_REPLYED","پاسخ : ");
define("_MI_SENDME_SENDER_REPLYEDs","لیست پاسخها");
define("_MI_SENDME_SENDER_THE_Q","سوال مهمان");
define("_MI_SENDME_SENDER_REPLYED_SENT","پاسخ فرستاده شد");
define("_MI_SENDME_SENDER_REPLYED_SAVED","پاسخ در دیتا بیس ذخیره شد و کابر میتواند آن را پیگیری کند.");
define("_MI_SENDME_ERROR_MAIL","ما نمیتوانیم پاسخ را به ایمیل کاربر بفرستیم ؛ ولی ..");
define("_MI_SENDME_SENDER_REPLYED_VIEW_NOW","دیدن پاسخ ");
define("_MD_SENDME_NOMESGID","پیغام پیدا نشد");
define("_MI_SENDME_INBOX_VIEW","خواندن پیغام ");
define("_MI_SENDME_SENDS4","دیدن پیغام : [ ");
define("_MI_SENDME_SENDS_2","]پیغام شما هست .:  ");
define("_MI_SENDME_SENDS3","پیغامهای  : [ ");
define("_MI_SENDME_SENDS_3","شما نوشتید  .. ");
define("_MI_SENDME_SENDS_5","شما این را فرستاید به  ...");
define("_MI_SENDME_BACKTO_ADMIN_SENT","بازگشت به صندوق ورودی");

//ADMIN SAVE COPY MESSAGE
define("_MI_SENDME_MSGNOTALLOWED","کاز نیست");
define("_MI_SENDME_MSG_COMMENT_ADDED_TO_SENT_BOX","یک کپی از پیغام ذخیره شد");
define("_MI_SENDME_MSG_CANT_ADD_TO_SENT_BOX","ناتوانی در ذخیره کپی از پیغام");

//ADMIN MENU
define("_MI_SENDME_GENERALSET","تنظیمات کلی");
define("_MI_SENDME_MSGINBOXSENTSAVED","صندوق خروجی");
define("_MI_SENDME_EMAILADMIN","فرستادن ایمیل");
define("_MI_SENDME_MSGINBOXRETURN","صندوق ورودی");


//SETTING AND CONFIG
define("_MI_SENDME_WIDTH","اندازه پیغام");
define("_MI_SENDME_WIDTHDSC","حداکثر اندازه پیغام ");
define("_MI_SENDME_COMMENT_HEIGH","ارتفاع کادر پیغام");
define("_MI_SENDME_COMMENT_HEIGHDSC","ارتفاع کادر پیغام در فرم");
define("_MI_SENDME_COMMENT_WIDTH","عرض کادر پیغام");
define("_MI_SENDME_COMMENT_WIDTHDSC","عرض کادر پیغام در فرم");
define("_MI_SENDME_PERPAGE","بدون پیغام");
define("_MI_SENDME_PERPAGEDSC","تعداد پیغام قابل دیدن در صفحه مدیریت");
define("_MI_SENDME_CAPTCHA","فعال سازی آنتی اسپم ( Captcha)");
define("_MI_SENDME_CAPTCHADSC","");
define("_MI_SENDME_AD","خبرخوان");
define("_MI_SENDME_ADDESC","متن بالای فرم ارسال");
define("_MI_SENDME_FOOTER","پا صفحه");
define("_MI_SENDME_FOOTER_DESC","متن پایین فرم ارسال");
define("_MI_SENDME_EDITORS","Dhtml ادیتور");
define("_MI_SENDME_EDITORS_DESC","افعال سازی ادیتور Dhtml در فرم ارسال");
define("_MI_SENDME_ALLOWED_type","فرمت فایلهای مجاز");
define("_MI_SENDME_ALLOWED_typeDSC","لیست فرمتهای مجاز ؛ هر کدام را با فاصله از هم جدا کنید <br>image/jpeg <br> image/png <br>image/gif <br> application/zip <br> audio/mpeg <br>audio/x-wav <br>application/pdf <br>application/msword<br>text/plain");
define("_MI_SENDME_FROM_ADMIN_AREA","عنوان پیغام");
define("_MI_SENDME_FROMDSC","عنوان در زمان ارسال پیغام");
define("_MI_SENDME_AUTORESPOND","فعال کردن پاسخ اتوماتیک");
define("_MI_SENDME_AUTORESPOND_DSC"," ");
define("_MI_SENDME_AUTORESPOND_MSG","در صورت فعال کردن پاسخگویی اتوماتیک متن پیشفرض را وارد کنید");
define("_MI_SENDME_AUTORESPOND_MSG_DSC",".");

?>