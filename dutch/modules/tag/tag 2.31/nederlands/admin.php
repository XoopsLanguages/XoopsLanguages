<?php
/**
 * Tag management for XOOPS
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id: admin.php 2292 2008-10-12 04:53:18Z phppp $
 * @package		tag
 */

if (!defined('XOOPS_ROOT_PATH')) { exit(); }
define('TAG_AM_TERM', 'Tag');

define('TAG_AM_STATS', 'Statistische Infomatie');
define('TAG_AM_COUNT_TAG', 'Aantal labels: %s');
define('TAG_AM_COUNT_ITEM', 'Aantal items: %s');
define('TAG_AM_COUNT_MODULE', 'Aantal modules: %s');
define('TAG_AM_COUNT_MODULE_TITLE', 'Aantal Labels / Aantal modules');

define('TAG_AM_EDIT', 'Label administratie');
define('TAG_AM_SYNCHRONIZATION', 'Synchroniseren');

define('TAG_AM_ACTIVE', 'Actief');
define('TAG_AM_INACTIVE', 'Inactief');
define('TAG_AM_GLOBAL', 'Globaal');
define('TAG_AM_ALL', 'Alle modules');
define('TAG_AM_NUM', 'Aantal voor herhaling');
define('TAG_AM_IN_PROCESS', 'Data synchronisatie is bezig, even geduld ...');
define('TAG_AM_FINISHED', 'Data synchronisatie is geslaagd.');

//2.3.1

// About.php
define('_AM_TAG_ABOUT_RELEASEDATE',        'Vrijgeven: ');
define('_AM_TAG_ABOUT_UPDATEDATE',               'Bijgewerkt: ');
define('_AM_TAG_ABOUT_AUTHOR',                   'Auteur: ');
define('_AM_TAG_ABOUT_CREDITS',                  'Credits: ');
define('_AM_TAG_ABOUT_LICENSE',                  'Licentie: ');
define('_AM_TAG_ABOUT_MODULE_STATUS',            'Status: ');
define('_AM_TAG_ABOUT_WEBSITE',                  'Website: ');
define('_AM_TAG_ABOUT_AUTHOR_NAME',              'Naam auteur: ');
define('_AM_TAG_ABOUT_CHANGELOG',                'Wijzigingsbeheer');
define('_AM_TAG_ABOUT_MODULE_INFO',              'Module Info');
define('_AM_TAG_ABOUT_AUTHOR_INFO',              'Auteur Info');
define('_AM_TAG_ABOUT_DESCRIPTION',          'Omschrijving: ');

// text in admin footer
define('_AM_TAG_ADMIN_FOOTER',                 "<div class='right smallsmall italic pad5'><b>" . $xoopsModule->getVar("name") . "</b> wordt onderhouden door <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");

// Configuration check
define('_AM_TAG_CONFIG_CHECK','Configuratiecontrole');
define('_AM_TAG_CONFIG_PHP',"Minimum PHP versie benodigd: %s (Huidige versie is %s)");
define('_AM_TAG_CONFIG_XOOPS',"Minimum XOOPS versie benodigd:  %s (Huidige versie is %s)"); 

//ModuleAdmin
define('_AM_MODULEADMIN_MISSING','ERROR: De ModuleAdmin class ontbreekt. Installeer de ModuleAdmin Class in de /Frameworks map (zie /docs/readme.txt)');