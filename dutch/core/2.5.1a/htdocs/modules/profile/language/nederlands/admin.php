<?php
// $Id: admin.php 3397 2009-08-02 05:02:25Z wishcraft $
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/

define('_PROFILE_AM_FIELD', 'Veld');
define('_PROFILE_AM_FIELDS', 'Velden');
define('_PROFILE_AM_CATEGORY', 'Categorie');
define('_PROFILE_AM_STEP', 'Stap');
define('_PROFILE_AM_SAVEDSUCCESS', '%s met succes opgeslagen');
define('_PROFILE_AM_DELETEDSUCCESS', '%s met succes verwijderd');
define('_PROFILE_AM_RUSUREDEL', 'Weet u zeker dat u %s wilt verwijderen?');
define('_PROFILE_AM_FIELDNOTCONFIGURABLE', 'Het veld is niet te wijzigen.');
define('_PROFILE_AM_ADD', '%s toevoegen');
define('_PROFILE_AM_EDIT', '%s wijzigen');
define('_PROFILE_AM_TYPE', 'Type veld');
define('_PROFILE_AM_VALUETYPE', 'Waarde');
define('_PROFILE_AM_NAME', 'Naam');
define('_PROFILE_AM_TITLE', 'Titel');
define('_PROFILE_AM_DESCRIPTION', 'Omschrijving');
define('_PROFILE_AM_REQUIRED', 'Vereist?');
define('_PROFILE_AM_MAXLENGTH', 'Maximale Lengte');
define('_PROFILE_AM_WEIGHT', 'Volgorde');
define('_PROFILE_AM_DEFAULT', 'Standaard');
define('_PROFILE_AM_NOTNULL', 'Niet nul?');
define('_PROFILE_AM_ARRAY', 'Array');
define('_PROFILE_AM_EMAIL', 'E-mail');
define('_PROFILE_AM_INT', 'Geheel getal');
define('_PROFILE_AM_TXTAREA', 'Tekstvak');
define('_PROFILE_AM_TXTBOX', 'Tekstveld');
define('_PROFILE_AM_URL', 'URL');
define('_PROFILE_AM_OTHER', 'Anders');
define('_PROFILE_AM_FLOAT', 'Drijvende kommagetal');
define('_PROFILE_AM_DECIMAL', 'Decimaal Getal');
define('_PROFILE_AM_UNICODE_ARRAY', 'Unicode Array');
define('_PROFILE_AM_UNICODE_EMAIL', 'Unicode E-mail');
define('_PROFILE_AM_UNICODE_TXTAREA', 'Unicode Tekstvak');
define('_PROFILE_AM_UNICODE_TXTBOX', 'Unicode Tekstveld');
define('_PROFILE_AM_UNICODE_URL', 'Unicode URL');
define('_PROFILE_AM_PROF_VISIBLE_ON', 'Veld zichtbaar bij deze groepen hun profiel');
define('_PROFILE_AM_PROF_VISIBLE_FOR', 'Veld zichtbaar in het profiel voor deze groepen');
define('_PROFILE_AM_PROF_VISIBLE', 'Zichtbaarheid');
define('_PROFILE_AM_PROF_EDITABLE', 'Veld te wijzigen vanuit profiel');
define('_PROFILE_AM_PROF_REGISTER', 'Tonen in registratieformulier');
define('_PROFILE_AM_PROF_SEARCH', 'Zoekbaar door deze groepen');
define('_PROFILE_AM_PROF_ACCESS', 'Toegankelijk voor deze groepen');
define('_PROFILE_AM_PROF_ACCESS_DESC', 
        "<ul>" .
        "<li>Admin groepen: Als een gebruiker tot de admin groepen behoort, heeft de huidige gebruiker alleen toegang als een van de huidige gebruikers groep(en) toegang heeft tot een admin groep; else</li>" .
        "<li>Niet standaard groepen: Als een gebruiker tot een of meer niet basis groepen behoort (NIET admin, gebruiker, anoniem), heeft de huidige gebruiker alleen en alleen dan toegang wanneer één van huidige gebruikersgroep(en) toegang heeft tot willekeurige niet basis groepen; else</li>" .
        "<li>Gebruikers groep: Als een gebruiker alleen tot de Gebruikers groep behoort, heeft deze gebruiker toegang alleen en alleen dan wanneer een van zijn groepen toegang heeft tot de Gebruikers Groep</li>" .
        "</ul>");
