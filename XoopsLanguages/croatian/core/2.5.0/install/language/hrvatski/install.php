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
 * @version     $Id: install.php 5478 2010-10-10 20:55:48Z forxoops $
 */

// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 21.1.2011.

define( "SHOW_HIDE_HELP", "Prikaži/sakri pomoćni tekst" );

// License
define('LICENSE_NOT_WRITEABLE', 'Licenca je %s . <br/><font style="colour:#ff0000">Postavite ../include/license.php za pisanje</font>');
define('LICENSE_IS_WRITEABLE', 'Licenca je %s');

// Configuration check page
define( "SERVER_API", "API Poslužitelja" );
define( "PHP_EXTENSION", "%s ekstenzije" );
define( "CHAR_ENCODING", "Enkodiranje znakova" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "Zahtjevi" );
define( "_PHP_VERSION", "PHP inačica" );
define( "RECOMMENDED_SETTINGS", "Preporučene postavke" );
define( "RECOMMENDED_EXTENSIONS", "Preporučene ekstenzije" );
define( "SETTING_NAME", "Ime postavki" );
define( "RECOMMENDED", "Preporučeno" );
define( "CURRENT", "Trenutno" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Ove ekstenzije nisu potrebne za normalno korištenje, ali mogu biti potrebne za
    korištenje nekih specifičnih mogućnosti (kao višejezičnost ili RSS podršku). Pa je stoga preporučeno da ih imate instalirane." );
define( "NONE", "Nema" );
define( "SUCCESS", "Uspješno" );
define( "WARNING", "Upozorenje" );
define( "FAILED", "Neuspješno" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS čarobnjak za instalaciju" );

define( "LANGUAGE_SELECTION", "Odabir jezika" );
define( "LANGUAGE_SELECTION_TITLE", "Izaberite svoj jezik");        // L128
define( "INTRODUCTION", "Upoznavanje" );
define( "INTRODUCTION_TITLE", "Dobro došli na XOOPS pomočnika za instalaciju" );        // L0
define( "CONFIGURATION_CHECK", "Provjera konfiguracije" );
define( "CONFIGURATION_CHECK_TITLE", "Provjeravam konfiguraciju vašeg poslužitelja" );
define( "PATHS_SETTINGS", "Postavke putanja" );
define( "PATHS_SETTINGS_TITLE", "Postavke putanja" );
define( "DATABASE_CONNECTION", "Povezivanje s bazom podataka" );
define( "DATABASE_CONNECTION_TITLE", "Povezivanje s bazom podataka" );
define( "DATABASE_CONFIG", "Postavke baze podataka" );
define( "DATABASE_CONFIG_TITLE", "Postavke baze podataka" );
define( "CONFIG_SAVE", "Spremanje postavki" );
define( "CONFIG_SAVE_TITLE", "Spremnanje postavki vašeg sustava" );
define( "TABLES_CREATION", "Stvaranje tablica" );
define( "TABLES_CREATION_TITLE", "Stvaranje tablica u bazi podataka" );
define( "INITIAL_SETTINGS", "Početne postavke" );
define( "INITIAL_SETTINGS_TITLE", "Molimo unesite početne postavke" );
define( "DATA_INSERTION", "Unos podataka" );
define( "DATA_INSERTION_TITLE", "Spremam vaše podatke u bazu podataka" );
define( "WELCOME", "Dobro došli" );
define( "WELCOME_TITLE", "Dobro došli na vaše XOOPS stranice" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS fizička putanja" );
define( "XOOPS_URLS", "Web lokacije" );

define( "XOOPS_ROOT_PATH_LABEL", "Početna fizička putanja XOOPS dokumenata" );
define( "XOOPS_ROOT_PATH_HELP", "Fizička putanja do XOOPS dokumenata (poslužiteljska) mapa BEZ završne kose crte" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS mapa biblioteka" );
define( "XOOPS_LIB_PATH_HELP", "Fizička putanja do XOOPS biblioteka BEZ završne kose crte, zbog kompatibilnisti prosljeđivanja. Odredite mapu izvan " . XOOPS_ROOT_PATH_LABEL . " da bi je osigurali.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS mapa datoteka" );
define( "XOOPS_DATA_PATH_HELP", "Fizička putanja do XOOPS mape datoteka (prava pisanja) BEZ završne kose crte, zbog kompatibilnosti prosljeđivanja. Odredite mapu izvan " . XOOPS_ROOT_PATH_LABEL . " da bi je osigurali." );

define( "XOOPS_URL_LABEL", "Lokacija web stranica (URL)" ); // L56
define( "XOOPS_URL_HELP", "Glavni URL koji će biti korišten za pristup vašoj XOOPS instalaciji" ); // L58

define( "LEGEND_CONNECTION", "Konekcija poslužitelja" );
define( "LEGEND_DATABASE", "Baza podataka" ); // L51

define( "DB_HOST_LABEL", "Ime hosta poslužitelja" );    // L27
define( "DB_HOST_HELP",  "Ime hosta baze podataka poslužitelja. Ako ste nesigurni, <em>localhost</em> najčešće radi"); // L67
define( "DB_USER_LABEL", "Ime korisnika" );    // L28
define( "DB_USER_HELP",  "Ime korisničkog računa koji će se koristiti za spajanje na bazu podataka poslužitelja"); // L65
define( "DB_PASS_LABEL", "Lozinka" );    // L52
define( "DB_PASS_HELP",  "Lozinka za korisnički račun vaše baze podataka"); // L68
define( "DB_NAME_LABEL", "Ime baze podataka" );    // L29
define( "DB_NAME_HELP",  "Ime baze podataka na hostu. Instalacija će pokušati stovriti bazu podataka ako ne postoji"); // L64
define( "DB_CHARSET_LABEL", "Set znakova baze podataka" );
define( "DB_CHARSET_HELP",  "MySQL uključuje podršku za set znakova što vam omogućava pohranu podataka koristeći raznovrsne setove znakova i usporedbu prema vrsti uspoređivanja.");
define( "DB_COLLATION_LABEL", "Usporedba baze podataka" );
define( "DB_COLLATION_HELP",  "Usporedba je set pravila za usporedbu znakova u setu znakova.");
define( "DB_PREFIX_LABEL", "Prefiks tablice" );    // L30
define( "DB_PREFIX_HELP",  "Ovaj će se prefiks dodati svim stvorenim tablicama kako bi se izbjegli konflikti u bazi podataka. Ako niste sigurni, ostavite zadano"); // L63
define( "DB_PCONNECT_LABEL", "Koristi stalnu vezu" );    // L54
define( "DB_PCONNECT_HELP",  "Zadano je 'NE'. Izaberite 'NE' ako niste sigurni"); // L69
define( "DB_DATABASE_LABEL", "Baza podataka" );

define( "LEGEND_ADMIN_ACCOUNT", "Administratorski račun" );
define( "ADMIN_LOGIN_LABEL", "Admin prijava" ); // L37
define( "ADMIN_EMAIL_LABEL", "Admin e-mail" ); // L38
define( "ADMIN_PASS_LABEL", "Admin lozinka" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Potvrdite lozinku" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Prethodno" ); // L42
define( "BUTTON_NEXT", "Sljedeće" ); // L47

// Messages
define( "XOOPS_FOUND", "%s pronađeno" );
define( "CHECKING_PERMISSIONS", "Provjeravam prava nad datotekama i mapama..." ); // L82
define( "IS_NOT_WRITABLE", "u %s se ne može pisati." ); // L83
define( "IS_WRITABLE", "u %s se može pisati." ); // L84

define( "XOOPS_PATH_FOUND", "Pronađena putanja." );

define( "READY_CREATE_TABLES", "XOOPS tablice nisu pronađene.<br />Instalacija je spremna za stvaranje Xoops sustavnih tablica.<br />Stisnite <em>Sljedeće</em> za nastavak." );
define( "XOOPS_TABLES_FOUND", "XOOPS sustavske tablice već postoje u vašoj bazi podataka.<br />Stisnite <em>Sljedeće</em> da bi prešli na sljedeći korak." ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS sustavske tablice su kreirane.<br />Stisnite <em>Sljedeće</em> da bi prešli na sljedeći korak." );
define( "READY_INSERT_DATA", "Instalacija je spremna za ubacivanje početnih podataka u vašu bazu." );
define( "READY_SAVE_MAINFILE", "Instalacija je spremna spremiti određene postavke u <em>mainfile.php</em>.<br />Stisnite <em>Sljedeće</em> za nastavak." );
define( "SAVED_MAINFILE", "Postavke su spremljene u mainfile.php" );
define( "SAVED_MAINFILE_MSG", "Instalacija je spremila određene postavke u <em>mainfile.php</em> i <em>secure.php</em>. Stisnite <em>Sljedeće</em> da bi prešli na sljedeći korak." );
define( "DATA_ALREADY_INSERTED", "Pronađeni su XOOPS podaci u bazi podataka.<br />Stisnite <em>Sljedeće</em> da bi prešli na sljedeći korak." );
define( "DATA_INSERTED", "Početni podaci su unešeni u bazu podataka.<br />Stisnite <em>Sljedeće</em> da bi prešli na sljedeći korak." );


// %s is database name
define( "DATABASE_CREATED", "Baza podataka %s je stvoreno!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Ne mogu stvoriti tablicu %s" ); // L118
define( "TABLE_CREATED", "Tablica %s će biti stvorena." ); // L45
define( "ROWS_INSERTED", "%d unosa ubačeno u tablicu %s." ); // L119
define( "ROWS_FAILED", "Neuspjelo ubacivanje %d unosa u tablicu %s." ); // L120
define( "TABLE_ALTERED", "Tablica %s je ažurirana."); // L133
define( "TABLE_NOT_ALTERED", "Neuspjelo ažuriranje tablice %s."); // L134
define( "TABLE_DROPPED", "Tablica %s je obrisana."); // L163
define( "TABLE_NOT_DROPPED", "Neuspjelo brisanje tablice %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "Ne mogu pristupiti određenoj mapi. Molimo provjerite da li postoji i da je omogućeno pisanje od strane poslužitelja." );
define( "ERR_NO_XOOPS_FOUND", "Nije pronađena XOOPS instalacija u određenoj mapi." );
define( "ERR_INVALID_EMAIL", "Nevaljani email" ); // L73
define( "ERR_REQUIRED", "Potrebna je informacija." ); // L41
define( "ERR_PASSWORD_MATCH", "Dvije lozinke se ne podudaraju" );
define( "ERR_NEED_WRITE_ACCESS", "Poslužitelju se mora omogućiti prava za pisanje sljedećim datotekama i mapama<br />(npr. <em>chmod 777 directory_name</em> na UNIX/LINUX poslužitelju)<br />Ako nisu dostupne ili nisu ispravno stvorene, molimo stvorite ih ručno i postavite ispravna prava." );
define( "ERR_NO_DATABASE", "Ne mogu stvoriti bazu podataka. Kontaktirajte administratora poslužitelja za detalje." ); // L31
define( "ERR_NO_DBCONNECTION", "Ne mogu se spojiti na bazu podataka na poslužitelju." ); // L106
define( "ERR_WRITING_CONSTANT", "Neuspjelo zapisivanje konstante %s." ); // L122

define( "ERR_COPY_MAINFILE", "Ne mogu kopirati distribucijsku datoteku u mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Ne mogu zapisivati u mainfile.php. Provjerite prava nad datotekom i probajte ponovo.");
define( "ERR_READ_MAINFILE", "Ne mogu otvoriti mainfile.php za čitanje" );

define( "ERR_INVALID_DBCHARSET", "Set znakova '%s' nije podržan." );
define( "ERR_INVALID_DBCOLLATION", "Usporedba '%s' nije podržana." );
define( "ERR_CHARSET_NOT_SET", "Zadani set znakova nije postavljen za XOOPS bazu podataka." );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "Podrške");

define( "LOGIN", "Autentikacija");
define( "LOGIN_TITLE", "Autentikacija");
define( "USER_LOGIN", "Administratorska prijava" );
define( "USERNAME", "Korisničko ime :");
define( "PASSWORD", "Lozinka :");

define( "ICONV_CONVERSION", "Pretvaranje znakovnog seta");
define( "ZLIB_COMPRESSION", "Zlib kompresija");
define( "IMAGE_FUNCTIONS", "Funkcije za slike");
define( "IMAGE_METAS", "Meta podaci slika (exif)");

define( "ADMIN_EXIST", "Administratorski račun već postoji.<br />Pritisnite <strong>Sljedeće</strong> da bi išli na sljedeći korak.");

define( "CONFIG_SITE", "Postavke stranica" );
define( "CONFIG_SITE_TITLE", "Postavke stranica" );
define( "MODULES", "Instalacija modula" );
define( "MODULES_TITLE", "Instalacija modula" );
define( "THEME", "Odabir teme" );
define( "THEME_TITLE", "Izaberite zadanu temu" );

define( "INSTALLED_MODULES", "Sljedeći moduli su instalirani.<br />Pritisnite <strong>Sljedeće</strong> da bi išli na sljedeći korak.");
define( "NO_MODULES_FOUND", "Nema pronađenih modula.<br />Pritisnite <strong>Sljedeće</strong> da bi išli na sljedeći korak.");
define( "NO_INSTALLED_MODULES", "Nema instaliranih modula.<br />Pritisnite <strong>Sljedeće</strong> da bi išli na sljedeći korak.");

define( "THEME_NO_SCREENSHOT", "Nema pronađenih snimljenih slika zaslona");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "Jačina lozinke : ");
define( "PASSWORD_DESC", "Lozinka nije unešena");
define( "PASSWORD_GENERATOR", "Generator lozinke");
define( "PASSWORD_GENERATE", "Stvori");
define( "PASSWORD_COPY", "Kopiraj");

define( "PASSWORD_VERY_WEAK", "Vrlo slabo");
define( "PASSWORD_WEAK", "Slabo");
define( "PASSWORD_BETTER", "Bolje");
define( "PASSWORD_MEDIUM", "Osrednje");
define( "PASSWORD_STRONG", "Jako");
define( "PASSWORD_STRONGEST", "Vrlo jako");
?>