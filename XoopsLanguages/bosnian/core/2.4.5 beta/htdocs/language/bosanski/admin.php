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

define("_AD_NORIGHT","Nema&scaron; odobrenje u ovo podru&#269;je u&#263;i");
define("_AD_ACTION","Akcija:");
define("_AD_EDIT","Uredi");
define("_AD_DELETE","Izbri&scaron;i");
define("_AD_LASTTENUSERS","10 zadnje registrovanih &#269;lanova:");
define("_AD_NICKNAME","Nik ime:");
define("_AD_EMAIL","E-Mail:");
define("_AD_AVATAR","Avatar:");
define("_AD_REGISTERED","Registrovan(a):"); //Registered Date
//define('_AD_PRESSGEN','Ovo je prvi puta da ulazi&scaron; Adminovo-Podru&#269;je. Molim te klikni na "Po&scaron;alji" da bi nastavili.');
define('_AD_LOGINADMIN','Loguje se...');
define("_AD_WARNINGINSTALL","UPOZORENJE: Direktorij %s postoji na Serveru. Iz sigurnosnih razloga ovaj direktorij mora&scaron; izbrisati.");
define("_AD_WARNINGWRITEABLE","UPOZORENJE: Podatak %s za pisanje nije za&scaron;ti&#263;en sa CHMOD na Serveru. <br />Molimo te da pristup podatku za&scaron;titi&scaron; da nebi bilo problema sa Hakerima!<br /> (sa Unix serverima CHMOD je (444), a sa Win32  serverima(zabrani pisanje u podatak))");
define("_AD_WARNINGNOTWRITEABLE","UPOZORENJE: U direktorij %s na Serveru se nemo&#382;e upisivati. <br />Molimo te podesi CHMOD za ovaj direktorij.<br /> za Unix (777), za Windows (readable)");
define("_AD_WARNINGXOOPSLIBINSIDE","WARNUNG: Direktorij %s se nalazi u Root na Serveru!<br />U njemu se nalaze povjerljivi podaci. Pristup Hakerima treba onemugu&#263;iti i ovaj direktorij treba biti van Web odnosno ispred Root na Serveru.");

?>