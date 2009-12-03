<?php
//=========================================================
// WebLinks Module
// language for admin
// 2004-10-20 K.OHWADA
//=========================================================	
// Translated to Persian By :   www.irxoops.org version 1.85
// --- define language begin ---
if( !defined('WEBLINKS_LANG_AM_LOADED') )
{

define('WEBLINKS_LANG_AM_LOADED', 1);

define("_WEBLINKS_ADMIN_INDEX","صفحه ي مديريت");

// BUG 2931: unmatch popup menu 'prefrence' and index menu 'تنظيمات ماژول'
define("_WEBLINKS_ADMIN_MODULE_CONFIG_1","تنظيمات ماژول 1 (سليقه ها )");

define("_WEBLINKS_ADMIN_MODULE_CONFIG_2","تنظيمات ماژول 2");
//define("_WEBLINKS_ADMIN_ADDMODDEL_CATEGORY","اضافه, ويرايش, و  پاک کردن شاخه ها");
define("_WEBLINKS_ADMIN_ADD_LINK","اضافه کردن لينک جديد");
define("_WEBLINKS_ADMIN_OTHERFUNC","عملکرد هاي ديگر");
define("_WEBLINKS_ADMIN_GOTO_ADMIN_INDEX","رفتن به صفحه ي مديريت");

//======	config.php 	======
// Access Authority
define('_WEBLINKS_ADMIN_AUTH','تنظيم دسترسي ها');
define('_WEBLINKS_ADMIN_AUTH_TEXT', 'مدير دسترسي کامل دارد');
define('_WEBLINKS_AUTH_SUBMIT','اجازه ارسال لینک جدید');
define('_WEBLINKS_AUTH_SUBMIT_DSC','گروهی را که می توانند اجازه بدهند لینک جدیدی ارسال بشود را مشخص کنید');
define('_WEBLINKS_AUTH_SUBMIT_AUTO','اجازه قبول کردن لینکهای جدید ارسال شده');
define('_WEBLINKS_AUTH_SUBMIT_AUTO_DSC','گروه هاي که لينک هاي جديد ارسالي شان به طور خودکار تاييد ميشود مشخص کنيد');
define('_WEBLINKS_AUTH_MODIFY','اجازه تغییر یک لینک');
define('_WEBLINKS_AUTH_MODIFY_DSC','گروه هاي که اجازه ي تغيير لينک را ميدهند مشخص کنيد');
define('_WEBLINKS_AUTH_MODIFY_AUTO','اجازه قبول کردن تغییر یک لینک');
define('_WEBLINKS_AUTH_MODIFY_AUTO_DSC','گروهی را که می توانند اجازه بدهند که لینکهای تغییر یافته به صورت خودکار پذیرفته شوند را مشخص کنید');
define('_WEBLINKS_AUTH_RATELINK','اجازه ي امتياز دادن به يک لينک');
define('_WEBLINKS_AUTH_RATELINK_DSC',"گروههاي که اجازه ي امتياز دادن به يک لينک را صادر ميکنند.<br />تنها زماني فعال است که اجازه ي امتايز دادن به لينک صادر شده باشد.");
define('_WEBLINKS_USE_PASSWD','چک کردن رمز هنگام تغییر دادن یک لینک');
define('_WEBLINKS_USE_PASSWD_DSC','قتي بله را انتخاب ميکنيد, <br />اجازه ي تغيير خودکار يک لينک رو نميدهد , <br />و کلمه ي عبور را برسي ميکند. ');
define('_WEBLINKS_USE_RATELINK','به اين لينک امتياز بدهيد');
define('_WEBLINKS_USE_RATELINK_DSC',"وقتي بله را انتخاب ميکنيد, <br />نشان ميدهد 'به اين لينک امتياز بدهيد' و نتيجه ميشود 'دسته بندي'..");
define('_WEBLINKS_AUTH_UPDATED', 'دسترسي ها به روز شد');


// RSS/ATOM
define('_WEBLINKS_ADMIN_RSS',' تنظيمات تغذيه کننده هاي RSS/ATOM');
define('_WEBLINKS_RSS_MODE_AUTO','RSS/ATOM  به روز رسانی خودکار خوراک های');
define('_WEBLINKS_RSS_MODE_AUTO_DSC', "وقتي بله را انتخاب ميکنيد, نمايش داده ميشود 'انجام کشف خودکار ادرس عاي RSS/ATOM' و 'به روز رساني خودکار', وقتي که اطلاعات جزئيات لينک نمايش داده ميشود. ");
define('_WEBLINKS_RSS_MODE_DATA','اطلاعات RSS/ATOM که نمايش داده ميشود');
define('_WEBLINKS_RSS_MODE_DATA_DSC', "وقتی 'خوراک ATOM' را انتخاب کنید, بعد از تجزیه از خوراک ATOM استفاده میشود. <br />وقتی 'XML' را انتخاب کنید, از اطلاعات جدول لینک بعد از تجزیه استفاده میشود. <br />بعد از فیلترینگ ممکن است بعضی از  اطلاعات تغیذه کننده های atom سیو نشود ");
define('_WEBLINKS_RSS_CACHE','زمان کش خوراک های RSS/ATOM');
define('_WEBLINKS_RSS_CACHE_DSC', 'واحد تنظیم 1 ساعته می باشد..');
define('_WEBLINKS_RSS_LIMIT','بیشترین تعداد خوراک های RSS/ATOM');
define('_WEBLINKS_RSS_LIMIT_DSC', 'بزرگترين عدد RSS/ATOM را براي  ذخيره در جدول atom فيد  وارد کنيد<br />اگر ارزش اطلاعات جديد از اطلاعات قديمي بيشتر باشد اطلاعات قديمي پاک ميشود. <br />0 نامحدود است . ');
define('_WEBLINKS_RSS_SITE','سایت جستجوی RSS');
define('_WEBLINKS_RSS_SITE_DSC',"لیست آدرس های RSS را از جستجوی RSS سایت وارد کنید <br />وقتی بیشتر از یک مورد  تعیین کردید با رفتن به خط جدید آن ها را از هم جدا کنید.<br />آدرس ATOM وارد نکنید.. ");
define('_WEBLINKS_RSS_BLACK','لیست سیاه خوراک های RSS/ATOM');
define('_WEBLINKS_RSS_BLACK_DSC','لیست آدرس های را که وقتی خوراک ی RSS/ATOM به آن ها  وصل شد قبول نکنند وارد کنید <br />وقتی بیشتر از یک مورد  تعیین کردید با رفتن به خط جدید آن ها را از هم جدا کنید. <br />You can use the regular expression of perl. ');
define('_WEBLINKS_RSS_WHITE','یست سفید خوراک های RSS/ATOM');
define('_WEBLINKS_RSS_WHITE_DSC','لیست لینک های را که با تطابق با لیست سیاه جمه آوری میشوند وارد کنید <br />وقتی بیشتر از یک مورد  تعیین کردید با رفتن به خط جدید آن ها را از هم جدا کنید. <br />You can use the regular expression of perl. ');
define('_WEBLINKS_RSS_URL_CHECK', 'تعدادی از لینکها با لیست سیاه تطابق پیدا می کند. ');
define('_WEBLINKS_RSS_URL_CHECK_DSC', 'Please copy and paste of the lower white list to a registration form, if you require. ');
define('_WEBLINKS_RSS_UPDATED', 'به روز رسانی تنظیمات RSS/ATOM');


// RSS/ATOM
define('_WEBLINKS_ADMIN_RSS_VIEW','تنظیمات نمایش خوراک های RSS/ATOM');
define('_WEBLINKS_RSS_MODE_TITLE','از تگهای HTML عنوان استفاده شود');
define('_WEBLINKS_RSS_MODE_TITLE_DSC', 'وقتي انخواب ميکنيد "بله", عنوان با تگهاي HTML نمايش داده ميشود  , اگر عنوان تگ HTML داشته باشد. <br />وقتي انتخاب ميکنيد "نه", عنوان با تگ هاي هاشور خورده HTML نمايش داده ميشود. ');
define('_WEBLINKS_RSS_MODE_CONTENT','از تگهای HTML متن اسفاده شود');
define('_WEBLINKS_RSS_MODE_CONTENT_DSC', 'وقتي انتخاب ميکنيد "بله ", تماس با تگهاي HTML نشان داده ميشود, اگر محت  و یات تگهاي HTML داشته باشند. <br />وقتي انتخاب ميکنيد  "نه", تماس هاشور خورده با تگ هاي striping نمايش داده ميشود. ');
define('_WEBLINKS_RSS_NEW','انتخاب کنيد بيشترين  عدد از "تغذيه کننده هاي جديد RSS/ATOM که" نشان داده ميشوند در صفحه');
define('_WEBLINKS_RSS_NEW_DSC', 'وارد کنيد بيشترين مقدار عددي تغزيه کننده هاي RSS/ATOM را که در صفحه ي اصلي نمايش داده ميشوند.');
define('_WEBLINKS_RSS_PERPAGE','تعداد ماکزیمم خوراک های RSS/ATOM و صفحات جزییات لینکها را که در صفحه RSS/ATOM نشان داده می شوند مشخص کنید');
define('_WEBLINKS_RSS_PERPAGE_DSC', 'بزرگترين مقدار عديد تغذيه کننده هاي RSS/ATOM براي براي نمايش در صفحه ي RSS/ATOM وارد کنيد. ');
define('_WEBLINKS_RSS_NUM_CONTENT','تعداد خوراک ها که متن را نمایش می دهند');
define('_WEBLINKS_RSS_NUM_CONTENT_DSC', 'تعداد خوراک های  محتوی RSS/ATOM را که در صفحه ی نمایش ااطلاعات لینک نشان داده میشود وارد کنی <br />خلاصه ی  خوراک های دیگر نمایش داده میشود ');
define('_WEBLINKS_RSS_MAX_CONTENT','ماکزیمم تعداد حروفی که برای نمایش محتوای RSS/ATOM به کار می رود');
define('_WEBLINKS_RSS_MAX_CONTENT_DSC', 'بیشترین تعداد کارکتر های خوراک  های RSS/ATOM را که در صفحه ی نمایش خوراک های RSS/ATOM نشان داده میشود مشخص کنید  <br />این گزینه وقتی قبال استفاده است که " استفاده از تگ های html  درمحتوا " بر روی گزینه ی " خاموش" باشد ');
define('_WEBLINKS_RSS_MAX_SUMMARY','ماکزیمم تعداد حروفی که برای نمایش خلاصه RSS/ATOM به کار می رود');
define('_WEBLINKS_RSS_MAX_SUMMARY_DSC', 'بیشترین تعداد کارکتر های مورد استفاده در توضیح خوراک های اضافی RSS/ATOM که رد صفحه ی اصلی نمایش داده میشود را مشخص کنید ');


// use link field
define('_WEBLINKS_ADMIN_POST','تنظیمات فیلد لینک');
define('_WEBLINKS_ADMIN_POST_TEXT_1', "زمانی که بلا استفاده انتخاب شود گزینه در فرم ارسال نمایش داده نمی شود. ");
define('_WEBLINKS_ADMIN_POST_TEXT_2', "زمانی که استفاده انتخاب شود گزینه در فرم ارسال نمایش داده می شود. ");
define('_WEBLINKS_ADMIN_POST_TEXT_3', "زمانی که حیاتی انتخاب شود گزینه در فرم ارسال نمایش داده می شود و پر شدن آن کنترل می شود. ");
define('_WEBLINKS_NO_USE','بلا استفاده');
define('_WEBLINKS_USE','استفاده');
define('_WEBLINKS_INDISPENSABLE','حیاتی');
define('_WEBLINKS_TYPE_DESC','نوع توضیحات فرم ارسال');
define('_WEBLINKS_TYPE_DESC_DSC', 'وقتي انتخاب کنيد "نه ", <br />از تسکت باکس معمولي  استفاده ميشود.<br />وقتي انتخاب کنيد "بله", <br />از ويرايشگر DHTML زوپس براي توصيف فرم استفاده ميشود. ');
define('_WEBLINKS_CHECK_DOUBLE','ارسال لینکهای موجود را قبول کن');
define('_WEBLINKS_CHECK_DOUBLE_DSC', 'وقتي انتخاب ميکنيد "نه", <br />ثبت از لينک هاي موجود پذيرفته ميشود. <br> وقتي انتخاب ميکنيد  "بله", <br />برسي ميکند ايا تعدادي از لينک ها قبلا موجود بوده اند. ');
define('_WEBLINKS_POST_UPDATED', 'تنظيمات فيلد  لينک ها به روز شد');

// cateogry
define('_WEBLINKS_ADMIN_CAT_SET','تنظیمات شاخه ها');
define('_WEBLINKS_CAT_SEL', 'حداکثر تعداد شاخه های قابل انتخاب');
define('_WEBLINKS_CAT_SEL_DSC', 'حداکثر تعداد شاخه هایی را که برای یک لینک قابل انتخاب هستند را مشخص کنید');
define('_WEBLINKS_CAT_SUB','تعداد زیر شاخه ها');
define('_WEBLINKS_CAT_SUB_DSC','تعداد زیر شاخه های نشان داده شده در ذیل شاخه اصلی در صفحه اصلی');
define('_WEBLINKS_CAT_IMG_MODE','تصویر شاخه را انتخاب کنید');
define('_WEBLINKS_CAT_IMG_MODE_DSC', 'زمانی که هیچ انتخاب شود چیزی نمایش داده نمی شود. <br />زمانی که فولدر انتخاب شود folder.gif نمایش داده می شود. <br />زمانی که شکل تنظیمات انتخاب شود، شکل شاخه مربوطه نشان داده می شود. ');
define("_WEBLINKS_CAT_IMG_MODE_0","هیچ");
define("_WEBLINKS_CAT_IMG_MODE_1","فولدر");
define("_WEBLINKS_CAT_IMG_MODE_2","شکل تنظیمات");
define('_WEBLINKS_CAT_IMG_WIDTH','حداکثر عرض تصویر شاخه ها');
define('_WEBLINKS_CAT_IMG_HEIGHT','حداکثر طول تصویر شاخه ها');
define('_WEBLINKS_CAT_IMG_SIZE_DSC','اثرگذار تنها زمانی که شکل تنظیمات انتخاب شده باشد". ');
define('_WEBLINKS_CAT_UPDATED', 'تنظیمات شاخه ها به روز شد');


//======	cateogry_list.php 	======
define("_WEBLINKS_ADMIN_CATEGORY_MANAGE","مديريت شاخه ها");
define("_WEBLINKS_ADMIN_CATEGORY_LIST","ليست شاخه ها");
//define("_WEBLINKS_ORDER_ID"," ليست به وسيله يID");
define("_WEBLINKS_ORDER_TREE"," ليست درختي");
define("_WEBLINKS_CAT_ORDER","سفارشي کردن شاخه");
define("_WEBLINKS_THERE_ARE_CATEGORY","وجود دارد <b>%s</b> شاخه در پايگاه داده ها");
define("_WEBLINKS_ADMIN_CATEGORY_NOTICE_1","وقتي کليل کنيد روي <b>ID شاخه</b>, صفحه ي ويرايش شاخه نمايش داده ميشود. ");
define("_WEBLINKS_ADMIN_CATEGORY_NOTICE_2","کيليک کنيد  روي<b>منشا شاخه</b> يا <b>تيتر </b>, ليست شاخه هاي سفارشي نمايش داده ميشود. ");
define("_WEBLINKS_NO_CATEGORY","هيچ شاخه ي متناظري وجود ندارد. ");
define("_WEBLINKS_NUM_SUBCAT","تعداد زير شاخه ها");
define('_WEBLINKS_ORDERS_UPDATED', 'به روز رساني شاخه هاي سفارشي');

//======	cateogry_manage.php 	======
define("_WEBLINKS_IMGURL_MAIN","آدرس تصویر شاخه");
define("_WEBLINKS_IMGURL_MAIN_DSC1","این اختیاری است<br />به صورت خودکار اندازه تصویر را تنظیم می کند. ");
define("_WEBLINKS_IMGURL_MAIN_DSC2","این تنها در شاخه اصلی موثر است. ");

//======	link_list.php 	======
define("_WEBLINKS_ADMIN_LINK_MANAGE","مدیریت لینک");
define("_WEBLINKS_ADMIN_LINK_LIST","لیست لینکها");
define("_WEBLINKS_ADMIN_LINK_BROKEN","لیست لینکهای از کار افتاده");
define("_WEBLINKS_ADMIN_LINK_ALL_ASC","لیست تمامی لینکها (مرتب شده بر اساس شناسه قدیمی )");
define("_WEBLINKS_ADMIN_LINK_ALL_DESC","لیست تمامی لینکها (مرتب شده بر اساس شناسه جدید)");
define("_WEBLINKS_ADMIN_LINK_NOURL","لیست لینکهایی که آدرس آنها تعیین نشده است");
define("_WEBLINKS_COUNT_BROKEN","شمارش لیست از کارافتاده");
define("_WEBLINKS_NO_LINK","هیچ لیست متناظری وجود ندارد");
define("_WEBLINKS_ADMIN_PRESENT_SAVE","اطلاعات ذخیره شده در دیتابیس اینجا نشان داده میشود");

//======	link_manage.php 	======
//define("_WEBLINKS_USERID","شناسه استفاده کننده");
//define("_WEBLINKS_CREATE","ایجاد شد");

//======	link_broken_check.php 	======
define("_WEBLINKS_ADMIN_LINK_CHECK_UPDATE","لینک چک و به روز می شود");
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK","چک لینک از کار افتاده ");
define("_WEBLINKS_ADMIN_BROKEN_CHECK","چک");
define("_WEBLINKS_ADMIN_BROKEN_RESULT","چک نتیجه");
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK_CAUTION","یک تاخیر ممکن است اتفاق بیافتد اگر تعداد لینکهای از کار افتاده زیاد باشد <br />پس لطفا مقدار عددی limit را مشخص کنید<br />limit=0 هیچ محدودیتی وجود ندارد<br />");
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK_NOTICE","زمانی که بر روی شناسه لینک کلیک کندی صفحه تغییر لینک باز می شود<br />زمانی که بر روی آدرس سایت کلیک کنید سایت مورد نظر باز می شود<br />");
define("_WEBLINKS_ADMIN_LINK_BROKEN_CHECK_GOOGLE","زمانی که بر روی عنوان وب سایت کلیک کنید صفحه جستجوی گوگل باز می شود<br />");
define("_WEBLINKS_ADMIN_LIMIT","حداکثر تعداد کنترل لینکها");
define("_WEBLINKS_ADMIN_OFFSET","مبدا");
define("_WEBLINKS_ADMIN_CHECK","کنترل");
define("_WEBLINKS_ADMIN_TIME_START","زمان شروع");
define("_WEBLINKS_ADMIN_TIME_END","زمان پایان");
define("_WEBLINKS_ADMIN_TIME_ELAPSE","زمان سپری شده");
define("_WEBLINKS_ADMIN_LINK_NUM_ALL","تمامی لینکها");
define("_WEBLINKS_ADMIN_LINK_NUM_CHECK","انتخاب شده");
define("_WEBLINKS_ADMIN_LINK_NUM_BROKEN","لینکهای از کار افتاده");
define("_WEBLINKS_ADMIN_NUM","لینکها");
define("_WEBLINKS_ADMIN_MIN_SEC","%s min %s sec");
define("_WEBLINKS_ADMIN_CHECK_NEXT","تعداد %s لینک بعدی را چک کن");
define("_WEBLINKS_ADMIN_RSS_REFRESH_NOTE","بصورت همزمان عملیات کشف آدرسهای RSS/ATOM را انجام بده");

//======	rss_manage.php 	======
define("_WEBLINKS_ADMIN_RSS_MANAGE","مدیریت خوراک های RSS/ATOM");
define("_WEBLINKS_ADMIN_RSS_REFRESH","رفرش RSS/ATOM");
define("_WEBLINKS_ADMIN_RSS_REFRESH_LINK","رفرش کش اطلاعات لینک");
define("_WEBLINKS_ADMIN_RSS_REFRESH_SITE","رفرش کش سایت جستجوی RSS");
define("_WEBLINKS_ADMIN_NUM_REFRESH_RSS_URL","تعداد آدرسهای RSS/ATOM رفرش شده");
define("_WEBLINKS_ADMIN_NUM_REFRESH_RSS_SITE","تعداد آدرس سایتهای رفرش شده RSS/ATOM");
define("_WEBLINKS_ADMIN_NUM_REFRESH_ATOM_SITE","تعداد خوراک های RSS/ATOM رفرش شده");
define("_WEBLINKS_ADMIN_NUM_REFRESH_ATOMFEED","تعداد خوراک های RSS/ATOM رفرش شده");
define("_WEBLINKS_ADMIN_RSS_CACHE_CLEAR","پاک کردن کش خوراک های RSS/ATOM");
define("_WEBLINKS_RSS_CLEAR_NUM","اگر بیش از یک خوراک موجود بود کش آنها بر اساس تاریخ قدیمی تر پاک شود");
define("_WEBLINKS_RSS_NUMBER","تعداد خوراک ها");
define("_WEBLINKS_RSS_CLEAR_LID","کش شناسه لینک مشخص شده را پاک کن");
define("_WEBLINKS_RSS_CLEAR_ALL","تمام کش را پاک کن");
define("_WEBLINKS_NUM_RSS_CLEAR_LINK","تعداد کش RSS/ATOM پاک شده");
define("_WEBLINKS_NUM_RSS_CLEAR_ATOMFEED","تعداد خوراک های RSS/ATOM پاک شده");

//======	user_list.php 	======
define("_WEBLINKS_ADMIN_USER_MANAGE", "مدیریت کاربران");
define("_WEBLINKS_ADMIN_USER_EMAIL", "لیست کاربرانی که پست الکترونیک دارند");
define("_WEBLINKS_ADMIN_USER_LINK", "لیست کاربرانی که اطلاعات لینک را دارند");
define("_WEBLINKS_ADMIN_USER_NOLINK", "لیست کاربرانی که هیچ اطلاعات لینکی را ندارند");
define("_WEBLINKS_ADMIN_USER_EMAIL_DSC", "اگر آدرس پست الکترونیک تکراری است تنها یکی را نشان بده");
define("_WEBLINKS_ADMIN_USER_LINK_DSC", 'از ارسال پیغام هسته زوپس استفاده کن');
define("_WEBLINKS_USER_ALL", "(همه)");
define("_WEBLINKS_USER_MAX", " (هر %s نفر) ");
define("_WEBLINKS_THERE_ARE_USER", "<b>%s</b> کاربر یافت شد");
define("_WEBLINKS_USER_NUM", "از نفر %s تا نفر %s را نشان بده");
define("_WEBLINKS_USER_NOFOUND", "هیچ کاربری یافت نشد");
define("_WEBLINKS_UID_EMAIL", "پست الکترونیک ارسال کننده");

//======	mail_users.php 	======
define("_WEBLINKS_ADMIN_SENDMAIL", "ارسال پست الکترونیک");
define("_WEBLINKS_THERE_ARE_EMAIL","تعداد <b>%s</b> پست الکترونیک موجود است");
define("_WEBLINKS_SEND_NUM", "پست الکترونیک را از نفر %s تا نفر %s ارسال کن");
define("_WEBLINKS_SEND_NEXT","تعداد %s پست الکترونیک بعدی را ارسال کن");
define("_WEBLINKS_SUBJECT_FROM", "اطلاعات %s");
define("_WEBLINKS_HELLO", "سلام %s");
define("_WEBLINKS_MAIL_TAGS1","{W_NAME} نام کاربر را ارسال خواهد کرد");
define("_WEBLINKS_MAIL_TAGS2","{W_EMAIL} پست الکترونیک کاربر را ارسال خواهد کرد");
define("_WEBLINKS_MAIL_TAGS3","{W_LID} شناسه لینک کاربر را ارسال خواهد کرد");

// general
define('_WEBLINKS_WEBMASTER', 'مدیر سایت');
define('_WEBLINKS_SUBMITTER', 'ارسال کننده');
//define("_WEBLINKS_MID","تغییر شناسه");
define("_WEBLINKS_UPDATE","به روز رسانی");
define("_WEBLINKS_SET_DEFAULT","تنظیم اولیه");
define("_WEBLINKS_CLEAR","پاک");
define("_WEBLINKS_CHECK","چک");
define("_WEBLINKS_NON","کاری برای انجام نیست");
define("_WEBLINKS_SENDMAIL", "ارسال پست الکترونیک");

// 2005-08-09
// BUG 2827: RSS refresh: Invalid argument supplied for foreach()
define("_WEBLINKS_ADMIN_NO_LINK_BROKEN_CHECK","هيچ لينکي چک نشده");
define("_WEBLINKS_ADMIN_NO_RSS_REFRESH","هيچ لينکي که RSS آپديت شده باشد در اينجا نيست");

// 2005-10-20
define("_WEBLINKS_LINK_APPROVED", "لينک شما تاييد شده");
define("_WEBLINKS_LINK_REFUSED", "لينک شما تاييد نشده");

// 2006-05-15
define('_AM_WEBLINKS_INDEX_DESC','توضيحات در صفحه ي اصلي');
define('_AM_WEBLINKS_INDEX_DESC_DSC', 'متن توضيحات را وارد کنيد,وقتي که لازم داشتيد در صفحه ي اصلي نمايش داده شود.');
define('_AM_WEBLINKS_INDEX_DESC_DEFAULT', '<div align="center" style="color: #0000ff">اين متن  توضيحات ماژول است.<br />شما ميتوانيد اين متن را در تنظيمات ماژول 2 ويرايش کنيد.<br /></div>');

define('_AM_WEBLINKS_ADD_CATEGORY', 'ساخت شاخه ي جديد');
define('_AM_WEBLINKS_ERROR_SOME', 'چند پيام خطا وجود دارد');
define('_AM_WEBLINKS_LIST_ID_ASC',  'ليست  از آي پي هاي قديمي');
define('_AM_WEBLINKS_LIST_ID_DESC', 'ليست از آي پي هاي جديد');

// config
define('_AM_WEBLINKS_WARNING_NOT_WRITABLE','مسیر مورد نظر قابل نوشتن نیست');
define('_AM_WEBLINKS_CONF_LINK','تنظيمات لينک');
define('_AM_WEBLINKS_CONF_LINK_IMAGE','تنظيمات عکس لينک ها');
define('_AM_WEBLINKS_CONF_VIEW','تنظيمات نظر ها');
define('_AM_WEBLINKS_CONF_TOPTEN','تنظيمات ده تاي برتر');
define('_AM_WEBLINKS_CONF_SEARCH',' تنظيمات Seach');

define('_AM_WEBLINKS_USE_BROKENLINK','استفاده از گزارش براي لينک هاي نقض شده');
define('_AM_WEBLINKS_USE_BROKENLINK_DSC','وقتي انتخاب کنيد بله, <br />گزارش لينک هاي شکسته شده فعال ميشد');
define('_AM_WEBLINKS_USE_HITS','استفاده از شمارشگر لينک');
define('_AM_WEBLINKS_USE_HITS_DSC','وقتي انتخاب کنيد بله, <br />فعال کنيد تا شمارش گر لينک بازديد ها را بشمارد');
define('_AM_WEBLINKS_USE_PASSWD','برسي صحت پسورد');
define('_AM_WEBLINKS_USE_PASSWD_DSC','وقتي انتخاب کنيد بله, <br /><b>از کاربر پرسيده ميشود</b>ميتوانيد لينک را ويرايش کنيد با برسي صحت پسورد.<br />وقتي انتخاب شود نه, <br />خطاهاي پسورد نمايش داده نميشود.');
define('_AM_WEBLINKS_PASSWD_MIN','کمترين طول براي پسورد مورد نياز');
define('_AM_WEBLINKS_POST_TEXT', 'مدير دسترسي کامل دارد');
define('_AM_WEBLINKS_AUTH_DOHTML', 'دسترسي براي استفاده از تگ هاي HTML');
define('_AM_WEBLINKS_AUTH_DOHTML_DSC', 'گروهي را که توانايي استفاده از تگ هاي HTML زا دازند انتخاب کنيد');
define('_AM_WEBLINKS_AUTH_DOSMILEY', 'دسترسي براي استفاده از لبخند ها');
define('_AM_WEBLINKS_AUTH_DOSMILEY_DSC', 'گروهي را که توانايي استفاده از لبخند ها را دارند انتخاب کنيد');
define('_AM_WEBLINKS_AUTH_DOXCODE', 'دسترسي براي استفاده از کد هاي زوپس');
define('_AM_WEBLINKS_AUTH_DOXCODE_DSC', 'گروهي را که توانايي استفاده از کد هاي زوپس را دارند انتخاب کنيد');
define('_AM_WEBLINKS_AUTH_DOIMAGE', 'دسترسي براي استفاده از تصوير ها');
define('_AM_WEBLINKS_AUTH_DOIMAGE_DSC', 'گروه هاي را که توانايي استفاده از تصوير ها را دارند انتخابر کنيد');
define('_AM_WEBLINKS_AUTH_DOBR', 'دسترسي براي استفاده از خط شکسته');
define('_AM_WEBLINKS_AUTH_DOBR_DSC', 'گروهي را که توانايي استفاده از خط شکسته را دارند انتخاب کنيد');
define('_AM_WEBLINKS_SHOW_CATLIST','نمايش ليست شاخه ها در يک زير منو');
define('_AM_WEBLINKS_SHOW_CATLIST_DSC','وقتي انتخاب کنيد  بله, <br />ليست بيهترين شاخه ها در يک زير منو نمايش داده ميشود');
define('_AM_WEBLINKS_VIEW_URL',' روش نظر هاي URL');
define('_AM_WEBLINKS_VIEW_URL_DSC','وقتي انتخاب کنيد "هيچ", <br />نمايش داده نميوشد url and  tag..<br />وقتي انتخاب ميکنيد "غير مستقيم", <br />display visit.php in href field instead of URL. <br />وقتي انتخاب کنيد "مستقيم ", <br />display url in href field, JavaScript in onmousedown field and hits is counted via JavaScript.');
define('_AM_WEBLINKS_VIEW_URL_0','هيچ');
define('_AM_WEBLINKS_VIEW_URL_1','غير مستقيم url');
define('_AM_WEBLINKS_VIEW_URL_2','مستقيم  url');
define('_AM_WEBLINKS_RECOMMEND_PRI','اولويت معرفي سايت');
define('_AM_WEBLINKS_RECOMMEND_PRI_DSC','وقتي انتخاب کنيد "هيچ", <br />نمايش داده نميشود.<br />وقتي ر کنيد "معمولي", <br />در بالا نمايش داده ميشود.<br />وقتي انتخاب کنيد "عالي", <br />به عنوان عالي ترين رنک در هر شاخه نمايش داده ميشود.');
define('_AM_WEBLINKS_MUTUAL_PRI','اولويت معکوس سايت');
define('_AM_WEBLINKS_MUTUAL_PRI_DSC','وقتي انتخاب کنيد "هيچ", <br />نمايش داده نميشود.<br />وقتي انتخاب کنيد "معمولي", <br />در بالا نمايش داده ميشود.<br />وقتي انتخاب کنيد "عالي", <br />به عنوان عالي ترين رنک در هر شاخه نمايش داده ميشود.');
define('_AM_WEBLINKS_PRI_0','هيچ');
define('_AM_WEBLINKS_PRI_1','معمولي');
define('_AM_WEBLINKS_PRI_2','عالي');
define('_AM_WEBLINKS_LINK_IMAGE_AUTO','به روز رساني خودکاراندازه ي عکس بنر ها');
define('_AM_WEBLINKS_LINK_IMAGE_AUTO_DSC', "وقتي انتخاب کنيد بله, <br />به طور اتوماتيک سايز بنر به روز رساني ميشود,وقتي اطلاعات ليست لينک ها و جزئيات لينک ها نمايش داده ميشود, if Banner image size is not able to get at registration and change link information.");
define('_AM_WEBLINKS_RSS_USE','استفاده از تغذيه کننده ي RSS');
define('_AM_WEBLINKS_RSS_USE_DSC','وقتي انتخاب شود بله, <br />تغذيه کننده هاي RSS/ATOM نمايش داده ميشود.');

// bulk import
define('_AM_WEBLINKS_BULK_IMPORT','وارد کردن دسته جمعي لينک ها');
define('_AM_WEBLINKS_BULK_IMPORT_FILE','وارد کردن دستجمعي به وسيله ي فايل');
define('_AM_WEBLINKS_BULK_CAT','وارد کردن دسته جمعي از شاخه ها');
define('_AM_WEBLINKS_BULK_CAT_DSC1','توضيحات شاخه ها');
define('_AM_WEBLINKS_BULK_CAT_DSC2','Describe a child category with a left arrow parenthesis (>) at the head of the line.');
define('_AM_WEBLINKS_BULK_LINK','وارد کردن دسته جمعي از يک لينک');
define('_AM_WEBLINKS_BULK_LINK_DSC1', 'توضيحات شاخه ها در خط اول.');
define('_AM_WEBLINKS_BULK_LINK_DSC2', 'Describe title, URL, and explanation which are divided by comma(,) at after the 2nd line.');
define('_AM_WEBLINKS_BULK_LINK_DSC3', 'It can specify repeatedly, when describe horizontal bar (---) .');
define('_AM_WEBLINKS_BULK_ERROR_LAYER','Specified two or more under layers at the category tree structure.');
define('_AM_WEBLINKS_BULK_ERROR_CID','ID شاخه اشتباه');
define('_AM_WEBLINKS_BULK_ERROR_PID','منشاه ID شاخه اشتباه است');
define('_AM_WEBLINKS_BULK_ERROR_FINISH','به وسيله ي ارور پايان يابد');

// command
define('_AM_WEBLINKS_CREATE_CONFIG', 'ساخت فایل پیکر بندی');
define('_AM_WEBLINKS_TEST_EXEC', '%sتست اجرا شده');

// === 2006-10-05 ===
// menu
define('_AM_WEBLINKS_MODULE_CONFIG_3','تنظيمات ماژول 3');
define('_AM_WEBLINKS_MODULE_CONFIG_4','تنظيمات ماژول 4');
define('_AM_WEBLINKS_VOTE_LIST', 'ليست راي ها');
define('_AM_WEBLINKS_CATLINK_LIST', 'ليست لينک هاي شلاقي');
define('_AM_WEBLINKS_COMMAND_MANAGE', 'اداره کردن دستور ها');
define('_AM_WEBLINKS_TABLE_MANAGE',  'اداره کردن جدول هاي پایگاه داده ها');
define('_AM_WEBLINKS_IMPORT_MANAGE', 'اداره کردن ورودی  ها');
define('_AM_WEBLINKS_EXPORT_MANAGE', 'اداره کردن خروجي ها');

// config
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_2','Auth, Cat, etc');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_3','لينک');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_4','RSS, Map');
define('_AM_WEBLINKS_LINK_REGISTER','تنظيمات ثبت لينک');

