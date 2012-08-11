<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_BL_LOADED' ) ) {

define('PICAL_BL_LOADED' , 1 ) ;

// for monthly calendar block
define('_MB_PICAL_PREV_MONTH','Forrige');
define('_MB_PICAL_NEXT_MONTH','Næste');
define('_MB_PICAL_YEAR','');
define('_MB_PICAL_MONTH','');
define('_MB_PICAL_JUMP','Hop');

// for after the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_AFTER','Events efter %s');

// for the day's events block
// %s means the indicated day
define('_MB_PICAL_EVENTS_THEDAY','Events den %s');


define('_MB_PICAL_MAXITEMS','Vis');
define('_MB_PICAL_CATSEL','Kategori');
define('_MB_PICAL_CATSELSUB','Vil også underkategorier');
define('_MB_PICAL_UNTILDAYS','Indtil %s dage frem (0 viser uendeligt)');

define('_MB_PICAL_MAXGIFSADAY','Maksimale dotgifs pr. dag');
define('_MB_PICAL_JUSTONCEADAYAPLUGIN','Vil kun 1 gif pr. dag og pr. plugin');

}

?>