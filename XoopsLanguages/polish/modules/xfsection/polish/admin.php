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
define("_AM_PATH_MANAGEMENT","Menad�er �cie�ek");
define("_AM_LIST_BROKEN",'Lista b��dnych �ci�gaczy');

//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","Baza danych zmodyfikowana pomy�lnie!");
define("_AM_STORYID","ID");
define("_AM_TITLE","Tytu�");
define("_AM_SUMMARY","Razem");
define("_AM_CATEGORY","Nazwa sekcji"); //******
define("_AM_CATEGORY2","Modyfikuj t� kategori�:"); //******
define("_AM_POSTER","Autor");
define("_AM_SUBMITTED2","Data nades�ania");
define("_AM_NOSHOWART2","Nie pokazuj");
define("_AM_ACTION","Akcja");
define("_AM_EDIT","Edytuj");
define("_AM_DELETE","Usu�");
define("_AM_LAST10ARTS","Published Articles");
define("_AM_PUBLISHED","Published Date");
define("_AM_PUBLISHEDON","Publication Date"); 
define("_AM_GO","wy�lij");
define("_AM_EDITARTICLE","Edytuj artyku�");
define("_AM_POSTNEWARTICLE","Edytuj artyku�");
define("_AM_RUSUREDEL","Jeste� pewien, �e chcesz usun�� ten artyku� i wszystkie jego komentarze?");
define("_AM_YES","Tak");
define("_AM_NO","Nie");
define("_AM_ALLOWEDHTML","Zezw�l na HTML:");
define("_AM_DISAMILEY","Wy��cz emotikony");
define("_AM_DISHTML","Wy��cz HTML");
define("_AM_PREVIEW","Przegl�daj");
define("_AM_SAVE","Zapisz");
define("_AM_ADD","Dodaj");
define("_AM_SMILIE","Dodaj emotikony do artyku�u");
define("_AM_EXGRAPHIC","Dodaj zewn�trzn� grafik� do artyku�u");
define("_AM_GRAPHIC","Dodaj lokaln� grafik� do artyku�u");
define("_AM_FILESHOWDESCRIPT","Wy�aduj opis pliku"); //new
define("_AM_ARTICLEMANAGEMENT","Menad�er artyku��w");
define("_AM_ARTICLEMANAGEMENTLINKS","Menad�er odsy�aczy do artyku��w");
define("_AM_ARTICLEPREVIEW","Przegl�d artyku�u");
define("_AM_ADDMCATEGORY","Utw�rz now� sekcj�");
define("_AM_CATEGORYNAME","Nazwa sekcji");
define("_AM_CATEGORYTAKEMETO","Kliknij tutaj, a�eby utworzy� now� kategori�.");
define("_AM_NOCATEGORY","B��D - Nie utworzono kategorii.");
define("_AM_MAX40CHAR","(max: 40 liter)");
define("_AM_CATEGORYIMG","Obrazek sekcji");
define("_AM_IMGNAEXLOC","nazwa obrazka + rozszerzenie znajduje si� w %s");
define("_AM_IN","<b>Utw�rz w sekcji</b> <br />(Puste: Sekcja g��wna(podstawowa), w przeciwnym wypadku podsekcja)");
define("_AM_MOVETO","<b>Przesu� do sekcji</b> (Puste: Nie przesuwaj sekcji)");
define("_AM_MODIFYCATEGORY","Modyfikuj sekcj�");
define("_AM_MODIFY","Modyfikuj");
define("_AM_PARENTCATEGORY","Sekcja podstawowa");
define("_AM_SAVECHANGE","Zapisz zmiany");
define("_AM_DEL","Usu�");
define("_AM_CANCEL","B��d");
define("_AM_WAYSYWTDTTAL","OSTRZE�ENIE: Jeste� pewien, �e chcesz usun�� t� sekcj� oraz wszystkie artyku�y i komentarze?");
// Added in Beta6
define("_AM_CATEGORYSMNGR","Menad�er sekcji");
define("_AM_PEARTICLES","Utw�rz nowy artyku�");
define("_AM_GENERALCONF","Konfiguracja generalna");

