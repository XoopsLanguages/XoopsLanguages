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
$xoopsOption['template_main'] = 'smallworld_userprofile_edittemplate.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
global $xoopsUser,$xoopsDB,$xoopsLogger;
$xoopsLogger->activated = false;
	if($_GET) {
		$q=Smallworld_sanitize($_GET['term']);
		$sql = "select * from ".$xoopsDB->prefix('smallworld_user')." where realname like '%".$q."%' or username like '%".$q."%' order by userid LIMIT 5";
		$result = $xoopsDB->query($sql);
		$data = array();

		while ($row=$xoopsDB->fetchArray($result)) {
			$user = new xoopsUser($row['userid']);
			$image = '<img src="'.smallworld_getAvatarLink ($row['userid'], $row['userimage']).'" height="20" />';
			$data[] = array(
			'label' => $image.' '.'<span class="searchusername">'.$row['realname']." (".$row['username'].")</span>",
			'value' => $user->uname()
			);
		}
		// jQuery wants JSON data
		echo json_encode($data);
		flush();
	}
	else {}
?>