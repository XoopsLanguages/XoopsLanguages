<?php
//=========================================================
// WebLinks Module
// language for admin
// 2004-10-20 K.OHWADA
//=========================================================	
// Translated to Persian By :   www.irxoops.org version 1.85
// --- define language begin ---
if( !defined('WEBLINKS_LANG_MI_LOADED') )
{

define('WEBLINKS_LANG_MI_LOADED', 1);

//---------------------------------------------------------
// same as mylinks
//---------------------------------------------------------
// The name of this module
define("_MI_WEBLINKS_NAME","لينکهاي وب");

// A brief description of this module
define("_MI_WEBLINKS_DESC","يک قسمت لينکها وب درست مي کند که کاربران مي توانند با استفاده از آن لينک جديد اضافه، حذف و یا ارزيابي کنند.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WEBLINKS_BNAME1","لينکهاي جديد");
define("_MI_WEBLINKS_BNAME2","لينکها با ارزيابي بالا");
define("_MI_WEBLINKS_BNAME3","لينکهاي محبوب");

// Sub menu titles
define("_MI_WEBLINKS_SMNAME1","ارسال");
define("_MI_WEBLINKS_SMNAME2","سايت محبوب");
define("_MI_WEBLINKS_SMNAME3","سايت با ارزيابي بالا");

// Names of admin menu items
define("_MI_WEBLINKS_ADMENU1","تنظيم ماژول 2");
define("_MI_WEBLINKS_ADMENU2","مديريت شاخه ها");
define("_MI_WEBLINKS_ADMENU3","مديريت لينکها");
define("_MI_WEBLINKS_ADMENU4","اضافه کردن لينک جديد");
define("_MI_WEBLINKS_ADMENU5","لينکهاي جديد در انتظار تاييد");
define("_MI_WEBLINKS_ADMENU6","لينکهاي تغيير يافته جديد در انتظار تاييد");
define("_MI_WEBLINKS_ADMENU7","گزارش لينکهاي از کار افتاده");;
//define("_MI_WEBLINKS_ADMENU8","چک کننده ي لينک");

//-------------------------------------
// Title of config items
// Description of each config items
//-------------------------------------
define('_MI_WEBLINKS_POPULAR', 'تعداد بازدید های که لازم است تا لینک محبوب شود را مشخص کنید');
define('_MI_WEBLINKS_POPULARDSC', 'کمترين مقدار برخورودی را که لازم است تا آيکون محبوب نمايش  داده شود <br /> زماني که 0 انتخاب شود نمايش داده نمي شود ');
define('_MI_WEBLINKS_NEWLINKS', 'حداکثر تعداد لينکهايي را که در صفحه اصلي نمايش داده مي شوند مشخص کنيد ');

//define('_MI_WEBLINKS_NEWLINKSDSC', 'بيشترين تعداد لينکي را که در بلاک لينک هاي جديد نمايش داده ميشوند وارد کنيد. ');
define('_MI_WEBLINKS_NEWLINKSDSC', 'حداکثر تعداد لينکهايي را که در صفحه اصلي نمايش داده مي شوند مشخص کنيد');

define('_MI_WEBLINKS_PERPAGE', 'حداکثر تعداد لينکهايي را که در هر صفحه نمايش داده مي شوند مشخص کنيد');
define('_MI_WEBLINKS_PERPAGEDSC', 'حداکثر تعداد لينکهايي را که در هر صفحه با جزييات نمايش داده مي شوند مشخص کنيد');

//define('_MI_WEBLINKS_USESHOTS', 'گزينه بله را انتخاب کنيد تا تصوير لينک در مقابل آن نمايش داده شود');
//define('_MI_WEBLINKS_USESHOTSDSC', '');
//define('_MI_WEBLINKS_SHOTWIDTH', 'بيشترين عرضي که براي هر يک از عکس هاي (( اسکرين شات )) اجازه داده ميشود');
//define('_MI_WEBLINKS_SHOTWIDTHDSC', '');

//define('_MI_WEBLINKS_ANONPOST','کاربر مهمان اجازه ي ارسال عکس دارد؟');
//define('_MI_WEBLINKS_AUTOAPPROVE','لينک هاي جديد توسط مدير تاييد شود؟');
//define('_MI_WEBLINKS_AUTOAPPROVEDSC','');

//-------------------------------------
// Text for notifications
//-------------------------------------
define('_MI_WEBLINKS_GLOBAL_NOTIFY', 'عمومي');
define('_MI_WEBLINKS_GLOBAL_NOTIFYDSC', 'اختيارات عمومي آگاهي رساني لينکها');

define('_MI_WEBLINKS_CATEGORY_NOTIFY', 'شاخه');
define('_MI_WEBLINKS_CATEGORY_NOTIFYDSC', 'اختيارات آگاهي رساني که به شاخه همين لينک مربوط مي شوند');

define('_MI_WEBLINKS_LINK_NOTIFY', 'لينک');
define('_MI_WEBLINKS_LINK_NOTIFYDSC', 'اختيارات آگاهي رساني که به همين لينک مربوط مي شوند');

define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'شاخه جديد');
define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'زماني که يک شاخه لينک جديد ساخته شد مرا با خبر کن');
define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'دريافت اطلاعات در هنگام ساخت شاخه لينک جديد');
define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} خبر رساني خودکار : ايجاد شاخه لينک جديد');

