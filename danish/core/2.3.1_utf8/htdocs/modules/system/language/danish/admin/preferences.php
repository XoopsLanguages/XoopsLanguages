<?php
// $Id: preferences.php 1507 2008-04-26 12:08:47Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define('_MD_AM_SITEPREF','Website Indstillinger');
define('_MD_AM_SITENAME','Sidens navn');
define('_MD_AM_SLOGAN','Sidens slogan');
define('_MD_AM_ADMINML','Administrators email adresse');
define('_MD_AM_LANGUAGE','Standard sprog <br>(Default language)');
define('_MD_AM_STARTPAGE','Modulet på din startside');
define('_MD_AM_NONE','Ingen');
define('_MD_AM_SERVERTZ','Serverens tidszone');
define('_MD_AM_DEFAULTTZ','Standard tidszone');
define('_MD_AM_DTHEME','Standard tema');
define('_MD_AM_THEMESET','Tema Sæt');
define('_MD_AM_ANONNAME','Brugernavn for anonyme brugere');
define('_MD_AM_MINPASS','Adgangskodens påkrævede minimumslængde');
define('_MD_AM_NEWUNOTIFY','Orientér via email når en ny bruger er registreret?');
define('_MD_AM_SELFDELETE','Tillad brugere at slette deres egen konto?');
define('_MD_AM_LOADINGIMG','Vis loading... billed?');
define('_MD_AM_USEGZIP','Brug gzip komprimering?');
define('_MD_AM_UNAMELVL','Vælg niveauet for hvor nøjeregnende filtreringen af brugernavne skal være');
define('_MD_AM_STRICT','Strikt (kun bogstaver og numre)');
define('_MD_AM_MEDIUM','Normalt');
define('_MD_AM_LIGHT','Afslappet (anbefales for multi-byte chars)');
define('_MD_AM_USERCOOKIE','Navnet på bruger cookies.');
define('_MD_AM_USERCOOKIEDSC','Denne cookie indeholder kun en brugers navn og bliver gemt på brugerens computer i ét år (hvis brugeren ønsker det). Hvis brugeren har denne cookie installeret vil hans brugernavn automatisk blive skrevet i log ind-feltet.');
define('_MD_AM_USEMYSESS','Brug særlig session');
define('_MD_AM_USEMYSESSDSC','Vælg ja for at indstille værdier for særlig session.');
define('_MD_AM_SESSNAME','Sessionens cookie navn');
define('_MD_AM_SESSNAMEDSC','Sessionens navn (kun gyldig når \'brug særlig session\' er valgt)');
define('_MD_AM_SESSEXPIRE','Sessionens udløbstid');
define('_MD_AM_SESSEXPIREDSC','Den maksimale varighed (i minutter) man kan lave ingenting i før man automatisk bliver logget af. Kun gyldig når \'brug særlig session\' er valgt. Fungerer kun når der bruges PHP 4.2.0 eller nyere.');
define('_MD_AM_BANNERS','Aktivér bannere?');
define('_MD_AM_MYIP','Din IP adresse');
define('_MD_AM_MYIPDSC','Denne IP vil ikke blive registreret som indtryk i forbindelse med bannere');
define('_MD_AM_ALWDHTML','HTML tags er tilladt i alle indlæg.');
define('_MD_AM_INVLDMINPASS','Ugyldig værdi for minimumslængden af adgangskoder.');
define('_MD_AM_INVLDUCOOK','Ugyldig værdi for bruger cookie navn.');
define('_MD_AM_INVLDSCOOK','Ugyldig værdi for sessionens cookie navn.');
define('_MD_AM_INVLDSEXP','Ugyldig værdi for sessionens udløbstid.');
define('_MD_AM_ADMNOTSET','Administratorens email adresse er ikke blevet indtastet.');
define('_MD_AM_YES','Ja');
define('_MD_AM_NO','Nej');
define('_MD_AM_DONTCHNG','Må ikke ændres!');
define('_MD_AM_REMEMBER','Husk at denne fil skal \'chmod 666\' for at sikre, at systemet kan tilgå filen korrekt.');
define('_MD_AM_IFUCANT','Hvis du ikke kan ændre rettighederne kan du editére resten af denne fil i hånden.');


