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
define('_PICAL_FMT_YW'     , 'Tydzieñ%2$s %1$s') ;
define('_PICAL_FMT_DHI'    , '%1$s %2$s:%3$s') ;
define('_PICAL_FMT_HI'     , '%1$s:%2$s') ;

// formats for sprintf()
define('_PICAL_FMT_YEAR_MONTH' , '%2$s %1$s') ;
define('_PICAL_FMT_YEAR'       , 'Rok %s') ;
define('_PICAL_FMT_WEEKNO'     , 'Tydzieñ %s') ;

define('_PICAL_ICON_LIST'      , 'Lista') ;
define('_PICAL_ICON_DAILY'     , 'Widok dzienny') ;
define('_PICAL_ICON_WEEKLY'    , 'Widok tygodniowy') ;
define('_PICAL_ICON_MONTHLY'   , 'Widok miesiêczny') ;
define('_PICAL_ICON_YEARLY'    , 'Widok roczny') ;

define('_PICAL_MB_SHOWALLCAT'  , 'Wszystkie kategorie') ;

define('_PICAL_MB_LINKTODAY'   , 'Dzisiaj') ;
define('_PICAL_MB_NOSUBJECT'   , '(Bez tematu)') ;

define('_PICAL_MB_PREV_DATE'   , 'Wczoraj') ;
define('_PICAL_MB_NEXT_DATE'   , 'Jutro') ;
define('_PICAL_MB_PREV_WEEK'   , 'Poprzedni tydzieñ') ;
define('_PICAL_MB_NEXT_WEEK'   , 'Nastêpny tydzieñ') ;
define('_PICAL_MB_PREV_MONTH'  , 'Poprzedni miesi±c') ;
define('_PICAL_MB_NEXT_MONTH'  , 'Nastêpny miesi±c') ;
define('_PICAL_MB_PREV_YEAR'   , 'Poprzedni rok') ;
define('_PICAL_MB_NEXT_YEAR'   , 'Nastêpny rok') ;

define('_PICAL_MB_NOEVENT'        , 'Nie ma ¿adnych wydarzeñ') ;
define('_PICAL_MB_ADDEVENT'       , 'Dodaj wydarzenie') ;
define('_PICAL_MB_CONTINUING'     , '(kuntynuuj)') ;
define('_PICAL_MB_RESTEVENT_PRE'  , 'wiêcej') ;
define('_PICAL_MB_RESTEVENT_SUF'  , 'item(s)') ;
define('_PICAL_MB_TIMESEPARATOR'  , '--') ;

define('_PICAL_MB_ALLDAY_EVENT'   , 'Wydarzenie ca³odniowe') ;
define('_PICAL_MB_LONG_EVENT'     , 'Poka¿ jako belka') ;
define('_PICAL_MB_LONG_SPECIALDAY', 'Rocznica, jubileusz itp.') ;

define('_PICAL_MB_PUBLIC'         , 'Publiczne') ;
define('_PICAL_MB_PRIVATE'        , 'Prywatne') ;
define('_PICAL_MB_PRIVATETARGET'  , 'pomiêdzy %s') ;

define('_PICAL_MB_LINK_TO_RRULE1ST'    , 'Poka¿ pierwsze wydarzenie ') ;
define('_PICAL_MB_RRULE1ST'            , 'To jest pierwsze wydarzenie') ;

define('_PICAL_MB_EVENT_NOTREGISTER'   , 'Nie dodane') ;
define('_PICAL_MB_EVENT_ADMITTED'      , 'Zaakceptowane') ;
define('_PICAL_MB_EVENT_NEEDADMIT'     , 'Czeka na zaakceptowanie') ;

define('_PICAL_MB_TITLE_EVENTINFO'     , 'Planowanie') ;
define('_PICAL_MB_SUBTITLE_EVENTDETAIL', 'Szczegó³y') ;
define('_PICAL_MB_SUBTITLE_EVENTEDIT'  , 'Widok edycji') ;

define('_PICAL_MB_HOUR_SUF'            , ':') ;
define('_PICAL_MB_MINUTE_SUF'          , '') ;

define('_PICAL_MB_ORDER_ASC'           , 'Rosn±co') ;
define('_PICAL_MB_ORDER_DESC'          , 'Malej±co') ;
define('_PICAL_MB_SORTBY'              , 'Sortuj wg:') ;
define('_PICAL_MB_CURSORTEDBY'         , 'Wydarzenia s± posortowane wg:') ;

define("_PICAL_MB_LABEL_CHECKEDITEMS"  , "Sprawdzone wydarzenia:");
define("_PICAL_MB_LABEL_OUTPUTICS"     , "wyeksportuj do iCalendar");

define("_PICAL_MB_ICALSELECTPLATFORM"  , "Wybierz platformê ");

define('_PICAL_TH_SUMMARY'             , 'Temat') ;
define('_PICAL_TH_TIMEZONE'            , 'Strefa czasowa') ;
define('_PICAL_TH_STARTDATETIME'       , 'Pocz±tek') ;
define('_PICAL_TH_ENDDATETIME'         , 'Koniec') ;
define('_PICAL_TH_ALLDAYOPTIONS'       , 'Ca³odniowe opcje') ;
define('_PICAL_TH_LOCATION'            , 'Miejsca') ;
define('_PICAL_TH_CONTACT'             , 'Kontakt') ;
define('_PICAL_TH_CATEGORIES'          , 'Kategorie') ;
define('_PICAL_TH_SUBMITTER'           , 'Autor') ;
define('_PICAL_TH_CLASS'               , 'Typ') ;
define('_PICAL_TH_DESCRIPTION'         , 'Opis wydarzenia') ;
define('_PICAL_TH_RRULE'               , 'Powtórzenie wydarzenia') ;
define('_PICAL_TH_ADMISSIONSTATUS'     , 'Status') ;
define('_PICAL_TH_LASTMODIFIED'        , 'Ostatnia modyfikacja') ;

