<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting 
* source code which is considered copyrighted (c) material of the 
* original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:         The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:           http://www.fsf.org/copyleft/gpl.html GNU public license
* @packet:            Modules
* @sub-packet:        Smallworld
* @since:             Xoops 2.5.4
* @Author:            Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:         2011 Culex
* @Last committed:    $Revision$
* @Last changed by:   $Author$
* @Last changed date: $Date$
* @ID:                $Id$
**/

define("_MI_SMALLWORLD_MODULE_NAME","Smallworld");
define("_MI_SMALLWORLD_MODULE_DESC","Et lille socialt networksmodule. Med vægbeskeder og profil");
define('_MI_SMALLWORLD_ADMENU','Administration');
define('_MI_SMALLWORLDMENU_INDEX','Hjem');
define('_MI_SMALLWORLDMENU_STATS','Statistik');
define('_MI_SMALLWORLDMENU_USERADMIN','brugeradmin');
define('_MI_SMALLWORLDMENU_HELP','Hjælp');
define('_MI_SMALLWORLDMENU_ABOUT','Om');

/* -------- Configs ---------- */

// Map apis
define("_MI_SMALLWORLD_USEGOOGLE","Brug google maps geolocation Api ?");
define("_MI_SMALLWORLD_USEGOOGLE_DESC","Default er ja, ellers bruges geonames database. Vælg ja for at bruge google maps");

// Messages per page
define("_MI_SMALLWORLD_MSGTOSHOW","Beskeder der skal vises ?");
define("_MI_SMALLWORLD_MSGTOSHOW_DESC","Hvor mange beskeder (updates) skal vises på profil og indexside.");

// Use validation
define("_MI_SMALLWORLD_VALIDATIONSTRENGHT","Validation af trin");
define("_MI_SMALLWORLD_VALIDATIONSTRENGHT_DESC","Brug validation ved registrering og ved edit profil.<br><br>Mulighederne er:<br><br>Nej: Ingen validation<br>Ja: *vigtige* felter skal validated ");

// Smallworld take-over user name links ?
define("_MI_SMALLWORLD_TAKEOVERLINKS","Konverter brugernavne-links til smallworld");
define("_MI_SMALLWORLD_TAKEOVERLINKS_DESC","Smallworld anvender et lille javascript som ændrer alle links til xoops profil og henviser dem istedet til denne brugers smallworld profil<br><br>Default is 'nej'");

define("_MI_SMALLWORLD_USERSOWNMSGCOUNTS","Brugers egne handlinger tælles med ? ");
define("_MI_SMALLWORLD_USERSOWNMSGCOUNTS_DESC","Hvert 10. sekund tælles alle beskeder/sletninger fra dine følgere. Hvis tallet ikke er 0 (dvs. ingen ændringer) så vises en lille opdateringsknap<br>Hvis du her vælger 'ja' Så bliver brugerens egne handlinger talt med.");

define("_MI_SMALLWORLD_BOOKMARSAVATARS","brug smallworldlogo ved bookmarking ? ");
define("_MI_SMALLWORLD_BOOKMARKSAVATARS_DESC","Når du poster videre fra dine indlæg eller andres. Skal smallworldlogo så vises eller skal brugerens egen avatar ? <br><br>Default er 'JA' = smallworld logo.");

define("_MI_SMALLWORLD_USEMAILNOTIFICATION","Brug mail notificationer ? ");
define("_MI_SMALLWORLD_USEMAILNOTIFICATION_DESC","Når en ny bruger registrerer sig modtager admin mail, eller når en bruger svarer på din post, eller admin får besked ved klage.<br><br>Default er 'ja'");

// Select fields & Mandetory fields
define('_MI_SMALLWORLD_VIEWFIELDS','Anvendte felter ved registrering og profil');
define('_MI_SMALLWORLD_VIEWFIELDS_DESC','Vælg de felter der skal bruges ved registrering og vises i profilvisning<br>Brug control + mouse for at vælge flere');
define('_MI_SMALLWORLD_VERIFYFIELDS','Brug verification på felter ved registrering');
define('_MI_SMALLWORLD_VERIFYFIELDS_DESC','Vælg (*) obligatoriske felter i formen<br>Brug control + mouse for at vælge flere');

define('_MI_SMALLWORLD_REALNAME','Rigtige navn');
define('_MI_SMALLWORLD_GENDER','Køn');
define('_MI_SMALLWORLD_INTERESTEDIN','Interesseret i');
define('_MI_SMALLWORLD_RELATIONSHIPSTATUS','Forholds status');
define('_MI_SMALLWORLD_PARTNER','Partner');
define('_MI_SMALLWORLD_LOOKINGFOR','Søger..');
define('_MI_SMALLWORLD_BIRTHDAY','Fødselsdag');
define('_MI_SMALLWORLD_BIRTHPLACE','Fødselssted');
define('_MI_SMALLWORLD_POLITICALVIEWS','Politisk livssyn');
define('_MI_SMALLWORLD_RELIGIOUSVIEWS','Religiøs livssyn');
define('_MI_SMALLWORLD_EMAILS','Emails');
define('_MI_SMALLWORLD_SCREENNAMES','Brugernavne');
define('_MI_SMALLWORLD_MOBILE','mobil');
define('_MI_SMALLWORLD_LANDPHONE','telefon');
define('_MI_SMALLWORLD_STREETADRESS','Adresse');
define('_MI_SMALLWORLD_PRESENTCITY','Nuværende by');
define('_MI_SMALLWORLD_COUNTRY','Land');
define('_MI_SMALLWORLD_WEBSITE','webside');
define('_MI_SMALLWORLD_INTERESTS','Interesser');
define('_MI_SMALLWORLD_FAVOURITEMUSIC','Favoritmusik');
define('_MI_SMALLWORLD_FAVOURITETVSHOWS','Favorit tv programmer');
define('_MI_SMALLWORLD_FAVOURITEMOVIES','Favorit film');
define('_MI_SMALLWORLD_FAVOURITEBOOKS','Favoritbøger');
define('_MI_SMALLWORLD_ABOUTME','Om mig');
define('_MI_SMALLWORLD_EDUCATION','Uddannelse');
define('_MI_SMALLWORLD_EMPLOYMENT','Arbejde');

//Private or public module
define ('_MI_SMALLWORLD_PRIVATEMODULE','Vis offentlige indlæg ?');
define ('_MI_SMALLWORLD_PRIVATEMODULE_DESC','Hvis "ja" kan alle offentlige indlæg skrevet af forfatter med autorisation læses af alle besøgende. Dog skal bruger stadig været logget ind for at (stemme / kommentere osv).');
?>