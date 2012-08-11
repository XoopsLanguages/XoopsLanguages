<?php
// $Id: admin.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Baza danych zosta³a uaktualniona!");
define("_AM_CONFIG","Konfiguracja newsów");
define("_AM_AUTOARTICLES","Artyku³y zautomatyzowane");
define("_AM_STORYID","ID artyku³u");
define("_AM_TITLE","Tytu³");
define("_AM_TOPIC","Temat");
define("_AM_POSTER","Wysy³aj±cy");
define("_AM_PROGRAMMED","Zaprogramowana data/czas");
define("_AM_ACTION","Akcja");
define("_AM_EDIT","Edytuj");
define("_AM_DELETE","Usuñ");
define("_AM_LAST10ARTS","Ostatnie 10 artyku³ów");
define("_AM_PUBLISHED","Wys³any dnia"); // Published Date
define("_AM_GO","OK!");
define("_AM_EDITARTICLE","Edytuj artyku³");
define("_AM_POSTNEWARTICLE","Wy¶lij nowy artyku³");
define("_AM_ARTPUBLISHED","Twój artyku³ zosta³ opublikowany!");
define("_AM_HELLO","Witaj %s,");
define("_AM_YOURARTPUB","Twój artyku³ proponowany na nasz± stronê zosta³ opublikowany.");
define("_AM_TITLEC","Tytu³: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Wys³any dnia: ");
define("_AM_RUSUREDEL","Jeste¶ pewien ¿e chcesz usun±æ ten artyku³ i wszystkie jego komentarze?");
define("_AM_YES","Tak");
define("_AM_NO","Nie");
define("_AM_INTROTEXT","Tekst nag³ówka");
define("_AM_EXTEXT","Tekst rozszerzony");
define("_AM_ALLOWEDHTML","Dozwolony HTML:");
define("_AM_DISAMILEY","Wy³±cz u¶mieszki");
define("_AM_DISHTML","Wy³±cz  HTML");
define("_AM_APPROVE","Zatwierd¼");
define("_AM_MOVETOTOP","Przenie¶ ten artyku³ na górê");
define("_AM_CHANGEDATETIME","Zmieñ datê / czas opublikowania");
define("_AM_NOWSETTIME","Teraz jest ustawiona na: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktualny czas to: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Ustaw datê / czas opublikowania");
define("_AM_MONTHC","Miesi±c:");
define("_AM_DAYC","Dzieñ:");
define("_AM_YEARC","Rok:");
define("_AM_TIMEC","Godzina:");
define("_AM_PREVIEW","Podgl±d");
define("_AM_SAVE","Zapisz");
define("_AM_PUBINHOME","Opublikowaæ na stronie g³ównej?");
define("_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Dodaj g³ówny temat");
define("_AM_TOPICNAME","Nazwa tematu");
define("_AM_MAX40CHAR","(max: 40 znaków)");
define("_AM_TOPICIMG","Ikona tematu");
define("_AM_IMGNAEXLOC","nazwa ikonki + rozszerzenie pliku w katalogu  %s");
define("_AM_FEXAMPLE","na przyk³ad: gry.gif");
define("_AM_ADDSUBTOPIC","Dodaj podtemat");
define("_AM_IN","w");
define("_AM_MODIFYTOPIC","Modyfikuj temat");
define("_AM_MODIFY","Modyfikuj");
define("_AM_PARENTTOPIC","Temat g³ówny");
define("_AM_SAVECHANGE","Zapisz zmiany");
define("_AM_DEL","Usuñ");
define("_AM_CANCEL","Anuluj");
define("_AM_WAYSYWTDTTAL","OSTRZE¯ENIE: Jeste¶ pewien ¿e chcesz usun±æ ten temat oraz wszystkie newsy i komentarze w nim?");


