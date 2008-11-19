<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
// Module Info

// The name of this module
define('_AMS_MI_NEWS_NAME','Artyku³y');

// A brief description of this module
define('_AMS_MI_NEWS_DESC','Creates a Slashdot-like article section, where users can post articles and comment.');

// Names of blocks for this module (Not all module has blocks)
define('_AMS_MI_NEWS_BNAME1','Temat informacji');
define('_AMS_MI_NEWS_BNAME3','Du¿a historia');
define('_AMS_MI_NEWS_BNAME4','Najwa¿niejsze informacje');
define('_AMS_MI_NEWS_BNAME5','Ostatnie informacje');
define('_AMS_MI_NEWS_BNAME6','Moderowane informacje');
define('_AMS_MI_NEWS_BNAME7','Przegl±daj tematy');
define('_AMS_MI_NEWS_BNAME8','Najbardziej pisz±cy autorzy');
define('_AMS_MI_NEWS_BNAME9','Najczêsciej czytani autorzy');
define('_AMS_MI_NEWS_BNAME10','Najwy¿ej oceniani autorzy');
define('_AMS_MI_NEWS_BNAME11','Najwy¿ej oceniane artyku³y');
define("_AMS_MI_NEWS_BNAME12","AMS Spotlight");

// Sub menus in main menu block
define('_AMS_MI_NEWS_SMNAME1','Dodaj artyku³');
define('_AMS_MI_NEWS_SMNAME2','Archiwum');

// Names of admin menu items
define('_AMS_MI_NEWS_ADMENU2', 'Manager tematów');
define('_AMS_MI_NEWS_ADMENU3', 'Manager artyku³ów');
define('_AMS_MI_NEWS_GROUPPERMS', 'Prawa dodawania i akceptowania');

// Title of config items
define('_AMS_MI_STORYHOME', 'Ile artyku³ów ma byæ pokazanyc na stronie g³ównej');
define("_AMS_MI_STORYCOUNTTOPIC", "Wybierz ilo¶æ artyku³ów pokazywanych na stronie g³ównej tematu");
define('_AMS_MI_NOTIFYSUBMIT', 'Wybierz Tak aby wys³aæ do administratora powiadomienie o nowym artykule.');
define('_AMS_MI_DISPLAYNAV', 'Wybierz Tak aby pokazaæ belkê nawigacji na górze ka¿dej strony w module');
define('_AMS_MI_AUTOAPPROVE','Automatyczne akceptowanie artyku³ów bez ¿adnych dzia³añ ze strony administratora?');
define("_AMS_MI_ALLOWEDSUBMITGROUPS", "Grupy mog±ce dodaæ artyku³");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS", "Grupy mog±ce akceptowaæ artyku³y");
define("_AMS_MI_NEWSDISPLAY", "Sposób wy¶wietlania artyku³ów");
define("_AMS_MI_NAMEDISPLAY","Imiê autora");
define("_AMS_MI_COLUMNMODE","Kolumny");
define("_AMS_MI_STORYCOUNTADMIN","Number of new articles to display in admin area: ");
define('_AMS_MI_UPLOADFILESIZE', 'Maksymalna wielko¶æ dodawanego pliku w kilobajtach 1048576 KB = 1 MB');
define("_AMS_MI_UPLOADGROUPS","Grupy mog±ce dodawaæ pliki");
define("_AMS_MI_MAXITEMS", "Maksymalna ilo¶æ rzeczy");
define("_AMS_MI_MAXITEMDESC", "Okre¶la maksymaln± ilo¶æ rzeczy, któr± u¿ytkownik mo¿e wybrac w polu nawigacji na stronie spisu albo na stronie z tematmi");


