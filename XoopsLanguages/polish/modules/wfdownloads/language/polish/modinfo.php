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
define("_MI_WFD_DESC"," Tworzy dzia� download, gdzie u�ytkownicy mog�: pobiera�/dodawa�/ocenia� pliki.");

// Nazwy blok�w dla tego modu�u (nie wszystkie modu�y maj� bloki)
define("_MI_WFD_BNAME1","Ostatnio dodane pliki");
define("_MI_WFD_BNAME2","Najbardziej popularne pliki");

//  Tytu�y podkatalog�w
define("_MI_WFD_SMNAME1","Dodaj nowy");
define("_MI_WFD_SMNAME2","Najpopularniejsze");
define("_MI_WFD_SMNAME3","Najwy�ej oceniane");

// Nazwy ikon menu dla administratora
define("_MI_WFD_BINDEX","G��wna strona");
define("_MI_WFD_INDEXPAGE","Zarz�dzanie stron� g��wn�");
define("_MI_WFD_MCATEGORY","Zarz�dzanie kategoriami");
define("_MI_WFD_MDOWNLOADS","Zarz�dzanie plikami");
define("_MI_WFD_MUPLOADS","Dodawanie obrazk�w");
define("_MI_WFD_MMIMETYPES","Zarz�dzanie nag��wkami MIME");
define("_MI_WFD_PERMISSIONS","Ustawienia dost�pu");
define("_MI_WFD_MVOTEDATA","G�osy");
define("_MI_WFD_REVIEWS","Recenzje");


// Tytu�y ikon konfiguracyjnych
define("_MI_WFD_POPULAR', 'Licznik popularno�ci pobra�");
define("_MI_WFD_POPULARDSC', 'Liczba pobra� zanim status pobra� zostanie dodany do popularnych.");

//Poka� ikony
define("_MI_WFD_ICONDISPLAY","Nowe i popularne pobrania:");
define("_MI_WFD_DISPLAYICONDSC", "Wybierz spos�b wy�wietlania popularnych i nowych ikon w listach pobra�.");
define("_MI_WFD_DISPLAYICON1", "Wy�wietl jako ikony");
define("_MI_WFD_DISPLAYICON2", "Wy�wietl jako tekst ");
define("_MI_WFD_DISPLAYICON3", "Nie wy�wietlaj");

define("_MI_WFD_DAYSNEW","Nowo�ci:");
define("_MI_WFD_DAYSNEWDSC","Liczba dni podczas kt�rych status pobra� b�dzie wy�wietlany jako nowy.");
define("_MI_WFD_DAYSUPDATED","Uaktualnienia pobra� dziennie:");
define("_MI_WFD_DAYSUPDATEDDSC"," Liczba dni podczas kt�rych  status pobra� b�dzie wy�wietlany jako uaktualniony.");

define("_MI_WFD_PERPAGE', ' Liczba plik�w wy�wietlanych na stronie ");
define("_MI_WFD_PERPAGEDSC', ' Liczba plik�w do wy�wietlenia w ka�dej wylistowanej kategorii.");

define("_MI_WFD_USESHOTS', 'Pokaza� obrazy zrzut�w plik�w?");
define("_MI_WFD_USESHOTSDSC', 'Wybierz TAK aby wy�wietli� zrzut obrazu dla ka�dej pozycji pobrania ");
define("_MI_WFD_SHOTWIDTH', 'Szeroko�� wy�wietlanego zrzutu");
define("_MI_WFD_SHOTWIDTHDSC', 'Wy�wietl szeroko�� dla zrzutu ekranu ");
define("_MI_WFD_SHOTHEIGHT', ' Wysoko�� wy�wietlanego zrzutu");
define("_MI_WFD_SHOTHEIGHTDSC', ' Wy�wietl wysoko�� dla zrzutu ekranu");
define("_MI_WFD_CHECKHOST', 'Cofnij pozwolenie na linkowanie pobrania (leeching)");
define("_MI_WFD_REFERERS', ' Te strony mog� byc bezpo�rednio polinkowane z twoimi plikami <br />Oddzielaj znakiem | ");
define("_MI_WFD_ANONPOST","Uprawnienia anonimowego u�ytkownika:");
define("_MI_WFD_ANONPOSTDSC","Chcesz zezwoli� anonimowym uzytkownikom na dodawanie nowych plik�w/mirror�w do twojej strony?");
define("_MI_WFD_AUTOAPPROVE","Automatyczna akceptacja dodanych plik�w/mirror�w");
define("_MI_WFD_AUTOAPPROVEDSC","Zaznacz aby automatycznie akceptowa� dodane pliki/mirrory bez moderowania");

