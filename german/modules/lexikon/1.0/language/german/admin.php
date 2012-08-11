<?php
/**
 * $Id: admin.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Lexikon - a multicategory glossary
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */
define("_AM_LX_ACTION","Aktion");
define("_AM_LX_ADMINCATMNGMT","Kategoriemanagement");
define("_AM_LX_ADMINENTRYMNGMT","Eintragmanagement");
define("_AM_LX_ALLOWCOMMENTS","Dürfen Einträge kommentiert werden?");
define("_AM_LX_ANON","Gäste");
define("_AM_LX_AUTHENTRY","Einsendung autorisieren");
define("_AM_LX_AUTHOR","Autor");
define("_AM_LX_AUTHORIZE","Autorisieren");
define("_AM_LX_BACK2IDX","Abgebrochen. Zurück zum Index");
define("_AM_LX_BLOCK"," Dem Eintrag-Block hinzufügen?");
define("_AM_LX_BLOCKS","Blöcke");
define("_AM_LX_BREAKS"," Zeilenumbruchkonvertierung benutzen?");
define("_AM_LX_CANCEL","Abbrechen");
define("_AM_LX_CATCREATED","Neue Kategorie wurde erstellt und gespeichert!");
define("_AM_LX_CATDESCRIPT","Kategoriebeschreibung");
define("_AM_LX_CATIMAGE","Kategoriebild");
define("_AM_LX_CATIMAGEUPLOAD"," Kategoriebild hochladen");
define("_AM_LX_CATISDELETED","Kategorie %s wurde gelöscht");
define("_AM_LX_CATMODIFIED","Gewählte Kategorie wurde verändert und gespeichert!");
define("_AM_LX_CATNAME","[*] Kategoriename");
define("_AM_LX_CATPOSIT","[*] Kategorieposition");
define("_AM_LX_CATS","Kategorien");
define("_AM_LX_CATSHEADER","KategorieManagement");
define("_AM_LX_CLEAR","Zurücksetzen");
define("_AM_LX_CREATE","Erstellen");
define("_AM_LX_CREATECAT","Kategorie erstellen");
define("_AM_LX_CREATEENTRY","Eintrag erstellen");
define("_AM_LX_CREATEIN","Erstellen in Kategorie:");
define("_AM_LX_DELETE","Löschen");
define("_AM_LX_DELETECAT","Kategorie löschen");
define("_AM_LX_DELETEENTRY","Eintrag löschen");
define("_AM_LX_DELETESUBM","Einsendung löschen");
define("_AM_LX_DELETETHISCAT","Sind Sie sicher Sie wollen diese Kategorie löschen?");
define("_AM_LX_DELETETHISENTRY","Diesen Eintrag löschen?");
define("_AM_LX_DESCRIP","Kategoriebeschreibung");
define("_AM_LX_DOHTML"," HTML-Tags erlauben");
define("_AM_LX_DOSMILEY"," Smilies erlauben");
define("_AM_LX_DOXCODE"," XOOPS-Codes erlauben");
define("_AM_LX_EDITCAT","Kategorie bearbeiten");
define("_AM_LX_EDITENTRY","Eintrag bearbeiten");
define("_AM_LX_EDITSUBM","Einsendung bearbeiten");
define("_AM_LX_ENTRIES","Einträge");
define("_AM_LX_ENTRYAUTHORIZED","Der Eintrag wurde autorisiert.");
define("_AM_LX_ENTRYCATNAME","Kategoriename");
define("_AM_LX_ENTRYCREATED","Erstellt");
define("_AM_LX_ENTRYCREATEDOK","Der Eintrag wurde erfolgreich erstellt!");
define("_AM_LX_ENTRYDEF","[*] Definition");
define("_AM_LX_ENTRYID","ID");
define("_AM_LX_ENTRYISDELETED","Der Eintrag %s wurde gelöscht.");
define("_AM_LX_ENTRYISOFF","Eintrag ist offline");
define("_AM_LX_ENTRYISON","Eintrag ist online");
define("_AM_LX_ENTRYMODIFIED","Der Eintrag wurde erfolgreich verändert!");
define("_AM_LX_ENTRYNOTCREATED","Verzeihung, es war nicht möglich, diesen Eintrag zu erstellen!");
define("_AM_LX_ENTRYNOTUPDATED","Verzeihung, es war nicht möglich, diesen Eintrag zu aktualisieren!");
define("_AM_LX_ENTRYREFERENCE","Referenz<span style='font-size: xx-small; font-weight: normal; display: block;'>(Schreiben Sie die Quelle Ihrer<br />Definition, wie Buch,<br />Artikel oder Person.)</span>");
define("_AM_LX_ENTRYTERM","[*] Begriff");
define("_AM_LX_ENTRYURL","Verknüpfte Site<span style='font-size: xx-small; font-weight: normal; display: block;'>(Bitte geben sie eine gültige URL<br />mit oder ohne HTTP-Präfix an)</span>");
define("_AM_LX_FILEEXISTS","Eine Datei mit diesem Namen existiert bereits auf dem Server. Bitte wählen Sie eine andere Datei!");
define("_AM_LX_GOMOD","Zum Modul");
define("_AM_LX_HELP","Hilfe");
define("_AM_LX_ID","ID");
define("_AM_LX_INDEX","Index");
define("_AM_LX_INVENTORY","Eintragzusammenfassung");
define("_AM_LX_MODCAT","Vorhandene Kategorie verändern");
define("_AM_LX_MODADMIN"," Modul-Admin: ");
define("_AM_LX_MODENTRY","Eintrag verändern");
define("_AM_LX_MODIFY","Verändern");
define("_AM_LX_MODIFYCAT","Kategorie verändern");
define("_AM_LX_MODIFYTHISCAT","Diese Kategorie verändern?");
define("_AM_LX_MODULEHEADMULTI","Einträge | Kategorien | Einsendungen | Anfragen");
define("_AM_LX_MODULEHEADSINGLE","Einträge | Einsendungen | Anfragen");
define("_AM_LX_NEEDONECOLUMN","Um einen Eintrag zu erstellen, wird wenigstens eine Kategorie benötigt.");
define("_AM_LX_NEWCAT","Kategorie erstellen");
define("_AM_LX_NEWENTRY","Eintrag erstelen");
define("_AM_LX_NO","Nein");
define("_AM_LX_NOCATS","Es gibt keine anzuzeigenden Kategorien");
define("_AM_LX_NOCOLTOEDIT","Es gibt keine zu bearbeitenden Spalten!");
define("_AM_LX_NOPERMSSET","Berechtigungen können nicht gesetzt werden: Keine Spalten bis jetzt erstellt!");
define("_AM_LX_NOREQSYET","Es gibt momentan keine nicht definierten angefragten Begriffe.");
define("_AM_LX_NOSUBMISSYET","Es gibt momentan keine Einsendungen die auf Freigabe warten.");
define("_AM_LX_NOTERMS","Keine anzuzeigenden Begriffe");
define("_AM_LX_NOTUPDATED","Beim Aktualisieren der Datenbank ist ein Fehler aufgetreten!");
define("_AM_LX_OPTIONS","Optionen");
define("_AM_LX_OPTS","Moduleinstellungen");
define("_AM_LX_SHOWCATS","Kategorien");
define("_AM_LX_SHOWENTRIES","Einträge");
define("_AM_LX_SHOWREQUESTS","Anfragen");
define("_AM_LX_SHOWSUBMISSIONS","Einsendungen");
define("_AM_LX_SINGLECAT","The module is defined to have a single category. You have no reason to be here.");
define("_AM_LX_STATUS","Status");
define("_AM_LX_SUBMITS","Einsendungen");
define("_AM_LX_SUBMITTER","Absender");
define("_AM_LX_SWITCHOFFLINE"," Eintrag offline setzen?");
define("_AM_LX_TOTALCATS","Verfügbare Kategorien: ");
define("_AM_LX_TOTALENTRIES","Veröffentlichte Einträge: ");
define("_AM_LX_TOTALREQ","Angefragte Einträge: ");
define("_AM_LX_TOTALSUBM","Eingeschickte Einträge: ");
define("_AM_LX_UNIQUE","Einmalige Kategorie");
define("_AM_LX_WEIGHT","Position");
define("_AM_LX_WRITEHERE","Schreiben Sie hier die Definition.");
define("_AM_LX_YES","Ja");
define("_AM_LX_SHOWOFFLINE","Offline");//1.0
//mondarse
define("_AM_LX_IMPORT","Importieren");
define("_AM_LX_IMPORTWARN","Achtung!!<br />Machen Sie immer ein Backup Ihrer Datenbank bevor sie importieren. Das Import-Skript kann unter Umständen Korruption/Verlust von Daten verursachen.");

