<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {






// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:19
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:04:00
define('_MI_APCALTIMEZONE_USING','Timezone of the server');
define('_MI_APCALOPT_TZ_USEXOOPS','value of XOOPS config');
define('_MI_APCALOPT_TZ_USEWINTER','value told from the server as winter time (recommended)');
define('_MI_APCALOPT_TZ_USESUMMER','value told from the server as summer time');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:13
define('_MI_APCALUSE24HOUR','24hours system (No means 12hours system)');
define('_MI_APCAL_ADMENU_PLUGINS','Plugins Manager');

// Appended by Xoops Language Checker -GIJOE- in 2005-04-22 12:02:01
define('_MI_APCAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_APCAL_BNAME_MINICALEX_DESC','Extensible minicalendar with plugin system');

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:50
define('_MI_APCAL_DEFAULTLOCALE','');
define('_MI_APCAL_LOCALE','Locale (check files in locales/*.php)');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module

// Appended by Xoops Language Checker -GIJOE- in 2004-06-22 18:39:03
define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','Blocks&Groups Admin');

define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","Kalendermodule met activiteitsplanner");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","Mini-Kalender");
define("_MI_APCAL_BNAME_MINICAL_DESC","Mini-Kalender-Blok tonen");
define("_MI_APCAL_BNAME_MONTHCAL","Maandkalender");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","Maandkalender in volle grootte tonen");
define("_MI_APCAL_BNAME_TODAYS","Huidige activiteiten");
define("_MI_APCAL_BNAME_TODAYS_DESC","Huidige activiteiten tonen");
define("_MI_APCAL_BNAME_THEDAYS","Activiteiten per %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","Termine des Tages markiert anzeigen");
define("_MI_APCAL_BNAME_COMING","Eerstvolgende activiteiten");
define("_MI_APCAL_BNAME_COMING_DESC","Eerstvolgende activiteiten tonen");
define("_MI_APCAL_BNAME_AFTER","Activiteiten na %s");
define("_MI_APCAL_BNAME_AFTER_DESC","Activiteiten na deze dag tonen");

// Names of submenu
// define("_MI_APCAL_SMNAME1","");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "Rechten voor gebruikers");
define("_MI_APCALGUESTS_AUTHORITY", "Rechten voor gasten");
define("_MI_APCALMINICAL_TARGET", "Kalendervoorstelling die wordt getoond wanneer op een datum in de Mini-Kalender wordt geklikt");
define("_MI_APCALCOMING_NUMROWS", "Aantal getoonde activiteiten in het 'Eerstvolgende activiteiten'-blok'");
define("_MI_APCALSKINFOLDER", "Skin");
define("_MI_APCALSUNDAYCOLOR", "Tekstkleur voor zondagen");
define("_MI_APCALWEEKDAYCOLOR", "Tekstkleur voor weekdagen");
define("_MI_APCALSATURDAYCOLOR", "Tekstkleur voor zaterdagen");
define("_MI_APCALHOLIDAYCOLOR", "Tekstkleur voor vrijdagen");
define("_MI_APCALTARGETDAYCOLOR", "Tekstkleur voor dagen met activiteiten");
define("_MI_APCALSUNDAYBGCOLOR", "Achtergrondkleur voor zondagen");
define("_MI_APCALWEEKDAYBGCOLOR", "Achtergrondkleur voor weekdagen");
define("_MI_APCALSATURDAYBGCOLOR", "Achtergrondkleur voor zaterdagen");
define("_MI_APCALHOLIDAYBGCOLOR", "Achtergrondkleur voor feestdag");
define("_MI_APCALTARGETDAYBGCOLOR", "Achtergrondkleur voor dagen met activiteiten");
define("_MI_APCALCALHEADCOLOR", "Kleur van de kalenderkop");
define("_MI_APCALCALHEADBGCOLOR", "Achtergrondkleur van de kalenderkop");
define("_MI_APCALCALFRAMECSS", "CSS-stijl van het kalenderraam");
define("_MI_APCALCANOUTPUTICS", "iCalendar-Data (.ics) export mogelijk maken?");
define("_MI_APCALMAXRRULEEXTRACT", "max. aantal activiteiten die door het Terugkeerpatroon kunnen gegenereerd worden");
define("_MI_APCALWEEKSTARTFROM", "De week begint op");

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "Rechten voor gasten om activiteiten toe te voegen");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "mogen niet toevoegen");
define("_MI_APCALOPT_AUTH_WAIT", "mogen toevoegen maar hebben goedkeuring nodig");
define("_MI_APCALOPT_AUTH_POST", "mogen direct zonder goedkeuring toevoegen");
define("_MI_APCALOPT_AUTH_BYGROUP", "Vastgelegd door groepsrechten");
define("_MI_APCALOPT_MINI_PHPSELF", "Startpagina");
define("_MI_APCALOPT_MINI_MONTHLY", "Maandkalender");
define("_MI_APCALOPT_MINI_WEEKLY", "Weekkalender");
define("_MI_APCALOPT_MINI_DAILY", "Dagkalender");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "ICS output activeren");
define("_MI_APCALOPT_CANOUTPUTICS", "ICS output deactiveren");
define("_MI_APCALOPT_STARTFROMSUN", "Zondag");
define("_MI_APCALOPT_STARTFROMMON", "Maandag");


