<?php
// $Id: admin.php 9665 2012-06-17 20:21:31Z beckmi $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Datenbank wurde erfolgreich aktualisiert!");
define("_AM_CONFIG","Artikelkonfiguration");
define("_AM_AUTOARTICLES","Automatisierte Artikel");
define("_AM_STORYID","Artikel-ID");
define("_AM_TITLE","Titel");
define("_AM_TOPIC","Thema");
define("_AM_POSTER","Autor");
define("_AM_PROGRAMMED","Zeitgesteuerte Veröffentlichung");
define("_AM_ACTION","Aktion");
define("_AM_EDIT","Bearbeiten");
define("_AM_DELETE","Löschen");
define("_AM_LAST10ARTS","Die letzten %d Artikel");
define("_AM_PUBLISHED","Veröffentlicht am"); // Published Date
define("_AM_GO","Los!");
define("_AM_EDITARTICLE","Bearbeite Artikel");
define("_AM_POSTNEWARTICLE","Neuen Artikel veröffentlichen");
define("_AM_ARTPUBLISHED","Dein Artikel wurde veröffentlicht!");
define("_AM_HELLO","Hallo %s,");
define("_AM_YOURARTPUB","Der von dir verfasste Artikel wurde veröffentlicht.");
define("_AM_TITLEC","Titel: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Veröffentlicht: ");
define("_AM_RUSUREDEL","Sind Sie sicher, dass Sie diesen Artikel und alle damit verbundenen Kommentare löschen wollen?");

define("_AM_YES","Ja");
define("_AM_NO","Nein");
define("_AM_INTROTEXT","Einführungstext");
define("_AM_EXTEXT","Erweiterter Text:");
define("_AM_ALLOWEDHTML","HTML-Tags erlauben:");
define("_AM_DISAMILEY","Smilies deaktivieren");
define("_AM_DISHTML","HTML deaktivieren");
define("_AM_APPROVE","Freigeben");
define("_AM_MOVETOTOP","Artikel nach oben verschieben");
define("_AM_CHANGEDATETIME","Datum/Uhrzeit der Veröffentlichung ändern");
define("_AM_NOWSETTIME","Veröffentlichung ist eingestellt auf: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktuelle Uhrzeit: %s");  // %s is the current datetime
define("_AM_SETDATETIME","<b>Datum/Uhrzeit der Veröffentlichung setzen:</b>");
define("_AM_MONTHC","Monat:");
define("_AM_DAYC","Tag:");
define("_AM_YEARC","Jahr:");
define("_AM_TIMEC","Uhrzeit:");
define("_AM_PREVIEW","Vorschau");
define("_AM_SAVE","Sichern");
define("_AM_PUBINHOME","Auf der Homepage anzeigen?");
define("_AM_ADD","Hinzufügen");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Ein Hauptthema hinzufügen");
define("_AM_TOPICNAME","Thementitel");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(max. 255 Zeichen)");
define("_AM_TOPICIMG","Themenbild");
define("_AM_IMGNAEXLOC","Bildname + Dateiendung befinden sich in %s");
define("_AM_FEXAMPLE","z.B.: games.gif");
define("_AM_ADDSUBTOPIC","Ein Unterthema hinzufügen");
define("_AM_IN","in");
define("_AM_MODIFYTOPIC","Thema ändern");
define("_AM_MODIFY","Ändern");
define("_AM_PARENTTOPIC","Übergeordnetes Thema");
define("_AM_SAVECHANGE","Äderungen sichern");
define("_AM_DEL","Löschen");
define("_AM_CANCEL","Abbrechen");
define("_AM_WAYSYWTDTTAL","WARNUNG: Sind Sie sicher, dass Sie dieses Thema und alle damit verbundenen Artikel und Kommentare löschen wollen?");



// Added in Beta6
define("_AM_TOPICSMNGR","Themenmanager - Themenbereiche insgesamt ");
define("_AM_PEARTICLES","Artikel veröffentlichen / bearbeiten");
define("_AM_NEWSUB","Neuzugänge");
define("_AM_POSTED","Veröffentlicht");
define("_AM_GENERALCONF","Modulkonfiguration");

// Added in RC2
define("_AM_TOPICDISPLAY","Themenbild anzeigen?");
define("_AM_TOPICALIGN","Position");
define("_AM_RIGHT","Rechts");
define("_AM_LEFT","Links");

define("_AM_EXPARTS","Abgelaufene Artikel");
define("_AM_EXPIRED","Abgelaufen");
define("_AM_CHANGEEXPDATETIME","Datum/Uhrzeit des Ablaufs ändern");
define("_AM_SETEXPDATETIME","Datum/Uhrzeit des Ablaufs setzen: ");
define("_AM_NOWSETEXPTIME","Aktuell eingestellt auf: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","Sie müssen einen Themennamen angeben!");
define("_AM_EMPTYNODELETE","Nichts zu löschen!");

