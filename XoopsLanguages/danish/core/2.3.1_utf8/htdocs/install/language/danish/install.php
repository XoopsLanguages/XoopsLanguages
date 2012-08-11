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
 * @version     $Id: install.php 1512 2008-04-27 10:43:45Z phppp $
 */

define("SHOW_HIDE_HELP","Vis/skjul hjælpe tekst" );


// Configuration check page
define("SERVER_API","Server API" );
define("PHP_EXTENSION","%s udvidelser" );
define("CHAR_ENCODING","Tegnsæt" );
define("XML_PARSING","XML analysere" );
define("REQUIREMENTS","Krav " );
define("_PHP_VERSION","PHP version" );
define("RECOMMENDED_SETTINGS","Anbefalede indstillinger" );
define("RECOMMENDED_EXTENSIONS","Anbefalede udvidelser" );
define("SETTING_NAME","Indstillingsnavn" );
define("RECOMMENDED","Anbefalet" );
define("CURRENT","Nuværende" );
define("RECOMMENDED_EXTENSIONS_MSG","Disse udvidelser er ikke et krav til normalt brug, men kan være nødvendige for at udnytte 
    nogle specifikke muligheder (som multi-sprog eller RSS-støtte). anbefales det at få dem installeret." );
define("NONE","Ingen" );
define("SUCCESS","Succes " );
define("WARNING","Advarsel" );
define("FAILED","Fejlet" );

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS installationsguiden" );

define("LANGUAGE_SELECTION","Sprog valg" );
define("LANGUAGE_SELECTION_TITLE","Vælg sprog");        // L128
define("INTRODUCTION","Introduktion " );
define("INTRODUCTION_TITLE","Velkommen til XOOPS installationsassistent." );        // L0
define("CONFIGURATION_CHECK","Konfigurations check" );
define("CONFIGURATION_CHECK_TITLE","Kontrollerer din servers konfiguration" );
define("PATHS_SETTINGS","Sti indstillinger" );
define("PATHS_SETTINGS_TITLE","Sti indstillinger" );
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
define("DATA_INSERTION","Data indsættelse" );
define("DATA_INSERTION_TITLE","Gemmer dine indstillinger i databasen" );
define("WELCOME","Velkommen" );
define("WELCOME_TITLE","Velkommen til din XOOPS side" );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS fysiske sti" );
define("XOOPS_URLS","Web-steder" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS root fysiske sti" );
define("XOOPS_ROOT_PATH_HELP","Fysisk sti til XOOPS dokumenter (serveres) mappe UDEN skråstreg" );

define("XOOPS_LIB_PATH_LABEL","XOOPS biblioteks mappe" );
define("XOOPS_LIB_PATH_HELP","Fysisk sti til XOOPS biblioteket UDEN skråstreg, for fremtidig kompatibilitet. Hvis muligt, placer foldere uden for " . XOOPS_ROOT_PATH_LABEL . " for øget sikkerhed.");
define("XOOPS_DATA_PATH_LABEL","XOOPS datafil mappe" );
define("XOOPS_DATA_PATH_HELP","Fysisk sti til XOOPS datafiler (skrivbar) mappe UDEN skråstreg, for fremtidig kompatibilitet. Hvis muligt, placer foldere uden for " . XOOPS_ROOT_PATH_LABEL . " for øget sikkerhed." );

define("XOOPS_URL_LABEL","Website placering (URL)" ); // L56
define("XOOPS_URL_HELP","Adresse til XOOPS , som vil blive brugt til at få adgang til din XOOPS-side" ); // L58

define("LEGEND_CONNECTION","Server forbindelse" );
define("LEGEND_DATABASE","Database" ); // L51

define("DB_HOST_LABEL","Server hostname" );    // L27
define("DB_HOST_HELP",  "værtsnavnet på den database server. Hvis du er usikker, <em> localhost </ em> værker i de fleste tilfælde"); // L67
define("DB_USER_LABEL","Bruger navn" );    // L28
define("DB_USER_HELP",  "Din brugerkonto, der vil blive anvendt til at forbinde til database-serveren"); // L65
define("DB_PASS_LABEL","Password" );    // L52
define("DB_PASS_HELP",  "Password til din konto på database brugerkonto"); // L68
define("DB_NAME_LABEL","Database navn" );    // L29
define("DB_NAME_HELP",  "Navnet på databasen på værten. Installationsprogrammet vil forsøge at oprette den database, hvis ikke eksisterer"); // L64
define("DB_CHARSET_LABEL","Database tegnsæt" );
define("DB_CHARSET_HELP",  "MySQL version 4.12 omfatter tegnsæt støtte. som giver dig mulighed for at lagre data ved hjælp af en række forskellige tegnsæt og foretage sammenligninger i henhold til en række collations.");
define("DB_COLLATION_LABEL","Database indsamling" );
define("DB_COLLATION_HELP",  "En samling er et sæt regler for at sammenligne tegn i et tegnsæt.");
define("DB_PREFIX_LABEL","Tabel præfiks" );    // L30
define("DB_PREFIX_HELP",  "Dette præfiks vil blive tilføjet alle nye tabeller i databasen. Dette gøres for at undgå navnesammenfald i databasen. Hvis du er usikker, så bare behold standardværdien"); // L63
define("DB_PCONNECT_LABEL","Brug vedvarende forbindelse?" );    // L54
define("DB_PCONNECT_HELP",  "Standard er 'NEJ'. Vælg 'NEJ' hvis du er usikker"); // L69
define("DB_DATABASE_LABEL","Database" );
define("LEGEND_ADMIN_ACCOUNT","Administrator konto" );
define("ADMIN_LOGIN_LABEL","Administrator login" ); // L37
define("ADMIN_EMAIL_LABEL","Administrator e-mail" ); // L38
define("ADMIN_PASS_LABEL","Administrator password" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","Bekræft password" ); // L74

// Buttons
define("BUTTON_PREVIOUS","Forrige" ); // L42
define("BUTTON_NEXT","Næste" ); // L47

// Messages
define("XOOPS_FOUND","%s fundet" );
define("CHECKING_PERMISSIONS","Tjek fil og mappe tilladelser.." ); // L82
define("IS_NOT_WRITABLE","%s er ikke skrivbar." ); // L83
define("IS_WRITABLE","%s er skrivbar." ); // L84

define("XOOPS_PATH_FOUND","Mappe fundet." );

define("READY_CREATE_TABLES","Ingen XOOPS tabeller fundet.<br />Installationsprogrammet er nu klar til at oprette XOOPS system tabeller.<br />Klik <em>næste</em> for at fortsætte." );
define("XOOPS_TABLES_FOUND","Tabeler til XOOPS eksistere allerede i din database..<br />Klik <em>næste</em> for at gå til næste trin." ); // L131
define("XOOPS_TABLES_CREATED","XOOPS system tabeller blev oprettet.<br />Klik <em>næste</em> for at gå til næste trin." );
define("READY_INSERT_DATA","Installationsprogrammet er nu klar til at indsætte foreløbige data ind i din database." );
define("READY_SAVE_MAINFILE","Installationsprogrammet er nu klar til at gemme de indtastede oplysninger i <em>mainfile.php</em>.<br />Klik <em>næste</em> for at fortsætte." );
define("SAVED_MAINFILE","Gemt indstillinger i mainfile.php" );
define("SAVED_MAINFILE_MSG","Installationsprogrammet har gemt indstillingerne i <em>mainfile.php</em>. Klik <em>næste</em> for at gå til næste trin." );
define("DATA_ALREADY_INSERTED","XOOPS data fundet i databasen.<br />Klik <em>næste</em> for at gå til næste trin." );
define("DATA_INSERTED","Foreløbige data er indsat i databasen.<br />Klik <em>næste</em> for at gå til næste trin." );


// %s is database name
define("DATABASE_CREATED","Databasen %s oprettet!" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","Kunne ikke oprette tabel %s." ); // L118
define("TABLE_CREATED","Tabel %s oprettet." ); // L45
define("ROWS_INSERTED","%d data sat ind i tabel %s." ); // L119
define("ROWS_FAILED","Kunne ikke indsætte %d i tabeller %s." ); // L120
define("TABLE_ALTERED","Tabeller %s er opdateret."); // L133
define("TABLE_NOT_ALTERED","Kunne ikke opdatere tabel %s."); // L134
define("TABLE_DROPPED","Tabel %s er droppet."); // L163
define("TABLE_NOT_DROPPED","Kunne ikke slette tabel %s."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","Kunne ikke få adgang til den angivne mappe. Kontroller at den findes og kan læses af serveren." );
define("ERR_NO_XOOPS_FOUND","Ingen XOOPS installation blev fundet i den angivne mappe." );
define("ERR_INVALID_EMAIL","Ugyldig e-mail" ); // L73
define("ERR_REQUIRED","Information er påkrævet.");  // L41
define("ERR_PASSWORD_MATCH","De to passwords er ikke ens" );
define("ERR_NEED_WRITE_ACCESS","Serveren skal have skriveadgang til følgende filer og mapper<br />(dvs. <em>chmod 777 mappe_navn</em> på UNIX/LINUX server)<br />Hvis de ikke er tilgængelige eller ikke er oprettet korrekt, så skal du manuelt oprette dem og tildele rettigheder." );
define("ERR_NO_DATABASE","Kunne ikke oprette databasen. Kontakt serverens administrator for detaljer." ); // L31
define("ERR_NO_DBCONNECTION","Kunne ikke forbinde til database serveren." ); // L106
define("ERR_WRITING_CONSTANT","Kunne ikke skrive værdien %s" ); // L122

define("ERR_COPY_MAINFILE","Kunne ikke kopierer distributionsfilen til mainfile.php" );
define("ERR_WRITE_MAINFILE","Kunne ikke skrive til mainfile.php. Kontroller at rettighederne på filen er korrekte (skrivbar) og prøv derefter igen.");
define("ERR_READ_MAINFILE","Kunne ikke åbne mainfile.php for læsning" );

define("ERR_INVALID_DBCHARSET","Tegnsættet '%s' er ikke understøttet." );
define("ERR_INVALID_DBCOLLATION","Tegnsæt '%s' er ikke supporteret." );
define("ERR_CHARSET_NOT_SET","Standard skrifttype er ikke sat til XOOPS database." );

//

define("_INSTALL_CHARSET","UTF-8");
?>