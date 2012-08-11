<?php
// $Id$
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Anders Kristiansen (anderssk) 
defined('XOOPS_ROOT_PATH') or die('Begrænset adgang');

//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Ikke Registreret?  Klik <a href="register.php">her</a>.');
define('_US_LOSTPASSWORD','Glemt dit password?');
define('_US_NOPROBLEM','Ingen problem. Indtast den email som du bruger til din konto her.');
define('_US_YOUREMAIL','Din email: ');
define('_US_SENDPASSWORD','Send password');
define('_US_LOGGEDOUT','Du er nu logget ud');
define('_US_THANKYOUFORVISIT','Tak for dit besøg!');
define('_US_INCORRECTLOGIN','Ugyldigt Log ind!');
define('_US_LOGGINGU','Tak fordi du loggede ind %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Den valgte bruger er deaktiveret eller ikke blevet aktiveret endnu.<br />Kontakt administrator for detaljer.');
define('_US_ACTKEYNOT','Aktiverings kode ikke korrekt!');
define('_US_ACONTACT','Valgte konto er allerede aktiveret!');
define('_US_ACTLOGIN','Din konto er aktiveret log ind med dit password.');
define('_US_NOPERMISS','Beklager men du har ikke tilladelse til at udfører denne handling!');
define('_US_SURETODEL','Er du sikker på du vil slette din konto?');
define('_US_REMOVEINFO','Dette vil fjerne alt fra vores database.');
define('_US_BEENDELED','Din konto er slettet.');
define('_US_ACTFAILD','Aktivering fejlet!');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Bruger registrering');
define('_US_NICKNAME','Brugernavn');
define('_US_EMAIL','E-mail');
define('_US_ALLOWVIEWEMAIL','Tillad andre brugere at se min email adresse');
define('_US_WEBSITE','Hjemmeside');
define('_US_TIMEZONE','Time Zone');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Gentag password');
define('_US_SUBMIT','Godkend');
define('_US_USERNAME','Brugernavn');
define('_US_FINISH','Færdig');
define('_US_REGISTERNG','Kunne ikke oprette ny bruger');
define('_US_MAILOK','Modtag emails fra administrator ved specielle lejligheder? <br />');
define('_US_DISCLAIMER','Ansvarsfraskrivelse ');
define('_US_IAGREE','Jeg accepterer ovenstående');
define('_US_UNEEDAGREE','Du skal accepterer ansvarsfraskrivelsen for at blive oprettet');
define('_US_NOREGISTER','Desværre er der pt. lukket for nye brugere');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktiveringsnøgler for %s');

define('_US_YOURREGISTERED','En e-mail med aktiveringsnøgle er sendt til den e-mail du har registreret dig med.');
define('_US_YOURREGMAILNG','Du er nu registreret. Men vi var ikke istand til at sende en email med aktiveringsnøgle til din email pga en intern fejl der er opstået på vores server. Vi beklager dette, send venligt en email til webmaster der forklarer problemet.');
define('_US_YOURREGISTERED2','Du er nu registreret.  Afvent at din konto bliver aktiveret af adminstratoren.  Du vil modtage en email når kontoen er aktiveret.  Dette kan tage et stykke tid så vær tålmodig.');

// %s is your site name
define('_US_NEWUSERREGAT','Ny bruger registrering ved %s');
// %s is a username
define('_US_HASJUSTREG','%s har lige registreret sig!');

define('_US_INVALIDMAIL','FEJL: Ugyldig e-mail');
define('_US_EMAILNOSPACES','FEJL: E-mail addesser indeholder ikke mellemrum.');
define('_US_INVALIDNICKNAME','FEJL: Ugyldig bruger navn');
define('_US_NICKNAMETOOLONG','Brugernavn er for langt, skal være mindre end %s karakterer.');
define('_US_NICKNAMETOOSHORT','Brugernavn er for kort, skal være større end %s karakterer.');
define('_US_NAMERESERVED','FEJL: Navnet er reserveret');
define('_US_NICKNAMENOSPACES','Der kan ikke være mellemrum i brugernavn');
define('_US_NICKNAMETAKEN','FEJL: Brugernavn optaget');
define('_US_EMAILTAKEN','FEJL: E-mail adressen er i brug');
define('_US_ENTERPWD','FEJL: Du skal indtaste et password');
define('_US_SORRYNOTFOUND','Beklager, men ingen bruger fundet.');




// %s is your site name
define('_US_NEWPWDREQ','Nyt Password forspørgsel ved %s');
define('_US_YOURACCOUNT','Din konto hos %s');

define('_US_MAILPWDNG','mail_password: kunne ikke opdatere bruger - Kontakt administrator');

// %s is a username
define('_US_PWDMAILED','Password til %s sendt.');
define('_US_CONFMAIL','Bekræftigelses Mail til %s er sendt.');
define('_US_ACTVMAILNG','Fejl ved afsendelse af meddelelses mail til %s');
define('_US_ACTVMAILOK','Meddelelses mail til %s sendt.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Ingen bruger valgt. Gå tilbage og prøv igen.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Bopæl');
define('_US_OCCUPATION','Beskæftigelse');
define('_US_INTEREST','Interesse');
define('_US_SIGNATURE','Signature');
define('_US_EXTRAINFO','Ekstra information');
define('_US_EDITPROFILE','Rediger profil');
define('_US_LOGOUT','Log ud');
define('_US_INBOX','Indbakke');
define('_US_MEMBERSINCE','Medlem siden');
define('_US_RANK','Rank');
define('_US_POSTS','Kommentarer/Indlæg');
define('_US_LASTLOGIN','Sidste logon');
define('_US_ALLABOUT','Alt om %s');
define('_US_STATISTICS','Statistik');
define('_US_MYINFO','Min information');
define('_US_BASICINFO','Basal information');
define('_US_MOREABOUT','Mere om mig');
define('_US_SHOWALL','Vis alt');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Rigtige navn');
define('_US_SHOWSIG','Vedhæft altid min signatur');
define('_US_CDISPLAYMODE','Kommentar display mode');
define('_US_CSORTORDER','Sorterings orden for kommentarer');
define('_US_PASSWORD','Password');
define('_US_TYPEPASSTWICE','(Indtast et nyt password to gange for at ændrer det)');
define('_US_SAVECHANGES','Gem ændringer');
define('_US_NOEDITRIGHT','Beklager, men du har ikke tilladelse til at rette denne bruger profil.');
define('_US_PASSNOTSAME','Passwords er ikke ens, det skal de være.');
define('_US_PWDTOOSHORT','Beklager, dit password skal være mindst <strong>%s</strong> karaktere langt.');
define('_US_PROFUPDATED','Din profil er opdateret!');
define('_US_USECOOKIE','Gem mit bruger navn i en cookie i et år');
define('_US_NO','Nej');
define('_US_DELACCOUNT','Slet min konto');
define('_US_MYAVATAR','Min Avatar');
define('_US_UPLOADMYAVATAR','Upload Avatar');
define('_US_MAXPIXEL','Max Pixels');
define('_US_MAXIMGSZ','Max billede størrelse (Bytes)');
define('_US_SELFILE','Vælg fil');
define('_US_OLDDELETED','Din gammle avatar vil blive slettet!');
define('_US_CHOOSEAVT','Vælg en avatar fra listen');

define('_US_PRESSLOGIN','Tryk på kappen herunder for at logge ind');

define('_US_ADMINNO','Bruger i administrator gruppen kan ikke fjernes');
define('_US_GROUPS','Bruger\'s Grupper');

define('_US_REMEMBERME','Husk mig');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Velkommen til %s');

?>
