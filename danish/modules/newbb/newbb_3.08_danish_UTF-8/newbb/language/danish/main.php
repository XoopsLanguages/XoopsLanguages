<?php
// $Id: main.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','Fejl');
define('_MD_NOPOSTS','Ingen indlæg');
define('_MD_GO','Acceptér');
define('_MD_SELFORUM','Vælg et forum');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Vedhæftede fil(er):');
define('_MD_ALLOWED_EXTENSIONS','Tilladte filtyper');
define('_MD_MAX_FILESIZE','Maksimum fil størrelse');
define('_MD_ATTACHMENT','Vedhæft fil');
define('_MD_FILESIZE','Størrelse');
define('_MD_HITS','Visninger');
define('_MD_GROUPS','Grupper:');
define('_MD_DEL_ONE','Slet kun denne post');
define('_MD_DEL_RELATED','Slet alle poster i dette emne');
define('_MD_MARK_ALL_FORUMS','Markér alle forum');
define('_MD_MARK_ALL_TOPICS','Markér alle emner');
define('_MD_MARK_UNREAD','Ulæst');
define('_MD_MARK_READ','læst');
define('_MD_ALL_FORUM_MARKED','Alle markerede fora');
define('_MD_ALL_TOPIC_MARKED','Alle markerede emner');
define('_MD_BOARD_DISCLAIMER','Disclaimer');


//index.php
define('_MD_ADMINCP','Admin CP');
define('_MD_FORUM','Forum');
define('_MD_WELCOME','<big>Velkommen til Forummet på <i>%s</i>.</big>');
define('_MD_TOPICS','Emner');
define('_MD_POSTS','Indlæg');
define('_MD_LASTPOST','Sidste indlæg');
define('_MD_MODERATOR','Moderator');
define('_MD_NEWPOSTS','Nye indlæg');
define('_MD_NONEWPOSTS','Ingen nye indlæg');
define('_MD_PRIVATEFORUM','Inaktivt forum');
define('_MD_BY','af'); // Posted by
define('_MD_TOSTART','For at læse de forskellige indlæg, vælg da det forum som du ønsker at besøge fra udvalget herunder.');
define('_MD_TOTALTOPICSC','Antal emner totalt: ');
define('_MD_TOTALPOSTSC','Antal indlæg totalt: ');
define('_MD_TOTALUSER','Antal brugere:');
define('_MD_TIMENOW','Det er i dag den %s');
define('_MD_LASTVISIT','Du var her sidst %s');
define('_MD_ADVSEARCH','Avanceret søgning');
define('_MD_POSTEDON','Oprettet: ');
define('_MD_SUBJECT','Emne');
define('_MD_INACTIVEFORUM_NEWPOSTS','Inaktive forum med nye emner');
define('_MD_INACTIVEFORUM_NONEWPOSTS','Inaktive forum uden nye emner');
define('_MD_SUBFORUMS','Underfora');
define('_MD_MAINFORUMOPT','Indstillinger');
define('_MD_PENDING_POSTS_FOR_AUTH','Emner der afventer godkendelse:');



//page_header.php
define('_MD_MODERATEDBY','Modereret af');
define('_MD_SEARCH','Søg');
//define('_MD_SEARCHRESULTS','Resultat af søgning');
define('_MD_FORUMINDEX','%s Forumsoversigt');
define('_MD_POSTNEW','Nyt emne');
define('_MD_REGTOPOST','Registrér dig som bruger, for at skrive.');

//search.php
define('_MD_SEARCHALLFORUMS','Søg i alle fora');
define('_MD_FORUMC','Forum');
define('_MD_AUTHORC','Forfatter:');
define('_MD_SORTBY','Sorteret efter');
define('_MD_DATE','Dato');
define('_MD_TOPIC','Emne');
define('_MD_POST2','Indlæg');
define('_MD_USERNAME','Brugernavn');
define('_MD_BODY','Tekstfelt');
define('_MD_SINCE','Siden');

