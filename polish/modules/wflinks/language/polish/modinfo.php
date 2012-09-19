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
define("_MI_WFL_DESC","Tworzy moduł linków gdzie użytkownicy moga dodawać/oceniać różne linki.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Najnowsze linki");
define("_MI_WFL_BNAME2","Najlepsze linki");

// Sub menu titles
define("_MI_WFL_SMNAME1","Dodaj");
define("_MI_WFL_SMNAME2","Popularne");
define("_MI_WFL_SMNAME3","Najwyżej oceniane");

// Names of admin menu items
define("_MI_WFL_BINDEX"     ,"Strona główna");
define("_MI_WFL_INDEXPAGE"  ,"Zarządzanie stroną główną");
define("_MI_WFL_MCATEGORY"  ,"Zarządzanie kategoriami");
define("_MI_WFL_MLINKS"     ,"Zarządzanie linkami");
define("_MI_WFL_MUPLOADS"   ,"Upload obrazków");
define("_MI_WFL_PERMISSIONS","Uprawnienia");
define("_MI_WFL_BLOCKADMIN" ,"Bloki");
define("_MI_WFL_MVOTEDATA"  ,"Ocenianie");

// Title of config items
define('_MI_WFL_POPULAR'    , 'Popularność linku');
define('_MI_WFL_POPULARDSC' , 'Po ilu kliknięciach link przyjmie status popularnego.');

//Display Icons
define("_MI_WFL_ICONDISPLAY"    ,"Linki popularne i nowe:");
define("_MI_WFL_DISPLAYICONDSC" , "Jak wyświetlać ikonę nowego i popularnego linku.");
define("_MI_WFL_DISPLAYICON1"   , "Jako ikonę");
define("_MI_WFL_DISPLAYICON2"   , "Jako tekst");
define("_MI_WFL_DISPLAYICON3"   , "Nie wyświetlaj wcale");

define("_MI_WFL_DAYSNEW"        ,"Nowy link:");
define("_MI_WFL_DAYSNEWDSC"     ,"Ile dni link będzie uznawany za nowy.");
define("_MI_WFL_DAYSUPDATED"    ,"Uaktualniony link:");
define("_MI_WFL_DAYSUPDATEDDSC" ,"Ile dni link będzie uznawany za uaktualniony.");

define('_MI_WFL_PERPAGE'        , 'Lista linków w kategorii:');
define('_MI_WFL_PERPAGEDSC'     , 'Ile linków będzie pokazywane w każdym spisie linków w kategorii.');

define('_MI_WFL_USESHOTS'      , 'Pokazywać Screenshot ?');
define('_MI_WFL_USESHOTSDSC'   , 'Wybierz tak aby pokazywać screenshot dla każego linku');
define('_MI_WFL_SHOTWIDTH'     , 'Szerokość screenshota');
define('_MI_WFL_SHOTWIDTHDSC'  , 'Wybierz szerokość jaką będzie miał pokazywany sceenshot');
define('_MI_WFL_SHOTHEIGHT'    , 'Wysokość screenshota');
define('_MI_WFL_SHOTHEIGHTDSC' , 'Wybierz wysokość jaką będzie miał pokazywany sceenshot');
define('_MI_WFL_CHECKHOST'     , 'Leechowanie?');
define('_MI_WFL_REFERERS'      , 'Te strone będą mogły dodawać linki bezpośrednio z twojej strony<br />Kolejne strony oddzielaj #');
define("_MI_WFL_ANONPOST"      , "Uprawnienia niezarejestrowanych:");
define("_MI_WFL_ANONPOSTDSC"   , "Pozwól niezarejestrowanym na dodawanie lub upload na twoją strone?");
define('_MI_WFL_AUTOAPPROVE'   , 'Auto-akceptacja nowych linków');
define('_MI_WFL_AUTOAPPROVEDSC', 'Wybierz tak aby nowe linki były dodawane bez weryfikcji administratora.');

define('_MI_WFL_MAXFILESIZE'    ,'Rozmiar pliku uploadowanego (KB)');
define('_MI_WFL_MAXFILESIZEDSC' ,'Maximum link size permitted with link uploads.');
define('_MI_WFL_IMGWIDTH'       ,'Szerokość uploadowanego obrazka');
define('_MI_WFL_IMGWIDTHDSC'    ,'Maksymalna szerokość obrazka dla linku');
define('_MI_WFL_IMGHEIGHT'      ,'Wysokość uploadowanego obrazka');
define('_MI_WFL_IMGHEIGHTDSC'   ,'Maksymalna wysokość obrazka dla linku');

