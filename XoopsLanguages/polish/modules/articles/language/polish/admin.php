<?php
// $Id: admin.php,v 1.1 2005/07/03 08:50:31 dap997 Exp $

// Polish version by 'plxoops project'

// Template constant
// define("_AM_ART_*",	"");

// Generic form captions
// Table titles
define("_AM_ART_FRMTTLPRVWEDTS",	"Podgl�d artyku�u"); //(for pop-up preview)
define("_AM_ART_FRMTTLPRVWART",		"Podgl�d artyku�u"); // for in article form page
define("_AM_ART_FRMTTLPRVWCAT",		"Poka� kategori�");
define("_AM_ART_FRMTTLADDART",		"Dodaj Artyku�");
define("_AM_ART_FRMTTLADDCAT",		"Dodaj Kategori�");
define("_AM_ART_FRMTTLEDTCAT",		"Edytuj Kategori�");
define("_AM_ART_FRMTTLVALART",		"Zatwierd� artyku�y");
// Table column headers
define("_AM_ART_FRMCAPHDRID",		"Nr.");
define("_AM_ART_FRMCAPHDRTTL",		"Tytu�");
define("_AM_ART_FRMCAPHDCATLNG",	"Kategoria");
define("_AM_ART_FRMCAPHDCATSRT",	"Kat");
define("_AM_ART_FRMCAPHDRORDR",		"Kolejno��");
// Table side caption
define("_AM_ART_FRMCAPSDTTL",		"Tytu�");
define("_AM_ART_FRMCAPSDCTGRY",		"Kategoria");
define("_AM_ART_FRMCAPSDORDR",		"Kolejno��");
define("_AM_ART_FRMCAPSDDSPLY",		"Wy�wietl");
define("_AM_ART_FRMCAPSDDSCRN",		"Opis");
define("_AM_ART_FRMCAPSDCATDSC",	"Opis Kategorii");
define("_AM_ART_FRMCAPSDARTCL",		"Tre�� Artyku�u");
// Link captions
define("_AM_ART_FRMCAPLNKPRVW",		"Kliknij aby podejrze�");
define("_AM_ART_FRMCAPLNKEDT",		"Kliknij aby edytowa�");
define("_AM_ART_FRMCAPLNKDLT",		"Kliknij aby usun��");
define("_AM_ART_FRMCAPLNKGTFRM",	"Id� do formularza");
define("_AM_ART_FRMCAPLNKVLTSHW",	"Kliknij aby zatwierdzi� i opublikowa�");
define("_AM_ART_FRMCAPLNKVLTHDE",	"Kliknij aby zatwierdzi� bez publikacji");
// Button caption
define("_AM_ART_FRMBTTNCLS",	"Zamknij okno");
define("_AM_ART_FRMBTTNSAVE",	"Zapisz");
define("_AM_ART_FRMBTTNRST",	"Wyczy��");
define("_AM_ART_FRMBTTNCNCL",	"Anuluj");
define("_AM_ART_FRMBTTNPRVW",	"Podgl�d");
// Form Element captions
define("_AM_ART_FRMCAPSLCTSHW",		"Wybierz/odznacz aby pokaza� artyku�.");
define("_AM_ART_FRMCAPSLCTNOHTML",	"Wy��cz tagi HTML (pozostaw zaznaczone je�li u�ywasz edytor�w WYSIWYG).");
define("_AM_ART_FRMCAPSLCTNOBR",	"Wy��cz automatyczne za�amywanie wierszy (powinno by� odznaczone je�li u�ywasz edytor�w WYSIWYG).");
define("_AM_ART_FRMCAPSLCTNOSMLY",	"Wy��cz emotikony XOOPSa.");
define("_AM_ART_FRMCAPSLCTNOXIMG",	"Wy��cz obrazki wy�wietlone z kodem XOOPSa.");
define("_AM_ART_FRMCAPSLCTNOXCDE",	"Wy��cz kody XOOPSa.");
define("_AM_ART_FRMCAPSLCTCATSHW",	"Wybierz/odznacz aby pokaza� kategori� i powi�zane z ni� artyku�y.");
// Misc
define("_AM_ART_FRMCAPSLCT",	"Wybierz kategori�");
define("_AM_ART_FRMCAPNOVAL",	"Nie ma �adnych artyku��w do zatwierdzenia");
define("_AM_ART_FRMCAPSTTSPUB",	"Status: opublikowany");
define("_AM_ART_FRMCAPSTTSHDN",	"Status: ukryty");
define("_AM_ART_FRMCAPPGBRK",	"U�yj <strong>[pagebreak]</strong> aby podzieli� artyku� na strony.");
// Javascript messages
define("_AM_ART_JVSRPTADDTTL",	"Wpisz tytu�");
define("_AM_ART_JVSRPTSLTCAT",	"Wybierz kategori� z poni�szej listy");
// Confirmation messages
define("_AM_ART_ERRORNOCATS",	"Najpierw <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/catadd.php\">dodaj kategori�</a> a potem artyku�.");

