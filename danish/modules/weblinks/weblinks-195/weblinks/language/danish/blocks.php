<?php
// $Id: blocks.php,v 1.1.1.1 2005/02/16 17:32:36 ohwada Exp $

// 2005-01-20 K.OHWADA
// _MB_WEBLINKS_NEWDAYS
// _MB_WEBLINKS_MORE
// _MB_WEBLINKS_MIN_WIDTH

// 2004-11-28 K.OHWADA
// atom feed

// 2004-10-24 K.OHWADA
// catlist.html

//=========================================================
// language for Blocks
//=========================================================
// --- define language begin ---
if( !defined('WEBLINKS_LANG_BL_LOADED') ) 
{

define('WEBLINKS_LANG_BL_LOADED', 1);

// top.html
define("_MB_WEBLINKS_DISP","Vis"); 
define("_MB_WEBLINKS_LINKS","Links"); 
define("_MB_WEBLINKS_CHARS","Længde af titlen"); 
define("_MB_WEBLINKS_LENGTH","tegn"); 
define("_MB_WEBLINKS_NEWDAYS","Dage af nyt link"); 
define("_MB_WEBLINKS_DAYS","dage"); 
define("_MB_WEBLINKS_POPULAR","Hits af populære link"); 
define("_MB_WEBLINKS_HITS","hits"); 
define("_MB_WEBLINKS_PIXEL","pixel"); 
define("_MB_WEBLINKS_RATING","Bedømmelse"); 
define("_MB_WEBLINKS_VOTES","stemmer"); 
define("_MB_WEBLINKS_COMMENTS","Kommentarer");

// catlist.html
define("_MB_WEBLINKS_TOTAL_LINKS","Total"); 
define("_MB_WEBLINKS_IMAGE_MODE","Vælg kategori billed"); 
define("_MB_WEBLINKS_IMAGE_MODE_0","ingen"); 
define("_MB_WEBLINKS_IMAGE_MODE_1","Folder.gif"); 
define("_MB_WEBLINKS_IMAGE_MODE_2","Indstillinger for billed"); 
define("_MB_WEBLINKS_MAX_WIDTH","Maks bredde"); 
define("_MB_WEBLINKS_WIDTH_DEFAULT","Standard bredde"); 
define("_MB_WEBLINKS_DISPSUB","Maks antal underkatgorier");

// atom feed
define("_MB_WEBLINKS_NUM_FEED","Antal feeds"); 
define("_MB_WEBLINKS_NUM_TITLE","Længde af titlen"); 
define("_MB_WEBLINKS_NUM_SUMMARY","Længde af resuméet"); 
define("_MB_WEBLINKS_NUM_CONTENT","Antal feeds, som viser indhold"); 
define("_MB_WEBLINKS_LINK_ID","Link ID"); 
define("_MB_WEBLINKS_NO_LINK_ID","Ikke valg link ID"); 
define("_MB_WEBLINKS_NO_ATOMFEED","Der er ingen tilsvarende feed"); 
define("_MB_WEBLINKS_MORE","Flere detaljer");

// 2006-11-03
// random block
define('_MB_WEBLINKS_MAX_DESC','Max længde på beskrivelse');
define('_MB_WEBLINKS_SHOW_DATE','Visning dato');
define('_MB_WEBLINKS_MODE_URL','visning stil på URl');
define('_MB_WEBLINKS_MODE_URL_SINGLE','singlelink.php');
define('_MB_WEBLINKS_MODE_URL_VISIT','visit.php');
define('_MB_WEBLINKS_MODE_URL_DIRECT','visning direkte URL');
define('_MB_WEBLINKS_URL_EMPTY','Tom URL');
define('_MB_WEBLINKS_URL_EMPTY_INCLUDE','Inkluder tom URL');
define('_MB_WEBLINKS_URL_EMPTY_EXCLUDE','Ekskluder tom URL');
define('_MB_WEBLINKS_CATEGORY','Kategori');
define('_MB_WEBLINKS_WITH_SUBCAT','Med sub kategorier');
define('_MB_WEBLINKS_MODE','Link Mode');
define('_MB_WEBLINKS_RECOMMEND','Anbefalet side');
define('_MB_WEBLINKS_MUTUAL','Lignede side');
define('_MB_WEBLINKS_RANDOM','tilfældig sorter');
define('_MB_WEBLINKS_ORDER','Orden');
define('_MB_WEBLINKS_ORDER_DESC','Gyldig når "tilfældig sortering" er NEJ');
define('_MB_WEBLINKS_TIME_UPDATE','Tid opdater');
define('_MB_WEBLINKS_TIME_CREATE','Tid lav');
define('_MB_WEBLINKS_TITLE','Titel');
define('_MB_WEBLINKS_ASC','Stigende');
define('_MB_WEBLINKS_DESC','Faldende');

// === 2007-03-25 ===
// google map
define('_MB_WEBLINKS_GM_MODE','GoogleMap Mode');
define('_MB_WEBLINKS_GM_MODE_DSC','0:Vis ikke, 1:Default, 2:Følgende værdi');
define('_MB_WEBLINKS_GM_LATITUDE','Breddegrad');
define('_MB_WEBLINKS_GM_LONGITUDE','Længdegrad');
define('_MB_WEBLINKS_GM_ZOOM','Zoom');
define('_MB_WEBLINKS_GM_HEIGHT','Højde på kort');
define('_MB_WEBLINKS_GM_TIMEOUT','Delay tid for tegning');
define('_MB_WEBLINKS_GM_TIMEOUT_DSC','msec  -1:window.onload');

// 2007-04-08
define('_MB_WEBLINKS_PHOTOS','Antal foto');

// === 2007-08-01 ===
define('_MB_WEBLINKS_CAT_TITLE_LENGTH','Længde af kategori titel');
define('_MB_WEBLINKS_GM_DESC_LENGTH','Længde af indhold i kort markering');
define('_MB_WEBLINKS_GM_WORDWRAP','Længde af wordwrap i kort markering');

// === 2007-10-10 ===
define('_MB_WEBLINKS_GM_MARKER_WIDTH','Bredde af kort markering');

// === 2008-02-17 ===
define('_MB_WEBLINKS_GM_CONTROL','Map Control');
define('_MB_WEBLINKS_GM_CONTROL_DSC','0:Vis ikke, 1:Vis');
define('_MB_WEBLINKS_GM_TYPE_CONTROL','Map Type Control');

}
// --- define language end ---

?>