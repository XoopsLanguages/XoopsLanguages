<?php
// $Id: preferences.php,v 1.16 2003/03/29 15:49:35 w4z004 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","Nastavení");
define("_MD_AM_SITENAME","Název serveru");
define("_MD_AM_SLOGAN","Slogan");
define("_MD_AM_ADMINML","E-mail administrátora");
define("_MD_AM_LANGUAGE","Výchozí jazyk");
define("_MD_AM_STARTPAGE","Modul pro startovací stránku");
define("_MD_AM_NONE","Nic");
define("_MD_AM_SERVERTZ","Časová zóna serveru");
define("_MD_AM_DEFAULTTZ","Výchozí časová zóna");
define("_MD_AM_DTHEME","Výchozí vzhled");
define("_MD_AM_THEMESET","Nastavení vzhledu");
define("_MD_AM_ANONNAME","Pojmenování anonymního uživatele");
define("_MD_AM_MINPASS","Minimální délka hesla");
define("_MD_AM_NEWUNOTIFY","Upozonit e-mailem na registraci uživatele");
define("_MD_AM_SELFDELETE","Uživatel smí smazat vlastní účet");
define("_MD_AM_LOADINGIMG","Zobrazit obrázek Nahrávám...");
define("_MD_AM_USEGZIP","Použít gzip kompresi");
define("_MD_AM_UNAMELVL","Jak přísně bude kontrolováno uživatelské jméno");
define("_MD_AM_STRICT","Přísné (jen písmena a čísla)");
define("_MD_AM_MEDIUM","Střední");
define("_MD_AM_LIGHT","Volné (doporučeno pro multi-byte znaky)");
define("_MD_AM_USERCOOKIE","Název uživatelských cookies.");
define("_MD_AM_USERCOOKIEDSC","Toto cookie obsahuje pouze uživatelské jméno a je uloženo v uživatelském PC po dobu 1 roku (pokud to uživatel povolí). Pokud uživatel toto cookie povolí, jeho uživatelské jméno je automaticky vloženo do přihlašovacího pole.");
define("_MD_AM_USEMYSESS","Použít uživatelskou session");
define("_MD_AM_USEMYSESSDSC","Zvolte <b>ano</b> pro přizpůsobení hodnot souvisejících se session.");
define("_MD_AM_SESSNAME","Název session");
define("_MD_AM_SESSNAMEDSC","Název session (Platné pouze pokud je '<b>Použít uživatelskou session</b>' povoleno)");
define("_MD_AM_SESSEXPIRE","Životnost session");
define("_MD_AM_SESSEXPIREDSC","Max. trvání session v minutách (Platné pouze pokud je '<b>Použít uživatelskou session</b>' povoleno. Funkční pouze pod PHP4.2.0 a novějším.)");
define("_MD_AM_BANNERS","Aktivovat bannery");
define("_MD_AM_MYIP","Vaše IP adresa");
define("_MD_AM_MYIPDSC","Tato IP nebude počítána pro zobrazení banneru");
define("_MD_AM_ALWDHTML","HTML tagy povolené v příspěvcích.");
define("_MD_AM_INVLDMINPASS","Nedodržena minimální délku hesla.");
define("_MD_AM_INVLDUCOOK","Neplatná hodnota pro název uživatelské cookie.");
define("_MD_AM_INVLDSCOOK","Neplatná hodnota pro název sessioncookie.");
define("_MD_AM_INVLDSEXP","Neplatná hodnota pro životnost session.");
define("_MD_AM_ADMNOTSET","E-mail administrátora není zadán.");
define("_MD_AM_YES","Ano");
define("_MD_AM_NO","Ne");
define("_MD_AM_DONTCHNG","Beze změn!");
define("_MD_AM_REMEMBER","Nezapomeňte nastavit práva zápisu pro server (chmod 666) tohoto souboru.");
define("_MD_AM_IFUCANT","Nemůžete-li změnit práva zápisu tohoto souboru, můžete tento soubor upravit ručně.");


