<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
// Module Info

// The name of this module
define('_AMS_MI_NEWS_NAME','Artykuły');

// A brief description of this module
define('_AMS_MI_NEWS_DESC','Creates a Slashdot-like article section, where users can post articles and comment.');

// Names of blocks for this module (Not all module has blocks)
define('_AMS_MI_NEWS_BNAME1','Temat informacji');
define('_AMS_MI_NEWS_BNAME3','Duża historia');
define('_AMS_MI_NEWS_BNAME4','Najważniejsze informacje');
define('_AMS_MI_NEWS_BNAME5','Ostatnie informacje');
define('_AMS_MI_NEWS_BNAME6','Moderowane informacje');
define('_AMS_MI_NEWS_BNAME7','Przeglądaj tematy');
define('_AMS_MI_NEWS_BNAME8','Najbardziej piszący autorzy');
define('_AMS_MI_NEWS_BNAME9','Najczęsciej czytani autorzy');
define('_AMS_MI_NEWS_BNAME10','Najwyżej oceniani autorzy');
define('_AMS_MI_NEWS_BNAME11','Najwyżej oceniane artykuły');
define("_AMS_MI_NEWS_BNAME12","AMS Spotlight");

// Sub menus in main menu block
define('_AMS_MI_NEWS_SMNAME1','Dodaj artykuł');
define('_AMS_MI_NEWS_SMNAME2','Archiwum');

// Names of admin menu items
define('_AMS_MI_NEWS_ADMENU2', 'Manager tematów');
define('_AMS_MI_NEWS_ADMENU3', 'Manager artykułów');
define('_AMS_MI_NEWS_GROUPPERMS', 'Prawa dodawania i akceptowania');

// Title of config items
define('_AMS_MI_STORYHOME', 'Ile artykułów ma być pokazanyc na stronie głównej');
define("_AMS_MI_STORYCOUNTTOPIC", "Wybierz ilość artykułów pokazywanych na stronie głównej tematu");
define('_AMS_MI_NOTIFYSUBMIT', 'Wybierz Tak aby wysłać do administratora powiadomienie o nowym artykule.');
define('_AMS_MI_DISPLAYNAV', 'Wybierz Tak aby pokazać belkę nawigacji na górze każdej strony w module');
define('_AMS_MI_AUTOAPPROVE','Automatyczne akceptowanie artykułów bez żadnych działań ze strony administratora?');
define("_AMS_MI_ALLOWEDSUBMITGROUPS", "Grupy mogące dodać artykuł");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS", "Grupy mogące akceptować artykuły");
define("_AMS_MI_NEWSDISPLAY", "Sposób wyświetlania artykułów");
define("_AMS_MI_NAMEDISPLAY","Imię autora");
define("_AMS_MI_COLUMNMODE","Kolumny");
define("_AMS_MI_STORYCOUNTADMIN","Number of new articles to display in admin area: ");
define('_AMS_MI_UPLOADFILESIZE', 'Maksymalna wielkość dodawanego pliku w kilobajtach 1048576 KB = 1 MB');
define("_AMS_MI_UPLOADGROUPS","Grupy mogące dodawać pliki");
define("_AMS_MI_MAXITEMS", "Maksymalna ilość rzeczy");
define("_AMS_MI_MAXITEMDESC", "Określa maksymalną ilość rzeczy, którą użytkownik może wybrac w polu nawigacji na stronie spisu albo na stronie z tematmi");


