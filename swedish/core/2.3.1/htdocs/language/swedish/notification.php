<?php
// $Id: notification.php,v 1.8 2005/08/08 06:29:25 skalpa Exp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Underrättelsealternativ');
define('_NOT_UPDATENOW','Uppdatera nu');
define('_NOT_UPDATEOPTIONS','Uppdatera underrättelsealternativ');

define('_NOT_CLEAR','Rensa');
define('_NOT_CHECKALL','Markera alla');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategori');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Namn');
define('_NOT_EVENT','Händelse');
define('_NOT_EVENTS','Händelser');
define('_NOT_ACTIVENOTIFICATIONS','Aktiva underrättelser');
define('_NOT_NAMENOTAVAILABLE','Namn ej tillgängligt');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Postnamn ej tillgängligt');
define('_NOT_ITEMTYPENOTAVAILABLE','Posttyp ej tillgänglig');
define('_NOT_ITEMURLNOTAVAILABLE','Post-URL ej tillgänglig');
define('_NOT_DELETINGNOTIFICATIONS','Raderar underrättelser');
define('_NOT_DELETESUCCESS','Underrättelse(er) raderade.');
define('_NOT_UPDATEOK','Underrättelsealternativ uppdaterade');
define('_NOT_NOTIFICATIONMETHODIS','Underrättelsemetod är');
define('_NOT_EMAIL','email');
define('_NOT_PM','privat meddelande');
define('_NOT_DISABLE','inaktiverat');
define('_NOT_CHANGE','Ändra');

define('_NOT_NOACCESS','Du är inte behörigt att komma åt den här sidan.');

// Text for module config options

define('_NOT_ENABLE','Aktivera');
define('_NOT_NOTIFICATION','Underrättelse');

define('_NOT_CONFIG_ENABLED','Aktivera underrättelse');
define('_NOT_CONFIG_ENABLEDDSC','Denna modul gör det möjligt för användare att välja att bli underrättade vid vissa händelser. Välj "ja" för att aktivera denna funktion.');

define('_NOT_CONFIG_EVENTS','Aktivera specifika händelser');
define('_NOT_CONFIG_EVENTSDSC','Välj vilka händelser dina användare kan välja att prenumerera på.');

define('_NOT_CONFIG_ENABLE','Aktivera underrättelse');
define('_NOT_CONFIG_ENABLEDSC','Denna modul gör det möjligt för användare att välja att bli underrättade vid vissa händelser. Välj om användare skall få underrättelsesinställningar presenterade som ett "block" (block-style), i modulen (inline-style) eller båda. För block-style måste underrättelsesinställningarna aktiveras för denna modulen.');
define('_NOT_CONFIG_DISABLE','Avaktivera underrättelse');
define('_NOT_CONFIG_ENABLEBLOCK','Aktivera endast block-style');
define('_NOT_CONFIG_ENABLEINLINE','Aktivera endast inline-style');
define('_NOT_CONFIG_ENABLEBOTH','Aktivera båda');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Kommentar inlagd');
define('_NOT_COMMENT_NOTIFYCAP','Underrätta mig när en ny kommentar lagts till för denna post.');
define('_NOT_COMMENT_NOTIFYDSC','Ta emot underrättelse varje gång en ny kommentar lagts till (eller godkänts) för denna post.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk underrättelse: Kommentar inlagd för {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Kommentar inskickad');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Underrätta mig när en ny kommentar är inskickad (och avvaktar godkännande) för denna post.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Ta emot underrättelse varje gång en kommentar har skickats in (och avvaktar godkännade) för denna post.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk underrättelse: Kommentar inskickad för {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Lägg till bokmärke');
define('_NOT_BOOKMARK_NOTIFYCAP','Lägg till bokmärke för denna post (ingen underrättelse).');
define('_NOT_BOOKMARK_NOTIFYDSC','Håll koll på denna post utan att ta emot underrättelser.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Underrättelsemetod: När du följer t.ex. ett forum, hur skulle du vilja ta emot underrättelser om uppdateringar?');
define('_NOT_METHOD_EMAIL','Email (använd adress i min profil)');
define('_NOT_METHOD_PM','Privat meddelande');
define('_NOT_METHOD_DISABLE','Avaktivera tillfälligt');

define('_NOT_NOTIFYMODE','Standardinställning för underrättelser');
define('_NOT_MODE_SENDALWAYS','Underrätta mig om alla valda uppdateringar');
define('_NOT_MODE_SENDONCE','Underrätta mig endast en gång');
define('_NOT_MODE_SENDONCEPERLOGIN','Underrätta mig en gång och avaktivera sedan tills nästa gång jag loggar in');

define("_NOT_NOTHINGTODELETE","Där är ingenting att ta bort.");
?>
