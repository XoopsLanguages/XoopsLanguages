<?php
/**
*  Xoops Language
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
* @package         Core
* @subpackage      form Language
* @version         $Id: 2.5.0.a user.php 21.12.2010
*
* @LANGCODE        de
* @CHARSET         UTF-8
* Translator       XOOPS German Translation Team http://www.myxoops.org
*/

define('_US_NOTREGISTERED',   'noch nicht registriert?  Klicken Sie <a href="register.php">hier</a>.');
define('_US_LOSTPASSWORD',    'Passwort vergessen?');

define('_US_NOPROBLEM',       'Kein Problem. Geben Sie hier Ihre bei der Registrierung benutzte eMail Adresse ein.');
define('_US_YOUREMAIL',       'eMail Adresse: ');
define('_US_SENDPASSWORD',    'Passwort senden');
define('_US_LOGGEDOUT',       'Sie wurden abgemeldet');
define('_US_THANKYOUFORVISIT','Dank für Ihren Besuch!');
define('_US_INCORRECTLOGIN',  'Fehler beim Einloggen!');
define('_US_LOGGINGU',        'Danke dass Sie sich einloggen, %s.');

// 2001-11-17 ADD

define('_US_NOACTTPADM',      'Der gewählte Benutzer ist deaktiviert, oder hat sein Konto noch nicht aktiviert.<br />Bitte kontaktieren Sie den Administrator für nähere Details hierzu');
define('_US_ACTKEYNOT',       'Falscher Aktivierungsschlüssel!');
define('_US_ACONTACT',        'Dieses Konto wurde bereits aktiviert!');

define('_US_ACTLOGIN',        'Ihr Konto wurde aktiviert. Bitte loggen Sie sich mit Ihrem Passwort ein.');
define('_US_NOPERMISS',       'Sie haben nicht die entsprechenden Zugriffsrechte!');
define('_US_SURETODEL',       'Sind Sie sicher, dass Sie Ihr Konto löschen wollen?');
define('_US_REMOVEINFO',      'Es werden alle Daten von Ihnen <strong>unwiederruflich</strong> aus unserer Datenbank gelöscht.');
define('_US_BEENDELED',       'Ihr Konto wurde <strong>unwiederruflich</strong> gelöscht.');
define('_US_ACTFAILD',        'Aktivierung fehlgeschlagen!');

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG',         'Anmeldung');
define('_US_NICKNAME',        'Mitgliedsname');
define('_US_EMAIL',           'EMail');
define('_US_ALLOWVIEWEMAIL',  'Ihre EMail für andere Benutzer sichtbar machen?');
define('_US_WEBSITE',         'Webseite');
define('_US_TIMEZONE',        'Zeitzone');
define('_US_AVATAR',          'Avatar');
define('_US_VERIFYPASS',      'Passwort wiederholen');
define('_US_SUBMIT',          'Abschicken');
define('_US_USERNAME',        'Benutzername');
define('_US_FINISH',          'Fertigstellen');
define('_US_REGISTERNG',      'Neue Benutzer können sich nicht registrieren.');
define('_US_MAILOK',          'Möchten Sie, dass Administratoren oder Moderatoren, Ihnen eMail - Nachrichten senden können?');
define('_US_DISCLAIMER',      'Haftungsausschluß;');
define('_US_IAGREE',          'Ich habe den Haftungsausschluß gelesen und stimme ihm zu.  ');
define('_US_UNEEDAGREE',      'Sie müssen dem Haftungsausschluß zustimmen, um sich registrieren zu können.');
define('_US_NOREGISTER',      'Bitte entschuldigen Sie, derzeit ist eine Registrierung nicht möglich.');

// %s is username. This is a subject for email
define('_US_USERKEYFOR',      'Aktivierungsschlüssel für %s');
define('_US_YOURREGISTERED',  'Sie sind jetzt registriert. Eine eMail mit dem Aktivierungsschlüssel wurde an die von Ihnen angegebene eMail Adresse gesendet. Bitte folgen Sie den Hinweisen in dieser eMail um Ihr Konto zu aktivieren. ');
define('_US_YOURREGMAILNG',   'Sie sind jetzt registriert. Der Aktivierungsschlüssel konnte aufgrund eines internen Serverfehlers jedoch nicht an Ihre eMmail Adresse gesendet werden. Wir entschuldigen uns und bitten Sie den Administrator über diese Situation zu benachrichtigen. Vielen Dank.');
define('_US_YOURREGISTERED2', 'Sie sind jetzt registriert. Bitte warten Sie, bis der Administrator Ihr Konto freischaltet. Sie werden per eMail darüber informiert. Dies kann unter Umständen etwas Zeit benötigen. Vielen Dank für Ihr Verständnis.');
// %s is your site name
define('_US_NEWUSERREGAT',    'Neu Registrierung auf %s');

