<?php
// $Id: admin.php 2263 2008-10-09 04:26:04Z phppp $
// _LANGCODE: ba
// _CHARSET : USO-8859-2
// Translator: saba

define("_PROFILE_AM_FIELD","Polje");
define("_PROFILE_AM_FIELDS","Polja");
define("_PROFILE_AM_CATEGORY","Kategorija");
define("_PROFILE_AM_STEP","Etapa");

define("_PROFILE_AM_SAVEDSUCCESS","%s memorisanje je uspjelo");
define("_PROFILE_AM_DELETEDSUCCESS","%s brisanje je uspjelo");
define("_PROFILE_AM_RUSUREDEL","Jesi li siguran(a) da &#382;eli&scaron; izbrisati %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","Ovo polje se nemo&#382;e pode&scaron;avati.");

define("_PROFILE_AM_ADD","Dodaj %s");
define("_PROFILE_AM_EDIT","Uredi %s");
define("_PROFILE_AM_TYPE","Tip polja");
define("_PROFILE_AM_VALUETYPE","Tip vrijednosti");
define("_PROFILE_AM_NAME","Naziv");
define("_PROFILE_AM_TITLE","Naslov");
define("_PROFILE_AM_DESCRIPTION","Kratki opis");
define("_PROFILE_AM_REQUIRED","Neophodno?");
define("_PROFILE_AM_MAXLENGTH","Max. du&#382;ina");
define("_PROFILE_AM_WEIGHT","Redoslijed");
define("_PROFILE_AM_DEFAULT","Standard");
define("_PROFILE_AM_NOTNULL","Ne Nula?");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","Email");
define("_PROFILE_AM_INT","Cjelina");
define("_PROFILE_AM_TXTAREA","Tekst Area");
define("_PROFILE_AM_TXTBOX","Tekst polje");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Drugo");

define("_PROFILE_AM_PROF_VISIBLE_ON","Polje vidno za ove grupe profila");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Polje vidno u profilu ovih grupa");
define("_PROFILE_AM_PROF_VISIBLE","Vidno");
define("_PROFILE_AM_PROF_EDITABLE","Polje ure&#273;eno od profila");
define("_PROFILE_AM_PROF_REGISTER","Prikazati u formularu registracije");
define("_PROFILE_AM_PROF_SEARCH","Pretra&#382;ivati mogu ove grupe");
define("_PROFILE_AM_PROF_ACCESS","Profili dostupni ovim grupama");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin grupe: Ako je neki &#269;lan pripadnik admin grupe, onda taj &#269;lan ima pristup odobren i minimalnio jedan mora korisnik biti admin; else</li>" .
        "<li>Ne osnovne grupe: Ako &#269;lan pripada u ne osnovne grupe (Ne admin, &#269;lan, gosti), onda aktuelni èlan ima pristup ako je neka od grupa izabrana a da je ne osnovna grupa; else</li>" .
        "<li>&#268;lanovi grupa: Svi &#269;lanovi ove grupe imaju pristup dozvoljen</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Polje ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," je vidno za ");
define("_PROFILE_AM_FIELDVISIBLEON"," prikazuje se u profilu na ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Svi");
define("_PROFILE_AM_FIELDNOTVISIBLE","nije vidno");

define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","Izaberi grupu");
define("_PROFILE_AM_GROUPMULTI","Multi izbor grupa");
define("_PROFILE_AM_LANGUAGE","Izaberi govor");
define("_PROFILE_AM_RADIO","Radio Buttoni");
define("_PROFILE_AM_SELECT","Izaberi");
define("_PROFILE_AM_SELECTMULTI","Multi izaberi");
define("_PROFILE_AM_TEXTAREA","Tekst Area");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Tekst Area");
define("_PROFILE_AM_TEXTBOX","Tekst polje");
define("_PROFILE_AM_TIMEZONE","Vremenska zona");
define("_PROFILE_AM_YESNO","Radio Da/Ne");
define("_PROFILE_AM_DATE","Datum");
define("_PROFILE_AM_AUTOTEXT","Auto Tekst");
define("_PROFILE_AM_DATETIME","Datum i vrijeme");
define("_PROFILE_AM_LONGDATE","Dugi datum");

define("_PROFILE_AM_ADDOPTION","Dodaj opciju");
define("_PROFILE_AM_REMOVEOPTIONS","Izbri&scaron;i opcije");
define("_PROFILE_AM_KEY","Vrijednost &#263;e biti spremljena");
define("_PROFILE_AM_VALUE","Tekst &#263;e biti prikazan");

// User management
define("_PROFILE_AM_EDITUSER","Uredi &#269;lana");
define("_PROFILE_AM_SELECTUSER","Izaberi &#269;lana");
define("_PROFILE_AM_ADDUSER","Dodaj &#269;lana");
define("_PROFILE_AM_THEME","Theme");
define("_PROFILE_AM_RANK","Rang");
define("_PROFILE_AM_USERDONEXIT","&#268;lan ne postoji!");
define("_PROFILE_MA_USERLEVEL","&#268;lana level");

define("_PROFILE_MA_ACTIVE","Aktivan");
define("_PROFILE_MA_INACTIVE","Neaktivan");
define("_PROFILE_AM_USERCREATED","&#268;lan je aktiviran");

define("_PROFILE_AM_CANNOTDELETESELF","Brisanje vlastitog registrovanog profila nije dozvoljeno - koristi svoga profila stranicu gdje mo&#382;e&scaron; izbrisati svoj registrovani profil");
define("_PROFILE_AM_CANNOTDELETEADMIN","Brisanje Administratora nije dozvoljeno");

define("_PROFILE_AM_NOSELECTION","&#268;lan nije izabran");
define("_PROFILE_AM_USER_ACTIVATED","&#268;lan je aktiviran");
define("_PROFILE_AM_USER_DEACTIVATED","&#268;lan je deaktiviran");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Gre&scaron;ka: &#268;lan nije aktiviran");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Gre&scaron;ka: &#268;lan nije deaktiviran");

define("_PROFILE_AM_STEPNAME","Naziv Etape");
define("_PROFILE_AM_STEPORDER","Etape redoslijed");
define("_PROFILE_AM_STEPSAVE","Memori&scaron;i poslije Etapu");
define("_PROFILE_AM_STEPINTRO","Opis Etape");
?>