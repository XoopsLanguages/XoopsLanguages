<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: epl
// _CHARSET : UTF-8
// Translator: tstempko

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Administracja modułami");
define("_MD_AM_MODULE","Moduł");
define("_MD_AM_VERSION","Wersja");
define("_MD_AM_LASTUP","Ostatnia aktualizacja");
define("_MD_AM_DEACTIVATED","Wyłączony");
define("_MD_AM_ACTION","Akcja");
define("_MD_AM_DEACTIVATE","Wyłącz");
define("_MD_AM_ACTIVATE","Włącz");
define("_MD_AM_UPDATE","Aktualizuj");
define("_MD_AM_DUPEN","Zdublowany wpis w tabeli modułów!");
define("_MD_AM_DEACTED","Wybrany moduł został wyłączony. Możesz go teraz bezpiecznie odinstalować.");
define("_MD_AM_ACTED","Wybrany moduł został włączony!");
define("_MD_AM_UPDTED","Wybrany moduł został zaktualizowany!");
define("_MD_AM_SYSNO","Modułu systemowego nie można wyłączyć.");
define("_MD_AM_STRTNO","Ten moduł jest ustawiony jako domyślna strona startowa. Proszę najpierw zmienić moduł startowy w preferencjach twojej strony.");

// added in RC2
define("_MD_AM_PCMFM","Potwierdź:");

// added in RC3
define("_MD_AM_ORDER","Kolejność");
define("_MD_AM_ORDER0","(0 = ukryj)");
define("_MD_AM_ACTIVE","Włączony");
define("_MD_AM_INACTIVE","Wyłączony");
define("_MD_AM_NOTINSTALLED","Niezainstalowany");
define("_MD_AM_NOCHANGE","Niezmieniony");
define("_MD_AM_INSTALL","Instaluj");
define("_MD_AM_UNINSTALL","Odinstaluj");
define("_MD_AM_SUBMIT","Potwierdź");
define("_MD_AM_CANCEL","Anuluj");
define("_MD_AM_DBUPDATE","Baza danych została uaktualniona!");
define("_MD_AM_BTOMADMIN","Wróć do administracji modułami");

// %s represents module name
define("_MD_AM_FAILINS","Nie można zainstalować %s.");
define("_MD_AM_FAILACT","Nie można włączyć %s.");
define("_MD_AM_FAILDEACT","Nie można wyłączyć %s.");
define("_MD_AM_FAILUPD","Nie można zaktualizować %s.");
define("_MD_AM_FAILUNINS","Nie można odinstalować %s.");
define("_MD_AM_FAILORDER","Nie można posortować %s.");
define("_MD_AM_FAILWRITE","Nie można zapisać do głównego menu.");
define("_MD_AM_ALEXISTS","Moduł %s juz jest zainstalowany.");
define("_MD_AM_ERRORSC","Błąd:");
define("_MD_AM_OKINS","Moduł %s został zainstalowany.");
define("_MD_AM_OKACT","Moduł %s został włączony.");
define("_MD_AM_OKDEACT","Moduł %s został wyłączony.");
define("_MD_AM_OKUPD","Moduł %s został zaktualizowany.");
define("_MD_AM_OKUNINS","Moduł %s odinstalowany.");
define("_MD_AM_OKORDER","Moduł %s zmieniony.");

define("_MD_AM_RUSUREINS","Kliknij na poniższy przycisk aby zaisntalować moduł");
define("_MD_AM_RUSUREUPD","Kliknij na poniższy przycisk aby zaktualizować moduł");
define("_MD_AM_RUSUREUNINS","Czy na pewno odinstalować ten moduł?");
define("_MD_AM_LISTUPBLKS","Następujące bloki zostaną zaktualizowane.<br /> Wybierz bloki, których zawartość (szablony i opcje) może zostać nadpisana.<br />");
define("_MD_AM_NEWBLKS","Nowe bloki");
define("_MD_AM_DEPREBLKS","Stare bloki");

