<?php
// $Id: user.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Ikke registrert?  Klikk <a href="register.php">her</a>.');
define('_US_LOSTPASSWORD','Mistet passordet?');
define('_US_NOPROBLEM','Ingen problem. Bare skriv epost adressen du har knyttet til kontoen .');
define('_US_YOUREMAIL','Din epost: ');
define('_US_SENDPASSWORD','Send passord');
define('_US_LOGGEDOUT','Du er nå logget ut');
define('_US_THANKYOUFORVISIT','Takk for besøket!');
define('_US_INCORRECTLOGIN','Feil med innlogg!');
define('_US_LOGGINGU','Takk for at du logget inn, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Valgte bruker er deaktivert eller ikke aktivert ennå.<br />Vennligst kontakt administrator for detaljer.');
define('_US_ACTKEYNOT','Aktiviseringsnøkkelen er ikke korrekt!');
define('_US_ACONTACT','Valgte konto er allerede aktivert!');
define('_US_ACTLOGIN','Din konto er aktivert. Du kan nå logge inn.');
define('_US_NOPERMISS','Beklager, du kan ikke utføre denne handlingen!');
define('_US_SURETODEL','Er du sikker på at du vil slette denne kontoen?');
define('_US_REMOVEINFO','Dette vil fjerne all din informasjon fra databasen.');
define('_US_BEENDELED','Din konto er slettet.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Brukerregistrering');
define('_US_NICKNAME','Brukernavn');
define('_US_EMAIL','Epost');
define('_US_ALLOWVIEWEMAIL','Tillat andre å se min epostadresse');
define('_US_WEBSITE','Hjemmeside');
define('_US_TIMEZONE','Tidssone');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Bekreft passord');
define('_US_SUBMIT','Send');
define('_US_USERNAME','Brukernavn');
define('_US_FINISH','Ferdig');
define('_US_REGISTERNG','Kunne ikke registrere ny bruker.');
define('_US_MAILOK','Motta epost <br />fra administratorer og moderatorer?');
define('_US_DISCLAIMER','Ansvarsfraskrivelse');
define('_US_IAGREE','Jeg godtar det ovenforstående');
define('_US_UNEEDAGREE','Beklager, du må godta vår anvarsfraskrivelse for å registrere deg.');
define('_US_NOREGISTER','Beklager, vi har for øyeblikket stengt for nye brukerregistreringer.');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktiveringsnøkkel for %s');

define('_US_YOURREGISTERED','En epost med aktiveringsnøkkel er sendt til den epost du har registrert. Følg instruksjonene for å aktivere kontoen.');
define('_US_YOURREGMAILNG','Du er nå registrert. Men vi var ikke i stand til å sende en epost med aktiveringsnøkkel til din epost pga en intern feil som er oppstått på vår server. Vi beklager dette, venligst send en epost til administator og forklar problemet.');
define('_US_YOURREGISTERED2','Du er nå registrert.  Vent til din konto blir aktivert av adminstratoren.  Du vil motta en epost når kontoen er aktivert.  Dette kan ta stund så vær tålmodig...');

// %s is your site name
define('_US_NEWUSERREGAT','Ny brukerregistrering hos %s');
// %s is a username
define('_US_HASJUSTREG','%s har akkurat registrert seg!');

define('_US_INVALIDMAIL','FEIL: Feil epost');
define('_US_EMAILNOSPACES','FEIL: Du kan ikke bruke mellomrom i epost adresser.');
define('_US_INVALIDNICKNAME','FEIL: Feil brukernavn');
define('_US_NICKNAMETOOLONG','Brukernavnet er for langt. Det må være kortere enn %s tegn.');
define('_US_NICKNAMETOOSHORT','Brukernavnet er for kort. Det må være minst %s tegn.');
define('_US_NAMERESERVED','FEIL: Navnet er reservert.');
define('_US_NICKNAMENOSPACES','Du kan ikke bruke mellomrom i brukernavnet.');
define('_US_NICKNAMETAKEN','FEIL: Navnet er brukt.');
define('_US_EMAILTAKEN','FEIL: Epostadressen er allerede brukt.');
define('_US_ENTERPWD','FEIL: Du må skrive et passord.');
define('_US_SORRYNOTFOUND','Beklager, ingen brukerinfo funnet.');




// %s is your site name
define('_US_NEWPWDREQ','Ny passord-forespørsel hos %s');
define('_US_YOURACCOUNT','Din konto hos %s');

define('_US_MAILPWDNG','post_passord: kunne ikke oppdatere bruker. Kontakt administrator');

// %s is a username
define('_US_PWDMAILED','Passordet sendt til %s .');
define('_US_CONFMAIL','Bekreftelse sendt til %s .');
define('_US_ACTVMAILNG','Feil ved sending av varsling til %s');
define('_US_ACTVMAILOK','Varsling sendt til %s .');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Ingen bruker valgt! Gå tilbake og prøv igjen.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Sted');
define('_US_OCCUPATION','Yrke');
define('_US_INTEREST','Interesser');
define('_US_SIGNATURE','Signatur');
define('_US_EXTRAINFO','Ekstra Info');
define('_US_EDITPROFILE','Rediger Profilen');
define('_US_LOGOUT','Logg Ut');
define('_US_INBOX','Innboks');
define('_US_MEMBERSINCE','Medlem siden');
define('_US_RANK','Rang');
define('_US_POSTS','Kommentarer/Innlegg');
define('_US_LASTLOGIN','Sist innlogget');
define('_US_ALLABOUT','Alt om %s');
define('_US_STATISTICS','Statistikker');
define('_US_MYINFO','Min Info');
define('_US_BASICINFO','Basisinformasjon');
define('_US_MOREABOUT','Mer om meg');
define('_US_SHOWALL','Vis alt');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Virkelig navn');
define('_US_SHOWSIG','Legg alltid ved signatur!');
define('_US_CDISPLAYMODE','Visningsmodus for kommentarer');
define('_US_CSORTORDER','Sorteringsrekkefølge for kommentarer');
define('_US_PASSWORD','Passord');
define('_US_TYPEPASSTWICE','(skriv det nye passordet to ganger for å endre det)');
define('_US_SAVECHANGES','Lagre endringer');
define('_US_NOEDITRIGHT',"Beklager, du har ikke tillatelse til å endre brukerens info.");
define('_US_PASSNOTSAME','Passordene er forskjellige. De må være helt like.');
define('_US_PWDTOOSHORT','Beklager, passordet må være minst <strong>%s</strong> tegn.');
define('_US_PROFUPDATED','Profilen er oppdatert!');
define('_US_USECOOKIE','Legg brukernavnet mitt i en informasjonskapsel (cookie) i 1 år.');
define('_US_NO','Nei');
define('_US_DELACCOUNT','Slett kontoen');
define('_US_MYAVATAR','Min Avatar');
define('_US_UPLOADMYAVATAR','Last opp Avatar');
define('_US_MAXPIXEL','Maks Piksler');
define('_US_MAXIMGSZ','Maks bildestørrelse (Bytes)');
define('_US_SELFILE','Velg fil');
define('_US_OLDDELETED','Ditt nåværende avatar vil bli slettet!');
define('_US_CHOOSEAVT','Velg et avatar fra listen');

define('_US_PRESSLOGIN','Klikk knappen nedenfor for å logge inn');

define('_US_ADMINNO','Brukere i webmasters gruppen kan ikke fjernes');
define('_US_GROUPS','Brukere\Grupper');

define('_US_REMEMBERME','Husk meg!');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Velkommen til %s');

?>