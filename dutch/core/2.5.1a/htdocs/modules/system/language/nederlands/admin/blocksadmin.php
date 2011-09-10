<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @version     $Id: blocksadmin.php 5622 2010-10-24 04:11:44Z beckmi $
 */
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
 
// Navigatie
define("_AM_SYSTEM_BLOCKS_ADMIN","Beheer blokken");
define("_AM_SYSTEM_BLOCKS_MANAGMENT","Beheer");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK","Nieuw blok toevoegen");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK","Blok wijzigen");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK","Kloon een blok");

// Forms
define("_AM_SYSTEM_BLOCKS_SAVE","Opslaan");
define("_AM_SYSTEM_BLOCKS_CUSTOM","Eigen blok");
define("_AM_SYSTEM_BLOCKS_TYPES","Alle types");
define("_AM_SYSTEM_BLOCKS_GENERATOR","Modules");
define("_AM_SYSTEM_BLOCKS_GROUP","Groepen");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN","Pagina");
define("_AM_SYSTEM_BLOCKS_DISPLAY","Blok weergeven ");
define("_AM_SYSTEM_BLOCKS_HIDE","Blok verbergen ");
define("_AM_SYSTEM_BLOCKS_CLONE","Klonen");
define("_AM_SYSTEM_BLOCKS_SIDELEFT","Links");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT","Linksboven");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER","Middenboven");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT","Rechtsboven");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT","Rechts");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT","Linksonder");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Middenonder");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT","Rechtsonder");
define("_AM_SYSTEM_BLOCKS_ADD","Blok toevoegen");
define("_AM_SYSTEM_BLOCKS_MANAGE","Blok beheren");
define("_AM_SYSTEM_BLOCKS_NAME","Naam");
define("_AM_SYSTEM_BLOCKS_TYPE","Blok Type");
define("_AM_SYSTEM_BLOCKS_SBLEFT","Zijkant - Links");
define("_AM_SYSTEM_BLOCKS_SBRIGHT","Zijkant - Rechts");
define("_AM_SYSTEM_BLOCKS_CBLEFT","Midden - Links");
define("_AM_SYSTEM_BLOCKS_CBRIGHT","Midden - Rechts");
define("_AM_SYSTEM_BLOCKS_CBCENTER","Midden - Midden");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT","Midden - Linksonder");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT","Midden - Rechtsonder");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM","Midden - Middenonder");
define("_AM_SYSTEM_BLOCKS_WEIGHT","Gewicht");
define("_AM_SYSTEM_BLOCKS_VISIBLE","Zichtbaar");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN","Zichtbaar in");
define("_AM_SYSTEM_BLOCKS_TOPPAGE","Alleen de toppagina");
define("_AM_SYSTEM_BLOCKS_ALLPAGES","All Pagina's");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED","Niet toegewezen");
define("_AM_SYSTEM_BLOCKS_TITLE","Titel");
define("_AM_SYSTEM_BLOCKS_CONTENT","INhoud");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS","Handige Tags:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG","%s zal %s tonen");
define("_AM_SYSTEM_BLOCKS_CTYPE","Type inhoud");
define("_AM_SYSTEM_BLOCKS_HTML","HTML");
define("_AM_SYSTEM_BLOCKS_PHP","PHP Script");
define("_AM_SYSTEM_BLOCKS_AFWSMILE","Automatisch (smilies ingeschakeld)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE","Automatisch (smilies uitgeschakeld)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME","Cache levensduur");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML","Eigen blok (HTML)");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP","Eigen blok (PHP)");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE","Eigen blok (Automatisch + smilies)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE","Eigen blok (Automatisch)");
define("_AM_SYSTEM_BLOCKS_EDITTPL","Sjabloon bewerken");
define("_AM_SYSTEM_BLOCKS_OPTIONS","Opties");
define("_AM_SYSTEM_BLOCKS_DRAG","Sjabloon verplaatsen of sorteren");

// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",'Weet u zeker dat u het blok <div class="bold">%s</div>wilt verwijderen?');
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT","Systeem blokken kunnen niet worden verwijderd!");
define("_AM_SYSTEM_BLOCKS_MODULECANT","Dit blok kan niet direct worden verwijderd! Als u dit blok wilt uitschakelen moet u de bijbehorende module deactiveren.");

// Tips
define("_AM_SYSTEM_BLOCKS_TIPS",
'<ul>
<li>You can easily change side or order position with the drag\'n drop, click on <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> this image and set your site just the way you want it</li>
<li>Toevoegen van een eigen ontworpen blok</li>
<li>Set block online or offline by clicking on <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> or <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>');

?>