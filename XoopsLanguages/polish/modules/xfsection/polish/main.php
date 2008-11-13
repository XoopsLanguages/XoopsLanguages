<?php
// 2004/01/29 herve 
// multi language
//   add _WFS_ERROR_IMAGE

// 2003/11/21 K.OHWADA
// view and edit for pure html file
//   add _WFS_DISBR, _WFS_ENAAMP
// article.php
//  _WFS_ARTCLE_MORE

// zmodyfikowany 2004/03/03 (Modified by Artur Strauss artur_strauss@poczta.fm)

//%%%%%%
define("_WFS_PRINTER","Strona do wydruku");
define("_WFS_COMMENTS","Skomentujesz?");
define("_WFS_PREVPAGE","Poprzednia strona");
define("_WFS_NEXTPAGE","Nast�pna strona");
//define("_WFS_RETURNTOP","<< Return to Top");

//%%%%%%

define("_WFS_TOP","Top");
define("_WFS_POSTERC","Przesy�aj�cy:");
define("_WFS_DATEC","Data:");
define("_WFS_EDITNOTALLOWED","Nie jeste� uprawniony do edycji tego komentarza!");
define("_WFS_ANONNOTALLOWED","Anonimowi u�ytkownicy nie s� upowa�nieni do przesy�ania poczty.");
define("_WFS_THANKSFORPOST","Dzi�kujemy za Twoj� przesy�k�!"); //submission of news comments
define("_WFS_DELNOTALLOWED","Nie jeste� uprawniony do usuni�cia tego komentarza!");
define("_WFS_AREUSUREDEL","Jeste� pewien, �e chcesz usun�� ten komentarz i wszystkie podkomentarze?");
define("_WFS_YES","Tak");
define("_WFS_NO","Nie");
define("_PL_COMMENTSDEL","Komentarz(e) usuni�to pomy�lnie!");

//%%%%%%

define("_WFS_TITLE","Tytu�");
define("_WFS_CATEGORY","Sekcja");
define("_WFS_HTMLISFINE","HTML jest dozwolone, ale dwa razy sprawd� adresy URL i tagi HTML!");
define("_WFS_ALLOWEDHTML","Zezw�l na  HTML:");
define("_WFS_DISABLESMILEY","Wy��cz emotikony");
define("_WFS_DISABLEHTML","Wy��cz HTML");
define("_WFS_POST","Prze�lij");
define("_WFS_PREVIEW","Podgl�d");
define("_WFS_GO","Wy�lij");

//%%%%%%
define("_WFS_ARTICLES","Tematy");
define("_WFS_VIEWS","Przeczytane %s razy "); //********* Updated ************
define("_WFS_DATE","Data: "); //********* Updated ************
define("_WFS_WRITTEN","Napisa�: "); //********* Updated ************
define("_WFS_PRINTERFRIENDLY","Strona do wydruku");

define("_WFS_TOPICC","Sekcja:");
define("_WFS_URL","URL:");
define("_WFS_NOSTORY","Wybacz. Wybrany artyku� nie istnieje.");
define("_WFS_RETURN2INDEX","Powr�t do strony g��wnej artyku��w");
define("_WFS_BACK2CAT","Powr�t do kategorii");
define("_WFS_BACK2","Powr�t");
//%%%%%%	File Name print.php 	%%%%%

define("_WFS_URLFORSTORY","Adres URL tego artyku�u to:");

// %s represents your site name
define("_WFS_THISCOMESFROM","Ten artyku� pochodzi z %s");

/////// wfsection
define("_WFS_CATEGORYS","Sekcja");
define("_WFS_POSTS","Artyku�y");
define("_WFS_PUBLISHED","Ostatnie artyku�y");
define("_WFS_WELCOME","%s w czytelni");

define("_WFS_ARTICLE","Artyku�");
define("_WFS_AUTHER","Autor: "); //********* Updated ************
define("_WFS_AUTH","Autor"); //updated
define("_WFS_CAUTH","<b>Nazwa autora</b> (Zostaw pusty, aby zachowa� oryginaln� nazw� autora)"); //updated
define("_WFS_LASTUPDATE","Zmodyfikowano");

// wfsarticle.php

