<?php
// $Id: polls.php,v 1.3 2005/10/19 17:20:28 phppp Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //


include_once("header.php");

include XOOPS_ROOT_PATH."/modules/xoopspoll/include/constants.php";
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
include_once XOOPS_ROOT_PATH."/class/xoopslists.php";
include_once XOOPS_ROOT_PATH."/class/xoopsblock.php";
include_once XOOPS_ROOT_PATH."/modules/xoopspoll/class/xoopspoll.php";
include_once XOOPS_ROOT_PATH."/modules/xoopspoll/class/xoopspolloption.php";
include_once XOOPS_ROOT_PATH."/modules/xoopspoll/class/xoopspolllog.php";
include_once XOOPS_ROOT_PATH."/modules/xoopspoll/class/xoopspollrenderer.php";

$op = "add";
if (isset($_GET['op'])) $op = $_GET['op'];
if (isset($_POST['op'])) $op = $_POST['op'];
if (isset($_GET['poll_id'])) $poll_id = intval($_GET['poll_id']);
if (isset($_POST['poll_id'])) $poll_id = intval($_POST['poll_id']);
if (isset($_GET['topic_id'])) $topic_id = intval($_GET['topic_id']);
if (isset($_POST['topic_id'])) $topic_id = intval($_POST['topic_id']);

if (!isset($module_handler)) $module_handler =& xoops_gethandler('module');
$xoopspoll =& $module_handler->getByDirname('xoopspoll');
if (!is_object($xoopspoll) || !$xoopspoll->getVar('isactive')) {
	redirect_header("javascript:history.go(-1);", 2, _MD_POLLMODULE_ERROR);
	exit();
}

include XOOPS_ROOT_PATH."/header.php";

$topic_handler =& xoops_getmodulehandler('topic','newbb');
$topic_obj =& $topic_handler->get($topic_id);
$forum = $topic_obj->getVar('forum_id');
$forum_handler =& xoops_getmodulehandler('forum','newbb');
$forum_obj =& $forum_handler->get($forum);
if (!$forum_handler->getPermission($forum_obj)) {
    redirect_header("index.php", 2, _MD_NORIGHTTOACCESS);
    exit();
}
if (!$topic_handler->getPermission($forum_obj, $topic_obj->getVar('topic_status'), "view")) {
    redirect_header("viewforum.php?forum=".$forum_obj->getVar('forum_id'),2,_MD_NORIGHTTOVIEW);
    exit();
}

$isadmin = newbb_isAdmin($forum_obj);
$perm = false;
if ($isadmin) {
	$perm = true;
} elseif ($topic_handler->getPermission($forum_obj, $topic_obj->getVar('topic_status'), "addpoll")
	//&& $forum_obj->getVar('allow_polls') == 1
) {
	if ( ($op=="add" || $op=="save") && 
		!$topic_obj->getVar("topic_haspoll") &&
		is_object($xoopsUser) && $xoopsUser->getVar("uid") == $topic_obj->getVar("topic_poster")
	) { 
		$perm = true;
	}
	elseif (!empty($poll_id)) {
		$poll = new XoopsPoll($poll_id);
		if (is_object($xoopsUser) && $xoopsUser->getVar("uid") == $poll->getVar("user_id")) $perm = true;
	}
}
if (!$perm) {
    redirect_header("viewtopic.php?topic_id=".$topic_id, 2, _NOPERM);
}

