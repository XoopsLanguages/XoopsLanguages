<?php

/**
* $Id: admin.php,v 1.1 2007/02/10 18:55:57 dap997 Exp $
* Module: SmartClient
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Including common language file
Global $xoopsConfig;

$commonFile = "../include/common.php";
if (!file_exists($commonFile)) {
	$commonFile = "include/common.php";
}

include_once($commonFile);

$fileName = SMARTCLIENT_ROOT_PATH . 'language/' . $xoopsConfig['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once SMARTCLIENT_ROOT_PATH . 'language/english/common.php';
}

define("_AM_SCLIENT_ABOUT", "About");
define("_AM_SCLIENT_ACTION", "Action");
define("_AM_SCLIENT_ACTIVATE_CLIENT", "Activate client");
define("_AM_SCLIENT_ACTIVE", _CO_SCLIENT_ACTIVE);
define("_AM_SCLIENT_ACTIVE_EDIT_SUCCESS", "The client has been successfully edited.");
define("_AM_SCLIENT_ACTIVE_EDITING", "Editing an active client");
define("_AM_SCLIENT_ACTIVE_EDITING_INFO", "You can edit this active client. Modifications will immediatly take effect in the user side.");
define("_AM_SCLIENT_ACTIVE_EXP", "<b>Active clients</b> : Actual active clients of this site.");
define("_AM_SCLIENT_ACTIVE_CLIENTS", "Active clients");
define("_AM_SCLIENT_ACTIVE_CLIENTS_DSC", "Here is a list of active clients. These clients are displayed in the user side. You can edit or delete each clients by clicking on the related button in the <b>Action</b> column.");
define("_AM_SCLIENT_ALL", "All");
define("_AM_SCLIENT_ALL_EXP", "<b>All status</b> : All clients of the module, whatever their status.");
define("_AM_SCLIENT_ALLITEMS", "All clients of the module");
define("_AM_SCLIENT_ALLITEMSMSG", "Select a status to see all available clients in the selected status. You can also select the sort order of the clients that are displayed.");
define("_AM_SCLIENT_APPROVE", "Approve");
define("_AM_SCLIENT_APPROVING", "Approving");
define("_AM_SCLIENT_ASC", "Ascending");
define("_AM_SCLIENT_AVAILABLE", "<span style='font-weight: bold; color: green;'>Available</span>");
define("_AM_SCLIENT_BLOCKS", "Blocks and groups");
define("_AM_SCLIENT_BLOCKSANDGROUPS", "Blocks and groups");
define("_AM_SCLIENT_BLOCKSTXT", "This module has the following blocks, which you can configure here or in the system module.");
define("_AM_SCLIENT_BY", "By");
define("_AM_SCLIENT_CANCEL", _CO_SCLIENT_CANCEL);
define("_AM_SCLIENT_CLEAR", _CO_SCLIENT_CLEAR);
define("_AM_SCLIENT_CREATE", _CO_SCLIENT_CREATE);
define("_AM_SCLIENT_CREATETHEDIR", "Create the folder");
define("_AM_SCLIENT_DELETE", "Delete");
define("_AM_SCLIENT_DELETECLIENT", _CO_SCLIENT_DELETECLIENT);
define("_AM_SCLIENT_DELETETHISP", "Do you really want to delete this client ?");
define("_AM_SCLIENT_DESC", "Descending");
define("_AM_SCLIENT_DESCRIPTION", _CO_SCLIENT_DESCRIPTION);
define("_AM_SCLIENT_DESCRIPTION_DSC", _CO_SCLIENT_DESCRIPTION_DSC);
define("_AM_SCLIENT_DIRCREATED", "Folder successfully created ");
define("_AM_SCLIENT_DIRNOTCREATED", "The folder could not be created ");
define("_AM_SCLIENT_EDITING", "Editing");
define("_AM_SCLIENT_EDITCLIENT", _CO_SCLIENT_EDITCLIENT);
define("_AM_SCLIENT_GOMOD", "Go to module");
define("_AM_SCLIENT_GROUPS", "Groups");
define("_AM_SCLIENT_GROUPSINFO", "Configure module and blocks permissions for each group");
define("_AM_SCLIENT_HELP", "Help");
define("_AM_SCLIENT_HITS", _CO_SCLIENT_HITS);
define("_AM_SCLIENT_ID", "Client's id");
define("_AM_SCLIENT_IMPORT", "Import");
define("_AM_SCLIENT_IMPORT_ALL_CLIENTS", "All clients");
define("_AM_SCLIENT_IMPORT_AUTOAPPROVE", "Auto-approve");
define("_AM_SCLIENT_IMPORT_BACK", "Back to the import page");
define("_AM_SCLIENT_IMPORT_ERROR", "An error occured while importing the client.");
define("_AM_SCLIENT_IMPORT_FILE_NOT_FOUND", "Import file not found at <b>%s</b>");
define("_AM_SCLIENT_IMPORT_FROM", "Importing from %s");
define("_AM_SCLIENT_IMPORT_INFO", "You can import clients directly in SmartClient. Simply select from which module you would like to import the clients and click on the 'Import' button.");
define("_AM_SCLIENT_IMPORT_MODULE_FOUND", "%s module was found. There are %s clients that can be imported.");
define("_AM_SCLIENT_IMPORT_NO_MODULE", "As XoopsClients in not installed on this site, there is no client to import.");
define("_AM_SCLIENT_IMPORT_CLIENT_ERROR", "An error occured while importing '%s'.");
define("_AM_SCLIENT_IMPORT_RESULT", "Here is the result of the import.");
define("_AM_SCLIENT_IMPORT_SETTINGS", "Import Settings");
define("_AM_SCLIENT_IMPORT_SUCCESS", "The clients were successfully imported in the module.");
define("_AM_SCLIENT_IMPORT_TITLE", "Import Clients");
define("_AM_SCLIENT_IMPORT_XOOPSCLIENTS_110", "Clients from XoopsClients 1.1");
define("_AM_SCLIENT_IMPORTED_CLIENT", "Imported client : <em>%s</em>");
define("_AM_SCLIENT_IMPORTED_CLIENTS", "Clients imported : <em>%s</em>");
define("_AM_SCLIENT_IMPORT_SELECTION", "Import Selection");
define("_AM_SCLIENT_IMPORT_SELECT_FILE", "Clients");
define("_AM_SCLIENT_IMPORT_SELECT_FILE_DSC", "Choose the module from which to import the clients.");
define("_AM_SCLIENT_INACTIVATE_CLIENT", "Deactivate client");
define("_AM_SCLIENT_INACTIVE", _CO_SCLIENT_INACTIVE);
define("_AM_SCLIENT_INACTIVE_EDITING", "Editing an inactive client");
define("_AM_SCLIENT_INACTIVE_EDITING_INFO", "You can edit this inactive client. Modifications will be saved for this client. However, if you would like to display this client in the user side, you will need to set the <b>Status</b> field to 'Active'.");
define("_AM_SCLIENT_INACTIVE_EXP", "<b>Inactive clients</b> : Active clients that has become, for some reason, inactive. An inactive client is not displayed in the user side.");
define("_AM_SCLIENT_INACTIVE_FIELD", "Inactive");
define("_AM_SCLIENT_INACTIVE_CLIENTS", "Inactive clients");
define("_AM_SCLIENT_INDEX", "Index");
define("_AM_SCLIENT_INTRO", _CO_SCLIENT_INTRO);
define("_AM_SCLIENT_INVENTORY", _CO_SCLIENT_INVENTORY);
define("_AM_SCLIENT_LOGO", _CO_SCLIENT_LOGO);
define("_AM_SCLIENT_LOGO_DSC", _CO_SCLIENT_LOGO_DSC);
define("_AM_SCLIENT_LOGO_UPLOAD", _CO_SCLIENT_LOGO_UPLOAD);
define("_AM_SCLIENT_LOGO_UPLOAD_DSC", _CO_SCLIENT_LOGO_UPLOAD_DSC);
define("_AM_SCLIENT_MODADMIN", "Admin :");
define("_AM_SCLIENT_MODIFY", _CO_SCLIENT_MODIFY);
define("_AM_SCLIENT_NAME", _CO_SCLIENT_NAME);
define("_AM_SCLIENT_NO", "No");
define("_AM_SCLIENT_NOCLIENTS", _CO_SCLIENT_NOCLIENTS);
define("_AM_SCLIENT_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Not available</span>");
define("_AM_SCLIENT_OPTS", "Preferences");
define("_AM_SCLIENT_OPTIONS", "Options");
define("_AM_SCLIENT_CLIENT", _CO_SCLIENT_CLIENT);
define("_AM_SCLIENT_CLIENT_APPROVE", "Approve this client");
define("_AM_SCLIENT_CLIENT_CREATE", _CO_SCLIENT_CLIENT_CREATE);
define("_AM_SCLIENT_CLIENT_CREATED", _CO_SCLIENT_CLIENT_CREATED);
define("_AM_SCLIENT_CLIENT_CREATING", _CO_SCLIENT_CLIENT_CREATING);
define("_AM_SCLIENT_CLIENT_CREATING_DSC", _CO_SCLIENT_CLIENT_CREATING_DSC);
define("_AM_SCLIENT_CLIENT_DELETE", _CO_SCLIENT_CLIENT_DELETE);
define("_AM_SCLIENT_CLIENT_DELETE_ERROR", "An error occured while deleting this client.");
define("_AM_SCLIENT_CLIENT_DELETE_SUCCESS", "The client has been successfully deleted.");
define("_AM_SCLIENT_CLIENT_EDIT", _CO_SCLIENT_CLIENT_EDIT);
define("_AM_SCLIENT_CLIENT_INFORMATIONS", _CO_SCLIENT_CLIENT_INFORMATIONS);
define("_AM_SCLIENT_CLIENT_NOT_CREATED", _CO_SCLIENT_CLIENT_NOT_CREATED);
define("_AM_SCLIENT_CLIENT_NOT_SELECTED", "You did not select a valid client.");
define("_AM_SCLIENT_CLIENT_NOT_UPDATED", _CO_SCLIENT_CLIENT_NOT_UPDATED);
define("_AM_SCLIENT_CLIENTS", _CO_SCLIENT_CLIENTS);
define("_AM_SCLIENT_PATH", "Path");
define("_AM_SCLIENT_PATH_ITEM", "Upload items");
define("_AM_SCLIENT_PATH_IMAGES", "Clients logo");
define("_AM_SCLIENT_PATHCONFIGURATION", "Module Path Configuration");
define("_AM_SCLIENT_POSITION", "Position");
define("_AM_SCLIENT_REJECTED", _CO_SCLIENT_REJECTED);
define("_AM_SCLIENT_REJECTED_EXP", "<b>Rejected clients</b> : Submitted clients that have been rejected. A rejected client is not displayed in the user side.");
define("_AM_SCLIENT_REJECTED_CLIENTS", "Rejected clients");
define("_AM_SCLIENT_REJECTED_EDITING", "Editing a rejected client");
define("_AM_SCLIENT_REJECTED_EDITING_INFO", "You can edit this rejected client. Modifications will be saved for this client. However, if you would like to display this client in the user side, you will need to set the <b>Status</b> field to 'Active'.");
define("_AM_SCLIENT_SELECT_SORT", "Select sort order :");
define("_AM_SCLIENT_SELECT_STATUS", "Select a status");
define('_AM_SB_SETMPERM','Set the permission');
define("_AM_SCLIENT_SHOWING", "Showing");
define("_AM_SCLIENT_SMARTCLIENT_IMPORT_SETTINGS", "SmartClient Import Settings");
define("_AM_SCLIENT_SMARTCLIENT_IMPORT_SETTINGS_VALUE", "There is no import settings. Please click the Import button to start the import.");
define("_AM_SCLIENT_STATUS", _CO_SCLIENT_STATUS);
define("_AM_SCLIENT_STATUS_DSC", "Select the status of the client. Inactive client are not displayed in the public section.");
define("_AM_SCLIENT_SUMMARY", _CO_SCLIENT_SUMMARY);
define("_AM_SCLIENT_SUMMARY_REQ", _CO_SCLIENT_SUMMARY_REQ);
define("_AM_SCLIENT_SUMMARY_DSC", _CO_SCLIENT_SUMMARY_DSC);
define("_AM_SCLIENT_SUBMITTED", _CO_SCLIENT_SUBMITTED);
define("_AM_SCLIENT_SUBMITTED_APPROVE_SUCCESS", "The submitted client has been approved.");
define("_AM_SCLIENT_SUBMITTED_EXP", "<b>Submitted clients</b> : Potential clients that have submitted their organisation to become a client of this site.");
define("_AM_SCLIENT_SUBMITTED_INFO", "This client have been submitted on your site. You can edit it as you like. You can make some modifications if you'd like. Upon approval, this client will be displayed in the user side of this site.");
define("_AM_SCLIENT_SUBMITTED_CLIENTS", "Submitted clients");
define("_AM_SCLIENT_SUBMITTED_TITLE", "Submitted client");
define("_AM_SCLIENT_TITLE", "Client's name");
define("_AM_SCLIENT_TITLE_REQ", _CO_SCLIENT_TITLE_REQ);
define("_AM_SCLIENT_TOTAL_SUBMITTED", "Submitted : ");
define("_AM_SCLIENT_TOTAL_ACTIVE", "Active : ");
define("_AM_SCLIENT_TOTAL_REJECTED", "Rejected : ");
define("_AM_SCLIENT_TOTAL_INACTIVE", "Inactive : ");
define("_AM_SCLIENT_URL", _CO_SCLIENT_URL);
define("_AM_SCLIENT_URL_DSC", _CO_SCLIENT_URL_DSC);
define("_AM_SCLIENT_WEIGHT", _CO_SCLIENT_WEIGHT);
define("_AM_SCLIENT_WEIGHT_DSC", _CO_SCLIENT_WEIGHT_DSC);
define("_AM_SCLIENT_YES", "Yes");


//Redirect messages
define("_AM_SCLIENT_NOTSET_ACTIVE_SUCCESS", "The client has been created.");
define("_AM_SCLIENT_NOTSET_INACTIVE_SUCCESS", "The client has been created and deactivated.");
define("_AM_SCLIENT_SUBMITTED_ACTIVE_SUCCESS", "The submitted client has been approved !");
define("_AM_SCLIENT_SUBMITTED_INACTIVE_SUCCESS", "The submitted client has been deactivated.");
define("_AM_SCLIENT_SUBMITTED_REJECTED_SUCCESS", "The submitted client has been rejected.");
define("_AM_SCLIENT_ACTIVE_ACTIVE_SUCCESS", "The client has been updated.");
define("_AM_SCLIENT_ACTIVE_INACTIVE_SUCCESS", "The client has been deactivated.");
define("_AM_SCLIENT_INACTIVE_ACTIVE_SUCCESS", "The inactive client has been activated.");
define("_AM_SCLIENT_INACTIVE_INACTIVE_SUCCESS", "The inactive client has been updated.");
define("_AM_SCLIENT_REJECTED_ACTIVE_SUCCESS", "The rejected  client has been activated !");
define("_AM_SCLIENT_REJECTED_INACTIVE_SUCCESS", "The rejected client has been deactivated.");
define("_AM_SCLIENT_REJECTED_REJECTED_SUCCESS", "The rejected client has been updated.");
?>