// %s is a username
define('_US_HASJUSTREG',      '%s hat sich soeben registriert!');
define('_US_INVALIDMAIL',     'FEHLER: Ungültige eMail Adresse');
define('_US_EMAILNOSPACES',   'FEHLER: eMail Adresse darf keine Leerzeichen enthalten.');
define('_US_INVALIDNICKNAME', 'FEHLER: Ungültiger Benutzername');
define('_US_NICKNAMETOOLONG', 'Benutzername ist zu lang. Bitte weniger als %s Zeichen verwenden.');
define('_US_NICKNAMETOOSHORT','Benutzername ist zu kurz. Bitte mehr als %s Zeichen verwenden.');
define('_US_NAMERESERVED',    'FEHLER: Dieser Benutzername ist bereits reserviert.');
define('_US_NICKNAMENOSPACES','Es dürfen keine Leerzeichen im Benutzername sein.');
define('_US_NICKNAMETAKEN',   'FEHLER: Benutzername bereits vergeben.');
define('_US_EMAILTAKEN',      'FEHLER: Die angegebene eMail Adresse ist bereits in unserer Datenbank registriert.');
define('_US_ENTERPWD',        'FEHLER: Sie müssen ein Passwort angeben.');
define('_US_SORRYNOTFOUND',   'Es wurde keine entsprechenden Benutzerinformationen gefunden!');

// %s is your site name
define('_US_NEWPWDREQ',       'Neue Passwortanforderung auf %s');
define('_US_YOURACCOUNT',     'Ihr Benutzerkonto auf %s');
define('_US_MAILPWDNG',       'eMail Passwort: Ihre Einstellungen konnten nicht aktualisiert werden! Bitte kontaktieren Sie bitte den Administrator.');

// %s is a username
define('_US_PWDMAILED',       'Passwort für %s versendet.');
define('_US_CONFMAIL',        'BestätigungseMail für %s versendet.');
define('_US_ACTVMAILNG',      'FEHLER beim Versenden der AktivierungseMail an %s');
define('_US_ACTVMAILOK',      'AktivierungseMail an %s verschickt.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG',        'Es wurde kein Benutzer ausgewählt, bitte gehen Sie zurück und versuchen es erneut.');
define('_US_PM',              'Private Nachricht senden (PM)');
define('_US_ICQ',             'ICQ');
define('_US_AIM',             'AIM');
define('_US_YIM',             'YIM');
define('_US_MSNM',            'MSN');
define('_US_LOCATION',        'Wohnort');
define('_US_OCCUPATION',      'Beruf');
define('_US_INTEREST',        'Interessen');
define('_US_SIGNATURE',       'Signatur');
define('_US_EXTRAINFO',       'Extra Info');
define('_US_EDITPROFILE',     'Profil bearbeiten');
define('_US_LOGOUT',          'Abmelden');
define('_US_INBOX',           'Private Nachrichten');
define('_US_MEMBERSINCE',     'Mitglied seit');
define('_US_RANK',            'Rang');
define('_US_POSTS',           'Kommentare und Beiträge');
define('_US_LASTLOGIN',       'Letzter Besuch am');
define('_US_ALLABOUT',        'Alles über %s anzeigen');
define('_US_STATISTICS',      'Statistiken');
define('_US_MYINFO',          'Über mich');
define('_US_BASICINFO',       'Informationen');
define('_US_MOREABOUT',       'mehr über mich...');
define('_US_SHOWALL',         'Alles anzeigen');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE',         'Profil');
define('_US_REALNAME',        'Echter Name');
define('_US_SHOWSIG',         'Meine Signatur immer anhängen');
define('_US_CDISPLAYMODE',    'Kommentar Ansichtsmodus');
define('_US_CSORTORDER',      'Reihenfolge der Kommentare');
define('_US_PASSWORD',        'Passwort');
define('_US_TYPEPASSTWICE',   '(Geben Sie Ihr neues Passwort 2x mal ein um es zu ändern)');
define('_US_SAVECHANGES',     'Änderungen Speichern');
define('_US_NOEDITRIGHT',     'Verzeihung, Sie haben nicht die entsprechenden Zugriffsrechte zum ändern dieser Benutzerinformation.');
define('_US_PASSNOTSAME',     'Die angegebenen Passwörter stimmen nicht überein.');
define('_US_PWDTOOSHORT',     'Das Passwort muss kürzer sein als <strong>%s</strong> Zeichen.');
define('_US_PROFUPDATED',     'Ihr Profil wurde aktualisiert!');
define('_US_USECOOKIE',       'Meinen Benutzername für 1 Jahr in einem Cookie speichern');
define('_US_NO',              'Nein');
define('_US_DELACCOUNT',      'Benutzerkonto löschen');
define('_US_MYAVATAR',        'Mein Avatar');
define('_US_UPLOADMYAVATAR',  'Avatar hochladen');
define('_US_MAXPIXEL',        'max. Bildgröße (Pixel)');
define('_US_MAXIMGSZ',        'max. Dateigröße (Bytes)');
define('_US_SELFILE',         'Datei auswählen');
define('_US_OLDDELETED',      'Ihr bisheriger Avatar wird gelöscht!');
define('_US_CHOOSEAVT',       'Wählen Sie einen Avatar aus der Liste');
define('_US_PRESSLOGIN',      'Klicken Sie auf den untenstehenden Button um sich einzuloggen');
define('_US_ADMINNO',         'Mitglieder aus der Webmaster-Gruppe können nicht gelöscht werden');
define('_US_GROUPS',          'Benutzer Gruppe');
define('_US_REMEMBERME',      'Logindaten merken');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Willkommen bei %s');

?>