<?php
/**
*  Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Core
* @subpackage      form Language
* @version         $Id: 2.5.0.a global.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

define('_PLEASEWAIT',          'Bitte warten');
define('_FETCHING',            'Laden...');

define('_TAKINGBACK',          'Sie werden auf wieder auf die vorherige Seite zurückgebracht....');
define('_LOGOUT',              'Abmelden');
define('_SUBJECT',             'Thema');
define('_MESSAGEICON',         'Nachrichtensymbol');
define('_COMMENTS',            'Kommentare');
define('_POSTANON',            'Anonym senden');
define('_DISABLESMILEY',       'Smilie deaktivieren');
define('_DISABLEHTML',         'HTML deaktivieren');
define('_PREVIEW',             'Vorschau');

define('_GO',                  'Los!');
define('_NESTED',              'Verschachtelt');
define('_NOCOMMENTS',          'Keine Kommentare');
define('_FLAT',                'Flach');
define('_THREADED',            'Diskussion');
define('_OLDESTFIRST',         'Älteste zuerst');
define('_NEWESTFIRST',         'Neueste zuerst');
define('_MORE',                'mehr...');
define('_MULTIPAGE',           'Um Ihren Artikel über mehrere Seiten aufzuteilen, geben Sie das Wort <font color=red>[pagebreak]</font> (mit eckigen Klammern) in den Artikel ein.');
define('_IFNOTRELOAD',         'Wenn die Seite nicht automatisch neu lädt, klicken Sie bitte <a href=\'%s\'>Hier</a>');

// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED',   '%s Pflichtfeld');
define('_XOBJ_ERR_SHORTERTHAN','%s muss kürzer sein als %d Zeichen.');

// %%%%%%    File Name themeuserpost.php     %%%%%
define('_PROFILE',             'Profile');
define('_POSTEDBY',            'Eingetragen von');
define('_VISITWEBSITE',        'Webseite besuchen');
define('_SENDPMTO',            'Private Nachricht an %s');
define('_SENDEMAILTO',         'eMail an %s');
define('_ADD',                 'hinzufügen');
define('_REPLY',               'Antworten');
define('_DATE',                'Datum');

// %%%%%%    File Name admin_functions.php     %%%%%
define('_MAIN',                'Übersicht');
define('_MANUAL',              'Manual');
define('_INFO',                'Info');

define('_CPHOME',              'Administrationsmenü');
define('_YOURHOME',            'Startseite');

// %%%%%%    File Name misc.php (who's-online popup)    %%%%%
define('_WHOSONLINE',          'Wer ist Online');
define('_GUESTS',              'Gäste');
define('_MEMBERS',             'Mitglieder');
define('_ONLINEPHRASE',        '<strong>%s</strong> Besucher sind Online');
define('_ONLINEPHRASEX',       '<strong>%s</strong> halten sich im Bereich <b>%s</b> auf');
define('_CLOSE',               'Fenster schließen');

// %%%%%%    File Name module.textsanitizer.php     %%%%%
define('_QUOTEC',              'Zitat:');

// %%%%%%    File Name admin.php     %%%%%


define('_NOPERM',              'Verzeihung, Sie haben nicht die Erlaubnis, diesen Bereich zu betreten. Gegebenenfalls setzen Sie sich mit dem Webmaster in Verbindung.');
// %%%%%        Common Phrases        %%%%%
define('_NO',                  'Nein');
define('_YES',                 'Ja');
define('_EDIT',                'Bearbeiten');
define('_DELETE',              'Löschen');
define('_SUBMIT',              'Abschicken');
define('_MODULENOEXIST',       'Das gewählte Modul wurde nicht gefunden!');
define('_ALIGN',               'Ausrichtung');
define('_LEFT',                'Links');
define('_CENTER',              'Mittig');
define('_RIGHT',               'Rechts');
define('_FORM_ENTER',          'Bitte geben Sie %s ein');


define('_MUSTWABLE',           'Die Datei %s muss vom Server beschreibbar sein!');
// Module info
define('_PREFERENCES',         'Einstellungen');
define('_VERSION',             'Version');
define('_DESCRIPTION',         'Beschreibung');
define('_AUTHOR',              'Autor');
define('_CREDITS',             'Impressum');
define('_LICENCE',             'Lizenz');
define('_ERRORS',              'Fehler');
define('_NONE',                'Nichts');
define('_ON',                  'An');
define('_READS',               'Lesen');
define('_WELCOMETO',           'Herzlich Willkommen bei %s');
define('_SEARCH',              'Suchen');
define('_ALL',                 'Alle');
define('_TITLE',               'Titel');
define('_OPTIONS',             'Optionen');
define('_QUOTE',               'Zitat');
define('_LIST',                'Liste');
define('_LOGIN',               'Login');
define('_USERNAME',            'Mitgliedsname: ');
define('_PASSWORD',            'Passwort: ');
define('_SELECT',              'Wählen');
define('_IMAGE',               'Bild');
define('_SEND',                'Senden');
define('_CANCEL',              'Abbrechen');
define('_ASCENDING',           'Aufsteigende Reihenfolge');
define('_DESCENDING',          'Absteigende Reihenfolge');
define('_BACK',                'Zurück');
define('_NOTITLE',             'Kein Titel');

/**
* Image manager
*/

