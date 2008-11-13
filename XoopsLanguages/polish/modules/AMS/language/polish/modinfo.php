<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
// Module Info

// The name of this module
define('_AMS_MI_NEWS_NAME','Artyku�y');

// A brief description of this module
define('_AMS_MI_NEWS_DESC','Creates a Slashdot-like article section, where users can post articles and comment.');

// Names of blocks for this module (Not all module has blocks)
define('_AMS_MI_NEWS_BNAME1','Temat informacji');
define('_AMS_MI_NEWS_BNAME3','Du�a historia');
define('_AMS_MI_NEWS_BNAME4','Najwa�niejsze informacje');
define('_AMS_MI_NEWS_BNAME5','Ostatnie informacje');
define('_AMS_MI_NEWS_BNAME6','Moderowane informacje');
define('_AMS_MI_NEWS_BNAME7','Przegl�daj tematy');
define('_AMS_MI_NEWS_BNAME8','Najbardziej pisz�cy autorzy');
define('_AMS_MI_NEWS_BNAME9','Najcz�sciej czytani autorzy');
define('_AMS_MI_NEWS_BNAME10','Najwy�ej oceniani autorzy');
define('_AMS_MI_NEWS_BNAME11','Najwy�ej oceniane artyku�y');
define("_AMS_MI_NEWS_BNAME12","AMS Spotlight");

// Sub menus in main menu block
define('_AMS_MI_NEWS_SMNAME1','Dodaj artyku�');
define('_AMS_MI_NEWS_SMNAME2','Archiwum');

// Names of admin menu items
define('_AMS_MI_NEWS_ADMENU2', 'Manager temat�w');
define('_AMS_MI_NEWS_ADMENU3', 'Manager artyku��w');
define('_AMS_MI_NEWS_GROUPPERMS', 'Prawa dodawania i akceptowania');

// Title of config items
define('_AMS_MI_STORYHOME', 'Ile artyku��w ma by� pokazanyc na stronie g��wnej');
define("_AMS_MI_STORYCOUNTTOPIC", "Wybierz ilo�� artyku��w pokazywanych na stronie g��wnej tematu");
define('_AMS_MI_NOTIFYSUBMIT', 'Wybierz Tak aby wys�a� do administratora powiadomienie o nowym artykule.');
define('_AMS_MI_DISPLAYNAV', 'Wybierz Tak aby pokaza� belk� nawigacji na g�rze ka�dej strony w module');
define('_AMS_MI_AUTOAPPROVE','Automatyczne akceptowanie artyku��w bez �adnych dzia�a� ze strony administratora?');
define("_AMS_MI_ALLOWEDSUBMITGROUPS", "Grupy mog�ce doda� artyku�");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS", "Grupy mog�ce akceptowa� artyku�y");
define("_AMS_MI_NEWSDISPLAY", "Spos�b wy�wietlania artyku��w");
define("_AMS_MI_NAMEDISPLAY","Imi� autora");
define("_AMS_MI_COLUMNMODE","Kolumny");
define("_AMS_MI_STORYCOUNTADMIN","Number of new articles to display in admin area: ");
define('_AMS_MI_UPLOADFILESIZE', 'Maksymalna wielko�� dodawanego pliku w kilobajtach 1048576 KB = 1 MB');
define("_AMS_MI_UPLOADGROUPS","Grupy mog�ce dodawa� pliki");
define("_AMS_MI_MAXITEMS", "Maksymalna ilo�� rzeczy");
define("_AMS_MI_MAXITEMDESC", "Okre�la maksymaln� ilo�� rzeczy, kt�r� u�ytkownik mo�e wybrac w polu nawigacji na stronie spisu albo na stronie z tematmi");


