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
include '../../mainfile.php';
include_once (XOOPS_ROOT_PATH.'/class/template.php');
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");

global $xoopsUser, $xoopsLogger, $xoopsDB, $xoopsTpl;
$xoopsLogger->activated = true;
$xoopsTpl->caching = 0;
$_COOKIE[session_name()] = session_id();
if ($xoopsUser) {
	if($_GET['SmallworldGetUserMsgCount']) {
        $counts = smallworld_getCountFriendMessagesEtc();
        header('Content-type: application/json');
        echo "{\"NewUserMsgCount\":\"$counts\"}";
	}
}
?>