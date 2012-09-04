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
 * @version     $Id$
 */

// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Michael Albertsen (culex) www.xoopsnordic.org

define("SHOW_HIDE_HELP","Vis/skjul hjælpe tekst" );


// Configuration check page
define("SERVER_API","Server API" );
define("PHP_EXTENSION","%s udvidelser" );
define("CHAR_ENCODING","Tegnsæt" );
define("XML_PARSING","XML analysere" );
define("REQUIREMENTS","Krav" );
define("_PHP_VERSION","PHP version" );
define("RECOMMENDED_SETTINGS","Anbefalede indstillinger" );
define("RECOMMENDED_EXTENSIONS","Anbefalede udvidelser" );
define("SETTING_NAME","Indstilling" );
define("RECOMMENDED","Anbefalet" );
define("CURRENT","Nuværende" );
define("RECOMMENDED_EXTENSIONS_MSG","Disse udvidelser er ikke et krav til normalt brug, men kan være nødvendige for at udnytte 
nogle specifikke muligheder (som multi-sprog eller RSS-støtte). anbefales det at få dem installeret." );
define("NONE","Ingen" );
define("SUCCESS","Succes " );
define("WARNING","Advarsel" );
define("FAILED","Fejlet" );

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS installationsguide" );

define("LANGUAGE_SELECTION","Sprog valg" );
define("LANGUAGE_SELECTION_TITLE","Vælg sprog");
define("INTRODUCTION","Introduktion " );
define("INTRODUCTION_TITLE","Velkommen til XOOPS installationsassistent." );
define("CONFIGURATION_CHECK","Konfigurations check" );
define("CONFIGURATION_CHECK_TITLE","Kontrollerer din servers konfiguration" );
define("PATHS_SETTINGS","Mappe indstillinger" );
define("PATHS_SETTINGS_TITLE","Mappe indstillinger" );
define("DATABASE_CONNECTION","Database forbindelse" );
define("DATABASE_CONNECTION_TITLE","Database forbindelse" );
define("DATABASE_CONFIG","Database konfiguration" );
define("DATABASE_CONFIG_TITLE","Database konfiguration" );
define("CONFIG_SAVE","Gem konfiguration" );
define("CONFIG_SAVE_TITLE","Gemmer dit systems konfiguration" );
define("TABLES_CREATION","Tabel oprettelse" );
define("TABLES_CREATION_TITLE","Database tabel oprettelse" );
define("INITIAL_SETTINGS","Indledende indstillinger" );
define("INITIAL_SETTINGS_TITLE","Indtast dine indledende indstillinger" );
define("DATA_INSERTION","Data indsætelse" );
define("DATA_INSERTION_TITLE","Gemmer dine indstillinger i databasen" );
define("WELCOME","Velkommen" );
define("WELCOME_TITLE","Velkommen til din XOOPS side" );


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS fysiske sti" );
define("XOOPS_URLS","Web-steder" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS root fysiske sti" );
define("XOOPS_ROOT_PATH_HELP","Fysisk sti til XOOPS dokumenter (serveres) mappe UDEN skråstreg" );

define("XOOPS_LIB_PATH_LABEL","XOOPS biblioteks mappe" );
define("XOOPS_LIB_PATH_HELP","Fysisk sti til XOOPS biblioteket UDEN skråstreg, for fremtidig kompatibilitet. Hvis muligt, placer foldere uden for " . XOOPS_ROOT_PATH_LABEL . " for øget sikkerhed.");
define("XOOPS_DATA_PATH_LABEL","XOOPS datafil mappe" );
define("XOOPS_DATA_PATH_HELP","Fysisk sti til XOOPS datafiler (skrivbar) mappe UDEN skråstreg, for fremtidig kompatibilitet. Hvis muligt, placer foldere uden for " . XOOPS_ROOT_PATH_LABEL . " for øget sikkerhed." );

define("XOOPS_URL_LABEL","Website placering (URL)" );
define("XOOPS_URL_HELP","Adresse til XOOPS , som vil blive brugt til at få adgang til din XOOPS-side" );

define("LEGEND_CONNECTION","Server forbindelse" );
define("LEGEND_DATABASE","Database" );

define("DB_HOST_LABEL","Server hostname" );
define("DB_HOST_HELP",  "værtsnavnet på den database server. Hvis du er usikker, <em> localhost </ em> værker i de fleste tilfælde");
define("DB_USER_LABEL","Bruger navn" );
define("DB_USER_HELP",  "Din brugerkonto, der vil blive anvendt til at forbinde til database-serveren");
define("DB_PASS_LABEL","Password" );
define("DB_PASS_HELP",  "Password til din konto på database brugerkonto");
define("DB_NAME_LABEL","Database navn" );
define("DB_NAME_HELP",  "Navnet på databasen på værten. Installationsprogrammet vil forsøge at oprette den database, hvis ikke eksisterer");
define("DB_CHARSET_LABEL","Database tegnsæ" );
define("DB_CHARSET_HELP",  "MySQL version 4.12 omfatter tegnsæ støtte. som giver dig mulighed for at lagre data ved hjælp af en række forskellige tegnsæ og foretage sammenligninger i henhold til en række collations.");
define("DB_COLLATION_LABEL","Database indsamling" );
define("DB_COLLATION_HELP",  "En samling er et sæ regler for at sammenligne tegn i et tegnsæ.");
define("DB_PREFIX_LABEL","Tabel præfiks" );
define("DB_PREFIX_HELP",  "Dette præfiks vil blive tilføjet alle nye tabeller i databasen. Dette gøres for at undgå navnesammenfald i databasen. Hvis du er usikker, så bare behold standardværdien");
define("DB_PCONNECT_LABEL","Brug vedvarende forbindelse?" );
define("DB_PCONNECT_HELP",  "Standard er 'NEJ'. Vælg 'NEJ' hvis du er usikker");
define("DB_DATABASE_LABEL","Database" );

define("LEGEND_ADMIN_ACCOUNT","Administrator konto" );
define("ADMIN_LOGIN_LABEL","Administrator login" );
define("ADMIN_EMAIL_LABEL","Administrator e-mail" );
define("ADMIN_PASS_LABEL","Administrator password" );
define("ADMIN_CONFIRMPASS_LABEL","Bekræft password" );

// Buttons
define("BUTTON_PREVIOUS","Forrige" );
define("BUTTON_NEXT","Næste" );

// Messages
define("XOOPS_FOUND","%s fundet" );
define("CHECKING_PERMISSIONS","Tjek fil og mappe tilladelser.." );
define("IS_NOT_WRITABLE","%s er ikke skrivbar." );
define("IS_WRITABLE","%s er skrivbar." );

define("XOOPS_PATH_FOUND","Mappe fundet." );

define("READY_CREATE_TABLES","Ingen XOOPS tabeller fundet.<br />Installationsprogrammet er nu klar til at oprette XOOPS system tabeller.<br />Klik <em>næste</em> for at fortsæte." );
define("XOOPS_TABLES_FOUND","Tabeler til XOOPS eksistere allerede i din database..<br />Klik <em>næste</em> for at gå til næste trin." );
define("XOOPS_TABLES_CREATED","XOOPS system tabeller blev oprettet.<br />Klik <em>næste</em> for at gå til næste trin." );
define("READY_INSERT_DATA","Installationsprogrammet er nu klar til at indsæte foreløbige data ind i din database." );
define("READY_SAVE_MAINFILE","Installationsprogrammet er nu klar til at gemme de indtastede oplysninger i <em>mainfile.php</em>.<br />Klik <em>næste</em> for at fortsæte." );
define("SAVED_MAINFILE","Gemt indstillinger i mainfile.php" );
define("SAVED_MAINFILE_MSG","Installationsprogrammet har gemt indstillingerne i <em>mainfile.php</em>. Klik <em>næste</em> for at gå til næste trin." );
define("DATA_ALREADY_INSERTED","XOOPS data fundet i databasen.<br />Klik <em>næste</em> for at gå til næste trin." );
define("DATA_INSERTED","Foreløbige data er indsat i databasen.<br />Klik <em>næste</em> for at gå til næste trin." );


// %s is database name
define("DATABASE_CREATED","Databasen %s oprettet!" );
// %s is table name
define("TABLE_NOT_CREATED","Kunne ikke oprette tabel %s." );
define("TABLE_CREATED","Tabel %s oprettet." );
define("ROWS_INSERTED","%d data sat ind i tabel %s." );
define("ROWS_FAILED","Kunne ikke indsæte %d i tabeller %s." );
define("TABLE_ALTERED","Tabeller %s er opdateret.");
define("TABLE_NOT_ALTERED","Kunne ikke opdatere tabel %s.");
define("TABLE_DROPPED","Tabel %s er droppet.");
define("TABLE_NOT_DROPPED","Kunne ikke slette tabel %s.");

// Error messages
define("ERR_COULD_NOT_ACCESS","Kunne ikke få adgang til den angivne mappe. Kontroller at den findes og kan læses af serveren." );
define("ERR_NO_XOOPS_FOUND","Ingen XOOPS installation blev fundet i den angivne mappe." );
define("ERR_INVALID_EMAIL","Ugyldig e-mail" );
define("ERR_REQUIRED","Information er påkrævet.");
define("ERR_PASSWORD_MATCH","De to passwords er ikke ens" );
define("ERR_NEED_WRITE_ACCESS","Serveren skal have skriveadgang til følgende filer og mapper<br />(dvs. <em>chmod 777 mappe_navn</em> på UNIX/LINUX server)<br />Hvis de ikke er tilgængelige eller ikke er oprettet korrekt, så skal du manuelt oprette dem og tildele rettigheder." );
define("ERR_NO_DATABASE","Kunne ikke oprette databasen. Kontakt serverens administrator for detaljer." );
define("ERR_NO_DBCONNECTION","Kunne ikke forbinde til database serveren." );
define("ERR_WRITING_CONSTANT","Kunne ikke skrive værdien %s" );

define("ERR_COPY_MAINFILE","Kunne ikke kopierer distributionsfilen til mainfile.php" );
define("ERR_WRITE_MAINFILE","Kunne ikke skrive til mainfile.php. Kontroller at rettighederne på filen er korrekte (skrivbar) og prøv derefter igen.");
define("ERR_READ_MAINFILE","Kunne ikke åbne mainfile.php for læsning" );

define("ERR_INVALID_DBCHARSET","Tegnsætet '%s' er ikke understøttet." );
define("ERR_INVALID_DBCOLLATION","Tegnsæ '%s' er ikke supporteret." );
define("ERR_CHARSET_NOT_SET","Standard skrifttype er ikke sat til XOOPS database." );

define("_INSTALL_CHARSET","UTF-8");


define("SUPPORT","Supports");

define("LOGIN","Autentificering");
define("LOGIN_TITLE","Autentificering");
define("USER_LOGIN","Administrator Login" );
define("USERNAME","Brugernavn :");
define("PASSWORD","Password :");

define("ICONV_CONVERSION","Character set conversion");
define("ZLIB_COMPRESSION","Zlib Compression");
define("IMAGE_FUNCTIONS","Image functions");
define("IMAGE_METAS","Image meta data (exif)");
define("FILTER_FUNCTIONS","Filteringsfunctioner");

define("ADMIN_EXIST","Administratorskontoen findes allerede.<br />Klik <strong>næste</strong> for at gå til næste trin.");

define("CONFIG_SITE","Side opsæning" );
define("CONFIG_SITE_TITLE","Side konfiguration" );
define("MODULES","Modul installationer" );
define("MODULES_TITLE","Modul installation" );
define("THEME","Vælg theme" );
define("THEME_TITLE","Vælg dit standard theme" );

define("INSTALLED_MODULES","Følgende moduler blev installeret.<br />Klik <strong>næste</strong> for at gå til næste trin.");
define("NO_MODULES_FOUND","Ingen moduler fundet.<br />Klik <strong>næste</strong> for at gå til næste trin.");
define("NO_INSTALLED_MODULES","Ingen moduler installeret.<br />Klik <strong>næste</strong> for at gå til næste trin.");
define("INSTALLED_EXTENSION", "Følgende extensions er installeret.<br />Click <strong>næste</strong> for at gå til næste trin.");
define("NO_EXTENSION_FOUND", "Ingen extensions fundet.<br />click <strong>næste</strong> for at gå til næste trin.");
define("NO_INSTALLED_EXTENSION", "Ingen extension installeret.<br />Click <strong>næste</strong> for at gå til næste trin.");

define("THEME_NO_SCREENSHOT","Ingen screenshot fundet");

define("IS_VALOR"," => ");

// password message
define("PASSWORD_LABEL","Password styrke : ");
define("PASSWORD_DESC","Password ikke indtastet");
define("PASSWORD_GENERATOR","Password generering");
define("PASSWORD_GENERATE","Generer");
define("PASSWORD_COPY","Kopier");

define("PASSWORD_VERY_WEAK","Meget svagt");
define("PASSWORD_WEAK","Svagt");
define("PASSWORD_BETTER","Bedre");
define("PASSWORD_MEDIUM","Middel");
define("PASSWORD_STRONG","Stærkt");
define("PASSWORD_STRONGEST","Stærkest");

?>