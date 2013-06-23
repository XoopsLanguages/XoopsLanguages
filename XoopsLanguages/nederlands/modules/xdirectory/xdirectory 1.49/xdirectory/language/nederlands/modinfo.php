<?php

// The name of this module:
define("_MI_XDIR_NAME","Adressen Gids");

// A brief description of this module:
define("_MI_XDIR_DESC","Creeert een adressen gids sectie met categorieën waarin gebruikers adressen kunnen vinden/toevoegen/beoordelen.");

// Names of blocks for this module:
define("_MI_XDIR_BNAME1","Recente Links");
define("_MI_XDIR_BNAME2","Top Links");

// Sub menu titles:
define("_MI_XDIR_SMNAME1","Toevoegen");
define("_MI_XDIR_SMNAME2","Populair");
define("_MI_XDIR_SMNAME3","Top Links");

// Names of admin menu items:
define("_MI_XDIR_ADMENU2","Toevoegen/Wijzigen");
define("_MI_XDIR_ADMENU3","Ingezonden Links");
define("_MI_XDIR_ADMENU4","Foutieve Links");
define("_MI_XDIR_ADMENU5","Gewijzigde Links");
define("_MI_XDIR_ADMENU6","Link Checker");

// Title of config items:
define('_MI_XDIR_POPULAR','Selecteer het aantal hits om links als populair te tonen');
define('_MI_XDIR_NEWLINKS','Selecteer het maximale aantal nieuwe adressen die in de top page te zien zijn');
define('_MI_XDIR_PERPAGE','Selecteer het maximale aantal adressen die te zien zijn op elke pagina');
define('_MI_XDIR_USESHOTS','Selecteer ja om een screenshot te laten zien bij elk adres');
define('_MI_XDIR_USEFRAMES','Wil je de gelinkte pagina tonen in in frame?');
define('_MI_XDIR_SHOTWIDTH','Maximale breedte voor elke screenshot');
define('_MI_XDIR_ANONPOST','Gasten toestaan adresgegevens voor bedrijven te plaatsen?');
define('_MI_XDIR_AUTOAPPROVE','Nieuwe adressen automatisch plaatsen zonder een admin goedkeuring?');

// Description of each config items:
define('_MI_XDIR_POPULARDSC','');
define('_MI_XDIR_NEWLINKSDSC','');
define('_MI_XDIR_PERPAGEDSC','');
define('_MI_XDIR_USEFRAMEDSC','');
define('_MI_XDIR_USESHOTSDSC','');
define('_MI_XDIR_SHOTWIDTHDSC','');
define('_MI_XDIR_AUTOAPPROVEDSC','');

// Text for notifications:

define('_MI_XDIR_GLOBAL_NOTIFY','Algemeen');
define('_MI_XDIR_GLOBAL_NOTIFYDSC','Notificatie opties voor adressen van algemene bedrijven.');

define('_MI_XDIR_CATEGORY_NOTIFY','Categorie');
define('_MI_XDIR_CATEGORY_NOTIFYDSC','Notificatie opties voor bedrijven die binnen de huidige bedrijven categorie vallen.');

define('_MI_XDIR_LINK_NOTIFY','Adressen');
define('_MI_XDIR_LINK_NOTIFYDSC','Notificatie opties voor de huidige adressen.');

define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFY','Nieuwe Categorie');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFYCAP','Stuur mij een bericht als er een nieuwe categorie is aangemaakt.');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFYDSC','Stuur mij een bericht als er een nieuwe categorie is aangemaakt.');
define('_MI_XDIR_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuwe bedrijven category');

define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFY','Adreswijziging gevraagd');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFYCAP','Stuur mij een bericht als er wijzingsaanvraag is.');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFYDSC','Stuur mij een bericht als er wijzigingsaanvraag is verstuurd.');
define('_MI_XDIR_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Adreswijziging Aangevraagd');

define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFY','Foutieve link gemeld');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFYCAP','Stuur mij een bericht als er een foutieve link is gemeld.');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFYDSC','Stuur mij een bericht als er een foutieve link is verstuurd.');
define('_MI_XDIR_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Foutieve Link Verstuurd');

define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFY','New adres ingestuurd');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFYCAP','Stuur mij een bericht als er nieuw adres is verstuurd (wacht op goedkeuring).');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFYDSC','Stuur mij een bericht als er nieuw adres is verstuurd (wacht op goedkeuring).');
define('_MI_XDIR_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuwe bedrijfsgegevens verstuurd.');

define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFY','Nieuwe bedrijfsgegevens');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFYCAP','Stuur mij een bericht als er nieuwe bedrijfsgegevens zijn.');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFYDSC','Stuur mij een bericht als er nieuwe bedrijfsgegevens zijn.');
define('_MI_XDIR_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuwe bedrijfsgegevens');

define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFY','New Listing Submitted');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFYCAP','Stuur mij een bericht als er nieuwe bedrijfsgegevens zijn geplaatst (wacht op goedkeuring) voor de huidige category.');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFYDSC','Stuur mij een bericht als er nieuwe links zijn geplaatst (wacht op goekeuring) voor de huidige categorie.');
define('_MI_XDIR_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuwe link geplaatst in huidige categorie');

define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFY','Nieuwe bedrijfsgegevens');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFYCAP','Stuur mij een bericht als er nieuwe bedrijfsgegevens zijn in de huidige categorie.');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFYDSC','Stuur mij een bericht als er nieuwe bedrijfsgegevens zijn in de huidige categorie.');
define('_MI_XDIR_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifictaie : Nieuwe bedrijfsgegevens in categorie');

define('_MI_XDIR_LINK_APPROVE_NOTIFY','Gegevens goedgekeurd');
define('_MI_XDIR_LINK_APPROVE_NOTIFYCAP','Stuur mij een bericht als deze nieuwe gegevens zijn goegekeurd.');
define('_MI_XDIR_LINK_APPROVE_NOTIFYDSC','Stuur mij een bericht als deze nieuwe gegevens zijn goegekeurd.');
define('_MI_XDIR_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Gegevens goedgekeurd');

?>