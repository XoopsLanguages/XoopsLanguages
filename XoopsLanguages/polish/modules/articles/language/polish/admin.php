<?php
// $Id: admin.php,v 1.1 2005/07/03 08:50:31 dap997 Exp $

// Polish version by 'plxoops project'

// Template constant
// define("_AM_ART_*",	"");

// Generic form captions
// Table titles
define("_AM_ART_FRMTTLPRVWEDTS",	"Podgl±d artyku³u"); //(for pop-up preview)
define("_AM_ART_FRMTTLPRVWART",		"Podgl±d artyku³u"); // for in article form page
define("_AM_ART_FRMTTLPRVWCAT",		"Poka¿ kategoriê");
define("_AM_ART_FRMTTLADDART",		"Dodaj Artyku³");
define("_AM_ART_FRMTTLADDCAT",		"Dodaj Kategoriê");
define("_AM_ART_FRMTTLEDTCAT",		"Edytuj Kategoriê");
define("_AM_ART_FRMTTLVALART",		"Zatwierd¼ artyku³y");
// Table column headers
define("_AM_ART_FRMCAPHDRID",		"Nr.");
define("_AM_ART_FRMCAPHDRTTL",		"Tytu³");
define("_AM_ART_FRMCAPHDCATLNG",	"Kategoria");
define("_AM_ART_FRMCAPHDCATSRT",	"Kat");
define("_AM_ART_FRMCAPHDRORDR",		"Kolejno¶æ");
// Table side caption
define("_AM_ART_FRMCAPSDTTL",		"Tytu³");
define("_AM_ART_FRMCAPSDCTGRY",		"Kategoria");
define("_AM_ART_FRMCAPSDORDR",		"Kolejno¶æ");
define("_AM_ART_FRMCAPSDDSPLY",		"Wy¶wietl");
define("_AM_ART_FRMCAPSDDSCRN",		"Opis");
define("_AM_ART_FRMCAPSDCATDSC",	"Opis Kategorii");
define("_AM_ART_FRMCAPSDARTCL",		"Tre¶æ Artyku³u");
// Link captions
define("_AM_ART_FRMCAPLNKPRVW",		"Kliknij aby podejrzeæ");
define("_AM_ART_FRMCAPLNKEDT",		"Kliknij aby edytowaæ");
define("_AM_ART_FRMCAPLNKDLT",		"Kliknij aby usun±æ");
define("_AM_ART_FRMCAPLNKGTFRM",	"Id¼ do formularza");
define("_AM_ART_FRMCAPLNKVLTSHW",	"Kliknij aby zatwierdziæ i opublikowaæ");
define("_AM_ART_FRMCAPLNKVLTHDE",	"Kliknij aby zatwierdziæ bez publikacji");
// Button caption
define("_AM_ART_FRMBTTNCLS",	"Zamknij okno");
define("_AM_ART_FRMBTTNSAVE",	"Zapisz");
define("_AM_ART_FRMBTTNRST",	"Wyczy¶æ");
define("_AM_ART_FRMBTTNCNCL",	"Anuluj");
define("_AM_ART_FRMBTTNPRVW",	"Podgl±d");
// Form Element captions
define("_AM_ART_FRMCAPSLCTSHW",		"Wybierz/odznacz aby pokazaæ artyku³.");
define("_AM_ART_FRMCAPSLCTNOHTML",	"Wy³±cz tagi HTML (pozostaw zaznaczone je¶li u¿ywasz edytorów WYSIWYG).");
define("_AM_ART_FRMCAPSLCTNOBR",	"Wy³±cz automatyczne za³amywanie wierszy (powinno byæ odznaczone je¶li u¿ywasz edytorów WYSIWYG).");
define("_AM_ART_FRMCAPSLCTNOSMLY",	"Wy³±cz emotikony XOOPSa.");
define("_AM_ART_FRMCAPSLCTNOXIMG",	"Wy³±cz obrazki wy¶wietlone z kodem XOOPSa.");
define("_AM_ART_FRMCAPSLCTNOXCDE",	"Wy³±cz kody XOOPSa.");
define("_AM_ART_FRMCAPSLCTCATSHW",	"Wybierz/odznacz aby pokazaæ kategoriê i powi±zane z ni± artyku³y.");
// Misc
define("_AM_ART_FRMCAPSLCT",	"Wybierz kategoriê");
define("_AM_ART_FRMCAPNOVAL",	"Nie ma ¿adnych artyku³ów do zatwierdzenia");
define("_AM_ART_FRMCAPSTTSPUB",	"Status: opublikowany");
define("_AM_ART_FRMCAPSTTSHDN",	"Status: ukryty");
define("_AM_ART_FRMCAPPGBRK",	"U¿yj <strong>[pagebreak]</strong> aby podzieliæ artyku³ na strony.");
// Javascript messages
define("_AM_ART_JVSRPTADDTTL",	"Wpisz tytu³");
define("_AM_ART_JVSRPTSLTCAT",	"Wybierz kategoriê z poni¿szej listy");
// Confirmation messages
define("_AM_ART_ERRORNOCATS",	"Najpierw <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/catadd.php\">dodaj kategoriê</a> a potem artyku³.");

