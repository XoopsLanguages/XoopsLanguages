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

global $xoopsUser, $xoTheme, $xoopsTpl,$xoopsLogger, $xoopsDB;
$xoopsLogger->activated = false;
$Wall = new Wall_Updates();
if ($xoopsUser) {

	if($_POST['id']) {
		$id = intval($_POST['id']);
		$type = mysql_escape_String($_POST['type']);
		$type2 = mysql_escape_String($_POST['type2']);
		$owner = mysql_escape_String($_POST['owner']);
		$userid = $xoopsUser->getVar('uid');
		$hasvoted = $Wall->HasVoted ($userid, $type, $type2, $id);
		if ($type == 'msg') {
			if ( $hasvoted > 0 ) {
				echo "<script type='text/javascript'>";
				echo "alert('"._SMALLWORLD_JS_ALREADYVOTED."');";
				echo "</script>";
			} else {
				$sql = "INSERT INTO ".$xoopsDB->prefix('smallworld_vote')." (vote_id,msg_id,com_id,user_id,owner,up,down) VALUES ('', '".$id."', '0', '".$userid."', '".$owner."', '0', '1')";
				$result=$xoopsDB->queryF($sql);
				
			}
			$newvote = $Wall->countVotes ($type, 'down', $id);
		}
		
		if ($type == 'com') {
			if ( $hasvoted > 0 ) {
				echo "<script type='text/javascript'>alert('"._SMALLWORLD_JS_ALREADYVOTED."');</script>";
			} else {
				$sql = "INSERT INTO ".$xoopsDB->prefix('smallworld_vote')." (vote_id,msg_id,com_id,user_id,owner,up,down) VALUES ('', '".$id."', '".$type2."', '".$userid."', '".$owner."', '0', '1')";
				$result=$xoopsDB->queryF($sql);
			}
			$newvote = $Wall->countVotesCom ($type, 'down', $type2, $id);
		}
		
	}
 	$link = '<span id ="smallworld_votenum">'.$newvote.'</span> <a href="javascript:void(0)" name="down" class="smallworld_stcomment_vote"';
	$link .= ' id="'.$id.'" type="'.$type.'" owner="'.$owner.'" type2="'.$type2.'">';
	$link .= '<img class="smallworld_voteimg" src = "images/dislike.png" /></a>';
	echo $link; 
}
?>