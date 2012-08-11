<?php
// $Id: preferences.php 1507 2008-04-26 12:08:47Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","%s inställningar");
define("_MD_AM_SITENAME","Sajtnamn");
define("_MD_AM_SLOGAN","Slogan för din sajt");
define("_MD_AM_ADMINML","Administratörens emailadress");
define("_MD_AM_LANGUAGE","Standardspråk");
define("_MD_AM_STARTPAGE","Modul för startsidan");
define("_MD_AM_NONE","Ingen");
define("_MD_AM_SERVERTZ","Sevrverns tidszon");
define("_MD_AM_DEFAULTTZ","Standardtidzon");
define("_MD_AM_DTHEME","Standardtema");
define("_MD_AM_THEMESET","Temasamling");
define("_MD_AM_ANONNAME","Användarnamn för anonyma användare");
define('_MD_AM_MINPASS','Lösenordets påkrävande minimumslängd');
define('_MD_AM_NEWUNOTIFY','Orientera via e-post när en ny använder är registrerat?');
define('_MD_AM_SELFDELETE','Tillåt användare att ta bort deras egen konto?');
define("_MD_AM_LOADINGIMG","Visar laddande... bild?");
define("_MD_AM_USEGZIP","Använd gzip kompression?");
define('_MD_AM_UNAMELVL','Välj nivåer för hur noggrannregnande filtreringen av användarenamne skall vara');
define('_MD_AM_STRICT','Strikt (bara bokstaven och nummer)');
define('_MD_AM_MEDIUM','Normalt');
define('_MD_AM_LIGHT','Avslappat (rekommenderas för multi-byte chars)');
define("_MD_AM_USERCOOKIE","Namn för användarcookies.");
define("_MD_AM_USERCOOKIEDSC","Denna cookie innehåller endast ett användarnamn och sparas i användarens dator i ett år (om användaren så önskar). Om en användare har en sådan cookie kommer användarnamnet automatiskt fyllas i vid inloggning.");
define("_MD_AM_USEMYSESS","Använd egendefinierad session");
define("_MD_AM_USEMYSESSDSC","Välj ja för att själv definiera sessionsparametrar.");
define("_MD_AM_SESSNAME","Sessionsnamn");
define("_MD_AM_SESSNAMEDSC","Sessionsnamnet (Endast giltigt om 'Använd egendefinierad session' är påslaget)");
define("_MD_AM_SESSEXPIRE","Sessionens livslängd");
define("_MD_AM_SESSEXPIREDSC","Maximal längd sessionen tillåts vara vilande i minuter (Endast giltigt om 'Använd egendefinierad session' är förvalt. Fungerar endast om du använder PHP4.2.0 eller senare.)");
define("_MD_AM_BANNERS","Aktivera banner-annonser?");
define("_MD_AM_MYIP","Din IP-adress");
define("_MD_AM_MYIPDSC","Detta IP-nummer kommer ej räknas som impression för banners");
define("_MD_AM_ALWDHTML","HTML-taggar tillåtna i alla inlägg.");
define("_MD_AM_INVLDMINPASS","Felaktigt värde för minimumlängd på lösenord.");
define("_MD_AM_INVLDUCOOK","Felaktigt värde för användarcookienamn.");
define("_MD_AM_INVLDSCOOK","Felaktigt värde för sessionscookienamn.");
define("_MD_AM_INVLDSEXP","Felaktigt värde för sessionens livslängd.");
define("_MD_AM_ADMNOTSET","Administratörsemail inte ifyllt.");
define("_MD_AM_YES","Ja");
define("_MD_AM_NO","Nej");
define("_MD_AM_DONTCHNG","Ändra inte!");
define("_MD_AM_REMEMBER","Kom ihåg att köra 'chmod 666' på denna fil så att systemet kan skriva till den.");
define("_MD_AM_IFUCANT","Om du inte kan ändra rättigheterna, så kan du redigera resten av denna filen för hand.");


