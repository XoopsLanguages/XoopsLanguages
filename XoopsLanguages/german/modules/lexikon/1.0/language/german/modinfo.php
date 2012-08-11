<?php
/**
 * $Id: main.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Lexikon - a multicategory glossary
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_LX_MD_NAME","Lexikon");

// A brief description of this module
define("_MI_LX_MD_DESC","Ein Multikategorie-Glossar");

// Sub menus in main menu block
define("_MI_LX_SUB_SMNAME0","Administration"); //v1.17
define("_MI_LX_SUB_SMNAME1","Eintrag einschicken");
define("_MI_LX_SUB_SMNAME2","Definition anfordern");
define("_MI_LX_SUB_SMNAME3","Definition suchen");
define("_MI_LX_SUB_SMNAME4","neuer Eintrag"); //v1.17

define("_MI_LX_RANDOMTERM","Zufälliger Begriff");

// A brief description of this module
$cf=1;
define("_MI_LX_ALLOWSUBMIT","$cf. Dürfen User Einträge einschicken?");
define("_MI_LX_ALLOWSUBMITDSC","Falls 'Ja', haben die User Zugriff auf das Absendeformular");
$cf++;
define("_MI_LX_ANONSUBMIT","$cf. Dürfen Gäste Einträge einschicken?");
define("_MI_LX_ANONSUBMITDSC","Falls 'Ja', haben Gäste Zugriff auf das Absendeformular");
$cf++;
define("_MI_LX_ALLOWREQ","$cf. Dürfen Einträge angefragt werden ?");
define("_MI_LX_ALLOWREQDSC","Falls 'Ja', haben Benutzer und Gäste Zugriff auf das Anfrageformular.");
$cf++;
define("_MI_LX_DATEFORMAT","$cf. Welches Format soll das Datum haben?");
define("_MI_LX_DATEFORMATDSC","Benutzt den letzten Teil von language/english/global.php um die Datumsanzeige zu bestimmen. Beispiel: 'd-M-Y H:i' wird zu '23-Mar-2004 22:35'");
$cf++;
define("_MI_LX_PERPAGE","$cf. Anzahl der Einträge pro Seite (Admin-Seite)?");
define("_MI_LX_PERPAGEDSC","Anzahl der Einträge die auf einmal auf der Admin-Seite angezeigt werden.");
$cf++;
define("_MI_LX_PERPAGEINDEX","$cf. Anzahl der Einträge pro Seite (User-Seite)?");
define("_MI_LX_PERPAGEINDEXDSC","Anzahl der Einträge die auf jeder Seite der User-Seite angezeigt werden.");
$cf++;
define("_MI_LX_BLOCKSPERPAGE","$cf. Anzahl der Einträge in den Blocks auf der Startseite?");
define("_MI_LX_BLOCKSPERPAGEDSC","Anzahl der Einträge die in jedem Blocks auf der Startseite gezeigt werden. Bei Wert 0 wird kein Block gezeigt.");
$cf++;
define("_MI_LX_AUTOAPPROVE","$cf. Einträge automatisch freigeben?");
define("_MI_LX_AUTOAPPROVEDSC","Falls 'Ja' werden die Einträge automatisch freigegeben.");
$cf++;
define("_MI_LX_MULTICATS","$cf. Benötigen Sie Glossar-Kategorien?");
define("_MI_LX_MULTICATSDSC","Falls 'Ja' können diverse Kategorien benutzt werden, ansonsten gibt es nur eine automatische Kategorie.");
$cf++;
define("_MI_LX_CATSINMENU","$cf. Sollen die Kategorien im Menü angezeigt werden?"); 
define("_MI_LX_CATSINMENUDSC","Wählen Sie 'Ja', falls Sie Link zu Kategorien im Hauptmenü haben wollen."); 
$cf++;//11
define("_MI_LX_CATSPERINDEX","$cf. Anzahl der Kategorien pro Seite (User-Seite)?"); 
define("_MI_LX_CATSPERINDEXDSC","Definiert die Anzahl der angezeigten Kategorien auf der Index-Seite."); 
$cf++;
define("_MI_LX_ALLOWADMINHITS","$cf. Sollen Admin-Aufrufe mitgezählt werden?");
define("_MI_LX_ALLOWADMINHITSDSC","Falls 'Ja', wird sich der Zähler auch bei Admin-Aufrufen erhöhen.");
$cf++;
define("_MI_LX_MAILTOADMIN","$cf. E-Mail an Admin bei jeder neuen Einsendung?");  
define("_MI_LX_MAILTOADMINDSC","Falls 'Ja', wird der Admin bei jeder neuen Einsendung eine E-Mail erhalten.");  
$cf++;
define("_MI_LX_RANDOMLENGTH","$cf. Länge der anzuzeigenden Zeile bei zufälligen Definitionen?");  
define("_MI_LX_RANDOMLENGTHDSC","Wieviele Zeichen sollen bei den zufälligen Definitionen angezeigt werden? Gilt für die Index-Seite und für den Block (Vorgabe: 150 Zeichen)");
$cf++;
define("_MI_LX_LINKTERMS","$cf. Links anzeigen zu anderen Begriffen in den Definitionen?");  
define("_MI_LX_LINKTERMSDSC","Falls 'Ja' wird in den Definitionen automatisch zu anderen Einträgen im Glossar verlinkt.");
$cf++;
define("_MI_LX_FORM_OPTIONS","$cf. Eingabe Optionen");
define("_MI_LX_FORM_COMPACT","Kompakt");
define("_MI_LX_FORM_DHTML","DHTML");
define("_MI_LX_FORM_SPAW","Spaw Editor");
define("_MI_LX_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_LX_FORM_FCK","FCK Editor");
define("_MI_LX_FORM_KOIVI","Koivi Editor");
define("_MI_LX_FORM_INB","Inbetween Editor");
define("_MI_LX_FORM_TINE","TinyEditor");
define("_MI_LX_FORM_OPTIONS_DSC","Hier kann gewählt werden welcher Editor zur Eingabe verwand wird. Wurde kein spezieller Editor installiert, kann nur kompakt oder DHTML gew�hlt werden. Der Editor muss auf der Site installiert sein.");
$cf++;
define("_MI_LX_DISPPROL","$cf. Zeige Submitter bei Eintrag?");
define("_MI_LX_DISPPROLDSC","Falls 'Ja' wird  der Autor im Footer des Eintrags gezeigt.");
$cf++;
define("_MI_LX_SHOWDAT","$cf. Zeige Datum im Block der neuesten Einträge?");
define("_MI_LX_SHOWDATDSC","Falls 'Ja' wird auf der Startseite das Datum bei den neuesten Einträgen gezeigt.");
$cf++;
define("_MI_LX_SHOWCTR","$cf. Zeige Counter im Block der beliebtesten Einträge?");
define("_MI_LX_SHOWCTRDSC","Falls 'Ja' wird der Zähler auf der Startseite bei populärsten Einträgen gezeigt.");
//$cf=17;
$cf++;
define("_MI_LX_SECIMG","$cf. Dugris Security Image für Einsendungen verwenden?");
define("_MI_LX_SECIMGDSC","Das Modul 'Security Image' muss installiert sein, Download des Moduls <A HREF='http://dugris.info' TARGET='_NEW'>hier</A>.");
$cf++;
define("_MI_LX_BOOKMARK_ME","$cf. zeige den Block 'Diesen Eintrag Bookmarken bei'?");
define("_MI_LX_BOOKMARK_MEDSC","Dieser Block ist auf der Seite der Einträge zu sehen.");

$cf++;
define("_MI_LX_AUTOCOM","$cf. Autocomplete verwenden?");
define("_MI_LX_AUTOCOMDSC","Falls Ja, wird die Scriptaculous-Vorschlagsfunktion für die Suche verwendet (PHP5).");

$cf++;
define('_MI_LX_SUGGEST_SUGGEST',"$cf. Vorschläge für Autocomplete");
define("_MI_LX_SUGGEST_SUGGESTDSC","In die Vorschlagssuche sollen einbezogen werden ...");
define('_MI_LX_SUGGEST_SUG1',"... nur Begriffe und Initialen");
define('_MI_LX_SUGGEST_SUG2',"...Begriffe und Definitionen");
define('_MI_LX_SUGGEST_SUG3',"...alle Übereinstimmungen");

$cf++;
define("_MI_LX_METANUM","$cf. Maximale Anzahl an Meta Keywords die automatisch generiert werden?");
define("_MI_LX_METANUMDSC","Hier ihre Anzahl der zu generierenden meta-Keywörter wählen. Die Keywörter müssen mindestens so lang sein wie das xoops_keywords_limit. <BR> Bei einem Wert von Null 0, werden die Keywords der site verwendet.");
define("_MI_LX_METANUM_0","0");
define("_MI_LX_METANUM_5","5");
define("_MI_LX_METANUM_10","10");
define("_MI_LX_METANUM_20","20");
define("_MI_LX_METANUM_30","30");
define("_MI_LX_METANUM_40","40");
define("_MI_LX_METANUM_50","50");
define("_MI_LX_METANUM_60","60");
define("_MI_LX_METANUM_70","70");
define("_MI_LX_METANUM_80","80");
$cf++;
define("_MI_LX_TABSKIN","$cf. Das Layout der Einträge auswählen.");
define("_MI_LX_TABSKINDSC","Dieses Layout ändert die Darstellung der Einträge und Kategorien und Suchergebnisse.");
define("_MI_LX_SKIN_1","default");
define("_MI_LX_SKIN_2","lemon");
define("_MI_LX_SKIN_3","solid");

$cf++;
define('_MI_LX_SUBCATLIMIT',"$cf. Max. Zahl der Subkategorien im Menu:");
#define("_MI_LX_SUBCATLIMIT","$cf. Number of subcategories to show:");
define("_MI_LX_SUBCATLIMITDSC","Subkategorien im Haupt-Menu (default:5).");

// Names of admin menu items
define("_MI_LX_ADMENU1","Index");
define("_MI_LX_ADMENU2","Kategorien");
define("_MI_LX_ADMENU3","Einträge");
define("_MI_LX_ADMENU4","Blöcke");
define("_MI_LX_ADMENU5","Zum Modul");
//mondarse
define("_MI_LX_ADMENU6","Import");

// SubMenues xoops 2.2.x
define("_MI_LX_CONFIGCAT_EXTENDED","&raquo; Erweiterte Konfiguration");
define("_MI_LX_CONFIGCAT_EXTENDEDDSC" , "besondere Einstellungen der Einträge.");


//Names of Blocks and Block information
define("_MI_LX_ENTRIESNEW","Neueste Begriffe");
define("_MI_LX_ENTRIESTOP","Meistgelesene Begriffe");
//define("_MD_LX_NOCATSINSYSTEM","No categories in system");

// added in version 1.17
define("_MI_LX_ADMENU8","Einsendungen");
define("_MI_LX_ADMENU10","Über");
?>