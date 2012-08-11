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
define("_MD_WFD_NODOWNLOAD","Ten plik nie istnieje!");

define("_MD_WFD_SUBCATLISTING","Lista kategorii");
define("_MD_WFD_ISADMINNOTICE","Webmaster: Tutaj jest problem z tym obrazem");
define("_MD_WFD_THANKSFORINFO"," Dziêkujê za rejestracjê. Zostaniesz dodany do listy  po zatwierdzeniu przez administratora.");
define("_MD_WFD_ISAPPROVED"," Dziêkujê za rejestracjê. Twoje zg³oszenie zosta³o potwierdzone i zostanie dodane do listy.");
define("_MD_WFD_THANKSFORHELP","Dziêkuje za pomoc w utrzymaniu integralno¶ci tego dzia³u.");
define("_MD_WFD_FORSECURITY","Ze wzglêdów bezpieczeñstwa Twoja nazwa u¿ytkownika i numer IP bêd± tymczasowo zachowane.");
define("_MD_WFD_NOPERMISETOLINK","Nie masz dostêpu do pliku w tej kategorii <br /><br />Wy¶lij e-mail do administratora twojej kategorii i poinformuj go<br /><b>: NIE £·CZ Z TYM ¬RÓD£EM!! </b> <br /><br /><b>Definicja s³owa leecher</b> Osoba zbyt leniwa aby podawaæ linki do swojego serwera lub kradnie efekty ciê¿kiej pracy innych ludzi i próbuje sprawiæ aby to wygl±da³o na jego w³asn± pracê. <br /><br /> Twój adres IP <b> zosta³ zalogowany</b>.");
define("_MD_WFD_DESCRIPTION","Opis");
define("_MD_WFD_SUBMITCATHEAD"," Prze¶lij formularz pobrania");
define("_MD_WFD_MAIN","HOME");
define("_MD_WFD_POPULAR","Popularno¶æ");
define("_MD_WFD_NEWTHISWEEK"," Nowo¶ci tego tygodnia");
define("_MD_WFD_UPTHISWEEK"," Zaktualizowane w tym tygodniu");
define("_MD_WFD_POPULARITYLTOM","Popularno¶æ ( od najmniejszej do najwiêkszej ilo¶ci pobrañ)");
define("_MD_WFD_POPULARITYMTOL"," Popularno¶æ (od najwiêkszej do najmniejszej ilo¶ci pobrañ)");
define("_MD_WFD_TITLEATOZ"," Tytu³ (A do Z)");
define("_MD_WFD_TITLEZTOA","Tytu³ (Z to A)");
define("_MD_WFD_DATEOLD","Sortuj wg daty (najstarsze pliki pierwsze)");
define("_MD_WFD_DATENEW","Sortuj wg daty (najnowsze pliki pierwsze)");
define("_MD_WFD_RATINGLTOH","Ocena (od najni¿szego do najwy¿szego wyniku)");
define("_MD_WFD_RATINGHTOL","Ocena (od najwy¿szego do najni¿szego wyniku)");
define("_MD_WFD_DESCRIPTIONC","Opis ");
define("_MD_WFD_CATEGORYC","Kategoria: ");
define("_MD_WFD_VERSION","Wersja");
define("_MD_WFD_SUBMITDATE","Opublikowane");
define("_MD_WFD_DLTIMES","Pobrañ: %s razy");
define("_MD_WFD_FILESIZE","Rozmiar pliku");
define("_MD_WFD_SUPPORTEDPLAT","Platforma");
define("_MD_WFD_HOMEPAGE","Strona startowa");
define("_MD_WFD_PUBLISHERC","Publikuj±cy: ");
define("_MD_WFD_RATINGC","Ocena: ");
define("_MD_WFD_ONEVOTE","1 g³os");
define("_MD_WFD_NUMVOTES","%s g³osów");
define("_MD_WFD_RATETHISFILE","Liczba g³osów");
define("_MD_WFD_REVIEWTHISFILE","Przegl±d recenzji");
define("_MD_WFD_REVIEWS","Recenzje:");
define("_MD_WFD_DOWNLOADHITS","Pobrania");
define("_MD_WFD_MODIFY","Modyfikuj");
define("_MD_WFD_REPORTBROKEN","Zg³o¶ b³±d");
define("_MD_WFD_BROKENREPORT","Zg³o¶ b³êdny link");
define("_MD_WFD_SUBMITBROKEN","Prze¶lij");
define("_MD_WFD_BEFORESUBMIT","Przed przes³aniem b³êdnego linku, upewnij siê ¿e aktualne ¼ród³o b³êdnego pliku  nie istnieje oraz ¿e strona nie jest czasowo nieaktywna.");
define("_MD_WFD_TELLAFRIEND","Poleæ znajomym");
define("_MD_WFD_EDIT","Edytuj");
define("_MD_WFD_THEREARE","Zostanie wy¶wietlona lista <b>%s</b> <i>kategorii</i> i <b>%s</b> <i>pobrañ</i>");
define("_MD_WFD_THEREIS","Istniej±ce <b>%s</b> <i>kategorie</i> i <b>%s</b> <i>pobrania</i> zostan± wy¶wietlone");
define("_MD_WFD_LATESTLIST","Najnowsze listy");
define("_MD_WFD_FILETITLE","Pobierz tytu³: ");
define("_MD_WFD_DLURL","Pobierz URL: ");
define("_MD_WFD_HOMEPAGEC","Strona domowa: ");
define("_MD_WFD_UPLOAD_FILEC","Dodaj plik: ");
define("_MD_WFD_VERSIONC","Wersja: ");
define("_MD_WFD_FILESIZEC","Rozmiar pliku: ");
define("_MD_WFD_NUMBYTES","%s bajtów");
define("_MD_WFD_PLATFORMC","Platforma: ");
define("_MD_WFD_PRICE","Cena");
define("_MD_WFD_LIMITS","Ograniczenia");
define("_MD_WFD_DOWNLICENSE","Licencja");
define("_MD_WFD_NOTSPECIFIED","Nieokre¶lone");
define("_MD_WFD_MIRRORSITE","Pobierz z  mirrora");
define("_MD_WFD_MIRROR","Strona z mirrorem");
define("_MD_WFD_PUBLISHER","Publikuj±cy");
define("_MD_WFD_UPDATEDON","Zauktalizowane dnia");
define("_MD_WFD_PRICEFREE","Darmowy");
define("_MD_WFD_VIEWDETAILS","Zobacz szczegó³y");
define("_MD_WFD_OPTIONS","Opcje: ");
define("_MD_WFD_NOTIFYAPPROVE","Powiadom mnie kiedy ten plik zostanie zatwierdzony");
define("_MD_WFD_VOTEAPPRE","Dziêkujemy za twój g³os.");
define("_MD_WFD_THANKYOU","Dziêkujemy za oddanie g³osu na stronie %s");
define("_MD_WFD_VOTEONCE","Proszê nie g³osuj na to samo ¼ród³o wiêcej ni¿ raz.");
define("_MD_WFD_RATINGSCALE","Skala od 1-10  (1- s³abo a 10 - ¶wietnie)");
define("_MD_WFD_BEOBJECTIVE","Proszê o obiektywizm, je¶li kto¶ otrzymuje 1 lub 10, to takie oceny nie s± zbytnio u¿yteczne.");
define("_MD_WFD_DONOTVOTE","Nie g³osuj na w³asne ¼ród³a.");
define("_MD_WFD_RATEIT","Podlicz!");
define("_MD_WFD_INTFILEFOUND","Tutaj jest ¶wietny plik do pobranie ze strony %s"); // %s is your site name
define("_MD_WFD_RANK","Miejsce");
define("_MD_WFD_CATEGORY","Kategoria");
define("_MD_WFD_HITS","Pobrania");
define("_MD_WFD_RATING","Ocena");
define("_MD_WFD_VOTE","G³osuj");
define("_MD_WFD_SORTBY","Sortuj wg:");
define("_MD_WFD_TITLE","Tytu³");
define("_MD_WFD_DATE","Data");
define("_MD_WFD_POPULARITY","Popularno¶æ");
define("_MD_WFD_TOPRATED","Ocena");
define("_MD_WFD_CURSORTBY"," Pliki aktualnie posortowane wg: %s");
define("_MD_WFD_CANCEL","Anuluj");
define("_MD_WFD_ALREADYREPORTED","B³êdny plik dla tego ¼ród³a by³ ju¿ zg³oszony.");
define("_MD_WFD_MUSTREGFIRST"," Niestety nie masz uprawnieñ do tej funkcji.<br />Najpierw zaloguj lub zarejestruj siê!");
define("_MD_WFD_NORATING"," Nie wybrano rankingu.");
define("_MD_WFD_CANTVOTEOWN"," Nie mo¿esz g³osowaæ na w³asne ¼ród³a.<br /> Wszystkie g³osy s± logowane i sprawdzane.");
define("_MD_WFD_SUBMITDOWNLOAD","Wy¶lij link do pliku ");
define("_MD_WFD_SUB_SNEWMNAMEDESC","<ul><li>Wszystkie nowe pobrania s± weryfikowane i mog± pojawiaæ siê na naszych listach z 24 godzinnym opó¼nieniem.</li><li>Mamy prawo odmówiæ dodania linków do pobrañ lub zmieniæ ich zawarto¶æ bez zgody wysy³aj±cego.</li></ul>");
define("_MD_WFD_MAINLISTING","Listy g³ównych kategorii");
define("_MD_WFD_LASTWEEK","Ostatni tydzieñ ");
define("_MD_WFD_LAST30DAYS","Ostatnie miesi±c");
define("_MD_WFD_1WEEK","Tydzieñ");
define("_MD_WFD_2WEEKS","Dwa tygodnie");
define("_MD_WFD_30DAYS","30 Dni");
define("_MD_WFD_SHOW","Poka¿");
define("_MD_WFD_DAYS","dni");
define("_MD_WFD_NEWDOWNLOADS","Nowe pobrania");
define("_MD_WFD_TOTALNEWDOWNLOADS","Wszystkie nowe pobrania");
define("_MD_WFD_DTOTALFORLAST","Wszystkie nowe pobrania od ostatnich");
define("_MD_WFD_AGREE","Zgadzam siê");
define("_MD_WFD_DOYOUAGREE","Czy zgadzasz siê na powy¿sze warunki?");
define("_MD_WFD_DISCLAIMERAGREEMENT","Zrzeczenie siê");
define("_MD_WFD_DUPLOADSCRSHOT","Dodaj zrzut ekranu:");
define("_MD_WFD_RESOURCEID","¿ród³o id#: ");
define("_MD_WFD_REPORTER","Autor raportu: ");
define("_MD_WFD_DATEREPORTED","Data raportu: ");
define("_MD_WFD_RESOURCEREPORTED","Raportowane b³êdne linki");
define("_MD_WFD_BROWSETOTOPIC","<b>Przeszukuj listy pobrañ wg porz±dku alfabetycznego</b>");
define("_MD_WFD_WEBMASTERACKNOW","Raport potwierdzonych b³êdów: ");
define("_MD_WFD_WEBMASTERCONFIRM","Raport b³êdnych zg³oszeñ: ");
define("_MD_WFD_DELETE","Usuñ");
define("_MD_WFD_DISPLAYING","Wy¶wietlone przez: ");
define("_MD_WFD_LEGENDTEXTNEW","Nowe dzisiaj");
define("_MD_WFD_LEGENDTEXTNEWTHREE","Nowe z trzech dni ");
define("_MD_WFD_LEGENDTEXTTHISWEEK","Nowe w tym tygodniu");
define("_MD_WFD_LEGENDTEXTNEWLAST","Powy¿ej 1 tygodnia");
define("_MD_WFD_THISFILEDOESNOTEXIST","B³±d: plik nie istnieje");
define("_MD_WFD_BROKENREPORTED","B³êdny plik odnotowany"); // visit define("_MD_WFD_DOWNINPROGRESS","Pobieranie w toku ");
// visit
define("_MD_WFD_DOWNINPROGRESS","Pobieranie rozpoczête");
define("_MD_WFD_DOWNSTARTINSEC","Pobieranie rozpocznie siê w ci±gu 3 sekund...<b>Proszê czekaæ</b>.");
define("_MD_WFD_DOWNNOTSTART"," Je¶li pobieranie siê nie rozpoczê³o, ");
define("_MD_WFD_CLICKHERE","kliknij tutaj!");
define("_MD_WFD_BROKENFILE","Uszkodzony plik ");
define("_MD_WFD_PLEASEREPORT","Proszê przes³aæ uszkodzony plik do administratora, ");
// Reviews
define("_MD_WFD_REV_TITLE","Sprawd¼ tytu³:");
define("_MD_WFD_REV_RATING","Sprawd¼ oceny:");
define("_MD_WFD_REV_DESCRIPTION","Sprawd¼:");
define("_MD_WFD_REV_SUBMITREV","Prze¶lij sprawdzenie");
define("_MD_WFD_REV_SNEWMNAMEDESC","
Proszê dok³adnie wype³niæ poni¿szy formularz, a my dodamy twoj± recenzjê tak szybko jak to mo¿liwe.<br /><br />
Dziêkujê za czas po¶wiêcony na napisanie opinii. Chcemy daæ naszym u¿ytkownikom mo¿liwo¶æ szybszego poznania programu.<br /><br />Wszystkie recenzje zostan± przejrzane przez naszego administratora zanim zostan± umieszczone na stronie.
");
define("_MD_WFD_ISNOTAPPROVED","Twoja opinia musi byc najpierw zatwierdzona przez moderatora.");
define("_MD_WFD_LICENCEC","Licencja oprogramowania: ");
define("_MD_WFD_LIMITATIONS","Ograniczenia oprogramowania: ");
define("_MD_WFD_KEYFEATURESC"," Kluczowe w³a¶ciwo¶ci:<br /><br /><span style='font-weight: normal;'>Oddzielaj ka¿de w³a¶ciwo¶ci ze znakiem |</span>");
define("_MD_WFD_REQUIREMENTSC","Wymagania systemowe  <br /><br /><span  style='font-weight: normal;'> Oddzielaj ka¿de wymagania ze znakiem |</span>");
define("_MD_WFD_HISTORYC","Historia pobrañ:");
define("_MD_WFD_HISTORYD","Dodaj now± historiê:<br /><br /><span  style='font-weight: normal;'>Data do³±czenia bêdzie automatycznie dodana.</span>");
define("_MD_WFD_HOMEPAGETITLEC","Tytu³ strony startowej: ");
define("_MD_WFD_REQUIREMENTS","Wymagania systemowe:");
define("_MD_WFD_FEATURES","W³a¶ciwo¶ci:");
define("_MD_WFD_HISTORY","Historia pobrañ:");
define("_MD_WFD_PRICEC","Cena:");
define("_MD_WFD_SCREENSHOT","Obraz ekranu 1:");
define("_MD_WFD_SCREENSHOTCLICK","Wy¶wietl pe³ny obrazek");
define("_MD_WFD_OTHERBYUID","Inne pliki od: ");
define("_MD_WFD_DOWNTIMES","Czasy pobierania: ");
define("_MD_WFD_MAINTOTAL","Wszystkie pliki: ");
define("_MD_WFD_DOWNLOADNOW","Pobierz teraz");
define("_MD_WFD_PAGES","<b> Strony </b>");
define("_MD_WFD_REVIEWER","Recenzenci");
define("_MD_WFD_RATEDRESOURCE","Pliki ocenione"); //dap
define("_MD_WFD_SUBMITTER","Wysy³aj±cy");
define("_MD_WFD_REVIEWTITLE","Recenzja u¿ytkownika");
define("_MD_WFD_REVIEWTOTAL","<b>Recenzji w sumie:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE","Recenzje u¿ytkownika");
define("_MD_WFD_USERREVIEWS","Czytaj recenzje u¿ytkownika na %s");
define("_MD_WFD_NOUSERREVIEWS","Napisz recenzje jako pierwszy %s.");
define("_MD_WFD_ERROR","B³±d od¶wie¿enia bazy danych: Informacja nie zosta³a za³adowana");
define("_MD_WFD_COPYRIGHT","copyright");
define("_MD_WFD_INFORUM","Dyskusja na forum");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT"," Nie masz uprawnieñ do dodawania plików.");
define("_MD_WFD_INFONOSAVEDB"," Informacja nie zosta³a zapisana w bazie danych: <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Najpierw utwórz ¶cie¿kê");

//
define("_MD_WFD_NEWLAST","Nowi u¿ytkownicy z ostatniego tygodnia");
define("_MD_WFD_NEWTHIS","Nowi u¿ytkownicy w tym tygodniu");
define("_MD_WFD_THREE","Nowi uzytkownicy z trzech ostatnich dni");
define("_MD_WFD_TODAY","Nowi u¿ytkownicy dzisiaj ");
define("_MD_WFD_NO_FILES"," Brak plików");

//3.1
define("_MD_WFD_DOWNLOADMINPOSTS","Musisz zwiêkszyæ liczbê swoich postów<br />aby pobieraæ pliki.");
define("_MD_WFD_UPLOAD_FILENAME","Nazwa pliku: ");
define("_MD_WFD_UPLOAD_FILETYPE","Typ pliku: ");
define("_MD_WFD_ERROR_CREATEREVIEW","B³±d podczas tworzenia recenzji");
define("_MD_WFD_REVIEW_CATPATH","¦cie¿ka kategorii:");
define("_MD_WFD_ADDREVIEW","Dodaj recenzjê");
define("_MD_WFD_MIRROR_AVAILABLE","Dostêpne mirrory:");
define("_MD_WFD_MIRROR_CATPATH","¦cie¿ka kategorii:");
define("_MD_WFD_MIRROR_FILENAME","Nazwa pliku:");
define("_MD_WFD_DOWNLOADMIRRORS","Mirrory");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT","Nie masz uprawnieñ do dodawania mirrorów");
define("_MD_WFD_MIRRORS","Mirrors:");
define("_MD_WFD_USERMIRRORSTITLE","Dostêpne mirrory");
define("_MD_WFD_USERMIRRORS","Poka¿ dostêpne mirrory dla %s");
define("_MD_WFD_NOUSERMIRRORS","Dodaj mirror dla %s.");
define("_MD_WFD_TOTALMIRRORS","Liczba mirrorów:");
define("_MD_WFD_ADDMIRROR","Dodaj mirror");
define("_MD_WFD_MIRROR_TOTAL","<b>Razem mirrorów:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE","Tytu³ strony domowej:");
define("_MD_WFD_MIRROR_HOMEURL","URL strony domowej:<br /><br />Wpisz URL swojej strony.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE","Wrzuæ logo strony:<br /><br />Ma³e logo reprezentuj±ce twoj± stronê.");
define("_MD_WFD_MIRROR_MIRRORIMAGE","Logo strony:");
define("_MD_WFD_MIRROR_CONTINENT","Kontynent:");
define("_MD_WFD_MIRROR_LOCATION","Po³o¿enie:<br /><br />np: Poznañ, PL");
define("_MD_WFD_MIRROR_DOWNURL","URL pliku:<br /><br />Wpisz URL pliku.");
define("_MD_WFD_MIRROR_SUBMITMIRROR","Dodaj mirror");
define("_MD_WFD_ERROR_CREATEMIRROR","B³±d podczas dodawania mirroru");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC","Proszê o wype³nienie poni¿szego formularza, dodamy mirrory jak najszybciej.<br /><br />Dziêkujemy za twój wk³ad w dostarczaniu alternatywnego ¼ród³a dla tego pliku. Chcemy zapewniæ naszym u¿ytkownikom mo¿liwo¶æ szybszego znalezienia dobrego oprogramowania.<br /><br />Wszystkie morrory zostan± przejrzane przez webmastera przed zatwierdzeniem.");
define("_MD_WFD_MIRROR_HHOST","Host");
define("_MD_WFD_MIRROR_HLOCATION","Po³o¿enie");
define("_MD_WFD_MIRROR_HCONTINENT","Kontynent");
define("_MD_WFD_MIRROR_HDOWNLOAD","Pobierz");
define("_MD_WFD_MIRROR_OFFLINE","Host jest offline.");
define("_MD_WFD_MIRROR_ONLINE","Host jest Online.");
define("_MD_WFD_MIRROR_DISABLED","Sprawdzanie Hosta wy³±czone.");
define("_MD_WFD_CONT1","Afryka");
define("_MD_WFD_CONT2","Antarktyda");
define("_MD_WFD_CONT3","Azja");
define("_MD_WFD_CONT4","Europa");
define("_MD_WFD_CONT5","Ameryka Pó³nocna");
define("_MD_WFD_CONT6","Ameryka Po³udniowa");
define("_MD_WFD_CONT7","Oceania");

define("_MD_WFD_NOTALLOWEDTOMOD","Nie masz uprawnieñ do modyfikowania tego pliku");

//3.2
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD","Jak± kategoriê pliku chcesz dodaæ?");
define("_MD_WFD_FFS_DOWNLOADDETAILS","Szczegó³y pobierania:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS","W³asne detale:");
define("_MD_WFD_FFS_BACK","Powrót");
define("_MD_WFD_FFS_DOWNLOADTITLE","Dodawanie pliku '{category}'.");
define("_MD_WFD_SCREENSHOT2","Obraz ekranu 2:");
define("_MD_WFD_SCREENSHOT3","Obraz ekranu 3:");
define("_MD_WFD_SCREENSHOT4","Obraz ekranu 4:");
define("_MD_WFD_LEGENDTEXTRSS","RSS");
define("_MD_WFD_LEGENDTEXTCATRSS","RSS Kategorie");
define("_MD_WFD_NEEDLOGINVIEW","Najpierw musisz siê zalogowaæ!");
define("_MD_WFD_BYTES"," B");
define("_MD_WFD_KILOBYTES"," Kb");
define("_MD_WFD_MEGABYTES"," Mb");
define("_MD_WFD_GIGABYTES"," Gb");
define("_MD_WFD_TERRABYTES"," Tb");

//3.2 rc2
define("_MD_WFD_FILENOTEXIST","B£¡D: Plik nie istnieje lub nie zosta³ znaleziony!");
define("_MD_WFD__MD_WFD_FILENOTOPEN","B£¡D: nie mo¿na otworzyæ pliku!");
define("_MD_WFD_VERSIONTYPES","Status:");
?>