// WFSECTION
define("_AM_UPDATEFAIL","B��d modyfikacji.");
define("_AM_EDITFILE","Edycja przy��czonego pliku");
define("_AM_CATEGORYDESC","Category Byline text");
define("_AM_FILESBASEPATH","Ustaw katalog dla przy��czanych plik�w:");
define("_AM_AGRAPHICPATH","Ustaw katalog dla grafiki/obrazk�w artyku��w:");
define("_AM_SGRAPHICPATH","Ustaw katalog dla grafiki/obrazk�w sekcji:");
define("_AM_SMILIECPATH","Ustaw katalog dla emotikon�w:");
define("_AM_HTMLCPATH","Ustaw katalog dla plik�w HTML:");
define("_AM_FILEUPLOADSPATH","Do��czone pliki: ");
define("_AM_FILEUPLOADSTEMPPATH","Attached Temp: ");
define("_AM_ARTICLESFILEPATH","Obrazki artyku�u: ");
define("_AM_SECTIONFILEPATH","Obrazki sekcji: ");
define("_AM_SMILIEFILEPATH","Obrazki emotikon�w: ");
define("_AM_HTMLFILEPATH","Pliki HTML: ");
define("_AM_UPLOADCONFIGFILE","Wy�adowanie pliku Config: ");
define("_AM_ARTICLESAPAGE","Ilo�� artyku��w do pokazania na stronie:");
define("_AM_ARTICLESAPAGE2","Ilo�� artyku��w do pokazania na ka�dej stronie before page navigation is shown:");
define("_AM_NOIMG","Brak obrazka");
define("_AM_PIDINVALID","Sekcja podstawowa jest b��dna");
define("_AM_NOTITLE","Brak tytu�u. Tytu� jest wymagany.");
define("_AM_FILEDEL","OSTRZE�ENIE: Jeste� pewien, �e chcesz usun�� ten plik?");
define("_AM_AFERTSETCATE","Po dodaniu sekcji mo�esz dodawa� artyku�y.");
define("_AM_IMGUPLOAD","Wy�adowanie obrazka sekcji");
define("_AM_IMGUPLOAD2","Aktualny folder obrazka to ");
define("_AM_IMGNAME","Nazwa pliku (Puste: Taka sama jak nazwa wy�adowanego pliku)");
define("_AM_UPLOADED","Wy�adowano!");
define("_AM_ISNOTWRITABLE","jest niezapisywalny!");
define("_AM_UPLOADFAIL","OSTRZE�ENIE: B��dne wy�adowanie. Przyczyna:");
define("_AM_NOTALLOWEDMINETYPE","Nie jeste� uprawniony do wy�adowywania tego typu plik�w.");
define("_AM_FILETOOBIG","Rozmiar pliku jest wi�kszy ni� dozwolony!");

define("_AM_CATEGORYMENU","Konfiguracja indeksu kategorii");
define("_AM_ARTICLE2MENU","Konfiguracja indeksu artyku�u");
define("_AM_ARTICLEPAGEMENU","Konfiguracja strony artyku�u");
define("_AM_BLOCKMENU","Konfiguracja blok�w");
define("_AM_ADMINEDITMENU","Generalna konfiguracja artyku��w");
define("_AM_ADMINCONFIGMENU","Konfiguracja admina");

