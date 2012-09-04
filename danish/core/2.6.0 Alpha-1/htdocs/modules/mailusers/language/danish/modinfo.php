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
 * Mailusers Plugin
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         mailusers
 * @since           2.6.0
 * @author          Mage Grégory (AKA Mage)
 * @version         $Id$
 */

// Info modul
define("_MI_MAILUSERS_NAME", "Mail-brugere");
define("_MI_MAILUSERS_DESC", "Plugin til styring af mails");
define("_MI_MAILUSERS_SENDMAIL", "Send Mail");
// Menu
define("_MI_MAILUSERS_INDEX", "Home");
define("_MI_MAILUSERS_MAILUSER_MANAGER", "Mail-brugere manager");
define("_MI_MAILUSERS_ABOUT", "Om");
// Preferences
define("_AM_MAILUSERS_MAILFROM", "FRA adresse");
define("_AM_MAILUSERS_MAILFROMDESC", "");
define("_AM_MAILUSERS_MAILFROMNAME", "Fra navn");
define("_AM_MAILUSERS_MAILFROMNAMEDESC", "");
define("_AM_MAILUSERS_MAILFROMUID", "FRA bruger");
define("_AM_MAILUSERS_MAILFROMUIDDESC", "Når systemet sender en privat besked, som brugeren skal synes at have sendt det?");
define("_AM_MAILUSERS_MAILERMETHOD", "Mail levering metode");
define("_AM_MAILUSERS_MAILERMETHODDESC", "Method bruges til at levere post Standard er \"mail\" brug andre kun hvis det gør problemer.");
define("_AM_MAILUSERS_SENDMAILPATH", "Sti to sendmail");
define("_AM_MAILUSERS_SENDMAILPATHDESC", "Sti til sendmail program (eller stedfortræder) på webserveren.");
define("_AM_MAILUSERS_SMTPHOST", "SMTP host(s)");
define("_AM_MAILUSERS_SMTPHOSTDESC", "Liste over SMTP-servere til at forsøge at oprette forbindelse til.");
define("_AM_MAILUSERS_SMTPUSER", "SMTPAuth brugernavn");
define("_AM_MAILUSERS_SMTPUSERDESC", "Username at oprette forbindelse til en SMTP-vært med SMTPAuth.");
define("_AM_MAILUSERS_SMTPPASS", "SMTPAuth password");
define("_AM_MAILUSERS_SMTPPASSDESC", "Password for at oprette forbindelse til en SMTP-vært med SMTPAuth.");
define("_AM_MAILUSERS_EDITOR", "Editor");