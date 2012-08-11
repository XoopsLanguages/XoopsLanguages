<?php
// $Id: modinfo.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
// Module Info

// The name of this module
define('_MI_NW_NAME'                          , 'Wiadomości ');

// A brief description of this module
define('_MI_NW_DESC'                          , 'Tworzy sekcję informacyjną, gdzie użytkownicy mogą umieszczać wiadomości i komentarze.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NW_BNAME1'                        , 'Blok tematów wiadomości');
define('_MI_NW_BNAME3'                        , 'Blok wielkiej historii');
define('_MI_NW_BNAME4'                        , 'Blok najpopularniejszej wiadomości');
define('_MI_NW_BNAME5'                        , 'Blok ostatnio dodanych wiadomości');
define('_MI_NW_BNAME6'                        , 'Wieści do sprawdzenia - moderowane');
define('_MI_NW_BNAME7'                        , 'Nawigacja przez tematy');

// Sub menus in main menu block
define('_MI_NW_SMNAME1'                       , 'Wyślij wiadomość');
define('_MI_NW_SMNAME2'                       , 'Archiwum');

// Names of admin menu items
define('_MI_NW_ADMENU2'                       , 'Tematy');
define('_MI_NW_ADMENU3'                       , 'Dodaj i edytuj wiadomości');
define('_MI_NW_GROUPPERMS'                    , 'Prawa dostępu');
// Added by Hervé for prune option
define('_MI_NW_PRUNENEWS'                     , 'Skasuj wiadomości');
// Added by Hervé
define('_MI_NW_EXPORT'                        , 'Eksportuj wiadomości');

// Title of config items
define('_MI_NW_STORYHOME'                          , 'Ile wiadomości ma być wyświetlone na stronie głównej?');
define('_MI_NW_NOTIFYSUBMIT'                       , 'Powiadomić e-mailem o oczekującej wiadomości?');
define('_MI_NW_DISPLAYNAV'                         , 'Wyświetlić menu nawigacji w górnej części stron z wiadomościami?');
define('_MI_NW_AUTOAPPROVE'                        , 'Zezwolić na automatyczne akceptowanie wiadomości?');
define("_MI_NW_ALLOWEDSUBMITGROUPS"                , "Grupy użytkowników, które mogą publikować wiadomości");
define("_MI_NW_ALLOWEDAPPROVEGROUPS"               , "Grupy użytkowników, które mogą akceptować wiadomości");
define("_MI_NW_NEWSDISPLAY"                        , "Sposób wyświatlania wiadomości");
define("_MI_NW_NAMEDISPLAY"                        , "Imię autora");
define("_MI_NW_COLUMNMODE"                         , "Kolumy");
define("_MI_NW_STORYCOUNTADMIN"                    , "Ilość nowych artykułów wyświetlanych na stronach administratora (ta opcja ogranicza także ilość tematów oraz jest używana przy wyświetlaniu statystyk).");
define('_MI_NW_UPLOADFILESIZE'                     , 'Maksymalna wielkość pliku, który można dodać podana w kilobajtach (1048576 kilobajtów = 1 megabajt).');
define("_MI_NW_UPLOADGROUPS"                       , "Dodawanie plików do wiadomości");


// Description of each config items
define('_MI_NW_STORYHOMEDSC'                       , '');
define('_MI_NW_NOTIFYSUBMITDSC'                    , '');
define('_MI_NW_DISPLAYNAVDSC'                      , '');
define('_MI_NW_AUTOAPPROVEDSC'                     , '');
define("_MI_NW_ALLOWEDSUBMITGROUPSDESC"            , "Wybrane grupy mogą dodawać wiadomości");
define("_MI_NW_ALLOWEDAPPROVEGROUPSDESC"           , "Wybrane grupy mogą akceptować wiadomości");
define("_MI_NW_NEWSDISPLAYDESC"                    , "Klasyczny sposób pokazuje wszystkie wiadomości posortowane według daty ich publikacji. Wyświetlanie według tematu pokaże całą ostatnią wiadomość z danego tematu, a dla pozostałych tylko ich tematy.");
define('_MI_NW_ADISPLAYNAMEDSC'                    , 'Wybierz sposób wyświetlania informacji o autorze.');
define("_MI_NW_COLUMNMODE_DESC"                    , "Możesz wybrać ilość kolumn w których będą wyświetlane wiadomości.");
define("_MI_NW_STORYCOUNTADMIN_DESC"               , "");
define("_MI_NW_UPLOADFILESIZE_DESC"                , "");
define("_MI_NW_UPLOADGROUPS_DESC"                  , "Użytkownicy należący do następujących grup mogą dodawać pliki.");