define("_WFS_MAINTEXT"," Tekst artyku�u");
//_WFS_ALLOWEDHTML
define("_WFS_DISAMILEY","Wy��cz emotikony");
define("_WFS_DISHTML","Wy��cz HTML");
//_WFS_PREVIEW
define("_WFS_SAVE","Zapisz");
//_WFS_GO

// themenews.php
define("_WFS_POSTEDBY","napisany przez");
define("_WFS_ON","W��cz");
define("_WFS_READS","Ods�ony");
define("_WFS_FILEUPLOAD","Wy�aduj plik przy��czony");
define("_WFS_FILESHOWNAME","Tytu� przy��czonego pliku");
define("_WFS_ATTACHEDFILES","Edycja plik�w przy��czonych");
define("_WFS_NOFILE","Brak plik�w przy��czonych do tego artyku�u.");
define("_WFS_AFTERREGED","Pliki nie mog� by� przy��czone do pustego artyku�u. <br />Utw�rz artyku�, zapisz i powr�� do dodawania pliku przy��czonego.");
define("_WFS_FILES","Plik");
define("_WFS_COMMENTSNUM","Komentarz");
define("_WFS_CATEGORYDESC","Opis");
define("_WFS_CATEGORYHEAD","Nag��wek strony kategorii.<br /><br />This html or text will appear above your categories.");
define("_WFS_CATEGORYFOOT","Tekst st�pki kategorii.<br /><br />This html or Text Will appear below your categories.");
define("_WFS_FILEID","ID pliku");
define("_WFS_FILEREALNAME","Filename when stored");
define("_WFS_FILETEXT","Tekst do szukania");
define("_WFS_ARTICLEID","ID artyku�u");
define("_WFS_EXT","Rozszerzenie");
define("_WFS_MINETYPE","Typ Mine");
define("_WFS_UPDATEDATE","Ostatnio zmodyfikowano");
define("_WFS_DEL","Usu�");
define("_WFS_CANCEL","B��d");
define("_WFS_IMGADD","Dodaj");
define("_WFS_UPLOAD","Wy�aduj");
define("_WFS_LINKURL","URL to link");
define("_WFS_LINKURLNAME","Pseudonazwa dla adresu URL");
define("_WFS_SUMMARY","Razem");
define("_WFS_LINK","Odsy�acz");
define("_WFS_NOTREADFILE","Nie mo�na odczyta� pliku!");
define("_WFS_DOWNLOADNAME","Nazwa pliku po �ci�gni�ciu");
define("_WFS_PAGEBREAK","Rozdzia� stron przez: [pagebreak]");