define('_MD_AM_COMMODE','Standard visningsmetode for kommentarer');
define('_MD_AM_COMORDER','Standard visningsrækkefølge for kommentarer');
define('_MD_AM_ALLOWHTML','Tillad HTML tags i bruger kommentarer?');
define('_MD_AM_DEBUGMODE','Debug mode');
define('_MD_AM_DEBUGMODEDSC','Adskillige debug muligheder.');
define('_MD_AM_AVATARALLOW','Tillad brugere at uploade egne brugerikoner?');
define('_MD_AM_AVATARMP','Minimum antal indlæg påkrævet');
define('_MD_AM_AVATARMPDSC','Indtast det minimale antal indlæg, der er påkrævet før en bruger kan uploade eget brugerikon');
define('_MD_AM_AVATARW','Brugerikonets maksimale bredde (pixel)');
define('_MD_AM_AVATARH','Brugerikonets maksimale højde (pixel)');
define('_MD_AM_AVATARMAX','Brugerikonets maksimale filstørrelse (byte)');
define('_MD_AM_AVATARCONF','Indstillinger for brugerikoner');
define('_MD_AM_CHNGUTHEME','Ændre alle brugeres tema');
define('_MD_AM_NOTIFYTO','Vælg den gruppe, der vil få tilsendt beskeder om nye brugere');
define('_MD_AM_ALLOWTHEME','Tillad brugere at vælge tema?');
define('_MD_AM_ALLOWIMAGE','Tillad brugere at vise billeder i indlæg?');

define('_MD_AM_USERACTV','Kræver aktivering af brugeren (anbefalet)');
define('_MD_AM_AUTOACTV','Aktivér automatisk');
define('_MD_AM_ADMINACTV','Aktivéring foretages af administratorer');
define('_MD_AM_ACTVTYPE','Vælg aktiveringsmetode for ny-registrerede brugere');
define('_MD_AM_ACTVGROUP','Vælg til hvilken gruppe aktiveringsbreve vil blive sendt');
define('_MD_AM_ACTVGROUPDSC','Kun gyldig hvis \'Aktivéring foretages af administratorer\' er valgt');
define('_MD_AM_USESSL','Brug SSL for log ind?');
define('_MD_AM_SSLPOST','SSL Post variabel navn');
define('_MD_AM_SSLPOSTDSC','Navnet på den variabel, der bruges til at overføre sessionsværdier via POST. HVis du er usikker på, hvad den skal navngives, så brug et hvilket som helst navn, det er svært at gætte.');
define('_MD_AM_DEBUGMODE0','Slået fra');
define('_MD_AM_DEBUGMODE1','PHP Debug');
define('_MD_AM_DEBUGMODE2','MySQL/Blok Debug');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_MINUNAME','Påkrævet minimumslængde for brugernavn');
define('_MD_AM_MAXUNAME','Påkrævet maksimumslængde for brugernavn');
define('_MD_AM_GENERAL','Generelle indstillinger');
define('_MD_AM_USERSETTINGS','Brugeropsætning');
define('_MD_AM_ALLWCHGMAIL','Tillad brugere at ændre deres email adresse?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP afvisning');
define('_MD_AM_BADEMAILS','Tilføj emails, der ikke må bruges i en brugerprofil');
define('_MD_AM_BADEMAILSDSC','Adskil hver enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex enabled.');
define('_MD_AM_BADUNAMES','Tilføj navne, der ikke må bruges som brugernavne');
define('_MD_AM_BADUNAMESDSC','Adskil hver enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex enabled.');
define('_MD_AM_DOBADIPS','Aktivér IP afvisning?');
define('_MD_AM_DOBADIPSDSC','Brugere med specificérede IP adresser vil ikke få adgang til din side');
define('_MD_AM_BADIPS','Tilføj IP adresser, der skal afvises fra siden. Adskil hver enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex enabled.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc vil afvise besøgende med en IP adresse, der starter med aaa.bbb.ccc<br /><br />aaa.bbb.ccc$ vil afvise besøgende med en IP adresse, der ender med aaa.bbb.ccc<br /><br />aaa.bbb.ccc. vil afvise besøgende med en IP adresse, der indeholder aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Indstillinger hovedside');
define('_MD_AM_METAKEY','Meta nøgleord');
define('_MD_AM_METAKEYDSC','Meta nøgleord er en række nøgleord, der repræsenterer/beskriver indholdet på din side. Indtast nøgleordene adskilt af et komma eller et mellemrum. (f.eks. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Meta rating angiver hvilken alder din side henvender sig til samt hvilken slags indhold der er på den.');
define('_MD_AM_METAOGEN','Generelt');
define('_MD_AM_METAO14YRS','14 år');
define('_MD_AM_METAOREST','Klassificeret');
define('_MD_AM_METAOMAT','Voksen');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Meta robots angiver over for søgemaskiner hvilket indhold der skal indekseres og gennemsøges');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','Meta author angiver navnet på forfatteren af det dokument, der bliver læst. Yderligere data formater includerer navnet og email adressen på webmasteren, firma navn eller URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Meta copyright definerer de copyright noter du ønsker at oplyse om vedrørende din hjemmesides dokumenter.');
define('_MD_AM_METADESC','Meta Description');
define('_MD_AM_METADESCDSC','Meta description er en generel beskrivelse af indholdet på din hjemmeside');
define('_MD_AM_METAFOOTER','Meta Tags og bundlinie');
define('_MD_AM_FOOTER','Bundlinie');
define('_MD_AM_FOOTERDSC','Vær sikker på, at du får skrevet evt. links med fuld path startende fra http');
define('_MD_AM_CENSOR','Censur indstillinger');
define('_MD_AM_DOCENSOR','Slå censurering af uønskede ord til?');
define('_MD_AM_DOCENSORDSC','Ord vil blive censureret hvis denne funktion er slået til. Denne funktion kan slås fra for at øge hastigheden på siden.');
define('_MD_AM_CENSORWRD','Ord, der skal censureres');
define('_MD_AM_CENSORWRDDSC','Indtast ord, der skal bortcensureres fra brugernes indlæg.<br />Adskil hver enkelt med en <b><font color="red">|</font></b>, case insensitiv.');
define('_MD_AM_CENSORRPLC','Ord på censurlisten vil blive erstattet af:');
define('_MD_AM_CENSORRPLCDSC','Bortcensurerede ord vil blive erstattet med tegnene i denne tekstboks');

