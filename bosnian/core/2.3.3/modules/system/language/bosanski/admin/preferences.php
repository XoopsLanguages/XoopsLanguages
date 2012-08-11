<?php
// $Id: preferences.php 1970 2008-08-24 02:16:51Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","Web stranice-Pode&scaron;avanje");
define("_MD_AM_SITENAME","Naziv web stranice");
define("_MD_AM_SLOGAN","Slogan web stranice");
define("_MD_AM_ADMINML","E-Mail-Adresa Administratora");
define("_MD_AM_LANGUAGE","Izaberi govor");
define("_MD_AM_STARTPAGE","Modul na start stranici");
define("_MD_AM_NONE","Nema");
define("_MD_AM_SERVERTZ","Serverska-Vremenska zona");
define("_MD_AM_DEFAULTTZ","Standardna-Vremenska zona");
define("_MD_AM_DTHEME","Standardna-Thema");
define("_MD_AM_THEMESET","Theme");
define("_MD_AM_ANONNAME","Naziv za Gosta");
define("_MD_AM_MINPASS","Min. du&#382;ina Lozinke");
define("_MD_AM_NEWUNOTIFY","E-Mail-Obavijest ako se novi &#269;lan registruje?");
define("_MD_AM_SELFDELETE","Smije li &#269;lan svoj Profil izbrisati?");
define("_MD_AM_LOADINGIMG","Stranica se u&#269;itava...-Sliku prika&#382;i?");
define("_MD_AM_USEGZIP","gzip-Kompresiju koristi?");
define("_MD_AM_UNAMELVL","Koje oznake smiju &#269;lanovi koristiti?");
define("_MD_AM_STRICT","Ta&#269;an redoslijed (Samo brojevi i slova)");
define("_MD_AM_MEDIUM","Medium");
define("_MD_AM_LIGHT","Sve jedno (Sve oznake su dozvoljene)");
define("_MD_AM_USERCOOKIE","Naziv za cookiese od &#269;lanova..");
define("_MD_AM_USERCOOKIEDSC","Ako &#269;lan izabere opciju, 'Podsjeti me' onda kada ponovo navrati na stranicu mora se ulogovati. Ako &#269;lan izabere opciju 'Zapamti me', onda on je ulogovan godinu dana. Cookiesi istje&#269;u za godinu dana.");
define("_MD_AM_USEMYSESS","Koristi za &#269;lanove Session");
define("_MD_AM_USEMYSESSDSC","Izaberi Da da bi za &#269;lanove Session koristio.");
define("_MD_AM_SESSNAME","Session-Naziv");
define("_MD_AM_SESSNAMEDSC","Naziv Sessiona (samo va&#382;e&#263;i, ako 'Koristi Session' je uklju&#263;en)");
define("_MD_AM_SESSEXPIRE","Max. online u Minutama");
define("_MD_AM_SESSEXPIREDSC","Ovi Cookie omogu&#263;avaju &#269;lanu automatski se u okviru odre&#273;enog vremena da bude ulogovan (va&#382;i samo 'Koristi Session' ako je aktiviran. Funkcionira samo sa PHP4.2.0 i ve&#263;om verzijom)");
define("_MD_AM_BANNERS","Baner-Prikazivanje aktiviraj?");
define("_MD_AM_MYIP","Tvoja IP-Adresa");
define("_MD_AM_MYIPDSC","Ove IP-Adrese ne&#263;e biti za prikaz Banera ograni&#269;ene");
define("_MD_AM_ALWDHTML","HTML-Tagove u svim postovima dozvoli.");
define("_MD_AM_INVLDMINPASS","Min. du&#382;ina Lozinke.");
define("_MD_AM_INVLDUCOOK","Nedozvoljena vrijednost za usercookie-naziv.");
define("_MD_AM_INVLDSCOOK","Nedozvoljena vrijednost za sessioncookie-naziv.");
define("_MD_AM_INVLDSEXP","Nedozvoljena vrijednost za session-pro&scaron;lo vrijeme.");
define("_MD_AM_ADMNOTSET","E-Mail-Adresa od Administratora nije postavljena.");
define("_MD_AM_YES","Da");
define("_MD_AM_NO","Ne");
define("_MD_AM_DONTCHNG","Ne mijenjaj!");
define("_MD_AM_REMEMBER","Promjeni chmod ovog podatka na 666 da sa time System upise mo&#382;e preuzeti.");
define("_MD_AM_IFUCANT","Ukoliko system ne preuzme automatski pode&scaron;avanje, onda mora&scaron; promjenuti ru&#269;no.");


