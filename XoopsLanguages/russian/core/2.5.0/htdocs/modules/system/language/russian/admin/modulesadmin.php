<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ru
 * _CHARSET     UTF-8
 * Translator   2010-11-11 andrey3761
 * @version     $Id: modulesadmin.php 5580 2010-10-21 19:38:48Z forxoops $
 */

// Navigation
define( "_AM_SYSTEM_MODULES_ADMIN", "Администрирование модулей" );
define( "_AM_SYSTEM_MODULES_LIST", "Список модулей");
define( "_AM_SYSTEM_MODULES_TOINSTALL", "Установка модулей" );
define( "_AM_SYSTEM_MODULES_VALIDATE", "Подтверждение изменений" );
define( "_AM_SYSTEM_MODULES_SUBMITRES", "Изменения произведены" );

// Messages
define( "_AM_SYSTEM_MODULES_RUSUREINS", "Нажмите кнопку для установки этого модуля" );
define( "_AM_SYSTEM_MODULES_RUSUREUNINS", "Вы действительно хотите удалить этот модуль?" );
define( "_AM_SYSTEM_MODULES_RUSUREUPD", "Нажмите кнопку для обновления этого модуля" );
define( "_AM_SYSTEM_MODULES_BTOMADMIN", "Назад на страницу администрирования модулей" );
define( "_AM_SYSTEM_MODULES_INSTALLING", "Установить ");
define( "_AM_SYSTEM_MODULES_UNINSTAL", "Удалить " );
define( "_AM_SYSTEM_MODULES_DEACTIVATE", "Отключить ");
define( "_AM_SYSTEM_MODULES_ACTIVATE", "Включить ");
define( "_AM_SYSTEM_MODULES_UPDATING", "Обновить ");

// Main
define( "_AM_SYSTEM_MODULES_INSTALL", "Установить" );
define( "_AM_SYSTEM_MODULES_UNINSTALL", "Удалить" );
define( "_AM_SYSTEM_MODULES_UPDATE", "Обновить" );
define( "_AM_SYSTEM_MODULES_VIEWLARGE", "Показать иконки" );
define( "_AM_SYSTEM_MODULES_VIEWLINE", "Только названия" );

// %s represents module name
define( "_AM_SYSTEM_MODULES_FAILINS", "Невозможно установить %s." );
define( "_AM_SYSTEM_MODULES_FAILACT", "Невозможно включить %s." );
define( "_AM_SYSTEM_MODULES_FAILDEACT", "Невозможно выключить %s." );
define( "_AM_SYSTEM_MODULES_FAILUPD", "Невозможно обновить %s." );
define( "_AM_SYSTEM_MODULES_FAILUNINS", "Невозможно удалить %s." );
define( "_AM_SYSTEM_MODULES_FAILORDER", "Невозможно упорядочить %s." );
define( "_AM_SYSTEM_MODULES_FAILWRITE", "Невозможно записать в основное меню." );
define( "_AM_SYSTEM_MODULES_ALEXISTS", "Модуль %s уже существует." );
define( "_AM_SYSTEM_MODULES_ERRORSC", "Ошибка(и):" );
define( "_AM_SYSTEM_MODULES_OKINS", "Модуль %s установлен успешно." );
define( "_AM_SYSTEM_MODULES_OKACT", "Модуль %s включён успешно." );
define( "_AM_SYSTEM_MODULES_OKDEACT", "Модуль %s выключен успешно." );
define( "_AM_SYSTEM_MODULES_OKUPD", "Модуль %s обновлён успешно." );
define( "_AM_SYSTEM_MODULES_OKUNINS", "Модуль %s удалён успешно." );
define( "_AM_SYSTEM_MODULES_OKORDER", "Модуль %s изменён успешно." );

define( "_AM_SYSTEM_MODULES_MODULE", "Модуль" );
define( "_AM_SYSTEM_MODULES_VERSION", "Версия" );
define( "_AM_SYSTEM_MODULES_LASTUP", "Последнее обновление" );
define( "_AM_SYSTEM_MODULES_DEACTIVATED", "Отключён" );
define( "_AM_SYSTEM_MODULES_ACTION", "Действие" );
define( "_AM_SYSTEM_MODULES_MENU", "Меню" );
define( "_AM_SYSTEM_MODULES_HIDE", "Скрыть" );
define( "_AM_SYSTEM_MODULES_SHOW", "Показать" );

define( "_AM_SYSTEM_MODULES_DUPEN", "Дублирование записей в таблице модулей!" );
define( "_AM_SYSTEM_MODULES_DEACTED", "Выбранный модуль был выключен. Теперь Вы его можете безопасно удалить." );
define( "_AM_SYSTEM_MODULES_ACTED", "Выбранный модуль был включён!" );
define( "_AM_SYSTEM_MODULES_UPDTED", "Выбранный модуль был обновлён!" );
define( "_AM_SYSTEM_MODULES_SYSNO", "Модуль системы не может быть отключён." );
define( "_AM_SYSTEM_MODULES_STRTNO", "Этот модуль установлен модулем домашней страницы. Пожалуйста измените модуль домашней страницы через меню конфигурации сайта." );