// added in 2.3 - julionc
define("_MD_AM_INSTALLING","Instaluje ");
define("_MD_AM_TABLE_RESERVED","%s jest zarezerwowaną tabelą!");
define("_MD_AM_CREATE_TABLES","Tworzę tabele...");
define("_MD_AM_TABLE_CREATED","Tabela %s została utworzona");
define("_MD_AM_INSERT_DATA","Dodano dane do tabeli %s");
define("_MD_AM_INSERT_DATA_FAILD","Nie można dodać tabeli %s do bazy danych.");
define("_MD_AM_INSERT_DATA_DONE","Dodano dane modułu.");
define("_MD_AM_MODULEID","ID Modułu: %s");
define("_MD_AM_SQL_FOUND","Znaleziono plik SQL w %s ");
define("_MD_AM_SQL_NOT_FOUND","Nie znaleziono pliku SQL w %s");
define("_MD_AM_SQL_NOT_CREATE","BŁĄD: Nie można utworzyć %s ");
define("_MD_AM_SQL_NOT_VALID","%s nie jest prawidłowym plikiem SQL!");

define("_MD_AM_GROUP_ID","ID grupy: %s ");
define("_MD_AM_NAME","Nazwa: ");
define("_MD_AM_VALUE","Wartość: ");

/* Templates */
define("_MD_AM_TEMPLATES_ADD","Dodaję szablony...");
define("_MD_AM_TEMPLATES_DELETE","Usuwam szablony...");
define("_MD_AM_TEMPLATES_UPDATE","Aktualizuję szablony...");

define("_MD_AM_TEMPLATE_ID","ID szablonu: %s ");

define("_MD_AM_TEMPLATE_ADD_DATA","Szablon %s został dodany do bazy danych.");
define("_MD_AM_TEMPLATE_ADD_ERROR","BŁĄD: nie można dodać szablonu %s do bazy danych.");
define("_MD_AM_TEMPLATE_COMPILED","Szablon %s został skomplilowany");
define("_MD_AM_TEMPLATE_COMPILED_FAILED","BŁĄD: nie można skompilować szablonu %s ");
define("_MD_AM_TEMPLATE_DELETE_DATA","Szablon %s został usunięty z bazy danych.");
define("_MD_AM_TEMPLATE_DELETE_DATA_FAILD","BŁĄD: nie można usunąć szablonu %s. ");
define("_MD_AM_TEMPLATE_INSERT_DATA","Szablon %s został dodany. ");
define("_MD_AM_TEMPLATE_RECOMPILE","Zrekompilowano szablon %s");
define("_MD_AM_TEMPLATE_RECOMPILE_FAILD","BŁĄD: nie zrekompilowano szablonu %s");
define("_MD_AM_TEMPLATE_RECOMPILE_ERROR","BŁĄD: nie można zrekompilować szablonu %s ");
define("_MD_AM_TEMPLATE_DELETE_OLD_ERROR","BŁĄD: Nie można skasować starego szablonu %s. Przerwano aktualizację pliku.");
define("_MD_AM_TEMPLATE_UPDATE","Zaktualizowano szablon %s. ");
define("_MD_AM_TEMPLATE_UPDATE_ERROR","BŁĄD: nie można zaktualizować szablonu %s. ");

/* Blocks */
define("_MD_AM_BLOCKS_ADD","Dodawanie bloku...");
define("_MD_AM_BLOCKS_DELETE","Usuwanie bloku...");
define("_MD_AM_BLOCKS_REBUILD","Przebudowa bloku...");

define("_MD_AM_BLOCK_ID","ID bloku: %s ");

