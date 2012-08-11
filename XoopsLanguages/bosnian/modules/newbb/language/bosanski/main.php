<?php
// $Id: main.php,v 2.3 2005/11/01 12:21:45 phppp Exp $
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','Gre&scaron;ka');
define('_MD_NOPOSTS','Nema postova');
define('_MD_GO','Idi');
define('_MD_SELFORUM','Forum izaberi');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Zaka&#269;eni podatak:');
define('_MD_ALLOWED_EXTENSIONS','Dozvoljene extanzije');
define('_MD_MAX_FILESIZE','Maximalna veli&#269;ina podatka');
define('_MD_ATTACHMENT','Podatak zaka&#269;i');
define('_MD_FILESIZE','Veli&#269ina podatka');
define('_MD_HITS','Klikova');
define('_MD_GROUPS','Grupe:');
define('_MD_DEL_ONE','Samo ovaj post izbri&scaron;i');
define('_MD_DEL_RELATED','Sve postove u ovoj Temi izbri&scaron;i');
define('_MD_MARK_ALL_FORUMS','Sve Fore markiraj kao');
define('_MD_MARK_ALL_TOPICS','Sve Teme markiraj kao');
define('_MD_MARK_UNREAD','nepro&#269;itane');
define('_MD_MARK_READ','pro&#269;itane');
define('_MD_ALL_FORUM_MARKED','Sve Fore markiraj kao');
define('_MD_ALL_TOPIC_MARKED','Sve Teme markiraj kao');
define('_MD_BOARD_DISCLAIMER','Opi&scaron;i Forum');


//index.php
define('_MD_ADMINCP','Adminovo podru&#269;je');
define('_MD_FORUM','Forum');
define('_MD_WELCOME','%s - Forum');
define('_MD_TOPICS','Teme');
define('_MD_POSTS','Postova');
define('_MD_LASTPOST','Zadnji post');
define('_MD_MODERATOR','Moderator(i)');
define('_MD_NEWPOSTS','Novi postovi');
define('_MD_NONEWPOSTS','Nema novih postova');
define('_MD_PRIVATEFORUM','Inaktivni Forum');
define('_MD_BY','von'); // Posted by
define('_MD_TOSTART','Da bi postove &#269;itao(la), prvo Forumsko podru&#269;je izaberi.');
define('_MD_TOTALTOPICSC','Ukupno Tema: ');
define('_MD_TOTALPOSTSC','Ukupno postova: ');
define('_MD_TOTALUSER','Ukupno &#269;lanova: ');
define('_MD_TIMENOW','Aktuelno: %s');
define('_MD_LASTVISIT','Zadnja posjeta: %s');
define('_MD_ADVSEARCH','Dodatna pretraga');
define('_MD_POSTEDON','Napisao(la): ');
define('_MD_SUBJECT','Tema: ');
define('_MD_INACTIVEFORUM_NEWPOSTS','Inaktivni Forum sa novim postovima');
define('_MD_INACTIVEFORUM_NONEWPOSTS','Inaktivni Forum bez novih postova');
define('_MD_SUBFORUMS','Podfore');
define('_MD_MAINFORUMOPT','Glavna opcija');
define("_MD_PENDING_POSTS_FOR_AUTH","Postovi koji &#269;ekaju odobrenje:");



//page_header.php
define('_MD_MODERATEDBY','Moderisano od');
define('_MD_SEARCH','U Forumu tra&#382;i');
//define('_MD_SEARCHRESULTS','Search Results');
define('_MD_FORUMINDEX','%s pregled Foruma');
define('_MD_POSTNEW','Novi post napi&scaron;i');
define('_MD_REGTOPOST','Molim te prvo se registruj. Tek posle registracije ima&scaron; odobrenje pisati u Forumu.');

