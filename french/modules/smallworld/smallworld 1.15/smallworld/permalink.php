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
$xoopsOption['template_main'] = 'smallworld_permalink.html';
include_once(XOOPS_ROOT_PATH."/header.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
global $xoopsUser, $xoTheme;
	if ($xoopsUser) {
		
		if (isset($_GET['updid']) AND isset($_GET['ownerid'])) {
		 $updID = $_GET['updid'];
		 $ownerID = $_GET['ownerid'];
		} else {
		 redirect_header(XOOPS_URL . "/modules/smallworld/index.php", 5, _SMALLWORLD_UPDATEID_NOT_EXIST);
		}
		$id = $xoopsUser->getVar('uid');
		$user = new XoopsUser($id);
		if ( $xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
			$xoopsTpl->assign('isadminuser', 'YES');
			$xoopsTpl->assign('ownerofpage', $id);
		}
			
		$username = $user->getVar('uname');
		$check = new SmallWorldUser;
		$friend = $check->friendcheck($id,$ownerID);
		if ($friend[0] != 0) {
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
				
				// Follow array here
				$followers = Smallworld_array_flatten($Wall->getFollowers($id),0);	

				$updatesarray=$Wall->UpdatesPermalink ($updID,$id, $ownerID);

				//Srinivas Tamada http://9lessons.info
				//Loading Comments link with load_updates.php 
                if (!empty($updatesarray)) {
                    foreach ($updatesarray as $data) {
                        if (in_array($data['uid_fk'], $followers) || $id == $ownerID || $xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
                            $wm['msg_id']			= 	$data['msg_id'];
                            $wm['orimessage']		=	str_replace(array("\r", "\n"), '',Smallworld_stripWordsKeepUrl($data['message']));
                            $wm['message']			=	smallworld_tolink(htmlspecialchars_decode($data['message']), $data['uid_fk']);
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
                                    $wc['comment']			=		smallworld_tolink(htmlspecialchars_decode($cdata['comment']), $cdata['uid_fk']);
                                    $wc['time']				=		smallworld_time_stamp($cdata['created']);
                                    $wc['username']			=		$cdata['username'];
                                    $wc['uid']				=		$cdata['uid_fk'];
                                    $wc['myavatar']			=		$Wall->Gravatar($id);
                                    $wc['myavatar_link']	=		$myavatarlink;
                                    $wc['avatar_size']      =       smallworld_getImageSize(80, 100, $wc['myavatar_link']);
                                    $wc['avatar_highwide']  =       smallworld_imageResize($wc['avatar_size'][0], $wc['avatar_size'][1], 35);                             
                                    $wc['cface']			=		$Wall->Gravatar($cdata['uid_fk']);
                                    $wc['avatar_link']		=		smallworld_getAvatarLink ($cdata['uid_fk'], $wc['cface']);
                                    $wc['vote_up']			= 		$Wall->countVotesCom ('com', 'up', $cdata['msg_id_fk'],$cdata['com_id']);
                                    $wc['vote_down']		= 		$Wall->countVotesCom ('com', 'down', $cdata['msg_id_fk'],$cdata['com_id']);			
                                    $xoopsTpl->append('comm', $wc);
                                }
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
			}	elseif ($profile == 0) {
				 $check->chkUser ();
				}
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.oembed.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/wall.js');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/oembed.css');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/smallworld.css');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.innerfade.js');
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.elastic.source.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.bookmark.js'); 
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	}
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	}
include(XOOPS_ROOT_PATH."/footer.php");
?>