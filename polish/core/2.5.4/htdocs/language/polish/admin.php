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
 * @subpackage      Xoops Admin Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: admin.php 0000 15/04/2009 16:03:56 
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

define("_AD_NORIGHT", "Nie masz uprawnień dostępu do tej strefy");
define("_AD_ACTION", "Akcja");
define("_AD_EDIT", "Edytuj");
define("_AD_DELETE", "Usuń");
define("_AD_LASTTENUSERS", "Ostatnich 10 zarejestrowanych użytkowników");
define("_AD_NICKNAME", "Nick");
define("_AD_EMAIL", "Email");
define("_AD_AVATAR", "Avatar");
define("_AD_REGISTERED", "Zarejestrowany dnia");
define("_AD_LOGINADMIN", "Trwa logowanie...");
define("_AD_WARNINGINSTALL","OSTRZEŻENIE: Katalog %s wciąż istnieje na serwerze. <br />Ze względu na zachowanie bezpieczeństwa serwisu należy całkowicie usunąć ten katalog.");
define("_AD_WARNINGWRITEABLE","OSTRZEŻENIE: Plik %s ma wciąż prawa zapisu na serwerze. <br />Ze względu na zachowanie bezpieczeństwa serwisu proszę zmienić prawa dostępu dla tego pliku.<br /> dla Unix-a (444), dla Win32 (read-only/tylko do odczytu)");
define("_AD_WARNINGNOTWRITEABLE","OSTRZEŻENIE: Katalog %s nie ma praw zapisu na serwerze. <br />Proszę zmienić prawa dostępu dla tego pliku.<br /> dla Unix-a (777), dla Win32 (writable/zapisywalny)");
define("_AD_WARNINGXOOPSLIBINSIDE","OSTRZEŻENIE: Folder %s znajduje się w katalogu głównym serwisu (DocumentRoot)! <br />Ze względu na zachowanie bezpieczeństwa serwisu niezbędne jest przeniesienie go poza katalog główny serwisu.");

?>