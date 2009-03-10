<?php

// mymenu



// Appended by Xoops Language Checker -GIJOE- in 2008-12-03 11:47:20
define('_AM_ADV_TRUSTPATHPUBLIC','If you can look an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.');
define('_AM_ADV_TRUSTPATHPUBLICLINK','Check php files inside TRUST_PATH are private (it must be 404,403 or 500 error');

// Appended by Xoops Language Checker -GIJOE- in 2007-10-18 05:36:25
define('_AM_LABEL_COMPACTLOG','Compact log');
define('_AM_BUTTON_COMPACTLOG','Compact it!');
define('_AM_JS_COMPACTLOGCONFIRM','Duplicated (IP,Type) records will be removed');
define('_AM_LABEL_REMOVEALL','Remove all records');
define('_AM_BUTTON_REMOVEALL','Remove all!');
define('_AM_JS_REMOVEALLCONFIRM','All logs are removed absolutely. Are you really OK?');

// Appended by Xoops Language Checker -GIJOE- in 2007-07-30 05:37:52
define('_AM_FMT_CONFIGSNOTWRITABLE','Turn the configs directory writable: %s');

define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Прав?доступ?);
define('_MD_A_MYMENU_MYPREFERENCES','Настройк?);

// index.php
define("_AM_TH_DATETIME","Время");
define("_AM_TH_USER","Пользователь");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","User-Agent");
define("_AM_TH_TYPE","Ти?);
define("_AM_TH_DESCRIPTION","Описание");

define( "_AM_TH_BADIPS" , "Запрещенны?IP" ) ;

define( "_AM_TH_GROUP1IPS" , 'Разрешенны?IP для  Group=1 (Администрато?<br /><br /><span style="font-weight:normal;">Ввести разрешенны?IP по одному на строку.<br />192.168. means 192.168.*<br />незаполнение этог?окна означает, чт?вс?IP имею?доступ</span>' ) ;

//define( "_AM_TH_ENABLEIPBANS" , "Включить механизм бано?по IP?" ) ;
define( "_AM_LABEL_REMOVE" , "Удалит?отмечены?записи:" ) ;
define( "_AM_BUTTON_REMOVE" , "Удалит? ) ;
define( "_AM_JS_REMOVECONFIRM" , "Удаляем?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Файл?для IP были обновлен? ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Файл для плохог?IP не може?быть открыт" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "файл для доступ?group=1 не може?быть открыт" ) ;
define( "_AM_MSG_PRUPDATED" , "Настройк?успешн?обновлен?" ) ;
define( "_AM_MSG_REMOVED" , "Записи удален? ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Управление префиксо?таблиц" ) ;
define( "_AM_MSG_DBUPDATED" , "База данных успешн?обновлен?" ) ;
define( "_AM_CONFIRM_DELETE" , "Вс?данные буду?уничтожены. Продолжать?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Если вы хотите изменить префик?таблиц, отредактируйте ва?конфигурационный файл %s/mainfile.php вручну?внеся изменения ?строку указаную ниже.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Тест НЕ пройде?);

define("_AM_ADV_REGISTERGLOBALS","Текущая конфигурац? позволяет проводит?целы?спектр атак ?замещением значений переменных.<br />Если вы имеете доступ ?файл?.htaccess создайте ег?ил?отредактируйте этот файл добави??нему строку указаную ниже.");
define("_AM_ADV_ALLOWURLFOPEN","Текущая конфигурац? позволяет атакующи?выполнять произвольные скрипт?на удаленны?машина?<br />Только администрато?сервер?може?изменить эт?опци?<br />Если вы являетес?администраторо?отредактируйте файл php.ini ил?httpd.conf.<br /><b>Пример для httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Ил?попросит?об этом Вашего администратора.");
define("_AM_ADV_USETRANSSID","ID ваше?сессии отображает? ?тега?ссылок ?др.<br />
	Во избежани?использования ID ваше?сессии третьими лицами добавьте следующу?строку ?ва?файл .htaccess расположеный ?каталоге: 'XOOPS_ROOT_PATH<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Текуще?значение префикса таблиц БД позволяет проводит?клас??? 'SQL Injecting' атак.<br />Не забудьте включить 'Принудительную очистк?переменных *' ?конфигурационном раздел?этог?моду?.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Перейт??раздел?управлен? префиксами БД.");
define("_AM_ADV_MAINUNPATCHED","Вы должны отредактироват?Ва?файл mainfile.php та? ка?эт?описан??README.");
//define("_AM_ADV_RESCUEPASSWORD","Пароль для снятия бана ?вашего IP");
//define("_AM_ADV_RESCUEPASSWORDUNSET","Не установлен");
//define("_AM_ADV_RESCUEPASSWORDSHORT","Слишко?короткий (минимальная длин?6 символов)");

define("_AM_ADV_SUBTITLECHECK","Проверка работоспособност?);
//define("_AM_ADV_AT1STSETPASSWORD","Установите ва?резервны?пароль пере?проверко?");
define("_AM_ADV_CHECKCONTAMI","Порч?переменных");
define("_AM_ADV_CHECKISOCOM","Изолированые комментари?);

// Localization by ezsky
define("_AM_EZ_PREFIX", "Prefix");
define("_AM_EZ_TABLES", "Tables");
define("_AM_EZ_UPDATED", "Updated");
define("_AM_EZ_COPY", "Copy");
define("_AM_EZ_ACTIONS", "Actions");
define("_AM_EZ_BACKUP", "Backup");
define("_AM_EZ_DELETE", "Delete");

?>
