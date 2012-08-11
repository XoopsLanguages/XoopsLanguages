<?php
// $Id: admin.php,v 1.1 2007/02/10 18:55:22 dap997 Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AMS_AM_DBUPDATED","Baza Danych zaktualizowana!");
define("_AMS_AM_CONFIG","Konfiguracja AMS");
define("_AMS_AM_AUTOARTICLES","Zautomatyzowane Artyku³y");
define("_AMS_AM_STORYID","ID Opowiadania");
define("_AMS_AM_TITLE","Tytu³");
define("_AMS_AM_TOPIC","Temat");
define("_AMS_AM_ARTICLE","Artyku³");
define("_AMS_AM_POSTER","Pisz±cy");
define("_AMS_AM_PROGRAMMED","Zaprogramowana Data/Czas");
define("_AMS_AM_ACTION","Czynno¶æ");
define("_AMS_AM_EDIT","Edycja");
define("_AMS_AM_DELETE","Usuñ");
define("_AMS_AM_LAST10ARTS","Ostatnie %d Aryku³ów");
define("_AMS_AM_PUBLISHED","Opublikowano"); // Published Date
define("_AMS_AM_GO","Id¼!");
define("_AMS_AM_EDITARTICLE","Edytuj Artyku³");
define("_AMS_AM_POSTNEWARTICLE","Napisz nowy Artyku³");
define("_AMS_AM_ARTPUBLISHED","Twój artyku³ zosta³ opublikowany!");
define("_AMS_AM_HELLO","Witaj %s,");
define("_AMS_AM_YOURARTPUB","Twój artyku³ zosta³ zaakceptowany i opublikowany.");
define("_AMS_AM_TITLEC","Tytu³: ");
define("_AMS_AM_URLC","URL: ");
define("_AMS_AM_PUBLISHEDC","Opublikowano: ");
define("_AMS_AM_RUSUREDEL","Czy na pewno chcesz usun±æ ten artyku³ oraz wszystkie jego komentarze?");
define("_AMS_AM_YES","Tak");
define("_AMS_AM_NO","Nie");
define("_AMS_AM_INTROTEXT","Wstêp");
define("_AMS_AM_EXTEXT","Pe³ny tekst");
define("_AMS_AM_ALLOWEDHTML","Zezwalaæ na HTML:");
define("_AMS_AM_DISAMILEY","Wy³±cz emotikony");
define("_AMS_AM_DISHTML","Wy³±cz HTML");
define("_AMS_AM_APPROVE","Zatwierd¼");
define("_AMS_AM_MOVETOTOP","Przenie¶ t± historiê na sam± górê");
define("_AMS_AM_CHANGEDATETIME","Zmieñ datê/czas publikacji");
define("_AMS_AM_NOWSETTIME","Teraz jest ustawione na: %s"); // %s is datetime of publish
define("_AMS_AM_CURRENTTIME","Aktualny czas: %s");  // %s is the current datetime
define("_AMS_AM_SETDATETIME","Ustaw datê/czas publikacji");
define("_AMS_AM_MONTHC","Miesi±c:");
define("_AMS_AM_DAYC","Dzieñ:");
define("_AMS_AM_YEARC","Rok:");
define("_AMS_AM_TIMEC","Czas:");
define("_AMS_AM_PREVIEW","Podgl±d");
define("_AMS_AM_SAVE","Zapisz");
define("_AMS_AM_PUBINHOME","Opublikowaæ na stronie g³ównej?");
define("_AMS_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AMS_AM_ADDMTOPIC","Dodaj G£ÓWNY Temat");
define("_AMS_AM_TOPICNAME","Nazwa Tematu");
define("_AMS_AM_MAX40CHAR","(Maksymalnie 40 znaków)");
define("_AMS_AM_TOPICIMG","Obrazek tematu");
define("_AMS_AM_IMGNAEXLOC","Nazwa obrazka + rozszerzenie znajduje siê w %s");
define("_AMS_AM_FEXAMPLE","Dla przyk³adu: games.gif");
define("_AMS_AM_ADDSUBTOPIC","Dodaj Temat podrzêdny");
define("_AMS_AM_IN","w");
define("_AMS_AM_MODIFYTOPIC","Modyfikuj Temat");
define("_AMS_AM_MODIFY","Modyfikuj");
define("_AMS_AM_PARENTTOPIC","Nadrzêdny Temat");
define("_AMS_AM_SAVECHANGE","Zapisz zmiany");
define("_AMS_AM_DEL","Kasuj");
define("_AMS_AM_CANCEL","Anuluj");
define("_AMS_AM_WAYSYWTDTTAL","UWAGA: Czy na pewno chcesz usun±æ ten temat oraz wszystkie jego komentarze?");


