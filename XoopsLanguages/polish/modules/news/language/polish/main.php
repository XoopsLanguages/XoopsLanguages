<?php
// $Id: main.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER"                    , "Wersja do wydruku");
define("_NW_SENDSTORY"                  , "Powiadom znajomego o tej wiadomości");
define("_NW_READMORE"                   , "Czytaj więcej...");
define("_NW_COMMENTS"                   , "Komentarze");
define("_NW_ONECOMMENT"                 , "1 komentarz");
define("_NW_BYTESMORE"                  , "%s bajtów więcej");
define("_NW_NUMCOMMENTS"                , "%s komentarzy");
define("_NW_MORERELEASES"               , "Więcej wydań w... More releases in ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS"                 , "Wyślij newsa");
define("_NW_TITLE"                      , "Tytuł");
define("_NW_TOPIC"                      , "Temat");
define("_NW_THESCOOP"                   , "Wstęp - zachęta");
define("_NW_NOTIFYPUBLISH"              , "Powiadom mnie e-mailem gdy artykuł zostanie opublikowany.");
define("_NW_POST"                       , "Wyślij");
define("_NW_GO"                         , "OK!");
define("_NW_THANKS"                     , "Dziękujemy za wiadomość."); //submission of news article

define("_NW_NOTIFYSBJCT"                , "Nowa wiadomość na stronie!"); // Notification mail subject
define("_NW_NOTIFYMSG"                  , "Hej adminie! Masz do opublikowania newsa na stronie."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES"               , "Archiwum newsów");
define("_NW_ARTICLES"                   , "Artykuły");
define("_NW_VIEWS"                      , "Odsłon");
define("_NW_DATE"                       , "Data");
define("_NW_ACTIONS"                    , "Akcje");
define("_NW_PRINTERFRIENDLY"            , "Wersja do wydrukowania");

define("_NW_THEREAREINTOTAL"            , "W sumie jest już %s artykułów");

// %s is your site name
define("_NW_INTARTICLE"                 , "Interesujący artykuł na stronie %s");
define("_NW_INTARTFOUND"                , "Znalazłem bardzo interesujący artykuł na stronie %s");

define("_NW_TOPICC"                     , "Temat:");
define("_NW_URL"                        , "Link:");
define("_NW_NOSTORY"                    , "Niestety, wybrany artykuł nie istnieje.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY"                , "Link do tej wiadomości to:");

// %s represents your site name
define("_NW_THISCOMESFROM"              , "Ten artykuł pochodzi z %s");

// Added by Hervé
define("_NW_ATTACHEDFILES"              , "Załączone pliki:");
define("_NW_ATTACHEDLIB"                , "Ten artykuł posiada dodatkowe pliki");
define("_NW_NEWSSAMEAUTHORLINK"         , "Więcej wiadomości tego samego autora");
define("_NW_NEWS_NO_TOPICS"             , "Nie można dodać wiadomości jeśli nie został utworzony przynajmniej jeden temat");
define("_NW_PREVIOUS_ARTICLE"           , "Wcześniejszy artykuł");
define("_NW_NEXT_ARTICLE"               , "Następny artykuł");
define("_NW_OTHER_ARTICLES"             , "Inne artykuły");

// Added by Hervé in version 1.3 for rating
define("_NW_RATETHISNEWS"               , "Oceń tę wiadomość");
define("_NW_RATEIT"                     , "Oceń to!");
define("_NW_TOTALRATE"                  , "Ocen w sumie");
define("_NW_RATINGLTOH"                 , "Oceny (od najniższej do najwyższej)");
define("_NW_RATINGHTOL"                 , "Oceny (od najwyższej do najniższej)");
define("_NW_RATINGC"                    , "Ocena: ");
define("_NW_RATINGSCALE"                , "Skala ocen jest od 1 do 10, gdzie 1 to ocena najniższa 10 to najwyższa.");
define("_NW_BEOBJECTIVE"                , "Proszę być obiektywnym, jeśli każdy będzie otrzymywał albo 1 albo 10 to ranking nie będzie zbyt użyteczny.");
define("_NW_DONOTVOTE"                  , "Prosze nie głosować na swoje własne wiadomości.");
define("_NW_RATING"                     , "Ocena");
define("_NW_VOTE"                       , "Głos");
define("_NW_NORATING"                   , "Nie wybrano ocen");
define("_NW_USERAVG"                    , "Średnia ocena");
define("_NW_DLRATINGS"                  , "Ocena wiadomości (ilość głosów: %s)");
define("_NW_ONEVOTE"                    , "1 głos");
define("_NW_NUMVOTES"                   , "%u głosów");		// Warning
define("_NW_CANTVOTEOWN"                , "Nie możesz głosować na swoje własne materiały <br />Wszystkie głosy są logowane i weryfikowane.");
define("_NW_VOTEDELETED"                , "Skasowano dane głosowań.");
define("_NW_VOTEONCE"                   , "Proszę nie głosować na ten sam materiał więcej niż jeden raz.");
define("_NW_VOTEAPPRE"                  , "Twój głos jest dla nas ważny.");
define("_NW_THANKYOU"                   , "Dziękuj za głosowanie na naszej stronie %s"); // %s is your site name
define("_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR"                     , "Autor ");
define("_NW_META_DESCRIPTION"           , "Meta description");
define("_NW_META_KEYWORDS"              , "Meta keywords");
define("_NW_MAKEPDF"                    , "Utwórz dokument .pdf z tego artykułu");
define('_MD_POSTEDON'                   , "Napisany na: ");
define("_NW_AUTHOR_ID"                  , "Id autora ");
define("_NW_POST_SORRY"                 , "Niestety albo nie ma jeszcze zdefiniowanych tematów, albo nie masz prawa do publikacji wiadomości w jakimkolwiek temacie. Jeśli jesteś webmasterm, to wejdź do ustawień i zmień prawa do dodawania");
// Added in v 1.50
define("_NW_LINKS","Linki");
define("_NW_PAGE","Strona");
define("_NW_BOOKMARK_ME","Dodaj ten artykuł do ulubionych");
define('_AM_NEWS_TOTAL',"Wszystkich artykułów %u");
define('_AM_NEWS_WHOS_WHO',"Kto jest kim");
define('_NW_NEWS_LIST_OF_AUTHORS',"Lista autorów piszących na tej stronie, kliknij na autorze by zobaczyć jego artykuły");
define('_AM_NEWS_TOPICS_DIRECTORY',"Katalog tematów");
define("_NW_PAGE_AUTO_SUMMARY","Strona %d : %s");
?>