define( "_AM_SYSTEM_MODULES_ORDER", "Вес" );
define( "_AM_SYSTEM_MODULES_ORDER0", "(0 = скрыть)" );
define( "_AM_SYSTEM_MODULES_ACTIVE", "Включён" );
define( "_AM_SYSTEM_MODULES_INACTIVE", "Выключен" );
define( "_AM_SYSTEM_MODULES_NOTINSTALLED", "Не установлен" );
define( "_AM_SYSTEM_MODULES_NOCHANGE", "Без изменений" );
define( "_AM_SYSTEM_MODULES_SUBMIT", "Отправить" );
define( "_AM_SYSTEM_MODULES_CANCEL", "Отмена" );
define( "_AM_SYSTEM_MODULES_DBUPDATE", _AM_SYSTEM_DBUPDATED );
define( "_AM_SYSTEM_MODULES_LISTUPBLKS", "Перечисленные блоки были обновлены.<br />Содержимое выбранных блоков (параметры или шаблон) может быть перезаписано.<br />");
define( "_AM_SYSTEM_MODULES_NEWBLKS", "Новые блоки");
define( "_AM_SYSTEM_MODULES_DEPREBLKS", "Конфликтующие блоки");

// Logger
define( "_AM_SYSTEM_MODULES_TABLE_RESERVED", "%s зарезервированная таблица!");
define( "_AM_SYSTEM_MODULES_CREATE_TABLES", "Создание таблиц...");
define( "_AM_SYSTEM_MODULES_TABLE_CREATED", "Таблица %s создана");
define( "_AM_SYSTEM_MODULES_INSERT_DATA", "&nbsp;&nbsp; Данные добавлены в таблицу %s");
define( "_AM_SYSTEM_MODULES_INSERT_DATA_FAILD", "Не удалось добавить %s в базу данных.");
define( "_AM_SYSTEM_MODULES_INSERT_DATA_DONE", "Данные модуля добавлены успешно.");
define( "_AM_SYSTEM_MODULES_MODULEID", " ID модуля: %s");
define( "_AM_SYSTEM_MODULES_SQL_FOUND", "SQL-файл, находящийся по адресу %s ");
define( "_AM_SYSTEM_MODULES_SQL_NOT_FOUND", "SQL-файл не найден по адресу %s");
define( "_AM_SYSTEM_MODULES_SQL_NOT_CREATE", "Ошибка: невозможно создать %s ");
define( "_AM_SYSTEM_MODULES_SQL_NOT_VALID", "%s не является действительным SQL!");
define( "_AM_SYSTEM_MODULES_GROUP_ID", " ID группы: %s ");
define( "_AM_SYSTEM_MODULES_NAME", " Название: ");
define( "_AM_SYSTEM_MODULES_VALUE", " Значение: ");

// Templates
define( "_AM_SYSTEM_MODULES_TEMPLATES_ADD", "Добавление шаблонов...");
define( "_AM_SYSTEM_MODULES_TEMPLATES_DELETE", "Удаление шаблонов...");
define( "_AM_SYSTEM_MODULES_TEMPLATES_UPDATE", "Обновление шаблонов...");
define( "_AM_SYSTEM_MODULES_TEMPLATE_ID", "ID шаблона: %s ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA", "Шаблон %s добавлен в базу данных");
define( "_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR", "ОШИБКА: Не удалось вставить шаблон %s в базу данных.");
define( "_AM_SYSTEM_MODULES_TEMPLATE_COMPILED", "Шаблон %s скомпилирован ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED", "ОШИБКА: Не удалось скомпилировать шаблон %s ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA", "Шаблон %s удален из базы данных. ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD", "ОШИБКА: Невозможно удалить шаблон %s из базы данных. ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA", "Шаблон %s внесен а базу данных. ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE", "Шаблон %s перекомпилирован");
define( "_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD", "ОШИБКА: Не удалось перекомпилировать шаблон %s");
define( "_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR", "ОШИБКА: Невозможно перекомпилировать шаблон %s ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR", "ОШИБКА: Невозможно удалить старый шаблон %s. Остановите обновление этого файла. ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_UPDATE", "Шаблон %s обновлён. ");
define( "_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR", "ОШИБКА: Невозможно обновить шаблон %s . ");

