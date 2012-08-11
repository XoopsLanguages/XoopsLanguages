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
/* 2.4 */define(_GALPOPULARITY1,'Popularno¶æ (od najrzadziej ogl±danych)');
/* 2.4 */define(_GALPOPULARITY2,'Popularnoœæ (od najczê¶ciej ogl±danych)');
/* 2.4 */define(_GALASC,'A');
/* 2.4 */define(_GALDESC,'D');
/* 2.4 */define(_GALNAMEAZ,'Nazwa (A to Z)');
/* 2.4 */define(_GALNAMEZA,'Nazwa (Z to A)');
/* 2.4 */define(_GALDATE1,'Data (od najstarszych)');
/* 2.4 */define(_GALDATE2,'Data (od najnowszych)');
/* 2.4 */define(_GALRATING1,'Ranking (od najni¿ej ocenianych)');
/* 2.4 */define(_GALRATING2,'Ranking (od najwy¿ej ocenianych)');

// Media Formats
/* 2.5 */define(_GALMEDIAMOV, 'Quicktime Movie');
/* 2.5 */define(_GALMEDIAMPG, 'MPEG Movie');
/* 2.5 */define(_GALMEDIAAVI, 'AVI Movie');
/* 2.5 */define(_GALMEDIAMP3, 'MP3 Audio');
/* 2.5 */define(_GALMEDIAMID, 'MIDI Music');
/* 2.5 */define(_GALMEDIASWF, 'Shockwave Flash');

/* 1.1 */define(_GALHITS, 'Ods³on');
/* 2.0 */define(_GALRATING, 'Oceny');
/* 2.0 */define(_GALVOTES, 'G³osy');

// WebJeff File Manager Messages (fileFunctions.php)
/* 2.5 */define(_GALFILEMOVED, 'Ten plik <b>%s</b>zosta³ przeniesiony do katalogu');
/* 2.5 */define(_GALFILEDELETED, "Katalog <b>%s</b> zosta³ usuniêty.");
/* 2.5 */define(_GALFILEDELETED2, "Plik <b>%s</b> zosta³ usuniêty.");
/* 2.5 */define(_GALFILEDELETED3, "Plik zosta³ usuniêty.");
/* 2.5 */define(_GALFILERENAMED, "Musisz wpisaæ poprawnie nazwê");
/* 2.5 */define(_GALFILERENAMED1, "<b>%s</b> ju¿ istnieje");
/* 2.5 */define(_GALFILERENAMED2, "<b>%s</b> zosta³ nazwany <b>%s</b>");
/* 2.5 */define(_GALFILECREATED, "Musisz wpisaæ poprawnie nazwê");
/* 2.5 */define(_GALFILECREATED1, "Katalog ju¿ istnieje");
/* 2.5 */define(_GALFILECREATED2, "Katalog <b>%s</b> zosta³ utworzony w katalogu");
/* 2.5 */define(_GALFILEUPLOADED, "<br>B³±d podczas transferu!<br> %s");
/* 2.5 */define(_GALFILEUPLOADED1, "Plik <b>%s</b> zosta³ za³adowany do katalogu <b>%s</b>");
/* 2.6.4*/define(_GALCREATECATERROR, 'Skrypt nie móg³ utworzyæ katalogu. Sprawd¼ swoje uprawnienia.');
/* 2.6.4*/define(_GALUPLOADERROR, "Zdjêcie które chcesz wys³aæ przekracza dopuszczalny rozmiar ustalony w 'Ustawieniach g³ównych' lub w 'php.ini'.");
/* 2.6.4*/define(_GALUPLOADERROR2, "Wybierz zdjêcie do wys³ania.");
/* 2.6.4*/define(_GALUPLOADERROR3, "Skrypt nie móg³ zapisaæ w wyznaczonym katalogu. Sprawd¼ swoje uprawnienia.");

/* 2.7.3*/define(_GALTYPENOTSUPPORTED, 'Nie mo¿esz wys³aæ tego pliku. Format nieobs³ugiwany');

