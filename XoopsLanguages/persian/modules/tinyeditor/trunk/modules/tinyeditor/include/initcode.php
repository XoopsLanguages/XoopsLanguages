<?php
// $Id: initcode.php,v 1.13 2006/07/09 11:25:06 frankblacksf Exp $
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


	if (file_exists('../../../mainfile.php')) include_once '../../../mainfile.php';
	if (file_exists('../../../../mainfile.php')) include_once '../../../../mainfile.php';
	if (file_exists('../../mainfile.php')) include_once '../../mainfile.php';
	if (!defined('XOOPS_ROOT_PATH')) 
		exit();
	
	global $xoopsConfig, $xoopsUser;
	$module_handler =& xoops_gethandler('module');
	$module =& $module_handler->getByDirname("tinyeditor");
	$config_handler =& xoops_gethandler('config');
	$moduleConfig =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));

	$xoopsConfig['language'] = preg_replace("/[^a-z0-9_\-]/i", "", $xoopsConfig['language']);
	if (file_exists(XOOPS_ROOT_PATH."/modules/tinyeditor/language/".$xoopsConfig['language']."/main.php"))
		include_once XOOPS_ROOT_PATH."/modules/tinyeditor/language/".$xoopsConfig['language']."/main.php";
	else
		include_once XOOPS_ROOT_PATH."/modules/tinyeditor/language/english/main.php";

	global $xoopsUser, $xoopsDB;

	$myts =& MyTextSanitizer::getInstance();

	$thegroupid = '';

	if (is_object($xoopsUser)) {
		$uid = $xoopsUser->getVar('uid');
		$getthegroupid = $xoopsUser->getGroups($uid);
		if ($moduleConfig['tinygroupoverride'] != '') {
			$split_override_array = explode(" ", $moduleConfig['tinygroupoverride']);
			foreach ($split_override_array as $override_value) {
				$pieces = explode("|", $override_value);
				$group_pointer = array_pop($pieces);
				if (array_intersect($getthegroupid, $pieces)) {
					$thegroupid = $group_pointer;
					break;
				}
			}
		} else {	
			$thegroupid = array_slice($getthegroupid, 0, 1);
			$thegroupid = implode(" ", $thegroupid);
			$thegroupid = trim($thegroupid);
		}
	} else {
		$thegroupid = 3;
	}

	$sqlgetbuts = "SELECT tinyed_id, tinyed_gid, tinyed_row1, tinyed_row2, tinyed_row3, activeplugs, validelements, extvalidelements, invalidelements FROM ".$xoopsDB->prefix('tinyeditor_toolset')." WHERE tinyed_gid = ".intval($thegroupid)."";
	$resultgetbuts = $xoopsDB->query($sqlgetbuts);
	list($tinyed_id, $tinyed_gid, $tinyed_row1, $tinyed_row2, $tinyed_row3, $activeplugs, $validelements, $extvalidelements, $invalidelements) = $xoopsDB->fetchRow($resultgetbuts);

	$arrayrow1 = split(' ', $tinyed_row1);
		if (in_array('style', $arrayrow1)) $tinyed_row1 = str_replace('style','styleprops', $tinyed_row1);
		if (in_array('layer', $arrayrow1)) $tinyed_row1 = str_replace('layer','insertlayer moveforward movebackward absolute', $tinyed_row1);
	$arrayrow2 = split(' ', $tinyed_row2);
		if (in_array('style', $arrayrow2)) $tinyed_row2 = str_replace('style','styleprops', $tinyed_row2);
		if (in_array('layer', $arrayrow2)) $tinyed_row2 = str_replace('layer','insertlayer moveforward movebackward absolute', $tinyed_row2);
	$arrayrow3 = split(' ', $tinyed_row3);
		if (in_array('style', $arrayrow3)) $tinyed_row3 = str_replace('style','styleprops', $tinyed_row3);
		if (in_array('layer', $arrayrow3)) $tinyed_row3 = str_replace('layer','insertlayer moveforward movebackward absolute', $tinyed_row3);
	$tinyed_plugs = split(' ', $activeplugs);

	// fallback to english if language is not defined in preferences
	if ($moduleConfig['tinyedlang'] == '') $moduleConfig['tinyedlang'] = 'en';

	// START: Use Gzip output compression?
	if ((extension_loaded('zlib')) && ($moduleConfig['tinyedmgrgzip'] == 1)) {
		//if (eregi("msie",$_SERVER['HTTP_USER_AGENT'])) {
			//$tinyededitor_load = "tiny_mce.js";
		//} else {
		$tinyededitor_load = "tiny_mce_gzip.js";
		//}
	} else {
		$tinyededitor_load = "tiny_mce.js";
	}
	// END: Use Gzip output compression?

	global $xoopsConfig;




	echo '<script language="javascript" type="text/javascript" src="'.XOOPS_URL.'/modules/tinyeditor/editor/'.$tinyededitor_load.'"></script>';

	if ((extension_loaded('zlib')) && ($moduleConfig['tinyedmgrgzip'] == 1)) {
	echo "<script type='text/javascript'>";
	echo "tinyMCE_GZ.init({";
	echo 'plugins : "';
	echo str_replace(" ", ",", $activeplugs);

		if (in_array("xrmanager", $arrayrow1) || in_array("xrmanager", $arrayrow2) || in_array("xrmanager", $arrayrow3))
			echo ',xrmanager';
		if (in_array("noneditable", $tinyed_plugs))
			echo ",noneditable";

	echo '",';
    echo "themes : 'advanced',";
	echo 'languages : "'.$moduleConfig['tinyedlang'].'",';
    echo "disk_cache : true,";
    echo "debug : false";
	echo "});";
	echo "</script>";
	}
	
	if (in_array("xrmanager", $arrayrow1) || in_array("xrmanager", $arrayrow2) || in_array("xrmanager", $arrayrow3)) {
		
		echo '<script type="text/javascript">
			function OpenCentPopup(theURL,winName,features, myWidth, myHeight, isCenter) {
				if (window.screen) if (isCenter) if (isCenter == "true") {
					var myLeft = (screen.width-myWidth)/2;
					var myTop = (screen.height-myHeight)/2;
					features+=(features!="")?",":"";
					features+=",left="+myLeft+",top="+myTop;
				}
			window.open(theURL,winName,features+((features!="")?",":"")+"width="+myWidth+",height="+myHeight);
			}
	
			var fileBrowserReturnURL = "";
			var fileBrowserWin;
			var fileBrowserFieldName;
	
			function fileBrowserCallBack(field_name, url, type, win) {
			var Xrtype;
				switch(type) {
					case "image":
					Xrtype = "Image";
					break;
					case "file":
					Xrtype = "File";
					break;
					case "flash":
					Xrtype = "Flash";
					break;
					case "default":
					Xrtype = "";
					break;
				}
  		
			OpenCentPopup("'.XOOPS_URL.'/modules/tinyeditor/xrmanager/manager.php","","","700","550","true");
			fileBrowserWin = win;
			fileBrowserFieldName = field_name;
			}
	
			function fileBrowserReturn( url ) {
			fileBrowserWin.document.forms[0].elements[fileBrowserFieldName].value = url;
			}
		</script>';
	}

	if ($moduleConfig['tinyedrelurls'] == '1') {
		echo '<script type="text/javascript">';
		echo '
			function plugin_regexrep_setup(editor_id, node) {
			node.innerHTML = plugin_regexrep_replace(node.innerHTML, "setupcontent_regex");
			}

			// Same as above, but for saving.
			function plugin_regexrep_save(editor_id, content, node) {
			return plugin_regexrep_replace(content, "save_regex");
			}

			function plugin_regexrep_replace(content, tiny_param) {
			var re_string = tinyMCE.getParam(tiny_param);
				if (typeof(re_string) == "undefined" || re_string == "" || re_string == null) {
					return;
				}

			var re_array = re_string.split(/[*][*]/g);

				for (i=0; i<re_array.length; i++) {
					if (typeof(re_array[i]) == "undefined" || re_array[i] == "" || re_array[i] == null) {
						continue;
					}
					var tokens = re_array[i].split(/@@/g);
					if (tokens[0] == null) { return; } // Should never happen, but...
					var replace = ((tokens[1] == null || typeof tokens[1] == "undefined") ? "" : tokens[1] );
					var flags = ((tokens[2] == null || typeof tokens[2] == "undefined") ? "g" : tokens[2] );
					var re = new RegExp(tokens[0], flags);
					content = content.replace(re, replace);
				}
			return content;	
			}';
		echo '</script>';
	}

	echo '<script language="javascript" type="text/javascript">';
	echo 'tinyMCE.init({';
	echo 'mode : "textareas",';
	echo 'editor_selector : "mceEditor",';
	echo 'theme : "advanced",';
	echo 'language : "'.$moduleConfig['tinyedlang'].'",';
		if ($moduleConfig['tinyedcss'] == '') {
			$fallbackcssfile = str_replace(XOOPS_THEME_URL, XOOPS_THEME_PATH, xoops_getcss($xoopsConfig['theme_set']));
			$handle = fopen ($fallbackcssfile, "r");
			$buffer = fgets($handle);
			$pos = strpos ($buffer, "@");
			if ($pos === false) {
				echo 'content_css: "'.xoops_getcss($xoopsConfig['theme_set']).'",';
				fclose($handle);
			} else {
			$buffer = preg_replace('/(.*)\(|\)(.*)/msU','', trim($buffer));
			$buffer = str_replace(';','', $buffer);
			$fallbackcssfile = str_replace(XOOPS_THEME_PATH, XOOPS_THEME_URL, $fallbackcssfile);
			$cssfilename = end(explode("/", $fallbackcssfile));
			$fallbackcssfile = str_replace($cssfilename, $buffer, $fallbackcssfile);
			fclose($handle);
			echo 'content_css: "'.$fallbackcssfile.'",';
			}
		} else {
			echo 'content_css: "'.XOOPS_URL.$moduleConfig['tinyedcss'].'",';
		}
