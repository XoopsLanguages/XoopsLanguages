<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: multiMenu 2.x
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*/
// 2.x

// Common values
$main_val_array =  array( 
// commons
                'IMAGE'        => 'تصویر',
                'ID'           => 'N',
                'TITLE'        => 'عنوان',
                'ADMIN'        => 'مدیریت',
                'WEIGHT'       => 'عرض',
                'ONLINE'       => 'آنلاین',
                'OFFLINE'      => 'آفلاین',
                'HIDDEN'       => 'مخفی',
                'HIDE'         => 'مخفی',
                'OPTIONS'      => 'گزینه ها',
                'UPDATE'       => 'به روز کردن',
                'NODATA'       => 'هیچ اطلاعاتی برای نمایش موجود نیست !',
                'SITEMAP'      => 'نقشه سایت',
                'DESC'         => 'توضیحات',
                'OFF'          => 'خاموش',
                'ON'           => 'روشن',

                'HELP'         => 'کمک',
                'INDEX'        => 'صفحه اصلی',
                'INDEXDSC'     => 'صفحه اصلی ماژول',
                'CREDIT'       => '%s یک نگارش اصلی است از %s.',
                'QUERIES'      => 'جستار ها',
                'MENU'         => 'منوها',
                'LINK'         => 'لینک ها',
                'URL'          => 'Url',
                'QUERY'        => 'جستار',
                'BLOCKS'       => 'بلاک ها',
                'IMAGES'       => 'تصاویر',
                'SETTINGS'     => 'تنظیمات',
                'UTILS'        => 'ابزار',
                'STATUS'       => 'وضعیت',
                'EDIT'         => 'ویرایش',
                'CLONE'        => 'تکثیر',
                'CANCEL'       => 'لغو',
                'SUBMIT'       => 'ارسال',
                'DELETE'       => 'حذف',
                'OTHER'        => 'دیگر:',
                'CSS'          => 'Style صفحه',

// Admin tab menus
                'MENUDSC'      => '1. مدیریت و ساخت منو',
                'LINKDSC'      => '2. مدیریت و ساخت لینک',
                'QUERYDSC'     => '3. مدیریت و ساخت جستار های پایگاه داده ها',
                'IMAGESDSC'    => '4. مدیریت تصاویر',
                'TEMPLATESDSC' => '5. مدیریت اطلاعات تمپلیت ها, CSS و اسکریپ ها',
                'BLOCKSDSC'    => '6. مدیریت بلاک ها و دسترسی گروه ها',
                'SETTINGSDSC'  => '7. مدیریت تنظیمات اصلی ماژول',
                'UTILSDSC'     => '8. ماژول ابزار',
                'HELPDSC'      => '9. کمک و راهنمایی در استفاده از ماژول',

// SQL operations
                'INSERTED'     => 'اطلاعات با موفقیت وارد شد.',
                'UPDATED'      => 'اطلاعات با موفقیت به روز شد.',
                'CONFIRM'      => 'آیا مطمئن هستید که میخواهید پاک کنید :',
                'DELETED'      => 'اطلاعات با موفقیت حذف شد !',
                'SUREDELETE'   => 'آیا مطمئن هستید که میخواهید این لینک را حذف کنید ؟',
                'NOTUPDATED'   => 'به روز کردن پایگاه داده ها غیر ممکن است !',


// Images
                'RESIZE'       => 'تغییر اندازه',
                'UPLOAD'       => 'بارگذاری',
                'NEWIMAGE'     => 'بارگذاری تصویر جدید',
                'SERVER_CONF'  => 'اطلاعات پیکربندی سرور',
                'XOOPS_VERSION'=> 'نسخه زوپس',
                'GRAPH_GD_LIB_VERSION' => 'کتاب خانه GD',

                'GIF_SUPPORT'  => 'پشتیبانی از GIF',
                'JPEG_SUPPORT' => 'پشتیبانی از JPG',
                'PNG_SUPPORT'  => 'پشتیبانی از PNG',

                'NORMAL'       => 'معمولی',
                'ROUNDED'      => 'گرد کردن گوشه ها',
                'BW'           => 'سیاه سفید',
                'SHADOW'       => 'سایه',
                'GRAD'         => 'متحرک',
                'INFO'         => 'متن',
                'CHECK_ALL'    => 'انتخاب همه',

                'THUMBGEN'     => 'تولدی کننده تصاویر بند انگشتی',
                'TEXT'         => 'متن',
                'WIDTH'        => 'عرض',
                'HEIGHT'       => 'ارتفاع',
                'BCKCOLOR'     => 'تصویر پس زمینه',
                'DIR'          => 'شاخه',
                'UPLOADED'     => 'فایل با موفقیت بارگذاری شد !',
                'NOTUPLOADED'  => 'در هنگام بارگذاری فایل یه خطا روی داد !',
                'NOT_CREATED'  => 'شاخه بارگذاری فایل موجود نیست !',

// Templates
                'TPL'          => 'تمپلیت',
                'SCRIPT'       => 'اسکریپ',
                'TEMPLATES'    => 'تمپلیت ها',
                'TEMPLATE'     => 'تمپلیت',

// Queries
                'NEW_QUERY'    => 'ساخت یک جستار جدید از پایگاه داده ها',
                'EDIT_QUERY'   => 'ویرایش جستار',
                'TABLE'        => '[BD] جدول',
                'QID'          => '[BD] ID فیلد',
                'QSUBJECT'     => '[BD] موضوع فیلد',
                'QDESCRIPTION' => '[BD] Alt field',
                'QIMAGE'       => '[BD] تصویر فیلد',
                'QIMAGEURL'    => 'شاخه تصویر',
                'QURL'         => 'لینک<br />
<font style="font-weight:normal;">{id} : ID value</font>',
                'QWHERE'       => '[BD] شرایط<br />
<font style="font-weight:normal;">{date} : زمان فعلی</font>',
                'QORDER'       => '[BD] سفارشی کردن نمایش اطلاعات',
                'QLIMIT'       => 'بیشترین تعداد لینک ها برای نمایش',
                'TROUBLE'      => 'خطا',
                'NEXT'         => 'بعدی...',
                'TABLE_CHECK'  => 'برسی جدول ',
                'FIELD'        => 'Field',
                'NULL'         => 'Null',
                'KEY'          => 'Key',
                'DEFAULT'      => 'Default',
                'EXTRA'        => 'Extra',
                'N'            => 'N',
                'CLOSE'        => 'Close',

 // Menus
                'NEW_MENU'     => 'ساخت منو',
                'EDIT_MENU'    => 'ویرایش منو',
                'ALT_TITLE'    => 'عنوان دیگر',
                'IMAGEDIR'     => 'شاخه تصاویر',
// Links
                'NEW_LINK'     => 'ساخت لینک',
                'EDIT_LINK'    => 'ویرایش لینک',
                'TYPE'         => 'نوع',
                'WAITING'      => 'صبر کنید ...',
                'INFOS'        => 'اطلاعات',
                'INFOBULLE'    => 'Tooltip',
                'IMAGEURL'     => 'تصویر فاصله دار',

                'LINKIN'       => 'صفحه محلی',
                'LINKOUT'      => 'صفحه دور',
                'PERMANENT'    => 'پایدار',
                'RELATIVE'     => 'وابسته',
                'LINK_PERM'    => 'پایدار',
                'LINK_REL'     => 'وابسته',
                'LINK_IN'      => 'محلی',
                'LINK_OUT'     => 'دور',

                'TOP'          => 'بالا',
                'BOTTOM'       => 'پایین',

                'TARG_AUTO'    => 'خودکار (detect best target configuration)',
                '_SELF'        => 'Self (در همان صفحه باز کن)',
                '_BLANK'       => 'سفید (در صفحه جدید باز کن)',

                'SELF'         => 'در همان صفحه باز کن',
                'BLANK'        => 'در صفحه جدید باز کن',

                'LINKTO'       => 'لینک به:',
                'NONE'         => 'هیچ',

// Help

                'MENUCSSH'     => 'کمک در صفحه style منو ها',
                'LINKCSSH'     => 'کمک در صفحه style لینک ها',
                'SAMPLE'       => 'نمونه',
                'ARTICLE'      => 'گفتار',

                'MAIN'         => 'اصلی',
                'MAINDSC'      => 'اطلاعات اصلی در مورد این ماژول.',
                'SMARTY'       => 'اسمارتی های متغییر',
                'SMARTYDSC'    => 'لیست اسمارتی های متغییر',
                'HELPS'        => 'کمک و راهنمایی',
                'HELPSDSC'     => 'راهنمایی در مورد استفاده از این ماژول',
                'TIPSDSC'      => 'Tips و tricks در مورد این ماژول.',
                'INTRODUCTION' => 'Intro',
                'KNOW'         => 'آیا میدانید؟',
                'TIPS'         => 'Tips',

                'DEVELOPPERS'  => 'توسعه دهندگان',
                'INFORMATIONS' => 'اطلاعات',
                'DISCLAIMER'   => 'اخطار',
                'AUTHOR_WORD'  => 'دنیا سازندگان',
                'VERSION_HISTORY' => 'تاریخ نسخه',
                'LANGUAGE_DEFINE' => 'معین کردن زبان',
                'FIXES_ITEM'   => 'متغییر های سراسری',
                'VARIABLES_ITEM' => 'متغیر های لینک',

// Utils
                'CLONEDSC'     => 'تکثیر سودمند ماژول',
                'CLONE_NAME'   => 'نام تکثیر<br /><i>
                                         <ul>
                                             <li>بیشتر از 16 کارکتر نباشد</li>
                                             <li>کارکتر خاص نباشد</li>
                                             <li>نام هیچکدام از ماژول های موجود نباشد</li>
                                             <li>حروف بزرگ و فاصله با دکمه spaces پذیرفته نیست</li>
                                         </ul></i>
                                         نمونه : \'Mon Module 01\'. ',
                'CLEAR'        => 'Clear',

                'NEW'          => 'جدید',
                'SUBMENU'      => 'نوع',

                'TARGET'       => 'هدف',
                'GROUPS'       => 'گروه ها',
                'OPERATION'    => 'گردانندگان',

                'clonetrouble' => 'فایل های ماژول تکثیر شده در "cache" ساخته میشوند (ریشه سایت خود را ببینید).<br />
                                   فایل های تکثیر شده را از شاخه "cache" به "module" منتقل کنید. با استفاده از برنامه ftp.<br />
                                   دسترسی اسناد تکثیر شده را به 664 تغیر دهید.<br />
                                   <br />
                                   در ادامه ماژول تکثیر شده را مثل مابقی ماژول ها نصب کنید.',
                 'module_exists' => 'خطا: این ماژول در حال حاضر موجود است! نام تکثیر خود را عوض کنید.',
                 'cloned'      => 'ماژول با موفیت تکثیر شد!',
                 'notcloned'   => 'خطا: تنظیمات تکثیر اشتباه است!',

                 'import'      => 'وارد کردن SQL',
                 'importdsc'     => 'وارد کردن اطلاعات شاخه های SQL به پایگاه داده ها!',
                 'db_datas'      => 'اطلاعت SQL',
                 'imported'      => 'اطلاعات با موفقیت وارد شد!',
                 'notimported'   => 'اطلاعات رد شد!'
                 );

// Render defines

 	foreach ( $main_val_array as $item_lg=>$item_val ) {
                 define(strtoupper('_MD_MULTIMENU_'.$item_lg),$item_val);
	}
	
	

?>