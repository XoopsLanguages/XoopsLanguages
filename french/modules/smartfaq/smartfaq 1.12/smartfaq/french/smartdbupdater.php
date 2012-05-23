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
define("_SDU_DBVER", "Version de la base de données %s");
define("_SDU_MSG_ADD_DATA", "Données ajoutées à la table %s");
define("_SDU_MSG_ADD_DATA_ERR", "Erreur dans l'ajout de données dans le tableau %s");
define("_SDU_MSG_CHGFIELD", "Modifier le champ %s dans la table %s");
define("_SDU_MSG_CHGFIELD_ERR", "Erreur en modifiant le champ %s dans la table %s");
define("_SDU_MSG_CREATE_TABLE", "Table %s créée");
define("_SDU_MSG_CREATE_TABLE_ERR", "Erreur pendant la création de la table %s");
define("_SDU_MSG_NEWFIELD", "Champ ajouté avec succès : %s");
define("_SDU_MSG_NEWFIELD_ERR", "Erreur en ajoutant le champ %s");
define("_SDU_NEEDUPDATE", "Votre base de données est périmée. Veuillez mettre à jour les tables de votre base de données !<br><b>Note : SmartFactory recommande fortement que vous sauvegardiez toutes les tables de SmartSection avant d'exécuter ce script de mise à niveau.</b><br>");
define("_SDU_NOUPDATE", "Votre base de données est à jour. Aucune mise à jour n'est nécessaire.");
define("_SDU_UPDATE_DB", "Mise à jour de la base de données");
define("_SDU_UPDATE_ERR", "Erreur de mise à jour vers la version %s");
define("_SDU_UPDATE_NOW", "Mettre à jour !");
define("_SDU_UPDATE_OK", "Mise à jour avec succès, à la version %s");
define("_SDU_UPDATE_TO", "Mise à jour vers la version %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Mise à jour de la base de données...");

// Traduction par Cesag le 22 Mai 2012.
?>