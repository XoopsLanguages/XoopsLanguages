<?php

// mymenu




// Appended by Xoops Language Checker -GIJOE- in 2009-01-14 11:10:53
define('_AM_ADV_DBFACTORYPATCHED','Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED','Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.');

// Appended by Xoops Language Checker -GIJOE- in 2008-12-03 11:47:20
define('_AM_ADV_TRUSTPATHPUBLIC','If you can look an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.');
define('_AM_ADV_TRUSTPATHPUBLICLINK','Check php files inside TRUST_PATH are private (it must be 404,403 or 500 error');

// Appended by Xoops Language Checker -GIJOE- in 2007-10-18 05:36:25
define('_AM_LABEL_COMPACTLOG','Compact log');
define('_AM_BUTTON_COMPACTLOG','Compact it!');
define('_AM_JS_COMPACTLOGCONFIRM','Duplicated (IP,Type) records will be removed');
define('_AM_LABEL_REMOVEALL','Remove all records');
define('_AM_BUTTON_REMOVEALL','Remove all!');
define('_AM_JS_REMOVEALLCONFIRM','All logs are removed absolutely. Are you really OK?');

// Appended by Xoops Language Checker -GIJOE- in 2007-07-30 05:37:52
define('_AM_FMT_CONFIGSNOTWRITABLE','Turn the configs directory writable: %s');

define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Ïðàâà äîñòóïà');
define('_MD_A_MYMENU_MYPREFERENCES','Íàñòðîéêè');

// index.php
define("_AM_TH_DATETIME","Âðåìÿ");
define("_AM_TH_USER","Ïîëüçîâàòåëü");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","User-Agent");
define("_AM_TH_TYPE","Òèï");
define("_AM_TH_DESCRIPTION","Îïèñàíèå");

define("_AM_TH_BADIPS" , "Çàïðåùåííûå IP" ) ;

define("_AM_TH_GROUP1IPS" , 'Ðàçðåøåííûå IP äëÿ  Group=1 (Àäìèíèñòðàòîð)<br /><br /><span style="font-weight:normal;">Ââåñòè ðàçðåøåííûå IP ïî îäíîìó íà ñòðîêó.<br />192.168. means 192.168.*<br />íåçàïîëíåíèå ýòîãî îêíà îçíà÷àåò, ÷òî âñå IP èìåþò äîñòóï</span>' ) ;

