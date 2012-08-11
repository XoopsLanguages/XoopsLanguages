<?php
// prijevod na hrvatski: Ivan Kosak (www.xoopshr.org) 14.2.2009
if (!defined('XOOPS_ROOT_PATH')) { exit(); }

define("_LCX_ADM_CONFIG",	" Postavke ");
define("_LCX_ADM_GENCONF",	"Opće postavke");
define("_LCX_ADM_LOGCONF", 	"Napredne postavke");
define("_LCX_ADM_REPCONF", 	"Postavke izvještaja");
define("_LCX_ADM_REBUILD", 	"Preračunaj zapisane podatke");
define("_LCX_ADM_IMGSLCT", 	"Odabir slike brojača");
define("_LCX_ADM_DBCHECK", 	"Provjeri bazu podataka");
define("_LCX_ADM_BLOCKSADMIN", 	"Administracija blokova");
define("_LCX_ADM_GENCONF_DESC",	"Prikaz brojača");
define("_LCX_ADM_LOGCONF_DESC","Izvještaj zapisa - opće postavke");
define("_LCX_ADM_REPCONF_DESC","Prikaz izvještaja");
define("_LCX_ADM_REBUILD_DESC","Preračunaj zapisane podatke<br />Treba vremena.");
define("_LCX_ADM_IMGSLCT_DESC","Izaberi sliku/e brojača");
define("_LCX_ADM_DBCHECK_DESC", 	"Provjeri i optimiziraj bazu podataka");
define("_LCX_ADM_BLOCKSADMIN_DESC", 	"Administracija blokova. (Zahvale GIJOE-u.)");

define("_LCX_ADM_CUPBLK_SET",	"Automatsko postavljanje 'Bloka zbrajalice'");
define("_LCX_ADM_CUPBLK_TITL",	"Postavke bloka zbrajalice");
define("_LCX_ADM_CUPBLK_DESC",	"Provjeri i promjeni postavke 'Bloka zbrajalice'");

define("_LCX_ADM_RESETCOUNT_TITLE",	"Početna vrijednost brojača");
define("_LCX_ADM_LOGCOUNT_TITLE",	"&lt;- Maksimalni broj zapisa u bazi (Za vaše informacije)");
define("_LCX_ADM_RESETCOUNT_DESC",	"Postavi početnu vrijednost gdje počinje brojanje");
define("_LCX_ADM_TIMEOFFSET_NAME",	"Vremenski pomak (-12 .. +12)");
define("_LCX_ADM_TIMEOFFSET_DESC",	"Unesi pomak (Sati) da bi postavili serversko vrijeme premo svom lokalnom vremenu.");
define("_LCX_ADM_TIMEOFFSET_SVTM",	"Serversko vrijeme  F");
define("_LCX_ADM_TIMEOFFSET_ADTM",	"Podešeno vrijemeF");
define("_LCX_ADM_ADDIP_TITLE",		"Osim hosta");
define("_LCX_ADM_ADDIP_DESC",		"Postavi Hostname koji neće biti na Izvještaju<br />Možete koristiti '%' kao wild-card");
define("_LCX_ADM_ADDREF_TITLE",		"Except Referer");
define("_LCX_ADM_ADDREF_DESC",		"Postavi Referer koji neće biti na Izvještaju<br />Referer u kojem se nalazi ovaj niz znakova neće biti u izvještaju.");
define("_LCX_ADM_YOURHOST_TITLE",	"Vaš Hostname");
define("_LCX_ADM_YOURHOST_ADD",		"Postavi kao 'Except Hostname'");
define("_LCX_ADM_DELETEIP_TITLE",	"Excepted Hostname");
define("_LCX_ADM_DELETEIP_DESC",	"Delete Hostname from Execpting List<br />(Set Hostname to be on Report)");
define("_LCX_ADM_DELETEREF_TITLE",	"Excepted Referer");
define("_LCX_ADM_DELETEREF_DESC",	"Delete Referer from Execpting List<br />(Set Referer to be on Report)");

define("_LCX_ADM_REPORTING_TITLE",	"Izvještaji");
define("_LCX_ADM_REPORTING_DESC",	"Izaberi tip korisnika");
define("_LCX_ADM_REPORTING_ALL",	"Svi");
define("_LCX_ADM_REPORTING_WORBT",	"Izostavi ROBOTE tražilica");
define("_LCX_ADM_REPORTING_ROBOT",	"ROBOTI tražilica");

define("_LCX_ADM_BY_R2",	"po Referer (Summary)");
define("_LCX_ADM_BY_OS",	"po klijentskom OS-u");
define("_LCX_ADM_BY_BR",	"po klijentskom pregledniku");
define("_LCX_ADM_BY_RC",	"Zadnjih dana");
define("_LCX_ADM_BY_DR",	"po danu (redosljes po broju/dan)");
define("_LCX_ADM_BY_WD",	"po danu-tjedna");
define("_LCX_ADM_BY_TM",	"po vremenu (Sat)");
define("_LCX_ADM_BY_HN",	"po Udaljenom hostu");
define("_LCX_ADM_BY_RF",	"po Referer (Recent Access)");
define("_LCX_ADM_BY_QW",	"po ključnoj riječi");
define("_LCX_ADM_BY_UN",	"po XOOPS korisničkom imenu");
define("_LCX_ADM_BY_PI",	"po prvoj stranici posjete");
define("_LCX_ADM_REFLINK",	"Postavi link na Referer");

