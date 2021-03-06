<?php
/**
* Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)


* @package         Modules system
* @subpackage      form Language
* @version         $Id: 2.5.0.a blocksadmin.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*
*/

// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN",           "Block Administration");
define("_AM_SYSTEM_BLOCKS_MANAGMENT",       "Verwalten");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK",        "Block hinzufügen");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK",       "Block bearbeiten");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK",      "Block clonen");

// Forms
define("_AM_SYSTEM_BLOCKS_CUSTOM",          "Eigener Block");
define("_AM_SYSTEM_BLOCKS_TYPES",           "Alle Typen");
define("_AM_SYSTEM_BLOCKS_GENERATOR",       "Module");
define("_AM_SYSTEM_BLOCKS_GROUP",           "Gruppen");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN",      "Seite");
define("_AM_SYSTEM_BLOCKS_DISPLAY",         "Block anzeigen");
define("_AM_SYSTEM_BLOCKS_HIDE",            "Block verstecken ");
define("_AM_SYSTEM_BLOCKS_CLONE",           "Clonen");
define("_AM_SYSTEM_BLOCKS_SIDELEFT",        "Links");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT",     "Oben Links");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER",   "Oben Mitte");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT",    "Oben Rechts");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT",       "Rechts");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT",  "Unten Links");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Unten Mitte");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT", "Unten Rechts");
define("_AM_SYSTEM_BLOCKS_ADD",             "Block hinzufügen");
define("_AM_SYSTEM_BLOCKS_MANAGE",          "Verwalte Block");
define("_AM_SYSTEM_BLOCKS_NAME",            "Name");
define("_AM_SYSTEM_BLOCKS_TYPE",            "Block Typ");
define("_AM_SYSTEM_BLOCKS_SBLEFT",          "Seitenblock - Links");
define("_AM_SYSTEM_BLOCKS_SBRIGHT",         "Seitenblock - Rechts");
define("_AM_SYSTEM_BLOCKS_CBLEFT",          "Centerblock - Links");
define("_AM_SYSTEM_BLOCKS_CBRIGHT",         "Centerblock - Rechts");
define("_AM_SYSTEM_BLOCKS_CBCENTER",        "Centerblock - Mitte");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT",    "Centerblock - Unten Links");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT",   "Centerblock - Unten Rechts");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM",        "Centerblock - Unten Mitte");
define("_AM_SYSTEM_BLOCKS_WEIGHT",          "Position");
define("_AM_SYSTEM_BLOCKS_VISIBLE",         "Sichtbar");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN",       "Sichtbar in");
define("_AM_SYSTEM_BLOCKS_TOPPAGE",         "Startseite");
define("_AM_SYSTEM_BLOCKS_ALLPAGES",        "Alle Seiten");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED",      "nicht zugeordnet");
define("_AM_SYSTEM_BLOCKS_TITLE",           "Titel");
define("_AM_SYSTEM_BLOCKS_CONTENT",         "Content");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS",      "Tags:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG",        "%s wird angezeigt %s");
define("_AM_SYSTEM_BLOCKS_CTYPE",           "Content Typ");
define("_AM_SYSTEM_BLOCKS_HTML",            "Html");
define("_AM_SYSTEM_BLOCKS_PHP",             "PHP Script");
define("_AM_SYSTEM_BLOCKS_AFWSMILE",        "Auto Format (smilies an)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE",       "Auto Format (smilies aus)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME",      "Cache-Zeit");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML",      "Eigener Block in Html");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP",       "Eigener Block in PHP");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE",     "Eigener Block (Auto Format mit smilies)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE",   "Eigener Block (Auto Format)");
define("_AM_SYSTEM_BLOCKS_EDITTPL",         "Template bearbeiten");
define("_AM_SYSTEM_BLOCKS_OPTIONS",         "Optionen");
define("_AM_SYSTEM_BLOCKS_DRAG",            "Diesen Block verschieben oder sortieren");

// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED",       _AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",       'Sind Sie sicher, dass sie diesen Block löschen möchten? <div class="bold">%s</div>');
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT",      "Systemblöcke können nicht gelöscht werden!");

define("_AM_SYSTEM_BLOCKS_MODULECANT",      "Dieser Block kann nicht gelöscht werden! Um den Block unsichtbar zu machen, deaktivieren Sie das Modul.");

// Tips
define("_AM_SYSTEM_BLOCKS_TIPS",
'<ul>
<li>Blöcke können leicht per Drag&Drop verschoben- und damit auch seiner Position angepasst werden. Mit Klick und halten auf <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> kann der Block frei auf der Seite abgelegt werden.</li>

<li>Wenn die Option \'Speichern\' aktiviert ist, wird diese Aktion automatisch gespeichert.</li>
<li>Blöcke können mit Klick und halten auf <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> oder <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /> sichtbar- oder unsichtbar gemacht werden.</li>
</ul>');

?>