// Added in Beta6
define("_AMS_AM_TOPICSMNGR","Menad¿er Tematów");
define("_AMS_AM_PEARTICLES","Zarz±dzaj artyku³ami");
define("_AMS_AM_NEWSUB","Nowe sugestie");
define("_AMS_AM_POSTED","Napisany");
define("_AMS_AM_GENERALCONF","Ustawienia G³ówne");

// Added in RC2
define("_AMS_AM_TOPICDISPLAY","Wy¶wietliæ obrazek Tematu?");
define("_AMS_AM_TOPICALIGN","Pozycja");
define("_AMS_AM_RIGHT","Z prawej");
define("_AMS_AM_LEFT","Z lewej");

define("_AMS_AM_EXPARTS","Artyku³y które wygas³y");
define("_AMS_AM_EXPIRED","Wyga¶niête");
define("_AMS_AM_CHANGEEXPDATETIME","Zmieñ datê/czas wyga¶niêcia");
define("_AMS_AM_SETEXPDATETIME","Ustaw datê/czas wyga¶niêcia");
define("_AMS_AM_NOWSETEXPTIME","Teraz jest ustawione na: %s");

// Added in RC3
define("_AMS_AM_ERRORTOPICNAME","Musisz wprowadziæ Temat!");
define("_AMS_AM_EMPTYNODELETE","Nie ma nic do skasowania!");

// Added 240304 (Mithrandir)
define('_AMS_AM_GROUPPERM','Zezwolenia przedstawiania/zatwierdzania');
define('_AMS_AM_SELFILE','Wybierz Plik');

// Added by Hervé
define('_AMS_AM_UPLOAD_DBERROR_SAVE','B³±d podczas dodawania pliku do artyku³u');
define('_AMS_AM_UPLOAD_ERROR','B³±d podczas wysy³ania pliku');
define('_AMS_AM_UPLOAD_ATTACHFILE','Do³±czon(y)e Plik(i)');
define('_AMS_AM_APPROVEFORM','Zezwolenia zatwierdzania');
define('_AMS_AM_SUBMITFORM','Zezwolenia dodawania');
define('_AMS_AM_VIEWFORM','Zobacz zezwolenia');
define('_AMS_AM_APPROVEFORM_DESC','Wybierz, kto mo¿e zatwierdzaæ artyku³y');
define('_AMS_AM_SUBMITFORM_DESC','Wybierz, kto mo¿e przedstawiaæ artyku³y');
define('_AMS_AM_VIEWFORM_DESC','Wybierz, kto mo¿e ogl±daæ które artyku³y');
define('_AMS_AM_DELETE_SELFILES','Usuñ wybrane pliki');
define('_AMS_AM_TOPIC_PICTURE','Wy¶lij obrazek');
define('_AMS_AM_UPLOAD_WARNING','<B>Uwaga! Nie zapomnij ustawiæ atrybutów CHMOD dla nastêpuj±cych katalogów : %s</B>');

define('_AMS_AM_NEWS_UPGRADECOMPLETE','Aktualizacja zakoñczona');
define('_AMS_AM_NEWS_UPDATEMODULE','Aktualizuj szablony i bloki');
define('_AMS_AM_NEWS_UPGRADEFAILED','Nie dokonano aktualizacji');
define('_AMS_AM_NEWS_UPGRADE','Aktualizacja');
define('_AMS_AM_ADD_TOPIC','Dodaj temat');
define('_AMS_AM_ADD_TOPIC_ERROR','B³±d, Taki temat ju¿ istnieje!');
define('_AMS_AM_ADD_TOPIC_ERROR1','B£¡D: Nie mo¿na wybraæ tego tematu jako nadrzêdnego!');
define('_AMS_AM_SUB_MENU','Publikuj ten Temat jako podrzêdny');
define('_AMS_AM_SUB_MENU_YESNO','Czy ma to byæ temat podrzêdny?');
define('_AMS_AM_HITS','Trafieñ');
define('_AMS_AM_CREATED','Stworzony');
define('_AMS_AM_COMMENTS',"Komentarze");
define('_AMS_AM_VERSION',"Wersja");
define('_AMS_AM_PUBLISHEDARTICLES','Opublikowane Artyku³y');
define('_AMS_AM_TOPICBANNER',"Banner");
define('_AMS_AM_BANNERINHERIT',"Dziedziczenie z nadrzêdnego");
define('_AMS_AM_RATING',"Ocena");
define('_AMS_AM_FILTER',"Filtr");
define('_AMS_AM_SORTING','Opcje sortowania');
define('_AMS_AM_SORT','Sortuj');
define('_AMS_AM_ORDER','Kolejno¶æ');
define('_AMS_AM_STATUS','Status');
define('_AMS_AM_OF','z');

