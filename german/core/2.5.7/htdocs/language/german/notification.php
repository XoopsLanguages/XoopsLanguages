<?php
/**
*  Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Core
* @subpackage      form Language
* @version         $Id: 2.5.0.a locale.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*/

// RMV-NOTIFY
// Text for various templates...
define('_NOT_NOTIFICATIONOPTIONS',  'Benachrichtigungsoptionen');
define('_NOT_UPDATENOW',            'Aktualisieren');
define('_NOT_UPDATEOPTIONS',        'Benachrichtigungsoptionen aktualisieren');
define('_NOT_CLEAR',                'Zurücksetzen');
define('_NOT_CHECKALL',             'Alles markieren');
define('_NOT_MODULE',               'Module');
define('_NOT_CATEGORY',             'Kategorie');
define('_NOT_ITEMID',               'ID');
define('_NOT_ITEMNAME',             'Name');
define('_NOT_EVENT',                'Ereignis');
define('_NOT_EVENTS',               'Ereignisse');
define('_NOT_ACTIVENOTIFICATIONS',  'Aktive Benachrichtigungen');
define('_NOT_NAMENOTAVAILABLE',     'Name nicht verfügbar');

// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE', 'Objektname nicht verfügbar');
define('_NOT_ITEMTYPENOTAVAILABLE', 'Objekttyp nicht verfügbar');
define('_NOT_ITEMURLNOTAVAILABLE',  'Objekt-URL nicht verfügbar');
define('_NOT_DELETINGNOTIFICATIONS','Benachrichtigungen löschen');
define('_NOT_DELETESUCCESS',        'Benachrichtigungen erfolgreich gelöscht.');

define('_NOT_UPDATEOK',             'Benachrichtigungsoptionen erfolgreich aktualisiert');
define('_NOT_NOTIFICATIONMETHODIS', 'Benachrichtigungsmethode ist');
define('_NOT_EMAIL',                'eMail');
define('_NOT_PM',                   'Private Nachricht');
define('_NOT_DISABLE',              'Deaktiviert');
define('_NOT_CHANGE',               'wechseln');


define('_NOT_NOACCESS',             'Sie haben nicht die erforderlichen Rechte diesen Bereich zu betreten.');
// Text for module config options
define('_NOT_ENABLE',               'Aktivieren');
define('_NOT_NOTIFICATION',         'Benachrichtigung');
define('_NOT_CONFIG_ENABLED',       'Benachrichtigung aktivieren');

define('_NOT_CONFIG_ENABLEDDSC',    'Dieses Modul erlaubt Benutzern selbst zu entscheiden, ob sie bei bestimmten Ereignissen informiert werden wollen. Wählen Sie "Ja" um dieses Feature zu nutzen.');
define('_NOT_CONFIG_EVENTS',        'Spezielle Ereignisse aktivieren');

define('_NOT_CONFIG_EVENTSDSC',     'Wählen Sie welche Art Benachrichtigungen die Mitglieder auswählen können.');
define('_NOT_CONFIG_ENABLE',        'Benachrichtigung aktivieren');

define('_NOT_CONFIG_ENABLEDSC',     'Dieses Modul erlaubt Benutzern selbst zu entscheiden, ob Sie die Benachrichtigung in einem Block lesen möchten (Block-style), im Modul (Inline-style), oder beides. Für die Block-style Benachrichtigung muß die Option Block-Benachrichtigungsmethode aktiviert sein.');
define('_NOT_CONFIG_DISABLE',       'Benachrichtigung abschalten');
define('_NOT_CONFIG_ENABLEBLOCK',   'Nur Block-style aktivieren');
define('_NOT_CONFIG_ENABLEINLINE',  'Nur Inline-style aktivieren');
define('_NOT_CONFIG_ENABLEBOTH',    'Benachrichtigungen aktivieren (beide Stilarten)');

// For notification about comment events
define('_NOT_COMMENT_NOTIFY',       'Kommentar hinzugefügt');


define('_NOT_COMMENT_NOTIFYCAP',    'Benachrichtigung erhalten wenn ein Kommentar diesem Artikel hinzugefügt wurde.');
define('_NOT_COMMENT_NOTIFYDSC',    'Sie erhalten eine Benachrichtigung wenn ein Kommentar diesem Artikel hinzugefügt (oder genehmigt) wurde.');
define('_NOT_COMMENT_NOTIFYSBJ',    '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Ein Kommentar wurde zu {X_ITEM_TYPE} hinzugefügt');
define('_NOT_COMMENTSUBMIT_NOTIFY', 'Kommentar hinzugefügt');


define('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Benachrichtigen Sie mich, wenn ein neuer Kommentar hierzu verfasst wurde (auf Freigabe wartend).');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Benachrichtigung erhalten wenn ein Kommentar diesem Artikel hinzugefügt (aber noch nicht freigegeben) wurde.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Kommentar für {X_ITEM_TYPE} wurde hinzugefügt');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY',      'Lesezeichen');
define('_NOT_BOOKMARK_NOTIFYCAP',   'Lesezeichen hinzufügen (Keine Benachrichtigung).');
define('_NOT_BOOKMARK_NOTIFYDSC',   'Beobachten ohne Benachrichtigungen.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD',         'Benachrichtigungsmethode:<br />Wenn Sie z. B. ein Forum beobachten, wie möchten Sie über Aktualisierungen benachrichtigt werden?');
define('_NOT_METHOD_EMAIL',         'eMail (Die eMail Adresse aus meinem Profil benutzen)');
define('_NOT_METHOD_PM',            'Private Nachricht');
define('_NOT_METHOD_DISABLE',       'Vorrübergehend deaktiviert');
define('_NOT_NOTIFYMODE',           'Voreingestellte Benachrichtigungsmethode');
define('_NOT_MODE_SENDALWAYS',      'Über alle gewählten Aktualisierungen benachrichtigen');
define('_NOT_MODE_SENDONCE',        'Nur einmalig benachrichtigen');

define('_NOT_MODE_SENDONCEPERLOGIN','Benachrichtigung einmal senden, dann deaktieren bis ich mich wieder einlogge.');
define('_NOT_NOTHINGTODELETE',      'Es gibt nichts zu löschen!');

?>