<?php
// 2003/11/21 K.OHWADA
// multiple install of same module
// rename WFS -> XFS
// rename WF-Section to XF-Section
// add menu: bulk import

// zmodyfikowany 2004/03/03 (Modified by Artur Strauss artur_strauss@poczta.fm)

// Module Info

// The name of this module
// WF -> XF
define('_MI_XFS_NAME', 'Artyku�y');

// A brief description of this module
// WF -> XF
define('_MI_XFS_DESC','');

// Names of blocks for this module (Not all module has blocks)
// WF -> XF
define('_MI_XFS_BNAME','Ostatnie');
define('_MI_XFS_BNAME_MENU','Menu');
define('_MI_XFS_TOPICS','Tematy');
define('_MI_XFS_BNAME3','Super artyku�y');
define('_MI_XFS_BNAME4','Najlepsze');
define('_MI_XFS_BNAME5','Ostatnie');
define('_MI_XFS_BNAME6','�ci�gacz');
define('_MI_XFS_BNAME_ARTMENU','Odsy�acze do artyku��w');

// Sub menus in main menu block
define('_MI_XFS_SUBMIT','Wy�lij artyku�');
define('_MI_XFS_POPULAR','Popularne');
define('_MI_XFS_RATEFILE','Ocenione');

// multiple install of same module
if ( !defined("_WFS_MODINFO_PHP") ) 
{
define("_WFS_MODINFO_PHP",1);

// Names of admin menu items
define('_MI_XFS_ADMENU1','Konfiguracja');
define('_MI_XFS_ADMENU2','Menad�er strony g��wnej');
define('_MI_XFS_ADMENU3','Menad�er �cie�ek');
define('_MI_XFS_ADMENU4','Menad�er sekcji');
define('_MI_XFS_ADMENU5','Menad�er artyku��w');
define('_MI_XFS_ADMENU6','-- Utw�rz nowy artyku�');
define('_MI_XFS_ADMENU7','Menad�er plik�w');
define('_MI_XFS_ADMENU8','Lista b��dnych odsy�aczy');
define('_MI_XFS_ADMENU9','Lista nades�anych artyku��w');
define('_MI_XFS_ADMENU10','Menad�er rozmiar�w');
define('_MI_XFS_ADMENU11','�ci�gacz artyku��w');

// add menu: bulk import
define('_MI_XFS_ADMENU12','Obj�to�� importu plik�w HTML');
}

?>
