<?php
/**
 * $Id: main.php v 1.15 02 july 2004 Liquid Exp $
 * Module: PD-Downloads
 * Version: v1.0
 * Release Date: 04. M�rz 2005
 * Author: Power-Dreams Team
 * Licence: GNU
 */

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_PDD_NAME' ) ) {

	// Module Info
	// The name of this module
	define("_MI_PDD_NAME","PD-Downloads");

	// A brief description of this module
	define("_MI_PDD_DESC","Erstellt eine Download-Sektion in der User Downloaden, Bewerten und übertragen können.");

	// Names of blocks for this module (Not all module has blocks)
	define("_MI_PDD_BNAME1","Aktuelle Downloads");
	define("_MI_PDD_BNAME2","Top Downloads");

	// Sub menu titles
	define("_MI_PDD_SMNAME1","Einsenden");
	define("_MI_PDD_SMNAME2","Populär");
	define("_MI_PDD_SMNAME3","Best bewertet");
	define("_MI_PDD_SMNAME4","Meine Downloads");

	// Names of admin menu items
	define("_MI_PDD_BINDEX","Hauptindex");
	define("_MI_PDD_INDEXPAGE","Index Seitenverwaltung");
	define("_MI_PDD_MCATEGORY","Kategorien");
	define("_MI_PDD_MDOWNLOADS","Downloads");
	define("_MI_PDD_MUPLOADS","Bilder");
	define("_MI_PDD_MMIMETYPES","Mimetypes");
	define("_MI_PDD_PERMISSIONS","Berechtigungseinstellungen");
	define("_MI_PDD_BLOCKADMIN","Block Einstellungen");
	define("_MI_PDD_MVOTEDATA","Bewertungen");

	// Title of config items
	define('_MI_PDD_POPULAR','Popularitätszähler');
	define('_MI_PDD_POPULARDSC','Anzahl an Downloads, bevor eine Downloaddatei als populär gilt');

	//Display Icons
	define("_MI_PDD_ICONDISPLAY","Populäre und Neue Downloads:");
	define("_MI_PDD_DISPLAYICONDSC","Wie sollen populäre und neue Downloads markiert werden.");
	define("_MI_PDD_DISPLAYICON1","Zeige als Icon");
	define("_MI_PDD_DISPLAYICON2","Zeige als Text");
	define("_MI_PDD_DISPLAYICON3","Nicht zeigen");

	define("_MI_PDD_DAYSNEW","Dauer Status <b>NEU</b> in Tagen:");
	define("_MI_PDD_DAYSNEWDSC","Anzahl an Tagen, die ein Download als <b>NEU</b> markiert bleibt.");
	define("_MI_PDD_DAYSUPDATED","Dauer Status <b>UPDATE</b> in Tagen:");
	define("_MI_PDD_DAYSUPDATEDDSC","Anzahl an Tagen, die ein Download als <b>UPDATE</b> markiert bleibt.");

	define("_MI_PDD_SHOWDLONINDEX","Neueste Downloads auf der Modul-Startseite anzeigen?");
	define("_MI_PDD_SHOWDLONINDEXDSC","Zeigt die neuesten Downloads auf der Module-Startseite an.");

	define('_MI_PDD_PERPAGE','Anzahl von Downloads pro Seite:');
	define('_MI_PDD_PERPAGEDSC','Maximale Anzahl von Downloads die auf jeder Seite dargestellt werden');

	define('_MI_PDD_USESHOTS','Screenshots anzeigen?');
	define('_MI_PDD_USESHOTSDSC','Wähle <b>Ja</b> um Screenshots für jeden Download anzuzeigen');
	define('_MI_PDD_SHOTWIDTH','Bildattribut *width* [in px]');
	define('_MI_PDD_SHOTWIDTHDSC','Maximale Breite (width) des Screenshot/Thumbnails');
	define('_MI_PDD_SHOTHEIGHT','Bildattribut *height* [in px]');
	define('_MI_PDD_SHOTHEIGHTDSC','Maximale Höhe (height) des Screenshot/Thumbnails');
	define('_MI_PDD_CHECKHOST','Unterbinde direkte Downloadverlinkung? (leeching)');
	define('_MI_PDD_REFERERS','Folgende Seite darf direkt auf die Downloads linken<br />Separiert mit <b>#</b>');
	define("_MI_PDD_ANONPOST","Anonyme Einsendungen:");
	define("_MI_PDD_ANONPOSTDSC","Anonymen Usern erlauben, Downloads zu posten?");
	define('_MI_PDD_AUTOAPPROVE','Automatische Downloadfreigabe:');
	define('_MI_PDD_AUTOAPPROVEDSC','Neue Downloads ohne (Admin-)überprüfung in die Datenbank übernehmen?');
	define('_MI_PDD_AUTOAPPROVEFORALL','Downloads automatisch für ALLE freigeben:');
	define('_MI_PDD_AUTOAPPROVEFORALLDSC','<b>JA</b> - Alle Gruppen und Anonyme haben automatisch Zugriff auf den Download.<br><b>NEIN</b> - Nur die Gruppen \'Webmaster\'und \'Registrierte Mitglieder\' haben automatisch Zugriff auf den Download.');

	define('_MI_PDD_MAXFILESIZE','Maximale Uploadgrä&szlig;e [in KB]');
	define('_MI_PDD_MAXFILESIZEDSC','Maximale Dateigrö&szlig;e die per Upload möglich sein soll.');
	define('_MI_PDD_IMGWIDTH','Maximale Breite von Bildern');
	define('_MI_PDD_IMGWIDTHDSC','Maximal erlaubte Breite (width) eines Bildes, dass hochgeladen werden darf');
	define('_MI_PDD_IMGHEIGHT','Maximale Höhe von Bildern');
	define('_MI_PDD_IMGHEIGHTDSC','Maximal erlaubte Höhe (height) eines Bildes, dass hochgeladen werden darf');

	define('_MI_PDD_UPLOADDIR','Uploadverzeichnis');
	define('_MI_PDD_ALLOWSUBMISS','User Einsendungen:');
	define('_MI_PDD_ALLOWSUBMISSDSC','User dürfen Downloads übermitteln?');
	define('_MI_PDD_ALLOWUPLOADS','User Uploads:');
	define('_MI_PDD_ALLOWUPLOADSDSC','Dürfen User Dateien und Screenshots uploaden?');
	define('_MI_PDD_SCREENSHOTS','Uploadverzeichnis für Screenshots');
	define('_MI_PDD_CATEGORYIMG','Uploadverzeichnis für Kategoriebilder');
	define('_MI_PDD_MAINIMGDIR','Hauptbilderverzeichnis');
	define('_MI_PDD_USETHUMBS','Thumbnails:');
	define('_MI_PDD_USETHUMBSDSC','Unterstützte Dateitypen: <b>JPG, GIF, PNG</b>.<br /><br />Zu den Downloads gehörende Bilder werden als Thumbnails dargestellt. Falls der Server das Resizen von Bildern nicht unterstützt, sollte dieser Wert auf <b>\'Nein\'</b> gesetzt werden.');
	define('_MI_PDD_DATEFORMAT','Datumsformat/Zeitstempel:');
	define('_MI_PDD_DATEFORMATDSC','Wähle Datumformat für PD-Downloads:');
	define('_MI_PDD_SHOWDISCLAIMER','übermittlungsbestimmungen (Disclaimer)');
	define('_MI_PDD_SHOWDISCLAIMERDSC','Zeige Uploadbestimmungen vor der Dateiübermittlung durch User?');
	define('_MI_PDD_SHOWDOWNDISCL','Downloadbestimmungen (Disclaimer)');
	define('_MI_PDD_SHOWDOWNDISCLDSC','Zeige Downloadbestimmungen vor dem Download?');
	define('_MI_PDD_DISCLAIMER','Disclaimertext für übertragung eingeben:');
	define('_MI_PDD_DOWNDISCLAIMER','Disclaimertext für den Download eingeben:');
	define('_MI_PDD_PLATFORM','Plattform eingeben:');
	define('_MI_PDD_SUBCATS','Unterkategorien:');
	define('_MI_PDD_VERSIONTYPES','Versionsstatus:');
	define('_MI_PDD_LICENSE','Lizenz auswählen:');

	define("_MI_PDD_SUBMITART","Download Einsendungen:");
	define("_MI_PDD_SUBMITARTDSC","Gruppe auswählen, die neue Downloads übermitteln darf:");

	define("_MI_PDD_IMGUPDATE","Update Thumbnails?");
	define("_MI_PDD_IMGUPDATEDSC","Thumbnails bei jedem Seitenaufruf aktualisieren. Anderenfalls wird immer das erste übermittelte (gecachte) Thumbnail verwendet.<br /><br />");
	define("_MI_PDD_QUALITY","Thumbnail Qualität: ");
	define("_MI_PDD_QUALITYDSC","Niedrigste:0 Höchste:100");
	define("_MI_PDD_KEEPASPECT","Seitenverhältnis (Ratio)");
	define("_MI_PDD_KEEPASPECTDSC","Seitenverhältnis (Ratio) der Bilder beibehalten?");
	define("_MI_PDD_ADMINPAGE","Anzahl darzustellender Downloads im Adminbereich:");
	define("_MI_PDD_AMDMINPAGEDSC","Anzahl der neuen Dateien die im Adminbereich dargestellt werden.");
	define("_MI_PDD_ARTICLESSORT","Darstellung der Downloads, sortiert nach:");
	define("_MI_PDD_ARTICLESSORTDSC","Select the default order for the download listings.");
	define("_MI_PDD_TITLE","Titel");
	define("_MI_PDD_RATING","Bewertung");
	define("_MI_PDD_WEIGHT","Gewichtung");
	define("_MI_PDD_POPULARITY","Popularität");
	define("_MI_PDD_SUBMITTED2","Einsendedatum");
	define('_MI_PDD_COPYRIGHT','Copyright anzeigen?');
	define('_MI_PDD_COPYRIGHTDSC','Copyright Statement auf der Downloadseite anzeigen?');
	// Description of each config items
	define('_MI_PDD_PLATFORMDSC','Neue Einträge durch <b>|</b>(Pipe) trennen.<br/><b>WICHTIG</b>: Werden nachträglich Einträge verändert, oder zwischengeschoben, verschieben sich die entsprechenden Einträge aller Downloads. Entsprechend neue Einträge sind am Ende anzufügen! Diese wirken sich nicht aus.');
	define('_MI_PDD_SUBCATSDSC','Ja auswählen, um Unterkategorien anzuzeigen. Falls \'Nein\' ausgewählt wird, werden Unterkategorien nicht gelistet.');
	define('_MI_PDD_LICENSEDSC','Neue Einträge durch <b>|</b>(Pipe) trennen.<br/><b>WICHTIG</b>: Werden nachträglich Einträge verändert, oder zwischengeschoben, verschieben sich die entsprechenden Einträge aller Downloads. Entsprechend neue Einträge sind am Ende anzufügen! Diese wirken sich nicht aus.');
	define('_MI_PDD_RSS','RSS Feeds pro Kategorie einschalten?');
	define('_MI_PDD_RSSDSC','Wenn <b>JA</b> ausgewählt wird, dann wird der Kategorieninhalt via RSS-Feed zugänglich.');

	// Text for notifications
	define('_MI_PDD_GLOBAL_NOTIFY','Global');
	define('_MI_PDD_GLOBAL_NOTIFYDSC','Globale Download-Benachrichtigungsoptionen.');

	define('_MI_PDD_CATEGORY_NOTIFY','Kategorie');
	define('_MI_PDD_CATEGORY_NOTIFYDSC','Benachrichtigungsoptionen der aktuellen Kategorie.');

	define('_MI_PDD_FILE_NOTIFY','Datei');
	define('_MI_PDD_FILE_NOTIFYDSC','Benachrichtigungsoptionen der aktuellen Datei.');

	define('_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFY','Neue Kategorie');
	define('_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFYCAP','Benachrichtigung wenn eine neue Dateikategorie angelegt wird.');
	define('_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFYDSC','Benachrichtigung erhalten, wenn eine neue Dateikategorie angelegt wird.');
	define('_MI_PDD_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Neue Kategorie wurde erstellt');

	define('_MI_PDD_GLOBAL_FILEMODIFY_NOTIFY','Dateiänderung angefragt');
	define('_MI_PDD_GLOBAL_FILEMODIFY_NOTIFYCAP','Benachrichtigung bei Dateiänderungsmeldung.');
	define('_MI_PDD_GLOBAL_FILEMODIFY_NOTIFYDSC','Benachrichtigung erhalten, wenn eine Dateiänderung gemeldet wird.');
	define('_MI_PDD_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Dateiänderungsanfrage');

	define('_MI_PDD_GLOBAL_FILEBROKEN_NOTIFY','Defekter Downloadlink übermittelt');
	define('_MI_PDD_GLOBAL_FILEBROKEN_NOTIFYCAP','Benachrichtigung bei gemeldeten defekten Downloads.');
	define('_MI_PDD_GLOBAL_FILEBROKEN_NOTIFYDSC','Benachrichtigung erhalten, wenn ein defekter Download gemeldet wird.');
	define('_MI_PDD_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Defekter Downloadlink übermittelt');

	define('_MI_PDD_GLOBAL_FILESUBMIT_NOTIFY','Neue Datei übermittelt');
	define('_MI_PDD_GLOBAL_FILESUBMIT_NOTIFYCAP','Benachrichtigung bei (wartenden) neuen gemeldeten Downloads.');
	define('_MI_PDD_GLOBAL_FILESUBMIT_NOTIFYDSC','Benachrichtigung erhalten, wenn (wartende) neue Downloads gemeldet werden.');
	define('_MI_PDD_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Neue Datei übermittelt');

	define('_MI_PDD_GLOBAL_NEPDILE_NOTIFY','Neue Datei');
	define('_MI_PDD_GLOBAL_NEPDILE_NOTIFYCAP','Benachrichtigung wenn neuer Download gemeldet wird.');
	define('_MI_PDD_GLOBAL_NEPDILE_NOTIFYDSC','Benachrichtigung erhalten, wenn ein neuer Download gemeldet wird.');
	define('_MI_PDD_GLOBAL_NEPDILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Neue Datei');

	define('_MI_PDD_CATEGORY_FILESUBMIT_NOTIFY','Datei in aktueller Kategorie gemeldet');
	define('_MI_PDD_CATEGORY_FILESUBMIT_NOTIFYCAP','Benachrichtigung bei (wartenden) neuen Downloads für die aktuelle Kategorie.');
	define('_MI_PDD_CATEGORY_FILESUBMIT_NOTIFYDSC','Benachrichtigung erhalten, wenn (wartende) neue Downloads für die aktuelle Kategorie gemeldet werden.');
	define('_MI_PDD_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Datei in aktueller Kategorie gemeldet');

	define('_MI_PDD_CATEGORY_NEPDILE_NOTIFY','Neue Datei in Kategorie');
	define('_MI_PDD_CATEGORY_NEPDILE_NOTIFYCAP','Benachrichtigung wenn neuer Download in die aktuelle Kategorie aufgenommen wird.');
	define('_MI_PDD_CATEGORY_NEPDILE_NOTIFYDSC','Benachrichtigung erhalten, wenn ein neuer Download in die aktuelle Kategorie aufgenommen wird.');
	define('_MI_PDD_CATEGORY_NEPDILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Neue Datei in Kategorie');

	define('_MI_PDD_FILE_APPROVE_NOTIFY','Datei freigegeben');
	define('_MI_PDD_FILE_APPROVE_NOTIFYCAP','Benachrichtigung wenn Datei freigegeben wird.');
	define('_MI_PDD_FILE_APPROVE_NOTIFYDSC','Benachrichtigung erhalten, wenn die Datei freigegeben wird.');
	define('_MI_PDD_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Datei freigegeben');

	define('_MI_PDD_AUTHOR_INFO',"Entwickler Information");
	define('_MI_PDD_AUTHOR_NAME',"Entwickler");
	define('_MI_PDD_AUTHOR_WEBSITE',"Entwickler Website");
	define('_MI_PDD_AUTHOR_EMAIL',"Entwickler-Email");
	define('_MI_PDD_AUTHOR_CREDITS',"Credits");
	define('_MI_PDD_MODULE_DEVINFO',"Module Development Information");
	define('_MI_PDD_MODULE_INFO',"Module Information");
	define('_MI_PDD_MODULE_STATUS',"Entwicklungsstatus");
	define('_MI_PDD_MODULE_DISCLAIMER',"Disclaimer");
	define('_MI_PDD_RELEASE',"Veröffentlichungsdatum: ");

	define('_MI_PDD_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY Power-Dreams \"AS IS\" AND \"WITH ALL FAULTS.\"
Power-Dreams MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, ABLEMEDIA MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN Power-Dreams WEBSITE. IN NO
EVENT WILL ABLEMEDIA BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
Power-Dreams HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

	define('_MI_PDD_AUTHOR_CREDITSTEXT',"The Power-Dreams Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />
Frankblack, King76, baerchen, mcleines, gibaphp, Michael and all Beta-Testers.");
	define('_MI_PDD_AUTHOR_BUGFIXES',"Version History");

	define('_MI_PDD_DIVIDECATEGORY',"Anzahl der Kategorien die nebeneinander angezeigt werden:");
	define('_MI_PDD_DIVCATDSC',"Wie häufig sollen die Kategorien nebeneinander anzeigt werden.");
	define('_MI_PDD_DIVSUBCAT',"Anzahl der Sub-Kategorien die nebeneinander angezeigt werden:");
	define('_MI_PDD_DIVSUBCATDSC',"Wie häufig sollen die Sub-Kategorien nebeneinander anzeigt werden.");
}
?>