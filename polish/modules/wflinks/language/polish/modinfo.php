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
define("_MI_WFL_DESC","Tworzy modu³ linków gdzie u¿ytkownicy moga dodawaæ/oceniaæ ró¿ne linki.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Najnowsze linki");
define("_MI_WFL_BNAME2","Najlepsze linki");

// Sub menu titles
define("_MI_WFL_SMNAME1","Dodaj");
define("_MI_WFL_SMNAME2","Popularne");
define("_MI_WFL_SMNAME3","Najwy¿ej oceniane");

// Names of admin menu items
define("_MI_WFL_BINDEX"     ,"Strona g³ówna");
define("_MI_WFL_INDEXPAGE"  ,"Zarz±dzanie stron± g³ówn±");
define("_MI_WFL_MCATEGORY"  ,"Zarz±dzanie kategoriami");
define("_MI_WFL_MLINKS"     ,"Zarz±dzanie linkami");
define("_MI_WFL_MUPLOADS"   ,"Upload obrazków");
define("_MI_WFL_PERMISSIONS","Uprawnienia");
define("_MI_WFL_BLOCKADMIN" ,"Bloki");
define("_MI_WFL_MVOTEDATA"  ,"Ocenianie");

// Title of config items
define('_MI_WFL_POPULAR'    , 'Popularno¶æ linku');
define('_MI_WFL_POPULARDSC' , 'Po ilu klikniêciach link przyjmie status popularnego.');

//Display Icons
define("_MI_WFL_ICONDISPLAY"    ,"Linki popularne i nowe:");
define("_MI_WFL_DISPLAYICONDSC" , "Jak wy¶wietlaæ ikonê nowego i popularnego linku.");
define("_MI_WFL_DISPLAYICON1"   , "Jako ikonê");
define("_MI_WFL_DISPLAYICON2"   , "Jako tekst");
define("_MI_WFL_DISPLAYICON3"   , "Nie wy¶wietlaj wcale");

define("_MI_WFL_DAYSNEW"        ,"Nowy link:");
define("_MI_WFL_DAYSNEWDSC"     ,"Ile dni link bêdzie uznawany za nowy.");
define("_MI_WFL_DAYSUPDATED"    ,"Uaktualniony link:");
define("_MI_WFL_DAYSUPDATEDDSC" ,"Ile dni link bêdzie uznawany za uaktualniony.");

define('_MI_WFL_PERPAGE'        , 'Lista linków w kategorii:');
define('_MI_WFL_PERPAGEDSC'     , 'Ile linków bêdzie pokazywane w ka¿dym spisie linków w kategorii.');

define('_MI_WFL_USESHOTS'      , 'Pokazywaæ Screenshot ?');
define('_MI_WFL_USESHOTSDSC'   , 'Wybierz tak aby pokazywaæ screenshot dla ka¿ego linku');
define('_MI_WFL_SHOTWIDTH'     , 'Szeroko¶æ screenshota');
define('_MI_WFL_SHOTWIDTHDSC'  , 'Wybierz szeroko¶æ jak± bêdzie mia³ pokazywany sceenshot');
define('_MI_WFL_SHOTHEIGHT'    , 'Wysoko¶æ screenshota');
define('_MI_WFL_SHOTHEIGHTDSC' , 'Wybierz wysoko¶æ jak± bêdzie mia³ pokazywany sceenshot');
define('_MI_WFL_CHECKHOST'     , 'Leechowanie?');
define('_MI_WFL_REFERERS'      , 'Te strone bêd± mog³y dodawaæ linki bezpo¶rednio z twojej strony<br />Kolejne strony oddzielaj #');
define("_MI_WFL_ANONPOST"      , "Uprawnienia niezarejestrowanych:");
define("_MI_WFL_ANONPOSTDSC"   , "Pozwól niezarejestrowanym na dodawanie lub upload na twoj± strone?");
define('_MI_WFL_AUTOAPPROVE'   , 'Auto-akceptacja nowych linków');
define('_MI_WFL_AUTOAPPROVEDSC','Wybierz tak aby nowe linki by³y dodawane bez weryfikcji administratora.');

define('_MI_WFL_MAXFILESIZE'    ,'Rozmiar pliku uploadowanego (KB)');
define('_MI_WFL_MAXFILESIZEDSC' ,'Maximum link size permitted with link uploads.');
define('_MI_WFL_IMGWIDTH'       ,'Szeroko¶æ uploadowanego obrazka');
define('_MI_WFL_IMGWIDTHDSC'    ,'Maksymalna szeroko¶æ obrazka dla linku');
define('_MI_WFL_IMGHEIGHT'      ,'Wysoko¶æ uploadowanego obrazka');
define('_MI_WFL_IMGHEIGHTDSC'   ,'Maksymalna wysoko¶æ obrazka dla linku');

