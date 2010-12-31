<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 5580 2010-10-21 19:38:48Z forxoops $
 */

// Navigation
define("_AM_SYSTEM_MODULES_ADMIN", "Zarządzanie modułami");
define("_AM_SYSTEM_MODULES_LIST", "Lista modułów");
define("_AM_SYSTEM_MODULES_TOINSTALL", "Moduły do zainstalowania");
define("_AM_SYSTEM_MODULES_VALIDATE","Kontrola zmian");
define("_AM_SYSTEM_MODULES_SUBMITRES","Dokonane zmiany");

// Messages
define("_AM_SYSTEM_MODULES_RUSUREINS","Zaintalować moduł?");
define("_AM_SYSTEM_MODULES_RUSUREUNINS","Chcesz odinstalować ten moduł?");
define("_AM_SYSTEM_MODULES_RUSUREUPD","Aktualizować moduł?");
define("_AM_SYSTEM_MODULES_BTOMADMIN","Powrót do administracji modułami");
define("_AM_SYSTEM_MODULES_INSTALLING","Installing ");
define("_AM_SYSTEM_MODULES_UNINSTAL","Uninstall ");
define("_AM_SYSTEM_MODULES_DEACTIVATE","Wyłącz ");
define("_AM_SYSTEM_MODULES_ACTIVATE","Włącz ");
define("_AM_SYSTEM_MODULES_UPDATING","Aktualizacja ");

// Main
define("_AM_SYSTEM_MODULES_INSTALL","Instaluj");
define("_AM_SYSTEM_MODULES_UNINSTALL","Odinstaluj");
define("_AM_SYSTEM_MODULES_UPDATE","Aktualizuj");
define("_AM_SYSTEM_MODULES_VIEWLARGE","Lista z ikonami");
define("_AM_SYSTEM_MODULES_VIEWLINE","Lista");

// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS", "Nie można zainstalować %s.");
define("_AM_SYSTEM_MODULES_FAILACT", "Nie można włączyć %s.");
define("_AM_SYSTEM_MODULES_FAILDEACT", "Nie można wyłączyć %s.");
define("_AM_SYSTEM_MODULES_FAILUPD", "Nie można zaktualizować %s.");
define("_AM_SYSTEM_MODULES_FAILUNINS", "Nie można odinstalować %s.");
define("_AM_SYSTEM_MODULES_FAILORDER", "Nie można posortować %s.");
define("_AM_SYSTEM_MODULES_FAILWRITE", "Nie można zapisać do głównego menu.");
define("_AM_SYSTEM_MODULES_ALEXISTS", "Moduł %s juz jest zainstalowany.");
define("_AM_SYSTEM_MODULES_ERRORSC", "Błąd:");
define("_AM_SYSTEM_MODULES_OKINS", "Moduł %s został zainstalowany.");
define("_AM_SYSTEM_MODULES_OKACT", "Moduł %s został włączony.");
define("_AM_SYSTEM_MODULES_OKDEACT", "Moduł %s został wyłączony.");
define("_AM_SYSTEM_MODULES_OKUPD", "Moduł %s został zaktualizowany.");
define("_AM_SYSTEM_MODULES_OKUNINS", "Moduł %s odinstalowany.");
define("_AM_SYSTEM_MODULES_OKORDER", "Moduł %s zmieniony.");

define("_AM_SYSTEM_MODULES_MODULE", "Moduł");
define("_AM_SYSTEM_MODULES_VERSION", "Wersja");
define("_AM_SYSTEM_MODULES_LASTUP", "Ostatnia aktualizacja");
define("_AM_SYSTEM_MODULES_DEACTIVATED", "Wyłączony");
define("_AM_SYSTEM_MODULES_ACTION", "Akcja");
define("_AM_SYSTEM_MODULES_MENU","Menu");
define("_AM_SYSTEM_MODULES_HIDE","Ukryj");
define("_AM_SYSTEM_MODULES_SHOW","Pokaż");

