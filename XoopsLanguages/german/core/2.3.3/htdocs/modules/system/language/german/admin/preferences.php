<?php
// $Id: preferences.php 2770 2009-02-08 14:25 dhcst $
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%    Admin Module Name  AdminGroup   %%%%%
// dont change
define('_AM_DBUPDATED',_MD_AM_DBUPDATED);

define('_MD_AM_SITEPREF','Website-Einstellungen');
define('_MD_AM_SITENAME','Name der Website');
define('_MD_AM_SLOGAN','Slogan der Website');
define('_MD_AM_ADMINML','E-Mail-Adresse Administrator');
define('_MD_AM_LANGUAGE','Sprachauswahl');
define('_MD_AM_STARTPAGE','welches Modul soll in der Startseite<br>direkt gestartet werden?');
define('_MD_AM_NONE','Kein');
define('_MD_AM_SERVERTZ','Server-Zeitzone');
define('_MD_AM_DEFAULTTZ','Standard-Zeitzone');
define('_MD_AM_DTHEME','Standard-Theme');
define('_MD_AM_THEMESET','Theme');
define('_MD_AM_ANONNAME','Mitgliedsname für Gäste');
define('_MD_AM_MINPASS','Min. Zeichenlänge des Passworts');
define('_MD_AM_NEWUNOTIFY','E-Mail Benachrichtigung senden, wenn sich ein neues Mitglied anmeldet?');
define('_MD_AM_SELFDELETE','Darf ein Mitglied sein Konto löschen?');
define('_MD_AM_LOADINGIMG','Seite wird geladen...-Bild anzeigen?');
define('_MD_AM_USEGZIP','gzip-Kompression benutzen?');
define('_MD_AM_UNAMELVL','Welche Zeichen dürfen für ein Mitgliedsname verwendet werden?');
define('_MD_AM_STRICT','Genaue Reihenfolge (Nur Zahlen und Buchstaben)');
define('_MD_AM_MEDIUM','Mittel');
define('_MD_AM_LIGHT','Egal (Alle Zeichen erlaubt)');
define('_MD_AM_USERCOOKIE','Name für Mitglieds-Cookies.');
define('_MD_AM_USERCOOKIEDSC','Legt einen Cookie für 1 Jahr an und der Mitgliedsname steht immer im Login.');
define('_MD_AM_USEMYSESS','Verwenden Sie Mitgliedsbezogene Sessions');
define('_MD_AM_USEMYSESSDSC','Wählen Sie Ja um userbezogene Sessions zu verwenden.');
define('_MD_AM_SESSNAME','Session-Name');
define('_MD_AM_SESSNAMEDSC','Der Name der Session (nur gültig, wenn "Mitgliedsbezogene Session" eingeschaltet ist)');
define('_MD_AM_SESSEXPIRE','Max. Sitzungslänge in Minuten');
define('_MD_AM_SESSEXPIREDSC','(Max. 10080 Minuten = 1 Woche eintragen)<br>Dieses Cookie ermöglicht dem Mitglied automatisch innerhalb einer bestimmten Zeitspanne angemeldet zu sein (gültig nur wenn userbezogene Sessions aktiviert worden sind. Funktioniert nur mit PHP4.2.0 und höher).');
define('_MD_AM_BANNERS','Banneranzeige aktivieren?');
define('_MD_AM_MYIP','Ihre IP-Adresse');
define('_MD_AM_MYIPDSC','Diese IP-Adresse wird nicht für Einblendungen der Banner gewertet');
define('_MD_AM_ALWDHTML','HTML-Tags in allen Beiträgen zulassen.');
define('_MD_AM_INVLDMINPASS','Min. Zeichenlänge des Passworts.');
define('_MD_AM_INVLDUCOOK','Unzulässiger Wert für usercookie-Name.');
define('_MD_AM_INVLDSCOOK','Unzulässiger Wert für sessioncookie-Name.');
define('_MD_AM_INVLDSEXP','Unzulässiger Wert für die session-Verfallzeit.');
define('_MD_AM_ADMNOTSET','E-Mail-Adresse des Administrator ist nicht gesetzt.');
define('_MD_AM_YES','Ja');
define('_MD_AM_NO','Nein');
define('_MD_AM_DONTCHNG','Nicht ändern!');
define('_MD_AM_REMEMBER','Ändern Sie den chmod dieser Datei auf 666 damit das System Einträge vornehmen kann.');
define('_MD_AM_IFUCANT','Sollten Sie die Einstellung nicht automatisch vornehmen können, ändern Sie diese bitte von Hand.');


