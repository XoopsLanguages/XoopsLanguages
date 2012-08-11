<?php

////////////////////////////////////////////////////////////////
//############################################################//
//## Translated by : Dylian Melgert                         ##//
//## Website       : http://www.dylian.melgert.net/software ##//
//## XOOPS version : 2.3 RC3                                ##//
//############################################################//
////////////////////////////////////////////////////////////////

define("_PROFILE_AM_FIELD","Veld");
define("_PROFILE_AM_FIELDS","Velden");
define("_PROFILE_AM_CATEGORY","Categorie");
define("_PROFILE_AM_STEP","Stap");

define("_PROFILE_AM_SAVEDSUCCESS","%s Succesvol opgeslagen");
define("_PROFILE_AM_DELETEDSUCCESS","%s Succesvol verwijderd");
define("_PROFILE_AM_RUSUREDEL","Weet je zeker dat je %s wil verwijderen");

define("_PROFILE_AM_ADD","%s Toevoegen");
define("_PROFILE_AM_EDIT","%s Bewerken");
define("_PROFILE_AM_TYPE","Veld Type");
define("_PROFILE_AM_VALUETYPE","Inhouds Type");
define("_PROFILE_AM_NAME","Naam");
define("_PROFILE_AM_TITLE","Titel");
define("_PROFILE_AM_DESCRIPTION","Beschrijving");
define("_PROFILE_AM_REQUIRED","Benodigd?");
define("_PROFILE_AM_MAXLENGTH","Maximum Lengte");
define("_PROFILE_AM_WEIGHT","Volegorde");
define("_PROFILE_AM_DEFAULT","Standaard");
define("_PROFILE_AM_NOTNULL","Niet Null?");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","Email");
define("_PROFILE_AM_INT","Integer");
define("_PROFILE_AM_TXTAREA","Text Vak");
define("_PROFILE_AM_TXTBOX","Text Veld");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Anders");

define("_PROFILE_AM_PROF_VISIBLE_ON","Field visible on these groups' profile");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Field visible on profile for these groups");
define("_PROFILE_AM_PROF_VISIBLE","Zichtbaar");
define("_PROFILE_AM_PROF_EDITABLE","Veld bewerkbaar vanuit profiel");
define("_PROFILE_AM_PROF_REGISTER","Zichtbaar in registratie formulier");
define("_PROFILE_AM_PROF_SEARCH","Zoekbaar door de groepen");
define("_PROFILE_AM_PROF_ACCESS","Toegankelijk voor de groepen");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Het veld ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," is zichtbaar voor ");
define("_PROFILE_AM_FIELDVISIBLEON"," het profiel bekijken van ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Iedereen");
define("_PROFILE_AM_FIELDNOTVISIBLE","Is niet zichtbaar");

define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","Groep Kiezen");
define("_PROFILE_AM_GROUPMULTI","Meerdere Groepen Kiezen");
define("_PROFILE_AM_LANGUAGE","Taal Kiezen");
define("_PROFILE_AM_RADIO","Keuze hokjes");
define("_PROFILE_AM_SELECT","Selecteer hokje");
define("_PROFILE_AM_SELECTMULTI","Meerder Selecteer hokjes");
define("_PROFILE_AM_TEXTAREA","Tekst Veld");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Tekst Veld");
define("_PROFILE_AM_TEXTBOX","Tekst Vakje");
define("_PROFILE_AM_TIMEZONE","Tijdzone");
define("_PROFILE_AM_YESNO","Ja/Nee Keuze");
define("_PROFILE_AM_DATE","Datum");
define("_PROFILE_AM_AUTOTEXT","Automatishe Tekst");
define("_PROFILE_AM_DATETIME","Datum en Tijd");
define("_PROFILE_AM_LONGDATE","Volledige datum");

define("_PROFILE_AM_ADDOPTION","Optie toevoegen");
define("_PROFILE_AM_REMOVEOPTIONS","Optie('s) verwijderen");
define("_PROFILE_AM_KEY","Key");
define("_PROFILE_AM_VALUE","Inhoud");

// User management
define("_PROFILE_AM_EDITUSER","Bewerk Gebruiker");
define("_PROFILE_AM_SELECTUSER","Selecteer Gebruiker");
define("_PROFILE_AM_ADDUSER","Gebruiker Toevoegen");
define("_PROFILE_AM_THEME","Thema");
define("_PROFILE_AM_RANK","Rank");
define("_PROFILE_AM_USERDONEXIT","Gebruiker bestaat niet!");
define("_PROFILE_MA_USERLEVEL","Gebruikers level");

define("_PROFILE_MA_ACTIVE","Actief");
define("_PROFILE_MA_INACTIVE","Inactief");
define("_PROFILE_AM_USERCREATED","Gebruiker aangemaakt");

define("_PROFILE_AM_CANNOTDELETESELF","Je eigen acount verwijderen is niet toegestaan - gebruik je profiel pagina om je eigen acount te verwijderen.");
define("_PROFILE_AM_CANNOTDELETEADMIN",'Het verwijderen van een "Administrator" acount is niet toegestaan');

define("_PROFILE_AM_NOSELECTION","Geen gebruiker geselecteerd");
define("_PROFILE_AM_USER_ACTIVATED","Gebruiker geactiveerd");
define("_PROFILE_AM_USER_DEACTIVATED","Gebruiker gedeactiveerd");
define("_PROFILE_AM_USER_NOT_ACTIVATED","FOUT: Gebruiker NIET geactiveerd");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","FOUT: Gebruiker NIET gedeactiveerd");

define("_PROFILE_AM_STEPNAME","Stap naam");
define("_PROFILE_AM_STEPORDER","Stap volegorde");
define("_PROFILE_AM_STEPSAVE","Opslaan na stap");
define("_PROFILE_AM_STEPINTRO","Stap beschrijving");
?>