define("_AM_SYSTEM_MODULES_DUPEN", "Zdublowany wpis w tabeli modułów!");
define("_AM_SYSTEM_MODULES_DEACTED", "Wybrany moduł został wyłączony. Możesz go teraz bezpiecznie odinstalować.");
define("_AM_SYSTEM_MODULES_ACTED", "Wybrany moduł został włączony!");
define("_AM_SYSTEM_MODULES_UPDTED", "Wybrany moduł został zaktualizowany!");
define("_AM_SYSTEM_MODULES_SYSNO", "Modułu systemowego nie można wyłączyć.");
define("_AM_SYSTEM_MODULES_STRTNO", "Ten moduł jest ustawiony jako domyślna strona startowa. Proszę najpierw zmienić moduł startowy w preferencjach twojej strony.");

define("_AM_SYSTEM_MODULES_ORDER", "Kolejność");
define("_AM_SYSTEM_MODULES_ORDER0", "(0 = ukryj)");
define("_AM_SYSTEM_MODULES_ACTIVE", "Włączony");
define("_AM_SYSTEM_MODULES_INACTIVE", "Wyłączony");
define("_AM_SYSTEM_MODULES_NOTINSTALLED", "Niezainstalowany");
define("_AM_SYSTEM_MODULES_NOCHANGE", "Niezmieniony");
define("_AM_SYSTEM_MODULES_SUBMIT", "Potwierdź");
define("_AM_SYSTEM_MODULES_CANCEL", "Anuluj");
define("_AM_SYSTEM_MODULES_DBUPDATE",_AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_MODULES_LISTUPBLKS", "Następujące bloki zostaną zaktualizowane.<br /> Wybierz bloki, których zawartość (szablony i opcje) może zostać nadpisana.<br />");
define("_AM_SYSTEM_MODULES_NEWBLKS", "Nowe bloki");
define("_AM_SYSTEM_MODULES_DEPREBLKS", "Stare bloki");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED", "%s jest zarezerwowaną tabelą!");
define("_AM_SYSTEM_MODULES_CREATE_TABLES", "Tworzę tabele...");
define("_AM_SYSTEM_MODULES_TABLE_CREATED", "Tabela %s została utworzona");
define("_AM_SYSTEM_MODULES_INSERT_DATA", "Dodano dane do tabeli %s");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD", "Nie można dodać tabeli %s do bazy danych.");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE", "Dodano dane modułu.");
define("_AM_SYSTEM_MODULES_MODULEID", "ID Modułu: %s");
define("_AM_SYSTEM_MODULES_SQL_FOUND", "Znaleziono plik SQL w %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND", "Nie znaleziono pliku SQL w %s");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE", "BŁĄD: Nie można utworzyć %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID", "%s nie jest prawidłowym plikiem SQL!");
define("_AM_SYSTEM_MODULES_GROUP_ID", "ID grupy: %s ");
define("_AM_SYSTEM_MODULES_NAME", "Nazwa: ");
define("_AM_SYSTEM_MODULES_VALUE", "Wartość: ");

/* Templates */
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD", "Dodaję szablony...");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE", "Usuwam szablony...");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE", "Aktualizuję szablony...");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID", "ID szablonu: %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA", "Szablon %s został dodany do bazy danych.");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR", "BŁĄD: nie można dodać szablonu %s do bazy danych.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED", "Szablon %s został skomplilowany");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED", "BŁĄD: nie można skompilować szablonu %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA", "Szablon %s został usunięty z bazy danych.");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD", "BŁĄD: nie można usunąć szablonu %s. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA", "Szablon %s został dodany. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE", "Zrekompilowano szablon %s");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD", "BŁĄD: nie zrekompilowano szablonu %s");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR", "BŁĄD: nie można zrekompilować szablonu %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR", "BŁĄD: Nie można skasować starego szablonu %s. Przerwano aktualizację pliku.");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE", "Zaktualizowano szablon %s. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR", "BŁĄD: nie można zaktualizować szablonu %s. ");

