<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ba
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 5570 2010-10-20 20:51:35Z saba $
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN","Podešavanja");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL","General Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS","User Info Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER","Meta Tags and Footer");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR","Word Censoring Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH","Search Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER","Mail Setup");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION","Authentication Options");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS","<ul><li>Manadzer za sva podešavanja na stranici.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION","A faire");
*/
define("_MD_AM_SITEPREF", "Podešavanje web stranice");
define("_MD_AM_SITENAME", "Naziv tvoje web stranice");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Slogan tvoje web stranicee");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "Admin mail adresa");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Standardni govor");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "Modul na tvojoj start stranici");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "Ništa");
define("_MD_AM_SERVERTZ", "Server-vremenska zona");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Standardna-vremenska zona");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Standardna thema");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Theme izbor");
define("_MD_AM_CUSTOM_REDIRECT", "Koristi jGrowl preusmjeravanje");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "Zamjeni staro preusmjeravanje sa jQuery preusmjeravanjem");
define("_MD_AM_ANONNAME", "Odredi naziv za goste");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "Odredi najmanju dužinu(broj)slova(karaktera) za lozinke registrovanih članova");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "Odredi treba li preko mail-a neko biti obaviješten ako se novi član registruje?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Odredi dali dozvoljavaš da svoje profile mogu sami sebi registrovani članovi izbrisati, ako nekada to požele?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Prikaži učitava se... slika?");
define("_MD_AM_USEGZIP", "Odredi treba li koristiti gzip kompresiju?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Odredi izborom strogost filtriranja za registrovana Nik imena članova");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Strogo (samo brojevi i slova)");
define("_MD_AM_MEDIUM", "Srednje");
define("_MD_AM_LIGHT", "Lagano (preporuka je korištenje multi-byte oznaka)");
define("_MD_AM_USERCOOKIE", "Naziv cookiesa za članove.");
define("_MD_AM_USERCOOKIEDSC", "Ako je izabrana opcija korištenja cookiesa, 'Zapamti me' je onda opcija uključena u prijavi registrovanih članova. Ako je član aktivirao zadnji puta prilikom prijavljivanja opciju 'Zapamti me', onda će prilikom svake posjete biti automatski prijavljen. Isticanje cookiesa je ograničen na godinu dana.");
define("_MD_AM_USEMYSESS", "Koristi obični session");
define("_MD_AM_USEMYSESSDSC", "Sa izborom DA podešava se session vrijednost.");
define("_MD_AM_SESSNAME", "Session naziv");
define("_MD_AM_SESSNAMEDSC", "Naziv session-a (Važi je samo ako je 'koristi obični session' uključen)");
define("_MD_AM_SESSEXPIRE", "Session isticanje");
define("_MD_AM_SESSEXPIREDSC", "Maximalno trajanje session-a odredi u minutama (Važi je samo ako je 'koristi obični session' uključen)");
define("_MD_AM_BANNERS", "Aktiviraj Banere?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Tvoja IP adresa");
define("_MD_AM_MYIPDSC", "Ovaj IP will neće nikada biti Banovan");
define("_MD_AM_ALWDHTML", "HTML tagove dozvoli u svim postovima na stranici.");
define("_MD_AM_INVLDMINPASS", "Neispravna dodata vrijednost za dužinu lozinke.");
define("_MD_AM_INVLDUCOOK", "Neispravna vrijednost za naziv cookiesa za članove.");
define("_MD_AM_INVLDSCOOK", "Neispravna vrijednost za naziv session cookiese.");
define("_MD_AM_INVLDSEXP", "Neispravna vrijednost za vrijeme isticanja session-a.");
define("_MD_AM_ADMNOTSET", "Admin mail nije postavljen.");
define("_MD_AM_YES", "Da");
define("_MD_AM_NO", "Ne");
define("_MD_AM_DONTCHNG", "Ne mijenjaj!");
define("_MD_AM_REMEMBER", "Ne zaboravi chmod 666 ovog podatka u direktoriju postaviti da sistem u njega može podatke potrebne upisivati.");
define("_MD_AM_IFUCANT", "Ako ovu obavijest direktno nemožeš urediti onda probaj ručno sa ftp programom.");

