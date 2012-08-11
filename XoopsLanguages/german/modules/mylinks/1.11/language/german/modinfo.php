<?php
// Module Info

// The name of this module
define('_MI_MYLINKS_NAME','Links');

// A brief description of this module
define('_MI_MYLINKS_DESC','Erstellt einen Link-Bereich in dem Mitglieder diverse Webseiten suchen/einsenden/bewerten können.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_MYLINKS_BNAME1','Letzte Links');
define('_MI_MYLINKS_BNAME2','Top Links');

// Sub menu titles
define('_MI_MYLINKS_SMNAME1','Einsenden');
define('_MI_MYLINKS_SMNAME2','Populär');
define('_MI_MYLINKS_SMNAME3','Top bewertete');

// Names of admin menu items
define('_MI_MYLINKS_ADMENU2','Links hinzufügen/bearbeiten');
define('_MI_MYLINKS_ADMENU3','Eingeschickte Links');
define('_MI_MYLINKS_ADMENU4','Defekte Links');
define('_MI_MYLINKS_ADMENU5','Geänderte Links');
define("_MI_MYLINKS_ADMENU6","Link-Checker");

// Title of config items
define('_MI_MYLINKS_POPULAR','Aufrufe um populär zu sein');
define('_MI_MYLINKS_NEWLINKS','Neue Links auf der Seite');
define('_MI_MYLINKS_PERPAGE','Angezeigte Links pro Seite');
define('_MI_MYLINKS_USESHOTS','Ja wählen für die Anzeige von Screenshots für jeden Link?');
define('_MI_MYLINKS_USEFRAMES','Soll die verlinkte Seite in einem Frame angezeigt werden?');
define('_MI_MYLINKS_SHOTWIDTH','Max. Breite der Screenshots');
define('_MI_MYLINKS_ANONPOST','Können Gäste Links veröffentlichen?');
define('_MI_MYLINKS_AUTOAPPROVE','Automatische Linkeintragung aktivieren?');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC','Anzahl der Aufrufe um populär zu sein');
define('_MI_MYLINKS_NEWLINKSDSC','Anzahl der neuen Links');
define('_MI_MYLINKS_PERPAGEDSC','Anzahl der max. Links auf der Seite');
define('_MI_MYLINKS_USEFRAMEDSC','Soll der Link im Frame angezeigt werden?');
define('_MI_MYLINKS_USESHOTSDSC','Soll ein Screenshot angezeigt werden?');
define('_MI_MYLINKS_SHOTWIDTHDSC','Die Breite des Screenshots');
define('_MI_MYLINKS_AUTOAPPROVEDSC','Automatische Linkeintragung');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY','Allgemein');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC','Allgemeine Link-Benachrichtigungsoptionen.');

define('_MI_MYLINKS_CATEGORY_NOTIFY','Linkkategorie');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC','Benachrichtigungsoptionen für die aktuelle Linkkategorie.');

define('_MI_MYLINKS_LINK_NOTIFY','Link');
define('_MI_MYLINKS_LINK_NOTIFYDSC','Benachrichtigungsoptionen für den aktuellen Link.');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY','Neue Linkkategorie');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Benachrichtigen wenn eine neue Linkkategorie angelegt wird.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Benachrichtigung erhalten wenn eine neue Linkkategorie angelegt wird.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Linkkategorie');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY','Link-Änderungsanfrage');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','Benachrichtigen wenn irgendeine Link-Änderung angefragt wird.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','Benachrichtigung erhalten wenn irgendeine Link-Änderung angefragt wird.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Link-Änderungsanfrage');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY','Defekter Link gemeldet');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','Benachrichtigen wenn ein defekter Link gemeldet wird.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','Benachrichtigung erhalten wenn ein defekter Link gemeldet wird.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Defekter Link gemeldet');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY','Neuer Link eingeschickt');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','Benachrichtigen wenn ein neuer Link (noch freizugeben) eingeschickt wird.');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','Benachrichtigung erhalten wenn ein neuer Link (noch freizugeben) eingeschickt wird.');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Link eingeschickt');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY','Neuer Link');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP','Benachrichtigen wenn irgendein neuer Link veröffentlicht wird.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC','Benachrichtigung erhalten wenn irgendein neuer Link veröffffentlicht wird.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Link');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY','Neuer Link eingeschickt');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP','Benachrichtigen wenn ein neuer Link (noch freizugeben) für die aktuelle Kategorie eingeschickt wird.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','Benachrichtigung erhalten wenn einer neuer Link (noch freizugeben) für die aktuelle Kategorie eingeschickt wird.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Link zu Kategorie eingeschickt');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY','Neuer Link');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP','Benachrichtigen wenn einer neuer Link in der aktuellen Kategorie veröffentlicht wird.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC','Benachrichtigung erhalten wenn ein neuer Link in der aktuellen Kategorie veröffffentlicht wird.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Link in Kategorie');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY','Link freigegeben');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP','Benachrichtigen wenn dieser Link freigegeben ist.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC','Benachrichtigung erhalten wenn dieser Link freigegeben ist.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Link freigegeben');

?>