<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_AM_LOADED' ) ) {

define( 'PICAL_AM_LOADED' , 1 ) ;


// titles
define("_AM_ADMISSION"                       , "Akceptowanie wydarzeń");
define("_AM_MENU_EVENTS"                     , "Zarządzanie wydarzeniami");
define("_AM_MENU_CATEGORIES"                 , "Zarządzanie kategoriami");
define("_AM_MENU_CAT2GROUP"                  , "Dostęp do kategorii");
define("_AM_ICALENDAR_IMPORT"                , "Import z iCalendar");
define("_AM_GROUPPERM"                       , "Uprawnienia");
define("_AM_TABLEMAINTAIN"                   , "Table Maintenance (Upgrade)");
define("_AM_MYBLOCKSADMIN"                   , "Bloki i grupy");

// forms
define("_AM_BUTTON_EXTRACT"                  , "Extract");
define("_AM_BUTTON_ADMIT"                    , "Admit");
define("_AM_BUTTON_MOVE"                     , "Przenieś");
define("_AM_BUTTON_COPY"                     , "Kopiuj");
define("_AM_CONFIRM_DELETE"                  , "Usunąć wiadomość(ci)?");
define("_AM_CONFIRM_MOVE"                    , "Czy chcesz usunąć link do starej kategorii i dodać link do wybranej kategorii?");
define("_AM_CONFIRM_COPY"                    , "Dodać link do wybranej kategorii");
define("_AM_OPT_PAST"                        , "Przeszłość");
define("_AM_OPT_FUTURE"                      , "Przyszłość");
define("_AM_OPT_PASTANDFUTURE"               , "Przeszłość i Przyszłość");

// format
define("_AM_DTFMT_LIST_ALLDAY"               , 'y-m-d');
define("_AM_DTFMT_LIST_NORMAL"               , 'y-m-d<\b\r />H:i');

// timezones
define("_AM_TZOPT_SERVER"                    , "Tak jak na serwerze");
define("_AM_TZOPT_GMT"                       , "Jak GMT");
define("_AM_TZOPT_USER"                      , "Jak strefa użytkownika:");

// admission
define("_AM_LABEL_ADMIT"                     , "Sprawdzone, dodać?");
define("_AM_MES_ADMITTED"                    , "Dodano wydarzenie(a)");
define("_AM_ADMIT_TH0"                       , "Użytkownik");
define("_AM_ADMIT_TH1"                       , "Początek");
define("_AM_ADMIT_TH2"                       , "Data wygaśnięcia");
define("_AM_ADMIT_TH3"                       , "Tytyuł");
define("_AM_ADMIT_TH4"                       , "Reguła");

// events manager & importing iCalendar

define("_AM_LABEL_IMPORTFROMWEB"             , "Importuj dane iCalendar z sieci (URL musi sie zaczynać od 'http://' lub 'webcal://')");
define("_AM_LABEL_UPLOADFROMFILE"            , "Wgraj dane iCalendar (Wybierz plik ze swojego komputera)");
define("_AM_LABEL_IO_CHECKEDITEMS"           , "Sprawdzone wydarzenia:");
define("_AM_LABEL_IO_OUTPUT"                 , "eksportuj do iCalendar");
define("_AM_LABEL_IO_DELETE"                 , "usuń");
define("_AM_MES_EVENTLINKTOCAT"              , "wydarzenie(a) zostało dodane");
define("_AM_MES_EVENTUNLINKED"               , "wydarzenie(a) zostało przesunięte do starej kategorii");
define("_AM_FMT_IMPORTED"                    , "wydarzenie(a) zostało zainportowane z'%s'");
define("_AM_MES_DELETED"                     , "wydarzenie(a) has been deleted");
define("_AM_IO_TH0"                          , "Użytkownik");
define("_AM_IO_TH1"                          , "Początek");
define("_AM_IO_TH2"                          , "Data wygaśnięcia");
define("_AM_IO_TH3"                          , "Tytuł");
define("_AM_IO_TH4"                          , "Reguła");
define("_AM_IO_TH5"                          , "Dostęp");

// Group's Permissions
define( '_AM_GPERM_G_INSERTABLE'             , "Może dodawać" ) ;
define( '_AM_GPERM_G_SUPERINSERT'            , "Super dodawanie" ) ;
define( '_AM_GPERM_G_EDITABLE'               , "Może edytować" ) ;
define( '_AM_GPERM_G_SUPEREDIT'              , "Super edytowanie" ) ;
define( '_AM_GPERM_G_DELETABLE'              , "Może usuwać" ) ;
define( '_AM_GPERM_G_SUPERDELETE'            , "Super usuwanie" ) ;
define( '_AM_GPERM_G_TOUCHOTHERS'            , "Może ruszać inne" ) ;
define( '_AM_CAT2GROUPDESC'                  , "Wybierz uprawnienia dla każdej grupy" ) ;
define( '_AM_GROUPPERMDESC'                  , "Wybierz uprawnienia dla każdej grupy<br />Jeżeli chcesz, ustaw z 'Władze użytkowników' na Sprecyzowane w Grupach.<br />Ustawienia grup : Administratora i Gościa będą zignorowane." ) ;

