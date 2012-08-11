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
define("_MI_NEWBB_BLOCK_TOPIC","Ostatnie w±tki");
define("_MI_NEWBB_BLOCK_POST","Ostatnie posty");
define("_MI_NEWBB_BLOCK_AUTHOR","Autorzy");
define("_MI_NEWBB_BLOCK_TAG_CLOUD","Tag Cloud");
define("_MI_NEWBB_BLOCK_TAG_TOP","Top Tags");
/*
define("_MI_NEWBB_BNAME2","Najczêsciej ogl±dane w±tki");
define("_MI_NEWBB_BNAME³","Najczêsciej komentowane w±tki");
define("_MI_NEWBB_BNAME4","Najnowsze Przegl±dy");
define("_MI_NEWBB_BNAME5","Najnowsze tematy przyklejone");
define("_MI_NEWBB_BNAME6","Najnowsze posty");
define("_MI_NEWBB_BNAME7","Autorzy nowych w±tków");
define("_MI_NEWBB_BNAME8","Najczê¶ciej pisz±cy posty");
define("_MI_NEWBB_BNAME9","Najczê¶ciej wystêpuj±cy w Przegl±dach");
define("_MI_NEWBB_BNAME10","Najczê¶ciej tworz± tematy przyklejane");
define("_MI_NEWBB_BNAME11","Ostatnie posty z tekstem");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","Indeks");
define("_MI_NEWBB_ADMENU_CATEGORY","Kategorie");
define("_MI_NEWBB_ADMENU_FORUM","Fora");
define("_MI_NEWBB_ADMENU_PERMISSION","Uprawnienia");
define("_MI_NEWBB_ADMENU_BLOCK","Bloki");
define("_MI_NEWBB_ADMENU_ORDER","Kolejno¶æ");
define("_MI_NEWBB_ADMENU_SYNC","Synchronizacja");
define("_MI_NEWBB_ADMENU_PRUNE","Oczyszczanie");
define("_MI_NEWBB_ADMENU_REPORT","Raporty");
define("_MI_NEWBB_ADMENU_DIGEST","Przegl±d");
define("_MI_NEWBB_ADMENU_VOTE","G³osowania");
define("_MI_NEWBB_ADMENU_TYPE","Typy tematów");



//config options

define("_MI_DO_DEBUG","Tryb analizy b³êdów");
define("_MI_DO_DEBUG_DESC","Wy¶wietlaj kody b³êdów");

define("_MI_IMG_SET","Zestaw obrazków");
define("_MI_IMG_SET_DESC","Wybierz zestaw obrazków do zastosowania w serwisie");

define("_MI_THEMESET","Skórka");
define("_MI_THEMESET_DESC","Modu³ wybierze szablon z katalogu skórki. Je¿eli nie chcesz go u¿yæ - wybiez '"._NONE."' ");

define("_MI_DIR_ATTACHMENT","¦cie¿ka do katalogu z za³±cznikami forum.");
define("_MI_DIR_ATTACHMENT_DESC","Je¶li za³±czniki bêd± zapisywane w katalogu o adresie www.twojastrona.com/uploads/newbb to scie¿ka tutaj podana bêdzie mia³a postaæ '/uploads/newbb' nie dodawaj slasha '/' na koñcu! ¶cie¿ka do miniaturek bêdzie mia³a postaæ '/uploads/newbb/thumbs'");
define("_MI_PATH_MAGICK","¦cie¿ka do programu ImageMagick");
define("_MI_PATH_MAGICK_DESC","Zwykle '/usr/bin/X11'. Nie wpisuj niczego je¶li nie masz zainstalowanego skryptu lub w celu autodetekcji.");

define("_MI_SUBFORUM_DISPLAY","Sposób wy¶wietlania pod-forum na stronie indeksu");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","Rozwiniête");
define("_MI_SUBFORUM_COLLAPSE","Lista");
define("_MI_SUBFORUM_HIDDEN","Ukryj w indeksie");

define("_MI_POST_EXCERPT","Zajawka posta na stronie g³ównej forum");
define("_MI_POST_EXCERPT_DESC","Ile znaków z tre¶ci postu wy¶wietlaæ po najechaniu mysz± na tytu³ posta, 0=opcja wy³±czona.");

define("_MI_PATH_NETPBM","¦cie¿ka dla  Netpbm");
define("_MI_PATH_NETPBM_DESC","Zwykle '/usr/bin'. Pozostaw puste je¶li nie masz zainstalowanego na serwerze Netpbm lub w celu autodetekcji.");

define("_MI_IMAGELIB","Wybierz bibliotekê graficzn± u¿ywan± w Forum");
define("_MI_IMAGELIB_DESC","Wybierz któr± z bibliotek graficznych serwera u¿ywaæ do przetwarzania obrazów. Ustaw AUTO dla automatycznego wyboru.");

define("_MI_MAX_IMG_WIDTH","Maksymalna szeroko¶æ obrazka");
define("_MI_MAX_IMG_WIDTH_DESC","Ustala maksymaln± dozwolon± <strong>Szeroko¶æ</strong> , dla wiêkszych od tej warto¶ci, zostanie stworzona miniatura. <br >0=wy³±czone tworzenie miniaturek.");

define("_MI_MAX_IMAGE_WIDTH","Maksymalna szeroko¶æ obrazka dla którego nie bêdzie tworzona miniatura");
define("_MI_MAX_IMAGE_WIDTH_DESC","Maksymalna szeroko¶æ obrazka. <br >Obrazek wiêkszy ni¿ podana warto¶æ nie bêdzie uzywa³ miniatury.");

define("_MI_MAX_IMAGE_HEIGHT","Maksymalna wysoko¶æ obrazka dla którego tworzona bêdzie miniatura.");
define("_MI_MAX_IMAGE_HEIGHT_DESC","Maksymalna wysoko¶æ obrazka. <br >Wiêksze obrazki nie bêd± mia³y tworzonej miniatury.");

define("_MI_SHOW_DIS","Pokazuj Obja¶nienie / Disclaimer");
define("_MI_DISCLAIMER","Disclaimer");
define("_MI_DISCLAIMER_DESC","Wprowad¡ tre¶æ Objasnienia widocznego nad wybran± pozycj±.");
define("_MI_DISCLAIMER_TEXT","Nasze forum zawiera wiele interesuj±cych informacji. Byæ mo¿e rozwi±zanie problemu o którym chcesz pisaæ zosta³o ju¿ podane. <br /><br />Aby nie tworzyæ zdublowanych postów, prosimy dodawaæ w±tki, dopiero po dok³adnym sprawdzeniu czy nie powielaj± wpisanych ju¿ informacji.<br />Dziêkujemy.");
define("_MI_NONE","Brak");
define("_MI_POST","Postuj");
define("_MI_REPLY","Odpisz");
define("_MI_OP_BOTH","Oba");
define("_MI_WOL_ENABLE","W³±czyæ blok Who's Online");
define("_MI_WOL_ENABLE_DESC","Wy¶wietla pod indeksem forum i na stronach poszczególnych forów blok z informacj±, kto aktualnie przegl±da forum. ");
//define("_MI_WOL_ADMIN_COL","Kolor Administratora");
//define("_MI_WOL_ADMIN_COL_DESC","Kolor wyró¿niaj±cy Admina w bloku Who's Online");
//define("_MI_WOL_MOD_COL","Kolor Moderatora");
//define("_MI_WOL_MOD_COL_DESC","Kolor wyró¿niaj±cy Moderatora w bloku Who's Online");
//define("_MI_LEVELS_ENABLE","Enable HP/MP/EXP Levels Mod");
//define("_MI_LEVELS_ENABLE_DESC","<strong>HP</strong>  is determined by your average posts per day.<br /><strong>MP</strong>  is determined by your join date related to your post count.<br /><strong>EXP</strong> goes up each time you post, and when you get to 100%, you gain a level and the EXP drops to 0 again.");
define("_MI_NULL","wy³±czone");
define("_MI_TEXT","tekst");
define("_MI_GRAPHIC","grafika");
define("_MI_USERLEVEL","Opcja Poziomów HP/MP/EXP");
define("_MI_USERLEVEL_DESC","Wska¡nik <strong>HP</strong>  powstaje w wyniku analizy ilo¶ci Twoich postów dziennie.<br />. Wska¡nik <strong>MP</strong>  powstaje w wyniku analizy ilo¶ci wszystkich postów do daty przy³aczenia siê do forum.<br /><strong>EXP</strong> wzrasta z ka¿dym napisanym postem, gdy przekroczy 100%, wchodzisz o jeden poziomwyrzej a EXP spada do zera.");
define("_MI_RSS_ENABLE","W³±czyæ kana³y RSS ");
define("_MI_RSS_ENABLE_DESC","Ustawienia RSS.");
define("_MI_RSS_MAX_ITEMS","RSS Maksymalna liczba pozycji.");
define("_MI_RSS_MAX_DESCRIPTION","RSS Mksymalna d³ugo¶æ opisu");
define("_MI_RSS_UTF8","RSS Kodowanie UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION","U¿ywaæ kodowania 'UTF-8' lub '"._CHARSET."' je¶li zaznaczone Nie .");
define("_MI_RSS_CACHETIME","RSS d³ugo¶æ buforowania");
define("_MI_RSS_CACHETIME_DESCRIPTION","Odstêp pomiêdzy procesami generowania kana³u RSS w minutach.");

define("_MI_MEDIA_ENABLE","W³±cz opcje Mediów");
define("_MI_MEDIA_ENABLE_DESC","Wy¶wietla za³±czone obrazki bezposrednio w po¶cie.");
define("_MI_USERBAR_ENABLE","W³±cz Pasek U¿ytkownika");
define("_MI_USERBAR_ENABLE_DESC","Wy¶wietla rozszerzony Pasek u¿ytkownika: Profil, PM, ICQ, MSN, etc...");

define("_MI_GROUPBAR_ENABLE","W³±cz Pasek Grupy");
define("_MI_GROUPBAR_ENABLE_DESC","Wy¶wietla informacje o grupie u¿ytkownika w polu informacji przy ka¿dym po¶cie.");

define("_MI_RATING_ENABLE","W³±cz Ocenianie");
define("_MI_RATING_ENABLE_DESC","Pozwala na ocenê w±tków.");

define("_MI_VIEWMODE","Sposób wy¶wietlania w±tków");
define("_MI_VIEWMODE_DESC","Aby narzuciæ wszystkim sposób wy¶wietlania w±tków wybierz sposób z listy. Lub ustaw na Brak/NONE ¿eby ka¿dy móg³ decydowaæ sam.");
define("_MI_COMPACT","Kompaktowy");

define("_MI_MENUMODE","Domy¶lny typ menu");
define("_MI_MENUMODE_DESC","'SELECT' - opcja typu select, 'HOVER' - mo¿e spowalniaæ IE, 'CLICK' - wymaga JAVASCRIPT");

define("_MI_REPORTMOD_ENABLE","Raportowanie");
define("_MI_REPORTMOD_ENABLE_DESC","U¿ytkownik mo¿e raportowaæ posty do Moderatorów, je¶li naruszaj± zasady forum");
define("_MI_SHOW_JUMPBOX","Menu Szybkiej Zmiany");
define("_MI_JUMPBOXDESC","Przy w³±czonym menu, mo¿na wybraæ z listy rozwijanej forum lub temat do którego jest siê natychmiast przeniesionym.");

define("_MI_SHOW_PERMISSIONTABLE","Tabelka uprawnieñ");
define("_MI_SHOW_PERMISSIONTABLE_DESC","W³±czenie spowoduje wy¶wietlenie na dole strony listy uprawnieñ u¿ytkownika w aktualnym forum.");

define("_MI_EMAIL_DIGEST","Wysy³anie emailem Przegl±du postów");
define("_MI_EMAIL_DIGEST_DESC","Ustaw przedzia³ czasu dla Przegl±du ciekawych w±tków wysy³anych do u¿ytkowników");
define("_MI_NEWBB_EMAIL_NONE","Nie wysy³aj");
define("_MI_NEWBB_EMAIL_DAILY","Codziennie");
define("_MI_NEWBB_EMAIL_WEEKLY","Co tydzieñ");

define("_MI_SHOW_IP","Poka¿ IP u¿ytkowników");
define("_MI_SHOW_IP_DESC","Aktywuje opcje wy¶wietlaj±c± adres IP do wgl±du Moderatorów");

define("_MI_ENABLE_KARMA","W³±cz wymagalno¶æ Karmy");
define("_MI_ENABLE_KARMA_DESC","Pozwala autorowi postu na ograniczenie wgl±du w tre¶æ do u¿ytkowników z wymagan± warto¶ci± Karmy");

define("_MI_KARMA_OPTIONS","Opcje Karmy dla postów");
define("_MI_KARMA_OPTIONS_DESC","U¿yj ',' w przypadku wiêkszej ilo¶ci pozycji.");

define("_MI_SINCE_OPTIONS","Warto¶æ 'Zakres' dla wyszukiwania i przegl±dania.");
define("_MI_SINCE_OPTIONS_DESC","Dodatnie warto¶ci dla dni i ujemne dla godzin. U¿yj ',' dla oddzielenia wielu wpisów.");

define("_MI_SINCE_DEFAULT","Domy¶lna warto¶æ dla parametru 'Zakres'");
define("_MI_SINCE_DEFAULT_DESC","Pobierana gdy u¿ytkownik nie ustali w³asnej. 0=od pocz±tku");

define("_MI_MODERATOR_HTML","Zezwól na HTML tylko Moderatorom");
define("_MI_MODERATOR_HTML_DESC","Tylko cz³onkowie grupy 'Moderatorzy' mog± uzywaæ HTML w Tytu³ach");

define("_MI_USER_ANONYMOUS","Zezwól zarejestrowanym u¿ytkownikom na postowanie anonimowe");
define("_MI_USER_ANONYMOUS_DESC","Zalogowany u¿ytkownik mo¿e nie u¿ywaæ swojego nicka w postach");

define("_MI_ANONYMOUS_PRE","Prefix dla u¿ytkowników anonimowych");
define("_MI_ANONYMOUS_PRE_DESC","Wstawia okre¶lony prefix dla uzytkowników pisz±cych anonimowo.");

define("_MI_REQUIRE_REPLY","Allow requiring reply to read a post");
define("_MI_REQUIRE_REPLY_DESC","This feature forces readers to reply to the original posters post before being able to read the original");

define("_MI_EDIT_TIMELIMIT","Limit czasu edycji");
define("_MI_EDIT_TIMELIMIT_DESC","Podaj w minutach, jak d³ugo u¿ytkownik mo¿e edytowaæ swojego posta, 0 = brak limitu.");

define("_MI_DELETE_TIMELIMIT","Limit czasu usuwania");
define("_MI_DELETE_TIMELIMIT_DESC","Podaj w minutach, jak d³ugo uzytkownik mo¿e decydowaæ o usuniêciu swojego posta, 0=brak limitu");

define("_MI_POST_TIMELIMIT","Limit czasu pomiêdzy kolejnymi postami");
define("_MI_POST_TIMELIMIT_DESC","Podaj w minutach odstêp pomiêdzy kolejnymi postami, 0=brak limitu");

define("_MI_RECORDEDIT_TIMELIMIT","Limit czasu edycji");
define("_MI_RECORDEDIT_TIMELIMIT_DESC","Podaj w minutach czas przeznaczonych na edycjê posta, 0=brak limitu");

define("_MI_SHOW_REALNAME","Poka¿ prawdziwe imiê.");
define("_MI_SHOW_REALNAME_DESC","Wy¶wietla prawdziwe imiê zamiast nazwy uzytkownika (je¿eli jest wpisane). Mo¿e zabezpieczyæ przed kradzie¿± konta.");

define("_MI_CACHE_ENABLE","W³±cz Cache");
define("_MI_CACHE_ENABLE_DESC","Gromadzi pewne informacje w pamiêci podrêcznej aby przyspieszyæ ³adowanie strony.");

define("_MI_QUICKREPLY_ENABLE","W³±cz Szybk± Odpowied¡");
define("_MI_QUICKREPLY_ENABLE_DESC","Wy¶wietla formularz szybkiej odpowiedzi, bez narzêdzi formatuj±cych.");

define("_MI_POSTSPERPAGE","Postów na stronie");
define("_MI_POSTSPERPAGE_DESC","Okre¶l ile ma byæ wy¶wietlanych postów na jednej stronie forum");

define("_MI_POSTSFORTHREAD","Maksymalna ilo¶æ w±tków dla trybu pe³nego");
define("_MI_POSTSFORTHREAD_DESC","Kompaktowy tryb wy¶wietlania w±tków bêdzie u¿yty automatycznie, gdy ilo¶æ postów przekroczy podan± tutaj warto¶æ.");

define("_MI_TOPICSPERPAGE","W±tków na stronie");
define("_MI_TOPICSPERPAGE_DESC","Okre¶l ilo¶æ wy¶wietlanych w±tków na stronie forum.");

define("_MI_IMG_TYPE","Rodzaj Obrazków");
define("_MI_IMG_TYPE_DESC","Wybierz format przycisków obrazkowych na forum.<br />- png: dla szybkich serwerów;<br />- gif: dla normarnej predko¶ci serwerów;<br />- auto: gif dla IE png dla pozosta³ych przegl±darek.");

define("_MI_PNGFORIE_ENABLE","W³±cz poprawkê PNG");
define("_MI_PNGFORIE_ENABLE_DESC","Ustawia opcjê przezroczysto¶ci plików PNG w Internet Explorerze.");

define("_MI_FORM_OPTIONS","Opcje formularza");
define("_MI_FORM_OPTIONS_DESC","Wybierz, których formularzy bêdzie mo¿na u¿ywaæ do pisania postów.");
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

define("_MI_WELCOMEFORUM","Powitanie nowego u¿ytkownika na Forum.");
define("_MI_WELCOMEFORUM_DESC","Specjalna informacja powitalna pojawia siê gdy u¿ytkownik odwiedza forum po raz pierwszy.");

define("_MI_PERMCHECK_ONDISPLAY","Sprawd¼ uprawnienia");
define("_MI_PERMCHECK_ONDISPLAY_DESC","Check permission for edit on display page");

define("_MI_USERMODERATE","W³±cz moderacjê");
define("_MI_USERMODERATE_DESC","Brak dodatkowego info");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','W±tek');
define('_MI_NEWBB_THREAD_NOTIFYDSC','Opcje Powiadomienia dotycz±ce aktualnego w±tku.');

define('_MI_NEWBB_FORUM_NOTIFY','Forum');
define('_MI_NEWBB_FORUM_NOTIFYDSC','Opcje Powiadomienia dotycz±ce aktualnego forum.');

define('_MI_NEWBB_GLOBAL_NOTIFY','Ogólne');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','Ogólne opcje powiadamiania.');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','Nowy post');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','Powiadom mnie, gdy w tym w±tku pojawi siê nowy post.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','Otrzymujesz powiadomienia, gdy w aktualnym w±tku pojawi siê nowy post.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post w w±tku forum');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','Nowy w±tek.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','Powiadom mnie, gdy w tym forum pojawi siê nowy w±tek.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','Otrzymujesz powiadomienia, gdy w aktualnym forum pojawi siê nowy w±tek.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadamianie : Nowy w±tek na forum');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','Nowe Forum');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','Powiadom mnie, gdy w tej kategorii pojawi siê nowe forum.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','Otrzymujesz powiadomienie, gdy w tej kategorii pojawi siê nowe forum.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadamianie : Nowe forum');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','Nowy Post');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','Powiadom mnie o ka¿dym nowym po¶cie.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','Otrzymujesz powiadomienie gdy gdziekolwiek na forum pojawi siê nowy post.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','Nowy Post');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','Powiado mnie o ka¿dym po¶cie na tym forum.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','Otrzymujesz powiadomienie o ka¿dym po¶cie na tym forum.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post na forum');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','Nowy Post (Pe³ny Text)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','Powiadom o ka¿dym nowym po¶cie (w tre¶ci listu zawarty bêdzie tekst posta).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','Otrzymujesz powiadomienie z za³aczeniem pe³nej tre¶ci posta, o nowym po¶cie na forum.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post (pe³ny text)');

define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY','Przegl±d');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP','Powiadom mnie o publikacji przegl±du.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC','Otrzymujesz powiadomienie o Przegl±dzie.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : publikacja przegl±du');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE","Kategoria testowa");
define("_MI_NEWBB_INSTALL_CAT_DESC","Kategoria utworzona dla przetestowania.");
define("_MI_NEWBB_INSTALL_FORUM_NAME","Forum testowe");
define("_MI_NEWBB_INSTALL_FORUM_DESC","Forum utworzone dla przetestowania.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT","Gratulacje! Forum dzia³a poprawnie.");
define("_MI_NEWBB_INSTALL_POST_TEXT","
	Witamy na forum ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." .
	Rejestruj siê i pisz nowe tematy!

	Je¿eli masz jakie¶ pytania dotycz±ce skryptu - odwied¼ [url=http://xoopsforge.com/modules/newbb/]nasz± stronê[/url].
	");
?>