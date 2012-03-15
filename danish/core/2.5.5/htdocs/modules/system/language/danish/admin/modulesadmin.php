<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 5536 2010-10-18 03:29:42Z beckmi $
 */

// Navigation
define("_AM_SYSTEM_MODULES_ADMIN", "Modul Administration");
define("_AM_SYSTEM_MODULES_LIST", "Modul liste");
define("_AM_SYSTEM_MODULES_TOINSTALL", "Installer modul");
define("_AM_SYSTEM_MODULES_VALIDATE", "Godkend ændringer");
define("_AM_SYSTEM_MODULES_SUBMITRES", "Indsend resultat");

// Messages
define("_AM_SYSTEM_MODULES_RUSUREINS", "Tryk på knappen nedenfor for at installere dette modul");
define("_AM_SYSTEM_MODULES_RUSUREUNINS", "Er du sikker på du vil afinstallere dette modul?");
define("_AM_SYSTEM_MODULES_RUSUREUPD", "Tryk på knappen herunder for at opdatere dette modul");
define("_AM_SYSTEM_MODULES_BTOMADMIN", "Tilbage til modul administrations siden");
define("_AM_SYSTEM_MODULES_INSTALLING", "Installation");
define("_AM_SYSTEM_MODULES_UNINSTAL", "Afinstaller");
define("_AM_SYSTEM_MODULES_DEACTIVATE", "Deaktivere");
define("_AM_SYSTEM_MODULES_ACTIVATE", "Aktivér");
define("_AM_SYSTEM_MODULES_UPDATING", "Opdatering");

// Main
define("_AM_SYSTEM_MODULES_INSTALL", "Installér");
define("_AM_SYSTEM_MODULES_UNINSTALL", "Afinstallér");
define("_AM_SYSTEM_MODULES_UPDATE", "Opdater");
define("_AM_SYSTEM_MODULES_VIEWLARGE", "Stor visning");
define("_AM_SYSTEM_MODULES_VIEWLINE", "Linie visning");

// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS", "Kunne ikke installere %s.");
define("_AM_SYSTEM_MODULES_FAILACT", "Kunne ikke aktivere %s.");
define("_AM_SYSTEM_MODULES_FAILDEACT", "Kunne ikke deaktivere %s.");
define("_AM_SYSTEM_MODULES_FAILUPD", "Kunne ikke opdatere %s.");
define("_AM_SYSTEM_MODULES_FAILUNINS", "Kunne ikke afinstallere %s.");
define("_AM_SYSTEM_MODULES_FAILORDER", "Kunne ikke sorterer %s.");
define("_AM_SYSTEM_MODULES_FAILWRITE", "Kunne ikke skrive til menuen.");
define("_AM_SYSTEM_MODULES_ALEXISTS", "Modulet %s findes allerede.");
define("_AM_SYSTEM_MODULES_ERRORSC", "Fejl:");
define("_AM_SYSTEM_MODULES_OKINS", "Modulet %s blev korrekt installeret.");
define("_AM_SYSTEM_MODULES_OKACT", "Modulet %s aktivere.");
define("_AM_SYSTEM_MODULES_OKDEACT", "Modulet %s deaktiveret.");
define("_AM_SYSTEM_MODULES_OKUPD", "Modulet %s blev korrekt opdateret.");
define("_AM_SYSTEM_MODULES_OKUNINS", "Modulet %s afinstalleret.");
define("_AM_SYSTEM_MODULES_OKORDER", "Modulet %s ændret.");

define("_AM_SYSTEM_MODULES_MODULE", "Modul");
define("_AM_SYSTEM_MODULES_VERSION", "Version");
define("_AM_SYSTEM_MODULES_LASTUP", "Sidst opdateret");
define("_AM_SYSTEM_MODULES_DEACTIVATED", "Deaktiveret");
define("_AM_SYSTEM_MODULES_ACTION", "Handling");
define("_AM_SYSTEM_MODULES_MENU", "Menu");
define("_AM_SYSTEM_MODULES_HIDE", "Skjul");
define("_AM_SYSTEM_MODULES_SHOW", "Vis");

