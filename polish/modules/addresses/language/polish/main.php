<?php
// $Id: main.php,v 1.1 2007/02/10 18:55:54 dap997 Exp $
//%%%%%%		Module Name 'Adresses'		%%%%%

define("_MD_THANKSFORINFO","Dzięki za informacje. Postaramy się je szybko zweryfikować.");
define("_MD_THANKSFORHELP","Dzięki za pomoc przy wyczyszczeniu danych.");
define("_MD_FORSECURITY","Dla celów bezpieczeństwa przechowamy przez jakiś czas twoje IP, adres i nazwę użytkownika.");

define("_MD_SEARCHFOR","Szukaj");
define("_MD_ANY","DOWOLNY");
define("_MD_SEARCH","Szukaj");

define("_MD_MAIN","Główna");
define("_MD_SUBMITLINK","Wyślij adres");
define("_MD_SUBMITLINKHEAD","Wpisz do formularza swoje dane");
define("_MD_POPULAR","Popularne");
define("_MD_TOPRATED","Najwyżej ocenione");

define("_MD_NEWTHISWEEK","Dodane w tym tygodniu");
define("_MD_UPTHISWEEK","Zmienione w tym tygodniu");

define("_MD_POPULARITYLTOM","Popularność (od najmniej popularnego)");
define("_MD_POPULARITYMTOL","Popularność (od najpopularniejszego)");
define("_MD_TITLEATOZ","Nazwa (rosnąco)");
define("_MD_TITLEZTOA","Nazwa (malejąco)");
define("_MD_DATEOLD","Data (od najstarszego)");
define("_MD_DATENEW","Data (od najnowszego)");
define("_MD_RATINGLTOH","Ocena (od najniżej ocenionego)");
define("_MD_RATINGHTOL","Ocena (od najwyżej ocenionego)");

define("_MD_NOSHOTS","Logo/baner jest niedostępny");
define("_MD_EDITTHISLINK","Edytuj adres");

define("_MD_DESCRIPTIONC","Opis ");
define("_MD_EMAILC","Email: ");
define("_MD_CATEGORYC","Kategoria");
define("_MD_LASTUPDATEC","Ostatnia zmiana: ");
define("_MD_HITSC","Odsłon: ");
define("_MD_RATINGC","Ocena: ");
define("_MD_ONEVOTE","1 głos");
define("_MD_NUMVOTES","%s głosów");
define("_MD_RATETHISSITE","Oceń adres");
define("_MD_MODIFY","Zmień");
define("_MD_REPORTBROKEN","Wyszukaj popsute linki");
define("_MD_TELLAFRIEND","Poleć znajomemu");

define("_MD_THEREARE","Aktualnie mamy <b>%s</b> adresów w bazie.");
define("_MD_LATESTLIST","Ostatnio dodane");

define("_MD_REQUESTMOD","Zgłoś modyfikację danych adresowych");
define("_MD_LINKID","ID adresu: ");
define("_MD_SITETITLE","Nazwa/Organizacja: ");
define("_MD_SITEURL","Link do strony WWW ");
define("_MD_OPTIONS","Opcje ");
define("_MD_NOTIFYAPPROVE", "Powiadom, kiedy adres zostanie zaakceptowany");
define("_MD_SHOTIMAGE","Zrzut ekranu: ");
define("_MD_SENDREQUEST","Wyślij zgłoszenie");

define("_MD_VOTEAPPRE","Dziekujemy za oddanie głosu.");
define("_MD_THANKURATE","Dziekujemy, że poświęciłeś czas aby ocenić adres na %s.");
define("_MD_VOTEFROMYOU","Każdy wpis pomoże innym użytkownikom, szukającym wartościowych adresów.");
define("_MD_VOTEONCE","Nie głosuj na tem sam adres więcej niż raz.");
define("_MD_RATINGSCALE","Skala od 1 do 10 (1 najgorzej).");
define("_MD_BEOBJECTIVE","BądĄ obiektywny, jeżeli każdy będzie przyznawał dziesiątki, mechanizm oceniania do niczego się nie przyda.");
define("_MD_DONOTVOTE","Nie głosuj na swój własny adres.");
define("_MD_RATEIT","Oceń!");

define("_MD_INTRESTLINK","Interesujący adres na %s");  // %s to adres twojej strony
define("_MD_INTLINKFOUND","Znalazłem interesujący adres na %s");  // %s to adres twojej strony

