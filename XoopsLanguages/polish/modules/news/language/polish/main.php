<?php
// $Id: main.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER"                    , "Wersja do wydruku");
define("_NW_SENDSTORY"                  , "Powiadom znajomego o tej wiadomo�ci");
define("_NW_READMORE"                   , "Czytaj wi�cej...");
define("_NW_COMMENTS"                   , "Komentarze");
define("_NW_ONECOMMENT"                 , "1 komentarz");
define("_NW_BYTESMORE"                  , "%s bajt�w wi�cej");
define("_NW_NUMCOMMENTS"                , "%s komentarzy");
define("_NW_MORERELEASES"               , "Wi�cej wyda� w... More releases in ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS"                 , "Wy�lij newsa");
define("_NW_TITLE"                      , "Tytu�");
define("_NW_TOPIC"                      , "Temat");
define("_NW_THESCOOP"                   , "Wst�p - zach�ta");
define("_NW_NOTIFYPUBLISH"              , "Powiadom mnie e-mailem gdy artyku� zostanie opublikowany.");
define("_NW_POST"                       , "Wy�lij");
define("_NW_GO"                         , "OK!");
define("_NW_THANKS"                     , "Dzi�kujemy za wiadomo��."); //submission of news article

define("_NW_NOTIFYSBJCT"                , "Nowa wiadomo�� na stronie!"); // Notification mail subject
define("_NW_NOTIFYMSG"                  , "Hej adminie! Masz do opublikowania newsa na stronie."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES"               , "Archiwum news�w");
define("_NW_ARTICLES"                   , "Artyku�y");
define("_NW_VIEWS"                      , "Ods�on");
define("_NW_DATE"                       , "Data");
define("_NW_ACTIONS"                    , "Akcje");
define("_NW_PRINTERFRIENDLY"            , "Wersja do wydrukowania");

define("_NW_THEREAREINTOTAL"            , "W sumie jest ju� %s artyku��w");

// %s is your site name
define("_NW_INTARTICLE"                 , "Interesuj�cy artyku� na stronie %s");
define("_NW_INTARTFOUND"                , "Znalaz�em bardzo interesuj�cy artyku� na stronie %s");

define("_NW_TOPICC"                     , "Temat:");
define("_NW_URL"                        , "Link:");
define("_NW_NOSTORY"                    , "Niestety, wybrany artyku� nie istnieje.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY"                , "Link do tej wiadomo�ci to:");

// %s represents your site name
define("_NW_THISCOMESFROM"              , "Ten artyku� pochodzi z %s");

// Added by Herv�
define("_NW_ATTACHEDFILES"              , "Za��czone pliki:");
define("_NW_ATTACHEDLIB"                , "Ten artyku� posiada dodatkowe pliki");
define("_NW_NEWSSAMEAUTHORLINK"         , "Wi�cej wiadomo�ci tego samego autora");
define("_NW_NEWS_NO_TOPICS"             , "Nie mo�na doda� wiadomo�ci je�li nie zosta� utworzony przynajmniej jeden temat");
define("_NW_PREVIOUS_ARTICLE"           , "Wcze�niejszy artyku�");
define("_NW_NEXT_ARTICLE"               , "Nast�pny artyku�");
define("_NW_OTHER_ARTICLES"             , "Inne artyku�y");

// Added by Herv� in version 1.3 for rating
define("_NW_RATETHISNEWS"               , "Oce� t� wiadomo��");
define("_NW_RATEIT"                     , "Oce� to!");
define("_NW_TOTALRATE"                  , "Ocen w sumie");
define("_NW_RATINGLTOH"                 , "Oceny (od najni�szej do najwy�szej)");
define("_NW_RATINGHTOL"                 , "Oceny (od najwy�szej do najni�szej)");
define("_NW_RATINGC"                    , "Ocena: ");
define("_NW_RATINGSCALE"                , "Skala ocen jest od 1 do 10, gdzie 1 to ocena najni�sza 10 to najwy�sza.");
define("_NW_BEOBJECTIVE"                , "Prosz� by� obiektywnym, je�li ka�dy b�dzie otrzymywa� albo 1 albo 10 to ranking nie b�dzie zbyt u�yteczny.");
define("_NW_DONOTVOTE"                  , "Prosze nie g�osowa� na swoje w�asne wiadomo�ci.");
define("_NW_RATING"                     , "Ocena");
define("_NW_VOTE"                       , "G�os");
define("_NW_NORATING"                   , "Nie wybrano ocen");
define("_NW_USERAVG"                    , "�rednia ocena");
define("_NW_DLRATINGS"                  , "Ocena wiadomo�ci (ilo�� g�os�w: %s)");
define("_NW_ONEVOTE"                    , "1 g�os");
define("_NW_NUMVOTES"                   , "%u g�os�w");		// Warning
define("_NW_CANTVOTEOWN"                , "Nie mo�esz g�osowa� na swoje w�asne materia�y <br />Wszystkie g�osy s� logowane i weryfikowane.");
define("_NW_VOTEDELETED"                , "Skasowano dane g�osowa�.");
define("_NW_VOTEONCE"                   , "Prosz� nie g�osowa� na ten sam materia� wi�cej ni� jeden raz.");
define("_NW_VOTEAPPRE"                  , "Tw�j g�os jest dla nas wa�ny.");
define("_NW_THANKYOU"                   , "Dzi�kuj za g�osowanie na naszej stronie %s"); // %s is your site name
define("_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR"                     , "Autor ");
define("_NW_META_DESCRIPTION"           , "Meta description");
define("_NW_META_KEYWORDS"              , "Meta keywords");
define("_NW_MAKEPDF"                    , "Utw�rz dokument .pdf z tego artyku�u");
define('_MD_POSTEDON'                   , "Napisany na: ");
define("_NW_AUTHOR_ID"                  , "Id autora ");
define("_NW_POST_SORRY"                 , "Niestety albo nie ma jeszcze zdefiniowanych temat�w, albo nie masz prawa do publikacji wiadomo�ci w jakimkolwiek temacie. Je�li jeste� webmasterm, to wejd� do ustawie� i zmie� prawa do dodawania");
// Added in v 1.50
define("_NW_LINKS","Linki");
define("_NW_PAGE","Strona");
define("_NW_BOOKMARK_ME","Dodaj ten artyku� do ulubionych");
define('_AM_NEWS_TOTAL',"Wszystkich artyku��w %u");
define('_AM_NEWS_WHOS_WHO',"Kto jest kim");
define('_NW_NEWS_LIST_OF_AUTHORS',"Lista autor�w pisz�cych na tej stronie, kliknij na autorze by zobaczy� jego artyku�y");
define('_AM_NEWS_TOPICS_DIRECTORY',"Katalog temat�w");
define("_NW_PAGE_AUTO_SUMMARY","Strona %d : %s");
?>
