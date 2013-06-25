<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_NW_DBUPDATED","Datenbank wurde erfolgreich aktualisiert!");
define("_AM_NW_CONFIG","Artikelkonfiguration");
define("_AM_NW_AUTOARTICLES","Automatisierte Artikel");
define("_AM_NW_STORYID","Artikel-ID");
define("_AM_NW_TITLE","Titel");
define("_AM_NW_TOPIC","Thema");
define("_AM_NW_POSTER","Autor");
define("_AM_NW_PROGRAMMED","Zeitgesteuerte Veröffentlichung");
define("_AM_NW_ACTION","Aktion");
define("_AM_NW_EDIT","Bearbeiten");
define("_AM_NW_DELETE","Löschen");
define("_AM_NW_LAST10ARTS","Die letzten %d Artikel");
define("_AM_NW_PUBLISHED","Veröffentlicht am"); // Published Date
define("_AM_NW_GO","Los!");
define("_AM_NW_EDITARTICLE","Bearbeite Artikel");
define("_AM_NW_POSTNEWARTICLE","Neuen Artikel veröffentlichen");
define("_AM_NW_ARTPUBLISHED","Dein Artikel wurde veröffentlicht!");
define("_AM_NW_HELLO","Hallo %s,");
define("_AM_NW_YOURARTPUB","Der von dir verfasste Artikel wurde veröffentlicht.");
define("_AM_NW_TITLEC","Titel: ");
define("_AM_NW_URLC","URL: ");
define("_AM_NW_PUBLISHEDC","Veröffentlicht: ");
define("_AM_NW_RUSUREDEL","Sind Sie sicher, dass Sie diesen Artikel und alle damit verbundenen Kommentare löschen wollen?");

define("_AM_NW_YES","Ja");
define("_AM_NW_NO","Nein");
define("_AM_NW_INTROTEXT","Einführungstext");
define("_AM_NW_EXTEXT","Erweiterter Text:");
define("_AM_NW_ALLOWEDHTML","HTML-Tags erlauben:");
define("_AM_NW_DISAMILEY","Smilies deaktivieren");
define("_AM_NW_DISHTML","HTML deaktivieren");
define("_AM_NW_APPROVE","Freigeben");
define("_AM_NW_MOVETOTOP","Artikel nach oben verschieben");
define("_AM_NW_CHANGEDATETIME","Datum/Uhrzeit der Veröffentlichung ändern");
define("_AM_NW_NOWSETTIME","Veröffentlichung ist eingestellt auf: %s"); // %s is datetime of publish
define("_AM_NW_CURRENTTIME","Aktuelle Uhrzeit: %s");  // %s is the current datetime
define("_AM_NW_SETDATETIME","<b>Datum/Uhrzeit der Veröffentlichung setzen:</b>");
define("_AM_NW_MONTHC","Monat:");
define("_AM_NW_DAYC","Tag:");
define("_AM_NW_YEARC","Jahr:");
define("_AM_NW_TIMEC","Uhrzeit:");
define("_AM_NW_PREVIEW","Vorschau");
define("_AM_NW_SAVE","Sichern");
define("_AM_NW_PUBINHOME","Auf der Homepage anzeigen?");
define("_AM_NW_ADD","Hinzufügen");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_NW_ADDMTOPIC","Ein Hauptthema hinzufügen");
define("_AM_NW_TOPICNAME","Thementitel");
// Warning, changed from 40 to 255 characters.
define("_AM_NW_MAX40CHAR","(max. 255 Zeichen)");
define("_AM_NW_TOPICIMG","Themenbild");
define("_AM_NW_IMGNAEXLOC","Bildname + Dateiendung befinden sich in %s");
define("_AM_NW_FEXAMPLE","z.B.: games.gif");
define("_AM_NW_ADDSUBTOPIC","Ein Unterthema hinzufügen");
define("_AM_NW_IN","in");
define("_AM_NW_MODIFYTOPIC","Thema ändern");
define("_AM_NW_MODIFY","Ändern");
define("_AM_NW_PARENTTOPIC","Übergeordnetes Thema");
define("_AM_NW_SAVECHANGE","Äderungen sichern");
define("_AM_NW_DEL","Löschen");
define("_AM_NW_CANCEL","Abbrechen");
define("_AM_NW_WAYSYWTDTTAL","WARNUNG: Sind Sie sicher, dass Sie dieses Thema und alle damit verbundenen Artikel und Kommentare löschen wollen?");



// Added in Beta6
define("_AM_NW_TOPICSMNGR","Themenmanager - Themenbereiche insgesamt ");
define("_AM_NW_PEARTICLES","Artikel veröffentlichen / bearbeiten");
define("_AM_NW_NEWSUB","Neuzugänge");
define("_AM_NW_POSTED","Veröffentlicht");
define("_AM_NW_GENERALCONF","Modulkonfiguration");

