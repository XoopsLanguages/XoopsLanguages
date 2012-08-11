<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define('_MD_AM_MODADMIN','Modul Administration');
define('_MD_AM_MODULE','Modul');
define('_MD_AM_VERSION','Version');
define('_MD_AM_LASTUP','Sidst opdateret');
define('_MD_AM_DEACTIVATED','Deaktiveret');
define('_MD_AM_ACTION','Handling');
define('_MD_AM_DEACTIVATE','Deaktiveret');
define('_MD_AM_ACTIVATE','Aktivér');
define('_MD_AM_UPDATE','Opdatér');
define('_MD_AM_DUPEN','Der er en duplet af en post i modul tabellen!');
define('_MD_AM_DEACTED','Det valgte modul er blevet de-aktiveret. Du kan nu af-installere modulet.');
define('_MD_AM_ACTED','Det valgte modul er blevet aktiveret!');
define('_MD_AM_UPDTED','Det valgte modul er blevet opdateret!');
define('_MD_AM_SYSNO','Systemmodulet kan ikke de-aktiveres.');
define('_MD_AM_STRTNO','Dette modul er sat til at være din standard startside. Vær venlig at ændre start modulet til hvad der passer dig.');

// added in RC2
define('_MD_AM_PCMFM','Vær venlig at bekræfte:');

// added in RC3
define('_MD_AM_ORDER','Rækkefølge');
define('_MD_AM_ORDER0','(0 = skjult)');
define('_MD_AM_ACTIVE','Aktiv');
define('_MD_AM_INACTIVE','In-aktiv');
define('_MD_AM_NOTINSTALLED','Ikke installeret');
define('_MD_AM_NOCHANGE','Ingen ændringer');
define('_MD_AM_INSTALL','Installér');
define('_MD_AM_UNINSTALL','Afinstallér');
define('_MD_AM_SUBMIT','Acceptér');
define('_MD_AM_CANCEL','Fortryd');
define('_MD_AM_DBUPDATE','Databasen er blevet opdateret!');
define('_MD_AM_BTOMADMIN','Returnér til Modul Administration');

// %s represents module name
define('_MD_AM_FAILINS','Det var ikke muligt at installere %s.');
define('_MD_AM_FAILACT','Det var ikke muligt at aktivere %s.');
define('_MD_AM_FAILDEACT','Det var ikke muligt at de-aktivere %s.');
define('_MD_AM_FAILUPD','Det var ikke muligt at opdatere %s.');
define('_MD_AM_FAILUNINS','Det var ikke muligt at af-installere %s.');
define('_MD_AM_FAILORDER','Det var ikke muligt at ændre rækkefølgen for %s.');
define('_MD_AM_FAILWRITE','Det var ikke muligt at skrive til hovedmenuen.');
define('_MD_AM_ALEXISTS','Modul %s eksisterer allerede.');
define('_MD_AM_ERRORSC','Fejl:');
define('_MD_AM_OKINS','Modul %s er blevet installeret.');
define('_MD_AM_OKACT','Modul %s er blevet aktiveret.');
define('_MD_AM_OKDEACT','Modul %s er blevet de-aktiveret.');
define('_MD_AM_OKUPD','Modul %s er blevet opdateret.');
define('_MD_AM_OKUNINS','Modul %s er blevet af-installeret.');
define('_MD_AM_OKORDER','Modul %s er blevet ændret.');

define('_MD_AM_RUSUREINS','Tryk på knappen herunder for at installere dette modul');
define('_MD_AM_RUSUREUPD','Tryk på knappen herunder for at opdatere dette modul');
define('_MD_AM_RUSUREUNINS','Er du sikker på, at du vil af-installere dette modul?');
define('_MD_AM_LISTUPBLKS','De følgende blokke vil blive opdateret.<br />Vælg de blokke hvis indhold (skabelon og indstillinger) må overskrives.<br />');
define('_MD_AM_NEWBLKS','Nye blokke');
define('_MD_AM_DEPREBLKS','Blokke, der frarådes');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installering');
define('_MD_AM_TABLE_RESERVED','%s er en reserveret tabel!');
define('_MD_AM_CREATE_TABLES','Opretter tabeller....');
define('_MD_AM_TABLE_CREATED','Tabel %s oprettet');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data indsat i tabellen %s');
define('_MD_AM_INSERT_DATA_FAILD','Kunne ikke indsætte %s i databasen.');
define('_MD_AM_INSERT_DATA_DONE','Modul data indsat korrekt.');
define('_MD_AM_MODULEID','Modul ID: %s');
define('_MD_AM_SQL_FOUND','SQL fil fundet i %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL fil ikke fundet i %s');
define('_MD_AM_SQL_NOT_CREATE','FEJL: Kunne ikke oprettet %s ');
define('_MD_AM_SQL_NOT_VALID','%s er ikke valid SQL!');

define('_MD_AM_GROUP_ID','Gruppe ID: %s ');
define('_MD_AM_NAME','Navn: ');
define('_MD_AM_VALUE','Værdi:');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Tilføjer skabeloner...');
define('_MD_AM_TEMPLATES_DELETE','Sletter skabeloner...');
define('_MD_AM_TEMPLATES_UPDATE','Opdaterer skabeloner...');

