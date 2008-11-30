<?php
// $Id: main.php,v 1.13 2004/12/26 19:11:59 onokazu Exp $
//%%%%%%		Module Name phpBB  		%%%%%
//functions.php
define("_MD_ERROR","Gre�ka");
define("_MD_NOPOSTS","Nema poruke");
define("_MD_GO","Kreni");

//index.php
define("_MD_FORUM","Forum");
define("_MD_WELCOME","Dobrodo�li na %s forum.");
define("_MD_TOPICS","Teme");
define("_MD_POSTS","Poruke");
define("_MD_LASTPOST","Zadnja poruka");
define("_MD_MODERATOR","Moderator");
define("_MD_NEWPOSTS","Nove poruke");
define("_MD_NONEWPOSTS","Nema novih poruka");
define("_MD_PRIVATEFORUM","Privatni forum");
define("_MD_BY","Objavio"); // Posted by
define("_MD_TOSTART","Za pregled poruka, odaberite forum iz donje liste.");
define("_MD_TOTALTOPICSC","Ukupno tema: ");
define("_MD_TOTALPOSTSC","Ukupno poruka: ");
define("_MD_TIMENOW","Trenutno vrijeme: %s");
define("_MD_LASTVISIT","Va� zadnji posjet: %s");
define("_MD_ADVSEARCH","Napredno pretra�ivanje");
define("_MD_POSTEDON","Objavljeno: ");
define("_MD_SUBJECT","Sa�etak");

//page_header.php
define("_MD_MODERATEDBY","Moderator: ");
define("_MD_SEARCH","Tra�i");
define("_MD_SEARCHRESULTS","Rezultati pretra�ivanja");
define("_MD_FORUMINDEX","%s forum po�etna");
define("_MD_POSTNEW","Objavi novu poruku");
define("_MD_REGTOPOST","Za slanje poruka morate se registrirati");

//search.php
define("_MD_KEYWORDS","Klju�ne rije�i:");
define("_MD_SEARCHANY","Bilo koji izraz (inicijalno)");
define("_MD_SEARCHALL","Svi izrazi");
define("_MD_SEARCHALLFORUMS","Pretra�i sve forume");
define("_MD_FORUMC","Forum");
define("_MD_SORTBY","Sortiraj po");
define("_MD_DATE","Datum");
define("_MD_TOPIC","Tema");
define("_MD_USERNAME","Korisni�ko ime");
define("_MD_SEARCHIN","Tra�i u");
define("_MD_BODY","Sadr�aj");
define("_MD_NOMATCH","Nema zapisa koji odgovaraju va�em upitu. Molimo pro�irite kriterije.");
define("_MD_POSTTIME","Vrijeme objave");

//viewforum.php
define("_MD_REPLIES","Odgovori");
define("_MD_POSTER","Autor");
define("_MD_VIEWS","Pregleda");
define("_MD_MORETHAN","Nova poruka [ Popularno ]");
define("_MD_MORETHAN2","Nema nove poruke [ Popularno ]");
define("_MD_TOPICSTICKY","Tema je ljepljiva");
define("_MD_TOPICLOCKED","Tema je zaklju�ana");
define("_MD_LEGEND","Legenda");
define("_MD_NEXTPAGE","Slijede�a stranica");
define("_MD_SORTEDBY","Sortiraj po");
define("_MD_TOPICTITLE","naslovu teme");
define("_MD_NUMBERREPLIES","broj odgovora");
define("_MD_TOPICPOSTER","autor teme");
define("_MD_LASTPOSTTIME","vrijeme zadnje objave");
define("_MD_ASCENDING","Uzlazno");
define("_MD_DESCENDING","Silazno");
define("_MD_FROMLASTDAYS","Od zadnjih %s dana");
define("_MD_THELASTYEAR","Od zadnjih godinu dana");
define("_MD_BEGINNING","Od po�etka");

