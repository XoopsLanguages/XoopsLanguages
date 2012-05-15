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


//require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/include/cp_header.php';
include_once dirname(__FILE__) . '/admin_header.php';

xoops_cp_header();
global $xoTheme;        
$xoTheme->addStylesheet(XOOPS_URL . '/modules/smallworld/css/SmallworldAdmin.css');
$xoTheme->addScript(XOOPS_URL . '/modules/smallworld/js/adminsmallworld.js');


	$indexAdmin = new ModuleAdmin();


$admin = new SmallworldAdmin();

// Find oldest message and apply to template
$dfm = $admin->oldestMsg();
if ($dfm==0) {
	$dfm = _AM_SMALLWORLD_NONEYET;
} else {
	$dfm = date(_SHORTDATESTRING, $admin->oldestMsg());
}
$dateoffirstmessage = $dfm;

// Get days number
$totaldays = $admin->CountDays();
// get average messages per day
$avgperday = $admin->AvgMsgDay ($totaldays);
// Smallworld version number
$installversion = $admin->ModuleInstallVersion ();
// Smallworld install date
$installdate = $admin->ModuleInstallDate ();
//check current version of Smallworld, return desc,link,version if new available
$installCheck = $admin->doCheckUpdate ();
// Count members using Smallworld
$sumallusers = $admin->TotalUsers ();
// Find list of most active users (total)
$maAllround = $admin->mostactiveusers_allround();
	$ma_cnt = 0;
		if (!empty($maAllround)) {
			$count = count($maAllround['cnt']);
		} else {
			$count=0;
		}
	$mat_cnt = 0;
	if ($count != 0) {
		$ma_cnt = 1;
		$ma = "<table class='smallworldadmin'><tr>";
		$ma .= "<td><b>"._AM_SMALLWORLD_STATS_POS."</b></td><td><b>"._AM_SMALLWORLD_STATS_IMG."</b></td><td><b>"._AM_SMALLWORLD_STATS_AMOUNT."</b></td><td><b>"._AM_SMALLWORLD_STATS_NAME."</b></td></tr>";
		$i = 1;
			while ($i < count($maAllround)) {
				$ma .= vsprintf('<tr><td>%s</td>',array($maAllround['counter'][$i]));
				$ma .= vsprintf('<td>%s</td>',array($maAllround['img'][$i]));
				$ma .= vsprintf('<td>%s</td>',array($maAllround['cnt'][$i]));
				$ma .= vsprintf('<td>%s</td></tr>',array($maAllround['from'][$i]));
			$i++;
			}
		$ma .= "</tr></table>";
	} else {
		$maAllround = 0;
	}
// Find list of most active users (24 hours)
$maToday = $admin->mostactiveusers_today();
	if (!empty($maToday)) {
		$count = count($maToday['cnt']);
	} else {
		$count=0;
	}
	$mat_cnt = 0;
	if ($count != 0) {
		$mat_cnt = 1;
		$mat = "<table class='smallworldadmin'><tr>";
		$mat .= "<td><b>"._AM_SMALLWORLD_STATS_POS."</b></td><td><b>"._AM_SMALLWORLD_STATS_IMG."</b></td><td><b>"._AM_SMALLWORLD_STATS_AMOUNT."</b></td><td><b>"._AM_SMALLWORLD_STATS_NAME."</b></td></tr>";
		$i = 1;
			while ($i <= $count) {
				$mat .= vsprintf('<tr><td>%s</td>',array($maToday['counter'][$i]));
				$mat .= vsprintf('<td>%s</td>',array($maToday['img'][$i]));
				$mat .= vsprintf('<td>%s</td>',array($maToday['cnt'][$i]));
				$mat .= vsprintf('<td>%s</td></tr>',array($maToday['from'][$i]));
			$i++;
			}
		$mat .= "</tr></table>";
	} else {
		$mat = 0;
	}
// FInd list of best rated users overall
$topusers = $admin->topratedusers('up');
	if (!empty($topusers)){
		$count = count($topusers['cnt']);
	} else {
		$count = 0;
	}
	$top_cnt = 0;
	if ($count != 0) {
		$top_cnt = 1;
		$top  = "<table class='smallworldadmin'><tr>";
		$top .= "<td><b>"._AM_SMALLWORLD_STATS_POS."</b></td><td><b>"._AM_SMALLWORLD_STATS_IMG."</b></td><td><b>"._AM_SMALLWORLD_STATS_AMOUNT."</b></td><td><b>"._AM_SMALLWORLD_STATS_NAME."</b></td></tr>";
		$i = 1;
			while ($i <= $count) {
				$top .= vsprintf('<tr><td>%s</td>',array($topusers['counter'][$i]));
				$top .= vsprintf('<td>%s</td>',array($topusers['img'][$i]));
				$top .= vsprintf('<td>%s</td>',array($topusers['cnt'][$i]));
				$top .= vsprintf('<td>%s</td></tr>',array($topusers['user'][$i]));
			$i++;
			}
		$top .= "</tr></table>";
	} else {
		$top = 0;
	}

