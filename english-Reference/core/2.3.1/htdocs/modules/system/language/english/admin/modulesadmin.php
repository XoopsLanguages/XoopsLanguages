<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Modules Administration");
define("_MD_AM_MODULE","Module");
define("_MD_AM_VERSION","Version");
define("_MD_AM_LASTUP","Last Update");
define("_MD_AM_DEACTIVATED","Deactivated");
define("_MD_AM_ACTION","Action");
define("_MD_AM_DEACTIVATE","Deactivate");
define("_MD_AM_ACTIVATE","Activate");
define("_MD_AM_UPDATE","Update");
define("_MD_AM_DUPEN","Duplicate entry in modules table!");
define("_MD_AM_DEACTED","The selected module has been deactivated. You can now safely uninstall the module.");
define("_MD_AM_ACTED","The selected module has been activated!");
define("_MD_AM_UPDTED","The selected module has been updated!");
define("_MD_AM_SYSNO","System module cannot be deactivated.");
define("_MD_AM_STRTNO","This module is set as your default start page. Please change the start module to whatever suits your preferences.");

// added in RC2
define("_MD_AM_PCMFM","Please confirm:");

// added in RC3
define("_MD_AM_ORDER","Order");
define("_MD_AM_ORDER0","(0 = hide)");
define("_MD_AM_ACTIVE","Active");
define("_MD_AM_INACTIVE","Inactive");
define("_MD_AM_NOTINSTALLED","Not Installed");
define("_MD_AM_NOCHANGE","No Change");
define("_MD_AM_INSTALL","Install");
define("_MD_AM_UNINSTALL","Uninstall");
define("_MD_AM_SUBMIT","Submit");
define("_MD_AM_CANCEL","Cancel");
define("_MD_AM_DBUPDATE","Database updated successfully!");
define("_MD_AM_BTOMADMIN","Back to Module Administration page");

// %s represents module name
define("_MD_AM_FAILINS","Unable to install %s.");
define("_MD_AM_FAILACT","Unable to activate %s.");
define("_MD_AM_FAILDEACT","Unable to deactivate %s.");
define("_MD_AM_FAILUPD","Unable to update %s.");
define("_MD_AM_FAILUNINS","Unable to uninstall %s.");
define("_MD_AM_FAILORDER","Unable to reorder %s.");
define("_MD_AM_FAILWRITE","Unable to write to main menu.");
define("_MD_AM_ALEXISTS","Module %s already exists.");
define("_MD_AM_ERRORSC","Error(s):");
define("_MD_AM_OKINS","Module %s installed successfully.");
define("_MD_AM_OKACT","Module %s activated successfully.");
define("_MD_AM_OKDEACT","Module %s deactivated successfully.");
define("_MD_AM_OKUPD","Module %s updated successfully.");
define("_MD_AM_OKUNINS","Module %s uninstalled successfully.");
define("_MD_AM_OKORDER","Module %s changed successfully.");

define('_MD_AM_RUSUREINS','Press the button below to install this module');
define('_MD_AM_RUSUREUPD','Press the button below to update this module');
define('_MD_AM_RUSUREUNINS','Are you sure you would like to uninstall this module?');
define('_MD_AM_LISTUPBLKS','The following blocks will be updated.<br />Select the blocks of which contents (template and options) may be overwritten.<br />');
define('_MD_AM_NEWBLKS','New Blocks');
define('_MD_AM_DEPREBLKS','Deprecated Blocks');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installing ');
define('_MD_AM_TABLE_RESERVED','%s is a reserved table!');
define('_MD_AM_CREATE_TABLES','Creating tables...');
define('_MD_AM_TABLE_CREATED','Table %s created');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data inserted to table %s');
define('_MD_AM_INSERT_DATA_FAILD','Could not insert %s to database.');
define('_MD_AM_INSERT_DATA_DONE','Module data inserted successfully.');
define('_MD_AM_MODULEID',' Module ID: %s');
define('_MD_AM_SQL_FOUND','SQL file found at %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL file not found at %s');
define('_MD_AM_SQL_NOT_CREATE','ERROR: Could not create %s ');
define('_MD_AM_SQL_NOT_VALID','%s is not a valid SQL!');

