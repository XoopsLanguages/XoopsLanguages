<?php
// $Id: admin.php,v 1.1 2007/02/10 18:56:09 dap997 Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","Konfiguracja Forum");
define("_AM_NEWBB_ADDAFORUM","Dodaj Forum");
define("_AM_NEWBB_SYNCFORUM","Synchronizuj");
define("_AM_NEWBB_REORDERFORUM","Zmieñ kolejno¶æ");
define("_AM_NEWBB_FORUM_MANAGER","Fora");
define("_AM_NEWBB_PRUNE_TITLE","Oczy¶æ");
define("_AM_NEWBB_CATADMIN","Kategorie");
define("_AM_NEWBB_GENERALSET","Ustawienia" );
define("_AM_NEWBB_MODULEADMIN","Zarz±dzanie:");
define("_AM_NEWBB_HELP","Pomoc");
define("_AM_NEWBB_ABOUT","Informacja");
define("_AM_NEWBB_BOARDSUMMARY","Statystyki");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","Posty oczekuj±ce na zatwierdzenie.");
define("_AM_NEWBB_POSTID","ID");
define("_AM_NEWBB_POSTDATE","Data dodania");
define("_AM_NEWBB_POSTER","Autor");
define("_AM_NEWBB_TOPICS","Tematy");
define("_AM_NEWBB_SHORTSUMMARY","Podsumowanie");
define("_AM_NEWBB_TOTALPOSTS","Wszystkich postów");
define("_AM_NEWBB_TOTALTOPICS","Wszystkich w±tków");
define("_AM_NEWBB_TOTALVIEWS","Wszystkich odwiedzin");
define("_AM_NEWBB_BLOCKS","Bloki");
define("_AM_NEWBB_SUBJECT","Temat");
define("_AM_NEWBB_APPROVE","Zatwierd¼ post");
define("_AM_NEWBB_APPROVETEXT","Zawarto¶æ tej wiadomo¶ci");
define("_AM_NEWBB_POSTAPPROVED","Post zosta³ zatwierdzony");
define("_AM_NEWBB_POSTNOTAPPROVED","Post NIE zosta³ zatwierdzony");
define("_AM_NEWBB_POSTSAVED","Post zosta³ zapisany");
define("_AM_NEWBB_POSTNOTSAVED","Post nie zosta³ zapisany");

define("_AM_NEWBB_TOPICAPPROVED","W±tek zosta³ zaakceptowany");
define("_AM_NEWBB_TOPICNOTAPPROVED","W±tek nie zosta³ zaakceptowany");
define("_AM_NEWBB_TOPICID","ID W±tku");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","Autoryzacja niezatwierdzonych w±tków");


define('_AM_NEWBB_DEL_ONE','Usuñ tylko t± wiadomo¶æ');
define('_AM_NEWBB_POSTSDELETED','Wybrany post zosta³ usuniêty.');
define('_AM_NEWBB_NOAPPROVEPOST','Aktualnie nie ma postów oczekuj±cych na zatwierdzenie.');
define('_AM_NEWBB_SUBJECTC','Tytu³:');
define('_AM_NEWBB_MESSAGEICON','Ikona wiadomo¶ci:');
define('_AM_NEWBB_MESSAGEC','Tre¶æ:');
define('_AM_NEWBB_CANCELPOST','Zrezygnuj');
define('_AM_NEWBB_GOTOMOD','Id¼ do modu³u');

define('_AM_NEWBB_PREFERENCES','Ustawienia Modu³u');
define('_AM_NEWBB_POLLMODULE','Modu³ Ankiet Xoops');
define('_AM_NEWBB_POLL_OK','Gotowy do u¿ycia');
define('_AM_NEWBB_GDLIB1','Biblioteka GD1:');
define('_AM_NEWBB_GDLIB2','Biblioteka GD2:');
define('_AM_NEWBB_AUTODETECTED','Autodetekcja: ');
define('_AM_NEWBB_AVAILABLE','Dostêpna');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Niedostêpna</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">Chroniony przed zapisem</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','Nie ustawione');
define('_AM_NEWBB_ATTACHPATH','¦cie¿ka do przechowywania za³±czników');
define('_AM_NEWBB_THUMBPATH','¦ciezka do przechowywania miniaturek obrazów');
//define('_AM_NEWBB_RSSPATH','Path for RSS feed');
define('_AM_NEWBB_REPORT','Raportowane posty');
define('_AM_NEWBB_REPORT_PENDING','Raport oczekuj±cy');
define('_AM_NEWBB_REPORT_PROCESSED','raport przetworzony');

