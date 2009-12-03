<?php
// $Id: modinfo.php,v 1.2 2006/09/29 12:48:54 ohwada Exp $

// 2006-09-20 K.OHWADA
// show blog

//=========================================================
// RSS Center Module
// 2006-01-01 K.OHWADA
//=========================================================

// --- define language begin ---
if( !defined('RSSC_LANG_MI_LOADED') ) 
{

define('RSSC_LANG_MI_LOADED', 1);

// The name of this module
define('_MI_RSSC_NAME','مرکز RSS');
define('_MI_RSSC_DESC','این ماژول  خوراک های RDF/RSS/ATOM را جمع آوری میکند. در پایگاه داده ها ذخیره میکند و در میان آنها جس جستجو  میکند');

// Names of sub menu
define('_MI_RSSC_SMNAME_HEADLINE','تیتر های خبری ساده');

// Names of blocks
define('_MI_RSSC_BNAME_LATEST','آخرین خوراک های RDF/RSS/ATOM');
define('_MI_RSSC_BNAME_HEADLINE','تیتر های خبری ساده');
define('_MI_RSSC_BNAME_REFRESH','تیتر های خبری ساده (update)');

// 2006-09-20
define('_MI_RSSC_BNAME_BLOG','RSSC Blog');

// Names of admin menu
define('_MI_RSSC_ADMENU_CONFIG','تنظیمات ماژول');
define('_MI_RSSC_ADMENU_LINKLIST','لیست لینک ها');

}
// --- define language end ---

?>