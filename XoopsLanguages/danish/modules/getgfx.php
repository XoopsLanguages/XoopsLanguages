<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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

include "header.php";

global $config_handler;

$module_handler =& xoops_gethandler('module');
$xoopsContactModule =& $module_handler->getByDirname('contact');
$xoopsContactConfig =& $config_handler->getConfigsByCat(0, $xoopsContactModule->getVar('mid'));

$site_key = $xoopsContactConfig['contact_sitekey']; 
$random_num = $_GET['random_num'];
$datekey = date("F j");
$rcode = hexdec(md5($_SERVER['HTTP_USER_AGENT'].$random_num.$site_key.$datekey));
$code = substr($rcode, 2, 6);
$image = ImageCreateFromJPEG("images/code_bg.jpg");
$text_color = ImageColorAllocate($image, 80, 80, 80);
Header("Content-type: image/jpeg");
ImageString ($image, 5, 12, 2, $code, $text_color);
ImageJPEG($image, '', 75);
ImageDestroy($image);
die();
?>