define("_MD_AM_COMMODE","Standardvisningssätt för kommentarer");
define("_MD_AM_COMORDER","Standardvisningsordning för kommentarer");
define("_MD_AM_ALLOWHTML","Tillåt HTML-taggar i användarkommentarer?");
define("_MD_AM_DEBUGMODE","Debug-läge");
define("_MD_AM_DEBUGMODEDSC","Flera debug-alternativ. En aktiv sajt skall ha detta avstängt.");
define("_MD_AM_AVATARALLOW","Tillåt uppladdning av egna avatarer?");
define('_MD_AM_AVATARMP','Minimum antal indlæg påkrævet');
define('_MD_AM_AVATARMPDSC','Skriv in den minimale antal inlägg, det finns nödvändigt före en användare kan ladda upp egen använderikon');
define('_MD_AM_AVATARW','Använder ikonens maximale bredde (pixel)');
define('_MD_AM_AVATARH','Använder ikonens maximale höjd (pixel)');
define('_MD_AM_AVATARMAX','Använder ikonens maximale filstorlek (byte)');
define('_MD_AM_AVATARCONF','Inställningar för använder ikonen');
define("_MD_AM_CHNGUTHEME","Ändra alla användarnas teman");
define("_MD_AM_NOTIFYTO","Välj grupp till vilken emailunderrättelse om ny användare skall skickas");
define("_MD_AM_ALLOWTHEME","Tillåt användare att välja tema?");
define("_MD_AM_ALLOWIMAGE","Tillåt användare att visa bildfiler i inlägg?");

define('_MD_AM_USERACTV','Kräver aktivering av användaren (rekommenderad)');
define('_MD_AM_AUTOACTV','Aktivera automatisk');
define('_MD_AM_ADMINACTV','Aktivering företas av administratorer');
define('_MD_AM_ACTVTYPE','Välj aktiveringsmetod för nyregistrerade användare');
define('_MD_AM_ACTVGROUP','Välj till vilken grupp aktiveringsbreven kommer att bli skickat');
define('_MD_AM_ACTVGROUPDSC','Enbart giltig om \'Aktivering företas av administratorer\' er valt');
define('_MD_AM_USESSL','Använd SSL för inloggning?');
define('_MD_AM_SSLPOST','SSL-post-variabelnamn');
define('_MD_AM_SSLPOSTDSC','Namnet på variabeln som används för att föra vidare sessionsvärden genom POST. Om du är osäker - välj ett namn som är svårt att gissa.');
define('_MD_AM_DEBUGMODE0','Av');
define('_MD_AM_DEBUGMODE1','PHP-avkoda');
define('_MD_AM_DEBUGMODE2','MySQL/block-avkoda');
define('_MD_AM_DEBUGMODE3','Smarty Mallar-avkoda');
define('_MD_AM_MINUNAME','Nödvändigt minimumslängd för användarnamn');
define('_MD_AM_MAXUNAME','Nödvändigt maximumslängd för användarnamn');
define('_MD_AM_GENERAL','Generella inställningar');
define('_MD_AM_USERSETTINGS','Använder uppsättning');
define('_MD_AM_ALLWCHGMAIL','Tillåt användare att ändra deras e-post adress?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP-blockering');
define('_MD_AM_BADEMAILS','Tillägg e-post, som inte får användas i en användarprofil');
define('_MD_AM_BADEMAILSDSC','Åtskilj var enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex möjliggjord.');
define('_MD_AM_BADUNAMES','Tillägg namn, som inte får användas som användarnamne');
define('_MD_AM_BADUNAMESDSC','Åtskilj var enkelt med en <b><font color="red">|</font></b>, case insensitiv, regex möjliggjord.');
define('_MD_AM_DOBADIPS','Aktivera IP-blockering?');
define('_MD_AM_DOBADIPSDSC','Användare från specificerade IP-adresser kan inte komma åt din sajt');
define('_MD_AM_BADIPS','Skriv in IP-adresser som skall blockeras från sajten.<br />Separera med ett <b>|</b>, shiftlägesokänsligt, regex påslaget.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc kommer blockera besökare med en IP-adress som börjar med aaa.bbb.ccc<br />aaa.bbb.ccc$ kommer blockera besökare med en IP-adress som slutar med aaa.bbb.ccc<br />aaa.bbb.ccc kommer blockera användare med en IP-adress som innehåller aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Huvudinställningar');
define('_MD_AM_METAKEY','Metataggen "Keywords"');
define('_MD_AM_METAKEYDSC','Metataggen "keywords" är en serie sökord som representerar innehållet på din sajt. Skriv in sökord, separerade med komma eller mellanslag. (T.ex. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Metataggen "Rating"');
define('_MD_AM_METARATINGDSC','Metataggen "rating" definierar sajtens innehålls- och åldersgränsrating');
define('_MD_AM_METAOGEN','Generell');
define('_MD_AM_METAO14YRS','14 år');
define('_MD_AM_METAOREST','Begränsad');
define('_MD_AM_METAOMAT','Vuxet');
define('_MD_AM_METAROBOTS','Metataggen "Robots"');
define('_MD_AM_METAROBOTSDSC','Taggen "Robots" beskriver för sökrobotar vilket innehåll som skall indexeras och genomsökas');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Metataggen "Author"');
define('_MD_AM_METAAUTHORDSC','Metataggen "Author" definierar namnet på författaren till dokumentet som läses. Godkända format är: namn, emailadress till webmaster, företagsnamn eller URL.');
define('_MD_AM_METACOPYR','Metataggen "Copyright"');
define('_MD_AM_METACOPYRDSC','Metataggen "Copyright" definierar eventuella förbehåll och rättigheter du vill distribuera med dina webbdokument.');
define('_MD_AM_METADESC','Metataggen "Description"');
define('_MD_AM_METADESCDSC','Metataggen "Description" innehåller en generell beskrivning av vad sajten innehåller.');
define('_MD_AM_METAFOOTER','Metataggar och footer');
define('_MD_AM_FOOTER','Footer');
define('_MD_AM_FOOTERDSC','Se till att länkar skrivs med hela sökvägen, utöver http://, annars kommer länkarna inte att fungera korrekt i modulsidorna.');
define('_MD_AM_CENSOR','Ordcensurinställningar');
define('_MD_AM_DOCENSOR','Aktivera censur av oönskade ord?');
define('_MD_AM_DOCENSORDSC','Ord kommer att censureras om detta alternativ är aktiverat. Denna funktion kan stängas av för att öka sajtens prestanda.');
define('_MD_AM_CENSORWRD','Ord att censurera');
define('_MD_AM_CENSORWRDDSC','Skriv in ord som skall censureras i användarinlägg.<br />Separera med <b>|</b>, shiftlägesokänsligt.');
define('_MD_AM_CENSORRPLC','Dåliga ord kommer ersättas med:');
define('_MD_AM_CENSORRPLCDSC','Censurerade ord kommer att ersättas med tecknen i denna textruta');