define("_MD_AM_COMMODE","Výchozí mód zobrazení komentářů");
define("_MD_AM_COMORDER","Výchozí řazení komentářů");
define("_MD_AM_ALLOWHTML","Povolit HTML tagy v uživatelských komentářích");
define("_MD_AM_DEBUGMODE","Mód ladění");
define("_MD_AM_DEBUGMODEDSC","Několik možností módu ladění. Pro normální zobrazování stránek nechte vypnuté.");
define("_MD_AM_AVATARALLOW","Povolit nahrání uživatelských ikon");
define('_MD_AM_AVATARMP','Minimální počet příspěvků');
define('_MD_AM_AVATARMPDSC','Zadejte minimální počet příspěvků pro povolení nahrání uživatelského avataru');
define("_MD_AM_AVATARW","Max. šířka obrázku Avataru (pixely)");
define("_MD_AM_AVATARH","Max výška obrázku Avataru (pixely)");
define("_MD_AM_AVATARMAX","Ma. velikost souboru Avataru (byty)");
define("_MD_AM_AVATARCONF","Uživatelské nastavení avatarů");
define("_MD_AM_CHNGUTHEME","Změnit vzhled všem uživatelům");
define("_MD_AM_NOTIFYTO","Uživatelská skupina, které se zašle upozornění o registraci nového uživatele");
define("_MD_AM_ALLOWTHEME","Uživatel si smí změnit vzhled");
define("_MD_AM_ALLOWIMAGE","Uživatel může v příspěvcích používat obrázky");

define("_MD_AM_USERACTV","Vyžadována aktivace účtu (doporučeno)");
define("_MD_AM_AUTOACTV","Automatická aktivace účtu");
define("_MD_AM_ADMINACTV","Aktivace administrátorem");
define("_MD_AM_ACTVTYPE","Vyberte typ aktivace pro účty nových uživatelů");
define("_MD_AM_ACTVGROUP","Uživatelská skupina, které bude zaslán aktivační e-mail");
define("_MD_AM_ACTVGROUPDSC","Platné pouze pokud je vybráno 'Aktivace administrátorem'");
define('_MD_AM_USESSL','Použít SSL pro přihlášení');
define('_MD_AM_SSLPOST','Název proměnné SSL Post');
define('_MD_AM_SSLPOSTDSC','Název proměnné, použité pro přenos metodou POST. Nejste-li si jisti, použijte název, který lze těžko vymyslet či uhodnout.');
define('_MD_AM_DEBUGMODE0','Vypnuto');
define('_MD_AM_DEBUGMODE1','Mód ladění (na stránce)');
define('_MD_AM_DEBUGMODE2','Mód ladění (v okně)');
define('_MD_AM_DEBUGMODE3','Ladění Smarty šablon');
define('_MD_AM_MINUNAME','Min. délka uživatelského jména');
define('_MD_AM_MAXUNAME','Max. délka uživatelského jména');
define('_MD_AM_GENERAL','Obecné nastavení');
define('_MD_AM_USERSETTINGS','Nastavení uživatele');
define('_MD_AM_ALLWCHGMAIL','Změna e-mailu');
define('_MD_AM_ALLWCHGMAILDSC','Uživatel smí změnit svoji e-mailovou adresu');
define('_MD_AM_IPBAN','Zákaz IP');
define('_MD_AM_BADEMAILS','Seznam e-mailových adres, které nesmějí být použity pri registraci uživatelů');
define('_MD_AM_BADEMAILSDSC','Jednotlivé položky oddělujte <b>|</b>, velikost písmen rozhoduje, regex povoleno.');
define('_MD_AM_BADUNAMES','Seznam jmen, které nesmějí být použity při registraci uživatelů');
define('_MD_AM_BADUNAMESDSC','Jednotlivé položky oddělujte <b>|</b>, velikost písmen rozhoduje, regex povoleno.');
define('_MD_AM_DOBADIPS','Povolit zakazování IP?');
define('_MD_AM_DOBADIPSDSC','Uživatel ze zadané IP adresy bude mít zakázané zobrazení Vašeho serveru');
define('_MD_AM_BADIPS','Zadejte adresy, jimž chcete zamezit přístup na Váš server.<br />Adresy oddělujte <b>|</b>, velikost písmen rozhoduje, regex povoleno.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc zakáže přístup adresám začínajícím na <b>aaa.bbb.ccc</b><br />aaa.bbb.ccc$ zakáže přístup adresám končícím na <b>aaa.bbb.ccc</b><br />aaa.bbb.ccc zakáže přístup z adresy obsahující <b>aaa.bbb.ccc</b>');
define('_MD_AM_PREFMAIN','Hlavní nastavení');
define('_MD_AM_METAKEY','Klíčová slova');
define('_MD_AM_METAKEYDSC','Meta tag "klíčová slova" je série slov, které vyjadřují obsah Vašeho serveru. Slova oddělujte čárkou nebo mezerou. (př. XOOPS, PHP, CMS)');
define('_MD_AM_METARATING','Zařazení');
define('_MD_AM_METARATINGDSC','Meta tag "zařazení" definuje pro jakou věkovou skupinu je Váš server určen.');
define('_MD_AM_METAOGEN','Pro všechny');
define('_MD_AM_METAO14YRS','14 let');
define('_MD_AM_METAOREST','Zakázáno');
define('_MD_AM_METAOMAT','Dospělí');
define('_MD_AM_METAROBOTS','Vyhledávací roboti');
define('_MD_AM_METAROBOTSDSC','Meta tag "vyhledávací roboti" uvádí jak budou vyhledávací stroje přistupovat k obsahu Vašeho serveru.');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Autor');
define('_MD_AM_METAAUTHORDSC','Meta tag "autor" definuje jméno autora dokumentu. Podporovaný formát obsahuje jméno, elektronickou adresu administrátora, jméno firmy či URL.');
define('_MD_AM_METACOPYR','Copyright');
define('_MD_AM_METACOPYRDSC','Meta tag "copyright" definuje nositele práv k obsahu stránek.');
define('_MD_AM_METADESC','Popis serveru');
define('_MD_AM_METADESCDSC','Meta tag "popis serveru" je obecný popis obsahu Vašeho serveru. Některé vyhledávače tento tag vyžadují.');
define('_MD_AM_METAFOOTER','Meta tagy a patička');
define('_MD_AM_FOOTER','Patička');
define('_MD_AM_FOOTERDSC','Tento text (i HTML) se zobrazí jako poslední text na stránce. Nezapomeňte uvádět úplné odkazy začínající na <b>http://</b>, jinak nebudou funkční.');
define('_MD_AM_CENSOR','Zakázaná slova');
define('_MD_AM_DOCENSOR','Povolit cenzuru slov');
define('_MD_AM_DOCENSORDSC','Tuto volbu doporučujeme vypnout, pokud chcete zvýšit rychlost zpracování stránek na serveru.');
define('_MD_AM_CENSORWRD','Zakázaná slova');
define('_MD_AM_CENSORWRDDSC','Zde napište slova, která budou zakázána v příspěvcích uživatelů.<br />Oddělujte <b>|</b>, velikost písmen rohoduje.');
define('_MD_AM_CENSORRPLC','Zakázaná slova budou nahrazena:');
define('_MD_AM_CENSORRPLCDSC','Zakázaná slova budou v textu nahrazena zadanými znaky');

