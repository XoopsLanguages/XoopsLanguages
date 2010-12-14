<?php
// $Id: captcha.php 4897 2010-06-19 02:55:48Z phppp $
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko
define('_CAPTCHA_CAPTION', 'Kod potwierdzenia');
define('_CAPTCHA_INVALID_CODE', 'Niepoprawny kod potwierdzenia!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'Zbyt wiele prób!');
define('_CAPTCHA_MAXATTEMPTS', 'Możesz spróbować tylko: %d razy');
// For image mode
define('_CAPTCHA_RULE_IMAGE', 'Wprowadź litery z obrazka');
define('_CAPTCHA_RULE_CASESENSITIVE', 'Wielkość liter jest istotna');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'Wielkość liter nie jest istotna');
define('_CAPTCHA_REFRESH', 'Jeśli litery są niewyraźne kliknij tutaj by odświeżyć obrazek.');
// For text mode
define('_CAPTCHA_RULE_TEXT', 'Wpisz wynik wyrażenia');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Error: Could not load file %u in file %s at line %s. ');

?>
