<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Behörigheter');
define('_MD_A_MYMENU_MYPREFERENCES','Inställningar');

// index.php
define("_AM_TH_DATETIME","Tid");
define("_AM_TH_USER","Användare");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","Typ");
define("_AM_TH_DESCRIPTION","Beskrivning");

define("_AM_TH_BADIPS" , 'Otillåtna IP-adresser<br /><br /><span style="font-weight:normal;">Skriv varje IP-adress på en egen rad.<br />Helt blankt fält betyder att alla IP-adresser är tillåtna</span>' ) ;

define("_AM_TH_GROUP1IPS" , 'Tillåtna IP adresser för grupp=1<br /><br /><span style="font-weight:normal;">Skriv varje IP-adress på en egen rad.<br />192.168. betyder 192.168.*<br />Helt blankt fält betyder att alla IP-adresser är tillåtna</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "Pressa ihop log" ) ;
define("_AM_BUTTON_COMPACTLOG" , "Pressa ihop den!" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "Dubletter (IP,typ) kommer tas bort" ) ;
define("_AM_LABEL_REMOVEALL" , "Ta bort all data" ) ;
define("_AM_BUTTON_REMOVEALL" , "Ta bort allt!" ) ;
define("_AM_JS_REMOVEALLCONFIRM" , "Alla loggar tas bort permanent. Är du säker på att du vill göra det här?" ) ;
define("_AM_LABEL_REMOVE" , "Ta bort valda loggar:" ) ;
define("_AM_BUTTON_REMOVE" , "Ta bort!" ) ;
define("_AM_JS_REMOVECONFIRM" , "Är du säker på att du vill ta bort valda loggar?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Filer för IP-adresser har uppdaterats" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Filen för otillåtna IP-adresser kan inte öppnas" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Filen för att tillåta grupp=1 kan inte öppnas" ) ;
define("_AM_MSG_REMOVED" , "Data borttaget" ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "Gör konfigureringskatalogen skrivbar: %s" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Prefixhanterare" ) ;
define("_AM_MSG_DBUPDATED" , "Databasen uppdaterades!" ) ;
define("_AM_CONFIRM_DELETE" , "All data kommer raderas. Är du säker på att du vill gör det här?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Om du vill ändra prefix,<br /> redigera %s/mainfile.php manuellt.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Inte säker");

define("_AM_ADV_TRUSTPATHPUBLIC","Om du kan se en bild -NG- eller om länken returnerar en normal sida så är din XOOPS_TRUST_PATH inte rätt placerad. Det bästa stället för XOOPS_TRUST_PATH är utanför dokumentroten. Om du inte kan göra det måste du lägga .htaccess (DENY FROM ALL) i XOOPS_TRUST_PATH istället.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Kontrollera att PHP-filer i TRUST_PATH är privata (måste returnera 404,403 eller 500 error");
define("_AM_ADV_REGISTERGLOBALS","Den här inställningen inbjuder till ett flertal typer av attacker.<br />Om du kan lägga .htaccess, redigera eller skapa...");
define("_AM_ADV_ALLOWURLFOPEN","Den här inställningen tillåter folk som vill attackera din sajt att köra skript på fjärrservrar.<br />Bara en administratör kan ändra det här alternativet.<br />Om du är en administratör, redigera edit php.ini eller httpd.conf.<br /><b>Exempel på httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Om inte, be din administratör att ändra inställningen.");
define("_AM_ADV_USETRANSSID","Ditt sessions-ID kommer visas i ankartaggar etc.<br />För att hindra kapning av sessioner, lägg till en rad i .htaccess i XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Den här inställningen inbjuder till 'SQL Injections'.<br />Glöm inte att slå på 'Force sanitizing *' i den här modulens inställningar.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Gå till prefixhanteraren");
define("_AM_ADV_MAINUNPATCHED","Du bör ändra din mainfile.php enligt anvisningarna i README.");

define("_AM_ADV_SUBTITLECHECK","Kontrollera om Protector fungerar");
define("_AM_ADV_CHECKCONTAMI","Kontamineringar");
define("_AM_ADV_CHECKISOCOM","Isolerade kommentarer");


?>