<?php

/**
 * $Id: modinfo.php,v 1.1 2007/06/05 18:32:42 marcan Exp $
 * Module: SmartPartner
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */

define('_MI_SPARTNER_ADMENU1','Index');
define('_MI_SPARTNER_ADMENU2','Partenaires');
define('_MI_SPARTNER_ADMENU3','Blocs');
define('_MI_SPARTNER_ADMENU4','Groupes');
define('_MI_SPARTNER_ADMENU5','Aller au module');

define('_MI_SPARTNER_PARTNERS_NAME','SmartPartner');
define('_MI_SPARTNER_PARTNERS_DESC','Syst&egrave;me de Gestion de Partenaires pour un site XOOPS 2.x');
define('_MI_SPARTNER_PARTNERS_ADMIN','Gestion de Partenaire');
define('_MI_SPARTNER_PARTNERS_ADMIN_ADD','Ajouter un partenaire');
define('_MI_SPARTNER_ID','N°');
define('_MI_SPARTNER_HITS','Hits');
define('_MI_SPARTNER_TITLE','Titre');
define('_MI_SPARTNER_WEIGHT','Poids');
define('_MI_SPARTNER_RECLICK','Temps au Reclic:');
define('_MI_SPARTNER_IMAGES','Images');
define('_MI_SPARTNER_TEXT','Liens texte');
define('_MI_SPARTNER_BOTH','les deux');
define('_MI_SPARTNER_MLIMIT','Limiter la page de menu &agrave; xx entr&eacute;es : (0 = pas de limite)');
define('_MI_SPARTNER_MSHOW','Sur la page de menu montrer :');
define('_MI_SPARTNER_INDEX_SORTBY','Trier la page de menu sur :');
define('_MI_SPARTNER_INDEX_SORTBY_DSC',"Détermine l'odre de priorité d'affichage");
define('_MI_SPARTNER_INDEX_ORDERBY','Ordre de la page de menu sur :');
define('_MI_SPARTNER_INDEX_ORDERBY_DSC',"");
define('_MI_SPARTNER_HOUR','1 heure');
define('_MI_SPARTNER_3HOURS','3 heures');
define('_MI_SPARTNER_5HOURS','5 heures');
define('_MI_SPARTNER_10HOURS','10 heures');
define('_MI_SPARTNER_DAY','1 jour');

define('_MI_SPARTNER_CAT_FOR_OPT','Options de format');
define('_MI_SPARTNER_CAT_FOR_OPT_DSC','');
define('_MI_SPARTNER_CAT_PERM','Permissions');
define('_MI_SPARTNER_CAT_PERM_DSC','');
define('_MI_SPARTNER_CAT_OTHER','Autres');
define('_MI_SPARTNER_CAT_OTHER_DSC','');

define('_MI_SPARTNER_BLOCK_PARTNERS_LIST','Partenaires');
define('_MI_SPARTNER_BLOCK_PARTNERS_LIST_DESC','Montrer la liste des partenaires');

define('_MI_SPARTNER_BLOCK_RANDOM_PARTNER','Partenaire aléatoire');
define('_MI_SPARTNER_BLOCK_RANDOM_PARTNER_DESC','Afficher un partenaire aléatoirement');

define('_MI_SPARTNER_PAGE_PARTNER','Pages des partenaires');
define('_MI_SPARTNER_PAGE_INDEX','Page index');

define("_MI_SPARTNER_ALLOWSUBMIT","Soumissions de partenaire");
define("_MI_SPARTNER_ALLOWSUBMITDSC","Permettre la soumission de partenaire sur votre site?");

define("_MI_SPARTNER_ANONPOST","Autorisation de soumission anonyme");
define("_MI_SPARTNER_ANONPOSTDSC","Permettre aux utilisateurs anonyme de soumettre un partenaire");

define('_MI_SPARTNER_AUTOAPPROVE',"Auto approbation des partenaires soumis");
define('_MI_SPARTNER_AUTOAPPROVE_DSC',"Auto approuver la soumissions de partenaires sans l'intervantion d'un administrateur.");

define('_MI_SPARTNER_PERCAT_USER',"Nombre maximum de partenaires par cat&eacute;gorie à la page index du module:");
define('_MI_SPARTNER_PERCAT_USER_DSC',"Nombre maximum de partenaires pouvant &ecirc;tre vu par page par catégories du cot&eacute; utilisateur. Ne s'applique pas si vous n'utilisez pas les catégories");

define('_MI_SPARTNER_PERPAGE_USER',"Nombre maximum de partenaires par page à la visualisation d'une catégorie:");
define('_MI_SPARTNER_PERPAGE_USER_DSC',"Si le nombre de partenaires d'une catégorie sélectionnée par l'utilisateur est plus grand que ce maximum, ils seront affichés sur différentes pages.");

