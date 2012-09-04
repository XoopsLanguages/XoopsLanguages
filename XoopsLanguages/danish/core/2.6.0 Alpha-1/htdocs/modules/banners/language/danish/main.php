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
 * banners module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         banners
 * @since           2.6.0
 * @author          Mage Grégory (AKA Mage)
 * @version         $Id$
 */
//index.php
define("_MD_BANNERS_INDEX_CLIENTNAME", "Viser aktive bannere til klient: %s");
define("_MD_BANNERS_INDEX_DBERROR", "Database ikke blev opdateret på grund af fejl!");
define("_MD_BANNERS_INDEX_EMAIL", "Send e-mail statistik");
define("_MD_BANNERS_INDEX_NO_ID", "Ingen gyldig fundet ID");
define("_MD_BANNERS_INDEX_NO_REFERER", "Ingen referer fundet");
define("_MD_BANNERS_INDEX_ID", "ID");
define("_MD_BANNERS_INDEX_MAIL_MESSAGE", "Tilgængelige Banner Statistik for den valgte Banner ved %s: \n \n \n
Client Name: %s \nBanner ID: %s \n
Banner Image: %s \n
Banner URL: %s \n \n
Impressions Købte: %s \n
Visninger Made: %s \n
Impressions Venstre: %s \n
Klik modtaget: %s \n
Klik Procent:% f \n\n\n
Rapport genereret på: %s ");
define("_MD_BANNERS_INDEX_MAIL_OK", "Tilgængelige Banner statistik for den valgte banner er blevet sendt til din kontos emailadresse.");
define("_MD_BANNERS_INDEX_MAIL_SUBJECT", "Dit banner Statistik på %s");
define("_MD_BANNERS_INDEX_NOMAIL", "Kunne ikke sende: E-mail-adresse eksisterer ikke.");
include_once('admin.php');