define('_MI_WFL_UPLOADDIR'         ,'Katalog uploadu (Bez slasha na końcu)');
define('_MI_WFL_ALLOWSUBMISS'      ,'Uprawnienia użytkowników:');
define('_MI_WFL_ALLOWSUBMISSDSC'   ,'Zezwolić na dodawanie nowych linków');
define('_MI_WFL_ALLOWUPLOADS'      ,'Upload przez użytkowników:');
define('_MI_WFL_ALLOWUPLOADSDSC'   ,'Zezwolić użytkownikom na upload linków bezpośrednio na twoją stronę');
define('_MI_WFL_SCREENSHOTS'       ,'Katalog uploadu screenshotów');
define('_MI_WFL_CATEGORYIMG'       ,'Katalog uploadu obrazków kategorii');
define('_MI_WFL_MAINIMGDIR'        ,'Katalog głównego obrazka');
define('_MI_WFL_USETHUMBS'         , 'Używać miniaturek:');
define("_MI_WFL_USETHUMBSDSC"      , "Dozwolone typy plików: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links stworzy miniatury obrazków. Wybierz 'Nie' aby używać obrazki orginalnych rozmiarów.</div>");
define('_MI_WFL_DATEFORMAT'        , 'Stempel czasu:');
define('_MI_WFL_DATEFORMATDSC'     , 'Standardowy stempel dla WF-Links:');
define('_MI_WFL_SHOWDISCLAIMER'    , 'Pokaż warunki przed rejestracją?');
define('_MI_WFL_SHOWDISCLAIMERDSC' , 'Before a User can submit a Link show the Entry regulations?');
define('_MI_WFL_SHOWLINKDISCL'     , 'Pokaż warunki przed dodaniem nowego linku?');
define('_MI_WFL_SHOWLINKDISCLDSC'  , 'Pokaż ograniczenia linku przed jego otwarciem?');
define('_MI_WFL_DISCLAIMER'        , 'Wpisz warunki:');
define('_MI_WFL_LINKDISCLAIMER'    , 'Wpisz warunki dla linku:');
define('_MI_WFL_SUBCATS'           , 'Podkategorie:');
define("_MI_WFL_SUBMITART"         , "Dodawanie linków:");
define("_MI_WFL_SUBMITARTDSC"      , "Wybierz grupy które będą mogły dodawać nowe linki.");
define("_MI_WFL_RATINGGROUPS"      , "Ocenianie linków:");
define("_MI_WFL_RATINGGROUPSDSC"   , "Wybierz grupy które będą mogły oceniać link.");
define("_MI_WFL_IMGUPDATE"         , "Uaktualnić miniaturki?");
define("_MI_WFL_IMGUPDATEDSC"      , "Jeżeli zaznaczysz tak to obrazki będą odświeżane za kazdym razem, jeżeli nie to obrazek będzie używany cały czas, niezależnie. <br /><br />");
define("_MI_WFL_QUALITY"           , "Jakość miniaturki:");
define("_MI_WFL_QUALITYDSC"        , "Jakość najniżasza: 0 najwyższa: 100");
define("_MI_WFL_KEEPASPECT"        , "Utrzymywać kształt obrazka?");
define("_MI_WFL_KEEPASPECTDSC"     , "");
define("_MI_WFL_ADMINPAGE"         , "Licznik nowych linków:");
define("_MI_WFL_AMDMINPAGEDSC"     , "Liczba nowych linków które będą wyświetlane w panelu administratora.");
define("_MI_WFL_ARTICLESSORT"      , "Domyślnie sortuj wg:");
define("_MI_WFL_ARTICLESSORTDSC"   , "Wybierz domyślny sposób sortowania linków.");
define("_MI_WFL_TITLE"             , "Tytuł");
define("_MI_WFL_RATING"            , "Ocena");
define("_MI_WFL_WEIGHT"            , "Waga");
define("_MI_WFL_POPULARITY"        , "Popularność");
define("_MI_WFL_SUBMITTED2"        , "Data dodania");
define('_MI_WFL_COPYRIGHT'         , 'Copyright:');
define('_MI_WFL_COPYRIGHTDSC'      , 'Zaznacz aby wyświetlać copyright na stronie z linkami.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC'        , 'Zaznacz TAK aby wyświetlać pod-kategorie. Wybierając NIE ukryjesz pod-kategorie z listy');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY'     , 'Globalne');
define('_MI_WFL_GLOBAL_NOTIFYDSC'  , 'Globalne opcje powiadamiania.');
define('_MI_WFL_CATEGORY_NOTIFY'   , 'Kategoria');
define('_MI_WFL_CATEGORY_NOTIFYDSC', 'Opcje powiadamiania które stosują się do aktualnej katogorii.');
define('_MI_WFL_LINK_NOTIFY'       , 'Link');
define('_MI_WFL_FILE_NOTIFYDSC'    , 'Opcje powiadamiania które stosują się do aktualnego linku.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY'      , 'Nowa Kategoria');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP'   , 'Powiadom mnie gdy zostanie utworzona nowa kategoria.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC'   , 'Powiadom mnie gdy zostanie utworzony nowy link w kategorii.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ'   , '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowa kategoria/link');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY', 'Prośby modyfikacji linków');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Powiadom mnie gdy zostanie zgłoszona prośba modyfikacji linku.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Powiadom mnie kiedy nowa prośba modyfikacji linku została dodana.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Prośba modyfikacji linku');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY', 'Uszkodzony link');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Powiadom mnie gdy zostanie zgłoszony uszkodzony link.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Powiadom mnie gdy zostanie dodany raport o uszkodzonym linku.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Broken Link Reported');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY', 'Dodany link');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Powiadom mnie kiedy nowy link został dodany i czeka na akceptację.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Powiadom mnie kiedy nowy link został zatwierdzony.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : New link submitted');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY', 'Nowy link');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP', 'Powiadom mnie kiedy zostanie dodany nowy link.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC', 'Powiadom mnie kiedy zostanie zaakceptowany nowy link.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY', 'Link zaakceptowany');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Powiadom mnie kiedy zostanie dodany nowy link i czeka na akceptację w tej kategorii.');   
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
define('_MI_WFL_AUTHOR_DEVTEAM' , "Ekipa tworząca moduł");
define('_MI_WFL_AUTHOR_WEBSITE' , "Strona developera");
define('_MI_WFL_AUTHOR_EMAIL'   , "Email developera");
define('_MI_WFL_AUTHOR_CREDITS' , "Obsada");
define('_MI_WFL_MODULE_INFO'    , "Informacje developera o module");
define('_MI_WFL_MODULE_STATUS'  , "Status projektu");
define('_MI_WFL_MODULE_DEMO'    , "Przykładowa strona");
define('_MI_WFL_MODULE_SUPPORT' , "Oficjalne wsparcie");
define('_MI_WFL_MODULE_BUG'     , "Zgłoś błąd w tym module");
define('_MI_WFL_MODULE_FEATURE' , "Zaproponuj coś twórcom");
define('_MI_WFL_MODULE_DISCLAIMER'  , "Licencja");
define('_MI_WFL_RELEASE'            , "Data publikacji: ");