// Added in RC2
define("_AM_NW_TOPICDISPLAY","Themenbild anzeigen?");
define("_AM_NW_TOPICALIGN","Position");
define("_AM_NW_RIGHT","Rechts");
define("_AM_NW_LEFT","Links");

define("_AM_NW_EXPARTS","Abgelaufene Artikel");
define("_AM_NW_EXPIRED","Abgelaufen");
define("_AM_NW_CHANGEEXPDATETIME","Datum/Uhrzeit des Ablaufs ändern");
define("_AM_NW_SETEXPDATETIME","Datum/Uhrzeit des Ablaufs setzen: ");
define("_AM_NW_NOWSETEXPTIME","Aktuell eingestellt auf: %s");

// Added in RC3
define("_AM_NW_ERRORTOPICNAME","Sie müssen einen Themennamen angeben!");
define("_AM_NW_EMPTYNODELETE","Nichts zu löschen!");

// Added 240304 (Mithrandir)
define("_AM_NW_GROUPPERM","Gruppenberechtigungen setzen");

define("_AM_NW_SELFILE","Datei zum upload auswählen");

// Added by Herve
define("_AM_NW_UPLOAD_DBERROR_SAVE","Fehler beim Anhängen der Datei zum Artikel");
define("_AM_NW_UPLOAD_ERROR","Fehler beim Hochladen der Datei");
define("_AM_NW_UPLOAD_ATTACHFILE","Angehängte Datei(en)");
define("_AM_NW_APPROVEFORM","Genehmigungs - berechtigungen");
define("_AM_NW_SUBMITFORM","Schreib - berechtigungen");
define("_AM_NW_VIEWFORM","Lese - berechtigungen");
define("_AM_NW_APPROVEFORM_DESC","Wählen, wer Artikel genehmigen darf");
define("_AM_NW_SUBMITFORM_DESC","Wählen, wer Artikel schreiben darf");
define("_AM_NW_VIEWFORM_DESC","Wählen, wer welche Themen sehen darf");
define("_AM_NW_DELETE_SELFILES","Lösche ausgewählte Dateien");
define("_AM_NW_TOPIC_PICTURE","Bild hochladen");
define("_AM_NW_UPLOAD_WARNING","<B>Achtung, nicht vergessen die Schreibberechtigung für folgende Verzeichnisse einzurichten : %s</B>");


define("_AM_NW_UPGRADECOMPLETE","Upgrade abgeschlossen");
define("_AM_NW_UPDATEMODULE","Update Modul- templates und blöcke");
define("_AM_NW_UPGRADEFAILED","Upgrade fehlgeschlagen");
define("_AM_NW_UPGRADE","Upgrade");
define("_AM_NW_ADD_TOPIC","Ein Thema hinzufügen");
define("_AM_NW_ADD_TOPIC_ERROR","Fehler, dieses Thema existiert schon!");
define("_AM_NW_ADD_TOPIC_ERROR1","Fehler, dieses Thema kann nicht als Übergeordnetes Thema gewählt werden!");
define("_AM_NW_SUB_MENU","Dieses Thema als Sub-Menü eintragen");


define("_AM_NW_SUB_MENU_YESNO","Sub-Menü?");
define("_AM_NW_HITS","Aufrufe");
define("_AM_NW_CREATED","Erstellt");

define("_AM_NW_TOPIC_DESCR","Themen Beschreibung");
define("_AM_NW_USERS_LIST","Mitgliederliste");
define("_AM_NW_PUBLISH_FRONTPAGE","Eintrag im Hauptmenü?");
define("_AM_NW_UPGRADEFAILED1","Konnte folgende Tabelle nicht erzeugen: stories_files");
define("_AM_NW_UPGRADEFAILED2","Konnte die Thementitellänge (topic title's length) nicht ändern");
define("_AM_NW_UPGRADEFAILED21","Konnte die neuen Felder in (topics table) nicht zufügen");
define("_AM_NW_UPGRADEFAILED3","Konnte folgende Tabelle nicht erzeugen: stories_votedata");
define("_AM_NW_UPGRADEFAILED4","Konnte die beiden Felder 'rating' and 'votes' in der Tabelle 'story' nicht zufügen");
define("_AM_NW_UPGRADEFAILED0","Bitte beachte die Warnmeldung(en). Versuche die Probleme mittels phpMyadmin und den sql Definitionen, die im 'sql' Ordner des news Moduls zu finden sind, zu beheben.");

