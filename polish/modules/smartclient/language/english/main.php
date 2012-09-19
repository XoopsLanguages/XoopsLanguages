<?php

/**
* $Id: main.php,v 1.1 2007/02/10 18:55:57 dap997 Exp $
* Module: SmartClient
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Including common language file
Global $xoopsConfig;

$commonFile = "../include/common.php";
if (!file_exists($commonFile)) {
	$commonFile = "include/common.php";
}

include_once($commonFile);

$fileName = SMARTCLIENT_ROOT_PATH . 'language/' . $xoopsConfig['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once SMARTCLIENT_ROOT_PATH . 'language/english/common.php';
}

define("_MD_SCLIENT_ADMIN_PAGE", ":: Admin Section ::");
define("_MD_SCLIENT_NOCLIENTSELECTED", "You did not select a valid client.");
define("_MD_SCLIENT_NOTIFY", "Notify on approval");
define("_MD_SCLIENT_READMORE", "Read more...");
define("_MD_SCLIENT_SUBMIT_ERROR", "An error occured while submitting the client.");
define("_MD_SCLIENT_SUBMIT_SUCCESS", "The client was successfully submitted.");

define("_MD_SCLIENT_EDIT", "Edit");
define("_MD_SCLIENT_DELETE", "Delete");
define("_MD_SCLIENT_JOIN", "Become a Client");
define("_MD_SCLIENT_CLIENTS", "Clients");
define("_MD_SCLIENT_CLIENTSTITLE", "The clients of ");
define("_MD_SCLIENT_CLIENT", "Client");
define("_MD_SCLIENT_DESCRIPTION", "Description");
define("_MD_SCLIENT_HITS", "Hits");
define("_MD_SCLIENT_NOPART", "There is currently no client to display.");
//file join.php
define("_MD_SCLIENT_IMAGE", "Logo");
define("_MD_SCLIENT_TITLE", "Name");
define("_MD_SCLIENT_URL", "Web site:");
define("_MD_SCLIENT_SEND", "Send the request");
define("_MD_SCLIENT_ERROR1", "You did not fill the form correctly. Please try again.");
define("_MD_SCLIENT_ERROR2", "<center>Image size is larger than 110x50. <a href='javascript:history.back(1)'>Try with another image</a></center>");
define("_MD_SCLIENT_ERROR3", "<center>The image file doesn't exist. <a href='javascript:history.back(1)'>Try with another image</a></center>");
define("_MD_SCLIENT_GOBACK", "<a href='javascript:history.back(1)'>Back</a>");
define("_MD_SCLIENT_NEWCLIENT", "%s Clients Request");
define("_MD_SCLIENT_SENDMAIL", "Request mail sent to the administrator.<br /><a href='index.php'>Return to index</a>");


// Hack by marcan : More information on the SmartClient module
define("_MD_SCLIENT_INTRO_TEXT", "Here is the list of our prefered clients. You can access their web site by clicking on their logo");
define("_MD_SCLIENT_INTRO_JOIN", "You would like to become a client of %s? Fill out the following form and we will contact you as soon as possible.");
define("_MD_SCLIENT_TITLE_DSC", "Your organisation name");
define("_MD_SCLIENT_IMAGE_DSC", "Your logo address");
define("_MD_SCLIENT_URL_DSC", "Your web site");
define("_MD_SCLIENT_DESCRIPTION_DSC", "Description of your organisation");
define("_MD_SCLIENT_BACKTOINDEX", "Back to clients index");

?>