//search.php
define('_MD_SEARCHALLFORUMS','Tra&#382;i u svim Forama');
define('_MD_FORUMC','Forum:');
define('_MD_AUTHORC','Autor:');
define('_MD_SORTBY','Sortiraj po:');
define('_MD_DATE','Datum');
define('_MD_TOPIC','Tema');
define('_MD_POST2','Post');
define('_MD_USERNAME','Nik ime');
define('_MD_BODY','Tekst posta');
define('_MD_SINCE','Od');

//viewforum.php
define('_MD_REPLIES','Odgovori');
define('_MD_POSTER','Autor');
define('_MD_VIEWS','&#268;itanja');
define('_MD_MORETHAN','Novi postovi [Popularni]');
define('_MD_MORETHAN2','Nema novih postova [Popularni]');
define('_MD_TOPICSHASATT','Tema ima zaka&#269;ke');
define('_MD_TOPICHASPOLL','Tema ima Anketu');
define('_MD_TOPICLOCKED','Tema je zaklju&#269;ana');
define('_MD_LEGEND','Legenda');
define('_MD_NEXTPAGE','Sljede&#263;a stranica');
define('_MD_SORTEDBY','Sortiraj po');
define('_MD_TOPICTITLE','Naslov Teme');
define('_MD_NUMBERREPLIES','Ukupan broj odgovora');
define('_MD_TOPICPOSTER','Autor Teme');
define('_MD_TOPICTIME','Objavljena');
define('_MD_LASTPOSTTIME','Zadnji post u');
define('_MD_ASCENDING','Novije-redoslijed');
define('_MD_DESCENDING','Starije-redoslijed');
define('_MD_FROMLASTHOURS','U zadnjih %s Sati');
define('_MD_FROMLASTDAYS','U zadnjih %s dana');
define('_MD_THELASTYEAR','U pro&scaron;loj godini');
define('_MD_BEGINNING','Od po&#269;etka otvoranja Foruma');
define('_MD_SEARCHTHISFORUM','Pretra&#382;i ovaj Forum');
define('_MD_TOPIC_SUBJECTC','Prefix Tema:');


define('_MD_RATINGS','Ocjene');
define("_MD_CAN_ACCESS","<b>Dozvoljeno ti je</b>, u ovaj Forum u&#263;i.<br />");
define("_MD_CANNOT_ACCESS","<b>Nije ti dozvoljeno</b>, u ovaj Forum u&#263;i.<br />");
define("_MD_CAN_POST","<b>Dozvoljeno ti je</b>, novu Temu da otvori&scaron;.<br />");
define("_MD_CANNOT_POST","<b>Nije ti dozvoljeno</b>, novu Temu da otvori&scaron;.<br />");
define("_MD_CAN_VIEW","<b>Dozvoljeno ti je</b>, Teme da vidi&scaron;.<br />");
define("_MD_CANNOT_VIEW","<b>Nije ti dozvoljeno</b>, Teme da vidi&scaron;.<br />");
define("_MD_CAN_REPLY","<b>Dozvoljeno ti je</b>, na postove da odgovori&scaron;.<br />");
define("_MD_CANNOT_REPLY","<b>Nije ti dozvoljeno</b>, na postove da odgovori&scaron;.<br />");
define("_MD_CAN_EDIT","<b>Dozvoljeno ti je</b>, postove da uredi&scaron;.<br />");
define("_MD_CANNOT_EDIT","<b>Nije ti dozvoljeno</b>, postove da uredi&scaron;.<br />");
define("_MD_CAN_DELETE","<b>Dozvoljeno ti je</b>, postove da izbri&scaron;e&scaron;.<br />");
define("_MD_CANNOT_DELETE","<b>Nije ti dozvoljeno</b>, postove da izbri&scaron;e&scaron;.<br />");
define("_MD_CAN_ADDPOLL","<b>Dozvoljeno ti je</b>, novu Anketu da napravi&scaron;.<br />");
define("_MD_CANNOT_ADDPOLL","<b>Nije ti dozvoljeno</b>, novu Anketu da napravi&scaron;.<br />");
define("_MD_CAN_VOTE","<b>Dozvoljeno ti je</b>, u Anketi da glasa&scaron;.<br />");
define("_MD_CANNOT_VOTE","<b>Nije ti dozvoljeno</b>, u Anketi da glasa&scaron;.<br />");
define("_MD_CAN_ATTACH","<b>Dozvoljeno ti je</b>, Podatak uploadati u post.<br />");
define("_MD_CANNOT_ATTACH","<b>Nije ti dozvoljeno</b>, Podatak uploadati u post.<br />");
define("_MD_CAN_NOAPPROVE","<b>Dozvoljeno ti je</b>, postove bez odobrenja pisati.<br />");
define("_MD_CANNOT_NOAPPROVE","<b>Nije ti dozvoljeno</b>, postove bez odobrenja pisati.<br />");
define("_MD_IMTOPICS","Va&#382;ne Teme");
define("_MD_NOTIMTOPICS","Forumske Teme");
define('_MD_FORUMOPTION','Forumske opcije');

