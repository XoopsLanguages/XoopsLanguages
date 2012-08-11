<?php
// $Id: user.php,v 1.13 2005/08/08 06:29:25 skalpa Exp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Inte registrerad?  Klicka <a href=register.php>här</a>.');
define('_US_LOSTPASSWORD','Tappat bort ditt lösenord?');
define('_US_NOPROBLEM','Inga problem. Skriv bara in den emailadress som är kopplad till ditt konto.');
define('_US_YOUREMAIL','Din E-post: ');
define('_US_SENDPASSWORD','Skicka lösenord');
define('_US_LOGGEDOUT','Du är nu utloggad');
define('_US_THANKYOUFORVISIT','Tack för ditt besök på vår sajt!');
define('_US_INCORRECTLOGIN','Felaktig inloggning!');
define('_US_LOGGINGU','Tack för att du loggar in, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Den valda användaren har blivit deaktiverad eller är ännu ej aktiverad.<br />Vänligen kontakta administratören för detaljer.');
define('_US_ACTKEYNOT','Aktiveringsnyckeln är felaktig!');
define('_US_ACONTACT','Det valda kontot är redan aktiverat!');
define('_US_ACTLOGIN','Ditt konto har blivit aktiverat. Logga in med det registrerade lösenordet.');
define('_US_NOPERMISS','Beklagar, du har inte behörighet att utföra denna åtgärd!');
define('_US_SURETODEL','Är du säker på att du vill radera ditt konto?');
define('_US_REMOVEINFO','Detta kommer radera all din information i vår databas.');
define('_US_BEENDELED','Ditt konto har raderats.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Användar Registrering');
define('_US_NICKNAME','Användarnamn');
define('_US_EMAIL','E-post');
define('_US_ALLOWVIEWEMAIL','Tillåt andra användare att se min e-post adress');
define('_US_WEBSITE','Webbsajt');
define('_US_TIMEZONE','Tids Zon');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Verifiera Lösenord');
define('_US_SUBMIT','Godkend');
define('_US_USERNAME','Användarnamn');
define('_US_FINISH','Klar');
define('_US_REGISTERNG','Kunde inte registrera ny användar.');
define('_US_MAILOK','Få enstaka e-post notiser <br />från administratörer och ordförande?');
define('_US_DISCLAIMER','Avsägande');
define('_US_IAGREE',' Jag godkänner ovanstående');
define('_US_UNEEDAGREE','Ursäkt, men du måste godkänna vårt avsägande för att bli registrerat.');
define('_US_NOREGISTER','Ursäkt, vi har för närvarande stängd för nya använder registreringar');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Användare aktiverings nyckel för %s');

define('_US_YOURREGISTERED','Du är nu registrerad. Ett e-brev innehållande en användare aktiverings nyckel är skickad till den e-post adress du lämnad. Vänligen följ instruktionerna i brevet för att aktivera ditt konto.');
define('_US_YOURREGMAILNG','Du är nu registrerad. Men, vi var förhindrad i att skicka aktiverings brev till din e-post adress p.g.av en inre fel att hade uppstått på våra server. Vi är ledsen för besvär, vänligen sända webmaster en e-post notificering till honom/henne och förklara situationen.');
define('_US_YOURREGISTERED2','Du är nu registrerad.  Vänligen vänta på att ditt konto blir aktiverad av en administratör.  Du kommer att få ett e-brev en gång du är aktiverad.  Detta kan ta en stund så vänligen ha tålamod.');

// %s is your site name
define('_US_NEWUSERREGAT','Ny användar registrering vid %s');
// %s is a username
define('_US_HASJUSTREG','%s har nyss registrerat sig!');

