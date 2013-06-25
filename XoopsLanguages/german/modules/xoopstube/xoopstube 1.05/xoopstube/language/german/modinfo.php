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


// Module Info
// The name of this module
define("_MI_XTUBE_NAME", "XoopsTube");

// A brief description of this module
define("_MI_XTUBE_DESC", "Integriere Videos von YouTube in deiner Seite.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_XTUBE_BNAME1", "Neuste Videos (t)");
define("_MI_XTUBE_BNAME2", "Neuste Videos");
define("_MI_XTUBE_BNAME3", "Top Videos (t)");
define("_MI_XTUBE_BNAME4", "Top Videos");
define("_MI_XTUBE_BNAME5", "Neuste Videos (h)");
define("_MI_XTUBE_BNAME6", "Zufällige Videos");
define("_MI_XTUBE_BNAME7", "Zufällige Videos (h)");

// Sub menu titles
define("_MI_XTUBE_SMNAME1", "Absenden");
define("_MI_XTUBE_SMNAME2", "Populär");
define("_MI_XTUBE_SMNAME3", "Top Bewertet");
define("_MI_XTUBE_SMNAME4", "Letzte");

// Names of admin menu items
define("_MI_XTUBE_BINDEX", "Index");
define("_MI_XTUBE_INDEXPAGE", "Index Seitenverwaltung");
define("_MI_XTUBE_MCATEGORY", "Kategorieverwaltung");
define("_MI_XTUBE_MVIDEOS", "Videoverwaltung");
define("_MI_XTUBE_MUPLOADS", "Bilder hochladen");
define("_MI_XTUBE_PERMISSIONS", "Berechtigungseinstellungen");
define("_MI_XTUBE_BLOCKADMIN", "Blockeinstellungen");
define("_MI_XTUBE_MVOTEDATA", "Abstimmungen");

// Title of config items
define('_MI_XTUBE_POPULAR', 'Video Popularitäts Zähler');
define('_MI_XTUBE_POPULARDSC', 'Die Anzahl der Zugriffe bevor ein Video den Status populär erhält.');

define("_MI_XTUBE_ICONDISPLAY", "Videos populär and neu:");
define("_MI_XTUBE_DISPLAYICONDSC", "Wie soll das Populär und Neu Icon angezeigt werden.");
define("_MI_XTUBE_DISPLAYICON1", "Anzeige als Symbol");
define("_MI_XTUBE_DISPLAYICON2", "Anzeige als Text");
define("_MI_XTUBE_DISPLAYICON3", "Nicht anzeigen");

define("_MI_XTUBE_DAYSNEW", "Neues Video:");
define("_MI_XTUBE_DAYSNEWDSC", "Wie viele Tage soll ein Video den Status NEU haben.");

define("_MI_XTUBE_DAYSUPDATED", "Aktualisiertes Video:");
define("_MI_XTUBE_DAYSUPDATEDDSC", "Wie viele Tage soll ein Video den Status AKTUALISIERT haben.");

define('_MI_XTUBE_PERPAGE', 'Anzahl Videos:');
define('_MI_XTUBE_PERPAGEDSC', 'Wie viele Videos sollen pro Kategorie angezeigt werden.');

define("_MI_XTUBE_ADMINPAGE", "Anzahl Videos Admin:");
define("_MI_XTUBE_AMDMINPAGEDSC", "Wie viele Videos sollen in der Administration angezeigt werden.");

define("_MI_XTUBE_ARTICLESSORT", "Standard Video Sortierung:");
define("_MI_XTUBE_ARTICLESSORTDSC", "Wähle die Standard Sortierung der Videos.");

define("_MI_XTUBE_SORTCATS", "Sortiert nach Kategorien:");
define("_MI_XTUBE_SORTCATSDSC", "Wie sollen Kategorien und Unterkategorien sortiert werden.");

define('_MI_XTUBE_SUBCATS', 'Unterkategorien:');
define('_MI_XTUBE_SUBCATSDSC', 'Wähle JA um Unterkategorien anzuzeigen. Bei NEIN werden keine Unterkategorien angezeigt');

define('_MI_XTUBE_EDITOR', "Editor (Admin):");
define('_MI_XTUBE_EDITORCHOICE', "Wähle den Editor für den Administrator. Ohne installierte Editoren können nur die Standard Editoren gewählt werden (z.B. DHTML und Compact");
define('_MI_XTUBE_EDITORUSER', "Editor (Mitglied):");
define('_MI_XTUBE_EDITORCHOICEUSER', "Wähle den Editor für die Mitglieder. Ohne installierte Editoren können nur die Standard Editoren gewählt werden (z.B. DHTML und Compact");
define("_MI_XTUBE_FORM_DHTML", "DHTML");
define("_MI_XTUBE_FORM_COMPACT", "Compact");
define("_MI_XTUBE_FORM_SPAW", "Spaw Editor");
define("_MI_XTUBE_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_XTUBE_FORM_FCK", "FCK Editor");
define("_MI_XTUBE_FORM_KOIVI", "Koivi Editor");
define("_MI_XTUBE_FORM_TINYEDITOR", "TinyEditor");

