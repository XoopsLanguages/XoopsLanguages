<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
  * @version     $Id: modulesadmin.php 5580 2010-10-21 19:38:48Z forxoops $
 */

 // _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
 
// Navigation
define("_AM_SYSTEM_MODULES_ADMIN", "Beheer modules");
define("_AM_SYSTEM_MODULES_LIST", "Lijst van modules");
define("_AM_SYSTEM_MODULES_TOINSTALL", "Module installeren");
define("_AM_SYSTEM_MODULES_VALIDATE","Veranderingen valideren");
define("_AM_SYSTEM_MODULES_SUBMITRES","Resultaat bevestigen");

// Messages
define("_AM_SYSTEM_MODULES_RUSUREINS","Druk op onderstaande knop om deze module te installeren");
define("_AM_SYSTEM_MODULES_RUSUREUNINS","Weet u zeker dat u deze module wilt verwijderen?");
define("_AM_SYSTEM_MODULES_RUSUREUPD","Druk op onderstaande knop om deze module te installeren");
define("_AM_SYSTEM_MODULES_BTOMADMIN","Terug naar de Module Beheer pagina");
define("_AM_SYSTEM_MODULES_INSTALLING","Installeer ");
define("_AM_SYSTEM_MODULES_UNINSTAL","Verwijderen ");
define("_AM_SYSTEM_MODULES_DEACTIVATE","Deactiveren ");
define("_AM_SYSTEM_MODULES_ACTIVATE","Activeren ");
define("_AM_SYSTEM_MODULES_UPDATING","Bijwerken ");

// Main
define("_AM_SYSTEM_MODULES_INSTALL","Installeren");
define("_AM_SYSTEM_MODULES_UNINSTALL","Verwijderen");
define("_AM_SYSTEM_MODULES_UPDATE","Bijwerken");
define("_AM_SYSTEM_MODULES_VIEWLARGE","Grote weergave");
define("_AM_SYSTEM_MODULES_VIEWLINE","Lijn weergave");

// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS","Kan %s niet installeren.");
define("_AM_SYSTEM_MODULES_FAILACT","Kan %s niet activeren.");
define("_AM_SYSTEM_MODULES_FAILDEACT","Kan %s niet deactiveren.");
define("_AM_SYSTEM_MODULES_FAILUPD","Kan %s niet deactiveren.");
define("_AM_SYSTEM_MODULES_FAILUNINS","Kan %s niet verwijderen.");
define("_AM_SYSTEM_MODULES_FAILORDER","Kan %s niet verplaatsen.");
define("_AM_SYSTEM_MODULES_FAILWRITE","Kan niet schrijven naar het hoofdmenu.");
define("_AM_SYSTEM_MODULES_ALEXISTS","Module %s  bestaat reeds.");
define("_AM_SYSTEM_MODULES_ERRORSC","Fout (s):");
define("_AM_SYSTEM_MODULES_OKINS","Module %s  geïnstalleerd.");
define("_AM_SYSTEM_MODULES_OKACT","Module %s  succesvol geactiveerd.");
define("_AM_SYSTEM_MODULES_OKDEACT","Module %s  succesvol gedeactiveerd.");
define("_AM_SYSTEM_MODULES_OKUPD","Module %s  bijgewerkt.");
define("_AM_SYSTEM_MODULES_OKUNINS","Module %s  succesvol verwijderd.");
define("_AM_SYSTEM_MODULES_OKORDER","Module %s  correct veranderd.");

define("_AM_SYSTEM_MODULES_MODULE","Module");
define("_AM_SYSTEM_MODULES_VERSION","Versie");
define("_AM_SYSTEM_MODULES_LASTUP","Bijgewerkt op");
define("_AM_SYSTEM_MODULES_DEACTIVATED","Gedeactiveerd");
define("_AM_SYSTEM_MODULES_ACTION","Actie");
define("_AM_SYSTEM_MODULES_MENU","Menu");
define("_AM_SYSTEM_MODULES_HIDE","Verbergen");
define("_AM_SYSTEM_MODULES_SHOW","Tonen");

