<?php
// $Id: admin.php,v 1.10 2004/12/26 19:11:59 onokazu Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_MD_A_FORUMCONF","Postavke foruma");
define("_MD_A_ADDAFORUM","Dodaj forum");
define("_MD_A_LINK2ADDFORUM","Pomoæu ovog linka možete dodati novi forum u bazu podataka.");
define("_MD_A_EDITAFORUM","Uredi forum");
define("_MD_A_LINK2EDITFORUM","Pomoæu ovog linka možete urediti postojeæi forum.");
define("_MD_A_SETPRIVFORUM","Postavi dozvole za privatni forum");
define("_MD_A_LINK2SETPRIV","Pomoæu ovog linka možete postaviti dozvole pristupa za postojeæi privatni forum.");
define("_MD_A_SYNCFORUM","Usklaðivanje foruma/tema");
define("_MD_A_LINK2SYNC","Pomoæu ovog linka možete uskladiti forum i teme, kako bi popravili eventualne razlike");
define("_MD_A_ADDACAT","Dodaj kategoriju");
define("_MD_A_LINK2ADDCAT","Pomoæu ovog linka možete dodati novu kategoriju u koju æete ubaciti forum.");
define("_MD_A_EDITCATTTL","Uredi naslov kategorije");
define("_MD_A_LINK2EDITCAT","Pomoæu ovog linka možete ureðivati naslov kategorije.");
define("_MD_A_RMVACAT","Izbriši kategoriju");
define("_MD_A_LINK2RMVCAT","Pomoæu ovog linka možete Izbrisati kategoriju");
define("_MD_A_REORDERCAT","Razvrstaj kategorije");
define("_MD_A_LINK2ORDERCAT","Pomoæu ovog linka možete promijeniti redoslijed prikazivanja kategorija u poèetnoj stranici");

//%%%%%%	File Name  admin_forums.php   	%%%%%
define("_MD_A_FORUMUPDATED","Forum je ažuriran");
define("_MD_A_HTSMHNBRBITHBTWNLBAMOTF","Meðutim, odabrani moderatori nisu uklonjeni, jer da jesu, ne bi više bilo moderatora za ovaj forum.");
define("_MD_A_FORUMREMOVED","Forum izbrisan.");
define("_MD_A_FRFDAWAIP","Forum i sve njegove objave su izbrisane.");
define("_MD_A_NOSUCHFORUM","Ovaj forum nepostoji");
define("_MD_A_EDITTHISFORUM","Uredi ovaj forum");
define("_MD_A_DTFTWARAPITF","Izbriši ovaj forum (Ovo æe izbrisati i sve objave u ovom forumu!)");
define("_MD_A_FORUMNAME","Ime foruma:");
define("_MD_A_FORUMDESCRIPTION","Opis foruma:");
define("_MD_A_MODERATOR","Moderatori:");
define("_MD_A_REMOVE","Izbriši");
define("_MD_A_NOMODERATORASSIGNED","Nema oznaèenih moderatora");
define("_MD_A_NONE","Nijedan");
define("_MD_A_CATEGORY","Kategorija:");
define("_MD_A_ANONYMOUSPOST","Anonimna poruka");
define("_MD_A_REGISTERUSERONLY","Samo registrirani korisnici");
define("_MD_A_MODERATORANDADMINONLY","Samo moderatori/administratori");
define("_MD_A_TYPE","Tip:");
define("_MD_A_PUBLIC","Javno");
define("_MD_A_PRIVATE","Privatno");
define("_MD_A_SELECTFORUMEDIT","Izaberite forum za ureðivanje");
define("_MD_A_NOFORUMINDATABASE","Nema foruma");
define("_MD_A_DATABASEERROR","Greška s bazom podataka");
define("_MD_A_EDIT","Uredi");
define("_MD_A_CATEGORYUPDATED","Kategorija je ažurirana.");
define("_MD_A_EDITCATEGORY","Ureðivanje kategorije:");
define("_MD_A_CATEGORYTITLE","Naslov kategorije:");
define("_MD_A_SELECTACATEGORYEDIT","Izaberite kategoriju za ureðivanje");
define("_MD_A_CATEGORYCREATED","Kategorija stvorena.");
define("_MD_A_NTWNRTFUTCYMDTVTEFS","Napomena: Ovime NEÆETE ukloniti forum iz kategorije, to morate preko dijela za ureðivanje foruma.");
define("_MD_A_REMOVECATEGORY","Izbriši kategoriju");
define("_MD_A_CREATENEWCATEGORY","Stvori novu kategoriju");
define("_MD_A_YDNFOATPOTFDYAA","Niste popunili sve podatke.<br>Jeste li oznaèili barem jednog moderatora? Molimo vratite se nazad i ispravite podatke.");
define("_MD_A_FORUMCREATED","Forum stvoren.");
define("_MD_A_VTFYJC","Pregledaj upravo stvoren forum.");
define("_MD_A_EYMAACBYAF","Greška, morate dodati kategoriju prije dodavanja foruma");
define("_MD_A_CREATENEWFORUM","Stvori novi forum");
define("_MD_A_ACCESSLEVEL","Nivo pristupa:");
define("_MD_A_CATEGORYMOVEUP","Kategorija pomaknuta gore");
define("_MD_A_TCIATHU","Ova kategorija je veæ na vrhu.");
define("_MD_A_CATEGORYMOVEDOWN","Kategorija pomaknuta dolje");
define("_MD_A_TCIATLD","Ova kategorija je veæ na dnu.");
define("_MD_A_SETCATEGORYORDER","Postavi redoslijed kategorija");
define("_MD_A_TODHITOTCWDOTIP","Ovdje odreðujete kojim æe se redoslijedom prikazati kategorije na poèetnoj stranici. Za premještanje kategorije kliknite Pomakni gore ili Pomakni dolje.");
define("_MD_A_ECWMTCPUODITO","Svaki klik pomièe kategoriju gore ili dolje za 1 mjesto.");
define("_MD_A_CATEGORY1","Kategorija");
define("_MD_A_MOVEUP","Pomakni gore");
define("_MD_A_MOVEDOWN","Pomakni dolje");