define('_MD_VAUP','Prika&#382;i sve postove bez odgovora');
define('_MD_VANP','Prika&#382;i sve nove postove');


define('_MD_UNREPLIED','Teme bez odgovora');
define('_MD_UNREAD','Nepro&#269;itane Teme');
define('_MD_ALL','Sve Teme');
define('_MD_ALLPOSTS','Sve postove');
define('_MD_VIEW','Prika&#382;i');

//viewtopic.php
define('_MD_AUTHOR','Autor');
define('_MD_LOCKTOPIC','Temu zaklju&#269;aj');
define('_MD_UNLOCKTOPIC','Temu otklju&#269;aj');
define('_MD_UNSTICKYTOPIC','Temu otka&#269;i');
define('_MD_STICKYTOPIC','Temu zaka&#269;i');
define('_MD_DIGESTTOPIC','Tema za Digest');
define('_MD_UNDIGESTTOPIC','Tema nije za Digest');
define('_MD_MERGETOPIC','Temu pove&#382;i');
define('_MD_MOVETOPIC','Temu prebaci');
define('_MD_DELETETOPIC','Temu izbri&scaron;i');
define('_MD_TOP','Na gore');
define('_MD_BOTTOM','Na dole');
define('_MD_PREVTOPIC','Prethodna Tema');
define('_MD_NEXTTOPIC','Sljede&#263;a Tema');
define('_MD_GROUP','Grupe:');
define('_MD_QUICKREPLY','Brzi odgovor');
define('_MD_POSTREPLY','Odgovori');
define('_MD_PRINTTOPICS','Temu printaj');
define('_MD_PRINT','Printaj');
define('_MD_REPORT','Prijavi');
define('_MD_PM','PM');
define('_MD_EMAIL','Email');
define('_MD_WWW','www');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK','URL za ovu Temu');
define('_MD_ADDTOLIST','U listu kontakata dodaj');
define('_MD_TOPICOPT','Opcije Tema');
define('_MD_VIEWMODE','Modus prikazivanja');
define('_MD_NEWEST','Aktuelne prvo');
define('_MD_OLDEST','Starije prvo');

define('_MD_FORUMSEARCH','Forum pretra&#382;i');

define('_MD_RATED','Ocjena:');
define('_MD_RATE','Ocjena Tema');
define('_MD_RATEDESC','Ovu Temu ocjeni');
define('_MD_RATING','Sada ocjeni');
define('_MD_RATE1','Vrlo lo&scaron;a');
define('_MD_RATE2','Lo&scaron;a');
define('_MD_RATE3','Srednje');
define('_MD_RATE4','Dobra');
define('_MD_RATE5','Vrlo dobra');

