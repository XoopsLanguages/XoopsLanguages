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
include_once "header.php";

// defines are used to set the errorLevel
define("_CT_ERROR_NONE", 0 );       // 00000000
define("_CT_ERROR_BADSECVAL", 1 );  // 00000001
define("_CT_ERROR_BADEMAIL", 2 );   // 00000010

class ContactClass
{
  var $config_handler;
  var $xoopsUser;
  var $xoopsConfig;
  var $xoopsContactConfig;
  var $username;
  var $useremail;
  var $userURL;
  var $userICQ;
  var $userAddress;
  var $userCompany;
  var $userLocation;
  var $userSendConfirm;
  var $userComments;
  var $departments; // this is an array!!!!
  var $selectedDept;  // a single department name
  var $errorLevel;  // this is set if there is a problem with the contact us page, used for redisplay info
  var $deepchecktld;
  var $userMoreInfo; // this is an array!!!
  var $moreInfo;  // this is an array!!!
  
  function ContactClass( $config_handler, $xoopsUser, $xoopsConfig )
  {
    $this->xoopsUser = $xoopsUser;
	$this->xoopsConfig = $xoopsConfig;
	
	$this->config_handler = $config_handler;

    $module_handler =& xoops_gethandler('module');
    $xoopsContactModule =& $module_handler->getByDirname('contact');
    $this->xoopsContactConfig =& $this->config_handler->getConfigsByCat(0, $xoopsContactModule->getVar('mid'));
	
	$this->username = !empty($xoopsUser) ? $xoopsUser->getVar("uname", "E") : "";
	$this->useremail = !empty($xoopsUser) ? $xoopsUser->getVar("email", "E") : "";
	$this->userURL = !empty($xoopsUser) ? $xoopsUser->getVar("url", "E") : "";
    $this->userICQ = !empty($xoopsUser) ? $xoopsUser->getVar("user_icq", "E") : "";
    $this->userLocation = !empty($xoopsUser) ? $xoopsUser->getVar("user_from", "E") : "";
   
    $this->departments = $this->xoopsContactConfig['contact_dept'];
    if ( ( !is_array( $this->departments ) || count( $this->departments ) == 0 ) || // there is no data, or contact_showdept 
	     $this->xoopsContactConfig['contact_showdept'] == '0')  // is turned off...set departments to default
    {
      $this->departments = array(0 => $this->xoopsConfig['sitename'].",".$this->xoopsConfig['adminmail'] );
    }
	
    $this->selectedDept = $xoopsConfig['sitename'];
    $this->userAddress = "";
	$this->userCompany = "";
	$this->userSendConfirm = '0';  // uncheck box to begin with
	$this->userComments = "";
	$this->errorLevel = _CT_ERROR_NONE;  // no errors to begin with!!!
	$this->deepchecktld = $this->xoopsContactConfig['contact_validatedomain'];
	$this->userMoreInfo = array();  
	$this->moreInfo = $this->xoopsContactConfig['contact_moreinfo'];
  }
  
  function getContactHead()
  {
    return $this->xoopsContactConfig['contact_head'];
  }
  
  function  getContactIntro()
  {
    return $this->xoopsContactConfig['contact_intro'];
  }
  
  function getContactIntroHead()
  {
    return $this->xoopsContactConfig['contact_intro_head'];
  }
  
  function getContactThankYou()
  {
    return $this->xoopsContactConfig['contact_thankyou'];
  }
  
  function getRedirectTimeout()
  {
    return intval( $this->xoopsContactConfig['contact_redirecttimeout'] );
  }
  
  function getUserName()
  {
    return $this->username;
  }
  
  function setUserName( $name )
  {
    $this->username = $name;
  }
  
  function getUserEmail()
  {
    return $this->useremail;
  }
  
  function setUserEmail( $email )
  {
    $this->useremail = $email;
  }
  