define("_MD_A_FORUMUPDATE","Postavke foruma su obnovljene");
define("_MD_A_RETURNTOADMINPANEL","Povratak na Administraciju.");
define("_MD_A_RETURNTOFORUMINDEX","Povratak na poèetni forum");
define("_MD_A_ALLOWHTML","Dopusti HTML:");
define("_MD_A_YES","Da");
define("_MD_A_NO","Ne");
define("_MD_A_ALLOWSIGNATURES","Dopusti potpise:");
define("_MD_A_HOTTOPICTHRESHOLD","Prag vruèih tema:");
define("_MD_A_POSTPERPAGE","Poruka po stranici:");
define("_MD_A_TITNOPPTTWBDPPOT","(Ovo je broj poruka koje æe biti prikazane po stranici pojedine teme)");
define("_MD_A_TOPICPERFORUM","Poruka po forumu:");
define("_MD_A_TITNOTPFTWBDPPOAF","(Ovo je broj poruka koje æe biti prikazane po stranici pojedinog foruma)");
define("_MD_A_SAVECHANGES","Spremi promjene");
define("_MD_A_CLEAR","Izbriši");
define("_MD_A_CLICKBELOWSYNC","Pomoæu donjeg gumba možete uskladiti forum i teme sa ispravnim podacima iz baze podataka. Upotrijebite ovaj dio ako primjetite greške u listi foruma i tema.");
define("_MD_A_SYNCHING","Usklaðujem forum i teme (ovo može potrajati)");
define("_MD_A_DONESYNC","Gotovo!");
define("_MD_A_CATEGORYDELETED","Kategorija izbrisana.");

//%%%%%%	File Name  admin_priv_forums.php   	%%%%%

define("_MD_A_SAFTE","Izaberite forum za ureðivanje");
define("_MD_A_NFID","Nema foruma u bazi podataka");
define("_MD_A_EFPF","Ureðivanje pristupa za forum: <b>%s</b>");
define("_MD_A_UWA","Korisnici s pristupom:");
define("_MD_A_UWOA","Korisnici bez pristupa:");
define("_MD_A_ADDUSERS","Dodaj korisnika -->");
define("_MD_A_CLEARALLUSERS","Izbriši sve korisnike");
define("_MD_A_REVOKEPOSTING","zabrani slanje poruka");
define("_MD_A_GRANTPOSTING","dopusti slanje poruka");
?>