define('_MI_XTUBE_USESHOTS', 'Zeige Screenshots ?');
define('_MI_XTUBE_USESHOTSDSC', 'Bei Ja werden für jedes Video Screenshots angezeigt');

define('_MI_XTUBE_USETHUMBS', 'Benutze Vorschaubilder:');
define("_MI_XTUBE_USETHUMBSDSC", "Erlaubete Dateitypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>XoopsTube wird Vorschaubilder erstellen. Setzte diese Einstellung auf Nein falls der Server das erstellen von Vorschaubildern nicht gestattet.</div>");

define("_MI_XTUBE_IMGUPDATE", "Aktualisiere Vorschaubilder?");
define("_MI_XTUBE_IMGUPDATEDSC", "Bei Ja wir bei jedem Seitenaufruf das Bild neu erstellt, ansonsten wird immer das erste erstellte verwendet. <br /><br />");

define('_MI_XTUBE_SHOTWIDTH', 'Screenshot Breite');
define('_MI_XTUBE_SHOTWIDTHDSC', 'Die Breite des Screenshots');

define('_MI_XTUBE_SHOTHEIGHT', 'Screenshot Höhe');
define('_MI_XTUBE_SHOTHEIGHTDSC', 'Die Höhe des Screenshots');

define('_MI_XTUBE_MAINIMGDIR', 'Bilder Ordner');

define('_MI_XTUBE_CATEGORYIMG', 'Kategorie Bild Ordner');

define('_MI_XTUBE_DATEFORMAT', 'Timestamp:');
define('_MI_XTUBE_DATEFORMATDSC', 'Standard Zeitstempel für XoopsTube');

define("_MI_XTUBE_TOTALCHARS", "Anzahl Zeichen für die Beschreibung?");
define("_MI_XTUBE_TOTALCHARSDSC", "Anzahl Zeichen für die Beschreibung auf er Index Seite.");

define("_MI_XTUBE_OTHERVIDEOS", "Zeige andere Videos des Einsenders?");
define("_MI_XTUBE_OTHERVIDEOSDSC", "Bei Ja werden die Videos des Einsenders angezeigt.");

define("_MI_XTUBE_SHOWSBOOKMARKS", "Zeige Social Bookmarks?");
define("_MI_XTUBE_SHOWSBOOKMARKSDSC", "Bei Ja werden die Social Bookmark Icons unter dem Video angezeigt.");

define("_MI_XTUBE_USEMETADESCR", "Generiere Meta Description:");
define("_MI_XTUBE_USEMETADSC", "Mit dieser Option basieren die Meta Description auf der Video Beschreibung.");

define("_MI_XTUBE_USERTAGDESCR", "Mitglied kann Tags eingeben:");
define("_MI_XTUBE_USERTAGDSC", "Bei Ja dürfen zum Video Tags definiert werden.");

define('_MI_XTUBE_SHOWDISCLAIMER', 'Zeige Ausschlussklausel vor der Einsendung?');
define('_MI_XTUBE_SHOWDISCLAIMERDSC', '');

define('_MI_XTUBE_DISCLAIMER', 'Einsendungs Ausschlussklausel Text:');

define('_MI_XTUBE_SHOWVIDEODISCL', 'Zeige Ausschlussklausel vor öffnen eines Videos?');
define('_MI_XTUBE_SHOWVIDEODISCLDSC', '');

define('_MI_XTUBE_VIDEODISCLAIMER', 'Video Ausschlussklausel Text:');

define('_MI_XTUBE_COPYRIGHT', 'Copyright Hinweis:');
define('_MI_XTUBE_COPYRIGHTDSC', 'Bei Ja wird der Copyright Hinweis audf der Video Seite angezeigt.');

define('_MI_XTUBE_CHECKHOST', 'Verbiete direktes Video Linking? (leeching)');
define('_MI_XTUBE_REFERERS', 'Diese Seite These sites can directly video to your videos <br />Separate with #');
define("_MI_XTUBE_ANONPOST", "Anonyme Einsendung:");
define("_MI_XTUBE_ANONPOSTDSC", "Erlaube Videos anonym hochzuladen?");
define('_MI_XTUBE_AUTOAPPROVE', 'Autom. Freigabe von eingesendeten Videos');
define('_MI_XTUBE_AUTOAPPROVEDSC', 'Wenn die Videos ohne Moderation freigegeben werden sollen.');

