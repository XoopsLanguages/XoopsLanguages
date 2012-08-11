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
define("_MI_WFD_DESC"," Tworzy dzia³ download, gdzie u¿ytkownicy mog±: pobieraæ/dodawaæ/oceniaæ pliki.");

// Nazwy bloków dla tego modu³u (nie wszystkie modu³y maj± bloki)
define("_MI_WFD_BNAME1","Ostatnio dodane pliki");
define("_MI_WFD_BNAME2","Najbardziej popularne pliki");

//  Tytu³y podkatalogów
define("_MI_WFD_SMNAME1","Dodaj nowy");
define("_MI_WFD_SMNAME2","Najpopularniejsze");
define("_MI_WFD_SMNAME3","Najwy¿ej oceniane");

// Nazwy ikon menu dla administratora
define("_MI_WFD_BINDEX","G³ówna strona");
define("_MI_WFD_INDEXPAGE","Zarz±dzanie stron± g³ówn±");
define("_MI_WFD_MCATEGORY","Zarz±dzanie kategoriami");
define("_MI_WFD_MDOWNLOADS","Zarz±dzanie plikami");
define("_MI_WFD_MUPLOADS","Dodawanie obrazków");
define("_MI_WFD_MMIMETYPES","Zarz±dzanie nag³ówkami MIME");
define("_MI_WFD_PERMISSIONS","Ustawienia dostêpu");
define("_MI_WFD_MVOTEDATA","G³osy");
define("_MI_WFD_REVIEWS","Recenzje");


// Tytu³y ikon konfiguracyjnych
define("_MI_WFD_POPULAR','Licznik popularno¶ci pobrañ");
define("_MI_WFD_POPULARDSC','Liczba pobrañ zanim status pobrañ zostanie dodany do popularnych.");

//Poka¿ ikony
define("_MI_WFD_ICONDISPLAY","Nowe i popularne pobrania:");
define("_MI_WFD_DISPLAYICONDSC","Wybierz sposób wy¶wietlania popularnych i nowych ikon w listach pobrañ.");
define("_MI_WFD_DISPLAYICON1","Wy¶wietl jako ikony");
define("_MI_WFD_DISPLAYICON2","Wy¶wietl jako tekst ");
define("_MI_WFD_DISPLAYICON3","Nie wy¶wietlaj");

define("_MI_WFD_DAYSNEW","Nowo¶ci:");
define("_MI_WFD_DAYSNEWDSC","Liczba dni podczas których status pobrañ bêdzie wy¶wietlany jako nowy.");
define("_MI_WFD_DAYSUPDATED","Uaktualnienia pobrañ dziennie:");
define("_MI_WFD_DAYSUPDATEDDSC"," Liczba dni podczas których  status pobrañ bêdzie wy¶wietlany jako uaktualniony.");

define("_MI_WFD_PERPAGE',' Liczba plików wy¶wietlanych na stronie ");
define("_MI_WFD_PERPAGEDSC',' Liczba plików do wy¶wietlenia w ka¿dej wylistowanej kategorii.");

define("_MI_WFD_USESHOTS','Pokazaæ obrazy zrzutów plików?");
define("_MI_WFD_USESHOTSDSC','Wybierz TAK aby wy¶wietliæ zrzut obrazu dla ka¿dej pozycji pobrania ");
define("_MI_WFD_SHOTWIDTH','Szeroko¶æ wy¶wietlanego zrzutu");
define("_MI_WFD_SHOTWIDTHDSC','Wy¶wietl szeroko¶æ dla zrzutu ekranu ");
define("_MI_WFD_SHOTHEIGHT',' Wysoko¶æ wy¶wietlanego zrzutu");
define("_MI_WFD_SHOTHEIGHTDSC',' Wy¶wietl wysoko¶æ dla zrzutu ekranu");
define("_MI_WFD_CHECKHOST','Cofnij pozwolenie na linkowanie pobrania (leeching)");
define("_MI_WFD_REFERERS',' Te strony mog± byc bezpo¶rednio polinkowane z twoimi plikami <br />Oddzielaj znakiem | ");
define("_MI_WFD_ANONPOST","Uprawnienia anonimowego u¿ytkownika:");
define("_MI_WFD_ANONPOSTDSC","Chcesz zezwoliæ anonimowym uzytkownikom na dodawanie nowych plików/mirrorów do twojej strony?");
define("_MI_WFD_AUTOAPPROVE","Automatyczna akceptacja dodanych plików/mirrorów");
define("_MI_WFD_AUTOAPPROVEDSC","Zaznacz aby automatycznie akceptowaæ dodane pliki/mirrory bez moderowania");

