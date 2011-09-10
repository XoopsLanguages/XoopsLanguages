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
 
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
defined('XOOPS_ROOT_PATH') or die('Beperkte toegang');
define("_AUTH_MSG_AUTH_METHOD", "Gebruik makend van de %s authentificatie methode");
define("_AUTH_LDAP_EXTENSION_NOT_LOAD", "PHP LDAP extensie niet geladen (Controleer uw PHP configuratie bestand, php.ini)");
define("_AUTH_LDAP_SERVER_NOT_FOUND", "Kan geen verbinding maken met de server");
define("_AUTH_LDAP_USER_NOT_FOUND", "De gebruiker %s  is niet gevonden in de directory server ( %s ) in %s ");
define("_AUTH_LDAP_CANT_READ_ENTRY", "Kan het item niet %s lezen");
define("_AUTH_LDAP_XOOPS_USER_NOTFOUND", "Er is in de XOOPS database geen overeenkomstige informatie voor de gebruiker gevonden voor verbinding: %s  <br> \".\" Controleer uw gebruikers data of zet de automatische invulling aan.");
define("_AUTH_LDAP_START_TLS_FAILED", "Kon geen TLS-verbinding openen.");

?>