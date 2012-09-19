<?php
// $Id: admin.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Baza danych została uaktualniona!");
define("_AM_CONFIG","Konfiguracja newsów");
define("_AM_AUTOARTICLES","Artykuły zautomatyzowane");
define("_AM_STORYID","ID artykułu");
define("_AM_TITLE","Tytuł");
define("_AM_TOPIC","Temat");
define("_AM_POSTER","Wysyłający");
define("_AM_PROGRAMMED","Zaprogramowana data/czas");
define("_AM_ACTION","Akcja");
define("_AM_EDIT","Edytuj");
define("_AM_DELETE","Usuń");
define("_AM_LAST10ARTS","Ostatnie 10 artykułów");
define("_AM_PUBLISHED","Wysłany dnia"); // Published Date
define("_AM_GO","OK!");
define("_AM_EDITARTICLE","Edytuj artykuł");
define("_AM_POSTNEWARTICLE","Wyślij nowy artykuł");
define("_AM_ARTPUBLISHED","Twój artykuł został opublikowany!");
define("_AM_HELLO","Witaj %s,");
define("_AM_YOURARTPUB","Twój artykuł proponowany na naszą stronę został opublikowany.");
define("_AM_TITLEC","Tytuł: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Wysłany dnia: ");
define("_AM_RUSUREDEL","Jesteś pewien że chcesz usunąć ten artykuł i wszystkie jego komentarze?");
define("_AM_YES","Tak");
define("_AM_NO","Nie");
define("_AM_INTROTEXT","Tekst nagłówka");
define("_AM_EXTEXT","Tekst rozszerzony");
define("_AM_ALLOWEDHTML","Dozwolony HTML:");
define("_AM_DISAMILEY","Wyłącz uśmieszki");
define("_AM_DISHTML","Wyłącz  HTML");
define("_AM_APPROVE","Zatwierdź");
define("_AM_MOVETOTOP","Przenieś ten artykuł na górę");
define("_AM_CHANGEDATETIME","Zmień datę / czas opublikowania");
define("_AM_NOWSETTIME","Teraz jest ustawiona na: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktualny czas to: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Ustaw datę / czas opublikowania");
define("_AM_MONTHC","Miesiąc:");
define("_AM_DAYC","Dzień:");
define("_AM_YEARC","Rok:");
define("_AM_TIMEC","Godzina:");
define("_AM_PREVIEW","Podgląd");
define("_AM_SAVE","Zapisz");
define("_AM_PUBINHOME","Opublikować na stronie głównej?");
define("_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Dodaj główny temat");
define("_AM_TOPICNAME","Nazwa tematu");
define("_AM_MAX40CHAR","(max: 40 znaków)");
define("_AM_TOPICIMG","Ikona tematu");
define("_AM_IMGNAEXLOC","nazwa ikonki + rozszerzenie pliku w katalogu  %s");
define("_AM_FEXAMPLE","na przykład: gry.gif");
define("_AM_ADDSUBTOPIC","Dodaj podtemat");
define("_AM_IN","w");
define("_AM_MODIFYTOPIC","Modyfikuj temat");
define("_AM_MODIFY","Modyfikuj");
define("_AM_PARENTTOPIC","Temat główny");
define("_AM_SAVECHANGE","Zapisz zmiany");
define("_AM_DEL","Usuń");
define("_AM_CANCEL","Anuluj");
define("_AM_WAYSYWTDTTAL","OSTRZEŻENIE: Jesteś pewien że chcesz usunąć ten temat oraz wszystkie newsy i komentarze w nim?");


// Added in Beta6
define("_AM_TOPICSMNGR","Manager tematów");
define("_AM_PEARTICLES","Postowanie/edycja artykułów");
define("_AM_NEWSUB","Nowe artykuły");
define("_AM_POSTED","Wysłany");
define("_AM_GENERALCONF","Ustawienia główne");

// Added in RC2
define("_AM_TOPICDISPLAY","Wyświetlać ikonkę tematu?");
define("_AM_TOPICALIGN","Pozycja");
define("_AM_RIGHT","Prawo");
define("_AM_LEFT","Lewo");

