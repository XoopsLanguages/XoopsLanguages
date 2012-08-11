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
* Xoops Language
*
* @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
* @license http://www.fsf.org/copyleft/gpl.html GNU public license
* @package kernel
* @subpackage Xoops Banners Language
* @since 2.0.0
* @author Kazumi Ono <onokazu@xoops.org>
* @version $Id: banners.php 3274 2009-06-12 00:56:39Z trabis $
*/
defined('XOOPS_ROOT_PATH') or die('Endast behöriga användare');
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_BANNERS_MANAGEMENT','Annonshantering');
define('_BANNERS_WELCOMEBACK','Välkommen: %s');
define('_BANNERS_LOGGEDOUT','Utloggad från annonspanelen');
define('_BANNERS_LOGOUT','Logga ut från annonshanteraren');
define('_BANNERS_LOGIN_TITLE','Annonsstatistik');
define('_BANNERS_LOGIN_LOGIN','Användarnamn :');
define('_BANNERS_LOGIN_INCORRECT','Felaktigt användarnamn eller lösenord');
define('_BANNERS_LOGIN_PASS','Lösenord :');
define('_BANNERS_LOGIN_INFO','Skriv in din klientinformation');
define('_BANNERS_LOGIN_OK','OK');
define('_BANNERS_ID','Banner ID:');
define('_BANNERS_TITLE','Aktiva banners');
define('_BANNERS_URL','Ändra URL:');
define('_BANNERS_NOTHINGFOUND','Ingen data funnen');
define('_BANNERS_NO','#');
define('_BANNERS_FOW_IN','Visa aktiva banners: ');
define('_BANNERS_IMP_MADE','Gjorda intr.');
define('_BANNERS_IMP_TOTAL','Intr. totalt');
define('_BANNERS_IMP_LEFT','Intr. kvar');
define('_BANNERS_CLICKS','Klick');
define('_BANNERS_PER_CLICKS','% klick');
define('_BANNERS_FUNCTIONS','Funktioner');
define('_BANNERS_STATS','E-posta statistik');
define('_BANNERS_SHOWBANNER','Visa banner');
define('_BANNERS_SEND_STATS','Skicka <a href=\'%s\' title=\'E-posta statistik\'/>E-posta statistik</a> för den här bannern');
define('_BANNERS_POINTS','Den här bannern länkar till <a href=\'%s\' title=\'\'>den är URL:n</a>');
define('_BANNERS_UNLIMITED','Obegränsat');
define('_BANNERS_FINISHED','Utgångna banners');
define('_BANNERS_STARTED','Startdatum');
define('_BANNERS_ENDED','Slutdatum');
define('_BANNERS_MAIL_SUBJECT','Din bannerstatistik på %s');
define('_BANNERS_MAIL_MESSAGE','Tillgänglig annonsstatistik för vald banner på %s :\n\n\n
Klientnamn: %s\nBanner ID: %s\n
Bannerbild: %s\n
Banner-URL: %s\n\n
Köpta intryck: %s\n
Gjord intryck: %s\n
Intryck kvar: %s\n
Antal klick: %s\n
Klickprocent: %f \n\n\n
Rapport genererad: %s');
define('_BANNERS_MAIL_NOT_OK','Vi har stött på ett fel vid skickandet av din e-post. Kontakta webmastern för ytterligare information.');
define('_BANNERS_MAIL_OK','Tillgänglig annonsstatistik för vald banner har skickats till den e-postadress som angivits i ditt konto.');
define('_BANNERS_MAIL_ERROR','Det finns ingen e-postadress angiven för klienten %s.<br />Kontakta en administratör för ytterligare information.');
define('_BANNERS_DBUPDATED','Objektet modifierat och databasen uppdaterad');
define('_BANNERS_DBERROR','Databasen uppdaterades inte pga ett fel!');
define('_BANNERS_CHANGE','Ändra');

define('_BANNERS_NO_LOGIN_DATA','Ingen login-data hittades'); 
define('_BANNERS_NO_REFERER','Ingen referrer hittades'); 
define('_BANNERS_NO_ID','Inget giltigt ID hittades'); 
?>