<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 * Format: UTF-8
 */

// Module Info
// The name of this module
define("_MI_WFL_NAME","WF-Links");

// A brief description of this module
define("_MI_WFL_DESC","Stellt eine Link-Sektion zur Verfügung, in der Benutzer Links einstellen und bewerten können.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Neueste WF-Links");
define("_MI_WFL_BNAME2"," Die besten WF-Links");

// Sub menu titles
define("_MI_WFL_SMNAME1","Einsenden");
define("_MI_WFL_SMNAME2","Populär");
define("_MI_WFL_SMNAME3","Am besten bewertet");
define("_MI_WFL_SMNAME4","Letzte Auflistungen");

// Names of admin menu items
define("_MI_WFL_BINDEX","Hauptindex");
define("_MI_WFL_INDEXPAGE","Index Seitenverwaltung");
define("_MI_WFL_MCATEGORY","Kategorieverwaltung");
define("_MI_WFL_MLINKS","Linkverwaltung");
define("_MI_WFL_MUPLOADS","Bilder hochladen");
define("_MI_WFL_PERMISSIONS","Berechtigungen einstellen");
define("_MI_WFL_BLOCKADMIN","Blockeinstellungen");
define("_MI_WFL_MVOTEDATA","Abstimmungen");

// Title of config items
define('_MI_WFL_POPULAR','Link-Populär-Zähler');
define('_MI_WFL_POPULARDSC','Anzahl Klicks, bevor ein Link als populär zählt.');

//Display Icons
define("_MI_WFL_ICONDISPLAY","Links populär und neu:");
define("_MI_WFL_DISPLAYICONDSC","Auswahl, wie ein Link im Listing angezeigt wird.");
define("_MI_WFL_DISPLAYICON1","Anzeige als Icons");
define("_MI_WFL_DISPLAYICON2","Anzeige als Text");
define("_MI_WFL_DISPLAYICON3","Nicht anzeigen");

define("_MI_WFL_DAYSNEW","Links neu (Tage)links Days New:");
define("_MI_WFL_DAYSNEWDSC","Anzahl Tage, wie lange ein Link als neu gilt.");
define("_MI_WFL_DAYSUPDATED","Links updated (Tage):");
define("_MI_WFL_DAYSUPDATEDDSC","Anzahl Tage, wie lange ein Link als neu upgedated gilt.");

define('_MI_WFL_PERPAGE','Link-Listing-Zähler:');
define('_MI_WFL_PERPAGEDSC','Anzahl Links, die in jedem Kategorielisting angezeigt werden.');

define('_MI_WFL_USESHOTS','Bildschirmfotos anzeigen?');
define('_MI_WFL_USESHOTSDSC','Wählen Sie "ja" um Bildschirmfotos für jeden Linkeintrag anzuzeigen');
define('_MI_WFL_SHOTWIDTH','Bildbreite');
define('_MI_WFL_SHOTWIDTHDSC','Bildbreite für das Bildschirmfoto');
define('_MI_WFL_SHOTHEIGHT','Bildhöhe');
define('_MI_WFL_SHOTHEIGHTDSC','Bildhöhe für das Bildschirmfoto');
define('_MI_WFL_CHECKHOST','Direktes Verlinken verbieten? (leeching)');
define('_MI_WFL_REFERERS','Diese Seiten dürfen direkt auf Ihre Links verlinken <br />Aufzählung trennen mit #');
define("_MI_WFL_ANONPOST","Anonyme Einsendungen:");
define("_MI_WFL_ANONPOSTDSC","Dürfen anonyme Benutzer Links einsenden und Inhalte auf Ihre Website hochladen?");
define('_MI_WFL_AUTOAPPROVE','Automatisch freigegebene Links');
define('_MI_WFL_AUTOAPPROVEDSC','Ausgewählt=Alle Links werden ohne weitere Moderation automatisch freigegeben.');

define('_MI_WFL_MAXFILESIZE','Dateigröße zum hochladen (KB)');
define('_MI_WFL_MAXFILESIZEDSC','Legt die maximale Größe für die Datei zum hochladen fest.');
define('_MI_WFL_IMGWIDTH','Bildbreite zum hochladen');
define('_MI_WFL_IMGWIDTHDSC','Maximal erlaubte Bildbreite der hochgeladenen Bilder für die Links');
define('_MI_WFL_IMGHEIGHT','Bildhöhe zum hochladen');
define('_MI_WFL_IMGHEIGHTDSC','Maximal erlaubte Bildhöhe der hochgeladenen Bilder für die Links');