define("_AM_ARTIMGUPLOAD","Wy�aduj obrazek");
define("_AM_TOPPAGETYPE","Show links to Articles instead of Article count?");
define("_AM_SHOWCATPIC","Pokaza� obrazki sekcji w indeksie kategorii?");
define("_AM_WYSIWYG","U�ywa� raczej edytora WYSIWYG ni� edytora XOOPS?");
define("_AM_SHOWCOMMENTS","Pokaza� komentarze u�ytkownik�w na stronie artyku�u?");
define("_AM_SUBMITTED","Artyku�y przeslane przez u�ytkownika"); //added

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
define("_AM_ALLTXT","With <b>Zarz�dzanie artyku�em</b>Mo�esz edytowa� i usuwa� artyku�y oraz zmienia� ich nazw�. Ten tryb pokazyje wszystkie artyku�y w bazie danych.<br /><br />"); //added
define("_AM_PUBLISHEDTXT","<b>Zarz�dzanie opublikowanymi artyku�ami</b> Pokazuje artyku�y opublikowane (zaaprobowane przez webmastera).<br /><br />These are all the articles that will be shown in category listing of the XF-Section index page (including all those controlled by groupaccess).<br /><br />"); //added
define("_AM_SUBMITTEDTXT","<b>Zarz�dzanie nades�anymi artyku�ami</b> Pokazuje artyku�y nades�ane do serwisu przez u�ytkownik�w i pozwala na zarz�dzanie nimi.<br /><br />A�eby aprobowa� artyku� kliknij na odsy�acz <b>Edytuj</b>, nast�pnie zaznacz pole wyboru <b>Aprobuj</b> i zapisz artyku�. Nades�any artyku� zostanie opublikowany.<br /><br />"); //added
define("_AM_ONLINETXT","<b>Zarz�dzanie artyku�ami Online</b>Pokazuje wszystkie artyku�y ze statusem 'online'.<br /><br />A�eby zmieni� status artyku�u, kliknij odsy�acz <b>Edytuj</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
define("_AM_OFFLINETXT","<b>Zarz�dzanie artyku�ami Offline</b> will show all articles which status has been set to <b>offline</b>.<br /><br />To change the status of an article, click on the <b>Edit</b> i zaznacz  w polu wyboru <b>online</b> w��czony/wy��czony.<br /><br />"); //added
define("_AM_EXPIREDTXT","<b>Zarz�dzanie wygaszaniem artyku��w</b> Pokazuje wszystkie wygaszone artyku�y.<br /><br />Mo�esz �atwo zresetowa� dat� wygaszania klikaj�c na odsy�acz <b>Edytuj</b> i zmieniaj�c <b>Ustaw dat�/czas wygaszania</b>.<br /><br />"); //added
define("_AM_AUTOEXPIRETXT","<div><b>Zarz�dzanie autowygaszaniem artyku��w</b> Pokazuje wszystkie artyku�y, kt�re maj� by� wygaszone w okre�lonym czasie.<br /><br />Mo�esz �atwo zresetowa� dat� wygaszania klikaj�c na odsy�acz <b>Edytuj</b> i zmieniaj�c <b>Ustaw dat�/czas wygaszania</b>.<br /><br />"); //added
define("_AM_AUTOTXT","<b>Zarz�dzanie autopublikacj� artyku��w</b> will show all articles that have been set to publish at a future date.<br /><br />Mo�esz zmieni� ustawienia klikaj�c na odsy�acze <b>Edytuj</b> i zmieniaj�c 'Ustaw dat�/czas publikacji'.<br /><br />"); //added
define("_AM_NOSHOWTXT","<b>Niewidoczny artyku�</b> To jest specjalny typ artyku�u, inny ni� normalne artyku�y nie jest pokazywany na stronie g��wnej artyku��w i nie mo�e by� zobaczony z tego poziomu.&nbsp;&nbsp; Instead, Ten artyku� mo�e by� tylko ogl�dany w bloku menu `XF-Section`.<br /><br />U�yj tej opcji dla stron HTML i `Nie pokazuj INFO` (Opcja w edycji strony artyku�u) mo�esz pokaza� co chcesz. &nbsp;&nbsp;Na przyk�ad mo�e to by� strona `prywatnych notatek` etc.<br /><br />All other options control these types of articles also. i.e. published, expired, online/offline.<br /><br />"); //added

define("_AM_BLOCKCONF","Konfiguracja bloku");
define("_AM_TITLE1","Nazwa menu g��wnego bloku:");
define("_AM_TITLE4","Nazwa bloku ostatnich artyku��w:");
define("_AM_TITLE5","Nazwa bloku najlepszych artyku��w:");
define("_AM_ORDER","Alternatywny tekst 'Uporz�dkowanie':");
define("_AM_DATE","Alternatywny tekst 'Data':");
define("_AM_HITS","Alternatywny tekst 'Ods�ony':");
define("_AM_DISP","Alternatywny tekst 'Poka�':");
define("_AM_ARTCLS","Nazwa bloku artyku��w");
define("_AM_MENU_LINKS","<b>Odsy�acz menu zarz�dzania</b>");
define("_AM_BAN","Zabanuj u�ytkownika");
//New to version 0.9.2
define("_AM_CMODHEADER","Sprawdzenie dostepno�ci pliku");

// WF -> XF
define("_AM_CMODERRORINFO","Sprawdzanie katalog�w i plik�w pod wzgl�dem dost�pno�ci.<br/><br/>XF-Section will try to CHMOD the directories used. An error message will be shown if the write permissions are not correct.");

define("_AM_FILEPATH","Konfiguracja obrazk�w i wy�adowania");

// WF -> XF
define("_AM_FILEPATHWARNING","Sets the path for directories used by XF-Section.  A warning will be given if a path used is incorrect.<br/><br/>Leave a field empty if you wish WF-Section to use the default path/s.<br/><br/>");

define("_AM_FILEUSEPATH","Zmie� �cie�k� u�ytkownika");
define("_AM_PATHEXIST","�cie�ka istnieje!");
define("_AM_PATHNOTEXIST","�cie�ka nie istnieje! Prosz� to sprawdzi�!");
define("_AM_USERPATH","�cie�ka zdefiniowana przez u�ytkownika");
define("_AM_SHOWSELIMAGE","Showing current Selected Image: "); //******* Updated *******
define("_AM_SHOWSUBMENU","Poka� submenu dla ka�dej kategorii?");
define("_AM_MENUS","Konfiguracja indeksu g��wnego");
define("_AM_DEFAULTPATH","u�ycie �cie�ki domy�lnej");
define("_AM_SCROLLINGBLOCK","Use scrolling in recent article block? (Obsolete in this version!)");
define("_AM_BLOCKHEIGHT","Set scrolling Block height?");
define("_AM_DEFAULT"," Domy�lnie");
define("_AM_BLOCKAMOUNT","Number of lines to scroll?");
define("_AM_BLOCKDELAY","Scrolling Block Delay (Per line)");
define("_AM_LASTART","Ilo�� nowych artyku��w do pokazania w obszarze administracyjnym: ");
define("_AM_NUMUPLOADS","Ilo�� plik�w do wy�adowania w jednym czasie?");

// WF -> XF
define("_AM_WEBMASTONLY","Czy tylko Webmasterzy mog� zmieni� konfiguracj� XF-Section?");

define("_AM_DEFAULTS","Zresetowa� ca�� konfiguracj� do ustawie� domy�lnych?");

define("_AM_NOCMODERROR","( prawid�owo )");
define("_AM_CMODERROR","( Nieprawid�owy dost�p lub katalog nie istnieje! )");

// WF -> XF
define("_AM_REVERTED","Konfiguracja XF-Section przywr�cona do warto�ci domy�lnych");

define("_AM_GROUPPROMPT","Zezw�l na dost�p nast�puj�cym grupom:");
define("_AM_NOVIEWPERMISSION","Wybacz! Nie masz uprawnie� do przegl�dania tego obszaru.");
define("_AM_FILE","Plik: ");
define("_AM_NOMAINTEXT","B��D: TBrak tekstu/HTML w Twoim artykule! Artyku� nie mo�e by� pusty!");
define("_AM_DIR","Katalog: ");
define("_AM_MISC","Ustawienia MISC");

define("_AM_ISNOTWRITABLE2"," nie istnieje na serwerze! Prosz� zmie� na prawid�ow� �cie�k�! ");
define("_AM_CANNOTMODIFY"," Modyfikacja niemo�liwa bez podania prawid�owej �cie�ki! ");
define("_AM_PATH","�cie�ka: ");

define("_AM_CMODHEADER2","Sprawdzenie pliku");
define("_AM_ARTICLEMENU","Konfiguracja strony artyku�u");
define("_AM_APPROVE","Aprobuj");
define("_AM_MOVETOTOP","Przesu� ten artyku� na g�r�");
define("_AM_CHANGEDATETIME","Zmie� dat�/czas publikacji");
define("_AM_NOWSETTIME","Data publikacji ustawiona na: %s"); // %s is datetime for publication
define("_AM_CURRENTTIME","Obecny czas: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Ustaw dat�/czas dla publikacji");
define("_AM_MONTHC","Miesi�c:");
define("_AM_DAYC","Dzie�:");
define("_AM_YEARC","Rok:");
define("_AM_TIMEC","Godzina:");
define("_AM_AUTOAPPROVE","Automatycznie aprobowa� nades�ane artyku�y?");

// WF -> XF
define("_AM_DEFAULTTIME","Timestamp to be used for XF-Section:");
define("_AM_TURNOFFLINE","Ukry� XF-Section? (Tylko administrator ma dost�p do XF-Section)");

define("_AM_SHOWMARTICLES","Pokaza� kolumn� artyku�u?");
define("_AM_SHOWMUPDATED","Pokaza� zmodyfikowan� kolumn�?");
define("_AM_SHORTCATTITLE","Skraca� automatycznie tytu� kategorii?");
define("_AM_SHOWAUTHOR","Pokaza� kolumn� Nazwa autora?");
define("_AM_SHOWCOMMENTS2","Pokaza� kolumn� licznika komentarzy?");
define("_AM_SHOWFILE","Pokaza� kolumn� licznika plik�w?");
define("_AM_SHOWRATED","Pokaza� kolumn� licznika ocen?");
define("_AM_SHOWVOTES","Pokaza� kolumn� licznika g�os�w?");
define("_AM_SHOWPUBLISHED","Pokaza� kolumn� daty publikacji?");
define("_AM_SHOWHITS","Pokaza� kolumn� licznika ods�on?");
define("_AM_SHORTARTTITLE","Skraca� automatycznie tytu� artyku�u?");
define("_AM_OFFLINE","<b>Ukryj artyku�</b> (Status artyku�u b�dzie offline i nie b�dzie on mo�liwy do przegl�dania.)");
define("_AM_BROKENREPORTS","Raport o niew�a�ciwych plikach");
define("_AM_NOBROKEN","Brak niew�a�ciwych plik�w.");
define("_AM_IGNORE","Ignoruj");
define("_AM_FILEDELETED","Plik usunieto.");
define("_AM_BROKENDELETED","Raport o niew�a�ciwych plikach usuni�to.");
define("_AM_IGNOREDESC","Ignoruj (Ignorowanie raportu i tylko usuwanie <b>raportu o niew�a�ciwych plikach</b>)");
define("_AM_DELETEDESC","Usu� (Usuwanie <b>zraportowanych danych �ci�gacza</b> i <b>raportu o niew�a�ciwych plikach</b> dla pliku.)");
define("_AM_REPORTER","Przesy�aj�cy raport");
define("_AM_FILETITLE","Tytu� �ci�gacza: ");

// WF -> XF
define("_AM_DLCONF","Konfiguracja �ci�gacza XF-Section");

define("_AM_FILEDESCRIPT","Opis nazwy pliku");
define("_AM_STATUS","Status");
define("_AM_UPLOAD","Wy�aduj");
define("_AM_NOTIFYPUBLISH","Powiadamianie poczt� email po opublikowaniu");
define("_AM_VIEWHTML","Edycja HTML");
define("_AM_VIEWWAYSIWIG","Edycja WYSIWYG");
define("_AM_CATEGORYT","Kategoria");
define("_AM_ACCESS","Dost�p");
define("_AM_PAGE","Strona");
define("_AM_ARTICLEMANAGE","Zarz�dzanie artyku�em");
define("_AM_WEIGHTMANAGE","Zarz�dzanie wielko�ci�");
define("_AM_UPLOADMAN","Zarz�dzanie wy�adowaniem");

// WF -> XF
define("_AM_NOADMINRIGHTS","Wybacz, tylko webmasterzy mog� zmienia� konfiguracj� XF-Section");

define("_AM_FILECount","Licznik plik�w");
define("_AM_ALLARTICLES","Lista wszystkich artyku��w");
define("_AM_PUBLARTICLES","Lista opublikowanych artyku��w");
define("_AM_SUBLARTICLES","Lista nades�anych artyku��w");
define("_AM_ONLINARTICLES","Lista artyku��w Online");
define("_AM_OFFLIARTICLES","Lista artyku��w Offline");
define("_AM_EXPIREDARTICLES","Lista zako�czonych artyku��w");
define("_AM_AUTOEXPIREARTICLES","Lista autowygaszanych artyku��w");
define("_AM_AUTOARTICLES","Lista automatycznie opublikowanych artyku��w");
define("_AM_NOSHOWARTICLES","Lista artyku��w niewidocznych");
define("_NOADMINRIGHTS2","Tylko webmaster mo�e zmieni� ustawienia konfiguracji");
define("_AM_CANNOTHAVECATTHERE","B��D: Kategoria nie mo�e by� podrz�dn� dla samej siebie!!");
define("_AM_SECTIONMANAGE","Zarz�dzanie sekcjami");
define("_AM_SECTIONMANAGELINK","Sekcja odsy�aczy zarz�dzania");
define("_AM_FILEID","Plik");
define("_AM_FILEICON","Ikona");
define("_AM_FILESTORE","Zapisano jako");
define("_AM_REALFILENAME","Prawdziwa nazwa");
define("_AM_USERFILENAME","Nazwa u�ytkownika");
define("_AM_FILEMIMETYPE","Typ pliku");
define("_AM_FILESIZE","Rozmiar pliku");
define("_AM_FDCOUNTER","Licznik");
define("_AM_EXPARTS","Wyga�ni�te artyku�y");
define("_AM_EXPIRED","Data autowygaszania");
define("_AM_CREATED","Data utworzenia");
define("_AM_CHANGEEXPDATETIME","Zmie� dat�/czas wyga�ni�cia");
define("_AM_SETEXPDATETIME","Set the date/time of expiration");
define("_AM_NOWSETEXPTIME","Dat� wyga�ni�cia artyku�u ustawiono na : %s");
define("_AM_ANONPOST","Zezwoli� anonimowym u�ytkownikom na przesy�anie nowych artyku��w?");
define("_AM_NOTIFYSUBMIT","Send e-mail to Webmaster upon new submission?");
define("_AM_SECTIONIMAGE","Obrazek indeksu g��wnego");
define("_AM_SECTIONHEAD","Nag��wek indeksu g��wnego");
define("_AM_SECTIONFOOT","St�pka indeksu g��wnego");
define("_AM_SHOWVOTESINART","Zezwoli� u�ytkownikom na g�osowanie na artyku�?");
define("_AM_SHOWREALNAME","Pokaza� u�ytkownikom rzeczywist� nazw� autora? (Will return username if real name not set)");
define("_AM_SHOWCATEGORYIMG","Display the above image in its section?");
define("_AM_EDITSERVERFILE","Edytuj pliki serwera");
define("_AM_CURRENTFILENAME","Obecna nazwa pliku: ");
define("_AM_CURRENTFILESIZE","Rozmiar pliku: ");
define("_AM_UPLOADFOLD","Folder wy�adowania: ");
define("_AM_UPLOADPATH","�cie�ka: ");
define("_AM_FREEDISKSPACE","Wolna powierchnia dyskowa:");   
define("_AM_RENAMETHIS","Zmieni� nazw� pliku?");
define("_AM_RENAMEFILE","Zmien nazw� pliku");
define("_AM_SHOWSUMMARY","Pokaza� kolumn� Razem?"); 
define("_AM_SHOWICON","Pokaza� ikony 'Popularne i zmodyfikowane'?");
define("_AM_INDEXHEADING","Tytu� strony g��wnej artyku��w"); 
define("_AM_EXTERNALARTICLE","Artyku� zewn�trzny </b> This will override Text editor and HTML File"); 

// added in WFS v1b6
define("_AM_POPULARITY", "Popularno��");
define("_AM_ARTICLESSORT", "Porz�dek sortowania artyku��w");
define("_AM_NAVTOOLTYPE", "Typ narz�dzi nawigacyjnych");
define("_AM_SELECTBOX", "Pole wyboru");
define("_AM_SELECTSUBS", "Pole wyboru z podsekcjami");
define("_AM_LINKEDPATH", "Odes�ane �cie�ki");
define("_AM_LINKSANDSELECT", "Odsy�acze i pola wyboru");
define("_AM_NONE", "Brak");
define("_AM_CATEGORYWEIGHT", "Rozmiar sekcji");
define("_AM_ARTICLEWEIGHT", "Rozmiar artyku�u");
define("_AM_WEIGHT", "Rozmiar");
define('_AM_DUPLICATECATEGORY','Duplikuj sekcj�');

// add
define('_AM_DUPLICATE_ARTICLES','Kopiowanie artyku��w');

define('_AM_COPY', 'Kopiuj');
define('_AM_TO', 'do');
define('_AM_NEWCATEGORYNAME', 'Nowa nazwa sekcji');
define('_AM_DUPLICATE', 'Duplikuj');
define('_AM_DUPLICATEWSUBS', 'Duplikacja z podsekcjami');
define('_AM_ALLOWEDMIMETYPES', 'Dopuszczalne typy Mime');
define('_AM_MODIFYFILE', 'Modyfikuj pliki artyku�u');
define('_AM_FILESTATS', 'Statystyka plik�w przy��czonych');
define('_AM_FILESTAT', 'Statystyka plik�w dla artyku�u: '); 
define('_AM_ERRORCHECK', 'Sprawdzenie pliku'); 
define('_AM_LASTACCESS', 'Ostatnio dost�pny'); 
define('_AM_DOWNLOADED', 'Times Downloaded'); 
define('_AM_DOWNLOADSIZE', 'Rozmiar pliku');
define('_AM_UPLOADFILESIZE', 'MAX rozmiar wy�adowywanego pliku (KB) 1048576 = 1 Meg');
define('_AM_FILEMODE', 'Ustawienia uprawnien wy�adowania pliku');
define('_AM_IMGHEIGHT', 'Max wysoko�� wy�adowywanego obrazka');
define('_AM_IMGWIDTH', 'Max szeroko�c wy�adowywanego obrazka');
define('_AM_FILEPERMISSION', 'Uprawnienia pliku');  
define('_AM_IMGESIZETOBIG', 'Wysoko��/szeroko�� obrazka wi�ksza ni� dozwolona');
define('_AM_CATREORDERTEXT', 'Mo�esz st�d ponownie uporz�dkowa� wszystkie kategorie.<br />Kategorie g��wne s� ciemnoniebieskie, podkategorie jasnoniebieskie, a potem szare. Ka�da sekcja jest listowana wed�ug wielko�ci.<br /><br />Aby uporz�dkowa� ponownie artyku�y, kliknij na tytu� kategorii i zobaczysz list� jej artyku��w.');  
define('_WFS_ATTACHFILE', 'Przy��cz plik');  
define('_WFS_ATTACHFILEACCESS', 'Uprawnienia dost�pu sa takie same jak dla artyku�u.  Mo�esz to zmieni� przy edycji pliku przy��czonego.');  
define('_AM_WFSFILESHOW', 'Przy��czone pliki');  
define('_AM_ATTACHEDFILE', 'Showing Files');  
define('_AM_ATTACHEDFILEM', 'Zarz�dzanie przy��czonym plikiem'); 
define('_AM_UPOADMANAGE', 'Zarz�dzanie plikiem'); 
define('_AM_CAREORDER', 'Rozmiar kategorii i artyku�u');
define('_AM_CAREORDER2', 'Sortuj ponownie kategorie');
define('_AM_CAREORDER3', 'Sortuj ponownie artyku�y');   

define('_AM_PICON', 'Pokaza� ikony artyku�u (strony)?'); 

// WF -> XF
define('_AM_JUSTHTML', '<b> Nie pokazuj INFO</b> (This option will stop XF-Section from displaying all info in the article. Just a plain html page or text.)');

define('_AM_NOSHOART', '<b> Nie pokazuj artyku�u</b> (Using this option will prevent this article from being shown in the main index listing. Instead this article will only be shown in the article link menu block</b>.)');
define('_AM_INDEXPAGECONFIG', 'Zarz�dzanie indeksem g��wnym');

// WF -> XF
define('_AM_INDEXPAGECONFIGTXT', 'This allows you to change parts of the main index page of XF-Section.<br /><br />You can easily change the image logo, heading, header and footer text.');
//define('_AM_VISITSUPPORT', 'Visit the WF-section website for information, updates and help on its usage.<br /> WF-Sections v1 B6 &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Sections</a>');
define('_AM_VISITSUPPORT', '');

define('_AM_REORDERID', 'ID'); 
define('_AM_REORDERPID', 'PID'); 
define('_AM_REORDERTITLE', 'Tytu�');
define('_AM_REORDERDESCRIPT', 'Opis');
define('_AM_REORDERWEIGHT', 'Wielko��');
define('_AM_REORDERSUMMARY', 'Razem');

// *** add menu: bulk import ***
define("_AM_IMPORT", "Bulk import of HTML files");
define("_AM_IMPORT_DIRNAME", "Nazwa katalogu lub pliku");
define("_AM_IMPORT_HTMLPROC", "Processing of HTML files");
define("_AM_IMPORT_EXTFILTER", "Nazwa zewnetrznego programu filtruj�cego");

define("_AM_IMPORT_BODY", "Only body part is taken out");
define("_AM_IMPORT_INDEXHTML", "Zmie� odsy�acz do index.html, there are in the same directory or in one upper directory.");
define("_AM_IMPORT_LINK", "Zmie� odsy�acz do tytu�u = Nazwa pliku");
define("_AM_IMPORT_IMAGE", "Zmie� odsy�acz do pliku obrazka w katalogu obrazk�w. ");
define("_AM_IMPORT_ATMARK", "zmie� @ na &amp;#064;");
define("_AM_IMPORT_TEXTPROC", "Processing of Text files");
define("_AM_IMPORT_TEXTPRE", "Surround Text file by &lt;pre&gt; &lt;/pre&gt;");
define("_AM_IMPORT_IMAGEPROC", "Processing of Image files");
define("_AM_IMPORT_IMAGEDIR", "Nazwa katalogu obrazk�w");
define("_AM_IMPORT_IMAGECOPY", "Kopiuj pliki obrazk�w do katalogu obrazk�w.");
define("_AM_IMPORT_TESTMODE", "Tryb testu");
define("_AM_IMPORT_TESTDB", "Not store in DB. Please remove a check, when you store. ");
define("_AM_IMPORT_TESTEXEC", "Test");
define("_AM_IMPORT_TESTTEXT", "Poka� tekst testu");
define("_AM_IMPORT_EXPLANE", "A judgment of the kind of file is performed by the extension.<br>Plik HTML ma rozszerzenie html lubhtm.<br>Plik tekstowy ma rozszerzenie txt.<br>Plik graficzny ma rozszerzenie gif, jpg, jpeg, lub png.<br>");
define("_AM_IMPORT_ERRDIREXI", "Katalog lub plik nie istnieje");
define("_AM_IMPORT_ERRFILEXI", "Program filtruj�cy nie istnieje");
define("_AM_IMPORT_ERRFILEXEC", "Program filtruj�cy jest niewykonalny");
define("_AM_IMPORT_ERRNOCOPY", "No specification of image copy");
define("_AM_IMPORT_ERRNOIMGDIR", "No specification of image directory");
define("_AM_IMPORT_ERRIMGDIREXI", "Specified image directory is not directory");
define("_AM_IMPORT_ERRFILEEXI", "Plik nie istnieje");

?>