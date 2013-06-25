<?php
/**
 * XOOPS Poll Administration Language Definitions
 *
 * @package::    xoopspoll
 * @subpackage:: defines
 * @version::    $Id: admin.php 11547 2013-05-15 20:47:32Z zyspec $
 */
define("_AM_XOOPSPOLL_DBUPDATED","پایگاه داده با موفقیت به روز شد!");
define("_AM_XOOPSPOLL_POLLCONF","تنظیمات نظرسنجی ها");
define("_AM_XOOPSPOLL_POLLSLIST","فهرست نظر سنجی ها");
define("_AM_XOOPSPOLL_AUTHOR","سازنده این نظر سنجی");
define("_AM_XOOPSPOLL_DISPLAYBLOCK","در بلاک نمایش داده شود؟");
define("_AM_XOOPSPOLL_POLLQUESTION","پرسش نظر سنجی");
define("_AM_XOOPSPOLL_VOTERS","همه رای دهنده ها");
define("_AM_XOOPSPOLL_VOTES","همه رای ها");
define("_AM_XOOPSPOLL_EXPIRATION","تاریخ به پایان رسیدن نظر سنجی");
define("_AM_XOOPSPOLL_EXPIRED","به پایان رسیده است");
define("_AM_XOOPSPOLL_VIEWLOG","دیدن اطلاعات");
define("_AM_XOOPSPOLL_CREATENEWPOLL","ساختن نظر سنجی جدید");
define("_AM_XOOPSPOLL_POLLDESC","شرح نظر سنجی");
define("_AM_XOOPSPOLL_DISPLAYORDER","مکان نظرسنجی");
define("_AM_XOOPSPOLL_ALLOWMULTI","اجازه برای انتخاب چند گزینه؟");
define('_AM_XOOPSPOLL_ALLOWANONYMOUS', "اجازه به کاربران مهمان برای رای دادن؟");
define("_AM_XOOPSPOLL_NOTIFY","وقتی که نظر سنجی تمام شد به سازنده نظر سنجی اطلاع بده؟");
define("_AM_XOOPSPOLL_POLLOPTIONS","گزینه ها");
define("_AM_XOOPSPOLL_EDITPOLL","ویرایش نظر سنجی");
define("_AM_XOOPSPOLL_FORMAT","فرمت: yyyy-mm-dd hh:mm:ss<br> توجه: تاریخ فعلا باید میلادی وارد شود.");
define("_AM_XOOPSPOLL_CURRENTTIME","تاریخ و ساعت در حال حاضر %s است");
define("_AM_XOOPSPOLL_EXPIREDAT","در تاریخ %s به اتمام رسیده است");
define("_AM_XOOPSPOLL_RESTART","این نظر سنجی را دوباره شروع کن");
define("_AM_XOOPSPOLL_ADDMORE","اضافه کردن گزینه های بیشتر");
define("_AM_XOOPSPOLL_RUSUREDEL","آیا اطمینان دارید که میخواهید این نظر سنجی و نظر هایش را حذف کنید؟");
define("_AM_XOOPSPOLL_RESTARTPOLL","نظر سنجی رو دوباره شروع کن");
define("_AM_XOOPSPOLL_RESET","تمام اطلاعات این نظر سنجی پاک شود؟");
define("_AM_XOOPSPOLL_ADDPOLL","اضافه کردن نظر سنجی");

define("_AM_XOOPSPOLL_LOGSLIST","فهرست اطلاعات");
define("_AM_XOOPSPOLL_RETURNLIST","بازگشت به فهرست نظر سنجی ها");
define("_AM_XOOPSPOLL_LOGID","شماره شناسه (ID) رای");
define("_AM_XOOPSPOLL_OPTIONID","انتخاب گزینه");
define("_AM_XOOPSPOLL_IP","آدرس IP");
define("_AM_XOOPSPOLL_VOTER","رای دهنده");
define("_AM_XOOPSPOLL_VOTETIME","زمانی که رای داده شده است.");
//1.32 / 1.33
define('_AM_XOOPSPOLL_HOST_NAME',"نام هاست");

// Text for Admin footer
//define("_AM_XOOPSPOLL_ADMIN_FOOTER","<div class='center smallsmall italic pad5'>XOOPS Poll is maintained by the <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");

define('_AM_XOOPSPOLL_ACTIONS',"عمل ها");
define('_AM_XOOPSPOLL_POLLVOTERS',"کسانی که در این نظر سنجی رای داده اند.");

