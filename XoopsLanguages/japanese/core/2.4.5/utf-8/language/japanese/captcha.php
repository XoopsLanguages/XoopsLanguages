<?php
// $Id: captcha.php $
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define("_CAPTCHA_CAPTION", "認証コード");
define("_CAPTCHA_INVALID_CODE", "無効な認証コードです！");
define("_CAPTCHA_TOOMANYATTEMPTS", "認証の有効回数を超えました");
define("_CAPTCHA_MAXATTEMPTS", "認証可能回数は %d 回です");
// For image mode
define('_CAPTCHA_RULE_IMAGE', "画像に記載している文字を入力して下さい");
define("_CAPTCHA_RULE_CASESENSITIVE", "認証コード");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "認証コード");
define("_CAPTCHA_REFRESH", "読めない場合は画像をクリック事で別の文字を表示できます");
// For text mode
define("_CAPTCHA_RULE_TEXT", "式の答えを入力してください");

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'エラー: ファイル %u が読み込めません in file %s at line %s. ');

?>