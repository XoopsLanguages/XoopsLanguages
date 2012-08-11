<?php
// $Id: preferences.php,v 1.7 2003/03/21 13:12:26 w4z004 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define('_AM_DBUPDATED',_MD_AM_DBUPDATED);

define('_MD_AM_SITEPREF','Web stranice-Pode&scaron;avanje');
define('_MD_AM_SITENAME','Naziv web stranice');
define('_MD_AM_SLOGAN','Slogan web stranice');
define('_MD_AM_ADMINML','E-Mail-Adresa Administratora');
define('_MD_AM_LANGUAGE','Izaberi govor');
define('_MD_AM_STARTPAGE','Modul na start stranici');
define('_MD_AM_NONE','Nema');
define('_MD_AM_SERVERTZ','Serverska-Vremenska zona');
define('_MD_AM_DEFAULTTZ','Standardna-Vremenska zona');
define('_MD_AM_DTHEME','Standardna-Thema');
define('_MD_AM_THEMESET','Theme');
define('_MD_AM_ANONNAME','Naziv za Gosta');
define('_MD_AM_MINPASS','Min. du&#382;ina Lozinke');
define('_MD_AM_NEWUNOTIFY','E-Mail-Obavijest ako se novi &#269;lan registruje?');
define('_MD_AM_SELFDELETE','Smije li &#269;lan svoj Profil izbrisati?');
define('_MD_AM_LOADINGIMG','Stranica se u&#269;itava...-Sliku prika&#382;i?');
define('_MD_AM_USEGZIP','gzip-Kompresiju koristi?');
define('_MD_AM_UNAMELVL','Koje oznake smiju &#382;lanovi koristiti?');
define('_MD_AM_STRICT','Ta&#382;an redoslijed (Samo brojevi i slova)');
define('_MD_AM_MEDIUM','Medium');
define('_MD_AM_LIGHT','Sve jedno (Sve oznake su dozvoljene)');
define('_MD_AM_USERCOOKIE','Naziv za &#382;lanova-Cookiese.');
define('_MD_AM_USERCOOKIEDSC','Postavi Cookie za 1 godinu i &#382;lan &#263;e biti uvijek ulogovan.');
define('_MD_AM_USEMYSESS','Koristi za &#263;lanove Session');
define('_MD_AM_USEMYSESSDSC','Izaberi Da da bi za &#263;lanove Session koristio.');
define('_MD_AM_SESSNAME','Session-Naziv');
define('_MD_AM_SESSNAMEDSC','Naziv Sessiona (samo va&#382;e&#263;i, ako "Userbezogene Session" je isklju&#263;en)');
define('_MD_AM_SESSEXPIRE','Max. online u Minutama');
define('_MD_AM_SESSEXPIREDSC','Ovi Cookie omogu&#263;avaju &#269;lanu automatski se u okviru odre&#273;enog vremena da bude ulogovan (va&#382;i samo userbezogene Sessions ako je aktiviran. Funkcionira samo sa PHP4.2.0 i ve&#263;om verzijom).');
define('_MD_AM_BANNERS','Baner-Prikazivanje aktiviraj?');
define('_MD_AM_MYIP','Tvoja IP-Adresa');
define('_MD_AM_MYIPDSC','Ove IP-Adrese ne&#263;e biti za prikaz Banera ograni&#263;ene');
define('_MD_AM_ALWDHTML','HTML-Tagove u svim postovima dozvoli.');
define('_MD_AM_INVLDMINPASS','Min. du&#382;ina Lozinke.');
define('_MD_AM_INVLDUCOOK','Nedozvoljena vrijednost za usercookie-naziv.');
define('_MD_AM_INVLDSCOOK','Nedozvoljena vrijednost za sessioncookie-naziv.');
define('_MD_AM_INVLDSEXP','Nedozvoljena vrijednost za session-pro&scaron;lo vrijeme.');
define('_MD_AM_ADMNOTSET','E-Mail-Adresa od Administratora nije postavljena.');
define('_MD_AM_YES','Da');
define('_MD_AM_NO','Ne');
define('_MD_AM_DONTCHNG','Ne mijenjaj!');
define('_MD_AM_REMEMBER','Promjeni chmod ovog podatka na 666 da sa time System upise mo&#382;e preuzeti.');
define('_MD_AM_IFUCANT','Ukoliko system ne preuzme automatski pode&scaron;avanje, onda mora&scaron; promjenuti ru&#269;no.');


