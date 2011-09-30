<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @version     $Id: preferences.php 5570 2010-10-20 20:51:35Z beckmi $
 */

 // _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN","Instellingen");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL","Algemene instellingen");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS","Gebruikers Info Instellingen");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER","Meta Tags and voettekst");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR","Taalgebruik restricties");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH","Zoekopties");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER","E-mail instellingen");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION","Verificatie Opties");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS","<ul><li>Beheer alle instellingen voor de site.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION","A faire");
*/
define("_MD_AM_SITEPREF", "Algemene instellingen");
define("_MD_AM_SITENAME", "Naam website");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Slogan voor de website");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "E-mail adres beheerder");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Standaard taal");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "Module voor de startpagina");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "Geen");
define("_MD_AM_SERVERTZ", "Server tijdzone");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Standaard tijdzone");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Standaard thema");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Standaard sjabloon");
define("_MD_AM_CUSTOM_REDIRECT", "Use jGrowl redirect");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "replace old redirection by an jQuery redirection");
define("_MD_AM_ANONNAME", "Gebruikersnaam voor anonieme gebruikers");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "minimaal aantal tekens van het wachtwoord");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "Verzend e-mail bij registratie nieuwe gebruiker?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Sta gebruikers toe hun eigen account te verwijderen?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Beeld voor Laden ....?");
define("_MD_AM_USEGZIP", "Gebruik gzip compressie?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Selecteer het striktheidsniveau voor gebruikersnaamingave");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Strikt (alleen letters en cijfers)");
define("_MD_AM_MEDIUM", "Gemiddeld");
define("_MD_AM_LIGHT", "Licht (aanbevolen voor multi-byte tekens)");
define("_MD_AM_USERCOOKIE", "Naam van de gebruikercookies.");
define("_MD_AM_USERCOOKIEDSC", "Als de cookienaam is ingesteld, zal 'Onthoudt mij' worden ingeschakeld bij het aanmelden door de gebruiker. Als een gebruiker 'Onthoudt mij' heeft aangekruist, zal hij automatisch worden aangemeld. De cookie is een jaar geldig.");
define("_MD_AM_USEMYSESS", "Gebruik aangepaste sessie");
define("_MD_AM_USEMYSESSDSC", "Selecteer Ja om sessie gerelateerde waarden aan te passen.");
define("_MD_AM_SESSNAME", "Naam Sessie");
define("_MD_AM_SESSNAMEDSC", "De naam van de sessie (alleen geldig wanneer 'gebruik aangepaste sessie' is ingeschakeld)");
define("_MD_AM_SESSEXPIRE", "Geldigheidsduur sessie");
define("_MD_AM_SESSEXPIREDSC", "Maximale timeout van de sessie in minuten (alleen geldig wanneer 'gebruik aangepaste sessie' is ingeschakeld. Werkt alleen met PHP versie 4.2.0 of hoger.)");
define("_MD_AM_BANNERS", "Activeer banner advertenties?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Eigen IP-adres");
define("_MD_AM_MYIPDSC", "Dit IP-adres wordt niet meegenomen in het aantal malen dat banners worden aangeklikt");
define("_MD_AM_ALWDHTML", "HTML-tags toegestaan in alle berichten.");
define("_MD_AM_INVLDMINPASS", "Ongeldige waarde voor de minimale lengte van het wachtwoord.");
define("_MD_AM_INVLDUCOOK", "Ongeldige waarde voor naam usercookie.");
define("_MD_AM_INVLDSCOOK", "Ongeldige waarde voor naam sessioncookie.");
define("_MD_AM_INVLDSEXP", "Ongeldige waarde voor geldigheidsduur sessie.");
define("_MD_AM_ADMNOTSET", "Admin e-mail adres is niet ingesteld.");
define("_MD_AM_YES", "Ja");
define("_MD_AM_NO", "Nee");
define("_MD_AM_DONTCHNG", "Niet wijzigen!");
define("_MD_AM_REMEMBER", "Dit bestand dient door het systeem beschrijfbaar te zijn! (chmod 666).");
define("_MD_AM_IFUCANT", "Verander de machtigingen van dit bestand desgewenst handmatig via b.v. ftp.");

