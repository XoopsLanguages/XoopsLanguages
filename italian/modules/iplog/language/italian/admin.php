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
 * This File:	admin.php		
 * Description:	Administration Admin English Langauge Constants
 * Date:		28/07/2015 5:45PM AEST
 * License:		GNU3
 * 
 */

define("_AM_IPLOG_SECONDS", "Secondi");
define("_AM_IPLOG_UNKNOWN", "Unknown");

define("_AM_IPLOG_TH_IP_ID", "IP ID");
define("_AM_IPLOG_TH_UNAME", "Username");
define("_AM_IPLOG_TH_IP", "IP");
define("_AM_IPLOG_TH_COUNTRY_CODE", "Codice paese");
define("_AM_IPLOG_TH_NAME", "IP paese");
define("_AM_IPLOG_TH_REGION", "IP Regione");
define("_AM_IPLOG_TH_CONTINENT", "IP Continente");
define("_AM_IPLOG_TH_NETWORK_ADDY", "NetBIOS");
define("_AM_IPLOG_TH_PROXY_IP", "Proxy IP");
define("_AM_IPLOG_TH_AGENT", "User Agent");
define("_AM_IPLOG_TH_START", "Inizio Sessione");
define("_AM_IPLOG_TH_END", "Fine Sessione");
define("_AM_IPLOG_TH_ONLINE", "Tempo Online");
define("_AM_IPLOG_TH_ACTIONS", "Azioni");

define("_AM_IPLOG_LOG_H1", "Registro IP utente corrente");
define("_AM_IPLOG_LOG_P", "Questo &#232; il log corrente degli utenti registrati per indirizzi IP");

//Dashboard
define('_AM_IPLOG_ADMIN_COUNTS_BY_COUNTRY', 'Totale sessioni di utenti provenienti da paesi');
define('_AM_IPLOG_ADMIN_COUNTS_BY_REGION', 'Totale utenti sessioni da regione');
define('_AM_IPLOG_ADMIN_COUNTS_BY_CONTINENT', 'Totale utenti sessioni dal continente');
define('_AM_IPLOG_ADMIN_SUM_BY_COUNTRY', 'Numero di minuti sul paese');
define('_AM_IPLOG_ADMIN_SUM_BY_REGION', 'Numero di minuti sulla regione');
define('_AM_IPLOG_ADMIN_SUM_BY_CONTINENT', 'Numero di minuti sul continente');
define('_AM_IPLOG_ADMIN_AVG_BY_COUNTRY', 'Adverage numero di minuti sul paese');
define('_AM_IPLOG_ADMIN_AVG_BY_REGION', 'Adverage numero di minuti sulla regione');
define('_AM_IPLOG_ADMIN_AVG_BY_CONTINENT', 'Adverage numero di minuti sul continente');

//About
define('_AM_IPLOG_ABOUT_MAKEDONATE', 'Fai la donazione a Chronolabs co-op');

define('_AM_MSG_LOG_DELETE', 'Sei sicuro di voler eliminare - %s (%s) - ID %s?');
define('_AM_MSG_LOG_DELETED', 'IP Voce eliminato!');
?>
