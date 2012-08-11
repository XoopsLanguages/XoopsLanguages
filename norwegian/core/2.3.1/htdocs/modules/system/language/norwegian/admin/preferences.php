<?php
// $Id: preferences.php 1507 2008-04-26 12:08:47Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define('_MD_AM_SITEPREF','Innstillinger for hjemmesiden');
define('_MD_AM_SITENAME','Sidens navn');
define('_MD_AM_SLOGAN','Sidens slogan');
define('_MD_AM_ADMINML','Administrators email adresse');
define('_MD_AM_LANGUAGE','Standard språk <br>(Default language)');
define('_MD_AM_STARTPAGE','Modulen på din startside');
define('_MD_AM_NONE','Ingen');
define('_MD_AM_SERVERTZ','Serverens tidssone');
define('_MD_AM_DEFAULTTZ','Standard tidssone');
define('_MD_AM_DTHEME','Standard tema');
define('_MD_AM_THEMESET','Temasett');
define('_MD_AM_ANONNAME','Brukernavn for anonyme brukere');
define('_MD_AM_MINPASS','Adgangskodens påkrevde minimumslengde');
define('_MD_AM_NEWUNOTIFY','Orienter via email når en ny bruker er registrert?');
define('_MD_AM_SELFDELETE','Tillat brukere å slette deres egen konto?');
define('_MD_AM_LOADINGIMG','Vis laster... bilde?');
define('_MD_AM_USEGZIP','Bruk gzip komprimering?');
define('_MD_AM_UNAMELVL','Velg nivået for hvor nøyeregnende filtreringen av brukernavn skal være');
define('_MD_AM_STRICT','Strikt (kun bokstaver og numre)');
define('_MD_AM_MEDIUM','Normalt');
define('_MD_AM_LIGHT','Avslappet (anbefales for multi-byte chars)');
define('_MD_AM_USERCOOKIE','Navnet på bruker cookies.');
define('_MD_AM_USERCOOKIEDSC','Denne cookie inneholder kun en brukers navn og blir gjemt på brukerens computer i et år (hvis brukeren ønsker det). Hvis brukeren har denne cookie innstallert vil hans/hennes brukernavn automatisk bli skrevet i logg inn-feltet.');
define('_MD_AM_USEMYSESS','Bruk egendefinert session');
define('_MD_AM_USEMYSESSDSC','Velg ja for at innstille verdier for egendefinert session.');
define('_MD_AM_SESSNAME','Sessionens cookie navn');
define('_MD_AM_SESSNAMEDSC','Sessionens navn (kun gyldig når \'bruk egendefinert session\' er valgt)');
define('_MD_AM_SESSEXPIRE','Sessionens utløpstid');
define('_MD_AM_SESSEXPIREDSC','Den maksimale varighet (i minutter) man kan være inaktiv før man automatisk blr logget av. Kun gyldig når \'bruk egendefinert session\' er valgt. Fungerer kun når det brukes PHP 4.2.0 eller nyere.');
define('_MD_AM_BANNERS','Aktiver bannere?');
define('_MD_AM_MYIP','Din IP adresse');
define('_MD_AM_MYIPDSC','Denne IP vil ikke bli registrert som klikk i forbindelse med bannere');
define('_MD_AM_ALWDHTML','HTML tags er tillatt i alle innlegg.');
define('_MD_AM_INVLDMINPASS','Ugyldig verdi for minimumslengden av adgangskoder.');
define('_MD_AM_INVLDUCOOK','Ugyldig verdi for bruker cookie navn.');
define('_MD_AM_INVLDSCOOK','Ugyldig verdi for sessionens cookie navn.');
define('_MD_AM_INVLDSEXP','Ugyldig verdi for sessionens utløpstid.');
define('_MD_AM_ADMNOTSET','Administratorens email adresse er ikke blitt inntastet.');
define('_MD_AM_YES','Ja');
define('_MD_AM_NO','Nei');
define('_MD_AM_DONTCHNG','Må ikke endres!');
define('_MD_AM_REMEMBER','Husk at denne fil skal \'chmod 666\' for å sikre, at systemet kan nå filen korrekt.');
define('_MD_AM_IFUCANT','Hvis du ikke kan endre rettighetene kan du redigere resten av denne fil for hånd.');


