<?php
// 2004/02/28 K.OHWADA
// admin menu same as popup menu
//   add _AM_PATH_MANAGEMENT  _AM_LIST_BROKEN
// multi langauge
//   add _AM_DUPLICATE_ARTICLES
// unify a article menu and a title

// 2003/11/21 K.OHWADA
// rename WFsection to XFsection
// add menu: bulk import

// zmodyfikowany 2004/03/03 (Modified by Artur Strauss artur_strauss@poczta.fm)


// admin menu same as popup menu
define("_AM_PREFERENCE",'Preferencje');
define("_AM_PATH_MANAGEMENT","Menad¿er ¶cie¿ek");
define("_AM_LIST_BROKEN",'Lista b³êdnych ¶ci±gaczy');

//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","Baza danych zmodyfikowana pomy¶lnie!");
define("_AM_STORYID","ID");
define("_AM_TITLE","Tytu³");
define("_AM_SUMMARY","Razem");
define("_AM_CATEGORY","Nazwa sekcji"); //******
define("_AM_CATEGORY2","Modyfikuj tê kategoriê:"); //******
define("_AM_POSTER","Autor");
define("_AM_SUBMITTED2","Data nades³ania");
define("_AM_NOSHOWART2","Nie pokazuj");
define("_AM_ACTION","Akcja");
define("_AM_EDIT","Edytuj");
define("_AM_DELETE","Usuñ");
define("_AM_LAST10ARTS","Published Articles");
define("_AM_PUBLISHED","Published Date");
define("_AM_PUBLISHEDON","Publication Date"); 
define("_AM_GO","wy¶lij");
define("_AM_EDITARTICLE","Edytuj artyku³");
define("_AM_POSTNEWARTICLE","Edytuj artyku³");
define("_AM_RUSUREDEL","Jeste¶ pewien, ¿e chcesz usun±æ ten artyku³ i wszystkie jego komentarze?");
define("_AM_YES","Tak");
define("_AM_NO","Nie");
define("_AM_ALLOWEDHTML","Zezwól na HTML:");
define("_AM_DISAMILEY","Wy³±cz emotikony");
define("_AM_DISHTML","Wy³±cz HTML");
define("_AM_PREVIEW","Przegl±daj");
define("_AM_SAVE","Zapisz");
define("_AM_ADD","Dodaj");
define("_AM_SMILIE","Dodaj emotikony do artyku³u");
define("_AM_EXGRAPHIC","Dodaj zewnêtrzn± grafikê do artyku³u");
define("_AM_GRAPHIC","Dodaj lokaln± grafikê do artyku³u");
define("_AM_FILESHOWDESCRIPT","Wy³aduj opis pliku"); //new
define("_AM_ARTICLEMANAGEMENT","Menad¿er artyku³ów");
define("_AM_ARTICLEMANAGEMENTLINKS","Menad¿er odsy³aczy do artyku³ów");
define("_AM_ARTICLEPREVIEW","Przegl±d artyku³u");
define("_AM_ADDMCATEGORY","Utwórz now± sekcjê");
define("_AM_CATEGORYNAME","Nazwa sekcji");
define("_AM_CATEGORYTAKEMETO","Kliknij tutaj, a¿eby utworzyæ now± kategoriê.");
define("_AM_NOCATEGORY","B£¡D - Nie utworzono kategorii.");
define("_AM_MAX40CHAR","(max: 40 liter)");
define("_AM_CATEGORYIMG","Obrazek sekcji");
define("_AM_IMGNAEXLOC","nazwa obrazka + rozszerzenie znajduje siê w %s");
define("_AM_IN","<b>Utwórz w sekcji</b> <br />(Puste: Sekcja g³ówna(podstawowa), w przeciwnym wypadku podsekcja)");
define("_AM_MOVETO","<b>Przesuñ do sekcji</b> (Puste: Nie przesuwaj sekcji)");
define("_AM_MODIFYCATEGORY","Modyfikuj sekcjê");
define("_AM_MODIFY","Modyfikuj");
define("_AM_PARENTCATEGORY","Sekcja podstawowa");
define("_AM_SAVECHANGE","Zapisz zmiany");
define("_AM_DEL","Usuñ");
define("_AM_CANCEL","B³±d");
define("_AM_WAYSYWTDTTAL","OSTRZE¯ENIE: Jeste¶ pewien, ¿e chcesz usun±æ tê sekcjê oraz wszystkie artyku³y i komentarze?");
// Added in Beta6
define("_AM_CATEGORYSMNGR","Menad¿er sekcji");
define("_AM_PEARTICLES","Utwórz nowy artyku³");
define("_AM_GENERALCONF","Konfiguracja generalna");

