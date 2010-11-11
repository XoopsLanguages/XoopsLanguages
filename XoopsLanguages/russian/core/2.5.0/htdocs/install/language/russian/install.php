<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 5478 2010-10-10 20:55:48Z forxoops $
 */

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2010-10-18 andrey3761

define( "SHOW_HIDE_HELP", "Показать/Скрыть текстовые подсказки" );

// License
define('LICENSE_NOT_WRITEABLE', 'Лицензия %s . <br/><font style="colour:#ff0000">Установите файлу ../include/license.php права на запись.</font>');
define('LICENSE_IS_WRITEABLE', 'Лицензия %s');

// Configuration check page
define( "SERVER_API", "Сервер API" );
define( "PHP_EXTENSION", "Расширение %s " );
define( "CHAR_ENCODING", "кодировки символов" );
define( "XML_PARSING", "XML парсинга" );
define( "REQUIREMENTS", "Основные" );
define( "_PHP_VERSION", "Версия PHP" );
define( "RECOMMENDED_SETTINGS", "Рекомендуемые установки" );
define( "RECOMMENDED_EXTENSIONS", "Рекомендуемые расширения" );
define( "SETTING_NAME", "Имя установки" );
define( "RECOMMENDED", "Рекомендуется" );
define( "CURRENT", "Текущие" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Эти расширения не требуются для нормального использования, но могут оказаться необходимыми для некоторых специфических особенностей (например, сайт на нескольких языках или поддержка RSS). Таким образом рекомендуется, чтобы они были установлены." );
define( "NONE", "Нет" );
define( "SUCCESS", "Есть!" );
define( "WARNING", "Предупреждение" );
define( "FAILED", "Неудача" );



// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "Мастер установки XOOPS" );

define( "LANGUAGE_SELECTION", "Выбор языка" );
define( "LANGUAGE_SELECTION_TITLE", "Выберите язык, который будет использоваться в процессе установки");        // L128
define( "INTRODUCTION", "Введение" );
define( "INTRODUCTION_TITLE", "Добро пожаловать в мастер установки XOOPS 2.3" );        // L0
define( "CONFIGURATION_CHECK", "Проверка конфигурации" );
define( "CONFIGURATION_CHECK_TITLE", "Проверка конфигурации сервера" );
define( "PATHS_SETTINGS", "Пути" );
define( "PATHS_SETTINGS_TITLE", "Установка путей к директориям" );
define( "DATABASE_CONNECTION", "Подключение к БД" );
define( "DATABASE_CONNECTION_TITLE", "Подключение к Базе Данных" );
define( "DATABASE_CONFIG", "Конфигурация БД" );
define( "DATABASE_CONFIG_TITLE", "Конфигурация Базы Данных" );
define( "CONFIG_SAVE", "Сохранение" );
define( "CONFIG_SAVE_TITLE", "Сохранение системной конфигурации" );
define( "TABLES_CREATION", "Создание таблиц" );
define( "TABLES_CREATION_TITLE", "Создание таблиц Базы Данных" );
define( "INITIAL_SETTINGS", "Установки Администратора" );
define( "INITIAL_SETTINGS_TITLE", "Введите данные Администратора" );
define( "DATA_INSERTION", "Сохранение Данных" );
define( "DATA_INSERTION_TITLE", "Сохранение ваших настроек в Базу Данных" );
define( "WELCOME", "Завершение" );
define( "WELCOME_TITLE", "Добро пожаловать на Ваш XOOPS сайт!" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "Абсолютные пути XOOPS" );
define( "XOOPS_URLS", "Web путь(URL)" );

define( "XOOPS_ROOT_PATH_LABEL", "Корень XOOPS" );
define( "XOOPS_ROOT_PATH_HELP", "Абсолютный путь к корневой директории XOOPS БЕЗ завершающего слеша" );

define( "XOOPS_LIB_PATH_LABEL", "Путь к директории XOOPS Библиотек" );
define( "XOOPS_LIB_PATH_HELP", "Абсолютный путь к директории  XOOPS Библиотек БЕЗ завершающего слеша. Перенесите эту папку из директории " . XOOPS_ROOT_PATH_LABEL . ", чтобы сделать её безопасной.");
define( "XOOPS_DATA_PATH_LABEL", "Путь к директории XOOPS Данных" );
define( "XOOPS_DATA_PATH_HELP", "Абсолютный путь к директории XOOPS Данных (с правами записи) БЕЗ завершающего слеша. Перенесите эту папку из директории " . XOOPS_ROOT_PATH_LABEL . ", чтобы сделать её безопасной." );

define( "XOOPS_URL_LABEL", "Адрес XOOPS (URL)" ); // L56
define( "XOOPS_URL_HELP", "Адрес корневой директории XOOPS БЕЗ завершающего слэша" ); // L58

define( "LEGEND_CONNECTION", "Сервер подключен" );
define( "LEGEND_DATABASE", "База данных" ); // L51

define( "DB_HOST_LABEL", "Имя хоста" );    // L27
define( "DB_HOST_HELP",  "Имя хоста сервера базы данных. Если Вы не уверены, то оставьте значение 'localhost', которое подходит в большинстве случаев."); // L67
define( "DB_USER_LABEL", "Пользователь базы данных" );    // L28
define( "DB_USER_HELP",  "Имя учетной записи пользователя на сервере базы данных"); // L65
define( "DB_PASS_LABEL", "Пароль базы данных" );    // L52
define( "DB_PASS_HELP",  "Пароль учетной записи пользователя базы данных"); // L68
define( "DB_NAME_LABEL", "Имя базы данных" );    // L29
define( "DB_NAME_HELP",  "Имя базы данных на сервере. Мастер установки попытается создать базу данных если она не существует"); // L64
define( "DB_CHARSET_LABEL", "Кодировка Базы Данных" );
define( "DB_CHARSET_HELP",  "MySQL включает в себя набор символов поддержки, которая позволяет хранить данные, используя различные наборы символов.");
define( "DB_COLLATION_LABEL", "Сопоставление Базы Данных" );
define( "DB_COLLATION_HELP",  "Сопоставление-набор правил для сравнения символов.");
define( "DB_PREFIX_LABEL", "Префикс таблиц" );    // L30
define( "DB_PREFIX_HELP",  "Этот префикс будет добавлен ко всем новым создаваемым таблицам для исключения конфликта имен в базе данных. Если Вы не уверены, то оставьте значение по умолчанию 'xoops'"); // L63
define( "DB_PCONNECT_LABEL", "Использовать устойчивое соединение?" );    // L54
define( "DB_PCONNECT_HELP",  "По умолчанию 'НЕТ'. Выберите 'НЕТ' если Вы не уверены."); // L69
define( "DB_DATABASE_LABEL", "База данных" );

define( "LEGEND_ADMIN_ACCOUNT", "Аккаунт Администратора" );
define( "ADMIN_LOGIN_LABEL", "Имя администратора" ); // L37
define( "ADMIN_EMAIL_LABEL", "E-mail администратора" ); // L38
define( "ADMIN_PASS_LABEL", "Пароль администратора" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Подтверждение пароля" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Вернутся" ); // L42
define( "BUTTON_NEXT", "Далее" ); // L47

// Messages
define( "XOOPS_FOUND", "Ядро %s найдено" );
define( "CHECKING_PERMISSIONS", "Проверка прав доступа к файлам и каталогам...." ); // L82
define( "IS_NOT_WRITABLE", " %s не имеет прав для записи." ); // L83
define( "IS_WRITABLE", " %s имеет права для записи." ); // L84

define( "XOOPS_PATH_FOUND", "Путь найден." );

define( "READY_CREATE_TABLES", "XOOPS таблицы не были обнаружены.<br />Программа установки  готова создать таблицы.<br />Нажмите <em>Далее</em> для продолжения." );
define( "XOOPS_TABLES_FOUND", "Таблицы для XOOPS уже существуют в Вашей базе данных.<br />Нажмите <em>Далее</em> для перехода к следующему шагу." ); // L131
define( "XOOPS_TABLES_CREATED", "Системные таблицы XOOPS были созданы.<br />Нажмите <em>Далее</em> для перехода к следующему шагу." );
define( "READY_INSERT_DATA", "Программа установки готова ввести исходные данные в вашу базу данных." );
define( "READY_SAVE_MAINFILE", "Программа установки готова сохранить указанные параметры в файл <em>mainfile.php</em>.<br />Нажмите <em>Далее</em> для продолжения." );
define( "SAVED_MAINFILE", "Запись данных в файл mainfile.php" );
define( "SAVED_MAINFILE_MSG", "Мастер установки сохранил настройки в файлы <em>mainfile.php</em> и <em>secure.php</em>. Нажмите <em>Далее</em> для перехода к следующему шагу." );
define( "DATA_ALREADY_INSERTED", "XOOPS данные записаны в базу данных.<br />Нажмите <em>Далее</em> для перехода к следующему шагу." );
define( "DATA_INSERTED", "	Первоначальные данные были включены в базу данных.<br />Нажмите <em>Далее</em> для перехода к следующему шагу." );


// %s is database name
define( "DATABASE_CREATED", "База данных %s создана!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Не могу создать таблицу %s." ); // L118
define( "TABLE_CREATED", "Таблица %s создана." ); // L45
define( "ROWS_INSERTED", "%d записей занесено в таблицу %s." ); // L119
define( "ROWS_FAILED", "Ошибка занесения %d записей в таблицу %s." ); // L120
define( "TABLE_ALTERED", "Таблица %s обновлена."); // L133
define( "TABLE_NOT_ALTERED", "Ошибка обновления таблицы %s."); // L134
define( "TABLE_DROPPED", "Таблица %s удалена."); // L163
define( "TABLE_NOT_DROPPED", "Ошибка удаления таблицы %s."); // L164

//сообщения об  ошибках
define( "ERR_COULD_NOT_ACCESS", "Не удалось получить доступ к указанной папке. Пожалуйста, убедитесь, что она существует." );
define( "ERR_NO_XOOPS_FOUND", "	Нет ядра XOOPS для установки  в указанной папке." );
define( "ERR_INVALID_EMAIL", "Неверный e-mail" ); // L73
define( "ERR_REQUIRED", "Пожалуйста вернитесь назад и заполните все требуемые поля." ); // L41
define( "ERR_PASSWORD_MATCH", "Пароли не совпадают" );
define( "ERR_NEED_WRITE_ACCESS", "На сервере должна быть предоставлена возможность записи на следующие файлы и директории<br />(<em>chmod 777 имя_директории</em> на UNIX/LINUX серверах)<br />Если права не выставлены, пожалуйста сделайте это вручную и проверьте привилегии." );
define( "ERR_NO_DATABASE", "Не могу создать базу данных. Обратитесь к администратору сервера для уточнения." ); // L31
define( "ERR_NO_DBCONNECTION", "Не могу подключиться к серверу базы данных." ); // L106
define( "ERR_WRITING_CONSTANT", "Ошибка записи константы %s в %s." ); // L122

define( "ERR_COPY_MAINFILE", "Не удается скопировать содержимое в mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Не удается записать данные в mainfile.php. Пожалуйста, проверьте права к файлу и повторите еще раз.");
define( "ERR_READ_MAINFILE", "Не удается открыть mainfile.php для чтения" );

define( "ERR_INVALID_DBCHARSET", "Кодировка '%s' не поддерживается." );
define( "ERR_INVALID_DBCOLLATION", "Сопоставление '%s' не поддерживается." );
define( "ERR_CHARSET_NOT_SET", "Кодировка по умолчанию не подходит для базы данных XOOPS." );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "Поддержка");