define("_AM_SYSTEM_MODULES_DUPEN","Dubbel item in de module tabel!");
define("_AM_SYSTEM_MODULES_DEACTED","De geselecteerde module is gedeactiveerd. U kunt de module nu veilig verwijderen.");
define("_AM_SYSTEM_MODULES_ACTED","De geselecteerde module is geactiveerd!");
define("_AM_SYSTEM_MODULES_UPDTED","De geselecteerde module is bijgewerkt!");
define("_AM_SYSTEM_MODULES_SYSNO","De Systeem module kan niet worden gedeactiveerd.");
define("_AM_SYSTEM_MODULES_STRTNO","Deze module is ingesteld als standaard startpagina. U dient een andere startmodule aan te wijzen.");

define("_AM_SYSTEM_MODULES_ORDER","Volgorde");
define("_AM_SYSTEM_MODULES_ORDER0","(0 = verbergen)");
define("_AM_SYSTEM_MODULES_ACTIVE","Actief");
define("_AM_SYSTEM_MODULES_INACTIVE","Inactief");
define("_AM_SYSTEM_MODULES_NOTINSTALLED","Niet geinstalleerd");
define("_AM_SYSTEM_MODULES_NOCHANGE","Geen wijzigingen");
define("_AM_SYSTEM_MODULES_SUBMIT","Bevestigen");
define("_AM_SYSTEM_MODULES_CANCEL","Annuleren");
define("_AM_SYSTEM_MODULES_DBUPDATE",_AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_MODULES_LISTUPBLKS","De volgende blokken zullen worden bijgewerkt. <br /> Selecteer de blokken waarvan de inhoud (sjabloon en opties) mag worden overschreven.<br />");
define("_AM_SYSTEM_MODULES_NEWBLKS","Nieuwe blokken");
define("_AM_SYSTEM_MODULES_DEPREBLKS","Verouderde blokken");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED","%s is een gereserveerde tabel!");
define("_AM_SYSTEM_MODULES_CREATE_TABLES","Aanmaken van tabellen...");
define("_AM_SYSTEM_MODULES_TABLE_CREATED","Tabel %s  aangemaakt");
define("_AM_SYSTEM_MODULES_INSERT_DATA","&nbsp;&nbsp; Gegevens ingevoegd in tabel %s");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD","Kon %s niet invoegen in de database.");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE","Module gegevens succesvol ingevoegd.");
define("_AM_SYSTEM_MODULES_MODULEID"," Module ID: %s");
define("_AM_SYSTEM_MODULES_SQL_FOUND","SQL-bestand gevonden in %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND","SQL-bestand niet gevonden in  %s");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE","FOUT: Kon %s niet aanmaken ");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID","%s is geen geldige SQL!");
define("_AM_SYSTEM_MODULES_GROUP_ID"," ID groep: %s ");
define("_AM_SYSTEM_MODULES_NAME"," Naam: ");
define("_AM_SYSTEM_MODULES_VALUE"," Waarde: ");

// Templates
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD","Toevoegen van sjablonen...");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE","Verwijderen van sjablonen...");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE","Bijwerken van sjablonen...");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID","ID sjabloon: %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA","Sjabloon %s  toegevoegd aan de database");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR","FOUT: Kon sjabloon %s niet invoegen aan de database.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED","Sjabloon %s  gecompileerd.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED","FOUT: Compileren van sjabloon %s mislukt.");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA","Sjabloon %s verwijderd uit de database.");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD","FOUT: Kon sjabloon %s niet verwijderen uit de database.");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA","Sjabloon %s toegevoegd aan de database.");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE","Sjabloon %s is opnieuw gecompileerd");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD","FOUT: Sjabloon %s opnieuw compileren mislukt");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR","FOUT: Kon sjabloon %s niet opnieuw compileren");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR","FOUT: Kon het oude sjabloon %s niet verwijderen . Update van dit bestand is afgebroken. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE","Sjabloon %s  bijgewerkt.");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR","FOUT: Kon sjabloon %s niet bijwerken.");

