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

 
class SmallWorldImages 
{
    /**
     * @Create folders
     * @param int $userID
     * @return void
     */       
    function createAlbum ($userID)
    {
        $dir  = XOOPS_ROOT_PATH.'/uploads/albums_smallworld';
        if (!file_exists($dir.'/'.$userID.'/thumbnails') || !file_exists($dir.'/'.$userID.'/')) {
            if(!is_dir($dir."/")) { 
                mkdir($dir, 0777);
            } else {
                mkdir($dir.'/'.$userID, 0777);
                mkdir($dir.'/'.$userID."/thumbnails", 0777);
                Smallworld_CreateIndexFiles ($dir.'/');
                Smallworld_CreateIndexFiles($dir.'/'.$userID."/");
                Smallworld_CreateIndexFiles($dir.'/'.$userID."/thumbnails/");
            }
        }
    }
    
    /**
     * @View user album. Userid = owner, user = visitor
     * @param int $userID
     * @param int $user
     * @return array
     */  
    function viewalbum ($userID, $user) 
    {
        global $xoopsUser, $xoopsDB, $xoopsTpl;
        $post=array();
        $checkFriend = new SmallWorldUser;
        if ($checkFriend->friendcheck($userID, $user)!= 0){
        // check friend is good to go
            $sql = "SELECT * FROM ".$xoopsDB->prefix("smallworld_images")." WHERE userid = '".$user."'";
            $result = $xoopsDB->query($sql);
            $i = 0;
            while ($sqlfetch=$xoopsDB->fetchArray($result)) {
                $post[$i]['id'] = stripslashes($sqlfetch['id']);
                $post[$i]['userid'] = stripslashes($sqlfetch['userid']);
                $post[$i]['imgurl'] = stripslashes($sqlfetch['imgurl']);
                $post[$i]['desc'] = Smallworld_cleanup_string($sqlfetch['desc']);
                $post[$i]['alt'] = Smallworld_cleanup_string($sqlfetch['desc']);
                $post[$i]['time'] = stripslashes($sqlfetch['time']);
                $post[$i]['editimg'] = "<span class='smallworld_edit_imgdesc_holder'><img src='images/edit_icon.png'/></span> <a class='smallworld_edit_imgdesc' href='editimages.php'>"._SMALLWORLD_EDITDESCRIPTION."</a>";
                $i++;
            }
            
            return $post;
        } else {
            //Not a friends album
            return false;
        }
    }    
    
    /**
     * @Get image count for user
     * @param int $userid
     * @return int
     */ 
    function count ($userid) {
        global $xoopsDB;
        $sql = "SELECT * FROM ".$xoopsDB->prefix("smallworld_images")." WHERE userid = '".$userid."'";
        $result = $xoopsDB->queryF($sql);
        return $xoopsDB->getRowsNum($result);
    }    
}
?>