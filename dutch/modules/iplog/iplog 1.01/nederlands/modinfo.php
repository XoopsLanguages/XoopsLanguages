<?php
/*
 * Logs Guest and users IP Addresses for a period of time and provides
 * basic statistic of them in XOOPS Copyright (C) 2012 Simon Roberts 
 * Contact: wishcraft - simon@chronolabs.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * See /docs/license.pdf for full license.
 * 
 * Shouts:- 	Mamba (www.xoops.org), flipse (www.nlxoops.nl)
 * 				Many thanks for your additional work with version 1.01
 * 
 * Version:		1.01 Final
 * Published:	Chronolabs
 * Download:	http://code.google.com/p/chronolabs
 * This File:	modinfo.php
 * Description:	Module Global Language Defines & constants
 * Date:		28/07/2015 5:45PM AEST
 * License:		GNU3
 * Translation: NLXOOPS, Flipse
 */

define("_MI_IPLOG_NAME", "User IP Logger");
define("_MI_IPLOG_DESC", "Module voor het loggen van IP adressen van gebruikers");

//Admin links
define("_MI_IPLOG_INDEX", "Index");
define("_MI_IPLOG_LOG", "IP Log");
define("_MI_IPLOG_GRAPHS", "Grafieken");
define('_MI_IPLOG_DASHBOARD', 'Overzicht');
define('_MI_IPLOG_ABOUT', 'Over de Module');

//Preferences
define('_MI_IPLOG_LOGDROPS', 'Log wordt opgeschoond na');
define('_MI_IPLOG_LOGDROPS_DESC', 'Hoe lang moet de logfile worden bewaard? Gegevens die de gekozen leeftijd bereiken worden automatisch verwijderd!');
define('_MI_IPLOG_LOGDROPS_24HOURS', '24 Uur');
define('_MI_IPLOG_LOGDROPS_1WEEK', '1 Week');
define('_MI_IPLOG_LOGDROPS_FORTNIGHT', '2 Weken');
define('_MI_IPLOG_LOGDROPS_1MONTH', '1 Maand');
define('_MI_IPLOG_LOGDROPS_2MONTHS', '2 Maanden');
define('_MI_IPLOG_LOGDROPS_3MONTHS', '3 Maanden');
define('_MI_IPLOG_LOGDROPS_4MONTHS', '4 Maanden');
define('_MI_IPLOG_LOGDROPS_5MONTHS', '5 Maanden');
define('_MI_IPLOG_LOGDROPS_6MONTHS', '6 Maanden');
define('_MI_IPLOG_LOGDROPS_12MONTHS', '1 Jaar');
define('_MI_IPLOG_LOGDROPS_24MONTHS', '2 Jaar');
define('_MI_IPLOG_LOGDROPS_36MONTHS', '3 Jaar');

define('_MI_IPLOG_IPDB_APIKEY', 'IPDB API Key');
define('_MI_IPLOG_IPDB_APIKEY_DESC', 'Registreer uzelf bij <a href="http://ipinfodb.com/register.php">IPDB</a> voor een API Key (sleutel). Zonder ingevoerde API Key worden de statistieken niet correct weergegeven!');
define('_MI_IPLOG_USER_AGENT', 'cURL User-agent');
define('_MI_IPLOG_USER_AGENT_DESC', 'Dit is hoe uw site zich bij het starten van de cURL sessie identificeert. cURL is het protocol dat wordt gebruikt om gegevens uit te wisselen met de IPDB database. De standaard instelling kunt u doorgaans zo laten staan.');
define('_MI_IPLOG_CURL_CONNECTION_TIMEOUT', 'cURL DNS Connectie Time-out');
define('_MI_IPLOG_CURL_CONNECTION_TIMEOUT_DESC', 'Maximaal aantal seconden waarbinnen de DNS server gegevens moet uitwisselen met het cURL protocol');
define('_MI_IPLOG_CURL_TIMEOUT', 'cURL Communicatie Time-out');
define('_MI_IPLOG_CURL_TIMEOUT_DESC', 'Het aantal seconden waarbinnen het cURL protocol moet reageren voor een timeout plaatsvindt');
define('_MI_IPLOG_CURL_SSL_VERIFY_PEER', 'cURL Valideert SSL Certificaten');
define('_MI_IPLOG_CURL_SSL_VERIFY_PEER_DESC', 'Voor deze instelling heeft u een geldig SSL certificaat nodig, zodat u cURL via https:// kunt gebruiken');
define('_MI_IPLOG_CURL_VERBOSE', 'Gebruik cURL in Verbose modus');
define('_MI_IPLOG_CURL_VERBOSE_DESC', 'Via deze optie werkt cURL in verbose modus!');

// Version 1.02
define("_MI_IPLOG_GUEST", "Gast");
define('_MI_IPLOG_ANONYMOUS', 'Anonieme gebruikers tonen in de logfile?');
define('_MI_IPLOG_ANONYMOUS_DESC', 'Staat deze optie aan dan worden ook niet ingelogde bezoekers in de logfile getoond');
define('_MI_IPLOG_IPV4', 'IPv4');
define('_MI_IPLOG_IPV6', 'IPv6');

?>

