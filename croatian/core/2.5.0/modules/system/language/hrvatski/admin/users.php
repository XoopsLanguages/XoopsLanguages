<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    hr
 * _CHARSET     UTF-8
 * @version     $Id: users.php 5608 2010-10-23 17:36:57Z trabis $
 * Translator: XoopsHR.org / Ivan Kosak / 1.2.2011.
 */

// Navigation
define("_AM_SYSTEM_USERS_NAV_MANAGER","Upravljanje korisnicima");
define("_AM_SYSTEM_USERS_NAV_MAIN","Upravljanje korisnicima");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","Napredno pretraživanje");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","Dodaj korisnika");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","Uredi korisnika");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","Obriši korisnika");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>Upravljanje Xoops korisnicima</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","Korisnik");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Uid");
define("_AM_SYSTEM_USERS_STATUS","Status");
define("_AM_SYSTEM_USERS_NAME","Ime");
define("_AM_SYSTEM_USERS_UNAME","Uime");
define("_AM_SYSTEM_USERS_EMAIL","Email");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Uredi grupe");
define("_AM_SYSTEM_USERS_REG_DATE","Datum registracije");
define("_AM_SYSTEM_USERS_LAST_LOGIN","Zadnja prijava");
define("_AM_SYSTEM_USERS_POSTS","Komentari/objave");
define("_AM_SYSTEM_USERS_LEVEL","Nivo");
define("_AM_SYSTEM_USERS_ACTION","Akcija");
define("_AM_SYSTEM_USERS_FINDUS","Pronađi korisnike");
define("_AM_SYSTEM_USERS_AVATAR","Avatar");
define("_AM_SYSTEM_USERS_REALNAME","Stvarno ime");
define("_AM_SYSTEM_USERS_REGDATE","Datum priključenja");
define("_AM_SYSTEM_USERS_PM","PM");
define("_AM_SYSTEM_USERS_URL","URL");
define("_AM_SYSTEM_USERS_PREVIOUS","Prethodno");
define("_AM_SYSTEM_USERS_NEXT","Sljedeće");
define("_AM_SYSTEM_USERS_USERSFOUND","pronađeno %s korisnika");
define("_AM_SYSTEM_USERS_ACTUS", "Akrivni korisnici: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Neaktivni korisnici: %s");
define("_AM_SYSTEM_USERS_NOFOUND","Nema pronađenih korisnika");
define("_AM_SYSTEM_USERS_ICQ","ICQ broj");
define("_AM_SYSTEM_USERS_AIM","AIM nadimak");
define("_AM_SYSTEM_USERS_YIM","YIM nadimak");
define("_AM_SYSTEM_USERS_MSNM","MSNM nadimak");
define("_AM_SYSTEM_USERS_TIMEZONE","Vremenska zona");
define("_AM_SYSTEM_USERS_SHOWSIG","Uvijek dodaj moj potpis");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Način prikaza komentara");
define("_AM_SYSTEM_USERS_CSORTORDER","Vrsta sortiranja komentara");
define("_AM_SYSTEM_USERS_EXTRAINFO","Dodatne informacije");
define("_AM_SYSTEM_USERS_LOCATION","Mjesto");
define("_AM_SYSTEM_USERS_OCCUPATION","Zanimanje");
define("_AM_SYSTEM_USERS_INTEREST","Zanimacija");
define("_AM_SYSTEM_USERS_URLC","URL sadrži");
define("_AM_SYSTEM_USERS_LOCATIONC","Mesto sadrži");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Zanimanje sadrži");
define("_AM_SYSTEM_USERS_INTERESTC","Zanimacija sadrži");
define("_AM_SYSTEM_USERS_LASTLOGMORE","Zadnja prijava je bila prije više od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_LASTLOGLESS","Zadnja prijava je bila prije manje od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_REGMORE","Datum priključenja je bio prije više od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_REGLESS","Datum priključenja je bio prije manje od <span style='color:#ff0000;'>X</span> dana");
define("_AM_SYSTEM_USERS_POSTSMORE","Broj objava je veći od <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Broj objava je manji od <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Poredaj po");
define("_AM_SYSTEM_USERS_ORDER","Poredak");
define("_AM_SYSTEM_USERS_LASTLOGIN","Zadnja prijava");
define("_AM_SYSTEM_USERS_ASC","Uzlazni poredak");
define("_AM_SYSTEM_USERS_DESC","Silazni poredak");
define("_AM_SYSTEM_USERS_LIMIT","Broj korisnika po stranici");
define("_AM_SYSTEM_USERS_RESULTS", "Rezultati pretraživanja");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Tip korisnika za prikaz");
define("_AM_SYSTEM_USERS_MAILOK","Samo korisnici koji prihvaćaju email");
define("_AM_SYSTEM_USERS_MAILNG","Samo korisnici koji ne prihvaćaju email");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Tip korisnika za prikaz");
define("_AM_SYSTEM_USERS_ACTIVE","Samo aktivni korisnici");
define("_AM_SYSTEM_USERS_INACTIVE","Samo neaktivni korisnici");
define("_AM_SYSTEM_USERS_BOTH", "Svi korisnici");
define("_AM_SYSTEM_USERS_SENDMAIL", "Pošalji email");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Dodaj korisnike u %s grupu");
define("_AM_SYSTEM_USERS_GROUPS", "Grupe");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Dodaj grupu");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Izbriši grupu");
define("_AM_SYSTEM_USERS_AYSYWTDU","Da li sigurno želite izbrisati ovog %s korisnika?");
define("_AM_SYSTEM_USERS_BYTHIS","Kod ovog će izvršavanja sve informacije o korisniku biti trajno uklonjene.");
define("_AM_SYSTEM_USERS_YES","Da");
define("_AM_SYSTEM_USERS_NO","Ne");
define("_AM_SYSTEM_USERS_YMCACF","Morate popuniti sva potrebna polja");
define("_AM_SYSTEM_USERS_CNRNU","Ne mogu registrirati novog korisnika.");
define("_AM_SYSTEM_USERS_EDEUSER","Uredi/Izbriši korisnike");
define("_AM_SYSTEM_USERS_NICKNAME","Nadimak");
define("_AM_SYSTEM_USERS_MODIFYUSER","Uredi korisnika");
define("_AM_SYSTEM_USERS_DELUSER","Izbriši korisnika");
define("_AM_SYSTEM_USERS_GO","Kreni!");
define("_AM_SYSTEM_USERS_ADDUSER","Dodaj korisnika");
define("_AM_SYSTEM_USERS_OPTION","Opcija");
define("_AM_SYSTEM_USERS_THEME","Tema");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Dopisti drugim korisnicima da vide ovu email adresu");
define("_AM_SYSTEM_USERS_RANK","Rang");
define("_AM_SYSTEM_USERS_NSRA","Nije pridružen posebni rang");
define("_AM_SYSTEM_USERS_NSRID","Nema posebnih rangova u bazi podataka");
define("_AM_SYSTEM_USERS_ACCESSLEV","Stupanj pristupa");
define("_AM_SYSTEM_USERS_SIGNATURE","Potpis");
define("_AM_SYSTEM_USERS_PASSWORD","Lozinka");
define("_AM_SYSTEM_USERS_INDICATECOF","* označava obavezna polja");
define("_AM_SYSTEM_USERS_NOTACTIVE","Ovaj korisnik nije aktiviran. Želite li aktivirati ovog korisnika?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Ažuriraj korisnika");
define("_AM_SYSTEM_USERS_USERINFO","Korisnikove informacije");
define("_AM_SYSTEM_USERS_USERID","Korisnički ID");
define("_AM_SYSTEM_USERS_RETYPEPD","Ponovi lozinku");
define("_AM_SYSTEM_USERS_CHANGEONLY","(samo za promjene)");
define("_AM_SYSTEM_USERS_USERPOST","Korisnikove objave");
define("_AM_SYSTEM_USERS_STORIES","Objave");
define("_AM_SYSTEM_USERS_COMMENTS","Komentari");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Klikni na tipku ispod za usklađivanje podataka ako smatrate da objave gornjeg korisnika ne prikazuju stvarni status");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Usklađivanje");
define("_AM_SYSTEM_USERS_USERDONEXIT","Korisnik ne postoji!");
define("_AM_SYSTEM_USERS_STNPDNM","Oprostite, nove lozinke se razlikuju. Kliknite za natrag i pokušajte ponovo");
define("_AM_SYSTEM_USERS_CNGTCOM","Ne mogu dobiti ukupni zbroj komentara");
define("_AM_SYSTEM_USERS_CNGTST","Ne mogu dobiti ukupni zbroj objava");
define("_AM_SYSTEM_USERS_CNUUSER","Ne mogu ažurirati korisnika");
define("_AM_SYSTEM_USERS_CNGUSERID","Ne mogu dobiti korisnikov IDS");
define("_AM_SYSTEM_USERS_LIST","Lista");
define("_AM_SYSTEM_USERS_NOUSERS", "Nema izabranih korisnika");
define("_AM_SYSTEM_USERS_CNRNU2","Novi korisnik se nije mogao dodati u grupe: %s.");
define("_AM_SYSTEM_USERS_SEARCH","Pretraživanje");
define("_AM_SYSTEM_USERS_SEARCH_USER","Pretraživanje korisnika:");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Napredno pretraživanje");
define("_AM_SYSTEM_USERS_EDIT","Uredi člana");
define("_AM_SYSTEM_USERS_DEL","Izbriši člana");
define("_AM_SYSTEM_USERS_DELETE","Izbriši");
define("_AM_SYSTEM_USERS_SUBMIT","Podnesi");
define("_AM_SYSTEM_USERS_PURGE","Čišćenje");
define("_AM_SYSTEM_USERS_ADD","Dodaj člana");
define("_AM_SYSTEM_USERS_VIEW","Pogled informacija o članu");
define("_AM_SYSTEM_USERS_NO_FOUND","Nema pronađenih korisnika");
define("_AM_SYSTEM_USERS_NOT_CONNECT","Nikad spojen");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Izbriši korisnika : %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Izbriši");
define("_AM_SYSTEM_USERS_NO_SUPP", "Korisnik ne može biti izbrisan: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "Administratorski korisnik se ne može obrisati: %s <br />");
define("_AM_SYSTEM_USERS_ERROR", "Greška:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "Sve grupe");
define("_AM_SYSTEM_USERS_ALLUSER", "Svi korisnici");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Samo aktivni korisnici");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Samo neaktivni korisnici");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","Korisničko ime %s već postoji");
define("_AM_SYSTEM_USERS_MAIL_ERROR","Korisnički email %s već postoji");

?>