<?php
/**
* Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Modules system
* @subpackage      form Language
* @version         $Id: 2.5.0.a preferences.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN","Voreinstellungen");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL","Haupteinstellungen");*/
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS","Kontoinformationen");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER","Meta Tags und Fußleiste");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR","Wortzensur");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH","Suchoptionen");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER","E-Mail Setup");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION","Authentifizierungsoptionen");

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS","<ul><li>Alle Seiteneinstellungen.</li></ul>");

define("_MD_AM_SITEPREF", "Seiteneinstellungen");
define("_MD_AM_SITENAME", "Name der Webseite");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Der Slogan Ihrer Webseite");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "Admin E-mail-Adresse");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Sprachauswahl");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "welches Modul soll auf der Startseite direkt gestartet werden?");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "None");
define("_MD_AM_SERVERTZ", "Server-Zeitzone");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Standard-Zeitzone");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Standard-Theme");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Wählbare Themen");
define("_MD_AM_CUSTOM_REDIRECT", "jGrowl redirect benutzen");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "ersetzt das alte redirect mit einem JQuery redirect");
define("_MD_AM_ANONNAME", "Anzeigename für Gäste");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "Min. Zeichenlänge des Passworts");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "E-Mail Benachrichtigung senden, wenn sich ein neues Mitglied anmeldet?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Darf ein Mitglied sein Konto löschen?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Anzeige von loading... Bild?");
define("_MD_AM_USEGZIP", "gzip-Kompression benutzen?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Welche Zeichen dürfen für ein Mitgliedsname verwendet werden?");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Genaue Reihenfolge (nur Zahlen und Buchstaben)");
define("_MD_AM_MEDIUM", "Mittel");
define("_MD_AM_LIGHT", "Egal (alle Zeichen erlaubt)");
define("_MD_AM_USERCOOKIE", "Name für Mitglieds-Cookies.");
define("_MD_AM_USERCOOKIEDSC", "Legt einen Cookie für 1 Jahr an und der Mitgliedsname steht immer im Login.");
define("_MD_AM_USEMYSESS", "Verwenden Sie Mitgliedsbezogene Sessions");
define("_MD_AM_USEMYSESSDSC", "Wählen Sie Ja um userbezogene Sessions zu verwenden.");
define("_MD_AM_SESSNAME", "Session-Name");
define("_MD_AM_SESSNAMEDSC", "Der Name der Session (nur gültig, wenn \"Mitgliedsbezogene Session\" eingeschaltet ist)");
define("_MD_AM_SESSEXPIRE", "Max. Sitzungslänge in Minuten");
define("_MD_AM_SESSEXPIREDSC", "(Max. 10080 Minuten = 1 Woche eintragen) <br /> Dieses Cookie ermöglicht dem Mitglied automatisch innerhalb einer bestimmten Zeitspanne angemeldet zu sein (gültig nur wenn userbezogene Sessions aktiviert worden sind. Funktioniert nur mit PHP4.2.0 und höher).)");
define("_MD_AM_BANNERS", "Banneranzeige aktivieren?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Ihre IP-Adresse");
define("_MD_AM_MYIPDSC", "Diese IP-Adresse wird nicht für Einblendungen der Banner gewertet");
define("_MD_AM_ALWDHTML", "HTML Tags in allen Beiträgen erlauben.");
define("_MD_AM_INVLDMINPASS", "Ungültige Zeichenlänge des Passwortes.");
define("_MD_AM_INVLDUCOOK", "Ungültiger Wert für das Mitglieder-Cookie.");
define("_MD_AM_INVLDSCOOK", "Ungültiger Wert für das Session-Cookie.");
define("_MD_AM_INVLDSEXP", "Ungültiger Wert für die max. Sitzungslänge.");
define("_MD_AM_ADMNOTSET", "Administrator E-Mailadresse fehlt.");
define("_MD_AM_YES", "Ja");
define("_MD_AM_NO", "Nein");
define("_MD_AM_DONTCHNG", "Nicht ändern!");
define("_MD_AM_REMEMBER", "Bitte denken Sie daran die Datei mit den CHMOD 666 Rechten zu sichern.");
define("_MD_AM_IFUCANT", "Wenn es nicht möglich ist die Rechte für diesen Bereich zu ändern, können Sie den Rest der Datei von Hand bearbeiten.");