define("_MD_AM_COMMODE","Standarni modus za Komentare");
define("_MD_AM_COMORDER","Standardni redoslijed za Komentare");
define("_MD_AM_ALLOWHTML","HTML-Tagove u Komentarima dozvoli?");
define("_MD_AM_DEBUGMODE","Debug-Modus");
define("_MD_AM_DEBUGMODEDSC","Razne Debug-Opcije. Ako funkcionira web stranice onda debug isklju&#269;i.");
define("_MD_AM_AVATARALLOW","Smiju li &#269;lanovi sebi Avatar uploadati?");
define("_MD_AM_AVATARMP","Najmanje postova je potrebno");
define("_MD_AM_AVATARMPDSC","Odredi koliko postova &#269;lan mora upisati da bi mogao sebi Avatar svoj uploadati");
define("_MD_AM_AVATARW","Avatar max. &Scaron;irina (u Pixelima)");
define("_MD_AM_AVATARH","Avatar max. Visina (u Pixelima)");
define("_MD_AM_AVATARMAX","Avatar max. Velie&#269;ina (u Byteima)");
define("_MD_AM_AVATARCONF","Pode&scaron;avanje za Avatare &#269;lanova");
define("_MD_AM_CHNGUTHEME","Thema za sve &#269;lanove kao standard");
define("_MD_AM_NOTIFYTO","Izaberi grupe koje trebaju da dobiju email obavijest ako ima novih registrovanih &#269;lanova");
define("_MD_AM_ALLOWTHEME","Smiju li &#269;lanovi Theme sebi izabrati?");
define("_MD_AM_ALLOWIMAGE","Smiju li &#269;lanovi u postovima slike koristiti?");

