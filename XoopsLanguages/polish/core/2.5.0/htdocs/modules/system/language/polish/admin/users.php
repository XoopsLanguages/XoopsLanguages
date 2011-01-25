<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    pl
 * _CHARSET     UTF-8
 * @version     $Id: users.php 5608 2010-10-23 17:36:57Z trabis $
 */

// Navigation
define("_AM_SYSTEM_USERS_NAV_MANAGER","Menadżer Użytkowników");
define("_AM_SYSTEM_USERS_NAV_MAIN","Zarządzanie");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","Wyszukiwanie zaawansowane");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","Dodawanie");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","Edycja");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","Usuwanie");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>Zarządzanie Użytkownikami Xoops</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","Użytkownik");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Uid");
define("_AM_SYSTEM_USERS_STATUS","Status");
define("_AM_SYSTEM_USERS_NAME","Imię");
define("_AM_SYSTEM_USERS_UNAME","Nick");
define("_AM_SYSTEM_USERS_EMAIL", "Email");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Edycja grup");
define("_AM_SYSTEM_USERS_REG_DATE","Data rejestracji");
define("_AM_SYSTEM_USERS_LAST_LOGIN","Ostatnie logowanie");
define("_AM_SYSTEM_USERS_POSTS","Komentarze/Posty");
define("_AM_SYSTEM_USERS_LEVEL","Poziom");
define("_AM_SYSTEM_USERS_ACTION","Akcja");
define("_AM_SYSTEM_USERS_FINDUS","Znajdź użytkownika");
define("_AM_SYSTEM_USERS_AVATAR","Avatar");
define("_AM_SYSTEM_USERS_REALNAME","Prawdziwe imię");
define("_AM_SYSTEM_USERS_REGDATE","Data rejetracji");
define("_AM_SYSTEM_USERS_PM","PM");
define("_AM_SYSTEM_USERS_URL", "URL");
define("_AM_SYSTEM_USERS_PREVIOUS","Wstecz");
define("_AM_SYSTEM_USERS_NEXT","Dalej");
define("_AM_SYSTEM_USERS_USERSFOUND","Znaleziono : %s ");
define("_AM_SYSTEM_USERS_ACTUS", "Użytkownicy aktywowani: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Użytkownicy nie aktywowani: %s");
define("_AM_SYSTEM_USERS_NOFOUND","Nie znaleziono użytkowników");
define("_AM_SYSTEM_USERS_ICQ", "ICQ");
define("_AM_SYSTEM_USERS_AIM", "AIM");
define("_AM_SYSTEM_USERS_YIM", "YIM");
define("_AM_SYSTEM_USERS_MSNM", "MSNM");
define("_AM_SYSTEM_USERS_TIMEZONE","Strefa czasowa");
define("_AM_SYSTEM_USERS_SHOWSIG","Zawsze załączaj moją sygnaturkę");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Tryb wyświetlania komentarzy");
define("_AM_SYSTEM_USERS_CSORTORDER","Kolejność komentarzy");
define("_AM_SYSTEM_USERS_EXTRAINFO","Dodatkowe info");
define("_AM_SYSTEM_USERS_LOCATION","Skąd");
define("_AM_SYSTEM_USERS_OCCUPATION", "Zawód");
define("_AM_SYSTEM_USERS_INTEREST", "Zainteresowania");
define("_AM_SYSTEM_USERS_URLC","Pole URL zawiera");
define("_AM_SYSTEM_USERS_LOCATIONC","Pole Skąd zawiera");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Pole Zawód zawiera");

define("_AM_SYSTEM_USERS_INTERESTC","Zainteresowania");
define("_AM_SYSTEM_USERS_LASTLOGMORE","Ostatnie logowanie jest wcześniej niż <span style='color:#ff0000;'>X</span> dni temu");
define("_AM_SYSTEM_USERS_LASTLOGLESS","Ostatnie logowanie jest nie dawniej niż <span style='color:#ff0000;'>X</span> dni temu");
define("_AM_SYSTEM_USERS_REGMORE","Data rejestracji jest późniejsza niż <span style='color:#ff0000;'>X</span> dni temu");
define("_AM_SYSTEM_USERS_REGLESS","Data rejestracji jest wcześniejsza niż <span style='color:#ff0000;'>X</span> dni temu");
define("_AM_SYSTEM_USERS_POSTSMORE","Liczba postów jest większa niż <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Liczba postów jest mniejsza niż <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Sortuj wg");
define("_AM_SYSTEM_USERS_ORDER","Kolejność");
define("_AM_SYSTEM_USERS_LASTLOGIN","Ostatnie logowanie");
define("_AM_SYSTEM_USERS_ASC","Sortuj rosnąco");
define("_AM_SYSTEM_USERS_DESC","Sortuj malejąco");
define("_AM_SYSTEM_USERS_LIMIT","Liczba użytkowników na stronę");
define("_AM_SYSTEM_USERS_RESULTS", "Wyniki wyszukiwania");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Kryteria wyszukiwania");
define("_AM_SYSTEM_USERS_MAILOK","Tylko użytkownicy, którzy akceptują otrzymywanie email");
define("_AM_SYSTEM_USERS_MAILNG","Tylko użytkownicy, którzy nie akceptują emaili");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Kryteria wyszukiwania");
define("_AM_SYSTEM_USERS_ACTIVE","Tylko aktywnych użytkowników");
define("_AM_SYSTEM_USERS_INACTIVE","Tylko nieaktywnych użytkowników");

