<?php
// $Id: modulesadmin.php,v 1.7 2005/08/08 06:29:39 skalpa Exp $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Moduladministration");
define("_MD_AM_MODULE","Modul");
define("_MD_AM_VERSION","Version");
define("_MD_AM_LASTUP","Senast uppdaterad");
define("_MD_AM_DEACTIVATED","Deaktiverad");
define("_MD_AM_ACTION","Åtgärd");
define("_MD_AM_DEACTIVATE","Deaktivera");
define("_MD_AM_ACTIVATE","Aktivera");
define("_MD_AM_UPDATE","Uppdatera");
define("_MD_AM_DUPEN","Duplicera modulen i tabellen!");
define("_MD_AM_DEACTED","Den valda modulen har deaktiverats. Du kan nu avinstallera modulen på ett säkert sätt.");
define("_MD_AM_ACTED","Den valda modulen har aktiverats!");
define("_MD_AM_UPDTED","Den valda modulen har uppdaterats!");
define("_MD_AM_SYSNO","Systemmodulen kan inte deaktiveras.");
define("_MD_AM_STRTNO","Denna modulen är satt som din standardförstasida. Vänligen ändra startmodul till vad som passar dina syften.");

// added in RC2
define("_MD_AM_PCMFM","Vänligen bekfräfta:");

// added in RC3
define("_MD_AM_ORDER","Ordning");
define("_MD_AM_ORDER0","(0 = göm)");
define("_MD_AM_ACTIVE","Aktiv");
define("_MD_AM_INACTIVE","Inaktiv");
define("_MD_AM_NOTINSTALLED","Ej installerad");
define("_MD_AM_NOCHANGE","Ingen förändring");
define("_MD_AM_INSTALL","Installera");
define("_MD_AM_UNINSTALL","Avinstallera");
define("_MD_AM_SUBMIT","Skicka");
define("_MD_AM_CANCEL","Avbryt");
define("_MD_AM_DBUPDATE","Databasen uppdaterades!");
define("_MD_AM_BTOMADMIN","Tillbaka till moduladministrationssidan");

// %s represents module name
define("_MD_AM_FAILINS","Kunde ej installera %s.");
define("_MD_AM_FAILACT","Kunde ej aktivera %s.");
define("_MD_AM_FAILDEACT","Kunde ej inaktivera %s.");
define("_MD_AM_FAILUPD","Kunde ej uppdatera %s.");
define("_MD_AM_FAILUNINS","Kunde ej avinstallera %s.");
define("_MD_AM_FAILORDER","Kunde ej ändra ordning på %s.");
define("_MD_AM_FAILWRITE","Kunde ej skriva till huvudmenyn.");
define("_MD_AM_ALEXISTS","Modulen %s finns redan.");
define("_MD_AM_ERRORSC","Fel:");
define("_MD_AM_OKINS","Modulen %s installerades utan problem.");
define("_MD_AM_OKACT","Modulen %s aktiverades utan problem.");
define("_MD_AM_OKDEACT","Modulen %s deaktiverades utan problem.");
define("_MD_AM_OKUPD","Modulen %s uppdaterades utan problem.");
define("_MD_AM_OKUNINS","Modulen %s avinstallerades utan problem.");
define("_MD_AM_OKORDER","Modulen %s ändrades utan problem.");

define('_MD_AM_RUSUREINS','Tryck på knappen nedan för att installera denna modul');
define('_MD_AM_RUSUREUPD','Tryck på knappen nedan för att uppdatera denna modul');
define('_MD_AM_RUSUREUNINS','Är du säker på att du vill avinstallera denna modul?');
define('_MD_AM_LISTUPBLKS','Följande block kommer att uppdateras.<br />Välj block för vilka innehåll (mallar och alternativ) kommer att skrivas över.<br />');
define('_MD_AM_NEWBLKS','Nya block');
define('_MD_AM_DEPREBLKS','Utdaterade block');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installering');
define('_MD_AM_TABLE_RESERVED','%s är en reserverat tabell!');
define('_MD_AM_CREATE_TABLES','Upprättar tabeller....');
define('_MD_AM_TABLE_CREATED','Tabell %s upprättat');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data insatt i tabellen %s');
define('_MD_AM_INSERT_DATA_FAILD','Kunde inte sätta in %s i databasen.');
define('_MD_AM_INSERT_DATA_DONE','Modul data insatt korrekt.');
define('_MD_AM_MODULEID','Modul ID: %s');
define('_MD_AM_SQL_FOUND','SQL fil funnit i %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL fil inte funnit i %s');
define('_MD_AM_SQL_NOT_CREATE','FEL: Kunde inte upprättat %s ');
define('_MD_AM_SQL_NOT_VALID','%s är inte valid SQL!');

define('_MD_AM_GROUP_ID','Grupp ID: %s ');
define('_MD_AM_NAME','Namn: ');
define('_MD_AM_VALUE','Värde:');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Tillägger mallar...');
define('_MD_AM_TEMPLATES_DELETE','Tar bort mallar...');
define('_MD_AM_TEMPLATES_UPDATE','Uppdaterar mallar...');