define('_MD_AM_COMMODE','Standard visningsmetode for kommentarer');
define('_MD_AM_COMORDER','Standard visningsrekkefølge for kommentarer');
define('_MD_AM_ALLOWHTML','Tillat HTML tags i bruker kommentarer?');
define('_MD_AM_DEBUGMODE','Debug mode');
define('_MD_AM_DEBUGMODEDSC','Dine debug muligheter.');
define('_MD_AM_AVATARALLOW','Tillat brukere å laste opp egne bruker-ikoner?');
define('_MD_AM_AVATARMP','Minimum antall indlegg påkrevd');
define('_MD_AM_AVATARMPDSC','Inntast det minimale antall innlegg, som er påkrevd før en bruker kan laste opp eget bruker-ikon');
define('_MD_AM_AVATARW','Bruker-ikonets maksimale bredde (pixel)');
define('_MD_AM_AVATARH','Bruker-ikonets maksimale høyde (pixel)');
define('_MD_AM_AVATARMAX','Bruker-ikonets maksimale filstørrelse (byte)');
define('_MD_AM_AVATARCONF','Innstillinger for bruker-ikoner');
define('_MD_AM_CHNGUTHEME','Endre alle brukeres tema');
define('_MD_AM_NOTIFYTO','Velg den gruppe, som vil få tilsendt beskjeder om nye brukere');
define('_MD_AM_ALLOWTHEME','Tillat brukere å vælge tema?');
define('_MD_AM_ALLOWIMAGE','Tillat brukere å vise bilder i innlegg?');

define('_MD_AM_USERACTV','Krever aktivering av brukeren (anbefalt)');
define('_MD_AM_AUTOACTV','Aktiver automatisk');
define('_MD_AM_ADMINACTV','Aktivering foretas av administratorer');
define('_MD_AM_ACTVTYPE','Velg aktiveringsmetode for ny-registrerede brukere');
define('_MD_AM_ACTVGROUP','Velg til hvilken gruppe aktiveringsbrever vil bli sendt');
define('_MD_AM_ACTVGROUPDSC','Kun gyldig hvis \'Aktivering foretas av administratorer\' er valgt');
define('_MD_AM_USESSL','Brug SSL for logg inn?');
define('_MD_AM_SSLPOST','SSL Post variabel navn');
define('_MD_AM_SSLPOSTDSC','Navnet på den variabel, som brukes til å overføre sessionsverdier via POST. HVis du er usikker på, hva den skal navngis, så bruk et hvilket som helst navn, det er vanskelig å gjette.');
define('_MD_AM_DEBUGMODE0','Deaktivert');
define('_MD_AM_DEBUGMODE1','Aktiver (inline-tilstand)');
define('_MD_AM_DEBUGMODE2','Aktiver (popup-tilstand)');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_MINUNAME','Påkrevd minimumslengde for brukernavn');
define('_MD_AM_MAXUNAME','Påkrevd maksimumslengde for brukernavn');
define('_MD_AM_GENERAL','Generelle innstillinger');
define('_MD_AM_USERSETTINGS','Brukerinstillinger');
define('_MD_AM_ALLWCHGMAIL','Tillat brukere å endre deres epost adresse?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP avvisning');
define('_MD_AM_BADEMAILS','Legg til epost adresser som ikke må brukes i en brukerprofil');
define('_MD_AM_BADEMAILSDSC','Adskill hver enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex enabled.');
define('_MD_AM_BADUNAMES','Legg til navn som ikke må brukes som brukernavn');
define('_MD_AM_BADUNAMESDSC','Adskill hver enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex enabled.');
define('_MD_AM_DOBADIPS','Aktiver IP avvisning?');
define('_MD_AM_DOBADIPSDSC','Brukere med specificerede IP adresser vil ikke få adgang til din side');
define('_MD_AM_BADIPS','Legg til IP adresser, som skal avvises fra siden. Adskill hver enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex enabled.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc vil avvise besøgende med en IP adresse, som starter med aaa.bbb.ccc<br /><br />aaa.bbb.ccc$ vil avvise besøkende med en IP adresse, som ender med aaa.bbb.ccc<br /><br />aaa.bbb.ccc. vil avvise besøkende med en IP adresse, som inneholder aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Innstillinger hovedside');
define('_MD_AM_METAKEY','Meta søkeord');
define('_MD_AM_METAKEYDSC','Meta søkeord er en rekke søkeord, som representerer/beskriver innholdet på din side. Inntast søkeord adskilt av et komma eller et mellomrom. (f.eks. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Meta rating angir hvilken aldersgruppe din side henvender seg til, samt hvilket slags innhold som er på den.');
define('_MD_AM_METAOGEN','Generelt');
define('_MD_AM_METAO14YRS','14 år');
define('_MD_AM_METAOREST','Klassifisert');
define('_MD_AM_METAOMAT','Voksen');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Meta robots angir over for søkemotorer hvilket innhold som skal indekseres og gjennemsøkes');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','Meta author angir navnet på forfatteren av det dokument, som blir lest. Ytterligere data formater inkluderer navnet og email adressen til administratoren, firma navn eller URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Meta copyright definerer de copyright noter du ønsker å opplyse om vedrørende din hjemmesides dokumenter.');
define('_MD_AM_METADESC','Meta Description');
define('_MD_AM_METADESCDSC','Meta description er en generell beskrivelse av innholdet på din hjemmeside');
define('_MD_AM_METAFOOTER','Meta Tags og bunnlinje');
define('_MD_AM_FOOTER','Bunnlinje');
define('_MD_AM_FOOTERDSC','Vær sikker på, at du får skrevet evt. lenker med full sti. Begynn med http://, ellers vil ikke lenkene fungerere korrekt i modulsider.');
define('_MD_AM_CENSOR','Ord-sensurering');
define('_MD_AM_DOCENSOR','Aktiver Ord-sensurering?');
define('_MD_AM_DOCENSORDSC','Ord vil bli sensurert hvis denne funktion er aktivert. Denne funktion kan deaktiveres for å øke hastigheten på siden.');
define('_MD_AM_CENSORWRD','Ord, som skal sensureres');
define('_MD_AM_CENSORWRDDSC','Inntast ord, som skal bortsensureres fra brukernes innlegg.<br />Adskill hver enkelt med en <b><font color="red">|</font></b>, case insensitiv.');
define('_MD_AM_CENSORRPLC','Ord i sensurlisten vil bli erstattet av:');
define('_MD_AM_CENSORRPLCDSC','Bortsensurerte ord vil bli erstattet med tegnene i denne tekstboks');

