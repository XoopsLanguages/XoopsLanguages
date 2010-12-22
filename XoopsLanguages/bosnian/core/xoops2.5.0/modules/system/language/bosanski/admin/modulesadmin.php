<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ba
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 5580 2010-10-21 19:38:48Z saba $
 */

// Navigation
define("_AM_SYSTEM_MODULES_ADMIN", "Administracija Modula");
define("_AM_SYSTEM_MODULES_LIST", "Lista Modula");
define("_AM_SYSTEM_MODULES_TOINSTALL", "Instaliraj Modul");
define("_AM_SYSTEM_MODULES_VALIDATE","Potvrdi izmjenu");
define("_AM_SYSTEM_MODULES_SUBMITRES","Pošalji");

// Messages
define("_AM_SYSTEM_MODULES_RUSUREINS","Klikni gumb ispod i instaliraj ovaj modul");
define("_AM_SYSTEM_MODULES_RUSUREUNINS","Jesi li siguran da želiš ovaj modul deinstalirati?");
define("_AM_SYSTEM_MODULES_RUSUREUPD","Klikni gumb i aktuliziraj ovaj module");
define("_AM_SYSTEM_MODULES_BTOMADMIN","Vrati se nazad na stranicu Administracija Modula");
define("_AM_SYSTEM_MODULES_INSTALLING","Instaliraj ");
define("_AM_SYSTEM_MODULES_UNINSTAL","Deinstaliraj ");
define("_AM_SYSTEM_MODULES_DEACTIVATE","Deaktiviraj ");
define("_AM_SYSTEM_MODULES_ACTIVATE","Aktiviraj ");
define("_AM_SYSTEM_MODULES_UPDATING","Aktuliziraj ");

// Main
define("_AM_SYSTEM_MODULES_INSTALL","Instaliraj");
define("_AM_SYSTEM_MODULES_UNINSTALL","Deinstaliraj");
define("_AM_SYSTEM_MODULES_UPDATE","Aktuliziraj");
define("_AM_SYSTEM_MODULES_VIEWLARGE","Veliki prikaz");
define("_AM_SYSTEM_MODULES_VIEWLINE","Linijski pregled");

// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS","Nije moguće instalirati %s.");
define("_AM_SYSTEM_MODULES_FAILACT","Nije moguće aktivirati %s.");
define("_AM_SYSTEM_MODULES_FAILDEACT","Nije moguće deaktivirati %s.");
define("_AM_SYSTEM_MODULES_FAILUPD","Nije moguće aktuliziratie %s.");
define("_AM_SYSTEM_MODULES_FAILUNINS","Nije moguće deinstalirati %s.");
define("_AM_SYSTEM_MODULES_FAILORDER","Nije moguće složiti %s.");
define("_AM_SYSTEM_MODULES_FAILWRITE","Nije moguće pisati u glavni meni.");
define("_AM_SYSTEM_MODULES_ALEXISTS","Ovaj Modul %s već postoji.");
define("_AM_SYSTEM_MODULES_ERRORSC","Greška(e):");
define("_AM_SYSTEM_MODULES_OKINS","Modul %s je uspješno instaliran.");
define("_AM_SYSTEM_MODULES_OKACT","Modul %s je uspješno aktiviran.");
define("_AM_SYSTEM_MODULES_OKDEACT","Modul %s je uspješno deaktiviran.");
define("_AM_SYSTEM_MODULES_OKUPD","Modul %s je uspješno aktuliziran.");
define("_AM_SYSTEM_MODULES_OKUNINS","Modul %s je uspješno deinstaliran.");
define("_AM_SYSTEM_MODULES_OKORDER","Modul %s je uspješno izmijenjen.");

define("_AM_SYSTEM_MODULES_MODULE","Modul");
define("_AM_SYSTEM_MODULES_VERSION","Verzija");
define("_AM_SYSTEM_MODULES_LASTUP","Zadnja aktulizacija");
define("_AM_SYSTEM_MODULES_DEACTIVATED","Deaktiviran");
define("_AM_SYSTEM_MODULES_ACTION","Akcija");
define("_AM_SYSTEM_MODULES_MENU","Meni");
define("_AM_SYSTEM_MODULES_HIDE","Sakrij");
define("_AM_SYSTEM_MODULES_SHOW","Prikaži");

