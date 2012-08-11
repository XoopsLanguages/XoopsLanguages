<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_CNST_LOADED' ) ) {

define('MYALBUM_CNST_LOADED' , 1 ) ;

// System Constants (Don't Edit)
define("GPERM_INSERTABLE" , 1 ) ;
define("GPERM_SUPERINSERT" , 2 ) ;
define("GPERM_EDITABLE" , 4 ) ;
define("GPERM_SUPEREDIT" , 8 ) ;
define("GPERM_DELETABLE" , 16 ) ;
define("GPERM_SUPERDELETE" , 32 ) ;
define("GPERM_TOUCHOTHERS" , 64 ) ;
define("GPERM_SUPERTOUCHOTHERS" , 128 ) ;
define("GPERM_RATEVIEW" , 256 ) ;
define("GPERM_RATEVOTE" , 512 ) ;
define("GPERM_TELLAFRIEND" , 1024 ) ;

// Global Group Permission
define("_ALBM_GPERM_G_INSERTABLE" , "پست (نیازمند تایید)" ) ;
define("_ALBM_GPERM_G_SUPERINSERT" , "پست خوب" ) ;
define("_ALBM_GPERM_G_EDITABLE" , "ویرایش (نیازمند تایید)" ) ;
define("_ALBM_GPERM_G_SUPEREDIT" , "ویرایش خوب" ) ;
define("_ALBM_GPERM_G_DELETABLE" , "پاک کردن (نیازمند تایید)" ) ;
define("_ALBM_GPERM_G_SUPERDELETE" , "پاک کردن خوب" ) ;
define("_ALBM_GPERM_G_TOUCHOTHERS" , "دسترسي به تصویرهايي که از طرف ديگران فرستاده شده" ) ;
define("_ALBM_GPERM_G_SUPERTOUCHOTHERS" , "دسترسي هاي خوب ديگه" ) ;
define("_ALBM_GPERM_G_RATEVIEW" , "سرعت دیدن" ) ;
define("_ALBM_GPERM_G_RATEVOTE" , "رای" ) ;
define("_ALBM_GPERM_G_TELLAFRIEND" , "معرفی به دوست" ) ;

// Caption
define("_ALBM_CAPTION_TOTAL" , "مجموع:" ) ;
define("_ALBM_CAPTION_GUESTNAME" , "مهمان" ) ;
define("_ALBM_CAPTION_REFRESH" , "تازه كردن" ) ;
define("_ALBM_CAPTION_IMAGEXYT" , "اندازه(نوع)" ) ;
define("_ALBM_CAPTION_CATEGORY" , "شاخه" ) ;

}

?>