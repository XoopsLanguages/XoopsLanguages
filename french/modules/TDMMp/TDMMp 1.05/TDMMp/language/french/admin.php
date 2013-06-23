<?php
/**
 * ****************************************************************************
 *  - TDMMp By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.tdmxoops.net)
 *
 * Cette licence, contient des limitations!!!
 *
 * 1. Vous devez posséder une permission d'exécuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' étudier,
 * 3. Vous ne devez pas le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la liberté de l'améliorer et de rendre publiques les modifications
 *
 * @license     TDMFR PRO license
 * @author		TDMFR ; TEAM DEV MODULE 
 *
 * ****************************************************************************
 */
//BOX install
define("_MP_BOX1","Boîte de réception");
define("_MP_BOX2","Sauvegarde");
define("_MP_BOX3","Messages Reçus");
define("_MP_BOX4","Brouillons");
define("_MP_BOX5","Messages envoyés");
define("_MP_BOX6","Messages supprimés");
define("_MP_BOX7","Travail");
define("_MP_BOX8","Fun");
define("_MP_BOX9","Contact");
//

define("_PM_AM_INDEX","Index");
define("_PM_AM_PRUNE","Purge");
define("_PM_AM_FOLDER","Dossiers");
define("_PM_AM_NAVPREFERENCES","Préférences");
define("_PM_AM_NAVPERMISSIONS","Permissions");
define("_PM_AM_NAVUPDATE","Update");
define("_PM_AM_NAVABOUT","About");
define("_PM_AM_NOTIF","Notifications");
define("_PM_AM_ERREURPHP","ERREUR: Le menu est disponible uniquement sous PHP 5.0 ou supérieur");
//news
define("_PM_AM_FILE","Integration automatique");

define("_PM_AM_INDEXDESC","Index du module");

//index.php
define("_PM_AM_MANAGE_MP","Gestion des Messages");
define("_PM_AM_THEREARE_MP","Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> Messages dans la Base de donnée");

define("_PM_AM_MANAGE_FOLDER","Gestion des Dossiers");
define("_PM_AM_MANAGE_FOLDER_USER","Gestion des Dossiers Utilisateurs");
define("_PM_AM_THEREARE_FOLDER","Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> Dossiers dans la Base de donnée");
define("_PM_AM_THEREARE_FOLDER_WAITING","Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> Dossiers personnels dans la Base de donnée");

define("_PM_AM_MANAGE_NOTIF","Gestion des Notifications");
define("_PM_AM_THEREARE_NOTIF","Il y a <span style='color: #ff0000; font-weight: bold'>%s</span> Utilisateurs avec la notification active dans la Base de donnée");

//form
define("_PM_AM_TITLE","Titre");
define("_PM_AM_ACTION","Action");
define("_PM_AM_TRIE_PAR","Afficher par");
define("_PM_AM_NICKNAME","Pseudo de l'utilisateur");
define("_PM_AM_REELNAME","Nom réel");

define("_PM_AM_DEL","Supprimer");
define("_PM_AM_EDIT","Editer");
define("_PM_AM_ADD","Ajouter");

define("_PM_AM_FORMSUREDEL","Etes-vous sûr de vouloir supprimer : <b><span style='color : Red'> %s </span></b>, les messages du dossier seront supprimés");

define("_PM_AM_BASE","Vos Modifications sont enregistrer avec succé");
define("_PM_AM_BASEERROR","Erreur: Vos Modifications ne sont pas enregistrer");
//prune.php
define("_PM_AM_PRUNEAFTER","Purger les messages postés après cette date (laisser vide pour ne pas avoir de date de début)");
define("_PM_AM_PRUNEBEFORE","Purger les messages poste avant cette date (laisser vide pour ne pas avoir de date de fin)");
define("_PM_AM_ONLYREADMESSAGES","Purger seulement les messages lus");
define("_PM_AM_INCLUDESAVE","Inclure les messages dans le répertoire de sauvegarde des utilisateurs");
define("_PM_AM_NOTIFYUSERS","Notifier les utilisateurs concernés par cette purge ?");

define("_PM_AM_MESSAGESPRUNED","%u messages purgés");
define("_PM_AM_ERRORWHILEPRUNING","Une erreur s'est produite pendant la purge");

//notif.php
define("_PM_AM_DNOTIF","Régler les notifications actives");
define('_PM_AM_LAST10NOTIF','Utilisateur(s)');
define("_PM_AM_TRIENOTIF","Membres actuellement triés par: ");
define("_PM_AM_NOTIFAFTER","Connexion aprés cette date (blanc pour aucune date)");
define("_PM_AM_NOTIFBEFORE","Connexion avant cette date (blanc pour aucune date)");
define("_PM_AM_NOTIF_REGDATE","Inscrit le");
define("_PM_AM_NOTIF_LAST","Dernière connexion");
define("_PM_AM_NOTIF_DEL","Désactiver ces notifications");
define("_PM_AM_NOTIF_WARNING","Désactiver les notifications des membres qui ne sont pas venus sur votre site depuis un certain temp. Cette désactivation concerne uniquement les membres ayant activé la notification par message privé.");
define("_PM_AM_NOTIF_REDIRECT","Notification(s) Désactivé(s)");
define("_PM_AM_NOTIF_NONE","Aucune notification(s) active pour votre séléction");

//About (about.php)
define("_AM_ABOUT_RELEASEDATE","Release Date");
define("_AM_ABOUT_AUTHOR","Author");
define("_AM_ABOUT_CREDITS","Crédits");
define("_AM_ABOUT_README","Générale Information");
define("_AM_ABOUT_MANUAL","Aide");
define("_AM_ABOUT_LICENSE","Licence");
define("_AM_ABOUT_MODULE_STATUS","Status");
define("_AM_ABOUT_WEBSITE","Web Site");
define("_AM_ABOUT_AUTHOR_NAME","Author Name");
define("_AM_ABOUT_AUTHOR_WORD","Author Word");
define("_AM_ABOUT_CHANGELOG","Change Log");
define("_AM_ABOUT_MODULE_INFO","Module Info");
define("_AM_ABOUT_AUTHOR_INFO","Author Info");
define("_AM_ABOUT_DISCLAIMER","Disclaimer");
define("_AM_ABOUT_DISCLAIMER_TEXT","GPL Licensed - No Warranty");

//1.3
define("_PM_AM_MANAGE_IMPORT","Gestion des imports");
define("_PM_AM_IMPORT_NONE","Table sql introuvable");
define("_PM_AM_IMPORT","Importer");

//1.5
define("_PM_AM_MANAGE_INSTALL","Intégration");
define("_PM_AM_INSTALL_HELP","<b>Pour toute manipulation sur les fichiers vous devez garder une copie de l'original</b>");
define("_PM_AM_INSTALL_COPY"," <span style='color: #ff0000; font-weight: bold'>Merci de copier: </span>");
define("_PM_AM_INSTALL_IN"," <span style='color: #ff0000; font-weight: bold'>dans: </span>");

//1.6
define("_PM_AM_OPTIMISE","Optimise les tables");
?>