//viewforum.php
define('_MD_REPLIES','Svar');
define('_MD_POSTER','Indsendt af');
define('_MD_VIEWS','Visninger');
define('_MD_MORETHAN','Nye indlæg [ Populære ]');
define('_MD_MORETHAN2','Ingen nye indlæg [ Populære ]');
define('_MD_TOPICSHASATT','Emnet har vedhæftede filer.');
define('_MD_TOPICHASPOLL','Emnet har en afstemning');
define('_MD_TOPICLOCKED','Emnet er Låst');
define('_MD_LEGEND','Forklaring');
define('_MD_NEXTPAGE','Næste side');
define('_MD_SORTEDBY','Sorteret efter');
define('_MD_TOPICTITLE','emne titel');
define('_MD_NUMBERREPLIES','antal svar');
define('_MD_TOPICPOSTER','Emne opretter');
define('_MD_TOPICTIME','Oprettet kl.');
define('_MD_LASTPOSTTIME','Sidste indlæg');
define('_MD_ASCENDING','Stigende rækkefølger');
define('_MD_DESCENDING','Faldende rækkefølge');
define('_MD_FROMLASTHOURS','Fra de sidste %s timer');
define('_MD_FROMLASTDAYS','Fra de sidste %s dage');
define('_MD_THELASTYEAR','Fra det sidste år');
define('_MD_BEGINNING','Fra begyndelsen');
define('_MD_SEARCHTHISFORUM','Søg i dette forum');
define('_MD_TOPIC_SUBJECTC','Emne forkortelse:');


define('_MD_RATINGS','Bedømmelse');
define('_MD_CAN_ACCESS','Du <strong>kan</strong> tilgå dette forum.<br />');
define('_MD_CANNOT_ACCESS','Du <strong>kan ikke</strong> tilgå dette forum.<br />');
define('_MD_CAN_POST','Du <strong>kan</strong> starte et nyt emne.<br />');
define('_MD_CANNOT_POST','Du <strong>kan ikke</strong> starte et nyt emne.<br />');
define('_MD_CAN_VIEW','Du <strong>kan</strong> se emnet.<br />');
define('_MD_CANNOT_VIEW','Du <strong>kan ikke</strong> se emnet.<br />');
define('_MD_CAN_REPLY','Du <strong>kan</strong> svare på indlæg.<br />');
define('_MD_CANNOT_REPLY','Du <strong>kan ikke</strong> svarer på indlæg.<br />');
define('_MD_CAN_EDIT','Du <strong>kan</strong> redigere dine indlæg.<br />');
define('_MD_CANNOT_EDIT','Du <strong>kan ikke</strong> rediger dine indlæg.<br />');
define('_MD_CAN_DELETE','Du <strong>kan</strong> slette dine indlæg.<br />');
define('_MD_CANNOT_DELETE','Du <strong>kan ikke</strong> slette dine indlæg.<br />');
define('_MD_CAN_ADDPOLL','Du <strong>kan</strong> tilføje nye afsteminger.<br />');
define('_MD_CANNOT_ADDPOLL','Du <strong>kan ikke</strong> tilføje nye afsteminger.<br />');
define('_MD_CAN_VOTE','Du <strong>kan</strong> stemme i afstemninger.<br />');
define('_MD_CANNOT_VOTE','Du <strong>kan ikke</strong> stemme i afstemninger.<br />');
define('_MD_CAN_ATTACH','Du <strong>kan</strong> vedhæfte filer til indlæg.<br />');
define('_MD_CANNOT_ATTACH','Du <strong>kan ikke</strong> vedhæfte filer til indlæg.<br />');
define('_MD_CAN_NOAPPROVE','Du <strong>kan</strong> lave indlæg uden godkendelse.<br />');
define('_MD_CANNOT_NOAPPROVE','Du <strong>kan ikke</strong> lave indlæg uden godkendelse.<br />');
define('_MD_IMTOPICS','Vigtige Emner');
define('_MD_NOTIMTOPICS','Forum Emner');
define('_MD_FORUMOPTION','Forum muligheder');

define('_MD_VAUP','Vis alle ubesvarede indlæg');
define('_MD_VANP','Vis alle nye indlæg');


define('_MD_UNREPLIED','ubesvarede emner');
define('_MD_UNREAD','unlæste emner');
define('_MD_ALL','alle emner');
define('_MD_ALLPOSTS','alle indlæg');
define('_MD_VIEW','Vis');

