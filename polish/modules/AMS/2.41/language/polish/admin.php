<?php
// $Id: admin.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AMS_AM_DBUPDATED","Baza Danych zaktualizowana!");
define("_AMS_AM_CONFIG","Konfiguracja AMS");
define("_AMS_AM_AUTOARTICLES","Zautomatyzowane Artykuły");
define("_AMS_AM_STORYID","ID Opowiadania");
define("_AMS_AM_TITLE","Tytuł");
define("_AMS_AM_TOPIC","Temat");
define("_AMS_AM_ARTICLE", "Artykuł");
define("_AMS_AM_POSTER","Piszący");
define("_AMS_AM_PROGRAMMED","Zaprogramowana Data/Czas");
define("_AMS_AM_ACTION","Czynność");
define("_AMS_AM_EDIT","Edycja");
define("_AMS_AM_DELETE","Usuń");
define("_AMS_AM_LAST10ARTS","Ostatnie %d Arykułów");
define("_AMS_AM_PUBLISHED","Opublikowano"); // Published Date
define("_AMS_AM_GO","Idź!");
define("_AMS_AM_EDITARTICLE","Edytuj Artykuł");
define("_AMS_AM_POSTNEWARTICLE","Napisz nowy Artykuł");
define("_AMS_AM_ARTPUBLISHED","Twój artykuł został opublikowany!");
define("_AMS_AM_HELLO","Witaj %s,");
define("_AMS_AM_YOURARTPUB","Twój artykuł został zaakceptowany i opublikowany.");
define("_AMS_AM_TITLEC","Tytuł: ");
define("_AMS_AM_URLC","URL: ");
define("_AMS_AM_PUBLISHEDC","Opublikowano: ");
define("_AMS_AM_RUSUREDEL","Czy na pewno chcesz usunąć ten artykuł oraz wszystkie jego komentarze?");
define("_AMS_AM_YES","Tak");
define("_AMS_AM_NO","Nie");
define("_AMS_AM_INTROTEXT","Wstęp");
define("_AMS_AM_EXTEXT","Pełny tekst");
define("_AMS_AM_ALLOWEDHTML","Zezwalać na HTML:");
define("_AMS_AM_DISAMILEY","Wyłącz emotikony");
define("_AMS_AM_DISHTML","Wyłącz HTML");
define("_AMS_AM_APPROVE","Zatwierdź");
define("_AMS_AM_MOVETOTOP","Przenieś tą historię na samą górę");
define("_AMS_AM_CHANGEDATETIME","Zmień datę/czas publikacji");
define("_AMS_AM_NOWSETTIME","Teraz jest ustawione na: %s"); // %s is datetime of publish
define("_AMS_AM_CURRENTTIME","Aktualny czas: %s");  // %s is the current datetime
define("_AMS_AM_SETDATETIME","Ustaw datę/czas publikacji");
define("_AMS_AM_MONTHC","Miesiąc:");
define("_AMS_AM_DAYC","Dzień:");
define("_AMS_AM_YEARC","Rok:");
define("_AMS_AM_TIMEC","Czas:");
define("_AMS_AM_PREVIEW","Podgląd");
define("_AMS_AM_SAVE","Zapisz");
define("_AMS_AM_PUBINHOME","Opublikować na stronie głównej?");
define("_AMS_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AMS_AM_ADDMTOPIC","Dodaj GŁÓWNY Temat");
define("_AMS_AM_TOPICNAME","Nazwa Tematu");
define("_AMS_AM_MAX40CHAR","(Maksymalnie 40 znaków)");
define("_AMS_AM_TOPICIMG","Obrazek tematu");
define("_AMS_AM_IMGNAEXLOC","Nazwa obrazka + rozszerzenie znajduje się w %s");
define("_AMS_AM_FEXAMPLE","Dla przykładu: games.gif");
define("_AMS_AM_ADDSUBTOPIC","Dodaj Temat podrzędny");
define("_AMS_AM_IN","w");
define("_AMS_AM_MODIFYTOPIC","Modyfikuj Temat");
define("_AMS_AM_MODIFY","Modyfikuj");
define("_AMS_AM_PARENTTOPIC","Nadrzędny Temat");
define("_AMS_AM_SAVECHANGE","Zapisz zmiany");
define("_AMS_AM_DEL","Kasuj");
define("_AMS_AM_CANCEL","Anuluj");
define("_AMS_AM_WAYSYWTDTTAL","UWAGA: Czy na pewno chcesz usunąć ten temat oraz wszystkie jego komentarze?");


