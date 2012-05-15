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
defined('XOOPS_ROOT_PATH') or die('Restricted access');
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");

class SmallworldCorePreload extends XoopsPreloadItem
{
   
   function eventCoreHeaderAddmeta()
   {
        global $xoTheme,$xoopsUser,$xoopsConfig;
        if ($xoopsUser) {
            $module_handler =& xoops_gethandler('module');
            $module = $module_handler->getByDirname('smallworld');
            $config_handler =& xoops_gethandler('config');
            if ($module) {
                $moduleConfig =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));						
            }
            // check geolocation style
            if(isset($moduleConfig['geolocate'])) {
                        $geolocate = $moduleConfig['geolocate'];
            }         
            
            $xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/base/jquery.ui.all.css');
            $xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/smallworld.css');                        
            
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery-1.7.1.min.js');
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery-ui-1.8.11.custom.js');
        
            $myid = $xoopsUser->getVar('uid');
            // GET various variables from language folder
            if (file_exists(XOOPS_ROOT_PATH.'/modules/smallworld/language/'.$xoopsConfig['language'].'/js/variables.js')) {
                $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$xoopsConfig['language'].'/js/variables.js');
            } else {
                $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/variables.js');
            }

            // Check if USER is smallworld-registered user
            $chkUser = new SmallWorldUser;
            $ChkProf = $chkUser->CheckIfProfile($myid);
            
            // Check if there are requests pending
            $count_invit = count($chkUser->getRequests($myid));
            
            // Get module config for validation and place in javascript
            $validate = $moduleConfig['validationstrenght'];
            
            // Check to see if smallworld should use username links to point to default xoops or smallworld
            $takeoverlinks = $moduleConfig['takeoveruserlinks'];
            $fieldstoshow = array_flip(smallworld_GetModuleOption('smallworldusethesefields', $repmodule='smallworld'));
            $useverification = smallworld_GetModuleOption('smallworldmandatoryfields', $repmodule='smallworld');
            $smallworldUV = implode(',', $useverification);
                
            // Get users messages count based on users followerArray
            $getUserMsgNum = smallworld_getCountFriendMessagesEtc ();

            // Check if request url is with www or without
            $urltest = smallworld_getHostRequest();
            $xoops_url = XOOPS_URL;
            if (!strstr($urltest, 'www.')) {
                $xoops_url = str_replace( 'www.', '', $xoops_url );
            }

            // Set javascript vars but only if not already defined.
            // Check prevents multible loads      
            
            $script = "if (myID === undefined) {"."\n";
            $script .= "var smallworld_url = '" . $xoops_url . "/modules/smallworld/" . "';\n";
            $script .= "var smallworld_uploaddir = '" . $xoops_url . "/uploads/avatars/" . "';\n";
            $script .= "var xoops_smallworld = jQuery.noConflict();\n";
            $script .= "var myID = " . $myid . ";\n";
            $script .= "var userHasProfile = " . $ChkProf . ";\n";
            $script .= "var smallworldTakeOverLinks = " . $takeoverlinks . ";\n";
            $script .= "var geoL = " . $geolocate . ";\n";
            $script .= "var geocomplete = '';\n";
            $script .= "var smallworldVerString = '" . $smallworldUV . "';\n";
            $script .= "var smallworlduseverification = new Array();\n";
            $script .= "smallworlduseverification = smallworldVerString.split(',');\n";
            $script .= "var hasmessages = " . $count_invit . ";\n";
            $script .= "var smallworldvalidationstrenght = " . $validate . ";\n";
            $script .= "var smallworld_getFriendsMsgComCount = " . $getUserMsgNum . ";\n";
            $script .= "var $ = jQuery();\n";
            $script .= "} else {"."\n";
            $script .= "\n";
            $script .= "}"."\n";
            $xoTheme->addScript('','',$script);
        
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/smallworld.js');
    /*    $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.validate.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.validation.functions.js');
        
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.stepy.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.oembed.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.elastic.source.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.countdown.js');
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.innerfade.js');
    */
    
        $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.countdown.js');
    
        if ( file_exists(XOOPS_ROOT_PATH.'/modules/smallworld/language/'.$xoopsConfig['language'].'/js/jquery.ui.datepicker-language.js')) {
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$xoopsConfig['language'].'/js/jquery.ui.datepicker-language.js');
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/'.$xoopsConfig['language'].'/js/jquery.countdown.js');
        }	else {
             $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/jquery.ui.datepicker-language.js');
             $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/language/english/js/jquery.countdown.js');
            }
            
        // Include geolocate styling
        if ($geolocate != 1) {
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/geoname.js');
            $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/geoname_now.js');
        }	else {
                $xoTheme->addScript("http://maps.google.com/maps/api/js?sensor=false&language="._LANGCODE);
                $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/ui.geo_autocomplete.js');
                $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/ui.geo_autocomplete_now.js');
            }
    

        }	// End if XoopsUser
   }
	
	function isActive() {
		$module_handler =& xoops_getHandler('module');
		$module = $module_handler->getByDirname('smallworld');
		return ($module && $module->getVar('isactive')) ? true : false;
	}
}
?>