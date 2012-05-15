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



// Moderrated and fitted from the tutorial by Srinivas Tamada http://9lessons.info

class Wall_Updates 
{
    /**
     * @Get array of updates
     * @param int $last
     * @param int $uid
     * @param array $followes
     * @return array
     */      
    public function Updates($last,$uid, $followers) {
        global $xoopsUser, $xoopsDB, $moduleConfig;
        $hm = smallworld_GetModuleOption('msgtoshow');
        $i=0;
        if ($last == 0) {
            $query = "SELECT M.msg_id, M.uid_fk, M.priv, M.message, M.created, U.username FROM ".$xoopsDB->prefix('smallworld_messages')
                . " M, ".$xoopsDB->prefix('smallworld_user')." U  WHERE M.uid_fk=U.userid and M.uid_fk='".$uid."'";
        } elseif ($last > 0) {
            $query = "SELECT M.msg_id, M.uid_fk, M.priv, M.message, M.created, U.username FROM "
                . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
                . " U  WHERE M.uid_fk=U.userid and M.uid_fk='".$uid."' and M.msg_id < '".$last."'";
        } elseif ($last == 'a') {
            $query = "SELECT M.msg_id, M.uid_fk, M.priv, M.message, M.created, U.username FROM "
                . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
                . " U  WHERE M.uid_fk=U.userid and M.uid_fk='".$uid."'";            
        }
        if (is_array($followers)){
            foreach ($followers as $k => $v) {
                if ($last>0) {
                    $query .= " OR M.uid_fk=U.userid and M.uid_fk= '".$v."' and M.msg_id < '".$last."'";
                } elseif ($last == 0) {
                    $query .= " OR M.uid_fk=U.userid and M.uid_fk= '".$v."'";
                } elseif ($last == 'a') {
                    $query .= " OR M.uid_fk=U.userid and M.uid_fk= '".$v."'";
                }
                $i++;
            }
        } 
        if (!is_array($followers)) {
            $followers = $uid;
            if ($last > 0) {
                    $query .= " OR M.uid_fk=U.userid and M.uid_fk= '".$followers."' and M.msg_id < '".$last."'";
            } elseif ($last == 0) {
                $query .= " OR M.uid_fk=U.userid and M.uid_fk= '".$followers."'";
            } elseif ($last == 'a') {
                $query .= " OR M.uid_fk=U.userid and M.uid_fk= '".$followers."'";
            }
        }
            
        if ($last>0) {
            $query .= " order by created DESC LIMIT ".$hm;
        } elseif ($last == 'a') {
                $query .= " order by M.msg_id DESC LIMIT ".$hm;
        } else {
            $query .= " order by created DESC LIMIT ".$hm;
        }
        $result=$xoopsDB->queryF($query);
        $count = $xoopsDB->getRowsNum($result);
        if ($count < 1) {
            return false;
        } else {
            while ($row = $xoopsDB->fetchArray($result)) { 
                $data[]=$row;
            }
            if(!empty($data)) {
                return $data;    
            }
        }
   }

    /**
     * @Get comments based on msg id
     * @param int $msg_id
     * @return array
     */  
    public function Comments($msg_id)
    {
        global $xoopsUser, $xoopsDB;
        $query = "SELECT C.msg_id_fk, C.com_id, C.uid_fk, C.comment, C.created, U.username FROM "
            . $xoopsDB->prefix('smallworld_comments')." C, ".$xoopsDB->prefix('smallworld_user')
            . " U WHERE C.uid_fk=U.userid and C.msg_id_fk='".$msg_id."' order by C.com_id asc ";
        $result = $xoopsDB->queryF($query);
        $i = $xoopsDB->getRowsNum($result);
        while ($row = $xoopsDB->fetchArray($result)) {
            $data[]=$row;
        }
        if(!empty($data)) {
            return $data;
        }
    }
    
    /**
     * @Get user image based on uid
     * @param int $uid
     * @return string
     */ 
    public function Gravatar($uid)
    {
        global $xoopsUser, $xoopsDB;
        $image='';
        $sql = "SELECT userimage FROM ".$xoopsDB->prefix('smallworld_user')." WHERE userid = '".$uid."'";
        $result = $xoopsDB->queryF($sql);
        while ($r = $xoopsDB->fetchArray($result)) {
            $image = $r['userimage'];
        }
        
        $type = Array(
                    1 => 'jpg', 
                    2 => 'jpeg', 
                    3 => 'png', 
                    4 => 'gif'
                );
        
        $ext = explode(".",$image);
        
        if (@!in_array(strtolower ($ext[1]), $type) || $image == '') {
            $avt = new XoopsUser($uid);
            $avatar = $avt->user_avatar(); 
        } else {
            $avatar = $image;
        }
        return $avatar;
    }
    
