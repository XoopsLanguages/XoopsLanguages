<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {






// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:21
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:04:00
define('_MI_APCALTIMEZONE_USING','Timezone of the server');
define('_MI_APCALOPT_TZ_USEXOOPS','value of XOOPS config');
define('_MI_APCALOPT_TZ_USEWINTER','value told from the server as winter time (recommended)');
define('_MI_APCALOPT_TZ_USESUMMER','value told from the server as summer time');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:13
define('_MI_APCALUSE24HOUR','24hours system (No means 12hours system)');
define('_MI_APCAL_ADMENU_PLUGINS','Plugins Manager');

// Appended by Xoops Language Checker -GIJOE- in 2005-04-22 12:02:02
define('_MI_APCAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_APCAL_BNAME_MINICALEX_DESC','Utbyggbar Minikalender med plugin system');

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:50
define('_MI_APCAL_DEFAULTLOCALE','');
define('_MI_APCAL_LOCALE','Locale (kontrollera filer i locales/*.php)');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module

// Appended by Xoops Language Checker -GIJOE- in 2004-06-22 18:39:03
define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','Block&Grupp Admin');

define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","Kalender modul med schema");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","Minikalender");
define("_MI_APCAL_BNAME_MINICAL_DESC","Visa Minikalender block");
define("_MI_APCAL_BNAME_MONTHCAL","M��adskalender");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","Visa M��adskalender i full storlek");
define("_MI_APCAL_BNAME_TODAYS","Dagens h��delser");
define("_MI_APCAL_BNAME_TODAYS_DESC","Visa Dagens h��delser");
define("_MI_APCAL_BNAME_THEDAYS","Denna dagens %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","Visa h��delser f�� markerad dag");
define("_MI_APCAL_BNAME_COMING","Kommande h��delser");
define("_MI_APCAL_BNAME_COMING_DESC","Visa kommande h��delser");
define("_MI_APCAL_BNAME_AFTER","H��delser efter %s");
define("_MI_APCAL_BNAME_AFTER_DESC","Visa h��delser efter markerad dag");

// Names of submenu
// define("_MI_APCAL_SMNAME1","");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "Beh��igheter f�� anv��dare");
define("_MI_APCALGUESTS_AUTHORITY", "Beh��igheter f�� g��ter");
define("_MI_APCALMINICAL_TARGET", "Sida som visas i center blocket om man klickar p� Minikalendern");
define("_MI_APCALCOMING_NUMROWS", "Antalet visade h��delser i blocket f�� kommande h��delser");
define("_MI_APCALSKINFOLDER", "Namnet p� den katalog som inneh��ler 'skin' filerna");
define("_MI_APCALSUNDAYCOLOR", "F��g p� texten f�� S��dag");
define("_MI_APCALWEEKDAYCOLOR", "F��g p� texten f�� Veckodagar");
define("_MI_APCALSATURDAYCOLOR", "F��g p� texten f�� L��dag");
define("_MI_APCALHOLIDAYCOLOR", "F��g p� texten f�� Helgdag");
define("_MI_APCALTARGETDAYCOLOR", "F��g p� texten f�� Markerad dag");
define("_MI_APCALSUNDAYBGCOLOR", "Bakgrundsf��g f�� S��dagar");
define("_MI_APCALWEEKDAYBGCOLOR", "Bakgrundsf��g f�� Veckodagar");
define("_MI_APCALSATURDAYBGCOLOR", "Bakgrundsf��g f�� L��dagar");
define("_MI_APCALHOLIDAYBGCOLOR", "Bakgrundsf��g f�� Helgdagar");
define("_MI_APCALTARGETDAYBGCOLOR", "Bakgrundsf��g p� markerad dag");
define("_MI_APCALCALHEADCOLOR", "F��g p� texten i 'headern' p� kalendern");
define("_MI_APCALCALHEADBGCOLOR", "Bakgrundsf��g i 'headern' p� kalendern");
define("_MI_APCALCALFRAMECSS", "Stil p� ramen runt kalendern");
define("_MI_APCALCANOUTPUTICS", "Till��else att mata ut ics filer?");
define("_MI_APCALMAXRRULEEXTRACT", "��vre gr��s p� antalet h��delser som f�� extraheras med regel.(ANTAL)");
define("_MI_APCALWEEKSTARTFROM", "F��sta dagen i veckan");
define("_MI_APCALDAYSTARTFROM", "Gr��s f�� att separera dagar");
define("_MI_APCALNAMEORUNAME" , "Vilket namn p� anv��daren skall visas" ) ;
define("_MI_APCALDESCNAMEORUNAME" , "V��j vilket 'namn' som visas" ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "Till��else f�� g��ter att l��ga till h��delser");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "kan inte l��ga till");
define("_MI_APCALOPT_AUTH_WAIT", "kan l��ga till men kr��er godk��nande");
define("_MI_APCALOPT_AUTH_POST", "kan l��ga till utan godk��nande");
define("_MI_APCALOPT_AUTH_BYGROUP", "Specificerad i Gruppr��tigheterna");
define("_MI_APCALOPT_MINI_PHPSELF", "nuvarande sida");
define("_MI_APCALOPT_MINI_MONTHLY", "m��adskalender");
define("_MI_APCALOPT_MINI_WEEKLY", "veckokalender");
define("_MI_APCALOPT_MINI_DAILY", "dagskalender");
define("_MI_APCALOPT_CANOUTPUTICS", "kan mata ut");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "kan inte mata ut");
define("_MI_APCALOPT_STARTFROMSUN", "S��dag");
define("_MI_APCALOPT_STARTFROMMON", "M��dag");
define("_MI_APCALOPT_USENAME" , "Anv��darnamn" ) ;
define("_MI_APCALOPT_USEUNAME" , "Login Namn" ) ;

