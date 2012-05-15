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
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once (XOOPS_ROOT_PATH.'/class/template.php');
global $xoopsUser, $xoopsModule,$xoopsLogger,$xoopsTpl;
$xoopsLogger->activated = false;
$page  = 'index';
if ($xoopsUser) { 	
	$id = $xoopsUser->getVar('uid');
	$Xuser = new XoopsUser($id);
	$username = $Xuser->getVar('uname');
	$Wall = new Wall_Updates();
	$tpl = new XoopsTpl();
	$mail = new smallworld_mail;
	
	if(isSet($_POST['comment'])) {
		if ( $xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
			$tpl->assign('isadminuser', 'YES');
		}
		//$followers = $Wall->getFollowers($id);	
		$followers = Smallworld_array_flatten($Wall->getFollowers($id),0);	

		$myavatar 		=	$Wall->Gravatar($id);
		$myavatarlink	=	smallworld_getAvatarLink($id, $myavatar);
		
		// Get posted items
		$comment=$_POST['comment'];
		$msg_id=$_POST['msg_id'];
		
		$data=$Wall->Insert_Comment($id,$msg_id,$comment);
		if($data) {
			$wc['msg_id_fk']	=		$data['msg_id_fk'];
			$wc['com_id']		=		$data['com_id'];
			$wc['comment']		=		nl2br(smallworld_tolink(htmlspecialchars_decode($data['comment']), $data['uid']));
			$wc['time']			=		smallworld_time_stamp($data['created']);
			$wc['username']		=		$data['username'];
			$wc['uid']			=		$data['uid_fk'];
			$wc['myavatar']		=		$myavatar;
			$wc['myavatar_link']=		$myavatarlink;
			$wc['cface']		=		$Wall->Gravatar($data['uid_fk']);
			$wc['avatar_link']	=		smallworld_getAvatarLink ($data['uid_fk'], $wc['cface']);
            $wc['avatar_size']      =       smallworld_getImageSize(80, 100, $wc['myavatar_link']);
            $wc['avatar_highwide']  =       smallworld_imageResize($wc['avatar_size'][0], $wc['avatar_size'][1], 35);                 
			$wc['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".Smallworld_getOwnerFromComment($cdata['msg_id_fk']);
			$wc['compl_msg_lnk']   .=		"&updid=".$cdata['msg_id_fk']."#".$cdata['com_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";						
			$wc['vote_up']			= 		$Wall->countVotesCom ('com', 'up', $data['msg_id_fk'],$data['com_id']);
			$wc['vote_down']		= 		$Wall->countVotesCom ('com', 'down', $data['msg_id_fk'],$data['com_id']);					
			$tpl->append('comments', $wc);
		
			$tpl->assign('myusername',$username);		
			$tpl->assign('pagename',$page);	
			$tpl->assign('myavatar',$myavatar);
			$tpl->assign('myavatarlink',$myavatarlink);
			$tpl->display(XOOPS_ROOT_PATH .'/modules/smallworld/templates/getlastcom.html');
			
			// send mail to user owning update + participans in the thread that a comment has been posted
			$parts = $mail->getPartsFromComment ($data['msg_id_fk']);
			$emails = "";
			foreach ($parts as $k=>$v) {
				$owner = Smallworld_getOwnerFromComment ($data['msg_id_fk']);
				if(smallworld_GetModuleOption('smallworldusemailnotis', $repmodule='smallworld') != 0) {
					$mail->sendMails ($data['uid_fk'], $v, 'commentToWM', $link=null, $wc); 
				}
			}			
		}
	}
}
?>