// Name of config item values
define("_MI_NW_NEWSCLASSIC"                        , "Klasyczny");
define("_MI_NW_NEWSBYTOPIC"                        , "Według tematu");
define("_MI_NW_DISPLAYNAME1"                       , "Nazwa użytkownika");
define("_MI_NW_DISPLAYNAME2"                       , "Prawdziwe imię");
define("_MI_NW_DISPLAYNAME3"                       , "Nie pokazuj informacji o autorze");
define("_MI_NW_UPLOAD_GROUP1"                      , "Grupy mogące dodawać i akceptować pliki ");
define("_MI_NW_UPLOAD_GROUP2"                      , "Grupy mogące akceptować pliki");
define("_MI_NW_UPLOAD_GROUP3"                      , "Wyłącz dodawanie plików");

// Text for notifications
define('_MI_NW_GLOBAL_NOTIFY'                 , 'Globalne');
define('_MI_NW_GLOBAL_NOTIFYDSC'              , 'Globalne opcje powiadamiania.');

define('_MI_NW_STORY_NOTIFY'                  , 'Wiadomości');
define('_MI_NW_STORY_NOTIFYDSC'               , 'Opcje powiadamiania, które będa obowiązywać obecne wiadomości.');


define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFY'     , 'Nowy temat');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie utworzony nowy temat.');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie utworzony nowy temat.');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Dodano nowy temat');

define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFY'     , 'Dodano nową wiadomość ');       
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYCAP'  , 'Powiadom mnie gdy zostanie dodana nowa wiadomość (oczekująca na zatwierdzenie).');                           
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYDSC'  , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomość (oczekująca na zatwierdzenie).');                
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYSBJ'  , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Oczekująca nowa wiadomość');                              

define('_MI_NW_GLOBAL_NEWSTORY_NOTIFY'        , 'Nowa wiadomość ');       
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYCAP'     , 'Powiadom mnie gdy ukaże się nowa wiadomość.');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYDSC'     , 'Otrzymaj powiadomienie gdy zostanie dodana wiadomość.');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYSBJ'     , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: Nowa wiadomość');                              

define('_MI_NW_STORY_APPROVE_NOTIFY'          , 'Wiadomość zaakceptowana');
define('_MI_NW_STORY_APPROVE_NOTIFYCAP'       , 'Powiadom mnie gdy wiadomość zostanie zaakceptowana.');
define('_MI_NW_STORY_APPROVE_NOTIFYDSC'       , 'Otrzymaj powiadomienie gdy wiadomość zostanie zaakceptowana. ');
define('_MI_NW_STORY_APPROVE_NOTIFYSBJ'       , '[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie : Wiadomość zaakceptowana');

define('_MI_NW_RESTRICTINDEX'                      , 'Ograniczenie dostępu zgodnie według praw dla grup i tematów');
define('_MI_NW_RESTRICTINDEXDSC'                   , 'Jeśli wybierzesz tak to użytkownicy będą mogli zobaczyć wiadomości do których mają prawo oglądania ustawione dla odpowiednich grup w prawach dostępu.');

define('_MI_NW_NEWSBYTHISAUTHOR'                   , 'Wiadomości tego samego autora');
define('_MI_NW_NEWSBYTHISAUTHORDSC'                , 'Jeśli wybierzesz tak to w wiadomości będzie widoczny link \'Wiadomości tego samego autora\'.');