define('_MD_TOPICOPTION','Opcije Tema');
define('_MD_KARMA_REQUIREMENT','Li&#269;na Karma %s nije dovoljna za odre&#273;enu Karmu od  %s. <br /> Molim te kasnije probaj ponovo.');
define('_MD_REPLY_REQUIREMENT','Da bi ovaj post mogao(la) da &#269;ita&scaron;, mora&scaron; se prvo ulogovati i plus onda mo&#382;e&scaron; i odgovor dati.');
define('_MD_TOPICOPTIONADMIN','Tema-Admin Opcija');
define('_MD_POLLOPTIONADMIN','Anketa-Admin Opcija');

define('_MD_EDITPOLL','Anketu uredi');
define('_MD_DELETEPOLL','Anketu izbri&scaron;i');
define('_MD_RESTARTPOLL','Anketu ponovo startuj');
define('_MD_ADDPOLL','Anketu dodaj');

define('_MD_QUICKREPLY_EMPTY','Podru&#269;je za brzi odgovor');

define('_MD_LEVEL','Level:');
define('_MD_HP','HP:');
define('_MD_MP','MP:');
define('_MD_EXP','EXP:');

define('_MD_BROWSING','&#268;itaju ovu Temu:');
define('_MD_POSTTONEWS','Ovaj post kao Vijest objavi');

define('_MD_EXCEEDTHREADVIEW','Broj postova prelazi Maximum za ovaj pregled, <br />molim te podesi u ravni pregled.');


//forumform.inc
define('_MD_PRIVATE','Ovo je <b>privatni</b> Forum. Samo &#269;lanovi sa posebnim odobrenjima mogu u ovom Forumu Teme startovati i odgovore pisati');
define('_MD_QUOTE','Citat');
define('_MD_VIEW_REQUIRE','Zahtjeve prika&#382;i');
define('_MD_REQUIRE_KARMA','Karma');
define('_MD_REQUIRE_REPLY','Odgovori');
define('_MD_REQUIRE_NULL','Nema zahtjeva');

define("_MD_SELECT_FORMTYPE","Izaberi sebi Editor");

define("_MD_FORM_COMPACT","Kompakt");
define("_MD_FORM_DHTML","DHTML");
define("_MD_FORM_SPAW","Spaw Editor");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK Editor");
define("_MD_FORM_KOIVI","Koivi Editor");
define("_MD_FORM_TINYMCE","TinyMCE Editor");

// ERROR messages
define('_MD_ERRORFORUM','Gre&scaron;ka, Forum nije izabran!');
define('_MD_ERRORPOST','Gre&scaron;ka, Post nije izabran!');
define('_MD_NORIGHTTOVIEW','Nema&scaron; odobrenje ovu Temu da &#269;ita&scaron;.');
define('_MD_NORIGHTTOPOST','Nema&scaron; odobrenje u ovom Forumu da pi&scaron;e&scaron;.');
define('_MD_NORIGHTTOEDIT','Nema&scaron; odobrenje u ovom Forumu da ure&#273;uje&scaron;.');
define('_MD_NORIGHTTOREPLY','Nema&scaron; odobrenje u ovom Forumu da daje&scaron; odgovore.');
define('_MD_NORIGHTTOACCESS','Nema&scaron; odobrenje da u&#273;e&scaron; u Forum.');
define('_MD_ERRORTOPIC','Gre&scaron;ka, nema Teme izabrane!');
define('_MD_ERRORCONNECT','Gre&scaron;ka, nema kontakta sa Bazom podataka.');
define('_MD_ERROREXIST','Gre&scaron;ka, Forum koji je izabran ne postoji. Molim te idi nazad i probaj ponovo.');
define('_MD_ERROROCCURED','Do&scaron;lo je do gre&scaron;ke.');
define('_MD_COULDNOTQUERY','Nema kontakta sa Bazom podataka.');
define('_MD_FORUMNOEXIST','Gre&scaron;ka, Forum ili Tema koji si izabrao(la) ne postoji. Molim te idi nazad i probaj ponovo.');
define('_MD_USERNOEXIST','Ovaj &#269;lan ne postoji. Molim te idi nazad i probaj ponovo.');
define('_MD_COULDNOTREMOVE','Gre&scaron;ka, Post se u Bazi podataka nemo&#382;e izbrisati!');
define('_MD_COULDNOTREMOVETXT','Gre&scaron;ka, nemo&#382;e se tekst izbrisati!');
define('_MD_TIMEISUP','Vremenski limit za obradu Osta je pre&#273;en.');
define('_MD_TIMEISUPDEL','Dati vremenski limit za brisanje Posta je pre&#273;en.');

