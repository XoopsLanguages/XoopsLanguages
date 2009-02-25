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

define("_AM_EXTCAL_SEND_NOTIFICATION","�alji izvje��e");
define("_AM_EXTCAL_FROM_NAME","Od imena");
define("_AM_EXTCAL_FROM_EMAIL","Sa emailom (samo email)");
define("_AM_EXTCAL_SUBJECT","Tema");
define("_AM_EXTCAL_BODY","Tijelo");
define("_AM_EXTCAL_SEND_TO","�alji");
define("_AM_EXTCAL_SEND_NOTIFICATION_SUBJECT","{EV_TITLE} je do�lo od {X_SITENAME}");
define("_AM_EXTCAL_SEND_NOTIFICATION_BODY","Pozdrav {X_UNAME},\n\nVi ste registrirani na {EV_TITLE} i ovaj doga�aj je slijede�i. Detalje mo�ete pogledati: {EV_LINK}.\n\nSrda�ni pozdrav\n{X_ADMINMAIL}\n{X_SITEURL}");
define("_AM_EXTCAL_EMAIL","Email");
define("_AM_EXTCAL_PM","Privatne poruke");
define("_AM_EXTCAL_USEFUL_TAGS","Pogodni tagovi :");
define("_AM_EXTCAL_MAILTAGS1","{X_UNAME} �e ispisati korisni�ko ime");
define("_AM_EXTCAL_MAILTAGS2","{X_SITENAME} �e ispisati ime sajta");
define("_AM_EXTCAL_MAILTAGS3","{X_SITEURL} �e ispisati URL");
define("_AM_EXTCAL_MAILTAGS4","{X_ADMINMAIL} �e ispisati adminov email");
define("_AM_EXTCAL_MAILTAGS5","{EV_CAT} �e ispisati ime kategorije");
define("_AM_EXTCAL_MAILTAGS6","{EV_TITLE} �e ispisati naslov doga�aja");
define("_AM_EXTCAL_MAILTAGS7","{EV_START} �e ispisati datum po�etka doga�aja");
define("_AM_EXTCAL_MAILTAGS8","{EV_END} �e ispisati datum zavr�etka doga�aja");
define("_AM_EXTCAL_MAILTAGS9","{EV_LINK} �e ispisati link na doga�aj");
define("_AM_EXTCAL_CATEGORY","Kategorija");
define("_AM_EXTCAL_TITLE","Naslov");
define("_AM_EXTCAL_START_DATE","Datum po�etka");
define("_AM_EXTCAL_ACTION","Akcija");
define("_AM_EXTCAL_NO_UPCOMING_EVENT","Ne obnavljati doga�aj");
define("_AM_EXTCAL_UPCOMING_EVENT","Obnavljanje doga�aja");
define("_AM_EXTCAL_INFORMATION","Informacije");
define("_AM_EXTCAL_INFO_NOTIF","<b>�alji izvje��e</b> korisniku koji je registriran za ovaj doga�aj.");
define("_AM_EXTCAL_SUBMITTED_EVENT","Prijavi doga�aj");
define("_AM_EXTCAL_INFO_APPROVE","<b>Odobri</b> novi doga�aj bez �itanja informacija.");
define("_AM_EXTCAL_INFO_EDIT","<b>Prika�i</b> doga�aj.");
define("_AM_EXTCAL_INFO_EDIT_NEW_EVENT","<b>Prika�i</b> novi doga�aj prije odobrenja.");
define("_AM_EXTCAL_INFO_DELETE","<b>Izbri�i</b> doga�aj.");
define("_AM_EXTCAL_INFO_DELETE_NEW_EVENT","<b>Izbri�i</b> novi doga�aj.");
define("_AM_EXTCAL_NO_PENDING_EVENT","Nema nerije�enih doga�aja");
define("_AM_EXTCAL_MODULE_ADMIN_SUMMARY","Sa�etak administratorskog modula");
define("_AM_EXTCAL_EVENT","Doga�aj");
define("_AM_EXTCAL_PENDING","Nerije�en");
define("_AM_EXTCAL_APPROVED","Odobren");
define("_AM_EXTCAL_APPROVED_EVENT","Odobren doga�aj");
define("_AM_EXTCAL_EDIT_OR_DELETE_CATEGORY","Prika�i ili izbri�i kategoriju");
define("_AM_EXTCAL_ADD_CATEGORY","Dodaj kategoriju");
define("_AM_EXTCAL_EDIT_CATEGORY","Prika�i kategoriju");
define("_AM_EXTCAL_NAME","Ime");
define("_AM_EXTCAL_DESCRIPTION","Opis");
define("_AM_EXTCAL_COLOR","Boja");
define("_AM_EXTCAL_VIEW_PERMISSION","Pregled dozvola");
define("_AM_EXTCAL_SUBMIT_PERMISSION","Prijavi dozvole");
define("_AM_EXTCAL_AUTOAPPROVE_PERMISSION","Automatsko odobravanje dozvola");
define("_AM_EXTCAL_VIEW_PERMISSION_DESC","Ozna�i kategorije za svaku pojedinu grupu koju je dopu�teno vidjeti");
define("_AM_EXTCAL_SUBMIT_PERMISSION_DESC","Ozna�i kategorije za svaku pojedinu grupu koja ima dopu�tenje za podno�enje");
define("_AM_EXTCAL_AUTOAPPROVE_PERMISSION_DESC","Ozna�i kategorije za svaku pojedinu grupu koja nema dozvolu podno�enja doga�aja");
define("_AM_EXTCAL_PERM_NO_CATEGORY","Vi nemate kategoriju. Dodajte kategoriju grupi dozvola.");
define("_AM_EXTCAL_PRUNING_EVENT","Pro�isti doga�aj");
define("_AM_EXTCAL_EVENT_FINISH_BEFORE","Doga�aj zavr�en prije :");
define("_AM_EXTCAL_ALL_CATEGORY","Sve kategorije");
define("_AM_EXTCAL_INFO_SEND_NOTIF","Ti �e� poslati obavijest svim korisnicima koji su registrirani za ovaj doga�aj. Mo�e� birati izme�u slanja emaila, samo PP ili oboje.<br />Mo�e� prikazati poruku ispod. Uporabi tag za adaptiranje obavijesti i korisnika koji primaju poruku.");
define("_AM_EXTCAL_INFO_PRUNE","Pro�i��eni doga�aj bit �e <b>definitivno izbrisan</b>.");
define("_AM_EXTCAL_CONFIRM_PRUNE","Pro�i��eni doga�aj bit �e definitivno izbrisan sa svim komentarima i obavijestima.");
define("_AM_EXTCAL_CONFIRM_DELETE_CAT","Zaista �elite izbrisati ovu kategoriju ?<br />Svi doga�aji, komentari i obavijesti vezane za doga�aj bit �e izbrisani.");
define("_AM_EXTCAL_CONFIRM_DELETE_EVENT","Zaista �elite izbrisati doga�aj ?<br />Svi komentari i obavijesti vezane za doga�aj bit �e izbrisani.");
define("_AM_EXTCAL_EVENT_CREATED","Doga�aj je kreiran");
define("_AM_EXTCAL_EVENT_APPROVED","Doga�aj je odobren");
define("_AM_EXTCAL_EVENT_EDITED","Doga�aj je prikazan");
define("_AM_EXTCAL_EVENT_DELETED","Doga�aj je izbrisan");
define("_AM_EXTCAL_CAT_CREATED","Kategorija je kreirana");
define("_AM_EXTCAL_CAT_EDITED","Kategorija je prikazana");
define("_AM_EXTCAL_CAT_DELETED","Kategorija je izbrisana");

?>