<?php
// $Id: admin.php,v 1.4 2005/08/30 04:47:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_NW_DBUPDATED","Baza danych została uaktualniona!");
define("_AM_NW_CONFIG","Konfiguracja newsów");
define("_AM_NW_AUTOARTICLES","Artykuły zautomatyzowane");
define("_AM_NW_STORYID","ID artykułu");
define("_AM_NW_TITLE","Tytuł");
define("_AM_NW_TOPIC","Temat");
define("_AM_NW_POSTER","Wysyłający");
define("_AM_NW_PROGRAMMED","Zaprogramowana data/czas");
define("_AM_NW_ACTION","Akcja");
define("_AM_NW_EDIT","Edytuj");
define("_AM_NW_DELETE","Usuń");
define("_AM_NW_LAST10ARTS","Ostatnie 10 artykułów");
define("_AM_NW_PUBLISHED","Wysłany dnia"); // Published Date
define("_AM_NW_GO","OK!");
define("_AM_NW_EDITARTICLE","Edytuj artykuł");
define("_AM_NW_POSTNEWARTICLE","Wyślij nowy artykuł");
define("_AM_NW_ARTPUBLISHED","Twój artykuł został opublikowany!");
define("_AM_NW_HELLO","Witaj %s,");
define("_AM_NW_YOURARTPUB","Twój artykuł proponowany na naszą stronę został opublikowany.");
define("_AM_NW_TITLEC","Tytuł: ");
define("_AM_NW_URLC","URL: ");
define("_AM_NW_PUBLISHEDC","Wysłany dnia: ");
define("_AM_NW_RUSUREDEL","Jesteś pewien że chcesz usunąć ten artykuł i wszystkie jego komentarze?");
define("_AM_NW_YES","Tak");
define("_AM_NW_NO","Nie");
define("_AM_NW_INTROTEXT","Tekst nagłówka");
define("_AM_NW_EXTEXT","Tekst rozszerzony");
define("_AM_NW_ALLOWEDHTML","Dozwolony HTML:");
define("_AM_NW_DISAMILEY","Wyłącz uśmieszki");
define("_AM_NW_DISHTML","Wyłącz  HTML");
define("_AM_NW_APPROVE","Zatwierdź");
define("_AM_NW_MOVETOTOP","Przenieś ten artykuł na górę");
define("_AM_NW_CHANGEDATETIME","Zmień datę / czas opublikowania");
define("_AM_NW_NOWSETTIME","Teraz jest ustawiona na: %s"); // %s is datetime of publish
define("_AM_NW_CURRENTTIME","Aktualny czas to: %s");  // %s is the current datetime
define("_AM_NW_SETDATETIME","Ustaw datę / czas opublikowania");
define("_AM_NW_MONTHC","Miesiąc:");
define("_AM_NW_DAYC","Dzień:");
define("_AM_NW_YEARC","Rok:");
define("_AM_NW_TIMEC","Godzina:");
define("_AM_NW_PREVIEW","Podgląd");
define("_AM_NW_SAVE","Zapisz");
define("_AM_NW_PUBINHOME","Opublikować na stronie głównej?");
define("_AM_NW_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_NW_ADDMTOPIC","Dodaj główny temat");
define("_AM_NW_TOPICNAME","Nazwa tematu");
// Warning, changed from 40 to 255 characters.
define("_AM_NW_MAX40CHAR","(max: 255 znaków)");
define("_AM_NW_TOPICIMG","Ikona tematu");
define("_AM_NW_IMGNAEXLOC","nazwa ikonki + rozszerzenie pliku w katalogu  %s");
define("_AM_NW_FEXAMPLE","na przykład: gry.gif");
define("_AM_NW_ADDSUBTOPIC","Dodaj podtemat");
define("_AM_NW_IN","w");
define("_AM_NW_MODIFYTOPIC","Modyfikuj temat");
define("_AM_NW_MODIFY","Modyfikuj");
define("_AM_NW_PARENTTOPIC","Temat główny");
define("_AM_NW_SAVECHANGE","Zapisz zmiany");
define("_AM_NW_DEL","Usuń");
define("_AM_NW_CANCEL","Anuluj");
define("_AM_NW_WAYSYWTDTTAL","OSTRZEŻENIE: Jesteś pewien że chcesz usunąć ten temat oraz wszystkie newsy i komentarze w nim?");


