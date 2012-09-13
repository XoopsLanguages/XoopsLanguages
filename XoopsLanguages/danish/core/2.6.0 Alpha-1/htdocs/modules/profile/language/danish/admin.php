<?php
// $Id$
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Michael Albertsen (culex)

define("_PROFILE_AM_FIELD","Felt");
define("_PROFILE_AM_FIELDS","Felter");
define("_PROFILE_AM_CATEGORY","Kategori");
define("_PROFILE_AM_STEP","Trin");

define("_PROFILE_AM_SAVEDSUCCESS","%s er gemt");
define("_PROFILE_AM_DELETEDSUCCESS","%s er slettet");
define("_PROFILE_AM_RUSUREDEL","Er du sikker på du vil slette %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","Feltet kan ikke konfigureres.");

define("_PROFILE_AM_ADD","Tilføj %s");
define("_PROFILE_AM_EDIT","Redigér %s");
define("_PROFILE_AM_TYPE","Felt type");
define("_PROFILE_AM_VALUETYPE","Værdi type");
define("_PROFILE_AM_NAME","Navn");
define("_PROFILE_AM_TITLE","Titel");
define("_PROFILE_AM_DESCRIPTION","Beskrivelse");
define("_PROFILE_AM_REQUIRED","Obligatorisk?");
define("_PROFILE_AM_MAXLENGTH","Maksimal længde");
define("_PROFILE_AM_WEIGHT","Vægt");
define("_PROFILE_AM_DEFAULT","Standard");
define("_PROFILE_AM_NOTNULL","Ikke nul?");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","Email");
define("_PROFILE_AM_INT","Integer");
define("_PROFILE_AM_TXTAREA","Tekst område");
define("_PROFILE_AM_TXTBOX","Tekst felt");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Andet");
define("_PROFILE_AM_FLOAT","Floating Point");
define("_PROFILE_AM_DECIMAL","Decimaltal");
define("_PROFILE_AM_UNICODE_ARRAY","Unicode Array");
define("_PROFILE_AM_UNICODE_EMAIL","Unicode Email");
define("_PROFILE_AM_UNICODE_TXTAREA","Unicode-tekst Område");
define("_PROFILE_AM_UNICODE_TXTBOX","Unicode-tekst felt");
define("_PROFILE_AM_UNICODE_URL","Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON","Felter synligt på disse gruppers profiler");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Felter synlig i profilen for disse grupper");
define("_PROFILE_AM_PROF_VISIBLE","Synlighed");
define("_PROFILE_AM_PROF_EDITABLE","Felt kan rettes fra profil");
define("_PROFILE_AM_PROF_REGISTER","Vis i registrerings formular");
define("_PROFILE_AM_PROF_SEARCH","Søgebare af disse grupper");
define("_PROFILE_AM_PROF_ACCESS","Profil tilgængelige for disse grupper");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin grupper: Hvis en bruger tilhører en admin gruppe, har den aktuelle bruger adgang, hvis og kun hvis en af den aktuelle brugers grupper har rettighed til admin-gruppen; ellers</li>" .
        "<li>Ikke grundlæggende grupper: Hvis en bruger tilhører en eller flere ikke grundlæggende grupper (IKKE admin, bruger-, anonyme), har den aktuelle bruger adgang, hvis og kun hvis en af den aktuelle brugers grupper får rettighed til at adgang via en af de ikke grundlæggende grupper ; Ellers</li>" .
        "<li>Bruger Gruppe: Hvis en bruger kun tilhører bruger gruppe har den aktuelle bruger adgang, hvis og kun hvis en af hans grupper har rettighed til at få adgang til Bruger-gruppe</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Feltet ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," er synligt for ");
define("_PROFILE_AM_FIELDVISIBLEON"," ser en profil ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- alle");
define("_PROFILE_AM_FIELDNOTVISIBLE","er ikke synligt");

define("_PROFILE_AM_CHECKBOX","Afkrydsningsfelt");
define("_PROFILE_AM_GROUP","Vælg gruppe");
define("_PROFILE_AM_GROUPMULTI","Multi vælg gruppe");
define("_PROFILE_AM_LANGUAGE","Vælg sprog");
define("_PROFILE_AM_RADIO","Radio knapper");
define("_PROFILE_AM_SELECT","Vælg");
define("_PROFILE_AM_SELECTMULTI","Multi vælg");
define("_PROFILE_AM_TEXTAREA","Tekst område");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Tekst område");
define("_PROFILE_AM_TEXTBOX","Tekst felt");
define("_PROFILE_AM_TIMEZONE","Tidszone");
define("_PROFILE_AM_YESNO","Radio Ja/Nej");
define("_PROFILE_AM_DATE","Dato");
define("_PROFILE_AM_AUTOTEXT","Auto Tekst");
define("_PROFILE_AM_DATETIME","Dato og Tid");
define("_PROFILE_AM_LONGDATE","Lang Dato");

define("_PROFILE_AM_ADDOPTION","Tilføj muligheder");
define("_PROFILE_AM_REMOVEOPTIONS","Fjern muligheder");
define("_PROFILE_AM_KEY","Værdi der skal gemmes");
define("_PROFILE_AM_VALUE","Tekst der skal vises");

// User management
define("_PROFILE_AM_EDITUSER","Edit User");
define("_PROFILE_AM_SELECTUSER","Select User");
define("_PROFILE_AM_ADDUSER","Add User");
define("_PROFILE_AM_THEME","Theme");
define("_PROFILE_AM_RANK","Rank");
define("_PROFILE_AM_USERDONEXIT","Bruger eksisterer ikke!");
define("_PROFILE_MA_USERLEVEL", "Brugergrad");

define("_PROFILE_MA_ACTIVE","Active");
define("_PROFILE_MA_INACTIVE","Inactive");
define("_PROFILE_AM_USERCREATED","User Created");

define("_PROFILE_AM_CANNOTDELETESELF","Deleting your own account is not allowed - use your profile page to delete your own account");
define("_PROFILE_AM_CANNOTDELETEADMIN","Deleting an administrator account is not allowed");

define("_PROFILE_AM_NOSELECTION","No user selected");
define("_PROFILE_AM_USER_ACTIVATED","User activated");
define("_PROFILE_AM_USER_DEACTIVATED","User deactivated");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Error: User NOT activated");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Error: User NOT deactivated");

define("_PROFILE_AM_STEPNAME","Step name");
define("_PROFILE_AM_STEPORDER","Step order");
define("_PROFILE_AM_STEPSAVE","Save after step");
define("_PROFILE_AM_STEPINTRO","Step description");

//1.62
define('_PROFILE_AM_ACTION', 'Handling');

//Since 2.6
define("_PROFILE_AM_CANNOTDEACTIVATEWEBMASTERS", "Deaktivering af en administratorkonto er ikke tilladt");
define("_PROFILE_AM_CATEGORY_LIST", "List af kategorier");
define("_PROFILE_AM_STEP_LIST", "List af registreringstrin");
define("_PROFILE_AM_FIELD_LIST", "List af felter");
define("_PROFILE_AM_ERROR_WEIGHT","Du skal angive et positivt tal.");