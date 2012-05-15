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

if (isset($_POST['xim_admin_message'])) {$_POST['xim_admin_message'] = '';}

$admin = new SmallworldAdmin();
$tpl = new XoopsTpl();

$ai = array();
$ani = array();

// --------------- First tab in admin ---------------
// Find oldest message and apply to template
$dateoffirstmessage = date('d-m-Y H:i:s',$admin->oldestMsg());
// Get days number
$totaldays = $admin->CountDays();
// get average messages per day
$avgperday = $admin->AvgMsgDay ($totaldays);
// XIM version number
$installversion = $admin->ModuleInstallVersion ();
// XIM install date
$installdate = $admin->ModuleInstallDate ();

//check current version of XIM, return desc,link,version if new available
$installCheck = $admin->doCheckUpdate ();

// Count members using XIM
$sumallusers = $admin->TotalUsers ();
// Find list of most active users (total)
$admin->mostactiveusers_allround();
// Find list of most active users (24 hours)
$admin->mostactiveusers_today();

// FInd list of best rated users overall
$admin->topratedusers('up');

// FInd list of worst rated users overall
$admin->topratedusers('down');

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
	$xoopsTpl->assign('lang_statistics', _AM_SMALLWORLD_STATISTICS_TITLE); 
	$xoopsTpl->assign('lang_moduleinfo', _AM_SMALLWORLD_MODULEINFO); 
	$xoopsTpl->assign('lang_userstats', _AM_SMALLWORLD_USERSTATS); 
	$xoopsTpl->assign('lang_installversion', _AM_SMALLWORLD_MODULEINSTALL); 
	$xoopsTpl->assign('lang_installversion_status', _AM_SMALLWORLD_UPDATE_STATUS); 
	$xoopsTpl->assign('lang_installdate', _AM_SMALLWORLD_INSTALLDATE); 
	$xoopsTpl->assign('lang_dateoffirstmessage', _AM_SMALLWORLD_DATEOFFIRSTMESSAGE); 
	$xoopsTpl->assign('lang_totalusers', _AM_SMALLWORLD_TOTALUSERS); 
	$xoopsTpl->assign('lang_averagemsgperday', _AM_SMALLWORLD_AVERAGEMSGPERDAY); 
	$xoopsTpl->assign('lang_topchatters',_AM_SMALLWORLD_TOPCHATTERS);
	$xoopsTpl->assign('lang_topchatterstoday',_AM_SMALLWORLD_TOPCHATTERS_TODAY);
	$xoopsTpl->assign('lang_toprated',_AM_SMALLWORLD_TOPRATEDUSERS);
	$xoopsTpl->assign('lang_bottomrated',_AM_SMALLWORLD_BOTTOMRATEDUSERS);
	$xoopsTpl->assign('lang_useradmin',_AM_SMALLWORLD_USERADMIN_TITLE);
	$xoopsTpl->assign('lang_help',_AM_SMALLWORLD_HELP);
	$xoopsTpl->assign('lang_prefs',_MI_SYSTEM_ADMENU6);
	$xoopsTpl->assign('lang_prefslink',"<a href='../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule ->getVar('mid')."'>"._MI_SYSTEM_ADMENU6."</a>");
	
	// help file from admin
	$xoopsTpl->assign('lang_hlp_about',_AM_SMALLWORLD_HELP_ABOUT);
	$xoopsTpl->assign('lang_hlp_preface',_AM_SMALLWORLD_HELP_PREFACE);
	$xoopsTpl->assign('lang_hlp_requirements_t',_AM_SMALLWORLD_HELP_HEADER_REQUIREMENTS);
	$xoopsTpl->assign('lang_hlp_requirements',_AM_SMALLWORLD_HELP_REQUIREMENTS);
	$xoopsTpl->assign('lang_hlp_recommended_t',_AM_SMALLWORLD_HELP_HEADER_RECOMMENDED);
	$xoopsTpl->assign('lang_hlp_recommended',_AM_SMALLWORLD_HELP_RECOMMENDED);
	$xoopsTpl->assign('lang_hlp_installation_t',_AM_SMALLWORLD_HELP_HEADER_INSTALLATION);
	$xoopsTpl->assign('lang_hlp_firsttime',_AM_SMALLWORLD_HELP_FIRSTTIMEINSTALL);
	$xoopsTpl->assign('lang_hlp_hostedplatform_t',_AM_SMALLWORLD_HELP_HEADER_HOSTED_PLATFORM);
	$xoopsTpl->assign('lang_hlp_hostedplatform',_AM_SMALLWORLD_HELP_HOSTED_PLATFORM);
	$xoopsTpl->assign('lang_hlp_upgrading_t',_AM_SMALLWORLD_HELP_HEADER_UPGRADING);
	$xoopsTpl->assign('lang_hlp_upgrading',_AM_SMALLWORLD_HELP_UPGRADING);
	$xoopsTpl->assign('lang_hlp_faq_t',_AM_SMALLWORLD_HELP_HEADER_FAQ);
	$xoopsTpl->assign('lang_hlp_commen1_t',_AM_SMALLWORLD_HELP_HEADER_COMMENPROBLEMS1);
	$xoopsTpl->assign('lang_hlp_commen1',_AM_SMALLWORLD_HELP_COMMENPROBLEMS1);
	$xoopsTpl->assign('lang_hlp_contacts_t',_AM_SMALLWORLD_HELP_HEADER_CONTACTS);
	$xoopsTpl->assign('lang_hlp_otherhelp',_AM_SMALLWORLD_HELP_OTHERHELP);
	$xoopsTpl->assign('installversion', $installversion);
	$xoopsTpl->assign('installdate', $installdate); 
	$xoopsTpl->assign('installversion_status',$installCheck);
	$xoopsTpl->assign('dateoffirstmessage', $dateoffirstmessage); 
	$xoopsTpl->assign('totalusers', $sumallusers); 
	$xoopsTpl->assign('averagemsgperday', $avgperday); 	
	$xoopsTpl->display('db:smallworld_admin.html');
	
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
		var $ = jQuery();
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
