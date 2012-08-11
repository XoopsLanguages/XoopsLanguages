<?php
define("_PROFILE_AM_FIELD","Champ");
define("_PROFILE_AM_FIELDS","Champs");
define("_PROFILE_AM_CATEGORY","Catégorie");
define("_PROFILE_AM_STEP","Etape");

define("_PROFILE_AM_SAVEDSUCCESS","%s enregistré avec succès");
define("_PROFILE_AM_DELETEDSUCCESS","%s supprimé avec succès");
define("_PROFILE_AM_RUSUREDEL","Etes-vous sûr de vouloir supprimer %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","Ce champ ne peut pas être configuré");

define("_PROFILE_AM_ADD","Ajouter %s");
define("_PROFILE_AM_EDIT","Editer %s");
define("_PROFILE_AM_TYPE","Type de champ");
define("_PROFILE_AM_VALUETYPE","Type de valeur");
define("_PROFILE_AM_NAME","Nom");
define("_PROFILE_AM_TITLE","Titre");
define("_PROFILE_AM_DESCRIPTION","Description");
define("_PROFILE_AM_REQUIRED","Obligatoire ?");
define("_PROFILE_AM_MAXLENGTH","Longueur maximum");
define("_PROFILE_AM_WEIGHT","Poids");
define("_PROFILE_AM_DEFAULT","Par défaut");
define("_PROFILE_AM_NOTNULL","Non nul");

define("_PROFILE_AM_ARRAY","Tableau");
define("_PROFILE_AM_EMAIL","E-mail");
define("_PROFILE_AM_INT","Intégrer");
define("_PROFILE_AM_TXTAREA","Zone de texte");
define("_PROFILE_AM_TXTBOX","Champ texte");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Autre");
define("_PROFILE_AM_FLOAT","Virgule flottante");
define("_PROFILE_AM_DECIMAL","Nombre décimal");
define("_PROFILE_AM_UNICODE_ARRAY","Tableau Unicode");
define("_PROFILE_AM_UNICODE_EMAIL","Email Unicode");
define("_PROFILE_AM_UNICODE_TXTAREA","Zone de texte Unicode");
define("_PROFILE_AM_UNICODE_TXTBOX","Champ Texte Unicode");
define("_PROFILE_AM_UNICODE_URL","URL Unicode");

