<?php

/**
 * $Id: main.php,v 1.1 2007/06/05 18:32:42 marcan Exp $
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

define("_MD_SPARTNER_ADMIN_PAGE",":: Section d'Administration ::");
define("_MD_SPARTNER_NOPARTNERSELECTED","Vous n'avez pas s&eacute;lectionn&eacute; de partenaire valide.");
define("_MD_SPARTNER_NOTIFY","Notifier sur approbation");
define("_MD_SPARTNER_READMORE","En savoir plus...");
define("_MD_SPARTNER_SUBMIT_ERROR","Une erreur est apparue &agrave; la soumission du partenaire.");
define("_MD_SPARTNER_SUBMIT_SUCCESS","Le partenaire a &eacute;t&eacute; soumis avec succ&egrave;s.");
define("_MD_SPARTNER_DETAIL_CAT","Voir tous les partenaires de cette cat&eacute;gorie");
define("_MD_SPARTNER_EDIT","Editer");
define("_MD_SPARTNER_DELETE","Effacer");
define("_MD_SPARTNER_JOIN","Devenir partenaire");
define("_MD_SPARTNER_PARTNERS","Partnaires");
define("_MD_SPARTNER_PARTNERSTITLE","Les partenaires de ");
define("_MD_SPARTNER_PARTNER","Partenaires");
define("_MD_SPARTNER_DESCRIPTION","Description");
define("_MD_SPARTNER_HITS","Hits");
define("_MD_SPARTNER_NOPART","Il n'y a actuellement aucun partenaire &agrave; visualiser.");
//file join.php
define("_MD_SPARTNER_IMAGE","Logo");
define("_MD_SPARTNER_TITLE","Nom");
define("_MD_SPARTNER_URL","Site Web:");
define("_MD_SPARTNER_SEND","Envoyer la requ&ecirc;te");
define("_MD_SPARTNER_ERROR1","Vous n'avez pas rempli le formulaire correctement. Veuillez recommencer.");
define("_MD_SPARTNER_ERROR2","<center>La taille de l'image est sup&eacute;rieure &agrave; 110x50. <a href='javascript:history.back(1)'>Essayez avec une autre image</a></center>");
define("_MD_SPARTNER_ERROR3","<center>Le fichier de l'image n'existe pas. <a href='javascript:history.back(1)'>Essayez avec une autre image</a></center>");
define("_MD_SPARTNER_GOBACK","<a href='javascript:history.back(1)'>Retour</a>");
define("_MD_SPARTNER_NEWPARTNER","%s requ&ecirc;te de Partenaires");
define("_MD_SPARTNER_SENDMAIL","Mail de requ&ecirc;te envoy&eacute; &agrave; l'administrateur.<br /><a href='index.php'>Return to index</a>");
define("_MD_SPARTNER_CATEGORY_EMPTY","Cette catégorie est vide");

// Hack by marcan : More information on the SmartPartner module
define("_MD_SPARTNER_INTRO_TEXT","Ici la liste de vos partenaires pr&eacute;f&eacute;r&eacute;s. Vous pouvez acc&eacute;der &agrave; leur site web en cliquant sur leur logo");
define("_MD_SPARTNER_INTRO_JOIN","D&eacute;sireriez vous devenir partenaire de %s? Remplissez le formulaire suivant et nous vous contacterons d&egrave;s que possible.");
define("_MD_SPARTNER_TITLE_DSC","Le nom de votre Organisation");
define("_MD_SPARTNER_IMAGE_DSC","L'Adresse de votre logo");
define("_MD_SPARTNER_URL_DSC","Votre site Web");
define("_MD_SPARTNER_DESCRIPTION_DSC","La description de votre Organisation");
define("_MD_SPARTNER_BACKTOINDEX"," Retour Liste des partenaires");

?>