define('_US_INVALIDMAIL','FEL: Ogiltig e-post');
define('_US_EMAILNOSPACES','FEL: E-post adresser får inte innehålla mellanrum.');
define('_US_INVALIDNICKNAME','FEL: Ogiltig Användarnamn');
define('_US_NICKNAMETOOLONG','Användarnamn är för långt. Det måste vara mindre än %s tecken.');
define('_US_NICKNAMETOOSHORT','Användarnamn är för kort. Det måste vara mer än %s tecken.');
define('_US_NAMERESERVED','FEL: Namn är reserverade.');
define('_US_NICKNAMENOSPACES','Där kan inte vara mellanrum i Användarnamn.');
define('_US_NICKNAMETAKEN','FEL: Användarnamn taget.');
define('_US_EMAILTAKEN','ERROR: Email address already registered.');
define('_US_ENTERPWD','FEL: Du måste tillhandahålla ett lösenord.');
define('_US_SORRYNOTFOUND','Ledsen, inga motsvarande användare info var funnen.');




// %s is your site name
define('_US_NEWPWDREQ','Ny Lösenord Begäran vid %s');
define('_US_YOURACCOUNT','Din konto vid %s');

define('_US_MAILPWDNG','mail_password: kunde inte uppdatera användare inlägg. Kontakta Administratören');

// %s is a username
define('_US_PWDMAILED','Lösenord för %s skickat.');
define('_US_CONFMAIL','Bekräftelses brev för %s skickat.');
define('_US_ACTVMAILNG','Misslyckades sändande underrättelses brev till %s');
define('_US_ACTVMAILOK','Underrättelses brev till %s skickad.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Ingen Användare Vald! Vänligen gå tillbaka och prova igen.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Plats');
define('_US_OCCUPATION','Yrke');
define('_US_INTEREST','Intresse');
define('_US_SIGNATURE','Signatur');
define('_US_EXTRAINFO','Extra Info');
define('_US_EDITPROFILE','Redigera Profil');
define('_US_LOGOUT','Utloggning');
define('_US_INBOX','Inkorg');
define('_US_MEMBERSINCE','Medlem Sedan');
define('_US_RANK','Rang');
define('_US_POSTS','Kommentarer/Post');
define('_US_LASTLOGIN','Föregående Inloggning');
define('_US_ALLABOUT','Allt om %s');
define('_US_STATISTICS','Statistik');
define('_US_MYINFO','Min Info');
define('_US_BASICINFO','Grund information');
define('_US_MOREABOUT','Mer om Mig');
define('_US_SHOWALL','Vis Allt');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Riktig Namn');
define('_US_SHOWSIG','Alltid bifoga min signatur');
define('_US_CDISPLAYMODE','Kommentarer Visnings Läge');
define('_US_CSORTORDER','Kommentarer Sorterings Ordning');
define('_US_PASSWORD','Lösenord');
define('_US_TYPEPASSTWICE','(skriv ett nytt lösenord tvåfaldigt för att ändra det)');
define('_US_SAVECHANGES','Spara Ändringar');
define('_US_NOEDITRIGHT',"Ledsen, du har inte rätten att redigera denna användares info.");
define('_US_PASSNOTSAME','Båda lösenord är olika. De måste vara identiska.');
define('_US_PWDTOOSHORT','Ledsen, ditt lösenord måste vara åtminstone <strong>%s</strong> tecken långt.');
define('_US_PROFUPDATED','Din Profil Uppdaterad!');
define('_US_USECOOKIE','Förvara mitt användare namn i en kaka i 1 år');
define('_US_NO','Nej');
define('_US_DELACCOUNT','Ta bort Konto');
define('_US_MYAVATAR','Min Avatar');
define('_US_UPLOADMYAVATAR','Ladda upp Avatar');
define('_US_MAXPIXEL','Max Bildpunkter');
define('_US_MAXIMGSZ','Max Bild Storlek (Bytes)');
define('_US_SELFILE','Välj fil');
define('_US_OLDDELETED','Din gammal avatar kommer att bli raderad!');
define('_US_CHOOSEAVT','Välj avatar från tillgänglig lista');

define('_US_PRESSLOGIN','Tryck knappen nedan inloggning');

define('_US_ADMINNO','Användare i webmasters grupp kan inte tas bort');
define('_US_GROUPS','Användare\'s Grupper');

define('_US_REMEMBERME','Kom ihåg mig');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Välkommen till %s');

?>

