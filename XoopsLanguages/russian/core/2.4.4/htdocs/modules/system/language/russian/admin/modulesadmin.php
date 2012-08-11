<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-12 andrey3761

//%%%%%%	Файл  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Администрирование модулей");
define("_MD_AM_MODULE","Модуль");
define("_MD_AM_VERSION","Версия");
define("_MD_AM_LASTUP","Последнее обновление");
define("_MD_AM_DEACTIVATED","Отключен");
define("_MD_AM_ACTION","Действие");
define("_MD_AM_DEACTIVATE","Отключить");
define("_MD_AM_ACTIVATE","Включить");
define("_MD_AM_UPDATE","Обновить");
define("_MD_AM_DUPEN","Дублирование записей в таблице модулей!");
define("_MD_AM_DEACTED","Выбранный модуль был выключен. Теперь Вы его можете безопасно удалить.");
define("_MD_AM_ACTED","Выбранный модуль был включен!");
define("_MD_AM_UPDTED","Выбранный модуль был обновлен!");
define("_MD_AM_SYSNO","Системный модуль не может быть отключен.");
define("_MD_AM_STRTNO","Этот модуль установлен модулем домашней страницы. Пожалуйста измените модуль домашней страницы через меню конфигурации сайта.");

// added in RC2
define("_MD_AM_PCMFM","Пожалуйста подтвердите:");

// added in RC3
define("_MD_AM_ORDER","Вес");
define("_MD_AM_ORDER0","(0 = скрыто)");
define("_MD_AM_ACTIVE","Включен");
define("_MD_AM_INACTIVE","Выключен");
define("_MD_AM_NOTINSTALLED","Не установлен");
define("_MD_AM_NOCHANGE","Без изменений");
define("_MD_AM_INSTALL","Установка ");
define("_MD_AM_UNINSTALL","Удаление ");
define("_MD_AM_SUBMIT","Выполнить");
define("_MD_AM_CANCEL","Отмена");
define("_MD_AM_DBUPDATE","База данных успешно обновлена!");
define("_MD_AM_BTOMADMIN","Назад на страницу администрирования модулей");

// %s represents module name
define("_MD_AM_FAILINS","Не могу установить %s.");
define("_MD_AM_FAILACT","Не могу включить %s.");
define("_MD_AM_FAILDEACT","Не могу выключить %s.");
define("_MD_AM_FAILUPD","Не могу обновить %s.");
define("_MD_AM_FAILUNINS","Не могу удалить %s.");
define("_MD_AM_FAILORDER","Не могу упорядочить %s.");
define("_MD_AM_FAILWRITE","Не могу записать в основное меню.");
define("_MD_AM_ALEXISTS","Модуль %s уже существует.");
define("_MD_AM_ERRORSC","Ошибка(и):");
define("_MD_AM_OKINS","Модуль %s установлен успешно.");
define("_MD_AM_OKACT","Модуль %s включен успешно.");
define("_MD_AM_OKDEACT","Модуль %s выключен успешно.");
define("_MD_AM_OKUPD","Модуль %s обновлен успешно.");
define("_MD_AM_OKUNINS","Модуль %s удален успешно.");
define("_MD_AM_OKORDER","Модуль %s изменен успешно.");

define('_MD_AM_RUSUREINS','Нажмите кнопку для установки этого модуля');
define('_MD_AM_RUSUREUPD','Нажмите кнопку для обновления этого модуля');
define('_MD_AM_RUSUREUNINS','Вы действительно хотите удалить этот модуль?');
define('_MD_AM_LISTUPBLKS','Перечисленные блоки были обновлены.<br />Содержимое выбранных блоков (параметры или шаблон) может быть перезаписано..<br />');
define('_MD_AM_NEWBLKS','Новые блоки');
define('_MD_AM_DEPREBLKS','Конфликтующие блоки');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Установка модуля:  ');
define('_MD_AM_TABLE_RESERVED','%s зарезервированная таблица!');
define('_MD_AM_CREATE_TABLES','Создание таблиц....');
define('_MD_AM_TABLE_CREATED','Таблица %s создана');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Данные добавлены в таблицу %s');
define('_MD_AM_INSERT_DATA_FAILD','Не удалось добавить %s в базу данных.');
define('_MD_AM_INSERT_DATA_DONE','Данные модуля добавлены успешно.');
define('_MD_AM_MODULEID','ID модуля : %s');
define('_MD_AM_SQL_FOUND','SQL-файл, находящийся по адресу %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL-файл не найден на странице %s');
define('_MD_AM_SQL_NOT_CREATE','Ошибка: невозможно создать %s ');
define('_MD_AM_SQL_NOT_VALID','%s не является действительным SQL!');

define('_MD_AM_GROUP_ID',' ID группы: %s ');
define('_MD_AM_NAME',' Функция: ');
define('_MD_AM_VALUE',' Значение: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Добавление шаблонов...');
define('_MD_AM_TEMPLATES_DELETE','Удаление шаблонов...');
define('_MD_AM_TEMPLATES_UPDATE','Обновление шаблонов...');

