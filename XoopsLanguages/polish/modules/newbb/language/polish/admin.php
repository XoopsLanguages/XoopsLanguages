<?php
// $Id: admin.php,v 1.1 2007/02/10 18:56:09 dap997 Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","Konfiguracja Forum");
define("_AM_NEWBB_ADDAFORUM","Dodaj Forum");
define("_AM_NEWBB_SYNCFORUM","Synchronizuj");
define("_AM_NEWBB_REORDERFORUM","Zmie� kolejno��");
define("_AM_NEWBB_FORUM_MANAGER","Fora");
define("_AM_NEWBB_PRUNE_TITLE","Oczy��");
define("_AM_NEWBB_CATADMIN","Kategorie");
define("_AM_NEWBB_GENERALSET", "Ustawienia" );
define("_AM_NEWBB_MODULEADMIN","Zarz�dzanie:");
define("_AM_NEWBB_HELP","Pomoc");
define("_AM_NEWBB_ABOUT","Informacja");
define("_AM_NEWBB_BOARDSUMMARY","Statystyki");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","Posty oczekuj�ce na zatwierdzenie.");
define("_AM_NEWBB_POSTID","ID");
define("_AM_NEWBB_POSTDATE","Data dodania");
define("_AM_NEWBB_POSTER","Autor");
define("_AM_NEWBB_TOPICS","Tematy");
define("_AM_NEWBB_SHORTSUMMARY","Podsumowanie");
define("_AM_NEWBB_TOTALPOSTS","Wszystkich post�w");
define("_AM_NEWBB_TOTALTOPICS","Wszystkich w�tk�w");
define("_AM_NEWBB_TOTALVIEWS","Wszystkich odwiedzin");
define("_AM_NEWBB_BLOCKS","Bloki");
define("_AM_NEWBB_SUBJECT","Temat");
define("_AM_NEWBB_APPROVE","Zatwierd� post");
define("_AM_NEWBB_APPROVETEXT","Zawarto�� tej wiadomo�ci");
define("_AM_NEWBB_POSTAPPROVED","Post zosta� zatwierdzony");
define("_AM_NEWBB_POSTNOTAPPROVED","Post NIE zosta� zatwierdzony");
define("_AM_NEWBB_POSTSAVED","Post zosta� zapisany");
define("_AM_NEWBB_POSTNOTSAVED","Post nie zosta� zapisany");

define("_AM_NEWBB_TOPICAPPROVED","W�tek zosta� zaakceptowany");
define("_AM_NEWBB_TOPICNOTAPPROVED","W�tek nie zosta� zaakceptowany");
define("_AM_NEWBB_TOPICID","ID W�tku");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","Autoryzacja niezatwierdzonych w�tk�w");


define('_AM_NEWBB_DEL_ONE','Usu� tylko t� wiadomo��');
define('_AM_NEWBB_POSTSDELETED','Wybrany post zosta� usuni�ty.');
define('_AM_NEWBB_NOAPPROVEPOST','Aktualnie nie ma post�w oczekuj�cych na zatwierdzenie.');
define('_AM_NEWBB_SUBJECTC','Tytu�:');
define('_AM_NEWBB_MESSAGEICON','Ikona wiadomo�ci:');
define('_AM_NEWBB_MESSAGEC','Tre��:');
define('_AM_NEWBB_CANCELPOST','Zrezygnuj');
define('_AM_NEWBB_GOTOMOD','Id� do modu�u');

define('_AM_NEWBB_PREFERENCES','Ustawienia Modu�u');
define('_AM_NEWBB_POLLMODULE','Modu� Ankiet Xoops');
define('_AM_NEWBB_POLL_OK','Gotowy do u�ycia');
define('_AM_NEWBB_GDLIB1','Biblioteka GD1:');
define('_AM_NEWBB_GDLIB2','Biblioteka GD2:');
define('_AM_NEWBB_AUTODETECTED','Autodetekcja: ');
define('_AM_NEWBB_AVAILABLE','Dost�pna');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Niedost�pna</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">Chroniony przed zapisem</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','Nie ustawione');
define('_AM_NEWBB_ATTACHPATH','�cie�ka do przechowywania za��cznik�w');
define('_AM_NEWBB_THUMBPATH','�ciezka do przechowywania miniaturek obraz�w');
//define('_AM_NEWBB_RSSPATH','Path for RSS feed');
define('_AM_NEWBB_REPORT','Raportowane posty');
define('_AM_NEWBB_REPORT_PENDING','Raport oczekuj�cy');
define('_AM_NEWBB_REPORT_PROCESSED','raport przetworzony');

