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
defined('XOOPS_ROOT_PATH') or die('Ograničeni pristup');

// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 2.6.2009.

define('_AUTH_MSG_AUTH_METHOD',"koristim %s metodu autentikacije");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP ekstenzija nije učitana (provjerite svoju PHP datoteku postavki php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Ne mogu se spojiti na server");
define('_AUTH_LDAP_USER_NOT_FOUND',"Korisnik %s nije pronađen u mapi poslužitelja (%s) u %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Ne mogu pročitati zapis %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Oprostite, nije pronađena odgovarajuća korisnička informacija u XOOPS bazi podataka za spajanje: %s <br>" . "Molimo provjerite vaše korisničke podatke ili postavite na automatsku provjeru");
define('_AUTH_LDAP_START_TLS_FAILED',"TLS konekcija nije uspješno otvorena");		
		
?>