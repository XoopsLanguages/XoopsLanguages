<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    hr
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 5570 2010-10-20 20:51:35Z beckmi $
 * Translator: XoopsHR.org / Ivan Kosak / 1.2.2011.
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN","Postavke");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL","Opće opcije");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS","Opcije korisničkih informacija");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER","Meta oznake i podnožje");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR","Opcije cenzuriranja riječi");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH","Opcije traženja");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER","Postavke emaila");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION","Opcije utvrđivanja autentičnosti");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS","<ul><li>Upravljanje svim opcijama web stranica.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION","A faire");
*/
define("_MD_AM_SITEPREF", "Postavke");
define("_MD_AM_SITENAME", "Ime stranice");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Moto vaše stranice");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "Email administratora");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Zadani jezik");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "Modul za vašu početnu stranicu");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "Nijedan");
define("_MD_AM_SERVERTZ", "Vremenska zona poslužitelja");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Zadana vremenska zona");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Zadana tema");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Izbor tema");
define("_MD_AM_CUSTOM_REDIRECT", "Koristi jGrowl preusmjeravanje");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "Zamijeni staro preusmjeravanje s jQuery preusmjeravanjem");
define("_MD_AM_ANONNAME", "Korisničko ime za anonimne korisnike");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "Minimalna dužina lozinke"); 
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "Obavijesti emailom kad je novi korisnik registriran?"); 
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Dozvoli korsnicima brisanje vlastitog računa?"); 
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Prikaži preuzimanje... slike?");
define("_MD_AM_USEGZIP", "Koristi gzip kompresiju?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Označi nivo strogosti za filtriranje korisničkog imena"); 
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Strogo (samo slova i brojevi)"); 
define("_MD_AM_MEDIUM", "Srednje"); 
define("_MD_AM_LIGHT", "Lagano (preporučeno za multi-byte znakove"); 
define("_MD_AM_USERCOOKIE", "Ime za korisničke kolačiće.");
define("_MD_AM_USERCOOKIEDSC", "Ovaj kolačić sadrži samo korisničko ime i spremljen je na korisničko računalo na jednu godinu (ako korisnik to želi). Ako korisnik ima taj kolačić, korisničko će ime biti automatski uneseno u prozor prijave.");
define("_MD_AM_USEMYSESS", "Upotrijebi posebnu sesiju");
define("_MD_AM_USEMYSESSDSC", "Izaberi da za prilagodbu sesije povezane vrijednosti.");
define("_MD_AM_SESSNAME", "Ime sesije");
define("_MD_AM_SESSNAMEDSC", "Ime sesije (Vrijedi samo, ako je omogućeno 'upotrijebi posebnu sesiju')");
define("_MD_AM_SESSEXPIRE", "Vrijeme isteka sesije");
define("_MD_AM_SESSEXPIREDSC", "Maksimalna dužina sesije u stanju mirovanja u minutama (Vrijedi samo ako je omogućeno 'upotrijebi posebnu sesiju'. Djeluje samo, ako upotrebljavate PHP 4.2.0 ili noviju inačicu.)");
define("_MD_AM_BANNERS", "Aktiviraj prikazivanje reklamnih poruka?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Vaša IP adresa");
define("_MD_AM_MYIPDSC", "Ova IP adresa se neće brojati kod pregledavanja reklamnih poruka");
define("_MD_AM_ALWDHTML", "HTML oznake su dozvoljene u svim objavama.");
define("_MD_AM_INVLDMINPASS", "Neispravna vrijednost za minimalnu dužinu lozinke.");
define("_MD_AM_INVLDUCOOK", "Neispravna vrijednost za ime kolačića korisnička.");
define("_MD_AM_INVLDSCOOK", "Neispravna vrijednost za ime kolačića sesije.");
define("_MD_AM_INVLDSEXP", "Neispravna vrijednost za vrijeme isteka sesije.");
define("_MD_AM_ADMNOTSET", "Email administratora nije određen.");
define("_MD_AM_YES", "Da");
define("_MD_AM_NO", "Ne");
define("_MD_AM_DONTCHNG", "Ne mijenjaj!");
define("_MD_AM_REMEMBER", "Ne zaboravite na chmod 666 ove datoteke kako bi sustav mogao ispravno zapisivati u tu datoteku.");
define("_MD_AM_IFUCANT", "Ako ne možete promijeniti dozvolu datoteke, možete ručno urediti preostali dio te datoteke.");
 
