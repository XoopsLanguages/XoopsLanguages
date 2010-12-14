<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 3768 2009-10-23 08:37:41Z wishcraft $
 */

// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko@wp.pl

define( "SHOW_HIDE_HELP", "Pokaż/ukryj tekst pomocy" );

// License
define('LICENSE_NOT_WRITEABLE', 'Licencja jest %s . <br/><font style="colour:#ff0000">Ustaw prawo do zapisu dla pliku ../include/license.php </font>');
define('LICENSE_IS_WRITEABLE', 'Licencja jest %s');

// Configuration check page
define( "SERVER_API", "Serwer API" );
define( "PHP_EXTENSION", "%s rozszerzenie" );
define( "CHAR_ENCODING", "Dekodowanie znaków" );
define( "XML_PARSING", "XML parsowanie" );
define( "REQUIREMENTS", "Wymagania" );
define( "_PHP_VERSION", "Wersja PHP" );
define( "RECOMMENDED_SETTINGS", "Rekomendowane ustawienia" );
define( "RECOMMENDED_EXTENSIONS", "Rekomendowane rozszerzenia" );
define( "SETTING_NAME", "Nazwa konfiguracji" );
define( "RECOMMENDED", "Rekomendowane" );
define( "CURRENT", "Aktualny" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Te rozszerzenia nie są wymagane do typowego działania, 
         ale mogą być niezbędne w przypadku specyficznych rozwiązań (jak wsparcie dla multi-language lub RSS). 
         Dlatego zalecamy ich instalację." );
define( "NONE", "Żaden" );
define( "SUCCESS", "Pozytywnie" );
define( "WARNING", "Ostrzeżenie" );
define( "FAILED", "Błędnie" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "Kreator instalacji XOOPS" );

define( "LANGUAGE_SELECTION", "Wybór języka" );
define( "LANGUAGE_SELECTION_TITLE", "Wybierz swój język");        // L128
define( "INTRODUCTION", "Wprowadzenie" );
define( "INTRODUCTION_TITLE", "Witamy w kreatorze instalacji CMS XOOPS" );        // L0
define( "CONFIGURATION_CHECK", "Wybór konfiguracji" );
define( "CONFIGURATION_CHECK_TITLE", "Wybierz swoją konfigurację serwera" );
define( "PATHS_SETTINGS", "Ustawienia ścieżki" );
define( "PATHS_SETTINGS_TITLE", "Ustawienia ścieżki" );
define( "DATABASE_CONNECTION", "Połączenie do bazy danych SQL" );
define( "DATABASE_CONNECTION_TITLE", "Połączenie do bazy danych SQL" );
define( "DATABASE_CONFIG", "Konfiguracja bazy danych SQL" );
define( "DATABASE_CONFIG_TITLE", "Konfiguracja bazy danych SQL" );
define( "CONFIG_SAVE", "Zapisanie konfiguracji" );
define( "CONFIG_SAVE_TITLE", "Zapisanie konfiguracji systemu" );
define( "TABLES_CREATION", "Tworzenie tablic" );
define( "TABLES_CREATION_TITLE", "Tworzenie tablic w bazie SQL" );
define( "INITIAL_SETTINGS", "Ustawienia początkowe" );
define( "INITIAL_SETTINGS_TITLE", "Proszę wprowadzić ustawienia początkowe" );
define( "DATA_INSERTION", "Załadowanie danych" );
define( "DATA_INSERTION_TITLE", "Zapisz swoje ustawienia do bazy danych" );
define( "WELCOME", "Witaj" );
define( "WELCOME_TITLE", "Witaj w swoim serwisie CMS XOOPS" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "Fizyczna ścieżka XOOPS" );
define( "XOOPS_URLS", "Lokalizacja Web" );

define( "XOOPS_ROOT_PATH_LABEL", "Fizyczna ścieżka do głównego katalogu XOOPS" );
define( "XOOPS_ROOT_PATH_HELP", "Fizyczna ścieżka do głównego katalogu XOOPS (katalogu z plikiem mainfile.php) BEZ końcowego ukośnika (unix np. /home/www/htdoc lub windows np. c:\htdoc" );

define( "XOOPS_LIB_PATH_LABEL", "Katalog bibliotek XOOPS - XOOPS_lib" );
define( "XOOPS_LIB_PATH_HELP", "Fizyczna ścieżka do katalogu XOOPS_lib ale BEZ ukośnika końcowego, ze względu na przyszłą kompatybilność. Umieść folder poza " . XOOPS_ROOT_PATH_LABEL . " aby zapewnić mu bezpieczeństwo.");
define( "XOOPS_DATA_PATH_LABEL", "Katalog danych XOOPS - XOOPS_data" );
define( "XOOPS_DATA_PATH_HELP", "Fizyczna ścieżka do katalogu XOOPS_data ale BEZ ukośnika końcowego, ze względu na przyszłą kompatybilność. Umieść folder poza " . XOOPS_ROOT_PATH_LABEL . " aby zapewnić mu bezpieczeństwo.");

define( "XOOPS_URL_LABEL", "Adres witryny www (URL)" ); // L56
define( "XOOPS_URL_HELP", "Główny adres URL który będzie używany do dostępu do instalacji CMS XOOPS" ); // L58

define( "LEGEND_CONNECTION", "Połączenie z serwerem" );
define( "LEGEND_DATABASE", "Baza danych" ); // L51

define( "DB_HOST_LABEL", "Nazwa serwera (server hostname)" );    // L27
define( "DB_HOST_HELP",  "Nazwa serwera bazy danych. Jeśli nie jesteś pewien, typową nazwą jest <em>localhost</em>"); // L67
define( "DB_USER_LABEL", "Nazwa użytkownika" );    // L28
define( "DB_USER_HELP",  "Nazwa konta użytkownika, która będzie używana przy połączeniu z serwerem bazy danych"); // L65
define( "DB_PASS_LABEL", "Hasło" );    // L52
define( "DB_PASS_HELP",  "Hasło do konta użytowika, które będzie używane przy połączeniu z serwerem bazy danych"); // L68
define( "DB_NAME_LABEL", "Nazwa bazy danych" );    // L29
define( "DB_NAME_HELP",  "Nazwa bazy danych. Instalator utworzy bazę danych jeśli ona nie istnieje"); // L64
define( "DB_CHARSET_LABEL", "Kodowanie znaków w bazie danych" );
define( "DB_CHARSET_HELP",  "MySQL oferuje wsparcie dla stosowanych zestawów znaków co umożliwia składowanie danych o zróżnicowanym kodowaniu oraz przeprowadzanie porównań celem odnalezienia różnic.");
define( "DB_COLLATION_LABEL", "Metoda porównywania znaków w bazie danych (database collation)" );
define( "DB_COLLATION_HELP",  "Metoda porównywania znaków służy do sortowania i porównywania danych. Np. żeby 'ą' było po 'a' i przed 'b'a nie na końcu alfabetu.");
define( "DB_PREFIX_LABEL", "Przedrostek tablic" );    // L30
define( "DB_PREFIX_HELP",  "Przedrostek zostanie dodany do wszystkich nowotworzonych tablic aby uniknąć ew. konfliktów. Jeśli nie jesteś pewien, pozostaw proponowane"); // L63
define( "DB_PCONNECT_LABEL", "Użyj stałego połączenia" );    // L54
define( "DB_PCONNECT_HELP",  "Domyślnie jest 'Nie'. Pozostaw puste jeśli nie jesteś pewien"); // L69
define( "DB_DATABASE_LABEL", "Baza danych" );

define( "LEGEND_ADMIN_ACCOUNT", "Konto administratora" );
define( "ADMIN_LOGIN_LABEL", "Login Admina" ); // L37
define( "ADMIN_EMAIL_LABEL", "E-mail Admina" ); // L38
define( "ADMIN_PASS_LABEL", "Hasło Admina" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Potwierdź hasło" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Wstecz" ); // L42
define( "BUTTON_NEXT", "Dalej" ); // L47

// Messages
define( "XOOPS_FOUND", "%s znaleziono" );
define( "CHECKING_PERMISSIONS", "Sprawdzanie uprawnień do plików i katalogów..." ); // L82
define( "IS_NOT_WRITABLE", "%s NIE jest zapisywalny." ); // L83
define( "IS_WRITABLE", "%s jest zapisywalny." ); // L84

define( "XOOPS_PATH_FOUND", "Ścieżka znaleziona." );

define( "READY_CREATE_TABLES", "Nie odnaleziono tablic bazy XOOPS.<br />Instalator jest gotowy do stworzenia systemu tablic bazy danych XOOPS.<br />Naciśnij <em>Dalej</em> aby rozpocząć." );
define( "XOOPS_TABLES_FOUND", "System tablic XOOPS już istnieje w podanej bazie danych.<br />Naciśnij <em>Dalej</em> aby kontynuować." ); // L131
define( "XOOPS_TABLES_CREATED", "System tablic XOOPS został stworzony.<br />Naciśnij <em>Dalej</em> aby kontynuować." );
define( "READY_INSERT_DATA", "Instalator jest gotowy do wprowadzenia wstępnych danych do bazy danych XOOPS." );
define( "READY_SAVE_MAINFILE", "Instalator jest gotowy do zapisania ustawień do pliku <em>mainfile.php</em>.<br />Naciśnij <em>Dalej</em> aby rozpocząć." );
define( "SAVED_MAINFILE", "Zapisano ustawienia do pliku mainfile.php" );
define( "SAVED_MAINFILE_MSG", "Instalator zapisał ustawienia do pliku <em>mainfile.php</em>. Naciśnij <em>Dalej</em> aby kontynuować." );
define( "DATA_ALREADY_INSERTED", "Dane serwisu XOOPS znajdują się w bazie danych.<br />Naciśnij <em>Dalej</em> aby kontynuować." );
define( "DATA_INSERTED", "Wstępne dane zostały wprowadzone do bazy danych.<br />Naciśnij <em>Dalej</em> aby kontynuować." );


// %s is database name
define( "DATABASE_CREATED", "Baza danych %s utworzona!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Nie mogę utworzyć tablicy %s" ); // L118
define( "TABLE_CREATED", "Tablicę %s utworzono." ); // L45
define( "ROWS_INSERTED", "%d dane wprowadzone do tablicy %s." ); // L119
define( "ROWS_FAILED", "Błąd wprowadzania danych %d do tablicy %s." ); // L120
define( "TABLE_ALTERED", "Tablica %s zaktualizowana."); // L133
define( "TABLE_NOT_ALTERED", "Błąd aktualizacji tablicy %s."); // L134
define( "TABLE_DROPPED", "Tablica %s została usunięta."); // L163
define( "TABLE_NOT_DROPPED", "Błąd usuwania tablicy %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "Brak dostępu do podanego folderu. Proszę sprawdzić czy on istnieje i/lub czy jest dostępny." );
define( "ERR_NO_XOOPS_FOUND", "Żadna instalacja XOOPS nie została znaleziona w podanym folderze." );
define( "ERR_INVALID_EMAIL", "Błędny e-mail" ); // L73
define( "ERR_REQUIRED", "Te informacje są wymagane." ); // L41
define( "ERR_PASSWORD_MATCH", "Niezgodność haseł - wprowadzone hasło i jego potwierdzenie są różne" );
define( "ERR_NEED_WRITE_ACCESS", "Serwer musi mieć prawa do zapisu plików i folderów <br />
        (i.e. <em>chmod 777 nazwa_katalogu</em> na serwerze UNIX/LINUX)<br />Jeśli nie są dostępne lub 
        poprawnie utworzone, proszę utworzyć je ręcznie i udzielić stosownych uprawnień." );
define( "ERR_NO_DATABASE", "Nie można utworzyć bazy danych. Skontaktuj się z administratorem serwera w tej sprawie." ); // L31
define( "ERR_NO_DBCONNECTION", "Nie można połączyć się z serwerem bazy danych." ); // L106
define( "ERR_WRITING_CONSTANT", "Błąd zapisu %s." ); // L122

define( "ERR_COPY_MAINFILE", "Nie można skopiować danych do pliku mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Plik mainfile.php nie jest dostępny do zapisu. Proszę sprawdzić uprawnienia i spróbować ponownie.");
define( "ERR_READ_MAINFILE", "Plik mainfile.php nie jest dostępny do odczytu" );

define( "ERR_INVALID_DBCHARSET", "Kodowanie '%s' nie jest dostępne." );
define( "ERR_INVALID_DBCOLLATION", "Metoda porównywania '%s' nie jest dostępna." );
define( "ERR_CHARSET_NOT_SET", "Domyślny zestaw znaków nie jest zestawem znaków bazy danych XOOPS." );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "Wsparcie");

define( "LOGIN", "Logowanie");
define( "LOGIN_TITLE", "Logowanie");
define( "USER_LOGIN", "Login administratora" );
define( "USERNAME", "Użytkownik :");
define( "PASSWORD", "Hasło :");

define( "ICONV_CONVERSION", "Konwersja znaków");
define( "ZLIB_COMPRESSION", "Kompresja Zlib");
define( "IMAGE_FUNCTIONS", "Funkcje związane z obrazami");
define( "IMAGE_METAS", "Image meta data (exif)");

define( "ADMIN_EXIST", "Konto administratora już jest utworzone.<br />Naciśnij <em>Dalej</em> aby kontynuować.");

define( "CONFIG_SITE", "Konfiguracja witryny" );
define( "CONFIG_SITE_TITLE", "Konfiguracja witryny" );
define( "MODULES", "Instalacja modułów" );
define( "MODULES_TITLE", "Instalacja modułów" );
define( "THEME", "Wybierz motyw graficzny - theme " );
define( "THEME_TITLE", "Wybierz domyślny motyw graficzny - theme" );

define( "INSTALLED_MODULES", "Zainstalowane moduły.<br />Naciśnij <em>Dalej</em> aby kontynuować.");
define( "NO_MODULES_FOUND", "Nie znaleziono modułów.<br />Naciśnij <em>Dalej</em> aby kontynuować.");
define( "NO_INSTALLED_MODULES", "Nie zainstalowano modułów.<br />Naciśnij <em>Dalej</em> aby kontynuować.");

define( "THEME_NO_SCREENSHOT", "Nie znaleziono zdjęcia ekranu");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "Siła hasła: ");
define( "PASSWORD_DESC", "Hasło nie zostało wprowadzone");
define( "PASSWORD_GENERATOR", "Generator haseł");
define( "PASSWORD_GENERATE", "Generuj");
define( "PASSWORD_COPY", "Kopiuj");

define( "PASSWORD_VERY_WEAK", "Bardzo słabe!");
define( "PASSWORD_WEAK", "Słabe!");
define( "PASSWORD_BETTER", "Lepsze");
define( "PASSWORD_MEDIUM", "Średnie");
define( "PASSWORD_STRONG", "Mocne");
define( "PASSWORD_STRONGEST", "Mocniejsze");
?>