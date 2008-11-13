<?php
/**
 * $Id: modinfo.php,v 1.1 2007/02/10 18:55:53 dap997 Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFL_NAME","WF-links");

// A brief description of this module
define("_MI_WFL_DESC","Tworzy modu� link�w gdzie u�ytkownicy moga dodawa�/ocenia� r�ne linki.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Najnowsze linki");
define("_MI_WFL_BNAME2","Najlepsze linki");

// Sub menu titles
define("_MI_WFL_SMNAME1","Dodaj");
define("_MI_WFL_SMNAME2","Popularne");
define("_MI_WFL_SMNAME3","Najwy�ej oceniane");

// Names of admin menu items
define("_MI_WFL_BINDEX"     ,"Strona g��wna");
define("_MI_WFL_INDEXPAGE"  ,"Zarz�dzanie stron� g��wn�");
define("_MI_WFL_MCATEGORY"  ,"Zarz�dzanie kategoriami");
define("_MI_WFL_MLINKS"     ,"Zarz�dzanie linkami");
define("_MI_WFL_MUPLOADS"   ,"Upload obrazk�w");
define("_MI_WFL_PERMISSIONS","Uprawnienia");
define("_MI_WFL_BLOCKADMIN" ,"Bloki");
define("_MI_WFL_MVOTEDATA"  ,"Ocenianie");

// Title of config items
define('_MI_WFL_POPULAR'    , 'Popularno�� linku');
define('_MI_WFL_POPULARDSC' , 'Po ilu klikni�ciach link przyjmie status popularnego.');

//Display Icons
define("_MI_WFL_ICONDISPLAY"    ,"Linki popularne i nowe:");
define("_MI_WFL_DISPLAYICONDSC" , "Jak wy�wietla� ikon� nowego i popularnego linku.");
define("_MI_WFL_DISPLAYICON1"   , "Jako ikon�");
define("_MI_WFL_DISPLAYICON2"   , "Jako tekst");
define("_MI_WFL_DISPLAYICON3"   , "Nie wy�wietlaj wcale");

define("_MI_WFL_DAYSNEW"        ,"Nowy link:");
define("_MI_WFL_DAYSNEWDSC"     ,"Ile dni link b�dzie uznawany za nowy.");
define("_MI_WFL_DAYSUPDATED"    ,"Uaktualniony link:");
define("_MI_WFL_DAYSUPDATEDDSC" ,"Ile dni link b�dzie uznawany za uaktualniony.");

define('_MI_WFL_PERPAGE'        , 'Lista link�w w kategorii:');
define('_MI_WFL_PERPAGEDSC'     , 'Ile link�w b�dzie pokazywane w ka�dym spisie link�w w kategorii.');

define('_MI_WFL_USESHOTS'      , 'Pokazywa� Screenshot ?');
define('_MI_WFL_USESHOTSDSC'   , 'Wybierz tak aby pokazywa� screenshot dla ka�ego linku');
define('_MI_WFL_SHOTWIDTH'     , 'Szeroko�� screenshota');
define('_MI_WFL_SHOTWIDTHDSC'  , 'Wybierz szeroko�� jak� b�dzie mia� pokazywany sceenshot');
define('_MI_WFL_SHOTHEIGHT'    , 'Wysoko�� screenshota');
define('_MI_WFL_SHOTHEIGHTDSC' , 'Wybierz wysoko�� jak� b�dzie mia� pokazywany sceenshot');
define('_MI_WFL_CHECKHOST'     , 'Leechowanie?');
define('_MI_WFL_REFERERS'      , 'Te strone b�d� mog�y dodawa� linki bezpo�rednio z twojej strony<br />Kolejne strony oddzielaj #');
define("_MI_WFL_ANONPOST"      , "Uprawnienia niezarejestrowanych:");
define("_MI_WFL_ANONPOSTDSC"   , "Pozw�l niezarejestrowanym na dodawanie lub upload na twoj� strone?");
define('_MI_WFL_AUTOAPPROVE'   , 'Auto-akceptacja nowych link�w');
define('_MI_WFL_AUTOAPPROVEDSC', 'Wybierz tak aby nowe linki by�y dodawane bez weryfikcji administratora.');

define('_MI_WFL_MAXFILESIZE'    ,'Rozmiar pliku uploadowanego (KB)');
define('_MI_WFL_MAXFILESIZEDSC' ,'Maximum link size permitted with link uploads.');
define('_MI_WFL_IMGWIDTH'       ,'Szeroko�� uploadowanego obrazka');
define('_MI_WFL_IMGWIDTHDSC'    ,'Maksymalna szeroko�� obrazka dla linku');
define('_MI_WFL_IMGHEIGHT'      ,'Wysoko�� uploadowanego obrazka');
define('_MI_WFL_IMGHEIGHTDSC'   ,'Maksymalna wysoko�� obrazka dla linku');

define('_MI_WFL_UPLOADDIR'         ,'Katalog uploadu (Bez slasha na ko�cu)');
define('_MI_WFL_ALLOWSUBMISS'      ,'Uprawnienia u�ytkownik�w:');
define('_MI_WFL_ALLOWSUBMISSDSC'   ,'Zezwoli� na dodawanie nowych link�w');
define('_MI_WFL_ALLOWUPLOADS'      ,'Upload przez u�ytkownik�w:');
define('_MI_WFL_ALLOWUPLOADSDSC'   ,'Zezwoli� u�ytkownikom na upload link�w bezpo�rednio na twoj� stron�');
define('_MI_WFL_SCREENSHOTS'       ,'Katalog uploadu screenshot�w');
define('_MI_WFL_CATEGORYIMG'       ,'Katalog uploadu obrazk�w kategorii');
define('_MI_WFL_MAINIMGDIR'        ,'Katalog g��wnego obrazka');
define('_MI_WFL_USETHUMBS'         , 'U�ywa� miniaturek:');
define("_MI_WFL_USETHUMBSDSC"      , "Dozwolone typy plik�w: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links stworzy miniatury obrazk�w. Wybierz 'Nie' aby u�ywa� obrazki orginalnych rozmiar�w.</div>");
define('_MI_WFL_DATEFORMAT'        , 'Stempel czasu:');
define('_MI_WFL_DATEFORMATDSC'     , 'Standardowy stempel dla WF-Links:');
define('_MI_WFL_SHOWDISCLAIMER'    , 'Poka� warunki przed rejestracj�?');
define('_MI_WFL_SHOWDISCLAIMERDSC' , 'Before a User can submit a Link show the Entry regulations?');
define('_MI_WFL_SHOWLINKDISCL'     , 'Poka� warunki przed dodaniem nowego linku?');
define('_MI_WFL_SHOWLINKDISCLDSC'  , 'Poka� ograniczenia linku przed jego otwarciem?');
define('_MI_WFL_DISCLAIMER'        , 'Wpisz warunki:');
define('_MI_WFL_LINKDISCLAIMER'    , 'Wpisz warunki dla linku:');
define('_MI_WFL_SUBCATS'           , 'Podkategorie:');
define("_MI_WFL_SUBMITART"         , "Dodawanie link�w:");
define("_MI_WFL_SUBMITARTDSC"      , "Wybierz grupy kt�re b�d� mog�y dodawa� nowe linki.");
define("_MI_WFL_RATINGGROUPS"      , "Ocenianie link�w:");
define("_MI_WFL_RATINGGROUPSDSC"   , "Wybierz grupy kt�re b�d� mog�y ocenia� link.");
define("_MI_WFL_IMGUPDATE"         , "Uaktualni� miniaturki?");
define("_MI_WFL_IMGUPDATEDSC"      , "Je�eli zaznaczysz tak to obrazki b�d� od�wie�ane za kazdym razem, je�eli nie to obrazek b�dzie u�ywany ca�y czas, niezale�nie. <br /><br />");
define("_MI_WFL_QUALITY"           , "Jako�� miniaturki:");
define("_MI_WFL_QUALITYDSC"        , "Jako�� najni�asza: 0 najwy�sza: 100");
define("_MI_WFL_KEEPASPECT"        , "Utrzymywa� kszta�t obrazka?");
define("_MI_WFL_KEEPASPECTDSC"     , "");
define("_MI_WFL_ADMINPAGE"         , "Licznik nowych link�w:");
define("_MI_WFL_AMDMINPAGEDSC"     , "Liczba nowych link�w kt�re b�d� wy�wietlane w panelu administratora.");
define("_MI_WFL_ARTICLESSORT"      , "Domy�lnie sortuj wg:");
define("_MI_WFL_ARTICLESSORTDSC"   , "Wybierz domy�lny spos�b sortowania link�w.");
define("_MI_WFL_TITLE"             , "Tytu�");
define("_MI_WFL_RATING"            , "Ocena");
define("_MI_WFL_WEIGHT"            , "Waga");
define("_MI_WFL_POPULARITY"        , "Popularno��");
define("_MI_WFL_SUBMITTED2"        , "Data dodania");
define('_MI_WFL_COPYRIGHT'         , 'Copyright:');
define('_MI_WFL_COPYRIGHTDSC'      , 'Zaznacz aby wy�wietla� copyright na stronie z linkami.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC'        , 'Zaznacz TAK aby wy�wietla� pod-kategorie. Wybieraj�c NIE ukryjesz pod-kategorie z listy');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY'     , 'Globalne');
define('_MI_WFL_GLOBAL_NOTIFYDSC'  , 'Globalne opcje powiadamiania.');
define('_MI_WFL_CATEGORY_NOTIFY'   , 'Kategoria');
define('_MI_WFL_CATEGORY_NOTIFYDSC', 'Opcje powiadamiania kt�re stosuj� si� do aktualnej katogorii.');
define('_MI_WFL_LINK_NOTIFY'       , 'Link');
define('_MI_WFL_FILE_NOTIFYDSC'    , 'Opcje powiadamiania kt�re stosuj� si� do aktualnego linku.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY'      , 'Nowa Kategoria');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP'   , 'Powiadom mnie gdy zostanie utworzona nowa kategoria.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC'   , 'Powiadom mnie gdy zostanie utworzony nowy link w kategorii.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ'   , '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowa kategoria/link');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY', 'Pro�by modyfikacji link�w');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Powiadom mnie gdy zostanie zg�oszona pro�ba modyfikacji linku.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Powiadom mnie kiedy nowa pro�ba modyfikacji linku zosta�a dodana.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Pro�ba modyfikacji linku');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY', 'Uszkodzony link');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Powiadom mnie gdy zostanie zg�oszony uszkodzony link.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Powiadom mnie gdy zostanie dodany raport o uszkodzonym linku.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Broken Link Reported');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY', 'Dodany link');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Powiadom mnie kiedy nowy link zosta� dodany i czeka na akceptacj�.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Powiadom mnie kiedy nowy link zosta� zatwierdzony.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : New link submitted');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY', 'Nowy link');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP', 'Powiadom mnie kiedy zostanie dodany nowy link.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC', 'Powiadom mnie kiedy zostanie zaakceptowany nowy link.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY', 'Link zaakceptowany');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Powiadom mnie kiedy zostanie dodany nowy link i czeka na akceptacj� w tej kategorii.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Powiadom mnie kiedy zostanie zaakceptowany nowy link w tej kategorii.');      
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link w kategorii'); 

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY', 'Nowy link w kategorii');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP', 'Powiadom mnie kiedy zostanie dodany nowy link w tej kategorii.');   
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC', 'Powiadom mnie kiedy zostanie dodany nowy link w tej kategorii.');      
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link w kategorii'); 

define('_MI_WFL_LINK_APPROVE_NOTIFY', 'Link zaakceptowany');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP', 'Powiadom mnie kiedy ten link zostanie zaakceptowany.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC', 'Powiadom mnie kiedy ten link zostanie zaakceptowany.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Link zaakceptowany');

define('_MI_WFL_AUTHOR_INFO'    , "Informacje developera");
define('_MI_WFL_AUTHOR_NAME'    , "Developer");
define('_MI_WFL_AUTHOR_DEVTEAM' , "Ekipa tworz�ca modu�");
define('_MI_WFL_AUTHOR_WEBSITE' , "Strona developera");
define('_MI_WFL_AUTHOR_EMAIL'   , "Email developera");
define('_MI_WFL_AUTHOR_CREDITS' , "Obsada");
define('_MI_WFL_MODULE_INFO'    , "Informacje developera o module");
define('_MI_WFL_MODULE_STATUS'  , "Status projektu");
define('_MI_WFL_MODULE_DEMO'    , "Przyk�adowa strona");
define('_MI_WFL_MODULE_SUPPORT' , "Oficjalne wsparcie");
define('_MI_WFL_MODULE_BUG'     , "Zg�o� b��d w tym module");
define('_MI_WFL_MODULE_FEATURE' , "Zaproponuj co� tw�rcom");
define('_MI_WFL_MODULE_DISCLAIMER'  , "Licencja");
define('_MI_WFL_RELEASE'            , "Data publikacji: ");

define('_MI_WFL_MODULE_MAILLIST'            , "Og�oszenia dotycz�ce modu�u");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS'   , "Og�oszenia dotycz�ce modu�u");
define('_MI_WFL_MODULE_MAILBUGS'            , "Og�oszenia dotycz�ce bug-�w");
define('_MI_WFL_MODULE_MAILFEATURES'        , "Og�oszenia dotycz�ce propozycji na przysz�o��");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC', "Zobacz ostanie og�oszenia WF.");
define('_MI_WFL_MODULE_MAILBUGSDSC'         , "Bugi, b��dy, wysypki kodu");
define('_MI_WFL_MODULE_MAILFEATURESDSC'     , "Propozycje ulepszenia modu�u.");

define('_MI_WFL_WARNINGTEXT', "UWAGA! NIE B�D� TEGO T�UMACZY� DO NIE UMIEM/NIE CHCE MI SI�/NIE MAM CZASU. SPRAWA JEST JASNA NIE CHCESZ - NIE U�YWAJ. NIE MASZ �ADEJ GWARANCJI �E TO DZIA�A. ZACHOWAJ SZACUNEK DLA EKIPY WF I T�UMACZA. THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFL_AUTHOR_CREDITSTEXT',"Ekipa WF-Projects pragnie podzi�kowa� nast�puj�cym osob� za ich pomoc i wsparcie podczas tworzenia tego modu�u.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, kurak_bu, dap997");
define('_MI_WFL_AUTHOR_BUGFIXES', "Historia zmian");

define('_MI_WFL_COPYRIGHTIMAGE', "Mo�esz modyfikowa� i dostosowywa� WF-Links do swoich potrzeb. Nie mo�esz modyfikowa� znacznie kodu modu�u bez zgody ekipy WF-Projects.");

define('_MI_WFL_SELECTFORUM', "Wybierz Forum:");
define('_MI_WFL_SELECTFORUMDSC', "Wybierz jakie forum masz zainstalowane kt�ry b�dzie u�ywany przez WF-Links.");

define('_MI_WFL_DISPLAYFORUM1', "Newbb (wszystkie)");
define('_MI_WFL_DISPLAYFORUM2', "IPB");
define('_MI_WFL_DISPLAYFORUM3', "Modu� PHPBB2");

?>