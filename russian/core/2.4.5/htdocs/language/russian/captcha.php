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

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: andrey3761

define('_CAPTCHA_CAPTION','Код подтверждения');
define('_CAPTCHA_INVALID_CODE','Неправильный код подтверждения!');
define('_CAPTCHA_TOOMANYATTEMPTS','Слишком много попыток!');
define('_CAPTCHA_MAXATTEMPTS','Максимальное количество попыток: %d');

// For image mode
define('_CAPTCHA_RULE_IMAGE','Введите знаки как на рисунке.');
define('_CAPTCHA_RULE_CASESENSITIVE','Код вводится с учетом регистра.');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Код вводится без учета регистра.');
define('_CAPTCHA_REFRESH','Нажмите, чтобы обновить изображение, если его плохо видно.');

// For text mode
define('_CAPTCHA_RULE_TEXT','Напишите в окне решение примера');

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','Ошибка: Невозможно загрузить файл %u в файле %s в строке %s. ');

?>