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
$xoopsOption['template_main'] = 'smallworld_userprofile_imgupload.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");

	if ($xoopsUser) {
		global $xoTheme;		
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.fileupload-uix.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.fileupload-ui.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.fileupload.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/upload_application.js');
        $xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/jquery.fileupload-ui.css');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');
        $xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/colorbox.css');	
		$id = $xoopsUser->getVar('uid');
		$check = new SmallWorldUser;
		$profile = $check->CheckIfProfile($id);
		if ($profile > 0) {
		$xoopsTpl->assign('check',1);
		$item = new SmallWorldForm;
		$db = new SmallWorldDB;
		
		// ------------ DISPLAY IMAGES ------------ // 
		// ------------ IMAGE UPLOADER ------------ // 
		// Image upload form
		$upload = $item->uploadform ($id);
		$xoopsTpl->append('uploadform',$upload);
		} else {
		  redirect_header("register.php", 1); 
		}
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	}
include(XOOPS_ROOT_PATH."/footer.php");
?>