<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Modul Administrasjon");
define("_MD_AM_MODULE","Modul");
define("_MD_AM_VERSION","Versjon");
define("_MD_AM_LASTUP","Siste oppdatering");
define("_MD_AM_DEACTIVATED","Deaktivert");
define("_MD_AM_ACTION","Handling");
define("_MD_AM_DEACTIVATE","deaktiver");
define("_MD_AM_ACTIVATE","Aktiver");
define("_MD_AM_UPDATE","Oppdater");
define("_MD_AM_DUPEN","Lag duplikate modultabeller!");
define("_MD_AM_DEACTED","Valgte modul er deaktivert. Du kan nå trygt avinstallere modulen.");
define("_MD_AM_ACTED","Valgte modul er aktivert!");
define("_MD_AM_UPDTED","Valgte modul er oppdatert!");
define("_MD_AM_SYSNO","System modulen kan ikke deaktiveres!");
define("_MD_AM_STRTNO","Denne modulen er satt som startmodul. Du kan endre startmodul til hvilken som helst.");

// added in RC2
define("_MD_AM_PCMFM","Vennligst bekreft:");

// added in RC3
define("_MD_AM_ORDER","Rekkefølge");
define("_MD_AM_ORDER0","(0 = Usynlig)");
define("_MD_AM_ACTIVE","Aktiv");
define("_MD_AM_INACTIVE","Inaktiv");
define("_MD_AM_NOTINSTALLED","Ikke installert");
define("_MD_AM_NOCHANGE","Ikke endret");
define("_MD_AM_INSTALL","Installer");
define("_MD_AM_UNINSTALL","Avinstaller");
define("_MD_AM_SUBMIT","Utfør");
define("_MD_AM_CANCEL","Avbryt");
define("_MD_AM_DBUPDATE","Databasen er oppdatert!");
define("_MD_AM_BTOMADMIN","Tilbake til modul administrasjon");

// %s represents module name
define("_MD_AM_FAILINS","Ikke mulig å installere %s.");
define("_MD_AM_FAILACT","Ikke mulig å aktivere %s.");
define("_MD_AM_FAILDEACT","Ikke mulig å deaktivere %s.");
define("_MD_AM_FAILUPD","Ikke mulig å oppdatere %s.");
define("_MD_AM_FAILUNINS","Ikke mulig å avinstallere %s.");
define("_MD_AM_FAILORDER","Ikke mulig å rearrangere %s.");
define("_MD_AM_FAILWRITE","Ikke mulig å skrive til hovedmeny.");
define("_MD_AM_ALEXISTS","Modulen %s eksisterer allerede.");
define("_MD_AM_ERRORSC","Feil:");
define("_MD_AM_OKINS","Modulen %s ble installert.");
define("_MD_AM_OKACT","Modulen %s ble aktivert.");
define("_MD_AM_OKDEACT","Modulen %s ble deaktivert.");
define("_MD_AM_OKUPD","Modulen %s ble oppdatert.");
define("_MD_AM_OKUNINS","Modulen %s ble avinstallert.");
define("_MD_AM_OKORDER","Modulen %s ble endret.");

define('_MD_AM_RUSUREINS','Trykk knappen nedenfor for å installere denne modulen');
define('_MD_AM_RUSUREUPD','Trykk knappen nedenfor for å oppdatere denne modulen');
define('_MD_AM_RUSUREUNINS','Er du sikker på at du vil avinstallere denne modulen?');
define('_MD_AM_LISTUPBLKS','Følgende blokker vil bli oppdatert.<br />Velg blokkene som kan overskrives.<br />');
define('_MD_AM_NEWBLKS','Nye blokker');
define('_MD_AM_DEPREBLKS','Blokker som frarådes');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installerer ');
define('_MD_AM_TABLE_RESERVED','%s er en reservert tabell!');
define('_MD_AM_CREATE_TABLES','Oppretter tabeller...');
define('_MD_AM_TABLE_CREATED','Tabeller %s opprettet');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data innsatt i tabell %s');
define('_MD_AM_INSERT_DATA_FAILD','Kunne ikke innsette tabell %s i database.');
define('_MD_AM_INSERT_DATA_DONE','Moduldata innsatt.');
define('_MD_AM_MODULEID',' Modul ID: %s');
define('_MD_AM_SQL_FOUND','SQL fil funnet på %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL fil ikke funnet på %s');
define('_MD_AM_SQL_NOT_CREATE','FEIL: Kunne ikke oprette %s ');
define('_MD_AM_SQL_NOT_VALID','%s er ikke en gyldig SQL!');

define('_MD_AM_GROUP_ID',' Gruppe ID: %s ');
define('_MD_AM_NAME',' Navn: ');
define('_MD_AM_VALUE',' Verdi: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Legger til maler (templates)...');
define('_MD_AM_TEMPLATES_DELETE','Sletter maler (templates)...');
define('_MD_AM_TEMPLATES_UPDATE','Oppdaterer maler (templates)...');

