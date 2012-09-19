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

// Module Info
// The name of this module
define("_MI_WFD_NAME","WF-Downloads");

// A brief description of this module
define("_MI_WFD_DESC"," Tworzy dział download, gdzie użytkownicy mogą: pobierać/dodawać/oceniać pliki.");

// Nazwy bloków dla tego modułu (nie wszystkie moduły mają bloki)
define("_MI_WFD_BNAME1","Ostatnio dodane pliki");
define("_MI_WFD_BNAME2","Najbardziej popularne pliki");

//  Tytuły podkatalogów
define("_MI_WFD_SMNAME1","Dodaj nowy");
define("_MI_WFD_SMNAME2","Najpopularniejsze");
define("_MI_WFD_SMNAME3","Najwyżej oceniane");

// Nazwy ikon menu dla administratora
define("_MI_WFD_BINDEX","Główna strona");
define("_MI_WFD_INDEXPAGE","Zarządzanie stroną główną");
define("_MI_WFD_MCATEGORY","Zarządzanie kategoriami");
define("_MI_WFD_MDOWNLOADS","Zarządzanie plikami");
define("_MI_WFD_MUPLOADS","Dodawanie obrazków");
define("_MI_WFD_MMIMETYPES","Zarządzanie nagłówkami MIME");
define("_MI_WFD_PERMISSIONS","Ustawienia dostępu");
define("_MI_WFD_MVOTEDATA","Głosy");
define("_MI_WFD_REVIEWS","Recenzje");


// Tytuły ikon konfiguracyjnych
define("_MI_WFD_POPULAR', 'Licznik popularności pobrań");
define("_MI_WFD_POPULARDSC', 'Liczba pobrań zanim status pobrań zostanie dodany do popularnych.");

//Pokaż ikony
define("_MI_WFD_ICONDISPLAY","Nowe i popularne pobrania:");
define("_MI_WFD_DISPLAYICONDSC", "Wybierz sposób wyświetlania popularnych i nowych ikon w listach pobrań.");
define("_MI_WFD_DISPLAYICON1", "Wyświetl jako ikony");
define("_MI_WFD_DISPLAYICON2", "Wyświetl jako tekst ");
define("_MI_WFD_DISPLAYICON3", "Nie wyświetlaj");

define("_MI_WFD_DAYSNEW","Nowości:");
define("_MI_WFD_DAYSNEWDSC","Liczba dni podczas których status pobrań będzie wyświetlany jako nowy.");
define("_MI_WFD_DAYSUPDATED","Uaktualnienia pobrań dziennie:");
define("_MI_WFD_DAYSUPDATEDDSC"," Liczba dni podczas których  status pobrań będzie wyświetlany jako uaktualniony.");

define("_MI_WFD_PERPAGE', ' Liczba plików wyświetlanych na stronie ");
define("_MI_WFD_PERPAGEDSC', ' Liczba plików do wyświetlenia w każdej wylistowanej kategorii.");

define("_MI_WFD_USESHOTS', 'Pokazać obrazy zrzutów plików?");
define("_MI_WFD_USESHOTSDSC', 'Wybierz TAK aby wyświetlić zrzut obrazu dla każdej pozycji pobrania ");
define("_MI_WFD_SHOTWIDTH', 'Szerokość wyświetlanego zrzutu");
define("_MI_WFD_SHOTWIDTHDSC', 'Wyświetl szerokość dla zrzutu ekranu ");
define("_MI_WFD_SHOTHEIGHT', ' Wysokość wyświetlanego zrzutu");
define("_MI_WFD_SHOTHEIGHTDSC', ' Wyświetl wysokość dla zrzutu ekranu");
define("_MI_WFD_CHECKHOST', 'Cofnij pozwolenie na linkowanie pobrania (leeching)");
define("_MI_WFD_REFERERS', ' Te strony mogą byc bezpośrednio polinkowane z twoimi plikami <br />Oddzielaj znakiem | ");
define("_MI_WFD_ANONPOST","Uprawnienia anonimowego użytkownika:");
define("_MI_WFD_ANONPOSTDSC","Chcesz zezwolić anonimowym uzytkownikom na dodawanie nowych plików/mirrorów do twojej strony?");
define("_MI_WFD_AUTOAPPROVE","Automatyczna akceptacja dodanych plików/mirrorów");
define("_MI_WFD_AUTOAPPROVEDSC","Zaznacz aby automatycznie akceptować dodane pliki/mirrory bez moderowania");