//define("_AM_TH_ENABLEIPBANS" , "Âêëþ÷èòü ìåõàíèçì áàíîâ ïî IP?" ) ;
define("_AM_LABEL_REMOVE" , "Óäàëèòü îòìå÷åíûå çàïèñè:" ) ;
define("_AM_BUTTON_REMOVE" , "Óäàëèòü" ) ;
define("_AM_JS_REMOVECONFIRM" , "Óäàëÿåì?" ) ;
define("_AM_MSG_IPFILESUPDATED" , "Ôàéëû äëÿ IP áûëè îáíîâëåíû" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "Ôàéë äëÿ ïëîõîãî IP íå ìîæåò áûòü îòêðûò" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "ôàéë äëÿ äîñòóïà group=1 íå ìîæåò áûòü îòêðûò" ) ;
define("_AM_MSG_PRUPDATED" , "Íàñòðîéêè óñïåøíî îáíîâëåíû!" ) ;
define("_AM_MSG_REMOVED" , "Çàïèñè óäàëåíû" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Óïðàâëåíèå ïðåôèêñîì òàáëèö" ) ;
define("_AM_MSG_DBUPDATED" , "Áàçà äàííûõ óñïåøíî îáíîâëåíà!" ) ;
define("_AM_CONFIRM_DELETE" , "Âñå äàííûå áóäóò óíè÷òîæåíû. Ïðîäîëæàòü?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Åñëè âû õîòèòå èçìåíèòü ïðåôèêñ òàáëèö, îòðåäàêòèðóéòå âàø êîíôèãóðàöèîííûé ôàéë %s/mainfile.php âðó÷íóþ âíåñÿ èçìåíåíèÿ â ñòðîêó óêàçàíóþ íèæå.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Òåñò ÍÅ ïðîéäåí");

define("_AM_ADV_REGISTERGLOBALS","Òåêóùàÿ êîíôèãóðàöèÿ ïîçâîëÿåò ïðîâîäèòü öåëûé ñïåêòð àòàê ñ çàìåùåíèåì çíà÷åíèé ïåðåìåííûõ.<br />Åñëè âû èìååòå äîñòóï ê ôàéëó .htaccess ñîçäàéòå åãî èëè îòðåäàêòèðóéòå ýòîò ôàéë äîáàâèâ ê íåìó ñòðîêó óêàçàíóþ íèæå.");
define("_AM_ADV_ALLOWURLFOPEN","Òåêóùàÿ êîíôèãóðàöèÿ ïîçâîëÿåò àòàêóþùèì âûïîëíÿòü ïðîèçâîëüíûå ñêðèïòû íà óäàëåííûõ ìàøèíàõ.<br />Òîëüêî àäìèíèñòðàòîð ñåðâåðà ìîæåò èçìåíèòü ýòó îïöèþ.<br />Åñëè âû ÿâëÿåòåñü àäìèíèñòðàòîðîì îòðåäàêòèðóéòå ôàéë php.ini èëè httpd.conf.<br /><b>Ïðèìåð äëÿ httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Èëè ïîïðîñèòå îá ýòîì Âàøåãî àäìèíèñòðàòîðà.");
define("_AM_ADV_USETRANSSID","ID âàøåé ñåññèè îòîáðàæàåòñÿ â òåãàõ ññûëîê è äð.<br />
	Âî èçáåæàíèå èñïîëüçîâàíèÿ ID âàøåé ñåññèè òðåòüèìè ëèöàìè äîáàâüòå ñëåäóþùóþ ñòðîêó â âàø ôàéë .htaccess ðàñïîëîæåíûé â êàòàëîãå: 'XOOPS_ROOT_PATH<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Òåêóùåå çíà÷åíèå ïðåôèêñà òàáëèö ÁÄ ïîçâîëÿåò ïðîâîäèòü êëàññ ò.í. 'SQL Injecting' àòàê.<br />Íå çàáóäüòå âêëþ÷èòü 'Ïðèíóäèòåëüíóþ î÷èñòêó ïåðåìåííûõ *' â êîíôèãóðàöèîííîì ðàçäåëå ýòîãî ìîäóëÿ.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Ïåðåéòè ê ðàçäåëó óïðàâëåíèÿ ïðåôèêñàìè ÁÄ.");
define("_AM_ADV_MAINUNPATCHED","Âû äîëæíû îòðåäàêòèðîâàòü Âàø ôàéë mainfile.php òàê, êàê ýòî îïèñàíî â README.");
//define("_AM_ADV_RESCUEPASSWORD","Ïàðîëü äëÿ ñíÿòèÿ áàíà ñ âàøåãî IP");
//define("_AM_ADV_RESCUEPASSWORDUNSET","Íå óñòàíîâëåí");
//define("_AM_ADV_RESCUEPASSWORDSHORT","Ñëèøêîì êîðîòêèé (ìèíèìàëüíàÿ äëèíà 6 ñèìâîëîâ)");

define("_AM_ADV_SUBTITLECHECK","Ïðîâåðêà ðàáîòîñïîñîáíîñòè");
//define("_AM_ADV_AT1STSETPASSWORD","Óñòàíîâèòå âàø ðåçåðâíûé ïàðîëü ïåðåä ïðîâåðêîé.");
define("_AM_ADV_CHECKCONTAMI","Ïîð÷à ïåðåìåííûõ");
define("_AM_ADV_CHECKISOCOM","Èçîëèðîâàíûå êîììåíòàðèè");



?>
