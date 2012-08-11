<?php
// $Id: global.php 747 2006-09-20 20:42:11Z skalpa $
//%%%%%%	File Name mainfile.php 	%%%%%
// german v 1.4 2008/01/08 sato-san / Rene Sato / www.XOOPS-magazine.com $
// Code : UTF-8
// Letzte Bearbeitung 18.09.2008 / Feichtl
define("_PLEASEWAIT","Bitte warten");
define("_FETCHING","Lade...");
define("_TAKINGBACK","Sie werden auf wieder auf die vorherige Seite zurückgebracht...");
define("_LOGOUT","Abmelden");
define("_SUBJECT","Thema");
define("_MESSAGEICON","Nachrichtensymbol");
define("_COMMENTS","Kommentar");
define("_POSTANON","Anonym schreiben");
define("_DISABLESMILEY","Smilies deaktivieren");
define("_DISABLEHTML","HTML deaktivieren");
define("_PREVIEW","Vorschau");

define("_GO","Los!");
define("_NOCOMMENTS","Keine Kommentare");
define("_FLAT","Flach");
define("_THREADED","Diskussion");
define("_NESTED","Verschachtelt");
define("_OLDESTFIRST","Älteste zuerst");
define("_NEWESTFIRST","Neueste zuerst");
define("_MORE","mehr...");
define("_MULTIPAGE","Wenn Ihre Artikel mehrere Seiten umfassen, fügen Sie das Wort <font color=red>[pagebreak]</font> (in Klammern) in den Artikel ein.");
define("_IFNOTRELOAD","Wenn die Seite nicht automatisch neu lädt, klicken Sie bitte <a href=%s>HIER</a>");
define("_WARNINSTALL2","WARNUNG: Das Verzeichnis %s existiert noch auf dem Server. Entfernen Sie bitte dieses Verzeichnis aus Sicherheitsgründen.");
define("_WARNINWRITEABLE","WARNUNG: Die Datei %s ist nicht schreibgeschützt auf dem Server. <br />Bitte setzen Sie die Zugriffsrechte richtig. Ansonsten wird das zu einem Sicherheitsrisiko!<br /> (unter Unix (444), unter Win32 (schreibgeschützt))");
define("_WARNINNOTWRITEABLE","WARNUNG: Verzeichnis %s ist nicht beschreibbar vom Server. <br />Bitte ändern Sie die Schreibrechte dieses Ordners.<br /> für Unix (777), für Windows (readable)");
define("_WARNINXOOPSLIBINSIDE","WARNUNG: Verzeichnis %s ist innerhalb des DocumentRoot! In diesem Ordner befinden sich sensible Daten. Dieser sollte daher vor Zugriffen aus dem Web geschützt werden.");


// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s ist erforderlich" );
define("_XOBJ_ERR_SHORTERTHAN","%s muss mehr als %d Zeichen haben." );


//%%%%%%        File Name themeuserpost.php         %%%%%
define("_PROFILE","Konto");
define("_POSTEDBY","Geschrieben von");
define("_VISITWEBSITE","Website besuchen");
define("_SENDPMTO","Private Nachricht an %s senden");
define("_SENDEMAILTO","E-Mail an %s senden");
define("_ADD","Hinzufügen");
define("_REPLY","Antwort");
define("_DATE","Datum");   // Posted date

//%%%%%%        File Name admin_functions.php         %%%%%
define("_MAIN","Übersicht");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Administration");
define("_YOURHOME","Zurück zur Startseite");

//%%%%%%        File Name misc.php (who's-online popup)        %%%%%
define("_WHOSONLINE","Wer ist online");
define('_GUESTS','Gäste');
define('_MEMBERS','Mitglied(er)');
define("_ONLINEPHRASE","<b>%s</b> Besucher sind online");
define("_ONLINEPHRASEX","<b>%s</b> Besucher halten sich im Bereich <b>%s</b> auf.");
define("_CLOSE","Fenster schließen");  // Close window

//%%%%%%        File Name module.textsanitizer.php         %%%%%
define("_QUOTEC","Zitat:");

//%%%%%%        File Name admin.php         %%%%%
define("_NOPERM","Verzeihung, Sie haben nicht die Erlaubnis, diesen Bereich zu betreten. Gegebenenfalls setzen Sie sich mit dem Webmaster in Verbindung.");

