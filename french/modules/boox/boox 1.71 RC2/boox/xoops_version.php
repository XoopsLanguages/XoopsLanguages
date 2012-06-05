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
	die("XOOPS root path not defined");
}

$modversion['name'] = _MI_BOOX_NAME;
$modversion['version'] = 1.71;
$modversion['description'] = _MI_BOOX_DESC;
$modversion['credits'] = 'wilson';
$modversion['author'] = 'Hervé Thouzard (http://www.herve-thouzard.com)';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = "www.gnu.org/licenses/gpl-2.0.html/";
$modversion['help'] = 'page=help';
$modversion['official'] = 0;
$modversion['image'] = 'images/boox_logo.png';
$modversion['dirname'] = 'boox';

$modversion['official'] = 0;
$modversion['dirmoduleadmin'] = '/Frameworks/moduleclasses/moduleadmin';
$modversion['icons16'] = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = '../../Frameworks/moduleclasses/icons/32';

//about
$modversion["demo_site_url"] = '';
$modversion["demo_site_name"] = '';
$modversion["module_website_url"] = 'http://xoops.org';
$modversion["module_website_name"] = 'XOOPS';
$modversion["release"] = '0';
$modversion["module_status"] = 'RC2';
$modversion['release_date'] = '2012/04/02';
$modversion['min_php'] = '5.2';
$modversion['min_xoops'] = '2.5.0';
$modversion['min_admin']='1.1';
//$modversion['min_db']= array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');

$modversion['sqlfile']['mysql'] = '';


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';
$modversion['system_menu'] = 1;

// Templates

// Blocks

// Menu
$modversion['hasMain'] = 0;

// Search
$modversion['hasSearch'] = 0;

// Comments
$modversion['hasComments'] = 0;


/**
 * Where do you want to save your files ?
 */
$i=0;
$modversion['config'][$i]['name'] = 'foldertosave';
$modversion['config'][$i]['title'] = '_MI_BOOX_OPT0';
$modversion['config'][$i]['description'] = '_MI_BOOX_OPT0_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = XOOPS_UPLOAD_PATH;

/**
 * Which editor to use ?
 */
$i++;
$modversion['config'][$i]['name'] = 'form_options';
$modversion['config'][$i]['title'] = "_MI_BOOX_FORM_OPTIONS";
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtml';
xoops_load('xoopseditorhandler');
$editor_handler = XoopsEditorHandler::getInstance();
$modversion['config'][$i]['options'] = array_flip($editor_handler->getList());


/**
 * Trim file's content before to save it ?
 */
$i++;
$modversion['config'][$i]['name'] = 'trimcontent';
$modversion['config'][$i]['title'] = '_MI_BOOX_OPT1';
$modversion['config'][$i]['description'] = '_MI_BOOX_OP1_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;


// Notifications
$modversion['hasNotification'] = 0;
?>