<?php
/**
 * $Id: main.php,v 1.1 2007/02/10 18:55:53 dap997 Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

define( "_MD_WFL_NOLINK"             , "Nie ma takiego linku w bazie!" );
define( "_MD_WFL_SUBCATLISTING"      , "Category Listing" );
define( "_MD_WFL_ISADMINNOTICE"      , "Wyst�pi� b��d dotycz�cy obrazka." );
define( "_MD_WFL_THANKSFORINFO"      , "Dziekujemy za propozycj�. Zostaniesz poinformowany kiedy twoja propozycja zostanie zaakceptowana przez administratora strony." );
define( "_MD_WFL_ISAPPROVED"         , "Dziekujemy, twoja propozycja zostawa�a zaakceptowana." );
define( "_MD_WFL_THANKSFORHELP"      , "Dzi�kuj� za wk�ad w utrzymanie dzia�u w �adzie." );
define( "_MD_WFL_FORSECURITY"        , "Ze wzgl�d�w bezpiecze�stwa twoja nazwa u�ytkownika oraz IP zosta�o zapisane." );
define( "_MD_WFL_DESCRIPTION"        , "Opis" );
define( "_MD_WFL_SUBMITCATHEAD"      , "Formularz dodawania linku" );
define( "_MD_WFL_MAIN"               , "Strona g��wna" );
define( "_MD_WFL_POPULAR"            , "Popularne" );
define( "_MD_WFL_NEWTHISWEEK"        , "Nowe w tym tygodniu" );
define( "_MD_WFL_UPTHISWEEK"         , "Uaktualnione w tym tygodniu" );
define( "_MD_WFL_POPULARITYLTOM"     , "Popularno�� (Od najmniej do najbardziej popularnych)" );
define( "_MD_WFL_POPULARITYMTOL"     , "Popularno�� (Od najbardziej do najmniej popularnych" );
define( "_MD_WFL_TITLEATOZ"          , "Tytu� (A do Z)" );
define( "_MD_WFL_TITLEZTOA"          , "Tytu� (Z do A)" );
define( "_MD_WFL_DATEOLD"            , "Data (Stare linki najpierw)" );
define( "_MD_WFL_DATENEW"            , "Data (Nowe linki najpierw)" );
define( "_MD_WFL_RATINGLTOH"         , "Ocena (Najmniejsza do najwi�ksza)" );
define( "_MD_WFL_RATINGHTOL"         , "Ocena (Najwi�ksza do najmniejsza)" );
define( "_MD_WFL_DESCRIPTIONC"       , "Opis: " );
define( "_MD_WFL_CATEGORYC"          , "Kategoria: " );
define( "_MD_WFL_VERSION"            , "Wersia" );
define( "_MD_WFL_SUBMITDATE"   , "Dodano" );
define( "_MD_WFL_LINKHITS"     , "<b>Otwierano</b>: %s razy" );
define( "_MD_WFL_URLRATING"    , "<b>Ograniczenia</b>: %s" );
define( "_MD_WFL_PUBLISHERC"   , "Dodaj�cy: " );
define( "_MD_WFL_RATINGC"      , "Ocena: " );
define( "_MD_WFL_ONEVOTE"      , "1 G�os" );
define( "_MD_WFL_NUMVOTES"     , "%s G�os�w" );
define( "_MD_WFL_RATETHISFILE" , "Oce� �r�d�o" );
define( "_MD_WFL_MODIFY"       , "Modyfikuj" );
define( "_MD_WFL_REPORTBROKEN" , "Zg�o� uszkodzony" );
define( "_MD_WFL_BROKENREPORT" , "Zg�o� uszkodzone �r�d�o" );
define( "_MD_WFL_SUBMITBROKEN" , "Dodaj" );
define( "_MD_WFL_BEFORESUBMIT" , "Przed zg�oszeniem uszkodzonego �r�d�a, sprawd� czy aktualne �r�d�o linku kt�ry zg�aszasz jako uszkodzonu, nie znajduje si� na serwerze docelowym." );
define( "_MD_WFL_TELLAFRIEND"  , "Pole� komu�" );
define( "_MD_WFL_EDIT"         , "Edytuj" );
define( "_MD_WFL_THEREARE"     , "S� <b>%s</b> <i>Kategorie</i> i <b>%s</b> <i>Link�w</i> w bazie" );
define( "_MD_WFL_THEREIS"      , "Jest <b>%s</b> <i>Kategorii</i> i <b>%s</b> <i>Link�w</i> w bazie" );
define( "_MD_WFL_LATESTLIST"   , "Ostatnie raporty" );
define( "_MD_WFL_FILETITLE"    , "Tytu� linku: " );
define( "_MD_WFL_DLURL"        , "URL linku: " );
define( "_MD_WFL_LINK_DIRCA"   , "Ograniczenia: " );
define( "_MD_WFL_HOMEPAGEC"    , "Strona domowa: " );
define( "_MD_WFL_NOTSPECIFIED" , "Nie sprecyzowane" );
define( "_MD_WFL_PUBLISHER"    , "Wydawca" );
define( "_MD_WFL_UPDATEDON"    , "Uaktualnione:" );
define( "_MD_WFL_PRICEFREE"    , "Darmowe" );
define( "_MD_WFL_VIEWDETAILS"  , "Poka� szczeg�y" );
define( "_MD_WFL_OPTIONS"      , 'Opcje: ' );
define( "_MD_WFL_NOTIFYAPPROVE", 'Poinformuj mnie kiedy link zostanie zaakceptowany' );
define( "_MD_WFL_VOTEAPPRE"    , "Tw�j g�os zosta� wzi�ty pod uwag�." );
define( "_MD_WFL_THANKYOU"     , "Dzi�kuj� za g�osowanie w ankiecie %s" ); // %s is your site name
define( "_MD_WFL_VOTEONCE"     , "Nie wolno g�osowa� na t� sam� rzecz ponad 1 raz." );
define( "_MD_WFL_RATINGSCALE"  , "Skala jest od 1 do 10, 1 to najs�absza a 10 najlepsza." );
define( "_MD_WFL_BEOBJECTIVE"  , "Prosz� by� obiektywnym podczas g�osowania, je�eli ka�dy zag�osuje na 1 lub 10, oceny nie b�d� zbyt miarodajne." );
define( "_MD_WFL_DONOTVOTE"    , "Nie wolno g�osowa� plik kt�ry si� samemu doda�o." );
define( "_MD_WFL_RATEIT"       , "Oce�!" );
define( "_MD_WFL_INTFILEFOUND" , "Znalaz�em ciekawy link na %s" ); // %s is your site name
define( "_MD_WFL_RANK"         , "Lista" );
define( "_MD_WFL_CATEGORY"     , "Kategoria" );
define( "_MD_WFL_HITS"         , "Klikni��" );
define( "_MD_WFL_RATING"       , "G�os�w" );
define( "_MD_WFL_VOTE"         , "G�osuj" );
define( "_MD_WFL_SORTBY"       , "Sortuj wg:" );
define( "_MD_WFL_TITLE"        , "Tytu�u" );
define( "_MD_WFL_DATE"         , "Daty" );
define( "_MD_WFL_POPULARITY"   , "Popularno�ci" );
define( "_MD_WFL_TOPRATED"     , "Oceny" );
define( "_MD_WFL_CURSORTBY"    , "Linki zosta�y posortowane wg: %s" );
define( "_MD_WFL_CANCEL"       , "Anuluj" );
define( "_MD_WFL_ALREADYREPORTED", "Ju� z�o�y�e� raport o tym linku." );
define( "_MD_WFL_MUSTREGFIRST" , "Przepraszam ale nie masz wystarczaj�cych uprawnie� aby tego dokona�.<br />Prosz� sie zarejestrowa� lub zalogowa�!" );
define( "_MD_WFL_NORATING"     , "Nie wybrano oceny." );
define( "_MD_WFL_VOTEFORTITLE" , "Oce� ten link: " );
define( "_MD_WFL_CANTVOTEOWN"  , "Nie wolno g�osowa� plik kt�ry si� samemu doda�o.<br />Wszystkie g�osy s� wpisane i przejrzane." );
define( "_MD_WFL_SUBMITLINK"   , "Dodaj link" );
define( "_MD_WFL_SUB_SNEWMNAMEDESC", "<ul><li>Wszystkie dodawane linki s� poddawane weryfikacji kt�ra mo�e potrwa� 24h zanim link uka�e si� w naszej bazie.</li><li>Mo�emy odrzuci� dany link lub zmieni� jego zawarto��.</li></ul>" );
define( "_MD_WFL_MAINLISTING"  , "Raporty g��wnej kategorii" );
define( "_MD_WFL_LASTWEEK"     , "Ostatni tydzie�" );
define( "_MD_WFL_LAST30DAYS"   , "Ostatnie 30 dni" );
define( "_MD_WFL_1WEEK"        , "1 Tydzie�" );
define( "_MD_WFL_2WEEKS"       , "2 Tygodnie" );
define( "_MD_WFL_30DAYS"       , "30 Dni" );
define( "_MD_WFL_SHOW"         , "Poka�" );
define( "_MD_WFL_DAYS"         , "dni" );
define( "_MD_WFL_NEWlinks"     , "Nowe linki" );
define( "_MD_WFL_TOTALNEWLINKS", "Razem nowych link�w" );
define( "_MD_WFL_DTOTALFORLAST", "Razem nowych link�w dla ostatnich" );
define( "_MD_WFL_AGREE"        , "Zgadzam si�" );
define( "_MD_WFL_DOYOUAGREE"   , "Czy zgadzasz si� z tymi warunkami?" );
define( "_MD_WFL_DISCLAIMERAGREEMENT", "Warunki" );
define( "_MD_WFL_DUPLOADSCRSHOT", "Upload Screenshota:" );
define( "_MD_WFL_RESOURCEID"   , "Resource id#: " );
define( "_MD_WFL_REPORTER"     , "Originalny sprawozdawca: " );
define( "_MD_WFL_DATEREPORTED"       , "Data sprawozdania: " );
define( "_MD_WFL_RESOURCEREPORTED"   , "Zg�oszone jako uszkodzone" );
define( "_MD_WFL_RESOURCEREPORTED2"  , "Ten link zosta� ju� zaraportowany i prawcujemy nad nim" );
define( "_MD_WFL_BROWSETOTOPIC"      , "<b>Przegl�daj linki w porz�dku alfabetycznym</b>" );
define( "_MD_WFL_WEBMASTERACKNOW"    , "Uznanych raport�w: " );
define( "_MD_WFL_WEBMASTERCONFIRM"   , "Potwierdzonych raport�w: " );
define( "_MD_WFL_ERRORSENDEMAIL"     , "Raport potwerdzono lecz wyst�pi� b��d podczas wysy�ania informacji do administratora." );

define( "_MD_WFL_DELETE"               , "Usu�" );
define( "_MD_WFL_DISPLAYING"           , "Pokazane wg: " );
define( "_MD_WFL_LEGENDTEXTNEW"        , "Nowe dzisiaj" );
define( "_MD_WFL_LEGENDTEXTNEWTHREE"   , "Nowe w 3 dniach" );
define( "_MD_WFL_LEGENDTEXTTHISWEEK"   , "Nowe w tym tygodniu" );
define( "_MD_WFL_LEGENDTEXTNEWLAST"    , "Maj�ce ponad tydzie�" );
define( "_MD_WFL_THISFILEDOESNOTEXIST" , "Nie ma takiego linku w bazie!" );
define( "_MD_WFL_BROKENREPORTED"       , "Wys�ano raport" );

define( "_MD_WFL_REV_SNEWMNAMEDESC", " 
Prosz� o wype�nienie formularza poni�ej, dodamy to jak najszybciej.<br /><br />
Dziekuj� za wype�nienie i po�wi�cenie chwilki czasu. Chcemy da� naszym u�ytkownik� tylko sprawdzone rzeczy.<br /><br />Wszystkie wypowiedzi zostan� sprawdzone przed ich opublikowaniem. 
" );
define( "_MD_WFL_ISNOTAPPROVED"   , "Twoja propozycja musi by� najpierw zaakceptowana przez administratora." );
define( "_MD_WFL_HOMEPAGETITLEC"  , "Nazwa strony domowej: " );
define( "_MD_WFL_SCREENSHOT"      , "Screenshot:" );
define( "_MD_WFL_SCREENSHOTCLICK" , "Poka� w pe�nym rozmiarze" );
define( "_MD_WFL_OTHERBYUID"      , "Inne linki: " );
define( "_MD_WFL_LINKTIMES"       , "Klikni��: " );
define( "_MD_WFL_MAINTOTAL"       , "Razem link�w: " );
define( "_MD_WFL_LINKNOW"         , "Odwied� stron�" );
define( "_MD_WFL_PAGES"           , "<b>Strony</b>" );
define( "_MD_WFL_RATEDRESOURCE"   , "Ocena �r�d�a" );
define( "_MD_WFL_SUBMITTER"       , "Dodaj�cy" );
define( "_MD_WFL_ERROR"           , "B��d podczas uaktualniania bazy: Informacja nie zosta�a zapisana" );
define( "_MD_WFL_COPYRIGHT"       , "copyright" );
define( "_MD_WFL_INFORUM"         , "Podyskutuj na forum" );
// added frankblack
define( "_MD_WFL_NOTALLOWESTOSUBMIT"  , "Nie mo�esz dodawa� nowych link�w" );
define( "_MD_WFL_INFONOSAVEDB"        , "Informacja nie zapisan w bazie: <br /><br />" );

define( "_MD_WFL_NEWLAST"  , "Nowo dodane przez ostatnim tygodniem" );
define( "_MD_WFL_NEWTHIS"  , "Nowo dodane opr�cz tego tygodnia" );
define( "_MD_WFL_THREE"    , "Nowo dodane przez ostatnie trzy dni" );
define( "_MD_WFL_TODAY"    , "Nowo dodane dzisiaj" );
define( "_MD_WFL_NO_FILES" , "Nie ma jeszcz �adnych link�w" );

define( "_MD_WFL_NOPERMISSIONTOPOST"  , "Nie mo�esz dodawa� nic w tej kategorii." );
define( "_MD_WFL_RESOURCES"           , "�r�d�a" );

define( "_MD_WFL_IRCA1", "Dz - Dzieci" );
define( "_MD_WFL_IRCA2", "K - Ka�dy" );
define( "_MD_WFL_IRCA3", "N - Nastolatki" );
define( "_MD_WFL_IRCA4", "Do - Doro�li" );
define( "_MD_WFL_IRCA5", "TD - Tylko doro�li" );
define( "_MD_WFL_IRCA6", "HN - Homo-Niewiadomo" );
define( "_MD_WFL_PUBLISHDATE"       , "Opublikowano" );
define( "_MD_WFL_APPROVE"           , "Akceptuj" );
define( "_MD_WFL_MODERATOR_OPTIONS" , "Opcje moderatora" ); 


?>
