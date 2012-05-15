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
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");

global $xoopsUser, $xoopsLogger;
$xoopsLogger->activated = false;

$db = new SmallWorldDB;

if ($xoopsUser) {
	if($_POST['byuser']) {
		$by_userid = $xoopsUser->getVar('uid');
		$a_user = addslashes($_POST['a_user']);
		$auserid = intval($_POST['auserid']);
		$byuser	= addslashes($_POST['byuser']);
		$id	= addslashes($_POST['id']);
		$name	= addslashes($_POST['name']);
		$time = time();
		$data = array('time' => $time, 'a_user'=>$a_user,'byuser'=>$byuser,'link'=>$id, 'a_userid'=>$auserid);
		$already = $db->alreadycomplaint ($id, $by_userid, $auserid);
		
		if ($already != 1) {
		 $mail = new smallworld_mail;
		 if(smallworld_GetModuleOption('smallworldusemailnotis', $repmodule='smallworld') != 0) {
			$mail->sendMails($by_userid, '', 'complaint', $link=null, $data);	
		 }
		 $db->updateComplaint ($auserid);
		 echo _SMALLWORLD_JS_COMPLAINTSENT;
		} else {
		 echo _SMALLWORLD_JS_COMPLAINT_ALREADY_SENT;
		}
	}
}
?>