define('_MD_AM_TEMPLATE_ID','Skabelon ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Skabelon %s tilføjet til databasen');
define('_MD_AM_TEMPLATE_ADD_ERROR','FEJL: Kunne ikke indsætte skabelonen %s i databasen.');
define('_MD_AM_TEMPLATE_COMPILED','Skabelon %s udarbejdet');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','FEJL: Fejl ved udarbejdelsen af skabelonen %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Skabelonen %s slettet fra databasen');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','FEJL: Kunne ikke slette skabelonen %s fra databasen.');
define('_MD_AM_TEMPLATE_INSERT_DATA','Skabelonen %s indsat i databasen.');
define('_MD_AM_TEMPLATE_RECOMPILE','Skabelonen %s genbearbejdet.');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','FEJL: Skabelonen %s ikke genbearbejdet');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','FEJL: Kunne ikke genbearbejde skabelonen %s');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','FEJL: Kunne ikke slette skabelonen %s. Afbryder opdateringen af denne fil.');
define('_MD_AM_TEMPLATE_UPDATE','Skabelonen %s opdateret.');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','FEJL: Kunne ikke opdaterer %s skabelon');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Tilføjer blokke...');
define('_MD_AM_BLOCKS_DELETE','Sletter blokke...');
define('_MD_AM_BLOCKS_REBUILD','Genopbygger blokke...');

define('_MD_AM_BLOCK_ID','Blok ID: %s');

define('_MD_AM_BLOCK_ACCESS','Tilføjet blok adgangsrettigheder');
define('_MD_AM_BLOCK_ACCESS_ERROR','FEJL: Kunne ikke tilføje blok adgangsrettigheder');
define('_MD_AM_BLOCK_ADD','Blok %s tilføjet');
define('_MD_AM_BLOCK_ADD_ERROR','FEJL: Kunne ikke tilføje blok %s til databasen');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Database fejl: %s');
define('_MD_AM_BLOCK_CREATED','Blok %s oprettet');
define('_MD_AM_BLOCK_DELETE','Blok %s slettet');
define('_MD_AM_BLOCK_DELETE_DATA','Blok skabelon %s slettet fra databasen');
define('_MD_AM_BLOCK_DELETE_ERROR','FEJL: Kunne ikke slette blok %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','FEJL: Kunne ikke slette blok skabelon %s fra databasen');
define('_MD_AM_BLOCK_DEPRECATED','Blok skabelon %s underkendt');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','FEJL: Kunne ikke fjerne underkendelsen af blok skabelonen');
define('_MD_AM_BLOCK_UPDATE','Blok %s opdateret');

/* Configs */
define('_MD_AM_GONFIG_ID','Konfigurations ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Tilføjer modul konfigurations data...');
define('_MD_AM_MODULE_DATA_DELETE','Sletter modul konfigurations muligheder...');
define('_MD_AM_MODULE_DATA_UPDATE','Modul data opdateret.');

define('_MD_AM_CONFIG_ADD','Konfigurations muligheder opdateret.');
define('_MD_AM_CONFIG_DATA_ADD','Konfiguration %s tilføjet til databasen');
define('_MD_AM_CONFIG_DATA_ADD_ERROR','FEJL: Kunne ikke indsætte konfiguration %s til databasen');
define('_MD_AM_GONFIG_DATA_DELETE','Konfigurations data slettet fra databasen. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','FEJL: Kunne ikke slette konfigurations data fra databasen');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Indsætter grupperettigheder');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','FEJL: Kunne ikke slette grupperettigheder');
define('_MD_AM_GROUP_PERMS_DELETED','Grupperettigheder slettet');

define('_MD_AM_ACCESS_ADMIN_ADD','Tilføjet administrativ adgang for gruppe ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','FEJL: kunne ikke tilføje administrativ adgang for gruppe ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Tilføjet bruger adgang for gruppe ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','FEJL: Kunne ikke tilføje bruger adgang for gruppe ID %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Fejl ved udførelsen af %s');
define('_MD_AM_FAILED_SUCESS','%s udført');

define('_MD_AM_DELETE_ERROR','FEJL: Kunne ikke slette %s');
define('_MD_AM_UPDATE_ERROR','FEJL: Kunne ikke opdaterer %s');
define('_MD_AM_DELETE_MOD_TABLES','Sletter modul tabeller...');

define('_MD_AM_COMMENTS_DELETE','Sletter kommentar...');
define('_MD_AM_COMMENTS_DELETE_ERROR','FEJL: Kunne ikke slette kommentar');
define('_MD_AM_COMMENTS_DELETED','Kommentar slettet');

define('_MD_AM_NOTIFICATIONS_DELETE','Sletter meddelelser...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','FEJL: Kunne ikke slette meddelelser');
define('_MD_AM_NOTIFICATIONS_DELETED','Meddelelser slettet');

define('_MD_AM_TABLE_DROPPED','Tabel %s slettet');
define('_MD_AM_TABLE_DROPPED_ERROR','FEJL: Kunne ikke slette tabellen %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','FEJL: Ikke tilladt at slette tabellen %s');
?>