// Description of each config items
define('_AMS_MI_STORYHOMEDSC', '');
define('_AMS_MI_NOTIFYSUBMITDSC', '');
define('_AMS_MI_DISPLAYNAVDSC', '');
define('_AMS_MI_AUTOAPPROVEDSC', '');
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC", "Wybrane grupy bêd± mia³y prawo dodawania artyku³ów");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC", "Wybrane grupy bêd± mia³y prawo akceptowania artyku³ów");
define("_AMS_MI_NEWSDISPLAYDESC", "Poka¿ wszystkie artyku³y w sposób klasyczny, to znaczy posortowane wed³ug daty opublikowania. Artyku³y grupowane wed³ug tematu bêd± pokazywaæ ostatni artyku³ w ca³o¶ci a resztê tylko jako temat");
define('_AMS_MI_ADISPLAYNAMEDSC', 'Wybierz w jaki sposób pokazywaæ imiê autora.');
define("_AMS_MI_COLUMNMODE_DESC","Mo¿esz wybrac liczbê kolumn w których bêd± wy¶wietlane artyku³y.");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_STORYCOUNTTOPIC_DESC","To okre¶la ile rzeczy bêdzie pokazane na strone tematu (to znaczy nie na stronie g³ównej)");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Wybierz grupy które mog± dodawaæ pliki na serwer");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC", "Klasyczny");
define("_AMS_MI_NEWSBYTOPIC", "Tematyczny");
define("_AMS_MI_DISPLAYNAME1", "Nazwa u¿ytkownika");
define("_AMS_MI_DISPLAYNAME2", "Prawdziwe imiê");
define("_AMS_MI_DISPLAYNAME3", "Nie pokazuj autora");
define("_AMS_MI_UPLOAD_GROUP1","Dodaj±cy i akceptuj±cy");
define("_AMS_MI_UPLOAD_GROUP2","Tylko akceptuj±cy");
define("_AMS_MI_UPLOAD_GROUP3","Wy³±cz dodawanie");
define("_AMS_MI_INDEX_NAME", "Nazwa spisu");
define("_AMS_MI_INDEX_DESC", "To bêdzie pokazywane na samej górze jako pocz±tek drzewka w widoku z tematami i artyku³ami");

// Text for notifications

define('_AMS_MI_NEWS_GLOBAL_NOTIFY', 'Ogólne');
define('_AMS_MI_NEWS_GLOBAL_NOTIFYDSC', 'Ogólne ustawienia powiadamiania.');

define('_AMS_MI_NEWS_STORY_NOTIFY', 'Obecny artyku³');
define('_AMS_MI_NEWS_STORY_NOTIFYDSC', 'Ustawiania powiadamiania dla obecnego artyku³u.');

define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nowy temat');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy temat zostanie utworzony.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Nowy temat');

define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Dodano nowy artyku³');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Powiadom mnie gdy zostanie dodany nowy artyku³ (oczekuj±cy na zaaprobowanie).');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artyku³ zostanie dodany i oczekuje na zaaprobowanie.');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Dodano nowy artyku³');

define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nowy artyku³');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Powiadom mnie gdy zostanie dodany nowy artyku³.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artyku³ zostanie dodany.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Nowy artyku³');

define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFY', 'Zaakceptowano artyku³');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Powiadom mnie gdy zostanie nowy artyku³.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Otrzymaj powiadomienie gdy nowy artyku³ zostanie zaakceptowany.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Zaakceptowano artyku³');

define('_AMS_MI_RESTRICTINDEX', 'Ograniczyæ tematy na stronie spisu?');
define('_AMS_MI_RESTRICTINDEXDSC', 'Je¶li wybierzesz Tak, u¿ytkownicy bêd± mogli widzieæ spis artyku³ów tylko z tematów do których maj± prawo dostêpu');

define("_AMS_MI_ANONYMOUS_VOTE", "W³±czyæ mo¿liw¶c anonimowej oceny artyku³u");
define("_AMS_MI_ANONYMOUS_VOTE_DESC", "Wybierz Tak aby anonimowi czytelnicy mogli oceniaæ artyku³y");

define("_AMS_MI_AUDIENCE", "Poziom odbiorców");

define("_AMS_MI_SPOTLIGHT", "Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS", "Kandydaty do artyku³u spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC", "To jest liczba artyku³ów, które bêda pokazywane na stronie konfiguracyjnej spotlight, jako mo¿liwi kandydaci do artyku³u spotlight");

define("_AMS_MI_EDITOR", "Redaktorzy");
define("_AMS_MI_EDITOR_DESC", "Wybierz edytor u¿ywany w czasie dodawania artyku³ów - niestandardowe edytory musz± byæ zainstalowane dodatkowo");
define("_AMS_MI_EDITOR_DEFAULT", "Standardowy edytor Xoops");
define("_AMS_MI_EDITOR_KOIVI", "Edytor Koivi");
?>