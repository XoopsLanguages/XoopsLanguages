<?php
global $modversion;
define(_GALVERSION, $modversion['version']);

// Date Strings
/* 2.4 */define(_GALDATEFULL, '%A, %B %d, %Y');
/* 2.4 */define(_GALDATEBRIEF, '%b %d %Y');
/* 2.4 */define(_GALTIME, '%I:%M%p');

// Copyright Strings
/* 2.4 */define(_GALCOPYRIGHT, "Powered by: My_eGallery %s AddOn Modules<br>&copy; 2001 Copyright <a href=\"http://www.marsishere.net/index.php\" target=\"_blank\">MarsIsHere.net</a>");

// Sorting of Media Menu
/* 2.4 */define(_GALSORTMEDIABY,'Sortuj obrazy wg');
/* 2.4 */define(_GALMEDIASORTED,'Obrazy posortowane wg');
/* 2.4 */define(_GALPOPULARITY1,'Popularno�� (od najrzadziej ogl�danych)');
/* 2.4 */define(_GALPOPULARITY2,'Popularno�� (od najcz�ciej ogl�danych)');
/* 2.4 */define(_GALASC,'A');
/* 2.4 */define(_GALDESC,'D');
/* 2.4 */define(_GALNAMEAZ,'Nazwa (A to Z)');
/* 2.4 */define(_GALNAMEZA,'Nazwa (Z to A)');
/* 2.4 */define(_GALDATE1,'Data (od najstarszych)');
/* 2.4 */define(_GALDATE2,'Data (od najnowszych)');
/* 2.4 */define(_GALRATING1,'Ranking (od najni�ej ocenianych)');
/* 2.4 */define(_GALRATING2,'Ranking (od najwy�ej ocenianych)');

// Media Formats
/* 2.5 */define(_GALMEDIAMOV, 'Quicktime Movie');
/* 2.5 */define(_GALMEDIAMPG, 'MPEG Movie');
/* 2.5 */define(_GALMEDIAAVI, 'AVI Movie');
/* 2.5 */define(_GALMEDIAMP3, 'MP3 Audio');
/* 2.5 */define(_GALMEDIAMID, 'MIDI Music');
/* 2.5 */define(_GALMEDIASWF, 'Shockwave Flash');

/* 1.1 */define(_GALHITS, 'Ods�on');
/* 2.0 */define(_GALRATING, 'Oceny');
/* 2.0 */define(_GALVOTES, 'G�osy');

// WebJeff File Manager Messages (fileFunctions.php)
/* 2.5 */define(_GALFILEMOVED, 'Ten plik <b>%s</b>zosta� przeniesiony do katalogu');
/* 2.5 */define(_GALFILEDELETED, "Katalog <b>%s</b> zosta� usuni�ty.");
/* 2.5 */define(_GALFILEDELETED2, "Plik <b>%s</b> zosta� usuni�ty.");
/* 2.5 */define(_GALFILEDELETED3, "Plik zosta� usuni�ty.");
/* 2.5 */define(_GALFILERENAMED, "Musisz wpisa� poprawnie nazw�");
/* 2.5 */define(_GALFILERENAMED1, "<b>%s</b> ju� istnieje");
/* 2.5 */define(_GALFILERENAMED2, "<b>%s</b> zosta� nazwany <b>%s</b>");
/* 2.5 */define(_GALFILECREATED, "Musisz wpisa� poprawnie nazw�");
/* 2.5 */define(_GALFILECREATED1, "Katalog ju� istnieje");
/* 2.5 */define(_GALFILECREATED2, "Katalog <b>%s</b> zosta� utworzony w katalogu");
/* 2.5 */define(_GALFILEUPLOADED, "<br>B��d podczas transferu!<br> %s");
/* 2.5 */define(_GALFILEUPLOADED1, "Plik <b>%s</b> zosta� za�adowany do katalogu <b>%s</b>");
/* 2.6.4*/define (_GALCREATECATERROR, 'Skrypt nie m�g� utworzy� katalogu. Sprawd� swoje uprawnienia.');
/* 2.6.4*/define (_GALUPLOADERROR, "Zdj�cie kt�re chcesz wys�a� przekracza dopuszczalny rozmiar ustalony w 'Ustawieniach g��wnych' lub w 'php.ini'.");
/* 2.6.4*/define (_GALUPLOADERROR2, "Wybierz zdj�cie do wys�ania.");
/* 2.6.4*/define (_GALUPLOADERROR3, "Skrypt nie m�g� zapisa� w wyznaczonym katalogu. Sprawd� swoje uprawnienia.");

/* 2.7.3*/define (_GALTYPENOTSUPPORTED, 'Nie mo�esz wys�a� tego pliku. Format nieobs�ugiwany');