define('_MD_AM_SEARCH','Søgeindstillinger');
define('_MD_AM_DOSEARCH','Tillad globale søgninger?');
define('_MD_AM_DOSEARCHDSC','Tillad søgning efter indlæg/emner på din side.');
define('_MD_AM_MINSEARCH','Minimumslængden for søgenøglen');
define('_MD_AM_MINSEARCHDSC','Indtast minimumslængden for den søgenøgle som brugere skal indtaste for at kunne søge');
define('_MD_AM_MODCONFIG','Modul Instillingsmuligheder');
define('_MD_AM_DSPDSCLMR','Vis forbehold?');
define('_MD_AM_DSPDSCLMRDSC','Vælg ja for at vise forbeholdene på registreringssiden');
define('_MD_AM_REGDSCLMR','Forbehold');
define('_MD_AM_REGDSCLMRDSC','Indtast den tekst, der skal fremstå som forbehold. Teksten præsenteres for nye brugere og skal accepteres inden de kan blive registrerede brugere.');
define('_MD_AM_ALLOWREG','Tillad registrering af nye brugere?');
define('_MD_AM_ALLOWREGDSC','Vælg ja for at tillade registrering af nye brugere');
define('_MD_AM_THEMEFILE','Opdatér modul skabelon .html filerne fra themes/your theme/templates skuffen?');
define('_MD_AM_THEMEFILEDSC','Hvis denne mulighed er slået til, vil .html filer under modulet Skabeloner automatisk blive opdateret, såfremt der er nyere filer i skuffen themes/your theme/templates for det aktuelle tema. Denne mulighed bør være slået fra når siden er offentligt tilgængeligt.');
define('_MD_AM_CLOSESITE','Luk din side?');
define('_MD_AM_CLOSESITEDSC','Vælg ja for at lukke din side, således det kun er brugere i udvalgte grupper, der kan få adgang til siden. ');
define('_MD_AM_CLOSESITEOK','De udvalgte grupper, der har adgang til siden selvom den er lukket.');
define('_MD_AM_CLOSESITEOKDSC','Brugere i standard webmaster gruppen har altid adgang til siden.');
define('_MD_AM_CLOSESITETXT','Begrundelse for at siden er slået fra');
define('_MD_AM_CLOSESITETXTDSC','Denne tekst vises når siden er slået fra.');
define('_MD_AM_SITECACHE','Global cache');
define('_MD_AM_SITECACHEDSC','Placér indholdet af hele siden i en cache i et afgrænset tidsrum for at forbedre hjemmesidens ydelse. Global cache indstillinger vil tilsidesætte caches for moduler, caches for blokke og modul emne caches, hvis der er nogen.');
define('_MD_AM_MODCACHE','Modul cache');
define('_MD_AM_MODCACHEDSC','Placér indholdet af alle moduler i en cache i et afgrænset tidsrum for at forbedre hjemmesidens ydelse. Modul cache indstillinger vil tilsidesætte modul emne caches, hvis der er nogen.');
define('_MD_AM_NOMODULE','Der er ikke noget modul, der kan blive cached.');
define('_MD_AM_DTPLSET','Standard skabelon sæt');
define('_MD_AM_SSLLINK','URL hvor SSL log ind siden er placeret');

