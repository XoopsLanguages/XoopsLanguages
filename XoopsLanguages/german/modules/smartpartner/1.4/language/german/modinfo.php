<?php

/**
* $Id: modinfo.php,v 1.6 2006/03/01 12:41:28 malanciault Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
* Edited by Knollo <www.knollo.de>
*/

define('_MI_SPARTNER_ADMENU1','Hauptindex');
define('_MI_SPARTNER_ADMENU2','Partner');
define('_MI_SPARTNER_ADMENU3','Blöcke');
define('_MI_SPARTNER_ADMENU4','Gruppen');
define('_MI_SPARTNER_ADMENU5','Zum Modul');

define('_MI_SPARTNER_PARTNERS_NAME','SmartPartner');
define('_MI_SPARTNER_PARTNERS_DESC','Partners Management System for your XOOPS 2.x site');
define('_MI_SPARTNER_PARTNERS_ADMIN','Partner bearbeiten');
define('_MI_SPARTNER_PARTNERS_ADMIN_ADD','Partner hinzufügen');
define('_MI_SPARTNER_ID','ID');
define('_MI_SPARTNER_HITS','Treffer');
define('_MI_SPARTNER_TITLE','Titel');
define('_MI_SPARTNER_WEIGHT','Wertung');
define('_MI_SPARTNER_RECLICK','Reclick Zeit:');
define('_MI_SPARTNER_IMAGES','Bilder');
define('_MI_SPARTNER_TEXT','Text Links');
define('_MI_SPARTNER_BOTH','Beides');
define('_MI_SPARTNER_MLIMIT','Limitiere Hauptseite auf xx Einträge: (0 = kein Limit)');
define('_MI_SPARTNER_MSHOW','Zeige auf der Hauptseite:');
define('_MI_SPARTNER_INDEX_SORTBY','Sortiere die Hauptseite nach :');
define('_MI_SPARTNER_INDEX_SORTBY_DSC','');
define('_MI_SPARTNER_INDEX_ORDERBY','Ordne die Hauptseite nach :');
define('_MI_SPARTNER_INDEX_ORDERBY_DSC','');
define('_MI_SPARTNER_HOUR','1 Stunde');
define('_MI_SPARTNER_3HOURS','3 Stunden');
define('_MI_SPARTNER_5HOURS','5 Stunden');
define('_MI_SPARTNER_10HOURS','10 Stunden');
define('_MI_SPARTNER_DAY','1 Tag');

define('_MI_SPARTNER_CAT_FOR_OPT','Formatoptionen');
define('_MI_SPARTNER_CAT_FOR_OPT_DSC','');
define('_MI_SPARTNER_CAT_PERM','Berechtigungen');
define('_MI_SPARTNER_CAT_PERM_DSC','');
define('_MI_SPARTNER_CAT_OTHER','Andere');
define('_MI_SPARTNER_CAT_OTHER_DSC','');

define('_MI_SPARTNER_BLOCK_PARTNERS_LIST','Partner');
define('_MI_SPARTNER_BLOCK_PARTNERS_LIST_DESC','Zeige alle Partner');

define('_MI_SPARTNER_BLOCK_RANDOM_PARTNER','Zuf&aumlllige Partner');
define('_MI_SPARTNER_BLOCK_RANDOM_PARTNER_DESC','Zeige einen Partner zuf&aumlllig an');

define('_MI_SPARTNER_PAGE_PARTNER','Partnerseiten');
define('_MI_SPARTNER_PAGE_INDEX','Indexseite');

define("_MI_SPARTNER_ALLOWSUBMIT","Partner Übermittlungen");
define("_MI_SPARTNER_ALLOWSUBMITDSC","Erlaube Partner Übermittlungen auf deiner Web Seite ?");

define("_MI_SPARTNER_ANONPOST","Erlaube anonyme Übermittlungen");
define("_MI_SPARTNER_ANONPOSTDSC","Erlaube anonymen Usern einen Partner zu übermitteln");