// General
/* 1.1 */define(_GALTOP10, 'TOP 10');
/* 1.1 */define(_GALPAGE, 'Strona');
/* 1.1 */define(_GALNAME, 'Nazwa:');
/* 1.1 */define(_GALPICS, 'zdj�cie(a)');
/* 1.1 */define(_GALNOTE, 'Uwaga: Komentarze s� automatycznie logowane. Niekt�re wyra�enia s� auto-cenzurowane.');
/* 1.1 */define(_GALCOMMENT, 'Komentarz:');
/* 1.1 */define(_GALCOMMENTS, 'komentarz(e)');
/* 1.1 */define(_GALCOMMPOST, 'Wys�ane komentarze');
/* 1.1 */define(_GALNOCOMM, "Brak komentarza. Dlaczego nie skomentujesz!? �mia�o!");
/* 1.1 */define(_GALVIEWED, 'Ogl�dane');
/* 1.1 */define(_GALTIMES, 'czas');
/* 1.1 */define(_GALREGISTER, 'Chcesz skomentowa�? Najpierw musisz si� <a href="user.php">zarejestrowa�</a>!');
/* 1.1 */define(_GALUNKNOWN, 'Nieznany');
/* 1.1 */define(_GALSIZE, 'Rozmiar');
/* 1.1 */define(_GALDATE, 'Data');
/* 1.1 */define(_GALPOST, 'Post');
/* 2.0 */define(_GALADDED, 'Od');
/* 2.0 */define(_GALMORE, '....');
/* 2.0 */define(_GALSUBMITTER, 'Dodany przez');
/* 2.0 */define(_GALNBCOMMENTS, 'Komentarze');
/* 2.0 */define(_GALMEMBERSRATE, 'Tylko zarejestrowani i zalogowani u�ytkownicy mog� g�osowa� na to zdj�cie!<br> Mo�esz zarejestrowa� si� <a href="user.php">tutaj</a>');
/* 2.0 */define(_GALPREV, 'Poprzednie zdj�cie');
/* 2.0 */define(_GALPREVPAGE, 'Poprzednia strona');
/* 2.0 */define(_GALNEXT, 'Nast�pne zdj�cie');
/* 2.0 */define(_GALNEXTPAGE, 'Nast�pna strona');
/* 2.0 */define(_GALHOME, 'Strona g��wna galerii');
/* 2.0 */define(_GALIMAGES, 'Zdj�cia');
/* 2.0 */define(_GALNEWIMAGES, 'Nowe zdj�cia');
/* 2.0 */define(_GALTOP10HITS, '(Wg obejrze�)');
/* 2.0 */define(_GALTOP10RATING, '(Wg ocen)');
/* 2.0 */define(_GALTOPPOS, 'Pos.');
/* 2.0 */define(_GALTOPRATING, 'Ocena');
/* 2.0 */define(_GALTOPHITS, 'Obejrzenia');
/* 2.0 */define(_GALTOPVOTES, '#G�osy');
/* 2.0 */define(_GALTOPMEDIA, 'Media');
/* 2.4 */define(_GALNEWMEDIA1, 'Dzisiaj dodano nowe zdj�cie(a)');
/* 2.4 */define(_GALNEWMEDIA2, 'Nowe zdj�cia dodane %d dni temu');
/* 2.4.9 */define(_GALCATMEMBERS,'Aby dosta� si� do kategorii oznaczonych (*), <a href="user.php">zarejestruj si�</a>. To jest bezp�atne');
/* 2.5 */define(_GALALLWORDSAND, 'Wszystkie s�owa [AND]');
/* 2.5 */define(_GALALLWORDSOR, 'Dowolne s�owa [OR]');
/* 2.5 */define(_GALNOTHINGMATCHSEARCH,'Przykro nam!<br>Nie znaleziono szukanych s��w');
/* 2.5.3 */define (_GALDESCRIPTION, "Opis obrazka");
/* 2.5.3 */define (_GALSURE2DELETECOMMENT, "Jeste� pewien �e chcesz skasowa� ten komentarz?");
/* 2.6.3 */define (_GALDOWNLOADMEDIA, "�ci�gnij to zdj�cie");
/* 2.6.3 */define (_GALPOSTCARD, "Wy�lij to zdj�cie znajomemu/znajomej");
/* 2.6.3 */define (_GALPRINTMEDIA, "Otw�rz w osobnym oknie");

/* 3.0 */define(_GALFORMAT, 'Format');
/* 3.0 */define(_GALPOPULARITY, 'Popularno��');

// Media Upload
/* 2.0 */define(_GALMEDIANAME, 'Nazwa zdj�cia:');
/* 2.0 */define(_GALFILENAME, 'Nazwa pliku:');
/* 2.0 */define(_GALDESCRIPTION, 'Opis:');
/* 2.0 */define(_GALSELECTCATEGORY, 'Wybierz kategori�:');
/* 2.1 */define(_GALREGISTER2POSTPICS, 'je�li chcesz wys�a� nam zdj�cie,<br> prosimy <a href="user.php">zarejestruj si�</a> najpierw!');
/* 2.1 */define(_GALUPLOADMEDIA, 'Wy�lij zdj�cie');
/* PP  */define(_GALUPLOADMEDIABUTTON, 'Wy�lij');
/* 2.1 */define(_GALCLICKONCE, 'Kliknij &quot;Upload&quot; tylko raz!');
/* 2.1 */define(_GALMAXSIZEPOST, '*Dopuszczalna wielko�� pliku zdj�cia to %s kB');
/* 2.1 */define(_GALPICALREADYEXT, 'Wybrane zdj�cie ju� jest!');
/* 2.1 */define(_GALPICNONAME, 'Wpisz nazw� swojego zdj�cia');
/* 2.1 */define(_GALPICNODESC, 'Wpisz opis swojego zdj�cia');
/* 2.1 */define(_GALPICNOSUBMITTER, 'Podpisz si�');
/* 2.1 */define(_GALMEDIARECEIVED, 'Otrzymali�my proponowane zdj�cie. Dzi�ki!');
/* 2.1 */define(_GALCHECKFORIT, 'Wkr�tce sprawdzimy Twoje zdj�cie');
/* 2.1 */define(_GALPOSTMEDIA, 'Wy�lij zdj�cie');
/* 2.5.4 */define (_GALNOMEDIA, 'Nie wybrano zdj�cia');
/* 2.5.4 */define (_GALPBUPLOAD, 'Wyst�pi� problem podczas wysy�ania zdj�cia. Skontaktuj si� z Webmasterem.');

/* 2.7.0 */define (_GALFILENOTFOUND, '��dany przez Ciebie plik nie istnieje');

// Forgotten by marsishere
define (_GOBACK, 'Nacisnij guzik [Cofnij] w przegl�darce i popraw dane');

?>