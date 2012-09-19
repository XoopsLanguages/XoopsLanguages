<?php
// $Id: admin.php,v 1.1 2005/07/03 08:50:31 dap997 Exp $

// Polish version by 'plxoops project'

// Template constant
// define("_AM_ART_*",	"");

// Generic form captions
// Table titles
define("_AM_ART_FRMTTLPRVWEDTS",	"Podgląd artykułu"); //(for pop-up preview)
define("_AM_ART_FRMTTLPRVWART",		"Podgląd artykułu"); // for in article form page
define("_AM_ART_FRMTTLPRVWCAT",		"Pokaż kategorię");
define("_AM_ART_FRMTTLADDART",		"Dodaj Artykuł");
define("_AM_ART_FRMTTLADDCAT",		"Dodaj Kategorię");
define("_AM_ART_FRMTTLEDTCAT",		"Edytuj Kategorię");
define("_AM_ART_FRMTTLVALART",		"Zatwierdź artykuły");
// Table column headers
define("_AM_ART_FRMCAPHDRID",		"Nr.");
define("_AM_ART_FRMCAPHDRTTL",		"Tytuł");
define("_AM_ART_FRMCAPHDCATLNG",	"Kategoria");
define("_AM_ART_FRMCAPHDCATSRT",	"Kat");
define("_AM_ART_FRMCAPHDRORDR",		"Kolejność");
// Table side caption
define("_AM_ART_FRMCAPSDTTL",		"Tytuł");
define("_AM_ART_FRMCAPSDCTGRY",		"Kategoria");
define("_AM_ART_FRMCAPSDORDR",		"Kolejność");
define("_AM_ART_FRMCAPSDDSPLY",		"Wyświetl");
define("_AM_ART_FRMCAPSDDSCRN",		"Opis");
define("_AM_ART_FRMCAPSDCATDSC",	"Opis Kategorii");
define("_AM_ART_FRMCAPSDARTCL",		"Treść Artykułu");
// Link captions
define("_AM_ART_FRMCAPLNKPRVW",		"Kliknij aby podejrzeć");
define("_AM_ART_FRMCAPLNKEDT",		"Kliknij aby edytować");
define("_AM_ART_FRMCAPLNKDLT",		"Kliknij aby usunąć");
define("_AM_ART_FRMCAPLNKGTFRM",	"Idź do formularza");
define("_AM_ART_FRMCAPLNKVLTSHW",	"Kliknij aby zatwierdzić i opublikować");
define("_AM_ART_FRMCAPLNKVLTHDE",	"Kliknij aby zatwierdzić bez publikacji");
// Button caption
define("_AM_ART_FRMBTTNCLS",	"Zamknij okno");
define("_AM_ART_FRMBTTNSAVE",	"Zapisz");
define("_AM_ART_FRMBTTNRST",	"Wyczyść");
define("_AM_ART_FRMBTTNCNCL",	"Anuluj");
define("_AM_ART_FRMBTTNPRVW",	"Podgląd");
// Form Element captions
define("_AM_ART_FRMCAPSLCTSHW",		"Wybierz/odznacz aby pokazać artykuł.");
define("_AM_ART_FRMCAPSLCTNOHTML",	"Wyłącz tagi HTML (pozostaw zaznaczone jeśli używasz edytorów WYSIWYG).");
define("_AM_ART_FRMCAPSLCTNOBR",	"Wyłącz automatyczne załamywanie wierszy (powinno być odznaczone jeśli używasz edytorów WYSIWYG).");
define("_AM_ART_FRMCAPSLCTNOSMLY",	"Wyłącz emotikony XOOPSa.");
define("_AM_ART_FRMCAPSLCTNOXIMG",	"Wyłącz obrazki wyświetlone z kodem XOOPSa.");
define("_AM_ART_FRMCAPSLCTNOXCDE",	"Wyłącz kody XOOPSa.");
define("_AM_ART_FRMCAPSLCTCATSHW",	"Wybierz/odznacz aby pokazać kategorię i powiązane z nią artykuły.");
// Misc
define("_AM_ART_FRMCAPSLCT",	"Wybierz kategorię");
define("_AM_ART_FRMCAPNOVAL",	"Nie ma żadnych artykułów do zatwierdzenia");
define("_AM_ART_FRMCAPSTTSPUB",	"Status: opublikowany");
define("_AM_ART_FRMCAPSTTSHDN",	"Status: ukryty");
define("_AM_ART_FRMCAPPGBRK",	"Użyj <strong>[pagebreak]</strong> aby podzielić artykuł na strony.");
// Javascript messages
define("_AM_ART_JVSRPTADDTTL",	"Wpisz tytuł");
define("_AM_ART_JVSRPTSLTCAT",	"Wybierz kategorię z poniższej listy");
// Confirmation messages
define("_AM_ART_ERRORNOCATS",	"Najpierw <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/catadd.php\">dodaj kategorię</a> a potem artykuł.");

