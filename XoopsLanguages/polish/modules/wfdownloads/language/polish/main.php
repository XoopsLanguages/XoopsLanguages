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
define("_MD_WFD_THANKSFORINFO", " Dzi�kuj� za rejestracj�. Zostaniesz dodany do listy  po zatwierdzeniu przez administratora.");
define("_MD_WFD_ISAPPROVED", " Dzi�kuj� za rejestracj�. Twoje zg�oszenie zosta�o potwierdzone i zostanie dodane do listy.");
define("_MD_WFD_THANKSFORHELP", "Dzi�kuje za pomoc w utrzymaniu integralno�ci tego dzia�u.");
define("_MD_WFD_FORSECURITY", "Ze wzgl�d�w bezpiecze�stwa Twoja nazwa u�ytkownika i numer IP b�d� tymczasowo zachowane.");
define("_MD_WFD_NOPERMISETOLINK", "Nie masz dost�pu do pliku w tej kategorii <br /><br />Wy�lij e-mail do administratora twojej kategorii i poinformuj go<br /><b>: NIE ��CZ Z TYM �R�D�EM!! </b> <br /><br /><b>Definicja s�owa leecher</b> Osoba zbyt leniwa aby podawa� linki do swojego serwera lub kradnie efekty ci�kiej pracy innych ludzi i pr�buje sprawi� aby to wygl�da�o na jego w�asn� prac�. <br /><br /> Tw�j adres IP <b> zosta� zalogowany</b>.");
define("_MD_WFD_DESCRIPTION", "Opis");
define("_MD_WFD_SUBMITCATHEAD", " Prze�lij formularz pobrania");
define("_MD_WFD_MAIN", "HOME");
define("_MD_WFD_POPULAR", "Popularno��");
define("_MD_WFD_NEWTHISWEEK", " Nowo�ci tego tygodnia");
define("_MD_WFD_UPTHISWEEK", " Zaktualizowane w tym tygodniu");
define("_MD_WFD_POPULARITYLTOM", "Popularno�� ( od najmniejszej do najwi�kszej ilo�ci pobra�)");
define("_MD_WFD_POPULARITYMTOL", " Popularno�� (od najwi�kszej do najmniejszej ilo�ci pobra�)");
define("_MD_WFD_TITLEATOZ", " Tytu� (A do Z)");
define("_MD_WFD_TITLEZTOA", "Tytu� (Z to A)");
define("_MD_WFD_DATEOLD", "Sortuj wg daty (najstarsze pliki pierwsze)");
define("_MD_WFD_DATENEW", "Sortuj wg daty (najnowsze pliki pierwsze)");
define("_MD_WFD_RATINGLTOH", "Ocena (od najni�szego do najwy�szego wyniku)");
define("_MD_WFD_RATINGHTOL", "Ocena (od najwy�szego do najni�szego wyniku)");
define("_MD_WFD_DESCRIPTIONC", "Opis ");
define("_MD_WFD_CATEGORYC", "Kategoria: ");
define("_MD_WFD_VERSION", "Wersja");
define("_MD_WFD_SUBMITDATE", "Opublikowane");
define("_MD_WFD_DLTIMES", "Pobra�: %s razy");
define("_MD_WFD_FILESIZE", "Rozmiar pliku");
define("_MD_WFD_SUPPORTEDPLAT", "Platforma");
define("_MD_WFD_HOMEPAGE", "Strona startowa");
define("_MD_WFD_PUBLISHERC", "Publikuj�cy: ");
define("_MD_WFD_RATINGC", "Ocena: ");
define("_MD_WFD_ONEVOTE", "1 g�os");
define("_MD_WFD_NUMVOTES", "%s g�os�w");
define("_MD_WFD_RATETHISFILE", "Liczba g�os�w");
define("_MD_WFD_REVIEWTHISFILE", "Przegl�d recenzji");
define("_MD_WFD_REVIEWS", "Recenzje:");
define("_MD_WFD_DOWNLOADHITS", "Pobrania");
define("_MD_WFD_MODIFY", "Modyfikuj");
define("_MD_WFD_REPORTBROKEN", "Zg�o� b��d");
define("_MD_WFD_BROKENREPORT", "Zg�o� b��dny link");
define("_MD_WFD_SUBMITBROKEN", "Prze�lij");
define("_MD_WFD_BEFORESUBMIT", "Przed przes�aniem b��dnego linku, upewnij si� �e aktualne �r�d�o b��dnego pliku  nie istnieje oraz �e strona nie jest czasowo nieaktywna.");
define("_MD_WFD_TELLAFRIEND", "Pole� znajomym");
define("_MD_WFD_EDIT", "Edytuj");
define("_MD_WFD_THEREARE", "Zostanie wy�wietlona lista <b>%s</b> <i>kategorii</i> i <b>%s</b> <i>pobra�</i>");
define("_MD_WFD_THEREIS", "Istniej�ce <b>%s</b> <i>kategorie</i> i <b>%s</b> <i>pobrania</i> zostan� wy�wietlone");
define("_MD_WFD_LATESTLIST", "Najnowsze listy");
define("_MD_WFD_FILETITLE", "Pobierz tytu�: ");
define("_MD_WFD_DLURL", "Pobierz URL: ");
define("_MD_WFD_HOMEPAGEC", "Strona domowa: ");
define("_MD_WFD_UPLOAD_FILEC", "Dodaj plik: ");
define("_MD_WFD_VERSIONC", "Wersja: ");
define("_MD_WFD_FILESIZEC", "Rozmiar pliku: ");
define("_MD_WFD_NUMBYTES", "%s bajt�w");
define("_MD_WFD_PLATFORMC", "Platforma: ");
define("_MD_WFD_PRICE", "Cena");
define("_MD_WFD_LIMITS", "Ograniczenia");
define("_MD_WFD_DOWNLICENSE", "Licencja");
define("_MD_WFD_NOTSPECIFIED", "Nieokre�lone");
define("_MD_WFD_MIRRORSITE", "Pobierz z  mirrora");
define("_MD_WFD_MIRROR", "Strona z mirrorem");
define("_MD_WFD_PUBLISHER", "Publikuj�cy");
define("_MD_WFD_UPDATEDON", "Zauktalizowane dnia");
define("_MD_WFD_PRICEFREE", "Darmowy");
define("_MD_WFD_VIEWDETAILS", "Zobacz szczeg�y");
define("_MD_WFD_OPTIONS", "Opcje: ");
define("_MD_WFD_NOTIFYAPPROVE", "Powiadom mnie kiedy ten plik zostanie zatwierdzony");
define("_MD_WFD_VOTEAPPRE", "Dzi�kujemy za tw�j g�os.");
define("_MD_WFD_THANKYOU", "Dzi�kujemy za oddanie g�osu na stronie %s");
define("_MD_WFD_VOTEONCE", "Prosz� nie g�osuj na to samo �r�d�o wi�cej ni� raz.");
define("_MD_WFD_RATINGSCALE", "Skala od 1-10  (1- s�abo a 10 - �wietnie)");
define("_MD_WFD_BEOBJECTIVE", "Prosz� o obiektywizm, je�li kto� otrzymuje 1 lub 10, to takie oceny nie s� zbytnio u�yteczne.");
define("_MD_WFD_DONOTVOTE", "Nie g�osuj na w�asne �r�d�a.");
define("_MD_WFD_RATEIT", "Podlicz!");
define("_MD_WFD_INTFILEFOUND", "Tutaj jest �wietny plik do pobranie ze strony %s"); // %s is your site name
define("_MD_WFD_RANK", "Miejsce");
define("_MD_WFD_CATEGORY", "Kategoria");
define("_MD_WFD_HITS", "Pobrania");
define("_MD_WFD_RATING", "Ocena");
define("_MD_WFD_VOTE", "G�osuj");
define("_MD_WFD_SORTBY", "Sortuj wg:");
define("_MD_WFD_TITLE", "Tytu�");
define("_MD_WFD_DATE", "Data");
define("_MD_WFD_POPULARITY", "Popularno��");
define("_MD_WFD_TOPRATED", "Ocena");
define("_MD_WFD_CURSORTBY", " Pliki aktualnie posortowane wg: %s");
define("_MD_WFD_CANCEL", "Anuluj");
define("_MD_WFD_ALREADYREPORTED", "B��dny plik dla tego �r�d�a by� ju� zg�oszony.");
define("_MD_WFD_MUSTREGFIRST", " Niestety nie masz uprawnie� do tej funkcji.<br />Najpierw zaloguj lub zarejestruj si�!");
define("_MD_WFD_NORATING", " Nie wybrano rankingu.");
define("_MD_WFD_CANTVOTEOWN", " Nie mo�esz g�osowa� na w�asne �r�d�a.<br /> Wszystkie g�osy s� logowane i sprawdzane.");
define("_MD_WFD_SUBMITDOWNLOAD", "Wy�lij link do pliku ");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>Wszystkie nowe pobrania s� weryfikowane i mog� pojawia� si� na naszych listach z 24 godzinnym op�nieniem.</li><li>Mamy prawo odm�wi� dodania link�w do pobra� lub zmieni� ich zawarto�� bez zgody wysy�aj�cego.</li></ul>");
define("_MD_WFD_MAINLISTING", "Listy g��wnych kategorii");
define("_MD_WFD_LASTWEEK", "Ostatni tydzie� ");
define("_MD_WFD_LAST30DAYS", "Ostatnie miesi�c");
define("_MD_WFD_1WEEK", "Tydzie�");
define("_MD_WFD_2WEEKS", "Dwa tygodnie");
define("_MD_WFD_30DAYS", "30 Dni");
define("_MD_WFD_SHOW", "Poka�");
define("_MD_WFD_DAYS", "dni");
define("_MD_WFD_NEWDOWNLOADS", "Nowe pobrania");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Wszystkie nowe pobrania");
define("_MD_WFD_DTOTALFORLAST", "Wszystkie nowe pobrania od ostatnich");
define("_MD_WFD_AGREE", "Zgadzam si�");
define("_MD_WFD_DOYOUAGREE", "Czy zgadzasz si� na powy�sze warunki?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Zrzeczenie si�");
define("_MD_WFD_DUPLOADSCRSHOT", "Dodaj zrzut ekranu:");
define("_MD_WFD_RESOURCEID", "�r�d�o id#: ");
define("_MD_WFD_REPORTER", "Autor raportu: ");
define("_MD_WFD_DATEREPORTED", "Data raportu: ");
define("_MD_WFD_RESOURCEREPORTED", "Raportowane b��dne linki");
define("_MD_WFD_BROWSETOTOPIC", "<b>Przeszukuj listy pobra� wg porz�dku alfabetycznego</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Raport potwierdzonych b��d�w: ");
define("_MD_WFD_WEBMASTERCONFIRM", "Raport b��dnych zg�osze�: ");
define("_MD_WFD_DELETE", "Usu�");
define("_MD_WFD_DISPLAYING", "Wy�wietlone przez: ");
define("_MD_WFD_LEGENDTEXTNEW", "Nowe dzisiaj");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "Nowe z trzech dni ");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "Nowe w tym tygodniu");
define("_MD_WFD_LEGENDTEXTNEWLAST", "Powy�ej 1 tygodnia");
define("_MD_WFD_THISFILEDOESNOTEXIST", "B��d: plik nie istnieje");
define("_MD_WFD_BROKENREPORTED", "B��dny plik odnotowany"); // visit define("_MD_WFD_DOWNINPROGRESS", "Pobieranie w toku ");
// visit
define("_MD_WFD_DOWNINPROGRESS", "Pobieranie rozpocz�te");
define("_MD_WFD_DOWNSTARTINSEC", "Pobieranie rozpocznie si� w ci�gu 3 sekund...<b>Prosz� czeka�</b>.");
define("_MD_WFD_DOWNNOTSTART", " Je�li pobieranie si� nie rozpocz�o, ");
define("_MD_WFD_CLICKHERE", "kliknij tutaj!");
define("_MD_WFD_BROKENFILE", "Uszkodzony plik ");
define("_MD_WFD_PLEASEREPORT", "Prosz� przes�a� uszkodzony plik do administratora, ");
// Reviews
define("_MD_WFD_REV_TITLE", "Sprawd� tytu�:");
define("_MD_WFD_REV_RATING", "Sprawd� oceny:");
define("_MD_WFD_REV_DESCRIPTION", "Sprawd�:");
define("_MD_WFD_REV_SUBMITREV", "Prze�lij sprawdzenie");
define("_MD_WFD_REV_SNEWMNAMEDESC", "
Prosz� dok�adnie wype�ni� poni�szy formularz, a my dodamy twoj� recenzj� tak szybko jak to mo�liwe.<br /><br />
Dzi�kuj� za czas po�wi�cony na napisanie opinii. Chcemy da� naszym u�ytkownikom mo�liwo�� szybszego poznania programu.<br /><br />Wszystkie recenzje zostan� przejrzane przez naszego administratora zanim zostan� umieszczone na stronie.
");
define("_MD_WFD_ISNOTAPPROVED", "Twoja opinia musi byc najpierw zatwierdzona przez moderatora.");
define("_MD_WFD_LICENCEC", "Licencja oprogramowania: ");
define("_MD_WFD_LIMITATIONS", "Ograniczenia oprogramowania: ");
define("_MD_WFD_KEYFEATURESC", " Kluczowe w�a�ciwo�ci:<br /><br /><span style='font-weight: normal;'>Oddzielaj ka�de w�a�ciwo�ci ze znakiem |</span>");
define("_MD_WFD_REQUIREMENTSC", "Wymagania systemowe  <br /><br /><span  style='font-weight: normal;'> Oddzielaj ka�de wymagania ze znakiem |</span>");
define("_MD_WFD_HISTORYC", "Historia pobra�:");
define("_MD_WFD_HISTORYD", "Dodaj now� histori�:<br /><br /><span  style='font-weight: normal;'>Data do��czenia b�dzie automatycznie dodana.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "Tytu� strony startowej: ");
define("_MD_WFD_REQUIREMENTS", "Wymagania systemowe:");
define("_MD_WFD_FEATURES", "W�a�ciwo�ci:");
define("_MD_WFD_HISTORY", "Historia pobra�:");
define("_MD_WFD_PRICEC", "Cena:");
define("_MD_WFD_SCREENSHOT", "Obraz ekranu 1:");
define("_MD_WFD_SCREENSHOTCLICK", "Wy�wietl pe�ny obrazek");
define("_MD_WFD_OTHERBYUID", "Inne pliki od: ");
define("_MD_WFD_DOWNTIMES", "Czasy pobierania: ");
define("_MD_WFD_MAINTOTAL", "Wszystkie pliki: ");
define("_MD_WFD_DOWNLOADNOW", "Pobierz teraz");
define("_MD_WFD_PAGES", "<b> Strony </b>");
define("_MD_WFD_REVIEWER", "Recenzenci");
define("_MD_WFD_RATEDRESOURCE", "Pliki ocenione"); //dap
define("_MD_WFD_SUBMITTER", "Wysy�aj�cy");
define("_MD_WFD_REVIEWTITLE", "Recenzja u�ytkownika");
define("_MD_WFD_REVIEWTOTAL", "<b>Recenzji w sumie:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "Recenzje u�ytkownika");
define("_MD_WFD_USERREVIEWS", "Czytaj recenzje u�ytkownika na %s");
define("_MD_WFD_NOUSERREVIEWS", "Napisz recenzje jako pierwszy %s.");
define("_MD_WFD_ERROR", "B��d od�wie�enia bazy danych: Informacja nie zosta�a za�adowana");
define("_MD_WFD_COPYRIGHT", "copyright");
define("_MD_WFD_INFORUM", "Dyskusja na forum");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT"," Nie masz uprawnie� do dodawania plik�w.");
define("_MD_WFD_INFONOSAVEDB"," Informacja nie zosta�a zapisana w bazie danych: <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Najpierw utw�rz �cie�k�");

//
define("_MD_WFD_NEWLAST","Nowi u�ytkownicy z ostatniego tygodnia");
define("_MD_WFD_NEWTHIS","Nowi u�ytkownicy w tym tygodniu");
define("_MD_WFD_THREE","Nowi uzytkownicy z trzech ostatnich dni");
define("_MD_WFD_TODAY","Nowi u�ytkownicy dzisiaj ");
define("_MD_WFD_NO_FILES"," Brak plik�w");

//3.1
define("_MD_WFD_DOWNLOADMINPOSTS", "Musisz zwi�kszy� liczb� swoich post�w<br />aby pobiera� pliki.");
define("_MD_WFD_UPLOAD_FILENAME", "Nazwa pliku: ");
define("_MD_WFD_UPLOAD_FILETYPE", "Typ pliku: ");
define("_MD_WFD_ERROR_CREATEREVIEW", "B��d podczas tworzenia recenzji");
define("_MD_WFD_REVIEW_CATPATH", "�cie�ka kategorii:");
define("_MD_WFD_ADDREVIEW", "Dodaj recenzj�");
define("_MD_WFD_MIRROR_AVAILABLE", "Dost�pne mirrory:");
define("_MD_WFD_MIRROR_CATPATH", "�cie�ka kategorii:");
define("_MD_WFD_MIRROR_FILENAME", "Nazwa pliku:");
define("_MD_WFD_DOWNLOADMIRRORS", "Mirrory");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT", "Nie masz uprawnie� do dodawania mirror�w");
define("_MD_WFD_MIRRORS", "Mirrors:");
define("_MD_WFD_USERMIRRORSTITLE", "Dost�pne mirrory");
define("_MD_WFD_USERMIRRORS", "Poka� dost�pne mirrory dla %s");
define("_MD_WFD_NOUSERMIRRORS", "Dodaj mirror dla %s.");
define("_MD_WFD_TOTALMIRRORS", "Liczba mirror�w:");
define("_MD_WFD_ADDMIRROR", "Dodaj mirror");
define("_MD_WFD_MIRROR_TOTAL", "<b>Razem mirror�w:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE", "Tytu� strony domowej:");
define("_MD_WFD_MIRROR_HOMEURL", "URL strony domowej:<br /><br />Wpisz URL swojej strony.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE", "Wrzu� logo strony:<br /><br />Ma�e logo reprezentuj�ce twoj� stron�.");
define("_MD_WFD_MIRROR_MIRRORIMAGE", "Logo strony:");
define("_MD_WFD_MIRROR_CONTINENT", "Kontynent:");
define("_MD_WFD_MIRROR_LOCATION", "Po�o�enie:<br /><br />np: Pozna�, PL");
define("_MD_WFD_MIRROR_DOWNURL", "URL pliku:<br /><br />Wpisz URL pliku.");
define("_MD_WFD_MIRROR_SUBMITMIRROR", "Dodaj mirror");
define("_MD_WFD_ERROR_CREATEMIRROR", "B��d podczas dodawania mirroru");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC", "Prosz� o wype�nienie poni�szego formularza, dodamy mirrory jak najszybciej.<br /><br />Dzi�kujemy za tw�j wk�ad w dostarczaniu alternatywnego �r�d�a dla tego pliku. Chcemy zapewni� naszym u�ytkownikom mo�liwo�� szybszego znalezienia dobrego oprogramowania.<br /><br />Wszystkie morrory zostan� przejrzane przez webmastera przed zatwierdzeniem.");
define("_MD_WFD_MIRROR_HHOST", "Host");
define("_MD_WFD_MIRROR_HLOCATION", "Po�o�enie");
define("_MD_WFD_MIRROR_HCONTINENT", "Kontynent");
define("_MD_WFD_MIRROR_HDOWNLOAD", "Pobierz");
define("_MD_WFD_MIRROR_OFFLINE", "Host jest offline.");
define("_MD_WFD_MIRROR_ONLINE", "Host jest Online.");
define("_MD_WFD_MIRROR_DISABLED", "Sprawdzanie Hosta wy��czone.");
define("_MD_WFD_CONT1","Afryka");
define("_MD_WFD_CONT2","Antarktyda");
define("_MD_WFD_CONT3","Azja");
define("_MD_WFD_CONT4","Europa");
define("_MD_WFD_CONT5","Ameryka P�nocna");
define("_MD_WFD_CONT6","Ameryka Po�udniowa");
define("_MD_WFD_CONT7","Oceania");

define("_MD_WFD_NOTALLOWEDTOMOD","Nie masz uprawnie� do modyfikowania tego pliku");

//3.2
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Jak� kategori� pliku chcesz doda�?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Szczeg�y pobierania:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "W�asne detale:");
define("_MD_WFD_FFS_BACK", "Powr�t");
define("_MD_WFD_FFS_DOWNLOADTITLE", "Dodawanie pliku '{category}'.");
define("_MD_WFD_SCREENSHOT2", "Obraz ekranu 2:");
define("_MD_WFD_SCREENSHOT3", "Obraz ekranu 3:");
define("_MD_WFD_SCREENSHOT4", "Obraz ekranu 4:");
define("_MD_WFD_LEGENDTEXTRSS", "RSS");
define("_MD_WFD_LEGENDTEXTCATRSS", "RSS Kategorie");
define("_MD_WFD_NEEDLOGINVIEW", "Najpierw musisz si� zalogowa�!");
define("_MD_WFD_BYTES", " B");
define("_MD_WFD_KILOBYTES", " Kb");
define("_MD_WFD_MEGABYTES", " Mb");
define("_MD_WFD_GIGABYTES", " Gb");
define("_MD_WFD_TERRABYTES", " Tb");

//3.2 rc2
define("_MD_WFD_FILENOTEXIST", "B��D: Plik nie istnieje lub nie zosta� znaleziony!");
define("_MD_WFD__MD_WFD_FILENOTOPEN", "B��D: nie mo�na otworzy� pliku!");
define("_MD_WFD_VERSIONTYPES", "Status:");
?>