// bin configuration
define('_AM_WEBLINKS_FORM_BIN', 'تنضيمات دستور ها');
define('_AM_WEBLINKS_FORM_BIN_DESC', 'اين استفاده ميشود در صندوق دستورات');
define('_AM_WEBLINKS_CONF_BIN_PASS','پسورد');
//define('_AM_WEBLINKS_CONF_BIN_PASS_DESC','');
define('_AM_WEBLINKS_CONF_BIN_SEND','فرستادن ميل');
//define('_AM_WEBLINKS_CONF_BIN_SEND_DESC','');
define('_AM_WEBLINKS_CONF_BIN_MAILTO','ايميل فرستاده شد');
//define('_AM_WEBLINKS_CONF_BIN_MAILTO_DESC','');

// rssc
define('_AM_WEBLINKS_RSS_DIRNAME','RSSC Module Dirname');
//define('_AM_WEBLINKS_RSS_DIRNAME_DESC','');

// link manage
define('_AM_WEBLINKS_DEL_LINK', 'پاک کردن لينک');
define('_AM_WEBLINKS_ADD_RSSC', 'اضافه کردن لينک در ماژول RSSC');
define('_AM_WEBLINKS_MOD_RSSC', 'تغيير لينک در ماژول RSSC');
define('_AM_WEBLINKS_REFRESH_RSSC', 'تازه کردن لينک در ماژول RSSC');
define('_AM_WEBLINKS_APPROVE',     'Appove New Link');
define('_AM_WEBLINKS_APPROVE_MOD', 'Appove Modify RequestLink');
define('_AM_WEBLINKS_RSSC_LID_SAVED', 'ذخيره مردن کلاهک rssc');
define('_AM_WEBLINKS_GOTO_LINK_LIST', 'رفتن به ليست لينک');
define('_AM_WEBLINKS_GOTO_LINK_EDIT', 'رفتن به ويرايش لينک');
define('_AM_WEBLINKS_ADD_BANNER', 'وارد کردن اندازه عکس بنر');
define('_AM_WEBLINKS_MOD_BANNER', 'سایز عکس بنر ماژول');

