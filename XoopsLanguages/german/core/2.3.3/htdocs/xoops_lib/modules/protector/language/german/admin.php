<?php

// mymenu

// Appended by Xoops Language Checker -GIJOE- in 2008-12-03 11:47:21
define('_AM_ADV_TRUSTPATHPUBLIC','If you can look an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.');
define('_AM_ADV_TRUSTPATHPUBLICLINK','Check php files inside TRUST_PATH are private (it must be 404,403 or 500 error');

define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Erlaubnis');
define('_MD_A_MYMENU_MYPREFERENCES','Einstellungen');

// index.php
define("_AM_TH_DATETIME","Zeit");
define("_AM_TH_USER","Benutzer");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","Klient");
define("_AM_TH_TYPE","Angriffstyp");
define("_AM_TH_DESCRIPTION","Beschreibung");

define("_AM_TH_BADIPS" , "\"Schlechte\" IPs" ) ;

define("_AM_TH_GROUP1IPS" , 'Erlaubte IPs für Gruppe=1<br /><br /><span style="font-weight:normal;">Jede IP in eine Zeile.<br />192.168. bedeutet 192.168.*<br />Leer Bedeutet alle IPs sind erlaubt</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "Komprimierter Bericht : " ) ;
define("_AM_BUTTON_COMPACTLOG" , "komprimieren" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "Doppelt aufgezeichnete IPs und Angriffstypen werden zusammengefaßt" ) ;
define("_AM_LABEL_REMOVEALL" , "Aufzeichnungen löschen : " ) ;
define("_AM_BUTTON_REMOVEALL" , "Löschen!" ) ;
define("_AM_JS_REMOVEALLCONFIRM" , "Sicher das alle Aufzeichungen gelöscht werden sollen?" ) ;
define("_AM_LABEL_REMOVE" , "Lösche alle gewählten Aufzeichnungen : " ) ;
define("_AM_BUTTON_REMOVE" , "Löschen" ) ;
define("_AM_JS_REMOVECONFIRM" , "Sollen alle ausgewählten Einträge gelöscht werden?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Die Datein für die IP Listen wurden aktualisiert" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Die IP-Ausschlußdatei kann nicht geöffnet werden" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Die IP-Einschlußdatei für Administrationsgruppe can nicht geöffnet werden" ) ;
define("_AM_MSG_REMOVED" , "Aufzeichnungen wurden komprimiert / gelöscht" ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "Der Ordner: %s braucht Schreibberechtigung (777)" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Prefix Manager" ) ;
define("_AM_MSG_DBUPDATED" , "Datenbank wurde erfolgreich aktualisiert!" ) ;
define("_AM_CONFIRM_DELETE" , "Alle Daten werden gelöscht. OK?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Wenn Sie den Prefix ändern wollen,<br /> bearbeiten Sie %s/mainfile.php manuell.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Nicht sicher");

define("_AM_ADV_REGISTERGLOBALS","Diese Einstellung lädt zu verschiedenen Formen der Code Injection ein.<br />Wenn es geht, setzen Sie eine .htaccess-Datei.");
define("_AM_ADV_ALLOWURLFOPEN","Diese Einstellung erlaubt Angreifern, Scripts auf entfernten Sytemen auszuführen.<br />Nur der Administrator des Servers kann diese Option ändern.<br />Wenn Sie der Admin sind, bearbeiten Sie php.ini or httpd.conf entsprechend.<br /><b>Beispiel für httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Wenn nicht, wenden Sie sich an Ihren Administrator.");
define("_AM_ADV_USETRANSSID","Your Session ID will be diplayed in anchor tags etc.<br />For preventing from session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Diese Einstellung lädt zu 'SQL Injections' ein.<br />Vergessen Sie nicht 'Force sanitizing *' in den Voreinstellungen dieses Moduls zu aktivieren.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Zum Prefix-Manager");
define("_AM_ADV_MAINUNPATCHED","Xoops Protector kann ihre Seite unter bestimmten Umständen schätzen, wenn es aus der mainfile.php aufgerufen wird.<br />Sie sollten diese Datei wie im README beschrieben ändern.");

define("_AM_ADV_SUBTITLECHECK","Überprüfen, ob Protector funktioniert");
define("_AM_ADV_CHECKCONTAMI","Verseuchung");
define("_AM_ADV_CHECKISOCOM","Isolierte Kommentare");

// Localization by ezsky
define("_AM_EZ_PREFIX","Prefix");
define("_AM_EZ_TABLES","Tables");
define("_AM_EZ_UPDATED","Updated");
define("_AM_EZ_COPY","Copy");
define("_AM_EZ_ACTIONS","Actions");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Delete");


?>
