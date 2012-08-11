<?php
// $Id: notification.php 1530 2008-05-01 09:22:47Z phppp $

// RMV-NOTIFY

// Text for various templates...

// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Anders Kristiansen (anderssk) 
defined('XOOPS_ROOT_PATH') or die('Begrænset adgang');

define('_NOT_NOTIFICATIONOPTIONS','Adviserings indstillinger');
define('_NOT_UPDATENOW','Opdater');
define('_NOT_UPDATEOPTIONS','Opdater adviserings indstillinger');

define('_NOT_CLEAR','Ryd');
define('_NOT_CHECKALL','Markér alle');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategori');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Navn');
define('_NOT_EVENT','Begivenhed');
define('_NOT_EVENTS','Begivenheder');
define('_NOT_ACTIVENOTIFICATIONS','Aktiv meddelelser');
define('_NOT_NAMENOTAVAILABLE','Navn ikke muligt');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Navn ikke muligt');
define('_NOT_ITEMTYPENOTAVAILABLE','Type ikke mulig');
define('_NOT_ITEMURLNOTAVAILABLE','URL ikke mulig');
define('_NOT_DELETINGNOTIFICATIONS','Sletter meddelelser');
define('_NOT_DELETESUCCESS','Meddelelse(r) er slettet.');
define('_NOT_UPDATEOK','Meddelelses indstillinger er opdateret');
define('_NOT_NOTIFICATIONMETHODIS','Meddelelses metoden er');
define('_NOT_EMAIL','E-mail');
define('_NOT_PM','privat meddelelse');
define('_NOT_DISABLE','Deaktiveret');
define('_NOT_CHANGE','Ændre');

define('_NOT_NOACCESS','Du har ikke adgang til denne side.');

// Text for module config options

define('_NOT_ENABLE','Aktiver');
define('_NOT_NOTIFICATION','Meddelelser');

define('_NOT_CONFIG_ENABLED','Aktive meddelelser');
define('_NOT_CONFIG_ENABLEDDSC','Dette modul tillader brugerne at få en meddelelse når bestemte handlinger sker. Vælg "Ja" for at aktiverer denne mulighed');

define('_NOT_CONFIG_EVENTS','Aktiver bestemte begivenheder');
define('_NOT_CONFIG_EVENTSDSC','Vælg hvilke meddelelses begivenheder brugerne må abbonerer på');

define('_NOT_CONFIG_ENABLE','Deaktiver meddelelser');
define('_NOT_CONFIG_ENABLEDSC','Dette modul tillader brugerne at få en meddelelse når bestemte handlinger sker. Vælg om brugerne skal præsenteres for meddelelserne i en blok (Block-style), eller i modulet (Inline-style), eller begge dele. Ved Block-style meddelelser, skal meddelelsers indstillingsblokke været aktiveret for dette modul.');
define('_NOT_CONFIG_DISABLE','Deaktiver meddelelser');
define('_NOT_CONFIG_ENABLEBLOCK','Aktiver kun Block-style');
define('_NOT_CONFIG_ENABLEINLINE','Aktiver kun Inline-style');
define('_NOT_CONFIG_ENABLEBOTH','Aktiver begge meddelelsesmuligheder');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Kommentar tilføjet');
define('_NOT_COMMENT_NOTIFYCAP','Meddel mig når en ny kommentar indsendes (eller godkendes) for dette emne');
define('_NOT_COMMENT_NOTIFYDSC','Modtag meddelelser hver gang en ny kommentar indsendes (eller godkendes) for dette emne');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-meddelelse: Kommentar tilføjet til {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Kommentar er indsendt');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Meddel mig når en ny kommentar er indsendt (og afventer godkendelse) for dette emne');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Modtag meddelelse hver gang en ny kommentar indsendes (og afventer godkendelse) for dette emne');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-meddelelse: Kommentar indsendt for {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Bookmark');
define('_NOT_BOOKMARK_NOTIFYCAP','Bookmark dette emne (ingen meddelelse).');
define('_NOT_BOOKMARK_NOTIFYDSC','Hold styr på dette emne uden at modtage nogen meddelelser');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Meddelelses metode<br />Når du monitorere f.eks. et forum, hvordan vil du modtage meddelelser om opdateringer?
');
define('_NOT_METHOD_EMAIL','E-mail (brug adresse i min profil)');
define('_NOT_METHOD_PM','Privat meddelelse');
define('_NOT_METHOD_DISABLE','Midlertidigt deaktiveret');

define('_NOT_NOTIFYMODE','Standard meddelelses metode');
define('_NOT_MODE_SENDALWAYS','Meddel mig om alle valgte opdateringer');
define('_NOT_MODE_SENDONCE','Meddel mig kun en gang');
define('_NOT_MODE_SENDONCEPERLOGIN','Meddel mig kun en gang, og slå meddelelserne fra intil jeg logger på igen');

define('_NOT_NOTHINGTODELETE','Der er ikke noget at slette');
?>
