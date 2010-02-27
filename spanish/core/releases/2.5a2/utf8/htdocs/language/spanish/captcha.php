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
 * @subpackage      Xoops Captcha Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: captcha.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: es
// _CHARSET : ISO-8859-1
// Translator: XOOPS Translation Team
define("_CAPTCHA_CAPTION", "C�digo de confirmaci�n");
define("_CAPTCHA_INVALID_CODE", "El c�digo de confirmaci�n no es v�lido");
define("_CAPTCHA_TOOMANYATTEMPTS", "Demasiados intentos");
define("_CAPTCHA_MAXATTEMPTS", "N�mero m�ximo de intentos: %d");
// For image mode
define("_CAPTCHA_RULE_IMAGE", "Escriba los caracteres que aparecen en la imagen");
define("_CAPTCHA_RULE_CASESENSITIVE", "El c�digo es sensible a may�sculas y min�sculas");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "El c�digo distingue entre may�sculas y min�sculas");
define("_CAPTCHA_REFRESH", "Si el c�digo no es lo suficientemente claro, por favor, haga clic en la imagen para actualizarlo");
// For text mode
define("_CAPTCHA_RULE_TEXT", "Ingrese el resulado desde la expresi�n");

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Error: Imposible cargar el archivo %u en el archivo %s en la l�nea %s. ');

?>