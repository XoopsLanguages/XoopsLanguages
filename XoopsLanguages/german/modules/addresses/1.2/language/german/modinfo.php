<?php
// $Id: modinfo.php,v 1.12 2003/04/11 15:20:05 okazu Exp $
// Module Info

// The name of this module
define("_MI_MYADRESSES_NAME","Adressen");

// A brief description of this module
define("_MI_MYADRESSES_DESC","Erstellt einen Adressbereich in dem User Adressen suchen/einschicken/bewerten k�nnen.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYADRESSES_BNAME1","Aktuelle Adressen");
define("_MI_MYADRESSES_BNAME2","Top Adressen");

// Sub menu titles
define("_MI_MYADRESSES_SMNAME1","Einschicken");
define("_MI_MYADRESSES_SMNAME2","Populär");
define("_MI_MYADRESSES_SMNAME3","Top bewertet");

// Names of admin menu items 
define("_MI_MYADRESSES_ADMENUINDEX","Addresses Index Menu");
define("_MI_MYADRESSES_ADMENU2","Hinzufügen/Bearbeiten von Adressen/Kategorien");
define("_MI_MYADRESSES_ADMENU3","Eingeschickte Adressen");
define("_MI_MYADRESSES_ADMENU4","Fehlerhafte Adressen");
define("_MI_MYADRESSES_ADMENU5","Geänderte Adressen");
define("_MI_MYADRESSES_ADMENU6","Adressenlink-Checker");
define("_MI_MYADRESSES_GOMODULE","Zum Modul");

// Title of config items
define('_MI_MYADRESSES_POPULAR', 'Anzahl der Aufrufe damit eine Adresse populär wird');
define('_MI_MYADRESSES_NEWLINKS', 'Anzahl der neuen Adressen die auf der Startseite des Moduls angezeigt werden');
define('_MI_MYADRESSES_PERPAGE', 'Anzahl der Adressen die auf jeder Seite angezeigt werden sollen');
define('_MI_MYADRESSES_USESHOTS', 'Ja wählen um Screenshots für jede Adresse anzuzeigen');
//define('_MI_MYADRESSES_USEFRAMES', 'Soll die verlinkte Adresse in einem Frame angezeigt werden?');
//define('_MI_MYADRESSES_SHOTWIDTH', 'Maximale Breite des Screenshots (in Pixeln)');
define('_MI_MYADRESSES_ANONPOST','Gästen erlauben Adressen einzuschicken?');
define('_MI_MYADRESSES_AUTOAPPROVE','Automatische Freigabe der Adressen?');

// Description of each config items
define('_MI_MYADRESSES_POPULARDSC', '');
define('_MI_MYADRESSES_NEWLINKSDSC', '');
define('_MI_MYADRESSES_PERPAGEDSC', '');
define('_MI_MYADRESSES_USEFRAMEDSC', '');
define('_MI_MYADRESSES_USESHOTSDSC', '');
define('_MI_MYADRESSES_SHOTWIDTHDSC', '');
define('_MI_MYADRESSES_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYADRESSES_GLOBAL_NOTIFY', 'Allgemein');
define('_MI_MYADRESSES_GLOBAL_NOTIFYDSC', 'Allgemeine Adressenbenachrichtigungs-Optionen.');

define('_MI_MYADRESSES_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_MYADRESSES_CATEGORY_NOTIFYDSC', 'Benachrichtigungsoptionen für die aktuelle Adresskategorie.');

define('_MI_MYADRESSES_LINK_NOTIFY', 'Adresse');
define('_MI_MYADRESSES_LINK_NOTIFYDSC', 'Benachrichtigungsoptionen für die aktuelle Adresse.');

define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFY', 'Neue Kategorie');
define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Benachrichtigen wenn eine neue Adresskategorie erstellt worden ist.');
define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn eine neue Adresskategorie erstellt worden ist.');
define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Adresskategorie');

define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFY', 'Adressänderung angefragt');
define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Benachrichtigen wenn Adressänderungen angefragt werden.');
define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn eine Adressänderung angefragt worden ist.');
define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Adressänderung angefragt');

define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFY', 'Fehlerhafte Adresse gemeldet');
define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Benachrichtigen wenn fehlerhafte Adressen gemeldet werden.');
define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn eine fehlerhafte Adresse gemeldet worden ist.');
define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Fehlerhafte Adresse gemeldet');

define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFY', 'Neue Adresse eingeschickt');
define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Benachrichtigen wenn eine neue Adresse eingeschickt wird (noch freizugeben).');
define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn eine neue Adresse eingeschickt worden ist (noch freizugeben).');
define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Adresse eingeschickt');

define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFY', 'Neue Adresse veröffentlicht');
define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFYCAP', 'Benachrichtigen wenn neue Adressen veröffentlicht werden.');
define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn neue Adressen veröffentlicht worden sind.');
define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Adressen veröffentlicht');

define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFY', 'Neue Adressen eingeschickt');
define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Benachrichtigen wenn eine neue Adresse (noch freizugeben) für das aktuelle Verzeichnis eingeschickt werden.');
define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn eine neue Adresse (noch freizugeben) für die aktuelle Kategorie eingeschickt worden ist.');
define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Adresse eingeschickt in Kategorie');

define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFY', 'Neue Adresse veröffentlicht');
define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFYCAP', 'Benachrichtigen wenn eine neue Adresse in der aktuellen Kategorie veröffentlicht worden ist.');
define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn eine neue Adresse in der aktuellen Kategorie veröffentlicht worden ist.');
define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Adresse in Kategorie');

define('_MI_MYADRESSES_LINK_APPROVE_NOTIFY', 'Adresse freigegeben');
define('_MI_MYADRESSES_LINK_APPROVE_NOTIFYCAP', 'Benachrichtigen wenn diese Adresse freigegeben wird.');
define('_MI_MYADRESSES_LINK_APPROVE_NOTIFYDSC', 'Du erhältst eine Benachrichtigung wenn diese Adresse freigegeben worden ist.');
define('_MI_MYADRESSES_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Adresse freigegeben');

?>