define("_MI_WFD_MAXFILESIZE"," Dodaj rozmiar (KB)");
define("_MI_WFD_MAXFILESIZEDSC","Maksymalny dozwolony rozmiar pliku do dodania.");
define("_MI_WFD_IMGWIDTH","Dodaj szeroko�� obrazu ");
define("_MI_WFD_IMGWIDTHDSC","Maksymalna dozwolona szeroko�� dla dodawanych obraz�w");
define("_MI_WFD_IMGHEIGHT","Dodaj wysoko�� obrazu");
define("_MI_WFD_IMGHEIGHTDSC","Maksymalna dozwolona wysoko�� dla dodawanych obraz�w");

define("_MI_WFD_UPLOADDIR"," Dodaj katalog (nie dodawaj slash)");
define("_MI_WFD_ALLOWSUBMISS"," Uprawnienia u�ykownik�w:");
define("_MI_WFD_ALLOWSUBMISSDSC","Zezwalaj u�ytkownikom na dodawanie nowych plik�w do pobrania");
define("_MI_WFD_ALLOWUPLOADS"," Dodane pliki u�ytkownika:");
define("_MI_WFD_ALLOWUPLOADSDSC","Zezwalaj wszystkim u�ytkownikom na dodawanie plik�w bezpo�rednio na Twoj� stron�<br />To tyczy si� zar�wno plik�w jak i screenshot�w!");
define("_MI_WFD_SCREENSHOTS","Katalog dodania zrzut�w ekranowych");
define("_MI_WFD_CATEGORYIMG","Katalog z dodanymi obrazami danej kategorii");
define("_MI_WFD_MAINIMGDIR","G��wny katalog obraz�w");
define("_MI_WFD_USETHUMBS', 'U�ywaj miniaturek:");
define("_MI_WFD_USETHUMBSDSC", "Obs�ugiwane s� nast�puj�ce typy plik�w: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Section b�dzie wy�wietla� miniatury dla danych plik�w (kategorii i screenshot�w). Wybierz ustawienia: NIE, aby wykorzysta� oryginalny obraz je�eli serwer nie obs�uguje tej opcji.</div>");
define("_MI_WFD_DATEFORMAT', 'Format czasu:");
define("_MI_WFD_DATEFORMATDSC', 'Domy�lny format czasu dla WF-Downloads:");
define("_MI_WFD_SHOWDISCLAIMER', 'Pokaza� zastrze�enia przed dodaniem pliku przez u�ytkownika?");
define("_MI_WFD_SHOWDOWNDISCL', 'Pokaza� zastrze�enia przed pobraniem pliku przez u�ytkownika?");
define("_MI_WFD_DISCLAIMER', ' Wpisz zastrze�enia dotycz�ce dodawania pliku:");
define("_MI_WFD_DOWNDISCLAIMER', 'Wpisz zastrze�enia tycz�ce pobierania:");
define("_MI_WFD_PLATFORM', 'Wpisz platformy:");
define("_MI_WFD_SUBCATS', 'Podkategorie:");
define("_MI_WFD_VERSIONTYPES', 'Status wersji:");
define("_MI_WFD_LICENSE', 'Wpisz licencj�:");
define("_MI_WFD_LIMITS', 'Wpisz ograniczenia plik�w:");