define('_AM_NEWBB_CREATETHEDIR','Utw�rz');
define('_AM_NEWBB_SETMPERM','Ustaw uprawnienia');
define('_AM_NEWBB_DIRCREATED','Katalog zosta� utworzony');
define('_AM_NEWBB_DIRNOTCREATED','Katalog nie m�g� zostac utworzony');
define('_AM_NEWBB_PERMSET','Uprawnienia zosta�y nadane');
define('_AM_NEWBB_PERMNOTSET','nie mo�na by�o nada� uprawnie�');

define('_AM_NEWBB_DIGEST','Powiadomienie o Przegl�dzie');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Powinno zosta� wys�ane %d minut temu</font>');
define('_AM_NEWBB_DIGEST_NEXT','Trzeba wys�a� za %d minut');
define('_AM_NEWBB_DIGEST_ARCHIVE','Archiwum Przegl�d�w');
define('_AM_NEWBB_DIGEST_SENT','Przegl�d zosta� utworzony i opublikowany');
define('_AM_NEWBB_DIGEST_FAILED','Nie utworzono przegl�du!');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","Nazwa");
define("_AM_NEWBB_CREATEFORUM","Utw�rz Forum");
define("_AM_NEWBB_EDIT","Edytuj");
define("_AM_NEWBB_CLEAR","Wyczy��");
define("_AM_NEWBB_DELETE","Kasuj");
define("_AM_NEWBB_ADD","Dodaj");
define("_AM_NEWBB_MOVE","Przenie�");
define("_AM_NEWBB_ORDER","Kolejno��");
define("_AM_NEWBB_TWDAFAP","Uwaga: Ta operacja spowoduje usuni�cie tego forum i wszystkich post�w w nim umieszczonych.<br /><br />Czy jeste� pewien, �e chcesz usun�� to Forum?");
define("_AM_NEWBB_FORUMREMOVED","Forum Usuni�to.");
define("_AM_NEWBB_CREATENEWFORUM","Stw�rz Nowe Forum");
define("_AM_NEWBB_EDITTHISFORUM","Edycja forum:");
define("_AM_NEWBB_SET_FORUMORDER","Ustaw kolejno��:");
define("_AM_NEWBB_ALLOWPOLLS","Zezw�l na ankiety:");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Maksymalny rozmiar w kB:");
define("_AM_NEWBB_ALLOWED_EXTENSIONS", "Dozwolone rozszerzenia:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' oznacza brak ogranicze�.<br /> Rozszerzenia oddzielaj '|'</span>");
define("_AM_NEWBB_ALLOW_ATTACHMENTS", "Dopuszczaj za��czniki:");
define("_AM_NEWBB_ALLOWHTML","Dopuszczaj HTML:");
define("_AM_NEWBB_YES","Tak");
define("_AM_NEWBB_NO","Nie");
define("_AM_NEWBB_ALLOWSIGNATURES","Dopuszczaj sygnatury:");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","Pr�g gor�cego w�tku:");
//define("_AM_NEWBB_POSTPERPAGE","Posts per Page:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of posts<br /> per topic that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM","Topics per Forum:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of topics<br /> per forum that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_SHOWNAME","Replace user's name with real name:");
//define("_AM_NEWBB_SHOWICONSPANEL","Show icons panel:");
//define("_AM_NEWBB_SHOWSMILIESPANEL","Show smilies panel:");
define("_AM_NEWBB_MODERATOR_REMOVE","Usu� aktualnych moderator�w");
define("_AM_NEWBB_MODERATOR_ADD","Dodaj moderator�w");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX", "Zezw�l na prefixy w tytu�ach w�tk�w");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC", "Dopuszczasz prefixy wyr�niaj�ce tematyk� w�tku");


// admin_cat_manager.php

