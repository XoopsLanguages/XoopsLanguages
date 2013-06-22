<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {





// Appended by Xoops Language Checker -GIJOE- in 2005-06-29 17:19:32
define('_AM_APCAL_PI_TH_OPTIONS','Options (usually blank)');
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-24 19:05:05
define('_AM_APCAL_TZOPT_SERVER','As server timezone');
define('_AM_APCAL_TZOPT_GMT','As GMT');
define('_AM_APCAL_TZOPT_USER','As user\'s timezone');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:04:00
define('_AM_APCAL_FMT_SERVER_TZ_ALL','Timezone of the server (winter): %+2.1f<br />Timezone of the server (summer): %+2.1f<br />Zonename of the server: %s<br />The value of XOOPS config: %+2.1f<br />The value of APCal using: %+2.1f<br />');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:13
define('_AM_APCAL_FMT_SERVER_TZ_SYSTEM','Timezone in winter: %+2.1f');
define('_AM_APCAL_TH_SERVER_TZ_COUNT','Events');
define('_AM_APCAL_TH_SERVER_TZ_VALUE','Timezone');
define('_AM_APCAL_TH_SERVER_TZ_VALUE_TO','Changes (-14.0¡Á14.0)');
define('_AM_APCAL_JSALRT_SERVER_TZ','Don\'t forget backing-up events table before this operation');
define('_AM_APCAL_NOTICE_SERVER_TZ','If your server set the timezone area with summer time (=Day Light Saving) and some events were registerd in APCal 0.6x or 0.7x, dont\'t push this button.<br />eg) It is natural to display both -5.0 and -4.0 in EDT');
define('_AM_APCAL_MB_SUCCESSTZUPDATE','Events are modified with the timezone(s).');
define('_AM_APCAL_PI_UPDATED','Plugins are updated');
define('_AM_APCAL_PI_TH_TYPE','Type');
define('_AM_APCAL_PI_TH_TITLE','Title');
define('_AM_APCAL_PI_TH_DIRNAME','Module\'s dirname');
define('_AM_APCAL_PI_TH_FILE','Plugin file');
define('_AM_APCAL_PI_TH_DOTGIF','Dot GIF');
define('_AM_APCAL_PI_TH_OPERATION','Operation');
define('_AM_APCAL_PI_ENABLED','Enabled');
define('_AM_APCAL_PI_DELETE','Delete');
define('_AM_APCAL_PI_NEW','New');
define('_AM_APCAL_PI_VIEWYEARLY','Yearly View');
define('_AM_APCAL_PI_VIEWMONTHLY','Monthly View');
define('_AM_APCAL_PI_VIEWWEEKLY','Weekly View');
define('_AM_APCAL_PI_VIEWDAILY','Daily View');

define( '_AM_APCAL_LOADED' , 1 ) ;


// titles

// Appended by Xoops Language Checker -GIJOE- in 2004-06-22 18:39:03
define('_AM_APCAL_OPT_PAST','Förr');
define('_AM_APCAL_OPT_FUTURE','Framtida');
define('_AM_APCAL_OPT_PASTANDFUTURE','Förr&Framtida');

define("_AM_APCAL_CONFIG","Konfigureringsmeny för APCal");
define("_AM_APCAL_GENERALCONF","Generella inställningar för APCal");
define("_AM_APCAL_ADMISSION","Godkänna händelser");
define("_AM_APCAL_ICALENDAR_IO","iCalendar I/O");
define("_AM_APCAL_ICALENDAR_IMPORT","Importera iCalendar");
define("_AM_APCAL_ICALENDAR_EXPORT","Exportera iCalendar");
define("_AM_APCAL_GROUPPERM","Grupprättigheter");
define("_AM_APCAL_MYBLOCKSADMIN","APCal's Block&Grupp administration");

// forms
define("_AM_APCAL_BUTTON_EXTRACT","Packa upp");
define("_AM_APCAL_BUTTON_ADMIT","Godkänn");
define("_AM_APCAL_CONFIRM_DELETE","OK att radera?");

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY",'y-m-d');
define("_AM_APCAL_DTFMT_LIST_NORMAL",'y-m-d<\b\r />H:i');

// admission
define("_AM_APCAL_LABEL_ADMIT","Markerade händelser kommer: att godkännas ");
define("_AM_APCAL_MES_ADMITTED","Händelse(r) har godkännts");
define("_AM_APCAL_ADMIT_TH0","Användare");
define("_AM_APCAL_ADMIT_TH1","Start Datum&Tid");
define("_AM_APCAL_ADMIT_TH2","Slut Datum&Tid");
define("_AM_APCAL_ADMIT_TH3","Titel");
define("_AM_APCAL_ADMIT_TH4","Regel");

// iCalendar I/O

define("_AM_APCAL_LABEL_IMPORTFROMWEB","Importera iCalendar data från web (Angiven URL skall starta på 'http://' eller 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","Ladda upp iCalendar data (Välj en fil på Er lokala dator)");
define("_AM_APCAL_BUTTON_IMPORT","Import!");
define("_AM_APCAL_BUTTON_UPLOAD","Ladda upp!");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","Markerade händelser kommer:");
define("_AM_APCAL_LABEL_IO_OUTPUT","att bli exporterade till iCalendar");
define("_AM_APCAL_LABEL_IO_SELECTPLATFORM","Välj plattform");
define("_AM_APCAL_LABEL_IO_DELETE","att bli raderade ");
define("_AM_APCAL_MES_DELETED","Händelse(r) har raderats");
define("_AM_APCAL_IO_TH0","Användare");
define("_AM_APCAL_IO_TH1","Start Datum&Tid");
define("_AM_APCAL_IO_TH2","Slut Datum&Tid");
define("_AM_APCAL_IO_TH3","Titel");
define("_AM_APCAL_IO_TH4","Regel");
define("_AM_APCAL_IO_TH5","Godkända");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "Lägga Till" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "Super Lägga Till" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "Editera" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "Super Editera" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "Radera" ) ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "Super Radera" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "Kan nå andra" ) ;
define( '_AM_APCAL_GROUPPERMDESC' , "Markera vad respektive grupp har rättighet att urföra.<br />Om denna funktion används, markera 'Behörigheter för användare' till 'Specificerad i Grupprättigheterna' först i 'Inställningar'.<br />Inställningarna för grupperna 'Administrator' och 'Guest' kommer att ignoreras." ) ;




