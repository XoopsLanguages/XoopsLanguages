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
define("_WFS_NEXTPAGE","Nastêpna strona");
//define("_WFS_RETURNTOP","<< Return to Top");

//%%%%%%

define("_WFS_TOP","Top");
define("_WFS_POSTERC","Przesy³aj±cy:");
define("_WFS_DATEC","Data:");
define("_WFS_EDITNOTALLOWED","Nie jeste¶ uprawniony do edycji tego komentarza!");
define("_WFS_ANONNOTALLOWED","Anonimowi u¿ytkownicy nie s± upowa¿nieni do przesy³ania poczty.");
define("_WFS_THANKSFORPOST","Dziêkujemy za Twoj± przesy³kê!"); //submission of news comments
define("_WFS_DELNOTALLOWED","Nie jeste¶ uprawniony do usuniêcia tego komentarza!");
define("_WFS_AREUSUREDEL","Jeste¶ pewien, ¿e chcesz usun±æ ten komentarz i wszystkie podkomentarze?");
define("_WFS_YES","Tak");
define("_WFS_NO","Nie");
define("_PL_COMMENTSDEL","Komentarz(e) usuniêto pomy¶lnie!");

//%%%%%%

define("_WFS_TITLE","Tytu³");
define("_WFS_CATEGORY","Sekcja");
define("_WFS_HTMLISFINE","HTML jest dozwolone, ale dwa razy sprawd¼ adresy URL i tagi HTML!");
define("_WFS_ALLOWEDHTML","Zezwól na  HTML:");
define("_WFS_DISABLESMILEY","Wy³±cz emotikony");
define("_WFS_DISABLEHTML","Wy³±cz HTML");
define("_WFS_POST","Prze¶lij");
define("_WFS_PREVIEW","Podgl±d");
define("_WFS_GO","Wy¶lij");

//%%%%%%
define("_WFS_ARTICLES","Tematy");
define("_WFS_VIEWS","Przeczytane %s razy "); //********* Updated ************
define("_WFS_DATE","Data: "); //********* Updated ************
define("_WFS_WRITTEN","Napisa³: "); //********* Updated ************
define("_WFS_PRINTERFRIENDLY","Strona do wydruku");

define("_WFS_TOPICC","Sekcja:");
define("_WFS_URL","URL:");
define("_WFS_NOSTORY","Wybacz. Wybrany artyku³ nie istnieje.");
define("_WFS_RETURN2INDEX","Powrót do strony g³ównej artyku³ów");
define("_WFS_BACK2CAT","Powrót do kategorii");
define("_WFS_BACK2","Powrót");
//%%%%%%	File Name print.php 	%%%%%

define("_WFS_URLFORSTORY","Adres URL tego artyku³u to:");

// %s represents your site name
define("_WFS_THISCOMESFROM","Ten artyku³ pochodzi z %s");

/////// wfsection
define("_WFS_CATEGORYS","Sekcja");
define("_WFS_POSTS","Artyku³y");
define("_WFS_PUBLISHED","Ostatnie artyku³y");
define("_WFS_WELCOME","%s w czytelni");

define("_WFS_ARTICLE","Artyku³");
define("_WFS_AUTHER","Autor: "); //********* Updated ************
define("_WFS_AUTH","Autor"); //updated
define("_WFS_CAUTH","<b>Nazwa autora</b> (Zostaw pusty, aby zachowaæ oryginaln± nazwê autora)"); //updated
define("_WFS_LASTUPDATE","Zmodyfikowano");

// wfsarticle.php

define("_WFS_MAINTEXT"," Tekst artyku³u");
//_WFS_ALLOWEDHTML
define("_WFS_DISAMILEY","Wy³±cz emotikony");
define("_WFS_DISHTML","Wy³±cz HTML");
//_WFS_PREVIEW
define("_WFS_SAVE","Zapisz");
//_WFS_GO

