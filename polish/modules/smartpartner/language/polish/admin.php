<?php

/**
* $Id: admin.php,v 1.1 2008/04/15 11:18:03 kurak_bu Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

/**
 * This does not belong here. However, since some admin.php constants are refereing to constants
 * defined in common.php, and since admin.php is automatically include when including mainfile.php
 * we need to include the common language file here.
 *
 * For next release : remove all reference to common constants in other language files.
 */
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}

define("_AM_SPARTNER_ABOUT", "About");
define("_AM_SPARTNER_ACTION", "Action");
define("_AM_SPARTNER_ACTIVATE_PARTNER", "Aktywuj partnera");
define("_AM_SPARTNER_ACTIVE", _CO_SPARTNER_ACTIVE);
define("_AM_SPARTNER_ACTIVE_EDIT_SUCCESS", "Dane partnera zostały zmodyfikowane.");
define("_AM_SPARTNER_ACTIVE_EDITING", "Editing an active partner");
define("_AM_SPARTNER_ACTIVE_EDITING_INFO", "You can edit this active partner. Modifications will immediatly take effect in the user side.");
define("_AM_SPARTNER_ACTIVE_EXP", "<b>Active partners</b> : Actual active partners of this site.");
define("_AM_SPARTNER_ACTIVE_PARTNERS", "Active partners");
define("_AM_SPARTNER_ACTIVE_PARTNERS_DSC", "Here is a list of active partners. These partners are displayed in the user side. You can edit or delete each partners by clicking on the related button in the <b>Action</b> column.");
define("_AM_SPARTNER_ALL", "All");
define("_AM_SPARTNER_ALL_EXP", "<b>All status</b> : All partners of the module, whatever their status.");
define("_AM_SPARTNER_ALLITEMS", "All partners of the module");
define("_AM_SPARTNER_ALLITEMSMSG", "Select a status to see all available partners in the selected status. You can also select the sort order of the partners that are displayed.");
define("_AM_SPARTNER_APPROVE", "Zatwierdź");
define("_AM_SPARTNER_APPROVING", "Approving");
define("_AM_SPARTNER_ASC", "Rosnąco");
define("_AM_SPARTNER_AVAILABLE", "<span style='font-weight: bold; color: green;'>Dostępna</span>");
define("_AM_SPARTNER_NOTWRITABLE", "<span style='font-weight: bold; color: red;'>Niedostępna</span>");
define("_AM_SPARTNER_BLOCKS", "Bloki i grupy");
define("_AM_SPARTNER_BLOCKSANDGROUPS", "Bloki i grupy");
define("_AM_SPARTNER_BLOCKSTXT", "This module has the following blocks, which you can configure here or in the system module.");
define("_AM_SPARTNER_BY", "By");
define("_AM_SPARTNER_CANCEL", _CO_SPARTNER_CANCEL);
define("_AM_SPARTNER_CLEAR", _CO_SPARTNER_CLEAR);
define("_AM_SPARTNER_CREATE", _CO_SPARTNER_CREATE);
define("_AM_SPARTNER_CREATETHEDIR", "Create the folder");
define("_AM_SPARTNER_SETMPERM", "Set Permission of folder");
define("_AM_SPARTNER_DB_CHECKTABLES", "Check tables");
define("_AM_SPARTNER_DB_CURRENTVER", "Current version: <span class='currentVer'>%s</span>");
define("_AM_SPARTNER_DB_DBVER", "Database Version %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA", "Data added in table %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA_ERR", "Error adding data in table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD", "Changing field %s in table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD_ERR", "Error changing field %s in table %s");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE", "Table %s created");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE_ERR", "Error creating table %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD", "Successfully added field %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD_ERR", "Error adding field %s");
define("_AM_SPARTNER_DB_NEEDUPDATE", "Your database is out-of-date. Please upgrade your database tables!");
define("_AM_SPARTNER_DB_NEEDUPDATE_WARNING", "WARNING : The SmartFactory strongly recommends you to backup all SmartPartner tables before running this upgrade script.");
define("_AM_SPARTNER_DB_NOUPDATE", "Your database is up-to-date. No updates are necessary.");
define("_AM_SPARTNER_DB_UPDATE_DB", "Updating Database");
define("_AM_SPARTNER_DB_UPDATE_ERR", "Errors updating to version %s");
define("_AM_SPARTNER_DB_UPDATE_NOW", "Update Now!");
define("_AM_SPARTNER_DB_UPDATE_OK", "Successfully updated to version %s");
define("_AM_SPARTNER_DB_UPDATE_TO", "Updating to version %s");
define("_AM_SPARTNER_DELETE", "Usuń");
define("_AM_SPARTNER_DELETEPARTNER", _CO_SPARTNER_DELETEPARTNER);
define("_AM_SPARTNER_DELETEFILE","Usuń plik");
define("_AM_SPARTNER_DELETETHISP", "Do you really want to delete this partner?");
define("_AM_SPARTNER_DELETETHISFILE","Are you sure you want to delete this file?");
define("_AM_SPARTNER_DESC", "Descending");
define("_AM_SPARTNER_DESCRIPTION", _CO_SPARTNER_DESCRIPTION);
define("_AM_SPARTNER_DESCRIPTION_DSC", _CO_SPARTNER_DESCRIPTION_DSC);
define("_AM_SPARTNER_DIRCREATED", "Folder successfully created ");
define("_AM_SPARTNER_DIRNOTCREATED", "The folder could not be created ");
define("_AM_SPARTNER_EDITFILE","Edytoruj plik");
define("_AM_SPARTNER_EDITING", "Edycja");
define("_AM_SPARTNER_EDITPARTNER", _CO_SPARTNER_EDITPARTNER);
define("_AM_SPARTNER_FILE", "Pliki");
define("_AM_SPARTNER_FILE_ADD", "Adding a file");
define("_AM_SPARTNER_FILE_ADDING", "Adding a new file");
define("_AM_SPARTNER_FILE_ADDING_DSC", "Please fill the following form in order to add a new file to this partner.");
define("_AM_SPARTNER_FILE_DELETE_ERROR","An error occured while deleting the file.");
define("_AM_SPARTNER_FILE_DESCRIPTION", "Description");
define("_AM_SPARTNER_FILE_DESCRIPTION_DSC", "Description of the file to be uploaded.");
define("_AM_SPARTNER_FILE_EDITING", "Editing a file");
define("_AM_SPARTNER_FILE_EDITING_DSC", "You can edit this file. Modifications will immediatly take effect in the user side.");
define("_AM_SPARTNER_FILE_EDITING_ERROR", "An error occured while updating the file.");
define("_AM_SPARTNER_FILE_EDITING_SUCCESS", "The file was successfully modified.");
define("_AM_SPARTNER_FILE_INFORMATIONS", "File's informations");
define("_AM_SPARTNER_FILE_NAME", "Name");
define("_AM_SPARTNER_FILE_NAME_DSC", "Name that will be used to identify the file.");
define("_AM_SPARTNER_FILE_STATUS", "File visible ?");
define("_AM_SPARTNER_FILE_STATUS_DSC", "if you select no, the file will not be visible from the user side.");
define("_AM_SPARTNER_FILE_TO_UPLOAD", "File to upload :");
define("_AM_SPARTNER_FILE_UPLOAD_ANOTHER", "Upload again");
define("_AM_SPARTNER_FILEISDELETED","The file has been succesfully deleted") ;
define("_AM_SPARTNER_FILENAME", "File name");
define("_AM_SPARTNER_FILES_LINKED", "Files linked to this partner");