// vote list
define('_AM_WEBLINKS_VOTE_USER', 'راي هاي کاربران ثبت نام شده');
define('_AM_WEBLINKS_VOTE_ANON', 'راي هاي کابران مهمان');

// locate
define('_AM_WEBLINKS_CONF_LOCATE','تنظيمات مکان يابي');
define('_AM_WEBLINKS_CONF_COUNTRY_CODE','کد کشور');
define('_AM_WEBLINKS_CONF_COUNTRY_CODE_DESC', 'کد ccTLDs را وارد کنید <br/> <a href="http://www.iana.org/cctld/cctld-whois.htm" target="_blank">IANA: Country-Code Top-Level Domains</a>');
define('_AM_WEBLINKS_CONF_RENEW_COUNTRY_CODE_DESC', 'Renew the item which relates to the country code. <br/> The item with the <span style="color:#0000ff;">#</span> mark');
define('_AM_WEBLINKS_RENEW', 'Renew');

// map
define('_AM_WEBLINKS_CONF_MAP','تنظيمات نقشه سایت');
define('_AM_WEBLINKS_CONF_MAP_USE','استفاده از نقشه سایت');
define('_AM_WEBLINKS_CONF_MAP_TEMPLATE','تلمپ نقشه ي سايت');
define('_AM_WEBLINKS_CONF_MAP_TEMPLATE_DESC','نام فايل تلمپ را در راهنماي تلمپ /مپ وارد کنيد');

