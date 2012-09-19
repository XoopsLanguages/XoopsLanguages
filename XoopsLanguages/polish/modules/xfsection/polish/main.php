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
define("_WFS_NEXTPAGE","Następna strona");
//define("_WFS_RETURNTOP","<< Return to Top");

//%%%%%%

define("_WFS_TOP","Top");
define("_WFS_POSTERC","Przesyłający:");
define("_WFS_DATEC","Data:");
define("_WFS_EDITNOTALLOWED","Nie jesteś uprawniony do edycji tego komentarza!");
define("_WFS_ANONNOTALLOWED","Anonimowi użytkownicy nie są upoważnieni do przesyłania poczty.");
define("_WFS_THANKSFORPOST","Dziękujemy za Twoją przesyłkę!"); //submission of news comments
define("_WFS_DELNOTALLOWED","Nie jesteś uprawniony do usunięcia tego komentarza!");
define("_WFS_AREUSUREDEL","Jesteś pewien, że chcesz usunąć ten komentarz i wszystkie podkomentarze?");
define("_WFS_YES","Tak");
define("_WFS_NO","Nie");
define("_PL_COMMENTSDEL","Komentarz(e) usunięto pomyślnie!");

//%%%%%%

define("_WFS_TITLE","Tytuł");
define("_WFS_CATEGORY","Sekcja");
define("_WFS_HTMLISFINE","HTML jest dozwolone, ale dwa razy sprawdź adresy URL i tagi HTML!");
define("_WFS_ALLOWEDHTML","Zezwól na  HTML:");
define("_WFS_DISABLESMILEY","Wyłącz emotikony");
define("_WFS_DISABLEHTML","Wyłącz HTML");
define("_WFS_POST","Prześlij");
define("_WFS_PREVIEW","Podgląd");
define("_WFS_GO","Wyślij");

//%%%%%%
define("_WFS_ARTICLES","Tematy");
define("_WFS_VIEWS","Przeczytane %s razy "); //********* Updated ************
define("_WFS_DATE","Data: "); //********* Updated ************
define("_WFS_WRITTEN","Napisał: "); //********* Updated ************
define("_WFS_PRINTERFRIENDLY","Strona do wydruku");

define("_WFS_TOPICC","Sekcja:");
define("_WFS_URL","URL:");
define("_WFS_NOSTORY","Wybacz. Wybrany artykuł nie istnieje.");
define("_WFS_RETURN2INDEX","Powrót do strony głównej artykułów");
define("_WFS_BACK2CAT","Powrót do kategorii");
define("_WFS_BACK2","Powrót");
//%%%%%%	File Name print.php 	%%%%%

define("_WFS_URLFORSTORY","Adres URL tego artykułu to:");

// %s represents your site name
define("_WFS_THISCOMESFROM","Ten artykuł pochodzi z %s");

/////// wfsection
define("_WFS_CATEGORYS","Sekcja");
define("_WFS_POSTS","Artykuły");
define("_WFS_PUBLISHED","Ostatnie artykuły");
define("_WFS_WELCOME","%s w czytelni");

define("_WFS_ARTICLE","Artykuł");
define("_WFS_AUTHER","Autor: "); //********* Updated ************
define("_WFS_AUTH","Autor"); //updated
define("_WFS_CAUTH","<b>Nazwa autora</b> (Zostaw pusty, aby zachować oryginalną nazwę autora)"); //updated
define("_WFS_LASTUPDATE","Zmodyfikowano");

// wfsarticle.php

define("_WFS_MAINTEXT"," Tekst artykułu");
//_WFS_ALLOWEDHTML
define("_WFS_DISAMILEY","Wyłącz emotikony");
define("_WFS_DISHTML","Wyłącz HTML");
//_WFS_PREVIEW
define("_WFS_SAVE","Zapisz");
//_WFS_GO

