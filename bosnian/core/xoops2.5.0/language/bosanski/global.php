<?php
// $Id: global.php 5683 2010-11-01 11:03:22Z kris_fr $
// _LANGCODE: ba
// _CHARSET : UTF-8
// Translator: XOOPSBA.ORG Team, http://www.xoopsba.org
define('_PLEASEWAIT', 'Sačekaj molimo te');
define('_FETCHING', 'Učitava se...');
define('_TAKINGBACK', 'Vraćamo te nazad gdje ste i bili...');
define('_LOGOUT', 'Odjavi se');
define('_SUBJECT', 'Tema');
define('_MESSAGEICON', 'Ikona poruke');
define('_COMMENTS', 'Komentari');
define('_POSTANON', 'Pošalji anonimno');
define('_DISABLESMILEY', 'Isključi smjehuljke');
define('_DISABLEHTML', 'Isključi html');
define('_PREVIEW', 'Vidi');
define('_GO', 'Idi!');
define('_NESTED', 'Ugniježdeno');
define('_NOCOMMENTS', 'Nema komentara');
define('_FLAT', 'Ravno');
define('_THREADED', 'Skraćeno');
define('_OLDESTFIRST', 'Prvo starije');
define('_NEWESTFIRST', 'Prvo novije');
define('_MORE', 'više...');
define('_MULTIPAGE', 'Ako želiš sadržaj članka prikazati i na sljedećoj stranici, onda koristi riječ <font color=red>[pagebreak]</font> (sa zagradama) u članku gdje želiš nastaviti članač na sljedećoj stranici.');
define('_IFNOTRELOAD', 'Ako se stranica ne učita automatski, onda molimo te da klikneš <a href=\'%s\'>ovdje</a>');
// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED', '%s je obavezno');
define('_XOBJ_ERR_SHORTERTHAN', '%s mora biti kraće od %d oznaka.');
// %%%%%%    File Name themeuserpost.php     %%%%%
define('_PROFILE', 'Profil');
define('_POSTEDBY', 'Napisao-la');
define('_VISITWEBSITE', 'Posjeti Web stranicu');
define('_SENDPMTO', 'Pošalji privatnu poruku za %s');
define('_SENDEMAILTO', 'Pošalji Email za %s');
define('_ADD', 'Dodaj');
define('_REPLY', 'Odgovori');
define('_DATE', 'Datum'); // Posted date
// %%%%%%    File Name admin_functions.php     %%%%%
define('_MAIN', 'Glavna');
define('_MANUAL', 'Manualno');
define('_INFO', 'Info');
define('_CPHOME', 'Administracija');
define('_YOURHOME', 'Početna');
// %%%%%%    File Name misc.php (who's-online popup)    %%%%%
define('_WHOSONLINE', 'Ko je online');
define('_GUESTS', 'Gosti');
define('_MEMBERS', 'članovi');
define('_ONLINEPHRASE', '<strong>%s</strong> posjetilac(a) je online');
define('_ONLINEPHRASEX', '<strong>%s</strong> posjetilac(a) pregleda <strong>%s</strong>');
define('_CLOSE', 'Zatvori'); // Close window
// %%%%%%    File Name module.textsanitizer.php     %%%%%
define('_QUOTEC', 'Citat:');
// %%%%%%    File Name admin.php     %%%%%
define('_NOPERM', 'Izvinjajemo se, tebi nije dozvoljen pristup ovome djelu.');
// %%%%%        Common Phrases        %%%%%
define('_NO', 'Ne');
define('_YES', 'Da');
define('_EDIT', 'Uredi');
define('_DELETE', 'Izbriši');
define('_SUBMIT', 'Pošalji');
define('_MODULENOEXIST', 'Izabrani modul više ne postoji!');
define('_ALIGN', 'Redoslijed');
define('_LEFT', 'Lijevo');
define('_CENTER', 'Centar');
define('_RIGHT', 'Desno');
define('_FORM_ENTER', 'Molimo te upiši %s');
define('_MUSTWABLE', 'U podatak %s na serveru mora biti odobreno pisanje!'); // %s represents file name
// Module info
define('_PREFERENCES', 'Podešavanje');
define('_VERSION', 'Vezija');
define('_DESCRIPTION', 'Opis');
define('_AUTHOR', 'Autor');
define('_CREDITS', 'Krediti');
define('_LICENCE', 'Licence');
define('_ERRORS', 'Greške');
define('_NONE', 'Ništa');
define('_ON', 'uključeno');
define('_READS', 'čitano');
define('_WELCOMETO', 'Dobrodošli na %s');
define('_SEARCH', 'Traži');
define('_ALL', 'Sve');
define('_TITLE', 'Naslov');
define('_OPTIONS', 'Opcije');
define('_QUOTE', 'Citat');
define('_LIST', 'Lista');
define('_LOGIN', 'Prijavi se');
define('_USERNAME', 'Nik ime: ');
define('_PASSWORD', 'Lozinka: ');
define('_SELECT', 'Izaberi');
define('_IMAGE', 'Slika');
define('_SEND', 'Pošalji');
define('_CANCEL', 'Odustani');
define('_ASCENDING', 'ABC redoslijed');
define('_DESCENDING', 'BCA redoslijed');
define('_BACK', 'Nazad');
define('_NOTITLE', 'Nema naslova');
/**
* Image manager
*/
define("_MD_ADDIMGCAT","Dodaj kategoriju");
define("_MD_IMGCATNAME","Naziv kategorije");
define("_MD_IMGCATRGRP","Izaberi grupe koje mogu koristiti menadzer slika");
define("_MD_IMGCATWGRP","Izaberi grupe koje smiju uploadati slike sa svoga računara");
define("_MD_IMGCATWEIGHT","Redoslijed slika u mendzeru slika");
define("_MD_IMGCATDISPLAY","Prikaži");
define("_MD_IMGCATSTRTYPE","Slike su uploadane u:");
define("_MD_STRTYOPENG","Kasnije se nemože ovo izmjenuti!");
define("_MD_ASFILE","Podaci su memorisani (u uploads direktoriju)");
define("_MD_INDB","Memorisano je u bazi podatakae (kao binary \"blob\" podatak)");
define ("_MD_IMGMAIN","Kategorija"); 
define ("_MD_EDITIMGCAT", "Podešavanje slika");
define('_IMGMANAGER', 'Menadzer slika');
define('_NUMIMAGES', '%s slika');
define('_ADDIMAGE', 'Dodaj sliku');
define('_IMAGENAME', 'Naziv:');
define('_IMGMAXSIZE', 'Max dozvoljena veličina (u bytima):');
define('_IMGMAXWIDTH', 'Max dozvoljena širina (u pixelima):');
define('_IMGMAXHEIGHT', 'Max dozvoljena visina (u pixelima):');
define('_IMAGECAT', 'Kategorija:');
define('_IMAGEFILE', 'Podatak slike:');
define('_IMGWEIGHT', 'Priži redoslijed u menadzeru slika:');
define('_IMGDISPLAY', 'Prikaži ovu sliku?');
define('_IMAGEMIME', 'MIME typ:');
define('_FAILFETCHIMG', 'Nemože se uploadati podatak %s');
define('_FAILSAVEIMG', 'Nemože se memorisati slika %s u bazu podataka');
define('_NOCACHE', 'Bez memorije');
define('_CLONE', 'Kloniraj');
// %%%%%    For xoopsform files %%%%%
define('_STARTSWITH', 'Startovati sa');
define('_ENDSWITH', 'Završiti sa');
define('_MATCHES', 'Mečevi');
define('_CONTAINS', 'Sadržaji');
define('_REQUIRED', 'Obavezno');
// %%%%%%    File Name commentform.php     %%%%%
define('_REGISTER', 'Registracija');
// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE', 'VELIčINA'); // font size
define('_FONT', 'FONT'); // font family
define('_COLOR', 'BOJA'); // font color
define('_EXAMPLE', 'PRIMJERI');
define('_ENTERURL', 'Upiši URL od linka kojeg želiš dodati:');
define('_ENTERWEBTITLE', 'Upiši naslov od web stranice:');
define('_ENTERIMGURL', 'Upiši URL od slike koju želiš dodati.');
define('_ENTERIMGPOS', 'Sada, upiši poziciju gdje se slika treba prikazati.');
define('_IMGPOSRORL', '\'R\' ili \'r\' za desno, \'L\' ili \'l\' za lijevo, ili ostavi prazno.');
define('_ERRORIMGPOS', 'GRE©KA! Upiši poziciju slike.');
define('_ENTEREMAIL', 'Upiši email adresu koju želiš dodati.');
define('_ENTERCODE', 'Upiši kodove koje želiš dodati.');
define('_ENTERQUOTE', 'Upiši tekst kojeg želiš citirati.');
define('_ENTERTEXTBOX', 'Molimo te upiši tekst u tekstbox kojeg želiš upisati.');
define('_ALLOWEDCHAR', 'Dozvoljeno max slova u tekstua: ');
define('_CURRCHAR', 'Trenutno slova je upisano: ');
define('_PLZCOMPLETE', 'Molimo te upiši naslov i u polje tekst.');
define('_MESSAGETOOLONG', 'Tvoj tekst je predugačak.');
/**
* xoops smilie
*/
define('_AM_ADDSMILE',' Dodaj novi Smjehuljak');
define('_AM_SMILECODE','Kode');
define('_AM_SMILEEMOTION','Opis');
define('_AM_DISPLAYF','Prikaži ga u formularu teksta');
// %%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 sekunda');
define('_SECONDS', '%s sekundi');
define('_MINUTE', '1 minuta');
define('_MINUTES', '%s minuta');
define('_HOUR', '1 sat');
define('_HOURS', '%s sati');
define('_DAY', '1 dan');
define('_DAYS', '%s dana');
define('_WEEK', '1 sedmica');
define('_MONTH', '1 mjesec');
define("_DATESTRING","d.m.Y H:i");
define("_MEDIUMDATESTRING","d.m.Y H:i");
define("_SHORTDATESTRING","d.m.Y");
//define('_DATESTRING', 'n/j/Y G:i:s');
//define('_MEDIUMDATESTRING', 'n/j/Y G:i');
//define('_SHORTDATESTRING', 'n/j/Y');
/**
* The following characters are recognized in the format string:
* a - 'am' or 'pm'
* A - 'AM' or 'PM'
* d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
* D - day of the week, textual, 3 letters; i.e. 'Fri'
* F - month, textual, long; i.e. 'January'
* h - hour, 12-hour format; i.e. '01' to '12'
* H - hour, 24-hour format; i.e. '00' to '23'
* g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
* G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
* i - minutes; i.e. '00' to '59'
* j - day of the month without leading zeros; i.e. '1' to '31'
* l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
* L - boolean for whether it is a leap year; i.e. '0' or '1'
* m - month; i.e. '01' to '12'
* n - month without leading zeros; i.e. '1' to '12'
* M - month, textual, 3 letters; i.e. 'Jan'
* s - seconds; i.e. '00' to '59'
* S - English ordinal suffix, textual, 2 characters; i.e. 'th', 'nd'
* t - number of days in the given month; i.e. '28' to '31'
* T - Timezone setting of this machine; i.e. 'MDT'
* U - seconds since the epoch
* w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
* Y - year, 4 digits; i.e. '1999'
* y - year, 2 digits; i.e. '99'
* z - day of the year; i.e. '0' to '365'
* Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/
// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'ba');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '0');
/**
* Additions to 2.4.0
**/
define('_RESET', 'Reset');
define('_RE', 'Od:');
?>