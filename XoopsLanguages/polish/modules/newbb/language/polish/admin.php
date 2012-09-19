<?php
// $Id: admin.php,v 1.1 2007/02/10 18:56:09 dap997 Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","Konfiguracja Forum");
define("_AM_NEWBB_ADDAFORUM","Dodaj Forum");
define("_AM_NEWBB_SYNCFORUM","Synchronizuj");
define("_AM_NEWBB_REORDERFORUM","Zmień kolejność");
define("_AM_NEWBB_FORUM_MANAGER","Fora");
define("_AM_NEWBB_PRUNE_TITLE","Oczyść");
define("_AM_NEWBB_CATADMIN","Kategorie");
define("_AM_NEWBB_GENERALSET", "Ustawienia" );
define("_AM_NEWBB_MODULEADMIN","Zarządzanie:");
define("_AM_NEWBB_HELP","Pomoc");
define("_AM_NEWBB_ABOUT","Informacja");
define("_AM_NEWBB_BOARDSUMMARY","Statystyki");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","Posty oczekujące na zatwierdzenie.");
define("_AM_NEWBB_POSTID","ID");
define("_AM_NEWBB_POSTDATE","Data dodania");
define("_AM_NEWBB_POSTER","Autor");
define("_AM_NEWBB_TOPICS","Tematy");
define("_AM_NEWBB_SHORTSUMMARY","Podsumowanie");
define("_AM_NEWBB_TOTALPOSTS","Wszystkich postów");
define("_AM_NEWBB_TOTALTOPICS","Wszystkich wątków");
define("_AM_NEWBB_TOTALVIEWS","Wszystkich odwiedzin");
define("_AM_NEWBB_BLOCKS","Bloki");
define("_AM_NEWBB_SUBJECT","Temat");
define("_AM_NEWBB_APPROVE","Zatwierdź post");
define("_AM_NEWBB_APPROVETEXT","Zawartość tej wiadomości");
define("_AM_NEWBB_POSTAPPROVED","Post został zatwierdzony");
define("_AM_NEWBB_POSTNOTAPPROVED","Post NIE został zatwierdzony");
define("_AM_NEWBB_POSTSAVED","Post został zapisany");
define("_AM_NEWBB_POSTNOTSAVED","Post nie został zapisany");

define("_AM_NEWBB_TOPICAPPROVED","Wątek został zaakceptowany");
define("_AM_NEWBB_TOPICNOTAPPROVED","Wątek nie został zaakceptowany");
define("_AM_NEWBB_TOPICID","ID Wątku");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","Autoryzacja niezatwierdzonych wątków");


define('_AM_NEWBB_DEL_ONE','Usuń tylko tą wiadomość');
define('_AM_NEWBB_POSTSDELETED','Wybrany post został usunięty.');
define('_AM_NEWBB_NOAPPROVEPOST','Aktualnie nie ma postów oczekujących na zatwierdzenie.');
define('_AM_NEWBB_SUBJECTC','Tytuł:');
define('_AM_NEWBB_MESSAGEICON','Ikona wiadomości:');
define('_AM_NEWBB_MESSAGEC','Treść:');
define('_AM_NEWBB_CANCELPOST','Zrezygnuj');
define('_AM_NEWBB_GOTOMOD','Idź do modułu');

define('_AM_NEWBB_PREFERENCES','Ustawienia Modułu');
define('_AM_NEWBB_POLLMODULE','Moduł Ankiet Xoops');
define('_AM_NEWBB_POLL_OK','Gotowy do użycia');
define('_AM_NEWBB_GDLIB1','Biblioteka GD1:');
define('_AM_NEWBB_GDLIB2','Biblioteka GD2:');
define('_AM_NEWBB_AUTODETECTED','Autodetekcja: ');
define('_AM_NEWBB_AVAILABLE','Dostępna');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Niedostępna</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">Chroniony przed zapisem</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','Nie ustawione');
define('_AM_NEWBB_ATTACHPATH','Ścieżka do przechowywania załączników');
define('_AM_NEWBB_THUMBPATH','Ściezka do przechowywania miniaturek obrazów');
//define('_AM_NEWBB_RSSPATH','Path for RSS feed');
define('_AM_NEWBB_REPORT','Raportowane posty');
define('_AM_NEWBB_REPORT_PENDING','Raport oczekujący');
define('_AM_NEWBB_REPORT_PROCESSED','raport przetworzony');

