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
$xoopsOption['template_main'] = 'smallworld_friends_template.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");
global $xoopsUser;

	if ($xoopsUser) {	
		$id = smallworld_isset_or($_GET['username']); // Id of user wich profile you want to see
		$yourid = $xoopsUser->getVar('uid'); // your uid
		$Xuser = new XoopsUser($id);
		$Xusername = $Xuser->getVar('uname');
		$check = new SmallWorldUser;
		$profile = $check->CheckIfProfile($id);
		$friends = new SmallWorldFriends;
		
		// Check if inspected userid -> redirect to userprofile and show admin countdown
			$inspect = Smallworld_isInspected ($yourid);
			if ($inspect['inspect'] == 'yes') {
				redirect_header("userprofile.php?username=".$xoopsUser->getVar('uname'), 1); 
			}		
		
		if ($profile > 0) {
			$user = new SmallWorldProfile;
			$user->ShowUser($id);
			$username = $xoopsUser->getVar('uname'); //Myusername
			if($xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
				$xoopsTpl->assign('isadminuser', 'YES');
				$xoopsTpl->assign('ownerofpage', $id);
			}
		
		// Check status for relationship
		$fr = $check->friendcheck($yourid,$id);
			if ($fr[0] == 0) {
				$friendship_text = _SMALLWORLD_JSON_ADDFR_TEXT;
				if($xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
					$xoopsTpl->assign('isuserafriend','yes');
				} else {
					$xoopsTpl->assign('isuserafriend','no');
				}
			}
			
			if ($fr[0] == 1) {
				$friendship_text = _SMALLWORLD_JSON_CANCELFR_TEXT;
				if($xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
					$xoopsTpl->assign('isuserafriend','yes');
				} else {
					$xoopsTpl->assign('isuserafriend','no');
				}
			}
			
			if ($fr[0] == 2) {
				$friendship_text = _SMALLWORLD_JSON_REMOVEFR_TEXT;
				$xoopsTpl->assign('isuserafriend','yes');
			}		
		
		// Check status for follow
		$fl = $check->following_or($yourid, $id);
			if ($yourid == $id) {
				$following_text = _SMALLWORLD_JSON_FLYES_TEXT;
			}
			if ($fl[0] == 0) {
				$following_text = _SMALLWORLD_JSON_FLYES_TEXT;
			}
			if ($fl[0] == 1) {
				$following_text = _SMALLWORLD_JSON_FLNO_TEXT;
			}			
			
		// Get requests
		$getInvitations = $check->getRequests ($yourid);
		
		// Things to do with wall
		$Wall = new Wall_Updates();
		$myavatar 		=	$Wall->Gravatar($id);
		$myavatarlink	=	smallworld_getAvatarLink($id, $myavatar);
		
		// Get your followers array
		$followers = $Wall->getFollowers($id);	
		
		// Pendings array here
		$pending_array = $friends->getFriends($id, 'pending');
		
		// Friends array here
		$friends_array = $friends->getFriends($id, 'friends');
		
		// Pendings array here
		$following_array = $friends->getFriends($id, 'following');
		
		// Users Following you
		$followingme_array = $friends->getFriends($id, 'followingme');
		
		//Srinivas Tamada http://9lessons.info
		//Loading Comments link with load_updates.php 
	if (!empty($pending_array)) {	
		foreach ($pending_array as $data) {
			$fp['friend_id']	=	$data['you'];
			$fp['friendname']	= 	Smallworld_getName($data['you']);
			$fp['avatar']			=	$Wall->Gravatar($data['you']);
			$fp['avatar_link']		=	smallworld_getAvatarLink ($data['you'], $fp['avatar']);
            $fp['avatar_size']      =   smallworld_getImageSize(80, 100, $fp['avatar_link']);
            $fp['avatar_highwide']  =   smallworld_imageResize($fp['avatar_size'][0], $fp['avatar_size'][1], 50);            
			$xoopsTpl->append('pendingfriends', $fp);
		}	
	} else {
		$xoopsTpl->append('nouserspending',_SMALLWORLD_NOUSERS);
	}
			
	if (!empty($friends_array)) {	
		foreach ($friends_array as $data) {
			$ff['friend_id']	=	$data['you'];
			$ff['friendname']	= 	Smallworld_getName($data['you']);	
			$ff['avatar']			=	$Wall->Gravatar($data['you']);
			$ff['avatar_link']		=	smallworld_getAvatarLink ($data['you'], $ff['avatar']);
            $ff['avatar_size']      =   smallworld_getImageSize(80, 100, $ff['avatar_link']);
            $ff['avatar_highwide']  =   smallworld_imageResize($ff['avatar_size'][0], $ff['avatar_size'][1], 50);               
			$xoopsTpl->append('verifiedfriends', $ff);	
		}
	} else {
		$xoopsTpl->append('nousersfriends',_SMALLWORLD_NOUSERS);
	}
	
	if (!empty($following_array)) {	
		foreach ($following_array as $data) {
			$fy['friend_id']	=	$data['you'];
			$fy['friendname']	= 	Smallworld_getName($data['you']);	
			$fy['avatar']			=	$Wall->Gravatar($data['you']);
			$fy['avatar_link']		=	smallworld_getAvatarLink ($data['you'], $fy['avatar']);
            $fy['avatar_size']      =   smallworld_getImageSize(80, 100, $fy['avatar_link']);
            $fy['avatar_highwide']  =   smallworld_imageResize($fy['avatar_size'][0], $fy['avatar_size'][1], 50);               
			$xoopsTpl->append('followingyou', $fy);
		}
	} else {
		$xoopsTpl->append('nousersfollowingyou',_SMALLWORLD_NOUSERS);
	}
	
	if (!empty($followingme_array)) {	
		foreach ($followingme_array as $data) {
			$fm['friend_id']	=	$data['me'];
			$fm['friendname']	= 	Smallworld_getName($data['me']);
			$fm['avatar']			=	$Wall->Gravatar($data['me']);
			$fm['avatar_link']		=	smallworld_getAvatarLink ($data['me'], $fm['avatar']);
            $fm['avatar_size']      =   smallworld_getImageSize(80, 100, $fm['avatar_link']);
            $fm['avatar_highwide']  =   smallworld_imageResize($fm['avatar_size'][0], $fm['avatar_size'][1], 50);               
		$xoopsTpl->append('followingme', $fm);
		}		
			
	} else {
		$xoopsTpl->append('nousersfollowingme',_SMALLWORLD_NOUSERS);
	}
		
		// Get usermenu to template
			$menu_home = "<a href='".XOOPS_URL."/modules/smallworld/'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/house.png'>"._SMALLWORLD_HOME."</a>";
			$menu_profile = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$Xusername."'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/user_silhouette.png'>"._SMALLWORLD_PROFILEINDEX."</a>";
			$menu_gallery = "<a href='".XOOPS_URL."/modules/smallworld/galleryshow.php?username=".$Xusername."'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/picture.png'>"._SMALLWORLD_GALLERY."</a>";
			$menu_friends = "<a href='".XOOPS_URL."/modules/smallworld/friends.php?username=".$Xusername."'><img id='menuimg' src='".XOOPS_URL."/modules/smallworld/images/group.png'>"._SMALLWORLD_FRIENDSPAGE."</a>";
			$menu_xim_js = "javascript:chatWith('".$id."','".$Xusername."')";
			$menu_ximme = "<a href='javascript:void(0);' onClick=".$menu_xim_js."><img height='10px' width='10px' src='".XOOPS_URL."/modules/smallworld/images/messenger.png'>"._SMALLWORLD_XIMUSER.$Xusername."</a>";
			
			// Check for folder xim to add messenger user to menu items
			$hasxim = smallworld_checkForXim ();
			if ($hasxim == true) {
				$xoopsTpl->assign('sendxim','YES');
				if ($fr[0] == 2) {
					if ($yourid != $id) {
						$xoopsTpl->assign('menu_xim',$menu_ximme);
					}
				}
			}
			
			$xoopsTpl->assign('menu_home',$menu_home);
			$xoopsTpl->assign('menu_profile',$menu_profile);
			$xoopsTpl->assign('menu_friends',$menu_friends);
			$xoopsTpl->assign('menu_gallery',$menu_gallery);	
			$xoopsTpl->assign('check',1);
			$xoopsTpl->assign('friendID',$id);
			$xoopsTpl->assign('myUid',$yourid);
			$xoopsTpl->assign('friendship_text',$friendship_text);
			$xoopsTpl->assign('followfriend_text',$following_text);
			$xoopsTpl->assign('friendinvitations',$getInvitations);
			$xoopsTpl->assign('myavatar',$myavatar);
			$xoopsTpl->assign('myavatarlink',$myavatarlink);	
			$xoopsTpl->assign('myusername',$username);
			$xoopsTpl->assign('username',$Xusername);
		}	else {
				$check->chkUser ();
			}

			global $xoTheme;
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/apprise-1.5.full.js');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/jquery.fileupload-ui.css');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/oembed.css');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.oembed.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/wall.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/ajaxupload.3.5.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.avatar_helper.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.innerfade.js');			
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');
            $xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/colorbox.css');            
	
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	  }
include(XOOPS_ROOT_PATH."/footer.php");
?>