define('_MD_AM_COMMODE','Standardmodus für Kommentaranzeige');
define('_MD_AM_COMORDER','Standardreihenfolge für Kommentare');
define('_MD_AM_ALLOWHTML','HTML-Tags in Userkommentaren erlauben?');
define('_MD_AM_DEBUGMODE','Debug-Modus');
define('_MD_AM_DEBUGMODEDSC','Verschiedene Debug-Optionen. Bei funktionierenden Webseiten ausschalten.');
define('_MD_AM_AVATARALLOW','Dürfen User Avatare hochladen?');
define('_MD_AM_AVATARMP','Erforderliche Mindestbeiträge');
define('_MD_AM_AVATARMPDSC','Eingabe der Mindestbeiträge bevor der User einen Avatar hochladen darf');
define('_MD_AM_AVATARW','Avatar max. Breite (in Pixeln)');
define('_MD_AM_AVATARH','Avatar max. H&ouml;he (in Pixeln)');
define('_MD_AM_AVATARMAX','Avatar max. Dateigröße (in Bytes)');
define('_MD_AM_AVATARCONF','Einstellungen für Avatare der Mitglieder');
define('_MD_AM_CHNGUTHEME','Theme aller Mitglieder ändern');
define('_MD_AM_NOTIFYTO','Gruppe auswählen die eine Nachricht erhalten auf Antworten zu ihren Beiträgen');
define('_MD_AM_ALLOWTHEME','Mitglied darf sein Theme selber wählen?');
define('_MD_AM_ALLOWIMAGE','Mitglied darf in Beiträgen auch Bilder verwenden?');