// added for mailer
define('_MD_AM_MAILER','Mail-indstillinger');
define('_MD_AM_MAILER_MAIL','');
define('_MD_AM_MAILER_SENDMAIL','');
define('_MD_AM_MAILER_','');
define('_MD_AM_MAILFROM','FRA adresse');
define('_MD_AM_MAILFROMDESC','');
define('_MD_AM_MAILFROMNAME','FRA navn');
define('_MD_AM_MAILFROMNAMEDESC','');
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID','FRA bruger');
define('_MD_AM_MAILFROMUIDDESC','Når systemet sender en privat besked, hvilken bruger skal da fremstå som afsenderen?');
define('_MD_AM_MAILERMETHOD','Postforsendelsesmetode');
define('_MD_AM_MAILERMETHODDESC','Metoden brugt til at sende post. Standard er "mail". Brug kun andre metoder såfremt denne giver problemer.');
define('_MD_AM_SMTPHOST','SMTP host(s)');
define('_MD_AM_SMTPHOSTDESC','Liste over SMTP servere systemet skal forsøge at forbinde til.');
define('_MD_AM_SMTPUSER','SMTPAuth brugernavn');
define('_MD_AM_SMTPUSERDESC','Brugernavnet, der skal bruges for at kunne forbinde til en SMTP host med SMTPAuth.');
define('_MD_AM_SMTPPASS','SMTPAuth adgangskode');
define('_MD_AM_SMTPPASSDESC','Adgangskoden, der skal bruges for at kunne forbinde til en SMTP host med SMTPAuth.');
define('_MD_AM_SENDMAILPATH','Sti til sendmail');
define('_MD_AM_SENDMAILPATHDESC','Sti til postforsendelsesprogrammet (eller erstatningen herfor) på webserveren.');
define('_MD_AM_THEMEOK','Valgbare temaer');
define('_MD_AM_THEMEOKDSC','Vælg de temaer brugerne kan vælge som standard tema');


// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS','XOOPS Database');
define('_MD_AM_AUTH_CONFOPTION_LDAP','Standard LDAP Directory');
define('_MD_AM_AUTH_CONFOPTION_AD','Microsoft Active Directory &copy');
define('_MD_AM_AUTHENTICATION','Godkendelses muligheder');
define('_MD_AM_AUTHMETHOD','Godkendelses metode');
define('_MD_AM_AUTHMETHODDESC','Hvilken godkendelsesmetode vil du benytter når brugerne skal logge på');
define('_MD_AM_LDAP_MAIL_ATTR','LDAP - Mail Field Name');
define('_MD_AM_LDAP_MAIL_ATTR_DESC','Navnet på E-Mail attributten i dit LDAP');
define('_MD_AM_LDAP_NAME_ATTR','LDAP - Common Name Field Name');
define('_MD_AM_LDAP_NAME_ATTR_DESC','Navnet på Common Name attributten i dit LDAP');
define('_MD_AM_LDAP_SURNAME_ATTR','LDAP - Surname Field Name');
define('_MD_AM_LDAP_SURNAME_ATTR_DESC','Navnet på Surname attributten i dit LDAP');
define('_MD_AM_LDAP_GIVENNAME_ATTR','LDAP - Given Name Field Name');
define('_MD_AM_LDAP_GIVENNAME_ATTR_DSC','Navnet på Given name attributten i dit LDAP');
define('_MD_AM_LDAP_BASE_DN','LDAP - Base DN');
define('_MD_AM_LDAP_BASE_DN_DESC','DN (Distinguished Name) på dit LDAP');
define('_MD_AM_LDAP_PORT','LDAP - Port Number');
define('_MD_AM_LDAP_PORT_DESC','Port nummer på dit LDAP');
define('_MD_AM_LDAP_SERVER','LDAP - Server Name');
define('_MD_AM_LDAP_SERVER_DESC','Server navn på dit LDAP');