define("_MD_AM_COMMODE", "Standardmodus für Kommentaranzeige");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Standardreihenfolge für Kommentare");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "HTML in Kommentaren erlauben?");
define("_MD_AM_DEBUGMODE", "Debug-Modus");
define("_MD_AM_DEBUGMODEDSC", "Verschiedene Debug-Optionen. Bei funktionierenden Webseiten ausschalten.");
define("_MD_AM_AVATARALLOW", "Dürfen Mitglieder Ihre eigenen Avatare hochladen?");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Mindestanzahl an Beiträgen?");
define("_MD_AM_AVATARMPDSC", "Geben Sie die Anzahl der Beiträge ein damit ein Mitglied seinen eigenen Avatar hochladen darf");
define("_MD_AM_AVATARW", "Avatar Bild max. Breite (pixel)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Avatar Bild max. Höhe (pixel)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Avatar Bild max. Dateigröße (byte)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Eigene Avatar Einstellungen");
define("_MD_AM_CHNGUTHEME", "Mitglieder Theme wechseln");
define("_MD_AM_NOTIFYTO", "Gruppe auswählen die eine Nachricht erhalten auf Antworten zu ihren Beiträgen");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Mitgliedern erlauben ein Theme zu wählen?");
define("_MD_AM_ALLOWIMAGE", "Migliedern erlauben Bilder ihren Nachrichten hinzuzufügen?");

define("_MD_AM_USERACTV", "Aktivierung per Email (empfohlen)");
define("_MD_AM_AUTOACTV", "Automatische Aktivierung");
define("_MD_AM_ADMINACTV", "Aktivierung durch den Administrator");
define("_MD_AM_ACTVTYPE", "Auswahl der Registrierungsmethode bei Anmeldung eines neues Mitglieds");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Gruppe auswählen die eine Benachrichtigung bekommt, wenn sich ein neues Mitglied anmeldet");
define("_MD_AM_ACTVGROUPDSC", "Grundeinstellung ist die Administratorbenachrichtigung");
define("_MD_AM_USESSL", "SSL-Modus für Login?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "SSL Post Variablenname");
define("_MD_AM_SSLPOSTDSC", "Der verwendete Name der Variable für den Session-Transfer via POST. Wenn Sie unsicher sind, belassen Sie die Voreinstellung.");
define("_MD_AM_DEBUGMODE0", "Aus");
define("_MD_AM_DEBUGMODE1", "Standard (inline mode)");
define("_MD_AM_DEBUGMODE2", "als Popup anzeigen");
define("_MD_AM_DEBUGMODE3", "Smarty Templates Debug");
define("_MD_AM_MINUNAME", "Min. Länge des Mitgliedsnames");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Max. Länge des Mitgliedsnames");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Allgemein");
define("_MD_AM_USERSETTINGS", "Kontoinfo");
define("_MD_AM_ALLWCHGMAIL", "Mitgliedern erlauben ihre E-Mail-Adresse zu ändern?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP Blockierung");
define("_MD_AM_BADEMAILS", "E-Mail-Adressen die nicht zulässig sind");
define("_MD_AM_BADEMAILSDSC", "Einträge mit einem |, trennen.");
define("_MD_AM_BADUNAMES", "Unzulässiger Mitgliedsname");
define("_MD_AM_BADUNAMESDSC", "Einträge mit einem |, trennen.");
define("_MD_AM_DOBADIPS", "IP-Blockierung aktivieren?");
define("_MD_AM_DOBADIPSDSC", "Mitglieder mit dieser IP-Adresse dürfen die Website nicht besuchen");
define("_MD_AM_BADIPS", "Eingabe der IP-Adresse die diese Website nicht besuchen dürfen. Einträge mit einem |, trennen.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc wird User abweisen deren IP-Adresse mit aaa.bbb.ccc beginnt <br /> aaa.bbb.ccc$ wird User abweisen deren IP-Adresse mit aaa.bbb.ccc endet <br /> aaa.bbb.ccc wird User abweisen deren IP-Adresse aaa.bbb.ccc enthält");
define("_MD_AM_PREFMAIN", "Preferences Main");
define("_MD_AM_METAKEY", "Meta Keywords");
define("_MD_AM_METAKEYDSC", "Meta Keywords dienen den Suchmaschinen um Inhalte nach Stichworten zu finden. Mehrere Keywords mit einem Komma und anschließenden Leerzeichen trennen. Z. B.: XOOPS, PHP, mySQL, portal system");
define("_MD_AM_METARATING", "Meta Rating");
define("_MD_AM_METARATINGDSC", "Diese Angaben bestimmen die Altersfreigaben Ihrer Website.");
define("_MD_AM_METAOGEN", "Allgemein");
define("_MD_AM_METAO14YRS", "14 Jahre");
define("_MD_AM_METAOREST", "Eingeschränkt");
define("_MD_AM_METAOMAT", "Nur Erwachsene");
define("_MD_AM_METAROBOTS", "Meta Robots");
define("_MD_AM_METAROBOTSDSC", "Die Robots Tags \"erklären\" den Suchmaschinen welchen Inhalt sie indizieren sollen.");
define("_MD_AM_INDEXFOLLOW", "Indizieren, Links verfolgen");
define("_MD_AM_NOINDEXFOLLOW", "Nicht Indizieren, Links verfolgen");
define("_MD_AM_INDEXNOFOLLOW", "Indizieren, Links nicht verfolgen");
define("_MD_AM_NOINDEXNOFOLLOW", "Nicht indizieren, Links nicht verfolgen");
define("_MD_AM_METAAUTHOR", "Meta Author");
define("_MD_AM_METAAUTHORDSC", "Hier können Daten über den Autor einer Seite eingegeben werden.");
define("_MD_AM_METACOPYR", "Meta Copyright");
define("_MD_AM_METACOPYRDSC", "Das Copyright und die Metatags zeichnen die Homepage auch mit einer Echtheit aus.");
define("_MD_AM_METADESC", "Meta Beschreibung");
define("_MD_AM_METADESCDSC", "Die angegebenen Meta Tags geben Auskunft über die Inhalte der Website");
define("_MD_AM_METAFOOTER", "Meta Tags und Fußleiste");
define("_MD_AM_FOOTER", "Fußleiste");
define("_MD_AM_FOOTERDSC", "Immer den vollen Pfad angeben ab: http://, damit dieser auch korrekt dargestellt werden kann");
define("_MD_AM_CENSOR", "Wortzensur");
define("_MD_AM_DOCENSOR", "Zensieren von unerwünschten Wörter ermöglichen?");
define("_MD_AM_DOCENSORDSC", "Wörter werden zensiert. Das Aktivieren dieser Funktion kann die Geschwindigkeit der Website negativ beeinflussen.");
define("_MD_AM_CENSORWRD", "Zensierte Wörter");
define("_MD_AM_CENSORWRDDSC", "Wörter die zensiert werden sollen. Wörter mit einem |, trennen.");
define("_MD_AM_CENSORRPLC", "Zensierte Wörter werden ersetzt durch:");
define("_MD_AM_CENSORRPLCDSC", "Zensierte Wörter in Beiträgen werden durch die in der Textbox abgebildeten Zeichen ersetzt");

