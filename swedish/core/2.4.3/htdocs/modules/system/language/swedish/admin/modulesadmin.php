<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Moduladministration");
define("_MD_AM_MODULE","Modul");
define("_MD_AM_VERSION","Version");
define("_MD_AM_LASTUP","Senaste uppdatering");
define("_MD_AM_DEACTIVATED","Avaktiverad");
define("_MD_AM_ACTION","Åtgärd");
define("_MD_AM_DEACTIVATE","Avaktivera");
define("_MD_AM_ACTIVATE","Aktivera");
define("_MD_AM_UPDATE","Uppdatera");
define("_MD_AM_DUPEN","Dublettrader i modultabellen!");
define("_MD_AM_DEACTED","Den valda modulen har avaktiverats. Du kan nu avinstallera modulen.");
define("_MD_AM_ACTED","Den valda modulen har aktiverats!");
define("_MD_AM_UPDTED","Den valda modulen har uppdaterats!");
define("_MD_AM_SYSNO","Systemmodulen kan inte avaktiveras.");
define("_MD_AM_STRTNO","Den här modulen är vald som din startsida. Ändra startmodul efter eget tycke och smak.");

// added in RC2
define("_MD_AM_PCMFM","Vänligen bekräfta:");

// added in RC3
define("_MD_AM_ORDER","Ordning");
define("_MD_AM_ORDER0","(0 = dölj)");
define("_MD_AM_ACTIVE","Aktiv");
define("_MD_AM_INACTIVE","Avaktiverad");
define("_MD_AM_NOTINSTALLED","Inte installerad");
define("_MD_AM_NOCHANGE","Ingen förändring");
define("_MD_AM_INSTALL","Installera");
define("_MD_AM_UNINSTALL","Avinstallera");
define("_MD_AM_SUBMIT","Verkställ");
define("_MD_AM_CANCEL","Avbryt");
define("_MD_AM_DBUPDATE","Databasen uppdaterades!");
define("_MD_AM_BTOMADMIN","Tillbaka till moduladministrationssidan");

// %s represents module name
define("_MD_AM_FAILINS","Kunde inte installera %s.");
define("_MD_AM_FAILACT","Kunde inte aktivera %s.");
define("_MD_AM_FAILDEACT","Kunde inte avaktivera %s.");
define("_MD_AM_FAILUPD","Kunde inte uppdatera %s.");
define("_MD_AM_FAILUNINS","Kunde inte avinstallera %s.");
define("_MD_AM_FAILORDER","Kunde inte sortera om %s.");
define("_MD_AM_FAILWRITE","Kunde inte skriva till huvudmenyn.");
define("_MD_AM_ALEXISTS","Modulen %s finns redan.");
define("_MD_AM_ERRORSC","Fel:");
define("_MD_AM_OKINS","Modulen %s installerades.");
define("_MD_AM_OKACT","Modulen %s aktiverades.");
define("_MD_AM_OKDEACT","Module %s avaktiverades.");
define("_MD_AM_OKUPD","Module %s uppdaterades.");
define("_MD_AM_OKUNINS","Module %s avinstallerades.");
define("_MD_AM_OKORDER","Module %s ändrades.");

define('_MD_AM_RUSUREINS','Klicka på knappen nedan för att installera den här modulen');
define('_MD_AM_RUSUREUPD','Klicka på knappen nedan för att uppdatera den här modulen');
define('_MD_AM_RUSUREUNINS','Är du säker på att du vill avinstallera den här modulen?');
define('_MD_AM_LISTUPBLKS','Följande block kommer uppdateras.<br />Välj de block där innehåll (mallar och alternativ) eventuellt skrivs över.<br />');
define('_MD_AM_NEWBLKS','Nya block');
define('_MD_AM_DEPREBLKS','Deprecated block');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installerar ');
define('_MD_AM_TABLE_RESERVED','%s är en reserverad tabell!');
define('_MD_AM_CREATE_TABLES','Skapar tabeller...');
define('_MD_AM_TABLE_CREATED','Tabellen %s skapades');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data infogades i tabellen %s');
define('_MD_AM_INSERT_DATA_FAILD','Kunde inte infoga %s i databasen.');
define('_MD_AM_INSERT_DATA_DONE','Moduldata infogades.');
define('_MD_AM_MODULEID',' Modul-ID: %s');
define('_MD_AM_SQL_FOUND','SQL-fil hittades i %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL-fil hittades inte i %s');
define('_MD_AM_SQL_NOT_CREATE','FEL: Kunde inte skapa %s ');
define('_MD_AM_SQL_NOT_VALID','%s är inte giltig SQL!');

define('_MD_AM_GROUP_ID',' Grupp-ID: %s ');
define('_MD_AM_NAME',' Namn: ');
define('_MD_AM_VALUE',' Värde: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Lägger till mallar...');
define('_MD_AM_TEMPLATES_DELETE','Raderar mallar...');
define('_MD_AM_TEMPLATES_UPDATE','Uppdaterar mallar...');