define("_AM_NEWBB_SETCATEGORYORDER","Ustaw pozycj� kategorii:");
define("_AM_NEWBB_ACTIVE","Aktywny");
define("_AM_NEWBB_INACTIVE","Nieaktywny");
define("_AM_NEWBB_STATE","Status:");
define("_AM_NEWBB_CATEGORYDESC","Opis kategorii:");
define("_AM_NEWBB_SHOWDESC","Wy�wietla� opis?");
define("_AM_NEWBB_IMAGE","Obrazek:");
//define("_AM_NEWBB_SPONSORIMAGE","Sponsor Image:");
define("_AM_NEWBB_SPONSORLINK","Odno�nik sponsora:");
define("_AM_NEWBB_DELCAT","Usu� kategori�");
define("_AM_NEWBB_WAYSYWTDTTAL","Uwaga: Ta operacja nie spowoduje usuni�cia For�w znajduj�cych si� w tej kategorii. Fora musisz usuwa� z poziomu sekcji administracji for�w.<br /><br />Ostrze�enie: Czy na pewno chcesz usun�� t� kategori�?");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","Nazwa forum:");
define("_AM_NEWBB_FORUMDESCRIPTION","Opis forum:");
define("_AM_NEWBB_MODERATOR","Moderator(rzy):");
define("_AM_NEWBB_REMOVE","Usu�");
define("_AM_NEWBB_CATEGORY","Kategoria:");
define("_AM_NEWBB_DATABASEERROR","B��d bazy danych");
define("_AM_NEWBB_CATEGORYUPDATED","Kategoria uaktualniona.");
define("_AM_NEWBB_EDITCATEGORY","Edycja kategorii:");
define("_AM_NEWBB_CATEGORYTITLE","Tytu� kategorii:");
define("_AM_NEWBB_CATEGORYCREATED","Kategoria Utworzona.");
define("_AM_NEWBB_CREATENEWCATEGORY","Utworzenie nowej kategorii");
define("_AM_NEWBB_FORUMCREATED","Forum utworzone.");
define("_AM_NEWBB_ACCESSLEVEL","Og�lny poziom dost�pu:");
define("_AM_NEWBB_CATEGORY1","Kategoria");
define("_AM_NEWBB_FORUMUPDATE","Ustawienia forum uaktualnione ");
define("_AM_NEWBB_FORUM_ERROR","B��D: B��d ustawie� forum");
define("_AM_NEWBB_CLICKBELOWSYNC","Klikaj�c na przycisk poni�ej uruchomisz proces synchronizacji danych w bazie. Operacja wskazana gdy zauwazysz b�edy w powi�zaniach danych i tre�ci na forum.");
define("_AM_NEWBB_SYNCHING","Trwa synchronizacja kategorii i watk�w. (To mo�e potrwac chwil�)");
define("_AM_NEWBB_CATEGORYDELETED","Kategoria usuni�ta.");
define("_AM_NEWBB_MOVE2CAT","Przenie� do kategorii:");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","Utw�rz sub-forum w:");
define("_AM_NEWBB_MSG_FORUM_MOVED","Forum przeniesione!");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","Nie uda�o si� przenie�� forum.");
define("_AM_NEWBB_SELECT","< Wybierz >");
define("_AM_NEWBB_MOVETHISFORUM","Przenie� to Forum");
define("_AM_NEWBB_MERGE","��czenie");
define("_AM_NEWBB_MERGETHISFORUM","Po��cz to forum");
define("_AM_NEWBB_MERGETO_FORUM","Po��cz to forum z:");
define("_AM_NEWBB_MSG_FORUM_MERGED","Forum po��czono!");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","Nie uda�o si� po��czy� forum.");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID","ID");
define("_AM_NEWBB_REORDERTITLE","Tytu�");
define("_AM_NEWBB_REORDERWEIGHT","Pozycja");
define("_AM_NEWBB_SETFORUMORDER","Ustaw kolejno�� forum");
define("_AM_NEWBB_BOARDREORDER","Kolejno�� zmieniona wed�ug zalece�");

// admin_permission.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","Uprawnienia w�tk�w na tym forum");
define("_AM_NEWBB_CAT_ACCESS","Dost�p do kategorii");
define("_AM_NEWBB_CAN_ACCESS","Udost�pniona");
define("_AM_NEWBB_CAN_VIEW","Mo�e ogl�da�");
define("_AM_NEWBB_CAN_POST","Mo�e rozpoczyna� nowe w�tki");
define("_AM_NEWBB_CAN_REPLY","Mo�e odpisywa�");
define("_AM_NEWBB_CAN_EDIT","Mo�e edytowa�");
define("_AM_NEWBB_CAN_DELETE","Mo�e kasowa�");
define("_AM_NEWBB_CAN_ADDPOLL","Mo�e dodawa� ankiety");
define("_AM_NEWBB_CAN_VOTE","Mo�e g�osowa�");
define("_AM_NEWBB_CAN_ATTACH","Mo�e dodawa� za��czniki");
define("_AM_NEWBB_CAN_NOAPPROVE","Mo�e pisac bez zatwierdzania");

