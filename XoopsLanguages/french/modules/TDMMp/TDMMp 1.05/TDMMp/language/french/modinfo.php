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
define("_PM_MI_NAME","Messages privé");
define("_PM_MI_DESC","Module pour échanger des messages privés entre membres");

define("_PM_MI_INDEX","Index");
define("_PM_MI_PRUNE","Purge des messages");
define("_PM_MI_FOLDER","Dossiers");
define("_PM_MI_NOTIF","Notifications");
define("_PM_MI_ABOUT","A propos");

define("_PM_MI_LINK_TITLE","Lien message privé");
define("_PM_MI_LINK_DESCRIPTION","Affiche un lien pour envoyer un message privé à un membre");
define("_PM_MI_MESSAGE","Ecrire un message &agrave;  ");

define("_PM_MI_PRUNESUBJECT","Contenu de la notification de messages purgés");
define("_PM_MI_PRUNESUBJECT_DESC","Ce sera l'objet du message envoyé; au membre suite à la purge");
define("_PM_MI_PRUNEMESSAGE","Contenu du message après une purge");
define("_PM_MI_PRUNEMESSAGE_DESC","Ce texte sera affiché dans le corps du message adressé aux utilisateurs après qu'un ou plusieurs de leurs messages ait été purgés de leur boîte de réception. {PM_COUNT} est remplacé par le nombre de messages purgés de cet utilisateur");
define("_PM_MI_PRUNESUBJECTDEFAULT","Messages supprimés pendant la purge");
define("_PM_MI_PRUNEMESSAGEDEFAULT","Pendant la purge, nous avons effacé {PM_COUNT} messages dans ta boîte de réception pour sauver de l'espace et des ressources");

define("_PM_MI_MAXSAVE","Maximum de messages dans le répertoire de sauvegarde");
define("_PM_MI_MAXSAVE_DESC","");

define("_PM_MI_PERPAGE","Nombre de messages par page");
define("_PM_MI_PERPAGE_DESC","Combien de messages voulez vous voir affichés sur chaque page ?");


define("_PM_MI_NEWMSG","Indiquer les nouveaux messages par une popup?");
define("_PM_MI_POPUP","Ce texte sera affiché dans la popup adressé aux utilisateurs.
<br /> {X_UNAME} imprimera le nom de l'utilisateur
<br /> {X_COUNT} imprimera le nombre de message");

define("_PM_MI_NOTIFY","Bonjour, {X_UNAME} vous avez {X_COUNT} nouveau(x) message(s) privé.");

//1.1
define("_PM_MI_MAXSUBJECT","Taille Maximum des sujects");
//1.2
define("_PM_MI_CLASS","Style");
//1.06
define("_PM_MI_MAXALERT","Limite de message pour vos utilisateurs");
?>