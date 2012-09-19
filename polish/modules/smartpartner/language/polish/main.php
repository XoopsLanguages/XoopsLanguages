<?php

/**
* $Id: main.php,v 1.1 2008/04/15 11:18:05 kurak_bu Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

/**
 * This does not belong here. However, since some admin.php constants are refereing to constants
 * defined in common.php, and since admin.php is automatically include when including mainfile.php
 * we need to include the common language file here.
 *
 * For next release : remove all reference to common constants in other language files.
 */
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}

define("_MD_SPARTNER_ADMIN_PAGE", ":: Administracja ::");
define("_MD_SPARTNER_NOPARTNERSELECTED", "Partner został wybrany niewłaściwie.");
define("_MD_SPARTNER_NOTIFY", "Powiadom po zatwierdzeniu");
define("_MD_SPARTNER_READMORE", "Więcej...");
define("_MD_SPARTNER_SUBMIT_ERROR", "Podczas dodawania partnera wystąpił błąd.");
define("_MD_SPARTNER_SUBMIT_SUCCESS", "Partner został dodany pomyślnie.");
define("_MD_SPARTNER_DETAIL_CAT", "Pokaż wszystkich partnerów w tej kategorii");
define("_MD_SPARTNER_EDIT", "Edytuj");
define("_MD_SPARTNER_DELETE", "Usuń");
define("_MD_SPARTNER_JOIN", "Zostań partnerem");
define("_MD_SPARTNER_PARTNERS", "Partnerzy");
define("_MD_SPARTNER_PARTNERSTITLE", "Partnerzy strony ");
define("_MD_SPARTNER_PARTNER", "Partner");
define("_MD_SPARTNER_DESCRIPTION", "Opis");
define("_MD_SPARTNER_HITS", "Odsłon");
define("_MD_SPARTNER_NOPART", "Nie ma żadnych partnerów.");
//file join.php
define("_MD_SPARTNER_IMAGE", "Logo");
define("_MD_SPARTNER_TITLE", "Nazwa");
define("_MD_SPARTNER_URL", "Adres WWWW:");
define("_MD_SPARTNER_SEND", "Wyślij prośbę");
define("_MD_SPARTNER_ERROR1", "You did not fill the form correctly. Please try again.");
define("_MD_SPARTNER_ERROR2", "<center>Image size is larger than 110x50. <a href='javascript:history.back(1)'>Try with another image</a></center>");
define("_MD_SPARTNER_ERROR3", "<center>The image file doesn't exist. <a href='javascript:history.back(1)'>Try with another image</a></center>");
define("_MD_SPARTNER_GOBACK", "<a href='javascript:history.back(1)'>Back</a>");
define("_MD_SPARTNER_NEWPARTNER", "%s Partners Request");
define("_MD_SPARTNER_SENDMAIL", "Request mail sent to the administrator.<br /><a href='index.php'>Return to index</a>");
define("_MD_SPARTNER_CATEGORY_EMPTY", "Ta kategoria jest pusta.");

// Hack by marcan : More information on the SmartPartner module
define("_MD_SPARTNER_INTRO_TEXT", "Here is the list of our prefered partners. You can access their web site by clicking on their logo");
define("_MD_SPARTNER_INTRO_JOIN", "You would like to become a partner of %s? Fill out the following form and we will contact you as soon as possible.");
define("_MD_SPARTNER_TITLE_DSC", "Your organisation name");
define("_MD_SPARTNER_IMAGE_DSC", "Your logo address");
define("_MD_SPARTNER_URL_DSC", "Your web site");
define("_MD_SPARTNER_DESCRIPTION_DSC", "Description of your organisation");
define("_MD_SPARTNER_BACKTOINDEX", "Back to partners index");
define("_MD_SPARTNER_OFFER_INTRO", "Offer list");

?>