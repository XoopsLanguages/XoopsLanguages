<?php   
/**
 * ****************************************************************************
 *  - A Project by Developers TEAM For Xoops - ( http://www.xoops.org )
 * ****************************************************************************
 *  XNEWSLETTER - MODULE FOR XOOPS
 *  Copyright (c) 2007 - 2012
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
 *  Version : 1 Mon 2012/11/05 14:31:32 :  Exp $
 * ****************************************************************************
 */
// Main
define('_MA_XNEWSLETTER_INDEX', "Home");
define('_MA_XNEWSLETTER_TITLE', "xNewsletter");
define('_MA_XNEWSLETTER_DESC', "Newsletter-Modul für Xoops");
define('_MA_XNEWSLETTER_WELCOME', "<h2>Willkommen bei unserem Newslettersystem</h2>Wir hoffen, wir können Sie damit immer auf dem aktuellen Stand halten. Seien Sie so frei und melden sich für einen oder für mehrere von unseren Newslettern an. Wenn Sie einen Newsletter nicht mehr erhalten wollen, können Sie sich hier auch auf einfachem Wege wieder abmelden. Sie können sich aber auch über einen Link, der bei jedem Newsletter angegeben ist, abmelden.");
define('_MA_XNEWSLETTER_ACCOUNTS', "E-Mail-Konten");
define('_MA_XNEWSLETTER_CAT', "Newsletterkategorien");
define('_MA_XNEWSLETTER_SUBSCR', "Abonnenten");
define('_MA_XNEWSLETTER_CATSUBSCR', "Abonnenten je Newsletterkategorien");
define('_MA_XNEWSLETTER_LETTER', "Newsletter");
define('_MA_XNEWSLETTER_PROTOCOL', "Protokoll");
define('_MA_XNEWSLETTER_BMH', "Bounced-Mail-Handler");
define('_MA_XNEWSLETTER_ADMIN', "Administrator");
define('_MA_XNEWSLETTER_LETTER_CATS', "Gesendet mit Newsletter");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SEARCH', "Suche nach Newsletteranmeldungen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SEARCH_EMAIL', "Suche oder ergänze Newsletteranmeldungen für die E-Mail-Adresse: ");
define('_AM_XNEWSLETTER_SUBSCRIPTION_SEARCH_ADD', "Suche / Ergänze Newsletteranmeldungen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_EXIST', "Bestehende Newsletteranmeldungen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_EXIST_NONE', "Es existieren derzeit keine Newsletteranmeldungen");
define('_MA_XNEWSLETTER_REGISTRATION_EXIST', "Bestehende Registrierungen von dieser E-Mail-Adresse");
define('_MA_XNEWSLETTER_REGISTRATION_NONE', "Ihre E-Mail-Adresse ist bis jetzt noch nicht registriert. Für Newsletteranmeldungen benötigen wir zusätzliche Informationen. Bitte ergänzen Sie das Registrierungsformular.<br/>Wir möchten Sie außerdem darauf hinweisen, dass zu Zwecken der Nachvollziehbarkeit Ihre IP-Adresse mitgespeichert wird.");
define('_MA_XNEWSLETTER_REGISTRATION_ADD', "Wenn Sie wollen, können Sie eine oder mehrere Personen mit einer E-Mail-Adresse erfassen, und später können Sie auch unterschiedliche Newsletteranmeldungen durchführen.");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ADD', "Newsletteranmeldungen hinzufügen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_EDIT', "Newsletteranmeldungen bearbeiten");
define('_MA_XNEWSLETTER_SUBSCRIPTION_DELETE', "Newsletteranmeldungen löschen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_DELETE_SURE', "Sind Sie sicher, dass Sie Ihre Registrierung mit allen Newsletteranmeldungen löschen wollen?<br /><br />Wenn Sie nur einzelne Newsletteran-/abmeldungen durchführen wollen, klicken Sie bitte auf Bearbeiten!<br/><br />");
define('_MA_XNEWSLETTER_SUBSCRIPTION_INFO_PERS', "Ihre persönlichen Informationen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SELECT_CATS', "Wählen Sie Ihre Newsletter");
define('_MA_XNEWSLETTER_SUBSCRIPTION_CATS_AVAIL', "Verfügbare Newsletter");
define('_MA_XNEWSLETTER_SUBSCRIPTION_NO_CATS_AVAIL', "Derzeit sind keine Newsletter verfügbar");
define('_MA_XNEWSLETTER_SUBSCRIPTION_OK', "Ihre Auswahl(en) wurden erfolgreich gespeichert");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR', "Beim Verarbeiten Ihrer An-/Abmeldungen ist ein Fehler aufgetreten");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NOID', "Fehler: keine gültige Subscriber-id");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NOEMAIL', "Fehler: keine gültige E-Mail-Adressse");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_SENDACTKEY', "Fehler beim Senden des Aktivierungsschlüssels");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_SAVESUBSCR', "Fehler beim Speichern der persönlichen Informationen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_INVALIDKEY', "Fehler: ungültiges Schlüsselformat");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NODATAKEY', "Fehler: keine Daten zu Schlüssel");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NOVALIDKEY', "Fehler: ungültiger Schlüssel");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_SAVECATSUBSCR', "Fehler beim Speichern der An-/Abmeldeinformationen");
define('_MA_XNEWSLETTER_SUBSCRIPTION_REG_OK', "Ihrer persönlichen Informationen wurden erfolgreich registriert.");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_SUBSCRIBE', "Anmeldung bei Newsletter '%nl' erfolgreich");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_UNSUBSCRIBE', "Abmeldung bei Newsletter '%nl' erfolgreich");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_NO_CHANGE', "Keine Änderung bei Newsletter '%nl'");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_DAT_QUITED_REMOVED', "Beendigungsdatum bei Newsletter '%nl' erfolgreich gelöscht");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_SENT_INFO', "Hinweismail an '%e' gesendet.");
define('_MA_XNEWSLETTER_SUBSCRIPTION_QUITED', "<span style='color:red'>Achtung: Beendet durch den Webmaster!</span>");
define('_MA_XNEWSLETTER_SUBSCRIPTION_QUITED_DETAIL', "<span style='color:red'>Achtung: Diese Anmeldung wurde durch den Webmaster am %q beendet, da Mails nicht zustellbar waren! Wenn Sie die Anmeldung reaktivieren wollen, lassen Sie diesen Newsletter einfach ausgewählt.</span>");
define('_MA_XNEWSLETTER_UNSUBSCRIPTION_OK', "Die E-Mail-Adresse '%e' wurde erfolgreich vom Newsletter '%n' abgemeldet");
define('_MA_XNEWSLETTER_UNSUBSCRIPTION_ERROR', "Fehler beim Abmelden von '%e' vom Newsletter '%n'");
define('_MA_XNEWSLETTER_SUBSCRIPTION_UPDATE_OK', "Newsletterdaten erfolgreich geändert");
define('_MA_XNEWSLETTER_SUBSCRIPTION_REG_CLOSED', "Die Registrierung mit dieser Mailadresse ist abgeschlossen.");
define('_MA_XNEWSLETTER_SUBSCRIPTIONSUBJECT', "Bestätigung des Newsletter bei ");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SUBJECT_CHANGE', "Hinweis über Änderungen Ihres Newsletters bei ");
define('_MA_XNEWSLETTER_SENDMAIL_REG_OK', "Eine Email zur Bestätigung der Registrierung wurde an die angegebene E-Mail-Adresse gesendet");
define('_MA_XNEWSLETTER_DELETESUBJECT', "Bestätigung der Abmeldung des Newsletter bei ");
define('_MA_XNEWSLETTER_SUBSCRIPTION_REG_UPDATE_CLOSED', "Die Registrierungsdaten wurden erfolgreich gespeichert.");
define('_MA_XNEWSLETTER_SENDMAIL_UNREG_OK', "Eine Email zur Bestätigung Ihrer Abmeldung wurde an die angegebene E-Mail-Adresse gesendet");
define('_MA_XNEWSLETTER_SUBSCRIPTION_UNFINISHED', "<span style='color:red'>Achtung: Die Registrierung wurde noch nicht bestätigt. Bitte klicken Sie auf den Aktivierungslink in der von uns zugesandten E-Mail. Sollten Sie die E-Mail nicht erhalten haben, klicken Sie bitte <a href='%link'>hier</a>, dann senden wir Ihnen diese Mail erneut.</span>");
define('_MA_XNEWSLETTER_PLEASE_LOGIN', "Die Mailadresse %s gehört zu einem registrierten User.<br />Um die Daten zu ändern, loggen Sie sich bitte ein.");
define('_MA_XNEWSLETTER_LETTER_NONEAVAIL', "Derzeit sind keine Newsletter verfügbar");
//1.2.2
define('_MA_XNEWSLETTER_ACCOUNTS_NONEAVAIL', "Derzeit sind keine E-Mail-Konten verfügbar");
?>