define("_MD_AM_COMMODE", "Standaardwijze tonen Commentaar");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Standaardvolgorde Commentaar");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "Sta HTML-tags in Commentaar toe?");
define("_MD_AM_DEBUGMODE", "Debug mode");
define("_MD_AM_DEBUGMODEDSC", "Debug opties. Deze dienen bij een online website uit te staan!");
define("_MD_AM_AVATARALLOW", "Toestaan dat gebruikers een eigen avatar uploaden?");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Minimaal aantal geplaatste berichten");
define("_MD_AM_AVATARMPDSC", "Voer het minimum aantal berichten in dat nodig is voor het uploaden van een aangepaste avatar");
define("_MD_AM_AVATARW", "Avatar max. breedte (pixels)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Avatar max. hoogte (pixels)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Avatar max, bestandsgrootte (bytes)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Aangepaste avatar instellingen");
define("_MD_AM_CHNGUTHEME", "Wijzig het standaard thema");
define("_MD_AM_NOTIFYTO", "Selecteer groep waarheen e-mail kennisgeving aanmelden nieuwe gebruikers wordt verzonden");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Gebruikers toestaan zelf een thema te selecteren?");
define("_MD_AM_ALLOWIMAGE", "Gebruikers toestaan om afbeeldingen in berichten te plaatsen?");

define("_MD_AM_USERACTV", "Vereist activering door de gebruiker (aanbevolen)");
define("_MD_AM_AUTOACTV", "Activeer automatisch");
define("_MD_AM_ADMINACTV", "Activering door beheerders");
define("_MD_AM_ACTVTYPE", "Selecteer type activering van nieuw geregistreerde gebruikers");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Selecteer groep waarheen activatie mail wordt verzonden");
define("_MD_AM_ACTVGROUPDSC", "Alleen geldig wanneer 'Activatie door beheerder' is ingeschakeld");
define("_MD_AM_USESSL", "SSL gebruiken bij inloggen?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "SSL Post variabele naam");
define("_MD_AM_SSLPOSTDSC", "De naam van de variabele gebruikt om de sessie waarde overdracht via POST. Als u twijfelt, zet elke naam die moeilijk te raden.");
define("_MD_AM_DEBUGMODE0", "Uit");
define("_MD_AM_DEBUGMODE1", "Debug inschakelen (inline-modus)");
define("_MD_AM_DEBUGMODE2", "Debug inschakelen (popup-modus)");
define("_MD_AM_DEBUGMODE3", "Smarty Templates Debug");
define("_MD_AM_MINUNAME", "Minimaal benodigde lengte gebruikersnaam");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Maximale lengte gebruikersnaam");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Algemene instellingen");
define("_MD_AM_USERSETTINGS", "Gebruikers Info Instellingen");
define("_MD_AM_ALLWCHGMAIL", "Gebruikers toestaan hun e-mail adres te wijzigen?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP-verbanning");
define("_MD_AM_BADEMAILS", "E-mail adressen die niet mogen worden gebruikt in het gebruikersprofiel");
define("_MD_AM_BADEMAILSDSC", "Ingaven scheiden met <strong>|,</strong> niet hoofdlettergevoelig, regex ingeschakeld.");
define("_MD_AM_BADUNAMES", "Namen die niet mogen worden geselecteerd als gebruikersnaam");
define("_MD_AM_BADUNAMESDSC", "Ingaven scheiden met <strong>|,</strong> niet hoofdlettergevoelig, regex ingeschakeld.");
define("_MD_AM_DOBADIPS", "Schakel IP-verbanning in?");
define("_MD_AM_DOBADIPSDSC", "Gebruikers van deze IP-adressen zullen niet in staat zijn om de website te bekijken");
define("_MD_AM_BADIPS", "IP-adressen die moeten worden verbannen van de website. <br /> Ingaven scheiden met een <strong>|,</strong>, regex ingeschakeld.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc weigert bezoekers met een IP-adres dat begint met aaa.bbb.ccc <br /> aaa.bbb.ccc$ weigert bezoekers met een IP-adres dat eindigt op aaa.bbb.ccc <br /> aaa.bbb.ccc weigert bezoekers met een IP-adres dat aaa.bbb.ccc bevat");
define("_MD_AM_PREFMAIN", "Basis instellingen");
define("_MD_AM_METAKEY", "Meta Keywords");
define("_MD_AM_METAKEYDSC", "De meta tag zoekwoorden zijn een reeks trefwoorden die de inhoud van uw site weergeven. Scheidt de afzonderlijke trefwoorden met een komma of een spatie. (B.V. XOOPS, PHP, MySQL, portal systeem)");
define("_MD_AM_METARATING", "Classificatie");
define("_MD_AM_METARATINGDSC", "De classificatie meta-tag definieert de inhoud van de site gerelateerd aan de geschiktheid voor minderjarigen");
define("_MD_AM_METAOGEN", "Algemeen");
define("_MD_AM_METAO14YRS", "+14 jaar");
define("_MD_AM_METAOREST", "Begrensd");
define("_MD_AM_METAOMAT", "Volwassenen");
define("_MD_AM_METAROBOTS", "Meta Robots");
define("_MD_AM_METAROBOTSDSC", "De Robots Tag bepaald welke inhoud zoekmachines en spiders mogen indexeren");
define("_MD_AM_INDEXFOLLOW", "Index, Follow");
define("_MD_AM_NOINDEXFOLLOW", "Geen Index, Follow");
define("_MD_AM_INDEXNOFOLLOW", "Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW", "Geen Index, No Follow");
define("_MD_AM_METAAUTHOR", "Meta Auteur");
define("_MD_AM_METAAUTHORDSC", "De auteur meta-tag geeft de eigenaar van de site-inhoud weer. Ondersteunde gegevens zijn de sitenaam, e-mailadres van de webmaster, bedrijfsnaam of URL.");
define("_MD_AM_METACOPYR", "Meta Eigendomsrecht");
define("_MD_AM_METACOPYRDSC", "De eigendomsrecht/ copyright meta tag definieert het auteursrecht op de inhoud van de website.");
define("_MD_AM_METADESC", "Meta Beschrijving");
define("_MD_AM_METADESCDSC", "De beschrijving/ description meta tag geeft een algemene beschrijving van de website");
define("_MD_AM_METAFOOTER", "Meta Tags en voettekst");
define("_MD_AM_FOOTER", "Voettekst");
define("_MD_AM_FOOTERDSC", "Be sure to type links in full path starting from http://, otherwise the links will not work correctly in modules pages.");
define("_MD_AM_CENSOR", "Taalgebruik restricties");
define("_MD_AM_DOCENSOR", "Schakel censureren van ongewenste woorden in?");
define("_MD_AM_DOCENSORDSC", "Woorden zullen worden gecensureerd als deze optie is ingeschakeld. Schakel deze optie uit om de website sneller te laten laden.");
define("_MD_AM_CENSORWRD", "Te censureren woorden");
define("_MD_AM_CENSORWRDDSC", "Te censureren woorden in berichten van gebruikers. <br /> Scheidt de woorden met <strong>|,</strong>, niet hoofdlettergevoelig.");
define("_MD_AM_CENSORRPLC", "Verboden woorden zullen worden vervangen door:");
define("_MD_AM_CENSORRPLCDSC", "Gecensureerde woorden zullen worden vervangen door de tekens in dit tekstvak");

