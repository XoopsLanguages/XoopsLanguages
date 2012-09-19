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
define("_AM_PATH_MANAGEMENT","Menadżer ścieżek");
define("_AM_LIST_BROKEN",'Lista błędnych ściągaczy');

//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","Baza danych zmodyfikowana pomyślnie!");
define("_AM_STORYID","ID");
define("_AM_TITLE","Tytuł");
define("_AM_SUMMARY","Razem");
define("_AM_CATEGORY","Nazwa sekcji"); //******
define("_AM_CATEGORY2","Modyfikuj tę kategorię:"); //******
define("_AM_POSTER","Autor");
define("_AM_SUBMITTED2","Data nadesłania");
define("_AM_NOSHOWART2","Nie pokazuj");
define("_AM_ACTION","Akcja");
define("_AM_EDIT","Edytuj");
define("_AM_DELETE","Usuń");
define("_AM_LAST10ARTS","Published Articles");
define("_AM_PUBLISHED","Published Date");
define("_AM_PUBLISHEDON","Publication Date"); 
define("_AM_GO","wyślij");
define("_AM_EDITARTICLE","Edytuj artykuł");
define("_AM_POSTNEWARTICLE","Edytuj artykuł");
define("_AM_RUSUREDEL","Jesteś pewien, że chcesz usunąć ten artykuł i wszystkie jego komentarze?");
define("_AM_YES","Tak");
define("_AM_NO","Nie");
define("_AM_ALLOWEDHTML","Zezwól na HTML:");
define("_AM_DISAMILEY","Wyłącz emotikony");
define("_AM_DISHTML","Wyłącz HTML");
define("_AM_PREVIEW","Przeglądaj");
define("_AM_SAVE","Zapisz");
define("_AM_ADD","Dodaj");
define("_AM_SMILIE","Dodaj emotikony do artykułu");
define("_AM_EXGRAPHIC","Dodaj zewnętrzną grafikę do artykułu");
define("_AM_GRAPHIC","Dodaj lokalną grafikę do artykułu");
define("_AM_FILESHOWDESCRIPT","Wyładuj opis pliku"); //new
define("_AM_ARTICLEMANAGEMENT","Menadżer artykułów");
define("_AM_ARTICLEMANAGEMENTLINKS","Menadżer odsyłaczy do artykułów");
define("_AM_ARTICLEPREVIEW","Przegląd artykułu");
define("_AM_ADDMCATEGORY","Utwórz nową sekcję");
define("_AM_CATEGORYNAME","Nazwa sekcji");
define("_AM_CATEGORYTAKEMETO","Kliknij tutaj, ażeby utworzyć nową kategorię.");
define("_AM_NOCATEGORY","BŁĄD - Nie utworzono kategorii.");
define("_AM_MAX40CHAR","(max: 40 liter)");
define("_AM_CATEGORYIMG","Obrazek sekcji");
define("_AM_IMGNAEXLOC","nazwa obrazka + rozszerzenie znajduje się w %s");
define("_AM_IN","<b>Utwórz w sekcji</b> <br />(Puste: Sekcja główna(podstawowa), w przeciwnym wypadku podsekcja)");
define("_AM_MOVETO","<b>Przesuń do sekcji</b> (Puste: Nie przesuwaj sekcji)");
define("_AM_MODIFYCATEGORY","Modyfikuj sekcję");
define("_AM_MODIFY","Modyfikuj");
define("_AM_PARENTCATEGORY","Sekcja podstawowa");
define("_AM_SAVECHANGE","Zapisz zmiany");
define("_AM_DEL","Usuń");
define("_AM_CANCEL","Błąd");
define("_AM_WAYSYWTDTTAL","OSTRZEŻENIE: Jesteś pewien, że chcesz usunąć tę sekcję oraz wszystkie artykuły i komentarze?");
// Added in Beta6
define("_AM_CATEGORYSMNGR","Menadżer sekcji");
define("_AM_PEARTICLES","Utwórz nowy artykuł");
define("_AM_GENERALCONF","Konfiguracja generalna");

