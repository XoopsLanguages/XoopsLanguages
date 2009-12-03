<?php
/* Basicly translated by voltan @ www.irxoops.org versions: 0.44 and 0.74
Updated & made necessary changes by stranger @ www.impresscms.ir since version: 0.81
*/

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3forum' ;
$constpref = '_MB_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2007-04-05 12:11:22
define($constpref.'_ALT_UNSOLVED','گفتگوی حل نشده');
define($constpref.'_ALT_MARKED','گفتگوی نشانه دار');

define( $constpref.'_LOADED' , 1 ) ;

// definitions for displaying blocks 
define($constpref."_FORUM","انجمن");
define($constpref."_TOPIC","گفتگو");
define($constpref."_REPLIES","پاسخ ها");
define($constpref."_VIEWS","بازدید");
define($constpref."_VOTESCOUNT","آراء");
define($constpref."_VOTESSUM","امتیازات");
define($constpref."_LASTPOST","آخرین پست");
define($constpref."_LASTUPDATED","آخرین به روز رسانی");
define($constpref."_LINKTOSEARCH","جستجو در این  انجمن");
define($constpref."_LINKTOLISTCATEGORIES","صفحه ی اصلی انجمن ها");
define($constpref."_LINKTOLISTFORUMS","صفحه اصلی انجمن");
define($constpref."_LINKTOLISTTOPICS","لیست تمام موضوعات");

}

?>