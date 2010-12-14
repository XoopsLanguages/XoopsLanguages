<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 5608 2010-10-23 17:36:57Z trabis $
 */

// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN", "Zarządzanie blokami");
define("_AM_SYSTEM_BLOCKS_MANAGMENT","Zarządzaj");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK", "Dodaj nowy blok");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK","Edytuj blok");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK","Powiel blok");

// Forms
define("_AM_SYSTEM_BLOCKS_SAVE","Zapisz");
define("_AM_SYSTEM_BLOCKS_CUSTOM","Blok własny");
define("_AM_SYSTEM_BLOCKS_TYPES","Wszystkie");
define("_AM_SYSTEM_BLOCKS_GENERATOR","Moduły");
define("_AM_SYSTEM_BLOCKS_GROUP","Grupy");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN","Strona");
define("_AM_SYSTEM_BLOCKS_DISPLAY","Wyświetl blok ");
define("_AM_SYSTEM_BLOCKS_HIDE","Ukryj blok ");
define("_AM_SYSTEM_BLOCKS_CLONE","Powiel");
define("_AM_SYSTEM_BLOCKS_SIDELEFT","Lewy");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT","Górny Lewy");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER","Górny Centralny");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT","Górny Prawy");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT","Prawy");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT","Dolny Lewy");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Dolny Centralny");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT","Dolny Prawy");
define("_AM_SYSTEM_BLOCKS_ADD","Dodaj Blok");
define("_AM_SYSTEM_BLOCKS_MANAGE","Ustawienia Bloku");
define("_AM_SYSTEM_BLOCKS_NAME","Nazwa");
define("_AM_SYSTEM_BLOCKS_TYPE","Typ Bloku");
define("_AM_SYSTEM_BLOCKS_SBLEFT","Blok boczny - Lewy");
define("_AM_SYSTEM_BLOCKS_SBRIGHT","Blok boczny - Prawy");
define("_AM_SYSTEM_BLOCKS_CBLEFT","Blok środkowy - Lewy");
define("_AM_SYSTEM_BLOCKS_CBRIGHT","Blok środkowy - Prawy");
define("_AM_SYSTEM_BLOCKS_CBCENTER","Blok środkowy - Wyśrodkowany");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT","Blok środkowy - Dolny lewy");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT","Blok środkowy - Dolny prawy");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM","Blok środkowy - Dolny");
define("_AM_SYSTEM_BLOCKS_WEIGHT","Kolejność");
define("_AM_SYSTEM_BLOCKS_VISIBLE","Widoczny");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN","Widoczny w");
define("_AM_SYSTEM_BLOCKS_TOPPAGE","Strona główna");
define("_AM_SYSTEM_BLOCKS_ALLPAGES","Wszystkie strony");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED","Nieprzypisani");
define("_AM_SYSTEM_BLOCKS_TITLE","Tytuł");
define("_AM_SYSTEM_BLOCKS_CONTENT","Zawartość");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS","Użyteczne Tagi:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG","%s wyświetli %s");
define("_AM_SYSTEM_BLOCKS_CTYPE","Typ bloku");
define("_AM_SYSTEM_BLOCKS_HTML","HTML");
define("_AM_SYSTEM_BLOCKS_PHP","PHP");
define("_AM_SYSTEM_BLOCKS_AFWSMILE","Auto (aktywne emotikowy)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE","Auto (nieaktywne emotikowy)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME","Cache - odświeżanie");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML","Blok własny (HTML)");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP","Blok własny (PHP)");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE","Blok własny (Auto Format + emotikony)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE","Blok własny (Auto Format)");
define("_AM_SYSTEM_BLOCKS_EDITTPL","Edycja Szablonu");
define("_AM_SYSTEM_BLOCKS_OPTIONS","Opcje");
define("_AM_SYSTEM_BLOCKS_DRAG","Przemieść blok");

// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED);
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",'Czy na pewno chcesz skasować blok ? <div class="bold">%s</div>');
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT","Nie można skasować bloku systemowego!");
define("_AM_SYSTEM_BLOCKS_MODULECANT","Ten blok nie może teraz zostać skasowany! Jeśli chcesz go skasować musisz najpierw wyłączyć moduł.");

// Tips
define("_AM_SYSTEM_BLOCKS_TIPS",
'<ul>
<li>You can easily change side or order position with the drag\'n drop, click on <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> this image and set your site just the way you want it</li>
<li>Add a new custom block</li>
<li>Set block online or offline by clicking on <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> or <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>');

?>
