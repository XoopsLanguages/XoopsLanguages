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
include_once("../../mainfile.php");
$xoopsOption['template_main'] = 'smallworld_galleryshow.html';
include_once(XOOPS_ROOT_PATH."/header.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
global $xoopsUser, $xoTheme;
	
	if ($xoopsUser) {
 		$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/galleriffic-5.css');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.galleriffic.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.history.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.opacityrollover.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/gallery_mod.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.innerfade.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');	
			
		$id = $xoopsUser->getVar('uid');
		$check = new SmallWorldUser;
		$image = new SmallWorldImages;
		
		// Check if inspected userid -> redirect to userprofile and show admin countdown
			$inspect = Smallworld_isInspected ($id);
			if ($inspect['inspect'] == 'yes') {
				redirect_header("userprofile.php?username=".$xoopsUser->getVar('uname'), 1); 
			}		
		
		$profile = $check->checkIfProfile($id);
		if ($profile > 0) {
			$myusername = $xoopsUser->getVar('uname');
			if ( $xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
				$xoopsTpl->assign('isadminuser', 'YES');
			}
			$user = new XoopsUser($id);
			$userID = smallworld_isset_or($_GET['username']); // Id of user wich profile you want to see
			$username = $_GET['username'];
			$countimages = $image->count($userID);
			$userisfriend = $check->friendcheck($id,$userID);
			
			//$gallery = $image->viewalbum ($id, $user=$xoopsUser->getVar('uid'));
			$gallery = $image->viewalbum ($id, $userID);
			 $xoopsTpl->assign('countimages',$countimages);
			 $xoopsTpl->assign('userisfriend',$userisfriend);
			 $xoopsTpl->assign('gallery',$gallery);
			 $xoopsTpl->assign('closealbum',_SMALLWORLD_ALBUMTITLETEXT);
			 $xoopsTpl->assign('username',$username);
			 $xoopsTpl->assign('myusername',$myusername);
			 $xoopsTpl->assign('gallerytitleheader',_SMALLWORLD_TITLEHEADER);
			$xoopsTpl->assign('check',1); 
		}	elseif ($profile == 0) {
			 $check->chkUser ();
			}
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	}
include(XOOPS_ROOT_PATH."/footer.php");
?>