//reply.php
define('_MD_ON','dana'); //Posted on
define('_MD_USERWROTE','%s pi&scaron;e:'); // %s is username
define('_MD_RE','Odg:');

//post.php
define('_MD_EDITNOTALLOWED','Nije ti dozvoljeno da Post ure&#273;uje&scaron;.');
define('_MD_EDITEDBY','Uredio(la) je ');
define('_MD_ANONNOTALLOWED','Gostima nije dozvoljeno da Postove objavljuju. Molim te registruj se, i onda mo&#382;e&scaron; aktivno u&#269;estvovat u Forumskim diskusijama.');
define('_MD_THANKSSUBMIT','Hvala ti za upisani Post.');
define('_MD_REPLYPOSTED','Ima odgovor na Post.');
define('_MD_HELLO','Halo %s,');
define('_MD_URRECEIVING','Ovaj E-Mail je ti poslat, jer ima odgovor %s u Forumu.'); // %s is your site name
define('_MD_CLICKBELOW','Odgovor na Post je pod ovim URL-om:');
define('_MD_WAITFORAPPROVAL','Hvala ti za upisani Post. Post se mora provjerit, prije nego se objavi.');
define('_MD_POSTING_LIMITED','U ovom Forumu je Spam blokada aktivirana, molim te za %d sekundi probaj ponovo.');

//forumform.inc
define('_MD_NAMEMAIL','Ime/Email:');
define('_MD_LOGOUT','Odjavi se');
define('_MD_REGISTER','Registrovan(a)');
define('_MD_SUBJECTC','Naslov:');
define('_MD_MESSAGEICON','Posta symbol:');
define('_MD_MESSAGEC','Tekst posta:');
define('_MD_ALLOWEDHTML','Dozvoli HTML-Tagove:');
define('_MD_OPTIONS','Opcije:');
define('_MD_POSTANONLY','Anonymno objavi');
define('_MD_DOSMILEY','Smilise aktiviraj');
define('_MD_DOXCODE','XOOPS-Code aktiviraj');
define('_MD_DOBR','Prelamanje novog reda uklju&#269;i (Isklju&#269;i, ako je HTML uklju&#269;en)');
define('_MD_DOHTML','HTML aktiviraj');
define('_MD_NEWPOSTNOTIFY','Obavijesti me ako ima novih Postova u ovoj Temi');
define('_MD_ATTACHSIG','Signaturu zaka&#269;i');
define('_MD_POST','Objavi');
define('_MD_SUBMIT','Po&scaron;alji');
define('_MD_CANCELPOST','Objavu obustavi');
define('_MD_REMOVE','Izbri&scaron;i');
define('_MD_UPLOAD','Uploaduj');

// forumuserpost.php
define('_MD_ADD','Dodaj');
define('_MD_REPLY','Odgovori');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Temu vidi');
define('_MD_RETURNTOTHEFORUM','Nazad u Forum');
define('_MD_RETURNFORUMINDEX','Nazad u Fore index');
define('_MD_ERROR_BACK','Gre&scaron;ka, molim te idi nazad i probaj ponovo.');
define('_MD_GOTONEWFORUM','Vidi aktulizirane Teme');

define('_MD_TOPICDELETE','Tema je izbrisana.');
define('_MD_TOPICMERGE','Tema je povezana.');
define('_MD_TOPICMOVE','Tema je preba&#269;ena');
define('_MD_TOPICLOCK','Tema je zaklju&#269;ana');
define('_MD_TOPICUNLOCK','Tema je otvorena');
define('_MD_TOPICSTICKY','Tema je zaka&#269;ena');
define('_MD_TOPICUNSTICKY','Tema je otka&#269;ena');
define('_MD_TOPICDIGEST','Tema je za Digest');
define('_MD_TOPICUNDIGEST','Odustano je od Digesta Teme.');