define('_AM_NEWBB_CREATETHEDIR','Utwórz');
define('_AM_NEWBB_SETMPERM','Ustaw uprawnienia');
define('_AM_NEWBB_DIRCREATED','Katalog został utworzony');
define('_AM_NEWBB_DIRNOTCREATED','Katalog nie mógł zostac utworzony');
define('_AM_NEWBB_PERMSET','Uprawnienia zostały nadane');
define('_AM_NEWBB_PERMNOTSET','nie można było nadać uprawnień');

define('_AM_NEWBB_DIGEST','Powiadomienie o Przeglądzie');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Powinno zostać wysłane %d minut temu</font>');
define('_AM_NEWBB_DIGEST_NEXT','Trzeba wysłać za %d minut');
define('_AM_NEWBB_DIGEST_ARCHIVE','Archiwum Przeglądów');
define('_AM_NEWBB_DIGEST_SENT','Przegląd został utworzony i opublikowany');
define('_AM_NEWBB_DIGEST_FAILED','Nie utworzono przeglądu!');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","Nazwa");
define("_AM_NEWBB_CREATEFORUM","Utwórz Forum");
define("_AM_NEWBB_EDIT","Edytuj");
define("_AM_NEWBB_CLEAR","Wyczyść");
define("_AM_NEWBB_DELETE","Kasuj");
define("_AM_NEWBB_ADD","Dodaj");
define("_AM_NEWBB_MOVE","Przenieś");
define("_AM_NEWBB_ORDER","Kolejność");
define("_AM_NEWBB_TWDAFAP","Uwaga: Ta operacja spowoduje usunięcie tego forum i wszystkich postów w nim umieszczonych.<br /><br />Czy jesteś pewien, że chcesz usunąć to Forum?");
define("_AM_NEWBB_FORUMREMOVED","Forum Usunięto.");
define("_AM_NEWBB_CREATENEWFORUM","Stwórz Nowe Forum");
define("_AM_NEWBB_EDITTHISFORUM","Edycja forum:");
define("_AM_NEWBB_SET_FORUMORDER","Ustaw kolejność:");
define("_AM_NEWBB_ALLOWPOLLS","Zezwól na ankiety:");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Maksymalny rozmiar w kB:");
define("_AM_NEWBB_ALLOWED_EXTENSIONS", "Dozwolone rozszerzenia:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' oznacza brak ograniczeń.<br /> Rozszerzenia oddzielaj '|'</span>");
define("_AM_NEWBB_ALLOW_ATTACHMENTS", "Dopuszczaj załączniki:");
define("_AM_NEWBB_ALLOWHTML","Dopuszczaj HTML:");
define("_AM_NEWBB_YES","Tak");
define("_AM_NEWBB_NO","Nie");
define("_AM_NEWBB_ALLOWSIGNATURES","Dopuszczaj sygnatury:");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","Próg gorącego wątku:");
//define("_AM_NEWBB_POSTPERPAGE","Posts per Page:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of posts<br /> per topic that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM","Topics per Forum:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of topics<br /> per forum that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_SHOWNAME","Replace user's name with real name:");
//define("_AM_NEWBB_SHOWICONSPANEL","Show icons panel:");
//define("_AM_NEWBB_SHOWSMILIESPANEL","Show smilies panel:");
define("_AM_NEWBB_MODERATOR_REMOVE","Usuń aktualnych moderatorów");
define("_AM_NEWBB_MODERATOR_ADD","Dodaj moderatorów");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX", "Zezwól na prefixy w tytułach wątków");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC", "Dopuszczasz prefixy wyróżniające tematykę wątku");


// admin_cat_manager.php

