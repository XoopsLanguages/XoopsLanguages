<?php
// $Id: modinfo.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME'                          , 'Wiadomo�ci ');

// A brief description of this module
define('_MI_NEWS_DESC'                          , 'Tworzy sekcj� informacyjn�, gdzie u�ytkownicy mog� umieszcza� wiadomo�ci i komentarze.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1'                        , 'Blok temat�w wiadomo�ci');
define('_MI_NEWS_BNAME3'                        , 'Blok wielkiej historii');
define('_MI_NEWS_BNAME4'                        , 'Blok najpopularniejszej wiadomo�ci');
define('_MI_NEWS_BNAME5'                        , 'Blok ostatnio dodanych wiadomo�ci');
define('_MI_NEWS_BNAME6'                        , 'Wie�ci do sprawdzenia - moderowane');
define('_MI_NEWS_BNAME7'                        , 'Nawigacja przez tematy');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1'                       , 'Wy�lij wiadomo��');
define('_MI_NEWS_SMNAME2'                       , 'Archiwum');

// Names of admin menu items
define('_MI_NEWS_ADMENU2'                       , 'Tematy');
define('_MI_NEWS_ADMENU3'                       , 'Dodaj i edytuj wiadomo�ci');
define('_MI_NEWS_GROUPPERMS'                    , 'Prawa dost�pu');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS'                     , 'Skasuj wiadomo�ci');
// Added by Herv�
define('_MI_NEWS_EXPORT'                        , 'Eksportuj wiadomo�ci');

// Title of config items
define('_MI_STORYHOME'                          , 'Ile wiadomo�ci ma by� wy�wietlone na stronie g��wnej?');
define('_MI_NOTIFYSUBMIT'                       , 'Powiadomi� e-mailem o oczekuj�cej wiadomo�ci?');
define('_MI_DISPLAYNAV'                         , 'Wy�wietli� menu nawigacji w g�rnej cz�ci stron z wiadomo�ciami?');
define('_MI_AUTOAPPROVE'                        , 'Zezwoli� na automatyczne akceptowanie wiadomo�ci?');
define("_MI_ALLOWEDSUBMITGROUPS"                , "Grupy u�ytkownik�w, kt�re mog� publikowa� wiadomo�ci");
define("_MI_ALLOWEDAPPROVEGROUPS"               , "Grupy u�ytkownik�w, kt�re mog� akceptowa� wiadomo�ci");
define("_MI_NEWSDISPLAY"                        , "Spos�b wy�wiatlania wiadomo�ci");
define("_MI_NAMEDISPLAY"                        , "Imi� autora");
define("_MI_COLUMNMODE"                         , "Kolumy");
define("_MI_STORYCOUNTADMIN"                    , "Ilo�� nowych artyku��w wy�wietlanych na stronach administratora (ta opcja ogranicza tak�e ilo�� temat�w oraz jest u�ywana przy wy�wietlaniu statystyk).");
define('_MI_UPLOADFILESIZE'                     , 'Maksymalna wielko�� pliku, kt�ry mo�na doda� podana w kilobajtach (1048576 kilobajt�w = 1 megabajt).');
define("_MI_UPLOADGROUPS"                       , "Dodawanie plik�w do wiadomo�ci");


// Description of each config items
define('_MI_STORYHOMEDSC'                       , '');
define('_MI_NOTIFYSUBMITDSC'                    , '');
define('_MI_DISPLAYNAVDSC'                      , '');
define('_MI_AUTOAPPROVEDSC'                     , '');
define("_MI_ALLOWEDSUBMITGROUPSDESC"            , "Wybrane grupy mog� dodawa� wiadomo�ci");
define("_MI_ALLOWEDAPPROVEGROUPSDESC"           , "Wybrane grupy mog� akceptowa� wiadomo�ci");
define("_MI_NEWSDISPLAYDESC"                    , "Klasyczny spos�b pokazuje wszystkie wiadomo�ci posortowane wed�ug daty ich publikacji. Wy�wietlanie wed�ug tematu poka�e ca�� ostatni� wiadomo�� z danego tematu, a dla pozosta�ych tylko ich tematy.");
define('_MI_ADISPLAYNAMEDSC'                    , 'Wybierz spos�b wy�wietlania informacji o autorze.');
define("_MI_COLUMNMODE_DESC"                    , "Mo�esz wybra� ilo�� kolumn w kt�rych b�d� wy�wietlane wiadomo�ci.");
define("_MI_STORYCOUNTADMIN_DESC"               , "");
define("_MI_UPLOADFILESIZE_DESC"                , "");
define("_MI_UPLOADGROUPS_DESC"                  , "U�ytkownicy nale��cy do nast�puj�cych grup mog� dodawa� pliki.");

