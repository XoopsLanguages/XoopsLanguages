<?php
/**
* $Id: $
* Module: MRBS
* Author: jobrazo
* Licence: GNU
*/

$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ABOUT","Over");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_PREFERENCES","Instellingen");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ACCESSMODULE","Ga naar de module");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ADMIN_TITLE","MRBS Administratie");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_AREAS","Kamers en Gebouwen");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_PERMISSION","Toegangsrechten");

?>