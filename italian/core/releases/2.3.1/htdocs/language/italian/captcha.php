<?php
// $Id: captcha.php 1525 2008-04-30 13:11:48Z phppp $
define("_CAPTCHA_CAPTION", "Codice di conferma");
define("_CAPTCHA_INVALID_CODE", "Codice di conferma non valido!");
define("_CAPTCHA_TOOMANYATTEMPTS", "Troppi tentativi!");
define("_CAPTCHA_MAXATTEMPTS", "Numero massimo di tentativi: %d");

// For image mode
define("_CAPTCHA_RULE_IMAGE", "Inserisci le lettere presenti nell\'immagine");
define("_CAPTCHA_RULE_CASESENSITIVE", "Il codice è Case-sensitive");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "Il codice è case-insensitive");
define("_CAPTCHA_REFRESH", "Clicca per aggiornare l\'immagine se non è abbastanza chiara.");

// For text mode
define("_CAPTCHA_RULE_TEXT", "Inserisci il risultato dell\'espressione");
?>