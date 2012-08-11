<?php
/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE: nl
 * _CHARSET : UTF-8
 * Vertaald door	Renetjuh
 * (Ver)taalfouten of suggesties?
 * AUB hier melden: http://www.xoops.nl
**/

defined('XOOPS_ROOT_PATH') or die('Beperkte toegang');

define('_CAPTCHA_CAPTION','Bevestigingscode');
define('_CAPTCHA_INVALID_CODE','Onjuiste bevestigingscode!');
define('_CAPTCHA_TOOMANYATTEMPTS','Sorry, u heeft te vaak een onjuiste bevestigingscode ingevoerd!');
define('_CAPTCHA_MAXATTEMPTS','Maximaal aantal pogingen: %d ');
// For image mode
define('_CAPTCHA_RULE_IMAGE','Neem de letters uit de afbeelding over.');
define('_CAPTCHA_RULE_CASESENSITIVE','De code is hoofdlettergevoelig');
define('_CAPTCHA_RULE_CASEINSENSITIVE','De code is niet hoofdlettergevoelig');
define('_CAPTCHA_REFRESH','Klik op de afbeelding als die niet goed te lezen is.');
// For text mode
define('_CAPTCHA_RULE_TEXT','Voer het resultaat van de rekensom in.');
/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Fout: Kan  het bestand %u niet laden, in bestand %s op regel %s .');
?>