// Added in Beta6
define("_AM_TOPICSMNGR","Manager tematów");
define("_AM_PEARTICLES","Postowanie/edycja artyku³ów");
define("_AM_NEWSUB","Nowe artyku³y");
define("_AM_POSTED","Wys³any");
define("_AM_GENERALCONF","Ustawienia g³ówne");

// Added in RC2
define("_AM_TOPICDISPLAY","Wy¶wietlaæ ikonkê tematu?");
define("_AM_TOPICALIGN","Pozycja");
define("_AM_RIGHT","Prawo");
define("_AM_LEFT","Lewo");

define("_AM_EXPARTS","Wygas³e artyku³y");
define("_AM_EXPIRED","Wygas³y");
define("_AM_CHANGEEXPDATETIME","Zmieñ date/czas wyga¶niêcia artyku³y");
define("_AM_SETEXPDATETIME"          , "Ustaw czas i datê wyga¶niêcia artyku³u");
define("_AM_NOWSETEXPTIME"           , "Obecnie jest ustawiony na: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME"          , "Proszê wprowadziæ nazwê tematu!");
define("_AM_EMPTYNODELETE"           , "Nie wybrano nic do skasowania!");
// Added 240304 (Mithrandir)
define('_AM_GROUPPERM'               , 'Prawa dostêpu - dodawanie/akceptowanie/ogl±danie');
define('_AM_SELFILE'                 , 'Wybierz plik to wczytania');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE'     , 'Wys±pi³ b³±d w czasie do³±czania pliku do wiadomo¶ci');
define('_AM_UPLOAD_ERROR'            , 'B³±d w czasie dodawanie pliku');
define('_AM_UPLOAD_ATTACHFILE'       , 'Za³±czone pliki');
define('_AM_APPROVEFORM'             , 'Prawa akceptacji');
define('_AM_SUBMITFORM'              , 'Prawa dodawania');
define('_AM_VIEWFORM'                , 'Prawa ogl±dania');
define('_AM_APPROVEFORM_DESC'        , 'Wybierz osoby mog±ce akceptowaæ wiadomo¶ci');
define('_AM_SUBMITFORM_DESC'         , 'Wybierz osoby mog±ce dodawaæ nowe wiadomo¶ci');
define('_AM_VIEWFORM_DESC'           , 'Ustal prawa do ogl±danie tematów przez osoby');
define('_AM_DELETE_SELFILES'         , 'Skasuj wybrane pliki');
define('_AM_TOPIC_PICTURE'           , 'Wczytaj obrazek');
define('_AM_UPLOAD_WARNING'          , '<B>Uwaga, nie zapomnij ustawiæ prawa zapisu dla nastêpuj±cego katalogu: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE'    , 'Aktualizacja zakoñczona');
define('_AM_NEWS_UPDATEMODULE'       , 'Aktualizuj szablony modu³ów i bloki');
define('_AM_NEWS_UPGRADEFAILED'      , 'Aktualizacja zakoñczy³a siê niepowodzeniem');
define('_AM_NEWS_UPGRADE'            , 'Aktualizacja');
define('_AM_ADD_TOPIC'               , 'Dodaj temat');
define('_AM_ADD_TOPIC_ERROR'         , 'B³±d. Ten temat ju¿ istnieje!');
define('_AM_ADD_TOPIC_ERROR1'        , 'B£AD! Nie mo¿na wybraæ tego tematu jako nadrzêdnego!');
define('_AM_SUB_MENU'                , 'Opublikuj ten temat jako podmenu');
define('_AM_SUB_MENU_YESNO'          , 'Podmenu?');
define('_AM_HITS'                    , 'Ogl±dniêæ');
define('_AM_CREATED'               	 , 'Utworzony');