// added in version 1.17
define('_AM_LX_UPDATEMODULE','Update Modul Templates');
// about
define("_AM_LX_ABOUT_RELEASEDATE","Release date");
define("_AM_LX_ABOUT_AUTHOR","Autor");
define("_AM_LX_ABOUT_CREDITS","Credits");
define("_AM_LX_ABOUT_LICENSE","Lizenz");
define("_AM_LX_ABOUT_WEBSITE","Homepage");
define("_AM_LX_ABOUT_MODULE_INFO","Modul info");
define("_AM_LX_ABOUT_MODULE_STATUS","Status");
define("_AM_LX_ABOUT_MODULE_TEAM","Team Mitglieder");
define("_AM_LX_ABOUT_AUTHOR_INFO","Autor info");
define("_AM_LX_ABOUT_AUTHOR_NAME","Autor Name");
define("_AM_LX_ABOUT_AUTHOR_WORD","Autorenkommentar");
define("_AM_LX_ABOUT_DISCLAIMER","Disclaimer");
define("_AM_LX_ABOUT_DISCLAIMER_TEXT","GPL-licensed.<BR>This module comes as is, without any guarantees whatsoever. This module is a Release Candidate and should not be used on a production web site. The module is still under active development and its use is under your own responsibility, which means the author is not responsible.");
define("_AM_LX_ABOUT_CHANGELOG","Changelog");
define("_AM_LX_ABOUT_README","Liesmich");
define("_AM_LX_ABOUT_DEMO","Demo Site(s)");
define("_AM_LX_ABOUT_SUBMIT_BUG","Bugreport für dieses Modul einsenden");
define("_AM_LX_ABOUT_SUBMIT_BUG_TEXT","Fehler melden");
define("_AM_LX_ABOUT_SUBMIT_FEATURE","Anfrage für neues Feature einsenden");
define("_AM_LX_ABOUT_SUBMIT_FEATURE_TEXT","Featureanfrage einsenden");

