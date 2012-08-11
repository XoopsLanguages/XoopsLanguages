<?php

/**
* $Id: main.php,v 1.5 2006/03/13 13:07:57 malanciault Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
* Edited by Knollo <www.knollo.de>
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
// including the common language filedefine("_MD_SPARTNER_ADMIN_PAGE",":: Kontroll Bereich ::");
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}

define("_MD_SPARTNER_ADMIN_PAGE",":: Admin Bereich ::");
define("_MD_SPARTNER_NOPARTNERSELECTED","Sie haben keinen gültigen Partner ausgewählt.");
define("_MD_SPARTNER_NOTIFY","Bei Gewärung Benachrichtigung senden");
define("_MD_SPARTNER_READMORE","Lesen Sie mehr...");
define("_MD_SPARTNER_SUBMIT_ERROR","Ein Fehler trat auf während der Partnerschaftsantrag eingereicht wurde.");
define("_MD_SPARTNER_SUBMIT_SUCCESS","Ihr Antrag wurde erfolgreich eingereicht.");
define("_MD_SPARTNER_DETAIL_CAT","Zeige alle Partner dieser Kategorie");
define("_MD_SPARTNER_EDIT","Editieren");
define("_MD_SPARTNER_DELETE","Löschen");
define("_MD_SPARTNER_JOIN","Werden Sie ein Partner");
define("_MD_SPARTNER_PARTNERS","Partner");
define("_MD_SPARTNER_PARTNERSTITLE","Der Partner von ");
define("_MD_SPARTNER_PARTNER","Partner");
define("_MD_SPARTNER_DESCRIPTION","Beschreibung");
define("_MD_SPARTNER_HITS","Treffer");
define("_MD_SPARTNER_NOPART","Zur Zeit sind kein Partner zur anzeige vorhanden.");
//file join.php
define("_MD_SPARTNER_IMAGE","Logo");
define("_MD_SPARTNER_TITLE","Name");
define("_MD_SPARTNER_URL","Web Site:");
define("_MD_SPARTNER_SEND","Anfrage Einsenden");
define("_MD_SPARTNER_ERROR1","Sie haben den Antrag nicht korrekt ausgefüllt. Bitte gehen Sie zurück, und nehmen Sie die notwendigen Veränderungen vor.");
define("_MD_SPARTNER_ERROR2","<center>Das Bild ist gr&oumll;sser als 110x50. <a href='javascript:history.back(1)'>Versuchen Sie ein neues Bild</a></center>");
define("_MD_SPARTNER_ERROR3","<center>Die Bild Datei existiert nicht. <a href='javascript:history.back(1)'>Versuchen Sie ein neues Bild</a></center>");
define("_MD_SPARTNER_GOBACK","<a href='javascript:history.back(1)'>Zurück</a>");
define("_MD_SPARTNER_NEWPARTNER","%s Partner Nachfragen");
define("_MD_SPARTNER_SENDMAIL","Anfrageemail wurde an den Administrator abgeschickt.<br /><a href='index.php'>Zurück zum Index</a>");
define("_MD_SPARTNER_CATEGORY_EMPTY","Diese Kategorie ist leer.");

// Hack by marcan : Zusaetzliche Info zum SmartPartner Modul
define("_MD_SPARTNER_INTRO_TEXT","Hier ist die Liste unserer bevorzugten Partner. Klicken Sie einfach auf das Logo, um auf die Partner Web Site zu gelangen.");
define("_MD_SPARTNER_INTRO_JOIN","Möchten Sie mit %s Partner werden? Bitte füllen Sie das nachfolgende Formular aus, und wir melden uns schnellst möglichst bei Ihnen.");
define("_MD_SPARTNER_TITLE_DSC","Der Name Ihrer Organisation");
define("_MD_SPARTNER_IMAGE_DSC","Die Addresse Ihres Logos");
define("_MD_SPARTNER_URL_DSC","Ihre Web Site Addresse");
define("_MD_SPARTNER_DESCRIPTION_DSC","Eine Beschreibung Ihrer Organisation");
define("_MD_SPARTNER_BACKTOINDEX","Zurück zu Partner Index");

?>