<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 5036 2010-08-25 09:40:27Z forxoops $
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN", "Indstillinger");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL", "Generelle indstillinger");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS", "Bruger indstillinger");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER", "Meta Tags og sidefod");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR", "Censur muligheer");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH", "Søgemuligheder");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER", "Mail opsætning");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION", "Autentificerings valg");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS", "<ul><li> Administrere alle sidens indstillinger. </li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL", "En faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS", "En faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER", "En faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR", "En faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH", "En faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER", "En faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION", "En faire");
*/
define("_MD_AM_SITEPREF", "Side indstillinger");
define("_MD_AM_SITENAME", "Sidens navn");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Slogan til din side");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "Administrators mail-adresse");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Standard sprog");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "Modul til din startside");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "Ingen");
define("_MD_AM_SERVERTZ", "Server tidszone");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Standard tidszone");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Standard tema");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Temaer");
define("_MD_AM_CUSTOM_REDIRECT", "Brug jGrowl omdirigere");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "erstatte gamle omdirigering af en jQuery omdirigering");
define("_MD_AM_ANONNAME", "Brugernavn til anonyme brugere");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "Mindste længde der kræves på kodeord");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "Give besked på mail, når en ny bruger er registreret?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Tillad brugere at slette egen konto?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Vis loading ... billed?");
define("_MD_AM_USEGZIP", "Brug gzip komprimering?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Vælg niveau for brugernavn");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Streng (kun bogstaver og tal)");
define("_MD_AM_MEDIUM", "Medium");
define("_MD_AM_LIGHT", "Let (anbefales til multi-byte tegn)");
define("_MD_AM_USERCOOKIE", "Navn for bruger cookies.");
define("_MD_AM_USERCOOKIEDSC", "Hvis cookie-navn er angivet, &#39;Husk mig&#39; vil være aktiveret for bruger-login. Hvis en bruger har valgt &#39;Husk mig&#39;, vil han automatisk blive logget ind. Udløbet for cookie er et år.");
define("_MD_AM_USEMYSESS", "Brug brugerdefinerede session");
define("_MD_AM_USEMYSESSDSC", "Vælg ja for at tilpasse session relaterede værdier.");
define("_MD_AM_SESSNAME", "Session navn");
define("_MD_AM_SESSNAMEDSC", "Navnet af sessionen (Gælder kun, når &#39;bruge brugerdefinerede session&#39; er aktiveret)");
define("_MD_AM_SESSEXPIRE", "Session udløbet");
define("_MD_AM_SESSEXPIREDSC", "Maksimale varighed af sessionen  - tid i minutter (Gælder kun, når &#39;bruge brugerdefinerede session&#39; er aktiveret.)");
define("_MD_AM_BANNERS", "Aktiver bannerreklamer?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Din IP-adresse");
define("_MD_AM_MYIPDSC", "Denne IP vil ikke tælle som et indtryk til bannere");
define("_MD_AM_ALWDHTML", "HTML-tags der er tilladt.");
define("_MD_AM_INVLDMINPASS", "Ugyldig værdi for minimum længde password.");
define("_MD_AM_INVLDUCOOK", "Ugyldig værdi for usercookie navn.");
define("_MD_AM_INVLDSCOOK", "Ugyldig værdi for sessioncookie navn.");
define("_MD_AM_INVLDSEXP", "Ugyldig værdi for session udløbstid.");
define("_MD_AM_ADMNOTSET", "Administrator mail er ikke indstillet.");
define("_MD_AM_YES", "Ja");
define("_MD_AM_NO", "Nej");
define("_MD_AM_DONTCHNG", "Du må ikke ændre!");
define("_MD_AM_REMEMBER", "Husk at chmod 666 denne fil, for at lade systemet skrive til den.");
define("_MD_AM_IFUCANT", "Hvis du ikke kan ændre denne fil, kan du redigere resten af filen manuelt (i hånden).");