// WFSECTION
define("_AM_UPDATEFAIL","Błąd modyfikacji.");
define("_AM_EDITFILE","Edycja przyłączonego pliku");
define("_AM_CATEGORYDESC","Category Byline text");
define("_AM_FILESBASEPATH","Ustaw katalog dla przyłączanych plików:");
define("_AM_AGRAPHICPATH","Ustaw katalog dla grafiki/obrazków artykułów:");
define("_AM_SGRAPHICPATH","Ustaw katalog dla grafiki/obrazków sekcji:");
define("_AM_SMILIECPATH","Ustaw katalog dla emotikonów:");
define("_AM_HTMLCPATH","Ustaw katalog dla plików HTML:");
define("_AM_FILEUPLOADSPATH","Dołączone pliki: ");
define("_AM_FILEUPLOADSTEMPPATH","Attached Temp: ");
define("_AM_ARTICLESFILEPATH","Obrazki artykułu: ");
define("_AM_SECTIONFILEPATH","Obrazki sekcji: ");
define("_AM_SMILIEFILEPATH","Obrazki emotikonów: ");
define("_AM_HTMLFILEPATH","Pliki HTML: ");
define("_AM_UPLOADCONFIGFILE","Wyładowanie pliku Config: ");
define("_AM_ARTICLESAPAGE","Ilość artykułów do pokazania na stronie:");
define("_AM_ARTICLESAPAGE2","Ilość artykułów do pokazania na każdej stronie before page navigation is shown:");
define("_AM_NOIMG","Brak obrazka");
define("_AM_PIDINVALID","Sekcja podstawowa jest błędna");
define("_AM_NOTITLE","Brak tytułu. Tytuł jest wymagany.");
define("_AM_FILEDEL","OSTRZEŻENIE: Jesteś pewien, że chcesz usunąć ten plik?");
define("_AM_AFERTSETCATE","Po dodaniu sekcji możesz dodawać artykuły.");
define("_AM_IMGUPLOAD","Wyładowanie obrazka sekcji");
define("_AM_IMGUPLOAD2","Aktualny folder obrazka to ");
define("_AM_IMGNAME","Nazwa pliku (Puste: Taka sama jak nazwa wyładowanego pliku)");
define("_AM_UPLOADED","Wyładowano!");
define("_AM_ISNOTWRITABLE","jest niezapisywalny!");
define("_AM_UPLOADFAIL","OSTRZEŻENIE: Błędne wyładowanie. Przyczyna:");
define("_AM_NOTALLOWEDMINETYPE","Nie jesteś uprawniony do wyładowywania tego typu plików.");
define("_AM_FILETOOBIG","Rozmiar pliku jest większy niż dozwolony!");

define("_AM_CATEGORYMENU","Konfiguracja indeksu kategorii");
define("_AM_ARTICLE2MENU","Konfiguracja indeksu artykułu");
define("_AM_ARTICLEPAGEMENU","Konfiguracja strony artykułu");
define("_AM_BLOCKMENU","Konfiguracja bloków");
define("_AM_ADMINEDITMENU","Generalna konfiguracja artykułów");
define("_AM_ADMINCONFIGMENU","Konfiguracja admina");