define('_MI_WFL_UPLOADDIR','Verzeichnis zum hochladen (Ohne "/" am Ende!)');
define('_MI_WFL_ALLOWSUBMISS','Einsendungen durch Benutzer:');
define('_MI_WFL_ALLOWSUBMISSDSC','Erlaubt registrierten Benutzern das Einsenden von neuen Links');
define('_MI_WFL_ALLOWUPLOADS','Hochladen durch Benutzer:');
define('_MI_WFL_ALLOWUPLOADSDSC','Erlaubt registrierten Benutzern das hochladen direkt zu Ihrer Website');
define('_MI_WFL_SCREENSHOTS','Verzeichnis für Bildschirmfotos');
define('_MI_WFL_CATEGORYIMG','Verzeichnis zum hochladen für die Kategoriebilder');
define('_MI_WFL_MAINIMGDIR','Haupt- Bildverzeichnis');
define('_MI_WFL_USETHUMBS','Benutzung von Vorschaubildern:');
define("_MI_WFL_USETHUMBSDSC","Unterstützte Dateitypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links benutzt Vorschaubilder für die Bilder. Wählen Sie 'No' um das Orginalbild zu benutzen, falls der Server diese Option nicht unterstützt.</div>");
define('_MI_WFL_DATEFORMAT','Datumsformat:');
define('_MI_WFL_DATEFORMATDSC','Voreingestelltes Datumsformat für WF-links. <br />Siehe <a href="http://docs.php.net/manual/de/function.date.php" target="_blank">PHP-Handbuch</a>');
define('_MI_WFL_SHOWDISCLAIMER','Haftungsausschluss vor Einsendung durch den Benutzer anzeigen?');
define('_MI_WFL_SHOWDISCLAIMERDSC','Einsendebedingungen vor Einsendung durch den Benutzer anzeigen?');
define('_MI_WFL_SHOWLINKDISCL','Haftungsausschluss vor Verlinkung durch den Benutzer anzeigen?');
define('_MI_WFL_SHOWLINKDISCLDSC','Regeln für den Link vor dem öffne des Links anzeigen?');
define('_MI_WFL_DISCLAIMER','Text des Haftungsausschlusses eingeben:');
define('_MI_WFL_LINKDISCLAIMER','Text des Haftungsausschlusses für den Link:');
define('_MI_WFL_SUBCATS','Unterkategorien:');
define("_MI_WFL_SUBMITART","Linkeinsendung:");
define("_MI_WFL_SUBMITARTDSC","Auswahl der Gruppen, die Links einsenden dürfen.");
define("_MI_WFL_RATINGGROUPS","Linkbewertung:");
define("_MI_WFL_RATINGGROUPSDSC","Auswahl der Gruppen, die Links bewerten dürfen.");
define("_MI_WFL_IMGUPDATE","Vorschaubilder erneuern?");
define("_MI_WFL_IMGUPDATEDSC","Falls ausgewählt wird jedes Vorschaubild erneuert, es sei denn das erste Bild wird ausschließlich benutzt. <br /><br />");
define("_MI_WFL_QUALITY","Qualität der Vorschaubilder:");
define("_MI_WFL_QUALITYDSC","Niedrigste Qualität: 0 Höchste Qualität: 100");
define("_MI_WFL_KEEPASPECT","Seitenverhältnis beibehalten?");
define("_MI_WFL_KEEPASPECTDSC","");
define("_MI_WFL_ADMINPAGE","Admin Index Linkaufzählung:");
define("_MI_WFL_AMDMINPAGEDSC","Anzahl der neuen Links, die in der Moduladministration angezeigt werden.");
define("_MI_WFL_ARTICLESSORT","Voreinstellung Linkreihenfolge:");
define("_MI_WFL_ARTICLESSORTDSC","Legt die Voreinstellug für die Linkreihenfolge fest.");
define("_MI_WFL_TITLE","Titel");
define("_MI_WFL_RATING","Bewertung");
define("_MI_WFL_WEIGHT","Gewichting");
define("_MI_WFL_POPULARITY","Popularität");
define("_MI_WFL_SUBMITTED2","Datum der Einsendung");
define('_MI_WFL_COPYRIGHT','Copyright-Hinweis:');
define('_MI_WFL_COPYRIGHTDSC','Ausgewählt wird ein Copyright-Hinweis auf der Linkseite angezeigt.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC','Wählen Sie "ja" um Unterkategorien anzuzeigen. "Nein" versteckt die Unterkategorien');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY','Allgemein');
define('_MI_WFL_GLOBAL_NOTIFYDSC','Allgemeine Optionen für Benachrichtigungen.');
define('_MI_WFL_CATEGORY_NOTIFY','Kategorie');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Benachrichtigungsoptionen geltend für die aktuelle Kategorie.');
define('_MI_WFL_LINK_NOTIFY','Link');
define('_MI_WFL_FILE_NOTIFYDSC','Benachrichtigungsoptionen geltend für den aktuellen Link.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY','Neue Kategorie');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP','Benachrichtigen, wenn eine neue Kategorie angelegt wurde.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC','Benachrichtigung wenn eine neue Link-Kategorie angelegt wird.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neue Link-Kategorie');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Anfrage zur Linkänderung');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Benachrichtigen bei jeder Anfrage zur Linkänderung.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','Benachrichtigung bei jeder Anfrage für eine Leinkänderung.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Linkänderung angefragt');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Defekter Link gemeldet');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Benachrichtigung bei gemeldeten defekten Link.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','Benachrichtigung wenn ein defekter Link gemeldet wurde.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Defekter Link gemeldet');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Link eingereicht');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Benachrichtigung bei (wartenden) neuen gemeldeteten Link.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','Benachrichtigung bei neuen gemeldeteten Links, die auf Freigabe warten.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link eingereicht');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Neuer Link');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Benachrichtigung bei neuen Links.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','Benachrichtigung, wenn ein neuer Link eingetragen wurde.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Neuer Link');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Benachrichtigung bei (wartenden) neuen gemeldeteten Link in der aktuellen Kategorie.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','Benachrichtigung, wenn Links in der aktuellen Kategorie auf Freigabe warten.');      
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link eingereicht in Kategorie'); 

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Neuer Link');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Benachrichtigung bei neuen Link in der aktuellen Kategorie.');   
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','Benachrichtigung, wenn ein neuer Link in der aktuellen Kategorie eingetragen wurde.');      
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link in Kategorie'); 

