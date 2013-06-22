<?php
/**
* $Id: $
* Module: MRBS
* Author: jobrazo
* Licence: GNU
*/

$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ABOUT","A propos");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_PREFERENCES","Pr&eacute;f&eacute;rences");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ACCESSMODULE","Aller au module");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_MODULE_ADMIN_TITLE","Administration MRBS");
define("_AM_".$GLOBALS["MRBS_PREFIX"]."_ROOMS_AREAS","Gestion des salles/zones");

?>