define('_MD_AM_COMMODE','Standarni modus za Komentare');
define('_MD_AM_COMORDER','Standardni redoslijed za Komentare');
define('_MD_AM_ALLOWHTML','HTML-Tagove u Komentarima dozvoli?');
define('_MD_AM_DEBUGMODE','Debug-Modus');
define('_MD_AM_DEBUGMODEDSC','Razne Debug-Opcije. Kod funkcioniranja web stranice isklju&#269;i.');
define('_MD_AM_AVATARALLOW','Smiju li &#269;lanovi sebi Avatar uploadati?');
define('_MD_AM_AVATARMP','Najmanje postova je potrebno');
define('_MD_AM_AVATARMPDSC','Odredi koliko postova &#269;lan upisati da bi mogao sebi Avatar svoj uploadati');
define('_MD_AM_AVATARW','Avatar max. &Scaron;irina (u Pixelima)');
define('_MD_AM_AVATARH','Avatar max. Visina (u Pixelima)');
define('_MD_AM_AVATARMAX','Avatar max. Velie&#269;ina (u Byteima)');
define('_MD_AM_AVATARCONF','Pode&scaron;avanje za Avatare &#269;lanova');
define('_MD_AM_CHNGUTHEME','Theme svih &#269;lanova promjeni');
define('_MD_AM_NOTIFYTO','Grupe izaberi koji trebaju da dobiju obavijest ako imaju odgovor u postu');
define('_MD_AM_ALLOWTHEME','Smije li &#269;lanovi Theme sebi izabrati?');
define('_MD_AM_ALLOWIMAGE','Smije li &#269;lanovi u postovima slike koristiti?');