define("_MD_AM_BLOCK_ACCESS","Dodano prawa dostępu dla bloku");
define("_MD_AM_BLOCK_ACCESS_ERROR","BŁĄD: Nie można dodać praw dostępu do bloku");
define("_MD_AM_BLOCK_ADD","Dodano blok %s ");
define("_MD_AM_BLOCK_ADD_ERROR","BŁĄD: Nie można dodać bloku %s! ");
define("_MD_AM_BLOCK_ADD_ERROR_DATABASE","Błąd bazy danych: %s ");
define("_MD_AM_BLOCK_CREATED","Utworzono blok %s ");
define("_MD_AM_BLOCK_DELETE","Usunięto blok %s. ");
define("_MD_AM_BLOCK_DELETE_DATA","Szablon bloku %s został usunięty. ");
define("_MD_AM_BLOCK_DELETE_ERROR","BŁĄD: nie można usunąć bloku %s");
define("_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR","BŁĄD: nie można usunąć szablonu bloku %s");
define("_MD_AM_BLOCK_DEPRECATED","Szablon bloku %s odrzucony");
define("_MD_AM_BLOCK_DEPRECATED_ERROR","BŁĄD: Nie można usunąć szablonu bloku odrzuconego.");
define("_MD_AM_BLOCK_UPDATE","Uaktualniono blok %s. ");

/* Configs */
define("_MD_AM_GONFIG_ID","ID konfiguracji: %s");
define("_MD_AM_MODULE_DATA_ADD","Dodaję dane konfiguracji modułu...");
define("_MD_AM_MODULE_DATA_DELETE","Kasuję opcje konfiguracyjne modułu...");
define("_MD_AM_MODULE_DATA_UPDATE","Zaktualizowano moduł.");

define("_MD_AM_CONFIG_ADD","Dodano opcję konfiguracji");
define("_MD_AM_CONFIG_DATA_ADD","Dodano konfigurację %s");
define("_MD_AM_CONFIG_DATA_ADD_ERROR","BŁĄD: Nie można dodać konfiguracji %s. ");
define("_MD_AM_GONFIG_DATA_DELETE","Usunięto dane konfiguracji. ");
define("_MD_AM_CONFIG_DATA_DELETE_ERROR","BŁĄD: Nie można usunąć danych konfiguracji");

/* Access */
define("_MD_AM_GROUP_SETTINGS_ADD","Ustawienia grup dostępu...");

define("_MD_AM_GROUP_PERMS_DELETE_ERROR","BŁĄD: Nie można usunąć praw dostępu dla grup");
define("_MD_AM_GROUP_PERMS_DELETED","Usunięto prawa dostępu dla grup");

define("_MD_AM_ACCESS_ADMIN_ADD","Dodano prawo administracji dla grupy o ID: %s");
define("_MD_AM_ACCESS_ADMIN_ADD_ERROR","BŁĄD: Nie mona dodać prawa administracji dla grupy o ID: %s");
define("_MD_AM_ACCESS_USER_ADD_ERROR","Dodano prawa użytkownika dla grupy o ID: %s");
define("_MD_AM_ACCESS_USER_ADD_ERROR_ERROR","BŁĄD: Nie można dodać prawa użytkownika dla grupy o ID: %s");

// execute module specific install script if any
define("_MD_AM_FAILED_EXECUTE","Nie można wykonać %s");
define("_MD_AM_FAILED_SUCESS","%s wykonany pomyślnie.");

define("_MD_AM_DELETE_ERROR","BŁĄD: Nie można usunąć %s");
define("_MD_AM_UPDATE_ERROR","BŁĄD: Nie można aktualizować %s");
define("_MD_AM_DELETE_MOD_TABLES","Kasuję tabele dla modułu...");

define("_MD_AM_COMMENTS_DELETE","Kasuję komentarze...");
define("_MD_AM_COMMENTS_DELETE_ERROR","BŁĄD: Nie można usunąć komentarzy");
define("_MD_AM_COMMENTS_DELETED","Komentarze usunięto");

define("_MD_AM_NOTIFICATIONS_DELETE","Kasuję powiadomienia...");
define("_MD_AM_NOTIFICATIONS_DELETE_ERROR","BŁĄD: Nie można usunąć powiadomień");
define("_MD_AM_NOTIFICATIONS_DELETED","Powiadomienia usunięte");

define("_MD_AM_TABLE_DROPPED","Usunięto tabelę %s!");
define("_MD_AM_TABLE_DROPPED_ERROR","BŁĄD: Nie można usunąć tabeli %s");
define("_MD_AM_TABLE_DROPPED_FAILDED","BŁĄD: Nie masz praw do usunięcia tabeli %s !");

?>
