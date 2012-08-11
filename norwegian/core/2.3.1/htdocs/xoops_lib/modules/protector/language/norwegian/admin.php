<?php

// mymenu
define("_MD_A_MYMENU_MYTPLSADMIN","");
define("_MD_A_MYMENU_MYBLOCKSADMIN","Tillatelser"); 
define("_MD_A_MYMENU_MYPREFERENCES","Innstillinger");

// index.php
define("_AM_TH_DATETIME","Tid"); 
define("_AM_TH_USER","Bruker"); 
define("_AM_TH_IP","IP"); 
define("_AM_TH_AGENT","agent"); 
define("_AM_TH_TYPE","type"); 
define("_AM_TH_DESCRIPTION","Beskrivelse");

define("_AM_TH_BADIPS" , 'Skadelige IP-adresser<br /><br /><span style="font-weight:normal;">Skriv hver IP-adresse på en linje<br />blank= alle IP-adresser er er tillatte</span>' ) ;

define("_AM_TH_GROUP1IPS" , 'Tillatte IP-adresser for gruppe=1<br /><br /><span style="font-weight:normal;">Skriv hver IP-adresse på en linje.<br />192.168. er er lig 192.168.*<br />blank= alle IP-adresser er er tillatte</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "Kompakt logg" ) ;
define("_AM_BUTTON_COMPACTLOG" , "Gjør den kompakt!" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "Duplikerede (IP-adresser, type) vil bli fjernet" ) ;
define("_AM_LABEL_REMOVEALL","Fjern alle poster"); 
define("_AM_BUTTON_REMOVEALL","Fjern alle!");
define("_AM_JS_REMOVEALLCONFIRM","Alle loggfiler fjernes helt. Er det virkelig OK?"); 
define("_AM_LABEL_REMOVE","Fjern alle markerte records:"); 
define("_AM_BUTTON_REMOVE" , "Fjern!" ) ;
define("_AM_JS_REMOVECONFIRM" , "OK at fjerne?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Filer til IP-adresser er blitt oppdatert" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Filen for slemme IP-adresser kan ikke nås" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Den fil som inneholder tillatte IP-adresser for gruppe=1 kan ikke åpnes" ) ;
define("_AM_MSG_REMOVED" , "Records er fjernet" ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "Gjør configs-mappen skrivbar: %s" ) ;

// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Prefiks vedlikehold" ) ;
define("_AM_MSG_DBUPDATED" , "Databasen oppdatert uten feil!");
define("_AM_CONFIRM_DELETE" , "Alle data vil bli slettet. OK?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Hvis du ønsker å endre prefiks,<br /> skal du redigere %s/mainfile.php manuelt.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Ikke sikker");

define("_AM_ADV_REGISTERGLOBALS","Denne innstilling innbyr til en rekke forskjellige angrep.<br />Hvis du har mulighet for å lage eller redigere .htaccess, så gjør det");
define("_AM_ADV_ALLOWURLFOPEN","Denne innstilling gjør det mulig for hackere at eksekvere vilkårlig scripts på eksterne servere.<br />Kun server-administator kan ændre denne innstilling.<br />Hvis du er server-administrator, skal du rette det i php.ini eller httpd.conf.<br /><b>Eksempel på httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Hvis du ikke er server-administrator, så kontakt denne, om de vil endre innstillingen.");
define("_AM_ADV_USETRANSSID","Din Session ID vil bli vist i anchor tags etc.<br />For å forhindre denne type hi-jacking, tilføy denne linje i .htaccess i XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Denne innstilling innbyr til 'SQL Injections'.<br />Glem ikke at innstille 'Force sanitizing *' i denne moduls innstillinger.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Prefiks vedlikehold");
define("_AM_ADV_MAINUNPATCHED","Du skal redigerere din mainfile, som beskrevet i README. Hvis du er i tvil, så søk hjelp på www.xoopsnordic.org");

define("_AM_ADV_SUBTITLECHECK","Sjekk om Protector virker korrekt");
define("_AM_ADV_CHECKCONTAMI","Periode");
define("_AM_ADV_CHECKISOCOM","Isolerte kommentarer");


// Localization by ezsky
define("_AM_EZ_PREFIX","Prefiks");
define("_AM_EZ_TABLES","Tabeller");
define("_AM_EZ_UPDATED","Oppdatert");
define("_AM_EZ_COPY","Kopier");
define("_AM_EZ_ACTIONS","Handling");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Slett");

?>