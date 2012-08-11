<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_AM_LOADED' ) ) {

define('PICAL_AM_LOADED' , 1 ) ;


// titles
define('_AM_ADMISSION','Tilføj events');
define('_AM_MENU_EVENTS','Event manager');
define('_AM_MENU_CATEGORIES','Kategori manager');
define('_AM_MENU_CAT2GROUP','Kategori rettigheder');
define('_AM_ICALENDAR_IMPORT','Import fra iCalendar');
define('_AM_GROUPPERM','Globale rettigheder');
define('_AM_TABLEMAINTAIN','Tabel vedligeholdelse (opgradering)');
define('_AM_MYBLOCKSADMIN','piCal blok og gruppe administration');

// forms
define('_AM_BUTTON_EXTRACT','Udvid');
define('_AM_BUTTON_ADMIT','Tilføj');
define('_AM_BUTTON_MOVE','Flyt');
define('_AM_BUTTON_COPY','Kopier');
define('_AM_CONFIRM_DELETE','Slet events OK?');
define('_AM_CONFIRM_MOVE','Fjern link fra den gamle kategori og tilføj link til denne kategori OK?');
define('_AM_CONFIRM_COPY','Tilføj et link til denne kategori OK?');
define('_AM_OPT_PAST','Indsæt');
define('_AM_OPT_FUTURE','Fremtid');
define('_AM_OPT_PASTANDFUTURE','Fortid og fremtid');

// format
define('_AM_DTFMT_LIST_ALLDAY','å-m-d');
define('_AM_DTFMT_LIST_NORMAL','å-m-d<br />T:m');

// timezones
define('_AM_TZOPT_SERVER','Som serverens tidszone');
define('_AM_TZOPT_GMT','Som GMT');
define('_AM_TZOPT_USER','Som brugerens tidszone');

// admission
define('_AM_LABEL_ADMIT','Afmærkede events skal: Offentligøres');
define('_AM_MES_ADMITTED','Event(s) er offentliggjort');
define('_AM_ADMIT_TH0','Bruger');
define('_AM_ADMIT_TH1','Start ');
define('_AM_ADMIT_TH2','Slut');
define('_AM_ADMIT_TH3','Titel');
define('_AM_ADMIT_TH4','Rrule');

// events manager & importing iCalendar

