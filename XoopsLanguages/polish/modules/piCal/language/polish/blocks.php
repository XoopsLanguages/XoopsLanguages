<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_BL_LOADED' ) ) {

define( 'PICAL_BL_LOADED'  , 1 ) ;

// for monthly calendar block
define('_MB_PICAL_PREV_MONTH'     , 'Poprzedni');
define('_MB_PICAL_NEXT_MONTH'     , 'Nast�pny');
define('_MB_PICAL_YEAR'           , '');
define('_MB_PICAL_MONTH'          , '');
define('_MB_PICAL_JUMP'           , 'Id�');

// for after the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_AFTER'   , 'Wydarzenia po %s');

// for the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_THEDAY'  , 'Wydarzenia w %s');


define("_MB_PICAL_MAXITEMS"       , "Wy�wietl");
define("_MB_PICAL_CATSEL"         , "Kategoria");
define("_MB_PICAL_CATSELSUB"      , "Wy�wietl podkategorie");
define("_MB_PICAL_UNTILDAYS"      , "Do %s dni najwi�cej (0 - niesko�czono��)");

define("_MB_PICAL_MAXGIFSADAY"    , "Maksymalna liczba  wydarze� na dzie�");
define("_MB_PICAL_JUSTONCEADAYAPLUGIN", "Wy�wietl tylko 1 wydarzenie na dzie� i na plugin");

}

?>