// WFSECTION
define("_AM_UPDATEFAIL","B³±d modyfikacji.");
define("_AM_EDITFILE","Edycja przy³±czonego pliku");
define("_AM_CATEGORYDESC","Category Byline text");
define("_AM_FILESBASEPATH","Ustaw katalog dla przy³±czanych plików:");
define("_AM_AGRAPHICPATH","Ustaw katalog dla grafiki/obrazków artyku³ów:");
define("_AM_SGRAPHICPATH","Ustaw katalog dla grafiki/obrazków sekcji:");
define("_AM_SMILIECPATH","Ustaw katalog dla emotikonów:");
define("_AM_HTMLCPATH","Ustaw katalog dla plików HTML:");
define("_AM_FILEUPLOADSPATH","Do³±czone pliki: ");
define("_AM_FILEUPLOADSTEMPPATH","Attached Temp: ");
define("_AM_ARTICLESFILEPATH","Obrazki artyku³u: ");
define("_AM_SECTIONFILEPATH","Obrazki sekcji: ");
define("_AM_SMILIEFILEPATH","Obrazki emotikonów: ");
define("_AM_HTMLFILEPATH","Pliki HTML: ");
define("_AM_UPLOADCONFIGFILE","Wy³adowanie pliku Config: ");
define("_AM_ARTICLESAPAGE","Ilo¶æ artyku³ów do pokazania na stronie:");
define("_AM_ARTICLESAPAGE2","Ilo¶æ artyku³ów do pokazania na ka¿dej stronie before page navigation is shown:");
define("_AM_NOIMG","Brak obrazka");
define("_AM_PIDINVALID","Sekcja podstawowa jest b³êdna");
define("_AM_NOTITLE","Brak tytu³u. Tytu³ jest wymagany.");
define("_AM_FILEDEL","OSTRZE¯ENIE: Jeste¶ pewien, ¿e chcesz usun±æ ten plik?");
define("_AM_AFERTSETCATE","Po dodaniu sekcji mo¿esz dodawaæ artyku³y.");
define("_AM_IMGUPLOAD","Wy³adowanie obrazka sekcji");
define("_AM_IMGUPLOAD2","Aktualny folder obrazka to ");
define("_AM_IMGNAME","Nazwa pliku (Puste: Taka sama jak nazwa wy³adowanego pliku)");
define("_AM_UPLOADED","Wy³adowano!");
define("_AM_ISNOTWRITABLE","jest niezapisywalny!");
define("_AM_UPLOADFAIL","OSTRZE¯ENIE: B³êdne wy³adowanie. Przyczyna:");
define("_AM_NOTALLOWEDMINETYPE","Nie jeste¶ uprawniony do wy³adowywania tego typu plików.");
define("_AM_FILETOOBIG","Rozmiar pliku jest wiêkszy ni¿ dozwolony!");

define("_AM_CATEGORYMENU","Konfiguracja indeksu kategorii");
define("_AM_ARTICLE2MENU","Konfiguracja indeksu artyku³u");
define("_AM_ARTICLEPAGEMENU","Konfiguracja strony artyku³u");
define("_AM_BLOCKMENU","Konfiguracja bloków");
define("_AM_ADMINEDITMENU","Generalna konfiguracja artyku³ów");
define("_AM_ADMINCONFIGMENU","Konfiguracja admina");

define("_AM_ARTIMGUPLOAD","Wy³aduj obrazek");
define("_AM_TOPPAGETYPE","Show links to Articles instead of Article count?");
define("_AM_SHOWCATPIC","Pokazaæ obrazki sekcji w indeksie kategorii?");
define("_AM_WYSIWYG","U¿ywaæ raczej edytora WYSIWYG ni¿ edytora XOOPS?");
define("_AM_SHOWCOMMENTS","Pokazaæ komentarze u¿ytkowników na stronie artyku³u?");
define("_AM_SUBMITTED","Artyku³y przeslane przez u¿ytkownika"); //added

