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
 * 
 */

define("_MI_IPLOG_NAME", "User IP Logger");
define("_MI_IPLOG_DESC", "Modulo per la registrazione di indirizzi IP utente");

//Admin links
define("_MI_IPLOG_INDEX", "Index");
define("_MI_IPLOG_LOG", "IP Logs");
define("_MI_IPLOG_GRAPHS", "Grafici");
define('_MI_IPLOG_DASHBOARD', 'Dashboard');
define('_MI_IPLOG_ABOUT', 'Info sul modulo');

//Preferences
define('_MI_IPLOG_LOGDROPS', 'Log elimina se dopo');
define('_MI_IPLOG_LOGDROPS_DESC', 'Questo &#232; quanto il registro rimane sul tuo sito per dopo un record raggiunge questa età viene eliminato!');
define('_MI_IPLOG_LOGDROPS_24HOURS', '24 Ore');
define('_MI_IPLOG_LOGDROPS_1WEEK', '1 Settimana');
define('_MI_IPLOG_LOGDROPS_FORTNIGHT', 'Una quindicina di giorni');
define('_MI_IPLOG_LOGDROPS_1MONTH', '1 Mese');
define('_MI_IPLOG_LOGDROPS_2MONTHS', '2 Mesi');
define('_MI_IPLOG_LOGDROPS_3MONTHS', '3 Mesi');
define('_MI_IPLOG_LOGDROPS_4MONTHS', '4 Mesi');
define('_MI_IPLOG_LOGDROPS_5MONTHS', '5 Mesi');
define('_MI_IPLOG_LOGDROPS_6MONTHS', '6 Mesi');
define('_MI_IPLOG_LOGDROPS_12MONTHS', '1 Anno');
define('_MI_IPLOG_LOGDROPS_24MONTHS', '2 Anni');
define('_MI_IPLOG_LOGDROPS_36MONTHS', '3 Anni');

define('_MI_IPLOG_IPDB_APIKEY', 'IPDB API Key');
define('_MI_IPLOG_IPDB_APIKEY_DESC', 'Registrati a <a href="http://ipinfodb.com/register.php">IPDB Registration</a> per ricevere una chiave API');
define('_MI_IPLOG_USER_AGENT', 'cURL User-agent');
define('_MI_IPLOG_USER_AGENT_DESC', 'Questo &#232; l\'useragent utilizzato quando l\'arricciatura &#232; istanziare');
define('_MI_IPLOG_CURL_CONNECTION_TIMEOUT', 'cURL DNS Timeout di connessione');
define('_MI_IPLOG_CURL_CONNECTION_TIMEOUT_DESC', 'Questo &#232; il numero di secondi che un DNS deve rispondere con arricciatura');
define('_MI_IPLOG_CURL_TIMEOUT', 'cURL Timeout di comunicazione');
define('_MI_IPLOG_CURL_TIMEOUT_DESC', 'Questo &#232; il numero di secondi che dispone di un server di rispondere prima di cURL timesout');
define('_MI_IPLOG_CURL_SSL_VERIFY_PEER', 'cURL Convalida dei certificati SSL');
define('_MI_IPLOG_CURL_SSL_VERIFY_PEER_DESC', 'Quando questa opzione &#232; attivata deve avere un certificato SSL valido quando si collega con l\'arricciatura a https://');
define('_MI_IPLOG_CURL_VERBOSE', 'cURL &#232; dettagliato');
define('_MI_IPLOG_CURL_VERBOSE_DESC', 'Questa &#232; l\'opzione che &#232; possibile attivare per fare l\'arricciatura si comporti verbosely!');

// Version 1.02
define("_MI_IPLOG_GUEST", "Anonimo");
define('_MI_IPLOG_ANONYMOUS', 'Consenti all\'utente anonimo di essere registrati!');
define('_MI_IPLOG_ANONYMOUS_DESC', 'L\'attivazione di questa significa che gli utenti che non sono loggati vengono anche registrati!');
define('_MI_IPLOG_IPV4', 'IPv4');
define('_MI_IPLOG_IPV6', 'IPv6');

?>

