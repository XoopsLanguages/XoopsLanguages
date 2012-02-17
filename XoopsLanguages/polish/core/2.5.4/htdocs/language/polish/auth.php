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

// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko

define('_AUTH_MSG_AUTH_METHOD', "Używasz %s jako metody uwierzytelniania");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD', "Rozszerzenie PHP LDAP nie zostało załadowane (sprawdź plik konfiguracyjny php.ini)");
define('_AUTH_LDAP_SERVER_NOT_FOUND', "Nie można połączyć się z serwerem");
define('_AUTH_LDAP_USER_NOT_FOUND', "Użytkownik %s nie został znaleziony na serwerze (%s) w %s");
define('_AUTH_LDAP_CANT_READ_ENTRY', "Nie można odczytać wpisu %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND', "Nie znaleziono w bazie danych serwisu informacji o użytkowniku dla połączenia : %s <br>" .
"Zweryfikuj dane użytkownika lub ustaw automatyczne załadowanie");
define('_AUTH_LDAP_START_TLS_FAILED', "Nie udało się nawiązać połączenia TLS");
?>