define('_AM_NEWBB_CREATETHEDIR','Utwórz');
define('_AM_NEWBB_SETMPERM','Ustaw uprawnienia');
define('_AM_NEWBB_DIRCREATED','Katalog zosta³ utworzony');
define('_AM_NEWBB_DIRNOTCREATED','Katalog nie móg³ zostac utworzony');
define('_AM_NEWBB_PERMSET','Uprawnienia zosta³y nadane');
define('_AM_NEWBB_PERMNOTSET','nie mo¿na by³o nadaæ uprawnieñ');

define('_AM_NEWBB_DIGEST','Powiadomienie o Przegl±dzie');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Powinno zostaæ wys³ane %d minut temu</font>');
define('_AM_NEWBB_DIGEST_NEXT','Trzeba wys³aæ za %d minut');
define('_AM_NEWBB_DIGEST_ARCHIVE','Archiwum Przegl±dów');
define('_AM_NEWBB_DIGEST_SENT','Przegl±d zosta³ utworzony i opublikowany');
define('_AM_NEWBB_DIGEST_FAILED','Nie utworzono przegl±du!');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","Nazwa");
define("_AM_NEWBB_CREATEFORUM","Utwórz Forum");
define("_AM_NEWBB_EDIT","Edytuj");
define("_AM_NEWBB_CLEAR","Wyczy¶æ");
define("_AM_NEWBB_DELETE","Kasuj");
define("_AM_NEWBB_ADD","Dodaj");
define("_AM_NEWBB_MOVE","Przenie¶");
define("_AM_NEWBB_ORDER","Kolejno¶æ");
define("_AM_NEWBB_TWDAFAP","Uwaga: Ta operacja spowoduje usuniêcie tego forum i wszystkich postów w nim umieszczonych.<br /><br />Czy jeste¶ pewien, ¿e chcesz usun±æ to Forum?");
define("_AM_NEWBB_FORUMREMOVED","Forum Usuniêto.");
define("_AM_NEWBB_CREATENEWFORUM","Stwórz Nowe Forum");
define("_AM_NEWBB_EDITTHISFORUM","Edycja forum:");
define("_AM_NEWBB_SET_FORUMORDER","Ustaw kolejno¶æ:");
define("_AM_NEWBB_ALLOWPOLLS","Zezwól na ankiety:");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Maksymalny rozmiar w kB:");
define("_AM_NEWBB_ALLOWED_EXTENSIONS","Dozwolone rozszerzenia:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' oznacza brak ograniczeñ.<br /> Rozszerzenia oddzielaj '|'</span>");
define("_AM_NEWBB_ALLOW_ATTACHMENTS","Dopuszczaj za³±czniki:");
define("_AM_NEWBB_ALLOWHTML","Dopuszczaj HTML:");
define("_AM_NEWBB_YES","Tak");
define("_AM_NEWBB_NO","Nie");
define("_AM_NEWBB_ALLOWSIGNATURES","Dopuszczaj sygnatury:");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","Próg gor±cego w±tku:");
//define("_AM_NEWBB_POSTPERPAGE","Posts per Page:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of posts<br /> per topic that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM","Topics per Forum:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of topics<br /> per forum that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_SHOWNAME","Replace user's name with real name:");
//define("_AM_NEWBB_SHOWICONSPANEL","Show icons panel:");
//define("_AM_NEWBB_SHOWSMILIESPANEL","Show smilies panel:");
define("_AM_NEWBB_MODERATOR_REMOVE","Usuñ aktualnych moderatorów");
define("_AM_NEWBB_MODERATOR_ADD","Dodaj moderatorów");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX","Zezwól na prefixy w tytu³ach w±tków");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC","Dopuszczasz prefixy wyró¿niaj±ce tematykê w±tku");


// admin_cat_manager.php