// themenews.php
define("_WFS_POSTEDBY","napisany przez");
define("_WFS_ON","Włącz");
define("_WFS_READS","Odsłony");
define("_WFS_FILEUPLOAD","Wyładuj plik przyłączony");
define("_WFS_FILESHOWNAME","Tytuł przyłączonego pliku");
define("_WFS_ATTACHEDFILES","Edycja plików przyłączonych");
define("_WFS_NOFILE","Brak plików przyłączonych do tego artykułu.");
define("_WFS_AFTERREGED","Pliki nie mogą być przyłączone do pustego artykułu. <br />Utwórz artykuł, zapisz i powróć do dodawania pliku przyłączonego.");
define("_WFS_FILES","Plik");
define("_WFS_COMMENTSNUM","Komentarz");
define("_WFS_CATEGORYDESC","Opis");
define("_WFS_CATEGORYHEAD","Nagłówek strony kategorii.<br /><br />This html or text will appear above your categories.");
define("_WFS_CATEGORYFOOT","Tekst stópki kategorii.<br /><br />This html or Text Will appear below your categories.");
define("_WFS_FILEID","ID pliku");
define("_WFS_FILEREALNAME","Filename when stored");
define("_WFS_FILETEXT","Tekst do szukania");
define("_WFS_ARTICLEID","ID artykułu");
define("_WFS_EXT","Rozszerzenie");
define("_WFS_MINETYPE","Typ Mine");
define("_WFS_UPDATEDATE","Ostatnio zmodyfikowano");
define("_WFS_DEL","Usuń");
define("_WFS_CANCEL","Błąd");
define("_WFS_IMGADD","Dodaj");
define("_WFS_UPLOAD","Wyładuj");
define("_WFS_LINKURL","URL to link");
define("_WFS_LINKURLNAME","Pseudonazwa dla adresu URL");
define("_WFS_SUMMARY","Razem");
define("_WFS_LINK","Odsyłacz");
define("_WFS_NOTREADFILE","Nie można odczytać pliku!");
define("_WFS_DOWNLOADNAME","Nazwa pliku po ściągnięciu");
define("_WFS_PAGEBREAK","Rozdział stron przez: [pagebreak]");

