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
define('_DM_CURR_DKR','DKR;');//Danske kroner

### IPN DEBUG DEFINITIONS ###
define('_DM_DEBUGACTIVE','Debug mode aktiveret');
define('_DM_DEBUGHEADER','<br>Xoops Donations Module<br><br>PayPal Instant Payment Notification script<br><br>Se herunder for status:<hr>');
define('_DM_OPENCONN','Åbner forbindelse og efterprøver forespørgsel hos PayPal...');
define('_DM_CONNFAIL','forbindelse til PayPal MISLYKKEDES');
define('_DM_RCVINVALID','Ugyldig modtager e-mail: %s , afbryder...');
define('_DM_VERIFIED','PayPal bekræftet');
define('_DM_REFUND','Transaktionen er en tilbagebetaling');
define('_DM_TRANSMISSING','IPN FEJL: Modtaget betaling, men mangler forudgående transaktion ');
define('_DM_MULTITXNS','IPN FEJL: Modtaget betaling, men flere forudgående txn_id\'s fundet, afbryder');
define('_DM_DUPLICATETXN','Ugyldig IPN, men GENTAGENDE txn_id! afbryder...');
define('_DM_NOTINTERESTED','Gyldig IPN, men er ikke interesseret i denne transaktion');
define('_DM_INVALIDIPN','Ugyldig IPN transaktion, dette er en unormalt');
define('_DM_DEBUGPASS','UDFØRT!');
define('_DM_DEBUGFAIL','FEJL!');
define('_DM_RCVEMAIL','PayPal modtager e-mail: %s');
define('_DM_LOGBEGIN','Log begivenheder');
define('_DM_IFNOERROR','Hvis du ikke ser nogle fejl-meddelelser, skulle du være klar!');

### INDEX.PHP PAGE DEFINITIONS ###
define('_DM_TITLE','Vi behøver din hjælp - Giv en Donation!');
define('_DM_MAKEADON','Giv en Donation');
define('_DM_SELECTAMT','Vælg venligst et beløb at donere');
define('_DM_SHOWNAME','Skal dit navn vises på listen over donorer?');
define('_DM_DONTHISMONTH','Denne måneds gavmilde givere....');
define('_DM_DON_NAME','Navn');
define('_DM_DON_AMT','Beløb');
define('_DM_DON_DATE','Dato');
define('_DM_ANONYMOUS','Anonym Donor');
define('_DM_ANONYMOUS_SHORT','Anonym');
define('_DM_DON_OTHER','Andet');
define('_DM_SUBMIT_BUTTON','Send Donation >>');

?>
