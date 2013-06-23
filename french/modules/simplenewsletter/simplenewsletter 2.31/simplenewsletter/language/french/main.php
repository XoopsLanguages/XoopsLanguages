<?php
/**
 * ****************************************************************************
 * simplenewsletter - MODULE FOR XOOPS
 * Copyright (c) Herv� Thouzard of http://www.herve-thouzard.com
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Herv� Thouzard of http://www.herve-thouzard.com
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         simplenewsletter
 * @author 			Herv� Thouzard of http://www.herve-thouzard.com
 *
 * Version : $Id:
 * ****************************************************************************
 */

define("_SIMPLENEWSLETTER_EDIT", "Editer");
define("_SIMPLENEWSLETTER_DELETE", "Supprimer");
define("_SIMPLENEWSLETTER_VALIDATE", "Valid�");
define("_SIMPLENEWSLETTER_ID","ID");
define("_SIMPLENEWSLETTER_DATE","Date");
define("_SIMPLENEWSLETTER_NEWS_TITLE","Titre de la newsletter");
define("_SIMPLENEWSLETTER_UID", "Id utilisateur");
define("_SIMPLENEWSLETTER_EMAIL", "Email");
define("_SIMPLENEWSLETTER_ACTION", "Action");
define("_SIMPLENEWSLETTER_UNAME", "Utilisateur");
define("_SIMPLENEWSLETTER_SUBSCRIBE_MEMBER", "Inscrire un membre");
define("_SIMPLENEWSLETTER_LAST_NEWSLETTERS", "Derni�res newsletters");
define("_SIMPLENEWSLETTER_READ_MORE", "Lire la suite");
define("_SIMPLENEWSLETTER_NO_NEWSLETTER", "D�sol� il n'y a actuellement pas de newsletter");
define("_SIMPLENEWSLETTER_ERROR1", "Argument manquant");
define("_SIMPLENEWSLETTER_ERROR2", "Newsletter inconnue");
define("_SIMPLENEWSLETTER_ERROR3", "Seuls les utilisateurs enregistr�s peuvent s'inscrire ou se d�sinscrire");
define("_SIMPLENEWSLETTER_ERROR4", "Erreur, vous devez remplir tous les champs obligatoires");
define("_SIMPLENEWSLETTER_ERROR5", "Erreur interne, vous �tes suppos� �tre inscrit � notre newsletter mais nous ne pouvons pas trouver vos informations ! Veuillez nous contacter");
define("_SIMPLENEWSLETTER_ERROR6", "Erreur, cette adresse email est d�j� inscrite pour recevoir la newsletter");
define("_SIMPLENEWSLETTER_ERROR7", "Erreur, les mots de passe ne correspondent pas");
define("_SIMPLENEWSLETTER_ERROR8", "Erreur, le r�sultat de l'op�ration ne correspond pas avec ce qui est attendu");
define("_SIMPLENEWSLETTER_ERROR9", "Il y a eu une erreur durant la tentative de d�sinscription");
define("_SIMPLENEWSLETTER_ERROR10", "Erreur, le code de confirmation est manquant ou vous l'avez d�j� v�rifi�");
define("_SIMPLENEWSLETTER_ERROR11", "Erreur, soit cette adresse email a d�j� �t� v�rifi�e soit ce code n'existe pas");
define("_SIMPLENEWSLETTER_ERROR12", "Il y a eu une erreur durant la tentative d'inscription");
define("_SIMPLENEWSLETTER_ERROR13", "Il y a eu une erreur durant la sauvegarde de vos informations");
define("_SIMPLENEWSLETTER_ERROR14", "Erreur, adresse email inconnue ou mauvais mot de passe");
define("_SIMPLENEWSLETTER_ERROR15", "Veuillez donner votre adresse email pour recevoir votre mot de passe");
define("_SIMPLENEWSLETTER_ERROR16", "Erreur, adresse email inconnue");
define("_SIMPLENEWSLETTER_NEWS_LIST", "Retourner � la liste des newsletters");

define("_SIMPLENEWSLETTER_STATE", "Etat d'inscription");
define("_SIMPLENEWSLETTER_STATE_1_DESC", "Vous �tes inscrit � notre newsletter");
define("_SIMPLENEWSLETTER_STATE_1_UNSUB", "Pour vous d�sinscrire, cliquez sur ce lien");
define("_SIMPLENEWSLETTER_STATE_2_DESC", "Vous n'�tes pas inscrit � notre newsletter");
define("_SIMPLENEWSLETTER_STATE_2_UNSUB", "Pour vous inscrire, cliquer sur ce lien");
define("_SIMPLENEWSLETTER_STATE_3_DESC", "Pour vous inscrire � notre newsletter, vous devez vous cr�er un compte");

define("_SIMPLENEWSLETTER_WELCOME_TITLE", "Bienvenue � notre newsletter");
define("_SIMPLENEWSLETTER_BYEBYE_TITLE", "Au revoir");