//new version 0.9.2
define("_WFS_MAININDEX","Strona g��wna");
define("_WFS_NOVIEWPERMISSION","Wybacz! Nie masz praw dost�pu do tego obszaru.");
define("_WFS_WEBLINK","ODSY�ACZ:");
define("_WFS_VOTEAPPRE","Your vote is appreciated.");
define("_WFS_THANKYOU","Dzi�kujemy za poswi�cenie czasu na g�osowanie na stronie: %s"); // %s is your site name
define("_WFS_VOTEFROMYOU","Input from users such as yourself will help other visitors better decide which file to download.");
define("_WFS_VOTEONCE","Nie g�osuj na to samo wi�cej ni� jeden raz.");
define("_WFS_RATINGSCALE","Skala jest od 1 do 10, gdzie 1 oznacza beznadziejny, a 10 wspania�y.");
define("_WFS_BEOBJECTIVE","Prosz� by� obiektywnym, Je�li ka�dy zag�osuje 1 lub 10, to ocena nie b�dzie zbyt u�yteczna.");
define("_WFS_DONOTVOTE","Nie mo�esz g�osowa� sam na siebie.");
define("_WFS_RATEIT","Oce�!");
define("_WFS_DESCRIPTIONC","Opis: ");
define("_WFS_EMAILC","Email: ");
define("_WFS_CATEGORYC","Kategoria: ");
define("_WFS_LASTUPDATEC","Ostatnia modyfikacja: ");
define("_WFS_DLNOW","�ci�gnij teraz!");
define("_WFS_VERSION","Wersja");
define("_WFS_SUBMITDATE","Data nades�ania");
define("_WFS_DLTIMES","Downloaded %s times");
define("_WFS_FILESIZE","Rozmiar pliku");
define("_WFS_SUPPORTEDPLAT","Platforma");
define("_WFS_HOMEPAGE","Strona g��wna");
define("_WFS_HITSC","Ods�ony: ");
define("_WFS_RATINGC","Ocena: ");
define("_WFS_ONEVOTE","1 g�os");
define("_WFS_NUMVOTES","%s g�osy(�w)");
define("_WFS_ONEPOST","1 poczta");
define("_WFS_NUMPOSTS","%s glosy(�w)");
define("_WFS_COMMENTSC","Komaentarze: ");
define("_WFS_RATETHISFILE","Oce� ten artyku�");
define("_WFS_MODIFY","Modyfikuj");
define("_WFS_TELLAFRIEND","Powiedz przyjacielowi");
define("_WFS_VSCOMMENTS","Przegl�danie/wysy�anie komentarzy");
define("_WFS_EDIT","Edytuj");
define("_WFS_SUBMIT","Zatwierd�");
define("_WFS_BYTES","Bajt�w");
define("_WFS_ALREADYREPORTED","Przes�a�e� ju� raport o niew�a�ciwych plikach dla tego przypadku.");
define("_WFS_MUSTREGFIRST","Wybacz, nie jeste� uprawniony do wykanania tej akcji.<br>Najpierw si� zarejestruj albo zaloguj!");
define("_WFS_NORATING","No rating selected.");
define("_WFS_CANTVOTEOWN","Nie mo�esz g�osowa� na samego siebie.<br>All votes are logged and reviewed.");
define("_WFS_RANK","Pozycja");
define("_WFS_HITS","Ods�ony"); //updated
define("_WFS_RATING","Ocena");
define("_WFS_VOTE","G�osy");
define("_WFS_TOP10","%s Top 10"); // %s is a review category name
define("_WFS_CATEGORIES","Kategorie");
define("_WFS_THANKSFORHELP","Dzi�kujemy za pomo� w zintegrowaniu serwisu.");
define("_WFS_FORSECURITY","Dla bezpiecze�stwa Twoja nazwa u�ytkownika i adres IP zostan� tymczasowo zapisane.");
define("_WFS_NUMBYTES","%s bajt�w");
define("_WFS_TIMES"," times");
define("_WFS_DOWNLOADS","Downloads for ");
define("_WFS_FILETYPE","Typ pliku: ");
define("_WFS_GROUPPROMPT","Zezw�l na dost�p nast�pujacym grupom:");
define("_WFS_REPORTBROKEN","Powiadom o niew�a�ciwym pliku");
define("_WFS_IMGNAME","Nazwa pliku (Puste: Taka sama jak oryginalna (za�adowana) nazwa pliku)");
define("_WFS_POSTNEWARTICLE","Prze�lij artyku�");
define("_WFS_SMILIE","Dodaj emotikony do artyku�u");
define("_WFS_EXGRAPHIC","Dodaj zewn�trzn� grafik� do artyku�u");
define("_WFS_GRAPHIC","Dodaj lokaln� grafik� do artyku�u");
define("_WFS_NOIMG","Brak obrazka");
define("_WFS_ARTIMGUPLOAD","Wy�aduj obrazek");
define("_WFS_POPULAR","Popularne");
define("_WFS_RATEFILE","Oce�");
define("_WFS_COMMENT","Komentarze");
define("_WFS_RATED","Oceniony");
define("_WFS_SUBMIT1","Nades�any");
define("_WFS_VOTES","G�osy");
define("_WFS_SORTBY1","uporz�dkowanie wed�ug:");
define("_WFS_TITLE1","Tytu�");
define("_WFS_DATE1","Data");
define("_WFS_ARTICLEID1","ID artyku�u");
define("_WFS_POPULARITY1","Popularno��");
define("_WFS_CURSORTBY1","Artyku�y s� obecnie posortowane wed�ug: %s");
define("_WFS_RATING1","Ocena");
define("_WFS_NOTIFYPUBLISH","Email notification when published");
define("_WFS_POPULARITYLTOM","Popularno�� (od najni�szej do najwy�szej)");
define("_WFS_POPULARITYMTOL","Popularno�� (od najwyzszej do najni�szej)");
define("_WFS_ARTICLEIDLTOM","ID artyku�u (od 1 do 9)");
define("_WFS_ARTICLEIDMTOL","ID artyku�u (od 9 do 1)");
define("_WFS_TITLEZTOA","Tytu� (od Z do A)");
define("_WFS_TITLEATOZ","Tytu� (od Z do A)");
define("_WFS_DATEOLD","Data (Starsze artyku�y najpierw)");
define("_WFS_DATENEW","Data (Nowsze artyku�y najpierw)");
define("_WFS_RATINGLTOH","Ocena (od najni�szej do najwy�szej)");
define("_WFS_RATINGHTOL","Ocena (od najwy�szej do najni�szej)");
define("_WFS_SUBMITLTOH","Data przes�ania (Najpierw starsze potem nowsze)");
define("_WFS_SUBMITHTOL","Data przes�ania (Najpierw nowsze potem starsze)");
define("_WFS_WEIGHT","Rozmiar");
define("_WFS_NOTITLE","B��D: Brak tytu�u - Prosz� wr�ci� i wprowadzic tytu� swojego artyku�u");
define("_WFS_NOMAINTEXT","B��D: Brak tekstu podstawowego - Prosz� wr�ci� i wprowadzic tekst podstawowy swojego artyku�u");
define("_WFS_RATINGA","Ocena artyku�u: %s");
define("_WFS_HTMLPAGE","Plik HTML </b>(This will override the text editor)");
define("_WFS_DBUPDATED","Dzi�kujemy za przesy�k�.");
define("_WFS_INTFILEAT","Have a look at this article at %s");
define("_WFS_INTFILEFOUND","Tutaj jest interesuj�cy artyku�. Zna�a��em go na stronie: %s");
define("_WFS_DESCRIPTION","Opis pliku");
define("_WFS_ARTICLEADDIT","Dodatki artyku�u");
define("_WFS_ARTICLELINK","Odsy�acz URL do artyku�u");
define("_WFS_MISCSETTINGS","Pozosta�e ustawienia artyku�u");
define("_WFS_FILEDESCRIPT","Opis pliku");
define("_WFS_ATTACHEDFILESTXT","<b>Pliki wy�adowane</b><br/><br />To pokazuje list� plik�w przy��czonych do aktualnego artyku�u. Mo�esz edytowa� ka�dy przy��czony plik klikaj�c na odsy�acz Edytuj.<br /><br />Files can only be attached to a article once you 'edit' a saved article.");
define("_WFS_DOWNLOAD","Wy�aduj plik przy��czony");
define("_WFS_PUBLISHEDHOME","Opublikowano");
define("_WFS_ARTSIZE","Rozmiar %s");
define("_WFS_DISCLAIMER","<b>Zastrze�enie:</b> Serwis nie odpowiada za jakiekolwiek komentarze napisane przez u�ytkownik�w.");
define("_WFS_ONLYREGISTEREDUSERS","Tylko zarejestrowani u�ytkownicy mog� raportowa� b��dne �ci�gacze!");
define("_WFS_THANKSFORINFO","Dzi�kujemy za informacj�. Rozpatrzymy j� jak najszybciej.");
define("_WFS_FILEPERMISSION","Uprawnienia pliku dla pliku");
define("_WFS_DOWNLOADED","Times Downloaded");
define("_WFS_DOWNLOADSIZE","Rozmiar pliku po �ci�gni�ciu");
define("_WFS_LASTACCESS","Last Accessed on server");
define("_WFS_LASTUPDATED","Ostatnia modyfikacja");
define("_WFS_ERRORCHECK","Plik istnieje?");
define("_AM_FILEATTACHED","Przy��czy� plik do artyku�u?");
define("_WFS_NODESCRIPT","Brak opisu do pliku.");
define("_WFS_UPLOADED","Za�adowano: ");
define("_WFS_FILEMIMETYPE","Typ Mime pliku");

// add disbr, enaamp
define("_WFS_DISBR","Not change New-line into br.");
define("_WFS_ENAAMP","Change &amp; into &amp;amp; at the time of edit.");

// article.php
define("_WFS_ARTCLE_MORE","S� dwa albo wi�cej artyku��w o podobnym tytule.");

// multi language in index.php
define("_WFS_ERROR_IMAGE","B��D: Prosz� sprawdzi� �cie�k�/plik obrazka");

?>
