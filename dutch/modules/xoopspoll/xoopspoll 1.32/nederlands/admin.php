<?php
// $Id: admin.php,v 1.8 2004/12/26 19:12:13 onokazu Exp $
//%%%%%%	Admin Module Name  Polls 	%%%%%

define("_AM_DBUPDATED","Database Succesvol bijgewerkt!");
define("_AM_POLLCONF","Peilingen Configuratie");
define("_AM_POLLSLIST", "Peilingen Lijst");
define("_AM_AUTHOR", "Maker van deze peiling");
define("_AM_DISPLAYBLOCK", "Toon in blok?");
define("_AM_POLLQUESTION", "Peiling vraag");
define("_AM_VOTERS", "Totaal stemmers");
define("_AM_VOTES", "Totaal stemmen");
define("_AM_EXPIRATION", "Verstrijkt op");
define("_AM_EXPIRED", "Verstreken");
define("_AM_VIEWLOG","Bekijk log");
define("_AM_CREATNEWPOLL", "Maak nieuwe peiling");
define("_AM_POLLDESC", "Peiling beschrijving");
define("_AM_DISPLAYORDER", "Toon volgorde");
define("_AM_ALLOWMULTI", "Meerdere antwoorden toestaan?");
define("_AM_ALLOWANONYMOUS", "Anoniem stemmen toestaan?");
define("_AM_NOTIFY", "Verwittig de maker van de peiling bij verstrijken?");
define("_AM_POLLOPTIONS", "Optie's");
define("_AM_EDITPOLL", "Bewerk peiling");
define("_AM_FORMAT", "Formaat: yyyy-mm-dd hh:mm:ss");
define("_AM_CURRENTTIME", "Huidige tijd is %s");
define("_AM_EXPIREDAT", "Verlopen  op %s");
define("_AM_RESTART", "Herstart peiling");
define("_AM_ADDMORE", "Voeg keuzeopties toe");
define("_AM_RUSUREDEL", "Weet u zeker dat u deze peiling en alle bijbehorende commentaren wilt verwijderen?");
define("_AM_RESTARTPOLL", "Herstart peiling");
define("_AM_RESET", "Verwijder alle resultaten van deze peiling?");
define("_AM_ADDPOLL","Voeg Peiling toe");
define("_AM_LOGSLIST", "Log Lijst");
define("_AM_RETURNLIST", "Terug naar peilingenoverzicht");
define("_AM_LOGID", "Log ID");
define("_AM_OPTIONID", "Gekozen optie");
define("_AM_IP", "IP Adres");
define("_AM_VOTER", "stemmer");
define("_AM_VOTETIME", "Stemtijd");

//1.32

// About.php
define("_AM_XOOPSPOLL_ABOUT_RELEASEDATE",        "Vrijgegeven: ");
define("_AM_XOOPSPOLL_ABOUT_UPDATEDATE",               "Bijgewerkt: ");
define("_AM_XOOPSPOLL_ABOUT_AUTHOR",                   "Auteur: ");
define("_AM_XOOPSPOLL_ABOUT_CREDITS",                  "Credits: ");
define("_AM_XOOPSPOLL_ABOUT_LICENSE",                  "Licentie: ");
define("_AM_XOOPSPOLL_ABOUT_MODULE_STATUS",            "Status: ");
define("_AM_XOOPSPOLL_ABOUT_WEBSITE",                  "Website: ");
define("_AM_XOOPSPOLL_ABOUT_AUTHOR_NAME",              "Naam auteur: ");
define("_AM_XOOPSPOLL_ABOUT_CHANGELOG",                "Wijzigingen");
define("_AM_XOOPSPOLL_ABOUT_MODULE_INFO",              "Module Info");
define("_AM_XOOPSPOLL_ABOUT_AUTHOR_INFO",              "Auteur Info");
define("_AM_XOOPSPOLL_ABOUT_DESCRIPTION",          "Omschrijving: ");
define("_AM_XOOPSPOLL_ADMIN_ABOUT",          "Over");

// text in admin footer
define("_AM_XOOPSPOLL_ADMIN_FOOTER",                 "<div class='right smallsmall italic pad5'><b>" . $xoopsModule->getVar("name") . "</b> is maintained by the <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");

// Configuration
define("_AM_XOOPSPOLL_CONFIG_CHECK","Configuratie check");
define("_AM_XOOPSPOLL_CONFIG_PHP","Minimum PHP benodigd: %s (huidige versie is %s)");
define("_AM_XOOPSPOLL_CONFIG_XOOPS","Minimum XOOPS benodigd:  %s (huidige versie is %s)");

//xoopspoll.php

define("_AM_ACTIONS","Acties");
define("_AM_POLLVOTERS","Stemmers neem deel aan deze peiling.");
?>