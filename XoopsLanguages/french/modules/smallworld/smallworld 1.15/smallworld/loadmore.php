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

$last  = mysql_real_escape_string($_POST['last']);
$page  = mysql_real_escape_string($_POST['page']);

global $xoopsUser, $xoTheme, $xoopsTpl,$xoopsLogger;
$xoopsLogger->activated = false;
$tpl = new XoopsTpl();
$Wall = new Wall_Updates();
if (isset($_POST['userid'])) {
	$userid  = intval($_POST['userid']);
} else {
	$userid=$xoopsUser->getVar('uid');
}
$id = $xoopsUser->getVar('uid');
$Xuser = new XoopsUser($id);
$username = $Xuser->getVar('uname');
	// 
	if ( $xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
		$tpl->assign('isadminuser', 'YES');
	}
	
		$myavatar 		=	$Wall->Gravatar($id);
		$myavatarlink	=	smallworld_getAvatarLink($id, $myavatar);
        $myavatar_size  = smallworld_getImageSize(80, 100, $myavatarlink);
        $myavatar_highwide = smallworld_imageResize($myavatar_size[0], $myavatar_size[1], 35);    

$followers = Smallworld_array_flatten($Wall->getFollowers($id),0);	
if ($page == 'index') {
	$updatesarray=$Wall->Updates($_POST['last'], $id, $followers);
} elseif ($page == 'profile') {
	$updatesarray=$Wall->Updates($_POST['last'], $userid, $userid);
}



//Srinivas Tamada http://9lessons.info
		//Loading Comments link with load_updates.php 
		foreach ($updatesarray as $data) {
			$wm['msg_id']		= 	$data['msg_id'];
			$wm['orimessage']	=	str_replace(array("\r", "\n"), '',$data['message']);
			$wm['message']		=	nl2br(smallworld_tolink(htmlspecialchars_decode($data['message']), $data['uid_fk']));
			$wm['created']		=	smallworld_time_stamp($data['created']);
			$wm['username']		=	$data['username'];
			$wm['uid_fk']		=	$data['uid_fk'];
			$wm['priv']			=	$data['priv'];
			$wm['avatar']		=	$Wall->Gravatar($data['uid_fk']);
			$wm['avatar_link']	=	smallworld_getAvatarLink ($data['uid_fk'], $wm['avatar']);
            $wm['avatar_size']      =   smallworld_getImageSize(80, 100, $wm['avatar_link']);
            $wm['avatar_highwide']  =   smallworld_imageResize($wm['avatar_size'][0], $wm['avatar_size'][1], 50);            
			$wm['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".$data['uid_fk'];
			$wm['compl_msg_lnk']   .=		"&updid=".$data['msg_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";				
			$wm['vote_up']			= 	$Wall->countVotes ('msg', 'up', $data['msg_id']);
			$wm['vote_down']		= 	$Wall->countVotes ('msg', 'down', $data['msg_id']);		
			$wm['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".$data['uid_fk'];
			$wm['compl_msg_lnk']   .=		"&updid=".$data['msg_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";				
			$wm['sharelinkurl']		=	XOOPS_URL."/modules/smallworld/smallworldshare.php?ownerid=".$data['uid_fk'];
			$wm['sharelinkurl']	   .=	"&updid=".$data['msg_id']."";
			$wm['usernameTitle']	=	$wm['username']._SMALLWORLD_UPDATEONSITEMETA.$xoopsConfig['sitename'];
			$wm['sharelink']		=	$Wall->GetSharing ($wm['msg_id'],$wm['priv']);
			$wm['sharediv']			=	$Wall->GetSharingDiv ($wm['msg_id'],$wm['priv'], $wm['sharelinkurl'],$wm['orimessage'],$wm['usernameTitle']);		
			$wm['commentsarray']	=	$Wall->Comments($data['msg_id']);	
			$tpl->append('walldata', $wm);
			
			if (!empty($wm['commentsarray'])){
				foreach($wm['commentsarray'] as $cdata) {
					$wc['msg_id_fk']	=		$cdata['msg_id_fk'];
					$wc['com_id']		=		$cdata['com_id'];
					$wc['comment']		=		nl2br(smallworld_tolink(htmlspecialchars_decode($cdata['comment']),$cdata['uid_fk']));
					$wc['time']			=		smallworld_time_stamp($cdata['created']);
					$wc['username']		=		$cdata['username'];
					$wc['uid']			=		$cdata['uid_fk'];
					$wc['myavatar']		=		$myavatar;
					$wc['myavatar_link']=		$myavatarlink;
                    $wc['avatar_size']      =   smallworld_getImageSize(80, 100, $wc['myavatar_link']);
                    $wc['avatar_highwide']  =   smallworld_imageResize($wc['avatar_size'][0], $wc['avatar_size'][1], 35);                         
					$wc['cface']		=		$Wall->Gravatar($cdata['uid_fk']);
					$wc['avatar_link']	=		smallworld_getAvatarLink ($cdata['uid_fk'], $wc['cface']);
					$wc['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".Smallworld_getOwnerFromComment($cdata['msg_id_fk']);
					$wc['compl_msg_lnk']   .=		"&updid=".$cdata['msg_id_fk']."#".$cdata['com_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";					
					$wc['vote_up']			= 		$Wall->countVotesCom ('com', 'up', $cdata['msg_id_fk'],$cdata['com_id']);
					$wc['vote_down']		= 		$Wall->countVotesCom ('com', 'down', $cdata['msg_id_fk'],$cdata['com_id']);					
					$tpl->append('comm', $wc);
					
				}
			}
		}
$tpl->assign('myusername',$username);		
$tpl->assign('pagename',$page);	
$tpl->assign('myavatar',$myavatar);
$tpl->assign('myavatarlink',$myavatarlink);
$tpl->assign('myavatar_highwide',$myavatar_highwide);
$tpl->display(XOOPS_ROOT_PATH .'/modules/smallworld/templates/getmore.html');
?>
