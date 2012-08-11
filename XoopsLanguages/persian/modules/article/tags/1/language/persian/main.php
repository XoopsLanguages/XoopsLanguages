<?php
// $Id: main.php,v 1.1.1.1 2005/11/10 19:51:19 phppp Exp $
// _LANGCODE: en
// _CHARSET : ISO-8859-1
// Translator: D.J., http://xoopsforge.com, http://xoops.org.cn

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_MAIN")) return; define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_FA_MAIN",1);


define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INVALID","عمل غیر مجاز");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOACCESS","دسترسی وجود ندارد");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXTEMPTY","متن خالی است");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INSERTERROR","خطا در افزودن");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWARTICLE","مقاله جدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TITLE","عنوان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_AUTHOR","نویسنده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY","خلاصه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BODY","بدنه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SORTBY","مرتب شده بر اساس");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVED","داده‌ها ذخیره شدند");;
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITED","ارسال شد");;

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ALREADYRATED","شما قبلا رای داده‌اید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTSAVED","ذخیره نشد");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPARTICLE","صفحه کنترل مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIONDONE","عملیات با موفقیت انجام شد");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPCATEGORY","صفحه کنترل شاخه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPTOPIC","صفحه کنترل سرفصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPTRACKBACK","صفحه کنترل ترک‌بک‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EMAIL","پست الکترونیکی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EMAILADDRESS","آدرس پست الکترونیکی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CONTENT","محتوا");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLE","مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY","شاخه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INDEX","صفحه اصلی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DISCLAIMER","شرایط");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBTITLE","زیر عنوان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS","کلمات کلیدی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE","یادداشت مدیر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DATE","تاریخ");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ERROROCCURED","خطا رخ داد");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_USERNAME","شناسه کاربری");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECTFEED","تغییر نوع feed");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_ARTICLE","XML مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SOURCE","منبع");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_CATEGORY","XML برای شاخه %s");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_AUTHOR","XML برای نویسنده %s");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_XMLDESC_INDEX","XML برای صفحه اول");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PROFILE","پروفایل نویسنده");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECT_EDITOR","انتخاب ویرایشگر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXT","متن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_NO","صفحه شماره %d");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWPAGE","صفحه جدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE","ویرایش برای چند صفحه‌ای شدن مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDITPAGE_TEXT","متن صفحه");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY_DESC","توضیح خلاصه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUMMARY_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS_DESC","شرح کلمات کلیدی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORDS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE_DESC","شرح یادداشت مدیر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EDNOTE_DESC_TEXT","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FORUM","انجمن");
/*
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BLOG","وبلاگ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PDF","Pdf");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PRINT","چاپ");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BOOKMARK","بوک مارک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DC","DC");
*/
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS","ترک‌بک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEMPLATE_SELECT","انتخاب الگو");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY_BASE","شاخه مبنا");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS","لینک‌های وابسته");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS_DESC","شرح لینک‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ELINKS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS_DESC","شرح ترک‌بک‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACKS_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTIFY_ON_APPROVAL","هر وقت تایید شد به من خبر بده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISH_ARTICLE","در سایت قرار بده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE","ذخیره");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_DRAFT","ذخیره نسخه اولیه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_EDIT","ذخیره و ویرایش");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_PAGE","حذف صفحه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_ARTICLE","حذف مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_ARTICLE_CONFIRM","آیا اطمینان دارید که می‌خواهید این مقاله را حذف کنید؟");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR_REMOVE","حذف ناظر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR_ADD","اضافه کردن ناظر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DESCRIPTION","شرح");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ORDER","مرتب کردن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR","آدرس و نام حامیان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR_DESC","شرح حامیان");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSOR_DESC_TEXT","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_UPLOAD","بارگذاری تصویر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_SELECT","انتخاب تصویر");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TOPIC","سر‌فصل");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROMLASTDAYS","از %d روز گذشته");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROMLASTHOURS","از %d ساعت گذشته");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_THELASTYEAR","در سال گذشته");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BEGINNING","از ابتدا");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RSS","RSS");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RDF","RDF");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ATOM","ATOM");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_OPML","OPML");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CPANEL","صفحه کنترل");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLES","مقاله ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADDARTICLE","اضافه کردن مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MODERATOR","ناظر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MYARTICLES","صفحه من");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_STATS","آمار");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATURED","برجسته");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TOPICS","سر‌فصل‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITTED","ارسال شده‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISHED","قرار گرفته‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CREATED","ساخته شده‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTERED","ثبت شده‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGULAR","معمولی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORIES","شاخه‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBTITLES","زیر عنوان‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PAGES","صفحات");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_URL","آدرس");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRACKBACK","ترک‌بک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMITTER","ارسال‌کننده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_VIEWS","دفعات بازدید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RATE","رای");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RATEIT","رای دهید!");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_RESETRATE","صفر کردن رای‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME","زمان");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PDF_PAGE","صفحه %s");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PREVIOUS","مقاله قبلی >>");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEXT","<< مقاله بعدی");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TEXTOPTIONS",'گزینه‌های متن');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOHTML",'فعال‌کردن تگ‌های html');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOSMILEY",'فعال‌کردن لبخندک‌ها');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOXCODE",'فعال‌کردن کدهای زوپس');
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DOBR",'فعال کردن شکستن خود به خود خط‌ها (پیشنهاد می‌شود در حالتیکه HTML فعال است این را انتخاب نکنید)');

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPONSORS","حامیان");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_CREATE","ایجاد شده در");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_EXPIRE","منقضی شده در");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TYPES","نوع مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NAME","نام");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BIO","زندگی نامه");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FORMMODE","حالت فرم");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_BASIC","ساده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADVANCE","پیشرفته");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CUSTOM","دست‌ساز");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_INVALID_SUBMIT","ارسال غیر مجاز است.زمان ارسال شما به پایان رسیده است. یک پشتیبان از نوشته شما ساخته شده‌است لطفا دوباره روی ارسال بزنید.");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_KEYWORD_ON","کلمات کلیدی در");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBCATEGORIES","زیر شاخه‌ها");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TAG_LIST","فهرست تگ ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIVE","فعال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EXPIRED","منقضی شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_APPROVED","تایید شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETED","حذف شده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PENDING","معلق");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_EXPIRATION","تاریخ انقضا");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CREATION","تاریخ ایجاد");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ADD","اضافه کن");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECT","انتخاب");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_APPROVE","تایید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATUREIT","برجسته کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_UNFEATUREIT","برجسته را بردار");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TERMINATE","خاتمه بده");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTERTOPIC","ثبت سر‌فصل");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACTIONS","عملیات");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SUBMISSION","تاریخ ارسال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PUBLISH","تاریخ قرارگرفتن در سایت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REGISTER","تاریخ ثبت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FEATURE","تاریخ برجسته شده");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HEADINGS","سر صفحه‌ها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NOTES","یادداشت‌ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_FROM","از طرف"); // Trackback

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_VIEWALL","نمایش به صورت تمام متنی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_COMMENTS","نظرها");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CLICKTOCOPY","کلیک کنید تا کپی شود");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ACHIVE","بایگانی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTHLY","ماهیانه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_Y","%s"); // Year
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_YM","%2\$s - %1\$s"); // Year - Month
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TIME_YMD","%1\$s - %2\$s - %3\$s"); // Year - Month - Day

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_1","ژانویه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_2","فوریه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_3","مارس");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_4","آوریل");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_5","می");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_6","ژوین");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_7","ژوییه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_8","اوت");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_9","سپتامبر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_10","اکتبر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_11","نوامبر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MONTH_12","دسامبر");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_1","دوشنبه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_2","سه‌شنبه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_3","چهارشنبه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_4","پنج‌شنبه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_5","جمعه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_6","شنبه");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_WEEK_7","یک‌شنبه");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_CAPTION","شرح تصویر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_CURRENT","تصویر فعلی");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SPOTLIGHT","مقاله امروز");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_LIST","فهرست مقاله ها");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DRAFTS","نسخه‌های اولیه");
/*
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER","انتقال");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER_DESC","انتقال مقاله به یک برنامه دیگر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_TRANSFER_DONE","عملیات با موفقیت انجام شد: %s");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SELECTEDITOR","انتخاب ویرایشگر");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REQUIRED","ضروری");
*/
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_REMOVE","حذف");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SAVE_BEFORE_SWITCH","قبل از رفتن به صفحه دیگر نوشته را ذخیره کنید");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_NEWPAGE_AVAILABLE","هر وقت یک صفحه را ذخیره کردید، میتوانید صفحات دیگر را اضافه کنید");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_MOVE_CATEGORYANDARTICLE","تمام زیر شاخه‌ها و مقاله هایش به شاخه والد منتقل خواهند شد.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DELETE_CATEGORYANDARTICLE","تمام زیر شاخه‌ها و مقاله هایش حذف خواهند شد.");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CONFIG_CATEGORYANDARTICLE","تنظیمات را می‌توانید از طریق تغییرات در فایل article/include/plugin.php \$GLOBALS[\"xoopsModuleConfig\"][\"category_delete_forced\"] انجام دهید");

