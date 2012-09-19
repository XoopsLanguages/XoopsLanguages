<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_MI_LOADED' ) ) {

define( 'PICAL_MI_LOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_PICAL_NAME"              ,"piCal");

// A brief description of this module
define("_MI_PICAL_DESC"              ,"Kalendarz z harmonogramem");

// Default Locale
define("_MI_PICAL_DEFAULTLOCALE"     ,"Poland");

// Names of blocks for this module (Not all module has blocks)
define("_MI_PICAL_BNAME_MINICAL"            , "MiniCalendarz");
define("_MI_PICAL_BNAME_MINICAL_DESC"       , "Wyswietl blok MiniCalendarza");
define("_MI_PICAL_BNAME_MINICALEX"          , "MiniCalendarEx");
define("_MI_PICAL_BNAME_MINICALEX_DESC"     , "Extensible minicalendar z pluginem systemu");
define("_MI_PICAL_BNAME_MONTHCAL"           , "Miesięczny kalendarz");
define("_MI_PICAL_BNAME_MONTHCAL_DESC"      , "Wyświetl pełny widkok Miesięcznego kalendarza");
define("_MI_PICAL_BNAME_TODAYS"             , "Dzisiejsze wydarzenia");
define("_MI_PICAL_BNAME_TODAYS_DESC"        , "Wyświetl wydarzenia na dziś");
define("_MI_PICAL_BNAME_THEDAYS"            , "Wydarzenia w %s");
define("_MI_PICAL_BNAME_THEDAYS_DESC"       , "Wyświetl wydarzenia dla wskazanego dnia");
define("_MI_PICAL_BNAME_COMING"             , "Nadchodzące wydarzenia");
define("_MI_PICAL_BNAME_COMING_DESC"        , "Wyświetl nadchodzące wydarzenia");
define("_MI_PICAL_BNAME_AFTER"              , "Wydarzenia po %s");
define("_MI_PICAL_BNAME_AFTER_DESC"         , "Wyświetl wydarzenia po wksazanym dniu");
define("_MI_PICAL_BNAME_NEW"                , "Nowe wydarzenia");
define("_MI_PICAL_BNAME_NEW_DESC"           , "Nowe wydarzenia będą wyżej niż starsze");

// Names of submenu
define("_MI_PICAL_SM_SUBMIT"                ,"Dodaj");

//define("_MI_PICAL_ADMENU1","");

// Title of config items
define("_MI_USERS_AUTHORITY"                , "Prawa użytkowników");
define("_MI_GUESTS_AUTHORITY"               , "Prawa gości");
define("_MI_DEFAULT_VIEW"                   , "Domyślny widok na środku");
define("_MI_MINICAL_TARGET"                 , "Docelowy widok z MiniCalendarza");
define("_MI_COMING_NUMROWS"                 , "Liczba wydarzeń w bloku Nadchodzących Wydarzeń");
define("_MI_SKINFOLDER"                     , "Nazwa folderu ze skórką");
define("_MI_PICAL_LOCALE"                   , "Lokacja (sprawdź pliki w locales/*.php)");
define("_MI_SUNDAYCOLOR"                    , "Kolor niedziel");
define("_MI_WEEKDAYCOLOR"                   , "Kolor zwykłego dnia");
define("_MI_SATURDAYCOLOR"                  , "Kolor soboty");
define("_MI_HOLIDAYCOLOR"                   , "Kolor wakacji");
define("_MI_TARGETDAYCOLOR"                 , "Kolor wybranego dnia");
define("_MI_SUNDAYBGCOLOR"                  , "Tło niedzieli");
define("_MI_WEEKDAYBGCOLOR"                 , "Tło zwykłego dnia");
define("_MI_SATURDAYBGCOLOR"                , "Tło soboty");
define("_MI_HOLIDAYBGCOLOR"                 , "Tło wakacji");
define("_MI_TARGETDAYBGCOLOR"               , "Tło wybranego dnia");
define("_MI_CALHEADCOLOR"                   , "Kolor nagłówka");
define("_MI_CALHEADBGCOLOR"                 , "Tło nagłówka");
define("_MI_CALFRAMECSS"                    , "Styl ramki kalendarza");
define("_MI_CANOUTPUTICS"                   , "Permission of outputting ics files");
define("_MI_MAXRRULEEXTRACT"                , "Upper limit of events extracted by Rrule.(COUNT)");
define("_MI_WEEKSTARTFROM"                  , "Dzień zaczynąjcy tydzień");
define("_MI_WEEKNUMBERING"                  , "Numbering rule for weeks");
define("_MI_DAYSTARTFROM"                   , "Linia graniczna pomiędzy dniami");
define("_MI_TIMEZONE_USING"                 , "Strefa czasowa serwera");
define("_MI_USE24HOUR"                      , "24-godzinny system (Lub 12-godzinny)");
define("_MI_NAMEORUNAME"                    , "Wyświetlać nick autora wydarzenia" ) ;
define("_MI_DESCNAMEORUNAME"                , "Wybierz jeżeli 'imię' jest pokazywane" ) ;

// Description of each config items
define("_MI_EDITBYGUESTDSC"                 , "Uprawnienia dodawanie wydarzeń przez gości");

// Options of each config items
define("_MI_OPT_AUTH_NONE"                  , "nie może dodawać");
define("_MI_OPT_AUTH_WAIT"                  , "może ale musi to zaakceptować administrator");
define("_MI_OPT_AUTH_POST"                  , "może dodawać bez akceptacji administratora");
define("_MI_OPT_AUTH_BYGROUP"               , "Ustawienia grup");
define("_MI_OPT_MINI_PHPSELF"               , "Obecna strona");
define("_MI_OPT_MINI_MONTHLY"               , "Miesięczny kalendarz");
define("_MI_OPT_MINI_WEEKLY"                , "Tygodniowy kalendarz");
define("_MI_OPT_MINI_DAILY"                 , "Dzienny kalendarz");
define("_MI_OPT_MINI_LIST"                  , "Lista wydarzeń");
define("_MI_OPT_CANOUTPUTICS"               , "może przetworzyć");
define("_MI_OPT_CANNOTOUTPUTICS"            , "nie może przetworzyć");
define("_MI_OPT_STARTFROMSUN"               , "Niedziela");
define("_MI_OPT_STARTFROMMON"               , "Poniedziałek");
define("_MI_OPT_WEEKNOEACHMONTH"            , "przez każdy miesiąc");
define("_MI_OPT_WEEKNOWHOLEYEAR"            , "przez cał rok");
define("_MI_OPT_USENAME"                    , "Prawdziwe imię" ) ;
define("_MI_OPT_USEUNAME"                   , "Login" ) ;
define("_MI_OPT_TZ_USEXOOPS"                , "Ustawienia Xoopsa" ) ;
define("_MI_OPT_TZ_USEWINTER"               , "wartość z serwera jako czas zimowy (zalecane)" ) ;
define("_MI_OPT_TZ_USESUMMER"               , "wartość z serwera jako czas letni" ) ;

// Admin Menus
define("_MI_PICAL_ADMENU0"                  , "Wydarzenia do akceptacji");
define("_MI_PICAL_ADMENU1"                  , "Zarządzanie wydarzeniami");
define("_MI_PICAL_ADMENU_CAT"               , "Zarządzanie kategoriami");
define("_MI_PICAL_ADMENU_CAT2GROUP"         , "Uprawnienia dostępu do kategorii");
define("_MI_PICAL_ADMENU2"                  , "Globalne uprawnienia dostępu");
define("_MI_PICAL_ADMENU_TM"                , "Tabela");
define("_MI_PICAL_ADMENU_PLUGINS"           , "Zarządzanie pluginami");
define("_MI_PICAL_ADMENU_ICAL"              , "Import z iCalendar");
define("_MI_PICAL_ADMENU_MYBLOCKSADMIN"     , "Bloki i grupy");

// Text for notifications
define('_MI_PICAL_GLOBAL_NOTIFY'            , 'Ogólne');
define('_MI_PICAL_GLOBAL_NOTIFYDSC'         , 'Opcje powiadomień.');
define('_MI_PICAL_CATEGORY_NOTIFY'          , 'Kategorie');
define('_MI_PICAL_CATEGORY_NOTIFYDSC'       , 'Opcje powiadomień, które odnoszą się do aktualnej kategorii.');
define('_MI_PICAL_EVENT_NOTIFY'             , 'Wydarzenie');
define('_MI_PICAL_EVENT_NOTIFYDSC'          , 'Opcje powiadomień, które odnoszą się do aktualnego wydarzenia.');

define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFY'       , 'Nowe wydarzenie');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYCAP'    , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie.');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYDSC'    , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie (+opis wydarzenia).');
define('_MI_PICAL_GLOBAL_NEWEVENT_NOTIFYSBJ'    , '[{X_SITENAME}] {X_MODULE} auto-notify : Nowe wydarzenie');

define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFY'     , 'Nowe wydarzenie w kategorii');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYCAP'  , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie w kategorii.');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYDSC'  , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie w kategorii (+opis).');
define('_MI_PICAL_CATEGORY_NEWEVENT_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} auto-notify : Nowe wydarzenie w {CATEGORY_TITLE}');



}

?>