//1.33
define('_AM_XOOPSPOLL_ERROR_INVALID_POLLID',"شماره شناسه نظر سنجی poll_id صحیح نیست. دوباره تلاش کنید.");

//1.40
define('_AM_XOOPSPOLL_ADMIN_MISSING',"<span style='color: red;'> خطا: باید فریم ورک moduleadmin نصب شده باشد.</span>");
define('_AM_XOOPSPOLL_RESULT_SUM',"خلاصه نتایج نظر سنجی");
define('_AM_XOOPSPOLL_OPTION',"گزینه");
define('_AM_XOOPSPOLL_LABEL',"متن گزینه");
define('_AM_XOOPSPOLL_COUNT',"تعداد رای دهنده");
define('_AM_XOOPSPOLL_CLONE',"تولید یک نظر سنجی مشابه با این یکی");
define('_AM_XOOPSPOLL_CLONE_SUCCESS',"تولید یک نظر سنجی با موفقیت انجام شد");
define('_AM_XOOPSPOLL_CLONE_FAIL',"تولید نظر سنجی جدید ناموفق بود");
define('_AM_XOOPSPOLL_START_TIME',"زمان شروع");
define('_AM_XOOPSPOLL_PM_VOTER',"ارسال پی ام به رای دهنده");
define('_AM_XOOPSPOLL_ERROR_DBUPDATE',"<span style='color: red;'>  پایگاه داده به روز نشد</span>");
//define('_AM_XOOPSPOLL_HELPNOTUPDATED',"Unable to update link text in help file");
define('_AM_XOOPSPOLL_ERROR_UPDATE',"اسکریپت به روز کردن ماژول به درستی اجرا نشد.");
define('_AM_XOOPSPOLL_ERROR_COLUMN',"ستون جدید در جدول درون پایگاه داده ها ساخته نشد : ");
//define('_AM_XOOPSPOLL_HELPNOTFOUND',"%s %s NOT found");
define('_AM_XOOPSPOLL_MULTI_LIMIT',"رای دهنده ها چند گزینه را میتوانند انتخاب کنند؟");
define('_AM_XOOPSPOLL_MULTI_LIMIT_DESC',"فقط وقتی اهمیت دارد که نظر سنجی شما چند انتخابی باشد. اگر صفر 0 را وارد کنید یعنی محدودیتی وجود ندارد و رای دهنده میتواند همه گزینه ها را انتخاب کند.");
define('_AM_XOOPSPOLL_NOTHING_HERE',"چیزی برای به روز کردن وجود ندارد.");
define('_AM_XOOPSPOLL_PREFERENCES',"تنظیمات ماژول");
define('_AM_XOOPSPOLL_OPTION_SETTINGS',"تنظیمات گزینه های نظر سنجی");
define('_AM_XOOPSPOLL_BLIND',"نمایش نتایج نظر سنجی");
define('_AM_XOOPSPOLL_POLL_TIMES',"زمان های نظر سنجی");
define('_AM_XOOPSPOLL_NOTIFY_VOTER',"آگهی رسانی به رای دهنده ها بعد از رای دادن (فقط کاربران عضو سایت)؟");
define('_AM_XOOPSPOLL_IMPORT_UMFRAGE',"وارد کردن اطلاعات از ماژول umfrage");
define('_AM_XOOPSPOLL_RUSUREUMFRAGE',"آیا مطمان هستید که میخواهید نظر سنجی ها را ار ماژول umfrage به این ماژول وارد کنید؟");
define('_AM_XOOPSPOLL_UMFRAGE_INTRO',"تمام نظر سنجی ها را از ماژول umfrage به این ماژول وارد کن.");
define('_AM_XOOPSPOLL_UMFRAGE_STEP1',"سایت خودتان را ببندید");
define('_AM_XOOPSPOLL_UMFRAGE_STEP2',"مطمان شوید که ماژول Umfrage را نصب شده دارد و ماژول فعال است..");
define('_AM_XOOPSPOLL_UMFRAGE_STEP3',"روی دکمه زیر کلیک کنید تا اطلاعات وارد شود.");
define('_AM_XOOPSPOLL_UMFRAGE_STEP4',"نظر سنجی های وارد شده را باز تنظیم کنید..");
define('_AM_XOOPSPOLL_UMFRAGE_STEP5',"سایت خودتان را باز کنید.");
define('_AM_XOOPSPOLL_NEWBB_SUPPORT',"پشتیبانی از ماژول فروم newbb");
define('_AM_XOOPSPOLL_NEWBB_INTRO',"نشان دهنده نظر سنجی هایی که توسط ماژول newbb ساخته شده اند.");
define('_AM_XOOPSPOLL_NEWBB_TOPIC',"تاپیک:");

