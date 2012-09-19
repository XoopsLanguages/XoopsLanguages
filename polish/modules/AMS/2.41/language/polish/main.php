<?php
// $Id: main.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_AMS_NW_PRINTER","Drukuj Stronę");
define("_AMS_NW_SENDSTORY","Wyślij ten artykuł znajomemu");
define("_AMS_NW_READMORE","Czytaj więcej...");
define("_AMS_NW_COMMENTS","Skomentujesz?");
define("_AMS_NW_ONECOMMENT","1 komentarz");
define("_AMS_NW_BYTESMORE","%s bajtów więcej");
define("_AMS_NW_NUMCOMMENTS","%s kamentarz(y)");
define("_AMS_NW_MORERELEASES", "Więcej wydań w ");


//%%%%%%		File Name submit.php		%%%%%
define("_AMS_NW_SUBMITNEWS","Dodaj artykuł");
define("_AMS_NW_TITLE","Tytuł");
define("_AMS_NW_TOPIC","Temat");
define("_AMS_NW_THESCOOP","Tekst Artykułu");
define("_AMS_NW_NOTIFYPUBLISH","Poinformuj mnie gdy zostanie opublikowany");
define("_AMS_NW_POST","Napisz");
define("_AMS_NW_GO","Idź!");
define("_AMS_NW_THANKS","Dziękujemy za napisanie artykułu."); //submission of news article