define("_PROFILE_AM_PROF_VISIBLE_ON","Champ visible sur le profil de ces groupes");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Champ du profil visible pour ces groupes");
define("_PROFILE_AM_PROF_VISIBLE","Visibilité");
define("_PROFILE_AM_PROF_EDITABLE","Champ éditable depuis le profil");
define("_PROFILE_AM_PROF_REGISTER","Affiché sur le formulaire d'enregistrement");
define("_PROFILE_AM_PROF_SEARCH","Peut faire l'objet d'une recherche de la part des ces groupes");
define("_PROFILE_AM_PROF_ACCESS","Profils pouvant être consultés par ces groupes");
define("_PROFILE_AM_PROF_ACCESS_DESC",
        "<ul>" .
        "<li>Groupes d'administration: si un utilisateur appartient au groupe des administrateurs, il y aura accès si et seulement si un de ses groupes d'appartenance est autorisé à accéder au groupe d'administrateur; ou alors</li>" .
        "<li>Groupes personnalisés: si un utilisateur appartient à un groupe personnalisé (différent donc des groupes Admin, Utilisateurs et Anonymes), il y aura accès si et seulement si un des ses groupes d'appartenance est autorisé à accéder à n'importe quel groupe personnalisé; ou alors</li>" .
        "<li>Groupe utilisateur : si un utilisateur appartient uniquement au groupe basique des Utilisateurs, il y aura accès si et seulement si un de ses groupes d'appartenance est autorisé à accéder au groupe basique des Utilisateurs</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","Le champ ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," est visible pour ");
define("_PROFILE_AM_FIELDVISIBLEON"," la consultation du profil de ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Tous les utilisateurs");
define("_PROFILE_AM_FIELDNOTVISIBLE","n'est pas accessible");

define("_PROFILE_AM_CHECKBOX","Case(s) à cocher");
define("_PROFILE_AM_GROUP","Groupes de l'utilisateur");
define("_PROFILE_AM_GROUPMULTI","Sélection multi-groupes");
define("_PROFILE_AM_LANGUAGE","Sélection du langage");
define("_PROFILE_AM_RADIO","Bouton radio");
define("_PROFILE_AM_SELECT","Sélection multiple");
define("_PROFILE_AM_SELECTMULTI","Sélection");
define("_PROFILE_AM_TEXTAREA","Zone de texte");
define("_PROFILE_AM_DHTMLTEXTAREA","Zone de texte DHTML");
define("_PROFILE_AM_TEXTBOX","Champ texte");
define("_PROFILE_AM_TIMEZONE","Fuseau horaire");
define("_PROFILE_AM_YESNO","Bouton radio Oui/Non");
define("_PROFILE_AM_DATE","Date");
define("_PROFILE_AM_AUTOTEXT","Texte automatique");
define("_PROFILE_AM_DATETIME","Date et heure");
define("_PROFILE_AM_LONGDATE","Date (format long)");

define("_PROFILE_AM_ADDOPTION","Ajouter une option");
define("_PROFILE_AM_REMOVEOPTIONS","Supprimer les options");
define("_PROFILE_AM_KEY","Valeur à stocker");
define("_PROFILE_AM_VALUE","Texte à afficher");

// User management
define("_PROFILE_AM_EDITUSER","Editer l'utilisateur");
define("_PROFILE_AM_SELECTUSER","Sélectionner l'utilisateur");
define("_PROFILE_AM_ADDUSER","Ajouter un utilisateur");
define("_PROFILE_AM_THEME","Thème");
define("_PROFILE_AM_RANK","Classement");
define("_PROFILE_AM_USERDONEXIT","L'utilisateur n'existe pas !");
define("_PROFILE_MA_USERLEVEL","Statut de l'utilisateur");

define("_PROFILE_MA_ACTIVE","Actif");
define("_PROFILE_MA_INACTIVE","Inactif");
define("_PROFILE_AM_USERCREATED","Utilisateur créé");

define("_PROFILE_AM_CANNOTDELETESELF","La suppression de votre propre compte n'est pas autorisée - utilisez la page de votre profil pour effectuer cette suppression");
define("_PROFILE_AM_CANNOTDELETEADMIN","La suppression d'un compte administrateur est interdite");

define("_PROFILE_AM_NOSELECTION","Aucun utilisateur n'est sélectionné");
define("_PROFILE_AM_USER_ACTIVATED","Utilisateur activé");
define("_PROFILE_AM_USER_DEACTIVATED","Utilisateur désactivé");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Erreur ! L'utilisateur n'est pas activé");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Erreur ! L'utilisateur n'est pas désactivé");

define("_PROFILE_AM_STEPNAME","Etape Nom");
define("_PROFILE_AM_STEPORDER","Etape Ordre");
define("_PROFILE_AM_STEPSAVE","Sauvegarder après l'étape");
define("_PROFILE_AM_STEPINTRO","Description de l'étape");
//1.62
define("_PROFILE_AM_ACTION","Action");
//1.63
define('_PROFILE_AM_REQUIRED_TOGGLE','Sélectionnez vers le champ requis');
define('_PROFILE_AM_REQUIRED_TOGGLE_SUCCESS','Champ requis modifié avec succès ');
define('_PROFILE_AM_REQUIRED_TOGGLE_FAILED','La modification du champ requis a échoué');

define('_PROFILE_AM_SAVESTEP_TOGGLE','Choisir la sauvegarde');
define('_PROFILE_AM_SAVESTEP_TOGGLE_SUCCESS','Sauvegarde modifiée avec succès');
define('_PROFILE_AM_SAVESTEP_TOGGLE_FAILED',"L'enregistrement a échoué");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 *
 * @version         $Id $
 Modification et mise à jour par Cesag le 14 Mai 2012.
**/

?>