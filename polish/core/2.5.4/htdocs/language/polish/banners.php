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
* Xoops Language
*
* @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
* @license http://www.fsf.org/copyleft/gpl.html GNU public license
* @package kernel
* @subpackage Xoops Banners Language
* @since 2.0.0
* @author Kazumi Ono <onokazu@xoops.org>
* @version $Id: banners.php 4052 2009-12-26 18:44:37Z trabis $
*/
defined('XOOPS_ROOT_PATH') or die('Restricted access');
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko
define('_BANNERS_MANAGEMENT', 'Menadżer reklam');
define('_BANNERS_WELCOMEBACK', 'Witaj: %s');
define('_BANNERS_LOGGEDOUT', 'Wyloguj z panelu reklam');
define('_BANNERS_LOGOUT', 'Wyloguj z Menadżera Reklam');
define('_BANNERS_LOGIN_TITLE', 'Statystyki reklam');
define("_BANNERS_LOGIN_LOGIN", "Login: ");
define('_BANNERS_LOGIN_INCORRECT', 'Nieprawidłowa nazwa użytkownika lub hasło');
define("_BANNERS_LOGIN_PASS", "Hasło: ");
define("_BANNERS_LOGIN_INFO", "Wprowadź dane swojego klienta");
define("_BANNERS_LOGIN_OK", "OK");
define("_BANNERS_ID", "ID bannera: ");
define("_BANNERS_TITLE", "Aktywne bannery dla %s");
define("_BANNERS_URL", "Zmień URL: ");
define('_BANNERS_NOTHINGFOUND', 'Nic nie znaleziono');
define('_BANNERS_NO', '#');
define("_BANNERS_FOW_IN", "Poniżej są twoje aktywne bannery w");
define("_BANNERS_IMP_MADE", "Imp. Made");
define("_BANNERS_IMP_TOTAL", "Imp. Total");
define("_BANNERS_IMP_LEFT", "Imp. Left");
define("_BANNERS_CLICKS", "Kliknięć");
define("_BANNERS_PER_CLICKS", "% Kliknięć");
define("_BANNERS_FUNCTIONS", "Funkcje");
define("_BANNERS_STATS", "Email Stats");
define('_BANNERS_SHOWBANNER', 'Pokaż baner');
define("_BANNERS_SEND_STATS", "Wyślij <a href='%s' title='E-mail Stats'/>E-mail Stats</a> dla tego bannera");
define("_BANNERS_POINTS", "Ten banner wskazuje na <a href='%s' title=''>ten URL</a>");
define("_BANNERS_UNLIMITED", "Nielimitowane");
define("_BANNERS_FINISHED", "Bannery zakończone dla %s");
define("_BANNERS_STARTED", "Data rozpoczęcia");
define("_BANNERS_ENDED", "Data zakończenia");
define("_BANNERS_MAIL_SUBJECT", "Statystyki twoich bannerów na %s");
define('_BANNERS_MAIL_MESSAGE', 'To są kompletne statystyki dla twojej reklamy na %s :\n\n\n
Nazwa klienta: %s\nID bannera: %s\n
Obraz bannera: %s\n
URL bannera: %s\n\n
Wykupionych odsłon: %s\n
Liczba odsłon: %s\n
Pozostało odsłon: %s\n
Liczba kliknięć: %s\n
Procent kliknięć: %f \n\n\n
Raport wygenerowany: %s');
define('_BANNERS_MAIL_NOT_OK', 'Wystąpił błąd podczas wysyłania twojego emaila. Proszę skontaktuj się z administratorem aby rozwiązać problem.');
define("_BANNERS_MAIL_OK", "Statystyki dla twojego bannera zostały wysłane na twój adres email.");
define("_BANNERS_MAIL_ERROR", "Nie znaleziono adresu email powiązanego z klientem %s.<br />Skontaktuj się z administratorem");

define('_BANNERS_DBUPDATED', 'Baza danych została uaktualniona');
define('_BANNERS_DBERROR', 'Baza danych NIE została uaktualniona z powodu błędu!');
define('_BANNERS_CHANGE', 'Zmień');

define('_BANNERS_NO_LOGIN_DATA', 'Nie wykryto danych logowania');
define('_BANNERS_NO_REFERER', 'No referer detected');
define('_BANNERS_NO_ID', 'Brak poprawnego ID');
?>