// google map: hacked by wye <http://never-ever.info/>
define('_AM_WEBLINKS_CONF_GOOGLE_MAP','تنظيمات نقشه ي گوگل');
define('_AM_WEBLINKS_CONF_GM_USE','استفاده از نقشه ي گوگل');
define('_AM_WEBLINKS_CONF_GM_APIKEY','کليد هاي API نقشه ي گوگل');
define('_AM_WEBLINKS_CONF_GM_APIKEY_DESC', 'وقتی نقشه های گوگل را تنظیم کردید کلید های API را از<br/> <a href="http://www.google.com/apis/maps/signup.html" target="_blank">http://www.google.com/apis/maps/signup.html</a> <br/> بگیرید.' );
define('_AM_WEBLINKS_CONF_GM_SERVER','نام سرور');
define('_AM_WEBLINKS_CONF_GM_LANG',  'کد زبان');
define('_AM_WEBLINKS_CONF_GM_LOCATION', 'مکان پيش فرض');
define('_AM_WEBLINKS_CONF_GM_LATITUDE', 'عرض جغرافياي پيش فرض');
define('_AM_WEBLINKS_CONF_GM_LONGITUDE','طول جغرافياي پيش فرض');
define('_AM_WEBLINKS_CONF_GM_ZOOM',     'مرحله ي زوم پيش فرض');

