<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {

define( '_APCAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_APCAL_JS_CALENDAR','calendar-en.js') ;

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_APCAL_JSFMT_YMDN','%e %B %Y %A') ;

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_MINUTE','i') ;

// definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
define('_APCAL_FMT_MD'     , '%2$s %1$s') ;
define('_APCAL_FMT_YMD'    , '%3$s %2$s %1$s') ;
define('_APCAL_FMT_YMDN'   , '%3$s %2$s %1$s %4$s') ;
define('_APCAL_FMT_YMDO'   , '%4$s%3$s%2$s%1$s') ;
define('_APCAL_FMT_YMW'    , '%3$s %2$s %1$s') ;
define('_APCAL_FMT_YW'     , 'Tydzie�%2$s %1$s') ;
define('_APCAL_FMT_DHI'    , '%1$s %2$s:%3$s') ;
define('_APCAL_FMT_HI'     , '%1$s:%2$s') ;

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH' , '%2$s %1$s') ;
define('_APCAL_FMT_YEAR'       , 'Rok %s') ;
define('_APCAL_FMT_WEEKNO'     , 'Tydzie� %s') ;

define('_APCAL_ICON_LIST'      , 'Lista') ;
define('_APCAL_ICON_DAILY'     , 'Widok dzienny') ;
define('_APCAL_ICON_WEEKLY'    , 'Widok tygodniowy') ;
define('_APCAL_ICON_MONTHLY'   , 'Widok miesi�czny') ;
define('_APCAL_ICON_YEARLY'    , 'Widok roczny') ;

define('_APCAL_MB_APCALSHOWALLCAT'  , 'Wszystkie kategorie') ;

define('_APCAL_MB_APCALLINKTODAY'   , 'Dzisiaj') ;
define('_APCAL_MB_APCALNOSUBJECT'   , '(Bez tematu)') ;

define('_APCAL_MB_APCALPREV_DATE'   , 'Wczoraj') ;
define('_APCAL_MB_APCALNEXT_DATE'   , 'Jutro') ;
define('_APCAL_MB_APCALPREV_WEEK'   , 'Poprzedni tydzie�') ;
define('_APCAL_MB_APCALNEXT_WEEK'   , 'Nast�pny tydzie�') ;
define('_APCAL_MB_APCALPREV_MONTH'  , 'Poprzedni miesi�c') ;
define('_APCAL_MB_APCALNEXT_MONTH'  , 'Nast�pny miesi�c') ;
define('_APCAL_MB_APCALPREV_YEAR'   , 'Poprzedni rok') ;
define('_APCAL_MB_APCALNEXT_YEAR'   , 'Nast�pny rok') ;

define('_APCAL_MB_APCALNOEVENT'        , 'Nie ma �adnych wydarze�') ;
define('_APCAL_MB_APCALADDEVENT'       , 'Dodaj wydarzenie') ;
define('_APCAL_MB_APCALCONTINUING'     , '(kuntynuuj)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE'  , 'wi�cej') ;
define('_APCAL_MB_APCALRESTEVENT_SUF'  , 'item(s)') ;
define('_APCAL_MB_APCALTIMESEPARATOR'  , '--') ;

define('_APCAL_MB_APCALALLDAY_EVENT'   , 'Wydarzenie ca�odniowe') ;
define('_APCAL_MB_APCALLONG_EVENT'     , 'Poka� jako belka') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY', 'Rocznica, jubileusz itp.') ;

define('_APCAL_MB_APCALPUBLIC'         , 'Publiczne') ;
define('_APCAL_MB_APCALPRIVATE'        , 'Prywatne') ;
define('_APCAL_MB_APCALPRIVATETARGET'  , 'pomi�dzy %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST'    , 'Poka� pierwsze wydarzenie ') ;
define('_APCAL_MB_APCALRRULE1ST'            , 'To jest pierwsze wydarzenie') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER'   , 'Nie dodane') ;
define('_APCAL_MB_APCALEVENT_ADMITTED'      , 'Zaakceptowane') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT'     , 'Czeka na zaakceptowanie') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO'     , 'Planowanie') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL', 'Szczeg�y') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT'  , 'Widok edycji') ;