define("_AM_SPARTNER_GOMOD", "Go to module");
define("_AM_SPARTNER_GROUPS", "Groups");
define("_AM_SPARTNER_GROUPSINFO", "Configure module and blocks permissions for each group");
define("_AM_SPARTNER_HELP", "Help");
define("_AM_SPARTNER_HITS", _CO_SPARTNER_HITS);
define("_AM_SPARTNER_ID", "Partner's id");
define("_AM_SPARTNER_IMPORT", "Import");
define("_AM_SPARTNER_IMPORT_ALL_PARTNERS", "All partners");
define("_AM_SPARTNER_IMPORT_AUTOAPPROVE", "Auto-approve");
define("_AM_SPARTNER_IMPORT_BACK", "Back to the import page");
define("_AM_SPARTNER_IMPORT_ERROR", "An error occured while importing the partner.");
define("_AM_SPARTNER_IMPORT_FILE_NOT_FOUND", "Import file not found at <b>%s</b>");
define("_AM_SPARTNER_IMPORT_FROM", "Importing from %s");
define("_AM_SPARTNER_IMPORT_INFO", "You can import partners directly in SmartPartner. Simply select from which module you would like to import the partners and click on the 'Import' button.");
define("_AM_SPARTNER_IMPORT_MODULE_FOUND", "%s module was found. There are %s partners that can be imported.");
define("_AM_SPARTNER_IMPORT_NO_MODULE", "As XoopsPartners in not installed on this site, there is no partner to import.");
define("_AM_SPARTNER_IMPORT_PARTNER_ERROR", "An error occured while importing '%s'.");
define("_AM_SPARTNER_IMPORT_RESULT", "Here is the result of the import.");
define("_AM_SPARTNER_IMPORT_SETTINGS", "Import Settings");
define("_AM_SPARTNER_IMPORT_SUCCESS", "The partners were successfully imported in the module.");
define("_AM_SPARTNER_IMPORT_TITLE", "Import Partners");
define("_AM_SPARTNER_IMPORT_XOOPSPARTNERS_110", "Partners from XoopsPartners 1.1");
define("_AM_SPARTNER_IMPORTED_PARTNER", "Imported partner : <em>%s</em>");
define("_AM_SPARTNER_IMPORTED_PARTNERS", "Partners imported : <em>%s</em>");
define("_AM_SPARTNER_IMPORT_SELECTION", "Import Selection");
define("_AM_SPARTNER_IMPORT_SELECT_FILE", "Partners");
define("_AM_SPARTNER_IMPORT_SELECT_FILE_DSC", "Choose the module from which to import the partners.");
define("_AM_SPARTNER_INACTIVATE_PARTNER", "Deactivate partner");
define("_AM_SPARTNER_INACTIVE", _CO_SPARTNER_INACTIVE);
define("_AM_SPARTNER_INACTIVE_EDITING", "Editing an inactive partner");
define("_AM_SPARTNER_INACTIVE_EDITING_INFO", "You can edit this inactive partner. Modifications will be saved for this partner. However, if you would like to display this partner in the user side, you will need to set the <b>Status</b> field to 'Active'.");
define("_AM_SPARTNER_INACTIVE_EXP", "<b>Inactive partners</b> : Active partners that has become, for some reason, inactive. An inactive partner is not displayed in the user side.");
define("_AM_SPARTNER_INACTIVE_FIELD", "Inactive");
define("_AM_SPARTNER_INACTIVE_PARTNERS", "Inactive partners");
define("_AM_SPARTNER_INDEX", "Index");
define("_AM_SPARTNER_INTRO", _CO_SPARTNER_INTRO);
define("_AM_SPARTNER_INVENTORY", _CO_SPARTNER_INVENTORY);
define("_AM_SPARTNER_LOGO", _CO_SPARTNER_LOGO);
define("_AM_SPARTNER_LOGO_DSC", _CO_SPARTNER_LOGO_DSC);
define("_AM_SPARTNER_LOGO_UPLOAD", _CO_SPARTNER_LOGO_UPLOAD);
define("_AM_SPARTNER_LOGO_UPLOAD_DSC", _CO_SPARTNER_LOGO_UPLOAD_DSC);
define("_AM_SPARTNER_MODADMIN", "Admin :");
define("_AM_SPARTNER_MODIFY", _CO_SPARTNER_MODIFY);
define("_AM_SPARTNER_NAME", _CO_SPARTNER_NAME);
define("_AM_SPARTNER_NO", "No");
define("_AM_SPARTNER_NOPARTNERS", _CO_SPARTNER_NOPARTNERS);
define("_AM_SPARTNER_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Not available</span>");
define("_AM_SPARTNER_OPTS", "Preferencje");
define("_AM_SPARTNER_OPTIONS", "Opcje");
define("_AM_SPARTNER_PARTNER", _CO_SPARTNER_PARTNER);
define("_AM_SPARTNER_PARTNER_APPROVE", "Zatwierdź partnera");
define("_AM_SPARTNER_PARTNER_CREATE", _CO_SPARTNER_PARTNER_CREATE);
define("_AM_SPARTNER_PARTNER_CREATED", _CO_SPARTNER_PARTNER_CREATED);
define("_AM_SPARTNER_PARTNER_CREATING", _CO_SPARTNER_PARTNER_CREATING);
define("_AM_SPARTNER_PARTNER_CREATING_DSC", _CO_SPARTNER_PARTNER_CREATING_DSC);
define("_AM_SPARTNER_PARTNER_DELETE", _CO_SPARTNER_PARTNER_DELETE);
define("_AM_SPARTNER_PARTNER_DELETE_ERROR", "An error occured while deleting this partner.");
define("_AM_SPARTNER_PARTNER_DELETE_SUCCESS", "The partner has been successfully deleted.");
define("_AM_SPARTNER_PARTNER_EDIT", _CO_SPARTNER_PARTNER_EDIT);
define("_AM_SPARTNER_PARTNER_INFORMATIONS", _CO_SPARTNER_PARTNER_INFORMATIONS);
define("_AM_SPARTNER_PARTNER_NOT_CREATED", _CO_SPARTNER_PARTNER_NOT_CREATED);
define("_AM_SPARTNER_PARTNER_NOT_SELECTED", "You did not select a valid partner.");
define("_AM_SPARTNER_PARTNER_NOT_UPDATED", _CO_SPARTNER_PARTNER_NOT_UPDATED);
define("_AM_SPARTNER_PARTNERS", _CO_SPARTNER_PARTNERS);
define("_AM_SPARTNER_PATH", "Ścieżka");
define("_AM_SPARTNER_PATH_ITEM", "Upload items");
define("_AM_SPARTNER_PATH_IMAGES", "Logo partnera");
define("_AM_SPARTNER_PATHCONFIGURATION", "Module Path Configuration");
define("_AM_SPARTNER_POSITION", "Pozycja");
define("_AM_SPARTNER_REJECTED", _CO_SPARTNER_REJECTED);
define("_AM_SPARTNER_REJECTED_EXP", "<b>Rejected partners</b> : Submitted partners that have been rejected. A rejected partner is not displayed in the user side.");
define("_AM_SPARTNER_REJECTED_PARTNERS", "Rejected partners");
define("_AM_SPARTNER_REJECTED_EDITING", "Editing a rejected partner");
define("_AM_SPARTNER_REJECTED_EDITING_INFO", "You can edit this rejected partner. Modifications will be saved for this partner. However, if you would like to display this partner in the user side, you will need to set the <b>Status</b> field to 'Active'.");
define("_AM_SPARTNER_SELECT_SORT", "Select sort order :");
define("_AM_SPARTNER_SELECT_STATUS", "Select a status");
define('_AM_SB_SETMPERM','Set the permission');
define("_AM_SPARTNER_NOFILE", "This partner does not have any attached files.");
define("_AM_SPARTNER_PATH_FILES", "Attached files");
define("_AM_SPARTNER_SHOWING", "Showing");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS", "SmartPartner Import Settings");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS_VALUE", "There is no import settings. Please click the Import button to start the import.");
define("_AM_SPARTNER_STATUS", _CO_SPARTNER_STATUS);
define("_AM_SPARTNER_STATUS_DSC", "Select the status of the partner. Inactive partner are not displayed in the public section.");
define("_AM_SPARTNER_SUMMARY", _CO_SPARTNER_SUMMARY);
define("_AM_SPARTNER_SUMMARY_REQ", _CO_SPARTNER_SUMMARY_REQ);
define("_AM_SPARTNER_SUMMARY_DSC", _CO_SPARTNER_SUMMARY_DSC);
define("_AM_SPARTNER_SUBMITTED", _CO_SPARTNER_SUBMITTED);
define("_AM_SPARTNER_SUBMITTED_APPROVE_SUCCESS", "The submitted partner has been approved.");
define("_AM_SPARTNER_SUBMITTED_EXP", "<b>Submitted partners</b> : Potential partners that have submitted their organisation to become a partner of this site.");
define("_AM_SPARTNER_SUBMITTED_INFO", "This partner have been submitted on your site. You can edit it as you like. You can make some modifications if you'd like. Upon approval, this partner will be displayed in the user side of this site.");
define("_AM_SPARTNER_SUBMITTED_PARTNERS", "Submitted partners");
define("_AM_SPARTNER_SUBMITTED_TITLE", "Submitted partner");
define("_AM_SPARTNER_TITLE", "Partner's name");
define("_AM_SPARTNER_TITLE_REQ", _CO_SPARTNER_TITLE_REQ);
define("_AM_SPARTNER_TOTAL_SUBMITTED", "Submitted : ");
define("_AM_SPARTNER_TOTAL_ACTIVE", "Active : ");
define("_AM_SPARTNER_TOTAL_REJECTED", "Rejected : ");
define("_AM_SPARTNER_TOTAL_INACTIVE", "Inactive : ");
define("_AM_SPARTNER_UPDATE_MODULE", "Update module");
define("_AM_SPARTNER_URL", _CO_SPARTNER_URL);
define("_AM_SPARTNER_URL_DSC", _CO_SPARTNER_URL_DSC);
define("_AM_SPARTNER_WEIGHT", _CO_SPARTNER_WEIGHT);
define("_AM_SPARTNER_WEIGHT_DSC", _CO_SPARTNER_WEIGHT_DSC);
define("_AM_SPARTNER_YES", "Yes");


