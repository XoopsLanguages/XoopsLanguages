﻿<?php
// $Id$
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("_PROFILE_AM_FIELD", "Pole");
define("_PROFILE_AM_FIELDS", "Pola");
define("_PROFILE_AM_CATEGORY", "Kategoria");
define("_PROFILE_AM_STEP", "Krok");

define("_PROFILE_AM_SAVEDSUCCESS", "%s zapisane pomyślnie");
define("_PROFILE_AM_DELETEDSUCCESS", "%s usunięte pomyślnie");
define("_PROFILE_AM_RUSUREDEL", "Czy jesteś pewien, że chcesz usunąć %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "To pole nie jest konfigurowalne.");

define("_PROFILE_AM_ADD", "Dodaj %s");
define("_PROFILE_AM_EDIT", "Edytuj %s");
define("_PROFILE_AM_TYPE", "Typ pola");
define("_PROFILE_AM_VALUETYPE", "Typ wartości");
define("_PROFILE_AM_NAME", "Nazwa");
define("_PROFILE_AM_TITLE", "Tytuł");
define("_PROFILE_AM_DESCRIPTION", "Opis");
define("_PROFILE_AM_REQUIRED", "Wymagane?");
define("_PROFILE_AM_MAXLENGTH", "Maksymalna długość");
define("_PROFILE_AM_WEIGHT", "Waga");
define("_PROFILE_AM_DEFAULT", "Domyślny");
define("_PROFILE_AM_NOTNULL", "Nie pusty?");

define("_PROFILE_AM_ARRAY", "Tablica");
define("_PROFILE_AM_EMAIL", "Email");
define("_PROFILE_AM_INT", "Liczba");
define("_PROFILE_AM_TXTAREA", "Tekst (text area)");
define("_PROFILE_AM_TXTBOX", "Pole tekstowe");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "Inne");
define("_PROFILE_AM_FLOAT", "Liczba zmiennoprzecinkowa");
define("_PROFILE_AM_DECIMAL", "Liczba całkowita");
define("_PROFILE_AM_UNICODE_ARRAY", "Tablica Unicode");
define("_PROFILE_AM_UNICODE_EMAIL", "Email Unicode");
define("_PROFILE_AM_UNICODE_TXTAREA", "Tekst (text area) Unicode");
define("_PROFILE_AM_UNICODE_TXTBOX", "Pole tekstowe Unicode");
define("_PROFILE_AM_UNICODE_URL", "URL Unicode");

