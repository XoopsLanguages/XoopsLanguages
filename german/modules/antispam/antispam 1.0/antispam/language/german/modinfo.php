<?php
/**
 * $Id: modinfo.php,v 1.7 2008/10/13 11:52:53 xoops Exp $
 * Module: badbehavior
 * Version: v 1.00
 * Author: yerres
 * Licence: GNU
 */



// The name of this module
global $xoopsModule;
define("_MI_BB2_MD_NAME","Antispam");

// A brief description of this module
define("_MI_BB2_MD_DESC","Spam protection module");

// module options
$cf=1;
define("_MI_BB2_STRICT_MODE","$cf. Strikten Modus verwenden ?");
define("_MI_BB2_STRICT_MODEDSC","Aktiviere striktes prüfen (blockt mehr Spambots aber evtl. auch Benutzer).");
$cf++;
define("_MI_BB2_VERBOSE","$cf. Verbose logging aktivieren ?"); 
define("_MI_BB2_VERBOSEDSC","Aktiviert das Verbose Logging: Es werden alle Zugriffe geloggt, nicht nur Fehlermeldungen."); 
$cf++;
define("_MI_BB2_ALERTMAIL","$cf. Hier ihre Notfall E-mail angeben");
define("_MI_BB2_ALERTMAILDSC","Email Adressse eines Administrators den geblockte Benutzer kontaktieren können um wieder Zugang zur Site zu erlangen");
$cf++;
define("_MI_BB2_HTTPBLKEY","$cf. Optional können Sie hier ihre Honeypot-ID eingeben");
define("_MI_BB2_HTTPBLKEYDSC","Falls Sie HTTP:BL mit BadBehavior verwenden wollen, legen Se sich einen HTTP:BL key von Project HoneyPot zu");

// Names of admin menu items
define("_MI_BB2_ADMENU0","Index");
define("_MI_BB2_ADMENU1","Statistik");
// Names of admin header menu items
define('_MI_BB2_HDMENU0','Modul Templates aktualisieren');
define("_MI_BB2_HDMENU1","Über");

?>