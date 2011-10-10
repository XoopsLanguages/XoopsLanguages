<?php
// $Id: captcha.php 4897 2010-06-19 02:55:48Z phppp $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2010-10-09 andrey3761

define('_CAPTCHA_CAPTION', 'Код подтверждения');
define('_CAPTCHA_INVALID_CODE', 'Неправильный код подтверждения!');
define('_CAPTCHA_TOOMANYATTEMPTS', 'Слишком много попыток!');
define('_CAPTCHA_MAXATTEMPTS', 'Максимальное количество попыток: %d');

// For image mode
define('_CAPTCHA_RULE_IMAGE', 'Введите знаки как на рисунке.');
define('_CAPTCHA_RULE_CASESENSITIVE', 'Код вводится с учетом регистра.');
define('_CAPTCHA_RULE_CASEINSENSITIVE', 'Код вводится без учета регистра.');
define('_CAPTCHA_REFRESH', 'Нажмите, чтобы обновить изображение, если его плохо видно.');

// For text mode
define('_CAPTCHA_RULE_TEXT', 'Напишите в окне решение примера');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Ошибка: Невозможно загрузить файл %u в файле %s в строке %s. ');

?>