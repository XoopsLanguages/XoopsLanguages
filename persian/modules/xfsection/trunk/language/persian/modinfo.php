<?php
// $Id: modinfo.php,v 1.2 2005/06/20 15:03:23 ohwada Exp $

// 2004/07/01 K.OHWADA
// WFsection 2.01 correspondence
// rename WFS to XFS, since menu name had been change

// 2003/11/21 K.OHWADA
// multiple install of same module
// rename WFS -> XFS
// rename WF-Section to XF-Section
// add menu: bulk import

// Module Info

// The name of this module
// WF -> XF
define('_MI_XFS_NAME','ماژول مقالات XF-Section');

// A brief description of this module
// WF -> XF
define('_MI_XFS_DESC','ماژولی برای مدیریت مقاله ها');

// Names of blocks for this module (Not all module has blocks)
// WF -> XF
define('_MI_XFS_BNAME','مقاله ها جدید');
define('_MI_XFS_BNAME_MENU','منوی مقاله ها');
define('_MI_XFS_TOPICS','سر فصل های مقاله ها');
define('_MI_XFS_BNAME3','مقاله با ارزش');
define('_MI_XFS_BNAME4','بهترین مقاله ها');
define('_MI_XFS_BNAME5','مقاله های جدید');
define('_MI_XFS_BNAME6','فایل های دانلود شده از مقاله ها');
define('_MI_XFS_BNAME_ARTMENU','لینک مقاله ها');

// Sub menus in main menu block
define('_MI_XFS_SUBMIT','ارسال مقاله');
define('_MI_XFS_POPULAR','پر طرفدار');
define('_MI_XFS_RATEFILE','ممتاز');

// rename WFS to XFS
// multiple install of same module
if ( !defined("_XFS_MODINFO_PHP") )
{
define("_XFS_MODINFO_PHP",1);

// Names of admin menu items
define('_MI_XFS_ADMENU1','تنظیمات');
define('_MI_XFS_ADMENU2','مدیریت صفحه اصلی مقاله ها');
define('_MI_XFS_ADMENU3','مدیریت مسیر ها');
define('_MI_XFS_ADMENU4','مدیریت شاخه ها');
define('_MI_XFS_ADMENU5','مدیریت مقاله ها');
define('_MI_XFS_ADMENU6','-- ایجاد مقاله جدید');
define('_MI_XFS_ADMENU7','مدیریت فایل');
define('_MI_XFS_ADMENU8','فهرست فایل های خراب');
define('_MI_XFS_ADMENU9','فهرست مقاله های ارسال شده');
define('_MI_XFS_ADMENU10','مدیریت وزن');
define('_MI_XFS_ADMENU11','فایل های مقاله ها');

// add menu: bulk import
define('_MI_XFS_ADMENU12','وارد کردن فایل های HTML  به تعداد زیاد');
}

?>