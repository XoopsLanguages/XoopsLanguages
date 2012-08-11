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
define("_MI_SF_MD_DESC"                    , "Zaawansowany system do zarz±dzania pytaniami i odpowiedziami dla portalu XOOPS");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1"                , "Wy¶lij - Pytania i Odpowiedzi -");
define("_MI_SF_SUB_SMNAME2"                , "¯±daj - Pytania i Odpowiedzi -");
define("_MI_SF_SUB_SMNAME3"                , "Pytania bez odpowiedzi ");
define("_MI_SF_SUB_SMNAME4"                , "Sprawd¼ - Pytania i Odpowiedzi -");

// Config options
define("_MI_SF_ALLOWSUBMIT"                , "Nades³ane przez u¿ytkowników:");
define("_MI_SF_ALLOWSUBMITDSC"             , "Pozwoliæ u¿ytkownikom na nadsy³anie - Pytania i Odpowiedzi -?");

define("_MI_SF_ALLOWREQUEST"               , "¯±danie u¿ytkowników:");
define("_MI_SF_ALLOWREQUESTDSC"            , "Pozwoliæ u¿ytkownikom na wysy³anie ¿±dañ z - Pytania i Odpowiedzi -?");

define("_MI_SF_NEWANSWER"                  , "Pozwoliæ na wysy³anie nowych odpowiedzi:");
define("_MI_SF_NEWANSWERDSC"               , "Wybierz 'Tak' aby pozwoliæ na nadsy³anie nowych odpowiedzi dla - Pytania i Odpowiedzi -, które ju¿ je maj±.");

define("_MI_SF_ANONPOST"                   , "Pozwoliæ na anonimowe postowanie");
define("_MI_SF_ANONPOSTDSC"                , "Pozwoliæ anonimowym u¿ytkownikom na nadsy³anie i wysy³anie ¿±dañ - Pytania i Odpowiedzi -.");

define('_MI_SF_DATEFORMAT'                 , 'Format daty:');
define('_MI_SF_DATEFORMATDSC'              , 'U¿yj koñcowej czê¶ci pliku language/english/global.php aby zdefiniowaæ sposób wy¶wietlania daty. Na przyk³ad format: "d-M-Y H:i" wy¶wietli datê w nastêpuj±cy sposób "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS'            , 'Wy¶wietliæ rozwijane belki');
define('_MI_SF_DISPLAY_COLLAPSDSC'         , "Wybierz 'Tak' aby wy¶wietliæ rozwijane belki na stronie indeksowej i kategorii.");

define('_MI_SF_DISPLAYTYPE'                , "Sposób wy¶wietlania - Pytania i Odpowiedzi -:");
define('_MI_SF_DISPLAYTYPEDSC'             , "W 'Widoku sumarycznym' wy¶wietlane jest tylko pytanie, data i ilo¶æ odwiedziñ dla ka¿dego - Pytania i Odpowiedzi -. W 'Widoku pe³nym' ka¿de - Pytania i Odpowiedzi - bêdzie w pe³ni wy¶wietlone w wybranej kategorii.");
define('_MI_SF_DISPLAYTYPE_SUMMARY'        , "Widok sumaryczny");
define('_MI_SF_DISPLAYTYPE_FULL'           , "Widok pe³ny");

define('_MI_SF_DISPLAY_LAST_FAQ'           , 'Wy¶wietliæ kolumne ostatniego - Pytania i Odpowiedzi -?');
define('_MI_SF_DISPLAY_LAST_FAQDSC'        , "Wybierz 'Tak' aby wy¶wietliæ ostatnie - Pytania i Odpowiedzi - dla danej kategorii na stronie indeksowej i stronie kategorii.");

define('_MI_SF_DISPLAY_LAST_FAQS'          , 'Wy¶wietliæ listê ostatnich - Pytania i Odpowiedzi -?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC'       , "Wybierz 'Tak' aby wy¶wietliæ liste ostatnich - Pytania i Odpowiedzi - na stronie indeksowej.");

define('_MI_SF_LAST_FAQ_SIZE'              , 'D³ugo¶æ ostatniego - Pytania i Odpowiedzi -:');
define('_MI_SF_LAST_FAQ_SIZEDSC'           , "Ustaw maksymaln± d³ugo¶æ pytania w kolumnie ostatniego - Pytania i Odpowiedzi -.");