define("_AM_NEWBB_SETCATEGORYORDER","Ustaw pozycjê kategorii:");
define("_AM_NEWBB_ACTIVE","Aktywny");
define("_AM_NEWBB_INACTIVE","Nieaktywny");
define("_AM_NEWBB_STATE","Status:");
define("_AM_NEWBB_CATEGORYDESC","Opis kategorii:");
define("_AM_NEWBB_SHOWDESC","Wy¶wietlaæ opis?");
define("_AM_NEWBB_IMAGE","Obrazek:");
//define("_AM_NEWBB_SPONSORIMAGE","Sponsor Image:");
define("_AM_NEWBB_SPONSORLINK","Odno¶nik sponsora:");
define("_AM_NEWBB_DELCAT","Usuñ kategoriê");
define("_AM_NEWBB_WAYSYWTDTTAL","Uwaga: Ta operacja nie spowoduje usuniêcia Forów znajduj±cych siê w tej kategorii. Fora musisz usuwaæ z poziomu sekcji administracji forów.<br /><br />Ostrze¿enie: Czy na pewno chcesz usun±æ t± kategoriê?");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","Nazwa forum:");
define("_AM_NEWBB_FORUMDESCRIPTION","Opis forum:");
define("_AM_NEWBB_MODERATOR","Moderator(rzy):");
define("_AM_NEWBB_REMOVE","Usuñ");
define("_AM_NEWBB_CATEGORY","Kategoria:");
define("_AM_NEWBB_DATABASEERROR","B³±d bazy danych");
define("_AM_NEWBB_CATEGORYUPDATED","Kategoria uaktualniona.");
define("_AM_NEWBB_EDITCATEGORY","Edycja kategorii:");
define("_AM_NEWBB_CATEGORYTITLE","Tytu³ kategorii:");
define("_AM_NEWBB_CATEGORYCREATED","Kategoria Utworzona.");
define("_AM_NEWBB_CREATENEWCATEGORY","Utworzenie nowej kategorii");
define("_AM_NEWBB_FORUMCREATED","Forum utworzone.");
define("_AM_NEWBB_ACCESSLEVEL","Ogólny poziom dostêpu:");
define("_AM_NEWBB_CATEGORY1","Kategoria");
define("_AM_NEWBB_FORUMUPDATE","Ustawienia forum uaktualnione ");
define("_AM_NEWBB_FORUM_ERROR","B£¡D: B³±d ustawieñ forum");
define("_AM_NEWBB_CLICKBELOWSYNC","Klikaj±c na przycisk poni¿ej uruchomisz proces synchronizacji danych w bazie. Operacja wskazana gdy zauwazysz b³edy w powi±zaniach danych i tre¶ci na forum.");
define("_AM_NEWBB_SYNCHING","Trwa synchronizacja kategorii i watków. (To mo¿e potrwac chwilê)");
define("_AM_NEWBB_CATEGORYDELETED","Kategoria usuniêta.");
define("_AM_NEWBB_MOVE2CAT","Przenie¶ do kategorii:");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","Utwórz sub-forum w:");
define("_AM_NEWBB_MSG_FORUM_MOVED","Forum przeniesione!");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","Nie uda³o siê przenie¶æ forum.");
define("_AM_NEWBB_SELECT","< Wybierz >");
define("_AM_NEWBB_MOVETHISFORUM","Przenie¶ to Forum");
define("_AM_NEWBB_MERGE","£±czenie");
define("_AM_NEWBB_MERGETHISFORUM","Po³±cz to forum");
define("_AM_NEWBB_MERGETO_FORUM","Po³±cz to forum z:");
define("_AM_NEWBB_MSG_FORUM_MERGED","Forum po³±czono!");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","Nie uda³o siê po³±czyæ forum.");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID","ID");
define("_AM_NEWBB_REORDERTITLE","Tytu³");
define("_AM_NEWBB_REORDERWEIGHT","Pozycja");
define("_AM_NEWBB_SETFORUMORDER","Ustaw kolejno¶æ forum");
define("_AM_NEWBB_BOARDREORDER","Kolejno¶æ zmieniona wed³ug zaleceñ");

// admin_permission.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","Uprawnienia w±tków na tym forum");
define("_AM_NEWBB_CAT_ACCESS","Dostêp do kategorii");
define("_AM_NEWBB_CAN_ACCESS","Udostêpniona");
define("_AM_NEWBB_CAN_VIEW","Mo¿e ogl±daæ");
define("_AM_NEWBB_CAN_POST","Mo¿e rozpoczynaæ nowe w±tki");
define("_AM_NEWBB_CAN_REPLY","Mo¿e odpisywaæ");
define("_AM_NEWBB_CAN_EDIT","Mo¿e edytowaæ");
define("_AM_NEWBB_CAN_DELETE","Mo¿e kasowaæ");
define("_AM_NEWBB_CAN_ADDPOLL","Mo¿e dodawaæ ankiety");
define("_AM_NEWBB_CAN_VOTE","Mo¿e g³osowaæ");
define("_AM_NEWBB_CAN_ATTACH","Mo¿e dodawaæ za³±czniki");
define("_AM_NEWBB_CAN_NOAPPROVE","Mo¿e pisac bez zatwierdzania");

