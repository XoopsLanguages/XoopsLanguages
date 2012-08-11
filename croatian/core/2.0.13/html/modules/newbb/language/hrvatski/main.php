<?php
// $Id: main.php,v 1.13 2004/12/26 19:11:59 onokazu Exp $
//%%%%%%		Module Name phpBB  		%%%%%
//functions.php
define("_MD_ERROR","Greška");
define("_MD_NOPOSTS","Nema poruke");
define("_MD_GO","Kreni");

//index.php
define("_MD_FORUM","Forum");
define("_MD_WELCOME","Dobrodošli na %s forum.");
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
define("_MD_LASTVISIT","Vaš zadnji posjet: %s");
define("_MD_ADVSEARCH","Napredno pretraživanje");
define("_MD_POSTEDON","Objavljeno: ");
define("_MD_SUBJECT","Sažetak");

//page_header.php
define("_MD_MODERATEDBY","Moderator: ");
define("_MD_SEARCH","Traži");
define("_MD_SEARCHRESULTS","Rezultati pretraživanja");
define("_MD_FORUMINDEX","%s forum poèetna");
define("_MD_POSTNEW","Objavi novu poruku");
define("_MD_REGTOPOST","Za slanje poruka morate se registrirati");

//search.php
define("_MD_KEYWORDS","Kljuène rijeèi:");
define("_MD_SEARCHANY","Bilo koji izraz (inicijalno)");
define("_MD_SEARCHALL","Svi izrazi");
define("_MD_SEARCHALLFORUMS","Pretraži sve forume");
define("_MD_FORUMC","Forum");
define("_MD_SORTBY","Sortiraj po");
define("_MD_DATE","Datum");
define("_MD_TOPIC","Tema");
define("_MD_USERNAME","Korisnièko ime");
define("_MD_SEARCHIN","Traži u");
define("_MD_BODY","Sadržaj");
define("_MD_NOMATCH","Nema zapisa koji odgovaraju vašem upitu. Molimo proširite kriterije.");
define("_MD_POSTTIME","Vrijeme objave");

//viewforum.php
define("_MD_REPLIES","Odgovori");
define("_MD_POSTER","Autor");
define("_MD_VIEWS","Pregleda");
define("_MD_MORETHAN","Nova poruka [ Popularno ]");
define("_MD_MORETHAN2","Nema nove poruke [ Popularno ]");
define("_MD_TOPICSTICKY","Tema je ljepljiva");
define("_MD_TOPICLOCKED","Tema je zakljuèana");
define("_MD_LEGEND","Legenda");
define("_MD_NEXTPAGE","Slijedeæa stranica");
define("_MD_SORTEDBY","Sortiraj po");
define("_MD_TOPICTITLE","naslovu teme");
define("_MD_NUMBERREPLIES","broj odgovora");
define("_MD_TOPICPOSTER","autor teme");
define("_MD_LASTPOSTTIME","vrijeme zadnje objave");
define("_MD_ASCENDING","Uzlazno");
define("_MD_DESCENDING","Silazno");
define("_MD_FROMLASTDAYS","Od zadnjih %s dana");
define("_MD_THELASTYEAR","Od zadnjih godinu dana");
define("_MD_BEGINNING","Od poèetka");

//viewtopic.php
define("_MD_AUTHOR","Autor");
define("_MD_LOCKTOPIC","Zakljuèaj ovu temu");
define("_MD_UNLOCKTOPIC","Otkljuèaj ovu temu");
define("_MD_STICKYTOPIC","Tema je uvijek ljepljiva");
define("_MD_UNSTICKYTOPIC","Uèini ovu temu ne ljepljivom");
define("_MD_MOVETOPIC","Premjesti ovu temu");
define("_MD_DELETETOPIC","Izbriši ovu temu");
define("_MD_TOP","Vrh");
define("_MD_PARENT","Izvorno");
define("_MD_PREVTOPIC","Prošla tema");
define("_MD_NEXTTOPIC","Slijedeæa tema");

//forumform.inc
define("_MD_ABOUTPOST","O objavi");
define("_MD_ANONCANPOST","<b>Anonimni</b> korisnici mogu otvarati nove teme objavljivati i odgovarati na ovom forumu");
define("_MD_PRIVATE","Ovo je <b>privatni</b> forum.<br />Samo korisnici s posebnim pravima mogu otvarati nove teme, objavljivati i odgovarati u ovom forumu");
define("_MD_REGCANPOST","Svi <b>registrirani</b> korisnici mogu otvarati nove teme, objavljivati i odgovarati u ovaj forum");
define("_MD_MODSCANPOST","Samo <b>moderatori i administratori</b> mogu otvarati nove teme, objavljivati i odgovarati u ovom forumu");
define("_MD_PREVPAGE","Prethodna stranica");
define("_MD_QUOTE","Citiraj");

// ERROR messages
define("_MD_ERRORFORUM","GREŠKA: Nije izabran forum!");
define("_MD_ERRORPOST","GREŠKA: Nije izabrana poruka!");
define("_MD_NORIGHTTOPOST","Nemate pravo objavljivati u ovom forumu.");
define("_MD_NORIGHTTOACCESS","Nemate pravo pristupa ovom forumu.");
define("_MD_ERRORTOPIC","GREŠKA: Nije izabrana tema!");
define("_MD_ERRORCONNECT","GREŠKA: Ne mogu se spojiti u forum baze podataka.");
define("_MD_ERROREXIST","GREŠKA: Izabrani forum ne postoji. Molimo vratite se nazad i pokušajte ponovo.");
define("_MD_ERROROCCURED","Dogodila se greška");
define("_MD_COULDNOTQUERY","Ne mogu poslati upit bazi podataka.");
define("_MD_FORUMNOEXIST","Greška - Izabrani forum/tema ne postoji. Molimo vratite se nazad i pokušajte ponovo.");
define("_MD_USERNOEXIST","Izabrani korisnik ne postoji. Molimo vratite se nazad i pokušajte ponovo.");
define("_MD_COULDNOTREMOVE","Greška - Ne mogu izbrisati poruke iz baze podataka!");
define("_MD_COULDNOTREMOVETXT","Greška - Ne mogu izbrisati sadržaj poruke!");