define("_MD_AM_SEARCH", "Zoekopties");
define("_MD_AM_DOSEARCH", "Zoekopdrachten toestaan?");
define("_MD_AM_DOSEARCHDSC", "Sta toe dat wordt gezocht binnen de berichten/ items op de site.");
define("_MD_AM_MINSEARCH", "Minimum lengte trefwoord");
define("_MD_AM_MINSEARCHDSC", "De minimale trefwoordlengte nodig om een zoekopdracht uit te voeren");
define("_MD_AM_MODCONFIG", "Module instellingen");
define("_MD_AM_DSPDSCLMR", "Tonen recht van voorbehoud?");
define("_MD_AM_DSPDSCLMRDSC", "Selecteer 'ja' om het recht van voorbehoud te tonen op de registratie pagina");
define("_MD_AM_REGDSCLMR", "Recht van voorbehoud Registratie");
define("_MD_AM_REGDSCLMRDSC", "De tekst die moet worden getoond als recht van voorbehoud bij de registratie");
define("_MD_AM_ALLOWREG", "Registratie nieuwe gebruikers toestaan?");
define("_MD_AM_ALLOWREGDSC", "Selecteer Ja om registratie nieuwe gebruikers toe te staan");
define("_MD_AM_THEMEFILE", "Controleer sjablonen voor wijzigingen?");
define("_MD_AM_THEMEFILEDSC", "Als deze optie is ingeschakeld, worden gewijzigde sjablonen opnieuw gecompileerd wanneer ze worden getoond. Zet deze optie uit binnen een productie-website.");
define("_MD_AM_CLOSESITE", "Website sluiten?");
define("_MD_AM_CLOSESITEDSC", "Selecteer Ja om de website af te sluiten, zodat alleen gebruikers in geselecteerde groepen toegang hebben.");
define("_MD_AM_CLOSESITEOK", "Selecteer de groepen die toegang houden tot de gesloten/ besloten website.");
define("_MD_AM_CLOSESITEOKDSC", "Gebruikers in de standaard webmasters groep hebben altijd toegang.");
define("_MD_AM_CLOSESITETXT", "Reden voor het sluiten van de website");
define("_MD_AM_CLOSESITETXTDSC", "Tekst die wordt getoond wanneer de website is gesloten.");
define("_MD_AM_SITECACHE", "Cache de gehele website");
define("_MD_AM_SITECACHEDSC", "Plaatst de complete inhoud van de site voor bepaalde tijd in cache geheugen om de prestaties te verbeteren. Deze instelling overrulled, indien ingeschakeld, de cache instellingen op module-, blok- en module-niveau.");
define("_MD_AM_MODCACHE", "Module cache");
define("_MD_AM_MODCACHEDSC", "Plaatst de complete module-inhoud voor bepaalde tijd in cache om de prestaties te verbeteren. Deze instelling overruled de cache instellingen op module niveau, zoals het in cache plaatsen van module-blokken");
define("_MD_AM_NOMODULE", "Er is geen module die kan worden gecached.");
define("_MD_AM_DTPLSET", "Standaardsjabloonset");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "URL van de SSL login pagina");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "E-mail instellingen");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "Van, e-mail adres");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "Van, naam");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Van, naam");
define("_MD_AM_MAILFROMUIDDESC", "Welke gebruikersnaam moet getoond worden als vanuit het systeem een geautomatiseerde e-mail naar een gebruiker wordt verzonden?");
define("_MD_AM_MAILERMETHOD", "E-mail protocol");
define("_MD_AM_MAILERMETHODDESC", "Methode gebruikt voor het verzenden van e-mail. Meestal is dit \"PHP-mail\"");
define("_MD_AM_SMTPHOST", "SMTP server(s)");
define("_MD_AM_SMTPHOSTDESC", "SMTP-servers waar verbinding mee gezocht kan worden.");
define("_MD_AM_SMTPUSER", "SMTP gebruikersnaam");
define("_MD_AM_SMTPUSERDESC", "Gebruikersnaam om verbinding te maken met de SMTP-server.");
define("_MD_AM_SMTPPASS", "SMTP wachtwoord");
define("_MD_AM_SMTPPASSDESC", "Wachtwoord om verbinding te maken met de SMTP-server.");
define("_MD_AM_SENDMAILPATH", "Pad naar sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Pad naar het sendmail programma (of plaatsvervanger) op de webserver.");
define("_MD_AM_THEMEOK", "Selecteerbare thema\'s");
define("_MD_AM_THEMEOKDSC", "Kies thema\'s die gebruikers mogen selecteren");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","This is the address of the soap server.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say 'yes'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","If you need a wdsl soap service enable this option.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Username");
define("_MD_AM_SOAP_USERNAMEDESC","This is the username of your account on the soap server.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP Password");
define("_MD_AM_SOAP_PASSWORDDESC","If you need a password with the soap service put it in here.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client Alive");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Keep The Soap Client Alive.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Special Accounts");
define("_MD_AM_SOAP_FILTERPERSONDESC","Special Accounts that use Xoops Authentication.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy Hostname");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Servers Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP Servers Proxy Server Port Number <br>ie: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy Username");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP Servers Proxy Server Username");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy Password");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP Servers Proxy Server Password.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP Response Timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops-Auth server fields mapping");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system SOAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS Database");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Standaard LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &©");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops Soap Authentication");
define("_MD_AM_AUTHENTICATION", "Verificatie Opties");
define("_MD_AM_AUTHMETHOD", "Verificatie Methode");
define("_MD_AM_AUTHMETHODDESC", "Welke verificatie methode gebruiken voor het aanmelden van bezoekers.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - E-Mail attribuut");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "De naam van het E-Mail attribuut in de LDAP-directory tree.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - Common Name Attribuut");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "De naam van het Common Name Attribuut in uw LDAP-directory.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Surname Attribuut");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "De naam van het Achternaam attribuut in uw LDAP-directory.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Given Name Field Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "The name of the Given Name attribute in your LDAP directory.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "De base DN (Distinguished Name) van uw LDAP directory tree.");
define("_MD_AM_LDAP_PORT", "LDAP - Poort Nummer");
define("_MD_AM_LDAP_PORT_DESC", "Het poortnummer dat gebruikt wordt door de LDAP server.");
define("_MD_AM_LDAP_SERVER", "LDAP - Server Naam");
define("_MD_AM_LDAP_SERVER_DESC", "De naam van de LDAP server.");