define('_AMS_AM_MANAGEAUDIENCES','Zarz±dzaj poziomami czytelników');
define('_AMS_AM_AUDIENCENAME','Nazwa Czytelników');
define('_AMS_AM_ACCESSRIGHTS','Prawa dostêpu');
define('_AMS_AM_LINKEDFORUM','Powi±zane Forum');
define('_AMS_AM_VERSIONCOUNT','Wersje');
define('_AMS_AM_AUDIENCEHASSTORIES','artyku³ %u ma ju¿ t± grupê czytelników, wybierz now± grupê dla tych artyku³u³ów');
define('_AMS_AM_RUSUREDELAUDIENCE','Czy na pewno chcesz zupe³nie usun±æ t± grupê czytelników?');
define('_AMS_AM_PLEASESELECTNEWAUDIENCE','Proszê wybierz grupê czytelników która zast±pi obecn±');
define('_AMS_AM_AUDIENCEDELETED','Grupa zosta³a usuniêta');
define('_AMS_AM_ERROR_AUDIENCENOTDELETED','B³±d - czytelnicy nie zostali usuniêci');
define("_AMS_AM_CANNOTDELETEDEFAULTAUDIENCE","B³±d - nie mo¿na usun±c standardowych praw dla czytelników");

define("_AMS_AM_NOTOPICSELECTED","Nie wybrano tematu");
define("_AMS_AM_SUBMIT","Dodaj");
define("_AMS_AM_ERROR_REORDERERROR","B³±d - w czasie ponownego sortowania");
define("_AMS_AM_REORDERSUCCESSFUL","Tematy zosta³y posortowane na nowo");

define("_AMS_AM_NONE","Brak obrazka");
define("_AMS_AM_AUTHOR","Avatarek autora ");

define("_AMS_AM_SPOT_ADD","Dodaj ma³y blok - spotlight");
define("_AMS_AM_SPOT_EDITBLOCK","Zmieñ ustawienia bloku");
define("_AMS_AM_SPOT_NAME","Nazwa");
define("_AMS_AM_SPOT_SHOWIMAGE","Poka¿ obrazek");
define("_AMS_AM_SPOT_SHOWIMAGE_DESC","Wybierz obrazek aby pokazaæ obrazek albo ustaw go jako obrazek tematu albo jako avaterek autora");
define("_AMS_AM_SPOT_WEIGHT","Waga");
define("_AMS_AM_SPOT_DISPLAY","Publikuj");
define("_AMS_AM_SPOT_MAIN","G³ówny");
define("_AMS_AM_SPOT_MINI","Mini");
define("_AMS_AM_SPOTLIGHT","Spotlight");
define("_AMS_AM_WEIGHT","Waga");
define("_AMS_AM_SPOT_SAVESUCCESS","Zapisano spotlight");
define("_AMS_AM_SPOT_DELETESUCCESS","Skasowano spotlight");
define("_AMS_AM_RUSUREDELSPOTLIGHT","Czy na pewno chcesz skasowaæ tego spotlight?");

define("_AMS_AM_SPOT_LATESTARTICLE","Ostatnie artyku³y");
define("_AMS_AM_SPOT_LATESTINTOPIC","Ostatnie artyku³y w temacie");
define("_AMS_AM_SPOT_SPECIFICARTICLE","Wybrany artyku³");
define("_AMS_AM_SPOT_NOIMAGE","Bez obrazka");
define("_AMS_AM_SPOT_MODE_SELECT","Spotlight Mode");
define("_AMS_AM_SPOT_SPECIFYIMAGE","Wybrany obrazek");
define("_AMS_AM_SPOT_TOPICIMAGE","Obrazek z tematu");
define("_AMS_AM_SPOT_AUTHORIMAGE","Avatarek autora");
define("_AMS_AM_SPOT_IMAGE","Obrazek");
define("_AMS_AM_SPOT_AUTOTEASER","Automatyczne wprowadzenie - teaser");
define("_AMS_AM_SPOT_MAXLENGTH","Maksymalna d³ugo¶æ automatycznego wprowadzenia");
define("_AMS_AM_SPOT_TEASER","Nieautomatyczny tekst wprowadzenia");
define("_AMS_AM_SPOT_TOPIC_DESC","Je¶li wybrano 'Ostatnie artyku³y w temacie', który temat powinien zostaæ wybrany?");
define("_AMS_AM_SPOT_ARTICLE_DESC","Je¶li wybrano 'Ostatnie artyku³y', który artyku³ powinien zostaæ pokazany ?");
define("_AMS_AM_SPOT_CUSTOM","W³asny");

define("_AMS_AM_PREFERENCES","Preferencje");
define("_AMS_AM_GOMOD","Id¼ do modu³u");
define("_AMS_AM_ABOUT","O module");
define("_AMS_AM_MODADMIN","Administracja modu³u");
?>