define( "LOGIN", "Вход");
define( "LOGIN_TITLE", "Вход");
define( "USER_LOGIN", "Вход администратора" );
define( "USERNAME", "Логин :");
define( "PASSWORD", "Пароль :");

define( "ICONV_CONVERSION", "Character set conversion");
define( "ZLIB_COMPRESSION", "Zlib сжатия");
define( "IMAGE_FUNCTIONS", "Функции изображения");
define( "IMAGE_METAS", "Мета данных изображения (exif)");

define( "ADMIN_EXIST", "Учетная запись администратора уже существует.<br />Нажмите <strong>дальше</strong> чтобы приступить к следующему шагу.");

define( "CONFIG_SITE", "Конфигурация сайта" );
define( "CONFIG_SITE_TITLE", "Конфигурация сайта" );
define( "MODULES", "Установка модулей" );
define( "MODULES_TITLE", "Установка модулей" );
define( "THEME", "Выбор темы" );
define( "THEME_TITLE", "Выберите тему по умолчанию" );

define( "INSTALLED_MODULES", "Следующие модули были установлены.<br />Нажмите <strong>дальше</strong> чтобы приступить к следующему шагу.");
define( "NO_MODULES_FOUND", "Модули не найдены.<br />Нажмите <strong>дальше</strong> чтобы приступить к следующему шагу.");
define( "NO_INSTALLED_MODULES", "Модули не установлены.<br />Нажмите <strong>дальше</strong> чтобы приступить к следующему шагу.");

define( "THEME_NO_SCREENSHOT", "Скриншот не найден");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "Надёжность пароля: ");
define( "PASSWORD_DESC", "Пароль не введён");
define( "PASSWORD_GENERATOR", "Сгенерировать пароль");
define( "PASSWORD_GENERATE", "Генерация");
define( "PASSWORD_COPY", "Копировать");

define( "PASSWORD_VERY_WEAK", "Очень Слабый");
define( "PASSWORD_WEAK", "Слабый");
define( "PASSWORD_BETTER", "Хороший");
define( "PASSWORD_MEDIUM", "Средний ");
define( "PASSWORD_STRONG", "Сильный");
define( "PASSWORD_STRONGEST", "Сильнейший");

?>