define("_MD_AM_COMMODE", "Zadani način prikazivanja komentara");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Zadani redosljed prikazivanja komentara");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "Dopusti HTML oznake kod korisničkih komentara?");
define("_MD_AM_DEBUGMODE", "Način traženja greški");
define("_MD_AM_DEBUGMODEDSC", "Više mogućnosti ispravka grešaka. Aktivna web stranica bi trebala imati tu opciju isključenu.");
define("_MD_AM_AVATARALLOW", "Dopusti upload avatara po želji?"); 
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Minimalni potrebni broj objava"); 
define("_MD_AM_AVATARMPDSC", "Unesi minimalan broj objava, potreban za upload avatara po želji"); 
define("_MD_AM_AVATARW", "Širina slike avatara (piksela)"); 
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Visina slike avatara (piksela)"); 
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Maksimalna veličina slike avatara (bajtova)"); 
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Prilagođene postavke avatara");
define("_MD_AM_CHNGUTHEME", "Promijeni sve korisničke teme");
define("_MD_AM_NOTIFYTO", "Izaberite grupu kojoj će biti poslana obavijest o novom korisniku");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Dopusti korisnicima da izaberu temu?");
define("_MD_AM_ALLOWIMAGE", "Dopusti korisnicima prikazivanje slike u objavama?");