define("_MD_AM_COMMODE", "Default visningmetode for kommentarer");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Default sortering for kommentarer");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "Tillad HTML-tags i brugerens kommentarer?");
define("_MD_AM_DEBUGMODE", "Debug mode");
define("_MD_AM_DEBUGMODEDSC", "Flere debug muligheder. En færdig hjemmeside bør have denne slået fra.");
define("_MD_AM_AVATARALLOW", "Tillad brugerdefinerede avatar upload?");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Antal indlæg krævet");
define("_MD_AM_AVATARMPDSC", "Indtast det mindste antal indlæg, som kræves for at uploade en brugerdefineret avatar");
define("_MD_AM_AVATARW", "Avatarbillede maks bredde (pixel)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Avatarbillede maks højde (pixels)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Avatarbillede maks fil størrelse (byte)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Brugerdefinerede avatar indstillinger");
define("_MD_AM_CHNGUTHEME", "Ændre alle brugeres tema");
define("_MD_AM_NOTIFYTO", "Vælg gruppe, som ny bruger meddelelses-mail vil blive sendt til");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Tillad brugere at vælge tema?");
define("_MD_AM_ALLOWIMAGE", "Tillad brugere at vise billedfiler i indlæg?");

define("_MD_AM_USERACTV", "Kræver aktivering af bruger (anbefales)");
define("_MD_AM_AUTOACTV", "Aktivér automatisk");
define("_MD_AM_ADMINACTV", "Aktivering af administratorer");
define("_MD_AM_ACTVTYPE", "Vælg aktiverings type af nyligt registrerede brugere");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Vælg gruppe, som aktivering mail vil blive sendt");
define("_MD_AM_ACTVGROUPDSC", "Kun gyldig, når &quot;Aktivering af administratorer &#39;er valgt");
define("_MD_AM_USESSL", "Brug SSL til login?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "SSL Post variabelnavnet");
define("_MD_AM_SSLPOSTDSC", "Navnet på variabel, der bruges til at overføre session værdi via POST. Hvis du er usikker, skal du indstille ethvert navn, der er svært at gætte.");
define("_MD_AM_DEBUGMODE0", "Off");
define("_MD_AM_DEBUGMODE1", "Aktiver debug (inline-tilstand)");
define("_MD_AM_DEBUGMODE2", "Aktiver debug (popup-tilstand)");
define("_MD_AM_DEBUGMODE3", "Smarty skabeloner Debug");
define("_MD_AM_MINUNAME", "Mindste længde af brugernavn");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Maksimal længde af brugernavn");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Generelle indstillinger");
define("_MD_AM_USERSETTINGS", "Bruger indstillinger");
define("_MD_AM_ALLWCHGMAIL", "Tillad brugere at ændre deres e-mail adresse?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP Spærring");
define("_MD_AM_BADEMAILS", "Indtast e-mails, der ikke må anvendes i brugerprofil");
define("_MD_AM_BADEMAILSDSC", "Opdel med en <strong>|</strong>,  ingen forskel på store og små bogstaver, regex aktiveret.");
define("_MD_AM_BADUNAMES", "Indtaste navne, der ikke må vælges som brugernavn");
define("_MD_AM_BADUNAMESDSC", "Særskilt hver med en <strong>|,</strong> sag ufølsomme, regex aktiveret.");
define("_MD_AM_DOBADIPS", "Aktiver IP spærring?");define("_MD_AM_INDEXFOLLOW", "Index, Follow");
define("_MD_AM_NOINDEXFOLLOW", "No Index, Follow");
define("_MD_AM_INDEXNOFOLLOW", "Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW", "No Index, No Follow");
define("_MD_AM_METAAUTHOR", "Meta Author");
define("_MD_AM_DOBADIPSDSC", "Brugere fra bestemte IP-adresser vil ikke være i stand til at se dit websted");
define("_MD_AM_BADIPS", "Indtast IP-adresser, der skal udelukket fra sitet. <br /> Særskilt hver med en <strong>|</strong>, ingen forskel på store og små bogstaver, regex aktiveret.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc vil afvise besøgende med en IP der starter med aaa.bbb.ccc <br /> aaa.bbb.ccc$ vil afvise besøgende med en IP, der ender med aaa.bbb.ccc <br /> aaa.bbb.ccc vil ikke tillade besøgende med en IP, der indeholder aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Indstillinger");
define("_MD_AM_METAKEY", "Meta søgeord");
define("_MD_AM_METAKEYDSC", "De søgeord meta-tag er en serie af søgeord, der repræsenterer indholdet på din side. Indtast søgeord med hver adskilt af et komma eller et mellemrum. (Ex. XOOPS, PHP, mySQL, portal-system)");
define("_MD_AM_METARATING", "Meta Rating");
define("_MD_AM_METARATINGDSC", "Rating metatag definerer dit websteds alder og indhold");
define("_MD_AM_METAOGEN", "Generelt");
define("_MD_AM_METAO14YRS", "14 år");
define("_MD_AM_METAOREST", "Begrænset");
define("_MD_AM_METAOMAT", "Ældre");
define("_MD_AM_METAROBOTS", "Meta Robotter");
define("_MD_AM_METAROBOTSDSC", "Robots Tag til søgemaskiner, hvilket indhold til indeks og spider");
define("_MD_AM_INDEXFOLLOW", "Indeks, Følg");
define("_MD_AM_NOINDEXFOLLOW", "Ingen Index, Følg");
define("_MD_AM_INDEXNOFOLLOW", "Indeks, nr. Følg");
define("_MD_AM_NOINDEXNOFOLLOW", "Ingen Index, nr. Følg");
define("_MD_AM_METAAUTHOR", "Meta Forfatter");
define("_MD_AM_METAAUTHORDSC", "Forfatteren metatag definerer navnet på forfatteren af det dokument, der læses. Understøttet dataformater omfatte navn, e-mail adresse på webmasteren, firmanavn eller webadresse.");
define("_MD_AM_METACOPYR", "Meta Copyright");
define("_MD_AM_METACOPYRDSC", "Copyright metatag definerer enhver ophavsret udsagn du ønsker at oplyse om din webside dokumenter.");
define("_MD_AM_METADESC", "Meta Description");
define("_MD_AM_METADESCDSC", "Beskrivelsen meta-tag er en generel beskrivelse af, hvad der er indeholdt i din webside");
define("_MD_AM_METAFOOTER", "Meta Tags og sidefod");
define("_MD_AM_FOOTER", "Sidefod");
define("_MD_AM_FOOTERDSC", "Sørg for at skrive links i fuld sti fra http://, ellers links vil ikke virke korrekt i moduler sider.");
define("_MD_AM_CENSOR", "Censurering");
define("_MD_AM_DOCENSOR", "Aktiver censurering af uønskede ord?");
define("_MD_AM_DOCENSORDSC", "Ord vil blive censureret, hvis denne indstilling er aktiveret. Denne indstilling kan være slået fra, for øget site hastighed.");
define("_MD_AM_CENSORWRD", "Ord der skal censureres");
define("_MD_AM_CENSORWRDDSC", "Indtast ord der skal censureres i brugernes indlæg. <br /> Særskilt hver med en <strong>|</strong>, der skelnes mellem store og små bogstaver.");
define("_MD_AM_CENSORRPLC", "Censurerede ord vil blive erstattet med:");
define("_MD_AM_CENSORRPLCDSC", "Censurerede ord vil blive erstattet med de indtastede tegn i dette tekstfelt");

