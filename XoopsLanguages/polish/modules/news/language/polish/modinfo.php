<?php
// $Id: modinfo.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME'                          , 'Wiadomo¶ci ');

// A brief description of this module
define('_MI_NEWS_DESC'                          , 'Tworzy sekcjê informacyjn±, gdzie u¿ytkownicy mog± umieszczaæ wiadomo¶ci i komentarze.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1'                        , 'Blok tematów wiadomo¶ci');
define('_MI_NEWS_BNAME3'                        , 'Blok wielkiej historii');
define('_MI_NEWS_BNAME4'                        , 'Blok najpopularniejszej wiadomo¶ci');
define('_MI_NEWS_BNAME5'                        , 'Blok ostatnio dodanych wiadomo¶ci');
define('_MI_NEWS_BNAME6'                        , 'Wie¶ci do sprawdzenia - moderowane');
define('_MI_NEWS_BNAME7'                        , 'Nawigacja przez tematy');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1'                       , 'Wy¶lij wiadomo¶æ');
define('_MI_NEWS_SMNAME2'                       , 'Archiwum');

// Names of admin menu items
define('_MI_NEWS_ADMENU2'                       , 'Tematy');
define('_MI_NEWS_ADMENU3'                       , 'Dodaj i edytuj wiadomo¶ci');
define('_MI_NEWS_GROUPPERMS'                    , 'Prawa dostêpu');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS'                     , 'Skasuj wiadomo¶ci');
// Added by Hervé
define('_MI_NEWS_EXPORT'                        , 'Eksportuj wiadomo¶ci');

// Title of config items
define('_MI_STORYHOME'                          , 'Ile wiadomo¶ci ma byæ wy¶wietlone na stronie g³ównej?');
define('_MI_NOTIFYSUBMIT'                       , 'Powiadomiæ e-mailem o oczekuj±cej wiadomo¶ci?');
define('_MI_DISPLAYNAV'                         , 'Wy¶wietliæ menu nawigacji w górnej czê¶ci stron z wiadomo¶ciami?');
define('_MI_AUTOAPPROVE'                        , 'Zezwoliæ na automatyczne akceptowanie wiadomo¶ci?');
define("_MI_ALLOWEDSUBMITGROUPS"                , "Grupy u¿ytkowników, które mog± publikowaæ wiadomo¶ci");
define("_MI_ALLOWEDAPPROVEGROUPS"               , "Grupy u¿ytkowników, które mog± akceptowaæ wiadomo¶ci");
define("_MI_NEWSDISPLAY"                        , "Sposób wy¶wiatlania wiadomo¶ci");
define("_MI_NAMEDISPLAY"                        , "Imiê autora");
define("_MI_COLUMNMODE"                         , "Kolumy");
define("_MI_STORYCOUNTADMIN"                    , "Ilo¶æ nowych artyku³ów wy¶wietlanych na stronach administratora (ta opcja ogranicza tak¿e ilo¶æ tematów oraz jest u¿ywana przy wy¶wietlaniu statystyk).");
define('_MI_UPLOADFILESIZE'                     , 'Maksymalna wielko¶æ pliku, który mo¿na dodaæ podana w kilobajtach (1048576 kilobajtów = 1 megabajt).');
define("_MI_UPLOADGROUPS"                       , "Dodawanie plików do wiadomo¶ci");


