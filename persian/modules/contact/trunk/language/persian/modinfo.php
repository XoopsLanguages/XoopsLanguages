<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// Module Info

// The name of this module
define("_MI_CONTACT_NAME","تماس");
// A brief description of this module
define("_MI_CONTACT_DESC","ایمیل تماس با صفحه");

define('_MI_CONTACT_SETTINGS','تنظیمات');
define('_MI_CONTACT_SETTINGS_DSC','تنظیمات کلی تماس با ما');
define('_MI_CONTACT_GEN','کلی' );
define('_MI_CONTACT_GEN_DSC','تنظیمات عمومی برای شروع و موضوع / تعاریف ایمیل' );

// Config stuff
define("_MI_CONTACT_GETICQ","جمع آوری ICQ" );
define("_MI_CONTACT_GETICQDSC","بله - پرسیدن ICQ" );

define("_MI_CONTACT_ALLOWSENDCONFIRM","اجازه تکرار پیام" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC","بله - چک باکس را برای فرستنده نشان بده"
."" );

define("_MI_CONTACT_GETURL","جمع آوری آدرس کاربر" );
define("_MI_CONTACT_GETURLDSC","بله - آدرس وب کاربر را بپرس" );

define("_MI_CONTACT_GETCOMPANY","جمع آوری اسم شرکت کاربر" );
define("_MI_CONTACT_GETCOMPANYDSC","بله - اسم شرکت کاربر را بپرس" );

define("_MI_CONTACT_GETLOC","جمع آوری موقعیت کاربر" );
define("_MI_CONTACT_GETLOCDSC","بله - موقعیت کاربر را بپرس (آدرس کامل لازم نیست)‏" );

define("_MI_CONTACT_ADDRESS","جمع اوری آدرس کاربر" );
define("_MI_CONTACT_ADDRESSDSC","بله - آدرس کاربر را بپرس" );

define("_MI_CONTACT_INTROHEAD","مقدمه صفحه" );
define("_MI_CONTACT_INTROHEAD_DESC","این متن  یک نمونه است برای <b>متن مقدمه</b>");
define("_MI_CONTACT_INTRO_DEFAULT","لطفا فرم زیر را پر کنید و برای ما بفرستید ؛ <br />در اسرع وقت به شما پاسخ میدهیم!‏");

define("_MI_CONTACT_INTRO","متن مقدمه" );
define("_MI_CONTACT_INTRO_DESC","متن میتواند استفاده شود برای مقدمه <b>تماس با ما</b><br />"
."مثل : گفت و گو ؛ متن خوش آمد ؛ شماره تلفن ؛ ایمیل" );

define("_MI_CONTACT_SECURITY","بررسی امنیتی" );
define("_MI_CONTACT_SECURITYDSC","بله - فعال <b>؛</b> برای تایید اعتبار کاربران ایمیل تماس بفرست.<br />"
."این ممکن است کمک کند به از بین بردن اسپم در <b>تماس با ما</b>!‏" );
	
define("_MI_CONTACT_SITEKEY","کلید تصادفی" );
define("_MI_CONTACT_SITEKEYDSC","ساخت هر نوع کاراکتر تصادفی مخلوط یااعداد برای <b>بررسی امنیتی</b><br />"
."موردهای تصادفی بیشتر!" );

define("_MI_CONTACT_HEAD","عنوان تماس" );
define("_MI_CONTACT_HEADDSC","سرنویس برای فرم تماس با ما");
define("_MI_CONTACT_HEADDEFAULT","فرم تماس");

define("_MI_CONTACT_THANKYOU","بابت پیام متشکریم");
define("_MI_CONTACT_THANKYOUDSC","پیام تشکر برای فرستنده");
define("_MI_CONTACT_THANKYOUDEFAULT","با تشکر از شما برای تماس با من ؛ من به زودی به شما پاسخ خواهم داد");

define("_MI_CONTACT_TIMEOUT","اتمام وقت ریدایرکت صفحه");
define("_MI_CONTACT_TIMEOUTDSC","مقدار ثانیه ای که بعد از فرستادن پیام صفحه ریدایرکت ظاهر میشود");

define("_MI_CONTACT_SHOWDEPT","نمایش \"گروه/موضوع\" بخش");
define("_MI_CONTACT_SHOWDEPTDSC","بله - نمایش منوی کشویی با تعریف واحد / نفر<br />"
."اگر هیچ گروهی نشان داده نشد ؛ تمام ایمیل های تماس با ما به ایمیل سایت فرستاده شود" );

define("_MI_CONTACT_DEPTTITLE","\"گروه/موضوع\" تیتر");
define("_MI_CONTACT_DEPTTITLEDSC","تیتر نشان داده شود در \"گروه/عنوان\" بخشی از فرم تماس با ما");
define("_MI_CONTACT_DEPTTITLEDEFAULT","بخش");

define("_MI_CONTACT_DEPT","بخشها" );
define("_MI_CONTACT_DEPTDSC","بخشها به شما توانایی تعریف بخش/ایمیل ترکیبی را میدهد . انتخاب اعضا<br />"
."از بخش تعریف اطلاعات تماس به مکاتبه کننده فرستاده میشود<br />"
."آدرس ایمیل تعریف کنید<br /><br />"
."هر یک از بخش/ایمیل را به صورت زیر تعریف کنید :‏<br /><br />"
."بخش1,ایمیل1 | بخش دو,ایمیل2 <br />"
." هر بخش و ایمیل باید بوسیله کاما ',' از هم جدا شود و همچنین هر قسمت شامل بخش و ایمیل بوسیله ' | ' از هم جدا شوند" );

define("_MI_CONTACT_VALIDATEDOMAIN","تشخیص اعتبار دامین ایمیل");
define("_MI_CONTACT_VALIDATEDOMAINDSC","بله - فعال \"بررسی عمیق\"<br />"
."نه - بررسی ساده ایمیل وارد شده");

define("_MI_CONTACT_SHOWMOREINFO","نمایش \"اطلاعات بیشتر\" بخش" );
define("_MI_CONTACT_SHOWMOREINFODSC","بله - نمایش بخش با امکان انتخاب چند گزینه ای توسط کاربر \"اطلاعات بیشتر\"");

define("_MI_CONTACT_MOREINFOTITLE","\"اطلاعات بیشتر\" عنوان" );
define("_MI_CONTACT_MOREINFOTITLEDSC","عنوان نشان داده شود در \"اطلاعات بیشتر\" بخشی از فرم تماس" );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","درخواست اطلاعات بیشتر");

define("_MI_CONTACT_MOREINFO","\"اطلاعات بیشتر\" آیتمها");
define("_MI_CONTACT_MOREINFODSC","\"اطلاعات بیشتر\" آیتمها به شما امکان تعیین آیتمهایی که کاربر میتواند غیر فعال کند را میدهد<br />"
."برای مصلحت و یا نیاز به اطلاعات بیشتر ؛ این راهیست برای هدایت مشتریان<br />"
.""
.""
.""
."هر آیتم را به صورت زیر تعیین کنید:<br /><br />"
."آیتم1|آیتم2|آیتم3 - هر آیتم را بوسیله ' | ' از هم جدا کنید");

?>