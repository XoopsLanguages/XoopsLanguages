﻿<?php
/**
 * $Id: main.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Lexikon - glossary module
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_LX_MD_NAME","Lexikon");

// A brief description of this module
define("_MI_LX_MD_DESC","Ein Multikategorie-Glossar");

// Sub menus in main menu block
define("_MI_LX_SUB_SMNAME0","Administration");
define("_MI_LX_SUB_SMNAME1","Eintrag einschicken");
define("_MI_LX_SUB_SMNAME2","Definition anfordern");
define("_MI_LX_SUB_SMNAME3","Definition suchen");
define("_MI_LX_SUB_SMNAME4","neuer Eintrag");
define("_MI_LX_SUB_SMNAME6","Autorenliste");
define("_MI_LX_SUB_SMNAME7","Webmastercontent");

// module options
$cf=1;

define("_MI_LX_MULTICATS","$cf. Ben&ouml;tigen Sie Glossar-Kategorien?");
define("_MI_LX_MULTICATSDSC","Falls 'Ja' k&ouml;nnen diverse Kategorien benutzt werden, ansonsten gibt es nur eine automatische Kategorie.");

define("_MI_LX_ALLOWSUBMIT","$cf. D&uuml;rfen User Eintr&auml;ge einschicken?");
define("_MI_LX_ALLOWSUBMITDSC","Falls 'Ja', haben die User Zugriff auf das Absendeformular");

$cf++;

define("_MI_LX_CATSINMENU","$cf. Sollen die Kategorien im Men&uuml; angezeigt werden?"); 
define("_MI_LX_CATSINMENUDSC","W&auml;hlen Sie 'Ja', falls Sie Link zu Kategorien im Hauptmen&uuml; haben wollen."); 

define("_MI_LX_ANONSUBMIT","$cf. D&uuml;rfen G&auml;ste Eintr&auml;ge einschicken?");
define("_MI_LX_ANONSUBMITDSC","Falls 'Ja', haben G&auml;ste Zugriff auf das Absendeformular");

$cf++;

define("_MI_LX_DATEFORMAT","$cf. Welches Format soll das Datum haben?");
define("_MI_LX_DATEFORMATDSC","Benutzt den letzten Teil von language/english/global.php um die Datumsanzeige zu bestimmen. Beispiel: 'd-M-Y H:i' wird zu '23-Mar-2011 22:35'");

define("_MI_LX_ALLOWREQ","$cf. D&uuml;rfen Gäste Eintr&auml;ge angefragen ?");
define("_MI_LX_ALLOWREQDSC","Falls 'Ja', haben auch Gauml;ste Zugriff auf das Anfrageformular.");

$cf++;

define("_MI_LX_PERPAGE","$cf. Anzahl der Eintr&auml;ge pro Seite (Admin-Seite)?");
define("_MI_LX_PERPAGEDSC","Anzahl der Eintr&auml;ge die auf einmal auf der Admin-Seite angezeigt werden.");

define("_MI_LX_DATEFORMAT","$cf. Welches Format soll das Datum haben?");
define("_MI_LX_DATEFORMATDSC","Benutzt den letzten Teil von language/english/global.php um die Datumsanzeige zu bestimmen. Beispiel: 'd-M-Y H:i' wird zu '23-Mar-2011 22:35'");

$cf++;

define("_MI_LX_PERPAGEINDEX","$cf. Anzahl der Eintr&auml;ge pro Seite (User-Seite)?");
define("_MI_LX_PERPAGEINDEXDSC","Anzahl der Eintr&auml;ge die auf jeder Seite der User-Seite angezeigt werden.");

define("_MI_LX_PERPAGE","$cf. Anzahl der Eintr&auml;ge pro Seite (Admin-Seite)?");
define("_MI_LX_PERPAGEDSC","Anzahl der Eintr&auml;ge die auf einmal auf der Admin-Seite angezeigt werden.");

$cf++;

define("_MI_LX_BLOCKSPERPAGE","$cf. Anzahl der Eintr&auml;ge in den Blocks auf der Startseite?");
define("_MI_LX_BLOCKSPERPAGEDSC","Anzahl der Eintr&auml;ge die in jedem Blocks auf der Startseite gezeigt werden.");

define("_MI_LX_PERPAGEINDEX","$cf. Anzahl der Eintr&auml;ge pro Seite (User-Seite)?");
define("_MI_LX_PERPAGEINDEXDSC","Anzahl der Eintr&auml;ge die auf jeder Seite der User-Seite angezeigt werden.");

$cf++;

define("_MI_LX_AUTOAPPROVE","$cf. Eintr&auml;ge automatisch freigeben?");
define("_MI_LX_AUTOAPPROVEDSC","Falls 'Ja' werden die Eintr&auml;ge automatisch freigegeben.");

define("_MI_LX_BLOCKSPERPAGE","$cf. Anzahl der Eintr&auml;ge in den Blocks auf der Startseite?");
define("_MI_LX_BLOCKSPERPAGEDSC","Anzahl der Eintr&auml;ge die in jedem Blocks auf der Startseite gezeigt werden.");

$cf++;

define("_MI_LX_ALLOWADMINHITS","$cf. Sollen Admin-Aufrufe mitgez&auml;hlt werden?");
define("_MI_LX_ALLOWADMINHITSDSC","Falls 'Ja', wird sich der Z&auml;hler auch bei Admin-Aufrufen erh&ouml;hen.");

define("_MI_LX_AUTOAPPROVE","$cf. Eintr&auml;ge automatisch freigeben?");
define("_MI_LX_AUTOAPPROVEDSC","Falls 'Ja' werden die Eintr&auml;ge automatisch freigegeben.");

$cf++;

define("_MI_LX_MAILTOADMIN","$cf. E-Mail an Admin bei jeder neuen Einsendung?");  
define("_MI_LX_MAILTOADMINDSC","Falls 'Ja', wird der Admin bei jeder neuen Einsendung eine E-Mail erhalten.");  

define("_MI_LX_MULTICATS","$cf. Ben&ouml;tigen Sie Glossar-Kategorien?");
define("_MI_LX_MULTICATSDSC","Falls 'Ja' k&ouml;nnen diverse Kategorien benutzt werden, ansonsten gibt es nur eine automatische Kategorie.");

$cf++;
define("_MI_LX_MAILTOSENDER","$cf. E-Mail an Einsender bei jeder neuen Einsendung, Anforderung oder Änderung?");  
define("_MI_LX_MAILTOSENDERDSC","Falls 'Ja', wird der Benutzer bei jeder neuen Einsendung eine Versand-Bestätigung erhalten. Falls `Benachrichtigen` ausgewählt wurde, erhält der Einsender eine weitere E-Mail nach der Freischaltung.");
$cf++;

define("_MI_LX_RANDOMLENGTH","$cf. L&auml;nge der anzuzeigenden Zeile bei zuf&auml;lligen Definitionen?");  
define("_MI_LX_RANDOMLENGTHDSC","Wieviele Zeichen sollen bei den zuf&auml;lligen Definitionen angezeigt werden? Gilt f&uuml;r die Index-Seite und f&uuml;r den Block (Vorgabe: 150 Zeichen)");

define("_MI_LX_ALLOWADMINHITS","$cf. Sollen Admin-Aufrufe mitgez&auml;hlt werden?");
define("_MI_LX_ALLOWADMINHITSDSC","Falls 'Ja', wird sich der Z&auml;hler auch bei Admin-Aufrufen erh&ouml;hen.");

$cf++;

define("_MI_LX_LINKTERMS","$cf. Links anzeigen zu anderen Begriffen in den Definitionen?");  
define("_MI_LX_LINKTERMSDSC","Falls 'Ja' wird in den Definitionen automatisch zu anderen Eintr&auml;gen im Glossar verlinkt.");

define("_MI_LX_MAILTOADMIN","$cf. E-Mail an Admin bei jeder neuen Einsendung?");  
define("_MI_LX_MAILTOADMINDSC","Falls 'Ja', wird der Admin bei jeder neuen Einsendung eine E-Mail erhalten.");  

$cf++;

define("_MI_LX_RANDOMLENGTH","$cf. L&auml;nge der anzuzeigenden Zeile bei zuf&auml;lligen Definitionen?");  
define("_MI_LX_RANDOMLENGTHDSC","Wieviele Zeichen sollen bei den zuf&auml;lligen Definitionen angezeigt werden? Gilt f&uuml;r die Index-Seite und f&uuml;r den Block (Vorgabe: 150 Zeichen)");
$cf++;
define("_MI_LX_LINKTERMS","$cf. Links anzeigen zu anderen Begriffen in den Definitionen?");  
define("_MI_LX_LINKTERMSDSC","Falls 'Ja' wird in den Definitionen automatisch zu anderen Eintr&auml;gen im Glossar verlinkt.");
$cf++;

define("_MI_LX_FORM_OPTIONS","$cf. Eingabe Optionen");
define("_MI_LX_FORM_OPTIONSDSC","Hier kann gew&auml;hlt werden welcher Editor zur Eingabe verwendet wird. Wurde kein spezieller Editor installiert, kann nur kompakt oder DHTML gew&auml;hlt werden. <em>Der Editor muss auf der Site im Verzeichnis class/xoopseditor installiert sein.</em>");
$cf++;

define("_MI_LX_EDIGUEST","$cf. Eingabe Optionen für Einsendungen");
define("_MI_LX_EDIGUESTDSC","Sollen Benutzer und Gäste Editoren für Einsendungen verwenden dürfen?");

define("_MI_LX_DISPPROL","$cf. Zeige Submitter bei Eintrag?");
define("_MI_LX_DISPPROLDSC","Falls 'Ja' wird  der Autor im Footer des Eintrags gezeigt.");

$cf++;

define("_MI_LX_HEADER","$cf. Hauptseite - einleitender Text:");
define("_MI_LX_HEADERDSC","Hier kann für den Modulheader ein Text oder Javascript Code eingegeben werden (HTML ist erlaubt).");
$cf++;
define("_MI_LX_DISPPROL","$cf. Zeige Submitter bei Eintrag?");
define("_MI_LX_DISPPROLDSC","Falls 'Ja' wird  der Autor im Footer des Eintrags gezeigt.");
$cf++;
define("_MI_LX_AUTHORPROFILE","$cf. Autoren-Profil verwenden?");
define('_MI_LX_AUTHORPROFILEDSC', "Falls 'Ja', wird der Benutzername mit dem Glossar-Profil des Autors verlinkt und ein Link zur Autorenliste erscheint im Men&uuml;.");

define("_MI_LX_AUTHORPROFILE","$cf. Autoren-Profil verwenden?");
define('_MI_LX_AUTHORPROFILEDSC',"Falls 'Ja', wird der Benutzername mit dem Glossar-Profil des Autors verlinkt und ein Link zur Autorenliste erscheint im Men&uuml;.");

$cf++;
define("_MI_LX_SHOWDAT","$cf. Zeige Datum im Block der neuesten Eintr&auml;ge?");
define("_MI_LX_SHOWDATDSC","Falls 'Ja' wird auf der Startseite das Datum bei den neuesten Eintr&auml;gen gezeigt.");
$cf++;
define("_MI_LX_SHOWCTR","$cf. Zeige Counter im Block der beliebtesten Eintr&auml;ge?");
define("_MI_LX_SHOWCTRDSC","Falls 'Ja' wird der Z&auml;hler auf der Startseite bei popul&auml;rsten Eintr&auml;gen gezeigt.");
$cf++;
define("_MI_LX_CAPTCHA","$cf. Captcha f&uuml;r Einsendungen verwenden?");
define("_MI_LX_CAPTCHADSC","Xoops Frameworks wird benötigt.");
$cf++;
define("_MI_LX_KEYWORDS_HIGH","$cf. Suchwörter hervorheben ?");
define("_MI_LX_KEYWORDS_HIGHDSC"," Bei Ja, werden Suchwörter in den Definitionen hervorgehoben");
$cf++;
define("_MI_LX_BOOKMARK_ME","$cf. Zeige social Bookmarks ?");
define("_MI_LX_BOOKMARK_MEDSC","Die Icons sind auf der Seite der Eintr&auml;ge zu sehen.");
$cf++;
define("_MI_LX_METANUM","$cf. Maximale Anzahl an Meta Keywords die automatisch generiert werden?");
define("_MI_LX_METANUMDSC","Hier ihre Anzahl der zu generierenden meta-Keywörter wählen. Die Keywörter müssen mindestens so lang sein wie das xoops_keywords_limit. <BR> Bei einem Wert von Null 0, werden die Keywörter der site verwendet.");
define("_MI_LX_METANUM_0","0");
define("_MI_LX_METANUM_5","5");
define("_MI_LX_METANUM_10","10");
define("_MI_LX_METANUM_20","20");
define("_MI_LX_METANUM_30","30");
define("_MI_LX_METANUM_40","40");
define("_MI_LX_METANUM_50","50");
define("_MI_LX_METANUM_60","60");
define("_MI_LX_METANUM_70","70");
define("_MI_LX_METANUM_80","80");
$cf++;
define('_MI_LX_USESHOTS',"$cf. Thumbnails als Kategoriebilder:");
define("_MI_LX_USESHOTSDSC","Unterst&uuml;tzte Dateitypen: JPG, GIF, PNG.<br />Thumbnails werden zur Darstellung der Kategoriebilder benutzt. Einstellung `Nein` bewirkt, dass keine Kategorienbilder dargestellt werden.<BR/> <em>Das Uploadverzeichnis für Kategoriebilder ist modules/lexikon/images/uploads</em>");
$cf++;
define('_MI_LX_LOGOWIDTH',"$cf. Maximale Breite der Kategoriebilder im Menü:");

define("_MI_LX_LOGOWIDTHDSC","default:20px");

define("_MI_LX_LOGOWIDTHDSC","default:16px");

$cf++;
define('_MI_LX_IMCATWD',"$cf. Breite der Kategoriebilder bei Kategorie-ansicht:");
define("_MI_LX_IMCATWDDSC","Breite des Logos wenn einzel-Kategorien betrachtet werden. (default:50px)");
$cf++;
define("_MI_LX_RSS","$cf. D&uuml;rfen G&auml;ste RSS Syndikation benutzen?");
define("_MI_LX_RSSDSC","Wenn diese Option gewählt wird, sind die Inhalte für Benutzer und Gäste abrufbar. Bei `Nein` haben nur Benutzer Zugang zur Syndikation.");
$cf++;
define("_MI_LX_SYNDICATION","$cf. Webmastercontent Syndikation verwenden?");
define("_MI_LX_SYNDICATIONDSC","Wenn diese Option gewählt wird, haben Benutzer und Gäste Zugang zum WebmasterContent.");

// bookmarks
define("_MI_LX_ADDTHIS1","Addthis Popup Fenster");
define("_MI_LX_ADDTHIS2","Addthis dropdown Auswahlbox");

// linkterms
define("_MI_LX_POPUP","Popup Fenster");
define("_MI_LX_TOOLTIP","Tooltips");
define("_MI_LX_BUBBLETIPS","Bubble Tooltips");
define("_MI_LX_SHADOWTIPS","Shadow Tooltips");

// Names of admin menu items

define("_MI_LX_ADMENU0","Main");
define("_MI_LX_ADMENU1","Index");
define("_MI_LX_ADMENU2","Kategorien");
define("_MI_LX_ADMENU3","Eintr&auml;ge");
define("_MI_LX_ADMENU4","Bl&ouml;cke/Gruppen");
define("_MI_LX_ADMENU5","Zum Modul");

define("_MI_LX_ADMENU1","Index");
define("_MI_LX_ADMENU2","Kategorien");
define("_MI_LX_ADMENU3","Eintr&auml;ge");
define("_MI_LX_ADMENU4","Bl&ouml;cke/Gruppen");
define("_MI_LX_ADMENU5","Zum Modul");

//mondarse

define("_MI_LX_ADMENU6","Import");
define("_MI_LX_ADMENU7","Anfragen");
define("_MI_LX_ADMENU8","Einsendungen");
define("_MI_LX_ADMENU9","Berechtigungen");
define("_MI_LX_ADMENU10","Über");
define("_MI_LX_ADMENU11","Kommentare");
define("_MI_LX_ADMENU12","Statistik");

define("_MI_LX_ADMENU6","Import");
define("_MI_LX_ADMENU8","Einsendungen");
define("_MI_LX_ADMENU10","Über");
define("_MI_LX_ADMENU12","Statistik");

// SubMenues xoops 2.2.x
define("_MI_LX_CONFIGCAT_EXTENDED","&raquo; Erweiterte Konfiguration");
define("_MI_LX_CONFIGCAT_EXTENDEDDSC" , "besondere Einstellungen der Eintr&auml;ge.");


//Names of Blocks and Block information

define("_MI_LX_ENTRIESNEW","Neueste Begriffe");
define("_MI_LX_ENTRIESTOP","Meistgelesene Begriffe");
define("_MI_LX_RANDOMTERM","Zuf&auml;lliger Begriff");
define("_MI_LX_TERMINITIAL","Lexikon Index");
define("_MI_LX_CATS","Lexikon Kategorien");
define("_MI_LX_SPOT","Spotlight Lexikon");
define("_MI_LX_BNAME8","Lexikon  Autoren");
define("_MI_LX_BNAME9","Scrolling Definitions");

define("_MI_LX_ENTRIESNEW","Neueste Begriffe");
define("_MI_LX_ENTRIESTOP","Meistgelesene Begriffe");
define("_MI_LX_RANDOMTERM","Zuf&auml;lliger Begriff");
define("_MI_LX_TERMINITIAL","Lexikon Index");
define("_MI_LX_CATS","Lexikon Kategorien");
define("_MI_LX_SPOT","Lexikon Spotlight");


// Notification event descriptions and mail templates
define('_MI_LX_NOTIFY','Allgemein');
define('_MI_LX_NOTIFYDSC','Benachrichtigungs-Optionen die den aktuellen Eintrag betreffen.');
define('_MI_LX_NOTIFY_CAT','Kategorie');
define('_MI_LX_NOTIFY_CATDSC','Benachrichtigung wenn eine neue Kategorie angelegt worden ist');
define('_MI_LX_NOTIFY_TERM','Definition');
define('_MI_LX_NOTIFY_TERMDSC','Benachrichtigung wenn eine neue Defintion veröffentlicht worden ist');

define('_MI_LX_NEWPOST_NOTIFY','Neuer Eintrag');
define('_MI_LX_NEWPOST_NOTIFYCAP','Benachrichtigung wenn ein neuer Eintrag ver&ouml;ffentlicht worden ist.');
define('_MI_LX_NEWPOST_NOTIFYDSC','Eine Benachrichtigung erhalten wenn ein neuer Artikel ver&ouml;ffentlicht worden ist.');
define('_MI_LX_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Eintrag im Lexikon veröffentlicht');

define('_MI_LX_NEWCAT_NOTIFY','Neue Kategorie');
define('_MI_LX_NEWCAT_NOTIFYCAP','Benachrichtigen wenn eine neue Kategorie angelegt worden ist.');
define('_MI_LX_NEWCAT_NOTIFYDSC','Eine Benachrichtigung erhalten wenn eine neue Kategorie angelegt worden ist.');
define('_MI_LX_NEWCAT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Kategorie im Lexikon');

define('_MI_LX_GLOBAL_TERMSUBMIT_NOTIFY','Neue Definition eingeschickt');
define('_MI_LX_GLOBAL_TERMSUBMIT_NOTIFYCAP','Benachrichtigen wenn eine neue Definition eingeschickt worden ist (noch freizugeben).');
define('_MI_LX_GLOBAL_TERMSUBMIT_NOTIFYDSC','Eine Benachrichtigung erhalten wenn eine neue Definition eingeschickt worden ist, die noch freizugeben ist.');
define('_MI_LX_GLOBAL_TERMSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Definition eingeschickt');

define('_MI_LX_GLOBAL_TERMREQUEST_NOTIFY','Definitions-Anfrage');
define('_MI_LX_GLOBAL_TERMREQUEST_NOTIFYCAP','Benachrichtigen wenn eine Definition angefragt worden ist (noch zu beantworten).');
define('_MI_LX_GLOBAL_TERMREQUEST_NOTIFYDSC','Eine Benachrichtigung erhalten wenn eine Definition eingeschickt worden ist, die noch zu vervollständigen ist.');
define('_MI_LX_GLOBAL_TERMREQUEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Definitions-Anfrage');

define('_MI_LX_CATEGORY_TERMSUBMIT_NOTIFY','Neue Definition eingeschickt');
define('_MI_LX_CATEGORY_TERMSUBMIT_NOTIFYCAP','Benachrichtigen wenn eine neue Definition eingeschickt worden ist (noch freizugeben) f&uuml;r die aktuelle Kategorie.');
define('_MI_LX_CATEGORY_TERMSUBMIT_NOTIFYDSC','Eine Benachrichtigung erhalten wenn eine neue Definition eingeschickt worden ist (noch freizugeben) f&uuml;r die aktuelle Kategorie.');
define('_MI_LX_CATEGORY_TERMSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Definition eingeschickt f&uuml;r die aktuelle Kategorie');

define('_MI_LX_CATEGORY_NEWTERM_NOTIFY','Neue Definition');
define('_MI_LX_CATEGORY_NEWTERM_NOTIFYCAP','Benachrichtigung wenn ein neuer Eintrag in der aktuellen Kategorie ver&ouml;ffentlicht worden ist.');
define('_MI_LX_CATEGORY_NEWTERM_NOTIFYDSC','Eine Benachrichtigung erhalten wenn ein neuer Eintrag in der aktuellen Kategorie ver&ouml;ffentlicht worden ist .');
define('_MI_LX_CATEGORY_NEWTERM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: neuer Eintrag in der Kategorie');

define('_MI_LX_TERM_APPROVE_NOTIFY','Begriff Freigegeben');
define('_MI_LX_TERM_APPROVE_NOTIFYCAP','Benachrichtigung wenn meine Einsendung freigegeben wurde.');
define('_MI_LX_TERM_APPROVE_NOTIFYDSC','Eine Benachrichtigung erhalten wenn meine Einsendung freigegeben wurde.');
define('_MI_LX_TERM_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Einsendung freigegeben');

?>