//viewtopic.php
define('_MD_AUTHOR','Forfatter');
define('_MD_LOCKTOPIC','Lås dette emne');
define('_MD_UNLOCKTOPIC','Lås dette emne op');
define('_MD_UNSTICKYTOPIC','Fjen dette emne som Opslag');
define('_MD_STICKYTOPIC','Lav dette emne til Opslag');
define('_MD_DIGESTTOPIC','Lav dette emne til resumé');
define('_MD_UNDIGESTTOPIC','Fjen dette emne fra resumé');
define('_MD_MERGETOPIC','Sammenlæg dette emne');
define('_MD_MOVETOPIC','Flyt dette emne');
define('_MD_DELETETOPIC','Slet dette emne');
define('_MD_TOP','Top');
define('_MD_BOTTOM','Bund');
define('_MD_PREVTOPIC','Forrige Emne');
define('_MD_NEXTTOPIC','Næste Emne');
define('_MD_GROUP','Gruppe:');
define('_MD_QUICKREPLY','Hurtig Svar');
define('_MD_POSTREPLY','Indsend Svar');
define('_MD_PRINTTOPICS','Print emne');
define('_MD_PRINT','Print');
define('_MD_REPORT','Indberet');
define('_MD_PM','PM');
define('_MD_EMAIL','Email');
define('_MD_WWW','WWW');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK','URL til denne diskution');
define('_MD_ADDTOLIST','Tilføj til din Kontakt liste');
define('_MD_TOPICOPT','Emner options');
define('_MD_VIEWMODE','Visnings Mode');
define('_MD_NEWEST','Nyeste Først');
define('_MD_OLDEST','Ældeste Først');

define('_MD_FORUMSEARCH','Søg i forum');

define('_MD_RATED','Bedømmelse:');
define('_MD_RATE','Bedøm Tråd');
define('_MD_RATEDESC','Bedøm denne Tråd');
define('_MD_RATING','Stem nu');
define('_MD_RATE1','Forfærdelig');
define('_MD_RATE2','Dårlig');
define('_MD_RATE3','Ok');
define('_MD_RATE4','God');
define('_MD_RATE5','Fremragende');

define('_MD_TOPICOPTION','Emne muligheder');
define('_MD_KARMA_REQUIREMENT','Din personlige karma %s opfylder ikke den påkrævede karma %s. <br /> Prøv igen senere.');
define('_MD_REPLY_REQUIREMENT','For at se denne tråd må du loggen ind og besvare først.');
define('_MD_TOPICOPTIONADMIN','Emne administration muligheder');
define('_MD_POLLOPTIONADMIN','Afstemning Administration muligheder');

define('_MD_EDITPOLL','Rediger denne afstemning');
define('_MD_DELETEPOLL','Slet denne afstemning');
define('_MD_RESTARTPOLL','Genstart denne afstemning');
define('_MD_ADDPOLL','Tilføj afstemning');

define('_MD_QUICKREPLY_EMPTY','Skriv et hurtigt svar her');

define('_MD_LEVEL','Level :');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP :');

define('_MD_BROWSING','Gennemse denne tråd:');
define('_MD_POSTTONEWS','Send dette indlæg som en nyhed');

define('_MD_EXCEEDTHREADVIEW','Post count exceeds the threshold for tråd visning<br />Ændre til flad visning');


//forumform.inc
define('_MD_PRIVATE','Dette er et <b>privat</b> forum.<br />Kun brugere med særlige rettigheder kan oprette nye emner og svare på indlæg i dette forum');
define('_MD_QUOTE','Citat');
define('_MD_VIEW_REQUIRE','Vis behov');
define('_MD_REQUIRE_KARMA','Karma');
define('_MD_REQUIRE_REPLY','svar');
define('_MD_REQUIRE_NULL','Ingen krav');

define('_MD_SELECT_FORMTYPE','Vælg din ønskede form type');

define('_MD_FORM_COMPACT','Compact');
define('_MD_FORM_DHTML','DHTML');
define('_MD_FORM_SPAW','Spaw Editor');
define('_MD_FORM_HTMLAREA','HTMLArea');
define('_MD_FORM_FCK','FCK Editor');
define('_MD_FORM_KOIVI','Koivi Editor');
define('_MD_FORM_TINYMCE','TinyMCE Editor');