define("_MD_RECEIVED","Otrzymaliśmy twoje dane adresowe. Dziękujemy!");
define("_MD_WHENAPPROVED","Jeżeli jesteś zarejestrowany, otrzymasz email, kiedy zatwierdzimy twój adres.");
define("_MD_SUBMITONCE","Wyślij swój adres tylko raz.");
define("_MD_ALLPENDING","Wszystkie zgłaszene informacje adresowe są poddawane weryfikacji.");
define("_MD_DONTABUSE","Zarejestrowaliśmy nazwę użytkownika i IP więc nie rób bydła.");
define("_MD_TAKESHOT","Sprawdzimy wysłany przez ciebie adres więc zanim zostanie on dodany do bazy na stałe, może minąć nawet kilka dni.");
define("_MD_BANNERTISE","<b>Twój baner lub logo mogą być przez nas reklamowane. Skontaktuj się z nami w celu uzyskania informacji.</b>"); // Banner advertisement text addresses. You can adjust this.

define("_MD_RANK","Ocena");
define("_MD_CATEGORY","Kategoria");  
define("_MD_HITS","Odsłony");
define("_MD_RATING","Ocena");
define("_MD_VOTE","Głosy");
define("_MD_TOP10","%s Top 10"); // %s is a address category title

define("_MD_SEARCHRESULTS","Szukaj wyników dla: <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","Sortuj:");
define("_MD_TITLE","Nazwa");
define("_MD_DATE","Data");
define("_MD_POPULARITY","Popularność");
define("_MD_CURSORTEDBY","Aktualne sortowanie: %s");
define("_MD_PREVIOUS", "&laquo; Poprzedni"); //addresses
define("_MD_NEXT","Następny");
define("_MD_NOMATCH","Nie znaleziono danych spełniających kryteria");

define("_MD_SUBMIT","Wyślij");
define("_MD_CANCEL","Anuluj");

define("_MD_ALREADYREPORTED","Już wysyłałeś nam zły adres.");
define("_MD_MUSTREGFIRST","Niestety, nie masz uprawnień aby to wykonać .<br />Zarejestruj się!");
define("_MD_NORATING","Nie wybrano oceny.");
define("_MD_CANTVOTEOWN","Nie możesz głosować na swój adres.<br />Wszystkie głosy są rejestrowane i sprawdzane.");
define("_MD_VOTEONCE2","Zagłosuj na zaznaczony adres tylko raz.<br />Wszystkie głosy są rejestrowane i sprawdzane.");

//%%%%%%	Module Name 'Adresses' (Admin)	  %%%%%