define("_AM_ARTIMGUPLOAD","Wyładuj obrazek");
define("_AM_TOPPAGETYPE","Show links to Articles instead of Article count?");
define("_AM_SHOWCATPIC","Pokazać obrazki sekcji w indeksie kategorii?");
define("_AM_WYSIWYG","Używać raczej edytora WYSIWYG niż edytora XOOPS?");
define("_AM_SHOWCOMMENTS","Pokazać komentarze użytkowników na stronie artykułu?");
define("_AM_SUBMITTED","Artykuły przeslane przez użytkownika"); //added

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
define("_AM_ALLTXT","With <b>Zarządzanie artykułem</b>Możesz edytować i usuwać artykuły oraz zmieniać ich nazwę. Ten tryb pokazyje wszystkie artykuły w bazie danych.<br /><br />"); //added
define("_AM_PUBLISHEDTXT","<b>Zarządzanie opublikowanymi artykułami</b> Pokazuje artykuły opublikowane (zaaprobowane przez webmastera).<br /><br />These are all the articles that will be shown in category listing of the XF-Section index page (including all those controlled by groupaccess).<br /><br />"); //added
define("_AM_SUBMITTEDTXT","<b>Zarządzanie nadesłanymi artykułami</b> Pokazuje artykuły nadesłane do serwisu przez użytkowników i pozwala na zarządzanie nimi.<br /><br />Ażeby aprobować artykuł kliknij na odsyłacz <b>Edytuj</b>, następnie zaznacz pole wyboru <b>Aprobuj</b> i zapisz artykuł. Nadesłany artykuł zostanie opublikowany.<br /><br />"); //added
define("_AM_ONLINETXT","<b>Zarządzanie artykułami Online</b>Pokazuje wszystkie artykuły ze statusem 'online'.<br /><br />Ażeby zmienić status artykułu, kliknij odsyłacz <b>Edytuj</b> link and highlight the <b>online</b> checkbox off/on.<br /><br />"); //added
define("_AM_OFFLINETXT","<b>Zarządzanie artykułami Offline</b> will show all articles which status has been set to <b>offline</b>.<br /><br />To change the status of an article, click on the <b>Edit</b> i zaznacz  w polu wyboru <b>online</b> włączony/wyłączony.<br /><br />"); //added
define("_AM_EXPIREDTXT","<b>Zarządzanie wygaszaniem artykułów</b> Pokazuje wszystkie wygaszone artykuły.<br /><br />Możesz łatwo zresetować datę wygaszania klikając na odsyłacz <b>Edytuj</b> i zmieniając <b>Ustaw datę/czas wygaszania</b>.<br /><br />"); //added
define("_AM_AUTOEXPIRETXT","<div><b>Zarządzanie autowygaszaniem artykułów</b> Pokazuje wszystkie artykuły, które mają być wygaszone w określonym czasie.<br /><br />Możesz łatwo zresetować datę wygaszania klikając na odsyłacz <b>Edytuj</b> i zmieniając <b>Ustaw datę/czas wygaszania</b>.<br /><br />"); //added
define("_AM_AUTOTXT","<b>Zarządzanie autopublikacją artykułów</b> will show all articles that have been set to publish at a future date.<br /><br />Możesz zmienić ustawienia klikając na odsyłacze <b>Edytuj</b> i zmieniając 'Ustaw datę/czas publikacji'.<br /><br />"); //added
define("_AM_NOSHOWTXT","<b>Niewidoczny artykuł</b> To jest specjalny typ artykułu, inny niż normalne artykuły nie jest pokazywany na stronie głównej artykułów i nie może być zobaczony z tego poziomu.&nbsp;&nbsp; Instead, Ten artykuł może być tylko oglądany w bloku menu `XF-Section`.<br /><br />Użyj tej opcji dla stron HTML i `Nie pokazuj INFO` (Opcja w edycji strony artykułu) możesz pokazać co chcesz. &nbsp;&nbsp;Na przykład może to być strona `prywatnych notatek` etc.<br /><br />All other options control these types of articles also. i.e. published, expired, online/offline.<br /><br />"); //added