define('_MD_AM_USERACTV','Aktiviranje preko &#269;lanov (E-Mail)');
define('_MD_AM_AUTOACTV','Automatsko aktiviranje');
define('_MD_AM_ADMINACTV','Aktiviranje preko Administratora');
define('_MD_AM_ACTVTYPE','Izbor Metode registracije kad se registruje novi &#269;lan');
define('_MD_AM_ACTVGROUP','Grupu izaberi koja treba da dobije obavijest, ako se novi &#269;lan registruje');
define('_MD_AM_ACTVGROUPDSC','Standardno je da se Administrator obavijesti');
define('_MD_AM_USESSL','SSL-Modus za Login?');
define('_MD_AM_SSLPOST','SSL Post variable naziv ');
define('_MD_AM_SSLPOSTDSC','Upotrijebljeni naziv Variable za Session-Transfer via POST. Ako nisi siguran, ostavi kako i jeste.');
define('_MD_AM_DEBUGMODE0','Isklju&#269;en');
define('_MD_AM_DEBUGMODE1','unutar Web stranice prika&#382;i');
define('_MD_AM_DEBUGMODE2','kao Pop-Up prika&#382;i');
define('_MD_AM_DEBUGMODE3','Smarty Template-Debug');
define('_MD_AM_MINUNAME','Min. du&#382;ina Nik imena');
define('_MD_AM_MAXUNAME','Max. du&#382;ina Nik imena');
define('_MD_AM_GENERAL','Generalno pode&scaron;avanje');
define('_MD_AM_USERSETTINGS','Pode&scaron;avanje infa &#269;lanova');
define('_MD_AM_ALLWCHGMAIL','Smijeli &#269;lan svoju E-Mail-Adresu mjenjati?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP-Adresu banuj');
define('_MD_AM_BADEMAILS','E-Mail-Adrese koje nisu dozvoljene');
define('_MD_AM_BADEMAILSDSC','Upisane IP adrese rastavi sa ovakvom <b>|</b>, oznakom.');
define('_MD_AM_BADUNAMES','Nedozvoljena Nik imena');
define('_MD_AM_BADUNAMESDSC','Upisana Nik imena rastavi sa ovom <b>|</b>, oznakom.');
define('_MD_AM_DOBADIPS','IP-Banovanje aktiviraj?');
define('_MD_AM_DOBADIPSDSC','&#268;lanovi sa ovom IP-Adresom nesmiju ovu web stranicu posjetiti');
define('_MD_AM_BADIPS','Upisane IP-Adrese koje nesmiju ovu web stranicu posjetiti.<br />Upise sa ovim znakom <b>|</b>, rastavi.');
define('_MD_AM_BADIPSDSC','&#269;lanu sa ovom IP-Adresom zabranjen pristup i sa aaa.bbb.ccc koja zapo&#269;inje<br />aaa.bbb.ccc$ bi&#263;e &#269;lanu sa ovom IP-Adresom zabranjen pristup kojem Ip adresa se aaa.bbb.ccc zavr&scaron;ava<br />aaa.bbb.ccc bi&#263;e &#269;lanu sa ovom IP-Adresom zabranjen pristup kojem se Ip aaa.bbb.ccc zavr&scaron;ava');
define('_MD_AM_PREFMAIN','Pode&scaron;avanje Menija');
define('_MD_AM_METAKEY','Meta Keywords');
define('_MD_AM_METAKEYDSC','Meta Keywords slu&#382;e da pretra&#382;ne Ma&scaron;ine sadr&#382;aje po kratkim rije&#269;ima prona&#273;e. Vi&scaron;e Keywordsa sa zarezom Komma i dodatnim praznim razmakom rastavi. Npr.: XOOPS, PHP, mySQL, portal system');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Ovde se pode&scaron;ava koji uzrast smije web stranicu posje&#263;ivati.');
define('_MD_AM_METAOGEN','Svi');
define('_MD_AM_METAO14YRS','Od 14 godina');
define('_MD_AM_METAOREST','Ograni&#269;eno');
define('_MD_AM_METAOMAT','Samo odrasli');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Die Robots Tags "obja&scaron;njava" pretra&#382;nim Ma&scaron;inama koji sadr&#382;aj treba da indicira.');
define('_MD_AM_INDEXFOLLOW','Indiciraj, Linkove prati');
define('_MD_AM_NOINDEXFOLLOW','Ne indiciraj, Linkove prati');
define('_MD_AM_INDEXNOFOLLOW','Indiciraj, Linkove ne prati');
define('_MD_AM_NOINDEXNOFOLLOW','Ne indiciraj, Linkove ne prati');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','Ovde se mo&#382;e podatak Autora stranice dati.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Copyright i Metatagovi ocrtavaju web stranicu sa pravom.');
define('_MD_AM_METADESC','Meta Opis');
define('_MD_AM_METADESCDSC','Upisani Meta Tagovi daju informacije o sadr&#382;aju web stranice');
define('_MD_AM_METAFOOTER','Meta Tagovi i podno&#382;je web stranice');
define('_MD_AM_FOOTER','Podno&#382;je');
define('_MD_AM_FOOTERDSC','Uvijek punu vezu upi&scaron;i: http://, sa ovim upisom prikaz je korektan');
define('_MD_AM_CENSOR','Opcija za nepo&#382;eljne rije&#269;i');
define('_MD_AM_DOCENSOR','Cenzurisanje nepo&#382;eljne rije&#269;i dozvoli?');
define('_MD_AM_DOCENSORDSC','Rije&#269;i &#263;e biti cenzirane. Aktiviranje ove funkcije mo&#382;e brzinu web stranice usporiti');
define('_MD_AM_CENSORWRD','Cenzirane rije&#269;i');
define('_MD_AM_CENSORWRDDSC','Rije&#269;i koje treba cenzirati.<br />rastavi sa ovom <b>|</b>, oznakom.');
define('_MD_AM_CENSORRPLC','Cenzirane rije&#269;i bi&#263;e zamijenjene sa:');
define('_MD_AM_CENSORRPLCDSC','Cenzirane rije&#269;i u upisima bi&#263;e sa iz Textboxa oznakama zamijenjene');

