<?php
/**
 * $Id: admin.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Lexikon - glossary module
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */

define("_AM_LX_ACTION","Aktion");
define("_AM_LX_ADMINCATMNGMT","Kategoriemanagement");
define("_AM_LX_ADMINENTRYMNGMT","Eintragmanagement");
define("_AM_LX_ALLOWCOMMENTS","D&uuml;rfen Eintr&auml;ge kommentiert werden?");
define("_AM_LX_ANON","G&auml;ste");
define("_AM_LX_AUTHENTRY","Einsendung autorisieren");
define("_AM_LX_AUTHOR","Autor");
define("_AM_LX_AUTHORIZE","Autorisieren");
define("_AM_LX_BACK2IDX","Abgebrochen. Zur&uuml;ck zum Index");
define("_AM_LX_BLOCK"," Dem Eintrag-Block hinzuf&uuml;gen?");
define("_AM_LX_BLOCKS","Bl&ouml;cke");
define("_AM_LX_BREAKS"," Zeilenumbruchkonvertierung benutzen?");
define("_AM_LX_CANCEL","Abbrechen");
define("_AM_LX_CATCREATED","Neue Kategorie wurde erstellt und gespeichert!");
define("_AM_LX_CATDESCRIPT","Kategoriebeschreibung");
define("_AM_LX_CATIMAGE","Kategoriebild");
define("_AM_LX_CATIMAGEUPLOAD"," Kategoriebild hochladen");
define("_AM_LX_CATISDELETED","Kategorie %s wurde gel&ouml;scht");
define("_AM_LX_CATMODIFIED","Gew&auml;hlte Kategorie wurde ver&auml;ndert und gespeichert!");
define("_AM_LX_CATNAME","[*] Kategoriename");
define("_AM_LX_CATPOSIT","[*] Kategorieposition");
define("_AM_LX_CATS","Kategorien");
define("_AM_LX_CATSHEADER","KategorieManagement");
define("_AM_LX_CLEAR","Zur&uuml;cksetzen");
define("_AM_LX_CREATE","Erstellen");
define("_AM_LX_CREATECAT","Kategorie erstellen");
define("_AM_LX_CREATEENTRY","Eintrag erstellen");
define("_AM_LX_CREATEIN","Erstellen in Kategorie:");
define("_AM_LX_DELETE","L&ouml;schen");
define("_AM_LX_DELETECAT","Kategorie l&ouml;schen");
define("_AM_LX_DELETEENTRY","Eintrag l&ouml;schen");
define("_AM_LX_DELETESUBM","Einsendung l&ouml;schen");
define("_AM_LX_DELETETHISCAT","Sind Sie sicher Sie wollen diese Kategorie l&ouml;schen?");
define("_AM_LX_DELETETHISENTRY","Diesen Eintrag l&ouml;schen?");
define("_AM_LX_DESCRIP","Kategoriebeschreibung");
define("_AM_LX_DOHTML"," HTML-Tags erlauben");
define("_AM_LX_DOSMILEY"," Smilies erlauben");
define("_AM_LX_DOXCODE"," XOOPS-Codes erlauben");
define("_AM_LX_EDITCAT","Kategorie bearbeiten");
define("_AM_LX_EDITENTRY","Eintrag bearbeiten");
define("_AM_LX_EDITSUBM","Einsendung bearbeiten");
define("_AM_LX_ENTRIES","Eintr&auml;ge");
define("_AM_LX_ENTRYAUTHORIZED","Der Eintrag wurde autorisiert.");
define("_AM_LX_ENTRYCATNAME","Kategoriename");
define("_AM_LX_ENTRYCREATED","Erstellt");
define("_AM_LX_ENTRYCREATEDOK","Der Eintrag wurde erfolgreich erstellt!");
define("_AM_LX_ENTRYDEF","[*] Definition");
define("_AM_LX_ENTRYID","ID");
define("_AM_LX_ENTRYISDELETED","Der Eintrag %s wurde gel&ouml;scht.");
define("_AM_LX_ENTRYISOFF","Eintrag ist offline");
define("_AM_LX_ENTRYISON","Eintrag ist online");
define("_AM_LX_ENTRYMODIFIED","Der Eintrag wurde erfolgreich ver&auml;ndert!");
define("_AM_LX_ENTRYNOTCREATED","Verzeihung, es war nicht m&ouml;glich, diesen Eintrag zu erstellen!");
define("_AM_LX_ENTRYNOTUPDATED","Verzeihung, es war nicht m&ouml;glich, diesen Eintrag zu aktualisieren!");
define("_AM_LX_ENTRYREFERENCE","Referenz<span style='font-size: xx-small; font-weight: normal; display: block;'>(Schreiben Sie die Quelle Ihrer<br />Definition, wie Buch,<br />Artikel oder Person.)</span>");
define("_AM_LX_ENTRYTERM","[*] Begriff");
define("_AM_LX_ENTRYURL","Verkn&uuml;pfte Site<span style='font-size: xx-small; font-weight: normal; display: block;'>(Bitte geben sie eine g&uuml;ltige URL<br />mit oder ohne HTTP-Pr&auml;fix an)</span>");
define("_AM_LX_ITEMEXISTS","Ein Begriff mit diesem Namen existiert bereits im Lexikon. Bitte w&auml;hlen Sie einen anderen Begriff!");
define("_AM_LX_FILEEXISTS","Eine Datei mit diesem Namen existiert bereits auf dem Server. Bitte w&auml;hlen Sie eine andere Datei!");
define("_AM_LX_GOMOD","Zum Modul");
define("_AM_LX_HELP","Hilfe");
define("_AM_LX_ID","ID");
define("_AM_LX_INDEX","Index");
define("_AM_LX_INVENTORY","Eintragzusammenfassung");
define("_AM_LX_MODCAT","Vorhandene Kategorie ver&auml;ndern");
define("_AM_LX_MODADMIN"," Modul-Admin: ");
define("_AM_LX_MODENTRY","Eintrag ver&auml;ndern");
define("_AM_LX_MODIFY","Ver&auml;ndern");
define("_AM_LX_MODIFYCAT","Kategorie ver&auml;ndern");
define("_AM_LX_MODIFYTHISCAT","Diese Kategorie ver&auml;ndern?");
define("_AM_LX_MODULEHEADMULTI","Eintr&auml;ge | Kategorien | Einsendungen | Anfragen");
define("_AM_LX_MODULEHEADSINGLE","Eintr&auml;ge | Einsendungen | Anfragen");
define("_AM_LX_NEEDONECOLUMN","Um einen Eintrag zu erstellen, wird wenigstens eine Kategorie ben&ouml;tigt.");
define("_AM_LX_NEWCAT","Kategorie erstellen");
define("_AM_LX_NEWENTRY","Eintrag erstellen");
define("_AM_LX_NO","Nein");
define("_AM_LX_NOCATS","Es gibt keine anzuzeigenden Kategorien");
define("_AM_LX_NOCOLTOEDIT","Es gibt keine zu bearbeitenden Spalten!");
define("_AM_LX_NOPERMSSET","Berechtigungen k&ouml;nnen nicht gesetzt werden: Keine Spalten bis jetzt erstellt!");
define("_AM_LX_NOREQSYET","Es gibt momentan keine nicht definierten angefragten Begriffe.");
define("_AM_LX_NOSUBMISSYET","Es gibt momentan keine Einsendungen die auf Freigabe warten.");
define("_AM_LX_NOTERMS","Keine anzuzeigenden Begriffe");
define("_AM_LX_NOTUPDATED","Beim Aktualisieren der Datenbank ist ein Fehler aufgetreten!");
define("_AM_LX_OPTIONS","Optionen");
define("_AM_LX_SHOWCATS","Kategorien");
define("_AM_LX_SHOWENTRIES","Eintr&auml;ge");
define("_AM_LX_SHOWREQUESTS","Anfragen");
define("_AM_LX_SHOWSUBMISSIONS","Einsendungen");
define("_AM_LX_SINGLECAT","The module is defined to have a single category. You have no reason to be here.");
define("_AM_LX_STATUS","Status");
define("_AM_LX_SUBMITS","Einsendungen");
define("_AM_LX_SUBMITTER","Absender");
define("_AM_LX_SWITCHOFFLINE"," Eintrag offline setzen?");
define("_AM_LX_TOTALCATS","Verf&uuml;gbare Kategorien: ");
define("_AM_LX_TOTALENTRIES","Ver&ouml;ffentlichte Eintr&auml;ge: ");
define("_AM_LX_TOTALREQ","Angefragte Eintr&auml;ge: ");
define("_AM_LX_TOTALSUBM","Eingeschickte Eintr&auml;ge: ");
define("_AM_LX_UNIQUE","Einmalige Kategorie");
define("_AM_LX_WEIGHT","Position");
define("_AM_LX_WRITEHERE","Schreiben Sie hier die Definition.");
define("_AM_LX_YES","Ja");
define("_AM_LX_SHOWOFFLINE","Offline");
define("_AM_LX_INIT","Buchstabe");

