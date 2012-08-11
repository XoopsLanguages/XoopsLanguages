<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
// prijevod na hrvatski: Ivan Kosak (www.xoopshr.org) 14.2.2009
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Administracija modula");
define("_MD_AM_MODULE","Moduli");
define("_MD_AM_VERSION","Inačica");
define("_MD_AM_LASTUP","Zadnje ažuriranje");
define("_MD_AM_DEACTIVATED","Deaktiviran");
define("_MD_AM_ACTION","Akcija");
define("_MD_AM_DEACTIVATE","Deaktiviraj");
define("_MD_AM_ACTIVATE","Aktiviraj");
define("_MD_AM_UPDATE","Ažuriraj");
define("_MD_AM_DUPEN","Dupliciraj unos u tablici modula!");
define("_MD_AM_DEACTED","Izabrani modul je deaktiviran. Sada možete slobodno deinstalirarti modul");
define("_MD_AM_ACTED","Izabrani modul je aktiviran!");
define("_MD_AM_UPDTED","Izabrani modul je ažuriran!");
define("_MD_AM_SYSNO","Sustavski modul se ne može deaktivirati.");
define("_MD_AM_STRTNO","Ovaj modul je postavljen na početnu stranicu. Molimo da promjenite početni modul da bi ga mogli deaktivirati.");

// added in RC2
define("_MD_AM_PCMFM","Molim potvrdite:");

// added in RC3
define("_MD_AM_ORDER","Redoslijed");
define("_MD_AM_ORDER0","(0 = sakriven)");
define("_MD_AM_ACTIVE","Aktivan");
define("_MD_AM_INACTIVE","Neaktivan");
define("_MD_AM_NOTINSTALLED","Nije instaliran");
define("_MD_AM_NOCHANGE","Nema promjene");
define("_MD_AM_INSTALL","Instalacija");
define("_MD_AM_UNINSTALL","Deinstalacija");
define("_MD_AM_SUBMIT","Potvrdi");
define("_MD_AM_CANCEL","Odustani");
define("_MD_AM_DBUPDATE","Baza podataka je uspješno ažurirana!");
define("_MD_AM_BTOMADMIN","Nazad na stranicu Administracija modula");

// %s represents module name
define("_MD_AM_FAILINS","Ne mogu istalirati %s.");
define("_MD_AM_FAILACT","Ne mogu aktivirati %s.");
define("_MD_AM_FAILDEACT","Ne mogu deaktivirati %s.");
define("_MD_AM_FAILUPD","Ne mogu ažurirati %s.");
define("_MD_AM_FAILUNINS","Ne mogu deinstalirati %s.");
define("_MD_AM_FAILORDER","Ne mogu promijeniti redosljed %s.");
define("_MD_AM_FAILWRITE","Ne mogu zapisati u glavni izbornik.");
define("_MD_AM_ALEXISTS","Modul %s već postoji.");
define("_MD_AM_ERRORSC","Greške:");
define("_MD_AM_OKINS","Modul %s je uspješno instaliran.");
define("_MD_AM_OKACT","Modul %s je uspješno aktiviran.");
define("_MD_AM_OKDEACT","Modul %s je uspješno deaktiviran.");
define("_MD_AM_OKUPD","Modul %s je uspješno ažuriran.");
define("_MD_AM_OKUNINS","Modul %s je uspješno deinstaliran.");
define("_MD_AM_OKORDER","Modul %s je uspješno promijenjen.");

define('_MD_AM_RUSUREINS','Pritisnite donju tipku za instalaciju ovog modula');
define('_MD_AM_RUSUREUPD','Pritisni donju tipku da bi ažurirali ovaj modul');
define('_MD_AM_RUSUREUNINS','Da li sigurno želite deinstalirati ovaj modul?');
define('_MD_AM_LISTUPBLKS','Slijedeći blokovi će biti ažurirani.<br />Izaberite blokove čiji sadržaj (prijedlošci i opcije) može biti prepisan.<br />');
define('_MD_AM_NEWBLKS','Novi blokovi');
define('_MD_AM_DEPREBLKS','Neodobreni blokovi');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Instaliram ');
define('_MD_AM_TABLE_RESERVED','%s je rezervirana tablica!');
define('_MD_AM_CREATE_TABLES','Stvaram tablice...');
define('_MD_AM_TABLE_CREATED','Tablica %s je stvorena');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Podaci su ubačeni u tablicu %s');
define('_MD_AM_INSERT_DATA_FAILD','Ne mogu ubaciti %s u bazu podataka.');
define('_MD_AM_INSERT_DATA_DONE','Podaci modula su uspješno ubačeni.');
define('_MD_AM_MODULEID',' ID modula: %s');
define('_MD_AM_SQL_FOUND','SQL datoteka pronađena na %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL datoetka nije pronađena na %s');
define('_MD_AM_SQL_NOT_CREATE','GREŠKA: Ne mogu stvoriti %s ');
define('_MD_AM_SQL_NOT_VALID','%s nije valjan SQL!');

define('_MD_AM_GROUP_ID',' ID grupe: %s ');
define('_MD_AM_NAME',' Ime: ');
define('_MD_AM_VALUE',' Vrijednost: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Dodajem predloške...');
define('_MD_AM_TEMPLATES_DELETE','Brišem predloške...');
define('_MD_AM_TEMPLATES_UPDATE','Ažuriram predloške...');

