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
$xoopsOption['template_main'] = 'smallworld_userprofile_template.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");
global $xoopsUser;

	if ($xoopsUser) {
		SmallworldDeleteOldInspects ();
		$id = smallworld_isset_or($_GET['username']); // Id of user wich profile you want to see
		$yourid = $xoopsUser->getVar('uid'); // your uid
		$Xuser = new XoopsUser($id);
		$Xusername = $Xuser->getVar('uname');
		$check = new SmallWorldUser;
		$profile = $check->CheckIfProfile($id);
		$fr[0] = '';
		$fl[0] = '';
		
		if ($profile > 0) {
			$user = new SmallWorldProfile;
			$user->ShowUser($id);
			$username = $xoopsUser->getVar('uname'); //Myusername
			$inspected = Smallworld_isInspected($id);
				$xoopsTpl->assign('inspect',$inspected['inspect']);
				if ($inspected['inspect'] != 'no') {
					$xoopsTpl->assign('inspecttime',$inspected['totaltime']);
				}
				$xoopsTpl->assign('ownerofpage', $id);
			if($xoopsUser->isAdmin($xoopsModule->getVar('mid'))) {
				$xoopsTpl->assign('isadminuser', 'YES');
				
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
					$fl[0] == 0;
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
		$myavatar 			=	$Wall->Gravatar($id); //profile owners data
		$myavatarlink		=	smallworld_getAvatarLink($id, $myavatar); //profile owners data
        $myavatar_size  = smallworld_getImageSize(80, 100, $myavatarlink);
        $myavatar_highwide = smallworld_imageResize($myavatar_size[0], $myavatar_size[1], 35);
        
		$visitorAvatar		=	$Wall->Gravatar($yourid);
		$visitorAvatarlink	=	smallworld_getAvatarLink($yourid, $visitorAvatar);
        $visitorAvatar_size  = smallworld_getImageSize(80, 100, $visitorAvatarlink);
        $visitorAvatar_highwide = smallworld_imageResize($visitorAvatar_size[0], $visitorAvatar_size[1], 35);        
		
		// Follow array here
		$followers = $Wall->getFollowers($id);
		$updatesarray=$Wall->Updates(0,$id, $id);
		//Srinivas Tamada http://9lessons.info
		//Loading Comments link with load_updates.php 
	if (!empty($updatesarray)) {	
		foreach ($updatesarray as $data) {
			$wm['msg_id']		= 	$data['msg_id'];
			$wm['orimessage']	=	str_replace(array("\r", "\n"), '',$data['message']);
			$wm['message']		=	nl2br(smallworld_tolink(htmlspecialchars_decode($data['message']), $data['uid_fk']));
			$wm['created']		=	smallworld_time_stamp($data['created']);
			$wm['username']		=	$data['username'];
			$wm['uid_fk']		=	$data['uid_fk'];
			$wm['priv']			=	$data['priv'];
			$wm['avatar']		=	$Wall->Gravatar($data['uid_fk']);
			$wm['avatar_link']		=	smallworld_getAvatarLink ($data['uid_fk'], $wm['avatar']);
            $wm['avatar_size']      =   smallworld_getImageSize(80, 100, $wm['avatar_link']);
            $wm['avatar_highwide']  =   smallworld_imageResize($wm['avatar_size'][0], $wm['avatar_size'][1], 50);            
			$wm['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".$data['uid_fk'];
			$wm['compl_msg_lnk']   .=		"&updid=".$data['msg_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";							
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
					$wc['msg_id_fk']	=		$cdata['msg_id_fk'];
					$wc['com_id']		=		$cdata['com_id'];
					$wc['comment']		=		nl2br(smallworld_tolink(htmlspecialchars_decode($cdata['comment']), $cdata['uid_fk']));
					$wc['time']			=		smallworld_time_stamp($cdata['created']);
					$wc['username']		=		$cdata['username'];
					$wc['uid']			=		$cdata['uid_fk'];
					$wc['myavatar']		=		$myavatar;
					$wc['myavatar_link']=		$myavatarlink;
                    $wc['avatar_size']      =       smallworld_getImageSize(80, 100, $wc['myavatar_link']);
                    $wc['avatar_highwide']  =       smallworld_imageResize($wc['avatar_size'][0], $wc['avatar_size'][1], 35);                         
					$wc['cface']		=		$Wall->Gravatar($cdata['uid_fk']);
					$wc['avatar_link']		=	smallworld_getAvatarLink($cdata['uid_fk'],$wc['cface']);
					$wc['compl_msg_lnk']	=		"<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".Smallworld_getOwnerFromComment($cdata['msg_id_fk']);
					$wc['compl_msg_lnk']   .=		"&updid=".$cdata['msg_id_fk']."#".$cdata['com_id']."'>"._SMALLWORLD_COMP_MSG_LNK_DESC."</a>";						
					$wc['vote_up']			= 		$Wall->countVotesCom ('com', 'up', $cdata['msg_id_fk'],$cdata['com_id']);
					$wc['vote_down']		= 		$Wall->countVotesCom ('com', 'down', $cdata['msg_id_fk'],$cdata['com_id']);						
					$xoopsTpl->append('comm', $wc);
					
				}
			}
		}
	} else {}
			
		
		
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
			
			$birthday_today_text  = "<img width='20px' heigh='20px' src='images/bdayballoons_l.png'/>";
			$birthday_today_text .= " "._SMALLWORLD_BDAY_TODAY." ";
			$birthday_today_text .= "<img width='20px' heigh='20px' src='images/bdayballoons_r.png'/>";
			
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
            $xoopsTpl->assign('myavatar_highwide',$visitorAvatar_highwide);
			$xoopsTpl->assign('visitoravatar',$visitorAvatar);
			$xoopsTpl->assign('visitoravatarlink',$visitorAvatarlink);
            $xoopsTpl->assign('visitoravatar_highwide',$visitorAvatar_highwide);
			$xoopsTpl->assign('myusername',$username);
			$xoopsTpl->assign('username',$Xusername);
			$xoopsTpl->assign('bdaynow',$birthday_today_text);
			$xoopsTpl->assign('isfollowing',$fl[0]);	
			$xoopsTpl->assign('flds',smallworld_GetModuleOption('smallworldusethesefields', $repmodule='smallworld'));
		}	else {
				redirect_header("index.php", 1, _SMALLWORLD_NOUSER_ERROR);
			}

			global $xoTheme;
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/apprise-1.5.full.js');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/jquery.fileupload-ui.css');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/oembed.css');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.oembed.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/wall.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/ajaxupload.3.5.js');
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.avatar_helper.js');	
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.bookmark.js');		
			$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.elastic.source.js');
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.countdown.js');
			$xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/smallworld.css');  
			
			//Check Language
			$lang = $xoopsConfig['language'];
			
			// GET various variables from language folder
			if ( file_exists(XOOPS_ROOT_PATH.'/modules/smallworld/language/js/'.$lang.'/jquery.countdown.js')) {
				$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$lang.'/js/jquery.countdown.js');
			} else {
				$xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/jquery.countdown.js');
			}
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	  }

include(XOOPS_ROOT_PATH."/footer.php");
?>