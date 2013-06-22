<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');


// titles
define("_AM_APCAL_ADMISSION"                       , "Akceptowanie wydarzeñ");
define("_AM_APCAL_MENU_EVENTS"                     , "Zarz±dzanie wydarzeniami");
define("_AM_APCAL_MENU_CATEGORIES"                 , "Zarz±dzanie kategoriami");
define("_AM_APCAL_MENU_CAT2GROUP"                  , "Dostêp do kategorii");
define("_AM_APCAL_ICALENDAR_IMPORT"                , "Import z iCalendar");
define("_AM_APCAL_GROUPPERM"                       , "Uprawnienia");
define("_AM_APCAL_TABLEMAINTAIN"                   , "Table Maintenance (Upgrade)");
define("_AM_APCAL_MYBLOCKSADMIN"                   , "Bloki i grupy");

// forms
define("_AM_APCAL_BUTTON_EXTRACT"                  , "Extract");
define("_AM_APCAL_BUTTON_ADMIT"                    , "Admit");
define("_AM_APCAL_BUTTON_MOVE"                     , "Przenie¶");
define("_AM_APCAL_BUTTON_COPY"                     , "Kopiuj");
define("_AM_APCAL_CONFIRM_DELETE"                  , "Usun±æ wiadomo¶æ(ci)?");
define("_AM_APCAL_CONFIRM_MOVE"                    , "Czy chcesz usun±æ link do starej kategorii i dodaæ link do wybranej kategorii?");
define("_AM_APCAL_CONFIRM_COPY"                    , "Dodaæ link do wybranej kategorii");
define("_AM_APCAL_OPT_PAST"                        , "Przesz³o¶æ");
define("_AM_APCAL_OPT_FUTURE"                      , "Przysz³o¶æ");
define("_AM_APCAL_OPT_PASTANDFUTURE"               , "Przesz³o¶æ i Przysz³o¶æ");

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY"               , 'y-m-d');
define("_AM_APCAL_DTFMT_LIST_NORMAL"               , 'y-m-d<\b\r />H:i');

// timezones
define("_AM_APCAL_TZOPT_SERVER"                    , "Tak jak na serwerze");
define("_AM_APCAL_TZOPT_GMT"                       , "Jak GMT");
define("_AM_APCAL_TZOPT_USER"                      , "Jak strefa u¿ytkownika:");

// admission
define("_AM_APCAL_LABEL_ADMIT"                     , "Sprawdzone, dodaæ?");
define("_AM_APCAL_MES_ADMITTED"                    , "Dodano wydarzenie(a)");
define("_AM_APCAL_ADMIT_TH0"                       , "U¿ytkownik");
define("_AM_APCAL_ADMIT_TH1"                       , "Pocz±tek");
define("_AM_APCAL_ADMIT_TH2"                       , "Data wyga¶niêcia");
define("_AM_APCAL_ADMIT_TH3"                       , "Tytyu³");
define("_AM_APCAL_ADMIT_TH4"                       , "Regu³a");

// events manager & importing iCalendar

define("_AM_APCAL_LABEL_IMPORTFROMWEB"             , "Importuj dane iCalendar z sieci (URL musi sie zaczynaæ od 'http://' lub 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE"            , "Wgraj dane iCalendar (Wybierz plik ze swojego komputera)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS"           , "Sprawdzone wydarzenia:");
define("_AM_APCAL_LABEL_IO_OUTPUT"                 , "eksportuj do iCalendar");
define("_AM_APCAL_LABEL_IO_DELETE"                 , "usuñ");
define("_AM_APCAL_MES_EVENTLINKTOCAT"              , "wydarzenie(a) zosta³o dodane");
define("_AM_APCAL_MES_EVENTUNLINKED"               , "wydarzenie(a) zosta³o przesuniête do starej kategorii");
define("_AM_APCAL_FMT_IMPORTED"                    , "wydarzenie(a) zosta³o zainportowane z'%s'");
define("_AM_APCAL_MES_DELETED"                     , "wydarzenie(a) has been deleted");
define("_AM_APCAL_IO_TH0"                          , "U¿ytkownik");
define("_AM_APCAL_IO_TH1"                          , "Pocz±tek");
define("_AM_APCAL_IO_TH2"                          , "Data wyga¶niêcia");
define("_AM_APCAL_IO_TH3"                          , "Tytu³");
define("_AM_APCAL_IO_TH4"                          , "Regu³a");
define("_AM_APCAL_IO_TH5"                          , "Dostêp");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE'             , "Mo¿e dodawaæ" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT'            , "Super dodawanie" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE'               , "Mo¿e edytowaæ" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT'              , "Super edytowanie" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE'              , "Mo¿e usuwaæ" ) ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE'            , "Super usuwanie" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS'            , "Mo¿e ruszaæ inne" ) ;
define( '_AM_APCAL_CAT2GROUPDESC'                  , "Wybierz uprawnienia dla ka¿dej grupy" ) ;
define( '_AM_APCAL_GROUPPERMDESC'                  , "Wybierz uprawnienia dla ka¿dej grupy<br />Je¿eli chcesz, ustaw z 'W³adze u¿ytkowników' na Sprecyzowane w Grupach.<br />Ustawienia grup : Administratora i Go¶cia bêd± zignorowane." ) ;