// Description of each config items
define('_MI_STORYHOMEDSC'                       , '');
define('_MI_NOTIFYSUBMITDSC'                    , '');
define('_MI_DISPLAYNAVDSC'                      , '');
define('_MI_AUTOAPPROVEDSC'                     , '');
define("_MI_ALLOWEDSUBMITGROUPSDESC"            , "Wybrane grupy mog± dodawaæ wiadomo¶ci");
define("_MI_ALLOWEDAPPROVEGROUPSDESC"           , "Wybrane grupy mog± akceptowaæ wiadomo¶ci");
define("_MI_NEWSDISPLAYDESC"                    , "Klasyczny sposób pokazuje wszystkie wiadomo¶ci posortowane wed³ug daty ich publikacji. Wy¶wietlanie wed³ug tematu poka¿e ca³± ostatni± wiadomo¶æ z danego tematu, a dla pozosta³ych tylko ich tematy.");
define('_MI_ADISPLAYNAMEDSC'                    , 'Wybierz sposób wy¶wietlania informacji o autorze.');
define("_MI_COLUMNMODE_DESC"                    , "Mo¿esz wybraæ ilo¶æ kolumn w których bêd± wy¶wietlane wiadomo¶ci.");
define("_MI_STORYCOUNTADMIN_DESC"               , "");
define("_MI_UPLOADFILESIZE_DESC"                , "");
define("_MI_UPLOADGROUPS_DESC"                  , "U¿ytkownicy nale¿±cy do nastêpuj±cych grup mog± dodawaæ pliki.");

// Name of config item values
define("_MI_NEWSCLASSIC"                        , "Klasyczny");
define("_MI_NEWSBYTOPIC"                        , "Wed³ug tematu");
define("_MI_DISPLAYNAME1"                       , "Nazwa u¿ytkownika");
define("_MI_DISPLAYNAME2"                       , "Prawdziwe imiê");
define("_MI_DISPLAYNAME3"                       , "Nie pokazuj informacji o autorze");
define("_MI_UPLOAD_GROUP1"                      , "Grupy mog±ce dodawaæ i akceptowaæ pliki ");
define("_MI_UPLOAD_GROUP2"                      , "Grupy mog±ce akceptowaæ pliki");
define("_MI_UPLOAD_GROUP3"                      , "Wy³±cz dodawanie plików");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY'                 , 'Globalne');
define('_MI_NEWS_GLOBAL_NOTIFYDSC'              , 'Globalne opcje powiadamiania.');

define('_MI_NEWS_STORY_NOTIFY'                  , 'Wiadomo¶ci');
define('_MI_NEWS_STORY_NOTIFYDSC'               , 'Opcje powiadamiania, które bêda obowi±zywaæ obecne wiadomo¶ci.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY'     , 'Nowy temat');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie utworzony nowy temat.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano nowy temat');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY'     , 'Dodano now± wiadomo¶æ ');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie dodana nowa wiadomo¶æ (oczekuj±ca na zatwierdzenie).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomo¶æ (oczekuj±ca na zatwierdzenie).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano now± wiadomo¶æ');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY'        , 'Nowa wiadomo¶æ ');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP'     , 'Powiadom mnie gdy uka¿e siê nowa wiadomo¶æ.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC'     , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomo¶æ.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ'     , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Now± wiadomo¶æ');

define('_MI_NEWS_STORY_APPROVE_NOTIFY'          , 'Wiadomo¶æ zaakceptowana');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP'       , 'Powiadom mnie gdy wiadomo¶æ zostanie zaakceptowana.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC'       , 'Otrzymaj powiadomienie gdy wiadomo¶æ zostanie zaakceptowana. ');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ'       , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie : Wiadomo¶æ zaakceptowana');

define('_MI_RESTRICTINDEX'                      , 'Ograniczenie dostêpu zgodnie wed³ug praw dla grup i tematów');
define('_MI_RESTRICTINDEXDSC'                   , 'Je¶li wybierzesz tak to u¿ytkownicy bêd± mogli zobaczyæ wiadomo¶ci do których maj± prawo ogl±dania ustawione dla odpowiednich grup w prawach dostêpu.');

define('_MI_NEWSBYTHISAUTHOR'                   , 'Wiadomo¶ci tego samego autora');
define('_MI_NEWSBYTHISAUTHORDSC'                , 'Je¶li wybierzesz tak to w wiadomo¶ci bêdzie widoczny link \'Wiadomo¶ci tego samego autora\'.');

