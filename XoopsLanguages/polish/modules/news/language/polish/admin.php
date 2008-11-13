<?php
// $Id: admin.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Baza danych zosta�a uaktualniona!");
define("_AM_CONFIG","Konfiguracja news�w");
define("_AM_AUTOARTICLES","Artyku�y zautomatyzowane");
define("_AM_STORYID","ID artyku�u");
define("_AM_TITLE","Tytu�");
define("_AM_TOPIC","Temat");
define("_AM_POSTER","Wysy�aj�cy");
define("_AM_PROGRAMMED","Zaprogramowana data/czas");
define("_AM_ACTION","Akcja");
define("_AM_EDIT","Edytuj");
define("_AM_DELETE","Usu�");
define("_AM_LAST10ARTS","Ostatnie 10 artyku��w");
define("_AM_PUBLISHED","Wys�any dnia"); // Published Date
define("_AM_GO","OK!");
define("_AM_EDITARTICLE","Edytuj artyku�");
define("_AM_POSTNEWARTICLE","Wy�lij nowy artyku�");
define("_AM_ARTPUBLISHED","Tw�j artyku� zosta� opublikowany!");
define("_AM_HELLO","Witaj %s,");
define("_AM_YOURARTPUB","Tw�j artyku� proponowany na nasz� stron� zosta� opublikowany.");
define("_AM_TITLEC","Tytu�: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Wys�any dnia: ");
define("_AM_RUSUREDEL","Jeste� pewien �e chcesz usun�� ten artyku� i wszystkie jego komentarze?");
define("_AM_YES","Tak");
define("_AM_NO","Nie");
define("_AM_INTROTEXT","Tekst nag��wka");
define("_AM_EXTEXT","Tekst rozszerzony");
define("_AM_ALLOWEDHTML","Dozwolony HTML:");
define("_AM_DISAMILEY","Wy��cz u�mieszki");
define("_AM_DISHTML","Wy��cz  HTML");
define("_AM_APPROVE","Zatwierd�");
define("_AM_MOVETOTOP","Przenie� ten artyku� na g�r�");
define("_AM_CHANGEDATETIME","Zmie� dat� / czas opublikowania");
define("_AM_NOWSETTIME","Teraz jest ustawiona na: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktualny czas to: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Ustaw dat� / czas opublikowania");
define("_AM_MONTHC","Miesi�c:");
define("_AM_DAYC","Dzie�:");
define("_AM_YEARC","Rok:");
define("_AM_TIMEC","Godzina:");
define("_AM_PREVIEW","Podgl�d");
define("_AM_SAVE","Zapisz");
define("_AM_PUBINHOME","Opublikowa� na stronie g��wnej?");
define("_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Dodaj g��wny temat");
define("_AM_TOPICNAME","Nazwa tematu");
define("_AM_MAX40CHAR","(max: 40 znak�w)");
define("_AM_TOPICIMG","Ikona tematu");
define("_AM_IMGNAEXLOC","nazwa ikonki + rozszerzenie pliku w katalogu  %s");
define("_AM_FEXAMPLE","na przyk�ad: gry.gif");
define("_AM_ADDSUBTOPIC","Dodaj podtemat");
define("_AM_IN","w");
define("_AM_MODIFYTOPIC","Modyfikuj temat");
define("_AM_MODIFY","Modyfikuj");
define("_AM_PARENTTOPIC","Temat g��wny");
define("_AM_SAVECHANGE","Zapisz zmiany");
define("_AM_DEL","Usu�");
define("_AM_CANCEL","Anuluj");
define("_AM_WAYSYWTDTTAL","OSTRZE�ENIE: Jeste� pewien �e chcesz usun�� ten temat oraz wszystkie newsy i komentarze w nim?");


// Added in Beta6
define("_AM_TOPICSMNGR","Manager temat�w");
define("_AM_PEARTICLES","Postowanie/edycja artyku��w");
define("_AM_NEWSUB","Nowe artyku�y");
define("_AM_POSTED","Wys�any");
define("_AM_GENERALCONF","Ustawienia g��wne");

// Added in RC2
define("_AM_TOPICDISPLAY","Wy�wietla� ikonk� tematu?");
define("_AM_TOPICALIGN","Pozycja");
define("_AM_RIGHT","Prawo");
define("_AM_LEFT","Lewo");

