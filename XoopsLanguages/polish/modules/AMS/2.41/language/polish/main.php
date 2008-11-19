<?php
// $Id: main.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_AMS_NW_PRINTER","Drukuj Stron�");
define("_AMS_NW_SENDSTORY","Wy�lij ten artyku� znajomemu");
define("_AMS_NW_READMORE","Czytaj wi�cej...");
define("_AMS_NW_COMMENTS","Skomentujesz?");
define("_AMS_NW_ONECOMMENT","1 komentarz");
define("_AMS_NW_BYTESMORE","%s bajt�w wi�cej");
define("_AMS_NW_NUMCOMMENTS","%s kamentarz(y)");
define("_AMS_NW_MORERELEASES", "Wi�cej wyda� w ");


//%%%%%%		File Name submit.php		%%%%%
define("_AMS_NW_SUBMITNEWS","Dodaj artyku�");
define("_AMS_NW_TITLE","Tytu�");
define("_AMS_NW_TOPIC","Temat");
define("_AMS_NW_THESCOOP","Tekst Artyku�u");
define("_AMS_NW_NOTIFYPUBLISH","Poinformuj mnie gdy zostanie opublikowany");
define("_AMS_NW_POST","Napisz");
define("_AMS_NW_GO","Id�!");
define("_AMS_NW_THANKS","Dzi�kujemy za napisanie artyku�u."); //submission of news article

