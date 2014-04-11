<?php
/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
 * @package         Install
 * @subpackage      Xoops Protector Language
 * @version         $Id: 2.5.0.a install.php 21.12.2010
 *
 * @LANGCODE        de
 * @CHARSET         UTF-8
 * Translator       XOOPS German Translation Team http://www.myxoops.org
 *
 */

define( "SHOW_HIDE_HELP", "Anzeigen/Ausblenden des Hilfe-Textes" );
// License
define('LICENSE_NOT_WRITEABLE', 'Lizenz ist %s . <br/><font style="colour:#ff0000">Make ../include/license.php beschreibbar</font>');
define('LICENSE_IS_WRITEABLE', 'Lizenz ist %s');

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s Erweiterungen" );
define( "CHAR_ENCODING", "Encoding" );
define( "XML_PARSING", "XML Parser" );
define( "REQUIREMENTS", "Anforderungen" );
define( "_PHP_VERSION", "PHP Version" );
define( "RECOMMENDED_SETTINGS", "Empfohlene Einstellungen" );
define( "RECOMMENDED_EXTENSIONS", "Empfohlene Erweiterungen" );
define( "SETTING_NAME", "Einstellung" );
define( "RECOMMENDED", "empfohlen" );
define( "CURRENT", "aktuell" );