define('_MI_SF_QUESTION_SIZE'              , "D³ugo¶æ pytania:");
define('_MI_SF_QUESTION_SIZEDSC'           , "Ustaw maksymaln± d³ugo¶æ pytania jako tytu³ na stronie z pojedynczym - Pytania i Odpowiedzi -.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX'       , 'Wy¶wietliæ listê podkategorii na stronie indeksowej');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC'    , "Wybierz 'Tak' aby wy¶wietliæ listê podkategorii na stronie indeksowej.");

define('_MI_SF_DISPLAY_TOPCAT_DSC'         , 'Wy¶wietliæ opis g³ównych kategorii?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC'      , "Wybierz 'Tak' aby wy¶wietliæ opis g³ównych kategorii na stronie indeksowej i kategorii.");

define('_MI_SF_DISPLAY_SBCAT_DSC'          , 'Wy¶wietliæ opis podkategorii?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC'       , "Wybierz 'Tak' aby wy¶wietliæ opis podkategorii na stronie indeksowej i kategorii.");

define('_MI_SF_ORDERBYDATE'                , 'Wy¶wietlaæ - Pytania i Odpowiedzi - wed³ug daty:');
define('_MI_SF_ORDERBYDATEDSC'             , 'Wybierz "Tak" aby wy¶wietliæ - Pytania i Odpowiedzi -s w kategorii wed³ug daty, w innym przypadku bêdzie u¿yta ich waga.');

define('_MI_SF_DISPLAY_DATE_COL'           , "Wy¶wietliæ kolumnê 'Opublikowane'?");
define('_MI_SF_DISPLAY_DATE_COLDSC'        , "Je¶li u¿ywasz 'Widoku sumarycznego' wybierz 'Tak' aby pokazaæ datê opublikowania w tabeli - Pytania i Odpowiedzi - na stronie indeksowej i kategorii.");

define('_MI_SF_DISPLAY_HITS_COL'           , "Wy¶wietliæ kolumnê 'Odwiedzin'?");
define('_MI_SF_DISPLAY_HITS_COLDSC'        , "Je¶li u¿ywasz 'Widoku sumarycznego' wybierz 'Tak' aby pokazaæ ilo¶æ 'Odwiedzin' w tabeli - Pytania i Odpowiedzi - na stronie indeksowej i kategorii.");

define('_MI_SF_USEIMAGENAVPAGE'            , 'Wy¶wietliæ obrazki dla nawigacji:');
define('_MI_SF_USEIMAGENAVPAGEDSC'         , 'Wybierz "Tak" aby nawigacja by³a wy¶wietlana z obrazkami w przeciwnym razie zostanie u¿yta oryginalna nawigacja.');

define('_MI_SF_ALLOWCOMMENTS'              , 'Kontrola komentarzy na poziomie - Pytania i Odpowiedzi -:');
define('_MI_SF_ALLOWCOMMENTSDSC'           , 'Wybierz "Tak" aby wiedzieæ komentarze tylko dla - Pytania i Odpowiedzi -, które maj± wybrany checkbox z t± opcj±.<br /> Wybierz "Nie" aby komentarze by³y zarz±dzane na poziomie globalnym (zobacz te¿ punkt "Zasady komentowania".');

define('_MI_SF_ALLOWADMINHITS'             , 'Liczenia odwiedziñ administratora:');
define('_MI_SF_ALLOWADMINHITSDSC'          , 'Dodawaæ odwiedziny administartora do licznika odwiedzin?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ'        , 'Automatyczne zatwierdzanie - Pytania i Odpowiedzi -:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC'    , 'Automatyczne zatwierdzanie - Pytania i Odpowiedzi - bez ¿adnego dzia³ania administratora.');

define('_MI_SF_AUTOAPPROVE_REQUEST'        , 'Automatyczne zatwierdzanie ¿±dañ:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC'    , 'Automatyczne zatwierdzanie ¿±dañ bez ¿adnego dzia³ania administratora.');

define('_MI_SF_AUTOAPPROVE_ANS'            , 'Automatyczne zatwierdzanie odpowiedzi:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC'        , 'Automatyczne zatwierdzanie odpowiedzi dla pytañ, które ich nie posiadaj±, bez ¿adnego dzia³ania administratora.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW'        , 'Automatyczne zatwierdzanie nowych odpowiedzi:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC'    , 'Automatyczne zatwierdzanie nowych odpowiedzi dla opublikowanych - Pytania i Odpowiedzi -.');

define('_MI_SF_LASTFAQSPERCAT'             , 'Maksymalna ilo¶æ - Pytania i Odpowiedzi - w kategorii:');
define('_MI_SF_LASTFAQSPERCATDSC'          , 'Maksymalna ilo¶æ - Pytania i Odpowiedzi - w kolumnie Informacje dla danej kategorii.');

define('_MI_SF_CATPERPAGE'                 , 'Maksymalna ilo¶æ kategorii na stronie (dla u¿ytkowników):');
define('_MI_SF_CATPERPAGEDSC'              , 'Maksymalna ilo¶æ g³ównych kategorii na stronie widocznych dla u¿ytkownika.');

define('_MI_SF_PERPAGE'                    , 'Maksymalna ilo¶æ kategorii na stronie (dla administratorów):');
define('_MI_SF_PERPAGEDSC'                 , 'Maksymalna ilo¶æ g³ównych kategorii na stronie widocznych dla u¿ytkownika');

define('_MI_SF_PERPAGEINDEX'               , 'Maksymalna ilo¶æ - Pytania i Odpowiedzi - na stronie (dla u¿ytkowników) :');
define('_MI_SF_PERPAGEINDEXDSC'            , 'Maksymalna ilo¶æ - Pytania i Odpowiedzi - na stronie widocznych dla u¿ytkownika.');

define('_MI_SF_INDEXWELCOMEMSG'            , 'Powitanie na stronie indeksowej:');
define('_MI_SF_INDEXWELCOMEMSGDSC'         , 'Powitalna wiadomo¶æ na stronie indeksowej modu³u.');
define('_MI_SF_INDEXWELCOMEMSGDEF'         , "W tej czê¶ci strony znajdziesz odpowiedzi na czêsto zadawane pytania, a tak¿e na pytania <b>Jak to zrobiæ...? </b> oraz na  <b>Czy wiesz, ¿e... ? </b>. Proszê poczuj siê zaproszony do komentowania oraz zadawania - Pytania i Odpowiedzi -."); 

define('_MI_SF_REQUESTINTROMSG'            , 'Powitanie na stronie z ¿±daniem:');
define('_MI_SF_REQUESTINTROMSGDSC'         , 'Informacje wprowadzaj±ca wy¶wietlana na stronie ¯±daj nowego - Pytania i Odpowiedzi -.');
define('_MI_SF_REQUESTINTROMSGDEF'         , "Nie znalaz³e¶ odpowiedzi której poszukiwa³e¶? To nie jest problem! Wype³nij poni¿szy formularz aby wys³aæ ¿±danie odpowiedzi dla nowego pytania. Administrator sprawdzi twoje ¿±danie i opublikuje nowe pytanie w sekcji pytañ bez odpowiedzi a byæ mo¿e kto¶ opublikuje odpowied¼!"); 

define('_MI_SF_OPENINTROMSG'               , 'Powitanie na stronie z pytaniami bez odpowiedzi:');
define('_MI_SF_OPENINTROMSGDSC'            , 'Informacje wprowadzaj±ca wy¶wietlana na stronie z pytaniami bez odpowiedzi.');
define('_MI_SF_OPENINTROMSGDEF'            , "Lista pytañ bez odpowiedzi to jest pytañ nades³anych przez u¿ytkowników, które nie posiadaj± jednak odpowiedzi. Je¶li chcesz nam pomóc mo¿esz klikn±æ na pytanie i udzieliæ odpowiedzi."); 

define('_MI_SF_USEREALNAME'                , 'U¿ywaæ prawdziwych imion');
define('_MI_SF_USEREALNAMEDSC'             , 'Podczas wy¶wietlania imienia u¿yæ prawdziwego imienia o ile u¿ytkownik je poda³.');

define('_MI_SF_HELP_PATH_SELECT'           , "¦cie¿ka do plików pomocy dla SmartFAQ");
define('_MI_SF_HELP_PATH_SELECT_DSC'       , "Wybierz sposób dostêpu do plików pomocy dla SmartFAQ. Je¶li ¶ci±gn±³e¶ 'Pakiet pomocy dla SmartFAQ' i zapisa³e¶ je w katalogu 'modules/smartfaq/doc/', mo¿esz wybraæ opcjê 'Wewn±trz modu³u'. Mo¿esz te¿ u¿yæ plików pomocy bezpo¶rednio ze docs.xoops.org o ile wybierzesz tê opcjê. Mo¿esz te¿ wybraæ 'W³asna ¶cie¿kê' i wskazaæ ¶cie¿kê do katalogu, który sam wybra³e¶ w nastêpnej opcji konfiguratora 'W³asna ¶cie¿ka do plików pomocy SmartFAQ");

define('_MI_SF_HELP_PATH_CUSTOM'           , "W³asna ¶cie¿ka do plików pomocy ");
define('_MI_SF_HELP_PATH_CUSTOM_DSC'       , "O ile we wcze¶niejszej opcji wybra³es opcje 'W³asna ¶cie¿ka', podaj tu URL do plików pomocy dla SmartFAQ, w formacie: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE'                , "Wewn±trz modu³u");
define('_MI_SF_HELP_CUSTOM'                , "W³asna ¶cie¿ka");

//define('_MI_SF_MODERATORSEDIT'           , 'Pozwoliæ moderatorom na wprowadzanie zmian (rozszerzenie uprawnieñ)');
//define('_MI_SF_MODERATORSEDITDSC'        , 'Ta opcja pozwala moderatorom na zmienianie pytañ i - Pytania i Odpowiedzi - w kategorii, która moderuj±. Bez niej moderatorzy bêd± mogli tylko zatwierdzaæ i odrzucaæ pytania oraz - Pytania i Odpowiedzi -.');

// Names of admin menu items
define("_MI_SF_ADMENU1"                    , "Indeks");
define("_MI_SF_ADMENU2"                    , "Kategorie");
define("_MI_SF_ADMENU3"                    , "- Pytania i Odpowiedzi -");
define("_MI_SF_ADMENU4"                    , "Pytania");
define("_MI_SF_ADMENU5"                    , "Prawa");
define("_MI_SF_ADMENU6"                    , "Bloki i grupy");
define("_MI_SF_ADMENU7"                    , "Id¼ do modu³u");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW"                    , "Lista ostatnich - Pytania i Odpowiedzi - ");
define("_MI_SF_ARTSRANDOM_DIDUNO"          , "Czy wiesz, ¿e... ?");
define("_MI_SF_ARTSRANDOM_FAQ"             , "Losowe pytanie!");
define("_MI_SF_ARTSRANDOM_HOW"             , "Jak to zrobiæ...?");
define("_MI_SF_ARTSCONTEXT"                , "Kontekstowe - Pytania i Odpowiedzi -");
define("_MI_SF_RECENTFAQS"                 , "Ostatnie - Pytania i Odpowiedzi - (detale)");
define("_MI_SF_RECENT_QUESTIONS"           , "Ostatnie pytania bez odpowiedzi");
define("_MI_SF_MOST_VIEWED"                , "Najczê¶ciej ogl±dane - Pytania i Odpowiedzi -");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY'          , 'Globalne - Pytania i Odpowiedzi -');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC'      , 'Opcje powiadamienia dla wszystkich - Pytania i Odpowiedzi -.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY'        , 'Kategorie - Pytania i Odpowiedzi -');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC'    , 'Opcje powiadamienia dla danej kategorii.');

define('_MI_SF_FAQ_NOTIFY'                 , '- Pytania i Odpowiedzi -');
define('_MI_SF_FAQ_NOTIFY_DSC'             , 'Opcje powiadamienia dla danego - Pytania i Odpowiedzi -.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY'                 , 'Globalne pytania bez odpowiedzi');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC'             , 'Opcje powiadamienia dla wszystkich pytañ bez odpowiedzi');

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

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY','New answer proposed');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP','Notify me when a new answer is proposed for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC','Receive notification when a new answer is proposed for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY','New answer published');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP','Notify me when a new answer is published for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC','Receive notification when a new answer is published for any - Pytania i Odpowiedzi -.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer published');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY','- Pytania i Odpowiedzi - submitted');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP','Notify me when a new - Pytania i Odpowiedzi - is submitted in the current category.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC','Receive notification when a new - Pytania i Odpowiedzi - is submitted in the current category.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New - Pytania i Odpowiedzi - submitted in category'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY','New - Pytania i Odpowiedzi - published');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP','Notify me when a new - Pytania i Odpowiedzi - is published in the current category.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC','Receive notification when a new - Pytania i Odpowiedzi - is published in the current category.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New - Pytania i Odpowiedzi - published in category'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY','New answer proposed');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP','Notify me when a new answer is proposed for a - Pytania i Odpowiedzi - in this category.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC','Receive notification when a new answer is proposed for a - Pytania i Odpowiedzi - in this category.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY','New answer published');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP','Notify me when a new answer is published for a - Pytania i Odpowiedzi - in this category.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC','Receive notification when a new answer is published for a - Pytania i Odpowiedzi - in this category.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer published');

