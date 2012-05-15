<?php
/*
 * jQuery File Upload Plugin PHP Example 4.2.4
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://creativecommons.org/licenses/MIT/
 * @Last committed:		$Revision$
 * @Last changed by:	$Author$
 * @Last changed date:	$Date$
 * @ID:					$Id$
 */
global $xoopsUser, $xoopsLogger;
include_once("../../mainfile.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
	if ($xoopsUser) {
			$xoopsLogger->activated = false;
			$img = new smallWorldImages;
			$userID = $xoopsUser->getVar('uid');
			$user = new XoopsUser($userID);	
			$options = array(
				'upload_dir' => XOOPS_ROOT_PATH.'/uploads/albums_smallworld/'.$userID."/",
				'upload_url' => XOOPS_URL.'/uploads/albums_smallworld/'.$userID."/",
				'thumbnails_dir' => XOOPS_ROOT_PATH.'/uploads/albums_smallworld'.'/'.$userID.'/thumbnails/',
				'thumbnails_url' => XOOPS_URL.'/uploads/albums_smallworld'.'/'.$userID.'/thumbnails/',
				'thumbnail_max_width' => 80,
				'thumbnail_max_height' => 80,
				'field_name' => 'file'
			);

		$upload_handler = new SmallworldUploadHandler($options);

		switch ($_SERVER['REQUEST_METHOD']) {
			case 'HEAD':
			case 'GET':
				$upload_handler->get();
				break;
			case 'POST':
				$upload_handler->post();
				break;
			case 'DELETE':
				$upload_handler->delete();
				break;
			default:
				header('HTTP/1.0 405 Method Not Allowed');
		}
	}
?>