define("_AM_NEWBB_ACTION","Czynno��");

define("_AM_NEWBB_PERM_TEMPLATE","Szablon uprawnie�");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","B�dzie zastosowany do nowego forum");
define("_AM_NEWBB_PERM_FORUMS","Wybierz fora");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","Szablon uprawnie� zosta� utworzony.");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","Nast�pi� b��d podczas tworzenia szablonu uprawnie�");
define("_AM_NEWBB_PERM_TEMPLATEAPP","zastosuj domy�lne uprawnienia");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED","Domy�lne uprawnienia zosta�y zastosowane");
define("_AM_NEWBB_PERM_ACTION","Zarz�dzanie uprawnieniami");
define("_AM_NEWBB_PERM_SETBYGROUP", "Ustaw uprawnienia bezpo�rednio dla grup");

// admin_forum_prune.php

define ("_AM_NEWBB_PRUNE_RESULTS_TITLE","Wyniki oczyszczania");
define ("_AM_NEWBB_PRUNE_RESULTS_TOPICS","Oczyszczone w�tki");
define ("_AM_NEWBB_PRUNE_RESULTS_POSTS","Oczyszczone posty");
define ("_AM_NEWBB_PRUNE_RESULTS_FORUMS","oczyszczone fora");
define ("_AM_NEWBB_PRUNE_STORE","Zachowaj posty w tym forum zamiast je usuwa�");
define ("_AM_NEWBB_PRUNE_ARCHIVE","Skopiuj do archiwum");
define ("_AM_NEWBB_PRUNE_FORUMSELERROR","Nie wybrano forum do oczyszczenia");

define ("_AM_NEWBB_PRUNE_DAYS","Usu� w�tki bez odpowiedzi od:");
define ("_AM_NEWBB_PRUNE_FORUMS","Fora do oczyszczenia");
define ("_AM_NEWBB_PRUNE_STICKY","Zachowaj w�tki przyklejone");
define ("_AM_NEWBB_PRUNE_DIGEST","Zachowaj w�tki w Przegl�dach");
define ("_AM_NEWBB_PRUNE_LOCK","Zachowaj w�tki zablokowane");
define ("_AM_NEWBB_PRUNE_HOT","Zachowaj w�tki z odpowiedziami w liczbie wi�kszej ni�");
define ("_AM_NEWBB_PRUNE_SUBMIT","Ok");
define ("_AM_NEWBB_PRUNE_RESET","Resetuj");
define ("_AM_NEWBB_PRUNE_YES","Tak");
define ("_AM_NEWBB_PRUNE_NO","Nie");
define ("_AM_NEWBB_PRUNE_WEEK","Tygodnia");
define ("_AM_NEWBB_PRUNE_2WEEKS","2 tygodni");
define ("_AM_NEWBB_PRUNE_MONTH","Miesi�ca");
define ("_AM_NEWBB_PRUNE_2MONTH","2 miesi�cy");
define ("_AM_NEWBB_PRUNE_4MONTH","4 miesi�cy");
define ("_AM_NEWBB_PRUNE_YEAR","Roku");
define ("_AM_NEWBB_PRUNE_2YEARS","2 lat");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO', "Informacja o autorze");
define('_AM_NEWBB_AUTHOR_NAME', "Autor");
define('_AM_NEWBB_AUTHOR_WEBSITE', "Strona autora");
define('_AM_NEWBB_AUTHOR_EMAIL', "Email autora");
define('_AM_NEWBB_AUTHOR_CREDITS', "Podzi�kowania");
define('_AM_NEWBB_MODULE_INFO', "Informacja o rozwoju modu�u");
define('_AM_NEWBB_MODULE_STATUS', "Status");
define('_AM_NEWBB_MODULE_DEMO', "Strona Demo");
define('_AM_NEWBB_MODULE_SUPPORT', "Oficjalna strona wsparcia");
define('_AM_NEWBB_MODULE_BUG', "Zg�o� b��d modu�u");
define('_AM_NEWBB_MODULE_FEATURE', "Zaproponuj now� opcj� w module");
define('_AM_NEWBB_MODULE_DISCLAIMER', "Obja�nienie");
define('_AM_NEWBB_AUTHOR_WORD', "S�owo od autora");
define('_AM_NEWBB_BY','przez');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA', "");
// admin_report.php
define("_AM_NEWBB_REPORTADMIN","Zarz�dzanie raportowanymi postami");
define("_AM_NEWBB_PROCESSEDREPORT","Przejrzyj przetworzone raporty");
define("_AM_NEWBB_PROCESSREPORT","Przetw�rz raport");
define("_AM_NEWBB_REPORTTITLE","Tytu� raportu");
define("_AM_NEWBB_REPORTEXTRA","Extra info");
define("_AM_NEWBB_REPORTPOST","Raportowany post");
define("_AM_NEWBB_REPORTTEXT","Tekst");
define("_AM_NEWBB_REPORTMEMO","Przetw�rz memo");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","Zarz�dzanie Przegl�dami");
define("_AM_NEWBB_DIGESTCONTENT","Zawarto�� Przegl�d�w");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION", "Informacje o ankietach");
define("_AM_NEWBB_VOTE_TOTALVOTES", "wszystkich g�os�w: ");
define("_AM_NEWBB_VOTE_REGUSERVOTES", "w tym od zarejestrowanych: %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES", "w tym od anonimowych: %s");
define("_AM_NEWBB_VOTE_USER", "U�ytkownik");
define("_AM_NEWBB_VOTE_IP", "Adres IP");
define("_AM_NEWBB_VOTE_USERAVG", "�rednia ocen");
define("_AM_NEWBB_VOTE_TOTALRATE", "Ocena og�lna");
define("_AM_NEWBB_VOTE_DATE", "Przes�ano");
define("_AM_NEWBB_VOTE_RATING", "Oceny");
define("_AM_NEWBB_VOTE_NOREGVOTES", "Zarejestrowani u�ytkownicy jeszcze nie g�osowali");
define("_AM_NEWBB_VOTE_NOUNREGVOTES", "Anonimowi u�ytkownicy jeszcze nie g�osowali");
define("_AM_NEWBB_VOTEDELETED", "Dane ankiety skasowane.");
define("_AM_NEWBB_VOTE_ID", "ID");
define("_AM_NEWBB_VOTE_FILETITLE", "Tytu� w�tku");
define("_AM_NEWBB_VOTE_DISPLAYVOTES", "Informacje o g�osowaniach");
define("_AM_NEWBB_VOTE_NOVOTES", "Nie ma g�os�w do wy�wietlenia");
define("_AM_NEWBB_VOTE_DELETE", "nie ma g�os�w do wy�wietlenia");
define("_AM_NEWBB_VOTE_DELETEDSC", "<strong>Usuwa</strong> wybrane informacje z bazy danych.");