define('_MD_AM_LDAP_MANAGER_DN','DN på LDAP administrator');
define('_MD_AM_LDAP_MANAGER_DN_DESC','The DN of the user allow to make search (eg manager)');
define('_MD_AM_LDAP_MANAGER_PASS','Password på LDAP administrator');
define('_MD_AM_LDAP_MANAGER_PASS_DESC','The password of the user allow to make search');
define('_MD_AM_LDAP_VERSION','LDAP Version protocol');
define('_MD_AM_LDAP_VERSION_DESC','The LDAP Version protocol : 2 or 3');
define('_MD_AM_LDAP_USERS_BYPASS','Users allowed to bypass LDAP authentication');
define('_MD_AM_LDAP_USERS_BYPASS_DESC','Users to be authenticated with native XOOPS method');

define('_MD_AM_LDAP_USETLS',' Use TLS connection');
define('_MD_AM_LDAP_USETLS_DESC','Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
								  " and the LDAP version must be set to 3.');

define('_MD_AM_LDAP_LOGINLDAP_ATTR','LDAP Attribute use to search the user');
define('_MD_AM_LDAP_LOGINLDAP_ATTR_D','When Login name use in the DN option is set to yes, must correspond to the login name XOOPS');
define('_MD_AM_LDAP_LOGINNAME_ASDN','Login name use in the DN');
define('_MD_AM_LDAP_LOGINNAME_ASDN_D','The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search');

define('_MD_AM_LDAP_FILTER_PERSON','The search filter LDAP query to find user');
define('_MD_AM_LDAP_FILTER_PERSON_DESC','Special LDAP Filter to find user. @@loginname@@ is replace by the users\'s login name<br> MUST BE BLANK IF YOU DON\'T KNOW WHAT YOU DO\' !" .

		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .

		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP');

define('_MD_AM_LDAP_DOMAIN_NAME','The domain name');
define('_MD_AM_LDAP_DOMAIN_NAME_DESC','Windows domain name. for ADS and NT Server only');

define('_MD_AM_LDAP_PROVIS','Automatic xoops account provisionning');
define('_MD_AM_LDAP_PROVIS_DESC','Create xoops user database if not exists');

define('_MD_AM_LDAP_PROVIS_GROUP','Default affect group');
define('_MD_AM_LDAP_PROVIS_GROUP_DSC','The new user is assign to these groups');

define('_MD_AM_LDAP_FIELD_MAPPING_ATTR','Xoops-Auth server fields mapping');
define('_MD_AM_LDAP_FIELD_MAPPING_DESC','Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!');
		
define('_MD_AM_LDAP_PROVIS_UPD','Maintain xoops account provisionning');
define('_MD_AM_LDAP_PROVIS_UPD_DESC','The Xoops User account is always synchronized with the Authentication Server');


define('_MD_AM_CPANEL','Kontrolpanel interface');
define('_MD_AM_CPANELDSC','For backend');

define('_MD_AM_WELCOMETYPE','Sender velkomst besked');
define('_MD_AM_WELCOMETYPE_DESC','Metoden til at sende en velkomstbesked når en bruger har registreret sig');
define('_MD_AM_WELCOMETYPE_EMAIL','E-mail');
define('_MD_AM_WELCOMETYPE_PM','Meddelelse');
define('_MD_AM_WELCOMETYPE_BOTH','E-mail og meddelelse');

?>