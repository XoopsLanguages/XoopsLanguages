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
/* 2.4 */define(_GALPOPULARITY1,'Popularność (od najrzadziej oglądanych)');
/* 2.4 */define(_GALPOPULARITY2,'Popularnoć (od najczęściej oglądanych)');
/* 2.4 */define(_GALASC,'A');
/* 2.4 */define(_GALDESC,'D');
/* 2.4 */define(_GALNAMEAZ,'Nazwa (A to Z)');
/* 2.4 */define(_GALNAMEZA,'Nazwa (Z to A)');
/* 2.4 */define(_GALDATE1,'Data (od najstarszych)');
/* 2.4 */define(_GALDATE2,'Data (od najnowszych)');
/* 2.4 */define(_GALRATING1,'Ranking (od najniżej ocenianych)');
/* 2.4 */define(_GALRATING2,'Ranking (od najwyżej ocenianych)');

// Media Formats
/* 2.5 */define(_GALMEDIAMOV, 'Quicktime Movie');
/* 2.5 */define(_GALMEDIAMPG, 'MPEG Movie');
/* 2.5 */define(_GALMEDIAAVI, 'AVI Movie');
/* 2.5 */define(_GALMEDIAMP3, 'MP3 Audio');
/* 2.5 */define(_GALMEDIAMID, 'MIDI Music');
/* 2.5 */define(_GALMEDIASWF, 'Shockwave Flash');

/* 1.1 */define(_GALHITS, 'Odsłon');
/* 2.0 */define(_GALRATING, 'Oceny');
/* 2.0 */define(_GALVOTES, 'Głosy');

// WebJeff File Manager Messages (fileFunctions.php)
/* 2.5 */define(_GALFILEMOVED, 'Ten plik <b>%s</b>został przeniesiony do katalogu');
/* 2.5 */define(_GALFILEDELETED, "Katalog <b>%s</b> został usunięty.");
/* 2.5 */define(_GALFILEDELETED2, "Plik <b>%s</b> został usunięty.");
/* 2.5 */define(_GALFILEDELETED3, "Plik został usunięty.");
/* 2.5 */define(_GALFILERENAMED, "Musisz wpisać poprawnie nazwę");
/* 2.5 */define(_GALFILERENAMED1, "<b>%s</b> już istnieje");
/* 2.5 */define(_GALFILERENAMED2, "<b>%s</b> został nazwany <b>%s</b>");
/* 2.5 */define(_GALFILECREATED, "Musisz wpisać poprawnie nazwę");
/* 2.5 */define(_GALFILECREATED1, "Katalog już istnieje");
/* 2.5 */define(_GALFILECREATED2, "Katalog <b>%s</b> został utworzony w katalogu");
/* 2.5 */define(_GALFILEUPLOADED, "<br>Błąd podczas transferu!<br> %s");
/* 2.5 */define(_GALFILEUPLOADED1, "Plik <b>%s</b> został załadowany do katalogu <b>%s</b>");
/* 2.6.4*/define (_GALCREATECATERROR, 'Skrypt nie mógł utworzyć katalogu. Sprawdź swoje uprawnienia.');
/* 2.6.4*/define (_GALUPLOADERROR, "Zdjęcie które chcesz wysłać przekracza dopuszczalny rozmiar ustalony w 'Ustawieniach głównych' lub w 'php.ini'.");
/* 2.6.4*/define (_GALUPLOADERROR2, "Wybierz zdjęcie do wysłania.");
/* 2.6.4*/define (_GALUPLOADERROR3, "Skrypt nie mógł zapisać w wyznaczonym katalogu. Sprawdź swoje uprawnienia.");

/* 2.7.3*/define (_GALTYPENOTSUPPORTED, 'Nie możesz wysłać tego pliku. Format nieobsługiwany');

