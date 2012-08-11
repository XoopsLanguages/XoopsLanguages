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
defined('XOOPS_ROOT_PATH') or die('Endast behöriga användare');

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
// RMV-NOTIFY
// Text for various templates...
define('_NOT_NOTIFICATIONOPTIONS','Underrättelsealternativ');
define('_NOT_UPDATENOW','Uppdatera nu');
define('_NOT_UPDATEOPTIONS','Uppdatera underrättelsealternativ');
define('_NOT_CLEAR','Rensa');
define('_NOT_CHECKALL','Kryssa för alla');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategori');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Namn');
define('_NOT_EVENT','Händelse');
define('_NOT_EVENTS','Händelser');
define('_NOT_ACTIVENOTIFICATIONS','Aktiva underrättelser');
define('_NOT_NAMENOTAVAILABLE','Namn inte tillgängligt');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Namn inte tillgängligt');
define('_NOT_ITEMTYPENOTAVAILABLE','Typ inte tillgänglig');
define('_NOT_ITEMURLNOTAVAILABLE','URL inte tillgänglig');
define('_NOT_DELETINGNOTIFICATIONS','Raderar underrättelse(r)');
define('_NOT_DELETESUCCESS','Underättelse(r) raderade.');
define('_NOT_UPDATEOK','Underrättelsealternativ uppdaterade');
define('_NOT_NOTIFICATIONMETHODIS','Underrättelsemetod är');
define('_NOT_EMAIL','E-post');
define('_NOT_PM','Privat meddelande');
define('_NOT_DISABLE','Avaktiverad');
define('_NOT_CHANGE','Ändra');
define('_NOT_NOACCESS','Du har inte behörighet att komma åt den här sidan.');
// Text for module config options
define('_NOT_ENABLE','Aktivera');
define('_NOT_NOTIFICATION','Underrättelse');
define('_NOT_CONFIG_ENABLED','Aktivera underrättelse');
define('_NOT_CONFIG_ENABLEDDSC','Den här modulen gör så att användare kan bli automatiskt underrättade när vissa händelser inträffar.  Välj "Ja" för att aktivera den här funktionen.');
define('_NOT_CONFIG_EVENTS','Aktivera specifika händelser');
define('_NOT_CONFIG_EVENTSDSC','Välj de händelser som användare kan prenumerera på.');
define('_NOT_CONFIG_ENABLE','Aktivera underrättelser');
define('_NOT_CONFIG_ENABLEDSC','Den här modulen gör så att användare kan bli automatiskt underrättade när vissa händelser inträffar.  Välj om användare ska se underrättelsealternativ i ett block (block-stil), inne i modulen (inline-stil), eller båda två.  För underrättelsealternativ i block-stil måste Underrättelsealternativblocket vara aktiverat för aktuell modul.');
define('_NOT_CONFIG_DISABLE','Avaktivera underrättelse');
define('_NOT_CONFIG_ENABLEBLOCK','Aktivera endast block-stil');
define('_NOT_CONFIG_ENABLEINLINE','Aktiver endast inline-stil');
define('_NOT_CONFIG_ENABLEBOTH','Aktivera underrättelse (båda stilarna)');
// For notification about comment events
define('_NOT_COMMENT_NOTIFY','Kommentar inlagd');
define('_NOT_COMMENT_NOTIFYCAP','Underrätta mig när någon lagt in in en ny kommentar för den här saken.');
define('_NOT_COMMENT_NOTIFYDSC','Motta underrättelse när någon lagt in (eller godkänt) en ny kommentar för den här saken.');
define('_NOT_COMMENT_NOTIFYSBJ','Automatisk underrättelse från [{X_SITENAME}] {X_MODULE}: Kommentar inlagd för {X_ITEM_TYPE}');
define('_NOT_COMMENTSUBMIT_NOTIFY','Kommentar inlagd');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Underrätta mig när en ny kommentar för den här saken har lagts in för godkännande.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Motta underrättelse när en ny kommentar för den här saken har lagts in för godkännande.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','Automatisk underrättelse från [{X_SITENAME}] {X_MODULE}: Kommentar för {X_ITEM_TYPE} inlagd för godkännande');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY','Bokmärke');
define('_NOT_BOOKMARK_NOTIFYCAP','Bokmärk den här saken (ingen underrättelse).');
define('_NOT_BOOKMARK_NOTIFYDSC','Håll koll på den här saken utan att få några underrättelser.');
// For user profile
// FIXME: These should be reworded a little...
define('_NOT_NOTIFYMETHOD','Underrättelsemetod<br /> Hur du vill bli underrättad när du vill hålla koll på t ex ett forum.');
define('_NOT_METHOD_EMAIL','E-post (använd adress i min användarprofil)');
define('_NOT_METHOD_PM','Privat meddelande');
define('_NOT_METHOD_DISABLE','Avaktivera tillfälligt');
define('_NOT_NOTIFYMODE','Standardläge för underrättelser');
define('_NOT_MODE_SENDALWAYS','Underrätta mig om alla valda uppdateringar');
define('_NOT_MODE_SENDONCE','Underrätta mig bara en gång');
define('_NOT_MODE_SENDONCEPERLOGIN','Underrätta mig en gång och avaktivera sedan tills jag loggar in igen');
define('_NOT_NOTHINGTODELETE','Det finns inget att radera.');

?>