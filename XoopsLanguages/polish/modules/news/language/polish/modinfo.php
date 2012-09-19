<?php
// $Id: modinfo.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME'                          , 'Wiadomości ');

// A brief description of this module
define('_MI_NEWS_DESC'                          , 'Tworzy sekcję informacyjną, gdzie użytkownicy mogą umieszczać wiadomości i komentarze.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1'                        , 'Blok tematów wiadomości');
define('_MI_NEWS_BNAME3'                        , 'Blok wielkiej historii');
define('_MI_NEWS_BNAME4'                        , 'Blok najpopularniejszej wiadomości');
define('_MI_NEWS_BNAME5'                        , 'Blok ostatnio dodanych wiadomości');
define('_MI_NEWS_BNAME6'                        , 'Wieści do sprawdzenia - moderowane');
define('_MI_NEWS_BNAME7'                        , 'Nawigacja przez tematy');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1'                       , 'Wyślij wiadomość');
define('_MI_NEWS_SMNAME2'                       , 'Archiwum');

// Names of admin menu items
define('_MI_NEWS_ADMENU2'                       , 'Tematy');
define('_MI_NEWS_ADMENU3'                       , 'Dodaj i edytuj wiadomości');
define('_MI_NEWS_GROUPPERMS'                    , 'Prawa dostępu');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS'                     , 'Skasuj wiadomości');
// Added by Hervé
define('_MI_NEWS_EXPORT'                        , 'Eksportuj wiadomości');

// Title of config items
define('_MI_STORYHOME'                          , 'Ile wiadomości ma być wyświetlone na stronie głównej?');
define('_MI_NOTIFYSUBMIT'                       , 'Powiadomić e-mailem o oczekującej wiadomości?');
define('_MI_DISPLAYNAV'                         , 'Wyświetlić menu nawigacji w górnej części stron z wiadomościami?');
define('_MI_AUTOAPPROVE'                        , 'Zezwolić na automatyczne akceptowanie wiadomości?');
define("_MI_ALLOWEDSUBMITGROUPS"                , "Grupy użytkowników, które mogą publikować wiadomości");
define("_MI_ALLOWEDAPPROVEGROUPS"               , "Grupy użytkowników, które mogą akceptować wiadomości");
define("_MI_NEWSDISPLAY"                        , "Sposób wyświatlania wiadomości");
define("_MI_NAMEDISPLAY"                        , "Imię autora");
define("_MI_COLUMNMODE"                         , "Kolumy");
define("_MI_STORYCOUNTADMIN"                    , "Ilość nowych artykułów wyświetlanych na stronach administratora (ta opcja ogranicza także ilość tematów oraz jest używana przy wyświetlaniu statystyk).");
define('_MI_UPLOADFILESIZE'                     , 'Maksymalna wielkość pliku, który można dodać podana w kilobajtach (1048576 kilobajtów = 1 megabajt).');
define("_MI_UPLOADGROUPS"                       , "Dodawanie plików do wiadomości");


// Description of each config items
define('_MI_STORYHOMEDSC'                       , '');
define('_MI_NOTIFYSUBMITDSC'                    , '');
define('_MI_DISPLAYNAVDSC'                      , '');
define('_MI_AUTOAPPROVEDSC'                     , '');
define("_MI_ALLOWEDSUBMITGROUPSDESC"            , "Wybrane grupy mogą dodawać wiadomości");
define("_MI_ALLOWEDAPPROVEGROUPSDESC"           , "Wybrane grupy mogą akceptować wiadomości");
define("_MI_NEWSDISPLAYDESC"                    , "Klasyczny sposób pokazuje wszystkie wiadomości posortowane według daty ich publikacji. Wyświetlanie według tematu pokaże całą ostatnią wiadomość z danego tematu, a dla pozostałych tylko ich tematy.");
define('_MI_ADISPLAYNAMEDSC'                    , 'Wybierz sposób wyświetlania informacji o autorze.');
define("_MI_COLUMNMODE_DESC"                    , "Możesz wybrać ilość kolumn w których będą wyświetlane wiadomości.");
define("_MI_STORYCOUNTADMIN_DESC"               , "");
define("_MI_UPLOADFILESIZE_DESC"                , "");
define("_MI_UPLOADGROUPS_DESC"                  , "Użytkownicy należący do następujących grup mogą dodawać pliki.");

// Name of config item values
define("_MI_NEWSCLASSIC"                        , "Klasyczny");
define("_MI_NEWSBYTOPIC"                        , "Według tematu");
define("_MI_DISPLAYNAME1"                       , "Nazwa użytkownika");
define("_MI_DISPLAYNAME2"                       , "Prawdziwe imię");
define("_MI_DISPLAYNAME3"                       , "Nie pokazuj informacji o autorze");
define("_MI_UPLOAD_GROUP1"                      , "Grupy mogące dodawać i akceptować pliki ");
define("_MI_UPLOAD_GROUP2"                      , "Grupy mogące akceptować pliki");
define("_MI_UPLOAD_GROUP3"                      , "Wyłącz dodawanie plików");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY'                 , 'Globalne');
define('_MI_NEWS_GLOBAL_NOTIFYDSC'              , 'Globalne opcje powiadamiania.');

