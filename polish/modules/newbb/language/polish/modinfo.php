<?php
// $Id: modinfo.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info

// The name of this module
define("_MI_NEWBB_NAME","CBB");

// A brief description of this module
define("_MI_NEWBB_DESC","Skrypt forum dla XOOPSa");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BLOCK_TOPIC_POST","Ostatnie tematy odpowiedziami");
define("_MI_NEWBB_BLOCK_TOPIC","Ostatnie wątki");
define("_MI_NEWBB_BLOCK_POST","Ostatnie posty");
define("_MI_NEWBB_BLOCK_AUTHOR","Autorzy");
define("_MI_NEWBB_BLOCK_TAG_CLOUD", "Tag Cloud");
define("_MI_NEWBB_BLOCK_TAG_TOP", "Top Tags");
/*
define("_MI_NEWBB_BNAME2","Najczęsciej oglądane wątki");
define("_MI_NEWBB_BNAMEł","Najczęsciej komentowane wątki");
define("_MI_NEWBB_BNAME4","Najnowsze Przeglądy");
define("_MI_NEWBB_BNAME5","Najnowsze tematy przyklejone");
define("_MI_NEWBB_BNAME6","Najnowsze posty");
define("_MI_NEWBB_BNAME7","Autorzy nowych wątków");
define("_MI_NEWBB_BNAME8","Najczęściej piszący posty");
define("_MI_NEWBB_BNAME9","Najczęściej występujący w Przeglądach");
define("_MI_NEWBB_BNAME10","Najczęściej tworzą tematy przyklejane");
define("_MI_NEWBB_BNAME11","Ostatnie posty z tekstem");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","Indeks");
define("_MI_NEWBB_ADMENU_CATEGORY","Kategorie");
define("_MI_NEWBB_ADMENU_FORUM","Fora");
define("_MI_NEWBB_ADMENU_PERMISSION","Uprawnienia");
define("_MI_NEWBB_ADMENU_BLOCK","Bloki");
define("_MI_NEWBB_ADMENU_ORDER","Kolejność");
define("_MI_NEWBB_ADMENU_SYNC","Synchronizacja");
define("_MI_NEWBB_ADMENU_PRUNE","Oczyszczanie");
define("_MI_NEWBB_ADMENU_REPORT","Raporty");
define("_MI_NEWBB_ADMENU_DIGEST","Przegląd");
define("_MI_NEWBB_ADMENU_VOTE","Głosowania");
define("_MI_NEWBB_ADMENU_TYPE", "Typy tematów");



//config options

define("_MI_DO_DEBUG","Tryb analizy błędów");
define("_MI_DO_DEBUG_DESC","Wyświetlaj kody błędów");

define("_MI_IMG_SET","Zestaw obrazków");
define("_MI_IMG_SET_DESC","Wybierz zestaw obrazków do zastosowania w serwisie");

define("_MI_THEMESET", "Skórka");
define("_MI_THEMESET_DESC", "Moduł wybierze szablon z katalogu skórki. Jeżeli nie chcesz go użyć - wybiez '"._NONE."' ");

define("_MI_DIR_ATTACHMENT","Ścieżka do katalogu z załącznikami forum.");
define("_MI_DIR_ATTACHMENT_DESC","Jeśli załączniki będą zapisywane w katalogu o adresie www.twojastrona.com/uploads/newbb to scieżka tutaj podana będzie miała postać '/uploads/newbb' nie dodawaj slasha '/' na końcu! ścieżka do miniaturek będzie miała postać '/uploads/newbb/thumbs'");
define("_MI_PATH_MAGICK","Ścieżka do programu ImageMagick");
define("_MI_PATH_MAGICK_DESC","Zwykle '/usr/bin/X11'. Nie wpisuj niczego jeśli nie masz zainstalowanego skryptu lub w celu autodetekcji.");

define("_MI_SUBFORUM_DISPLAY","Sposób wyświetlania pod-forum na stronie indeksu");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","Rozwinięte");
define("_MI_SUBFORUM_COLLAPSE","Lista");
define("_MI_SUBFORUM_HIDDEN","Ukryj w indeksie");

define("_MI_POST_EXCERPT","Zajawka posta na stronie głównej forum");
define("_MI_POST_EXCERPT_DESC","Ile znaków z treści postu wyświetlać po najechaniu myszą na tytuł posta, 0=opcja wyłączona.");

define("_MI_PATH_NETPBM","Ścieżka dla  Netpbm");
define("_MI_PATH_NETPBM_DESC","Zwykle '/usr/bin'. Pozostaw puste jeśli nie masz zainstalowanego na serwerze Netpbm lub w celu autodetekcji.");

define("_MI_IMAGELIB","Wybierz bibliotekę graficzną używaną w Forum");
define("_MI_IMAGELIB_DESC","Wybierz którą z bibliotek graficznych serwera używać do przetwarzania obrazów. Ustaw AUTO dla automatycznego wyboru.");

define("_MI_MAX_IMG_WIDTH","Maksymalna szerokość obrazka");
define("_MI_MAX_IMG_WIDTH_DESC", "Ustala maksymalną dozwoloną <strong>Szerokość</strong> , dla większych od tej wartości, zostanie stworzona miniatura. <br >0=wyłączone tworzenie miniaturek.");

define("_MI_MAX_IMAGE_WIDTH","Maksymalna szerokość obrazka dla którego nie będzie tworzona miniatura");
define("_MI_MAX_IMAGE_WIDTH_DESC", "Maksymalna szerokość obrazka. <br >Obrazek większy niż podana wartość nie będzie uzywał miniatury.");

define("_MI_MAX_IMAGE_HEIGHT","Maksymalna wysokość obrazka dla którego tworzona będzie miniatura.");
define("_MI_MAX_IMAGE_HEIGHT_DESC", "Maksymalna wysokość obrazka. <br >Większe obrazki nie będą miały tworzonej miniatury.");

define("_MI_SHOW_DIS","Pokazuj Objaśnienie / Disclaimer");
define("_MI_DISCLAIMER","Disclaimer");
define("_MI_DISCLAIMER_DESC","WprowadĄ treść Objasnienia widocznego nad wybraną pozycją.");
define("_MI_DISCLAIMER_TEXT", "Nasze forum zawiera wiele interesujących informacji. Być może rozwiązanie problemu o którym chcesz pisać zostało już podane. <br /><br />Aby nie tworzyć zdublowanych postów, prosimy dodawać wątki, dopiero po dokładnym sprawdzeniu czy nie powielają wpisanych już informacji.<br />Dziękujemy.");
define("_MI_NONE","Brak");
define("_MI_POST","Postuj");
define("_MI_REPLY","Odpisz");
define("_MI_OP_BOTH","Oba");
define("_MI_WOL_ENABLE","Włączyć blok Who's Online");
define("_MI_WOL_ENABLE_DESC","Wyświetla pod indeksem forum i na stronach poszczególnych forów blok z informacją, kto aktualnie przegląda forum. ");
//define("_MI_WOL_ADMIN_COL","Kolor Administratora");
//define("_MI_WOL_ADMIN_COL_DESC","Kolor wyróżniający Admina w bloku Who's Online");
//define("_MI_WOL_MOD_COL","Kolor Moderatora");
//define("_MI_WOL_MOD_COL_DESC","Kolor wyróżniający Moderatora w bloku Who's Online");
//define("_MI_LEVELS_ENABLE", "Enable HP/MP/EXP Levels Mod");
//define("_MI_LEVELS_ENABLE_DESC", "<strong>HP</strong>  is determined by your average posts per day.<br /><strong>MP</strong>  is determined by your join date related to your post count.<br /><strong>EXP</strong> goes up each time you post, and when you get to 100%, you gain a level and the EXP drops to 0 again.");
define("_MI_NULL", "wyłączone");
define("_MI_TEXT", "tekst");
define("_MI_GRAPHIC", "grafika");
define("_MI_USERLEVEL", "Opcja Poziomów HP/MP/EXP");
define("_MI_USERLEVEL_DESC", "WskaĄnik <strong>HP</strong>  powstaje w wyniku analizy ilości Twoich postów dziennie.<br />. WskaĄnik <strong>MP</strong>  powstaje w wyniku analizy ilości wszystkich postów do daty przyłaczenia się do forum.<br /><strong>EXP</strong> wzrasta z każdym napisanym postem, gdy przekroczy 100%, wchodzisz o jeden poziomwyrzej a EXP spada do zera.");
define("_MI_RSS_ENABLE","Włączyć kanały RSS ");
define("_MI_RSS_ENABLE_DESC","Ustawienia RSS.");
define("_MI_RSS_MAX_ITEMS", "RSS Maksymalna liczba pozycji.");
define("_MI_RSS_MAX_DESCRIPTION", "RSS Mksymalna długość opisu");
define("_MI_RSS_UTF8", "RSS Kodowanie UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION", "Używać kodowania 'UTF-8' lub '"._CHARSET."' jeśli zaznaczone Nie .");
define("_MI_RSS_CACHETIME", "RSS długość buforowania");
define("_MI_RSS_CACHETIME_DESCRIPTION", "Odstęp pomiędzy procesami generowania kanału RSS w minutach.");

define("_MI_MEDIA_ENABLE","Włącz opcje Mediów");
define("_MI_MEDIA_ENABLE_DESC","Wyświetla załączone obrazki bezposrednio w poście.");
define("_MI_USERBAR_ENABLE","Włącz Pasek Użytkownika");
define("_MI_USERBAR_ENABLE_DESC","Wyświetla rozszerzony Pasek użytkownika: Profil, PM, ICQ, MSN, etc...");

define("_MI_GROUPBAR_ENABLE","Włącz Pasek Grupy");
define("_MI_GROUPBAR_ENABLE_DESC","Wyświetla informacje o grupie użytkownika w polu informacji przy każdym poście.");

define("_MI_RATING_ENABLE","Włącz Ocenianie");
define("_MI_RATING_ENABLE_DESC","Pozwala na ocenę wątków.");

define("_MI_VIEWMODE","Sposób wyświetlania wątków");
define("_MI_VIEWMODE_DESC","Aby narzucić wszystkim sposób wyświetlania wątków wybierz sposób z listy. Lub ustaw na Brak/NONE żeby każdy mógł decydować sam.");
define("_MI_COMPACT","Kompaktowy");

define("_MI_MENUMODE","Domyślny typ menu");
define("_MI_MENUMODE_DESC","'SELECT' - opcja typu select, 'HOVER' - może spowalniać IE, 'CLICK' - wymaga JAVASCRIPT");

define("_MI_REPORTMOD_ENABLE","Raportowanie");
define("_MI_REPORTMOD_ENABLE_DESC","Użytkownik może raportować posty do Moderatorów, jeśli naruszają zasady forum");
define("_MI_SHOW_JUMPBOX", "Menu Szybkiej Zmiany");
define("_MI_JUMPBOXDESC", "Przy włączonym menu, można wybrać z listy rozwijanej forum lub temat do którego jest się natychmiast przeniesionym.");

define("_MI_SHOW_PERMISSIONTABLE", "Tabelka uprawnień");
define("_MI_SHOW_PERMISSIONTABLE_DESC", "Włączenie spowoduje wyświetlenie na dole strony listy uprawnień użytkownika w aktualnym forum.");

define("_MI_EMAIL_DIGEST", "Wysyłanie emailem Przeglądu postów");
define("_MI_EMAIL_DIGEST_DESC", "Ustaw przedział czasu dla Przeglądu ciekawych wątków wysyłanych do użytkowników");
define("_MI_NEWBB_EMAIL_NONE", "Nie wysyłaj");
define("_MI_NEWBB_EMAIL_DAILY", "Codziennie");
define("_MI_NEWBB_EMAIL_WEEKLY", "Co tydzień");

define("_MI_SHOW_IP", "Pokaż IP użytkowników");
define("_MI_SHOW_IP_DESC", "Aktywuje opcje wyświetlającą adres IP do wglądu Moderatorów");

define("_MI_ENABLE_KARMA", "Włącz wymagalność Karmy");
define("_MI_ENABLE_KARMA_DESC", "Pozwala autorowi postu na ograniczenie wglądu w treść do użytkowników z wymaganą wartością Karmy");

define("_MI_KARMA_OPTIONS", "Opcje Karmy dla postów");
define("_MI_KARMA_OPTIONS_DESC", "Użyj ',' w przypadku większej ilości pozycji.");

define("_MI_SINCE_OPTIONS", "Wartość 'Zakres' dla wyszukiwania i przeglądania.");
define("_MI_SINCE_OPTIONS_DESC", "Dodatnie wartości dla dni i ujemne dla godzin. Użyj ',' dla oddzielenia wielu wpisów.");

define("_MI_SINCE_DEFAULT", "Domyślna wartość dla parametru 'Zakres'");
define("_MI_SINCE_DEFAULT_DESC", "Pobierana gdy użytkownik nie ustali własnej. 0=od początku");

define("_MI_MODERATOR_HTML", "Zezwól na HTML tylko Moderatorom");
define("_MI_MODERATOR_HTML_DESC", "Tylko członkowie grupy 'Moderatorzy' mogą uzywać HTML w Tytułach");

define("_MI_USER_ANONYMOUS", "Zezwól zarejestrowanym użytkownikom na postowanie anonimowe");
define("_MI_USER_ANONYMOUS_DESC", "Zalogowany użytkownik może nie używać swojego nicka w postach");

define("_MI_ANONYMOUS_PRE", "Prefix dla użytkowników anonimowych");
define("_MI_ANONYMOUS_PRE_DESC", "Wstawia określony prefix dla uzytkowników piszących anonimowo.");

define("_MI_REQUIRE_REPLY", "Allow requiring reply to read a post");
define("_MI_REQUIRE_REPLY_DESC", "This feature forces readers to reply to the original posters post before being able to read the original");

define("_MI_EDIT_TIMELIMIT", "Limit czasu edycji");
define("_MI_EDIT_TIMELIMIT_DESC", "Podaj w minutach, jak długo użytkownik może edytować swojego posta, 0 = brak limitu.");

define("_MI_DELETE_TIMELIMIT", "Limit czasu usuwania");
define("_MI_DELETE_TIMELIMIT_DESC", "Podaj w minutach, jak długo uzytkownik może decydować o usunięciu swojego posta, 0=brak limitu");

define("_MI_POST_TIMELIMIT", "Limit czasu pomiędzy kolejnymi postami");
define("_MI_POST_TIMELIMIT_DESC", "Podaj w minutach odstęp pomiędzy kolejnymi postami, 0=brak limitu");

define("_MI_RECORDEDIT_TIMELIMIT", "Limit czasu edycji");
define("_MI_RECORDEDIT_TIMELIMIT_DESC", "Podaj w minutach czas przeznaczonych na edycję posta, 0=brak limitu");

define("_MI_SHOW_REALNAME", "Pokaż prawdziwe imię.");
define("_MI_SHOW_REALNAME_DESC", "Wyświetla prawdziwe imię zamiast nazwy uzytkownika (jeżeli jest wpisane). Może zabezpieczyć przed kradzieżą konta.");

define("_MI_CACHE_ENABLE", "Włącz Cache");
define("_MI_CACHE_ENABLE_DESC", "Gromadzi pewne informacje w pamięci podręcznej aby przyspieszyć ładowanie strony.");

define("_MI_QUICKREPLY_ENABLE", "Włącz Szybką OdpowiedĄ");
define("_MI_QUICKREPLY_ENABLE_DESC", "Wyświetla formularz szybkiej odpowiedzi, bez narzędzi formatujących.");

define("_MI_POSTSPERPAGE","Postów na stronie");
define("_MI_POSTSPERPAGE_DESC","Określ ile ma być wyświetlanych postów na jednej stronie forum");

define("_MI_POSTSFORTHREAD","Maksymalna ilość wątków dla trybu pełnego");
define("_MI_POSTSFORTHREAD_DESC","Kompaktowy tryb wyświetlania wątków będzie użyty automatycznie, gdy ilość postów przekroczy podaną tutaj wartość.");

define("_MI_TOPICSPERPAGE","Wątków na stronie");
define("_MI_TOPICSPERPAGE_DESC","Określ ilość wyświetlanych wątków na stronie forum.");

define("_MI_IMG_TYPE","Rodzaj Obrazków");
define("_MI_IMG_TYPE_DESC","Wybierz format przycisków obrazkowych na forum.<br />- png: dla szybkich serwerów;<br />- gif: dla normarnej predkości serwerów;<br />- auto: gif dla IE png dla pozostałych przeglądarek.");

define("_MI_PNGFORIE_ENABLE","Włącz poprawkę PNG");
define("_MI_PNGFORIE_ENABLE_DESC","Ustawia opcję przezroczystości plików PNG w Internet Explorerze.");

define("_MI_FORM_OPTIONS","Opcje formularza");
define("_MI_FORM_OPTIONS_DESC","Wybierz, których formularzy będzie można używać do pisania postów.");
define("_MI_FORM_COMPACT","Tryb kompaktowy");
define("_MI_FORM_DHTML","DHTML");
define("_MI_FORM_SPAW","Spaw Editor");
define("_MI_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_FORM_FCK","FCK Editor");
define("_MI_FORM_KOIVI","Koivi Editor");
define("_MI_FORM_TINYMCE","TinyMCE Editor");

define("_MI_MAGICK","ImageMagick");
define("_MI_NETPBM","Netpbm");
define("_MI_GD1","Biblioteka GD1");
define("_MI_GD2","Biblioteka GD2");
define("_MI_AUTO","AUTO");

define("_MI_WELCOMEFORUM","Powitanie nowego użytkownika na Forum.");
define("_MI_WELCOMEFORUM_DESC","Specjalna informacja powitalna pojawia się gdy użytkownik odwiedza forum po raz pierwszy.");

define("_MI_PERMCHECK_ONDISPLAY", "Sprawdź uprawnienia");
define("_MI_PERMCHECK_ONDISPLAY_DESC", "Check permission for edit on display page");

define("_MI_USERMODERATE", "Włącz moderację");
define("_MI_USERMODERATE_DESC", "Brak dodatkowego info");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define ('_MI_NEWBB_THREAD_NOTIFY', 'Wątek');
define ('_MI_NEWBB_THREAD_NOTIFYDSC', 'Opcje Powiadomienia dotyczące aktualnego wątku.');

define ('_MI_NEWBB_FORUM_NOTIFY', 'Forum');
define ('_MI_NEWBB_FORUM_NOTIFYDSC', 'Opcje Powiadomienia dotyczące aktualnego forum.');

define ('_MI_NEWBB_GLOBAL_NOTIFY', 'Ogólne');
define ('_MI_NEWBB_GLOBAL_NOTIFYDSC', 'Ogólne opcje powiadamiania.');

define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', 'Nowy post');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', 'Powiadom mnie, gdy w tym wątku pojawi się nowy post.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', 'Otrzymujesz powiadomienia, gdy w aktualnym wątku pojawi się nowy post.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post w wątku forum');

define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', 'Nowy wątek.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', 'Powiadom mnie, gdy w tym forum pojawi się nowy wątek.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', 'Otrzymujesz powiadomienia, gdy w aktualnym forum pojawi się nowy wątek.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadamianie : Nowy wątek na forum');

define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', 'Nowe Forum');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', 'Powiadom mnie, gdy w tej kategorii pojawi się nowe forum.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', 'Otrzymujesz powiadomienie, gdy w tej kategorii pojawi się nowe forum.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadamianie : Nowe forum');

define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', 'Nowy Post');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', 'Powiadom mnie o każdym nowym poście.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', 'Otrzymujesz powiadomienie gdy gdziekolwiek na forum pojawi się nowy post.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post');

define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', 'Nowy Post');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', 'Powiado mnie o każdym poście na tym forum.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', 'Otrzymujesz powiadomienie o każdym poście na tym forum.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post na forum');

define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', 'Nowy Post (Pełny Text)');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', 'Powiadom o każdym nowym poście (w treści listu zawarty będzie tekst posta).');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', 'Otrzymujesz powiadomienie z załaczeniem pełnej treści posta, o nowym poście na forum.');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post (pełny text)');

define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY', 'Przegląd');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP', 'Powiadom mnie o publikacji przeglądu.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC', 'Otrzymujesz powiadomienie o Przeglądzie.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : publikacja przeglądu');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE", "Kategoria testowa");
define("_MI_NEWBB_INSTALL_CAT_DESC", "Kategoria utworzona dla przetestowania.");
define("_MI_NEWBB_INSTALL_FORUM_NAME", "Forum testowe");
define("_MI_NEWBB_INSTALL_FORUM_DESC", "Forum utworzone dla przetestowania.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT", "Gratulacje! Forum działa poprawnie.");
define("_MI_NEWBB_INSTALL_POST_TEXT", "
	Witamy na forum ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." .
	Rejestruj się i pisz nowe tematy!

	Jeżeli masz jakieś pytania dotyczące skryptu - odwiedź [url=http://xoopsforge.com/modules/newbb/]naszą stronę[/url].
	");
?>