// Added in Beta6
define("_AM_NW_TOPICSMNGR","Manager tematów");
define("_AM_NW_PEARTICLES","Postowanie/edycja artykułów");
define("_AM_NW_NEWSUB","Nowe artykuły");
define("_AM_NW_POSTED","Wysłany");
define("_AM_NW_GENERALCONF","Ustawienia główne");

// Added in RC2
define("_AM_NW_TOPICDISPLAY","Wyświetlać ikonkę tematu?");
define("_AM_NW_TOPICALIGN","Pozycja");
define("_AM_NW_RIGHT","Prawo");
define("_AM_NW_LEFT","Lewo");

define("_AM_NW_EXPARTS","Wygasłe artykuły");
define("_AM_NW_EXPIRED","Wygasły");
define("_AM_NW_CHANGEEXPDATETIME","Zmień date/czas wygaśnięcia artykuły");
define("_AM_NW_SETEXPDATETIME"          , "Ustaw czas i datę wygaśnięcia artykułu");
define("_AM_NW_NOWSETEXPTIME"           , "Obecnie jest ustawiony na: %s");

// Added in RC3
define("_AM_NW_ERRORTOPICNAME"          , "Proszę wprowadzić nazwę tematu!");
define("_AM_NW_EMPTYNODELETE"           , "Nie wybrano nic do skasowania!");
// Added 240304 (Mithrandir)
define('_AM_NW_GROUPPERM'               , 'Prawa dostępu - dodawanie/akceptowanie/oglądanie');
define('_AM_NW_SELFILE'                 , 'Wybierz plik to wczytania');

// Added by Hervé
define('_AM_NW_UPLOAD_DBERROR_SAVE'     , 'Wysąpił błąd w czasie dołączania pliku do wiadomości');
define('_AM_NW_UPLOAD_ERROR'            , 'Błąd w czasie dodawanie pliku');
define('_AM_NW_UPLOAD_ATTACHFILE'       , 'Załączone pliki');
define('_AM_NW_APPROVEFORM'             , 'Prawa akceptacji');
define('_AM_NW_SUBMITFORM'              , 'Prawa dodawania');
define('_AM_NW_VIEWFORM'                , 'Prawa oglądania');
define('_AM_NW_APPROVEFORM_DESC'        , 'Wybierz osoby mogące akceptować wiadomości');
define('_AM_NW_SUBMITFORM_DESC'         , 'Wybierz osoby mogące dodawać nowe wiadomości');
define('_AM_NW_VIEWFORM_DESC'           , 'Ustal prawa do oglądanie tematów przez osoby');
define('_AM_NW_DELETE_SELFILES'         , 'Skasuj wybrane pliki');
define('_AM_NW_TOPIC_PICTURE'           , 'Wczytaj obrazek');
define('_AM_NW_UPLOAD_WARNING'          , '<B>Uwaga, nie zapomnij ustawić prawa zapisu dla następującego katalogu: %s</B>');

define('_AM_NW_UPGRADECOMPLETE'         , 'Aktualizacja zakończona');
define('_AM_NW_UPDATEMODULE'            , 'Aktualizuj szablony modułów i bloki');
define('_AM_NW_UPGRADEFAILED'           , 'Aktualizacja zakończyła się niepowodzeniem');
define('_AM_NW_UPGRADE'                 , 'Aktualizacja');
define('_AM_NW_ADD_TOPIC'               , 'Dodaj temat');
define('_AM_NW_ADD_TOPIC_ERROR'         , 'Błąd. Ten temat już istnieje!');
define('_AM_NW_ADD_TOPIC_ERROR1'        , 'BŁAD! Nie można wybrać tego tematu jako nadrzędnego!');
define('_AM_NW_SUB_MENU'                , 'Opublikuj ten temat jako podmenu');
define('_AM_NW_SUB_MENU_YESNO'          , 'Podmenu?');
define('_AM_NW_HITS'                    , 'Oglądnięć');
define('_AM_NW_CREATED'               	 , 'Utworzony');

