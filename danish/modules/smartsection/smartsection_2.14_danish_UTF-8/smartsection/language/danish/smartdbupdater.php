<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/12 19:00:43 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

define('_SDU_IMPORT','Import');
define('_SDU_CURRENTVER','Aktuel version: <span class=\'currentVer\'>%s</span>');
define('_SDU_DBVER','Database version %s');
define('_SDU_MSG_ADD_DATA','Data tilføjet i tabel %s');
define('_SDU_MSG_ADD_DATA_ERR','Fejl ved tilføjelse af data i tabellen %s');
define('_SDU_MSG_CHGFIELD','Ændre feltet %s i tabellen %s');
define('_SDU_MSG_CHGFIELD_ERR','Fejl ved ændring af feltet %s i tabellen %s');
define('_SDU_MSG_CREATE_TABLE','Tabellen %s oprettet');
define('_SDU_MSG_CREATE_TABLE_ERR','Fejl ved oprettelse af tabellen %s');
define('_SDU_MSG_NEWFIELD','Tilføjet feltet %s');
define('_SDU_MSG_NEWFIELD_ERR','Fejl ved tilføøjelse af feltet %s');
define('_SDU_NEEDUPDATE','Din database er forældet. Venligst opgradér din database!<br><b>Bemærk : The SmartFactory anbefaler at lave backup af alle dine SmartSection tabeller før du benytter dette opgraderingsscript.</b><br>');
define('_SDU_NOUPDATE','Din database er OK. Ingen opdateringer nødvendige.');
define('_SDU_UPDATE_DB','Opdaterer databasen');
define('_SDU_UPDATE_ERR','Fejl ved opdatering til version %s');
define('_SDU_UPDATE_NOW','Opdatér NU!');
define('_SDU_UPDATE_OK','Er nu opdateret til version %s');
define('_SDU_UPDATE_TO','Opdaterer til version %s');
define('_SDU_UPDATE_UPDATING_DATABASE','Opdaterer databasen ....');


?>