//define("_AM_ALLTXT","<h4>Article Management</h4></div><div>With <b>Article Management</b> you can edit, delete or rename any article. This mode will show every article within the database.<br /><br />"); //added
// WF -> XF
//define("_AM_PUBLISHEDTXT","<h4>Article Published Management</h4></div><div><b>Article Published Management</b> will show all articles that have been published (Approved by Webmaster).<br /><br />These are all the articles that will be shown in category listing of the XF-Section index page (including all those controlled by groupaccess).<br /><br />"); //added
//define("_AM_SUBMITTEDTXT","<h4>Article Submission Management</h4></div><div><b>Article Submission management</b> will show all articles submitted by your website users and allow you to moderate them.<br /><br />To approve an article, click on <b>Edit</b> link, then highlight the <b>Approve</b> checkbox and the save the article. The submitted article will then be published.<br /><br />"); //added
//define("_AM_ONLINETXT","<h4>Article Online Management</h4></div><div><b>Article Online Management</b> will show all articles which status has been set to 'online'.<br /><br />To change the status of an article, click on the <b>Edit</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
//define("_AM_OFFLINETXT","<h4>Article Offline Management</h4></div><div><b>Article Offline Management</b> will show all articles which status has been set to <b>offline</b>.<br /><br />To change the status of an article, click on the <b>Edit</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
//define("_AM_EXPIREDTXT","<h4>Article Expired Management</h4></div><div><b>Article Expired Management</b> will show all articles that have expired.<br /><br />You can easily reset the expire date by clicking on <b>Edit</b> link and by changing the <b>Set the date/time of expiration</b> setting.<br /><br />"); //added
//define("_AM_AUTOEXPIRETXT","<h4>Article Auto Expired Management</h4></div><div><b>Article Auto Expired Management</b> will show all articles that have been set to expire on a certain date.<br /><br />You can reset the expire date by clicking on <b>Edit</b> link and changing the <b>Set the date/time of expiration</b> setting.<br /><br />"); //added
//define("_AM_AUTOTXT","<h4>Article Auto Management</h4></div><div><b>Article Auto Publish Management</b> will show all articles that have been set to publish at a future date.<br /><br />This setting can be changed by clicking on the <b>edit</b> link and changing the 'Set the date/time of publish' setting.<br /><br />"); //added
// WF -> XF
//define("_AM_NOSHOWTXT","<h4>No Show Article</h4></div><div><b>No Show Article</b> The are a special type of article, unlike your normal articles these will not show up in article index pages and will not be seen that way.&nbsp;&nbsp; Instead, these article will only show in the `XF-Section Menu block`.<br /><br />Using this option with HTML Pages and `No Display info` (Option on the edit article page) you can show just what you want. &nbsp;&nbsp;An example of this would be a `privacy notice` page etc.<br /><br />All other options control these types of articles also. i.e. published, expired, online/offline.<br /><br />"); //added

