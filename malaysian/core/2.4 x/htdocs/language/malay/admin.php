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

define('_AD_NORIGHT', 'You don\'t have the right to access this area');
define('_AD_ACTION', 'Action');
define('_AD_EDIT', 'Edit');
define('_AD_DELETE', 'Delete');
define('_AD_LASTTENUSERS', 'Last 10 registered users');
define('_AD_NICKNAME', 'Nickname');
define('_AD_EMAIL', 'Email');
define('_AD_AVATAR', 'Avatar');
define('_AD_REGISTERED', 'Registered'); //Registered Date
// define( '_AD_PRESSGEN', 'This is your first time to enter the administration section. Press the button below to proceed.' );
define('_AD_LOGINADMIN', 'Loging you in..');
define('_AD_WARNINGINSTALL', 'WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons.');
define('_AD_WARNINGWRITEABLE', 'WARNING: File %s is writeable by the server. <br />Please change the permission of this file for security reasons.<br /> in Unix (444), in Win32 (read-only)');
define('_AD_WARNINGNOTWRITEABLE', 'WARNING: Folder %s is not writeable by the server. <br />Please change the permission of this folder.<br /> in Unix (777), in Win32 (writable)');
define('_AD_WARNINGXOOPSLIBINSIDE', 'WARNING: Folder %s is inside DocumentRoot! <br />For security considerations it is highly suggested to move it out of DocumentRoot.');

?>