define("_MD_AM_USERACTV", "Zahtjev aktivacije od strane korisnika (preporučeno)"); 
define("_MD_AM_AUTOACTV", "Aktiviraj automatski"); 
define("_MD_AM_ADMINACTV", "Aktivacija od strane administratora"); 
define("_MD_AM_ACTVTYPE", "Označi tip aktivacije za nove registrirane korisnike"); 
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Označi grupu kojoj će biti poslana aktivacija"); 
define("_MD_AM_ACTVGROUPDSC", "Vrijedi samo kada je ' Aktivacija od strane administratora ' označeno"); 
define("_MD_AM_USESSL", "Koristi SSL za prijavu?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "Ime varijable SSL poruka");
define("_MD_AM_SSLPOSTDSC", "Ime varijable koja se koristi za prebacivanje sesije vrijednosti preko OBJAVE. Ako niste sigurni, postavite neko ime koje je teško pogoditi.");
define("_MD_AM_DEBUGMODE0", "Isključeno");
define("_MD_AM_DEBUGMODE1", "Uključi ispravak greški (na istoj stranici)");
define("_MD_AM_DEBUGMODE2", "Uključi ispravak greški (skočni prozor)");
define("_MD_AM_DEBUGMODE3", "Ispravak greški Smarty predložaka");
define("_MD_AM_MINUNAME", "Minimalna dužina korisničkog imena"); 
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Maksimalna dužina lozinke"); 
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Opće postavke");
define("_MD_AM_USERSETTINGS", "Postavke korisničkih informacija"); 
define("_MD_AM_ALLWCHGMAIL", "Dopusti korisnicima mijenjanje email adrese?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "Blokiranje IP adrese");
define("_MD_AM_BADEMAILS", "Unesite email adrese koje nebi smjele biti u profilu korisnika");
define("_MD_AM_BADEMAILSDSC", "Svaku odvojite s <b>|</b>, osjetljivo na velika/mala slova, regex uključeno.");
define("_MD_AM_BADUNAMES", "Unesite riječi koje nisu prikladne za korisničko ime");
define("_MD_AM_BADUNAMESDSC", "Svaku odvojite s  <b>|</b>, osijetljivo na velika/mala slova, regex ukljčen.");
define("_MD_AM_DOBADIPS", "Uključi blokiranje IP adresa?");
define("_MD_AM_DOBADIPSDSC", "Korisnici iz određenih IP adresa neće moći posjetiti vašu stranicu");
define("_MD_AM_BADIPS", "Unesite IP adrese kojima će biti onemogućen pristup do stranice.<br />Razdvojite svaku sa <b>|</b>, neosjetljivo na velika/mala slova, regex omogućen.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc će onemogućiti pristup posjetiteljima kojima IP adresa započinje sa aaa.bbb.ccc<br />aaa.bbb.ccc$ će onemogućiti pristup posjetiteljima kojima IP adresa završava sa aaa.bbb.ccc<br />aaa.bbb.ccc će onemogućiti pristup posjetiteljima, kojima IP adresa sadrži aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Glavne postavke");
define("_MD_AM_METAKEY", "Meta ključne riječi");
define("_MD_AM_METAKEYDSC", "Meta tag ključnih riječi je niz ključnih riječi koje predstavljaju sadržaj vaše stranice. Unesite ključne riječi razdvojene zarezom ili razmakom. (Npr. XOOPS, PHP, mySQL, portal sustav)");
define("_MD_AM_METARATING", "Meta ocjena");
define("_MD_AM_METARATINGDSC", "Meta tag ocjena oznaka određuje starost vaše stranice i popularnost");
define("_MD_AM_METAOGEN", "Općenito");
define("_MD_AM_METAO14YRS", "14 godina");
define("_MD_AM_METAOREST", "Ograničeno");
define("_MD_AM_METAOMAT", "Za odrasle");
define("_MD_AM_METAROBOTS", "Meta roboti");
define("_MD_AM_METAROBOTSDSC", "Robot oznake određuju koje tražilice koji sadržaj mogu indeksirati i spremati");
define("_MD_AM_INDEXFOLLOW", "Index, slijedi");
define("_MD_AM_NOINDEXFOLLOW", "Bez indexa, slijedi");
define("_MD_AM_INDEXNOFOLLOW", "Index, Ne slijedi");
define("_MD_AM_NOINDEXNOFOLLOW", "Bez Index, Bez slijeda");
define("_MD_AM_METAAUTHOR", "Meta autora");
define("_MD_AM_METAAUTHORDSC", "Meta tag autora određuje ime autora dokumenta kojeg se čita. Podaci koji su na raspolaganju sadrže email adresu, ime poduzeća ili  URL.");
define("_MD_AM_METACOPYR", "Meta autorskih prava");
define("_MD_AM_METACOPYRDSC", "Meta tag autorskih prava određuje zaštićene dokumente, izjave, objave i komentare autorskim pravima na vašoj stranici.");
define("_MD_AM_METADESC", "Meta opisa");
define("_MD_AM_METADESCDSC", "Meta tag opisa je opći opis sadržaja na vašim stranicama");
define("_MD_AM_METAFOOTER", "Meta oznaka i podnožje");
define("_MD_AM_FOOTER", "Podnožje");
define("_MD_AM_FOOTERDSC", "Budite sigurni da pišete linkove s cjelovitim putem počevši od ( http://), inaće linkovi neće raditi na stranicama s modulima.");
define("_MD_AM_CENSOR", "Opcije cenzuriranja riječi");
define("_MD_AM_DOCENSOR", "Omogući cenzuriranje neželjenih riječi?");
define("_MD_AM_DOCENSORDSC", "Riječi će biti cenzurirane, ako je ta opcija omogućena. Ova opcija bi mogla biti isključena s ciljem povećanja brzine učitavanja stranice.");
define("_MD_AM_CENSORWRD", "Riječi za cenzuru");
define("_MD_AM_CENSORWRDDSC", "Unesite riječi, koje će biti cenzurirane u korisničkim objavama. Radvojite svaku riječ sa <b>|</b>, nije osjetljivo na velika/mala slova.");
define("_MD_AM_CENSORRPLC", "Cenzurirane riječi biti će zamijenjene sa:");
define("_MD_AM_CENSORRPLCDSC", "Cenzurirane riječi će biti zamijenjene sa znakovima, koje ste unijeli u to polje.");

define("_MD_AM_SEARCH", "Opcije traženja");
define("_MD_AM_DOSEARCH", "Omogući traženje po cijeloj stranici?");
define("_MD_AM_DOSEARCHDSC", "Dozvoli traženje po objavama/stavcima unutar vaše stranice");
define("_MD_AM_MINSEARCH", "Minimalna dužina ključne riječi");
define("_MD_AM_MINSEARCHDSC", "Unesite minimalnu dužinu ključne riječi koju korisnici moraju unijeti pri pretražinju");
define("_MD_AM_MODCONFIG", "Postavke modula");
define("_MD_AM_DSPDSCLMR", "Prikaži uvjete pridržavanja?");
define("_MD_AM_DSPDSCLMRDSC", "Izaberite da, za prikazivanje uvjeta pridržavanja na stranici registracije");
define("_MD_AM_REGDSCLMR", "Uvjeti pridržavanja registracije");
define("_MD_AM_REGDSCLMRDSC", "Unesite tekst koji će biti prikazan u uvjetima pridržavanja pri registraciji");
define("_MD_AM_ALLOWREG", "Dozvoli registraciju novih korisnika?");
define("_MD_AM_ALLOWREGDSC", "Izaberite da za prihvaćanje registracije novih korisnika");
define("_MD_AM_THEMEFILE", "Provjeri da li ima izmjena u predlošcima ?");
define("_MD_AM_THEMEFILEDSC", "Ako je ova opcije omogućena, izmjene predložaka će biti automatski ažurirane pri prikazu. Ovo bi trebalo biti isključno kad stranica krene s javnim radom.");
define("_MD_AM_CLOSESITE", "Isključi stranicu?");
define("_MD_AM_CLOSESITEDSC", "Izaberite da za isključivanje stranice, tako da samo korisnici u odreženim grupama imaju pristup stranici.");
define("_MD_AM_CLOSESITEOK", "Izaberite grupe koje će imati pristup stranici kada stranica bude isključena.");
define("_MD_AM_CLOSESITEOKDSC", "Korisnici u webmaster grupi imaju uvjek odobren pristup stranici.");
define("_MD_AM_CLOSESITETXT", "Razlog isključivanja stranice");
define("_MD_AM_CLOSESITETXTDSC", "Tekst koji je prikazan kada je stranica isključena.");
define("_MD_AM_SITECACHE", "Međuspremnik za cijelu stranicu");
define("_MD_AM_SITECACHEDSC", "Za povećavane učinka spremi cijeli sadržaj stranice na određeni rok. Postavljanje ove opcije će prepisati međuspremnik modula sa podacima cijele strancie preko međuspremnika modula, međuspremnika bloka te međuspremnika stavki modula ako ih ima.");
define("_MD_AM_MODCACHE", "Međuspremnik modula");
define("_MD_AM_MODCACHEDSC", "Sprema međuspremnik modula na određeno vrijeme za poboljšavanje performansi. Opcija međuspremnika modula će poništiti razinu stavki modula međuspremnika ako ga ima.");
define("_MD_AM_NOMODULE", "Nema međuspremnika u modulima koji se može spremiti.");
define("_MD_AM_DTPLSET", "Default template set");
define("_MD_AM_DTPLSET", "Zadani predlošci");
define("_MD_AM_SSLLINK", "URL tamo gdje je SSL prijava zaključana");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "Postavke emaila");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "OD adresa");
define("_MD_AM_MAILFROMDESC", "Adresa pošiljatelja");
define("_MD_AM_MAILFROMNAME", "OD ime");
define("_MD_AM_MAILFROMNAMEDESC", "Ime pošiljatelja");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "OD korisnika");
define("_MD_AM_MAILFROMUIDDESC", "Kada sustav pošalje privatnu poruku, koji bi se korisnik trebao prikazati kao pošiljatelj?");
define("_MD_AM_MAILERMETHOD", "Način dostave emaila");
define("_MD_AM_MAILERMETHODDESC", "Koja se metoda koristi za slanje emaila. Zadana metoda je  \"mail\", koristi druge metode samo ako ova ne radi.");
define("_MD_AM_SMTPHOST", "SMTP host(ovi)");
define("_MD_AM_SMTPHOSTDESC", "Lista SMTP poslužitelja s kojima se budete pokušavali spojiti.");
define("_MD_AM_SMTPUSER", "Korisničko ime SMTP poslužitelja");
define("_MD_AM_SMTPUSERDESC", "Korisničko ime za povezivanje s SMTP hostom (SMTPAuth).");
define("_MD_AM_SMTPPASS", "Lozinka SMTP poslužitelja");
define("_MD_AM_SMTPPASSDESC", "Lozinka za povezivanjem s SMTP hostom - SMTPAuth.");
define("_MD_AM_SENDMAILPATH", "Put do sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Put do programa sendmail za slanje pošte (ili nadomjestak) na ovom poslužitelju.");
define("_MD_AM_THEMEOK", "Ponuđene teme");
define("_MD_AM_THEMEOKDSC", "Odaberite teme koje korisnici mogu izabrati kao zadanu temu");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","Ovo je adresa soap poslužitelja.");
define("_MD_AM_SOAP_PROVISION", "SOAP - propis");
define("_MD_AM_SOAP_PROVISIONDESC","Ako želite novi korisnički propis, reci 'da'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - rang propisa");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","Ovo su rangovi novih korisnika koji su stavljeni u soap poslužitelj.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","Ako trebate wdsl soap servis uključite ovu opciju.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Korisničko ime");
define("_MD_AM_SOAP_USERNAMEDESC","Ovo je korisničko ime računa na soap poslužitelju.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP lozinka");
define("_MD_AM_SOAP_PASSWORDDESC","Ako trebate lozinku sa soap servisom stavite je ovdje.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - klijent Alive");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Drži soap klijenta da radi.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - specijalni računi");
define("_MD_AM_SOAP_FILTERPERSONDESC","Specijalni računi koji koriste Xoops autentikaciju.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - ime proxy hosta");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","Proxy poslužitelj SOAP poslužitelja.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","Broj porta proxy poslužitelja SOAP poslužitelja <br>npr: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - proxy korisničko ime");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","Korisničko ime proxy poslužitelja SOAP poslužitelja");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - proxy lozinka");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","Lozinka za proxi poslužitelj SOAP poslužitelja.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP vrijeme zaustavljanja");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Drži Soap upit živim <strong>xx</strong> sekundi.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP vrijeme zaustavljanja odgovora");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Drži Soap upit živim <strong>xx</strong> sekundi.");
define("_MD_AM_SOAP_FIELDMAPPING","Mapiranje polja Xoops-Auth poslužitelja");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Opišite ovdje mapiranje između Xoops polja baze podataka i LDAP autentikacijskog sustava polja." .
		"<br><br>Format [Xoops polje baze podataka]=[Aut. sustav SOAP atribut]" .
		"<br>na primjer : email=mail" .
		"<br>Svaki odvojite s |" .
		"<br><br>!! Za napredne korisnike !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS Baza podataka");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Standardna LDAP mapa");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops Soap autentikacija");