define('_AM_NW_TOPIC_DESCR'             , 'Opis tematu');
define('_AM_NW_USERS_LIST'              , 'Lista użytkowników');
define('_AM_NW_PUBLISH_FRONTPAGE'       , 'Opublikować na stronie głównej?');
define('_AM_NW_UPGRADEFAILED1'     , 'Nie można utworzyć tabeli stories_files');
define('_AM_NW_UPGRADEFAILED2'     , 'Nie można zmienić długości tytułu tematu');
define('_AM_NW_UPGRADEFAILED21'    , 'Nie można dodać nowej kolumy to tabeli tematów');
define('_AM_NW_UPGRADEFAILED3'     , 'Nie można utworzyć tabeli stories_votedata');
define('_AM_NW_UPGRADEFAILED4'     , "Nie można utworzyć dwóch pól 'rating' i 'votes' dla tabeli 'story'");
define('_AM_NW_UPGRADEFAILED0'     , "Proszę przeczytać informacje i spróbować usunąć błędy. Pomocny w tym może być phpMyadmin oraz plik definicji sql-owych znajdujący sie w katalogu 'sql' modułu 'news'");
define('_AM_NW_UPGR_ACCESS_ERROR'  , "Błąd w czasie użycia skryptu do akutalizacji, aby go użyć musisz być administratorem modułu.");
define('_AM_NW_PRUNE_BEFORE'       , "Skasuj wiadomości które zostały opublikowane wcześniej.");
define('_AM_NW_PRUNE_EXPIREDONLY'  , "Skasuj wiadomości które nie są już aktualne.");
define('_AM_NW_PRUNE_CONFIRM'      , "Uwaga, chcesz skasować wiadomości opublikowane przed %s (tej akcji nie można później odwołać). W sumie skasujesz  %s wiadomości.<br />Czy jesteś pewien?");
define('_AM_NW_PRUNE_TOPICS'       , "Ogranicz do następujących tematów");
define('_AM_NW_PRUNENEWS'          , 'Wykasuj wiadomości');
define('_AM_NW_EXPORT_NEWS'        , 'Eksportuj wiadomości');
define('_AM_NW_EXPORT_NOTHING'     , "Niestety nie wybrano nic do eksportu. Proszę zdefiniować go na nowo.");
define('_AM_NW_PRUNE_DELETED'      , '%d wiadomości zostało skasowanych');
define('_AM_NW_PERM_WARNING'       , '<h2>Uwaga, masz 3 formularze a tym samym 3 przyciski zatwierdzające</h2>');
define('_AM_NW_EXPORT_BETWEEN'     , 'Wyeksportuj wiadomości opublikowane pomiedzy ');
define('_AM_NW_EXPORT_AND'         , ' i ');
define('_AM_NW_EXPORT_PRUNE_DSC'   , "Jeśli nic nie zaznaczysz zostaną wybrane wszystkie tematy.<br/> Jeśli jednak zaznaczysz, wybrane zostaną zaznaczone tematy.");
define('_AM_NW_EXPORT_INCTOPICS'   , 'Razem z definicjami tematów?');
define('_AM_NW_EXPORT_ERROR'       , 'Błąd w czasie tworzenie pliku %s. Proces zatrzymany.');
define('_AM_NW_EXPORT_READY'       , "Twój plik xml z eksportem jest gotowy do ściągnięcia.<br /><a href='%s'>Kliknij na ten link aby go pobrać</a>.<br />Nie zapomnij <a href='%s'>usunąć go</a> po ściągnięciu.");
define('_AM_NW_RSS_URL'            , "Link do RSS feed");
define('_AM_NW_NEWSLETTER'         , 'Biuletyn');
define('_AM_NW_NEWSLETTER_BETWEEN' , 'Wybierz wiadomości opublikowane pomiędzy');
define('_AM_NW_NEWSLETTER_READY'   , "Twój biuletyn jest gotów do pobrania. <br /><a href='%s'>Kliknij na ten link aby go pobrać</a>.<br />Nie zapomnij <a href='%s'>usunąć go</a> po ściągnięciu.");
define('_AM_NW_DELETED_OK'         , "Plik został skasowany");
define('_AM_NW_DELETED_PB'         , "Wystąpił błąd w czasie kasowania pliku");
define('_AM_NW_STATS0'             , 'Statystyki tematów');
define('_AM_NW_STATS'              , 'Statystyki');
define('_AM_NW_STATS1'             , 'Liczba autorów');
define('_AM_NW_STATS2'             , 'Razem');
define('_AM_NW_STATS3'             , 'Statystyki artykułów');
define('_AM_NW_STATS4'             , 'Najczęściej czytane artykuły');
define('_AM_NW_STATS5'             , 'Najrzadziej czytane artykuły');
define('_AM_NW_STATS6'             , 'Najwyżej oceniane artykuły');
define('_AM_NW_STATS7'             , 'Najbardziej poczytni autorzy');
define('_AM_NW_STATS8'             , 'Najwyżej oceniani autorzy');
define('_AM_NW_STATS9'             , 'Najwięksi dostawcy wiadomości');
define('_AM_NW_STATS10'            , 'Statystyki autorów');
define('_AM_NW_STATS11'            , "Liczba artykułów");
define('_AM_NW_HELP'               , "Pomoc");
define("_AM_NW_MODULEADMIN"        , "Administracja modułem");
define("_AM_NW_GENERALSET"         , "Ustawienia modułu" );
define('_AM_NW_GOTOMOD'            , 'Przejdź do modułu');
define('_AM_NW_NOTHING'            , "Niestety nie ma nic do ściągnięcia, proszę wybrać ponownie!");
define('_AM_NW_NOTHING_PRUNE'      , "Niestety nie ma nic do skasowania, proszę wybrać ponownie!");
define('_AM_NW_TOPIC_COLOR'        , "Kolor tematu");
define('_AM_NW_COLOR'              , "Kolor");
define('_AM_NW_REMOVE_BR'          , "Zamienić ten znacznik html &lt;br&gt; na nową linię?");
// Added in 1.3 RC2
define('_AM_NW_PLEASE_UPGRADE'     , "<a href='upgrade.php'><font color='#FF0000'>Proszę zaktualizować moduł!</font></a>");