define('_MD_AM_SEARCH','Søkeinnstillinger');
define('_MD_AM_DOSEARCH','Tillat globale søk?');
define('_MD_AM_DOSEARCHDSC','Tillat søk etter innlegg/emner på din side.');
define('_MD_AM_MINSEARCH','Minimumslengden for søkenøkkelen');
define('_MD_AM_MINSEARCHDSC','Inntast minimumslengden for den søkenøkkel som brukere skal inntaste for å kunne søke');
define('_MD_AM_MODCONFIG','Modul Instillingsmuligheder');
define('_MD_AM_DSPDSCLMR','Vis forbehold?');
define('_MD_AM_DSPDSCLMRDSC','Velg ja for å vise forbeholdene på registreringssiden');
define('_MD_AM_REGDSCLMR','Forbehold');
define('_MD_AM_REGDSCLMRDSC','Inntast den tekst, som skal fremstå som forbehold. Teksten presenteres for nye brukere og skal aksepteres f?r de kan bli registrerte brukere.');
define('_MD_AM_ALLOWREG','Tillat registrering av nye brukere?');
define('_MD_AM_ALLOWREGDSC','Velg ja for å tillate registrering av nye brukere');
define('_MD_AM_THEMEFILE','Oppdater modulmal .html filene fra themes/your theme/templates mappen?');
define('_MD_AM_THEMEFILEDSC','Hvis denne mulighet er aktivert, vil .html filer i maler automatisk bli oppdatert, såsant det er nyere filer i mappen themes/your theme/templates for det aktuelle tema. Denne mulighet bør være deaktivert når siden er offentligt tilgjengelig.');
define('_MD_AM_CLOSESITE','Steng siden?');
define('_MD_AM_CLOSESITEDSC','Velg ja for å stenge hjemmesiden, sånn at kun brukere i utvalgte grupper har adgang. ');
define('_MD_AM_CLOSESITEOK','Grupper som har adgang til siden, selv om den er stengt.');
define('_MD_AM_CLOSESITEOKDSC','Brukere i standard administrator (webmaster) gruppen har alltid adgang til siden.');
define('_MD_AM_CLOSESITETXT','Begrunnelse for å stenge siden');
define('_MD_AM_CLOSESITETXTDSC','Denne tekst vises når siden er stengt.');
define('_MD_AM_SITECACHE','Global cache');
define('_MD_AM_SITECACHEDSC','Plasser innholdet av hele siden i en cache i et avgrenset tidsrom for å forbedre hjemmesidens ytelse. Global cache indstillinger vil tilsidesette caches for moduler, caches for blokker og modul emne caches, hvis det er noen.');
define('_MD_AM_MODCACHE','Modul cache');
define('_MD_AM_MODCACHEDSC','Plasser innholdet av alle moduler i en cache i et avgrenset tidsrom for at forbedre hjemmesidens ytelse. Modul cache innstillinger vil tilsidesette modul emne caches, hvis det er noen.');
define('_MD_AM_NOMODULE','Det er ingen modul, å cache.');
define('_MD_AM_DTPLSET','Standard mal-sett');
define('_MD_AM_SSLLINK','URL hvor SSL logg inn siden er plassert');