// Navigation/breadcrumbs/info bar
// Navigation bar
define("_AM_ART_NAVINDEX",		"Index");
define("_AM_ART_NAVARTADD",		"Dodaj artyku³");
define("_AM_ART_NAVARTEDDEL",	"Edytuj/Kasuj artyku³");
define("_AM_ART_NAVARTEDT",		"Edytuj artyku³");
define("_AM_ART_NAVCATADD",		"Dodaj kategoriê");
define("_AM_ART_NAVCATEDDEL",	"Edytuj/Kasuj kategoriê");
define("_AM_ART_NAVCATEDT",		"Edytuj kategoriê");
define("_AM_ART_NAVVALIDATE",	"Zatwierd¼");
define("_AM_ART_NAVFRNTPAGE",	"Strona nadrzêdna");
define("_AM_ART_NAVABOUT",		"O");
// "Breadcrumbs" bar
define("_AM_ART_NAVBCINDEX",	"Index");
define("_AM_ART_NAVBCARTEDDE",	"Edytuj/Kasuj artyku³");
define("_AM_ART_NAVBCVALART",	"Zatwierd¼ artyku³y");
// Info bar
define("_AM_ART_NAVINFMOD",		"modu³");
define("_AM_ART_NAVINFPREF",	"prefs");
define("_AM_ART_NAVINFHELP",	"pomoc");
define("_AM_ART_NAVINFABOUT",	"o");

// artadd.php


// arteddel.php
define("_AM_ART_LISTTITLE",		"Artyku³y");
define("_AM_ART_EDITTITLE",		"Edytuj artyku³");
define("_AM_ART_FRMCAPNOARTS",	"Nie ma ¿adnych artyku³ów do edytowania.");

// catadd.php
define("_AM_ART_FRMCAPNOCATS",	"Nie ma ¿adnych kategorii do edytowania.");

// validate.php


// index.php
define("_AM_ART_TTLGENSTATS",		"Statystyki ogólne");
define("_AM_ART_TTLGENVLDT",		"Zatwierdzanie:");
define("_AM_ART_TTLGENVLDTDSC",		"artyku³(y/ów) oczekuje na <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/validate.php\">zatwierdzenie</a>.");
define("_AM_ART_TTLGENNUMARTS",		"Liczba artyku³ów:");
define("_AM_ART_TTLGENNUMARTSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku³(y/ów)</a>.");
define("_AM_ART_TTLGENNUMCATS",		"Liczba kategorii:");
define("_AM_ART_TTLGENNUMCATSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/cateddel.php\">kategorii</a>.");
define("_AM_ART_TTLGENNUMVIEWS",	"Liczba ods³on:");
define("_AM_ART_TTLGENNUMVIEWSDSC",	"ods³on <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku³u</a>.");
define("_AM_ART_TTLGENNUMPUB",		"Opublikowane:");
define("_AM_ART_TTLGENNUMPUBDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku³ów</a> zosta³o obublikowanych.");
define("_AM_ART_TTLGENNUMHIDDN",	"Ukryte:");
define("_AM_ART_TTLGENNUMHIDDNDSC",	"artyku³ów jest ukrytych (wliczaj±c niezatwierdzone <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artyku³y</a>).");


// about.php



?>