if ( $op == "add" ) {
	$poll_form = new XoopsThemeForm(_MD_POLL_CREATNEWPOLL, "poll_form", "polls.php");

	$question_text = new XoopsFormText(_MD_POLL_POLLQUESTION, "question", 50, 255);
	$poll_form->addElement($question_text, true);

	$desc_tarea = new XoopsFormTextarea(_MD_POLL_POLLDESC, "description");
	$poll_form->addElement($desc_tarea);

	$currenttime = formatTimestamp(time(), "Y-m-d H:i:s");
	$endtime = formatTimestamp(time()+604800, "Y-m-d H:i:s");
	$expire_text = new XoopsFormText(_MD_POLL_EXPIRATION."<br /><small>"._MD_POLL_FORMAT."<br />".sprintf(_MD_POLL_CURRENTTIME, $currenttime)."</small>", "end_time", 30, 19, $endtime);
	$poll_form->addElement($expire_text);

	$weight_text = new XoopsFormText(_MD_POLL_DISPLAYORDER, "weight", 6, 5, 0);
	$poll_form->addElement($weight_text);

	$multi_yn = new XoopsFormRadioYN(_MD_POLL_ALLOWMULTI, "multiple", 0);
	$poll_form->addElement($multi_yn);

	$notify_yn = new XoopsFormRadioYN(_MD_POLL_NOTIFY, "notify", 1);
	$poll_form->addElement($notify_yn);

	$option_tray = new XoopsFormElementTray(_MD_POLL_POLLOPTIONS, "");
	$barcolor_array = XoopsLists::getImgListAsArray(XOOPS_ROOT_PATH."/modules/xoopspoll/images/colorbars/");
	for($i = 0; $i < 10; $i++) {
		$current_bar = (current($barcolor_array) != "blank.gif") ? current($barcolor_array) : next($barcolor_array);
		$option_text = new XoopsFormText("", "option_text[]", 50, 255);
		$option_tray->addElement($option_text);
		$color_select = new XoopsFormSelect("", "option_color[".$i."]", $current_bar);
		$color_select->addOptionArray($barcolor_array);
		$color_select->setExtra("onchange='showImgSelected(\"option_color_image[".$i."]\", \"option_color[".$i."]\", \"modules/xoopspoll/images/colorbars\", \"\", \"".XOOPS_URL."\")'");
		$color_label = new XoopsFormLabel("", "<img src='".XOOPS_URL."/modules/xoopspoll/images/colorbars/".$current_bar."' name='option_color_image[".$i."]' id='option_color_image[".$i."]' width='30' align='bottom' height='15' alt='' /><br />");
		$option_tray->addElement($color_select);
		$option_tray->addElement($color_label);
		if ( !next($barcolor_array) ) {
			reset($barcolor_array);
		}
		unset($color_select, $color_label);
	}
	$poll_form->addElement($option_tray);

	$submit_button = new XoopsFormButton("", "poll_submit", _SUBMIT, "submit");
	$poll_form->addElement($submit_button);
	$op_hidden = new XoopsFormHidden("op", "save");
	$poll_form->addElement($op_hidden);
	$poll_topic_id_hidden = new XoopsFormHidden("topic_id", $topic_id);
	$poll_form->addElement($poll_topic_id_hidden);
	//include XOOPS_ROOT_PATH."/header.php";
	echo "<h4>"._MD_POLL_POLLCONF."</h4>";
	$poll_form->display();
	//include XOOPS_ROOT_PATH."/footer.php";
	//exit();
}