define("_MI_WFD_MAXFILESIZE"," Dodaj rozmiar (KB)");
define("_MI_WFD_MAXFILESIZEDSC","Maksymalny dozwolony rozmiar pliku do dodania.");
define("_MI_WFD_IMGWIDTH","Dodaj szeroko¶æ obrazu ");
define("_MI_WFD_IMGWIDTHDSC","Maksymalna dozwolona szeroko¶æ dla dodawanych obrazów");
define("_MI_WFD_IMGHEIGHT","Dodaj wysoko¶æ obrazu");
define("_MI_WFD_IMGHEIGHTDSC","Maksymalna dozwolona wysoko¶æ dla dodawanych obrazów");

define("_MI_WFD_UPLOADDIR"," Dodaj katalog (nie dodawaj slash)");
define("_MI_WFD_ALLOWSUBMISS"," Uprawnienia u¿ykowników:");
define("_MI_WFD_ALLOWSUBMISSDSC","Zezwalaj u¿ytkownikom na dodawanie nowych plików do pobrania");
define("_MI_WFD_ALLOWUPLOADS"," Dodane pliki u¿ytkownika:");
define("_MI_WFD_ALLOWUPLOADSDSC","Zezwalaj wszystkim u¿ytkownikom na dodawanie plików bezpo¶rednio na Twoj± stronê<br />To tyczy siê zarówno plików jak i screenshotów!");
define("_MI_WFD_SCREENSHOTS","Katalog dodania zrzutów ekranowych");
define("_MI_WFD_CATEGORYIMG","Katalog z dodanymi obrazami danej kategorii");
define("_MI_WFD_MAINIMGDIR","G³ówny katalog obrazów");
define("_MI_WFD_USETHUMBS','U¿ywaj miniaturek:");
define("_MI_WFD_USETHUMBSDSC","Obs³ugiwane s± nastêpuj±ce typy plików: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Section bêdzie wy¶wietlaæ miniatury dla danych plików (kategorii i screenshotów). Wybierz ustawienia: NIE, aby wykorzystaæ oryginalny obraz je¿eli serwer nie obs³uguje tej opcji.</div>");
define("_MI_WFD_DATEFORMAT','Format czasu:");
define("_MI_WFD_DATEFORMATDSC','Domy¶lny format czasu dla WF-Downloads:");
define("_MI_WFD_SHOWDISCLAIMER','Pokazaæ zastrze¿enia przed dodaniem pliku przez u¿ytkownika?");
define("_MI_WFD_SHOWDOWNDISCL','Pokazaæ zastrze¿enia przed pobraniem pliku przez u¿ytkownika?");
define("_MI_WFD_DISCLAIMER',' Wpisz zastrze¿enia dotycz¹ce dodawania pliku:");
define("_MI_WFD_DOWNDISCLAIMER','Wpisz zastrze¿enia tycz¹ce pobierania:");
define("_MI_WFD_PLATFORM','Wpisz platformy:");
define("_MI_WFD_SUBCATS','Podkategorie:");
define("_MI_WFD_VERSIONTYPES','Status wersji:");
define("_MI_WFD_LICENSE','Wpisz licencjê:");
define("_MI_WFD_LIMITS','Wpisz ograniczenia plików:");

define("_MI_WFD_SUBMITART","Download Uprawnienia:");
define("_MI_WFD_SUBMITARTDSC","Zaznacz grupy uprawnione do wysy³ania nowych plików.<br />Webmasterzy s± automatycznie wybrani!");