define("_AM_EXPARTS","Wygas�e artyku�y");
define("_AM_EXPIRED","Wygas�y");
define("_AM_CHANGEEXPDATETIME","Zmie� date/czas wyga�ni�cia artyku�y");
define("_AM_SETEXPDATETIME"          , "Ustaw czas i dat� wyga�ni�cia artyku�u");
define("_AM_NOWSETEXPTIME"           , "Obecnie jest ustawiony na: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME"          , "Prosz� wprowadzi� nazw� tematu!");
define("_AM_EMPTYNODELETE"           , "Nie wybrano nic do skasowania!");
// Added 240304 (Mithrandir)
define('_AM_GROUPPERM'               , 'Prawa dost�pu - dodawanie/akceptowanie/ogl�danie');
define('_AM_SELFILE'                 , 'Wybierz plik to wczytania');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE'     , 'Wys�pi� b��d w czasie do��czania pliku do wiadomo�ci');
define('_AM_UPLOAD_ERROR'            , 'B��d w czasie dodawanie pliku');
define('_AM_UPLOAD_ATTACHFILE'       , 'Za��czone pliki');
define('_AM_APPROVEFORM'             , 'Prawa akceptacji');
define('_AM_SUBMITFORM'              , 'Prawa dodawania');
define('_AM_VIEWFORM'                , 'Prawa ogl�dania');
define('_AM_APPROVEFORM_DESC'        , 'Wybierz osoby mog�ce akceptowa� wiadomo�ci');
define('_AM_SUBMITFORM_DESC'         , 'Wybierz osoby mog�ce dodawa� nowe wiadomo�ci');
define('_AM_VIEWFORM_DESC'           , 'Ustal prawa do ogl�danie temat�w przez osoby');
define('_AM_DELETE_SELFILES'         , 'Skasuj wybrane pliki');
define('_AM_TOPIC_PICTURE'           , 'Wczytaj obrazek');
define('_AM_UPLOAD_WARNING'          , '<B>Uwaga, nie zapomnij ustawi� prawa zapisu dla nast�puj�cego katalogu: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE'    , 'Aktualizacja zako�czona');
define('_AM_NEWS_UPDATEMODULE'       , 'Aktualizuj szablony modu��w i bloki');
define('_AM_NEWS_UPGRADEFAILED'      , 'Aktualizacja zako�czy�a si� niepowodzeniem');
define('_AM_NEWS_UPGRADE'            , 'Aktualizacja');
define('_AM_ADD_TOPIC'               , 'Dodaj temat');
define('_AM_ADD_TOPIC_ERROR'         , 'B��d. Ten temat ju� istnieje!');
define('_AM_ADD_TOPIC_ERROR1'        , 'B�AD! Nie mo�na wybra� tego tematu jako nadrz�dnego!');
define('_AM_SUB_MENU'                , 'Opublikuj ten temat jako podmenu');
define('_AM_SUB_MENU_YESNO'          , 'Podmenu?');
define('_AM_HITS'                    , 'Ogl�dni��');
define('_AM_CREATED'               	 , 'Utworzony');

