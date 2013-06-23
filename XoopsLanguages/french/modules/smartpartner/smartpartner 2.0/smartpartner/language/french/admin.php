<?php

/**
 * $Id: admin.php,v 1.1 2007/06/05 18:32:42 marcan Exp $
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

define("_AM_SPARTNER_ABOUT","A propos");
define("_AM_SPARTNER_ACTION","Action");
define("_AM_SPARTNER_ACTIVATE_PARTNER","Activer le partenaire");
define("_AM_SPARTNER_ACTIVE", _CO_SPARTNER_ACTIVE);
define("_AM_SPARTNER_ACTIVE_EDIT_SUCCESS","Le partenaire a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s.");
define("_AM_SPARTNER_ACTIVE_EDITING","Editer un partenaire actif");
define("_AM_SPARTNER_ACTIVE_EDITING_INFO","Vous pouvez activer un partenaire actif. Les modifications prendront imm&eacute;diatement effet du cot&eacute; utilisateur.");
define("_AM_SPARTNER_ACTIVE_EXP","<b>Partenaires actifs</b>: Partenaires actuellement actifs sur ce site.");
define("_AM_SPARTNER_ACTIVE_PARTNERS","Partenaires actif");
define("_AM_SPARTNER_ACTIVE_PARTNERS_DSC","Voici la liste des partenaires actifs. Ces partenaires sont affich&eacute;s du cot&eacute; utilisateur. Vous pouvez &eacute;diter ou effacer chaque partenaire en cliquant sur le bouton correspondant dans la colonne <b>Action</b>.");
define("_AM_SPARTNER_ALL","tous");
define("_AM_SPARTNER_ALL_EXP","<b>Tous les &eacute;tats</b>: tous les partenaires de ce module, quel que soit leur &eacute;tat.");
define("_AM_SPARTNER_ALLITEMS","Tous les partenaires de ce module");
define("_AM_SPARTNER_ALLITEMSMSG","S&eacute;lectionnez un &eacute;tat pour visualiser tous les partenaires valides dans cet &eacute;tat. Vous pouvez s&eacute;lectionner aussi l'ordre de tri dans lequel les partenaires seront visualis&eacute;s.");
define("_AM_SPARTNER_APPROVE","Approuver");
define("_AM_SPARTNER_APPROVING","En Approbation");
define("_AM_SPARTNER_ASC","Croissant");
define("_AM_SPARTNER_AVAILABLE","<span style='font-weight: bold; color: green;'>Disponible</span>");
define("_AM_SPARTNER_BLOCKS","Blocs et groupes");
define("_AM_SPARTNER_BLOCKSANDGROUPS","Blocs et groupes");
define("_AM_SPARTNER_BLOCKSTXT","Ce module dispose des blocs suivants, que vous pouvez configurer ici ou dans le module syst&egrave;me.");
define("_AM_SPARTNER_BY","Par");
define("_AM_SPARTNER_CANCEL", _CO_SPARTNER_CANCEL);
define("_AM_SPARTNER_CLEAR", _CO_SPARTNER_CLEAR);
define("_AM_SPARTNER_CREATE", _CO_SPARTNER_CREATE);
define("_AM_SPARTNER_CREATETHEDIR","Cr&eacute;er le dossier");
define("_AM_SPARTNER_DB_CHECKTABLES","Vérifier tables");
define("_AM_SPARTNER_DB_CURRENTVER","Version courante: <span class='currentVer'>%s</span>");

define("_AM_SPARTNER_DB_DBVER","Version de base de donnée %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA","Données ajoutées dans table %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA_ERR","Erreur à l'ajout de données dans table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD","Changement du champ %s dans table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD_ERR","Erreur au changement dans champ %s dans table %s");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE","Table %s créée");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE_ERR","Erreur à la création de table %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD","Champ %s ajouuté avec succès");
define("_AM_SPARTNER_DB_MSG_NEWFIELD_ERR","Erreur à l'ajout champ %s");
define("_AM_SPARTNER_DB_NEEDUPDATE","Votre base de donn&eacute;e n'est pas &agrave; jour. Proc&eacute;dez &agrave; la mise-&agrave;-jour des tables S.V.P!");
define("_AM_SPARTNER_DB_NEEDUPDATE_WARNING","AVERTISSEMENT : La SmartFactory vous recommande fortement de proc&eacute;der &agrave; une sauvegarde des tables de SmartPartner avant d'&eacute;x&eacute;cuter le script de mise-&agrave;-jour.");
define("_AM_SPARTNER_DB_NOUPDATE","Votre base de donn&eacute;es est &agrave; jour.");
define("_AM_SPARTNER_DB_UPDATE_DB","Mise-&agrave;-jour de la base de donn&eacute;es");
define("_AM_SPARTNER_DB_UPDATE_ERR","Erreur(s) lors de la mise-&agrave;-jour vers la version %s");
define("_AM_SPARTNER_DB_UPDATE_NOW","Mettre &agrave; jour");
define("_AM_SPARTNER_DB_UPDATE_OK","La mise-&agrave;-jour vers la version %s a &eacute;t&eacute; &eacute;x&eacute;cut&eacute;e avec succ&egrave;s!");
define("_AM_SPARTNER_DB_UPDATE_TO","Mise-&agrave;-jour vers la version %s");

define("_AM_SPARTNER_DELETE","Effacer");
define("_AM_SPARTNER_DELETEPARTNER", _CO_SPARTNER_DELETEPARTNER);
define("_AM_SPARTNER_DELETETHISP","Etes vous certain de vouloir effacer ce partenaire?");
define("_AM_SPARTNER_DESC","D&eacute;croissant");
define("_AM_SPARTNER_DESCRIPTION", _CO_SPARTNER_DESCRIPTION);
define("_AM_SPARTNER_DESCRIPTION_DSC", _CO_SPARTNER_DESCRIPTION_DSC);
define("_AM_SPARTNER_DIRCREATED","Dossier cr&eacute;&eacute; avec succ&egrave;s ");
define("_AM_SPARTNER_DIRNOTCREATED","Le dossier n'a pas pu &ecirc;tre cr&eacute;&eacute; ");
define("_AM_SPARTNER_EDITING","Edition");
define("_AM_SPARTNER_EDITPARTNER", _CO_SPARTNER_EDITPARTNER);
define("_AM_SPARTNER_GOMOD","Aller au module");
define("_AM_SPARTNER_GROUPS","Groupes");
define("_AM_SPARTNER_GROUPSINFO","Configuration des droits au modules et des blocs pour chaque groupe");
define("_AM_SPARTNER_HELP","Aide");
define("_AM_SPARTNER_HITS", _CO_SPARTNER_HITS);
define("_AM_SPARTNER_ID","N° de Partenaire");
define("_AM_SPARTNER_IMPORT","Import");
define("_AM_SPARTNER_IMPORT_ALL_PARTNERS","tous les partenaires");
define("_AM_SPARTNER_IMPORT_AUTOAPPROVE","Auto-approbation");
define("_AM_SPARTNER_IMPORT_BACK","retourner &agrave; la page d'import");
define("_AM_SPARTNER_IMPORT_ERROR","Une erreur est apparue pendant l'import du partenaire.");
define("_AM_SPARTNER_IMPORT_FILE_NOT_FOUND","Fichier d'import non trouv&eacute; sur <b>%s</b>");
define("_AM_SPARTNER_IMPORT_FROM","Import de %s");
define("_AM_SPARTNER_IMPORT_INFO","Vous pouvez importer des partenaires directement dans SmartPartner. S&eacute;lectionnez simplement le module &agrave; partir duquel vous d&eacute;sirez importer les partenaires et cliquez sur le bouton 'Import'.");
define("_AM_SPARTNER_IMPORT_MODULE_FOUND","Le module %s a &eacute;t&eacute; trouv&eacute;. il existe %s partenaires qui peuvent &ecirc;tre import&eacute;s.");
define("_AM_SPARTNER_IMPORT_NO_MODULE","comme XoopsPartners n'est pas install&eacute; sur ce site, il n'y a pas de partenaire a importer.");
define("_AM_SPARTNER_IMPORT_PARTNER_ERROR","Une erreur est apparue pendant l'import '%s'.");
define("_AM_SPARTNER_IMPORT_RESULT","Ici le r&eacute;sultat de l'import.");
define("_AM_SPARTNER_IMPORT_SETTINGS","Param&egrave;tres d'Import");
define("_AM_SPARTNER_IMPORT_SUCCESS","Les partenaires ont &eacute;t&eacute; import&eacute;s avec succ&egrave;s dans le module.");
define("_AM_SPARTNER_IMPORT_TITLE","Import de Partenaires");
define("_AM_SPARTNER_IMPORT_XOOPSPARTNERS_110","Partenaires de XoopsPartners 1.1");
define("_AM_SPARTNER_IMPORTED_PARTNER","Partenaires import&eacute;s: <em>%s</em>");
define("_AM_SPARTNER_IMPORTED_PARTNERS","Partenaires import&eacute;s: <em>%s</em>");
define("_AM_SPARTNER_IMPORT_SELECTION","S&eacute;lection d'import");
define("_AM_SPARTNER_IMPORT_SELECT_FILE","Partenaires");
define("_AM_SPARTNER_IMPORT_SELECT_FILE_DSC","Choisissez le module &agrave; partir duquel vous allez importer les partenaires.");
define("_AM_SPARTNER_INACTIVATE_PARTNER","D&eacute;sactiver le partenaire");
define("_AM_SPARTNER_INACTIVE", _CO_SPARTNER_INACTIVE);
define("_AM_SPARTNER_INACTIVE_EDITING","Editer un partenaire inactif");
define("_AM_SPARTNER_INACTIVE_EDITING_INFO","Vous pouvez &eacute;diter un partenaire inactif. Les modifications seront sauvegard&eacute;s pour ce partenaire. aussi, si vous d&eacute;sirez afficher ce partenaire du cot&eacute; utilisateur, vous devrez param&eacute;trer le champs <b>Inactif</b> &agrave; 'Non'.");
define("_AM_SPARTNER_INACTIVE_EXP","<b>Partenaires inactifs</b>: des partenaires actifs sont devenus, pour quelques raisons, inactifs. Un partenaire inactive n'est pas affich&eacute; du cot&eacute; utilisateur.");
define("_AM_SPARTNER_INACTIVE_FIELD","Inactif");
define("_AM_SPARTNER_INACTIVE_PARTNERS","Partenaires inactifs");
define("_AM_SPARTNER_INDEX","Index");
define("_AM_SPARTNER_INTRO", _CO_SPARTNER_INTRO);
define("_AM_SPARTNER_INVENTORY", _CO_SPARTNER_INVENTORY);
define("_AM_SPARTNER_LOGO", _CO_SPARTNER_LOGO);
define("_AM_SPARTNER_LOGO_DSC", _CO_SPARTNER_LOGO_DSC);
define("_AM_SPARTNER_LOGO_UPLOAD", _CO_SPARTNER_LOGO_UPLOAD);
define("_AM_SPARTNER_LOGO_UPLOAD_DSC", _CO_SPARTNER_LOGO_UPLOAD_DSC);
define("_AM_SPARTNER_MODADMIN","Admin:");
define("_AM_SPARTNER_MODIFY", _CO_SPARTNER_MODIFY);
define("_AM_SPARTNER_NAME", _CO_SPARTNER_NAME);
define("_AM_SPARTNER_NO","Non");
define("_AM_SPARTNER_NOPARTNERS", _CO_SPARTNER_NOPARTNERS);
define("_AM_SPARTNER_NOTAVAILABLE","<span style='font-weight: bold; color: red;'>Non disponible</span>");
define("_AM_SPARTNER_OPTS","Pr&eacute;f&eacute;rences");
define("_AM_SPARTNER_OPTIONS","Options");
define("_AM_SPARTNER_PARTNER", _CO_SPARTNER_PARTNER);
define("_AM_SPARTNER_PARTNER_APPROVE","Approuver ce partenaire");
define("_AM_SPARTNER_PARTNER_CREATE", _CO_SPARTNER_PARTNER_CREATE);
define("_AM_SPARTNER_PARTNER_CREATED", _CO_SPARTNER_PARTNER_CREATED);
define("_AM_SPARTNER_PARTNER_CREATING", _CO_SPARTNER_PARTNER_CREATING);
define("_AM_SPARTNER_PARTNER_CREATING_DSC", _CO_SPARTNER_PARTNER_CREATING_DSC);
define("_AM_SPARTNER_PARTNER_DELETE", _CO_SPARTNER_PARTNER_DELETE);
define("_AM_SPARTNER_PARTNER_DELETE_ERROR","Une erreur s'est produite &agrave; l'effacement de ce partenaire.");
define("_AM_SPARTNER_PARTNER_DELETE_SUCCESS","Ce  partenaire a &eacute;t&eacute; effac&eacute; avec succ&egrave;s.");
define("_AM_SPARTNER_PARTNER_EDIT", _CO_SPARTNER_PARTNER_EDIT);
define("_AM_SPARTNER_PARTNER_INFORMATIONS", _CO_SPARTNER_PARTNER_INFORMATIONS);
define("_AM_SPARTNER_PARTNER_NOT_CREATED", _CO_SPARTNER_PARTNER_NOT_CREATED);
define("_AM_SPARTNER_PARTNER_NOT_SELECTED","Vous n'avez pas s&eacute;lectionn&eacute; de partenaire valide.");
define("_AM_SPARTNER_PARTNER_NOT_UPDATED", _CO_SPARTNER_PARTNER_NOT_UPDATED);
define("_AM_SPARTNER_PARTNERS", _CO_SPARTNER_PARTNERS);
define("_AM_SPARTNER_PATH","Chemin");
define("_AM_SPARTNER_PATH_ITEM","&eacute;l&eacute;ments");
define("_AM_SPARTNER_PATH_IMAGES","Logo des partenaires");
define("_AM_SPARTNER_PATHCONFIGURATION","Configuration des dossiers");
define("_AM_SPARTNER_POSITION","Position");
define("_AM_SPARTNER_REJECTED", _CO_SPARTNER_REJECTED);
define("_AM_SPARTNER_REJECTED_EXP","<b>Partenaires rejet&eacute;s</b>: Partenaires dont la candidature a &eacute;t&eacute; rejet&eacute;e. Ces partenaires ne sont pas affich&eacute;s du cot&eacute; utilisateur.");
define("_AM_SPARTNER_REJECTED_PARTNERS","Partenaires rejet&eacute;s");
define("_AM_SPARTNER_REJECTED_EDITING","Edit&eacute; un partenaire rejet&eacute;");
define("_AM_SPARTNER_REJECTED_EDITING_INFO","Vous pouvez editer ce partenaire rejet&eacute;. Les modifications seront sauvegard&eacute;e pour ce partenaire. Cependant, si vous afficher ce partenaire du cot&eacute; utilisateur, il est necessaire de fixer le <b>Status</b> du champ agrave 'Actif'");
define("_AM_SPARTNER_SELECT_SORT","Ordre de tri:");
define("_AM_SPARTNER_SELECT_STATUS","Statut");
define('_AM_SB_SETMPERM','Param&eacute;trer les permissions');
define("_AM_SPARTNER_SHOWING","&eacute;tat s&eacute;lectionn&eacute;: ");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS","Param&egrave;tres d'import de SmartPartner");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS_VALUE","Il n'y a pas de param&egrave;tres d'import. Veuillez appuyer sur le bouton d'import pour commencer celui ci.");
define("_AM_SPARTNER_STATUS", _CO_SPARTNER_STATUS);
define("_AM_SPARTNER_STATUS_DSC","Choisissez le statut du partenaire. Les partenaires inactifs ne sont pas affich&eacute;s dans la section publique du site.");
define("_AM_SPARTNER_SUMMARY", _CO_SPARTNER_SUMMARY);
define("_AM_SPARTNER_SUMMARY_REQ", _CO_SPARTNER_SUMMARY_REQ);
define("_AM_SPARTNER_SUMMARY_DSC", _CO_SPARTNER_SUMMARY_DSC);
define("_AM_SPARTNER_SUBMITTED", _CO_SPARTNER_SUBMITTED);
define("_AM_SPARTNER_SUBMITTED_APPROVE_SUCCESS","Le partenaire soumis a &eacute;t&eacute; approuv&eacute;.");
define("_AM_SPARTNER_SUBMITTED_EXP","<b>Partenaires soumis</b>: Partenaires potentiels ayant soumis leur organisation en vue de devenir partenaire de ce site.");
define("_AM_SPARTNER_SUBMITTED_INFO","Ce partenaire a &eacute;t&eacute; soumis sur votre site. Vous pouvez l'&eacute;diter comme vous le d&eacute;sirez. Vous pouvez faire quelques modifications si vous en avez envie. Une fois approuv&eacute;, ce partenaire sera affich&eacute; du cot&eacute; utilisateur.");
define("_AM_SPARTNER_SUBMITTED_PARTNERS","Partenaires soumis");
define("_AM_SPARTNER_SUBMITTED_TITLE","Partenaire soumis");
define("_AM_SPARTNER_TITLE","Nom du partenaire");
define("_AM_SPARTNER_TITLE_REQ", _CO_SPARTNER_TITLE_REQ);
define("_AM_SPARTNER_TOTAL_SUBMITTED","Soumis: ");
define("_AM_SPARTNER_TOTAL_ACTIVE","Actif: ");
define("_AM_SPARTNER_TOTAL_REJECTED","Rejet&eacute;: ");
define("_AM_SPARTNER_TOTAL_INACTIVE","Inactif: ");
define("_AM_SPARTNER_UPDATE_MODULE","Mise-à-jour du module");
define("_AM_SPARTNER_URL", _CO_SPARTNER_URL);
define("_AM_SPARTNER_URL_DSC", _CO_SPARTNER_URL_DSC);
define("_AM_SPARTNER_WEIGHT", _CO_SPARTNER_WEIGHT);
define("_AM_SPARTNER_WEIGHT_DSC", _CO_SPARTNER_WEIGHT_DSC);
define("_AM_SPARTNER_YES","Oui");


//Messages de redirection
define("_AM_SPARTNER_NOTSET_ACTIVE_SUCCESS","Le partenaire a &eacute;t&eacute; cr&eacute;e");
define("_AM_SPARTNER_NOTSET_INACTIVE_SUCCESS","Le partenaire a &eacute;t&eacute; cr&eacute;e et d&eacute;sactiv&eacute;.");
define("_AM_SPARTNER_SUBMITTED_ACTIVE_SUCCESS","Le partenaire soumis a &eacute;t&eacute;  approuv&eacute;!");
define("_AM_SPARTNER_SUBMITTED_INACTIVE_SUCCESS","Le partenaire soumis a &eacute;t&eacute; d&eacute;sactiv&eacute;.");
define("_AM_SPARTNER_SUBMITTED_REJECTED_SUCCESS","Le partenaire soumis a &eacute;t&eacute; rejet&eacute;.");
define("_AM_SPARTNER_ACTIVE_ACTIVE_SUCCESS","Le partenaire a &eacute;t&eacute; mis &agrave; jour.");
define("_AM_SPARTNER_ACTIVE_INACTIVE_SUCCESS","Le partenaire a &eacute;t&eacute; d&eacute;sactiv&eacute;.");
define("_AM_SPARTNER_INACTIVE_ACTIVE_SUCCESS","Le partenaire non activ&eacute a &eacute;t&eacute; activ&eacute;.");
define("_AM_SPARTNER_INACTIVE_INACTIVE_SUCCESS","Le partenaire non activ&eacute a &eacute;t&eacute; mis &agrave; jour.");
define("_AM_SPARTNER_REJECTED_ACTIVE_SUCCESS","Le partenaire rejet&eacute; a &eacute;t&eacute; activ&eacute;!");
define("_AM_SPARTNER_REJECTED_INACTIVE_SUCCESS","Le partenaire rejet&eacute; a &eacute;t&eacute; desactiv&eacute;.");
define("_AM_SPARTNER_REJECTED_REJECTED_SUCCESS","Le partenaire rejet&eacute; a &eacute;t&eacute; mis &agrave; jour.");

define("_AM_SPARTNER_CATEGORY_EDIT","Modifier catégorie");
define("_AM_SPARTNER_CATEGORY_DELETE","Supprimer catégorie");
define("_AM_SPARTNER_CATEGORIES","Catégories");
define("_AM_SPARTNER_CATEGORIES_DSC","Voici la liste de toutes les catégories créées du module.");
define("_AM_SPARTNER_CATEGORIES_TITLE","Catégories créées");
define("_AM_SPARTNER_CATEGORY","Catégorie");
define("_AM_SPARTNER_CATEGORY_CREATE","Créer une catégorie");
define("_AM_SPARTNER_CATEGORY_CREATE_INFO","Remplissez le formulaire suivant afin de créer une catégorie. Les nouvelles catégorie seront automatiquement affichées du coté utilisateur.");
define("_AM_SPARTNER_CATEGORY_EDIT_INFO","Vous pouvez modifier cette catégorie. Les modifications prendront immédiatement effet du coté utilisateur.");
define("_AM_SPARTNER_CATEGORY_REQ","Catégorie*");
define("_AM_SPARTNER_CATEGORY_SAVE_ERROR","Une erreur est survenue lors de la sauvegarde de la catégorie. Voici la liste des erreur(s) :");
define("_AM_SPARTNER_CATHEADER","Gestion des catégories");
define("_AM_SPARTNER_CATID","ID");
define("_AM_SPARTNER_CATEGORY_DSC","Description de la catégorie");
define("_AM_SPARTNER_CATEGORY_DELETED","La catégorie %s a été effacée");
define("_AM_SPARTNER_CATEGORY_MODIFIED","La catégorie a été modifiée avec succès.");
define("_AM_SPARTNER_CATEGORY_WEIGHT","Poids de la catégorie");
define("_AM_SPARTNER_CATEGORY_IMAGE","Image de la catégorie");
define("_AM_SPARTNER_CATEGORY_IMAGE_DSC","Image representant la catégorie");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD","Uploader une image");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD_DSC","Choisissez une image dans votre ordinateur. l'image sera uploadée sur le site et servira comme image de la catégorie.");
define("_AM_SPARTNER_CATEGORY_CREATING","Création");
define("_AM_SPARTNER_CATEGORY_PARENT","Catégorie parente");
define("_AM_SPARTNER_CATEGORY_PARENT_DSC","Choisissez un parent pour faire de cette catégorie une sous-catégorie.");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE","Créer sous-catégories");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE_DSC","Fill the text box with the names of sub catégories to create.<br>Leave blank to not create subcatégorie. To create more, enter the how much more to create then press 'Add'");
define("_AM_SPARTNER_ADD_OPT","Add %s  more sub catégories");
define("_AM_SPARTNER_ADD_OPT_SUBMIT","Add");
define("_AM_SPARTNER_CATEGORY_CREATED","Nouvelle catégorie créée et sauvegardée!");
define("_AM_SPARTNER_CATEGORY_SUBCAT_SAVE_ERROR","Une erreur est survenue lors de la sauvegarde de la catégorie. Voici la liste des erreur(s) :");
define("_AM_SPARTNER_CATEGORY_DELETE_CONFIRM","Notez qu'en supprimant une cat&eacute;gorie, tous les partenaires la concernant seront supprim&eacute;s &eacute;galement, ainsi que les commentaires y &eacute;tant joints. voulez-vous quand m&ecirc;me poursuivre?");
define("_AM_SPARTNER_CATEGORY_DELETE_ERROR","Une erreur est survenue lors de la suppression de la catégorie.");
define("_AM_SPARTNER_CATEGORY_NONE","Il n'y a pas de catégorie créée dans le module.");

//added with catégories
define("_AM_SPARTNER_FILEUPLOAD_ERROR","Une erreur est survenue lors du chargement du fichier .");
define("_AM_SPARTNER_FILEUPLOAD_SUCCESS","Le fichier a été chargé avec succès.");
define("_AM_SPARTNER_PATH_CATEGORY_IMAGES","Image de la catégorie");
define("_AM_SPARTNER_CATEGORY_BELONG","Catégorie");
define("_AM_SPARTNER_BELONG_CATEGORY_DSC","Catégorie à laquelle appartient le partenaire");

define("_AM_SPARTNER_SUBCAT_CAT","Sous-catégories");
define("_AM_SPARTNER_SUBCAT_CAT_DSC","Liste des sous-catégories de cette catégorie");
define("_AM_SPARTNER_CATCOLNAME","Nom");
define("_AM_SPARTNER_SUBDESCRIPT","Description");
define("_AM_SPARTNER_NOSUBCAT","Pas de sous-catégorie crée");

?>