define("_MI_WFD_IMGUPDATE","Aktualizuj miniatury?");
define("_MI_WFD_IMGUPDATEDSC"," Zaznaczone obrazy miniatur bêd± aktualizowane na ka¿dej stronie - w przeciwnym razie pierwszy obraz miniatury bêdzie u¿yty bez wzglêdu na aktualizacjê.<br /><br />");
define("_MI_WFD_QUALITY","Jako¶æ miniatury:");
define("_MI_WFD_QUALITYDSC","Najni¿sza jako¶æ: 0 najwy¿sza: 100");
define("_MI_WFD_KEEPASPECT","Zachowaj proporcje obrazu ?");
define("_MI_WFD_KEEPASPECTDSC","");
define("_MI_WFD_ADMINPAGE","Licznik plików admina :");
define("_MI_WFD_AMDMINPAGEDSC","Liczba nowych plików do wy¶wietlenia w module administratora.");
define("_MI_WFD_ARTICLESSORT","Domy¶lny uk³ad pobrañ:");
define("_MI_WFD_ARTICLESSORTDSC","Ustaw domy¶lny uk³ad dla list pobrañ.");
define("_MI_WFD_TITLE","Tytu³");
define("_MI_WFD_RATING","Ocena");
define("_MI_WFD_WEIGHT","Waga") ;
define("_MI_WFD_POPULARITY","Popularno¶æ");
define("_MI_WFD_SUBMITTED2","Data dodania");
define("_MI_WFD_COPYRIGHT',' Prawa autorskie:");
define("_MI_WFD_COPYRIGHTDSC','Zaznacz opcjê wy¶wietlania noty o prawach autorskich na stronie pobrañ.");
// Description of each config items - opis ka¿dej ikony konfirguracji
define("_MI_WFD_PLATFORMDSC',' Lista dostêpnych platform<br />Oddzielaj ze znakiem | WA¯NE: nie zmieniaj tego gdy strona jest on line, dodaj now± do koñca listy");
define("_MI_WFD_SUBCATSDSC','Wybierz TAK aby wy¶wietliæ podkategorie. Wybór NIE schowa podkategorie na listach");
define("_MI_WFD_LICENSEDSC','Lista dostêpnych platform <br />Oddzielaj ze znakiem |");

//  Tekst dla komunikatów
define("_MI_WFD_GLOBAL_NOTIFY','Ogólny");
define("_MI_WFD_GLOBAL_NOTIFYDSC','Ogólne opcje komunikatów dla pobrañ.");

define("_MI_WFD_CATEGORY_NOTIFY','Kategoria");
define("_MI_WFD_CATEGORY_NOTIFYDSC','Opcje komunikatów odnosz±cych siê do bie¿±cej kategorii pliku.");

define("_MI_WFD_FILE_NOTIFY','Plik");
define("_MI_WFD_FILE_NOTIFYDSC','Opcje komunikatów odnosz±cych siê do bie¿±cego pliku.");

define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY','Nowa kategoria");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP','Powiadom mnie kiedy zostanie stworzona nowa kategoria plików.");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC','Otrzymuj komunikat kiedy zostanie stworzona nowa kategoria plików.");
define("_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} powiadomienie : Nowa kategoria plików ");

define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY',' ¯±danie modyfikacji pliku");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP',' Powiadom mnie o ka¿dym ¿±daniu modyfikacji pliku.");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC',' Otrzymuj powiadomienie kiedy ¿±danie modyfikacji pliku jest wys³ane.");
define("_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-powiadomienie: ¯±danie modyfikacji pliku");

define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY','Wys³any uszkodzony plik");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP','Powiadom mnie o ka¿dym raporcie o uszkodzonym pliku.");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC',' Otrzymuj powiadomienie kiedy zostanie wys³any raport o uszkodzonym pliku.");
define("_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-kumunikat: Raport o uszkodzonym pliku");

define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY','Plik wys³any");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP',' Powiadom mnie o ka¿dym nowym dodaniu pliku (oczekuj±cym na akceptacjê).");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC','Otrzymuj komunikat o dodaniu nowego pliku (oczekuj±cego na akceptacjê).");
define("_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-komunikat: Dodano nowy plik");

define("_MI_WFD_GLOBAL_NEWFILE_NOTIFY','Nowy plik");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP',' Powiadom mnie  kiedy nowy plik zostaje wys³any.");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC','Otrzymuj powiadomienie kiedy nowy plik zostaje wys³any.");
define("_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik ");

