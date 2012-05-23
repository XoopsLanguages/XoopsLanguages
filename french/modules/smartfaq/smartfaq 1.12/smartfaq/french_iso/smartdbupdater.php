<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/03 12:27:15 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

define("_SDU_IMPORT", "Importation");
define("_SDU_CURRENTVER", "Version actuelle : <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Version de la base de donn�es %s");
define("_SDU_MSG_ADD_DATA", "Donn�es ajout�es � la table %s");
define("_SDU_MSG_ADD_DATA_ERR", "Erreur dans l'ajout de donn�es dans le tableau %s");
define("_SDU_MSG_CHGFIELD", "Modifier le champ %s dans la table %s");
define("_SDU_MSG_CHGFIELD_ERR", "Erreur en modifiant le champ %s dans la table %s");
define("_SDU_MSG_CREATE_TABLE", "Table %s cr��e");
define("_SDU_MSG_CREATE_TABLE_ERR", "Erreur pendant la cr�ation de la table %s");
define("_SDU_MSG_NEWFIELD", "Champ ajout� avec succ�s : %s");
define("_SDU_MSG_NEWFIELD_ERR", "Erreur en ajoutant le champ %s");
define("_SDU_NEEDUPDATE", "Votre base de donn�es est p�rim�e. Veuillez mettre � jour les tables de votre base de donn�es !<br><b>Note : SmartFactory recommande fortement que vous sauvegardiez toutes les tables de SmartSection avant d'ex�cuter ce script de mise � niveau.</b><br>");
define("_SDU_NOUPDATE", "Votre base de donn�es est � jour. Aucune mise � jour n'est n�cessaire.");
define("_SDU_UPDATE_DB", "Mise � jour de la base de donn�es");
define("_SDU_UPDATE_ERR", "Erreur de mise � jour vers la version %s");
define("_SDU_UPDATE_NOW", "Mettre � jour !");
define("_SDU_UPDATE_OK", "Mise � jour avec succ�s, � la version %s");
define("_SDU_UPDATE_TO", "Mise � jour vers la version %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Mise � jour de la base de donn�es...");

// Traduction par Cesag le 22 Mai 2012.
?>