define("_LCX_ADM_FOR_GUEST",	"GOST : ");
define("_LCX_ADM_FOR_USERS",	"KORISNICI : ");
define("_LCX_ADM_FOR_ADMIN",	"ADMINISTRACIJA : ");
define("_LCX_ADM_GUEST",	"Svi (uključujući GOSTE) ");
define("_LCX_ADM_USERS",	"Samo korisnici ");
define("_LCX_ADM_ADMIN",	"Administratori ");
define("_LCX_ADM_NOONE",	"Niko ");

define("_LCX_ADM_ROWLIMIT",	"Ograniči ili izvjesti redove (Vršnih XX podataka)");

define("_LCX_ADM_IMGNOW",	"Trenutne slike");
define("_LCX_ADM_STYLE",	"Izgled fonta (SPAN-TAG)");

define("_LCX_ADM_DAY_NAME",	"Danas : ");
define("_LCX_ADM_DAY_DESC",	"Danas nabrojeno");
define("_LCX_ADM_YDAY_NAME",	"Jučer : ");
define("_LCX_ADM_YDAY_DESC",	"Jučer nabrojeno");
define("_LCX_ADM_WEEK_NAME",	"Ovaj tjedan : ");
define("_LCX_ADM_WEEK_DESC",	"Nabrojano ovaj tjedan (krenuvši od nedjelje)");
define("_LCX_ADM_MONTH_NAME",	"Ovaj mjesec : ");
define("_LCX_ADM_MONTH_DESC",	"Nabrojano ovaj mjesec");
define("_LCX_ADM_AVE_NAME",	"Prosjek : ");
define("_LCX_ADM_AVE_DESC",	"Prosječno po danu (Odkad je pokrenut ovaj modul)");
define("_LCX_ADM_IPIT_NAME",	"Interval brojanja");
define("_LCX_ADM_IPIT_DESC",	"Interval brojanja pristupa sa iste IP adrese (Sek.)");
define("_LCX_ADM_NOROBCNT_NAME","Preskoči nabrajanje ROBOT-a");
define("_LCX_ADM_NOROBCNT_DESC","Preskoče nabrajanje ROBOT-a tražilica");
define("_LCX_ADM_NOHSTCNT_NAME","Preskoči nabrajanje očekivanih hostova");
define("_LCX_ADM_NOHSTCNT_DESC","Preskače nabrajanje očekivanih hostova<br />Možete dodati ili obrisati host u 'Prikazu izvještaja' dijelu");
define("_LCX_ADM_MAXWIDTH_NAME","Maksimalna širina dijela za izvještaje");
define("_LCX_ADM_MAXWIDTH_DESC","Maksimalna veličina unosa (širina) slika u izvještaju");

define("_LCX_ADM_LOGLIM_NAME",		"Ograničenje zapisa");
define("_LCX_ADM_LOGLIM_DESC",		"Ograničenje zapisa (Broj zapisa)");
define("_LCX_ADM_USER_COOKIE_NAME",	"Korisnika po kolačićima");
define("_LCX_ADM_USER_COOKIE_DESC",	"Detektiraj korisnike samo po kolačićima");
define("_LCX_ADM_GETHOST_NAME",		"GetHostByAddress");
define("_LCX_ADM_GETHOST_DESC",		"Korisni 'GetHostByAddress' funkciju u izvještajima<br />Može usporiti odgovor");

define("_LCX_ADM_BROS_NAME",	"Lista preglednika");
define("_LCX_ADM_BROS_DESC",	"Lista svih USER_AGENT");
define("_LCX_ADM_QWORDS_NAME",	"Lista ključnih riječi");
define("_LCX_ADM_QWORDS_DESC",	"Lista svih ključnih riječi");

define("_LCX_ADM_USEIMG",	"Prikaz brojača");
define("_LCX_ADM_IMG",		"pomoću SLIKE");
define("_LCX_ADM_CHR",		"pomoću ZNAKOVA");
define("_LCX_ADM_CHGIMG_NOTE",	"Mape slika se imenuju isto kao tema bez obzira na ove postavke.");

define("_LCX_ADM_CHKDB_Name",		"Ime tablice");
define("_LCX_ADM_CHKDB_Rows",		"Redak podatka");
define("_LCX_ADM_CHKDB_Data_length",	"Veličina podatka");
define("_LCX_ADM_CHKDB_Avg_row_length","Veličina/Redci");
define("_LCX_ADM_CHKDB_Data_free",	"Slobodni prostor");
define("_LCX_ADM_CHKDB_Update_time",	"Obnovljeno");
define("_LCX_ADM_CHKDB_OPTIMIZE_DESC",	"Optimiziraj tablice");
?>