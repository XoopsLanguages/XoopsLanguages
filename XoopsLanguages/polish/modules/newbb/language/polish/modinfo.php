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
define("_MI_NEWBB_BLOCK_TOPIC","Ostatnie w�tki");
define("_MI_NEWBB_BLOCK_POST","Ostatnie posty");
define("_MI_NEWBB_BLOCK_AUTHOR","Autorzy");
define("_MI_NEWBB_BLOCK_TAG_CLOUD", "Tag Cloud");
define("_MI_NEWBB_BLOCK_TAG_TOP", "Top Tags");
/*
define("_MI_NEWBB_BNAME2","Najcz�sciej ogl�dane w�tki");
define("_MI_NEWBB_BNAME�","Najcz�sciej komentowane w�tki");
define("_MI_NEWBB_BNAME4","Najnowsze Przegl�dy");
define("_MI_NEWBB_BNAME5","Najnowsze tematy przyklejone");
define("_MI_NEWBB_BNAME6","Najnowsze posty");
define("_MI_NEWBB_BNAME7","Autorzy nowych w�tk�w");
define("_MI_NEWBB_BNAME8","Najcz�ciej pisz�cy posty");
define("_MI_NEWBB_BNAME9","Najcz�ciej wyst�puj�cy w Przegl�dach");
define("_MI_NEWBB_BNAME10","Najcz�ciej tworz� tematy przyklejane");
define("_MI_NEWBB_BNAME11","Ostatnie posty z tekstem");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","Indeks");
define("_MI_NEWBB_ADMENU_CATEGORY","Kategorie");
define("_MI_NEWBB_ADMENU_FORUM","Fora");
define("_MI_NEWBB_ADMENU_PERMISSION","Uprawnienia");
define("_MI_NEWBB_ADMENU_BLOCK","Bloki");
define("_MI_NEWBB_ADMENU_ORDER","Kolejno��");
define("_MI_NEWBB_ADMENU_SYNC","Synchronizacja");
define("_MI_NEWBB_ADMENU_PRUNE","Oczyszczanie");
define("_MI_NEWBB_ADMENU_REPORT","Raporty");
define("_MI_NEWBB_ADMENU_DIGEST","Przegl�d");
define("_MI_NEWBB_ADMENU_VOTE","G�osowania");
define("_MI_NEWBB_ADMENU_TYPE", "Typy temat�w");



//config options

define("_MI_DO_DEBUG","Tryb analizy b��d�w");
define("_MI_DO_DEBUG_DESC","Wy�wietlaj kody b��d�w");

define("_MI_IMG_SET","Zestaw obrazk�w");
define("_MI_IMG_SET_DESC","Wybierz zestaw obrazk�w do zastosowania w serwisie");

define("_MI_THEMESET", "Sk�rka");
define("_MI_THEMESET_DESC", "Modu� wybierze szablon z katalogu sk�rki. Je�eli nie chcesz go u�y� - wybiez '"._NONE."' ");

define("_MI_DIR_ATTACHMENT","�cie�ka do katalogu z za��cznikami forum.");
define("_MI_DIR_ATTACHMENT_DESC","Je�li za��czniki b�d� zapisywane w katalogu o adresie www.twojastrona.com/uploads/newbb to scie�ka tutaj podana b�dzie mia�a posta� '/uploads/newbb' nie dodawaj slasha '/' na ko�cu! �cie�ka do miniaturek b�dzie mia�a posta� '/uploads/newbb/thumbs'");
define("_MI_PATH_MAGICK","�cie�ka do programu ImageMagick");
define("_MI_PATH_MAGICK_DESC","Zwykle '/usr/bin/X11'. Nie wpisuj niczego je�li nie masz zainstalowanego skryptu lub w celu autodetekcji.");

define("_MI_SUBFORUM_DISPLAY","Spos�b wy�wietlania pod-forum na stronie indeksu");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","Rozwini�te");
define("_MI_SUBFORUM_COLLAPSE","Lista");
define("_MI_SUBFORUM_HIDDEN","Ukryj w indeksie");

define("_MI_POST_EXCERPT","Zajawka posta na stronie g��wnej forum");
define("_MI_POST_EXCERPT_DESC","Ile znak�w z tre�ci postu wy�wietla� po najechaniu mysz� na tytu� posta, 0=opcja wy��czona.");

define("_MI_PATH_NETPBM","�cie�ka dla  Netpbm");
define("_MI_PATH_NETPBM_DESC","Zwykle '/usr/bin'. Pozostaw puste je�li nie masz zainstalowanego na serwerze Netpbm lub w celu autodetekcji.");

define("_MI_IMAGELIB","Wybierz bibliotek� graficzn� u�ywan� w Forum");
define("_MI_IMAGELIB_DESC","Wybierz kt�r� z bibliotek graficznych serwera u�ywa� do przetwarzania obraz�w. Ustaw AUTO dla automatycznego wyboru.");

define("_MI_MAX_IMG_WIDTH","Maksymalna szeroko�� obrazka");
define("_MI_MAX_IMG_WIDTH_DESC", "Ustala maksymaln� dozwolon� <strong>Szeroko��</strong> , dla wi�kszych od tej warto�ci, zostanie stworzona miniatura. <br >0=wy��czone tworzenie miniaturek.");

define("_MI_MAX_IMAGE_WIDTH","Maksymalna szeroko�� obrazka dla kt�rego nie b�dzie tworzona miniatura");
define("_MI_MAX_IMAGE_WIDTH_DESC", "Maksymalna szeroko�� obrazka. <br >Obrazek wi�kszy ni� podana warto�� nie b�dzie uzywa� miniatury.");

define("_MI_MAX_IMAGE_HEIGHT","Maksymalna wysoko�� obrazka dla kt�rego tworzona b�dzie miniatura.");
define("_MI_MAX_IMAGE_HEIGHT_DESC", "Maksymalna wysoko�� obrazka. <br >Wi�ksze obrazki nie b�d� mia�y tworzonej miniatury.");

define("_MI_SHOW_DIS","Pokazuj Obja�nienie / Disclaimer");
define("_MI_DISCLAIMER","Disclaimer");
define("_MI_DISCLAIMER_DESC","Wprowad� tre�� Objasnienia widocznego nad wybran� pozycj�.");
define("_MI_DISCLAIMER_TEXT", "Nasze forum zawiera wiele interesuj�cych informacji. By� mo�e rozwi�zanie problemu o kt�rym chcesz pisa� zosta�o ju� podane. <br /><br />Aby nie tworzy� zdublowanych post�w, prosimy dodawa� w�tki, dopiero po dok�adnym sprawdzeniu czy nie powielaj� wpisanych ju� informacji.<br />Dzi�kujemy.");
define("_MI_NONE","Brak");
define("_MI_POST","Postuj");
define("_MI_REPLY","Odpisz");
define("_MI_OP_BOTH","Oba");
define("_MI_WOL_ENABLE","W��czy� blok Who's Online");
define("_MI_WOL_ENABLE_DESC","Wy�wietla pod indeksem forum i na stronach poszczeg�lnych for�w blok z informacj�, kto aktualnie przegl�da forum. ");
//define("_MI_WOL_ADMIN_COL","Kolor Administratora");
//define("_MI_WOL_ADMIN_COL_DESC","Kolor wyr�niaj�cy Admina w bloku Who's Online");
//define("_MI_WOL_MOD_COL","Kolor Moderatora");
//define("_MI_WOL_MOD_COL_DESC","Kolor wyr�niaj�cy Moderatora w bloku Who's Online");
//define("_MI_LEVELS_ENABLE", "Enable HP/MP/EXP Levels Mod");
//define("_MI_LEVELS_ENABLE_DESC", "<strong>HP</strong>  is determined by your average posts per day.<br /><strong>MP</strong>  is determined by your join date related to your post count.<br /><strong>EXP</strong> goes up each time you post, and when you get to 100%, you gain a level and the EXP drops to 0 again.");
define("_MI_NULL", "wy��czone");
define("_MI_TEXT", "tekst");
define("_MI_GRAPHIC", "grafika");
define("_MI_USERLEVEL", "Opcja Poziom�w HP/MP/EXP");
define("_MI_USERLEVEL_DESC", "Wska�nik <strong>HP</strong>  powstaje w wyniku analizy ilo�ci Twoich post�w dziennie.<br />. Wska�nik <strong>MP</strong>  powstaje w wyniku analizy ilo�ci wszystkich post�w do daty przy�aczenia si� do forum.<br /><strong>EXP</strong> wzrasta z ka�dym napisanym postem, gdy przekroczy 100%, wchodzisz o jeden poziomwyrzej a EXP spada do zera.");
define("_MI_RSS_ENABLE","W��czy� kana�y RSS ");
define("_MI_RSS_ENABLE_DESC","Ustawienia RSS.");
define("_MI_RSS_MAX_ITEMS", "RSS Maksymalna liczba pozycji.");
define("_MI_RSS_MAX_DESCRIPTION", "RSS Mksymalna d�ugo�� opisu");
define("_MI_RSS_UTF8", "RSS Kodowanie UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION", "U�ywa� kodowania 'UTF-8' lub '"._CHARSET."' je�li zaznaczone Nie .");
define("_MI_RSS_CACHETIME", "RSS d�ugo�� buforowania");
define("_MI_RSS_CACHETIME_DESCRIPTION", "Odst�p pomi�dzy procesami generowania kana�u RSS w minutach.");

define("_MI_MEDIA_ENABLE","W��cz opcje Medi�w");
define("_MI_MEDIA_ENABLE_DESC","Wy�wietla za��czone obrazki bezposrednio w po�cie.");
define("_MI_USERBAR_ENABLE","W��cz Pasek U�ytkownika");
define("_MI_USERBAR_ENABLE_DESC","Wy�wietla rozszerzony Pasek u�ytkownika: Profil, PM, ICQ, MSN, etc...");

define("_MI_GROUPBAR_ENABLE","W��cz Pasek Grupy");
define("_MI_GROUPBAR_ENABLE_DESC","Wy�wietla informacje o grupie u�ytkownika w polu informacji przy ka�dym po�cie.");

define("_MI_RATING_ENABLE","W��cz Ocenianie");
define("_MI_RATING_ENABLE_DESC","Pozwala na ocen� w�tk�w.");

define("_MI_VIEWMODE","Spos�b wy�wietlania w�tk�w");
define("_MI_VIEWMODE_DESC","Aby narzuci� wszystkim spos�b wy�wietlania w�tk�w wybierz spos�b z listy. Lub ustaw na Brak/NONE �eby ka�dy m�g� decydowa� sam.");
define("_MI_COMPACT","Kompaktowy");

define("_MI_MENUMODE","Domy�lny typ menu");
define("_MI_MENUMODE_DESC","'SELECT' - opcja typu select, 'HOVER' - mo�e spowalnia� IE, 'CLICK' - wymaga JAVASCRIPT");

define("_MI_REPORTMOD_ENABLE","Raportowanie");
define("_MI_REPORTMOD_ENABLE_DESC","U�ytkownik mo�e raportowa� posty do Moderator�w, je�li naruszaj� zasady forum");
define("_MI_SHOW_JUMPBOX", "Menu Szybkiej Zmiany");
define("_MI_JUMPBOXDESC", "Przy w��czonym menu, mo�na wybra� z listy rozwijanej forum lub temat do kt�rego jest si� natychmiast przeniesionym.");

define("_MI_SHOW_PERMISSIONTABLE", "Tabelka uprawnie�");
define("_MI_SHOW_PERMISSIONTABLE_DESC", "W��czenie spowoduje wy�wietlenie na dole strony listy uprawnie� u�ytkownika w aktualnym forum.");

define("_MI_EMAIL_DIGEST", "Wysy�anie emailem Przegl�du post�w");
define("_MI_EMAIL_DIGEST_DESC", "Ustaw przedzia� czasu dla Przegl�du ciekawych w�tk�w wysy�anych do u�ytkownik�w");
define("_MI_NEWBB_EMAIL_NONE", "Nie wysy�aj");
define("_MI_NEWBB_EMAIL_DAILY", "Codziennie");
define("_MI_NEWBB_EMAIL_WEEKLY", "Co tydzie�");

define("_MI_SHOW_IP", "Poka� IP u�ytkownik�w");
define("_MI_SHOW_IP_DESC", "Aktywuje opcje wy�wietlaj�c� adres IP do wgl�du Moderator�w");

define("_MI_ENABLE_KARMA", "W��cz wymagalno�� Karmy");
define("_MI_ENABLE_KARMA_DESC", "Pozwala autorowi postu na ograniczenie wgl�du w tre�� do u�ytkownik�w z wymagan� warto�ci� Karmy");

define("_MI_KARMA_OPTIONS", "Opcje Karmy dla post�w");
define("_MI_KARMA_OPTIONS_DESC", "U�yj ',' w przypadku wi�kszej ilo�ci pozycji.");

define("_MI_SINCE_OPTIONS", "Warto�� 'Zakres' dla wyszukiwania i przegl�dania.");
define("_MI_SINCE_OPTIONS_DESC", "Dodatnie warto�ci dla dni i ujemne dla godzin. U�yj ',' dla oddzielenia wielu wpis�w.");

define("_MI_SINCE_DEFAULT", "Domy�lna warto�� dla parametru 'Zakres'");
define("_MI_SINCE_DEFAULT_DESC", "Pobierana gdy u�ytkownik nie ustali w�asnej. 0=od pocz�tku");

define("_MI_MODERATOR_HTML", "Zezw�l na HTML tylko Moderatorom");
define("_MI_MODERATOR_HTML_DESC", "Tylko cz�onkowie grupy 'Moderatorzy' mog� uzywa� HTML w Tytu�ach");

define("_MI_USER_ANONYMOUS", "Zezw�l zarejestrowanym u�ytkownikom na postowanie anonimowe");
define("_MI_USER_ANONYMOUS_DESC", "Zalogowany u�ytkownik mo�e nie u�ywa� swojego nicka w postach");

define("_MI_ANONYMOUS_PRE", "Prefix dla u�ytkownik�w anonimowych");
define("_MI_ANONYMOUS_PRE_DESC", "Wstawia okre�lony prefix dla uzytkownik�w pisz�cych anonimowo.");

define("_MI_REQUIRE_REPLY", "Allow requiring reply to read a post");
define("_MI_REQUIRE_REPLY_DESC", "This feature forces readers to reply to the original posters post before being able to read the original");

define("_MI_EDIT_TIMELIMIT", "Limit czasu edycji");
define("_MI_EDIT_TIMELIMIT_DESC", "Podaj w minutach, jak d�ugo u�ytkownik mo�e edytowa� swojego posta, 0 = brak limitu.");

define("_MI_DELETE_TIMELIMIT", "Limit czasu usuwania");
define("_MI_DELETE_TIMELIMIT_DESC", "Podaj w minutach, jak d�ugo uzytkownik mo�e decydowa� o usuni�ciu swojego posta, 0=brak limitu");

define("_MI_POST_TIMELIMIT", "Limit czasu pomi�dzy kolejnymi postami");
define("_MI_POST_TIMELIMIT_DESC", "Podaj w minutach odst�p pomi�dzy kolejnymi postami, 0=brak limitu");

define("_MI_RECORDEDIT_TIMELIMIT", "Limit czasu edycji");
define("_MI_RECORDEDIT_TIMELIMIT_DESC", "Podaj w minutach czas przeznaczonych na edycj� posta, 0=brak limitu");

define("_MI_SHOW_REALNAME", "Poka� prawdziwe imi�.");
define("_MI_SHOW_REALNAME_DESC", "Wy�wietla prawdziwe imi� zamiast nazwy uzytkownika (je�eli jest wpisane). Mo�e zabezpieczy� przed kradzie�� konta.");

define("_MI_CACHE_ENABLE", "W��cz Cache");
define("_MI_CACHE_ENABLE_DESC", "Gromadzi pewne informacje w pami�ci podr�cznej aby przyspieszy� �adowanie strony.");

define("_MI_QUICKREPLY_ENABLE", "W��cz Szybk� Odpowied�");
define("_MI_QUICKREPLY_ENABLE_DESC", "Wy�wietla formularz szybkiej odpowiedzi, bez narz�dzi formatuj�cych.");

define("_MI_POSTSPERPAGE","Post�w na stronie");
define("_MI_POSTSPERPAGE_DESC","Okre�l ile ma by� wy�wietlanych post�w na jednej stronie forum");

define("_MI_POSTSFORTHREAD","Maksymalna ilo�� w�tk�w dla trybu pe�nego");
define("_MI_POSTSFORTHREAD_DESC","Kompaktowy tryb wy�wietlania w�tk�w b�dzie u�yty automatycznie, gdy ilo�� post�w przekroczy podan� tutaj warto��.");

define("_MI_TOPICSPERPAGE","W�tk�w na stronie");
define("_MI_TOPICSPERPAGE_DESC","Okre�l ilo�� wy�wietlanych w�tk�w na stronie forum.");

define("_MI_IMG_TYPE","Rodzaj Obrazk�w");
define("_MI_IMG_TYPE_DESC","Wybierz format przycisk�w obrazkowych na forum.<br />- png: dla szybkich serwer�w;<br />- gif: dla normarnej predko�ci serwer�w;<br />- auto: gif dla IE png dla pozosta�ych przegl�darek.");

define("_MI_PNGFORIE_ENABLE","W��cz poprawk� PNG");
define("_MI_PNGFORIE_ENABLE_DESC","Ustawia opcj� przezroczysto�ci plik�w PNG w Internet Explorerze.");

define("_MI_FORM_OPTIONS","Opcje formularza");
define("_MI_FORM_OPTIONS_DESC","Wybierz, kt�rych formularzy b�dzie mo�na u�ywa� do pisania post�w.");
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

define("_MI_WELCOMEFORUM","Powitanie nowego u�ytkownika na Forum.");
define("_MI_WELCOMEFORUM_DESC","Specjalna informacja powitalna pojawia si� gdy u�ytkownik odwiedza forum po raz pierwszy.");

define("_MI_PERMCHECK_ONDISPLAY", "Sprawd� uprawnienia");
define("_MI_PERMCHECK_ONDISPLAY_DESC", "Check permission for edit on display page");

define("_MI_USERMODERATE", "W��cz moderacj�");
define("_MI_USERMODERATE_DESC", "Brak dodatkowego info");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define ('_MI_NEWBB_THREAD_NOTIFY', 'W�tek');
define ('_MI_NEWBB_THREAD_NOTIFYDSC', 'Opcje Powiadomienia dotycz�ce aktualnego w�tku.');

define ('_MI_NEWBB_FORUM_NOTIFY', 'Forum');
define ('_MI_NEWBB_FORUM_NOTIFYDSC', 'Opcje Powiadomienia dotycz�ce aktualnego forum.');

define ('_MI_NEWBB_GLOBAL_NOTIFY', 'Og�lne');
define ('_MI_NEWBB_GLOBAL_NOTIFYDSC', 'Og�lne opcje powiadamiania.');

define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', 'Nowy post');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', 'Powiadom mnie, gdy w tym w�tku pojawi si� nowy post.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', 'Otrzymujesz powiadomienia, gdy w aktualnym w�tku pojawi si� nowy post.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post w w�tku forum');

define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', 'Nowy w�tek.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', 'Powiadom mnie, gdy w tym forum pojawi si� nowy w�tek.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', 'Otrzymujesz powiadomienia, gdy w aktualnym forum pojawi si� nowy w�tek.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadamianie : Nowy w�tek na forum');

define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', 'Nowe Forum');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', 'Powiadom mnie, gdy w tej kategorii pojawi si� nowe forum.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', 'Otrzymujesz powiadomienie, gdy w tej kategorii pojawi si� nowe forum.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadamianie : Nowe forum');

define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', 'Nowy Post');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', 'Powiadom mnie o ka�dym nowym po�cie.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', 'Otrzymujesz powiadomienie gdy gdziekolwiek na forum pojawi si� nowy post.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post');

define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', 'Nowy Post');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', 'Powiado mnie o ka�dym po�cie na tym forum.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', 'Otrzymujesz powiadomienie o ka�dym po�cie na tym forum.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post na forum');

define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', 'Nowy Post (Pe�ny Text)');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', 'Powiadom o ka�dym nowym po�cie (w tre�ci listu zawarty b�dzie tekst posta).');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', 'Otrzymujesz powiadomienie z za�aczeniem pe�nej tre�ci posta, o nowym po�cie na forum.');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : Nowy post (pe�ny text)');

define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY', 'Przegl�d');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP', 'Powiadom mnie o publikacji przegl�du.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC', 'Otrzymujesz powiadomienie o Przegl�dzie.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-powiadomienie : publikacja przegl�du');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE", "Kategoria testowa");
define("_MI_NEWBB_INSTALL_CAT_DESC", "Kategoria utworzona dla przetestowania.");
define("_MI_NEWBB_INSTALL_FORUM_NAME", "Forum testowe");
define("_MI_NEWBB_INSTALL_FORUM_DESC", "Forum utworzone dla przetestowania.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT", "Gratulacje! Forum dzia�a poprawnie.");
define("_MI_NEWBB_INSTALL_POST_TEXT", "
	Witamy na forum ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." .
	Rejestruj si� i pisz nowe tematy!

	Je�eli masz jakie� pytania dotycz�ce skryptu - odwied� [url=http://xoopsforge.com/modules/newbb/]nasz� stron�[/url].
	");
?>