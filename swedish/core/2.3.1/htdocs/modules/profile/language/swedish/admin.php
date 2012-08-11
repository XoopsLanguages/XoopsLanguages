<?php
// $Id: admin.php,v 1.3 2005/08/08 06:29:27 skalpa Exp $
define("_PROFILE_AM_FIELD","Fält");
define("_PROFILE_AM_FIELDS","Fält");
define("_PROFILE_AM_CATEGORY","Kategori");
define("_PROFILE_AM_STEP","Steg");

define("_PROFILE_AM_SAVEDSUCCESS","%s Sparades utan problem");
define("_PROFILE_AM_DELETEDSUCCESS","%s Radering lyckades");
define("_PROFILE_AM_RUSUREDEL","Är du säker på att radera %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","Fältet kan inte konfigureres.");

define("_PROFILE_AM_ADD","Lägg till");
define("_PROFILE_AM_EDIT","Redigera");
define("_PROFILE_AM_TYPE","Fälttyp");
define("_PROFILE_AM_VALUETYPE","Värde typ");
define("_PROFILE_AM_NAME","Namn");
define("_PROFILE_AM_TITLE","Rubrik");
define("_PROFILE_AM_DESCRIPTION","Beskrivning");
define("_PROFILE_AM_REQUIRED","Obligatorisk?");
define("_PROFILE_AM_MAXLENGTH","Maxlängd");
define("_PROFILE_AM_WEIGHT","Vikt");
define("_PROFILE_AM_DEFAULT","Default");
define("_PROFILE_AM_NOTNULL","Ej Null?");
define("_PROFILE_AM_MODULE","Modul");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","E-post");
define("_PROFILE_AM_INT","Heltal");
define("_PROFILE_AM_TXTAREA","Textarea");
define("_PROFILE_AM_TXTBOX","Textfält");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Annat");

define("_PROFILE_AM_PROF_VISIBLE_ON","Fält synliga i dessa gruppers profil");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Fält synliga i profiler för dessa grupper");
define("_PROFILE_AM_PROF_VISIBLE","Synlighet");
define("_PROFILE_AM_PROF_EDITABLE","Fält redigerbara från profil");
define("_PROFILE_AM_PROF_REGISTER","Visa i registreringsformulär");
define("_PROFILE_AM_PROF_SEARCH","Sökbart med desssa grupper");
define("_PROFILE_AM_PROF_ACCESS","Profil tillgängliga för dessa grupper");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin grupper: Om en använder tillhörare en admin grupp, har den aktuella använder tillgång, om och bara om en av den aktuella använder grupper har rättighet till admin-gruppen; annars</li>" .
        "<li>Inte grundläggande grupper: Om en använder tillhörare en eller fler inte grundläggande grupper (INTE admin, använder, anonyme), har den aktuella använder tillgång, om och bara om en av den aktuella använder grupper får rättighet till att tillgång via en av de inte grundläggande grupperna; Annars</li>" .
        "<li>Använder Grupp: Om en använder bara tillhörare använder grupp har den aktuella använder tillgång, om och bara om en av hans grupper har rättighet till att få tillgång till Användargrupp</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Fältet ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," är synligt för ");
define("_PROFILE_AM_FIELDVISIBLEON"," ser en profil ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- alla");
define("_PROFILE_AM_FIELDNOTVISIBLE","är inte synligt");

define("_PROFILE_AM_CHECKBOX","Checkruta");
define("_PROFILE_AM_GROUP","Gruppval");
define("_PROFILE_AM_GROUPMULTI","Grupp flerval");
define("_PROFILE_AM_LANGUAGE","Språkval");
define("_PROFILE_AM_RADIO","Radioknappar");
define("_PROFILE_AM_SELECT","Välj");
define("_PROFILE_AM_SELECTMULTI","Multival");
define("_PROFILE_AM_TEXTAREA","Textarea");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Textarea");
define("_PROFILE_AM_TEXTBOX","Textfält");
define("_PROFILE_AM_TIMEZONE","Tidszon");
define("_PROFILE_AM_YESNO","Radio Ja/Nej");
define("_PROFILE_AM_DATE","Datum");
define("_PROFILE_AM_AUTOTEXT","Auto text");
define("_PROFILE_AM_DATETIME","Datum och tid");
define("_PROFILE_AM_LONGDATE","Långt Datum");

define("_PROFILE_AM_ADDOPTION","Lägg till val");
define("_PROFILE_AM_REMOVEOPTIONS","Ta bort val");
define("_PROFILE_AM_KEY","Nyckel");
define("_PROFILE_AM_VALUE","Värde");

// User management
define("_PROFILE_AM_EDITUSER","Redigera användare");
define("_PROFILE_AM_SELECTUSER","Välj användare");
define("_PROFILE_AM_ADDUSER","Lägg till användare");
define("_PROFILE_AM_THEME","Tema");
define("_PROFILE_AM_RANK","Rank");
define("_PROFILE_AM_USERDONEXIT","Användaren finns inte!");
define("_PROFILE_MA_USERLEVEL","Användare Nivå");

define("_PROFILE_MA_ACTIVE","Aktiv");
define("_PROFILE_MA_INACTIVE","Inaktiv");
define("_PROFILE_AM_USERCREATED","Användare skapad");

define("_PROFILE_AM_CANNOTDELETESELF","Den er inte tillåten att radera sitt eget konto - Använd din profil sida för att radera ditt eget konto");
define("_PROFILE_AM_CANNOTDELETEADMIN","Den er inte tillåten att radera en administrator konto");

define("_PROFILE_AM_NOSELECTION","Ingen använder valt");
define("_PROFILE_AM_USER_ACTIVATED","Använder aktiverat");
define("_PROFILE_AM_USER_DEACTIVATED","Använder avaktiverad");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Fel: Använder INTE aktiverat");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Fel: Använder INTE avaktiverad");

define("_PROFILE_AM_STEPNAME","Steg namn");
define("_PROFILE_AM_STEPORDER","Steg radfölj");
define("_PROFILE_AM_STEPSAVE","Gem efter steg");
define("_PROFILE_AM_STEPINTRO","Steg beskrivning");
?>