define('_MI_WFL_UPLOADDIR'         ,'Katalog uploadu (Bez slasha na koñcu)');
define('_MI_WFL_ALLOWSUBMISS'      ,'Uprawnienia u¿ytkowników:');
define('_MI_WFL_ALLOWSUBMISSDSC'   ,'Zezwoliæ na dodawanie nowych linków');
define('_MI_WFL_ALLOWUPLOADS'      ,'Upload przez u¿ytkowników:');
define('_MI_WFL_ALLOWUPLOADSDSC'   ,'Zezwoliæ u¿ytkownikom na upload linków bezpo¶rednio na twoj± stronê');
define('_MI_WFL_SCREENSHOTS'       ,'Katalog uploadu screenshotów');
define('_MI_WFL_CATEGORYIMG'       ,'Katalog uploadu obrazków kategorii');
define('_MI_WFL_MAINIMGDIR'        ,'Katalog g³ównego obrazka');
define('_MI_WFL_USETHUMBS'         , 'U¿ywaæ miniaturek:');
define("_MI_WFL_USETHUMBSDSC"      , "Dozwolone typy plików: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links stworzy miniatury obrazków. Wybierz 'Nie' aby u¿ywaæ obrazki orginalnych rozmiarów.</div>");
define('_MI_WFL_DATEFORMAT'        , 'Stempel czasu:');
define('_MI_WFL_DATEFORMATDSC'     , 'Standardowy stempel dla WF-Links:');
define('_MI_WFL_SHOWDISCLAIMER'    , 'Poka¿ warunki przed rejestracj±?');
define('_MI_WFL_SHOWDISCLAIMERDSC' , 'Before a User can submit a Link show the Entry regulations?');
define('_MI_WFL_SHOWLINKDISCL'     , 'Poka¿ warunki przed dodaniem nowego linku?');
define('_MI_WFL_SHOWLINKDISCLDSC'  , 'Poka¿ ograniczenia linku przed jego otwarciem?');
define('_MI_WFL_DISCLAIMER'        , 'Wpisz warunki:');
define('_MI_WFL_LINKDISCLAIMER'    , 'Wpisz warunki dla linku:');
define('_MI_WFL_SUBCATS'           , 'Podkategorie:');
define("_MI_WFL_SUBMITART"         , "Dodawanie linków:");
define("_MI_WFL_SUBMITARTDSC"      , "Wybierz grupy które bêd± mog³y dodawaæ nowe linki.");
define("_MI_WFL_RATINGGROUPS"      , "Ocenianie linków:");
define("_MI_WFL_RATINGGROUPSDSC"   , "Wybierz grupy które bêd± mog³y oceniaæ link.");
define("_MI_WFL_IMGUPDATE"         , "Uaktualniæ miniaturki?");
define("_MI_WFL_IMGUPDATEDSC"      , "Je¿eli zaznaczysz tak to obrazki bêd± od¶wie¿ane za kazdym razem, je¿eli nie to obrazek bêdzie u¿ywany ca³y czas, niezale¿nie. <br /><br />");
define("_MI_WFL_QUALITY"           , "Jako¶æ miniaturki:");
define("_MI_WFL_QUALITYDSC"        , "Jako¶æ najni¿asza: 0 najwy¿sza: 100");
define("_MI_WFL_KEEPASPECT"        , "Utrzymywaæ kszta³t obrazka?");
define("_MI_WFL_KEEPASPECTDSC"     , "");
define("_MI_WFL_ADMINPAGE"         , "Licznik nowych linków:");
define("_MI_WFL_AMDMINPAGEDSC"     , "Liczba nowych linków które bêd± wy¶wietlane w panelu administratora.");
define("_MI_WFL_ARTICLESSORT"      , "Domy¶lnie sortuj wg:");
define("_MI_WFL_ARTICLESSORTDSC"   , "Wybierz domy¶lny sposób sortowania linków.");
define("_MI_WFL_TITLE"             , "Tytu³");
define("_MI_WFL_RATING"            , "Ocena");
define("_MI_WFL_WEIGHT"            , "Waga");
define("_MI_WFL_POPULARITY"        , "Popularno¶æ");
define("_MI_WFL_SUBMITTED2"        , "Data dodania");
define('_MI_WFL_COPYRIGHT'         , 'Copyright:');
define('_MI_WFL_COPYRIGHTDSC'      , 'Zaznacz aby wy¶wietlaæ copyright na stronie z linkami.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC'        , 'Zaznacz TAK aby wy¶wietlaæ pod-kategorie. Wybieraj±c NIE ukryjesz pod-kategorie z listy');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY'     , 'Globalne');
define('_MI_WFL_GLOBAL_NOTIFYDSC'  , 'Globalne opcje powiadamiania.');
define('_MI_WFL_CATEGORY_NOTIFY'   , 'Kategoria');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Opcje powiadamiania które stosuj± siê do aktualnej katogorii.');
define('_MI_WFL_LINK_NOTIFY'       , 'Link');
define('_MI_WFL_FILE_NOTIFYDSC'    , 'Opcje powiadamiania które stosuj± siê do aktualnego linku.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY'      , 'Nowa Kategoria');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP'   , 'Powiadom mnie gdy zostanie utworzona nowa kategoria.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC'   , 'Powiadom mnie gdy zostanie utworzony nowy link w kategorii.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ'   , '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowa kategoria/link');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Pro¶by modyfikacji linków');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Powiadom mnie gdy zostanie zg³oszona pro¶ba modyfikacji linku.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','Powiadom mnie kiedy nowa pro¶ba modyfikacji linku zosta³a dodana.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Pro¶ba modyfikacji linku');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Uszkodzony link');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Powiadom mnie gdy zostanie zg³oszony uszkodzony link.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','Powiadom mnie gdy zostanie dodany raport o uszkodzonym linku.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Broken Link Reported');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Dodany link');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Powiadom mnie kiedy nowy link zosta³ dodany i czeka na akceptacjê.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','Powiadom mnie kiedy nowy link zosta³ zatwierdzony.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : New link submitted');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Nowy link');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Powiadom mnie kiedy zostanie dodany nowy link.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','Powiadom mnie kiedy zostanie zaakceptowany nowy link.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Link zaakceptowany');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Powiadom mnie kiedy zostanie dodany nowy link i czeka na akceptacjê w tej kategorii.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','Powiadom mnie kiedy zostanie zaakceptowany nowy link w tej kategorii.');      
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link w kategorii'); 

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Nowy link w kategorii');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Powiadom mnie kiedy zostanie dodany nowy link w tej kategorii.');   
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','Powiadom mnie kiedy zostanie dodany nowy link w tej kategorii.');      
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy link w kategorii'); 