define('_MD_AM_SEARCH','Opcije pretrage');
define('_MD_AM_DOSEARCH','Web stranice pretragu aktiviraj?');
define('_MD_AM_DOSEARCHDSC','Pretraga po Postovima/Kratkim rije&#269;ima u web stranici dozvoli.');
define('_MD_AM_MINSEARCH','Min. du&#382;ina klju&#269;ne rije&#269;i');
define('_MD_AM_MINSEARCHDSC','Min. du&#382;ina tra&#382;ene rije&#269;i da bi pogodak bio potpun');
define('_MD_AM_MODCONFIG','Pode&scaron;avanje Modula');
define('_MD_AM_DSPDSCLMR','Pravilnik prika&#382;i?');
define('_MD_AM_DSPDSCLMRDSC','Da izaberi da bi Pravilnik prikazali na Registracijskoj stranici');
define('_MD_AM_REGDSCLMR','Registracija-Pravilnik');
define('_MD_AM_REGDSCLMRDSC','Upi&scaron;i tekst, koje treba u Registraciji prikazati.');
define('_MD_AM_ALLOWREG','Smiju li se novi &#269;lanovi registrovati?');
define('_MD_AM_ALLOWREGDSC','Da izaberi i dozvoli registraciju novim &#269;lanovima');
define('_MD_AM_THEMEFILE','Theme- i Template promjene odmah aktuliziraj?');
define('_MD_AM_THEMEFILEDSC','Ako je ova opcija uklju&#269;ena, onda se Theme i Template kod promjena se automatski aktualizira. Dies sollten Sie abschalten sobald die Seite öffentlich gemacht wird.');
define('_MD_AM_CLOSESITE','Web stranicu isklju&#269;i?');
define('_MD_AM_CLOSESITEDSC','Izaberi Da, i tvoju web stranicu isklju&#269;i i dozvoli izabranoj Grupi ulaz. ');
define('_MD_AM_CLOSESITEOK','Izaberi Grupu, koja smije u&#263;i na web stranicu dok je isklju&#269;ena.');
define('_MD_AM_CLOSESITEOKDSC','Webmaster-Grupa, imaju uvijek ulaz u stranicu.');
define('_MD_AM_CLOSESITETXT','Razlog isklju&#269;enja web stranice.');
define('_MD_AM_CLOSESITETXTDSC','Ovaj tekst &#263;e biti prikazan, ako web stranicu isklju&#269;i&scaron;.');
define('_MD_AM_SITECACHE','Web stranice Cache');
define('_MD_AM_SITECACHEDSC','Skuplja se sadr&#382;aj u memoriju i time se ubrzava rad webstranice. Ako je Cache izabran, onda ima prednost od standardnog memorisanja sadr&#382;aja.');
define('_MD_AM_MODCACHE','Moduli za Cache');
define('_MD_AM_MODCACHEDSC','Skuplja se sadr&#382;aj Modula na odre&#273;eno vrijeme u memoriju i time se ubrzava rad stranice.');
define('_MD_AM_NOMODULE','Nema Modula za Cache.');
define('_MD_AM_DTPLSET','Standardni-Template-Set');
define('_MD_AM_SSLLINK','URL od SSL-Login-Stranice');