// google search
define('_AM_WEBLINKS_CONF_GOOGLE_SEARCH','تنظيمات جستجوي گوگل');
define('_AM_WEBLINKS_CONF_GOOGLE_SERVER','نام سرور');
define('_AM_WEBLINKS_CONF_GOOGLE_LANG',  'کد زبان');

// template
define('_AM_WEBLINKS_CONF_TEMPLATE','پاک کردن کش تلمپ ها');
define('_AM_WEBLINKS_CONF_TEMPLATE_DESC','وقتي template/xml/ و template/map/ در شاخه تمپلیت ها تغيير ميکند بايد اجرا شود');

// === 2006-12-11 ===
// link item
define('_AM_WEBLINKS_TIME_PUBLISH','تنظیم زمان انتشار');
define('_AM_WEBLINKS_TIME_PUBLISH_DESC','اگر شما این گزینه را چک نکنید زمان انتشار بدون  دیتا میماند');
define('_AM_WEBLINKS_TIME_EXPIRE','تنظیم زمان انقضا');
define('_AM_WEBLINKS_TIME_EXPIRE_DESC','اگر شما این گزینه را چک نکنید زمان انقضل بدون دیتا میماند');
define('_AM_WEBLINKS_LINK_TIME_PUBLISH_BEFORE','لیست لینک ها بر اساس زمان انتشار');
define('_AM_WEBLINKS_LINK_TIME_EXPIRE_AFTER',  'لیست لینک ها بر اساس زمان انقضا');

define('_AM_WEBLINKS_SERVER_ENV','محیط سرور');
define('_AM_WEBLINKS_DEBUG_CONF','وضعیت خطاگیری');
define('_AM_WEBLINKS_ALL_GREEN','همه سبز ( بدون مشکل)');

// === 2007-02-20 ===
// performance
define('_AM_WEBLINKS_UPDATE_CAT_PATH','مسیر درختی شاخه به روز شد');
define('_AM_WEBLINKS_UPDATE_CAT_COUNT','شمار لینک های شاخه به روز شد');
define('_AM_WEBLINKS_CAT_COUNT_UPDATED','مسیر شاخه درختی به روز شد');

// config
define('_AM_WEBLINKS_SYSTEM_POST_LINK','شرط داشتن پست برای ارسال لینک');
define('_AM_WEBLINKS_SYSTEM_POST_LINK_DSC','بله , تعداد پست های کاربران زوپس  هنگام ارسال لینک. ');
define('_AM_WEBLINKS_SYSTEM_POST_RATE','شرط داشتن پست برای رای دادن به لینک');
define('_AM_WEBLINKS_SYSTEM_POST_RATE_DSC','بله , تعداد پست های کاربران زوپس موقع رای دادن به لینک. ');