// ERROR messages
define('_MD_ERRORFORUM','FEJL: Der er ikke valgt forum!');
define('_MD_ERRORPOST','FEJL: Der er ikke valgt indlæg!');
define('_MD_NORIGHTTOVIEW','Du har ikke adgang til at se dette emne.');
define('_MD_NORIGHTTOPOST','Du har ikke rettigheder til at skrive indlæg i dette forum.');
define('_MD_NORIGHTTOEDIT','Du har ikke adgang til at rediger i dette forum.');
define('_MD_NORIGHTTOREPLY','Du har ikke adgang til at svare i dette forum.');
define('_MD_NORIGHTTOACCESS','Du har ikke adgang til dette forum.');
define('_MD_ERRORTOPIC','FEJL: Der er ikke valgt emne!');
define('_MD_ERRORCONNECT','FEJL: Kunne ikke skabe forbindelse til dette forums database.');
define('_MD_ERROREXIST','FEJL: Det forum du valgte eksisterer ikke. Gå venligst tilbage og prøv igen.');
define('_MD_ERROROCCURED','Der opstod en fejl');
define('_MD_COULDNOTQUERY','Kunne ikke forespørge forummets database.');
define('_MD_FORUMNOEXIST','Fejl - Det forum/emne du valgte eksisterer ikke. Gå venligst tilbage og prøv igen.');
define('_MD_USERNOEXIST','Den bruger eksisterer ikke.  Gå venligst tilbage og søg igen.');
define('_MD_COULDNOTREMOVE','Fejl - Kunne ikke fjerne indlægget fra databasen.!');
define('_MD_COULDNOTREMOVETXT','Fejl - Kunne ikke fjerne teksten!');
define('_MD_TIMEISUP','Du har nået tidgrænsen for at redigere din post');
define('_MD_TIMEISUPDEL','Du har nået tidgrænsen for at slette din post');


//reply.php
define('_MD_ON','den'); //Posted on
define('_MD_USERWROTE','%s skrev:'); // %s is username
define('_MD_RE','Re');

//post.php
define('_MD_EDITNOTALLOWED','Du har ikke adgang til at redigére dette indlæg!');
define('_MD_EDITEDBY','Redigéret af');
define('_MD_ANONNOTALLOWED','Anonyme brugere har ikke adgang til at skrive indlæg.<br>Registrér venligst dig selv som bruger.');
define('_MD_THANKSSUBMIT','Tak for dit indlæg!');
define('_MD_REPLYPOSTED','Der er kommet et svar på dit indlæg.');
define('_MD_HELLO','Hej %s,');
define('_MD_URRECEIVING','Du modtager denne email fordi et indlæg du skrev i forummet på <i>%s</i> har modtaget et svar.'); // %s is your site name
define('_MD_CLICKBELOW','Tryk på linket herunder for følge tråden:');
define('_MD_WAITFORAPPROVAL','Tak. Dit indlæg vil blive godkendt før det bliver indsendt.');
define('_MD_POSTING_LIMITED','Tag en pause og prøv igen om %d sec');

//forumform.inc
define('_MD_NAMEMAIL','Navn/Emaiil:');
define('_MD_LOGOUT','Log af');
define('_MD_REGISTER','Register');
define('_MD_SUBJECTC','Emne:');
define('_MD_MESSAGEICON','Besked Ikon:');
define('_MD_MESSAGEC','Besked: ');
define('_MD_ALLOWEDHTML','Tillad HTML:');
define('_MD_OPTIONS','Muligheder:');
define('_MD_POSTANONLY','Skriv anonymt');
define('_MD_DOSMILEY','Slå Smileys til');
define('_MD_DOXCODE','Slå Xoops Code til');
define('_MD_DOBR','Slå linieskift til (Anbefales at slå det fra hvis HTML er slået til)');
define('_MD_DOHTML','Tillad html tags');
define('_MD_NEWPOSTNOTIFY','Giv besked om nye indlæg i denne tråd');
define('_MD_ATTACHSIG','Tilføj signatur');
define('_MD_POST','Indsend');
define('_MD_SUBMIT','Send');
define('_MD_CANCELPOST','Fortryd');
define('_MD_REMOVE','Fjern');
define('_MD_UPLOAD','Upload');

// forumuserpost.php
define('_MD_ADD','Tilføj');
define('_MD_REPLY','Svar');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Vis emne');
define('_MD_RETURNTOTHEFORUM','Retur til forumet');
define('_MD_RETURNFORUMINDEX','Retur til forums index');
define('_MD_ERROR_BACK','Fejl - Gå venligst tilbage og prøv igen');
define('_MD_GOTONEWFORUM','Vis the opdateret emne');

