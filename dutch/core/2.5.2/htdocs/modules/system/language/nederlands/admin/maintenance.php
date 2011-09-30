<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Onderhoud");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Onderhoudslijst");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Dump");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Sessietabel legen");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Sessie onderhoud : OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Sessie onderhoud : FOUT");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Cache folder legen");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Cache onderhoud : OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Cache ondehoud : FOUT");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Tabellen onderhoud");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Tabellen onderhoud : OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Tabllen onderhoud : FOUT");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Tabellen optimaliseren, controleren, repareren en analyseren.");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Database onderhoud : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Database onderhoud : FOUT");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Tabellen optimalizeren");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Tabellen controleren");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Tabellen repareren");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Tabellen analyseren");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC",
"ANALYZE TABLE Analyseert de sleutel distributie van een tabel en slaat deze op. Tijdens de analyse is de tabel versleuteld met een leessleutel.<br />
CHECK TABLE controleert een tabel of tabellen op fouten.<br />
OPTIMIZE TABLE Defragmenteert de tabellen waarmee ongebruikte ruimte wordt geoptimaliseerd.<br />
REPAIR TABLE repareert een mogelijk corrupte tabel.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Resultaat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Geen resultaat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Cache taak legen");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Sessietabel taak legen");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Database taak");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Geen keuze voor onderhoud");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tabellen");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Optimalizeren");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Controleren"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Repareren");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analyseren");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Tabellen of modules selecteren");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Voeg commando DROP TABLE IF EXISTS 'tables' toe aan de dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "OF");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "EN");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Tabellen of modules moeten geselecteerd worden.");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Geen tabellen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Tabellen");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Structuren");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Aantal records");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "Bestand aangemaakt");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "Resultaat");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "record(s)");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>U kunt eenvoudig onderhoud uitvoeren van uw XOOPS installatie: uw cachegeheugen en sessie tabel legen, en doe het onderhoud van uw tabellen.</li>
</ul>");

?>