define("_AM_BLOCKCONF","Konfiguracja bloku");
define("_AM_TITLE1","Nazwa menu głównego bloku:");
define("_AM_TITLE4","Nazwa bloku ostatnich artykułów:");
define("_AM_TITLE5","Nazwa bloku najlepszych artykułów:");
define("_AM_ORDER","Alternatywny tekst 'Uporządkowanie':");
define("_AM_DATE","Alternatywny tekst 'Data':");
define("_AM_HITS","Alternatywny tekst 'Odsłony':");
define("_AM_DISP","Alternatywny tekst 'Pokaż':");
define("_AM_ARTCLS","Nazwa bloku artykułów");
define("_AM_MENU_LINKS","<b>Odsyłacz menu zarządzania</b>");
define("_AM_BAN","Zabanuj użytkownika");
//New to version 0.9.2
define("_AM_CMODHEADER","Sprawdzenie dostepności pliku");

// WF -> XF
define("_AM_CMODERRORINFO","Sprawdzanie katalogów i plików pod względem dostępności.<br/><br/>XF-Section will try to CHMOD the directories used. An error message will be shown if the write permissions are not correct.");

define("_AM_FILEPATH","Konfiguracja obrazków i wyładowania");

// WF -> XF
define("_AM_FILEPATHWARNING","Sets the path for directories used by XF-Section.  A warning will be given if a path used is incorrect.<br/><br/>Leave a field empty if you wish WF-Section to use the default path/s.<br/><br/>");

define("_AM_FILEUSEPATH","Zmień ścieżkę użytkownika");
define("_AM_PATHEXIST","Ścieżka istnieje!");
define("_AM_PATHNOTEXIST","Ścieżka nie istnieje! Proszę to sprawdzić!");
define("_AM_USERPATH","Ścieżka zdefiniowana przez użytkownika");
define("_AM_SHOWSELIMAGE","Showing current Selected Image: "); //******* Updated *******
define("_AM_SHOWSUBMENU","Pokaż submenu dla każdej kategorii?");
define("_AM_MENUS","Konfiguracja indeksu głównego");
define("_AM_DEFAULTPATH","użycie ścieżki domyślnej");
define("_AM_SCROLLINGBLOCK","Use scrolling in recent article block? (Obsolete in this version!)");
define("_AM_BLOCKHEIGHT","Set scrolling Block height?");
define("_AM_DEFAULT"," Domyślnie");
define("_AM_BLOCKAMOUNT","Number of lines to scroll?");
define("_AM_BLOCKDELAY","Scrolling Block Delay (Per line)");
define("_AM_LASTART","Ilość nowych artykułów do pokazania w obszarze administracyjnym: ");
define("_AM_NUMUPLOADS","Ilość plików do wyładowania w jednym czasie?");

// WF -> XF
define("_AM_WEBMASTONLY","Czy tylko Webmasterzy mogą zmienić konfigurację XF-Section?");

define("_AM_DEFAULTS","Zresetować całą konfigurację do ustawień domyślnych?");

define("_AM_NOCMODERROR","( prawidłowo )");
define("_AM_CMODERROR","( Nieprawidłowy dostęp lub katalog nie istnieje! )");

// WF -> XF
define("_AM_REVERTED","Konfiguracja XF-Section przywrócona do wartości domyślnych");

define("_AM_GROUPPROMPT","Zezwól na dostęp następującym grupom:");
define("_AM_NOVIEWPERMISSION","Wybacz! Nie masz uprawnień do przeglądania tego obszaru.");
define("_AM_FILE","Plik: ");
define("_AM_NOMAINTEXT","BŁĄD: TBrak tekstu/HTML w Twoim artykule! Artykuł nie może być pusty!");
define("_AM_DIR","Katalog: ");
define("_AM_MISC","Ustawienia MISC");

define("_AM_ISNOTWRITABLE2"," nie istnieje na serwerze! Proszę zmień na prawidłową ścieżkę! ");
define("_AM_CANNOTMODIFY"," Modyfikacja niemożliwa bez podania prawidłowej ścieżki! ");
define("_AM_PATH","Ścieżka: ");

