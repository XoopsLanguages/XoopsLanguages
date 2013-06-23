<?php
/**
 * ****************************************************************************
 * Module g&eacute;n&eacute;r&eacute; par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * xfaq - a simple module for Frequently Asked Questions
 * Copyright (c) Mojtaba Jamali (http://mydolphin.ir)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Mojtaba Jamali (http://mydolphin.ir)
 * @license         GPL
 * @package         xfaq
 * @author 			Mojtaba Jamali (http://mydolphin.ir)
 *
 * Version : 1.00:
 * ****************************************************************************
 */

//Menu
define("_AM_XFAQ_MANAGER_INDEX","Index");

define("_AM_XFAQ_THEREARE_TOPIC","Il y a <span style=\"color: #ff0000; font-weight: bold\">%s</span> Cat&eacute;gories dans la base");
define("_AM_XFAQ_THEREARE_TOPIC_ONLINE","Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> cat&eacute;gories en attente");
define("_AM_XFAQ_THEREARE_FAQ","Il y a <span style=\"color: #ff0000; font-weight: bold\">%s</span> Questions dans la base");
define("_AM_XFAQ_THEREARE_FAQ_ONLINE","Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> questions en attente");

//define("_AM_XFAQ_MANAGER_ABOUT","A propos");
//define("_AM_XFAQ_MANAGER_PREFERENCES","Preferences");
//define("_AM_XFAQ_MANAGER_UPDATE","Mise a jour");
//define("_AM_XFAQ_MANAGER_PERMISSIONS","Permissions");

//Index
define("_AM_XFAQ_MANAGER_TOPIC","Cat&eacute;gories");
define("_AM_XFAQ_MANAGER_FAQ","FAQ");
define("_AM_XFAQ_XFAQCONF","xFAQ Dashboard");

//General
define("_AM_XFAQ_FORMOK","Enregistr&eacute; avec succ&egrave;s");
define("_AM_XFAQ_FORMDELOK","Supprim&eacute; avec succ&egrave;s");
define("_AM_XFAQ_FORMSUREDEL","Etes vous certain de vouloir supprimer: <b><span style=\"color : Red\"> %s </span></b>");
define("_AM_XFAQ_FORMSURERENEW","Etes vous certain de vouloir mettre a jour: <b><span style=\"color : Red\"> %s </span></b>");
define("_AM_XFAQ_FORMUPLOAD","Upload");
define("_AM_XFAQ_FORMIMAGE_PATH","Fichier dans %s");
define("_AM_XFAQ_FORMACTION","Action");
define("_AM_XFAQ_OFF","Off");
define("_AM_XFAQ_ON","Approuv&eacute;");
define("_AM_XFAQ_EDIT","Editer");
define("_AM_XFAQ_DELETE","Supprimer");
define("_AM_XFAQ_TOPIC_ADD","Ajouter une nouvelle cat&eacute;gorie");
define("_AM_XFAQ_TOPIC_EDIT","Editer la cat&eacute;gorie");
define("_AM_XFAQ_TOPIC_ID","Id");
define("_AM_XFAQ_TOPIC_PID","Parent");
define("_AM_XFAQ_TOPIC_TITLE","Titre");
define("_AM_XFAQ_TOPIC_DESC","Description");
define("_AM_XFAQ_TOPIC_IMG","Image");
define("_AM_XFAQ_TOPIC_WEIGHT","Poids");
define("_AM_XFAQ_TOPIC_SUBMITTER","Auteur");
define("_AM_XFAQ_TOPIC_DATE_CREATED","Date de cr&eacute;ation");
define("_AM_XFAQ_TOPIC_ONLINE","En ligne");
define("_AM_XFAQ_FAQ_NO_TOPIC","Il n'y a pas de cat&eacute;gorie vous permettant de poster votre question.");
define("_AM_XFAQ_LOGOSAMENAME","A file with this name already exists, please rename your file and try again");

