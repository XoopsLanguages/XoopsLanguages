<?php

////////////////////////////////////////////////////////////////
//############################################################//
//## Translated by : Dylian Melgert                         ##//
//## Website       : http://www.dylian.melgert.net/software ##//
//## XOOPS version : 2.3 RC3                                ##//
//############################################################//
////////////////////////////////////////////////////////////////

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Mededeling Opties');
define('_NOT_UPDATENOW','Update Nu');
define('_NOT_UPDATEOPTIONS','Update Mededelingen Opties');

define('_NOT_CLEAR','Wis');
define('_NOT_CHECKALL','Alles Aanvinken');
define('_NOT_MODULE','Module');
define('_NOT_CATEGORY','Categorie');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Naam');
define('_NOT_EVENT','Gebeurtenis');
define('_NOT_EVENTS','Gebeurtenissen');
define('_NOT_ACTIVENOTIFICATIONS','Actieve Mededelingen');
define('_NOT_NAMENOTAVAILABLE','Naam Niet Beschikbaar');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Item Naam Niet Beschikbaar');
define('_NOT_ITEMTYPENOTAVAILABLE','Item Type Niet Beschikbaar');
define('_NOT_ITEMURLNOTAVAILABLE','Item URL Niet Beschikbaar');
define('_NOT_DELETINGNOTIFICATIONS','Bezig met mededelingen te Verwijderen');
define('_NOT_DELETESUCCESS','Mededeling succesvol verwijderd.');
define('_NOT_UPDATEOK','Mededeling Optie Succesvol Geupdate');
define('_NOT_NOTIFICATIONMETHODIS','Mededelings methode is');
define('_NOT_EMAIL','E-mail');
define('_NOT_PM','Privé Bericht');
define('_NOT_DISABLE','Uitschakelen');
define('_NOT_CHANGE','Wijzig');

define('_NOT_NOACCESS','Je hebt geen toelating deze pagina te openen.');

// Text for module config options

define('_NOT_ENABLE','Inschakelen');
define('_NOT_NOTIFICATION','Mededeling');

define('_NOT_CONFIG_ENABLED','Mededelingen Inschakelen');
define('_NOT_CONFIG_ENABLEDDSC','Deze module laat gebruikers toe van verwittigd te worden wanneer een bepaald iets gebeurt. Kies "ja" voor deze functie in te schakelen.');

define('_NOT_CONFIG_EVENTS','Schakel bepaalde evenementen In');
define('_NOT_CONFIG_EVENTSDSC','Selecteer op welke evenementen gebruikers zich mogen inschrijven.');

define('_NOT_CONFIG_ENABLE','Mededelingen Inschakelen');
define('_NOT_CONFIG_ENABLEDSC','Deze module laat gebruikers toe van verwittigd te worden wanneer een bepaald iets gebeurt. Kies of gebruikers moeten kiezen uit de mededelingen in een blok (Blok-stijl), of binnen de module zelf (Inline-style), of beide. Bij blok-stijl moet uiteraard het mededelingsoptie blok ingeschakeld zijn bij de desbetreffende module.');
define('_NOT_CONFIG_DISABLE','Mededelingen Uitschakelen');
define('_NOT_CONFIG_ENABLEBLOCK','Schakel enkel nlok-stijl in');
define('_NOT_CONFIG_ENABLEINLINE','Schakel enkel In-line-stijl in');
define('_NOT_CONFIG_ENABLEBOTH','Schakel mededelingen (beide stijlen) in');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Reactie Toegevoegd');
define('_NOT_COMMENT_NOTIFYCAP','Verwittig me wanneer er een nieuwe reactie is toegevoegd.');
define('_NOT_COMMENT_NOTIFYDSC','Ontvang telkens een verwittiging wanneer er een nieuw commentaar is gepost (of goedgekeurd) voor dit item.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}] auto-melding: Commentaar Toegevoegd Bij {X_ITEM_TYPE} "{X_ITEM_TITLE}" [AUTO-NOTIFY]');

define('_NOT_COMMENTSUBMIT_NOTIFY','Reactie Ingestuurd');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Verwittig me wanneer er een nieuwe reactie is ingestuurd (wachtend op toelating) voor dit item');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Ontvang telkens een verwitting wanneer er een nieuw commentaar submitted is (wachtend op toelating) voor dit item.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}] auto-melding: Commentaar Toegevoegd Bij {X_ITEM_TYPE} "{X_ITEM_TITLE}" [AUTO-NOTIFY]');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Bookmark');
define('_NOT_BOOKMARK_NOTIFYCAP','Bookmark dit item (zonder melding).');
define('_NOT_BOOKMARK_NOTIFYDSC','Volg dit item zonder meldingen te ontvangen');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Mededelings Methode');
define('_NOT_METHOD_EMAIL','E-mail (gebruik adres in mijn profiel)');
define('_NOT_METHOD_PM','Privé Bericht');
define('_NOT_METHOD_DISABLE','Tijdelijk Uitgeschakeld');

define('_NOT_NOTIFYMODE','Standaard Mededelings Methode');
define('_NOT_MODE_SENDALWAYS','Verwittig me van alle geselecteerde updates');
define('_NOT_MODE_SENDONCE','Verwittig me eenmalig');
define('_NOT_MODE_SENDONCEPERLOGIN','Verwittig me eenmalig tot ik me terug inlog');

define("_NOT_NOTIFYMETHOD_DESC","Wanneer je bijvoorbeeld een forum volgt, hoe zou je graag je mededelingen ontvangen?");
?>
