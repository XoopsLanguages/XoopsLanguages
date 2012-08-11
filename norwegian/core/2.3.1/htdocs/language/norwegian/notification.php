<?php
// $Id: notification.php 1011 2007-08-24 08:07:21Z phppp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Innstillinger for varsling');
define('_NOT_UPDATENOW','Oppdater');
define('_NOT_UPDATEOPTIONS','Oppdater innstillinger for varsling');

define('_NOT_CLEAR','Rydd');
define('_NOT_CHECKALL','Velg Alle');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategori');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Navn');
define('_NOT_EVENT','Hendelse');
define('_NOT_EVENTS','Hendelser');
define('_NOT_ACTIVENOTIFICATIONS','Aktiv varsling');
define('_NOT_NAMENOTAVAILABLE','Navn ikke tilgjengelig');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Emnet er ikke tilgjengelig');
define('_NOT_ITEMTYPENOTAVAILABLE','Emnets type er ikke tilgjngelig');
define('_NOT_ITEMURLNOTAVAILABLE','Emnets URL er ikke tilgjengelig');
define('_NOT_DELETINGNOTIFICATIONS','Sletter varsling');
define('_NOT_DELETESUCCESS','Varsling(er) er slettet.');
define('_NOT_UPDATEOK','Innstillinger er opdatert');
define('_NOT_NOTIFICATIONMETHODIS','Varslingsmetoden er');
define('_NOT_EMAIL','epost');
define('_NOT_PM','privat melding');
define('_NOT_DISABLE','Deaktiveret');
define('_NOT_CHANGE','Endre');

define('_NOT_NOACCESS','Du har ikke adgang til denne side.');

// Text for module config options

define('_NOT_ENABLE','Aktiver');
define('_NOT_NOTIFICATION','Varsling');

define('_NOT_CONFIG_ENABLED','Aktiver varsling');
define('_NOT_CONFIG_ENABLEDDSC','Denne modul tillater bruker å velge å bli varslet når bestemte hendelser inntreffer.  Velg "Ja" for aktivere denne funksjon.');

define('_NOT_CONFIG_EVENTS','Aktiver bestemte hendelser');
define('_NOT_CONFIG_EVENTSDSC','Velg hvilke hendelser brukere kan abbonere på.');

define('_NOT_CONFIG_ENABLE','Deaktiver varsling');
define('_NOT_CONFIG_ENABLEDSC','Denne modul tillater bruker å velge å bli varslet når bestemte hendelser inntreffer. Velg om bruker skal ha forskjellige varslingsmuligheter vist i en blokk (Block-style), i modulen (Inline-style), eller begge.  For block-style varsling, skal innstillinger blokk være aktivert for denne modul.');
define('_NOT_CONFIG_DISABLE','Deaktiver varsling');
define('_NOT_CONFIG_ENABLEBLOCK','Aktiver kun Blokk-style');
define('_NOT_CONFIG_ENABLEINLINE','Aktiver kun Inline-style');
define('_NOT_CONFIG_ENABLEBOTH','Aktiver begge måter)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Kommentar lagt til');
define('_NOT_COMMENT_NOTIFYCAP','Varsle meg om det kommer en ny kommentar for emnet.');
define('_NOT_COMMENT_NOTIFYDSC','Varsle meg når som helst en ny kommentar er lagt til (eller godkjent) for emnet.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-varsling: Kommentar lagt til {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Kommentar er innsendt');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Varsle meg når en ny kommentar er lagt til (eller venter på godkjennelse) for emnet.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Varsle meg når som helst en ny kommentar er lagt til (eller venter på godkjennelse) for emnet.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-advisering: Kommentar lagt til {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Bookmark');
define('_NOT_BOOKMARK_NOTIFYCAP','Bookmark dette emnet (ingen varsling).');
define('_NOT_BOOKMARK_NOTIFYDSC','Hold orden på emnet uten at motta hendelsesvarsel.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Varslingsmetodemetode');
define('_NOT_METHOD_EMAIL','Epost(bruk adressen i min profil)');
define('_NOT_METHOD_PM','Privat melding');
define('_NOT_METHOD_DISABLE','Midlertidig deaktivert');

define('_NOT_NOTIFYMODE','Standard varslingsmetode');
define('_NOT_MODE_SENDALWAYS','Varsle meg om alle valgte opdateringer');
define('_NOT_MODE_SENDONCE','Varsle meg kun en gang');
define('_NOT_MODE_SENDONCEPERLOGIN','Varsle meg kun en gang, så deaktiver inntil jeg logger inn igjen');

define('_NOT_NOTHINGTODELETE','Det er ingenting å slette!');
?>