<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Konserwacja systemu");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","All maintenance");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Zapis tabel");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Wyczyść tabelę z danymi o sesjach (unikatowe identyfikatory połączeń)");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Czyszczenie zapisanych sesji: OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Czyszczenie zapisanych sesji : Błąd");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Czyszczenie folderów Cache z plikami tymczasowymi");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Wyczyszczone");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Błąd : nie udało się przeprowadzić pełnego czyszczenia");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Konserwacja tabel bazy danych");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Wykonano porządkowanie tabel");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Błąd :  nie udało się przeprowadzić porządkowania tabel");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Optymalizacja, Kontrola, Naprawa i  Analiza tabel bazy danych systemu");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Maintain database : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Maintain database : Error");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Optymalizuj");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Sprawdź");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Napraw");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analizuj");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"ANALYZE TABLE analyzes and stores the key distribution for a table. During the analysis, the table is locked with a read lock.<br />
CHECK TABLE checks a table or tables for errors.<br />
OPTIMIZE TABLE to reclaim the unused space and to defragment the data file.<br />
REPAIR TABLE repairs a possibly corrupted table.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Wynik");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Brak wyniku");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Zadanie: Czyszczenie plików z Cache");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Clean sessions table task");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Database task");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Nie wybrano żadnego polecenia konserwacji");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tabele");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Optymalizacja");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Kontrola"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Naprawa");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analiza");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Zapis do pliku sql tabel bazy danych systemu wraz z danymi");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Wybierz tabele lub moduły");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Dodaj polecenie DROP TABLE IF EXISTS /zastąp istniejące tabele/  ");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "lub");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "i");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Musisz zaznaczyć tabele lub moduły");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Brak tabel");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Tabele");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Struktura tabeli");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Ilość rekordów (wpisów w tabeli)");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "Plik do importu");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "Dostępny");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "rekord(ów)");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>Tutaj możesz w prosty sposób wykonać podstawowe czynności konserwacji zainstalowanego systemu Xoops: czyszczenie plików tymczasowych Cache, czyszczenie tabeli z zapisem sesji, podstawowe operacje serwisowe na tabelach mySql</li>
</ul>");

?>
