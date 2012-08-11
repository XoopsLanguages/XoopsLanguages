<?php
// $Id: preferences.php,v 1.16.22.7 2005/07/24 10:23:46 mithyt2 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change

define("_MD_AM_SITEPREF","%s Postavke");
define("_MD_AM_SITENAME","Ime stranice");
define("_MD_AM_SLOGAN","Moto vaše stranice");
define("_MD_AM_ADMINML","Email administratora");
define("_MD_AM_LANGUAGE","Zadani jezik");
define("_MD_AM_STARTPAGE","Modul za vašu poèetnu stranicu");
define("_MD_AM_NONE","Nijedan");
define("_MD_AM_SERVERTZ","Vremenska zona servera");
define("_MD_AM_DEFAULTTZ","Zadana vremenska zona");
define("_MD_AM_DTHEME","Zadana tema");
define("_MD_AM_THEMESET","Izbor tema");
define("_MD_AM_ANONNAME","Korisnièko ime za anonimne korisnike");
define("_MD_AM_LOADINGIMG","Prikaži preuzimanje... slike?");
define("_MD_AM_USEGZIP","Koristi gzip kompresiju?");
define("_MD_AM_USERCOOKIE","Ime za korisnièke kolaèiæe.");
define("_MD_AM_USERCOOKIEDSC","Ovaj kolaèiæ sadrži samo korisnièko ime i spremljen je na korisnièko raèunalo na jednu godinu (ako korisnik to želi). Ako korisnik ima taj kolaèiæ, korisnièko æe ime biti automatski uneseno u prozor prijave.");
define("_MD_AM_USEMYSESS","Upotrijebi uobièajen postupak");
define("_MD_AM_USEMYSESSDSC","Izaberi da za prilagodbu postupaka povezane vrijednosti.");
define("_MD_AM_SESSNAME","Ime postupka");
define("_MD_AM_SESSNAMEDSC","Ime postupka (Vrijedi samo, ako je omoguæeno 'upotrijebi uobièajen postupak')");
define("_MD_AM_SESSEXPIRE","Vrijeme isteka postupka, u minutama");
define("_MD_AM_SESSEXPIREDSC","Maksimalna dužina postupka u stanju mirovanja (Vrijedi samo ako je omoguæeno 'upotrijebi uobièajen postupak'. Djeluje samo, ako upotrebljavate PHP 4.2.0 ili noviju inaèicu.)");
define("_MD_AM_BANNERS","Aktiviraj prikazivanje reklamnih poruka?");
define("_MD_AM_MYIP","Vaša IP adresa");
define("_MD_AM_MYIPDSC","Ova IP adresa neæe vrijediti za reklamne poruke");
define("_MD_AM_ALWDHTML","HTML oznake su dozvoljene u svim objavama.");
define("_MD_AM_INVLDMINPASS","Neispravna vrijednost za minimalnu dužinu lozinke.");
define("_MD_AM_INVLDUCOOK","Neispravna vrijednost za ime kolaèiæa korisnièka.");
define("_MD_AM_INVLDSCOOK","Neispravna vrijednost za ime kolaèiæa postupka.");
define("_MD_AM_INVLDSEXP","Neispravna vrijednost za vrijeme isteka postupka.");
define("_MD_AM_ADMNOTSET","Email administratora nije odreðen.");
define("_MD_AM_YES","Da");
define("_MD_AM_NO","Ne");
define("_MD_AM_DONTCHNG","Ne mijenjaj");
define("_MD_AM_REMEMBER","Ne zaboravite na chmod 666 datoteku kako bi sistem mogao zapisivati u tu datoteku.");
define("_MD_AM_IFUCANT","Ako ne možete promijeniti dozvolu datoteke, možete ruèno urediti preostali dio te datoteke.");

define("_MD_AM_COMMODE","Zadani naèin prikazivanja komentara");
define("_MD_AM_COMORDER","Zadani redosljed prikazivanja komentara");
define("_MD_AM_ALLOWHTML","Dopusti HTML oznake kod korisnièkih komentara?");
define("_MD_AM_DEBUGMODE","Naèin traženja greški");
define("_MD_AM_DEBUGMODEDSC","Više moguænosti ispravka grešaka. Aktivna web stranica bi trebala imati tu opciju iskljuèenu.");
define("_MD_AM_AVATARCONF","Uobièajne postavke avatara");
define("_MD_AM_CHNGUTHEME","Promijeni sve korisnièke teme");
define("_MD_AM_NOTIFYTO","Izaberite grupu kojoj æe biti poslana obavijest o novom korisniku");
define("_MD_AM_ALLOWTHEME","Dopusti korisnicima da izaberu temu?");
define("_MD_AM_ALLOWIMAGE","Dopusti korisnicima prikazivanje slike u objavama?");