define("_MI_WFD_MAXFILESIZE"," Dodaj rozmiar (KB)");
define("_MI_WFD_MAXFILESIZEDSC","Maksymalny dozwolony rozmiar pliku do dodania.");
define("_MI_WFD_IMGWIDTH","Dodaj szerokość obrazu ");
define("_MI_WFD_IMGWIDTHDSC","Maksymalna dozwolona szerokość dla dodawanych obrazów");
define("_MI_WFD_IMGHEIGHT","Dodaj wysokość obrazu");
define("_MI_WFD_IMGHEIGHTDSC","Maksymalna dozwolona wysokość dla dodawanych obrazów");

define("_MI_WFD_UPLOADDIR"," Dodaj katalog (nie dodawaj slash)");
define("_MI_WFD_ALLOWSUBMISS"," Uprawnienia użykowników:");
define("_MI_WFD_ALLOWSUBMISSDSC","Zezwalaj użytkownikom na dodawanie nowych plików do pobrania");
define("_MI_WFD_ALLOWUPLOADS"," Dodane pliki użytkownika:");
define("_MI_WFD_ALLOWUPLOADSDSC","Zezwalaj wszystkim użytkownikom na dodawanie plików bezpośrednio na Twoją stronę<br />To tyczy się zarówno plików jak i screenshotów!");
define("_MI_WFD_SCREENSHOTS","Katalog dodania zrzutów ekranowych");
define("_MI_WFD_CATEGORYIMG","Katalog z dodanymi obrazami danej kategorii");
define("_MI_WFD_MAINIMGDIR","Główny katalog obrazów");
define("_MI_WFD_USETHUMBS', 'Używaj miniaturek:");
define("_MI_WFD_USETHUMBSDSC", "Obsługiwane są następujące typy plików: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Section będzie wyświetlać miniatury dla danych plików (kategorii i screenshotów). Wybierz ustawienia: NIE, aby wykorzystać oryginalny obraz jeżeli serwer nie obsługuje tej opcji.</div>");
define("_MI_WFD_DATEFORMAT', 'Format czasu:");
define("_MI_WFD_DATEFORMATDSC', 'Domyślny format czasu dla WF-Downloads:");
define("_MI_WFD_SHOWDISCLAIMER', 'Pokazać zastrzeżenia przed dodaniem pliku przez użytkownika?");
define("_MI_WFD_SHOWDOWNDISCL', 'Pokazać zastrzeżenia przed pobraniem pliku przez użytkownika?");
define("_MI_WFD_DISCLAIMER', ' Wpisz zastrzeżenia dotyczšce dodawania pliku:");
define("_MI_WFD_DOWNDISCLAIMER', 'Wpisz zastrzeżenia tyczšce pobierania:");
define("_MI_WFD_PLATFORM', 'Wpisz platformy:");
define("_MI_WFD_SUBCATS', 'Podkategorie:");
define("_MI_WFD_VERSIONTYPES', 'Status wersji:");
define("_MI_WFD_LICENSE', 'Wpisz licencję:");
define("_MI_WFD_LIMITS', 'Wpisz ograniczenia plików:");

define("_MI_WFD_SUBMITART", "Download Uprawnienia:");
define("_MI_WFD_SUBMITARTDSC", "Zaznacz grupy uprawnione do wysyłania nowych plików.<br />Webmasterzy są automatycznie wybrani!");