define('_MD_AM_USERACTV','Aktivierung per E-Mail (E-Mail wird an das Mitglied gesendet)');
define('_MD_AM_AUTOACTV','Automatische Aktivierung');
define('_MD_AM_ADMINACTV','Aktivierung durch den Administrator');
define('_MD_AM_ACTVTYPE','Auswahl der Registrierungsmethode bei Anmeldung eines neues Mitglieds');
define('_MD_AM_ACTVGROUP','Gruppe auswählen die eine Benachrichtigung bekommt, wenn sich ein neues Mitglied anmeldet');
define('_MD_AM_ACTVGROUPDSC','Grundeinstellung ist die Administratorbenachrichtigung');
define('_MD_AM_USESSL','SSL-Modus für Login?');
define('_MD_AM_SSLPOST','SSL Post Variablenname ');
define('_MD_AM_SSLPOSTDSC','Der verwendete Name der Variable für den Session-Transfer via POST. Wenn Sie unsicher sind, belassen Sie die Voreinstellung.');
define('_MD_AM_DEBUGMODE0','Aus');
define('_MD_AM_DEBUGMODE1','Default (unter Webseite anzeigen)');
define('_MD_AM_DEBUGMODE2','als Pop-Up anzeigen');
define('_MD_AM_DEBUGMODE3','Smarty Templates-Debug');
define('_MD_AM_MINUNAME','Min. Länge des Mitgliedsnames');
define('_MD_AM_MAXUNAME','Max. Länge des Mitgliedsnames');
define('_MD_AM_GENERAL','Allgemeine Einstellungen');
define('_MD_AM_USERSETTINGS','Einstellungen Kontoinformationen');
define('_MD_AM_ALLWCHGMAIL','Darf das Mitglied seine E-Mail-Adresse ändern?');
define('_MD_AM_ALLWCHGMAILDSC','Legt fest, ob das Mitglied die E-Mail-Adresse nach der Anmeldung ändern darf.');
define('_MD_AM_IPBAN','IP-Adresse blockieren');
define('_MD_AM_BADEMAILS','E-Mail-Adressen die nicht zulässig sind');
define('_MD_AM_BADEMAILSDSC','Einträge mit einem <b>|</b>, trennen.');
define('_MD_AM_BADUNAMES','Unzulässiger Mitgliedsname');
define('_MD_AM_BADUNAMESDSC','Einträge mit einem <b>|</b>, trennen.');
define('_MD_AM_DOBADIPS','IP-Blockierung aktivieren?');
define('_MD_AM_DOBADIPSDSC','Mitglieder mit dieser IP-Adresse dürfen die Website nicht besuchen');
define('_MD_AM_BADIPS','Eingabe der IP-Adresse die diese Website nicht besuchen dürfen.<br />Einträge mit einem <b>|</b>, trennen.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc wird User abweisen deren IP-Adresse mit aaa.bbb.ccc beginnt<br />aaa.bbb.ccc$ wird User abweisen deren IP-Adresse mit aaa.bbb.ccc endet<br />aaa.bbb.ccc wird User abweisen deren IP-Adresse aaa.bbb.ccc enthält');
define('_MD_AM_PREFMAIN','Einstellungsmenü');
define('_MD_AM_METAKEY','Meta Keywords');
define('_MD_AM_METAKEYDSC','Meta Keywords dienen den Suchmaschinen um Inhalte nach Stichworten zu finden. Mehrere Keywords mit einem Komma und anschließenden Leerzeichen trennen. Z. B.: XOOPS, PHP, mySQL, portal system');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Diese Angaben bestimmen die Altersfreigaben Ihrer Website.');
define('_MD_AM_METAOGEN','Allgemein');
define('_MD_AM_METAO14YRS','14 Jahre');
define('_MD_AM_METAOREST','Eingeschränkt');
define('_MD_AM_METAOMAT','Nur Erwachsene');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Die Robots Tags "erklären" den Suchmaschinen welchen Inhalt sie indizieren sollen.');
define('_MD_AM_INDEXFOLLOW','Indizieren, Links verfolgen');
define('_MD_AM_NOINDEXFOLLOW','Nicht indizieren, Links verfolgen');
define('_MD_AM_INDEXNOFOLLOW','Indizieren, Links nicht verfolgen');
define('_MD_AM_NOINDEXNOFOLLOW','Nicht indizieren, Links nicht verfolgen');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','Hier können Daten über den Autor einer Seite eingegeben werden.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Das Copyright und die Metatags zeichnen die Homepage auch mit einer Echtheit aus.');
define('_MD_AM_METADESC','Meta Beschreibung');
define('_MD_AM_METADESCDSC','Die angegebenen Meta Tags geben Auskunft über die Inhalte der Website');
define('_MD_AM_METAFOOTER','Meta Tags und Fußleiste');
define('_MD_AM_FOOTER','Fußleiste');
define('_MD_AM_FOOTERDSC','Immer den vollen Pfad angeben ab: http://, damit dieser auch korrekt dargestellt werden kann');
define('_MD_AM_CENSOR','Optionen Wortzensur');
define('_MD_AM_DOCENSOR','Zensieren von unerwünschten Wörter ermöglichen?');
define('_MD_AM_DOCENSORDSC','Wörter werden zensiert. Das Aktivieren dieser Funktion kann die Geschwindigkeit der Website negativ beeinflussen');
define('_MD_AM_CENSORWRD','Zensierte Wörter');
define('_MD_AM_CENSORWRDDSC','Wörter die zensiert werden sollen.<br />Wörter mit einem <b>|</b>, trennen.');
define('_MD_AM_CENSORRPLC','Zensierte Wörter werden ersetzt durch:');
define('_MD_AM_CENSORRPLCDSC','Zensierte Wörter in Beiträgen werden durch die in der Textbox abgebildeten Zeichen ersetzt');