define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'تغيير لينک درخواست شده است');
define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'مرا از هر درخواست تغيير لينک با خبر کن');
define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'دريافت اطلاعات هر زمان که درخواست تغيير لينکي ارسال مي شود');
define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : درخواست تغيير لينک ارسال شد');

define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'لينک از کار افتاده ارسال شد');
define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'مر از هر گزارش لينک از کار افتاده مطلع کن');
define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'دريافت اطلاعات هر زمان که گزارش از کارافتادگي لينکي ارسال مي شود');
define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : لينک از کار افتاده گزارش شد');

define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'لينک جديد ارسال شد');
define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'مرا از ارسال هر لينک جديدي مطلع کن (در انتظار تاييد)');
define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'دريافت اطلاعات در هنگام ارسال هر لينک جديد (در انتظار تاييد)');
define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : لينک جديد ارسال شد');

define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFY', 'لينک جديد');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'مرا از اضافه شدن هر لينک جديدي مطلع کن');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'دريافت اطلاعات هر زمان که لينک جديدي اضافه مي شود');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : لينک جديد');

define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFY', 'لينک جديد ارسال شد');
define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'مرا از ارسال لينک جديد به اين شاخه مطلع کن (در انتظار تاييد)');
define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'دريافت اطلاعات هر زمان که لينک جديدي به اين شاخه اضافه مي شود (در انتظار تاييد)');
define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : لينک جديد در اين شاخه ارسال شد');

define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFY', 'لينک جديد');
define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'مرا از اضافه شدن لينک جديد به اين شاخه مطلع کن');
define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'دريافت اطلاعات در هنگام اضافه شدن لينک جديد به اين شاخه');
define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : لينک جديد در اين شاخه');

define('_MI_WEBLINKS_LINK_APPROVE_NOTIFY', 'لينک قبول شد');
define('_MI_WEBLINKS_LINK_APPROVE_NOTIFYCAP', 'مرا از قبول شدن اين لينک مطلع کن');
define('_MI_WEBLINKS_LINK_APPROVE_NOTIFYDSC', 'دريافت اطلاعات در هنگام قبول شدن اين لينک');
define('_MI_WEBLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} آگاهي رساني خودکار : لينک قبول شد');


//---------------------------------------------------------
// weblinks
//---------------------------------------------------------
// === Names of blocks for this module ===
define("_MI_WEBLINKS_BNAME4","ليست شاخه هاي لينکهاي وب");
define("_MI_WEBLINKS_BNAME5","آخرين تغذيه کننده هاي RSS/ATOM لينکهاي وب");
define("_MI_WEBLINKS_BNAME6","وبلاگ لينکها را نمايش بده");

//-------------------------------------
// Title of config items
//-------------------------------------
define('_MI_WEBLINKS_LOGOSHOW','نشان دادن تصوير لوگوي ماژول');
define('_MI_WEBLINKS_LOGOSHOWDSC', 'بله را براي نمايش لوگوي ماژول انتخاب کنيد');

