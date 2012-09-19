<?php /* Na bazie tłumaczenia dla wersji 3 webfm poprawił dap997 2005-01-04 */
define("_DB_BACKUP_NAME"            ,"XOOPS DB backup & restore");
define("_DB_BACKUP_DESC"            ,"Archiwizuje i przywraca bazę danych twojej strony na Xoopsa");

define("_DB_TARGET"                 ,"Miejsce docelowe");
define("_DB_ZIPTYPE"                ,"Zapisz jako plik");
define("_DB_EXECTIMELIMIT"          ,"Maksymalny czas wykonania skryptu (0 jeśli bez limitu)");
define("_DB_ALLOWBACKQUOTES"        ,"Nazwy tabel i pól wpisz oddzielając apostrofem '`'");
define("_DB_ALLOWDROP"              ,"Dodaj 'drop table'");

define("_DB_EMAILTO"                ,"Adres(y) e-mail gdzie system ma wysłać plik z archiwum.");
define("_DB_EMAILTO_DESC"           ,"Oddzielone ','");
define("_DB_EMAILATTACH"            ,"Wyślij plik sql jako załącznik e-mail");
define("_DB_EMAILATTACH_DESC"       ,"Ograniczone przez rozmiar pliku");
define("_DB_DBFILES"                ,"Ilość sesji archiwizujących zapisywanych na serwerze");
define("_DB_DBFILES_DESC"           ,"Stare pliki będą usuwane");
define("_DB_DBFILES_PATH"           ,"Ścieżka do katalogu z archiwami.");
define("_DB_DBFILES_PATH_DESC"      ,"Musi być <strong>zapisywalny</strong>");
define("_DB_DBFILES_SPLIT"          ,"Podziel plik");
define("_DB_DBFILES_SPLIT_DESC"     ,"jeden plik dla każdej tabeli; rekomendowany dla dużej ilości danych");
define("_DB_POSLINE"                ,"Używaj numeru linii jako wskaźnika położenia w pliku ");
define("_DB_POSLINE_DESC"           ,"Wskaźnik ftell może spowodować błędy w niektórych systemach; użycie numeru linii jest mniej efektywne ale nie powoduje przekłamań");
define("_RESTORE_NONADMIN"          ,"Przywróć bazę jako nie administrator");
define("_RESTORE_NONADMIN_DESC"     ,"Ta opcja jest potrzebna dla danych użytkownika, i modułów z włączoną archiwizacją; po dokonaniu odtworzenia wyłącz tę opcje i aktualizuj bufor tak szybko jak to tylko możliwe!");
?>