define("_MI_WFD_SUBMITART", "Download Uprawnienia:");
define("_MI_WFD_SUBMITARTDSC", "Zaznacz grupy uprawnione do wysy�ania nowych plik�w.<br />Webmasterzy s� automatycznie wybrani!");

define("_MI_WFD_IMGUPDATE", "Aktualizuj miniatury?");
define("_MI_WFD_IMGUPDATEDSC", " Zaznaczone obrazy miniatur b�d� aktualizowane na ka�dej stronie - w przeciwnym razie pierwszy obraz miniatury b�dzie u�yty bez wzgl�du na aktualizacj�.<br /><br />");
define("_MI_WFD_QUALITY", "Jako�� miniatury:");
define("_MI_WFD_QUALITYDSC", "Najni�sza jako��: 0 najwy�sza: 100");
define("_MI_WFD_KEEPASPECT", "Zachowaj proporcje obrazu ?");
define("_MI_WFD_KEEPASPECTDSC", "");
define("_MI_WFD_ADMINPAGE", "Licznik plik�w admina :");
define("_MI_WFD_AMDMINPAGEDSC", "Liczba nowych plik�w do wy�wietlenia w module administratora.");
define("_MI_WFD_ARTICLESSORT", "Domy�lny uk�ad pobra�:");
define("_MI_WFD_ARTICLESSORTDSC", "Ustaw domy�lny uk�ad dla list pobra�.");
define("_MI_WFD_TITLE", "Tytu�");
define("_MI_WFD_RATING", "Ocena");
define("_MI_WFD_WEIGHT", "Waga") ;
define("_MI_WFD_POPULARITY", "Popularno��");
define("_MI_WFD_SUBMITTED2", "Data dodania");
define("_MI_WFD_COPYRIGHT', ' Prawa autorskie:");
define("_MI_WFD_COPYRIGHTDSC', 'Zaznacz opcj� wy�wietlania noty o prawach autorskich na stronie pobra�.");
// Description of each config items - opis ka�dej ikony konfirguracji
define("_MI_WFD_PLATFORMDSC', ' Lista dost�pnych platform<br />Oddzielaj ze znakiem | WA�NE: nie zmieniaj tego gdy strona jest on line, dodaj now� do ko�ca listy");
define("_MI_WFD_SUBCATSDSC', 'Wybierz TAK aby wy�wietli� podkategorie. Wyb�r NIE schowa podkategorie na listach");
define("_MI_WFD_LICENSEDSC', 'Lista dost�pnych platform <br />Oddzielaj ze znakiem |");

//  Tekst dla komunikat�w
define("_MI_WFD_GLOBAL_NOTIFY', 'Og�lny");
define("_MI_WFD_GLOBAL_NOTIFYDSC', 'Og�lne opcje komunikat�w dla pobra�.");

define("_MI_WFD_CATEGORY_NOTIFY', 'Kategoria");
define("_MI_WFD_CATEGORY_NOTIFYDSC', 'Opcje komunikat�w odnosz�cych si� do bie��cej kategorii pliku.");

define("_MI_WFD_FILE_NOTIFY', 'Plik");
define("_MI_WFD_FILE_NOTIFYDSC', 'Opcje komunikat�w odnosz�cych si� do bie��cego pliku.");

define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Nowa kategoria");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Powiadom mnie kiedy zostanie stworzona nowa kategoria plik�w.");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Otrzymuj komunikat kiedy zostanie stworzona nowa kategoria plik�w.");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : Nowa kategoria plik�w ");

define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', ' ��danie modyfikacji pliku");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', ' Powiadom mnie o ka�dym ��daniu modyfikacji pliku.");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', ' Otrzymuj powiadomienie kiedy ��danie modyfikacji pliku jest wys�ane.");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-powiadomienie: ��danie modyfikacji pliku");

