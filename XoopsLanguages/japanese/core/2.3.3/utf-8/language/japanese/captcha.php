<?php
// $Id: captcha.php 1525 2008-04-30 13:11:48Z phppp $
define("_CAPTCHA_CAPTION", "Confirmation Code");
define("_CAPTCHA_INVALID_CODE", "Invalid confirmation code!");
define("_CAPTCHA_TOOMANYATTEMPTS", "Too many attempts!");
define("_CAPTCHA_MAXATTEMPTS", "Maximum attempts you can try: %d");

// For image mode
define("_CAPTCHA_RULE_IMAGE", "Input letters in the image");
define("_CAPTCHA_RULE_CASESENSITIVE", "The code is case-sensitive");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "The code is case-insensitive");
define("_CAPTCHA_REFRESH", "Click to refresh the image if it is not clear enough.");

// For text mode
define("_CAPTCHA_RULE_TEXT", "Input the result from the expression");
?>