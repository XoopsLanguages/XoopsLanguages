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

include_once XOOPS_ROOT_PATH . '/class/mail/xoopsmultimailer.php';
include_once (XOOPS_ROOT_PATH.'/class/template.php');

class smallworld_mail {
/* Function to send mails to users based on certain events
	 * $fromUserID = uid, $toUserID = uid
	 * $event : 'register' = New user registration, 
	 * 	'complatint' = Complaint agains a wall message, 
	 *  'newavatar' = User has opload new avatar, 'commentToWM' = New comment to your update
	 * Register, complaint, newavatar is sent only to site admin, commentToWM to owner user of wall update
	 * Link is optional, defaul null. Could be a link to Userprofile, or singlepage wall update.
	 * Itemtext is text from comments or complaints to be sent by mail..
	 * Result: send mail, return true or false
	 */
	 
	function sendMails ($fromUserID, $toUserID, $event, $link=null, array $data) {
        global $xoopsConfig, $xoopsUser;	
		$date = date('m-d-Y H:i:s',time());
		$mail = new XoopsMultiMailer;
		$wall = new Wall_Updates;
		$tpl = new XoopsTpl();
		$message = '';
		
		// From and To user ids
		$FromUser = new xoopsUser($fromUserID);
		 $from_avatar = $wall->Gravatar($fromUserID);
		 $from_avatarlink = "<img class='left' src='".XOOPS_URL."/uploads/".$from_avatar."' height='90px' width='90px'>";
		
		$ToUser = new xoopsUser($toUserID);
		 $To_avatar = $wall->Gravatar($toUserID);
		 $To_avatarlink = "<img class='left' src='".XOOPS_URL."/uploads/".$To_avatar."' height='90px' width='90px'>";
		 
		// Senders username
		$SendName = $FromUser->getVar('uname');
		$SendNameUrl = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$SendName."'>".$SendName."</a>";

		// Recievers username and email
		$RecieveName = $ToUser->getVar('uname');
		$RecieveNameUrl = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$RecieveName."'>".$RecieveName."</a>";

		// Checking content of 'event' to send right message
		if ($event == 'register') {
			$subject = _SMALLWORLD_MAIL_REGISTERSUBJECT.$xoopsConfig['sitename'];
			
			$registername = $SendName;
			$To_avatarlink = "<img class='left' src='".XOOPS_URL."/modules/smallworld/images/genderless.png' height='90px' width='90px'>";
			
			$tpl = new XoopsTpl();
			$tpl->assign('registername',$registername);
			$tpl->assign('sitename',$xoopsConfig['sitename']);
			$tpl->assign('registerurl',$SendNameUrl);
			$tpl->assign('registerlink',$To_avatarlink);
			
			$lnk = XOOPS_ROOT_PATH .'/modules/smallworld/language/'.$xoopsConfig['language'].'/mailTpl/mail_register.html';
			$message = $tpl->fetch($lnk);
			$mail->Body = $message;
			$toMail = $xoopsConfig['adminmail'];
		
		// Send email to admin if red/yellow card has been pressed indicating a "bad" thread has been found.
		} elseif ($event == 'complaint') {
			
			$subject = _SMALLWORLD_MAIL_COMPLAINT.$xoopsConfig['sitename'];
				
			$senders_id = $fromUserID;
			$senders_name = stripslashes($data['byuser']);
			$against_user = stripslashes($data['a_user']);
			$time = date('d-m-Y H:i:s',$data['time']);
			$link = stripslashes($data['link']);

			$tpl = new XoopsTpl();
			$tpl->assign('sendername',$senders_name);
			$tpl->assign('against',$against_user);
			$tpl->assign('time',$time);
			$tpl->assign('link',$link);
			$tpl->assign('sitename',$xoopsConfig['sitename']);

			$lnk = XOOPS_ROOT_PATH .'/modules/smallworld/language/'.$xoopsConfig['language'].'/mailTpl/mail_complaint.html';
			$message = $tpl->fetch($lnk);
			$mail->Body = $message;
			$toMail = $xoopsConfig['adminmail'];
		
		} elseif ($event == 'commentToWM') {
			$subject = _SMALLWORLD_MAIL_NEWCOMMENT.$xoopsConfig['sitename'];
								
				$ownermessage = stripslashes($this->getOwnerUpdateFromMsgID($data['msg_id_fk']));
				if(preg_match('/UPLIMAGE/',$ownermessage)) {
                    $ownmsg = str_replace("UPLIMAGE ", "", $ownermessage);
                    $ownermessage = "<img width='300px' src='".$ownmsg."' style='margin: 5px 0px;' />";
                }

                
                
				$owner = Smallworld_getOwnerFromComment ($data['msg_id_fk']);
				 $OwnerUser = new xoopsUser($owner);
				  $Owner_avatar = $wall->Gravatar($owner);
				  $Owner_avatarlink = "<img class='left' src='".XOOPS_URL."/uploads/".$Owner_avatar."' height='90px' width='90px'>";
				  $OwnerName = $OwnerUser->getVar('uname');
				  $OwnerNameUrl = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$OwnerName."'>".$OwnerName."</a>";
				
				$replylink  = "<a href='".XOOPS_URL."/modules/smallworld/permalink.php?ownerid=".$owner."&updid=".$data['msg_id_fk']."'>";
				$replylink .= _SMALLWORLD_SEEANDREPLYHERE."</a>";
				
				$tpl = new XoopsTpl();
				$tpl->assign('recievename', $RecieveName);
				$tpl->assign('ownername', $OwnerName);
				$tpl->assign('ownernameurl',$OwnerNameUrl);
				$tpl->assign('sendname', $SendName);
				$tpl->assign('sendnameurl',$SendNameUrl);
				$tpl->assign('sitename', $xoopsConfig['sitename']);
				$tpl->assign('ownermessage', $ownermessage);
				$tpl->assign('from_avatarlink', $Owner_avatarlink);
				$tpl->assign('to_avatarlink', $Owner_avatarlink);
				$tpl->assign('itemtext', stripslashes($data['comment']));
				$tpl->assign('itemtextdate',$date);
				$tpl->assign('replylink',$replylink);
				$lnk = XOOPS_ROOT_PATH .'/modules/smallworld/language/'.$xoopsConfig['language'].'/mailTpl/mail_newcomment.html';
				$message = $tpl->fetch($lnk);
				$mail->Body = $message;
			
			$toMail = $ToUser->getVar('email');
			
		}
		
		elseif ($event == 'friendshipfollow') {
			$subject = _SMALLWORLD_MAIL_NEWFRIENDFOLLOWER.$xoopsConfig['sitename'];
			$link  = "<a href='".XOOPS_URL."/modules/smallworld/index.php'>";
			$link .= _SMALLWORLD_GOTOSMALLWORLDHERE."</a>";
			
			$tpl = new XoopsTpl();
			$tpl->assign('toUser',$RecieveName);
			$tpl->assign('date',$date);
			$tpl->assign('link',$link);
			$tpl->assign('sitename',$xoopsConfig['sitename']);

			$lnk = XOOPS_ROOT_PATH .'/modules/smallworld/language/'.$xoopsConfig['language'].'/mailTpl/mail_attencionneeded.html';
			$message = $tpl->fetch($lnk);
			$mail->Body = $message;
			$toMail = $ToUser->getVar('email');
		}
		
		
		$mail->IsMail();
		$mail->IsHTML(true);
		$mail->AddAddress($toMail);
		$mail->Subject = $subject;
		
		
		if(!$mail->Send())
		{}
		else {
		}	
	}
	
	/*
	 From msg_id_fk get userids in the thread and return unique array
	*/
	function getPartsFromComment ($msg_id_fk) {
	global $xoopsDB;
		$parts = array();
		$sql = "SELECT uid_fk FROM ".$xoopsDB->prefix('smallworld_comments')." WHERE msg_id_fk = '".$msg_id_fk."'";
		$result = $xoopsDB->queryF ($sql);
		while ($r = $xoopsDB->fetchArray($result)) {
			$parts[] = $r['uid_fk'];
		}
		return array_unique($parts);
	}

	function getOwnerUpdateFromMsgID ($msgid) {
	 global $xoopsDB;
		$sql = "Select message from ".$xoopsDB->prefix('smallworld_messages')." where msg_id = '".$msgid."'";
		$result = $xoopsDB->queryF($sql);
		while ($r = $xoopsDB->fetchArray($result)) { 
			$message = $r['message'];
		}
		return $message;
	}
	
}
?>