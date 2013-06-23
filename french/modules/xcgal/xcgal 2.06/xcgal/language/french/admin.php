<?php
// $Id: admin.php,v 1.1 2006/07/20 12:34:50 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGallery - XOOPS Gallery Modul                        //
//                    Copyright (c) 2003 Derya Kiran                         //
//                           meeresstille@gmx.de                             //
//         http://www.myxoopsforge.org/modules/xfmod/project/?xcgal          //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10                                   //
//  (http://coppermine.sourceforge.net/)                                     //
//  developed by Grégory DEMAR                                               //
//  ------------------------------------------------------------------------ //
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
define("_AM_CONFIG","xcGallery Configuration");
define("_AM_GENERALCONF","Configuration générale");
define("_AM_CATMNGR","Gestion des catégories");
define("_AM_USERMNGR","Gestions des utilisateurs");
define("_AM_GROUPMNGR","Gestion des groupes");
define("_AM_BATCHADD","Installation manuelle d'image");
define("_AM_ECARDMNGR","Gestion des ecards");
define("_AM_PICAPP","Images en attente de validation");

define("_AM_PARAM_MISSING","Script appelé sans parametre(s) requis.");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE"," Gestion des utilisateurs de xcGallery");
define("_AM_USERMGR_USHOW","Montrer tous les utilisateurs des albums/images");
define("_AM_USERMGR_USHOWDEL","Montrer les albums de tous les utilisateurs supprimés");
define("_AM_USERMGR_ULIST","Liste d'utilisateurs");
define("_AM_USERMGR_USER","Utilisateurs");
define("_AM_USERMGR_ALBUMS","Albums");
define("_AM_USERMGR_PICS","Images");
define("_AM_USERMGR_QUOTA","quota utilisé");
define("_AM_USERMGR_ALB","Album");
define("_AM_USERMGR_DELUID","Del. id utilisateur");
define("_AM_USERMGR_OPT","Operations");
define("_AM_USERMGR_NOTMOVE","** Ne pas bouger **");
define("_AM_USERMGR_DEL","Effacer");
define("_AM_USERMGR_PROPS","Propriétés");
define("_AM_USERMGR_EDITP","Editer images");

