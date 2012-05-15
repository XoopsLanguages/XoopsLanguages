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
* @Repository path:		$HeadURL: https://xoops.svn.sourceforge.net/svnroot/xoops/XoopsModules/smallworld/trunk/smallworld/index.php $
* @Last committed:		$Revision: 8924 $
* @Last changed by:		$Author: djculex $
* @Last changed date:	$Date: 2012-02-09 21:13:23 +0100 (to, 09 feb 2012) $
* @ID:					$Id: index.php 8924 2012-02-09 20:13:23Z djculex $
**/

include_once("../../mainfile.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once (XOOPS_ROOT_PATH.'/class/template.php');
global $xoopsUser, $xoTheme,$xoopsConfig, $xoopsTpl,$xoopsLogger;
$xoopsLogger->activated = false;

$tpl = new XoopsTpl();

$id = smallworld_isset_or($_GET['username']); // Id of user wich profile you want to see
$user = new XoopsUser($id);

$uid = $user->getVar('uid');

$myts =& MyTextSanitizer::getInstance();

xoops_loadLanguage('user');

$module_handler =& xoops_gethandler('module');
$config_handler =& xoops_gethandler('config');
$thisUser =& $member_handler->getUser($id);

$gperm_handler =& xoops_gethandler('groupperm');
$groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : 0;

$criteria = new CriteriaCompo(new Criteria('hassearch', 1));
$criteria->add(new Criteria('isactive', 1));
$mids = array_keys($module_handler->getList($criteria));

foreach ($mids as $mid) {
    if ($gperm_handler->checkRight('module_read', $mid, $groups)) {
        $module = $module_handler->get($mid);
        $results = $module->search('', '', 5, 0, $thisUser->getVar('uid'));
        $count = count($results);
        if (is_array($results) && $count > 0) {
            for($i = 0; $i < $count; $i++) {
                if (isset($results[$i]['image']) && $results[$i]['image'] != '') {
                    $results[$i]['image'] = XOOPS_URL.'/modules/' . $module->getVar('dirname') . '/' . $results[$i]['image'];
                } else {
                    $results[$i]['image'] = XOOPS_URL.'/images/icons/posticon2.gif';
                }

                if (! preg_match("/^http[s]*:\/\//i", $results[$i]['link'])) {
                    $results[$i]['link'] = XOOPS_URL."/modules/" . $module->getVar('dirname') . "/" . $results[$i]['link'];
                }

                $results[$i]['title'] = $myts->htmlspecialchars($results[$i]['title']);
                $results[$i]['time'] = $results[$i]['time'] ? formatTimestamp($results[$i]['time']) : '';
            }
            if ($count == 5) {
                $showall_link = '<a href="'.XOOPS_URL.'/search.php?action=showallbyuser&amp;mid=' . $mid . '&amp;uid=' . $thisUser->getVar('uid') . '">' . _US_SHOWALL . '</a>';
            } else {
                $showall_link = '';
            }
            $tpl->assign('lang_allaboutuser', sprintf(_US_ALLABOUT, $thisUser->getVar('uname')));
            $tpl->append('modules', array(
                'name' => $module->getVar('name') ,
                'results' => $results ,
                'showall_link' => $showall_link));
        }
        unset($module);
    }
}
$tpl->display(XOOPS_ROOT_PATH .'/modules/smallworld/templates/smallworld_userinfo.html');
?>