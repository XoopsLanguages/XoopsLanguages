<?php
// $Id: admin.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AMS_AM_DBUPDATED","Baza Danych zaktualizowana!");
define("_AMS_AM_CONFIG","Konfiguracja AMS");
define("_AMS_AM_AUTOARTICLES","Zautomatyzowane Artyku�y");
define("_AMS_AM_STORYID","ID Opowiadania");
define("_AMS_AM_TITLE","Tytu�");
define("_AMS_AM_TOPIC","Temat");
define("_AMS_AM_ARTICLE", "Artyku�");
define("_AMS_AM_POSTER","Pisz�cy");
define("_AMS_AM_PROGRAMMED","Zaprogramowana Data/Czas");
define("_AMS_AM_ACTION","Czynno��");
define("_AMS_AM_EDIT","Edycja");
define("_AMS_AM_DELETE","Usu�");
define("_AMS_AM_LAST10ARTS","Ostatnie %d Aryku��w");
define("_AMS_AM_PUBLISHED","Opublikowano"); // Published Date
define("_AMS_AM_GO","Id�!");
define("_AMS_AM_EDITARTICLE","Edytuj Artyku�");
define("_AMS_AM_POSTNEWARTICLE","Napisz nowy Artyku�");
define("_AMS_AM_ARTPUBLISHED","Tw�j artyku� zosta� opublikowany!");
define("_AMS_AM_HELLO","Witaj %s,");
define("_AMS_AM_YOURARTPUB","Tw�j artyku� zosta� zaakceptowany i opublikowany.");
define("_AMS_AM_TITLEC","Tytu�: ");
define("_AMS_AM_URLC","URL: ");
define("_AMS_AM_PUBLISHEDC","Opublikowano: ");
define("_AMS_AM_RUSUREDEL","Czy na pewno chcesz usun�� ten artyku� oraz wszystkie jego komentarze?");
define("_AMS_AM_YES","Tak");
define("_AMS_AM_NO","Nie");
define("_AMS_AM_INTROTEXT","Wst�p");
define("_AMS_AM_EXTEXT","Pe�ny tekst");
define("_AMS_AM_ALLOWEDHTML","Zezwala� na HTML:");
define("_AMS_AM_DISAMILEY","Wy��cz emotikony");
define("_AMS_AM_DISHTML","Wy��cz HTML");
define("_AMS_AM_APPROVE","Zatwierd�");
define("_AMS_AM_MOVETOTOP","Przenie� t� histori� na sam� g�r�");
define("_AMS_AM_CHANGEDATETIME","Zmie� dat�/czas publikacji");
define("_AMS_AM_NOWSETTIME","Teraz jest ustawione na: %s"); // %s is datetime of publish
define("_AMS_AM_CURRENTTIME","Aktualny czas: %s");  // %s is the current datetime
define("_AMS_AM_SETDATETIME","Ustaw dat�/czas publikacji");
define("_AMS_AM_MONTHC","Miesi�c:");
define("_AMS_AM_DAYC","Dzie�:");
define("_AMS_AM_YEARC","Rok:");
define("_AMS_AM_TIMEC","Czas:");
define("_AMS_AM_PREVIEW","Podgl�d");
define("_AMS_AM_SAVE","Zapisz");
define("_AMS_AM_PUBINHOME","Opublikowa� na stronie g��wnej?");
define("_AMS_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AMS_AM_ADDMTOPIC","Dodaj G��WNY Temat");
define("_AMS_AM_TOPICNAME","Nazwa Tematu");
define("_AMS_AM_MAX40CHAR","(Maksymalnie 40 znak�w)");
define("_AMS_AM_TOPICIMG","Obrazek tematu");
define("_AMS_AM_IMGNAEXLOC","Nazwa obrazka + rozszerzenie znajduje si� w %s");
define("_AMS_AM_FEXAMPLE","Dla przyk�adu: games.gif");
define("_AMS_AM_ADDSUBTOPIC","Dodaj Temat podrz�dny");
define("_AMS_AM_IN","w");
define("_AMS_AM_MODIFYTOPIC","Modyfikuj Temat");
define("_AMS_AM_MODIFY","Modyfikuj");
define("_AMS_AM_PARENTTOPIC","Nadrz�dny Temat");
define("_AMS_AM_SAVECHANGE","Zapisz zmiany");
define("_AMS_AM_DEL","Kasuj");
define("_AMS_AM_CANCEL","Anuluj");
define("_AMS_AM_WAYSYWTDTTAL","UWAGA: Czy na pewno chcesz usun�� ten temat oraz wszystkie jego komentarze?");


// Added in Beta6
define("_AMS_AM_TOPICSMNGR","Menad�er Temat�w");
define("_AMS_AM_PEARTICLES","Zarz�dzaj artyku�ami");
define("_AMS_AM_NEWSUB","Nowe sugestie");
define("_AMS_AM_POSTED","Napisany");
define("_AMS_AM_GENERALCONF","Ustawienia G��wne");