define('_MD_AM_SEARCH','Možnosti vyhledávání');
define('_MD_AM_DOSEARCH','Povolit globální vyhledávání');
define('_MD_AM_DOSEARCHDSC','Povolit vyhledávání příspěvku/položky na Vašem serveru.');
define('_MD_AM_MINSEARCH','Min. délka hledaného slova');
define('_MD_AM_MINSEARCHDSC','Minimální délka hledaného slova či výrazu');
define('_MD_AM_MODCONFIG','Možnosti modulů');
define('_MD_AM_DSPDSCLMR','Zobrazit prohlášení');
define('_MD_AM_DSPDSCLMRDSC','Povolit zobrazení prohlášení o podmínkách provozu na stránce registrace');
define('_MD_AM_REGDSCLMR','Text prohlášení');
define('_MD_AM_REGDSCLMRDSC','Vložte text, který se zobrazí na registrační stránce');
define('_MD_AM_ALLOWREG','Povolit registraci nových uživatelů');
define('_MD_AM_ALLOWREGDSC','Povolí registraci nových uživatelů na Vašem serveru');
define('_MD_AM_THEMEFILE','Aktualizace šablon při změně?');
define('_MD_AM_THEMEFILEDSC','Je-li povolena aktualizace šablon, tak všechny změněné šablony budou automaticky nahrány znova do databáze. Toto nastavení by nemělo být zapnuto, jakmile stránky uveřejníte.');
define('_MD_AM_CLOSESITE','Vypnout server');
define('_MD_AM_CLOSESITEDSC','Zvolte <b>Ano</b> chcete-li, aby na Váš server měli přístup pouze uživatelé vybraných skupin.');
define('_MD_AM_CLOSESITEOK','Uživatelská skupiny, které mají přístup při vypnutém serveru');
define('_MD_AM_CLOSESITEOKDSC','Uživatelé, kteří mají přístup povolen vždy.');
define('_MD_AM_CLOSESITETXT','Příčiny vypnutí Vašeho serveru');
define('_MD_AM_CLOSESITETXTDSC','Tento text bude zobrazen, když bude Váš server vypnut.');
define('_MD_AM_SITECACHE','Cache pro celé stránky');
define('_MD_AM_SITECACHEDSC','Pro celý obsah stránek použít na zadanou dobu cache s cílem zvýšit výkon. Nastavení cache pro celé stránky přepíše cache na úrovních modul, blok a položka modulu, pokud existují.');
define('_MD_AM_MODCACHE','Cache pro celý modul');
define('_MD_AM_MODCACHEDSC','Pro obsah modulu použít na zadanou dobu cache s cílem zvýšit výkon. Nastavení cache pro celý modul přepíše cache na úrovni položky modulu, pokud existuje.');
define('_MD_AM_NOMODULE','Není modul, pro který by mohla být použita cache.');
define('_MD_AM_DTPLSET','Nastavení standardní šablony');
define('_MD_AM_SSLLINK','URL kde se nachází zabezpečená (SSL) přihlašovací stránka');

