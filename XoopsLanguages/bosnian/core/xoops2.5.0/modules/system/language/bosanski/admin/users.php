<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: users.php 5608 2010-10-23 17:36:57Z trabis $
 */

// Navigation
define("_AM_SYSTEM_USERS_NAV_MANAGER","Menadzer Članova");
define("_AM_SYSTEM_USERS_NAV_MAIN","Menadzer Članova");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","Napredna pretraga");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","Dodaj Člana");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","Uredi Člana");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","Izbriši Člana");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>Manage Xoops users</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","Član");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Uid");
define("_AM_SYSTEM_USERS_STATUS","Statut");
define("_AM_SYSTEM_USERS_NAME","Ime");
define("_AM_SYSTEM_USERS_UNAME","Prezime");
define("_AM_SYSTEM_USERS_EMAIL","Email");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Uredi grupu");
define("_AM_SYSTEM_USERS_REG_DATE","Datum registracije");
define("_AM_SYSTEM_USERS_LAST_LOGIN","Zadnja prijava");
define("_AM_SYSTEM_USERS_POSTS","Komentara/Postova");
define("_AM_SYSTEM_USERS_LEVEL","Level");
define("_AM_SYSTEM_USERS_ACTION","Akcija");
define("_AM_SYSTEM_USERS_FINDUS","Pronađi Člana");
define("_AM_SYSTEM_USERS_AVATAR","Avatar");
define("_AM_SYSTEM_USERS_REALNAME","Pravo ime");
define("_AM_SYSTEM_USERS_REGDATE","Datum registracije");
define("_AM_SYSTEM_USERS_PM","PM");
define("_AM_SYSTEM_USERS_URL","URL");
define("_AM_SYSTEM_USERS_PREVIOUS","Prethodna");
define("_AM_SYSTEM_USERS_NEXT","Sljedeća");
define("_AM_SYSTEM_USERS_USERSFOUND","%s Član(ova) je pronađeno");
define("_AM_SYSTEM_USERS_ACTUS", "Aktivni Članovi: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Neaktivni Članovi: %s");
define("_AM_SYSTEM_USERS_NOFOUND","Nijedan Član nije pronađen");
define("_AM_SYSTEM_USERS_ICQ","ICQ broj");
define("_AM_SYSTEM_USERS_AIM","AIM ");
define("_AM_SYSTEM_USERS_YIM","YIM ");
define("_AM_SYSTEM_USERS_MSNM","MSNM ");
define("_AM_SYSTEM_USERS_TIMEZONE","Vremenska zona");
define("_AM_SYSTEM_USERS_SHOWSIG","Uvijek prikaži moju signaturu");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Modus prikazivanja komentara");
define("_AM_SYSTEM_USERS_CSORTORDER","Redoslijed komentara");
define("_AM_SYSTEM_USERS_EXTRAINFO","O meni");
define("_AM_SYSTEM_USERS_LOCATION","Lokacija");
define("_AM_SYSTEM_USERS_OCCUPATION","Zanimanje");
define("_AM_SYSTEM_USERS_INTEREST","Interes");
define("_AM_SYSTEM_USERS_URLC","URL-sadržaj");
define("_AM_SYSTEM_USERS_LOCATIONC","Lokacija sadržaja");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Zanimanje-sadržaj");
define("_AM_SYSTEM_USERS_INTERESTC","Interes-sadržaj");
define("_AM_SYSTEM_USERS_LASTLOGMORE","Posljedna prijava koja nije više od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_LASTLOGLESS","Posljedna prijava koja je bila manje od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_REGMORE","Registracije koje nisu više od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_REGLESS","Registracije koje su manje od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_POSTSMORE","Broj postova koji je veći od <span style='color:#ff0000;'>X</span> postova");
define("_AM_SYSTEM_USERS_POSTSLESS","Broj postova koji je manji od <span style='color:#ff0000;'>X</span postova>");
define("_AM_SYSTEM_USERS_SORT","Sortirano po");
define("_AM_SYSTEM_USERS_ORDER","Redoslijed");
define("_AM_SYSTEM_USERS_LASTLOGIN","Zadnja prijava");
define("_AM_SYSTEM_USERS_ASC","ABC prvo");
define("_AM_SYSTEM_USERS_DESC","BCA prvo");
define("_AM_SYSTEM_USERS_LIMIT","Broj Članova po stranici");
define("_AM_SYSTEM_USERS_RESULTS", "Traži rezultate");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Tip Člana prikaži");
define("_AM_SYSTEM_USERS_MAILOK","Samo Članovi koji prihvatajut mail obavijest");
define("_AM_SYSTEM_USERS_MAILNG","Samo Članovi koji ne prihvatajut mail obavijest");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Tip Članova prikaži");
define("_AM_SYSTEM_USERS_ACTIVE","Samo aktivni Članovi");
define("_AM_SYSTEM_USERS_INACTIVE","Samo neaktivni Članovi");
define("_AM_SYSTEM_USERS_BOTH", "Svi Članovi");
define("_AM_SYSTEM_USERS_SENDMAIL", "Pošalji mail");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Dodaj Člana %s u grupu");
define("_AM_SYSTEM_USERS_GROUPS", "Grupe");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Dodaj grupu");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Izbriši grupu");
define("_AM_SYSTEM_USERS_AYSYWTDU","Jesi li siguran da želiš izbrisati ovog Člana %s?");
define("_AM_SYSTEM_USERS_BYTHIS","Sa brisanjem sve informacije i postovi od Člana biće nepovratno izbrisani.");
define("_AM_SYSTEM_USERS_YES","Da");
define("_AM_SYSTEM_USERS_NO","Ne");
define("_AM_SYSTEM_USERS_YMCACF","Moraš popuniti sva obavezna polja");
define("_AM_SYSTEM_USERS_CNRNU","Registracija novih Članova nije dozvoljena.");
define("_AM_SYSTEM_USERS_EDEUSER","Uredi/Izbriši Članove");
define("_AM_SYSTEM_USERS_NICKNAME","Nik ime");
define("_AM_SYSTEM_USERS_MODIFYUSER","Izmjeni Člana");
define("_AM_SYSTEM_USERS_DELUSER","Izbriši Člana");
define("_AM_SYSTEM_USERS_GO","Idi!");
define("_AM_SYSTEM_USERS_ADDUSER","Dodaj Člana");
define("_AM_SYSTEM_USERS_OPTION","Opcije");
define("_AM_SYSTEM_USERS_THEME","Theme");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Dozvoli i drugim Članovima da vide tvoj email adresu");
define("_AM_SYSTEM_USERS_RANK","Rang");
define("_AM_SYSTEM_USERS_NSRA","Nije dodojeljen specijalni rang");
define("_AM_SYSTEM_USERS_NSRID","Nema specijalni rang u bazi podataka");
define("_AM_SYSTEM_USERS_ACCESSLEV","Level");
define("_AM_SYSTEM_USERS_SIGNATURE","Signatura");
define("_AM_SYSTEM_USERS_PASSWORD","Lozinka");
define("_AM_SYSTEM_USERS_INDICATECOF","* obavezna polja");
define("_AM_SYSTEM_USERS_NOTACTIVE","Ovaj Član nije još aktiviran. ®eliš li aktivirati ovog Člana?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Aktuliziraj Člana");
define("_AM_SYSTEM_USERS_USERINFO","Info Člana");
define("_AM_SYSTEM_USERS_USERID","Član ID");
define("_AM_SYSTEM_USERS_RETYPEPD","Ponovi Lozinku");
define("_AM_SYSTEM_USERS_CHANGEONLY","(samo kod promjene)");
define("_AM_SYSTEM_USERS_USERPOST","Postovi od Člana");
define("_AM_SYSTEM_USERS_STORIES","Postova");
define("_AM_SYSTEM_USERS_COMMENTS","Komentara");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Klikni ispod na gumb ako misliš da ne štimaju brojevi postova/komentara od Člana i sihroniši bazu podataka");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Sihroniši");
define("_AM_SYSTEM_USERS_USERDONEXIT","Član ne postoji!");
define("_AM_SYSTEM_USERS_STNPDNM","Izvinjajemo se tvoja nova lozinka se ne podudara sa tvojom. Klikni i vrati se nazad te probaj ponovo");
define("_AM_SYSTEM_USERS_CNGTCOM","Nemože se dobiti ukupan broj komentara");
define("_AM_SYSTEM_USERS_CNGTST","Nemože se dobiti ukupan broj postova");
define("_AM_SYSTEM_USERS_CNUUSER","Član se nemože aktulizirati");
define("_AM_SYSTEM_USERS_CNGUSERID","Nemože se dobiti od Člana IDS");
define("_AM_SYSTEM_USERS_LIST","Lista");
define("_AM_SYSTEM_USERS_NOUSERS", "Nijedan Član nije pronađen");
define("_AM_SYSTEM_USERS_CNRNU2","Novi Član se nemože dodati u grupu: %s.");
define("_AM_SYSTEM_USERS_SEARCH","Traži");
define("_AM_SYSTEM_USERS_SEARCH_USER","Traži Člana:");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Napredna pretraga");
define("_AM_SYSTEM_USERS_EDIT","Uredi Člana");
define("_AM_SYSTEM_USERS_DEL","Izbriši Člana");
define("_AM_SYSTEM_USERS_DELETE","Izbriši");
define("_AM_SYSTEM_USERS_SUBMIT","Pošalji");
define("_AM_SYSTEM_USERS_PURGE","PoČisti");
define("_AM_SYSTEM_USERS_ADD","Dodaj Člana");
define("_AM_SYSTEM_USERS_VIEW","Vidi info Člana");
define("_AM_SYSTEM_USERS_NO_FOUND","Nijedan Član nije pronađen");
define("_AM_SYSTEM_USERS_NOT_CONNECT","Nije nikada konetovan");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Izbriši Člana : %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Izbriši");
define("_AM_SYSTEM_USERS_NO_SUPP", "Član se nemože izbrisati: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "Admin se nemože izbrisati: %s <br />");
define("_AM_SYSTEM_USERS_ERROR", "Greška:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "Sve grupe");
define("_AM_SYSTEM_USERS_ALLUSER", "Svi Članovi");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Samo aktivni Članovi");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Samo neaktivni Članovi");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","Nik ime %s već neko koristi");
define("_AM_SYSTEM_USERS_MAIL_ERROR","Ovaj mail %s već neko koristi");

?>