define("_AM_SYSTEM_MODULES_DUPEN","Dupli sadržaj u tabli modula!");
define("_AM_SYSTEM_MODULES_DEACTED","Izabrani modul je deaktiviran. Sada možeš sigurno ako želiš modul deinstalirati.");
define("_AM_SYSTEM_MODULES_ACTED","Izabrani modul je aktiviran!");
define("_AM_SYSTEM_MODULES_UPDTED","Izabrani modul je aktuliziran!");
define("_AM_SYSTEM_MODULES_SYSNO","Sistemski modul se nemože deaktivirati.");
define("_AM_SYSTEM_MODULES_STRTNO","Ovaj modul je standarno postavljen na početnoj stranici,<br /> ako želiš izmjenuti i izabrati neki drugi modul<br /> ili bez ikakvog modula da ti sadržaj bude na početnoj stranici, odredi po želji.");

define("_AM_SYSTEM_MODULES_ORDER","Redoslijed");
define("_AM_SYSTEM_MODULES_ORDER0","(0 = skriveno)");
define("_AM_SYSTEM_MODULES_ACTIVE","Aktivan");
define("_AM_SYSTEM_MODULES_INACTIVE","nije aktivan");
define("_AM_SYSTEM_MODULES_NOTINSTALLED","Nije instaliran");
define("_AM_SYSTEM_MODULES_NOCHANGE","Nema promjene");
define("_AM_SYSTEM_MODULES_SUBMIT","Pošalji");
define("_AM_SYSTEM_MODULES_CANCEL","Odustani");
define("_AM_SYSTEM_MODULES_DBUPDATE",_AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_MODULES_LISTUPBLKS","Sljedeći blokovi biće aktulizirani.<br />Izaberi blokove sa kojim sadržajem (template i opcije) mogu da se aktulizacijom prepišu.<br />");
define("_AM_SYSTEM_MODULES_NEWBLKS","Novi Blokovi");
define("_AM_SYSTEM_MODULES_DEPREBLKS","Zastarjeli Blokovi");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED","%s je rezervisana tabla!");
define("_AM_SYSTEM_MODULES_CREATE_TABLES","Tabla se kreira...");
define("_AM_SYSTEM_MODULES_TABLE_CREATED","Tabla %s je kreirana");
define("_AM_SYSTEM_MODULES_INSERT_DATA","&nbsp;&nbsp; Podatak je dodat u tabelu %s");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD","Nemože se dodati podatak %s u bazu podataka.");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE","Modulski podaci su uspješno dodati u bazu podataka.");
define("_AM_SYSTEM_MODULES_MODULEID"," Modul ID: %s");
define("_AM_SYSTEM_MODULES_SQL_FOUND","SQL podatak je pronaðen u %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND","SQL podatak nije pronaðen u %s");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE","GREŠKA: Nemože se kreirati %s ");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID","%s nije ispravan SQL!");
define("_AM_SYSTEM_MODULES_GROUP_ID"," Grupe ID: %s ");
define("_AM_SYSTEM_MODULES_NAME"," Naziv: ");
define("_AM_SYSTEM_MODULES_VALUE"," Vrijednost: ");

// Templates
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD","Dodavanje template...");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE","Brisanje template...");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE","Aktuliziranje template...");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID","Template ID: %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA","Template %s je dodat u bazu podataka");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR","GREŠKA: Nemože se dodati template %s u bazu podataka.");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED","Template %s je kompiliran ");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED","GREŠKA: Nemože se kompilirati template %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA","Template %s je izbrisan iz baze podataka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD","GREŠKA: Nemože se izbrisati template %s iz baze podataka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA","Template %s je dodat u bazu podataka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE","Template %s rekompiliran");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD","GREŠKA: Template %s se nemože rekompilirati");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR","GREŠKA: Nemože se rekompilirati template %s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR","GREŠKA: Nemože se izbrisati stari template %s. Prekinuta je aktulizacija ovog podatka. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE","Template %s je aktuliziran. ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR","GREŠKA: Nemože se aktulizirati %s template. ");

