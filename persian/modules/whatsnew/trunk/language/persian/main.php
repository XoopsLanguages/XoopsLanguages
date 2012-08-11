<?php
// $Id: main.php,v 1.3 2005/10/22 08:35:42 ohwada Exp $

// 2005-10-10 K.OHWADA
// _WHATSNEW_RSS_PERM

//=========================================================
// What's New Module
// Language pack for English
// 2005-06-06 K.OHWADA
//=========================================================

// index.php

// use $xoopsModule
//define("_WHATSNEW_NAME","What's New");

define("_WHATSNEW_DESC","این ماژول تمام موارد را از دو یا چند ماژول جمع آوری کرده و در یک بلاک نشان می دهد، همچنین RSS و ATOM را هم نشان می دهد");

define("_WHATSNEW_RSS_VALID","چک کردن معتبر بودن RSS/ATOM");
define("_WHATSNEW_VALID","چک کردن معتبر بودن");

define("_WHATSNEW_RSS_AUTO","پیدا کردن خود کار آدرس RSS");
define("_WHATSNEW_ATOM_AUTO","پیدا کردن خودکار آدرس ATOM");

// not use config file
//define("_WHATSNEW_WARNING_NOT_EXIST","Not exist of config file");

// template rss
define('_WHATSNEW_LASTBUILD','آخرین تاریخ ساخته شدن');
define('_WHATSNEW_LANGUAGE','زبان');
define('_WHATSNEW_DESCRIPTION','سایت');
define('_WHATSNEW_WEBMASTER','وب مستر');
define('_WHATSNEW_CATEGORY','شاخه');
define('_WHATSNEW_GENERATOR','ساختن');
define('_WHATSNEW_TITLE','عنوان');
define('_WHATSNEW_PUBDATE','تاریخ انتشار');

// template atom
define('_WHATSNEW_ID','شماره شناسه (ID)');
define('_WHATSNEW_MODIFIED','تاریخ اصلاح');
define('_WHATSNEW_ISSUED',   'تاریخ مشکل دار شدن');
define('_WHATSNEW_CREATED',  'تاریخ ساخته شدن');
define('_WHATSNEW_COPYRIGHT','حق کپی');
define('_WHATSNEW_SUMMARY','خلاصه');
define('_WHATSNEW_CONTENT','متن');
define('_WHATSNEW_AUTHOR_NAME','نام نویسنده');
define('_WHATSNEW_AUTHOR_URL',  'آدرس نویسنده');
define('_WHATSNEW_AUTHOR_EMAIL','ایمیل نویسنده');

define('_WHATSNEW_AUTO','شناسایی خودکار');
define('_WHATSNEW_SET','مشخص');

define('_WHATSNEW_ERROR_CONNCET','اتصال بر قرار نمیشود');
define('_WHATSNEW_ERROR_PARSE','خوانده نمی شود');
define('_WHATSNEW_ERROR_RSS_AUTO','RSS به صورت خودکار شناسایی نمیشود');
define('_WHATSNEW_ERROR_RSS_GET','RSS دریافت نمیشود');
define('_WHATSNEW_ERROR_ATOM_AUTO','ATOM به صورت خودکار شناسایی نمی شود');
define('_WHATSNEW_ERROR_ATOM_GET','ATOM دریافت نمیشود');

// 2005-10-10
define('_WHATSNEW_MAIN_PAGE','صفحه اصلی');
define('_WHATSNEW_RSS_PERM','کاربران عضو نمیتوانند ATOM/RSS/RDF را بخوانند<br />لطفا خارج شوید و در حالت مهمان آنها را بخوانید');

?>