<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2005-06-29 17:19:30
define('_AM_APCAL_PI_TH_OPTIONS','Options (usually blank)');

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');


// titles
//define("_AM_APCAL_CONFIG","Конфигурация модуля APCal");
//define("_AM_APCAL_GENERALCONF","General Settings of APCal");
define("_AM_APCAL_ADMISSION","Подтверждение событий");
define("_AM_APCAL_MENU_EVENTS","Менеджер событий");
define("_AM_APCAL_MENU_CATEGORIES","Категории");
define("_AM_APCAL_MENU_CAT2GROUP","Права категорий");
define("_AM_APCAL_ICALENDAR_IMPORT","Импорт");
define("_AM_APCAL_GROUPPERM","Права групп");
define("_AM_APCAL_TABLEMAINTAIN","Поддержка таблиц (обновление модуля)");
define("_AM_APCAL_MYBLOCKSADMIN","Блоки");

// forms
define("_AM_APCAL_BUTTON_EXTRACT","Извлечь");
define("_AM_APCAL_BUTTON_ADMIT","Подтвердить");
define("_AM_APCAL_BUTTON_MOVE","Переместить");
define("_AM_APCAL_BUTTON_COPY","Скопировать");
define("_AM_APCAL_CONFIRM_DELETE","Вы уверены, что хотите удалить событие?");
define("_AM_APCAL_CONFIRM_MOVE","Вы уверены, что хотите переместить событие из одной категории в другую?");
define("_AM_APCAL_CONFIRM_COPY","Вы уверены, что хотите добавить это событие в эту категорию?");
define("_AM_APCAL_OPT_PAST","Прошедшие");
define("_AM_APCAL_OPT_FUTURE","Будущие");
define("_AM_APCAL_OPT_PASTANDFUTURE","Прошедшие и будущие");

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY",'d.m.y');
define("_AM_APCAL_DTFMT_LIST_NORMAL",'d.m.y<\b\r />H:i');

// timezones
define('_AM_APCAL_TZOPT_SERVER','Часовой пояс сервера');
define('_AM_APCAL_TZOPT_GMT','GMT');
define('_AM_APCAL_TZOPT_USER','Часовой пояс пользователя');

// admission
define("_AM_APCAL_LABEL_ADMIT","Выбранные события: ");
define("_AM_APCAL_MES_ADMITTED","События были подтверждены");
define("_AM_APCAL_ADMIT_TH0","Пользователь");
define("_AM_APCAL_ADMIT_TH1","Дата начала");
define("_AM_APCAL_ADMIT_TH2","Дата окончания");
define("_AM_APCAL_ADMIT_TH3","Название");
define("_AM_APCAL_ADMIT_TH4","Правило повтора");

// events manager & importing iCalendar

define("_AM_APCAL_LABEL_IMPORTFROMWEB","Импортировать с web (Введите адрес, начинающийся с 'http://' или 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","Загрузка данных iCalendar (Выберите файл на вашей локальной машине)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","Выбранные события:");
define("_AM_APCAL_LABEL_IO_OUTPUT","");
define("_AM_APCAL_LABEL_IO_DELETE","");
define("_AM_APCAL_MES_EVENTLINKTOCAT","события были добавлены в категорию");
define("_AM_APCAL_MES_EVENTUNLINKED","события были удалены из категории");
define("_AM_APCAL_FMT_IMPORTED","события были импортированы в '%s'");
define("_AM_APCAL_MES_DELETED","события были удалены");
define("_AM_APCAL_IO_TH0","Пользователь");
define("_AM_APCAL_IO_TH1","Дата начала");
define("_AM_APCAL_IO_TH2","Дата окончания");
define("_AM_APCAL_IO_TH3","Название");
define("_AM_APCAL_IO_TH4","Правило повтора");
define("_AM_APCAL_IO_TH5","Подтверждение");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "Создание" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "Супер-создание" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "Редактирование" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "Супер-редактирование" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "Удаление" ) ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "Супер-удаление" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "Может трогать других" ) ;
define( '_AM_APCAL_CAT2GROUPDESC' , "Выберите категории, к которым разрешён доступ." ) ;
define( '_AM_APCAL_GROUPPERMDESC' , 'Выберите права доступа для каждой группы пользователей (Настройки для Администраторов и Гостей будут прогнорированы).<br />Для того, чтобы эти настройки вступили в силу, выберите "расписано в правах для групп" в пункте "Права пользователя" в конфигурации модуля.<br /><br />Создание/редактирование - возможность создавать/редактировать приватные события только для себя или своей группы пользователей.<br />Супер-создание/редактирование - возможность создавать/редактировать приватные события для всех существующих групп пользователей.' ) ;