define("_MD_AM_SEARCH", "Søgemuligheder");
define("_MD_AM_DOSEARCH", "Aktiver globale søgninger?");
define("_MD_AM_DOSEARCHDSC", "Tillad søgning efter indlæg/emner på din side.");
define("_MD_AM_MINSEARCH", "Minimum søgeords længde");
define("_MD_AM_MINSEARCHDSC", "Indtast den mindste søgeords længde, som brugerne skal indtaste for at udføre søgningen");
define("_MD_AM_MODCONFIG", "Modul konfiguration");
define("_MD_AM_DSPDSCLMR", "Vis ansvarsfraskrivelse?");
define("_MD_AM_DSPDSCLMRDSC", "Vælg Ja for at vise ansvarsfraskrivelse i registrering side");
define("_MD_AM_REGDSCLMR", "Registrerings ansvarsfraskrivelse");
define("_MD_AM_REGDSCLMRDSC", "Indtast tekst der skal vises som ansvarsfraskrivelse");
define("_MD_AM_ALLOWREG", "Tillad ny brugerregistrering?");
define("_MD_AM_ALLOWREGDSC", "Vælg Ja for at acceptere nye brugerregistrering");
define("_MD_AM_THEMEFILE", "Check skabeloner for ændringer?");
define("_MD_AM_THEMEFILEDSC", "Hvis denne indstilling er aktiveret, vil ændrede skabeloner automatisk blive genoversat, når de vises. Du skal slå denne funktion fra på en færdig side.");
define("_MD_AM_CLOSESITE", "Gør din hjemmeside utilgængelig?");
define("_MD_AM_CLOSESITEDSC", "Vælg Ja for at slå dit websted fra, så kun brugere i udvalgte grupper har adgang til webstedet.");
define("_MD_AM_CLOSESITEOK", "Vælg grupper, der får lov til at få adgang, mens webstedet er slået fra.");
define("_MD_AM_CLOSESITEOKDSC", "Brugere i standard webmaster gruppen er altid adgang.");
define("_MD_AM_CLOSESITETXT", "Årsag til at lukket for siden");
define("_MD_AM_CLOSESITETXTDSC", "Den tekst, der vises, når siten er lukket.");
define("_MD_AM_SITECACHE", "Sitets Cache");
define("_MD_AM_SITECACHEDSC", "Cacher hele indholdet af hjemmesiden i en bestemt tid for at forbedre ydeevnen. Indstilling af hele webstedet cache vil overskrive modul-niveau cache, block-level cache, og modul enhed cache, hvis de er defineret nogen.");
define("_MD_AM_MODCACHE", "Modul-dækkende Cache");
define("_MD_AM_MODCACHEDSC", "Caches modul indhold i en bestemt tid for at forbedre ydeevnen. Indstillingen vil overskrive modul-niveau cache, hvis nogen.");
define("_MD_AM_NOMODULE", "Der er ingen modul, der kan caches.");
define("_MD_AM_DTPLSET", "Standardskabelon sæt");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "URL hvor SSL loginside ligger");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "Mail opsætning");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "FRA-adresse");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "Fra navn");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Fra bruger");
define("_MD_AM_MAILFROMUIDDESC", "Når systemet sender en privat besked, som brugeren skal synes at have sendt den?");
define("_MD_AM_MAILERMETHOD", "Mail leveringsmetode");
define("_MD_AM_MAILERMETHODDESC", "Metode, der anvendes til at levere post. Standarden er \\ &quot;post \\&quot;, brug andre kun, hvis det gør problemer.");
define("_MD_AM_SMTPHOST", "SMTP host (s)");
define("_MD_AM_SMTPHOSTDESC", "Liste over SMTP-servere til at forsøge at oprette forbindelse til.");
define("_MD_AM_SMTPUSER", "SMTPAuth brugernavn");
define("_MD_AM_SMTPUSERDESC", "Brugernavn til at oprette forbindelse til en SMTP vært med SMTPAuth.");
define("_MD_AM_SMTPPASS", "SMTPAuth adgangskode");
define("_MD_AM_SMTPPASSDESC", "Adgangskode til en SMTP vært med SMTPAuth.");
define("_MD_AM_SENDMAILPATH", "Sti til sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Sti til sendmail programmet (eller stedfortræder) på webserveren.");
define("_MD_AM_THEMEOK", "Valgbar temaer");
define("_MD_AM_THEMEOKDSC", "Vælg de temaer, som brugerne kan vælge som standard tema");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC", "Dette er adressen på den SOAP serveren.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Der");
define("_MD_AM_SOAP_PROVISIONDESC", "Hvis du vil have den nye tildelt brugeren, siger &quot;ja&quot;");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank på levering");
define("_MD_AM_SOAP_PROVISIONGROUPDESC", "Dette er den rangerer en ny bruger fra sæbe serveren er sat i.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC", "Hvis du har brug for en WDSL SOAP service kan du aktiverer denne mulighed.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Brugernavn");
define("_MD_AM_SOAP_USERNAMEDESC", "Dette er brugernavnet på din konto på SOAP serveren.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP Password");
define("_MD_AM_SOAP_PASSWORDDESC", "Hvis du har brug for en adgangskode med SOAP tjeneste sætte det ind her.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client Alive");
define("_MD_AM_SOAP_KEEPCLIENTDESC", "Hold SOAP Client Alive.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Særlige konti");
define("_MD_AM_SOAP_FILTERPERSONDESC", "Særlige konti, der bruger XOOPS godkendelse.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy Værtsnavn");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC", "SOAP Servere Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC", "SOAP Servere Proxy Server Port Number <br> dvs: 0 til 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy Brugernavn");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC", "SOAP Servere Proxy Server Brugernavn");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy Kodeord");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC", "SOAP Servere Proxy Server Password.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP-timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC", "Hold SOAP Query Alive til <strong>xx</strong> sekunder.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP Response timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC", "Hold SOAP Query Alive til <strong>xx</strong> sekunder.");
define("_MD_AM_SOAP_FIELDMAPPING", "XOOPS-Auth server felt mappning");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Beskriv her mapningen mellem XOOPS database feltet og LDAP Authentication feltet." .
		"<br><br>Format [Xoops Database felt]=[Auth system SOAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Adskil hvert felt med |" .
		"<br><br>!! For øvede brugere !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS Database");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Standard LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "XOOPS SOAP Authentication");
