<?php
// $Id: modinfo.php,v 1.19 2005/08/30 08:34:23 zoullou Exp $
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

define('_MI_EXTCAL_NAME', 'eXtCal');
define('_MI_EXTCAL_DESC','XOOPS Kalendar Modul');
define("_MI_EXTCAL_SUNDAY", "Nedjelja");
define("_MI_EXTCAL_MONDAY", "Ponedjeljak");
define("_MI_EXTCAL_TUESDAY", "Utorak");
define("_MI_EXTCAL_WEDNESDAY", "Srijeda");
define("_MI_EXTCAL_THURSDAY", "�etvrtak");
define("_MI_EXTCAL_FRIDAY", "Petak");
define("_MI_EXTCAL_SATURDAY", "Subota");
define("_MI_EXTCAL_CALENDAR_VIEW", "Pregled kalendara");
define("_MI_EXTCAL_YEARLY_VIEW", "Godi�nji pregled");
define("_MI_EXTCAL_MONTHLY_VIEW", "Mjese�ni pregled");
define("_MI_EXTCAL_DAILY_VIEW", "Dnevni pregled");
define("_MI_EXTCAL_EVENT_VIEW", "Pregled doga�aja");
define("_MI_EXTCAL_SUBMIT_VIEW", "Podnesi pregled doga�aja");
define("_MI_EXTCAL_START_PAGE", "Po�etna stranica");
define("_MI_EXTCAL_WEEK_START_DAY", "Prvi dan u tjednu");
define("_MI_EXTCAL_WEEK_START_DAY_DESC", "Ozna�i prvi dan u tjednu za kalendar.");
define("_MI_EXTCAL_BNAME1", "Minical");
define("_MI_EXTCAL_BNAME1_DESC", "Mini kalendar blok");
define("_MI_EXTCAL_BNAME2", "Obnovi doga�aj");
define("_MI_EXTCAL_BNAME2_DESC", "Prika�i X obnovljeni doga�aj");
define("_MI_EXTCAL_BNAME3", "Novi doga�aj");
define("_MI_EXTCAL_BNAME3_DESC", "Prika�i X novi doga�aj");
define("_MI_EXTCAL_BNAME4", "Osvijetli");
define("_MI_EXTCAL_BNAME4_DESC", "Prika�i osvijetljeni doga�aj");
define("_MI_EXTCAL_BNAME5", "Slu�ajni doga�aj");
define("_MI_EXTCAL_BNAME5_DESC", "Prika�i X slu�ajni doga�aj");
define("_MI_EXTCAL_SUBMIT_EVENT", "Podnesi doga�aj");
define("_MI_EXTCAL_DATE_SHORT", "Format za kratki datum");
define("_MI_EXTCAL_DATE_SHORT_DESC", "Vidi PHP <a href=\"http://www.php.net/manual/en/function.date.php\">Datumi</a> funkcije za sve opcije.");
define("_MI_EXTCAL_DATE_LONG", "Format za dugi datum");
define("_MI_EXTCAL_DATE_LONG_DESC", "Vidi PHP <a href=\"http://www.php.net/manual/en/function.date.php\">Datumi</a> funkcije za sve opcije.");
define("_MI_EXTCAL_DATE_MEDIUM", "Format za srednji datum");
define("_MI_EXTCAL_DATE_MEDIUM_DESC", "Vidi PHP <a href=\"http://www.php.net/manual/en/function.date.php\">Datumi</a> funkcije za sve opcije.");
define("_MI_EXTCAL_DOHTML", "Dozvoli HTML");
define("_MI_EXTCAL_DOHTML_DESC", "Dozvoli korisniku podno�enje teksta sa HTML. Ako korisnik ne mo�e podnijeti doga�aj sa HTML pojednostavni DHTML textarea prikaz. Ako je HTML dopu�ten korisnik mo�e izabrati WYSIWYG editor.");
define("_MI_EXTCAL_NO", "Ne");
define("_MI_EXTCAL_ADMIN_SIDE_ONLY", "Samo za administratore");
define("_MI_EXTCAL_ADMIN_PUBLIC_SIDE", "Administratori i korisnici");
define("_MI_EXTCAL_RSS_CACHE_TIME", "RSS : me�usprenik vremena");
define("_MI_EXTCAL_RSS_CACHE_TIME_DESC", "RSS : me�uspremnik vremena u minutama");
define("_MI_EXTCAL_RSS_NB_EVENT", "RSS : doga�aj prikazan brojem");
define("_MI_EXTCAL_RSS_NB_EVENT_DESC", "RSS : Prikaz X doga�aj u rss unosu");
define("_MI_EXTCAL_WHOS_GOING", "Uklju�i registraciju korisni�kih doga�aja ?");
define("_MI_EXTCAL_WHOS_GOING_DESC", "Aktiviraj ili ne \"Who's Going\" funkciju");
define("_MI_EXTCAL_GLOBAL_NOTIFY", "Op�e obavijesti");
define("_MI_EXTCAL_GLOBAL_NOTIFYDSC", "Obavijesti za sve kategorije");
define("_MI_EXTCAL_CAT_NOTIFY", "Kategorija obavijesti");
define("_MI_EXTCAL_CAT_NOTIFYDSC", "Obavijesti za odre�ene kategorije");
define("_MI_EXTCAL_EVENT_NOTIFY", "Doga�aj");
define("_MI_EXTCAL_EVENT_NOTIFYDSC", "Doga�aj obavijesti");
define("_MI_EXTCAL_NEW_EVENT_NOTIFY", "Novi doga�aj");
define("_MI_EXTCAL_NEW_EVENT_NOTIFYCAP", "Obavijesti me kada je podne�en novi doga�aj");
define("_MI_EXTCAL_NEW_EVENT_NOTIFYDSC", "Primi obavijest kada je novi doga�aj podne�en");
define("_MI_EXTCAL_NEW_EVENT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi doga�aj je podne�en");
define("_MI_EXTCAL_NEW_EVENT_PENDING_NOTIFY", "O�ekujem novi doga�aj");
define("_MI_EXTCAL_NEW_EVENT_PENDING_NOTIFYCAP", "Obavijesti me kada je novi doga�aj podne�en bez dozvole");
define("_MI_EXTCAL_NEW_EVENT_PENDING_NOTIFYDSC", "Primi obavijest kada je novi doga�aj podne�en bez dozvole");
define("_MI_EXTCAL_NEW_EVENT_PENDING_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi doga�aj je podnesen bez dozvole");
define("_MI_EXTCAL_NEW_EVENT_CAT_NOTIFY", "Novi doga�aj");
define("_MI_EXTCAL_NEW_EVENT_CAT_NOTIFYCAP", "Obavijesti me kada je podne�en novi doga�aj u ovoj kategoriji");
define("_MI_EXTCAL_NEW_EVENT_CAT_NOTIFYDSC", "Primi obavijest kada je podne�en novi doga�aj u ovoj kategoriji");
define("_MI_EXTCAL_NEW_EVENT_CAT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi doga�aj je podne�en");
define("_MI_EXTCAL_INDEX","Po�etna");
define("_MI_EXTCAL_CATEGORY","Kategorija");
define("_MI_EXTCAL_EVENT","Doga�aj");
define("_MI_EXTCAL_PERMISSIONS","Dozvole");
define("_MI_EXTCAL_PRUNING","Pro�i��avanje");

?>