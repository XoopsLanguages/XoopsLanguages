<?php
// $Id: admin.php 4751 2010-05-01 15:35:45Z trabis $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 25.1.2011.

define("_PROFILE_AM_FIELD", "Polje");
define("_PROFILE_AM_FIELDS", "Polja");
define("_PROFILE_AM_CATEGORY", "Kategorija");
define("_PROFILE_AM_STEP", "Korak");

define("_PROFILE_AM_SAVEDSUCCESS", "%s uspješno spremljen");
define("_PROFILE_AM_DELETEDSUCCESS", "%s uspješno obrisan");
define("_PROFILE_AM_RUSUREDEL", "Da li sigurni da želite obrisati %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "Polje se ne može podesivo.");

define("_PROFILE_AM_ADD", "Dodaj");
define("_PROFILE_AM_EDIT", "Uredi");
define("_PROFILE_AM_TYPE", "Vrsta polja");
define("_PROFILE_AM_VALUETYPE", "Vrsta vrijednosti");
define("_PROFILE_AM_NAME", "Ime");
define("_PROFILE_AM_TITLE", "Naslov");
define("_PROFILE_AM_DESCRIPTION", "Opis");
define("_PROFILE_AM_REQUIRED", "Nužno?");
define("_PROFILE_AM_MAXLENGTH", "Maksimalna dužina");
define("_PROFILE_AM_WEIGHT", "Mjesto");
define("_PROFILE_AM_DEFAULT", "Zadano");
define("_PROFILE_AM_NOTNULL", "Nije prazno?");

define("_PROFILE_AM_ARRAY", "Niz");
define("_PROFILE_AM_EMAIL", "Email");
define("_PROFILE_AM_INT", "Cijeli broj");
define("_PROFILE_AM_TXTAREA", "Tekstualno područje");
define("_PROFILE_AM_TXTBOX", "Tekstualno polje");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "Drugo");
define("_PROFILE_AM_FLOAT", "Plivajuća točka");
define("_PROFILE_AM_DECIMAL", "Decimalni broj");
define("_PROFILE_AM_UNICODE_ARRAY", "Unicode niz");
define("_PROFILE_AM_UNICODE_EMAIL", "Unicode email");
define("_PROFILE_AM_UNICODE_TXTAREA", "Unicode tekstualno područje");
define("_PROFILE_AM_UNICODE_TXTBOX", "Unicode tekstualno polje");
define("_PROFILE_AM_UNICODE_URL", "Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON", "Polje je vidljivo na ovim grupama u profilu");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "Polje vidljivo na profilima za ove grupe");
define("_PROFILE_AM_PROF_VISIBLE", "Vidljivo");
define("_PROFILE_AM_PROF_EDITABLE", "Polje je moguće uređivati sa profila");
define("_PROFILE_AM_PROF_REGISTER", "Prikaži u formi za registraciju");
define("_PROFILE_AM_PROF_SEARCH", "Searchable by these groups");
define("_PROFILE_AM_PROF_ACCESS", "Profil je dostupan s ovih grupa");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin groupe: Ako korisnik pripada administratorskim grupama, trenutni korisnik ima pristup samo ako i onda ako je dozvoljeno toj korisničkoj grupi pristup administratorskoj grupi; inače</li>" .
        "<li>Grupe koje nisu obične: Ako korisnik pripada jednoj ili više običnih grupa (NE admin, user, anonymous), trenutni korisnik ima pristup ako i samo onda ako jedna od tih grupa ima dozvoljen pristup bilo kojoj grupi koja nije obična; inače</li>" .
        "<li>Korisnička grupa: Ako korisnik pripada samo korisničkoj grupi, trenutni korisnik ima pristup ako i samo onda ako jedna od njegovih grupa ima pristup korisničkoj grupi</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE", "Polje ");
define("_PROFILE_AM_FIELDVISIBLEFOR", " je vidljivo za ");
define("_PROFILE_AM_FIELDVISIBLEON", " pregledavanje profila od ");
define("_PROFILE_AM_FIELDVISIBLETOALL", "- Svi");
define("_PROFILE_AM_FIELDNOTVISIBLE", "nije vidljivo");

define("_PROFILE_AM_CHECKBOX", "Checkbox");
define("_PROFILE_AM_GROUP", "Odabir grupe");
define("_PROFILE_AM_GROUPMULTI", "Višestruki odabir grupe");
define("_PROFILE_AM_LANGUAGE", "Odabir jezika");
define("_PROFILE_AM_RADIO", "Radio tipke");
define("_PROFILE_AM_SELECT", "Odabir");
define("_PROFILE_AM_SELECTMULTI", "Višestruki odabir");
define("_PROFILE_AM_TEXTAREA", "Tekstualno područje");
define("_PROFILE_AM_DHTMLTEXTAREA", "DHTML tekstualno polje");
define("_PROFILE_AM_TEXTBOX", "Tekstualno polje");
define("_PROFILE_AM_TIMEZONE", "Vremenska zona");
define("_PROFILE_AM_YESNO", "Radio Da/Ne");
define("_PROFILE_AM_DATE", "Datum");
define("_PROFILE_AM_AUTOTEXT", "Automatski tekst");
define("_PROFILE_AM_DATETIME", "Datum i vrijeme");
define("_PROFILE_AM_LONGDATE", "Prošireni datum");

define("_PROFILE_AM_ADDOPTION", "Dodaj opciju");
define("_PROFILE_AM_REMOVEOPTIONS", "Makni opciju");
define("_PROFILE_AM_KEY", "Vrijednost koju treba spremiti");
define("_PROFILE_AM_VALUE", "Tekst koji treba prikazati");

// User management
define("_PROFILE_AM_EDITUSER", "Uredi korisnika");
define("_PROFILE_AM_SELECTUSER", "Izaberi korisnika");
define("_PROFILE_AM_ADDUSER","Dodaj korisnika");
define("_PROFILE_AM_THEME","Tema");
define("_PROFILE_AM_RANK","Rang");
define("_PROFILE_AM_USERDONEXIT","Korisnik ne postoji!");
define("_PROFILE_MA_USERLEVEL", "Korisnički nivo");

define("_PROFILE_MA_ACTIVE", "Aktivan");
define("_PROFILE_MA_INACTIVE", "Neaktivan");
define("_PROFILE_AM_USERCREATED", "Korisnik je stvoren");

define("_PROFILE_AM_CANNOTDELETESELF", "Brisanje svog korisničkog računa nije dozvoljeno - koristite stranicu profila da bi obrisali svoj korisnički račun");
define("_PROFILE_AM_CANNOTDELETEADMIN", "Brisanje administratorskog korisničkog računa nije dozvoljeno");

define("_PROFILE_AM_NOSELECTION", "Nema izabranog korisnika");
define("_PROFILE_AM_USER_ACTIVATED", "Korisnik je aktiviran");
define("_PROFILE_AM_USER_DEACTIVATED", "Korisnik je deaktiviran");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "Greška: Korisnik se NIJE aktiviran");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "Greška: Korisnik NIJE deaktiviran");

define("_PROFILE_AM_STEPNAME", "Korak ime");
define("_PROFILE_AM_STEPORDER", "Korak redosljed");
define("_PROFILE_AM_STEPSAVE", "Spremi nakon koraka");
define("_PROFILE_AM_STEPINTRO", "Opis koraka");

?>