define('_MD_TOPICDELETE','Emnet er blevet slettet.');
define('_MD_TOPICMOVE','Emnet er blevet flyttet.');
define('_MD_TOPICLOCK','Emnet er blevet låst.');
define('_MD_TOPICUNLOCK','Emnet er blevet låst op.');
define('_MD_TOPICSTICKY','Emnet er blevet opslået');
define('_MD_TOPICUNSTICKY','Emnet er blevet nedtaget');
define('_MD_TOPICDIGEST','Emnet er blevet lavet som resumé');
define('_MD_TOPICUNDIGEST','Emnet er blevet fjernet fra resumé.');


define('_MD_DELETE','Slet');
define('_MD_MOVE','Flyt');
define('_MD_LOCK','Lås');
define('_MD_UNLOCK','Lås op');
define('_MD_STICKY','Opslå');
define('_MD_UNSTICKY','Nedtag');
define('_MD_DIGEST','Resumé');
define('_MD_UNDIGEST','Fjern resumé');
define('_MD_UNDIGEST','unDigest');

define('_MD_DESC_DELETE','Når først du trykker på slet knappen i bunden af denne form vil det emne du har valgt og alle dens relateret indlæg, blive <strong>permanent</strong> slettet.');
define('_MD_DESC_MOVE','Når først du trykker på flyt knappen i bunden af denne form vil det emne du har valgt og alle dens relateret indlæg, blive flyttet til det forum du har valgt.');
define('_MD_DESC_LOCK','Når først du trykker på lås knappen i bunden af denne form vil det emne du har valgt blive låst. Du kan låse det op igen på et senere tidspunkt hvis du ønsker.');
define('_MD_DESC_UNLOCK','Når først du trykker på lås op knappen i bunden af denne form vil det emne du har valgt blive låst op. Du kan låse det igen på et senere tidspunkt hvis du ønsker.');
define('_MD_DESC_STICKY','Når først du trykker på opslå knappen i bunden af denne form vil det emne du har valgt blive opslået. Du kan nedtage det  igen på et senere tidspunkt hvis du ønsker.');
define('_MD_DESC_UNSTICKY','Når først du trykker på nedtag knappen i bunden af denne form vil det emne du har valgt blive nedtaget. Du kan opslå det igen på et senere tidspunkt hvis du ønsker.');
define('_MD_DESC_DIGEST','Når først du trykker på Resumé knappen i bunden af denne form vil det emne du har valgt blive sendt til Resuméet. Du kan fjerne det igen fra resuméet igen på et senere tidspunkt hvis du ønsker det.');
define('_MD_DESC_UNDIGEST','Når først du trykker på fjern fra Resumé knappen i bunden af denne form vil det emne du har valgt blive fjernet fra Resuméet. Du kan tilføje det igen på et senere tidspunkt hvis du ønsker det.');

define('_MD_MOVETOPICTO','Flyt emne til:');
define('_MD_NOFORUMINDB','Ingen Forum i Databasen');

// delete.php
define('_MD_DELNOTALLOWED','Beklager, men du har ikke adgang til at slette dette indlæg.');
define('_MD_AREUSUREDEL','Er du sikker på du ønsker at slette dette indlæg og alle dets relaterede indlæg?');
define('_MD_POSTSDELETED','Det valgte indlæg alle dets relaterede indlæg er blevet slettet.');
define('_MD_POSTDELETED','Valgt indlæg slettet');

// definitions moved from global.
define('_MD_THREAD','Tråd');
define('_MD_FROM','Fra');
define('_MD_JOINED','Medlem siden');
define('_MD_ONLINE','Online');
define('_MD_OFFLINE','Offline');
define('_MD_FLAT','Flad');


// online.php
define('_MD_USERS_ONLINE','Brugere online:');
define('_MD_ANONYMOUS_USERS','Anonyme brugere:');
define('_MD_REGISTERED_USERS','Registrerede brugere:');
define('_MD_BROWSING_FORUM','Brugere i forum');
define('_MD_TOTAL_ONLINE','Totalt %d brugere online.');
define('_MD_ADMINISTRATOR','Administrator');

define('_MD_NO_SUCH_FILE','Filen eksisterer ikke');
define('_MD_ERROR_UPATEATTACHMENT','Der opstod en fejl under opdateringen af vedhæftningen');