// FInd list of worst rated users overall
$lowusers = $admin->topratedusers('down');
	$low_cnt = 0;
		if (!empty($lowusers)) {
	$count = count($lowusers['cnt']);
	} else {
		$count=0;
	}
	if ($count != 0) {
		$low_cnt = 1;
		$low = "<table class='smallworldadmin'><tr>";
		$low .= "<td><b>"._AM_SMALLWORLD_STATS_POS."</b></td><td><b>"._AM_SMALLWORLD_STATS_IMG."</b></td><td><b>"._AM_SMALLWORLD_STATS_AMOUNT."</b></td><td><b>"._AM_SMALLWORLD_STATS_NAME."</b></td></tr>";
		$i = 1;
			while ($i <= $count) {
				$low .= vsprintf('<tr><td>%s</td>',array($lowusers['counter'][$i]));
				$low .= vsprintf('<td>%s</td>',array($lowusers['img'][$i]));
				$low .= vsprintf('<td>%s</td>',array($lowusers['cnt'][$i]));
				$low .= vsprintf('<td>%s</td></tr>',array($lowusers['user'][$i]));
			$i++;
			}
		$low .= "</tr></table>";
	} else {
		$low = 0;
	}

//-----------------------

// template assignments
	$xoopsTpl->assign('lang_moduleinfo', _AM_SMALLWORLD_MODULEINFO);
	$xoopsTpl->assign('lang_installversion', _AM_SMALLWORLD_MODULEINSTALL);
	$xoopsTpl->assign('lang_installversion_status', _AM_SMALLWORLD_UPDATE_STATUS);
	$xoopsTpl->assign('lang_installdate', _AM_SMALLWORLD_INSTALLDATE);

	//$xoopsTpl->assign('installversion', $installversion);
	//$xoopsTpl->assign('installdate', $installdate);
	//$xoopsTpl->assign('installversion_status',$installCheck);
	//$xoopsTpl->display(XOOPS_ROOT_PATH .'/modules/smallworld/templates/admin_moduleinfo.html');

//-----------------------

$indexAdmin->addInfoBox(_AM_SMALLWORLD_MODULEINFO);
$indexAdmin->addInfoBoxLine(_AM_SMALLWORLD_MODULEINFO, "<class='smallworldadmin'>"._AM_SMALLWORLD_MODULEINSTALL." : %s</br>",$installversion,'Green','default');
$indexAdmin->addInfoBoxLine(_AM_SMALLWORLD_MODULEINFO, "<class='smallworldadmin'>"._AM_SMALLWORLD_INSTALLDATE.": %s",$installdate,'Green','default');
$indexAdmin->addInfoBoxLine(_AM_SMALLWORLD_MODULEINFO, "<class='smallworldadmin'>"."%s",$installCheck,'Green','default');

$indexAdmin->addInfoBox(_AM_SMALLWORLD_USERSTATS);
$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<class='smallworldadmin'>"._AM_SMALLWORLD_DATEOFFIRSTMESSAGE." : %s</br>",$dateoffirstmessage,'Green','default');
$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<class='smallworldadmin'>"._AM_SMALLWORLD_TOTALUSERS." : %s</br>",$sumallusers, 'Red','default');

if ($avgperday > 0) {
	$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<class='smallworldadmin'>"._AM_SMALLWORLD_AVERAGEMSGPERDAY." : %s</br>", $avgperday, 'Red','default');
}

if ($mat_cnt != 0 ) {
	$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<p class='smallworldadmin'>"._AM_SMALLWORLD_TOPCHATTERS_TODAY." : %s</p>", $mat, 'Red','default');
}
if ($ma_cnt != 0 ) {
	$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<p class='smallworldadmin'>"._AM_SMALLWORLD_TOPCHATTERS." : %s</p>", $ma, 'Red','default');
}
if ($top_cnt != 0 ) {
	$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<p class='smallworldadmin'>"._AM_SMALLWORLD_TOPRATEDUSERS." : %s</p>", $top, 'Red','default');
}
if ($low_cnt != 0 ) {
$indexAdmin->addInfoBoxLine( _AM_SMALLWORLD_USERSTATS, "<p class='smallworldadmin'>"._AM_SMALLWORLD_BOTTOMRATEDUSERS." : %s</p>", $low, 'Red','default');
}

    echo $indexAdmin->addNavigation('index.php');
    echo $indexAdmin->renderIndex();
include "admin_footer.php";
?>