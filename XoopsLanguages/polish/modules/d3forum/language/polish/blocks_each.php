<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3forum' ;
$constpref = '_MB_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// definitions for displaying blocks
define($constpref."_FORUM","Forum");
define($constpref."_TOPIC","Temat");
define($constpref."_REPLIES","Odpowiedzi");
define($constpref."_VIEWS","Ods�on");
define($constpref."_VOTESCOUNT","G�os�w");
define($constpref."_VOTESSUM","Punkt�w");
define($constpref."_LASTPOST","Ostatni post");
define($constpref."_LASTUPDATED","Ostatnio aktualizowany");
define($constpref."_LINKTOSEARCH","Szukaj na forum");
define($constpref."_LINKTOLISTCATEGORIES","Indeks kategorii");
define($constpref."_LINKTOLISTFORUMS","Indeks forum");
define($constpref."_LINKTOLISTTOPICS","Indeks temat�w");
define($constpref."_ALT_UNSOLVED","Nierozwi�zane tematy");
define($constpref."_ALT_MARKED","Zaznaczony temat");

}

?>