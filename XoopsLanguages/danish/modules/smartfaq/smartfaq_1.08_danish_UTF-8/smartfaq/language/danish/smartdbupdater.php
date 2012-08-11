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

define('_SDU_IMPORT','Import');
define('_SDU_CURRENTVER','Nuværende version: <span class=\'currentVer\'>%s</span>');
define('_SDU_DBVER','Database Version %s');
define('_SDU_MSG_ADD_DATA','Data indsat i tabel %s');
define('_SDU_MSG_ADD_DATA_ERR','Fejl ved tilføjelse af data i tabel %s');
define('_SDU_MSG_CHGFIELD','Ændre felt %s i tabel %s');
define('_SDU_MSG_CHGFIELD_ERR','Fejl ved Ændring af felt %s i tabel %s');
define('_SDU_MSG_CREATE_TABLE','Tabel %s oprettet');
define('_SDU_MSG_CREATE_TABLE_ERR','Fejl ved oprettelse af tabel %s');
define('_SDU_MSG_NEWFIELD','Tilføjet felt %s');
define('_SDU_MSG_NEWFIELD_ERR','Fejl ved tilføjelse af feltet %s');
define('_SDU_NEEDUPDATE','Din database er forældet. Venligst opgrader din databases tabeller! <br><b>Bemærk: SmartFactory anbefaler dig at sikkerhedskopiere alle SmartSection tabeller, før du anvender dete opgraderings script.</b><br>');
define('_SDU_NOUPDATE','Din database er up-to-date. Ingen opdateringer er nøndige.');
define('_SDU_UPDATE_DB','Opdaterer Database');
define('_SDU_UPDATE_ERR','Fejl ved opdatering til version %s');
define('_SDU_UPDATE_NOW','Opdater nu!');
define('_SDU_UPDATE_OK','Opdateret til version %s');
define('_SDU_UPDATE_TO','Opdatering til version %s');
define('_SDU_UPDATE_UPDATING_DATABASE','Opdaterer database ...');


?>