// Admin Menus
define("_MI_APCAL_ADMENU0","Godk��na h��delser");
define("_MI_APCAL_ADMENU1","iCalendar I/O");
define("_MI_APCAL_ADMENU2","Grupp r��tigheter");


// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'Globala');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'Globala APCal underr��telse inst��lningar.');
define('_MI_APCAL_CATEGORY_NOTIFY', 'Kategori');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', 'Underr��telse inst��lningar som g��ler f�� aktuell kategori.');
define('_MI_APCAL_EVENT_NOTIFY', 'H��delse');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'Underr��telse inst��lningar som g��ler f�� aktuell h��delse.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', 'Ny h��delse');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Underr��ta mig n�� en ny h��delse har skapats.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Mottag underr��telse n�� en ny h��delse har skapats.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatiska underr��telser : Ny h��delse');



// Appended by Xoops Language Checker -GIJOE- in 2004-01-14 18:31:01
define('_MI_APCAL_BNAME_NEW','Nyligen publicerade h��delser');
define('_MI_APCAL_BNAME_NEW_DESC','Visa h��delser sorterade med nyaste ��erst');
define('_MI_APCAL_SM_SUBMIT','L��g till');
define('_MI_APCALDEFAULT_VIEW','Default Vy i center');
define('_MI_APCALWEEKNUMBERING','Numrerings regel f�� veckor');
define('_MI_APCALOPT_MINI_LIST','H��delse lista');
define('_MI_APCALOPT_WEEKNOEACHMONTH','f�� varje m��ad');
define('_MI_APCALOPT_WEEKNOWHOLEYEAR','f�� hela ��et');
define('_MI_APCAL_ADMENU_CAT','Kategori Administration');
define('_MI_APCAL_ADMENU_CAT2GROUP','R��tigheter f�� Kategorier');
define('_MI_APCAL_ADMENU_TM','Tabell Underh��l');
define('_MI_APCAL_ADMENU_ICAL','Importera iCalendar');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY','Ny h��delse i denna kategori');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP','Meddela mig n�� en ny h��delse �� skapad i denna kategori.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC','Mottag underr��telse n�� en ny h��delse �� skapad i denna kategori.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Ny h��delse');

}

?>