define('_APCAL_MB_APCALHOUR_SUF'            , ':') ;
define('_APCAL_MB_APCALMINUTE_SUF'          , '') ;

define('_APCAL_MB_APCALORDER_ASC'           , 'Rosn�co') ;
define('_APCAL_MB_APCALORDER_DESC'          , 'Malej�co') ;
define('_APCAL_MB_APCALSORTBY'              , 'Sortuj wg:') ;
define('_APCAL_MB_APCALCURSORTEDBY'         , 'Wydarzenia s� posortowane wg:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS"  , "Sprawdzone wydarzenia:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS"     , "wyeksportuj do iCalendar");

define("_APCAL_MB_APCALICALSELECTPLATFORM"  , "Wybierz platform� ");

define('_APCAL_TH_SUMMARY'             , 'Temat') ;
define('_APCAL_TH_TIMEZONE'            , 'Strefa czasowa') ;
define('_APCAL_TH_STARTDATETIME'       , 'Pocz�tek') ;
define('_APCAL_TH_ENDDATETIME'         , 'Koniec') ;
define('_APCAL_TH_ALLDAYOPTIONS'       , 'Ca�odniowe opcje') ;
define('_APCAL_TH_LOCATION'            , 'Miejsca') ;
define('_APCAL_TH_CONTACT'             , 'Kontakt') ;
define('_APCAL_TH_CATEGORIES'          , 'Kategorie') ;
define('_APCAL_TH_SUBMITTER'           , 'Autor') ;
define('_APCAL_TH_CLASS'               , 'Typ') ;
define('_APCAL_TH_DESCRIPTION'         , 'Opis wydarzenia') ;
define('_APCAL_TH_RRULE'               , 'Powt�rzenie wydarzenia') ;
define('_APCAL_TH_ADMISSIONSTATUS'     , 'Status') ;
define('_APCAL_TH_LASTMODIFIED'        , 'Ostatnia modyfikacja') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY'  , '(Numer wej�ciowy)') ;
define('_APCAL_NTC_EXTRACTLIMIT'       , '** Tylko %s wydarze� b�dzie wyci�ganych') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT'  , '(%s rzeczy potrzebuje akceptacji administratora') ;

define('_APCAL_OPT_PRIVATEMYSELF'      , 'tylko siebie') ;
define('_APCAL_OPT_PRIVATEGROUP'       , 'grupa %s') ;
define('_APCAL_OPT_PRIVATEINVALID'     , '(b��dna grupa)') ;

define('_APCAL_MB_APCALOP_AFTER'            , 'Potem') ;
define('_APCAL_MB_APCALOP_BEFORE'           , 'Przed') ;
define('_APCAL_MB_APCALOP_ON'               , 'Aktualne') ;
define('_APCAL_MB_APCALOP_ALL'              , 'Wszystkie') ;

define('_APCAL_CNFM_SAVEAS_YN'         , 'Czy chcesz zapisa� to jako inny wpis?') ;
define('_APCAL_CNFM_DELETE_YN'         , 'Czy chcesz usun�� ten wpis ?') ;

define('_APCAL_ERR_INVALID_EVENT_ID'   , 'B��d: nie znaleziono wydarzenia') ;
define('_APCAL_ERR_NOPERM_TO_SHOW'     , "B��d: nie masz uprawnie� do przegl�dania tej strony") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS', "B��d: nie masz uprawnie� do zmieniania opcji iCalendar") ;
define('_APCAL_ERR_LACKINDISPITEM'     , '%s jest puste.<br />kliknij "wstecz" w swojej przegl�darce!') ;

define('_APCAL_BTN_JUMP'               , ' Id�') ;
define('_APCAL_BTN_NEWINSERTED'        , ' Dodaj') ;
define('_APCAL_BTN_SUBMITCHANGES'      , ' Zmie� to! ') ;
define('_APCAL_BTN_SAVEAS'             , ' Zapisz jako') ;
define('_APCAL_BTN_DELETE'             , ' Usu�') ;
define('_APCAL_BTN_DELETE_ONE'         , ' Usu� tylko jedno') ;
define('_APCAL_BTN_EDITEVENT'          , ' Edytuj') ;
define('_APCAL_BTN_RESET'              , ' Resetuj') ;
define('_APCAL_BTN_OUTPUTICS_WIN'      , ' iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC'      , ' iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT'              , ' Drukuj') ;
define("_APCAL_BTN_IMPORT"             , " Importuj!");
define("_APCAL_BTN_UPLOAD"             , " Uploaduj!");
define("_APCAL_BTN_EXPORT"             , " Exportuj!");
define("_APCAL_BTN_EXTRACT"            , " Wypakuj");
define("_APCAL_BTN_ADMIT"              , " Akceptuj");
define("_APCAL_BTN_MOVE"               , " Przenie�");
define("_APCAL_BTN_COPY"               , " Kopiuj");

define('_APCAL_RR_EVERYDAY'            , 'Codziennie') ;
define('_APCAL_RR_EVERYWEEK'           , 'Co tydzie�') ;
define('_APCAL_RR_EVERYMONTH'          , 'Co miesi�c') ;
define('_APCAL_RR_EVERYYEAR'           , 'Co rok') ;
define('_APCAL_RR_FREQDAILY'           , 'Dziennie') ;
define('_APCAL_RR_FREQWEEKLY'          , 'Tygodniowo') ;
define('_APCAL_RR_FREQMONTHLY'         , 'Miesi�cznie') ;
define('_APCAL_RR_FREQYEARLY'          , 'Rocznie') ;
define('_APCAL_RR_FREQDAILY_PRE'       , 'Ka�dy') ;
define('_APCAL_RR_FREQWEEKLY_PRE'      , 'Ka�dy') ;
define('_APCAL_RR_FREQMONTHLY_PRE'     , 'Ka�dy') ;
define('_APCAL_RR_FREQYEARLY_PRE'      , 'Ka�dy') ;
define('_APCAL_RR_FREQDAILY_SUF'       , 'dzie�/dni') ;
define('_APCAL_RR_FREQWEEKLY_SUF'      , 'tygodni') ;
define('_APCAL_RR_FREQMONTHLY_SUF'     , 'miesi�cy)') ;
define('_APCAL_RR_FREQYEARLY_SUF'      , 'lat') ;
define('_APCAL_RR_PERDAY'              , 'ka�de %s dni') ;
define('_APCAL_RR_PERWEEK'             , 'ka�de %s tygodni') ;
define('_APCAL_RR_PERMONTH'            , 'ka�de %s miesi�cy') ;
define('_APCAL_RR_PERYEAR'             , 'ka�de %s lat') ;
define('_APCAL_RR_COUNT'               , '<br />%s razy') ;
define('_APCAL_RR_UNTIL'               , '<br />dop�ki %s') ;
define('_APCAL_RR_R_NORRULE'           , 'Nie zdarza si� ponownie') ;
define('_APCAL_RR_R_YESRRULE'          , 'Kiedy nast�pi powt�rzenie') ;
define('_APCAL_RR_OR'                  , 'lub') ;
define('_APCAL_RR_S_NOTSELECTED'       , '-nie wybrano-') ;
define('_APCAL_RR_S_SAMEASBDATE'       , 'Taka sama jak data pocz�tku') ;
define('_APCAL_RR_R_NOCOUNTUNTIL'      , '�adne ko�cz�ce si� warunki') ;
define('_APCAL_RR_R_USECOUNT_PRE'      , 'powt�rze�') ;
define('_APCAL_RR_R_USECOUNT_SUF'      , 'razy') ;
define('_APCAL_RR_R_USEUNTIL'          , 'dop�ki') ;


}

?>