// Blocks
define("_AM_SYSTEM_MODULES_BLOCKS_ADD","Dodavanje bloka...");
define("_AM_SYSTEM_MODULES_BLOCKS_DELETE","Brisanje bloka...");
define("_AM_SYSTEM_MODULES_BLOCKS_REBUILD","Obnavljanje bloka...");
define("_AM_SYSTEM_MODULES_BLOCK_ID"," Blok ID: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS","Dodat je bloku odobrenje pristupa");
define("_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR","GREŠKA: Nemože se dodati bloku odobreni pristup");
define("_AM_SYSTEM_MODULES_BLOCK_ADD","Blok %s je dodat ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR","GREŠKA: Nemože se dodati blok %s u bazu podataka! ");
define("_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE","Greška u bazi podataka: %s ");
define("_AM_SYSTEM_MODULES_BLOCK_CREATED","Blok %s je kreiran ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE","Blok %s je izbrisan. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA","Blok template %s je izbrisan iz baze podataka. ");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR","GREŠKA: Nemože se izbrisati blok %s");
define("_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR","GREŠKA: Nemože se izbrisati blok template %s iz baze podataka");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED","Blok template %s je prestar ");
define("_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR","GREŠKA: Nemože se izbrisati prestari blok template.  ");
define("_AM_SYSTEM_MODULES_BLOCK_UPDATE","Blok %s je aktuliziran. ");

// Configs
define("_AM_SYSTEM_MODULES_GONFIG_ID","Konfig ID: %s");
define("_AM_SYSTEM_MODULES_MODULE_DATA_ADD","Dodavanje za modul konfig podatka...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_DELETE","Brisanje za modul konfig opcije...");
define("_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE","Modul podatak je aktuliziran.");
define("_AM_SYSTEM_MODULES_CONFIG_ADD"," Konfig opcija je dodata");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD"," Konfig %s je dodat u bazu podataka");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR"," GREŠKA: nemože se dodati konfig %s podatak u bazu podataka. ");
define("_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE","Konfig podatak je izbrisan iz baze podataka. ");
define("_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR","GREŠKA: Nemože se izbrisati konfig podatak iz baze podataka");

// Access
define("_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD","Podešavanje odobrenja za Grupe...");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR","GREŠKA: Nemogu se izbrisati odobrenja za grupe ");
define("_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED","Odobrenja za grupe su izbrisane ");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD","Admin odobrenje za Grupe ID %s je dodat");
define("_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR","GREŠKA: Nemože se dodati admin odobrenje pristupa za Grupe ID %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR","članu je dodato odobrenje pristupa u Grupu ID: %s");
define("_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR","GREŠKA: Odobrenje pristupa članu se nemože dati u Grupu ID: %s");

// execute module specific install script if any
define("_AM_SYSTEM_MODULES_FAILED_EXECUTE","Nije moguće eliminisatie %s");
define("_AM_SYSTEM_MODULES_FAILED_SUCESS","%s eliminisanje je uspjelo.");
define("_AM_SYSTEM_MODULES_DELETE_ERROR","GREŠKA: Nemože se izbrisati %s");
define("_AM_SYSTEM_MODULES_UPDATE_ERROR","GREŠKA: Nemože se aktulizirati %s");
define("_AM_SYSTEM_MODULES_DELETE_MOD_TABLES","Brisanje tabela modula...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE","Brisanje komentara...");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR","GREŠKA: Nemogu se izbrisati komentari");
define("_AM_SYSTEM_MODULES_COMMENTS_DELETED","Komentari su izbrisani");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE","Brisanje obavještenja...");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR","GREŠKA: Nemogu se izbrisati obavještenja");
define("_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED","Obavještenja su izbrisana");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED","Tabae %s dropirana!");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR","GREŠKA: Nemože se dropati tabla %s");
define("_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "GREŠKA: Nije dozvoljeno dropanje table %s !");

// Tips
define("_AM_SYSTEM_MODULES_TIPS", 
"<ul>
<li>Ovdje možeš instalirati nove module, memorisati podešavanje modula po želji, blokove i odobrenja za članove tj.grupe!</li>
<li>Za skrivanje naziva modula u glavnom meniju upiši opciju 0</li>
<li>Ne briši neinstalirane module sa servera, nema razloga za brigu sigurnosti stranice.</li>
<li>Redoslijed modula u listi glavnog menija možeš zadržanim klikom na modul pomicati na željeno mjesto.</li>
</ul>");
define("_AM_SYSTEM_MODULES_CONFIRM_TIPS",
"<ul>
<li>Provjeri sve promjene dali su validne.</li>
</ul>");

?>