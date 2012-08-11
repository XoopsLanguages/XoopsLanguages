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
 * @version     $Id: install.php 2717 2009-01-23 09:47:30Z phppp $
 */

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("SHOW_HIDE_HELP","Visa/dölj hjälptext" );

// License
define('LICENSE_NOT_WRITEABLE','Licensen är %s . <br/><font style="colour:#ff0000">Gör ../include/license.php skrivbar</font>');
define('LICENSE_IS_WRITEABLE','Licensen är %s');

// Configuration check page
define("SERVER_API","Server-API" );
define("PHP_EXTENSION","%s tillägg" );
define("CHAR_ENCODING","Teckenkodning" );
define("XML_PARSING","XML-tolkning" );
define("REQUIREMENTS","Krav" );
define("_PHP_VERSION","PHP-version" );
define("RECOMMENDED_SETTINGS","Rekommenderade inställningar" );
define("RECOMMENDED_EXTENSIONS","Rekommenderade tillägg" );
define("SETTING_NAME","Inställningsnamn" );
define("RECOMMENDED","Rekommenderad" );
define("CURRENT","Aktuell" );
define("RECOMMENDED_EXTENSIONS_MSG","De här tilläggen behövs inte för normalt användande, men kan vara nödvändiga för att kunna utnyttja specifika funktioner (t ex olika språk och RSS-stöd). Det är därför rekommenderat att ha dem installerade." );
define("NONE","Ingen" );
define("SUCCESS","Lyckades" );
define("WARNING","Varning" );
define("FAILED","Misslyckades" );

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS installationsguide" );