define("_AM_NW_UPGR_ACCESS_ERROR","Fehler, es muss das upgrade script (mit Adminrechten für das Modul) ausgeführt werden.");
define("_AM_NW_PRUNE_BEFORE","Artikel aufräumen, die veröffentlicht wurden vor:");
define("_AM_NW_PRUNE_EXPIREDONLY","Nur Artikel aufräumen die abgelaufen sind.");
define("_AM_NW_PRUNE_CONFIRM","Warnung, alle Artikel (u. Kommentare zum Artikel) vor %s  <br />werden für immer gelöscht. Dies kann nicht rückgängig gemacht werden. <br />Es wurden %s Artikel für den Zeitraum gefunden.<br />Absolut sicher?");

define("_AM_NW_PRUNE_TOPICS","Ein oder mehrere Themenbereich(e) auswählen");
define("_AM_NW_PRUNENEWS","Artikel aufräumen");
define("_AM_NW_EXPORT_NEWS","Artikel exportieren");
define("_AM_NW_EXPORT_NOTHING","Es wurde kein Artikel zum exportieren gefunden. Bitte die Auswahl überprüfen.");

define("_AM_NW_PRUNE_DELETED","%d Artikel wurde(n) gelöscht");
define("_AM_NW_PERM_WARNING","<h2>Warnung, es gibt 3 Formulare mit jeweils eigenem 'abschicken' Knopf.</h2>");

define("_AM_NW_EXPORT_BETWEEN","Artikel exportieren zwischen");
define("_AM_NW_EXPORT_AND"," und ");
define("_AM_NW_EXPORT_PRUNE_DSC","Hier den / die Themenbereiche(e) auswählen, auf die die Aktion angewendet wird.<br/>Wird kein Themengebiet gewählt, sind alle Themenbereiche automatisch gewählt.");

define("_AM_NW_EXPORT_INCTOPICS","Inklusive der Themenbeschreibung?");
define("_AM_NW_EXPORT_ERROR","Fehler beim erzeugen der Datei %s. Vorgang gestoppt.");

define("_AM_NW_EXPORT_READY","Die xml Exportdatei kann runter geladen werden. <br />Zum Runterladen, <a target='_blank' href='%s'>diesen link klicken</a>.<br />Nach Fertigstellung, nicht vergessen <a href='%s'>mit diesem Link</a> zu löschen.");
define("_AM_NW_RSS_URL","URL des RSS Feed");
define("_AM_NW_NEWSLETTER","Newsletter");
define("_AM_NW_NEWSLETTER_BETWEEN","Artikel auswählen die veröffentlicht wurden zwischen");
define("_AM_NW_NEWSLETTER_READY","Die Newsletterdatei kann runter geladen werden. <br />Zum Runterladen, <a target='_blank' href='%s'>diesen link klicken</a>.<br />Nach Fertigstellung, nicht vergessen <a href='%s'>mit diesem Link</a> zu löschen.");
define("_AM_NW_DELETED_OK","Datei erfolgreich gelöscht");
define("_AM_NW_DELETED_PB","Fehler, die Datei konnte nicht gelöscht werden.");

define("_AM_NW_STATS0","Themenstatistik");
define("_AM_NW_STATS","Statistiken");
define("_AM_NW_STATS1","Einzelne Autoren");
define("_AM_NW_STATS2","Gesamt");
define("_AM_NW_STATS3","Artikelstatistik");
define("_AM_NW_STATS4","Am häufigsten gelesene Artikel");
define("_AM_NW_STATS5","Am wenigsten gelesene Artikel");
define("_AM_NW_STATS6","Am besten bewertete Artikel");
define("_AM_NW_STATS7","Am häufigsten gelesene Autoren");
define("_AM_NW_STATS8","Am besten bewertete Autoren");
define("_AM_NW_STATS9","Haben am meisten geschrieben");
define("_AM_NW_STATS10","Autorenstatistik");
define("_AM_NW_STATS11","Anzahl der Artikel");
define("_AM_NW_HELP","Hilfe");
define("_AM_NW_MODULEADMIN","Moduladmin");
define("_AM_NW_GENERALSET","Modulkonfiguration");
define("_AM_NW_GOTOMOD","Zum Modul");
define("_AM_NW_NOTHING","Es wurde keine Datei zum runterladen gefunden. Bitte die Auswahl überprüfen.");
define("_AM_NW_NOTHING_PRUNE","Es wurde kein Artikel zum aufräumen gefunden. Bitte die Auswahl überprüfen.");


define("_AM_NW_TOPIC_COLOR","Themenfarbe");
define("_AM_NW_COLOR","Farbe");
define("_AM_NW_REMOVE_BR","Den html tag &lt;br&gt; zu einer neuen Zeile konvertieren?");
// Added in 1.3 RC2
define("_AM_NW_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Bitte das Modul updaten!</font></a>");