define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY','Plik wys³ano");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP','Notify me when a new file is submitted (awaiting approval) to the current category.");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC','Otrzymuj komunikat o dodaniu nowego pliku (oczekuj±cego na akceptacjê) do bie¿±cej kategorii");
define("_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik dodany do kategorii ");

define("_MI_WFD_CATEGORY_NEWFILE_NOTIFY',' Nowy plik");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP','Powiadom mnie  kiedy nowy plik zostaje wys³any do bie¿±cej kategorii.");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC','Otrzymuj powiadomienie kiedy nowy plik zostaje wys³any do bie¿±cej kategorii.");
define("_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-komunikat: Nowy plik w tej kategorii");

define("_MI_WFD_FILE_APPROVE_NOTIFY','Plik zaakceptowany");
define("_MI_WFD_FILE_APPROVE_NOTIFYCAP','Powiadom mnie kiedy ten plik jest zaakceptowany.");
define("_MI_WFD_FILE_APPROVE_NOTIFYDSC','Otrzymuj komunikat o akceptacji tego pliku.");
define("_MI_WFD_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-komunikat: Plik zaakceptowany");

define("_MI_WFD_AUTHOR_INFO","Informacja o autorze");
define("_MI_WFD_AUTHOR_NAME","Autor");
define("_MI_WFD_AUTHOR_DEVTEAM","Zespó³ autorski");
define("_MI_WFD_AUTHOR_WEBSITE","Strona internetowa autora");
define("_MI_WFD_AUTHOR_EMAIL"," Email autora");
define("_MI_WFD_AUTHOR_CREDITS","Credits");
define("_MI_WFD_MODULE_INFO","Modu³ Informacji o autorze");
define("_MI_WFD_MODULE_STATUS","Status autora");
define("_MI_WFD_MODULE_DEMO","Strona Demo");
define("_MI_WFD_MODULE_SUPPORT","Strona wsparcia technicznego");
define("_MI_WFD_MODULE_BUG","Poinformuj o b³êdzie w tym module");
define("_MI_WFD_MODULE_FEATURE","Sugeruj nowe ustawienia dla tego modu³u");
define("_MI_WFD_MODULE_DISCLAIMER","Odmowa");
define("_MI_WFD_RELEASE","Data publikacji: ");

define("_MI_WFD_MODULE_MAILLIST","WF-Section lista mailingowa");

define("_MI_WFD_MODULE_MAILANNOUNCEMENTS"," Mailingowa lista og³oszeñ");
define("_MI_WFD_MODULE_MAILBUGS"," Mailingowa lista b³êdów");
define("_MI_WFD_MODULE_MAILFEATURES","Mailingowa lista ustawieñ");

define("_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC"," bierz najnowsze og³oszenia z WF-Section.");
define("_MI_WFD_MODULE_MAILBUGSDSC","¦ledzenie b³êdów i dodawanie list mailingowych");
define("_MI_WFD_MODULE_MAILFEATURESDSC"," ¿±daj nowych ustawieñ list mailingowych.");


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
define("_MI_WFD_AUTHOR_BUGFIXES","Historia b³êdów");

define("_MI_WFD_COPYRIGHTIMAGE","Images copyright WF-Project and may only be used with permission");

