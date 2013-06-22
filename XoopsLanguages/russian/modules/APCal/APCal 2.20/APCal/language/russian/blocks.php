<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MB_APCAL_BL_LOADED' ) ) {

define( '_MB_APCAL_BL_LOADED' , 1 ) ;

// for monthly calendar block
define('_MB_APCAL_PREV_MONTH','Предыдущий');
define('_MB_APCAL_NEXT_MONTH','Следующий');
define('_MB_APCAL_YEAR','');
define('_MB_APCAL_MONTH','');
define('_MB_APCAL_JUMP','Перейти');

// for after the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_AFTER','События после %s');

// for the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_THEDAY','События на %s');


define("_MB_APCAL_MAXITEMS","Показывать");
define("_MB_APCAL_CATSEL","Категория");
define("_MB_APCAL_CATSELSUB","Показывать подкатегории");
define("_MB_APCAL_UNTILDAYS","До %s дней включительно (0 - без ограничения по времени)");

define("_MB_APCAL_MAXGIFSADAY","Максимальное количество точек/картинок в день");
define("_MB_APCAL_JUSTONCEADAYAPLUGIN","Показывать только 1 точку/картинку в день на плагин");
//define("_MB_APCAL_PLUGINS","Активные плагины");
//define("_MB_APCAL_PLUGINS_DESC","list the plugin's name separated with , (comma)");
//define("_MB_APCAL_PLUGINS_VALID","Valid Plugins");

}

?>