//Redirect messages
define("_AM_SPARTNER_NOTSET_ACTIVE_SUCCESS", "Partner został dodany.");
define("_AM_SPARTNER_NOTSET_INACTIVE_SUCCESS", "Partner został dodany i zdezaktywowany.");
define("_AM_SPARTNER_SUBMITTED_ACTIVE_SUCCESS", "Partner został zatwierdzony!");
define("_AM_SPARTNER_SUBMITTED_INACTIVE_SUCCESS", "Partner został zdezaktywowany.");
define("_AM_SPARTNER_SUBMITTED_REJECTED_SUCCESS", "Partner został odrzucony.");
define("_AM_SPARTNER_ACTIVE_ACTIVE_SUCCESS", "Partner został zaktualizowany.");
define("_AM_SPARTNER_ACTIVE_INACTIVE_SUCCESS", "Partner został zdezaktywowany.");
define("_AM_SPARTNER_INACTIVE_ACTIVE_SUCCESS", "Nieaktywny partnert został aktywowany.");
define("_AM_SPARTNER_INACTIVE_INACTIVE_SUCCESS", "Nieaktywny partnert został zaktualizowany.");
define("_AM_SPARTNER_REJECTED_ACTIVE_SUCCESS", "Odrzucony partnert został aktywowany!");
define("_AM_SPARTNER_REJECTED_INACTIVE_SUCCESS", "Odrzucony partnert został zdezaktywowany.");
define("_AM_SPARTNER_REJECTED_REJECTED_SUCCESS", "Odrzucony partnert został zaktualizowany.");