// ratethread.php
define('_MD_CANTVOTEOWN','Du kan ikke stemme på et emne du har indsendt. <br />Alle stemmer bliver logget og gennemset');
define('_MD_VOTEONCE','Stem venligst ikke på det samme emne mere end  en gang.');
define('_MD_VOTEAPPRE','Din stemme er modtaget');
define('_MD_THANKYOU','Tak fordi du tog dig tid til at stemme her på %s'); // %s is your site name
define('_MD_VOTES','Stemmer');
define('_MD_NOVOTERATE','Du bedømte ikke dette emne');


// polls.php
define('_MD_POLL_DBUPDATED','Databasen blev opdateret');
define('_MD_POLL_POLLCONF','Afstemnings Indstillinger');
define('_MD_POLL_POLLSLIST','Afstemnings Liste');
define('_MD_POLL_AUTHOR','Forfatter af denne afstemning');
define('_MD_POLL_DISPLAYBLOCK','Vis i blok?');
define('_MD_POLL_POLLQUESTION','Afstemnings spørgsmål');
define('_MD_POLL_VOTERS','Totale Stemmere');
define('_MD_POLL_VOTES','Totale Stemmer');
define('_MD_POLL_EXPIRATION','Udløb');
define('_MD_POLL_EXPIRED','Udløbet');
define('_MD_POLL_VIEWLOG','Vis log');
define('_MD_POLL_CREATNEWPOLL','Lav ny afstemning');
define('_MD_POLL_POLLDESC','Afstemnings beskrivelse');
define('_MD_POLL_DISPLAYORDER','Visnings rækkefølge');
define('_MD_POLL_ALLOWMULTI','Tillad at stemme på flere?');
define('_MD_POLL_NOTIFY','Giv forfatteren af afstemningen beskev når den udløber');
define('_MD_POLL_POLLOPTIONS','Muligheder');
define('_MD_POLL_EDITPOLL','Rediger Afstemning');
define('_MD_POLL_FORMAT','Format: yyyy-mm-dd hh:mm:ss');
define('_MD_POLL_CURRENTTIME','Nuværende tid er %s');
define('_MD_POLL_EXPIREDAT','Udløbet %s');
define('_MD_POLL_RESTART','Genstart denne afstemning');
define('_MD_POLL_ADDMORE','Tilføj en mulighed til');
define('_MD_POLL_RUSUREDEL','Er du sikker på du vil slette denne afstemning og alle dens kommentare');
define('_MD_POLL_RESTARTPOLL','Genstart denne afstemning');
define('_MD_POLL_RESET','Slet alle logs for denne afstemning?');
define('_MD_POLL_ADDPOLL','Tilføj Afstemning');
define('_MD_POLLMODULE_ERROR','xoopspoll modul er ikke tilgængelig');

//report.php
define('_MD_REPORTED','Tak for at reportere dette indlæg/tråd! En moderator vil se på din rappport snarest.');
define('_MD_REPORT_ERROR','Der opstod en fejl under afsendelsen af rapporten');
define('_MD_REPORT_TEXT','Repoter besked:');

define('_MD_PDF','Skab PDF udfra dette indlæg');
define('_MD_PDF_PAGE','Side %s');

//print.php
define('_MD_COMEFROM','Dette indlæg var fra:');

//viewpost.php
define("_MD_VIEWALLPOSTS","Alle indlæg");
define("_MD_VIEWTOPIC","Emne");
define("_MD_VIEWFORUM","Forum");

define("_MD_COMPACT","Kompakt");

define("_MD_MENU_SELECT","Valg");
define("_MD_MENU_HOVER","Svæve");
define("_MD_MENU_CLICK","Klik");

define("_MD_WELCOME_SUBJECT","%s er logget in");
define("_MD_WELCOME_MESSAGE","Hej, %s er logget ind. Lad os begynde...");

define("_MD_VIEWNEWPOSTS","Vis nye indlæg");

define("_MD_INVALID_SUBMIT","Fejl. Du har overskredet sissions tiden. Prøv igen eller kopier dit indlæg for at logge på igen og poste.");

define("_MD_ACCOUNT","Konto");
define("_MD_NAME","Navn");
define("_MD_PASSWORD","Password");
define("_MD_LOGIN","Login");

define("_MD_TRANSFER","Overfør");
define("_MD_TRANSFER_DESC","Overfør posten til andre applikationer");
define("_MD_TRANSFER_DONE","Handlingen er udført med success: %s");