define('_MD_DELETE','Izbri&scaron;i');
define('_MD_MOVE','Prebaci');
define('_MD_MERGE','Pove&#382;i');
define('_MD_LOCK','Zaklju&#269;aj');
define('_MD_UNLOCK','Otvori');
define('_MD_STICKY','Zaka&#269;i');
define('_MD_UNSTICKY','Otka&#269;i');
define('_MD_DIGEST','Digest');
define('_MD_UNDIGEST','Od Digesta odustani');

define('_MD_DESC_DELETE','Treba li Temu i sve njezine Postove <b>zauvijek izbrisati?</b>');
define('_MD_DESC_MOVE','Jesi li siguran(a), da Temu i u njoj sve njezine Postove u izabranom Forumu treba prebaciti na drugo mjesto.');
define('_MD_DESC_MERGE','Jesi li siguran(a), da Temu i u njoj sve njezine Postove u izabranu Temu treba povezati.<br /><strong> ID cilj Teme mora biti manji, od povezane Teme</strong>.');
define('_MD_DESC_LOCK','Jesi li siguran(a), da izabranu Temu treba zaklju&#269;ati? Kasnije mo&#382;e&scaron; je opet otvoriti.');
define('_MD_DESC_UNLOCK','Jesi li siguran(a), da izabranu Temu treba otklju&#269;ati? Kasnije mo&#382;e&scaron; je opet zaklju&#269;ati.');
define('_MD_DESC_STICKY','Jesi li siguran(a), da izabranu Temu treba zaka&#269;iti? Kasnije mo&#382;e&scaron; od ovog odustati.');
define('_MD_DESC_UNSTICKY','Jesi li siguran(a), da Markiranu (zaka&#269;enu) izabranu Temu treba otka&#269;iti? Kasnije mo&#382;e&scaron; opet markirane (zaka&#269;ene)Teme otka&#269;iti.');
define('_MD_DESC_DIGEST','Jesi li siguran(a), da izabranu Temu treba u Digest poslati? Kasnije mo&#382;e&scaron; od ovog odustati.');
define('_MD_DESC_UNDIGEST','Jesi li siguran(a) da Digest od izabrane Teme treba odustati? Temu mo&#382;e&scaron; opet kasnije ako treba u Digest poslati.');

define('_MD_MERGETOPICTO','Pove&#382;i Temu sa:');
define('_MD_MOVETOPICTO','Prebaci Temu u:');
define('_MD_NOFORUMINDB','Nema nijednog Foruma u Bazi podataka.');

// delete.php
define('_MD_DELNOTALLOWED','Nema&scaron; odobrenje da ovaj Post izbri&scaron;e&scaron;.');
define('_MD_AREUSUREDEL','Jesi li stvarno siguran(a) da Post i sve njegove odgovore treba izbrisati?');
define('_MD_POSTSDELETED','Izabrani Post i svi njegovi odgovori su uspje&scaron;no izbrisani.');
define('_MD_POSTDELETED','Izabrani Postov(i) su izbrisan(i).');

// definitions moved from global.
define('_MD_THREAD','Diskusije');
define('_MD_FROM','Iz:');
define('_MD_JOINED','Registrovan(a)');
define('_MD_ONLINE','Online');
define('_MD_OFFLINE','Offline');
define('_MD_FLAT','Ravno');


// online.php
define('_MD_USERS_ONLINE','Posjetilaca online:');
define('_MD_ANONYMOUS_USERS','Anonyman(ih)');
define('_MD_REGISTERED_USERS','&#268;lan(ova): ');
define('_MD_BROWSING_FORUM','&#268;lan(ova) je(su) u Forumu');
define('_MD_TOTAL_ONLINE','Ukupno %d posjetilaca online.');
define('_MD_ADMINISTRATOR','Administrator');