define('_MI_WFL_LINK_APPROVE_NOTIFY','Link freigegeben');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Benachrichtigung wenn der Link freigegeben ist.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','Benachrichtigung wenn der Link durch Moderatoren freigegeben ist');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Link freigegeben');

define('_MI_WFL_AUTHOR_INFO',"Entwickler Information");
define('_MI_WFL_AUTHOR_NAME',"Entwickler");
define('_MI_WFL_AUTHOR_DEVTEAM',"Entwickler - Team");
define('_MI_WFL_AUTHOR_WEBSITE',"Entwickler - Website");
define('_MI_WFL_AUTHOR_EMAIL',"Entwickler E-Mail");
define('_MI_WFL_AUTHOR_CREDITS',"Danksagungen");
define('_MI_WFL_MODULE_INFO',"Information über die Modulentwicklung");
define('_MI_WFL_MODULE_STATUS',"Entwicklungsstatus");
define('_MI_WFL_MODULE_DEMO',"Demo - Seite");
define('_MI_WFL_MODULE_SUPPORT',"Offizielle Supportseite");
define('_MI_WFL_MODULE_BUG',"Fehler im Modul melden");
define('_MI_WFL_MODULE_FEATURE',"Neue Funktion für das Modul vorschlagen");
define('_MI_WFL_MODULE_DISCLAIMER',"Haftungsausschluss");
define('_MI_WFL_RELEASE',"Datum der Veröffentlichung: ");