// themenews.php
define("_WFS_POSTEDBY","napisany przez");
define("_WFS_ON","W³±cz");
define("_WFS_READS","Ods³ony");
define("_WFS_FILEUPLOAD","Wy³aduj plik przy³±czony");
define("_WFS_FILESHOWNAME","Tytu³ przy³±czonego pliku");
define("_WFS_ATTACHEDFILES","Edycja plików przy³±czonych");
define("_WFS_NOFILE","Brak plików przy³±czonych do tego artyku³u.");
define("_WFS_AFTERREGED","Pliki nie mog± byæ przy³±czone do pustego artyku³u. <br />Utwórz artyku³, zapisz i powróæ do dodawania pliku przy³±czonego.");
define("_WFS_FILES","Plik");
define("_WFS_COMMENTSNUM","Komentarz");
define("_WFS_CATEGORYDESC","Opis");
define("_WFS_CATEGORYHEAD","Nag³ówek strony kategorii.<br /><br />This html or text will appear above your categories.");
define("_WFS_CATEGORYFOOT","Tekst stópki kategorii.<br /><br />This html or Text Will appear below your categories.");
define("_WFS_FILEID","ID pliku");
define("_WFS_FILEREALNAME","Filename when stored");
define("_WFS_FILETEXT","Tekst do szukania");
define("_WFS_ARTICLEID","ID artyku³u");
define("_WFS_EXT","Rozszerzenie");
define("_WFS_MINETYPE","Typ Mine");
define("_WFS_UPDATEDATE","Ostatnio zmodyfikowano");
define("_WFS_DEL","Usuñ");
define("_WFS_CANCEL","B³±d");
define("_WFS_IMGADD","Dodaj");
define("_WFS_UPLOAD","Wy³aduj");
define("_WFS_LINKURL","URL to link");
define("_WFS_LINKURLNAME","Pseudonazwa dla adresu URL");
define("_WFS_SUMMARY","Razem");
define("_WFS_LINK","Odsy³acz");
define("_WFS_NOTREADFILE","Nie mo¿na odczytaæ pliku!");
define("_WFS_DOWNLOADNAME","Nazwa pliku po ¶ci±gniêciu");
define("_WFS_PAGEBREAK","Rozdzia³ stron przez: [pagebreak]");

