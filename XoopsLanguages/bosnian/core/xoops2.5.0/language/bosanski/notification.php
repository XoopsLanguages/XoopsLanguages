<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Notification Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: notification.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ba
// _CHARSET : UTF-8
// Translator: XOOPSBA.ORG Team, http://www.xoopsba.org
// RMV-NOTIFY
// Text for various templates...
define('_NOT_NOTIFICATIONOPTIONS', 'Opcije obavještavanja');
define('_NOT_UPDATENOW', 'Aktualiziraj sad');
define('_NOT_UPDATEOPTIONS', 'Aktualiziraj opcije obavještavanja');
define('_NOT_CLEAR', 'Očisti');
define('_NOT_CHECKALL', 'Obilježi sve');
define('_NOT_MODULE', 'Modul');
define('_NOT_CATEGORY', 'Kategorija');
define('_NOT_ITEMID', 'ID');
define('_NOT_ITEMNAME', 'Ime');
define('_NOT_EVENT', 'Događaj');
define('_NOT_EVENTS', 'Događaji');
define('_NOT_ACTIVENOTIFICATIONS', 'Aktivne Obavijesti');
define('_NOT_NAMENOTAVAILABLE', 'Ime nije dostupno');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE', 'Ime stavke nije dostupno');
define('_NOT_ITEMTYPENOTAVAILABLE', 'Vrsta stavke nije dostupna');
define('_NOT_ITEMURLNOTAVAILABLE', 'URL stavke nije dostupno');
define('_NOT_DELETINGNOTIFICATIONS', 'Brišem obavijesti');
define('_NOT_DELETESUCCESS', 'Obavijest(i) uspješno izbrisana(e).');
define('_NOT_UPDATEOK', 'Obavještavanje uspješno aktualizirano');
define('_NOT_NOTIFICATIONMETHODIS', 'Način obavještavanja je');
define('_NOT_EMAIL', 'email');
define('_NOT_PM', 'privatna poruka');
define('_NOT_DISABLE', 'isključeno');
define('_NOT_CHANGE', 'Promijeni');
define('_NOT_NOACCESS', 'Nemate dozvolu za pristup ovom dijelu stranice.');
// Text for module config options
define('_NOT_ENABLE', 'Aktiviraj');
define('_NOT_NOTIFICATION', 'Obaviještavanje');
define('_NOT_CONFIG_ENABLED', 'Aktiviraj obaviještavanje');
define('_NOT_CONFIG_ENABLEDDSC', 'Ovaj Modul omogućava članovima da određene događaje prate i budu obaviještavani. Izaberite "Da" da bi ovu funkciju aktivirali.');
define('_NOT_CONFIG_EVENTS', 'Aktiviraj specifične događaje');
define('_NOT_CONFIG_EVENTSDSC', 'Odredite koje obavijesti događaja vaši članovi mogu koristiti.');
define('_NOT_CONFIG_ENABLE', 'Aktiviraj Obaviještavanje');
define('_NOT_CONFIG_ENABLEDSC', 'Ovaj Modul omogućava članovima da budu obaviješteni o nekom događaju. Odaberite da li članovi mogu koristiti obavijesti u bloku (Blok-Stil), unutar Modula (Inline-Stil), ili obje opcije. Za način obaviještavanja u bloku je takođe obavezno aktivirati opciju blok obaviještavanja u modul postavkama.');
define('_NOT_CONFIG_DISABLE', 'Isključi obaviještavanje');
define('_NOT_CONFIG_ENABLEBLOCK', 'Aktiviraj samo Block-stil');
define('_NOT_CONFIG_ENABLEINLINE', 'Aktiviraj samo Inline-stil');
define('_NOT_CONFIG_ENABLEBOTH', 'Aktiviraj oba načina');
// For notification about comment events
define('_NOT_COMMENT_NOTIFY', 'Komentar dodan');
define('_NOT_COMMENT_NOTIFYCAP', 'Obavijesti me o novim komentarima.');
define('_NOT_COMMENT_NOTIFYDSC', 'Primi obavijest o novim dodanim komentarima (ili odobrenim).');
define('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest: Komentar dodan na {X_ITEM_TYPE}');
define('_NOT_COMMENTSUBMIT_NOTIFY', 'Komentar podnešen');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Obavijesti me o novim podnešenim komentarima (na čekanju za odobrenje).');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Primi obavijest o novim podnešenim komentarima (na čekanju za odobrenje).');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: auto-obavijest: Komentar podnešen za {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY', 'Označi');
define('_NOT_BOOKMARK_NOTIFYCAP', 'Označi ovu stavku (bez obavijesti).');
define('_NOT_BOOKMARK_NOTIFYDSC', 'Prati ovu stavku bez primanja obavijesti.');
// For user profile
// FIXME: These should be reworded a little...
define('_NOT_NOTIFYMETHOD', 'Način obaviještavanja<br /> Ako npr. pratite Forum, kako želite biti obaviještavani?');
define('_NOT_METHOD_EMAIL', 'Email-om (koristi email u mom profilu)');
define('_NOT_METHOD_PM', 'Privatnom porukom');
define('_NOT_METHOD_DISABLE', 'Trenutno iskljuci');
define('_NOT_NOTIFYMODE', 'Standardni nacin obaviještavanja');
define('_NOT_MODE_SENDALWAYS', 'Obavijesti me o svim označenim promjenama');
define('_NOT_MODE_SENDONCE', 'Obavijesti me samo jednom');
define('_NOT_MODE_SENDONCEPERLOGIN', 'Obavijesti me jednom, onda isključi. Uključi ponovo s mojom sljedećom prijavom');
define('_NOT_NOTHINGTODELETE', 'Nema ništa za obrisati.');

?>