define("_AM_SYSTEM_MODULES_DUPEN", "Findes allerede i modul tabellerne!");
define("_AM_SYSTEM_MODULES_DEACTED", "Det valgte modul er blevet deaktiveret. Du kan nu afinstallere modulet.");
define("_AM_SYSTEM_MODULES_ACTED", "Det valgte modul er blevet aktiveret!");
define("_AM_SYSTEM_MODULES_UPDTED", "Det valgte modul er blevet opdateret!");
define("_AM_SYSTEM_MODULES_SYSNO", "Systemet Modulet kan ikke deaktiveres.");
define("_AM_SYSTEM_MODULES_STRTNO", "Dette modul er angivet som din standard startside. Du kan ændre start modul så det passer til dine behov.");

define("_AM_SYSTEM_MODULES_ORDER", "Bestil");
define("_AM_SYSTEM_MODULES_ORDER0", "(0 = skjule)");
define("_AM_SYSTEM_MODULES_ACTIVE", "Aktive");
define("_AM_SYSTEM_MODULES_INACTIVE", "Inaktive");
define("_AM_SYSTEM_MODULES_NOTINSTALLED", "Ikke installeret");
define("_AM_SYSTEM_MODULES_NOCHANGE", "Ingen ændring");
define("_AM_SYSTEM_MODULES_SUBMIT", "Indsend");
define("_AM_SYSTEM_MODULES_CANCEL", "Annuller");
define("_AM_SYSTEM_MODULES_DBUPDATE", "Databasen blev opdateret!");
define("_AM_SYSTEM_MODULES_LISTUPBLKS", "Følgende blokke vil blive opdateret. <br /> Vælg de blokke hvis indhold (skabelon og indstillinger), kan blive overskrevet. <br />");
define("_AM_SYSTEM_MODULES_NEWBLKS", "Ny Blok");
define("_AM_SYSTEM_MODULES_DEPREBLKS", "Forældet Blok");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED", "%s er en reserveret tabel!");
define("_AM_SYSTEM_MODULES_CREATE_TABLES", "Oprettelse af tabeller ...");
define("_AM_SYSTEM_MODULES_TABLE_CREATED", "Tabel %s  er oprettet");
define("_AM_SYSTEM_MODULES_INSERT_DATA", "Data indsat tabel %s ");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD", "Kunne ikke indsætte %s i databasen.");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE", "Modul data indsat succes.");
define("_AM_SYSTEM_MODULES_MODULEID", "Modul-id: %s ");
define("_AM_SYSTEM_MODULES_SQL_FOUND", "SQL-filen findes på %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND", "SQL-filen blev ikke fundet på %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE", "FEJL: Kunne ikke oprette %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID", "%s er ikke en gyldig SQL!");
define("_AM_SYSTEM_MODULES_GROUP_ID", "Gruppe-id: %s ");
define("_AM_SYSTEM_MODULES_NAME", "Navn:");
define("_AM_SYSTEM_MODULES_VALUE", "Værdi:");

// Templates
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD", "Tilføjelse skabeloner ...");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE", "Sletning af skabeloner ...");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE", "Opdatering skabeloner ...");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID", "Skabelon ID: %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA", "Skabelon %s  tilføjet til databasen");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR", "FEJL: Kunne ikke indsætte skabelon %s i databasen.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED", "Skabelon %s  kompileret");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED", "FEJL: Kunne ikke kompilere skabelonen %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA", "Skabelon %s  slettet fra databasen.");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD", "FEJL: Kunne ikke slette skabelonen %s fra databasen.");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA", "Skabelon %s  indsat i databasen.");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE", "Skabelon %s  rekompileret");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD", "FEJL: Template %s rekompilation mislykkedes");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR", "FEJL: Kunne ikke rekompilerer skabelon %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR", "FEJL: Kunne ikke slette gammel skabelon %s . Afbryder opdatering af denne fil.");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE", "Skabelon %s opdateret.");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR", "FEJL: Kunne ikke opdatere %s  skabelon.");

