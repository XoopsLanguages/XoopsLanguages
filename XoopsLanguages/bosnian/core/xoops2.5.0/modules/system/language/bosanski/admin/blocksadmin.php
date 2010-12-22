<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ba
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 5608 2010-10-23 17:36:57Z saba $
 */

// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN","Administracija Blokova");
define("_AM_SYSTEM_BLOCKS_MANAGMENT","Manadzer Blokova");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK","Dodaj novi Blok");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK","Uredi blok");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK","Napravi klonirani blok");

// Forms
define("_AM_SYSTEM_BLOCKS_SAVE","Memoriši");
define("_AM_SYSTEM_BLOCKS_CUSTOM","Lični Blok");
define("_AM_SYSTEM_BLOCKS_TYPES","Svi tipovi");
define("_AM_SYSTEM_BLOCKS_GENERATOR","Moduli");
define("_AM_SYSTEM_BLOCKS_GROUP","Grupe");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN","Stranica");
define("_AM_SYSTEM_BLOCKS_DISPLAY","Prikaži blok ");
define("_AM_SYSTEM_BLOCKS_HIDE","Sakrij blok ");
define("_AM_SYSTEM_BLOCKS_CLONE","Kloniraj");
define("_AM_SYSTEM_BLOCKS_SIDELEFT","Lijevo");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT","Top Lijevo");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER","Top Centar");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT","Top Desno");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT","Desno");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT","Dno Lijevo");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Dno Centar");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT","Dno Desno");
define("_AM_SYSTEM_BLOCKS_ADD","Dodaj Blok");
define("_AM_SYSTEM_BLOCKS_MANAGE","Manadzer Blokova");
define("_AM_SYSTEM_BLOCKS_NAME","Naziv");
define("_AM_SYSTEM_BLOCKS_TYPE","Blok Tip");
define("_AM_SYSTEM_BLOCKS_SBLEFT","Strana Bloka - Lijevo");
define("_AM_SYSTEM_BLOCKS_SBRIGHT","Strana Bloka - Desno");
define("_AM_SYSTEM_BLOCKS_CBLEFT","Centar Blok - Lijevo");
define("_AM_SYSTEM_BLOCKS_CBRIGHT","Centar Blok - Desno");
define("_AM_SYSTEM_BLOCKS_CBCENTER","Centar Blok - Centar");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT","Centar Blok - Dno lijevo");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT","Centar Blok - Dno desno");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM","Centar Blok - Dno");
define("_AM_SYSTEM_BLOCKS_WEIGHT","Značaj");
define("_AM_SYSTEM_BLOCKS_VISIBLE","Vidljiv");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN","Vidljiv u");
define("_AM_SYSTEM_BLOCKS_TOPPAGE","Top Stranica");
define("_AM_SYSTEM_BLOCKS_ALLPAGES","Sve Stranice");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED","Slobodan");
define("_AM_SYSTEM_BLOCKS_TITLE","Naslov");
define("_AM_SYSTEM_BLOCKS_CONTENT","Sadržaj");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS","Korisni Tagovi:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG","%s će ispisati %s");
define("_AM_SYSTEM_BLOCKS_CTYPE","Tip sadržaja");
define("_AM_SYSTEM_BLOCKS_HTML","HTML");
define("_AM_SYSTEM_BLOCKS_PHP","PHP Skript");
define("_AM_SYSTEM_BLOCKS_AFWSMILE","Auto Format (smjehuljci uključeni)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE","Auto Format (smjehuljci isključeni)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME","Cache lifetime");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML","Lični Blok (HTML)");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP","Lični Blok (PHP)");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE","Lični Blok (Auto Format + smjehuljci)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE","Lični Blok (Auto Format)");
define("_AM_SYSTEM_BLOCKS_EDITTPL","Uredi Template");
define("_AM_SYSTEM_BLOCKS_OPTIONS","Opcije");
define("_AM_SYSTEM_BLOCKS_DRAG","Povlači ili sortiraj Blok na željeno mjesto");

// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",'Jesi li siguran da želiš izbrisati blok ? <div class="bold">%s</div>');
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT","Sistemski blok se nemože izbrisati!");
define("_AM_SYSTEM_BLOCKS_MODULECANT","Trenutno nemožeš izbrisati ovaj blok! Prvo trebaš blok deaktivirati, odnosno deaktivirati modul kojem blok pripada.");

// Tips
define("_AM_SYSTEM_BLOCKS_TIPS",
'<ul>
<li>Jednostavno izgled stranice možeš urediti povlačenjem blokova na željeno mjesto, klikni na sliku <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> drži klikom sliku i momiči na željeno mjesto</li>
<li>Dodaj novi lični blok</li>
<li>Odredi dali blok treba biti online ili offline sa klikom na <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> ili <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>');

?>