define('_MD_AM_GROUP_ID',' Group ID: %s ');
define('_MD_AM_NAME',' Name: ');
define('_MD_AM_VALUE',' Value: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Adding templates...');
define('_MD_AM_TEMPLATES_DELETE','Deleting templates...');
define('_MD_AM_TEMPLATES_UPDATE','Updating templates...');

define('_MD_AM_TEMPLATE_ID','Template ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Template %s added to the database');
define('_MD_AM_TEMPLATE_ADD_ERROR','ERROR: Could not insert template %s to the database.');
define('_MD_AM_TEMPLATE_COMPILED','Template %s compiled ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','ERROR: Failed compiling template %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Template %s deleted from the database. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','ERROR: Could not delete template %s from the database. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Template %s inserted to the database. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Template %s recompiled');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','ERROR: Template %s recompile failed');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','ERROR: Could not recompile template %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','ERROR: Could not delete old template %s. Aborting update of this file. ');
define('_MD_AM_TEMPLATE_UPDATE','Template %s updated. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','ERROR: Could not update %s template. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Adding blocks...');
define('_MD_AM_BLOCKS_DELETE','Deleting block...');
define('_MD_AM_BLOCKS_REBUILD','Rebuilding blocks...');

define('_MD_AM_BLOCK_ID',' Block ID: %s ');

define('_MD_AM_BLOCK_ACCESS','Added block access right');
define('_MD_AM_BLOCK_ACCESS_ERROR','ERROR: Could not add block access right');
define('_MD_AM_BLOCK_ADD','Block %s added ');
define('_MD_AM_BLOCK_ADD_ERROR','ERROR: Could not add block %s to the database! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Database error: %s ');
define('_MD_AM_BLOCK_CREATED','Block %s created ');
define('_MD_AM_BLOCK_DELETE','Block %s deleted. ');
define('_MD_AM_BLOCK_DELETE_DATA','Block template %s deleted from the database. ');
define('_MD_AM_BLOCK_DELETE_ERROR','ERROR: Could not delete block %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','ERROR: Could not delete block template %s from the database');
define('_MD_AM_BLOCK_DEPRECATED','Block template %s deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','ERROR: Could not remove deprecated block template.  ');
define('_MD_AM_BLOCK_UPDATE','Block %s updated. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Config ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Adding module config data...');
define('_MD_AM_MODULE_DATA_DELETE','Deleting module config options...');
define('_MD_AM_MODULE_DATA_UPDATE','Module data updated.');

define('_MD_AM_CONFIG_ADD',' Config option added');
define('_MD_AM_CONFIG_DATA_ADD',' Config %s added to the database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ERROR: Could not insert config %s to the database. ');
define('_MD_AM_GONFIG_DATA_DELETE','Config data deleted from the database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ERROR: Could not delete config data from the database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Setting group rights...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ERROR: Could not delete group permissions ');
define('_MD_AM_GROUP_PERMS_DELETED','Group permissions deleted ');

define('_MD_AM_ACCESS_ADMIN_ADD','Added admin access right for Group ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ERROR: Could not add admin access right for Group ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Added user access right for Group ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ERROR: Could not add user access right for Group ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Failed to execute %s');
define('_MD_AM_FAILED_SUCESS','%s executed successfully.');

define('_MD_AM_DELETE_ERROR','ERROR: Could not delete %s');
define('_MD_AM_UPDATE_ERROR','ERROR: Could not update %s');
define('_MD_AM_DELETE_MOD_TABLES','Deleting module tables...');

define('_MD_AM_COMMENTS_DELETE','Deleting comments...');
define('_MD_AM_COMMENTS_DELETE_ERROR','ERROR: Could not delete comments');
define('_MD_AM_COMMENTS_DELETED','Comments deleted');

define('_MD_AM_NOTIFICATIONS_DELETE','Deleting notifications...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ERROR: Could not delete notifications');
define('_MD_AM_NOTIFICATIONS_DELETED','Notifications deleted');

define('_MD_AM_TABLE_DROPPED','Table %s dropped!');
define('_MD_AM_TABLE_DROPPED_ERROR','ERROR: Could not drop table %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ERROR: Not allowed to drop table %s !');
?>