define("_MD_AM_COMMODE", "Standardni prikaz komentara");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Standardni redoslijed prikazivanja komentara");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "Dozvoli HTML tagove da se koriste u pisanju komentara?");
define("_MD_AM_DEBUGMODE", "Debug modus");
define("_MD_AM_DEBUGMODEDSC", "Nekoliko debug opcija. Preporučujemo kod svakog korištenja debug opcije da stranicu javno isključiš.");
define("_MD_AM_AVATARALLOW", "Dozvoljavaš li da registrovani članovi sebi avatar uploaduju sa svoga računara?");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Odredi koliko postova član mora upisati na stranici da bi mogao sebi avatar uploadati");
define("_MD_AM_AVATARMPDSC", "Odredi minimalno koliko postova treba član da na stranici upiše da bi sebi onda mogao avatar uploadti");
define("_MD_AM_AVATARW", "Avatar slike max širina (u pixelima)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Avatar slike max visina (u pixelima)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Avatar slike max veličina podatka (u bytima)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Podešavanje standardno za avatar");
define("_MD_AM_CHNGUTHEME", "Svim članovima odredi themu izgleda stranice");
define("_MD_AM_NOTIFYTO", "Odredi grupu koja treba biti obaviještena ako se registruje novi član na stranici");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Dozvoli članovima da sebi sami izaberu themu za izgled stranice?");
define("_MD_AM_ALLOWIMAGE", "Dozvoli članovima da koriste slike u svojim postovima?");

