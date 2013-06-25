<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NW_NAME','Artikel');

// A brief description of this module
define('_MI_NW_DESC','Erzeugt einen Artikelbereich in dem Mitglieder Artikel und Kommentare schreiben können.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NW_BNAME1','Artikelthemen-Block');
define('_MI_NW_BNAME3','Leitartikel-Block');
define('_MI_NW_BNAME4','Top Artikel-Block');
define('_MI_NW_BNAME5','Aktuellste Artikel');
define('_MI_NW_BNAME6','Artikel moderieren');
define('_MI_NW_BNAME7','In Themenbereichen navigieren');

// Sub menus in main menu block
define('_MI_NW_SMNAME1','Artikel schreiben');
define('_MI_NW_SMNAME2','Archiv');

// Names of admin menu items
define('_MI_NW_ADMENU2','Themenmanager');
define('_MI_NW_ADMENU3','Artikel veröffentlichen / bearbeiten');
define('_MI_NW_GROUPPERMS','Berechtigungen');
// Added by Herve or prune option
define('_MI_NW_PRUNENEWS','Artikel aufräumen');
// Added by Herve
define('_MI_NW_EXPORT','Artikel exportieren');

// Title of config items
define('_MI_NW_STORYHOME','Wieviel Artikel auf der Indexseite?');
define('_MI_NW_NOTIFYSUBMIT','Bei Artikeleingang den Webmaster benachrichtigen?');
define('_MI_NW_DISPLAYNAV','Navigations-Box anzeigen?');
define('_MI_NW_AUTOAPPROVE','Artikel automatisch veröffentlichen?');
define("_MI_NW_ALLOWEDSUBMITGROUPS","Gruppen, die Artikel schreiben dürfen");
define("_MI_NW_ALLOWEDAPPROVEGROUPS","Gruppen, die Artikel genehmigen dürfen");
define("_MI_NW_NEWSDISPLAY","Layout der Artikelansicht");
define("_MI_NW_NAMEDISPLAY","Name des Autors");
define("_MI_NW_COLUMNMODE","Spalten");
define("_MI_NW_STORYCOUNTADMIN","Anzahl der neuen Artikel in der Admin-Ansicht. (Diese Option limitiert die Anzahl der Themen im Adminbereich und der Statistikanzeige): ");
define('_MI_NW_UPLOADFILESIZE','MAX Upload-Dateigröße (KB) 1048576 = 1 MB');
define("_MI_NW_UPLOADGROUPS","Für Upload berechtigte Gruppen");


// Description of each config items
define('_MI_NW_STORYHOMEDSC','Artikelanzahl auf der Startseite');
define('_MI_NW_NOTIFYSUBMITDSC','Bei Artikeleingang eine Nachricht an den Webmaster schicken');
define('_MI_NW_DISPLAYNAVDSC','Wird diese Option gewählt, wird eine Navigations-Box (pull down) angezeigt mit der man durch die Themenbereiche navigieren kann.');
define('_MI_NW_AUTOAPPROVEDSC','Artikel automatisch, ohne Genehmigungsprozedur veröffentlicht');
define("_MI_NW_ALLOWEDSUBMITGROUPSDESC","Die selektierten Gruppen sind berechtigt neue Artikel zu schreiben");
define("_MI_NW_ALLOWEDAPPROVEGROUPSDESC","Die selektierten Gruppen sind berechtigt neue Artikel zu genehmigen");
define("_MI_NW_NEWSDISPLAYDESC","Klassisch, zeigt alle Artikel sortiert nach Datum der Veröffentlichung. Artikel nach Themen, gruppiert die Artikel nach Themen mit dem letzten Artikel im Ganzen und die anderen nur mit der Überschrift");
define('_MI_NW_ADISPLAYNAMEDSC','Wählen Sie, wie der Name des Autors angezeigt wird');
define("_MI_NW_COLUMNMODE_DESC","Sie können die Anzahl der Spalten für die Artikelliste wählen");
define("_MI_NW_STORYCOUNTADMIN_DESC","");
define("_MI_NW_UPLOADFILESIZE_DESC","");
define("_MI_NW_UPLOADGROUPS_DESC","Wählen Sie die Gruppen die auf den Server hochladen dürfen");

// Name of config item values
define("_MI_NW_NEWSCLASSIC","Klassisch");
define("_MI_NW_NEWSBYTOPIC","Nach Themen");
define("_MI_NW_DISPLAYNAME1","Username");
define("_MI_NW_DISPLAYNAME2","Realer Name");
define("_MI_NW_DISPLAYNAME3","Autor nicht anzeigen");
define("_MI_NW_UPLOAD_GROUP1","Absender und Genehmiger");
define("_MI_NW_UPLOAD_GROUP2","Nur Genehmiger");
define("_MI_NW_UPLOAD_GROUP3","Upload nicht erlaubt");

// Text for notifications

define('_MI_NW_GLOBAL_NOTIFY','Allgemein');
define('_MI_NW_GLOBAL_NOTIFYDSC','Allgemeine News-Benachrichtigungsoptionen.');