define("_MI_WFD_IMGUPDATE", "Aktualizuj miniatury?");
define("_MI_WFD_IMGUPDATEDSC", " Zaznaczone obrazy miniatur będą aktualizowane na każdej stronie - w przeciwnym razie pierwszy obraz miniatury będzie użyty bez względu na aktualizację.<br /><br />");
define("_MI_WFD_QUALITY", "Jakość miniatury:");
define("_MI_WFD_QUALITYDSC", "Najniższa jakość: 0 najwyższa: 100");
define("_MI_WFD_KEEPASPECT", "Zachowaj proporcje obrazu ?");
define("_MI_WFD_KEEPASPECTDSC", "");
define("_MI_WFD_ADMINPAGE", "Licznik plików admina :");
define("_MI_WFD_AMDMINPAGEDSC", "Liczba nowych plików do wyświetlenia w module administratora.");
define("_MI_WFD_ARTICLESSORT", "Domyślny układ pobrań:");
define("_MI_WFD_ARTICLESSORTDSC", "Ustaw domyślny układ dla list pobrań.");
define("_MI_WFD_TITLE", "Tytuł");
define("_MI_WFD_RATING", "Ocena");
define("_MI_WFD_WEIGHT", "Waga") ;
define("_MI_WFD_POPULARITY", "Popularność");
define("_MI_WFD_SUBMITTED2", "Data dodania");
define("_MI_WFD_COPYRIGHT', ' Prawa autorskie:");
define("_MI_WFD_COPYRIGHTDSC', 'Zaznacz opcję wyświetlania noty o prawach autorskich na stronie pobrań.");
// Description of each config items - opis każdej ikony konfirguracji
define("_MI_WFD_PLATFORMDSC', ' Lista dostępnych platform<br />Oddzielaj ze znakiem | WAŻNE: nie zmieniaj tego gdy strona jest on line, dodaj nową do końca listy");
define("_MI_WFD_SUBCATSDSC', 'Wybierz TAK aby wyświetlić podkategorie. Wybór NIE schowa podkategorie na listach");
define("_MI_WFD_LICENSEDSC', 'Lista dostępnych platform <br />Oddzielaj ze znakiem |");

//  Tekst dla komunikatów
define("_MI_WFD_GLOBAL_NOTIFY', 'Ogólny");
define("_MI_WFD_GLOBAL_NOTIFYDSC', 'Ogólne opcje komunikatów dla pobrań.");

define("_MI_WFD_CATEGORY_NOTIFY', 'Kategoria");
define("_MI_WFD_CATEGORY_NOTIFYDSC', 'Opcje komunikatów odnoszących się do bieżącej kategorii pliku.");

define("_MI_WFD_FILE_NOTIFY', 'Plik");
define("_MI_WFD_FILE_NOTIFYDSC', 'Opcje komunikatów odnoszących się do bieżącego pliku.");

define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Nowa kategoria");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Powiadom mnie kiedy zostanie stworzona nowa kategoria plików.");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Otrzymuj komunikat kiedy zostanie stworzona nowa kategoria plików.");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : Nowa kategoria plików ");

define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', ' Żądanie modyfikacji pliku");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', ' Powiadom mnie o każdym żądaniu modyfikacji pliku.");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', ' Otrzymuj powiadomienie kiedy żądanie modyfikacji pliku jest wysłane.");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-powiadomienie: Żądanie modyfikacji pliku");

define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Wysłany uszkodzony plik");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Powiadom mnie o każdym raporcie o uszkodzonym pliku.");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', ' Otrzymuj powiadomienie kiedy zostanie wysłany raport o uszkodzonym pliku.");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-kumunikat: Raport o uszkodzonym pliku");

define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'Plik wysłany");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', ' Powiadom mnie o każdym nowym dodaniu pliku (oczekującym na akceptację).");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Otrzymuj komunikat o dodaniu nowego pliku (oczekującego na akceptację).");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Dodano nowy plik");

define("_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'Nowy plik");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', ' Powiadom mnie  kiedy nowy plik zostaje wysłany.");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Otrzymuj powiadomienie kiedy nowy plik zostaje wysłany.");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik ");

define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'Plik wysłano");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new file is submitted (awaiting approval) to the current category.");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Otrzymuj komunikat o dodaniu nowego pliku (oczekującego na akceptację) do bieżącej kategorii");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik dodany do kategorii ");

define("_MI_WFD_CATEGORY_NEWFILE_NOTIFY', ' Nowy plik");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Powiadom mnie  kiedy nowy plik zostaje wysłany do bieżącej kategorii.");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Otrzymuj powiadomienie kiedy nowy plik zostaje wysłany do bieżącej kategorii.");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik w tej kategorii");

