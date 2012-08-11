<?php
// $Id: notification.php,v 1.6 2003/04/01 04:31:03 okazu Exp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Možnosti upozorňování');
define('_NOT_UPDATENOW','Aktualizovat');
define('_NOT_UPDATEOPTIONS','Aktualizovat možnosti upozorňování');

define('_NOT_CLEAR','Vyčistit');
define('_NOT_CHECKALL','Zkontrolovat vše');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategorie');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Jméno');
define('_NOT_EVENT','Událost');
define('_NOT_EVENTS','Události');
define('_NOT_ACTIVENOTIFICATIONS','Aktivní upozorňování');
define('_NOT_NAMENOTAVAILABLE','Jméno není zadáno');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Není název položky');
define('_NOT_ITEMTYPENOTAVAILABLE','Není typ položky');
define('_NOT_ITEMURLNOTAVAILABLE','Není URL položky');
define('_NOT_DELETINGNOTIFICATIONS','Mažu upozornění');
define('_NOT_DELETESUCCESS','Upozornění smazáno.');
define('_NOT_UPDATEOK','Možnosti upozorněňování aktualizovány');
define('_NOT_NOTIFICATIONMETHODIS','Způsob upozornění je');
define('_NOT_EMAIL','e-mail');
define('_NOT_PM','soukromá zpráva');
define('_NOT_DISABLE','zakázáno');
define('_NOT_CHANGE','Změnit');

define('_NOT_NOACCESS','Nemáte oprávnění pro vstup na tuto stránku.');

// Text for module config options

define('_NOT_ENABLE','Povolit');
define('_NOT_NOTIFICATION','Upozornění');

define('_NOT_CONFIG_ENABLED','Povolit upozornění');
define('_NOT_CONFIG_ENABLEDDSC','Tento modul umoňuje uživatelům výběr upozornění na určité události. Zvolte \"Ano\" pro povolení tété vlastnosti.');

define('_NOT_CONFIG_EVENTS','Povolit speciální upozorňování');
define('_NOT_CONFIG_EVENTSDSC','Vyberte událost, na kterou chcete být upozorněni.');

define('_NOT_CONFIG_ENABLE','Povolit upozornění');
define('_NOT_CONFIG_ENABLEDSC','Tento modul umoňuje uživatelům výběr upozornění na určité události. Vyberte, jak bude uživatel upozorněn (Block-style), (Inline-style), nebo obojí. Pro block-style upozornění, je třeba, aby byl povolen blok pro tento modul.');
define('_NOT_CONFIG_DISABLE','Zakázat upozornění');
define('_NOT_CONFIG_ENABLEBLOCK','Povolit pouze styl Bloku');
define('_NOT_CONFIG_ENABLEINLINE','Povolit pouze Inline-style');
define('_NOT_CONFIG_ENABLEBOTH','Povolit upozorňování (oba styly)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Přidání komentáře');
define('_NOT_COMMENT_NOTIFYCAP','Upozornit, když bude přidán nový komentář pro tuto položku.');
define('_NOT_COMMENT_NOTIFYDSC','Obdržíte upozornění, když bude přidán či schválen nový komentář k této položce.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-upozornění: Přidání komentáře k {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Zaslání komentáře');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Upozornit, když bude zaslán (čeká na schválení) nový komentář pro tuto položku.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Obdržíte upozornění, když bude zaslán nový komentář k této položce.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-upozornění: Zaslání komentáře k {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Záložka');
define('_NOT_BOOKMARK_NOTIFYCAP','Označit tuto položku (bez upozornění).');
define('_NOT_BOOKMARK_NOTIFYDSC','Keep track of this item without receiving any event notifications.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Způsob upozornění: Když například sledujete fórum, jak chcete být informováni o změnách a nových příspěvcích?');
define('_NOT_METHOD_EMAIL','E-mail (použije se adresa z profilu)');
define('_NOT_METHOD_PM','Soukromá zpráva');
define('_NOT_METHOD_DISABLE','Dočasně zakázat');

define('_NOT_NOTIFYMODE','Výchozí způsob upozornění');
define('_NOT_MODE_SENDALWAYS','Upozornit na každou změnu zvlášť');
define('_NOT_MODE_SENDONCE','Upozornit pouze jednou');
define('_NOT_MODE_SENDONCEPERLOGIN','Zakázat upozorňování mě pouze do příštího přihlášení');

?>