define('_MI_NW_STORY_NOTIFY','Story');
define('_MI_NW_STORY_NOTIFYDSC','Benachrichtigungsoptionen die den aktuellen Artikel betreffen.');

define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFY','Neues Thema');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYCAP','Benachrichtigen wenn ein neues Thema angelegt worden ist.');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYDSC','Benachrichtigung wenn ein neues Thema angelegt worden ist.');
define('_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neues Thema');

define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFY','Neuer Artikel eingeschickt');
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYCAP','Benachrichtigen wenn ein neuer Artikel eingeschickt worden ist (noch freizugeben).');
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYDSC','Eine Benachrichtigung erhalten wenn ein neuer Artikel eingeschickt worden ist, der noch freizugeben ist.');
define('_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Artikel eingeschickt');

define('_MI_NW_GLOBAL_NEWSTORY_NOTIFY','Neuer Artikel');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYCAP','Benachrichtigen wenn ein neuer Artikel veröffentlicht worden ist.');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYDSC','Eine Benachrichtigung erhalten wenn ein neuer Artikel veröffentlicht worden ist.');
define('_MI_NW_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Artikel veröffentlicht');

define('_MI_NW_STORY_APPROVE_NOTIFY','Artikel freigegeben');
define('_MI_NW_STORY_APPROVE_NOTIFYCAP','Benachrichtigen wenn dieser Artikel freigegeben worden ist.');
define('_MI_NW_STORY_APPROVE_NOTIFYDSC','Eine Benachrichtigung wenn dieser Artikel freigegeben worden ist.');
define('_MI_NW_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Artikel freigegeben');

define('_MI_NW_RESTRICTINDEX','Themen auf der Indexseite einschränken?');
define('_MI_NW_RESTRICTINDEXDSC','Wenn auf ja gesetzt, sehen die User im Index nur die Artikel aufgelistet, für die sie auch die Berechtigung haben');

define('_MI_NW_NEWSBYTHISAUTHOR','Artikel vom Autor');
define('_MI_NW_NEWSBYTHISAUTHORDSC','Wenn diese Option gewählt wird, erscheint ein Link \'Artikel vom selben Autor\' ');

define('_MI_NW_PREVNEX_LINK','Anzeigen? \'Voriger Artikel\' und \'Nächster Artikel Link\' ');
define('_MI_NW_PREVNEX_LINK_DESC','Wenn diese Option gewählt wird, erscheinen diese zwei Links unten auf den Artikelseiten.');
define('_MI_NW_SUMMARY_SHOW','Eine Zusammenfassung anzeigen?');
define('_MI_NW_SUMMARY_SHOW_DESC','Wenn diese Option gewählt wird, erscheint eine Zusammenfassung aller bisher veröffentlichten Artikeln am Ende jeder Artikelseite.');
define('_MI_NW_AUTHOR_EDIT','Dürfen Autoren ihre eigenen Artikel editieren?');
define('_MI_NW_AUTHOR_EDIT_DESC','Wenn diese Option gewählt wird, können die Artikelautoren ihre eigenen Artikel editieren.');
define('_MI_NW_RATE_NEWS','Dürfen Besucher die Artikel bewerten?');
define('_MI_NW_TOPICS_RSS','Sollen RSS feeds für Themen aktiviert werden?');
define('_MI_NW_TOPICS_RSS_DESC',"Wenn diese Option gewählt wird, sind die Themeninhalte per RSS Feeds abrufbar.");
define('_MI_NW_DATEFORMAT',"Datumsformat");
define('_MI_NW_DATEFORMAT_DESC',"Weitere Informationen zur Formatierung findet man hier: (http://de3.php.net/manual/de/function.date.php) Wenn nichts eingetragen wird, wird die Standardformatierung verwendet.");
define('_MI_NW_META_DATA',"Dürfen Meta Daten (Schlüsselwörter u. Beschreibungen) hinzugefügt werden?");
define('_MI_NW_META_DATA_DESC',"Wenn diese Option gewählt wird, können die Gruppen die Artikel genehmigen dürfen Meta Daten hinzufügen.");
define('_MI_NW_BNAME8','Zufällige Artikel');
define('_MI_NW_NEWSLETTER','Newsletter');
define('_MI_NW_STATS','Statistik');
define("_MI_NW_FORM_OPTIONS","Eingabe Optionen");
define("_MI_NW_FORM_COMPACT","Kompakt");
define("_MI_NW_FORM_DHTML","DHTML");
define("_MI_NW_FORM_SPAW","Spaw Editor");
define("_MI_NW_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_NW_FORM_FCK","FCK Editor");
define("_MI_NW_FORM_KOIVI","Koivi Editor");
define("_MI_NW_FORM_OPTIONS_DESC","Hier kann gewählt werden welcher Editor zur Eingabe verwendet wird. Wurde kein spezieller Editor installiert, kann nur kompakt oder DHTML gewählt werden.");
define("_MI_NW_KEYWORDS_HIGH","Schlüsselwörter farblich hervorheben?");
define("_MI_NW_KEYWORDS_HIGH_DESC","Wenn diese Option gewählt wird, werden die eingegebenen Wörter aus der Suchmaske farblich im Text hervorgehoben.");
define("_MI_NW_HIGH_COLOR","Farbe der hervorgehobenen Wörter");
define("_MI_NW_HIGH_COLOR_DES","Diese Option wird nur genutzt falls in der vorigen Option ja gewählt wurde.");
define("_MI_NW_INFOTIPS","Tooltip Länge");
define("_MI_NW_INFOTIPS_DES","Wenn diese Option gewählt wird, enthalten die Links zu den Artikel die ersten (n) Zeichen des Artikels. Wird 0 gewählt sind die Tooltips leer.");
define("_MI_NW_SITE_NAVBAR","Soll die Mozilla und Opera Navigation's Bar aktiviert werden?");
define("_MI_NW_SITE_NAVBAR_DESC","Wenn diese Option gewählt wird, können Besucher mit Hilfe der Sidebar durch die Artikel navigieren.");
define("_MI_NW_TABS_SKIN","Den Skin auswählen wie die Tabs aussehen sollen.");
define("_MI_NW_TABS_SKIN_DESC","Dieser Skin wird genutzt um in allen Blöcken die Tabs zu nutzen.");
define("_MI_NW_SKIN_1","Bar Style");
define("_MI_NW_SKIN_2","Abgeschrägt");
define("_MI_NW_SKIN_3","Klassisch");
define("_MI_NW_SKIN_4","Ordner");
define("_MI_NW_SKIN_5","MacOs");
define("_MI_NW_SKIN_6","Flach");
define("_MI_NW_SKIN_7","Rund");
define("_MI_NW_SKIN_8","ZDnet Style");