define('_MI_XTUBE_MAXFILESIZE', 'Upload Größe (KB)');
define('_MI_XTUBE_MAXFILESIZEDSC', 'Maximum Video Größe bei Video Uploads.');
define('_MI_XTUBE_IMGWIDTH', 'Upload Bilder Breite');
define('_MI_XTUBE_IMGWIDTHDSC', 'Maximale Bilderbreite bei Video Upload');
define('_MI_XTUBE_IMGHEIGHT', 'Upload Bilder Höhe');
define('_MI_XTUBE_IMGHEIGHTDSC', 'Maximale Bilderhöhe bei Video Upload');

define('_MI_XTUBE_UPLOADDIR', 'Upload Ordner (Ohne abschlie&szuml;enden Slash)');
define('_MI_XTUBE_ALLOWSUBMISS', 'Mitgliedereinsendung:');
define('_MI_XTUBE_ALLOWSUBMISSDSC', 'Erlaube Mitgliedern neu Videos einzusenden');
define('_MI_XTUBE_ALLOWUPLOADS', 'Mitglieder Uploads:');
define('_MI_XTUBE_ALLOWUPLOADSDSC', 'Erlaube Mitgliedern Videos direkt auf deinen Webspace zu laden');
define('_MI_XTUBE_SCREENSHOTS', 'Screenshots Upload Ordner');

define("_MI_XTUBE_SUBMITART", "Video Einsendung:");
define("_MI_XTUBE_SUBMITARTDSC", "Wähle Gruppe die Videos einsenden darf.");
define("_MI_XTUBE_RATINGGROUPS", "Video Bewertung:");
define("_MI_XTUBE_RATINGGROUPSDSC", "Wähle Guppe die Videos Bewerten darf.");

define("_MI_XTUBE_QUALITY", "Vorschaubild Qualität:");
define("_MI_XTUBE_QUALITYDSC", "Qualität Niedrig: 0 Hoch: 100");
define("_MI_XTUBE_KEEPASPECT", "Behalte Bild Proportionen?");
define("_MI_XTUBE_KEEPASPECTDSC", "");

define("_MI_XTUBE_TITLE", "Titel");
define("_MI_XTUBE_RATING", "Abstimmung");
define("_MI_XTUBE_WEIGHT", "Gewichtung");
define("_MI_XTUBE_POPULARITY", "Popularität");
define("_MI_XTUBE_SUBMITTED2", "Einsende Datum");

// Text for notifications
define('_MI_XTUBE_GLOBAL_NOTIFY', 'Allgemein');
define('_MI_XTUBE_GLOBAL_NOTIFYDSC', 'Allgemeine Optionen für Benachrichtigungen.');
define('_MI_XTUBE_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_XTUBE_CATEGORY_NOTIFYDSC', 'Benachrichtigungsoptionen geltend für die aktuelle Kategorie.');
define('_MI_XTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_XTUBE_FILE_NOTIFYDSC', 'Benachrichtigungsoptionen geltend für das aktuelle Video.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Neue Kategorie');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Benachrichtigen, wenn eine neue Kategorie angelegt wurde.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Benachrichtigung wenn eine neue Video-Kategorie angelegt wird.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neue Video-Kategorie');

define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Anfrage zur Videoänderung');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Benachrichtigen bei jeder Anfrage zur Videoänderung.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Benachrichtigung bei jeder Anfrage für eine Linkänderung.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Videoänderung angefragt');

define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Defektes Video gemeldet');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Benachrichtigung bei gemeldeten defekten Videos.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Benachrichtigung wenn ein defektes Video gemeldet wurde.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Defektes Video gemeldet');

define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video eingereicht');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeteten Videos.');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Benachrichtigung bei neuen gemeldeteten Videos, die auf Freigabe warten.');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video eingereicht');

define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Neues Video');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Benachrichtigung bei neuen Videos.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Benachrichtigung, wenn ein neues Video eingetragen wurde.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video');

define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Neues Video');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeteten Videos in der aktuellen Kategorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Benachrichtigung, wenn Videos in der aktuellen Kategorie auf Freigabe warten.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video eingereicht in Kategorie');

define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Neues Video');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Benachrichtigung bei neuen Videos in der aktuellen Kategorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Benachrichtigung, wenn ein neues Video in der aktuellen Kategorie eingetragen wurde.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video in Kategorie');

define('_MI_XTUBE_VIDEO_APPROVE_NOTIFY', 'Video freigegeben');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Benachrichtigung wenn das Video freigegeben ist.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Benachrichtigung wenn das Video durch Moderatoren freigegeben ist');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Video freigegeben');

