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
 * @version $Id: modinfo.php 8209 2011-11-07 04:32:24Z beckmi $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Module Version
 */
define('_MI_XOOPSFAQ_NAME','Xoops FAQ');
define('_MI_XOOPSFAQ_DESC','Xoops FAQ Manager');

/**
 * Module Menu
 */
//define('_MI_XOOPSFAQ_MENU_MODULEHOME','Module Home');
//define('_MI_XOOPSFAQ_MENU_MODULEBLOCKS','Blocks');
//define('_MI_XOOPSFAQ_MENU_MODULETEMPLATES','Templates');
//define('_MI_XOOPSFAQ_MENU_MODULECOMMENTS','Comments');
define('_MI_XOOPSFAQ_MENU_ADMININDEX','Home');
define('_MI_XOOPSFAQ_MENU_ADMINCATEGORY','Category');
define('_MI_XOOPSFAQ_MENU_ADMINFAQ','Faq');
define('_MI_XOOPSFAQ_MENU_ADMINABOUT','About');

// index.php
//define("_MI_XOOPSFAQ_ADMIN_HOME","Home");
define("_MI_XOOPSFAQ_ADMIN_INDEX","FAQ");
define("_MI_XOOPSFAQ_ADMIN_ABOUT","About");
//define("_MI_XOOPSFAQ_ADMIN_HELP","Help");
//define("_MI_XOOPSFAQ_ADMIN_PREFERENCES","Preferences");

//define("_MI_XOOPSFAQ_ADMIN_HOME_DESC","Home");
define("_MI_XOOPSFAQ_ADMIN_INDEX_DESC","FAQ");
define("_MI_XOOPSFAQ_ADMIN_CATEGORY_DESC","Category");
define("_MI_XOOPSFAQ_ADMIN_FAQ_DESC","FAQ");
define("_MI_XOOPSFAQ_ADMIN_ABOUT_DESC","About");
//define("_MI_XOOPSFAQ_ADMIN_HELP_DESC","Help");
/**
 * Blocks
 */
define("_MI_XOOPSFAQ_BNAME1","Random FAQ");
define("_MI_XOOPSFAQ_BNAME1DESC","Shows a random FAQ");

/**
 * Template Descriptions
 */
define("_MI_XOOPSFAQ_TPLDESC_INDEX","");
define("_MI_XOOPSFAQ_TPLDESC_CATEGORY","");
define("_MI_XOOPSFAQ_TPLDESC_ADMIN_ABOUT","");
define("_MI_XOOPSFAQ_TPLDESC_ADMIN_HELP","");
define("_MI_XOOPSFAQ_TPLDESC_ADMIN_INDEX","");

/**
 * Module Prefs
 */
define("_MI_XOOPSFAQ_EDITORS","Select Editor:");
define("_MI_XOOPSFAQ_EDITORS_DSC","Please select the editor you would like to use? <br />You may be required to install an editor before you can use it.");