define("_MD_AM_AUTHENTICATION", "Opcije utvrđivanja autentičnosti");
define("_MD_AM_AUTHMETHOD", "Metoda utvrđivanja autentičnosti");
define("_MD_AM_AUTHMETHODDESC", "Koje metode utvrđivanja autentičnosti biste htjeli upotrijebi za prijavljivanje korisnika.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Mail ime polja");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "Ime Emaila se pridružuje u vašem LDAP-u stablo mape.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - Uobičajeno ime ime polja");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "Ime uobičajenog imena se pridružuje u vašoj LDAP mapi.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Prezime ime polja");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "Ime prezimena se pridružuje u vašoj LDAP mapi.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Dano ime ime polja");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "Ime danog imena se pridružuje u vašoj LDAP mapi.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Baza DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "Baza DN (istaknuto ime) vašeg LDAP stabla mape.");
define("_MD_AM_LDAP_PORT", "LDAP - Broj porta");
define("_MD_AM_LDAP_PORT_DESC", "Broj porta je potreban za pristup vašoj LDAP mapi poslužitelja.");
define("_MD_AM_LDAP_SERVER", "LDAP - Ime poslužitelja");
define("_MD_AM_LDAP_SERVER_DESC", "Ime vaše LDAP mape poslužitelja.");