define('_MI_SPARTNER_AUTOAPPROVE',"Automatische Bestätigung Übermittelter Partner");
define('_MI_SPARTNER_AUTOAPPROVE_DSC',"Automatische Bestätigung Übermittelter Partner ohne Administrator Eingriff.");

define('_MI_SPARTNER_PERCAT_USER',"Maximale Partner pro Kategorie (Indexseite):");
define('_MI_SPARTNER_PERCAT_USER_DSC',"Maximale Anzahl von Partnern pro Kategorie, die pro Kategorie auf der Userseite angezeigt werden.");

define('_MI_SPARTNER_PERPAGE_USER',"Maximale Anzahl Partner pro Seite (Benutzer Seite):");
define('_MI_SPARTNER_PERPAGE_USER_DSC',"Maximale Anzahl Partner pro Seite die auf der Benutzer Seite angezeigt wird.");

define('_MI_SPARTNER_PERPAGE_ADMIN',"Maximale Anzahl Partner pro Seite (Administrator Seite):");
define('_MI_SPARTNER_PERPAGE_ADMIN_DSC',"Maximale Anzahl Partner pro Seite die auf der Administrator Seite angezeigt wird.");

define('_MI_SPARTNER_WELCOMEMSG','Willkommens Meldung:');
define('_MI_SPARTNER_WELCOMEMSG_DSC','Willkommens Meldung die auf der Index Seite diese Moduls angezeigt wird.');
define('_MI_SPARTNER_WELCOMEMSG_DEF',"Hier sehen Sie die Partner dieser Seite. - Klicken Sie auf das Logo um nähere Informationen zu erhalten."); 

define('_MI_SPARTNER_USEIMAGENAVPAGE','Verwende die Bilder Seitennavigation:');
define('_MI_SPARTNER_USEIMAGENAVPAGEDSC','Wenn Sie diese Option auf "Ja" setzen, wird die Seitennavigation mit Hilfe von Bildern angezeigt, ansonsten wir die Original Seitennavigation verwendet.');

define('_MI_SPARTNER_IMG_MAX_WIDTH',"Maximale Weite der Partner Logos:");
define('_MI_SPARTNER_IMG_MAX_WIDTH_DSC',"Setzen Sie hier die maximale erlaubte Weite des Logos ein. Dies ist zugleich auch die Weite der ersten Spalte der Partner Index Seite.");

define('_MI_SPARTNER_IMG_MAX_HEIGHT',"Maximale Höhe der Partner Logos:");
define('_MI_SPARTNER_IMG_MAX_HEIGHT_DSC',"Setzen Sie hier die maximale erlaubte Höhe des Logos ein.");

define('_MI_SPARTNER_HELP_PATH_SELECT',"Verzeichnis der SmartPartner Hilfe Dateien");
define('_MI_SPARTNER_HELP_PATH_SELECT_DSC',"Select from where you would like to access SmartPartner's help files. If you downloaded the 'SmartPartner's Help Package' and uploaded it in 'modules/smartpartner/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartPartner's help files'");

define('_MI_SPARTNER_HELP_PATH_CUSTOM',"Persönliches Verzeichnis der SmartPartner Hilfe Dateien");
define('_MI_SPARTNER_HELP_PATH_CUSTOM_DSC',"If you selected 'Custom path' in the previous option 'Path of SmartPartner's help files', please specify the URL of SmartPartner's help files, in that format : http://www.yoursite.com/doc");

define('_MI_SPARTNER_HELP_INSIDE',"Im Modul");
define('_MI_SPARTNER_HELP_CUSTOM',"Persönliches Verzeichnis");

define('_MI_SPARTNER_STATS_GROUP',"Zeige den Statistik Block diesen Gruppen");
define('_MI_SPARTNER_STATS_GROUP_DSC',"Wähle die Gruppen denen der Statistik Block auf der Partner Seite angezeigt wird.");

define("_MI_SPARTNER_HIGHLIGHT_COLOR","Farbe die für die Hervorhebung der Suchwörter verwendet werden soll");
define("_MI_SPARTNER_HIGHLIGHT_COLORDSC","");

