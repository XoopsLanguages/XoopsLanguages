<?php

/**
* $Id: modinfo.php,v 1.4 2006/01/25 21:20:42 dap997 Exp $
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
14092005 dap rc1 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME"                    , "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC"                    , "Zaawansowany system do zarządzania pytaniami i odpowiedziami dla portalu XOOPS");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1"                , "Wyślij - Pytania i Odpowiedzi -");
define("_MI_SF_SUB_SMNAME2"                , "Żądaj - Pytania i Odpowiedzi -");
define("_MI_SF_SUB_SMNAME3"                , "Pytania bez odpowiedzi ");
define("_MI_SF_SUB_SMNAME4"                , "Sprawdź - Pytania i Odpowiedzi -");

// Config options
define("_MI_SF_ALLOWSUBMIT"                , "Nadesłane przez użytkowników:");
define("_MI_SF_ALLOWSUBMITDSC"             , "Pozwolić użytkownikom na nadsyłanie - Pytania i Odpowiedzi -?");

define("_MI_SF_ALLOWREQUEST"               , "Żądanie użytkowników:");
define("_MI_SF_ALLOWREQUESTDSC"            , "Pozwolić użytkownikom na wysyłanie żądań z - Pytania i Odpowiedzi -?");

define("_MI_SF_NEWANSWER"                  , "Pozwolić na wysyłanie nowych odpowiedzi:");
define("_MI_SF_NEWANSWERDSC"               , "Wybierz 'Tak' aby pozwolić na nadsyłanie nowych odpowiedzi dla - Pytania i Odpowiedzi -, które już je mają.");

define("_MI_SF_ANONPOST"                   , "Pozwolić na anonimowe postowanie");
define("_MI_SF_ANONPOSTDSC"                , "Pozwolić anonimowym użytkownikom na nadsyłanie i wysyłanie żądań - Pytania i Odpowiedzi -.");

define('_MI_SF_DATEFORMAT'                 , 'Format daty:');
define('_MI_SF_DATEFORMATDSC'              , 'Użyj końcowej części pliku language/english/global.php aby zdefiniować sposób wyświetlania daty. Na przykład format: "d-M-Y H:i" wyświetli datę w następujący sposób "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS'            , 'Wyświetlić rozwijane belki');
define('_MI_SF_DISPLAY_COLLAPSDSC'         , "Wybierz 'Tak' aby wyświetlić rozwijane belki na stronie indeksowej i kategorii.");

define('_MI_SF_DISPLAYTYPE'                , "Sposób wyświetlania - Pytania i Odpowiedzi -:");
define('_MI_SF_DISPLAYTYPEDSC'             , "W 'Widoku sumarycznym' wyświetlane jest tylko pytanie, data i ilość odwiedziń dla każdego - Pytania i Odpowiedzi -. W 'Widoku pełnym' każde - Pytania i Odpowiedzi - będzie w pełni wyświetlone w wybranej kategorii.");
define('_MI_SF_DISPLAYTYPE_SUMMARY'        , "Widok sumaryczny");
define('_MI_SF_DISPLAYTYPE_FULL'           , "Widok pełny");

define('_MI_SF_DISPLAY_LAST_FAQ'           , 'Wyświetlić kolumne ostatniego - Pytania i Odpowiedzi -?');
define('_MI_SF_DISPLAY_LAST_FAQDSC'        , "Wybierz 'Tak' aby wyświetlić ostatnie - Pytania i Odpowiedzi - dla danej kategorii na stronie indeksowej i stronie kategorii.");

define('_MI_SF_DISPLAY_LAST_FAQS'          , 'Wyświetlić listę ostatnich - Pytania i Odpowiedzi -?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC'       , "Wybierz 'Tak' aby wyświetlić liste ostatnich - Pytania i Odpowiedzi - na stronie indeksowej.");

define('_MI_SF_LAST_FAQ_SIZE'              , 'Długość ostatniego - Pytania i Odpowiedzi -:');
define('_MI_SF_LAST_FAQ_SIZEDSC'           , "Ustaw maksymalną długość pytania w kolumnie ostatniego - Pytania i Odpowiedzi -.");

define('_MI_SF_QUESTION_SIZE'              , "Długość pytania:");
define('_MI_SF_QUESTION_SIZEDSC'           , "Ustaw maksymalną długość pytania jako tytuł na stronie z pojedynczym - Pytania i Odpowiedzi -.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX'       , 'Wyświetlić listę podkategorii na stronie indeksowej');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC'    , "Wybierz 'Tak' aby wyświetlić listę podkategorii na stronie indeksowej.");

define('_MI_SF_DISPLAY_TOPCAT_DSC'         , 'Wyświetlić opis głównych kategorii?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC'      , "Wybierz 'Tak' aby wyświetlić opis głównych kategorii na stronie indeksowej i kategorii.");

define('_MI_SF_DISPLAY_SBCAT_DSC'          , 'Wyświetlić opis podkategorii?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC'       , "Wybierz 'Tak' aby wyświetlić opis podkategorii na stronie indeksowej i kategorii.");

define('_MI_SF_ORDERBYDATE'                , 'Wyświetlać - Pytania i Odpowiedzi - według daty:');
define('_MI_SF_ORDERBYDATEDSC'             , 'Wybierz "Tak" aby wyświetlić - Pytania i Odpowiedzi -s w kategorii według daty, w innym przypadku będzie użyta ich waga.');

define('_MI_SF_DISPLAY_DATE_COL'           , "Wyświetlić kolumnę 'Opublikowane'?");
define('_MI_SF_DISPLAY_DATE_COLDSC'        , "Jeśli używasz 'Widoku sumarycznego' wybierz 'Tak' aby pokazać datę opublikowania w tabeli - Pytania i Odpowiedzi - na stronie indeksowej i kategorii.");

define('_MI_SF_DISPLAY_HITS_COL'           , "Wyświetlić kolumnę 'Odwiedzin'?");
define('_MI_SF_DISPLAY_HITS_COLDSC'        , "Jeśli używasz 'Widoku sumarycznego' wybierz 'Tak' aby pokazać ilość 'Odwiedzin' w tabeli - Pytania i Odpowiedzi - na stronie indeksowej i kategorii.");

define('_MI_SF_USEIMAGENAVPAGE'            , 'Wyświetlić obrazki dla nawigacji:');
define('_MI_SF_USEIMAGENAVPAGEDSC'         , 'Wybierz "Tak" aby nawigacja była wyświetlana z obrazkami w przeciwnym razie zostanie użyta oryginalna nawigacja.');

define('_MI_SF_ALLOWCOMMENTS'              , 'Kontrola komentarzy na poziomie - Pytania i Odpowiedzi -:');
define('_MI_SF_ALLOWCOMMENTSDSC'           , 'Wybierz "Tak" aby wiedzieć komentarze tylko dla - Pytania i Odpowiedzi -, które mają wybrany checkbox z tą opcją.<br /> Wybierz "Nie" aby komentarze były zarządzane na poziomie globalnym (zobacz też punkt "Zasady komentowania".');

define('_MI_SF_ALLOWADMINHITS'             , 'Liczenia odwiedziń administratora:');
define('_MI_SF_ALLOWADMINHITSDSC'          , 'Dodawać odwiedziny administartora do licznika odwiedzin?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ'        , 'Automatyczne zatwierdzanie - Pytania i Odpowiedzi -:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC'    , 'Automatyczne zatwierdzanie - Pytania i Odpowiedzi - bez żadnego działania administratora.');

define('_MI_SF_AUTOAPPROVE_REQUEST'        , 'Automatyczne zatwierdzanie żądań:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC'    , 'Automatyczne zatwierdzanie żądań bez żadnego działania administratora.');

define('_MI_SF_AUTOAPPROVE_ANS'            , 'Automatyczne zatwierdzanie odpowiedzi:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC'        , 'Automatyczne zatwierdzanie odpowiedzi dla pytań, które ich nie posiadają, bez żadnego działania administratora.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW'        , 'Automatyczne zatwierdzanie nowych odpowiedzi:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC'    , 'Automatyczne zatwierdzanie nowych odpowiedzi dla opublikowanych - Pytania i Odpowiedzi -.');

define('_MI_SF_LASTFAQSPERCAT'             , 'Maksymalna ilość - Pytania i Odpowiedzi - w kategorii:');
define('_MI_SF_LASTFAQSPERCATDSC'          , 'Maksymalna ilość - Pytania i Odpowiedzi - w kolumnie Informacje dla danej kategorii.');

define('_MI_SF_CATPERPAGE'                 , 'Maksymalna ilość kategorii na stronie (dla użytkowników):');
define('_MI_SF_CATPERPAGEDSC'              , 'Maksymalna ilość głównych kategorii na stronie widocznych dla użytkownika.');

define('_MI_SF_PERPAGE'                    , 'Maksymalna ilość kategorii na stronie (dla administratorów):');
define('_MI_SF_PERPAGEDSC'                 , 'Maksymalna ilość głównych kategorii na stronie widocznych dla użytkownika');

define('_MI_SF_PERPAGEINDEX'               , 'Maksymalna ilość - Pytania i Odpowiedzi - na stronie (dla użytkowników) :');
define('_MI_SF_PERPAGEINDEXDSC'            , 'Maksymalna ilość - Pytania i Odpowiedzi - na stronie widocznych dla użytkownika.');

define('_MI_SF_INDEXWELCOMEMSG'            , 'Powitanie na stronie indeksowej:');
define('_MI_SF_INDEXWELCOMEMSGDSC'         , 'Powitalna wiadomość na stronie indeksowej modułu.');
define('_MI_SF_INDEXWELCOMEMSGDEF'         , "W tej części strony znajdziesz odpowiedzi na często zadawane pytania, a także na pytania <b>Jak to zrobić...? </b> oraz na  <b>Czy wiesz, że... ? </b>. Proszę poczuj się zaproszony do komentowania oraz zadawania - Pytania i Odpowiedzi -."); 

define('_MI_SF_REQUESTINTROMSG'            , 'Powitanie na stronie z żądaniem:');
define('_MI_SF_REQUESTINTROMSGDSC'         , 'Informacje wprowadzająca wyświetlana na stronie Żądaj nowego - Pytania i Odpowiedzi -.');
define('_MI_SF_REQUESTINTROMSGDEF'         , "Nie znalazłeś odpowiedzi której poszukiwałeś? To nie jest problem! Wypełnij poniższy formularz aby wysłać żądanie odpowiedzi dla nowego pytania. Administrator sprawdzi twoje żądanie i opublikuje nowe pytanie w sekcji pytań bez odpowiedzi a być może ktoś opublikuje odpowiedź!"); 

define('_MI_SF_OPENINTROMSG'               , 'Powitanie na stronie z pytaniami bez odpowiedzi:');
define('_MI_SF_OPENINTROMSGDSC'            , 'Informacje wprowadzająca wyświetlana na stronie z pytaniami bez odpowiedzi.');
define('_MI_SF_OPENINTROMSGDEF'            , "Lista pytań bez odpowiedzi to jest pytań nadesłanych przez użytkowników, które nie posiadają jednak odpowiedzi. Jeśli chcesz nam pomóc możesz kliknąć na pytanie i udzielić odpowiedzi."); 

define('_MI_SF_USEREALNAME'                , 'Używać prawdziwych imion');
define('_MI_SF_USEREALNAMEDSC'             , 'Podczas wyświetlania imienia użyć prawdziwego imienia o ile użytkownik je podał.');

define('_MI_SF_HELP_PATH_SELECT'           , "Ścieżka do plików pomocy dla SmartFAQ");
define('_MI_SF_HELP_PATH_SELECT_DSC'       , "Wybierz sposób dostępu do plików pomocy dla SmartFAQ. Jeśli ściągnąłeś 'Pakiet pomocy dla SmartFAQ' i zapisałeś je w katalogu 'modules/smartfaq/doc/', możesz wybrać opcję 'Wewnątrz modułu'. Możesz też użyć plików pomocy bezpośrednio ze docs.xoops.org o ile wybierzesz tę opcję. Możesz też wybrać 'Własna ścieżkę' i wskazać ścieżkę do katalogu, który sam wybrałeś w następnej opcji konfiguratora 'Własna ścieżka do plików pomocy SmartFAQ");

define('_MI_SF_HELP_PATH_CUSTOM'           , "Własna ścieżka do plików pomocy ");
define('_MI_SF_HELP_PATH_CUSTOM_DSC'       , "O ile we wcześniejszej opcji wybrałes opcje 'Własna ścieżka', podaj tu URL do plików pomocy dla SmartFAQ, w formacie: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE'                , "Wewnątrz modułu");
define('_MI_SF_HELP_CUSTOM'                , "Własna ścieżka");

//define('_MI_SF_MODERATORSEDIT'           , 'Pozwolić moderatorom na wprowadzanie zmian (rozszerzenie uprawnień)');
//define('_MI_SF_MODERATORSEDITDSC'        , 'Ta opcja pozwala moderatorom na zmienianie pytań i - Pytania i Odpowiedzi - w kategorii, która moderują. Bez niej moderatorzy będą mogli tylko zatwierdzać i odrzucać pytania oraz - Pytania i Odpowiedzi -.');

// Names of admin menu items
define("_MI_SF_ADMENU1"                    , "Indeks");
define("_MI_SF_ADMENU2"                    , "Kategorie");
define("_MI_SF_ADMENU3"                    , "- Pytania i Odpowiedzi -");
define("_MI_SF_ADMENU4"                    , "Pytania");
define("_MI_SF_ADMENU5"                    , "Prawa");
define("_MI_SF_ADMENU6"                    , "Bloki i grupy");
define("_MI_SF_ADMENU7"                    , "Idź do modułu");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW"                    , "Lista ostatnich - Pytania i Odpowiedzi - ");
define("_MI_SF_ARTSRANDOM_DIDUNO"          , "Czy wiesz, że... ?");
define("_MI_SF_ARTSRANDOM_FAQ"             , "Losowe pytanie!");
define("_MI_SF_ARTSRANDOM_HOW"             , "Jak to zrobić...?");
define("_MI_SF_ARTSCONTEXT"                , "Kontekstowe - Pytania i Odpowiedzi -");
define("_MI_SF_RECENTFAQS"                 , "Ostatnie - Pytania i Odpowiedzi - (detale)");
define("_MI_SF_RECENT_QUESTIONS"           , "Ostatnie pytania bez odpowiedzi");
define("_MI_SF_MOST_VIEWED"                , "Najczęściej oglądane - Pytania i Odpowiedzi -");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY'          , 'Globalne - Pytania i Odpowiedzi -');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC'      , 'Opcje powiadamienia dla wszystkich - Pytania i Odpowiedzi -.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY'        , 'Kategorie - Pytania i Odpowiedzi -');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC'    , 'Opcje powiadamienia dla danej kategorii.');

define('_MI_SF_FAQ_NOTIFY'                 , '- Pytania i Odpowiedzi -');
define('_MI_SF_FAQ_NOTIFY_DSC'             , 'Opcje powiadamienia dla danego - Pytania i Odpowiedzi -.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY'                 , 'Globalne pytania bez odpowiedzi');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC'             , 'Opcje powiadamienia dla wszystkich pytań bez odpowiedzi');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY'               , 'Kategorie - Pytania i Odpowiedzi -');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC'           , 'Opcje powiadamienia dla danej kategorii.');

define('_MI_SF_QUESTION_NOTIFY'                        , 'Pytanie bez odpowiedzi');
define('_MI_SF_QUESTION_NOTIFY_DSC'                    , 'Opcje powiadamienia dla danego pytanie bez odpowiedzi.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY'     , 'Nowa kategoria');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP' , 'Powiadom mnie gdy zostanie utworzona nowa kategoria.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC' , 'Otrzymaj powiadomienie gdy zostanie utworzona nowa kategoria.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ' , '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie: Nowa kategoria');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY'            , 'Dodanie - Pytania i Odpowiedzi - ');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP'        , 'Powiadom mnie gdy zostanie dodane - Pytania i Odpowiedzi - i oczekuje na zatwierdzenie.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC'        , 'Otrzymaj powiadomienie gdy zostanie dodane - Pytania i Odpowiedzi - i oczekuje na zatwierdzenie.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ'        , '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie: Dodano nowe - Pytania i Odpowiedzi -');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY'            , 'Opublikowano nowe - Pytania i Odpowiedzi - ');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP'        , 'Powiadom mnie gdy zostanie opublikowane nowe - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC'        , 'Otrzymaj powiadomienie gdy zostanie opublikowane nowe - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ'        , '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie: Opublikowano nowe New - Pytania i Odpowiedzi -');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'New answer proposed');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Notify me when a new answer is proposed for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Receive notification when a new answer is proposed for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'New answer published');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Notify me when a new answer is published for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Receive notification when a new answer is published for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer published');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', '- Pytania i Odpowiedzi - submitted');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Notify me when a new - Pytania i Odpowiedzi - is submitted in the current category.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Receive notification when a new - Pytania i Odpowiedzi - is submitted in the current category.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New - Pytania i Odpowiedzi - submitted in category'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'New - Pytania i Odpowiedzi - published');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Notify me when a new - Pytania i Odpowiedzi - is published in the current category.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Receive notification when a new - Pytania i Odpowiedzi - is published in the current category.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New - Pytania i Odpowiedzi - published in category'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'New answer proposed');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Notify me when a new answer is proposed for a - Pytania i Odpowiedzi - in this category.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Receive notification when a new answer is proposed for a - Pytania i Odpowiedzi - in this category.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'New answer published');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Notify me when a new answer is published for a - Pytania i Odpowiedzi - in this category.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Receive notification when a new answer is published for a - Pytania i Odpowiedzi - in this category.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer published');

define('_MI_SF_FAQ_REJECTED_NOTIFY', '- Pytania i Odpowiedzi - rejected');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Notify me if this - Pytania i Odpowiedzi - is rejected.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Receive notification if this - Pytania i Odpowiedzi - is rejected.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : - Pytania i Odpowiedzi - rejected'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', '- Pytania i Odpowiedzi - approved');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Notify me when this - Pytania i Odpowiedzi - is approved.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Receive notification when this - Pytania i Odpowiedzi - is approved.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : - Pytania i Odpowiedzi - approved'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Answer approved');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Notify me when this answer is approved.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Receive notification when this answer is approved.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer approved'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Answer rejected');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Notify me if this answer is rejected.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Receive notification if this answer is rejected.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer rejected'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Question submitted');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Notify me when any question is submitted and is waiting approval.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Receive notification when any question is submitted and is waiting approval.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question submitted');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Question published');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Notify me when any question is published in the Open Questions section.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Receive notification when any question is published in the Open Questions section.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question published');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Answer proposed');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Notify me when an answer is proposed for any open question.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Receive notification when an answer is proposed for any open question.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Question submitted');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Notify me when a question is submitted in the current category.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Receive notification when a question is submitted in the current category.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question submitted');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Question published');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Notify me when a question is published in the current category.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Receive notification when a question is published in the current category.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question published');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Answer proposed');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Notify me when a new answer is proposed for an opened question in this category.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Receive notification when a new answer is proposed for an opened question in this category.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Question rejected');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Notify me if this question is rejected.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Receive notification if this question is rejected.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Question rejected');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Question approved');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Notify me when this question is approved.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Receive notification when this question is approved.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Question approved');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Answer approved');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Notify me when this answer is approved.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Receive notification when this answer is approved.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer approved');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Answer rejected');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Notify me if this answer is rejected.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Receive notification if this answer is rejected.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer rejected');

// About.php constants
define('_MI_SF_AUTHOR_INFO'           , "Programiści");
define('_MI_SF_DEVELOPER_LEAD'        , "Główni programiści ");
define('_MI_SF_DEVELOPER_CONTRIBUTOR' , "Współpracownicy ");
define('_MI_SF_DEVELOPER_WEBSITE'     , "Strona internetowa Website");
define('_MI_SF_DEVELOPER_EMAIL'       , "E-mail");
define('_MI_SF_DEVELOPER_CREDITS'     , "Podziękowania ");
define('_MI_SF_DEMO_SITE'             , "Strona demo SmartFactory");
define('_MI_SF_MODULE_INFO'           , "Informacje o programowaniu modułu");
define('_MI_SF_MODULE_STATUS'         , "Status");
define('_MI_SF_MODULE_RELEASE_DATE'   , "Data wydania");
define('_MI_SF_MODULE_DEMO'           , "Strona demo");
define('_MI_SF_MODULE_SUPPORT'        , "Suppport na oficjalnej stronie ");
define('_MI_SF_MODULE_BUG'            , "Zgłoś raport o błędzie");
define('_MI_SF_MODULE_FEATURE'        , "Zasugeruj jakieś ulepszenie");
define('_MI_SF_MODULE_DISCLAIMER'     , "Warunki");
define('_MI_SF_AUTHOR_WORD'           , "Słowo od autora");
define('_MI_SF_VERSION_HISTORY'       , "Historia wersji");

// Beta
define('_MI_SF_WARNING_BETA', "Ten moduł jest jaki jest, bez gwarancji na cokowiek kiedykowiek. 
Ten moduł ma statusu BETA, co oznacza ze jest w dalszym ciągu aktywnie rozwijany. To wydanie jest przeznaczone 
<b>tylko do celów testowych</b> i  <b>bardzo</b> nie zalecamy go do używania na stronach 
produkcyjnych.");


// RC
define('_MI_SF_WARNING_RC', "Ten moduł jest jaki jest, bez gwarancji na cokowiek kiedykowiek. 
Ten moduł ma statu KANDYDATA, co oznacza ze jest w dalszym ciągu aktywnie rozwijany. To wydanie jest przeznaczone 
do użycia na własną odpowiedzialność.");


// Final
define('_MI_SF_WARNING_FINAL', "Ten moduł jest jaki jest, bez gwarancji na cokowiek kiedykowiek. 
Ten moduł nie ma statusu BETA, ale jest w dalszym ciągu aktywnie rozwijany. Może być użyty na stronie  
produkcyjnej ale tylko na własną odpowiedzialność co oznacza, że autor nie jest za nic odpowiedzialany.");

?>
