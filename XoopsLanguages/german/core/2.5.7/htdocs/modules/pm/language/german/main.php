<?php
/**
* Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Modules pm
* @subpackage      form Language
* @version         $Id: 2.5.0.a main.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED",       "Ihre Nachricht(en) wurde(n) gelöscht");
define("_PM_PRIVATEMESSAGE","Private Nachrichten");
define("_PM_INBOX",         "Posteingang");
define("_PM_FROM",          "Von");
define("_PM_YOUDONTHAVE",   "Sie haben keine privaten Nachrichten");
define("_PM_FROMC",         "Von: ");
define("_PM_SENTC",         "Verschickt am: ");
define("_PM_PROFILE",       "Profil");

// %s is a username
define("_PM_PREVIOUS",      "Vorherige Nachricht");
define("_PM_NEXT",          "Nächste Nachricht");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY",         "Sie sind kein registrierter User.");
define("_PM_REGISTERNOW",   "Jetzt registrieren!");
define("_PM_GOBACK",        "Zurück");
define("_PM_USERNOEXIST",   "Der ausgewählte User existiert nicht in der Datenbank.");
define("_PM_PLZTRYAGAIN",   "Bitte überprüfen Sie den Namen und versuchen es erneut.");
define("_PM_MESSAGEPOSTED", "Ihre Nachricht wurde verschickt");
define("_PM_CLICKHERE",     "Klicken Sie hier um sich Ihre privaten Nachrichten anzeigen zu lassen");
define("_PM_ORCLOSEWINDOW", "Oder klicken Sie hier um das Fenster zu schließen.");
define("_PM_USERWROTE",     "%s schrieb:");
define("_PM_TO",            "An: ");
define("_PM_SUBJECTC",      "Betreff: ");
define("_PM_MESSAGEC",      "Nachricht: ");
define("_PM_CLEAR",         "Leeren");
define("_PM_CANCELSEND",    "Versand abbrechen");
define("_PM_SUBMIT",        "Abschicken");
define("_PM_SAVEINOUTBOX",  "Eine Kopie im Postausgang speichern?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT",       "Betreff");
define("_PM_DATE",          "Datum");
define("_PM_NOTREAD",       "Nicht gelesen");
define("_PM_SEND",          "Senden");
define("_PM_DELETE",        "Löschen");
define("_PM_TOSAVE",        "Speichern");
define("_PM_UNSAVE",        "Speichern rückgängig");
define("_PM_EMPTY",         "Leeren");
define("_PM_REPLY",         "Antworten");
define("_PM_PLZREG",        "Bitte registrieren Sie sich bevor Sie private Nachrichten verschicken!");
define("_PM_SAVED_PART",    "Sie dürfen %d PNs speichern und haben momentan %d PNs gespeichert");
define("_PM_SAVED_ALL",     "Nachrichten wurden in den Postausgang verschoben");
define("_PM_UNSAVED",       "Nachrichten wurden aus dem Postausgang entfernt");
define("_PM_EMPTIED",       "Das Nachrichtenfach wurde geleert");
define("_PM_RUSUREEMPTY",   "Wollen Sie das Nachrichtenfach wirklich leeren?");
define("_PM_RUSUREDELETE",  "Wollen Sie diese Nachricht(en) wirklich löschen?");

define("_PM_ONLINE",        "Online");

define("_PM_RECEIVE",       "EMPFANGEN");
define("_PM_POST",          "GESENDET");
define("_PM_READBOX",       "GELESEN");
define("_PM_RSAVEBOX",      "Receive_SAVEBOX");
define("_PM_OUTBOX",        "Postausgang");
define("_PM_SAVEBOX",       "Gespeicherte PNs");
define("_PM_SENTBOX",       "GESENDET");
define("_PM_PSAVEBOX",      "Post_SAVEBOX");
define("_PM_SAVE",          "Speichern");
define("_PM_SAVED",         "Erfolgreich gespeichert");
define("_PM_TOC",           "Von: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT",          "SORT");
define("_PM_ORDER",         "ORDER");
define("_PM_UID",           "Partner-UID");
define("_PM_TIME",          "Post Datum");
define("_PM_ASC",           "Aufsteigend");
define("_PM_DESC",          "Absteigend");
define("_PM_LIMIT",         "PNs pro Seite");
define("_PM_BACKTOBOX",     "Zurück zur Box");
define("_PM_SORTSUBMIT",    "Abschicken");
define("_PM_PREVIOUSP",     "Vorherige");
define("_PM_NEXTP",         "Nächste");

define("_PM_MAILNOTIFY",    "%s - Sie haben eine neue PN von %s");
define("_PM_MAILMESSAGE",   "Hallo!\nSie haben eine neue PN von %s erhalten\n\nTitel der PN ist\n%s\n\nSie können die PN hier lesen\n%s\n\n-----------\nSie erhalten diese Nachricht, weil Sie benachrichtigt werden wollten, wenn Sie eine neue PN haben\n\nSie können Ihre PM-Konfiguration ändern\n%s\n\nBitte antworten Sie nicht auf diese Nachricht\n\n---------\nMit freundlichen Grüßen\n%s\n%s\n%s");

define("_PM_EMAIL",         "eMail");
define("_PM_EMAIL_DESC",    "Hallo %s, dies ist eine Nachricht von Ihrem Konto auf ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM",    "Von %s");
define("_PM_EMAIL_TO",      "An %s");
define("_PM_EMAIL_SUBJECT", "[Nachricht]%s");
define("_PM_EMAIL_MESSAGE", "Nachrichteninhalt");

define("_PM_ACTION_DONE",   "Aktion erfolgreich ausgeführt");
define("_PM_ACTION_ERROR",  "Aktion fehlgeschlagen");

?>