define('_MD_AM_USESSL','Koristi SSL za prijavu?');
define('_MD_AM_SSLPOST','SSL Poruka promijenjevog imena');
define('_MD_AM_SSLPOSTDSC','Ime promijene koja se koristi za prebacivanje vrijednosti postupka sa OBJAVE. Ako niste sigurni, postavite neko ime koje je teško pogoditi.');
define('_MD_AM_DEBUGMODE0','Iskljuèeno');
define('_MD_AM_DEBUGMODE1','PHP ispravak greški');
define('_MD_AM_DEBUGMODE2','MySQL/Blokovi ispravak greški');
define('_MD_AM_DEBUGMODE3','Ispravak greški predlošcima');
define('_MD_AM_GENERAL','Opæenite postavke');
define('_MD_AM_IPBAN','Blokiranje IP adrese');
define('_MD_AM_DOBADIPS','Ukljuèi blokiranje IP adresa?');
define('_MD_AM_DOBADIPSDSC','Korisnici iz odreðenih IP adresa neæe moæi posjetiti vašu stranicu');
define('_MD_AM_BADIPS','Unesite IP adrese kojima æe biti onemoguæen pristup do stranice.<br />Razdvojite svaku sa <b>|</b>, neosjetljivo na velika/mala slova, regex omoguèen.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc æe onemoguæiti pristup posjetiteljima kojima IP adresa zapoèinje sa aaa.bbb.ccc<br />aaa.bbb.ccc$ æe onemoguæiti pristup posjetiteljima kojima IP adresa završava sa aaa.bbb.ccc<br />aaa.bbb.ccc æe onemoguæiti pristup posjetiteljima, kojima IP adresa sadrži aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Glavne postavke');
define('_MD_AM_METAKEY','Kategorija kljuènih rijeèi');
define('_MD_AM_METAKEYDSC','Kategorija kljuènih rijeèi je niz kljuènih rijeèi koje predstavljaju sadržaj vaše stranice. Unesite kljuène rijeèi razdvojene zarezom ili razmakom. (Npr. XOOPS, PHP, mySQL)');
define('_MD_AM_METARATING','Kategorija ocjena');
define('_MD_AM_METARATINGDSC','Kategorija ocjena oznaka odreðuje starost vaše stranice i popularnost');
define('_MD_AM_METAOGEN','Opæenito');
define('_MD_AM_METAO14YRS','14 godina');
define('_MD_AM_METAOREST','Ogranièeno');
define('_MD_AM_METAOMAT','Za odrasle');
define('_MD_AM_METAROBOTS','Kategorija robota');
define('_MD_AM_METAROBOTSDSC','Robot oznake pretražilice oznaèuju sadržaj indexa i pauka');
define('_MD_AM_INDEXFOLLOW','Index, slijedi');
define('_MD_AM_NOINDEXFOLLOW','Bez indexa, slijedi');
define('_MD_AM_INDEXNOFOLLOW','Index, Ne slijedi');
define('_MD_AM_NOINDEXNOFOLLOW','Bez Index, Bez slijeda');
define('_MD_AM_METAAUTHOR','Kategorija autora');
define('_MD_AM_METAAUTHORDSC','Kategorija autora oznaka odreðuje ime autora dokumenta kojeg se èita. Podaci koji su na raspolaganju, email adresa, ime poduzeæa ili  URL.');
define('_MD_AM_METACOPYR','Kategorija autorskih prava');
define('_MD_AM_METACOPYRDSC','Kategorija autorskih prava oznaka, odreðuje zaštièene dokumente, izjave, objave i komentare autorskim pravima na vašoj stranici.');
define('_MD_AM_METADESC','Kategorija opisa');
define('_MD_AM_METADESCDSC','Kategorija opisa oznaka, je opæi opis sadržaja na vašim stranicama');
define('_MD_AM_METAFOOTER','Kategorija oznaka i podnožje');
define('_MD_AM_FOOTER','Podnožje');
define('_MD_AM_FOOTERDSC','Budite sigurni da pišete linkove s cjelovitim putem poæevši od ( http://), inaèe linkovi neèe raditi na stranicama s modulima.');
define('_MD_AM_CENSOR','Opcije cenzuriranja rijeèi');
define('_MD_AM_DOCENSOR','Omoguèi cenzuriranje neželjenih rijeèi?');
define('_MD_AM_DOCENSORDSC','Rijeèi æe biti cenzurirane, ako je ta opcija omoguæena. Ova opcija bi mogla biti iskljuèena s ciljem, poveèavanjem brzine uèitavanja stranice.');
define('_MD_AM_CENSORWRD','Cenzuriraj rijeèi');
define('_MD_AM_CENSORWRDDSC','Unesite rijeèi, koje æe biti cenzurirane u korisnièkim objavama. Radvojite svaku rijeè sa <b>|</b>, nije osjetljivo na velika/mala slova.');
define('_MD_AM_CENSORRPLC','Cenzurirane rijeèi biti æe zamijenjene sa:');
define('_MD_AM_CENSORRPLCDSC','Cenzurirane rijeèi æe biti zamijenjene sa znakovima, koje ste unijeli u to polje.');