// Added in verisn 1.50
define('_AM_NW_NEWSLETTER_HEADER',"Header");
define('_AM_NW_NEWSLETTER_FOOTER',"Footer");
define('_AM_NW_NEWSLETTER_HTML_TAGS',"Remove html tags ?");
define('_AM_NW_VERIFY_TABLES','Maintain tables');
define('_AM_NW_METAGEN',"Metagen");
define('_AM_NW_METAGEN_DESC',"Metagen is a system that can help you to have your page best indexed by search engines.<br />Except if you type meta keywords and meta descriptions yourself, the module will automatically create them.");
define('_AM_NW_BLACKLIST',"Blacklist");
define('_AM_NW_BLACKLIST_DESC',"The words in this list will not be used to create meta keywords");
define('_AM_NW_BLACKLIST_ADD',"Add");
define('_AM_NW_BLACKLIST_ADD_DSC',"Enter words to add in the list<br />(one word by line)");
define('_AM_NW_META_KEYWORDS_CNT',"Maximum count of meta keywords to auto-generate");
define('_AM_NW_META_KEYWORDS_ORDER',"Keywords order");
define('_AM_NW_META_KEYWORDS_INTEXT',"Create them in the order they appear in the text");
define('_AM_NW_META_KEYWORDS_FREQ1',"Words frequency's order");
define('_AM_NW_META_KEYWORDS_FREQ2',"Reverse order of words frequency");
// Added in version 1.67 Beta
define("_AM_NW_SUBPREFIX","Prefiks");

define("_AM_NW_CLONER","Menadżer klonowania");
define("_AM_NW_CLONER_CLONES","Klony");
define("_AM_NW_CLONER_ADD","Sklonuj");
define("_AM_NW_CLONER_ID","ID");
define("_AM_NW_CLONER_NAME","Nazwa");
define("_AM_NW_CLONER_DIRFOL","Katalog/Folder");
define("_AM_NW_CLONER_VERSION","Wersja");