define("_MD_AM_LDAP_MANAGER_DN", "DN od upravitelja LDAP-a");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN od korisnika kojem je dozvoljena pretraga (npr. upravitelj)");
define("_MD_AM_LDAP_MANAGER_PASS", "Lozinka za upravitelja LDAP-a");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Lozinka od korisnika kojem je dozvoljeno pretraživanje");
define("_MD_AM_LDAP_VERSION", "LDAP inačica protokola");
define("_MD_AM_LDAP_VERSION_DESC", "LDAP inačica protokola : 2 ili 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Korisnici kojima je dozvoljeno zaobilaženje LDAP autentikacije");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Korisnici koji će utvrđivati autentičnost običnom XOOPS metodom");

define("_MD_AM_LDAP_USETLS", " Koristi TLS konekciju");
define("_MD_AM_LDAP_USETLS_DESC", "Koristi TLS (Transport Layer Security) konekciju. TLS koristi standardni 389 broj porta<BR>" .
								  " i LDAP inačica mora biti postavljena na 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "LDAP pridruživanje upotrijebiti pri pretraživanju korisnika");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "Kada je korisničko ime upotrebljeno u DN opciji i postavljeno na DA, mora se podudarati sa korisničkim imenom XOOPS-a");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Upotrijebi korisničko ime u DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Korisničko ime XOOPS-a je korišteno u LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>Ulaz je direktano učitan u LDAP poslužitelj bez pretraživanja");

