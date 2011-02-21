<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    hr
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 5580 2010-10-21 19:38:48Z forxoops $
 * Translator: XoopsHR.org / Ivan Kosak / 28.1.2011.
 */

// Navigation
define("_AM_SYSTEM_MODULES_ADMIN", "Administracija modula");
define("_AM_SYSTEM_MODULES_LIST", "Popis modula");
define("_AM_SYSTEM_MODULES_TOINSTALL", "Instalacija modula");
define("_AM_SYSTEM_MODULES_VALIDATE","Ovjeravanje promjena");
define("_AM_SYSTEM_MODULES_SUBMITRES","Potvrdi promjene");

// Messages
define("_AM_SYSTEM_MODULES_RUSUREINS","Pritisnite donju tipku za instalaciju ovog modula");
define("_AM_SYSTEM_MODULES_RUSUREUNINS","Da li sigurno želite deinstalirati ovaj modul?");
define("_AM_SYSTEM_MODULES_RUSUREUPD","Pritisni donju tipku da bi ažurirali ovaj modul");
define("_AM_SYSTEM_MODULES_BTOMADMIN","Nazad na stranicu Administracija modula");
define("_AM_SYSTEM_MODULES_INSTALLING","Instaliram ");
define("_AM_SYSTEM_MODULES_UNINSTAL","Deinstaliram ");
define("_AM_SYSTEM_MODULES_DEACTIVATE","Deaktiviraj ");
define("_AM_SYSTEM_MODULES_ACTIVATE","Aktiviraj ");
define("_AM_SYSTEM_MODULES_UPDATING","Ažuriram ");

// Main
define("_AM_SYSTEM_MODULES_INSTALL","Instalacija");
define("_AM_SYSTEM_MODULES_UNINSTALL","Deinstalacija");
define("_AM_SYSTEM_MODULES_UPDATE","Ažuriranje");
define("_AM_SYSTEM_MODULES_VIEWLARGE","Veliki pogled");
define("_AM_SYSTEM_MODULES_VIEWLINE","Linijski pogled");

// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS","Ne mogu istalirati %s.");
define("_AM_SYSTEM_MODULES_FAILACT","Ne mogu aktivirati %s.");
define("_AM_SYSTEM_MODULES_FAILDEACT","Ne mogu deaktivirati %s.");
define("_AM_SYSTEM_MODULES_FAILUPD","Ne mogu ažurirati %s.");
define("_AM_SYSTEM_MODULES_FAILUNINS","Ne mogu deinstalirati %s.");
define("_AM_SYSTEM_MODULES_FAILORDER","Ne mogu promijeniti redosljed %s.");
define("_AM_SYSTEM_MODULES_FAILWRITE","Ne mogu zapisati u glavni izbornik.");
define("_AM_SYSTEM_MODULES_ALEXISTS","Modul %s već postoji.");
define("_AM_SYSTEM_MODULES_ERRORSC","Greške:");
define("_AM_SYSTEM_MODULES_OKINS","Modul %s je uspješno instaliran.");
define("_AM_SYSTEM_MODULES_OKACT","Modul %s je uspješno aktiviran.");
define("_AM_SYSTEM_MODULES_OKDEACT","Modul %s je uspješno deaktiviran.");
define("_AM_SYSTEM_MODULES_OKUPD","Modul %s je uspješno ažuriran.");
define("_AM_SYSTEM_MODULES_OKUNINS","Modul %s je uspješno deinstaliran.");
define("_AM_SYSTEM_MODULES_OKORDER","Modul %s je uspješno promijenjen.");

define("_AM_SYSTEM_MODULES_MODULE","Modul");
define("_AM_SYSTEM_MODULES_VERSION","Inačica");
define("_AM_SYSTEM_MODULES_LASTUP","Zadnje ažuriranje");
define("_AM_SYSTEM_MODULES_DEACTIVATED","Deaktiviran");
define("_AM_SYSTEM_MODULES_ACTION","Akcija");
define("_AM_SYSTEM_MODULES_MENU","Izbornik");
define("_AM_SYSTEM_MODULES_HIDE","Sakri");
define("_AM_SYSTEM_MODULES_SHOW","Prikaži");