//viewtopic.php
define("_MD_AUTHOR","Autor");
define("_MD_LOCKTOPIC","Zaklju�aj ovu temu");
define("_MD_UNLOCKTOPIC","Otklju�aj ovu temu");
define("_MD_STICKYTOPIC","Tema je uvijek ljepljiva");
define("_MD_UNSTICKYTOPIC","U�ini ovu temu ne ljepljivom");
define("_MD_MOVETOPIC","Premjesti ovu temu");
define("_MD_DELETETOPIC","Izbri�i ovu temu");
define("_MD_TOP","Vrh");
define("_MD_PARENT","Izvorno");
define("_MD_PREVTOPIC","Pro�la tema");
define("_MD_NEXTTOPIC","Slijede�a tema");

//forumform.inc
define("_MD_ABOUTPOST","O objavi");
define("_MD_ANONCANPOST","<b>Anonimni</b> korisnici mogu otvarati nove teme objavljivati i odgovarati na ovom forumu");
define("_MD_PRIVATE","Ovo je <b>privatni</b> forum.<br />Samo korisnici s posebnim pravima mogu otvarati nove teme, objavljivati i odgovarati u ovom forumu");
define("_MD_REGCANPOST","Svi <b>registrirani</b> korisnici mogu otvarati nove teme, objavljivati i odgovarati u ovaj forum");
define("_MD_MODSCANPOST","Samo <b>moderatori i administratori</b> mogu otvarati nove teme, objavljivati i odgovarati u ovom forumu");
define("_MD_PREVPAGE","Prethodna stranica");
define("_MD_QUOTE","Citiraj");

// ERROR messages
define("_MD_ERRORFORUM","GRE�KA: Nije izabran forum!");
define("_MD_ERRORPOST","GRE�KA: Nije izabrana poruka!");
define("_MD_NORIGHTTOPOST","Nemate pravo objavljivati u ovom forumu.");
define("_MD_NORIGHTTOACCESS","Nemate pravo pristupa ovom forumu.");
define("_MD_ERRORTOPIC","GRE�KA: Nije izabrana tema!");
define("_MD_ERRORCONNECT","GRE�KA: Ne mogu se spojiti u forum baze podataka.");
define("_MD_ERROREXIST","GRE�KA: Izabrani forum ne postoji. Molimo vratite se nazad i poku�ajte ponovo.");
define("_MD_ERROROCCURED","Dogodila se gre�ka");
define("_MD_COULDNOTQUERY","Ne mogu poslati upit bazi podataka.");
define("_MD_FORUMNOEXIST","Gre�ka - Izabrani forum/tema ne postoji. Molimo vratite se nazad i poku�ajte ponovo.");
define("_MD_USERNOEXIST","Izabrani korisnik ne postoji. Molimo vratite se nazad i poku�ajte ponovo.");
define("_MD_COULDNOTREMOVE","Gre�ka - Ne mogu izbrisati poruke iz baze podataka!");
define("_MD_COULDNOTREMOVETXT","Gre�ka - Ne mogu izbrisati sadr�aj poruke!");

//reply.php
define("_MD_ON","uklju�eno"); //Posted on
define("_MD_USERWROTE","%s je napisao:"); // %s is username

//post.php
define("_MD_EDITNOTALLOWED","Ne mo�ete mijenjati ovu poruku!");
define("_MD_EDITEDBY","Promijenio: ");
define("_MD_ANONNOTALLOWED","Anonimni korisnici ne mogu objavljivati.<br>Molimo registrirajte se.");
define("_MD_THANKSSUBMIT","Zahvaljujemo na va�oj objavi!");
define("_MD_REPLYPOSTED","Odgovor na va�u temu je objavljen.");
define("_MD_HELLO","Pozdrav, %s,");
define("_MD_URRECEIVING","Primili ste ovaj email zato �to poruka koju ste poslali na %s forum je odgovorena."); // %s is your site name
define("_MD_CLICKBELOW","Klikni na link prije pogleda na konac:");