// Added in verisn 1.50
define('_AM_NW_NEWSLETTER_HEADER',"Header");
define('_AM_NW_NEWSLETTER_FOOTER',"Footer");
define('_AM_NW_NEWSLETTER_HTML_TAGS',"Html Tags entfernen?");
define('_AM_NW_VERIFY_TABLES','Tabellen pflegen');
define('_AM_NW_METAGEN',"Metagen");
define('_AM_NW_METAGEN_DESC',"Metagen ist ein System das Sie bei der Indexierung für Suchmaschinen unterstützt. <br />Bitte beachten Sie, wenn Sie selbst Keywords und Meta Daten eingeben, wird das System diese automatisch generieren.");

define('_AM_NW_BLACKLIST',"Blacklist");
define('_AM_NW_BLACKLIST_DESC',"Worte und Begriffe in dieser Liste werden nicht in Keywords und Mata Daten übernommen");
define('_AM_NW_BLACKLIST_ADD',"Hinzufügen");
define('_AM_NW_BLACKLIST_ADD_DSC',"Begriff eintragen um zur Liste hinzuzufügen<br />(Jeder begriff in eine neue Zeile)");
define('_AM_NW_META_KEYWORDS_CNT',"Maximale Anzahl der Meta Keywords für das automatische genrieren ist erreicht.");
define('_AM_NW_META_KEYWORDS_ORDER',"Keywords Reihenfolge");
define('_AM_NW_META_KEYWORDS_INTEXT',"In der Reihenfolge erstellen, in der sie gelistet werden sollen.");
define('_AM_NW_META_KEYWORDS_FREQ1',"Reihenfolge der Wiederholung");
define('_AM_NW_META_KEYWORDS_FREQ2',"Zurücksetzen der Reihenfolge");

// Added in version 1.67 Beta
define("_AM_NW_SUBPREFIX","Sub-prefix");

define("_AM_NW_CLONER","Klon Manager");
define("_AM_NW_CLONER_CLONES","Klone");
define("_AM_NW_CLONER_ADD","Klon hinzufügen");
define("_AM_NW_CLONER_ID","ID");
define("_AM_NW_CLONER_NAME","Name");
define("_AM_NW_CLONER_DIRFOL","Verzeichnis/Ordner");
define("_AM_NW_CLONER_VERSION","Version");

define("_AM_NW_CLONER_NEWNAME","Neuer Modulname");
define("_AM_NW_CLONER_NEWNAMEDESC","Betrifft auch die Erzeugung des neuen Modul Ordners. <br /> Gr0ß-/Kleinbuchstaben werden ignoriert und korrigiert. <br /> zB.: neuer Name = <b>Aktuelles</b> neuer Ordner  = <b>aktuelles</b>, <br /> nuer Name <b>Mein Aktuelles</b> neuer Ordner = <b>meinaktuelles</b>. <br /><br /> Start Modul ist: <font color='#008400'><b> %s </b></font><br />");
define("_AM_NW_CLONER_NEWNAMELABEL","Neues Modul:");

define("_AM_NW_CLONER_DIREXISTS","Ordner '%s' existiert bereits!");
define("_AM_NW_CLONER_CREATED","Modul '%s' wurde korrekt geklont!");
define("_AM_NW_CLONER_UPRADED","Modul '%s' wurde korrekt aktualisiert!");
define("_AM_NW_CLONER_NOMODULEID","Modul ID wurde nicht angegeben!"); 

define("_AM_NW_CLONER_UPDATE","Update");
define("_AM_NW_CLONER_INSTALL","Install");
define("_AM_NW_CLONER_UNINSTALL","Uninstall");
define("_AM_NW_CLONER_ACTION_INSTALL","Install/Uninstall"); 

define("_AM_NW_CLONER_IMPORTNEWS","Importiere original News Modul Daten");
define("_AM_NW_CLONER_IMPORTNEWSDESC1","Original News Modul existiert! Daten jetzt importieren?");
define("_AM_NW_CLONER_IMPORTNEWSDESC2","Der Import Button erscheint nur, wenn die x"."News 'stories' Tabelle leer ist. <br />
                                         wenn vor dem importieren bereits Inhalte hinzugefügt wurden,<br />
                                         muß x"."News de- und neu installiert werden! <br />
                                         Falls die Daten bereits importiert wurden, ist nichts weiter nötig.");
define("_AM_NW_CLONER_IMPORTNEWSSUB","Import");
define("_AM_NW_CLONER_NEWSIMPORTED","Original News Modul Daten korrekt importiert");
?>