define('_MI_NEWS_PREVNEX_LINK'                  , 'Pokazywaæ poprzedni i nastêpny link?');
define('_MI_NEWS_PREVNEX_LINK_DESC'             , 'Je¶li wybierzesz tak to dwa nowe linki pojawi± sie w dole ka¿dego artyku³u. Te linki pomog± w nawigowaniu przez wie¶ci zgodni z ich data publikacji.');
define('_MI_NEWS_SUMMARY_SHOW'                  , 'Pokazywaæ podsumowanie?');
define('_MI_NEWS_SUMMARY_SHOW_DESC'             , 'Je¶li wybierzesz tak podsumowanie wszystkich ostatnio opublikowanych artyku³ów bêdzie widoczne w dole ostatnio opublikowanych artyku³ów.');
define('_MI_NEWS_AUTHOR_EDIT'                   , 'Umo¿liwiæ autorom edytowanie swoich wiadomo¶ci?');
define('_MI_NEWS_AUTHOR_EDIT_DESC'              , 'Je¶li wybierzesz tak to autorzy bed± mogli zmieniaæ swoje wiadomo¶ci.');
define('_MI_NEWS_RATE_NEWS'                     , 'Umo¿liwiæ u¿ytkownikom ocenianie wiadomo¶ci?');
define('_MI_NEWS_TOPICS_RSS'                    , 'Umo¿liwiæ u¿ywanie RSS dla tematów?');
define('_MI_NEWS_TOPICS_RSS_DESC'               , "Je¶li wybierzesz tak zawarto¶æ tematu bêdzie dostêpna przez RSS.");
define('_MI_NEWS_DATEFORMAT'                    , "Format daty");
define('_MI_NEWS_DATEFORMAT_DESC'               , "Proszê sprawdziæ dokumentacjê PHP (http://fr.php.net/manual/en/function.date.php) aby uzyskaæ informacjê o sposobie wyboru formatu daty. Je¶li nic nie zostanie wpisane, XOOPS u¿yje standardowego formatu.");
define('_MI_NEWS_META_DATA'                     , "Umo¿liwiæ wprowadzanie informacji Meta Keywords i Meta Description?");
define('_MI_NEWS_META_DATA_DESC'                , "Je¶li wybierzesz tak to osoby akceptuj±ce dany artyku³ bêd± mog³y wprowadziæ informacje w dwoch dodatkowych polach Meta Keywords i Meta Description.");
define('_MI_NEWS_BNAME8'                        , 'Losowa wiadomo¶æ');
define('_MI_NEWS_NEWSLETTER'                    , 'Biuletyn');
define('_MI_NEWS_STATS'                         , 'Statystyki');
define("_MI_NEWS_FORM_OPTIONS"                  , "Wybierz edytor");
define("_MI_NEWS_FORM_COMPACT"                  , "Compact");
define("_MI_NEWS_FORM_DHTML"                    , "DHTML");
define("_MI_NEWS_FORM_SPAW"                     , "Spaw");
define("_MI_NEWS_FORM_HTMLAREA"                 , "HtmlArea");
define("_MI_NEWS_FORM_FCK"                      , "FCK");
define("_MI_NEWS_FORM_KOIVI"                    , "Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC"             , "Wybierz edytor. Je¶li posiadasz standardow± instalacjê (tzn. u¿ywasz tylko wbudowanych klas xoops, które s± dostarczane w pakiecie standardowym), to mo¿esz wybraæ tylko pomiêdzy DHTML i Compact.");
define("_MI_NEWS_KEYWORDS_HIGH"                 , "Pod¶wietliæ szukane wyrazy?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC"            , "Je¶li wybierzesz tak szukane wyrazy bêd± pod¶wietlone w artyku³ach.");
define("_MI_NEWS_HIGH_COLOR"                    , "Kolor pod¶wietlania wyrazów");
define("_MI_NEWS_HIGH_COLOR_DES"                , "Jest u¿ywany tylko w wypadku wybrania tak we wcze¶niejszej opcji.");
define("_MI_NEWS_INFOTIPS"                      , "D³ugo¶æ dymka wiadomo¶ci");
define("_MI_NEWS_INFOTIPS_DES"                  , "Je¶li wybierzesz tak link do wiadomo¶ci bedzie zwiera³ w dymku (n-ilo¶æ liter) pierwszych liter z artyku³u. Je¶li ustawisz d³ugo¶æ na 0 dymek bêdzie pusty.");
define("_MI_NEWS_SITE_NAVBAR"                   , "Belka nawigacyjna dla Mozilli i Opery (nie wiem o co tu chodzi, jak kto¶ wie to proszê o kontakt - dap)");
define("_MI_NEWS_SITE_NAVBAR_DESC"              , "Je¶li wybierzesz tak to odwiedzj±cy strone bêd± mogli u¿yc belki nawigacyjnej tych przegl±darek na stronie do przechodzenia pomiêdzy artyku³ami.");
define("_MI_NEWS_TABS_SKIN"                     , "Wybierz motyw graficzny dla zak³adek.s");
define("_MI_NEWS_TABS_SKIN_DESC"                , "Ten motyw graficzny bêdzie u¿yty we wszystkich blokach które u¿ywaja zak³adek.");
define("_MI_NEWS_SKIN_1"                        , "Styl zak³adek");
define("_MI_NEWS_SKIN_2"                        , "Uko¶ny(?)");
define("_MI_NEWS_SKIN_3"                        , "Klasyczny");
define("_MI_NEWS_SKIN_4"                        , "Katalogi");
define("_MI_NEWS_SKIN_5"                        , "Styl Mac Os");
define("_MI_NEWS_SKIN_6"                        , "Prosty");
define("_MI_NEWS_SKIN_7"                        , "Zaokr±glony");
define("_MI_NEWS_SKIN_8"                        , "Styl ZDnet");
// Added in version 1.50
define('_MI_NEWS_BNAME9','Archiwa');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Pokazaæ linki w wersji do druku?");
define("_MI_NEWS_DUBLINCORE","Aktywowaæ Dublin Core Metadata?");
define("_MI_NEWS_DUBLINCORE_DSC","Aby uzyskaæ wiêcej informacji, <a hreh='http://dublincore.org/'> odwied¼ ten link</a>");
define("_MI_NEWS_BOOKMARK_ME","Wy¶wietlaæ blok 'Dodaj ten artyku³ do ulubionych'?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ten blok bêdzie widoczny na stronie artyku³ów");
define("_MI_NEWS_FF_MICROFORMAT","Aktywowaæ Firefox 2 Micro Summaries?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Aby uzyskaæ wiêcej informacji, zobacz <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>t± stronê</a>");
define("_MI_NEWS_WHOS_WHO","Kto jest kim");
define("_MI_NEWS_METAGEN","Metatagi");
define("_MI_NEWS_TOPICS_DIRECTORY","Katalog tematów");
define("_MI_NEWS_ADVERTISEMENT","Reklama");
define("_MI_NEWS_ADV_DESCR","Wstaw tekst albo kod javascript ¿eby wy¶wietliæ twoj± reklamê");
define("_MI_NEWS_MIME_TYPES","Wprowad¼ autoryzowane typy Mime do upload'u (rozdziel je znakami nowej linii)");
define("_MI_NEWS_ENHANCED_PAGENAV","U¿yæ rozszerzonej nawigacji?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Za pomoc± tej opcji mo¿esz rozdzieliæ strony czym¶ takim : [pagrebreak:Page Title], linki do stron zostan± zast±pione rozwijan± list± i bêdziesz móg³ wtedy u¿yæ znacznika [sumary] do automatycznego stworzenia spisu zawarto¶ci stron");
// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Kategoria');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opcje powiadomieñ odnosz±ce siê do aktualnej kategorii');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY','Dodano now± wiadomo¶æ');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP','Powiadom mnie, gdy zostanie dodana nowa wiadomo¶æ w tej kategorii.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC','Otrzymuj powiadomienie, gdy zostanie dodana nowa wiadomo¶æ w tej kategorii.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} powiadomienie : Nowy news');
?>
