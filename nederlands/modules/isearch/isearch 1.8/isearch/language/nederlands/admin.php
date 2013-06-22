<?php
/**
 * ****************************************************************************
 * isearch - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         isearch
 * @author 			Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

define("_AM_ISEARCH_DBUPDATED","De Database is succesvol bijgewerkt.");
define("_AM_ISEARCH_GENERALSET","Module opties");
define("_AM_ISEARCH_GOTOMOD","Ga naar de module");
define("_AM_ISEARCH_MODULEADMIN","Module admininstratie");
define("_AM_ISEARCH_STATS","Zoek Statistieken (%d zoekwoorden opgeslagen)");

define("_AM_ISEARCH_ID","ID");
define("_AM_ISEARCH_KEYWORD","Gezocht woord");
define("_AM_ISEARCH_KEYWORDS","Gezochte woorden per dag");
define("_AM_ISEARCH_USER","Gebruiker");
define("_AM_ISEARCH_DATE","Datum");
define("_AM_ISEARCH_MOST_SEARCH","Meest gezochte woorden");
define("_AM_ISEARCH_HITS","Oproepen");
define("_AM_ISEARCH_BIGGEST_USERS","Grootverbruiker van de zoekfunctie");
define("_AM_ISEARCH_DAY_STATS","Dagelijkse statistieken");
define("_AM_ISEARCH_USE","Oproepen");

define("_AM_ISEARCH_PRUNE","Prune");
define("_AM_ISEARCH_PRUNE_DATE","Prune zoekwoorden vóór: ");
define("_AM_ISEARCH_PRUNE_KEYONLY","of verwijder alleen dit woord: ");
define("_AM_ISEARCH_PRUNE_DESC","Indien u geen woord invoert, zal het script per datum prunen");
define("_AM_ISEARCH_PRUNE_CONFIRM","Bevestigt u de verwijdering van %u elementen ?");
define("_AM_ISEARCH_NOTHING_PRUNE","Niets te verwijderen");
define("_AM_ISEARCH_EXPORT","Exporteren");
define('_AM_ISEARCH_EXPORT_BETWEEN','Exporteer zoekopdrachten tussen ');
define('_AM_ISEARCH_EXPORT_AND'," en ");
define("_AM_ISEARCH_DATE_FORMAT","Datum weergave (in PHP formaat)");
define("_AM_ISEARCH_DELIMITER","Fields delimiter");
define("_AM_ISEARCH_EXPORT_ERROR","Error, het is niet mogelijk om het exportbestand %s  te creëren");
define('_AM_ISEARCH_EXPORT_READY',"Uw gexporteerde bestand is beschikbaar.<br /><a href='%s'>Klik Hier </a> om het bestand te downloaden.<br />Vergeet niet om het bestand te <a href='%s'>verwijderen</a> nadat u klaar bent.");
define('_AM_ISEARCH_DELETED_OK',"Het bestand is verwijderd");
define('_AM_ISEARCH_DELETED_PB',"Error, het is niet mogelijk het bestand te verwijderen.");
define("_AM_ISEARCH_NOTHING_TO_EXPORT","Er valt niets te exporteren!");
define("_AM_ISEARCH_DELETE","Verwijder");
define("_AM_ISEARCH_BLACKLIST","Zwarte Lijst/Blacklist");
define("_AM_ISEARCH_ACTION","Actie");
define("_AM_ISEARCH_AREYOUSURE","Weet u het zeker?");
define('_AM_ISEARCH_BLACKLIST_DESC',"De woorden in deze lijst zullen niet worden opgeslagen van uitgevoerde zoekopdrachten");
define('_AM_ISEARCH_BLACKLIST_ADD',"Toevoegen");
define('_AM_ISEARCH_BLACKLIST_ADD_DSC',"Voeg woorden toe in de lijst<br />(een woord per regel)");
define('_AM_ISEARCH_IP',"IP");
define('_AM_ISEARCH_FILTER_BY',"Filter by");
?>