define('_AM_WEBLINKS_VIEW_STYLE_CAT','روش نمایش در هر شاخه');
define('_AM_WEBLINKS_VIEW_STYLE_MARK','روش نمایش درسایت معرفی شده');
define('_AM_WEBLINKS_VIEW_STYLE_MARK_DSC','این گزینه در سایت معرفی شده کار خواهد کرد, سایت متقابل ( معکوس ), RSS/ATOM سایت');
define('_AM_WEBLINKS_VIEW_STYLE_0','خلاصه');
define('_AM_WEBLINKS_VIEW_STYLE_1','اطلاعات کامل');

define('_AM_WEBLINKS_CONF_PERFORMANCE','بهینه سازی کردن');
define('_AM_WEBLINKS_CONF_PERFORMANCE_DSC','Because of the performance improvement, it computes necessary data beforehand when showing, and it stores in the database.<br />When using in first time, execute "category list" -> "Update category path tree"');
define('_AM_WEBLINKS_CAT_PATH','مسیر درختی شاخه');
define('_AM_WEBLINKS_CAT_PATH_DSC','بله مسیر های درختی شاخه را تخمین بزن و در جودل شاخه ها در پایگاه داده ها ذخیره کن.<br />نه در موقع نمایش محاصبه نکن.');
define('_AM_WEBLINKS_CAT_COUNT','شمارش لینک های شاخه');
define('_AM_WEBLINKS_CAT_COUNT_DSC','بله تعداد لینک های درون شاخه را تخمین بزن و در جدول  شاخه ها در پایگاه داده ها ذخیره کن.<br />نه در موقع نمایش محاصبه نکن.');

define('_AM_WEBLINKS_POST_TEXT_4', 'تمام این گزینه ها در صفحهی مدیریت نمایش داده میشود');
define('_AM_WEBLINKS_LINK_REGISTER_1','تنظیمات لینک: محل متن 1');

define('_AM_WEBLINKS_CONF_LINK_GUEST','پیکر بندی گزینه های ثبت لینک');
define('_AM_WEBLINKS_USE_CAPTCHA','استفاده از تصاویر امنیتی');
define('_AM_WEBLINKS_USE_CAPTCHA_DSC','تصاویر امنیتی برای مقابله با هرز نامه ها به کار میرود.<br />ایگ گزینه به نصب ماژول ها تصاویر امنیتی نیاز دارد.<br />بله, <b>کاربر</b> برای اضافه یا ویرایش لینک از تصاویر امنیتی استفاده میکند.<br />نه . فیلد تصاویر امنیتی نمایش داده نمیشود.');
define('_AM_WEBLINKS_CAPTCHA_FINDED',     'نسخه %s ماژول تصاویر امنیتی پیدا شد');
define('_AM_WEBLINKS_CAPTCHA_NOT_FINDED', 'ماژول تصاویر امنیتی نصب نشده است');

define('_AM_WEBLINKS_CONF_SUBMIT', 'توضیحات فرم ثبت لینک');
define('_AM_WEBLINKS_SUBMIT_MAIN',    'توضیحات اضافه کردن لینک جدید: 1');
define('_AM_WEBLINKS_SUBMIT_PENDING', 'توضیحات اضافه کردن لینک جدید: 2');
define('_AM_WEBLINKS_SUBMIT_DOUBLE',  'توضیحات اضافه کردن لینک جدید: 3');
define('_AM_WEBLINKS_SUBMIT_MAIN_DSC',   'همیشه نمایش داده میشود');
define('_AM_WEBLINKS_SUBMIT_PENDING_DSC','وقتی نمایش داده مشود که "" نیاز به تایید مدیر باشد"');
define('_AM_WEBLINKS_SUBMIT_DOUBLE_DSC', 'وقتی نمایش داده میشود که"وجود لینک یکسان چک شود" ');

define('_AM_WEBLINKS_MODLINK_MAIN',     'توضیحات ویرایش لینک: 1');
define('_AM_WEBLINKS_MODLINK_PENDING',  'توضیحات ویرایش لینک: 2');
define('_AM_WEBLINKS_MODLINK_NOT_OWNER','توضیحات ویرایش لینک: 3');
define('_AM_WEBLINKS_MODLINK_NOT_OWNER_DSC','Show when "admin need approve" mode" mode and not owner');

define('_AM_WEBLINKS_CONF_CAT_FORUM', 'دیدن انجمن در شاخه');
define('_AM_WEBLINKS_CONF_LINK_FORUM', 'دیدن انجمن در لینک');
define('_AM_WEBLINKS_FORUM_SEL', 'نوع ماژول انجمن خود را انتخاب کنید');
define('_AM_WEBLINKS_FORUM_THREAD_LIMIT', 'تعداد زنجیر های نمایش داده شده');
define('_AM_WEBLINKS_FORUM_POST_LIMIT', 'تعداد پست های نمایش داده شده در هر زنجیر');
define('_AM_WEBLINKS_FORUM_POST_ORDER', 'ترتیب پست ها');
define('_AM_WEBLINKS_FORUM_POST_ORDER_0', 'اطلاعات پست های قدیمی');
define('_AM_WEBLINKS_FORUM_POST_ORDER_1', 'اطلاعات پست های جدید');
define('_AM_WEBLINKS_FORUM_INSTALLED',     'ماژول انجمن های ( %s ) نسخه ی %s نصب شده است');
define('_AM_WEBLINKS_FORUM_NOT_INSTALLED', 'ماژول انجمن ( %s ) نصب نشده است');

// === 2007-03-25 ===
define('_AM_WEBLINKS_UPDATE_CAT_IMAGE_SIZE','به روز کردن اندازه تصویر شاخه');

define('_AM_WEBLINKS_CONF_INDEX', 'تنضیمات صفحه اصلی');
define('_AM_WEBLINKS_CONF_INDEX_GM_MODE', 'شکل نقشه گوگل');

define('_AM_WEBLINKS_CAT_SHOW_GM',   'نمایش نقشه گوگل');
define('_AM_WEBLINKS_MODE_NON',       'نمایش نده');
define('_AM_WEBLINKS_MODE_DEFAULT',   'تنظیمات پیشفرض');
define('_AM_WEBLINKS_MODE_PARENT',    'مثل شاخه والد');
define('_AM_WEBLINKS_MODE_FOLLOWING', 'تنظیمات زیر');

define('_AM_WEBLINKS_CONF_CAT_ALBUM',  'دیدن آلبوم در شاخه');
define('_AM_WEBLINKS_CONF_LINK_ALBUM', 'دیدن آلبوم در لینک');
//define('_AM_WEBLINKS_ALBUM_SEL', 'Select Album module');
define('_AM_WEBLINKS_ALBUM_LIMIT', 'تعداد تصاویر نمایش داده شده');
define('_AM_WEBLINKS_WHEN_OMIT', 'وقتی پردازش از قلم افتاد');

define('_AM_WEBLINKS_MODULE_INSTALLED',     'ماژول %s ( %s ) نسخه %s نصب شده است');
define('_AM_WEBLINKS_MODULE_NOT_INSTALLED', 'ماژول %s ( %s ) نصب نشده است');

// === 2007-04-08 ===
define('_AM_WEBLINKS_CAT_DESC_MODE',  'نمایش توضیحات');
define('_AM_WEBLINKS_CAT_SHOW_FORUM', 'نمایش فرم');
define('_AM_WEBLINKS_CAT_SHOW_ALBUM', 'نمایش آلبوم');
define('_AM_WEBLINKS_MODE_SETTING',   'مقدار تنظیم شده');
define('_AM_WEBLINKS_MODE_OMIT_PARENT', 'یکنواخت کردن به وسلیه شاخه والد وقتی از قلم افتاد');

// === 2007-06-10 ===
// d3forum
define('_AM_WEBLINKS_CONF_D3FORUM', 'یکپارچگی نظر ها برای ماژول d3forum');
define('_AM_WEBLINKS_PLUGIN_SEL',   'انتخاب پلاگین');
define('_AM_WEBLINKS_DIRNAME_SEL',  'انتخاب ماژول');

// category
define('_AM_WEBLINKS_CAT_PATH_STYLE', 'نمایش Style بسته شاخه');

// category page
define('_AM_WEBLINKS_CONF_CAT_PAGE', 'صفحه تنظیم شاخه');
define('_AM_WEBLINKS_CAT_COLS', 'تعداد ستون ها در شاخه');
define('_AM_WEBLINKS_CAT_COLS_DESC', 'در صفحه شاخه , مشخص کنید تعداد ستون ها را, وقتی شاخه زیر یک سلسله مراتب نمایش داده میشود');
define('_AM_WEBLINKS_CAT_SUB_MODE', 'دیدن تغییرات زیر شاخه ها');
define('_AM_WEBLINKS_CAT_SUB_MODE_1', 'فقط شاخه های زیر سلسله مراتب');
define('_AM_WEBLINKS_CAT_SUB_MODE_2', 'تمام شاخه های زیر سلسله مراتب و خارج از آن');