// Navigation/breadcrumbs/info bar
// Navigation bar
define("_AM_ART_NAVINDEX",		"Index");
define("_AM_ART_NAVARTADD",		"Dodaj artykuł");
define("_AM_ART_NAVARTEDDEL",	"Edytuj/Kasuj artykuł");
define("_AM_ART_NAVARTEDT",		"Edytuj artykuł");
define("_AM_ART_NAVCATADD",		"Dodaj kategorię");
define("_AM_ART_NAVCATEDDEL",	"Edytuj/Kasuj kategorię");
define("_AM_ART_NAVCATEDT",		"Edytuj kategorię");
define("_AM_ART_NAVVALIDATE",	"Zatwierdź");
define("_AM_ART_NAVFRNTPAGE",	"Strona nadrzędna");
define("_AM_ART_NAVABOUT",		"O");
// "Breadcrumbs" bar
define("_AM_ART_NAVBCINDEX",	"Index");
define("_AM_ART_NAVBCARTEDDE",	"Edytuj/Kasuj artykuł");
define("_AM_ART_NAVBCVALART",	"Zatwierdź artykuły");
// Info bar
define("_AM_ART_NAVINFMOD",		"moduł");
define("_AM_ART_NAVINFPREF",	"prefs");
define("_AM_ART_NAVINFHELP",	"pomoc");
define("_AM_ART_NAVINFABOUT",	"o");

// artadd.php


// arteddel.php
define("_AM_ART_LISTTITLE",		"Artykuły");
define("_AM_ART_EDITTITLE",		"Edytuj artykuł");
define("_AM_ART_FRMCAPNOARTS",	"Nie ma żadnych artykułów do edytowania.");

// catadd.php
define("_AM_ART_FRMCAPNOCATS",	"Nie ma żadnych kategorii do edytowania.");

// validate.php


// index.php
define("_AM_ART_TTLGENSTATS",		"Statystyki ogólne");
define("_AM_ART_TTLGENVLDT",		"Zatwierdzanie:");
define("_AM_ART_TTLGENVLDTDSC",		"artykuł(y/ów) oczekuje na <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/validate.php\">zatwierdzenie</a>.");
define("_AM_ART_TTLGENNUMARTS",		"Liczba artykułów:");
define("_AM_ART_TTLGENNUMARTSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artykuł(y/ów)</a>.");
define("_AM_ART_TTLGENNUMCATS",		"Liczba kategorii:");
define("_AM_ART_TTLGENNUMCATSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/cateddel.php\">kategorii</a>.");
define("_AM_ART_TTLGENNUMVIEWS",	"Liczba odsłon:");
define("_AM_ART_TTLGENNUMVIEWSDSC",	"odsłon <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artykułu</a>.");
define("_AM_ART_TTLGENNUMPUB",		"Opublikowane:");
define("_AM_ART_TTLGENNUMPUBDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artykułów</a> zostało obublikowanych.");
define("_AM_ART_TTLGENNUMHIDDN",	"Ukryte:");
define("_AM_ART_TTLGENNUMHIDDNDSC",	"artykułów jest ukrytych (wliczając niezatwierdzone <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">artykuły</a>).");


// about.php



?>