if ( $op == "save" ) {
	/*
	 * The option check should be done before submitting
	 */
	$option_empty = true;
	if (empty($_POST['option_text'])) {
		redirect_header("javascript:history.go(-1);", 2, _MD_ERROROCCURED.': '._MD_POLL_POLLOPTIONS.' !');
	}
	$option_text = $_POST['option_text'];
	foreach ( $option_text as $optxt ) {
		if ( trim($optxt) != "" ) {
			$option_empty = false;
			break;
		}
	}
	if ($option_empty) redirect_header("javascript:history.go(-1);", 2, _MD_ERROROCCURED.': '._MD_POLL_POLLOPTIONS.' !');

	$poll = new XoopsPoll();
	//$question = (empty($_POST['question']))?"":$_POST['question'];
	$poll->setVar("question", @$_POST['question']);
	//$description = (empty($_POST['description']))?"":$_POST['description'];
	$poll->setVar("description", @$_POST['description']);
	if ( !empty($_POST['end_time']) ) {
		$timezone = is_object($xoopsUser)? $xoopsUser->timezone() : null;
		// Start user input time in hegira date - hacked by irmtfan (www.jadoogaran.org)
if (defined('_JDF_USE_HEGIRADATE') && _JDF_USE_HEGIRADATE){
 $_POST['end_time']=inputTimeToGregorian($_POST['end_time']);
}
// End user input time in hegira date - hacked by irmtfan (www.jadoogaran.org)

		$poll->setVar("end_time", userTimeToServerTime(strtotime($_POST['end_time']), $timezone));
	} else {
		// if expiration date is not set, set it to 10 days from now
		$poll->setVar("end_time", time() + (86400 * 10));
	}
	$poll->setVar("display", 0);
	//$weight = (empty($_POST['weight']))?"":$_POST['weight'];
	$poll->setVar("weight", intval(@$_POST['weight']));
	//$weight = (empty($_POST['multiple']))?"":$_POST['multiple'];
	$poll->setVar("multiple", intval(@$_POST['multiple']));
	if ( !empty($_POST["notify"]) ) {
		// if notify, set mail status to "not mailed"
		$poll->setVar("mail_status", POLL_NOTMAILED);
	} else {
		// if not notify, set mail status to already "mailed"
		$poll->setVar("mail_status", POLL_MAILED);
	}
	$uid = is_object($xoopsUser)?$xoopsUser->getVar("uid"):0;
	$poll->setVar("user_id", $uid);
	$new_poll_id = $poll->store();
	$option_color = (empty($_POST['option_color']))?NULL:$_POST['option_color'];
	if ( !empty($new_poll_id) ) {
		$i = 0;
		foreach ( $option_text as $optxt ) {
			$optxt = trim($optxt);
			if ( $optxt != "" ) {
				$option = new XoopsPollOption();
				$option->setVar("option_text", $optxt);
				$option->setVar("option_color", $option_color[$i]);
				$option->setVar("poll_id", $new_poll_id);
				$option->store();
			}
			$i++;
		}
		$sql = "UPDATE ".$xoopsDB->prefix("bb_topics")." SET topic_haspoll = 1, poll_id = $new_poll_id WHERE topic_id = $topic_id";
        if ( !$result = $xoopsDB->query($sql) ) {
            //xoops_error($xoopsDB->error());
        }
		include_once XOOPS_ROOT_PATH.'/class/template.php';
		xoops_template_clear_module_cache($xoopsModule->getVar('mid'));
	} else {
		//xoops_error($poll->getHtmlErrors());
		//exit();
	}
	redirect_header("viewtopic.php?topic_id=$topic_id",1,_MD_POLL_DBUPDATED);
	//exit();
}

