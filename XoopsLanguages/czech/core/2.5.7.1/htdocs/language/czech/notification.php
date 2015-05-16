<?php
// $Id: notification.php 12363 2014-03-08 10:39:06Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
// RMV-NOTIFY
// Text for various templates...
define('_NOT_NOTIFICATIONOPTIONS','Nastavení upozornění');
define('_NOT_UPDATENOW','Aktualizovat');
define('_NOT_UPDATEOPTIONS','Aktualizovat nastavení upozornění');
define('_NOT_CLEAR','Odškrtnout vše');
define('_NOT_CHECKALL','Zaškrtnou vše');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategorie');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Název');
define('_NOT_EVENT','Událost');
define('_NOT_EVENTS','Události');
define('_NOT_ACTIVENOTIFICATIONS','Aktivní upozornění');
define('_NOT_NAMENOTAVAILABLE','Název není dostupný');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Název položky není dostupný');
define('_NOT_ITEMTYPENOTAVAILABLE','Typ položky není dostupný');
define('_NOT_ITEMURLNOTAVAILABLE','WWW adresa položky není dostupná');
define('_NOT_DELETINGNOTIFICATIONS','Mazání upozornění');
define('_NOT_DELETESUCCESS','Vybraná upozornění byla vymazána.');
define('_NOT_UPDATEOK','Nastavení upozornění bylo v pořádku aktualizováno.');
define('_NOT_NOTIFICATIONMETHODIS','Metoda upozornění');
define('_NOT_EMAIL','zpráva emailem');
define('_NOT_PM','soukromá zpráva');
define('_NOT_DISABLE','žádná');
define('_NOT_CHANGE','Změnit');
define('_NOT_NOACCESS','Lituji, ale nemáte oprvánění ke vstupu do této části..');
// Text for module config options
define('_NOT_ENABLE','Povolit');
define('_NOT_NOTIFICATION','Upozornění');
define('_NOT_CONFIG_ENABLED','Povolit upozornění');
define('_NOT_CONFIG_ENABLEDDSC','Tento modul dovoluje odesílat upozornění při různých událostech. Volbou "Ano" tuto vlastnost povolíte.');
define('_NOT_CONFIG_EVENTS','Povolit specifické události'); // Enable Specific Events
define('_NOT_CONFIG_EVENTSDSC','Select which notification events to which your users may subscribe.');
define('_NOT_CONFIG_ENABLE','Povolit upozornění');
define('_NOT_CONFIG_ENABLEDSC','This module allows users to be notified when certain events occur.  Select if users should be presented with notification options in a Block (Block-style), within the module (Inline-style), or both.  For block-style notification, the Notification Options block must be enabled for this module.');
define('_NOT_CONFIG_DISABLE','Zakázat upozornění');
define('_NOT_CONFIG_ENABLEBLOCK','Použít pouze upozornění v Bloku');
define('_NOT_CONFIG_ENABLEINLINE','Použít pouze upozornění v textu'); // Enable only Inline-style
define('_NOT_CONFIG_ENABLEBOTH','Použít obě možnosti upozornění');
// For notification about comment events
define('_NOT_COMMENT_NOTIFY','Vložení komentáře');
define('_NOT_COMMENT_NOTIFYCAP','Notify me when a new comment is posted for this item.');
define('_NOT_COMMENT_NOTIFYDSC','Receive notification whenever a new comment is posted (or approved) for this item.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify: Comment added to {X_ITEM_TYPE}');
define('_NOT_COMMENTSUBMIT_NOTIFY','Odeslání komentáře');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Notify me when a new comment is submitted (awaiting approval) for this item.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Receive notification whenever a new comment is submitted (awaiting approval) for this item.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify: Comment submitted for {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY','Záložka');
define('_NOT_BOOKMARK_NOTIFYCAP','Bookmark this item (no notification).');
define('_NOT_BOOKMARK_NOTIFYDSC','Keep track of this item without receiving any event notifications.');
// For user profile
// FIXME: These should be reworded a little...
define('_NOT_NOTIFYMETHOD','Způsob upozornění<br /> Pokud sledujete například fórum, kam chcete dostávat upozornění u změnách?');
define('_NOT_METHOD_EMAIL','Email (použije se email z profilu)');
define('_NOT_METHOD_PM','Soukromá zpráva');
define('_NOT_METHOD_DISABLE','Dočasně vypnuto');
define('_NOT_NOTIFYMODE','Výchozí metoda upozornění');
define('_NOT_MODE_SENDALWAYS','Upozornit při každé změně'); //Notify me of all selected updates
define('_NOT_MODE_SENDONCE','Upozornit mne pouze jednou'); // Notify me only once
define('_NOT_MODE_SENDONCEPERLOGIN','upozornit pouze jednou, potom zablokovat dokud se nepřihlásím.'); // Notify me once then disable until I log in again
define('_NOT_NOTHINGTODELETE','Nic se nedá smazat.'); // There is nothing to delete