// added for mailer
define("_MD_AM_MAILER","Nastavení e-mailu");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Z adresy");
define("_MD_AM_MAILFROMDESC","Adresa, z které bude e-mail odeslán");
define("_MD_AM_MAILFROMNAME","Odesílatel");
define("_MD_AM_MAILFROMNAMEDESC","Jméno odesilatele, od něhož bude e-mail odeslán");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Od uživatele");
define("_MD_AM_MAILFROMUIDDESC","Pokud systém pošle soukromý vzkaz, který se tváří jakoby ho poslal uživatel");
define("_MD_AM_MAILERMETHOD","Způsob doručení e-mailu");
define("_MD_AM_MAILERMETHODDESC","Způsob doručení e-mailu. Výchozí je \"mail\", jinou metodu užijte jen pokud máte problémy.");
define("_MD_AM_SMTPHOST","SMTP hostitel/é");
define("_MD_AM_SMTPHOSTDESC","Seznam SMTP serverů.");
define("_MD_AM_SMTPUSER","SMTPAuth uživatel");
define("_MD_AM_SMTPUSERDESC","Uživ. jméno pro spojení s SMTP serverem s SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth heslo");
define("_MD_AM_SMTPPASSDESC","Heslo pro spojení s SMTP serverem s SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Cesta k Sendmailu");
define("_MD_AM_SENDMAILPATHDESC","Cesta k programu Sendmail (nebo k zástupci) na web-serveru.");
define("_MD_AM_THEMEOK","Vzhledy na výběr");
define("_MD_AM_THEMEOKDSC","Vyberte vzhledy, jež si mohou uživatelé zvolit jako svůj výchozí vzhled Vašeho serveru");

// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS Databáze");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standardní LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","Možnosti Autentifikace");
define("_MD_AM_AUTHMETHOD","Metoda Autentifikace");
define("_MD_AM_AUTHMETHODDESC","Kterou metodu autentifikace byste chtěli použít pro přihlašování uživatelů.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail Field Name");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","The name of the E-Mail attribute in your LDAP directory tree.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name Field Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","The name of the Comman Name attribute in your LDAP directory.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname Field Name");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","The name of the Surname attribute in your LDAP directory.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name Field Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","The name of the Given Name attribute in your LDAP directory.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","The base DN (Distinguished Name) of your LDAP directory tree.");
define("_MD_AM_LDAP_PORT","LDAP - Port Number");
define("_MD_AM_LDAP_PORT_DESC","Číslo portu potřebné pro přístup na váš LDAP directory server.");
define("_MD_AM_LDAP_SERVER","LDAP - Server Name");
define("_MD_AM_LDAP_SERVER_DESC","Jméno vašeho LDAP directory serveru.");

define("_MD_AM_LDAP_MANAGER_DN","DN of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC","The DN of the user allow to make search (eg manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Heslo do LDAP manageru");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","Heslo uživatele s oprávněním pro vyhledávání");
define("_MD_AM_LDAP_VERSION","LDAP Version protocol");
define("_MD_AM_LDAP_VERSION_DESC","Verze LDAP protokolu : 2 nebo 3");
define("_MD_AM_LDAP_USERS_BYPASS"," Xoops uživatel(é) nepodléhající LDAP Autentifikaci");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Uživatelé Xoops, kteří nejsou ověřování skrze LDAP, ale přihlašují se přímo do XOOPS<br>Uživatelská jména oddělte |");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Atribut použitý k vyhledání uživatele");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON","The search filter LDAP query to find user");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
		"<br>Např.: (&(objectclass=person)(samaccountname=@@loginname@@)) pro AD" .
		"<br>Např.: (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) pro LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","Doménové jméno");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows doménové jméno. Pouze pro ADS a NT Servery.");

define("_MD_AM_LDAP_PROVIS","Automatické ověřování xoops účtu");
define("_MD_AM_LDAP_PROVIS_DESC","Vytvořit uživatelskou databázi xoops pokud neexistuje");

define("_MD_AM_LDAP_PROVIS_GROUP","Výchozí skupina"); //  affect group
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","Nový uživatel bude automaticky zařazen do této skupiny");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","mapování položek na serveru pro potřeby autorizace"); //Xoops-Auth server fields mapping
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Formát [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>např.: email=mail" .
		"<br>oddělujte znakem |" .
		"<br><br>!! Pro zkušené uživatele !!");

define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","The Xoops User account is always synchronized with the Authentication Server");

?>