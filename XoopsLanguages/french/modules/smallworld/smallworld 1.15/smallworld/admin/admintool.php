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
global $xoopsDB, $xoTheme, $xoopsLogger ;
$xoopsLogger->activated = false;
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");

if ($_POST['type'] == 'addtime') {
	$userid = intval($_POST['userid']);
	$amount = intval($_POST['amount']);
	$test = "SELECT * FROM ".$xoopsDB->prefix('smallworld_admin')." WHERE userid = '".$userid."' AND (inspect_start+inspect_stop) > ".time()."";
	$result = $xoopsDB->queryF($test);
	if ($xoopsDB->getRowsNum($result) < 1) {
		$sql = "UPDATE ".$xoopsDB->prefix('smallworld_admin')." SET inspect_start = '".time()."', inspect_stop = '".$amount."' WHERE userid='".$userid."'";
		$result = $xoopsDB->queryF($sql);
	} else {
		$sql = "UPDATE ".$xoopsDB->prefix('smallworld_admin')." SET inspect_stop = (inspect_stop + ".$amount.") WHERE userid='".$userid."'";
		$result = $xoopsDB->queryF($sql);
	}
		
}
if ($_POST['type'] == 'deletetime') {
	$sql = "UPDATE ".$xoopsDB->prefix('smallworld_admin')." SET inspect_start = '', inspect_stop = '' WHERE userid='".intval($_POST['deluserid'])."'";
	$result = $xoopsDB->queryF($sql);
}


if ($_POST['type'] == 'deleteUser') {
	$db = new SmallWorldDB;
		
	$userid = intval($_POST['deluserid']);
	$db->deleteAccount ($userid);
	
}
?>