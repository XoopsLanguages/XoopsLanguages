<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Vedligeholdelse");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST", "Al vedligeholdelse");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP", "Dump");

define("_AM_SYSTEM_MAINTENANCE_SESSION", "Tøm sessions tabelle");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK", "Session vedligeholdelse: OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK", "Session vedligeholdelse: Fejl");
define("_AM_SYSTEM_MAINTENANCE_CACHE", "Tøm cachemappen");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK", "Cache vedligeholdelse: OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK", "Cache vedligeholdelse: Fejl");
define("_AM_SYSTEM_MAINTENANCE_TABLES", "Tabel vedligeholdelse");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK", "Tabel vedligeholdelse: OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK", "Tabel vedligeholdelse: Fejl");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC", "Optimer, kontrollere, reparere og analysere dine tabeller");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK", "Vedligeholdelse af database: OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK", "Vedligeholdelse af database: Fejl");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1", "Optimer tabeller");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2", "Check tabeller");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3", "Reparation tabeller");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4", "Analyser tabeller");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"ANALYZE TABLE analyserer og gemmer data om tabellen. Mens analysen foregår låses tabellen for læsning.<br />
CHECK TABLE kontrollerer tabeller for fejl.<br />
OPTIMIZE TABLE Rydder op og genbruger ubrugt plads i datafilen.<br />
REPAIR TABLE reperere eventuelle korrupte fejl.");

define("_AM_SYSTEM_MAINTENANCE_RESULT", "Resultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT", "Ikke noget resultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE", "Tøm cache opgave");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION", "Tøm sessioner tabel opgave");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY", "Database opgave");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE", "Ikke noget valg til vedligeholdelse");

define("_AM_SYSTEM_MAINTENANCE_TABLES1", "Tabeller");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE", "Optimer");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK", "Tjek"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR", "Reparation");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE", "Analyser");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP", "Dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES", "Vælg tabeller eller moduler");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP", "Tilføj kommando DROP TABLE IF EXISTS");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "ELLER");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "OG");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Du skal vælge tabeller eller moduler");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Ingen tabeller");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Tabeller");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Strukturer");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Antal poster");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "Fil skabt");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "Resultat");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "poster");

// Tips
define( '_AM_SYSTEM_MAINTENANCE_TIPS', 
'<ul>
<li>Du kan foretage simple vedligeholdelse af din XOOPS installation: tømme din cache og sessionstabel, og foretabe vedligeholdelse af databasen.</li>
</ul>' );

?>
<?php // Translation done by xtransam & anderssk - 2010-10-19 07:12 ?>