// admin_type_manager.php
define("_AM_NEWBB_TYPE_ADD", "Dodaj typy w�tk�w");
define("_AM_NEWBB_TYPE_TEMPLATE", "Szablon typu");
define("_AM_NEWBB_TYPE_TEMPLATE_APPLY", "Akceptuj szablon");
define("_AM_NEWBB_TYPE_FORUM", "Typy dla danych dzi�a�w");
define("_AM_NEWBB_TYPE_NAME", "Nazwa typ�w");
define("_AM_NEWBB_TYPE_COLOR", "Kolor");
define("_AM_NEWBB_TYPE_DESCRIPTION", "Opis");
define("_AM_NEWBB_TYPE_ORDER", "Kolejno��");
define("_AM_NEWBB_TYPE_LIST", "Lista typ�w");
define("_AM_NEWBB_TODEL_TYPE", "Czy na pewno chcesz usun��: [%s]?");
define("_AM_NEWBB_TYPE_ORDER_DESC", "Aby aktywowa� typ dla forum, warto�� pola kolejno�� musi by� r�na od zera. Je�eli wartos� b�dzie ustawiona na zero - typ b�dzie nieaktywny.");

define("_MD_DBUPDATED", "Baza zosta�a zaktualizowana");
// admin_synchronization.php
define("_AM_NEWBB_SYNC_TYPE_FORUM", "Dane forum");
define("_AM_NEWBB_SYNC_TYPE_TOPIC", "Dane temat�w");//��
define("_AM_NEWBB_SYNC_TYPE_POST", "Dane post�w");
define("_AM_NEWBB_SYNC_TYPE_USER", "Dane u�ytkownik�w");
define("_AM_NEWBB_SYNC_TYPE_STATS", "Informacje statystyk");
define("_AM_NEWBB_SYNC_TYPE_MISC", "Inne");

define("_AM_NEWBB_SYNC_ITEMS", "Ilo�� rekord�w do przetworzenia: ");
?>