define('_MD_AM_SEARCH','Opcije traženja');
define('_MD_AM_DOSEARCH','Omoguèi traženje po cijeloj stranici?');
define('_MD_AM_DOSEARCHDSC','Dozvoli traženje po objavama/predmeta unutar vaše stranice');
define('_MD_AM_MINSEARCH','Minimalna dužina kljuène rijeèi');
define('_MD_AM_MINSEARCHDSC','Unesite minimalnu dužinu kljuène rijeèi, koju korisnici moraju unijeti pri pretražinju');
define('_MD_AM_MODCONFIG','Postavke modula');
define('_MD_AM_DSPDSCLMR','Prikaži uvjete pridržavanja?');
define('_MD_AM_DSPDSCLMRDSC','Izaberite da, za prikazivanje uvjete pridržavanja na stranici registracije');
define('_MD_AM_REGDSCLMR','Uvjeti pridržavanja registracije');
define('_MD_AM_REGDSCLMRDSC','Unesite tekst koji æe biti prikazan u uvjetima pridržavanja pri registraciji');
define('_MD_AM_ALLOWREG','Dozvoli registraciju novih korisnika?');
define('_MD_AM_ALLOWREGDSC','Izaberite "da" za prihvaèivanje registracije novih korisnika');
define('_MD_AM_THEMEFILE','Obnovi modul prijedloška .html datoteke iz imenika teme/vaša teme/prijedlošci?');
define('_MD_AM_THEMEFILEDSC','Ako je ova opcije omoguèena, modul prijedložaka .html datoteke æe biti automatski ažurirane, ako ima novih datoteke u imeniku teme/vaša tema/prijedlošci za zadanu temu. Ovo bi trebalo biti iskljuèno kad stranica krene s javnim radom.');
define('_MD_AM_CLOSESITE','Iskljuèi stranicu?');
define('_MD_AM_CLOSESITEDSC','Izaberite da za iskljuèivanje stranice, tako da samo korsinici u odreženim grupama imaju pristup stranici.');
define('_MD_AM_CLOSESITEOK','Izaberite grupe koje æe imati pristup stranici kada stranica bude iskljuèena.');
define('_MD_AM_CLOSESITEOKDSC','Korisnici u webmaster grupi imaju uvjek odobren pristup stranici.');
define('_MD_AM_CLOSESITETXT','Razlog iskljuèivanja stranice');
define('_MD_AM_CLOSESITETXTDSC','Tekst koji je prikazan kada je stranica iskljuèena.');
define('_MD_AM_SITECACHE','Meðuprostor po cijeli stranici');
define('_MD_AM_SITECACHEDSC','Za poveèavane uèinka spremi cijeli sadržaj stranice u odreðeno vrijeme. Nastavljanje ove opcije æe prepisati meðuprostor modula za izravnavanje meðuprostora ako ih ima.');
define('_MD_AM_MODCACHE','Meðuspremnik u modulima');
define('_MD_AM_MODCACHEDSC','Spremi meðuspremnik modula u odreðeno vrijeme za poboljšavanje performansi. Opcija meðuspremnika modula æe poništiti razinu elemnta meðuspremnika ako ga ima.');
define('_MD_AM_NOMODULE','Nema meðuspremnika u modulima.');
define('_MD_AM_DTPLSET','Zadani predlošci');
define('_MD_AM_SSLLINK','URL je tamo gdje je SSL prijavna zakljuèana');