define("_AM_NEWBB_SETCATEGORYORDER","Ustaw pozycję kategorii:");
define("_AM_NEWBB_ACTIVE","Aktywny");
define("_AM_NEWBB_INACTIVE","Nieaktywny");
define("_AM_NEWBB_STATE","Status:");
define("_AM_NEWBB_CATEGORYDESC","Opis kategorii:");
define("_AM_NEWBB_SHOWDESC","Wyświetlać opis?");
define("_AM_NEWBB_IMAGE","Obrazek:");
//define("_AM_NEWBB_SPONSORIMAGE","Sponsor Image:");
define("_AM_NEWBB_SPONSORLINK","Odnośnik sponsora:");
define("_AM_NEWBB_DELCAT","Usuń kategorię");
define("_AM_NEWBB_WAYSYWTDTTAL","Uwaga: Ta operacja nie spowoduje usunięcia Forów znajdujących się w tej kategorii. Fora musisz usuwać z poziomu sekcji administracji forów.<br /><br />Ostrzeżenie: Czy na pewno chcesz usunąć tą kategorię?");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","Nazwa forum:");
define("_AM_NEWBB_FORUMDESCRIPTION","Opis forum:");
define("_AM_NEWBB_MODERATOR","Moderator(rzy):");
define("_AM_NEWBB_REMOVE","Usuń");
define("_AM_NEWBB_CATEGORY","Kategoria:");
define("_AM_NEWBB_DATABASEERROR","Błąd bazy danych");
define("_AM_NEWBB_CATEGORYUPDATED","Kategoria uaktualniona.");
define("_AM_NEWBB_EDITCATEGORY","Edycja kategorii:");
define("_AM_NEWBB_CATEGORYTITLE","Tytuł kategorii:");
define("_AM_NEWBB_CATEGORYCREATED","Kategoria Utworzona.");
define("_AM_NEWBB_CREATENEWCATEGORY","Utworzenie nowej kategorii");
define("_AM_NEWBB_FORUMCREATED","Forum utworzone.");
define("_AM_NEWBB_ACCESSLEVEL","Ogólny poziom dostępu:");
define("_AM_NEWBB_CATEGORY1","Kategoria");
define("_AM_NEWBB_FORUMUPDATE","Ustawienia forum uaktualnione ");
define("_AM_NEWBB_FORUM_ERROR","BŁĄD: Błąd ustawień forum");
define("_AM_NEWBB_CLICKBELOWSYNC","Klikając na przycisk poniżej uruchomisz proces synchronizacji danych w bazie. Operacja wskazana gdy zauwazysz błedy w powiązaniach danych i treści na forum.");
define("_AM_NEWBB_SYNCHING","Trwa synchronizacja kategorii i watków. (To może potrwac chwilę)");
define("_AM_NEWBB_CATEGORYDELETED","Kategoria usunięta.");
define("_AM_NEWBB_MOVE2CAT","Przenieś do kategorii:");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","Utwórz sub-forum w:");
define("_AM_NEWBB_MSG_FORUM_MOVED","Forum przeniesione!");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","Nie udało się przenieść forum.");
define("_AM_NEWBB_SELECT","< Wybierz >");
define("_AM_NEWBB_MOVETHISFORUM","Przenieś to Forum");
define("_AM_NEWBB_MERGE","Łączenie");
define("_AM_NEWBB_MERGETHISFORUM","Połącz to forum");
define("_AM_NEWBB_MERGETO_FORUM","Połącz to forum z:");
define("_AM_NEWBB_MSG_FORUM_MERGED","Forum połączono!");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","Nie udało się połączyć forum.");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID","ID");
define("_AM_NEWBB_REORDERTITLE","Tytuł");
define("_AM_NEWBB_REORDERWEIGHT","Pozycja");
define("_AM_NEWBB_SETFORUMORDER","Ustaw kolejność forum");
define("_AM_NEWBB_BOARDREORDER","Kolejność zmieniona według zaleceń");

// admin_permission.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","Uprawnienia wątków na tym forum");
define("_AM_NEWBB_CAT_ACCESS","Dostęp do kategorii");
define("_AM_NEWBB_CAN_ACCESS","Udostępniona");
define("_AM_NEWBB_CAN_VIEW","Może oglądać");
define("_AM_NEWBB_CAN_POST","Może rozpoczynać nowe wątki");
define("_AM_NEWBB_CAN_REPLY","Może odpisywać");
define("_AM_NEWBB_CAN_EDIT","Może edytować");
define("_AM_NEWBB_CAN_DELETE","Może kasować");
define("_AM_NEWBB_CAN_ADDPOLL","Może dodawać ankiety");
define("_AM_NEWBB_CAN_VOTE","Może głosować");
define("_AM_NEWBB_CAN_ATTACH","Może dodawać załączniki");
define("_AM_NEWBB_CAN_NOAPPROVE","Może pisac bez zatwierdzania");

