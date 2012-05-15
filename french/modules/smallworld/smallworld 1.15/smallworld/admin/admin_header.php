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
* @Repository path:		$HeadURL$
* @Last committed:		$Revision$
* @Last changed by:		$Author$
* @Last changed date:	$Date$
* @ID:					$Id$
**/

$path = dirname(dirname(dirname(dirname(__FILE__))));
include_once $path . '/mainfile.php';
include_once $path . '/include/cp_functions.php';
include_once $path . '/kernel/module.php';
require_once $path . '/include/cp_header.php';

global $xoopsModule;

$pathModuleAdmin = $xoopsModule->getInfo('dirmoduleadmin');
$pathIcon16 = '../' . $xoopsModule->getInfo('icons16');
$pathIcon32 = '../' . $xoopsModule->getInfo('icons32');

if (file_exists($GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php'))) {
    include_once $GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php');
} else {
    redirect_header("../../../admin.php", 5, _AM_MODULEADMIN_MISSING, false);
}

if ($xoopsUser) {
    $xoopsModule = XoopsModule::getByDirname("smallworld");
    if (!$xoopsUser->isAdmin($xoopsModule->mid())) {
        redirect_header(XOOPS_URL . "/", 2, _NOPERM);
        exit();
    }
} else {
    redirect_header(XOOPS_URL . "/", 2, _NOPERM);
    exit();
}