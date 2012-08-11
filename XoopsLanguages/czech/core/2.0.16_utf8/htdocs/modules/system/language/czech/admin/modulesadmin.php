<?php
// $Id: modulesadmin.php,v 1.5 2003/02/12 11:38:42 okazu Exp $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Administrace modulů");
define("_MD_AM_MODULE","Modul");
define("_MD_AM_VERSION","Verze");
define("_MD_AM_LASTUP","Posl. aktualizace");
define("_MD_AM_DEACTIVATED","Neaktivní");
define("_MD_AM_ACTION","Akce");
define("_MD_AM_DEACTIVATE","Deaktivovat");
define("_MD_AM_ACTIVATE","Aktivovat");
define("_MD_AM_UPDATE","Aktualizovat");
define("_MD_AM_DUPEN","Duplicitní záznam v databázi!");
define("_MD_AM_DEACTED","Vybraný modul byl deaktivován. Nyní můžete modul bezpečně odinstalovat.");
define("_MD_AM_ACTED","Vybraný modul byl aktivován!");
define("_MD_AM_UPDTED","Vybraný modul byl aktualizován!");
define("_MD_AM_SYSNO","Systémový modul nelze deaktivovat.");
define("_MD_AM_STRTNO","Tento modul je nastaven jako výchozí stránka serveru...");

// added in RC2
define("_MD_AM_PCMFM","Potvrzení:");

// added in RC3
define("_MD_AM_ORDER","Váha");
define("_MD_AM_ORDER0","(0 = skrýt)");
define("_MD_AM_ACTIVE","Aktivní");
define("_MD_AM_INACTIVE","Neaktivní");
define("_MD_AM_NOTINSTALLED","Nenainstalován");
define("_MD_AM_NOCHANGE","Beze změny");
define("_MD_AM_INSTALL","Instalovat");
define("_MD_AM_UNINSTALL","Odinstalovat");
define("_MD_AM_SUBMIT","Potvrdit");
define("_MD_AM_CANCEL","Storno");
define("_MD_AM_DBUPDATE","Databáze byla úspěšně aktualizována!");
define("_MD_AM_BTOMADMIN","Zpět do administrace modulů");

// %s represents module name
define("_MD_AM_FAILINS","Nelze nainstalovat modul <b>%s</b>.");
define("_MD_AM_FAILACT","Nelze aktivovat modul <b>%s</b>.");
define("_MD_AM_FAILDEACT","Nelze deaktivovat modul <b>%s</b>.");
define("_MD_AM_FAILUPD","Nelze aktualizovat modul <b>%s</b>.");
define("_MD_AM_FAILUNINS","Nelze odinstalovat modul <b>%s</b>.");
define("_MD_AM_FAILORDER","Nelze změnit váhu modulu <b>%s</b>.");
define("_MD_AM_FAILWRITE","Nelze zapisovat do hlavní nabídky.");
define("_MD_AM_ALEXISTS","Modul <b>%s</b> již existuje.");
define("_MD_AM_ERRORSC","Chyby:");
define("_MD_AM_OKINS","Modul <b>%s</b> byl nainstalován.");
define("_MD_AM_OKACT","Modul <b>%s</b> byl aktivován.");
define("_MD_AM_OKDEACT","Modul <b>%s</b> byl deaktivován.");
define("_MD_AM_OKUPD","Modul <b>%s</b> byl aktualizován.");
define("_MD_AM_OKUNINS","Modul <b>%s</b> byl odinstalován.");
define("_MD_AM_OKORDER","Modul <b>%s</b> byl změněn.");

define('_MD_AM_RUSUREINS','Potvrďte instalaci tohoto modulu');
define('_MD_AM_RUSUREUPD','Potvrďte aktualizaci tohoto modulu');
define('_MD_AM_RUSUREUNINS','Opravdu chcete odinstalovat tento modul?');
define('_MD_AM_LISTUPBLKS','Následující bloky budou aktualizovány.<br />Vyberte bloky, jejichž obsah má být přepsán.<br />');
define('_MD_AM_NEWBLKS','Nové bloky');
define('_MD_AM_DEPREBLKS','Nepovolené bloky');
?>