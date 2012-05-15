<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:			The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:				http://www.fsf.org/copyleft/gpl.html GNU public license
* @module:				Smallworld
* @Author:				Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:			2011 Culex
* @Repository path:		$HeadURL$
* @Last committed:		$Revision$
* @Last changed by:		$Author$
* @Last changed date:	$Date$
* @ID:					$Id$
**/

require_once 'admin_header.php'; 
require_once '../../../include/cp_header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");

require_once XOOPS_ROOT_PATH . '/class/template.php';
if (!isset($xoopsTpl)) {$xoopsTpl = new XoopsTpl();}
$xoopsTpl->caching=0;

xoops_cp_header();

$admin = new SmallworldAdmin();
$tpl = new XoopsTpl();

// Smallworld version number
$installversion = $admin->ModuleInstallVersion ();
// Smallworld install date
$installdate = $admin->ModuleInstallDate ();

//check current version of Smallworld, return desc,link,version if new available
$installCheck = $admin->doCheckUpdate ();

// template assignments
	$xoopsTpl->assign('lang_moduleinfo', _AM_SMALLWORLD_MODULEINFO); 
	$xoopsTpl->assign('lang_installversion', _AM_SMALLWORLD_MODULEINSTALL); 
	$xoopsTpl->assign('lang_installversion_status', _AM_SMALLWORLD_UPDATE_STATUS); 
	$xoopsTpl->assign('lang_installdate', _AM_SMALLWORLD_INSTALLDATE); 
	
	$xoopsTpl->assign('installversion', $installversion);
	$xoopsTpl->assign('installdate', $installdate); 
	$xoopsTpl->assign('installversion_status',$installCheck);
	$xoopsTpl->display(XOOPS_ROOT_PATH .'/modules/smallworld/templates/admin_moduleinfo.html');
	
	global $xoTheme; 
	$xoTheme->addStyleSheet('modules/smallworld/css/SmallworldAdmin.css');
	$xoTheme->addScript(XOOPS_URL . '/modules/smallworld/js/adminsmallworld.js');
	
xoops_cp_footer();
?>