define('_MD_ADDIMGCAT',        'Kategorie hinzufügen');
define('_MD_IMGCATNAME',       'Kategorie Name');



define('_MD_IMGCATRGRP',       'Gruppe die den Bildmanager benutzen dürfen');
define('_MD_IMGCATWGRP',       'Gruppe die Bilder hochladen dürfen');
define('_MD_IMGCATWEIGHT',     'Anzeigeposition im Bildmanager');
define('_MD_IMGCATDISPLAY',    'Anzeigen');
define('_MD_IMGCATSTRTYPE',    'Bilder hochgeladen nach:');



define('_MD_STRTYOPENG',       'Diese Aktion kann im Nachgang nicht geändert werden!');
define('_MD_ASFILE',           'Speichern als Datei (im uploads - Verzeichnis)');
define('_MD_INDB',             'Speichern in Datenbank (als binär \"blob\" data)');
define('_MD_IMGMAIN',          'Kategorie');
define('_MD_EDITIMGCAT',       'Bild Einstellungen');
define('_IMGMANAGER',          'Bildmanager');
define('_NUMIMAGES',           '%s Bilder');
define('_ADDIMAGE',            'Bild hinzufügen');
define('_IMAGENAME',           'Name:');
define('_IMGMAXSIZE',          'maximale Bildgröße (bytes):');
define('_IMGMAXWIDTH',         'maximal erlaubte Bildbreite (pixel):');
define('_IMGMAXHEIGHT',        'maximal erlaubte Bildhöhe (pixel):');
define('_IMAGECAT',            'Kategorie:');
define('_IMAGEFILE',           'Bild Datei:');

define('_IMGWEIGHT',           'Reihenfolge im Bildmanager: ');
define('_IMGDISPLAY',          'Dieses Bild anzeigen?');
define('_IMAGEMIME',           'Dateityp (MIME type):');
define('_FAILFETCHIMG',        'Die Datei konnte nicht hochgeladen werden %s');

define('_FAILSAVEIMG',         'Fehler beim speichern des Bildes %s in der Datenbank');
define('_NOCACHE',             'Kein Cache');
define('_CLONE',               'Klonen');

// %%%%%    For xoopsform files %%%%%
define('_STARTSWITH',          'Beginnt mit');
define('_ENDSWITH',            'Endet mit');
define('_MATCHES',             'Übereinstimmung');
define('_CONTAINS',            'Beinhaltet');
define('_REQUIRED',            'Erforderlich');

// %%%%%%    File Name commentform.php     %%%%%
define('_REGISTER',            'Registrieren');

// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE',                'Größe');
define('_FONT',                'Schriftart');
define('_COLOR',               'Farbe');
define('_EXAMPLE',             'Beispiel');