// === 2007-07-14 ===
// highlight
define('_AM_WEBLINKS_USE_HIGHLIGHT', 'استفاده از سایه روشن کلمات کلیدی');
define('_AM_WEBLINKS_CHECK_MAIL', 'برسی شکل ایمیل');
define('_AM_WEBLINKS_CHECK_MAIL_DSC', 'NO allows any format. <br /> YES checks that email format is like abc@efg.com when register link. ');
define('_AM_WEBLINKS_NO_EMAIL', 'آدرس ایمیل تنظیم نشده');

// === 2007-08-01 ===
// config
define('_AM_WEBLINKS_MODULE_CONFIG_0','تنظیمات ماژول');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_0','صفحه اصلی');
define('_AM_WEBLINKS_MODULE_CONFIG_5','تنظیمات ماژول 5');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_5','گزینه های ثبت لینک');
define('_AM_WEBLINKS_MODULE_CONFIG_6','تنظیمات ماژول 6');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_6','نقشه گوگل');

// google map
define('_AM_WEBLINKS_GM_MAP_CONT',  'کنترل نقشه');
define('_AM_WEBLINKS_GM_MAP_CONT_DESC',  'GLargeMapControl, GSmallMapControl, GSmallZoomControl');
define('_AM_WEBLINKS_GM_MAP_CONT_NON',   'بدون نمایش');
define('_AM_WEBLINKS_GM_MAP_CONT_LARGE', 'کنترل بزرگ');
define('_AM_WEBLINKS_GM_MAP_CONT_SMALL', 'کنترل کوچک');
define('_AM_WEBLINKS_GM_MAP_CONT_ZOOM',  'کنترل زوم');
define('_AM_WEBLINKS_GM_USE_TYPE_CONT',  'استفاده از کنترل نوع نقشه');
define('_AM_WEBLINKS_GM_USE_TYPE_CONT_DESC',  'GMapTypeControl');
define('_AM_WEBLINKS_GM_USE_SCALE_CONT',  'استفاده از کنترل Scale');
define('_AM_WEBLINKS_GM_USE_SCALE_CONT_DESC',  'GScaleControl');
define('_AM_WEBLINKS_GM_USE_OVERVIEW_CONT',  'استفاده از کنترل بازدید نقشه');
define('_AM_WEBLINKS_GM_USE_OVERVIEW_CONT_DESC',  'GOverviewMapControl');
define('_AM_WEBLINKS_GM_MAP_TYPE', '[جستجو] نوع نقشه');
define('_AM_WEBLINKS_GM_MAP_TYPE_DESC', 'GMapType');
define('_AM_WEBLINKS_GM_GEOCODE_KIND',  '[Œںچُ] Kind of Geocode');
define('_AM_WEBLINKS_GM_GEOCODE_KIND_DESC',  'Search latitude and longitude from address<br /><b>Single Result</b><br />GClientGeocoder - getLatLng<br /><b>More Results</b><br />GClientGeocoder - getLocations');
define('_AM_WEBLINKS_GM_GEOCODE_KIND_LATLNG', 'Single Result: getLatLng');
define('_AM_WEBLINKS_GM_GEOCODE_KIND_LOCATIONS',   'More Results: getLocations');
define('_AM_WEBLINKS_GM_USE_GEOCODE_TOKYO',  '[جستجو][Japan] Use CSIS');
define('_AM_WEBLINKS_GM_USE_GEOCODE_TOKYO_DESC',  'Valid in Japan<br />Search latitude and longitude from address');
define('_AM_WEBLINKS_GM_USE_NISHIOKA',  '[جستجو][Japan] Use Inverse Geocode');
define('_AM_WEBLINKS_GM_USE_NISHIOKA_DESC',  'Valid in Japan<br />Search address from latitude and longitude<br /><a href="http://nishioka.sakura.ne.jp/google/" target="_blank">http://nishioka.sakura.ne.jp/google/</a>');
define('_AM_WEBLINKS_GM_TITLE_LENGTH',  '[علامت] بیشترین تعداد کارکتر ها برای عنوان');
define('_AM_WEBLINKS_GM_TITLE_LENGTH_DESC',  'بیشترین تعداد کارکتر های استفاده شده در عنوان<br /><b>-1</b> بدون محدودیت است');
define('_AM_WEBLINKS_GM_DESC_LENGTH',  '[علامت] بیشترین تعداد کارکتر ها برای  متن');
define('_AM_WEBLINKS_GM_DESC_LENGTH_DESC',  'بیشترین تعداد کارکتر های استفاده شده در متن<br /><b>-1</b> بدون محدودیت است');
define('_AM_WEBLINKS_GM_WORDWRAP',  '[علامت] بیشترین تعداد کارکتر ها برای wordwarp');
define('_AM_WEBLINKS_GM_WORDWRAP_DESC',  'بیشترین تعداد کارکتر های استفاده شده در در هر خط<br /><b>-1</b> بدون محدودیت است');
define('_AM_WEBLINKS_GM_USE_CENTER_MARKER',  '[علامت] نمایش علامت وسط');
define('_AM_WEBLINKS_GM_USE_CENTER_MARKER_DESC',  'در صفحه اصلی و صفحه شاخه ها, علامت وسط نمایش داده میشود');

// map jp
define('_AM_WEBLINKS_MAP_JP_MANAGE', 'تنظیمات نقشه کشور ژاپن');

// column
define('_AM_WEBLINKS_COLUMN_MANAGE', 'مدیریت ستون ها');
define('_AM_WEBLINKS_COLUMN_MANAGE_DESC', 'اضافه کردن ستون ها به جدول لینک و ویاریش جدول');
define('_AM_WEBLINKS_COLUMN_MANAGE_NOT_USE', 'استفاده نمیشود');
define('_AM_WEBLINKS_THERE_ARE_COLUMN', 'تعداد <b>%s</b> ستون در در لینک جدول ها وجود دارد');
define('_AM_WEBLINKS_COLUMN_NUM', 'تعدا اضافه شده های هر ستون');
define('_AM_WEBLINKS_COLUMN_BIGGER_USE', 'The number of the etc columns is bigger than the number in link table');
define('_AM_WEBLINKS_COLUMN_UNMATCH',  'The columns is unmatch in link table and modify table');
define('_AM_WEBLINKS_PHPMYADMIN',  'اطلاح دردن در ابزار های مدیریت مثل phpMyAdmin');
define('_AM_WEBLINKS_LINK_NUM_ETC', 'تعداد ستون ها');

// latest
define('_AM_WEBLINKS_INDEX_MODE_LATEST', 'Order of Latest Links');
define('_AM_WEBLINKS_INDEX_MODE_LATEST_UPDATE', 'زمان به روز رسانی');
define('_AM_WEBLINKS_INDEX_MODE_LATEST_CREATE', 'زمان سایخت');

// header
define('_AM_WEBLINKS_CONF_HTML_STYLE', 'پیکربندی سبک HTML');
define('_AM_WEBLINKS_HEADER_MODE', 'استفاده از هدر ماژول زوپس');
define('_AM_WEBLINKS_HEADER_MODE_DESC', 'وقتی روی "نه" است , style sheet و Javascript را در بدنه نمایش بده<br />وقتی بر روی "بله" است, آنها را در تگ هدر نمایش بده, از هدر ماژول های زوپس استفاده کن<br />در بعضی از قالب های قابل استفاده نیست');

// bulk
define('_AM_WEBLINKS_BULK_SAMPLE','شما میتوانید نمونه را ببینید, بر روی دکمه نمونه کلیک کنید');
define('_AM_WEBLINKS_BULK_LINK_DSC10','ثبت این موارد تنظیم شد');
define('_AM_WEBLINKS_BULK_LINK_DSC20','مدیر به طور اختصاصی میتواند مواردی را ثبت کند');
define('_AM_WEBLINKS_BULK_LINK_DSC21','پاراگراف اول');
define('_AM_WEBLINKS_BULK_LINK_DSC22','پاراگراف دوم, و ادامه');
define('_AM_WEBLINKS_BULK_LINK_DSC23','Input the register item names on the 1st line.<br />Input horizontal bar (---)');
define('_AM_WEBLINKS_BULK_LINK_DSC24','Describe the register items, by the order of in the first paragraph, divided by a comma(,) on the 2nd line.');
define('_AM_WEBLINKS_BULK_CHECK_URL','برای تنظیم لینک کلیک کنید');
define('_AM_WEBLINKS_BULK_CHECK_DESCRIPTION','برای تنظیم توضیحات برسی کنید');

