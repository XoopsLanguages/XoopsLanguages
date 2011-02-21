<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    hr
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 5608 2010-10-23 17:36:57Z trabis $
 * Translator: XoopsHR.org / Ivan Kosak / 26.1.2011.
 */

// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN","Administracija blokova");
define("_AM_SYSTEM_BLOCKS_MANAGMENT","Uređivanje");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK","Dodaj novi blok");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK","Uredi blok");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK","Stvori klon bloka");

// Forms
define("_AM_SYSTEM_BLOCKS_SAVE","Spremi");
define("_AM_SYSTEM_BLOCKS_CUSTOM","Korisnički blok");
define("_AM_SYSTEM_BLOCKS_TYPES","Svi tipovi");
define("_AM_SYSTEM_BLOCKS_GENERATOR","Moduli");
define("_AM_SYSTEM_BLOCKS_GROUP","Grupe");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN","Stranica");
define("_AM_SYSTEM_BLOCKS_DISPLAY","Prikaži blok ");
define("_AM_SYSTEM_BLOCKS_HIDE","Sakri blok ");
define("_AM_SYSTEM_BLOCKS_CLONE","Kloniraj");
define("_AM_SYSTEM_BLOCKS_SIDELEFT","Lijevo");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT","Gore lijevo");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER","Gore sredina");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT","Gore desno");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT","Desno");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT","Dolje lijevo");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Dolje sredina");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT","Dolje desno");
define("_AM_SYSTEM_BLOCKS_ADD","Dodaj blok");
define("_AM_SYSTEM_BLOCKS_MANAGE","Uredi blok");
define("_AM_SYSTEM_BLOCKS_NAME","Ime");
define("_AM_SYSTEM_BLOCKS_TYPE","Tip bloka");
define("_AM_SYSTEM_BLOCKS_SBLEFT","Bočni Blok - Lijevo");
define("_AM_SYSTEM_BLOCKS_SBRIGHT","Bočni Blok - Desno");
define("_AM_SYSTEM_BLOCKS_CBLEFT","Središnji Blok - Lijevo");
define("_AM_SYSTEM_BLOCKS_CBRIGHT","Središnji Blok - Desno");
define("_AM_SYSTEM_BLOCKS_CBCENTER","Središnji Blok - Sredina");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT","Središnji Blok - Dolje lijevo");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT","Središnji Blok - Dolje desno");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM","Središnji Blok - Dolje");
define("_AM_SYSTEM_BLOCKS_WEIGHT","Poredak");
define("_AM_SYSTEM_BLOCKS_VISIBLE","Vidljiv");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN","Vidljiv u");
define("_AM_SYSTEM_BLOCKS_TOPPAGE","Početna stranica");
define("_AM_SYSTEM_BLOCKS_ALLPAGES","Sve stranice");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED","Neodređeno");
define("_AM_SYSTEM_BLOCKS_TITLE","Naslov");
define("_AM_SYSTEM_BLOCKS_CONTENT","Sadržaj");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS","Korisne oznake:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG","%s će ispisati %s");
define("_AM_SYSTEM_BLOCKS_CTYPE","Tip sadržaja");
define("_AM_SYSTEM_BLOCKS_HTML","HTML");
define("_AM_SYSTEM_BLOCKS_PHP","PHP skripta");
define("_AM_SYSTEM_BLOCKS_AFWSMILE","Auto format (uključene emotikone)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE","Auto format (isključene emotikone)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME","Vijek trajanja međuspremnika");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML","Korisnički blok (HTML)");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP","Korisnički blok (PHP)");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE","Korisnički blok (Auto format + emotikone)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE","Korisnički blok (Auto format)");
define("_AM_SYSTEM_BLOCKS_EDITTPL","Uredi predložak");
define("_AM_SYSTEM_BLOCKS_OPTIONS","Postavke");
define("_AM_SYSTEM_BLOCKS_DRAG","Prevuci ili poredaj blok");

// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",'Da li sigurno želite izbrisati blok? <div class="bold">%s</div>');
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT","Sustavski blok se ne može izbrisati!");
define("_AM_SYSTEM_BLOCKS_MODULECANT","Ovaj blok se ne može izravno izbrisati! Ako želite izbrisati ovaj blok, prvo deaktivirajte modul.");

// Tips
define("_AM_SYSTEM_BLOCKS_TIPS",
'<ul>
<li>Lako možete promijeniti stranu ili poredak prevlačenjem, kliknite na <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> ovu sliku i postavite svoje stranice baš kako to vi želite</li>
<li>Dodati novi korisnički blok</li>
<li>Postavite blok vidljivim ili nevidljivim klikanjem na <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> ili <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>');

?>