// Navigation/breadcrumbs/info bar
// Navigation bar
define("_AM_ART_NAVINDEX",		"Index");
define("_AM_ART_NAVARTADD",		"Dodaj artyku�");
define("_AM_ART_NAVARTEDDEL",	"Edytuj/Kasuj artyku�");
define("_AM_ART_NAVARTEDT",		"Edytuj artyku�");
define("_AM_ART_NAVCATADD",		"Dodaj kategori�");
define("_AM_ART_NAVCATEDDEL",	"Edytuj/Kasuj kategori�");
define("_AM_ART_NAVCATEDT",		"Edytuj kategori�");
define("_AM_ART_NAVVALIDATE",	"Zatwierd�");
define("_AM_ART_NAVFRNTPAGE",	"Strona nadrz�dna");
define("_AM_ART_NAVABOUT",		"O");
// "Breadcrumbs" bar
define("_AM_ART_NAVBCINDEX",	"Index");
define("_AM_ART_NAVBCARTEDDE",	"Edytuj/Kasuj artyku�");
define("_AM_ART_NAVBCVALART",	"Zatwierd� artyku�y");
// Info bar
define("_AM_ART_NAVINFMOD",		"modu�");
define("_AM_ART_NAVINFPREF",	"prefs");
define("_AM_ART_NAVINFHELP",	"pomoc");
define("_AM_ART_NAVINFABOUT",	"o");

// artadd.php


// arteddel.php
define("_AM_ART_LISTTITLE",		"Artyku�y");
define("_AM_ART_EDITTITLE",		"Edytuj artyku�");
define("_AM_ART_FRMCAPNOARTS",	"Nie ma �adnych artyku��w do edytowania.");

// catadd.php
define("_AM_ART_FRMCAPNOCATS",	"Nie ma �adnych kategorii do edytowania.");

// validate.php


// index.php
define("_AM_ART_TTLGENSTATS",		"Statystyki og�lne");
define("_AM_ART_TTLGENVLDT",		"Zatwierdzanie:");
define("_AM_ART_TTLGENVLDTDSC",		"artyku�(y/�w) oczekuje na <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/validate.php\">zatwierdzenie</a>.");
define("_AM_ART_TTLGENNUMARTS",		"Liczba artyku��w:");
define("_AM_ART_TTLGENNUMARTSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku�(y/�w)</a>.");
define("_AM_ART_TTLGENNUMCATS",		"Liczba kategorii:");
define("_AM_ART_TTLGENNUMCATSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/cateddel.php\">kategorii</a>.");
define("_AM_ART_TTLGENNUMVIEWS",	"Liczba ods�on:");
define("_AM_ART_TTLGENNUMVIEWSDSC",	"ods�on <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku�u</a>.");
define("_AM_ART_TTLGENNUMPUB",		"Opublikowane:");
define("_AM_ART_TTLGENNUMPUBDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku��w</a> zosta�o obublikowanych.");
define("_AM_ART_TTLGENNUMHIDDN",	"Ukryte:");
define("_AM_ART_TTLGENNUMHIDDNDSC",	"artyku��w jest ukrytych (wliczaj�c niezatwierdzone <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku�y</a>).");


// about.php



?>