define('_MI_SF_FAQ_REJECTED_NOTIFY','- Pytania i Odpowiedzi - rejected');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP','Notify me if this - Pytania i Odpowiedzi - is rejected.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC','Receive notification if this - Pytania i Odpowiedzi - is rejected.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : - Pytania i Odpowiedzi - rejected'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY','- Pytania i Odpowiedzi - approved');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP','Notify me when this - Pytania i Odpowiedzi - is approved.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC','Receive notification when this - Pytania i Odpowiedzi - is approved.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : - Pytania i Odpowiedzi - approved'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY','Answer approved');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP','Notify me when this answer is approved.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC','Receive notification when this answer is approved.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer approved'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY','Answer rejected');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP','Notify me if this answer is rejected.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC','Receive notification if this answer is rejected.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer rejected'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY','Question submitted');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP','Notify me when any question is submitted and is waiting approval.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC','Receive notification when any question is submitted and is waiting approval.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question submitted');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY','Question published');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP','Notify me when any question is published in the Open Questions section.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC','Receive notification when any question is published in the Open Questions section.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question published');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY','Answer proposed');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP','Notify me when an answer is proposed for any open question.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC','Receive notification when an answer is proposed for any open question.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY','Question submitted');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP','Notify me when a question is submitted in the current category.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC','Receive notification when a question is submitted in the current category.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question submitted');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY','Question published');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP','Notify me when a question is published in the current category.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC','Receive notification when a question is published in the current category.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New question published');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY','Answer proposed');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP','Notify me when a new answer is proposed for an opened question in this category.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC','Receive notification when a new answer is proposed for an opened question in this category.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : New answer proposed');