if ( $op == "edit" ) {
	$poll = new XoopsPoll($_GET['poll_id']);
	$poll_form = new XoopsThemeForm(_MD_POLL_EDITPOLL, "poll_form", "polls.php");
	$author_label = new XoopsFormLabel(_MD_POLL_AUTHOR, "<a href='".XOOPS_URL."/userinfo.php?uid=".$poll->getVar("user_id")."'>".newbb_getUnameFromId($poll->getVar("user_id"), $xoopsModuleConfig['show_realname'])."</a>");
	$poll_form->addElement($author_label);
	$question_text = new XoopsFormText(_MD_POLL_POLLQUESTION, "question", 50, 255, $poll->getVar("question", "E"));
	$poll_form->addElement($question_text);
	$desc_tarea = new XoopsFormTextarea(_MD_POLL_POLLDESC, "description", $poll->getVar("description", "E"));
	$poll_form->addElement($desc_tarea);
	$date = formatTimestamp($poll->getVar("end_time"), "Y-m-d H:i:s");
	if ( !$poll->hasExpired() ) {
		$expire_text = new XoopsFormText(_MD_POLL_EXPIRATION."<br /><small>"._MD_POLL_FORMAT."<br />".sprintf(_MD_POLL_CURRENTTIME, formatTimestamp(time(), "Y-m-d H:i:s"))."</small>", "end_time", 20, 19, $date);
		$poll_form->addElement($expire_text);
	} else {
		$restart_label = new XoopsFormLabel(_MD_POLL_EXPIRATION, sprintf(_MD_POLL_EXPIREDAT, $date)."<br /><a href='polls.php?op=restart&amp;poll_id=".$poll->getVar("poll_id")."'>"._MD_POLL_RESTART."</a>");
		$poll_form->addElement($restart_label);
	}
	$weight_text = new XoopsFormText(_MD_POLL_DISPLAYORDER, "weight", 6, 5, $poll->getVar("weight"));
	$poll_form->addElement($weight_text);
	$multi_yn = new XoopsFormRadioYN(_MD_POLL_ALLOWMULTI, "multiple", $poll->getVar("multiple"));
	$poll_form->addElement($multi_yn);
	$options_arr =& XoopsPollOption::getAllByPollId($poll->getVar("poll_id"));
	$notify_value = 1;
	if ( $poll->getVar("mail_status") != 0 ) {
		$notify_value = 0;
	}
	$notify_yn = new XoopsFormRadioYN(_MD_POLL_NOTIFY, "notify", $notify_value);
	$poll_form->addElement($notify_yn);
	$option_tray = new XoopsFormElementTray(_MD_POLL_POLLOPTIONS, "");
	$barcolor_array =& XoopsLists::getImgListAsArray(XOOPS_ROOT_PATH."/modules/xoopspoll/images/colorbars/");
	$i = 0;
	foreach ($options_arr as $option) {
		$option_text = new XoopsFormText("", "option_text[]", 50, 255, $option->getVar("option_text"));
		$option_tray->addElement($option_text);
		$option_id_hidden = new XoopsFormHidden("option_id[]", $option->getVar("option_id"));
		$option_tray->addElement($option_id_hidden);
		$color_select = new XoopsFormSelect("", "option_color[".$i."]", $option->getVar("option_color"));
		$color_select->addOptionArray($barcolor_array);
		$color_select->setExtra("onchange='showImgSelected(\"option_color_image[".$i."]\", \"option_color[".$i."]\", \"modules/xoopspoll/images/colorbars\", \"\", \"".XOOPS_URL."\")'");
		$color_label = new XoopsFormLabel("", "<img src='".XOOPS_URL."/modules/xoopspoll/images/colorbars/".$option->getVar("option_color", "E")."' name='option_color_image[".$i."]' id='option_color_image[".$i."]' width='30' align='bottom' height='15' alt='' /><br />");
		$option_tray->addElement($color_select);
		$option_tray->addElement($color_label);
		unset($color_select, $color_label, $option_id_hidden, $option_text);
		$i++;
	}
	$more_label = new XoopsFormLabel("", "<br /><a href='polls.php?op=addmore&amp;poll_id=".$poll->getVar("poll_id")."&amp;topic_id=".$topic_id."'>"._MD_POLL_ADDMORE."</a>");
	$option_tray->addElement($more_label);
	$poll_form->addElement($option_tray);
	$op_hidden = new XoopsFormHidden("op", "update");
	$poll_form->addElement($op_hidden);
	$poll_topic_id_hidden = new XoopsFormHidden("topic_id", $topic_id);
	$poll_form->addElement($poll_topic_id_hidden);
	$poll_id_hidden = new XoopsFormHidden("poll_id", $poll->getVar("poll_id"));
	$poll_form->addElement($poll_id_hidden);
	$submit_button = new XoopsFormButton("", "poll_submit", _SUBMIT, "submit");
	$poll_form->addElement($submit_button);
	//include XOOPS_ROOT_PATH."/header.php";
	echo "<h4>"._MD_POLL_POLLCONF."</h4>";
	$poll_form->display();
	//include XOOPS_ROOT_PATH."/footer.php";
	//exit();
}

