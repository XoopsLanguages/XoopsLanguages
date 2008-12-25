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
include_once "class/contactclass.php";

global $config_handler, $xoopsUser, $xoopsConfig;
$contactclass = new ContactClass($config_handler, $xoopsUser, $xoopsConfig);

function drawContactForm( $cc )
{  
  global $xoopsOption, $xoopsTpl;
  
  $contactclass = $cc;

  $xoopsOption['template_main'] = 'contact_contactusform.html';

  include XOOPS_ROOT_PATH."/header.php";
  include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";

  // build contact form
  $contact_form = new XoopsThemeForm($contactclass->getContactHead(), "contactform", "index.php", "post", true);

  // check for pre-existing error condition
  if ( $contactclass->getErrorLevel() != 0 )
  {
    $err = $contactclass->getErrorLevel();
	$message = _CT_ERROR_CONDITION;
	
	if ( $err & _CT_ERROR_BADSECVAL )
	{
	  $message .= _CT_ERROR_BADSECVALUE_MSG;
	}
	
	if ( $err & _CT_ERROR_BADEMAIL )
	{
	  $message .= _CT_ERROR_BADEMAIL_MSG;
	}  
	
    $error_text = new XoopsFormLabel( _CT_ERROR_CONDITIONHEAD, $message );
    $contact_form->addElement( $error_text );
  }
  // check to see if there is some intro text to display
  if ( $contactclass->getContactIntro() != "" )
  {
    $intro_text = new XoopsFormLabel($contactclass->getContactIntroHead(), $contactclass->getContactIntro());
    $contact_form->addElement( $intro_text );
  }

  $name_text = new XoopsFormText(_CT_NAME, "usersName", 50, 100, $contactclass->getUserName());
  $contact_form->addElement($name_text, true);

  $email_text = new XoopsFormText(_CT_EMAIL, "usersEmail", 50, 100, $contactclass->getUserEmail());
  $contact_form->addElement($email_text, true);

  if ( $contactclass->collectAddress() == true )
  {
    $address_text = new XoopsFormTextArea(_CT_ADDRESS, "usersAddress", $contactclass->getAddress());
    $contact_form->addElement($address_text);
  }

  if ( $contactclass->collectURL() == true )
  {
    $url_text = new XoopsFormText(_CT_URL, "usersSite", 50, 100, $contactclass->getURL());
    $contact_form->addElement($url_text);
  }

  if ( $contactclass->collectICQ() == true )
  {
    $icq_text = new XoopsFormText(_CT_ICQ, "usersICQ", 50, 100, $contactclass->getICQ());
    $contact_form->addElement($icq_text);
  }

  if ( $contactclass->collectCompany() == true)
  {
    $company_text = new XoopsFormText(_CT_COMPANY, "usersCompanyName", 50, 100, $contactclass->getCompany());
    $contact_form->addElement($company_text);
  }

  if ( $contactclass->collectLocation() == true)
  {
    $location_text = new XoopsFormText(_CT_LOCATION, "usersCompanyLocation", 50, 100, $contactclass->getLocation());
    $contact_form->addElement($location_text);
  }

  if ( $contactclass->sendConfirm() == true)
  {
    // draw the checkbox for user to get a confirmation mail
	$email_v = $contactclass->getUserEmail();
    $caption = ( $email_v == "" ? _CT_SENDCONFIRM : sprintf( _CT_SENDCONFIRMEMAIL, $email_v ));
    $sendconfirm = new XoopsFormCheckBox( _CT_CONFIRM, "userSendConfirm",
// $contactclass->getSendConfirm(), "userSendConfirm" );
$contactclass->getSendConfirm(), "" );
    $sendconfirm->addOption( 1, $caption );
    $contact_form->addElement( $sendconfirm );
  }

  if ( $contactclass->showDepartment() == true )
  {
    // show a drop down with the correct departments listed
	$departmentlist = new XoopsFormSelect( $contactclass->getDepartmentTitle(), "userDepartment" );
	$departments = $contactclass->getDepartments();  // get array of departments
	$selDept = $contactclass->getSelectedDepartment();
	
	$cnt = 0;
	foreach( $departments as $val )
	{
      $valexplode = explode( ',', $val );
	  
	  $selected = false;
	  if ( $selDept != "" && ( strcmp( $selDept, $valexplode[0] ) == 0 ) )
	  {
	    // this option is selected
		$selected = true;
	  } 
	  else if ( $selDept == "" && $cnt == 0 )  // if there is none selected and this is the first one
	  {
	    // make it selected
		$selected = true;
	  }
	  
	  $departmentlist->addOption($valexplode[0]);
	  if ( $selected == true )
	  {
	    $departmentlist->setValue($valexplode[0]);
	  }
	  
      $cnt++;	  
	}
    $contact_form->addElement( $departmentlist );
  }

  // add comment area  
  $comment_textarea = new XoopsFormTextArea(_CT_COMMENTS, "usersComments", $contactclass->getUserComments());
  $contact_form->addElement($comment_textarea, true);

  // add more info area if required
  if ( $contactclass->showMoreInfo() == true )
  {
    // draw container with multi-select check boxes
	$moreinfo = new XoopsFormCheckBox( $contactclass->getMoreInfoTitle(), "userMoreInfo" );
	$moreinfolist = $contactclass->getMoreInfo();
	$selmoreinfo = $contactclass->getUserMoreInfo();
	
	foreach( $moreinfolist as $val )
	{
	  $moreinfo->addOption( $val );
	} // end foreach $moreinfolist
	
	$moreinfo->setValue( $selmoreinfo );
	$contact_form->addElement($moreinfo);
  }

  // add security check if required
  if ( ( $contactclass->collectSecurity() == true ) && extension_loaded('gd') )
  {
    mt_srand((double)microtime()*10000);
    $random_num = mt_rand(0, 100000);
    $security = "<img src='getgfx.php?random_num=$random_num' border='1' alt='"._CT_SECURITY_CODE."' title='"._CT_SECURITY_CODE."'>&nbsp;&nbsp;"
	           ."<img src='images/no-spam.jpg' alt='"._CT_NO_SPAM."' title='"._CT_NO_SPAM."'>";
    // show the security block and input field
    $security_graphic = new XoopsFormLabel( _CT_SECURITY_CODE, $security );
    $contact_form->addElement( $security_graphic );
	$type_security = new XoopsFormText( _CT_SECURITY_TYPE, "securityType", 10, 6 );
	$contact_form->addElement( $type_security, true );
	$security_hidden = new XoopsFormHidden( "securityHidden", $random_num );
	$contact_form->addElement( $security_hidden );
  }
  
  $submit_button = new XoopsFormButton("", "submit", _CT_SUBMIT, "submit");
  $contact_form->addElement($submit_button);

  $contact_form->assign($xoopsTpl);
  include XOOPS_ROOT_PATH."/footer.php";
}