// Description of each config items
define('_AMS_MI_STORYHOMEDSC', '');
define('_AMS_MI_NOTIFYSUBMITDSC', '');
define('_AMS_MI_DISPLAYNAVDSC', '');
define('_AMS_MI_AUTOAPPROVEDSC', '');
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC", "Wybrane grupy będą miały prawo dodawania artykułów");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC", "Wybrane grupy będą miały prawo akceptowania artykułów");
define("_AMS_MI_NEWSDISPLAYDESC", "Pokaż wszystkie artykuły w sposób klasyczny, to znaczy posortowane według daty opublikowania. Artykuły grupowane według tematu będą pokazywać ostatni artykuł w całości a resztę tylko jako temat");
define('_AMS_MI_ADISPLAYNAMEDSC', 'Wybierz w jaki sposób pokazywać imię autora.');
define("_AMS_MI_COLUMNMODE_DESC","Możesz wybrac liczbę kolumn w których będą wyświetlane artykuły.");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_STORYCOUNTTOPIC_DESC","To określa ile rzeczy będzie pokazane na strone tematu (to znaczy nie na stronie głównej)");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Wybierz grupy które mogą dodawać pliki na serwer");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC", "Klasyczny");
define("_AMS_MI_NEWSBYTOPIC", "Tematyczny");
define("_AMS_MI_DISPLAYNAME1", "Nazwa użytkownika");
define("_AMS_MI_DISPLAYNAME2", "Prawdziwe imię");
define("_AMS_MI_DISPLAYNAME3", "Nie pokazuj autora");
define("_AMS_MI_UPLOAD_GROUP1","Dodający i akceptujący");
define("_AMS_MI_UPLOAD_GROUP2","Tylko akceptujący");
define("_AMS_MI_UPLOAD_GROUP3","Wyłącz dodawanie");
define("_AMS_MI_INDEX_NAME", "Nazwa spisu");
define("_AMS_MI_INDEX_DESC", "To będzie pokazywane na samej górze jako początek drzewka w widoku z tematami i artykułami");

// Text for notifications

define('_AMS_MI_NEWS_GLOBAL_NOTIFY', 'Ogólne');
define('_AMS_MI_NEWS_GLOBAL_NOTIFYDSC', 'Ogólne ustawienia powiadamiania.');

define('_AMS_MI_NEWS_STORY_NOTIFY', 'Obecny artykuł');
define('_AMS_MI_NEWS_STORY_NOTIFYDSC', 'Ustawiania powiadamiania dla obecnego artykułu.');

define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nowy temat');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy temat zostanie utworzony.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Nowy temat');

define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Dodano nowy artykuł');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Powiadom mnie gdy zostanie dodany nowy artykuł (oczekujący na zaaprobowanie).');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artykuł zostanie dodany i oczekuje na zaaprobowanie.');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Dodano nowy artykuł');

define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nowy artykuł');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Powiadom mnie gdy zostanie dodany nowy artykuł.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artykuł zostanie dodany.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Nowy artykuł');

define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFY', 'Zaakceptowano artykuł');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Powiadom mnie gdy zostanie nowy artykuł.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artykuł zostanie zaakceptowany.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Zaakceptowano artykuł');

define('_AMS_MI_RESTRICTINDEX', 'Ograniczyć tematy na stronie spisu?');
define('_AMS_MI_RESTRICTINDEXDSC', 'Jeśli wybierzesz Tak, użytkownicy będą mogli widzieć spis artykułów tylko z tematów do których mają prawo dostępu');

define("_AMS_MI_ANONYMOUS_VOTE", "Włączyć możliwśc anonimowej oceny artykułu");
define("_AMS_MI_ANONYMOUS_VOTE_DESC", "Wybierz Tak aby anonimowi czytelnicy mogli oceniać artykuły");

define("_AMS_MI_AUDIENCE", "Poziom odbiorców");

define("_AMS_MI_SPOTLIGHT", "Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS", "Kandydaty do artykułu spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC", "To jest liczba artykułów, które będa pokazywane na stronie konfiguracyjnej spotlight, jako możliwi kandydaci do artykułu spotlight");

define("_AMS_MI_EDITOR", "Redaktorzy");
define("_AMS_MI_EDITOR_DESC", "Wybierz edytor używany w czasie dodawania artykułów - niestandardowe edytory muszą być zainstalowane dodatkowo");
define("_AMS_MI_EDITOR_DEFAULT", "Standardowy edytor Xoops");
define("_AMS_MI_EDITOR_KOIVI", "Edytor Koivi");
?>