<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* XIM - Xoops Instant Messenger
*
* A one-on-one messenger written for xoops. Inspired by Anant Garg's -(anantgarg.com | inscripts.com)-
* 2009 tutorial on jquery messenger & by the original facebook messenger and a few more. This module has
* been adapted, written, re-written and extended heavily by Andrax & Culex.
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         http://www.fsf.org/copyleft/gpl.html GNU public license
* @package         modules
* @subpackage      xim
* @since           2.4.0
* @author          Andrax - homepage.: http://guxbrasil.org & email.: lcbc@ig.com.br
* @author          Culex  - homepage.: http://culex.dk		& email.: culex@culex.dk
**/

/**
 * @translation     culex.dk
 * @specification   _LANGCODE: dk
 * @specification   _CHARSET: UTF-8 sans Bom
 *
 * @Translator      culex aka Michael Albertsen (culex@culex.dk)
 *
 * @version         $Id$
**/
define('_MI_XIM_MODULE_NAME','XIM');
define('_MI_XIM_ADMENU','Administration');
define('_MI_XIM_MODULE_DESC','En blok der viser online brugere lige nu. Klik brugernavn for at åbne chatvindue.');
define("_MB_XIM_BLOCK","IM");
define('_XIM_CREDIT','Originalscript af Anant Garg (anantgarg.com)');
define('_XIM_SHOW_FOOTER_BAR','Vis footerbar?');
define('_XIM_FOOTER_BAR_STYLE','Footerbar stil');
define('_XIM_FOOTER_FULL','Fuld');
define('_XIM_FOOTER_TINY','Lille');

//styling for chatvinduer
define('_XIM_CHATWINDOWSTYLE_STYLE','Chatvindue skin');
define('_XIM_CHATWINDOWSTYLE_DESC','Vælg stilen du vil bruge på dine chatvinduer');
define('_XIM_CHATWINDOWSTYLE_DEFAULT','Default');
define('_XIM_CHATWINDOWSTYLE_WHITE','Hvid');
define('_XIM_CHATWINDOWSTYLE_BLACK','Sort');
define('_XIM_CHATWINDOWSTYLE_STIKY','Stiky');				
define('_XIM_CHATWINDOWSTYLE_ALERT','Alert');

// Om logger
define('_XIM_CHATDELETE_LOGS','Slet beskeder..');
define('_XIM_CHATDELETE_LOGS_DESC','Slet ikke = 0. <br/>Angiv en værdi for automatisk sletning af modtaget beskeder ældre end X.<br/>Et tal større end 60 er tilrådeligt.');
?>
