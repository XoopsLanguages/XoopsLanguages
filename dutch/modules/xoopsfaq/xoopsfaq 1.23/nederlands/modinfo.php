<?php
/**
 * Name: modinfo.php
 * Description:
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package : XOOPS
 * @Module : Xoops FAQ
 * @subpackage : Menu Language
 * @since 2.3.0
 * @author John Neill
 * @version $Id: modinfo.php 0000 10/04/2009 09:08:46 John Neill $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Module Version
 */
define('_MI_XOOPSFAQ_NAME', 'Xoops FAQ');
define('_MI_XOOPSFAQ_DESC', 'Xoops FAQ beheer');

/**
 * Module Menu
 */
//define('_MI_XOOPSFAQ_MENU_MODULEHOME', 'Module Home');
//define('_MI_XOOPSFAQ_MENU_MODULEBLOCKS', 'Blokken');
//define('_MI_XOOPSFAQ_MENU_MODULETEMPLATES', 'Sjablonen');
//define('_MI_XOOPSFAQ_MENU_MODULECOMMENTS', 'reacties');
define('_MI_XOOPSFAQ_MENU_ADMININDEX', 'Overzicht');
define('_MI_XOOPSFAQ_MENU_ADMINCATEGORY', 'Categorie');
define('_MI_XOOPSFAQ_MENU_ADMINFAQ', 'Vraag');
define('_MI_XOOPSFAQ_MENU_ADMINABOUT', 'Over');

// index.php
//define("_MI_XOOPSFAQ_ADMIN_HOME", "Terug");
define("_MI_XOOPSFAQ_ADMIN_INDEX", "FAQ");
define("_MI_XOOPSFAQ_ADMIN_ABOUT", "Over");
//define("_MI_XOOPSFAQ_ADMIN_HELP", "Hulp");
//define("_MI_XOOPSFAQ_ADMIN_PREFERENCES", "Instellingen");

//define("_MI_XOOPSFAQ_ADMIN_HOME_DESC", "Terug");
define("_MI_XOOPSFAQ_ADMIN_INDEX_DESC", "FAQ");
define("_MI_XOOPSFAQ_ADMIN_CATEGORY_DESC", "Categorie");
define("_MI_XOOPSFAQ_ADMIN_FAQ_DESC", "FAQ");
define("_MI_XOOPSFAQ_ADMIN_ABOUT_DESC", "Over");
//define("_MI_XOOPSFAQ_ADMIN_HELP_DESC", "Hulp");
/**
 * Blocks
 */
define("_MI_XOOPSFAQ_BNAME1", "Willekeurig FAQ");
define("_MI_XOOPSFAQ_BNAME1DESC", "Toont willekeurig een vraag");

/**
 * Template Descriptions
 */
define("_MI_XOOPSFAQ_TPLDESC_INDEX", "");
define("_MI_XOOPSFAQ_TPLDESC_CATEGORY", "");
define("_MI_XOOPSFAQ_TPLDESC_ADMIN_ABOUT", "");
define("_MI_XOOPSFAQ_TPLDESC_ADMIN_HELP", "");
define("_MI_XOOPSFAQ_TPLDESC_ADMIN_INDEX", "");

/**
 * Module Prefs
 */
define("_MI_XOOPSFAQ_EDITORS", "Selecteer Editor:");
define("_MI_XOOPSFAQ_EDITORS_DSC", "Welke editor wordt gebruikt? <br />De editor dient wel geïnstalleerd te zijn voordat deze gebruikt kan worden.");