define("_AM_CMODHEADER2","Sprawdzenie pliku");
define("_AM_ARTICLEMENU","Konfiguracja strony artykułu");
define("_AM_APPROVE","Aprobuj");
define("_AM_MOVETOTOP","Przesuń ten artykuł na górę");
define("_AM_CHANGEDATETIME","Zmień datę/czas publikacji");
define("_AM_NOWSETTIME","Data publikacji ustawiona na: %s"); // %s is datetime for publication
define("_AM_CURRENTTIME","Obecny czas: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Ustaw datę/czas dla publikacji");
define("_AM_MONTHC","Miesiąc:");
define("_AM_DAYC","Dzień:");
define("_AM_YEARC","Rok:");
define("_AM_TIMEC","Godzina:");
define("_AM_AUTOAPPROVE","Automatycznie aprobować nadesłane artykuły?");

// WF -> XF
define("_AM_DEFAULTTIME","Timestamp to be used for XF-Section:");
define("_AM_TURNOFFLINE","Ukryć XF-Section? (Tylko administrator ma dostęp do XF-Section)");

define("_AM_SHOWMARTICLES","Pokazać kolumnę artykułu?");
define("_AM_SHOWMUPDATED","Pokazać zmodyfikowaną kolumnę?");
define("_AM_SHORTCATTITLE","Skracać automatycznie tytuł kategorii?");
define("_AM_SHOWAUTHOR","Pokazać kolumnę Nazwa autora?");
define("_AM_SHOWCOMMENTS2","Pokazać kolumnę licznika komentarzy?");
define("_AM_SHOWFILE","Pokazać kolumnę licznika plików?");
define("_AM_SHOWRATED","Pokazać kolumnę licznika ocen?");
define("_AM_SHOWVOTES","Pokazać kolumnę licznika głosów?");
define("_AM_SHOWPUBLISHED","Pokazać kolumnę daty publikacji?");
define("_AM_SHOWHITS","Pokazać kolumnę licznika odsłon?");
define("_AM_SHORTARTTITLE","Skracać automatycznie tytuł artykułu?");
define("_AM_OFFLINE","<b>Ukryj artykuł</b> (Status artykułu będzie offline i nie będzie on możliwy do przeglądania.)");
define("_AM_BROKENREPORTS","Raport o niewłaściwych plikach");
define("_AM_NOBROKEN","Brak niewłaściwych plików.");
define("_AM_IGNORE","Ignoruj");
define("_AM_FILEDELETED","Plik usunieto.");
define("_AM_BROKENDELETED","Raport o niewłaściwych plikach usunięto.");
define("_AM_IGNOREDESC","Ignoruj (Ignorowanie raportu i tylko usuwanie <b>raportu o niewłaściwych plikach</b>)");
define("_AM_DELETEDESC","Usuń (Usuwanie <b>zraportowanych danych ściągacza</b> i <b>raportu o niewłaściwych plikach</b> dla pliku.)");
define("_AM_REPORTER","Przesyłający raport");
define("_AM_FILETITLE","Tytuł ściągacza: ");

// WF -> XF
define("_AM_DLCONF","Konfiguracja ściągacza XF-Section");

define("_AM_FILEDESCRIPT","Opis nazwy pliku");
define("_AM_STATUS","Status");
define("_AM_UPLOAD","Wyładuj");
define("_AM_NOTIFYPUBLISH","Powiadamianie pocztę email po opublikowaniu");
define("_AM_VIEWHTML","Edycja HTML");
define("_AM_VIEWWAYSIWIG","Edycja WYSIWYG");
define("_AM_CATEGORYT","Kategoria");
define("_AM_ACCESS","Dostęp");
define("_AM_PAGE","Strona");
define("_AM_ARTICLEMANAGE","Zarządzanie artykułem");
define("_AM_WEIGHTMANAGE","Zarządzanie wielkością");
define("_AM_UPLOADMAN","Zarządzanie wyładowaniem");

// WF -> XF
define("_AM_NOADMINRIGHTS","Wybacz, tylko webmasterzy mogą zmieniać konfigurację XF-Section");