define("_MD_AM_SEARCH", "Suchoptionen");
define("_MD_AM_DOSEARCH", "Websiteumspannende Suche aktivieren?");
define("_MD_AM_DOSEARCHDSC", "Suche nach Beiträgen/Stichworten innerhalb Ihrer Website erlauben.");
define("_MD_AM_MINSEARCH", "Min. Schlüsselwortlänge");
define("_MD_AM_MINSEARCHDSC", "Min. Länge des Suchwortes um einen Treffer zu erzielen*");
define("_MD_AM_MODCONFIG", "Modul-Konfiguration");
define("_MD_AM_DSPDSCLMR", "Haftungsausschluß anzeigen?");
define("_MD_AM_DSPDSCLMRDSC", "JA wählen um den Haftungsausschluß auf der Registrationsseite anzuzeigen");
define("_MD_AM_REGDSCLMR", "Registrations-Haftungsausschluß");
define("_MD_AM_REGDSCLMRDSC", "Text eingeben, der bei der Anmeldung angezeigt wird.");
define("_MD_AM_ALLOWREG", "Dürfen sich neue Mitglieder anmelden?");
define("_MD_AM_ALLOWREGDSC", "JA auswählen um Anmeldungen von neuen Mitgliedern zu gestatten");
define("_MD_AM_THEMEFILE", "Templates auf Änderungen prüfen?");
define("_MD_AM_THEMEFILEDSC", "Wenn diese Option aktiviert wird, werden bearbeitete Templates automatisch bei ihrer Anzeige compiliert. Deaktivieren Sie diese Option auf produktiven Seiten.");
define("_MD_AM_CLOSESITE", "Website abschalten?");
define("_MD_AM_CLOSESITEDSC", "Wählen Sie Ja, um Ihre Website nur bestimmten Gruppen zugänglich zu machen.");
define("_MD_AM_CLOSESITEOK", "Wählen Sie die Gruppe aus, für die Sie die Website während der Abschaltung zugänglich machen wollen.");
define("_MD_AM_CLOSESITEOKDSC", "Mitglieder der Webmaster-Gruppe, werden immer Zugang zur Seite haben.");
define("_MD_AM_CLOSESITETXT", "Der Grund für die Abschaltung der Website.");
define("_MD_AM_CLOSESITETXTDSC", "Der Text der angezeigt wird, wenn Ihre Website abgeschaltet ist.");
define("_MD_AM_SITECACHE", "Site-wide Cache");
define("_MD_AM_SITECACHEDSC", "Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.");
define("_MD_AM_MODCACHE", "Modulumfassender Cache");
define("_MD_AM_MODCACHEDSC", "Packt Inhalte Ihrer Module für einen zu bestimmenden Zeitraum in einen Zwischenspeicher um die Leistung Ihrer Website zu erhöhen.");
define("_MD_AM_NOMODULE", "Derzeit kein Modul für den Cache vorhanden.");
define("_MD_AM_DTPLSET", "Standard-Template-Set");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "URL der SSL-Login-Seite");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "Mail Setup");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "Von Adresse");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "An Name");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Von Mitglied");
define("_MD_AM_MAILFROMUIDDESC", "Wenn über das System eine private Nachricht gesendet wird, was soll in der Absender-Leiste stehen?");
define("_MD_AM_MAILERMETHOD", "E-Mail-Versandmethode");
define("_MD_AM_MAILERMETHODDESC", "Methode, die benutzt wird, um E-Mails zu versenden. Standard ist 'mail'. Andere nur benutzen wenn Probleme auftreten.");
define("_MD_AM_SMTPHOST", "SMTP-Host(s)");
define("_MD_AM_SMTPHOSTDESC", "Liste von SMTP-Servern zu den einen Verbindung versucht werden soll.");
define("_MD_AM_SMTPUSER", "SMTPAuth-Username");
define("_MD_AM_SMTPUSERDESC", "Username um zu einem SMTP-Host mit SMTPAuth zu verbinden.");
define("_MD_AM_SMTPPASS", "SMTPAuth-Passwort");
define("_MD_AM_SMTPPASSDESC", "Passwort um zu einem SMTP host mit SMTPAuth zu verbinden.");
define("_MD_AM_SENDMAILPATH", "Pfad zu sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Pfad zum sendmail-Programm (oder Ersatz) auf dem Webserver.");
define("_MD_AM_THEMEOK", "Wählbare Themen");
define("_MD_AM_THEMEOKDSC", "Wählen Sie Themen aus, die die Mitglieder als Standard-Thema einstellen können");

// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","Die Adresse des SOAP Servers.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Versorgung");
define("_MD_AM_SOAP_PROVISIONDESC","Sollen neue Mitglieder versorgt werden, wählen Sie?");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Versorgungsrang");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","Reihenfolge, in denen ein neues Mitglied vom SOAP-Server abgelegt wird.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","Wenn ein wdsl SOAP-Dienst benötigt wird, wählen Sie diese Option.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Benutzername");
define("_MD_AM_SOAP_USERNAMEDESC","Der Benutzername im SOAP Server.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP Passwort");
define("_MD_AM_SOAP_PASSWORDDESC","Wenn Sie ein Passwort beim SOAP Server benötigen, geben Sie es hier ein.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Benutzer versorgen");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Benutzer weiterhin versorgen.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Spezielle Konten");
define("_MD_AM_SOAP_FILTERPERSONDESC","Spezielle Konten, die eine XOOPS Authentifizierung benötigen.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy Hostname");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Server Proxy-Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP Server Proxy Server Port Nummer <br>Beispiel: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy Benutzername");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP Server Proxy Server Benutzername");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy Passwort");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP Server Proxy Server Passwort.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Die SOAP Server Abfrage für <strong>xx</strong> sekunden aufrecht erhalten.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP Antworten Timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Die SOAP Server Abfrage für <strong>xx</strong> sekunden aufrecht erhalten.");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops-Authentifizierungs Server Feld-Mapping");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Beschreibung für die Darstellung der Mapping-Felder zwischen der Xoops Datenbank und dem LDAP System" .
		"<br><br>Format [Xoops Database field]=[Authentifizierungs-System SOAP-Attribut]" .
		"<br>for example : email=mail" .
		"<br>Separieren mit |" .
		"<br><br>!! Für fortgeschrittene Benutzer !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS Datenbank");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Standard LDAP Verzeichnis");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops SOAP Authentifizierung");
