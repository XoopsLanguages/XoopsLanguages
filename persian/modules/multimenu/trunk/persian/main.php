<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2008 <http://www.xoops.org/>
*
* Module: multiMenu 2.x
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*/

// Common values
$main_val_array =  array(        'index'        => 'صفحه اصلی',
  	                         'admin'        => 'مدیریت',
  	                         'admins'       => 'مدیریت',
  	                         'sitemap'      => 'نقشه سایت',

  	                         'n'            => 'N',
  	                         'image'        => 'تصویر',
  	                         'title'        => 'عنوان',
  	                         'close'        => 'بستن',
  	                         'item'         => 'Item',
  	                         'description'  => 'توضیحات',

  	                         'source_code'  => 'کد های منبع',
  	                         'edit'         => 'ویرایش',
  	                         'clone'        => 'تکثیر',
  	                         'alt_title'    => 'Tooltip',
  	                         'other'        => 'دیگر ',

  	                         'menu'         => 'منو ها',
  	                         'images'       => 'تصاویر',
  	                         'templates'    => 'تمپلیت ها',
  	                         'blocks'       => 'بلاک ها',
  	                         'settings'     => 'تنظیمات',
  	                         'utils'        => 'ابزار',
  	                         'delete'       => 'حذف',

  	                         'query'        => 'جستار',
  	                         'link'         => 'لینک',
  	                         'block'        => 'بلاک',
  	                         'template'     => 'تمپلیت',
  	                         'help'         => 'کمک و راهنمایی',

  	                         'notactive'    => 'این صفحه فعال نیست.'
                                 );
                                 
// Settings values
 	$sett_val_array =  array( 

 	                          'thumb'                  => 'رنگ تصویر بند اگشتی',
 	                          'button'                 => 'لینک های مدیریت',
                                  'meta'                   => 'متا',
 	                          'num'                    => 'عدد',
 	                          'name'                   => 'Items\' name',
 	                          'slideshow'              => 'Slideshow',
 	                          'max_size'               => 'بیشترین اندازه',
 	                          'keywords'               => 'کلمات کلیدی',
 	                          'count'                  => 'عدد',
 	                          'title_lenght'           => 'بیشترین اندازه عنوان',
 	                          'display_selectmode'     => 'نمایش تمپلیت های موجود',


                                  'banner'                 => 'بنر',
                                  'background'             => 'تصویر پس زمینه',
                                  'activation'             => 'صفحات فعال',
 	                          'desc'                   => 'متن صفحه اصلی',
 	                          'display'                => 'اطلاعات نمایش داده شده',
 	                          'cols'                   => 'ستون ها',
 	                          'list'                   => 'لیست صفحات',
                                  'perpage'                => 'گزینه های هر صفحه',
 	                          'thumbmw'                => 'اندازه تصویر بند انگشتی',
 	                          'thumb_color'            => 'رنگ تصویر بند انگشتی',
                                  'infobulle'              => 'Tooltips',
                                  'lenght'                 => 'بیشترین اندازه عنوان',
                                  'imagemw'                => 'بیشترین اندازه تصویر بند انگشتی',
                                  'main'                   => 'صفحه اول',
                                  'template'               => 'تمپلیت',
 	                          'mode'                   => 'تمپلیت',
 	                          'dispsm'                 => 'نمایش تمپلیت های موجود',
 	                          'edit_mode'              => 'ویاریش حالت',
 	                          'selectmode'             => 'تمپلیت های موجود',
 	                          'item_name'              => 'نام موارد',
 	                          'metakeyword'            => 'کلمات کلیدی متا',
 	                          'metadesc'               => 'توضیحات متا',
 	                          'dir'                    => 'شاخه پیشفرض فایل ها',
                                  'tip'                    => 'تیپ ها',
 	                          'buttons'                => 'لینک های مدیریت',
 	                          'urw'                    => 'دوباره نویسی URL',
 	                          'ss'                     => 'Slideshow'
                                 );


                                 
// Render defines

        $item_val_array = array_merge( $main_val_array,
                                       $sett_val_array );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MULTIMENU_'.$item_lg),$item_val);
	}

?>