//3.1
define("_MI_WFD_DOWNLOADMINPOSTS","Minimalna liczba postów aby móc pobiera");
define("_MI_WFD_DOWNLOADMINPOSTSDSC","Wpisz minimaln± warto¶æ postów wymagan± do pobierania pliku");
define("_MI_WFD_REVIEWANONPOST","Recenzje anonimów:");
define("_MI_WFD_REVIEWANONPOSTDSC","Pozwoliæ niezarejestrowanym na dodawanie swoich recenzji?");
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
define("_MI_WFD_REVIEWAPPROVEDSC","Zaznacz, aby zatwierdzaæ bez moderacji.");
define("_MI_WFD_UPLOADDIRDSC","Katalog uplaodu *MUSI* byæ ¶cie¿k± absolutn±!");
define("_MI_WFD_ALLOWSUBMISS1","Brak");
define("_MI_WFD_ALLOWSUBMISS2","Tylko podstawowy");
define("_MI_WFD_ALLOWSUBMISS3","Tylko mirror");
define("_MI_WFD_ALLOWSUBMISS4","Oba");
define("_MI_WFD_MIRROR_USEIMAGES','Wy¶wietliæ logo mirrora?"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_USEIMAGESDSC','Wybierz TAK, aby pokazywaæ logo dla ka¿dego mirrora"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGWIDTH','Szeroko¶æ loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGWIDTHDSC','Szeroko¶æ wy¶wietlanego loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGHEIGHT','Wysoko¶æ loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_IMGHEIGHTDSC','Wysyko¶æ wy¶wietlanego loga"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_AUTOAPPROVE","Aytomatycznie zatwierdzanie dodanych mirrorów");
define("_MI_WFD_MIRROR_AUTOAPPROVEDSC","Wybierz, aby zatwierdzaæ mirrory bez moderacji.");
define("_MI_WFD_MIRROR_MAXIMGWIDTH","Szeroko¶æ uploadowanego logo"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGWIDTHDSC","Maksymalna szeroko¶æ loga podczas uploadu"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGHEIGHT","Wysoko¶æ uploadowanego logo"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MAXIMGHEIGHTDSC","Maksymalna wysoko¶æ loga podczas uploadu"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_ENABLE","W³±cz system mirrorów");
define("_MI_WFD_MIRROR_ENABLEDSC","");
define("_MI_WFD_MIRROR_ENABLEONCHK","W³±cz sprawdzanie mirrorów");
define("_MI_WFD_MIRROR_ENABLEONCHKDSC","W³±cza sprawdzanie statusu mirrorów<br />To mo¿e zwolniæ ³adowanie twojej strony je¿eli<br />masz wiele mirrorów");
define("_MI_WFD_MIRROR_ALLOWSUBMISS","Mirrory u¿ytkowników:");
define("_MI_WFD_MIRROR_ALLOWSUBMISSDSC","Pozwól uzytkownikom na dodawanie mirrorów");
define("_MI_WFD_MIRROR_MIRRORIMAGES","Katalog z logami"); // jeszcze nie zaimplementowane
define("_MI_WFD_MIRROR_MIRRORIMAGESDSC","Katalog do uploadu log mirrorów"); // jeszcze nie zaimplementowane

//3.2
define("_MI_WFD_MAXSHOTS','Maksymalna liczba screenshotów:");
define("_MI_WFD_MAXSHOTSDSC','Liczba uploadowanych screenshotów.");
define("_MI_WFD_ALLOWUPLOADSGROUP","Dodawanie plików:");
define("_MI_WFD_ALLOWUPLOADSGROUPDSC","Wybierz grupy, które bêd± mog³y uploadowaæ pliki.<br />Obejmuje pliki oraz screenshoty!");
define("_MI_WFD_ENABLERSS","W³±cz RSS:");
define("_MI_WFD_ENABLERSSDSC","Wybierz, aby uruchomiæ RSS");
define("_MI_WFD_CAT_IMGWIDTH','Szeroko¶æ obrazka kategorii");
define("_MI_WFD_CAT_IMGWIDTHDSC','Szeroko¶æ dla obrazka kategorii");
define("_MI_WFD_CAT_IMGHEIGHT','Wysoko¶æ obrazka kategorii");
define("_MI_WFD_CAT_IMGHEIGHTDSC','Wysoko¶æ dla obrazka kategorii");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFY','Plik zmodyfikowany");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP','Powiadom mnie, gdy ten plik zostanie zmodyfikowny.");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC','Otrzymuj powiadomienia, gdy ten plik zostanie zmodyfikowny.");
define("_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} powiadomienie : plik zmodyfikowny");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY','Plik zmodyfikowany");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP','Powiadom mnie, gdy plik w tej kategorii zostanie zmodyfikowny.");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC','Otrzymuj powiadomienia, gdy plik w tej kategorii zostanie zmodyfikowny.");
define("_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} powiadomienie : plik zmodyfikowny");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY','Plik zmodyfikowany");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP','Powiadom mnie, gdy jakikolwiek plik zostanie zmodyfikowny.");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC','Otrzymuj powiadomienia, gdy jakikolwiek plik zostanie zmodyfikowny.");
define("_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} powiadomienie : plik zmodyfikowny");



?>