define("_MD_AM_USERACTV","Aktiviranje registracije preko &#269;lanova (E-Mail)");
define("_MD_AM_AUTOACTV","Automatsko aktiviranje");
define("_MD_AM_ADMINACTV","Aktiviranje preko Administratora");
define("_MD_AM_ACTVTYPE","Izaberi Metodu aktivacije za nove registrovane &#269;lanove");
define("_MD_AM_ACTVGROUP","Grupu izaberi koja treba da dobije aktivacijski email, ako se novi &#269;lan registruje");
define("_MD_AM_ACTVGROUPDSC","Standardno je da se 'Aktivacija od Administratora' izabere");
define("_MD_AM_USESSL","SSL-Modus za Login?");
define("_MD_AM_SSLPOST","SSL Post variable naziv");
define("_MD_AM_SSLPOSTDSC","Upotrijebljeni naziv Variable za Session-Transfer via POST. Ako nisi siguran, ostavi kako i jeste.");
define("_MD_AM_DEBUGMODE0","Isklju&#269;en");
define("_MD_AM_DEBUGMODE1","Uklju&#269;i debug (unutar stranice)");
define("_MD_AM_DEBUGMODE2","Uklju&#269;i debug (popup prozor)");
define("_MD_AM_DEBUGMODE3","Smarty Template Debug");
define("_MD_AM_MINUNAME","Min. du&#382;ina Nik imena");
define("_MD_AM_MAXUNAME","Max. du&#382;ina Nik imena");
define("_MD_AM_GENERAL","Generalno pode&scaron;avanje");
define("_MD_AM_USERSETTINGS","Pode&scaron;avanje infa &#269;lanova");
define("_MD_AM_ALLWCHGMAIL","Smiju li &#269;lanovi svoju E-Mail-Adresu mjenjati?");
define("_MD_AM_ALLWCHGMAILDSC","");
define("_MD_AM_IPBAN","IP-Adrese Banovanje");
define("_MD_AM_BADEMAILS","E-Mail-Adrese koje nisu dozvoljene da &#269;lanovi koriste");
define("_MD_AM_BADEMAILSDSC","Upisane emaile rastavi sa ovakvom <strong>|</strong> oznakom, velika i mala slova, regex enabled.");
define("_MD_AM_BADUNAMES","Nedozvoljena Nik imena");
define("_MD_AM_BADUNAMESDSC","Upisana Nik imena rastavi sa ovom <strong>|</strong> oznakom, velika i mala slova, regex enabled.");
define("_MD_AM_DOBADIPS","IP-Banovanje aktiviraj?");
define("_MD_AM_DOBADIPSDSC","&#268;lanovi sa ovde upisanom IP-Adresom nemogu ovu web stranicu posjetiti");
define("_MD_AM_BADIPS","Upi&scaron;i IP-Adrese koje nesmiju ovu web stranicu posjetiti.<br />Upise sa ovim znakom <strong>|</strong> oznakom, velika i mala slova, regex enabled.");
define("_MD_AM_BADIPSDSC","^aaa.bbb.ccc zabranjen je pristup web stranici sa ovim IP koja po&#269;inje sa aaa.bbb.ccc<br />aaa.bbb.ccc$ zabranjuje se pristup posjetiocima sa ovim IP koja po&#269;inje sa aaa.bbb.ccc<br />aaa.bbb.ccc zabranjen je pristup web stranici sa ovim IP koja po&#269;inje sa aaa.bbb.ccc");
define("_MD_AM_PREFMAIN","Glavno pode&scaron;avanje");
define("_MD_AM_METAKEY","Meta klju&#269;ne rije&#269;i");
define("_MD_AM_METAKEYDSC","Meta klju&#269;ne rije&#269;i slu&#382;e da pretra&#382;ne Ma&scaron;ine sadr&#382;aje po kratkim rije&#269;ima prona&#273;e. Vi&scaron;e Keywordsa sa zarezom Komma i dodatnim praznim razmakom rastavi. Npr.: XOOPS, PHP, mySQL, portal system");
define("_MD_AM_METARATING","Meta ocjena");
define("_MD_AM_METARATINGDSC","Ovde se pode&scaron;ava koji uzrast smije na web stranici sadr&#382;aj ocjenjivati");
define("_MD_AM_METAOGEN","Svi");
define("_MD_AM_METAO14YRS","od 14 godina");
define("_MD_AM_METAOREST","Ograni&#269;eno");
define("_MD_AM_METAOMAT","Samo odrasli");
define("_MD_AM_METAROBOTS","Meta Roboti");
define("_MD_AM_METAROBOTSDSC","Robota Tagovi obja&scaron;njavaju pretra&#382;nim Ma&scaron;inama koji sadr&#382;aj treba da indicira");
define("_MD_AM_INDEXFOLLOW","Index, Pratiti");
define("_MD_AM_NOINDEXFOLLOW","Bez Index-a, Pratiti");
define("_MD_AM_INDEXNOFOLLOW","Index, Bez Pridr&#382;avanja");
define("_MD_AM_NOINDEXNOFOLLOW","Bez Index, Bez Pridr&#382;avanja");
define("_MD_AM_METAAUTHOR","Meta Autor");
define("_MD_AM_METAAUTHORDSC","Ovde se mogu podataci Autora sadr&#382;aja na stranici dati. Podr&#382;ani formati podataka uklju&#269;uju ime, e-mail adresu webmaster, naziv Firme ili URL.");
define("_MD_AM_METACOPYR","Meta Copyright");
define("_MD_AM_METACOPYRDSC","Copyright meta tag definira autorsko pravo bilo kakve izjave dokumenata koji se objave na web stranici.");
define("_MD_AM_METADESC","Meta Opis");
define("_MD_AM_METADESCDSC","Upisani Meta Tagovi daju informacije o sadr&#382;aju web stranice");
define("_MD_AM_METAFOOTER","Meta Tagovi i podno&#382;je web stranice");
define("_MD_AM_FOOTER","Podno&#382;je");
define("_MD_AM_FOOTERDSC","Uvijek punu vezu upi&scaron;i: http://, sa ovim upisom prikaz je korektan prikaz u svakom modulu.");
define("_MD_AM_CENSOR","Opcija za nepo&#382;eljne rije&#269;i");
define("_MD_AM_DOCENSOR","Cenzurisanje nepo&#382;eljne rije&#269;i dozvoli?");
define("_MD_AM_DOCENSORDSC","Rije&#269;i &#263;e biti cenzirane. Aktiviranje ove funkcije mo&#382;e brzinu web stranice usporiti.");
define("_MD_AM_CENSORWRD","Cenzurisane rije&#269;i");
define("_MD_AM_CENSORWRDDSC","Rije&#269;i koje treba cenzirati u upisanim postovima.<br />Svaku rije&#269; rastavi sa ovom <strong>|</strong> oznakom, velika i mala slova .");
define("_MD_AM_CENSORRPLC","Cenzurisane rije&#269;i bi&#263;e zamijenjene sa:");
define("_MD_AM_CENSORRPLCDSC","Cenzurisane rije&#269;i u postovima bi&#263;e sa zamijenjene sa rije&#269;ima iz ovog text boksa");