define('_MI_SPARTNER_PERPAGE_ADMIN',"Partenaires Maximum par page (cot&eacute; Admin):");
define('_MI_SPARTNER_PERPAGE_ADMIN_DSC',"Nombre maximum de partenaires pouvant &ecirc;tre vu par page &agrave; la fois du cot&eacute; Admin.");

define('_MI_SPARTNER_WELCOMEMSG','Message de Bienvenue:');
define('_MI_SPARTNER_WELCOMEMSG_DSC','Message de bienvenue &agrave; montrer dans la page index du module.');
define('_MI_SPARTNER_WELCOMEMSG_DEF',"Ici sont regroup&eacute;s les partenaires du site. Cliquez sur leur logo pour acc&eacute;der &agrave; leur site web.");

define('_MI_SPARTNER_USEIMAGENAVPAGE',"Utiliser l'image de la page de Navigation:");
define('_MI_SPARTNER_USEIMAGENAVPAGEDSC','Si vous param&egrave;trez cette option &agrave; "Oui", La page de Navigation sera montr&eacute;e avec une image, sinon, La page de navigation originale sera utilis&eacute;e.');

define('_MI_SPARTNER_IMG_MAX_WIDTH',"Largeur maximale du logo des partenaires:");
define('_MI_SPARTNER_IMG_MAX_WIDTH_DSC',"Ceci d&eacute;finira la largeur maximale des logos pouvant &ecirc;tre charg&eacute;s dans le module. ce d&eacute;finira aussi la largeur de la premi&egrave;re colonne dans la page index des partenaires.");

define('_MI_SPARTNER_IMG_MAX_HEIGHT',"Hauter maximale du logo des partenaires:");
define('_MI_SPARTNER_IMG_MAX_HEIGHT_DSC',"Ceci d&eacute;finira la hauteur maximale des logos pouvant &ecirc;tre charg&eacute;s dans le module.");

define('_MI_SPARTNER_HELP_PATH_SELECT',"Chemin des fichiers d'aide de SmartPartner");
define('_MI_SPARTNER_HELP_PATH_SELECT_DSC',"S&eacute;lectionnez d'ou vous d&eacute;sirez acc&eacute;der aux fichiers d'aide de SmartPartner's. Si vous t&eacute;l&eacute;chargez le pack 'Aide de SmartPartner's' et l'installez dans 'modules/smartpartner/doc/', vous pouvez s&eacute;lectionner 'a partir du module'. Alternativement, vous pouvez acc&eacute;der au fichiers d'aide directement &agrave; partir de docs.xoops.org en le choisssant dans la s&eacute;lection. Vous pouvez choisir 'Chemin customis&eacute;' et sp&eacute;cifier votre propre chemin de fichiers d'aide dans la prochaine option de configuration 'Chemin customis&eacute; de fichiers d'aide SmartPartner'");

define('_MI_SPARTNER_HELP_PATH_CUSTOM',"Chemin customis&eacute; de fichiers d'aide SmartPartner");
define('_MI_SPARTNER_HELP_PATH_CUSTOM_DSC',"Si vous s&eacute;lectionnez 'Chemin customis&eacute;' dans l'option pr&eacute;vue 'Chemin de fichiers d'aide SmartPartner's', veuillez sp&eacute;cifier l'URL des fichier d'aides SmartPartner, dans ce format : http://www.yoursite.com/doc");

define('_MI_SPARTNER_HELP_INSIDE',"A partir du module");
define('_MI_SPARTNER_HELP_CUSTOM',"Chemin customis&eacute;");

define('_MI_SPARTNER_STATS_GROUP',"Afficher les blocs de statistiques 'Partenaires' pour ces groupes");
define('_MI_SPARTNER_STATS_GROUP_DSC',"S&eacute;lectionner le groupe qui sera capable de voir les statistiques dans la page du partenaire.");

define("_MI_SPARTNER_HIGHLIGHT_COLOR","Couleur utilis&eacute;e pour surligner les mots recherch&eacute;s");
define("_MI_SPARTNER_HIGHLIGHT_COLORDSC","");

define("_MI_SPARTNER_HIDE_MOD_NAME","Cacher le nom du module dans les pages utilisateur");
define("_MI_SPARTNER_HIDE_MOD_NAMEDSC","");

// Text for notifications
define('_MI_SPARTNER_GLOBAL_PARTNER_NOTIFY',"Partenaires Globaux");
define('_MI_SPARTNER_GLOBAL_PARTNER_NOTIFY_DSC',"Option de notifications appliqu&eacute;es &agrave; tous les partenaires.");

define('_MI_SPARTNER_PARTNER_NOTIFY',"Partenaire");
define('_MI_SPARTNER_PARTNER_NOTIFY_DSC',"Option de notification appliqu&eacute;s au partenaire courant.");