define('_MI_NEWS_STORY_NOTIFY'                  , 'Wiadomości');
define('_MI_NEWS_STORY_NOTIFYDSC'               , 'Opcje powiadamiania, które będa obowiązywać obecne wiadomości.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY'     , 'Nowy temat');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie utworzony nowy temat.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano nowy temat');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY'     , 'Dodano nową wiadomość ');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie dodana nowa wiadomość (oczekująca na zatwierdzenie).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomość (oczekująca na zatwierdzenie).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano nową wiadomość');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY'        , 'Nowa wiadomość ');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP'     , 'Powiadom mnie gdy ukaże się nowa wiadomość.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC'     , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomość.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ'     , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Nową wiadomość');

define('_MI_NEWS_STORY_APPROVE_NOTIFY'          , 'Wiadomość zaakceptowana');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP'       , 'Powiadom mnie gdy wiadomość zostanie zaakceptowana.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC'       , 'Otrzymaj powiadomienie gdy wiadomość zostanie zaakceptowana. ');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ'       , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie : Wiadomość zaakceptowana');

define('_MI_RESTRICTINDEX'                      , 'Ograniczenie dostępu zgodnie według praw dla grup i tematów');
define('_MI_RESTRICTINDEXDSC'                   , 'Jeśli wybierzesz tak to użytkownicy będą mogli zobaczyć wiadomości do których mają prawo oglądania ustawione dla odpowiednich grup w prawach dostępu.');

define('_MI_NEWSBYTHISAUTHOR'                   , 'Wiadomości tego samego autora');
define('_MI_NEWSBYTHISAUTHORDSC'                , 'Jeśli wybierzesz tak to w wiadomości będzie widoczny link \'Wiadomości tego samego autora\'.');