define("_PROFILE_AM_PROF_VISIBLE_ON", "Pole widoczne dla tych profilów grup");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "Pole widoczne w profilu dla tych grup");
define("_PROFILE_AM_PROF_VISIBLE", "Widoczność");
define("_PROFILE_AM_PROF_EDITABLE", "Pole edytowalne w profilu");
define("_PROFILE_AM_PROF_REGISTER", "Pokaż w formularzu rejestracji");
define("_PROFILE_AM_PROF_SEARCH", "Wyszukiwalne przez te grupy");
define("_PROFILE_AM_PROF_ACCESS", "Profil dostępny dla tych grup");
define("_PROFILE_AM_PROF_ACCESS_DESC",
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE", "To pole ");
define("_PROFILE_AM_FIELDVISIBLEFOR", " jest widoczne ");
define("_PROFILE_AM_FIELDVISIBLEON", " przy oglądaniu profilu");
define("_PROFILE_AM_FIELDVISIBLETOALL", "dla każdego użytkownika");
define("_PROFILE_AM_FIELDNOTVISIBLE", "nie jest widoczne");

define("_PROFILE_AM_CHECKBOX", "Pole wyboru (Checkbox)");
define("_PROFILE_AM_GROUP", "Lista (Group Select)");
define("_PROFILE_AM_GROUPMULTI", "Lista wielokrotnego wyboru");
define("_PROFILE_AM_LANGUAGE", "Wybór języka");
define("_PROFILE_AM_RADIO", "Pole opcji (Radio)");
define("_PROFILE_AM_SELECT", "Wybór");
define("_PROFILE_AM_SELECTMULTI", "Wybór wielokrotny");
define("_PROFILE_AM_TEXTAREA", "Tekst (Text Area)");
define("_PROFILE_AM_DHTMLTEXTAREA", "Tekst DHTML (Text Area)");
define("_PROFILE_AM_TEXTBOX", "Pole tekstowe");
define("_PROFILE_AM_TIMEZONE", "Strefa czasowa");
define("_PROFILE_AM_YESNO", "Tak/Nie");
define("_PROFILE_AM_DATE", "Data");
define("_PROFILE_AM_AUTOTEXT", "Auto tekst");
define("_PROFILE_AM_DATETIME", "Data i czas");
define("_PROFILE_AM_LONGDATE", "Długa data");

define("_PROFILE_AM_ADDOPTION", "Dodaj opcje");
define("_PROFILE_AM_REMOVEOPTIONS", "Usuń opcję");
define("_PROFILE_AM_KEY", "Wartość do zapamiętania");
define("_PROFILE_AM_VALUE", "Tekst do wyświetlenia");

// User management
define("_PROFILE_AM_EDITUSER", "Edytuj użytkownika");
define("_PROFILE_AM_SELECTUSER", "Wybierz użytkownika");
define("_PROFILE_AM_ADDUSER","Dodaj użytkownika");
define("_PROFILE_AM_THEME","Motyw graficzny (Theme)");
define("_PROFILE_AM_RANK","Ranga");
define("_PROFILE_AM_USERDONEXIT","Użytkownik nie istnieje!");
define("_PROFILE_MA_USERLEVEL", "Poziom użytkownika");

define("_PROFILE_MA_ACTIVE", "Aktywny");
define("_PROFILE_MA_INACTIVE", "Nieaktywny");
define("_PROFILE_AM_USERCREATED", "Użytkownik utworzony");

define("_PROFILE_AM_CANNOTDELETESELF", "Nie możesz usunąć tutaj swojego własnego konta - użyj swojej strony użytkownika aby skasować własne konto");
define("_PROFILE_AM_CANNOTDELETEADMIN", "Nie można usunąć konta administratora - to jest zabronione");

define("_PROFILE_AM_NOSELECTION", "Nie wybrano użytkownika");
define("_PROFILE_AM_USER_ACTIVATED", "Użytkownik aktywowany");
define("_PROFILE_AM_USER_DEACTIVATED", "Użytkownik deaktywowany");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "Błąd: Użytkownik NIE został aktywowany");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "Błąd: Użytkownik NIE został deaktywowany");

define("_PROFILE_AM_STEPNAME", "Nazwa kroku");
define("_PROFILE_AM_STEPORDER", "Kolejność kroku");
define("_PROFILE_AM_STEPSAVE", "Zapisz po kroku");
define("_PROFILE_AM_STEPINTRO", "Opis kroku");
//1.62
define('_PROFILE_AM_ACTION', 'Akcja');
//1.63
define('_PROFILE_AM_REQUIRED_TOGGLE', 'Przełącz, czy pole ma być wymagane');
define('_PROFILE_AM_REQUIRED_TOGGLE_SUCCESS', 'Poprawnie wykonano zmianę ustawienia: "Wypełnienie pola jest wymagane ?" ');
define('_PROFILE_AM_REQUIRED_TOGGLE_FAILED', 'UWAGA ! Nie udało się zmienić ustawienia: "Wypełnienie pola jest wymagane ?" ');

define('_PROFILE_AM_SAVESTEP_TOGGLE', 'Przełącz');
define('_PROFILE_AM_SAVESTEP_TOGGLE_SUCCESS', 'Poprawnie wykonano zmianę ustawienia: "Zapisz formularz po wykonaniu tego kroku" ');
define('_PROFILE_AM_SAVESTEP_TOGGLE_FAILED', "UWAGA ! Nie udało się zmienić ustawienia: \"Zapisz formularz po wykonaniu tego kroku\" ");
