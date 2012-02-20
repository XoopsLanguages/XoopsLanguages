<?php
// $Id: main.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_MA_NW_PRINTER"                    , "Wersja do wydruku");
define("_MA_NW_SENDSTORY"                  , "Powiadom znajomego o tej wiadomości");
define("_MA_NW_READMORE"                   , "Czytaj więcej...");
define("_MA_NW_COMMENTS"                   , "Komentarze");
define("_MA_NW_ONECOMMENT"                 , "1 komentarz");
define("_MA_NW_BYTESMORE"                  , "%s bajtów więcej");
define("_MA_NW_NUMCOMMENTS"                , "%s komentarzy");
define("_MA_NW_MORERELEASES"               , "Więcej wydań w... More releases in ");


//%%%%%%		File Name submit.php		%%%%%
define("_MA_NW_SUBMITNEWS"                 , "Wyślij newsa");
define("_MA_NW_TITLE"                      , "Tytuł");
define("_MA_NW_TOPIC"                      , "Temat");
define("_MA_NW_THESCOOP"                   , "Wstęp - zachęta");
define("_MA_NW_NOTIFYPUBLISH"              , "Powiadom mnie e-mailem gdy artykuł zostanie opublikowany.");
define("_MA_NW_POST"                       , "Wyślij");
define("_MA_NW_GO"                         , "OK!");
define("_MA_NW_THANKS"                     , "Dziękujemy za wiadomość."); //submission of news article

