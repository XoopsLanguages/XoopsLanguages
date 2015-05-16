<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 12363 2014-03-08 10:39:06Z beckmi $
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN',"Správce bloků");
define('_AM_SYSTEM_BLOCKS_MANAGMENT',"Správa");
define('_AM_SYSTEM_BLOCKS_ADDBLOCK',"Přidat nový blok");
define('_AM_SYSTEM_BLOCKS_EDITBLOCK',"Upravit blok");
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK',"Kopírovat blok");
// Forms
define('_AM_SYSTEM_BLOCKS_CUSTOM',"Uživatelský blok");
define('_AM_SYSTEM_BLOCKS_TYPES',"Všechny typy");
define('_AM_SYSTEM_BLOCKS_GENERATOR',"Moduly");
define('_AM_SYSTEM_BLOCKS_GROUP',"Viditelný pro skupiny");
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN',"Stránka");
define('_AM_SYSTEM_BLOCKS_DISPLAY',"Zobrazit blok ");
define('_AM_SYSTEM_BLOCKS_HIDE',"Skrýt blok ");
define('_AM_SYSTEM_BLOCKS_CLONE',"Kopírovat");
define('_AM_SYSTEM_BLOCKS_SIDELEFT',"Vlevo");
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT',"Nahoře vlevo");
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER',"Nahoře uprostřed");
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT',"Nahoře vpravo");
define('_AM_SYSTEM_BLOCKS_SIDERIGHT',"Vpravo");
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT',"Dole vlevo");
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER',"Dole uprostřed");
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT',"Dole vpravo");
define('_AM_SYSTEM_BLOCKS_ADD',"Přidat blok");
define('_AM_SYSTEM_BLOCKS_MANAGE',"Upravit blok");
define('_AM_SYSTEM_BLOCKS_NAME',"Název");
define('_AM_SYSTEM_BLOCKS_TYPE',"Umístění bloku");
define('_AM_SYSTEM_BLOCKS_SBLEFT',"Krajní blok - vlevo"); // Side Block - Left
define('_AM_SYSTEM_BLOCKS_SBRIGHT',"Krajní blok - vpravo"); // Side Block - Right
define('_AM_SYSTEM_BLOCKS_CBLEFT',"Prostřední blok - vlevo"); // Center Block - Left
define('_AM_SYSTEM_BLOCKS_CBRIGHT',"Prostřední blok - vpravo"); // Center Block - Right
define('_AM_SYSTEM_BLOCKS_CBCENTER',"Prostřední blok - uprostřed"); // Center Block - Center
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT',"Prostřední blok - dole vlevo"); // Center Block - Bottom left
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT',"Prostřední blok - dole vpravo"); // Center Block - Bottom right
define('_AM_SYSTEM_BLOCKS_CBBOTTOM',"Prostřední blok - dole"); // Center Block - Bottom
define('_AM_SYSTEM_BLOCKS_WEIGHT',"Pořadí");
define('_AM_SYSTEM_BLOCKS_VISIBLE',"Viditelný");
define('_AM_SYSTEM_BLOCKS_VISIBLEIN',"Viditelný na stránce");
define('_AM_SYSTEM_BLOCKS_TOPPAGE',"Hlavní stránka");
define('_AM_SYSTEM_BLOCKS_ALLPAGES',"Všechny stránky");
define('_AM_SYSTEM_BLOCKS_UNASSIGNED',"Nepřiřazený");
define('_AM_SYSTEM_BLOCKS_TITLE',"Nadpis");
define('_AM_SYSTEM_BLOCKS_CONTENT',"Obsah");
define('_AM_SYSTEM_BLOCKS_USEFULTAGS',"Užitečné tagy:");
define('_AM_SYSTEM_BLOCKS_BLOCKTAG',"%s napíše %s");
define('_AM_SYSTEM_BLOCKS_CTYPE',"Typ obsahu");
define('_AM_SYSTEM_BLOCKS_HTML',"HTML");
define('_AM_SYSTEM_BLOCKS_PHP',"PHP Script");
define('_AM_SYSTEM_BLOCKS_AFWSMILE',"Automatický formát (smajlíci povoleni)");
define('_AM_SYSTEM_BLOCKS_AFNOSMILE',"Automatický formát (smajlíci zakázáni)");
define('_AM_SYSTEM_BLOCKS_BCACHETIME',"Čas vyrovnávací paměti");
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML',"Uživatelský blok (HTML)");
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP',"Uživatelský blok (PHP)");
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE',"Uživatelský blok (Automatický formát + smajlíci)");
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE',"Uživatelský blok (Automatický formát)");
define('_AM_SYSTEM_BLOCKS_EDITTPL',"Upravit šablonu");
define('_AM_SYSTEM_BLOCKS_OPTIONS',"Volby");
define('_AM_SYSTEM_BLOCKS_DRAG',"Přesouvání nebo seřazení bloků");
// Messages
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL','Myslíte to vážně? Opravdu chcete smazat tento blok? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT',"CHYBA! Systémové bloky nelze smazat.");
define('_AM_SYSTEM_BLOCKS_MODULECANT',"Tento blok nelze smazat přímo. Pokud chcete tento blok zablokovat, deaktivujte nejprve jeho modul.");
// Tips
define('_AM_SYSTEM_BLOCKS_TIPS',
'<ul>
<li>Zde můžete jednoduše měnit umístění a pořadí bloků pomocí technologie "drag\'n drop", kliknutím na <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> a tak můžete nastavit vzhled stránky tak, jak budete chtít.</li>
<li>Přidat nový uživatelský blok</li>
<li>Zapínat a vypínat zobrazení bloků jedním kliknutím na <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> nebo <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>');