if ( $op == "update" ) {
	$option_empty = true;
	if (empty($_POST['option_text'])) {
		redirect_header("javascript:history.go(-1);", 2, _MD_ERROROCCURED.': '._MD_POLL_POLLOPTIONS.' !');
	}
	$option_text = $_POST['option_text'];
	foreach ( $option_text as $optxt ) {
		if ( trim($optxt) != "" ) {
			$option_empty = false;
			break;
		}
	}
	if ($option_empty) redirect_header("javascript:history.go(-1);", 2, _MD_ERROROCCURED.': '._MD_POLL_POLLOPTIONS.' !');

	$poll = new XoopsPoll($poll_id);
	//$question = (empty($_POST['question']))?"":$_POST['question'];
	$poll->setVar("question", @$_POST['question']);
	//$description = (empty($_POST['description']))?"":$_POST['description'];
	$poll->setVar("description", @$_POST['description']);
	$end_time = (empty($_POST['end_time']))?"":$_POST['end_time'];
	if ( !empty($end_time) ) {
		$timezone = is_object($xoopsUser)? $xoopsUser->timezone() : null;
// Start user input time in hegira date - hacked by irmtfan (www.jadoogaran.org)
if (defined('_JDF_USE_HEGIRADATE') && _JDF_USE_HEGIRADATE){
 $end_time=inputTimeToGregorian($end_time);
} 
// End user input time in hegira date - hacked by irmtfan (www.jadoogaran.org)
		
		$poll->setVar("end_time", userTimeToServerTime(strtotime($end_time), $timezone));
	}
	$poll->setVar("display", 0);
	//$weight = (empty($_POST['weight']))?"":$_POST['weight'];
	$poll->setVar("weight", intval(@$_POST['weight']));
	//$multiple = (empty($_POST['multiple']))?"":$_POST['multiple'];
	$poll->setVar("multiple", intval(@$_POST['multiple']));
	if ( !empty($_POST["notify"]) && $end_time > time() ) {
		// if notify, set mail status to "not mailed"
		$poll->setVar("mail_status", POLL_NOTMAILED);
	} else {
		// if not notify, set mail status to already "mailed"
		$poll->setVar("mail_status", POLL_MAILED);
	}
	if ( !$poll->store() ) {
		//xoops_error($poll->getHtmlErrors());
		exit();
	}
	$i = 0;
	$option_id = (empty($_POST['option_id']))?NULL:$_POST['option_id'];
	$option_color = (empty($_POST['option_color']))?NULL:$_POST['option_color'];
	foreach ( $option_id as $opid ) {
		$option = new XoopsPollOption($opid);
		$option_text[$i] = trim ($option_text[$i]);
		if ( $option_text[$i] != "" ) {
			$option->setVar("option_text", $option_text[$i]);
			$option->setVar("option_color", $option_color[$i]);
			$option->store();
		} else {
			if ( $option->delete() != false ) {
				XoopsPollLog::deleteByOptionId($option->getVar("option_id"));
			}
		}
		$i++;
	}
	$poll->updateCount();
	include_once XOOPS_ROOT_PATH.'/class/template.php';
	xoops_template_clear_module_cache($xoopsModule->getVar('mid'));
	redirect_header("viewtopic.php?topic_id=$topic_id",1,_MD_POLL_DBUPDATED);
	//exit();
}

if ( $op == "addmore" ) {
	$poll = new XoopsPoll($_GET['poll_id']);
	$poll_form = new XoopsThemeForm(_MD_POLL_ADDMORE, "poll_form", "polls.php");
	$question_label = new XoopsFormLabel(_MD_POLL_POLLQUESTION, $poll->getVar("question"));
	$poll_form->addElement($question_label);
	$option_tray = new XoopsFormElementTray(_MD_POLL_POLLOPTIONS, "");
	$barcolor_array =& XoopsLists::getImgListAsArray(XOOPS_ROOT_PATH."/modules/xoopspoll/images/colorbars/");
	for($i = 0; $i < 10; $i++) {
		$current_bar = (current($barcolor_array) != "blank.gif") ? current($barcolor_array) : next($barcolor_array);
		$option_text = new XoopsFormText("", "option_text[]", 50, 255);
		$option_tray->addElement($option_text);
		$color_select = new XoopsFormSelect("", "option_color[".$i."]", $current_bar);
		$color_select->addOptionArray($barcolor_array);
		$color_select->setExtra("onchange='showImgSelected(\"option_color_image[".$i."]\", \"option_color[".$i."]\", \"modules/xoopspoll/images/colorbars\", \"\", \"".XOOPS_URL."\")'");
		$color_label = new XoopsFormLabel("", "<img src='".XOOPS_URL."/modules/xoopspoll/images/colorbars/".$current_bar."' name='option_color_image[".$i."]' id='option_color_image[".$i."]' width='30' align='bottom' height='15' alt='' /><br />");
		$option_tray->addElement($color_select);
		$option_tray->addElement($color_label);
		unset($color_select, $color_label, $option_text);
		if ( !next($barcolor_array) ) {
			reset($barcolor_array);
		}
	}
	$poll_form->addElement($option_tray);
	$submit_button = new XoopsFormButton("", "poll_submit", _SUBMIT, "submit");
	$poll_form->addElement($submit_button);
	$op_hidden = new XoopsFormHidden("op", "savemore");
	$poll_form->addElement($op_hidden);
	$poll_topic_id_hidden = new XoopsFormHidden("topic_id", $topic_id);
	$poll_form->addElement($poll_topic_id_hidden);
	$poll_id_hidden = new XoopsFormHidden("poll_id", $poll->getVar("poll_id"));
	$poll_form->addElement($poll_id_hidden);
	//include XOOPS_ROOT_PATH."/header.php";
	echo "<h4>"._MD_POLL_POLLCONF."</h4>";
	$poll_form->display();
	//include XOOPS_ROOT_PATH."/footer.php";
	//exit();
}