define("_MD_AM_USERACTV", "Registraciju mora aktivirati svaki sebi registrovani član(preporuka)");
define("_MD_AM_AUTOACTV", "Registracija se aktivira automatski");
define("_MD_AM_ADMINACTV", "Registraciju aktivira administrator");
define("_MD_AM_ACTVTYPE", "Izaberi tip registracije za nove članove");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Izaberi grupu kojoj će aktivacijski link biti poslat");
define("_MD_AM_ACTVGROUPDSC", "Ova opcija važi samo ako je opcija 'Registraciju aktivira administrator' izabrana");
define("_MD_AM_USESSL", "Koristi SSL za prijavljivanje članova na stranici?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "SSL Post naziv varijable");
define("_MD_AM_SSLPOSTDSC", "Naziv varijable se koristi za transfer sessiona vrijednosti preko komande POST. Ako nisi siguran, postavi neki naziv kojeg je teško pogoditi.");
define("_MD_AM_DEBUGMODE0", "Isključeno");
define("_MD_AM_DEBUGMODE1", "Uključi debug (na dnu stranice izvještaji)");
define("_MD_AM_DEBUGMODE2", "Uključi debug (u popup prozoru izvještaji)");
define("_MD_AM_DEBUGMODE3", "Smarty Template Debug");
define("_MD_AM_MINUNAME", "Odredi minimalnu dužinu Nik imena");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Odredi max dužinu Nik imenae");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Generalno Podešavanje");
define("_MD_AM_USERSETTINGS", "Podešavanje info članova");
define("_MD_AM_ALLWCHGMAIL", "Dozvoljavaš li da članovi mjenjaju svoju email adresu?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP Banovanje");
define("_MD_AM_BADEMAILS", "Upiši email-e koje članovi nesmiju koristiti u svojim profilima");
define("_MD_AM_BADEMAILSDSC", "Svaki email rastavi sa <strong>|</strong> oznakom, velika i mala slova su dozvoljena.");
define("_MD_AM_BADUNAMES", "Upiši imena koje nesmiju registrovani članovi koristiti");
define("_MD_AM_BADUNAMESDSC", "Svako ime rastavi sa <strong>|</strong> oznakom, velika i mala slova su dozvoljena.");
define("_MD_AM_DOBADIPS", "Uključi IP banovanje?");
define("_MD_AM_DOBADIPSDSC", "članovi sa specifičnim IP adresama neće imati pristup ovoj web stranici");
define("_MD_AM_BADIPS", "Upiši IP adrese kojima zabranjuješ pristup ovoj web stranici.<br />Svaku IP adresu rastavi sa <strong>|</strong> oznakom, brojevi i slova su dozvoljeni.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc biće zabranjeno posjetiocima sa ovom IP adresom pristup kojima počinje IP sa aaa.bbb.ccc<br />aaa.bbb.ccc$ biće zabranjen pristup posjetiocima sa IP kojima se IP završava sa aaa.bbb.ccc<br />aaa.bbb.ccc biće zabranjen pristup posjetiocima sa IP koji imaju sadržaj IP-a aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Glavno Podešavanje");
define("_MD_AM_METAKEY", "Meta riječi");
define("_MD_AM_METAKEYDSC", "Riječi meta tagova je serija riječi koje prezentuju sadržaj ove web stranice na internetu koje koriste pretražne mašine. Upisane riječi rastavi sa zarezom i jenim praznim razmakom kao npr.. (Ex. XOOPS, PHP, mySQL, portal system)");
define("_MD_AM_METARATING", "Meta vrijednost");
define("_MD_AM_METARATINGDSC", "Vrijednost meta tagova definiše ovu veb stranicu te vremensku strost stranice i njenog sadržaja");
define("_MD_AM_METAOGEN", "Generalno");
define("_MD_AM_METAO14YRS", "Od 14 godina");
define("_MD_AM_METAOREST", "Ograničeno");
define("_MD_AM_METAOMAT", "Punoljetni");
define("_MD_AM_METAROBOTS", "Meta Robot");
define("_MD_AM_METAROBOTSDSC", "Robot Tagovi deklarišu pretragu webstranice i njen sadržaj na index stranici");
define("_MD_AM_INDEXFOLLOW", "Index, Pratiti");
define("_MD_AM_NOINDEXFOLLOW", "Bez Index-a, Pratiti");
define("_MD_AM_INDEXNOFOLLOW", "Index, Ne pratiti");
define("_MD_AM_NOINDEXNOFOLLOW", "Bez Index-a, Ne pratiti");
define("_MD_AM_METAAUTHOR", "Meta Autor");
define("_MD_AM_METAAUTHORDSC", "Autor meta tagova definiše ime autora dokumenta kojeg pretražna mašina čita. Podržavaju se formati kao što je ime, email adresa webmastera, vlasnika ili kompanije web stranice ili URL web stranice.");
define("_MD_AM_METACOPYR", "Meta Copyright");
define("_MD_AM_METACOPYRDSC", "Copyright meta tagovi definišu samo copyright odgovornosti koje ova web stranica javno objavljuje.");
define("_MD_AM_METADESC", "Meta Opis");
define("_MD_AM_METADESCDSC", "Opisn meta tagova je generalni opis koji cilj ima sadržaj na tvojoj web stranici i treba da se odnosi na naziv Domaine");
define("_MD_AM_METAFOOTER", "Meta Tagovi i Dno stranice");
define("_MD_AM_FOOTER", "Dno stranice");
define("_MD_AM_FOOTERDSC", "Obrati pažnju da link obavezno počinje sa http://, inače link neće ispravno raditi na stranici.");
define("_MD_AM_CENSOR", "Opcija cenzurisanja riječi");
define("_MD_AM_DOCENSOR", "Uključi cenzurisanje nepoželjnih riječi na web stranici?");
define("_MD_AM_DOCENSORDSC", "Nepoželjne riječi biće cenzurisane ako je ova opcija uključena. Ova opcija može usporiti rad učitavanja stranice.");
define("_MD_AM_CENSORWRD", "Riječi koje se cenzurišu");
define("_MD_AM_CENSORWRDDSC", "Upiši riječi koje su nepoželjne u postovima članova i koje će se cenzurisati u drugu riječ.<br />Svaku riječ rastavi sa ovom <strong>|</strong> oznakom, velika i mala slova su dozvoljena.");
define("_MD_AM_CENSORRPLC", "Nepoželjne riječi biće zamijenjene sa:");
define("_MD_AM_CENSORRPLCDSC", "Censurisane riječi biće zamijenjene u ovom polju napisanom riječju ili nekim oznakama koje upišeš");

