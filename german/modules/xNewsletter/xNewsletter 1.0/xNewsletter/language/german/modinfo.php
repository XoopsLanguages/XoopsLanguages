<?php
/**
 * ****************************************************************************
 *  XNEWSLETTER - MODULE FOR XOOPS
 *  Copyright (c) 2012
 *  Goffy ( wedega.com )
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  ---------------------------------------------------------------------------
 *  @copyright  Goffy ( wedega.com )
 *  @license    GPL 2.0
 *  @package    xNewsletter
 *  @author     Goffy ( webmaster@wedega.com )
 *
 *  Version : 1.0.2  2012/12/27 15:18:22  :  Exp $
 * ****************************************************************************
 */

// Admin
define("_MI_XNEWSLETTER_NAME","xNewsletter");
define("_MI_XNEWSLETTER_DESC","Newsletter-Modul für Xoops");

//Menu
define("_MI_XNEWSLETTER_ADMENU1","Übersicht");
define("_MI_XNEWSLETTER_ADMENU2","Sender-Konten");
define("_MI_XNEWSLETTER_ADMENU3","Newsletter-Kategorien");
define("_MI_XNEWSLETTER_ADMENU4","Abonnenten");
define("_MI_XNEWSLETTER_ADMENU5","Abonnenten / Kategorien");
define("_MI_XNEWSLETTER_ADMENU6","Newsletter");
define("_MI_XNEWSLETTER_ADMENU7","Anhänge");
define("_MI_XNEWSLETTER_ADMENU8","Protokolle");
define("_MI_XNEWSLETTER_ADMENU9","Mailinglisten");
define("_MI_XNEWSLETTER_ADMENU10","Bounced-Mail");
define("_MI_XNEWSLETTER_ADMENU11","Wartung");
define("_MI_XNEWSLETTER_ADMENU99","Über");

define("_MI_XNEWSLETTER_SUBSCRIBE","An-/Abmelden");
define("_MI_XNEWSLETTER_LIST","Liste der Newsletter");
define("_MI_XNEWSLETTER_LIST_SUBSCR","Liste der Abonnenten");
define("_MI_XNEWSLETTER_CREATE","Newsletter erstellen");

//Blocks
define("_MI_XNEWSLETTER_CATSUBSCR_BLOCK_RECENT","Aktuelle Anmeldungen");
define("_MI_XNEWSLETTER_CATSUBSCR_BLOCK_DAY","Heutige Anmeldungen");
define("_MI_XNEWSLETTER_LETTER_BLOCK_RECENT","Aktuelle Newsletter");
define("_MI_XNEWSLETTER_LETTER_BLOCK_DAY","Heutige Newsletter");
define("_MI_XNEWSLETTER_LETTER_BLOCK_RANDOM","Zufällige Newsletter");

//Config
define("_MI_XNEWSLETTER_EDITOR","Editor");
define("_MI_XNEWSLETTER_KEYWORDS","Keywords");
define("_MI_XNEWSLETTER_KEYWORDS_DESC","Keywords eingeben (getrennt mit einem Komma)");
define("_MI_XNEWSLETTER_ADMINPERPAGE", "Anzahl Listeneinträge bei Admin-Seiten");
define("_MI_XNEWSLETTER_ADMINPERPAGE_DESC", "Legen Sie bitte fest, wieviele Einträge die Listen auf den Admin-Seiten haben sollen.");
define("_MI_XNEWSLETTER_ADVERTISE","Code für Werbung");
define("_MI_XNEWSLETTER_ADVERTISE_DESC","Bitte Code für Ihre Werbung hier eingeben");
define("_MI_XNEWSLETTER_SOCIALACTIVE","Socialnetworks anzeigen?");
define("_MI_XNEWSLETTER_SOCIALACTIVE_DESC","Wenn Schaltflächen für Soziale Netzwerke anzeigen wollen, wählen Sie bitte 'Ja'");
define("_MI_XNEWSLETTER_SOCIALCODE","Code für Schaltflächen für Soziale Netzwerke");
define("_MI_XNEWSLETTER_SOCIALCODE_DESC","Bitte Code für Schaltflächen für Soziale Netzwerke hier eingeben");

define("_MI_XNEWSLETTER_ATTACHMENT_MAXSIZE","Maximale Dateigröße");
define("_MI_XNEWSLETTER_ATTACHMENT_MAXSIZE_DESC","Bitte hier die maximale Dateigröße für Newsletteranhänge eingeben");
define("_MI_XNEWSLETTER_ATTACHMENT_MIMETYPES","Mime-types");
define("_MI_XNEWSLETTER_ATTACHMENT_MIMETYPES_DESC","Bitte hier die erlaubten Dateitypen für Newsletteranhänge eingeben");
define("_MI_XNEWSLETTER_ATTACHMENT_PATH","Upload-Pfad");
define("_MI_XNEWSLETTER_ATTACHMENT_PATH_DESC","Pfad festlegen, wo die Newsletteranhänge gespeichert werden sollen ( Ordner nach {XOOPS_ROOT_PATH}/uploads ), <b>mit Slash am Anfang</b> und <b>Slash am Ende</b>.");

define("_MI_XNEWSLETTER_USE_MAILINGLIST","Verwende Zusatzfeature Mailinglisten");
define("_MI_XNEWSLETTER_USE_MAILINGLIST_DESC","Wenn Sie existierende Mailinglisten haben, können Sie An- und Abmeldungen von einem Newsletter mit einer Mailingliste synchronisieren. <b>xNewsletter kann keine Mailingliste erstellen</b>. Wenn Sie dieses Feature aktivieren, erhalten Sie einen zusätzlichen Tab auf der Admin-Seite von xNewsletter.");

define("_MI_XNEWSLETTER_GROUPS_WITHOUT_ACTKEY","Gruppen mit An-/Abmeldung ohne Bestätigungsmail");
define("_MI_XNEWSLETTER_GROUPS_WITHOUT_ACTKEY_DESC","Bestimmen Sie bitte die Gruppen, die An-/Abmeldungen für Newsletter direkt durchführen dürfen, ohne dass sie eine Bestätigungsmail zurücksenden müssen");

define("_MI_XNEWSLETTER_GROUPS_CHANGE_OTHER","Gruppen mit der Berechtigung zum Ändern von An-/Abmeldung");
define("_MI_XNEWSLETTER_GROUPS_CHANGE_OTHER_DESC","Bestimmen Sie bitte die Gruppen, die An-/Abmeldungen von anderen Personen bearbeiten dürfen. Ein Löschen der Registrierung ist nicht möglich. Diese Gruppen müssen auch die Berechtigung zum Auflisten der Abonnenten zu einer Newsletterkategorie haben. Diese Gruppen sollten außerdem die Berechtigung zum Erstellen eines Newsletters haben.");

?>