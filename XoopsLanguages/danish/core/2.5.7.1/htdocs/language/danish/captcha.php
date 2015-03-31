<?php
// $Id: captcha.php 12363 2014-03-08 10:39:06Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_CAPTCHA_CAPTION','Bekræftelseskode');
define('_CAPTCHA_INVALID_CODE','Ugyldig bekræftelseskode!');
define('_CAPTCHA_TOOMANYATTEMPTS','For mange forsøg!');
define('_CAPTCHA_MAXATTEMPTS','Maksimale forsøg kan du prøve: %d');
// For image mode
define('_CAPTCHA_RULE_IMAGE','Indtast bogstaverne i billedet');
define('_CAPTCHA_RULE_CASESENSITIVE','Koden skelner mellem store og små bogstaver');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Koden skelner ikke mellem store og små bogstaver');
define('_CAPTCHA_REFRESH','Klik for at opdatere billedet, hvis det ikke er tydeligt nok.');
// For text mode
define('_CAPTCHA_RULE_TEXT','Indtast resultatet fra udtrykket');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Fejl: Kunne ikke indlæse filen %u i filen %s på linje %s. ');