define("_AM_FILECount","Licznik plików");
define("_AM_ALLARTICLES","Lista wszystkich artykułów");
define("_AM_PUBLARTICLES","Lista opublikowanych artykułów");
define("_AM_SUBLARTICLES","Lista nadesłanych artykułów");
define("_AM_ONLINARTICLES","Lista artykułów Online");
define("_AM_OFFLIARTICLES","Lista artykułów Offline");
define("_AM_EXPIREDARTICLES","Lista zakończonych artykułów");
define("_AM_AUTOEXPIREARTICLES","Lista autowygaszanych artykułów");
define("_AM_AUTOARTICLES","Lista automatycznie opublikowanych artykułów");
define("_AM_NOSHOWARTICLES","Lista artykułów niewidocznych");
define("_NOADMINRIGHTS2","Tylko webmaster może zmienić ustawienia konfiguracji");
define("_AM_CANNOTHAVECATTHERE","BŁĄD: Kategoria nie może być podrzędną dla samej siebie!!");
define("_AM_SECTIONMANAGE","Zarządzanie sekcjami");
define("_AM_SECTIONMANAGELINK","Sekcja odsyłaczy zarządzania");
define("_AM_FILEID","Plik");
define("_AM_FILEICON","Ikona");
define("_AM_FILESTORE","Zapisano jako");
define("_AM_REALFILENAME","Prawdziwa nazwa");
define("_AM_USERFILENAME","Nazwa użytkownika");
define("_AM_FILEMIMETYPE","Typ pliku");
define("_AM_FILESIZE","Rozmiar pliku");
define("_AM_FDCOUNTER","Licznik");
define("_AM_EXPARTS","Wygaśnięte artykuły");
define("_AM_EXPIRED","Data autowygaszania");
define("_AM_CREATED","Data utworzenia");
define("_AM_CHANGEEXPDATETIME","Zmień datę/czas wygaśnięcia");
define("_AM_SETEXPDATETIME","Set the date/time of expiration");
define("_AM_NOWSETEXPTIME","Datę wygaśnięcia artykułu ustawiono na : %s");
define("_AM_ANONPOST","Zezwolić anonimowym użytkownikom na przesyłanie nowych artykułów?");
define("_AM_NOTIFYSUBMIT","Send e-mail to Webmaster upon new submission?");
define("_AM_SECTIONIMAGE","Obrazek indeksu głównego");
define("_AM_SECTIONHEAD","Nagłówek indeksu głównego");
define("_AM_SECTIONFOOT","Stópka indeksu głównego");
define("_AM_SHOWVOTESINART","Zezwolić użytkownikom na głosowanie na artykuł?");
define("_AM_SHOWREALNAME","Pokazać użytkownikom rzeczywistą nazwę autora? (Will return username if real name not set)");
define("_AM_SHOWCATEGORYIMG","Display the above image in its section?");
define("_AM_EDITSERVERFILE","Edytuj pliki serwera");
define("_AM_CURRENTFILENAME","Obecna nazwa pliku: ");
define("_AM_CURRENTFILESIZE","Rozmiar pliku: ");
define("_AM_UPLOADFOLD","Folder wyładowania: ");
define("_AM_UPLOADPATH","Ścieżka: ");
define("_AM_FREEDISKSPACE","Wolna powierchnia dyskowa:");   
define("_AM_RENAMETHIS","Zmienić nazwę pliku?");
define("_AM_RENAMEFILE","Zmien nazwę pliku");
define("_AM_SHOWSUMMARY","Pokazać kolumnę Razem?"); 
define("_AM_SHOWICON","Pokazać ikony 'Popularne i zmodyfikowane'?");
define("_AM_INDEXHEADING","Tytuł strony głównej artykułów"); 
define("_AM_EXTERNALARTICLE","Artykuł zewnętrzny </b> This will override Text editor and HTML File"); 

