<?php
// $Id: main.php,v 1.1 2007/02/10 18:55:24 dap997 Exp $
//%%%%%%		Module Name 'MyLinks'		%%%%%

define("_MD_THANKSFORINFO","Dziękujemy za informację. Wkrótce ją sprawdzimy.");
define("_MD_THANKSFORHELP","Dziękujemy za utrzymywanie integralności tego działu.");
define("_MD_FORSECURITY","Ze względów bezpieczeństwa Twoja nazwa użytkownika oraz adres IP będą tymczasowo przechowywane.");

define("_MD_SEARCHFOR","Szukaj dla");
define("_MD_ANY","Dowolne");
define("_MD_SEARCH","Szukaj");

define("_MD_MAIN","Główna");
define("_MD_SUBMITLINK","Zaproponuj link");
define("_MD_SUBMITLINKHEAD","Zaproponuj formularz linku");
define("_MD_POPULAR","Najbardziej popularne");
define("_MD_TOPRATED","Najwyżej oceniane");

define("_MD_NEWTHISWEEK","Nowe w tym tygodniu");
define("_MD_UPTHISWEEK","Zaktualizowane w tym tygodniu");

define("_MD_POPULARITYLTOM","Popularność (od najmniejszej do największej liczby odwiedzin)");
define("_MD_POPULARITYMTOL","Popularność (od największej do najmniejszej liczby odwiedzin)");
define("_MD_TITLEATOZ","Nazwa (od A do Z)");
define("_MD_TITLEZTOA","Nazwa (od Z do A)");
define("_MD_DATEOLD","Data (Najpierw najstarsze pliki)");
define("_MD_DATENEW","Data (Najpierw najnowsze pliki)");
define("_MD_RATINGLTOH","Oceny (od najniższego wyniku do najwyższego)");
define("_MD_RATINGHTOL","Oceny (od najwyższego wyniku do najniższego)");

define("_MD_NOSHOTS","Nie ma podglądu");
define("_MD_EDITTHISLINK","Edytuj ten link");

define("_MD_DESCRIPTIONC","Opis: ");
define("_MD_EMAILC","E-mail: ");
define("_MD_CATEGORYC","Kategoria: ");
define("_MD_LASTUPDATEC","Ostatnia aktualizacja linku: ");
define("_MD_HITSC","Odsłon: ");
define("_MD_RATINGC","Oceny: ");
define("_MD_ONEVOTE","1 głos");
define("_MD_NUMVOTES","%s głosów");
define("_MD_RATETHISSITE","Oceń tą stronę");
define("_MD_MODIFY","Modyfikuj");
define("_MD_REPORTBROKEN","Zgłoś niepoprawny link");
define("_MD_TELLAFRIEND","Powiadom znajomego");

define("_MD_THEREARE","Jest już <b>%s</b> adresów w naszej bazie");
define("_MD_LATESTLIST","Ostatnio dodane");

define("_MD_REQUESTMOD","Prośba modyfikacji linku");
define("_MD_LINKID","ID linku: ");
define("_MD_SITETITLE","Nazwa strony: ");
define("_MD_SITEURL","Adres strony: ");
define("_MD_OPTIONS","Opcje: ");
define("_MD_NOTIFYAPPROVE", "Powiadom mnie kiedy link bedzie zatwierdzony");
define("_MD_SHOTIMAGE","Wygląd: ");
define("_MD_SENDREQUEST","Wyślij prośbę");

define("_MD_VOTEAPPRE","Twój głos jest dla nas ważny.");
define("_MD_THANKURATE","Dziękujemy za poświęcenie czasu na oddanie głosu na tą stronę tutaj na %s.");
define("_MD_VOTEFROMYOU","Dane od użytkowników takich jak Ty pomogą innym odwiedzającym zdecydować się który link wybrać.");
define("_MD_VOTEONCE","Prosimy nie głosować na ten sam plik więcej niż jednokrotnie.");
define("_MD_RATINGSCALE","Skala ocen jest od 1 do 10, gdzie 1 oznacza iż strona jest kiepska a 10 - wyśmienita.");
define("_MD_BEOBJECTIVE","Prosimy o obiektywizm, jeśli każdy będzie dawał 1 lub 10, oceny nie będą zbytnio użyteczne.");
define("_MD_DONOTVOTE","Nie głosuj na link który sam dodałeś.");
define("_MD_RATEIT","Oceń!");

