<?php
// $Id: global.php 5683 2010-11-01 11:03:22Z kris_fr $
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko, madreus
define('_PLEASEWAIT', 'Proszę czekać');
define('_FETCHING', 'Ładowanie...');
define('_TAKINGBACK', 'Powrót do poprzedniej lokacji...');
define('_LOGOUT', 'Wyloguj');
define('_SUBJECT', 'Temat');
define('_MESSAGEICON', 'Ikona tematu');
define('_COMMENTS', 'Komentarz');
define('_POSTANON', 'Anonimowe postowanie');
define('_DISABLESMILEY', 'Wyłącz emotikony');
define('_DISABLEHTML', 'Wyłącz HTML');
define('_PREVIEW', 'Podgląd');
define('_GO', 'OK!');
define('_NESTED', 'Wątek');
define('_NOCOMMENTS', 'Brak komentarzy');
define('_FLAT', 'Płaskie');
define('_THREADED', 'Wcięte');
define('_OLDESTFIRST', 'Najpierw najstarsze');
define('_NEWESTFIRST', 'Najpierw najnowsze');
define('_MORE', 'więcej...');
define('_MULTIPAGE', 'Aby podzielić twój artykuł na wiele stron, wpisz wyrażenie <font color=red>[pagebreak]</font> (razem z nawiasami) w treści artykułu.');
define('_IFNOTRELOAD', 'Jeśli strona nie przeładowała się automatycznie, proszę kliknąć <a href=%s>tutaj</a>');
// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED', '%s jest wymagany');
define('_XOBJ_ERR_SHORTERTHAN', '%s musi być krótszy niż %d znaków.');
//%%%%%%	File Name themeuserpost.php 	%%%%%
define('_PROFILE', 'Profil');
define('_POSTEDBY', 'Napisał');
define('_VISITWEBSITE', 'Odwiedź stronę');
define('_SENDPMTO', 'Wyślij prywatną wiadomość do %s');
define('_SENDEMAILTO', 'Wyślij email do %s');
define('_ADD', 'Dodaj');
define('_REPLY', 'Odpowiedz');
define('_DATE', 'Data');// Posted date
//%%%%%%	File Name admin_functions.php 	%%%%%
define('_MAIN', 'Główna');
define('_MANUAL', 'Instrukcja obsługi');
define('_INFO', 'Informacje');
define('_CPHOME', 'Administracja');
define('_YOURHOME', 'Twoja strona');
//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define('_WHOSONLINE', 'Kto jest na stronie?');
define('_GUESTS', 'Goście');
define('_MEMBERS', 'Użytkownicy');
define('_ONLINEPHRASE', '<strong>%s</strong> użytkowników jest na stronie');
define('_ONLINEPHRASEX', '<strong>%s</strong> użytkowników przegląda  <strong>%s </strong>');
define('_CLOSE', 'Zamknij');// Close window
//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define('_QUOTEC', 'Cytat: ');
//%%%%%%	File Name admin.php 	%%%%%
define('_NOPERM', 'Przepraszamy, nie masz praw dostępu do tej części serwisu.');
//%%%%%		Common Phrases		%%%%%
define('_NO', 'Nie');
define('_YES', 'Tak');
define('_EDIT', 'Edytuj');
define('_DELETE', 'Skasuj');
define('_SUBMIT', 'Zapisz');
define('_MODULENOEXIST', 'Wybrany moduł nie istnieje!');
define('_ALIGN', 'Wyrównanie');
define('_LEFT', 'Lewa');
define('_CENTER', 'Środek');
define('_RIGHT', 'Prawa');
define('_FORM_ENTER', 'Proszę wpisać %s');
define('_MUSTWABLE', 'Plik %s musi mieć udostępnione prawo zapisu!');// %s represents file name
// Module info
define('_PREFERENCES', 'Preferencje');
define('_VERSION', 'Wersja');
define('_DESCRIPTION', 'Opis');
define('_AUTHOR', 'Autor');
define('_CREDITS', 'Credits');
define('_LICENCE', 'Licencja');
define('_ERRORS', 'Błędy');
define('_NONE', 'Brak');
define('_ON', 'dn.');
define('_READS', 'odsłon');
define('_WELCOMETO', 'Witaj na %s');
define('_SEARCH', 'Szukaj');
define('_ALL', 'Wszystko');
define('_TITLE', 'Tytuł');
define('_OPTIONS', 'Opcje');
define('_QUOTE', 'Cytat');
define('_LIST', 'Lista');
define('_LOGIN', 'Login');
define('_USERNAME', 'Nazwa użytkownika: ');
define('_PASSWORD', 'Hasło użytkownika: ');
define('_SELECT', 'Wybierz');
define('_IMAGE', 'Obrazek');
define('_SEND', 'Wyślij');
define('_CANCEL', 'Anuluj');
define('_ASCENDING', 'Rosnąco');
define('_DESCENDING', 'Malejąco');
define('_BACK', 'Wstecz');
define('_NOTITLE', 'Bez tytułu');
/**
* Image manager
*/
define('_MD_ADDIMGCAT', 'Dodaj kategorię');
define('_MD_IMGCATNAME', 'Nazwa kategorii');
define('_MD_IMGCATRGRP', 'Wybierz grupy mogące używać Menedżera obrazów:<br /><br /><span style=\'font-weight: normal;\'>Te grupy mogą wybierać obrazy ale nie mogą ich dodawać. Webmaster ma uprawnienia automatyczne.</span>');
define('_MD_IMGCATWGRP', 'Wybierz grupy mogące dodawać obrazy:<br /><br /><span style=\'font-weight: normal;\'>Najczęściej używane dla grup moderatorów i administratorów.</span>');
define('_MD_IMGCATWEIGHT', 'Kolejność wyświetlania:');
define('_MD_IMGCATDISPLAY', 'Wyświetlić tę kategorię?');
define('_MD_IMGCATSTRTYPE', 'Sposób zapisu obrazów:');
define('_MD_STRTYOPENG', 'Tego ustawienia nie można później zmienić!');
define('_MD_ASFILE', 'Zapisuj jako pliki (w zdefiniowanym katalogu \'uploads)<br />');
define('_MD_INDB', 'Zapisuj w bazie danych (jako dane binarne typu \'blob\')');
define('_MD_IMGMAIN', 'Menedżer obrazów');
define('_MD_EDITIMGCAT', 'Edytuj kategorię');
define('_IMGMANAGER', 'Manager obrazów');
define('_NUMIMAGES', '%s obrazków');
define('_ADDIMAGE', 'Dodaj plik obrazka');
define('_IMAGENAME', 'Nazwa:');
define('_IMGMAXSIZE', 'Maksymalny dozwolony rozmiar (w bajtach): ');
define('_IMGMAXWIDTH', 'Maksymalna dozwolona szerokość (w pikselach): ');
define('_IMGMAXHEIGHT', 'Maksymalna dozwolona wysokość (w pikselach): ');
define('_IMAGECAT', 'Kategoria: ');
define('_IMAGEFILE', 'Plik obrazka: ');
define('_IMGWEIGHT', 'Kolejność wyświetlania w menedżerze obrazów: ');
define('_IMGDISPLAY', 'Wyświetlić ten obrazek?');
define('_IMAGEMIME', 'Typ MIME: ');
define('_FAILFETCHIMG', 'Nie mogę pobrać wgrywanego pliku %s');
define('_FAILSAVEIMG', 'Błąd zapisywania obrazka %s w bazie danych');
define('_NOCACHE', 'Bez cache');
define('_CLONE', 'Klonuj');
// %%%%%    For xoopsform files %%%%%
define('_STARTSWITH', 'Zaczyna się od');
define('_ENDSWITH', 'Kończy się na');
define('_MATCHES', 'Wyniki');
define('_CONTAINS', 'Zawiera');
define('_REQUIRED', 'Pole wymagane');
//%%%%%%	File Name commentform.php 	%%%%%
define('_REGISTER', 'Zarejestruj się');

// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE', 'ROZMIAR'); // font size
define('_FONT', 'CZCIONKA'); // font family
define('_COLOR', 'KOLOR'); // font color
define('_EXAMPLE', 'PRZYKŁAD');
define('_ENTERURL', 'Podaj URL linka który chcesz dodać:');
define('_ENTERWEBTITLE', 'Podaj tytuł strony:');
define('_ENTERIMGURL', 'Podaj URL obrazka który chcesz dodać.');
define('_ENTERIMGPOS', 'Podaj pozycję obrazka.');
define('_IMGPOSRORL', '\'R\' lub \'r\' dla prawej strony, \'L\' lub \'l\' dla lewej lub pozostaw puste.');
define('_ERRORIMGPOS', 'BŁĄD! Podaj pozycję obrazka.');
define('_ENTEREMAIL', 'Podaj adres email który chcesz dodać.');
define('_ENTERCODE', 'Podaj kody które chcesz dodać.');
define('_ENTERQUOTE', 'Podaj tekst który ma być cytowany.');
define('_ENTERTEXTBOX', 'Wprowadź tekst w odpowiednim polu.');
define('_ALLOWEDCHAR', 'Dozwolona maksymalna ilość znaków: ');
define('_CURRCHAR', 'Aktualna ilość znaków: ');
define('_PLZCOMPLETE', 'Proszę uzupełnić pola tematu i treści.');
define('_MESSAGETOOLONG', 'Twoja wiadomość jest zbyt długa.');
/**
* xoops smilie
*/
define('_AM_ADDSMILE', 'Dodaj emotikon');
define('_AM_SMILECODE', 'Kod');
define('_AM_SMILEEMOTION', 'Opis');
define('_AM_DISPLAYF', 'Wyświetlać w formularzu');
//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 sekunda');
define('_SECONDS', '%s sekund');
define('_MINUTE', '1 minuta');
define('_MINUTES', '%s minut');
define('_HOUR', '1 godzina');
define('_HOURS', '%s godzin');
define('_DAY', '1 dzień');
define('_DAYS', '%s dni');
define('_WEEK', '1 tydzień');
define('_MONTH', '1 miesiąc');
define('_DATESTRING', 'Y-m-d H:i:s');
// jaki powinien być wygląd daty?? dualizm - wygląd a zapis
define('_MEDIUMDATESTRING', 'Y-m-d H:i');
// jaki powinien być wygląd daty??
define('_SHORTDATESTRING', 'Y-m-d');
// jaki powinien być wygląd daty??
/*
The following characters are recognized in the format string:
a - 'am' or 'pm'
A - 'AM' or 'PM'
d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
D - day of the week, textual, 3 letters; i.e. 'Fri'
F - month, textual, long; i.e. 'January'
h - hour, 12-hour format; i.e. '01' to '12'
H - hour, 24-hour format; i.e. '00' to '23'
g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
i - minutes; i.e. '00' to '59'
j - day of the month without leading zeros; i.e. '1' to '31'
l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
L - boolean for whether it is a leap year; i.e. '0' or '1'
m - month; i.e. '01' to '12'
n - month without leading zeros; i.e. '1' to '12'
M - month, textual, 3 letters; i.e. 'Jan'
s - seconds; i.e. '00' to '59'
S - English ordinal suffix, textual, 2 characters; i.e. 'th', 'nd'
t - number of days in the given month; i.e. '28' to '31'
T - Timezone setting of this machine; i.e. 'MDT'
U - seconds since the epoch
w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
Y - year, 4 digits; i.e. '1999'
y - year, 2 digits; i.e. '99'
z - day of the year; i.e. '0' to '365'
Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'pl');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '1');
/**
* Additions to 2.4.0
**/
define('_RESET', 'Reset');
define('_RE', 'Odp:');

?>