define("_MA_NW_NOTIFYSBJCT"                , "Nowa wiadomość na stronie!"); // Notification mail subject
define("_MA_NW_NOTIFYMSG"                  , "Hej adminie! Masz do opublikowania newsa na stronie."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_MA_NW_NEWSARCHIVES"               , "Archiwum newsów");
define("_MA_NW_ARTICLES"                   , "Artykuły");
define("_MA_NW_VIEWS"                      , "Odsłon");
define("_MA_NW_DATE"                       , "Data");
define("_MA_NW_ACTIONS"                    , "Akcje");
define("_MA_NW_PRINTERFRIENDLY"            , "Wersja do wydrukowania");

define("_MA_NW_THEREAREINTOTAL"            , "W sumie jest już %s artykułów");

// %s is your site name
define("_MA_NW_INTARTICLE"                 , "Interesujący artykuł na stronie %s");
define("_MA_NW_INTARTFOUND"                , "Znalazłem bardzo interesujący artykuł na stronie %s");

define("_MA_NW_TOPICC"                     , "Temat:");
define("_MA_NW_URL"                        , "Link:");
define("_MA_NW_NOSTORY"                    , "Niestety, wybrany artykuł nie istnieje.");

//%%%%%%	File Name print.php 	%%%%%

define("_MA_NW_URLFORSTORY"                , "Link do tej wiadomości to:");

// %s represents your site name
define("_MA_NW_THISCOMESFROM"              , "Ten artykuł pochodzi z %s");

// Added by Hervé
define("_MA_NW_ATTACHEDFILES"              , "Załączone pliki:");
define("_MA_NW_ATTACHEDLIB"                , "Ten artykuł posiada dodatkowe pliki");
define("_MA_NW_NEWSSAMEAUTHORLINK"         , "Więcej wiadomości tego samego autora");
define("_MA_NW_NO_TOPICS"             , "Nie można dodać wiadomości jeśli nie został utworzony przynajmniej jeden temat");
define("_MA_NW_PREVIOUS_ARTICLE"           , "Wcześniejszy artykuł");
define("_MA_NW_NEXT_ARTICLE"               , "Następny artykuł");
define("_MA_NW_OTHER_ARTICLES"             , "Inne artykuły");

// Added by Hervé in version 1.3 for rating
define("_MA_NW_RATETHISNEWS"               , "Oceń tę wiadomość");
define("_MA_NW_RATEIT"                     , "Oceń to!");
define("_MA_NW_TOTALRATE"                  , "Ocen w sumie");
define("_MA_NW_RATINGLTOH"                 , "Oceny (od najniższej do najwyższej)");
define("_MA_NW_RATINGHTOL"                 , "Oceny (od najwyższej do najniższej)");
define("_MA_NW_RATINGC"                    , "Ocena: ");
define("_MA_NW_RATINGSCALE"                , "Skala ocen jest od 1 do 10, gdzie 1 to ocena najniższa 10 to najwyższa.");
define("_MA_NW_BEOBJECTIVE"                , "Proszę być obiektywnym, jeśli każdy będzie otrzymywał albo 1 albo 10 to ranking nie będzie zbyt użyteczny.");
define("_MA_NW_DONOTVOTE"                  , "Prosze nie głosować na swoje własne wiadomości.");
define("_MA_NW_RATING"                     , "Ocena");
define("_MA_NW_VOTE"                       , "Głos");
define("_MA_NW_NORATING"                   , "Nie wybrano ocen");
define("_MA_NW_USERAVG"                    , "Średnia ocena");
define("_MA_NW_DLRATINGS"                  , "Ocena wiadomości (ilość głosów: %s)");
define("_MA_NW_ONEVOTE"                    , "1 głos");
define("_MA_NW_NUMVOTES"                   , "%u głosów");		// Warning
define("_MA_NW_CANTVOTEOWN"                , "Nie możesz głosować na swoje własne materiały <br />Wszystkie głosy są logowane i weryfikowane.");
define("_MA_NW_VOTEDELETED"                , "Skasowano dane głosowań.");
define("_MA_NW_VOTEONCE"                   , "Proszę nie głosować na ten sam materiał więcej niż jeden raz.");
define("_MA_NW_VOTEAPPRE"                  , "Twój głos jest dla nas ważny.");
define("_MA_NW_THANKYOU"                   , "Dziękuj za głosowanie na naszej stronie %s"); // %s is your site name
define("_MA_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR"                     , "Autor ");
define("_MA_NW_META_DESCRIPTION"           , "Meta description");
define("_MA_NW_META_KEYWORDS"              , "Meta keywords");
define("_MA_NW_MAKEPDF"                    , "Utwórz dokument .pdf z tego artykułu");
define('_MA_NW_POSTEDON'                   , "Napisany: ");
define("_MA_NW_AUTHOR_ID"                  , "Id autora ");
define("_MA_NW_POST_SORRY"                 , "Niestety albo nie ma jeszcze zdefiniowanych tematów, albo nie masz prawa do publikacji wiadomości w jakimkolwiek temacie. Jeśli jesteś webmasterm, to wejdź do ustawień i zmień prawa do dodawania");

// Added in v 1.50
define("_MA_NW_LINKS","Linki");
define("_MA_NW_PAGE","Strony");
define("_MA_NW_BOOKMARK_ME","Dodaj do zakładek");
define('_AM_NW_TOTAL',"%u newsów");
define('_AM_NW_WHOS_WHO',"Kto jest kim");
define('_MA_NW_LIST_OF_AUTHORS',"Tutaj jest lista autorów newsów tej witryny, kliknij na zazwie autora aby zobaczyć jego newsy");
define('_AM_NW_TOPICS_DIRECTORY',"Katalog tematów");
define("_MA_NW_PAGE_AUTO_SUMMARY","Strona %d : %s");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","Bookmark to Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","Bookmark to del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","Bookmark to Digg");
define("_MA_NW_BOOKMARK_TO_FARK","Bookmark to Fark");
define("_MA_NW_BOOKMARK_TO_FURL","Bookmark to Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","Bookmark to Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","Bookmark to Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","Bookmark to Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","Bookmark to Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","Bookmark to Yahoo");

// Added in version 1.56
define('_MA_NW_NOTYETSTORY',"Ten news zostanie opublikowany później. Odwiedź nas za jakiś czas.");
define("_MA_NW_SELECT_IMAGE", "Wybierz obrazek do dołączenia do newsa");
define("_MA_NW_CURENT_PICTURE", "Bieżący obrazek");

// Added in version 1.68 BETA
define("_MA_NW_SP", ":");
define("_MA_NW_POSTED", "Wysłany");

// Added in version 1.68 RC1
define("_MA_NW_NO_COMMENT", "Brak komentarzy");
define("_MA_NW_METASIZE", "Przepraszamy, ale nie możesz dodać więcej niż '+len+' znaków w polu któe właśnie wypełniłeś.");

// Added in version 1.68 RC3
define("_MA_NW_SEO_TOPICS", "tematy");
define("_MA_NW_SEO_ARTICLES", "newsy");
define("_MA_NW_SEO_PRINT", "drukuj");
define("_MA_NW_SEO_PDF", "pdf");

?>