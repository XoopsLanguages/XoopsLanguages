<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:56:03 dap997 Exp $
// Module Info

// The name of this module
define('_MI_WIWIMOD_NAME'                ,'Wiwi');

// A brief description of this module
define('_MI_WIWIMOD_DESC'                ,'wiki moduł dla XOOPS2');

// Admin menu
define('_MI_WIWIMOD_ADMENU1'             ,'Strona');
define('_MI_WIWIMOD_ADMENU2'             ,'Uprawnienia');
define('_MI_WIWIMOD_ADMENU3'             ,'Bloki/Grupy');
define('_MI_WIWIMOD_ADMENU4'             ,'O module');

// Admin options
define('_MI_WIWIMOD_EDITOR'              ,'Edytor do budowania podstron');
define('_MI_WIWIMOD_EDITOR_DESC'         ,'');
define('_MI_WIWIMOD_DEFAULTPROFILE'      ,'Domyślny profil');

define('_MI_WIWIMOD_ALLOWPDF'            ,'Pokazywać klawisz do tworzenia PDF na stronie ?');
define('_MI_WIWIMOD_ALLOWPDF_DESC'       ,'Generowanie PDF jest w fazie eksperymentalnej.');

define('_MI_WIWIMOD_SHOWTITLES'          ,'Pokaż tytuły stron');
define('_MI_WIWIMOD_SHOWTITLES_DESC'     ,'Pokazuj w wiwilinkach tyłuy stron zamiast ich nazw ');

define('_MI_WIWIMOD_USECAMELCASE'        ,'Używać StyluWielbłądziego');
define('_MI_WIWIMOD_USECAMELCASE_DESC'   ,'StylWilebłądzi będzie interpretowany jako linki do podstron w module Wiwi.');

define('_MI_WIWIMOD_XOOPSEDITOR'         ,'Wybierz edytor wspierany przez XOOPS');
define('_MI_WIWIMOD_XOOPSEDITOR_DESC'    ,'Ma znaczenie jeśli powyżej wybrano jako edytor XoopsEditor');

// Notification options
define('_MI_WIWIMOD_PAGENOTIFYCAT_TITLE' ,'Strona');
define('_MI_WIWIMOD_PAGENOTIFYCAT_DESC'  ,'Powiadom mnie kiedy powstanie nowa strona');
define('_MI_WIWIMOD_PAGENOTIFY_TITLE'    ,'Zmiana strony');
define('_MI_WIWIMOD_PAGENOTIFY_CAPTION'  ,'Powiadom mnie kiedy ta strona zostanie zmodyfikowana');
define('_MI_WIWIMOD_PAGENOTIFY_DESC'     ,'Otrzymaj powiadomienie gdy jakikolwiek użytkownik zmieni tę stronę.');
define('_MI_WIWIMOD_PAGENOTIFY_SUBJECT'  ,'[{X_SITENAME}] {X_MODULE} automatyczne powiadomienie: strona została uaktualniona');

?>