define("_MD_AM_LDAP_MANAGER_DN", "DN van de LDAP-administrator");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "De DN van de gebruiker voor de zoekfunctie(bijvoorbeeld manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Wachtwoord LDAP-administrator");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "The password of the user allow to make search");
define("_MD_AM_LDAP_VERSION", "Versie LDAP-protocol");
define("_MD_AM_LDAP_VERSION_DESC", "Versie LDAP-protocol: 2 of 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Gebruikers die LDAP authenticatie mogen omzeilen");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Toestaan dat gebruikers LDAP verificatie overslaan en direct inloggen in XOOPS. Gebruik een | als scheidingsteken tussen elke inlognaam");

define("_MD_AM_LDAP_USETLS", "TLS-verbinding");
define("_MD_AM_LDAP_USETLS_DESC", "Gebruik een TLS (Transport Layer Security) connectie. TLS gebruikt de standaard poort 389<BR>" .
                                  " De LDAP versie moet op 3 staan.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "LDAP-attribuut gebruiken voor het zoeken van de gebruiker");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "Wanneer Login naam gebruik in de DN-optie is ingesteld op Ja, moet overeenstemmen met de login-naam XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Login naam te gebruiken in de DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "The XOOPS login naam wordt gebruikt in de LDAP DN (bv: uid = <loginname> , dc = xoops, dc = org) <br> Het item wordt direct gelezen in de LDAP-server, zonder zoeken");

