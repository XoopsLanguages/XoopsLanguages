<?php
//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  Multimenu v1.0								//
//  ------------------------------------------------------------------------ 	//

// Common values
 	$com_val_array =  array( 'option'     => 'گزینه ها',
  	                         'settings'   => 'تنظیمات',
  	                         'item'       => 'مورد',

  	                         'admin'      => 'مدیریت',
  	                         'edit'       => 'ویرایش',
  	                         'clone'      => 'تکثیر'
                                 );

// This block menu values
 	$block_val_array =  array( 'tpl'      => 'تمپلیت',
  	                           'tpldsc'   => 'حالت نمایش.',
  	                           'ul'       => 'لیست مرتب نشده',
  	                           'menu'     => 'منوی اصلی زوپس',
  	                           'image'    => 'تصویر',
  	                           'extended' => 'تمدید شده',

        	                   'display'      => 'نمایش',
        	                   'displaydsc'      => 'اطلاعات نمایش داده شده',
        	                   'title'           => 'عنوان',
        	                   'logo'            => 'لوگو',

  	                           'status'   => 'وضغیت',
  	                           'statusdsc'   => 'نمایش وضعیت صفحه.',
  	                           'online'          => 'آنلاین',
  	                           'hidden'          => 'مخفی',
  	                           'offline'         => 'آفلاین',

  	                           'description'     => 'توضیحات',
  	                           'descriptiondsc'  => 'متن توضیحات برای نمایش در بلاک.',

  	                           'max'      => 'بیشترین',
  	                           'maxdsc'          => 'بیشترین لینک ها برای نمایش.<br />
                                    اخطار : این تابع تمام زیر لینک ها را به جز زیر لینک های دارای جستار غیر فعال میکند !',


                                   'order'    => 'سفارشی بر اساس',
                                   'orderdsc'    => 'اخطار: لینک های اصلی و لینک های وابستهباید میکس شوند.',
                                   'weight'          => 'وزن چینش',
  	                           'titleasc'        => 'براساس حروف الفبا',
                                   'titledesc'       => 'نمایش  معکوس بر اساس حروف الفبا',
                                   

  	                           'relative' => 'نمایش لینک های وابسته',

  	                           'cols'     => 'ستون ها',
  	                           'colsdsc'     => 'تعداد ستون ها.',

  	                           'maxwidth' => 'اندازه تصویر بند انگشتی',
  	                           'maxwidthdsc' => 'تنظیم اندازه پیش فرض تصویر.<br />
                                     (W-H).',
                                   'pix'         => 'پیکسل',

  	                           'maxtitle'  => 'بلندی عنوان',
  	                           'maxtitledsc' => 'تنظیم بیشترین بلندی کارکتر ها در عنوان.',
                                   'char'        => 'کارکتر'
                                 );
                                 
// This item values
 	$block_item_array =  array('link'       => 'لینک ها',
 	                           'random'         => 'تصادفی',
 	                           'latest'         => 'Latest',
 	                           'popular'        => 'محبوب',
 	                           'slideshow'   => 'Slideshow',
 	                           'select'      => 'منو',
 	                           'selectdsc'      => 'انتخاب منو برای نمایش.',
 	                           'list'            => 'لیست منو ها',
 	                           'all'         => '[همه]',
 	                           'alt_title'   => 'Tooltip'
                                 );

// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $block_val_array,
                                       $block_item_array
                                      );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MB_MULTIMENU_'.$item_lg),$item_val);
	}
?>