// added for mailer
define('_MD_AM_MAILER','E-Mail-Setup');
define('_MD_AM_MAILER_MAIL','');
define('_MD_AM_MAILER_SENDMAIL','');
define('_MD_AM_MAILER_','');
define('_MD_AM_MAILFROM','Od-E-Mail-Adresa');
define('_MD_AM_MAILFROMDESC','');
define('_MD_AM_MAILFROMNAME','Od-Ime');
define('_MD_AM_MAILFROMNAMEDESC','');
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID','Od-&#268;lana');
define('_MD_AM_MAILFROMUIDDESC','Kone se ime treba u mailu prikazati, ako system automatski obavijest &scaron;alje?');
define('_MD_AM_MAILERMETHOD','E-Mail-Metoda slanja');
define('_MD_AM_MAILERMETHODDESC','Metoda koja se koristi za slanje E-Mail-a. Standard je \'mail\'. Koristi druge metode ako bude bilo nekih problema sa slanjem email-a.');
define('_MD_AM_SMTPHOST','SMTP-Host');
define('_MD_AM_SMTPHOSTDESC','Lista od SMTP-Servera sa kojim se treba povezati email po&scaron;ta.');
define('_MD_AM_SMTPUSER','SMTPAuth-Nik ime');
define('_MD_AM_SMTPUSERDESC','Nik ime za SMTP-Host sa kojim se SMTPAuth treba povezati.');
define('_MD_AM_SMTPPASS','SMTPAuth-Lozinka');
define('_MD_AM_SMTPPASSDESC','Lozinka za SMTP host sa kojim se SMTPAuth treba povezati.');
define('_MD_AM_SENDMAILPATH','Veza za slanje email-a');
define('_MD_AM_SENDMAILPATHDESC','Veza za slanje email-a-Program (ili zamjena) na Web serveru.');
define('_MD_AM_THEMEOK','Dostupne Teme');
define('_MD_AM_THEMEOKDSC','Izaberi Temu koja je &#268;lanovima Standard-Tema');

define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS Baza podataka");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP Direktorij");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","Authentifizierungsoptionen");
define("_MD_AM_AUTHMETHOD","Authentifizierungsmethode");
define("_MD_AM_AUTHMETHODDESC","Welche Authentifizierungsmethode soll eingesetzt werden beim Einloggen der User?");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail-Feldname");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Der Name des E-Mail-Feldes in Ihrem LDAP-Verzeichnisbaum.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Feldname allgemeiner Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Der Name des allgemeinen Namenfeldes in Ihrem LDAP-Verzeichnis.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Vorname-Feldname");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Der Name des Vornamen-Feldes in Ihrem LDAP-Verzeichnis.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Feldname vergebener Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Der Name des Feldes des vergebenen Namens in Ihrem LDAP-Verzeichnis.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","The base DN (Distinguished Name) of your LDAP directory tree.");
define("_MD_AM_LDAP_PORT","LDAP - Port Number");
define("_MD_AM_LDAP_PORT_DESC","The port number needed to access your LDAP directory server.");
define("_MD_AM_LDAP_SERVER","LDAP - Server Name");
define("_MD_AM_LDAP_SERVER_DESC","The name of your LDAP directory server.");

define("_MD_AM_LDAP_MANAGER_DN","DN of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC","The DN of the user allow to make search (eg manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Password of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","The password of the user allow to make search");
define("_MD_AM_LDAP_VERSION","LDAP Version protocol");
define("_MD_AM_LDAP_VERSION_DESC","The LDAP Version protocol : 2 or 3");

define("_MD_AM_LDAP_USERS_BYPASS","Users allowed to bypass LDAP authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Users to be authenticated with native XOOPS method");
define("_MD_AM_LDAP_USETLS"," Use TLS connection");
define("_MD_AM_LDAP_USETLS_DESC","Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
								  " and the LDAP version must be set to 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Attribute use to search the user");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON","The search filter LDAP query to find user");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
		"<br/>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br/>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","The domain name");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows domain name. for ADS and NT Server only");

define("_MD_AM_LDAP_PROVIS","Automatic xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_DESC","Create xoops user database if not exists");

define("_MD_AM_LDAP_PROVIS_GROUP","Default affect group");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","The new user is assign to these groups");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br/><br/>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br/>for example : email=mail" .
		"<br/>Separate each with a |" .
		"<br/><br/>!! For advanced users !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","The Xoops User account is always synchronized with the Authentication Server");

define("_MD_AM_CPANEL","Kontrolni Panel GUI");
define("_MD_AM_CPANELDSC","Dostupne Teme administracije");

define("_MD_AM_WELCOMETYPE","Slanje poruke dobrodo&scaron;lice");
define("_MD_AM_WELCOMETYPE_DESC","Na&#269;in slanja poruke dobrodo&scaron;lice za uspje&scaron;nu  registraciju &#269;lanova.");
define("_MD_AM_WELCOMETYPE_EMAIL","Email");
define("_MD_AM_WELCOMETYPE_PM","Poruka");
define("_MD_AM_WELCOMETYPE_BOTH","Email i poruka");
		
?>
