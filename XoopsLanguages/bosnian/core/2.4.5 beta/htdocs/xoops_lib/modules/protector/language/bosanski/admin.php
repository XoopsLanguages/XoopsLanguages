<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Blok Pode¹avanja');
define('_MD_A_MYMENU_MYPREFERENCES','Pode¹avanja');

// index.php
define("_AM_TH_DATETIME","Vrijeme");
define("_AM_TH_USER","Korisnik");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","Type");
define("_AM_TH_DESCRIPTION","Opis");

define("_AM_TH_BADIPS" , 'Lo&scaron;e IP<br /><br /><span style="font-weight:normal;">Svaka IP adresa u novi red<br />Ako je prazno polje za IP adrese onda je svakoj IP dozvoljen pristup stranici</span>' ) ;

define("_AM_TH_GROUP1IPS" , 'Odobrene IP adrese za Grupe=1<br /><br /><span style="font-weight:normal;">Svaka IP adresa u novi red.<br />192.168. zna&#269;i 192.168.*<br />Ako je prazno polje za IP adrese onda je svakoj IP dozvoljen pristup administraciji</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "Kompaktni protokol" ) ;
define("_AM_BUTTON_COMPACTLOG" , "Kompaktiraj ga!" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "Duple (IP,Typovi) bi&#263;e iz arhive izbrisani" ) ;
define("_AM_LABEL_REMOVEALL" , "Izbri&scaron;i sve iz arhive" ) ;
define("_AM_BUTTON_REMOVEALL" , "Izbri&scaron;i sve!" ) ;
define("_AM_JS_REMOVEALLCONFIRM" , "Svi protokoli bi&#263;e iz arhive izbrisani, OK?" ) ;
define("_AM_LABEL_REMOVE" , "Markirane izvje&scaron;taje izbri&scaron;i:" ) ;
define("_AM_BUTTON_REMOVE" , "Izbri&scaron;i!" ) ;
define("_AM_JS_REMOVECONFIRM" , "Izbrisati treba,jel OK?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Podaci za IP adrese su aktulizirani" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Podatak za lo&scaron;e IP adrese se nemo&#382;e otvoriti" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Podatak za Grupe=1 se nemo&#382;e otvoriti" ) ;
define("_AM_MSG_REMOVED" , "Izvje&scaron;aji su izbrisani" ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "Ovaj direktorij mora biti odobren za systemsko upisivanje(cmod): %s" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Prefix Menadzer" ) ;
define("_AM_MSG_DBUPDATED" , "Baza podataka je uspje&scaron;no aktulizirana!" ) ;
define("_AM_CONFIRM_DELETE" , "Svi podaci bi&#263;e izbrisani. OK?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Ako Prefix mjenjati &#382;eli&scaron;<br /> uredi %s/mainfile.php manuelno.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Nije sigurno");

define("_AM_ADV_TRUSTPATHPUBLIC","Ako vidi&scaron; sliku -NG- ili ti link vra&#263;a na normalnu stranicu, onda tvoj XOOPS_TRUST_PATH nije postavljen ispravno. Najbolje mjesto za XOOPS_TRUST_PATH ispred Root na serveru. Ako ga nemo&#382;e&scaron; kreirati ispred onda mora&scaron; .htaccess (DENY FROM ALL) samo unutar XOOPS_TRUST_PATH obavezno koristiti.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Provjeri php podatke unutar TRUST_PATH moraju biti privatni za druge posjetioce (mora biti 404,403 ili 500 gre&scaron;ka vidna");
define("_AM_ADV_REGISTERGLOBALS","Ovo pode&scaron;avanje u&#269;itava razne forme od Code Injekcija.<br />Ako ide, u root postavi .htaccess-podatak...");
define("_AM_ADV_ALLOWURLFOPEN","Ovde se pode&scaron;ava odobrenja za napada&#269;e koji napadaju stvarnim Scriptama sa udaljenih Systema.<br />Samo Administrator od Servera mo&#382;e ovu opciju promjenuti.<br />Ako si ti Admin Servera, uredi php.ini ili httpd.conf po upustvu.<br /><b>Naprimjer za httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Ako nisi Admin Servera, zamoli Administratora da ti tu uslugu uradi.");
define("_AM_ADV_USETRANSSID","Tvoj Session ID bi&#263;e prikazan u ahorn ankeru.<br />For preventing from session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Ovo pode&scaron;avanje u&#269;itava  'SQL Injekcije' .<br />Ne zaboravi 'Prinudno saniranje *' u pode&scaron;avanju ovoga Modula da aktivira&scaron;.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Idi u Prefix-Menadzer");
define("_AM_ADV_MAINUNPATCHED","Protector mo&#382;e webstranicu pod odre&#273;enim uslovima da za&scaron;titi, ako se iz mainfile.php podaci pozivaju.<br />Ovaj podatak mora&scaron; kako pi&scaron;e u README podatku da uredi&scaron;.");

define("_AM_ADV_SUBTITLECHECK","Provjeri dali Protector ispravno funkcioni&scaron;e");
define("_AM_ADV_CHECKCONTAMI","Infekcije");
define("_AM_ADV_CHECKISOCOM","Isolirani komentari");

// Localization by ezsky
define("_AM_EZ_PREFIX","Prefix");
define("_AM_EZ_TABLES","Tabele");
define("_AM_EZ_UPDATED","Aktulizirano");
define("_AM_EZ_COPY","Copy");
define("_AM_EZ_ACTIONS","Akcija");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Izbri&scaron;i");


?>