define('_AM_TOPIC_DESCR'             , 'Opis tematu');
define('_AM_USERS_LIST'              , 'Lista u�ytkownik�w');
define('_AM_PUBLISH_FRONTPAGE'       , 'Opublikowa� na stronie g��wnej?');
define('_AM_NEWS_UPGRADEFAILED1'     , 'Nie mo�na utworzy� tabeli stories_files');
define('_AM_NEWS_UPGRADEFAILED2'     , 'Nie mo�na zmieni� d�ugo�ci tytu�u tematu');
define('_AM_NEWS_UPGRADEFAILED21'    , 'Nie mo�na doda� nowej kolumy to tabeli temat�w');
define('_AM_NEWS_UPGRADEFAILED3'     , 'Nie mo�na utworzy� tabeli stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4'     , "Nie mo�na utworzy� dw�ch p�l 'rating' i 'votes' dla tabeli 'story'");
define('_AM_NEWS_UPGRADEFAILED0'     , "Prosz� przeczyta� informacje i spr�bowa� usun�� b��dy. Pomocny w tym mo�e by� phpMyadmin oraz plik definicji sql-owych znajduj�cy sie w katalogu 'sql' modu�u 'news'");
define('_AM_NEWS_UPGR_ACCESS_ERROR'  , "B��d w czasie u�ycia skryptu do akutalizacji, aby go u�y� musisz by� administratorem modu�u.");
define('_AM_NEWS_PRUNE_BEFORE'       , "Skasuj wiadomo�ci kt�re zosta�y opublikowane wcze�niej.");
define('_AM_NEWS_PRUNE_EXPIREDONLY'  , "Skasuj wiadomo�ci kt�re nie s� ju� aktualne.");
define('_AM_NEWS_PRUNE_CONFIRM'      , "Uwaga, chcesz skasowa� wiadomo�ci opublikowane przed %s (tej akcji nie mo�na p�niej odwo�a�). W sumie skasujesz  %s wiadomo�ci.<br />Czy jeste� pewien?");
define('_AM_NEWS_PRUNE_TOPICS'       , "Ogranicz do nast�puj�cych temat�w");
define('_AM_NEWS_PRUNENEWS'          , 'Wykasuj wiadomo�ci');
define('_AM_NEWS_EXPORT_NEWS'        , 'Eksportuj wiadomo�ci');
define('_AM_NEWS_EXPORT_NOTHING'     , "Niestety nie wybrano nic do eksportu. Prosz� zdefiniowa� go na nowo.");
define('_AM_NEWS_PRUNE_DELETED'      , '%d wiadomo�ci zosta�o skasowanych');
define('_AM_NEWS_PERM_WARNING'       , '<h2>Uwaga, masz 3 formularze a tym samym 3 przyciski zatwierdzaj�ce</h2>');
define('_AM_NEWS_EXPORT_BETWEEN'     , 'Wyeksportuj wiadomo�ci opublikowane pomiedzy ');
define('_AM_NEWS_EXPORT_AND'         , ' i ');
define('_AM_NEWS_EXPORT_PRUNE_DSC'   , "Je�li nic nie zaznaczysz zostan� wybrane wszystkie tematy.<br/> Je�li jednak zaznaczysz, wybrane zostan� zaznaczone tematy.");
define('_AM_NEWS_EXPORT_INCTOPICS'   , 'Razem z definicjami temat�w?');
define('_AM_NEWS_EXPORT_ERROR'       , 'B��d w czasie tworzenie pliku %s. Proces zatrzymany.');
define('_AM_NEWS_EXPORT_READY'       , "Tw�j plik xml z eksportem jest gotowy do �ci�gni�cia.<br /><a href='%s'>Kliknij na ten link aby go pobra�</a>.<br />Nie zapomnij <a href='%s'>usun�� go</a> po �ci�gni�ciu.");
define('_AM_NEWS_RSS_URL'            , "Link do RSS feed");
define('_AM_NEWS_NEWSLETTER'         , 'Biuletyn');
define('_AM_NEWS_NEWSLETTER_BETWEEN' , 'Wybierz wiadomo�ci opublikowane pomi�dzy');
define('_AM_NEWS_NEWSLETTER_READY'   , "Tw�j biuletyn jest got�w do pobrania. <br /><a href='%s'>Kliknij na ten link aby go pobra�</a>.<br />Nie zapomnij <a href='%s'>usun�� go</a> po �ci�gni�ciu.");
define('_AM_NEWS_DELETED_OK'         , "Plik zosta� skasowany");
define('_AM_NEWS_DELETED_PB'         , "Wyst�pi� b��d w czasie kasowania pliku");
define('_AM_NEWS_STATS0'             , 'Statystyki temat�w');
define('_AM_NEWS_STATS'              , 'Statystyki');
define('_AM_NEWS_STATS1'             , 'Liczba autor�w');
define('_AM_NEWS_STATS2'             , 'Razem');
define('_AM_NEWS_STATS3'             , 'Statystyki artyku��w');
define('_AM_NEWS_STATS4'             , 'Najcz�ciej czytane artyku�y');
define('_AM_NEWS_STATS5'             , 'Najrzadziej czytane artyku�y');
define('_AM_NEWS_STATS6'             , 'Najwy�ej oceniane artyku�y');
define('_AM_NEWS_STATS7'             , 'Najbardziej poczytni autorzy');
define('_AM_NEWS_STATS8'             , 'Najwy�ej oceniani autorzy');
define('_AM_NEWS_STATS9'             , 'Najwi�ksi dostawcy wiadomo�ci');
define('_AM_NEWS_STATS10'            , 'Statystyki autor�w');
define('_AM_NEWS_STATS11'            , "Liczba artyku��w");
define('_AM_NEWS_HELP'               , "Pomoc");
define("_AM_NEWS_MODULEADMIN"        , "Administracja modu�em");
define("_AM_NEWS_GENERALSET"         , "Ustawienia modu�u" );
define('_AM_NEWS_GOTOMOD'            , 'Przejd� do modu�u');
define('_AM_NEWS_NOTHING'            , "Niestety nie ma nic do �ci�gni�cia, prosz� wybra� ponownie!");
define('_AM_NEWS_NOTHING_PRUNE'      , "Niestety nie ma nic do skasowania, prosz� wybra� ponownie!");
define('_AM_NEWS_TOPIC_COLOR'        , "Kolor tematu");
define('_AM_NEWS_COLOR'              , "Kolor");
define('_AM_NEWS_REMOVE_BR'          , "Zamieni� ten znacznik html &lt;br&gt; na now� lini�?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE'     , "<a href='upgrade.php'><font color='#FF0000'>Prosz� zaktualizowa� modu�!</font></a>");
// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Nag��wek");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Stopka");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Usun�� tagi HTML?");
define('_AM_NEWS_VERIFY_TABLES','Zarz�dzaj tabelami');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen jest systemem kt�ry pozwoli Ci na najlepsze poindeksowanie Twoich stron w wyszukiwarkach.<br />Je�li nie wpiszesz s��w kluczowych i opisu meta, ten modu� zrobi to automatycznie.");
define('_AM_NEWS_BLACKLIST',"Czarna lista");
define('_AM_NEWS_BLACKLIST_DESC',"S�owa z tej listy nie zostan� u�yte do stworzenia s��w kluczowych");
define('_AM_NEWS_BLACKLIST_ADD',"Dodaj");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Wprowad� s�owa do dodania<br />(rozdziel je enterem)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maksymalna liczba s��w kluczowych do automatycznej generacji");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Kolejno�� s��w kluczowych");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Stw�rz je w kolejno�ci w jakiej wyst�puj� w tek�cie<br />");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Wed�ug cz�stotliwo�ci wyst�powania w tek�cie<br />");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Wed�ug odwrotnej cz�stotliwo�ci wyst�powania w tek�cie");
?>
