<?php
/**
 * Private message module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         pm
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: viewpmsg.php 2621 2009-01-04 09:42:27Z dhcst $
 */

include_once "../../mainfile.php";

if (!is_object($xoopsUser)) {
    redirect_header(XOOPS_URL, 3, _NOPERM);
    exit();
}
$xoopsConfig['module_cache'] = 0; //disable caching since the URL will be the same, but content different from one user to another
$xoopsOption['template_main'] = "pm_viewpmsg.html";
include XOOPS_ROOT_PATH . '/header.php';

$_REQUEST['op'] = empty($_REQUEST['op']) ? "in" : $_REQUEST['op'];
$start = empty($_REQUEST["start"]) ? 0 : intval($_REQUEST["start"]);
$pm_handler =& xoops_getModuleHandler('message');

if (isset($_POST['delete_messages']) && isset($_POST['msg_id'])) {
    if (!$GLOBALS['xoopsSecurity']->check()) {
        $xoopsTpl->assign('errormsg', implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
    } elseif (empty($_REQUEST['ok'])) {
        xoops_confirm(array('ok' => 1, 'delete_messages' => 1, 'op' => $_REQUEST['op'], 'msg_id'=> serialize(array_map("intval", $_POST['msg_id']))), $_SERVER['REQUEST_URI'], _PM_RUSUREDELETE);
        include XOOPS_ROOT_PATH . "/footer.php";
        exit();
    } else {
        $_POST['msg_id'] = unserialize($_POST['msg_id']);
        $size = count($_POST['msg_id']);
        $msg = $_POST['msg_id'];
        for ( $i = 0; $i < $size; $i++ ) {
            $pm =& $pm_handler->get($msg[$i]);
            if ($pm->getVar('to_userid') == $xoopsUser->getVar('uid')) {
                $pm_handler->setTodelete($pm);
            } elseif ($pm->getVar('from_userid') == $xoopsUser->getVar('uid')) {
                $pm_handler->setFromdelete($pm);
            }
            unset($pm);
        }
        $xoopsTpl->assign('msg', _PM_DELETED);
    }
}
if (isset($_POST['move_messages']) && isset($_POST['msg_id'])) {
    if (!$GLOBALS['xoopsSecurity']->check()) {
        $xoopsTpl->assign('errormsg', implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
    } else{
        $size = count($_POST['msg_id']);
        $msg = $_POST['msg_id'];
        if ($_POST['op'] == 'save') {
            for ( $i = 0; $i < $size; $i++ ) {
                $pm =& $pm_handler->get($msg[$i]);
                if ($pm->getVar('to_userid') == $xoopsUser->getVar('uid')) {
                    $pm_handler->setTosave($pm, 0);
                } elseif ($pm->getVar('from_userid') == $xoopsUser->getVar('uid')) {
                    $pm_handler->setFromsave($pm, 0);
                }
                unset($pm);
            }
        } else {
            if (!$xoopsUser->isAdmin()) {
                $total_save = $pm_handler->getSavecount();
                $size = min($size, ($xoopsModuleConfig['max_save'] - $total_save));
            }
            for ( $i = 0; $i < $size; $i++ ) {
                $pm =& $pm_handler->get($msg[$i]);
                if ($_POST['op']=='in') {
                    $pm_handler->setTosave($pm);
                } elseif ($_POST['op'] == 'out') {
                    $pm_handler->setFromsave($pm);
                }
                unset($pm);
            }
        }
        if ($_POST['op'] == 'save') {
            $xoopsTpl->assign('msg', _PM_UNSAVED);
        } elseif (isset($total_save) && !$xoopsUser->isAdmin()) {
            $xoopsTpl->assign('msg', sprintf(_PM_SAVED_PART, $xoopsModuleConfig['max_save'], $i));
        } else {
            $xoopsTpl->assign('msg', _PM_SAVED_ALL);
        }
    }
}
if (isset($_REQUEST['empty_messages'])) {
    if (!$GLOBALS['xoopsSecurity']->check()) {
        $xoopsTpl->assign('errormsg', implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
    } elseif (empty($_REQUEST['ok'])) {
        xoops_confirm(array('ok' => 1, 'empty_messages' => 1, 'op' => $_REQUEST['op']), $_SERVER['REQUEST_URI'], _PM_RUSUREEMPTY);
        include XOOPS_ROOT_PATH."/footer.php";
        exit();
    } else {
        if ($_POST['op'] == 'save') {
            $crit_to = new CriteriaCompo(new Criteria('to_delete', 0));
            $crit_to->add(new Criteria('to_save',1));
            $crit_to->add(new Criteria('to_userid',$xoopsUser->getVar('uid')));
            $crit_from = new CriteriaCompo(new Criteria('from_delete', 0));
            $crit_from->add(new Criteria('from_save', 1));
            $crit_from->add(new Criteria('from_userid',$xoopsUser->getVar('uid')));
            $criteria = new CriteriaCompo($crit_to);
            $criteria->add($crit_from, "OR");
        } elseif ($_POST['op'] == 'out') {                
            $criteria = new CriteriaCompo(new Criteria('from_delete', 0));
            $criteria->add(new Criteria('from_userid', $xoopsUser->getVar('uid')));
            $criteria->add(new Criteria('from_save', 0));
        } else{
            $criteria = new CriteriaCompo(new Criteria('to_delete', 0));
            $criteria->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
            $criteria->add(new Criteria('to_save', 0));
        }
        /*
         * The following method has critical scalability problem !
         * deleteAll method should be used instead
         */
        $pms = $pm_handler->getObjects($criteria);
        unset($criteria);
        if (count($pms)>0) {
            foreach (array_keys($pms) as $i) {
                if ($pms[$i]->getVar('to_userid') == $xoopsUser->getVar('uid')) {
                    if ($_POST['op'] == 'save') {
                        $pm_handler->setTosave($pms[$i], 0);
                    } elseif ($_POST['op'] == 'in') {
                        $pm_handler->setTodelete($pms[$i]);
                    }
                }
                if ($pms[$i]->getVar('from_userid') == $xoopsUser->getVar('uid')) {
                    if ($_POST['op']=='save') {
                        $pm_handler->setFromsave($pms[$i],0);
                    } elseif ($_POST['op']=='out') {
                        $pm_handler->setFromdelete($pms[$i]);
                    }
                }
            }
        }
        $xoopsTpl->assign('msg', _PM_EMPTIED);
    }
}

if ($_REQUEST['op'] == "out") {
    $criteria = new CriteriaCompo(new Criteria('from_delete', 0));
    $criteria->add(new Criteria('from_userid', $xoopsUser->getVar('uid')));
    $criteria->add(new Criteria('from_save', 0));
} elseif ($_REQUEST['op'] == "save") {
    $crit_to = new CriteriaCompo(new Criteria('to_delete', 0));
    $crit_to->add(new Criteria('to_save', 1));
    $crit_to->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
    $crit_from = new CriteriaCompo(new Criteria('from_delete', 0));
    $crit_from->add(new Criteria('from_save', 1));
    $crit_from->add(new Criteria('from_userid', $xoopsUser->getVar('uid')));
    $criteria = new CriteriaCompo($crit_to);
    $criteria->add($crit_from, "OR");
} else {
    $criteria = new CriteriaCompo(new Criteria('to_delete', 0));
    $criteria->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
    $criteria->add(new Criteria('to_save', 0));
}
$total_messages = $pm_handler->getCount($criteria);
$criteria->setStart($start);
$criteria->setLimit($xoopsModuleConfig['perpage']);
$criteria->setSort("msg_time");
$criteria->setOrder("DESC");
$pm_arr = $pm_handler->getAll($criteria, null, false, false);
unset($criteria);

$xoopsTpl->assign('total_messages', $total_messages);
$xoopsTpl->assign('op', $_REQUEST['op']);

if ( $total_messages > $xoopsModuleConfig['perpage']) {
    include XOOPS_ROOT_PATH . '/class/pagenav.php';
    $nav = new XoopsPageNav($total_messages, $xoopsModuleConfig['perpage'], $start, "start", 'op=' . htmlspecialchars($_REQUEST['op']));
    $xoopsTpl->assign('pagenav', $nav->renderNav(4));
}

$xoopsTpl->assign('display', $total_messages > 0);
$xoopsTpl->assign('anonymous', $xoopsConfig['anonymous']);
if (count($pm_arr)>0) {
    foreach (array_keys($pm_arr) as $i) {
        if (isset($_REQUEST['op']) && $_REQUEST['op'] == "out") {
            $uids[] = $pm_arr[$i]['to_userid'];
        } else {
            $uids[] = $pm_arr[$i]['from_userid'];
        }
    }
    $member_handler =& xoops_gethandler('member');
    $senders = $member_handler->getUserList(new Criteria('uid', "(" . implode(", ", array_unique($uids) ) . ")", "IN"));
    foreach (array_keys($pm_arr) as $i) {
        $message = $pm_arr[$i];
        $message['msg_time'] = formatTimestamp($message["msg_time"]);
        if (isset($_REQUEST['op']) && $_REQUEST['op'] == "out") {
            $message['postername'] = $senders[$pm_arr[$i]['to_userid']];
            $message['posteruid'] = $pm_arr[$i]['to_userid'];
        } else {
            $message['postername'] = $senders[$pm_arr[$i]['from_userid']];
            $message['posteruid'] = $pm_arr[$i]['from_userid'];
        }
        $message['msg_no'] = $i;
        $xoopsTpl->append('messages', $message);
    }
}

include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";
$send_button = new XoopsFormButton('','send', _PM_SEND);
$send_button->setExtra("onclick='javascript:openWithSelfMain(\"" . XOOPS_URL . "/modules/pm/pmlite.php?send=1\", \"pmlite\", 550, 450);'");
$delete_button = new XoopsFormButton('','delete_messages', _PM_DELETE, 'submit');
$move_button = new XoopsFormButton('','move_messages', ($_REQUEST['op'] == 'save') ? _PM_UNSAVE : _PM_TOSAVE, 'submit');
$empty_button = new XoopsFormButton('','empty_messages', _PM_EMPTY, 'submit');

$pmform = new XoopsForm('','pmform','viewpmsg.php','post', true);
$pmform->addElement($send_button);
$pmform->addElement($move_button);
$pmform->addElement($delete_button);
$pmform->addElement($empty_button);
$pmform->addElement(new XoopsFormHidden('op', $_REQUEST['op']));
$pmform->assign($xoopsTpl);

include XOOPS_ROOT_PATH."/footer.php";
?>