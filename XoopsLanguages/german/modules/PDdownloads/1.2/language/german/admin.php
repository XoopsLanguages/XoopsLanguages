<?php
/**
 * $Id: admin.php v 1.22 02 july 2004 Liquid Exp $
 * Module: PD-Downloads
 * Version: v1.0
 * Release Date: 04. M�rz 2005
 * Author: Power-Dreams Team
 * Licence: GNU
 */

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_PDD_BMODIFY' ) ) {

	define("_MD_PDD_NODOWNLOAD","Der Download existiert nicht!");

	// Buttons
	define("_AM_PDD_BMODIFY","Ändern");
	define("_AM_PDD_BDELETE","Löschen");
	define("_AM_PDD_BADD","Hinzufügen");
	define("_AM_PDD_BAPPROVE","Freigeben");
	define("_AM_PDD_BIGNORE","Ignorieren");
	define("_AM_PDD_BCANCEL","Abbrechen");
	define("_AM_PDD_BSAVE","Sichern");
	define("_AM_PDD_BRESET","Zurücksetzen");
	define("_AM_PDD_BMOVE","Dateien verschieben");
	define("_AM_PDD_BUPLOAD","Hochladen");
	define("_AM_PDD_BDELETEIMAGE","Ausgewähltes Bild löschen");
	define("_AM_PDD_BRETURN","Zurück wo Du herkommst!");
	define("_AM_PDD_DBERROR","Datenbank Zugriffs-Fehler: Bitte diesen Fehler einem der Webmaster der PD_Sections Homepage melden");
	//Banned Users
	define("_AM_PDD_NONBANNED","Nicht gebannt");
	define("_AM_PDD_BANNED","Gebannt");
	define("_AM_PDD_EDITBANNED","Gebannte User editieren");
	// Other Options
	define("_AM_PDD_TEXTOPTIONS","Texteinstellungen:");
	define("_AM_PDD_DISABLEHTML"," HTML Tags deaktivieren");
	define("_AM_PDD_DISABLESMILEY"," Smilie Icons deaktivieren");
	define("_AM_PDD_DISABLEXCODE"," XOOPS Code deaktivieren");
	define("_AM_PDD_DISABLEIMAGES"," Bilder deaktivieren");
	define("_AM_PDD_DISABLEBREAK"," XOOPS Zeilenumbruch verwenden?");
	define("_AM_PDD_UPLOADFILE","Datei erfolgreich hochgeladen");
	define("_AM_PDD_NOMENUITEMS","Keine Menüitems innerhalb dieses Menüs");

	// Admin Bread crumb
	define("_AM_PDD_PREFS","Einstellungen");
	define("_AM_PDD_PERMISSIONS","Berechtigungen");
	define("_AM_PDD_BINDEX","Hauptindex");
	define("_MI_PDD_BLOCKADMIN","Block Einstellungen");
	define("_AM_PDD_BLOCKADMIN","Blöcke");
	define("_AM_PDD_GOMODULE","Gehe zu Modul");
	define("_AM_PDD_ABOUT","Über");
	define("_AM_PDD_UANDITOOL","Upgrade and Import Tool");
	// Admin Summary
	define("_AM_PDD_SCATEGORY","Kategorie: ");
	define("_AM_PDD_SFILES","Dateien: ");
	define("_AM_PDD_SNEPDILESVAL","Eingesendet: ");
	define("_AM_PDD_SMODREQUEST","Modifiziert: ");
	// Admin Main Menu
	define("_AM_PDD_MCATEGORY","Kategorien");
	define("_AM_PDD_MDOWNLOADS","Downloads");
	define("_AM_PDD_INDEXPAGE","Index Seitenverwaltung");
	define("_AM_PDD_MMIMETYPES","Mimetypes");
	define("_AM_PDD_MVOTEDATA","Bewertungen");
	define("_AM_PDD_MUPLOADS","Bilder");
	define("_AM_PDD_STATISTIC","Statistik");

	// Catgeory defines
	define("_AM_PDD_CCATEGORY_CREATENEW","Kategorie anlegen");
	define("_AM_PDD_CCATEGORY_MODIFY","Kategorie ändern");
	define("_AM_PDD_CCATEGORY_MOVE","Dateien aus gewählter Kategorie verschieben");
	define("_AM_PDD_CCATEGORY_MODIFY_TITLE","Kategorietitel:");
	define("_AM_PDD_CCATEGORY_MODIFY_FAILED","Verschieben fehlgeschlagen: Diese Kategorie kann nicht verschoben werden!");
	define("_AM_PDD_CCATEGORY_MODIFY_FAILEDT","Verschieben fehlgeschlagen: Kategorie konnte nicht gefunden werden!");
	define("_AM_PDD_CCATEGORY_MODIFY_MOVED","Dateien verschoben und Kategorie gelöscht");
	define("_AM_PDD_CCATEGORY_CREATED","Neue Kategorie angelegt und Datenbank erfolgreich aktualisiert");
	define("_AM_PDD_CCATEGORY_MODIFIED","Gewählte Kategorie geändert und Datenbank erfolgreich aktualisiert");
	define("_AM_PDD_CCATEGORY_DELETED","Gewählte Kategorie gelöscht und Datenbank erfolgreich aktualisiert");
	define("_AM_PDD_CCATEGORY_AREUSURE","WARNUNG: Soll die gewählte Kategorie mit ALLEN Dateien und Kommentaren wirklich gelöscht werden?");
	define("_AM_PDD_CCATEGORY_NOEXISTS","Es muss erst eine Kategorie erstellt werden, bevor Dateien in die Datenbank eingetragen werden können");
	define("_AM_PDD_FCATEGORY_GROUPPROMPT","Kategorie Zugriffsberechtigungen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Bitte Usergruppe auswählen, die zu Zugriff<br/>auf diese Kategorie haben soll.</span></div>");
	define("_AM_PDD_FCATEGORY_TITLE","Titel für Kategorie:");
	define("_AM_PDD_FCATEGORY_WEIGHT","Kategorie-Gewichtung: <div style='padding-top: 8px;'><span style='font-weight: normal;'>Reihenfolge in der die Kategorie auf der Indexseite erscheint<br/>(0=ganz oben)</span></div>");
	define("_AM_PDD_FCATEGORY_SUBCATEGORY","Setze als Subkategorie von:");
	define("_AM_PDD_FCATEGORY_CIMAGE","Kategoriebild auswählen:");
	define("_AM_PDD_FCATEGORY_DESCRIPTION","Beschreibung für Kategorie erstellen:");
	/*
	* Index page Defines
	*/
	define("_AM_PDD_IPAGE_UPDATED","Modul-Startseite geändert und Datenbank erfolgreich aktualisiert!");
	define("_AM_PDD_IPAGE_INFORMATION","Indexseiten - Information");
	define("_AM_PDD_IPAGE_MODIFY","ändere Indexseite");
	define("_AM_PDD_IPAGE_CTITLE","Titel Modulindexseite:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Dieser Subtitel erscheint unterhalb dem gewählten Logo (falls dies ausgewählt wird).</span></div>");
	define("_AM_PDD_IPAGE_CIMAGE","Logo/Bild für Modulindex auswählen:");
	define("_AM_PDD_IPAGE_CHEADING","Headerbereich (Indexseite):");
	define("_AM_PDD_IPAGE_CHEADINGA","Header ausrichten (text-align):");
	define("_AM_PDD_IPAGE_CFOOTER","Footerbereich (Indexseite):");
	define("_AM_PDD_IPAGE_CFOOTERA","Footer ausrichten (text-align):");
	define("_AM_PDD_IPAGE_CLEFT","Links");
	define("_AM_PDD_IPAGE_CCENTER","Center");
	define("_AM_PDD_IPAGE_CRIGHT","Rechts");
	/*
	*  Permissions defines
	*/
	define("_AM_PDD_PERM_MANAGEMENT","Berechtigungs-Management");
	define("_AM_PDD_PERM_PERMSNOTE","<div><b>Es gilt zu beachten</b>, dass obwohl die Berechtigungen hier korrekt gesetzt sein mögen, eine Gruppe dennoch keine Sicht- und/oder Zugriffsrechte haben kann wenn entsprechende Modul-Rechte fehlen. Diese Rechte können unter <b>System > Gruppen</b> eingestellt werden. Dort die entsprechende Gruppe auswählen und die passenden Rechte setzen.</div>");
	define("_AM_PDD_PERM_CPERMISSIONS","Kategorieberechtigungen");
	define("_AM_PDD_PERM_CSELECTPERMISSIONS","Kategorie bestimmen die jeder Gruppe zugänglich ist");
	define("_AM_PDD_PERM_CNOCATEGORY","Berechtigung kann nicht gesetzt werden: Es existieren noch keine Kategorien!");
	define("_AM_PDD_PERM_FPERMISSIONS","Dateiberechtigung");
	define("_AM_PDD_PERM_FNOFILES","Berechtigung kann nicht gesetzt werden: Es existieren noch keine Dateien!");
	define("_AM_PDD_PERM_FSELECTPERMISSIONS","Datei bestimmen die jeder Gruppe zugänglich ist");
	/*
	* Upload defines
	*/
	define("_AM_PDD_DOWN_IMAGEUPLOAD","Bild erfolgreich in entsprechenden Uploadbereich hochgeladen");
	define("_AM_PDD_DOWN_NOIMAGEEXIST","Fehler: Es wurde keine Datei zum Upload ausgewählt. Bitte Vorgang wiederholen!");
	define("_AM_PDD_DOWN_IMAGEEXIST","Bild existiert bereits in diesem Uploadbereich!");
	define("_AM_PDD_DOWN_FILEDELETED","Datei wurde gelöscht.");
	define("_AM_PDD_DOWN_FILEERRORDELETE","Fehler beim Löschen der Datei: Datei existiert nicht auf dem Server.");
	define("_AM_PDD_DOWN_NOFILEERROR","Fehler beim Löschen der Datei: Keine Datei zum Löschen ausgewählt.");
	define("_AM_PDD_DOWN_DELETEFILE","WARNUNG: Soll diese Bilddatei wirklich gelöscht werden?");
	define("_AM_PDD_DOWN_IMAGEINFO","Server Status");
	define("_AM_PDD_DOWN_SPHPINI","<b>Information aus der php.ini:</b>");
	define("_AM_PDD_DOWN_SAFEMODESTATUS","Safe Mode Status: ");
	define("_AM_PDD_DOWN_REGISTERGLOBALS","Register Globals: ");
	define("_AM_PDD_DOWN_SERVERUPLOADSTATUS","Server Uploads Status: ");
	define("_AM_PDD_DOWN_MAXUPLOADSIZE","Maximal erlaubte Uploadgrö&szlig;e: ");
	define("_AM_PDD_DOWN_MAXPOSTSIZE","Maximal erlaubte POST-Grö&szlig;e: ");
	define("_AM_PDD_DOWN_MAXEXECTIME","Maximale Ausführungszeit von Scripten:");
	define("_AM_PDD_DOWN_SAFEMODEPROBLEMS"," (Dadurch kann es zu Problemen kommen)");
	define("_AM_PDD_DOWN_GDLIBSTATUS","GD Library Unterstützung: ");
	define("_AM_PDD_DOWN_GDLIBVERSION","GD Library Version: ");
	define("_AM_PDD_DOWN_GDON","<b>aktiviert</b> (Thumbnails können verwendet werden)");
	define("_AM_PDD_DOWN_GDOFF","<b>deaktiviert</b> (keine Thumbnails möglich)");
	define("_AM_PDD_DOWN_OFF","<b>AUS</b>");
	define("_AM_PDD_DOWN_ON","<b>AN</b>");
	define("_AM_PDD_DOWN_CATIMAGE","Kategoriebilder");
	define("_AM_PDD_DOWN_SCREENSHOTS","Screenshots");
	define("_AM_PDD_DOWN_MAINIMAGEDIR","Hauptbilder");
	define("_AM_PDD_DOWN_FCATIMAGE","Kategoriebilder Pfad");
	define("_AM_PDD_DOWN_FSCREENSHOTS","Screenshots Pfad");
	define("_AM_PDD_DOWN_FMAINIMAGEDIR","Hauptbild Pfad");
	define("_AM_PDD_DOWN_FUPLOADIMAGETO","Bild hochladen: ");
	define("_AM_PDD_DOWN_FUPLOADPATH","Uploadpfad: ");
	define("_AM_PDD_DOWN_FUPLOADURL","Upload-URL: ");
	define("_AM_PDD_DOWN_FOLDERSELECTION","Uploadziel auswählen:");
	define("_AM_PDD_DOWN_FSHOWSELECTEDIMAGE","Zeige ausgewähltes Bild:");
	define("_AM_PDD_DOWN_FUPLOADIMAGE","Neues Bild an die gewählte Stelle hochladen:");

	// Main Index defines
	define("_AM_PDD_MINDEX_DOWNSUMMARY","Zusammenfassung PD-Downloads");
	define("_AM_PDD_MINDEX_PUBLISHEDDOWN","Veröffentlichte Dateien:");
	define("_AM_PDD_MINDEX_AUTOPUBLISHEDDOWN","Dateien mit automatischem Veröffentlichungsdatum:");
	define("_AM_PDD_MINDEX_AUTOEXPIRE","Dateien mit automatischem Ablaufdatum:");
	define("_AM_PDD_MINDEX_EXPIRED","Dateien die abgelaufen sind:");
	define("_AM_PDD_MINDEX_OFFLINEDOWN","Dateien mit Status -Offline-:");
	define("_AM_PDD_MINDEX_ID","ID");
	define("_AM_PDD_MINDEX_TITLE","Titel des Downloads");
	define("_AM_PDD_MINDEX_POSTER","eingesandt von");
	define("_AM_PDD_MINDEX_SUBMITTED","eingesendet am");
	define("_AM_PDD_MINDEX_ONLINESTATUS","Onlinestatus");
	define("_AM_PDD_MINDEX_PUBLISHED","Veröffentlicht");
	define("_AM_PDD_MINDEX_ACTION","Aktion");
	define("_AM_PDD_MINDEX_NODOWNLOADSFOUND","HINWEIS: Es existieren keine Dateien, die den Kriterien entsprechen");
	define("_AM_PDD_MINDEX_PAGE","<b>Seite:<b> ");
	define('_AM_PDD_MINDEX_PAGEINFOTXT','<ul><li>Einstellung der PD-Downloads-Startseite.</li><li>Das Logo, der Sectionsheader- und Footer , usw. können sehr einfach gewechselt werden um dem Look and Feel der gesamten Seite zu entsprechen</li></ul><br /><br />ANMERKUNG: Das hier selektierte Logo wird auf allen (PD-Downloads)Modulseiten erscheinen.');
	define("_AM_PDD_MINDEX_DOWNSEC","in unseren Downloadbereich");
	define("_MD_PDD_NUMBYTES","%s bytes");
	define('_MD_PDD_AVAILABLE','Vorhanden');
	define('_MD_PDD_NOTAVAILABLE','<font color="red">Nicht Vorhanden</font>');
	define("_MD_PDD_CREATEMANUAL","<b>ACHTUNG - Safe Mode ist ein</B>, der Pfad manuell erstellt werden.");
	define("_MD_PDD_CHMODMANUAL","<b>ACHTUNG - Safe Mode ist ein</B>, die Rechte müssen manuell eingestellt werden.");
	define('_MD_PDD_NOTWRITABLE','<font color="red">Nicht beschreibbar</font>');
	define('_MD_PDD_UPLOADPATH','%s werden in diesem Pfad gespeichert');
	define('_MD_PDD_UPLOADPATHINFO','Informationen über die Upload-Pfade');
	define('_MD_PDD_CREATETHEDIR','Erstellen');
	define('_MD_PDD_SETMPERM','Berechtigung setzen');
	define('_MD_PDD_DIRCREATED','Das Verzeichnis wurde erstellt');
	define('_MD_PDD_DIRNOTCREATED','Das Verzeichnis konnte nicht erstellt werden');
	define('_MD_PDD_PERMSET','Die Berechtigung wurde gesetzt');
	define('_MD_PDD_PERMNOTSET','Die Berechtigung konnte nicht gesetzt werden');
	define("_AM_PDD_UPLOADS","Uploads");

	// Submitted Files
	define("_AM_PDD_SUB_SUBMITTEDFILES","übermittelte Dateien");
	define("_AM_PDD_SUB_FILESWAITINGINFO","Wartende Dateien - Informationen");
	define("_AM_PDD_SUB_FILESWAITINGVALIDATION","Dateien die auf Freigabe warten: ");
	define("_AM_PDD_SUB_APPROVEWAITINGFILE","<b>Freigabe</b> - Gibt den neuen Download ohne überprüfung frei.");
	define("_AM_PDD_SUB_EDITWAITINGFILE","<b>Editiere</b> den neuen Download und gebe ihn anschlie&szlig;end frei.");
	define("_AM_PDD_SUB_DELETEWAITINGFILE","<b>Lösche</b> den neuen Download.");
	define("_AM_PDD_SUB_NOFILESWAITING","Es stimmen keine Dateien mit den vorliegenden Kriterien überein");
	define("_AM_PDD_SUB_NEPDILECREATED","Neue Datei erstellt und Datenbank erfolgreich aktualisiert");
	define("_AM_PDD_SUB_WANTTOAPPROVE","Soll der Download, ohne vorherige Prüfung, jetzt freigegeben werden?");
	// Mimetypes
	define("_AM_PDD_MIME_ID","ID");
	define("_AM_PDD_MIME_EXT","EXT");
	define("_AM_PDD_MIME_NAME","Application Type");
	define("_AM_PDD_MIME_ADMIN","Admin");
	define("_AM_PDD_MIME_USER","User");
	// Mimetype Form
	define("_AM_PDD_MIME_CREATEF","Mimetype erstellen");
	define("_AM_PDD_MIME_MODIFYF","Mimetype modifizieren");
	define("_AM_PDD_MIME_EXTF","Dateiendung (Extension):");
	define("_AM_PDD_MIME_NAMEF","Application Type/Name:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Anwendung eintragen, die mit dieser Endung verknüpft werden soll.</span></div>");
	define("_AM_PDD_MIME_TYPEF","Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Jeden Mimetype eingeben, der mit der Endung verknüpft sein soll. Mimetypes durch Leerzeichen trennen.</span></div>");
	define("_AM_PDD_MIME_ADMINF","Erlaubte Admin Mimetypes");
	define("_AM_PDD_MIME_ADMINFINFO","<b>Mimetypes die für Admins-Uploads erlaubt sind:</b>");
	define("_AM_PDD_MIME_USERF","Erlaubte User Mimetypes");
	define("_AM_PDD_MIME_USERFINFO","<b>Mimetypes die für User-Uploads erlaubt sind:</b>");
	define("_AM_PDD_MIME_NOMIMEINFO","Kein Mimetype ausgewählt.");
	define("_AM_PDD_MIME_FINDMIMETYPE","Neuen Mimetype finden:");
	define("_AM_PDD_MIME_EXTFIND","Suche Dateiendung:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Dateiendung eingeben, nach der gesucht werden soll.</span></div>");
	define("_AM_PDD_MIME_INFOTEXT","<ul><li>Neue Mimetypes können mit dieser Form erstellt, editiert oder gelöscht werden.</li>
	<li>Suche nach einem neuen Mimetype über eine externe Website.</li>
	<li>Dargestellte Mimetypes für Admin- und User-Uploads anzeigen.</li>
	<li>ändere Mimetype Uploadstatus.</li></ul>
	");

	// Mimetype Buttons
	define("_AM_PDD_MIME_CREATE","Erstellen");
	define("_AM_PDD_MIME_CLEAR","Zurücksetzen");
	define("_AM_PDD_MIME_CANCEL","Abbrechen");
	define("_AM_PDD_MIME_MODIFY","ändern");
	define("_AM_PDD_MIME_DELETE","Löschen");
	define("_AM_PDD_MIME_FINDIT","Get Extension!");
	// Mimetype Database
	define("_AM_PDD_MIME_DELETETHIS","Delete Selected Mimetype?");
	define("_AM_PDD_MIME_MIMEDELETED","Mimetype %s has been deleted");
	define("_AM_PDD_MIME_CREATED","Mimetype Information Created");
	define("_AM_PDD_MIME_MODIFIED","Mimetype Information Modified");
	// Vote Information
	define("_AM_PDD_VOTE_RATINGINFOMATION","Bewertungs-Information");
	define("_AM_PDD_VOTE_TOTALVOTES","Stimmen insgesamt: ");
	define("_AM_PDD_VOTE_REGUSERVOTES","Stimmen registrierter User: %s");
	define("_AM_PDD_VOTE_ANONUSERVOTES","Stimmen anonymer User: %s");
	define("_AM_PDD_VOTE_USER","User");
	define("_AM_PDD_VOTE_IP","IP Adresse");
	define("_AM_PDD_VOTE_USERAVG","Durchschnitt aller Bewertungen");
	define("_AM_PDD_VOTE_TOTALRATE","Abgegebene Stimmen");
	define("_AM_PDD_VOTE_DATE","eingesendet am");
	define("_AM_PDD_VOTE_RATING","Bewertung");
	define("_AM_PDD_VOTE_NOREGVOTES","Keine Bewertung durch registrierte User");
	define("_AM_PDD_VOTE_NOUNREGVOTES","Keine Bewertung durch anonyme User");
	define("_AM_PDD_VOTE_VOTEDELETED","Bewertung gelöscht.");
	define("_AM_PDD_VOTE_ID","ID");
	define("_AM_PDD_VOTE_FILETITLE","Datei-Titel");
	define("_AM_PDD_VOTE_DISPLAYVOTES","Bewertungen/ Abstimmungsergebnisse");
	define("_AM_PDD_VOTE_NOVOTES","Keine User Bewertungen vorhanden");
	define("_AM_PDD_VOTE_DELETE","Keine User Bewertungen vorhanden");
	define("_AM_PDD_VOTE_DELETEDSC","<b>Löscht</b> die entsprechende Bewertung aus der Datenbank.");
	define("_AM_PDD_VOTEDELETED","Die Bewertung wurde erfolgreich gelöscht.");

	// Modifications
	define("_AM_PDD_MOD_TOTMODREQUESTS","Änderungsanfragen insgesamt: ");
	define("_AM_PDD_MOD_MODREQUESTS","Geänderte Dateien");
	define("_AM_PDD_MOD_MODREQUESTSINFO","Informationen: Geänderte Dateien");
	define("_AM_PDD_MOD_MODID","ID");
	define("_AM_PDD_MOD_MODTITLE","Titel");
	define("_AM_PDD_MOD_MODPOSTER","Original von: ");
	define("_AM_PDD_MOD_DATE","übermittelt von");
	define("_AM_PDD_MOD_NOMODREQUEST","Es existieren keine Anfragen, die den Kriterien entsprechen");
	define("_AM_PDD_MOD_TITLE","Download Titel: ");
	define("_AM_PDD_MOD_LID","Download ID: ");
	define("_AM_PDD_MOD_CID","Kategorie: ");
	define("_AM_PDD_MOD_URL","Download URL: ");
	define("_AM_PDD_MOD_SIZE","Download Grö&szlig;e: ");
	define("_AM_PDD_MOD_PUBLISHER","veröffentlicht von: ");
	define("_AM_PDD_MOD_FEATURES","Features: ");
	define("_AM_PDD_MOD_FORUMID","Forum: ");
	define("_AM_PDD_MOD_DHISTORY","Download History: ");
	define("_AM_PDD_MOD_SCREENSHOT","Screenshot: ");
	define("_AM_PDD_MOD_HOMEPAGE","Homepage: ");
	define("_AM_PDD_MOD_HOMEPAGETITLE","Homepage Titel: ");
	define("_AM_PDD_MOD_VERSION","Version: ");
	define("_AM_PDD_MOD_SHOTIMAGE","Screenshot Bild: ");
	define("_AM_PDD_MOD_FILESIZE","Dateigrö&szlig;e: ");
	define("_AM_PDD_MOD_PLATFORM","Software-Plattform: ");
	define("_AM_PDD_MOD_DESCRIPTION","Beschreibung: ");
	define("_AM_PDD_MOD_REQUIREMENTS","Voraussetzungen: ");
	define("_AM_PDD_MOD_MODIFYSUBMITTER","Eingesandt von: ");
	define("_AM_PDD_MOD_MODIFYSUBMIT","Eingesandt von");
	define("_AM_PDD_MOD_PROPOSED","Vorgeschlagene Downloaddetails");
	define("_AM_PDD_MOD_ORIGINAL","Orginal Downloaddetails");
	define("_AM_PDD_MOD_REQDELETED","Änderungsanfrage aus Datenbank entfernt");
	define("_AM_PDD_MOD_REQUPDATED","Gewählter Download erfolgreich modifiziert und Datenbank aktualisiert");
	define('_AM_PDD_MOD_VIEW','Zeigen');

	//File management
	define("_AM_PDD_FILE_ID","Datei ID: ");
	define("_AM_PDD_FILE_IP","Uploaders IP Adresse: ");
	define("_AM_PDD_FILE_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Erlaubte Admin Dateiendungen</b>:</div>");
	define("_AM_PDD_FILE_MODIFYFILE","Dateiinformationen modifizieren");
	define("_AM_PDD_FILE_CREATENEPDILE","Neuen Download erstellen");
	define("_AM_PDD_FILE_TITLE","Downloadtitel: ");
	define("_AM_PDD_FILE_DLURL","Download-URL (direkter URL): ");
	define("_AM_PDD_FILE_MIRRORURL","Download-Mirror: ");
	define("_AM_PDD_FILE_DESCRIPTION","Beschreibung des Downloads: ");
	define("_AM_PDD_FILE_DUPLOAD"," Datei hochladen:");
	define("_AM_PDD_FILE_DUPLOADSIZE","<br /><br />Erlaubte Dateigröße: ");
	define("_AM_PDD_FILE_CATEGORY","Kategorie auswählen: ");
	define("_AM_PDD_FILE_HOMEPAGETITLE","Homepage Titel: ");
	define("_AM_PDD_FILE_HOMEPAGE","Homepage-URL: ");
	define("_AM_PDD_FILE_SIZE","Dateigröße in KB: ");
	define("_AM_PDD_FILE_VERSION","Dateiversion: ");
	define("_AM_PDD_FILE_PUBLISHER","Veröffentlicht von: ");
	define("_AM_PDD_FILE_PLATFORM","Software Plattform: ");
	define("_AM_PDD_FILE_KEYFEATURES","Features:<br /><br /><span style='font-weight: normal;'>Jedes Feature durch <b>#</b> trennen</span>");
	define("_AM_PDD_FILE_DELEDITMESS","Defektmeldung löschen?<br /><br /><span style='font-weight: normal;'>Wenn Sie <b>JA</b> auswählen wird die Defektmeldung automatisch gelöscht und Sie bestätigen damit auch das der Download jetzt wieder funktioniert.</span>");
	define("_AM_PDD_FILE_HISTORY","Download History bearbeiten:<br /><br /><span style='font-weight: normal;'>In diesem Bereich sollten nur bestehende History-Informationen bearbeitet, oder neue aufgenommen werden.</span>");
	define("_AM_PDD_FILE_HISTORYD","Neue Download History hinzufügen:<br /><br /><span style='font-weight: normal;'>Versionsnummer und Datum werden automatisch hinzugefügt</span>");
	define("_AM_PDD_FILE_HISTORYVERS","<b>Version: </b>");
	define("_AM_PDD_FILE_HISTORDATE"," <b>Aktualisiert:</b> ");
	define("_AM_PDD_FILE_FILESSTATUS"," Download offline setzen?<br /><br /><span style='font-weight: normal;'>Dadurch wird der Download nach Au&szlig;en unsichtbar für die Besucher.</span>");
	define("_AM_PDD_FILE_SETASUPDATED"," Download Status auf Aktualisiert (Updated) setzen?<br /><br /><span style='font-weight: normal;'>Dadurch wird das Updated Icon gesetzt.</span>");
	define("_AM_PDD_FILE_RESETCALLS","Downloadzähler zurücksetzen?");
	define("_AM_PDD_FILE_SHOTIMAGE","Screenshot auswählen: ");
	define("_AM_PDD_FILE_DISCUSSINFORUM","Diskussion in Forum hinzufügen? (Nur Xoopsboard)");
	define("_AM_PDD_FILE_PUBLISHDATE","Veröffentlichungsdatum:");
	define("_AM_PDD_FILE_EXPIREDATE","Ablaufdatum:");
	define("_AM_PDD_FILE_CLEARPUBLISHDATE","<br /><br />Veröffentlichungsdatum entfernen:");
	define("_AM_PDD_FILE_CLEAREXPIREDATE","<br /><br />Ablaufdatum entfernen:");
	define("_AM_PDD_FILE_PUBLISHDATESET"," Veröffentlichungsdatum setzen auf: ");
	define("_AM_PDD_FILE_SETDATETIMEPUBLISH"," Setze Datum/Uhrzeit der Veröffentlichung");
	define("_AM_PDD_FILE_SETDATETIMEEXPIRE"," Setze Datum/Uhrzeit des Ablaufs");
	define("_AM_PDD_FILE_SETPUBLISHDATE","<b>Setze Veröffentlichungsdatum: </b>");
	define("_AM_PDD_FILE_SETNEWPUBLISHDATE","<b>Setze Veröffentlichungsdatum</b><br />");
	define("_AM_PDD_FILE_SETPUBDATESETS","<b>Veröffentlichungsdatum gesetzt auf: </b><br />");
	define("_AM_PDD_FILE_EXPIREDATESET"," Ablaufdatum gesetzt auf: ");
	define("_AM_PDD_FILE_SETEXPIREDATE","<b>Setze Ablaufdatum</b>");
	define("_AM_PDD_FILE_MUSTBEVALID","Gültige Screenshots müssen sich im Verzeichnis %s befinden (z.B. shot.gif). Leer lassen falls kein Bild existiert.");
	define("_AM_PDD_FILE_EDITAPPROVE","Download freigeben:");
	define("_AM_PDD_FILE_NEPDILEUPLOAD","Neue Downloaddatei eingetragen und Datenbank erfolgreich aktualisiert");
	define("_AM_PDD_FILE_FILEMODIFIEDUPDATE","Ausgewählte Datei wurde modifiziert und die Datenbank wurde erfolgreich upgedatet");
	define("_AM_PDD_FILE_REALLYDELETEDTHIS","Soll der Download wirklich gelöscht werden?");
	define("_AM_PDD_FILE_FILEWASDELETED","Downloaddatei %s erfolgreich aus Datenbank entfernt!");
	define("_AM_PDD_FILE_USE_UPLOAD_TITLE"," Nutze Dateinamen als Dateititel.");
	define("_AM_PDD_FILE_FILEAPPROVED","Datei freigegeben und Datenbank erfolgreich aktualisiert");
	define("_AM_PDD_FILE_CREATENEWSSTORY","<b>News Story aus Download erstellen</b>");
	define("_AM_PDD_FILE_SUBMITNEWS","Neue Datei als Artikel übermitteln?");
	define("_AM_PDD_FILE_NEWSCATEGORY","Nachrichten-/Artikelkategorie auswählen:");
	define("_AM_PDD_FILE_NEWSTITLE","Nachrichtentitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leer lassen um Downloaddatei als Artikeltitel zu verwenden</span></div>");
	define('_AM_PDD_ONETHING','Es kann nur in einem Newsmodul aufeinmal eine News veröffentlicht werden!');
	define("_AM_PDD_FILE_SELCAT","Es muss eine Kategorie ausgewählt werden!");
	define("_AM_PDD_FILE_GROUPPROMPT","Download Zugriffsberechtigungen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Bitte Usergruppe auswählen, die Zugriff<br/>auf diesen Download haben soll.</span></div>");

	/*
	* Broken downloads defines
	*/
	define("_AM_PDD_SBROKENSUBMIT","Defekt: ");
	define("_AM_PDD_BROKEN_FILE","Als defekt gemelde Downloads");
	define("_AM_PDD_BROKEN_FILEIGNORED","Die Defektmeldung ignoriert und erfolgreich aus der Datenbank entfernt!");
	define("_AM_PDD_BROKEN_NOWACK","Status *anerkannt* geändert und Datenbank aktualisiert!");
	define("_AM_PDD_BROKEN_NOWCON","Status wurde auf *in Bearbeitung* geändert, Sie werden nun zur Download-Bearbeitung weitergeleitet.");
	define("_AM_PDD_BROKEN_REPORTINFO","Defektmeldungen - Information");
	define("_AM_PDD_BROKEN_REPORTSNO","Wartende Defektmeldungen:");
	define("_AM_PDD_BROKEN_IGNOREDESC","<b>Ignoriere</b> und lösche die Defektmeldung");
	define("_AM_PDD_BROKEN_DELETEDESC","<b>Lösche</b> den gemeldeten Download und die Defektmeldung.");
	define("_AM_PDD_BROKEN_EDITDESC","<b>Editiere</b> den Download um das Problem zu beheben.");
	define("_AM_PDD_BROKEN_ACKDESC","<b>In Bearbeitung</b> - Dieser Download wurde bereits Bearbeitet aber noch nicht als funktionierend deklariert.");
	define("_AM_PDD_BROKEN_CONFIRMDESC","<b>Bestätigt</b> - Setzt den Status der Defektmeldung auf *bestätigt*.");

	define("_AM_PDD_BROKEN_ID","ID");
	define("_AM_PDD_BROKEN_TITLE","Titel");
	define("_AM_PDD_BROKEN_REPORTER","Reporter");
	define("_AM_PDD_BROKEN_FILESUBMITTER","Eingesandt durch");
	define("_AM_PDD_BROKEN_DATESUBMITTED","übermittelt am");
	define("_AM_PDD_BROKEN_ACTION","Aktion");
	define("_AM_PDD_BROKEN_NOFILEMATCH","Es exisitieren keine Defektmeldungen mit den gewählten Kriterien");
	define("_AM_PDD_BROKENFILEDELETED","Downloadbeschreibung und Defektmeldung aus Datenbank entfernt");

	/*
	* About defines
	*/
	define("_AM_PDD_BY","von");

	/*
	* Upgrade and Import Tool defines
	*/
	define("_UI_PDD_INFO","Information");
	define('_UI_PDD_INFOTEXT','<b><u>UPGRADE:</u></b> <ul><li>Die Daten des ausgewählten Modules werden in dieses Modul importiert.</li>
<li>Das ausgewählte Module wird danach automatisch deaktiviert und deinstalliert.</li><li>Das ausgewählte Module muss dann nur noch vom Server gelöscht werden.</li></ul><br>
<b><u>IMPORT:</u></b><ul><li>Die Daten des ausgewählten Modules werden in dieses Modul importiert.</li><li>Das ausgewählte Module bleibt unangetastet und kann weiter verwendet werden.</li></ul><br>
<b>Es wird empfohlen die Upgrade-Funktion nur dann zu nutzen wenn man sich 100%ig sicher ist!</b>');
	define("_UI_PDD_SELMODULE","Modul-Auswahl");
	define("_UI_PDD_CHOOSEMODULE","Module auwählen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Hier wird das Module ausgewählt von dem man Upgraden oder Daten importieren möchte.</span></div>");
	define("_UI_PDD_ACTUALMODUL","Daten werden in dieses Modul übernommen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Daten werden von dem oben ausgewählten Module in dieses Modul übernommen.</span></div>");
	define("_UI_PDD_UPGRADE","Upgraden");
	define("_UI_PDD_IMPORT","Importieren");
	define("_UI_PDD_SUREUPGADE","ACHTUNG: Soll das UPGRADE wirklich durchgeführt werden? <br>Dadurch wird das ausgewählte Module deinstalliert und alle bisher gespeicherten Daten des ausgewählte Modules werden vernichtet.");
	define("_UI_PDD_SUREIMPORT","ACHTUNG: Alle bisher gespeicherten Daten dieses Modules werden gelöscht.");
	define("_UI_PDD_PART","Schritt wird durchgeführt ...");
	define("_UI_PDD_OPTIONS","Zusätzliche Optionen:");
	define("_UI_PDD_WANTCOM","Kommentare übernehmen");
	define("_UI_PDD_WANTNOT","Benachrichtigungseinstellungen übernehmen");
	define("_UI_PDD_WANTPERM","Berechtigungen übernehmen<br><small>(Funktioniert nur mit WF- oder PD-Downloads)</small>");

	//block defines
	define("_AM_PDD_BADMIN","Block Administration");
	define("_AM_PDD_BLKDESC","Beschreibung");
	define("_AM_PDD_TITLE","Titel");
	define("_AM_PDD_SIDE","Ausrichtung");
	define("_AM_PDD_WEIGHT","Gewichtung");
	define("_AM_PDD_VISIBLE","Sichtbarkeit");
	define("_AM_PDD_ACTION","Aktion");
	define("_AM_PDD_SBLEFT","Links");
	define("_AM_PDD_SBRIGHT","Rechts");
	define("_AM_PDD_CBLEFT","Mitte - Links");
	define("_AM_PDD_CBRIGHT","Mitte - Rechts");
	define("_AM_PDD_CBCENTER","Mitte - Mitte");
	define("_AM_PDD_ACTIVERIGHTS","Aktive Berechtigungen");
	define("_AM_PDD_ACCESSRIGHTS","Zugriffs Berechtigungen");

	//image admin icon
	define("_AM_PDD_ICO_EDIT","Objekt editieren");
	define("_AM_PDD_ICO_DELETE","Objekt löschen");
	define("_AM_PDD_ICO_ONLINE","Online");
	define("_AM_PDD_ICO_OFFLINE","Offline");
	define("_AM_PDD_ICO_APPROVED","Bestätigt");
	define("_AM_PDD_ICO_NOTAPPROVED","Nicht bestätigen");

	define("_AM_PDD_ICO_LINK","Verwandte Links");
	define("_AM_PDD_ICO_URL","Verwandten URL hinzufügen");
	define("_AM_PDD_ICO_ADD","Hinzufügen");
	define("_AM_PDD_ICO_APPROVE","Bestätigung");
	define("_AM_PDD_ICO_STATS","Statistiken");

	define("_AM_PDD_ICO_IGNORE","Ignorieren");
	define("_AM_PDD_ICO_ACK","Anerkannte Defektmeldungen");
	define("_AM_PDD_ICO_REPORT","Defektmeldung anerkennen?");
	define("_AM_PDD_ICO_CONFIRM","Defektmeldung bestätigt");
	define("_AM_PDD_ICO_CONBROKEN","Defektmeldung bestätigen?");

	/*
	* Statistic defines
	*/
	define("_AM_PDD_VIEW","Aufrufe");
	define("_AM_PDD_ENTRIES","Einträge");
	define("_AM_PDD_EXPIRED","Abgelaufene Einträge");
	define("_AM_PDD_USENDFROM","Einzigartige Einsender");
	define("_AM_PDD_TOTAL","Insgesamt");
	define("_AM_PDD_DLSTAT","Downloadstatistik");
	define("_AM_PDD_DLSTAT1","Am häuftigsten aufgerufene Downloads");
	define("_AM_PDD_DLSTAT2","Am wenigsten aufgerufene Downloads");
	define("_AM_PDD_DLSTAT3","Am besten bewertete Downloads");
	define("_AM_PDD_CREATERSTAT","Erstellerstatistik");
	define("_AM_PDD_CREATERSTAT1","Am häufigsten aufgerufene Ersteller");
	define("_AM_PDD_CREATERSTAT2","Am besten bewertete Ersteller");
	define("_AM_PDD_CREATERSTAT3","Haben am meisten erstellt");
	define("_AM_PDD_CREATERSTAT4","Anzahl der Einträge");
}
?>