if (empty($_POST['submit']) | !$GLOBALS['xoopsSecurity']->check())
{
  drawContactForm( $contactclass );
}
else
{
  extract($_POST);

  $myts =& MyTextSanitizer::getInstance();
  
  // populate contactclass with passed in vars
  $contactclass->setUserName(isset( $usersName ) ? $myts->stripSlashesGPC($usersName) : "");
  $contactclass->setUserEmail(isset( $usersEmail ) ? $myts->stripSlashesGPC($usersEmail) : "");
  $contactclass->setAddress(isset( $usersAddress ) ? $myts->stripSlashesGPC($usersAddress) : "");
  $contactclass->setURL(isset($usersSite) ? $usersSite : "");
  $contactclass->setICQ(isset($usersICQ) ? $usersICQ : "");
  $contactclass->setCompany(isset( $usersCompanyName) ? $myts->stripSlashesGPC($usersCompanyName) : "");
  $contactclass->setLocation(isset( $usersCompanyLocation) ? $myts->stripSlashesGPC($usersCompanyLocation) : "");
  $contactclass->setSendConfirm(isset( $userSendConfirm ) ? $userSendConfirm : '0' );
  $contactclass->setSelectedDepartment(isset( $userDepartment ) ? $userDepartment : $contactclass->getSelectedDepartment());
  $contactclass->setUserComments(isset($usersComments) ? $usersComments: "");
  $contactclass->setUserMoreInfo( isset($userMoreInfo) ? $userMoreInfo : array() );// set user more info - it's an array, so we have to figure it out first!!!
  	
  $do_check = false;
  
  if ( ( $contactclass->collectSecurity() == true ) && extension_loaded('gd') )
  {
    $do_check = true;
  }
  	
  $datekey = date("F j");
  $rcode = hexdec(md5($_SERVER['HTTP_USER_AGENT'].$securityHidden.$contactclass->getSiteKey().$datekey));
  $code = substr($rcode, 2, 6);

  $errval = _CT_ERROR_NONE;
  // check seccode
  if ( $code != $securityType && $do_check == true )
  {
    $errval |= _CT_ERROR_BADSECVAL;
  }
  
  // check for bad email
  if ( $contactclass->isValidEmail() == false )
  {
    // make sure you add on top of any existing errorlevel by &
    $errval |= _CT_ERROR_BADEMAIL;
  }
  else if ( $contactclass->isDeepCheck() == true )
  {
    if ( $contactclass->deepCheckEmail() == false )
	{
	  $errval |= _CT_ERROR_BADEMAIL;
    }
  }
  
  $contactclass->setErrorLevel($errval); 
  if ( $contactclass->getErrorLevel() != 0 )
  {
    // redisplay form
	drawContactForm( $contactclass );
  }
  else
  {
    $usersComments = $myts->stripSlashesGPC($_POST['usersComments']);

    $adminMessage = sprintf(_CT_SUBMITTED,$contactclass->getUserName());
    $adminMessage .= "\n";
    $adminMessage .= ""._CT_EMAIL." $usersEmail\n";

    if ( $contactclass->collectAddress() == true )
    {
      $adminMessage .= ""._CT_ADDRESS."\n".$contactclass->getAddress()."\n";
    }

    if ( $contactclass->collectURL() == true)
    {
      $adminMessage .= ""._CT_URL."\n".$contactclass->getURL()."\n";
    }

    if ( $contactclass->collectICQ() == true )
    {
      $adminMessage .= ""._CT_ICQ."\n".$contactclass->getICQ()."\n";
    }

    if ( $contactclass->collectCompany() == true )
    {
      $adminMessage .= _CT_COMPANY. "\n".$contactclass->getCompany()."\n";
    }

    if ( $contactclass->collectLocation() == true )
    {
      $adminMessage .= _CT_LOCATION."\n".$contactclass->getLocation()."\n";
    }

    $adminMessage .= _CT_COMMENTS."\n";
    $adminMessage .= "\n$usersComments\n\n";
	
	   if ( $contactclass->showMoreInfo() == true )
	   {
	     if ( count( $contactclass->getUserMoreInfo() ) > 0 )
	     {
	       $temp = $contactclass->getMoreInfoTitle()." :\n";
	       $adminMessage .= $temp;
		      $moreinfoMessage = $temp;
	       foreach( $contactclass->getUserMoreInfo() as $item )
	       {
		        $temp = "* $item\n";
	         $adminMessage .= $temp;
		        $moreinfoMessage .= $temp;
	       }
      }		
	   }
	
    $adminMessage .= "\n".$_SERVER['HTTP_USER_AGENT']."\n";
	
    $subject = $xoopsConfig['sitename']." - ".$contactclass->getContactHead();
	   $toemail = $xoopsConfig['adminmail'];
	   if ( $contactclass->showDepartment() == true )
	   {
	     $selDept = $contactclass->getSelectedDepartment();
	     $departments = $contactclass->getDepartments();

	     foreach( $departments as $val )
	     {
        $valexplode = explode( ',', $val );
	  
	       $selected = false;
	       if ( strcmp( $selDept, $valexplode[0] ) == 0 )
	       {
	       // this option is selected
		        $selected = true;
	       } 
	  
	       if ( $selected == true )
	       {
	         $subject = $xoopsConfig['sitename']." - ".$selDept;
		        $toemail = $valexplode[1];
	       }
	     }
	   } 
	  
    $xoopsMailer =& getMailer();
    $xoopsMailer->useMail();
    $xoopsMailer->setToEmails($toemail);
    $xoopsMailer->setFromEmail($contactclass->getUserEmail());
    $xoopsMailer->setFromName($contactclass->getUserName());
    $xoopsMailer->setSubject($subject);
    $xoopsMailer->setBody($adminMessage);
    $xoopsMailer->send();
    $messagesent = sprintf(_CT_MESSAGESENT,$xoopsConfig['sitename'])."<br />".$contactclass->getContactThankYou()."";

    if ( $contactclass->getSendConfirm() == '1' )
    {
      $conf_subject = $contactclass->getContactThankYou();
      $userMessage = sprintf(_CT_HELLO,$contactclass->getUserName());
      $userMessage .= "\n\n";
      $userMessage .= sprintf(_CT_THANKYOUCOMMENTS,$xoopsConfig['sitename']);
      $userMessage .= "\n";
      $userMessage .= sprintf(_CT_SENTTOWEBMASTER,$contactclass->getSelectedDepartment());
      $userMessage .= "\n";
      $userMessage .= _CT_YOURMESSAGE."\n";
      $userMessage .= "\n$usersComments\n\n";
      $userMessage .= "--------------\n";
      $userMessage .= "".$subject."\n";
	     $userMessage .= "\n".$moreinfoMessage."\n";
      $xoopsMailer =& getMailer();
      $xoopsMailer->useMail();
      $xoopsMailer->setToEmails($contactclass->getUserEmail());
      $xoopsMailer->setFromEmail($contactclass->getUserEmail());
      $xoopsMailer->setFromName($xoopsConfig['sitename']);
      $xoopsMailer->setSubject($conf_subject);
      $xoopsMailer->setBody($userMessage);
      $xoopsMailer->send();
      $messagesent .= "<br />".sprintf(_CT_SENTASCONFIRM,$usersEmail);
    }

    redirect_header(XOOPS_URL."/index.php",$contactclass->getRedirectTimeout(),$messagesent);
  }
}
?>