//new version 0.9.2
define("_WFS_MAININDEX","Strona główna");
define("_WFS_NOVIEWPERMISSION","Wybacz! Nie masz praw dostępu do tego obszaru.");
define("_WFS_WEBLINK","ODSYŁACZ:");
define("_WFS_VOTEAPPRE","Your vote is appreciated.");
define("_WFS_THANKYOU","Dziękujemy za poswięcenie czasu na głosowanie na stronie: %s"); // %s is your site name
define("_WFS_VOTEFROMYOU","Input from users such as yourself will help other visitors better decide which file to download.");
define("_WFS_VOTEONCE","Nie głosuj na to samo więcej niż jeden raz.");
define("_WFS_RATINGSCALE","Skala jest od 1 do 10, gdzie 1 oznacza beznadziejny, a 10 wspaniały.");
define("_WFS_BEOBJECTIVE","Proszę być obiektywnym, Jeśli każdy zagłosuje 1 lub 10, to ocena nie będzie zbyt użyteczna.");
define("_WFS_DONOTVOTE","Nie możesz głosować sam na siebie.");
define("_WFS_RATEIT","Oceń!");
define("_WFS_DESCRIPTIONC","Opis: ");
define("_WFS_EMAILC","Email: ");
define("_WFS_CATEGORYC","Kategoria: ");
define("_WFS_LASTUPDATEC","Ostatnia modyfikacja: ");
define("_WFS_DLNOW","Ściągnij teraz!");
define("_WFS_VERSION","Wersja");
define("_WFS_SUBMITDATE","Data nadesłania");
define("_WFS_DLTIMES","Downloaded %s times");
define("_WFS_FILESIZE","Rozmiar pliku");
define("_WFS_SUPPORTEDPLAT","Platforma");
define("_WFS_HOMEPAGE","Strona główna");
define("_WFS_HITSC","Odsłony: ");
define("_WFS_RATINGC","Ocena: ");
define("_WFS_ONEVOTE","1 głos");
define("_WFS_NUMVOTES","%s głosy(ów)");
define("_WFS_ONEPOST","1 poczta");
define("_WFS_NUMPOSTS","%s glosy(ów)");
define("_WFS_COMMENTSC","Komaentarze: ");
define("_WFS_RATETHISFILE","Oceń ten artykuł");
define("_WFS_MODIFY","Modyfikuj");
define("_WFS_TELLAFRIEND","Powiedz przyjacielowi");
define("_WFS_VSCOMMENTS","Przeglądanie/wysyłanie komentarzy");
define("_WFS_EDIT","Edytuj");
define("_WFS_SUBMIT","Zatwierdź");
define("_WFS_BYTES","Bajtów");
define("_WFS_ALREADYREPORTED","Przesłałeś już raport o niewłaściwych plikach dla tego przypadku.");
define("_WFS_MUSTREGFIRST","Wybacz, nie jesteś uprawniony do wykanania tej akcji.<br>Najpierw się zarejestruj albo zaloguj!");
define("_WFS_NORATING","No rating selected.");
define("_WFS_CANTVOTEOWN","Nie możesz głosować na samego siebie.<br>All votes are logged and reviewed.");
define("_WFS_RANK","Pozycja");
define("_WFS_HITS","Odsłony"); //updated
define("_WFS_RATING","Ocena");
define("_WFS_VOTE","Głosy");
define("_WFS_TOP10","%s Top 10"); // %s is a review category name
define("_WFS_CATEGORIES","Kategorie");
define("_WFS_THANKSFORHELP","Dziękujemy za pomoć w zintegrowaniu serwisu.");
define("_WFS_FORSECURITY","Dla bezpieczeństwa Twoja nazwa użytkownika i adres IP zostaną tymczasowo zapisane.");
define("_WFS_NUMBYTES","%s bajtów");
define("_WFS_TIMES"," times");
define("_WFS_DOWNLOADS","Downloads for ");
define("_WFS_FILETYPE","Typ pliku: ");
define("_WFS_GROUPPROMPT","Zezwól na dostęp następujacym grupom:");
define("_WFS_REPORTBROKEN","Powiadom o niewłaściwym pliku");
define("_WFS_IMGNAME","Nazwa pliku (Puste: Taka sama jak oryginalna (załadowana) nazwa pliku)");
define("_WFS_POSTNEWARTICLE","Prześlij artykuł");
define("_WFS_SMILIE","Dodaj emotikony do artykułu");
define("_WFS_EXGRAPHIC","Dodaj zewnętrzną grafikę do artykułu");
define("_WFS_GRAPHIC","Dodaj lokalną grafikę do artykułu");
define("_WFS_NOIMG","Brak obrazka");
define("_WFS_ARTIMGUPLOAD","Wyładuj obrazek");
define("_WFS_POPULAR","Popularne");
define("_WFS_RATEFILE","Oceń");
define("_WFS_COMMENT","Komentarze");
define("_WFS_RATED","Oceniony");
define("_WFS_SUBMIT1","Nadesłany");
define("_WFS_VOTES","Głosy");
define("_WFS_SORTBY1","uporządkowanie według:");
define("_WFS_TITLE1","Tytuł");
define("_WFS_DATE1","Data");
define("_WFS_ARTICLEID1","ID artykułu");
define("_WFS_POPULARITY1","Popularność");
define("_WFS_CURSORTBY1","Artykuły są obecnie posortowane według: %s");
define("_WFS_RATING1","Ocena");
define("_WFS_NOTIFYPUBLISH","Email notification when published");
define("_WFS_POPULARITYLTOM","Popularność (od najniższej do najwyższej)");
define("_WFS_POPULARITYMTOL","Popularność (od najwyzszej do najniższej)");
define("_WFS_ARTICLEIDLTOM","ID artykułu (od 1 do 9)");
define("_WFS_ARTICLEIDMTOL","ID artykułu (od 9 do 1)");
define("_WFS_TITLEZTOA","Tytuł (od Z do A)");
define("_WFS_TITLEATOZ","Tytuł (od Z do A)");
define("_WFS_DATEOLD","Data (Starsze artykuły najpierw)");
define("_WFS_DATENEW","Data (Nowsze artykuły najpierw)");
define("_WFS_RATINGLTOH","Ocena (od najniższej do najwyższej)");
define("_WFS_RATINGHTOL","Ocena (od najwyższej do najniższej)");
define("_WFS_SUBMITLTOH","Data przesłania (Najpierw starsze potem nowsze)");
define("_WFS_SUBMITHTOL","Data przesłania (Najpierw nowsze potem starsze)");
define("_WFS_WEIGHT","Rozmiar");
define("_WFS_NOTITLE","BŁĄD: Brak tytułu - Proszę wrócić i wprowadzic tytuł swojego artykułu");
define("_WFS_NOMAINTEXT","BŁĄD: Brak tekstu podstawowego - Proszę wrócić i wprowadzic tekst podstawowy swojego artykułu");
define("_WFS_RATINGA","Ocena artykułu: %s");
define("_WFS_HTMLPAGE","Plik HTML </b>(This will override the text editor)");
define("_WFS_DBUPDATED","Dziękujemy za przesyłkę.");
define("_WFS_INTFILEAT","Have a look at this article at %s");
define("_WFS_INTFILEFOUND","Tutaj jest interesujący artykuł. Znałażłem go na stronie: %s");
define("_WFS_DESCRIPTION","Opis pliku");
define("_WFS_ARTICLEADDIT","Dodatki artykułu");
define("_WFS_ARTICLELINK","Odsyłacz URL do artykułu");
define("_WFS_MISCSETTINGS","Pozostałe ustawienia artykułu");
define("_WFS_FILEDESCRIPT","Opis pliku");
define("_WFS_ATTACHEDFILESTXT","<b>Pliki wyładowane</b><br/><br />To pokazuje listę plików przyłączonych do aktualnego artykułu. Możesz edytować każdy przyłączony plik klikając na odsyłacz Edytuj.<br /><br />Files can only be attached to a article once you 'edit' a saved article.");
define("_WFS_DOWNLOAD","Wyładuj plik przyłączony");
define("_WFS_PUBLISHEDHOME","Opublikowano");
define("_WFS_ARTSIZE","Rozmiar %s");
define("_WFS_DISCLAIMER","<b>Zastrzeżenie:</b> Serwis nie odpowiada za jakiekolwiek komentarze napisane przez użytkowników.");
define("_WFS_ONLYREGISTEREDUSERS","Tylko zarejestrowani użytkownicy mogą raportować błędne ściągacze!");
define("_WFS_THANKSFORINFO","Dziękujemy za informację. Rozpatrzymy ją jak najszybciej.");
define("_WFS_FILEPERMISSION","Uprawnienia pliku dla pliku");
define("_WFS_DOWNLOADED","Times Downloaded");
define("_WFS_DOWNLOADSIZE","Rozmiar pliku po ściągnięciu");
define("_WFS_LASTACCESS","Last Accessed on server");
define("_WFS_LASTUPDATED","Ostatnia modyfikacja");
define("_WFS_ERRORCHECK","Plik istnieje?");
define("_AM_FILEATTACHED","Przyłączyć plik do artykułu?");
define("_WFS_NODESCRIPT","Brak opisu do pliku.");
define("_WFS_UPLOADED","Załadowano: ");
define("_WFS_FILEMIMETYPE","Typ Mime pliku");

// add disbr, enaamp
define("_WFS_DISBR","Not change New-line into br.");
define("_WFS_ENAAMP","Change &amp; into &amp;amp; at the time of edit.");

// article.php
define("_WFS_ARTCLE_MORE","Są dwa albo więcej artykułów o podobnym tytule.");

// multi language in index.php
define("_WFS_ERROR_IMAGE","BŁĄD: Proszę sprawdzić ścieżkę/plik obrazka");

?>