//%%%%%                Common Phrases                %%%%%
define("_NO","Nein");
define("_YES","Ja");
define("_EDIT","Bearbeiten");
define("_DELETE","Löschen");
define("_SUBMIT","Abschicken");
define("_MODULENOEXIST","Das gewählte Modul konnte nicht gefunden werden!");
define("_ALIGN","Ausrichtung");
define("_LEFT","Links");
define("_CENTER","Mittig");
define("_RIGHT","Rechts");
define("_FORM_ENTER","Bitte geben Sie %s ein");
// %s represents file name
define("_MUSTWABLE","Datei %s muss durch den Server beschreibbar sein!");
// Module info
define('_PREFERENCES','Einstellungen');
define("_VERSION","Version");
define("_DESCRIPTION","Beschreibung");
define("_ERRORS","Fehler");
define("_CREDITS","Impressum");
define("_LICENCE","Lizenz");
define("_NONE","Kein");
define('_ON','am');
define('_READS','x gelesen');
define('_WELCOMETO','Herzlich Willkommen auf %s');
define('_SEARCH','Suche');
define('_ALL','Alle');
define('_TITLE','Titel');
define('_OPTIONS','Optionen');
define('_QUOTE','Zitat');
define('_LIST','Liste');
define('_LOGIN','Einloggen');
define('_USERNAME','Mitgliedsname: ');
define('_PASSWORD','Passwort: ');
define("_SELECT","Auswählen");
define("_IMAGE","Bild");
define("_SEND","Senden");
define("_CANCEL","Abbrechen");
define("_ASCENDING","Aufsteigende Reihenfolge");
define("_DESCENDING","Absteigende Reihenfolge");
define('_BACK','Zurück');
define('_NOTITLE','Kein Titel'); //added2.0.5

/* Image manager */
define('_IMGMANAGER','Bildmanager');
define('_NUMIMAGES','%s Bilder');
define('_ADDIMAGE','Bilddatei hinzufügen');
define('_IMAGENAME','Name:');
define('_IMGMAXSIZE','maximale Grösse (in Kb):');
define('_IMGMAXWIDTH','maximale Breite (in Pixeln):');
define('_IMGMAXHEIGHT','maximale Höhe (in Pixeln):');
define('_IMAGECAT','Kategorie:');
define('_IMAGEFILE','Bilddatei:');
define('_IMGWEIGHT','Reihenfolge in Bildmanager anzeigen:');
define('_IMGDISPLAY','Dieses Bild anzeigen?');
define('_IMAGEMIME','MIME-Typ:');
define('_FAILFETCHIMG','Hochgeladenes Bild %s konnte nicht aus der Datenbank bezogen werden');
define('_FAILSAVEIMG','Das Bild %s konnte der Datenbank nicht hinzugefügt werden');
define('_NOCACHE','Kein Cache');
define('_CLONE','Klonen');

//%%%%%        File Name class/xoopsform/formmatchoption.php         %%%%%
define("_STARTSWITH","Beginnt mit");
define("_ENDSWITH","Endet mit");
define("_MATCHES","Übereinstimmung");
define("_CONTAINS","Enthält");
define("_REQUIRED","Erforderlich");

//%%%%%%        File Name commentform.php         %%%%%
define("_REGISTER","Registrieren");

//%%%%%%        File Name xoopscodes.php         %%%%%
define("_SIZE","Größe");  // font size
define("_FONT","Schriftart");  // font family
define("_COLOR","Farbe");  // font color
define("_EXAMPLE","Beispiel");
define("_ENTERURL","Tragen Sie die URL des Links ein, den Sie hinzufügen möchten:");
define("_ENTERWEBTITLE","Tragen Sie den Webseiten-Titel ein:");
define("_ENTERIMGURL","Tragen Sie die URL des Bildes ein, welches Sie hinzufügen möchten.");
define("_ENTERIMGPOS","Jetzt tragen Sie die Position des Bildes ein.");
define("_IMGPOSRORL","'R' oder 'r' für rechts, 'L' oder 'l' für links, oder lassen Sie es frei.");
define("_ERRORIMGPOS","FEHLER! Tragen Sie die Position des Bildes ein.");
define("_ENTEREMAIL","Tragen Sie die E-Mail-Adresse ein, die Sie hinzufügen möchten.");
define("_ENTERCODE","Tragen Sie den Code ein, den Sie hinzufügen möchten.");
define("_ENTERQUOTE","Tragen Sie den Text ein, den Sie zitieren möchten.");
define("_ENTERTEXTBOX","Bitte geben Sie einen Text in das Eingabefeld ein.");
define("_ALLOWEDCHAR","Erlaubte maximale Textlänge: ");
define("_CURRCHAR","Momentane Textlänge: ");
define("_PLZCOMPLETE","Bitte füllen Sie alle erforderlichen Felder aus.");
define("_MESSAGETOOLONG","Ihre Nachricht ist zu lang.");
//%%%%%  MMMM
define("_XOOPS_FORM_PREVIEW_CONTENT","Vorschau");
define("_AUTHOR","Autor");
//%%%%%
//%%%%%                TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 Sekunde');
define('_SECONDS','%s Sekunden');
define('_MINUTE','1 Minute');
define('_MINUTES','%s Minuten');
define('_HOUR','1 Stunde');
define('_HOURS','%s Stunden');
define('_DAY','1 Tag');
define('_DAYS','%s Tage');
define('_WEEK','1 Woche');
define('_MONTH','1 Monat');

define("_DATESTRING","d.m.Y H:i");
define("_MEDIUMDATESTRING","d.m.Y H:i");
define("_SHORTDATESTRING","d.m.Y");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/

//%%%%%                LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET','UTF-8');
define('_LANGCODE','de');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","0");

define("_REQUIRED","erforderlich");
?>