define("_SIMPLENEWSLETTER_FIRST_NAME", "Pr�nom");
define("_SIMPLENEWSLETTER_LAST_NAME", "Nom");
define("_SIMPLENEWSLETTER_PASSWORD_SIMPLE", "Mot de passe");
define("_SIMPLENEWSLETTER_PASSWORD", "Mot de passe pour g�rer votre inscription");
define("_SIMPLENEWSLETTER_CONFIRM_PASSWORD", "Veuilez confirmer votre mot de passe");
define("_SIMPLENEWSLETTER_INFORMATION", "Informations");
define("_SIMPLENEWSLETTER_REQUIRED_FIELD", "Champ requis");
define("_SIMPLENEWSLETTER_REQUIRED_PLEASE1", "Veuillez entrer un pr�nom de plus de 2 caract�res");
define("_SIMPLENEWSLETTER_REQUIRED_PLEASE2", "Veuillez fournir un mot de passe");
define("_SIMPLENEWSLETTER_REQUIRED_PLEASE3", "Votre mot de passe doit au moins faire %d caract�res");
define("_SIMPLENEWSLETTER_REQUIRED_PLEASE4", "Veuillez rentrer le m�me mot de passe que ci-dessus");
define("_SIMPLENEWSLETTER_REQUIRED_PLEASE5", "Veuillez saisir une adresse email valide");
define("_SIMPLENEWSLETTER_REQUIRED_PLEASE6", "Merci de r�soudre cette op�raiton");
define("_SIMPLENEWSLETTER_PLEASESOLVE", "Merci de r�soudre cette op�ration");
define("_SIMPLENEWSLETTER_MODIFY", "Modifier");
define("_SIMPLENEWSLETTER_YOU_ARE_SUBSCRIBED", "Vous �tes inscrit � notre newsletter, utilisez ce formulaire pour modifier vos informations");
define("_SIMPLENEWSLETTER_YOU_ARE_NOT_SUBSCRIBED", "Remplissez ce formulaire pour vous inscrire");
define("_SIMPLENEWSLETTER_PLEASE_LOGIN", "Si vous avez un compte, saisissez votre mot de passe et votre email pour le g�rer");
define("_SIMPLENEWSLETTER_REMOVE_SUBSCRIPTION", "Me d�sinscrire");
define("_SIMPLENEWSLETTER_SUBSCRIBE", "M'inscrire");
define("_SIMPLENEWSLETTER_CONNECTION", "Connexion");
define("_SIMPLENEWSLETTER_PLEASE_CONFIRM", "Confirmer la d�sinscription � la newsletter");
define("_SIMPLENEWSLETTER_SUBSCRIPTION_OK", "Bienvenue � notre newsletter, votre inscription s'est faite avec succ�s !");
define("_SIMPLENEWSLETTER_SUBSCRIPTION_MODIFY_OK", "Vos informations ont �t� modifi�es avec succ�s");
define("_SIMPLENEWSLETTER_SUBSCRIPTION_MUST_VALIDATE", "Votre inscription a �t� enregistr�e, vous allez recevoir un email pour v�rifier votre adresse mail");
define("_SIMPLENEWSLETTER_LOGOUT", "D�connexion");
define("_SIMPLENEWSLETTER_YOU_ARE_DECONNECTED", "Vous �tes maintenant d�connect�");
define("_SIMPLENEWSLETTER_YOU_ARE_UNSUBCRIBED", "Vous �tes maintenant d�sinscrit de notre lettre d'informations");
define("_SIMPLENEWSLETTER_PLEASE_CONFIRM_SUBSCRIPTION", "Veuillez confirmer votre inscription � notre lettre d'informations");
define("_SIMPLENEWSLETTER_SUCCESSFULLY_LOGGED", "Vous vous �tes connect� avec succ�s");
define("_SIMPLENEWSLETTER_SUCCESSFULLY_SUBSCIBED", "Vous �tes maintenant enregistr� � notre newsletter");
define("_SIMPLENEWSLETTER_LOSTPASSWORD",'Mot de passe perdu ?');
define("_SIMPLENEWSLETTER_ENTER_YOUR_EMAIL", "Entrez votre adresse email pour recevoir votre mot de passe");
define("_SIMPLENEWSLETTER_SEND", "Envoyer");
define("_SIMPLENEWSLETTER_PASSWORD_SENT", "Votre mot de passe vous a �t� envoy�");
define("_SIMPLENEWSLETTER_PASSWORD_LOST", "Mot de passe perdu");
define("_SIMPLENEWSLETTER_MANAGE_YOUR_ACCOUNT", "Utilisez cette page pour g�rer votre inscription");
define("_SIMPLENEWSLETTER_USE_THIS_PAGE", "Utilisez cette page pour vous inscrire");
define("_SIMPLENEWSLETTER_YOU_ARE_NOT", "Vous n'�tes pas inscrit");
define("_SIMPLENEWSLETTER_YOU_ARE", "Vous �tes inscrit � notre newsletter");
define("_SIMPLENEWSLETTER_ATTACHED_FILE", "Fichier attach�");
define("_SIMPLENEWSLETTER_FILE", "Fichier");
define("_SIMPLENEWSLETTER_RSS", "RSS");
define("_SIMPLENEWSLETTER_MEMBER_TITLE", "Titre");
define("_SIMPLENEWSLETTER_MEMBER_STREET", "Rue");
define("_SIMPLENEWSLETTER_MEMBER_CITY", "Ville");
define("_SIMPLENEWSLETTER_MEMBER_STATE", "R�gion");
define("_SIMPLENEWSLETTER_MEMBER_ZIP", "Code postal");
define("_SIMPLENEWSLETTER_MEMBER_TELEPHONE", "T�l�phone");
define("_SIMPLENEWSLETTER_MEMBER_FAX", "Fax");
define("_SIMPLENEWSLETTER_SUBSCRIPTION", "Inscription");
define("_SIMPLENEWSLETTER_USE_THIS_LINK", "Utilisez ce lien pour vous inscrire ou g�rer votre inscription");
?>