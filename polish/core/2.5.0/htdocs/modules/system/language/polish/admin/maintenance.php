<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    pl
 * _CHARSET     UTF-8
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Konserwacja systemu");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Konserwacja");
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
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Stan bazy danych : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Stan bazy danych : Błąd");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Optymalizuj");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Sprawdź");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Napraw");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analizuj");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"Analizuj [ANALYZE TABLE] - Analizuje i zbiera statystyki dla tabeli, które służą silnikowi bazy danych do optymalizacji pracy. W czasie analizy tabela zostaje zablokowana.<br />
Sprawdź [CHECK TABLE] - Sprawdza poprawność tabeli i uaktualnia jej kluczowe statystyki.<br />
Optymalizuj [OPTIMIZE TABLE] - Zwalnia nieużywaną przestrzeń i defragmentuje pliki danych.<br />
Napraw [REPAIR TABLE] - Naprawia uszkodzoną tabelę.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Wynik");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Brak wyniku");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Zadanie: Czyszczenie plików z Cache");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Zadanie: Czyszczenie zapisanych sesji");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Zadanie: Operacje na tabelach");
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
<li>Tutaj możesz w prosty sposób wykonać podstawowe czynności konserwacji zainstalowanego systemu Xoops: czyszczenie plików tymczasowych Cache, czyszczenie tabeli z zapisem sesji, podstawowe operacje serwisowe na tabelach MySQL</li>
</ul>");

?>
