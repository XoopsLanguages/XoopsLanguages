<?php
// $Id: notification.php 2755 2009-02-02 14:37:15Z phppp $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-12 andrey3761

define('_NOT_NOTIFICATIONOPTIONS','Настройки оповещения');
define('_NOT_UPDATENOW','Обновить');
define('_NOT_UPDATEOPTIONS','Обновить настройки оповещения');

define('_NOT_CLEAR','Очистка');
define('_NOT_CHECKALL','Выбрать все');
define('_NOT_MODULE','Модуль');
define('_NOT_CATEGORY','Категория');
define('_NOT_ITEMID','Номер');
define('_NOT_ITEMNAME','Имя');
define('_NOT_EVENT','Событие');
define('_NOT_EVENTS','События');
define('_NOT_ACTIVENOTIFICATIONS','Активные оповещения');
define('_NOT_NAMENOTAVAILABLE','Имя не доступно');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Имя элемента не доступно');
define('_NOT_ITEMTYPENOTAVAILABLE','Тип элемента не доступен');
define('_NOT_ITEMURLNOTAVAILABLE','Адрес элемента не доступен');
define('_NOT_DELETINGNOTIFICATIONS','Удаление оповещений');
define('_NOT_DELETESUCCESS','Оповещения успешно удалены.');
define('_NOT_UPDATEOK','Настройки оповещения обновлены');
define('_NOT_NOTIFICATIONMETHODIS','Метод оповещения');
define('_NOT_EMAIL','E-mail');
define('_NOT_PM','личное сообщение');
define('_NOT_DISABLE','выключено');
define('_NOT_CHANGE','Изменить');

define('_NOT_NOACCESS','У Вас нет прав для доступа к этой странице.');

// Text for module config options

define('_NOT_ENABLE','Разрешить');
define('_NOT_NOTIFICATION','Оповещение');

define('_NOT_CONFIG_ENABLED','Разрешение оповещения');
define('_NOT_CONFIG_ENABLEDDSC','Этот модуль разрешает пользователям выбирать оповещения о возникновении определенных событий.  Выберите "Да" для включения этой функции.');

define('_NOT_CONFIG_EVENTS','Разрешение выборочных оповещений');
define('_NOT_CONFIG_EVENTSDSC','Выберите какие оповещения какими пользователями могут быть востребованы.');

define('_NOT_CONFIG_ENABLE','Разрешение оповещений');
define('_NOT_CONFIG_ENABLEDSC','Этот модуль разрешает оповещать пользователей об определенных событиях. Для отображения опций оповещения у пользователя выберите отображение в блоке (Блочный стиль), внутри модуля (Подстрочный стиль) или оба стиля. Для блочного стиля, блок опций оповещения должен быть разрешен для этого модуля.');
define('_NOT_CONFIG_DISABLE','Запретить оповещение');
define('_NOT_CONFIG_ENABLEBLOCK','Разрешить только блочный стиль');
define('_NOT_CONFIG_ENABLEINLINE','Разрешить только подстрочный стиль');
define('_NOT_CONFIG_ENABLEBOTH','Разрешить оповещение (оба стиля)');

// для оповещения о комментариях

define('_NOT_COMMENT_NOTIFY','Комментарий добавлен');
define('_NOT_COMMENT_NOTIFYCAP','Оповестить меня при создании нового комментария к этому сообщению.');
define('_NOT_COMMENT_NOTIFYDSC','Принимать оповещение всякий раз при создании нового комментария (или одобрения) для этого сообщения.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Добавлен комментарий в {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Комментарий отправлен');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Оповестить меня при отправке нового комментария (ждущего одобрения) для этого сообщения.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Принимать оповещение всякий раз при отправке нового комментария (ждущего одобрения) для этого сообщения.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Отправлен комментарий в {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Закладка');
define('_NOT_BOOKMARK_NOTIFYCAP','Сделать здесь закладку (без оповещения).');
define('_NOT_BOOKMARK_NOTIFYDSC','Позволяет отслеживать без приема любых оповещений о событиях.');

// для профиля пользователя
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Метод оповещения: Если Вы контролируете например форум, как Вы будете получать оповещения об изменениях?');
define('_NOT_METHOD_EMAIL','E-mail (использовать адрес из профиля)');
define('_NOT_METHOD_PM','Личное сообщение');
define('_NOT_METHOD_DISABLE','Временно выключено');

define('_NOT_NOTIFYMODE','Текущий режим оповещения');
define('_NOT_MODE_SENDALWAYS','Оповещать меня обо всех выбранных изменениях');
define('_NOT_MODE_SENDONCE','Оповестить меня только один раз');
define('_NOT_MODE_SENDONCEPERLOGIN','Оповестить один раз и запретить оповещение до следующего входа');

define('_NOT_NOTHINGTODELETE','Не выбраны оповещения для удаления!');
?>