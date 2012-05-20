<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting 
* source code which is considered copyrighted (c) material of the 
* original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:         The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:           http://www.fsf.org/copyleft/gpl.html GNU public license
* @packet:            Modules
* @sub-packet:        Smallworld
* @since:             Xoops 2.5.4
* @Author:            Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:         2011 Culex
* @Last committed:    $Revision$
* @Last changed by:   $Author$
* @Last changed date: $Date$
* @ID:                $Id$
**/

define("_MI_SMALLWORLD_MODULE_NAME","Smallworld");
define ("_MI_SMALLWORLD_MODULE_DESC","Module de r�seau social, avec mur et profil utilisateur");
define('_MI_SMALLWORLD_ADMENU','Administration');
define('_MI_SMALLWORLDMENU_INDEX','Accueil');
define('_MI_SMALLWORLDMENU_STATS','Statistiques');
define('_MI_SMALLWORLDMENU_USERADMIN','Administration utilisateurs');
define('_MI_SMALLWORLDMENU_HELP','Aide');
define('_MI_SMALLWORLDMENU_ABOUT','� propos');

/* -------- Configs ---------- */

// Map apis
define("_MI_SMALLWORLD_USEGOOGLE","Utiliser l'Api de g�olocalisation de Google Maps&thinsp;?");
define("_MI_SMALLWORLD_USEGOOGLE_DESC","Par d�faut, ce sera la base de donn�es toponymique. Choisissez Oui pour utiliser Google Maps.");

// Messages per page
define("_MI_SMALLWORLD_MSGTOSHOW","Messages � afficher&thinsp;?");
define("_MI_SMALLWORLD_MSGTOSHOW_DESC","Nombres de messages (mis � jour) � afficher au d�but du profil et de la page d'accueil.");

// Use validation
define("_MI_SMALLWORLD_VALIDATIONSTRENGHT","Validation par �tapes");
define("_MI_SMALLWORLD_VALIDATIONSTRENGHT_DESC","Demander la validation pour l'enregistrement et les modifications du profil.<br /><br />Les options sont&thinsp;:<br /><br />Non&thinsp;:&thinsp;Pas besoin de validation<br />Oui&thinsp;:&thinsp;Les champs les plus * importants * doivent �tre valid�s.");

// Smallworld take-over user name links ?
define ("_MI_SMALLWORLD_TAKEOVERLINKS","Convertir les liens des noms d'utilisateurs pour Smallworld");
define ("_MI_SMALLWORLD_TAKEOVERLINKS_DESC","Smallworld utilisera un petit javascript pour modifier les liens au chargement et les pointer vers le profil utilisateur, plut�t que vers userinfo.php<br /><br />La valeur par d�faut est 'non'.");

define ("_MI_SMALLWORLD_USERSOWNMSGCOUNTS","V�rifier le nombre de messages des utilisateurs&thinsp;? ");
define ("_MI_SMALLWORLD_USERSOWNMSGCOUNTS_DESC","Toutes les 10 secondes, les messages des utilisateurs qui vous suivent sont compt�s et un bouton d'actualisation s'affichera, si le r�sultat n'est pas 0.<br />Si vous choisissez Oui, ce bouton s'affichera aussi lorsque vous �crirez ou supprimerez des messages.");

define ("_MI_SMALLWORLD_BOOKMARSAVATARS","Utiliser le logo de Smallworld lors de la cr�ation de signets&thinsp;? ");
define ("_MI_SMALLWORLD_BOOKMARKSAVATARS_DESC","Quand les messages sont publics et que vous souhaitez partager sur les r�seaux sociaux, vous pouvez d�cider d'utiliser l'image du logo Smallworld ou<br />� non � = affichage de l'avatar des utilisateurs. <br > La valeur par d�faut est �oui� = logo Smallworld.");

define ("_MI_SMALLWORLD_USEMAILNOTIFICATION","Notifications par courrier �lectronique&thinsp;? ");
define ("_MI_SMALLWORLD_USEMAILNOTIFICATION_DESC","Quand un nouvel utilisateur s'inscrit, un message est envoy� � l'Administrateur par courrier �l�ctronique.<br />Quand un commentaire a �t� ajout� � un message dont un utilisateur a particip�, un courrier �lectronique lui est envoy�.<br /><br />La valeur par d�faut est 'Oui'.");

// Select fields & Mandetory fields
define ('_MI_SMALLWORLD_VIEWFIELDS','Champs pour l\'enregistrement et le profil');
define ('_MI_SMALLWORLD_VIEWFIELDS_DESC','S�lectionnez les champs � utiliser dans le formulaire d\'inscription, qui seront ensuite affich�s dans le profil.<br /> Utilisez la touche CTRL du clavier et cliquez avec la souris pour en s�lectionner plusieurs.');
define ('_MI_SMALLWORLD_VERIFYFIELDS','V�rifier les champs lors de l\'enregistrement.');
define ('_MI_SMALLWORLD_VERIFYFIELDS_DESC','S�lectionnez les champs qui seront obligatoires (*) dans le formulaire d\'inscription.<br /> Utilisez la touche CTRL du clavier et cliquez avec la souris pour en s�lectionner plusieurs.');

define ('_MI_SMALLWORLD_REALNAME','Nom de famille');
define ('_MI_SMALLWORLD_GENDER','Sexe');
define ('_MI_SMALLWORLD_INTERESTEDIN','Int�ress� �');
define ('_MI_SMALLWORLD_RELATIONSHIPSTATUS','Statut de la relation');
define ('_MI_SMALLWORLD_PARTNER','Partenaire');
define ('_MI_SMALLWORLD_LOOKINGFOR','Vous cherchez');
define ('_MI_SMALLWORLD_BIRTHDAY','Anniversaire');
define ('_MI_SMALLWORLD_BIRTHPLACE','Lieu de naissance');
define ('_MI_SMALLWORLD_POLITICALVIEWS','Opinions politiques');
define ('_MI_SMALLWORLD_RELIGIOUSVIEWS','Point de vue religieux');
define ('_MI_SMALLWORLD_EMAILS','Adresse �lectronique');
define ('_MI_SMALLWORLD_SCREENNAMES','Pseudonyme');
define ('_MI_SMALLWORLD_MOBILE','T�l�phone portable');
define ('_MI_SMALLWORLD_LANDPHONE','T�l�phone fixe');
define ('_MI_SMALLWORLD_STREETADRESS','Adresse');
define ('_MI_SMALLWORLD_PRESENTCITY','Ville actuelle');
define ('_MI_SMALLWORLD_COUNTRY','Pays');
define ('_MI_SMALLWORLD_WEBSITE','Site internet');
define ('_MI_SMALLWORLD_INTERESTS','Int�r�ts');
define ('_MI_SMALLWORLD_FAVOURITEMUSIC','Musiques pr�f�r�es');
define ('_MI_SMALLWORLD_FAVOURITETVSHOWS','S�ries t�l�vis�es pr�f�r�es');
define ('_MI_SMALLWORLD_FAVOURITEMOVIES','Films pr�f�r�s');
define ('_MI_SMALLWORLD_FAVOURITEBOOKS','Livres pr�f�r�s');
define ('_MI_SMALLWORLD_ABOUTME','� propos de moi');
define ('_MI_SMALLWORLD_EDUCATION','Education');
define ('_MI_SMALLWORLD_EMPLOYMENT','Emploi');

/**
 * @translation     Communaut� Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: ISO-8859-1
 *
 * @Translator      Cesag
 *
 * @version         $Id $
**/
?>