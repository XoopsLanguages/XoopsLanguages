<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MB_APCAL_BL_LOADED' ) ) {

define( '_MB_APCAL_BL_LOADED' , 1 ) ;

// for monthly calendar block
define('_MB_APCAL_PREV_MONTH','Pr&eacute;c');
define('_MB_APCAL_NEXT_MONTH','Suiv');
define('_MB_APCAL_YEAR','');
define('_MB_APCAL_MONTH','');
define('_MB_APCAL_JUMP','Saut');

// for after the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_AFTER','Ev&egrave;nements apr&egrave;s la date du %s');

// for the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_THEDAY','Ev&egrave;nements en date du %s');


define('_MB_APCAL_MAXITEMS','Affichage');
define('_MB_APCAL_CATSEL','Cat&eacute;gorie');
define('_MB_APCAL_CATSELSUB','Afficher &eacute;galement les sous-cat&eacute;gories');
define('_MB_APCAL_UNTILDAYS',"Jusqu'&agrave; %s jours (0 correspond &agrave; sans limite)");

define('_MB_APCAL_MAXGIFSADAY',"Maximum d'images dotgifs par jour");
define('_MB_APCAL_JUSTONCEADAYAPLUGIN','Afficher seulement une image par jour et par plugin');

define('_MB_APCAL_SHOWPICTURES', 'Afficher les images');
define('_MB_APCAL_YES', 'Oui');
define('_MB_APCAL_NO', 'Non');

}

?>