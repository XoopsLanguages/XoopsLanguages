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

class SmallWorldDB 
{
    /**
     * getJobsToDiv function   
     * @param int $id
     * @returns Array
     */    
     function getJobsToDiv($id) 
    {
        global $xoopsUser, $xoopsDB;
        $msg=array();
        $new=array();    
        $sql = "SELECT employer,position,jobstart,jobstop,description  FROM "
            . $xoopsDB->prefix("smallworld_user")." WHERE userid ='" . $id . "'";
        $result = $xoopsDB->query($sql);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $employer = unserialize($row['employer']);
            $position = unserialize($row['position']);
            $jobstart = unserialize($row['jobstart']);
            $jobstop = unserialize($row['jobstop']);
            $description = unserialize($row['description']);
        }
        $start = 0;
        $end = count($employer) - 1;
        while ($start <= $end) {
            $msg[$start]['employer'] = $employer[$start];
            $msg[$start]['position'] = $position[$start];
            $msg[$start]['jobstart'] = $jobstart[$start];
            $msg[$start]['jobstop'] = $jobstop[$start];
            $msg[$start]['description'] = $description[$start];
            $start++;
        }
        return $msg;
    }

    /**
     * getSchoolToDiv function   
     * @param int $id
     * @returns Array
     */
    function getSchoolToDiv($id) 
    {
        global $xoopsUser, $xoopsDB,$arr7;
        $msg=array();
        $sql = "SELECT school_type,school,schoolstart,schoolstop FROM "
            . $xoopsDB->prefix("smallworld_user") . " WHERE userid ='" . $id . "'";
        $result = $xoopsDB->query($sql);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $school_type = unserialize($row['school_type']);
            $school    = unserialize($row['school']);
            $schoolstart = unserialize($row['schoolstart']);
            $schoolstop = unserialize($row['schoolstop']);
        }
        $start = 0;
        $end = count($school_type) - 1;
        while ($start<=$end) {
            $msg[$start]['school_type'] = $school_type[$start];
            $msg[$start]['school'] = $arr7[$school[$start]];
            $msg[$start]['schoolstart'] = date('Y', $schoolstart[$start]);
            $msg[$start]['schoolstop'] = date('Y', $schoolstop[$start]);
            $start++;
        }
        return $msg;
    }
    
    /**
     * getScreennamesToDiv function   
     * @param int $id
     * @returns Array
     */     
    function getScreennamesToDiv($id) 
    {
        global $xoopsUser, $xoopsDB,$arr06;
        $msg=array();
        $sql = "SELECT screenname_type,screenname FROM "
            . $xoopsDB->prefix("smallworld_user") . " WHERE userid ='" . $id . "'";
        $result = $xoopsDB->query($sql);
        while ($row = $xoopsDB->fetchArray($result)) { 
            $screenname_type = unserialize($row['screenname_type']);
            $screenname    = unserialize($row['screenname']);
        }
        $start = 0;
        $end = count($screenname_type) - 1;
        while ($start <= $end) {
        $msg[$start]['screenname'] = $screenname_type[$start];
        $msg[$start]['screenname_type'] = $arr06[$screenname[$start]];
        $msg[$start]['link'] = "<span class='smallworld_website'>"
            . Smallworld_sociallinks($screenname[$start], $msg[$start]['screenname']);
        $start++;
        }
        return $msg;
    }
    
    /**
     * getVar function   
     * @param int $id
     * @param string $var
     * @returns Array
     */   
    function getVar($id, $var)
    {
        global $xoopsUser, $xoopsDB;
        $sql = "SELECT ".$var." FROM ".$xoopsDB->prefix('smallworld_user')." WHERE userid = '".$id."'";
        $result = $xoopsDB->queryF($sql);
        if ($xoopsDB->getRowsNum($result) < 1) {
            return _SMALLWORLD_REPLY_NOTSPECIFIED;
        }
            while ($row = $xoopsDB->fetchArray($result)) { 
                $msg[$var] = $row[$var];
            }
            return $msg[$var];
    }
    
    /**
     * updateSingleValue function   
     * @param string $table
     * @param int $userid
     * @param string $field     
     * @param int $value
     * @return void
     */     
    function updateSingleValue($table, $userid, $field, $value) 
    {
        global $xoopsUser, $xoopsDB;
        $myts =& MyTextSanitizer::getInstance(); 
        $sql = "UPDATE ".$xoopsDB->prefix($table)." SET "
            . $field . "='" . $myts->addSlashes($value) . "' WHERE userid='" . intval($userid) . "'";
        $result =$xoopsDB->queryF($sql);
    }

    /**
     * saveImage function   
     * @param int $value
     * @return void
     */       
    function saveImage($values)
    {
        global $xoopsUser, $xoopsDB;
        $myts =& MyTextSanitizer::getInstance(); 
        $sql = "INSERT INTO " . $xoopsDB->prefix('smallworld_images') . " VALUES (" . $values . ")";
        $result =$xoopsDB->queryF($sql);
    }

    /**
     * DeleteImage function   
     * @param int $userid
     * @param string $imagename     
     * @return void
     */      
    function DeleteImage($userid, $imagename)
    {
        global $xoopsUser, $xoopsDB;
        $myts =& MyTextSanitizer::getInstance(); 
        $sql = "DELETE FROM ".$xoopsDB->prefix('smallworld_images')
            . " WHERE imgname = '" . stripslashes($imagename) . "' AND userid='" . $userid . "'";
        $result =$xoopsDB->queryF($sql);
    }

    /**
     * handlePosts function     
     * @return void
     */       
    function handlePosts ()
    {
        global $xoopsUser,$xoopsDB;    
        $myts =& MyTextSanitizer::getInstance(); 
        $uid = $xoopsUser->getVar('uid'); 
        $user = new XoopsUser($uid);
        $img  = new SmallWorldImages;
        if ($this->getVar($uid,'userimage') == '') {
            $avatar =$user->user_avatar();
        } else {
            $avatar = $this->getVar($uid, 'userimage');
        }
            
        if ($_POST['relationship'] != '2') {
            $partner = Smallworld_sanitize($_POST['partner']);
        } else {
            $partner = '';
        }
        
        $regdate = time();
        $username = $user->uname();
        $realname = Smallworld_sanitize($_POST['realname']);
        $gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
        $intingender = (isset($_POST['intingender'])) ?
            Smallworld_sanitize(serialize($_POST['intingender'])) : 
            Smallworld_sanitize(serialize(array(0 => '3')));
        $relationship = Smallworld_sanitize($_POST['relationship']);
        $searchrelat = (isset($_POST['searchrelat'])) ?
            Smallworld_sanitize(serialize($_POST['searchrelat'])) : 
            Smallworld_sanitize(serialize(array(0 => '0')));
        $birthday = Smallworld_sanitize(Smallworld_euroToUsDate($_POST['birthday']));
        $birthplace = Smallworld_sanitize($_POST['birthplace']);
        $birthplace_lat = Smallworld_sanitize($_POST['birthplace_lat']);
        $birthplace_lng = Smallworld_sanitize($_POST['birthplace_lng']);
        $birthplace_country = Smallworld_sanitize($_POST['birthplace_country']);
        $birthplace_country_img = (isset($_POST['birthplace_country_img'])) ?
            Smallworld_sanitize($_POST['birthplace_country_img']) : '';
        $politic = Smallworld_sanitize($_POST['politic']);
        $religion = Smallworld_sanitize($_POST['religion']);
        $emailtype = Smallworld_sanitize(serialize($_POST['emailtype']));
        $screenname_type = Smallworld_sanitize(serialize($_POST['screenname_type']));
        $screenname = Smallworld_sanitize(serialize($_POST['screenname']));
        $mobile = Smallworld_sanitize($_POST['mobile']);
        $phone = Smallworld_sanitize($_POST['phone']);
        $adress = Smallworld_sanitize($_POST['adress']);
        $present_city = Smallworld_sanitize($_POST['present_city']);
        $present_lat = Smallworld_sanitize($_POST['present_lat']);
        $present_lng = Smallworld_sanitize($_POST['present_lng']);
        $present_country = Smallworld_sanitize($_POST['present_country']);
        $present_country_img = (isset($_POST['present_country_img'])) ?
            Smallworld_sanitize($_POST['present_country_img']) : '';
        $website = Smallworld_sanitize($_POST['website']);
        $interests = Smallworld_sanitize($_POST['interests']);
        $music = Smallworld_sanitize($_POST['music']);
        $tvshow = Smallworld_sanitize($_POST['tvshow']);
        $movie = Smallworld_sanitize($_POST['movie']);
        $books = Smallworld_sanitize($_POST['books']);
        $aboutme = Smallworld_sanitize($_POST['aboutme']);
        $school_type = Smallworld_sanitize(serialize($_POST['school_type']));
        $school = Smallworld_sanitize(serialize($_POST['school']));
        $schoolstart = Smallworld_sanitize(serialize(Smallworld_DateOfArray ($_POST['schoolstart'])));
        $schoolstop = Smallworld_sanitize(serialize(Smallworld_DateOfArray ($_POST['schoolstop'])));
        $jobemployer = Smallworld_sanitize(serialize($_POST['employer']));
        $jobposition = Smallworld_sanitize(serialize($_POST['position']));
        $jobstart = Smallworld_sanitize(serialize(Smallworld_YearOfArray ($_POST['jobstart'])));
        $jobstop = Smallworld_sanitize(serialize(Smallworld_YearOfArray ($_POST['jobstop'])));
        $jobdescription = Smallworld_sanitize(serialize($_POST['description']));
        
        $sql = '';
        
        if ($_POST['function']=='edit') { 
            // Update all values in user_table
            $sql  = "UPDATE ".$xoopsDB->prefix('smallworld_user')." SET ";
            $sql .= "realname = '".$realname."', username= '".$username."', userimage = '".$avatar."', gender = '".$gender."',";
            $sql .= "intingender = '".$intingender."',relationship = '".$relationship."', partner = '".$partner."', searchrelat = '".$searchrelat."',";
            $sql .= "birthday = '".$birthday."',birthplace = '".$birthplace."',birthplace_lat = '".floatval($birthplace_lat)."',";
            $sql .= "birthplace_lng = '".floatval($birthplace_lng)."',birthplace_country = '".$birthplace_country."',politic = '".$politic."',";
            $sql .= "religion = '".$religion."',emailtype = '".$emailtype."',screenname_type = '".$screenname_type."',";
            $sql .= "screenname = '".$screenname."',mobile = '".floatval($mobile)."',phone = '".floatval($phone)."',adress = '".$adress."',";
            $sql .= "present_city = '".$present_city."',present_lat = '".floatval($present_lat)."',present_lng = '".floatval($present_lng)."',";
            $sql .= "present_country = '".$present_country."',website = '".$website."',interests = '".$interests."',";
            $sql .= "music = '".$music."',tvshow = '".$tvshow."',movie = '".$movie."',";
            $sql .= "books = '".$books."',aboutme = '".$aboutme."',school_type = '".$school_type."',";
            $sql .= "school = '".$school."', schoolstart = '".$schoolstart."',schoolstop = '".$schoolstop."',";
            $sql .= "employer = '".$jobemployer."', position = '".$jobposition."',jobstart = '".$jobstart."',";
            $sql .= "jobstop = '".$jobstop."', description = '".$jobdescription."' ";
            $sql .= "WHERE userid ='".intval($uid)."'"; 
            $result = $xoopsDB->queryF($sql);
            if ($result == false) { die("SQL error:".$sql."");}
        
            $this->EditAdmins ($uid, $realname,$avatar);
            $img->createAlbum ($uid);
        }
        
        if ($_POST['function']=='save') {             
            $sql  = "INSERT INTO ".$xoopsDB->prefix('smallworld_user')." (id, userid, regdate, username, userimage, realname, gender, intingender, relationship, partner, searchrelat, birthday, birthplace, birthplace_lat, birthplace_lng, birthplace_country, politic, religion, emailtype, screenname_type, screenname, mobile, phone, adress, present_city, present_lat, present_lng, present_country, website, interests, music, tvshow, movie, books, aboutme, school_type, school, schoolstart, schoolstop, employer, position, jobstart, jobstop, description, friends, followers, admin_flag) ";
            $sql .= "VALUES ('','".intval($uid)."', '".$regdate."', '".$username."', '".$avatar."', '".$realname."', '".$gender."', '".$intingender."', '".$relationship."', '".$partner."', '".$searchrelat."','";
            $sql .= $birthday."', '".$birthplace."', '".floatval($birthplace_lat)."', '".floatval($birthplace_lng)."', '".$birthplace_country."', '".$politic."', '".$religion."','";
            $sql .= $emailtype."', '".$screenname_type."', '".$screenname."', '".floatval($mobile)."', '".floatval($phone)."', '".$adress."', '".$present_city."', '".floatval($present_lat)."','";
            $sql .= floatval($present_lng)."', '".$present_country."', '".$website."', '".$interests."', '".$music."', '".$tvshow."', '".$movie."', '".$books."', '".$aboutme."', '";
            $sql .= $school_type."', '".$school."', '".$schoolstart."', '".$schoolstop."', '".$jobemployer."', '".$jobposition."', '".$jobstart."', '".$jobstop."', '".$jobdescription."', ";
            $sql .= "'0', '0', '0')";
            $result = $xoopsDB->queryF($sql);
            if ($result == false) {
                die("SQL error:".$sql."");
            }
            $this->SetAdmins ($uid, $username,$realname,$avatar);
            $img->createAlbum ($uid);
        }
    }
    
    /**
     * SetAdmins function   
     * @param int $userID
     * @param string $username
     * @param string $realname
     * @param mixed $avatar
     * @return void
     */  
    function SetAdmins($userID, $username, $realname, $avatar)
    {
        global $xoopsDB, $xoopsUser;
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = "INSERT INTO ".$xoopsDB->prefix('smallworld_admin')
            . " (id,userid,username, realname,userimage,ip,complaint,inspect_start, "
            . "inspect_stop) VALUES ('', '".$userID."', '".$username."','".$realname
            . "', '".$avatar."','".$ip."','0','0','0')";
        $result = $xoopsDB->queryF($sql);
    }

    /**
     * EditAdmins function   
     * @param int $userID
     * @param string $realname
     * @param mixed $avatar
     * @return void
     */       
    function EditAdmins ($userID, $realname, $avatar)
    {
        global $xoopsDB;
        $sql = "UPDATE ".$xoopsDB->prefix('smallworld_admin')." SET realname = '"
            . $realname."', userimage = '".$avatar."' WHERE userid = '".intval($userID)."'";
        $result = $xoopsDB->queryF($sql);
    }
    
    /**
     * alreadycomplaint function   
     * - Check if user has already sent complaint
     * @param string $msg
     * @param int $by
     * @param int $against
     * @return int
     */ 
    function alreadycomplaint ($msg, $by, $against)
    {
        global $xoopsDB;
        $sql = "SELECT * FROM ".$xoopsDB->prefix("smallworld_complaints")
            . " WHERE byuser_id = '" . intval($by) . "' AND owner = '" 
            . intval($against) . "' AND link = '" . addslashes($msg) . "'";
        $result = $xoopsDB->queryF($sql);
        $i = $xoopsDB->getRowsNum($result);
        if ($i < 1) {
            $query  = "INSERT INTO ".$xoopsDB->prefix('smallworld_complaints')
                . " (complaint_id,link,byuser_id,owner) VALUES ('', '"
                . addslashes($msg) . "', '" . intval($by) . "', '" . intval($against) . "')";
        $result = $xoopsDB->queryF($query);
        } else {
        }
        return $i;
    }
    
    /**
     * updateComplaint function
     * @param int $userID
     * @return void
     */             
    function updateComplaint ($userID) 
    {
        global $xoopsDB;
        $sql = "UPDATE " . $xoopsDB->prefix('smallworld_admin')
            . " SET complaint = complaint + 1 "
            . "WHERE userid = '" . intval($userID) . "'";
        $result = $xoopsDB->queryF($sql);
    }

    /**
     * updateInspection function
     * @param int $userID
     * @param int $start
     * @param int stop
     * @return void
     */     
    function updateInspection ($userID, $start, $stop) {
        global $xoopsDB;
        $newstop = $time() + $stop;
        $sql = "UPDATE ".$xoopsDB->prefix('smallworld_admin')
            . " SET inspect_start = '".$time()."', instect_stop = '" . $newstop 
            . "' WHERE userid ='" . intval($userID) . "'";
        $result = $xoopsDB->queryF($sql);
    }

    /**
     * handleImageEdit function
     * @return void
     */       
    function handleImageEdit ()
    {
        global $xoopsDB;
        for ($i=0; $i < count($_POST['id']); $i++) {
            $id = intval($_POST['id'][$i]);
            $desc = $_POST['imgdesc'][$i];    
            $sql = "UPDATE " . $xoopsDB->prefix('smallworld_images') . " SET `desc` = '" 
                . addslashes($desc) . "' WHERE `id`='" . $id . "'";
            $result = $xoopsDB->queryF($sql);
        }
    }

    /**
     * updateInspection function
     * - insert aplication for friendship into db or delete if denied
     * @param int $status
     * @param int $userid
     * @param int stop
     * @return void
     */
    function toogleFriendInvite ($status, $friendid, $userid) 
    {
        global $xoopsDB;
        if ($status == 0) {
            $sql = "INSERT INTO ".$xoopsDB->prefix('smallworld_friends')
                . " (id,me,you,status,date) VALUES ('', '".$userid."', '".$friendid."', '1', UNIX_TIMESTAMP())";
            $result = $xoopsDB->queryF($sql);    
        }
        if ($status > 0) {
            $sql  = "DELETE FROM ".$xoopsDB->prefix('smallworld_friends')
                ." WHERE me = '".intval($friendid)."' AND you = '".intval($userid)."'";
            $sql2  = "DELETE FROM ".$xoopsDB->prefix('smallworld_friends')
                ." WHERE me = '".intval($userid)."' AND you = '".intval($friendid)."'";
            $result = $xoopsDB->queryF($sql);
            $result2 = $xoopsDB->queryF($sql2);
        }
        
    }
    
    /**
     * toogleFollow function
     * - Insert following to db or delete if requested
     * @param int $following
     * @param int $myUid
     * @param int $friend
     * @return void
     */     
    function toogleFollow ($following, $myUid, $friend)
    {
        global $xoopsDB;
        if ($following == 0) {
            $sql = "INSERT INTO ".$xoopsDB->prefix('smallworld_followers')
                ." (id,me,you,status,date) VALUES ('', '".$myUid."', '".$friend."', '1', UNIX_TIMESTAMP())";
            $result = $xoopsDB->queryF($sql);
        }
        if ($following > 0) {
            $sql  = "DELETE FROM ".$xoopsDB->prefix('smallworld_followers')." WHERE you = '".intval($friend)."'";
            $sql .= " AND me = '".intval($myUid)."'";
            $result = $xoopsDB->queryF($sql);
        }        
    }

    /**
     * SetFriendshitStat function
     * @param int $stat
     * @param int $myUid
     * @param int $friend
     * @return void
     */        
    function SetFriendshitStat ($stat, $myUid, $friend)
    {
        global $xoopsDB;
        if ($stat == 1) {
            $sql  = "UPDATE ".$xoopsDB->prefix('smallworld_friends')
                . " SET status = '2' WHERE `me` = '".$friend."' AND `you` = '".$myUid."'";
            $result = $xoopsDB->queryF($sql);
            $query = "INSERT INTO ".$xoopsDB->prefix('smallworld_friends')
                . " (id,me,you,status,date) VALUES ('', '".$myUid."', '".$friend."', '2', UNIX_TIMESTAMP())";
            $result = $xoopsDB->queryF($query);
        }
        if ($stat < 0) {
            $sql  = "DELETE FROM ".$xoopsDB->prefix('smallworld_friends')
                . " WHERE me = '".intval($friend)."' AND you = '".intval($myUid)."'";
            $sql2  = "DELETE FROM ".$xoopsDB->prefix('smallworld_friends')
                . " WHERE you = '".intval($friend)."' AND me = '".intval($myUid)."'";
            $result = $xoopsDB->queryF($sql);
            $result2 = $xoopsDB->queryF($sql2);
        }        
    }

    /**
     * deleteWallMsg function
     * @param int $id
     * @param int $smallworld_msg_id
     * @return true
     */         
    function deleteWallMsg ($id,$smallworld_msg_id)
    {
        global $xoopsDB;
        $query = "DELETE FROM ".$xoopsDB->prefix('smallworld_messages')." WHERE msg_id = '".$smallworld_msg_id."'";
        $result = $xoopsDB->queryF($query);
        $query2 = "DELETE FROM ".$xoopsDB->prefix('smallworld_comments')." WHERE msg_id_fk = '".$smallworld_msg_id."'";
        $result2 = $xoopsDB->queryF($query2);
        //delete votes
        $query3 = "DELETE FROM ".$xoopsDB->prefix('smallworld_vote')." WHERE msg_id = '".$smallworld_msg_id."'";
        $result3 = $xoopsDB->queryF($query3);
        return true;
    }
    
    /**
     * deleteWallComment function
     * - Delete Comments
     * @param int $smallworldComId
     * @return true
     */        
    public function deleteWallComment($smallworld_com_id)
    {
        global $xoopsDB;
        $query = "DELETE FROM ".$xoopsDB->prefix('smallworld_comments')." WHERE com_id = '".$smallworld_com_id."'";
        $result = $xoopsDB->queryF($query);
        $query2 = "DELETE FROM ".$xoopsDB->prefix('smallworld_vote')." WHERE com_id = '".$smallworld_com_id."'";
        $result2 = $xoopsDB->queryF($query2);
        return true;             
    }

    /**
     * CountUsersRates function
     * - Delete Comments
     * @param int $userid
     * @param string $val
     * @return int
     */        
    public function CountUsersRates ($userid, $val)
    {
        global $xoopsUser, $xoopsDB;
        $query = "Select SUM(".$val.") as sum from ".$xoopsDB->prefix('smallworld_vote')." where owner = '".$userid."'";
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
     * deleteAccount function
     * - Delete user account and associate rows across tables
     * @param int $userid
     * @return string
     */   
    function deleteAccount($userid)
    {
        global $xoopsDB,$xoopsUser;
        $user = new XoopsUser($userid);
        $username = $user->uname(); 
        $sql01 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_admin')." WHERE userid = '".$userid."'";
        $sql02 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_comments')." WHERE uid_fk = '".$userid."'";
        $sql03 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_followers')." WHERE me = '".$userid."' OR you = '".$userid."'";
        $sql04 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_friends')." WHERE me = '".$userid."' OR you = '".$userid."'";
        $sql05 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_images')." WHERE userid = '".$userid."'";
        $sql06 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_messages')." WHERE uid_fk = '".$userid."'";
        $sql07 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_user')." WHERE userid = '".$userid."'";
        $sql08 = "DELETE FROM "
            . $xoopsDB->prefix('smallworld_vote')." WHERE user_id = '".$userid."'";
        $result01 = $xoopsDB->queryF($sql01);
        $result02 = $xoopsDB->queryF($sql02);
        $result03 = $xoopsDB->queryF($sql03);
        $result04 = $xoopsDB->queryF($sql04);
        $result05 = $xoopsDB->queryF($sql05);
        $result06 = $xoopsDB->queryF($sql06);
        $result07 = $xoopsDB->queryF($sql07);
        $result08 = $xoopsDB->queryF($sql08);
        // Remove picture dir
        $dirname = XOOPS_ROOT_PATH . '/uploads/albums_smallworld' . "/" . $userid . "/";
        $this->smallworld_remDir ($userid, $dirname, $empty = false);
        echo $username._AM_SMALLWORLD_ADMIN_USERDELETEDALERT;
    }
    
    /**
     * SmallworldDeleteDirectory function
     * - Delete images from users on delete
     * @param int $userid
     * @return true
     */    
    function SmallworldDeleteDirectory($userid)
    {
        $dirname = XOOPS_ROOT_PATH.'/uploads/albums_smallworld'."/".$userid."/";
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        }
        if (!$dir_handle) {
            return false;
        }
        while($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file)) {
                    unlink($dirname."/".$file);
                }
                else {
                    $this->SmallworldDeleteDirectory($dirname.'/'.$file);    
                }
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }
    
    /**
     * smallworld_remDir function
     * - Remove user image dir in uploads.
     * @param int $userid
     * @param string $directory
     * @param int $empty
     * @return true
     */     
    function smallworld_remDir ($userid, $directory, $empty = false)
    {
        if ($userid != '') {
            if (substr($directory,-1) == "/") {
                $directory = substr($directory, 0, -1);
            }

            if (!file_exists($directory) || !is_dir($directory)) {
                return false;
            } elseif (!is_readable($directory)) {
                return false;
            } else {
                $directoryHandle = opendir($directory);
                while ($contents = readdir($directoryHandle)) {
                    if ($contents != '.' && $contents != '..') {
                        $path = $directory . "/" . $contents;
                        if (is_dir($path)) {
                            $this->smallworld_remDir($userid, $path);
                        } else {
                            unlink($path);
                        }
                    }
                }
                closedir($directoryHandle);
                if ($empty == false) {
                    if (!rmdir($directory)) {
                        return false;
                    }
                }
                return true;
            }
        }
    }    
}
?>