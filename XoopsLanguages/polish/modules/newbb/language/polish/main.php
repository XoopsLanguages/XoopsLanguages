<?php
// $Id: main.php,v 1.1 2007/02/10 18:56:09 dap997 Exp $
if (defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','Błąd');
//define('_MD_NOPOSTS','Brak postów');
//define('_MD_GO','OK!');
define('_MD_SELFORUM','Wybierz Forum');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Załącznik:');
define('_MD_ALLOWED_EXTENSIONS','Dopuszczalne typy plików');
define('_MD_MAX_FILESIZE','Maksymalny rozmiar pliku');
define('_MD_ATTACHMENT','Dołącz plik');
define('_MD_FILESIZE','Rozmiar');
define('_MD_HITS','Pobrań');
define('_MD_GROUPS','Grupy:');
define('_MD_DEL_ONE','Usuń tylko tego posta');
define('_MD_DEL_RELATED','Usuń wszystkie posty w tym temacie');
define('_MD_MARK_ALL_FORUMS','Zaznacz wszystkie fora jako');
define('_MD_MARK_ALL_TOPICS','Zaznacz wszystkie wątki jako');
define('_MD_MARK_UNREAD','nieprzeczytane');
define('_MD_MARK_READ','przeczytane');
define('_MD_ALL_FORUM_MARKED','Wszystkie fora zaznaczone jako');
define('_MD_ALL_TOPIC_MARKED','Wszystkie wątki zaznaczone jako');
define('_MD_BOARD_DISCLAIMER','Objaśnienie Forum');


//index.php
define('_MD_ADMINCP','Admin CP');
define('_MD_FORUM','Forum');
define('_MD_WELCOME','Witaj na Forum %s.');
define('_MD_TOPICS','Wątki');
define('_MD_POSTS','Posty');
define('_MD_LASTPOST','Najnowszy');
define('_MD_MODERATOR','Moderator');
define('_MD_NEWPOSTS','Nowych postów');
define('_MD_NONEWPOSTS','Brak nowych postów');
define('_MD_PRIVATEFORUM','Forum Nieaktywne');
define('_MD_BY','przez'); // Posted by
define('_MD_TOSTART','Aby rozpocząć przeglądanie naszego forum, wybierz odpowiednie z listy poniżej.');
define('_MD_TOTALTOPICSC','Wszystkich wątków: ');
define('_MD_TOTALPOSTSC','Wszystkich postów: ');
define('_MD_TOTALUSER','Zarejestrowanych użytkowników: ');
define('_MD_TIMENOW','Aktualny czas: %s');
define('_MD_USER_LASTVISIT','Data twojej ostatniej wizyty: %s');

define('_MD_USER_LASTPOST', 'Twój ostatni post: %s');
define('_MD_USER_NOLASTPOST', 'Jeszcze nie napisałeś żadnego posta');
define('_MD_USER_TOPICS', 'Twoje tematy: ');
define('_MD_USER_POSTS', 'Posty: ');
define('_MD_USER_DIGESTS', 'Skróty: ');

define('_MD_VIEW_NEWPOSTS', 'Pokaż nowe posty');

define('_MD_ADVSEARCH','Wyszukiwanie zaawansowane');
define('_MD_POSTEDON','Wysłano: ');
define('_MD_SUBJECT','Temat');
define('_MD_INACTIVEFORUM_NEWPOSTS','Nieaktywne Forum z nowymi postami');
define('_MD_INACTIVEFORUM_NONEWPOSTS','Nieaktywne Forum bez nowych postów');
define('_MD_SUBFORUMS','Pod-forum');
define('_MD_MAINFORUMOPT', 'Ustawienia główne');
define("_MD_PENDING_POSTS_FOR_AUTH","Posty oczekujące na zatwierdzenie:");

define('_MD_TODAYTOPICSC','Dzisiejsze tematy: ');
define('_MD_TODAYPOSTSC','Dzisiejsze posty: ');
define('_MD_TOTALDIGESTSC','Total Digests: ');



//page_header.php
define('_MD_MODERATEDBY','Moderowane przez');
define('_MD_SEARCH','Szukaj');
//define('_MD_SEARCHRESULTS','Search Results');
define('_MD_FORUMINDEX','Forum %s Index');
define('_MD_POSTNEW','Nowy Wątek');
define('_MD_REGTOPOST','Aby pisać należy być zalogowanym');

//search.php
define('_MD_SEARCHALLFORUMS','Przeszukaj wszystkie fora');
define('_MD_FORUMC','Forum');
define('_MD_AUTHORC','Autor:');
define('_MD_SORTBY','Sortuj wg.');
define('_MD_DATE','Daty');
define('_MD_TOPIC','Tematu');
define('_MD_POST2','Postu');
define('_MD_USERNAME','Nazwy użytkownika');
define('_MD_BODY','Treść');
define('_MD_SINCE','Od');

//viewforum.php
define('_MD_REPLIES','Odpowiedzi');
define('_MD_POSTER','Autor');
define('_MD_VIEWS','Odsłony');
define('_MD_MORETHAN','Nowe posty [ Wątek Popularny ]');
define('_MD_MORETHAN2','Brak nowych postów [ Wątek Popularny ]');
define('_MD_TOPICSHASATT','Wątek z załącznikami');
define('_MD_TOPICHASPOLL','Wątek z ankietą');
define('_MD_TOPICLOCKED','Wątek zablokowany');
define('_MD_LEGEND','Legenda');
define('_MD_NEXTPAGE','Następna strona');
define('_MD_SORTEDBY','Sortuj wg.');
define('_MD_TOPICTITLE','tytułów');
define('_MD_NUMBERREPLIES','ilości odpowiedzi');
define('_MD_TOPICPOSTER','autorów');
define('_MD_TOPICTIME','Czas publikacji');
define('_MD_LASTPOSTTIME','czasu ostatniej odpowiedzi');
define('_MD_ASCENDING','Rosnąco');
define('_MD_DESCENDING','Malejąco');
define('_MD_FROMLASTHOURS','Z ostatnich %s godzin');
define('_MD_FROMLASTDAYS','W ostatnich %s dniach');
define('_MD_THELASTYEAR','Rok wstecz');
define('_MD_BEGINNING','Od początku');
define('_MD_SEARCHTHISFORUM', 'Przeszukaj to Forum');
define('_MD_TOPIC_SUBJECTC','Prefix Wątku:');


define('_MD_RATINGS','Ocena');
define("_MD_CAN_POST", "<strong>Możesz </strong> rozpoczynać nowe wątki.<br />");
define("_MD_CANNOT_POST", "<strong>Nie możesz</strong> rozpoczynać nowych wątków.<br />");
define("_MD_CAN_VIEW", "<strong>Możesz</strong> przeglądać wątki.<br />");
define("_MD_CANNOT_VIEW", "<strong>Nie możesz</strong> oglądać wątków.<br />");
define("_MD_CAN_REPLY", "<strong>Możesz</strong> dodawać odpowiedzi.<br />");
define("_MD_CANNOT_REPLY", "<strong>Nie możesz</strong> dodawać odpowiedzi.<br />");
define("_MD_CAN_EDIT", "<strong>Możesz</strong> edytować swoje posty.<br />");
define("_MD_CANNOT_EDIT", "<strong>Nie możesz</strong> edytować swoich postów.<br />");
define("_MD_CAN_DELETE", "<strong>Możesz</strong> kasować swoje posty.<br />");
define("_MD_CANNOT_DELETE", "<strong>Nie możesz</strong> kasować swoich postów.<br />");
define("_MD_CAN_ADDPOLL", "<strong>Możesz</strong> dodawać ankiety.<br />");
define("_MD_CANNOT_ADDPOLL", "<strong>Nie możesz</strong> dodawać ankiet.<br />");
define("_MD_CAN_VOTE", "<strong>Możesz</strong> głosować.<br />");
define("_MD_CANNOT_VOTE", "<strong>Nie możesz</strong> głosować.<br />");
define("_MD_CAN_ATTACH", "<strong>Możesz</strong> dodawać załączniki.<br />");
define("_MD_CANNOT_ATTACH", "<strong>Nie możesz</strong> dodawać załączników.<br />");
define("_MD_CAN_NOAPPROVE", "<strong>Możesz</strong> pisać bez weryfikacji.<br />");
define("_MD_CANNOT_NOAPPROVE", "<strong>Nie możesz</strong> pisać bez weryfikacji.<br />");
define("_MD_CAN_TYPE", "<strong>Możesz</strong> używać typów tematów.<br />");
define("_MD_CANNOT_TYPE", "<strong>Nie możesz</strong> używać typów tematów.<br />");
define("_MD_CAN_HTML", "<strong>Możesz</strong> używać skadłni HTML.<br />");
define("_MD_CANNOT_HTML", "<strong>Nie możesz</strong> używać skadłni HTML.<br />");
define("_MD_CAN_UPLOAD", "<strong>Możesz</strong> uploadować.<br />");
define("_MD_CANNOT_UPLOAD", "<strong>Nie możesz</strong> uploadować.<br />");
define("_MD_CAN_SIGNATURE", "<strong>Możesz</strong> używać sygnatury.<br />");
define("_MD_CANNOT_SIGNATURE", "<strong>Nie możesz</strong> używać sygnatury.<br />");

define("_MD_IMTOPICS","Ważne wątki");
define("_MD_NOTIMTOPICS","Wątki Forum");
define('_MD_FORUMOPTION', 'Opcje Forum');

define('_MD_VAUP','Obejrzyj wszystkie posty bez odpowiedzi');
define('_MD_VANP','Obejrzyj wszystkie nowe posty');


define('_MD_UNREPLIED','wątki bez odpowiedzi');
define('_MD_UNREAD','nieprzeczytane wątki');
define('_MD_ALL','wszystkie tematy');
define('_MD_ALLPOSTS','wszystkie posty');
define('_MD_VIEW','Obejrzyj');

//viewtopic.php
define('_MD_AUTHOR','Autor');
define('_MD_LOCKTOPIC','Zablokuj ten wątek');
define('_MD_UNLOCKTOPIC','Odblokuj ten wątek');
define('_MD_UNSTICKYTOPIC','Odklej wątek');
define('_MD_STICKYTOPIC','Przyklej wątek');
define('_MD_DIGESTTOPIC','Utwórz Przegląd z tego wątku');
define('_MD_UNDIGESTTOPIC','Wyklucz z Przeglądu');
define('_MD_MOVETOPIC','Przenieś ten wątek');
define('_MD_DELETETOPIC','Usuń ten wątek');
define('_MD_TOP','Góra');
define('_MD_BOTTOM','Dół');
define('_MD_PREVTOPIC','Poprzedni wątek');
define('_MD_NEXTTOPIC','Następny wątek');
define('_MD_GROUP','Grupa:');
define('_MD_QUICKREPLY','Szybka odpowiedź');
define('_MD_POSTREPLY','Wyślij odpowiedź');
define('_MD_PRINTTOPICS','Drukuj wątek');
define('_MD_PRINT','Drukuj');
define('_MD_REPORT','Raport');
define('_MD_PM','PM');
define('_MD_EMAIL','Email');
define('_MD_WWW','WWW');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK', 'URL do tego wątku');
define('_MD_ADDTOLIST','Dodaj do Kontaktów');
define('_MD_TOPICOPT', 'Opcje wątku');
define('_MD_VIEWMODE', 'Wyświetlaj');
define('_MD_NEWEST', 'Nowsze na początku');
define('_MD_OLDEST', 'Starsze na początku');

define('_MD_FORUMSEARCH','Przeszukaj forum');

define('_MD_RATED','Oceniony:');
define('_MD_RATE','Oceń wątek');
define('_MD_RATEDESC','Oceń ten wątek');
define('_MD_RATING','Głosuj');
define('_MD_RATE1','Bardzo Kiepski');
define('_MD_RATE2','Kiepski');
define('_MD_RATE3','Średni');
define('_MD_RATE4','Dobry');
define('_MD_RATE5','Bardzo Dobry');

define('_MD_TOPICOPTION','Opcje wątku');
define('_MD_KARMA_REQUIREMENT', 'Wartość Twojej karmy %s nie osiągnęła wymaganego wyniku %s aby włączyć się do dyskusji. <br /> Proszę spróbuj póĄniej.');
define('_MD_REPLY_REQUIREMENT', 'Aby zobaczyć pozostałe wypowiedzi, musisz się najpierw zalogować i dodać swoją własną opinię.');
define('_MD_TOPICOPTIONADMIN','Opcje administracji wątkiem');
define('_MD_POLLOPTIONADMIN','Opcje administracji ankietą');

define('_MD_EDITPOLL','Edytuj ankietę');
define('_MD_DELETEPOLL','Kasuj ankietę');
define('_MD_RESTARTPOLL','Restartuj ankietę');
define('_MD_ADDPOLL','Dodaj ankietę');

define('_MD_QUICKREPLY_EMPTY','Dodaj tutaj szybką odpowiedĄ');

define('_MD_LEVEL','Poziom:');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP :');

define('_MD_BROWSING','Przeglądający wątek:');
define('_MD_POSTTONEWS','Przekształć wątek w informację News');

define('_MD_EXCEEDTHREADVIEW','Ilość odpowiedzi przekroczyła ustalony limit<br />Zmieniono sposób wyświetlania');


//forumform.inc
//define('_MD_PRIVATE','This is a <strong>Private</strong> forum.<br />Only users with special access can post new topics and replies to this forum');
define('_MD_PRIVATE','To jest forum <strong>Prywatne</strong>.<br />Tylko użytkownicy ze specjalnymi uprawnieniami mogą w nim dyskutować');
define('_MD_QUOTE','Cytat');
define('_MD_VIEW_REQUIRE','Zobacz wymagania');
define('_MD_REQUIRE_KARMA','Karma');
define('_MD_REQUIRE_REPLY','Ilość postów');
define('_MD_REQUIRE_NULL','Brak wymagań');

define("_MD_SELECT_FORMTYPE","Wybierz typ formularza");

define("_MD_FORM_COMPACT","Kompaktowy");
define("_MD_FORM_DHTML","DHTML");
define("_MD_FORM_SPAW","Spaw Editor");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK Editor");
define("_MD_FORM_KOIVI","Koivi Editor");
define("_MD_FORM_TINYMCE","TinyMCE Editor");

// ERROR messages
define('_MD_ERRORFORUM','BŁĄD: Nie wybrano forum!');
define('_MD_ERRORPOST','BŁĄD: Nie wybrano postu!');
define('_MD_NORIGHTTOVIEW','Nie masz praw by przeglądać to forum.');
define('_MD_NORIGHTTOPOST','Nie masz praw by pisać w tym forum.');
define('_MD_NORIGHTTOEDIT','Nie masz praw by dokonywać edycji w tym forum.');
define('_MD_NORIGHTTOREPLY','Nie masz praw by odpisywać w tym forum.');
define('_MD_NORIGHTTOACCESS','Nie masz praw dostępu do tego forum.');
define('_MD_ERRORTOPIC','BŁĄD: Nie wybrano wątku!');
define('_MD_ERRORCONNECT','BŁĄD: Nie można połączyć się z bazą danych.');
define('_MD_ERROREXIST','BŁĄD: Wybrane forum nie istnieje.');
define('_MD_ERROROCCURED','Wystąpił błąd');
define('_MD_COULDNOTQUERY','Nie można odpytać bazy danych.');
define('_MD_FORUMNOEXIST','Błąd - Wybrane forum/wątek nie istnieje.');
define('_MD_USERNOEXIST','Taki użytkownik nie istnieje.');
define('_MD_COULDNOTREMOVE','Błąd - Nie można usunąć postó z bazy danych!');
define('_MD_COULDNOTREMOVETXT','Błąd - Nie można usunąć treści postu!');
define('_MD_TIMEISUP','Minął limit czasu przeznaczony na edycję posta.');
define('_MD_TIMEISUPDEL','Minął limit czasu przeznaczony na usunięcie posta.');

//reply.php
define('_MD_ON','dnia'); //Posted on
define('_MD_USERWROTE','%s napisał(a)):'); // %s is username
define('_MD_RE','Odp');

//post.php
define('_MD_EDITNOTALLOWED','Nie masz uprawnień do edycji tego posta!');
define('_MD_EDITEDBY','Edytowany przez');
define('_MD_ANONNOTALLOWED','Nie możesz być anonimowy jeśli chcesz odpisać.<br />Proszę się zarejestrować.');
define('_MD_THANKSSUBMIT','Dziękujemy za udział w dyskusji');
define('_MD_REPLYPOSTED','Wysłano odpowiedĄ do Twojego wątku na forum.');
define('_MD_HELLO','Witaj %s,');
define('_MD_URRECEIVING','Otrzymałeś tą wiadomość, bo na forum %s została dodana odpowiedĄ do wątku, który subskrybujesz .'); // %s is your site name
define('_MD_CLICKBELOW','Kliknij na odnośnik poniżej, aby przejść do wątku:');
define('_MD_WAITFORAPPROVAL','Dziękujemy. Twój post zostanie zweryfikowany przez moderatora.');
define('_MD_POSTING_LIMITED','Możesz zrobić przerwę na kawę i wrócić za około %d sekund');

//forumform.inc
define('_MD_NAMEMAIL','Imię/Email:');
define('_MD_LOGOUT','Wyloguj');
define('_MD_REGISTER','Rejestruj');
define('_MD_SUBJECTC','Temat:');
define('_MD_MESSAGEICON','Ikona Wiadomości:');
define('_MD_MESSAGEC','Wiadomość:');
define('_MD_ALLOWEDHTML','Dozwolony HTML:');
define('_MD_OPTIONS','Opcje:');
define('_MD_POSTANONLY','Pisz anonimowo');
define('_MD_DOSMILEY','Włącz Uśmiechy');
define('_MD_DOXCODE','Włącz Kod Xoops');
define('_MD_DOBR','Włącz łamanie wiersza (sugerujemy wyłączenie przy włączonym trybie HTML)');
define('_MD_DOHTML','Włącz tagi HTML');
define('_MD_NEWPOSTNOTIFY', 'Powiadom mnie o nowych odpowiedziach w tym wątku');
define('_MD_ATTACHSIG','Dołącz podpis');
define('_MD_POST','Post');
define('_MD_SUBMIT','Zatwierdź');
define('_MD_CANCELPOST','Anuluj');
define('_MD_REMOVE','Usuń');
define('_MD_UPLOAD','Wyślij');

// forumuserpost.php
define('_MD_ADD','Dodaj');
define('_MD_REPLY','Odpisz');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Zobacz wątek');
define('_MD_RETURNTOTHEFORUM','Powrót do forum');
define('_MD_RETURNFORUMINDEX','Powrót do spisu forów');
define('_MD_ERROR_BACK','Błąd - Proszę spróbować jeszcze raz póĄniej.');
define('_MD_GOTONEWFORUM','Zobacz uaktualniony wątek');

define('_MD_TOPICDELETE','Wątek został skasowany.');
define('_MD_TOPICMERGE','Wątek zosał połączony.');
define('_MD_TOPICMOVE','Wątek został przeniesiony.');
define('_MD_TOPICLOCK','Wątek został zablokowany.');
define('_MD_TOPICUNLOCK','Wątek został odblokowany.');
define('_MD_TOPICSTICKY','Wątek został przyklejony.');
define('_MD_TOPICUNSTICKY','Wątek został odklejony.');
define('_MD_TOPICDIGEST','Wątek został dodany do Przeglądu.');
define('_MD_TOPICUNDIGEST','Wątek został wykluczony z Przeglądu.');

define('_MD_DELETE','Usuń');
define('_MD_MOVE','Przenieś');
define('_MD_MERGE','Połącz');
define('_MD_LOCK','Zablokuj');
define('_MD_UNLOCK','Odblokuj');
define('_MD_STICKY','Przyklej');
define('_MD_UNSTICKY','Odklej');
define('_MD_DIGEST','Przegląd');
define('_MD_UNDIGEST','Anuluj Przegląd');

define('_MD_DESC_DELETE','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>całkowicie</strong> usunięte! Operacji nie da się cofnąć!');
define('_MD_DESC_MOVE','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>przeniesione</strong>.');
define('_MD_DESC_MERGE','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną połączone z wybranym tematem.<br /><strong>ID tematu przeznaczenia musi być mniejsze niż obecnego</strong>.');
define('_MD_DESC_LOCK','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>zablokowane</strong>. Można go będzie później odblokować.');
define('_MD_DESC_UNLOCK','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>odblokowane</strong>. Można go będzie później zablokować.');
define('_MD_DESC_STICKY','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>przyklejone</strong>. Można go będzie później odkleić.');
define('_MD_DESC_UNSTICKY','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>odklejone</strong>. Można go będzie później przykleić.');
define('_MD_DESC_DIGEST','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>wyróżnione w przeglądzie</strong>.');
define('_MD_DESC_UNDIGEST','Po wcisnięciu klawisza na dole strony wybrany wątek i wszystkie odpowiedzi, zostaną <strong>usunięte z przeglądu</strong>.');

define('_MD_MERGETOPICTO','Połącz temat z:');
define('_MD_MOVETOPICTO','Przenieś wątek do:');
define('_MD_NOFORUMINDB','Nie ma forów w bazie');

// delete.php
define('_MD_DELNOTALLOWED','Nie możesz usunąć tego posta.');
define('_MD_AREUSUREDEL','Czy na pewno usunąć tego posta i powstałe po nim?');
define('_MD_POSTSDELETED','Wybrany post i od niego zależne zostały usunięte.');
define('_MD_POSTDELETED','Wybrany post został usunięty.');

// definitions moved from global.
define('_MD_THREAD','Wątek');
define('_MD_FROM','Miasto');
define('_MD_JOINED','Dołączył');
define('_MD_ONLINE','Online');
define('_MD_OFFLINE','Offline');
define('_MD_FLAT', 'Płaski');


// online.php
define('_MD_USERS_ONLINE', 'Użytkownicy Online:');
define('_MD_ANONYMOUS_USERS', 'Anonimowi');
define('_MD_REGISTERED_USERS', 'Zarejestrowani: ');
define('_MD_BROWSING_FORUM','Użytkowników przeglądających forum');
define('_MD_TOTAL_ONLINE','Jest %d Użytkowników Online.');
define('_MD_ADMINISTRATOR','Administrator');

define('_MD_NO_SUCH_FILE','Plik nie istnieje!');
//define('_MD_ERROR_UPATEATTACHMENT','Błąd aktualizacji załącznika');


// ratethread.php
define("_MD_CANTVOTEOWN", "Nie możesz głosować na temat przez siebie rozpoczęty.<br />Wszystkie głosy są zapisywane w logu.");
define("_MD_VOTEONCE", "Nie głosuj na ten sam wątek więcej niż raz.");
define("_MD_VOTEAPPRE", "Głos został zaliczony.");
define("_MD_THANKYOU", "Dziękujemy za oddanie głosu na stronie %s"); // %s is your site name
define("_MD_VOTES","Głosy");
define("_MD_NOVOTERATE","Jeszcze nie oceniałeś tego wątku");


// polls.php
define("_MD_POLL_DBUPDATED","Bazę uaktualniono pomyślnie!");
define("_MD_POLL_POLLCONF","Konfiguracja ankiet");
define("_MD_POLL_POLLSLIST", "Lista Ankiet");
define("_MD_POLL_AUTHOR", "Autor ankiety");
define("_MD_POLL_DISPLAYBLOCK", "Wyswietlić w bloku?");
define("_MD_POLL_POLLQUESTION", "Temat ankiety");
define("_MD_POLL_VOTERS", "Głosujących");
define("_MD_POLL_VOTES", "Głosów");
define("_MD_POLL_EXPIRATION", "Termin wygaśnięcia");
define("_MD_POLL_EXPIRED", "Wygasła");
define("_MD_POLL_VIEWLOG","Przejrzyj log");
define("_MD_POLL_CREATNEWPOLL", "Nowa ankieta");
define("_MD_POLL_POLLDESC", "Opis ankiety");
define("_MD_POLL_DISPLAYORDER", "Kolejność wyświetlania");
define("_MD_POLL_ALLOWMULTI", "Zezwolić na wielokrotny wybór?");
define("_MD_POLL_NOTIFY", "Powiadomić autora o wygaśnięciu?");
define("_MD_POLL_POLLOPTIONS", "Opcje");
define("_MD_POLL_EDITPOLL", "Edytuj");
define("_MD_POLL_FORMAT", "Format: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME", "Aktualny czas %s");
define("_MD_POLL_EXPIREDAT", "Wygasa %s");
define("_MD_POLL_RESTART", "Restartuj");
define("_MD_POLL_ADDMORE", "Dodaj więcej opcji");
define("_MD_POLL_RUSUREDEL", "Czy na pewno usunąć tą ankiete i wszystkie komentarze?");
define("_MD_POLL_RESTARTPOLL", "Restart ankiety");
define("_MD_POLL_RESET", "Resetować logi tej ankiety?");
define("_MD_POLL_ADDPOLL","Dodaj ankietę");
define("_MD_POLLMODULE_ERROR","nie można użyć modułu ankiet Xoopsa");

//report.php
define("_MD_REPORTED", "Dziękujemy za wsyłanie raportu! Moderator zapozna się z nim tak szybko jak to tylko będzie możliwe..");
define("_MD_REPORT_ERROR", "Błąd wysyłania raportu!.");
define("_MD_REPORT_TEXT", "Informacja:");

define("_MD_PDF","Utwórz PDF z posta");
define("_MD_PDF_PAGE","Strona %s");

//print.php
define("_MD_COMEFROM","Treść pochodzi z:");

//viewpost.php
define("_MD_VIEWALLPOSTS","Wszystkie posty");
define("_MD_VIEWTOPIC","Wątek");
define("_MD_VIEWFORUM","Forum");

define("_MD_COMPACT","Kompaktowy");

define("_MD_MENU_SELECT","SELECT");
define("_MD_MENU_HOVER","HOVER");
define("_MD_MENU_CLICK","CLICK");

define("_MD_WELCOME_SUBJECT","%s dołączył do forum");
define("_MD_WELCOME_MESSAGE","Witaj, %s to nowicjusz.");

define("_MD_VIEWNEWPOSTS", "Zobacz nowe posty");

define("_MD_INVALID_SUBMIT","Przesłanie wiadomości nie powiodło się. Nie udało się dopasować parametrów sesji. Spróbuj zatwierdzić formularz ponownie. Jeśli nadal będą występować błędy zaloguj się ponownie.");

define("_MD_ACCOUNT","Konto");
define("_MD_NAME","Nazwa użytkownika");
define("_MD_PASSWORD","Hasło");
define("_MD_LOGIN","Zaloguj");

/*
define("_MD_TRANSFER", "Transfer");
define("_MD_TRANSFER_DESC", "Transfer the post to other applications");
define("_MD_TRANSFER_DONE", "The action is done successully: %s");
*/

define("_MD_APPROVE", "Zatwierdź");
define("_MD_RESTORE", "Przywróć");
define("_MD_SPLIT_ONE", "Wynij");
define("_MD_SPLIT_TREE", "Wytnij wszsytkie podległe");
define("_MD_SPLIT_ALL", "Wytnij wszystkie");

define("_MD_TYPE_ADMIN", "Tryb Admina");
define("_MD_TYPE_VIEW", "Tryb zwykły");
define("_MD_TYPE_PENDING", "Oczekujące");
define("_MD_TYPE_DELETED", "Usunęte");
define("_MD_TYPE_SUSPEND", "Zawieszenie");

define("_MD_DBUPDATED", "Baza zaktualizowana pomyślnie!");

define("_MD_SUSPEND_SUBJECT", "Użytkownik %s jest zawieszony na %d dni");
define("_MD_SUSPEND_TEXT", "Użytkownik %s jest zawieszony na %d dni, powód:<br />[quote]%s[/quote]<br /><br />Zawieszenie trwa do %s");
define("_MD_SUSPEND_UID", "ID użytkownika");
define("_MD_SUSPEND_IP", "IP (pełne lub zakres)");
define("_MD_SUSPEND_DURATION", "Czas trwania (dni)");
define("_MD_SUSPEND_DESC", "Powód");
define("_MD_SUSPEND_LIST", "Lista zawieszonych");
define("_MD_SUSPEND_START", "Początek");
define("_MD_SUSPEND_EXPIRE", "Koniec");
define("_MD_SUSPEND_SCOPE", "Zasięg");
define("_MD_SUSPEND_MANAGEMENT", "Zawieszanie użytkowników");
define("_MD_SUSPEND_NOACCESS", "Zostałeś zawieszony");

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