define("_MI_WFD_FILE_APPROVE_NOTIFY', 'Plik zaakceptowany");
define("_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Powiadom mnie kiedy ten plik jest zaakceptowany.");
define("_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Otrzymuj komunikat o akceptacji tego pliku.");
define("_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Plik zaakceptowany");

define("_MI_WFD_AUTHOR_INFO","Informacja o autorze");
define("_MI_WFD_AUTHOR_NAME","Autor");
define("_MI_WFD_AUTHOR_DEVTEAM","Zespół autorski");
define("_MI_WFD_AUTHOR_WEBSITE","Strona internetowa autora");
define("_MI_WFD_AUTHOR_EMAIL"," Email autora");
define("_MI_WFD_AUTHOR_CREDITS","Credits");
define("_MI_WFD_MODULE_INFO","Moduł Informacji o autorze");
define("_MI_WFD_MODULE_STATUS","Status autora");
define("_MI_WFD_MODULE_DEMO","Strona Demo");
define("_MI_WFD_MODULE_SUPPORT","Strona wsparcia technicznego");
define("_MI_WFD_MODULE_BUG","Poinformuj o błędzie w tym module");
define("_MI_WFD_MODULE_FEATURE","Sugeruj nowe ustawienia dla tego modułu");
define("_MI_WFD_MODULE_DISCLAIMER","Odmowa");
define("_MI_WFD_RELEASE","Data publikacji: ");

define("_MI_WFD_MODULE_MAILLIST","WF-Section lista mailingowa");

define("_MI_WFD_MODULE_MAILANNOUNCEMENTS"," Mailingowa lista ogłoszeń");
define("_MI_WFD_MODULE_MAILBUGS"," Mailingowa lista błędów");
define("_MI_WFD_MODULE_MAILFEATURES","Mailingowa lista ustawień");

define("_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC"," bierz najnowsze ogłoszenia z WF-Section.");
define("_MI_WFD_MODULE_MAILBUGSDSC","Śledzenie błędów i dodawanie list mailingowych");
define("_MI_WFD_MODULE_MAILFEATURESDSC"," żądaj nowych ustawień list mailingowych.");