// Start - change this function like below to add css file in language - hacked by irmtfan @ jadoogaran.org
 		
		$tiny_lang_css_file_url= '/modules/tinyeditor/language/'.$GLOBALS['xoopsConfig']['language'].'/css/'._LANGCODE.'.css';
		if ( file_exists(XOOPS_ROOT_PATH.$tiny_lang_css_file_url) ){
			echo 'content_css: "'.XOOPS_URL.$tiny_lang_css_file_url.'",';
		}
// End - change this function like below to add css file in language - hacked by irmtfan @ jadoogaran.org	}

		if ($moduleConfig['tinyedforcebr'] == '1') {
			echo 'force_br_newlines: "true",';
		} else {
			echo 'force_br_newlines: "false",';
		}

		if ($moduleConfig['tinyedforcep'] == '0') {
			echo 'force_p_newlines: "false",';
		} else {
			echo 'force_p_newlines: "true",';
		}

		if ($moduleConfig['tinyedrelurls'] == '0') {
			echo 'relative_urls : "false",';
		} else {
			echo 'relative_urls : "true",';
			echo 'remove_script_host : "true",';
		}

		// some replacements have to be made, because the editor can be called from various places
		if (($moduleConfig['tinyedrelurls'] == '1') && (eregi('/admin/', $_SERVER['SCRIPT_FILENAME']))) {
			$relurlsloading = 'plugin_regexrep_setup';
			$relurlssaving = 'plugin_regexrep_save';
			echo 'setupcontent_regex : "../../@@../../../",';
			// No comma after last item, or get "Expected identifier, string or a number" in IE.
			echo 'save_regex : "../../../@@../../",';
		} elseif (($moduleConfig['tinyedrelurls'] == '1') && (!eregi('/admin/', $_SERVER['SCRIPT_FILENAME']))) {
			$relurlsloading = 'plugin_regexrep_setup';
			$relurlssaving = 'plugin_regexrep_save';
			echo 'setupcontent_regex : "../../../@@../../",';
			// No comma after last item, or get "Expected identifier, string or a number" in IE.
			echo 'save_regex : "../../@@../../../",';
		} else {
			//nothing
		}

			echo 'directionality : "'._MD_TINY_RTL.'",';
		
		if ($moduleConfig['tinyedrelurls'] == '1') {
			echo 'setupcontent_callback : "plugin_regexrep_setup",';
			echo 'save_callback : "plugin_regexrep_save",';
		}
	
	echo 'convert_urls : true,';
	echo 'theme_advanced_toolbar_align : "left",';
	echo 'theme_advanced_resizing : true,';
	echo 'button_tile_map: true,';
	echo 'theme_advanced_resize_horizontal : "false",';
	echo 'theme_advanced_resizing_use_cookie : "false",';
	
		if (in_array("xrmanager", $arrayrow1) || in_array("xrmanager", $arrayrow2) || in_array("xrmanager", $arrayrow3)) {
			echo 'file_browser_callback : "fileBrowserCallBack",';
		}

	echo 'plugins : "';
	echo str_replace(" ", ",", $activeplugs);

		if (in_array("xrmanager", $arrayrow1) || in_array("xrmanager", $arrayrow2) || in_array("xrmanager", $arrayrow3))
			echo ',xrmanager';
		if (in_array("noneditable", $tinyed_plugs))
			echo ",noneditable";

	echo '",';
	
		// weird code, I know, but tinyMCE is to blame ;-)
		if ($validelements != '')
			echo 'valid_elements : "'.$myts->undoHtmlSpecialChars(str_replace(' ','', trim($validelements))).'",';
		if ($extvalidelements != '') 
			echo 'extended_valid_elements : "'.$myts->undoHtmlSpecialChars(str_replace(' ','', trim($extvalidelements))).'",';
		if ($invalidelements != '')
			echo 'invalid_elements : "'.$myts->undoHtmlSpecialChars(str_replace(' ','', trim($invalidelements))).'",';

	echo 'theme_advanced_toolbar_location: "'.$moduleConfig['tinyedtbloc'].'",';
	echo 'theme_advanced_path_location: "'.$moduleConfig['tinyedpathloc'].'",';
	echo 'theme_advanced_buttons1: "';
		echo (str_replace(' ',',', $tinyed_row1));
		echo '",';
	echo 'theme_advanced_buttons2: "';
		echo (str_replace(' ',',', $tinyed_row2));
		echo '",';
	echo 'theme_advanced_buttons3: "';
		echo (str_replace(' ',',', $tinyed_row3));
		echo '",';
	echo 'plugin_insertdate_dateFormat: "'.$moduleConfig['tinyedplugdate'].'",';
	echo 'plugin_insertdate_timeFormat: "'.$moduleConfig['tinyedplugtime'].'",';
	echo 'theme_advanced_styles : "';
		if (in_array("noneditable", $tinyed_plugs))
			echo "Non editable=mceNonEditable";
			echo '",';
		if (in_array("noneditable", $tinyed_plugs))
			echo "noneditable_leave_contenteditable : false,";
	echo 'verify_html : true,';
	echo 'cleanup : true,';
	echo 'debug : false';
	echo '});';
	echo '</script>';
	
?>