define('_MI_NW_PREVNEX_LINK'                  , 'Pokazywać poprzedni i następny link?');
define('_MI_NW_PREVNEX_LINK_DESC'             , 'Jeśli wybierzesz tak to dwa nowe linki pojawią sie w dole każdego artykułu. Te linki pomogą w nawigowaniu przez wieści zgodni z ich data publikacji.');
define('_MI_NW_SUMMARY_SHOW'                  , 'Pokazywać podsumowanie?');
define('_MI_NW_SUMMARY_SHOW_DESC'             , 'Jeśli wybierzesz tak podsumowanie wszystkich ostatnio opublikowanych artykułów będzie widoczne w dole ostatnio opublikowanych artykułów.');
define('_MI_NW_AUTHOR_EDIT'                   , 'Umożliwić autorom edytowanie swoich wiadomości?');
define('_MI_NW_AUTHOR_EDIT_DESC'              , 'Jeśli wybierzesz tak to autorzy bedą mogli zmieniać swoje wiadomości.');
define('_MI_NW_RATE_NEWS'                     , 'Umożliwić użytkownikom ocenianie wiadomości?');
define('_MI_NW_TOPICS_RSS'                    , 'Umożliwić używanie RSS dla tematów?');
define('_MI_NW_TOPICS_RSS_DESC'               , "Jeśli wybierzesz tak zawartość tematu będzie dostępna przez RSS.");
define('_MI_NW_DATEFORMAT'                    , "Format daty");
define('_MI_NW_DATEFORMAT_DESC'               , "Proszę sprawdzić dokumentację PHP (http://fr.php.net/manual/en/function.date.php) aby uzyskać informację o sposobie wyboru formatu daty. Jeśli nic nie zostanie wpisane, XOOPS użyje standardowego formatu.");
define('_MI_NW_META_DATA'                     , "Umożliwić wprowadzanie informacji Meta Keywords i Meta Description?");
define('_MI_NW_META_DATA_DESC'                , "Jeśli wybierzesz tak to osoby akceptujące dany artykuł będą mogły wprowadzić informacje w dwoch dodatkowych polach Meta Keywords i Meta Description.");
define('_MI_NW_BNAME8'                        , 'Losowa wiadomość');
define('_MI_NW_NEWSLETTER'                    , 'Biuletyn');
define('_MI_NW_STATS'                         , 'Statystyki');
define("_MI_NW_FORM_OPTIONS"                  , "Wybierz edytor");
define("_MI_NW_FORM_COMPACT"                  , "Compact");
define("_MI_NW_FORM_DHTML"                    , "DHTML");
define("_MI_NW_FORM_SPAW"                     , "Spaw");
define("_MI_NW_FORM_HTMLAREA"                 , "HtmlArea");
define("_MI_NW_FORM_FCK"                      , "FCK");
define("_MI_NW_FORM_KOIVI"                    , "Koivi");
define("_MI_NW_FORM_OPTIONS_DESC"             , "Wybierz edytor. Jeśli posiadasz standardową instalację (tzn. używasz tylko wbudowanych klas xoops, które są dostarczane w pakiecie standardowym), to możesz wybrać tylko pomiędzy DHTML i Compact.");
define("_MI_NW_KEYWORDS_HIGH"                 , "Podświetlić szukane wyrazy?");
define("_MI_NW_KEYWORDS_HIGH_DESC"            , "Jeśli wybierzesz tak szukane wyrazy będą podświetlone w artykułach.");
define("_MI_NW_HIGH_COLOR"                    , "Kolor podświetlania wyrazów");
define("_MI_NW_HIGH_COLOR_DES"                , "Jest używany tylko w wypadku wybrania tak we wcześniejszej opcji.");
define("_MI_NW_INFOTIPS"                      , "Długość dymka wiadomości");
define("_MI_NW_INFOTIPS_DES"                  , "Jeśli wybierzesz tak link do wiadomości bedzie zwierał w dymku (n-ilość liter) pierwszych liter z artykułu. Jeśli ustawisz długość na 0 dymek będzie pusty.");
define("_MI_NW_SITE_NAVBAR"                   , "Belka nawigacyjna dla Mozilli i Opery (nie wiem o co tu chodzi, jak ktoś wie to proszę o kontakt - dap)");
define("_MI_NW_SITE_NAVBAR_DESC"              , "Jeśli wybierzesz tak to odwiedzjący strone będą mogli użyc belki nawigacyjnej tych przeglądarek na stronie do przechodzenia pomiędzy artykułami.");
define("_MI_NW_TABS_SKIN"                     , "Wybierz motyw graficzny dla zakładek.s");
define("_MI_NW_TABS_SKIN_DESC"                , "Ten motyw graficzny będzie użyty we wszystkich blokach które używaja zakładek.");
define("_MI_NW_SKIN_1"                        , "Styl zakładek");
define("_MI_NW_SKIN_2"                        , "Ukośny(?)");
define("_MI_NW_SKIN_3"                        , "Klasyczny");
define("_MI_NW_SKIN_4"                        , "Katalogi");
define("_MI_NW_SKIN_5"                        , "Styl Mac Os");
define("_MI_NW_SKIN_6"                        , "Prosty");
define("_MI_NW_SKIN_7"                        , "Zaokrąglony");
define("_MI_NW_SKIN_8"                        , "Styl ZDnet");

