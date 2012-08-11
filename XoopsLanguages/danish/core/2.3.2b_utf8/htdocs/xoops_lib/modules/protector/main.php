<?php

$mytrustdirname = basename( dirname( __FILE__ ) ) ;
$mytrustdirpath = dirname( __FILE__ ) ;

// check permission of 'module_read' of this module
// (already checked by common.php)

// Validates $xoopsConfig['language'] in case xoops_lib is located inside webroot
$language = empty($xoopsConfig['language']) ? "english" : preg_replace("/[^a-z0-9_\-]/i","", $xoopsConfig['language']);
if( file_exists( "$mydirpath/language/$language/main.php" ) ) {
    // user customized language file (already read by common.php)
    // include_once "$mydirpath/language/$language/main.php" ;
} else if( file_exists( "$mytrustdirpath/language/$language/main.php" ) ) {
    // default language file
    include_once "$mytrustdirpath/language/$language/main.php" ;
} else {
    // fallback english
    include_once "$mytrustdirpath/language/english/main.php" ;
}

// fork each pages
$page = preg_replace( '/[^a-zA-Z0-9_-]/' , '' , @$_GET['page'] ) ;

if( file_exists( "$mytrustdirpath/main/$page.php" ) ) {
    include "$mytrustdirpath/main/$page.php" ;
} else {
    include "$mytrustdirpath/main/index.php" ;
}


?>