define("_MD_AM_AUTHENTICATION", "Godkendelses Valg");
define("_MD_AM_AUTHMETHOD", "Godkendelsesmetode");
define("_MD_AM_AUTHMETHODDESC", "Hvilken godkendelsesmetode vil du benytte når brugerne skal logge ind.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Mail felt");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "Navnet på E-Mail attributen i dit LDAP træ.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - Common name felt");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "Navnet på Common name attributteten i dit LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Efternavn feltet");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "Navnet på Efternavn attributen i dit LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Fornavn feltet");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "Navnet på Fornavn attributen i dit LDAP.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "Basen DN (Distinguished Name) i dit LDAP-træ.");
define("_MD_AM_LDAP_PORT", "LDAP - Port Number");
define("_MD_AM_LDAP_PORT_DESC", "Portnummeret er nødvendige for at få adgang til din LDAP-server.");
define("_MD_AM_LDAP_SERVER", "LDAP - Servernavn");
define("_MD_AM_LDAP_SERVER_DESC", "Navnet på din LDAP-server.");

define("_MD_AM_LDAP_MANAGER_DN", "DN i LDAP manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN på den bruger mulighed for at gøre søgningen (f.eks manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Adgangskoden til LDAP manager");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Adgangskoden for den bruger der har mulighed for at søge i dit LDAP");
define("_MD_AM_LDAP_VERSION", "LDAP Version protokol");
define("_MD_AM_LDAP_VERSION_DESC", "LDAP Version protokol: 2 eller 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Brugere med rettighed til at omgå LDAP-godkendelse");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Brugere, der skal autentificeres med normal XOOPS");

