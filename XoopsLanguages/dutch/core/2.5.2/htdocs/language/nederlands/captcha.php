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

define('_CAPTCHA_CAPTION', 'Bevestigingscode');
define('_CAPTCHA_INVALID_CODE', 'Onjuiste bevestigingscode!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'Sorry, u heeft te vaak een onjuiste bevestigingscode ingevoerd!');
define('_CAPTCHA_MAXATTEMPTS', 'Maximaal aantal pogingen: %d ');
// For image mode
define('_CAPTCHA_RULE_IMAGE', 'Neem de letters uit de afbeelding over.');
define('_CAPTCHA_RULE_CASESENSITIVE', 'De code is hoofdlettergevoelig');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'De code is niet hoofdlettergevoelig');
define('_CAPTCHA_REFRESH', 'Klik op de afbeelding als die niet goed te lezen is.');
// For text mode
define('_CAPTCHA_RULE_TEXT', 'Voer het resultaat van de rekensom in.');
/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Fout: Kan  het bestand %u niet laden, in bestand %s op regel %s .');
?>