define('_AM_TOPIC_DESCR'             , 'Opis tematu');
define('_AM_USERS_LIST'              , 'Lista u¿ytkowników');
define('_AM_PUBLISH_FRONTPAGE'       , 'Opublikowaæ na stronie g³ównej?');
define('_AM_NEWS_UPGRADEFAILED1'     , 'Nie mo¿na utworzyæ tabeli stories_files');
define('_AM_NEWS_UPGRADEFAILED2'     , 'Nie mo¿na zmieniæ d³ugo¶ci tytu³u tematu');
define('_AM_NEWS_UPGRADEFAILED21'    , 'Nie mo¿na dodaæ nowej kolumy to tabeli tematów');
define('_AM_NEWS_UPGRADEFAILED3'     , 'Nie mo¿na utworzyæ tabeli stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4'     , "Nie mo¿na utworzyæ dwóch pól 'rating' i 'votes' dla tabeli 'story'");
define('_AM_NEWS_UPGRADEFAILED0'     , "Proszê przeczytaæ informacje i spróbowaæ usun±æ b³êdy. Pomocny w tym mo¿e byæ phpMyadmin oraz plik definicji sql-owych znajduj±cy sie w katalogu 'sql' modu³u 'news'");
define('_AM_NEWS_UPGR_ACCESS_ERROR'  , "B³±d w czasie u¿ycia skryptu do akutalizacji, aby go u¿yæ musisz byæ administratorem modu³u.");
define('_AM_NEWS_PRUNE_BEFORE'       , "Skasuj wiadomo¶ci które zosta³y opublikowane wcze¶niej.");
define('_AM_NEWS_PRUNE_EXPIREDONLY'  , "Skasuj wiadomo¶ci które nie s± ju¿ aktualne.");
define('_AM_NEWS_PRUNE_CONFIRM'      , "Uwaga, chcesz skasowaæ wiadomo¶ci opublikowane przed %s (tej akcji nie mo¿na pó¼niej odwo³aæ). W sumie skasujesz  %s wiadomo¶ci.<br />Czy jeste¶ pewien?");
define('_AM_NEWS_PRUNE_TOPICS'       , "Ogranicz do nastêpuj±cych tematów");
define('_AM_NEWS_PRUNENEWS'          , 'Wykasuj wiadomo¶ci');
define('_AM_NEWS_EXPORT_NEWS'        , 'Eksportuj wiadomo¶ci');
define('_AM_NEWS_EXPORT_NOTHING'     , "Niestety nie wybrano nic do eksportu. Proszê zdefiniowaæ go na nowo.");
define('_AM_NEWS_PRUNE_DELETED'      , '%d wiadomo¶ci zosta³o skasowanych');
define('_AM_NEWS_PERM_WARNING'       , '<h2>Uwaga, masz 3 formularze a tym samym 3 przyciski zatwierdzaj±ce</h2>');
define('_AM_NEWS_EXPORT_BETWEEN'     , 'Wyeksportuj wiadomo¶ci opublikowane pomiedzy ');
define('_AM_NEWS_EXPORT_AND'         , ' i ');
define('_AM_NEWS_EXPORT_PRUNE_DSC'   , "Je¶li nic nie zaznaczysz zostan± wybrane wszystkie tematy.<br/> Je¶li jednak zaznaczysz, wybrane zostan± zaznaczone tematy.");
define('_AM_NEWS_EXPORT_INCTOPICS'   , 'Razem z definicjami tematów?');
define('_AM_NEWS_EXPORT_ERROR'       , 'B³±d w czasie tworzenie pliku %s. Proces zatrzymany.');
define('_AM_NEWS_EXPORT_READY'       , "Twój plik xml z eksportem jest gotowy do ¶ci±gniêcia.<br /><a href='%s'>Kliknij na ten link aby go pobraæ</a>.<br />Nie zapomnij <a href='%s'>usun±æ go</a> po ¶ci±gniêciu.");
define('_AM_NEWS_RSS_URL'            , "Link do RSS feed");
define('_AM_NEWS_NEWSLETTER'         , 'Biuletyn');
define('_AM_NEWS_NEWSLETTER_BETWEEN' , 'Wybierz wiadomo¶ci opublikowane pomiêdzy');
define('_AM_NEWS_NEWSLETTER_READY'   , "Twój biuletyn jest gotów do pobrania. <br /><a href='%s'>Kliknij na ten link aby go pobraæ</a>.<br />Nie zapomnij <a href='%s'>usun±æ go</a> po ¶ci±gniêciu.");
define('_AM_NEWS_DELETED_OK'         , "Plik zosta³ skasowany");
define('_AM_NEWS_DELETED_PB'         , "Wyst±pi³ b³±d w czasie kasowania pliku");
define('_AM_NEWS_STATS0'             , 'Statystyki tematów');
define('_AM_NEWS_STATS'              , 'Statystyki');
define('_AM_NEWS_STATS1'             , 'Liczba autorów');
define('_AM_NEWS_STATS2'             , 'Razem');
define('_AM_NEWS_STATS3'             , 'Statystyki artyku³ów');
define('_AM_NEWS_STATS4'             , 'Najczê¶ciej czytane artyku³y');
define('_AM_NEWS_STATS5'             , 'Najrzadziej czytane artyku³y');
define('_AM_NEWS_STATS6'             , 'Najwy¿ej oceniane artyku³y');
define('_AM_NEWS_STATS7'             , 'Najbardziej poczytni autorzy');
define('_AM_NEWS_STATS8'             , 'Najwy¿ej oceniani autorzy');
define('_AM_NEWS_STATS9'             , 'Najwiêksi dostawcy wiadomo¶ci');
define('_AM_NEWS_STATS10'            , 'Statystyki autorów');
define('_AM_NEWS_STATS11'            , "Liczba artyku³ów");
define('_AM_NEWS_HELP'               , "Pomoc");
define("_AM_NEWS_MODULEADMIN"        , "Administracja modu³em");
define("_AM_NEWS_GENERALSET"         , "Ustawienia modu³u" );
define('_AM_NEWS_GOTOMOD'            , 'Przejd¼ do modu³u');
define('_AM_NEWS_NOTHING'            , "Niestety nie ma nic do ¶ci±gniêcia, proszê wybraæ ponownie!");
define('_AM_NEWS_NOTHING_PRUNE'      , "Niestety nie ma nic do skasowania, proszê wybraæ ponownie!");
define('_AM_NEWS_TOPIC_COLOR'        , "Kolor tematu");
define('_AM_NEWS_COLOR'              , "Kolor");
define('_AM_NEWS_REMOVE_BR'          , "Zamieniæ ten znacznik html &lt;br&gt; na now± liniê?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE'     , "<a href='upgrade.php'><font color='#FF0000'>Proszê zaktualizowaæ modu³!</font></a>");
// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER',"Nag³ówek");
define('_AM_NEWS_NEWSLETTER_FOOTER',"Stopka");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS',"Usun±æ tagi HTML?");
define('_AM_NEWS_VERIFY_TABLES','Zarz±dzaj tabelami');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen jest systemem który pozwoli Ci na najlepsze poindeksowanie Twoich stron w wyszukiwarkach.<br />Je¶li nie wpiszesz s³ów kluczowych i opisu meta, ten modu³ zrobi to automatycznie.");
define('_AM_NEWS_BLACKLIST',"Czarna lista");
define('_AM_NEWS_BLACKLIST_DESC',"S³owa z tej listy nie zostan± u¿yte do stworzenia s³ów kluczowych");
define('_AM_NEWS_BLACKLIST_ADD',"Dodaj");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Wprowad¼ s³owa do dodania<br />(rozdziel je enterem)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maksymalna liczba s³ów kluczowych do automatycznej generacji");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Kolejno¶æ s³ów kluczowych");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Stwórz je w kolejno¶ci w jakiej wystêpuj± w tek¶cie<br />");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Wed³ug czêstotliwo¶ci wystêpowania w tek¶cie<br />");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Wed³ug odwrotnej czêstotliwo¶ci wystêpowania w tek¶cie");
?>
