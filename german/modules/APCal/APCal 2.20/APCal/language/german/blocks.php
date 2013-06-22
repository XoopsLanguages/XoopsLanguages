<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MB_APCAL_BL_LOADED' ) ) {

define( '_MB_APCAL_BL_LOADED' , 1 ) ;

// for monthly calendar block
define('_MB_APCAL_PREV_MONTH','zurück');
define('_MB_APCAL_NEXT_MONTH','vor');
define('_MB_APCAL_YEAR','Jahr');
define('_MB_APCAL_MONTH','Monat');
define('_MB_APCAL_JUMP','Zeigen');

// for after the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_AFTER','Events after %s');

// for the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_THEDAY','Termine am %s');


define('_MB_APCAL_MAXITEMS','Anzeige');
define('_MB_APCAL_CATSEL','Kategorie');
define('_MB_APCAL_CATSELSUB','Zeige auch Unterkategorien');
define('_MB_APCAL_UNTILDAYS','Bis %s höchste Tage (0 ist Unendlich)');

define('_MB_APCAL_MAXGIFSADAY','Maximale dotgifs für einen Tag');
define('_MB_APCAL_JUSTONCEADAYAPLUGIN','Zeige nur 1 gif für einen Tag und für ein Plugin');

}

?>