define("_AM_NEWBB_ACTION","Czynno¶æ");

define("_AM_NEWBB_PERM_TEMPLATE","Szablon uprawnieñ");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","Bêdzie zastosowany do nowego forum");
define("_AM_NEWBB_PERM_FORUMS","Wybierz fora");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","Szablon uprawnieñ zosta³ utworzony.");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","Nast±pi³ b³±d podczas tworzenia szablonu uprawnieñ");
define("_AM_NEWBB_PERM_TEMPLATEAPP","zastosuj domy¶lne uprawnienia");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED","Domy¶lne uprawnienia zosta³y zastosowane");
define("_AM_NEWBB_PERM_ACTION","Zarz±dzanie uprawnieniami");
define("_AM_NEWBB_PERM_SETBYGROUP","Ustaw uprawnienia bezpo¶rednio dla grup");

// admin_forum_prune.php

define("_AM_NEWBB_PRUNE_RESULTS_TITLE","Wyniki oczyszczania");
define("_AM_NEWBB_PRUNE_RESULTS_TOPICS","Oczyszczone w±tki");
define("_AM_NEWBB_PRUNE_RESULTS_POSTS","Oczyszczone posty");
define("_AM_NEWBB_PRUNE_RESULTS_FORUMS","oczyszczone fora");
define("_AM_NEWBB_PRUNE_STORE","Zachowaj posty w tym forum zamiast je usuwaæ");
define("_AM_NEWBB_PRUNE_ARCHIVE","Skopiuj do archiwum");
define("_AM_NEWBB_PRUNE_FORUMSELERROR","Nie wybrano forum do oczyszczenia");

define("_AM_NEWBB_PRUNE_DAYS","Usuñ w±tki bez odpowiedzi od:");
define("_AM_NEWBB_PRUNE_FORUMS","Fora do oczyszczenia");
define("_AM_NEWBB_PRUNE_STICKY","Zachowaj w±tki przyklejone");
define("_AM_NEWBB_PRUNE_DIGEST","Zachowaj w±tki w Przegl±dach");
define("_AM_NEWBB_PRUNE_LOCK","Zachowaj w±tki zablokowane");
define("_AM_NEWBB_PRUNE_HOT","Zachowaj w±tki z odpowiedziami w liczbie wiêkszej ni¿");
define("_AM_NEWBB_PRUNE_SUBMIT","Ok");
define("_AM_NEWBB_PRUNE_RESET","Resetuj");
define("_AM_NEWBB_PRUNE_YES","Tak");
define("_AM_NEWBB_PRUNE_NO","Nie");
define("_AM_NEWBB_PRUNE_WEEK","Tygodnia");
define("_AM_NEWBB_PRUNE_2WEEKS","2 tygodni");
define("_AM_NEWBB_PRUNE_MONTH","Miesi±ca");
define("_AM_NEWBB_PRUNE_2MONTH","2 miesiêcy");
define("_AM_NEWBB_PRUNE_4MONTH","4 miesiêcy");
define("_AM_NEWBB_PRUNE_YEAR","Roku");
define("_AM_NEWBB_PRUNE_2YEARS","2 lat");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO',"Informacja o autorze");
define('_AM_NEWBB_AUTHOR_NAME',"Autor");
define('_AM_NEWBB_AUTHOR_WEBSITE',"Strona autora");
define('_AM_NEWBB_AUTHOR_EMAIL',"Email autora");
define('_AM_NEWBB_AUTHOR_CREDITS',"Podziêkowania");
define('_AM_NEWBB_MODULE_INFO',"Informacja o rozwoju modu³u");
define('_AM_NEWBB_MODULE_STATUS',"Status");
define('_AM_NEWBB_MODULE_DEMO',"Strona Demo");
define('_AM_NEWBB_MODULE_SUPPORT',"Oficjalna strona wsparcia");
define('_AM_NEWBB_MODULE_BUG',"Zg³o¶ b³±d modu³u");
define('_AM_NEWBB_MODULE_FEATURE',"Zaproponuj now± opcjê w module");
define('_AM_NEWBB_MODULE_DISCLAIMER',"Obja¶nienie");
define('_AM_NEWBB_AUTHOR_WORD',"S³owo od autora");
define('_AM_NEWBB_BY','przez');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA',"");
// admin_report.php
define("_AM_NEWBB_REPORTADMIN","Zarz±dzanie raportowanymi postami");
define("_AM_NEWBB_PROCESSEDREPORT","Przejrzyj przetworzone raporty");
define("_AM_NEWBB_PROCESSREPORT","Przetwórz raport");
define("_AM_NEWBB_REPORTTITLE","Tytu³ raportu");
define("_AM_NEWBB_REPORTEXTRA","Extra info");
define("_AM_NEWBB_REPORTPOST","Raportowany post");
define("_AM_NEWBB_REPORTTEXT","Tekst");
define("_AM_NEWBB_REPORTMEMO","Przetwórz memo");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","Zarz±dzanie Przegl±dami");
define("_AM_NEWBB_DIGESTCONTENT","Zawarto¶æ Przegl±dów");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION","Informacje o ankietach");
define("_AM_NEWBB_VOTE_TOTALVOTES","wszystkich g³osów: ");
define("_AM_NEWBB_VOTE_REGUSERVOTES","w tym od zarejestrowanych: %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES","w tym od anonimowych: %s");
define("_AM_NEWBB_VOTE_USER","U¿ytkownik");
define("_AM_NEWBB_VOTE_IP","Adres IP");
define("_AM_NEWBB_VOTE_USERAVG","¦rednia ocen");
define("_AM_NEWBB_VOTE_TOTALRATE","Ocena ogólna");
define("_AM_NEWBB_VOTE_DATE","Przes³ano");
define("_AM_NEWBB_VOTE_RATING","Oceny");
define("_AM_NEWBB_VOTE_NOREGVOTES","Zarejestrowani u¿ytkownicy jeszcze nie g³osowali");
define("_AM_NEWBB_VOTE_NOUNREGVOTES","Anonimowi u¿ytkownicy jeszcze nie g³osowali");
define("_AM_NEWBB_VOTEDELETED","Dane ankiety skasowane.");
define("_AM_NEWBB_VOTE_ID","ID");
define("_AM_NEWBB_VOTE_FILETITLE","Tytu³ w±tku");
define("_AM_NEWBB_VOTE_DISPLAYVOTES","Informacje o g³osowaniach");
define("_AM_NEWBB_VOTE_NOVOTES","Nie ma g³osów do wy¶wietlenia");
define("_AM_NEWBB_VOTE_DELETE","nie ma g³osów do wy¶wietlenia");
define("_AM_NEWBB_VOTE_DELETEDSC","<strong>Usuwa</strong> wybrane informacje z bazy danych.");