// Blocks
define("_AM_SYSTEM_MODULES_BLOCKS_ADD", "Tilføjelse blokke ...");
define("_AM_SYSTEM_MODULES_BLOCKS_DELETE", "Sletning blok ...");
define("_AM_SYSTEM_MODULES_BLOCKS_REBUILD", "Ombygning blokke ...");
define("_AM_SYSTEM_MODULES_BLOCK_ID", "Blok-id: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS", "Tilføjet blok rettigheder");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR", "FEJL: Kunne ikke tilføje blok rettigheder");
define("_AM_SYSTEM_MODULES_BLOCK_ADD", "Blok %s tilføjet");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR", "FEJL: Kunne ikke tilføje blok %s til databasen!");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE", "Database fejl:%s ");
define("_AM_SYSTEM_MODULES_BLOCK_CREATED", "Blok %s oprettet");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE", "Blok %s slettet.");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA", "Blok skabelon %s slettet fra databasen.");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR", "FEJL: Kunne ikke slette blok %s");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR", "FEJL: Kunne ikke slette blok skabelon %s fra databasen");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED", "Blok skabelon %s forældet");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR", "FEJL: Kunne ikke fjerne forældede blok skabelon.");
define("_AM_SYSTEM_MODULES_BLOCK_UPDATE", "Blok %s opdateret.");

// Configs
define("_AM_SYSTEM_MODULES_GONFIG_ID", "Config ID: %s ");
define("_AM_SYSTEM_MODULES_MODULE_DATA_ADD", "Tilføjelse afmodul konfigurations data ...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_DELETE", "Sletning af modul konfigurations muligheder ...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE", "Modul data opdateret.");
define("_AM_SYSTEM_MODULES_CONFIG_ADD", "Konfigurations muligheder tilføjet");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD", "Konfiguration %s tilføjet idatabasen");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR", "FEJL: Kunne ikke indsætte konfiguration %s idatabasen.");
define("_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE", "Konfigurations data slettet fra databasen.");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR", "FEJL: Kunne ikke slette konfigurations data fra databasen");

// Access
define("_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD", "Indstiller gruppe rettigheder ...");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR", "FEJL: Kunne ikke slette gruppe rettigheder");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED", "Grupperettigheder slettet");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD", "Tilføjet administrations rettigheder for gruppe ID %s ");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR", "FEJL: Kunne ikke tilføje administrations adgange korrekt for gruppe ID %s ");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR", "Tilføjet bruger rettighed til Gruppe-id: %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR", "FEJL: Kunne ikke tilføje bruger rettighed til Gruppe-id: %s");

// execute module specific install script if any
define("_AM_SYSTEM_MODULES_FAILED_EXECUTE", "Kunne ikke køre %s");
define("_AM_SYSTEM_MODULES_FAILED_SUCESS", "%s bliver udført korrekt.");
define("_AM_SYSTEM_MODULES_DELETE_ERROR", "FEJL: Kunne ikke slette %s");
define("_AM_SYSTEM_MODULES_UPDATE_ERROR", "FEJL: Kunne ikke opdatere %s");
define("_AM_SYSTEM_MODULES_DELETE_MOD_TABLES", "Sletning af modul tabeller ...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE", "Sletning af kommentarer ...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR", "FEJL: Kunne ikke slette kommentarer");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETED", "Kommentarer slettet");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE", "Sletning af meddelelser ...");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR", "FEJL: Kunne ikke slette meddelelser");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED", "Meddelelser slettet");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED", "Tabel %s er slettet!");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR", "FEJL: Kunne ikke slette tabel %s");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "FEJL: Ikke tilladt at slette tabellen %s!");

// Tips
define( '_AM_SYSTEM_MODULES_TIPS', 
'<ul>
<li>Hvis du installerer et nyt modul, skal du huske at sætte modul indstillinger, blokke og brugere rettigheder!</li>
<li>For at skjule modulet i Hovedmenuen, sæt vægtning til 0</li>
<li>Slet ubenyttede modul filer fra dein server, dette vil minimerer sikkerhedsrisise og holde din side sikker.</li>
<li>For at ændre rækkefølgen af moduler (som afspejles i hovedmenuen), skal du bare trække og slippe modulerne til den ønskede plads.</li>
</ul>');
define( '_AM_SYSTEM_MODULES_CONFIRM_TIPS',
'<ul>
<li>Kontroller alle modifikationer for at validere.</li>
</ul>');

?>
<?php // Translation done by xtransam & anderssk - 2010-10-19 07:12 ?>
