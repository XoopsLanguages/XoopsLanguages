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

define("_SDU_IMPORT", "Import");
define("_SDU_CURRENTVER", "Current version: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Database Version %s");
define("_SDU_MSG_ADD_DATA", "Data added in table %s");
define("_SDU_MSG_ADD_DATA_ERR", "Error adding data in table %s");
define("_SDU_MSG_CHGFIELD", "Changing field %s in table %s");
define("_SDU_MSG_CHGFIELD_ERR", "Error changing field %s in table %s");
define("_SDU_MSG_CREATE_TABLE", "Table %s created");
define("_SDU_MSG_CREATE_TABLE_ERR", "Error creating table %s");
define("_SDU_MSG_NEWFIELD", "Successfully added field %s");
define("_SDU_MSG_NEWFIELD_ERR", "Error adding field %s");
define("_SDU_NEEDUPDATE", "Your database is out-of-date. Please upgrade your database tables!<br><b>Note : The SmartFactory strongly recommends you to backup all SmartSection tables before running this upgrade script.</b><br>");
define("_SDU_NOUPDATE", "Your database is up-to-date. No updates are necessary.");
define("_SDU_UPDATE_DB", "Updating Database");
define("_SDU_UPDATE_ERR", "Errors updating to version %s");
define("_SDU_UPDATE_NOW", "Update Now!");
define("_SDU_UPDATE_OK", "Successfully updated to version %s");
define("_SDU_UPDATE_TO", "Updating to version %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Updating database...");


?>