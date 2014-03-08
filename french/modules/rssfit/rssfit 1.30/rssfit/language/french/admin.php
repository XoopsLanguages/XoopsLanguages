<?php
// $Id: admin.php 12344 2014-03-03 01:32:43Z beckmi $
define("_AM_SAVE","Sauver");
define("_AM_OK","Ok");
define("_AM_DBUPDATED","Base de donn&eacute;es mise &agrave; jour avec succ&egrave;s !");
define("_AM_ACTION","Action");
define("_AM_ID","ID");

define("_AM_EDIT_INTRO", "Editer l' intro");
define("_AM_EDIT_INTRO_TITLE", "Titre de l'intro");
define("_AM_EDIT_INTRO_TITLE_DESC", "{SITENAME} affichera ".$xoopsConfig['sitename']);
define("_AM_EDIT_INTRO_TEXT", "Texte de l'intro");
define("_AM_EDIT_INTRO_TEXT_DESC", _AM_EDIT_INTRO_TITLE_DESC.'<br /><br />{SITEURL} affichera '.XOOPS_URL.'/');

define("_AM_EDIT_PLUGIN", "G&eacute;rer les Plug-ins");
define('_AM_PLUGIN_ACTIVATED', 'Plug-ins activ&eacute;s');
define('_AM_PLUGIN_INACTIVE', 'Plug-ins inactiv&eacute;s');
define('_AM_PLUGIN_NONINSTALLED', 'Plug-ins non-install&eacute;s');
define('_AM_PLUGIN_MODNAME', 'Module');
define('_AM_PLUGIN_FILENAME', 'Nom de fichier');
define('_AM_PLUGIN_SHOWXENTRIES', 'Entr&eacute;es &agrave; afficher');
define('_AM_PLUGIN_ORDER', 'Ordre d\'affichage');
define('_AM_PLUGIN_DEACTIVATE', 'D&eacute;sactiver');
define('_AM_PLUGIN_ACTIVATE', 'Activer');
define('_AM_PLUGIN_INSTALL', 'Installer');
define('_AM_PLUGIN_UNINSTALL', 'D&eacute;sinstaller');

//  errors
define('_AM_PLUGIN_UNKNOWNERROR', 'Erreur inconnue');
define('_AM_PLUGIN_FILENOTFOUND', 'Fichier de plug-in non trouv&eacute;');
define('_AM_PLUGIN_MODNOTFOUND', 'Module non trouv&eacute;');
define('_AM_PLUGIN_CLASSNOTFOUND', 'Plug-in non compatible (Class inexistante)');
define('_AM_PLUGIN_FUNCNOTFOUND', 'Plug-in non compatible (Function inexistante)');

################### version 1.1 additions ###################
define("_AM_XOOPS_VERSION_WRONG", "Version pr&eacute;requise de XOOPS non trouv&eacute;e. RSSFit pourrait mal fonctionner.");
define('_AM_DB_RECORD_MISSING', 'Enregistrements essentiels dans la base non trouv&eacute;s, r&eacute;installer RSSFit');
define('_AM_MAINFEED', 'Principal Flux');
define('_AM_DO_HTML', 'Utiliser les tags HTML');
define('_AM_DO_BR', 'Convertir les retours &agrave; la ligne');
define('_AM_EDIT_CHANNEL', 'Editer les infos du flux');
define('_AM_EDIT_CHANNEL_QMARK', ' [?]');
define('_AM_EDIT_CHANNEL_MOREINFO', 'Plus d\'info');
define('_AM_EDIT_CHANNEL_REQUIRED', 'Informations requises du flux');
define('_AM_EDIT_CHANNEL_OPTIONAL', 'Informations optionnelles du flux');
define('_AM_EDIT_CHANNEL_IMAGE', 'Propri&eacute;t&eacute;s de l\'image du flux');
define('_AM_PLUGIN_NONE', 'Vous n\'avez pas de plug-in d\'install&eacute;');
define('_AM_SUB_LIST', 'Sous-flux');
define('_AM_SUB_FILENAME_URL', 'Fichier de plug-in / URL de sous-flux');
define('_AM_SUB_ACTIVATE', 'Activ&eacute;');
define('_AM_SUB_CONFIGURE', 'Configurer');
define('_AM_SUB_EDIT', 'Configurer le sous-flux : %s');
define('_AM_SUB_PLUGIN_NONE', 'Plug-in non install&eacute;');
define('_AM_SUB_TITLE', 'Titre');
define('_AM_SUB_LINK', 'Lien');
define('_AM_SUB_DESC', 'Description');
define('_AM_STICKY_EDIT', 'Editer le texte d\'ent&ecirc;te');
define('_AM_STICKY_TITLE', 'Titre du texte d\'ent&ecirc;te');
define('_AM_STICKY_CONTENT', 'Corps du texte d\'ent&ecirc;te');
define('_AM_STICKY_LINK', 'Lien du texte d\'ent&ecirc;te');
define('_AM_STICKY_APPLYTO', 'Appliquer aux flux');
define("_AM_EDIT_INTRO_TEXT_DESC_SUB", '<br /><br />{SUB} affichera une liste des sous-flux disponibles');
define("_AM_EDIT_INTRO_SUB", 'Tags HTML pour les sous-flux list&eacute;s');
define("_AM_EDIT_INTRO_SUB_DESC", "Tags extra :<br />{URL} (URL des sous-flux)<br />{TITLE} (titre des sous-flux)<br />{DESC} (description des sous-flux)");
