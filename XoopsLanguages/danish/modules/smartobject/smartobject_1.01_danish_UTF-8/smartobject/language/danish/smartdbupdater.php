<?php

/**
* $Id: smartdbupdater.php 159 2007-12-17 16:44:05Z malanciault $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

define("_SDU_IMPORT","Import");
define("_SDU_CURRENTVER","Aktuel version: <span class='currentVer'>%s</span>");
define("_SDU_DBVER","Database version %s");
define("_SDU_MSG_ADD_DATA","Data indsættes i tabellen %s");
define("_SDU_MSG_ADD_DATA_ERR","Fejl ved tilføjelse af data i tabellen %s");
define("_SDU_MSG_CHGFIELD","Ændre feltet %s i tabellen %s");
define("_SDU_MSG_CHGFIELD_ERR","Fejl ved ændring af feltet %s i tabellen %s");
define("_SDU_MSG_CREATE_TABLE","Tabel %s oprettet");
define("_SDU_MSG_CREATE_TABLE_ERR","Fejl ved oprettelse af tabellen %s");
define("_SDU_MSG_NEWFIELD","Tilføjet feltet %s");
define("_SDU_MSG_NEWFIELD_ERR","Fejl ved tilføjelse af feltet %s");
define("_SDU_NEEDUPDATE","Din database er forældet. Venligst opgrader din database tabeller!<br><b>Bemærk : SmartFactory anbefaler dig stærkt at sikkerhedskopiere alle SmartSection tabeller, før du kører dette opgraderings script.</b><br>");
define("_SDU_NOUPDATE","Din database er up-to-date. Ingen opdateringer er nødvendige.");
define("_SDU_UPDATE_DB","Opdaterer Database");
define("_SDU_UPDATE_ERR","Fejl ved opdatering til version %s");
define("_SDU_UPDATE_NOW","Opdatér nu!");
define("_SDU_UPDATE_OK","Opdatering til version %s gik godt");
define("_SDU_UPDATE_TO","Opdaterer til version %s");
define("_SDU_UPDATE_UPDATING_DATABASE","Opdaterer databasen...");
define("_SDU_MSG_DROPFIELD","Slettede feltet %s");

?>