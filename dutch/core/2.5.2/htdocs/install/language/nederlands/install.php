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

// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by Renetjuh
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door Renetjuh
 * (Ver)taalfouten hier melden: http://www.xoops.nl
 **/

define( "SHOW_HIDE_HELP", "Toon/verberg help tekst" );

// Licentie
define('LICENSE_NOT_WRITEABLE', 'Licentie is %s . <br/><font style="colour:#ff0000">Maak ../include/license.php beschrijfbaar</font>');
define('LICENSE_IS_WRITEABLE', 'Licentie is %s');

// Controlepagina Configuratie
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s extensie" );
define( "CHAR_ENCODING", "Character encoding" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "Systeemeisen" );
define( "_PHP_VERSION", "PHP versie" );
define( "RECOMMENDED_SETTINGS", "Aanbevolen instellingen" );
define( "RECOMMENDED_EXTENSIONS", "Aanbevolen extensies" );
define( "SETTING_NAME", "Naam instellen" );
define( "RECOMMENDED", "Aanbevolen" );
define( "CURRENT", "Huidig" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Deze extensies zijn niet nodig voor normaal gebruik, maar kunnen noodzakelijk zijn bij specifieke toepassingen (zoals multi-language of RSS ondersteuning). Daarom is het aanbevolen deze ook geinstalleerd te hebben." );
define( "NONE", "Geen " );
define( "SUCCESS", "Gelukt" );
define( "WARNING", "Waarschuwing" );
define( "FAILED", "Mislukt" );

// Titels (Algemeen en pagina's)
define( "XOOPS_INSTALL_WIZARD", "XOOPS installatie wizard" );

define( "LANGUAGE_SELECTION", "Taal keuze" );
define( "LANGUAGE_SELECTION_TITLE", "Kies uw taal");        // L128
define( "INTRODUCTION", "Introductie" );
define( "INTRODUCTION_TITLE", "Welkom bij de XOOPS installatie assistent" );        // L0
define( "CONFIGURATION_CHECK", "Configuratie controle" );
define( "CONFIGURATION_CHECK_TITLE", "Controle van uw server configuratie" );
define( "PATHS_SETTINGS", "Instellingen paden" );
  define( "PATHS_SETTINGS_TITLE", "Paden/mappen instellingen" );
define( "DATABASE_CONNECTION", "Database connectie" );
  define( "DATABASE_CONNECTION_TITLE", "Database connectie/verbinding" );
define( "DATABASE_CONFIG", "Database configuratie" );
define( "DATABASE_CONFIG_TITLE", "Database configuratie" );
define( "CONFIG_SAVE", "Configuratie bewaren" );
define( "CONFIG_SAVE_TITLE", "Opslaan van uw systeem configuratie" );
define( "TABLES_CREATION", "Tabellen aanmaken" );
define( "TABLES_CREATION_TITLE", "Database tabellen aanmaken" );
define( "INITIAL_SETTINGS", "Administratie instellingen" );
define( "INITIAL_SETTINGS_TITLE", "Voer uw administratie instellingen in" );
define( "DATA_INSERTION", "Data invoer" );
define( "DATA_INSERTION_TITLE", "Opslaan van uw instellingen in de database" );
define( "WELCOME", "Welkom" );
define( "WELCOME_TITLE", "Welkom op uw XOOPS website" );        // L0


// Instellingen (labels and help tekst)
  define( "XOOPS_PATHS", "XOOPS Fysieke paden/mappen" );
define( "XOOPS_URLS", "Website locaties" );

define( "XOOPS_ROOT_PATH_LABEL", "XOOPS hoofdmap" );
define( "XOOPS_ROOT_PATH_HELP", "Fysieke pad naar de hoofd XOOPS-map ZONDER slash op het einde" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS library directory" );
define( "XOOPS_LIB_PATH_HELP", "Fysieke pad naar de XOOPS-librarymap ZONDER slash op het einde, voor toekomstige compatibiliteit. Het is om veiligheids redenen aan te raden om deze map en de bestanden erin buiten de " . XOOPS_ROOT_PATH_LABEL . " te plaatsen.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS databestanden map" );
define( "XOOPS_DATA_PATH_HELP", "Fysieke pad naar de XOOPS-databestanden (beschrijfbaar) map ZONDER slash op het einde, voor toekomstige compatibiliteit. Het is om veiligheids redenen aan te raden om deze map en de bestanden erin buiten de " . XOOPS_ROOT_PATH_LABEL . " te plaatsen." );

define( "XOOPS_URL_LABEL", "Website locatie (URL)" ); // L56
define( "XOOPS_URL_HELP", "Hoofd URL dat gebruikt zal worden voor de XOOPS installatie" ); // L58

define( "LEGEND_CONNECTION", "Database verbinding" );
define( "LEGEND_DATABASE", "Database" ); // L51

define( "DB_HOST_LABEL", "Server hostnaam" );    // L27
define( "DB_HOST_HELP",  "Hostnaam van de database server. Indien je niet zeker van de naam bent, <em>localhost</em> werkt in meeste gevallen."); // L67
define( "DB_USER_LABEL", "Gebruikersnaam" );    // L28
define( "DB_USER_HELP",  "Naam van Gebruiker die gebruikt wordt om te verbinden met de database server"); // L65
define( "DB_PASS_LABEL", "Wachtwoord" );    // L52
define( "DB_PASS_HELP",  "Wachtwoord van de database gebruiker"); // L68
define( "DB_NAME_LABEL", "Database naam" );    // L29
define( "DB_NAME_HELP",  "De naam van de database op de database server. De installatie assistent zal een nieuwe database proberen te maken indien deze niet aanwezig zou zijn."); // L64
define( "DB_CHARSET_LABEL", "Database karakter set instellingen" );
define( "DB_CHARSET_HELP",  "MySQL ondersteund meerdere karakter sets waardoor u de mogelijkheid krijgt om de data op te slaan in deze verschillende karakter sets en vergelijkingen te maken volgens meerdere collaties.");
define( "DB_COLLATION_LABEL", "Database collatie" );
define( "DB_COLLATION_HELP",  "Een collatie een verzameling regels om karakters te vergelijken in een karakter set.");
define( "DB_PREFIX_LABEL", "Tabel voorvoegsel" );    // L30
define( "DB_PREFIX_HELP",  "Dit voorvoegsel wordt toegevoegd aan alle tabellen om eventuele naamconflicten in de database te voorkomen. Als u niet zeker bent gebruik dan de standaard."); // L63
define( "DB_PCONNECT_LABEL", "Gebruik persistente connectie" );    // L54
define( "DB_PCONNECT_HELP",  "Standaard is 'NEE'. Kies 'NEE' indien u het niet zeker weet."); // L69
define( "DB_DATABASE_LABEL", "Database" );

define( "LEGEND_ADMIN_ACCOUNT", "Administrator gebruikersnaam" );
define( "ADMIN_LOGIN_LABEL", "Admin login" ); // L37
define( "ADMIN_EMAIL_LABEL", "Admin e-mail" ); // L38
define( "ADMIN_PASS_LABEL", "Admin wachtwoord" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Bevestig wachtwoord" ); // L74

// Knoppen
define( "BUTTON_PREVIOUS", "Vorige" ); // L42
define( "BUTTON_NEXT", "Volgende" ); // L47

// Berichten
define( "XOOPS_FOUND", "%s gevonden" );
define( "CHECKING_PERMISSIONS", "Toegangsrechten controleren van bestanden en mappen..." ); // L82
define( "IS_NOT_WRITABLE", "%s is NIET beschrijfbaar." ); // L83
define( "IS_WRITABLE", "%s is beschrijfbaar." ); // L84

define( "XOOPS_PATH_FOUND", "Map gevonden." );

define( "READY_CREATE_TABLES", "Geen XOOPS tabellen gevonden.<br />Het installatieprogramma is klaar om de XOOPS systeem tabellen aan te maken.<br />Druk <em>volgende</em> om door te gaan." );
define( "XOOPS_TABLES_FOUND", "De XOOPS systeem tabellen bestaan al in de database.<br />Klik op <em>volgende</em> om naar de volgende stap te gaan." );
define( "XOOPS_TABLES_CREATED", "De XOOPS systeem tabellen zijn aangemaakt.<br />Klik op <em>Volgende</em> om naar de volgende stap te gaan." );
define( "READY_INSERT_DATA", "De installatie wizard is nu klaar met het invoegen van alle systeem gegevens in de database." );
define( "READY_SAVE_MAINFILE", "De installatie wizard is nu klaar om de instellingen in <em>mainfile.php</em> op te slaan.<br />Klik op <em>Volgende</em> om door te gaan." );
define( "SAVED_MAINFILE", "De instellingen zijn opgeslagen in mainfile.php" );
define( "SAVED_MAINFILE_MSG", "De installatie wizard heeft de systeem instellingen opgeslagen in <em>mainfile.php</em>. Klik op <em>Volgende</em> om naar de volgende stap te gaan." );
define( "DATA_ALREADY_INSERTED", "De XOOPS gegevens staan al in de database.<br />Klik op <em>Volgende</em> om naar de volgende stap te gaan." );
define( "DATA_INSERTED", "De administratie gegevens zijn ingevoerd in de database.<br />Klik op <em>volgende</em> om naar de volgende stap te gaan." );


// %s is database naam
define( "DATABASE_CREATED", "De database %s is aangemaakt!" ); // L43
// %s is tabel naam
define( "TABLE_NOT_CREATED", "Het was niet mogelijk om de tabel %s aan te maken" ); // L118
define( "TABLE_CREATED", "De tabel %s is aangemaakt." ); // L45
define( "ROWS_INSERTED", "%d entries toegevoegd in tabel %s." ); // L119
define( "ROWS_FAILED", "Toevoegen %d entries in tabel %s mislukt." ); // L120
define( "TABLE_ALTERED", "Tabel %s bijgewerkt."); // L133
define( "TABLE_NOT_ALTERED", "Bijwerken tabel %s mislukt."); // L134
define( "TABLE_DROPPED", "De tabel %s is verwijderd."); // L163
define( "TABLE_NOT_DROPPED", "Het verwijderen van de tabel %s is mislukt."); // L164

// Fout berichten
define( "ERR_COULD_NOT_ACCESS", "Kon de aangegeven map niet vinden. Controleer of deze bestaat en leesbaar is door de server." );
define( "ERR_NO_XOOPS_FOUND", "Geen XOOPS installatie gevonden in de aangegeven map." );
define( "ERR_INVALID_EMAIL", "Geen correct E-mailadres" ); // L73
define( "ERR_REQUIRED", "Verplichte Informatie." ); // L41
define( "ERR_PASSWORD_MATCH", "De twee wachtwoorden zijn niet identiek" );
define( "ERR_NEED_WRITE_ACCESS", "De server dient schrijftoegang te hebben tot de volgende bestanden en mappen<br />(b.v. <em>chmod 777 map_naam</em> op een UNIX/LINUX server)<br />Als deze rechten niet aanwezig of niet correct zijn, verander deze dan aub handmatig en stel de juist toegangsrechten in." );
define( "ERR_NO_DATABASE", "Kon geen database aanmaken. Informeer bij de serverbeheerder voor details." ); // L31
define( "ERR_NO_DBCONNECTION", "Kon geen verbinding maken met de database server." ); // L106
define( "ERR_WRITING_CONSTANT", "Schrijven van constante %s mislukt." ); // L122

define( "ERR_COPY_MAINFILE", "Het is niet gelukt het distributie bestand naar mainfile.php te schrijven" );
define( "ERR_WRITE_MAINFILE", "Geen schrijf toegang voor mainfile.php. Controleer aub de toegangsrechten en probeer het opnieuw."); 
define( "ERR_READ_MAINFILE", "Kon mainfile.php niet lezen" );


define( "ERR_INVALID_DBCHARSET", "De karakter set '%s' wordt niet ondersteund." );
define( "ERR_INVALID_DBCOLLATION", "De collatie '%s' wordt niet ondersteund." );
define( "ERR_CHARSET_NOT_SET", "Standaard karakter set instelling is niet ingesteld voor de XOOPS database." );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "Ondersteunt");

define( "LOGIN", "Authenticeer");
define( "LOGIN_TITLE", "Authenticatie");
define( "USER_LOGIN", "Administrator Login" );
define( "USERNAME", "Gebruikersnaam :");
define( "PASSWORD", "Wachtwoord :");

define( "ICONV_CONVERSION", "Karakter set conversie");
define( "ZLIB_COMPRESSION", "Zlib Compressie");
define( "IMAGE_FUNCTIONS", "Afbeeldings functies");
define( "IMAGE_METAS", "Afbeeldings meta data (exif)");

define( "ADMIN_EXIST", "De administrator gebruikersnaam bestaat al.<br />Klik op <strong>Volgende</strong> om verder te gaan.");

define( "CONFIG_SITE", "Website configuratie" );
define( "CONFIG_SITE_TITLE", "Website configuratie" );
define( "MODULES", "Modules installeren" );
define( "MODULES_TITLE", "Modules installeren" );
define( "THEME", "Selecteer thema" );
define( "THEME_TITLE", "Kies het standaard thema" );

define( "INSTALLED_MODULES", "De volgende modules zijn geinstalleerd.<br />Klik op <strong>Volgende</strong> om verder te gaan.");
define( "NO_MODULES_FOUND", "Geen modules gevonden.<br />Klik op <strong>Volgende</strong> om verder te gaan.");
define( "NO_INSTALLED_MODULES", "Geen modules geinstalleerd.<br />Klik op <strong>Volgende</strong> om verder te gaan.");

define( "THEME_NO_SCREENSHOT", "Geen screenshot voor dit thema gevonden");

define( "IS_VALOR", " => ");

// Wachtwoord bericht
define( "PASSWORD_LABEL", "Wachtwoord sterkte : ");
define( "PASSWORD_DESC", "Wachtwoord niet ingevoerd");
define( "PASSWORD_GENERATOR", "Wachtwoord generator");
define( "PASSWORD_GENERATE", "Genereer");
define( "PASSWORD_COPY", "Kopieer");

define( "PASSWORD_VERY_WEAK", "Zeer Zwak");
define( "PASSWORD_WEAK", "Zwak");
define( "PASSWORD_BETTER", "Aardig");
define( "PASSWORD_MEDIUM", "Gemiddeld");
define( "PASSWORD_STRONG", "Sterk");
define( "PASSWORD_STRONGEST", "Zeer sterk");
?>