define("_AM_LX_ACTION","Aktion");
define("_AM_LX_ADMINCATMNGMT","Kategoriemanagement");
define("_AM_LX_ADMINENTRYMNGMT","Eintragmanagement");
define("_AM_LX_ALLOWCOMMENTS","D&uuml;rfen Eintr&auml;ge kommentiert werden?");
define("_AM_LX_ANON","G&auml;ste");
define("_AM_LX_AUTHENTRY","Einsendung autorisieren");
define("_AM_LX_AUTHOR","Autor");
define("_AM_LX_AUTHORIZE","Autorisieren");
define("_AM_LX_BACK2IDX","Abgebrochen. Zur&uuml;ck zum Index");
define("_AM_LX_BLOCK"," Dem Eintrag-Block hinzuf&uuml;gen?");
define("_AM_LX_BLOCKS","Bl&ouml;cke");
define("_AM_LX_BREAKS"," Zeilenumbruchkonvertierung benutzen?");
define("_AM_LX_CANCEL","Abbrechen");
define("_AM_LX_CATCREATED","Neue Kategorie wurde erstellt und gespeichert!");
define("_AM_LX_CATDESCRIPT","Kategoriebeschreibung");
define("_AM_LX_CATIMAGE","Kategoriebild");
define("_AM_LX_CATIMAGEUPLOAD"," Kategoriebild hochladen");
define("_AM_LX_CATISDELETED","Kategorie %s wurde gel&ouml;scht");
define("_AM_LX_CATMODIFIED","Gew&auml;hlte Kategorie wurde ver&auml;ndert und gespeichert!");
define("_AM_LX_CATNAME","[*] Kategoriename");
define("_AM_LX_CATPOSIT","[*] Kategorieposition");
define("_AM_LX_CATS","Kategorien");
define("_AM_LX_CATSHEADER","KategorieManagement");
define("_AM_LX_CLEAR","Zur&uuml;cksetzen");
define("_AM_LX_CREATE","Erstellen");
define("_AM_LX_CREATECAT","Kategorie erstellen");
define("_AM_LX_CREATEENTRY","Eintrag erstellen");
define("_AM_LX_CREATEIN","Erstellen in Kategorie:");
define("_AM_LX_DELETE","L&ouml;schen");
define("_AM_LX_DELETECAT","Kategorie l&ouml;schen");
define("_AM_LX_DELETEENTRY","Eintrag l&ouml;schen");
define("_AM_LX_DELETESUBM","Einsendung l&ouml;schen");
define("_AM_LX_DELETETHISCAT","Sind Sie sicher Sie wollen diese Kategorie l&ouml;schen?");
//define("_AM_LX_DELETETHISCAT","Sind Sie sicher dass Sie diese Kategorie und alle untergeordneten Subkategorien l&ouml;schen wollen ?");
define("_AM_LX_DELETETHISENTRY","Diesen Eintrag l&ouml;schen?");
define("_AM_LX_DESCRIP","Kategoriebeschreibung");
define("_AM_LX_DOHTML"," HTML-Tags erlauben");
define("_AM_LX_DOSMILEY"," Smilies erlauben");
define("_AM_LX_DOXCODE"," XOOPS-Codes erlauben");
define("_AM_LX_EDITCAT","Kategorie bearbeiten");
define("_AM_LX_EDITENTRY","Eintrag bearbeiten");
define("_AM_LX_EDITSUBM","Einsendung bearbeiten");
define("_AM_LX_ENTRIES","Eintr&auml;ge");
define("_AM_LX_ENTRYAUTHORIZED","Der Eintrag wurde autorisiert.");
define("_AM_LX_ENTRYCATNAME","Kategoriename");
define("_AM_LX_ENTRYCREATED","Erstellt");
define("_AM_LX_ENTRYCREATEDOK","Der Eintrag wurde erfolgreich erstellt!");
define("_AM_LX_ENTRYDEF","[*] Definition");
define("_AM_LX_ENTRYID","ID");
define("_AM_LX_ENTRYISDELETED","Der Eintrag %s wurde gel&ouml;scht.");
define("_AM_LX_ENTRYISOFF","Eintrag ist offline");
define("_AM_LX_ENTRYISON","Eintrag ist online");
define("_AM_LX_ENTRYMODIFIED","Der Eintrag wurde erfolgreich ver&auml;ndert!");
define("_AM_LX_ENTRYNOTCREATED","Verzeihung, es war nicht m&ouml;glich, diesen Eintrag zu erstellen!");
define("_AM_LX_ENTRYNOTUPDATED","Verzeihung, es war nicht m&ouml;glich, diesen Eintrag zu aktualisieren!");
define("_AM_LX_ENTRYREFERENCE","Referenz<span style='font-size: xx-small; font-weight: normal; display: block;'>(Schreiben Sie die Quelle Ihrer<br />Definition, wie Buch,<br />Artikel oder Person.)</span>");
define("_AM_LX_ENTRYTERM","[*] Begriff");
define("_AM_LX_ENTRYURL","Verkn&uuml;pfte Site<span style='font-size: xx-small; font-weight: normal; display: block;'>(Bitte geben sie eine g&uuml;ltige URL<br />mit oder ohne HTTP-Pr&auml;fix an)</span>");
define("_AM_LX_FILEEXISTS","Eine Datei mit diesem Namen existiert bereits auf dem Server. Bitte w&auml;hlen Sie eine andere Datei!");
define("_AM_LX_GOMOD","Zum Modul");
define("_AM_LX_HELP","Hilfe");
define("_AM_LX_ID","ID");
define("_AM_LX_INDEX","Index");
define("_AM_LX_INVENTORY","Eintragzusammenfassung");
define("_AM_LX_MODCAT","Vorhandene Kategorie ver&auml;ndern");
define("_AM_LX_MODADMIN"," Modul-Admin: ");
define("_AM_LX_MODENTRY","Eintrag ver&auml;ndern");
define("_AM_LX_MODIFY","Ver&auml;ndern");
define("_AM_LX_MODIFYCAT","Kategorie ver&auml;ndern");
define("_AM_LX_MODIFYTHISCAT","Diese Kategorie ver&auml;ndern?");
define("_AM_LX_MODULEHEADMULTI","Eintr&auml;ge | Kategorien | Einsendungen | Anfragen");
define("_AM_LX_MODULEHEADSINGLE","Eintr&auml;ge | Einsendungen | Anfragen");
define("_AM_LX_NEEDONECOLUMN","Um einen Eintrag zu erstellen, wird wenigstens eine Kategorie ben&ouml;tigt.");
define("_AM_LX_NEWCAT","Kategorie erstellen");
define("_AM_LX_NEWENTRY","Eintrag erstelen");
define("_AM_LX_NO","Nein");
define("_AM_LX_NOCATS","Es gibt keine anzuzeigenden Kategorien");
define("_AM_LX_NOCOLTOEDIT","Es gibt keine zu bearbeitenden Spalten!");
define("_AM_LX_NOPERMSSET","Berechtigungen k&ouml;nnen nicht gesetzt werden: Keine Spalten bis jetzt erstellt!");
define("_AM_LX_NOREQSYET","Es gibt momentan keine nicht definierten angefragten Begriffe.");
define("_AM_LX_NOSUBMISSYET","Es gibt momentan keine Einsendungen die auf Freigabe warten.");
define("_AM_LX_NOTERMS","Keine anzuzeigenden Begriffe");
define("_AM_LX_NOTUPDATED","Beim Aktualisieren der Datenbank ist ein Fehler aufgetreten!");
define("_AM_LX_OPTIONS","Optionen");
define("_AM_LX_SHOWCATS","Kategorien");
define("_AM_LX_SHOWENTRIES","Eintr&auml;ge");
define("_AM_LX_SHOWREQUESTS","Anfragen");
define("_AM_LX_SHOWSUBMISSIONS","Einsendungen");
define("_AM_LX_SINGLECAT","The module is defined to have a single category. You have no reason to be here.");
define("_AM_LX_STATUS","Status");
define("_AM_LX_SUBMITS","Einsendungen");
define("_AM_LX_SUBMITTER","Absender");
define("_AM_LX_SWITCHOFFLINE"," Eintrag offline setzen?");
define("_AM_LX_TOTALCATS","Verf&uuml;gbare Kategorien: ");
define("_AM_LX_TOTALENTRIES","Ver&ouml;ffentlichte Eintr&auml;ge: ");
define("_AM_LX_TOTALREQ","Angefragte Eintr&auml;ge: ");
define("_AM_LX_TOTALSUBM","Eingeschickte Eintr&auml;ge: ");
define("_AM_LX_UNIQUE","Einmalige Kategorie");
define("_AM_LX_WEIGHT","Position");
define("_AM_LX_WRITEHERE","Schreiben Sie hier die Definition.");
define("_AM_LX_YES","Ja");
define("_AM_LX_SHOWOFFLINE","Offline");