// added for mailer
define("_MD_AM_MAILER","Postavke emaila");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","OD adresa");
define("_MD_AM_MAILFROMDESC","Adresa pošiljatelja");
define("_MD_AM_MAILFROMNAME","OD ime");
define("_MD_AM_MAILFROMNAMEDESC","Ime pošiljatelja");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","OD korisnika");
define("_MD_AM_MAILFROMUIDDESC","Kada sistem pošalje privatnu poruku, koji bi se korisnik trebao prikazati kao pošiljatelj?");
define("_MD_AM_MAILERMETHOD","Naèin dostave emaila");
define("_MD_AM_MAILERMETHODDESC","Uporabljena metoda za slanje emaila. Zadano metoda je  \"PHP mail()\", Koristi druge metode, samo ako ova ne radi.");
define("_MD_AM_SMTPHOST","SMTP ugostitelji");
define("_MD_AM_SMTPHOSTDESC","Lista SMTP servera, s kojima se budete pokušavali spojiti. Odvojeni višestruki server s polu-kolonu;");
define("_MD_AM_SMTPUSER","Korisnièko ime SMTP servera");
define("_MD_AM_SMTPUSERDESC","Korisnièko ime za povezivanje s SMTP ugostiteljem (SMTPAuth).");
define("_MD_AM_SMTPPASS","Lozinka SMTP servera");
define("_MD_AM_SMTPPASSDESC","Lozinka za povezivanjem s SMTP ugostiteljem (SMTPAuth).");
define("_MD_AM_SENDMAILPATH","Put do slanja pošte");
define("_MD_AM_SENDMAILPATHDESC","Put do programa za slanje pošte (ili nadomjestak) na ovom serveru.");
define("_MD_AM_THEMEOK","Ponuðene teme");
define("_MD_AM_THEMEOKDSC","Odaberite teme koje korisnici mogu izabrati kao zadana tema");

define("_MD_AM_ADMINTHEME","Tema administracije");
define("_MD_AM_FRONTSIDE_THEME","Upotrijebi prednju temu");

define('_MD_AM_MODULEPREF','Postavke modula');

// Authentication constants

define("_MD_AM_AUTHENTICATION","Opcija utvrðivanja autentiènosti");
define("_MD_AM_AUTHMETHOD","Metoda utvrðivanje autentiènosti");
define("_MD_AM_AUTHMETHODDESC","Koju metodu utvrðivanja autentiènosti bi koristili za prijavu korisnika.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Ime email polja");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Ime email polja u vašem LDAP stablu imenika.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Opæi naziv za ime polja");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Opæi naziv za ime polja u vašem LDAP imeniku.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Ime polja za prezime");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Ime polja za prezime u vašem LDAP imeniku.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Ime polja za krsno ime");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Ime polja za krsno ime u vašem LDAP imeniku.");
define("_MD_AM_LDAP_UID_ATTR","LDAP - UID Ime polja");
define("_MD_AM_LDAP_UID_ATTR_DESC","ID ime polja u vašem LDAP imeniku.");
define("_MD_AM_LDAP_BASE_DN","LDAP - DN baza");
define("_MD_AM_LDAP_BASE_DN_DESC","DN baza (Istaknuto ime) u vašem LDAP stablu imenika.");
define("_MD_AM_LDAP_PORT","LDAP - Broj prikljuèka");
define("_MD_AM_LDAP_PORT_DESC","Broj prikljuèka za pristup vašem LDAP imeniku servera.");
define("_MD_AM_LDAP_SERVER","LDAP - Ime servera");
define("_MD_AM_LDAP_SERVER_DESC","Ime vašeg LDAP imenika servera.");
define("_MD_AM_LDAP_UID_ASDN","UID kao DN");
define("_MD_AM_LDAP_UID_ASDN_DESC","UID atribut je korišten kao DN");

define("_MD_AM_LDAP_MANAGER_DN","Upravitelj DN od LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC","DN korisnika odobrava do upotrebe tražilice (npr. manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Lozinka LDAP upravitelja");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","Lozinka korisnika s odobrenjem do uporabe tražilice");
define("_MD_AM_LDAP_VERSION","LDAP inaèica protokola");
define("_MD_AM_LDAP_VERSION_DESC","LDAP inaèica protokola : 2 ili 3");
?>