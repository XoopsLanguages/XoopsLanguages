<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_BL_LOADED' ) ) {

define( 'PICAL_BL_LOADED'  , 1 ) ;

// for monthly calendar block
define('_MB_PICAL_PREV_MONTH'     , 'Poprzedni');
define('_MB_PICAL_NEXT_MONTH'     , 'Następny');
define('_MB_PICAL_YEAR'           , '');
define('_MB_PICAL_MONTH'          , '');
define('_MB_PICAL_JUMP'           , 'Idź');

// for after the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_AFTER'   , 'Wydarzenia po %s');

// for the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_THEDAY'  , 'Wydarzenia w %s');


define("_MB_PICAL_MAXITEMS"       , "Wyświetl");
define("_MB_PICAL_CATSEL"         , "Kategoria");
define("_MB_PICAL_CATSELSUB"      , "Wyświetl podkategorie");
define("_MB_PICAL_UNTILDAYS"      , "Do %s dni najwięcej (0 - nieskończoność)");

define("_MB_PICAL_MAXGIFSADAY"    , "Maksymalna liczba  wydarzeń na dzień");
define("_MB_PICAL_JUSTONCEADAYAPLUGIN", "Wyświetl tylko 1 wydarzenie na dzień i na plugin");

}

?>