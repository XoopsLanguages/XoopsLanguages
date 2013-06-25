<?php

/**
 * Module: XoopsTube
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Xoopstube
 * @author          XOOPS Development Team
 * @copyright       2001-2013 The XOOPS Project
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @version         $Id$
 * @link            http://sourceforge.net/projects/xoops/
 * @since           1.0.6
 */

define("_AM_XTUBE_WARNINSTALL1", "WARNUNG: Verzeichnis %s existiert auf dem Server! <br />Aus Sicherheitsgründen sollte das Verzeichnis gelöscht werden.");
define("_AM_XTUBE_WARNINSTALL2", "WARNUNG: Datei %s existiert auf dem Server! <br />/>Aus Sicherheitsgründen sollte das Verzeichnis gelöscht werden.");
define("_AM_XTUBE_WARNINSTALL3", "WARNUNG: Ordner %s ist auf dem Server nicht vorhanden. <br />Dieser Ordner wird von XoopsTube benötigt.");

define("_AM_XTUBE_MODULE_NAME", "XoopsTube");

define("_AM_XTUBE_BMODIFY", "Ändern");
define("_AM_XTUBE_BDELETE", "Löschen");
define("_AM_XTUBE_BCREATE", "Anlegen");
define("_AM_XTUBE_BADD", "Hinzufügen");
define("_AM_XTUBE_BAPPROVE", "Freigeben");
define("_AM_XTUBE_BIGNORE", "Ignorieren");
define("_AM_XTUBE_BCANCEL", "Abbrechen");
define("_AM_XTUBE_BSAVE", "Speichern");
define("_AM_XTUBE_BRESET", "Zurücksetzen");
define("_AM_XTUBE_BMOVE", "Videos bewegen");
define("_AM_XTUBE_BUPLOAD", "Hochladen");
define("_AM_XTUBE_BDELETEIMAGE", "Ausgewähltes Bild löschen");
define("_AM_XTUBE_BRETURN", "Zurück zur vorherigen Seite!");
define("_AM_XTUBE_DBERROR", "Datenbank Zugriffsfehler: Bitte diesen Fehler an die WF-Project Website weiterleiten");
// Other Options
define("_AM_XTUBE_TEXTOPTIONS", "Text Optionen:");
define("_AM_XTUBE_DISABLEHTML", " HTML Tags abschalten");
define("_AM_XTUBE_DISABLESMILEY", " Smilies abschalten");
define("_AM_XTUBE_DISABLEXCODE", " ImpressCMS Codes abschalten");
define("_AM_XTUBE_DISABLEIMAGES", " Bilder abschalten");
define("_AM_XTUBE_DISABLEBREAK", " ImpressCMS Zeilenumbruch verwenden?");
define("_AM_XTUBE_UPLOADFILE", "Video erfolgreich hochgeladen");
define("_AM_XTUBE_NOMENUITEMS", "Keine Menueinträge innerhalb des Menüs");
// Admin Bread crumb
define("_AM_XTUBE_PREFS", "Voreinstellungen");
define("_AM_XTUBE_BUPDATE", "Modul Update");
define("_AM_XTUBE_BINDEX", "Hauptindex");
define("_AM_XTUBE_BPERMISSIONS", "Berechtigungen");
// define("_AM_XTUBE_BLOCKADMIN","Blocks");
define("_AM_XTUBE_BLOCKADMIN", "Blockeinstellungen");
define("_AM_XTUBE_GOMODULE", "Zum Modul");
define("_AM_XTUBE_ABOUT", "Über XoopsTube");
// Admin Summary
define("_AM_XTUBE_SCATEGORY", "Kategorie: ");
define("_AM_XTUBE_SFILES", "Videos: ");
define("_AM_XTUBE_SNEWFILESVAL", "Eingesandt: ");
define("_AM_XTUBE_SMODREQUEST", "Geändert: ");
define("_AM_XTUBE_SREVIEWS", "Rezensionen: ");

// Admin Main Menu
define("_AM_XTUBE_MCATEGORY", "Kategorieverwaltung");
define("_AM_XTUBE_MVIDEOS", "Videoverwaltung");
define("_AM_XTUBE_MLISTBROKEN", "Liste der defekten Videos");
define("_AM_XTUBE_MLISTPINGTIMES", "Anzeige der Videos Pingtime");
define("_AM_XTUBE_INDEXPAGE", "Index Seitenverwaltung");
define("_AM_XTUBE_MCOMMENTS", "Kommentare");
define("_AM_XTUBE_MVOTEDATA", "Bewertungsdaten");
define("_AM_XTUBE_MUPLOADS", "Bild hochladen");

// Catgeory defines
define("_AM_XTUBE_CCATEGORY_CREATENEW", "Neue Kategorie erstellen");
define("_AM_XTUBE_CCATEGORY_MODIFY", "Kategorie ändern");
define("_AM_XTUBE_CCATEGORY_MOVE", "Videos aus Kategorie verschieben");
define("_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Kategorietitel:");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Verschieben fehlgeschlagen: In diese Kategorie kann nicht verschoben werden!");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Verschieben fehlgeschlagen: Kategorie konnte nicht gefunden werden!");
define("_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Video verschoben und Kategorie gelöscht");
define("_AM_XTUBE_CCATEGORY_CREATED", "Neue Kategorie erstellt und Datenbank erfolgreich aktualisiert");
define("_AM_XTUBE_CCATEGORY_MODIFIED", "Ausgewählte Kategorie geändert und Datenbank erfolgreich aktualisiert");
define("_AM_XTUBE_CCATEGORY_DELETED", "Ausgewählte Kategorie gelöscht und Datenbank erfolgreich aktualisiert");
define("_AM_XTUBE_CCATEGORY_AREUSURE", "WARNUNG: Soll die gewählte Kategorie mit ALLEN Dateien und Kommentaren wirklich gelöscht werden?");
define("_AM_XTUBE_CCATEGORY_NOEXISTS", "Sie müssen zuerst eine Kategorie anlegen, bevor Sie ein Video hinzufügen können");
define("_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Zugriffsrechte Kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wählen Sie die Benutzergruppe, die Zugrifsrechte auf die Kategorie haben soll.</span></div>");
define("_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Zugriffsrechte Unterkategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wählen Sie die Benutzergruppe, die Zugrifsrechte auf die Unterkategorie haben soll.</span></div>");
define("_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Moderationsrechte für Kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wählen Sie die Benutzergruppe, die Moderationsrechte auf die Kategorie haben soll.</span></div>");

