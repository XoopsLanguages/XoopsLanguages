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
include_once("../../mainfile.php");
$xoopsOption['template_main'] = 'smallworld_index.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");
global $xoopsUser,$xoTheme,$xoopsLogger,$xoopsDB;
$xoopsLogger->activated = false;
			if($_GET) {
				$q=Smallworld_sanitize($_GET['term']);
				$sql = "select * from ".$xoopsDB->prefix('smallworld_user')." where realname like '%".$q."%' or username like '%".$q."%' order by userid LIMIT 5";
				$result = $xoopsDB->query($sql);
				$data = array();

				while ($row=$xoopsDB->fetchArray($result)) {
					$user = new xoopsUser($row['userid']);
					if ($row['userimage'] != 'Not specified') {
                            $imageLink = XOOPS_URL.'/uploads/'.trim($row['userimage']);
							$imageSize = smallworld_getImageSize(30, 30, $imageLink);
                            $imageHw = smallworld_imageResize($imageSize[0], $imageSize[1], 30);
                            $image = '<img src="'.XOOPS_URL.'/uploads/'.$row['userimage'].'" '.$imageHw.'/>';
						} else {
							if ($row['gender'] == 1) {
								$image = "<img src='".XOOPS_URL."/modules/smallworld/images/ano_woman.png'"." height='30px' width='30px'/>";
							}
							if ($row['gender'] == 2) {
								$image = "<img src='".XOOPS_URL."/modules/smallworld/images/ano_man.png'"." height='30px' width='30px'/>";
							}
							if ($row['gender'] == 0) {
								$image = "<img src='".XOOPS_URL."/modules/smallworld/images/genderless.png'"." height='30px' width='30px'/>";
							}
						}
                    
                    $imageHw = smallworld_imageResize($imageSize[0], $imageSize[1], 30);
					$data[] = array(
					'label' => $image.' '.'<span class="searchusername">'.$row['realname']." (".$row['username'].")</span>",
					'value' => $user->uname()
					);
				}
				// jQuery wants JSON data
				echo json_encode($data);
				flush();
			}
	else {}
?>