define('_MD_AM_SEARCH','Sökalternativ');
define('_MD_AM_DOSEARCH','Aktivera globala sökningar?');
define('_MD_AM_DOSEARCHDSC','Tillåt sökning på inlägg/saker på din sajt.');
define('_MD_AM_MINSEARCH','Minsta längd på sökord');
define('_MD_AM_MINSEARCHDSC','Skriv in minsta längd på sökord som användare måste skriva in för att göra en sökning');
define('_MD_AM_MODCONFIG','Alternativ för modulinställningar');
define('_MD_AM_DSPDSCLMR','Visa det finstilta?');
define('_MD_AM_DSPDSCLMRDSC','Välj ja för att visa det finstilta på registreringssidan');
define('_MD_AM_REGDSCLMR','Finstilt vid registrering');
define('_MD_AM_REGDSCLMRDSC','Skriv in texten som skall visas som finstilt vid registrering');
define('_MD_AM_ALLOWREG','Tillåt registrering av nya användare?');
define('_MD_AM_ALLOWREGDSC','Välj ja för att acceptera registrering av nya användare');
define('_MD_AM_THEMEFILE','Uppdatera mall-html-filer från teman/dina teman/mall-katalog?');
define('_MD_AM_THEMEFILEDSC','Om detta alternativ är förvalt kommer automatiskt .html-mallar att uppdateras om det finns nyare filer unde teman/dina teman/mall-katalogen för dett aktuella temat. Detta bör stängas av när sajten blir publik.');
define('_MD_AM_CLOSESITE','Stäng av sajten?');
define('_MD_AM_CLOSESITEDSC','Välj ja för att stänga av sajten så att endast medlemmar av valda grupper har åtkomst till sajten. ');
define('_MD_AM_CLOSESITEOK','Välj grupper som har åtkomst då sajten är avstängd.');
define('_MD_AM_CLOSESITEOKDSC','Användare i webbmastersgruppen har alltid åtkomst.');
define('_MD_AM_CLOSESITETXT','Anledning att sajten stängs av');
define('_MD_AM_CLOSESITETXTDSC','Texten som presenteras när sajten är avstängd.');
define('_MD_AM_SITECACHE','Sajtcache');
define('_MD_AM_SITECACHEDSC','Cachar innehåll på sajten under en specificerad tid för att öka prestandan. Sätter du sajtcache kommer detta att stå över ev. modul-, block- eller modulenhetscache.');
define('_MD_AM_MODCACHE','Modulecache');
define('_MD_AM_MODCACHEDSC','Cachar modulinnehåll under en specificerad tid för att öka prestandan. Sätter du modulcache kommer detta stå över ev. modulenhetscache.');
define('_MD_AM_NOMODULE','Det finns ingen modul som kan cachas.');
define('_MD_AM_DTPLSET','Standardmallsamling');
define('_MD_AM_SSLLINK','URL där SSL-inloggningssidan finns');

