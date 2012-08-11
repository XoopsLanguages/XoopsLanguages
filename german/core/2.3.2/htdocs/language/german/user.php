<?php
// $Id: user.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%%		File Name user.php 		%%%%%
// german v 1.4 2008/01/08 sato-san / Rene Sato / www.XOOPS-magazine.com $
// Code : UTF-8
// Letzte Bearbeitung 02.11.2008 / Alfred
define('_US_NOTREGISTERED','Noch nicht registriert? <a href=register.php>Klicken Sie hier</a>.');
define('_US_LOSTPASSWORD','Passwort vergessen?');
define('_US_NOPROBLEM','Kein Problem. Geben Sie hier Ihre E-Mail-Adresse ein, mit der Sie sich registriert haben.');
define('_US_YOUREMAIL','Ihre E-Mail-Adresse: ');
define('_US_SENDPASSWORD','Passwort zuschicken');
define('_US_LOGGEDOUT','Sie wurden abgemeldet.');
define('_US_THANKYOUFORVISIT','Danke für Ihren Besuch!');
define('_US_INCORRECTLOGIN','Fehler beim Einloggen!');
define('_US_LOGGINGU','Danke, dass Sie sich Einloggen, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Das gewählte Mitglied ist nicht in unserer Datenbank oder er hat seine Registrierung noch nicht bestätigt.<br />Bitte setzen Sie sich mit dem Webmaster in Verbindung.');
define('_US_ACTKEYNOT','Falscher Aktivierungsschlüssel!');
define('_US_ACONTACT','Das ausgewählte Konto ist bereits aktiviert worden!');
define('_US_ACTLOGIN','Ihr Konto wurde aktiviert. Bitte loggen Sie sich mit dem registrierten Passwort ein.');
define('_US_NOPERMISS','Verzeihung, Sie haben nicht die entsprechenden Zugriffsrechte!');
define('_US_SURETODEL','Sind Sie sich sicher, daß Sie Ihr Konto löschen möchten?');
define('_US_REMOVEINFO','Es werden alle Daten von Ihnen aus unserer Datenbank gelöscht.');
define('_US_BEENDELED','Ihr Konto wurde vollständig gelöscht.');
define('_US_ACTFAILD','Aktivierung fehlgeschlagen!');
//

//%%%%%%                File Name register.php                 %%%%%
define('_US_USERREG','Anmeldung:');
define('_US_NICKNAME','Mitgliedsname');
define('_US_EMAIL','E-Mail');
define('_US_ALLOWVIEWEMAIL','Diese Information anderen Mitgliedern sichtbar machen.');
define('_US_WEBSITE','Homepage');
define('_US_TIMEZONE','Zeitzone<br />(+1 für Deutschland)');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Passwort wiederholen:');
define('_US_SUBMIT','Abschicken');
define('_US_USERNAME','Mitgliedsname');
define('_US_FINISH','Fertigstellen');
define('_US_REGISTERNG','Der neue Mitgliedsname konnte nicht registriert werden.');
define('_US_MAILOK','Möchten Sie, das die Administratoren und Moderatoren, Ihnen E-Mail - Nachrichten zu schicken ?');
define('_US_DISCLAIMER','Haftungsausschluß');
define('_US_IAGREE','Ich habe den Haftungsausschluß gelesen und stimme ihm zu.');
define('_US_UNEEDAGREE','Verzeihung, aber Sie müssen dem Haftungsausschluß zustimmen, um sich registrieren zu können.');
define('_US_NOREGISTER','Verzeihung, im Moment werden keine Neuregistrierungen durchgeführt');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktivierungsschlüssel für %s');

define('_US_YOURREGISTERED','Sie sind nun registriert. Der Aktivierungsschlüssel wurde an die angegebene Adresse geschickt. Bitte folgen Sie den Hinweisen in der E-Mail um Ihre Mitgliedschaft zu bestätigen. ');
define('_US_YOURREGMAILNG','Sie sind nun registriert. Leider konnten wir durch einen internen Fehler keine Aktivierungs-E-Mails verschicken. Setzen Sie sich bitte mit dem Webmaster in Verbindung.');
define('_US_YOURREGISTERED2','Sie sind nun registriert. Bitte warten Sie, bis Ihre Registrierung vom Administrator freigeschaltet wurde. Sie erhalten einmalig eine Bestätigungsmail, wenn es soweit ist. Dieser Vorgang kann unter Umständen etwas Zeit beanspruchen, bitte haben Sie Geduld.');

// %s is your site name
define('_US_NEWUSERREGAT','Neues Mitglied auf %s');
// %s is a username
define('_US_HASJUSTREG','%s hat sich soeben neu angemeldet!');