define("_MD_WEBLINKSCONF","Konfiguracja adresów");
define("_MD_GENERALSET","Preferencje");
define("_MD_ADDMODDELETE","Dodawaj i zmieniaj adresy i ich kategorie");
define("_MD_LINKSWAITING","Adresy oczekujące na zatwierdzenie");
define("_MD_BROKENREPORTS","Zgłoszenia złych adresów");
define("_MD_MODREQUESTS","Zgłoszenia zmian adresowych");
define("_MD_SUBMITTER","Zgłaszający: ");
define("_MD_VISIT","Odwiedzin");
define("_MD_SHOTMUST","Zrzut ekranu musi być poprawnym plikiem z katalogu %s. Nie wypełniaj, jeżeli nie ma obrazka. Obrazek będzie widoczy tylko w obrębie rozszerzonej informacji adresowej.");
define("_MD_APPROVE","Zaakceptuj");
define("_MD_DELETE","Skasuj");
define("_MD_NOSUBMITTED","Brak zgłoszonych adresów.");
define("_MD_ADDMAIN","Dodaj kategorię główną");
define("_MD_TITLEC","Tytuł: ");
define("_MD_IMGURL","URL Obrazka (opcjonalnie - wysokość obrazka będzie zmnieniona do 50): ");
define("_MD_ADD","Dodaj");
define("_MD_ADDSUB","Dodaj podkategorię");
define("_MD_IN","w");
define("_MD_ADDNEWLINK","Dodaj adres");
define("_MD_MODCAT","Zmień kategorię");
define("_MD_MODLINK","Zmień adres");
define("_MD_MODLINK2","Zmodyfikuj adres: ");
define("_MD_TOTALVOTES","Głosy (razem: %s)");
define("_MD_USERTOTALVOTES","Głosy zarejestrowanych użytkowników (razem: %s)");
define("_MD_ANONTOTALVOTES","Głosy anonimowych użytkowników (razem: %s)");
define("_MD_USER","Użytkownik");
define("_MD_IP","Adres IP");
define("_MD_USERAVG","Średnia ocena");
define("_MD_TOTALRATE","Wszystkie oceny");
define("_MD_NOREGVOTES","Brak głosów od zarejestrowanych użytkowników");
define("_MD_NOUNREGVOTES","Brak głosów od anonimowych użytkowników");
define("_MD_VOTEDELETED","Skasowano głosy.");
define("_MD_NOBROKEN","Nie zgłoszono błędnych adresów.");
define("_MD_IGNOREDESC","Zignoruj (kasuje jedynie <b>raport błędów</b>)");
define("_MD_DELETEDESC","Skasuj (Usuwa <b>wyraportowane adresy</b> i <b>raport</b>.)");
define("_MD_REPORTER","Autor raportu");
define("_MD_LINKSUBMITTER","Osoba, która zgłosiła adres");
define("_MD_IGNORE","Zignoruj");
define("_MD_LINKDELETED","Adres skasowany.");
define("_MD_BROKENDELETED","Skasowany raport błedu.");
define("_MD_USERMODREQ","Zgłoszenia zmiany danych");
define("_MD_ORIGINAL","Wcześniej");
define("_MD_PROPOSED","Propozycja");
define("_MD_OWNER","Właściciel: ");
define("_MD_NOMODREQ","Brak zgłoszeń zmiany danych adresowych.");
define("_MD_DBUPDATED","Modyfikacja danych przebiegła pomyślnie!");
define("_MD_MODREQDELETED","Wykasowano zgłoszenie zmiany.");
define("_MD_IMGURLMAIN","URL obrazka (opcjonalnyny i tylko dla głownej kategorii. Wysokość zostanie zmieniona do 50): ");
define("_MD_PARENT","Kategoria nadrzędna:");
define("_MD_SAVE","Zapisz zmiany");
define("_MD_CATDELETED","Kategoria wykasowana.");
define("_MD_WARNING","OSTRZEŻENIE: Czy jesteś pewien, że chcesz usunąć kategorię wraz z wszystkimi adresami i komentarzami?");
define("_MD_YES","Tak");
define("_MD_NO","Nie");
define("_MD_NEWCATADDED","Dodano nową kategorię!");
define("_MD_ERROREXIST","BŁĄD: Adres który zgłaszasz jest już zarejestrowany w bazie!");
define("_MD_ERRORTITLE","BŁĄD: Musisz wpisać NAZWE/ORGANIZACJĘ!");
define("_MD_ERRORDESC","BŁĄD: Musisz wpisać OPIS!");
define("_MD_NEWLINKADDED","Do bazy dodano nowy adres.");
define("_MD_YOURLINK","Twój adres: %s");
define("_MD_YOUCANBROWSE","Możesz przeczesywać naszą bazę adresów: %s");
define("_MD_HELLO","Cześć %s");
define("_MD_WEAPPROVED","Zaakceptowaliśmy twoje zgłoszenie.");
define("_MD_THANKSSUBMIT","Dziękujemy za zgłoszenie!");
define("_MD_ISAPPROVED","Zaakceptowaliśmy twoje zgłoszenie.");
//added for addresses//
define("_MD_ADRESS","Adres");
define("_MD_ZIP","Kod pocztowy");
define("_MD_CITY","Miasto");
define("_MD_COUNTRY","Kraj");
define("_MD_PHONE","Telefon stacjonarny");
define("_MD_FAX","Faks");
define("_MD_MOBILE","Telefon komórkowy");
define("_MD_CONTEMAIL","Email");
define("_MD_WEBSITE","Strona WWW");
define("_MD_OPENED","Dowolne");
define("_MD_VIEWMORE","Więcej informacji");
define("_MD_PUBLISHED","Opublikowano");
define("_MD_THISCOMESFROM","Ten artykuł pochodzi z %s");
define("_MD_URLFORSTORY","Odnośny URL to:");
define("_MD_PRINT","Drukuj");
define("_MD_BANNERTISE","<b>Możesz zareklamować swój baner. Zgłoś się do nas po dodatkowe informacje.</b>");
define("_MD_MAP","Mapa");
?>
