<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:            The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:              http://www.fsf.org/copyleft/gpl.html GNU public license
* @module:               Smallworld
* @Author:               Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:            2011 Culex
* @Repository path:      $HeadURL$
* @Last committed:       $Revision$
* @Last changed by:      $Author$
* @Last changed date:    $Date$
* @ID:                   $Id$
**/

include_once dirname(__FILE__) . '/admin_header.php';

xoops_cp_header();
global $xoTheme;        
$xoTheme->addStylesheet(
    XOOPS_URL . '/modules/smallworld/css/SmallworldAdmin.css'
);     
$xoTheme->addScript(
    XOOPS_URL . '/modules/smallworld/js/adminsmallworld.js'
);  

$aboutAdmin = new ModuleAdmin();

echo $aboutAdmin->addNavigation('about.php');
echo $aboutAdmin->renderAbout('', false);

include 'admin_footer.php';