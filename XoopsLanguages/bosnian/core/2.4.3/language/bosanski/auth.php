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

// _LANGCODE: ba
// _CHARSET : ISO-8859-2
// Translator: Saba
define("_AUTH_MSG_AUTH_METHOD","Sa '%s' metodom prihvatanja");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP extanzija se ne loaduje (pogledaj PHP konfiguraciju podatka php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Nema kontakta sa serverom");
define('_AUTH_LDAP_USER_NOT_FOUND',"&#268;lana %s nema na serveru (%s) in %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Nemo&#382;e se u&#269;itati %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Na&#382;alost nema odgovaraju&#263;ih podataka o korisniku da bi se povezalo sa bazom podataka: %s <br>" .
		"Molimo te potvrdi svoje podatke ili koristi automatsko prepoznavanje");
define('_AUTH_LDAP_START_TLS_FAILED',"Neuspje&scaron;no otvaranje TLS veze");
		
?>