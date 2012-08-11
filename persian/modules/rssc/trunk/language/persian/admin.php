<?php
// $Id: admin.php,v 1.20 2008/01/30 08:53:28 ohwada Exp $

// 2008-01-20 K.OHWADA
// post_plugin in link table

// 2008-01-10 K.OHWADA
// double definition : _AM_RSSC_CONF_BLACK_USE_DESC

// 2007-12-09 K.OHWADA
// remove _AM_RSSC_CREATE_CONFIG

// 2007-10-10 K.OHWADA
// censor in link table

// 2007-07-01 K.OHWADA
// word list, content filter

// 2006-11-08 K.OHWADA
// proxy server

// 2006-09-20 K.OHWWADA
// show content with html
// table manage

// 2006-07-08 K.OHWWADA
// description at main

// 2006-06-04 K.OHWADA
// _AM_RSSC_BUILD, etc

// 2006-01-20 K.OHWADA
// _AM_RSSC_ID_ASC

//=========================================================
// RSS Center Module
// 2006-01-01 K.OHWADA
//=========================================================

// --- define language begin ---
if( !defined('RSSC_LANG_AM_LOADED') ) 
{

define('RSSC_LANG_AM_LOADED', 1);

// === menu ===
define('_AM_RSSC_CONF','مدیریت مرکز RSS');
define('_AM_RSSC_LIST_LINK','لیست لینک');
define('_AM_RSSC_LIST_BLACK','لیست لینک  سیاه');
define('_AM_RSSC_LIST_WHITE','لیست لینک  سفید');
define('_AM_RSSC_LIST_FEED','لیست خوراک');
define('_AM_RSSC_ADD_LINK','اضافه  کردن لینک');
define('_AM_RSSC_ADD_BLACK','اضافه کردن لیست سفید');
define('_AM_RSSC_ADD_WHITE','اضافه کردن لیست سیاه');
define('_AM_RSSC_ADD_KEYWORD','اضافه کردن لغات کلیدی');
define('_AM_RSSC_ARCHIVE_MANAGE','مدیریت آرشیو');
define('_AM_RSSC_COMMAND_MANAGE','Command Management');
define('_AM_RSSC_UPDATE_MANAGE','مدیریت انتقال اطلاعات');
define('_AM_RSSC_VIEW_RSS','دیدن RDF/RSS/ATOM');
define('_AM_RSSC_GOTO_MODULE','برو به ماژول');

// === index & config ===
define('_AM_RSSC_FORM_BASIC','تنظیمات اصلی');
define('_AM_RSSC_FORM_BASIC_DESC','این اطلاعات به طور مشترک بین همه ی ماژول ها  استفاده میشود');
define('_AM_RSSC_FORM_MAIN','تنظیم متن صفحه ی اول');
define('_AM_RSSC_FORM_MAIN_DESC','از این مورد در صفحه ی اصلی ماژول استفاده میشد');
define('_AM_RSSC_FORM_BLOCK','تنظیمات بلاک ها');
define('_AM_RSSC_FORM_BLOCK_DESC','از این مورد در بلاک های ماژول استفاده میشود');
define('_AM_RSSC_FORM_BIN','Command Config');
define('_AM_RSSC_FORM_BIN_DESC','It is used on bin command');
define('_AM_RSSC_INIT_NOT','The config table is not initialized');
define('_AM_RSSC_INIT_EXEC','Initialized the config table');
define('_AM_RSSC_VERSION_NOT','It is not version  %s');
define('_AM_RSSC_UPGRADE_EXEC','Upgrade the config table');
define('_AM_RSSC_WARNING_NOT_WRITABLE','راهنما قابل نوشتن نيست');
//define('_AM_RSSC_CONF_NAME','Item');
define('_AM_RSSC_DBUPDATED','پایگاه داده ها با موفقیت به روز شد');
define('_AM_RSSC_FAILUPDATE','خطا در هنگام ذخیره ی اطلاعات در پایگاه داده ها');
define('_AM_RSSC_FAILDELETE','خطا در هنگام حذف کردن اطلاعات از پایگاه داده ها');
define('_AM_RSSC_THERE_ARE_LINKS','تعداد <b>%s</b> لینک در پایگاه داده ها موجود است');
define('_AM_RSSC_THERE_ARE_FEEDS','تعداد <b>%s</b> خوراک در پایگاه داده ها موجود است');

// === link manage ===
define('_AM_RSSC_LINK_MANAGE','مدیریت لینک');
define('_AM_RSSC_MOD_LINK','ویرایش لینک');
define('_AM_RSSC_DEL_LINK','حذف لینک');
define('_AM_RSSC_SHOW_RSS',  'نمایش RSS');
define('_AM_RSSC_SHOW_FEED','نمایش خوراک ');
define('_AM_RSSC_FEED_BELONG_LINK','نمایش خوراک های وابسته به این لینک');
define('_AM_RSSC_ERROR_FILL','خطا: %s را وارد کنید');
define('_AM_RSSC_ERROR_ILLEGAL','خطا: %s غیر مجاز است');

// === black list manage ===
define('_AM_RSSC_BLACK_MANAGE','مدیریت لیست سیاه');
define('_AM_RSSC_MOD_BLACK','ویرایش لیست سیاه');
define('_AM_RSSC_DEL_BLACK','حذف لیست سیاه');
define('_AM_RSSC_FEED_MATCH_LINK','خوراک های را که با این لیست تطابق دارند نمایش بده');

// === white list manage ===
define('_AM_RSSC_WHITE_MANAGE','مدیریت لیست سفید');
define('_AM_RSSC_MOD_WHITE','ویرایش لیست سفید');
define('_AM_RSSC_DEL_WHITE','حذف لیست سفید');

// === feed list manage ===
define('_AM_RSSC_ADD_FEED','اضافه کردن خوراک');
define('_AM_RSSC_MOD_FEED','ویرایش خوراک');
define('_AM_RSSC_DEL_FEED','حذف کردن خوراک');
define('_AM_RSSC_THERE_ARE_MATCH','There are <b>%s</b> datas which is matched to with conditions');
define('_AM_RSSC_CONDITION','Condition');

// === archive manage ===
define('_AM_RSSC_REFRESH','تازه کردن آرشیو');
define('_AM_RSSC_REFRESH_NEXT','Check Next %s');
define('_AM_RSSC_LINK_LIMIT','محدود کردن لینک');
define('_AM_RSSC_LINK_OFFSET','مبدا لینک');
define('_AM_RSSC_FEED_CLEAR','پاک کردن آرشیو');
define('_AM_RSSC_FEED_CLEAR_OLD','پاک کردن  اطلاعات سفارشی ثبت شده');
define('_AM_RSSC_FEED_CLEAR_NUM','پاک کردن  اطلاعات سفارشی ثبت شده اگر عددی غیر از عدد تعیین شده بدهید پاک میشود');

// refresh result
define('_AM_RSSC_NO_REFRESH','هیچ لینکی به روز نشده');
define('_AM_RSSC_TIME_START','زمان شروع');
define('_AM_RSSC_TIME_END','زمان پایان');
define('_AM_RSSC_TIME_ELAPSE','زمان انجام به روز رسانی');
define('_AM_RSSC_MIN_SEC','%s ثانیه %s دقیقه');
define('_AM_RSSC_NUM_LINK_TOTAL','مجموع لینک ها');
define('_AM_RSSC_NUM_LINK_TARGET','تعداد لینک های هدف');
define('_AM_RSSC_NUM_LINK_BROKEN','تعدا لینک های شکسته');
define('_AM_RSSC_NUM_LINK_UPDATED','تعداد لینک های به روز شده');
define('_AM_RSSC_NUM_FEED_UPDATED','تعادا خوراک های به روز شده');
define('_AM_RSSC_NUM_FEED_CLEARED','تعداد خوراک های پاک شده');
define('_AM_RSSC_NUM_LINKS','لینک');
define('_AM_RSSC_NUM_FEEDS','خوراک');
define('_AM_RSSC_FAILGET','نا توان در گرفتن XML  از %s');
define('_AM_RSSC_GOTOTOP','Goto Top');

// === configuration ===
// basic configuration
define('_AM_RSSC_CONF_FEED_LIMIT','بیشترین تعداد خوراک ها');
define('_AM_RSSC_CONF_FEED_LIMIT_DESC','بیشترین تعداد  خوراک ها را در جدول مقابل وارد کنید<br />وقتی عدد جدید ثبت شود . اطلاعات ثبت شده ی قبلی پاک میشود<br /><b>0</b> نامحدود است');
define('_AM_RSSC_CONF_RSS_ATOM','انتخاب کنید RSS یا ATOM');
define('_AM_RSSC_CONF_RSS_ATOM_DESC','RSS یا ATOM را  برای وقتی که هر دو لینک RSS یا ATOM پیدا شد انتخاب کنید');
define('_AM_RSSC_CONF_RSS_ATOM_SEL_ATOM','ATOM');
define('_AM_RSSC_CONF_RSS_ATOM_SEL_RSS',  'RSS');
define('_AM_RSSC_CONF_RSS_PARSER','تجذیه کننده ی RSS را انتخاب کنید');
define('_AM_RSSC_CONF_RSS_PARSER_SELF',  'RSSC تجزیه کننده');
define('_AM_RSSC_CONF_RSS_PARSER_XOOPS','تجزیه کننده ی RSS زوپس');
define('_AM_RSSC_CONF_ATOM_PARSER','تجزیه کننده ATOM را انتخاب کنید');
define('_AM_RSSC_CONF_ATOM_PARSER_0','RSSC تجزیه کننده ');
define('_AM_RSSC_CONF_ATOM_PARSER_1','');
define('_AM_RSSC_CONF_RSS_MODE','Initial value of RSS mode');
define('_AM_RSSC_CONF_XML_SAVE','ذخیره یXML');
define('_AM_RSSC_CONF_XML_SAVE_DESC','اطلاعات XML را در جدول  لینک ذخیره میکند');
define('_AM_RSSC_CONF_FUTURE_DAYS','روز های آینده');
define('_AM_RSSC_CONF_FUTURE_DAYS_DESC',"بعد از روز مشخص شده<br />خوراک ها را نمایش نده, اگر اطلاعات خوراک ها بیشتر از اطلاعات آن روز بود");

// show configuration
define('_AM_RSSC_CONF_SHOW_ORDER','سفارشی کردن برای نمایش');
//define('_AM_RSSC_CONF_SHOW_ORDER_DESC','');
define('_AM_RSSC_CONF_SHOW_ORDER_UPDATED','آخرین به روز رسانی');
define('_AM_RSSC_CONF_SHOW_ORDER_PUBLISHED','آخرین انتشار');
define('_AM_RSSC_CONF_SHOW_LINKS_PER_PAGE','تعداد لینک های هر صفحه');
//define('_AM_RSSC_CONF_SHOW_LINKS_PER_PAGE_DESC','');
define('_AM_RSSC_CONF_SHOW_FEEDS_PER_PAGE','تعداد خوراک های هر صفحه');
//define('_AM_RSSC_CONF_SHOW_FEEDS_PER_PAGE_DESC','');
define('_AM_RSSC_CONF_SHOW_FEEDS_PER_LINK','خوراک ها برای هر لینک');
//define('_AM_RSSC_CONF_SHOW_FEEDS_PER_LINK_DESC','');
define('_AM_RSSC_CONF_SHOW_MAX_TITLE','بیشترین تعداد کارکتر ها در عنوان');
define('_AM_RSSC_CONF_SHOW_MAX_TITLE_DESC','tag های HTML خالی میشود, وقتی عددی بیشتر از مقدار فعلی وارد کنی<br /><b>-1</b> نامحدود میکند');
define('_AM_RSSC_CONF_SHOW_MAX_SUMMARY','بیشترین تعداد کارکتر ها در خلاصه');
define('_AM_RSSC_CONF_SHOW_MAX_SUMMARY_DESC','<b>-1</b> نامحدود میکند');

// main configuration
define('_AM_RSSC_CONF_MAIN_SEARCH_MIN','کمترین تعداد کارکتر ها برای جستجو');
//define('_AM_RSSC_CONF_MAIN_SEARCH_MIN_DESC','');

// bin configuration
define('_AM_RSSC_CONF_BIN_PASS','پسورد');
//define('_AM_RSSC_CONF_BIN_PASS_DESC','');
define('_AM_RSSC_CONF_BIN_SEND','ارسال ایمیل');
//define('_AM_RSSC_CONF_BIN_SEND_DESC','');
define('_AM_RSSC_CONF_BIN_MAILTO','ایمیل فرستنده');
//define('_AM_RSSC_CONF_BIN_MAILTO_DESC','');

// === view rss ===
define('_AM_RSSC_VIEW_RSS_OPTION','تنظیم انتخاب ها');
define('_AM_RSSC_NOT_SELECT_LINK','هیچ لینکی انتخاب نشده است');
define('_AM_RSSC_PLEASE_SELECT_LINK','از لیست لینک ها یکی را انتخاب کنید و ID ان را وارد کنید');
define('_AM_RSSC_VIEW_PARSER','تنظیمات تجزیه کننده ');
define('_AM_RSSC_VIEW_SAVE_ETC','ذخیره کردن در جدول, etc');
define('_AM_RSSC_VIEW_MODE','روش نمایش ');
define('_AM_RSSC_VIEW_MODE_DESC','وقتی روش 0 را انتخاب کنید در  جدول های پایگاه داده ها ذخیره نمیشود');
define('_AM_RSSC_VIEW_MODE_CURRENT','روش0: گرفتن اطلاعات XML');
define('_AM_RSSC_VIEW_MODE_LINK','روش 1: داده های XML در  جدول های لینک ذخیره شود');
define('_AM_RSSC_VIEW_MODE_FEED','روش 2: داده های XML در جدول های خوراک ذخیره شود.');
define('_AM_RSSC_VIEW_SANITIZE','HTML Sanitize');
define('_AM_RSSC_VIEW_TITLE_HTML','نمایش tag های HTML در عنوان');
define('_AM_RSSC_VIEW_TITLE_HTML_DESC','.قتی بله را انتخاب کنید  نمایش داده ها شامل tag های HTML هم میشود <br />وقتی نه را انتخاب کنید tag های HTML نمایش داده نمیشود ');
define('_AM_RSSC_VIEW_CONTENT_HTML','نمایش tag های HTML در محتوا');
define('_AM_RSSC_VIEW_CONTENT_HTML_DESC','.قتی بله را انتخاب کنید  نمایش داده ها شامل tag های HTML هم میشود <br />وقتی نه را انتخاب کنید tag های HTML نمایش داده نمیشود ');
define('_AM_RSSC_VIEW_MAX_CONTENT','بیشترین تعداد کارتر ها در محتوا');
define('_AM_RSSC_VIEW_MAX_CONTENT_DESC','tag های HTML خالی میشود, وقتی عددی بیشتر از مقدار فعلی وارد کنی<br /><b>-1</b> نامحدود میکند');
define('_AM_RSSC_VIEW_LINK_UPDATE','جدول لینک ها به روز شد');
define('_AM_RSSC_VIEW_FEED_UPDATE','جدول خوراک ها به روز شد');
define('_AM_RSSC_VIEW_FORCE_DISCOVER','نیرو های یابنده ی آدرس RSS');
define('_AM_RSSC_VIEW_FORCE_DISCOVER_DESC','اور رایت کردن آدرس RDF/RSS/ATOM, وقتی مشخص شد این آدرس به  روش RSS وابسته نیست');
define('_AM_RSSC_VIEW_FORCE_UPDATE','نیرو های به روز کننده ی آرشیو');
define('_AM_RSSC_VIEW_FORCE_UPDATE_DESC','آرشیو اور رایت میشود, وقتی مشخص شد بین زمان  تازه کردن RDF/RSS/ATOM مرتبط فاصله افتاده است');
define('_AM_RSSC_VIEW_FORCE_OVERWRITE','نرو های به روز کننده ی جدول خوراک ها');
define('_AM_RSSC_VIEW_FORCE_OVERWRITE_DESC','جدول تغیزه کننده ها اور رایت میشود, وقتی  اطلاعات اضافی جدیدی در آدرس RDF/RSS/ATOM وجود داشته باشد');
define('_AM_RSSC_VIEW_PRINT_LOG','نمایش کارنامه');
define('_AM_RSSC_VIEW_PRINT_LOG_DESC','Show log simultaneously during executing');
define('_AM_RSSC_VIEW_PRINT_ERROR','نمایش خطا ها');
define('_AM_RSSC_VIEW_PRINT_ERROR_DESC','Show error simultaneously during executing');

// === command manage ===
define('_AM_RSSC_CREATE_CONFIG','ساخت فایل تنظیم');
define('_AM_RSSC_TEST_BIN_REFRESH','تست اجرای bin/refresh.php');

// === update manage ===
define('_AM_RSSC_IMPORT_XOOPSHEADLINE','وارد کردن اطلاعات از تیتر های خبری زوپس');
define('_AM_RSSC_IMPORT_WEBLINKS','وارد کردن اطلاعات از مازول وب لینک');

// === rename ===
define('_AM_RSSC_VIEW_FEED_PERPAGE', _AM_RSSC_CONF_SHOW_FEEDS_PER_PAGE);
define('_AM_RSSC_VIEW_MAX_TITLE', _AM_RSSC_CONF_SHOW_MAX_TITLE);
define('_AM_RSSC_VIEW_MAX_TITLE_DESC', _AM_RSSC_CONF_SHOW_MAX_TITLE_DESC);
define('_AM_RSSC_VIEW_MAX_SUMMARY', _AM_RSSC_CONF_SHOW_MAX_SUMMARY);
define('_AM_RSSC_VIEW_MAX_SUMMARY_DESC', _AM_RSSC_CONF_SHOW_MAX_SUMMARY_DESC);
define('_AM_RSSC_VIEW_XML_SAVE', _AM_RSSC_CONF_XML_SAVE);
define('_AM_RSSC_VIEW_XML_SAVE_DESC', _AM_RSSC_CONF_XML_SAVE_DESC);

// 2006-01-20
define('_AM_RSSC_ID_ASC','ID صعودی');
define('_AM_RSSC_ID_DESC','ID نزولی');

// === 2006-06-04 ===
// build rss
define('_AM_RSSC_BUILD','ساختن RDF/RSS/ATOM');
define('_AM_RSSC_BUILD_DSC',  'ساخت و نمایش RDF/RSS/ATOM برای اشکال زدایی کردن');
define('_AM_RSSC_BUILD_RDF',  'ساختن RDF');
define('_AM_RSSC_BUILD_RSS',  'ساختن RSS');
define('_AM_RSSC_BUILD_ATOM','ساختن ATOM');

// parse rss
define('_AM_RSSC_PARSE_RSS','تجزیه کردن RDF/RSS/ATOM');

// refresh link
//define('_AM_RSSC_REFRESH_LINK','تازه کردن تغزیه کننده های RDF/RSS/ATOM');
//define('_AM_RSSC_REFRESH_LINK_DSC','Then, refresh RSS feeds <br />Discover <b>RDF/RSS/ATOM URL</b> automatically and detect <b>Encoding</b> automatically, <br />if they are not set up.');
//define('_AM_RSSC_REFRESH_LINK_FINISHED','تازه کردن تغیزه کننده ها به پایان رسید');

// === 2006-07-08 ===
// description at main
define('_AM_RSSC_CONF_INDEX_DESC','توضیح در صفحه ی اول');
define('_AM_RSSC_CONF_INDEX_DESC_DSC','متن توضیح را وارد کنید . این متن در صفحه ی اول ماژول نمایش داده میشود');
define('_AM_RSSC_CONF_INDEX_DESC_DEFAULT','<div align="center" style="color: #0000ff">این متن توضیحات ماژول است<br />شما  میتوانید این متن را در قسمت تنظیمات ماژول ویرایش کنید.<br /></div><br />');

// link table
define('_AM_RSSC_LINK_DESC','Discover <b>RDF/RSS/ATOM URL</b> automatically and detect <b>Encoding</b> automatically, <br />when you dont fill, <br />if web site support "RSS Auto Discovery"');
//define('_AM_RSSC_LINK_EXIST','قبلا "RDF/RSS/ATOM آدرس" موجود بوده است');
//define('_AM_RSSC_LINK_EXIST_MORE','There are twe or more links which have same "RDF/RSS/ عنوان سایت" ');
//define('_AM_RSSC_AUTO_FIND_FAILD','RSS Auto Discovery Faild');
define('_AM_RSSC_LINK_FORCE','Froce to save');

// black & white table
define('_AM_RSSC_BLACK_MEMO','یاداشت');

// === 2006-09-20 ===
// show content with html
define('_AM_RSSC_CONF_SHOW_TITLE_HTML','استفاده از tag های HTML در این جدول');
define('_AM_RSSC_CONF_SHOW_TITLE_HTML_DSC','وقتی بله را انتخاب کنید عنوان به وصیله ی  tag های HTML نمایش داده میشود, اگر عنوان HTML tag داشته باشد. <br />وقتی   نه را انتخاب کنید عنوان با tag های هاشور خورده HTML نمایش داده میشود  . ');
define('_AM_RSSC_CONF_SHOW_CONTENT_HTML','استفاده از tag های HTML برای محتویات');
define('_AM_RSSC_CONF_SHOW_CONTENT_HTML_DSC','وقتی بله را انتخاب کنید محتویات به وصیله ی tag های HTML نمایش داده میشود, اگر محتوا HTML tag داشته باشد. <br />وقتی نه را انتخاب کنید  محتوایت با tag های هاشور خورده HTML نمایش داده میشود. ');
define('_AM_RSSC_CONF_SHOW_MAX_CONTENT','بیشترین تعداد کارکتر ها در عنوان');
define('_AM_RSSC_CONF_SHOW_MAX_CONTENT_DSC','tag های HTML خالی میشود, وقتی عددی بیشتر از مقدار فعلی وارد کنید<br /><b>-1</b> نامحدود میکند');
define('_AM_RSSC_CONF_SHOW_NUM_CONTENT','بیشترین تعداد خوراک های RSS/ATOM نمایش داده شده در محتوا');
define('_AM_RSSC_CONF_SHOW_NUM_CONTENT_DSC','بیشترین تعداد خوراک های RSS/ATOM را که در محتوا نمایش داده میشود وارد کنید.');
define('_AM_RSSC_CONF_SHOW_BLOG_LID','ID لینک برای نمایش در blog');
//define('_AM_RSSC_CONF_SHOW_BLOG_LID_DSC','ID لینک را برای نمایش در blog وارد کنید');

define('_AM_RSSC_TABLE_MANAGE','مدیریت جداول پایگاه داده ها');

// === 2006-11-08 ===
// proxy server
define('_AM_RSSC_FORM_PROXY','مدیریت پروکسی سرور');
define('_AM_RSSC_CONF_PROXY_USE',  'استفاده از پروکسی سرور');
define('_AM_RSSC_CONF_PROXY_HOST','هاست پروکسی');
define('_AM_RSSC_CONF_PROXY_PORT','پورت پروکسی');
define('_AM_RSSC_CONF_PROXY_USER','نام کاربری  پروکسی');
define('_AM_RSSC_CONF_PROXY_USER_DESC','نام کاربری را وارد کنید, اگر سرور پروکسی شما نیاز به تاید اطلاعات پایه دارد, <br />در غیر این صورت کادر مقابل را خالی بگذارید');
define('_AM_RSSC_CONF_PROXY_PASS','واژه ی رمز پروکسی');
define('_AM_RSSC_CONF_PROXY_PASS_DESC','واژه ی رمز را وارد کنید, اگر سرور پروکسی شما نیاز به اطلاعات پایه دارد <br />در غیر این صورت کادر مقابل را خالی بگذارید');

define('_AM_RSSC_CONF_HIGHLIGHT','استفاده از واژه های کلیدی های لایت');

// === 2007-06-01 ===
// word_list
define('_AM_RSSC_LIST_WORD','Reject Word List');
define('_AM_RSSC_WORD_MANAGE','Reject Word Management');
define('_AM_RSSC_ADD_WORD','Add Reject Word');
define('_AM_RSSC_MOD_WORD','Modify Reject Word');
define('_AM_RSSC_DEL_WORD','Delete Reject Word');
define('_AM_RSSC_POINT_ASC','Little Point Order');
define('_AM_RSSC_POINT_DESC','Much Point Order');
define('_AM_RSSC_COUNT_ASC','Little Frequency Count Order');
define('_AM_RSSC_COUNT_DESC','Much Frequency Count Order');
define('_AM_RSSC_WORD_ASC','A-Z Order');
define('_AM_RSSC_WORD_DESC','Z-A Order');
define('_AM_RSSC_NON_ACT','Not Show List');
define('_AM_RSSC_NON_ACT_ASC','Not Show ID Ascent');
define('_AM_RSSC_NON_ACT_DESC','Not Show ID Descent');
define('_AM_RSSC_WORD_ALREADY','This word is registered already');
define('_AM_RSSC_WORD_SEARCH','Synonym Search');

// content filter
define('_AM_RSSC_FORM_FILTER','Filter Setting');
define('_AM_RSSC_FORM_FILTER_DESC','This filter judge to store or not into database when collecting feeds automatically');
define('_AM_RSSC_CONF_LINK_USE','Use Link Table');
define('_AM_RSSC_CONF_LINK_USE_DESC','Store when "Type" of Link Table is "Normal"');
define('_AM_RSSC_CONF_WHITE_USE','Use White List');
define('_AM_RSSC_CONF_WHITE_USE_DESC','Store when in white list');
define('_AM_RSSC_CONF_BLACK_USE','Use Black List');
//define('_AM_RSSC_CONF_BLACK_USE_DESC','Not store when in black list');
define('_AM_RSSC_CONF_BLACK_USE_DESC','Not store when in black list<br />When select "Use", interrupt filtering process, if judge black<br />When select "Learning", continue filtering process, for purpose extracting words, if judge black');
define('_AM_RSSC_CONF_BLACK_USE_NO','Not Use');
define('_AM_RSSC_CONF_BLACK_USE_YES','Use');
define('_AM_RSSC_CONF_BLACK_USE_LEARN','Learning');
define('_AM_RSSC_CONF_WORD_USE','Use Reject Word List');
define('_AM_RSSC_CONF_WORD_USE_DESC','Not Store when total point of word list exceed reject level');
define('_AM_RSSC_CONF_WORD_LEVEL','Reject Level');
define('_AM_RSSC_CONF_FEED_SAVE','Feed Save');
define('_AM_RSSC_CONF_FEED_SAVE_DESC','Store or not into feed table when judge black.<br />When "Save", save in "not show" status.');
define('_AM_RSSC_CONF_FEED_SAVE_NO','No Save');
define('_AM_RSSC_CONF_FEED_SAVE_YES','Save');
define('_AM_RSSC_CONF_LOG_USE','Use Log File');
define('_AM_RSSC_CONF_LOG_USE_DESC','Write log file when judge black');
define('_AM_RSSC_CONF_WHITE_COUNT','Count up White List');
define('_AM_RSSC_CONF_WHITE_COUNT_DESC','Count up the matching record when match with white list');
define('_AM_RSSC_CONF_BLACK_COUNT','Count up Black List');
define('_AM_RSSC_CONF_BLACK_COUNT_DESC','Count up the matching record when match with blck list');
define('_AM_RSSC_CONF_WORD_COUNT','Coun up Reject Word List');
define('_AM_RSSC_CONF_WORD_COUNT_DESC','Count up the matching record when match with reject word list');
define('_AM_RSSC_CONF_BLACK_AUTO','Add in Black List');
define('_AM_RSSC_CONF_BLACK_AUTO_DESC','Add URL in black list automatically when judge black<br /><b>Notice</b> "status" is stored as "invalid"<br />Please change into "valid" when using');
define('_AM_RSSC_CONF_WORD_AUTO','Add in Reject Word List');
define('_AM_RSSC_CONF_WORD_AUTO_DESC','Extract words in the content automatically, and add words in reject word list automatically, when judge black<br /><b>Notice</b> "point" is stored as zero<br />Please change "point" when using');
define('_AM_RSSC_CONF_WORD_AUTO_NON','Not Add');
define('_AM_RSSC_CONF_WORD_AUTO_SYMBOL','Extract by the symbol pause');
define('_AM_RSSC_CONF_WORD_AUTO_KAKASI','Extract by KAKASI: Japanese Only');

// word extract
define('_AM_RSSC_FORM_WORD','Word Extract Setting');
define('_AM_RSSC_CONF_JOIN_PREV','Word Join');
define('_AM_RSSC_CONF_JOIN_PREV_DESC','join to forword and backword word, and make a phrase');
define('_AM_RSSC_CONF_JOIN_GLUE','Word Spacing');
define('_AM_RSSC_CONF_JOIN_GLUE_DESC','in English set space<br />in Japanese set noting');
define('_AM_RSSC_CONF_KAKASI_PATH','Command Path of KAKASI');
define('_AM_RSSC_CONF_KAKASI_MODE','Mode of KAKASI');
define('_AM_RSSC_CONF_KAKASI_MODE_FILE','Use temporary file');
define('_AM_RSSC_CONF_KAKASI_MODE_PIPE','Use UNIX pipe');
define('_AM_RSSC_CONF_CHAR_LENGTH','The minimum number of characters');
define('_AM_RSSC_CONF_CHAR_LENGTH_DESC','The minimum number of characters to extact word');
define('_AM_RSSC_CONF_WORD_LIMIT','The maxmum number of reject words');
define('_AM_RSSC_CONF_WORD_LIMIT_DESC','Enter the maximum number of word stored in word table<br />Clears the older records, when it becomes more than this value<br /><b>0</b> is umlimited');
define('_AM_RSSC_KAKASI_EXECUTABLE','kakasi is executable');
define('_AM_RSSC_KAKASI_NOT_EXECUTABLE','kakasi is not executable');
define('_AM_RSSC_CONF_HTML_GET','Get HTML');
define('_AM_RSSC_CONF_HTML_GET_DESC','get origin HTML data automatically, when judge with reject word list<br />When select "Use", the precision of the judgment is improved , but the execution time become long');
define('_AM_RSSC_CONF_HTML_GET_NO','Not Use');
define('_AM_RSSC_CONF_HTML_GET_YES','Use');
define('_AM_RSSC_CONF_HTML_GET_BLACK','Use when jugde black');
define('_AM_RSSC_CONF_HTML_LIMIT','The maxmum number of HTML characters');
define('_AM_RSSC_CONF_HTML_LIMIT_DESC','The maxmum number of HTML characters which get automatically<br />At some sites, HTML is the big data, and then the execution time become long');

// archive manage
define('_AM_RSSC_LEAN_BLACK','Learn in Black List');
define('_AM_RSSC_LEAN_BLACK_DESC','Patrol in blacklist, for purpose extracting words in the content automatically, and adding words in reject word list automatically');
define('_AM_RSSC_NUM_FEED_ALL','The number of all feeds');
define('_AM_RSSC_NUM_FEED_SKIP','The number of already stored feeds');
define('_AM_RSSC_NUM_FEED_REJECT','The number of judged black feeds');

define('_AM_RSSC_THEREARE_TITLE','in related <b>%s</b> there are <b>%s</b>');

// === 2007-10-10 ===
// config
define('_AM_RSSC_CONF_SHOW_MODE_DATE','Date Mode');
define('_AM_RSSC_CONF_SHOW_MODE_DATE_NON',    'Not Show');
define('_AM_RSSC_CONF_SHOW_MODE_DATE_SHORT',  'short');
define('_AM_RSSC_CONF_SHOW_MODE_DATE_MIDDLE','middle');
define('_AM_RSSC_CONF_SHOW_MODE_DATE_LONG',   'long');
define('_AM_RSSC_CONF_SHOW_SITE','Site Information');
define('_AM_RSSC_CONF_SHOW_SITE_DSC','when "YES", show site title and url');

// link table
define('_AM_RSSC_LINK_CENSOR_DESC','Separate each with <b>|</b><br />case sensitive');


// === 2008-01-20 ===
// menu
define('_AM_RSSC_FORM_HTMLOUT',       'HTML Output Setting');
define('_AM_RSSC_FORM_HTMLOUT_DESC',  "The processing of content ,when 'Use of HTML tag of the content' is 'Yes'<br />All tags are removed ,when 'No' <br />it recommends to remove or replace JavaScript and the relation, to prevent XSS (Cross Site Scripting) ");
define('_AM_RSSC_FORM_CUSTOM_PLUGIN','Custom Plugins');

// html out
define('_AM_RSSC_CONF_HTML_NON',    'Noting to do');
define('_AM_RSSC_CONF_HTML_SHOW',   'Sanitize and show in HTML');
define('_AM_RSSC_CONF_HTML_REMOVE','Remove');
define('_AM_RSSC_CONF_HTML_REPLACE','Replace strings');
define('_AM_RSSC_CONF_HTML_SCRIPT','script tag');
define('_AM_RSSC_CONF_HTML_SCRIPT_DESC',"The processing of '&lt;script&gt;...&lt;/script&gt;' ");
define('_AM_RSSC_CONF_HTML_STYLE','style tag');
define('_AM_RSSC_CONF_HTML_STYLE_DESC',"The processing of '&lt;style&gt;...&lt;/style&gt;' ");
define('_AM_RSSC_CONF_HTML_LINK','link tag');
define('_AM_RSSC_CONF_HTML_LINK_DESC',"The processing of '&lt;link ... &gt;' ");
define('_AM_RSSC_CONF_HTML_COMMENT','comment mark');
define('_AM_RSSC_CONF_HTML_COMMENT_DESC',"The processing of '&lt;!-- ... --&gt;' ");
define('_AM_RSSC_CONF_HTML_CDATA','CDATA mark');
define('_AM_RSSC_CONF_HTML_CDATA_DESC',"The processing of '&lt;![CDATA[ ... ]]&gt;' ");
define('_AM_RSSC_CONF_HTML_ATTR_ONMOUSE','onMouse attribute');
define('_AM_RSSC_CONF_HTML_ATTR_ONMOUSE_DESC',"The processing of 'onmouseover=\"...\"' or 'onclick=\"...\"' <br />replace as 'on_mouseover_=\"...\"', when 'Replace' ");
define('_AM_RSSC_CONF_HTML_ATTR_STYLE','style attribute');
define('_AM_RSSC_CONF_HTML_ATTR_STYLE_DESC',"The processing of 'style=\"...\"' or 'class=\"...\"' <br />replace as 'style_=\"...\"', when 'Replace' ");
define('_AM_RSSC_CONF_HTML_FLAG_OTHER_TAGS','Remove other tags');
define('_AM_RSSC_CONF_HTML_FLAG_OTHER_TAGS_DESC',"Rremove or not '&lt;img ... &gt;' '&lt;a ... &gt;' '&lt;link ... &gt;' etc ");
define('_AM_RSSC_CONF_HTML_OTHER_TAGS','allow tags');
define('_AM_RSSC_CONF_HTML_OTHER_TAGS_DESC',"Enter the tag not to remove, when 'Remove other tags' is 'Yes' <br /> exsample: <img><a> ");
define('_AM_RSSC_CONF_HTML_JAVASCRIPT','JavaScriprt stings');
define('_AM_RSSC_CONF_HTML_JAVASCRIPT_DESC',"The processing of stings as 'JavaScriprt' <br />replace as 'java_script', when 'Replace' ");

// plugin
define('_AM_RSSC_PRE_PLUGIN_DESC','Execute before storing in the database');
define('_AM_RSSC_POST_PLUGIN_DESC','Execute after reading in the database');
define('_AM_RSSC_PLUGIN_DESC_2','Separate each with <b>|</b>, when specifying two or more plugins ');

define('_AM_RSSC_PLUGIN_TEST','Test fo plugins');
define('_AM_RSSC_PLUGIN','Plugins');
define('_AM_RSSC_PLUGIN_TESTDATA','Test data');
define('_AM_RSSC_PLUGIN_TESTDATA_DESC','Enter the form of associative array');

}
// --- define language begin ---

?>