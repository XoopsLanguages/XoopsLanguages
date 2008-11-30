<?php
// $Id: blocksadmin.php,v 1.6 2003/10/02 07:16:47 okazu Exp $
//%%%%%%	Admin Module Name  Blocks 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	blocks.php 	%%%%%
define("_AM_BADMIN","Administracija blokova");
define("_AM_ADDBLOCK","Dodaj novi blok");
define("_AM_LISTBLOCK","Lista svih blokova");
define("_AM_SIDE","Strana");
define("_AM_BLKDESC","Opis bloka");
define("_AM_TITLE","Naslov");
define("_AM_WEIGHT","Redoslijed");
define("_AM_ACTION","Radnja");
define("_AM_BLKTYPE","Vrsta bloka");
define("_AM_LEFT","Lijevo");
define("_AM_RIGHT","Desno");
define("_AM_CENTER","U sredi�te");
define("_AM_VISIBLE","Vidljiv");
define("_AM_POSCONTT","Pozicija dodatnih sadr�aja");
define("_AM_ABOVEORG","Iznad originalnog sadr�aja");
define("_AM_AFTERORG","Nakon originalnog sadr�aja");
define("_AM_EDIT","Uredi");
define("_AM_DELETE","Izbri�i");
define("_AM_SBLEFT","Bo�ni Blok - Lijevo");
define("_AM_SBRIGHT","Bo�ni Blok - Desno");
define("_AM_CBLEFT","Sredi�nji Blok - Lijevo");
define("_AM_CBRIGHT","Sredi�nji Blok - Desno");
define("_AM_CBCENTER","Sredi�nji Blok - Sredi�te");
define("_AM_CONTENT","Sadr�aj");
define("_AM_OPTIONS","Opcije");
define("_AM_CTYPE","Vrsta sadr�aja");
define("_AM_HTML","HTML");
define("_AM_PHP","PHP Skripta");
define("_AM_AFWSMILE","Auto Format (smajli�i omogu�eni)");
define("_AM_AFNOSMILE","Auto Format (smajli�i onemogu�eni)");
define("_AM_SUBMIT","Potvrdi");
define("_AM_CUSTOMHTML","Blok po �elji (HTML)");
define("_AM_CUSTOMPHP","Blok po �elji (PHP)");
define("_AM_CUSTOMSMILE","Blok po �elji (Auto Format + smajli�i)");
define("_AM_CUSTOMNOSMILE","Blok po �elji (Auto Format)");
define("_AM_DISPRIGHT","Prika�i samo desne blokove");
define("_AM_SAVECHANGES","Spremi promijene");
define("_AM_EDITBLOCK","Uredi blok");
define("_AM_SYSTEMCANT","Blok sustava se ne mo�e izbrisati!");
define("_AM_MODULECANT","Ovaj blok se ne mo�e izravno izbrisati! Ako �elite izbrisati ovaj blok, prvo deaktivirajte modul.");
define("_AM_RUSUREDEL","Sigurno �elite izbrisati blok <b>%s</b>?");
define("_AM_NAME","Ime");
define("_AM_USEFULTAGS","Korisne oznake:");
define("_AM_BLOCKTAG1","%s �e ispisati %s");
define('_AM_SVISIBLEIN', 'Prika�i blokove vidljive u %s');
define('_AM_TOPPAGE', 'Po�etna stranica');
define('_AM_VISIBLEIN', 'Vidljivo u');
define('_AM_ALLPAGES', 'Sve stranice');
define('_AM_TOPONLY', 'Samo po�etna stranica');
define('_AM_ADVANCED', 'Napredne postavke');
define('_AM_BCACHETIME', 'Vijek trajanja me�uspremnika');
define('_AM_BALIAS', 'Drugi naziv');
define('_AM_CLONE', 'Kopija');  // clone a block
define('_AM_CLONEBLK', 'Kopiranje'); // cloned block
define('_AM_CLONEBLOCK', 'Stvori indenti�an blok');
define('_AM_NOTSELNG', "'%s' nije izabran!"); // error message
define('_AM_EDITTPL', 'Uredi predlo�ke');
define('_AM_MODULE', 'Modul');
define('_AM_GROUP', 'Grupa');
define('_AM_UNASSIGNED', 'Nedodijeljen');
?>