// admin_type_manager.php
define("_AM_NEWBB_TYPE_ADD","Dodaj typy w±tków");
define("_AM_NEWBB_TYPE_TEMPLATE","Szablon typu");
define("_AM_NEWBB_TYPE_TEMPLATE_APPLY","Akceptuj szablon");
define("_AM_NEWBB_TYPE_FORUM","Typy dla danych dzi³aów");
define("_AM_NEWBB_TYPE_NAME","Nazwa typów");
define("_AM_NEWBB_TYPE_COLOR","Kolor");
define("_AM_NEWBB_TYPE_DESCRIPTION","Opis");
define("_AM_NEWBB_TYPE_ORDER","Kolejno¶æ");
define("_AM_NEWBB_TYPE_LIST","Lista typów");
define("_AM_NEWBB_TODEL_TYPE","Czy na pewno chcesz usun±æ: [%s]?");
define("_AM_NEWBB_TYPE_ORDER_DESC","Aby aktywowaæ typ dla forum, warto¶æ pola kolejno¶æ musi byæ ró¿na od zera. Je¿eli wartosæ bêdzie ustawiona na zero - typ bêdzie nieaktywny.");

define("_MD_DBUPDATED","Baza zosta³a zaktualizowana");
// admin_synchronization.php
define("_AM_NEWBB_SYNC_TYPE_FORUM","Dane forum");
define("_AM_NEWBB_SYNC_TYPE_TOPIC","Dane tematów");//ê³æ
define("_AM_NEWBB_SYNC_TYPE_POST","Dane postów");
define("_AM_NEWBB_SYNC_TYPE_USER","Dane u¿ytkowników");
define("_AM_NEWBB_SYNC_TYPE_STATS","Informacje statystyk");
define("_AM_NEWBB_SYNC_TYPE_MISC","Inne");

define("_AM_NEWBB_SYNC_ITEMS","Ilo¶æ rekordów do przetworzenia: ");
?>