define('_ENTERURL',            'Tragen Sie die URL des Links ein, den Sie hinzufügen möchten:');
define('_ENTERWEBTITLE',       'Geben Sie den Webseiten-Titel ein:');



define('_ENTERIMGURL',         'Tragen Sie die URL des Bildes ein, welches Sie hinzufügen möchten.');
define('_ENTERIMGPOS',         'Geben Sie die Position ein, wo das Bild angezeigt werden soll.');
define('_IMGPOSRORL',          '\'R\' oder \'r\' für Rechts, \'L\' oder \'l\' für Links, oder lassen Sie es frei.');
define('_ERRORIMGPOS',         'Fehler: geben Sie die Position des Bildes an.');




define('_ENTEREMAIL',          'Tragen Sie die eMail Adresse ein, die Sie hinzufügen möchten.');
define('_ENTERCODE',           'Tragen Sie den Code ein, den Sie hinzufügen möchten.');
define('_ENTERQUOTE',          'Tragen Sie den Text ein, den Sie zitieren möchten.');
define('_ENTERTEXTBOX',        'Bitte geben Sie einen Text in das Eingabefeld ein.');
define('_ALLOWEDCHAR',         'Erlaubte maximale Textlänge:: ');
define('_CURRCHAR',            'Momentane Textlänge:: ');

define('_PLZCOMPLETE',         'Bitte füllen Sie alle erforderlichen Felder aus.');
define('_MESSAGETOOLONG',      'Ihre eingegebene Nachricht ist zu lang.');

/**
* xoops smilie
*/
define('_AM_ADDSMILE',         ' Smilie hinzufügen');
define('_AM_SMILECODE',        'Code');
define('_AM_SMILEEMOTION',     'Beschreibung');
define('_AM_DISPLAYF',         'Im Formular anzeigen');

// %%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND',             '1 Sekunde');
define('_SECONDS',            '%s Sekunden');
define('_MINUTE',             '1 Minute');
define('_MINUTES',            '%s Minuten');
define('_HOUR',               '1 Stunde');
define('_HOURS',              '%s Stunden');
define('_DAY',                '1 Tag');
define('_DAYS',               '%s Tage');
define('_WEEK',               '1 Woche(n)');
define('_MONTH',              '1 Monat(e)');
define('_DATESTRING',         'd.m.Y H:i:s');
define('_MEDIUMDATESTRING',   'd.m.Y H:i');
define('_SHORTDATESTRING',    'd.m.Y');

/**
* The following characters are recognized in the format string:
* a - 'am' or 'pm'
* A - 'AM' or 'PM'
* d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
* D - day of the week, textual, 3 letters; i.e. 'Fri'
* F - month, textual, long; i.e. 'January'
* h - hour, 12-hour format; i.e. '01' to '12'
* H - hour, 24-hour format; i.e. '00' to '23'
* g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
* G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
* i - minutes; i.e. '00' to '59'
* j - day of the month without leading zeros; i.e. '1' to '31'
* l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
* L - boolean for whether it is a leap year; i.e. '0' or '1'
* m - month; i.e. '01' to '12'
* n - month without leading zeros; i.e. '1' to '12'
* M - month, textual, 3 letters; i.e. 'Jan'
* s - seconds; i.e. '00' to '59'
* S - English ordinal suffix, textual, 2 characters; i.e. 'th', 'nd'
* t - number of days in the given month; i.e. '28' to '31'
* T - Timezone setting of this machine; i.e. 'MDT'
* U - seconds since the epoch
* w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
* Y - year, 4 digits; i.e. '1999'
* y - year, 2 digits; i.e. '99'
* z - day of the year; i.e. '0' to '365'
* Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/

// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET',             'UTF-8');
define('_LANGCODE',            'de');

// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '0');
define('_RESET',               'Zurücksetzen');
define('_RE',                  'Aw:');
/**
 * Additions to 2.5.5
**/
define('_DBDATESTRING', 'd.m.Y');
define('_DBTIMESTRING', 'H:i:s');
define('_DBTIMESTAMPSTRING', 'd.m.Y H:i:s');
?>