//define($GLOBALS["ART_VAR_PREFIXU"]."_MD_CATEGORY1_CAN_NOT_DELETE","شاخه  با شماره cat_id=1 را نمیتوان حذف کرد");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_PARENT_CATEGORY","شاخه بالاسری");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ENTRY_SELECT","انتخاب مقاله ورودی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ARTICLE_SELECT","انتخاب مقاله");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DEFAULT","پیش فرض");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_DESC","نزولی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_ASC","صعودی");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_SORTORDER","چیده شده بر اساس %1\$s در %2\$s"); // sort, order
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_UPDATE_TIME","زمان به روز شدن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_ARTICLE","تصویر اسپات لایت مقاله");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_IMAGE_UPLOADED","تصویر بارگذاری شده");

define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP","کمک");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_PUBLISH_ARTICLE","متن فعلی را ذخیره کرده و ارسال کنید تا در سایت منتشر شود (برای انتشار در سایت ممکن است با توجه به دسترسی‌ها تایید مدیر لازم باشد)");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE","متن فعلی را ذخیره کن");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE_EDIT","ذخیره کردن متن فعلی و بازگشت به صفحه ویرایش (برای انتشار مقاله، اگر هنوز منتشر نشده است،لازم است مقاله را ارسال کنید تا منتشر شود)");
define($GLOBALS["ART_VAR_PREFIXU"]."_MD_HELP_SAVE_DRAFT","ذخیره کردن متن فعلی به عنوان یک چک‌نویس خصوصی (فقط خود نویسنده آن را می‌بیند، اگر تاریخ انقضا برای مقاله تعیین شده باشد در آن تاریخ از سایت حذف خواهد شد)");
?>