//mondarse
define("_AM_LX_IMPORT","Importieren");
define("_AM_LX_IMPORTWARN","Achtung!!<br />Machen Sie immer ein Backup Ihrer Datenbank bevor sie importieren. Das Import-Skript kann unter Umständen Korruption/Verlust von Daten verursachen.");

// menu
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

// import
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
define("_AM_LX_NOOTHERMODS","<font size=1>No corresponding modules could be located!</font>");

// upgrade
define("_AM_LX_PLEASE_UPGRADE","<font color='#FF0000'>Bitte Modul updaten!</font></a>");
define('_AM_LX_UPGRADECOMPLETE','Füge neues Feld hinzu.<BR> Upgrade erfolgreich beendet<BR><BR>');
define('_AM_LX_UPGRADEFAILED','Failed fehlgeschlagen!');
define('_AM_LX_UPGRADE','Upgrade');
define('_AM_LX_UPGRADEFAILED1','Impossible to create field ');
define('_AM_LX_UPGR_ACCESS_ERROR',"Error, to use the upgrade script, you must be an admin on this module");

//categories
define('_AM_LX_SELECT','Ausw&auml;hlen...');
define("_AM_LX_SHOTIMAGE","Kategorie-Bild");
define("_AM_LX_SHOTIMAGEDSC","<div style:\float:'right'; align='right';\>Screenshot image must be a valid image file under modules/lexikon/images/uploads directory (ex. shot.gif). Leave it blank if there is no image file.</DIV>");
define("_AM_LX_LOGOUP","Bild Upload");
define("_AM_LX_NONE","---Keines---");
define("_AM_LX_CATIMG_DSC","Kategoriebilder sind gespeichert in");
define("_AM_LX_CATIMGUPLOAD","Kategoriebild hochladen");
define("_AM_LX_FILESUCCESS","Bild wurde hochgeladen");
define("_AM_LX_CAT_GROUPSVIEW","Kategorie Zugriffsberechtigungen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Bitte Usergruppe ausw&auml;hlen, die zu Zugriff<br/>auf diese Kategorie haben soll.</span></div>");
define("_AM_LX_CAT_GROUPSSUBMIT","Kategorie Einsendeberechtigungen:");
define("_AM_LX_CAT_GROUPSEDIT","Kategorie Änderungsberechtigungen:");

