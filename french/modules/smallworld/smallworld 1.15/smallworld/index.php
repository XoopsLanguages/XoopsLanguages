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
$xoopsOption['template_main'] = 'smallworld_index.html';
include_once(XOOPS_ROOT_PATH."/header.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
global $xoopsUser, $xoTheme,$xoopsConfig;
	
	if ($xoopsUser) {
		$id = $xoopsUser->getVar('uid');
		$user = new XoopsUser($id);

		// Check if inspected userid -> redirect to userprofile and show admin countdown
			$inspect = Smallworld_isInspected ($id);
			if ($inspect['inspect'] == 'yes') {
				redirect_header("userprofile.php?username=".$xoopsUser->getVar('uname'), 1); 
			}
		
		$xoopsTpl->assign('ownerofpage', $id);
		if ( $xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
			$xoopsTpl->assign('isadminuser', 'YES');
		}
			
		$username = $user->getVar('uname');
		$check = new SmallWorldUser;
		$profile = $check->checkIfProfile($id);
		
		if ($profile > 0) {
			$xuser = new SmallWorldProfile;
			$xuser->ShowUser($id);
			$menu_home = "<a href='".XOOPS_URL."/modules/smallworld/'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/house.png'>"._SMALLWORLD_HOME."</a>";
			$menu_profile = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$username."'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/user_silhouette.png'>"._SMALLWORLD_PROFILEINDEX."</a>";
			$menu_gallery = "<a href='".XOOPS_URL."/modules/smallworld/galleryshow.php?username=".$username."'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/picture.png'>"._SMALLWORLD_GALLERY."</a>";
			$menu_friends = "<a href='".XOOPS_URL."/modules/smallworld/friends.php?username=".$username."'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/group.png'>"._SMALLWORLD_FRIENDSPAGE."</a>";
			
			
			// Things to do with wall
			$Wall = new Wall_Updates();
			$myavatar 		=	$Wall->Gravatar($id);
			$myavatarlink 	=	smallworld_getAvatarLink($id, $myavatar);
            $myavatar_size  = smallworld_getImageSize(80, 100, $myavatarlink);
            $myavatar_highwide = smallworld_imageResize($myavatar_size[0], $myavatar_size[1], 35);
			
			//Get friends invitations
			$getInvitations = $check->getRequests ($id);
			
			// Follow array here
			$followers = Smallworld_array_flatten($Wall->getFollowers($id),0);	
			$updatesarray=$Wall->Updates(0,$id, $followers);
			//Srinivas Tamada http://9lessons.info
			//Loading Comments link with load_updates.php 
			if (!empty($updatesarray)) {
			foreach ($updatesarray as $data) {
				$wm['msg_id']			= 	$data['msg_id'];
				$wm['orimessage']		=	str_replace(array("\r", "\n"), '',Smallworld_stripWordsKeepUrl($data['message']));
				$wm['message']			=	nl2br(smallworld_tolink(htmlspecialchars_decode($data['message']), $data['uid_fk']));
				 $wm['message'] = str_replace(array('&lt;','&gt;'),array('<','>'), $wm['message']);
				$wm['created']			=	smallworld_time_stamp($data['created']);
				$wm['username']			=	$data['username'];
				$wm['uid_fk']			=	$data['uid_fk'];
				$wm['priv']				=	$data['priv'];
				$wm['avatar']			=	$Wall->Gravatar($data['uid_fk']);
				$wm['avatar_link']		=	smallworld_getAvatarLink ($data['uid_fk'], $wm['avatar']);
                $wm['avatar_size']      =   smallworld_getImageSize(80, 100, $wm['avatar_link']);
                $wm['avatar_highwide']  =   smallworld_imageResize($wm['avatar_size'][0], $wm['avatar_size'][1], 50);
				$wm['vote_up']			= 	$Wall->countVotes ('msg', 'up', $data['msg_id']);
				$wm['vote_down']		= 	$Wall->countVotes ('msg', 'down', $data['msg_id']);
				$wm['compl_msg_lnk']	=	"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".$data['uid_fk'];
				$wm['compl_msg_lnk']   .=	"&updid=".$data['msg_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";
				$wm['sharelinkurl']		=	XOOPS_URL."/modules/smallworld/smallworldshare.php?ownerid=".$data['uid_fk'];
				$wm['sharelinkurl']	   .=	"&updid=".$data['msg_id']."";
				$wm['usernameTitle']	=	$wm['username']._SMALLWORLD_UPDATEONSITEMETA.$xoopsConfig['sitename'];
				$wm['sharelink']		=	$Wall->GetSharing ($wm['msg_id'],$wm['priv']);
				$wm['sharediv']			=	$Wall->GetSharingDiv ($wm['msg_id'],$wm['priv'], $wm['sharelinkurl'],$wm['orimessage'],$wm['usernameTitle']);
				$wm['commentsarray']	=	$Wall->Comments($data['msg_id']);	
				$xoopsTpl->append('walldata', $wm);
				
				if (!empty($wm['commentsarray'])){
					foreach($wm['commentsarray'] as $cdata) {
						$wc['msg_id_fk']		=		$cdata['msg_id_fk'];
						$wc['com_id']			=		$cdata['com_id'];
						$wc['comment']			=		nl2br(smallworld_tolink(htmlspecialchars_decode($cdata['comment']),$cdata['uid_fk']));
						$wc['time']				=		smallworld_time_stamp($cdata['created']);
						$wc['username']			=		$cdata['username'];
						$wc['uid']				=		$cdata['uid_fk'];
						$wc['myavatar']			=		$Wall->Gravatar($id);
						$wc['myavatar_link']	=		$myavatarlink;
                        $wc['avatar_size']      =       smallworld_getImageSize(80, 100, $wc['myavatar_link']);
                        $wc['avatar_highwide']  =       smallworld_imageResize($wc['avatar_size'][0], $wc['avatar_size'][1], 35);                        
                        $wc['cface']			=		$Wall->Gravatar($cdata['uid_fk']);
						$wc['avatar_link']		=		smallworld_getAvatarLink ($cdata['uid_fk'], $wc['cface']);
						$wc['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".Smallworld_getOwnerFromComment($cdata['msg_id_fk']);
						$wc['compl_msg_lnk']   .=		"&updid=".$cdata['msg_id_fk']."#".$cdata['com_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";
						$wc['vote_up']			= 		$Wall->countVotesCom ('com', 'up', $cdata['msg_id_fk'],$cdata['com_id']);
						$wc['vote_down']		= 		$Wall->countVotesCom ('com', 'down', $cdata['msg_id_fk'],$cdata['com_id']);			
						$xoopsTpl->append('comm', $wc);
					}
				}
			}
			}
					
			$xoopsTpl->assign('menu_home',$menu_home);
			$xoopsTpl->assign('menu_profile',$menu_profile);
			$xoopsTpl->assign('menu_friends',$menu_friends);
			$xoopsTpl->assign('menu_gallery',$menu_gallery);
			$xoopsTpl->assign('myusername',$username);
			$xoopsTpl->assign('pagename','index');
			$xoopsTpl->assign('check',1); 
			$xoopsTpl->assign('myavatar',$myavatar);
			$xoopsTpl->assign('myavatarlink',$myavatarlink);
            $xoopsTpl->assign('myavatar_highwide',$myavatar_highwide);
			$xoopsTpl->assign('friendinvitations',$getInvitations);
			
		}	elseif ($profile == 0) {
				//$xoopsTpl->assign('check',0);
			$check->chkUser ();
			
			}
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.oembed.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.elastic.source.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/wall.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/ajaxupload.3.5.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.avatar_helper.js');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.bookmark.js');
		$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/oembed.css');
		$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');
		$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/smallworld.css');  		
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	}
include(XOOPS_ROOT_PATH."/footer.php");
?>