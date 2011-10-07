<?php

// mymenu
define( "_MD_A_MYMENU_MYTPLSADMIN","");
define( "_MD_A_MYMENU_MYBLOCKSADMIN","Tilladelser"); 
define( "_MD_A_MYMENU_MYPREFERENCES","Indstillinger");

// index.php
define( "_AM_TH_DATETIME", "Tid"); 
define( "_AM_TH_USER", "Bruger"); 
define( "_AM_TH_IP", "IP"); 
define( "_AM_TH_AGENT", "agent"); 
define( "_AM_TH_TYPE", "type"); 
define( "_AM_TH_DESCRIPTION", "Beskrivelse");

define( "_AM_TH_BADIPS" , 'Skadelige IP-adresser<br /><br /><span style="font-weight:normal;">Skriv hver IP-adresse på en linje<br />blank= alle IP-adresser er er tilladte</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'Tilladte IP-adresser for gruppe=1<br /><br /><span style="font-weight:normal;">Skriv hver IP-adresse på en linje.<br />192.168. er er lig 192.168.*<br />blank= alle IP-adresser er er tilladte</span>' ) ;

define( "_AM_LABEL_COMPACTLOG" , "Kompakt log" ) ;
define( "_AM_BUTTON_COMPACTLOG" , "Gør den kompakt!" ) ;
define( "_AM_JS_COMPACTLOGCONFIRM" , "Duplikerede (IP-adresser, type) vil blive fjernet" ) ;
define( "_AM_LABEL_REMOVEALL","Fjern alle poster"); 
define( "_AM_BUTTON_REMOVEALL","Fjern alle!");
define( "_AM_JS_REMOVEALLCONFIRM", "Alle logfiler fjernes helt. Er det virkelig OK?"); 
define( "_AM_LABEL_REMOVE", "Fjern alle markerede records:"); 
define( "_AM_BUTTON_REMOVE" , "Fjern!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "OK at fjerne?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Filer til IP-adresser er blevet opdateret" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Filen for slemme IP-adresser kan ikke nås" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "Den fil, der indeholder tilladte IP-adresser for gruppe=1 kan ikke åbnes" ) ;
define( "_AM_MSG_REMOVED" , "Records er fjernet" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Gør configs-mappen skrivbar: %s" ) ;

// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Præfiks vedligehold" ) ;
define( "_AM_MSG_DBUPDATED" , "Databasen opdateret uden fejl!");
define( "_AM_CONFIRM_DELETE" , "Alle data vil blive slettet. OK?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Hvis du ønsker at ændre præfiks,<br /> skal du rediger %s/mainfile.php manuelt.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;

// advisory.php
define("_AM_ADV_NOTSECURE","Ikke sikker");

define("_AM_ADV_TRUSTPATHPUBLIC","Hvis du kan se et billede -NG- eller linket returnerer en normal side, er din XOOPS_TRUST_PATH er ikke korrekt placeret. Det bedste sted for din XOOPS_TRUST_PATH er uden for Document-Root. Hvis du ikke kan gøre dette, er du nødt til at sætte .htaccess (DENY FROM ALL) lige under XOOPS_TRUST_PATH som en anden måde.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Check om php filer i TRUST_PATH er private (det bør give en 404,403 eller 500 fejl");
define("_AM_ADV_REGISTERGLOBALS","Denne indstilling indbyder til en række forskellige angreb.<br />Hvis du har mulighed for at lave eller redigerer .htaccess, så gør det");
define("_AM_ADV_ALLOWURLFOPEN","Denne indstilling gør det muligt for hackere at eksekvere vilkårlig scripts på eksterne servere.<br />Kun server-administator kan ændre denne indstilling.<br />Hvis du er server-administrator, skal du rettet det i php.ini eller httpd.conf.<br /><b>Eksempel på httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Hvis du ikke er server-administrator, så hør denne, om de vil ændre indstillingen.");
define("_AM_ADV_USETRANSSID","Din Session ID vil blive vist i anchor tags etc.<br />For at forhindre denne type hi-jacking, tilføj denne linie i .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Denne indstilling indbyder til 'SQL Injections'.<br />Glem ikke at indstille 'Force sanitizing *' i dette moduls indstillinger.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Præfiks vedligeholdelse");
define("_AM_ADV_MAINUNPATCHED","Du skal redigerer din mainfile, som beskrevet i README. Hvis du er i tvivl, så søg hjælp på www.xoops.dk");
define("_AM_ADV_DBFACTORYPATCHED","Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.");

define("_AM_ADV_SUBTITLECHECK","Check om Protector virker korrekt");
define("_AM_ADV_CHECKCONTAMI","Periode");
define("_AM_ADV_CHECKISOCOM","Isoleret kommentarer");

?>
