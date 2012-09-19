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
define('_MI_XFS_NAME', 'Artykuły');

// A brief description of this module
// WF -> XF
define('_MI_XFS_DESC','');

// Names of blocks for this module (Not all module has blocks)
// WF -> XF
define('_MI_XFS_BNAME','Ostatnie');
define('_MI_XFS_BNAME_MENU','Menu');
define('_MI_XFS_TOPICS','Tematy');
define('_MI_XFS_BNAME3','Super artykuły');
define('_MI_XFS_BNAME4','Najlepsze');
define('_MI_XFS_BNAME5','Ostatnie');
define('_MI_XFS_BNAME6','Ściągacz');
define('_MI_XFS_BNAME_ARTMENU','Odsyłacze do artykułów');

// Sub menus in main menu block
define('_MI_XFS_SUBMIT','Wyślij artykuł');
define('_MI_XFS_POPULAR','Popularne');
define('_MI_XFS_RATEFILE','Ocenione');

// multiple install of same module
if ( !defined("_WFS_MODINFO_PHP") ) 
{
define("_WFS_MODINFO_PHP",1);

// Names of admin menu items
define('_MI_XFS_ADMENU1','Konfiguracja');
define('_MI_XFS_ADMENU2','Menadżer strony głównej');
define('_MI_XFS_ADMENU3','Menadżer ścieżek');
define('_MI_XFS_ADMENU4','Menadżer sekcji');
define('_MI_XFS_ADMENU5','Menadżer artykułów');
define('_MI_XFS_ADMENU6','-- Utwórz nowy artykuł');
define('_MI_XFS_ADMENU7','Menadżer plików');
define('_MI_XFS_ADMENU8','Lista błędnych odsyłaczy');
define('_MI_XFS_ADMENU9','Lista nadesłanych artykułów');
define('_MI_XFS_ADMENU10','Menadżer rozmiarów');
define('_MI_XFS_ADMENU11','Ściągacz artykułów');

// add menu: bulk import
define('_MI_XFS_ADMENU12','Objętość importu plików HTML');
}

?>