define('_PROFILE_AM_FIELDVISIBLE', 'Het veld ');
define('_PROFILE_AM_FIELDVISIBLEFOR', ' is zichtbaar voor ');
define('_PROFILE_AM_FIELDVISIBLEON', ' het profiel bekijken van ');
define('_PROFILE_AM_FIELDVISIBLETOALL', '- Iedereen');
define('_PROFILE_AM_FIELDNOTVISIBLE', 'is niet zichtbaar');
define('_PROFILE_AM_CHECKBOX', 'Aankruisvak');
define('_PROFILE_AM_GROUP', 'Groepskeuze');
define('_PROFILE_AM_GROUPMULTI', 'Multigroepskeuze');
define('_PROFILE_AM_LANGUAGE', 'Taalkeuze');
define('_PROFILE_AM_RADIO', 'Keuzevakjes');
define('_PROFILE_AM_SELECT', 'Selectie');
define('_PROFILE_AM_SELECTMULTI', 'Multiselectie');
define('_PROFILE_AM_TEXTAREA', 'Tekstvak');
define('_PROFILE_AM_DHTMLTEXTAREA', 'DHTML Tekstveld');
define('_PROFILE_AM_TEXTBOX', 'Tekstveld');
define('_PROFILE_AM_TIMEZONE', 'Tijdzone');
define('_PROFILE_AM_YESNO', 'Ja/Nee Keuze');
define('_PROFILE_AM_DATE', 'Datum');
define('_PROFILE_AM_AUTOTEXT', 'Automatische Tekst');
define('_PROFILE_AM_DATETIME', 'Datum en Tijd');
define('_PROFILE_AM_LONGDATE', 'Volledige datum');
define('_PROFILE_AM_ADDOPTION', 'Optie toevoegen');
define('_PROFILE_AM_REMOVEOPTIONS', 'Optie(\'s) verwijderen');
define('_PROFILE_AM_KEY', 'Keuzewaarde');
define('_PROFILE_AM_VALUE', 'Tekst om te tonen');
// User management
define('_PROFILE_AM_EDITUSER', 'Wijzig Gebruiker');
define('_PROFILE_AM_SELECTUSER', 'Selecteer Gebruiker');
define('_PROFILE_AM_ADDUSER', 'Gebruiker Toevoegen');
define('_PROFILE_AM_THEME', 'Thema');
define('_PROFILE_AM_RANK', 'Rang');
define('_PROFILE_AM_USERDONEXIT', 'Gebruiker bestaat niet!');
define('_PROFILE_MA_USERLEVEL', 'Gebruikersniveau');
define('_PROFILE_MA_ACTIVE', 'Actief');
define('_PROFILE_MA_INACTIVE', 'Inactief');
define('_PROFILE_AM_USERCREATED', 'Gebruiker aangemaakt');
define('_PROFILE_AM_CANNOTDELETESELF', 'Uw eigen acount verwijderen is niet toegestaan - gebruik de profielpagina om uw acount te verwijderen.');
define('_PROFILE_AM_CANNOTDELETEADMIN', 'Het verwijderen van een <b>Administrator</b> acount is niet toegestaan');
define('_PROFILE_AM_NOSELECTION', 'Geen gebruiker geselecteerd');
define('_PROFILE_AM_USER_ACTIVATED', 'Gebruiker geactiveerd');
define('_PROFILE_AM_USER_DEACTIVATED', 'Gebruiker gedeactiveerd');
define('_PROFILE_AM_USER_NOT_ACTIVATED', 'FOUT: Gebruiker is NIET geactiveerd');
define('_PROFILE_AM_USER_NOT_DEACTIVATED', 'FOUT: Gebruiker is NIET gedeactiveerd');
define('_PROFILE_AM_STEPNAME', 'Stapnaam');
define('_PROFILE_AM_STEPORDER', 'Stapvolgorde');
define('_PROFILE_AM_STEPSAVE', 'Opslaan na stap');
define('_PROFILE_AM_STEPINTRO', 'Stapbeschrijving');
?>