// Added in Beta6
define("_AMS_AM_TOPICSMNGR","Menadżer Tematów");
define("_AMS_AM_PEARTICLES","Zarządzaj artykułami");
define("_AMS_AM_NEWSUB","Nowe sugestie");
define("_AMS_AM_POSTED","Napisany");
define("_AMS_AM_GENERALCONF","Ustawienia Główne");

// Added in RC2
define("_AMS_AM_TOPICDISPLAY","Wyświetlić obrazek Tematu?");
define("_AMS_AM_TOPICALIGN","Pozycja");
define("_AMS_AM_RIGHT","Z prawej");
define("_AMS_AM_LEFT","Z lewej");

define("_AMS_AM_EXPARTS","Artykuły które wygasły");
define("_AMS_AM_EXPIRED","Wygaśnięte");
define("_AMS_AM_CHANGEEXPDATETIME","Zmień datę/czas wygaśnięcia");
define("_AMS_AM_SETEXPDATETIME","Ustaw datę/czas wygaśnięcia");
define("_AMS_AM_NOWSETEXPTIME","Teraz jest ustawione na: %s");

// Added in RC3
define("_AMS_AM_ERRORTOPICNAME", "Musisz wprowadzić Temat!");
define("_AMS_AM_EMPTYNODELETE", "Nie ma nic do skasowania!");

// Added 240304 (Mithrandir)
define('_AMS_AM_GROUPPERM', 'Zezwolenia przedstawiania/zatwierdzania');
define('_AMS_AM_SELFILE','Wybierz Plik');

// Added by Hervé
define('_AMS_AM_UPLOAD_DBERROR_SAVE','Błąd podczas dodawania pliku do artykułu');
define('_AMS_AM_UPLOAD_ERROR','Błąd podczas wysyłania pliku');
define('_AMS_AM_UPLOAD_ATTACHFILE','Dołączon(y)e Plik(i)');
define('_AMS_AM_APPROVEFORM', 'Zezwolenia zatwierdzania');
define('_AMS_AM_SUBMITFORM', 'Zezwolenia dodawania');
define('_AMS_AM_VIEWFORM', 'Zobacz zezwolenia');
define('_AMS_AM_APPROVEFORM_DESC', 'Wybierz, kto może zatwierdzać artykuły');
define('_AMS_AM_SUBMITFORM_DESC', 'Wybierz, kto może przedstawiać artykuły');
define('_AMS_AM_VIEWFORM_DESC', 'Wybierz, kto może oglądać które artykuły');
define('_AMS_AM_DELETE_SELFILES', 'Usuń wybrane pliki');
define('_AMS_AM_TOPIC_PICTURE', 'Wyślij obrazek');
define('_AMS_AM_UPLOAD_WARNING', '<B>Uwaga! Nie zapomnij ustawić atrybutów CHMOD dla następujących katalogów : %s</B>');

define('_AMS_AM_NEWS_UPGRADECOMPLETE', 'Aktualizacja zakończona');
define('_AMS_AM_NEWS_UPDATEMODULE', 'Aktualizuj szablony i bloki');
define('_AMS_AM_NEWS_UPGRADEFAILED', 'Nie dokonano aktualizacji');
define('_AMS_AM_NEWS_UPGRADE', 'Aktualizacja');
define('_AMS_AM_ADD_TOPIC','Dodaj temat');
define('_AMS_AM_ADD_TOPIC_ERROR','Błąd, Taki temat już istnieje!');
define('_AMS_AM_ADD_TOPIC_ERROR1','BŁĄD: Nie można wybrać tego tematu jako nadrzędnego!');
define('_AMS_AM_SUB_MENU','Publikuj ten Temat jako podrzędny');
define('_AMS_AM_SUB_MENU_YESNO','Czy ma to być temat podrzędny?');
define('_AMS_AM_HITS', 'Trafień');
define('_AMS_AM_CREATED', 'Stworzony');
define('_AMS_AM_COMMENTS', "Komentarze");
define('_AMS_AM_VERSION', "Wersja");
define('_AMS_AM_PUBLISHEDARTICLES', 'Opublikowane Artykuły');
define('_AMS_AM_TOPICBANNER', "Banner");
define('_AMS_AM_BANNERINHERIT', "Dziedziczenie z nadrzędnego");
define('_AMS_AM_RATING', "Ocena");
define('_AMS_AM_FILTER', "Filtr");
define('_AMS_AM_SORTING', 'Opcje sortowania');
define('_AMS_AM_SORT', 'Sortuj');
define('_AMS_AM_ORDER', 'Kolejność');
define('_AMS_AM_STATUS', 'Status');
define('_AMS_AM_OF', 'z');