// Added in version 1.50
define("_MI_NW_BNAME9","Archive");
define("_MI_NW_FORM_TINYEDITOR","Tiny Editor");
define("_MI_NW_FOOTNOTES","Links in druckbarer Version in Artikeln anzeigen?");
define("_MI_NW_DUBLINCORE","Aktiviere Dublin Core Metadata ?");
define("_MI_NW_DUBLINCORE_DSC","Für weitere Informationen, <a href='http://dublincore.org/'>besuchen Sie diesen Link</a>");
define("_MI_NW_BOOKMARK_ME","Anzeigen von 'Bookmark diesen Artikel auf dieser Seite' Block?");
define("_MI_NW_BOOKMARK_ME_DSC","Dieser Block wird auf der Artikelseite angezeigt");
define("_MI_NW_FF_MICROFORMAT","Aktivieren von Firefox 2 Micro Zusamenfassung?");
define("_MI_NW_FF_MICROFORMAT_DSC","Für weitere Informationen, besuchen <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>Sie diese Website</a>");
define("_MI_NW_WHOS_WHO","Who's Who");
define("_MI_NW_METAGEN","Metagen");
define("_MI_NW_TOPICS_DIRECTORY","Themenverzeichnis");
define("_MI_NW_ADVERTISEMENT","Reklame- oder Werbeanzeige");
define("_MI_NW_ADV_DESCR","Einen Text oder z.B. auch Java Script eintragen um im Artikel anzeigen zu lassen.");
define("_MI_NW_MIME_TYPES","Hier die erlaubten Mime Types (Dateiformate) eintragen (separarieren durch neue Zeileneingabe)");
define("_MI_NW_ENHANCED_PAGENAV","Erweiterte Setennavigation nutzen?");
define("_MI_NW_ENHANCED_PAGENAV_DSC",">Mit dieser Option bzw. durch diesen Befehl können Sie einen Seitenumbruch erzwingen : [pagebreak:Titel oder Überschrift], Links werden dann in einer DropDown Liste angezeigt und Sie können auch die Zusammenfassung nutzen [summary] um eine automatische Zusammenfassung zu erstellen");

// Added in version 1.54
define('_MI_NW_CATEGORY_NOTIFY','Kategorie');
define('_MI_NW_CATEGORY_NOTIFYDSC','Benachrichtigungsoption auf die gegenwärtige Kategorie');

define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFY','Der neuer Artikel wurde eingereicht');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYCAP','Benachrichtige mich, wenn ein neuer Artikel in dieser Kategorie bekannt gegeben wird.');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYDSC','Mitteilung erhalten, wenn ein neuer Artikel in dieser Kategorie bekannt gegeben wird.');
define('_MI_NW_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Neuer Artikel');

// Added in version 1.63
define('_MI_NW_TAGS',"Tag System benutzen ?");
define('_MI_NW_TAGS_DSC',"Erfordert das  XOOPS Tag Modul von phppp");
define("_MI_NW_BNAME10","Wortwolke");
define("_MI_NW_BNAME11","Top Worte");
define("_MI_NW_INTRO_TEXT","Einleitungstext auf der Einsendeseite");
define("_MI_NW_IMAGE_MAX_WIDTH","Maximale Image Breite beim anpassen");
define("_MI_NW_IMAGE_MAX_HEIGHT","Maximale Image Höhe beim anpassen");

// Added in version 1.67
define("_MI_NW_CLONER","Klon Manager");

define("_MI_NW_LATESTNEWS_BLOCK","Letzte Neuigkeiten Block");
?>