define('_MI_XTUBE_AUTHOR_INFO', "Entwickler Information");
define('_MI_XTUBE_AUTHOR_NAME', "Entwickler");
define('_MI_XTUBE_AUTHOR_DEVTEAM', "Entwickler Team");
define('_MI_XTUBE_AUTHOR_WEBSITE', "Entwickler Webseite");
define('_MI_XTUBE_AUTHOR_EMAIL', "Entwickler E-Mail");
define('_MI_XTUBE_AUTHOR_CREDITS', "Danksagung");
define('_MI_XTUBE_MODULE_INFO', "Modul Entwickler Information");
define('_MI_XTUBE_MODULE_STATUS', "Entwickler Status");
define('_MI_XTUBE_MODULE_DEMO', "Demo Seite");
define('_MI_XTUBE_MODULE_SUPPORT', "Official Support Seite");
define('_MI_XTUBE_MODULE_BUG', "Melde einen Fehler im Modul");
define('_MI_XTUBE_MODULE_FEATURE', "Melde ein neues Feature für das Modul");
define('_MI_XTUBE_MODULE_DISCLAIMER', "Ausschlussklausel");
define('_MI_XTUBE_RELEASE', "Release Datum: ");

define('_MI_XTUBE_MODULE_MAILLIST', "WF-Project E-Mail Liste");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTS', "Announcements Mailing List");
define('_MI_XTUBE_MODULE_MAILBUGS', "Bug Mailing List");
define('_MI_XTUBE_MODULE_MAILFEATURES', "Features Mailing List");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Get the latest announcements from WF-Project.");
define('_MI_XTUBE_MODULE_MAILBUGSDSC', "Bug Tracking and submission mailing list");
define('_MI_XTUBE_MODULE_MAILFEATURESDSC', "Request New Features mailing list.");

define('_MI_XTUBE_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY MCDONALD \"AS IS\" AND \"WITH ALL FAULTS.\"
MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN McDonalds Store WEBSITE. IN NO
EVENT WILL MCDONALD BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
MCDONALD HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_XTUBE_AUTHOR_CREDITSTEXT', "WF-Projekt Team");
define('_MI_XTUBE_AUTHOR_BUGFIXES', "Fehler History");

define('_MI_XTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_XTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_XTUBE_FORM_DHTMLEXT", "erweiterter DHTML");

// Version 1.03
define('_MI_XTUBE_DATEFORMATADMIN', 'Datumformat Administration:');
define('_MI_XTUBE_DATEFORMATADMINDSC', 'Standard Datumanzeige für XoopsTube');

// Version 1.04 RC-1
define('_MI_XTUBE_VIDEODIR', 'Videoupload Ordner:');
define('_MI_XTUBE_VIDEODIRDSC', 'Setze den Ordner für die XoopsTube Videodateien');
define('_MI_XTUBE_VIDEOIMGDIR', 'Vorschaubilder Ordner:');
define('_MI_XTUBE_VIDEOIMGDIRDSC', 'Setzte den Ordner für die XoopsTube Videovorschaubilder');
define('_MI_XTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_XTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player by LongTail Video (Jeroen Wijering)');
define('_MI_XTUBE_VUPLOADS', 'Videoupload');
define('_MI_XTUBE_CATEGORYIMGDSC', '');
define('_MI_XTUBE_MAINIMGDIRDSC', '');
define("_MI_XTUBE_BNAME8", "Banner");

// Version 1.04 RC-2
define('_MI_XTUBE_MODULE_MANUAL', 'Anleitung');
define('_MI_XTUBE_MODULE_MANUALWIKI', 'Wiki Anleitung');
define('_MI_XTUBE_MODULE_REQUESTNEWFEATURE', 'Neu Funktion anfragen');
define('_MI_XTUBE_MODULE_SUBMITBUG', 'Fehlerbericht senden');
define("_MI_XTUBE_BNAME9", "XoopsTube Tag Cloud");
define("_MI_XTUBE_BNAME10", "XoopsTube Top Tags");
define('_MI_XTUBE_FLVPLAYER_MANUAL', 'FLV Player Manual');
define('_MI_XTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define("_MI_XTUBE_CATCOLUMNS", "Select amount of category columns:");
define("_MI_XTUBE_CATCOLUMNSDSC", "Select the amount of columns, default is 2");
define("_MI_XTUBE_RATINGDISPLAY", "Display rating features?");
define("_MI_XTUBE_RATINGDISPLAYDSC", "Select <em>Yes</em> to display the Rating features. Select <em>No</em> if you don't want to display the Rating features.");
define("_MI_XTUBE_AUTOPLAY", "Autoplay the video");
define("_MI_XTUBE_AUTOPLAYDSC", "Select <em>Yes</em> to have the videoclips play automatically.");
define('_MI_XTUBE_VERSION', 'Version');
define('_MI_XTUBE_LICENSE', 'License');
define('_MI_XTUBE_LICENSEDSC', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).');