    /**
     * @Insert update
     * @param int $uid
     * @param string $update
     * @param int $priv
     * @return array
     */  
    public function Insert_Update($uid, $update,$priv) 
    {
        global $xoopsUser, $xoopsDB;
        $update=Smallworld_sanitize(htmlentities($update, ENT_QUOTES,"UTF-8"));
        $time=time();      
        if (!isset($priv)) {
            $priv = 0;
        }
        $query = "SELECT msg_id,message FROM ".$xoopsDB->prefix('smallworld_messages')
            . " WHERE uid_fk='".$uid."' order by msg_id desc limit 1";
        $result = $xoopsDB->queryF($query);
        if ($update!=$result['message']) {
            $query = "INSERT INTO ".$xoopsDB->prefix('smallworld_messages')
                . " (message, uid_fk, priv, created) VALUES ('".$update."', '".$uid."', '".$priv."', '".$time."')";
            $result = $xoopsDB->queryF($query);
            $newquery = "SELECT M.msg_id, M.uid_fk, M.priv, M.message, M.created, U.username FROM "
                . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
                . " U where M.uid_fk=U.userid and M.uid_fk='".$uid."' order by M.msg_id desc limit 1 ";
            $result2 = $xoopsDB->queryF($newquery);
            while ($row = $xoopsDB->fetchArray($result2)) {
                $data[]=$row;
            }
            $count = $xoopsDB->getRowsNum($result2);
            if ($count < 1) {
                return false;
            } else {
                while ($row = $xoopsDB->fetchArray($result2)) { 
                    $data[]=$row;
                }
                if(!empty($data)) {
                    return $data;    
                }
            }
        }
    }
    
    /**
     * @Insert comment
     * @param int $uid
     * @param int $msgid
     * @param string $comment
     * @return string / void
     */  
    public function Insert_Comment($uid,$msg_id,$comment) 
    {
        global $xoopsUser, $xoopsDB;
        $comment=Smallworld_sanitize(htmlentities($comment, ENT_QUOTES,"UTF-8"));
           $time=time();    
        $query = "SELECT com_id,comment FROM ".$xoopsDB->prefix('smallworld_comments')
            . " WHERE uid_fk='".$uid."' and msg_id_fk='".$msg_id."' order by com_id desc limit 1 ";
        $result = $xoopsDB->fetchArray($query);
        if ($comment!=$result['comment']) {
            $query ="INSERT INTO ".$xoopsDB->prefix('smallworld_comments')
                . " (comment, uid_fk,msg_id_fk,created) VALUES ('".$comment."', '".$uid."','".$msg_id."', '".$time."')";
            $result = $xoopsDB->queryF($query);
            $newquery = "SELECT C.com_id, C.uid_fk, C.comment, C.msg_id_fk, C.created, U.username FROM "
                . $xoopsDB->prefix('smallworld_comments')." C, ".$xoopsDB->prefix('smallworld_user')
                . " U where C.uid_fk=U.userid and C.uid_fk='".$uid."' and C.msg_id_fk='".$msg_id."' order by C.com_id desc limit 1 ";
            $result2 = $xoopsDB->queryF($newquery);
               while ($row = $xoopsDB->fetchArray($result2)) {
                $data[0]=$row;
            }
             return $data[0];
        } else {
            return false;
        }
    }