// Description of each config items
define('_AMS_MI_STORYHOMEDSC', '');
define('_AMS_MI_NOTIFYSUBMITDSC', '');
define('_AMS_MI_DISPLAYNAVDSC', '');
define('_AMS_MI_AUTOAPPROVEDSC', '');
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC", "Wybrane grupy b�d� mia�y prawo dodawania artyku��w");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC", "Wybrane grupy b�d� mia�y prawo akceptowania artyku��w");
define("_AMS_MI_NEWSDISPLAYDESC", "Poka� wszystkie artyku�y w spos�b klasyczny, to znaczy posortowane wed�ug daty opublikowania. Artyku�y grupowane wed�ug tematu b�d� pokazywa� ostatni artyku� w ca�o�ci a reszt� tylko jako temat");
define('_AMS_MI_ADISPLAYNAMEDSC', 'Wybierz w jaki spos�b pokazywa� imi� autora.');
define("_AMS_MI_COLUMNMODE_DESC","Mo�esz wybrac liczb� kolumn w kt�rych b�d� wy�wietlane artyku�y.");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_STORYCOUNTTOPIC_DESC","To okre�la ile rzeczy b�dzie pokazane na strone tematu (to znaczy nie na stronie g��wnej)");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Wybierz grupy kt�re mog� dodawa� pliki na serwer");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC", "Klasyczny");
define("_AMS_MI_NEWSBYTOPIC", "Tematyczny");
define("_AMS_MI_DISPLAYNAME1", "Nazwa u�ytkownika");
define("_AMS_MI_DISPLAYNAME2", "Prawdziwe imi�");
define("_AMS_MI_DISPLAYNAME3", "Nie pokazuj autora");
define("_AMS_MI_UPLOAD_GROUP1","Dodaj�cy i akceptuj�cy");
define("_AMS_MI_UPLOAD_GROUP2","Tylko akceptuj�cy");
define("_AMS_MI_UPLOAD_GROUP3","Wy��cz dodawanie");
define("_AMS_MI_INDEX_NAME", "Nazwa spisu");
define("_AMS_MI_INDEX_DESC", "To b�dzie pokazywane na samej g�rze jako pocz�tek drzewka w widoku z tematami i artyku�ami");

// Text for notifications

define('_AMS_MI_NEWS_GLOBAL_NOTIFY', 'Og�lne');
define('_AMS_MI_NEWS_GLOBAL_NOTIFYDSC', 'Og�lne ustawienia powiadamiania.');

define('_AMS_MI_NEWS_STORY_NOTIFY', 'Obecny artyku�');
define('_AMS_MI_NEWS_STORY_NOTIFYDSC', 'Ustawiania powiadamiania dla obecnego artyku�u.');

define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nowy temat');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy temat zostanie utworzony.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Nowy temat');

define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Dodano nowy artyku�');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Powiadom mnie gdy zostanie dodany nowy artyku� (oczekuj�cy na zaaprobowanie).');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artyku� zostanie dodany i oczekuje na zaaprobowanie.');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Dodano nowy artyku�');

define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nowy artyku�');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Powiadom mnie gdy zostanie dodany nowy artyku�.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artyku� zostanie dodany.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Nowy artyku�');

define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFY', 'Zaakceptowano artyku�');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Powiadom mnie gdy zostanie nowy artyku�.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artyku� zostanie zaakceptowany.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Zaakceptowano artyku�');

define('_AMS_MI_RESTRICTINDEX', 'Ograniczy� tematy na stronie spisu?');
define('_AMS_MI_RESTRICTINDEXDSC', 'Je�li wybierzesz Tak, u�ytkownicy b�d� mogli widzie� spis artyku��w tylko z temat�w do kt�rych maj� prawo dost�pu');

define("_AMS_MI_ANONYMOUS_VOTE", "W��czy� mo�liw�c anonimowej oceny artyku�u");
define("_AMS_MI_ANONYMOUS_VOTE_DESC", "Wybierz Tak aby anonimowi czytelnicy mogli ocenia� artyku�y");

define("_AMS_MI_AUDIENCE", "Poziom odbiorc�w");

define("_AMS_MI_SPOTLIGHT", "Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS", "Kandydaty do artyku�u spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC", "To jest liczba artyku��w, kt�re b�da pokazywane na stronie konfiguracyjnej spotlight, jako mo�liwi kandydaci do artyku�u spotlight");

define("_AMS_MI_EDITOR", "Redaktorzy");
define("_AMS_MI_EDITOR_DESC", "Wybierz edytor u�ywany w czasie dodawania artyku��w - niestandardowe edytory musz� by� zainstalowane dodatkowo");
define("_AMS_MI_EDITOR_DEFAULT", "Standardowy edytor Xoops");
define("_AMS_MI_EDITOR_KOIVI", "Edytor Koivi");
?>