define("_MD_INTRESTLINK","Interesujący link na %s");  // %s is your site name
define("_MD_INTLINKFOUND","Znalazłem interesującą stronę do której link jest na %s");  // %s is your site name

define("_MD_RECEIVED","Otrzymaliśmy Twoją informację o stronie. Dzięki!");
define("_MD_WHENAPPROVED","Otrzymasz e-mail kiedy Twój link zostanie zatwierdzony.");
define("_MD_SUBMITONCE","Dodaj swój link tylko raz.");
define("_MD_ALLPENDING","Wszystkie linki podlegają weryfikacji przed dodaniem.");
define("_MD_DONTABUSE","Nazwa użytkownika oraz adres IP są zapisywane, więc prosimy nie atakować systemu.");
define("_MD_TAKESHOT","Obejrzymy stronę i może to potrwać kilka dni zanim Twój link zostanie dodany do naszej bazy.");

define("_MD_RANK","Poz.");
define("_MD_CATEGORY","Kategoria");
define("_MD_HITS","Odsłony");
define("_MD_RATING","Oceny");
define("_MD_VOTE","Głosy");
define("_MD_TOP10","Najlepsze 10 stron z kategori: %s "); // %s is a link category title

define("_MD_SEARCHRESULTS","Wyniki wyszukiwania dla <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","Sortuj w/g:");
define("_MD_TITLE","nazwy");
define("_MD_DATE","daty");
define("_MD_POPULARITY","popularności");
define("_MD_CURSORTEDBY","Linki są aktualnie posortowane w/g %s");
define("_MD_PREVIOUS","Poprzedni");
define("_MD_NEXT","Następny");
define("_MD_NOMATCH","Nie znaleziono wyników odpowiadających Twojemu zapytaniu");

define("_MD_SUBMIT","Wyślij");
define("_MD_CANCEL","Anuluj");

define("_MD_ALREADYREPORTED","Już poinformowałeś o złym linku.");
define("_MD_MUSTREGFIRST","Sorry, nie masz pozwolenia dla wykonania tej akcji.<br>Prosimy najpierw się zalogować lub zarejestrować!");
define("_MD_NORATING","Nie wybrano oceny.");
define("_MD_CANTVOTEOWN","Nie możesz głosować na link który sam dodałeś.<br>Wszystkie głosy są logowane i przeglądane.");
define("_MD_VOTEONCE2","Głosuj na wybrany link tylko raz.<br>Wszystkie głosy są logowane i sprawdzane.");

//%%%%%%	Module Name 'MyLinks' (Admin)	  %%%%%