define("_MD_AM_SEARCH","Opcije pretrage");
define("_MD_AM_DOSEARCH","Web stranice pretragu aktiviraj?");
define("_MD_AM_DOSEARCHDSC","Dozvoli pretragu po Postovima/Upisima na web stranici.");
define("_MD_AM_MINSEARCH","Min. du&#382;ina rije&#269;i");
define("_MD_AM_MINSEARCHDSC","Min. du&#382;ina tra&#382;ene rije&#269;i da bi pogodak pretrage bio potpun");
define("_MD_AM_MODCONFIG","Pode&scaron;avanje Modula");
define("_MD_AM_DSPDSCLMR","Pravilnik prika&#382;i?");
define("_MD_AM_DSPDSCLMRDSC","Sa izborom DA se Pravilnik se prikazuje na Registracijskoj stranici");
define("_MD_AM_REGDSCLMR","Registracija-Pravilnik");
define("_MD_AM_REGDSCLMRDSC","Upi&scaron;i tekst, kojeg treba u Registraciji prikazati");
define("_MD_AM_ALLOWREG","Smiju li se novi &#269;lanovi registrovati?");
define("_MD_AM_ALLOWREGDSC","Da izaberi i dozvoli registraciju novim &#269;lanovima");
define("_MD_AM_THEMEFILE","Theme- i Template promjene odmah aktuliziraj?");
define("_MD_AM_THEMEFILEDSC","Ako je ova opcija uklju&#269;ena, onda se Theme i Template kod svake promjene istih automatski aktualiziraju. Ovu opciju isklju&#269;i ako je stranica javno dostupna.");
define("_MD_AM_CLOSESITE","Web stranicu isklju&#269;i?");
define("_MD_AM_CLOSESITEDSC","Izaberi Da, i web stranicu isklju&#269;i i dozvoli izabranoj Grupi ulaz. ");
define("_MD_AM_CLOSESITEOK","Izaberi Grupu, koja smije u&#263;i na web stranicu dok je isklju&#269;ena.");
define("_MD_AM_CLOSESITEOKDSC","Webmaster-Grupa, imaju uvijek ulaz u stranicu.");
define("_MD_AM_CLOSESITETXT","Razlog isklju&#269;enja web stranice");
define("_MD_AM_CLOSESITETXTDSC","Ovaj tekst &#263;e biti prikazan, ako web stranicu isklju&#269;i&scaron;.");
define("_MD_AM_SITECACHE","Stranice-Cache");
define("_MD_AM_SITECACHEDSC","Skuplja se sadr&#382;aj u memoriju i time se ubrzava rad webstranice. Ako je Cache izabran, onda ima prednost od standardnog memorisanja sadr&#382;aja. Pode&scaron;avanjem stranice-cache se nadma&scaron;uje module-level cache, block-level cache, i module item level cache ako ga ima.");
define("_MD_AM_MODCACHE","Module-Cache");
define("_MD_AM_MODCACHEDSC","Caches od modululskog sadr&#382;aja ubrzava rad modula na serveru. Pode&scaron;avanjem module-cache se nadma&scaron;uje module item level cache ako ga ima.");
define("_MD_AM_NOMODULE","Nema Modula za Cache.");
define("_MD_AM_DTPLSET","Standardni-Template-Set");
define("_MD_AM_SSLLINK","URL od SSL-Login-Stranice");