// Added in version 1.50
define('_MI_NW_BNAME9','Archives');
define("_MI_NW_FORM_TINYEDITOR","TinyEditor");
define("_MI_NW_FOOTNOTES","Shows links in printable versions of your articles ?");
define("_MI_NW_DUBLINCORE","Ativate Dublin Core Metadata ?");
define("_MI_NW_DUBLINCORE_DSC","For more information, <a href='http://dublincore.org/'>visit this link</a>");
define("_MI_NW_BOOKMARK_ME","Display a 'Bookmark this article at these sites' block ?");
define("_MI_NW_BOOKMARK_ME_DSC","This block will be visible on the article's page");
define("_MI_NW_FF_MICROFORMAT","Activate Firefox 2 Micro Summaries ?");
define("_MI_NW_FF_MICROFORMAT_DSC","For more information, see <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>this page</a>");
define("_MI_NW_WHOS_WHO","Who's Who");
define("_MI_NW_METAGEN","Metagen");
define("_MI_NW_TOPICS_DIRECTORY","Topics Directory");
define("_MI_NW_ADVERTISEMENT","Advertisement");
define("_MI_NW_ADV_DESCR","Enter a text or a javascript code to display in your articles");
define("_MI_NW_MIME_TYPES","Enter authorized Mime Types for upload (separated them on a new line)");
define("_MI_NW_ENHANCED_PAGENAV","Use enhanced page navigator ?");
define("_MI_NW_ENHANCED_PAGENAV_DSC","With this option you can separate your pages with something like this : [pagebreak:Page Title], the links to the pages are replaced by a dropdown list and you can use [summary] to create an automatic summary of pages");

// Added in version 1.54
define('_MI_NW_CATEGORY_NOTIFY','Dotyczące tematu/działu');
define('_MI_NW_CATEGORY_NOTIFYDSC','Opcje powiadamiania które odnoszą się do bieżącej kategorii');

define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFY','Nowy news został wysłany');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYCAP','Powiadom mnie gdy nowa wiadomość będzie wysłana w tym temacie.');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYDSC','Otbieraj powiadomienia kiedy nowa wiadomość jest wysłana w tym temacie.');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} : Nowy news');

// Added in version 1.63
define('_MI_NW_TAGS',"Używać systemu tagów ?");
define('_MI_NW_TAGS_DSC',"Ta opcja bazuje na module XOOPS Tag napisanym przez phppp");
define("_MI_NW_BNAME10","Chmura tagów");
define("_MI_NW_BNAME11","Top Tags");
define("_MI_NW_INTRO_TEXT","Tekst wprowadzenia pojawi się na stronie wysyłania newsa");
define("_MI_NW_IMAGE_MAX_WIDTH","Maksymalna szerokość obrazka gdy jest przeskalowany");
define("_MI_NW_IMAGE_MAX_HEIGHT","Maksymalna wysokość obrazka gdy jest przeskalowany");

// Added in version 1.67
define("_MI_NW_CLONER","Menadżer klonowania");

define("_MI_NW_LATESTNEWS_BLOCK","Blok najnowszych newsów");

