<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2006-04-06 04:57:58
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME"              ,"APCal");

// A brief description of this module
define("_MI_APCAL_DESC"              ,"Kalendarz z harmonogramem");

// Default Locale
define("_MI_APCAL_DEFAULTLOCALE"     ,"Poland");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL"            , "MiniCalendarz");
define("_MI_APCAL_BNAME_MINICAL_DESC"       , "Wyswietl blok MiniCalendarza");
define("_MI_APCAL_BNAME_MINICALEX"          , "MiniCalendarEx");
define("_MI_APCAL_BNAME_MINICALEX_DESC"     , "Extensible minicalendar z pluginem systemu");
define("_MI_APCAL_BNAME_MONTHCAL"           , "Miesiêczny kalendarz");
define("_MI_APCAL_BNAME_MONTHCAL_DESC"      , "Wy¶wietl pe³ny widkok Miesiêcznego kalendarza");
define("_MI_APCAL_BNAME_TODAYS"             , "Dzisiejsze wydarzenia");
define("_MI_APCAL_BNAME_TODAYS_DESC"        , "Wy¶wietl wydarzenia na dzi¶");
define("_MI_APCAL_BNAME_THEDAYS"            , "Wydarzenia w %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC"       , "Wy¶wietl wydarzenia dla wskazanego dnia");
define("_MI_APCAL_BNAME_COMING"             , "Nadchodz±ce wydarzenia");
define("_MI_APCAL_BNAME_COMING_DESC"        , "Wy¶wietl nadchodz±ce wydarzenia");
define("_MI_APCAL_BNAME_AFTER"              , "Wydarzenia po %s");
define("_MI_APCAL_BNAME_AFTER_DESC"         , "Wy¶wietl wydarzenia po wksazanym dniu");
define("_MI_APCAL_BNAME_NEW"                , "Nowe wydarzenia");
define("_MI_APCAL_BNAME_NEW_DESC"           , "Nowe wydarzenia bêd± wy¿ej ni¿ starsze");

// Names of submenu
define("_MI_APCAL_SM_SUBMIT"                ,"Dodaj");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY"                , "Prawa u¿ytkowników");
define("_MI_APCALGUESTS_AUTHORITY"               , "Prawa go¶ci");
define("_MI_APCALDEFAULT_VIEW"                   , "Domy¶lny widok na ¶rodku");
define("_MI_APCALMINICAL_TARGET"                 , "Docelowy widok z MiniCalendarza");
define("_MI_APCALCOMING_NUMROWS"                 , "Liczba wydarzeñ w bloku Nadchodz±cych Wydarzeñ");
define("_MI_APCALSKINFOLDER"                     , "Nazwa folderu ze skórk±");
define("_MI_APCAL_LOCALE"                   , "Lokacja (sprawd¼ pliki w locales/*.php)");
define("_MI_APCALSUNDAYCOLOR"                    , "Kolor niedziel");
define("_MI_APCALWEEKDAYCOLOR"                   , "Kolor zwyk³ego dnia");
define("_MI_APCALSATURDAYCOLOR"                  , "Kolor soboty");
define("_MI_APCALHOLIDAYCOLOR"                   , "Kolor wakacji");
define("_MI_APCALTARGETDAYCOLOR"                 , "Kolor wybranego dnia");
define("_MI_APCALSUNDAYBGCOLOR"                  , "T³o niedzieli");
define("_MI_APCALWEEKDAYBGCOLOR"                 , "T³o zwyk³ego dnia");
define("_MI_APCALSATURDAYBGCOLOR"                , "T³o soboty");
define("_MI_APCALHOLIDAYBGCOLOR"                 , "T³o wakacji");
define("_MI_APCALTARGETDAYBGCOLOR"               , "T³o wybranego dnia");
define("_MI_APCALCALHEADCOLOR"                   , "Kolor nag³ówka");
define("_MI_APCALCALHEADBGCOLOR"                 , "T³o nag³ówka");
define("_MI_APCALCALFRAMECSS"                    , "Styl ramki kalendarza");
define("_MI_APCALCANOUTPUTICS"                   , "Permission of outputting ics files");
define("_MI_APCALMAXRRULEEXTRACT"                , "Upper limit of events extracted by Rrule.(COUNT)");
define("_MI_APCALWEEKSTARTFROM"                  , "Dzieñ zaczyn±jcy tydzieñ");
define("_MI_APCALWEEKNUMBERING"                  , "Numbering rule for weeks");
define("_MI_APCALDAYSTARTFROM"                   , "Linia graniczna pomiêdzy dniami");
define("_MI_APCALTIMEZONE_USING"                 , "Strefa czasowa serwera");
define("_MI_APCALUSE24HOUR"                      , "24-godzinny system (Lub 12-godzinny)");
define("_MI_APCALNAMEORUNAME"                    , "Wy¶wietlaæ nick autora wydarzenia" ) ;
define("_MI_APCALDESCNAMEORUNAME"                , "Wybierz je¿eli 'imiê' jest pokazywane" ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC"                 , "Uprawnienia dodawanie wydarzeñ przez go¶ci");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE"                  , "nie mo¿e dodawaæ");
define("_MI_APCALOPT_AUTH_WAIT"                  , "mo¿e ale musi to zaakceptowaæ administrator");
define("_MI_APCALOPT_AUTH_POST"                  , "mo¿e dodawaæ bez akceptacji administratora");
define("_MI_APCALOPT_AUTH_BYGROUP"               , "Ustawienia grup");
define("_MI_APCALOPT_MINI_PHPSELF"               , "Obecna strona");
define("_MI_APCALOPT_MINI_MONTHLY"               , "Miesiêczny kalendarz");
define("_MI_APCALOPT_MINI_WEEKLY"                , "Tygodniowy kalendarz");
define("_MI_APCALOPT_MINI_DAILY"                 , "Dzienny kalendarz");
define("_MI_APCALOPT_MINI_LIST"                  , "Lista wydarzeñ");
define("_MI_APCALOPT_CANOUTPUTICS"               , "mo¿e przetworzyæ");
define("_MI_APCALOPT_CANNOTOUTPUTICS"            , "nie mo¿e przetworzyæ");
define("_MI_APCALOPT_STARTFROMSUN"               , "Niedziela");
define("_MI_APCALOPT_STARTFROMMON"               , "Poniedzia³ek");
define("_MI_APCALOPT_WEEKNOEACHMONTH"            , "przez ka¿dy miesi±c");
define("_MI_APCALOPT_WEEKNOWHOLEYEAR"            , "przez ca³ rok");
define("_MI_APCALOPT_USENAME"                    , "Prawdziwe imiê" ) ;
define("_MI_APCALOPT_USEUNAME"                   , "Login" ) ;
define("_MI_APCALOPT_TZ_USEXOOPS"                , "Ustawienia Xoopsa" ) ;
define("_MI_APCALOPT_TZ_USEWINTER"               , "warto¶æ z serwera jako czas zimowy (zalecane)" ) ;
define("_MI_APCALOPT_TZ_USESUMMER"               , "warto¶æ z serwera jako czas letni" ) ;

