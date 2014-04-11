<?php
/**
* Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Modules system
* @subpackage      form Language
* @version         $Id: 2.5.0.a maintenance.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER",  "Wartung");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST",     "Alles Warten");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP",     "Dump");

define("_AM_SYSTEM_MAINTENANCE_SESSION",      "Leeren der Sessions");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK",   "Session Wartung : OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Session Wartung : Fehler");
define("_AM_SYSTEM_MAINTENANCE_CACHE",        "Leeren des Caches");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK",     "Cache Wartung : OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK",  "Cache Wartung : Fehler");
define("_AM_SYSTEM_MAINTENANCE_TABLES",       "Tabellen Wartung");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK",    "Tabellen Wartung : OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK", "Tabellen Wartung : Fehler");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC",   "Optimieren, prüfen, reparieren und Analysieren von Tabellen");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK",     "Datenbankabfrage : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK",  "Datenbankabfrage : Fehler");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1",      "Tabelle(n) optimieren");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2",      "Tabelle(n) prüfen");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3",      "Tabelle(n) reparieren");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4",      "Tabelle(n) analysieren");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC",
"TABELLEN ANALYSE analysiert und sichert den \"key distribution\" für eine Tabelle. Während der Analyse wird die Tabelle mit einem \"Key\" gesichert.<br />
TABELLE(N) PRÜFEN prüft eine- oder mehrere Tabellen auf Fehler.<br />
TABELLE(N) OPTIMIEREN löscht ungültige Leerzeichen in Tabellen und defragmentiert diese.<br />
TABELLE(N) REPARIEREN repariert mögliche Fehler in Tabellen.");

define("_AM_SYSTEM_MAINTENANCE_RESULT",           "Ergebnis");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT", "kein Ergebnis");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE",     "Cache Task");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION",   "Sessions Task");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY",     "Datenbank task");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Keine Wartung ausgewählt");

define("_AM_SYSTEM_MAINTENANCE_TABLES1",               "Tabellen");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE",       "Optimieren");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK",          "Prüfen");
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR",         "Reparieren");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE",        "Analysieren");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP",                  "Dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Tabellen oder Module wählen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP",             "Wählen Sie \"DROP TABLE IF EXISTS\" 'Tabellen' in der Ausgabe");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR",               "ODER");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND",              "UND");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Sie müssen Tabellen oder Module wählen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES",        "Keine Tabellen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES",           "Tabellen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES",       "Strukturen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS",       "Anzahl von Aufnahmen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED",     "Datei erstellt");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT",           "Ergebnis");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS",          "Aufnahme(n)");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS",
"<ul>
<li>Sie können eine einfache Wartung Ihrer XOOPS Installation vornehmen: Leeren von Cache- und Session-Tabellen, und warten Sie die beinhalteten Tabellen.</li>
</ul>");

?>