<?php
// $Id$
//%%%%%%		File Name index.php 		%%%%%
define("_AMS_NW_PRINTER","Drucker geeignete Seite");
define("_AMS_NW_SENDSTORY","Sende diesen Artikel einem Freund");
define("_AMS_NW_READMORE","Lesen Sie mehr ...");
define("_AMS_NW_COMMENTS","Kommentare?");
define("_AMS_NW_ONECOMMENT","1 Kommentar");
define("_AMS_NW_BYTESMORE","%s Wörter mehr");
define("_AMS_NW_NUMCOMMENTS","%s Kommentare");
define("_AMS_NW_MORERELEASES","Mehr Versionen in ");


//%%%%%%		File Name submit.php		%%%%%
define("_AMS_NW_SUBMITNEWS","Artikel abschicken");
define("_AMS_NW_TITLE","Titel");
define("_AMS_NW_TOPIC","Thema");
define("_AMS_NW_THESCOOP","Artikel Text");
define("_AMS_NW_NOTIFYPUBLISH","Benachrichtigung per Mail wenn veröffentlicht");
define("_AMS_NW_POST","Absenden");
define("_AMS_NW_GO","Freigeben!");
define("_AMS_NW_THANKS","Danke für Ihre Einreichung."); //submission of news article

define("_AMS_NW_NOTIFYSBJCT","Artikel für meine Site"); // Notification mail subject
define("_AMS_NW_NOTIFYMSG","Sie haben eine neue Artikel Einreichung für Ihre Site."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_AMS_NW_NEWSARCHIVES","Artikel Archiv");
define("_AMS_NW_ARTICLES","Artikel");
define("_AMS_NW_VIEWS","Gesehen");
define("_AMS_NW_DATE","Datum");
define("_AMS_NW_ACTIONS","Aktionen");
define("_AMS_NW_PRINTERFRIENDLY","Drucker geeignete Seite");

define("_AMS_NW_THEREAREINTOTAL","Es gibt gesamt %s Artikel");

// %s is your site name
define("_AMS_NW_INTARTICLE","Interessanter Artikel auf %s");
define("_AMS_NW_INTARTFOUND","Hier ist ein interessanter Artikel, denn ich auf %s gefunden habe");

define("_AMS_NW_TOPICC","Thema:");
define("_AMS_NW_URL","URL:");
define("_AMS_NW_NOSTORY","Der gewählte Artikel existiert nicht.");

//%%%%%%	File Name print.php 	%%%%%

define("_AMS_NW_URLFORSTORY","Die URL für diesen Artikel ist:");

// %s represents your site name
define("_AMS_NW_THISCOMESFROM","Dieser Artikel stammt von %s");

// Added by Hervé
define("_AMS_NW_ATTACHEDFILES","Angehängte Dateien:");

define("_AMS_NW_MAJOR","Wichtige Änderung?");
define("_AMS_NW_STORYID","Artikel ID");
define("_AMS_NW_VERSION","Version");
define("_AMS_NW_SETVERSION","Setze aktuelle Version");
define("_AMS_NW_VERSIONUPDATED","Aktuelle Version gesetzt auf %s");
define("_AMS_NW_OVERRIDE","Überschreiben");
define("_AMS_NW_FINDVERSION","Finde Version");
define("_AMS_NW_REVISION","Überarbeitung");
define("_AMS_NW_MINOR","Geringfügige Überarbeitung");
define("_AMS_NW_VERSIONDESC","Wähle die Ebene der Änderung - Wenn Sie hier nichts festlegen, wird der Text nicht aktualisiert!");
define("_AMS_NW_NOVERSIONCHANGE","Kein Versionswechsel");
define("_AMS_NW_AUTO","Auto");

define("_AMS_NW_RATEARTICLE","Bewerte Artikel");
define("_AMS_NW_RATE","Bewerte Artikel");
define("_AMS_NW_SUBMITRATING","Bewertung abschicken");
define("_AMS_NW_RATING_SUCCESSFUL","Artikel erfolgreich bewertet");
define("_AMS_NW_PUBLISHED_DATE","Veröffentlichungs Datum: ");
define("_AMS_NW_POSTEDBY","Autor");
define("_AMS_NW_READS","Gelesen");
define("_AMS_NW_AUDIENCE","Zielgruppe");
define("_AMS_NW_SWITCHAUTHOR","Autor aktualisieren?");

//Warnings
define("_AMS_NW_VERSIONSEXIST","%s Version(en) mit höherer Version existieren und  <strong>werden</strong> ÜBERSCHRIEBEN ohne Wiederherstellungsmöglichkeit:");
define("_AMS_NW_AREYOUSUREOVERRIDE","Sind Sie sicher, das Sie diese Versionen ersetzen wollen");
define("_AMS_NW_CONFLICTWHAT2DO","Ein Arktikel mit der errechneten Versionsnummer existiert<br />Was würden Sie gerne machen?<br />Überschreiben: Diese Version wird mit der errechnten Versionsnummer gespeichert und alle höheren Versionsnummern in der selben Versionsgruppe (xx.xx.xx) werden gelöscht<br />Finde Version: Lassen Sie das System die nächste verfügbare Versionsnummer in der selben Versionsgruppe finden");
define("_AMS_NW_VERSIONCONFLICT","Versions Konflikt");
define("_AMS_NW_TRYINGTOSAVE","Versuche zu speichern ");

//Fehler messages
define("_AMS_NW_ERROR","Fehler aufgetreten");
define("_AMS_NW_RATING_FAILED","Bewertung fehlgeschlagen");
define("_AMS_NW_SAVEFAILED","Artikel speichern fehlgeschlagen");
define("_AMS_NW_TEXTSAVEFAILED","Konnte den Artikeltext nicht speichern");
define("_AMS_NW_VERSIONUPDATEFAILED","Konnte die Version nicht aktualisieren");
define("_AMS_NW_COULDNOTRESET","Konnte die Versionen nicht zurücksetzen");
define("_AMS_NW_COULDNOTUPDATEVERSION","Konnte nicht zur aktuellen Version aktualisieren");

define("_AMS_NW_COULDNOTSAVERATING","Konnte Bewertung nicht speichern");
define("_AMS_NW_COULDNOTUPDATERATING","Konnte Artikel Bewertung nicht aktualisieren");

define("_AMS_NW_COULDNOTADDLINK","Link konnte nicht mit dem Artikel verknüpft werden");
define("_AMS_NW_COULDNOTDELLINK","Fehler - Link nicht gelöscht");

define("_AMS_NW_CANNOTVOTESELF","Autor kann keine Artikel bewerten");
define("_AMS_NW_ANONYMOUSVOTEDISABLED","Anonyme Bewertung deaktiviert");
define("_AMS_NW_ANONYMOUSHASVOTED","Diese IP hat diesen Artikel bereits bewertet");
define("_AMS_NW_USERHASVOTED","Sie haben diesen Artikel bereits bewertet");

define("_AMS_NW_NOTALLOWEDAUDIENCE","Sie sind nicht berechtigt, Artikel aus Ebene %s zu lesen");
define("_AMS_NW_NOERRORSENCOUNTERED","Kein Fehler aufgetreten");

//Additional constants
define("_AMS_NW_USERNAME","Benutzername");
define("_AMS_NW_ADDLINK","Link(s) hinzufügen");
define("_AMS_NW_DELLINK","Link(s) entfernen");
define("_AMS_NW_RELATEDARTICLES","Lesen empfehlenswert");
define("_AMS_NW_SEARCHRESULTS","Suchergebnisse:");
define("_AMS_NW_MANAGELINK","Links");
define("_AMS_NW_DELVERSIONS","Lösche Versionen unter dieser Version");
define("_AMS_NW_DELALLVERSIONS","Lösche ALLE Versionen ausgenommen diese Version");
define("_AMS_NW_SUBMIT","Abschicken");
define("_AMS_NW_RUSUREDELVERSIONS","Sind Sie sicher, das Sie ALLE Versionen AUSSERHALB der WIEDERHERSTELLBARKEIT!!! unterhalb dieser Version löschen wollen?");
define("_AMS_NW_RUSUREDELALLVERSIONS","Sind Sie sicher, das Sie ALLE Versionen AUSSERHALB der WIEDERHERSTELLBARKEIT!!! ausgenommen dieser Version löschen wollen??");
define("_AMS_NW_EXTERNALLINK","Externer Link");
define("_AMS_NW_ADDEXTERNALLINK","Externen Link hinzufügen");
define("_AMS_NW_PREREQUISITEARTICLES","Lesen erforderlich");
define("_AMS_NW_LINKTYPE","Link Typ");
define("_AMS_NW_SETTITLE","Setze Titel des Link");
define("_AMS_NW_BANNER","Banner/Sponsor");

define("_AMS_NW_NOTOPICS","Kein Thema existiert - bitte erstellen Sie ein Thema und setzen Sie entsprechende Rechte, bevor Sie einen Artikel abschicken");

define("_AMS_NW_TOTALARTICLES","Total Artikel");

define("_AMS_MA_INDEX","Übersicht");
define("_AMS_MA_SUBTOPICS","Sub-Themen für ");
define("_AMS_MA_PAGEBREAK","PAGEBREAK");
define("_AMS_NW_POSTNEWARTICLE","Schreibe neuen Artikel");

?>