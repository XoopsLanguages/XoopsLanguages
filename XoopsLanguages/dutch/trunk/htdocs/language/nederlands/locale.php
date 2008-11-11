<?php

////////////////////////////////////////////////////////////////
//############################################################//
//## Translated by : Dylian Melgert                         ##//
//## Website       : http://www.dylian.melgert.net/software ##//
//## XOOPS version : 2.3                                    ##//
//############################################################//
////////////////////////////////////////////////////////////////

$file = "locale";

include(XOOPS_ROOT_PATH."/language/nederlands/config/config.php");
if($use_utf8 == "1"){
 include(XOOPS_ROOT_PATH."/language/nederlands/".$utf8_loc."/".$file.".php");
}else{
 include(XOOPS_ROOT_PATH."/language/nederlands/".$latin9_loc."/".$file.".php");
}

?>

