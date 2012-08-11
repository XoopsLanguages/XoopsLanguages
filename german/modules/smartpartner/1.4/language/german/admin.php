<?php

/**
* $Id: admin.php,v 1.7 2006/05/24 13:09:51 malanciault Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
* Edited by Knollo <www.knollo.de>
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

define("_AM_SPARTNER_ABOUT","über");
define("_AM_SPARTNER_ACTION","Aktion");
define("_AM_SPARTNER_ACTIVATE_PARTNER","Partner aktivieren");
define("_AM_SPARTNER_ACTIVE", _CO_SPARTNER_ACTIVE);
define("_AM_SPARTNER_ACTIVE_EDIT_SUCCESS","Der Partner wurde erfolgreich editiert.");
define("_AM_SPARTNER_ACTIVE_EDITING","Editieren eines aktiven Partners");
define("_AM_SPARTNER_ACTIVE_EDITING_INFO","Sie können diesen aktiven Partner editieren. Modifikationen sind dem Benutzter sofort zugänglich.");
define("_AM_SPARTNER_ACTIVE_EXP","<b>Aktive Partner</b> : Eigentlich aktiven Partner dieser Site.");
define("_AM_SPARTNER_ACTIVE_PARTNERS","Aktive Partner");
define("_AM_SPARTNER_ACTIVE_PARTNERS_DSC","Dies ist eine Liste aller aktiven Partner, welche dem Benutzer sichtbar sind. Sie können mittels Klickens auf eines Symbole in der <b>Aktions</b> Spalte auswählen, ob Sie einen der eingegebenen Partner löschen oder editieren möchten.");
define("_AM_SPARTNER_ALL","Alle");
define("_AM_SPARTNER_ALL_EXP","<b>Jeglicher Status</b> : Alle eingetragenen Partner, jeden Statuses.");
define("_AM_SPARTNER_ALLITEMS","Alle eingetragenen Partner");
define("_AM_SPARTNER_ALLITEMSMSG","Wählen Sie einen Status aus, um die Partner mit jenem Status augelistet zu bekommen. Sie haben auch die Möglichkeit, das Sortierverhalten zu bestimmen.");
define("_AM_SPARTNER_APPROVE","Zustimmen");
define("_AM_SPARTNER_APPROVING","Am zustimmen");
define("_AM_SPARTNER_ASC","Aufsteigend");
define("_AM_SPARTNER_AVAILABLE","<span style='font-weight: bold; color: green;'>Verfügbar</span>");
define("_AM_SPARTNER_NOTWRITABLE","<span style='font-weight: bold; color: red;'>Nicht beschreibbar</span>");
define("_AM_SPARTNER_BLOCKS","Blöcke und Gruppen");
define("_AM_SPARTNER_BLOCKSANDGROUPS","Blöcke und Gruppen");
define("_AM_SPARTNER_BLOCKSTXT","Dieses Modul stellt Ihnen die folgenden Blöcke zur verfügung, welche Sie entweder hier, oder aber im System Modul einstellen können.");
define("_AM_SPARTNER_BY","Von");
define("_AM_SPARTNER_CANCEL", _CO_SPARTNER_CANCEL);
define("_AM_SPARTNER_CLEAR", _CO_SPARTNER_CLEAR);
define("_AM_SPARTNER_CREATE", _CO_SPARTNER_CREATE);
define("_AM_SPARTNER_CREATETHEDIR","Verzeichnis erstellen");
define("_AM_SPARTNER_SETMPERM","Bitte Verzeichnisrechte setzen");
define("_AM_SPARTNER_DB_CHECKTABLES","Check tables");
define("_AM_SPARTNER_DB_CURRENTVER","Current version: <span class='currentVer'>%s</span>");
define("_AM_SPARTNER_DB_DBVER","Database Version %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA","Data added in table %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA_ERR","Error adding data in table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD","Changing field %s in table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD_ERR","Error changing field %s in table %s");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE","Table %s created");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE_ERR","Error creating table %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD","Successfully added field %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD_ERR","Error adding field %s");
define("_AM_SPARTNER_DB_NEEDUPDATE","Your database is out-of-date. Please upgrade your database tables!");
define("_AM_SPARTNER_DB_NEEDUPDATE_WARNING","WARNING : The SmartFactory strongly recommends you to backup all SmartPartner tables before running this upgrade script.");
define("_AM_SPARTNER_DB_NOUPDATE","Your database is up-to-date. No updates are necessary.");
define("_AM_SPARTNER_DB_UPDATE_DB","Updating Database");
define("_AM_SPARTNER_DB_UPDATE_ERR","Errors updating to version %s");
define("_AM_SPARTNER_DB_UPDATE_NOW","Update Now!");
define("_AM_SPARTNER_DB_UPDATE_OK","Successfully updated to version %s");
define("_AM_SPARTNER_DB_UPDATE_TO","Updating to version %s");
define("_AM_SPARTNER_DELETE","Löschen");
define("_AM_SPARTNER_DELETEPARTNER", _CO_SPARTNER_DELETEPARTNER);
define("_AM_SPARTNER_DELETETHISP","Wollen Sie wirklich diesen Partner löschen?");
define("_AM_SPARTNER_DESC","Abfallend");
define("_AM_SPARTNER_DESCRIPTION", _CO_SPARTNER_DESCRIPTION);
define("_AM_SPARTNER_DESCRIPTION_DSC", _CO_SPARTNER_DESCRIPTION_DSC);
define("_AM_SPARTNER_DIRCREATED","Verzeichnis erfolgreich erstellt ");
define("_AM_SPARTNER_DIRNOTCREATED","Das Verzeichnis konnte nicht erstellt werden ");
define("_AM_SPARTNER_EDITING","Editieren");
define("_AM_SPARTNER_EDITPARTNER", _CO_SPARTNER_EDITPARTNER);
define("_AM_SPARTNER_GOMOD","Zum Modul");
define("_AM_SPARTNER_GROUPS","Gruppen");
define("_AM_SPARTNER_GROUPSINFO","Konfigurieren Sie die Zugangsberechtigungen dieses Modules, für die jeweiligen Gruppen");
define("_AM_SPARTNER_HELP","Hilfe");
define("_AM_SPARTNER_HITS", _CO_SPARTNER_HITS);
define("_AM_SPARTNER_ID","Partner ID");
define("_AM_SPARTNER_IMPORT","Importieren");
define("_AM_SPARTNER_IMPORT_ALL_PARTNERS","Alle Partner");
define("_AM_SPARTNER_IMPORT_AUTOAPPROVE","Automatische bestätigung");
define("_AM_SPARTNER_IMPORT_BACK","Zurück zur Import Seite");
define("_AM_SPARTNER_IMPORT_ERROR","Ein Fehler trat während des Importierens der Partner auf.");
define("_AM_SPARTNER_IMPORT_FILE_NOT_FOUND","Importierte Datei wurde nicht unter <b>%s</b> gefunden");
define("_AM_SPARTNER_IMPORT_FROM","Importiert von %s");
define("_AM_SPARTNER_IMPORT_INFO","Sie können Partner aus anderen Modulen direkt in das SmartPartner Modul importieren. Wählen Sie einfach das Modul von dem Sie importieren möchten aus, und klicken Sie auf <b>Importieren</b>.");
define("_AM_SPARTNER_IMPORT_MODULE_FOUND","Das %s Modul wurde gefunden. Es befinden sich darin %s Partner, welche importiert werden können.");
define("_AM_SPARTNER_IMPORT_NO_MODULE","Da XoopsPartners auf dieser Site nicht installiert ist, können keine Partner importiert werden.");
define("_AM_SPARTNER_IMPORT_PARTNER_ERROR","Ein Fehler trat werden des Importierens von '%s' auf.");
define("_AM_SPARTNER_IMPORT_RESULT","Hier ist das Result des Importes.");
define("_AM_SPARTNER_IMPORT_SETTINGS","Import Einstellungen");
define("_AM_SPARTNER_IMPORT_SUCCESS","Die Partner wurden erfolgreich importiert.");
define("_AM_SPARTNER_IMPORT_TITLE","Partner Importieren");
define("_AM_SPARTNER_IMPORT_XOOPSPARTNERS_110","Partner von XoopsPartners 1.1");
define("_AM_SPARTNER_IMPORTED_PARTNER","Importierter Partner : <em>%s</em>");
define("_AM_SPARTNER_IMPORTED_PARTNERS","Importierte Partner : <em>%s</em>");
define("_AM_SPARTNER_IMPORT_SELECTION","Import Selektion");
define("_AM_SPARTNER_IMPORT_SELECT_FILE","Partner");
define("_AM_SPARTNER_IMPORT_SELECT_FILE_DSC","Wählen Sie das Modul aus, von welchem Sie importieren möchten.");
define("_AM_SPARTNER_INACTIVATE_PARTNER","Partner Deaktivieren");
define("_AM_SPARTNER_INACTIVE", _CO_SPARTNER_INACTIVE);
define("_AM_SPARTNER_INACTIVE_EDITING","Einen inaktiven Partner editieren");
define("_AM_SPARTNER_INACTIVE_EDITING_INFO","Sie können einen inaktiven Partner editieren. Veränderungen werden abgespeichert. Beachten Sie jedoch, das Sie 'Nein' für das <b>Inaktive</b> Feld gewät haben.");
define("_AM_SPARTNER_INACTIVE_EXP","<b>Inaktive Partner</b> : Aktive Partner die aus irgend einem Grund inaktive wurden. Inaktive Partner werden dem Benutzer nicht dargestellt.");
define("_AM_SPARTNER_INACTIVE_FIELD","Inaktive");
define("_AM_SPARTNER_INACTIVE_PARTNERS","Inaktive Partner");
define("_AM_SPARTNER_INDEX","Index");
define("_AM_SPARTNER_INTRO", _CO_SPARTNER_INTRO);
define("_AM_SPARTNER_INVENTORY", _CO_SPARTNER_INVENTORY);
define("_AM_SPARTNER_LOGO", _CO_SPARTNER_LOGO);
define("_AM_SPARTNER_LOGO_DSC", _CO_SPARTNER_LOGO_DSC);
define("_AM_SPARTNER_LOGO_UPLOAD", _CO_SPARTNER_LOGO_UPLOAD);
define("_AM_SPARTNER_LOGO_UPLOAD_DSC", _CO_SPARTNER_LOGO_UPLOAD_DSC);
define("_AM_SPARTNER_MODADMIN","Admin :");
define("_AM_SPARTNER_MODIFY", _CO_SPARTNER_MODIFY);
define("_AM_SPARTNER_NAME", _CO_SPARTNER_NAME);
define("_AM_SPARTNER_NO","Nein");
define("_AM_SPARTNER_NOPARTNERS", _CO_SPARTNER_NOPARTNERS);
define("_AM_SPARTNER_NOTAVAILABLE","<span style='font-weight: bold; color: red;'>Nicht Verfügbar</span>");
define("_AM_SPARTNER_OPTS","Einstellungen");
define("_AM_SPARTNER_OPTIONS","Optionen");
define("_AM_SPARTNER_PARTNER", _CO_SPARTNER_PARTNER);
define("_AM_SPARTNER_PARTNER_APPROVE","Diesen Partner Bestätigen");
define("_AM_SPARTNER_PARTNER_CREATE", _CO_SPARTNER_PARTNER_CREATE);
define("_AM_SPARTNER_PARTNER_CREATED", _CO_SPARTNER_PARTNER_CREATED);
define("_AM_SPARTNER_PARTNER_CREATING", _CO_SPARTNER_PARTNER_CREATING);
define("_AM_SPARTNER_PARTNER_CREATING_DSC", _CO_SPARTNER_PARTNER_CREATING_DSC);
define("_AM_SPARTNER_PARTNER_DELETE", _CO_SPARTNER_PARTNER_DELETE);
define("_AM_SPARTNER_PARTNER_DELETE_ERROR","Ein Fehler trat während des Partnerlöschens auf.");
define("_AM_SPARTNER_PARTNER_DELETE_SUCCESS","Der Partner wurde erfolgreich gelöscht.");
define("_AM_SPARTNER_PARTNER_EDIT", _CO_SPARTNER_PARTNER_EDIT);
define("_AM_SPARTNER_PARTNER_INFORMATIONS", _CO_SPARTNER_PARTNER_INFORMATIONS);
define("_AM_SPARTNER_PARTNER_NOT_CREATED", _CO_SPARTNER_PARTNER_NOT_CREATED);
define("_AM_SPARTNER_PARTNER_NOT_SELECTED","Sie haben keinen gültigen Partner ausgewählt.");
define("_AM_SPARTNER_PARTNER_NOT_UPDATED", _CO_SPARTNER_PARTNER_NOT_UPDATED);
define("_AM_SPARTNER_PARTNERS", _CO_SPARTNER_PARTNERS);
define("_AM_SPARTNER_PATH","Pfad");
define("_AM_SPARTNER_PATH_ITEM","Logo hochladen");
define("_AM_SPARTNER_PATH_IMAGES","Partner Logo");
define("_AM_SPARTNER_PATHCONFIGURATION","Modul Verzeichnis Konfiguration");
define("_AM_SPARTNER_POSITION","Position");
define("_AM_SPARTNER_REJECTED", _CO_SPARTNER_REJECTED);
define("_AM_SPARTNER_REJECTED_EXP","<b>Abgelehnte Partner</b> : Eingereichte Partner, welche abgelehnt wurden. Abgelehnte Partner sind Benutzern nicht ersichtlich.");
define("_AM_SPARTNER_REJECTED_PARTNERS","Abgelehnte Partner");
define("_AM_SPARTNER_REJECTED_EDITING","Abgelehnten Partner bearbeiten");
define("_AM_SPARTNER_REJECTED_EDITING_INFO","Sie können diesen abgelehnten Partner bearbeiten. Die Änderungen für diesen Partner werden gespeichert. Wenn Sie jedoch den Partner im User-Bereich anzeigen möchten müssen Sie das <b>Status</b> Feld auf 'Aktiv' setzen.");
define("_AM_SPARTNER_SELECT_SORT","Wälen Sie eine Reihenfolge aus :");
define("_AM_SPARTNER_SELECT_STATUS","Wählen Sie einen Status aus");
define('_AM_SB_SETMPERM','Berechtigungen setzen');
define("_AM_SPARTNER_SHOWING","Zeigt");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS","SmartPartner Import Einstellungen");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS_VALUE","Import Einstellungen sind nicht vorhanden. Bitte klicken Sie den Import Knopf, um das Importieren zu starten.");
define("_AM_SPARTNER_STATUS", _CO_SPARTNER_STATUS);
define("_AM_SPARTNER_STATUS_DSC","Wählen Sie den Status des Partners. Inaktive Partner werden im öffentlichen Bereich nicht angezeigt.");
define("_AM_SPARTNER_SUMMARY", _CO_SPARTNER_SUMMARY);
define("_AM_SPARTNER_SUMMARY_REQ", _CO_SPARTNER_SUMMARY_REQ);
define("_AM_SPARTNER_SUMMARY_DSC", _CO_SPARTNER_SUMMARY_DSC);
define("_AM_SPARTNER_SUBMITTED", _CO_SPARTNER_SUBMITTED);
define("_AM_SPARTNER_SUBMITTED_APPROVE_SUCCESS","Der eingereichte Partner wurder Bestätigt.");
define("_AM_SPARTNER_SUBMITTED_EXP","<b>Eingereichte Partner</b> : Potentzielle Partner, die um eine Partnerschaft mit dieser Site ein Gesuch einreichten.");
define("_AM_SPARTNER_SUBMITTED_INFO","Dieser Partner hat um Partnerschaft gebeten. Sie können die Eingaben nach belieben editieren. Sie können verändern was Sie wollen. Sobald die Bestätigung erfolgt, wird dieser Partner ihren Benutzern ersichtlich.");
define("_AM_SPARTNER_SUBMITTED_PARTNERS","Eingereichte Partner");
define("_AM_SPARTNER_SUBMITTED_TITLE","Eingereichte Partner");
define("_AM_SPARTNER_TITLE","Partner Name");
define("_AM_SPARTNER_TITLE_REQ", _CO_SPARTNER_TITLE_REQ);
define("_AM_SPARTNER_TOTAL_SUBMITTED","Eingereicht : ");
define("_AM_SPARTNER_TOTAL_ACTIVE","Aktive : ");
define("_AM_SPARTNER_TOTAL_REJECTED","Abgelehnte : ");
define("_AM_SPARTNER_TOTAL_INACTIVE","Inaktive : ");
define("_AM_SPARTNER_UPDATE_MODULE","Modul updaten");
define("_AM_SPARTNER_URL", _CO_SPARTNER_URL);
define("_AM_SPARTNER_URL_DSC", _CO_SPARTNER_URL_DSC);
define("_AM_SPARTNER_WEIGHT", _CO_SPARTNER_WEIGHT);
define("_AM_SPARTNER_WEIGHT_DSC", _CO_SPARTNER_WEIGHT_DSC);
define("_AM_SPARTNER_YES","Ja");


//Redirect messages
define("_AM_SPARTNER_NOTSET_ACTIVE_SUCCESS","Der Partner wurde angelegt.");
define("_AM_SPARTNER_NOTSET_INACTIVE_SUCCESS","Der Partner wurde angelegt und deaktiviert.");
define("_AM_SPARTNER_SUBMITTED_ACTIVE_SUCCESS","Der übertragene Partner wurde bestätigt !");
define("_AM_SPARTNER_SUBMITTED_INACTIVE_SUCCESS","Der übertragene Partner wurde deaktiviert.");
define("_AM_SPARTNER_SUBMITTED_REJECTED_SUCCESS","Der übertragene Partner wurde abgelehnt.");
define("_AM_SPARTNER_ACTIVE_ACTIVE_SUCCESS","Der Partner wurde aktualisiert.");
define("_AM_SPARTNER_ACTIVE_INACTIVE_SUCCESS","Der Partner wurde deaktiviert.");
define("_AM_SPARTNER_INACTIVE_ACTIVE_SUCCESS","Der inaktive Partner wurde aktiviert.");
define("_AM_SPARTNER_INACTIVE_INACTIVE_SUCCESS","Der inaktive Partner wurde aktualisiert.");
define("_AM_SPARTNER_REJECTED_ACTIVE_SUCCESS","Der abgelehnte Partner wurde aktiviert !");
define("_AM_SPARTNER_REJECTED_INACTIVE_SUCCESS","Der abgelehnte Partner wurde deaktiviert.");
define("_AM_SPARTNER_REJECTED_REJECTED_SUCCESS","Der abgelehnte Partner wurde aktualisiert.");


define("_AM_SPARTNER_CATEGORY_DELETE","Kategorie löschen");
define("_AM_SPARTNER_CATEGORY_EDIT","Kategorie bearbeiten");
define("_AM_SPARTNER_CATEGORIES","Kategorien");
define("_AM_SPARTNER_CATEGORIES_DSC","Hier ist eine Liste von allen erstellten Kategorien des Moduls.");
define("_AM_SPARTNER_CATEGORIES_TITLE","Erstellte Kategorien");
define("_AM_SPARTNER_CATEGORY","Kategorie");
define("_AM_SPARTNER_CATEGORY_CREATE","Kategorie erstellen");
define("_AM_SPARTNER_CATEGORY_CREATE_INFO","Fälle die folgenden Felder der Reihe nach aus um eine neue Kategorie anzulegen. Diese wird automatisch auf der Userseite angezeigt.");
define("_AM_SPARTNER_CATEGORY_EDIT_INFO","Hier kann die Kategorie bearbeitet werden. Änderungen werden sofort auf den Userseiten Übernommen.");
define("_AM_SPARTNER_CATEGORY_REQ","Kategorie*");
define("_AM_SPARTNER_CATEGORY_SAVE_ERROR","An error occured while saving the category. Here is a list of error(s) :");
define("_AM_SPARTNER_CATHEADER","Kategorie Management");
define("_AM_SPARTNER_CATID","ID");
define("_AM_SPARTNER_CATEGORY_DSC","Kategoriebeschreibung");
define("_AM_SPARTNER_CATEGORY_DELETED","Kategorie %s wurde gelöscht");
define("_AM_SPARTNER_CATEGORY_MODIFIED","Die Kategorie wurde erfolgreich bearbeitet.");
define("_AM_SPARTNER_CATEGORY_WEIGHT","Kategoriebreite");
define("_AM_SPARTNER_CATEGORY_IMAGE","Kategoriebild");
define("_AM_SPARTNER_CATEGORY_IMAGE_DSC","Bild repräsentiert die Kategorie");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD","Bilderupload");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD_DSC","Wähle ein Bild von deinem Computer. Dieses Bild wird hochgeladen und als Kategoriebild verwendet.");
define("_AM_SPARTNER_CATEGORY_CREATING","Neue erstellen");
define("_AM_SPARTNER_CATEGORY_PARENT","Standardkategorie");
define("_AM_SPARTNER_CATEGORY_PARENT_DSC","Wähle einen Standard für diese Unterkategorie.");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE","Unterkategorie erstellen");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE_DSC","Bitte den Namen der Unterkategorie zum Erstellen angeben.<br>Leer lassen, wenn keine erstellt wird. Sollen mehr erstellt werden, dann eingeben wie viele und 'Hinzufügen' klicken");
define("_AM_SPARTNER_ADD_OPT","%s Unterkategorien mehr hinzufügen");
define("_AM_SPARTNER_ADD_OPT_SUBMIT","Hinzufügen");
define("_AM_SPARTNER_CATEGORY_CREATED","Neue Kategorie wurde erstellt und gespeichert!");
define("_AM_SPARTNER_CATEGORY_SUBCAT_SAVE_ERROR","An error occured while saving the category. Here is a list of error(s):");
define("_AM_SPARTNER_CATEGORY_DELETE_CONFIRM","Please note that by deleting a category, all the sub-categories and the articles of this category will be deleted as well, along with any comments that may have been posted related to ces articles. Are you sure you wish to delete this category ?");
define("_AM_SPARTNER_CATEGORY_DELETE_ERROR","An error occured while deleting this category.");
define("_AM_SPARTNER_CATEGORY_NONE","There is no category in the module.");

//added with categories
define("_AM_SPARTNER_FILEUPLOAD_ERROR","An error occured while uploading the file.");
define("_AM_SPARTNER_FILEUPLOAD_SUCCESS","The file was successfully uploaded.");
define("_AM_SPARTNER_PATH_CATEGORY_IMAGES","Kategoriebilder");
define("_AM_SPARTNER_CATEGORY_BELONG","Kategorie");
define("_AM_SPARTNER_BELONG_CATEGORY_DSC","Kategorie, die der Partner gehört");

define("_AM_SPARTNER_SUBCAT_CAT","Unterkategorien");
define("_AM_SPARTNER_SUBCAT_CAT_DSC","Liste der Unterkategorien dieser Kategorie");
define("_AM_SPARTNER_CATCOLNAME","Name");
define("_AM_SPARTNER_SUBDESCRIPT","Beschreibung");
define("_AM_SPARTNER_NOSUBCAT","Keine Unterkategorie erstellt");
?>