// unify a article menu and a title
define("_AM_ALLTXT","With <b>Zarz±dzanie artyku³em</b>Mo¿esz edytowaæ i usuwaæ artyku³y oraz zmieniaæ ich nazwê. Ten tryb pokazyje wszystkie artyku³y w bazie danych.<br /><br />"); //added
define("_AM_PUBLISHEDTXT","<b>Zarz±dzanie opublikowanymi artyku³ami</b> Pokazuje artyku³y opublikowane (zaaprobowane przez webmastera).<br /><br />These are all the articles that will be shown in category listing of the XF-Section index page (including all those controlled by groupaccess).<br /><br />"); //added
define("_AM_SUBMITTEDTXT","<b>Zarz±dzanie nades³anymi artyku³ami</b> Pokazuje artyku³y nades³ane do serwisu przez u¿ytkowników i pozwala na zarz±dzanie nimi.<br /><br />A¿eby aprobowaæ artyku³ kliknij na odsy³acz <b>Edytuj</b>, nastêpnie zaznacz pole wyboru <b>Aprobuj</b> i zapisz artyku³. Nades³any artyku³ zostanie opublikowany.<br /><br />"); //added
define("_AM_ONLINETXT","<b>Zarz±dzanie artyku³ami Online</b>Pokazuje wszystkie artyku³y ze statusem 'online'.<br /><br />A¿eby zmieniæ status artyku³u, kliknij odsy³acz <b>Edytuj</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
define("_AM_OFFLINETXT","<b>Zarz±dzanie artyku³ami Offline</b> will show all articles which status has been set to <b>offline</b>.<br /><br />To change the status of an article, click on the <b>Edit</b> i zaznacz  w polu wyboru <b>online</b> w³±czony/wy³±czony.<br /><br />"); //added
define("_AM_EXPIREDTXT","<b>Zarz±dzanie wygaszaniem artyku³ów</b> Pokazuje wszystkie wygaszone artyku³y.<br /><br />Mo¿esz ³atwo zresetowaæ datê wygaszania klikaj±c na odsy³acz <b>Edytuj</b> i zmieniaj±c <b>Ustaw datê/czas wygaszania</b>.<br /><br />"); //added
define("_AM_AUTOEXPIRETXT","<div><b>Zarz±dzanie autowygaszaniem artyku³ów</b> Pokazuje wszystkie artyku³y, które maj± byæ wygaszone w okre¶lonym czasie.<br /><br />Mo¿esz ³atwo zresetowaæ datê wygaszania klikaj±c na odsy³acz <b>Edytuj</b> i zmieniaj±c <b>Ustaw datê/czas wygaszania</b>.<br /><br />"); //added
define("_AM_AUTOTXT","<b>Zarz±dzanie autopublikacj± artyku³ów</b> will show all articles that have been set to publish at a future date.<br /><br />Mo¿esz zmieniæ ustawienia klikaj±c na odsy³acze <b>Edytuj</b> i zmieniaj±c 'Ustaw datê/czas publikacji'.<br /><br />"); //added
define("_AM_NOSHOWTXT","<b>Niewidoczny artyku³</b> To jest specjalny typ artyku³u, inny ni¿ normalne artyku³y nie jest pokazywany na stronie g³ównej artyku³ów i nie mo¿e byæ zobaczony z tego poziomu.&nbsp;&nbsp; Instead, Ten artyku³ mo¿e byæ tylko ogl±dany w bloku menu `XF-Section`.<br /><br />U¿yj tej opcji dla stron HTML i `Nie pokazuj INFO` (Opcja w edycji strony artyku³u) mo¿esz pokazaæ co chcesz. &nbsp;&nbsp;Na przyk³ad mo¿e to byæ strona `prywatnych notatek` etc.<br /><br />All other options control these types of articles also. i.e. published, expired, online/offline.<br /><br />"); //added

define("_AM_BLOCKCONF","Konfiguracja bloku");
define("_AM_TITLE1","Nazwa menu g³ównego bloku:");
define("_AM_TITLE4","Nazwa bloku ostatnich artyku³ów:");
define("_AM_TITLE5","Nazwa bloku najlepszych artyku³ów:");
define("_AM_ORDER","Alternatywny tekst 'Uporz±dkowanie':");
define("_AM_DATE","Alternatywny tekst 'Data':");
define("_AM_HITS","Alternatywny tekst 'Ods³ony':");
define("_AM_DISP","Alternatywny tekst 'Poka¿':");
define("_AM_ARTCLS","Nazwa bloku artyku³ów");
define("_AM_MENU_LINKS","<b>Odsy³acz menu zarz±dzania</b>");
define("_AM_BAN","Zabanuj u¿ytkownika");
//New to version 0.9.2
define("_AM_CMODHEADER","Sprawdzenie dostepno¶ci pliku");

// WF -> XF
define("_AM_CMODERRORINFO","Sprawdzanie katalogów i plików pod wzglêdem dostêpno¶ci.<br/><br/>XF-Section will try to CHMOD the directories used. An error message will be shown if the write permissions are not correct.");

define("_AM_FILEPATH","Konfiguracja obrazków i wy³adowania");

// WF -> XF
define("_AM_FILEPATHWARNING","Sets the path for directories used by XF-Section.  A warning will be given if a path used is incorrect.<br/><br/>Leave a field empty if you wish WF-Section to use the default path/s.<br/><br/>");

define("_AM_FILEUSEPATH","Zmieñ ¶cie¿kê u¿ytkownika");
define("_AM_PATHEXIST","¦cie¿ka istnieje!");
define("_AM_PATHNOTEXIST","¦cie¿ka nie istnieje! Proszê to sprawdziæ!");
define("_AM_USERPATH","¦cie¿ka zdefiniowana przez u¿ytkownika");
define("_AM_SHOWSELIMAGE","Showing current Selected Image: "); //******* Updated *******
define("_AM_SHOWSUBMENU","Poka¿ submenu dla ka¿dej kategorii?");
define("_AM_MENUS","Konfiguracja indeksu g³ównego");
define("_AM_DEFAULTPATH","u¿ycie ¶cie¿ki domy¶lnej");
define("_AM_SCROLLINGBLOCK","Use scrolling in recent article block? (Obsolete in this version!)");
define("_AM_BLOCKHEIGHT","Set scrolling Block height?");
define("_AM_DEFAULT"," Domy¶lnie");
define("_AM_BLOCKAMOUNT","Number of lines to scroll?");
define("_AM_BLOCKDELAY","Scrolling Block Delay (Per line)");
define("_AM_LASTART","Ilo¶æ nowych artyku³ów do pokazania w obszarze administracyjnym: ");
define("_AM_NUMUPLOADS","Ilo¶æ plików do wy³adowania w jednym czasie?");

// WF -> XF
define("_AM_WEBMASTONLY","Czy tylko Webmasterzy mog± zmieniæ konfiguracjê XF-Section?");

define("_AM_DEFAULTS","Zresetowaæ ca³± konfiguracjê do ustawieñ domy¶lnych?");

define("_AM_NOCMODERROR","( prawid³owo )");
define("_AM_CMODERROR","( Nieprawid³owy dostêp lub katalog nie istnieje! )");

// WF -> XF
define("_AM_REVERTED","Konfiguracja XF-Section przywrócona do warto¶ci domy¶lnych");

define("_AM_GROUPPROMPT","Zezwól na dostêp nastêpuj±cym grupom:");
define("_AM_NOVIEWPERMISSION","Wybacz! Nie masz uprawnieñ do przegl±dania tego obszaru.");
define("_AM_FILE","Plik: ");
define("_AM_NOMAINTEXT","B£¡D: TBrak tekstu/HTML w Twoim artykule! Artyku³ nie mo¿e byæ pusty!");
define("_AM_DIR","Katalog: ");
define("_AM_MISC","Ustawienia MISC");

define("_AM_ISNOTWRITABLE2"," nie istnieje na serwerze! Proszê zmieñ na prawid³ow± ¶cie¿kê! ");
define("_AM_CANNOTMODIFY"," Modyfikacja niemo¿liwa bez podania prawid³owej ¶cie¿ki! ");
define("_AM_PATH","¦cie¿ka: ");

define("_AM_CMODHEADER2","Sprawdzenie pliku");
define("_AM_ARTICLEMENU","Konfiguracja strony artyku³u");
define("_AM_APPROVE","Aprobuj");
define("_AM_MOVETOTOP","Przesuñ ten artyku³ na górê");
define("_AM_CHANGEDATETIME","Zmieñ datê/czas publikacji");
define("_AM_NOWSETTIME","Data publikacji ustawiona na: %s"); // %s is datetime for publication
define("_AM_CURRENTTIME","Obecny czas: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Ustaw datê/czas dla publikacji");
define("_AM_MONTHC","Miesi±c:");
define("_AM_DAYC","Dzieñ:");
define("_AM_YEARC","Rok:");
define("_AM_TIMEC","Godzina:");
define("_AM_AUTOAPPROVE","Automatycznie aprobowaæ nades³ane artyku³y?");

// WF -> XF
define("_AM_DEFAULTTIME","Timestamp to be used for XF-Section:");
define("_AM_TURNOFFLINE","Ukryæ XF-Section? (Tylko administrator ma dostêp do XF-Section)");

define("_AM_SHOWMARTICLES","Pokazaæ kolumnê artyku³u?");
define("_AM_SHOWMUPDATED","Pokazaæ zmodyfikowan± kolumnê?");
define("_AM_SHORTCATTITLE","Skracaæ automatycznie tytu³ kategorii?");
define("_AM_SHOWAUTHOR","Pokazaæ kolumnê Nazwa autora?");
define("_AM_SHOWCOMMENTS2","Pokazaæ kolumnê licznika komentarzy?");
define("_AM_SHOWFILE","Pokazaæ kolumnê licznika plików?");
define("_AM_SHOWRATED","Pokazaæ kolumnê licznika ocen?");
define("_AM_SHOWVOTES","Pokazaæ kolumnê licznika g³osów?");
define("_AM_SHOWPUBLISHED","Pokazaæ kolumnê daty publikacji?");
define("_AM_SHOWHITS","Pokazaæ kolumnê licznika ods³on?");
define("_AM_SHORTARTTITLE","Skracaæ automatycznie tytu³ artyku³u?");
define("_AM_OFFLINE","<b>Ukryj artyku³</b> (Status artyku³u bêdzie offline i nie bêdzie on mo¿liwy do przegl±dania.)");
define("_AM_BROKENREPORTS","Raport o niew³a¶ciwych plikach");
define("_AM_NOBROKEN","Brak niew³a¶ciwych plików.");
define("_AM_IGNORE","Ignoruj");
define("_AM_FILEDELETED","Plik usunieto.");
define("_AM_BROKENDELETED","Raport o niew³a¶ciwych plikach usuniêto.");
define("_AM_IGNOREDESC","Ignoruj (Ignorowanie raportu i tylko usuwanie <b>raportu o niew³a¶ciwych plikach</b>)");
define("_AM_DELETEDESC","Usuñ (Usuwanie <b>zraportowanych danych ¶ci±gacza</b> i <b>raportu o niew³a¶ciwych plikach</b> dla pliku.)");
define("_AM_REPORTER","Przesy³aj±cy raport");
define("_AM_FILETITLE","Tytu³ ¶ci±gacza: ");

// WF -> XF
define("_AM_DLCONF","Konfiguracja ¶ci±gacza XF-Section");

define("_AM_FILEDESCRIPT","Opis nazwy pliku");
define("_AM_STATUS","Status");
define("_AM_UPLOAD","Wy³aduj");
define("_AM_NOTIFYPUBLISH","Powiadamianie pocztê email po opublikowaniu");
define("_AM_VIEWHTML","Edycja HTML");
define("_AM_VIEWWAYSIWIG","Edycja WYSIWYG");
define("_AM_CATEGORYT","Kategoria");
define("_AM_ACCESS","Dostêp");
define("_AM_PAGE","Strona");
define("_AM_ARTICLEMANAGE","Zarz±dzanie artyku³em");
define("_AM_WEIGHTMANAGE","Zarz±dzanie wielko¶ci±");
define("_AM_UPLOADMAN","Zarz±dzanie wy³adowaniem");

// WF -> XF
define("_AM_NOADMINRIGHTS","Wybacz, tylko webmasterzy mog± zmieniaæ konfiguracjê XF-Section");

define("_AM_FILECount","Licznik plików");
define("_AM_ALLARTICLES","Lista wszystkich artyku³ów");
define("_AM_PUBLARTICLES","Lista opublikowanych artyku³ów");
define("_AM_SUBLARTICLES","Lista nades³anych artyku³ów");
define("_AM_ONLINARTICLES","Lista artyku³ów Online");
define("_AM_OFFLIARTICLES","Lista artyku³ów Offline");
define("_AM_EXPIREDARTICLES","Lista zakoñczonych artyku³ów");
define("_AM_AUTOEXPIREARTICLES","Lista autowygaszanych artyku³ów");
define("_AM_AUTOARTICLES","Lista automatycznie opublikowanych artyku³ów");
define("_AM_NOSHOWARTICLES","Lista artyku³ów niewidocznych");
define("_NOADMINRIGHTS2","Tylko webmaster mo¿e zmieniæ ustawienia konfiguracji");
define("_AM_CANNOTHAVECATTHERE","B£¡D: Kategoria nie mo¿e byæ podrzêdn± dla samej siebie!!");
define("_AM_SECTIONMANAGE","Zarz±dzanie sekcjami");
define("_AM_SECTIONMANAGELINK","Sekcja odsy³aczy zarz±dzania");
define("_AM_FILEID","Plik");
define("_AM_FILEICON","Ikona");
define("_AM_FILESTORE","Zapisano jako");
define("_AM_REALFILENAME","Prawdziwa nazwa");
define("_AM_USERFILENAME","Nazwa u¿ytkownika");
define("_AM_FILEMIMETYPE","Typ pliku");
define("_AM_FILESIZE","Rozmiar pliku");
define("_AM_FDCOUNTER","Licznik");
define("_AM_EXPARTS","Wyga¶niête artyku³y");
define("_AM_EXPIRED","Data autowygaszania");
define("_AM_CREATED","Data utworzenia");
define("_AM_CHANGEEXPDATETIME","Zmieñ datê/czas wyga¶niêcia");
define("_AM_SETEXPDATETIME","Set the date/time of expiration");
define("_AM_NOWSETEXPTIME","Datê wyga¶niêcia artyku³u ustawiono na : %s");
define("_AM_ANONPOST","Zezwoliæ anonimowym u¿ytkownikom na przesy³anie nowych artyku³ów?");
define("_AM_NOTIFYSUBMIT","Send e-mail to Webmaster upon new submission?");
define("_AM_SECTIONIMAGE","Obrazek indeksu g³ównego");
define("_AM_SECTIONHEAD","Nag³ówek indeksu g³ównego");
define("_AM_SECTIONFOOT","Stópka indeksu g³ównego");
define("_AM_SHOWVOTESINART","Zezwoliæ u¿ytkownikom na g³osowanie na artyku³?");
define("_AM_SHOWREALNAME","Pokazaæ u¿ytkownikom rzeczywist± nazwê autora? (Will return username if real name not set)");
define("_AM_SHOWCATEGORYIMG","Display the above image in its section?");
define("_AM_EDITSERVERFILE","Edytuj pliki serwera");
define("_AM_CURRENTFILENAME","Obecna nazwa pliku: ");
define("_AM_CURRENTFILESIZE","Rozmiar pliku: ");
define("_AM_UPLOADFOLD","Folder wy³adowania: ");
define("_AM_UPLOADPATH","¦cie¿ka: ");
define("_AM_FREEDISKSPACE","Wolna powierchnia dyskowa:");   
define("_AM_RENAMETHIS","Zmieniæ nazwê pliku?");
define("_AM_RENAMEFILE","Zmien nazwê pliku");
define("_AM_SHOWSUMMARY","Pokazaæ kolumnê Razem?"); 
define("_AM_SHOWICON","Pokazaæ ikony 'Popularne i zmodyfikowane'?");
define("_AM_INDEXHEADING","Tytu³ strony g³ównej artyku³ów"); 
define("_AM_EXTERNALARTICLE","Artyku³ zewnêtrzny </b> This will override Text editor and HTML File"); 

// added in WFS v1b6
define("_AM_POPULARITY","Popularno¶æ");
define("_AM_ARTICLESSORT","Porz±dek sortowania artyku³ów");
define("_AM_NAVTOOLTYPE","Typ narzêdzi nawigacyjnych");
define("_AM_SELECTBOX","Pole wyboru");
define("_AM_SELECTSUBS","Pole wyboru z podsekcjami");
define("_AM_LINKEDPATH","Odes³ane ¶cie¿ki");
define("_AM_LINKSANDSELECT","Odsy³acze i pola wyboru");
define("_AM_NONE","Brak");
define("_AM_CATEGORYWEIGHT","Rozmiar sekcji");
define("_AM_ARTICLEWEIGHT","Rozmiar artyku³u");
define("_AM_WEIGHT","Rozmiar");
define('_AM_DUPLICATECATEGORY','Duplikuj sekcjê');

// add
define('_AM_DUPLICATE_ARTICLES','Kopiowanie artyku³ów');

define('_AM_COPY','Kopiuj');
define('_AM_TO','do');
define('_AM_NEWCATEGORYNAME','Nowa nazwa sekcji');
define('_AM_DUPLICATE','Duplikuj');
define('_AM_DUPLICATEWSUBS','Duplikacja z podsekcjami');
define('_AM_ALLOWEDMIMETYPES','Dopuszczalne typy Mime');
define('_AM_MODIFYFILE','Modyfikuj pliki artyku³u');
define('_AM_FILESTATS','Statystyka plików przy³±czonych');
define('_AM_FILESTAT','Statystyka plików dla artyku³u: '); 
define('_AM_ERRORCHECK','Sprawdzenie pliku'); 
define('_AM_LASTACCESS','Ostatnio dostêpny'); 
define('_AM_DOWNLOADED','Times Downloaded'); 
define('_AM_DOWNLOADSIZE','Rozmiar pliku');
define('_AM_UPLOADFILESIZE','MAX rozmiar wy³adowywanego pliku (KB) 1048576 = 1 Meg');
define('_AM_FILEMODE','Ustawienia uprawnien wy³adowania pliku');
define('_AM_IMGHEIGHT','Max wysoko¶æ wy³adowywanego obrazka');
define('_AM_IMGWIDTH','Max szeroko¶c wy³adowywanego obrazka');
define('_AM_FILEPERMISSION','Uprawnienia pliku');  
define('_AM_IMGESIZETOBIG','Wysoko¶æ/szeroko¶æ obrazka wiêksza ni¿ dozwolona');
define('_AM_CATREORDERTEXT','Mo¿esz st±d ponownie uporz±dkowaæ wszystkie kategorie.<br />Kategorie g³ówne s± ciemnoniebieskie, podkategorie jasnoniebieskie, a potem szare. Ka¿da sekcja jest listowana wed³ug wielko¶ci.<br /><br />Aby uporz±dkowaæ ponownie artyku³y, kliknij na tytu³ kategorii i zobaczysz listê jej artyku³ów.');  
define('_WFS_ATTACHFILE','Przy³±cz plik');  
define('_WFS_ATTACHFILEACCESS','Uprawnienia dostêpu sa takie same jak dla artyku³u.  Mo¿esz to zmieniæ przy edycji pliku przy³±czonego.');  
define('_AM_WFSFILESHOW','Przy³±czone pliki');  
define('_AM_ATTACHEDFILE','Showing Files');  
define('_AM_ATTACHEDFILEM','Zarz±dzanie przy³±czonym plikiem'); 
define('_AM_UPOADMANAGE','Zarz±dzanie plikiem'); 
define('_AM_CAREORDER','Rozmiar kategorii i artyku³u');
define('_AM_CAREORDER2','Sortuj ponownie kategorie');
define('_AM_CAREORDER3','Sortuj ponownie artyku³y');   

define('_AM_PICON','Pokazaæ ikony artyku³u (strony)?'); 

// WF -> XF
define('_AM_JUSTHTML','<b> Nie pokazuj INFO</b> (This option will stop XF-Section from displaying all info in the article. Just a plain html page or text.)');

define('_AM_NOSHOART','<b> Nie pokazuj artyku³u</b> (Using this option will prevent this article from being shown in the main index listing. Instead this article will only be shown in the article link menu block</b>.)');
define('_AM_INDEXPAGECONFIG','Zarz±dzanie indeksem g³ównym');

// WF -> XF
define('_AM_INDEXPAGECONFIGTXT','This allows you to change parts of the main index page of XF-Section.<br /><br />You can easily change the image logo, heading, header and footer text.');
//define('_AM_VISITSUPPORT','Visit the WF-section website for information, updates and help on its usage.<br /> WF-Sections v1 B6 &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Sections</a>');
define('_AM_VISITSUPPORT','');

define('_AM_REORDERID','ID'); 
define('_AM_REORDERPID','PID'); 
define('_AM_REORDERTITLE','Tytu³');
define('_AM_REORDERDESCRIPT','Opis');
define('_AM_REORDERWEIGHT','Wielko¶æ');
define('_AM_REORDERSUMMARY','Razem');

// *** add menu: bulk import ***
define("_AM_IMPORT","Bulk import of HTML files");
define("_AM_IMPORT_DIRNAME","Nazwa katalogu lub pliku");
define("_AM_IMPORT_HTMLPROC","Processing of HTML files");
define("_AM_IMPORT_EXTFILTER","Nazwa zewnetrznego programu filtruj±cego");

define("_AM_IMPORT_BODY","Only body part is taken out");
define("_AM_IMPORT_INDEXHTML","Zmieñ odsy³acz do index.html, there are in the same directory or in one upper directory.");
define("_AM_IMPORT_LINK","Zmieñ odsy³acz do tytu³u = Nazwa pliku");
define("_AM_IMPORT_IMAGE","Zmieñ odsy³acz do pliku obrazka w katalogu obrazków. ");
define("_AM_IMPORT_ATMARK","zmieñ @ na &amp;#064;");
define("_AM_IMPORT_TEXTPROC","Processing of Text files");
define("_AM_IMPORT_TEXTPRE","Surround Text file by &lt;pre&gt; &lt;/pre&gt;");
define("_AM_IMPORT_IMAGEPROC","Processing of Image files");
define("_AM_IMPORT_IMAGEDIR","Nazwa katalogu obrazków");
define("_AM_IMPORT_IMAGECOPY","Kopiuj pliki obrazków do katalogu obrazków.");
define("_AM_IMPORT_TESTMODE","Tryb testu");
define("_AM_IMPORT_TESTDB","Not store in DB. Please remove a check, when you store. ");
define("_AM_IMPORT_TESTEXEC","Test");
define("_AM_IMPORT_TESTTEXT","Poka¿ tekst testu");
define("_AM_IMPORT_EXPLANE","A judgment of the kind of file is performed by the extension.<br>Plik HTML ma rozszerzenie html lubhtm.<br>Plik tekstowy ma rozszerzenie txt.<br>Plik graficzny ma rozszerzenie gif, jpg, jpeg, lub png.<br>");
define("_AM_IMPORT_ERRDIREXI","Katalog lub plik nie istnieje");
define("_AM_IMPORT_ERRFILEXI","Program filtruj±cy nie istnieje");
define("_AM_IMPORT_ERRFILEXEC","Program filtruj±cy jest niewykonalny");
define("_AM_IMPORT_ERRNOCOPY","No specification of image copy");
define("_AM_IMPORT_ERRNOIMGDIR","No specification of image directory");
define("_AM_IMPORT_ERRIMGDIREXI","Specified image directory is not directory");
define("_AM_IMPORT_ERRFILEEXI","Plik nie istnieje");

?>