// === 2007-09-01 ===
// auth
define('_AM_WEBLINKS_AUTH_DELETE','اجازه حذف لینک');
define('_AM_WEBLINKS_AUTH_DELETE_DSC','گروه های را که میتوانند درخواست حذف لینک ها را بدهند انتخاب کنید');
define('_AM_WEBLINKS_AUTH_DELETE_AUTO','اجازه تایید حذف لینک');
define('_AM_WEBLINKS_AUTH_DELETE_AUTO_DSC','گروه های که میتوانند درخواست حذف لینک را تایید کنند انتخاب کنید');

// nofitication
define('_AM_WEBLINKS_NOTIFICATION_MANAGE', 'مدیریت آگاهی رسانی ها');
define('_AM_WEBLINKS_NOTIFICATION_MANAGE_DESC', 'تنظیم شود برای تمام مدیران این ماژول<br />این بخش مشابه صفحه اول ماژول است');
define('_AM_WEBLINKS_NOTIFICATION_MANAGE_NOT_USE', "شما نمیتوانید از این گزینه ها در بعضی از نسخه های زوپس استفاده کنید");
define('_AM_WEBLINKS_NOTIFICATION_MANAGE_PLEASE', 'در نتیجه, لطفا در صفحه اول ماژول از آن استفاده کنید');
define('_AM_WEBLINKS_SUBJ_LINK_MOD_APPROVED', '[{X_SITENAME}] {X_MODULE}: درخواست ویرایش لینک شما پذیرفته شد');
define('_AM_WEBLINKS_SUBJ_LINK_MOD_REFUSED',  '[{X_SITENAME}] {X_MODULE}: درخواست ویرایش لینک شما پذیرفته نشد');
define('_AM_WEBLINKS_SUBJ_LINK_DEL_APPROVED', '[{X_SITENAME}] {X_MODULE}: درخواست حذف لینک شما پذیرفته شد');
define('_AM_WEBLINKS_SUBJ_LINK_DEL_REFUSED',  '[{X_SITENAME}] {X_MODULE}: درخواست حذف لینک شما پذیرفته نشد');

// config
define('_AM_WEBLINKS_ADMIN_WAITING_SHOW', 'نمایش لیست منتظر ها برای تایید مدیر');
define('_AM_WEBLINKS_USER_WAITING_NUM',   'تعداد لینک های  لیست انتضار کاربر');
define('_AM_WEBLINKS_USER_OWNER_NUM',     'تعداد ارسال شده های لیست انتظار کاربر');
define('_AM_WEBLINKS_USE_HITS_SINGLELINK','بالاترین بازدید وقتی لینک تنها نمایش داده میشود');
define('_AM_WEBLINKS_USE_HITS_SINGLELINK_DSC','بله بالاترین بازدید وقتی لینک تنها نمایش داده میشود را فعال کن');
define('_AM_WEBLINKS_MODE_RANDOM', 'به یک پرش تصادفی برو');
define('_AM_WEBLINKS_MODE_RANDOM_URL', 'ثبت آدرس سایت');
define('_AM_WEBLINKS_MODE_RANDOM_SINGLE', 'لینک تنها در این ماژول');

// request list
define('_AM_WEBLINKS_DEL_REQS', 'لیست لینک های حذف شده برای تایید');
define('_AM_WEBLINKS_NO_DEL_REQ','No Link Deletion Request');
define('_AM_WEBLINKS_DEL_REQ_DELETED','Deletion Request Deleted');

// link list
define('_AM_WEBLINKS_LINK_USERCOMMENT_DESC','لیست لینک های دارای نظر برای مدیر (لیست شده به وسیله ID جدید)');

// clone
define('_AM_WEBLINKS_CLONE_LINK', 'تکثیر');
define('_AM_WEBLINKS_CLONE_MODULE', 'تکثیر به ماژول های دیگر');
define('_AM_WEBLINKS_CLONE_CONFIRM', 'Confirm to clone');
define('_AM_WEBLINKS_NO_MODULE', 'هیچ ماژول متناظری وجود ندارد');

// link form
define('_AM_WEBLINKS_MODIFIED', 'ویرایش');
define('_AM_WEBLINKS_CHECK_CONFIRM', 'Confrimed');
define('_AM_WEBLINKS_WARN_CONFIRM', 'Warning: Check to "Confirmed" of %s');
define('_AM_WEBLINKS_RSSC_LID_EXIST_MORE', 'There are twe or more links which have same "RSSC ID"');

// web shot
define('_AM_WEBLINKS_LINK_IMG_THUMB', 'تعویض با تصویر لینک');
define('_AM_WEBLINKS_LINK_IMG_THUMB_DSC', 'نمایش تصویر بند انگشتی وب سایت در تصویر لینک, <br />استفاده از وب سرور تصاویر بند انگشتی, <br />اگر  تصور لینک تنظیم نشود.');
define('_AM_WEBLINKS_LINK_IMG_NON', 'none');
define('_AM_WEBLINKS_LINK_IMG_MOZSHOT', 'Use <a href="http://mozshot.nemui.org/" target="_blank">MozShot</a>');
define('_AM_WEBLINKS_LINK_IMG_SIMPLEAPI', 'Use <a href="http://img.simpleapi.net/" target="_blank">SimpleAPI</a>');

// === 2007-11-01 ===
// google map
define('_AM_WEBLINKS_GM_MARKER_WIDTH',  '[Marker] عرض (پیکسل)');
define('_AM_WEBLINKS_GM_MARKER_WIDTH_DESC',  'Width of map marker info<br /><b>-1</b> is unspecifid');
define('_AM_WEBLINKS_LINK_IMG_USE', 'Use %s');

define('_AM_WEBLINKS_RSS_SITE', 'این سایت');
define('_AM_WEBLINKS_RSS_FEED', 'خوراک های RSS');

// nameflag mainflag
define('_AM_WEBLINKS_CONF_LINK_USER','پیکر بندی ثبت لینک کاربران');
define('_AM_WEBLINKS_USER_NAMEFLAG','Select view of nameflag');
define('_AM_WEBLINKS_USER_MAILFLAG','Select view of mailflag');
define('_AM_WEBLINKS_USER_NAME_MAIL_FLAG_DESC','The default value when the user register<br />The admin can change value');
define('_AM_WEBLINKS_USER_NAME_MAIL_FLAG_SEL','انتخاب به وسیله کاربر');

// description length
define('_AM_WEBLINKS_DESC_LENGTH', 'بیشترین طول کارکتر ها');
define('_AM_WEBLINKS_DESC_LENGTH_DSC', '<b>-1</b> یا در مدیریت : محدود به 64KB<br />');

// === 2007-12-09 ===
define("_AM_WEBLINKS_D3FORUM_VIEW", "شکل نمایش نظر ها");

// === 2008-02-17 ===
// config
define('_AM_WEBLINKS_MODULE_CONFIG_7','تنظیمات ماژول 7');
define('_AM_WEBLINKS_MODULE_CONFIG_DESC_7','منو');
define('_AM_WEBLINKS_CONF_MENU', 'دیدن از منو');
define('_AM_WEBLINKS_CONF_MENU_DESC', 'تنظیمات این بخش نحوه نمایش در منو را مشخص میکند');
define('_AM_WEBLINKS_CONF_TITLE','عنوان در منو');

// htmlout
define('_AM_WEBLINKS_OUTPUT_PLUGIN_MANAGE', 'HTML مدیریت پلاگین خروجی');
define('_AM_WEBLINKS_HTMLOUT', 'HTML پلاگین خروجی');
define('_AM_WEBLINKS_RSSOUT',  'RSS پلاگین خروجی');
define('_AM_WEBLINKS_KMLOUT',  'KML پلاگین خروجی');

// pagerank
define('_AM_WEBLINKS_LINK_CHECK_MANAGE', 'مدیریت برسی لینک');
define('_AM_WEBLINKS_USE_PAGERANK', 'نمایش PageRank');
define('_AM_WEBLINKS_USE_PAGERANK_DESC', '"نمایش" : نمایش pagerank در منو, لیست لینک ها, لینک تنها');
define('_AM_WEBLINKS_USE_PAGERANK_NON',   'نمایش نده');
define('_AM_WEBLINKS_USE_PAGERANK_SHOW',  'نمایش بده');
define('_AM_WEBLINKS_USE_PAGERANK_CACHE', 'برای گرفتن pagerank از کش استفاده شود');

// kml
define('_AM_WEBLINKS_KML_USE', 'نمایش KML');

}
// --- define language begin ---

?>