// Added in version 1.68 BETA
define("_MI_NW_TOPICDISPLAY","Wyświetl tematy ");
define("_MI_NW_TOPICDISPLAYDESC","Wyświetlanie tytułów tematów w tytułowych nagłówkach");

define("_MI_NW_SEOENABLE","Włącz SEO ");
define("_MI_NW_SEOENABLEDESC","This will enable/disable SEO activity.<br /> If <b>htaccess</b> is selected you will get: <br /> http://your.site.com/<b>xnews</b>/topics.1/your-topic-title.html <br /> If path-info is selected you will get: <br /> http://your.site.com/modules/xnews/index.php/topics.1/your-topic-title.html");

// Added in version 1.68 RC1
define("_MI_NW_EXTEND_META_DATA","Extend meta-data input");
define("_MI_NW_EXTEND_META_DATA_DESC","This will toggle between text and textarea for user edit meta-data input<br /> for both description and keywords.");

define("_MI_NW_NONE","None");
define("_MI_NW_TOPONLY","Top only");
define("_MI_NW_BOTTOMONLY","Bottom only");
define("_MI_NW_BOTH","Both");
define("_MI_NW_DISPLAYLINKICNS","Display Link Icons");
define("_MI_NW_DISPLAYLINKICNSDESC","Display print, friend and pdf icons none-top-bottom-both");

define("_MI_NW_SEOPATH","SEO path ");
define("_MI_NW_SEOPATHDESC","This will add a title to SEO url for both <b>htaccess</b> and <b>path-info</b> modes. <br /> If left empty you will get: <br /> http://your.site.com/topics.1/your-topic-title.html <br /> If you type <b>news</b> you will get: <br /> http://your.site.com/<b>news</b>/topics.1/your-topic-title.html <br /><br /> <b>a-z chars and minus char accepted. eg. news-of-day</b>");
define("_MI_NW_SEOLEVEL","SEO level ");
define("_MI_NW_SEOLEVELDESC","Here you can chose whether to have htaccess in xoops root dir or in module one. <br /> This will change the appearance of the url. <br /> In root level: <br /> http://your.site.com/news/topics.1/your-topic-title.html <br /> In module level: <br /> http://your.site.com/modules/xnews/news.topics.1/your-topic-title.html<br /><br /> Only works in htaccess mode and htaccess files will have to be installed accordingly.");
define("_MI_NW_MODULE_LEVEL","Module level");
define("_MI_NW_ROOT_LEVEL","Root level");

//ADDED wishcraft 1.68
define("_MI_NW_SEOENDOFURL","End of URL");
define("_MI_NW_SEOENDOFURL_DESC","File Extension to HTML Files");
define("_MI_NW_SEOENDOFURLRSS","End of URL");
define("_MI_NW_SEOENDOFURLRSS_DESC","File Extension to RSS Pages");
define("_MI_NW_SEOENDOFURLPDF","End of URL");
define("_MI_NW_SEOENDOFURLPDF_DESC","File Extension to Adobe Acrobat (PDF) Files");

//ADDED in version 1.71
define("_MI_NW_PDF_DISPLAY","Wyświetlaj dołączone pliki PDF");
define("_MI_NW_PDF_DISPLAY_DESC","Wyświetla dołączone pliki PDF na stronie newsa.");
define("_MI_NW_PDF_DETECT","Włącz wykrywanie pluginów PDF");
define("_MI_NW_PDF_DETECT_DESC","Włączenie spowoduje, że przeglądarka użytkownika nie będzie pokazywać ramek iframe PDF <br />  gdy plugin PDF nie jest zainstalowany w przeglądarce. <br /> Działa razem z opcją Wyświetlaj dołączone pliki PDF.");
define("_MI_NW_IMAGES_DISPLAY","Wyświetlaj załączone obrazy");
define("_MI_NW_IMAGES_DISPLAY_DESC","Wyświetla załączone obrazy na stronie newsa.");
define("_MI_NW_THUMB_MAX_WIDTH","Maksymalna szerokość miniaturki załączonego obrazu gdy ten jest przeskalowany");
define("_MI_NW_THUMB_MAX_HEIGHT","Maksymalna wysokość miniaturki załączonego obrazu gdy ten jest przeskalowany");

?>