// Name of config item values
define("_MI_NEWSCLASSIC"                        , "Klasyczny");
define("_MI_NEWSBYTOPIC"                        , "Wed�ug tematu");
define("_MI_DISPLAYNAME1"                       , "Nazwa u�ytkownika");
define("_MI_DISPLAYNAME2"                       , "Prawdziwe imi�");
define("_MI_DISPLAYNAME3"                       , "Nie pokazuj informacji o autorze");
define("_MI_UPLOAD_GROUP1"                      , "Grupy mog�ce dodawa� i akceptowa� pliki ");
define("_MI_UPLOAD_GROUP2"                      , "Grupy mog�ce akceptowa� pliki");
define("_MI_UPLOAD_GROUP3"                      , "Wy��cz dodawanie plik�w");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY'                 , 'Globalne');
define('_MI_NEWS_GLOBAL_NOTIFYDSC'              , 'Globalne opcje powiadamiania.');

define('_MI_NEWS_STORY_NOTIFY'                  , 'Wiadomo�ci');
define('_MI_NEWS_STORY_NOTIFYDSC'               , 'Opcje powiadamiania, kt�re b�da obowi�zywa� obecne wiadomo�ci.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY'     , 'Nowy temat');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie utworzony nowy temat.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano nowy temat');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY'     , 'Dodano now� wiadomo�� ');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie dodana nowa wiadomo�� (oczekuj�ca na zatwierdzenie).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomo�� (oczekuj�ca na zatwierdzenie).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano now� wiadomo��');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY'        , 'Nowa wiadomo�� ');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP'     , 'Powiadom mnie gdy uka�e si� nowa wiadomo��.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC'     , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomo��.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ'     , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Now� wiadomo��');

define('_MI_NEWS_STORY_APPROVE_NOTIFY'          , 'Wiadomo�� zaakceptowana');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP'       , 'Powiadom mnie gdy wiadomo�� zostanie zaakceptowana.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC'       , 'Otrzymaj powiadomienie gdy wiadomo�� zostanie zaakceptowana. ');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ'       , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie : Wiadomo�� zaakceptowana');

define('_MI_RESTRICTINDEX'                      , 'Ograniczenie dost�pu zgodnie wed�ug praw dla grup i temat�w');
define('_MI_RESTRICTINDEXDSC'                   , 'Je�li wybierzesz tak to u�ytkownicy b�d� mogli zobaczy� wiadomo�ci do kt�rych maj� prawo ogl�dania ustawione dla odpowiednich grup w prawach dost�pu.');

define('_MI_NEWSBYTHISAUTHOR'                   , 'Wiadomo�ci tego samego autora');
define('_MI_NEWSBYTHISAUTHORDSC'                , 'Je�li wybierzesz tak to w wiadomo�ci b�dzie widoczny link \'Wiadomo�ci tego samego autora\'.');