define('_PICAL_NTC_MONTHLYBYMONTHDAY'  , '(Numer wej¶ciowy)') ;
define('_PICAL_NTC_EXTRACTLIMIT'       , '** Tylko %s wydarzeñ bêdzie wyci±ganych') ;
define('_PICAL_NTC_NUMBEROFNEEDADMIT'  , '(%s rzeczy potrzebuje akceptacji administratora') ;

define('_PICAL_OPT_PRIVATEMYSELF'      , 'tylko siebie') ;
define('_PICAL_OPT_PRIVATEGROUP'       , 'grupa %s') ;
define('_PICAL_OPT_PRIVATEINVALID'     , '(b³êdna grupa)') ;

define('_PICAL_MB_OP_AFTER'            , 'Potem') ;
define('_PICAL_MB_OP_BEFORE'           , 'Przed') ;
define('_PICAL_MB_OP_ON'               , 'Aktualne') ;
define('_PICAL_MB_OP_ALL'              , 'Wszystkie') ;

define('_PICAL_CNFM_SAVEAS_YN'         , 'Czy chcesz zapisaæ to jako inny wpis?') ;
define('_PICAL_CNFM_DELETE_YN'         , 'Czy chcesz usun±æ ten wpis ?') ;

define('_PICAL_ERR_INVALID_EVENT_ID'   , 'B³±d: nie znaleziono wydarzenia') ;
define('_PICAL_ERR_NOPERM_TO_SHOW'     , "B³±d: nie masz uprawnieñ do przegl±dania tej strony") ;
define('_PICAL_ERR_NOPERM_TO_OUTPUTICS', "B³±d: nie masz uprawnieñ do zmieniania opcji iCalendar") ;
define('_PICAL_ERR_LACKINDISPITEM'     , '%s jest puste.<br />kliknij "wstecz" w swojej przegl±darce!') ;

define('_PICAL_BTN_JUMP'               , ' Id¼') ;
define('_PICAL_BTN_NEWINSERTED'        , ' Dodaj') ;
define('_PICAL_BTN_SUBMITCHANGES'      , ' Zmieñ to! ') ;
define('_PICAL_BTN_SAVEAS'             , ' Zapisz jako') ;
define('_PICAL_BTN_DELETE'             , ' Usuñ') ;
define('_PICAL_BTN_DELETE_ONE'         , ' Usuñ tylko jedno') ;
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
define("_PICAL_BTN_MOVE"               , " Przenie¶");
define("_PICAL_BTN_COPY"               , " Kopiuj");

define('_PICAL_RR_EVERYDAY'            , 'Codziennie') ;
define('_PICAL_RR_EVERYWEEK'           , 'Co tydzieñ') ;
define('_PICAL_RR_EVERYMONTH'          , 'Co miesi±c') ;
define('_PICAL_RR_EVERYYEAR'           , 'Co rok') ;
define('_PICAL_RR_FREQDAILY'           , 'Dziennie') ;
define('_PICAL_RR_FREQWEEKLY'          , 'Tygodniowo') ;
define('_PICAL_RR_FREQMONTHLY'         , 'Miesiêcznie') ;
define('_PICAL_RR_FREQYEARLY'          , 'Rocznie') ;
define('_PICAL_RR_FREQDAILY_PRE'       , 'Ka¿dy') ;
define('_PICAL_RR_FREQWEEKLY_PRE'      , 'Ka¿dy') ;
define('_PICAL_RR_FREQMONTHLY_PRE'     , 'Ka¿dy') ;
define('_PICAL_RR_FREQYEARLY_PRE'      , 'Ka¿dy') ;
define('_PICAL_RR_FREQDAILY_SUF'       , 'dzieñ/dni') ;
define('_PICAL_RR_FREQWEEKLY_SUF'      , 'tygodni') ;
define('_PICAL_RR_FREQMONTHLY_SUF'     , 'miesiêcy)') ;
define('_PICAL_RR_FREQYEARLY_SUF'      , 'lat') ;
define('_PICAL_RR_PERDAY'              , 'ka¿de %s dni') ;
define('_PICAL_RR_PERWEEK'             , 'ka¿de %s tygodni') ;
define('_PICAL_RR_PERMONTH'            , 'ka¿de %s miesiêcy') ;
define('_PICAL_RR_PERYEAR'             , 'ka¿de %s lat') ;
define('_PICAL_RR_COUNT'               , '<br />%s razy') ;
define('_PICAL_RR_UNTIL'               , '<br />dopóki %s') ;
define('_PICAL_RR_R_NORRULE'           , 'Nie zdarza siê ponownie') ;
define('_PICAL_RR_R_YESRRULE'          , 'Kiedy nast±pi powtórzenie') ;
define('_PICAL_RR_OR'                  , 'lub') ;
define('_PICAL_RR_S_NOTSELECTED'       , '-nie wybrano-') ;
define('_PICAL_RR_S_SAMEASBDATE'       , 'Taka sama jak data pocz±tku') ;
define('_PICAL_RR_R_NOCOUNTUNTIL'      , '¯adne koñcz±ce siê warunki') ;
define('_PICAL_RR_R_USECOUNT_PRE'      , 'powtórzeñ') ;
define('_PICAL_RR_R_USECOUNT_SUF'      , 'razy') ;
define('_PICAL_RR_R_USEUNTIL'          , 'dopóki') ;


}

?>