define( "RECOMMENDED_EXTENSIONS_MSG", "Diese Erweiterungen sind für den normalen Gebrauch nicht zwingend notwendig,
 könnten aber bei bestimmten Zusatzfunktionen (wie multi-language oder RSS Unterstützung) benötigt werden.<br />Es empfiehlt sich deswegen diese zu installieren." );
define( "NONE", "Kein" );
define( "SUCCESS", "Erfolgreich" );
define( "WARNING", "Warnung" );
define( "FAILED", "Fehler" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS Installations-Assistent" );
define( "LANGUAGE_SELECTION", "Sprachauswahl" );
define( "LANGUAGE_SELECTION_TITLE", "Bitte wählen Sie Ihre Sprache aus!");        // L128
define( "INTRODUCTION", "Einleitung" );
define( "INTRODUCTION_TITLE", "Wilkommen zu XOOPS Installations-Assistenten!" );        // L0
define( "CONFIGURATION_CHECK", "Konfiguration" );
define( "CONFIGURATION_CHECK_TITLE", "Überprüfung der Serverkonfiguration" );
define( "PATHS_SETTINGS", "Pfade" );
define( "PATHS_SETTINGS_TITLE", "Pfadeinstellungen" );
define( "DATABASE_CONNECTION", "Datenbankverbindung" );
define( "DATABASE_CONNECTION_TITLE", "Datenbankverbindung" );
define( "DATABASE_CONFIG", "Datenbankeinstellungen" );
define( "DATABASE_CONFIG_TITLE", "Datenbankeinstellungen" );
define( "CONFIG_SAVE", "Einstellungen speichern" );
define( "CONFIG_SAVE_TITLE", "Die Systemeinstellunge werden gespeichert." );
define( "TABLES_CREATION", "Tabellen Erstellung" );
define( "TABLES_CREATION_TITLE", "Erstellung der Datenbank-Tabellen" );
define( "INITIAL_SETTINGS", "Administrator" );

define( "INITIAL_SETTINGS_TITLE", "Bitte geben Sie die Einstellungen für den Administrator-Account an." );
define( "DATA_INSERTION", "Daten einfügen" );
define( "DATA_INSERTION_TITLE", "Einstellungen werden in der Datenbank gespeichert." );
define( "WELCOME", "Willkommen" );
define( "WELCOME_TITLE", "Willkommen auf Ihrer XOOPS-Seite!" );        // L0

// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS Physikalische Pfade" );
define( "XOOPS_URLS", "Web Einstellungen" );

define( "XOOPS_ROOT_PATH_LABEL", "XOOPS Dokumentroot" );
define( "XOOPS_ROOT_PATH_HELP", "Physikalischer Pfad zum XOOPS (ohne abschliessenden Slash))" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS Bibliotheksverzeichnis" );

define( "XOOPS_LIB_PATH_HELP", "Physikalischer Pfad zur XOOPS Bibliothek (ohne abschliessenden Slash), für zukünftige Kompatiblität. Für mehr Sicherheit im XOOPS-Dokumentroot.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS Datenverzeichnis" );

define( "XOOPS_DATA_PATH_HELP", "Physikalischer Pfad zu den beschreibbaren XOOPS-Daten Verzeichnis  (ohne abschliessenden Slash), für zukünftige Kompatiblität. Für mehr Sicherheit im XOOPS-Dokumentroot.");
define( "XOOPS_URL_LABEL", "Webseiten-Adresse (URL)" ); // L56
define( "XOOPS_URL_HELP", "Die URL unter der diese Installation laufen soll" ); // L58

define( "LEGEND_CONNECTION", "Serververbindung" );
define( "LEGEND_DATABASE", "Datenbank" ); // L51

define( "DB_HOST_LABEL", "Server Hostname" );    // L27
define( "DB_HOST_HELP",  "Hostname des Datenbankservers. <em>localhost</em> wenn Sie unsicher sind"); // L67
define( "DB_USER_LABEL", "Benutzer" );    // L28
define( "DB_USER_HELP",  "Name des Useraccount für diese Datenbank"); // L65
define( "DB_PASS_LABEL", "Password" );    // L52
define( "DB_PASS_HELP",  "Password des User der Datenbank"); // L68
define( "DB_NAME_LABEL", "Datenbankname" );    // L29

define( "DB_NAME_HELP",  "Der Name der Datenbank. der Installer prüft , ob diese vorhanden ist. Gegebenenfalls wird diese angelegt"); // L64
define( "DB_CHARSET_LABEL", "Datenbank Character Set" );
define( "DB_CHARSET_HELP",  "MySQL Zeichensatz, mit dem Sie die Daten speichern.");
define( "DB_COLLATION_LABEL", "Datenbank Collation" );
define( "DB_COLLATION_HELP",  "Die Koalition der Datenbank");
define( "DB_PREFIX_LABEL", "Tabellen Prefix" );    // L30

define( "DB_PREFIX_HELP",  "Der Prefix, der den Tabellen voangestellt wird. Wenn Sie unsicher sind, belassen Sie die Voreinstellung"); // L63
define( "DB_PCONNECT_LABEL", "Ständige Verbindung?" );    // L54

define( "DB_PCONNECT_HELP",  "Default ist 'Nein'. Stellen Sie auf  'Ja', wenn Sie eine dauerhafte Verbindung zur Datenbank benötigen."); // L69
define( "DB_DATABASE_LABEL", "Datenbank" );

define( "LEGEND_ADMIN_ACCOUNT", "Administrator Account" );
define( "ADMIN_LOGIN_LABEL", "Administrator Login:" ); // L37
define( "ADMIN_EMAIL_LABEL", "Administrator E-mail:" ); // L38
define( "ADMIN_PASS_LABEL", "Administrator Passwort:" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Passwort bestätigen:" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Vorheriger Schritt" ); // L42
define( "BUTTON_NEXT", "Nächster Schritt" ); // L47

// Messages
define( "XOOPS_FOUND", "%s gefunden!" );
define( "CHECKING_PERMISSIONS", "Überprüfe Datei- und Ordnerattribute ..." ); // L82
define( "IS_NOT_WRITABLE", "%s ist NICHT beschreibbar." ); // L83
define( "IS_WRITABLE", "%s ist beschreibbar." ); // L84

define( "XOOPS_PATH_FOUND", "Pfad gefunden!" );

define( "READY_CREATE_TABLES", "Es wurden keine XOOPS Tabellen gefunden.<br />Der Installations-Assistent wird nun die XOOPS System Tabellen erstellen<br />Bitte auf den Button für den nächsten Schritt klicken." );
define( "XOOPS_TABLES_FOUND", "In der Datenbank existieren bereits XOOPS System Tabellen.<br />Bitte auf den Button für den nächsten Schritt klicken." ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS System Tabellen wurden erstellt!<br />Bitte auf den Button für den nächsten Schritt klicken." );
define( "READY_INSERT_DATA", "Der Installations-Assistent ist nun bereit, die Daten in Ihre Datenbank zu schreiben." );
define( "READY_SAVE_MAINFILE", "Der Installations-Assistent ist nun bereit, die Einstellungen in der <em>mainfile.php</em> zu speichern.<br />Bitte auf den Button für den nächsten Schritt klicken." );
define( "SAVED_MAINFILE", "Die Einstellungen wurden in der mainfile.php gespeichert!" );

define( "SAVED_MAINFILE_MSG", "Der Installations-Assistent hat die Einstellungen in der mainfile.php gespeichert!. Bitte auf den Button für den nächsten Schritt klicken." );
define( "DATA_ALREADY_INSERTED", "Es existieren bereits XOOPS Daten in Ihrer Datenbank.<br />Bitte auf den Button für den nächsten Schritt klicken." );
define( "DATA_INSERTED", "Die Daten wurden in die Datenbank geschrieben.<br />Bitte auf den Button für den nächsten Schritt klicken." );
// %s is database name
define( "DATABASE_CREATED", "Datenbank %s wurde erstellt!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Tabelle %s konnte nicht erstellt werden" ); // L118
define( "TABLE_CREATED", "Tabelle %s erstellt." ); // L45
define( "ROWS_INSERTED", "%d Einträge wurden in die Datenbank %s geschrieben." ); // L119
define( "ROWS_FAILED", "Fehler beim Schreiben von %d entries in die Tabelle %s." ); // L120
define( "TABLE_ALTERED", "Tabelle %s wurde aktualisiert."); // L133
define( "TABLE_NOT_ALTERED", "Fehler beim Aktualisieren der Tabelle %s."); // L134
define( "TABLE_DROPPED", "Tabelle %s wurde gelöscht."); // L163
define( "TABLE_NOT_DROPPED", "Fehler beim Löschen der Tabelle %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "Auf den angegebenen Ordner konnte nicht zugegriffen werden. Bitte vergewissern Sie sich, dass er existiert und vom Server gelesen werden kann!" );
define( "ERR_NO_XOOPS_FOUND", "Es konnte keine XOOPS Installation im angegebenen Ordner gefunden werden!" );
define( "ERR_INVALID_EMAIL", "Ungültige Email-Adresse" ); // L73
define( "ERR_REQUIRED", "Die Eingabe ist erfoderlich." ); // L41
define( "ERR_PASSWORD_MATCH", "Die beiden Passwörter stimmen nicht überein!" );
define( "ERR_NEED_WRITE_ACCESS", "Der Server muss Schreibrechte auf die folgenden Ordner bzw. Dateien besitzen.<br />(z.B. <em>chmod 777 Ordner_Name</em>, <em>chmod 666 Datei_Name</em> auf einem UNIX/LINUX Server)<br />Wenn diese nicht vorhanden sind oder nicht ordnungsgemäss erstellt wurden, erstellen Sie diese bitte manuell und vergeben anschliessend die entsprechenden Rechte." );
define( "ERR_NO_DATABASE", "Es konnte keine Datenbank erstellt werden. Bitte kontaktieren Sie Ihren Server-Administrator." ); // L31
define( "ERR_NO_DBCONNECTION", "Es konnte keine Verbindung zum Datenbankserver hergestellt werden." ); // L106
define( "ERR_WRITING_CONSTANT", "Fehler beim Schreiben der Konstante %s." ); // L122
define( "ERR_COPY_MAINFILE", "Die mainfile.php konnte nicht kopiert werden." );
define( "ERR_WRITE_MAINFILE", "Die mainfile.php konnte nicht beschrieben werden. Bitte prüfen und ändern Sie ggf. die Dateiattribute und versuchen Sie es erneut.");
define( "ERR_READ_MAINFILE", "Die mainfile.php konnte nicht gelesen werden!" );
define( "ERR_INVALID_DBCHARSET", "Der zeichensatz '%s' ist nicht verfügbar." );
define( "ERR_INVALID_DBCOLLATION", "Die Kollation '%s' ist nicht verfügbar." );
define( "ERR_CHARSET_NOT_SET", "Default-Zeichensatz ist nicht für XOOPS-Datenbank eingerichtet." );
define("_INSTALL_CHARSET", "UTF-8");
define( "SUPPORT", "Support");
define( "LOGIN", "Anmeldung");
define( "LOGIN_TITLE", "Login");
define( "USER_LOGIN", "Administrator Login" );
define( "USERNAME", "Username :");
define( "PASSWORD", "Password :");

define( "ICONV_CONVERSION", "Zeichensatz Konvertierung");
define( "ZLIB_COMPRESSION", "Zlib Kompression");
define( "IMAGE_FUNCTIONS", "Image Funktion");
define( "IMAGE_METAS", "Image meta data (exif)");

define( "ADMIN_EXIST", "Ein Administratorzugang existiert bereits.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren");

define( "CONFIG_SITE", "Seitenkonfiguration" );
define( "CONFIG_SITE_TITLE", "Seitenkonfiguration" );
define( "MODULES", "Moduleinstallation" );
define( "MODULES_TITLE", "Moduleinstallation" );
define( "THEME", "Themeauswahl" );
define( "THEME_TITLE", "Wählen Sie ihr Theme aus" );

define( "INSTALLED_MODULES", "Die folgenden Module wurden installiert.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren");
define( "NO_MODULES_FOUND", "Keine Module gefunden.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren");
define( "NO_INSTALLED_MODULES", "Keine Module installiert.<br />Bitte mit dem <strong>nächsten Schritt</strong> fortfahren");

define( "THEME_NO_SCREENSHOT", "Kein Vorschaubild gefunden.");
define( "IS_VALOR", " => ");
// password message
define( "PASSWORD_LABEL", "Password Stärke: ");
define( "PASSWORD_DESC", "Password nicht vorhanden");
define( "PASSWORD_GENERATOR", "Password Generator");
define( "PASSWORD_GENERATE", "Erzeuge");
define( "PASSWORD_COPY", "Kopieren");

define( "PASSWORD_VERY_WEAK", "sehr schwach");
define( "PASSWORD_WEAK", "schwach");
define( "PASSWORD_BETTER", "besser");
define( "PASSWORD_MEDIUM", "mittel");
define( "PASSWORD_STRONG", "gut");
define( "PASSWORD_STRONGEST", "sehr gut");

define("FILTER_FUNCTIONS","Filterfunction");
?>