define('_MI_NEWS_PREVNEX_LINK'                  , 'Pokazywa� poprzedni i nast�pny link?');
define('_MI_NEWS_PREVNEX_LINK_DESC'             , 'Je�li wybierzesz tak to dwa nowe linki pojawi� sie w dole ka�dego artyku�u. Te linki pomog� w nawigowaniu przez wie�ci zgodni z ich data publikacji.');
define('_MI_NEWS_SUMMARY_SHOW'                  , 'Pokazywa� podsumowanie?');
define('_MI_NEWS_SUMMARY_SHOW_DESC'             , 'Je�li wybierzesz tak podsumowanie wszystkich ostatnio opublikowanych artyku��w b�dzie widoczne w dole ostatnio opublikowanych artyku��w.');
define('_MI_NEWS_AUTHOR_EDIT'                   , 'Umo�liwi� autorom edytowanie swoich wiadomo�ci?');
define('_MI_NEWS_AUTHOR_EDIT_DESC'              , 'Je�li wybierzesz tak to autorzy bed� mogli zmienia� swoje wiadomo�ci.');
define('_MI_NEWS_RATE_NEWS'                     , 'Umo�liwi� u�ytkownikom ocenianie wiadomo�ci?');
define('_MI_NEWS_TOPICS_RSS'                    , 'Umo�liwi� u�ywanie RSS dla temat�w?');
define('_MI_NEWS_TOPICS_RSS_DESC'               , "Je�li wybierzesz tak zawarto�� tematu b�dzie dost�pna przez RSS.");
define('_MI_NEWS_DATEFORMAT'                    , "Format daty");
define('_MI_NEWS_DATEFORMAT_DESC'               , "Prosz� sprawdzi� dokumentacj� PHP (http://fr.php.net/manual/en/function.date.php) aby uzyska� informacj� o sposobie wyboru formatu daty. Je�li nic nie zostanie wpisane, XOOPS u�yje standardowego formatu.");
define('_MI_NEWS_META_DATA'                     , "Umo�liwi� wprowadzanie informacji Meta Keywords i Meta Description?");
define('_MI_NEWS_META_DATA_DESC'                , "Je�li wybierzesz tak to osoby akceptuj�ce dany artyku� b�d� mog�y wprowadzi� informacje w dwoch dodatkowych polach Meta Keywords i Meta Description.");
define('_MI_NEWS_BNAME8'                        , 'Losowa wiadomo��');
define('_MI_NEWS_NEWSLETTER'                    , 'Biuletyn');
define('_MI_NEWS_STATS'                         , 'Statystyki');
define("_MI_NEWS_FORM_OPTIONS"                  , "Wybierz edytor");
define("_MI_NEWS_FORM_COMPACT"                  , "Compact");
define("_MI_NEWS_FORM_DHTML"                    , "DHTML");
define("_MI_NEWS_FORM_SPAW"                     , "Spaw");
define("_MI_NEWS_FORM_HTMLAREA"                 , "HtmlArea");
define("_MI_NEWS_FORM_FCK"                      , "FCK");
define("_MI_NEWS_FORM_KOIVI"                    , "Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC"             , "Wybierz edytor. Je�li posiadasz standardow� instalacj� (tzn. u�ywasz tylko wbudowanych klas xoops, kt�re s� dostarczane w pakiecie standardowym), to mo�esz wybra� tylko pomi�dzy DHTML i Compact.");
define("_MI_NEWS_KEYWORDS_HIGH"                 , "Pod�wietli� szukane wyrazy?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC"            , "Je�li wybierzesz tak szukane wyrazy b�d� pod�wietlone w artyku�ach.");
define("_MI_NEWS_HIGH_COLOR"                    , "Kolor pod�wietlania wyraz�w");
define("_MI_NEWS_HIGH_COLOR_DES"                , "Jest u�ywany tylko w wypadku wybrania tak we wcze�niejszej opcji.");
define("_MI_NEWS_INFOTIPS"                      , "D�ugo�� dymka wiadomo�ci");
define("_MI_NEWS_INFOTIPS_DES"                  , "Je�li wybierzesz tak link do wiadomo�ci bedzie zwiera� w dymku (n-ilo�� liter) pierwszych liter z artyku�u. Je�li ustawisz d�ugo�� na 0 dymek b�dzie pusty.");
define("_MI_NEWS_SITE_NAVBAR"                   , "Belka nawigacyjna dla Mozilli i Opery (nie wiem o co tu chodzi, jak kto� wie to prosz� o kontakt - dap)");
define("_MI_NEWS_SITE_NAVBAR_DESC"              , "Je�li wybierzesz tak to odwiedzj�cy strone b�d� mogli u�yc belki nawigacyjnej tych przegl�darek na stronie do przechodzenia pomi�dzy artyku�ami.");
define("_MI_NEWS_TABS_SKIN"                     , "Wybierz motyw graficzny dla zak�adek.s");
define("_MI_NEWS_TABS_SKIN_DESC"                , "Ten motyw graficzny b�dzie u�yty we wszystkich blokach kt�re u�ywaja zak�adek.");
define("_MI_NEWS_SKIN_1"                        , "Styl zak�adek");
define("_MI_NEWS_SKIN_2"                        , "Uko�ny(?)");
define("_MI_NEWS_SKIN_3"                        , "Klasyczny");
define("_MI_NEWS_SKIN_4"                        , "Katalogi");
define("_MI_NEWS_SKIN_5"                        , "Styl Mac Os");
define("_MI_NEWS_SKIN_6"                        , "Prosty");
define("_MI_NEWS_SKIN_7"                        , "Zaokr�glony");
define("_MI_NEWS_SKIN_8"                        , "Styl ZDnet");
// Added in version 1.50
define('_MI_NEWS_BNAME9','Archiwa');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Pokaza� linki w wersji do druku?");
define("_MI_NEWS_DUBLINCORE","Aktywowa� Dublin Core Metadata?");
define("_MI_NEWS_DUBLINCORE_DSC","Aby uzyska� wi�cej informacji, <a hreh='http://dublincore.org/'> odwied� ten link</a>");
define("_MI_NEWS_BOOKMARK_ME","Wy�wietla� blok 'Dodaj ten artyku� do ulubionych'?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ten blok b�dzie widoczny na stronie artyku��w");
define("_MI_NEWS_FF_MICROFORMAT","Aktywowa� Firefox 2 Micro Summaries?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Aby uzyska� wi�cej informacji, zobacz <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>t� stron�</a>");
define("_MI_NEWS_WHOS_WHO","Kto jest kim");
define("_MI_NEWS_METAGEN","Metatagi");
define("_MI_NEWS_TOPICS_DIRECTORY","Katalog temat�w");
define("_MI_NEWS_ADVERTISEMENT","Reklama");
define("_MI_NEWS_ADV_DESCR","Wstaw tekst albo kod javascript �eby wy�wietli� twoj� reklam�");
define("_MI_NEWS_MIME_TYPES","Wprowad� autoryzowane typy Mime do upload'u (rozdziel je znakami nowej linii)");
define("_MI_NEWS_ENHANCED_PAGENAV","U�y� rozszerzonej nawigacji?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Za pomoc� tej opcji mo�esz rozdzieli� strony czym� takim : [pagrebreak:Page Title], linki do stron zostan� zast�pione rozwijan� list� i b�dziesz m�g� wtedy u�y� znacznika [sumary] do automatycznego stworzenia spisu zawarto�ci stron");
// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Kategoria');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opcje powiadomie� odnosz�ce si� do aktualnej kategorii');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Dodano now� wiadomo��');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Powiadom mnie, gdy zostanie dodana nowa wiadomo�� w tej kategorii.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Otrzymuj powiadomienie, gdy zostanie dodana nowa wiadomo�� w tej kategorii.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : Nowy news');
?>