define("_AM_SYSTEM_USERS_BOTH", "Wszyscy");
define("_AM_SYSTEM_USERS_SENDMAIL", "Wyślij mail");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Dodaj użytkowników do grupy: %s");
define("_AM_SYSTEM_USERS_GROUPS", "Grupy użytkownika");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Dodać do grupy");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Usunąć z grupy");
define("_AM_SYSTEM_USERS_AYSYWTDU","Jesteś pewien, że chcesz usunąć użytkownika %s?");
define("_AM_SYSTEM_USERS_BYTHIS","Kiedy to zrobisz, wszelkie informacje o użytkowniku zostaną usunięte bezpowrotnie.");
define("_AM_SYSTEM_USERS_YES","Tak");
define("_AM_SYSTEM_USERS_NO","Nie");
define("_AM_SYSTEM_USERS_YMCACF","Musisz wypełnić wszystkie wymagane pola");
define("_AM_SYSTEM_USERS_CNRNU","Nie można zarejestrować nowego użytkownika.");
define("_AM_SYSTEM_USERS_EDEUSER","Edytuj/Usuń użytkowników");
define("_AM_SYSTEM_USERS_NICKNAME","Nazwa użytkownika");
define("_AM_SYSTEM_USERS_MODIFYUSER","Modyfikuj użytkownika");
define("_AM_SYSTEM_USERS_DELUSER","Usuń użytkownika");
define("_AM_SYSTEM_USERS_GO","Dalej!");
define("_AM_SYSTEM_USERS_ADDUSER","Dodaj użytkownika");
define("_AM_SYSTEM_USERS_OPTION","Opcje");
define("_AM_SYSTEM_USERS_THEME","Skórka");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Pokazój adres email innym użytkownikom");
define("_AM_SYSTEM_USERS_RANK","Ranga");
define("_AM_SYSTEM_USERS_NSRA","Nie wybrano rangi specjalnej");
define("_AM_SYSTEM_USERS_NSRID","Nie ma rang specjalnych w bazie danych");
define("_AM_SYSTEM_USERS_ACCESSLEV","Poziom dostępu");
define("_AM_SYSTEM_USERS_SIGNATURE","Podpis");
define("_AM_SYSTEM_USERS_PASSWORD","Hasło");
define("_AM_SYSTEM_USERS_INDICATECOF","* oznacza pola wymagane");
define("_AM_SYSTEM_USERS_NOTACTIVE","Ten użytkownik nie został aktywowany. Czy chcesz go aktywować?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Aktualizuj dane użytkownika");
define("_AM_SYSTEM_USERS_USERINFO","Informacje o użytkowniku");
define("_AM_SYSTEM_USERS_USERID","ID użytkownika");
define("_AM_SYSTEM_USERS_RETYPEPD","Powtórz hasło");
define("_AM_SYSTEM_USERS_CHANGEONLY","(tylko przy zmianie)");
define("_AM_SYSTEM_USERS_USERPOST","Posty użytkownika");
define("_AM_SYSTEM_USERS_STORIES","Artykuły");
define("_AM_SYSTEM_USERS_COMMENTS","Komentarze");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Naciśnij poniższy przycisk synchronizacji jeżeli uważasz że powyższy stan nie jest zgodny z aktualnym");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Synchronizuj");
define("_AM_SYSTEM_USERS_USERDONEXIT","Użytkownik nie istnieje!");
define("_AM_SYSTEM_USERS_STNPDNM","Niestety, nowe hasło się nie zgadza. Wróć i spróbuj ponownie.");
define("_AM_SYSTEM_USERS_CNGTCOM","Nie mogę policzyć komentarzy");
define("_AM_SYSTEM_USERS_CNGTST","Nie mogę policzyć artykułów");
define("_AM_SYSTEM_USERS_CNUUSER","Nie mogę uaktualnić danych użytkownika");
define("_AM_SYSTEM_USERS_CNGUSERID","Nie mogę pobrać ID użytkownika");
define("_AM_SYSTEM_USERS_LIST","Lista");
define("_AM_SYSTEM_USERS_NOUSERS", "Nie wybrano użytkownika");
define("_AM_SYSTEM_USERS_CNRNU2","Nowy użytkownik nie może być dodany do grup: %s.");
define("_AM_SYSTEM_USERS_SEARCH","Szukaj");
define("_AM_SYSTEM_USERS_SEARCH_USER","Znajdź użytkownika: ");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Wyszukiwanie zaawansowane");
define("_AM_SYSTEM_USERS_EDIT","Edytuj");
define("_AM_SYSTEM_USERS_DEL","Usuń");
define("_AM_SYSTEM_USERS_DELETE","Usuń");
define("_AM_SYSTEM_USERS_SUBMIT","Zapisz");
define("_AM_SYSTEM_USERS_PURGE","Wyczyść użytkowników");
define("_AM_SYSTEM_USERS_ADD","Dodaj członka ");
define("_AM_SYSTEM_USERS_VIEW","Zobacz informacje o członkostwie");
define("_AM_SYSTEM_USERS_NO_FOUND","Nie znaleziono użytkowników");
define("_AM_SYSTEM_USERS_NOT_CONNECT","Nigdy nie łącz");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Usuń użytkownika : %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Usuń");
define("_AM_SYSTEM_USERS_NO_SUPP", "Użytkownik nie może zostać usunięty: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "Admin nie może być usunięty: %s <br />");
define("_AM_SYSTEM_USERS_ERROR", "Błąd:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "Wszystkie grupy");
define("_AM_SYSTEM_USERS_ALLUSER", "Wszyscy użytkownicy");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Tylko aktywni użytkownicy");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Tylko nieaktywni użytkownicy");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","Nazwa użytkownika %s już istnieje");
define("_AM_SYSTEM_USERS_MAIL_ERROR","Email użytkownika %s już istnieje");

?>