define('_MD_AM_TEMPLATE_ID','Mall-ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Mallen %s lades till i databasen');
define('_MD_AM_TEMPLATE_ADD_ERROR','FEL: Kunde inte infoga mallen %s i databasen.');
define('_MD_AM_TEMPLATE_COMPILED','Mallen %s kompilerades ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','FEL: Kompilering av mallen %s misslyckades');
define('_MD_AM_TEMPLATE_DELETE_DATA','Mallen %s raderades från databasen. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','FEL: Kunde inte radera mallen %s från databasen. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Mallen %s infogades i databasen. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Mallen %s kompilerades om');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','FEL: Omkompilering av mallen %s misslyckades');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','FEL: Kunde inte kompilera om mallen %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','FEL: Kunde inte radera den gamla mallen %s. Avbryter uppdateringen av den här filen. ');
define('_MD_AM_TEMPLATE_UPDATE','Mallen %s uppdaterades. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','FEL: Kunde inte uppdatera mallen %s. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Lägger till block...');
define('_MD_AM_BLOCKS_DELETE','Raderar block...');
define('_MD_AM_BLOCKS_REBUILD','Bygger om block...');

define('_MD_AM_BLOCK_ID',' Block-ID: %s ');

define('_MD_AM_BLOCK_ACCESS','Åtkomsträttigheter för block tillagda');
define('_MD_AM_BLOCK_ACCESS_ERROR','FEL: Kunde inte lägga till åtkomsträttigheter för block');
define('_MD_AM_BLOCK_ADD','Blocket %s har lagts till ');
define('_MD_AM_BLOCK_ADD_ERROR','FEL: Kunde inte lägga till blocket %s i databasen! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Databasfel: %s ');
define('_MD_AM_BLOCK_CREATED','Blocket %s skapades ');
define('_MD_AM_BLOCK_DELETE','Blocket %s raderades. ');
define('_MD_AM_BLOCK_DELETE_DATA','Blockmallen %s raderades från databasen. ');
define('_MD_AM_BLOCK_DELETE_ERROR','FEL: Kunde inte radera blocket %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','FEL: Kunde inte radera blockmallen %s från databasen');
define('_MD_AM_BLOCK_DEPRECATED','Blockmallen %s är deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','FEL: Kunde inte ta bort deprecated blockmall.  ');
define('_MD_AM_BLOCK_UPDATE','Blocket %s uppdaterat. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Konfigurerings-ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Lägger till modulkonfigureringsdata...');
define('_MD_AM_MODULE_DATA_DELETE','Raderar modulkonfigureringsdata...');
define('_MD_AM_MODULE_DATA_UPDATE','Moduldata uppdaterades.');

define('_MD_AM_CONFIG_ADD',' Konfigureringsalternativ lades till');
define('_MD_AM_CONFIG_DATA_ADD',' Konfigureringen %s lades till i databasen');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' FEL: Kunde inte infoga konfigureringen %s i databasen. ');
define('_MD_AM_GONFIG_DATA_DELETE','Konfigureringsdata raderat från databasen. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','FEL: Kunde inte radera konfigureringsdata från databasen.');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Sätter gruppbehörigheter...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','FEL: Kunde inte radera gruppbehörigheter ');
define('_MD_AM_GROUP_PERMS_DELETED','Gruppbehörigheter raderade ');

define('_MD_AM_ACCESS_ADMIN_ADD','Lade till administratörsbehörigheter för grupp-ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','FEL: Kunde inte lägga till administratörsbehörigheter för grupp-ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Lade till användarbehörigheter för grupp-ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','FEL: Kunde inte lägga till användarbehörigheter för grupp-ID %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Misslyckades med att utföra %s');
define('_MD_AM_FAILED_SUCESS','%s utfördes.');

define('_MD_AM_DELETE_ERROR','FEL: Kunde inte radera %s');
define('_MD_AM_UPDATE_ERROR','FEL: Kunde inte uppdatera %s');
define('_MD_AM_DELETE_MOD_TABLES','Raderar modultabeller...');

define('_MD_AM_COMMENTS_DELETE','Deleting kommentarer...');
define('_MD_AM_COMMENTS_DELETE_ERROR','FEL: Kunde inte radera kommentarer');
define('_MD_AM_COMMENTS_DELETED','Kommentarer raderade');

define('_MD_AM_NOTIFICATIONS_DELETE','Raderar underrättelser...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','FEL: Kunde inte radera underrättelser');
define('_MD_AM_NOTIFICATIONS_DELETED','Underrättelser raderade');

define('_MD_AM_TABLE_DROPPED','Tabellen %s raderad!');
define('_MD_AM_TABLE_DROPPED_ERROR','FEL: Kunde inte radera tabellen %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','FEL: Inte tillåtet att radera tabellen %s !');

?>
