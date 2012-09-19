<?php
/**
 * $Id: admin.php,v 1.1 2007/02/10 18:55:42 dap997 Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
   Tlumaczenie: MJM nemo2004 for portal.polhost.net
 *dodatki do wersji 3.02rc1 kurak_bu*/

//Todo - Still to remove redundat defines from this area.
define("_MD_WFD_NODOWNLOAD", "Ten plik nie istnieje!");

define("_MD_WFD_SUBCATLISTING", "Lista kategorii");
define("_MD_WFD_ISADMINNOTICE", "Webmaster: Tutaj jest problem z tym obrazem");
define("_MD_WFD_THANKSFORINFO", " Dziękuję za rejestrację. Zostaniesz dodany do listy  po zatwierdzeniu przez administratora.");
define("_MD_WFD_ISAPPROVED", " Dziękuję za rejestrację. Twoje zgłoszenie zostało potwierdzone i zostanie dodane do listy.");
define("_MD_WFD_THANKSFORHELP", "Dziękuje za pomoc w utrzymaniu integralności tego działu.");
define("_MD_WFD_FORSECURITY", "Ze względów bezpieczeństwa Twoja nazwa użytkownika i numer IP będą tymczasowo zachowane.");
define("_MD_WFD_NOPERMISETOLINK", "Nie masz dostępu do pliku w tej kategorii <br /><br />Wyślij e-mail do administratora twojej kategorii i poinformuj go<br /><b>: NIE ŁˇCZ Z TYM ŹRÓDŁEM!! </b> <br /><br /><b>Definicja słowa leecher</b> Osoba zbyt leniwa aby podawać linki do swojego serwera lub kradnie efekty ciężkiej pracy innych ludzi i próbuje sprawić aby to wyglądało na jego własną pracę. <br /><br /> Twój adres IP <b> został zalogowany</b>.");
define("_MD_WFD_DESCRIPTION", "Opis");
define("_MD_WFD_SUBMITCATHEAD", " Prześlij formularz pobrania");
define("_MD_WFD_MAIN", "HOME");
define("_MD_WFD_POPULAR", "Popularność");
define("_MD_WFD_NEWTHISWEEK", " Nowości tego tygodnia");
define("_MD_WFD_UPTHISWEEK", " Zaktualizowane w tym tygodniu");
define("_MD_WFD_POPULARITYLTOM", "Popularność ( od najmniejszej do największej ilości pobrań)");
define("_MD_WFD_POPULARITYMTOL", " Popularność (od największej do najmniejszej ilości pobrań)");
define("_MD_WFD_TITLEATOZ", " Tytuł (A do Z)");
define("_MD_WFD_TITLEZTOA", "Tytuł (Z to A)");
define("_MD_WFD_DATEOLD", "Sortuj wg daty (najstarsze pliki pierwsze)");
define("_MD_WFD_DATENEW", "Sortuj wg daty (najnowsze pliki pierwsze)");
define("_MD_WFD_RATINGLTOH", "Ocena (od najniższego do najwyższego wyniku)");
define("_MD_WFD_RATINGHTOL", "Ocena (od najwyższego do najniższego wyniku)");
define("_MD_WFD_DESCRIPTIONC", "Opis ");
define("_MD_WFD_CATEGORYC", "Kategoria: ");
define("_MD_WFD_VERSION", "Wersja");
define("_MD_WFD_SUBMITDATE", "Opublikowane");
define("_MD_WFD_DLTIMES", "Pobrań: %s razy");
define("_MD_WFD_FILESIZE", "Rozmiar pliku");
define("_MD_WFD_SUPPORTEDPLAT", "Platforma");
define("_MD_WFD_HOMEPAGE", "Strona startowa");
define("_MD_WFD_PUBLISHERC", "Publikujący: ");
define("_MD_WFD_RATINGC", "Ocena: ");
define("_MD_WFD_ONEVOTE", "1 głos");
define("_MD_WFD_NUMVOTES", "%s głosów");
define("_MD_WFD_RATETHISFILE", "Liczba głosów");
define("_MD_WFD_REVIEWTHISFILE", "Przegląd recenzji");
define("_MD_WFD_REVIEWS", "Recenzje:");
define("_MD_WFD_DOWNLOADHITS", "Pobrania");
define("_MD_WFD_MODIFY", "Modyfikuj");
define("_MD_WFD_REPORTBROKEN", "Zgłoś błąd");
define("_MD_WFD_BROKENREPORT", "Zgłoś błędny link");
define("_MD_WFD_SUBMITBROKEN", "Prześlij");
define("_MD_WFD_BEFORESUBMIT", "Przed przesłaniem błędnego linku, upewnij się że aktualne źródło błędnego pliku  nie istnieje oraz że strona nie jest czasowo nieaktywna.");
define("_MD_WFD_TELLAFRIEND", "Poleć znajomym");
define("_MD_WFD_EDIT", "Edytuj");
define("_MD_WFD_THEREARE", "Zostanie wyświetlona lista <b>%s</b> <i>kategorii</i> i <b>%s</b> <i>pobrań</i>");
define("_MD_WFD_THEREIS", "Istniejące <b>%s</b> <i>kategorie</i> i <b>%s</b> <i>pobrania</i> zostaną wyświetlone");
define("_MD_WFD_LATESTLIST", "Najnowsze listy");
define("_MD_WFD_FILETITLE", "Pobierz tytuł: ");
define("_MD_WFD_DLURL", "Pobierz URL: ");
define("_MD_WFD_HOMEPAGEC", "Strona domowa: ");
define("_MD_WFD_UPLOAD_FILEC", "Dodaj plik: ");
define("_MD_WFD_VERSIONC", "Wersja: ");
define("_MD_WFD_FILESIZEC", "Rozmiar pliku: ");
define("_MD_WFD_NUMBYTES", "%s bajtów");
define("_MD_WFD_PLATFORMC", "Platforma: ");
define("_MD_WFD_PRICE", "Cena");
define("_MD_WFD_LIMITS", "Ograniczenia");
define("_MD_WFD_DOWNLICENSE", "Licencja");
define("_MD_WFD_NOTSPECIFIED", "Nieokreślone");
define("_MD_WFD_MIRRORSITE", "Pobierz z  mirrora");
define("_MD_WFD_MIRROR", "Strona z mirrorem");
define("_MD_WFD_PUBLISHER", "Publikujący");
define("_MD_WFD_UPDATEDON", "Zauktalizowane dnia");
define("_MD_WFD_PRICEFREE", "Darmowy");
define("_MD_WFD_VIEWDETAILS", "Zobacz szczegóły");
define("_MD_WFD_OPTIONS", "Opcje: ");
define("_MD_WFD_NOTIFYAPPROVE", "Powiadom mnie kiedy ten plik zostanie zatwierdzony");
define("_MD_WFD_VOTEAPPRE", "Dziękujemy za twój głos.");
define("_MD_WFD_THANKYOU", "Dziękujemy za oddanie głosu na stronie %s");
define("_MD_WFD_VOTEONCE", "Proszę nie głosuj na to samo źródło więcej niż raz.");
define("_MD_WFD_RATINGSCALE", "Skala od 1-10  (1- słabo a 10 - świetnie)");
define("_MD_WFD_BEOBJECTIVE", "Proszę o obiektywizm, jeśli ktoś otrzymuje 1 lub 10, to takie oceny nie są zbytnio użyteczne.");
define("_MD_WFD_DONOTVOTE", "Nie głosuj na własne źródła.");
define("_MD_WFD_RATEIT", "Podlicz!");
define("_MD_WFD_INTFILEFOUND", "Tutaj jest świetny plik do pobranie ze strony %s"); // %s is your site name
define("_MD_WFD_RANK", "Miejsce");
define("_MD_WFD_CATEGORY", "Kategoria");
define("_MD_WFD_HITS", "Pobrania");
define("_MD_WFD_RATING", "Ocena");
define("_MD_WFD_VOTE", "Głosuj");
define("_MD_WFD_SORTBY", "Sortuj wg:");
define("_MD_WFD_TITLE", "Tytuł");
define("_MD_WFD_DATE", "Data");
define("_MD_WFD_POPULARITY", "Popularność");
define("_MD_WFD_TOPRATED", "Ocena");
define("_MD_WFD_CURSORTBY", " Pliki aktualnie posortowane wg: %s");
define("_MD_WFD_CANCEL", "Anuluj");
define("_MD_WFD_ALREADYREPORTED", "Błędny plik dla tego źródła był już zgłoszony.");
define("_MD_WFD_MUSTREGFIRST", " Niestety nie masz uprawnień do tej funkcji.<br />Najpierw zaloguj lub zarejestruj się!");
define("_MD_WFD_NORATING", " Nie wybrano rankingu.");
define("_MD_WFD_CANTVOTEOWN", " Nie możesz głosować na własne źródła.<br /> Wszystkie głosy są logowane i sprawdzane.");
define("_MD_WFD_SUBMITDOWNLOAD", "Wyślij link do pliku ");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>Wszystkie nowe pobrania są weryfikowane i mogą pojawiać się na naszych listach z 24 godzinnym opóźnieniem.</li><li>Mamy prawo odmówić dodania linków do pobrań lub zmienić ich zawartość bez zgody wysyłającego.</li></ul>");
define("_MD_WFD_MAINLISTING", "Listy głównych kategorii");
define("_MD_WFD_LASTWEEK", "Ostatni tydzień ");
define("_MD_WFD_LAST30DAYS", "Ostatnie miesiąc");
define("_MD_WFD_1WEEK", "Tydzień");
define("_MD_WFD_2WEEKS", "Dwa tygodnie");
define("_MD_WFD_30DAYS", "30 Dni");
define("_MD_WFD_SHOW", "Pokaż");
define("_MD_WFD_DAYS", "dni");
define("_MD_WFD_NEWDOWNLOADS", "Nowe pobrania");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Wszystkie nowe pobrania");
define("_MD_WFD_DTOTALFORLAST", "Wszystkie nowe pobrania od ostatnich");
define("_MD_WFD_AGREE", "Zgadzam się");
define("_MD_WFD_DOYOUAGREE", "Czy zgadzasz się na powyższe warunki?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Zrzeczenie się");
define("_MD_WFD_DUPLOADSCRSHOT", "Dodaj zrzut ekranu:");
define("_MD_WFD_RESOURCEID", "żródło id#: ");
define("_MD_WFD_REPORTER", "Autor raportu: ");
define("_MD_WFD_DATEREPORTED", "Data raportu: ");
define("_MD_WFD_RESOURCEREPORTED", "Raportowane błędne linki");
define("_MD_WFD_BROWSETOTOPIC", "<b>Przeszukuj listy pobrań wg porządku alfabetycznego</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Raport potwierdzonych błędów: ");
define("_MD_WFD_WEBMASTERCONFIRM", "Raport błędnych zgłoszeń: ");
define("_MD_WFD_DELETE", "Usuń");
define("_MD_WFD_DISPLAYING", "Wyświetlone przez: ");
define("_MD_WFD_LEGENDTEXTNEW", "Nowe dzisiaj");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "Nowe z trzech dni ");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "Nowe w tym tygodniu");
define("_MD_WFD_LEGENDTEXTNEWLAST", "Powyżej 1 tygodnia");
define("_MD_WFD_THISFILEDOESNOTEXIST", "Błąd: plik nie istnieje");
define("_MD_WFD_BROKENREPORTED", "Błędny plik odnotowany"); // visit define("_MD_WFD_DOWNINPROGRESS", "Pobieranie w toku ");
// visit
define("_MD_WFD_DOWNINPROGRESS", "Pobieranie rozpoczęte");
define("_MD_WFD_DOWNSTARTINSEC", "Pobieranie rozpocznie się w ciągu 3 sekund...<b>Proszę czekać</b>.");
define("_MD_WFD_DOWNNOTSTART", " Jeśli pobieranie się nie rozpoczęło, ");
define("_MD_WFD_CLICKHERE", "kliknij tutaj!");
define("_MD_WFD_BROKENFILE", "Uszkodzony plik ");
define("_MD_WFD_PLEASEREPORT", "Proszę przesłać uszkodzony plik do administratora, ");
// Reviews
define("_MD_WFD_REV_TITLE", "Sprawdź tytuł:");
define("_MD_WFD_REV_RATING", "Sprawdź oceny:");
define("_MD_WFD_REV_DESCRIPTION", "Sprawdź:");
define("_MD_WFD_REV_SUBMITREV", "Prześlij sprawdzenie");
define("_MD_WFD_REV_SNEWMNAMEDESC", "
Proszę dokładnie wypełnić poniższy formularz, a my dodamy twoją recenzję tak szybko jak to możliwe.<br /><br />
Dziękuję za czas poświęcony na napisanie opinii. Chcemy dać naszym użytkownikom możliwość szybszego poznania programu.<br /><br />Wszystkie recenzje zostaną przejrzane przez naszego administratora zanim zostaną umieszczone na stronie.
");
define("_MD_WFD_ISNOTAPPROVED", "Twoja opinia musi byc najpierw zatwierdzona przez moderatora.");
define("_MD_WFD_LICENCEC", "Licencja oprogramowania: ");
define("_MD_WFD_LIMITATIONS", "Ograniczenia oprogramowania: ");
define("_MD_WFD_KEYFEATURESC", " Kluczowe właściwości:<br /><br /><span style='font-weight: normal;'>Oddzielaj każde właściwości ze znakiem |</span>");
define("_MD_WFD_REQUIREMENTSC", "Wymagania systemowe  <br /><br /><span  style='font-weight: normal;'> Oddzielaj każde wymagania ze znakiem |</span>");
define("_MD_WFD_HISTORYC", "Historia pobrań:");
define("_MD_WFD_HISTORYD", "Dodaj nową historię:<br /><br /><span  style='font-weight: normal;'>Data dołączenia będzie automatycznie dodana.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "Tytuł strony startowej: ");
define("_MD_WFD_REQUIREMENTS", "Wymagania systemowe:");
define("_MD_WFD_FEATURES", "Właściwości:");
define("_MD_WFD_HISTORY", "Historia pobrań:");
define("_MD_WFD_PRICEC", "Cena:");
define("_MD_WFD_SCREENSHOT", "Obraz ekranu 1:");
define("_MD_WFD_SCREENSHOTCLICK", "Wyświetl pełny obrazek");
define("_MD_WFD_OTHERBYUID", "Inne pliki od: ");
define("_MD_WFD_DOWNTIMES", "Czasy pobierania: ");
define("_MD_WFD_MAINTOTAL", "Wszystkie pliki: ");
define("_MD_WFD_DOWNLOADNOW", "Pobierz teraz");
define("_MD_WFD_PAGES", "<b> Strony </b>");
define("_MD_WFD_REVIEWER", "Recenzenci");
define("_MD_WFD_RATEDRESOURCE", "Pliki ocenione"); //dap
define("_MD_WFD_SUBMITTER", "Wysyłający");
define("_MD_WFD_REVIEWTITLE", "Recenzja użytkownika");
define("_MD_WFD_REVIEWTOTAL", "<b>Recenzji w sumie:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "Recenzje użytkownika");
define("_MD_WFD_USERREVIEWS", "Czytaj recenzje użytkownika na %s");
define("_MD_WFD_NOUSERREVIEWS", "Napisz recenzje jako pierwszy %s.");
define("_MD_WFD_ERROR", "Błąd odświeżenia bazy danych: Informacja nie została załadowana");
define("_MD_WFD_COPYRIGHT", "copyright");
define("_MD_WFD_INFORUM", "Dyskusja na forum");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT"," Nie masz uprawnień do dodawania plików.");
define("_MD_WFD_INFONOSAVEDB"," Informacja nie została zapisana w bazie danych: <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Najpierw utwórz ścieżkę");

//
define("_MD_WFD_NEWLAST","Nowi użytkownicy z ostatniego tygodnia");
define("_MD_WFD_NEWTHIS","Nowi użytkownicy w tym tygodniu");
define("_MD_WFD_THREE","Nowi uzytkownicy z trzech ostatnich dni");
define("_MD_WFD_TODAY","Nowi użytkownicy dzisiaj ");
define("_MD_WFD_NO_FILES"," Brak plików");

//3.1
define("_MD_WFD_DOWNLOADMINPOSTS", "Musisz zwiększyć liczbę swoich postów<br />aby pobierać pliki.");
define("_MD_WFD_UPLOAD_FILENAME", "Nazwa pliku: ");
define("_MD_WFD_UPLOAD_FILETYPE", "Typ pliku: ");
define("_MD_WFD_ERROR_CREATEREVIEW", "Błąd podczas tworzenia recenzji");
define("_MD_WFD_REVIEW_CATPATH", "Ścieżka kategorii:");
define("_MD_WFD_ADDREVIEW", "Dodaj recenzję");
define("_MD_WFD_MIRROR_AVAILABLE", "Dostępne mirrory:");
define("_MD_WFD_MIRROR_CATPATH", "Ścieżka kategorii:");
define("_MD_WFD_MIRROR_FILENAME", "Nazwa pliku:");
define("_MD_WFD_DOWNLOADMIRRORS", "Mirrory");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT", "Nie masz uprawnień do dodawania mirrorów");
define("_MD_WFD_MIRRORS", "Mirrors:");
define("_MD_WFD_USERMIRRORSTITLE", "Dostępne mirrory");
define("_MD_WFD_USERMIRRORS", "Pokaż dostępne mirrory dla %s");
define("_MD_WFD_NOUSERMIRRORS", "Dodaj mirror dla %s.");
define("_MD_WFD_TOTALMIRRORS", "Liczba mirrorów:");
define("_MD_WFD_ADDMIRROR", "Dodaj mirror");
define("_MD_WFD_MIRROR_TOTAL", "<b>Razem mirrorów:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE", "Tytuł strony domowej:");
define("_MD_WFD_MIRROR_HOMEURL", "URL strony domowej:<br /><br />Wpisz URL swojej strony.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE", "Wrzuć logo strony:<br /><br />Małe logo reprezentujące twoją stronę.");
define("_MD_WFD_MIRROR_MIRRORIMAGE", "Logo strony:");
define("_MD_WFD_MIRROR_CONTINENT", "Kontynent:");
define("_MD_WFD_MIRROR_LOCATION", "Położenie:<br /><br />np: Poznań, PL");
define("_MD_WFD_MIRROR_DOWNURL", "URL pliku:<br /><br />Wpisz URL pliku.");
define("_MD_WFD_MIRROR_SUBMITMIRROR", "Dodaj mirror");
define("_MD_WFD_ERROR_CREATEMIRROR", "Błąd podczas dodawania mirroru");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC", "Proszę o wypełnienie poniższego formularza, dodamy mirrory jak najszybciej.<br /><br />Dziękujemy za twój wkład w dostarczaniu alternatywnego źródła dla tego pliku. Chcemy zapewnić naszym użytkownikom możliwość szybszego znalezienia dobrego oprogramowania.<br /><br />Wszystkie morrory zostaną przejrzane przez webmastera przed zatwierdzeniem.");
define("_MD_WFD_MIRROR_HHOST", "Host");
define("_MD_WFD_MIRROR_HLOCATION", "Położenie");
define("_MD_WFD_MIRROR_HCONTINENT", "Kontynent");
define("_MD_WFD_MIRROR_HDOWNLOAD", "Pobierz");
define("_MD_WFD_MIRROR_OFFLINE", "Host jest offline.");
define("_MD_WFD_MIRROR_ONLINE", "Host jest Online.");
define("_MD_WFD_MIRROR_DISABLED", "Sprawdzanie Hosta wyłączone.");
define("_MD_WFD_CONT1","Afryka");
define("_MD_WFD_CONT2","Antarktyda");
define("_MD_WFD_CONT3","Azja");
define("_MD_WFD_CONT4","Europa");
define("_MD_WFD_CONT5","Ameryka Północna");
define("_MD_WFD_CONT6","Ameryka Południowa");
define("_MD_WFD_CONT7","Oceania");

define("_MD_WFD_NOTALLOWEDTOMOD","Nie masz uprawnień do modyfikowania tego pliku");

//3.2
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Jaką kategorię pliku chcesz dodać?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Szczegóły pobierania:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Własne detale:");
define("_MD_WFD_FFS_BACK", "Powrót");
define("_MD_WFD_FFS_DOWNLOADTITLE", "Dodawanie pliku '{category}'.");
define("_MD_WFD_SCREENSHOT2", "Obraz ekranu 2:");
define("_MD_WFD_SCREENSHOT3", "Obraz ekranu 3:");
define("_MD_WFD_SCREENSHOT4", "Obraz ekranu 4:");
define("_MD_WFD_LEGENDTEXTRSS", "RSS");
define("_MD_WFD_LEGENDTEXTCATRSS", "RSS Kategorie");
define("_MD_WFD_NEEDLOGINVIEW", "Najpierw musisz się zalogować!");
define("_MD_WFD_BYTES", " B");
define("_MD_WFD_KILOBYTES", " Kb");
define("_MD_WFD_MEGABYTES", " Mb");
define("_MD_WFD_GIGABYTES", " Gb");
define("_MD_WFD_TERRABYTES", " Tb");

//3.2 rc2
define("_MD_WFD_FILENOTEXIST", "BŁĄD: Plik nie istnieje lub nie został znaleziony!");
define("_MD_WFD__MD_WFD_FILENOTOPEN", "BŁĄD: nie można otworzyć pliku!");
define("_MD_WFD_VERSIONTYPES", "Status:");
?>