define("_MD_AM_LDAP_FILTER_PERSON", "Zoekfilter om gebruikerd te vinden via LDAP");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Speciaal LDAP Filter om gebruikers te vinden. @@loginname@@ wordt vervangen door de gebruikersnaam.<br> LAAT DIT VELD LEEG ALS U NIET WEET WAT DIT INHOUDT\" !" .
        "<br />bv : (&(objectclass=person)(samaccountname=@@loginname@@)) voor Active Directory" .
        "<br />bv : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) voor LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "De domeinnaam");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows domeinnaam. Alleen voor ADS en NT Servers");

define("_MD_AM_LDAP_PROVIS", "Automatisch xoops account onderhoud");
define("_MD_AM_LDAP_PROVIS_DESC", "Maak een xoops gebruikers database aan als deze niet bestaat");

define("_MD_AM_LDAP_PROVIS_GROUP", "Standaard groep");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Nieuwe gebruikers worden aangemeld bij deze deze groepen");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Xoops-Auth server velden overzicht");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Geef hier een overzicht van de Xoops database velden en de bijbehorende LDAP verificatie attributen." .
     "<br /><br />Formaat [Xoops Database veld]=[Auth system LDAP attribuut]" .
        "<br />Bijvoorbeeld : email=mail" .
        "<br />Gegevens scheiden met een |" .
        "<br /><br />!! Alleen voor gevorderde gebruikers !!");

define("_MD_AM_LDAP_PROVIS_UPD", "Handhaaf xoops account onderhoud");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "Het Xoops User account wordt altijd gesynchroniseerd door middel van de verifiacatie server");


define("_MD_AM_CPANEL", "Layout Beheerders pagina/'s");
define("_MD_AM_CPANELDSC", "Kies een aangepaste layout voor de beheerders pagina/'s");

define("_MD_AM_WELCOMETYPE", "Verzenden welkomstbericht");
define("_MD_AM_WELCOMETYPE_DESC", "Op welke wijze dient een welkomstbericht naar nieuwe gebruikers te worden gestuurd.");
define("_MD_AM_WELCOMETYPE_EMAIL", "E-mail");
define("_MD_AM_WELCOMETYPE_PM", "PM");
define("_MD_AM_WELCOMETYPE_BOTH", "E-mail en PM");

define("_MD_AM_MODULEPREF", "Module voorkeuren");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS","Instellingen systeemmodule");
?>