define("_MD_WEBLINKSCONF","Konfiguracja linków");
define("_MD_GENERALSET","Ustawienia główne linków");
define("_MD_ADDMODDELETE","Dodaj, zmień lub usuń kategorie/linki");
define("_MD_LINKSWAITING","Linki oczekujące na sprawdzenie");
define("_MD_BROKENREPORTS","Raport złych linków");
define("_MD_MODREQUESTS","Prośba o zmianę");
define("_MD_SUBMITTER","Wysyłający: ");
define("_MD_VISIT","Odwiedź");
define("_MD_SHOTMUST","Obrazek musi być poprawnym plikiem w katalogu %s (np. shot.gif). Pozostaw pole pustym jeśli nie chcesz dodawać pliku.");
define("_MD_APPROVE","Zatwierdź");
define("_MD_DELETE","Usuń");
define("_MD_NOSUBMITTED","Nie ma nowych linków do dodania.");
define("_MD_ADDMAIN","Dodaj główną kategorię");
define("_MD_TITLEC","Nazwa: ");
define("_MD_IMGURL","Ścieżka do obrazka (wysokość obrazka zostanie zmieniona do 50 pikseli): ");
define("_MD_ADD","Dodaj");
define("_MD_ADDSUB","Dodaj SUB-Kategorię");
define("_MD_IN","w");
define("_MD_ADDNEWLINK","Dodaj nowy link");
define("_MD_MODCAT","Modyfikuj kategorię");
define("_MD_MODLINK","Modyfikuj link");
define("_MD_TOTALVOTES","Głosy (razem głosów: %s)");
define("_MD_USERTOTALVOTES","Głosy użytkowników zarejestrowanych (razem głosów: %s)");
define("_MD_ANONTOTALVOTES","Głosy użytkowników anonimowych (razem głosów: %s)");
define("_MD_USER","Użytkownik");
define("_MD_IP","Adres IP");
define("_MD_USERAVG","Ocena użytkownika");
define("_MD_TOTALRATE","Ilość ocen");
define("_MD_NOREGVOTES","Brak ocen od użytkowników zarejestrowanych");
define("_MD_NOUNREGVOTES","Brak ocen od użytkowników niezarejestrowanych");
define("_MD_VOTEDELETED","Głosy usunięte.");
define("_MD_NOBROKEN","Nie zgłoszono niedziałających linków.");
define("_MD_IGNOREDESC","Ignoruj (ignoruje zgłoszenia i tylko usuwa <b>raporty dot. niedziałającego linku</b>.)");
define("_MD_DELETEDESC","Usuwaj (usuwa <b>zgłoszenia linku</b> oraz <b>raporty dot. niedziałającego linku</b>.)");
define("_MD_REPORTER","Wysyłanie raportów");
define("_MD_LINKSUBMITTER","Dodający link");
define("_MD_IGNORE","Ignoruj");
define("_MD_LINKDELETED","Link usunięty.");
define("_MD_BROKENDELETED","Raport dot. niedziałającego linku został usunięty.");
define("_MD_USERMODREQ","Prośba modyfikacji");
define("_MD_ORIGINAL","Oryginalny");
define("_MD_PROPOSED","Proponowany");
define("_MD_OWNER","Właściciel: ");
define("_MD_NOMODREQ","Brak prośby modyfikacji.");
define("_MD_DBUPDATED","Baza danych została zaktualizowana!");
define("_MD_MODREQDELETED","Prośba modyfikacji została usunięta.");
define("_MD_IMGURLMAIN","Ścieżka do obrazka (OPCJONALNIE. Szerokość obrazka zostanie zmieniona na 50 pikseli): ");
define("_MD_PARENT","Kategoria główna:");
define("_MD_SAVE","Zapisz zmiany");
define("_MD_CATDELETED","Kategoria usunięta.");
define("_MD_WARNING","OSTRZEŻENIE: Jesteś pewien, że chcesz usunąć tą kategorię oraz wszystkie linki i komentarze jej dotyczące?");
define("_MD_YES","Tak");
define("_MD_NO","Nie");
define("_MD_NEWCATADDED","Nowa kategoria została dodana!");
define("_MD_ERROREXIST","BŁĄD: strona którą podałeś już jest w naszej bazie!");
define("_MD_ERRORTITLE","BŁĄD: musisz podać NAZWĘ!");
define("_MD_ERRORDESC","BŁĄD: musisz podać OPIS!");
define("_MD_NEWLINKADDED","Nowy link został dodany do bazy.");
define("_MD_YOURLINK","Twój adres strony jest na %s");
define("_MD_YOUCANBROWSE","Możesz przeglądać wszystkie linki na %s");
define("_MD_HELLO","Witaj %s");
define("_MD_WEAPPROVED","Zatwierdziliśmy prośbę dodania Twojego linku do naszego działu linków.");
define("_MD_THANKSSUBMIT","Dziękujemy za dodanie!");
?>