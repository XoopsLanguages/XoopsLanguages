<?php
// $Id: auth_xoops.php 1923 2008-07-27 14:22:14Z phppp $
// auth_xoops.php - XOOPS authentification class 
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
/**
 * @package     kernel
 * @subpackage  auth
 * @description	Authentification class for Native XOOPS
 * @author	    Pierre-Eric MENUET	<pemphp@free.fr>
 * @copyright	copyright (c) 2000-2003 XOOPS.org
 */
class XoopsAuthXoops extends XoopsAuth {


	/**
	 * Authentication Service constructor
	 */
	function XoopsAuthXoops (&$dao) {
		$this->_dao = $dao;
		$this->auth_method = 'xoops';
	}

	/**
	 *  Authenticate user
	 *
	 * @param string $uname
	 * @param string $pwd
	 *
	 * @return bool
	 */	
    function authenticate($uname, $pwd = null) {
		$member_handler =& xoops_gethandler('member');
      	$user =& $member_handler->loginUser($uname, $pwd);
      	if ($user == false) {
      		$this->setErrors(1, _US_INCORRECTLOGIN);
      	}
      	return ($user);
	}

}

?>