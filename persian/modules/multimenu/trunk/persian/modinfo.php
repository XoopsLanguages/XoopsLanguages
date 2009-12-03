<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System    		     //
//                    Copyright (c) 2004 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//                   							     //
//                  Authors :						     //
//						- solo (www.wolfpackclan.com)//
//                  Multimenu v1.0						     //
//  ------------------------------------------------------------------------ //

// Common values
 	$com_val_array =  array( 'name'        => 'ابزار ساخت منو',
  	                         'dsc'         => 'ماژولی برای مدیریت منو ها و قسمت های ناوبری',
  	                         'clone'       => 'تکثیر',
  	                         'submit'      => 'ارسال',
  	                         'menu'        => 'منو',
  	                         'link'        => 'لینک',
  	                         'query'        => 'جستار',
  	                         'block'        => 'بلاک ها',
  	                         'utils'        => 'ابزار',

  	                         'index'       => 'صفحه اصلی',
  	                         'sitemap'     => 'نقشه سایت',
  	                         'edit'        => 'ویرایش',
  	                         'help'        => 'کمک و راهنمایی',
  	                         'settings'    => 'تنظیمات',
  	                         'item'        => 'مورد',
  	                         'meta'        => 'متا',
  	                         'slideshow'   => 'Slideshow',

  	                         'indexdsc'       => 'تنظیمات صفحه اصلی ماژول (بخش کاربر).',
  	                         'editdsc'        => 'تنظیمات صفحه ویرایش ماژول (بخش مدیر).',
  	                         'helpdsc'        => 'کمک و راهنمایی در ماژول',
  	                         'settingsdsc'    => 'لیست تنظیمات اصلی ماژول',
  	                         'itemdsc'        => 'تنظیمات گزینه های ماژول.',
  	                         'metadsc'        => 'تنظیمات متا ماژول.',
  	                         'slideshowdsc'   => 'Slideshow تنظیمات.',

  	                         'index_dsc'       => 'برگرد به صفحه اصلی ماژول (بخش کاربر).',
  	                         'menu_dsc'        => 'اضافه, حذف, تکثیر, ویرایش منو.',
  	                         'link_dsc'        => 'اضافه, حذف, تکثیر, ویرایش لینک.',
  	                         'query_dsc'       => 'اضافه, حذف, تکثیر, ویرایش جستار های پایگاه داده ها.',
  	                         'image_dsc'       => 'اضافه, حذف, ویرایش تصویر.',
  	                         'template_dsc'    => 'تمپلیت های سفارشی, style sheet و script.',
  	                         'block_dsc'       => 'تنظیم بلاک ها.',
  	                         'settings_dsc'    => 'تنظیم ویژگی های اصلی ماژول.',
  	                         'utils_dsc'       => 'تکثیر ماژول.',
                                 );

// Modinfo values
 	$pref_val_array =  array(
 	                          'mode_test'             => 'مقدار',

 	                          'mode_item_thumb'        => 'تصویر بند انگشتی',
 	                          'mode_item_slideshow'    => 'Slideshow',

 	                          'mode_list_image'        => 'تصویر ها',
 	                          'mode_list_select'       => 'جعبه انتخاب',
 	                          'mode_list_ul'           => 'لیست سفارشی نشده',

 	                          'welcome'                => '',
 	                          'metakeywords'           => '',
 	                          'metadescription'        => '',


 	                          'deactivated'            => 'خاموش',
 	                          'all'                    => 'همه'
                                 );