define("_AMS_NW_NOTIFYSBJCT","Artyku� na moj� stron�"); // Notification mail subject
define("_AMS_NW_NOTIFYMSG","Masz now� wiadomo�� kt�r� mo�esz przedstawi� na swojej stronie."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_AMS_NW_NEWSARCHIVES","Archiwum artyku��w");
define("_AMS_NW_ARTICLES","Artyku�y");
define("_AMS_NW_VIEWS","Ods�on");
define("_AMS_NW_DATE","Data");
define("_AMS_NW_ACTIONS","Czynno��");
define("_AMS_NW_PRINTERFRIENDLY","Drukuj stron�");

define("_AMS_NW_THEREAREINTOTAL","Wszystkich artyku��w w Bazie : %s ");

// %s is your site name
define("_AMS_NW_INTARTICLE","Ciekawy artyku� na %s");
define("_AMS_NW_INTARTFOUND","Znalaz�em ciekawy artyku� na %s");

define("_AMS_NW_TOPICC","Temat:");
define("_AMS_NW_URL","URL:");
define("_AMS_NW_NOSTORY","Przepraszamy, wybrany artyku� nie istnieje.");

//%%%%%%	File Name print.php 	%%%%%

define("_AMS_NW_URLFORSTORY","URL artyku�u to:");

// %s represents your site name
define("_AMS_NW_THISCOMESFROM","Ten artyku� pochodzi z %s");

// Added by Herv�
define("_AMS_NW_ATTACHEDFILES","Do��czone pliki:");

define("_AMS_NW_MAJOR", "Najistotniejsze zmiany?");
define("_AMS_NW_STORYID", "ID Artyku�u");
define("_AMS_NW_VERSION", "Wersja");
define("_AMS_NW_SETVERSION", "Wybierz aktualn� wersj�");
define("_AMS_NW_VERSIONUPDATED", "Aktualna wersja ustawiona na %s");
define("_AMS_NW_OVERRIDE", "Przekroczenie");
define("_AMS_NW_FINDVERSION", "Znajd� wersj�");
define("_AMS_NW_REVISION", "Korekta");
define("_AMS_NW_MINOR", "Mniejsza korekta");
define("_AMS_NW_VERSIONDESC", "Wybierz poziom zmiany - Je�li tego nie okre�lisz, tekst nie zostanie zaktualizowany!");
define("_AMS_NW_NOVERSIONCHANGE", "Nie nast�pi�a zmiana wersji");

define("_AMS_NW_RATEARTICLE", "Oce� ten artyku�");
define("_AMS_NW_RATE", "Oce� artyku�");
define("_AMS_NW_SUBMITRATING", "Potwierd� ocen�");
define("_AMS_NW_RATING_SUCCESSFUL", "Oceniono artyku�");
define("_AMS_NW_PUBLISHED_DATE", "Data publikacji: ");
define("_AMS_NW_POSTEDBY", "Autor");
define("_AMS_NW_READS", "Przeczytano");
define("_AMS_NW_AUDIENCE", "Czytelnicy");
define('_AMS_NW_SWITCHAUTHOR', "Zaktualizowa� autora?");

//Warnings
define("_AMS_NW_VERSIONSEXIST", "Istniej� %s wersje z wy�sz� wersj� i <strong>zostan�</strong> nadpisane BEZ mo�liwo�ci odtworzenia:");
define("_AMS_NW_AREYOUSUREOVERRIDE", "Czy napewno chcesz zamieni� te wersje");
define("_AMS_NW_CONFLICTWHAT2DO", "An article with the calculated version number exists<br />What do You want to do?<br />Override: This version is saved with the calculated version number and all higher versions in the same version group (xx.xx.xx) will be deleted<br />Find Version: Let the system find the next available version in the same version group");
define("_AMS_NW_VERSIONCONFLICT", "Konflikt wersji");
define("_AMS_NW_TRYINGTOSAVE", "Pr�ba zapisu ");

//Error messages
define("_AMS_NW_ERROR", "Wyst�pi� b��d!");
define("_AMS_NW_RATING_FAILED", "Ocenianie nie powiod�o si�");
define("_AMS_NW_SAVEFAILED", "B��d podczas zapisywania artyku�u");
define("_AMS_NW_TEXTSAVEFAILED", "Nie mo�na zapisa� tekstu artyku�u");
define("_AMS_NW_VERSIONUPDATEFAILED", "Nie mo�na zaktualizowa� wersji");
define("_AMS_NW_COULDNOTRESET", "Nie mo�na wyczy�ci� wersji");
define("_AMS_NW_COULDNOTUPDATEVERSION", "Nie mo�na zmieni� do obecnej wersji");

define("_AMS_NW_COULDNOTSAVERATING", "Nie mo�na zapisa� oceny");
define("_AMS_NW_COULDNOTUPDATERATING", "Nie mo�na zaktualizowa� oceny artyku�u");

define("_AMS_NW_COULDNOTADDLINK", "Nie mo�na powi�za� linku z tym artyku�em");
define("_AMS_NW_COULDNOTDELLINK", "B��d - Nie usuni�to linka");

define("_AMS_NW_CANNOTVOTESELF", "Autor nie mo�e ocenia� artyku�u");
define("_AMS_NW_ANONYMOUSVOTEDISABLED", "Ocenianie przez niezarejestrowanych u�ytkownik�w wy��czone");
define("_AMS_NW_ANONYMOUSHASVOTED", "Kto� z tego IP ju� oceni� ten artyku�");
define("_AMS_NW_USERHASVOTED", "Ju� oceni�e� ten artyku�");

define("_AMS_NW_NOTALLOWEDAUDIENCE", "Nie mo�esz czyta� artyku��w %s poziomu");
define("_AMS_NW_NOERRORSENCOUNTERED", "Nie wyliczono �adnych b��d�w");

//Additional constants
define("_AMS_NW_USERNAME", "U�ytkownik");
define("_AMS_NW_ADDLINK", "Dodaj Link(i)");
define("_AMS_NW_DELLINK", "Usu� Link(i)");
define("_AMS_NW_RELATEDARTICLES", "Zalecone odczytywanie");
define("_AMS_NW_SEARCHRESULTS", "Wyniki Szukania:");
define("_AMS_NW_MANAGELINK", "Linki");
define("_AMS_NW_DELVERSIONS", "Usu� wersje poni�ej tej wersji");
define("_AMS_NW_DELALLVERSIONS", "Usu� wszystkie wersje na r�wni z t� wersj�");
define("_AMS_NW_SUBMIT", "Zatwierd�");
define("_AMS_NW_RUSUREDELVERSIONS", "Czy na pewno chcesz usun�� wszystkie wersje b�d�ce Poza Zasi�giem Odtworzenia!!! poni�ej tej wersji?");
define("_AMS_NW_RUSUREDELALLVERSIONS", "Czy na pewno chcesz usun�� wszystkie wersje b�d�ce Poza Zasi�giem Odtworzenia!!! na r�wni z t� wersj�?");
define("_AMS_NW_EXTERNALLINK", "Linki zewn�trzne");
define("_AMS_NW_ADDEXTERNALLINK", "Dodaj zewn�trzny link");
define("_AMS_NW_PREREQUISITEARTICLES", "Warunek wst�pny czytania");
define("_AMS_NW_LINKTYPE", "Typ Linku");
define("_AMS_NW_SETTITLE", "Ustaw tytu� Linku");
define("_AMS_NW_BANNER", "Banner/Sponsor");

define("_AMS_NW_NOTOPICS", "Nie ma tematu - prosz� utworzy� temat i nada� dla niego odpowiednie prawa dost�pu");

define("_AMS_NW_TOTALARTICLES", "Wszystkich artyku��w");

define("_AMS_MA_INDEX", "Spis");
define("_AMS_MA_SUBTOPICS", "Podtemat dla ");
define("_AMS_MA_PAGEBREAK", "NAST�PNA STRONA");
?>