define('_MD_AM_TEMPLATE_ID','ID шаблона : %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Шаблон %s добавлен в базу данных');
define('_MD_AM_TEMPLATE_ADD_ERROR','ОШИБКА: Не удалось вставить шаблон %s в базу данных.');
define('_MD_AM_TEMPLATE_COMPILED','Шаблон %s скомпилирован ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','ОШИБКА: Не удалось скомпилировать шаблон %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Шаблон %s удален из базы данных. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','ОШИБКА: Невозможно удалить шаблон %s из базы данных. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Шаблон %s внесен а базу данных. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Шаблон %s перекомпилирован');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','ОШИБКА: Не удалось перекомпилировать шаблон %s ');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','ОШИБКА: Невозможно перекомпилировать шаблон %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','ОШИБКА: Невозможно удалить старый шаблон %s. Остановите обновление этого файла. ');
define('_MD_AM_TEMPLATE_UPDATE','Шаблон %s обновлен. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','ОШИБКА: Невозможно обновить %s шаблон. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Добавление блоков....');
define('_MD_AM_BLOCKS_DELETE','Удаление блоков....');
define('_MD_AM_BLOCKS_REBUILD','Восстановление блоков....');

define('_MD_AM_BLOCK_ID',' ID блока: %s ');

define('_MD_AM_BLOCK_ACCESS','Права на доступ к блоку добавлены');
define('_MD_AM_BLOCK_ACCESS_ERROR','ОШИБКА: Не удалось добавить права на доступ к блоку');
define('_MD_AM_BLOCK_ADD','Блок %s добавлен ');
define('_MD_AM_BLOCK_ADD_ERROR','ОШИБКА: Не удалось добавить блок %s в БД! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Ошибка БД: %s ');
define('_MD_AM_BLOCK_CREATED','Блок %s создан ');
define('_MD_AM_BLOCK_DELETE','Блок %s удален. ');
define('_MD_AM_BLOCK_DELETE_DATA','Шаблон блока %s удален из БД. ');
define('_MD_AM_BLOCK_DELETE_ERROR','ОШИБКА: Не удалось удалить блок %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','ОШИБКА: Не удается удалить шаблон блока %s из БД');
define('_MD_AM_BLOCK_DEPRECATED','Шаблон блока %s используется ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','ОШИБКА: Не удается удалить используемый шаблон блока.  ');
define('_MD_AM_BLOCK_UPDATE','Блок %s обновлен. ');

/* Configs */
define('_MD_AM_GONFIG_ID',' ID конфигурации: %s');
define('_MD_AM_MODULE_DATA_ADD','Добавление конфигурации модуля...');
define('_MD_AM_MODULE_DATA_DELETE','Удаление опций конфигурации модуля...');
define('_MD_AM_MODULE_DATA_UPDATE','Обновление данных модуля.');

define('_MD_AM_CONFIG_ADD',' Добавлены опции конфигурации:');
define('_MD_AM_CONFIG_DATA_ADD',' Конфигурация %s добавлена в Базу Данных');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ОШИБКА: Не удалось добавить конфигурацию %s в БД. ');
define('_MD_AM_GONFIG_DATA_DELETE','Данные конфигурации удалены из БД. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ОШИБКА: Не удалось удалить конфигурационные данные из базы данных');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Настройка прав доступа....');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ОШИБКА: Не удается удалить права доступа ');
define('_MD_AM_GROUP_PERMS_DELETED','Права доступа удалены ');

define('_MD_AM_ACCESS_ADMIN_ADD','Добавлены права доступа Администратора для группы ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ОШИБКА: Не удалось добавить права доступа Администратора для группы ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Добавлены права доступа Пользователя для группы ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ОШИБКА: Не удалось добавить права доступа Пользователя для группы ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Не удалось выполнить %s');
define('_MD_AM_FAILED_SUCESS','%s выполнено успешно.');

define('_MD_AM_DELETE_ERROR','ОШИБКА: Не удается удалить %s');
define('_MD_AM_UPDATE_ERROR','ОШИБКА: Не удается обновить %s');
define('_MD_AM_DELETE_MOD_TABLES','Удаление таблиц модуля....');

define('_MD_AM_COMMENTS_DELETE','Удаление комментариев....');
define('_MD_AM_COMMENTS_DELETE_ERROR','ОШИБКА: Не удается удалить комментарии');
define('_MD_AM_COMMENTS_DELETED','Комментарии удалены');

define('_MD_AM_NOTIFICATIONS_DELETE','Удаление оповещений....');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ОШИБКА: Не удается удалить оповещения');
define('_MD_AM_NOTIFICATIONS_DELETED','Оповещения удалены');

define('_MD_AM_TABLE_DROPPED','Таблица %s удалена!');
define('_MD_AM_TABLE_DROPPED_ERROR','ОШИБКА: Не удается удалить таблицу %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ОШИБКА: Не разрешено удалять таблицу %s !');
?>