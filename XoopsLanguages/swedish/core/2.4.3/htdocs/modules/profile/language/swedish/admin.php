<?php
// $Id: admin.php 3397 2009-08-02 05:02:25Z wishcraft $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("_PROFILE_AM_FIELD","Fält");
define("_PROFILE_AM_FIELDS","Fält");
define("_PROFILE_AM_CATEGORY","Kategori");
define("_PROFILE_AM_STEP","Steg");

define("_PROFILE_AM_SAVEDSUCCESS","%s sparad");
define("_PROFILE_AM_DELETEDSUCCESS","%s raderad");
define("_PROFILE_AM_RUSUREDEL","Är du säker på att du vill radera %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","Det här fältet går ej att ändra.");

define("_PROFILE_AM_ADD","Lägg till %s");
define("_PROFILE_AM_EDIT","Redigera %s");
define("_PROFILE_AM_TYPE","Fälttyp");
define("_PROFILE_AM_VALUETYPE","Värdetyp");
define("_PROFILE_AM_NAME","Namn");
define("_PROFILE_AM_TITLE","Titel");
define("_PROFILE_AM_DESCRIPTION","Beskrivning");
define("_PROFILE_AM_REQUIRED","Obligatoriskt?");
define("_PROFILE_AM_MAXLENGTH","Maxlängd");
define("_PROFILE_AM_WEIGHT","Vikt");
define("_PROFILE_AM_DEFAULT","Standard");
define("_PROFILE_AM_NOTNULL","Ej null?");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","E-post");
define("_PROFILE_AM_INT","Heltal");
define("_PROFILE_AM_TXTAREA","Textarea");
define("_PROFILE_AM_TXTBOX","Textfält");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Annan");
define("_PROFILE_AM_FLOAT","Floating Point");
define("_PROFILE_AM_DECIMAL","Decimaltal");
define("_PROFILE_AM_UNICODE_ARRAY","Unicode Array");
define("_PROFILE_AM_UNICODE_EMAIL","Unicode e-post");
define("_PROFILE_AM_UNICODE_TXTAREA","Unicode Textarea");
define("_PROFILE_AM_UNICODE_TXTBOX","Unicode Textfält");
define("_PROFILE_AM_UNICODE_URL","Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON","Fält visas på profiler i följande grupper");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Fält på profiler kan ses av följande grupper");
define("_PROFILE_AM_PROF_VISIBLE","Synlighet");
define("_PROFILE_AM_PROF_EDITABLE","Fält redigerbart från profilen");
define("_PROFILE_AM_PROF_REGISTER","Visa i registreringsformulär");
define("_PROFILE_AM_PROF_SEARCH","Fält sökbart av följande grupper");
define("_PROFILE_AM_PROF_ACCESS","Profil kan ses av följande grupper");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Administratörsgrupper: En profil för en användare som tillhör en administratörgrupp kan endast ses av en annan användare som är med i en grupp som har behörighet att se administratörsgrupper; annars</li>" .
        "<li>Grupper som ej är standard: En profil för en användare som tillhör en grupp som inte är standard (dvs INTE administratör, registrerad användare eller anonym) kan endast ses av en annan användare som är med i en grupp som har behörighet att se grupper som inte är standard; annars</li>" .
        "<li>Registrerade användare: En profil för en användare som tillhör gruppen Registrerade användare kan endast ses av en annan användare som är med i en grupp som har behörighet att se gruppen Registrerade användare</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Fältet ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," är synligt för ");
define("_PROFILE_AM_FIELDVISIBLEON"," när de ser på en profil som är medlem i gruppen ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Alla");
define("_PROFILE_AM_FIELDNOTVISIBLE","är inte synlig");

define("_PROFILE_AM_CHECKBOX","Kryssruta");
define("_PROFILE_AM_GROUP","Gruppval");
define("_PROFILE_AM_GROUPMULTI","Flerval av grupp");
define("_PROFILE_AM_LANGUAGE","Språkval");
define("_PROFILE_AM_RADIO","Radioknappar");
define("_PROFILE_AM_SELECT","Val");
define("_PROFILE_AM_SELECTMULTI","Flerval");
define("_PROFILE_AM_TEXTAREA","Textarea");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Textarea");
define("_PROFILE_AM_TEXTBOX","Textfält");
define("_PROFILE_AM_TIMEZONE","Tidzon");
define("_PROFILE_AM_YESNO","Radio Ja/Nej");
define("_PROFILE_AM_DATE","Datum");
define("_PROFILE_AM_AUTOTEXT","Auto-text");
define("_PROFILE_AM_DATETIME","Datum och tid");
define("_PROFILE_AM_LONGDATE","Långt datum");

define("_PROFILE_AM_ADDOPTION","Lägg till alternativ");
define("_PROFILE_AM_REMOVEOPTIONS","Ta bort alternativ");
define("_PROFILE_AM_KEY","Värde som ska lagras");
define("_PROFILE_AM_VALUE","Text som ska visas");

// User management
define("_PROFILE_AM_EDITUSER","Redigera användare");
define("_PROFILE_AM_SELECTUSER","Välj användare");
define("_PROFILE_AM_ADDUSER","Lägg till användare");
define("_PROFILE_AM_THEME","Tema");
define("_PROFILE_AM_RANK","Rang");
define("_PROFILE_AM_USERDONEXIT","Användaren finns inte!");
define("_PROFILE_MA_USERLEVEL","Användarnivå");

define("_PROFILE_MA_ACTIVE","Aktiv");
define("_PROFILE_MA_INACTIVE","Inaktiv");
define("_PROFILE_AM_USERCREATED","Användare skapad");

define("_PROFILE_AM_CANNOTDELETESELF","Det är inte tillåtet att radera sitt eget konto - använd din profilsida för att radera ditt eget konto");
define("_PROFILE_AM_CANNOTDELETEADMIN","Det är inte tillåtet att radera ett administratörskonto");

define("_PROFILE_AM_NOSELECTION","Ingen användare vald");
define("_PROFILE_AM_USER_ACTIVATED","Användare aktiverad");
define("_PROFILE_AM_USER_DEACTIVATED","Användare inaktiverad");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Fel: Användaren är INTE aktiverad");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Fel: Användaren är INTE deaktiverad");

define("_PROFILE_AM_STEPNAME","Namn på steg");
define("_PROFILE_AM_STEPORDER","Stegordning");
define("_PROFILE_AM_STEPSAVE","Spara efter steg");
define("_PROFILE_AM_STEPINTRO","Beskrivning av steg");

?>