// added for mailer
define('_MD_AM_MAILER','Epost-innstillinger');
define('_MD_AM_MAILER_MAIL','');
define('_MD_AM_MAILER_SENDMAIL','');
define('_MD_AM_MAILER_','');
define('_MD_AM_MAILFROM','FRA adresse');
define('_MD_AM_MAILFROMDESC','');
define('_MD_AM_MAILFROMNAME','FRA navn');
define('_MD_AM_MAILFROMNAMEDESC','');
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID','FRA bruker');
define('_MD_AM_MAILFROMUIDDESC','Når systemet sender en privat melding, hvilken bruker skal da fremstå som avsenderen?');
define('_MD_AM_MAILERMETHOD','Postforsendelsesmetode');
define('_MD_AM_MAILERMETHODDESC','Metoden brukt til å sende post. Standard er "mail". Bruk kun andre metoder om denne gir problemer.');
define('_MD_AM_SMTPHOST','SMTP host(s)');
define('_MD_AM_SMTPHOSTDESC','Liste over SMTP servere systemet skal forsøke å forbinde til.');
define('_MD_AM_SMTPUSER','SMTPAuth brukernavn');
define('_MD_AM_SMTPUSERDESC','Brukernavnet, som skal brukes for å kunne forbinde til en SMTP host med SMTPAuth.');
define('_MD_AM_SMTPPASS','SMTPAuth adgangskode');
define('_MD_AM_SMTPPASSDESC','Adgangskoden, som skal brukes for å kunne forbinde til en SMTP host med SMTPAuth.');
define('_MD_AM_SENDMAILPATH','Sti til sendmail');
define('_MD_AM_SENDMAILPATHDESC','Sti til postforsendelsesprogrammet (eller erstatningen) på webserveren.');
define('_MD_AM_THEMEOK','Valgbare tema');
define('_MD_AM_THEMEOKDSC','Velg de tema brukerne kan velge som standard tema');


// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS','XOOPS Database');
define('_MD_AM_AUTH_CONFOPTION_LDAP','Standard LDAP Directory');
define('_MD_AM_AUTH_CONFOPTION_AD','Microsoft Active Directory &copy');
define('_MD_AM_AUTHENTICATION','Godkjennelses muligheter');
define('_MD_AM_AUTHMETHOD','Godkjennelses metode');
define('_MD_AM_AUTHMETHODDESC','Hvilken godkjennelses metode vil du benytte når brukere skal logge på');
define('_MD_AM_LDAP_MAIL_ATTR','LDAP - Mail Field Name');
define('_MD_AM_LDAP_MAIL_ATTR_DESC','Navnet på E-Mail attributten i ditt LDAP');
define('_MD_AM_LDAP_NAME_ATTR','LDAP - Common Name Field Name');
define('_MD_AM_LDAP_NAME_ATTR_DESC','Navnet på Common Name attributten i ditt LDAP');
define('_MD_AM_LDAP_SURNAME_ATTR','LDAP - Surname Field Name');
define('_MD_AM_LDAP_SURNAME_ATTR_DESC','Navnet på Surname attributten i ditt LDAP');
define('_MD_AM_LDAP_GIVENNAME_ATTR','LDAP - Given Name Field Name');
define('_MD_AM_LDAP_GIVENNAME_ATTR_DSC','Navnet på Given name attributten i ditt LDAP');
define('_MD_AM_LDAP_BASE_DN','LDAP - Base DN');
define('_MD_AM_LDAP_BASE_DN_DESC','DN (Distinguished Name) på ditt LDAP');
define('_MD_AM_LDAP_PORT','LDAP - Port Number');
define('_MD_AM_LDAP_PORT_DESC','Port nummer på ditt LDAP');
define('_MD_AM_LDAP_SERVER','LDAP - Server Name');
define('_MD_AM_LDAP_SERVER_DESC','Server navn på ditt LDAP');

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

define('_MD_AM_LDAP_PROVIS_GROUP','Default avfect group');
define('_MD_AM_LDAP_PROVIS_GROUP_DSC','The new user is assign to these groups');

define('_MD_AM_LDAP_FIELD_MAPPING_ATTR','Xoops-Auth server fields mapping');
define('_MD_AM_LDAP_FIELD_MAPPING_DESC','Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!');
		
define('_MD_AM_LDAP_PROVIS_UPD','Maintain xoops account provisionning');
define('_MD_AM_LDAP_PROVIS_UPD_DESC','The Xoops User account is always synchronized with the Authentication Server');


define('_MD_AM_CPANEL','Kontroll Panel GUI');
define('_MD_AM_CPANELDSC','For backend');

define('_MD_AM_WELCOMETYPE','Sende velkomst beskjed');
define('_MD_AM_WELCOMETYPE_DESC','Den måte som benyttes, for å sende en velkomstbeskjed til en bruker, etter vellykket registrering.');
define('_MD_AM_WELCOMETYPE_EMAIL','Epost');
define('_MD_AM_WELCOMETYPE_PM','Beskjed');
define('_MD_AM_WELCOMETYPE_BOTH','Epost og beskjed');

?>