define('_MI_NEWS_PREVNEX_LINK'                  , 'Pokazywać poprzedni i następny link?');
define('_MI_NEWS_PREVNEX_LINK_DESC'             , 'Jeśli wybierzesz tak to dwa nowe linki pojawią sie w dole każdego artykułu. Te linki pomogą w nawigowaniu przez wieści zgodni z ich data publikacji.');
define('_MI_NEWS_SUMMARY_SHOW'                  , 'Pokazywać podsumowanie?');
define('_MI_NEWS_SUMMARY_SHOW_DESC'             , 'Jeśli wybierzesz tak podsumowanie wszystkich ostatnio opublikowanych artykułów będzie widoczne w dole ostatnio opublikowanych artykułów.');
define('_MI_NEWS_AUTHOR_EDIT'                   , 'Umożliwić autorom edytowanie swoich wiadomości?');
define('_MI_NEWS_AUTHOR_EDIT_DESC'              , 'Jeśli wybierzesz tak to autorzy bedą mogli zmieniać swoje wiadomości.');
define('_MI_NEWS_RATE_NEWS'                     , 'Umożliwić użytkownikom ocenianie wiadomości?');
define('_MI_NEWS_TOPICS_RSS'                    , 'Umożliwić używanie RSS dla tematów?');
define('_MI_NEWS_TOPICS_RSS_DESC'               , "Jeśli wybierzesz tak zawartość tematu będzie dostępna przez RSS.");
define('_MI_NEWS_DATEFORMAT'                    , "Format daty");
define('_MI_NEWS_DATEFORMAT_DESC'               , "Proszę sprawdzić dokumentację PHP (http://fr.php.net/manual/en/function.date.php) aby uzyskać informację o sposobie wyboru formatu daty. Jeśli nic nie zostanie wpisane, XOOPS użyje standardowego formatu.");
define('_MI_NEWS_META_DATA'                     , "Umożliwić wprowadzanie informacji Meta Keywords i Meta Description?");
define('_MI_NEWS_META_DATA_DESC'                , "Jeśli wybierzesz tak to osoby akceptujące dany artykuł będą mogły wprowadzić informacje w dwoch dodatkowych polach Meta Keywords i Meta Description.");
define('_MI_NEWS_BNAME8'                        , 'Losowa wiadomość');
define('_MI_NEWS_NEWSLETTER'                    , 'Biuletyn');
define('_MI_NEWS_STATS'                         , 'Statystyki');
define("_MI_NEWS_FORM_OPTIONS"                  , "Wybierz edytor");
define("_MI_NEWS_FORM_COMPACT"                  , "Compact");
define("_MI_NEWS_FORM_DHTML"                    , "DHTML");
define("_MI_NEWS_FORM_SPAW"                     , "Spaw");
define("_MI_NEWS_FORM_HTMLAREA"                 , "HtmlArea");
define("_MI_NEWS_FORM_FCK"                      , "FCK");
define("_MI_NEWS_FORM_KOIVI"                    , "Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC"             , "Wybierz edytor. Jeśli posiadasz standardową instalację (tzn. używasz tylko wbudowanych klas xoops, które są dostarczane w pakiecie standardowym), to możesz wybrać tylko pomiędzy DHTML i Compact.");
define("_MI_NEWS_KEYWORDS_HIGH"                 , "Podświetlić szukane wyrazy?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC"            , "Jeśli wybierzesz tak szukane wyrazy będą podświetlone w artykułach.");
define("_MI_NEWS_HIGH_COLOR"                    , "Kolor podświetlania wyrazów");
define("_MI_NEWS_HIGH_COLOR_DES"                , "Jest używany tylko w wypadku wybrania tak we wcześniejszej opcji.");
define("_MI_NEWS_INFOTIPS"                      , "Długość dymka wiadomości");
define("_MI_NEWS_INFOTIPS_DES"                  , "Jeśli wybierzesz tak link do wiadomości bedzie zwierał w dymku (n-ilość liter) pierwszych liter z artykułu. Jeśli ustawisz długość na 0 dymek będzie pusty.");
define("_MI_NEWS_SITE_NAVBAR"                   , "Belka nawigacyjna dla Mozilli i Opery (nie wiem o co tu chodzi, jak ktoś wie to proszę o kontakt - dap)");
define("_MI_NEWS_SITE_NAVBAR_DESC"              , "Jeśli wybierzesz tak to odwiedzjący strone będą mogli użyc belki nawigacyjnej tych przeglądarek na stronie do przechodzenia pomiędzy artykułami.");
define("_MI_NEWS_TABS_SKIN"                     , "Wybierz motyw graficzny dla zakładek.s");
define("_MI_NEWS_TABS_SKIN_DESC"                , "Ten motyw graficzny będzie użyty we wszystkich blokach które używaja zakładek.");
define("_MI_NEWS_SKIN_1"                        , "Styl zakładek");
define("_MI_NEWS_SKIN_2"                        , "Ukośny(?)");
define("_MI_NEWS_SKIN_3"                        , "Klasyczny");
define("_MI_NEWS_SKIN_4"                        , "Katalogi");
define("_MI_NEWS_SKIN_5"                        , "Styl Mac Os");
define("_MI_NEWS_SKIN_6"                        , "Prosty");
define("_MI_NEWS_SKIN_7"                        , "Zaokrąglony");
define("_MI_NEWS_SKIN_8"                        , "Styl ZDnet");
// Added in version 1.50
define('_MI_NEWS_BNAME9','Archiwa');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Pokazać linki w wersji do druku?");
define("_MI_NEWS_DUBLINCORE","Aktywować Dublin Core Metadata?");
define("_MI_NEWS_DUBLINCORE_DSC","Aby uzyskać więcej informacji, <a hreh='http://dublincore.org/'> odwiedź ten link</a>");
define("_MI_NEWS_BOOKMARK_ME","Wyświetlać blok 'Dodaj ten artykuł do ulubionych'?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ten blok będzie widoczny na stronie artykułów");
define("_MI_NEWS_FF_MICROFORMAT","Aktywować Firefox 2 Micro Summaries?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Aby uzyskać więcej informacji, zobacz <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>tą stronę</a>");
define("_MI_NEWS_WHOS_WHO","Kto jest kim");
define("_MI_NEWS_METAGEN","Metatagi");
define("_MI_NEWS_TOPICS_DIRECTORY","Katalog tematów");
define("_MI_NEWS_ADVERTISEMENT","Reklama");
define("_MI_NEWS_ADV_DESCR","Wstaw tekst albo kod javascript żeby wyświetlić twoją reklamę");
define("_MI_NEWS_MIME_TYPES","Wprowadź autoryzowane typy Mime do upload'u (rozdziel je znakami nowej linii)");
define("_MI_NEWS_ENHANCED_PAGENAV","Użyć rozszerzonej nawigacji?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Za pomocą tej opcji możesz rozdzielić strony czymś takim : [pagrebreak:Page Title], linki do stron zostaną zastąpione rozwijaną listą i będziesz mógł wtedy użyć znacznika [sumary] do automatycznego stworzenia spisu zawartości stron");
// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Kategoria');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opcje powiadomień odnoszące się do aktualnej kategorii');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Dodano nową wiadomość');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Powiadom mnie, gdy zostanie dodana nowa wiadomość w tej kategorii.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Otrzymuj powiadomienie, gdy zostanie dodana nowa wiadomość w tej kategorii.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} powiadomienie : Nowy news');
?>