define("_AM_SYSTEM_MODULES_DUPEN","Duplicate entry in modules table!");
define("_AM_SYSTEM_MODULES_DEACTED","Izabrani modul je deaktiviran. Sada možete slobodno deinstalirarti modul.");
define("_AM_SYSTEM_MODULES_ACTED","Izabrani modul je aktiviran!");
define("_AM_SYSTEM_MODULES_UPDTED","Izabrani modul je ažuriran!");
define("_AM_SYSTEM_MODULES_SYSNO","Sustavski modul se ne može deaktivirati.");
define("_AM_SYSTEM_MODULES_STRTNO","Ovaj modul je postavljen na početnu stranicu. Molimo da promjenite početni modul da bi ga mogli deaktivirati.");

define("_AM_SYSTEM_MODULES_ORDER","Redoslijed");
define("_AM_SYSTEM_MODULES_ORDER0","(0 = sakriven)");
define("_AM_SYSTEM_MODULES_ACTIVE","Aktivan");
define("_AM_SYSTEM_MODULES_INACTIVE","Neaktivan");
define("_AM_SYSTEM_MODULES_NOTINSTALLED","Nije instaliran");
define("_AM_SYSTEM_MODULES_NOCHANGE","Nema promjene");
define("_AM_SYSTEM_MODULES_SUBMIT","Potvrdi");
define("_AM_SYSTEM_MODULES_CANCEL","Poništi");
define("_AM_SYSTEM_MODULES_DBUPDATE",_AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_MODULES_LISTUPBLKS","Slijedeći blokovi će biti ažurirani.<br />Izaberite blokove čiji sadržaj (prijedlošci i opcije) može biti prepisan.<br />");
define("_AM_SYSTEM_MODULES_NEWBLKS","Novi blokovi");
define("_AM_SYSTEM_MODULES_DEPREBLKS","Neodobreni blokovi");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED","%s je rezervirana tablica!");
define("_AM_SYSTEM_MODULES_CREATE_TABLES","Stvaram tablice...");
define("_AM_SYSTEM_MODULES_TABLE_CREATED","Tablica %s je stvorena");
define("_AM_SYSTEM_MODULES_INSERT_DATA","&nbsp;&nbsp; Podaci su ubačeni u tablicu %s");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD","Ne mogu ubaciti %s u bazu podataka.");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE","Podaci modula su uspješno ubačeni.");
define("_AM_SYSTEM_MODULES_MODULEID"," ID modula: %s");
define("_AM_SYSTEM_MODULES_SQL_FOUND","SQL datoteka pronađena na %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND","SQL datoteka nije pronađena na %s");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE","GREŠKA: Ne mogu stvoriti %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID","%s nije valjan SQL!");
define("_AM_SYSTEM_MODULES_GROUP_ID"," ID grupe: %s ");
define("_AM_SYSTEM_MODULES_NAME"," Ime: ");
define("_AM_SYSTEM_MODULES_VALUE"," Vrijednost: ");

// Templates
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD","Dodajem predloške...");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE","Brišem predloške...");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE","Ažuriram predloške...");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID","ID predloška: %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA","Predložak %s je dodan u bazu podataka");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR","GREŠKA: Ne mogu ubaciti predložak %s u bazu podataka.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED","Predložak %s je kompajliran ");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED","GREŠKA: Kompajliranje predloška %s nije uspjelo");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA","Predložak %s je izbrisan iz baze podataka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD","GREŠKA: Ne mogu obrisati predložak %s iz baze podataka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA","Predložak %s je ubačen u bazu podataka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE","Predložak %s je rekompajliran");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD","GREŠKA: Rekompajliranje predloška %s nije uspjelo");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR","GREŠKA: Ne mogu rekompajlirati predložak %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR","GREŠKA: Ne mogu obrisati stari predložak %s. Prekidam ažuriranje ove datoteke. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE","Predložak %s je ažuriran. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR","GREŠKA: Ne mogu ažurirati %s predložak. ");