define("_AM_LX_MCOMMENTS","Kommentare");

// v1.17 IMPORT
define("_AM_LX_MODULEHEADIMPORT","Dictionary &mdash;&gt; Lexikon Import Skript");
define("_AM_LX_MODULEHEADIMPORTGLO","Glossaire &mdash;&gt; Lexikon Import Skript");
define("_AM_LX_MODULEHEADIMPORTWB","Wordbook &mdash;&gt; Lexikon Import Skript");
define("_AM_LX_MODULEHEADIMPORTXWO","XWords &mdash;&gt; Lexikon Import Skript");
define("_AM_LX_MODULEHEADIMPORTWW","Wiwimod &mdash;&gt; Lexikon Import Skript");
define("_AM_LX_MODULEIMPORTEMPTY10","zu importierende Datenbank fehlt oder ist leer!");
define("_AM_LX_MODULEIMPORTERCOM","Kommentare erfolgreich zum Lexikon importiert");
define("_AM_LX_MODULEIMPORTERNOCOM","Fehler beim Transferieren der Kommentare zum Lexikon Modul.");
define("_AM_LX_IMPORTDELWB","Sollen bestehende Einträge vor dem Import gelöscht werden?");
define("_AM_LX_OTHERMODS","To select the module you wish to import please click the corresponding image.");
#define("_AM_LX_NOOTHERMODS","<font size=1>Further modules to import could not be located on your site.</font>");
define("_AM_LX_NOOTHERMODS","<font size=1>No corresponding modules could be located!</font>");

// v 1.17 upgrade
define('_AM_LX_UPGRADECOMPLETE','Inserting new Field.<BR> Upgrade Complete<BR><BR>');
#define("_AM_LX_UPDATEMODULE","<a href='".XOOPS_URL."/modules/system/admin.php?fct=modulesadmin&op=update&module=lexikon'\"><font color='#FF0000'>Bitte das Modul updaten!</font></a>");
define('_AM_LX_UPGRADEFAILED','Upgrade Failed !');
define('_AM_LX_UPGRADE','Upgrade');
define('_AM_LX_UPGRADEFAILED1','Impossible to create field parent');
define('_AM_LX_UPGR_ACCESS_ERROR',"Error, to use the upgrade script, you must be an admin on this module");
#define("_AM_LX_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Please update the module!</font></a>");
define("_AM_LX_PLEASE_UPGRADE","<font color='#FF0000'>Please update the module !</font></a>");

//subcategories
define('_AM_LX_FPARENT','Übergeordnete Kategorie');
define('_AM_LX_SELECT','Auswählen...');
define('_AM_LX_PARENT','Parent');

?>