define('_MI_WEBLINKS_TITLESHOW','عنوان ماژول را انتخاب کنيد');
define('_MI_WEBLINKS_TITLESHOWDSC', 'بله را براي نشان دادن عنوان ماژول انتخاب کنيد');

define('_MI_WEBLINKS_NEWDAYS', 'تعداد روزهاي را که لينک جديد محسوب مي شود را مشخص کنيد');
define('_MI_WEBLINKS_NEWDAYS_DSC', 'تعداد برخوردهاي لازم براي نشان دادن آيکون جديد را مشخص فرماييد<br /> زماني که 0 انتخاب شود نمايش داده نمي شود');

define('_MI_WEBLINKS_DESCSHORT', 'حداکثر کاراکتر براي نمايش توضيحات ليست لينکها');
define('_MI_WEBLINKS_DESCSHORTDSC', 'حداکثر کاراکترهايي را که براي نمايش توضيحات ليست لينکها مورد استفاده قرار مي گيرد را مشخص کنيد');

define('_MI_WEBLINKS_ORDERBY', 'مشخصه اوليه مرتب سازي بر روي اطلاعات لينکها');
define('_MI_WEBLINKS_ORDERBYDSC', 'مشخصه اوليه مرتب سازي بر روي اطلاعات لينکها را وارد کنيد.');
define("_MI_WEBLINKS_ORDERBY0","عنوان (الف تا ي)");
define("_MI_WEBLINKS_ORDERBY1","عنوان (ي تا الف)");
define("_MI_WEBLINKS_ORDERBY2","تاريخ (ترتيب صعودي)");
define("_MI_WEBLINKS_ORDERBY3","تاريخ (ترتيب نزولي)");
define("_MI_WEBLINKS_ORDERBY4","امتياز (ترتيب صعودي)");
define("_MI_WEBLINKS_ORDERBY5","امتياز (ترتيب نزولي)");
define("_MI_WEBLINKS_ORDERBY6","محبوبيت (ترتيب صعودي)");
define("_MI_WEBLINKS_ORDERBY7","محبوبيت (ترتيب نزولي)");

define('_MI_WEBLINKS_SEARCH_LINKS','اعداد لينکهايي که در هر صفحه نتيجه جستجو نمايش داده مي شوند');
define('_MI_WEBLINKS_SEARCH_LINKSDSC', 'حداکثر تعداد لينکهايي را که در هر صفحه جستجوي نتايج ظاهر مي شوند را وارد کنيد');

define('_MI_WEBLINKS_SEARCH_MIN', 'کمترين تعداد حروف براي جستجو');
define('_MI_WEBLINKS_SEARCH_MINDSC', 'کمترين تعداد مجاز براي کليد جستجو را وارد کنيد');

define('_MI_WEBLINKS_USEFRAMES', 'آيا مي خواهيد که صفحه لينک شده درون يک فريم نمايش داده شود ؟');
define('_MI_WEBLINKS_USEFRAMEDSC', 'درون فريم بودن صفحه لينک');

define('_MI_WEBLINKS_BROKEN','تعداد لينکهاي از کارافتاده جهت توقف نمايش');
define('_MI_WEBLINKS_BROKENDSC', 'تعداد لينکهاي از کار افتاده لازم جهت توقف نمايش را وارد کنيد<br /> زماني که کمتر از اين مقدار باشد به عنوان يک خطاي موقتي در نظر گرفته مي شدو و عملي انجام نمي شود <br />زماني که بالاي اين عدد باشد به عنوان خطاي دائمي در نظر گرفته مي شود و نمايش متوقف مي شود');

define('_MI_WEBLINKS_LISTIMAGE_USE','از تصاوير لينکها براي ليست لينکها استفاده شود');
define('_MI_WEBLINKS_LISTIMAGE_WIDTH','حداکثر عرض يک تصوير لينک');
define('_MI_WEBLINKS_LISTIMAGE_HEIGHT','حداکثر طول يک تصوير لينک');
define('_MI_WEBLINKS_LISTIMAGE_USEDSC', 'بله را انتخاب کنيد تا هنگام نمايش ليست لينکها از تصاوير آنها استفاده شود');

