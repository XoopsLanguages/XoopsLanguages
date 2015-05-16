<?php
// $Id: captcha.php 12363 2015-03-13
// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_CAPTCHA_CAPTION','Potvrzovací kód');
define('_CAPTCHA_INVALID_CODE','CHYBA! Potvrzovací kód nesouhlasí.');
define('_CAPTCHA_TOOMANYATTEMPTS','Příliš mnoho pokusů.');
define('_CAPTCHA_MAXATTEMPTS','Maximální počet pokusů je omezen na %d.');
// For image mode
define('_CAPTCHA_RULE_IMAGE','Opište písmena a číslice z obrázku');
define('_CAPTCHA_RULE_CASESENSITIVE','Je potřeba rozlišovat malá a velká písmena');
define('_CAPTCHA_RULE_CASEINSENSITIVE','Není potřeba rozlišovat malá a velká písmena');
define('_CAPTCHA_REFRESH','Pokud je obrázek nečitelný, klikněte na tento text a zobrazí se nový obrázek.');
// For text mode
define('_CAPTCHA_RULE_TEXT','Napište výsledek tohoto příkladu'); // Input the result from the expression

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR','CHYBA! Nemohu otevřít soubor %u pomocí souboru %s na řádku %s. '); // Error: Could not load file %u in file %s at line %s.
