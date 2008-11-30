<?php
// $Id: notification.php,v 1.6 2003/04/01 04:31:03 okazu Exp $

// RMV-NOTIFY

// Text for various templates...    NINCS TELJESEN LEFORDÍTVA!!!!!!!

define ('_NOT_NOTIFICATIONOPTIONS', 'Értesítési Beálítások');
define ('_NOT_UPDATENOW', 'Frissítés Most!');
define ('_NOT_UPDATEOPTIONS', 'Értesítési beálítások Frissítése');

define ('_NOT_CLEAR', 'Törlés');
define ('_NOT_CHECKALL', 'Összes ellenõrzése');
define ('_NOT_MODULE', 'Modul');
define ('_NOT_CATEGORY', 'Kategória');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Név');
define ('_NOT_EVENT', 'Esemény');
define ('_NOT_EVENTS', 'Események');
define ('_NOT_ACTIVENOTIFICATIONS', 'Aktív Értesítések');
define ('_NOT_NAMENOTAVAILABLE', 'Név nem elérhetõ');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Eszköz név nem elérhetõ');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Eszköz típus nem elérhetõ');
define ('_NOT_ITEMURLNOTAVAILABLE', 'Eszköz URL nem elérhetõ');
define ('_NOT_DELETINGNOTIFICATIONS', 'Értesítés törlése');
define ('_NOT_DELETESUCCESS', 'Értesítés(ek) Törlése kész!');
define ('_NOT_UPDATEOK', 'Értesítési beálítások frissítve');
define ('_NOT_NOTIFICATIONMETHODIS', 'Értesítési mód ');
define ('_NOT_EMAIL', 'E-mail');
define ('_NOT_PM', 'Privát Üzenet');
define ('_NOT_DISABLE', 'Kikapcsolva');
define ('_NOT_CHANGE', 'Változtatás');

define ('_NOT_NOACCESS', 'Nincs jogod az oldal megtekintéséhez!');

// Text for module config options

define ('_NOT_ENABLE', 'Bekapcsolva');
define ('_NOT_NOTIFICATION', 'Értesítések');

define ('_NOT_CONFIG_ENABLED', 'Értesítések Bekapcsolva');
define ('_NOT_CONFIG_ENABLEDDSC', 'Ez a modul lehetõvé teszi a felhasználóknak, hogy beálítsák, hogy értesítést kapjanak aimkor a kiválasztott esemény történik. Válaszd az "Igen" -t, hogy be legyen kapcsolva a jövõben.');

define ('_NOT_CONFIG_EVENTS', 'Speciális események Engedéylezése');
define ('_NOT_CONFIG_EVENTSDSC', ' válaszd ki az értesítési eseményeket amire a felhasználók feliratkozhatnak.');

define ('_NOT_CONFIG_ENABLE', 'Értesítések bekapcsolása');
define ('_NOT_CONFIG_ENABLEDSC', 'Ez a modul lehetõvé teszi a felhasználóknak, hogy beálítsák, hogy értesítést kapjanak aimkor a kiválasztott esemény történik.  Válaszd ha a felhasználók az értesítési beálításokat Blokk -ban (blokk stílus) érik el.');
define ('_NOT_CONFIG_DISABLE', 'Értesítések kikapcsolása');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Csak a  Blokk stílus Bekapcsolása');
define ('_NOT_CONFIG_ENABLEINLINE', 'Csak a  soros Stílus Bekapcsolása ');
define ('_NOT_CONFIG_ENABLEBOTH', 'Értesítések bekapcsolása (minden stílus)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Hozzászólás hozzáadva');
define ('_NOT_COMMENT_NOTIFYCAP', 'Értesítsen, ha új hozzászólás érkezik ebben a témában');
define ('_NOT_COMMENT_NOTIFYDSC', 'Értesítsen valahányszor új hozzászólás érkezik ide.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automata-értesíés: Hozzászóltak: {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Hozzászólás elküldve');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Értesítsen, ha új hozzászólás érkezik (elfogadásra váró)');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Értesítsen valahányszor új hozzászólás érkezik (elfogadásra váró)');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatikus-értesítés: Hozzászóltak: {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Könyvjelzõ');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Könyvjelzõbe vétel (nem értesítés).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Tétel követése értesítés nélkül.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Értesítési mód');
define ('_NOT_NOTIFYMETHOD_DESC', 'Amikor megfigyelsz például egy fórumot, hogyan szeretnél értesítést kapni az újdonságokról?');

define ('_NOT_METHOD_EMAIL', 'E-mail (profilomban lévõ cím használatával)');
define ('_NOT_METHOD_PM', 'Privát Üzenet');
define ('_NOT_METHOD_DISABLE', 'Ideiglenesen kikapcsolva');

define ('_NOT_NOTIFYMODE', 'Alapértelmezett Értesítési Mód');
define ('_NOT_MODE_SENDALWAYS', 'Értesítsen minden kiválasztott újdonságról');
define ('_NOT_MODE_SENDONCE', 'Csak egyszer értesítsen');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Egyszer értesítsen, majd kapcsolja ki, amíg ismét be nem jelentkezek');

?>
