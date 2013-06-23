<?php
/**
 * ****************************************************************************
 * simplenewsletter - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard of http://www.herve-thouzard.com
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard of http://www.herve-thouzard.com
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         simplenewsletter
 * @author 			Hervé Thouzard of http://www.herve-thouzard.com
 * @dutch translation Frans J. van Ittersum
 *
 * Version : $Id:
 * ****************************************************************************
 */
define("_MI_SIMPLENEWSLETTER_NAME", "SimpleNewsLetter");
define("_MI_SIMPLENEWSLETTER_DESC", "Een eenvoudige nieuwsbrief module");

define("_MI_SIMPLENEWSLETTER_BNAME1", "Laatste nieuwsbrieven");
define("_MI_SIMPLENEWSLETTER_BNAME2", "Laatste aanmeldingen");
define("_MI_SIMPLENEWSLETTER_BNAME3", "Aanmelden/Afmelden");
define("_MI_SIMPLENEWSLETTER_BNAME4", "CRON");

define("_MI_SIMPLENEWSLETTER_SMNAME1", "Index");
define("_MI_SIMPLENEWSLETTER_SMNAME2", "Aanmelding");
define("_MI_SIMPLENEWSLETTER_SMNAME3", "RSS");
define("_MI_SIMPLENEWSLETTER_SMNAME4", "Wachtwoord");

define("_MI_SIMPLENEWSLETTER_FORM_OPTIONS","Te gebruiken tekstverwerker");
define("_MI_SIMPLENEWSLETTER_FORM_COMPACT","Compact");
define("_MI_SIMPLENEWSLETTER_FORM_DHTML","DHTML");
define("_MI_SIMPLENEWSLETTER_FORM_SPAW","Spaw Editor");
define("_MI_SIMPLENEWSLETTER_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_SIMPLENEWSLETTER_FORM_FCK","FCK Editor");
define("_MI_SIMPLENEWSLETTER_FORM_KOIVI","Koivi Editor");
define("_MI_SIMPLENEWSLETTER_FORM_TINYEDITOR","TinyEditor");

define("_MI_SIMPLENEWSLETTER_PERPAGE", "Aantal elementen per pagina");
define("_MI_SIMPLENEWSLETTER_SENDER_EMAIL", "Afzender - Emailadres");
define("_MI_SIMPLENEWSLETTER_SENDER_NAME", "Afzender - Naam");
define("_MI_SIMPLENEWSLETTER_URL_REWRITE", "Wilt u url rewriting gebruiken?");
define("_MI_SIMPLENEWSLETTER_CHAR_CUT", "Aantal karakters van iedere nieuwsbrief dat moet worden weergegeven op de index-pagina van de module");
define("_MI_SIMPLENEWSLETTER_WELCOME_EMAIL", "Verstuur een welkomsboodschap aan degenen die zich aanmelden ?");
define("_MI_SIMPLENEWSLETTER_BYEBYE_EMAIL", "Verstuur een afscheidsboodschap aan degenen die zich afmelden ?");
define("_MI_SIMPLENEWSLETTER_PACKET_SIZE", "Verstuur emails per groep van ...");

define("_MI_SIMPLENEWSLETTER_ADMENU0", "Nieuwe nieuwsbrief");
define("_MI_SIMPLENEWSLETTER_ADMENU1", "Vorige nieuwsbrieven");
define("_MI_SIMPLENEWSLETTER_ADMENU2", "Abonnees");
define("_MI_SIMPLENEWSLETTER_ADMENU3", "Berichten");
define("_MI_SIMPLENEWSLETTER_ADMENU4", "Teksten");
define("_MI_SIMPLENEWSLETTER_ADMENU5", "CSV Import");
define("_MI_SIMPLENEWSLETTER_ADMENU6", "Blokken");

define("_MI_SIMPLENEWSLETTER_CRON_PASSWORD", "Wachtwoord voor CRON");
define("_MI_SIMPLENEWSLETTER_CRON_PASSWORD_DSC", "Als u een CRON gebruikt, dan <b>moet</b> u een wachtwoord en een aanroepscript zoals dit: http://www.example.com/modules/simplenewsletter/cron.php?password=mypassword opgeven");

define("_MI_SIMPLENEWSLETTER_USE_TAGS", "Wilt u het tag-systeem gebruiken ?");
define("_MI_SIMPLENEWSLETTER_OPEN_SUBSCRIPTION", "Is aanmelden ook mogelijk voor mensen die geen lid zijn van deze website ?");
define("_MI_SIMPLENEWSLETTER_AUTO_APPROVE", "Keur aanmeldingen van niet-leden automatisch goed ?");
define("_MI_SIMPLENEWSLETTER_USE_CAPTCHA", "Wilt u een CAPTCHA op het aanmeldingsformulier gebruiken ?");
define("_MI_SIMPLENEWSLETTER_VALIDATE_BCC", "Verstuur een BCC-kopie van verificaties naar dit emailadres ?");
define("_MI_SIMPLENEWSLETTER_VALIDATE_BCC_DSC", "Laat dit leeg als u geen kopie van validatie-mails wilt ontvangen");

define("_MI_SIMPLENEWSLETTER_MIME_TYPE", "Toegestane mime types");
define("_MI_SIMPLENEWSLETTER_MAX_UPLOAD", "Maximale grootte van upload-bestanden en afbeeldingen");
define("_MI_SIMPLENEWSLETTER_PATH_ATTACHMENTS", "Pad waar de aangehangen bestanden moeten worden opgeslagen (zonder slash aan het einde)");
define("_MI_SIMPLENEWSLETTER_URL_ATTACHMENTS", "URL om de aangehangen bestanden op te slaan (zonder slash aan het einde)");

define("_MI_SIMPLENEWSLETTER_CSV_SEP", "Scheidingsteken voor CSV-export bestanden");
define("_MI_SIMPLENEWSLETTER_NEW_FIELDS", "Wilt u aanvullende velden gbruiken ?");
define("_MI_SIMPLENEWSLETTER_NEWS_FIELDS_DSC", "Titel, Straat - adres, Plaats, Land, Postcode, Telefoon, Fax");
define("_MI_SIMPLENEWSLETTER_PASSWORD_MIN_LENGTH", "Minimale lengte wachtwoord ?");
?>