<?php
// $Id: admin.php,v 1.2 2005/04/06 06:04:11 gij Exp $
// FILE		::	admin.php
// AUTHOR	::	Ryuji AMANO <info@ryus.co.jp>
// WEB		::	Ryu's Planning <http://ryus.co.jp/>
//

define('_AM_WAITING_MODNAME', 'Modules');
define('_AM_WAITING_STATUS', 'Status');

define('_AM_WAITING_PLUGINLIST', 'Plugin Controle');
define('_AM_WAITING_PLUGINLIST_DESC', '<b>module:</b> gebruikt de plugin van de te monitoren module<br /><b>built-in:</b> gebruikt de bij de Waiting module horende plugin<br /><b>Blank:</b> geen plugins gevonden');

//ModuleAdmin
define('_AM_WAITING_MISSING','Fout: De Moduleadmin class ontbreekt. Installeer de ModuleAdmin Class in /Frameworks (zie /docs/readme.txt)');

// Text for Admin footer
define("_AM_WAITING_FOOTER", "<div class='center smallsmall italic pad5'>Waiting wordt up to date gehouden door de <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");