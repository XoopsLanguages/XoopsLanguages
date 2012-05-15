<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:            The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:                http://www.fsf.org/copyleft/gpl.html GNU public license
* @module:                Smallworld
* @Author:                Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:            2011 Culex
* @Repository path:        $HeadURL$
* @Last committed:        $Revision$
* @Last changed by:        $Author$
* @Last changed date:    $Date$
* @ID:                    $Id$
**/

 
class SmallWorldUser
{

    /**
     * @Check if user has profile
     * @param int $userID
     * @return int
     */ 
    function CheckIfProfile ($userID) 
    {
        global $xoopsUser, $xoopsDB;
        $i=0;
        $sql = "SELECT * FROM ".$xoopsDB->prefix('smallworld_user')." WHERE userid = ".$userID;
        $result = $xoopsDB->queryF($sql);
        $i = $xoopsDB->getRowsNum($result);
        return $i;
    }

    /**
     * @Create user
     * @param int $userid
     * @return void
     */       
     function createUser ($userid) 
    {
        global $xoopsUser, $xoopsDB;
        $a = new $xoopsUser($userid);
        $b = $a->uname();
        $sql = "INSERT INTO ".$xoopsDB->prefix('smallworld_user')." (userid) VALUES (".intval($userid).")";
        $result = $xoopsDB->queryF($sql);
    } 

    /**
     * @Check is user is smallworld user
     * @return void
     */      
    function chkUser() 
    {
        global $xoopsUser,$xoopsTpl;
        $greeting = "<br>";
        $greeting .= _SMALLWORLD_NOTYETUSER_GREETING." ".$xoopsUser->uname().".<br><br>";
        $greeting .= _SMALLWORLD_NOTYETUSER_BOXTEXT;
        
        $xoopsTpl->assign('notyetusercontent',$greeting);
        $xoopsTpl->assign('check',0);
    }

    /**
     * @Check is user is friend
     * @param int $user
     * @param int $userID
     * @return int
     */         
    function friendcheck($user,$userID)
    {
        global $xoopsUser, $xoopsDB;
        $respons = array();
        if ($user == $userID) {
            $respons[0] = 2;
            return $respons;
        }
        $sql  = "SELECT * FROM ".$xoopsDB->prefix('smallworld_friends')." WHERE me = '".intval($user)."' AND you = '".intval($userID)."'";
        $result = $xoopsDB->query($sql);
        $i = $xoopsDB->getRowsNum($result);
        if ($i == 0) {
            $sql  = "SELECT * FROM ".$xoopsDB->prefix('smallworld_friends')." WHERE you = '".intval($user)."' AND me = '".intval($userID)."'";
            $result = $xoopsDB->query($sql);
            $i = $xoopsDB->getRowsNum($result);
        }
        while ($row = $xoopsDB->fetchArray($result)) {
            if ($i == 0 and $i == '') {
                $respons[0] = 0;
            }
                    
            if ($i == 1 AND $row['status']==1) {
                $respons[0] = 1;
            }
            if ($i == 1 AND $row['status']==2) {
                $respons[0] = 2;
            }
                return $respons;
        }
    }

    /**
     * @Get name from userid
     * @param int $userID
     * @return string
     */       
    function getName($userID){
        global $xoopsUser, $xoopsDB;
        $sql = "SELECT username FROM ".$xoopsDB->prefix('smallworld_user')." WHERE userid = '".intval($userID)."'";
        $result = $xoopsDB->queryf($sql);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $name = $row['username'];
        }
        return $name;
    }

    /**
     * @Check if user is follower
     * @param int $userid
     * @param int $friendid
     * @return int
     */        
    function following_or ($userid, $friendid) 
    {
        global $xoopsDB,$xoopsUser;
        $respons[0] = 0;
        if ($userid != $friendid) {
            $sql  = "SELECT * FROM ".$xoopsDB->prefix('smallworld_followers')." WHERE me = '".intval($userid)."' AND you = '".intval($friendid)."'";
            $result = $xoopsDB->query($sql);
            $i = $xoopsDB->getRowsNum($result);
            while ($row = $xoopsDB->fetchArray($result)) {
                if ($i == 0) {
                    $respons[0] = 0;
                }
                        
                if ($i == 1 AND $row['status']==1) {
                    $respons[0] = 1;
                }
                if ($i == 1 AND $row['status']==2) {
                    $respons[0] = 2;
                }
            }
        } else {
        }
        return $respons;
    }
    
    /**
     * @Get requests
     * @param int $userid
     * @return array
     */         
    function getRequests($userid) 
    {
        global $xoopsDB,$xoopsUser;
        $msg=array();
        $sql  = "SELECT * FROM ".$xoopsDB->prefix('smallworld_friends')." WHERE you = '".intval($userid)."' AND status = '1'";
        $result = $xoopsDB->queryF($sql);
        $i = $xoopsDB->getRowsNum($result);
        $db = new SmallWorldDB;
        $Wall = new Wall_Updates();
        $myavatar = $Wall->Gravatar($userid);
        $start = 0;
        while ($row = $xoopsDB->fetchArray($result) AND $start <= count($row)) {
            $msg[$start]['friendname'] = $this->getName($row['me']);
            $msg[$start]['img'] = $Wall->Gravatar($row['me']);
            $msg[$start]['friendimage'] = "<img src='".XOOPS_UPLOAD_URL."/".$msg[$start]['img']."' height='40px'/>";
            $msg[$start]['frienddate'] = date('d-m-Y',$row['date']);
            $msg[$start]['accept'] = '<a id="smallworldrequestlink" href = "javascript:AcceptDenyFriend(1,'.$row['me'].','.$row['you'].','.$start.');">'._SMALLWORLD_ACCEPT.'</a>';
            $msg[$start]['deny'] = '<a id="smallworldrequestlink" href = "javascript:AcceptDenyFriend(-1,'.$row['me'].','.$row['you'].','.$start.');">'._SMALLWORLD_DENY.'</a>';
            $msg[$start]['later'] = '<a id="smallworldrequestlink" href = "javascript:AcceptDenyFriend(0,'.$row['me'].','.$row['you'].','.$start.');">'._SMALLWORLD_LATER.'</a>';
            $msg[$start]['cnt'] = $start;
            $start++;
        }
        return $msg;
    }

    /**
     * @Get partner
     * @param string $name
     * @return int
     */     
    function spousexist($name) {
        global $xoopsUser, $xoopsDB;
        $sql = "SELECT * FROM ".$xoopsDB->prefix('smallworld_user')." WHERE username = '".$name."'";
        $result = $xoopsDB->queryf($sql);
        $i = $xoopsDB->getRowsNum($result);
        return $i;
    }    
}
?>