define("_MI_SPARTNER_HIDE_MOD_NAME","Verstecke den Modulnamen auf den Benutzer Seiten");
define("_MI_SPARTNER_HIDE_MOD_NAMEDSC","");


// Text for notifications
define('_MI_SPARTNER_GLOBAL_PARTNER_NOTIFY',"Global Partner");
define('_MI_SPARTNER_GLOBAL_PARTNER_NOTIFY_DSC',"Benachrichtigungsoptionen die auf alle Partner angewendet werden.");

define('_MI_SPARTNER_PARTNER_NOTIFY',"Partner");
define('_MI_SPARTNER_PARTNER_NOTIFY_DSC',"Benachrichtigungsoptionen die auf den aktuellen Partner angewendet werden.");

define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY',"Partner übermittelt");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_CAP',"Benachrichtige mich wenn ein Partner übermittelt wurde und auf Bestätigung wartet.");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_DSC',"Erhalte Nachricht wenn ein Partner übermittelt wurde und auf Bestätigung wartet.");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_SBJ',"[{X_SITENAME}] {X_MODULE} Automatische-Benachrichtigung : Neuer Partner übermittelt");

define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY',"Partner bestätigt");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_CAP',"Benachrichtige mich wenn dieser Partner bestätigt wird.");   
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_DSC',"Erhalte Nachricht wenn dieser Partner bestätigt wird.");      
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_SBJ',"[{X_SITENAME}] {X_MODULE} Automatische-Benachrichtigung : Partner bestätigt"); 


// About.php constants
define('_MI_SPARTNER_AUTHOR_INFO',"Developers");
define('_MI_SPARTNER_DEVELOPER_LEAD',"Lead developer(s)");
define('_MI_SPARTNER_DEVELOPER_CONTRIBUTOR',"Contributor(s)");
define('_MI_SPARTNER_DEVELOPER_WEBSITE',"Website");
define('_MI_SPARTNER_DEVELOPER_EMAIL',"Email");
define('_MI_SPARTNER_DEVELOPER_CREDITS',"Credits");
define('_MI_SPARTNER_DEMO_SITE',"SmartFactory Demo Site");
define('_MI_SPARTNER_MODULE_INFO',"Module Developpment Informations");
define('_MI_SPARTNER_MODULE_STATUS',"Status");
define('_MI_SPARTNER_MODULE_RELEASE_DATE',"Release date");
define('_MI_SPARTNER_MODULE_DEMO',"Demo Site");
define('_MI_SPARTNER_MODULE_SUPPORT',"Official support site");
define('_MI_SPARTNER_MODULE_BUG',"Report a bug for this module");
define('_MI_SPARTNER_MODULE_SUBMIT_BUG',"Submit a bug");
define('_MI_SPARTNER_MODULE_FEATURE',"Suggest a new feature for this module");
define('_MI_SPARTNER_MODULE_SUBMIT_FEATURE',"Request a feature");
define('_MI_SPARTNER_MODULE_DISCLAIMER',"Disclaimer");
define('_MI_SPARTNER_AUTHOR_WORD',"The Author's Word");
define('_MI_SPARTNER_VERSION_HISTORY',"Version History");
define('_MI_SPARTNER_BY',"By");

// Beta
define('_MI_SPARTNER_WARNING_BETA',"This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.");

// RC
define('_MI_SPARTNER_WARNING_RC',"This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SPARTNER_WARNING_FINAL',"This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.");

//added with categories
define('_MI_SPARTNER_CATEGORIES',"Kategorien");
define("_MI_SSPARTNER_MAX_SIZEDSC","Maximale Grösse (in bytes) eines Bildes zum Upload.");
define("_MI_SSPARTNER_MAX_SIZE","Maximale Bildgrösse");
define("_MI_SPARTNER_ORPHAN_FIRST","Zeige verweiste Partner zuerst?");
define("_MI_SPARTNER_ORPHAN_FIRST_DSC","Bei Auswahl 'Ja', wird er Partner ohne Kategoriezugehörigkeit vor den Kategorien auf der Indexseite angezeigt.");
?>