define("_AM_LX_SENTCONFIRMMAIL","Die Freischaltung wurde als Bestätigungsmail an <b>%s</b> geschickt.");
define("_AM_LX_NOTIFYPUBLISH","Per E-mail von Veröffentlichung benachrichtigen");

//stats
define('_AM_LX_HITS','Views');
define('_AM_LX_STATS0','Lexikon Statistik');
define('_AM_LX_STATS','Statistik');
define('_AM_LX_STATS1','Einzelne Autoren');
define('_AM_LX_STATS2','Gesamt');
define('_AM_LX_STATS3','Definitionen Statistik');
define('_AM_LX_STATS4','Am häufigsten gelesene Definitionen');
define('_AM_LX_STATS5','Am wenigsten gelesene Definitionen');
define('_AM_LX_STATS6','unbenutzte Begriffe');
define('_AM_LX_STATS7','Am häufigsten gelesene Autoren');
define('_AM_LX_STATS9','Aktivste Poster');
define('_AM_LX_STATS10','Autoren Statistik');
define('_AM_LX_STATS11',"Anzahl Definitionen");

// admin-side terms
define('_AM_LX_TERM',"Begriff");
define('_AM_LX_CATEGORY',"Kategorie");
define("_AM_LX_ALLITEMSMSG","W&auml;hlen Sie einen Status aus, um Begriffe mit den gewünschten Merkmalen aufzulisten.");
define("_AM_LX_SHOWING","Status :");
define("_AM_LX_SELECT_SORT","Sortierreihenfolge");
define("_AM_LX_SELECT_STATUS","Status");
define("_AM_LX_ALLITEMS","Alle eingetragenen Begriffe");
define("_AM_LX_ALL_EXP","<b>Jeglicher Status</b> : Alle eingetragenen Begriffe, gleich welchen Status.");
define("_AM_LX_OFFLINE_EXP","<b>Inaktive Begriffe</b> : Aktive Begriffe die temporär oder dauerhaft deaktiviert sind. Inaktive Begriffe werden dem Benutzer nicht dargestellt.");
define("_AM_LX_PUBLISHED","Ver&ouml;ffentlicht");
define("_AM_LX_PUBLISHED_EXP","<b>Ve&ouml;ffentlichte Begriffe</b> : Freigeschaltete Begriffe die dem Benutzer dargestellt werden.");
define("_AM_LX_REQ_ITEM_EXP","<b>Angeforderte Begriffe</b> : Eingereichte Begriffe, welche noch nicht vervollständigt wurden. Angeforderte Begriffe können von Benutzern beantwortet werden.");
define('_AM_LX_SUBMITTED',"Einsendungen");