// Admin Menus
define("_MI_APCAL_ADMENU0"                  , "Wydarzenia do akceptacji");
define("_MI_APCAL_ADMENU1"                  , "Zarz±dzanie wydarzeniami");
define("_MI_APCAL_ADMENU_CAT"               , "Zarz±dzanie kategoriami");
define("_MI_APCAL_ADMENU_CAT2GROUP"         , "Uprawnienia dostêpu do kategorii");
define("_MI_APCAL_ADMENU2"                  , "Globalne uprawnienia dostêpu");
define("_MI_APCAL_ADMENU_TM"                , "Tabela");
define("_MI_APCAL_ADMENU_PLUGINS"           , "Zarz±dzanie pluginami");
define("_MI_APCAL_ADMENU_ICAL"              , "Import z iCalendar");
define("_MI_APCAL_ADMENU_MYBLOCKSADMIN"     , "Bloki i grupy");

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY'            , 'Ogólne');
define('_MI_APCAL_GLOBAL_NOTIFYDSC'         , 'Opcje powiadomieñ.');
define('_MI_APCAL_CATEGORY_NOTIFY'          , 'Kategorie');
define('_MI_APCAL_CATEGORY_NOTIFYDSC'       , 'Opcje powiadomieñ, które odnosz± siê do aktualnej kategorii.');
define('_MI_APCAL_EVENT_NOTIFY'             , 'Wydarzenie');
define('_MI_APCAL_EVENT_NOTIFYDSC'          , 'Opcje powiadomieñ, które odnosz± siê do aktualnego wydarzenia.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY'       , 'Nowe wydarzenie');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP'    , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC'    , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie (+opis wydarzenia).');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ'    , '[{X_SITENAME}] {X_MODULE} auto-notify : Nowe wydarzenie');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY'     , 'Nowe wydarzenie w kategorii');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP'  , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie w kategorii.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC'  , 'Powiadom mnie kiedy zostanie utworzone nowe wydarzenie w kategorii (+opis).');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} auto-notify : Nowe wydarzenie w {CATEGORY_TITLE}');



}

?>