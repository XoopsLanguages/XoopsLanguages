<?php
// $Id: notification.php 1011 2007-08-24 08:07:21Z phppp $
// german v 1.4 2008/01/08 sato-san / Rene Sato / www.XOOPS-magazine.com $
// Code : UTF-8
// Letzte Bearbeitung 18.09.2008 / Feichtl
// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Benachrichtigungsoptionen');
define('_NOT_UPDATENOW','Jetzt aktualisieren');
define('_NOT_UPDATEOPTIONS','Benachrichtigungsoptionen aktualisieren');

define('_NOT_CLEAR','Zurücksetzen');
define('_NOT_CHECKALL','Alles markieren');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategorie');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Name');
define('_NOT_EVENT','Ereignis');
define('_NOT_EVENTS','Ereignisse');
define('_NOT_ACTIVENOTIFICATIONS','Aktive Benachrichtigungen');
define('_NOT_NAMENOTAVAILABLE','Name nicht verfügbar');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Objektname nicht verfügbar');
define('_NOT_ITEMTYPENOTAVAILABLE','Objekttyp nicht verfügbar');
define('_NOT_ITEMURLNOTAVAILABLE','Objekt-URL nicht verfügbar');
define('_NOT_DELETINGNOTIFICATIONS','Benachrichtigungen löschen');
define('_NOT_DELETESUCCESS','Benachrichtigung(en) erfolgreich gelöscht.');
define('_NOT_UPDATEOK','Benachrichtigungsoptionen aktualisiert');
define('_NOT_NOTIFICATIONMETHODIS','Benachrichtigungsmethode ist');
define('_NOT_EMAIL','E-Mail');
define('_NOT_PM','Private Nachricht');
define('_NOT_DISABLE','Deaktiviert');
define('_NOT_CHANGE','Ändern');

define('_NOT_NOACCESS','Sie haben nicht die erforderlichen Rechte diesen Bereich zu betreten.');

// Text for module config options

define('_NOT_ENABLE','Aktivieren');
define('_NOT_NOTIFICATION','Benachrichtigung');

define('_NOT_CONFIG_ENABLED','Benachrichtigung aktivieren');
define('_NOT_CONFIG_ENABLEDDSC','Dieses Modul ermöglicht es Mitgliedern, sich über verschiedene Ereignisse benachrichtigen zu lassen. Diese Funktion aktivieren?');

define('_NOT_CONFIG_EVENTS','Spezialereignisse aktivieren');
define('_NOT_CONFIG_EVENTSDSC','Wählen Sie, welche Benachrichtigungsereignisse Ihre Mitglieder auswählen können.');

define('_NOT_CONFIG_ENABLE','Benachrichtigung aktivieren');
define('_NOT_CONFIG_ENABLEDSC','Dieses Modul ermöglicht es Mitglieder, über verschiedene Ereignisse benachrichtigt zu werden. Wählen Sie, ob den Mitgliedern die Benachrichtigungsoptionen in einem Block (Block-Stil), innerhalb des Moduls (Inline-Stil), oder auf beide Arten angezeigt werden sollen. Für die Block-Stil-Benachrichtigung muss der Benachrichtigungsblock für dieses Modul aktiviert sein.');
define('_NOT_CONFIG_DISABLE','Benachrichtigung abschalten');
define('_NOT_CONFIG_ENABLEBLOCK','Nur Block-Stil aktivieren');
define('_NOT_CONFIG_ENABLEINLINE','Nur Inline-Stil aktivieren');
define('_NOT_CONFIG_ENABLEBOTH','Benachrichtigung aktivieren (Beide Stilarten)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Kommentar hinzugefügt');
define('_NOT_COMMENT_NOTIFYCAP','Benachrichtigen Sie mich, wenn hierzu ein neuer Kommentar verfasst wurde.');
define('_NOT_COMMENT_NOTIFYDSC','Sie erhalten eine Benachrichtigung, wenn hierzu ein neuer Kommentar verfasst (oder freigegeben) wurde.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Kommentar zu {X_ITEM_TYPE} hinzugefügt');

define('_NOT_COMMENTSUBMIT_NOTIFY','Kommentar eingeschickt');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Benachrichtigen Sie mich, wenn ein neuer Kommentar hierzu verfasst wurde (auf Freigabe wartend).');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Sie erhalten eine Benachrichtigung, wenn ein neuer Kommentar hierzu verfasst wurde (auf Freigabe wartend).');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Kommentar für {X_ITEM_TYPE} wurde eingeschickt');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Lesezeichen');
define('_NOT_BOOKMARK_NOTIFYCAP','Lesezeichen setzen (keine Benachrichtigung).');
define('_NOT_BOOKMARK_NOTIFYDSC','Beobachten, kein Benachrichtigungen erhalten.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Methode der Benachrichtigung: Wenn Sie z. B. ein Forum beobachten, wie möchten Sie über Aktualisierungen benachrichtigt werden?');
define('_NOT_METHOD_EMAIL','E-Mail (E-Mail-Adresse aus Konto benutzen)');
define('_NOT_METHOD_PM','Private Nachricht');
define('_NOT_METHOD_DISABLE','Vorübergehend deaktivieren');

define('_NOT_NOTIFYMODE','Voreingestellte Benachrichtigungs- Methode');
define('_NOT_MODE_SENDALWAYS','Über alle gewählten Aktualisierungen benachrichtigen');
define('_NOT_MODE_SENDONCE','Nur einmalig benachrichtigen');
define('_NOT_MODE_SENDONCEPERLOGIN','Einmalig benachrichtigen');

define('_NOT_NOTHINGTODELETE','Es gibt nichts zu löschen!');
?>