// Blocks
define("_AM_SYSTEM_MODULES_BLOCKS_ADD","Dodajem blokove...");
define("_AM_SYSTEM_MODULES_BLOCKS_DELETE","Brišem blokove...");
define("_AM_SYSTEM_MODULES_BLOCKS_REBUILD","Ponovo stvaram blokove...");
define("_AM_SYSTEM_MODULES_BLOCK_ID"," ID bloka: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS","Dodana prava pristupa za blok");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR","GREŠKA: Ne mogu dodati pristupna prava za blok");
define("_AM_SYSTEM_MODULES_BLOCK_ADD","Blok %s je dodan ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR","GREŠKA: Ne mogu dodati blok %s u bazu podataka! ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE","Greška u bazi podataka: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_CREATED","Blok %s je stvoren ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE","Blok %s je obrisan. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA","Predložak bloka %s je obrisan iz baze podataka. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR","GREŠKA: Ne mogu obrisati blok %s");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR","GREŠKA: Ne mogu obrisati predložak bloka %s iz baze podataka");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED","Predložak bloka %s nije odobren ");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR","GREŠKA: Ne mogu ukloniti neodobren predložak bloka.  ");
define("_AM_SYSTEM_MODULES_BLOCK_UPDATE","Blok %s je ažuriran. ");

// Configs
define("_AM_SYSTEM_MODULES_GONFIG_ID","ID postavki: %s %s");
define("_AM_SYSTEM_MODULES_MODULE_DATA_ADD","Dodajem postavke za modul...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_DELETE","Brišem opcije postavki modula...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE","Podaci modula su ažurirani.");
define("_AM_SYSTEM_MODULES_CONFIG_ADD"," Opcije postavki su dodane");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD"," Postavka %s je dodana u bazu podataka");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR"," GREŠKA: Ne mogu unesti postavku %s u bazu podataka. ");
define("_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE","Podatak postavke je obrisan iz baze podataka. ");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR","GREŠKA: Ne mogu obrisati podatak postavke iz baze podataka");

// Access
define("_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD","Postavke grupnih prava...");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR","GREŠKA: Ne mogu obrisati grupna prava ");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED","Grupna prava su obrisana ");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD","Administratorska prava su dodana za ID grupe %s");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR","GREŠKA: Ne mogu dodati administratorska prava za ID grupe %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR","Administratorska prava su dodana za ID grupu: %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR","GREŠKA: Ne mogu dodati korisnička prava pristupa za ID grupe: %s");

// execute module specific install script if any
define("_AM_SYSTEM_MODULES_FAILED_EXECUTE","Greška pri izvođenju %s");
define("_AM_SYSTEM_MODULES_FAILED_SUCESS","%s je uspješno izvršen.");
define("_AM_SYSTEM_MODULES_DELETE_ERROR","GREŠKA: Ne mogu obrisati %s");
define("_AM_SYSTEM_MODULES_UPDATE_ERROR","GREŠKA: Ne mogu ažurirati %s");
define("_AM_SYSTEM_MODULES_DELETE_MOD_TABLES","Brišem tablice modula...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE","Brišem komentare...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR","GREŠKA: Ne mogu obrisati komentare");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETED","Komentari su obrisani");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE","Brisanje obavijesti...");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR","GREŠKA: Ne mogu obrisati obavijesti");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED","Obavijesti su obrisane");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED","Tablica %s je izbačena!");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR","GREŠKA: Ne mogu izbaciti tablicu %s");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "GREŠKA: Nemate prava za izbacivanje tablice %s !");

// Tips
define("_AM_SYSTEM_MODULES_TIPS", 
"<ul>
<li>Ako instalirate novi modul, ne zaboravite postaviti postavke modula, blokova i korisničkih prava!</li>
<li>Da bi Maknuli modul iz bloka Glavnog izbornika, postavite poredak na 0</li>
<li>Izbrišite nekorištene datoteke modula sa svog poslužitelja kako bi izbjegli sigurnosne propuste i učinili svoj web sigurnijim.</li>
<li>Da bi promijenili poredak modula (što će se vidjeti u izborniku), morate prevući i pustiti module na željeno mjesto.</li>
</ul>");
define("_AM_SYSTEM_MODULES_CONFIRM_TIPS",
"<ul>
<li>Provjerite sve promjene validacijom.</li>
</ul>");

?>