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
 
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
 
defined('XOOPS_ROOT_PATH') or die('Beperkte toegang');

define('_NOT_NOTIFICATIONOPTIONS', 'Kennisgevings opties');
define('_NOT_UPDATENOW', 'Nu bijwerken');
define('_NOT_UPDATEOPTIONS', 'Kennisgevingen bijwerken');
define('_NOT_CLEAR', 'Wissen');
define('_NOT_CHECKALL', 'Alles aankruisen');
define('_NOT_MODULE', 'Module');
define('_NOT_CATEGORY', 'Categorie');
define('_NOT_ITEMID', 'ID');
define('_NOT_ITEMNAME', 'Naam');
define('_NOT_EVENT', 'Gebeurtenis');
define('_NOT_EVENTS', 'Gebeurtenissen');
define('_NOT_ACTIVENOTIFICATIONS', 'Actieve Kennisgevingen');
define('_NOT_NAMENOTAVAILABLE', 'Naam niet beschikbaar');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE', 'Itemnaam niet beschikbaar');
define('_NOT_ITEMTYPENOTAVAILABLE', 'Itemtype niet beschikbaar');
define('_NOT_ITEMURLNOTAVAILABLE', 'Item URL niet beschikbaar');
define('_NOT_DELETINGNOTIFICATIONS', 'Verwijder kennisgevingen');
define('_NOT_DELETESUCCESS', 'Kennisgeving(en) met succes verwijderd.');
define('_NOT_UPDATEOK', 'Kennisgevingen zijn bijgewerkt.');
define('_NOT_NOTIFICATIONMETHODIS', 'Kennisgeving Methode');
define('_NOT_EMAIL', 'E-mail');
define('_NOT_PM', 'Privébericht');
define('_NOT_DISABLE', 'Uitgeschakeld');
define('_NOT_CHANGE', 'Wijzigen');
define('_NOT_NOACCESS', 'U beschikt niet over de benodigde rechten om deze pagina te bezoeken.');
// Text for module config options
define('_NOT_ENABLE', 'Inschakelen');
define('_NOT_NOTIFICATION', 'Kennisgeving');
define('_NOT_CONFIG_ENABLED', 'Kennisgevingen Inschakelen');
define('_NOT_CONFIG_ENABLEDDSC', 'Deze module stelt gebruikers in staat om een melding te ontvangen als er bepaalde gebeurtenissen plaatsvinden. Kies \"ja\" om deze functie in te schakelen.');
define('_NOT_CONFIG_EVENTS', 'Schakel specifieke gebeurtenissen in.');
define('_NOT_CONFIG_EVENTSDSC', 'Selecteer op welke kennisgevingen gebruikers zich kunnen inschrijven.');
define('_NOT_CONFIG_ENABLE', 'Kennisgevingen inschakelen');
define('_NOT_CONFIG_ENABLEDSC', 'Deze module stelt gebruikers in staat om een melding te ontvangen als er een bepaalde gebeurtenis plaatsvindt. Selecteer of de gebruikers de keuze opties in een blok of binnen de module (inline) te zien krijgen. Voor de keuze opties in een blok, moet het blok Instelling Kennisgevingen voor deze module ingeschakeld zijn!');
define('_NOT_CONFIG_DISABLE', 'Kennisgevingen uitschakelen');
define('_NOT_CONFIG_ENABLEBLOCK', 'Keuzeopties inschakelen alleen in blok');
define('_NOT_CONFIG_ENABLEINLINE', 'Keuzeopties inschakelen alleen Inline');
define('_NOT_CONFIG_ENABLEBOTH', 'Keuzeopties inschakelen (beide manieren)');
// For notification about comment events
define('_NOT_COMMENT_NOTIFY', 'Commentaar/Reactie toegevoegd');
define('_NOT_COMMENT_NOTIFYCAP', 'Informeer mij wanneer bij dit onderwerp een nieuw commentaar/reactie is geplaatst.');
define('_NOT_COMMENT_NOTIFYDSC', 'Ontvang een melding wanneer bij dit onderwerp een nieuw commentaar/reactie is geplaatst.');
define('_NOT_COMMENT_NOTIFYSBJ', ' [{X_SITENAME}] {X_MODULE} Automatische melding: Commentaar/Reactie geplaatst bij {X_ITEM_TYPE}');
define('_NOT_COMMENTSUBMIT_NOTIFY', 'Commentaar/Reactie ingestuurd');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Informeer mij wanneer bij dit onderwerp een nieuw commentaar/reactie is ingediend (wacht op goedkeuring).');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Ontvang een melding wanneer bij dit onderwerp een nieuw commentaar/reactie is ingediend (wacht op goedkeuring)');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische melding: Commentaar ingediend voor {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY', 'Favoriet');
define('_NOT_BOOKMARK_NOTIFYCAP', 'Voeg toe aan de favorieten (geen kennisgevingen).');
define('_NOT_BOOKMARK_NOTIFYDSC', 'Monitor dit onderdeel zonder ontvangst van een kennisgeving.');
// For user profile
// FIXME: These should be reworded a little...
define('_NOT_NOTIFYMETHOD', 'Methode voor Kennisgevingen? <br /> Op welke manier wilt u de kennisgevingen ontvangen?');
define('_NOT_METHOD_EMAIL', 'E-mail (gebruik adres uit mijn profiel)');
define('_NOT_METHOD_PM', 'Privébericht');
define('_NOT_METHOD_DISABLE', 'Tijdelijk uitgeschakeld');
define('_NOT_NOTIFYMODE', 'Standaard methode voor kennisgevingen');
define('_NOT_MODE_SENDALWAYS', 'Alle geselecteerde bijwerkingen melden');
define('_NOT_MODE_SENDONCE', 'Bericht mij eenmalig');
define('_NOT_MODE_SENDONCEPERLOGIN', 'Meld mij 1 voorval en schakel daarna de kennisgeving tijdelijk uit. De ingestelde kennisgeving(en) wordt(en) opnieuw geactiveerd nadat ik mij opnieuw heb ingelogd');
define('_NOT_NOTHINGTODELETE', 'Er zijn geen ingestelde kennisgevingen om te verwijderen.');
?>