// General
/* 1.1 */define(_GALTOP10, 'TOP 10');
/* 1.1 */define(_GALPAGE, 'Strona');
/* 1.1 */define(_GALNAME, 'Nazwa:');
/* 1.1 */define(_GALPICS, 'zdjęcie(a)');
/* 1.1 */define(_GALNOTE, 'Uwaga: Komentarze są automatycznie logowane. Niektóre wyrażenia są auto-cenzurowane.');
/* 1.1 */define(_GALCOMMENT, 'Komentarz:');
/* 1.1 */define(_GALCOMMENTS, 'komentarz(e)');
/* 1.1 */define(_GALCOMMPOST, 'Wysłane komentarze');
/* 1.1 */define(_GALNOCOMM, "Brak komentarza. Dlaczego nie skomentujesz!? Śmiało!");
/* 1.1 */define(_GALVIEWED, 'Oglądane');
/* 1.1 */define(_GALTIMES, 'czas');
/* 1.1 */define(_GALREGISTER, 'Chcesz skomentować? Najpierw musisz się <a href="user.php">zarejestrować</a>!');
/* 1.1 */define(_GALUNKNOWN, 'Nieznany');
/* 1.1 */define(_GALSIZE, 'Rozmiar');
/* 1.1 */define(_GALDATE, 'Data');
/* 1.1 */define(_GALPOST, 'Post');
/* 2.0 */define(_GALADDED, 'Od');
/* 2.0 */define(_GALMORE, '....');
/* 2.0 */define(_GALSUBMITTER, 'Dodany przez');
/* 2.0 */define(_GALNBCOMMENTS, 'Komentarze');
/* 2.0 */define(_GALMEMBERSRATE, 'Tylko zarejestrowani i zalogowani użytkownicy mogą głosować na to zdjęcie!<br> Możesz zarejestrować się <a href="user.php">tutaj</a>');
/* 2.0 */define(_GALPREV, 'Poprzednie zdjęcie');
/* 2.0 */define(_GALPREVPAGE, 'Poprzednia strona');
/* 2.0 */define(_GALNEXT, 'Następne zdjęcie');
/* 2.0 */define(_GALNEXTPAGE, 'Następna strona');
/* 2.0 */define(_GALHOME, 'Strona główna galerii');
/* 2.0 */define(_GALIMAGES, 'Zdjęcia');
/* 2.0 */define(_GALNEWIMAGES, 'Nowe zdjęcia');
/* 2.0 */define(_GALTOP10HITS, '(Wg obejrzeń)');
/* 2.0 */define(_GALTOP10RATING, '(Wg ocen)');
/* 2.0 */define(_GALTOPPOS, 'Pos.');
/* 2.0 */define(_GALTOPRATING, 'Ocena');
/* 2.0 */define(_GALTOPHITS, 'Obejrzenia');
/* 2.0 */define(_GALTOPVOTES, '#Głosy');
/* 2.0 */define(_GALTOPMEDIA, 'Media');
/* 2.4 */define(_GALNEWMEDIA1, 'Dzisiaj dodano nowe zdjęcie(a)');
/* 2.4 */define(_GALNEWMEDIA2, 'Nowe zdjęcia dodane %d dni temu');
/* 2.4.9 */define(_GALCATMEMBERS,'Aby dostać się do kategorii oznaczonych (*), <a href="user.php">zarejestruj się</a>. To jest bezpłatne');
/* 2.5 */define(_GALALLWORDSAND, 'Wszystkie słowa [AND]');
/* 2.5 */define(_GALALLWORDSOR, 'Dowolne słowa [OR]');
/* 2.5 */define(_GALNOTHINGMATCHSEARCH,'Przykro nam!<br>Nie znaleziono szukanych słów');
/* 2.5.3 */define (_GALDESCRIPTION, "Opis obrazka");
/* 2.5.3 */define (_GALSURE2DELETECOMMENT, "Jesteś pewien że chcesz skasować ten komentarz?");
/* 2.6.3 */define (_GALDOWNLOADMEDIA, "Ściągnij to zdjęcie");
/* 2.6.3 */define (_GALPOSTCARD, "Wyślij to zdjęcie znajomemu/znajomej");
/* 2.6.3 */define (_GALPRINTMEDIA, "Otwórz w osobnym oknie");

/* 3.0 */define(_GALFORMAT, 'Format');
/* 3.0 */define(_GALPOPULARITY, 'Popularnošć');

// Media Upload
/* 2.0 */define(_GALMEDIANAME, 'Nazwa zdjęcia:');
/* 2.0 */define(_GALFILENAME, 'Nazwa pliku:');
/* 2.0 */define(_GALDESCRIPTION, 'Opis:');
/* 2.0 */define(_GALSELECTCATEGORY, 'Wybierz kategorię:');
/* 2.1 */define(_GALREGISTER2POSTPICS, 'jeśli chcesz wysłać nam zdjęcie,<br> prosimy <a href="user.php">zarejestruj się</a> najpierw!');
/* 2.1 */define(_GALUPLOADMEDIA, 'Wyślij zdjęcie');
/* PP  */define(_GALUPLOADMEDIABUTTON, 'Wyślij');
/* 2.1 */define(_GALCLICKONCE, 'Kliknij &quot;Upload&quot; tylko raz!');
/* 2.1 */define(_GALMAXSIZEPOST, '*Dopuszczalna wielkość pliku zdjęcia to %s kB');
/* 2.1 */define(_GALPICALREADYEXT, 'Wybrane zdjęcie już jest!');
/* 2.1 */define(_GALPICNONAME, 'Wpisz nazwę swojego zdjęcia');
/* 2.1 */define(_GALPICNODESC, 'Wpisz opis swojego zdjęcia');
/* 2.1 */define(_GALPICNOSUBMITTER, 'Podpisz się');
/* 2.1 */define(_GALMEDIARECEIVED, 'Otrzymaliśmy proponowane zdjęcie. Dzięki!');
/* 2.1 */define(_GALCHECKFORIT, 'Wkrótce sprawdzimy Twoje zdjęcie');
/* 2.1 */define(_GALPOSTMEDIA, 'Wyślij zdjęcie');
/* 2.5.4 */define (_GALNOMEDIA, 'Nie wybrano zdjęcia');
/* 2.5.4 */define (_GALPBUPLOAD, 'Wystąpił problem podczas wysyłania zdjęcia. Skontaktuj się z Webmasterem.');

/* 2.7.0 */define (_GALFILENOTFOUND, 'Żądany przez Ciebie plik nie istnieje');

// Forgotten by marsishere
define (_GOBACK, 'Nacisnij guzik [Cofnij] w przeglądarce i popraw dane');

?>