// Blocks
define("_AM_SYSTEM_MODULES_BLOCKS_ADD","Blokken toevoegen...");
define("_AM_SYSTEM_MODULES_BLOCKS_DELETE","Blokken verwijderen...");
define("_AM_SYSTEM_MODULES_BLOCKS_REBUILD","Blokken vernieuwen...");
define("_AM_SYSTEM_MODULES_BLOCK_ID"," Blok ID: %s ");
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS', "Toegangsrecht blok toegevoegd");
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR', "FOUT: Toegang tot het blok is geweigerd");
define('_AM_SYSTEM_MODULES_BLOCK_ADD', "Blok %s  toegevoegd");
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR', "FOUT: Kon blok %s niet aan de database toevoegen!");
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE', "Database fout: %s ");
define('_AM_SYSTEM_MODULES_BLOCK_CREATED', "Blok %s aangemaakt");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE', "Blok %s verwijderd.");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA', "Bloksjabloon %s verwijderd uit de database.");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR', "FOUT: Kon blok %s niet verwijderen");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR', "FOUT: Kon bloksjabloon %s niet verwijderen uit de database");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED","Block template %s deprecated ");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR","ERROR: Could not remove deprecated block template.  ");
define("_AM_SYSTEM_MODULES_BLOCK_UPDATE","Blok %s bijgewerkt.");

// Configs
define("_AM_SYSTEM_MODULES_GONFIG_ID","Configuratie ID: %s");
define("_AM_SYSTEM_MODULES_MODULE_DATA_ADD","Toevoegen module config gegevens...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_DELETE","Verwijderen module config opties...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE","Module gegevens bijgewerkt.");
define("_AM_SYSTEM_MODULES_CONFIG_ADD"," Configuratie optie toegevoegd");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD"," Configuratie %s  toegevoegd aan de database");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR"," FOUT: Kon configuratie %s niet invoegen in de database. ");
define("_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE","Configuratie gegevens uit de database verwijderd. ");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR","FOUT: Kon configuratie gegevens niet uit de database verwijderen");

// Access
define("_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD","Groepsrechten configureren...");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR","FOUT: Kon groepsrechten niet verwijderen ");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED","Groepsrechten verwijderd ");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD","Beheersrecht toegevoegd voor groep met ID %s");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR","FOUT: Kon beheersrecht niet toevoegen voor groep met ID %s ");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR","Toegangsrecht toegevoegd voor groep met ID: %s ");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR","FOUT: Kan toegangsrecht niet toevoegen voor groep met ID: %s");

// execute module specific install script if any
define("_AM_SYSTEM_MODULES_FAILED_EXECUTE","Uitvoeren %s mislukt");
define("_AM_SYSTEM_MODULES_FAILED_SUCESS","%s met succes uitgevoerd.");
define("_AM_SYSTEM_MODULES_DELETE_ERROR","FOUT: Kon %s niet verwijderen");
define("_AM_SYSTEM_MODULES_UPDATE_ERROR","FOUT: Kon %s niet bijwerken");
define("_AM_SYSTEM_MODULES_DELETE_MOD_TABLES","Verwijderen module tabellen...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE","Verwijderen reacties...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR","FOUT: Kon reacties niet verwijderen");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETED","Reacties verwijderd");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE","Verwijderen meldingen...");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR","FOUT: Kon meldingen niet verwijderen");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED","Meldingen verwijderd");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED","Tabel %s verwijderd!");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR","FOUT: Kon tabel %s niet verwijderen");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "FOUT: Niet toegestaan om tabel %s te verwijderen!");

// Tips
define("_AM_SYSTEM_MODULES_TIPS", 
"<ul>
<li>Wanneer een nieuwe modueles geinstalleerd is, vergeet dan niet de voorkeuren, blokken en gebruikerspermissies in te stellen</li>
<li>Stel menu in Om een module te verbergen in het blok Hoofdmenu</li>
<li>Verwijder de files van een niet gebruikt module van de server om beveiligingsproblemen te voorkomen en de website veilig te houden.</li>
<li>Om de volgorde te wijzigen van de modules (die gebruikt zal worden in het Hoofdmenu), is het slepen van de module naar de gewenste plaats voldoende.</li>
</ul>");
define("_AM_SYSTEM_MODULES_CONFIRM_TIPS",
"<ul>
<li>Controleer alle wijzigingen om te valideren.</li>
</ul>");

?>