define("_AMS_NW_NOTIFYSBJCT","Artykuł na moją stronę"); // Notification mail subject
define("_AMS_NW_NOTIFYMSG","Masz nową wiadomość którą możesz przedstawić na swojej stronie."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_AMS_NW_NEWSARCHIVES","Archiwum artykułów");
define("_AMS_NW_ARTICLES","Artykuły");
define("_AMS_NW_VIEWS","Odsłon");
define("_AMS_NW_DATE","Data");
define("_AMS_NW_ACTIONS","Czynność");
define("_AMS_NW_PRINTERFRIENDLY","Drukuj stronę");

define("_AMS_NW_THEREAREINTOTAL","Wszystkich artykułów w Bazie : %s ");

// %s is your site name
define("_AMS_NW_INTARTICLE","Ciekawy artykuł na %s");
define("_AMS_NW_INTARTFOUND","Znalazłem ciekawy artykuł na %s");

define("_AMS_NW_TOPICC","Temat:");
define("_AMS_NW_URL","URL:");
define("_AMS_NW_NOSTORY","Przepraszamy, wybrany artykuł nie istnieje.");

//%%%%%%	File Name print.php 	%%%%%

define("_AMS_NW_URLFORSTORY","URL artykułu to:");

// %s represents your site name
define("_AMS_NW_THISCOMESFROM","Ten artykuł pochodzi z %s");

// Added by Hervé
define("_AMS_NW_ATTACHEDFILES","Dołączone pliki:");

define("_AMS_NW_MAJOR", "Najistotniejsze zmiany?");
define("_AMS_NW_STORYID", "ID Artykułu");
define("_AMS_NW_VERSION", "Wersja");
define("_AMS_NW_SETVERSION", "Wybierz aktualną wersję");
define("_AMS_NW_VERSIONUPDATED", "Aktualna wersja ustawiona na %s");
define("_AMS_NW_OVERRIDE", "Przekroczenie");
define("_AMS_NW_FINDVERSION", "Znajdź wersję");
define("_AMS_NW_REVISION", "Korekta");
define("_AMS_NW_MINOR", "Mniejsza korekta");
define("_AMS_NW_VERSIONDESC", "Wybierz poziom zmiany - Jeśli tego nie określisz, tekst nie zostanie zaktualizowany!");
define("_AMS_NW_NOVERSIONCHANGE", "Nie nastąpiła zmiana wersji");

define("_AMS_NW_RATEARTICLE", "Oceń ten artykuł");
define("_AMS_NW_RATE", "Oceń artykuł");
define("_AMS_NW_SUBMITRATING", "Potwierdź ocenę");
define("_AMS_NW_RATING_SUCCESSFUL", "Oceniono artykuł");
define("_AMS_NW_PUBLISHED_DATE", "Data publikacji: ");
define("_AMS_NW_POSTEDBY", "Autor");
define("_AMS_NW_READS", "Przeczytano");
define("_AMS_NW_AUDIENCE", "Czytelnicy");
define('_AMS_NW_SWITCHAUTHOR', "Zaktualizować autora?");

//Warnings
define("_AMS_NW_VERSIONSEXIST", "Istnieją %s wersje z wyższą wersją i <strong>zostaną</strong> nadpisane BEZ możliwości odtworzenia:");
define("_AMS_NW_AREYOUSUREOVERRIDE", "Czy napewno chcesz zamienić te wersje");
define("_AMS_NW_CONFLICTWHAT2DO", "An article with the calculated version number exists<br />What do You want to do?<br />Override: This version is saved with the calculated version number and all higher versions in the same version group (xx.xx.xx) will be deleted<br />Find Version: Let the system find the next available version in the same version group");
define("_AMS_NW_VERSIONCONFLICT", "Konflikt wersji");
define("_AMS_NW_TRYINGTOSAVE", "Próba zapisu ");

//Error messages
define("_AMS_NW_ERROR", "Wystąpił błąd!");
define("_AMS_NW_RATING_FAILED", "Ocenianie nie powiodło się");
define("_AMS_NW_SAVEFAILED", "Błąd podczas zapisywania artykułu");
define("_AMS_NW_TEXTSAVEFAILED", "Nie można zapisać tekstu artykułu");
define("_AMS_NW_VERSIONUPDATEFAILED", "Nie można zaktualizować wersji");
define("_AMS_NW_COULDNOTRESET", "Nie można wyczyścić wersji");
define("_AMS_NW_COULDNOTUPDATEVERSION", "Nie można zmienić do obecnej wersji");

define("_AMS_NW_COULDNOTSAVERATING", "Nie można zapisać oceny");
define("_AMS_NW_COULDNOTUPDATERATING", "Nie można zaktualizować oceny artykułu");

define("_AMS_NW_COULDNOTADDLINK", "Nie można powiązać linku z tym artykułem");
define("_AMS_NW_COULDNOTDELLINK", "Błąd - Nie usunięto linka");

define("_AMS_NW_CANNOTVOTESELF", "Autor nie może oceniać artykułu");
define("_AMS_NW_ANONYMOUSVOTEDISABLED", "Ocenianie przez niezarejestrowanych użytkowników wyłączone");
define("_AMS_NW_ANONYMOUSHASVOTED", "Ktoś z tego IP już ocenił ten artykuł");
define("_AMS_NW_USERHASVOTED", "Już oceniłeś ten artykuł");

define("_AMS_NW_NOTALLOWEDAUDIENCE", "Nie możesz czytać artykułów %s poziomu");
define("_AMS_NW_NOERRORSENCOUNTERED", "Nie wyliczono żadnych błędów");

//Additional constants
define("_AMS_NW_USERNAME", "Użytkownik");
define("_AMS_NW_ADDLINK", "Dodaj Link(i)");
define("_AMS_NW_DELLINK", "Usuń Link(i)");
define("_AMS_NW_RELATEDARTICLES", "Zalecone odczytywanie");
define("_AMS_NW_SEARCHRESULTS", "Wyniki Szukania:");
define("_AMS_NW_MANAGELINK", "Linki");
define("_AMS_NW_DELVERSIONS", "Usuń wersje poniżej tej wersji");
define("_AMS_NW_DELALLVERSIONS", "Usuń wszystkie wersje na równi z tą wersją");
define("_AMS_NW_SUBMIT", "Zatwierdź");
define("_AMS_NW_RUSUREDELVERSIONS", "Czy na pewno chcesz usunąć wszystkie wersje będące Poza Zasięgiem Odtworzenia!!! poniżej tej wersji?");
define("_AMS_NW_RUSUREDELALLVERSIONS", "Czy na pewno chcesz usunąć wszystkie wersje będące Poza Zasięgiem Odtworzenia!!! na równi z tą wersją?");
define("_AMS_NW_EXTERNALLINK", "Linki zewnętrzne");
define("_AMS_NW_ADDEXTERNALLINK", "Dodaj zewnętrzny link");
define("_AMS_NW_PREREQUISITEARTICLES", "Warunek wstępny czytania");
define("_AMS_NW_LINKTYPE", "Typ Linku");
define("_AMS_NW_SETTITLE", "Ustaw tytuł Linku");
define("_AMS_NW_BANNER", "Banner/Sponsor");

define("_AMS_NW_NOTOPICS", "Nie ma tematu - proszę utworzyć temat i nadać dla niego odpowiednie prawa dostępu");

define("_AMS_NW_TOTALARTICLES", "Wszystkich artykułów");

define("_AMS_MA_INDEX", "Spis");
define("_AMS_MA_SUBTOPICS", "Podtemat dla ");
define("_AMS_MA_PAGEBREAK", "NASTĘPNA STRONA");
?>