// Appended by Xoops Language Checker -GIJOE- in 2004-01-14 18:31:01
define('_AM_APCAL_MENU_EVENTS','Händelse Administration');
define('_AM_APCAL_MENU_CATEGORIES','Kategori Administration');
define('_AM_APCAL_MENU_CAT2GROUP','Rättigheter för Kategorier');
define('_AM_APCAL_TABLEMAINTAIN','Tabell Underhåll (Uppgradera)');
define('_AM_APCAL_BUTTON_MOVE','Flytta');
define('_AM_APCAL_BUTTON_COPY','Kopiera');
define('_AM_APCAL_CONFIRM_MOVE','Ta bort länk till den gamla kategorin och lägg till en länk till den specificerade kategorin?');
define('_AM_APCAL_CONFIRM_COPY','Lägg till en länk till specificerad länk?');
define('_AM_APCAL_BUTTON_EXPORT','Exportera!');
define('_AM_APCAL_MES_EVENTLINKTOCAT','händelse(r) har länkats till denna kategori');
define('_AM_APCAL_MES_EVENTUNLINKED','länk till händelse(r) har tagits bort från denna kategori');
define('_AM_APCAL_FMT_IMPORTED','händelse(r) har importerats från \'%s\'');
define('_AM_APCAL_CAT2GROUPDESC','Markera de kategorier som respektive grupp har tillgång till');
define('_AM_APCAL_MB_SUCCESSUPDATETABLE','Uppdatering av tabell(er) lyckades');
define('_AM_APCAL_MB_FAILUPDATETABLE','Uppdatering av tabell(er) misslyckades');
define('_AM_APCAL_NOTICE_NOERRORS','Det finns inga fel på tabeller eller records.');
define('_AM_APCAL_ALRT_CATTABLENOTEXIST','Kategori tabellen finns inte.<br />
Vill Ni skapa tabellen?');
define('_AM_APCAL_ALRT_OLDTABLE','Tabellstrukturen är gammal.<br />
Vill Ni uppgradera tabellerna?');
define('_AM_APCAL_ALRT_TOOOLDTABLE','Det uppträdde ett tabell fel.<br />
Ni kanske använde APCal 0.3x eller tidigare.<br />
Uppgradera först till 0.4x eller 0.5x.');
define('_AM_APCAL_FMT_WRONGSTZ','Det finns %s händelse(r) som har fel tidszon registrerad.<br />Vill Ni reparera dem?');
define('_AM_APCAL_CAT_TH_TITLE','Titel');
define('_AM_APCAL_CAT_TH_DESC','Beskrivning');
define('_AM_APCAL_CAT_TH_PARENT','Huvud Kategori');
define('_AM_APCAL_CAT_TH_OPTIONS','Optioner');
define('_AM_APCAL_CAT_TH_LASTMODIFY','Senast ändrad');
define('_AM_APCAL_CAT_TH_OPERATION','Aktivitet');
define('_AM_APCAL_CAT_TH_ENABLED','Aktiv');
define('_AM_APCAL_CAT_TH_WEIGHT','Vikt');
define('_AM_APCAL_CAT_TH_SUBMENU','Visa i Undermeny');
define('_AM_APCAL_BTN_UPDATE','Uppdatera');
define('_AM_APCAL_MENU_CAT_EDIT','Editera en Kategori');
define('_AM_APCAL_MENU_CAT_NEW','Skapa en ny Kategori');
define('_AM_APCAL_MB_MAKESUBCAT','UnderKategori');
define('_AM_APCAL_MB_MAKETOPCAT','Skapa en kategori i översta nivån');
define('_AM_APCAL_MB_CAT_INSERTED','Ny kategori skapad');
define('_AM_APCAL_MB_CAT_UPDATED','Kategori uppdaterad');
define('_AM_APCAL_FMT_CAT_DELETED','%s Kategorier raderade');
define('_AM_APCAL_FMT_CAT_BATCHUPDATED','%s Kategori(er) uppdaterad');
define('_AM_APCAL_FMT_CATDELCONFIRM','Vill Ni radera kategori %s ?');

}

?>