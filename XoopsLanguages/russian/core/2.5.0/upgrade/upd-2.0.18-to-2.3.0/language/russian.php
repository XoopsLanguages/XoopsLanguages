<?php
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-16 andrey3761

define( "LEGEND_XOOPS_PATHS", "Абсолютный путь к XOOPS" );
define( "LEGEND_DATABASE", "Установка кодировки БД" );

define( "XOOPS_LIB_PATH_LABEL", "Директория XOOPS библиотек" );
define( "XOOPS_LIB_PATH_HELP", "Абсолютный путь к каталогу XOOPS библиотек БЕЗ косой черты(слеша). Перенесите эту папку из директории " . XOOPS_ROOT_PATH . " чтобы сделать её безопасной(опционально)." );
define( "XOOPS_DATA_PATH_LABEL", "Директория XOOPS данных" );
define( "XOOPS_DATA_PATH_HELP", "Абсолютный путь к каталогу XOOPS данных БЕЗ косой черты(слеша). Установить права 777. Перенесите эту папку из директории " . XOOPS_ROOT_PATH . " чтобы сделать её безопасной(опционально)." );

define( "DB_COLLATION_LABEL", "Установки кодировок и сопоставления БД" );
define( "DB_COLLATION_HELP",  " MySQL 4.12 поддерживает изменение кодировки и сопоставления. Однако это более сложно чем ожидаемо, так что не производите изменение, если Вы не уверены относительно своего выбора.");
define( "DB_COLLATION_NOCHANGE",  "Не изменять");

define( "XOOPS_PATH_FOUND", "Путь найден." );
define( "ERR_COULD_NOT_ACCESS", "Не удалось получить доступ к указанной папке. Пожалуйста убедитесь, что она существует и доступна на сервере." );
define( "CHECKING_PERMISSIONS", "Проверка файлов и каталогов ..." );
define( "ERR_NEED_WRITE_ACCESS", "На сервере должна быть предоставлена возможность записи на следующие файлы и папки<br />(т.е. <em>chmod 777 directory_name</em> в UNIX/LINUX серверах)" );
define( "IS_NOT_WRITABLE", "%s запись НЕ возможна!." );
define( "IS_WRITABLE", "%s запись возможна." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Ошибка записи содержимого в файл mainfile.php. Записать данные в mainfile.php вручную." );

?>