define("_AM_NEWBB_ACTION","Czynność");

define("_AM_NEWBB_PERM_TEMPLATE","Szablon uprawnień");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","Będzie zastosowany do nowego forum");
define("_AM_NEWBB_PERM_FORUMS","Wybierz fora");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","Szablon uprawnień został utworzony.");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","Nastąpił błąd podczas tworzenia szablonu uprawnień");
define("_AM_NEWBB_PERM_TEMPLATEAPP","zastosuj domyślne uprawnienia");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED","Domyślne uprawnienia zostały zastosowane");
define("_AM_NEWBB_PERM_ACTION","Zarządzanie uprawnieniami");
define("_AM_NEWBB_PERM_SETBYGROUP", "Ustaw uprawnienia bezpośrednio dla grup");

// admin_forum_prune.php

define ("_AM_NEWBB_PRUNE_RESULTS_TITLE","Wyniki oczyszczania");
define ("_AM_NEWBB_PRUNE_RESULTS_TOPICS","Oczyszczone wątki");
define ("_AM_NEWBB_PRUNE_RESULTS_POSTS","Oczyszczone posty");
define ("_AM_NEWBB_PRUNE_RESULTS_FORUMS","oczyszczone fora");
define ("_AM_NEWBB_PRUNE_STORE","Zachowaj posty w tym forum zamiast je usuwać");
define ("_AM_NEWBB_PRUNE_ARCHIVE","Skopiuj do archiwum");
define ("_AM_NEWBB_PRUNE_FORUMSELERROR","Nie wybrano forum do oczyszczenia");

define ("_AM_NEWBB_PRUNE_DAYS","Usuń wątki bez odpowiedzi od:");
define ("_AM_NEWBB_PRUNE_FORUMS","Fora do oczyszczenia");
define ("_AM_NEWBB_PRUNE_STICKY","Zachowaj wątki przyklejone");
define ("_AM_NEWBB_PRUNE_DIGEST","Zachowaj wątki w Przeglądach");
define ("_AM_NEWBB_PRUNE_LOCK","Zachowaj wątki zablokowane");
define ("_AM_NEWBB_PRUNE_HOT","Zachowaj wątki z odpowiedziami w liczbie większej niż");
define ("_AM_NEWBB_PRUNE_SUBMIT","Ok");
define ("_AM_NEWBB_PRUNE_RESET","Resetuj");
define ("_AM_NEWBB_PRUNE_YES","Tak");
define ("_AM_NEWBB_PRUNE_NO","Nie");
define ("_AM_NEWBB_PRUNE_WEEK","Tygodnia");
define ("_AM_NEWBB_PRUNE_2WEEKS","2 tygodni");
define ("_AM_NEWBB_PRUNE_MONTH","Miesiąca");
define ("_AM_NEWBB_PRUNE_2MONTH","2 miesięcy");
define ("_AM_NEWBB_PRUNE_4MONTH","4 miesięcy");
define ("_AM_NEWBB_PRUNE_YEAR","Roku");
define ("_AM_NEWBB_PRUNE_2YEARS","2 lat");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO', "Informacja o autorze");
define('_AM_NEWBB_AUTHOR_NAME', "Autor");
define('_AM_NEWBB_AUTHOR_WEBSITE', "Strona autora");
define('_AM_NEWBB_AUTHOR_EMAIL', "Email autora");
define('_AM_NEWBB_AUTHOR_CREDITS', "Podziękowania");
define('_AM_NEWBB_MODULE_INFO', "Informacja o rozwoju modułu");
define('_AM_NEWBB_MODULE_STATUS', "Status");
define('_AM_NEWBB_MODULE_DEMO', "Strona Demo");
define('_AM_NEWBB_MODULE_SUPPORT', "Oficjalna strona wsparcia");
define('_AM_NEWBB_MODULE_BUG', "Zgłoś błąd modułu");
define('_AM_NEWBB_MODULE_FEATURE', "Zaproponuj nową opcję w module");
define('_AM_NEWBB_MODULE_DISCLAIMER', "Objaśnienie");
define('_AM_NEWBB_AUTHOR_WORD', "Słowo od autora");
define('_AM_NEWBB_BY','przez');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA', "");
// admin_report.php
define("_AM_NEWBB_REPORTADMIN","Zarządzanie raportowanymi postami");
define("_AM_NEWBB_PROCESSEDREPORT","Przejrzyj przetworzone raporty");
define("_AM_NEWBB_PROCESSREPORT","Przetwórz raport");
define("_AM_NEWBB_REPORTTITLE","Tytuł raportu");
define("_AM_NEWBB_REPORTEXTRA","Extra info");
define("_AM_NEWBB_REPORTPOST","Raportowany post");
define("_AM_NEWBB_REPORTTEXT","Tekst");
define("_AM_NEWBB_REPORTMEMO","Przetwórz memo");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","Zarządzanie Przeglądami");
define("_AM_NEWBB_DIGESTCONTENT","Zawartość Przeglądów");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION", "Informacje o ankietach");
define("_AM_NEWBB_VOTE_TOTALVOTES", "wszystkich głosów: ");
define("_AM_NEWBB_VOTE_REGUSERVOTES", "w tym od zarejestrowanych: %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES", "w tym od anonimowych: %s");
define("_AM_NEWBB_VOTE_USER", "Użytkownik");
define("_AM_NEWBB_VOTE_IP", "Adres IP");
define("_AM_NEWBB_VOTE_USERAVG", "Średnia ocen");
define("_AM_NEWBB_VOTE_TOTALRATE", "Ocena ogólna");
define("_AM_NEWBB_VOTE_DATE", "Przesłano");
define("_AM_NEWBB_VOTE_RATING", "Oceny");
define("_AM_NEWBB_VOTE_NOREGVOTES", "Zarejestrowani użytkownicy jeszcze nie głosowali");
define("_AM_NEWBB_VOTE_NOUNREGVOTES", "Anonimowi użytkownicy jeszcze nie głosowali");
define("_AM_NEWBB_VOTEDELETED", "Dane ankiety skasowane.");
define("_AM_NEWBB_VOTE_ID", "ID");
define("_AM_NEWBB_VOTE_FILETITLE", "Tytuł wątku");
define("_AM_NEWBB_VOTE_DISPLAYVOTES", "Informacje o głosowaniach");
define("_AM_NEWBB_VOTE_NOVOTES", "Nie ma głosów do wyświetlenia");
define("_AM_NEWBB_VOTE_DELETE", "nie ma głosów do wyświetlenia");
define("_AM_NEWBB_VOTE_DELETEDSC", "<strong>Usuwa</strong> wybrane informacje z bazy danych.");

