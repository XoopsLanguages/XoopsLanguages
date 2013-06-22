<?php
/**
* $Id: $
* Module: MRBS
* Author: jobrazo
* Licence: GNU
*/
$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ABOUT","Hakkında");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_PREFERENCES","Tercihler");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ACCESSMODULE","Modüle Git");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_MODULE_ADMIN_TITLE","MRBS Yönetimi");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ROOMS_AREAS","Bölge ve Salon Yönetimi");

?>