define("_AM_XFAQ_FAQ_ADD","Ajouter une FAQ");
define("_AM_XFAQ_FAQ_PRIVACY","Ajouter une FAQ priv&eacute;e");
define("_AM_XFAQ_FAQ_EDIT","Editer une Question");
define("_AM_XFAQ_FAQ_DELETE","Supprimer une Question");
define("_AM_XFAQ_FAQ_ID","Id");
define("_AM_XFAQ_FAQ_QUESTION","Question");
define("_AM_XFAQ_FAQ_ANSWER","R&eacute;ponse");
define("_AM_XFAQ_FAQ_TOPIC","Cat&eacute;gorie");
define("_AM_XFAQ_FAQ_URL","URL");
define("_AM_XFAQ_FAQ_OPEN","statut");
define("_AM_XFAQ_FAQ_OPEN1","Pos&eacute;");
define("_AM_XFAQ_FAQ_OPEN2","R&eacute;ponse - fermer");
define("_AM_XFAQ_FAQ_OPEN3","R&eacute;ponse - Ouvert");
define("_AM_XFAQ_FAQ_OPEN4","Priv&eacute;");
define("_AM_XFAQ_FAQ_OPEN5","R&eacute;ponses des utilisateurs");
define("_AM_XFAQ_FAQ_ANSUSER","R&eacute;pondu");
define("_AM_XFAQ_FAQ_SUBMITTER","Enregistr&eacute;");
define("_AM_XFAQ_FAQ_DATE_CREATED","Date de cr&eacute;ation");
define("_AM_XFAQ_FAQ_ONLINE","En ligne");
define("_AM_XFAQ_FAQ_USER_FAQ","Vos FAQs");
define("_AM_XFAQ_FAQ_USER_FAQ","Vous n'avez pas la permission d'acc&eacute;der a cette partie.<br/>Merci de vous enregistrer!");
define("_AM_XFAQ_FAQ_NO_ANSWER","Il n'y a pas encore de r&eacute;ponse a cette question!");
define("_AM_XFAQ_FAQ_DATE_ANSWER","Date de r&eacute;ponse");
define("_AM_XFAQ_FAQ_WEIGHT","Poids");
define("_AM_XFAQ_FAQ_METAKEY","Meta Keywords");
define("_AM_XFAQ_FAQ_METADESC","Meta Description");
define("_AM_XFAQ_FAQ_HOWDOI","Comment faire ?");
define("_AM_XFAQ_FAQ_DIDUNO","Le saviez-vous ?");

//Request.php
define("_AM_XFAQ_FAQ_REQUEST_FORM_HELP","Request Form Help");
define("_AM_XFAQ_FAQ_PRIVACY_FORM_HELP","Privacy Form Help");

//Blocks.php
define("_AM_XFAQ_TOPIC_BLOCK_DAY","Sujets du jour");
define("_AM_XFAQ_TOPIC_BLOCK_RANDOM","Sujets al&eacute;atoires");
define("_AM_XFAQ_TOPIC_BLOCK_RECENT","Sujets r&eacute;cents");
define("_AM_XFAQ_FAQ_BLOCK_DAY","FAQ du jour");
define("_AM_XFAQ_FAQ_BLOCK_RANDOM","FAQ al&eacute;atoire");
define("_AM_XFAQ_FAQ_BLOCK_RECENT","FAQ r&eacute;centes");

//Permissions
define("_AM_XFAQ_PERMISSIONS_ACCESS","Permission de voir");
define("_AM_XFAQ_PERMISSIONS_SUBMIT","Permission de publier");

//About.php
define("_AM_XFAQ_ABOUT_RELEASEDATE","Date de publication");
define("_AM_XFAQ_ABOUT_AUTHOR","Auteur");
define("_AM_XFAQ_ABOUT_CREDITS","Credits");
define("_AM_XFAQ_ABOUT_README","General Information");
define("_AM_XFAQ_ABOUT_MANUAL","Manuel");
define("_AM_XFAQ_ABOUT_LICENSE","Licence");
define("_AM_XFAQ_ABOUT_MODULE_STATUS","Statut");
define("_AM_XFAQ_ABOUT_WEBSITE","Site web");
define("_AM_XFAQ_ABOUT_AUTHOR_NAME","Nom de l'auteur");
define("_AM_XFAQ_ABOUT_AUTHOR_WORD","Le mot de l'auteur");
define("_AM_XFAQ_ABOUT_CHANGELOG","Change Log");
define("_AM_XFAQ_ABOUT_MODULE_INFO","Infos du modules");
define("_AM_XFAQ_ABOUT_AUTHOR_INFO","Infos sur l'auteur");
define("_AM_XFAQ_ABOUT_DISCLAIMER","Disclaimer");
define("_AM_XFAQ_ABOUT_DISCLAIMER_TEXT","GPL Licensed - Pas de garantie");

?>