  function isValidEmail()
  {
    $retval = false;
    // this validates the structure of the email
    if ( eregi("^[a-zA-Z0-9_\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $this->useremail ) )
    {
	  $retval = true;
	}
	return $retval;
  }
  
  function getEmailtld()
  {
    $retval = "";
    if ( eregi("^[a-zA-Z0-9_\.]+@([a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+)$", $this->useremail, $regs ) )
    {
	  $retval = $regs[1];
	}
	
	return $retval;
  }
  
  function collectAddress()
  {
    $retval = false;
	if ( $this->xoopsContactConfig['contact_address'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getAddress()
  {
    return $this->userAddress;
  }
  
  function setAddress( $addr )
  {
    $this->userAddress = $addr;  
  }
  
  function collectURL()
  {
    $retval = false;
	if( $this->xoopsContactConfig['contact_url'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getURL()
  {
    return $this->userURL;
  }
  
  function setURL( $url )
  {
    $this->userURL = $url;
  }
  
  function collectICQ()
  {
    $retval = false;
	if( $this->xoopsContactConfig['contact_icq'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getICQ()
  {
    return $this->userICQ;
  }
  
  function setICQ( $icq )
  {
    $this->userICQ = $icq;
  }
  
  function collectCompany()
  {
    $retval = false;
	if( $this->xoopsContactConfig['contact_company'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getCompany()
  {
    return $this->userCompany;
  }
  
  function setCompany( $comp )
  {
    $this->userCompany = $comp;
  }		
 
  function collectLocation()
  {
    $retval = false;
	if( $this->xoopsContactConfig['contact_loc'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }	
  
  function getLocation()
  {
    return $this->userLocation;
  }
  
  function setLocation( $loc )
  {
    $this->userLocation = $loc;
  }	
  
  function sendConfirm()
  {
    $retval = false;
	if( $this->xoopsContactConfig['contact_allowsendconfirm'] == '1' )
	{
	  $retval = true;
	}
	return $retval;  
  }
  
  function setSendConfirm( $set )
  {
    $this->userSendConfirm = $set;
  }
  
  function getSendConfirm()
  {
    return $this->userSendConfirm;
  }
  
  function getUserComments()
  {
    return $this->userComments;
  }
  
  function setUserComments( $comm )
  {
    $this->userComments = $comm;
  }
  
  function collectSecurity()
  {
    $retval = false;
    if( $this->xoopsContactConfig['contact_security'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getSiteKey()
  {
    return $this->xoopsContactConfig['contact_sitekey'];
  }
  
  function showDepartment()
  {
    $retval = false;
	if ( $this->xoopsContactConfig['contact_showdept'] == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getDepartmentTitle()
  {
    return $this->xoopsContactConfig['contact_depttitle'];
  }
  
  function getDepartments()
  {
    return $this->departments;
  }
  
  function setSelectedDepartment( $dept )
  {
    $this->selectedDept = $dept;
  }
  
  function getSelectedDepartment()
  {
    return $this->selectedDept;
  }
  
  // set errorLevel by defines at top of file
  function setErrorLevel( $err )
  {
    $this->errorLevel = $err;
  }
  
  function getErrorLevel()
  {
    // force to intval
	return intval( $this->errorLevel );
  }
  
  function isDeepCheck()
  {
    $retval = false;
	if ( $this->deepchecktld == '1' )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function deepCheckEmail()
  {
    $retval = true;
				if ( checkdnsrr( $this->getEmailtld() ) )
				{
				  return $retval;
				}
				
    $fp = fsockopen($this->getEmailtld(), 80, $errno, $errstr, 30);
	   if (!$fp) 
	   {
      $retval = false;
    }
	   else
	   {
      fclose($fp);
    }
	
	return $retval;
  }
  
  function showMoreInfo()
  {
    $retval = false;
	if ( $this->xoopsContactConfig['contact_showmoreinfo'] == "1" )
	{
	  $retval = true;
	}
	return $retval;
  }
  
  function getMoreInfoTitle()
  {
    return $this->xoopsContactConfig['contact_moreinfotitle'];
  }
  
  function getMoreInfo()
  {
    return $this->moreInfo;
  }
  
  function getUserMoreInfo()
  {
    return $this->userMoreInfo;
  }
  
  function setUserMoreInfo( $info )
  {
    $this->userMoreInfo = $info;
  }
}
?>