<?php
/**
 * ****************************************************************************
 * boox - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard (http://www.herve-thouzard.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard (http://www.herve-thouzard.com)
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @package         boox
 * @author 			Hervé Thouzard (http://www.herve-thouzard.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}

/**
 * Returns a module's option
 *
 * Return's a module's option (for the news module)
 *
 * @package Boox
 * @author Instant Zero (http://xoops.instant-zero.com)
 * @copyright	(c) Instant Zero
 * @param string $option	module option's name
 */
function boox_getmoduleoption($option, $repmodule='boox')
{
	global $xoopsModuleConfig, $xoopsModule;
	static $tbloptions= Array();
	if(is_array($tbloptions) && array_key_exists($option,$tbloptions)) {
		return $tbloptions[$option];
	}

	$retval=false;
	if (isset($xoopsModuleConfig) && (is_object($xoopsModule) && $xoopsModule->getVar('dirname') == $repmodule && $xoopsModule->getVar('isactive'))) {
		if(isset($xoopsModuleConfig[$option])) {
			$retval= $xoopsModuleConfig[$option];
		}
	} else {
		$module_handler =& xoops_gethandler('module');
		$module =& $module_handler->getByDirname($repmodule);
		$config_handler =& xoops_gethandler('config');
		if ($module) {
		    $moduleConfig =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));
	    	if(isset($moduleConfig[$option])) {
	    		$retval= $moduleConfig[$option];
	    	}
		}
	}
	$tbloptions[$option]=$retval;
	return $retval;
}

/**
 * Is Xoops 2.3.x ?
 *
 * @return boolean need to say it ?
 */
function boox_isX23()
{
	$x23 = false;
	$xv = str_replace('XOOPS ','',XOOPS_VERSION);
	if(intval(substr($xv,2,1)) >= 3) {
		$x23 = true;
	}
	return $x23;
}


/**
 * Retreive an editor according to the module's option "form_options"
 *
 * @param string $caption Caption to give to the editor
 * @param string $name Editor's name
 * @param string $value Editor's value
 * @param string $width Editor's width
 * @param string $height Editor's height
 * @return object The editor to use
 */
function boox_getWysiwygForm($caption, $name, $value = '', $width = '100%', $height = '400px', $supplemental = '')
{
    $editor = false;
    $editor_configs = array();
    $editor_configs['name'] = $name;
    $editor_configs['value'] = $value;
    $editor_configs['rows'] = 35;
    $editor_configs['cols'] = 60;
    $editor_configs['width'] = '100%';
    $editor_configs['height'] = '400px';
    $editor_option = strtolower(boox_getmoduleoption('form_options'));
    if (boox_isX23()) {
        $editor = new XoopsFormEditor($caption, $editor_option, $editor_configs);
        return $editor;
    }
    // Only for Xoops 2.0.x
    switch ($editor_option) {
        case 'fckeditor':
            if (is_readable(XOOPS_ROOT_PATH . '/class/fckeditor/formfckeditor.php')) {
                require_once (XOOPS_ROOT_PATH . '/class/fckeditor/formfckeditor.php');
                $editor = new XoopsFormFckeditor($caption, $name, $value);
            }
            break;
        case 'htmlarea':
            if (is_readable(XOOPS_ROOT_PATH . '/class/htmlarea/formhtmlarea.php')) {
                require_once (XOOPS_ROOT_PATH . '/class/htmlarea/formhtmlarea.php');
                $editor = new XoopsFormHtmlarea($caption, $name, $value);
            }
            break;
        case 'dhtmltextarea':
            $editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 10, 50, $supplemental);
            break;
        case 'textarea':
            $editor = new XoopsFormTextArea($caption, $name, $value);
            break;
        case 'tinyeditor':
        case 'tinymce':
            if (is_readable(XOOPS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php')) {
                require_once XOOPS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php';
                $editor = new XoopsFormTinyeditorTextArea(array('caption' => $caption , 'name' => $name , 'value' => $value , 'width' => '100%' , 'height' => '400px'));
            }
            break;
        case 'koivi':
            if (is_readable(XOOPS_ROOT_PATH . '/class/wysiwyg/formwysiwygtextarea.php')) {
                require_once (XOOPS_ROOT_PATH . '/class/wysiwyg/formwysiwygtextarea.php');
                $editor = new XoopsFormWysiwygTextArea($caption, $name, $value, $width, $height, '');
            }
            break;
    }
    return $editor;
}


/**
 * Create (in a link) a javascript confirmation box
 */
function boox_JavascriptLinkConfirm($msg)
{
	return "onclick=\"javascript:return confirm('".str_replace("'"," ",$msg)."')\"";
}
?>