if ( $op == "savemore" ) {
	$option_empty = true;
	if (empty($_POST['option_text'])) {
		redirect_header("javascript:history.go(-1);", 2, _MD_ERROROCCURED.': '._MD_POLL_POLLOPTIONS.' !');
	}
	$option_text = $_POST['option_text'];
	foreach ( $option_text as $optxt ) {
		if ( trim($optxt) != "" ) {
			$option_empty = false;
			break;
		}
	}
	if ($option_empty) redirect_header("javascript:history.go(-1);", 2, _MD_ERROROCCURED.': '._MD_POLL_POLLOPTIONS.' !');

	$poll = new XoopsPoll($poll_id);
	$i = 0;
	$option_color = (empty($_POST['option_color']))?NULL:$_POST['option_color'];
	foreach ( $option_text as $optxt ) {
		$optxt = trim($optxt);
		if ( $optxt != "" ) {
			$option = new XoopsPollOption();
			$option->setVar("option_text", $optxt);
			$option->setVar("poll_id", $poll->getVar("poll_id"));
			$option->setVar("option_color", $option_color[$i]);
			$option->store();
		}
		$i++;
	}
	include_once XOOPS_ROOT_PATH.'/class/template.php';
	xoops_template_clear_module_cache($xoopsModule->getVar('mid'));
	redirect_header("polls.php?op=edit&amp;poll_id=".$poll->getVar("poll_id")."&amp;topic_id=".$topic_id,1,_MD_POLL_DBUPDATED);
	//exit();
}

if ( $op == "delete" ) {
	//include XOOPS_ROOT_PATH."/header.php";
	echo "<h4>"._MD_POLL_POLLCONF."</h4>";
	$poll = new XoopsPoll($_GET['poll_id']);
	xoops_confirm(array('op' => 'delete_ok','topic_id' => $topic_id, 'poll_id' => $poll->getVar('poll_id')), 'polls.php', sprintf(_MD_POLL_RUSUREDEL,$poll->getVar("question")));
	//include XOOPS_ROOT_PATH."/footer.php";
	//exit();
}

if ( $op == "delete_ok" ) {
	$poll = new XoopsPoll($poll_id);
	if ( $poll->delete() != false ) {
		XoopsPollOption::deleteByPollId($poll->getVar("poll_id"));
		XoopsPollLog::deleteByPollId($poll->getVar("poll_id"));
		include_once XOOPS_ROOT_PATH.'/class/template.php';
		xoops_template_clear_module_cache($xoopsModule->getVar('mid'));
		// delete comments for this poll
		xoops_comment_delete($xoopsModule->getVar('mid'), $poll->getVar('poll_id'));
		$sql = "UPDATE ".$xoopsDB->prefix("bb_topics")." SET votes = 0, topic_haspoll = 0, poll_id = 0 WHERE topic_id = $topic_id";
        if ( !$result = $xoopsDB->query($sql) ) {
            //xoops_error($xoopsDB->error());
        }
	}
	redirect_header("viewtopic.php?topic_id=$topic_id",1,_MD_POLL_DBUPDATED);
	//exit();
}

