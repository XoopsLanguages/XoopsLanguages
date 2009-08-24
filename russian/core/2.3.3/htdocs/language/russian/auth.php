<?php
// $Id: auth.php 2412 2008-11-14 21:12:13Z julionc $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-12 andrey3761

//%%%%%%		Файл auth.php 		%%%%%

define('_AUTH_MSG_AUTH_METHOD',"использовать %s метод аутентификации");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','Расширение PHP LDAP не загружено (проверьте свою конфигурацию PHP в файле php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Невозможно соединиться с сервером");
define('_AUTH_LDAP_USER_NOT_FOUND',"Участник %s не найден в директории сервера (%s) в %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Не удается прочитать введенное %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Извините, не было найдено ни какой соответствующей информации о пользователе в базе данных XOOPS для подключения: %s <br>" .
		"Пожалуйста проверьте ваши пользовательские данные или установите автоматическое положение");
define('_AUTH_LDAP_START_TLS_FAILED',"Ошибка открытия TLS соединения");
?>