//forumform.inc
define("_MD_YOURNAME","Va�e ime:");
define("_MD_LOGOUT","Odjava");
define("_MD_REGISTER","Registracija");
define("_MD_SUBJECTC","Predmet:");
define("_MD_MESSAGEICON","Ikona poruke:");
define("_MD_MESSAGEC","Poruka:");
define("_MD_ALLOWEDHTML","Dopusti HTML:");
define("_MD_OPTIONS","Opcije:");
define("_MD_POSTANONLY","Objavljuj anonimno");
define("_MD_DISABLESMILEY","Onemogu�i smaili�e");
define("_MD_DISABLEHTML","Onemogu�i HTML");
define("_MD_NEWPOSTNOTIFY", "Obavijesti me o novim porukama u ovom nizu");
define("_MD_ATTACHSIG","Pri�vrsti potpis");
define("_MD_POST","Objava");
define("_MD_SUBMIT","Po�alji");
define("_MD_CANCELPOST","Odustani");

// forumuserpost.php
define("_MD_ADD","Dodaj");
define("_MD_REPLY","Odgovori");

// topicmanager.php
define("_MD_YANTMOTFTYCPTF","Niste moderator ovog foruma, pa ne mo�ete izvr�iti ovu akciju.");
define("_MD_TTHBRFTD","Tema je izbrisana iz baze podataka.");
define("_MD_RETURNTOTHEFORUM","Povratak na forum");
define("_MD_RTTFI","Povratak na forum po�etak");
define("_MD_EPGBATA","Gre�ka - Molimo vratite se nazad i poku�ajte ponovo.");
define("_MD_TTHBM","Tema je premje�tena.");
define("_MD_VTUT","Vidi obnovljenu temu");
define("_MD_TTHBL","Tema je zaklju�ana.");
define("_MD_TTHBS","Tema je ljepljiva.");
define("_MD_TTHBUS","Tema je ne ljepljiva.");
define("_MD_VIEWTHETOPIC","Pregledaj temu");
define("_MD_TTHBU","Tema je otklju�ana.");
define("_MD_OYPTDBATBOTFTTY","Kada pritisntete tipku za brisanje na dnu stranice, odabrana tema i sve pripadaju�e objave bit �e <b>trajno</b> obrisane.");
define("_MD_OYPTMBATBOTFTTY","Kada pritisnete tipku za premje�tanje na dnu stranice, odabrana tema i sve pripadaju�e poruke bit �e premje�tene u odabrani forum.");
define("_MD_OYPTLBATBOTFTTY","Kada pritisnete tipku za zaklju�avanje na dnu stranice, odabrana tema bit �e zaklju�ana. Kasnije je mo�ete otklju�ati ako �elite.");
define("_MD_OYPTUBATBOTFTTY","Kada pritisnete tipku za otklju�avanje na dnu stranice, odabrana tema bit �e otklju�ana. Kasnije je mo�ete ponovo zaklju�ati.");
define("_MD_OYPTSBATBOTFTTY","Kada pritisnete odgovaraju�u tipku na dnu stranice, odabrana tema bit �e ljepljiva. Kasnije mo�ete ukloniti to svojstvo.");
define("_MD_OYPTTBATBOTFTTY","Kada pritisnete odgovaraju�u tipku na dnu stranice, odabrana tema prestat �e biti ljepljiva. Kasnije mo�ete vratiti to svojstvo.");
define("_MD_MOVETOPICTO","Premjesti temu u:");
define("_MD_NOFORUMINDB","Nema Foruma u bazi podataka");
define("_MD_DATABASEERROR","Gre�ka baze podataka");
define("_MD_DELTOPIC","Izbri�i temu");

// delete.php
define("_MD_DELNOTALLOWED","Oprostite, ali ne mo�ete izbrisati ovu poruku.");
define("_MD_AREUSUREDEL","Sigurno �elite izbrisati ovu poruku i sve podobjave?");
define("_MD_POSTSDELETED","Izabrana poruka i sve podobjave su izbrisane.");

// definitions moved from global.
define("_MD_THREAD","Niz");
define("_MD_FROM","Iz");
define("_MD_JOINED","Pridru�en");
define("_MD_ONLINE","Online");
define("_MD_BOTTOM","Dno");
?>
