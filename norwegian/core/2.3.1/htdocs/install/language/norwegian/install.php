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

define("SHOW_HIDE_HELP","Vis/skjul hjelpetekst" );

// Configuration check page
define("SERVER_API","Server API" );
define("PHP_EXTENSION","%s utvidelser" );
define("CHAR_ENCODING","Tegnsett" );
define("XML_PARSING","XML parsing" );
define("REQUIREMENTS","Krav" );
define("_PHP_VERSION","PHP version" );
define("RECOMMENDED_SETTINGS","Anbefalte innstillinger" );
define("RECOMMENDED_EXTENSIONS","Anbefalte utvidelser" );
define("SETTING_NAME","Innstilling navn" );
define("RECOMMENDED","Anbefalt" );
define("CURRENT","Nåværende" );
define("RECOMMENDED_EXTENSIONS_MSG","Disse utvidelser er ikke nødvendige til normalt bruk, men kan være nødvendige for noen spesielle muligheter, som multi-språk eller RSS-støtte. Derfor anbefales det å installere dem." );
define("NONE","Ingen" );
define("SUCCESS","Suksess" );
define("WARNING","Advarsel" );
define("FAILED","Feilet" );



// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS installasjonsguide" );

define("LANGUAGE_SELECTION","Språkvalg" );
define("LANGUAGE_SELECTION_TITLE","Velg ditt språk");        // L128
define("INTRODUCTION","Innledning" );
define("INTRODUCTION_TITLE","Velkommen til XOOPS installasjons-assistent" );        // L0
define("CONFIGURATION_CHECK","Konfigurasjonssjekk" );
define("CONFIGURATION_CHECK_TITLE","Kontrollerer din server konfigurasjon" );
define("PATHS_SETTINGS","Mappe innstillinger" );
define("PATHS_SETTINGS_TITLE","Mappe innstillinger" );
define("DATABASE_CONNECTION","Database forbindelse" );
define("DATABASE_CONNECTION_TITLE","Database forbindelse" );
define("DATABASE_CONFIG","Database konfigurasjon" );
define("DATABASE_CONFIG_TITLE","Database konfigurasjon" );
define("CONFIG_SAVE","Lagre konfigurasjon" );
define("CONFIG_SAVE_TITLE","Lagrer din system konfigurasjon" );
define("TABLES_CREATION","Tabell opprettelse" );
define("TABLES_CREATION_TITLE","Database tabell opprettelse" );
define("INITIAL_SETTINGS","Første innstillinger" );
define("INITIAL_SETTINGS_TITLE","Inntast dine første innstillinger" );
define("DATA_INSERTION","Data innsettelse" );
define("DATA_INSERTION_TITLE","Lagrer dine innstillinger i databasen" );
define("WELCOME","Velkommen" );
define("WELCOME_TITLE","Velkommen til din XOOPS hjemmeside" );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS Fysiske stier" );
define("XOOPS_URLS","Websted" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS fysiske sti" );
define("XOOPS_ROOT_PATH_HELP","Fysiske sti til XOOPS, uten skråstrek" );

define("XOOPS_LIB_PATH_LABEL","XOOPS bibliotek" );
define("XOOPS_LIB_PATH_HELP","Fysiske sti til XOOPS bibliotek mappe, uten skråstreg, til fremtidig bruk. Plasser mappen utenfor " . XOOPS_ROOT_PATH_LABEL . " for å sikre den.");
define("XOOPS_DATA_PATH_LABEL","XOOPS datafil bibliotek" );
define("XOOPS_DATA_PATH_HELP","Fysiske sti til XOOPS datafiler (skrivbar), uten skråstek, til fremtidig bruk. Plasser mappen utenfor " . XOOPS_ROOT_PATH_LABEL . " for å sikre den." );

define("XOOPS_URL_LABEL","Hjemmeside plassering (URL)" ); // L56
define("XOOPS_URL_HELP","Hoved-webadresse, som vil bli brukt til å få adgang til din XOOPS installasjon" ); // L58

define("LEGEND_CONNECTION","Server-forbindelse" );
define("LEGEND_DATABASE","Database" ); // L51

define("DB_HOST_LABEL","Database hostname" );    // L27
define("DB_HOST_HELP",  "Hostname på database serveren. Hvis du er usikker vil, <em>localhost</em> virke i de fleste tilfeller" ); // L67
define("DB_USER_LABEL","Database  brukernavn" );    // L28
define("DB_USER_HELP",  "Din bruger konto's navn på database serveren"); // L65
define("DB_PASS_LABEL","Passord" );    // L52
define("DB_PASS_HELP",  "Passord til din konto på database serveren"); // L68
define("DB_NAME_LABEL","Database navn" );    // L29
define("DB_NAME_HELP",  "Navnet på den database som ligger på database serveren. Installasjonsguiden vil prøve å opprette en database hvis den ikke eksisterer"); // L64
define("DB_CHARSET_LABEL","Database tegnsett" );
define("DB_CHARSET_HELP",  "MySQL omfatter tegnsett støtte, som gir deg mulighet til å lagre data ved hjelp af en rekke forskellige tegnsett og foreta sammenligninger i henhold til en rekke sammenstillinger.");
define("DB_COLLATION_LABEL","Database sammenstilling" );
define("DB_COLLATION_HELP",  "En samling er et sett regler for å sammenligne tegn i et tegnsett.");
define("DB_PREFIX_LABEL","Table prefiks" );    // L30This prefix will be added to all new tables created to avoid name conflicts in th
define("DB_PREFIX_HELP",  "Prefiksen vil bli tilknyttet alle nye tabeller for å unngå navnekonflikt i databasen. Hvis du er usikker, så bruk det som XOOPS forslår."); // L63
define("DB_PCONNECT_LABEL","Bruk persistent (vedvarende) forbindelse?" );    // L54
define("DB_PCONNECT_HELP",  "Standard er NEI. Velg NEI hvis du er usikker."); // L69
define("DB_DATABASE_LABEL","Database" );

define("LEGEND_ADMIN_ACCOUNT","Administrator konto" );
define("ADMIN_LOGIN_LABEL","Admin login" ); // L37
define("ADMIN_EMAIL_LABEL","Admin epost" ); // L38
define("ADMIN_PASS_LABEL","Admin passord" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","Bekreft passord" ); // L74

// Buttons
define("BUTTON_PREVIOUS","Tilbake" ); // L42
define("BUTTON_NEXT","Neste" ); // L47

// Messages
define("XOOPS_FOUND","%s funnet" );
define("CHECKING_PERMISSIONS","Sjekker fil og mapperettigheter.." ); // L82
define("IS_NOT_WRITABLE","%s er IKKE skrivbar.." ); // L83
define("IS_WRITABLE","%s er skrivbar." ); // L84

define("XOOPS_PATH_FOUND","Sti funnet." );

define("READY_CREATE_TABLES","Ingen XOOPS system tabeller ble funnet.<br />Installasjonsprogrammet er nå klar til å lage dine XOOPS system tabeller.<br />Klikk <em>neste</em> for å fortsette." );
define("XOOPS_TABLES_FOUND","XOOPS system tabeller eksisterer allerede i din database.<br />Klikk <em>neste</em> for å fortsette." ); // L131
define("XOOPS_TABLES_CREATED","XOOPS system tabeller ble opprettet.<br />Klikk <em>neste</em> for å fortsette." );
define("READY_INSERT_DATA","Installasjonsprogrammet er nå klar til å innsette første data i din database." );
define("READY_SAVE_MAINFILE","Installasjonsprogrammet er nå klar til å lagre de angitte innstillinger i <em>mainfile.php</em>.<br />Klikk <em>neste</em> for å fortsette." );
define("SAVED_MAINFILE","Lagrer innstillinger i mainfile.php" );
define("SAVED_MAINFILE_MSG","Installasjonsprogrammet har lagret de angitte innstillinger i <em>mainfile.php</em>. Klikk <em>neste</em> for å fortsette." );
define("DATA_ALREADY_INSERTED","XOOPS data ble funnet i databasen.<br />Klikk <em>neste</em> for å fortsette." );
define("DATA_INSERTED","De første data er blitt innsatt i databasen.<br />Klikk <em>neste</em> for å fortsette." );

// %s is database name
define("DATABASE_CREATED","Databasen %s opprettet!" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","Kunne ikke opprette tabell %s." ); // L118
define("TABLE_CREATED","Tabeller %s opprettet." ); // L45
define("ROWS_INSERTED","%d data satt inn i tabell %s." ); // L119
define("ROWS_FAILED","Kunne ikke innsette %d data i %s." ); // L120
define("TABLE_ALTERED","Tabeller %s er oppdateret." ); // L133
define("TABLE_NOT_ALTERED","Kunne ikke oppdatere tabell %s."); // L134
define("TABLE_DROPPED","Tabell %s er droppet." ); // L163
define("TABLE_NOT_DROPPED","Kunne ikke slette tabell %s." ); // L164
// Error messages
define("ERR_COULD_NOT_ACCESS","Kunne ikke få adgang til den angitte mappe. Kontroller, at den finnes og kan leses av serveren." );
define("ERR_NO_XOOPS_FOUND","Ingen XOOPS installasjon kunne finnes i angitte mappe." );
define("ERR_INVALID_EMAIL","Ugyldig epost" ); // L73
define("ERR_REQUIRED","Gå tilbake og inntast all påkrevd informasjon." ); // L41
define("ERR_PASSWORD_MATCH","De to passordene er ikke like" );
define("ERR_NEED_WRITE_ACCESS","Serveren skal ha skriveadgang til følgende filer og mapper<br />(i.e. <em>chmod 777 directory_name</em> på UNIX/LINUX server)<br />Hvis de ikke finnes eller ikke er opprettet korrekt, skal du opprette manuelt og sette korrekte tillatelser." );
define("ERR_NO_DATABASE","Kunne ikke opprette databasen. Kontakt administratoren av serveren for detaljer." ); // L31
define("ERR_NO_DBCONNECTION","Kunne ikke forbinde til database-serveren." ); // L106
define("ERR_WRITING_CONSTANT","Kunne ikke skrive verdien %s." ); // L122

define("ERR_COPY_MAINFILE","Kunne ikke kopiere distribution fil til mainfile.php" );
define("ERR_WRITE_MAINFILE","Kunne ikke skrive til mainfile.php. Kontroller filens tillatelse og prøv igjen.");
define("ERR_READ_MAINFILE","Kunne ikke åpne mainfile.php til lesing" );

define("ERR_INVALID_DBCHARSET","Tegnsettet '%s' er ikke understøttet." );
define("ERR_INVALID_DBCOLLATION","Collation '%s' er ikke understøttet." );
define("ERR_CHARSET_NOT_SET","Standard tegnsett ikke er innstilt til XOOPS database." );

//



define("_INSTALL_CHARSET","UTF-8");
?>