define("_MD_AM_SEARCH", "Opcija Pretrage");
define("_MD_AM_DOSEARCH", "Treba li uključiti globalnu pretragu?");
define("_MD_AM_DOSEARCHDSC", "Dozvoli pretragu po sadržaju i postovima ovdje na stranici.");
define("_MD_AM_MINSEARCH", "Minimalna tražene dužina riječi");
define("_MD_AM_MINSEARCHDSC", "Upiši minimalnu dužinu riječi koju članovi u pretražnom polju trebaju upisati da bi se traženo pronašlo na stranici");
define("_MD_AM_MODCONFIG", "Opcija Konfigurisanja Modula");
define("_MD_AM_DSPDSCLMR", "Prikaži Pravilnik web stranice?");
define("_MD_AM_DSPDSCLMRDSC", "Izaberi Da i Pravilnik će biti prikazan prilikom svake registracije novoga člana");
define("_MD_AM_REGDSCLMR", "Registration disclaimer");
define("_MD_AM_REGDSCLMRDSC", "Ovdje upiši tekst Pravilnika koji će biti prikazan prilikom registracije u Pravilniku");
define("_MD_AM_ALLOWREG", "Dozvoljavaš li registraciju novih članova?");
define("_MD_AM_ALLOWREGDSC", "Izaberi Da i onda se mogu novi članovi registrovati");
define("_MD_AM_THEMEFILE", "Provjeri template dali ima nove izmjene ?");
define("_MD_AM_THEMEFILEDSC", "Ako je ova opcija uključena, izmjene na templatu se automatski kompilira i izmjene su odmah vidne. Preporuka je da se ova opcija isključi zbog učestalih greški, ako nisi siguran da znaš dobro upravljati prepravljanjem templata(html, css), onda je bolje ovu opciju isključiti.");
define("_MD_AM_CLOSESITE", "Isključi sada ovu web stranicu?");
define("_MD_AM_CLOSESITEDSC", "Ako izabereš Da onda će webstranica biti isključena(offline) i pristup stranici će imati samo Grupe kojima je odobreno od strane webmastera. ");
define("_MD_AM_CLOSESITEOK", "Izaberi Grupe kojima dozvoljavaš normalnbi pristup web stranici iako je isključena.");
define("_MD_AM_CLOSESITEOKDSC", "član koji je webmaster ima uvijek pristup bez obzira kojim Grupama je dato odobrenje pristupa.");
define("_MD_AM_CLOSESITETXT", "Razlog isključivanja web stranice");
define("_MD_AM_CLOSESITETXTDSC", "Upiši tekst razloga isključivanja web stranice.");
define("_MD_AM_SITECACHE", "Povećaj Cache Modula");
define("_MD_AM_SITECACHEDSC", "Memorija (Cache) cijelog sadržaja na stranici povećava brže učitavanje. Postavljanjem veće memorije (cache) se povećava brže učitavanje modula i njihovog sadržaja.");
define("_MD_AM_MODCACHE", "Module-wide Cache");
define("_MD_AM_MODCACHEDSC", "Cache sadržaja modula na određeno vrijeme povećaj i time ćeš dobiti brže učitavanje modula. Povećavanjem memorije ubrzava se učitavanje modula.");
define("_MD_AM_NOMODULE", "Nema modula kojima je povećana memorija(cache).");
define("_MD_AM_DTPLSET", "Izaberi standardi template");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "URL ako je SSL prijavna stranica zaključana");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "Mail Setup");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "Od(mail adresa)");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "Od(Nik ime)");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Od(člana)");
define("_MD_AM_MAILFROMUIDDESC", "Kada sistem šalje privatnu poruku, kojeg člana treba navesti kao da je pošaljilac?");
define("_MD_AM_MAILERMETHOD", "Mail-metoda slanja");
define("_MD_AM_MAILERMETHODDESC", "Metoda koja se koristi za slanje mail-a. Standard je \"mail\", koristi drugi način samo ako imaš problema sa slanjem.");
define("_MD_AM_SMTPHOST", "SMTP host(ovi)");
define("_MD_AM_SMTPHOSTDESC", "Lista za SMTP server sa kojim se treba povezati.");
define("_MD_AM_SMTPUSER", "SMTPAuth Nik imee");
define("_MD_AM_SMTPUSERDESC", "Nik ime za povezivanje sa SMTP hostom sa SMTPAuth.");
define("_MD_AM_SMTPPASS", "SMTPAuth lozinka");
define("_MD_AM_SMTPPASSDESC", "Lozinka za povezivanjem sa SMTP hostom sa SMTPAuth.");
define("_MD_AM_SENDMAILPATH", "Veza za sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Veza za sendmail programom (ili substitute) na webserveru.");
define("_MD_AM_THEMEOK", "Theme za izbor");
define("_MD_AM_THEMEOKDSC", "Izaberi temu koja je standard za sve članove");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","Ovo je adresa za soap server.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provizija");
define("_MD_AM_SOAP_PROVISIONDESC","Ako želiš od novog člana proviziju, izaberi 'Da'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rang za Proviziju");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","Ovo je rang za novog člana koji se uključuje sa soap servera.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","Ako ti je potrebna a wdsl soap usluga uključi ovu opciju.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Nik ime");
define("_MD_AM_SOAP_USERNAMEDESC","Ovo je tvije Nik ime na soap serveru.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP Lozinka");
define("_MD_AM_SOAP_PASSWORDDESC","Ako ti je potrebna lozinka za soap uslugu upiši je ovdje.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Klijent");
define("_MD_AM_SOAP_KEEPCLIENTDESC","adrži Soap klijenta.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Specijalni Profil");
define("_MD_AM_SOAP_FILTERPERSONDESC","Specijani profili koji koriste Xoops Autentičnost.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy Hostname");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Serveri Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP Serveri Proxy Server Port Number <br>ie: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy Nik ime");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP Serveri Proxy Server Nik ime");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy Lozinka");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP Serveri Proxy Server Lozinka.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Zadrži Soap Query Alive za <strong>xx</strong> sekundi.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP odgovor Timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Zadrži Soap Query Alive za <strong>xx</strong> sekundi.");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops-Auth server polja mapiranja");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Opiši ovdje mapiranje između Xoops baze podatakae polja i LDAP Autentičnosti sistemskih polja." .
		"<br><br>Format [Xoops Baze podataka polje]=[Auth sistem SOAP atributa]" .
		"<br>za primjere : email=mail" .
		"<br>Rastavi sa ovom | oznakom" .
		"<br><br>!! Za napredne članove !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS Baza podataka");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Standardni LDAP Direktorij");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Aktivni Direktorij &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops Soap Authentičnost");
