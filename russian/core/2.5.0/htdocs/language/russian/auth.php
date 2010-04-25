<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Auth Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: auth.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: andrey3761

define('_AUTH_MSG_AUTH_METHOD',"использовать %s метод аутентификации");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','Расширение PHP LDAP не загружено (проверьте свою конфигурацию PHP в файле php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Невозможно соединиться с сервером");
define('_AUTH_LDAP_USER_NOT_FOUND',"Участник %s не найден в директории сервера (%s) в %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Не удается прочитать введенное %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Извините, не было найдено ни какой соответствующей информации о пользователе в базе данных XOOPS для подключения: %s <br>" . "Пожалуйста проверьте ваши пользовательские данные или установите автоматическое положение");
define('_AUTH_LDAP_START_TLS_FAILED',"Ошибка открытия TLS соединения");

?>