define("_MD_AM_AUTHENTICATION", "Authentifizierung");
define("_MD_AM_AUTHMETHOD", "Authentifizierungsmethode");
define("_MD_AM_AUTHMETHODDESC", "Welche Authentifizierungsmethode soll eingesetzt werden beim Einloggen der User?");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Mail-Feldname");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "Der Name des E-Mail-Feldes in Ihrem LDAP-Verzeichnisbaum.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - LDAP - Feldname vergebener Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "Der Name des Feldes des vergebenen Namens in Ihrem LDAP-Verzeichnis.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Nachname-Feldname");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "Der Name des Nachnamen-Feldes in Ihrem LDAP-Verzeichnis.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Feldname vergebener Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "Der Name des Feldes des vergebenen Namens in Ihrem LDAP-Verzeichnis.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Basis-DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "Der Basis-DN (Distinguished Name) Ihres LDAP-Verzeichnisbaumes.");
define("_MD_AM_LDAP_PORT", "LDAP - Port-Nummer");
define("_MD_AM_LDAP_PORT_DESC", "LDAP - Port-Nummer");
define("_MD_AM_LDAP_SERVER", "LDAP - Servername");
define("_MD_AM_LDAP_SERVER_DESC", "Der Name Ihres LDAP-Verzeichnis-Servers.");

define("_MD_AM_LDAP_MANAGER_DN", "DN des LDAP-Managers");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "Die DN des Users ermöglicht die Suche (z. B. manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Passwort des LDAP-Managers");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Passwort des Users um eine Suche zu ermöglichen");
define("_MD_AM_LDAP_VERSION", "LDAP-Versions-Protokoll");
define("_MD_AM_LDAP_VERSION_DESC", "Das LDAP-Version-Protokoll: 2 oder 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Xoops Benutzer(n) erlauben die LDAP-Authentifizierung zu umgehen");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Benutzer für die normale Authentifizierung");

define("_MD_AM_LDAP_USETLS", " TLS Verbindung benutzen");
define("_MD_AM_LDAP_USETLS_DESC", "Verwendung einer TLS (Transport Layer Sicherheit) Verbindung. TLS verwendet Port 389<BR>" .
                                  " Die LDAP Version muss auf 3 gesetzt sein.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "Verwendung des LDAP-Attribut, um einen Benutzer zu suchen");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "Wenn der Benutzername in der DN Auswahl auf \"Ja\" gesetzt ist, muss es dem Benutzernamen \"XOOPS\" entsprechen");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Benutzername im DN zum Einloggen benutzen?");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Der XOOPS Loginname ist im LDAP DN benutzt (Beispiel: uid=<loginname>,dc=xoops,dc=org)<br>Dieser Eintrag wird direkt gelesen ohne zu suchen. (Standard: nein)");

define("_MD_AM_LDAP_FILTER_PERSON", "LPAD Suchfilter benutzen um Benutzer zu finden");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Spezieller Suchfilter um Benutzer zu finden: @@loginname@@ ersetzen mit dem Benutzer-Loginname<br> Wenn Sie es nicht wissen, lassen Sie das Feld leer!<br />" .
        "<br />Beispiel : (&(objectclass=person)(samaccountname=@@loginname@@)) für AD" .
        "<br />Beispiel : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) für LDAP<br /><br />");

define("_MD_AM_LDAP_DOMAIN_NAME", "Der Domänen Name");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows Domänen Name. Nur für WIN-ADS und NT-Server.");

define("_MD_AM_LDAP_PROVIS", "Automatische XOOPS-Konten Versorgung");
define("_MD_AM_LDAP_PROVIS_DESC", "Erstellt automatisch Datenbanktabellen wenn sie nicht existieren");

define("_MD_AM_LDAP_PROVIS_GROUP", "Automatische Benutzergruppe");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Neue Benutzer werden automatisch dieser Gruppe zugeordnet");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "XOOPS Authentifikations Serverfeld-Mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Beschreiben Sie hier das Mapping zwischen dem Xoops Datenbankfeld und der LDAP-Authentifizierung." .
        "<br /><br />Format [Xoops Datenbankfeld]=[Auth system LDAP-Attribut]" .
        "<br />Beispiel : email=mail" .
        "<br />Separieren mit |" .
        "<br /><br />!! Für Fortgeschrittene Benutzer !!");

define("_MD_AM_LDAP_PROVIS_UPD", "XOOPS Kontenversorgung erhalten");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "Die Xoops Kontenversorgung wird immer mit dem Authentifizierungs-Server synchronisiert");


define("_MD_AM_CPANEL", "Administrationstheme");
define("_MD_AM_CPANELDSC", "Für Backend");

define("_MD_AM_WELCOMETYPE", "Sende eine Willkommensnachricht");
define("_MD_AM_WELCOMETYPE_DESC", "Die Art der Benachrichtigung über eine erfolgreiche Registrierung an den User.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Nachricht");
define("_MD_AM_WELCOMETYPE_BOTH", "Email und Nachricht");

define("_MD_AM_MODULEPREF", "Modul Einstellungen");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS","System Einstellungen");

?>