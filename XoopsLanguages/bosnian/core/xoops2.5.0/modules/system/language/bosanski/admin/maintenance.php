<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ba
 * _CHARSET     UTF-8
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Održavanje");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Sva održavanja");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Dump");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Isprazni sessions tablu");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Session održavanje je : OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Session održavanje ima : Grešku");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Isprazni cache direktorij");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Cache održavanje je : OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Cache održavanje ima : Grešku");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Tabele održavanje");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Tabele održavanje je : OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Tabele održavanje ima : Grešku");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Optimiraj, Provjeri, Prepravi i Analiziraj Tabele");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Održavanje baze podataka je : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Održavanje baze podataka ima : Grešku");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Optimiraj tablu(e)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Provjeri tablu(e)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Prepravi tablu(e)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analiziraj tablu(e)");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"ANALIZA TABLI vrši analizu baze podataka i memoriše ključ raspodjele u tabelama. Prilikom čitanja se baza podataka bez izmjene samo čitanjem analizira.<br />
PROVJERA TABLI vrši se provjera table ili tabela dali imaju neku grešku.<br />
OPTIMIZACIJA TABLI neiskorišteni prostor poveæava i podatke u bazi podataka defagmatira.<br />
PREPRAVI TABLE prepravljaju se poremećene tabele u bazi podataka.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Rezultat");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Nema rezultata");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Izbriši Cache sadržaj");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Izbriši sessions table sadržaj");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Baze podataka sadržaj");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Ništa nije izabrano za održavanje");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tabele");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Optimiraj");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Provjeri"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Prepravi");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analiziraj");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Izaberi tabele ili module");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Dodaj komandu DROP TABLE IF EXISTS 'tables' u dump");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "ili");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "i");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Moraš izabrati module ili tabele");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Nema tabela");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Tabele");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Strukture");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Broj zapisa");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "Podatak je kreiran");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "Rezultat");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "zapis(a)");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>Ovdje možeš jednostavno održavati XOOPS Instalacije: izbrisati cache memoriju i u session tabli sadržaj, te održavati tabele u bazi podataka uopšte</li>
</ul>");

?>