define('_MI_WFL_MODULE_MAILLIST',"WF-Project Mailing Liste");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS',"Mailing Liste für Ankündigungen");
define('_MI_WFL_MODULE_MAILBUGS',"Mailing Liste für Fehler");
define('_MI_WFL_MODULE_MAILFEATURES',"Mailing Liste für neue Funktionen");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Erhalten Sie die neuesten Ankündigungen des WF-Projects.");
define('_MI_WFL_MODULE_MAILBUGSDSC',"Mailing Liste für Fehlerverfolgung ");
define('_MI_WFL_MODULE_MAILFEATURESDSC',"Mailing Liste für Anfrage neuer Funktionen.");

define('_MI_WFL_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFL_AUTHOR_CREDITSTEXT',"Das WF-Projects Team dankt den nachstehend aufgeführten Personen für Ihre Hilfe und Unterstützung während der Testphase des Moduls:<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_WFL_AUTHOR_BUGFIXES',"Historie Fehlerbeseitigung");

define('_MI_WFL_COPYRIGHT2','Copyright');
define('_MI_WFL_COPYRIGHTIMAGE',"Unless stated otherwise, this Module (WF-Links) and its images are copyright to the WF-Projects team.<br /><br />You have the permission to copy, edit and change WF-Links to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the WF-Projects team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_WFL_SELECTFORUM',"Forumauswahl:");
define('_MI_WFL_SELECTFORUMDSC',"Wählen Sie das von Ihnen installierte Forum aus für die Benutzung mit WF-Links.");

define('_MI_WFL_DISPLAYFORUM1',"Newbb (alle)");
define('_MI_WFL_DISPLAYFORUM2',"IPB Forum");
define('_MI_WFL_DISPLAYFORUM3',"PHPBB2 Module");

// added by McDonald
define("_MI_WFL_COUNTRY","Land:");
define('_MI_WFL_EDITOR',"Editor für Adminbereich:");
define('_MI_WFL_EDITORCHOICE',"Wählt den Editor für den Adminbereich aus. Falls Sie nur eine Xoops-Grundinstallation haben, können Sie nur DHTML und Compact auswählen");
define('_MI_WFL_EDITORUSER',"Editor für Benutzer:");
define('_MI_WFL_EDITORCHOICEUSER',"Wählt den Editor für den Benutzerbereich aus. Falls Sie nur eine Xoops-Grundinstallation haben, können Sie nur DHTML und Compact auswählen");
define("_MI_WFL_FORM_DHTML","DHTML");
define("_MI_WFL_FORM_COMPACT","Compact");
define("_MI_WFL_FORM_SPAW","Spaw Editor");
define("_MI_WFL_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_WFL_FORM_FCK","FCK Editor");
define("_MI_WFL_FORM_KOIVI","Koivi Editor");
define("_MI_WFL_FORM_INBETWEEN","Inbetween");
define("_MI_WFL_FORM_TINYEDITOR","TinyEditor");
define("_MI_WFL_FORM_TINYMCE","TinyMCE");
define("_MI_WFL_FORM_DHTMLEXT","DHTML Extended");
define("_MI_WFL_SORTCATS","Sortierung der Kategorien nach:");
define("_MI_WFL_SORTCATSDSC","Legt fest, wie die Kategorien und Unterkategorien sortiert sind.");
define("_MI_WFL_KEYLENGTH","Eingabe der maximal möglichen Zeichen für meta keywords:");
define("_MI_WFL_KEYLENGTHDSC","Voreinstellung ist 255 Zeichen");
define("_MI_WFL_OTHERLINKS","Weitere Links des Einsenders?");
define("_MI_WFL_OTHERLINKSDSC","Legt fest, ob auch andere Links des jeweiligen Einsenders angezeigt werden.");
define("_MI_WFL_TOTALCHARS","Maximale Anzahl Zeichen für Beschreibungen?");
define("_MI_WFL_TOTALCHARSDSC","Legt die max. Anzahl Zeichen für die Beschreibung in der Kategorieübersicht  fest.");
define("_MI_WFL_QUICKVIEW","Schnelle Voransicht (Option)?");
define("_MI_WFL_QUICKVIEWDSC","Schaltet die Option für die schnelle Voransicht ein oder aus.");
define("_MI_WFL_ICONS_CREDITS","Icons von");
define("_MI_WFL_SHOWSBOOKMARKS","Zeige Social Bookmarks?");
define("_MI_WFL_SHOWSBOOKMARKSDSC","Wählen Sie ja falls Social Bookmark Icons unter dem Artikel angezeigt werden sollen.");
define("_MI_WFL_SHOWPAGERANK","Google PageRank anzeigen?");
define("_MI_WFL_SHOWPAGERANKSDSC","Wählen Sie ja falls der Google PageRank angezeigt werden soll.");
define("_MI_WFL_USERTAGDESCR","Benutzer können Tags einreichen:");
define("_MI_WFL_USERTAGDSC","Wählen Sie ja wenn Benutzer Tags einreichen dürfen.");

//Version 1.05 RC5
define("_MI_WFL_DATEFORMATADMIN","Datumformat Administration:");
define("_MI_WFL_DATEFORMATADMINDSC", 'Standard Datumanzeige für WF-Links.<br />Siehe <a href="http://docs.php.net/manual/de/function.date.php" target="_blank">PHP-Handbuch</a>');
define("_MI_WFL_USEADDRESSDESCR","Adressen- und Kartenfunktion nutzen?");
define("_MI_WFL_USEADDRESSDSC","Wähle JA um die Adressenfunktion mit Landkarte zu aktivieren.");
define("_MI_WFL_HEADERPRINT","[DRUCKOPTIONEN] Kopfzeile drucken");
define("_MI_WFL_HEADERPRINTDSC","Kopfzeile wird gedruckt");
define("_MI_WFL_LOGOURLPRINT","[DRUCKOPTIONEN] Logo-URL drucken");
define("_MI_WFL_LOGOURLDSCPRINT","Logo-URL wird oben in der Seite gedruckt");
define("_MI_WFL_FOOTERPRINT","[DRUCKOPTIONEN] Fusszeile drucken");
define("_MI_WFL_FOOTERPRINTDSC","Fusszeile drucken");
define("_MI_WFL_BNAME3","WF-Links Sponsoren Statistiken");
define("_MI_WFL_VCARD_CREDITS","vCard-Script von");

// Version 1.05 RC6
define("_MI_WFL_FLAGIMG","Land Flagge Bild-Verzeichnis");
define("_MI_WFL_FLAGIMGDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_WFL_CATEGORYIMGDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_WFL_SCREENSHOTSDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_WFL_MAINIMGDIRDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_WFL_USEAUTOSCRSHOT","Autom. Screenshot benutzen");
define("_MI_WFL_USEAUTOSCRSHOTDSC","Es wird auf Basis der angegeben URL automatisch ein Bildschirmfoto erstellt. This overrules uploaded screenshots and might not work for all websites.");
define("_MI_WFL_MOZSHOT_CREDITS","Auto Screenshot benutzen von");
define("_MI_WFL_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (all source code provided under <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisence)');

// Version 1.06 RC-1
define("_MI_WFL_BNAME4","Links Tag Cloud");
define("_MI_WFL_BNAME5","Links Top Tags");
define("_MI_WFL_TITLE_A","Titel (A)");
define("_MI_WFL_TITLE_D","Titel (D)");
define("_MI_WFL_RATING_A","Bewertung (A)");
define("_MI_WFL_RATING_D","Bewertung (D)");
define("_MI_WFL_SUBMITTED_A","Datum der Einsendung (A)");
define("_MI_WFL_SUBMITTED_D","Datum der Einsendung (D)");
define("_MI_WFL_POPULARITY_A","Popularität (A)");
define("_MI_WFL_POPULARITY_D","Popularität (D)");
define("_MI_WFL_COUNTRY_A","Land (A)");
define("_MI_WFL_COUNTRY_D","Land (D)");

// Version 1.08

// Admin Summary
//define("_MI_WFL_SCATEGORY","Category");
define("_MI_WFL_SNEWFILESVAL","Submitted");
define("_MI_WFL_SMODREQUEST","Modified");
//define("_MI_WFL_SREVIEWS","Reviews: ");
define("_MI_WFL_SBROKENSUBMIT","Broken");
define("_MI_WFL_DOCUMENTATION","Docs");

define('_MI_WFL_ADD_LINK','Add Link');
define('_MI_WFL_ADD_CATEGORY','Add Category');