// Added 240304 (Mithrandir)
define("_AM_GROUPPERM","Gruppenberechtigungen setzen");

define("_AM_SELFILE","Datei zum upload auswählen");

// Added by Herve
define("_AM_UPLOAD_DBERROR_SAVE","Fehler beim Anhängen der Datei zum Artikel");
define("_AM_UPLOAD_ERROR","Fehler beim Hochladen der Datei");
define("_AM_UPLOAD_ATTACHFILE","Angehängte Datei(en)");
define("_AM_APPROVEFORM","Genehmigungs - berechtigungen");
define("_AM_SUBMITFORM","Schreib - berechtigungen");
define("_AM_VIEWFORM","Lese - berechtigungen");
define("_AM_APPROVEFORM_DESC","Wählen, wer Artikel genehmigen darf");
define("_AM_SUBMITFORM_DESC","Wählen, wer Artikel schreiben darf");
define("_AM_VIEWFORM_DESC","Wählen, wer welche Themen sehen darf");
define("_AM_DELETE_SELFILES","Lösche ausgewählte Dateien");
define("_AM_TOPIC_PICTURE","Bild hochladen");
define("_AM_UPLOAD_WARNING","<B>Achtung, nicht vergessen die Schreibberechtigung für folgende Verzeichnisse einzurichten : %s</B>");


define("_AM_NEWS_UPGRADECOMPLETE","Upgrade abgeschlossen");
define("_AM_NEWS_UPDATEMODULE","Update Modul- templates und blöcke");
define("_AM_NEWS_UPGRADEFAILED","Upgrade fehlgeschlagen");
define("_AM_NEWS_UPGRADE","Upgrade");
define("_AM_ADD_TOPIC","Ein Thema hinzufügen");
define("_AM_ADD_TOPIC_ERROR","Fehler, dieses Thema existiert schon!");
define("_AM_ADD_TOPIC_ERROR1","Fehler, dieses Thema kann nicht als Übergeordnetes Thema gewählt werden!");
define("_AM_SUB_MENU","Dieses Thema als Sub-Menü eintragen");


define("_AM_SUB_MENU_YESNO","Sub-Menü?");
define("_AM_HITS","Aufrufe");
define("_AM_CREATED","Erstellt");

define("_AM_TOPIC_DESCR","Themen Beschreibung");
define("_AM_USERS_LIST","Mitgliederliste");
define("_AM_PUBLISH_FRONTPAGE","Eintrag im Hauptmenü?");
define("_AM_NEWS_UPGRADEFAILED1","Konnte folgende Tabelle nicht erzeugen: stories_files");
define("_AM_NEWS_UPGRADEFAILED2","Konnte die Thementitellänge (topic title's length) nicht ändern");
define("_AM_NEWS_UPGRADEFAILED21","Konnte die neuen Felder in (topics table) nicht zufügen");
define("_AM_NEWS_UPGRADEFAILED3","Konnte folgende Tabelle nicht erzeugen: stories_votedata");
define("_AM_NEWS_UPGRADEFAILED4","Konnte die beiden Felder 'rating' and 'votes' in der Tabelle 'story' nicht zufügen");
define("_AM_NEWS_UPGRADEFAILED0","Bitte beachte die Warnmeldung(en). Versuche die Probleme mittels phpMyadmin und den sql Definitionen, die im 'sql' Ordner des news Moduls zu finden sind, zu beheben.");

define("_AM_NEWS_UPGR_ACCESS_ERROR","Fehler, es muss das upgrade script (mit Adminrechten für das Modul) ausgeführt werden.");
define("_AM_NEWS_PRUNE_BEFORE","Artikel aufräumen, die veröffentlicht wurden vor:");
define("_AM_NEWS_PRUNE_EXPIREDONLY","Nur Artikel aufräumen die abgelaufen sind.");
define("_AM_NEWS_PRUNE_CONFIRM","Warnung, alle Artikel (u. Kommentare zum Artikel) vor %s  <br />werden für immer gelöscht. Dies kann nicht rückgängig gemacht werden. <br />Es wurden %s Artikel für den Zeitraum gefunden.<br />Absolut sicher?");

define("_AM_NEWS_PRUNE_TOPICS","Ein oder mehrere Themenbereich(e) auswählen");
define("_AM_NEWS_PRUNENEWS","Artikel aufräumen");
define("_AM_NEWS_EXPORT_NEWS","Artikel exportieren");
define("_AM_NEWS_EXPORT_NOTHING","Es wurde kein Artikel zum exportieren gefunden. Bitte die Auswahl überprüfen.");

define("_AM_NEWS_PRUNE_DELETED","%d Artikel wurde(n) gelöscht");
define("_AM_NEWS_PERM_WARNING","<h2>Warnung, es gibt 3 Formulare mit jeweils eigenem 'abschicken' Knopf.</h2>");