// admin_type_manager.php
define("_AM_NEWBB_TYPE_ADD", "Dodaj typy wątków");
define("_AM_NEWBB_TYPE_TEMPLATE", "Szablon typu");
define("_AM_NEWBB_TYPE_TEMPLATE_APPLY", "Akceptuj szablon");
define("_AM_NEWBB_TYPE_FORUM", "Typy dla danych dziłaów");
define("_AM_NEWBB_TYPE_NAME", "Nazwa typów");
define("_AM_NEWBB_TYPE_COLOR", "Kolor");
define("_AM_NEWBB_TYPE_DESCRIPTION", "Opis");
define("_AM_NEWBB_TYPE_ORDER", "Kolejność");
define("_AM_NEWBB_TYPE_LIST", "Lista typów");
define("_AM_NEWBB_TODEL_TYPE", "Czy na pewno chcesz usunąć: [%s]?");
define("_AM_NEWBB_TYPE_ORDER_DESC", "Aby aktywować typ dla forum, wartość pola kolejność musi być różna od zera. Jeżeli wartosć będzie ustawiona na zero - typ będzie nieaktywny.");

define("_MD_DBUPDATED", "Baza została zaktualizowana");
// admin_synchronization.php
define("_AM_NEWBB_SYNC_TYPE_FORUM", "Dane forum");
define("_AM_NEWBB_SYNC_TYPE_TOPIC", "Dane tematów");//ęłć
define("_AM_NEWBB_SYNC_TYPE_POST", "Dane postów");
define("_AM_NEWBB_SYNC_TYPE_USER", "Dane użytkowników");
define("_AM_NEWBB_SYNC_TYPE_STATS", "Informacje statystyk");
define("_AM_NEWBB_SYNC_TYPE_MISC", "Inne");

define("_AM_NEWBB_SYNC_ITEMS", "Ilość rekordów do przetworzenia: ");
?>