// Admin Menus
define("_MI_APCAL_ADMENU0","Activiteit goedkeuren");
define("_MI_APCAL_ADMENU1","iCalendar I/O");
define("_MI_APCAL_ADMENU2","Groepsrechten");


// Appended by Xoops Language Checker -GIJOE- in 2003-12-05 14:18:43
define('_MI_APCALNAMEORUNAME','Poster name displayed');
define('_MI_APCALDESCNAMEORUNAME','Select which \'name\' is displayed');
define('_MI_APCALOPT_USENAME','Handle Name');
define('_MI_APCALOPT_USEUNAME','Login Name');

// Appended by Xoops Language Checker -GIJOE- in 2003-12-26 10:55:16
define('_MI_APCALDAYSTARTFROM','Borderline to separate days');
define('_MI_APCAL_GLOBAL_NOTIFY','Global');
define('_MI_APCAL_GLOBAL_NOTIFYDSC','Global APCal notification options.');
define('_MI_APCAL_CATEGORY_NOTIFY','Category');
define('_MI_APCAL_CATEGORY_NOTIFYDSC','Notification options that apply to the current category.');
define('_MI_APCAL_EVENT_NOTIFY','Event');
define('_MI_APCAL_EVENT_NOTIFYDSC','Notification options that apply to the current event.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY','New Event');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP','Notify me when a new event is created.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC','Receive notification when a new event is created.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New event');

// Appended by Xoops Language Checker -GIJOE- in 2004-01-14 18:31:01
define('_MI_APCAL_BNAME_NEW','Events newly posted');
define('_MI_APCAL_BNAME_NEW_DESC','Display events ordered like that newer is upper');
define('_MI_APCAL_SM_SUBMIT','Submit');
define('_MI_APCALDEFAULT_VIEW','Default View in center');
define('_MI_APCALWEEKNUMBERING','Numbering rule for weeks');
define('_MI_APCALOPT_MINI_LIST','event list');
define('_MI_APCALOPT_WEEKNOEACHMONTH','by each month');
define('_MI_APCALOPT_WEEKNOWHOLEYEAR','by whole year');
define('_MI_APCAL_ADMENU_CAT','Categories Manager');
define('_MI_APCAL_ADMENU_CAT2GROUP','Category\'s Permissions');
define('_MI_APCAL_ADMENU_TM','Table Maintenance');
define('_MI_APCAL_ADMENU_ICAL','Importing iCalendar');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY','New Event in the Category');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP','Notify me when a new event is created in the Category.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC','Receive notification when a new event is created in the Category.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New event');

}

?>
