<?php
// $Id: admin.php, 2008-10-05  02:02:45Z West $
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Права доступа');
define('_MD_A_MYMENU_MYPREFERENCES','Настройки');

// index.php
define("_AM_TH_DATETIME","Время");
define("_AM_TH_USER","Пользователь");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","User-Agent");
define("_AM_TH_TYPE","Тип");
define("_AM_TH_DESCRIPTION","Описание");

define("_AM_TH_BADIPS" , 'Запрещенные IP<br /><br /><span style="font-weight:normal;">Введите запрещенные IP по одному на строку.<br />Незаполнение этого окна означает, что все IP имеют доступ</span>' ) ;

define("_AM_TH_GROUP1IPS" , 'Разрешенные IP для  Group=1 (Администратор)<br /><br /><span style="font-weight:normal;">Введите разрешенные IP по одному на строку.<br />192.168. равно 192.168.*<br />Незаполнение этого окна означает, что все IP имеют доступ</span>' ) ;

define('_AM_LABEL_COMPACTLOG','Удаление дублей записей  ');
define('_AM_BUTTON_COMPACTLOG','Удалить');
define('_AM_JS_COMPACTLOGCONFIRM','Дубликаты записей (IP,Тип) будут удалены');
define('_AM_LABEL_REMOVEALL','Удаление всех записей  ');
define('_AM_BUTTON_REMOVEALL','Удалить');
define('_AM_JS_REMOVEALLCONFIRM','Все записи будут удалены. Вы согласны?');
define("_AM_LABEL_REMOVE" , "Удалить отмеченные записи  " ) ;
define("_AM_BUTTON_REMOVE" , "Удалить" ) ;
define("_AM_JS_REMOVECONFIRM" , "Удаляем?" ) ;
define('_AM_MSG_IPFILESUPDATED' , 'Файл для записи "Запрещенных IP" обновлен' ) ;
define('_AM_MSG_BADIPSCANTOPEN' , 'Файл для записи "Запрещенных IP" не может быть открыт' ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "Файл для доступа group=1 не может быть открыт" ) ;
define("_AM_MSG_PRUPDATED" , "Настройки успешно обновлены!" ) ;
define("_AM_MSG_REMOVED" , "Записи удалены" ) ;
define('_AM_FMT_CONFIGSNOTWRITABLE','Установите права 777 для каталога %s');

// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "Управление префиксом таблиц" ) ;
define("_AM_MSG_DBUPDATED" , "База данных успешно обновлена!" ) ;
define("_AM_CONFIRM_DELETE" , "Все данные будут уничтожены. Продолжать?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "Если вы хотите изменить префикс таблиц, отредактируйте ваш конфигурационный файл %s/mainfile.php вручную внеся изменения в строку указанную ниже.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Тест НЕ пройден");

define("_AM_ADV_REGISTERGLOBALS","Текущая конфигурация позволяет проводить целый спектр атак с замещением значений переменных.<br />Если вы имеете доступ к файлу .htaccess создайте его или отредактируйте этот файл добавив к нему строку указанную ниже.");
define("_AM_ADV_ALLOWURLFOPEN","Текущая конфигурация позволяет атакующим выполнять произвольные скрипты на удаленных машинах.<br />Только администратор сервера может изменить эту опцию.<br />Если вы являетесь администратором отредактируйте файл php.ini или httpd.conf.<br /><b>Пример для httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Или попросите об этом Вашего администратора.");
define("_AM_ADV_USETRANSSID","ID вашей сессии отображается в тегах ссылок и др.<br />
	Во избежание использования ID вашей сессии третьими лицами добавьте следующую строку в ваш файл .htaccess расположенный в каталоге: 'XOOPS_ROOT_PATH<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Текущее значение префикса таблиц БД позволяет проводить класс т.н. 'SQL Injecting' атак.<br />Не забудьте включить 'Принудительную очистку переменных *' в конфигурационном разделе этого модуля.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Перейти к разделу управления префиксами БД.");
define("_AM_ADV_MAINUNPATCHED","Вы должны отредактировать Ваш файл mainfile.php так, как это описано в README.");

define("_AM_ADV_SUBTITLECHECK","Проверка работоспособности");
define("_AM_ADV_CHECKCONTAMI","Порча переменных");
define("_AM_ADV_CHECKISOCOM","Изолированные комментарии");

// Localization by ezsky
define("_AM_EZ_PREFIX","Префикс");
define("_AM_EZ_TABLES","Всего таблиц");
define("_AM_EZ_UPDATED","Последнее обновление");
define("_AM_EZ_COPY","Копировать Базу");
define("_AM_EZ_ACTIONS","Действие");
define("_AM_EZ_BACKUP","Бекап");
define("_AM_EZ_DELETE","Удалить");

?>
