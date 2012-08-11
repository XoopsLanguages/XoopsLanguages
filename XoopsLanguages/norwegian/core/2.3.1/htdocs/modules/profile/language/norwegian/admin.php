<?php
// $Id: admin.php 2021 2008-08-31 02:02:45Z phppp $
define("_PROFILE_AM_FIELD","Felt");
define("_PROFILE_AM_FIELDS","Felter");
define("_PROFILE_AM_CATEGORY","Kategori");
define("_PROFILE_AM_STEP","Trinn");

define("_PROFILE_AM_SAVEDSUCCESS","%s er lagret");
define("_PROFILE_AM_DELETEDSUCCESS","%s er slettet");
define("_PROFILE_AM_RUSUREDEL","Er du sikker på at du vil slette %s");

define("_PROFILE_AM_ADD","Legg til");
define("_PROFILE_AM_EDIT","Rediger");
define("_PROFILE_AM_TYPE","Felt type");
define("_PROFILE_AM_VALUETYPE","Verdi type");
define("_PROFILE_AM_NAME","Navn");
define("_PROFILE_AM_TITLE","Tittel");
define("_PROFILE_AM_DESCRIPTION","Beskrivelse");
define("_PROFILE_AM_REQUIRED","Obligatorisk?");
define("_PROFILE_AM_MAXLENGTH","Max lengde");
define("_PROFILE_AM_WEIGHT","Vegt");
define("_PROFILE_AM_DEFAULT","Standard");
define("_PROFILE_AM_NOTNULL","Ikke null?");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","Epost");
define("_PROFILE_AM_INT","Integer");
define("_PROFILE_AM_TXTAREA","Tekst område");
define("_PROFILE_AM_TXTBOX","Tekst felt");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Annet");

define("_PROFILE_AM_PROF_VISIBLE_ON","Felter synligt på disse gruppers profiler");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Felter synlig i profilen for disse grupper");
define("_PROFILE_AM_PROF_VISIBLE","Synlighet");
define("_PROFILE_AM_PROF_EDITABLE","Felt kan rettes fra profil");
define("_PROFILE_AM_PROF_REGISTER","Vis i registrerings formular");
define("_PROFILE_AM_PROF_SEARCH","Søkbare av disse grupper");
define("_PROFILE_AM_PROF_ACCESS","Profil tilgjengelige for disse grupper");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin grupper: Hvis en bruker tilhører en admin gruppe, har den aktuelle bruker adgang, hvis og kun hvis en av den aktuelle brukers grupper har rettighet til admin-gruppen; ellers</li>" .
        "<li>Ikke grundleggende grupper: Hvis en bruker tilhører en eller flere ikke grundleggende grupper (IKKE admin, bruger-, anonyme), har den aktuelle bruker adgang, hvis og kun hvis en av den aktuelle brukers grupper får adgangsrettighet til via en av de ikke grundleggende grupper ; Ellers</li>" .
        "<li>Bruker Gruppe: Hvis en bruker kun tilhører bruker gruppe har den aktuelle bruker adgang, hvis og kun hvis en av hans grupper har rettighet til å få adgang til Bruker-gruppe</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Feltet ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," er synlig for ");
define("_PROFILE_AM_FIELDVISIBLEON"," ser en profil ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- alle");
define("_PROFILE_AM_FIELDNOTVISIBLE","er ikke synlig");

define("_PROFILE_AM_CHECKBOX","Check boks");
define("_PROFILE_AM_GROUP","Velg gruppe");
define("_PROFILE_AM_GROUPMULTI","Multi velg gruppe");
define("_PROFILE_AM_LANGUAGE","Velg sprog");
define("_PROFILE_AM_RADIO","Radio knapper");
define("_PROFILE_AM_SELECT","Velg");
define("_PROFILE_AM_SELECTMULTI","Multi velg");
define("_PROFILE_AM_TEXTAREA","Tekst område");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Tekst område");
define("_PROFILE_AM_TEXTBOX","Tekst felt");
define("_PROFILE_AM_TIMEZONE","Tidszone");
define("_PROFILE_AM_YESNO","Radio Ja/Nej");
define("_PROFILE_AM_DATE","Dato");
define("_PROFILE_AM_AUTOTEXT","Auto Tekst");
define("_PROFILE_AM_DATETIME","Dato og Tid");
define("_PROFILE_AM_LONGDATE","Lang Dato");

define("_PROFILE_AM_ADDOPTION","Legg til muligheter");
define("_PROFILE_AM_REMOVEOPTIONS","Fjern muligheter");
define("_PROFILE_AM_KEY","Nøkkel");
define("_PROFILE_AM_VALUE","Verdi");

// User management
define("_PROFILE_AM_EDITUSER","Rediger bruker");
define("_PROFILE_AM_SELECTUSER","Velg bruker");
define("_PROFILE_AM_ADDUSER","Legg til bruker");
define("_PROFILE_AM_THEME","Tema");
define("_PROFILE_AM_RANK","Rang");
define("_PROFILE_AM_USERDONEXIT","Bruker eksisterer ikke!");
define("_PROFILE_MA_USERLEVEL","Bruker Level");

define("_PROFILE_MA_ACTIVE","Aktiv");
define("_PROFILE_MA_INACTIVE","Inaktiv");
define("_PROFILE_AM_USERCREATED","Bruker opprettet");

define("_PROFILE_AM_CANNOTDELETESELF","Det er ikke tillatt å slette sin egen konto - Benytt din profil side for å slette din egen konto");

define("_PROFILE_AM_NOSELECTION","Ingen bruker valgt");
define("_PROFILE_AM_USER_ACTIVATED","Bruker aktivert");
define("_PROFILE_AM_USER_DEACTIVATED","Bruker deaktiveret");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Feil: Bruker IKKE aktivert");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Feil: Bruker IKKE deaktivert");

define("_PROFILE_AM_STEPNAME","Trinn navn");
define("_PROFILE_AM_STEPORDER","Trin rekkefølge");
define("_PROFILE_AM_STEPSAVE","Lagre etter trinn");
define("_PROFILE_AM_STEPINTRO","Trinn beskivelse");
?>