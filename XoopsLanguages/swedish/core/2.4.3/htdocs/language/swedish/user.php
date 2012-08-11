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
 * @subpackage      Xoops User Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: user.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Endast behöriga användare');

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Inte registrerad?  Klicka <a href="register.php">här</a>.');
define('_US_LOSTPASSWORD','Glömt ditt lösenord?');
define('_US_NOPROBLEM','Inga problem. Fyll bara i e-postadressen som är registrerad på ditt konto.');
define('_US_YOUREMAIL','Din e-postadress: ');
define('_US_SENDPASSWORD','Skicka lösenord');
define('_US_LOGGEDOUT','Du är nu utloggad');
define('_US_THANKYOUFORVISIT','Tack för ditt besök!');
define('_US_INCORRECTLOGIN','Felaktig inloggning!');
define('_US_LOGGINGU','Tack för att du loggar in, %s.');
// 2001-11-17 ADD
define('_US_NOACTTPADM','Den valda användaren har avaktiverats eller har inte blivit aktiverad än.<br />Kontakta en administratör för hjälp.');
define('_US_ACTKEYNOT','Felaktig aktiveringsnyckel!');
define('_US_ACONTACT','Det valda kontot har redan aktiverats!');
define('_US_ACTLOGIN','Ditt konto har aktiverats. Logga in med det lösenord du registrerade.');
define('_US_NOPERMISS','Du har inte behörighet att utföra den här åtgärden!');
define('_US_SURETODEL','Är du säker på att du vill radera ditt konto?');
define('_US_REMOVEINFO','Det här kommer ta bort all din information från vår databas.');
define('_US_BEENDELED','Ditt konto har raderats.');
define('_US_ACTFAILD','Aktivering misslyckades!');
//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Användarregistrering');
define('_US_NICKNAME','Användarnamn');
define('_US_EMAIL','E-post');
define('_US_ALLOWVIEWEMAIL','Tillåt andra användare att se min e-postadress');
define('_US_WEBSITE','Webbsajt');
define('_US_TIMEZONE','Tidzon');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Bekräfta lösenord');
define('_US_SUBMIT','Spara');
define('_US_USERNAME','Användarnamn');
define('_US_FINISH','Avsluta');
define('_US_REGISTERNG','Kunde inte registrera ny användare.');
define('_US_MAILOK','Motta enstaka e-postunderrättelser <br />från administratörer och moderatorer?');
define('_US_DISCLAIMER','Användarvillkor');
define('_US_IAGREE','Jag godkänner ovanstående');
define('_US_UNEEDAGREE','Du måste godkänna vår användarvillkor för att bli registrerad.');
define('_US_NOREGISTER','Vi har f n stängt registreringen av nya användare');
// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktiveringsnyckel för %s');
define('_US_YOURREGISTERED','Du är nu registrerad. Ett e-postmeddelande innehållande en aktiveringsnyckel har skickats till den e-postadress du angivit. Följ instruktionerna i meddelandet för att aktivera ditt konto.');
define('_US_YOURREGMAILNG','Du är nu registrerad. Vi kunde dock inte skicka en aktiveringsnyckel till dig på grund av ett internt fel på vår server. Vi ber om ursäkt och ber dig ta kontakt med webmaster för att aktivera kontot.');
define('_US_YOURREGISTERED2','Du är nu registrerad och ditt konto väntar på att bli godkänt av en administratör. Du kommer att få ett e-postmeddelande så fort du blivit aktiverad.');
// %s is your site name
define('_US_NEWUSERREGAT','Ny användare registrerad på %s');
// %s is a username
define('_US_HASJUSTREG','%s har precis registrerat sig!');
define('_US_INVALIDMAIL','FEL: Ogiltig e-postadress');
define('_US_EMAILNOSPACES','FEL: E-postadresser får inte innehålla mellanslag.');
define('_US_INVALIDNICKNAME','FEL: Ogiltigt användarnamn');
define('_US_NICKNAMETOOLONG','Användarnamnet är för långt. Det måste vara kortare än %s tecken.');
define('_US_NICKNAMETOOSHORT','Användarnamnet är för kort. Det måste vara längre än %s tecken.');
define('_US_NAMERESERVED','FEL: Användarnamnet är reserverat.');
define('_US_NICKNAMENOSPACES','Användarnamnet får inte innehålla mellanslag.');
define('_US_NICKNAMETAKEN','FEL: Användarnamnet upptaget.');
define('_US_EMAILTAKEN','FEL: E-postadressen är redan registrerad.');
define('_US_ENTERPWD','FEL: Du måste fylla i ett lösenord.');
define('_US_SORRYNOTFOUND','Ingen användarinformation hittades.');
// %s is your site name
define('_US_NEWPWDREQ','Nytt lösenord begärt på %s');
define('_US_YOURACCOUNT','Ditt konto på %s');
define('_US_MAILPWDNG','Skicka lösenord: Kunde inte uppdatera data. Kontakta administratör');
// %s is a username
define('_US_PWDMAILED','Lösenord för %s skickat.');
define('_US_CONFMAIL','Bekräftelse för %s skickat.');
define('_US_ACTVMAILNG','Misslyckades med att skicka en underrättelse till %s');
define('_US_ACTVMAILOK','Underrättelse skickad till %s.');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Ingen användare vald! Gå tillbaka och försök igen.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Plats');
define('_US_OCCUPATION','Yrke');
define('_US_INTEREST','Intressen');
define('_US_SIGNATURE','Signatur');
define('_US_EXTRAINFO','Extra information');
define('_US_EDITPROFILE','Redigera profil');
define('_US_LOGOUT','Logga ut');
define('_US_INBOX','Inkorg');
define('_US_MEMBERSINCE','Medlem sedan');
define('_US_RANK','Rang');
define('_US_POSTS','Kommentarer/inlägg');
define('_US_LASTLOGIN','Senaste inloggning');
define('_US_ALLABOUT','Allt om %s');
define('_US_STATISTICS','Statistik');
define('_US_MYINFO','Min information');
define('_US_BASICINFO','Grundläggande information');
define('_US_MOREABOUT','Mer om mig');
define('_US_SHOWALL','Visa allt');
//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Riktigt namn');
define('_US_SHOWSIG','Bifoga alltid min signatur');
define('_US_CDISPLAYMODE','Visningsläge för kommentarer');
define('_US_CSORTORDER','Sorteringsordning för kommentarer');
define('_US_PASSWORD','Lösenord');
define('_US_TYPEPASSTWICE','(skriv ett nytt lösenord två gånger för att ändra det)');
define('_US_SAVECHANGES','Spara ändringar');
define('_US_NOEDITRIGHT',"Du har inte behörighet att ändra den här användarens information.");
define('_US_PASSNOTSAME','Lösenorden är olika. De måste vara identiska.');
define('_US_PWDTOOSHORT','Lösenordet måste vara minst <strong>%s</strong> tecken långt.');
define('_US_PROFUPDATED','Din profil är nu uppdaterad!');
define('_US_USECOOKIE','Lagra mitt användarnamn i en cookie i 1 år');
define('_US_NO','Nej');
define('_US_DELACCOUNT','Radera konto');
define('_US_MYAVATAR','Min avatar');
define('_US_UPLOADMYAVATAR','Ladda upp avatar');
define('_US_MAXPIXEL','Max antal pixlar');
define('_US_MAXIMGSZ','Max bildstorlek (Bytes)');
define('_US_SELFILE','Välj fil');
define('_US_OLDDELETED','Din gamla avatar kommer raderas!');
define('_US_CHOOSEAVT','Välj från listan an tillgängliga avatarer');
define('_US_PRESSLOGIN','Klicka på knappen nedan för att logga in');
define('_US_ADMINNO','Användare i gruppen Webmasters kan inte raderas');
define('_US_GROUPS','Användarens grupper');
define('_US_REMEMBERME','Kom ihåg mig');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Välkommen till %s');

?>