define("_AM_EXPARTS","Wygasłe artykuły");
define("_AM_EXPIRED","Wygasły");
define("_AM_CHANGEEXPDATETIME","Zmień date/czas wygaśnięcia artykuły");
define("_AM_SETEXPDATETIME"          , "Ustaw czas i datę wygaśnięcia artykułu");
define("_AM_NOWSETEXPTIME"           , "Obecnie jest ustawiony na: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME"          , "Proszę wprowadzić nazwę tematu!");
define("_AM_EMPTYNODELETE"           , "Nie wybrano nic do skasowania!");
// Added 240304 (Mithrandir)
define('_AM_GROUPPERM'               , 'Prawa dostępu - dodawanie/akceptowanie/oglądanie');
define('_AM_SELFILE'                 , 'Wybierz plik to wczytania');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE'     , 'Wysąpił błąd w czasie dołączania pliku do wiadomości');
define('_AM_UPLOAD_ERROR'            , 'Błąd w czasie dodawanie pliku');
define('_AM_UPLOAD_ATTACHFILE'       , 'Załączone pliki');
define('_AM_APPROVEFORM'             , 'Prawa akceptacji');
define('_AM_SUBMITFORM'              , 'Prawa dodawania');
define('_AM_VIEWFORM'                , 'Prawa oglądania');
define('_AM_APPROVEFORM_DESC'        , 'Wybierz osoby mogące akceptować wiadomości');
define('_AM_SUBMITFORM_DESC'         , 'Wybierz osoby mogące dodawać nowe wiadomości');
define('_AM_VIEWFORM_DESC'           , 'Ustal prawa do oglądanie tematów przez osoby');
define('_AM_DELETE_SELFILES'         , 'Skasuj wybrane pliki');
define('_AM_TOPIC_PICTURE'           , 'Wczytaj obrazek');
define('_AM_UPLOAD_WARNING'          , '<B>Uwaga, nie zapomnij ustawić prawa zapisu dla następującego katalogu: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE'    , 'Aktualizacja zakończona');
define('_AM_NEWS_UPDATEMODULE'       , 'Aktualizuj szablony modułów i bloki');
define('_AM_NEWS_UPGRADEFAILED'      , 'Aktualizacja zakończyła się niepowodzeniem');
define('_AM_NEWS_UPGRADE'            , 'Aktualizacja');
define('_AM_ADD_TOPIC'               , 'Dodaj temat');
define('_AM_ADD_TOPIC_ERROR'         , 'Błąd. Ten temat już istnieje!');
define('_AM_ADD_TOPIC_ERROR1'        , 'BŁAD! Nie można wybrać tego tematu jako nadrzędnego!');
define('_AM_SUB_MENU'                , 'Opublikuj ten temat jako podmenu');
define('_AM_SUB_MENU_YESNO'          , 'Podmenu?');
define('_AM_HITS'                    , 'Oglądnięć');
define('_AM_CREATED'               	 , 'Utworzony');

