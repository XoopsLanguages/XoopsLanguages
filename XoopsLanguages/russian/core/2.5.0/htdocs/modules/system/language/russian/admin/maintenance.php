<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ru
 * _CHARSET     UTF-8
 * Translator   2010-11-11 andrey3761
 * @version     $Id$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "Техническое обслуживание");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Все виды обслуживания");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Дамп");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Очистить таблицу с сессиями");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Обслуживание сессий : OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Обслуживание сессий : Error");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Очистить папку с кэшем");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Обслуживание кэша : OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Обслуживание кэша : Error");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Обслуживание таблиц");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Обслуживание таблиц : OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Обслуживание таблиц : Error");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","Оптимизация, Проверка, Востановление и Анализ ваших таблиц");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Обслуживание базы данных : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Обслуживание базы данных : Error");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Оптимизация таблиц(ы)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Проверка таблиц(ы)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Востановление таблиц(ы)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Анализ таблиц(ы)");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"АНАЛИЗ ТАБЛИЦ анализирует и сохраняет распределение ключей для таблицы. Во время проверки таблица блокируется с блокировкой на чтение.<br />
ПРОВЕРКА ТАБЛИЦ проверяет одну или несколько таблиц на наличие ошибок.<br />
ОПТИМИЗАЦИЯ ТАБЛИЦ убирает неиспользуемое пространство и дефрагментирует файлы таблицы.<br />
ВОСТАНОВЛЕНИЕ ТАБЛИЦ востанавливает возможно повреждённые таблицы.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Результат");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","Нет результата");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Задание очистки кэша");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Задание очистки таблицы сессий");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Задание базы данных");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","Не выбрано задание для обслуживания");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Таблицы");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Оптимизированно");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Проверенно"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Востановленно");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Проанализированно");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Дамп");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Выберите таблицы или модули");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Добавить команду DROP TABLE IF EXISTS 'tables' в дамп");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "или");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "и");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Вы должны выбрать таблицы или модули");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "Нет таблиц");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "Таблицы");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "Структуры");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "Количество записей");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "Файл создан");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "Результат");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "запись(ей)");

// Tips
define( "_AM_SYSTEM_MAINTENANCE_TIPS", 
"<ul>
<li>Вы можете сделать простое обслуживание системы XOOPS: очистить кэш и таблицу сессий, обслуживать таблицы базы данных</li>
</ul>" );

?>