define('_MI_WEBLINKS_LINKIMAGE_USE','از تصاوير لينک براي نشان دادن اطلاعات لينک استفاده شود');
define('_MI_WEBLINKS_LINKIMAGE_WIDTH','حداکثر عرض براي تصوير لينک در هنگام نمايش اطلاعات لينک ');
define('_MI_WEBLINKS_LINKIMAGE_HEIGHT','حداکثر طول براي تصوير لينک در هنگام نمايش اطلاعات لينک');
define('_MI_WEBLINKS_LINKIMAGE_USEDSC', 'بليه را انتخاب کنيد تا هنگام نمايش اطلاهات لينک از تساوير استفاده شود.');

// 2005-10-20 K.OHWADA
define('_MI_WEBLINKS_TOPTEN_STYLE','سبک ده تاي برتر');
define('_MI_WEBLINKS_TOPTEN_STYLE_DSC', 'انتخاب کنيد روش "سايت هاي محبوب" و "بهترين سايت هاي ارزيابي شده". ');
define('_MI_WEBLINKS_TOPTEN_STYLE_0','هر يک از بهترين شاخه ها');
define('_MI_WEBLINKS_TOPTEN_STYLE_1','مخلوط کردن تمام شاخه ها');

define('_MI_WEBLINKS_TOPTEN_LINKS', 'بيشترين تعداد از ده ليک برتر');
define('_MI_WEBLINKS_TOPTEN_LINKS_DSC', 'وارد کنيد بيشتر تعداد لينک هاي را که نمايش داده شود در "سايت هاي محبوب" و "بهترين سايت هاي ارزيابي شده". ');

define('_MI_WEBLINKS_TOPTEN_CATS','بيشتر تعداد شاخه هاي در ده تاي برتر');
define('_MI_WEBLINKS_TOPTEN_CATS_DSC', 'وارد کنيد بيشتر تعداد شاخه هاي را که نمايش داده شوند در "سايت هاي محبوب" و "بهترين سايت هاي ارزيابي شده". <br />timeout occurs, if too many top categories');

// 2006-03-26
// REQ 3807: Description in main page
//define('_MI_WEBLINKS_INDEX_DESC','توصيف در صفحه ي اصلي');
//define('_MI_WEBLINKS_INDEX_DESC_DSC', 'نوشته ي توصيفات رو وارد کنيد, وقتي شما خواستيد نمايش داده شود در صفحه ي اصلي.');
//define('_MI_WEBLINKS_INDEX_DESC_DEFAULT', '<div align="center"><font color="blue">متن توصيفات حاضر است.<br />شما ميتونايد متن توصيفات را ويراش کنيد   از طريق "تنضيمات ماژول"</font><br /></div>');

// 2006-05-15
define('_MI_WEBLINKS_ADMENU0', 'راهنما');

// 2006-11-03
// random block
define('_MI_WEBLINKS_BNAME_RANDOM',  'لینک های تصادفی');
define('_MI_WEBLINKS_BNAME_GENERIC', 'Genric Link Block');

// 2007-04-08
define('_MI_WEBLINKS_BNAME_RANDOM_PHOTO', 'تصاویر تصادفی');

// 2007-09-01
// notification: new_link_admin
define('_MI_WEBLINKS_GLOBAL_NEWLINK_ADMIN', '[مدیر] لینک جدید (with the comment for admin)');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_ADMIN_CAP', '[مدیر] وقتی لینک جدیدی ارسال شد من را با خبر کن (with the comment the admin)');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_ADMIN_DSC', 'این آگاهری رسانی را وقتی لینک جدیدی  ارسال شد دریافت کنید (with the comment for admin)');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_ADMIN_SBJ', '[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : لینک جدید');

// notification: new_link_comment
define('_MI_WEBLINKS_GLOBAL_NEWLINK_COMMENT', '[مدیر] لسنک جدید (if entered the comment for admin)');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_COMMENT_CAP', '[مدیر] وقتی لینک جدیدی ارسال شد من را با خبر کن (if entered the comment the admin)');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_COMMENT_DSC', 'این آگاهری رسانی را وقتی لینک جدیدی  ارسال شد دریافت کنید (if entered the comment for admin)');
define('_MI_WEBLINKS_GLOBAL_NEWLINK_COMMENT_SBJ', '[{X_SITENAME}] {X_MODULE} آگاهی رسانی خودکار : لینک جدید)');

}
// --- define language begin ---

?>