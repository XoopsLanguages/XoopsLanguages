<?php
// $Id: captcha.php 1525 2008-04-30 13:11:48Z phppp $
define('_CAPTCHA_CAPTION','Bekræftelseskode');
define('_CAPTCHA_INVALID_CODE','Ugyldig bekræftelseskode!');
define('_CAPTCHA_TOOMANYATTEMPTS','Alt for mange forsøg!');
define('_CAPTCHA_MAXATTEMPTS','Maksimale forsøg du kan prøver: %d');

// For image mode
define('_CAPTCHA_RULE_IMAGE','Indtastnings tegn fra billedet.');
define('_CAPTCHA_RULE_CASESENSITIVE','Koden er case-sensitive');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Koden er case-insensitive');
define('_CAPTCHA_REFRESH','Klik for at opdaterer billedet, hvis det ikke er tydeligt nok.');

// For text mode
define('_CAPTCHA_RULE_TEXT','Indtast resultatet fra billedet');
?>