define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Wys�any uszkodzony plik");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Powiadom mnie o ka�dym raporcie o uszkodzonym pliku.");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', ' Otrzymuj powiadomienie kiedy zostanie wys�any raport o uszkodzonym pliku.");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-kumunikat: Raport o uszkodzonym pliku");

define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'Plik wys�any");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', ' Powiadom mnie o ka�dym nowym dodaniu pliku (oczekuj�cym na akceptacj�).");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Otrzymuj komunikat o dodaniu nowego pliku (oczekuj�cego na akceptacj�).");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Dodano nowy plik");

define("_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'Nowy plik");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', ' Powiadom mnie  kiedy nowy plik zostaje wys�any.");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Otrzymuj powiadomienie kiedy nowy plik zostaje wys�any.");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik ");

define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'Plik wys�ano");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new file is submitted (awaiting approval) to the current category.");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Otrzymuj komunikat o dodaniu nowego pliku (oczekuj�cego na akceptacj�) do bie��cej kategorii");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik dodany do kategorii ");

define("_MI_WFD_CATEGORY_NEWFILE_NOTIFY', ' Nowy plik");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Powiadom mnie  kiedy nowy plik zostaje wys�any do bie��cej kategorii.");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Otrzymuj powiadomienie kiedy nowy plik zostaje wys�any do bie��cej kategorii.");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik w tej kategorii");

define("_MI_WFD_FILE_APPROVE_NOTIFY', 'Plik zaakceptowany");
define("_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Powiadom mnie kiedy ten plik jest zaakceptowany.");
define("_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Otrzymuj komunikat o akceptacji tego pliku.");
define("_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-komunikat: Plik zaakceptowany");

define("_MI_WFD_AUTHOR_INFO","Informacja o autorze");
define("_MI_WFD_AUTHOR_NAME","Autor");
define("_MI_WFD_AUTHOR_DEVTEAM","Zesp� autorski");
define("_MI_WFD_AUTHOR_WEBSITE","Strona internetowa autora");
define("_MI_WFD_AUTHOR_EMAIL"," Email autora");
define("_MI_WFD_AUTHOR_CREDITS","Credits");
define("_MI_WFD_MODULE_INFO","Modu� Informacji o autorze");
define("_MI_WFD_MODULE_STATUS","Status autora");
define("_MI_WFD_MODULE_DEMO","Strona Demo");
define("_MI_WFD_MODULE_SUPPORT","Strona wsparcia technicznego");
define("_MI_WFD_MODULE_BUG","Poinformuj o b��dzie w tym module");
define("_MI_WFD_MODULE_FEATURE","Sugeruj nowe ustawienia dla tego modu�u");
define("_MI_WFD_MODULE_DISCLAIMER","Odmowa");
define("_MI_WFD_RELEASE","Data publikacji: ");

define("_MI_WFD_MODULE_MAILLIST","WF-Section lista mailingowa");

define("_MI_WFD_MODULE_MAILANNOUNCEMENTS"," Mailingowa lista og�osze�");
define("_MI_WFD_MODULE_MAILBUGS"," Mailingowa lista b��d�w");
define("_MI_WFD_MODULE_MAILFEATURES","Mailingowa lista ustawie�");

define("_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC"," bierz najnowsze og�oszenia z WF-Section.");
define("_MI_WFD_MODULE_MAILBUGSDSC","�ledzenie b��d�w i dodawanie list mailingowych");
define("_MI_WFD_MODULE_MAILFEATURESDSC"," ��daj nowych ustawie� list mailingowych.");


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
define("_MI_WFD_AUTHOR_BUGFIXES","Historia b��d�w");

define("_MI_WFD_COPYRIGHTIMAGE","Images copyright WF-Project and may only be used with permission");

