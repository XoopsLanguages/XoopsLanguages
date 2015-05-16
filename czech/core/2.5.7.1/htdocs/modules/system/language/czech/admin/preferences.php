<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    cs
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 12596 2014-06-14 17:05:46Z beckmi $
 */
// don't change
define('_AM_DBUPDATED',_AM_SYSTEM_DBUPDATED);
//Nav
define('_AM_SYSTEM_PREFERENCES_NAV_MAIN',"Systémové předvolby");
//Tips
define('_AM_SYSTEM_PREFERENCES_NAV_TIPS',"<ul><li>Správa systémových nastavení webu.</li></ul>");
define('_MD_AM_SITEPREF',"Nastavení stránek");
define('_MD_AM_SITENAME',"Název webu");
define('_MD_AM_SITENAMEDSC',"");
define('_MD_AM_SLOGAN',"Slogan");
define('_MD_AM_SLOGANDSC',"");
define('_MD_AM_ADMINML',"Email administrátora");
define('_MD_AM_ADMINMLDSC',"");
define('_MD_AM_LANGUAGE',"Výchozí jazyk");
define('_MD_AM_LANGUAGEDSC',"");
define('_MD_AM_STARTPAGE',"Modul pro hlavní stránku");
define('_MD_AM_STARTPAGEDSC',"");
define('_MD_AM_NONE',"Žádný");
define('_MD_AM_SERVERTZ',"Časová zóna serveru");
define('_MD_AM_SERVERTZDSC',"");
define('_MD_AM_DEFAULTTZ',"Výchozí časová zóna");
define('_MD_AM_DEFAULTTZDSC',"");
define('_MD_AM_DTHEME',"Výchozí vzhled");
define('_MD_AM_DTHEMEDSC',"");
define('_MD_AM_THEMESET',"Nastavení vzhledu");
define('_MD_AM_CUSTOM_REDIRECT',"Použít přesměrování pomocí jGrowl?");
define('_MD_AM_CUSTOM_REDIRECT_DESC',"Místo starého způsobu přesměrování se použije moderní jGrowl.<br />jGrowl využívá technologii jQuery a zobrazuje nenápadné zprávy přímo na stránce, bez znovunačítání stránek.");
define('_MD_AM_ANONNAME',"Uživatelské jméno anonymních návštěvníků");
define('_MD_AM_ANONNAMEDSC',"");
define('_MD_AM_MINPASS',"Minimální délka hesla");
define('_MD_AM_MINPASSDSC',"");
define('_MD_AM_NEWUNOTIFY',"Upozornit emailem na registraci nového uživatele?");
define('_MD_AM_NEWUNOTIFYDSC',"");
define('_MD_AM_SELFDELETE',"Mohou uživatelé smazat svůj účet?");
define('_MD_AM_SELFDELETEDSC',"");
define('_MD_AM_USEGZIP',"Použít kompresy gzip?");
define('_MD_AM_USEGZIPDSC',"");
define('_MD_AM_UNAMELVL',"Omezení znaků pro uživatelské jména"); // Select the level of strictness for username filtering
define('_MD_AM_UNAMELVLDSC',"");
define('_MD_AM_STRICT',"Přísné (pouze písmena a číslice)");
define('_MD_AM_MEDIUM',"Střední");
define('_MD_AM_LIGHT',"Lehké (doporučeno pro multi-byte znaky)");
define('_MD_AM_USERCOOKIE',"Jméno uživatelských cookies.");
define('_MD_AM_USERCOOKIEDSC',"Nastavením jména této cookie, povolíte funkci 'Pamatuj si mne'. Pokud uživatel povolí fuknci 'Pamatuj si mne', bude přihlášen automaticky. Doba platnosti této cookie je jeden rok.");
define('_MD_AM_USEMYSESS',"Použít uživatelské nastavení session?");
define('_MD_AM_USEMYSESSDSC',"Pokud chcete použít vlastní nastavení session, zapněte tuto volbu.");
define('_MD_AM_SESSNAME',"Název session");
define('_MD_AM_SESSNAMEDSC',"Jméno session <br>(Použije se pouze v případě, že je nastavená volba 'Použít uživatelské nastavení session?'.)");
define('_MD_AM_SESSEXPIRE',"Doba platnosti session");
define('_MD_AM_SESSEXPIREDSC',"Maximální délka platnosti session, hodnotou jsou minuty. (<br>(Použije se pouze v případě, že je nastavená volba 'Použít uživatelské nastavení session?'.)");
define('_MD_AM_BANNERS',"Aktivovat reklamní banery?");
define('_MD_AM_BANNERSDSC',"");
define('_MD_AM_MYIP',"Vaše IP adresa");
define('_MD_AM_MYIPDSC',"Tato IP adresa se nebude započítávat do statistik zobrazení banerů.");
define('_MD_AM_ALWDHTML',"Povolené HTML znaky."); //  tags allowed in all posts
define('_MD_AM_INVLDMINPASS',"Chybná hodnota minimální délky hesla.");
define('_MD_AM_INVLDUCOOK',"Chybná hodnota pro uživatelskou cookie.");
define('_MD_AM_INVLDSCOOK',"Chybná hodnota názvu Session Cookie.");
define('_MD_AM_INVLDSEXP',"Chybná hodnota doby platnosti session.");
define('_MD_AM_ADMNOTSET',"Není nastavený email na administrátora.");
define('_MD_AM_YES',"Ano");
define('_MD_AM_NO',"Ne");
define('_MD_AM_DONTCHNG',"Neměnit!");
define('_MD_AM_REMEMBER',"Nezapomeňte změnit oprávnění k tomuto souboru na 644, jenom tak může systém dobře fungovat.");
define('_MD_AM_IFUCANT',"Pokud nemůžete oprávnění změnit, musíte upravit soubor ručně.");
define('_MD_AM_COMMODE',"Výchozí způsob zobrazení komentářů");
define('_MD_AM_COMMODEDSC',"");
define('_MD_AM_COMORDER',"Výchozí řazení komentářů");
define('_MD_AM_COMORDERDSC',"");
define('_MD_AM_ALLOWHTML',"Povolit HTML v komentářích?");
define('_MD_AM_DEBUGMODE',"Režim ladění");
define('_MD_AM_DEBUGMODEDSC',"Možnosti zobrazení ladících informací. Na běžících stránkách by měla být volba vypnutá.");
define('_MD_AM_AVATARALLOW',"Povolit nahrávání uživatelských avatarů?");
define('_MD_AM_AVATARALWDSC',"");
define('_MD_AM_AVATARMP',"Minimální počet příspěvků");
define('_MD_AM_AVATARMPDSC',"Určuje minimální počet příspěvků pro povolení nahrát svého avatara. Uživatel s méně příspěvky nemůže nahrávat avatary.");
define('_MD_AM_AVATARW',"Maximální šířka obrázku avatara (pixelů)");
define('_MD_AM_AVATARWDSC',"");
define('_MD_AM_AVATARH',"Maximální výška obrázků avatara (pixelů)");
define('_MD_AM_AVATARHDSC',"");
define('_MD_AM_AVATARMAX',"Maximální velikost souboru (bytů)");
define('_MD_AM_AVATARMAXDSC',"");
define('_MD_AM_AVATARCONF',"Nastavení uživatelských avatarů");
define('_MD_AM_NOTIFYTO',"Vyberte skupinu, které bude odeslána informace o nové registraci");
define('_MD_AM_NOTIFYTODSC',"");
define('_MD_AM_ALLOWTHEME',"Povolit uživatelům přepínat vzhledy?");
define('_MD_AM_ALLOWIMAGE',"Povolit uživatelům zobrazovat obrázky v příspěvcích?");
define('_MD_AM_USERACTV',"Vyžaduje aktivaci uživatelem (doporučená volba)");
define('_MD_AM_AUTOACTV',"Automatická aktivace");
define('_MD_AM_ADMINACTV',"Aktivace administrátorem");
define('_MD_AM_ACTVTYPE',"Vyberte typ aktivace nového účtu");
define('_MD_AM_ACTVTYPEDSC',"");
define('_MD_AM_ACTVGROUP',"Vyberte skupinu, které bude odeslána žádost o aktivaci");
define('_MD_AM_ACTVGROUPDSC',"Platné pouze v případě, že je zvolená 'Aktivace administrátorem'.");
define('_MD_AM_USESSL',"Použít pro přihlášení SSL?");
define('_MD_AM_USESSLDSC',"SSL se používá pro bezpečné přihlášení a vyžaduje použití certifikátů. Pokud chcete funkci povolit, domluvte se s administrátory serveru jak získat potřebný certifikát pro svoje stránky.");
define('_MD_AM_SSLPOST',"Název proměnné pro SSL"); //  Post variable name
define('_MD_AM_SSLPOSTDSC',"Jméno proměnné, použité pro přenos session přes POST. Pokud si nejste jisti, napište libovolné slovo, které je těžké uhodnout.");
define('_MD_AM_DEBUGMODE0',"Ladění vypnuto");
define('_MD_AM_DEBUGMODE1',"Ladění zapnuto (informace v řádku)");
define('_MD_AM_DEBUGMODE2',"Ladění zapnuto (vyskakovací okno)");
define('_MD_AM_DEBUGMODE3',"Ladění šablon Smarty");
define('_MD_AM_MINUNAME',"Minimální vyžadovaná délka uživatelského jména");
define('_MD_AM_MINUNAMEDSC',"");
define('_MD_AM_MAXUNAME',"Maximální povolené délka uživatelského jména");
define('_MD_AM_MAXUNAMEDSC',"");
define('_MD_AM_GENERAL',"Hlavní nastavení");
define('_MD_AM_USERSETTINGS',"Nastavení uživatelů");
define('_MD_AM_ALLWCHGMAIL',"Povolit uživatelům měnit emailovou adresu?");
define('_MD_AM_ALLWCHGMAILDSC',"");
define('_MD_AM_IPBAN',"Blokování IP adres");
define('_MD_AM_BADEMAILS',"Seznam emailových adres, které nelze použít pro registraci profilu");
define('_MD_AM_BADEMAILSDSC',"Adresy odděluje znakem <strong>|</strong>, nerozlišují se velká a malá písmena, lze použít regulární výrazy.");
define('_MD_AM_BADUNAMES',"Seznam slov, která nemohou být použita jako uživatelská jména"); // Enter names that should not be selected as username
define('_MD_AM_BADUNAMESDSC',"Slova odděluje znakem <strong>|</strong>, nerozlišují se velká a malá písmena, lze použít regulární výrazy.");
define('_MD_AM_DOBADIPS',"Povolit blokování IP adres?");
define('_MD_AM_DOBADIPSDSC',"Uživatelé s definovanou IP adresou nebudou mít přístup k webu.");
define('_MD_AM_BADIPS',"Sem napište seznamy IP adresech, ze kterých chcete zakázat přístup.<br />Adresy oddělujte znakem <strong>|</strong>, není třeba rozlišovat velká a mají písmena, jsou povoleny regulární výrazy (takže - '.' znamená 'libovolný znak' a '\.' znamená '.').");
define('_MD_AM_BADIPSDSC',"^aaa\.bbb\.ccc zakáže přístup všem uživatelům, jejichž IP adresa začíná na aaa.bbb.ccc<br />aaa\.bbb\.ccc$ zakáže přístup všem uživatelům, jejichž IP adresa končí na aaa.bbb.ccc<br />aaa\.bbb\.ccc zakáže přístup všem uživatelům, jejichž IP adresa obsahuje aaa.bbb.ccc");
define('_MD_AM_PREFMAIN',"Hlavní předvolby");
define('_MD_AM_METAKEY',"Klíčová slova do meta informací");
define('_MD_AM_METAKEYDSC',"Tento tag určuje klíčová slova, která reprezentují Vaše stránky. Klíčová slova pište za sebou a oddělujte je buď čárkou, nebo mezerou mezi slovy. Například XOOPS, PHP, mySQL, portal system...");
define('_MD_AM_METARATING',"Meta tag - Rating");
define('_MD_AM_METARATINGDSC',"Tento tag určuje hodnocení stránek z pohledu jejich vhodnosti pro děti.");
define('_MD_AM_METAOGEN',"Přístupné (general)");
define('_MD_AM_METAO14YRS',"Od 14 let (14 years)");
define('_MD_AM_METAOREST',"S omezením (Restricted)");
define('_MD_AM_METAOMAT',"Pro dospělé (Mature)");
define('_MD_AM_METAROBOTS',"Meta tag - Robots");
define('_MD_AM_METAROBOTSDSC',"Tento tag je určený vyhledávacím robotům a určuje, jak se mají na stránkách chovat."); // The Robots Tag declares to search engines what content to index and spider
define('_MD_AM_INDEXFOLLOW',"Index, Follow");
define('_MD_AM_NOINDEXFOLLOW',"No Index, Follow");
define('_MD_AM_INDEXNOFOLLOW',"Index, No Follow");
define('_MD_AM_NOINDEXNOFOLLOW',"No Index, No Follow");
define('_MD_AM_METAAUTHOR',"Meta tag - Autor");
define('_MD_AM_METAAUTHORDSC',"Tento tag obsahuje autota textu, které uživatel čte. Může obsahovat jeho jméno, emailovou adresu, název firmy nebo WWW adresu.");
define('_MD_AM_METACOPYR',"Meta tag - Copyright");
define('_MD_AM_METACOPYRDSC',"Tento tag určuje prohlášení o autorských právech."); // The copyright meta tag defines any copyright statements you wish to disclose about your web page documents
define('_MD_AM_METADESC',"Meta tag - description");
define('_MD_AM_METADESCDSC',"Tento tag obsahuje obecný popis obsahu Vašich stránek.");
define('_MD_AM_METAFOOTER',"Meta tagy a patička");
define('_MD_AM_FOOTER',"Patička");
define('_MD_AM_FOOTERDSC',"Pokud píšete do patičky odkaz, je potřeba jej napsat celý, včetně http://, jinak odkazy nefungují správně.");
define('_MD_AM_CENSOR',"Nastavení kontroly slov - cenzura");
define('_MD_AM_DOCENSOR',"Povolit kontrolu slov?");
define('_MD_AM_DOCENSORDSC',"Kontrola slov zdržuje provoz, takže pokud potřebujete vyšší rychlost, kontrolu vypněte.");
define('_MD_AM_CENSORWRD',"Nedovolená slova");
define('_MD_AM_CENSORWRDDSC',"Napište slova, které v příspěvcích uživatelů nechcete.<br />Oddělujte je znakem <strong>|</strong>, cenzor nerozlišuje velikost písmen.");
define('_MD_AM_CENSORRPLC',"Nedovolená slova budou nahrazena:");
define('_MD_AM_CENSORRPLCDSC',"Nedovolená slova budou nahrazena znaky z tohoto pole.");
define('_MD_AM_SEARCH',"Nastavení hledacího stroje");
define('_MD_AM_DOSEARCH',"Povolit globální hledání?");
define('_MD_AM_DOSEARCHDSC',"Allow searching for posts/items within your site.");
define('_MD_AM_MINSEARCH',"Minimální délka klíčového slova");
define('_MD_AM_MINSEARCHDSC',"Enter the minimum keyword length that users are required to enter to perform search");
define('_MD_AM_MODCONFIG',"Nastavení konfigurace modulů");
define('_MD_AM_DSPDSCLMR',"Zobrazovat právní doložku?");                // Display disclaimer
define('_MD_AM_DSPDSCLMRDSC',"Select yes to display disclaimer in registration page");
define('_MD_AM_REGDSCLMR',"Právní doložka"); // Registration disclaimer
define('_MD_AM_REGDSCLMRDSC',"Enter text to be displayed as registration disclaimer");
define('_MD_AM_ALLOWREG',"Povolit registrace nových uživatelů?");
define('_MD_AM_ALLOWREGDSC',"Pokud chcete dovolit registraci nových uživatelů, nastavta tuto volbu na \"ano\".");
define('_MD_AM_THEMEFILE',"Kontrolovat změny v šablonách?");
define('_MD_AM_THEMEFILEDSC',"Pokud tuto volbu povolíte, budou se všechny šablony před použitím aktualizovat a znovu kompilovat.<br>U běžícího webu je potřeba funkci vypnout, protože velmi zdržuje zobrazení.");
define('_MD_AM_CLOSESITE',"Vypnout stránky?");
define('_MD_AM_CLOSESITEDSC',"Touto volbou můžete vypnout stránky z provozu. Přístup k nim pak budou mít jen vybrané skupiny uživatelů.");
define('_MD_AM_CLOSESITEOK',"Skupiny, které mají přístup i k vypnutému webu.");
define('_MD_AM_CLOSESITEOKDSC',"Uživatelé ze skupint administrátorů mají přístup vždy.");
define('_MD_AM_CLOSESITETXT',"Důvod vypnutí stránek");
define('_MD_AM_CLOSESITETXTDSC',"Pokud vypnete web, zobrazí se tento text všecm uživatelům místo normálního obsahu.");
define('_MD_AM_SITECACHE',"Vyrovnávací paměť stránek"); // Site-wide Cache
define('_MD_AM_SITECACHEDSC',"Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.");
define('_MD_AM_MODCACHE',"Vyrovnávací paměť modulů"); // Module-wide Cache
define('_MD_AM_MODCACHEDSC',"Caches module contents for a specified amount of time to enhance performance. Setting module-wide cache will override module item level cache if any.");
define('_MD_AM_NOMODULE',"Žádný modul nelze vložit do dočasné paměti."); // There is no module that can be cached.
define('_MD_AM_DTPLSET',"Výchozí sada šablon");
define('_MD_AM_DTPLSETDSC',"");
define('_MD_AM_SSLLINK',"Adresa stránky pro SSL přihlášení");
define('_MD_AM_SSLLINKDSC',"");
// added for mailer
define('_MD_AM_MAILER',"Nastavení emailu");
define('_MD_AM_MAILER_MAIL',"");
define('_MD_AM_MAILER_SENDMAIL',"");
define('_MD_AM_MAILER_',"");
define('_MD_AM_MAILFROM',"Adresa OD");
define('_MD_AM_MAILFROMDESC',"Tato adresa se zobrazí jako odesílatel emailu. Příjemce na ní pak může odpovědět.");
define('_MD_AM_MAILFROMNAME',"Jméno OD");
define('_MD_AM_MAILFROMNAMEDESC',"Toto jméno se zobrazí jako odesílatel emailu. Pokud není nastavené, většina poštovních programů místo jména zobrazí email.");
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID',"Uživatel OD");
define('_MD_AM_MAILFROMUIDDESC',"Pokud systém odešla soukromou zprávu, použije jako odesílatele tohoto uživatele.");
define('_MD_AM_MAILERMETHOD',"Způsob odeslání emailu");
define('_MD_AM_MAILERMETHODDESC',"Vyberte způsob, jak má XOOPS poslat email. Doporučená volba je \"mail\", ostantí použijte jen v případě potíží.");
define('_MD_AM_SMTPHOST',"SMTP servery");
define('_MD_AM_SMTPHOSTDESC',"Seznam SMTP serverů pomocí kterých se XOOPS pokusí odeslat email.");
define('_MD_AM_SMTPUSER',"Uživatelské jméno pro SMTP server");
define('_MD_AM_SMTPUSERDESC',"Uživatelské jméno pro připojení k SMTP serveru, které vyžaduje autorizaci (SMTPAuth).");
define('_MD_AM_SMTPPASS',"Heslo pro SMTP server");
define('_MD_AM_SMTPPASSDESC',"Heslo pro připojení k SMTP serveru (SMTPAuth).");
define('_MD_AM_SENDMAILPATH',"Cesta k programu <b>sendmail</b>");
define('_MD_AM_SENDMAILPATHDESC',"Cesta k programu sendmail (nebo jeho zástupci) na serveru.");
define('_MD_AM_THEMEOK',"Dostupné vzhledy"); // Selectable themes
define('_MD_AM_THEMEOKDSC',"Vyberte vzhledy, mezi kterými si mohou uživatelé vybírat.");
// SOAP Clauses
define('_MD_AM_SOAP_CLIENT',"SOAP - SOAP API");
define('_MD_AM_SOAP_CLIENTDESC',"This is the address of the soap server.");
define('_MD_AM_SOAP_PROVISION',"SOAP - Provision");
define('_MD_AM_SOAP_PROVISIONDESC',"If you want the new user provisioned, say 'yes'");
define('_MD_AM_SOAP_PROVISIONGROUP',"SOAP - Rank to Provision");
define('_MD_AM_SOAP_PROVISIONGROUPDESC',"This is the ranks a new user from the soap server is put in.");
define('_MD_AM_SOAP_WSDL',"SOAP - SOAP WSDL");
define('_MD_AM_SOAP_WSDLDESC',"If you need a wdsl soap service enable this option.");
define('_MD_AM_SOAP_USERNAME',"SOAP - SOAP Username");
define('_MD_AM_SOAP_USERNAMEDESC',"This is the username of your account on the soap server.");
define('_MD_AM_SOAP_PASSWORD',"SOAP - SOAP Password");
define('_MD_AM_SOAP_PASSWORDDESC',"If you need a password with the soap service put it in here.");
define('_MD_AM_SOAP_KEEPCLIENT',"SOAP - Client Alive");
define('_MD_AM_SOAP_KEEPCLIENTDESC',"Keep The Soap Client Alive.");
define('_MD_AM_SOAP_FILTERPERSON',"SOAP - Special Accounts");
define('_MD_AM_SOAP_FILTERPERSONDESC',"Special Accounts that use Xoops Authentication.");
define('_MD_AM_SOAP_CLIENTPROXYHOST',"SOAP - Proxy Hostname");
define('_MD_AM_SOAP_CLIENTPROXYHOSTDESC',"SOAP Servers Proxy Server.");
define('_MD_AM_SOAP_CLIENTPROXYPORT',"SOAP - Proxy port");
define('_MD_AM_SOAP_CLIENTPROXYPORTDESC',"SOAP Servers Proxy Server Port Number <br>ie: 0 - 65535");
define('_MD_AM_SOAP_CLIENTPROXYUSERNAME',"SOAP - Proxy Username");
define('_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC',"SOAP Servers Proxy Server Username");
define('_MD_AM_SOAP_CLIENTPROXYPASSWORD',"SOAP - Proxy Password");
define('_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC',"SOAP Servers Proxy Server Password.");
define('_MD_AM_SOAP_SOAP_TIMEOUT',"SOAP - SOAP Timeout");
define('_MD_AM_SOAP_SOAP_TIMEOUTDESC',"Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define('_MD_AM_SOAP_SOAP_RESPONSETIMEOUT',"SOAP - SOAP Response Timeout");
define('_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC',"Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define('_MD_AM_SOAP_FIELDMAPPING',"Xoops-Auth server fields mapping");
define('_MD_AM_SOAP_FIELDMAPPINGDESC',"Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
        "<br><br>Format [Xoops Database field]=[Auth system SOAP attribute]" .
        "<br>for example : email=mail" .
        "<br>Oddělujte je znakem |" .
        "<br><br>!! Pouze pro zkušené uživatele !!");
// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS',"Databáze XOOPS");
define('_MD_AM_AUTH_CONFOPTION_LDAP',"Standardní adresář LDAP");
define('_MD_AM_AUTH_CONFOPTION_AD',"Microsoft Active Directory &copy");
define('_MD_AM_AUTH_CONFOPTION_SOAP',"XOOPS Soap Authentication");
define('_MD_AM_AUTHENTICATION',"Nastavení ověřování"); // Authentication Options
define('_MD_AM_AUTHMETHOD',"Metoda ověření");
define('_MD_AM_AUTHMETHODDESC',"Which authentication method would you like to use for signing on users.");
define('_MD_AM_LDAP_MAIL_ATTR',"LDAP - Email Field Name");
define('_MD_AM_LDAP_MAIL_ATTR_DESC',"The name of the E-Mail attribute in your LDAP directory tree.");
define('_MD_AM_LDAP_NAME_ATTR',"LDAP - Common Name Field Name");
define('_MD_AM_LDAP_NAME_ATTR_DESC',"The name of the Common Name attribute in your LDAP directory.");
define('_MD_AM_LDAP_SURNAME_ATTR',"LDAP - Surname Field Name");
define('_MD_AM_LDAP_SURNAME_ATTR_DESC',"The name of the Surname attribute in your LDAP directory.");
define('_MD_AM_LDAP_GIVENNAME_ATTR',"LDAP - Given Name Field Name");
define('_MD_AM_LDAP_GIVENNAME_ATTR_DSC',"The name of the Given Name attribute in your LDAP directory.");
define('_MD_AM_LDAP_BASE_DN',"LDAP - Base DN");
define('_MD_AM_LDAP_BASE_DN_DESC',"The base DN (Distinguished Name) of your LDAP directory tree.");
define('_MD_AM_LDAP_PORT',"LDAP - Číslo portu");
define('_MD_AM_LDAP_PORT_DESC',"The port number needed to access your LDAP directory server.");
define('_MD_AM_LDAP_SERVER',"LDAP - Název serveru");
define('_MD_AM_LDAP_SERVER_DESC',"The name of your LDAP directory server.");
define('_MD_AM_LDAP_MANAGER_DN',"DN of the LDAP manager");
define('_MD_AM_LDAP_MANAGER_DN_DESC',"The DN of the user allow to make search (eg manager)");
define('_MD_AM_LDAP_MANAGER_PASS',"Password of the LDAP manager");
define('_MD_AM_LDAP_MANAGER_PASS_DESC',"The password of the user allow to make search");
define('_MD_AM_LDAP_VERSION',"LDAP verze protokolu");
define('_MD_AM_LDAP_VERSION_DESC',"The LDAP Version protocol : 2 or 3");
define('_MD_AM_LDAP_USERS_BYPASS',"Users allowed to bypass LDAP authentication");
define('_MD_AM_LDAP_USERS_BYPASS_DESC',"Users to be authenticated with native XOOPS method");
define('_MD_AM_LDAP_USETLS'," Use TLS connection");
define('_MD_AM_LDAP_USETLS_DESC',"Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
                                  " and the LDAP version must be set to 3.");

define('_MD_AM_LDAP_LOGINLDAP_ATTR',"LDAP Attribute use to search the user");
define('_MD_AM_LDAP_LOGINLDAP_ATTR_D',"When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define('_MD_AM_LDAP_LOGINNAME_ASDN',"Login name use in the DN");
define('_MD_AM_LDAP_LOGINNAME_ASDN_D',"The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");
define('_MD_AM_LDAP_FILTER_PERSON',"The search filter LDAP query to find user");
define('_MD_AM_LDAP_FILTER_PERSON_DESC',"Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
        "<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
        "<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");
define('_MD_AM_LDAP_DOMAIN_NAME',"The domain name");
define('_MD_AM_LDAP_DOMAIN_NAME_DESC',"Windows domain name. for ADS and NT Server only");
define('_MD_AM_LDAP_PROVIS',"Automatic XOOPS account provisionning");
define('_MD_AM_LDAP_PROVIS_DESC',"Create XOOPS user database if not exists");
define('_MD_AM_LDAP_PROVIS_GROUP',"Default affect group");
define('_MD_AM_LDAP_PROVIS_GROUP_DSC',"The new user is assign to these groups");
define('_MD_AM_LDAP_FIELD_MAPPING_ATTR',"Xoops-Auth server fields mapping");
define('_MD_AM_LDAP_FIELD_MAPPING_DESC',"Describe here the mapping between the XOOPS database field and the LDAP Authentication system field." .
        "<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
        "<br />for example : email=mail" .
        "<br />Oddělujte je znakem |" .
        "<br /><br />!! Pouze pro zkušené uživatele !!");
define('_MD_AM_LDAP_PROVIS_UPD',"Maintain XOOPS account provisionning");
define('_MD_AM_LDAP_PROVIS_UPD_DESC',"The XOOPS User account is always synchronized with the Authentication Server");
define('_MD_AM_CPANEL',"Vzhled řídícího panelu (GUI)"); // Control Panel GUI
define('_MD_AM_CPANELDSC',"For backend");
define('_MD_AM_WELCOMETYPE',"Poslat uvítací zprávu");
define('_MD_AM_WELCOMETYPE_DESC',"Vyberte kam poslat uvítací zprávu po úspěšné registraci.");
define('_MD_AM_WELCOMETYPE_EMAIL',"Email");
define('_MD_AM_WELCOMETYPE_PM',"Zpráva");
define('_MD_AM_WELCOMETYPE_BOTH',"Email a zpráva");
define('_MD_AM_MODULEPREF',"Předvolby modulu");
// Preference module system
define('_AM_SYSTEM_PREFERENCES_SETTINGS',"Nastavení systémového modulu");
