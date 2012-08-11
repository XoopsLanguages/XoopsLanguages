<?php

// mymenu
define("_MD_A_MYMENU_MYTPLSADMIN","");
define("_MD_A_MYMENU_MYBLOCKSADMIN","Behörigheter"); 
define("_MD_A_MYMENU_MYPREFERENCES","Inställningar");

// index.php
define("_AM_TH_DATETIME","Tid"); 
define("_AM_TH_USER","Använder"); 
define("_AM_TH_IP","IP"); 
define("_AM_TH_AGENT","agent"); 
define("_AM_TH_TYPE","typ"); 
define("_AM_TH_DESCRIPTION","Beskrivning");

define("_AM_TH_BADIPS" , 'Skadelige IP-adresser<br /><br /><span style="font-weight:normal;">Skriv varje IP-adress på en linje<br />blank= alla IP-adresser är tillåtna</span>' ) ;

define("_AM_TH_GROUP1IPS" , 'Tillåtna IP-adresser för grupp=1<br /><br /><span style="font-weight:normal;">Skriv varje IP-adress på en linje.<br />192.168. är lika 192.168.*<br />blank= alla IP-adresser är tillåtna</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "Kompakt logg" ) ;
define("_AM_BUTTON_COMPACTLOG" , "Gör den kompakt!" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "Duplicerade (IP-adresser, typ) kommer att bli utesluten" ) ;
define("_AM_LABEL_REMOVEALL","Ta bort alla poster"); 
define("_AM_BUTTON_REMOVEALL","Ta bort alla!");
define("_AM_JS_REMOVEALLCONFIRM","Alla loggar är borttagit absolut. Är du verkligen SÄKKER?"); 
define("_AM_LABEL_REMOVE","Ta bort alla markerade uppgifter:"); 
define("_AM_BUTTON_REMOVE" , "Ta bort!" ) ;
define("_AM_JS_REMOVECONFIRM" , "Ta bort OKEJ?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Filer till IP-adresser har blivit uppdaterad" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Filen för slemme IP-adresser kan inte nås" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Den fil, som innehåller tillåtna IP-adresser för grupp=1 kan inte öppnas" ) ;
define("_AM_MSG_REMOVED" , "Uppgifter är borttagit" ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "Gör configs-mappen skrivbar: %s" ) ;

// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Prefix Hanterare" ) ;
define("_AM_MSG_DBUPDATED" , "Databasen uppdaterad utan fel!");
define("_AM_CONFIRM_DELETE" , "Alla data kommer att bli raderat. OK?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Om du önskar att ändra prefix,<br /> skall du redigera %s/mainfile.php manuelt.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Inte säker");

define("_AM_ADV_REGISTERGLOBALS","Denna inställning bjuder in till en lång rad olika angrepp.<br />Om du har möjlighet för att tillverka eller redigerar .htaccess, så gör detta");
define("_AM_ADV_ALLOWURLFOPEN","Denna inställning gör det möjligt för hackare att exekvera slumpmässig scripts på externa server.<br />Bara server-administator kan ändra denna inställning.<br />Om du er server-administrator, skall du rättad den i php.ini eller httpd.conf.<br /><b>Exempel på httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Om du inte er server-administrator, så hör denna, om de vill ändra inställningen.");
define("_AM_ADV_USETRANSSID","Din Session ID kommer att bli visad i anchor tags etc.<br />För att förhindra denna typ hi-jacking, tillägg denna rad i .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Denna inställning bjuder in till 'SQL Injections'.<br />Glöm inte att inställa 'Force sanitizing *' i denna moduls inställningar.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Prefix Hanterare");
define("_AM_ADV_MAINUNPATCHED","Du skall redigera din mainfile, som beskrivit i README. Om du er i tvivel, så sök hjälp på www.xoopsnordic.org");

define("_AM_ADV_SUBTITLECHECK","Check om Protector fungerar korrekt");
define("_AM_ADV_CHECKCONTAMI","Period");
define("_AM_ADV_CHECKISOCOM","Isolerat kommentarer");


// Localization by ezsky
define("_AM_EZ_PREFIX","Prefix");
define("_AM_EZ_TABLES","Tabeller");
define("_AM_EZ_UPDATED","Uppdaterad");
define("_AM_EZ_COPY","Kopiera");
define("_AM_EZ_ACTIONS","Åtgärd");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Radera");

?>