//3.1
define("_MI_WFD_DOWNLOADMINPOSTS", "Minimalna liczba post�w aby m�c pobiera");
define("_MI_WFD_DOWNLOADMINPOSTSDSC", "Wpisz minimaln� warto�� post�w wymagan� do pobierania pliku");
define("_MI_WFD_REVIEWANONPOST","Recenzje anonim�w:");
define("_MI_WFD_REVIEWANONPOSTDSC","Pozwoli� niezarejestrowanym na dodawanie swoich recenzji?");
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
define("_MI_WFD_REVIEWAPPROVEDSC","Zaznacz, aby zatwierdza� bez moderacji.");
define("_MI_WFD_UPLOADDIRDSC","Katalog uplaodu *MUSI* by� �cie�k� absolutn�!");
define("_MI_WFD_ALLOWSUBMISS1","Brak");
define("_MI_WFD_ALLOWSUBMISS2","Tylko podstawowy");
define("_MI_WFD_ALLOWSUBMISS3","Tylko mirror");
define("_MI_WFD_ALLOWSUBMISS4","Oba");
define("_MI_WFD_MIRROR_USEIMAGES', 'Wy�wietli� logo mirrora?"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_USEIMAGESDSC', 'Wybierz TAK, aby pokazywa� logo dla ka�dego mirrora"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGWIDTH', 'Szeroko�� loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGWIDTHDSC', 'Szeroko�� wy�wietlanego loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGHEIGHT', 'Wysoko�� loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGHEIGHTDSC', 'Wysyko�� wy�wietlanego loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_AUTOAPPROVE","Aytomatycznie zatwierdzanie dodanych mirror�w");
define("_MI_WFD_MIRROR_AUTOAPPROVEDSC","Wybierz, aby zatwierdza� mirrory bez moderacji.");
define("_MI_WFD_MIRROR_MAXIMGWIDTH","Szeroko�� uploadowanego logo"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGWIDTHDSC","Maksymalna szeroko�� loga podczas uploadu"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGHEIGHT","Wysoko�� uploadowanego logo"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGHEIGHTDSC","Maksymalna wysoko�� loga podczas uploadu"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_ENABLE","W��cz system mirror�w");
define("_MI_WFD_MIRROR_ENABLEDSC","");
define("_MI_WFD_MIRROR_ENABLEONCHK","W��cz sprawdzanie mirror�w");
define("_MI_WFD_MIRROR_ENABLEONCHKDSC","W��cza sprawdzanie statusu mirror�w<br />To mo�e zwolni� �adowanie twojej strony je�eli<br />masz wiele mirror�w");
define("_MI_WFD_MIRROR_ALLOWSUBMISS","Mirrory u�ytkownik�w:");
define("_MI_WFD_MIRROR_ALLOWSUBMISSDSC","Pozw�l uzytkownikom na dodawanie mirror�w");
define("_MI_WFD_MIRROR_MIRRORIMAGES","Katalog z logami"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MIRRORIMAGESDSC","Katalog do uploadu log mirror�w"); // jeszcze nie zaimplementowane

//3.2
define("_MI_WFD_MAXSHOTS', 'Maksymalna liczba screenshot�w:");
define("_MI_WFD_MAXSHOTSDSC', 'Liczba uploadowanych screenshot�w.");
define("_MI_WFD_ALLOWUPLOADSGROUP","Dodawanie plik�w:");
define("_MI_WFD_ALLOWUPLOADSGROUPDSC","Wybierz grupy, kt�re b�d� mog�y uploadowa� pliki.<br />Obejmuje pliki oraz screenshoty!");
define("_MI_WFD_ENABLERSS","W��cz RSS:");
define("_MI_WFD_ENABLERSSDSC","Wybierz, aby uruchomi� RSS");
define("_MI_WFD_CAT_IMGWIDTH', 'Szeroko�� obrazka kategorii");
define("_MI_WFD_CAT_IMGWIDTHDSC', 'Szeroko�� dla obrazka kategorii");
define("_MI_WFD_CAT_IMGHEIGHT', 'Wysoko�� obrazka kategorii");
define("_MI_WFD_CAT_IMGHEIGHTDSC', 'Wysoko�� dla obrazka kategorii");
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
