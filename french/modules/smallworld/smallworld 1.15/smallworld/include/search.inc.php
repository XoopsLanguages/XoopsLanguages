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
* @Repository path:		$HeadURL: https://xoops.svn.sourceforge.net/svnroot/xoops/XoopsModules/smallworld/trunk/smallworld/permalink.php $
* @Last committed:		$Revision: 8924 $
* @Last changed by:		$Author: djculex $
* @Last changed date:	$Date: 2012-02-09 21:13:23 +0100 (to, 09 feb 2012) $
* @ID:					$Id: permalink.php 8924 2012-02-09 20:13:23Z djculex $
**/
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once XOOPS_ROOT_PATH.'/modules/smallworld/include/functions.php';

function smallworld_search($queryarray, $andor, $limit, $offset, $userid, $sortby = "created DESC")
{
    global $xoopsDB, $xoopsConfig, $myts, $xoopsUser;
    
    if (file_exists(XOOPS_ROOT_PATH.'/modules/smallworld/language/'.$xoopsConfig['language'].'/main.php')) {
        require_once (XOOPS_ROOT_PATH.'/modules/smallworld/language/'.$xoopsConfig['language'].'/main.php');
    } else {
        require_once (XOOPS_ROOT_PATH.'/modules/smallworld/language/english/main.php');
    }
          
    $module_handler =& xoops_gethandler('module');
	$module =& $module_handler->getByDirname('smallworld');
    $modid= $module->getVar('mid');
    $searchparam='';
    $highlight = false;
    
	$gperm_handler =& xoops_gethandler('groupperm');
	if (is_object($xoopsUser)) {
	    $groups = $xoopsUser->getGroups();
        $id = $xoopsUser->getVar('uid');
        $Wall = new Wall_Updates();
        $followers = Smallworld_array_flatten($Wall->getFollowers($id),0);
	} else {
        $id = 0;
		$groups = XOOPS_GROUP_ANONYMOUS;
        $followers = array();
	}
    
    if ($id > 0 && $id != '') {
    
        $sql = "SELECT M.msg_id, M.uid_fk, M.message, M.created, M.priv, U.username FROM "
            . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
            . " U WHERE M.uid_fk=U.userid";       
    } else {
        $sql = "SELECT M.msg_id, M.uid_fk, M.message, M.created, M.priv, U.username FROM "
            . $xoopsDB->prefix('smallworld_messages')." M, ".$xoopsDB->prefix('smallworld_user')
            . " U WHERE M.uid_fk=U.userid";       
    }
        
        
        
    if ( $userid != 0 ) {
		$sql .= " AND M.uid_fk = ".$userid." ";
	}
    if ( is_array($queryarray) && $count = count($queryarray) ) {
		$sql .= " AND (M.message LIKE '%$queryarray[0]%' OR M.message LIKE '%$queryarray[0]%' OR U.username LIKE '%$queryarray[0]%'";
		$sql .= ") ";
		// keywords highlighting
		if($highlight) {
			$searchparam='&keywords='.urlencode(trim(implode(' ',$queryarray)));
		}
	}
    $sql .= "ORDER BY created DESC";
	$result = $xoopsDB->query($sql,$limit,$offset);
	$ret = array();
	$i = 0;
 	while($myrow = $xoopsDB->fetchArray($result)){
        if (in_array($myrow['uid_fk'], $followers) || $myrow['uid_fk'] == $id) {
			$ret[$i]['image'] = "images/smallworld_icn.png";
			$ret[$i]['link'] = "permalink.php?ownerid=".$myrow['uid_fk']."&updid=".$myrow['msg_id'];           
			if(preg_match('/UPLIMAGE/',$myrow['message'])) {
                $ownmsg = str_replace("UPLIMAGE ", "", $myrow['message']);
                $ret[$i]['title'] = $ownmsg;
                $ret[$i]['title'] = Smallworld_getName($myrow['uid_fk'])." -> "._SMALLWORLD_GALLERY;
                $ret[$i]['title'] = str_replace(array('&lt;','&gt;'),array('<','>'), $ret[$i]['title']);
            } else {
                $ret[$i]['title'] = smallworld_shortenText($myrow['message'], 60);
            }
			$ret[$i]['time'] = $myrow['created'];
			$ret[$i]['uid'] = $myrow['uid_fk'];
        } else {
            $i = $i-1;
        }
			$i++;
	}
    return $ret;
}
?>
