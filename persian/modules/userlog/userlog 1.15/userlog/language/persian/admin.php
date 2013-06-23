<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  userlog module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         userlog language
 * @since           1
 * @author          irmtfan (irmtfan@yahoo.com)
 * @author          The XOOPS Project <www.xoops.org> <www.xoops.ir>
 * @version         $Id: admin.php 1 2013-02-26 16:25:04Z irmtfan $
 */

// admin menus
define("_AM_USERLOG_ADMENU_INDEX","صفحه اصلی");
define("_AM_USERLOG_ADMENU_SETTING","تنظیم برای ثبت");
define("_AM_USERLOG_ADMENU_LOGS","ثبت شده ها");
define("_AM_USERLOG_ADMENU_FILE","مدیر فایل");
define("_AM_USERLOG_ADMENU_STATS","آمار بازدید");
define("_AM_USERLOG_ABOUT","درباره ماژول ثبت فعالیت های کاربران");
// general error
define("_AM_USERLOG_ERROR","یک خطا در حین انجام عملیات اتفاق افتاد .%1\$s");

// setting.php loglog object options
define("_AM_USERLOG_LOG_ID","شماره ثبت");
define("_AM_USERLOG_LOG_ID_DSC","شماره مورد ثبت شده در پایگاه داده.");
define("_AM_USERLOG_LOG_TIME","زمان ثبت");
define("_AM_USERLOG_LOG_TIME_DSC","زمان مورد ثبت شده");
define("_AM_USERLOG_UID","شماره کاربر");
define("_AM_USERLOG_UID_DSC","شماره کاربر ثبت شده");
define("_AM_USERLOG_ADMIN","آیا کاربر دارای دسترسی مدیریت است؟");
define("_AM_USERLOG_ADMIN_DSC","اگر کاربر در قسمتی یا کل سایت دارای دسترسی مدیریت باشد هنگام ثبت شدن آن قسمت گزینه بله ثبت خواهد شد. مثلا وب مستر ها یا ناظران انجمن ها");
define("_AM_USERLOG_PAGEADMIN","آیا صفحه در قسمت مدیریت است؟");
define("_AM_USERLOG_PAGEADMIN_DSC","اگر صفحه ای که دارد ثبت میشود در قسمت مدیریت ماژول باشد بله ثبت خواهد شد.");
define("_AM_USERLOG_GROUPS","گروه ها");
define("_AM_USERLOG_GROUPS_DSC","تمام گروه ها در سایت");
define("_AM_USERLOG_UNAME","نام کاربری");
define("_AM_USERLOG_UNAME_DSC","نام کاربری در پایگاه داده");
define("_AM_USERLOG_LAST_LOGIN","آخرین بازدید");
define("_AM_USERLOG_LAST_LOGIN_DSC","آخرین بازدید کاربر از وب سایت");
define("_AM_USERLOG_USER_IP","IP کاربر");
define("_AM_USERLOG_USER_AGENT","مرورگر کاربر");
define("_AM_USERLOG_URL","لینک");
define("_AM_USERLOG_SCRIPT","نام اسکریپت");
define("_AM_USERLOG_SCRIPT_DSC","نام اسکریپت مثلا در صفحه اصلی سایت index.php خواهد بود.");
define("_AM_USERLOG_REFERER","لینک ارجاع شده (referer)");
define("_AM_USERLOG_PAGETITLE","عنوان صفحه");
define("_AM_USERLOG_MODULE","نام شاخه ماژول");
define("_AM_USERLOG_MODULE_NAME","نام ماژول");
define("_AM_USERLOG_ITEM_NAME","نام آیتم");
define("_AM_USERLOG_ITEM_ID","شماره آیتم");
define("_AM_USERLOG_REQUEST_METHOD","متد دریافت (GET, POST, ...)");
define("_AM_USERLOG_GET","\$_GET");
define("_AM_USERLOG_POST","\$_POST");
define("_AM_USERLOG_REQUEST","\$_REQUEST");
define("_AM_USERLOG_FILES","\$_FILES");
define("_AM_USERLOG_ENV","\$_ENV");
define("_AM_USERLOG_SESSION","نشست ها (SESSIONS)");
define("_AM_USERLOG_COOKIE","کوکی ها");
define("_AM_USERLOG_HEADER","فهرست هدر");
define("_AM_USERLOG_LOGGER","خطاهای زوپس");
define("_AM_USERLOG_SET_ACTIVE","تنظیم فعال است؟");
define("_AM_USERLOG_INSIDE","بازدید کننده هایی که از داخل سایت شما آمده اند ثبت شوند؟");
define("_AM_USERLOG_OUTSIDE","بازدید کننده هایی که از خارج سایت شما آمده اند ثبت شوند؟");
define("_AM_USERLOG_UNSET_PASS","پسورد ها را ثبت نکن؟");
define("_AM_USERLOG_STORE_FILE","در فایل ذخیره شوند؟");
define("_AM_USERLOG_STORE_DB","در پایگاه داده ذخیره شوند؟");
define("_AM_USERLOG_VIEWS","بازدید های کاربر ثبت شوند؟");

