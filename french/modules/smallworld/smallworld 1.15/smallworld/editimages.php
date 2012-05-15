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
$xoopsOption['template_main'] = 'smallworld_images_edittemplate.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
global $xoopsUser,$xoopsTpl,$xoopsDB,$xoTheme;

	if ($xoopsUser) {
		$userID = $xoopsUser->getVar('uid');

		// Check if inspected userid -> redirect to userprofile and show admin countdown
			$inspect = Smallworld_isInspected ($userID);
			if ($inspect['inspect'] == 'yes') {
				redirect_header("userprofile.php?username=".$xoopsUser->getVar('uname'), 1); 
			}

		$check = new SmallWorldUser;
		$profile = $check->CheckIfProfile($userID);
		if ($profile > 0) {
		$xoopsTpl->assign('check',1);
		$item = new SmallWorldForm;
		$db = new SmallWorldDB;
		
		$editimages = '';
		$sql = "SELECT *FROM ".$xoopsDB->prefix('smallworld_images')." WHERE userid = '".$userID."'";
		$result = $xoopsDB->query($sql);
		$i = 0;
			while ($sqlfetch=$xoopsDB->fetchArray($result)) {
			 $editimages .= $item->edit_images ($userID,$sqlfetch['imgurl'], $sqlfetch['desc'],$sqlfetch['id']);
				$i++;
			}
		$xoopsTpl->append('editimages',$editimages);
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');
		$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/colorbox.css');	
		}	else {
			redirect_header("index.php", 1); 
			}
	}
include(XOOPS_ROOT_PATH."/footer.php");
?>