define('_AMS_AM_MANAGEAUDIENCES', 'Zarządzaj poziomami czytelników');
define('_AMS_AM_AUDIENCENAME', 'Nazwa Czytelników');
define('_AMS_AM_ACCESSRIGHTS', 'Prawa dostępu');
define('_AMS_AM_LINKEDFORUM', 'Powiązane Forum');
define('_AMS_AM_VERSIONCOUNT', 'Wersje');
define('_AMS_AM_AUDIENCEHASSTORIES', 'artykuł %u ma już tą grupę czytelników, wybierz nową grupę dla tych artykułułów');
define('_AMS_AM_RUSUREDELAUDIENCE', 'Czy na pewno chcesz zupełnie usunąć tą grupę czytelników?');
define('_AMS_AM_PLEASESELECTNEWAUDIENCE', 'Proszę wybierz grupę czytelników która zastąpi obecną');
define('_AMS_AM_AUDIENCEDELETED', 'Grupa została usunięta');
define('_AMS_AM_ERROR_AUDIENCENOTDELETED', 'Błąd - czytelnicy nie zostali usunięci');
define("_AMS_AM_CANNOTDELETEDEFAULTAUDIENCE", "Błąd - nie można usunąc standardowych praw dla czytelników");

define("_AMS_AM_NOTOPICSELECTED", "Nie wybrano tematu");
define("_AMS_AM_SUBMIT", "Dodaj");
define("_AMS_AM_ERROR_REORDERERROR", "Błąd - w czasie ponownego sortowania");
define("_AMS_AM_REORDERSUCCESSFUL", "Tematy zostały posortowane na nowo");

define("_AMS_AM_NONE", "Brak obrazka");
define("_AMS_AM_AUTHOR", "Avatarek autora ");

define("_AMS_AM_SPOT_ADD", "Dodaj mały blok - spotlight");
define("_AMS_AM_SPOT_EDITBLOCK", "Zmień ustawienia bloku");
define("_AMS_AM_SPOT_NAME", "Nazwa");
define("_AMS_AM_SPOT_SHOWIMAGE", "Pokaż obrazek");
define("_AMS_AM_SPOT_SHOWIMAGE_DESC", "Wybierz obrazek aby pokazać obrazek albo ustaw go jako obrazek tematu albo jako avaterek autora");
define("_AMS_AM_SPOT_WEIGHT", "Waga");
define("_AMS_AM_SPOT_DISPLAY", "Publikuj");
define("_AMS_AM_SPOT_MAIN", "Główny");
define("_AMS_AM_SPOT_MINI", "Mini");
define("_AMS_AM_SPOTLIGHT", "Spotlight");
define("_AMS_AM_WEIGHT", "Waga");
define("_AMS_AM_SPOT_SAVESUCCESS", "Zapisano spotlight");
define("_AMS_AM_SPOT_DELETESUCCESS", "Skasowano spotlight");
define("_AMS_AM_RUSUREDELSPOTLIGHT", "Czy na pewno chcesz skasować tego spotlight?");

define("_AMS_AM_SPOT_LATESTARTICLE", "Ostatnie artykuły");
define("_AMS_AM_SPOT_LATESTINTOPIC", "Ostatnie artykuły w temacie");
define("_AMS_AM_SPOT_SPECIFICARTICLE", "Wybrany artykuł");
define("_AMS_AM_SPOT_NOIMAGE", "Bez obrazka");
define("_AMS_AM_SPOT_MODE_SELECT", "Spotlight Mode");
define("_AMS_AM_SPOT_SPECIFYIMAGE", "Wybrany obrazek");
define("_AMS_AM_SPOT_TOPICIMAGE", "Obrazek z tematu");
define("_AMS_AM_SPOT_AUTHORIMAGE", "Avatarek autora");
define("_AMS_AM_SPOT_IMAGE", "Obrazek");
define("_AMS_AM_SPOT_AUTOTEASER", "Automatyczne wprowadzenie - teaser");
define("_AMS_AM_SPOT_MAXLENGTH", "Maksymalna długość automatycznego wprowadzenia");
define("_AMS_AM_SPOT_TEASER", "Nieautomatyczny tekst wprowadzenia");
define("_AMS_AM_SPOT_TOPIC_DESC", "Jeśli wybrano 'Ostatnie artykuły w temacie', który temat powinien zostać wybrany?");
define("_AMS_AM_SPOT_ARTICLE_DESC", "Jeśli wybrano 'Ostatnie artykuły', który artykuł powinien zostać pokazany ?");
define("_AMS_AM_SPOT_CUSTOM", "Własny");

define("_AMS_AM_PREFERENCES", "Preferencje");
define("_AMS_AM_GOMOD", "Idź do modułu");
define("_AMS_AM_ABOUT", "O module");
define("_AMS_AM_MODADMIN", "Administracja modułu");
?>