//new version 0.9.2
define("_WFS_MAININDEX","Strona g³ówna");
define("_WFS_NOVIEWPERMISSION","Wybacz! Nie masz praw dostêpu do tego obszaru.");
define("_WFS_WEBLINK","ODSY£ACZ:");
define("_WFS_VOTEAPPRE","Your vote is appreciated.");
define("_WFS_THANKYOU","Dziêkujemy za poswiêcenie czasu na g³osowanie na stronie: %s"); // %s is your site name
define("_WFS_VOTEFROMYOU","Input from users such as yourself will help other visitors better decide which file to download.");
define("_WFS_VOTEONCE","Nie g³osuj na to samo wiêcej ni¿ jeden raz.");
define("_WFS_RATINGSCALE","Skala jest od 1 do 10, gdzie 1 oznacza beznadziejny, a 10 wspania³y.");
define("_WFS_BEOBJECTIVE","Proszê byæ obiektywnym, Je¶li ka¿dy zag³osuje 1 lub 10, to ocena nie bêdzie zbyt u¿yteczna.");
define("_WFS_DONOTVOTE","Nie mo¿esz g³osowaæ sam na siebie.");
define("_WFS_RATEIT","Oceñ!");
define("_WFS_DESCRIPTIONC","Opis: ");
define("_WFS_EMAILC","Email: ");
define("_WFS_CATEGORYC","Kategoria: ");
define("_WFS_LASTUPDATEC","Ostatnia modyfikacja: ");
define("_WFS_DLNOW","¦ci±gnij teraz!");
define("_WFS_VERSION","Wersja");
define("_WFS_SUBMITDATE","Data nades³ania");
define("_WFS_DLTIMES","Downloaded %s times");
define("_WFS_FILESIZE","Rozmiar pliku");
define("_WFS_SUPPORTEDPLAT","Platforma");
define("_WFS_HOMEPAGE","Strona g³ówna");
define("_WFS_HITSC","Ods³ony: ");
define("_WFS_RATINGC","Ocena: ");
define("_WFS_ONEVOTE","1 g³os");
define("_WFS_NUMVOTES","%s g³osy(ów)");
define("_WFS_ONEPOST","1 poczta");
define("_WFS_NUMPOSTS","%s glosy(ów)");
define("_WFS_COMMENTSC","Komaentarze: ");
define("_WFS_RATETHISFILE","Oceñ ten artyku³");
define("_WFS_MODIFY","Modyfikuj");
define("_WFS_TELLAFRIEND","Powiedz przyjacielowi");
define("_WFS_VSCOMMENTS","Przegl±danie/wysy³anie komentarzy");
define("_WFS_EDIT","Edytuj");
define("_WFS_SUBMIT","Zatwierd¼");
define("_WFS_BYTES","Bajtów");
define("_WFS_ALREADYREPORTED","Przes³a³e¶ ju¿ raport o niew³a¶ciwych plikach dla tego przypadku.");
define("_WFS_MUSTREGFIRST","Wybacz, nie jeste¶ uprawniony do wykanania tej akcji.<br>Najpierw siê zarejestruj albo zaloguj!");
define("_WFS_NORATING","No rating selected.");
define("_WFS_CANTVOTEOWN","Nie mo¿esz g³osowaæ na samego siebie.<br>All votes are logged and reviewed.");
define("_WFS_RANK","Pozycja");
define("_WFS_HITS","Ods³ony"); //updated
define("_WFS_RATING","Ocena");
define("_WFS_VOTE","G³osy");
define("_WFS_TOP10","%s Top 10"); // %s is a review category name
define("_WFS_CATEGORIES","Kategorie");
define("_WFS_THANKSFORHELP","Dziêkujemy za pomoæ w zintegrowaniu serwisu.");
define("_WFS_FORSECURITY","Dla bezpieczeñstwa Twoja nazwa u¿ytkownika i adres IP zostan± tymczasowo zapisane.");
define("_WFS_NUMBYTES","%s bajtów");
define("_WFS_TIMES"," times");
define("_WFS_DOWNLOADS","Downloads for ");
define("_WFS_FILETYPE","Typ pliku: ");
define("_WFS_GROUPPROMPT","Zezwól na dostêp nastêpujacym grupom:");
define("_WFS_REPORTBROKEN","Powiadom o niew³a¶ciwym pliku");
define("_WFS_IMGNAME","Nazwa pliku (Puste: Taka sama jak oryginalna (za³adowana) nazwa pliku)");
define("_WFS_POSTNEWARTICLE","Prze¶lij artyku³");
define("_WFS_SMILIE","Dodaj emotikony do artyku³u");
define("_WFS_EXGRAPHIC","Dodaj zewnêtrzn± grafikê do artyku³u");
define("_WFS_GRAPHIC","Dodaj lokaln± grafikê do artyku³u");
define("_WFS_NOIMG","Brak obrazka");
define("_WFS_ARTIMGUPLOAD","Wy³aduj obrazek");
define("_WFS_POPULAR","Popularne");
define("_WFS_RATEFILE","Oceñ");
define("_WFS_COMMENT","Komentarze");
define("_WFS_RATED","Oceniony");
define("_WFS_SUBMIT1","Nades³any");
define("_WFS_VOTES","G³osy");
define("_WFS_SORTBY1","uporz±dkowanie wed³ug:");
define("_WFS_TITLE1","Tytu³");
define("_WFS_DATE1","Data");
define("_WFS_ARTICLEID1","ID artyku³u");
define("_WFS_POPULARITY1","Popularno¶æ");
define("_WFS_CURSORTBY1","Artyku³y s± obecnie posortowane wed³ug: %s");
define("_WFS_RATING1","Ocena");
define("_WFS_NOTIFYPUBLISH","Email notification when published");
define("_WFS_POPULARITYLTOM","Popularno¶æ (od najni¿szej do najwy¿szej)");
define("_WFS_POPULARITYMTOL","Popularno¶æ (od najwyzszej do najni¿szej)");
define("_WFS_ARTICLEIDLTOM","ID artyku³u (od 1 do 9)");
define("_WFS_ARTICLEIDMTOL","ID artyku³u (od 9 do 1)");
define("_WFS_TITLEZTOA","Tytu³ (od Z do A)");
define("_WFS_TITLEATOZ","Tytu³ (od Z do A)");
define("_WFS_DATEOLD","Data (Starsze artyku³y najpierw)");
define("_WFS_DATENEW","Data (Nowsze artyku³y najpierw)");
define("_WFS_RATINGLTOH","Ocena (od najni¿szej do najwy¿szej)");
define("_WFS_RATINGHTOL","Ocena (od najwy¿szej do najni¿szej)");
define("_WFS_SUBMITLTOH","Data przes³ania (Najpierw starsze potem nowsze)");
define("_WFS_SUBMITHTOL","Data przes³ania (Najpierw nowsze potem starsze)");
define("_WFS_WEIGHT","Rozmiar");
define("_WFS_NOTITLE","B£¡D: Brak tytu³u - Proszê wróciæ i wprowadzic tytu³ swojego artyku³u");
define("_WFS_NOMAINTEXT","B£¡D: Brak tekstu podstawowego - Proszê wróciæ i wprowadzic tekst podstawowy swojego artyku³u");
define("_WFS_RATINGA","Ocena artyku³u: %s");
define("_WFS_HTMLPAGE","Plik HTML </b>(This will override the text editor)");
define("_WFS_DBUPDATED","Dziêkujemy za przesy³kê.");
define("_WFS_INTFILEAT","Have a look at this article at %s");
define("_WFS_INTFILEFOUND","Tutaj jest interesuj±cy artyku³. Zna³a¿³em go na stronie: %s");
define("_WFS_DESCRIPTION","Opis pliku");
define("_WFS_ARTICLEADDIT","Dodatki artyku³u");
define("_WFS_ARTICLELINK","Odsy³acz URL do artyku³u");
define("_WFS_MISCSETTINGS","Pozosta³e ustawienia artyku³u");
define("_WFS_FILEDESCRIPT","Opis pliku");
define("_WFS_ATTACHEDFILESTXT","<b>Pliki wy³adowane</b><br/><br />To pokazuje listê plików przy³±czonych do aktualnego artyku³u. Mo¿esz edytowaæ ka¿dy przy³±czony plik klikaj±c na odsy³acz Edytuj.<br /><br />Files can only be attached to a article once you 'edit' a saved article.");
define("_WFS_DOWNLOAD","Wy³aduj plik przy³±czony");
define("_WFS_PUBLISHEDHOME","Opublikowano");
define("_WFS_ARTSIZE","Rozmiar %s");
define("_WFS_DISCLAIMER","<b>Zastrze¿enie:</b> Serwis nie odpowiada za jakiekolwiek komentarze napisane przez u¿ytkowników.");
define("_WFS_ONLYREGISTEREDUSERS","Tylko zarejestrowani u¿ytkownicy mog± raportowaæ b³êdne ¶ci±gacze!");
define("_WFS_THANKSFORINFO","Dziêkujemy za informacjê. Rozpatrzymy j± jak najszybciej.");
define("_WFS_FILEPERMISSION","Uprawnienia pliku dla pliku");
define("_WFS_DOWNLOADED","Times Downloaded");
define("_WFS_DOWNLOADSIZE","Rozmiar pliku po ¶ci±gniêciu");
define("_WFS_LASTACCESS","Last Accessed on server");
define("_WFS_LASTUPDATED","Ostatnia modyfikacja");
define("_WFS_ERRORCHECK","Plik istnieje?");
define("_AM_FILEATTACHED","Przy³±czyæ plik do artyku³u?");
define("_WFS_NODESCRIPT","Brak opisu do pliku.");
define("_WFS_UPLOADED","Za³adowano: ");
define("_WFS_FILEMIMETYPE","Typ Mime pliku");

// add disbr, enaamp
define("_WFS_DISBR","Not change New-line into br.");
define("_WFS_ENAAMP","Change &amp; into &amp;amp; at the time of edit.");

// article.php
define("_WFS_ARTCLE_MORE","S± dwa albo wiêcej artyku³ów o podobnym tytule.");

// multi language in index.php
define("_WFS_ERROR_IMAGE","B£¡D: Proszê sprawdziæ ¶cie¿kê/plik obrazka");

?>