/* Blocks */
define("_AM_SYSTEM_MODULES_BLOCKS_ADD", "Dodawanie bloku...");
define("_AM_SYSTEM_MODULES_BLOCKS_DELETE", "Usuwanie bloku...");
define("_AM_SYSTEM_MODULES_BLOCKS_REBUILD", "Przebudowa bloku...");
define("_AM_SYSTEM_MODULES_BLOCK_ID", "ID bloku: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS", "Dodano prawa dostępu dla bloku");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR", "BŁĄD: Nie można dodać praw dostępu do bloku");
define("_AM_SYSTEM_MODULES_BLOCK_ADD", "Dodano blok %s ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR", "BŁĄD: Nie można dodać bloku %s! ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE", "Błąd bazy danych: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_CREATED", "Utworzono blok %s ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE", "Usunięto blok %s. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA", "Szablon bloku %s został usunięty. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR", "BŁĄD: nie można usunąć bloku %s");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR", "BŁĄD: nie można usunąć szablonu bloku %s");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED", "Szablon bloku %s odrzucony");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR", "BŁĄD: Nie można usunąć szablonu bloku odrzuconego.");
define("_AM_SYSTEM_MODULES_BLOCK_UPDATE", "Uaktualniono blok %s. ");

/* Configs */
define("_AM_SYSTEM_MODULES_GONFIG_ID", "ID konfiguracji: %s");
define("_AM_SYSTEM_MODULES_MODULE_DATA_ADD", "Dodaję dane konfiguracji modułu...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_DELETE", "Kasuję opcje konfiguracyjne modułu...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE", "Zaktualizowano moduł.");
define("_AM_SYSTEM_MODULES_CONFIG_ADD", "Dodano opcję konfiguracji");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD", "Dodano konfigurację %s");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR", "BŁĄD: Nie można dodać konfiguracji %s. ");
define("_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE", "Usunięto dane konfiguracji. ");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR", "BŁĄD: Nie można usunąć danych konfiguracji");

/* Access */
define("_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD", "Ustawienia grup dostępu...");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR", "BŁĄD: Nie można usunąć praw dostępu dla grup");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED", "Usunięto prawa dostępu dla grup");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD", "Dodano prawo administracji dla grupy o ID: %s");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR", "BŁĄD: Nie mona dodać prawa administracji dla grupy o ID: %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR", "Dodano prawa użytkownika dla grupy o ID: %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR", "BŁĄD: Nie można dodać prawa użytkownika dla grupy o ID: %s");

// execute module specific install script if any
define("_AM_SYSTEM_MODULES_FAILED_EXECUTE", "Nie można wykonać %s");
define("_AM_SYSTEM_MODULES_FAILED_SUCESS", "%s wykonany pomyślnie.");
define("_AM_SYSTEM_MODULES_DELETE_ERROR", "BŁĄD: Nie można usunąć %s");
define("_AM_SYSTEM_MODULES_UPDATE_ERROR", "BŁĄD: Nie można aktualizować %s");
define("_AM_SYSTEM_MODULES_DELETE_MOD_TABLES", "Kasuję tabele dla modułu...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE", "Kasuję komentarze...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR", "BŁĄD: Nie można usunąć komentarzy");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETED", "Komentarze usunięto");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE", "Kasuję powiadomienia...");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR", "BŁĄD: Nie można usunąć powiadomień");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED", "Powiadomienia usunięte");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED", "Usunięto tabelę %s!");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR", "BŁĄD: Nie można usunąć tabeli %s");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "BŁĄD: Nie masz praw do usunięcia tabeli %s !");

// Tips
define("_AM_SYSTEM_MODULES_TIPS", 
"<ul>
<li>Po instalacji modułu należy pamiętać o ustawieniu preferencji modułu, bloków i uprawnień dla użytkowników!</li>
<li>Aby ukryć moduł w bloku Menu Główne, ustawić kolejność na 0</li>
<li>Należy usuwać pliki niezainstalowanych i nieużywanych modułów z serwera aby zminimalizować prawdopobieństwo wystąpienia dziur i błędów, które moga zagrozić bezpieczeństwu.</li>
<li>Aby zmienić kolejność modułow (co ma odbicie w Menu Głównym), wystarczy przeniść metodą drag and drop moduł w odpowiednie miejsce.</li>
</ul>");
define("_AM_SYSTEM_MODULES_CONFIRM_TIPS",
"<ul>
<li>Sprawdź wszystkie zmiany i potwierdź, jeżeli są poprawne.</li>
</ul>");

?>