define("_MD_AM_AUTHENTICATION", "Authentične opcije Options");
define("_MD_AM_AUTHMETHOD", "Authentične Metode");
define("_MD_AM_AUTHMETHODDESC", "Sa metodom authentičnosti koristi za ulogovanje članova.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Mail-Naziv polja");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "Naziv E-Mail atributa u tvom LDAP stablu direktorija.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - zajednički naziv-Polja naziv");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "Zajednički naziv atributa u tvom LDAP direktoriju.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Prezime-Polja naziv");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "Naziv prezimena atributa u tvom LDAP direktoriju.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Pravo ime-Polja naziv");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "pravo ime atributa u tvom LDAP direktoriju.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Baze DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "Bazee DN (Distinguished Naziv) za LDAP direktorij stabloe.");
define("_MD_AM_LDAP_PORT", "LDAP - Port Broj");
define("_MD_AM_LDAP_PORT_DESC", "Port broj potreban je za pristup LDAP direktoriju na serveru.");
define("_MD_AM_LDAP_SERVER", "LDAP - Server Naziv");
define("_MD_AM_LDAP_SERVER_DESC", "Naziv od tvog LDAP direktorija na serveru.");

define("_MD_AM_LDAP_MANAGER_DN", "DN od LDAP menadzera");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN od člana se traži da dozvoli(npr.menadzeru))");
define("_MD_AM_LDAP_MANAGER_PASS", "Lozinka za LDAP menadzera");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "The password of the user allow to make search");
define("_MD_AM_LDAP_VERSION", "LDAP Verzije protokol");
define("_MD_AM_LDAP_VERSION_DESC", "LDAP Verzije protokol : 2 ili 3");
define("_MD_AM_LDAP_USERS_BYPASS", "član može zaobići LDAP autentičnost");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Users to be authenticated with native XOOPS method");

define("_MD_AM_LDAP_USETLS", " Use TLS connection");
define("_MD_AM_LDAP_USETLS_DESC", "Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
                                  " and the LDAP version must be set to 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "LDAP Attribute use to search the user");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON", "The search filter LDAP query to find user");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
        "<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
        "<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "The domain name");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows domain name. for ADS and NT Server only");

define("_MD_AM_LDAP_PROVIS", "Automatic xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_DESC", "Create xoops user database if not exists");

define("_MD_AM_LDAP_PROVIS_GROUP", "Default affect group");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "The new user is assign to these groups");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
        "<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
        "<br />for example : email=mail" .
        "<br />Separate each with a |" .
        "<br /><br />!! For advanced users !!");

define("_MD_AM_LDAP_PROVIS_UPD", "Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "The Xoops User account is always synchronized with the Authentication Server");


define("_MD_AM_CPANEL", "Kontrolnil Panel GUI");
define("_MD_AM_CPANELDSC", "Za pozadinu");

define("_MD_AM_WELCOMETYPE", "Pošalji poruku dobrodošlice za nove članove");
define("_MD_AM_WELCOMETYPE_DESC", "Poruka dobrodošlice se šalje novim registrovanim članovima.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Privatna poruka");
define("_MD_AM_WELCOMETYPE_BOTH", "Email i poruka");

define("_MD_AM_MODULEPREF", "Podešavanje Modula");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS","Podešavanje sistemskog modula");
?>