if ( $op == "restart" ) {
	$poll = new XoopsPoll($_GET['poll_id']);
	$poll_form = new XoopsThemeForm(_MD_POLL_RESTARTPOLL, "poll_form", "polls.php");
	$expire_text = new XoopsFormText(_MD_POLL_EXPIRATION."<br /><small>"._MD_POLL_FORMAT."<br />".sprintf(_MD_POLL_CURRENTTIME, formatTimestamp(time(), "Y-m-d H:i:s"))."</small>", "end_time", 20, 19, formatTimestamp(time()+604800, "Y-m-d H:i:s"));
	$poll_form->addElement($expire_text);
	$notify_yn = new XoopsFormRadioYN(_MD_POLL_NOTIFY, "notify", 1);
	$poll_form->addElement($notify_yn);
	$reset_yn = new XoopsFormRadioYN(_MD_POLL_RESET, "reset", 0);
	$poll_form->addElement($reset_yn);
	$op_hidden = new XoopsFormHidden("op", "restart_ok");
	$poll_form->addElement($op_hidden);
	$poll_topic_id_hidden = new XoopsFormHidden("topic_id", $topic_id);
	$poll_form->addElement($poll_topic_id_hidden);
	$poll_id_hidden = new XoopsFormHidden("poll_id", $poll->getVar("poll_id"));
	$poll_form->addElement($poll_id_hidden);
	$submit_button = new XoopsFormButton("", "poll_submit", _MD_POLL_RESTART, "submit");
	$poll_form->addElement($submit_button);
	//include XOOPS_ROOT_PATH."/header.php";
	echo "<h4>"._MD_POLL_POLLCONF."</h4>";
	$poll_form->display();
	//include XOOPS_ROOT_PATH."/footer.php";
	//exit();
}

if ( $op == "restart_ok" ) {
	$poll = new XoopsPoll($poll_id);
	$end_time = (empty($_POST['end_time']))?"":$_POST['end_time'];
	if ( !empty($end_time) ) {
		$timezone = is_object($xoopsUser)? $xoopsUser->timezone() : null;
		// Start user input time in hegira date - hacked by irmtfan (www.jadoogaran.org)
if (defined('_JDF_USE_HEGIRADATE') && _JDF_USE_HEGIRADATE){
 $end_time=inputTimeToGregorian($end_time);
} 
// End user input time in hegira date - hacked by irmtfan (www.jadoogaran.org)

		$poll->setVar("end_time", userTimeToServerTime(strtotime($end_time), $timezone));
	} else {
		$poll->setVar("end_time", time() + (86400 * 10));
	}
	if ( !empty($_POST["notify"]) && $end_time > time() ) {
		// if notify, set mail status to "not mailed"
		$poll->setVar("mail_status", POLL_NOTMAILED);
	} else {
		// if not notify, set mail status to already "mailed"
		$poll->setVar("mail_status", POLL_MAILED);
	}
	if ( !empty($_POST["reset"]) ) {
		// reset all logs
		XoopsPollLog::deleteByPollId($poll->getVar("poll_id"));
		XoopsPollOption::resetCountByPollId($poll->getVar("poll_id"));
	}
	if (!$poll->store()) {
		//xoops_error($poll->getHtmlErrors());
		exit();
	}
	$poll->updateCount();
	include_once XOOPS_ROOT_PATH.'/class/template.php';
	xoops_template_clear_module_cache($xoopsModule->getVar('mid'));
	redirect_header("viewtopic.php?topic_id=$topic_id",1,_MD_POLL_DBUPDATED);
	//exit();
}

if ( $op == "log" ) {
	//include XOOPS_ROOT_PATH."/header.php";
	echo "<h4>"._MD_POLL_POLLCONF."</h4>";
	echo "<br />View Log<br /> Sorry, not yet. ;-)";
	//include XOOPS_ROOT_PATH."/footer.php";
	//exit();
}

include XOOPS_ROOT_PATH."/footer.php";
?>