define('_MD_AM_TEMPLATE_ID','Mal ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Mal %s lagt til i databasen');
define('_MD_AM_TEMPLATE_ADD_ERROR','FEIL: Kunne ikke legge til malen  %s i databasen.');
define('_MD_AM_TEMPLATE_COMPILED','Malen %s kompilert ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','FEIL: Feil under kompilering av malen %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Malen %s er slettet fra databasen. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','FEIL: Kunne ikke slette malen %s fra databasen. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Malen %s lagt til databasen. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Malen %s rekompilert');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','FEIL: Malen %s rekompilering feilet');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','FEIL: Kunne ikke rekompilere malen %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','FEIL: Kunne ikke slette gammel mal %s. Avbryter oppdateringen av denne filen. ');
define('_MD_AM_TEMPLATE_UPDATE','Malen %s oppdatert. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','FEIL: Kunne ikke oppdatere %s mal. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Legger til blokker...');
define('_MD_AM_BLOCKS_DELETE','Sletter blokker...');
define('_MD_AM_BLOCKS_REBUILD','Gjenoppbygger blokker...');

define('_MD_AM_BLOCK_ID',' Blokk ID: %s ');

define('_MD_AM_BLOCK_ACCESS','La til adgangstillatelser for blokken');
define('_MD_AM_BLOCK_ACCESS_ERROR','FEIL: Kunne ikke legge til adgangstillatelse for blokk');
define('_MD_AM_BLOCK_ADD','Blokk %s lagt til ');
define('_MD_AM_BLOCK_ADD_ERROR','FEIL: Kunne ikke legge til blok %s i databasen! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Databasefeil: %s ');
define('_MD_AM_BLOCK_CREATED','Blokk %s lagd ');
define('_MD_AM_BLOCK_DELETE','Blokk %s slettet. ');
define('_MD_AM_BLOCK_DELETE_DATA','Blokkmal %s slettet fra databasen. ');
define('_MD_AM_BLOCK_DELETE_ERROR','FEIL: Kunne ikke slette blokk %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','FEIL: Kunne ikke slette blokkmal %s fra databasen');
define('_MD_AM_BLOCK_DEPRECATED','Blokkmal %s ikke anbefalt ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','FEIL: Kunne ikke fjerne ikke anbefalt blokkmal.  ');
define('_MD_AM_BLOCK_UPDATE','Blokk %s oppdatert. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Innstillings ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Legger til modulindstillings data...');
define('_MD_AM_MODULE_DATA_DELETE','Sletter modulindstillingsdata...');
define('_MD_AM_MODULE_DATA_UPDATE','Moduldata oppdatert.');

define('_MD_AM_CONFIG_ADD',' Innstillingsvalg lagt til');
define('_MD_AM_CONFIG_DATA_ADD',' Innstilling %s lagt til i databasen');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' FEIL: Kunne ikke legge til innstilling %s i databasen. ');
define('_MD_AM_GONFIG_DATA_DELETE','Innstillingsdata slettet fra databasen. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','FEIL: Kunne ikke slette Innstillingsdata fra databasen');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Innstiller grupperettigheter...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','FEIL: Kunne ikke slette gruppetillatelser ');
define('_MD_AM_GROUP_PERMS_DELETED','Grupperettigheter slettet ');

define('_MD_AM_ACCESS_ADMIN_ADD','La til admin adgangstillatelse for gruppe ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','FEIL: Kunne ikke legge til admin adgang til gruppe-id% s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Lagt til brukerens adgang til gruppe-id:% s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','FEIL: Kunne ikke legge til brukerens adgang til gruppe-id:% s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Kunne ikke utføre %s');
define('_MD_AM_FAILED_SUCESS','%s gjennomført.');

define('_MD_AM_DELETE_ERROR','FEIL: Kunne ikke slette %s');
define('_MD_AM_UPDATE_ERROR','FEIL: Kunne ikke oppdatere %s');
define('_MD_AM_DELETE_MOD_TABLES','Sletter modultabeller ...');

define('_MD_AM_COMMENTS_DELETE','Sletter kommentarer ...');
define('_MD_AM_COMMENTS_DELETE_ERROR','FEIL: Kunne ikke slette kommentarer');
define('_MD_AM_COMMENTS_DELETED','Kommentarer slettet');

define('_MD_AM_NOTIFICATIONS_DELETE','Sletter meddelelser ...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','FEIL: Kunne ikke slette meddelelser');
define('_MD_AM_NOTIFICATIONS_DELETED','Meddelelser slettet');

define('_MD_AM_TABLE_DROPPED','Tabell %s droppet! ');
define('_MD_AM_TABLE_DROPPED_ERROR','FEIL: Kunne ikke droppe tabell %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','FEIL: Ikke tillatelse til å droppe tabell %s! ');
?>