// Added in RC2
define("_AMS_AM_TOPICDISPLAY","Wy�wietli� obrazek Tematu?");
define("_AMS_AM_TOPICALIGN","Pozycja");
define("_AMS_AM_RIGHT","Z prawej");
define("_AMS_AM_LEFT","Z lewej");

define("_AMS_AM_EXPARTS","Artyku�y kt�re wygas�y");
define("_AMS_AM_EXPIRED","Wyga�ni�te");
define("_AMS_AM_CHANGEEXPDATETIME","Zmie� dat�/czas wyga�ni�cia");
define("_AMS_AM_SETEXPDATETIME","Ustaw dat�/czas wyga�ni�cia");
define("_AMS_AM_NOWSETEXPTIME","Teraz jest ustawione na: %s");

// Added in RC3
define("_AMS_AM_ERRORTOPICNAME", "Musisz wprowadzi� Temat!");
define("_AMS_AM_EMPTYNODELETE", "Nie ma nic do skasowania!");

// Added 240304 (Mithrandir)
define('_AMS_AM_GROUPPERM', 'Zezwolenia przedstawiania/zatwierdzania');
define('_AMS_AM_SELFILE','Wybierz Plik');

// Added by Herv�
define('_AMS_AM_UPLOAD_DBERROR_SAVE','B��d podczas dodawania pliku do artyku�u');
define('_AMS_AM_UPLOAD_ERROR','B��d podczas wysy�ania pliku');
define('_AMS_AM_UPLOAD_ATTACHFILE','Do��czon(y)e Plik(i)');
define('_AMS_AM_APPROVEFORM', 'Zezwolenia zatwierdzania');
define('_AMS_AM_SUBMITFORM', 'Zezwolenia dodawania');
define('_AMS_AM_VIEWFORM', 'Zobacz zezwolenia');
define('_AMS_AM_APPROVEFORM_DESC', 'Wybierz, kto mo�e zatwierdza� artyku�y');
define('_AMS_AM_SUBMITFORM_DESC', 'Wybierz, kto mo�e przedstawia� artyku�y');
define('_AMS_AM_VIEWFORM_DESC', 'Wybierz, kto mo�e ogl�da� kt�re artyku�y');
define('_AMS_AM_DELETE_SELFILES', 'Usu� wybrane pliki');
define('_AMS_AM_TOPIC_PICTURE', 'Wy�lij obrazek');
define('_AMS_AM_UPLOAD_WARNING', '<B>Uwaga! Nie zapomnij ustawi� atrybut�w CHMOD dla nast�puj�cych katalog�w : %s</B>');

define('_AMS_AM_NEWS_UPGRADECOMPLETE', 'Aktualizacja zako�czona');
define('_AMS_AM_NEWS_UPDATEMODULE', 'Aktualizuj szablony i bloki');
define('_AMS_AM_NEWS_UPGRADEFAILED', 'Nie dokonano aktualizacji');
define('_AMS_AM_NEWS_UPGRADE', 'Aktualizacja');
define('_AMS_AM_ADD_TOPIC','Dodaj temat');
define('_AMS_AM_ADD_TOPIC_ERROR','B��d, Taki temat ju� istnieje!');
define('_AMS_AM_ADD_TOPIC_ERROR1','B��D: Nie mo�na wybra� tego tematu jako nadrz�dnego!');
define('_AMS_AM_SUB_MENU','Publikuj ten Temat jako podrz�dny');
define('_AMS_AM_SUB_MENU_YESNO','Czy ma to by� temat podrz�dny?');
define('_AMS_AM_HITS', 'Trafie�');
define('_AMS_AM_CREATED', 'Stworzony');
define('_AMS_AM_COMMENTS', "Komentarze");
define('_AMS_AM_VERSION', "Wersja");
define('_AMS_AM_PUBLISHEDARTICLES', 'Opublikowane Artyku�y');
define('_AMS_AM_TOPICBANNER', "Banner");
define('_AMS_AM_BANNERINHERIT', "Dziedziczenie z nadrz�dnego");
define('_AMS_AM_RATING', "Ocena");
define('_AMS_AM_FILTER', "Filtr");
define('_AMS_AM_SORTING', 'Opcje sortowania');
define('_AMS_AM_SORT', 'Sortuj');
define('_AMS_AM_ORDER', 'Kolejno��');
define('_AMS_AM_STATUS', 'Status');
define('_AMS_AM_OF', 'z');