define("_AM_USERMGR_UONPAGE","%d utilisateur sur %d page(s)");
define("_AM_USERMGR_NOUSER","Aucun utilisateur trouvé!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","Rechercher nouvelles images");
define("_AM_SRCHNEW_SEL_DIR","Sélectionner directement");
define("_AM_SRCHNEW_SEL_DIR_MSG","Cette fonction vous permet d'ajouter une série d'image que vous avez téléchargée sur votre serveur par FTP.<br /><br />Choisissez le dossier où vous avez téléchargé vos images");
define("_AM_SRCHNEW_NO_PIC_ADD","Il n'y a aucune image à ajouter");
define("_AM_SRCHNEW_NEED_ONE_ALB","Vous avez besoin d'au moins un album pour utiliser cette fonction");
define("_AM_SRCHNEW_WARNING","Attention");
define("_AM_SRCHNEW_CHG_PERM","le script ne peut pas écrire dans cet annuaire, vous devez changer son mode en 755 ou 777 avant d'essayé d'ajouter les images!");
define("_AM_SRCHNEW_TARGET_ALB","Mettez les images  &quot;</b>%s<b>&quot; dans </b>%s");
define("_AM_SRCHNEW_FOLDER","Dossier");
define("_AM_SRCHNEW_IMAGE","Image");
define("_AM_SRCHNEW_ALB","Album");
define("_AM_SRCHNEW_RESULT","Resultat");
define("_AM_SRCHNEW_DIR_RO","impossible à afficher. ");
define("_AM_SRCHNEW_CANT_READ","Impossible de lire. ");
define("_AM_SRCHNEW_INSERT","Ajouter de nouvelles images dans la galerie");
define("_AM_SRCHNEW_LIST_NEW","Liste des nouvelles images");
define("_AM_SRCHNEW_INS_SEL","Inserer les images sélectionnés");
define("_AM_SRCHNEW_NO_PIC","Aucune nouvelle image n'a été trouvée");
define("_AM_SRCHNEW_PATIENT","Veuillez être patient, le script a besoin de temps pour ajouter les images");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : signifie que l'image a été  ajoutée avec succés<li><b>DP</b> : signifie que l'image a été copiée et se trouve dans la base de données<li><b>PB</b> : signifie que l'image ne peut pas être ajoutée, vérifiez votre configuration et la permission des dossiers où les images sont localisées<li>Si  OK, DP, PB 'signes' apparaissent clicquez sur les images brisées pour voir les messages d'erreur produits par PHP<li>Si arrêt de votre navigateur ,cliquez sur le bouton Actualiser</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","Nom du groupe");
define("_AM_GRPMGR_QUOTA","Espace disc allouer");
define("_AM_GRPMGR_RATE","Peut évaluer des images");
define("_AM_GRPMGR_SENDCARD","Peut envoyé des ecards");
define("_AM_GRPMGR_COM","Peut poster des commentaires");
define("_AM_GRPMGR_UPLOAD","peut uploader des images");
define("_AM_GRPMGR_PRIVATE","Peut avoir une galerie personnelle");
define("_AM_GRPMGR_APPLY","Appliquer modifications");
define("_AM_GRPMGR_MANAGE","gérer les groupes d'utilisateurs");
define("_AM_GRPMGR_PUB_APPR","Pub. Upl. approuvé (1)");
define("_AM_GRPMGR_PRIV_APPR","Priv. Upl. approuvé (2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> Les téléchargements dans un album public ont besoin de l'approbation de l'admin");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> Uploads dans un album appartenant à un utilisateur est soumis a l'approbation de l'admin");
define("_AM_GRPMGR_NOTES","Notes");
define("_AM_GRPMGR_SYN","Synchroniser");
define("_AM_GRPMGR_SYN_NOTE","Cliqué sur 'Synchroniser' pour synchroniser xcGallery groupes avec Xoops groupes");
define("_AM_GRPMGR_EMPTY","La table xcGallery Group est vide !<br /><br />Groupes par défault crées.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","Parameters requis pour l''opération '%s' non fournie!");
define("_AM_CAT_UNKOWN","La catégorie choisie n'existe pas dans la base de données ");
define("_AM_CAT_UGAL_CAT_RO","La catégorie de galeries d'utilisateur ne peut pas être supprimée !");
define("_AM_CAT_MNGCAT","Gerer categories");
define("_AM_CAT_CONF_DEL","Etes vous sur de vouloir effacé cette categorie");
define("_AM_CAT_CAT","Catégorie");
define("_AM_CAT_OP","Opérations");
define("_AM_CAT_MOVE","Déplacé dans");
define("_AM_CAT_UPCR","Mettre a jour/Crée catégorie");
define("_AM_CAT_PARENT","Catégorie principale");
define("_AM_CAT_TITLE","Titre de la catégorie");
define("_AM_CAT_DESC","Description de la catégorie");
define("_AM_CAT_NOCAT","* Pas de Categorie *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","Gestion des ecards de xcGallery");
define("_AM_CARDMGR_TIME","Date");
define("_AM_CARDMGR_SUNAME","Nom de l'expéditeur");
define("_AM_CARDMGR_SEMAIL","Email expéditeur");
define("_AM_CARDMGR_SIP","Ip expéditeur");
define("_AM_CARDMGR_PID","ID de l'image");
define("_AM_CARDMGR_STATUS","Sélectionné");
define("_AM_CARDMGR_DEL_SELECTED","Effacer l'ecard selectionnée");
define("_AM_CARDMGR_DEL_ALL","Effacer tous les Ecards");
define("_AM_CARDMGR_DEL_PICKED","Effacer tous les ecards séléectionnées");
define("_AM_CARDMGR_DEL_UNPICKED","Effacer tous les ecards desélectionnées");
define("_AM_CARDMGR_CONPAGE","%d ecards sur %d page(s)");

?>