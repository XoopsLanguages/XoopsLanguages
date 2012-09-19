<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3forum' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Forum");

// A brief description of this module
define($constpref."_DESC","Moduł forum dla XOOPS");

// Names of blocks for this module (Not all module has blocks)
define($constpref."_BNAME_LIST_TOPICS","Tematy");
define($constpref."_BDESC_LIST_TOPICS","This block can be used for multi-purpose. Of course, you can put it multiplly.");
define($constpref."_BNAME_LIST_POSTS","Posty");
define($constpref."_BNAME_LIST_FORUMS","Fora");

define($constpref.'_ADMENU_CATEGORYACCESS','Uprawnienia dla kategorii');
define($constpref.'_ADMENU_FORUMACCESS','Uprawnienia dla forum');
define($constpref.'_ADMENU_ADVANCEDADMIN','Opcje zaawansowane');

// configurations
define($constpref.'_TOP_MESSAGE','Wiadomość powitalna (widoczna na górze forum)');
define($constpref.'_TOP_MESSAGEDEFAULT','<h1 class="d3f_title">Forum</h1><p class="d3f_welcome">Rozpocznij przygodę na forum od wybrania kategorii którą chcesz odwiedzić.</p>');
define($constpref.'_ALLOW_HTML','Zezwól na HTML');
define($constpref.'_ALLOW_HTMLDSC','Nie używać bezmyślnie, może powodować ataki hakerów przy pomocy skryptów.');
define($constpref.'_ALLOW_TEXTIMG','Pozwalaj na wyświetlanie zewnętrznych grafik w poście');
define($constpref.'_ALLOW_TEXTIMGDSC','If some attackers post an external image using [img], he can know IPs or User-Agents of users visited your site.');
define($constpref.'_ALLOW_SIG','Zezwól na sygnatury');
define($constpref.'_ALLOW_SIGDSC','');
define($constpref.'_ALLOW_SIGIMG','Pozwala na wyświetlanie zewnętrznych obrazków w sygnaturze');
define($constpref.'_ALLOW_SIGIMGDSC','If some attackers post an external image using [img], he can know IPs or User-Agents of users visited your site.');
define($constpref.'_USE_VOTE','Włącz opcję głosowania');
define($constpref.'_USE_SOLVED','Włącz opcję oznaczania jako rozwiązany');
define($constpref.'_ALLOW_MARK','Włącz opcję oznaczania jako wyróżniony');
define($constpref.'_ALLOW_HIDEUID','Pozwól zarejestrowanym użytkownikom postować nie ukazując swojego imienia');
define($constpref.'_POSTS_PER_TOPIC','Maksymalna liczba postów w temacie');
define($constpref.'_POSTS_PER_TOPICDSC','Temat ma limit postów.');
define($constpref.'_HOT_THRESHOLD','Ilość postów potrzebnych aby temat został oznaczony jako popularny');
define($constpref.'_HOT_THRESHOLDDSC','');
define($constpref.'_TOPICS_PER_PAGE','Ilość tematów wyświetlanych na jednej stronie');
define($constpref.'_TOPICS_PER_PAGEDSC','');
define($constpref.'_VIEWALLBREAK','Ilość tematów wyświetlanych na jednej stronie (in the view crossing forums)');
define($constpref.'_VIEWALLBREAKDSC','');
define($constpref.'_SELFEDITLIMIT','Okres możliwości edycji posta (sekundy)');
define($constpref.'_SELFEDITLIMITDSC','Wpisz ilość sekund po których użytkownik nie będzie miał możliwości edycji swojego posta. Aby wyłączyć możliwość edycji wpisz wartość 0 (zero)');
define($constpref.'_SELFDELLIMIT','Okres możliwości kasowania posta (sekundy)');
define($constpref.'_SELFDELLIMITDSC','Wpisz ilość sekund po których użytkownik nie będzie miał możliwości kasowania swojego posta. Aby wyłączyć możliwość kasowania wpisz wartość 0 (zero)');
define($constpref.'_CSS_URI','Ścieżka do pliku CSS dla forum');
define($constpref.'_CSS_URIDSC','Możesz użyć ścieżki relatywnej lub absolutnej. Domyślnie: index.css');
define($constpref.'_IMAGES_DIR','Katalog dla zdjęć');
define($constpref.'_IMAGES_DIRDSC','Ścieżka relatywna, powinna być w katalogu modułu. Domyślnie: images');
define($constpref.'_ANONYMOUS_NAME','Nazwa dla anonima');
define($constpref.'_ANONYMOUS_NAMEDSC','');
define($constpref.'_ICON_MEANINGS','Znaczenie ikon');
define($constpref.'_ICON_MEANINGSDSC','Określ znaczniki ALT dla ikon. Oddzielaj pionową kreską (|). pierwsza ikona to "posticon0.gif".');
define($constpref.'_ICON_MEANINGSDEF','none|normal|unhappy|happy|raise it|lower it|report|question');
define($constpref.'_GUESTVOTE_IVL','Pozwól niezarejestrowanym głosować');
define($constpref.'_GUESTVOTE_IVLDSC','Ustaw wartość na 0 (zero) aby wyłączyć możliwość głosowania dla niezarejestrowanych. Inna wartość będzie oznaczała czas (w sekundach) oczekiwania na ponowną możliwość głosowania z tego samego IP.');