define("_AM_SPARTNER_CATEGORY_EDIT", "Edytuj kategorię");
define("_AM_SPARTNER_CATEGORY_DELETE", "Usuń kategorię");
define("_AM_SPARTNER_CATEGORIES", "Kategorie");
define("_AM_SPARTNER_CATEGORIES_DSC", "Here is a list of all created categories of the module.");
define("_AM_SPARTNER_CATEGORIES_TITLE", "Created categories");
define("_AM_SPARTNER_CATEGORY", "Kategoria");
define("_AM_SPARTNER_CATEGORY_CREATE", "Utwórz kategorię");
define("_AM_SPARTNER_CATEGORY_CREATE_INFO", "Fill the following form in order to create a new category. The newly created category will be automatically displayed in the user side.");
define("_AM_SPARTNER_CATEGORY_EDIT_INFO", "You can edit this category. Modifications will immediatly take effect in the user side.");
define("_AM_SPARTNER_CATEGORY_REQ", "Category*");
define("_AM_SPARTNER_CATEGORY_SAVE_ERROR", "An error occured while saving the category. Here is a list of error(s) :");
define("_AM_SPARTNER_CATHEADER", "Categories Management");
define("_AM_SPARTNER_CATID","ID");
define("_AM_SPARTNER_CATEGORY_DSC", "Opis kategorii");
define("_AM_SPARTNER_CATEGORY_DELETED", "Category %s has been deleted");
define("_AM_SPARTNER_CATEGORY_MODIFIED", "The category was successfully modified.");
define("_AM_SPARTNER_CATEGORY_WEIGHT", "Waga");
define("_AM_SPARTNER_CATEGORY_IMAGE", "Ikona");
define("_AM_SPARTNER_CATEGORY_IMAGE_DSC", "Image representing the category");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD", "Wyślij obraz");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD_DSC", "Select an image on your computer. This image will be uploaded to the site and set as the category image.");
define("_AM_SPARTNER_CATEGORY_CREATING", "Creating new");
define("_AM_SPARTNER_CATEGORY_PARENT", "Kategoria nadrzędna");
define("_AM_SPARTNER_CATEGORY_PARENT_DSC", "Select a parent to make this a sub-category.");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE","Podkategorie");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE_DSC","Fill the text box with the names of sub categories to create.<br>Leave blank to not create subcategory. To create more, enter the how much more to create then press 'Add'");
define("_AM_SPARTNER_ADD_OPT","Dodaj od razu %s podkategorii");
define("_AM_SPARTNER_ADD_OPT_SUBMIT","Dodaj");
define("_AM_SPARTNER_CATEGORY_CREATED", "New category was created and saved!");
define("_AM_SPARTNER_CATEGORY_SUBCAT_SAVE_ERROR","An error occured while saving the category. Here is a list of error(s):");
define("_AM_SPARTNER_CATEGORY_DELETE_CONFIRM", "Please note that by deleting a category, all the sub-categories and the partners of this category will be deleted as well, along with any comments that may have been posted related to ces articles. Are you sure you wish to delete this category ?");
define("_AM_SPARTNER_CATEGORY_DELETE_ERROR", "An error occured while deleting this category.");
define("_AM_SPARTNER_CATEGORY_NONE", "There is no category in the module.");

