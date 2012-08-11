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
define("_ALBM_GPERM_G_INSERTABLE" , "Podesi tabele (Provjera je potrebna)" ) ;
define("_ALBM_GPERM_G_SUPERINSERT" , "Super-Insert" ) ;
define("_ALBM_GPERM_G_EDITABLE" , "Promjeni tabele (Provjera je potrebna)" ) ;
define("_ALBM_GPERM_G_SUPEREDIT" , "Super-&Auml;ndern" ) ;
define("_ALBM_GPERM_G_DELETABLE" , "Izbri&scaron;i (Provjera je potrebna)" ) ;
define("_ALBM_GPERM_G_SUPERDELETE" , "Super-Izbri&scaron;i" ) ;
define("_ALBM_GPERM_G_TOUCHOTHERS" , "Sliku ko je neko drugi poslao, 'dodirni' (touch)" ) ;
define("_ALBM_GPERM_G_SUPERTOUCHOTHERS" , "Super-Touch promjeni" ) ;
define("_ALBM_GPERM_G_RATEVIEW" , "Pregled glasanja" ) ;
define("_ALBM_GPERM_G_RATEVOTE" , "glasova" ) ;
define("_ALBM_GPERM_G_TELLAFRIEND" , "Javi svom prijatelju" ) ;

// Caption
define("_ALBM_CAPTION_TOTAL" , "Ukupno:" ) ;
define("_ALBM_CAPTION_GUESTNAME" , "Gostiju" ) ;
define("_ALBM_CAPTION_REFRESH" , "Aktualiziraj" ) ;
define("_ALBM_CAPTION_IMAGEXYT" , "Veli&#269;ina(Typ)" ) ;
define("_ALBM_CAPTION_CATEGORY" , "Kategorija" ) ;

}

?>