define('_MI_WFL_MODULE_MAILLIST'            , "Ogłoszenia dotyczące modułu");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS'   , "Ogłoszenia dotyczące modułu");
define('_MI_WFL_MODULE_MAILBUGS'            , "Ogłoszenia dotyczące bug-ów");
define('_MI_WFL_MODULE_MAILFEATURES'        , "Ogłoszenia dotyczące propozycji na przyszłość");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC', "Zobacz ostanie ogłoszenia WF.");
define('_MI_WFL_MODULE_MAILBUGSDSC'         , "Bugi, błędy, wysypki kodu");
define('_MI_WFL_MODULE_MAILFEATURESDSC'     , "Propozycje ulepszenia modułu.");

define('_MI_WFL_WARNINGTEXT', "UWAGA! NIE BĘDĘ TEGO TŁUMACZYŁ DO NIE UMIEM/NIE CHCE MI SIĘ/NIE MAM CZASU. SPRAWA JEST JASNA NIE CHCESZ - NIE UŻYWAJ. NIE MASZ ŻADEJ GWARANCJI ŻE TO DZIAŁA. ZACHOWAJ SZACUNEK DLA EKIPY WF I TŁUMACZA. THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
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

define('_MI_WFL_AUTHOR_CREDITSTEXT',"Ekipa WF-Projects pragnie podziękować następującym osobą za ich pomoc i wsparcie podczas tworzenia tego modułu.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, kurak_bu, dap997");
define('_MI_WFL_AUTHOR_BUGFIXES', "Historia zmian");

define('_MI_WFL_COPYRIGHTIMAGE', "Możesz modyfikować i dostosowywać WF-Links do swoich potrzeb. Nie możesz modyfikować znacznie kodu modułu bez zgody ekipy WF-Projects.");

define('_MI_WFL_SELECTFORUM', "Wybierz Forum:");
define('_MI_WFL_SELECTFORUMDSC', "Wybierz jakie forum masz zainstalowane który będzie używany przez WF-Links.");

define('_MI_WFL_DISPLAYFORUM1', "Newbb (wszystkie)");
define('_MI_WFL_DISPLAYFORUM2', "IPB");
define('_MI_WFL_DISPLAYFORUM3', "Moduł PHPBB2");

?>