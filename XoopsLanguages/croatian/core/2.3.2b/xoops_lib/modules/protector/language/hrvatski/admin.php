<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Dozvole');
define('_MD_A_MYMENU_MYPREFERENCES','Postavke');

// index.php
define("_AM_TH_DATETIME","Vrijeme");
define("_AM_TH_USER","Korisnik");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","Tip");
define("_AM_TH_DESCRIPTION","Opis");

define("_AM_TH_BADIPS" , 'Loši IP-ovi<br /><br /><span style="font-weight:normal;">Zapišite svaki IP u novi red<br />prazno znači da su svi IP-ovi dopušteni</span>' ) ;

define("_AM_TH_GROUP1IPS" , 'Dopušteni IP-ovi za grupu=1<br /><br /><span style="font-weight:normal;">Zapišite svaki IP u novi red.<br />192.168. znači 192.168.*<br />prazno znači da su svi IP-ovi dopušteni</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "Zbijeni zapis" ) ;
define("_AM_BUTTON_COMPACTLOG" , "Zbij ga!" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "Duplicirani (IP,Tipovi) zapisi će biti obrisani" ) ;
define("_AM_LABEL_REMOVEALL" , "Obriši sve zapise" ) ;
define("_AM_BUTTON_REMOVEALL" , "Obriši sve!" ) ;
define("_AM_JS_REMOVEALLCONFIRM" , "Svi zapisi će biti potpuno obrisani. Jeste li SIGURNI?" ) ;
define("_AM_LABEL_REMOVE" , "Obriši označene zapise:" ) ;
define("_AM_BUTTON_REMOVE" , "Obriši!" ) ;
define("_AM_JS_REMOVECONFIRM" , "Brisanje UREDU?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Datoteke za IP-ove su ažurirane" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Datoteka za loše IP-ove se ne može otvoriti" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Datoteka za dopuštenje grupe=1 se ne može otvoriti" ) ;
define("_AM_MSG_REMOVED" , "Zapisi su obrisani" ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "Omogućite zapisivanje u mapu sa postavkama: %s" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Upravitelj prefiksa" ) ;
define("_AM_MSG_DBUPDATED" , "Baza podataka je uspješno ažurirana!" ) ;
define("_AM_CONFIRM_DELETE" , "Podataka će biti obrisan. UREDU?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Ako želite promjeniti prefiks,<br /> uredite %s/mainfile.php rucno.<br /><br />odredite('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Nije sigurno");

define("_AM_ADV_TRUSTPATHPUBLIC","Ako možete vidjeti sliku -NG- ili link vraća normalnu stranicu, vaš XOOPS_TRUST_PATH je pravilno postavljen. Najbolje mjesto za XOOPS_TRUST_PATH je izvan početne mape. Ako to ne možete, morate postaviti .htaccess (DENY FROM ALL) odmah iznad XOOPS_TRUST_PATH kao drugo najbolje rješenje.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Provjerite da li su php datoteke unutar TRUST_PATH privatne (moraju vratiti 404,403 ili 500 grešku");

define("_AM_ADV_REGISTERGLOBALS","Ove postavke pozivaju razne napade ubacivanjem.<br />Ako možete postaviti .htaccess, uredite ili stvorite...");
define("_AM_ADV_ALLOWURLFOPEN","Ove postavke omogućuju napadačima da izvršavaju svoje skripte na udaljenim poslužiteljima.<br />Samo administrator može promjeniti ovu opciju.<br />Ako ste vi administrator, uredite php.ini ili httpd.conf.<br /><b>Primjer za httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Inače, zatražite to od vašeg administratora.");
define("_AM_ADV_USETRANSSID","Vaš ID sesije će biti zapisan u tagu anchor itd.<br />Radi sprecavanja krade sesija, dodajte liniju u .htaccess u XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Ove postavke pozivaju 'SQL ubacivanje'.<br />Ne zaboravite uključiti 'Prisilno čišćenje *' u postavkama ovog modula.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Idi na upravitelja prefiksa");
define("_AM_ADV_MAINUNPATCHED","Trebali bi urediti vaš mainfile.php kako je zapisano u README.");

define("_AM_ADV_SUBTITLECHECK","Provjeri da li zaštita radi dobro");
define("_AM_ADV_CHECKCONTAMI","Zagadenja");
define("_AM_ADV_CHECKISOCOM","Izolirani komentari");

// Localization by ezsky
define("_AM_EZ_PREFIX","Prefiks");
define("_AM_EZ_TABLES","Tablice");
define("_AM_EZ_UPDATED","Ažurirano");
define("_AM_EZ_COPY","Kopija");
define("_AM_EZ_ACTIONS","Radnje");
define("_AM_EZ_BACKUP","Sigurnosna kopija");
define("_AM_EZ_DELETE","Obriši");


?>