// Table Maintenance
define( '_AM_APCAL_MB_SUCCESSUPDATETABLE'          , "Modu³ pomy¶lnie uaktualniony" ) ;
define( '_AM_APCAL_MB_FAILUPDATETABLE'             , "B³±d podczas uaktualniania modu³u" ) ;
define( '_AM_APCAL_NOTICE_NOERRORS'                , "Modu³ uaktualniony bezb³êdnie." ) ;
define( '_AM_APCAL_ALRT_CATTABLENOTEXIST'          , "Kategoria nie istnieje.<br />Czy chcesz j± stworzyæ ?" ) ;
define( '_AM_APCAL_ALRT_OLDTABLE'                  , "Struktura wydarzeñ jest stara.<br />Czy chcesz uaktualniæ tabelê ?" ) ;
define( '_AM_APCAL_ALRT_TOOOLDTABLE'               , "Wyst±pi³ b³±d.<br />Mozliwe ¿e u¿ywasz starej wercji APCal.<br />Uaktualnij do najnowszej wersji." ) ;
define( '_AM_APCAL_FMT_SERVER_TZ_ALL'              , "Strefa czasowa na tym serwerze (zima): %+2.1f<br />Strefa czasowa na tym serwerze (lato): %+2.1f<br />Nazwa strefy na tym serwerze: %s<br />Warto¶æ w XOOPS'ie : %+2.1f<br />APCal u¿ywa: %+2.1f<br />" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_COUNT'             , "Wydarzenia" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE'             , "Strefa czasowa" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE_TO'          , "Zmiana (-14.0·Á14.0)" ) ;
define( '_AM_APCAL_JSALRT_SERVER_TZ'               , "Nie zapomnij zrobiæ kopii zapasowej" ) ;
define( '_AM_APCAL_NOTICE_SERVER_TZ'               , "Je¿eli twój serwer ma ustawiony czas letni i jakie¶ wydarzenia s± zarejestrowane w APCal 0.6x lub 0.7x, nie klikaj na ten guzik.<br />eg) To jest normalne ¿e pokazuje obie: -5.0 i -4.0 w EDT(Eastern Daylight Time)" ) ;
define( '_AM_APCAL_MB_SUCCESSTZUPDATE'             , "Wydarzenia i strefy czasowe zosta³y zmodyfikowane." ) ;

// Categories
define( '_AM_APCAL_CAT_TH_TITLE'                   , 'Tytu³' ) ;
define( '_AM_APCAL_CAT_TH_DESC'                    , 'Opis' ) ;
define( '_AM_APCAL_CAT_TH_PARENT'                  , 'Katalog nadrzêdny' ) ;
define( '_AM_APCAL_CAT_TH_OPTIONS'                 , 'Opcje' ) ;
define( '_AM_APCAL_CAT_TH_LASTMODIFY'              , 'Ostatnio zmodyfikowany' ) ;
define( '_AM_APCAL_CAT_TH_OPERATION'               , 'Operacja' ) ;
define( '_AM_APCAL_CAT_TH_ENABLED'                 , 'W³±cz' ) ;
define( '_AM_APCAL_CAT_TH_WEIGHT'                  , 'Wa¿no¶æ' ) ;
define( '_AM_APCAL_CAT_TH_SUBMENU'                 , 'Dopisz w SubMenu' ) ;
define( '_AM_APCAL_BTN_UPDATE'                     , 'Uaktualnij' ) ;
define( '_AM_APCAL_MENU_CAT_EDIT'                  , 'Edycja kategorii' ) ;
define( '_AM_APCAL_MENU_CAT_NEW'                   , 'Utwórz kategoriê' ) ;
define( '_AM_APCAL_MB_MAKESUBCAT'                  , 'Podkategoria' ) ;
define( '_AM_APCAL_MB_MAKETOPCAT'                  , 'Utwórz now± kategoriê' ) ;
define( '_AM_APCAL_MB_CAT_INSERTED'                , 'Utworzono now± kategoriê' ) ;
define( '_AM_APCAL_MB_CAT_UPDATED'                 , 'Kategoria pomy¶lnie uaktualniona' ) ;
define( '_AM_APCAL_FMT_CAT_DELETED'                , '%s Kategorii usuniêto' ) ;
define( '_AM_APCAL_FMT_CAT_BATCHUPDATED'           , '%s Kategorii uaktualniono' ) ;
define( '_AM_APCAL_FMT_CATDELCONFIRM'              , 'Czy na pewno chcesz usun±æ t± kategoriê %s ?' ) ;

// Plugins
define( '_AM_APCAL_PI_UPDATED'                     , 'Pluginy uaktualniono' ) ;
define( '_AM_APCAL_PI_TH_TYPE'                     , 'Typ' ) ;
define( '_AM_APCAL_PI_TH_OPTIONS'                  , 'Opcje (zazwyczaj puste)' ) ;
define( '_AM_APCAL_PI_TH_TITLE'                    , 'Tytu³' ) ;
define( '_AM_APCAL_PI_TH_DIRNAME'                  , 'Katalog modu³u' ) ;
define( '_AM_APCAL_PI_TH_FILE'                     , 'Plik pluginu' ) ;
define( '_AM_APCAL_PI_TH_DOTGIF'                   , '.GIF' ) ;
define( '_AM_APCAL_PI_TH_OPERATION'                , 'Operacja' ) ;
define( '_AM_APCAL_PI_ENABLED'                     , 'W³±czony' ) ;
define( '_AM_APCAL_PI_DELETE'                      , 'Usuñ' ) ;
define( '_AM_APCAL_PI_NEW'                         , 'Nowy' ) ;
define( '_AM_APCAL_PI_VIEWYEARLY'                  , 'Widok roczny' ) ;
define( '_AM_APCAL_PI_VIEWMONTHLY'                 , 'Widok miesiêczny' ) ;
define( '_AM_APCAL_PI_VIEWWEEKLY'                  , 'Widok tygodniowy' ) ;
define( '_AM_APCAL_PI_VIEWDAILY'                   , 'Widok dzienny' ) ;



}

?>