define("_MD_AM_LDAP_USETLS", "Brug TLS-forbindelse");
define("_MD_AM_LDAP_USETLS_DESC", "Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
                                  " and the LDAP version must be set to 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "LDAP Attribut bruges til at søge efter brugeren");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "Når Login-navn anvendes i DN er indstillingen sat til Ja, dette skal være lig login-navn XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Loginnavnet brugt i DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Det XOOPS login-navn som bruges i LDAP DN (f.eks: uid = <loginname> , Dc = Xoops, dc = org) <br> Punktet er direkte aflæst i LDAP-server uden søgning");

define("_MD_AM_LDAP_FILTER_PERSON", "Søgefilteret LDAP forespørgsel til at søge brugeren");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
        "<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
        "<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Domænenavnet");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows domænenavn. for ADS og NT Server kun");

define("_MD_AM_LDAP_PROVIS", "Automatisk XOOPS konto provisionning");
define("_MD_AM_LDAP_PROVIS_DESC", "Opret XOOPS bruger database, hvis den ikke findes");

define("_MD_AM_LDAP_PROVIS_GROUP", "Standard gruppe");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Den nye bruger indmeldes i disse grupper");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "XOOPS-Auth server felt mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
        "<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
        "<br />for example : email=mail" .
        "<br />Separate each with a |" .
        "<br /><br />!! For advanced users !!");

define("_MD_AM_LDAP_PROVIS_UPD", "Bibehold XOOPS konto provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "XOOPS Brugerkonti er altid synkroniseret med Authentication Server");


define("_MD_AM_CPANEL", "Kontrolpanel GUI");
define("_MD_AM_CPANELDSC", "For backend");

define("_MD_AM_WELCOMETYPE", "Afsendelse af velkomstmeddelelse");
define("_MD_AM_WELCOMETYPE_DESC", "Den måde der benyttes til at sende en velkomstbesked til nye brugere, efter succesfuld registrering.");
define("_MD_AM_WELCOMETYPE_EMAIL", "E-mail");
define("_MD_AM_WELCOMETYPE_PM", "Meddelelse");
define("_MD_AM_WELCOMETYPE_BOTH", "E-mail og meddelelse");

define("_MD_AM_MODULEPREF", "Modul Indstillinger");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS", "System Indstillinger");
?><?php // Translation done by xtransam & anderssk - 2010-10-19 07:12 ?>
