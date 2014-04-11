<?php
/**
*  Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Core
* @subpackage      form Language
* @version         $Id: 2.5.0.a captcha.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

define('_CAPTCHA_CAPTION',            'Bestätigungscode');
define('_CAPTCHA_INVALID_CODE',       'Ungültiger Bestätigungscode!');
define('_CAPTCHA_TOOMANYATTEMPTS',    'Zu viele Versuche!');
define('_CAPTCHA_MAXATTEMPTS',        'Sie haben max. %d Versuche.');
// For image mode
define('_CAPTCHA_RULE_IMAGE',         'Geben Sie die Zeichen aus dem Bild ein');
define('_CAPTCHA_RULE_CASESENSITIVE', 'Es wird zwischen Groß und Kleinschreibung unterschieden');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Es wird nicht zwischen Groß und Kleinschreibung unterschieden');
define('_CAPTCHA_REFRESH',             'Zum neu Laden auf das Bild klicken.');
// For text mode
define('_CAPTCHA_RULE_TEXT',           'Geben Sie das Ergebnis der Rechnung ein!');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR',       'FEHLER: Kann Datei %u aus der Datei %s nicht laden. Fehler in Zeile %s.');

?>