    /**
     * @Get array of users followers
     * @param int $me
     * @return array
     */  
    public function getFollowers ($me) 
    {
        global $xoopsDB, $xoopsUser;
        $query = "SELECT you FROM ".$xoopsDB->prefix('smallworld_followers')." WHERE me = '".$me."'";
        $result=$xoopsDB->queryF($query);
        $i = $xoopsDB->getRowsNum($result);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $data[]=$row;
        }
        if ($i == 0) {
            $data = array($me);
        }
        if(!empty($data)) {
            return $data;    
        }    
    }
    
    /**
     * @count all votes
     * @param int $type
     * @param int $val
     * @param int $msgid
     * @return int
     */  
    public function countVotes ($type, $val, $msgid) 
    {
        global $xoopsUser, $xoopsDB;
        $query = "Select SUM(".$val.") as sum from ".$xoopsDB->prefix('smallworld_vote')." where msg_id = '".$msgid."' and com_id = '0'";
        $result=$xoopsDB->queryF($query);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $sum = $row['sum'];
        }
        if ($sum==''){
            $sum = '0';
        }
        return $sum;
    }
    
    /**
     * @Count comments votes
     * @param int $type
     * @param int $val
     * @param int $comid
     * @param int $msgid
     * @returns int
     */  
    public function countVotesCom ($type, $val, $comid, $msgid) 
    {
        global $xoopsUser, $xoopsDB;
        $query = "Select SUM(".$val.") as sum from ".$xoopsDB->prefix('smallworld_vote')
            . " where com_id = '".$comid."' AND msg_id = '".$msgid."'";
        $result=$xoopsDB->queryF($query);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $sum = $row['sum'];
        }
        if ($sum==''){
            $sum = '0';
        }
        return $sum;
    }
    
    /**
     * @Check is user is friend
     * @param int $userid
     * @param string $type
     * @param int $comid
     * @param int $msgid
     * @return int
     */  
    public function HasVoted ($userid, $type, $comid, $msgid) 
    {
        global $xoopsUser, $xoopsDB;
        if ($type == 'msg') {
            $sql = "Select * from ".$xoopsDB->prefix('smallworld_vote')
                . " where com_id = '0' and msg_id = '".$msgid."' and user_id = '".$userid."'";
            $result = $xoopsDB->queryF($sql);
            $i = $xoopsDB->getRowsNum($result);            
        } else {
            $sql = "Select * from ".$xoopsDB->prefix('smallworld_vote')
                . " where com_id = '".$comid."' and msg_id = '".$msgid."' and user_id = '".$userid."'";
            $result = $xoopsDB->queryF($sql);
            $i = $xoopsDB->getRowsNum($result);        
        }
        return $i;
    }
    
    /**
     * @count messages per user
     * @param int $userid
     * @return int
     */  
    public function CountMsges ($userid) 
    {
        global $xoopsDB;
        $sql = "SELECT (SELECT COUNT(*) FROM ".$xoopsDB->prefix('smallworld_comments')
            . " WHERE uid_fk = '".$userid."') + (SELECT COUNT(*) FROM "
            . $xoopsDB->prefix('smallworld_messages')." WHERE uid_fk = '".$userid."')";
        $result = $xoopsDB->queryF($sql);
        $sum = $xoopsDB->fetchRow($result);
        return $sum[0];
    }
    
    /**
     * @Show permaling updates
     * @param int $updid
     * @param int $uid
     * @param int $ownerID
     * @return array
     */  
    public function UpdatesPermalink($updid,$uid, $ownerID) 
    {
        global $xoopsUser, $xoopsDB, $moduleConfig;
        $query = "SELECT M.msg_id, M.uid_fk, M.message, M.created, M.priv, U.username FROM "
            . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
            . " U  WHERE M.uid_fk=U.userid and M.uid_fk='".$ownerID."'";            
        $query .= " AND M.msg_id = '".$updid."'";
        $query .= " order by M.created DESC LIMIT 1";            
        $result=$xoopsDB->queryF($query);
        $count = $xoopsDB->getRowsNum($result);
        if ($count < 1) {
            return false;
        } else {
            while ($row = $xoopsDB->fetchArray($result)) { 
                $data[]=$row;
            }
            if(!empty($data)) {
                return $data;    
            }
        }
    }

    /**
     * @Get share link
     * @param int $updid
     * @param int $ownerID
     * @return array
     */  
    public function UpdatesSharelink($updid,$ownerID) 
    {
        global $xoopsUser, $xoopsDB, $moduleConfig;
        $query = "SELECT M.msg_id, M.uid_fk, M.message, M.created, M.priv, U.username FROM "
            . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
            . " U WHERE M.uid_fk=U.userid and M.uid_fk='".$ownerID."' and M.priv = 0";            
        $query .= " AND M.msg_id = '".$updid."'";
        $query .= " order by created DESC LIMIT 1";        
        $result=$xoopsDB->queryF($query);
        $count = $xoopsDB->getRowsNum($result);
        if ($count < 1) {
            return false;
        } else {
            while ($row = $xoopsDB->fetchArray($result)) { 
                $data[]=$row;
            }
            if(!empty($data)) {
                return $data;    
            }
        }
    }
    
    /**
     * @Get sharing link
     * @param int $id
     * @param int $priv
     * @return string
     */  
    function GetSharing ($id, $priv) {
        if ($priv != 1) {
            $text  = " | <span class='smallworld_share' id='smallworld_share'>";
            $text .= "<a class='share' id='share-page".$id."' href='javascript:void(0);'>"._SMALLWORLD_SHARELINK."</a></span>";
        } else {
            $text = "";
        }
        return $text;
    }

    /**
     * @Get content for sharing div
     * @param int $id
     * @param int $priv
     * @param string $permalink
     * @param string $desc
     * @param string $username
     * @return string
     */          
    function GetSharingDiv ($id, $priv, $permalink,$desc,$username) {
        if ($priv != 1) {    
            $text   = "<div style='display: none;' class='smallworld_bookmarks' id='share-page' name='share-page".$id."'>";            
            $text  .= "<span name='share-page".$id."' rel1='".$desc."' rel2= '".$username."' rel=".$permalink." id='basicBookmark' title='"._SMALLWORLD_SHAREBOX_TITLE."'>";
            $text  .= "</span></div>";
        } else {
            $text="";
        }
        return $text;
    }
    
}
?>