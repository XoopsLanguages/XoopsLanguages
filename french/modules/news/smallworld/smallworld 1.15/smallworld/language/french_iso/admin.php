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

 
// Traduit par Cesag (frxoops.org) le 5 Mai 2012 pour le module smallworld, fichier admin.php

// Titre des onglets
	define('_AM_SMALLWORLD_ADMINMESSAGESEND','Message � tous'); 
	define('_AM_SMALLWORLD_LOGSMAINTNANCE','Maintenance de la base de donn�es'); 

// Premier onglet dans la section administration
define('_AM_SMALLWORLD_MODULEINSTALL','Version du module install�');
define('_AM_SMALLWORLD_INSTALLDATE','Module install� le');
define('_AM_SMALLWORLD_DATEOFFIRSTMESSAGE','Date du plus ancien message');
define('_AM_SMALLWORLD_TOTALUSERS','Nombre total d\'utilisateurs');
define('_AM_SMALLWORLD_AVERAGEMSGPERDAY','Moyenne des messages par jour');
define('_AM_SMALLWORLD_TOPCHATTERS','Utilisateurs les plus actifs');
define('_AM_SMALLWORLD_TOPCHATTERS_TODAY','Utilisateurs les plus actifs depuis 24 heures');
define('_AM_SMALLWORLD_TOPRATEDUSERS','Utilisateurs les mieux not�s');
define('_AM_SMALLWORLD_BOTTOMRATEDUSERS','Utilisateurs qui ont le moins de cote');
define('_AM_SMALLWORLD_STATISTICS_TITLE','Statistiques du module'); 
define('_AM_SMALLWORLD_MODULEINFO','Informations du module'); 
define('_AM_SMALLWORLD_USERSTATS','Statistiques des utilisateurs');
define('_AM_SMALLWORLD_NONEYET','Pas de messages dans la base de donn�es');
define('_AM_SMALLWORLD_NO','rien');
define('_AM_SMALLWORLD_THEREARE','Il y a ou il n\'y a');
define('_AM_SMALLWORLD_UPDATE_STATUS','Statut de votre version de module :');

// Deuxi�me onglet dans la section administration

// Troisi�me onglet dans la section administration
define('_AM_SMALLWORLD_USERADMIN_TITLE','Administration des utilisateurs');
define('_AM_SMALLWORLD_USERADMININSPECT_TITLE','Utilisateurs sous contr�le d\'administration');
define('_AM_SMALLWORLD_USERADMINNOINSPECT_TITLE','Utilisateurs normaux');
define("_AM_SMALLWORLD_TITLE_IMAGE","Photo de l'utilisateur");
define("_AM_SMALLWORLD_TITLE_USERNAME","Nom d'utilisateur");
define("_AM_SMALLWORLD_TITLE_REALNAME","Nom de famille");
define("_AM_SMALLWORLD_TITLE_IP","Ip");
define("_AM_SMALLWORLD_TITLE_COMPLAINTS","Plaintes re�ues");
define("_AM_SMALLWORLD_TITLE_INSPECTTIME","Temps de contr�le");
define("_AM_SMALLWORLD_TITLE_INSPECTADD","Ajouter un temps de contr�le");
define("_AM_SMALLWORLD_TITLE_DELETEUSER","Supprimer le compte de l\'utilisateur");
define('_AM_SMALLWORLD_TITLE_INSPECTDELETE','Annuler le temps de contr�le');
define('_AM_SMALLWORLD_ADDTIMEDROPDOWN_MINUTES',' Minutes');
define('_AM_SMALLWORLD_ADDTIMEDROPDOWN_NOCHANGE','Pas de changement');

// Divers, autres
define('_AM_SMALLWORLD_UPDATE_CRITICAL_UPD',' Une mise � jour critique est disponible&thinsp;!');
define('_AM_SMALLWORLD_UPDATE_NORMAL_UPD',' Il y a une version plus r�cente, disponible en t�l�chargement');
define('_AM_SMALLWORLD_UPDATE_SERVER_ERROR','Le serveur est en panne ou en cours de mise � jour, <br/> veuillez retenter plus tard.');
define('_AM_SMALLWORLD_UPDATE_FILE_DESC','Description de la nouvelle version');
define('_AM_SMALLWORLD_UPDATE_SERVER_FILE','Vous pouvez t�l�charger la nouvelle version d\'ici');
define('_AM_SMALLWORLD_UPDATE_YOUHAVENEWESTVERSION',' Vous avez d�j� la version la plus r�cente');
define('_AM_SMALLWORLD_HELP','Aide');
define('_AM_SMALLWORLD_ADMIN_USERDELETEDALERT','les dossiers associ�s, les fichiers et les lignes de tables ont �t� supprim�s');
define('_AM_SMALLWORLD_STATS_POS','#');
define('_AM_SMALLWORLD_STATS_NAME','Nom');
define('_AM_SMALLWORLD_STATS_AMOUNT','Nombre');
define('_AM_SMALLWORLD_STATS_IMG','Ic�ne');

define('_AM_SMALLWORLD_SP','<img style="margin: 0pt 5px 0pt 0pt; vertical-align: middle;" src="../images/sp.png" height="30px" width="30px"> <a style="position: relative; margin: 0px;vertical-align: middle;" href="javascript:void(0);" id="smallworldDonate">Si vous aimez ce module et le travail effectu�, vous pouvez me garder �veill� en m\'offrant un caf�</a>');
define('_AM_SMALLWORLD_FOOTER', "<div class='center smallsmall italic pad5'>Le module SmallWorld est suivi par <a class='tooltip' rel='external' href='http://culex.dk/' title='Visitez mon site internet'>Culex</a></div>");