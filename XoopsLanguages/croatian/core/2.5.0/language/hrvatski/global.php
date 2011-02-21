<?php
// $Id: global.php 5683 2010-11-01 11:03:22Z kris_fr $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 25.1.2011.
define('_PLEASEWAIT','Molim pričekajte');
define('_FETCHING','Učitivanje...');
define('_TAKINGBACK','Vraćam vas na mjesto gdje ste bili....');
define('_LOGOUT','Odjava');
define('_SUBJECT','Tema');
define('_MESSAGEICON','Ikona poruke');
define('_COMMENTS','Komentari');
define('_POSTANON','Objavljuj anonimno');
define('_DISABLESMILEY','Isključi emotikone');
define('_DISABLEHTML','Isključi HTML');
define('_PREVIEW','Pregledaj');
define('_GO','Potvrdi!');
define('_NESTED','Ugniježđeno');
define('_NOCOMMENTS','Nema komentara');
define('_FLAT','Ravno');
define('_THREADED','Nanizano');
define('_OLDESTFIRST','Prvo starije');
define('_NEWESTFIRST','Prvo novije');
define('_MORE','više...');
define('_MULTIPAGE','Da bi vaš članak bio prikazan na više stranica, ubacite riječ <font color=red>[pagebreak]</font> (sa zagradama) u članak.');
define('_IFNOTRELOAD','Ukoliko se stranica ne učita automatski, kliknite <a href=%s>ovdje</a>');
// Error messages issued by XoopsObject::cleanVars()
define( '_XOBJ_ERR_REQUIRED', '%s je obavezan' );
define( '_XOBJ_ERR_SHORTERTHAN', '%s mora biti kraće od %d znakova.' );
//%%%%%%    File Name themeuserpost.php     %%%%%
define('_PROFILE','Profil');
define('_POSTEDBY','Objavio');
define('_VISITWEBSITE','Posjetite web stranice');
define('_SENDPMTO','Pošalji privatnu poruku za %s');
define('_SENDEMAILTO','Pošalji email za %s');
define('_ADD','Dodaj');
define('_REPLY','Odgovori');
define('_DATE','Datum objave');   // Posted date
//%%%%%%    File Name admin_functions.php     %%%%%
define('_MAIN','Glavna');
define('_MANUAL','Ručno');
define('_INFO','Informacije');
define('_CPHOME','Kontrolna ploča');
define('_YOURHOME','Početna stranica');
//%%%%%%    File Name misc.php (who's-online popup)    %%%%%
define('_WHOSONLINE','Tko je online');
define('_GUESTS', 'Gosti');
define('_MEMBERS', 'Članovi');
define('_ONLINEPHRASE','<strong>%s</strong> korisnik(a) je online');
define('_ONLINEPHRASEX','<strong>%s</strong> korisnik(a) pregledava <strong>%s</strong>');
define('_CLOSE','Zatvori');  // Close window
//%%%%%%    File Name module.textsanitizer.php     %%%%%
define('_QUOTEC','Citat:');
//%%%%%%    File Name admin.php     %%%%%
define('_NOPERM','Oprostite, nemate prava za pristup ovoj stranici.');
//%%%%%        Common Phrases        %%%%%
define('_NO','Ne');
define('_YES','Da');
define('_EDIT','Uredi');
define('_DELETE','Izbriši');
define('_SUBMIT','Podnesi');
define('_MODULENOEXIST','Izabrani modul ne postoji!');
define('_ALIGN','Poravnavanje');
define('_LEFT','Lijevo');
define('_CENTER','Sredina');
define('_RIGHT','Desno');
define('_FORM_ENTER', 'Molimo upišite %s');
define('_MUSTWABLE','U datoteku %s se mora moći pisati od strane poslužitelja!');
// Module info
define('_PREFERENCES', 'Postavke');
define('_VERSION', 'Inačica');
define('_DESCRIPTION', 'Opis');
define('_AUTHOR', 'Autor');
define('_CREDITS', 'Zahvale');
define('_LICENCE', 'Licenca');
define('_ERRORS', 'Greške');
define('_NONE', 'Ništa');
define('_ON','uključeno');
define('_READS','čitanja');
define('_WELCOMETO','Dobrodošli na %s');
define('_SEARCH','Traži');
define('_ALL', 'Sve');
define('_TITLE', 'Naslov');
define('_OPTIONS', 'Opcije');
define('_QUOTE', 'Citat');
define('_LIST', 'Lista');
define('_LOGIN','Prijava');
define('_USERNAME','Korisničko ime: ');
define('_PASSWORD','Lozinka: ');
define('_SELECT','Izaberite');
define('_IMAGE','Slika');
define('_SEND','Pošalji');
define('_CANCEL','Odustani');
define('_ASCENDING','Uzlazno (A->Ž)');
define('_DESCENDING','Silazno (Ž->A)');
define('_BACK', 'Nazad');
define('_NOTITLE', 'Bez naslova');
/**
* Image manager
*/
define("_MD_ADDIMGCAT","Dodaj kategoriju");
define("_MD_IMGCATNAME","Ime kategorije");
define("_MD_IMGCATRGRP","Odaberite grupe koje mogu koristiti upravitelja slikama");
define("_MD_IMGCATWGRP","Odaberite grupe koje smiju uploadati slike");
define("_MD_IMGCATWEIGHT","Redoslijed prikazivanja u upravitelju slikama");
define("_MD_IMGCATDISPLAY","Redoslijed");
define("_MD_IMGCATSTRTYPE","Slike su uploadane u:");
define("_MD_STRTYOPENG","Ovo se kasnije ne može promijeniti!");
define("_MD_ASFILE","Spremi kao datoteke (u uploads mapi)");
define("_MD_INDB","Spremi u datoteku (kao binary \"blob\" podatak)");
define ("_MD_IMGMAIN","Kategorija"); 
define ("_MD_EDITIMGCAT", "Postavke slika");
define('_IMGMANAGER','Upravljanje slikama');
define('_NUMIMAGES', '%s slike');
define('_ADDIMAGE','Dodaj sliku');
define('_IMAGENAME','Ime:');
define('_IMGMAXSIZE','Maksimalna dozvoljena veličina slike (bajtova):');
define('_IMGMAXWIDTH','Maksimalna dozvoljena širina slike (pixela):');
define('_IMGMAXHEIGHT','Maximalna dozvoljena visina slike (pixela):');
define('_IMAGECAT','Kategorija:');
define('_IMAGEFILE','Datoteka slike:');
define('_IMGWEIGHT','Redoslijed prikazivanja slika u upravitelju slika:');
define('_IMGDISPLAY','Želite li prikazati ovu sliku?');
define('_IMAGEMIME','MIME tip:');
define('_FAILFETCHIMG', 'Ne mogu učitati datoteku %s');
define('_FAILSAVEIMG', 'Neuspjelo spremanje slike %s u bazu podataka');
define('_NOCACHE', 'Nema međuspremnika');
define('_CLONE', 'Klon');
//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define('_STARTSWITH', 'Počinje sa');
define('_ENDSWITH', 'Završava sa');
define('_MATCHES', 'Nađeno');
define('_CONTAINS', 'Sadrži');
define('_REQUIRED', 'Obavezno');
//%%%%%%    File Name commentform.php     %%%%%
define('_REGISTER','Registracija');
//%%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE','VELIČINA');  // font size
define('_FONT','FONT');  // font family
define('_COLOR','BOJA');  // font color
define('_EXAMPLE','UZORAK');
define('_ENTERURL','Upišite URL linka kojeg želite objaviti:');
define('_ENTERWEBTITLE','Unesite naslov web stranice:');
define('_ENTERIMGURL','Upišite URL slike koju želite objaviti.');
define('_ENTERIMGPOS','A sad, upišite poziciju slike.');
define('_IMGPOSRORL','\'R\' ili \'r\' za desno, \'L\' ili \'l\' za lijevo, ili ostavte prazno.');
define('_ERRORIMGPOS','GREŠKA! Upišite poziciju slike.');
define('_ENTEREMAIL','Upišite email adresu koju želite dodati.');
define('_ENTERCODE','Upišite kod koji želite dodati.');
define('_ENTERQUOTE','Upišite tekst koji želite citirati.');
define('_ENTERTEXTBOX','Upišite tekst u polje.');
define('_ALLOWEDCHAR','Dozvoljen broj znakova: ');
define('_CURRCHAR','Trenutni broj znakova: ');
define('_PLZCOMPLETE','Molimo vas da upišete naslov i poruku u polja.');
define('_MESSAGETOOLONG','Vaša poruka je predugačka.');
/**
* xoops smilie
*/
define('_AM_ADDSMILE',' Dodaj novog smajlića');
define('_AM_SMILECODE','Kod');
define('_AM_SMILEEMOTION','Opis');
define('_AM_DISPLAYF','Prikaži u formi');
//%%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 sekunda');
define('_SECONDS', '%s sekundi');
define('_MINUTE', '1 minuta');
define('_MINUTES', '%s minuta');
define('_HOUR', '1 sat');
define('_HOURS', '%s sati');
define('_DAY', '1 dan');
define('_DAYS', '%s dana');
define('_WEEK', '1 tjedan');
define('_MONTH', '1 mjesec');
define('_DATESTRING','d.m.Y H:m:s');
define('_MEDIUMDATESTRING','d.m.Y H:m');
define('_SHORTDATESTRING','d.m.Y');
/*
* The following characters are recognized in the format string:
* a - 'am' ili 'pm'
* A - 'AM' ili 'PM'
* d - dan u mjesecu, 2 broja s vodećim nulama; tj. '01' do '31'
* D - dan u tjednu, tekstualno, 3 slova; tj. 'Pon'
* F - mjesec, tekstualno, dugačko; tj. 'Siječanj'
* h - sat, 12-satni oblik; tj. '01' do '12'
* H - sat, 24-satni oblik; tj. '00' do '23'
* g - sat, 12-satni oblik bez vodećih nula; tj. '1' do '12'
* G - sat, 24-satni oblik bez vodećih nula; tj. '0' do '23'
* i - minuta; tj. '00' do '59'
* j - dani u mjesecu bez vodećih nula; tj. '1' do '31'
* l (malim slovima 'L') - dani u tjednu, tekstualno, dugačko; tj. 'Petak'
* L - logička vrijednost za prijestupnu godinu; tj. '0' ili '1'
* m - mjesec; tj. '01' do '12'
* n - mjesec bez vodećih nula; tj. '1' do '12'
* M - mjesec, tekstualno, 3 slova; tj. 'Sij'
* s - sekunde; tj. '00' do '59'
* S - Engleski redni nastavak, tekstualan, 2 slova; tj. 'th', 'nd'
* t - broj dana u određenom mjesecu; tj. '28' do '31'
* T - Vremenska zona je postavljena na ovom uređaju; tj. 'MDT'
* U - sekunde od epohe
* w - dan u tjednu, brojčano, tj. '0' (Nedelja) do '6' (Subota)
* Y - godina, 4 brojeva; tj. '2009'
* y - godina, 2 broja; tj. '09'
* z - dan u godini; tj. '0' do '365'
* Z - poravnavanje vremenske zone u sekundama (tj. '-43200' do '43200')
*/
// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'hr');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '0');
/**
* Additions to 2.4.0
**/
define('_RESET', 'Poništi');
define('_RE', 'Odg:');
?>