define("_MD_AM_LDAP_FILTER_PERSON", "Filter za pretragu LDAP upita za traženje korisnika");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Specijalni LDAP filter za pronalaženje korisnika. @@loginname@@ će se zamjeniti sa korisničkim imenom<br> MORA BITI PRAZNO AKO NE ZNATE ŠTO RADITE' !" .
		"<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) za AD" .
		"<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) za LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Ime domene");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows ime domene. za ADS i NT samo za poslužitelj");

define("_MD_AM_LDAP_PROVIS", "Automatski xoops računski dodjeljivač");
define("_MD_AM_LDAP_PROVIS_DESC", "Stvori xoops korisničku bazu podataka ako ne postoji");

define("_MD_AM_LDAP_PROVIS_GROUP", "Zadana grupa za djelovanje");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Novi korisnik je dodan u ove grupe");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Xoops autentikacijski poslužitelj mapiranje polja");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Opišite ovdje mapiranje između polja Xoops baze podataka i polja LDAP autentikacijskog sustava." .
		"<br /><br />Oblik [Polje Xoops baze podataka]=[atribut autentikacijskog sustava LDAP]" .
		"<br />na primjer : email=mail" .
		"<br />Svaki odvojite s |" .
		"<br /><br />!! Za napredne korisnike !!");
		
define("_MD_AM_LDAP_PROVIS_UPD", "Provodi pričuvu xoops korisničkih računa");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "Xoops korisnički račun se stalno sinkronizira sa autentikacijskim poslužiteljom");


define("_MD_AM_CPANEL", "GUI za kontrolnu ploču");
define("_MD_AM_CPANELDSC", "Za povratak");

define("_MD_AM_WELCOMETYPE", "Šaljem poruku dobrodošlice");
define("_MD_AM_WELCOMETYPE_DESC", "Način slanja poruke dobrodošlice korisniku nakon uspješne registracije.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Poruka");
define("_MD_AM_WELCOMETYPE_BOTH", "Email i poruka");

define("_MD_AM_MODULEPREF", "Postavke modula");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS","Postavke sustavskog modula");
?>