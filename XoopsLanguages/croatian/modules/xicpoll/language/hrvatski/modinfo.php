<?php
// $Id: modinfo.php,v 1.2 2003/10/14 13:18:04 wellwine Exp $
// $Id: modinfo.php,v 1.3 2006 Nazar Exp $
// $Id: modinfo.php,v 1.4 2006 GibaPhp Exp $
// Module Info

// The name directory module
define('_MI_POLLS_DIRNAME',"xic ankete"); // warning, name of directory for install module.

// The name of this module
define('_MI_POLLS_NAME',"Ankete");

// A brief description of this module
define('_MI_POLLS_DESC',"Prikazuje anketni/upitnički blok");

// A Brief description of Extra Blocks. GibaPhp
define('_MI_POLLS_BDESC_02',"02-blok ankete");
define('_MI_POLLS_BDESC_03',"03-blok ankete");
define('_MI_POLLS_BDESC_04',"04-blok ankete");

// Names of blocks for this module (Not all module has blocks)
define('_MI_POLLS_BNAME1',"Ankete");

// Extra blocks - GibaPhp
define('_MI_POLLS_BNAME_02',"Glasački blok 02");
define('_MI_POLLS_BNAME_03',"Glasački blok 03");
define('_MI_POLLS_BNAME_04',"Glasački blok 04");

// Names of admin menu items
define('_MI_POLLS_ADMENU1',"Lista anketa");
define('_MI_POLLS_ADMENU2',"Dodaj anketu");

// Module properties - wellwine
define('_MI_POLLS_LOOKUPHOST',"Prikaži ime hosta umjesto IP adrese");
define('_MI_POLLS_LOOKUPHOSTDESC',"Lista imena hostova umjesto IP adresa u pregledu zapisa ankete. Otkad se nslookup koristi, moguće da će duže trajati da se prikažu imena.");

//Module properties - Nazar
define('_MI_POLL_LIMITBYIP',"Zabrani glasovanje sa iste IP adrese");
define('_MI_POLL_LIMITBYIPD',"Zabrana više glasovanja koji dolaze sa iste IP adrese. Upozorenje, ista IP adresa se koristi u intranetima.");
define('_MI_POLL_LIMITBYUID',"Zabrani glasovanje istom korisniku");
define('_MI_POLL_LIMITBYUIDD',"Zabrana glasovanja sa istog korisnika.");

?>