define('_MD_AM_SEARCH','Suchoptionen');
define('_MD_AM_DOSEARCH','Websiteumspannende Suche aktivieren?');
define('_MD_AM_DOSEARCHDSC','Suche nach Beiträgen/Stichworten innerhalb Ihrer Website erlauben.');
define('_MD_AM_MINSEARCH','Min. Schlüsselwortlänge');
define('_MD_AM_MINSEARCHDSC','Min. Länge des Suchwortes um einen Treffer zu erzielen');
define('_MD_AM_MODCONFIG','Modulkonfiguration');
define('_MD_AM_DSPDSCLMR','Haftungsausschluß anzeigen?');
define('_MD_AM_DSPDSCLMRDSC','JA wählen um den Haftungsausschlu&szlig; auf der Registrationsseite anzuzeigen');
define('_MD_AM_REGDSCLMR','Registrations-Haftungsausschluß');
define('_MD_AM_REGDSCLMRDSC','Text eingeben, der bei der Anmeldung angezeigt wird.');
define('_MD_AM_ALLOWREG','Dürfen sich neue Mitglieder anmelden?');
define('_MD_AM_ALLOWREGDSC','JA auswählen um Anmeldungen von neuen Mitgliedern zu gestatten');
define('_MD_AM_THEMEFILE','Theme- und Templateänderungen sofort aktualisieren?');
define('_MD_AM_THEMEFILEDSC','Wenn diese Option eingeschaltet ist, werden Themes und Templates bei Veränderungen automatisch aktualisiert. Dies sollten Sie bei der Bearbeitung der Webseite einschalten, aber sobald die Seite öffentlich ist, sollten Sie es wieder abschalten.');
define('_MD_AM_CLOSESITE','Website abschalten?');
define('_MD_AM_CLOSESITEDSC','Wählen Sie Ja, um Ihre Website nur bestimmten Gruppen zugänglich zu machen. ');
define('_MD_AM_CLOSESITEOK','Wählen Sie die Gruppe aus, für die Sie die Website während der Abschaltung zugänglich machen wollen.');
define('_MD_AM_CLOSESITEOKDSC','Mitglieder der Webmaster-Gruppe, werden immer Zugang zur Seite haben.');
define('_MD_AM_CLOSESITETXT','Der Grund für die Abschaltung der Website.');
define('_MD_AM_CLOSESITETXTDSC','Der Text der angezeigt wird, wenn Ihre Website abgeschaltet ist.');
define('_MD_AM_SITECACHE','Websiteumfassender Cache');
define('_MD_AM_SITECACHEDSC','Packt Inhalte Ihrer Website für einen zu bestimmenden Zeitraum in einen Zwischenspeicher um die Leistung Ihrer Website zu erhöhen. Websiteumfassender Cache hat Vorrang vor allen anderen Cache-Einstellungen.');
define('_MD_AM_MODCACHE','Modulumfassender Cache');
define('_MD_AM_MODCACHEDSC','Packt Inhalte Ihrer Module für einen zu bestimmenden Zeitraum in einen Zwischenspeicher um die Leistung Ihrer Website zu erhöhen.');
define('_MD_AM_NOMODULE','Es gibt kein Modul das gecached werden kann.');
define('_MD_AM_DTPLSET','Standard-Template-Set');
define('_MD_AM_SSLLINK','URL der SSL-Login-Seite');