define('_AMS_AM_MANAGEAUDIENCES', 'Zarz�dzaj poziomami czytelnik�w');
define('_AMS_AM_AUDIENCENAME', 'Nazwa Czytelnik�w');
define('_AMS_AM_ACCESSRIGHTS', 'Prawa dost�pu');
define('_AMS_AM_LINKEDFORUM', 'Powi�zane Forum');
define('_AMS_AM_VERSIONCOUNT', 'Wersje');
define('_AMS_AM_AUDIENCEHASSTORIES', 'artyku� %u ma ju� t� grup� czytelnik�w, wybierz now� grup� dla tych artyku�u��w');
define('_AMS_AM_RUSUREDELAUDIENCE', 'Czy na pewno chcesz zupe�nie usun�� t� grup� czytelnik�w?');
define('_AMS_AM_PLEASESELECTNEWAUDIENCE', 'Prosz� wybierz grup� czytelnik�w kt�ra zast�pi obecn�');
define('_AMS_AM_AUDIENCEDELETED', 'Grupa zosta�a usuni�ta');
define('_AMS_AM_ERROR_AUDIENCENOTDELETED', 'B��d - czytelnicy nie zostali usuni�ci');
define("_AMS_AM_CANNOTDELETEDEFAULTAUDIENCE", "B��d - nie mo�na usun�c standardowych praw dla czytelnik�w");

define("_AMS_AM_NOTOPICSELECTED", "Nie wybrano tematu");
define("_AMS_AM_SUBMIT", "Dodaj");
define("_AMS_AM_ERROR_REORDERERROR", "B��d - w czasie ponownego sortowania");
define("_AMS_AM_REORDERSUCCESSFUL", "Tematy zosta�y posortowane na nowo");

define("_AMS_AM_NONE", "Brak obrazka");
define("_AMS_AM_AUTHOR", "Avatarek autora ");

define("_AMS_AM_SPOT_ADD", "Dodaj ma�y blok - spotlight");
define("_AMS_AM_SPOT_EDITBLOCK", "Zmie� ustawienia bloku");
define("_AMS_AM_SPOT_NAME", "Nazwa");
define("_AMS_AM_SPOT_SHOWIMAGE", "Poka� obrazek");
define("_AMS_AM_SPOT_SHOWIMAGE_DESC", "Wybierz obrazek aby pokaza� obrazek albo ustaw go jako obrazek tematu albo jako avaterek autora");
define("_AMS_AM_SPOT_WEIGHT", "Waga");
define("_AMS_AM_SPOT_DISPLAY", "Publikuj");
define("_AMS_AM_SPOT_MAIN", "G��wny");
define("_AMS_AM_SPOT_MINI", "Mini");
define("_AMS_AM_SPOTLIGHT", "Spotlight");
define("_AMS_AM_WEIGHT", "Waga");
define("_AMS_AM_SPOT_SAVESUCCESS", "Zapisano spotlight");
define("_AMS_AM_SPOT_DELETESUCCESS", "Skasowano spotlight");
define("_AMS_AM_RUSUREDELSPOTLIGHT", "Czy na pewno chcesz skasowa� tego spotlight?");

define("_AMS_AM_SPOT_LATESTARTICLE", "Ostatnie artyku�y");
define("_AMS_AM_SPOT_LATESTINTOPIC", "Ostatnie artyku�y w temacie");
define("_AMS_AM_SPOT_SPECIFICARTICLE", "Wybrany artyku�");
define("_AMS_AM_SPOT_NOIMAGE", "Bez obrazka");
define("_AMS_AM_SPOT_MODE_SELECT", "Spotlight Mode");
define("_AMS_AM_SPOT_SPECIFYIMAGE", "Wybrany obrazek");
define("_AMS_AM_SPOT_TOPICIMAGE", "Obrazek z tematu");
define("_AMS_AM_SPOT_AUTHORIMAGE", "Avatarek autora");
define("_AMS_AM_SPOT_IMAGE", "Obrazek");
define("_AMS_AM_SPOT_AUTOTEASER", "Automatyczne wprowadzenie - teaser");
define("_AMS_AM_SPOT_MAXLENGTH", "Maksymalna d�ugo�� automatycznego wprowadzenia");
define("_AMS_AM_SPOT_TEASER", "Nieautomatyczny tekst wprowadzenia");
define("_AMS_AM_SPOT_TOPIC_DESC", "Je�li wybrano 'Ostatnie artyku�y w temacie', kt�ry temat powinien zosta� wybrany?");
define("_AMS_AM_SPOT_ARTICLE_DESC", "Je�li wybrano 'Ostatnie artyku�y', kt�ry artyku� powinien zosta� pokazany ?");
define("_AMS_AM_SPOT_CUSTOM", "W�asny");

define("_AMS_AM_PREFERENCES", "Preferencje");
define("_AMS_AM_GOMOD", "Id� do modu�u");
define("_AMS_AM_ABOUT", "O module");
define("_AMS_AM_MODADMIN", "Administracja modu�u");
?>