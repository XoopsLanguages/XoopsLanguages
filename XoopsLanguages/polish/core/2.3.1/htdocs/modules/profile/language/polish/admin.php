<?php
// $Id: admin.php 2263 2008-10-09 04:26:04Z phppp $
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: Jarek Wiktorowicz  <www.jarek.wiktorowicz.pl>
define("_PROFILE_AM_FIELD","Pole");
define("_PROFILE_AM_FIELDS","Pola");
define("_PROFILE_AM_CATEGORY","Kategoria");
define("_PROFILE_AM_STEP","Krok");
define("_PROFILE_AM_SAVEDSUCCESS","%s zapisane pomyślnie");
define("_PROFILE_AM_DELETEDSUCCESS","%s usunięte pomyślnie");
define("_PROFILE_AM_RUSUREDEL","Na pewno chcesz usunąć %s ?");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","To pole nie może być konfigurowane.");
define("_PROFILE_AM_ADD","Dodaj %s");
define("_PROFILE_AM_EDIT","Edytuj %s");
define("_PROFILE_AM_TYPE","Typ Pola");
define("_PROFILE_AM_VALUETYPE","Typ Wartości");
define("_PROFILE_AM_NAME","Nazwa");
define("_PROFILE_AM_TITLE","Tytuł");
define("_PROFILE_AM_DESCRIPTION","Opis");
define("_PROFILE_AM_REQUIRED","Wymagane?");
define("_PROFILE_AM_MAXLENGTH","Maksymalna długość");
define("_PROFILE_AM_WEIGHT","Kolejność");
define("_PROFILE_AM_DEFAULT","Domyślne");
define("_PROFILE_AM_NOTNULL","Not Null?");
define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","Email");
define("_PROFILE_AM_INT","Integer");
define("_PROFILE_AM_TXTAREA","Text Area");
define("_PROFILE_AM_TXTBOX","Text field");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Inne");
define("_PROFILE_AM_PROF_VISIBLE_ON","Pole widoczne w profilu tych grup");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Pole w profilu widoczne dla tych grup");
define("_PROFILE_AM_PROF_VISIBLE","Widoczność");
define("_PROFILE_AM_PROF_EDITABLE","Pole edytowalne w profilu");
define("_PROFILE_AM_PROF_REGISTER","Widoczne podczas rejestracji");
define("_PROFILE_AM_PROF_SEARCH","Możliwe do wyszukania przez te grupy");
define("_PROFILE_AM_PROF_ACCESS","Profil dostępny dla tych grup");
define("_PROFILE_AM_PROF_ACCESS_DESC","<ul>" .
        "<li>Grupy administracyjne: Jeśli dany użytkownik należy do grup administracyjnych, aktualny użytkownik ma dostęp tylko i wyłącznie gdy jedna z jego grup ma dostęp do grupy administracyjnej; w przeciwnym razie</li>" .
        "<li>Grupy nie podstawowe: Jeśli dany użytkownik należy do co najmniej jednej grupy nie podstawowej (NIE admin, user, anonymous), aktualny użytkownik ma dostęp tylko i wyłącznie gdy jedna z jego grup ma dostęp do dowolnej grupy nie podstawowej; w przeciwnym razie</li>" .
        "<li>Grupa użytkownika: Jeśli dany użytkownik należy tylko do grupy użytkownika, aktualny użytkownik ma dostęp tylko i wyłącznie gdy jedna z jego grup ma dostęp do grupy użytkownika</li>" .
        "</ul>");
define("_PROFILE_AM_FIELDVISIBLE","To pole ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," jest widoczne ");
define("_PROFILE_AM_FIELDVISIBLEON"," przy przeglądaniu profilu");
define("_PROFILE_AM_FIELDVISIBLETOALL","przez każdego użytkownika");
define("_PROFILE_AM_FIELDNOTVISIBLE","jest niewidoczne");
define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","Group Select");
define("_PROFILE_AM_GROUPMULTI","Group Multi Select");
define("_PROFILE_AM_LANGUAGE","Language Select");
define("_PROFILE_AM_RADIO","Radio Buttons");
define("_PROFILE_AM_SELECT","Select");
define("_PROFILE_AM_SELECTMULTI","Multi Select");
define("_PROFILE_AM_TEXTAREA","Text Area");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Text Area");
define("_PROFILE_AM_TEXTBOX","Text Field");
define("_PROFILE_AM_TIMEZONE","Timezone");
define("_PROFILE_AM_YESNO","Radio Yes/No");
define("_PROFILE_AM_DATE","Date");
define("_PROFILE_AM_AUTOTEXT","Auto Text");
define("_PROFILE_AM_DATETIME","Date and Time");
define("_PROFILE_AM_LONGDATE","Long Date");
define("_PROFILE_AM_ADDOPTION","Dodaj opcję");
define("_PROFILE_AM_REMOVEOPTIONS","Usuń opcje");
define("_PROFILE_AM_KEY","Wartość do zapisania");
define("_PROFILE_AM_VALUE","Tekst do wyświetlenia");
// User management
define("_PROFILE_AM_EDITUSER","Edytuj użytkownika");
define("_PROFILE_AM_SELECTUSER","Wybierz użytkownika");
define("_PROFILE_AM_ADDUSER","Dodaj użytkownika");
define("_PROFILE_AM_THEME","Temat");
define("_PROFILE_AM_RANK","Ranga");
define("_PROFILE_AM_USERDONEXIT","Użytkownik nie istnieje!");
define("_PROFILE_MA_USERLEVEL","Poziom użytkownika");
define("_PROFILE_MA_ACTIVE","Aktywny");
define("_PROFILE_MA_INACTIVE","Nieaktywny");
define("_PROFILE_AM_USERCREATED","Użytkownik utworzony");
define("_PROFILE_AM_CANNOTDELETESELF","Usunięcie twoje własnego konta jest niemożliwe - użyj strony swojego profilu aby usunąć konto");
define("_PROFILE_AM_CANNOTDELETEADMIN","Usunięcie konta administracyjnego jest niemożliwe");
define("_PROFILE_AM_NOSELECTION","Nie wybrano użytkownika");
define("_PROFILE_AM_USER_ACTIVATED","Użytkownik aktywowany");
define("_PROFILE_AM_USER_DEACTIVATED","Użytkownik deaktywowany");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Błąd: Użytkownik NIE został aktywowany");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Błąd: Użytkownik NIE został deaktywowany");
define("_PROFILE_AM_STEPNAME","Nazwa kroku");
define("_PROFILE_AM_STEPORDER","Kolejność kroku");
define("_PROFILE_AM_STEPSAVE","Zapisz po kroku");
define("_PROFILE_AM_STEPINTRO","Opis kroku");
?>