//reply.php
define("_MD_ON","ukljuèeno"); //Posted on
define("_MD_USERWROTE","%s je napisao:"); // %s is username

//post.php
define("_MD_EDITNOTALLOWED","Ne možete mijenjati ovu poruku!");
define("_MD_EDITEDBY","Promijenio: ");
define("_MD_ANONNOTALLOWED","Anonimni korisnici ne mogu objavljivati.<br>Molimo registrirajte se.");
define("_MD_THANKSSUBMIT","Zahvaljujemo na vašoj objavi!");
define("_MD_REPLYPOSTED","Odgovor na vašu temu je objavljen.");
define("_MD_HELLO","Pozdrav, %s,");
define("_MD_URRECEIVING","Primili ste ovaj email zato što poruka koju ste poslali na %s forum je odgovorena."); // %s is your site name
define("_MD_CLICKBELOW","Klikni na link prije pogleda na konac:");

//forumform.inc
define("_MD_YOURNAME","Vaše ime:");
define("_MD_LOGOUT","Odjava");
define("_MD_REGISTER","Registracija");
define("_MD_SUBJECTC","Predmet:");
define("_MD_MESSAGEICON","Ikona poruke:");
define("_MD_MESSAGEC","Poruka:");
define("_MD_ALLOWEDHTML","Dopusti HTML:");
define("_MD_OPTIONS","Opcije:");
define("_MD_POSTANONLY","Objavljuj anonimno");
define("_MD_DISABLESMILEY","Onemoguæi smailiæe");
define("_MD_DISABLEHTML","Onemoguæi HTML");
define("_MD_NEWPOSTNOTIFY","Obavijesti me o novim porukama u ovom nizu");
define("_MD_ATTACHSIG","Prièvrsti potpis");
define("_MD_POST","Objava");
define("_MD_SUBMIT","Pošalji");
define("_MD_CANCELPOST","Odustani");

// forumuserpost.php
define("_MD_ADD","Dodaj");
define("_MD_REPLY","Odgovori");

// topicmanager.php
define("_MD_YANTMOTFTYCPTF","Niste moderator ovog foruma, pa ne možete izvršiti ovu akciju.");
define("_MD_TTHBRFTD","Tema je izbrisana iz baze podataka.");
define("_MD_RETURNTOTHEFORUM","Povratak na forum");
define("_MD_RTTFI","Povratak na forum poèetak");
define("_MD_EPGBATA","Greška - Molimo vratite se nazad i pokušajte ponovo.");
define("_MD_TTHBM","Tema je premještena.");
define("_MD_VTUT","Vidi obnovljenu temu");
define("_MD_TTHBL","Tema je zakljuèana.");
define("_MD_TTHBS","Tema je ljepljiva.");
define("_MD_TTHBUS","Tema je ne ljepljiva.");
define("_MD_VIEWTHETOPIC","Pregledaj temu");
define("_MD_TTHBU","Tema je otkljuèana.");
define("_MD_OYPTDBATBOTFTTY","Kada pritisntete tipku za brisanje na dnu stranice, odabrana tema i sve pripadajuæe objave bit æe <b>trajno</b> obrisane.");
define("_MD_OYPTMBATBOTFTTY","Kada pritisnete tipku za premještanje na dnu stranice, odabrana tema i sve pripadajuæe poruke bit æe premještene u odabrani forum.");
define("_MD_OYPTLBATBOTFTTY","Kada pritisnete tipku za zakljuèavanje na dnu stranice, odabrana tema bit æe zakljuèana. Kasnije je možete otkljuèati ako želite.");
define("_MD_OYPTUBATBOTFTTY","Kada pritisnete tipku za otkljuèavanje na dnu stranice, odabrana tema bit æe otkljuèana. Kasnije je možete ponovo zakljuèati.");
define("_MD_OYPTSBATBOTFTTY","Kada pritisnete odgovarajuæu tipku na dnu stranice, odabrana tema bit æe ljepljiva. Kasnije možete ukloniti to svojstvo.");
define("_MD_OYPTTBATBOTFTTY","Kada pritisnete odgovarajuæu tipku na dnu stranice, odabrana tema prestat æe biti ljepljiva. Kasnije možete vratiti to svojstvo.");
define("_MD_MOVETOPICTO","Premjesti temu u:");
define("_MD_NOFORUMINDB","Nema Foruma u bazi podataka");
define("_MD_DATABASEERROR","Greška baze podataka");
define("_MD_DELTOPIC","Izbriši temu");

// delete.php
define("_MD_DELNOTALLOWED","Oprostite, ali ne možete izbrisati ovu poruku.");
define("_MD_AREUSUREDEL","Sigurno želite izbrisati ovu poruku i sve podobjave?");
define("_MD_POSTSDELETED","Izabrana poruka i sve podobjave su izbrisane.");

// definitions moved from global.
define("_MD_THREAD","Niz");
define("_MD_FROM","Iz");
define("_MD_JOINED","Pridružen");
define("_MD_ONLINE","Online");
define("_MD_BOTTOM","Dno");
?>
