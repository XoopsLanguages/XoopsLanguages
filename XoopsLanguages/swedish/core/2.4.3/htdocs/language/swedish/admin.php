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
defined('XOOPS_ROOT_PATH') or die('Endast behöriga användare');

define('_AD_NORIGHT','Du har inte behörighet att komma åt den här sidan.');
define('_AD_ACTION','Händelse');
define('_AD_EDIT','Redigera');
define('_AD_DELETE','Radera');
define('_AD_LASTTENUSERS','10 senast registrerade användarna');
define('_AD_NICKNAME','Användarnamn');
define('_AD_EMAIL','E-post');
define('_AD_AVATAR','Avatar');
define('_AD_REGISTERED','Registrerad'); //Registered Date
// define('_AD_PRESSGEN','This is your first time to enter the administration section. Press the button below to proceed.' );
define('_AD_LOGINADMIN','Loggar in...');
define('_AD_WARNINGINSTALL','VARNING: Katalogen %s finns på din server. <br />Av säkerhetsskäl bör du ta bort den här katalogen.');
define('_AD_WARNINGWRITEABLE','VARNING: Filen %s är skrivbar. <br />Av säkerhetsskäl bör du ändra skrivrättigheterna till den här filen.<br /> I Unix (444), i Win32 (Skrivskydd)');
define('_AD_WARNINGNOTWRITEABLE','VARNING: Katalogen %s är inte skrivbar. <br />Ändra skrivrättigheterna till den här katalogen.<br /> I Unix (777), i Win32 (ej Skrivskydd)');
define('_AD_WARNINGXOOPSLIBINSIDE','VARNING: Katalogen %s finns i dokumentroten! <br />Av säkerhetsskäl bör du flytta ut den här katalogen från dokumentroten.');

?>
