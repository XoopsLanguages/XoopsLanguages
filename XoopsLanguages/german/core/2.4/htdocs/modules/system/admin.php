<?php
// $Id$
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
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

if (isset($_POST['fct'])) {
    $fct = trim($_POST['fct']);
}
if (isset($_GET['fct'])) {
    $fct = trim($_GET['fct']);
}
if (isset($fct) && $fct == "users") {
    $xoopsOption['pagetype'] = "user";
}
include "../../mainfile.php";
include XOOPS_ROOT_PATH."/include/cp_functions.php";
xoops_loadLanguage('admin', 'system');

$admintest = 0;

if (is_object($xoopsUser)) {
    $xoopsModule =& XoopsModule::getByDirname("system");
    if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
        redirect_header(XOOPS_URL."/",3,_NOPERM);
        exit();
    }
    $admintest=1;
} else {
    redirect_header(XOOPS_URL."/",3,_NOPERM);
    exit();
}

// include system category definitions
include_once XOOPS_ROOT_PATH."/modules/system/constants.php";
$error = false;
if ($admintest != 0) {
    if (isset($fct) && $fct != '') {
        $fct = preg_replace("/[^a-z0-9_\-]/i", "", $fct);
        if (file_exists(XOOPS_ROOT_PATH."/modules/system/admin/".$fct."/xoops_version.php")) {
        
            if (file_exists(XOOPS_ROOT_PATH."/modules/system/language/".$xoopsConfig['language']."/admin/".$fct.".php")) {
                include XOOPS_ROOT_PATH."/modules/system/language/".$xoopsConfig['language']."/admin/".$fct.".php";
            } elseif (file_exists(XOOPS_ROOT_PATH."/modules/system/language/english/admin/".$fct.".php")) {
                include XOOPS_ROOT_PATH."/modules/system/language/english/admin/".$fct.".php";
            }
            include XOOPS_ROOT_PATH."/modules/system/admin/".$fct."/xoops_version.php";
            $sysperm_handler =& xoops_gethandler('groupperm');
            $category = !empty($modversion['category']) ? intval($modversion['category']) : 0;
            unset($modversion);
            if ($category > 0) {
                $groups = $xoopsUser->getGroups();
                if (in_array(XOOPS_GROUP_ADMIN, $groups) || false != $sysperm_handler->checkRight('system_admin', $category, $groups, $xoopsModule->getVar('mid'))){
                    if (file_exists(XOOPS_ROOT_PATH."/modules/system/admin/".$fct."/main.php")) {
                        include_once XOOPS_ROOT_PATH."/modules/system/admin/".$fct."/main.php";
                    } else {
                        $error = true;
                    }
                } else {
                    $error = true;
                }
            } elseif ($fct == 'version') {
                if (file_exists(XOOPS_ROOT_PATH."/modules/system/admin/version/main.php")) {
                    include_once XOOPS_ROOT_PATH."/modules/system/admin/version/main.php";
                } else {
                    $error = true;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}

if (false != $error) {
    xoops_cp_header();
    echo "<h4>"._MD_AM_CONFIG."</h4>";
    echo '<table class="outer" cellpadding="4" cellspacing="1">';
    echo '<tr>';
    $groups = $xoopsUser->getGroups();
    $all_ok = false;
    if (!in_array(XOOPS_GROUP_ADMIN, $groups)) {
        $sysperm_handler =& xoops_gethandler('groupperm');
        $ok_syscats = $sysperm_handler->getItemIds('system_admin', $groups);
    } else {
        $all_ok = true;
    }
    require_once XOOPS_ROOT_PATH."/class/xoopslists.php";
    $admin_dir = XOOPS_ROOT_PATH."/modules/system/admin";
    $dirlist = XoopsLists::getDirListAsArray($admin_dir);
    $counter = 0;
    $class = 'even';
    foreach($dirlist as $file){
        include $admin_dir.'/'.$file.'/xoops_version.php';
        if ($modversion['hasAdmin']) {
            $category = isset($modversion['category']) ? intval($modversion['category']) : 0;
            if (false != $all_ok || in_array($modversion['category'], $ok_syscats)) {
                echo "<td class='$class' align='center' valign='bottom' width='19%'>";
                echo "<a href='".XOOPS_URL."/modules/system/admin.php?fct=".$file."'><strong>" .trim($modversion['name'])."</strong></a>\n";
                echo "</td>";
                $counter++;
                $class = ($class == 'even') ? 'odd' : 'even';
            }
            if ( $counter > 4 ) {
                $counter = 0;
                echo "</tr>";
                echo "<tr>";
            }
        }
        unset($modversion);
    }
    unset($dirlist);
    while ($counter < 5) {
        echo '<td class="'.$class.'">&nbsp;</td>';
        $class = ($class == 'even') ? 'odd' : 'even';
        $counter++;
    }
    echo '</tr></table>';
    xoops_cp_footer();
}

?>