// Blocks
define( "_AM_SYSTEM_MODULES_BLOCKS_ADD", "Добавление блоков...");
define( "_AM_SYSTEM_MODULES_BLOCKS_DELETE", "Удаление блоков...");
define( "_AM_SYSTEM_MODULES_BLOCKS_REBUILD", "Восстановление блоков...");
define( "_AM_SYSTEM_MODULES_BLOCK_ID", " ID блока: %s ");
define( "_AM_SYSTEM_MODULES_BLOCK_ACCESS", "Права на доступ к блоку добавлены");
define( "_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR", "ОШИБКА: Не удалось добавить права на доступ к блоку");
define( "_AM_SYSTEM_MODULES_BLOCK_ADD", "Блок %s добавлен ");
define( "_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR", "ОШИБКА: Не удалось добавить блок %s в БД! ");
define( "_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE", "Ошибка базы данных: %s ");
define( "_AM_SYSTEM_MODULES_BLOCK_CREATED", "Блок %s создан ");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE", "Блок %s удалён. ");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA", "Шаблон блока %s удален из БД. ");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR", "ОШИБКА: Не удалось удалить блок %s");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR", "ОШИБКА: Не удается удалить шаблон блока %s из базы данных");
define( "_AM_SYSTEM_MODULES_BLOCK_DEPRECATED", "Шаблон блока %s используется ");
define( "_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR", "ОШИБКА: Не удается удалить используемый шаблон блока.  ");
define( "_AM_SYSTEM_MODULES_BLOCK_UPDATE", "Блок %s обновлён. ");

// Configs
define( "_AM_SYSTEM_MODULES_GONFIG_ID", "ID конфигурации: %s");
define( "_AM_SYSTEM_MODULES_MODULE_DATA_ADD", "Добавление конфигурации модуля...");
define( "_AM_SYSTEM_MODULES_MODULE_DATA_DELETE", "Удаление опций конфигурации модуля...");
define( "_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE", "Обновление данных модуля.");
define( "_AM_SYSTEM_MODULES_CONFIG_ADD", " Добавлены опции конфигурации");
define( "_AM_SYSTEM_MODULES_CONFIG_DATA_ADD", " Конфигурация %s добавлена в базу данных");
define( "_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR", " ОШИБКА: Не удалось добавить конфигурацию %s в базу данных. ");
define( "_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE", "Данные конфигурации удалены из базы данных. ");
define( "_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR", "ОШИБКА: Не удалось удалить конфигурационные данные из базы данных");

// Access
define( "_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD", "Настройка прав доступа...");
define( "_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR", "ОШИБКА: Не удаётся удалить права доступа ");
define( "_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED", "Права доступа удалены ");
define( "_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD", "Добавлены права доступа Администратора для группы ID %s");
define( "_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR", "ОШИБКА: Не удалось добавить права доступа Администратора для группы ID %s");
define( "_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR", "Добавлены права доступа Пользователя для группы ID: %s");
define( "_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR", "ОШИБКА: Не удалось добавить права доступа Пользователя для группы ID: %s");

// execute module specific install script if any
define( "_AM_SYSTEM_MODULES_FAILED_EXECUTE", "Не удалось выполнить %s");
define( "_AM_SYSTEM_MODULES_FAILED_SUCESS", "%s выполнено успешно.");
define( "_AM_SYSTEM_MODULES_DELETE_ERROR", "ОШИБКА: Не удаётся удалить %s");
define( "_AM_SYSTEM_MODULES_UPDATE_ERROR", "ОШИБКА: Не удаётся обновить %s");
define( "_AM_SYSTEM_MODULES_DELETE_MOD_TABLES", "Удаление таблиц модуля...");
define( "_AM_SYSTEM_MODULES_COMMENTS_DELETE", "Удаление комментариев...");
define( "_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR", "ОШИБКА: Не удаётся удалить комментарии");
define( "_AM_SYSTEM_MODULES_COMMENTS_DELETED", "Комментарии удалены");
define( "_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE", "Удаление оповещений...");
define( "_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR", "ОШИБКА: Не удаётся удалить оповещения");
define( "_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED", "Оповещения удалены");
define( "_AM_SYSTEM_MODULES_TABLE_DROPPED", "Таблица %s удалена!");
define( "_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR", "ОШИБКА: Не удаётся удалить таблицу %s");
define( "_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "ОШИБКА: Не разрешено удалять таблицу %s !");

// Tips
define( "_AM_SYSTEM_MODULES_TIPS",
"<ul>
<li>Если Вы устанавливаете новый модуль, не забудьте после установки в настройках модуля установить права доступа к модулю и блокам!</li>
<li>Для того, чтобы модуль не отображался в Главном меню - установте вес модуля равным нулю</li>
<li>Воизбежание нарушения безопасности НАСТОЯТЕЛЬНО рекомендуется удалить файлы неиспользуемых модулей с сервера</li>
<li>Чтобы изменить порядок отображения модулей в главном меню просто перетащите модули в нужное место.</li>
</ul>");
define( "_AM_SYSTEM_MODULES_CONFIRM_TIPS",
"<ul>
<li>Проверьте и подтвердите все изменения</li>
</ul>");

?>