// Table Maintenance
define( '_AM_APCAL_MB_SUCCESSUPDATETABLE' , "Обновление таблиц(ы) выполнено" ) ;
define( '_AM_APCAL_MB_FAILUPDATETABLE' , "Обновление таблиц(ы) выполнить не удалось" ) ;
define( '_AM_APCAL_NOTICE_NOERRORS' , "В таблицах и записях ошибок не обнаружено." ) ;
define( '_AM_APCAL_ALRT_CATTABLENOTEXIST' , "Таблица категорий не существует.<br />\nСоздать таблицу категорий?" ) ;
define( '_AM_APCAL_ALRT_OLDTABLE' , "Структура таблицы событий устарела.<br />\nОбновить?" ) ;
define( '_AM_APCAL_ALRT_TOOOLDTABLE' , "Обнаружена ошибка в таблице.<br />\nВозможно, вы используете APCal 0.3x или более ранней версии.<br />\nВыполните, пожалуйста, сначала обновление до версии 0.4x или 0.5x." ) ;
define( '_AM_APCAL_FMT_SERVER_TZ_ALL' , "Часовой пояс сервера (зимнее время): %+2.1f<br />Часовой пояс сервера (летнее время): %+2.1f<br />Название часового пояса сервера: %s<br />Значение из конфигурации XOOPS: %+2.1f<br />Значение, используемое APCal: %+2.1f<br />" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_COUNT' , "События" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE' , "Часовой пояс" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE_TO' , "Изменить (от -14.0 до 14.0)" ) ;
define( '_AM_APCAL_JSALRT_SERVER_TZ' , "Не забудьте сделать копию таблицы событий перед выполнением этой операции" ) ;
define( '_AM_APCAL_NOTICE_SERVER_TZ' , "Если на вашем сервере установлено часовой пояс с летним временем и некоторые события были зарегистрированы в APCal 0.6x or 0.7x, не нажимайте эту кнопку.<br /> Это нормально, что система отображает и -5.0 и -4.0 в EDT." ) ;
define( '_AM_APCAL_MB_SUCCESSTZUPDATE' , "Часовой пояс для событий изменён." ) ;

// Categories
define( '_AM_APCAL_CAT_TH_TITLE' , 'Название' ) ;
define( '_AM_APCAL_CAT_TH_DESC' , 'Описание' ) ;
define( '_AM_APCAL_CAT_TH_PARENT' , 'Родительская категория' ) ;
define( '_AM_APCAL_CAT_TH_OPTIONS' , 'Настройки' ) ;
define( '_AM_APCAL_CAT_TH_LASTMODIFY' , 'Дата последнего изменения' ) ;
define( '_AM_APCAL_CAT_TH_OPERATION' , 'Действия' ) ;
define( '_AM_APCAL_CAT_TH_ENABLED' , 'Доступно' ) ;
define( '_AM_APCAL_CAT_TH_WEIGHT' , 'Вес' ) ;
define( '_AM_APCAL_CAT_TH_SUBMENU' , 'зарегистрировать в подменю' ) ;
define( '_AM_APCAL_BTN_UPDATE' , 'Обновить' ) ;
define( '_AM_APCAL_MENU_CAT_EDIT' , 'Редактировать категорию' ) ;
define( '_AM_APCAL_MENU_CAT_NEW' , 'Создать новую подкатегорию' ) ;
define( '_AM_APCAL_MB_MAKESUBCAT' , 'Подкатегория' ) ;
define( '_AM_APCAL_MB_MAKETOPCAT' , 'Создать новую категорию' ) ;
define( '_AM_APCAL_MB_CAT_INSERTED' , 'Новая категория успешно создана' ) ;
define( '_AM_APCAL_MB_CAT_UPDATED' , 'Категория успешно обновлена' ) ;
define( '_AM_APCAL_FMT_CAT_DELETED' , '%s категорий удалено' ) ;
define( '_AM_APCAL_FMT_CAT_BATCHUPDATED' , '%s категорий обновлено' ) ;
define( '_AM_APCAL_FMT_CATDELCONFIRM' , 'Вы действительно хотите удалить категорию %s?' ) ;

// Plugins
define( '_AM_APCAL_PI_UPDATED' , 'Плагины обновлены' ) ;
define( '_AM_APCAL_PI_TH_TYPE' , 'Тип' ) ;
define( '_AM_APCAL_PI_TH_TITLE' , 'Название:' ) ;
define( '_AM_APCAL_PI_TH_DIRNAME' , 'Директория модуля:' ) ;
define( '_AM_APCAL_PI_TH_FILE' , 'Файл плагина:' ) ;
define( '_AM_APCAL_PI_TH_DOTGIF' , 'Картинка:' ) ;
define( '_AM_APCAL_PI_TH_OPERATION' , 'Действие' ) ;
define( '_AM_APCAL_PI_ENABLED' , 'Доступно' ) ;
define( '_AM_APCAL_PI_DELETE' , 'Удалить' ) ;
define( '_AM_APCAL_PI_NEW' , 'Новый' ) ;
define( '_AM_APCAL_PI_VIEWYEARLY' , 'Календарь по годам' ) ;
define( '_AM_APCAL_PI_VIEWMONTHLY' , 'Календарь по месяцам' ) ;
define( '_AM_APCAL_PI_VIEWWEEKLY' , 'Календарь по неделям' ) ;
define( '_AM_APCAL_PI_VIEWDAILY' , 'Календарь по дням' ) ;



}

?>