define('_MI_SF_QUESTION_REJECTED_NOTIFY','Question rejected');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP','Notify me if this question is rejected.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC','Receive notification if this question is rejected.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Question rejected');

define('_MI_SF_QUESTION_APPROVED_NOTIFY','Question approved');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP','Notify me when this question is approved.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC','Receive notification when this question is approved.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Question approved');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY','Answer approved');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP','Notify me when this answer is approved.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC','Receive notification when this answer is approved.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer approved');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY','Answer rejected');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP','Notify me if this answer is rejected.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC','Receive notification if this answer is rejected.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ','[{X_SITENAME}] {X_MODULE} automatyczne powiadamianie : Answer rejected');

// About.php constants
define('_MI_SF_AUTHOR_INFO'           , "Programi¶ci");
define('_MI_SF_DEVELOPER_LEAD'        , "G³ówni programi¶ci ");
define('_MI_SF_DEVELOPER_CONTRIBUTOR' , "Wspó³pracownicy ");
define('_MI_SF_DEVELOPER_WEBSITE'     , "Strona internetowa Website");
define('_MI_SF_DEVELOPER_EMAIL'       , "E-mail");
define('_MI_SF_DEVELOPER_CREDITS'     , "Podziêkowania ");
define('_MI_SF_DEMO_SITE'             , "Strona demo SmartFactory");
define('_MI_SF_MODULE_INFO'           , "Informacje o programowaniu modu³u");
define('_MI_SF_MODULE_STATUS'         , "Status");
define('_MI_SF_MODULE_RELEASE_DATE'   , "Data wydania");
define('_MI_SF_MODULE_DEMO'           , "Strona demo");
define('_MI_SF_MODULE_SUPPORT'        , "Suppport na oficjalnej stronie ");
define('_MI_SF_MODULE_BUG'            , "Zg³o¶ raport o b³êdzie");
define('_MI_SF_MODULE_FEATURE'        , "Zasugeruj jakie¶ ulepszenie");
define('_MI_SF_MODULE_DISCLAIMER'     , "Warunki");
define('_MI_SF_AUTHOR_WORD'           , "S³owo od autora");
define('_MI_SF_VERSION_HISTORY'       , "Historia wersji");

