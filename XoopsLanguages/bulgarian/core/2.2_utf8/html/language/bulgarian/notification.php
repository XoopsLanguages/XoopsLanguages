<?php
// $Id: notification.php,v 1.6.22.1 2005/06/06 14:49:44 mithyt2 Exp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Известия');
define('_NOT_UPDATENOW','Обнови');
define('_NOT_UPDATEOPTIONS','Обновяване на известията');

define('_NOT_CLEAR','Изчиства');
define('_NOT_CHECKALL','Избира всички');
define('_NOT_MODULE','Модул');
define('_NOT_CATEGORY','Категория');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Име');
define('_NOT_EVENT','Събитие');
define('_NOT_EVENTS','Събития');
define('_NOT_ACTIVENOTIFICATIONS','Активни известия');
define('_NOT_NAMENOTAVAILABLE','Няма такова име');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Няма такова име');
define('_NOT_ITEMTYPENOTAVAILABLE','Няма такъв тип');
define('_NOT_ITEMURLNOTAVAILABLE','Няма такава връзка');
define('_NOT_DELETINGNOTIFICATIONS','Изтрива известията');
define('_NOT_DELETESUCCESS','Известията са изтрити успешно.');
define('_NOT_UPDATEOK','Опциите за известията са обновени успешено');
define('_NOT_NOTIFICATIONMETHODIS','Режим на известияване е');
define('_NOT_EMAIL','email');
define('_NOT_PM','лично съобщение');
define('_NOT_DISABLE','изключено');
define('_NOT_CHANGE','Смяна');

define('_NOT_NOACCESS','Нямате права за достъп до тази зона.');

// Text for module config options

define('_NOT_ENABLE','Разрешава');
define('_NOT_NOTIFICATION','Известие');

define('_NOT_CONFIG_ENABLED','Разрешава известията');
define('_NOT_CONFIG_ENABLEDDSC','Този модул позволява на потребителите да получават известие при определени събития.  Избери "да" за да включите тази услуга.');

define('_NOT_CONFIG_EVENTS','Разрешава специфични събитие');
define('_NOT_CONFIG_EVENTSDSC','Изберете за кои събития потребителите могат да се абонират.');

define('_NOT_CONFIG_ENABLE','Разрешава известията');
define('_NOT_CONFIG_ENABLEDSC','Този модул изпраща известие на потребителя, когато се случи определено събитие.  Тип на показване на известията, в блок или в центъра на страницата най-долу.  Ако изберете в блок, трябва да разрешите блока.');
define('_NOT_CONFIG_DISABLE','Изключва известията');
define('_NOT_CONFIG_ENABLEBLOCK','Включва Блоков стил');
define('_NOT_CONFIG_ENABLEINLINE','Включва обикновен (в центъра на страницата) стил');
define('_NOT_CONFIG_ENABLEBOTH','Включва известията (двата стила)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Коментар е добаве');
define('_NOT_COMMENT_NOTIFYCAP','Извести ме, когато нов коментар е добавен.');
define('_NOT_COMMENT_NOTIFYDSC','Получавате известие, когато нов коментар е публикуван или одобрен.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Известие: Коментар за {X_ITEM_TYPE} е добавен');

define('_NOT_COMMENTSUBMIT_NOTIFY','Коментар е изпратен');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Извести ме, когато нов коментар е добавен и чака одобрение.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Получавате известие, когато нов коментар е добавен и чака одборение.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Известие: Коментар изпратен за {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Bookmark');
define('_NOT_BOOKMARK_NOTIFYCAP','Bookmark this item (no notification).');
define('_NOT_BOOKMARK_NOTIFYDSC','Keep track of this item without receiving any event notifications.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Режим на известяване');
define('_NOT_METHOD_EMAIL','Email (ползвай адреса от профила ми)');
define('_NOT_METHOD_PM','Лично съобщение');
define('_NOT_METHOD_DISABLE','Временно изключено');

define('_NOT_NOTIFYMODE','Режим на известяване по подразбиране');
define('_NOT_MODE_SENDALWAYS','Известявай ме за всияко ново събитие');
define('_NOT_MODE_SENDONCE','Извести ме веднъж');
define('_NOT_MODE_SENDONCEPERLOGIN','Извести ме веднъж, след това го изключи до следващото влизане');

define("_NOT_NOTIFYMETHOD_DESC","Когато наблюдавате за пр. форум, как искате да получавате известията за промените?");
?>