//added with categories
define("_AM_SPARTNER_FILEUPLOAD_ERROR", "An error occured while uploading the file.");
define("_AM_SPARTNER_FILEUPLOAD_SUCCESS", "The file was successfully uploaded.");
define("_AM_SPARTNER_PATH_CATEGORY_IMAGES", "Category images");
define("_AM_SPARTNER_CATEGORY_BELONG", "Category");
define("_AM_SPARTNER_BELONG_CATEGORY_DSC", "One or more categories for this partner");

define("_AM_SPARTNER_SUBCAT_CAT", "Sub categories");
define("_AM_SPARTNER_SUBCAT_CAT_DSC", "List of sub categories of this category");
define("_AM_SPARTNER_CATCOLNAME", "Name");
define("_AM_SPARTNER_UPLOAD", "Upload");
define("_AM_SPARTNER_UPLOAD_FILE", "Upload a file");
define("_AM_SPARTNER_UPLOAD_FILE_NEW", "Upload a new file");
define("_AM_SPARTNER_UPLOADED_DATE", "Uploaded");
define("_AM_SPARTNER_SUBDESCRIPT", "Description");
define("_AM_SPARTNER_NOSUBCAT", "No sub categories created");

//added with permissions and smartobjection

define("_AM_SPARTNER_OFFERS", "Offers");
define("_AM_SPARTNER_CREATINGNEW", "Creating");
define("_AM_SPARTNER_OFFER_CREATE", "Create an offer");
define("_AM_SPARTNER_OFFER_CREATE_INFO", "Fill this form in order to create an offer.");
define("_AM_SPARTNER_OFFERS_DSC", "Here is the list of offers.");
define("_AM_SPARTNER_OFFER_EDIT", "Edit an offer");
define("_AM_SPARTNER_OFFER_EDIT_INFO", "");
define("_AM_SPARTNER_SHOW_SUMMARY", "Show summary on partner page");
define("_AM_SPARTNER_SHOW_SUMMARY_DSC", "Note: if any users have partial view permissions, you should set this to 'yes.' Otherwise a partner detail page displayed in partial view mode will have no info at all other than the logo and name.");
define("_SMARTPARTNER_MESSAGE_FILE_ERROR", "Error: Unable to store uploaded file for the following reasons:<br />%s");
define("_SMARTPARTNER_MESSAGE_WRONG_MIMETYPE", "Error: filetype is not allowed. Please re-submit.");

?>