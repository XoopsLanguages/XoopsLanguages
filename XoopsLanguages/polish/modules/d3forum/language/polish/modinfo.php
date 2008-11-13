<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3forum' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Forum");

// A brief description of this module
define($constpref."_DESC","Modu� forum dla XOOPS");

// Names of blocks for this module (Not all module has blocks)
define($constpref."_BNAME_LIST_TOPICS","Tematy");
define($constpref."_BDESC_LIST_TOPICS","This block can be used for multi-purpose. Of course, you can put it multiplly.");
define($constpref."_BNAME_LIST_POSTS","Posty");
define($constpref."_BNAME_LIST_FORUMS","Fora");

define($constpref.'_ADMENU_CATEGORYACCESS','Uprawnienia dla kategorii');
define($constpref.'_ADMENU_FORUMACCESS','Uprawnienia dla forum');
define($constpref.'_ADMENU_ADVANCEDADMIN','Opcje zaawansowane');

// configurations
define($constpref.'_TOP_MESSAGE','Wiadomo�� powitalna (widoczna na g�rze forum)');
define($constpref.'_TOP_MESSAGEDEFAULT','<h1 class="d3f_title">Forum</h1><p class="d3f_welcome">Rozpocznij przygod� na forum od wybrania kategorii kt�r� chcesz odwiedzi�.</p>');
define($constpref.'_ALLOW_HTML','Zezw�l na HTML');
define($constpref.'_ALLOW_HTMLDSC','Nie u�ywa� bezmy�lnie, mo�e powodowa� ataki haker�w przy pomocy skrypt�w.');
define($constpref.'_ALLOW_TEXTIMG','Pozwalaj na wy�wietlanie zewn�trznych grafik w po�cie');
define($constpref.'_ALLOW_TEXTIMGDSC','If some attackers post an external image using [img], he can know IPs or User-Agents of users visited your site.');
define($constpref.'_ALLOW_SIG','Zezw�l na sygnatury');
define($constpref.'_ALLOW_SIGDSC','');
define($constpref.'_ALLOW_SIGIMG','Pozwala na wy�wietlanie zewn�trznych obrazk�w w sygnaturze');
define($constpref.'_ALLOW_SIGIMGDSC','If some attackers post an external image using [img], he can know IPs or User-Agents of users visited your site.');
define($constpref.'_USE_VOTE','W��cz opcj� g�osowania');
define($constpref.'_USE_SOLVED','W��cz opcj� oznaczania jako rozwi�zany');
define($constpref.'_ALLOW_MARK','W��cz opcj� oznaczania jako wyr�niony');
define($constpref.'_ALLOW_HIDEUID','Pozw�l zarejestrowanym u�ytkownikom postowa� nie ukazuj�c swojego imienia');
define($constpref.'_POSTS_PER_TOPIC','Maksymalna liczba post�w w temacie');
define($constpref.'_POSTS_PER_TOPICDSC','Temat ma limit post�w.');
define($constpref.'_HOT_THRESHOLD','Ilo�� post�w potrzebnych aby temat zosta� oznaczony jako popularny');
define($constpref.'_HOT_THRESHOLDDSC','');
define($constpref.'_TOPICS_PER_PAGE','Ilo�� temat�w wy�wietlanych na jednej stronie');
define($constpref.'_TOPICS_PER_PAGEDSC','');
define($constpref.'_VIEWALLBREAK','Ilo�� temat�w wy�wietlanych na jednej stronie (in the view crossing forums)');
define($constpref.'_VIEWALLBREAKDSC','');
define($constpref.'_SELFEDITLIMIT','Okres mo�liwo�ci edycji posta (sekundy)');
define($constpref.'_SELFEDITLIMITDSC','Wpisz ilo�� sekund po kt�rych u�ytkownik nie b�dzie mia� mo�liwo�ci edycji swojego posta. Aby wy��czy� mo�liwo�� edycji wpisz warto�� 0 (zero)');
define($constpref.'_SELFDELLIMIT','Okres mo�liwo�ci kasowania posta (sekundy)');
define($constpref.'_SELFDELLIMITDSC','Wpisz ilo�� sekund po kt�rych u�ytkownik nie b�dzie mia� mo�liwo�ci kasowania swojego posta. Aby wy��czy� mo�liwo�� kasowania wpisz warto�� 0 (zero)');
define($constpref.'_CSS_URI','�cie�ka do pliku CSS dla forum');
define($constpref.'_CSS_URIDSC','Mo�esz u�y� �cie�ki relatywnej lub absolutnej. Domy�lnie: index.css');
define($constpref.'_IMAGES_DIR','Katalog dla zdj��');
define($constpref.'_IMAGES_DIRDSC','�cie�ka relatywna, powinna by� w katalogu modu�u. Domy�lnie: images');
define($constpref.'_ANONYMOUS_NAME','Nazwa dla anonima');
define($constpref.'_ANONYMOUS_NAMEDSC','');
define($constpref.'_ICON_MEANINGS','Znaczenie ikon');
define($constpref.'_ICON_MEANINGSDSC','Okre�l znaczniki ALT dla ikon. Oddzielaj pionow� kresk� (|). pierwsza ikona to "posticon0.gif".');
define($constpref.'_ICON_MEANINGSDEF','none|normal|unhappy|happy|raise it|lower it|report|question');
define($constpref.'_GUESTVOTE_IVL','Pozw�l niezarejestrowanym g�osowa�');
define($constpref.'_GUESTVOTE_IVLDSC','Ustaw warto�� na 0 (zero) aby wy��czy� mo�liwo�� g�osowania dla niezarejestrowanych. Inna warto�� b�dzie oznacza�a czas (w sekundach) oczekiwania na ponown� mo�liwo�� g�osowania z tego samego IP.');



// Notify Categories
define($constpref.'_NOTCAT_TOPIC', 'Temat');
define($constpref.'_NOTCAT_TOPICDSC', 'Powiadomienia dotycz�ce wybranego tematu');
define($constpref.'_NOTCAT_FORUM', 'Forum');
define($constpref.'_NOTCAT_FORUMDSC', 'Powiadomienia dotycz�ce wybranego forum');
define($constpref.'_NOTCAT_CAT', 'Kategoria');
define($constpref.'_NOTCAT_CATDSC', 'Powiadomienia dotycz�ce wybranej kategorii');
define($constpref.'_NOTCAT_GLOBAL', 'Modu�');
define($constpref.'_NOTCAT_GLOBALDSC', 'Powiadomienia dotycz�ce ca�ego modu�u.');

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

define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULL', 'Nowy post (pe�ny tekst)');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULLCAP', 'Powiadom mnie o nowych postach (zawrzyj tre�� posta).');
define($constpref.'_NOTIFY_GLOBAL_NEWPOSTFULLSBJ', '[{X_SITENAME}] {POST_TITLE}');
define($constpref.'_NOTIFY_GLOBAL_WAITING', 'Nowe oczekuj�ce');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCAP', 'Powiadom mnie o nowych postach oczekuj�cych na akceptacj�. Tylko dla admin�w');
define($constpref.'_NOTIFY_GLOBAL_WAITINGSBJ', '[{X_SITENAME}] {X_MODULE}: Nowe oczekuj�ce');

}

?>