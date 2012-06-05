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

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

$dirname = basename(dirname(dirname(__FILE__)));
$module_handler = xoops_gethandler('module');
$module = $module_handler->getByDirname($dirname);
$pathIcon32 = $module->getInfo('icons32');

xoops_loadLanguage('admin', $dirname);

$i = 0;
$adminmenu[$i]["title"] = _MI_BOOX_MENU_00;
$adminmenu[$i]["link"] = 'admin/index.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/home.png';

$i++;
$adminmenu[$i]["title"] = _MI_BOOX_MENU_01;
$adminmenu[$i]["link"] = 'admin/main.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/manage.png';

$i++;
$adminmenu[$i]["title"] = _MI_BOOX_ADMIN_ABOUT;
$adminmenu[$i]["link"] = 'admin/about.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/about.png';