// added for mailer
define("_MD_AM_MAILER","E-Mail-Setup");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Od-EMail Adresa");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","Od-Ime");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Od-&#268;lana");
define("_MD_AM_MAILFROMUIDDESC","Koje se Nik ime treba u mailu prikazati, ako system automatski obavijest &scaron;alje?");
define("_MD_AM_MAILERMETHOD","EMail-Metoda slanja");
define("_MD_AM_MAILERMETHODDESC","Metoda koja se koristi za slanje EMail-a. Standard je \"mail\", Koristi druge metode ako bude bilo nekih problema sa slanjem email-a.");
define("_MD_AM_SMTPHOST","SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC","Lista od SMTP-Servera sa kojim se treba povezati.");
define("_MD_AM_SMTPUSER","SMTPAuth-Nik ime");
define("_MD_AM_SMTPUSERDESC","Nik ime za SMTP-Host sa kojim se SMTPAuth treba povezati.");
define("_MD_AM_SMTPPASS","SMTPAuth-Lozinka");
define("_MD_AM_SMTPPASSDESC","Lozinka za SMTP host sa kojim se SMTPAuth treba povezati.");
define("_MD_AM_SENDMAILPATH","Veza za slanje email-a");
define("_MD_AM_SENDMAILPATHDESC","Veza za slanje email-Programa (ili zamjena) na Web serveru.");
define("_MD_AM_THEMEOK","Dostupne Theme");
define("_MD_AM_THEMEOKDSC","Izaberi Temu koja je &#268;lanovima Standard-Tema");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","Baza podataka");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP Direktorij");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","Authentication Options");
define("_MD_AM_AUTHMETHOD","Authentication Method");
define("_MD_AM_AUTHMETHODDESC","Which authentication method would you like to use for signing on users.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail Field Name");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","The name of the E-Mail attribute in your LDAP directory tree.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name Field Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","The name of the Common Name attribute in your LDAP directory.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname Field Name");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","The name of the Surname attribute in your LDAP directory.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name Field Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","The name of the Given Name attribute in your LDAP directory.");
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
        "<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
        "<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","The domain name");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows domain name. for ADS and NT Server only");

define("_MD_AM_LDAP_PROVIS","Automatic xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_DESC","Create xoops user database if not exists");

define("_MD_AM_LDAP_PROVIS_GROUP","Default affect group");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","The new user is assign to these groups");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
        "<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
        "<br />for example : email=mail" .
        "<br />Separate each with a |" .
        "<br /><br />!! For advanced users !!");

define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","The Xoops User account is always synchronized with the Authentication Server");


define("_MD_AM_CPANEL","Kontrolni Panel GUI");
define("_MD_AM_CPANELDSC","Dostupne Teme administracije");

define("_MD_AM_WELCOMETYPE","Slanje poruke dobrodo&scaron;lice");
define("_MD_AM_WELCOMETYPE_DESC","Na&#269;in slanja poruke dobrodo&scaron;lice za uspje&scaron;nu  registraciju &#269;lanova.");
define("_MD_AM_WELCOMETYPE_EMAIL","Email");
define("_MD_AM_WELCOMETYPE_PM","Poruka");
define("_MD_AM_WELCOMETYPE_BOTH","Email i poruka");

define("_MD_AM_MODULEPREF","Pode&scaron;avanje Modula");

?>