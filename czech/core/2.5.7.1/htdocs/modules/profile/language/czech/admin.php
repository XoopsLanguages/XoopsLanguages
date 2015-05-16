<?php
// $Id: admin.php 12363 2014-03-08 10:39:06Z beckmi $
// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PROFILE_AM_FIELD',"Položka");
define('_PROFILE_AM_FIELDS',"Položky");
define('_PROFILE_AM_CATEGORY',"Kategorie");
define('_PROFILE_AM_STEP',"Krok");
define('_PROFILE_AM_SAVEDSUCCESS',"%s v pořádku uloženo");
define('_PROFILE_AM_DELETEDSUCCESS',"%s v pořádku vymazáno");
define('_PROFILE_AM_RUSUREDEL',"Myslíte to vážně? Opravdu chcete smazat %s ?");
define('_PROFILE_AM_FIELDNOTCONFIGURABLE',"Tato položka se nedá nastavit.");
define('_PROFILE_AM_ADD',"Přidat %s");
define('_PROFILE_AM_EDIT',"Upravit %s");
define('_PROFILE_AM_TYPE',"Typ položky");
define('_PROFILE_AM_VALUETYPE',"Hodnota položky");
define('_PROFILE_AM_NAME',"Jméno");
define('_PROFILE_AM_TITLE',"Title");
define('_PROFILE_AM_DESCRIPTION',"Popis");
define('_PROFILE_AM_REQUIRED',"Vyžadovaná položka?");
define('_PROFILE_AM_MAXLENGTH',"Maximální délka");
define('_PROFILE_AM_WEIGHT',"Pořadí");
define('_PROFILE_AM_DEFAULT',"Výchozí");
define('_PROFILE_AM_NOTNULL',"Nenulová?");
define('_PROFILE_AM_ARRAY',"Pole");
define('_PROFILE_AM_EMAIL',"Email");
define('_PROFILE_AM_INT',"Integer");
define('_PROFILE_AM_TXTAREA',"Textové pole");
define('_PROFILE_AM_TXTBOX',"Textová položka");
define('_PROFILE_AM_URL',"URL");
define('_PROFILE_AM_OTHER',"Ostatní");
define('_PROFILE_AM_FLOAT',"Floating Point");
define('_PROFILE_AM_DECIMAL',"Dekadické číslo");
define('_PROFILE_AM_UNICODE_ARRAY',"Unicode Array");
define('_PROFILE_AM_UNICODE_EMAIL',"Unicode Email");
define('_PROFILE_AM_UNICODE_TXTAREA',"Unicode Text Area");
define('_PROFILE_AM_UNICODE_TXTBOX',"Unicode Text field");
define('_PROFILE_AM_UNICODE_URL',"Unicode URL");
define('_PROFILE_AM_PROF_VISIBLE_ON',"Položka viditelná v této skupině profilu"); // Field visible on these groups' profile
define('_PROFILE_AM_PROF_VISIBLE_FOR',"Položka viditelná v profilu pro tuto skupinu"); // Field visible on profile for these groups
define('_PROFILE_AM_PROF_VISIBLE',"Viditelnost");
define('_PROFILE_AM_PROF_EDITABLE',"Položka editovatelná z profilu");
define('_PROFILE_AM_PROF_REGISTER',"Zobrazit v registračním formuláři");
define('_PROFILE_AM_PROF_SEARCH',"Položku mohou hledat tyto skupiny"); // Searchable by these groups
define('_PROFILE_AM_PROF_ACCESS',"Profil přístupný těmto skupinám");
define('_PROFILE_AM_PROF_ACCESS_DESC',
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");
define('_PROFILE_AM_FIELDVISIBLE',"Položka ");
define('_PROFILE_AM_FIELDVISIBLEFOR'," je viditelná pro ");
define('_PROFILE_AM_FIELDVISIBLEON'," zobrazená z profilu  "); // viewing a profile of
define('_PROFILE_AM_FIELDVISIBLETOALL',"- Každého");
define('_PROFILE_AM_FIELDNOTVISIBLE',"není viditelná");
define('_PROFILE_AM_CHECKBOX',"Checkbox");
define('_PROFILE_AM_GROUP',"Group Select");
define('_PROFILE_AM_GROUPMULTI',"Group Multi Select");
define('_PROFILE_AM_LANGUAGE',"Volba jazyka");
define('_PROFILE_AM_RADIO',"Radio Buttons");
define('_PROFILE_AM_SELECT',"Select");
define('_PROFILE_AM_SELECTMULTI',"Multi Select");
define('_PROFILE_AM_TEXTAREA',"Text Area");
define('_PROFILE_AM_DHTMLTEXTAREA',"DHTML Text Area");
define('_PROFILE_AM_TEXTBOX',"Text Field");
define('_PROFILE_AM_TIMEZONE',"Time zone");
define('_PROFILE_AM_YESNO',"Radio Yes/No");
define('_PROFILE_AM_DATE',"Datum");
define('_PROFILE_AM_AUTOTEXT',"Automatický text");
define('_PROFILE_AM_DATETIME',"Datum a čas");
define('_PROFILE_AM_LONGDATE',"Dlouhý formát data");
define('_PROFILE_AM_ADDOPTION',"Přidat možnost");
define('_PROFILE_AM_REMOVEOPTIONS',"Smazat možnost");
define('_PROFILE_AM_KEY',"Value to be stored");
define('_PROFILE_AM_VALUE',"Text k zobrazení"); //  to be displayed
// User management
define('_PROFILE_AM_EDITUSER',"Upravit uživatele");
define('_PROFILE_AM_SELECTUSER',"Vyber uživatele");
define('_PROFILE_AM_ADDUSER',"Přidat uživatele");
define('_PROFILE_AM_THEME',"Téma");
define('_PROFILE_AM_RANK',"Hodnost");
define('_PROFILE_AM_USERDONEXIT',"CHYBA! Tento uživatel neexistuje.");
define('_PROFILE_MA_USERLEVEL',"User Level");
define('_PROFILE_MA_ACTIVE',"Aktivní");
define('_PROFILE_MA_INACTIVE',"Neaktivní");
define('_PROFILE_AM_USERCREATED',"Uživatel vytvořen");
define('_PROFILE_AM_CANNOTDELETESELF',"Smazání vlastního účtu není dovoleno. Pokud chcete smazat vlastní profil, přejděte na profil a zkuste to znovu.");
define('_PROFILE_AM_CANNOTDELETEADMIN',"Smazání administrtorského účtu není dovoleno.");
define('_PROFILE_AM_NOSELECTION',"Není vybrán žádný uživatel");
define('_PROFILE_AM_USER_ACTIVATED',"Uživatel byl aktivován");
define('_PROFILE_AM_USER_DEACTIVATED',"Uživatel byl deaktivován");
define('_PROFILE_AM_USER_NOT_ACTIVATED',"CHYBA! Uživatel nebyl aktivován.");
define('_PROFILE_AM_USER_NOT_DEACTIVATED',"CHYBA! Uživatel nebyl deaktivován.");
define('_PROFILE_AM_STEPNAME',"Jméno kroku");
define('_PROFILE_AM_STEPORDER',"Pořadí kroku");
define('_PROFILE_AM_STEPSAVE',"Uložit po kroku?");
define('_PROFILE_AM_STEPINTRO',"Popis kroku");
//1.62
define('_PROFILE_AM_ACTION','Akce');
//1.63
define('_PROFILE_AM_REQUIRED_TOGGLE','Toggle Required Field');
define('_PROFILE_AM_REQUIRED_TOGGLE_SUCCESS','Successfully Changed Required Field ');
define('_PROFILE_AM_REQUIRED_TOGGLE_FAILED','Changing Required Field Failed');
define('_PROFILE_AM_SAVESTEP_TOGGLE','Toggle Save');
define('_PROFILE_AM_SAVESTEP_TOGGLE_SUCCESS','Successfully Changed Save After Step');
define('_PROFILE_AM_SAVESTEP_TOGGLE_FAILED',"Changing 'Save After Step' Failed");
