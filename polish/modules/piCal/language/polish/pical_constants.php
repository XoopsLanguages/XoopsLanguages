<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'PICAL_CNST_LOADED' ) ) {

define( 'PICAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_PICAL_JS_CALENDAR','calendar-en.js') ;

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_PICAL_JSFMT_YMDN','%e %B %Y %A') ;

// format for date()  see http://jp.php.net/date
define('_PICAL_DTFMT_MINUTE','i') ;

// definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
define('_PICAL_FMT_MD'     , '%2$s %1$s') ;
define('_PICAL_FMT_YMD'    , '%3$s %2$s %1$s') ;
define('_PICAL_FMT_YMDN'   , '%3$s %2$s %1$s %4$s') ;
define('_PICAL_FMT_YMDO'   , '%4$s%3$s%2$s%1$s') ;
define('_PICAL_FMT_YMW'    , '%3$s %2$s %1$s') ;
define('_PICAL_FMT_YW'     , 'Tydzień%2$s %1$s') ;
define('_PICAL_FMT_DHI'    , '%1$s %2$s:%3$s') ;
define('_PICAL_FMT_HI'     , '%1$s:%2$s') ;

// formats for sprintf()
define('_PICAL_FMT_YEAR_MONTH' , '%2$s %1$s') ;
define('_PICAL_FMT_YEAR'       , 'Rok %s') ;
define('_PICAL_FMT_WEEKNO'     , 'Tydzień %s') ;

define('_PICAL_ICON_LIST'      , 'Lista') ;
define('_PICAL_ICON_DAILY'     , 'Widok dzienny') ;
define('_PICAL_ICON_WEEKLY'    , 'Widok tygodniowy') ;
define('_PICAL_ICON_MONTHLY'   , 'Widok miesięczny') ;
define('_PICAL_ICON_YEARLY'    , 'Widok roczny') ;

define('_PICAL_MB_SHOWALLCAT'  , 'Wszystkie kategorie') ;

define('_PICAL_MB_LINKTODAY'   , 'Dzisiaj') ;
define('_PICAL_MB_NOSUBJECT'   , '(Bez tematu)') ;

define('_PICAL_MB_PREV_DATE'   , 'Wczoraj') ;
define('_PICAL_MB_NEXT_DATE'   , 'Jutro') ;
define('_PICAL_MB_PREV_WEEK'   , 'Poprzedni tydzień') ;
define('_PICAL_MB_NEXT_WEEK'   , 'Następny tydzień') ;
define('_PICAL_MB_PREV_MONTH'  , 'Poprzedni miesiąc') ;
define('_PICAL_MB_NEXT_MONTH'  , 'Następny miesiąc') ;
define('_PICAL_MB_PREV_YEAR'   , 'Poprzedni rok') ;
define('_PICAL_MB_NEXT_YEAR'   , 'Następny rok') ;

define('_PICAL_MB_NOEVENT'        , 'Nie ma żadnych wydarzeń') ;
define('_PICAL_MB_ADDEVENT'       , 'Dodaj wydarzenie') ;
define('_PICAL_MB_CONTINUING'     , '(kuntynuuj)') ;
define('_PICAL_MB_RESTEVENT_PRE'  , 'więcej') ;
define('_PICAL_MB_RESTEVENT_SUF'  , 'item(s)') ;
define('_PICAL_MB_TIMESEPARATOR'  , '--') ;

define('_PICAL_MB_ALLDAY_EVENT'   , 'Wydarzenie całodniowe') ;
define('_PICAL_MB_LONG_EVENT'     , 'Pokaż jako belka') ;
define('_PICAL_MB_LONG_SPECIALDAY', 'Rocznica, jubileusz itp.') ;

define('_PICAL_MB_PUBLIC'         , 'Publiczne') ;
define('_PICAL_MB_PRIVATE'        , 'Prywatne') ;
define('_PICAL_MB_PRIVATETARGET'  , 'pomiędzy %s') ;

define('_PICAL_MB_LINK_TO_RRULE1ST'    , 'Pokaż pierwsze wydarzenie ') ;
define('_PICAL_MB_RRULE1ST'            , 'To jest pierwsze wydarzenie') ;

define('_PICAL_MB_EVENT_NOTREGISTER'   , 'Nie dodane') ;
define('_PICAL_MB_EVENT_ADMITTED'      , 'Zaakceptowane') ;
define('_PICAL_MB_EVENT_NEEDADMIT'     , 'Czeka na zaakceptowanie') ;

define('_PICAL_MB_TITLE_EVENTINFO'     , 'Planowanie') ;
define('_PICAL_MB_SUBTITLE_EVENTDETAIL', 'Szczegóły') ;
define('_PICAL_MB_SUBTITLE_EVENTEDIT'  , 'Widok edycji') ;

define('_PICAL_MB_HOUR_SUF'            , ':') ;
define('_PICAL_MB_MINUTE_SUF'          , '') ;

define('_PICAL_MB_ORDER_ASC'           , 'Rosnąco') ;
define('_PICAL_MB_ORDER_DESC'          , 'Malejąco') ;
define('_PICAL_MB_SORTBY'              , 'Sortuj wg:') ;
define('_PICAL_MB_CURSORTEDBY'         , 'Wydarzenia są posortowane wg:') ;

define("_PICAL_MB_LABEL_CHECKEDITEMS"  , "Sprawdzone wydarzenia:");
define("_PICAL_MB_LABEL_OUTPUTICS"     , "wyeksportuj do iCalendar");

define("_PICAL_MB_ICALSELECTPLATFORM"  , "Wybierz platformę ");

define('_PICAL_TH_SUMMARY'             , 'Temat') ;
define('_PICAL_TH_TIMEZONE'            , 'Strefa czasowa') ;
define('_PICAL_TH_STARTDATETIME'       , 'Początek') ;
define('_PICAL_TH_ENDDATETIME'         , 'Koniec') ;
define('_PICAL_TH_ALLDAYOPTIONS'       , 'Całodniowe opcje') ;
define('_PICAL_TH_LOCATION'            , 'Miejsca') ;
define('_PICAL_TH_CONTACT'             , 'Kontakt') ;
define('_PICAL_TH_CATEGORIES'          , 'Kategorie') ;
define('_PICAL_TH_SUBMITTER'           , 'Autor') ;
define('_PICAL_TH_CLASS'               , 'Typ') ;
define('_PICAL_TH_DESCRIPTION'         , 'Opis wydarzenia') ;
define('_PICAL_TH_RRULE'               , 'Powtórzenie wydarzenia') ;
define('_PICAL_TH_ADMISSIONSTATUS'     , 'Status') ;
define('_PICAL_TH_LASTMODIFIED'        , 'Ostatnia modyfikacja') ;

define('_PICAL_NTC_MONTHLYBYMONTHDAY'  , '(Numer wejściowy)') ;
define('_PICAL_NTC_EXTRACTLIMIT'       , '** Tylko %s wydarzeń będzie wyciąganych') ;
define('_PICAL_NTC_NUMBEROFNEEDADMIT'  , '(%s rzeczy potrzebuje akceptacji administratora') ;

define('_PICAL_OPT_PRIVATEMYSELF'      , 'tylko siebie') ;
define('_PICAL_OPT_PRIVATEGROUP'       , 'grupa %s') ;
define('_PICAL_OPT_PRIVATEINVALID'     , '(błędna grupa)') ;

define('_PICAL_MB_OP_AFTER'            , 'Potem') ;
define('_PICAL_MB_OP_BEFORE'           , 'Przed') ;
define('_PICAL_MB_OP_ON'               , 'Aktualne') ;
define('_PICAL_MB_OP_ALL'              , 'Wszystkie') ;

define('_PICAL_CNFM_SAVEAS_YN'         , 'Czy chcesz zapisać to jako inny wpis?') ;
define('_PICAL_CNFM_DELETE_YN'         , 'Czy chcesz usunąć ten wpis ?') ;

define('_PICAL_ERR_INVALID_EVENT_ID'   , 'Błąd: nie znaleziono wydarzenia') ;
define('_PICAL_ERR_NOPERM_TO_SHOW'     , "Błąd: nie masz uprawnień do przeglądania tej strony") ;
define('_PICAL_ERR_NOPERM_TO_OUTPUTICS', "Błąd: nie masz uprawnień do zmieniania opcji iCalendar") ;
define('_PICAL_ERR_LACKINDISPITEM'     , '%s jest puste.<br />kliknij "wstecz" w swojej przeglądarce!') ;

define('_PICAL_BTN_JUMP'               , ' Idź') ;
define('_PICAL_BTN_NEWINSERTED'        , ' Dodaj') ;
define('_PICAL_BTN_SUBMITCHANGES'      , ' Zmień to! ') ;
define('_PICAL_BTN_SAVEAS'             , ' Zapisz jako') ;
define('_PICAL_BTN_DELETE'             , ' Usuń') ;
define('_PICAL_BTN_DELETE_ONE'         , ' Usuń tylko jedno') ;
define('_PICAL_BTN_EDITEVENT'          , ' Edytuj') ;
define('_PICAL_BTN_RESET'              , ' Resetuj') ;
define('_PICAL_BTN_OUTPUTICS_WIN'      , ' iCalendar(Win)') ;
define('_PICAL_BTN_OUTPUTICS_MAC'      , ' iCalendar(Mac)') ;
define('_PICAL_BTN_PRINT'              , ' Drukuj') ;
define("_PICAL_BTN_IMPORT"             , " Importuj!");
define("_PICAL_BTN_UPLOAD"             , " Uploaduj!");
define("_PICAL_BTN_EXPORT"             , " Exportuj!");
define("_PICAL_BTN_EXTRACT"            , " Wypakuj");
define("_PICAL_BTN_ADMIT"              , " Akceptuj");
define("_PICAL_BTN_MOVE"               , " Przenieś");
define("_PICAL_BTN_COPY"               , " Kopiuj");

define('_PICAL_RR_EVERYDAY'            , 'Codziennie') ;
define('_PICAL_RR_EVERYWEEK'           , 'Co tydzień') ;
define('_PICAL_RR_EVERYMONTH'          , 'Co miesiąc') ;
define('_PICAL_RR_EVERYYEAR'           , 'Co rok') ;
define('_PICAL_RR_FREQDAILY'           , 'Dziennie') ;
define('_PICAL_RR_FREQWEEKLY'          , 'Tygodniowo') ;
define('_PICAL_RR_FREQMONTHLY'         , 'Miesięcznie') ;
define('_PICAL_RR_FREQYEARLY'          , 'Rocznie') ;
define('_PICAL_RR_FREQDAILY_PRE'       , 'Każdy') ;
define('_PICAL_RR_FREQWEEKLY_PRE'      , 'Każdy') ;
define('_PICAL_RR_FREQMONTHLY_PRE'     , 'Każdy') ;
define('_PICAL_RR_FREQYEARLY_PRE'      , 'Każdy') ;
define('_PICAL_RR_FREQDAILY_SUF'       , 'dzień/dni') ;
define('_PICAL_RR_FREQWEEKLY_SUF'      , 'tygodni') ;
define('_PICAL_RR_FREQMONTHLY_SUF'     , 'miesięcy)') ;
define('_PICAL_RR_FREQYEARLY_SUF'      , 'lat') ;
define('_PICAL_RR_PERDAY'              , 'każde %s dni') ;
define('_PICAL_RR_PERWEEK'             , 'każde %s tygodni') ;
define('_PICAL_RR_PERMONTH'            , 'każde %s miesięcy') ;
define('_PICAL_RR_PERYEAR'             , 'każde %s lat') ;
define('_PICAL_RR_COUNT'               , '<br />%s razy') ;
define('_PICAL_RR_UNTIL'               , '<br />dopóki %s') ;
define('_PICAL_RR_R_NORRULE'           , 'Nie zdarza się ponownie') ;
define('_PICAL_RR_R_YESRRULE'          , 'Kiedy nastąpi powtórzenie') ;
define('_PICAL_RR_OR'                  , 'lub') ;
define('_PICAL_RR_S_NOTSELECTED'       , '-nie wybrano-') ;
define('_PICAL_RR_S_SAMEASBDATE'       , 'Taka sama jak data początku') ;
define('_PICAL_RR_R_NOCOUNTUNTIL'      , 'Żadne kończące się warunki') ;
define('_PICAL_RR_R_USECOUNT_PRE'      , 'powtórzeń') ;
define('_PICAL_RR_R_USECOUNT_SUF'      , 'razy') ;
define('_PICAL_RR_R_USEUNTIL'          , 'dopóki') ;


}

?>