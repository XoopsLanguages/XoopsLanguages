<?php
// $Id: captcha.php 1525 2008-04-30 13:11:48Z phppp $
define("_CAPTCHA_CAPTION","确认码");
define("_CAPTCHA_INVALID_CODE","无效的确认码！");
define("_CAPTCHA_TOOMANYATTEMPTS","您错误次数太多！");
define("_CAPTCHA_MAXATTEMPTS","您最多可以尝试: %d 次");

// For image mode
define("_CAPTCHA_RULE_IMAGE","输入图片上的字母");
define("_CAPTCHA_RULE_CASESENSITIVE","区分大小写");
define("_CAPTCHA_RULE_CASEINSENSITIVE","不区分大小写");
define("_CAPTCHA_REFRESH","如果看不清楚请点击图片刷新");

// For text mode
define("_CAPTCHA_RULE_TEXT","输入表达式的结果");
?>