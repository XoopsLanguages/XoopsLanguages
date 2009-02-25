<?php
// $Id: admin.php,v 1.23 2005/08/30 10:02:29 zoullou Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

define("_AM_EXTCAL_SEND_NOTIFICATION","Šalji izvješæe");
define("_AM_EXTCAL_FROM_NAME","Od imena");
define("_AM_EXTCAL_FROM_EMAIL","Sa emailom (samo email)");
define("_AM_EXTCAL_SUBJECT","Tema");
define("_AM_EXTCAL_BODY","Tijelo");
define("_AM_EXTCAL_SEND_TO","Šalji");
define("_AM_EXTCAL_SEND_NOTIFICATION_SUBJECT","{EV_TITLE} je došlo od {X_SITENAME}");
define("_AM_EXTCAL_SEND_NOTIFICATION_BODY","Pozdrav {X_UNAME},\n\nVi ste registrirani na {EV_TITLE} i ovaj dogaðaj je slijedeæi. Detalje možete pogledati: {EV_LINK}.\n\nSrdaèni pozdrav\n{X_ADMINMAIL}\n{X_SITEURL}");
define("_AM_EXTCAL_EMAIL","Email");
define("_AM_EXTCAL_PM","Privatne poruke");
define("_AM_EXTCAL_USEFUL_TAGS","Pogodni tagovi :");
define("_AM_EXTCAL_MAILTAGS1","{X_UNAME} æe ispisati korisnièko ime");
define("_AM_EXTCAL_MAILTAGS2","{X_SITENAME} æe ispisati ime sajta");
define("_AM_EXTCAL_MAILTAGS3","{X_SITEURL} æe ispisati URL");
define("_AM_EXTCAL_MAILTAGS4","{X_ADMINMAIL} æe ispisati adminov email");
define("_AM_EXTCAL_MAILTAGS5","{EV_CAT} æe ispisati ime kategorije");
define("_AM_EXTCAL_MAILTAGS6","{EV_TITLE} æe ispisati naslov dogaðaja");
define("_AM_EXTCAL_MAILTAGS7","{EV_START} æe ispisati datum poèetka dogaðaja");
define("_AM_EXTCAL_MAILTAGS8","{EV_END} æe ispisati datum završetka dogaðaja");
define("_AM_EXTCAL_MAILTAGS9","{EV_LINK} æe ispisati link na dogaðaj");
define("_AM_EXTCAL_CATEGORY","Kategorija");
define("_AM_EXTCAL_TITLE","Naslov");
define("_AM_EXTCAL_START_DATE","Datum poèetka");
define("_AM_EXTCAL_ACTION","Akcija");
define("_AM_EXTCAL_NO_UPCOMING_EVENT","Ne obnavljati dogaðaj");
define("_AM_EXTCAL_UPCOMING_EVENT","Obnavljanje dogaðaja");
define("_AM_EXTCAL_INFORMATION","Informacije");
define("_AM_EXTCAL_INFO_NOTIF","<b>Šalji izvješæe</b> korisniku koji je registriran za ovaj dogaðaj.");
define("_AM_EXTCAL_SUBMITTED_EVENT","Prijavi dogaðaj");
define("_AM_EXTCAL_INFO_APPROVE","<b>Odobri</b> novi dogaðaj bez èitanja informacija.");
define("_AM_EXTCAL_INFO_EDIT","<b>Prikaži</b> dogaðaj.");
define("_AM_EXTCAL_INFO_EDIT_NEW_EVENT","<b>Prikaži</b> novi dogaðaj prije odobrenja.");
define("_AM_EXTCAL_INFO_DELETE","<b>Izbriši</b> dogaðaj.");
define("_AM_EXTCAL_INFO_DELETE_NEW_EVENT","<b>Izbriši</b> novi dogaðaj.");
define("_AM_EXTCAL_NO_PENDING_EVENT","Nema neriješenih dogaðaja");
define("_AM_EXTCAL_MODULE_ADMIN_SUMMARY","Sažetak administratorskog modula");
define("_AM_EXTCAL_EVENT","Dogaðaj");
define("_AM_EXTCAL_PENDING","Neriješen");
define("_AM_EXTCAL_APPROVED","Odobren");
define("_AM_EXTCAL_APPROVED_EVENT","Odobren dogaðaj");
define("_AM_EXTCAL_EDIT_OR_DELETE_CATEGORY","Prikaži ili izbriši kategoriju");
define("_AM_EXTCAL_ADD_CATEGORY","Dodaj kategoriju");
define("_AM_EXTCAL_EDIT_CATEGORY","Prikaži kategoriju");
define("_AM_EXTCAL_NAME","Ime");
define("_AM_EXTCAL_DESCRIPTION","Opis");
define("_AM_EXTCAL_COLOR","Boja");
define("_AM_EXTCAL_VIEW_PERMISSION","Pregled dozvola");
define("_AM_EXTCAL_SUBMIT_PERMISSION","Prijavi dozvole");
define("_AM_EXTCAL_AUTOAPPROVE_PERMISSION","Automatsko odobravanje dozvola");
define("_AM_EXTCAL_VIEW_PERMISSION_DESC","Oznaèi kategorije za svaku pojedinu grupu koju je dopušteno vidjeti");
define("_AM_EXTCAL_SUBMIT_PERMISSION_DESC","Oznaèi kategorije za svaku pojedinu grupu koja ima dopuštenje za podnošenje");
define("_AM_EXTCAL_AUTOAPPROVE_PERMISSION_DESC","Oznaèi kategorije za svaku pojedinu grupu koja nema dozvolu podnošenja dogaðaja");
define("_AM_EXTCAL_PERM_NO_CATEGORY","Vi nemate kategoriju. Dodajte kategoriju grupi dozvola.");
define("_AM_EXTCAL_PRUNING_EVENT","Proèisti dogaðaj");
define("_AM_EXTCAL_EVENT_FINISH_BEFORE","Dogaðaj završen prije :");
define("_AM_EXTCAL_ALL_CATEGORY","Sve kategorije");
define("_AM_EXTCAL_INFO_SEND_NOTIF","Ti æeš poslati obavijest svim korisnicima koji su registrirani za ovaj dogaðaj. Možeš birati izmeðu slanja emaila, samo PP ili oboje.<br />Možeš prikazati poruku ispod. Uporabi tag za adaptiranje obavijesti i korisnika koji primaju poruku.");
define("_AM_EXTCAL_INFO_PRUNE","Proèišæeni dogaðaj bit æe <b>definitivno izbrisan</b>.");
define("_AM_EXTCAL_CONFIRM_PRUNE","Proèišæeni dogaðaj bit æe definitivno izbrisan sa svim komentarima i obavijestima.");
define("_AM_EXTCAL_CONFIRM_DELETE_CAT","Zaista želite izbrisati ovu kategoriju ?<br />Svi dogaðaji, komentari i obavijesti vezane za dogaðaj bit æe izbrisani.");
define("_AM_EXTCAL_CONFIRM_DELETE_EVENT","Zaista želite izbrisati dogaðaj ?<br />Svi komentari i obavijesti vezane za dogaðaj bit æe izbrisani.");
define("_AM_EXTCAL_EVENT_CREATED","Dogaðaj je kreiran");
define("_AM_EXTCAL_EVENT_APPROVED","Dogaðaj je odobren");
define("_AM_EXTCAL_EVENT_EDITED","Dogaðaj je prikazan");
define("_AM_EXTCAL_EVENT_DELETED","Dogaðaj je izbrisan");
define("_AM_EXTCAL_CAT_CREATED","Kategorija je kreirana");
define("_AM_EXTCAL_CAT_EDITED","Kategorija je prikazana");
define("_AM_EXTCAL_CAT_DELETED","Kategorija je izbrisana");

?>