define("_MD_APPROVE","Godkend");
define("_MD_RESTORE","Gendan");
define("_MD_SPLIT_ONE","Del");
define("_MD_SPLIT_TREE","Del alle under");
define("_MD_SPLIT_ALL","Del alle");

define("_MD_TYPE_ADMIN","Administration");
define("_MD_TYPE_VIEW","Vis");
define("_MD_TYPE_PENDING","Under behandling");
define("_MD_TYPE_DELETED","Slettet");
define("_MD_TYPE_SUSPEND","Stoppet");

define("_MD_DBUPDATED","Database opdateret med success!");

define("_MD_SUSPEND_SUBJECT","Bruger %s er suspenderet i %d dage");
define("_MD_SUSPEND_TEXT","Bruger %s er suspenderet i %d dage pga. :<br />[quote]%s[/quote]<br /><br />Suspentionen er gyldig indtil %s");
define("_MD_SUSPEND_UID","Bruger");
define("_MD_SUSPEND_IP","IP segment (fuld eller segment)");
define("_MD_SUSPEND_DURATION","Suspenderet i (Dage)");
define("_MD_SUSPEND_DESC","Suspenderet grund");
define("_MD_SUSPEND_LIST","Suspenderet liste");
define("_MD_SUSPEND_START","Start");
define("_MD_SUSPEND_EXPIRE","Slut");
define("_MD_SUSPEND_SCOPE","Omfang");
define("_MD_SUSPEND_MANAGEMENT","Moderation administration");
define("_MD_SUSPEND_NOACCESS","Din bruger eller din IP-adresse er suspenderet");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
//insert double '\' before 't','r','n'
define("_MD_TODAY","\I\d\a\g\ G:i:s");
define("_MD_YESTERDAY","\I\g\å\\r\ G:i:s");
define("_MD_MONTHDAY","n/j G:i:s");
define("_MD_YEARMONTHDAY","Y/n/j G:i");


// For user info
// If you have customized userbar, define here.
require_once(XOOPS_ROOT_PATH."/modules/newbb/class/user.php");
class User_language extends User
{
    function User_language(&$user)
    {
	    $this->User($user);
    }

    function &getUserbar()
    {
	    global $xoopsModuleConfig, $xoopsUser, $isadmin;
    	if (empty($xoopsModuleConfig['userbar_enabled'])) return null;
    	$user =& $this->user;
    	$userbar = array();
        $userbar[] = array("link"=>XOOPS_URL . "/userinfo.php?uid=" . $user->getVar("uid"), "name" =>_PROFILE);
		if (is_object($xoopsUser))
        $userbar[]= array("link"=>"javascript:void openWithSelfMain('" . XOOPS_URL . "/pmlite.php?send2=1&amp;to_userid=" . $user->getVar("uid") . "','pmlite', 450, 380);","name"=>_MD_PM);
        if($user->getVar('user_viewemail') || $isadmin)
        $userbar[]= array("link"=>"javascript:void window.open('mailto:" . $user->getVar('email') . "','new');","name"=>_MD_EMAIL);
        if($user->getVar('url'))
        $userbar[]= array("link"=>"javascript:void window.open('" . $user->getVar('url') . "','new');","name"=>_MD_WWW);
        if($user->getVar('user_icq'))
        $userbar[]= array("link"=>"javascript:void window.open('http://wwp.icq.com/scripts/search.dll?to=" . $user->getVar('user_icq')."','new');","name" => _MD_ICQ);
        if($user->getVar('user_aim'))
        $userbar[]= array("link"=>"javascript:void window.open('aim:goim?screenname=" . $user->getVar('user_aim') . "&amp;message=Hi+" . $user->getVar('user_aim') . "+Are+you+there?" . "','new');","name"=>_MD_AIM);
        if($user->getVar('user_yim'))
        $userbar[]= array("link"=>"javascript:void window.open('http://edit.yahoo.com/config/send_webmesg?.target=" . $user->getVar('user_yim') . "&.src=pg" . "','new');","name"=> _MD_YIM);
        if($user->getVar('user_msnm'))
        $userbar[]= array("link"=>"javascript:void window.open('http://members.msn.com?mem=" . $user->getVar('user_msnm') . "','new');","name" => _MD_MSNM);
		return $userbar;
    }
}
?>
