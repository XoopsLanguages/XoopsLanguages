<?php
// $Id: footer.php,v 1.13 2003/09/28 01:06:44 okazu Exp $
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

if ( !defined("XOOPS_FOOTER_INCLUDED") ) {
	define("XOOPS_FOOTER_INCLUDED",1);
	$xoopsLogger->stopTime();
	if ($xoopsOption['theme_use_smarty'] == 0) {
		// the old way
		$footer = $xoopsConfigMetaFooter['footer'].'<br /><div style="text-align:center">Powered by XOOPS &copy; 2002 <a href="http://www.xoops.org/" target="_blank">The XOOPS Project</a></div>';
		if (isset($xoopsOption['template_main'])) {
			$xoopsTpl->xoops_setCaching(0);
			$xoopsTpl->display('db:'.$xoopsOption['template_main']);
		}
		if (!isset($xoopsOption['show_rblock'])) {
			$xoopsOption['show_rblock'] = 0;
		}
		themefooter($xoopsOption['show_rblock'], $footer);
		xoops_footer();
	} else {
		// RMV-NOTIFY
		include_once XOOPS_ROOT_PATH . '/include/notification_select.php';
		if (isset($xoopsOption['template_main'])) {
			if (isset($xoopsCachedTemplateId)) {
				$xoopsTpl->assign('xoops_contents', $xoopsTpl->fetch('db:'.$xoopsOption['template_main'], $xoopsCachedTemplateId));
			} else {
				$xoopsTpl->assign('xoops_contents', $xoopsTpl->fetch('db:'.$xoopsOption['template_main']));
			}
		} else {
			if (isset($xoopsCachedTemplate)) {
				$xoopsTpl->assign('dummy_content', ob_get_contents());
				$xoopsTpl->assign('xoops_contents', $xoopsTpl->fetch($xoopsCachedTemplate, $xoopsCachedTemplateId));
			} else {
				$xoopsTpl->assign('xoops_contents', ob_get_contents());
			}
			ob_end_clean();
		}
		if (!headers_sent()) {
			header('Content-Type:text/html; charset='._CHARSET);
			header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
			//header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
			header('Cache-Control: private, no-cache');
			header('Pragma: no-cache');
		}
		$xoopsTpl->xoops_setCaching(0);
		$xoopsTpl->display($xoopsConfig['theme_set'].'/theme.html');
	}
	if ($xoopsConfig['debug_mode'] == 2 && $xoopsUserIsAdmin) {
		$dummyfile = 'dummy_'.time().'.html';
		$fp = fopen(XOOPS_CACHE_PATH.'/'.$dummyfile, 'w');
		fwrite($fp, $xoopsLogger->dumpAll());
		fclose($fp);
		echo '<script language=javascript>
		debug_window = openWithSelfMain("'.XOOPS_URL.'/misc.php?action=showpopups&type=debug&file='.$dummyfile.'", "popup", 680, 450);
		</script>';
	}
}
// Uservisit
include(XOOPS_ROOT_PATH."/modules/uservisit/index.php");

?>