define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY',"Partenaire soumis");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_CAP',"Notifiez moi quand un partenaire a &eacute;t&eacute; soumis et est en attente d'approbation.");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_DSC',"Recevoir une notification quand un partenaire a &eacute;t&eacute; soumis et est en attente d'approbation.");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_SBJ',"[{X_SITENAME}] {X_MODULE} auto-notify : Nouveau partenaire soumis");

define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY',"Partenaire approuv&eacute;");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_CAP',"Notifiez moi quand un partenaire est approuv&eacute;.");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_DSC',"Recevoir une notification quand un partenaire est approuv&eacute;.");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_SBJ',"[{X_SITENAME}] {X_MODULE} auto-notify : Partenaire approuv&eacute;");


// About.php constants
define('_MI_SPARTNER_AUTHOR_INFO',"D&eacute;velopeurs");
define('_MI_SPARTNER_DEVELOPER_LEAD',"D&eacute;veloppeur principal");
define('_MI_SPARTNER_DEVELOPER_CONTRIBUTOR',"Contributeur(s)");
define('_MI_SPARTNER_DEVELOPER_WEBSITE',"Site web");
define('_MI_SPARTNER_DEVELOPER_EMAIL',"Email");
define('_MI_SPARTNER_DEVELOPER_CREDITS',"Cr&eacute;dits");
define('_MI_SPARTNER_DEMO_SITE',"Site Demo SmartFactory");
define('_MI_SPARTNER_MODULE_INFO','Informations sur le D&eacute;veloppement du Module');
define('_MI_SPARTNER_MODULE_STATUS','Statut');
define('_MI_SPARTNER_MODULE_RELEASE_DATE',"Date de sortie");
define('_MI_SPARTNER_MODULE_DEMO','Site de d&eacute;monstration');
define('_MI_SPARTNER_MODULE_SUPPORT','Site officiel de support');
define('_MI_SPARTNER_MODULE_BUG','Rapportez une erreur pour ce module');
define('_MI_SPARTNER_MODULE_SUBMIT_BUG',"Soumettre un bug");
define('_MI_SPARTNER_MODULE_FEATURE','Proposez de nouvelles options pour ce module');
define('_MI_SPARTNER_MODULE_SUBMIT_FEATURE',"Soumettre une nouvelle fonctionnalit&eacute;");
define('_MI_SPARTNER_MODULE_DISCLAIMER','Avertissement');
define("_MI_SPARTNER_AUTHOR_WORD","Le mot de l'auteur");
define('_MI_SPARTNER_VERSION_HISTORY',"Historique des versions");
define('_MI_SPARTNER_BY',"Par");

// Beta
define('_MI_SPARTNER_WARNING_BETA',"Ce module est livr&eacute; tel quel, sans garantie d'aucune sorte. 
ce module est une BETA, consid&eacute;rez le comme toujours en d&eacute;veloppement. cette distribution a &eacute;t&eacute; r&eacute;alis&eacute;e
<b>en vu de test uniquement</b> et nous vous recommendons <b>fortement</b> de ne pas l'utiliser sur un site vivant 
ou dans un environnement de production.");

// RC
define('_MI_SPARTNER_WARNING_RC',"Ce module est livr&eacute; tel quel, sans garantie d'aucune sorte. Ce module
est une realease candidate qui ne peut &ecirc;tre utilis&eacute; dans un environnement de production. Ce Module est consid&eacute;r&eacute;
comme en phase de d&eacute;veloppement,les conditions d'utilisation engage vos propres responsabilit&eacute;s, et ne serait engager la responsabilit&eacute; de l'auteur.");

// Final
define('_MI_SPARTNER_WARNING_FINAL',"Ce module est livr&eacute; tel quel, sans garantie d'aucune sorte. Aussi ce module n'est pas une b&eacute;ta
, il reste cependant en actif d&eacute;veloppement. Cette distribution peut &ecirc;tre utilis&eacute;e dans le cadre d'un site vivant 
ou dans un environnement de production, mais les conditions d'utilisation engage vos propres responsabilit&eacute;s, et ne serait
engager la responsabilit&eacute; de l'auteur.");

//added with categories

define("_MI_SSPARTNER_MAX_SIZEDSC","Grosseur maximale (en bytes) des images à uploader.");
define("_MI_SSPARTNER_MAX_SIZE","Grosseur maximale des images");
define("_MI_SPARTNER_ORPHAN_FIRST","Afficher les partenaires orphelins en haut de liste?");
define("_MI_SPARTNER_ORPHAN_FIRST_DSC","Si vous choisissez 'Oui', les partenaires qui n'appartiennet à aucune catégorie seront affichés en haut de la page d'accueil du module.");
define('_MI_SPARTNER_CATEGORIES',"Catégories");

?>