// Notify Categories
define($constpref.'_NOTCAT_TOPIC', 'Temat');
define($constpref.'_NOTCAT_TOPICDSC', 'Powiadomienia dotyczące wybranego tematu');
define($constpref.'_NOTCAT_FORUM', 'Forum');
define($constpref.'_NOTCAT_FORUMDSC', 'Powiadomienia dotyczące wybranego forum');
define($constpref.'_NOTCAT_CAT', 'Kategoria');
define($constpref.'_NOTCAT_CATDSC', 'Powiadomienia dotyczące wybranej kategorii');
define($constpref.'_NOTCAT_GLOBAL', 'Moduł');
define($constpref.'_NOTCAT_GLOBALDSC', 'Powiadomienia dotyczące całego modułu.');

// Each Notifications
define($constpref.'_NOTIFY_TOPIC_NEWPOST', 'Nowy post w temacie');
define($constpref.'_NOTIFY_TOPIC_NEWPOSTCAP', 'Powiadom mnie o nowych postach w tym temacie.');
define($constpref.'_NOTIFY_TOPIC_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}:{TOPIC_TITLE} Nowy post w temacie');

define($constpref.'_NOTIFY_FORUM_NEWPOST', 'Nowy post w forum');
define($constpref.'_NOTIFY_FORUM_NEWPOSTCAP', 'Powiadom mnie o nowych postach w tym forum.');
define($constpref.'_NOTIFY_FORUM_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}:{FORUM_TITLE} Nowy post w forum');

define($constpref.'_NOTIFY_FORUM_NEWTOPIC', 'Nowy tmeat w forum');
define($constpref.'_NOTIFY_FORUM_NEWTOPICCAP', 'Powiadom mnie o nowych tematach w tym forum.');
define($constpref.'_NOTIFY_FORUM_NEWTOPICSBJ', '[{X_SITENAME}] {X_MODULE}:{FORUM_TITLE} Nowy tmeat w forum');

define($constpref.'_NOTIFY_CAT_NEWPOST', 'Nowy post w kategorii');
define($constpref.'_NOTIFY_CAT_NEWPOSTCAP', 'Powiadom mnie o nowych postach w tej kategorii .');
define($constpref.'_NOTIFY_CAT_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} Nowy post w kategorii');

define($constpref.'_NOTIFY_CAT_NEWTOPIC', 'Nowy temat w kategorii');
define($constpref.'_NOTIFY_CAT_NEWTOPICCAP', 'Powiadom mnie o nowych tematach w tej kategorii.');
define($constpref.'_NOTIFY_CAT_NEWTOPICSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} Nowy temat w kategorii');

define($constpref.'_NOTIFY_CAT_NEWFORUM', 'Nowe forum w kategorii');
define($constpref.'_NOTIFY_CAT_NEWFORUMCAP', 'Powiadom mnie o nowych forach w tyj kategorii.');
define($constpref.'_NOTIFY_CAT_NEWFORUMSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} Nowe forum w kategorii');

define($constpref.'_NOTIFY_GLOBAL_NEWPOST', 'Nowy post');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTCAP', 'Powiadom mnie o nowych postach w tym module.');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTSBJ', '[{X_SITENAME}] {X_MODULE}: Nowy post');

define($constpref.'_NOTIFY_GLOBAL_NEWTOPIC', 'Nowy temat');
define($constpref.'_NOTIFY_GLOBAL_NEWTOPICCAP', 'Powiadom mnie o nowych tematach w tym module.');
define($constpref.'_NOTIFY_GLOBAL_NEWTOPICSBJ', '[{X_SITENAME}] {X_MODULE}: Nowy temat');

define($constpref.'_NOTIFY_GLOBAL_NEWFORUM', 'Nowe forum');
define($constpref.'_NOTIFY_GLOBAL_NEWFORUMCAP', 'Powiadom mnie o nowych forach w tym module.');
define($constpref.'_NOTIFY_GLOBAL_NEWFORUMSBJ', '[{X_SITENAME}] {X_MODULE}: Nowe forum');

define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULL', 'Nowy post (pełny tekst)');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULLCAP', 'Powiadom mnie o nowych postach (zawrzyj treść posta).');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULLSBJ', '[{X_SITENAME}] {POST_TITLE}');
define($constpref.'_NOTIFY_GLOBAL_WAITING', 'Nowe oczekujące');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCAP', 'Powiadom mnie o nowych postach oczekujących na akceptację. Tylko dla adminów');
define($constpref.'_NOTIFY_GLOBAL_WAITINGSBJ', '[{X_SITENAME}] {X_MODULE}: Nowe oczekujące');

}

?>