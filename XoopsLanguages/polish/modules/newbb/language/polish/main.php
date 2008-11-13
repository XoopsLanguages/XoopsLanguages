<?php
// $Id: main.php,v 1.1 2007/02/10 18:56:09 dap997 Exp $
if (defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','B��d');
//define('_MD_NOPOSTS','Brak post�w');
//define('_MD_GO','OK!');
define('_MD_SELFORUM','Wybierz Forum');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Za��cznik:');
define('_MD_ALLOWED_EXTENSIONS','Dopuszczalne typy plik�w');
define('_MD_MAX_FILESIZE','Maksymalny rozmiar pliku');
define('_MD_ATTACHMENT','Do��cz plik');
define('_MD_FILESIZE','Rozmiar');
define('_MD_HITS','Pobra�');
define('_MD_GROUPS','Grupy:');
define('_MD_DEL_ONE','Usu� tylko tego posta');
define('_MD_DEL_RELATED','Usu� wszystkie posty w tym temacie');
define('_MD_MARK_ALL_FORUMS','Zaznacz wszystkie fora jako');
define('_MD_MARK_ALL_TOPICS','Zaznacz wszystkie w�tki jako');
define('_MD_MARK_UNREAD','nieprzeczytane');
define('_MD_MARK_READ','przeczytane');
define('_MD_ALL_FORUM_MARKED','Wszystkie fora zaznaczone jako');
define('_MD_ALL_TOPIC_MARKED','Wszystkie w�tki zaznaczone jako');
define('_MD_BOARD_DISCLAIMER','Obja�nienie Forum');


//index.php
define('_MD_ADMINCP','Admin CP');
define('_MD_FORUM','Forum');
define('_MD_WELCOME','Witaj na Forum %s.');
define('_MD_TOPICS','W�tki');
define('_MD_POSTS','Posty');
define('_MD_LASTPOST','Najnowszy');
define('_MD_MODERATOR','Moderator');
define('_MD_NEWPOSTS','Nowych post�w');
define('_MD_NONEWPOSTS','Brak nowych post�w');
define('_MD_PRIVATEFORUM','Forum Nieaktywne');
define('_MD_BY','przez'); // Posted by
define('_MD_TOSTART','Aby rozpocz�� przegl�danie naszego forum, wybierz odpowiednie z listy poni�ej.');
define('_MD_TOTALTOPICSC','Wszystkich w�tk�w: ');
define('_MD_TOTALPOSTSC','Wszystkich post�w: ');
define('_MD_TOTALUSER','Zarejestrowanych u�ytkownik�w: ');
define('_MD_TIMENOW','Aktualny czas: %s');
define('_MD_USER_LASTVISIT','Data twojej ostatniej wizyty: %s');

define('_MD_USER_LASTPOST', 'Tw�j ostatni post: %s');
define('_MD_USER_NOLASTPOST', 'Jeszcze nie napisa�e� �adnego posta');
define('_MD_USER_TOPICS', 'Twoje tematy: ');
define('_MD_USER_POSTS', 'Posty: ');
define('_MD_USER_DIGESTS', 'Skr�ty: ');

define('_MD_VIEW_NEWPOSTS', 'Poka� nowe posty');

define('_MD_ADVSEARCH','Wyszukiwanie zaawansowane');
define('_MD_POSTEDON','Wys�ano: ');
define('_MD_SUBJECT','Temat');
define('_MD_INACTIVEFORUM_NEWPOSTS','Nieaktywne Forum z nowymi postami');
define('_MD_INACTIVEFORUM_NONEWPOSTS','Nieaktywne Forum bez nowych post�w');
define('_MD_SUBFORUMS','Pod-forum');
define('_MD_MAINFORUMOPT', 'Ustawienia g��wne');
define("_MD_PENDING_POSTS_FOR_AUTH","Posty oczekuj�ce na zatwierdzenie:");

define('_MD_TODAYTOPICSC','Dzisiejsze tematy: ');
define('_MD_TODAYPOSTSC','Dzisiejsze posty: ');
define('_MD_TOTALDIGESTSC','Total Digests: ');



//page_header.php
define('_MD_MODERATEDBY','Moderowane przez');
define('_MD_SEARCH','Szukaj');
//define('_MD_SEARCHRESULTS','Search Results');
define('_MD_FORUMINDEX','Forum %s Index');
define('_MD_POSTNEW','Nowy W�tek');
define('_MD_REGTOPOST','Aby pisa� nale�y by� zalogowanym');

//search.php
define('_MD_SEARCHALLFORUMS','Przeszukaj wszystkie fora');
define('_MD_FORUMC','Forum');
define('_MD_AUTHORC','Autor:');
define('_MD_SORTBY','Sortuj wg.');
define('_MD_DATE','Daty');
define('_MD_TOPIC','Tematu');
define('_MD_POST2','Postu');
define('_MD_USERNAME','Nazwy u�ytkownika');
define('_MD_BODY','Tre��');
define('_MD_SINCE','Od');

//viewforum.php
define('_MD_REPLIES','Odpowiedzi');
define('_MD_POSTER','Autor');
define('_MD_VIEWS','Ods�ony');
define('_MD_MORETHAN','Nowe posty [ W�tek Popularny ]');
define('_MD_MORETHAN2','Brak nowych post�w [ W�tek Popularny ]');
define('_MD_TOPICSHASATT','W�tek z za��cznikami');
define('_MD_TOPICHASPOLL','W�tek z ankiet�');
define('_MD_TOPICLOCKED','W�tek zablokowany');
define('_MD_LEGEND','Legenda');
define('_MD_NEXTPAGE','Nast�pna strona');
define('_MD_SORTEDBY','Sortuj wg.');
define('_MD_TOPICTITLE','tytu��w');
define('_MD_NUMBERREPLIES','ilo�ci odpowiedzi');
define('_MD_TOPICPOSTER','autor�w');
define('_MD_TOPICTIME','Czas publikacji');
define('_MD_LASTPOSTTIME','czasu ostatniej odpowiedzi');
define('_MD_ASCENDING','Rosn�co');
define('_MD_DESCENDING','Malej�co');
define('_MD_FROMLASTHOURS','Z ostatnich %s godzin');
define('_MD_FROMLASTDAYS','W ostatnich %s dniach');
define('_MD_THELASTYEAR','Rok wstecz');
define('_MD_BEGINNING','Od pocz�tku');
define('_MD_SEARCHTHISFORUM', 'Przeszukaj to Forum');
define('_MD_TOPIC_SUBJECTC','Prefix W�tku:');


define('_MD_RATINGS','Ocena');
define("_MD_CAN_POST", "<strong>Mo�esz </strong> rozpoczyna� nowe w�tki.<br />");
define("_MD_CANNOT_POST", "<strong>Nie mo�esz</strong> rozpoczyna� nowych w�tk�w.<br />");
define("_MD_CAN_VIEW", "<strong>Mo�esz</strong> przegl�da� w�tki.<br />");
define("_MD_CANNOT_VIEW", "<strong>Nie mo�esz</strong> ogl�da� w�tk�w.<br />");
define("_MD_CAN_REPLY", "<strong>Mo�esz</strong> dodawa� odpowiedzi.<br />");
define("_MD_CANNOT_REPLY", "<strong>Nie mo�esz</strong> dodawa� odpowiedzi.<br />");
define("_MD_CAN_EDIT", "<strong>Mo�esz</strong> edytowa� swoje posty.<br />");
define("_MD_CANNOT_EDIT", "<strong>Nie mo�esz</strong> edytowa� swoich post�w.<br />");
define("_MD_CAN_DELETE", "<strong>Mo�esz</strong> kasowa� swoje posty.<br />");
define("_MD_CANNOT_DELETE", "<strong>Nie mo�esz</strong> kasowa� swoich post�w.<br />");
define("_MD_CAN_ADDPOLL", "<strong>Mo�esz</strong> dodawa� ankiety.<br />");
define("_MD_CANNOT_ADDPOLL", "<strong>Nie mo�esz</strong> dodawa� ankiet.<br />");
define("_MD_CAN_VOTE", "<strong>Mo�esz</strong> g�osowa�.<br />");
define("_MD_CANNOT_VOTE", "<strong>Nie mo�esz</strong> g�osowa�.<br />");
define("_MD_CAN_ATTACH", "<strong>Mo�esz</strong> dodawa� za��czniki.<br />");
define("_MD_CANNOT_ATTACH", "<strong>Nie mo�esz</strong> dodawa� za��cznik�w.<br />");
define("_MD_CAN_NOAPPROVE", "<strong>Mo�esz</strong> pisa� bez weryfikacji.<br />");
define("_MD_CANNOT_NOAPPROVE", "<strong>Nie mo�esz</strong> pisa� bez weryfikacji.<br />");
define("_MD_CAN_TYPE", "<strong>Mo�esz</strong> u�ywa� typ�w temat�w.<br />");
define("_MD_CANNOT_TYPE", "<strong>Nie mo�esz</strong> u�ywa� typ�w temat�w.<br />");
define("_MD_CAN_HTML", "<strong>Mo�esz</strong> u�ywa� skad�ni HTML.<br />");
define("_MD_CANNOT_HTML", "<strong>Nie mo�esz</strong> u�ywa� skad�ni HTML.<br />");
define("_MD_CAN_UPLOAD", "<strong>Mo�esz</strong> uploadowa�.<br />");
define("_MD_CANNOT_UPLOAD", "<strong>Nie mo�esz</strong> uploadowa�.<br />");
define("_MD_CAN_SIGNATURE", "<strong>Mo�esz</strong> u�ywa� sygnatury.<br />");
define("_MD_CANNOT_SIGNATURE", "<strong>Nie mo�esz</strong> u�ywa� sygnatury.<br />");

define("_MD_IMTOPICS","Wa�ne w�tki");
define("_MD_NOTIMTOPICS","W�tki Forum");
define('_MD_FORUMOPTION', 'Opcje Forum');

define('_MD_VAUP','Obejrzyj wszystkie posty bez odpowiedzi');
define('_MD_VANP','Obejrzyj wszystkie nowe posty');


define('_MD_UNREPLIED','w�tki bez odpowiedzi');
define('_MD_UNREAD','nieprzeczytane w�tki');
define('_MD_ALL','wszystkie tematy');
define('_MD_ALLPOSTS','wszystkie posty');
define('_MD_VIEW','Obejrzyj');

//viewtopic.php
define('_MD_AUTHOR','Autor');
define('_MD_LOCKTOPIC','Zablokuj ten w�tek');
define('_MD_UNLOCKTOPIC','Odblokuj ten w�tek');
define('_MD_UNSTICKYTOPIC','Odklej w�tek');
define('_MD_STICKYTOPIC','Przyklej w�tek');
define('_MD_DIGESTTOPIC','Utw�rz Przegl�d z tego w�tku');
define('_MD_UNDIGESTTOPIC','Wyklucz z Przegl�du');
define('_MD_MOVETOPIC','Przenie� ten w�tek');
define('_MD_DELETETOPIC','Usu� ten w�tek');
define('_MD_TOP','G�ra');
define('_MD_BOTTOM','D�');
define('_MD_PREVTOPIC','Poprzedni w�tek');
define('_MD_NEXTTOPIC','Nast�pny w�tek');
define('_MD_GROUP','Grupa:');
define('_MD_QUICKREPLY','Szybka odpowied�');
define('_MD_POSTREPLY','Wy�lij odpowied�');
define('_MD_PRINTTOPICS','Drukuj w�tek');
define('_MD_PRINT','Drukuj');
define('_MD_REPORT','Raport');
define('_MD_PM','PM');
define('_MD_EMAIL','Email');
define('_MD_WWW','WWW');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK', 'URL do tego w�tku');
define('_MD_ADDTOLIST','Dodaj do Kontakt�w');
define('_MD_TOPICOPT', 'Opcje w�tku');
define('_MD_VIEWMODE', 'Wy�wietlaj');
define('_MD_NEWEST', 'Nowsze na pocz�tku');
define('_MD_OLDEST', 'Starsze na pocz�tku');

define('_MD_FORUMSEARCH','Przeszukaj forum');

define('_MD_RATED','Oceniony:');
define('_MD_RATE','Oce� w�tek');
define('_MD_RATEDESC','Oce� ten w�tek');
define('_MD_RATING','G�osuj');
define('_MD_RATE1','Bardzo Kiepski');
define('_MD_RATE2','Kiepski');
define('_MD_RATE3','�redni');
define('_MD_RATE4','Dobry');
define('_MD_RATE5','Bardzo Dobry');

define('_MD_TOPICOPTION','Opcje w�tku');
define('_MD_KARMA_REQUIREMENT', 'Warto�� Twojej karmy %s nie osi�gn�a wymaganego wyniku %s aby w��czy� si� do dyskusji. <br /> Prosz� spr�buj p�niej.');
define('_MD_REPLY_REQUIREMENT', 'Aby zobaczy� pozosta�e wypowiedzi, musisz si� najpierw zalogowa� i doda� swoj� w�asn� opini�.');
define('_MD_TOPICOPTIONADMIN','Opcje administracji w�tkiem');
define('_MD_POLLOPTIONADMIN','Opcje administracji ankiet�');

define('_MD_EDITPOLL','Edytuj ankiet�');
define('_MD_DELETEPOLL','Kasuj ankiet�');
define('_MD_RESTARTPOLL','Restartuj ankiet�');
define('_MD_ADDPOLL','Dodaj ankiet�');

define('_MD_QUICKREPLY_EMPTY','Dodaj tutaj szybk� odpowied�');

define('_MD_LEVEL','Poziom:');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP :');

define('_MD_BROWSING','Przegl�daj�cy w�tek:');
define('_MD_POSTTONEWS','Przekszta�� w�tek w informacj� News');

define('_MD_EXCEEDTHREADVIEW','Ilo�� odpowiedzi przekroczy�a ustalony limit<br />Zmieniono spos�b wy�wietlania');


//forumform.inc
//define('_MD_PRIVATE','This is a <strong>Private</strong> forum.<br />Only users with special access can post new topics and replies to this forum');
define('_MD_PRIVATE','To jest forum <strong>Prywatne</strong>.<br />Tylko u�ytkownicy ze specjalnymi uprawnieniami mog� w nim dyskutowa�');
define('_MD_QUOTE','Cytat');
define('_MD_VIEW_REQUIRE','Zobacz wymagania');
define('_MD_REQUIRE_KARMA','Karma');
define('_MD_REQUIRE_REPLY','Ilo�� post�w');
define('_MD_REQUIRE_NULL','Brak wymaga�');

define("_MD_SELECT_FORMTYPE","Wybierz typ formularza");

define("_MD_FORM_COMPACT","Kompaktowy");
define("_MD_FORM_DHTML","DHTML");
define("_MD_FORM_SPAW","Spaw Editor");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK Editor");
define("_MD_FORM_KOIVI","Koivi Editor");
define("_MD_FORM_TINYMCE","TinyMCE Editor");

// ERROR messages
define('_MD_ERRORFORUM','B��D: Nie wybrano forum!');
define('_MD_ERRORPOST','B��D: Nie wybrano postu!');
define('_MD_NORIGHTTOVIEW','Nie masz praw by przegl�da� to forum.');
define('_MD_NORIGHTTOPOST','Nie masz praw by pisa� w tym forum.');
define('_MD_NORIGHTTOEDIT','Nie masz praw by dokonywa� edycji w tym forum.');
define('_MD_NORIGHTTOREPLY','Nie masz praw by odpisywa� w tym forum.');
define('_MD_NORIGHTTOACCESS','Nie masz praw dost�pu do tego forum.');
define('_MD_ERRORTOPIC','B��D: Nie wybrano w�tku!');
define('_MD_ERRORCONNECT','B��D: Nie mo�na po��czy� si� z baz� danych.');
define('_MD_ERROREXIST','B��D: Wybrane forum nie istnieje.');
define('_MD_ERROROCCURED','Wyst�pi� b��d');
define('_MD_COULDNOTQUERY','Nie mo�na odpyta� bazy danych.');
define('_MD_FORUMNOEXIST','B��d - Wybrane forum/w�tek nie istnieje.');
define('_MD_USERNOEXIST','Taki u�ytkownik nie istnieje.');
define('_MD_COULDNOTREMOVE','B��d - Nie mo�na usun�� post� z bazy danych!');
define('_MD_COULDNOTREMOVETXT','B��d - Nie mo�na usun�� tre�ci postu!');
define('_MD_TIMEISUP','Min�� limit czasu przeznaczony na edycj� posta.');
define('_MD_TIMEISUPDEL','Min�� limit czasu przeznaczony na usuni�cie posta.');

//reply.php
define('_MD_ON','dnia'); //Posted on
define('_MD_USERWROTE','%s napisa�(a)):'); // %s is username
define('_MD_RE','Odp');

//post.php
define('_MD_EDITNOTALLOWED','Nie masz uprawnie� do edycji tego posta!');
define('_MD_EDITEDBY','Edytowany przez');
define('_MD_ANONNOTALLOWED','Nie mo�esz by� anonimowy je�li chcesz odpisa�.<br />Prosz� si� zarejestrowa�.');
define('_MD_THANKSSUBMIT','Dzi�kujemy za udzia� w dyskusji');
define('_MD_REPLYPOSTED','Wys�ano odpowied� do Twojego w�tku na forum.');
define('_MD_HELLO','Witaj %s,');
define('_MD_URRECEIVING','Otrzyma�e� t� wiadomo��, bo na forum %s zosta�a dodana odpowied� do w�tku, kt�ry subskrybujesz .'); // %s is your site name
define('_MD_CLICKBELOW','Kliknij na odno�nik poni�ej, aby przej�� do w�tku:');
define('_MD_WAITFORAPPROVAL','Dzi�kujemy. Tw�j post zostanie zweryfikowany przez moderatora.');
define('_MD_POSTING_LIMITED','Mo�esz zrobi� przerw� na kaw� i wr�ci� za oko�o %d sekund');

//forumform.inc
define('_MD_NAMEMAIL','Imi�/Email:');
define('_MD_LOGOUT','Wyloguj');
define('_MD_REGISTER','Rejestruj');
define('_MD_SUBJECTC','Temat:');
define('_MD_MESSAGEICON','Ikona Wiadomo�ci:');
define('_MD_MESSAGEC','Wiadomo��:');
define('_MD_ALLOWEDHTML','Dozwolony HTML:');
define('_MD_OPTIONS','Opcje:');
define('_MD_POSTANONLY','Pisz anonimowo');
define('_MD_DOSMILEY','W��cz U�miechy');
define('_MD_DOXCODE','W��cz Kod Xoops');
define('_MD_DOBR','W��cz �amanie wiersza (sugerujemy wy��czenie przy w��czonym trybie HTML)');
define('_MD_DOHTML','W��cz tagi HTML');
define('_MD_NEWPOSTNOTIFY', 'Powiadom mnie o nowych odpowiedziach w tym w�tku');
define('_MD_ATTACHSIG','Do��cz podpis');
define('_MD_POST','Post');
define('_MD_SUBMIT','Zatwierd�');
define('_MD_CANCELPOST','Anuluj');
define('_MD_REMOVE','Usu�');
define('_MD_UPLOAD','Wy�lij');

// forumuserpost.php
define('_MD_ADD','Dodaj');
define('_MD_REPLY','Odpisz');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Zobacz w�tek');
define('_MD_RETURNTOTHEFORUM','Powr�t do forum');
define('_MD_RETURNFORUMINDEX','Powr�t do spisu for�w');
define('_MD_ERROR_BACK','B��d - Prosz� spr�bowa� jeszcze raz p�niej.');
define('_MD_GOTONEWFORUM','Zobacz uaktualniony w�tek');

define('_MD_TOPICDELETE','W�tek zosta� skasowany.');
define('_MD_TOPICMERGE','W�tek zosa� po��czony.');
define('_MD_TOPICMOVE','W�tek zosta� przeniesiony.');
define('_MD_TOPICLOCK','W�tek zosta� zablokowany.');
define('_MD_TOPICUNLOCK','W�tek zosta� odblokowany.');
define('_MD_TOPICSTICKY','W�tek zosta� przyklejony.');
define('_MD_TOPICUNSTICKY','W�tek zosta� odklejony.');
define('_MD_TOPICDIGEST','W�tek zosta� dodany do Przegl�du.');
define('_MD_TOPICUNDIGEST','W�tek zosta� wykluczony z Przegl�du.');

define('_MD_DELETE','Usu�');
define('_MD_MOVE','Przenie�');
define('_MD_MERGE','Po��cz');
define('_MD_LOCK','Zablokuj');
define('_MD_UNLOCK','Odblokuj');
define('_MD_STICKY','Przyklej');
define('_MD_UNSTICKY','Odklej');
define('_MD_DIGEST','Przegl�d');
define('_MD_UNDIGEST','Anuluj Przegl�d');

define('_MD_DESC_DELETE','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>ca�kowicie</strong> usuni�te! Operacji nie da si� cofn��!');
define('_MD_DESC_MOVE','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>przeniesione</strong>.');
define('_MD_DESC_MERGE','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� po��czone z wybranym tematem.<br /><strong>ID tematu przeznaczenia musi by� mniejsze ni� obecnego</strong>.');
define('_MD_DESC_LOCK','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>zablokowane</strong>. Mo�na go b�dzie p�niej odblokowa�.');
define('_MD_DESC_UNLOCK','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>odblokowane</strong>. Mo�na go b�dzie p�niej zablokowa�.');
define('_MD_DESC_STICKY','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>przyklejone</strong>. Mo�na go b�dzie p�niej odklei�.');
define('_MD_DESC_UNSTICKY','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>odklejone</strong>. Mo�na go b�dzie p�niej przyklei�.');
define('_MD_DESC_DIGEST','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>wyr�nione w przegl�dzie</strong>.');
define('_MD_DESC_UNDIGEST','Po wcisni�ciu klawisza na dole strony wybrany w�tek i wszystkie odpowiedzi, zostan� <strong>usuni�te z przegl�du</strong>.');

define('_MD_MERGETOPICTO','Po��cz temat z:');
define('_MD_MOVETOPICTO','Przenie� w�tek do:');
define('_MD_NOFORUMINDB','Nie ma for�w w bazie');

// delete.php
define('_MD_DELNOTALLOWED','Nie mo�esz usun�� tego posta.');
define('_MD_AREUSUREDEL','Czy na pewno usun�� tego posta i powsta�e po nim?');
define('_MD_POSTSDELETED','Wybrany post i od niego zale�ne zosta�y usuni�te.');
define('_MD_POSTDELETED','Wybrany post zosta� usuni�ty.');

// definitions moved from global.
define('_MD_THREAD','W�tek');
define('_MD_FROM','Miasto');
define('_MD_JOINED','Do��czy�');
define('_MD_ONLINE','Online');
define('_MD_OFFLINE','Offline');
define('_MD_FLAT', 'P�aski');


// online.php
define('_MD_USERS_ONLINE', 'U�ytkownicy Online:');
define('_MD_ANONYMOUS_USERS', 'Anonimowi');
define('_MD_REGISTERED_USERS', 'Zarejestrowani: ');
define('_MD_BROWSING_FORUM','U�ytkownik�w przegl�daj�cych forum');
define('_MD_TOTAL_ONLINE','Jest %d U�ytkownik�w Online.');
define('_MD_ADMINISTRATOR','Administrator');

define('_MD_NO_SUCH_FILE','Plik nie istnieje!');
//define('_MD_ERROR_UPATEATTACHMENT','B��d aktualizacji za��cznika');


// ratethread.php
define("_MD_CANTVOTEOWN", "Nie mo�esz g�osowa� na temat przez siebie rozpocz�ty.<br />Wszystkie g�osy s� zapisywane w logu.");
define("_MD_VOTEONCE", "Nie g�osuj na ten sam w�tek wi�cej ni� raz.");
define("_MD_VOTEAPPRE", "G�os zosta� zaliczony.");
define("_MD_THANKYOU", "Dzi�kujemy za oddanie g�osu na stronie %s"); // %s is your site name
define("_MD_VOTES","G�osy");
define("_MD_NOVOTERATE","Jeszcze nie ocenia�e� tego w�tku");


// polls.php
define("_MD_POLL_DBUPDATED","Baz� uaktualniono pomy�lnie!");
define("_MD_POLL_POLLCONF","Konfiguracja ankiet");
define("_MD_POLL_POLLSLIST", "Lista Ankiet");
define("_MD_POLL_AUTHOR", "Autor ankiety");
define("_MD_POLL_DISPLAYBLOCK", "Wyswietli� w bloku?");
define("_MD_POLL_POLLQUESTION", "Temat ankiety");
define("_MD_POLL_VOTERS", "G�osuj�cych");
define("_MD_POLL_VOTES", "G�os�w");
define("_MD_POLL_EXPIRATION", "Termin wyga�ni�cia");
define("_MD_POLL_EXPIRED", "Wygas�a");
define("_MD_POLL_VIEWLOG","Przejrzyj log");
define("_MD_POLL_CREATNEWPOLL", "Nowa ankieta");
define("_MD_POLL_POLLDESC", "Opis ankiety");
define("_MD_POLL_DISPLAYORDER", "Kolejno�� wy�wietlania");
define("_MD_POLL_ALLOWMULTI", "Zezwoli� na wielokrotny wyb�r?");
define("_MD_POLL_NOTIFY", "Powiadomi� autora o wyga�ni�ciu?");
define("_MD_POLL_POLLOPTIONS", "Opcje");
define("_MD_POLL_EDITPOLL", "Edytuj");
define("_MD_POLL_FORMAT", "Format: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME", "Aktualny czas %s");
define("_MD_POLL_EXPIREDAT", "Wygasa %s");
define("_MD_POLL_RESTART", "Restartuj");
define("_MD_POLL_ADDMORE", "Dodaj wi�cej opcji");
define("_MD_POLL_RUSUREDEL", "Czy na pewno usun�� t� ankiete i wszystkie komentarze?");
define("_MD_POLL_RESTARTPOLL", "Restart ankiety");
define("_MD_POLL_RESET", "Resetowa� logi tej ankiety?");
define("_MD_POLL_ADDPOLL","Dodaj ankiet�");
define("_MD_POLLMODULE_ERROR","nie mo�na u�y� modu�u ankiet Xoopsa");

//report.php
define("_MD_REPORTED", "Dzi�kujemy za wsy�anie raportu! Moderator zapozna si� z nim tak szybko jak to tylko b�dzie mo�liwe..");
define("_MD_REPORT_ERROR", "B��d wysy�ania raportu!.");
define("_MD_REPORT_TEXT", "Informacja:");

define("_MD_PDF","Utw�rz PDF z posta");
define("_MD_PDF_PAGE","Strona %s");

//print.php
define("_MD_COMEFROM","Tre�� pochodzi z:");

//viewpost.php
define("_MD_VIEWALLPOSTS","Wszystkie posty");
define("_MD_VIEWTOPIC","W�tek");
define("_MD_VIEWFORUM","Forum");

define("_MD_COMPACT","Kompaktowy");

define("_MD_MENU_SELECT","SELECT");
define("_MD_MENU_HOVER","HOVER");
define("_MD_MENU_CLICK","CLICK");

define("_MD_WELCOME_SUBJECT","%s do��czy� do forum");
define("_MD_WELCOME_MESSAGE","Witaj, %s to nowicjusz.");

define("_MD_VIEWNEWPOSTS", "Zobacz nowe posty");

define("_MD_INVALID_SUBMIT","Przes�anie wiadomo�ci nie powiod�o si�. Nie uda�o si� dopasowa� parametr�w sesji. Spr�buj zatwierdzi� formularz ponownie. Je�li nadal b�d� wyst�powa� b��dy zaloguj si� ponownie.");

define("_MD_ACCOUNT","Konto");
define("_MD_NAME","Nazwa u�ytkownika");
define("_MD_PASSWORD","Has�o");
define("_MD_LOGIN","Zaloguj");

/*
define("_MD_TRANSFER", "Transfer");
define("_MD_TRANSFER_DESC", "Transfer the post to other applications");
define("_MD_TRANSFER_DONE", "The action is done successully: %s");
*/

define("_MD_APPROVE", "Zatwierd�");
define("_MD_RESTORE", "Przywr��");
define("_MD_SPLIT_ONE", "Wynij");
define("_MD_SPLIT_TREE", "Wytnij wszsytkie podleg�e");
define("_MD_SPLIT_ALL", "Wytnij wszystkie");

define("_MD_TYPE_ADMIN", "Tryb Admina");
define("_MD_TYPE_VIEW", "Tryb zwyk�y");
define("_MD_TYPE_PENDING", "Oczekuj�ce");
define("_MD_TYPE_DELETED", "Usun�te");
define("_MD_TYPE_SUSPEND", "Zawieszenie");

define("_MD_DBUPDATED", "Baza zaktualizowana pomy�lnie!");

define("_MD_SUSPEND_SUBJECT", "U�ytkownik %s jest zawieszony na %d dni");
define("_MD_SUSPEND_TEXT", "U�ytkownik %s jest zawieszony na %d dni, pow�d:<br />[quote]%s[/quote]<br /><br />Zawieszenie trwa do %s");
define("_MD_SUSPEND_UID", "ID u�ytkownika");
define("_MD_SUSPEND_IP", "IP (pe�ne lub zakres)");
define("_MD_SUSPEND_DURATION", "Czas trwania (dni)");
define("_MD_SUSPEND_DESC", "Pow�d");
define("_MD_SUSPEND_LIST", "Lista zawieszonych");
define("_MD_SUSPEND_START", "Pocz�tek");
define("_MD_SUSPEND_EXPIRE", "Koniec");
define("_MD_SUSPEND_SCOPE", "Zasi�g");
define("_MD_SUSPEND_MANAGEMENT", "Zawieszanie u�ytkownik�w");
define("_MD_SUSPEND_NOACCESS", "Zosta�e� zawieszony");

define("_MD_NEWBB_TYPE", "Typ tematu");

//define("_MD_NEWBB_TAG", "Tag");
/*
// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"
// insert double '\' before 't', 'r', 'n'
define("_MD_TODAY", "\D\z\i\s\i\a\j G:i:s");
define("_MD_YESTERDAY", "\W\c\z\o\\r\a\j G:i:s");
define("_MD_MONTHDAY", "n/j G:i:s");
define("_MD_YEARMONTHDAY", "Y/n/j G:i");
*/
?>