define("_AM_XTUBE_FCATEGORY_TITLE", "Kategorietitel:");
define("_AM_XTUBE_FCATEGORY_WEIGHT", "Kategoriegewichtung:");
define("_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Setze als Unterkategorie von:");
define("_AM_XTUBE_FCATEGORY_CIMAGE", "Kategoriebild auswählen:");
define("_AM_XTUBE_FCATEGORY_DESCRIPTION", "Kategoriebeschreibung:");
define("_AM_XTUBE_FCATEGORY_SUMMARY", "Kategoriezusammenfassung:");
/**
 * Index page Defines
 */
define("_AM_XTUBE_IPAGE_UPDATED", "Indexseite geändert und Datenbank erfolgreich aktualisiert!");
define("_AM_XTUBE_IPAGE_INFORMATION", "Indexseite Information");
define("_AM_XTUBE_IPAGE_MODIFY", "Indexseite ändern");
define("_AM_XTUBE_IPAGE_CIMAGE", "Indexbild wählen:");
define("_AM_XTUBE_IPAGE_CTITLE", "Indextitel:");
define("_AM_XTUBE_IPAGE_CHEADING", "Headerbereich Indexseite:");
define("_AM_XTUBE_IPAGE_CHEADINGA", "Ausrichtung Headerbereich Indexseite :");
define("_AM_XTUBE_IPAGE_CFOOTER", "Fußbereich Indexseite:");
define("_AM_XTUBE_IPAGE_CFOOTERA", "Ausrichtung Fußbereich Indexseite :");
define("_AM_XTUBE_IPAGE_CLEFT", "Linksbündig");
define("_AM_XTUBE_IPAGE_CCENTER", "Mittig");
define("_AM_XTUBE_IPAGE_CRIGHT", "Rechtsbündig");
/**
 * Permissions defines
 */
define("_AM_XTUBE_PERM_MANAGEMENT", "Berechtigungsverwaltung");
define("_AM_XTUBE_PERM_PERMSNOTE", "<div><span style='font-weight: bold;'>Beachte:</span>, Bitte beachten Sie, daß obwohl die Berechtigungen hier korrekt gesetzt sein mögen, eine Gruppe dennoch keine Ansicht- und/oder Zugriffsrechte haben kann wenn entsprechende Modul-Rechte fehlen. Diese Rechte können unter <span style='font-weight: bold;'>System > Gruppen</span> eingestellt werden. Dort die entsprechende Gruppe auswählen und die passenden Rechte setzen.</div>");
define("_AM_XTUBE_PERM_CPERMISSIONS", "Kategorieberechtigungen");
define("_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Kategorien auswählen, die jede Gruppe sehen kann");
define("_AM_XTUBE_PERM_CNOCATEGORY", "Berechtigungen können nicht gesetzt werden: Es sind noch keine Kategorien erstellt!");
define("_AM_XTUBE_PERM_FPERMISSIONS", "Video Berechtigungen");
define("_AM_XTUBE_PERM_FNOFILES", "Berechtigungen können nicht gesetzt werden: Es sind noch keine Videos erstellt!");
define("_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Videos auswählen, die jede Gruppe sehen kann");
/**
 * Upload defines
 */
define("_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Bild erfolgreich auf den Server hochgeladen");
define("_AM_XTUBE_VIDEO_NOIMAGEEXIST", "Fehler: Kein Video zum hochladen ausgewählt. Bitte versuchen Sie es noch einmal!");
define("_AM_XTUBE_VIDEO_IMAGEEXIST", "Bild existiert bereits im Upload-Ordner!");
define("_AM_XTUBE_VIDEO_FILEDELETED", "Video wurde gelöscht.");
define("_AM_XTUBE_VIDEO_FILEERRORDELETE", "Fehler beim löschen des Videos: Video nicht auf dem Server vorhanden.");
define("_AM_XTUBE_VIDEO_NOFILEERROR", "Fehler beim löschen des Videos: Kein Video zum löschen ausgewählt.");
define("_AM_XTUBE_VIDEO_DELETEFILE", "WARNUNG: Soll das Bild wirklich gelöscht werden?");
define("_AM_XTUBE_VIDEO_IMAGEINFO", "Server Status");
define("_AM_XTUBE_VIDEO_SPHPINI", "<span style='font-weight: bold;'>Information aus der PHP ini :</span>");
define("_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Safe Mode Status: ");
define("_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: ");
define("_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Server Uploads Status: ");
define("_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Erlaubte max. Uploadgröße: ");
define("_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Erlaubte max. Post-Größe: ");
define("_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (Kann zu Problemen führen)");
define("_AM_XTUBE_VIDEO_GDLIBSTATUS", "GD Library Support: ");
define("_AM_XTUBE_VIDEO_GDLIBVERSION", "GD Library Version: ");
define("_AM_XTUBE_VIDEO_GDON", "<span style='font-weight: bold;'>Eingeschaltet</span> (Vorschaubilder verfügbar)");
define("_AM_XTUBE_VIDEO_GDOFF", "<span style='font-weight: bold;'>Abgeschaltet</span> (Vorschaubilder nicht verfügbar)");
define("_AM_XTUBE_VIDEO_OFF", "<span style='font-weight: bold;'>Aus</span>");
define("_AM_XTUBE_VIDEO_ON", "<span style='font-weight: bold;'>An</span>");
define("_AM_XTUBE_VIDEO_CATIMAGE", "Kategoriebilder");
define("_AM_XTUBE_VIDEO_SCREENSHOTS", "Bildschirmfotos");
define("_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Hauptbilder");
define("_AM_XTUBE_VIDEO_FCATIMAGE", "Pfad zu den Kategoriebildern");
define("_AM_XTUBE_VIDEO_FSCREENSHOTS", "Pfad zu den Bildschirmfotos");
define("_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Pfad zu den Hauptbildern");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Bild hochladen: ");
define("_AM_XTUBE_VIDEO_FUPLOADPATH", "Pfad zum hochladen: ");
define("_AM_XTUBE_VIDEO_FUPLOADURL", "URL-Pfad zum hochladen: ");
define("_AM_XTUBE_VIDEO_FOLDERSELECTION", "Zielordner zum Hochladen auswählen:");
define("_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Ausgewähltes Bild anzeigen:");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Neues Bild zum gewählten Ordner hochladen:");