define("_AM_LX_SUBMITTED_EXP","<b>Eingeschickte Begriffe</b> : Begriffe, die von Benutzern eingereicht wurden und, sobald freigeschaltet, dem Benutzer dargestellt werden.");
define("_AM_LX_NOITEMSSEL","Sorry. Es gibt kein Begriffe in dem gewählten Status.");

// Permissions
define("_AM_LX_TYPO","");
define("_AM_LX_PERMFORM","Berechtigungen");
define("_AM_LX_APPROVEFORM","Genehmigen");
define("_AM_LX_SUBMITFORM","Einsenden");
define("_AM_LX_REQUESTFORM","Anfordern");
define("_AM_LX_VIEWFORM","Lesen");
define("_AM_LX_VIEWFORM_DSC","Kategorie betrachten - Berechtigungen");
define("_AM_LX_APPROVEFORM_DSC","Automatically approve frontside submissions by these groups. <BR/> Not yet implemented!");
define("_AM_LX_APPROVEPERM_WARN","Due to certain aspects of this module including copyright infringement, local moral or legal issues and the possibility of malicious code in submitted media files, it is recommended that automatic approval by anonymous users should not be allowed.  All submissions should be reviewed by a module admin.");
define("_AM_LX_SUBMITFORM_DSC","Allow users to submit an entry and, if published, modify that entry.");
define("_AM_LX_REQUESTFORM_DSC","The specified group will have access to a request form.");

define("_AM_LX_SUBMITTED_EXP","<b>Eingeschickte Begriffe</b> : Begriffe, die von Benutzern eingereicht wurden und, sobald freigeschaltet, dem Benutzer dargestellt werden.");
define("_AM_LX_NOITEMSSEL","Sorry. Es gibt keine Begriffe in dem gewählten Status.");
define("_AM_LX_INIT","Buchstabe");

?>