// added in WFS v1b6
define("_AM_POPULARITY", "Popularność");
define("_AM_ARTICLESSORT", "Porządek sortowania artykułów");
define("_AM_NAVTOOLTYPE", "Typ narzędzi nawigacyjnych");
define("_AM_SELECTBOX", "Pole wyboru");
define("_AM_SELECTSUBS", "Pole wyboru z podsekcjami");
define("_AM_LINKEDPATH", "Odesłane ścieżki");
define("_AM_LINKSANDSELECT", "Odsyłacze i pola wyboru");
define("_AM_NONE", "Brak");
define("_AM_CATEGORYWEIGHT", "Rozmiar sekcji");
define("_AM_ARTICLEWEIGHT", "Rozmiar artykułu");
define("_AM_WEIGHT", "Rozmiar");
define('_AM_DUPLICATECATEGORY','Duplikuj sekcję');

// add
define('_AM_DUPLICATE_ARTICLES','Kopiowanie artykułów');

define('_AM_COPY', 'Kopiuj');
define('_AM_TO', 'do');
define('_AM_NEWCATEGORYNAME', 'Nowa nazwa sekcji');
define('_AM_DUPLICATE', 'Duplikuj');
define('_AM_DUPLICATEWSUBS', 'Duplikacja z podsekcjami');
define('_AM_ALLOWEDMIMETYPES', 'Dopuszczalne typy Mime');
define('_AM_MODIFYFILE', 'Modyfikuj pliki artykułu');
define('_AM_FILESTATS', 'Statystyka plików przyłączonych');
define('_AM_FILESTAT', 'Statystyka plików dla artykułu: '); 
define('_AM_ERRORCHECK', 'Sprawdzenie pliku'); 
define('_AM_LASTACCESS', 'Ostatnio dostępny'); 
define('_AM_DOWNLOADED', 'Times Downloaded'); 
define('_AM_DOWNLOADSIZE', 'Rozmiar pliku');
define('_AM_UPLOADFILESIZE', 'MAX rozmiar wyładowywanego pliku (KB) 1048576 = 1 Meg');
define('_AM_FILEMODE', 'Ustawienia uprawnien wyładowania pliku');
define('_AM_IMGHEIGHT', 'Max wysokość wyładowywanego obrazka');
define('_AM_IMGWIDTH', 'Max szerokośc wyładowywanego obrazka');
define('_AM_FILEPERMISSION', 'Uprawnienia pliku');  
define('_AM_IMGESIZETOBIG', 'Wysokość/szerokość obrazka większa niż dozwolona');
define('_AM_CATREORDERTEXT', 'Możesz stąd ponownie uporządkować wszystkie kategorie.<br />Kategorie główne są ciemnoniebieskie, podkategorie jasnoniebieskie, a potem szare. Każda sekcja jest listowana według wielkości.<br /><br />Aby uporządkować ponownie artykuły, kliknij na tytuł kategorii i zobaczysz listę jej artykułów.');  
define('_WFS_ATTACHFILE', 'Przyłącz plik');  
define('_WFS_ATTACHFILEACCESS', 'Uprawnienia dostępu sa takie same jak dla artykułu.  Możesz to zmienić przy edycji pliku przyłączonego.');  
define('_AM_WFSFILESHOW', 'Przyłączone pliki');  
define('_AM_ATTACHEDFILE', 'Showing Files');  
define('_AM_ATTACHEDFILEM', 'Zarządzanie przyłączonym plikiem'); 
define('_AM_UPOADMANAGE', 'Zarządzanie plikiem'); 
define('_AM_CAREORDER', 'Rozmiar kategorii i artykułu');
define('_AM_CAREORDER2', 'Sortuj ponownie kategorie');
define('_AM_CAREORDER3', 'Sortuj ponownie artykuły');   

define('_AM_PICON', 'Pokazać ikony artykułu (strony)?'); 