define('_MD_AM_TEMPLATE_ID','Mall ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Mall %s lagt till databasen');
define('_MD_AM_TEMPLATE_ADD_ERROR','FEL: Kunde inte sätta in mallen %s i databasen.');
define('_MD_AM_TEMPLATE_COMPILED','Mall %s utarbetat');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','FEL: Fel vid utarbetningen av mallen %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Mallen %s raderat från databasen');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','FEL: Kunde inte radera mallen %s från databasen.');
define('_MD_AM_TEMPLATE_INSERT_DATA','Mallen %s insatt i databasen.');
define('_MD_AM_TEMPLATE_RECOMPILE','Mallen %s återbearbetat.');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','FEL: Mallen %s inte återbearbetatas');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','FEL: Kunde inte återbearbetate mallen %s');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','FEL: Kunde inte radera mallen %s. Avbryter uppdateringen av denna fil.');
define('_MD_AM_TEMPLATE_UPDATE','Mallen %s uppdaterad.');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','FEL: Kunde inte uppdaterar %s Mall');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Tillägger blocken...');
define('_MD_AM_BLOCKS_DELETE','Ta bort blocken...');
define('_MD_AM_BLOCKS_REBUILD','Återställer blocken...');

define('_MD_AM_BLOCK_ID','Block ID: %s');

define('_MD_AM_BLOCK_ACCESS','Lagt till block tillgångsrättigheter');
define('_MD_AM_BLOCK_ACCESS_ERROR','FEL: Kunde inte tillägga block tillgångsrättigheter');
define('_MD_AM_BLOCK_ADD','Block %s lagt till');
define('_MD_AM_BLOCK_ADD_ERROR','FEL: Kunde inte tillägga block %s till databasen');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Databas fel: %s');
define('_MD_AM_BLOCK_CREATED','Block %s upprättat');
define('_MD_AM_BLOCK_DELETE','Block %s raderat');
define('_MD_AM_BLOCK_DELETE_DATA','Block Mall %s raderat från databasen');
define('_MD_AM_BLOCK_DELETE_ERROR','FEL: Kunde inte radera block %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','FEL: Kunde inte radera block Mall %s från databasen');
define('_MD_AM_BLOCK_DEPRECATED','Block Mall %s underkänt');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','FEL: Kunde inte fjerne underkännelsen av block mallen');
define('_MD_AM_BLOCK_UPDATE','Block %s uppdaterad');

/* Configs */
define('_MD_AM_GONFIG_ID','Konfigurations ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Lägger till modul konfigurations data...');
define('_MD_AM_MODULE_DATA_DELETE','Tar bort modul konfigurations muligheder...');
define('_MD_AM_MODULE_DATA_UPDATE','Modul data uppdaterad.');

define('_MD_AM_CONFIG_ADD','Konfigurations muligheder uppdaterad.');
define('_MD_AM_CONFIG_DATA_ADD','Konfiguration %s lagt till databasen');
define('_MD_AM_CONFIG_DATA_ADD_ERROR','FEL: Kunde inte indsætte konfiguration %s til databasen');
define('_MD_AM_GONFIG_DATA_DELETE','Konfigurations data raderat från databasen. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','FEL: Kunde inte radera konfigurations data från databasen');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Sätter in grupprättigheter');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','FEL: Kunde inte radera grupprättigheter');
define('_MD_AM_GROUP_PERMS_DELETED','Grupprättigheter raderat');

define('_MD_AM_ACCESS_ADMIN_ADD','Lagt till administrativ tillgång för grupp ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','FEL: Kunde inte tillägga administrativ tillgång för grupp ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Lagt till använder tillgång för grupp ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','FEL: Kunde inte tillägga använder tillgång för grupp ID %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Fel vid utförande av %s');
define('_MD_AM_FAILED_SUCESS','%s utfört');

define('_MD_AM_DELETE_ERROR','FEL: Kunde inte radera %s');
define('_MD_AM_UPDATE_ERROR','FEL: Kunde inte opdaterer %s');
define('_MD_AM_DELETE_MOD_TABLES','Tar bort modul tabeller...');

define('_MD_AM_COMMENTS_DELETE','Tar bort kommentar...');
define('_MD_AM_COMMENTS_DELETE_ERROR','FEL: Kunde inte radera kommentar');
define('_MD_AM_COMMENTS_DELETED','Kommentar raderat');

define('_MD_AM_NOTIFICATIONS_DELETE','Tar bort meddelanden...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','FEL: Kunde inte radera meddelanden');
define('_MD_AM_NOTIFICATIONS_DELETED','Meddelanden raderat');

define('_MD_AM_TABLE_DROPPED','Tabel %s raderat');
define('_MD_AM_TABLE_DROPPED_ERROR','FEL: Kunde inte radera tabellen %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','FEL: Inte tillåten att radera tabellen %s');
?>
