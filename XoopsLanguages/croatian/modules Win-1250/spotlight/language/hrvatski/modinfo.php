<?php
/**
 * $Id: modinfo.php, v 2.0 12 March 2004 catzwolf Exp $
 * Module: Spotlight
 * Version: v2.0
 * Release Date: 12 March 2004
 * Author: Catzwolf
 * Orginal Author: Herko (me at herkocoomans dot net) and    
 * 				   Dawilby (willemsen1 at chello dot nl)
 * Licence: GNU
 */

// The name of this module
define('_MI_KUHT_NAME',' Objavljivanje');

// A brief description of this module
define('_MI_KUHT_DESC',' Stavlja èlanke novosti u centralni objavljivaèki blok.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_KUHT_BNAME','Objavljivanje - News');
define('_MI_KUHT_BNAME1','Objavljivanje - WF-Sections');

// Names of admin menu items
define('_MI_KUHT_ADMENU1','Opæa konfiguracija');
define('_MI_KUHT_ADMENU2','News Blok');
define('_MI_KUHT_ADMENU3','WF-Section Blok');
define('_MI_KUHT_ADMENU4','Mini Objave');
define('_MI_KUHT_ADMENU5','NewsTicker dodatak');

define('_MI_KUHT_UPLOADDIR','Upload mapa za slike Newsa (Bez završne kose crte)');
define('_MI_KUHT_WFUPLOADDIR','Upload mapa za slike WF-Sectiona (Bez završne kose crte)');
define('_MI_KUHT_LINKIMAGES','Upload mapa za slike objavljivanja (Bez završne kose crte)');
define('_MI_KUHT_MAXFILESIZE','Maksimalna velièina za upload');
define('_MI_KUHT_IMGWIDTH','Maksimalna širina slike za upload');
define('_MI_KUHT_IMGHEIGHT','Maksimalna visina slike za upload');
define('_MI_KUHT_UPDATETHUMBS','Uvjek obnovi smanjene slike?');

define('_MI_KUHT_NEWSSHOWTHUMBS','Koristi smanjenu sliku za novosti sliku?');
define('_MI_KUHT_DIMGWIDTH','Širina slike za novosti');
define('_MI_KUHT_DIMGHEIGHT','Visina slike za novosti');
define('_MI_KUHT_RETAINIMGSIZE','Koristi stvarnu velièinu slike novosti?');
define('_MI_KUHT_PERPAGE','Maksimalni broj èlanaka koji æe se prikazati?');
define('_MI_KUHT_MORE_LINKS','Pokaži listu ostalih novosti?');
define('_MI_KUHT_TITLECHARS','Dužina naslova objavljene novosti');
define('_MI_KUHT_DISP','Broj novosti za prikaz');
define('_MI_KUHT_TOPICS','Prikaži izbornik tema novosti?'); // By Romu R&B.
define('_MI_KUHT_TEXTVIEW','Prikaži News teaser?');
define('_MI_KUHT_INCSTATS','Ukljuèi liniju mini-statistike za novosti?');
define('_MI_KUHT_HOMETEXTCHARS','Dužina objave novosti teaser');
define('_MI_KUHT_HOMETEXTDSC','Broj slova. 0 = Cijeli tekst. (Primjenjuje se samo na ne-Html prièe)');
define('_MI_KUHT_CHOOSETEMPLATE','Izaberite izgled novosti s dva stupca?');
define('_MI_KUHT_CHOOSETEMPLATEDESC','Izgled novosti u stogu æe biti korišten ako je ne izabrano');
define('_MI_KUHT_ORDER','Poredak prikazivanja prièa novosti');
define('_MI_KUHT_QUALITY','Kvaliteta slike novosti');
define('_MI_KUHT_STOPSHOUTING','Zaustavi vikanje u naslovima');
define('_MI_KUHT_REMIMGMAIN','Izbaci slike iz glavne objavljene prièe novosti?');
define('_MI_KUHT_REMIMGTEAS','Izbaci slike iz News Teasers?');

define('_MI_KUHT_WFSSHOWTHUMBS','Koristi smanjenu sliku za WF-Section sliku?');
define('_MI_KUHT_WFDIMGWIDTH','Širina slike za WF-Section');
define('_MI_KUHT_WFDIMGHEIGHT','Visina slike za WF-Section');
define('_MI_KUHT_WFRETAINIMGSIZE','Koristi stvarnu velièinu slike za WF-Section?');
define('_MI_KUHT_WFPERPAGE','Maksimalni broj èlanaka koji æe se prikazati?');
define('_MI_KUHT_WFMORE_LINKS','Pokaži listu ostalih WF-Section prièa?');
define('_MI_KUHT_WFTITLECHARS','Dužina naslova objavljene WF-Section prièe');
define('_MI_KUHT_WFDISP','Broj WF-Section èlanaka za prikaz');
define('_MI_KUHT_WFTOPICS','Prikaži izbornik tema za WF-Section?'); // By Romu R&B.
define('_MI_KUHT_WFTEXTVIEW','Prikaži WF-Section teaser?');
define('_MI_KUHT_WFINCSTATS','Ukljuèi liniju mini-statistika za WF-Section?');
define('_MI_KUHT_WFHOMETEXTCHARS','Dužina objavljene WF-Section teaser');
define('_MI_KUHT_WFHOMETEXTDSC','Broj slova. 0 = Cijeli tekst. (Primjenjuje se samo na ne-Html prièe)');
define('_MI_KUHT_WFCHOOSETEMPLATE','Izaberite izgled WF-Section s dva stupca?');
define('_MI_KUHT_WFCHOOSETEMPLATEDESC','Izgled WF-Section-a u stogu æe biti korišten ako je ne izabrano');
define('_MI_KUHT_WFORDER','Poredak prikazivanja WF-Section èlanaka');
define('_MI_KUHT_WFQUALITY','Kvaliteta WF-Section slike');
define('_MI_KUHT_WFREMIMGMAIN','Izbaci slike iz glavnog WF-Section èlanka?');
define('_MI_KUHT_WFREMIMGTEAS','Izbaci slike iz WF-Section èlanka Teasers?');

?>
