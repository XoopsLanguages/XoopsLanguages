<?php

// menu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Erlaubnis');
define('_MD_A_MYMENU_MYPREFERENCES','Einstellungen');

// index.php
define("_AM_TH_DATETIME","Zeit");
define("_AM_TH_USER","Benutzer");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","Client");
define("_AM_TH_TYPE","Angriffstyp");
define("_AM_TH_DESCRIPTION","Beschreibung");

define( "_AM_TH_BADIPS" , '"Schlechte" IP-Adresse(n)<br /><br /><span style="font-weight:normal;">Schreibe jede IP in eine Zeile<br />leerlassen wenn alle IPs erlaubt sind</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'Erlaubte IPs fur Gruppe=1<br /><br /><span style="font-weight:normal;">Jede IP in eine Zeile.<br />192.168. bedeutet 192.168.*<br />Leer Bedeutet alle IPs sind erlaubt</span>' ) ;

define( "_AM_LABEL_COMPACTLOG" , "Komprimierter Bericht: " ) ;
define( "_AM_BUTTON_COMPACTLOG" , "komprimieren" ) ;
define( "_AM_JS_COMPACTLOGCONFIRM" , "Doppelt aufgezeichnete IPs und Angriffstypen werden zusammengefast" ) ;
define( "_AM_LABEL_REMOVEALL" , "Aufzeichnungen löschen: " ) ;
define( "_AM_BUTTON_REMOVEALL" , "Löschen!" ) ;
define( "_AM_JS_REMOVEALLCONFIRM" , "Sicher das alle Aufzeichungen gelöscht werden sollen?" ) ;
define( "_AM_LABEL_REMOVE" , "Lösche alle gewahlten Aufzeichnungen : " ) ;
define( "_AM_BUTTON_REMOVE" , "Löschen" ) ;
define( "_AM_JS_REMOVECONFIRM" , "Sollen alle ausgewahlten Eintrage gelöscht werden?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Die Datein der IP Listen wurden aktualisiert" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Die IP-Ausschlussdatei kann nicht geöffnet werden" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "Die IP-Einschlussdatei fur Administrationsgruppe kann nicht geöffnet werden" ) ;
define( "_AM_MSG_REMOVED" , "Aufzeichnungen wurden komprimiert / gelöscht" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Der Ordner: %s braucht Schreibberechtigung (chm777)" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Prefix Manager" ) ;
define( "_AM_MSG_DBUPDATED" , "Datenbank wurde erfolgreich aktualisiert!" ) ;
define( "_AM_CONFIRM_DELETE" , "Sollen alle Daten gelöscht werden?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Wenn Sie den Prefix ändern wollen,<br /> bearbeiten Sie die %s/mainfile.php manuell.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Nicht sicher");

define("_AM_ADV_TRUSTPATHPUBLIC","Wenn Sie eine Grafik aufrufen bzw. sehen können oder der Link zeigt Ihnen eine normale Website an, scheint der sog. trust_path nicht korrekt plaziert zu sein, z.B. innerhalb des Rootverzeichnis! Der trust_path muss außerhalb liegen, andernfalls ist ihr System nicht ausreichend geschutzt! In manchen Fallen kann kein trust_path auserhalb des Rootverzeichnis gesetzt werden, in dem Fall können Sie eine .htaccess Datei mit dem Inhalt DENY FROM ALL erstellen und in das Verzeichnis kopieren. Dies ist zumindest eine Ersatzlösung, wenn auch nicht so sicher.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Überprüfen Sie PHP Dateien innerhalb des trust_Path, sie mussen eine Fehlermeldung erhalten, z.B. 404,403 oder 500 Fehler, wenn Fehlerseiten seitens des Providers nicht erlaubt sind, dann eine weisse Seite.");
define("_AM_ADV_REGISTERGLOBALS","Diese Einstellung ladt zu verschiedenen Formen der Code Injection ein.<br />Wenn es geht, setzen Sie eine .htaccess-Datei.");
define("_AM_ADV_ALLOWURLFOPEN","Diese Einstellung erlaubt Angreifern, Scripts auf entfernten Sytemen auszuführen.<br />Nur der Administrator des Servers kann diese Option ändern.<br />Wenn Sie der Admin sind, bearbeiten Sie php.ini or httpd.conf entsprechend.<br /><b>Beispiel für httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Wenn nicht, wenden Sie sich an Ihren Administrator.");
define("_AM_ADV_USETRANSSID","Ihre Session-ID wird in Anker-Tags angezeigt. Um dem Session-Hijacking vorzubeugen, sollten Sie die folgende Zeile Ihrer .htaccess-Datei in XOOPS_ROOT_PATH hinzufugen.<b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Diese Einstellung ladt zu 'SQL Injections' ein.<br />Vergessen Sie nicht 'Force sanitizing *' in den Voreinstellungen dieses Moduls zu aktivieren.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Zum Prafix-Manager");
define("_AM_ADV_MAINUNPATCHED","Der XoopsCMS Protector kann ihre Seite unter bestimmten Umstanden schützen, wenn er aus der mainfile.php aufgerufen wird.<br />Sie sollten diese Datei wie im README beschrieben andern.");
define("_AM_ADV_DBFACTORYPATCHED","Die Datei databasefactory.php wurde zum Abfangen von SQL-Injektionen modifiziert.");
define("_AM_ADV_DBFACTORYUNPATCHED","Die Datei databasefactory.php muss zum Abfangen von SQL-Injektionen noch modifiziert werden.");

define("_AM_ADV_SUBTITLECHECK","Überprüfen, ob Protector funktioniert");
define("_AM_ADV_CHECKCONTAMI","Verseuchung");
define("_AM_ADV_CHECKISOCOM","Isolierte Kommentare");

?>
