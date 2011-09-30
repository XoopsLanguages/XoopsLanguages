<?php

// mymenu


// Appended by Xoops Language Checker -GIJOE- in 2009-01-14 11:10:54
define('_AM_ADV_DBFACTORYPATCHED','De databasefactory is gereed voor DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED','De databasefactory is niet gereed voor DBLayer Trapping anti-SQL-Injection. Sommige patches zijn verplicht.');

// Appended by Xoops Language Checker -GIJOE- in 2008-12-03 11:47:21
define('_AM_ADV_TRUSTPATHPUBLIC','Als de afbeelding -NG- te zien is of de link geeft een normale pagina weer, De XOOPS_TRUST_PATH is niet goed geplaatst. De beste plaats voor XOOPS_TRUST_PATH is buiten de DocumentRoot. Als dit niet mogelijk is, plaats dan de .htaccess (DENY FROM ALL) net onder XOOPS_TRUST_PATH als de tweede optie.');
define('_AM_ADV_TRUSTPATHPUBLICLINK','COntroleer php bestanden in TRUST_PATH prive zijn (het moeten 404,403 of 500 fouten zijn');

define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permissies');
define('_MD_A_MYMENU_MYPREFERENCES','Instellingen');

// index.php
define("_AM_TH_DATETIME","Tijd");
define("_AM_TH_USER","Gebruiker");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","Type");
define("_AM_TH_DESCRIPTION","Omschrijving");

define( "_AM_TH_BADIPS" , 'Slechte IPs<br /><br /><span style="font-weight:normal;">Schrijf elke IP op een aparte regel<br />blanco betekent dat alle IPs zijn toegestaan</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'IPs toegestaan voor Groep=1<br /><br /><span style="font-weight:normal;">Schrijf elke IP op een aparte regel.<br />192.168. betekent 192.168.*<br />blanco betekent dat alle IPs zijn toegestaan</span>' ) ;

define( "_AM_LABEL_COMPACTLOG" , "Log comprimeren" ) ;
define( "_AM_BUTTON_COMPACTLOG" , "Comprimeren!" ) ;
define( "_AM_JS_COMPACTLOGCONFIRM" , "Dubbel (IP,Type) records zullen worden verwijderd" ) ;
define( "_AM_LABEL_REMOVEALL" , "Verwijder alle records" ) ;
define( "_AM_BUTTON_REMOVEALL" , "Alles verwijderen!" ) ;
define( "_AM_JS_REMOVEALLCONFIRM" , "Alle logs worden geheel verwijderd. Weet u het zeker?" ) ;
define( "_AM_LABEL_REMOVE" , "Verwijder de geselecteerde records:" ) ;
define( "_AM_BUTTON_REMOVE" , "Verwijder!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "OK om te verwijderen?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "IP bestanden zijn bijgewerkt" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Het bestand voor slechte IP's kan niet worden geopend" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "Het bestand voor groep=1 permissies kan niet worden geopend" ) ;
define( "_AM_MSG_REMOVED" , "Records zijn verwijderd" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Maak de configs directory schrijfbaar: %s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Prefix Manager" ) ;
define( "_AM_MSG_DBUPDATED" , "Database succesvol bijgewerkt!" ) ;
define( "_AM_CONFIRM_DELETE" , "Alle data wordt gewist. OK?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Als u de prefix wilt veranderen,<br />pas dan ook %s/mainfile.php aan.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Onveilig");

define("_AM_ADV_REGISTERGLOBALS","Deze instelling biedt gelegenheid aan een verscheidene van injectie aanvallen.<br />Wanneer het mogelijk is om een .htacces bestand aan kan maken of wijzigen is dat aan te bevelen...");
define("_AM_ADV_ALLOWURLFOPEN","Deze instelling biedt aanvallers de mogelijkheid om allerlei scripts op andere servers uit te voeren.<br />Alleen de webserver beheerder kan deze optie wijzigen.<br />Als u de beheerder bent, pas dan php.ini of httpd.conf aan.<br /><b>Voorbeeld van een httpd.conf:<br />   php_admin_flag   allow_url_fopen   off</b><br />Anders kunt u het het beste bij uw beheerder melden.");
define("_AM_ADV_USETRANSSID","Uw sessie ID zal getoond worden in anchor tags etc.<br />Om ongewenste overname van sessies te voorkomen, voegt u een regel toe in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Deze instelling werkt SQL Injecties in de hand.<br />Vergeet niet 'Forceer opschonen *' aan te zetten in de instellingen van deze module.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Ga naar de prefix manager");
define("_AM_ADV_MAINUNPATCHED","Xoops Protector kan uw site slechts beperkt beschermen tenzij het aangeroepen wordt vanuit mainfile.php.<br />Het wordt aangeraden om mainfile.php aan te passen zoals in README beschreven.");

define("_AM_ADV_SUBTITLECHECK","Controleer of Protector goed werkt");
define("_AM_ADV_CHECKCONTAMI","Vervuilingen");
define("_AM_ADV_CHECKISOCOM","Enkel commentaarteken");

// Localization by ezsky
define("_AM_EZ_PREFIX", "Prefix");
define("_AM_EZ_TABLES", "Tabellen");
define("_AM_EZ_UPDATED", "Bijgewerkt");
define("_AM_EZ_COPY", "Kopieer");
define("_AM_EZ_ACTIONS", "Handelingen");
define("_AM_EZ_BACKUP", "Backup");
define("_AM_EZ_DELETE", "Verwijder");

?>