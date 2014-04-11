<?php
/**
* Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Modules profile
* @subpackage      form Language
* @version         $Id: 2.5.0.a admin.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

define("_PROFILE_AM_FIELD",				"Feld");
define("_PROFILE_AM_FIELDS",			"Felder");
define("_PROFILE_AM_CATEGORY",			"Kategorie");
define("_PROFILE_AM_STEP",				"Schritt weiter");

define("_PROFILE_AM_SAVEDSUCCESS",		"%s erfolgreich gespeichert");
define("_PROFILE_AM_DELETEDSUCCESS",	"%s erfolgreich gelöscht");
define("_PROFILE_AM_RUSUREDEL",			"Wollen Sie %s wirklich löschen?");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "Dieses Feld ist nicht einstellbar.");

define("_PROFILE_AM_ADD",		"Hinzufügen");
define("_PROFILE_AM_EDIT",		"Bearbeiten");
define("_PROFILE_AM_TYPE",		"Feldtyp");
define("_PROFILE_AM_VALUETYPE", "Werttyp");
define("_PROFILE_AM_NAME",		"Name");
define("_PROFILE_AM_TITLE",		"Titel");
define("_PROFILE_AM_DESCRIPTION","Beschreibung");
define("_PROFILE_AM_REQUIRED",	"Erforderlich?");
define("_PROFILE_AM_MAXLENGTH", "Maximale Länge");
define("_PROFILE_AM_WEIGHT",	"Position");
define("_PROFILE_AM_DEFAULT",	"Vorgabe");
define("_PROFILE_AM_NOTNULL",	"Nicht Null?");

define("_PROFILE_AM_ARRAY",		     "Array");
define("_PROFILE_AM_EMAIL",		     "E-Mail");
define("_PROFILE_AM_INT",		     "Ganzzahl");
define("_PROFILE_AM_TXTAREA",	     "Textbereich");
define("_PROFILE_AM_TXTBOX",	     "Textfeld");
define("_PROFILE_AM_URL",		     "URL");
define("_PROFILE_AM_OTHER",		     "Andere");
define("_PROFILE_AM_FLOAT",          "Floating Point");
define("_PROFILE_AM_DECIMAL",        "Dezimale Nummer");
define("_PROFILE_AM_UNICODE_ARRAY",  "Unicode Array");
define("_PROFILE_AM_UNICODE_EMAIL",  "Unicode eMail");
define("_PROFILE_AM_UNICODE_TXTAREA","Unicode Textbereich");
define("_PROFILE_AM_UNICODE_TXTBOX", "Unicode Textfeld");
define("_PROFILE_AM_UNICODE_URL",    "Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON",	"Feld sichtbar im Profil bei Usern dieser Gruppe");
define("_PROFILE_AM_PROF_VISIBLE_FOR",	"Feld sichtbar im Profil dieser Gruppen");
define("_PROFILE_AM_PROF_VISIBLE",		"Sichtbar");
define("_PROFILE_AM_PROF_EDITABLE",		"Editierbares Feld im Profil");
define("_PROFILE_AM_PROF_REGISTER",		"Im Registrierungsformular anzeigen");
define("_PROFILE_AM_PROF_SEARCH",		"Durchsuchbar von diesen Gruppen");
define("_PROFILE_AM_PROF_ACCESS",		"Profilezugriff für diese Gruppe");
define("_PROFILE_AM_PROF_ACCESS_DESC",
        "<ul>" .
        "<li>Admin-Gruppe: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Keine Basis-Gruppe: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User-Gruppe: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE",		"Diese Feld ");
define("_PROFILE_AM_FIELDVISIBLEFOR",	" ist sichtbar für ");
define("_PROFILE_AM_FIELDVISIBLEON",	" wenn Betrachter in Gruppe ");
define("_PROFILE_AM_FIELDVISIBLETOALL",	"- Jeden");
define("_PROFILE_AM_FIELDNOTVISIBLE",	"ist nicht sichtbar");

define("_PROFILE_AM_CHECKBOX",		"Checkbox");
define("_PROFILE_AM_GROUP",			"Gruppenauswahl");
define("_PROFILE_AM_GROUPMULTI",	"Gruppenmehrfachauswahl");
define("_PROFILE_AM_LANGUAGE",		"Sprachauswahl");
define("_PROFILE_AM_RADIO",			"Radio-Buttons");
define("_PROFILE_AM_SELECT",		"Auswahl");
define("_PROFILE_AM_SELECTMULTI",	"Mehrfachauswahl");
define("_PROFILE_AM_TEXTAREA",		"Textbereich");
define("_PROFILE_AM_DHTMLTEXTAREA",	"DHTML-Textbereich");
define("_PROFILE_AM_TEXTBOX",		"Textfeld");
define("_PROFILE_AM_TIMEZONE",		"Zeitzone");
define("_PROFILE_AM_YESNO",			"Radio-Button Ja/Nein");
define("_PROFILE_AM_DATE",			"Datum");
define("_PROFILE_AM_AUTOTEXT",		"Auto-Text");
define("_PROFILE_AM_DATETIME",		"Datum und Uhrzeit");
define("_PROFILE_AM_LONGDATE",		"Langes Datum");

define("_PROFILE_AM_ADDOPTION",		"Option hinzufügen");
define("_PROFILE_AM_REMOVEOPTIONS",	"Optionen entfernen");
define("_PROFILE_AM_KEY",			"Schlüssel");
define("_PROFILE_AM_VALUE",			"Wert");

// User management
define("_PROFILE_AM_EDITUSER",		"User bearbeiten");
define("_PROFILE_AM_SELECTUSER",	"User auswählen");
define("_PROFILE_AM_ADDUSER",		"User hinzufügen");
define("_PROFILE_AM_THEME",			"Theme");
define("_PROFILE_AM_RANK",			"Rang");
define("_PROFILE_AM_USERDONEXIT",	"User existiert nicht!");
define("_PROFILE_MA_USERLEVEL",		"Benutzer-Niveau");

define("_PROFILE_MA_ACTIVE",		"Aktiv");
define("_PROFILE_MA_INACTIVE",		"Inaktiv");
define("_PROFILE_AM_USERCREATED",   "User erstellt");

define("_PROFILE_AM_CANNOTDELETESELF",	"Das Löschen Ihres eigenen Accounts ist nicht erlaubt - benutzen Sie Ihre Profilseite, um Ihren eigenen Account zu löschen");
define("_PROFILE_AM_CANNOTDELETEADMIN", "Das Löschen eines Administratorkontos ist nicht erlaubt.");

define("_PROFILE_AM_NOSELECTION",			"Kein User Ausgewählt");
define("_PROFILE_AM_USER_ACTIVATED",		"User aktiviert");
define("_PROFILE_AM_USER_DEACTIVATED",		"User deaktiviert");
define("_PROFILE_AM_USER_NOT_ACTIVATED",	"Fehler: User NICHT aktiviert");
define("_PROFILE_AM_USER_NOT_DEACTIVATED",	"Fehler: User NICHT deaktiviert");

define("_PROFILE_AM_STEPNAME",	"Abschnitt Name");
define("_PROFILE_AM_STEPORDER",	"Abschnitt Nummer");
define("_PROFILE_AM_STEPSAVE",	"Sichern nach durchlaufen Abschnitt");
define("_PROFILE_AM_STEPINTRO",	"Abschnitt Beschreibung");
//1.62
define('_PROFILE_AM_ACTION', 'Aktion');

?>