// Table Maintenance
define( '_AM_MB_SUCCESSUPDATETABLE'          , "Moduł pomyślnie uaktualniony" ) ;
define( '_AM_MB_FAILUPDATETABLE'             , "Błąd podczas uaktualniania modułu" ) ;
define( '_AM_NOTICE_NOERRORS'                , "Moduł uaktualniony bezbłędnie." ) ;
define( '_AM_ALRT_CATTABLENOTEXIST'          , "Kategoria nie istnieje.<br />Czy chcesz ją stworzyć ?" ) ;
define( '_AM_ALRT_OLDTABLE'                  , "Struktura wydarzeń jest stara.<br />Czy chcesz uaktualnić tabelę ?" ) ;
define( '_AM_ALRT_TOOOLDTABLE'               , "Wystąpił błąd.<br />Mozliwe że używasz starej wercji piCal.<br />Uaktualnij do najnowszej wersji." ) ;
define( '_AM_FMT_SERVER_TZ_ALL'              , "Strefa czasowa na tym serwerze (zima): %+2.1f<br />Strefa czasowa na tym serwerze (lato): %+2.1f<br />Nazwa strefy na tym serwerze: %s<br />Wartość w XOOPS'ie : %+2.1f<br />piCal używa: %+2.1f<br />" ) ;
define( '_AM_TH_SERVER_TZ_COUNT'             , "Wydarzenia" ) ;
define( '_AM_TH_SERVER_TZ_VALUE'             , "Strefa czasowa" ) ;
define( '_AM_TH_SERVER_TZ_VALUE_TO'          , "Zmiana (-14.0ˇÁ14.0)" ) ;
define( '_AM_JSALRT_SERVER_TZ'               , "Nie zapomnij zrobić kopii zapasowej" ) ;
define( '_AM_NOTICE_SERVER_TZ'               , "Jeżeli twój serwer ma ustawiony czas letni i jakieś wydarzenia są zarejestrowane w piCal 0.6x lub 0.7x, nie klikaj na ten guzik.<br />eg) To jest normalne że pokazuje obie: -5.0 i -4.0 w EDT(Eastern Daylight Time)" ) ;
define( '_AM_MB_SUCCESSTZUPDATE'             , "Wydarzenia i strefy czasowe zostały zmodyfikowane." ) ;

// Categories
define( '_AM_CAT_TH_TITLE'                   , 'Tytuł' ) ;
define( '_AM_CAT_TH_DESC'                    , 'Opis' ) ;
define( '_AM_CAT_TH_PARENT'                  , 'Katalog nadrzędny' ) ;
define( '_AM_CAT_TH_OPTIONS'                 , 'Opcje' ) ;
define( '_AM_CAT_TH_LASTMODIFY'              , 'Ostatnio zmodyfikowany' ) ;
define( '_AM_CAT_TH_OPERATION'               , 'Operacja' ) ;
define( '_AM_CAT_TH_ENABLED'                 , 'Włącz' ) ;
define( '_AM_CAT_TH_WEIGHT'                  , 'Ważność' ) ;
define( '_AM_CAT_TH_SUBMENU'                 , 'Dopisz w SubMenu' ) ;
define( '_AM_BTN_UPDATE'                     , 'Uaktualnij' ) ;
define( '_AM_MENU_CAT_EDIT'                  , 'Edycja kategorii' ) ;
define( '_AM_MENU_CAT_NEW'                   , 'Utwórz kategorię' ) ;
define( '_AM_MB_MAKESUBCAT'                  , 'Podkategoria' ) ;
define( '_AM_MB_MAKETOPCAT'                  , 'Utwórz nową kategorię' ) ;
define( '_AM_MB_CAT_INSERTED'                , 'Utworzono nową kategorię' ) ;
define( '_AM_MB_CAT_UPDATED'                 , 'Kategoria pomyślnie uaktualniona' ) ;
define( '_AM_FMT_CAT_DELETED'                , '%s Kategorii usunięto' ) ;
define( '_AM_FMT_CAT_BATCHUPDATED'           , '%s Kategorii uaktualniono' ) ;
define( '_AM_FMT_CATDELCONFIRM'              , 'Czy na pewno chcesz usunąć tą kategorię %s ?' ) ;

// Plugins
define( '_AM_PI_UPDATED'                     , 'Pluginy uaktualniono' ) ;
define( '_AM_PI_TH_TYPE'                     , 'Typ' ) ;
define( '_AM_PI_TH_OPTIONS'                  , 'Opcje (zazwyczaj puste)' ) ;
define( '_AM_PI_TH_TITLE'                    , 'Tytuł' ) ;
define( '_AM_PI_TH_DIRNAME'                  , 'Katalog modułu' ) ;
define( '_AM_PI_TH_FILE'                     , 'Plik pluginu' ) ;
define( '_AM_PI_TH_DOTGIF'                   , '.GIF' ) ;
define( '_AM_PI_TH_OPERATION'                , 'Operacja' ) ;
define( '_AM_PI_ENABLED'                     , 'Włączony' ) ;
define( '_AM_PI_DELETE'                      , 'Usuń' ) ;
define( '_AM_PI_NEW'                         , 'Nowy' ) ;
define( '_AM_PI_VIEWYEARLY'                  , 'Widok roczny' ) ;
define( '_AM_PI_VIEWMONTHLY'                 , 'Widok miesięczny' ) ;
define( '_AM_PI_VIEWWEEKLY'                  , 'Widok tygodniowy' ) ;
define( '_AM_PI_VIEWDAILY'                   , 'Widok dzienny' ) ;



}

?>