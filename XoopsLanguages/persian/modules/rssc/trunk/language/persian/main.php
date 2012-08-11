<?php
// $Id: main.php,v 1.18 2008/01/30 08:53:28 ohwada Exp $

// 2008-01-20 K.OHWADA
// post_plugin in link table

// 2007-12-09 K.OHWADA
// remove _RSSC_CREATED

// 2007-10-10 K.OHWADA
// enclusure in link table

// 2007-06-01 K.OHWADA
// move RSS words to happy_linux module
// word table

// 2006-11-08 K.OHWADA
// not use _RSSC_SINGLE_SUMMARY

// 2006-09-20 K.OHWADA
// conflict with weblinks
// error message

// 2006-07-08 K.OHWADA
// corresponding to podcast
// link exist check

// 2006-06-04 K.OHWADA
// _RSSC_SINGLE_LINK, etc

// 2006-04-16 K.OHWADA
// BUG 3864: suppress Notice Undefined offset: 0
//   _RSSC_NO_HEADLINK

//=========================================================
// RSS Center Module
// 2006-01-01 K.OHWADA
//=========================================================

// --- define language begin ---
if( !defined('RSSC_LANG_MB_LOADED') ) 
{

define('RSSC_LANG_MB_LOADED', 1);

// global
define('_ADDED','اضافه شد');
define('_DELETED','حذف شد');
define('_UPDATE','به روز کردن');
define('_UPDATED','به روز شد');
define('_MODIFY',  'ویرایش');
define('_MODIFIED','ویرایش شد');
//define('_SAVE','ذخیره');
//define('_SAVED','ذخیره شد');
define('_CLEAR',  'پاک کردن');
define('_CLEARED','پاک شد');
//define('_EXECUTE','اجرا کردن');
//define('_EXECUTED','اجرا شد');
//define('_CREATE','ساختن');
//define('_CREATED','ساخته شد');

define('_VISIT','بازدید');
define('_SHOW','نمایش');
define('_KEYWORD','کلمات کلیدی');
define('_NUM','هیچ یک');
define('_NO_ACTION','بدن آرشیو');
define('_NO_RECORD','هیچ اطلاعاتی ذخیره نشده');

// index & search
define('_RSSC_MAIN','صفحه ی اصلی');
define('_RSSC_SEARCH','جستجو');
define('_RSSC_LATEST_FEEDS','خوراک های RDF/RSS/ATOM اخیر');
define('_RSSC_THEREARE','<b>%s</b> خوراک در پایگاه داده ها موجود است');

// headline
define('_RSSC_HEADLINE','تیتر های خبری ساده');
define('_RSSC_LASTUPDATE','آخرین به روز رسانی');

// single
define('_RSSC_SINGLE','خوراک ی تنها');

// common
define('_RSSC_SITE_TITLE','عنوان سایت');
define('_RSSC_SITE_LINK','آدرس سایت');
define('_RSSC_SITE_DESCRIPTION','توضیحات  سایت');
define('_RSSC_SITE_PUBLISHED','انتشار سایت');
define('_RSSC_SITE_UPDATED',   'به روز رسانی سایت');
define('_RSSC_SITE_DATE',      'اطلاعات سایت');
define('_RSSC_SITE_COPYRIGHT','کپی رایت سایت');
define('_RSSC_SITE_GENERATOR','مولد سایت');
define('_RSSC_SITE_CATEGORY',  'شاخه ی سایت');
define('_RSSC_SITE_WEBMASTER','وبمستر سایت');
define('_RSSC_SITE_LANGUAGE',  'زبان سایت');
define('_RSSC_TITLE','عنوان');
define('_RSSC_LINK',  'آدرس');
define('_RSSC_DESCRIPTION','توضیح'); 
define('_RSSC_SUMMARY','خلاصه'); 
define('_RSSC_CONTENT','تماس');
define('_RSSC_PUBLISHED','Published');
define('_RSSC_UPDATED',   'به روز شده');
define('_RSSC_CATEGORY',  'شاخه');
define('_RSSC_RIGHTS','Rights');
define('_RSSC_SOURCE','منبع');
define('_RSSC_AUTHOR_NAME','نام مولف');
define('_RSSC_AUTHOR_URI',  'سایت مولف');
define('_RSSC_AUTHOR_EMAIL','ایمل مولف');
define('_RSSC_IMAGE_TITLE','عنوان تصویر');
define('_RSSC_IMAGE_URL',   'ادرس تصویر');

// RSS
define('_RSSC_RSS_SITE_TITLE', _RSSC_SITE_TITLE);
define('_RSSC_RSS_SITE_LINK',  _RSSC_SITE_LINK);
define('_RSSC_RSS_SITE_DESCRIPTION',   _RSSC_SITE_DESCRIPTION);
define('_RSSC_RSS_SITE_LASTBUILDDATE', _RSSC_SITE_UPDATED);
define('_RSSC_RSS_SITE_PUBDATE',       _RSSC_SITE_PUBLISHED);
define('_RSSC_RSS_SITE_GENERATOR', _RSSC_SITE_GENERATOR);
define('_RSSC_RSS_SITE_CATEGORY',  _RSSC_SITE_CATEGORY);
define('_RSSC_RSS_SITE_WEBMASTER', _RSSC_SITE_WEBMASTER);
define('_RSSC_RSS_SITE_LANGUAGE',  _RSSC_SITE_LANGUAGE);
define('_RSSC_RSS_SITE_COPYRIGHT', _RSSC_SITE_COPYRIGHT);
define('_RSSC_RSS_SITE_MANAGINGEDITOR','ویرایشگر سایت');
define('_RSSC_RSS_SITE_DOCS','Site Docs');
define('_RSSC_RSS_SITE_CLOUD','Site Cloud');
define('_RSSC_RSS_SITE_TTL','Site TTL');
define('_RSSC_RSS_SITE_RATING','Site Rating');
define('_RSSC_RSS_SITE_TEXTINPUT','Site Text Input');
define('_RSSC_RSS_SITE_SKIPHOURS','Site Skip Hours');
define('_RSSC_RSS_SITE_SKIPDAYS',  'Site Skip Days');
define('_RSSC_RSS_IMAGE_TITLE',  _RSSC_IMAGE_TITLE);
define('_RSSC_RSS_IMAGE_URL',    _RSSC_IMAGE_URL);
define('_RSSC_RSS_IMAGE_WIDTH',  'عرض تصویر');
define('_RSSC_RSS_IMAGE_HEIGHT','طول تصویر');
define('_RSSC_RSS_IMAGE_LINK',  _RSSC_SITE_LINK);
define('_RSSC_RSS_TITLE',_RSSC_TITLE);
define('_RSSC_RSS_LINK', _RSSC_LINK);
define('_RSSC_RSS_DESCRIPTION', _RSSC_DESCRIPTION); 
define('_RSSC_RSS_PUBDATE',  _RSSC_PUBLISHED);
define('_RSSC_RSS_CATEGORY', _RSSC_CATEGORY);
define('_RSSC_RSS_SOURCE',   _RSSC_SOURCE);
define('_RSSC_RSS_GUID',   'RSS guid');
define('_RSSC_RSS_AUTHOR','مولف');
define('_RSSC_RSS_COMMENTS','پیام ها');
define('_RSSC_RSS_ENCLOSURE','پیوست');

// RDF
define('_RSSC_RDF_SITE_TITLE', _RSSC_SITE_TITLE);
define('_RSSC_RDF_SITE_LINK',  _RSSC_SITE_LINK);
define('_RSSC_RDF_SITE_DESCRIPTION', _RSSC_SITE_DESCRIPTION);
define('_RSSC_RDF_SITE_PUBLISHER',   _RSSC_SITE_WEBMASTER);
define('_RSSC_RDF_SITE_RIGHT', _RSSC_SITE_COPYRIGHT);
define('_RSSC_RDF_SITE_DATE',  _RSSC_SITE_PUBLISHED );
define('_RSSC_RDF_SITE_TEXTINPUT','Site Text Input');
define('_RSSC_RDF_SITE_IMAGE',  'تصویر سایت ');
define('_RSSC_RDF_IMAGE_TITLE', _RSSC_IMAGE_TITLE);
define('_RSSC_RDF_IMAGE_URL',   _RSSC_IMAGE_URL);
define('_RSSC_RDF_IMAGE_LINK',  _RSSC_SITE_LINK);
define('_RSSC_RDF_TITLE',_RSSC_TITLE);
define('_RSSC_RDF_LINK', _RSSC_LINK);
define('_RSSC_RDF_DESCRIPTION', _RSSC_DESCRIPTION); 
define('_RSSC_RDF_TEXTINPUT','Text Input');

// ATOM
define('_RSSC_ATOM_SITE_TITLE', _RSSC_SITE_TITLE);
define('_RSSC_ATOM_SITE_LINK',  _RSSC_SITE_LINK);
define('_RSSC_ATOM_SITE_PUBLISHED', _RSSC_SITE_PUBLISHED);
define('_RSSC_ATOM_SITE_UPDATED',   _RSSC_SITE_UPDATED);
define('_RSSC_ATOM_SITE_RIGHTS',    _RSSC_SITE_COPYRIGHT);
define('_RSSC_ATOM_SITE_GENERATOR', _RSSC_SITE_GENERATOR);
define('_RSSC_ATOM_SITE_CATEGORY',  _RSSC_SITE_CATEGORY);
define('_RSSC_ATOM_SITE_LINK_ALTERNATE', _RSSC_SITE_LINK);
define('_RSSC_ATOM_SITE_LINK_SELF','ATOM Self URL');
define('_RSSC_ATOM_SITE_ID','ID سایت');
define('_RSSC_ATOM_SITE_CONTRIBUTOR','Site Contributor');
define('_RSSC_ATOM_SITE_SUBTITLE','Site Subtitle');
define('_RSSC_ATOM_SITE_ICON','آیکن سایت');
define('_RSSC_ATOM_SITE_LOGO','لوگوی سایت');
define('_RSSC_ATOM_SITE_SOURCE','منبع سایت');
define('_RSSC_ATOM_SITE_AUTHOR_NAME', _RSSC_SITE_WEBMASTER);
define('_RSSC_ATOM_SITE_AUTHOR_URI',  'آدرس وب مستر');
define('_RSSC_ATOM_SITE_AUTHOR_EMAIL','ایمیل وب مستر');
define('_RSSC_ATOM_TITLE', _RSSC_TITLE);
define('_RSSC_ATOM_LINK',  _RSSC_LINK);
define('_RSSC_ATOM_PUBLISHED', _RSSC_PUBLISHED);
define('_RSSC_ATOM_UPDATED',   _RSSC_UPDATED);
define('_RSSC_ATOM_SUMMARY',  _RSSC_SUMMARY); 
define('_RSSC_ATOM_CONTENT',  _RSSC_CONTENT);
define('_RSSC_ATOM_CATEGORY', _RSSC_CATEGORY);
define('_RSSC_ATOM_RIGHTS',   _RSSC_RIGHTS);
define('_RSSC_ATOM_SOURCE',   _RSSC_SOURCE);
define('_RSSC_ATOM_ID','ATOM id');
define('_RSSC_ATOM_CONTRIBUTOR','شرکت کننده');
define('_RSSC_ATOM_AUTHOR_NAME', _RSSC_AUTHOR_NAME);
define('_RSSC_ATOM_AUTHOR_URI',  _RSSC_AUTHOR_URI);
define('_RSSC_ATOM_AUTHOR_EMAIL',_RSSC_AUTHOR_EMAIL);

// Dublin Core
define('_RSSC_DC_TITLE',_RSSC_TITLE);
define('_RSSC_DC_DESCRIPTION', _RSSC_DESCRIPTION); 
define('_RSSC_DC_RIGHTS', _RSSC_RIGHTS);
define('_RSSC_DC_PUBLISHER','ناشر');
define('_RSSC_DC_CREATOR','سازنده');
define('_RSSC_DC_DATE','تاریخ');
define('_RSSC_DC_FORMAT','Fromat');
define('_RSSC_DC_RELATION','Relation');
define('_RSSC_DC_IDENTIFIER','معين كننده هويت');
define('_RSSC_DC_COVERAGE','پوشش');
define('_RSSC_DC_AUDIENCE','مستمعین');
define('_RSSC_DC_SUBJECT','موضوع');
define('_RSSC_CONTENT_ENCODED', _RSSC_CONTENT);

// link table item
define('_RSSC_LINK_ID','ID لینک');
define('_RSSC_USER_ID','ID کاربر');
define('_RSSC_MOD_ID','ID ماژول');
define('_RSSC_LTYPE','Type');
define('_RSSC_REFRESH_INTERVAL','فاصله ی تازه کردن( زمان ریفریش)');
define('_RSSC_HEADLINE_ORDER','Headline Order');
define('_RSSC_ENCODING','اینکدینج');
define('_RSSC_RDF_URL','آدرس RDF');
define('_RSSC_RSS_URL','آدرس RSS');
define('_RSSC_ATOM_URL','آدرس ATOM');
define('_RSSC_RSS_MODE','روش RSS');
define('_RSSC_RSS_MODE_NON',  'هیچ یک');
define('_RSSC_RSS_MODE_RDF',  'فرمت RDF');
define('_RSSC_RSS_MODE_RSS',  'فرمت RSS');
define('_RSSC_RSS_MODE_ATOM','فرمت ATOM');
define('_RSSC_RSS_MODE_AUTO','یافتن خودکار');

// feed table item
define('_RSSC_FEED_ID','ID  خوراک');
define('_RSSC_MODE_CONT','Content Mode');
define('_RSSC_RAWS','Raw Data');
define('_RSSC_SEARCH_FIELD','فیلد های جستجو');

// black table item
define('_RSSC_BLACK_ID','ID سیاه');
define('_RSSC_WHITE_ID','ID سفید');

// 2006-04-16 K.OHWADA
define('_RSSC_NO_HEADLINK','there are no selected headlink link');
define('_RSSC_NO_FEED','there are no feed data');

// === 2006-06-04 ===
// single link
define('_RSSC_SINGLE_LINK',  'لینک تنها');
define('_RSSC_SINGLE_LINK_UTF8','لینک تنها با UTF-8');
//define('_RSSC_SINGLE_SUMMARY','خلاصه');
//define('_RSSC_SINGLE_CONTENT','Content allowed HTML tags');
//define('_RSSC_UTF8_SUMMARY','Summary with UTF-8');
//define('_RSSC_UTF8_CONTENT','Content allowed HTML tags with UTF-8');

// detect encoding
define('_RSSC_ASSUME_ENCODING','assume xml encoding %s ,<br />because cannot detect encoding automatically');

// rss item
//define('_RSSC_CREATED','Created');
//define('_RSSC_ATOM_CONTRIBUTOR_NAME','Contoributor');
//define('_RSSC_ATOM_CONTRIBUTOR_URI',  'Contoributor URL');
//define('_RSSC_ATOM_CONTRIBUTOR_EMAIL','Contoributor email');

// === 2006-07-08 ===
// bread crumb
//define('_HOME','HOME');

// podcast
define('_RSSC_PODCAST','Podcast');
//define('_RSSC_ENCLOSURE_URL',    'لینک پیوست');
//define('_RSSC_ENCLOSURE_TYPE',   'نوع پیوست');
//define('_RSSC_ENCLOSURE_LENGTH','مدت  پیوست');

// === 2006-09-01 ===
// conflict with weblinks
//if( !defined('_HOME') ) 
//{
//	define('_HOME','خانه');
//	define('_SAVE','ذخیره');
//	define('_SAVED','ذخیره شد');
//	define('_EXECUTE','اجرا کردن');
//	define('_EXECUTED','اجرا شد');
//	define('_CREATE','ساختن');
//	define('_CREATED','ساخته شد');
//}

// error message
define('_RSSC_DB_ERROR',           'خطا در پایگاه داده های ');
define('_RSSC_DISCOVER_SUCCEEDED','کشف خودکار RSS موفقیت آمیز بود');
define('_RSSC_DISCOVER_FAILED',    'خطا در کشف خودکار RSS');
define('_RSSC_PARSE_MSG',          'پیام تجزیه ی RSS');
define('_RSSC_PARSE_FAILED',            'خطا در تجزیه کردن RSS');
define('_RSSC_PARSE_NOT_READ_XML_URL',  'خطا در تجزیه کردن RSS: ناتوان در خواندن آدرس RSS');
define('_RSSC_PARSE_NOT_FIND_ENCODING','خطا در تجزیه ی RSS : اینکودینگ یافت نشد');

define('_RSSC_REFRESH_ERROR','خطا در تازه کردن RSS');
define('_RSSC_LINK_NOT_EXIST',  'هیچ لینک متناظری در ماژول RSSC وجود ندارد');
define('_RSSC_LINK_EXIST_MORE','There are twe or more links which have same "RDF/RSS/ATOM URL"');
define('_RSSC_LINK_ALREADY',    'This link exists already which have same "RDF/RSS/ATOM URL"');

// refresh link
define('_RSSC_REFRESH_LINK','تازه کردن خوراک های RDF/RSS/ATOM');
define('_RSSC_REFRESH_LINK_DSC','Then, refresh RSS feeds <br />Discover <b>RDF/RSS/ATOM URL</b> automatically and detect <b>Encoding</b> automatically, <br />if they are not set up.');
define('_RSSC_REFRESH_LINK_FINISHED','تازه کردن خوراک ها به پایان رسید');

// for other module
define('_RSSC_RSSC_LID','ID لینک از ماژول RSSC ');
define('_RSSC_RSSC_LID_UPDATE','ID لینک از ماژول RSSC به روز شد ');
define('_RSSC_GOTO_RSSC_ADMIN_LINK','برو به صفحهی مدیریت ماژول مرکز RSSC');

// === 2007-06-01 ===
// word table
define('_RSSC_WORD_ID','Word ID');
define('_RSSC_WORD_WORD','Reject Word');
define('_RSSC_WORD_POINT','Point');
define('_RSSC_ACT','Status');
define('_RSSC_ACT_NON','Invalid');
define('_RSSC_ACT_ACT','Valid');
define('_RSSC_REG','Expression of URL');
define('_RSSC_REG_NORMAL','Normal');
define('_RSSC_REG_EXP','Regular Expression');
define('_RSSC_FREQ_COUNT','Frequency Count');

// feed table
define('_RSSC_FEED_ACT',     'Status');
define('_RSSC_FEED_ACT_NON','Not Show');
define('_RSSC_FEED_ACT_VIEW','Show');

// link table
define('_RSSC_LTYPE_NON','Not refresh feed');
define('_RSSC_LTYPE_SEARCH','Search Site');
define('_RSSC_LTYPE_NORMAL','Normal');

define('_RSSC_XML_URL','RDF/RSS/ATOM URL');

// === 2007-10-10 ===
// link table
define('_RSSC_LINK_ENCLOSURE','Operation of enclusure tag');
define('_RSSC_LINK_ENCLOSURE_NON','Not use');
define('_RSSC_LINK_ENCLOSURE_POD','Assume PodCast');
define('_RSSC_LINK_CENSOR','Words to censor in title');
//define('_RSSC_LINK_PLUGIN','Plugin');

// black & white table
define('_RSSC_BW_CACHE','Cache of feed count');
define('_RSSC_BW_CTIME','Cache Time of feed count');

// keyword manage
define('_RSSC_KEYWORD','Keyword');

// === 2008-01-20 ===
// plugin list
define('_RSSC_PLUGIN_LIST','Plugin List');
define('_RSSC_PLUGIN_NAME','Plugin Name');
define('_RSSC_PLUGIN_DESCRIPTION','Description');
define('_RSSC_PLUGIN_USAGE','Usage');

// link table
define('_RSSC_PRE_PLUGIN','Pre-Processing Plugin');
define('_RSSC_POST_PLUGIN','Post-Processing Plugin');

}
// --- define language end ---

?>