// General
/* 1.1 */define(_GALTOP10, 'TOP 10');
/* 1.1 */define(_GALPAGE, 'Strona');
/* 1.1 */define(_GALNAME, 'Nazwa:');
/* 1.1 */define(_GALPICS, 'zdjêcie(a)');
/* 1.1 */define(_GALNOTE, 'Uwaga: Komentarze s± automatycznie logowane. Niektóre wyra¿enia s± auto-cenzurowane.');
/* 1.1 */define(_GALCOMMENT, 'Komentarz:');
/* 1.1 */define(_GALCOMMENTS, 'komentarz(e)');
/* 1.1 */define(_GALCOMMPOST, 'Wys³ane komentarze');
/* 1.1 */define(_GALNOCOMM, "Brak komentarza. Dlaczego nie skomentujesz!? ¦mia³o!");
/* 1.1 */define(_GALVIEWED, 'Ogl±dane');
/* 1.1 */define(_GALTIMES, 'czas');
/* 1.1 */define(_GALREGISTER, 'Chcesz skomentowaæ? Najpierw musisz siê <a href="user.php">zarejestrowaæ</a>!');
/* 1.1 */define(_GALUNKNOWN, 'Nieznany');
/* 1.1 */define(_GALSIZE, 'Rozmiar');
/* 1.1 */define(_GALDATE, 'Data');
/* 1.1 */define(_GALPOST, 'Post');
/* 2.0 */define(_GALADDED, 'Od');
/* 2.0 */define(_GALMORE, '....');
/* 2.0 */define(_GALSUBMITTER, 'Dodany przez');
/* 2.0 */define(_GALNBCOMMENTS, 'Komentarze');
/* 2.0 */define(_GALMEMBERSRATE, 'Tylko zarejestrowani i zalogowani u¿ytkownicy mog± g³osowaæ na to zdjêcie!<br> Mo¿esz zarejestrowaæ siê <a href="user.php">tutaj</a>');
/* 2.0 */define(_GALPREV, 'Poprzednie zdjêcie');
/* 2.0 */define(_GALPREVPAGE, 'Poprzednia strona');
/* 2.0 */define(_GALNEXT, 'Nastêpne zdjêcie');
/* 2.0 */define(_GALNEXTPAGE, 'Nastêpna strona');
/* 2.0 */define(_GALHOME, 'Strona g³ówna galerii');
/* 2.0 */define(_GALIMAGES, 'Zdjêcia');
/* 2.0 */define(_GALNEWIMAGES, 'Nowe zdjêcia');
/* 2.0 */define(_GALTOP10HITS, '(Wg obejrzeñ)');
/* 2.0 */define(_GALTOP10RATING, '(Wg ocen)');
/* 2.0 */define(_GALTOPPOS, 'Pos.');
/* 2.0 */define(_GALTOPRATING, 'Ocena');
/* 2.0 */define(_GALTOPHITS, 'Obejrzenia');
/* 2.0 */define(_GALTOPVOTES, '#G³osy');
/* 2.0 */define(_GALTOPMEDIA, 'Media');
/* 2.4 */define(_GALNEWMEDIA1, 'Dzisiaj dodano nowe zdjêcie(a)');
/* 2.4 */define(_GALNEWMEDIA2, 'Nowe zdjêcia dodane %d dni temu');
/* 2.4.9 */define(_GALCATMEMBERS,'Aby dostaæ siê do kategorii oznaczonych (*), <a href="user.php">zarejestruj siê</a>. To jest bezp³atne');
/* 2.5 */define(_GALALLWORDSAND, 'Wszystkie s³owa [AND]');
/* 2.5 */define(_GALALLWORDSOR, 'Dowolne s³owa [OR]');
/* 2.5 */define(_GALNOTHINGMATCHSEARCH,'Przykro nam!<br>Nie znaleziono szukanych s³ów');
/* 2.5.3 */define(_GALDESCRIPTION, "Opis obrazka");
/* 2.5.3 */define(_GALSURE2DELETECOMMENT, "Jeste¶ pewien ¿e chcesz skasowaæ ten komentarz?");
/* 2.6.3 */define(_GALDOWNLOADMEDIA, "¦ci±gnij to zdjêcie");
/* 2.6.3 */define(_GALPOSTCARD, "Wy¶lij to zdjêcie znajomemu/znajomej");
/* 2.6.3 */define(_GALPRINTMEDIA, "Otwórz w osobnym oknie");

/* 3.0 */define(_GALFORMAT, 'Format');
/* 3.0 */define(_GALPOPULARITY, 'Popularno¹æ');

// Media Upload
/* 2.0 */define(_GALMEDIANAME, 'Nazwa zdjêcia:');
/* 2.0 */define(_GALFILENAME, 'Nazwa pliku:');
/* 2.0 */define(_GALDESCRIPTION, 'Opis:');
/* 2.0 */define(_GALSELECTCATEGORY, 'Wybierz kategoriê:');
/* 2.1 */define(_GALREGISTER2POSTPICS, 'je¶li chcesz wys³aæ nam zdjêcie,<br> prosimy <a href="user.php">zarejestruj siê</a> najpierw!');
/* 2.1 */define(_GALUPLOADMEDIA, 'Wy¶lij zdjêcie');
/* PP  */define(_GALUPLOADMEDIABUTTON, 'Wy¶lij');
/* 2.1 */define(_GALCLICKONCE, 'Kliknij &quot;Upload&quot; tylko raz!');
/* 2.1 */define(_GALMAXSIZEPOST, '*Dopuszczalna wielko¶æ pliku zdjêcia to %s kB');
/* 2.1 */define(_GALPICALREADYEXT, 'Wybrane zdjêcie ju¿ jest!');
/* 2.1 */define(_GALPICNONAME, 'Wpisz nazwê swojego zdjêcia');
/* 2.1 */define(_GALPICNODESC, 'Wpisz opis swojego zdjêcia');
/* 2.1 */define(_GALPICNOSUBMITTER, 'Podpisz siê');
/* 2.1 */define(_GALMEDIARECEIVED, 'Otrzymali¶my proponowane zdjêcie. Dziêki!');
/* 2.1 */define(_GALCHECKFORIT, 'Wkrótce sprawdzimy Twoje zdjêcie');
/* 2.1 */define(_GALPOSTMEDIA, 'Wy¶lij zdjêcie');
/* 2.5.4 */define(_GALNOMEDIA, 'Nie wybrano zdjêcia');
/* 2.5.4 */define(_GALPBUPLOAD, 'Wyst±pi³ problem podczas wysy³ania zdjêcia. Skontaktuj siê z Webmasterem.');

/* 2.7.0 */define(_GALFILENOTFOUND, '¯±dany przez Ciebie plik nie istnieje');

// Forgotten by marsishere
define(_GOBACK, 'Nacisnij guzik [Cofnij] w przegl±darce i popraw dane');

?>