// Main Index defines
define("_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Zusammenfassung Modul Administration");
define("_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Publizierte Videos:");
define("_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Auto - Publizierte Videos:");
define("_AM_XTUBE_MINDEX_AUTOEXPIRE", "Automatisch abgelaufene Videos:");
define("_AM_XTUBE_MINDEX_EXPIRED", "Abgelaufene Videos:");
define("_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Offline Videos:");
define("_AM_XTUBE_MINDEX_ID", "ID");
define("_AM_XTUBE_MINDEX_TITLE", "Video Titel");
define("_AM_XTUBE_MINDEX_POSTER", "Veröffentlicht von");
define("_AM_XTUBE_MINDEX_ONLINE", "Status");
define("_AM_XTUBE_MINDEX_ONLINESTATUS", "Online Status");
define("_AM_XTUBE_MINDEX_PUBLISH", "Erstellt");
define("_AM_XTUBE_MINDEX_PUBLISHED", "Veröffentlicht");
define("_AM_XTUBE_MINDEX_EXPIRE", "Abgelaufen");
define("_AM_XTUBE_MINDEX_NOTSET", "Datum nicht gesetzt");
define("_AM_XTUBE_MINDEX_SUBMITTED", "Einsendedatum");

define("_AM_XTUBE_MINDEX_ACTION", "Aktion");
define("_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "BEACHTE: Keine Videos vorhanden, die diese Bedingung erfüllen");
define("_AM_XTUBE_MINDEX_PAGE", "<span style='font-weight: bold;'>Seite:<span style='font-weight: bold;'> ");
define('_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>XoopsTube Übersichtsseite Details.</li><li>Sie können hier das Logo, den Kopfbereich, die Hauptüberschrift und den Fußtext leicht Ihren Wünschen anpassen.</li></ul><br />Anmerkung: Das Logo wird bei jedem Seitenaufruf von XoopsTube angezeigt.');
define("_AM_XTUBE_MINDEX_RESPONSE", "Antwortzeit");
// Submitted Links
define("_AM_XTUBE_SUB_SUBMITTEDFILES", "Eingesandte Videos");
define("_AM_XTUBE_SUB_FILESWAITINGINFO", "Information über wartende Videos");
define("_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Videos die auf Überprüfung warten: ");
define("_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<span style='font-weight: bold;'>Freigabe</span> Information Über neue Videos ohne Überprüfung.");
define("_AM_XTUBE_SUB_EDITWAITINGFILE", "<span style='font-weight: bold;'>Ändern</span> Information über neue Videos mit anschließender Freigabe.");
define("_AM_XTUBE_SUB_DELETEWAITINGFILE", "<span style='font-weight: bold;'>Löschen</span> Information über neue Videos.");
define("_AM_XTUBE_SUB_NOFILESWAITING", "Keine Videos vorhanden, die diese Bedingung erfüllen");
define("_AM_XTUBE_SUB_NEWFILECREATED", "Neues Video erstellt und Datenbank erfolgreich aktualisiert");
// Vote Information
define("_AM_XTUBE_VOTE_RATINGINFOMATION", "Bewertungsinformationen");
define("_AM_XTUBE_VOTE_TOTALVOTES", "Stimmen gesamt: ");
define("_AM_XTUBE_VOTE_REGUSERVOTES", "Stimmen durch registrierte Benutzer: %s");
define("_AM_XTUBE_VOTE_ANONUSERVOTES", "Stimmen durch anonyme Benutzer: %s");
define("_AM_XTUBE_VOTE_USER", "Benutzer");
define("_AM_XTUBE_VOTE_IP", "IP - Addresse");
define("_AM_XTUBE_VOTE_DATE", "Eingesandt");
define("_AM_XTUBE_VOTE_RATING", "Bewertung");
define("_AM_XTUBE_VOTE_NOREGVOTES", "Keine Bewertungen durch registrierte Benutzer");
define("_AM_XTUBE_VOTE_NOUNREGVOTES", "Keine Bewertungen durch anonyme Benutzer");
define("_AM_XTUBE_VOTE_VOTEDELETED", "Bewertungen gelöscht.");
define("_AM_XTUBE_VOTE_ID", "ID");
define("_AM_XTUBE_VOTE_FILETITLE", "Videotitel");
define("_AM_XTUBE_VOTE_DISPLAYVOTES", "Bewertungen / Abstimmungen");
define("_AM_XTUBE_VOTE_NOVOTES", "Keine Benutzerstimmen zum anzeigen vorhanden");
define("_AM_XTUBE_VOTE_DELETE", "Keine Benutzerstimmen zum anzeigen vorhanden");
define("_AM_XTUBE_VOTE_DELETEDSC", "<span style='font-weight: bold;'>Löscht</span> die ausgewählte Abstimmung aus der Datenbank.");
define("_AM_XTUBE_VOTEDELETED", "Ausgewählte Abstimmung gelöscht und Datenbank aktualisiert");

define("_AM_XTUBE_VOTE_USERAVG", "Bewertungsdurchschnitt");
define("_AM_XTUBE_VOTE_TOTALRATE", "Gesamtstimmen");
define("_AM_XTUBE_VOTE_MAXRATE", "Max. Stimmen je Eintrag");
define("_AM_XTUBE_VOTE_MINRATE", "Min. Stimmen je Eintrag");
define("_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "Meiste Bewertungen");
define("_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Wenigste Bewertungen");
define("_AM_XTUBE_VOTE_MOSTVOTERSUID", "Aktivster Bewerter");
define("_AM_XTUBE_VOTE_REGISTERED", "Stimmen registrierter Benutzer");
define("_AM_XTUBE_VOTE_NONREGISTERED", "Stimmen anonymer Benutzer");
// Modifications
define("_AM_XTUBE_MOD_TOTMODREQUESTS", "Gesamte Änderungsanfragen: ");
define("_AM_XTUBE_MOD_MODREQUESTS", "Geänderte Videos");
define("_AM_XTUBE_MOD_MODREQUESTSINFO", "Geänderte Videoinformation");
define("_AM_XTUBE_MOD_MODID", "ID");
define("_AM_XTUBE_MOD_MODTITLE", "Titel");
define("_AM_XTUBE_MOD_MODPOSTER", "Originaleinsender: ");
define("_AM_XTUBE_MOD_DATE", "Eingesandt");
define("_AM_XTUBE_MOD_NOMODREQUEST", "Es sind keine Anfragen vorhanden, die dieses Kriterium erfüllen");
define("_AM_XTUBE_MOD_TITLE", "Videotitel: ");
define("_AM_XTUBE_MOD_LID", "Video ID: ");
define("_AM_XTUBE_MOD_CID", "Kategorie: ");
define("_AM_XTUBE_MOD_URL", "Video Url: ");
define("_AM_XTUBE_MOD_PUBLISHER", "Veröffentlicht von: ");
define("_AM_XTUBE_MOD_SCREENSHOT", "Bildschirmfoto: ");
define("_AM_XTUBE_MOD_DESCRIPTION", "Beschreibung: ");
define("_AM_XTUBE_MOD_MODIFYSUBMITTER", "Einsender: ");
define("_AM_XTUBE_MOD_MODIFYSUBMIT", "Einsender");
define("_AM_XTUBE_MOD_PROPOSED", "Vorgeschlagene Videodetails");
define("_AM_XTUBE_MOD_ORIGINAL", "Orginal Videodetails");
define("_AM_XTUBE_MOD_REQDELETED", "Änderungsanfrage aus Datenbank entfernt");
define("_AM_XTUBE_MOD_REQUPDATED", "Ausgewähltes Video geändert und Datenbank erfolgreich aktualisiert");
define('_AM_XTUBE_MOD_VIEW', 'Anzeigen');
// Link management
define("_AM_XTUBE_VIDEO_ID", "Video ID: ");
define("_AM_XTUBE_VIDEO_IP", "IP - Addresse des Einsenders: ");
define("_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: bold;'>Erlaubte Dateiendungen für den Admin</span>:</div>");
define("_AM_XTUBE_VIDEO_MODIFYFILE", "Ändern der Video Information");
define("_AM_XTUBE_VIDEO_CREATENEWFILE", "Neues Video erstellen");
define("_AM_XTUBE_VIDEO_TITLE", "Video Titel: ");
define("_AM_XTUBE_VIDEO_DLVIDID", "Video URL: ");
define("_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<span style='font-size: small;'><span style='font-weight: bold;'>YouTube:</span> http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span><br />
<span style='font-weight: bold;'>MetaCafe:</span> http://www.metacafe.com/watch/<span style='color: #FF0000;'>191543/sperm_whale_encounters_underwater_robot</span>/<br />
<span style='font-weight: bold;'>SPIKE/ifilm:</span> http://www.ifilm.com/video/<span style='color: #FF0000;'>2718605</span><br />
<span style='font-weight: bold;'>Photobucket:</span> http://i39.photobucket.com/albums/<span style='color: #FF0000;'>e168/vailtom/th_BigSquid</span>.jpg<br />
<span style='font-weight: bold;'>Google Video:</span> http://video.google.com/videoplay?docid=<span style='color: #FF0000;'>4761076111111865377</span>&q=rov&total=913&start=...<br />
<span style='font-weight: bold;'>MySpace TV:</span> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<span style='color: #FF0000;'>13171141</span><br />
<span style='font-weight: bold;'>DailyMotion:</span> http://www.dailymotion.com/video/<span style='color: #FF0000;'>x40bhg</span>_blondesecretary_fun<br />
<span style='font-weight: bold;'>Blip.tv </span>embed code<span style='font-weight: bold;'>:</span> http://blip.tv/play/<span style='color: #FF0000;'>Abe6EwA</span> ...<br />
<span style='font-weight: bold;'>ClipFish:</span> http://www.clipfish.de/player.php?videoid=<span style='color: #FF0000;'>MTg1NTYyfDM1Ng</span>%3D%3D<br />
<span style='font-weight: bold;'>LiveLeak:</span> http://www.liveleak.com/view?i=<span style='color: #FF0000;'>a59_1205566630</span><br />
<span style='font-weight: bold;'>Maktoob:</span> file=http://<span style='color: #FF0000;'>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</span>.flv (from embed-code)<br />
<span style='font-weight: bold;'>Veoh:</span> http://www.veoh.com/videos/<span style='color: #FF0000;'>v15069875yApCz7r3</span>?jsonParams=...<br />
<span style='font-weight: bold;'>Vimeo:</span> http://www.vimeo.com/<span style='color: #FF0000;'>2246499</span><br />
<span style='font-weight: bold;'>Megavideo:</span> http://www.megavideo.com/?v=<span style='color: #FF0000;'>J6YSRE0T</span><br />
<span style='font-weight: bold;'>Viddler:</span> http://www.viddler.com/player/<span style='color: #FF0000;'>d32d2b94</span>/ (see embed code)<br />
<span style='font-weight: bold;'>XoopsTube:</span> <span style='color: #FF0000;'>Take over from above selection menu</span></span>");
define("_AM_XTUBE_VIDEO_PICURL", "Bild URL: ");
define("_AM_XTUBE_VIDEO_PICURLNOTE", "<span style='font-size: small;'>Bilder URL wenn das Video von Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler oder Maktoob ist.</span>");
define("_AM_XTUBE_VIDEO_DESCRIPTION", "Videobeschreibung: ");
define("_AM_XTUBE_VIDEO_CATEGORY", "Hauptkategorie des Videos: ");
define("_AM_XTUBE_VIDEO_FILESSTATUS", " Video offline setzen?<br /><br /><span style='font-weight: normal;'>Video ist unsichtbar für alle Benutzer.</span>");
define("_AM_XTUBE_VIDEO_SETASUPDATED", " Video Status setzen als Updated?<br /><br /><span style='font-weight: normal;'>Das Update-Icon wird angezeigt.</span>");
define("_AM_XTUBE_VIDEO_SHOTIMAGE", "Bildschirmfoto des Videos: ");
define("_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Diskussion im Forum hinzufügen?");
define("_AM_XTUBE_VIDEO_PUBLISHDATE", "Veröffentlichungsdatum:");
define("_AM_XTUBE_VIDEO_EXPIREDATE", "Ablaufdatum:");
define("_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Veröffentlichungsdatum entfernen:");
define("_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Ablaufdatum entfernen:");
define("_AM_XTUBE_VIDEO_PUBLISHDATESET", " Veröffentlichungsdatum setzen: ");
define("_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Veröffentlichungsdatum und Zeit setzen");
define("_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Ablaufdatum und Zeit setzen");
define("_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<span style='font-weight: bold;'>Veröffentlichungsdatum setzen: </span>");
define("_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<span style='font-weight: bold;'>Neues Veröffentlichungsdatum setzenSet: </span><br />Veröffentlicht:");
define("_AM_XTUBE_VIDEO_SETPUBDATESETS", "<span style='font-weight: bold;'>Veröffentlichungsdatum setzen: </span><br />Veröffentlicht am:");
define("_AM_XTUBE_VIDEO_EXPIREDATESET", " Ablaufdatum setzen: ");
define("_AM_XTUBE_VIDEO_SETEXPIREDATE", "<span style='font-weight: bold;'>Ablaufdatum setzen: </span>");
define("_AM_XTUBE_VIDEO_DELEDITMESS", "Bericht über defekte Videos löschen?<br /><br /><span style='font-weight: normal;'>Wenn Sie <span style='font-weight: bold;'>JA</span> wählen wird der Bericht automatisch gelöscht. Überprüfen Sie, ob das Video wieder korrekt arbeitet.</span>");
define("_AM_XTUBE_VIDEO_MUSTBEVALID", "Das Bildschirmfoto muss im %s Ordner vorhanden sein (z.B. shot.gif). Leer lassen, wenn kein Bild vorhanden ist.");
define("_AM_XTUBE_VIDEO_EDITAPPROVE", "Video freigeben:");
define("_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Neues Video erstellt und Datenbank erfolgreich aktualisiert");
define("_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "Gewähltes Video geändert und Datenbank erfolgreich aktualisiert");
define("_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Wollen Sie das gewählte Video wirklich löschen?");
define("_AM_XTUBE_VIDEO_FILEWASDELETED", "Video %s erfolgreich aus der Datenbank entfernt!");
define("_AM_XTUBE_VIDEO_FILEAPPROVED", "Video freigegeben und Datenbank erfolgreich aktualisiert");
define("_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<span style='font-weight: bold;'>News Story aus Video erstellen</span>");
define("_AM_XTUBE_VIDEO_SUBMITNEWS", "Artikel aus neuem Video erstellen?");
define("_AM_XTUBE_VIDEO_NEWSCATEGORY", "Newskategorie für Artikel auswählen:");
define("_AM_XTUBE_VIDEO_NEWSTITLE", "News Titel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leer lassen, um den Videotitel zu benutzen</span></div>");
define("_AM_XTUBE_VIDEO_PUBLISHER", "Video veröffentlicht von: ");

/**
 * Broken links defines
 */
define("_AM_XTUBE_SBROKENSUBMIT", "Defekt: ");
define("_AM_XTUBE_BROKEN_FILE", "Bericht über defekte Videos");
define("_AM_XTUBE_BROKEN_FILEIGNORED", "Bericht über defekte Videos ignoriert und erfolgreich aus der Datenbank entfernt!");
define("_AM_XTUBE_BROKEN_NOWACK", "Quittierungsstatus geändert und Datenbank aktualisiert!");
define("_AM_XTUBE_BROKEN_NOWCON", "Bestätigungsstatus geändert und Datenbank aktualisiert!");
define("_AM_XTUBE_BROKEN_REPORTINFO", "Information über defekte Video-Berichte");
define("_AM_XTUBE_BROKEN_REPORTSNO", "Wartende Berichte über defekte Videos:");
define("_AM_XTUBE_BROKEN_IGNOREDESC", "<span style='font-weight: bold;'>Ignoriere</span> den Bericht und lösche nur den Bericht.");
define("_AM_XTUBE_BROKEN_DELETEDESC", "<span style='font-weight: bold;'>Lösche</span> die betroffenen Videodaten und den Report.");
define("_AM_XTUBE_BROKEN_EDITDESC", "<span style='font-weight: bold;'>Ändere</span> das Video, um das Problem zu beseitigen.");
define("_AM_XTUBE_BROKEN_ACKDESC", "<span style='font-weight: bold;'>Quittieren</span> Setzt den Quittierungsstatus für den Bericht über defekte Videos.");
define("_AM_XTUBE_BROKEN_CONFIRMDESC", "<span style='font-weight: bold;'>Bestätigt</span> Setzt den Bestätigungsstatus für den Bericht über defekte Videos.");
define("_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Quittiert");
define("_AM_XTUBE_BROKEN_DCONFIRMED", "Bestätigt");

define("_AM_XTUBE_BROKEN_ID", "ID");
define("_AM_XTUBE_BROKEN_TITLE", "Titel");
define("_AM_XTUBE_BROKEN_REPORTER", "Reporter");
define("_AM_XTUBE_BROKEN_FILESUBMITTER", "Einsender");
define("_AM_XTUBE_BROKEN_DATESUBMITTED", "Einsendedatum");
define("_AM_XTUBE_BROKEN_ACTION", "Aktion");
define("_AM_XTUBE_BROKEN_NOFILEMATCH", "Es gibt keinen Bericht über defekte Videos mit dieses kriterien");
define("_AM_XTUBE_BROKENFILEDELETED", "Video und Bericht über defektes Video wurden gelöscht");
define("_AM_XTUBE_BROKEN_VIDSOURCE", "Video Quelle");
/**
 * About defines
 */
define("_AM_XTUBE_BY", "von");
// block defines
define("_AM_XTUBE_BADMIN", "Block Administration");
define("_AM_XTUBE_BLKDESC", "Beschreibung");
define("_AM_XTUBE_TITLE", "Titel");
define("_AM_XTUBE_SIDE", "Ausrichtung");
define("_AM_XTUBE_WEIGHT", "Gewichtung");
define("_AM_XTUBE_VISIBLE", "Sichtbar");
define("_AM_XTUBE_ACTION", "Aktion");
define("_AM_XTUBE_SBLEFT", "Videos");
define("_AM_XTUBE_SBRIGHT", "Rechts");
define("_AM_XTUBE_CBLEFT", "Mitte links");
define("_AM_XTUBE_CBRIGHT", "Mitte rechts");
define("_AM_XTUBE_CBCENTER", "Mitte mittig");
define("_AM_XTUBE_ACTIVERIGHTS", "Active Berechtigungen");
define("_AM_XTUBE_ACCESSRIGHTS", "Zugriffsberechtigungen");
// image admin icon
define("_AM_XTUBE_ICO_EDIT", "Eintrag ändern");
define("_AM_XTUBE_ICO_DELETE", "Eintrag löschen");
define("_AM_XTUBE_ICO_RESOURCE", "Resource editieren");

define("_AM_XTUBE_ICO_ONLINE", "Online");
define("_AM_XTUBE_ICO_OFFLINE", "Offline");
define("_AM_XTUBE_ICO_APPROVED", "Bestätigt");
define("_AM_XTUBE_ICO_NOTAPPROVED", "Nicht bestätigt");

define("_AM_XTUBE_ICO_VIDEO", "Verwandtes Video");
define("_AM_XTUBE_ICO_URL", "Verwandte URL hinzufügen");
define("_AM_XTUBE_ICO_ADD", "Hinzufügen");
define("_AM_XTUBE_ICO_APPROVE", "Bestätigen");
define("_AM_XTUBE_ICO_STATS", "Statistiken");
define("_AM_XTUBE_ICO_VIEW", "Eintrag anzeigen");

define("_AM_XTUBE_ICO_IGNORE", "Ignorieren");
define("_AM_XTUBE_ICO_ACK", "Bericht über defekte Videos quittieren");
define("_AM_XTUBE_ICO_REPORT", "Bericht über defekte Videos quittieren?");
define("_AM_XTUBE_ICO_CONFIRM", "Bericht über defekte Videos bestätigen");
define("_AM_XTUBE_ICO_CONBROKEN", "Bericht über defekte Videos bestätigen?");
define("_AM_XTUBE_ICO_RES", "Editieren Resourcen/Videos für diesen Eintrag");
define("_AM_XTUBE_MOD_URLRATING", "Interent Content Rating:");
// Alternate category
define("_AM_XTUBE_ALTCAT_CREATEF", "Alternative Kategorie hinzufügen");
define("_AM_XTUBE_MALTCAT", "Alternative Kategorieverwaltung");
define("_AM_XTUBE_ALTCAT_MODIFYF", "Alternative Kategorieverwaltung");
define("_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Alternative Kategorien können durch Benutzung dieses Formblatts hinzugefügt oder entfernt werden.</li></ul>");
define('_AM_XTUBE_ALTCAT_CREATED', 'Alternative Kategorien gespeichert!');

define("_AM_XTUBE_MRESOURCES", "Resourcenverwaltung");
define("_AM_XTUBE_RES_CREATED", "Resourcenverwaltung");
define("_AM_XTUBE_RES_ID", "ID");
define("_AM_XTUBE_RES_DESC", "Beschreibung");
define("_AM_XTUBE_RES_NAME", "Resourcenname");
define("_AM_XTUBE_RES_TYPE", "Resourcen Typ");
define("_AM_XTUBE_RES_USER", "Benutzer");
define("_AM_XTUBE_RES_CREATEF", "Resource hinzufügen");
define("_AM_XTUBE_RES_MODIFYF", "Resource ändern");
define("_AM_XTUBE_RES_NAMEF", "Resourcenname:");
define("_AM_XTUBE_RES_DESCF", "Resourcebeschreibung:");
define("_AM_XTUBE_RES_URLF", "Resourcen - URL:");
define("_AM_XTUBE_RES_ITEMIDF", "Resourcen Eintrag ID:");
define("_AM_XTUBE_RES_INFOTEXT", "<ul><li>Neue Resourcen können durch Benutzung dieses Formblatts hinzugefügt oder entfernt werden.</li>
    <li>Auflisten aller verlinkten Resourcen</li>
    <li>Resourcenname und Beschreibung ändern</li></ul>
    ");
define("_AM_XTUBE_LISTBROKEN", "Möglicherweise defekte Videos anzeigen. PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />Überprüfen Sie zuerst die existierenden Videos bevor Sie weiter Aktionen durchführen.<br /><br />");
define("_AM_XTUBE_PINGTIMES", "Zeigt die erste geschätzte Pingzeit für jedes Video.<br /><br />PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />");

define("_AM_XTUBE_NO_FORUM", "Kein Forum ausgewählt");

define("_AM_XTUBE_PERM_RATEPERMISSIONS", "Bewertungsberechtigungen");
define("_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Wählt die Gruppe die Videos in den ausgewählten Kategorien bewerten darf.");

define("_AM_XTUBE_PERM_AUTOPERMISSIONS", "Automatisch freigegebene Videos");
define("_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Wählt die Gruppe die Videos ohne vorherige freigabe durch den Admin einsenden darf.");

define("_AM_XTUBE_PERM_SPERMISSIONS", "Berechtigungen für Einsender");
define("_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Wählt die Gruppe die Videos in die ausgewählten Kategorien einsenden darf.");

define("_AM_XTUBE_PERM_APERMISSIONS", "Moderatoren Gruppe");
define("_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Wählt die Gruppe mit Moderatorenstatus für die ausgewählten Kategorien.");

define("_AM_XTUBE_TIME", "Zeit:");
define("_AM_XTUBE_KEYWORDS", "Schlüsselwörter:");
define("_AM_XTUBE_KEYWORDS_NOTE", "Schlüsselwörter durch Komma trennen (Wort1, Wort2, Wort3, ..)");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta Description");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "In order to help Search Engines, you can customize the meta description you would like to use for this article. if you leave this field empty when creating a category, it will automatically be populated with the Summary field of this article.");

define("_AM_XTUBE_VIDSOURCE", "Video Herkunft:");
define("_AM_XTUBE_VIDSOURCE2", "Video Herkunft");
define("_AM_XTUBE_YOUTUBE", "YouTube");
define("_AM_XTUBE_METACAFE", "MetaCafe");
define("_AM_XTUBE_IFILM", "Spike");
define("_AM_XTUBE_GOOGLEVIDEO", "Google Video");
define("_AM_XTUBE_MYSPAVETV", "MySpace TV");
define("_AM_XTUBE_PHOTOBUCKET", "Photobucket");
define("_AM_XTUBE_DAILYMOTION", "DailyMotion");

// Version 1.04 RC-1
define("_AM_XTUBE_BLIPTV", "Blip.tv");
define("_AM_XTUBE_XOOPSTUBE", "XoopsTube");
define("_AM_XTUBE_ICO_EXPIRE", "Abgelaufen");
define("_AM_XTUBE_MXOOPSTUBE", "erstelle XoopsTube Clip");
define("_AM_XTUBE_VIDEO_CATVIDEOIMG", "Vorschaubild des Videos");
define("_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Pfad des Vorschaubildes");
define("_AM_XTUBE_VUPLOAD_VIDEOEXIST", "Video existiert bereits");
define("_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Video hochgeladen");
define("_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "Es existiert kein Video");
define("_AM_XTUBE_VUPLOAD_FILEDELETED", "Video gelöscht");
define("_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Fehler");
define("_AM_XTUBE_VUPLOAD_NOFILEERROR", "Keine Datei");
define("_AM_XTUBE_VUPLOAD_DELETEFILE", "Lösche Video Datei");
define("_AM_XTUBE_VUPLOAD_CATVIDEO", "Video Dateien");
define("_AM_XTUBE_VUPLOAD_FCATVIDEO", "Videoupload Ordner");
define("_AM_XTUBE_VUPLOADS", "Video Upload");
define("_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Videoupload Pfad:");
define("_AM_XTUBE_VUPLOAD_FUPLOADURL", "Videoupload URL:");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Videoupload: ");
define("_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Zielordner zum hochladen auswählen");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Video zum upload");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Wähle eine Videodatei");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Videodatei muss vom Type FLV sein");
define("_AM_XTUBE_BDELETEVIDEO", "Lösche Video");
define("_AM_XTUBE_NOVIDEO", "Zeige kein Video");
define("_AM_XTUBE_NOIMAGE", "Zeige kein Bild");
define("_AM_XTUBE_NOSELECT", "Keine Auswahl");
define("_AM_XTUBE_NOFILESELECT", "Keine Datei ausgewählt");
define("_AM_XTUBE_XOOPSTUBEVIDEO", "XoopsTube Video Datei:");
define("_AM_XTUBE_WARNINSTALL4", "<span style='font-weight: bold;'>Achtung:</span> <span style='text-decoration: underline;'>Ordner</span> %s ist nicht beschreibbar. <br />Der Ordner braucht die Berechtigungen (CHMOD 777) für XoopsTube.");
define("_AM_XTUBE_CATSPONSOR", "Wähle Klient:");
define("_AM_XTUBE_CATSPONSORDSC", "Wird ein Kient ausgewählt so werden alle zugeordneten Banner im Wechsel angezeigt,<br /> somit ist die Auswahl eines Banners im nächsten Feld nicht nötig und wird ggf. nicht gespeichert.");
define("_AM_XTUBE_BANNER", "Banner");
define("_AM_XTUBE_FBANNER", "Banner");
define("_AM_XTUBE_BANNERID", "Wähle Banner ID:");
define("_AM_XTUBE_BANNERIDDSC", "Wenn oben ein Klient gewählt wurde wird die Banner ID nicht gespeichert!");
// Uploader class
define("_AM_XTUBE_READWRITEERROR", "Es wurde keine Datei zum Upload ausgewählt oder der Server hat Lese/Schreibporbleme mit dieser Datei!");
define("_AM_XTUBE_INVALIDFILESIZE", "Falsche Dateigrö&szuml;e");
define("_AM_XTUBE_FILENAMEEMPTY", "Kein Dateiname");
define("_AM_XTUBE_NOFILEUPLOAD", "Keine Datei hochgeladen. Es gibt Fehler");
define("_AM_XTUBE_UPLOADERRORZERO", "Es gibt ein Problem beim Upload. Fehler: 0");
define("_AM_XTUBE_UPLOADERRORONE", "Die Datei zum Upload ist zu gross. Fehler: 1");
define("_AM_XTUBE_UPLOADERRORTWO", "Die Datei zum Upload ist zu gross. Fehler: 2");
define("_AM_XTUBE_UPLOADERRORTHREE", "Die Datei wurde nur teilweise hochgeladen. Fehler:: 3");
define("_AM_XTUBE_UPLOADERRORFOUR", "Keine Datei zum Upload gewählt. Fehler: 4");
define("_AM_XTUBE_UPLOADERRORFIVE", "Keine Datei zum Upload gewählt. Fehler: 5");
define("_AM_XTUBE_NOUPLOADDIR", "Uploadordner wurde nicht gewählt");
define("_AM_XTUBE_FAILOPENDIR", "Fehler beim öffnen der Ordners: ");
define("_AM_XTUBE_FAILOPENDIRWRITEPERM", "Ordner konnte aufgrund fehlerhafter Berechtigung nicht geöffnet werden: ");
define("_AM_XTUBE_FILESIZEMAXSIZE", "Dateigrö&szuml;e: %u. Maximal erlaubte Grö&szuml;e: %u");
define("_AM_XTUBE_FILESIZEMAXWIDTH", "Videobreite: %u. Maximal erlaubte Breite: %u");
define("_AM_XTUBE_FILESIZEMAXHEIGHT", "Videohöhe: %u. Maximal erlaubte Höhe: %u");
define("_AM_XTUBE_MIMENOTALLOW", "MIME Typ nicht erlaubt: ");
define("_AM_XTUBE_FAILEDUPLOADING", "Fehler beim Dateiupload: ");
define("_AM_XTUBE_ALREADYEXISTTRYAGAIN", " existiert bereits auf dem Server. Bitte Datei umbenennen und nochmals hochladen.<br />");
define("_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Fehler während des Datentransfers zurückgegeben</h4>");
define("_AM_XTUBE_DOESNOTEXIST", " existiert nicht!");

// Version 1.04 RC-2
define("_AM_XTUBE_CLIPFISH", "ClipFish");
define("_AM_XTUBE_LIVELEAK", "LiveLeak");
define('_AM_XTUBE_MAKTOOB', 'Maktoob');
define('_AM_XTUBE_VEOH', 'Veoh');
define("_AM_XTUBE_FILE", "Datei ");
define("_AM_XTUBE_INFORMATION", "Video-Infos");
define("_AM_XTUBE_VIDEO_DLVIDIDDSC", "Benutzen Sie den roten Teil, wie im unteren Beispiel");
define("_AM_XTUBE_VIDEO_VIEWS", "angesehen: ");
define("_AM_XTUBE_ERROR_CATISCAT", "Sie können eine Kategorie nicht als eine Unterkategorie von sich selbst setzen!");

// Version 1.04 RC-3
define("_AM_XTUBE_MOD_VIDID", "Video ID-Code: ");
define("_AM_XTUBE_MOD_VIDSOURCE", "Video Quelle: ");
define("_AM_XTUBE_MOD_TIME", "Zeit: ");
define("_AM_XTUBE_MOD_KEYWORDS", "Schlüsselwörter: ");
define("_AM_XTUBE_MOD_ITEM_TAG", "Tags: ");
define("_AM_XTUBE_MOD_PICURL", "Bild URL: ");
define("_AM_XTUBE_IPAGE_SHOWLATEST", "Zeige letzte Einträge?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL", "Wie viele Videos sollen dargestellt werden?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL_DSC", "Wenn '0' eingetragen werden, ist die Option ausgeschaltet.");

// Version 1.05 RC-1
define('_AM_XTUBE_VIMEO', 'Vimeo');
define('_AM_XTUBE_MEGAVIDEO', 'Megavideo');
define('_AM_XTUBE_VIDDLER', 'Viddler');
define('_AM_XTUBE_CATTITLE', 'Category');

// 1.06 Beta 2

//Definitions for FileCheck
define("_AM_XTUBE_FILECHECKS",		"Information");
define("_AM_XTUBE_UPLOADMAX",		"Maximum upload size: ");
define("_AM_XTUBE_POSTMAX",			"Maximum post size: ");
define("_AM_XTUBE_UPLOADS",			"Uploads allowed: ");
define("_AM_XTUBE_UPLOAD_ON",		"On");
define("_AM_XTUBE_UPLOAD_OFF",		"Off");
define("_AM_XTUBE_GDIMGSPPRT",		"GD image lib supported: ");
define("_AM_XTUBE_GDIMGON",			"Yes");
define("_AM_XTUBE_GDIMGOFF",		"No");
define("_AM_XTUBE_GDIMGVRSN",		"GD image lib version: ");
define("_AM_XTUBE_UPDATE_SUCCESS", "Updated Successfully");

define("_AM_XTUBE_WARNING", "Warning: ");
define("_AM_XTUBE_NOT_EXISTS", "does NOT exist");
define("_AM_XTUBE_UNABLE_TO_WRITE", "I am unable to write to: ");