define('_MI_WFL_LINK_APPROVE_NOTIFY','Link zaakceptowany');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Powiadom mnie kiedy ten link zostanie zaakceptowany.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','Powiadom mnie kiedy ten link zostanie zaakceptowany.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Link zaakceptowany');

define('_MI_WFL_AUTHOR_INFO'    , "Informacje developera");
define('_MI_WFL_AUTHOR_NAME'    , "Developer");
define('_MI_WFL_AUTHOR_DEVTEAM' , "Ekipa tworz±ca modu³");
define('_MI_WFL_AUTHOR_WEBSITE' , "Strona developera");
define('_MI_WFL_AUTHOR_EMAIL'   , "Email developera");
define('_MI_WFL_AUTHOR_CREDITS' , "Obsada");
define('_MI_WFL_MODULE_INFO'    , "Informacje developera o module");
define('_MI_WFL_MODULE_STATUS'  , "Status projektu");
define('_MI_WFL_MODULE_DEMO'    , "Przyk³adowa strona");
define('_MI_WFL_MODULE_SUPPORT' , "Oficjalne wsparcie");
define('_MI_WFL_MODULE_BUG'     , "Zg³o¶ b³±d w tym module");
define('_MI_WFL_MODULE_FEATURE' , "Zaproponuj co¶ twórcom");
define('_MI_WFL_MODULE_DISCLAIMER'  , "Licencja");
define('_MI_WFL_RELEASE'            , "Data publikacji: ");

define('_MI_WFL_MODULE_MAILLIST'            , "Og³oszenia dotycz±ce modu³u");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS'   , "Og³oszenia dotycz±ce modu³u");
define('_MI_WFL_MODULE_MAILBUGS'            , "Og³oszenia dotycz±ce bug-ów");
define('_MI_WFL_MODULE_MAILFEATURES'        , "Og³oszenia dotycz±ce propozycji na przysz³o¶æ");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Zobacz ostanie og³oszenia WF.");
define('_MI_WFL_MODULE_MAILBUGSDSC'         , "Bugi, b³êdy, wysypki kodu");
define('_MI_WFL_MODULE_MAILFEATURESDSC'     , "Propozycje ulepszenia modu³u.");

define('_MI_WFL_WARNINGTEXT',"UWAGA! NIE BÊDÊ TEGO T£UMACZY£ DO NIE UMIEM/NIE CHCE MI SIÊ/NIE MAM CZASU. SPRAWA JEST JASNA NIE CHCESZ - NIE U¯YWAJ. NIE MASZ ¯ADEJ GWARANCJI ¯E TO DZIA£A. ZACHOWAJ SZACUNEK DLA EKIPY WF I T£UMACZA. THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
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

define('_MI_WFL_AUTHOR_CREDITSTEXT',"Ekipa WF-Projects pragnie podziêkowaæ nastêpuj±cym osob± za ich pomoc i wsparcie podczas tworzenia tego modu³u.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, kurak_bu, dap997");
define('_MI_WFL_AUTHOR_BUGFIXES',"Historia zmian");

define('_MI_WFL_COPYRIGHTIMAGE',"Mo¿esz modyfikowaæ i dostosowywaæ WF-Links do swoich potrzeb. Nie mo¿esz modyfikowaæ znacznie kodu modu³u bez zgody ekipy WF-Projects.");

define('_MI_WFL_SELECTFORUM',"Wybierz Forum:");
define('_MI_WFL_SELECTFORUMDSC',"Wybierz jakie forum masz zainstalowane który bêdzie u¿ywany przez WF-Links.");

define('_MI_WFL_DISPLAYFORUM1',"Newbb (wszystkie)");
define('_MI_WFL_DISPLAYFORUM2',"IPB");
define('_MI_WFL_DISPLAYFORUM3',"Modu³ PHPBB2");

?>