// datetimepicker language strings
define('_AM_XOOPSPOLL_DTP_CLOSETEXT',"انجام بده");
define('_AM_XOOPSPOLL_DTP_PREVTEXT',"قبلی");
define('_AM_XOOPSPOLL_DTP_NEXTTEXT',"بعدی");
define('_AM_XOOPSPOLL_DTP_CURRENTTEXT',"زمان فعلی");

// NOTE:  the following are each a SINGLE STRING THE PLACEMENT OF single and double quotes is IMPORTANT!
define('_AM_XOOPSPOLL_DTP_MONTHNAMES',"'January','February','March','April','May','June','July','August','September','October','November','December'");
define('_AM_XOOPSPOLL_DTP_MONTHNAMESSHORT',"'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'");
define('_AM_XOOPSPOLL_DTP_DAYNAMES',"'Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'");
define('_AM_XOOPSPOLL_DTP_DAYNAMESSHORT',"'Sun','Mon','Tue','Wed','Thu','Fri','Sat'");
define('_AM_XOOPSPOLL_DTP_DAYNAMESMIN',"'Su','Mo','Tu','We','Th','Fr','Sa'");
// end NOTE
define('_AM_XOOPSPOLL_DTP_WEEKHEADER',"Wk");
define('_AM_XOOPSPOLL_DTP_DATEFORMAT',"yy/mm/dd");
define('_AM_XOOPSPOLL_DTP_TIMEFORMAT',"hh:mm");
define('_AM_XOOPSPOLL_DTP_FIRSTDAY', 1);
define('_AM_XOOPSPOLL_DTP_ISRTL',"false");  // can only be set to 'true' or 'false' (always use ENGLISH true/false)
define('_AM_XOOPSPOLL_DTP_SHOWMONTHAFTERYEAR',"false");
define('_AM_XOOPSPOLL_DTP_YEARSUFFIX', null);
define('_AM_XOOPSPOLL_DTP_TIMEONLYTITLE',"انتخاب زمان");
define('_AM_XOOPSPOLL_DTP_TIMETEXT',"زمان");
define('_AM_XOOPSPOLL_DTP_HOURTEXT',"ساعت");
define('_AM_XOOPSPOLL_DTP_MINUTETEXT',"دقیقه");
define('_AM_XOOPSPOLL_DTP_SECONDTEXT',"ثانیه");
define('_AM_XOOPSPOLL_DTP_MILLISECTEXT',"میلی ثانیه");

// Text for Admin footer
define('_AM_XOOPSPOLL_MAINTAINED_BY',"ماژول xoopspoll توسط");
define('_AM_XOOPSPOLL_MAINTAINTED_TITLE',"بازدید از سایت زوپس");
define('_AM_XOOPSPOLL_MAINTAINTED_TEXT',"افراد سایت زوپس دولاپ شده است.");

//install/upgrade
define('_AM_XOOPSPOLL_UPGRADE_FAILED',"جدول %s در پایگاه داده به روز نشد.");
define('_AM_XOOPSPOLL_LOG_FAILED',"خطایی در به روز کردن ثبت شده های نظر سنجی '%s' رخ داد.");
define('_AM_XOOPSPOLL_OPTION_FAILED',"نمیتوان گزینه '%s' را برای نظر سنجی '%s' ساخت. %s");
define('_AM_XOOPSPOLL_QUESTION_FAILED',"ناتوانی در ساخت نظر سنجی '%s' در پایگاه داده. %s");
define('_AM_XOOPSPOLL_QUESTION_IMPORT_FAILED',"نظر سنجی '%s' به پایگاه داده وارد نشد. %s");
define('_AM_XOOPSPOLL_UMFRAGE_FAILED',"لطفا مطمان شوید ماژول umfrage نصب شده وئ فعال است.");
define('_AM_XOOPSPOLL_IMPORT_FAILED',"خطا در ورود نظر سنجی به پایگاه داده");
define('_AM_XOOPSPOLL_IMPORT_SUCCESS'," تعداد (%d) نظر سنجی از ماژول umfrage به پایگاه داده ها وارد شدند.");