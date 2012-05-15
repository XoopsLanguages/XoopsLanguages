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

$ai = array();
$ani = array();

$allusers_inspect = $admin->getAllUsers('yes');
	if (!empty($allusers_inspect)) {
		foreach ($allusers_inspect as $data) {
			$ai['id']						= 	$data['id'];
			$ai['userid']					=	$data['userid'];
			$ai['username']					=	$data['username'];
			$ai['realname']					=	$data['realname'];
			$ai['userimage']				=	smallworld_getAvatarLink ($data['userid'],$data['userimage']);
            $ai['avatar_size']              =   smallworld_getImageSize(80, 100, $ai['userimage']);
            $ai['avatar_highwide']          =   smallworld_imageResize($ai['avatar_size'][0], $ai['avatar_size'][1], 50);            
			$ai['ip']						=	$data['ip'];
			$ai['complaint']				=	$data['complaint'];
			$ai['inspect_start']			=	$data['inspect_start'];
			$ai['inspect_stop']				=	$data['inspect_stop'];
			$ai['userinspect_timetotal']	=	($data['inspect_start'] + $data['inspect_stop'])-time();
			$xoopsTpl->append('allusersinspect', $ai);
		}
	}
	$xoopsTpl->assign('allusersinspectcounter',count($ai));

$allusers_noinspect = $admin->getAllUsers('no');
	if (!empty($allusers_noinspect)) {
		foreach ($allusers_noinspect as $data) {
			$ani['id']						= 	$data['id'];
			$ani['userid']					=	$data['userid'];
			$ani['username']				=	$data['username'];
			$ani['realname']				=	$data['realname'];
			$ani['userimage']				=	smallworld_getAvatarLink ($data['userid'],$data['userimage']);
            $ani['avatar_size']             =   smallworld_getImageSize(80, 100, $ani['userimage']);
            $ani['avatar_highwide']         =   smallworld_imageResize($ani['avatar_size'][0], $ani['avatar_size'][1], 50);               
			$ani['ip']						=	$data['ip'];
			$ani['complaint']				=	$data['complaint'];
			$ani['inspect_start']			=	'';
			$ani['inspect_stop']			=	'';
			$ani['userinspect_timetotal']	=	'';
			$xoopsTpl->append('allusersnoinspect', $ani);
		}
	}
	$xoopsTpl->assign('allusersnoinspectcounter',count($ani));
// ---------------- end of tabs ---------------- //

// template assignments
	// tab titles
	$xoopsTpl->assign('lang_useradmin',_AM_SMALLWORLD_USERADMIN_TITLE);
	
	// help file from admin
	$xoopsTpl->display(XOOPS_ROOT_PATH .'/modules/smallworld/templates/admin_useradmin.html');
	
	global $xoTheme; 
	//Check Language
	$lang = $xoopsConfig['language'];
	// GET various variables from language folder
	if ( file_exists(XOOPS_ROOT_PATH.'/modules/smallworld/language/js/'.$lang.'/variables.js')) {
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$lang.'/js/variables.js');
	}	else {
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/variables.js');
	}
	
$adminscript= <<<SCRIPT
		var smallworld_url="XOOPS_URL/modules/smallworld/";
		//var $ = jQuery();
SCRIPT;
	$xoTheme->addStyleSheet('modules/smallworld/css/SmallworldAdmin.css');
	$xoTheme->addScript(XOOPS_URL.'/browse.php?Frameworks/jquery/jquery.js');
	$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery-ui-1.8.11.custom.js');
	$xoTheme->addScript('modules/smallworld/js/smallworld_tabs.js');
	$xoTheme->addScript('','',$adminscript);
	$xoTheme->addScript(XOOPS_URL . '/modules/smallworld/js/jquery.form.js');
	$xoTheme->addScript(XOOPS_URL . '/modules/smallworld/js/jquery.countdown.js');
		if ( file_exists(XOOPS_ROOT_PATH.'/modules/smallworld/language/js/'.$lang.'/jquery.ui.datepicker-language.js')) {
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$lang.'/js/jquery.ui.datepicker-language.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$lang.'/js/jquery.countdown.js');
		}	else {
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/jquery.ui.datepicker-language.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/jquery.countdown.js');
		}
	$xoTheme->addScript(XOOPS_URL . '/modules/smallworld/js/adminsmallworld.js');
	
xoops_cp_footer();
?>