// setting.php logset object
define("_AM_USERLOG_SET_ADD","اضافه کردن یک تنظیم برای ثبت");
define("_AM_USERLOG_SET_ID","شماره");
define("_AM_USERLOG_SET_NAME","نام تنظیم");
define("_AM_USERLOG_SET_NAME_DSC","یک نام فارسی یا انگلیسی به دلخواه خود بنویسید");
define("_AM_USERLOG_SET_LOGBY","ثبت از طریق");
define("_AM_USERLOG_SET_LOGBY_DSC","فعالیت کاربران را از طریق گرفتن این مقدار از جدول کاربران ثبت خواهد کرد. اولویت: اگر شماره کاربری وجود دارد ثبت کن وگرنه اگر شماره گروه وجود دارد ثبت کن وگرنه نه اگر شماره ip وجود دارد ثبت کن وگرنه اگر شماره یکتا صفر است همه کاربران را ثبت کن وگرنه  چیزی ثبت نکن.");
define("_AM_USERLOG_SET_UNIQUE_ID","شماره یکتا");
define("_AM_USERLOG_SET_UNIQUE_ID_DSC"," شماره یکتا (مثلا: شماره کاربر=1, شماره گروه=3 (گروه مهمان), ip=66.249.66.1) 0=همه کاربران");
define("_AM_USERLOG_SET_GID","شماره گروه");
define("_AM_USERLOG_SET_IP","IP بازدید کننده");
define("_AM_USERLOG_SET_OPTIONS","گزینه ها");
define("_AM_USERLOG_SET_OPTIONS_DSC","چه اطلاعاتی از کاربر و صفحات بازدید شده را میخواهید ثبت کنید؟<br />
<b>توجه</b>:<br />
- انتخاب هیچ یعنی همه گزینه ها.<br />
- تیک نزدن 'تنظیم فعال است؟' یعنی این تنظیم فعلا متوقف است.<br />
- انتخاب 'بازدید کننده هایی که از داخل/خارج سایت شما آمده اند ثبت شوند؟' یعنی بازدید کننده هایی که لینک ارجاعی (referer) آنها داخل/خارج از دومین وب سایت شما باشد ثبت شوند یا نه.<br />
- انتخاب 'پسورد ها را ثبت نکن؟' یعنی هنگام ورود یا ثبت نام در سایت پسورد وارد شده توسط کاربر ثبت نخواهد شد.<br />
- انتخاب نکردن روش ذخیره سازی (فایل یا پایگاه داده) یعنی ذخیره سازی در پایگاه داده.<br />
- انتخاب ثبت شدن بازدید های کاربر یعنی ثبت شماره کاربری، گروه، نام اسکریپت، نام صفحه، آیا صفحه مدیریت است؟، نام شاخه ماژول، نام ماژول، نام آیتم، شماره آیتم در پایگاه داده.<br />
");
define("_AM_USERLOG_SET_SCOPE","حوزه عملکرد برای ثبت");
define("_AM_USERLOG_SET_SCOPE_DSC","فعالیت کاربران در چه ماژول هایی ثبت شود؟ اگر چیزی انتخاب نکنید یعنی در همه سایت ثبت شود.");

// setting.php add/edit
define("_AM_USERLOG_SET_ERROR","خطا. اطلاعات غلطی وارد کردید!");
define("_AM_USERLOG_SET_CREATE","تنظیم  %1\$s با موفقیت ثبت شد.");
define("_AM_USERLOG_SET_EDIT","تنظیم %1\$s با موفقیت ویرایش شد.");
define("_AM_USERLOG_SET_UPDATE","هشدار! تنظیم ارسالی شما ساخته نشد چون تنظیم دیگری با نام  %1\$s در پایگاه داده با اطلاعات مشابه ثبت از طریق و شماره یکتا وجود داشت. در هر حال این تنظیم با  گزینه های وارد شده توسط شما با موفقیت به روز شد.");
define("_AM_USERLOG_SET_CANCEL","لغو");

// setting.php delete
define("_AM_USERLOG_SET_DELETE_CONFIRM","آیا مطمان هستید که میخواهید تنظیم %1\$s را حذف کنید؟");
define("_AM_USERLOG_SET_DELETE_ERROR","نا توانی در حذف تنظیم %1\$s");
define("_AM_USERLOG_SET_DELETE_SUCCESS","تنظیم %1\$s با موفقیت حذف شد.");

// setting.php create/clean cache
define("_AM_USERLOG_SET_CACHE","فایل کش تنظیم مربوطه با موفقیت ساخته یا ویرایش شد.");
define("_AM_USERLOG_SET_CLEANCACHE","فایل کش تنظیم مربوطه با موفقیت حذف شد.");
define("_AM_USERLOG_SET_CLEANCACHE_ALL","آیا میخواهید همه فایل های کش مربوط به تنظیمات را حذف کنید؟");
define("_AM_USERLOG_SET_CLEANCACHE_SUCCESS","%1\$d عدد فایل کش مربوط به تنظیمات با موفقیت حذف شد.");
define("_AM_USERLOG_SET_CLEANCACHE_NOFILE","هیچ فایل کش مربوط به تنظیم وجود ندارد تا حذف شود.");

// logs.php form
define("_AM_USERLOG_LOGFORM","اطلاعات را در فرم وارد کرده و اینتر کنید یا دکمه ارسال را در زیر صفحه بزنید");

define("_AM_USERLOG_LOGS_PERPAGE","تعداد ثبت شده در هر صفحه");
define("_AM_USERLOG_LOGS_PERPAGE_DSC","عدد پیش فرض %1\$s در قسمت ویژگی های ماژول قابل تغییر است.");
define("_AM_USERLOG_SORT","مرتب سازی بر اساس");
define("_AM_USERLOG_SORT_DSC","یک مقدار را انتخاب کنید تا همه ثبت شده ها بر اساس آن مرنب شوند.");
define("_AM_USERLOG_ORDER","صعودی/نزولی");
define("_AM_USERLOG_ORDER_DSC","صعودی یا نزولی مرتب شوند");

// for all INT logs use these definition
define("_AM_USERLOG_INTGT","%1\$s بزرگتر از");
define("_AM_USERLOG_INTLT","%1\$s کوچکتر از");
define("_AM_USERLOG_TIMEGT","%1\$s از");
define("_AM_USERLOG_TIMELT","%1\$s تا");
define("_AM_USERLOG_INT_FORM","یک '%1\$s' یا چند '%2\$s' با جداسازی توسط کاما بنویسید تا ثبت شده ها بر اساس آن نمایش داده شوند. مثلا: 23,32,12");
define("_AM_USERLOG_INTGT_FORM","یک '%1\$s' .وارد کنید تا تمام '%2\$s' های بزرگتر از آن نمایش داده شوند.");
define("_AM_USERLOG_INTLT_FORM","یک '%1\$s' وارد کنید تا تمام '%2\$s' های کوچکتر از آن نمایش داده شوند.");
define("_AM_USERLOG_TIMEGT_FORM","یک زمان وارد کنید تا %1\$s را از آن زمان به بعد نمایش دهد. اعداد مثبت برای روز ها و اعداد منفی را برای ساعت ها وارد کنید. مثلا: 1 یعنی از یک روز قبل.");
define("_AM_USERLOG_TIMELT_FORM","یک زمان وارد کنید تا %1\$s را تا آن زمان نمایش دهد. اعداد مثبت برای روز ها و اعداد منفی را برای ساعت ها وارد کنید. مثلا: 1 یعنی تا یک روز قبل.");
// Translators: do not touch below for now
// START DO NOT TOUCH
define("_AM_USERLOG_LOG_ID_FORM",_AM_USERLOG_INT_FORM);
define("_AM_USERLOG_LOG_IDGT",sprintf(_AM_USERLOG_INTGT,_AM_USERLOG_LOG_ID));
define("_AM_USERLOG_LOG_IDGT_FORM",_AM_USERLOG_INTGT_FORM);
define("_AM_USERLOG_LOG_IDLT",sprintf(_AM_USERLOG_INTLT,_AM_USERLOG_LOG_ID));
define("_AM_USERLOG_LOG_IDLT_FORM",_AM_USERLOG_INTLT_FORM);

define("_AM_USERLOG_LOG_TIMEGT",sprintf(_AM_USERLOG_TIMEGT,_AM_USERLOG_LOG_TIME));
define("_AM_USERLOG_LOG_TIMEGT_FORM",sprintf(_AM_USERLOG_TIMEGT_FORM,_AM_USERLOG_LOG_TIME));
define("_AM_USERLOG_LOG_TIMELT",sprintf(_AM_USERLOG_TIMELT,_AM_USERLOG_LOG_TIME));
define("_AM_USERLOG_LOG_TIMELT_FORM",sprintf(_AM_USERLOG_TIMELT_FORM,_AM_USERLOG_LOG_TIME));

define("_AM_USERLOG_UID_FORM",_AM_USERLOG_INT_FORM);
define("_AM_USERLOG_UIDGT",sprintf(_AM_USERLOG_INTGT,_AM_USERLOG_UID));
define("_AM_USERLOG_UIDGT_FORM",_AM_USERLOG_INTGT_FORM);
define("_AM_USERLOG_UIDLT",sprintf(_AM_USERLOG_INTLT,_AM_USERLOG_UID));
define("_AM_USERLOG_UIDLT_FORM",_AM_USERLOG_INTLT_FORM);

define("_AM_USERLOG_LAST_LOGINGT",sprintf(_AM_USERLOG_TIMEGT,_AM_USERLOG_LAST_LOGIN));
define("_AM_USERLOG_LAST_LOGINGT_FORM",sprintf(_AM_USERLOG_TIMEGT_FORM,_AM_USERLOG_LAST_LOGIN));
define("_AM_USERLOG_LAST_LOGINLT",sprintf(_AM_USERLOG_TIMELT,_AM_USERLOG_LAST_LOGIN));
define("_AM_USERLOG_LAST_LOGINLT_FORM",sprintf(_AM_USERLOG_TIMELT_FORM,_AM_USERLOG_LAST_LOGIN));

define("_AM_USERLOG_ITEM_ID_FORM",_AM_USERLOG_INT_FORM);
define("_AM_USERLOG_ITEM_IDGT",sprintf(_AM_USERLOG_INTGT,_AM_USERLOG_ITEM_ID));
define("_AM_USERLOG_ITEM_IDGT_FORM",_AM_USERLOG_INTGT_FORM);
define("_AM_USERLOG_ITEM_IDLT",sprintf(_AM_USERLOG_INTLT,_AM_USERLOG_ITEM_ID));
define("_AM_USERLOG_ITEM_IDLT_FORM",_AM_USERLOG_INTLT_FORM);
// END DO NOT TOUCH

define("_AM_USERLOG_ADMIN_FORM","بله را انتخاب کنید تا تمام ثبت شده های کاربران دارای دسترسی مدیریت را نمایش دهد.");
define("_AM_USERLOG_PAGEADMIN_FORM","بله را انتخاب کنید تا تمام صفحات مدیریت ماژول ها را نمایش دهد.");
define("_AM_USERLOG_GROUPS_FORM","یک گروه را با پیشوند 'g' وارد کنید (و یا چندین گروه با جداسازی توسط کاما) تا تمام ثبت شده های مربوط به اعضای متعلق به آن گروه ها را نمایش دهد. اگر با پیشوند '!g' وارد کنید اعضایی را که متعلق به آن گروه ها نیستند را نمایش میدهد. مثلا: g1,g2,!g4 یعنی همه کاربران متعلق به گروه های یک یا دو ولی آنهایی که متعلق به گروه چهار نیستند.4");

// for all other text logs use just one definition
define("_AM_USERLOG_TEXT_FORM","یک '%1\$s' کامل یا قسمتی از '%2\$s' را بنویسید تا ثبت شده های تمام کاربران دارای آن را نمایش دهد (با پیشوند '!' تمام کاربرانی که دارای آن نیستند). شما میتوانید چندین مورد را با جداسازی توسط کاما وارد کنید. مثلا: TERM1, !TERM2, TERM3 یعنی تمام آنهایی که دارای TERM1 و TERM3 هستند ولی TERM2 را ندارند.");
// Translators: do not touch below for now
// START DO NOT TOUCH
define("_AM_USERLOG_UNAME_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_USER_IP_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_USER_AGENT_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_URL_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_SCRIPT_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_REFERER_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_PAGETITLE_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_MODULE_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_MODULE_NAME_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_ITEM_NAME_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_REQUEST_METHOD_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_GET_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_POST_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_REQUEST_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_FILES_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_ENV_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_SESSION_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_COOKIE_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_HEADER_FORM",_AM_USERLOG_TEXT_FORM);
define("_AM_USERLOG_LOGGER_FORM",_AM_USERLOG_TEXT_FORM);
// END DO NOT TOUCH
// logs.php engine/file
define("_AM_USERLOG_ENGINE","محل ذخیره");
define("_AM_USERLOG_ENGINE_DSC","مکان ذخیره را وارد کنید تا ثبت شده ها از آنجا خوانده شوند.");
define("_AM_USERLOG_ENGINE_FILE","فایل");
define("_AM_USERLOG_ENGINE_DB","پایگاه داده");
define("_AM_USERLOG_FILE","فایل ها");
define("_AM_USERLOG_FILE_DSC","فایل هایی را که میخواهید بخوانید انتخاب کنید.");
define("_AM_USERLOG_FILE_WORKING","فایل در حال کار");

// logs.php error
define("_AM_USERLOG_LOG_ERROR","هیچ موردی با این شرایط پیدا نشد.");
define("_AM_USERLOG_LOG_STATUS","%1\$s مورد پیدا شد.");
define("_AM_USERLOG_LOG_PAGE","صفحه");

// logs.php delete
define("_AM_USERLOG_LOG_DELETE_SELECT","حذف موارد انتخابی در این صفحه.");
define("_AM_USERLOG_LOG_PURGE_ALL","حذف تمام موارد پیدا شده در تمام صفحات");
define("_AM_USERLOG_LOG_DELETE_CONFIRM","آیا مطمانید که میخواهید حذف کنید؟ موارد کاملا از پایگاه داده حذف خواهند شد.");
define("_AM_USERLOG_LOG_DELETE_SUCCESS","%1\$d مورد با موفقیت حذف شد.");
define("_AM_USERLOG_LOG_DELETE_SUCCESS_QUERY","%1\$d مورد با موفقیت با شرایط '%2\$s' حذف شد.");
define("_AM_USERLOG_LOG_DELETE_ERROR","خطا. شرایط حذف اشتباه است.");
define("_AM_USERLOG_LOG_DELETE_ERRORSELECT","هیچ موردی برای حذف انتخاب نکرده اید.");

// logs.php select
define("_AM_USERLOG_LOG_SELECT","یک گزینه را برای انجام عملیات در این صفحه انتخاب کنید.");
define("_AM_USERLOG_LOG_SELECT_BULK","یک گزینه را برای انجام عملیات در تمام صفحات انتخاب کنید.");
define("_AM_USERLOG_LOG_ERRORSELECT","هیچ موردی را انتخاب نکرده اید.");

// logs.php export
define("_AM_USERLOG_LOG_EXPORT_CSV_SELECT","تبدیل تمام موارد انتخاب شده به فایل اکسل با فرمت csv.");
define("_AM_USERLOG_LOG_EXPORT_CSV_ALL","تبدیل تمام موارد پیدا شده در تمام صفحات به فایل اکسل با فرمت csv");
define("_AM_USERLOG_LOG_EXPORT_SUCCESS","%1\$d مورد با موفقیت به فایل اکسل با فرمت csv تبدیل و ذخیره شد. فایل csv: %2\$s");
define("_AM_USERLOG_LOG_EXPORT_ERROR","خطا. شرایط تبدیل اشتباه است.");

// logs.php template
define("_AM_USERLOG_SHOW_FORM","نمایش فرم بالای صفحه");
define("_AM_USERLOG_HIDE_FORM","مخفی کردن فرم بالای صفحه");
define("_AM_USERLOG_UP","برو بالا");
define("_AM_USERLOG_DOWN","برو پایین");

// views block
define("_AM_USERLOG_VIEW_ALL","تمام بازدید ها");
define("_AM_USERLOG_VIEW_MODULE","بازدید های ماژول");
define("_AM_USERLOG_VIEW_USER","بازدید های کاربران");
define("_AM_USERLOG_VIEW_GROUP","بازدید های گروه ها");
define("_AM_USERLOG_VIEW","بازدید ها");

// index.php stats.php
define("_AM_USERLOG_STATS_ABSTRACT","خلاصه آمار");
define("_AM_USERLOG_STATS_TYPE_PERIOD","تعداد %1\$s %2\$s در %3\$s وجود دارد.");
// %2\$s for above
define("_AM_USERLOG_STATS_LOG","ثبت شده");
define("_AM_USERLOG_STATS_LOGDEL","ثبت شده حذف شده");
define("_AM_USERLOG_STATS_SET","تنظیم");
define("_AM_USERLOG_STATS_FILE","فایل");
define("_AM_USERLOG_STATS_FILEALL","فایل ها در تمام شاخه ها");
define("_AM_USERLOG_STATS_VIEWS","بازدید");
define("_AM_USERLOG_STATS_REFERRAL","سایت های ارجاعی");
define("_AM_USERLOG_STATS_BROWSER","مرورگر");
define("_AM_USERLOG_STATS_OS","سیستم عامل");
define("_AM_USERLOG_STATS_TIME_UPDATE","آخرین زمان به روز شدن:");
define("_AM_USERLOG_STATS_TYPE","انواع موارد برای گرفتن آمار");
define("_AM_USERLOG_STATS_TYPE_DSC",_AM_USERLOG_STATS_REFERRAL . " | " . _AM_USERLOG_STATS_BROWSER . " | " . _AM_USERLOG_STATS_OS);

// %3\$s for above
define("_AM_USERLOG_ALL","کل");
define("_AM_USERLOG_TODAY","امروز");
define("_AM_USERLOG_WEEK","این هفته");
define("_AM_USERLOG_MONTH","این ماه");

// index.php summary
define("_AM_USERLOG_SUMMARY","چند مثال از نوشتن شرط هایی که میتوانید ثبت شده ها را نمایش دهید");
define("_AM_USERLOG_SUMMARY_DELETED","موارد حذف شده از پایگاه داده");
define("_AM_USERLOG_SUMMARY_ADMIN","فعالیت کاربران دارای دسترسی مدیریت");
define("_AM_USERLOG_SUMMARY_GOOGLE","پیدا کردن کاربرانی که از سایت گوگل وارد سایت شما شده اند.");

// file.php
define("_AM_USERLOG_FILE_ACTION","یک عمل را انتخاب کنید.");
define("_AM_USERLOG_FILE_SELECT_ONE","باید فقط یک فایل را انتخاب کنید.");
define("_AM_USERLOG_FILE_RENAME","تغییر نام");
define("_AM_USERLOG_FILE_COPY","کپی کردن فایل");
define("_AM_USERLOG_FILE_ZIP","فشرده کردن(Zip)");
define("_AM_USERLOG_FILE_MERGE","ادغام کردن چند فایل در یک فایل");
define("_AM_USERLOG_FILE_EXPORT_CSV","تبدیل به CSV");
define("_AM_USERLOG_FILE_FILENAME","نام فایل را بنویسید. مثلا: myfile");
define("_AM_USERLOG_FILE_FILENAME_DSC","توصیه: اگر نام فایل را خالی بگذارید این ماژول یک نام اوتوماتیک با توجه به شرایط و تاریخ و زمان تولید خواهد کرد. اگر در هنگام فشرده سازی یک نام که در حال حاضر وجود دارد وارد کنید, فایل های جدید به فایل فشرده قبلی اضافه میشوند و فایل های موجود در فایل فشرده قبلی به روز میشوند.");
define("_AM_USERLOG_FILE_MERGE_SUCCESS","%1\$d فایل با موفقیت در %2\$s ادغام شد.");
define("_AM_USERLOG_FILE_DELETE_SUCCESS","%1\$d فایل با موفقیت حذف شد.");
define("_AM_USERLOG_FILE_RENAME_SUCCESS","فایل %1\$s با موفقیت به %2\$s تغییر نام داده شد.");
define("_AM_USERLOG_FILE_COPY_SUCCESS","فایل %1\$s با موفقیت به %2\$s کپی شد.");
define("_AM_USERLOG_FILE_ZIP_SUCCESS","%1\$d فایل با موفقیت فشرده شد و با نام %2\$s ذخیره شد.");
define("_AM_USERLOG_FILE_EXOPORT_SUCCESS","%1\$d فایل با موفقیت تبدیل شد و با نام %2\$s ذخیره شد.");
define("_AM_USERLOG_FILE_CONFIRM","آیا مطمانید که میخواهید این عملیات را انجام دهید؟");

// stats.php, views block
define("_AM_USERLOG_MODULES","انتخاب ماژول ها");
define("_AM_USERLOG_ITEMS","انتخاب موارد هر ماژول");
define("_AM_USERLOG_ITEMS_DSC","این ها یک سری لینک نمونه از ماژول های فعال شما هستند.");
define("_AM_USERLOG_ITEMS_NUM","تعداد موارد برای نمایش.");
define("_AM_USERLOG_CONFIG_CHMOD_ERROR","سیستم نمیتواند شاخه ای درون '%1\$s' بسازد چون chmod این شاخه کوچکتر از %2\$d است.");
define("_AM_USERLOG_CONFIG_CREATE_FOLDER","اگر میخواهید ثبت شده ها را در فایل ذخیره کنید، باید شاخه '%1\$s' را دستی بسازید و دستی chmod آن را برابر با %2\$d قرار دهید.");
define("_AM_USERLOG_LOGIN_REG_HISTORY","تاریخچه لاگین/رجیستر  ها");

// stats.php, login_reg_history block
define("_AM_USERLOG_FAIL","ناموفق");
define("_AM_USERLOG_SUCCESS","موفق");