define("_MI_WFD_WARNINGTEXT","THE SOFTWARE IS PROVIDED BY WF-SECTIONS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-SECTIONS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, ABLEMEDIA MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-SECTIONS WEBSITE. IN NO
EVENT WILL ABLEMEDIA BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-SECTIONS HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define("_MI_WFD_AUTHOR_CREDITSTEXT","The WF-Sections Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />
tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish.
<br /><br />And on a personal note, I would like to thank the special girl in my life who I love dearly and who gives me the strength and support to do all of this.
");
define("_MI_WFD_AUTHOR_BUGFIXES","Historia błędów");

define("_MI_WFD_COPYRIGHTIMAGE","Images copyright WF-Project and may only be used with permission");

//3.1
define("_MI_WFD_DOWNLOADMINPOSTS", "Minimalna liczba postów aby móc pobiera");
define("_MI_WFD_DOWNLOADMINPOSTSDSC", "Wpisz minimalną wartość postów wymaganą do pobierania pliku");
define("_MI_WFD_REVIEWANONPOST","Recenzje anonimów:");
define("_MI_WFD_REVIEWANONPOSTDSC","Pozwolić niezarejestrowanym na dodawanie swoich recenzji?");
define("_MI_WFD_MMIRRORS","Mirrory");
define("_MI_WFD_ANONPOST1","Brak");
define("_MI_WFD_ANONPOST2","Tylko podstawowy");
define("_MI_WFD_ANONPOST3","Tylko mirror");
define("_MI_WFD_ANONPOST4","Oba");
define("_MI_WFD_AUTOAPPROVE1","Brak");
define("_MI_WFD_AUTOAPPROVE2","Tylko podstawowy");
define("_MI_WFD_AUTOAPPROVE3","Tylko mirror");
define("_MI_WFD_AUTOAPPROVE4","Oba");
define("_MI_WFD_REVIEWAPPROVE","Automatycznie zatwierdzanie dodanych recenzji");
define("_MI_WFD_REVIEWAPPROVEDSC","Zaznacz, aby zatwierdzać bez moderacji.");
define("_MI_WFD_UPLOADDIRDSC","Katalog uplaodu *MUSI* być ścieżką absolutną!");
define("_MI_WFD_ALLOWSUBMISS1","Brak");
define("_MI_WFD_ALLOWSUBMISS2","Tylko podstawowy");
define("_MI_WFD_ALLOWSUBMISS3","Tylko mirror");
define("_MI_WFD_ALLOWSUBMISS4","Oba");
define("_MI_WFD_MIRROR_USEIMAGES', 'Wyświetlić logo mirrora?"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_USEIMAGESDSC', 'Wybierz TAK, aby pokazywać logo dla każdego mirrora"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGWIDTH', 'Szerokość loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGWIDTHDSC', 'Szerokość wyświetlanego loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGHEIGHT', 'Wysokość loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGHEIGHTDSC', 'Wysykość wyświetlanego loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_AUTOAPPROVE","Aytomatycznie zatwierdzanie dodanych mirrorów");
define("_MI_WFD_MIRROR_AUTOAPPROVEDSC","Wybierz, aby zatwierdzać mirrory bez moderacji.");
define("_MI_WFD_MIRROR_MAXIMGWIDTH","Szerokość uploadowanego logo"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGWIDTHDSC","Maksymalna szerokość loga podczas uploadu"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGHEIGHT","Wysokość uploadowanego logo"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGHEIGHTDSC","Maksymalna wysokość loga podczas uploadu"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_ENABLE","Włącz system mirrorów");
define("_MI_WFD_MIRROR_ENABLEDSC","");
define("_MI_WFD_MIRROR_ENABLEONCHK","Włącz sprawdzanie mirrorów");
define("_MI_WFD_MIRROR_ENABLEONCHKDSC","Włącza sprawdzanie statusu mirrorów<br />To może zwolnić ładowanie twojej strony jeżeli<br />masz wiele mirrorów");
define("_MI_WFD_MIRROR_ALLOWSUBMISS","Mirrory użytkowników:");
define("_MI_WFD_MIRROR_ALLOWSUBMISSDSC","Pozwól uzytkownikom na dodawanie mirrorów");
define("_MI_WFD_MIRROR_MIRRORIMAGES","Katalog z logami"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MIRRORIMAGESDSC","Katalog do uploadu log mirrorów"); // jeszcze nie zaimplementowane

//3.2
define("_MI_WFD_MAXSHOTS', 'Maksymalna liczba screenshotów:");
define("_MI_WFD_MAXSHOTSDSC', 'Liczba uploadowanych screenshotów.");
define("_MI_WFD_ALLOWUPLOADSGROUP","Dodawanie plików:");
define("_MI_WFD_ALLOWUPLOADSGROUPDSC","Wybierz grupy, które będą mogły uploadować pliki.<br />Obejmuje pliki oraz screenshoty!");
define("_MI_WFD_ENABLERSS","Włącz RSS:");
define("_MI_WFD_ENABLERSSDSC","Wybierz, aby uruchomić RSS");
define("_MI_WFD_CAT_IMGWIDTH', 'Szerokość obrazka kategorii");
define("_MI_WFD_CAT_IMGWIDTHDSC', 'Szerokość dla obrazka kategorii");
define("_MI_WFD_CAT_IMGHEIGHT', 'Wysokość obrazka kategorii");
define("_MI_WFD_CAT_IMGHEIGHTDSC', 'Wysokość dla obrazka kategorii");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFY', 'Plik zmodyfikowany");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP', 'Powiadom mnie, gdy ten plik zostanie zmodyfikowny.");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC', 'Otrzymuj powiadomienia, gdy ten plik zostanie zmodyfikowny.");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : plik zmodyfikowny");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY', 'Plik zmodyfikowany");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP', 'Powiadom mnie, gdy plik w tej kategorii zostanie zmodyfikowny.");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC', 'Otrzymuj powiadomienia, gdy plik w tej kategorii zostanie zmodyfikowny.");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : plik zmodyfikowny");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY', 'Plik zmodyfikowany");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP', 'Powiadom mnie, gdy jakikolwiek plik zostanie zmodyfikowny.");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC', 'Otrzymuj powiadomienia, gdy jakikolwiek plik zostanie zmodyfikowny.");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : plik zmodyfikowny");



?>