define('_AM_LABEL_IMPORTFROMWEB','Importer iCalendar data fra web (Input URL begynder med http:
define(\'_AM_LABEL_UPLOADFROMFILE\',\'Upload iCalendar data (vælg en fil lokalt på din PC)');
define('_AM_LABEL_UPLOADFROMFILE','Upload iCalendar data (Select a file from your local machine)');
define('_AM_LABEL_IO_CHECKEDITEMS','Afmærkde events skal:');
define('_AM_LABEL_IO_OUTPUT','eksporteres til iCalendar');
define('_AM_LABEL_IO_DELETE','slettes');
define('_AM_MES_EVENTLINKTOCAT','event(s) er linket til denne kategori');
define('_AM_MES_EVENTUNLINKED','event(s) er blevet fjernet fra gammel kategori');
define('_AM_FMT_IMPORTED','event(s) er importeret fra %s');
define('_AM_MES_DELETED','event(s) er slettet');
define('_AM_IO_TH0','Bruger');
define('_AM_IO_TH1','Start');
define('_AM_IO_TH2','Slut');
define('_AM_IO_TH3','Titel');
define('_AM_IO_TH4','Rrule');
define('_AM_IO_TH5','Rettigheder');

// Group's Permissions
define('_AM_GPERM_G_INSERTABLE','Kan tilføje');
define('_AM_GPERM_G_SUPERINSERT','Kan super tilføje');
define('_AM_GPERM_G_EDITABLE','Kan redigerer');
define('_AM_GPERM_G_SUPEREDIT','Kan super redigerer');
define('_AM_GPERM_G_DELETABLE','Kan slette');
define('_AM_GPERM_G_SUPERDELETE','Kan super slette');
define('_AM_GPERM_G_TOUCHOTHERS','Kan ændre andres');
define('_AM_CAT2GROUPDESC','Afmærk kategorier som du vil tillade adgang til.');
define('_AM_GROUPPERMDESC','Vælg rettigheder for hver gruppe<br /> Hvis du har brug for denne mulighed, sæt rettighederne i grupper først.<br /> Indstillingen af to grupper af administration og gæster vil blive ignoreret.');

// Table Maintenance
define('_AM_MB_SUCCESSUPDATETABLE','Opdatering af tabeller udført');
define('_AM_MB_FAILUPDATETABLE','Opdatering af tabeller fejlet');
define('_AM_NOTICE_NOERRORS','Der er ingen fejl i tabller eller poster');
define('_AM_ALRT_CATTABLENOTEXIST','Kategoritabellen findes ikke.<br />nVil du oprette tabellen?');
define('_AM_ALRT_OLDTABLE','Strukturen i eventtabellen er gammel.<br /)nVil du opgraderer den?');
define('_AM_ALRT_TOOOLDTABLE','Fejl i tabellerne.<br />\nMåske har du brugt piCal 0.3x eller tidligere.<br />\nDu skal først opdaterer til 0.4x eller 0.5x');
define('_AM_FMT_SERVER_TZ_ALL','Tidszone på denne server (vinter): %+2.1f<br />Tidszone på denne server (sommer): %+2.1f<br />Tidszonenavn på denne server: %s<br />Værdien af XOOPS konfiguration: %+2.1f<br />Værdien piCal benytter: %+2.1f<br />');
define('_AM_TH_SERVER_TZ_COUNT','Events');
define('_AM_TH_SERVER_TZ_VALUE','Tidszone');
define('_AM_TH_SERVER_TZ_VALUE_TO','Ændringer (-14.0¡Á14.0)');
define('_AM_JSALRT_SERVER_TZ','Husk at lave backup af events før denne handling');
define('_AM_NOTICE_SERVER_TZ','Hvis din server sætter tidszonen med sommertid og nogle events er registreret i piCal 0.6x or 0.7x, så udfør ikke dette.<br />');
define('_AM_MB_SUCCESSTZUPDATE','Events er retttet så de matcher tidszonen.');

// Categories
define('_AM_CAT_TH_TITLE','Titel');
define('_AM_CAT_TH_DESC','Beskrivelse');
define('_AM_CAT_TH_PARENT','Øverste kategori');
define('_AM_CAT_TH_OPTIONS','Muligheder');
define('_AM_CAT_TH_LASTMODIFY','Sidst ændret');
define('_AM_CAT_TH_OPERATION','Handling');
define('_AM_CAT_TH_ENABLED','Slå til.');
define('_AM_CAT_TH_WEIGHT','Vægt');
define('_AM_CAT_TH_SUBMENU','registrer i undermenu');
define('_AM_BTN_UPDATE','OPDATER');
define('_AM_MENU_CAT_EDIT','Rediger en kategori');
define('_AM_MENU_CAT_NEW','Opret en ny kategori');
define('_AM_MB_MAKESUBCAT','Underkategori');
define('_AM_MB_MAKETOPCAT','Opret en kategori øverst');
define('_AM_MB_CAT_INSERTED','Ny kategori oprettet');
define('_AM_MB_CAT_UPDATED','Kategori opdateret');
define('_AM_FMT_CAT_DELETED','%s kategorier slettet');
define('_AM_FMT_CAT_BATCHUPDATED','%s kategorier opdateret');
define('_AM_FMT_CATDELCONFIRM','Ønsker du at slette kategorien %s?');

// Plugins
define('_AM_PI_UPDATED','Plugins er opdateret');
define('_AM_PI_TH_TYPE','Tupe');
define('_AM_PI_TH_OPTIONS','Muligheder (normalt blank)');
define('_AM_PI_TH_TITLE','Titel');
define('_AM_PI_TH_DIRNAME','Modulets biblioteksnavn');
define('_AM_PI_TH_FILE','Plugin fil');
define('_AM_PI_TH_DOTGIF','Dot GIF');
define('_AM_PI_TH_OPERATION','Handling');
define('_AM_PI_ENABLED','Slå til');
define('_AM_PI_DELETE','Slet');
define('_AM_PI_NEW','Ny');
define('_AM_PI_VIEWYEARLY','Årlig visning');
define('_AM_PI_VIEWMONTHLY','Månedlig visning');
define('_AM_PI_VIEWWEEKLY','Ugentlig visning');
define('_AM_PI_VIEWDAILY','Daglig visning');

// groupperm
define('_AM_PICAL_DBUPDATED','Databasen er opdateret!');
define('_AM_PICAL_PERMADDNG','Kunne ikke tilføje %s rettigheder til %s for gruppen %s');
define('_AM_PICAL_PERMADDOK','Tilføjet %s rettigheder til %s for gruppen %s');
define('_AM_PICAL_PERMRESETNG','Kunne ikke nulstille gruppe rettighederne for modulet %s');
define('_AM_PICAL_PERMADDNGP','Alle øvre items skal udvælges');

}

?>