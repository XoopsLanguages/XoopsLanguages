<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MB_APCAL_BL_LOADED' ) ) {

define( '_MB_APCAL_BL_LOADED' , 1 ) ;

// for monthly calendar block
define('_MB_APCAL_PREV_MONTH','上個月');
define('_MB_APCAL_NEXT_MONTH','下個月');
define('_MB_APCAL_YEAR','年');
define('_MB_APCAL_MONTH','月');
define('_MB_APCAL_JUMP','切換');

// for after the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_AFTER','%s 以後的事件');

// for the day's events block
// %s means the indicated day
define('_MB_APCAL_EVENTS_THEDAY','%s 的事件');

define('_MB_APCAL_MAXITEMS','顯示件數');
define('_MB_APCAL_CATSEL','類別鎖定');
define('_MB_APCAL_CATSELSUB','子類別也顯示');
define('_MB_APCAL_UNTILDAYS','最多顯示 %s 天的事件 (0 為無限制)');
define('_MB_APCAL_MAXGIFSADAY','設定每日顯示最多幾個事件');
define('_MB_APCAL_JUSTONCEADAYAPLUGIN','每個 plugin 每天僅能顯示一個事件');

}

?>