define('_MD_AM_TEMPLATE_ID','ID predloška: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Predložak %s je dodan u bazu podataka');
define('_MD_AM_TEMPLATE_ADD_ERROR','GREŠKA: Ne mogu ubaciti predložak %s u bazu podataka.');
define('_MD_AM_TEMPLATE_COMPILED','Predložak %s je kompajliran ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','GREŠKA: Kompajliranje predloška %s nije uspjelo ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Predložak %s je izbrisan iz baze podataka. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','GREŠKA: Ne mogu obrisati predložak %s iz baze podataka. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Predložak %s je ubačen u bazu podataka. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Predložak %s je rekompajliran');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','GREŠKA: Rekompajliranje predloška %s nije uspjelo');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','GREŠKA: Ne mogu rekompajlirati predložak %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','GREŠKA: Ne mogu obrisati stari predložak %s. Prekidam ažuriranje ove datoteke. ');
define('_MD_AM_TEMPLATE_UPDATE','Predložak %s je ažuriran. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','GREŠKA: Ne mogu ažurirati %s predložak. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Dodajem blokove...');
define('_MD_AM_BLOCKS_DELETE','Brišem blokove...');
define('_MD_AM_BLOCKS_REBUILD','Ponovo stvaram blokove...');

define('_MD_AM_BLOCK_ID',' ID bloka: %s ');

define('_MD_AM_BLOCK_ACCESS','Dodana prava pristupa za blok');
define('_MD_AM_BLOCK_ACCESS_ERROR','GREŠKA: Ne mogu dodati pristupna prava za blok');
define('_MD_AM_BLOCK_ADD','Blok %s je dodan ');
define('_MD_AM_BLOCK_ADD_ERROR','GREŠKA: Ne mogu dodati blok %s u bazu podataka! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Greška u bazi podataka: %s ');
define('_MD_AM_BLOCK_CREATED','Blok %s je stvoren ');
define('_MD_AM_BLOCK_DELETE','Blok %s je obrisan. ');
define('_MD_AM_BLOCK_DELETE_DATA','Predložak bloka %s je obrisan iz baze podataka. ');
define('_MD_AM_BLOCK_DELETE_ERROR','GREŠKA: Ne mogu obrisati blok %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','GREŠKA: Ne mogu obrisati predložak bloka %s iz baze podataka');
define('_MD_AM_BLOCK_DEPRECATED','Predložak bloka %s nije odobren ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','GREŠKA: Ne mogu ukloniti neodobren predložak bloka.  ');
define('_MD_AM_BLOCK_UPDATE','Blok %s je ažuriran. ');

/* Configs */
define('_MD_AM_GONFIG_ID','ID postavki: %s');
define('_MD_AM_MODULE_DATA_ADD','Dodajem modulu podatke za postavke...');
define('_MD_AM_MODULE_DATA_DELETE','Brišem opcije postavki modula...');
define('_MD_AM_MODULE_DATA_UPDATE','Podaci modula ažurirani.');

define('_MD_AM_CONFIG_ADD',' Dodane opcije postavki');
define('_MD_AM_CONFIG_DATA_ADD',' Postavka %s je dodana u bazu podataka');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' GREŠKA: Ne mogu unesti postavku %s u bazu podataka. ');
define('_MD_AM_GONFIG_DATA_DELETE','Podatak postavke je obrisan iz baze podataka. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','GREŠKA: Ne mogu obrisati podatak postavke iz baze podataka');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Postavke grupnih prava...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','GREŠKA: Ne mogu obrisati grupna prava ');
define('_MD_AM_GROUP_PERMS_DELETED','Grupna prava su obrisana ');

define('_MD_AM_ACCESS_ADMIN_ADD','Administratorska prava su dodana za ID grupe %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','GREŠKA: Ne mogu dodati administratorska prava za ID grupe %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Administratorska prava su dodana za ID grupu: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','GREŠKA: Ne mogu dodati korisnička prava pristupa za ID grupe: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Greška pri izvođenju %s');
define('_MD_AM_FAILED_SUCESS','%s je uspješno izvršen.');

define('_MD_AM_DELETE_ERROR','GREŠKA: Ne mogu obrisati %s');
define('_MD_AM_UPDATE_ERROR','GREŠKA: Ne mogu ažurirati %s');
define('_MD_AM_DELETE_MOD_TABLES','Brišem tablice modula...');

define('_MD_AM_COMMENTS_DELETE','Brišem komentare...');
define('_MD_AM_COMMENTS_DELETE_ERROR','GREŠKA: Ne mogu obrisati komentare');
define('_MD_AM_COMMENTS_DELETED','Komentari su obrisani');

define('_MD_AM_NOTIFICATIONS_DELETE','Brisanje obavijesti...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','GREŠKA: Ne mogu obrisati obavijesti');
define('_MD_AM_NOTIFICATIONS_DELETED','Obavijsti su obrisane');

define('_MD_AM_TABLE_DROPPED','Tablica %s je izbačena!');
define('_MD_AM_TABLE_DROPPED_ERROR','GREŠKA: Ne mogu izbaciti tablicu %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','GREŠKA: Nemate prava za izbacivanje tablice %s !');
?>