define('_MD_NO_SUCH_FILE','Podatak ne postoji!');
define('_MD_ERROR_UPATEATTACHMENT','Do&scaron;lo je do gre&scaron;ke prilikom zaka&#269;ke podatka');

// ratethread.php
define("_MD_CANTVOTEOWN","Za svoju Temu ti nesmije&scaron; glasati..<br />Sva glasanja se provjeravaju i bilje&#382;e se.");
define("_MD_VOTEONCE","Molim te samo jednom glasaj za istu Temu.");
define("_MD_VOTEAPPRE","Tvoja ocjena je dobrodo&scaron;la.");
define("_MD_THANKYOU","Hvala ti za tvoje cijenjeno vrijeme i %s datoj ocjeni."); // %s is your site name
define("_MD_VOTES","Glasovi");
define("_MD_NOVOTERATE","Ova Tema nije jo&scaron; ocijenjena.");


// polls.php
define("_MD_POLL_DBUPDATED","Baza podataka je uspje&scaron;no aktulizirana!");
define("_MD_POLL_POLLCONF","Konfiguracija Anketa");
define("_MD_POLL_POLLSLIST","Lista Anketa");
define("_MD_POLL_AUTHOR","Autor ove Ankete");
define("_MD_POLL_DISPLAYBLOCK","U Bloku prika&#382;i?");
define("_MD_POLL_POLLQUESTION","Naslov Ankete");
define("_MD_POLL_VOTERS","Ima ukupno glasova");
define("_MD_POLL_VOTES","Glasova ukupno");
define("_MD_POLL_EXPIRATION","Datum isticanja");
define("_MD_POLL_EXPIRED","Istekla");
define("_MD_POLL_VIEWLOG","Logo prika&#382;i");
define("_MD_POLL_CREATNEWPOLL","Novu Anketu napravi");
define("_MD_POLL_POLLDESC","Opis Ankete");
define("_MD_POLL_DISPLAYORDER","Pozicija");
define("_MD_POLL_ALLOWMULTI","Smijeli se vi&scaron;e puta davati svoj glas?");
define("_MD_POLL_NOTIFY","Autora Ankete nakon njenog isticanja treba li obavijestiti?");
define("_MD_POLL_POLLOPTIONS","Opcije");
define("_MD_POLL_EDITPOLL","Anketu uredi");
define("_MD_POLL_FORMAT","Format: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME","Aktuelno vrijeme je %s");
define("_MD_POLL_EXPIREDAT","Isti&#269;e %s");
define("_MD_POLL_RESTART","Ovu Anketu ponovo startuj");
define("_MD_POLL_ADDMORE","Vi&scaron;e opcija dodaj");
define("_MD_POLL_RUSUREDEL","Jesi li siguran(a) da ovu Anketu i sve njene glasove treba izbrisati?");
define("_MD_POLL_RESTARTPOLL","Anketu ponovo startuj");
define("_MD_POLL_RESET","Ponovo startuj Logo ove Ankete?");
define("_MD_POLL_ADDPOLL","Anketu dodaj");
define("_MD_POLLMODULE_ERROR","Xoops Ankete Modul ne postoji za uslugu");

//report.php
define("_MD_REPORTED","Hvala ti na prijavljivanju ovog Posta/Teme! Jedan od Moderatora &#263;e se pobrinuti za ovu prijavu.");
define("_MD_REPORT_ERROR","Do&scaron;lo je do gre&scaron;ke prilikom slanja prijave.");
define("_MD_REPORT_TEXT","Tekst prijave:");

define("_MD_PDF","Napravi PDF za ovaj Post");
define("_MD_PDF_PAGE","Stranica %s");

//print.php
define("_MD_COMEFROM","Ovaj Post je od:");