// added for mailer
define("_MD_AM_MAILER","Emailinställningar");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","FRÅN-adress");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","FRÅN-namn");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","FRÅN-användare");
define("_MD_AM_MAILFROMUIDDESC","När systemet skickar ett privat meddelande, vilken användare skall stå som avsändare?");
define("_MD_AM_MAILERMETHOD","Emailleveransmetod");
define("_MD_AM_MAILERMETHODDESC","Metod som används för att skicka email. Standard är \"mail\", använd andra endast om detta inte fungerar.");
define("_MD_AM_SMTPHOST","SMTP-värd(ar)");
define("_MD_AM_SMTPHOSTDESC","Lista över SMTP-servrar som skall försöka anslutas till.");
define("_MD_AM_SMTPUSER","SMTPAuth-användarnamn");
define("_MD_AM_SMTPUSERDESC","Användarnamn för att ansluta till SMTP-värd med SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth-lösenord");
define("_MD_AM_SMTPPASSDESC","Lösenord för att ansluta till SMTP-värd med SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Sökväg till sendmail");
define("_MD_AM_SENDMAILPATHDESC","Sökväg till programmet sendmail (eller liknande) på webbservern.");
define("_MD_AM_THEMEOK","Valbara teman");
define("_MD_AM_THEMEOKDSC","Välj teman som användare kan välja som sitt standardtema");


// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS','XOOPS Database');
define('_MD_AM_AUTH_CONFOPTION_LDAP','Standard LDAP Directory');
define('_MD_AM_AUTH_CONFOPTION_AD','Microsoft Active Directory &copy');
define("_MD_AM_AUTHENTICATION","Autentiseringsval");
define("_MD_AM_AUTHMETHOD","Autentiserings metod");
define("_MD_AM_AUTHMETHODDESC","Vilken autentiseringsmetod vill du använda för att låta dina användare logga på");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - E-post fältnamn");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Namnet på det e-postfält i ditt LDAP katalogträd.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Vanligt namn på fältnamn.");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Namnet på Common Name i din LDAP katalog.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Efternamn vän namn");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Namnet på Efternamnsfältet i din LDAP katalog.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Tilltalsnamn fältnamn");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Namnet på tilltalsnamnets fält i din LDAP katalog.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","Bas DN (Distinguished Name) i ditt LDAP katalogträd.");
define("_MD_AM_LDAP_PORT","LDAP - Port nummer");
define("_MD_AM_LDAP_PORT_DESC","Portnumret som krävs för att nå din LDAP katalogserver.");
define("_MD_AM_LDAP_SERVER","LDAP - Servernamn");
define("_MD_AM_LDAP_SERVER_DESC","Namnet på LDAP katalogserver.");

define("_MD_AM_LDAP_MANAGER_DN","DN på LDAP administratör");
define("_MD_AM_LDAP_MANAGER_DN_DESC","DN på användaren som tillåts söka (ex administratören)");
define("_MD_AM_LDAP_MANAGER_PASS","Lösenord för LDAP administratör");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","Lösenord för användare som tillåts göra sökningar");
define("_MD_AM_LDAP_VERSION","LDAP Version protocol");
define("_MD_AM_LDAP_VERSION_DESC","The LDAP Version protocol : 2 or 3");
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
