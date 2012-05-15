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

 
class SmallWorldProfile {

    /**
     * @Show user
     * @param int $id
     * @return void
     */  
    function ShowUser ($id) {
        global $xoopsUser, $xoTheme, $xoopsTpl, $arr04, $arr05, $xoopsDB;
        if ($xoopsUser) {    
                $user = new XoopsUser($id);
                $myName = $xoopsUser->getUnameFromId($xoopsUser->getVar('uid')); // My name
                $db = new SmallWorldDB;
                $check = new SmallWorldUser;
                $Wall = new Wall_Updates();
                
                $cdb = "SELECT * FROM ".$xoopsDB->prefix('smallworld_user')." WHERE userid = '".$id."'";
                $result = $xoopsDB->queryF($cdb);
                $cnt = $xoopsDB->getRowsNum($result);
                while ($r = $xoopsDB->fetchArray($result)) {
                    $uname = ucwords($r['username']);
                    $realname = $r['realname'];
                    $membersince = date("d-m-Y",$user->user_regdate());
                    $birthday = Smallworld_UsToEuroDate($r['birthday']);
                    $cnt_bday = smallworldNextBdaySecs ($r['birthday']);
                    $birthcity = $r['birthplace'];
                    $email = $user->email();
                    $country = $user->user_from();
                    $signature = $user->user_sig();
                    $messenger = $user->user_msnm();
                    $totalposts = $Wall->CountMsges ($id);
                    $membersince = date("m-d-Y",$user->user_regdate());
                    $usersratedplus = $db->CountUsersRates ($id, 'up');
                    $usersratedminus = $db->CountUsersRates ($id, 'down');
                    $workfull = $db->getJobsToDiv ($id);
                    $workArray = unserialize($r['employer']);
                    $work = "<a href='javascript:void(0)' id='_smallworld_workmore'>".$workArray[0]." ("._SMALLWORLD_MORE.")</a>";
                    $educationfull = $db->getSchoolToDiv($id);
                    $educationArray = unserialize($r['school_type']);
                    $education = "<a href='javascript:void(0)' id='_smallworld_educationmore'>".$educationArray[0]." ("._SMALLWORLD_MORE.")</a>";
                    $lng = $r['birthplace_lng'];
                    $latt = $r['birthplace_lat'];    
                    $country = $r['birthplace_country'];
                    $rank = $user->rank();
                    $rank_title = $rank['title'];
                    if (isset($rank['image'])) {
                        $rank_image = "<img align='center' src='".XOOPS_UPLOAD_URL."/".$rank['image']."'/>";
                    } else {
                        $rank_image = '';
                    }
                    $commentsrating = "<img src='".XOOPS_URL."/modules/smallworld/images/like.png' height='10px' width='10px'"."/> ".$usersratedplus;
                    $commentsrating .= " <img src='".XOOPS_URL."/modules/smallworld/images/dislike.png' height='10px' width='10px'"."/> ".$usersratedminus;
                    $lastlogin = $user->getVar('last_login');
                    
                    $gender = $r['gender'];
                    if ($gender == 2) {
                        $heorshe = _SMALLWORLD_HE;
                        $hisorher = _SMALLWORLD_HIS;
                    }
                    if ($gender == 1) {
                        $heorshe = _SMALLWORLD_SHE;
                        $hisorher = _SMALLWORLD_HER;
                    }
                    if ($gender == '' || $gender == 0) {
                        $heorshe = _SMALLWORLD_HEORSHE;
                        $hisorher = _SMALLWORLD_HISHER;
                    }
                    $avatar = $Wall->Gravatar($id);
                    $avatar_size = smallworld_getImageSize(80, 100, smallworld_getAvatarLink($id, $avatar));
                    $avatar_highwide = smallworld_imageResize($avatar_size[0], $avatar_size[1], 100);
                    $user_img = "<img src='".smallworld_getAvatarLink($id, $avatar)."' id='smallworld_user_img' ".$avatar_highwide."/>";
                    
                    $currentcity = $r['present_city'];
                    $currlng = $r['present_lng'];
                    $currlatt = $r['present_lat'];
                    $currcountry = $r['present_country'];

                    // experimental. Set javascript var using php getVar()
                    $js  = "<script type='text/javascript'>";
                    $js .= "var smallworld_currlng = ".$currlng."\n";
                    $js .= "var smallworld_currlatt = ".$currlatt."\n";
                    $js .= "var smallworld_birthlng = ".$lng."\n";
                    $js .= "var smallworld_birthlatt = ".$latt."\n";
                    $js .= "</script>";
                    echo $js;
        
                    $relationship = $r['relationship'];
                    $spouseExists = $check->spousexist($r['partner']);
                    
                    if ($relationship == 2) {
                        $status = _SMALLWORLD_ISSINGLE;
                        $spouse = '';
                    }
                    if ($relationship == 3) {
                        $status = _SMALLWORLD_INRELATIONSHIP;
                        if ($spouseExists > 0) {
                            $spouse = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$r['partner']."' target='_self'>".$r['partner']."</a>";
                        } else {
                            $spouse = $r['partner'];
                        }
                    }                    
                    if ($relationship == 0) {
                        $status = _SMALLWORLD_ISMARRIED;
                        if ($spouseExists > 0) {
                         $spouse = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$r['partner']."' target='_self'>".$r['partner']."</a>";
                         } else {
                          $spouse = $r['partner'];
                         }
                    }                    
                    if ($relationship == 1) {
                        $status = _SMALLWORLD_ISENGAGED;
                        if ($spouseExists > 0) {
                            $spouse = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$r['partner']."' target='_self'>".$r['partner']."</a>";
                        } else {
                            $spouse = $r['partner'];
                        }
                    }                        
                    if ($relationship == 5) {
                        $status = _SMALLWORLD_ISCOMPLICATED;
                        if ($spouseExists > 0) {
                            $spouse = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$r['partner']."' target='_self'>".$r['partner']."</a>";
                        } else {
                            $spouse = $r['partner'];
                        }
                    }            
                    if ($relationship == 4) {
                        $status = _SMALLWORLD_OPENRELATIONSHIP;
                        if ($spouseExists > 0) {
                            $spouse = "<a href='".XOOPS_URL."/modules/smallworld/userprofile.php?username=".$r['partner']."' target='_self'>".$r['partner']."</a>";
                        } else {
                            $spouse = $r['partner'];
                        }
                    }                            
                        
                    //Personal info
                    $aboutme = $r['aboutme'];
                    $religion = $arr05[$r['religion']];     
                    $politic = $arr04[$r['politic']];     
                    
                    //Interests
                    $favbook = $r['books'];     
                    $favmusic = $r['music'];     
                    $favmovie = $r['movie'];     
                    $favtvshow = $r['tvshow'];
                    $favinterests = $r['interests'];
                    
                    // Contact and adresses
                    $email = unserialize($r['emailtype']);                     
                    $screenname = $db->getScreennamesToDiv($id);
                    if($r['phone'] == '' || $r['phone'] == 0) {
                        $phone = "xxx-xxx-xxxx";
                    } else {
                        $phone = $r['phone'];
                    }
                    
                    if ($r['mobile'] == '' || $r['mobile'] == 0) {
                        $gsm = "xxx-xxx-xxxx";
                    } else {
                        $gsm = $r['mobile']; 
                    }
                        
                    $adress = $r['adress']; 
                    $website = $r['website'];
                    $age = Smallworld_Birthday($r['birthday']);
                }    
            
                //SW_CheckIfUser ($userid);
                $xoopsTpl->assign('userid', $id);

                // ----- LANG DEFINES ------
                $xoopsTpl->assign('username', $uname); 
                $xoopsTpl->assign('MyUserName', $myName);
                $xoopsTpl->assign('avatar', $user_img);
                $xoopsTpl->assign('realname', $realname);
                $xoopsTpl->assign('birthday', $birthday);
                $xoopsTpl->assign('nextBDay', $cnt_bday);
                
                $xoopsTpl->assign('usersratinf',$commentsrating);
                
                $xoopsTpl->assign('age', $age);
                $xoopsTpl->assign('birthcity', $birthcity);
                $xoopsTpl->assign('country', $country);
                $xoopsTpl->assign('heorshe', $heorshe);
                $xoopsTpl->assign('hisorher', $hisorher);
                
                $xoopsTpl->assign('membersince', $membersince);
                $xoopsTpl->assign('msn', $messenger);
                $xoopsTpl->assign('website', $website);
                $xoopsTpl->assign('totalposts', $totalposts);
                $xoopsTpl->assign('ranktitle', $rank_title);
                $xoopsTpl->assign('rankimage', $rank_image);
                $xoopsTpl->assign('lastlogin', date('d-m-Y',$lastlogin));
                $xoopsTpl->assign('signature', $signature);
                $xoopsTpl->assign('currentcity', $currentcity);
                $xoopsTpl->assign('currcity', $currentcity);
                $xoopsTpl->assign('currcountry', $currcountry);
                
                $xoopsTpl->assign('education', $education);
                $xoopsTpl->assign('educationfull', $educationfull);
                
                $xoopsTpl->assign('work', $work);
                $xoopsTpl->assign('workfull',$workfull);
                
                $xoopsTpl->assign('relationship', $status);
                $xoopsTpl->assign('status', $status);
                $xoopsTpl->assign('spouse', $spouse);
                $xoopsTpl->assign('aboutme',$aboutme);
                $xoopsTpl->assign('lang.avatar', _SMALLWORLD_AVATAR);    

                // Pers info language define
                $xoopsTpl->assign('politic', $politic); 
                $xoopsTpl->assign('religion', $religion); 
                
                $xoopsTpl->assign('favbook', $favbook); 
                $xoopsTpl->assign('favmusic', $favmusic); 
                $xoopsTpl->assign('favmovie', $favmovie); 
                $xoopsTpl->assign('favtvshow',$favtvshow);
                $xoopsTpl->assign('favinterests',$favinterests);

                $xoopsTpl->assign('email', $email); 
                $xoopsTpl->assign('screenname', $screenname); 
                $xoopsTpl->assign('phone', $phone); 
                $xoopsTpl->assign('mobile', $gsm); 
                $xoopsTpl->assign('adress', $adress); 
                
                $xoopsTpl->assign('website', $website);     
                $xoopsTpl->assign('addsomeinfo', _SMALLWORLD_ADDSOMEINFO);         
                $xoopsTpl->assign('pagename','profile');
        } else{
        }
    }

    
}
?>