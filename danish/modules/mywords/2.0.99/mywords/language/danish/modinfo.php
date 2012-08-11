<?php
// $Id: modinfo.php 824 2011-12-08 23:50:30Z i.bitcero $
// --------------------------------------------------------------
// MyWords
// Blogging System
// Author: Eduardo Cortés <i.bitcero@gmail.com>
// Email: i.bitcero@gmail.com
// License: GPL 2.0
// Translated to Danish by culex (Culex@culex.dk) <http://www.xoopsnordic.org>
// --------------------------------------------------------------


if(function_exists("load_mod_locale")) load_mod_locale("mywords");

if (!function_exists("__")){
    function __($text, $d){
        return $text;
    }
}
define('_MI_MW_DESC', __ ('Modul til publicering og styring af nyheder og blogs','mywords'));

define('_MI_MW_AMENU1', __ ('Modul Status','mywords'));
define('_MI_MW_AMENU2', __ ('Kategorier','mywords'));
define('_MI_MW_AMENU3', __ ('Artikler','mywords'));
define('_MI_MW_AMENU4', __ ('Editors','mywords'));
define('_MI_MW_AMENU5', __ ('Bogmærker','mywords'));
                                      
// Menu vigtigste
define('_MI_MW_SEND', __ ('Send artikel','mywords'));

# Permalinks
define('_MI_MW_PERMAFORMAT', __ ('Link Format','mywords'));
define('_MI_MW_PERMA_DESC', __ ('Bestemmer den måde linkene i modulet vil blive vist og vil blive behandlet på.','mywords'));
define('_MI_MW_PERMA_DEF', __ ('Standard','mywords'));
define('_MI_MW_PERMA_DATE', __ ('Baseret på navn og dato','mywords'));
define('_MI_MW_PERMA_NUMS', __ ('numeriske','mywords'));

// Base sti for permalinks
define('_MI_MW_BASEPATH', __ ('Base Path','mywords'));
define('_MI_MW_BASEPATHD', __ ('Denne sti bruges, når link er blevet blev oprettet med format baseret på datoer eller tal.','mywords'));

// Widget tags
define('_MI_MW_WIDGETTAGS', __ ('Antal af tags på admin widget','mywords'));

// antal Indlæg pr side
define('_MI_MW_PPP', __ ('indlæg pr side','mywords'));
define('_MI_MW_CSS', __ ('Brug CSS-fil','mywords'));
define('_MI_MW_CSSFILE', __ ('CSS-fil der bruges','mywords'));
define('_MI_MW_SHOWNAV', __ ('Vis navigationspanel mellem indlæg','mywords'));

// Blog navn
define('_MI_MW_BLOGNAME', __ ('Blog navn (afsnit navn)','mywords'));
define('_MI_MW_BLOGNAMED', __ ('Dette navn vil blive brugt i trackbacks.','mywords'));

# Billeder for blokkene
define('_MI_MW_BIMGSIZE', __ ('Billedstørrelse for blokkene','mywords'));
define('_MI_MW_BIMGSIZE_DESC', __ ('det angivne billede i artiklen, vil blive ændret med dette størrelssformat:. "bredde | højde"','mywords'));
define('_MI_MW_DEFIMG', __ ('Standardbillede til artiklerne i blokkene','mywords'));
define('_MI_MW_DEFIMG_DESC', __ ('Når "grafisk" mode er muligt i "Seneste artikler" blokken vil dette billede bruges, når der ikke er specificeret et til artiklen','mywords'));

define('_MI_MW_FILESIZE', __ ('Maksimal filstørrelse','mywords'));

define('_MI_MW_SHOWBOOKMARKS', __ ('Vis sociale bogmærker','mywords'));

// Blogs

define('_MI_MW_BKCATEGOS', __ ('Kategorier','mywords'));
define('_MI_MW_BKRECENT', __ ('Seneste artikler','mywords'));
define('_MI_MW_BKCOMMENTS', __ ('Seneste kommentarer','mywords'));

define('_MI_MW_RSSNAME', __ ('Posts Syndication','mywords'));
define('_MI_MW_RSSNAMECAT', __ ('artikel Syndication i %s ',' mywords '));
define('_MI_MW_RSSDESC', __ ('Syndicationbeskrivelse','mywords'));
define('_MI_MW_RSSALL', __ ('Alle nyeste indlæg','mywords'));
define('_MI_MW_RSSALLDESC', __ ('Vis alle nyere indlæg','mywords'));

// Undersider
define('_MI_MW_SPINDEX', __ ('Home Page','mywords'));
define('_MI_MW_SPPOST', __ ('Send','mywords'));
define('_MI_MW_SPCATEGO', __ ('Kategori','mywords'));
define('_MI_MW_SPAUTHOR', __ ('Forfatter','mywords'));
define('_MI_MW_SPSUBMIT', __ ('Send artikel','mywords'));