define("_AM_NW_CLONER_NEWNAME","Nowa nazwa modułu");
define("_AM_NW_CLONER_NEWNAMEDESC","Zostanie utworzony nowy folder dla sklonowanego modułu. <br /> Wielkość liter i odstępy są ignorowane i zostaną automatycznie poprawione. <br /> np. nowa nazwa = <b>Biblioteka</b> nowy katalog = <b>biblioteka</b>, <br /> nowa nazwa = <b>Moja Biblioteka</b> nowy katalog = <b>mojabiblioteka</b>. <br /><br /> Początkowy moduł to: <font color='#008400'><b> %s </b></font><br />");
define("_AM_NW_CLONER_NEWNAMELABEL","Nowy moduł:");

define("_AM_NW_CLONER_DIREXISTS","Katalog/Folder '%s' już istnieje!!");
define("_AM_NW_CLONER_CREATED","Moduł '%s' został pomyślnie sklonowany!!");
define("_AM_NW_CLONER_UPRADED","Moduł '%s' został pomyślnie zaktualizowany!!");
define("_AM_NW_CLONER_NOMODULEID","ID modułu NIE zostało ustawione!"); 

define("_AM_NW_CLONER_UPDATE","Aktualizuj");
define("_AM_NW_CLONER_INSTALL","Instaluj");
define("_AM_NW_CLONER_UNINSTALL","Odinstaluj");
define("_AM_NW_CLONER_ACTION_INSTALL","Instaluj/Odinstaluj"); 

define("_AM_NW_CLONER_IMPORTNEWS","Importuj dane z oryginalnego modułu News");
define("_AM_NW_CLONER_IMPORTNEWSDESC1","Oryginalny moduł News został znaleziony! Zaimportować dane teraz?");
define("_AM_NW_CLONER_IMPORTNEWSDESC2","Przycisk importuj dane jest widoczny jedynie gdy nie ma newsów w bazie modułu x"."News. <br />
                                         Jeśli dodałeś newsa przed importem danych z oryginalnego <br />
                                         modułu News musisz odinstalować i ponownie zainstalować x"."News. <br />
                                         Dane z oryginalnego modułu News można zaimportować tylko raz.");
define("_AM_NW_CLONER_IMPORTNEWSSUB","Importuj");
define("_AM_NW_CLONER_NEWSIMPORTED","Dane z oryginalnego modułu News zostały zaimportowane poprawnie.");

// Added in version 1.68 Beta
define("_AM_NW_DESCRIPTION","<H3>x"."News jest klonowalnym modułem newsów</H3> 
							  dającym możliwość pisania newsów i komentarzy przez użytkowników. Moduł może być sklonowany aby umożliwić posługiwanie się jedną metodą dla realizacji różnych celów. Dzięki temu może być wykorzytany do krótkich informacji, linków i wielu innych zadań. Każde z nich będzie może mieć własne bloki , tematy, ustawienia.");

// Added in version 1.68 RC1
define("_AM_NW_CLONER_CLONEDELETED","'%s' klon został pomyślnie usunięty.");
define("_AM_NW_CLONER_CLONEDELETEDERR","'%s' klon nie został usunięty - sprawdź uprawnienia.");
define("_AM_NW_CLONER_CLONEUPGRADED","Zaktualizowany");
define("_AM_NW_CLONER_UPGRADEFORCE","Zaktualizuj na siłę");
define("_AM_NW_CLONER_CLONEDELETION","Usuwanie klonów");
define("_AM_NW_CLONER_SUREDELETE","Czy potwierdzasz, że chcesz usunąć klon <font color='#000000'>'%s'</font>?<br />");
define("_AM_NW_CLONER_CLONEID","ID klonu nie zostało ustawione!");

// Added in version 1.68 RC2
define("_AM_NW_INDEX","Indeks"); 

// Added in version 1.68 RC3
define("_AM_NW_DOLINEBREAK","Dozwól na łamanie linii");
define("_AM_NW_TOPICS","Tematy");

// Added in version 1.71
define("_AM_NW_IMAGE_ROWS","Wiersze wyświetlania obrazu");
define("_AM_NW_PDF_ROWS","Wiersze wyświetlania PDFa");

?>