define('_US_INVALIDMAIL','FEHLER: Ungültige E-Mail-Adresse!');
define('_US_EMAILNOSPACES','FEHLER: E-Mail-Addresse enthält Leerzeichen!');
define('_US_INVALIDNICKNAME','FEHLER: Unzulässiger Mitgliedsname!');
define('_US_NICKNAMETOOLONG','Mitgliedsname ist zu lang! Er darf maximal %s Zeichen haben.');
define('_US_NICKNAMETOOSHORT','Mitgliedsname ist zu kurz! Er muss mindestens %s Zeichen haben.');
define('_US_NAMERESERVED','FEHLER: Dieser Mitgliedsname ist bereits reserviert!');
define('_US_NICKNAMENOSPACES','Der Mitgliedsname darf keine Leerzeichen enthalten!');
define('_US_NICKNAMETAKEN','FEHLER: Dieser Mitgliedsname ist bereits vergeben!');
define('_US_EMAILTAKEN','FEHLER: Diese E-Mail-Adresse befindet sich bereits in unserer Datenbank!');
define('_US_ENTERPWD','FEHLER: Sie müssen ein Passwort angeben!');
define('_US_SORRYNOTFOUND','Keine entsprechenden Mitgliedinformationen gefunden!');

// %s is your site name
define('_US_NEWPWDREQ','Neue Passwortanforderung auf %s');
define('_US_YOURACCOUNT','Ihr Konto auf %s');

define('_US_MAILPWDNG','E-Mail-Passwort: Ihre Einstellungen konnten nicht aktualisiert werden!. Setzen Sie sich bitte mit dem Webmaster in Verbindung!');

// %s is a username
define('_US_PWDMAILED','Passwort für %s verschickt.');
define('_US_CONFMAIL','Bestätigungs-E-Mail für %s verschickt.');
define('_US_ACTVMAILNG','Fehler beim Versenden der Aktivierungs-E-Mail an %s');
define('_US_ACTVMAILOK','Aktivierungs-E-Mail an %s verschickt.');

//%%%%%%                File Name userinfo.php                 %%%%%
define('_US_SELECTNG','Es wurde kein Mitglied ausgewählt! Bitte gehen Sie zurück und versuchen es erneut.');
define('_US_PM','Private Nachricht senden');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSN');
define('_US_LOCATION','Wohnort');
define('_US_OCCUPATION','Beruf');
define('_US_INTEREST','Interessen');
define('_US_SIGNATURE','Signatur');
define('_US_EXTRAINFO','zusätzliche Infos');
define('_US_EDITPROFILE','Konto bearbeiten');
define('_US_LOGOUT','Abmelden');
define('_US_INBOX','Private Nachrichten');
define('_US_MEMBERSINCE','Mitglied seit');
define('_US_RANK','Rang');
define('_US_POSTS','Kommentare und Beiträge');
define('_US_LASTLOGIN','Letzter Besuch am');
define('_US_ALLABOUT','Konto von %s');
define('_US_STATISTICS','Statistiken');
define('_US_MYINFO','Kommunikations-Möglichkeiten');
define('_US_BASICINFO','Stammdaten');
define('_US_MOREABOUT','Weitere Infos');
define('_US_SHOWALL','Alles anzeigen');

//%%%%%%                File Name edituser.php                 %%%%%
define('_US_PROFILE','Konto');
define('_US_REALNAME','Name');
define('_US_SHOWSIG','Ihre Signatur immer anzeigen');
define('_US_CDISPLAYMODE','Kommentaransicht');
define('_US_CSORTORDER','Reihenfolge der Kommentare:');
define('_US_PASSWORD','Passwort');
define('_US_TYPEPASSTWICE','(Geben Sie Ihr neues Passwort 2x mal ein um es zu ändern)');
define('_US_SAVECHANGES','Änderungen sichern');
define('_US_NOEDITRIGHT',"Verzeihung, Sie haben nicht die entsprechenden Zugriffsrechte zum Ändern dieser Mitgliedsinformation.");
define('_US_PASSNOTSAME','Beide Kennwörter sind verschieden. Sie müssen identisch sein.');
define('_US_PWDTOOSHORT','Das Passwort muss mindestens <b>%s</b> Zeichen lang sein.');
define('_US_PROFUPDATED','Ihr Konto wurde aktualisiert!');
define('_US_USECOOKIE','Soll Ihr Mitgliedsname für ein Jahr in einem Cookie gespeichert werden?');
define('_US_NO','Nein');
define('_US_DELACCOUNT','Konto löschen');
define('_US_MYAVATAR','Mein Avatar');
define('_US_UPLOADMYAVATAR','Laden Sie Ihren Avatar hoch');
define('_US_MAXPIXEL','max. Bildgröße');
define('_US_MAXIMGSZ','max. Dateigröße');
define('_US_SELFILE','Durchsuchen');
define('_US_OLDDELETED','Ihr altes Avatarbild wird dann gelöscht!');
define('_US_CHOOSEAVT','Wählen Sie einen Avatar aus der Liste!');

define('_US_PRESSLOGIN','Klicken Sie auf den untenstehenden Button um sich einzuloggen');

define('_US_ADMINNO','Mitglieder aus der Webmastergruppe können nicht entfernt werden');
define('_US_GROUPS','Gruppe des Mitglieds');

define('_US_REMEMBERME','Login Speichern');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Willkommen bei %s');

?>