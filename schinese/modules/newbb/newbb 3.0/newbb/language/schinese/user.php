<?php
// For user info
// If you have customized userbar, define here.
require_once XOOPS_ROOT_PATH."/modules/newbb/class/user.php";
class User_language extends User
{
    function User_language()
    {
    }

    function getUserbar()
    {
	    global $xoopsModuleConfig, $xoopsUser, $isadmin;
	    
    	$userbar = array();
    	if (empty($xoopsModuleConfig['userbar_enabled'])) return $userbar;
    	
    	$user = $this->user;
        $userbar[] = array("link" => XOOPS_URL . "/userinfo.php?uid=" . $user->getVar("uid"), "name" => _PROFILE);
        
		if (is_object($xoopsUser)) {
	        $userbar[] = array("link" => "javascript:void openWithSelfMain('" . XOOPS_URL . "/pmlite.php?send2=1&amp;to_userid=" . $user->getVar("uid") . "', 'pmlite', 450, 380);", "name" => _MD_PM);
        }
        if ($user->getVar('user_viewemail') || $isadmin) {
	        $userbar[] = array("link" => "javascript:void window.open('mailto:" . $user->getVar('email') . "', 'new');", "name" => _MD_EMAIL);
        }
        if ($url = $user->getVar('url')) {
	        $userbar[] = array("link" => "javascript:void window.open('" . $url . "', 'new');", "name" => _MD_WWW);
        }
        if ($icq = $user->getVar('user_icq')) {
	        $userbar[] = array("link" => "javascript:void window.open('http://friend.qq.com/cgi-bin/friend/user_show_info?ln=" . $icq."', 'new');", "name" => _MD_ICQ);
        }
        if ($aim = $user->getVar('user_aim')) {
	        $userbar[]= array("link" => "javascript:void window.open('aim:goim?screenname=" . $aim . "&amp;message=Hi+" . $aim . "+Are+you+there?" . "', 'new');", "name" => _MD_AIM);
        }
        if ($yim = $user->getVar('user_yim')) {
        	$userbar[] = array("link" => "javascript:void window.open('http://edit.yahoo.com/config/send_webmesg?.target=" . $yim . "&.src=pg" . "', 'new');", "name" => _MD_YIM);
    	}
        if ($msn = $user->getVar('user_msnm')) {
	        $userbar[] = array("link" => "javascript:void window.open('http://members.msn.com?mem=" . $msn . "', 'new');", "name" => _MD_MSNM);
        }
        
		return $userbar;
    }
}
?>