// added for mailer
define('_MD_AM_MAILER','E-Mail-Setup');
define('_MD_AM_MAILER_MAIL','');
define('_MD_AM_MAILER_SENDMAIL','');
define('_MD_AM_MAILER_','');
define('_MD_AM_MAILFROM','Von-E-Mail-Adresse');
define('_MD_AM_MAILFROMDESC','');
define('_MD_AM_MAILFROMNAME','Von-Name');
define('_MD_AM_MAILFROMNAMEDESC','');
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID','Von-Mitglied');
define('_MD_AM_MAILFROMUIDDESC','Welcher Name soll beim Versender erscheinen, wenn das System eine Benachrichtigung verschickt?');
define('_MD_AM_MAILERMETHOD','E-Mail-Versandmethode');
define('_MD_AM_MAILERMETHODDESC','Methode, die benutzt wird, um E-Mails zu versenden. Standard ist \'mail\'. Andere nur benutzen wenn Probleme auftreten.');
define('_MD_AM_SMTPHOST','SMTP-Host(s)');
define('_MD_AM_SMTPHOSTDESC','Liste von SMTP-Servern zu den einen Verbindung versucht werden soll.');
define('_MD_AM_SMTPUSER','SMTPAuth-Username');
define('_MD_AM_SMTPUSERDESC','Username um zu einem SMTP-Host mit SMTPAuth zu verbinden.');
define('_MD_AM_SMTPPASS','SMTPAuth-Passwort');
define('_MD_AM_SMTPPASSDESC','Passwort um zu einem SMTP host mit SMTPAuth zu verbinden.');
define('_MD_AM_SENDMAILPATH','Pfad zu sendmail');
define('_MD_AM_SENDMAILPATHDESC','Pfad zum sendmail-Programm (oder Ersatz) auf dem Webserver.');
define('_MD_AM_THEMEOK','Wählbare Themen');
define('_MD_AM_THEMEOKDSC','Wählen Sie Themen aus, die die Mitglieder als Standard-Thema einstellen können');


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS Database");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP Directory");
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
define("_MD_AM_LDAP_BASE_DN","LDAP - Basis-DN");
define("_MD_AM_LDAP_BASE_DN_DESC","Der Basis-DN (Distinguished Name) Ihres LDAP-Verzeichnisbaumes.");
define("_MD_AM_LDAP_PORT","LDAP - Port-Nummer");
define("_MD_AM_LDAP_PORT_DESC","Die Port-Nummer um Zugriff auf Ihren LDAP-Verzeichnis-Server zu erhalten.");
define("_MD_AM_LDAP_SERVER","LDAP - Servername");
define("_MD_AM_LDAP_SERVER_DESC","Der Name Ihres LDAP-Verzeichnis-Servers.");

define("_MD_AM_LDAP_MANAGER_DN","DN des LDAP-Managers");
define("_MD_AM_LDAP_MANAGER_DN_DESC","Die DN des Users erm&ouml;glicht die Suche (z. B. manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Passwort des LDAP-Managers");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","Passwort des Users um eine Suche zu erm&ouml;glichen");
define("_MD_AM_LDAP_VERSION","LDAP-Versions-Protokoll");
define("_MD_AM_LDAP_VERSION_DESC","Das LDAP-Version-Protokoll: 2 oder 3");
define("_MD_AM_LDAP_USERS_BYPASS"," Xoops User(s) bypass LDAP Authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Xoops User(s) allow to bypass the LDAP login. Login directly in XOOPS<br>Separate each loginname with a |");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Attribute use to search the user");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_USETLS"," Use TLS connection");
define("_MD_AM_LDAP_USETLS_DESC","Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
                                  " and the LDAP version must be set to 3.");
                                  
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


define("_MD_AM_CPANEL","Administrationstheme");
define("_MD_AM_CPANELDSC","Für Backend");

define("_MD_AM_WELCOMETYPE","Sende eine Willkommensnachricht");
define("_MD_AM_WELCOMETYPE_DESC","Die Art der Benachrichtigung über eine erfolgreiche Registrierung an den User.");
define("_MD_AM_WELCOMETYPE_EMAIL","Email");
define("_MD_AM_WELCOMETYPE_PM","Mitteilungen");
define("_MD_AM_WELCOMETYPE_BOTH","Email und Mitteilungen");

define("_MD_AM_MODULEPREF","Moduleinstellungen");

?>