define("_AM_NEWS_EXPORT_BETWEEN","Artikel exportieren zwischen");
define("_AM_NEWS_EXPORT_AND"," und ");
define("_AM_NEWS_EXPORT_PRUNE_DSC","Hier den / die Themenbereiche(e) auswählen, auf die die Aktion angewendet wird.<br/>Wird kein Themengebiet gewählt, sind alle Themenbereiche automatisch gewählt.");

define("_AM_NEWS_EXPORT_INCTOPICS","Inklusive der Themenbeschreibung?");
define("_AM_NEWS_EXPORT_ERROR","Fehler beim erzeugen der Datei %s. Vorgang gestoppt.");

define("_AM_NEWS_EXPORT_READY","Die xml Exportdatei kann runter geladen werden. <br />Zum Runterladen, <a target='_blank' href='%s'>diesen link klicken</a>.<br />Nach Fertigstellung, nicht vergessen <a href='%s'>mit diesem Link</a> zu löschen.");
define("_AM_NEWS_RSS_URL","URL des RSS Feed");
define("_AM_NEWS_NEWSLETTER","Newsletter");
define("_AM_NEWS_NEWSLETTER_BETWEEN","Artikel auswählen die veröffentlicht wurden zwischen");
define("_AM_NEWS_NEWSLETTER_READY","Die Newsletterdatei kann runter geladen werden. <br />Zum Runterladen, <a target='_blank' href='%s'>diesen link klicken</a>.<br />Nach Fertigstellung, nicht vergessen <a href='%s'>mit diesem Link</a> zu löschen.");
define("_AM_NEWS_DELETED_OK","Datei erfolgreich gelöscht");
define("_AM_NEWS_DELETED_PB","Fehler, die Datei konnte nicht gelöscht werden.");

define("_AM_NEWS_STATS0","Themenstatistik");
define("_AM_NEWS_STATS","Statistiken");
define("_AM_NEWS_STATS1","Einzelne Autoren");
define("_AM_NEWS_STATS2","Gesamt");
define("_AM_NEWS_STATS3","Artikelstatistik");
define("_AM_NEWS_STATS4","Am häufigsten gelesene Artikel");
define("_AM_NEWS_STATS5","Am wenigsten gelesene Artikel");
define("_AM_NEWS_STATS6","Am besten bewertete Artikel");
define("_AM_NEWS_STATS7","Am häufigsten gelesene Autoren");
define("_AM_NEWS_STATS8","Am besten bewertete Autoren");
define("_AM_NEWS_STATS9","Haben am meisten geschrieben");
define("_AM_NEWS_STATS10","Autorenstatistik");
define("_AM_NEWS_STATS11","Anzahl der Artikel");
define("_AM_NEWS_HELP","Hilfe");
define("_AM_NEWS_MODULEADMIN","Moduladmin");
define("_AM_NEWS_GENERALSET","Modulkonfiguration");
define("_AM_NEWS_GOTOMOD","Zum Modul");
define("_AM_NEWS_NOTHING","Es wurde keine Datei zum runterladen gefunden. Bitte die Auswahl überprüfen.");
define("_AM_NEWS_NOTHING_PRUNE","Es wurde kein Artikel zum aufräumen gefunden. Bitte die Auswahl überprüfen.");


define("_AM_NEWS_TOPIC_COLOR","Themenfarbe");
define("_AM_NEWS_COLOR","Farbe");
define("_AM_NEWS_REMOVE_BR","Den html tag &lt;br&gt; zu einer neuen Zeile konvertieren?");
// Added in 1.3 RC2
define("_AM_NEWS_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Bitte das Modul updaten!</font></a>");

// Added in version 1.50
define('_AM_NEWS_NEWSLETTER_HEADER',"Header");
define('_AM_NEWS_NEWSLETTER_FOOTER',"Footer");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS',"Html Tags entfernen?");
define('_AM_NEWS_VERIFY_TABLES','Tabellen pflegen');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen ist ein System das Sie bei der Indexierung für Suchmaschinen unterstützt. <br />Bitte beachten Sie, wenn Sie selbst Keywords und Meta Daten eingeben, wird das System diese automatisch generieren.");

define('_AM_NEWS_BLACKLIST',"Blacklist");
define('_AM_NEWS_BLACKLIST_DESC',"Worte und Begriffe in dieser Liste werden nicht in Keywords und Mata Daten übernommen");
define('_AM_NEWS_BLACKLIST_ADD',"Hinzufügen");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Begriff eintragen um zur Liste hinzuzufügen<br />(Jeder begriff in eine neue Zeile)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maximale Anzahl der Meta Keywords für das automatische genrieren ist erreicht.");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Keywords Reihenfolge");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"In der Reihenfolge erstellen, in der sie gelistet werden sollen.");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Reihenfolge der Wiederholung");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Zurücksetzen der Reihenfolge");
?>