// Beta
define('_MI_SF_WARNING_BETA',"Ten modu³ jest jaki jest, bez gwarancji na cokowiek kiedykowiek. 
Ten modu³ ma statusu BETA, co oznacza ze jest w dalszym ci±gu aktywnie rozwijany. To wydanie jest przeznaczone 
<b>tylko do celów testowych</b> i  <b>bardzo</b> nie zalecamy go do u¿ywania na stronach 
produkcyjnych.");


// RC
define('_MI_SF_WARNING_RC',"Ten modu³ jest jaki jest, bez gwarancji na cokowiek kiedykowiek. 
Ten modu³ ma statu KANDYDATA, co oznacza ze jest w dalszym ci±gu aktywnie rozwijany. To wydanie jest przeznaczone 
do u¿ycia na w³asn± odpowiedzialno¶æ.");


// Final
define('_MI_SF_WARNING_FINAL',"Ten modu³ jest jaki jest, bez gwarancji na cokowiek kiedykowiek. 
Ten modu³ nie ma statusu BETA, ale jest w dalszym ci±gu aktywnie rozwijany. Mo¿e byæ u¿yty na stronie  
produkcyjnej ale tylko na w³asn± odpowiedzialno¶æ co oznacza, ¿e autor nie jest za nic odpowiedzialany.");

?>