define('_AM_TOPIC_DESCR'             , 'Opis tematu');
define('_AM_USERS_LIST'              , 'Lista użytkowników');
define('_AM_PUBLISH_FRONTPAGE'       , 'Opublikować na stronie głównej?');
define('_AM_NEWS_UPGRADEFAILED1'     , 'Nie można utworzyć tabeli stories_files');
define('_AM_NEWS_UPGRADEFAILED2'     , 'Nie można zmienić długości tytułu tematu');
define('_AM_NEWS_UPGRADEFAILED21'    , 'Nie można dodać nowej kolumy to tabeli tematów');
define('_AM_NEWS_UPGRADEFAILED3'     , 'Nie można utworzyć tabeli stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4'     , "Nie można utworzyć dwóch pól 'rating' i 'votes' dla tabeli 'story'");
define('_AM_NEWS_UPGRADEFAILED0'     , "Proszę przeczytać informacje i spróbować usunąć błędy. Pomocny w tym może być phpMyadmin oraz plik definicji sql-owych znajdujący sie w katalogu 'sql' modułu 'news'");
define('_AM_NEWS_UPGR_ACCESS_ERROR'  , "Błąd w czasie użycia skryptu do akutalizacji, aby go użyć musisz być administratorem modułu.");
define('_AM_NEWS_PRUNE_BEFORE'       , "Skasuj wiadomości które zostały opublikowane wcześniej.");
define('_AM_NEWS_PRUNE_EXPIREDONLY'  , "Skasuj wiadomości które nie są już aktualne.");
define('_AM_NEWS_PRUNE_CONFIRM'      , "Uwaga, chcesz skasować wiadomości opublikowane przed %s (tej akcji nie można później odwołać). W sumie skasujesz  %s wiadomości.<br />Czy jesteś pewien?");
define('_AM_NEWS_PRUNE_TOPICS'       , "Ogranicz do następujących tematów");
define('_AM_NEWS_PRUNENEWS'          , 'Wykasuj wiadomości');
define('_AM_NEWS_EXPORT_NEWS'        , 'Eksportuj wiadomości');
define('_AM_NEWS_EXPORT_NOTHING'     , "Niestety nie wybrano nic do eksportu. Proszę zdefiniować go na nowo.");
define('_AM_NEWS_PRUNE_DELETED'      , '%d wiadomości zostało skasowanych');
define('_AM_NEWS_PERM_WARNING'       , '<h2>Uwaga, masz 3 formularze a tym samym 3 przyciski zatwierdzające</h2>');
define('_AM_NEWS_EXPORT_BETWEEN'     , 'Wyeksportuj wiadomości opublikowane pomiedzy ');
define('_AM_NEWS_EXPORT_AND'         , ' i ');
define('_AM_NEWS_EXPORT_PRUNE_DSC'   , "Jeśli nic nie zaznaczysz zostaną wybrane wszystkie tematy.<br/> Jeśli jednak zaznaczysz, wybrane zostaną zaznaczone tematy.");
define('_AM_NEWS_EXPORT_INCTOPICS'   , 'Razem z definicjami tematów?');
define('_AM_NEWS_EXPORT_ERROR'       , 'Błąd w czasie tworzenie pliku %s. Proces zatrzymany.');
define('_AM_NEWS_EXPORT_READY'       , "Twój plik xml z eksportem jest gotowy do ściągnięcia.<br /><a href='%s'>Kliknij na ten link aby go pobrać</a>.<br />Nie zapomnij <a href='%s'>usunąć go</a> po ściągnięciu.");
define('_AM_NEWS_RSS_URL'            , "Link do RSS feed");
define('_AM_NEWS_NEWSLETTER'         , 'Biuletyn');
define('_AM_NEWS_NEWSLETTER_BETWEEN' , 'Wybierz wiadomości opublikowane pomiędzy');
define('_AM_NEWS_NEWSLETTER_READY'   , "Twój biuletyn jest gotów do pobrania. <br /><a href='%s'>Kliknij na ten link aby go pobrać</a>.<br />Nie zapomnij <a href='%s'>usunąć go</a> po ściągnięciu.");
define('_AM_NEWS_DELETED_OK'         , "Plik został skasowany");
define('_AM_NEWS_DELETED_PB'         , "Wystąpił błąd w czasie kasowania pliku");
define('_AM_NEWS_STATS0'             , 'Statystyki tematów');
define('_AM_NEWS_STATS'              , 'Statystyki');
define('_AM_NEWS_STATS1'             , 'Liczba autorów');
define('_AM_NEWS_STATS2'             , 'Razem');
define('_AM_NEWS_STATS3'             , 'Statystyki artykułów');
define('_AM_NEWS_STATS4'             , 'Najczęściej czytane artykuły');
define('_AM_NEWS_STATS5'             , 'Najrzadziej czytane artykuły');
define('_AM_NEWS_STATS6'             , 'Najwyżej oceniane artykuły');
define('_AM_NEWS_STATS7'             , 'Najbardziej poczytni autorzy');
define('_AM_NEWS_STATS8'             , 'Najwyżej oceniani autorzy');
define('_AM_NEWS_STATS9'             , 'Najwięksi dostawcy wiadomości');
define('_AM_NEWS_STATS10'            , 'Statystyki autorów');
define('_AM_NEWS_STATS11'            , "Liczba artykułów");
define('_AM_NEWS_HELP'               , "Pomoc");
define("_AM_NEWS_MODULEADMIN"        , "Administracja modułem");
define("_AM_NEWS_GENERALSET"         , "Ustawienia modułu" );
define('_AM_NEWS_GOTOMOD'            , 'Przejdź do modułu');
define('_AM_NEWS_NOTHING'            , "Niestety nie ma nic do ściągnięcia, proszę wybrać ponownie!");
define('_AM_NEWS_NOTHING_PRUNE'      , "Niestety nie ma nic do skasowania, proszę wybrać ponownie!");
define('_AM_NEWS_TOPIC_COLOR'        , "Kolor tematu");
define('_AM_NEWS_COLOR'              , "Kolor");
define('_AM_NEWS_REMOVE_BR'          , "Zamienić ten znacznik html &lt;br&gt; na nową linię?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE'     , "<a href='upgrade.php'><font color='#FF0000'>Proszę zaktualizować moduł!</font></a>");
// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Nagłówek");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Stopka");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Usunąć tagi HTML?");
define('_AM_NEWS_VERIFY_TABLES','Zarządzaj tabelami');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen jest systemem który pozwoli Ci na najlepsze poindeksowanie Twoich stron w wyszukiwarkach.<br />Jeśli nie wpiszesz słów kluczowych i opisu meta, ten moduł zrobi to automatycznie.");
define('_AM_NEWS_BLACKLIST',"Czarna lista");
define('_AM_NEWS_BLACKLIST_DESC',"Słowa z tej listy nie zostaną użyte do stworzenia słów kluczowych");
define('_AM_NEWS_BLACKLIST_ADD',"Dodaj");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Wprowadź słowa do dodania<br />(rozdziel je enterem)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maksymalna liczba słów kluczowych do automatycznej generacji");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Kolejność słów kluczowych");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Stwórz je w kolejności w jakiej występują w tekście<br />");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Według częstotliwości występowania w tekście<br />");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Według odwrotnej częstotliwości występowania w tekście");
?>