define("LANGUAGE_SELECTION","Språkinställningar" );
define("LANGUAGE_SELECTION_TITLE","Välj ditt språk");        // L128
define("INTRODUCTION","Introduktion" );
define("INTRODUCTION_TITLE","Välkommen till XOOPS installationsassistent" );        // L0
define("CONFIGURATION_CHECK","Konfigurationskontroll" );
define("CONFIGURATION_CHECK_TITLE","Kontrollerar din serverkonfigurering" );
define("PATHS_SETTINGS","Sökvägsinställningar" );
define("PATHS_SETTINGS_TITLE","Sökvägsinställningar" );
define("DATABASE_CONNECTION","Databaskoppling" );
define("DATABASE_CONNECTION_TITLE","Databaskoppling" );
define("DATABASE_CONFIG","Databaseinställningar" );
define("DATABASE_CONFIG_TITLE","Databaseinställningar" );
define("CONFIG_SAVE","Spara inställningar" );
define("CONFIG_SAVE_TITLE","Sparar dina systeminställningar" );
define("TABLES_CREATION","Skapa tabeller" );
define("TABLES_CREATION_TITLE","Skapa tabeller i databasen" );
define("INITIAL_SETTINGS","Initiala inställningar" );
define("INITIAL_SETTINGS_TITLE","Fyll i dina initiala inställningar" );
define("DATA_INSERTION","Infoga data" );
define("DATA_INSERTION_TITLE","Sparar dina inställningar i databasen" );
define("WELCOME","Välkommen" );
define("WELCOME_TITLE","Välkommen till din XOOPS-sajt" );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS fysiska sökvägar" );
define("XOOPS_URLS","Webbplatser" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS dokumentrot" );
define("XOOPS_ROOT_PATH_HELP","Fysisk sökväg till XOOPS dokumentkatalog UTAN efterföljande snedstreck" );

define("XOOPS_LIB_PATH_LABEL","XOOPS bibliotekskatalog" );
define("XOOPS_LIB_PATH_HELP","Fysisk sökväg till XOOPS bibliotekskatalog UTAN efterföljande snedstreck, för framåtkompatibilitet. Placera katalogen utanför " . XOOPS_ROOT_PATH_LABEL . " för att göra den säker.");
define("XOOPS_DATA_PATH_LABEL","XOOPS datafilskatalog" );
define("XOOPS_DATA_PATH_HELP","Fysisk sökväg till XOOPS datafilskatalog (skrivbar) UTAN efterföljande snedstreck, för framåtkompatibilitet. Placera katalogen utanför " . XOOPS_ROOT_PATH_LABEL . " för att göra den säker." );

define("XOOPS_URL_LABEL","Plats för webbsajt (URL)" ); // L56
define("XOOPS_URL_HELP","Huvud-URL som kommer användas av din XOOPS-installation" ); // L58

define("LEGEND_CONNECTION","Serverkoppling" );
define("LEGEND_DATABASE","Databas" ); // L51

define("DB_HOST_LABEL","Servervärdnamn" );    // L27
define("DB_HOST_HELP",  "Värdnamn på databasservern. Om du är osäker på värdnamnet, ange <em>localhost</em> då det fungerar i de flesta fall"); // L67
define("DB_USER_LABEL","Användarnamn" );    // L28
define("DB_USER_HELP",  "Namn på det användarkonto som kommer användas för uppkoppling till databasservern"); // L65
define("DB_PASS_LABEL","Lösenord" );    // L52
define("DB_PASS_HELP",  "Lösenordet till din databas användarkonto"); // L68
define("DB_NAME_LABEL","Databasnamn" );    // L29
define("DB_NAME_HELP",  "Namnet på databasen hos värden. Installationsprogrammet kommer försöka skapa databasen om den inte existerar"); // L64
define("DB_CHARSET_LABEL","Databasens teckenuppsättning" );
define("DB_CHARSET_HELP",  "MySQL innehåller stöd för olika teckenuppsättningar, vilka möjliggör lagring av data i flera olika uppsättningar och jämförelse enligt flera olika kollationer.");
define("DB_COLLATION_LABEL","Databaskollation" );
define("DB_COLLATION_HELP",  "En kollation är en uppsättning regler för att jämför tecken i en teckenuppsättning.");
define("DB_PREFIX_LABEL","Tabellprefix" );    // L30
define("DB_PREFIX_HELP",  "Det här prefixet kommer läggas till namnet på alla nya tabeller som skapas för att undvika namnkonflikter i databasen. Om du är osäker på vilket prefix du ska ange, behåll standardprefixet"); // L63
define("DB_PCONNECT_LABEL","Använd beständig uppkoppling" );    // L54
define("DB_PCONNECT_HELP",  "Standard är 'Nej'. Lämna fältet blankt om du är osäker på vad du ska ange"); // L69
define("DB_DATABASE_LABEL","Databas" );

define("LEGEND_ADMIN_ACCOUNT","Administratörskonto" );
define("ADMIN_LOGIN_LABEL","Administratörs användarnamn" ); // L37
define("ADMIN_EMAIL_LABEL","Administratörs e-post" ); // L38
define("ADMIN_PASS_LABEL","Administratörs lösenord" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","Bekräfta lösenord" ); // L74

// Buttons
define("BUTTON_PREVIOUS","Föregående" ); // L42
define("BUTTON_NEXT","Nästa" ); // L47

// Messages
define("XOOPS_FOUND","%s hittad" );
define("CHECKING_PERMISSIONS","Kontrollerar fil och katalogbehörigheter..." ); // L82
define("IS_NOT_WRITABLE","%s är INTE skrivbar." ); // L83
define("IS_WRITABLE","%s är skrivbar." ); // L84

define("XOOPS_PATH_FOUND","Sökväg hittad." );

define("READY_CREATE_TABLES","Inga XOOPS-tabeller hittades.<br />Installationsprogrammet är nu redo att skapa XOOPS systemtabeller.<br />Klicka <em>nästa</em> för att fortsätta." );
define("XOOPS_TABLES_FOUND","XOOPS systemtabeller finns redan i din databas.<br />Klicka <em>nästa</em> för att fortsätta." ); // L131
define("XOOPS_TABLES_CREATED","XOOPS systemtabeller har skapats.<br />Klicka <em>nästa</em> för att fortsätta." );
define("READY_INSERT_DATA","Installationsprogrammet är nu redo att infoga den initiala datan i din databas." );
define("READY_SAVE_MAINFILE","Installationsprogrammet är nu redo att spara dina inställningar till <em>mainfile.php</em>.<br />Klicka <em>nästa</em> för att fortsätta." );
define("SAVED_MAINFILE","Sparade inställningar i mainfile.php" );
define("SAVED_MAINFILE_MSG","Installationsprogrammet har sparat dina inställningar i <em>mainfile.php</em>. Klicka <em>nästa</em> för att fortsätta." );
define("DATA_ALREADY_INSERTED","XOOPS-data funnet i databasen.<br />Klicka <em>nästa</em> för att fortsätta." );
define("DATA_INSERTED","Initial data har infogats i databasen.<br />Klicka <em>nästa</em> för att fortsätta." );


// %s is database name
define("DATABASE_CREATED","Databasen %s skapades!" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","Kunde inte skapa tabell %s" ); // L118
define("TABLE_CREATED","Tabell %s skapades." ); // L45
define("ROWS_INSERTED","%d rader infogades i tabell %s." ); // L119
define("ROWS_FAILED","Misslyckades med att infoga %d rader i tabell %s." ); // L120
define("TABLE_ALTERED","Tabell %s updaterades."); // L133
define("TABLE_NOT_ALTERED","Misslyckades med att uppdatera tabell %s."); // L134
define("TABLE_DROPPED","Tabell %s raderad."); // L163
define("TABLE_NOT_DROPPED","Misslyckades med att radera tabell %s."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","Kunde inte komma åt den angivna katalogen. Vänligen verifiera att den existerar och är läsbar av servern." );
define("ERR_NO_XOOPS_FOUND","Ingen XOOPS-installation hittades i den angivna katalogen." );
define("ERR_INVALID_EMAIL","Ogiltig e-postadress" ); // L73
define("ERR_REQUIRED","Informationen är obligatorisk." ); // L41
define("ERR_PASSWORD_MATCH","De två lösenorden överensstämmer inte" );
define("ERR_NEED_WRITE_ACCESS","Servern måste ha skrivtillgång till följande filer och kataloger<br />(t ex <em>chmod 777 katalognamn</em> på en UNIX/LINUX-server)<br />Om katalogerna inte är tillgängliga eller inte har skapats korrekt, vänligen skapa dem manuellt och sätt rätta behörigheter." );
define("ERR_NO_DATABASE","Kunde inte skapa databas. Kontakta serveradministratör för ytterligare detaljer." ); // L31
define("ERR_NO_DBCONNECTION","Kunde inte koppla upp sig mot databasserver." ); // L106
define("ERR_WRITING_CONSTANT","Misslyckades med att skriva konstant %s." ); // L122

define("ERR_COPY_MAINFILE","Kunde inte kopiera distributionsfilen till mainfile.php" );
define("ERR_WRITE_MAINFILE","Kunde inte skriva till mainfile.php. Vänligen kontrollera filbehörigheter och försök igen.");
define("ERR_READ_MAINFILE","Kunde inte öppna mainfile.php för läsning" );

define("ERR_INVALID_DBCHARSET","Teckenuppsättningen '%s' stöds inte." );
define("ERR_INVALID_DBCOLLATION","Kollationen '%s' stöds inte." );
define("ERR_CHARSET_NOT_SET","Standardteckenuppsättning är inte angiven för XOOPS databas." );


define("_INSTALL_CHARSET","UTF-8");

define("SUPPORT","Stöder");

define("LOGIN","Autentisering");
define("LOGIN_TITLE","Autentisering");
define("USER_LOGIN","Administratörsinloggning" );
define("USERNAME","Användarnamn :");
define("PASSWORD","Lösenord :");

define("ICONV_CONVERSION","Teckenuppsättningskonvertering");
define("ZLIB_COMPRESSION","Zlib-kompression");
define("IMAGE_FUNCTIONS","Bildfunktioner");
define("IMAGE_METAS","Bildmetadata (exif)");

define("ADMIN_EXIST","Administratörskontot finns redan.<br />Klicka <strong>nästa</strong> för att fortsätta.");

define("CONFIG_SITE","Sajtkonfigurering" );
define("CONFIG_SITE_TITLE","Sajtkonfigurering" );
define("MODULES","Modulinstallation" );
define("MODULES_TITLE","Modulinstallation" );
define("THEME","Välj tema" );
define("THEME_TITLE","Välj standardtema" );

define("INSTALLED_MODULES","Följande moduler har installerats.<br />Klicka <strong>nästa</strong> för att fortsätta.");
define("NO_MODULES_FOUND","Inga moduler hittades.<br />Klicka <strong>nästa</strong> för att fortsätta.");
define("NO_INSTALLED_MODULES","Ingen modul installerades.<br />Klicka <strong>nästa</strong> för att fortsätta.");

define("THEME_NO_SCREENSHOT","Ingen screenshot hittades");

define("IS_VALOR"," => ");

// password message
define("PASSWORD_LABEL","Lösenordsstyrka : ");
define("PASSWORD_DESC","Inget lösenord angivet");
define("PASSWORD_GENERATOR","Lösenordsgenerator");
define("PASSWORD_GENERATE","Generera");
define("PASSWORD_COPY","Kopiera");

define("PASSWORD_VERY_WEAK","Väldigt svagt");
define("PASSWORD_WEAK","Svagt");
define("PASSWORD_BETTER","Bättre");
define("PASSWORD_MEDIUM","Medel");
define("PASSWORD_STRONG","Starkt");
define("PASSWORD_STRONGEST","Starkast");
?>