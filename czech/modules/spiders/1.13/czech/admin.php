<?php
	// $Author: wishcraft $
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
// Author: Simon Roberts (AKA wishcraft)                                     //
// URL: http://www.chronolabs.org.au                                         //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

	define('_AM_SPIDERS_IMPORTFILE', 'Zvolte soubor, který chcete importovat');
	define('_AM_SPIDERS_FILE', 'Dostupné soubory');
	define('_AM_SPIDERS_FILEDESC', 'Pokud chcete získat další soubory s definicemi robotů, navštivte stránky <a href="http://www.robotstxt.org/dbexport.html">www.robotstxt.org</a>');

	define('_AM_SPIDERS_IMPORTCOMPLETE', 'Import dokončen');

	if(!defined('_MI_SPIDERS_DIRNAME'))
		define('_MI_SPIDERS_DIRNAME','spiders');
	if(!defined('_MI_SPIDERS_GROUP_TYPE'))
		define('_MI_SPIDERS_GROUP_TYPE', 'Spider');
	if(!defined('_MI_SPIDERS_GROUP_NAME'))
		define('_MI_SPIDERS_GROUP_NAME', 'Roboti, hledači a pavouci'); // Robots, Crawlers & Spiders
	if(!defined('_MI_SPIDERS_GROUP_DESCRIPTION'))
		define('_MI_SPIDERS_GROUP_DESCRIPTION', 'Automatické prohledávací programy, které mají oprávnění prohlížet váš web.');
?>