// Settings values
 	$sett_val_array =  array( 'banner'                 => 'بنر',
 	                          'bannerdsc'                 => 'آدرس بنری که در ماژول نمایش داده میشود.',
 	                          'bannerhlp'                 => 'Laisser vide pour ne rien afficher. شکل های قابل قبول تصاویر (.jpg, .gif, etc.).',

 	                          'background'             => 'تصویر پس زمینه',
 	                          'backgrounddsc'             => 'آدرس تصویر پس زمینه ای که در ماژول نمایش داده میشود.',
 	                          'backgroundhlp'             => 'Laisser vide pour ne rien afficher. شکل های قابل قبول تصاویر (.jpg, .gif, etc.).',

 	                          'activation'             => 'صفحات فعال',
 	                          'activationdsc'             => 'لیست صفحات فعال.',
                                  'activationhlp'             => 'Permet de dterminer quelles pages du modules sont actives en partie publique.',

 	                          'desc'                   => 'متن صفحه اصلی ماژول',
 	                          'descdsc'                   => 'متنی که در صفحه اصلی ماژول نمایش داده میشود.',
 	                          'deschlp'                   => ' از کد های زوپس و HTML پشتیبانی میشود (smilies et balises). Laisser vide pour ne rien afficher.',

 	                          'display'                => 'اطلاعات نمایش داده شده',
 	                          'displaydsc'                => 'لیست اطلاعات نمایش داده شده در صفحه اصلی ماژول.',
 	                          'displayhlp'                => 'نوع اطلاعات نمایش داده شده در صفحه اول ماژول را مشخص کنید.',
 	                          'display_thumb'                => 'تصویر بند انگشتی',
 	                          'display_description'          => 'توضیحات',
 	                          'display_admin'                => 'گزینه های مدیریت ',

 	                          'cols'                   => 'ستون ها',
 	                          'colsdsc'                   => 'تعداد ستون ها.',
 	                          'colshlp'                   => 'Cette valeur concerne  la fois l\'affichage des donnes sous forme de tableau en partie publique et administrative (ex : les images).',

 	                          'item_list'              => 'لیست صفحات',
 	                          'item_listdsc'              => 'نمایش لیست صفحات ماژول.',
 	                          'item_listhlp'              => 'Active et slectionne la liste des autres pages disponibles en parte publique du module.',
 	                          'display_none'                 => '- هیچ یک -',
 	                          'display_images'               => 'تصویر بند انگشتی',
 	                          'display_select'               => 'جعبه انتخاب',
 	                          'display_ul'                   => 'لیست سفارشی نشده',

 	                          'perpage'               =>  'بخش های هر صفحه',
 	                          'perpagedsc'                => 'تعداد بخش های که در هر صفحه نمایش داده شود.',
 	                          'perpagehlp'                => 'Dtermine le nombre d\'informations  afficher par pages du module (liste de menus, de lien, d\'images, etc.) en partie publique et administrative.',

 	                          'thumbmw'                => 'اندازه تصویر بند انگشتی',
 	                          'thumbmwdsc'                => 'طول و عرض پیشفرض تصویر بند انگشتی را مشخص کنید.',
 	                          'thumbmwhlp'                => '',

 	                          'color'                  => 'رنگ تصویر بند انگشتی',
 	                          'colordsc'                  => 'رنگ پیشفرض استفاده شده در تولدی کننده تصویر بند انگشتی.',
 	                          'colorhlp'                  => '',
 	                          
                                  'infobulle'              => 'Tooltips',
 	                          'infobulledsc'           => 'tooltips اجبرای نمایش داده شده در لینک ها.',
 	                          'infobullehlp'           => '',

 	                          'lenght'                 =>  'بیشترین اندازه عنوان',
 	                          'lenghtdsc'              =>  'بیشترین تعداد کارکتر های استفاده شده در هر لینک.',
 	                          'lenghthlp'              =>  '',

 	                          'blocks'                 => 'تعداد بلاک ها',
 	                          'blocksdsc'              => 'تعداد بلاک های تولید شده به وسیله ماژول. اگر این مقدار تغییر کرد, ماژول را به روز کنید تا بلاک های جدید ساخته شوند.',
 	                          'blockshlp'              => '',

 	                          'main'                   => 'بازگشت به صفحه اصلی',
 	                          'maindsc'                   => 'لینک بازگشت را به صفحه اصلی تنظیم کنید. <br />
                                   شاید  وابسته یا لینک غیر مشروط.',
 	                          'mainhlp'                   => '',

 	                          'template'               => 'تمپلیت',
 	                          'mode'                   => 'تمپلیت',
                                  'modedsc'                   => 'روش نمایش پیشفرض.',
                                  'modehlp'                   => '',

 	                          'dispsm'                 => 'نمایش تمپلیت',
 	                          'dispsmdsc'                 => 'نمایش انتخاب کننده تمپلیت در هر صفحه (بخش کاربر).',
 	                          'dispsmdhlp'                => '',

 	                          'selectmode'             => 'فعال کردن تمپلیت های موجود',
 	                          'selectmodedsc'             => 'تمپلیت های قابل استفاده در ماژول را انتخاب کنید (بخش کاربر و مدیر). ',
                                  'selectmodehlp'             => 'Attention : tous les modes restent utilisables ! Ce paramtre ne dfini que les modes disponibles dans la bote de slection des modes disponibles ct utilisateur. ',

 	                          'edit_mode'              => 'ویرایش تمپلیت',
 	                          'edit_modedsc'              => 'نمایش کد های تمپلیت ها در صفحات گزینه ها (فقط مدیر!).',
 	                          'edit_modehlp'              => '',

 	                          'item_name'              => 'نام گزینه ها',
 	                          'item_namedsc'              => 'جایگزین کردن نام گزینه.',
 	                          'item_namehlp'              => '',

 	                          'metakeyword'            => 'کلید های متا',
 	                          'metakeyworddsc'            => 'کلدی های متا استفاده شده در ماژول.',
 	                          'metakeywordhlp'            => '',

 	                          'metadesc'               => 'توضیح متا',
                                  'metadescdsc'               => 'توضیحات متا پیش فرض استفاده شده در ماژول (تعویض با توضیحات لینک اگر موجود بود).',
 	                          'metadeschlp'               => '',
 	                          
 	                          'dir'                    => 'شاخه تصاویر',
                                  'dirdsc'                    => 'شاخه ای تصاویر مربوط به ماژول در آن قرار میگیرد.',
                                  'dirhlp'                    => '',
                                  
                                  'tip'                    => 'تیپ ها',
                                  'tipdsc'                    => 'نمایش تیپ ها و حقه ( فن) ها در یک جعبه (بخش مدیر).',
                                  'tiphlp'                    => '',

 	                          'buttons'                => 'لینک های مدیر',
 	                          'buttonsdsc'                => 'انتخاب روش نمایش لینک های مدیر (فقط مدیر)',
 	                          'buttonshlp'                => '',
 	                          'image'                        => 'آیکن',
 	                          'text'                         => 'متن',
 	                          'button'                       => 'دکمه',
 	                          'select'                       => 'جعبه انتخاب کننده',
 	                          
 	                          'urw'                    => 'دوباره نویسی آدرس',
 	                          'urwdsc'                    => 'تنظیمات دوباره نویی آدرس.
                                                                  تعداد کارکتر های که در دوباره نویسی آدرس استفاده میشود را انتخاب کنید  (برپایه عنوان منو). ',
 	                          'urwhlp'                    => '',

 	                          'ss'                    => 'Slideshow تنظیمات',
                                  'ssdsc'                     => 'تنظیمات اصلی Slideshow بر اساس میلی ثانیه. مدت&#124;مرحله تغییر]',
                                  'sshlp'                     => '',
                                  
                                 );


// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $pref_val_array,
                                       $sett_val_array );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MI_MULTIMENU_'.$item_lg),$item_val);
	}
?>