//viewpost.php
define("_MD_VIEWALLPOSTS","Sve postove");
define("_MD_VIEWTOPIC","Tema");
define("_MD_VIEWFORUM","Forum");

define("_MD_COMPACT","Kompaktno");

define("_MD_MENU_SELECT","Meni prika&#382;i = Izaberi");
define("_MD_MENU_HOVER","Meni prika&#382;i = hover");
define("_MD_MENU_CLICK","Meni prika&#382;i = klikom");

define("_MD_WELCOME_SUBJECT","%s je u Forum prvi puta u&scaron;ao");
define("_MD_WELCOME_MESSAGE","Halo %s,<br />dobrodo&scaron;ao(la) u Forum. Prije svega zamolio bih te: Da pro&#269;ita&scaron; Pravilnik i da izbjegava&scaron; dupla pitanja da postavlja&scaron;,jer uzmi sebi vremena i pregledaj Forum i gledaj da diskusije budu na mjestu gdje je namijenjena.Srda&#269;an pozz Saba.<br /><br />");

define("_MD_VIEWNEWPOSTS","Nove Postove prika&#382;i");

define("_MD_INVALID_SUBMIT","Gre&scaron;ka, molim te kopiraj svoj tekst i probaj ga poslati ponovo.");

define("_MD_ACCOUNT","Profil");
define("_MD_NAME","Nik ime");
define("_MD_PASSWORD","Lozinka");
define("_MD_LOGIN","Uloguj se");

define("_MD_TRANSFER","Po&scaron;alji post");
define("_MD_TRANSFER_DESC","Po&scaron;alji post na druga mjesta");
define("_MD_TRANSFER_DONE","Akcija je uspjela: %s");

define("_MD_APPROVE","Odobri");
define("_MD_RESTORE","Vrati kako je bilo");
define("_MD_SPLIT_ONE","Redovi");
define("_MD_SPLIT_TREE","Svi zavisni redovi");
define("_MD_SPLIT_ALL","Svi redovi");

define("_MD_TYPE_ADMIN","Administracija");
define("_MD_TYPE_VIEW","Vidi");
define("_MD_TYPE_PENDING","Odobri postove");
define("_MD_TYPE_DELETED","Izbri&scaron;i postove");
define("_MD_TYPE_SUSPEND","Banuj &#268;lana");

define("_MD_DBUPDATED","Update u Bazu podataka je uspjelo!");

define("_MD_SUSPEND_SUBJECT","&#268;lan %s je za %d dana Banovan");
define("_MD_SUSPEND_TEXT","&#268;lan %s je za %d dana Banovan. Razlog:<br />[quote]%s[/quote]<br /><br />Ban do %s va&#382;i");
define("_MD_SUSPEND_UID","&#268;lanov ID");
define("_MD_SUSPEND_IP","IP Segmenti (Puni ili samo Segmenti)");
define("_MD_SUSPEND_DURATION","Trajanje Bana (dana)");
define("_MD_SUSPEND_DESC","Razlog Banovanja");
define("_MD_SUSPEND_LIST","Lista Banovanih");
define("_MD_SUSPEND_START","Start");
define("_MD_SUSPEND_EXPIRE","Kraj");
define("_MD_SUSPEND_SCOPE","Podru&#269;je");
define("_MD_SUSPEND_MANAGEMENT","Moderacijski Menadzer");
define("_MD_SUSPEND_NOACCESS","Ulaz ti je zabranjen. Tvoj ID ili IP je Banovan");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
define("_MD_TODAY","\d\a\\n\\a\s G:i:s");
define("_MD_YESTERDAY","\j\u\&#269;\e\\r G:i:s");
define("_MD_MONTHDAY","j/n G:i:s");
define("_MD_YEARMONTHDAY","Y/j/n G:i");

define("_NEWBB_SECURITY_CODE","Sigurnosni code upi&scaron;i");
define("_NEWBB_SECURITY_CODE_FAILED","Sigurnosni code je pogre&scaron;no upisan");

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
