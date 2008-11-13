<?php
/************************************************************************/
/* Donations - Paypal financial management module for Xoops 2           */
/* Copyright (c) 2004 by Xoops2 Donations Module Dev Team			    */
/* http://dev.xoops.org/modules/xfmod/project/?group_id=1060			*/
/* $Id: main.php,v 1.4 2004/10/15 17:58:57 blackdeath_csmc Exp $      */
/************************************************************************/
/*                                                                      */
/* Based on NukeTreasury for PHP-Nuke - by Dave Lawrence AKA Thrash     */
/* NukeTreasury - Financial management for PHP-Nuke                     */
/* Copyright (c) 2004 by Dave Lawrence AKA Thrash                       */
/*                       thrash@fragnastika.com                         */
/*                       thrashn8r@hotmail.com                          */
/*                                                                      */
/************************************************************************/
/*                                                                      */
/* This program is free software; you can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/*                                                                      */
/* This program is distributed in the hope that it will be useful, but  */
/* WITHOUT ANY WARRANTY; without even the implied warranty of           */
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU     */
/* General Public License for more details.                             */
/*                                                                      */
/* You should have received a copy of the GNU General Public License    */
/* along with this program; if not, write to the Free Software          */
/* Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307  */
/* USA                                                                  */
/************************************************************************/

### CURRENCY SYMBOL DEFINITIONS ###
define('_DM_CURR_EUR','&#8364;'); //euro
define('_DM_CURR_USD','&#36;'); //us dollar
define('_DM_CURR_GBP','&#163;'); //britain pound
define('_DM_CURR_JPY','&#165;'); //japanese yen
define('_DM_CURR_CAD','C&#36;'); //canadian dollar

### IPN DEBUG DEFINITIONS ###
define('_DM_DEBUGACTIVE','Debug modus je aktiviran');
define('_DM_DEBUGHEADER','<br>Xoops Donacijski Modul<br><br>PayPal Instant Payment Notification script<br><br>Vidite ispod status:<hr>');
define('_DM_OPENCONN','Otvorite konekciju i potvrdite dati formular kod PayPal...');
define('_DM_CONNFAIL','Nije uspjela konekcija sa PayPal');
define('_DM_RCVINVALID','Neispravan eMail: %s , prekinuta veza...');
define('_DM_VERIFIED','PayPal Provjera');
define('_DM_REFUND','Transakcija je potvr&#273;ena');
define('_DM_TRANSMISSING','IPN Error: Primljena potvrda javlja da nedostaje kompletna Transakcija');
define('_DM_MULTITXNS','IPN Error: Received refund but multiple prior txn_id\'s encountered, aborting');
define('_DM_DUPLICATETXN','Valid IPN, but DUPLICATE txn_id! aborting...');
define('_DM_NOTINTERESTED','Valid IPN, but not interested in this transaction');
define('_DM_INVALIDIPN','Invalid IPN transaction, this is an abnormal condition');
define('_DM_DEBUGPASS','PASSED!');
define('_DM_DEBUGFAIL','FAILED!');
define('_DM_RCVEMAIL','PayPal Receiver Email: %s');
define('_DM_LOGBEGIN','Logging events');
define('_DM_IFNOERROR','If you don\'t see any error messages, you should be good to go!');

### INDEX.PHP PAGE DEFINITIONS ###
define('_DM_TITLE','&#381;elite li nam pomo&#263;i da odr&#382;imo na&scaron;u web stranicu?<br/> - Uplatite malu simboli&#269;nu Donaciju!');
define('_DM_MAKEADON','Uplati Donaciju');
define('_DM_SELECTAMT','Molim vas izaberite visinu Donacije');
define('_DM_SHOWNAME','Treba li prikazati va&scaron;e ime u dnu u Listi Donatora?');
define('_DM_DONTHISMONTH','Generalni Donatori ovog mjeseca');
define('_DM_DON_NAME','Ime');
define('_DM_DON_AMT','Visina donacije');
define('_DM_DON_DATE','Datum');
define('_DM_ANONYMOUS','Anonymni donatori');
define('_DM_ANONYMOUS_SHORT','Anonymni');
define('_DM_DON_OTHER','Druga');
define('_DM_SUBMIT_BUTTON','Po&scaron;alji donaciju >>');

?>
