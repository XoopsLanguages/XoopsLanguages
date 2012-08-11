<?php
// $Id: modinfo.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_HEADLINES_NAME' ) ) {

// DateTime format
define("_MI_DEFAULT_DTFMT_SHORT","j M ah:i");

// The name of this module
define("_MI_HEADLINES_NAME","Overskrifter");

// A brief description of this module
define("_MI_HEADLINES_DESC","Vis RSS/XML Nyhedsfeed fra andre sider");

// Names of blocks for this module (Not all module has blocks)
define("_MI_HEADLINES_BNAME","Overskrifter");
define("_MI_HEADLINES_BDESC","Viser overskrifter via RSS/ATOM i separate separate celler");
define("_MI_HEADLINES_BNAME_MIXED","Nye overskrifter");
define("_MI_HEADLINES_BDESC_MIXED","Viser overskrifter via RSS/ATOM i en samlet betragtning");

// Names of admin menu items
define("_MI_HEADLINES_ADMENU1","List overskrifter");
define("_MI_HEADLINES_ADMENU_MYTPLSADMIN","Skabeloner");
define("_MI_HEADLINES_ADMENU_MYBLOCKSADMIN","Blokke/Grupper");

// Configs
define("_MI_HEADLINES_INDEX_VIEWMODE","Standard visning");
define("_MI_HEADLINES_INDEX_VIEWMODED","Vælg en visningstype, som er en topsiden af modulet");
define("_MI_HEADLINES_INDEX_VIEWMODE_MIXED","Blandet & Nyere er øverst");
define("_MI_HEADLINES_INDEX_VIEWMODE_CLASSIC","Klassisk");
define("_MI_HEADLINES_MIXED_MAXITEM","Maks. enheder");
define("_MI_HEADLINES_MIXED_MAXITEMD","Angiv maks antal RSS/ATOMer i seneste visning (enheder)");
define("_MI_HEADLINES_MIXED_MAXLEN","Maks. længde");
define("_MI_HEADLINES_MIXED_MAXLEND","Angiv maks antal tegn på titler i seneste visning (byte)");
define("_MI_HEADLINES_PROXY_HOST","Proxy host");
define("_MI_HEADLINES_PROXY_HOSTD","Hvis du henter RSS/ATOM gennem en proxy server, angiv navnet eller IP-adressen her<br />Ellers lad den stå blank.");
define("_MI_HEADLINES_PROXY_PORT","Proxy port");
define("_MI_HEADLINES_PROXY_PORTD","Hvis du henter RSS/ATOM gennem en proxy server, angiv port nummeret her") ;
define("_MI_HEADLINES_PROXY_USER","Proxy bruger");
define("_MI_HEADLINES_PROXY_USERD","Hvis proxy serveren behøver godkendelse, angiv bruger navn<br />Ellers lad den stå blank") ;
define("_MI_HEADLINES_PROXY_PASS","Proxy password");
define("_MI_HEADLINES_PROXY_PASSD","Hvis proxy serveren behøver godkendelse, angiv password<br />Eller lad det stå blankt") ;
define("_MI_HEADLINES_SHORTDTFMT","Kort format for dato og tid");
define("_MI_HEADLINES_SHORTDTFMTD","Beskriv det som den første parameter i PHP function date().<br /><a href='http://jp.php.net/date'>henvisning til PHP manual</a>") ;
define("_MI_HEADLINES_MIXPICKUP","Afhent ikke en nyhed, som seneste, hvis dette overskrider maks. antallet");
define("_MI_HEADLINES_MIXPICKUPD","Hvis du sætter til nej, vil indstillingen'Maks. enheder' på hvert feed blive ignoreret.");

define('_MI_HEADLINES_FETCHMETHOD','Metode til hentning af RSS/ATOM') ;
define('_MI_HEADLINES_FETCHMETHOD_DSC','brug Snoopy hvis det er muligt. fopen() kan virke hvis "allow_url_fopen on" er sat i php.ini') ;
define('_MI_HEADLINES_FM_SNOOPY','snoopy');
define('_MI_HEADLINES_FM_FOPEN','fopen()');
define('_MI_HEADLINES_FM_SSC','stream_socket_client() (PHP5)');


}

?>
