<?php
/**
 * ****************************************************************************
 * boox - MODULE FOR XOOPS
 * Copyright (c) Herv� Thouzard (http://www.herve-thouzard.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Herv� Thouzard (http://www.herve-thouzard.com)
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @package         boox
 * @author 			Herv� Thouzard (http://www.herve-thouzard.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

require_once '../../../include/cp_header.php';
require_once XOOPS_ROOT_PATH.'/modules/boox/include/functions.php';
require_once XOOPS_ROOT_PATH.'/modules/boox/class/storage.php';
include_once 'admin_header.php';

$indexAdmin = new ModuleAdmin();

// ********************************************************************************************************************
// **** Main
// ********************************************************************************************************************
$op = 'default';
if(isset($_POST['op'])) {
 $op=$_POST['op'];
} elseif(isset($_GET['op'])) {
	$op=$_GET['op'];
}
$storage = new boox_storage();

function edit_file_content($content='', $filename='')
{
	require_once XOOPS_ROOT_PATH.'/class/xoopsformloader.php';
	$sform = new XoopsThemeForm(_AM_BOOX_FILE, 'ffile', XOOPS_URL.'/modules/boox/admin/main.php', 'post');
	if(xoops_trim($filename) != '') {
		$sform->addElement(new XoopsFormHidden('filename', $filename), false);
	} else {
		$sform->addElement(new XoopsFormText(_AM_BOOX_FILENAME, 'filename', 50, 255, $filename), true);
		$sform->addElement(new XoopsFormHidden('newfile', '1'), false);
	}
	$sform->addElement(new XoopsFormHidden('op', 'save'), false);
	$editor = boox_getWysiwygForm(_AM_BOOX_CONTENT, 'file_content', $content, 15, 60, 'content_hidden');
	if($editor) {
		$sform->addElement($editor,false);
	}
	$button_tray = new XoopsFormElementTray('' ,'');
	$submit_btn = new XoopsFormButton('', 'post', _SUBMIT, 'submit');
	$button_tray->addElement($submit_btn);
	$sform->addElement($button_tray);
	$sform->display();
}



switch ($op) {
	case 'addfile':		// Add a new file
		xoops_cp_header();
        echo $indexAdmin->addNavigation('main.php');
		edit_file_content();
		break;

	case 'save':		// Save a file after it was edited (or created)
		$folder_storage = xoops_trim(boox_getmoduleoption('foldertosave'));
		if(!isset($_POST['filename'])) {
			redirect_header( 'main.php', 3, _AM_BOOX_ERROR1);
		}

		if(substr($folder_storage,-1,1) != '/') {
			$folder_storage .= '/';
		}
		$filename = $_POST['filename'];
		$content = $_POST['file_content'];
		if (get_magic_quotes_gpc()) {
			$content = stripslashes($content);
		}
		if(boox_getmoduleoption('trimcontent')) {
			$content = xoops_trim($content);
		}
		$fp = fopen($folder_storage.$filename,'w') or die(_AM_BOOX_ERROR1);
		fwrite($fp,$content);
		fclose($fp);
		if(isset($_POST['newfile'])) {
			$storage->getAllFiles();
			$storage->addfiles($filename);
			$storage->store();
		}
		redirect_header('main.php',2,_AM_BOOX_DBUPDATED);
		break;


	case 'edit':
		xoops_cp_header();
        echo $indexAdmin->addNavigation('main.php');
		if(!isset($_GET['filename'])) {
			redirect_header( 'main.php', 3, _AM_BOOX_ERROR1);
		}
		$folder_storage = xoops_trim(boox_getmoduleoption('foldertosave'));
		if(substr($folder_storage,-1,1) != '/') {
			$folder_storage .= '/';
		}
		$filename = $_GET['filename'];
		$fp = fopen($folder_storage.$filename,'r') or die(sprintf(_AM_BOOX_ERROR3,$filename));
		$content = fread($fp, filesize($folder_storage.$filename));
		fclose($fp);
		edit_file_content($content, $filename);
		break;


	case 'delete':		// Delete a file
		if(!isset($_GET['filename'])) {
			redirect_header( 'main.php', 3, _AM_BOOX_ERROR1);
		}
		$filename = $_GET['filename'];
		$storage->getAllFiles();
		$storage->delete($filename);
		$storage->store();
		$folder_storage = xoops_trim(boox_getmoduleoption('foldertosave'));
		if(substr($folder_storage,-1,1) != '/') {
			$folder_storage .= '/';
		}
		@unlink($folder_storage.$filename);
		redirect_header('main.php',2,_AM_BOOX_DBUPDATED);
		break;


	default:		// Default action, list existing files
		$folder_storage = xoops_trim(boox_getmoduleoption('foldertosave'));
		if(substr($folder_storage,-1,1) != '/') {
			$folder_storage .= '/';
		}
        xoops_cp_header();
        echo $indexAdmin->addNavigation('main.php');
        $indexAdmin->addItemButton(_ADD, 'main.php?op=addfile', 'add', '');
        echo $indexAdmin->renderButton('right', '');

        echo '<h4>'._AM_BOOX_FILES.'</h4>';
		$files = array();
		$files = $storage->getAllFiles();
		echo '<table border="0" align="center" width="95%">';
		echo '<tr>';
		echo '<th align="center">'._AM_BOOX_FILE.'</th>';
		echo '<th align="center">'._AM_BOOX_COMMAND.'</th>';
		echo '<th align="center">'._AM_BOOX_ACTION.'</th>';
		echo '</tr>';
		$class='';
		foreach($files as $file) {
			$class = ($class == 'even') ? 'odd' : 'even';
            $action_edit = '<a title="'._EDIT.'" href="main.php?op=edit&filename='.urlencode($file).'"><img border="0" src="../images/edit.gif" /></a>';
            $action_delete = '<a '.boox_JavascriptLinkConfirm(_AM_BOOX_CONFIRM).' title="'._DELETE.'" href="main.php?op=delete&filename='.urlencode($file).'"><img border="0" src="../images/delete.gif" /></a>';
			$command = "<{php}>include_once '".$folder_storage.$file."';<{/php}>";
			echo "<tr class='".$class."'>";
			echo '<td>'.$file.'</td>';
			echo '<td>'.$command.'</td>';
			echo "<td align='center'>".$action_edit.' '.$action_delete.'</td>';
			echo "</tr>";
		}
		$class = ($class == 'even') ? 'odd' : 'even';
		//echo "<tr class='".$class."'><td colspan='3' align='center'><br /><form method='post' name='fadd' id='fadd' action='main.php'><input type='hidden' name='op' value='addfile' /><input type='submit' name='btngo' value='"._AM_BOOX_ADD."' /></form><br /></td></tr>";
		echo '</table><br/>';

        //echo "<br /><div align='center'><a href='http://xoops.instant-zero.com' target='_blank'><img src='../images/instantzero.gif'></a></div>";
		break;
}
include "admin_footer.php";
//xoops_cp_footer();