// WF -> XF
define('_AM_JUSTHTML', '<b> Nie pokazuj INFO</b> (This option will stop XF-Section from displaying all info in the article. Just a plain html page or text.)');

define('_AM_NOSHOART', '<b> Nie pokazuj artykułu</b> (Using this option will prevent this article from being shown in the main index listing. Instead this article will only be shown in the article link menu block</b>.)');
define('_AM_INDEXPAGECONFIG', 'Zarządzanie indeksem głównym');

// WF -> XF
define('_AM_INDEXPAGECONFIGTXT', 'This allows you to change parts of the main index page of XF-Section.<br /><br />You can easily change the image logo, heading, header and footer text.');
//define('_AM_VISITSUPPORT', 'Visit the WF-section website for information, updates and help on its usage.<br /> WF-Sections v1 B6 &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Sections</a>');
define('_AM_VISITSUPPORT', '');

define('_AM_REORDERID', 'ID'); 
define('_AM_REORDERPID', 'PID'); 
define('_AM_REORDERTITLE', 'Tytuł');
define('_AM_REORDERDESCRIPT', 'Opis');
define('_AM_REORDERWEIGHT', 'Wielkość');
define('_AM_REORDERSUMMARY', 'Razem');

// *** add menu: bulk import ***
define("_AM_IMPORT", "Bulk import of HTML files");
define("_AM_IMPORT_DIRNAME", "Nazwa katalogu lub pliku");
define("_AM_IMPORT_HTMLPROC", "Processing of HTML files");
define("_AM_IMPORT_EXTFILTER", "Nazwa zewnetrznego programu filtrującego");

define("_AM_IMPORT_BODY", "Only body part is taken out");
define("_AM_IMPORT_INDEXHTML", "Zmień odsyłacz do index.html, there are in the same directory or in one upper directory.");
define("_AM_IMPORT_LINK", "Zmień odsyłacz do tytułu = Nazwa pliku");
define("_AM_IMPORT_IMAGE", "Zmień odsyłacz do pliku obrazka w katalogu obrazków. ");
define("_AM_IMPORT_ATMARK", "zmień @ na &amp;#064;");
define("_AM_IMPORT_TEXTPROC", "Processing of Text files");
define("_AM_IMPORT_TEXTPRE", "Surround Text file by &lt;pre&gt; &lt;/pre&gt;");
define("_AM_IMPORT_IMAGEPROC", "Processing of Image files");
define("_AM_IMPORT_IMAGEDIR", "Nazwa katalogu obrazków");
define("_AM_IMPORT_IMAGECOPY", "Kopiuj pliki obrazków do katalogu obrazków.");
define("_AM_IMPORT_TESTMODE", "Tryb testu");
define("_AM_IMPORT_TESTDB", "Not store in DB. Please remove a check, when you store. ");
define("_AM_IMPORT_TESTEXEC", "Test");
define("_AM_IMPORT_TESTTEXT", "Pokaż tekst testu");
define("_AM_IMPORT_EXPLANE", "A judgment of the kind of file is performed by the extension.<br>Plik HTML ma rozszerzenie html lubhtm.<br>Plik tekstowy ma rozszerzenie txt.<br>Plik graficzny ma rozszerzenie gif, jpg, jpeg, lub png.<br>");
define("_AM_IMPORT_ERRDIREXI", "Katalog lub plik nie istnieje");
define("_AM_IMPORT_ERRFILEXI", "Program filtrujący nie istnieje");
define("_AM_IMPORT_ERRFILEXEC", "Program filtrujący jest niewykonalny");
define("_AM_IMPORT_ERRNOCOPY", "No specification of image copy");
define("_AM_IMPORT_ERRNOIMGDIR", "No specification of image directory");
define("_AM_IMPORT_ERRIMGDIREXI", "Specified image directory is not directory");
define("_AM_IMPORT_ERRFILEEXI", "Plik nie istnieje");

?>