<?php
// $Id: user.php,v 1.10 2004/02/06 19:27:06 onokazu Exp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Niste registrirani?  Kliknite <a href=register.php>ovdje</a>.');
define('_US_LOSTPASSWORD','Izgubili ste lozinku?');
define('_US_NOPROBLEM','Nema problema! Jednostavno upišite email adresu koju ste naveli pri registraciji.');
define('_US_YOUREMAIL','Vaš email: ');
define('_US_SENDPASSWORD','Pošalji lozinku');
define('_US_LOGGEDOUT','Sada ste odjavljeni');
define('_US_THANKYOUFORVISIT','Hvala vam na posjeti našem portalu!');
define('_US_INCORRECTLOGIN','Neispravna prijava!');
define('_US_LOGGINGU','Hvala na prijavi, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Odabrani korisnièki raèun je deaktiviran ili još nije aktiviran.<br />Molim kontaktirajte administratora za detalje.');
define('_US_ACTKEYNOT','Aktivacijski kljuè je neispravan!');
define('_US_ACONTACT','Izabrani korisnièki raèun se koristi!');
define('_US_ACTLOGIN','Vaš korisnièki raèun je aktivan. Prijavite se sa lozinkom koju ste naveli pri registraciji.');
define('_US_NOPERMISS','Oprostite, nemate pristupa za izvršavanjenje ove radnje!');
define('_US_SURETODEL','Sigurno želite izbrisati svoj korisnièki raèun?');
define('_US_REMOVEINFO','Ovo æe ukloniti sve vaše podatke iz naše baze podataka.');
define('_US_BEENDELED','Vaš korisnièki raèun je izbrisan.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Registracija korisnika');
define('_US_NICKNAME','Korisnièko ime');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Dopusti ostalim korisnicima da vide vašu email adresu');
define('_US_WEBSITE','Web stranica');
define('_US_TIMEZONE','Vremenska zona');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Ponovi lozinku');
define('_US_SUBMIT','Potvrdi');
define('_US_USERNAME','Korisnièko ime');
define('_US_FINISH','Završi');
define('_US_REGISTERNG','Ne mogu registrirati novog korisnika.');
define('_US_MAILOK','Primi povremene obavijesti<br /> od administratora i moderatora?');
define('_US_DISCLAIMER','Suzdržavanje');
define('_US_IAGREE','Slažem se s gore navedenim');
define('_US_UNEEDAGREE','Oprostite, morate se slagati s uvjetima za uspješnu registraciju.');
define('_US_NOREGISTER','Oprostite, trenutno su onemoguèene nove registracije');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktivacijski link za %s');

define('_US_YOURREGISTERED','Poruka s aktivacijskim linkom je poslana na upisanu adresu. Molimo vas, da slijedite upute u poruci za aktivaciju vašega raèuna. ');
define('_US_YOURREGMAILNG','Sada ste registrirani, ali se na serveru pojavila greška zbog koje vam nismo mogli poslali aktivacijski link. Isprièavamo se za neugodnosti i molimo vas, da o tome obavijestite administratora stranice.');
define('_US_YOURREGISTERED2','Sada ste registrirani. Molimo, da prièekate administratora stranice, koji æe ruèno aktivirati vaš raèun. O tome æete biti obaviješteni putem emaila. To može potrajati, stoga vas molimo za strpljenje.');

// %s is your site name
define('_US_NEWUSERREGAT','Nova registracija korisnika %s');
// %s is a username
define('_US_HASJUSTREG','%s je upravo registriran!');

define('_US_INVALIDMAIL','GREŠKA: Neispravna email adresa');
define('_US_EMAILNOSPACES','GREŠKA: Email adresa ne može sadržavati razmake.');
define('_US_INVALIDNICKNAME','GREŠKA: Neispravno korisnièko ime');
define('_US_NICKNAMETOOLONG','Korisnièko ime je predugo. Mora sadržavati manje od %s znakova.');
define('_US_NICKNAMETOOSHORT','Korisnièko ime je prekratko. Mora sadržavati više od %s znakova.');
define('_US_NAMERESERVED','GREŠKA: Ime je zauzeto.');
define('_US_NICKNAMENOSPACES','Korisnièko ime ne može sadržavati razmake.');
define('_US_NICKNAMETAKEN','GREŠKA: Korisnièko ime je zauzeto.');
define('_US_EMAILTAKEN','GREŠKA: Email adresa je veæ u upotrbi.');
define('_US_ENTERPWD','GREŠKA: Morate upisati lozinku.');
define('_US_SORRYNOTFOUND','Oprostite, ne možemo pronaæi informacije o korisniku.');




// %s is your site name
define('_US_NEWPWDREQ','Traženje nove lozinke od  %s');
define('_US_YOURACCOUNT','Vaš raèun na %s');

define('_US_MAILPWDNG','mail_lozinka: Ne mogu obnoviti nove podatke. Kontaktirajte Administratora');

// %s is a username
define('_US_PWDMAILED','Lozinka za %s je poslana.');
define('_US_CONFMAIL','Email s potvrdom za %s je poslan.');
define('_US_ACTVMAILNG','Oprostite, slanje korisnièke informacije za %s nije uspjelo');
define('_US_ACTVMAILOK','Korisnièke informacije za %s je poslana.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Niste izabrali korisnika! Molimo vas vratite se nazad i pokušajte ponovo.');
define('_US_PM','PP');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Lokacija');
define('_US_OCCUPATION','Zanimanje');
define('_US_INTEREST','Interesi');
define('_US_SIGNATURE','Potpis');
define('_US_EXTRAINFO','Dodatne informacije');
define('_US_EDITPROFILE','Uredi raèun');
define('_US_LOGOUT','Odjava');
define('_US_INBOX','Ulazna pošta');
define('_US_MEMBERSINCE','Èlan od');
define('_US_RANK','Rang');
define('_US_POSTS','Komentara/Objava');
define('_US_LASTLOGIN','Zadnja prijava');
define('_US_ALLABOUT','Sve o %s');
define('_US_STATISTICS','Statistika');
define('_US_MYINFO','Moje informacije');
define('_US_BASICINFO','Osnovne informacije');
define('_US_MOREABOUT','Više o meni');
define('_US_SHOWALL','Prikaži sve');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Stvarno ime');
define('_US_SHOWSIG','Uvijek prièvrsti moj potpis');
define('_US_CDISPLAYMODE','Naèin prikazivanja komentara');
define('_US_CSORTORDER','Redoslijed prikazivanja komentara');
define('_US_PASSWORD','Lozinka');
define('_US_TYPEPASSTWICE','(upišite novu lozinku dvaput, ako je želite promijeniti)');
define('_US_SAVECHANGES','Spremi promjene');
define('_US_NOEDITRIGHT',"Oprostite, nemate prava za ureðivanje postavke ovog korisnika.");
define('_US_PASSNOTSAME','Lozinke su meðusobno razlièite. Pokušajte ponovno.');
define('_US_PWDTOOSHORT','Oprostite, vaša lozinka mora sadržavati barem <b>%s</b> znakova .');
define('_US_PROFUPDATED','Vaš profil je obnovljen!');
define('_US_USECOOKIE','Spremite moje korisnièko ime za 1 godinu');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Izbriši raèun');
define('_US_MYAVATAR','Moj avatar');
define('_US_UPLOADMYAVATAR','Upload avatara');
define('_US_MAXPIXEL','Maksimalno pixela');
define('_US_MAXIMGSZ','Maksimalna velièina slike avatara (Bajtova)');
define('_US_SELFILE','Izaberite datoteku');
define('_US_OLDDELETED','Vaš stari avatar æe biti izbrisan!');
define('_US_CHOOSEAVT','Izaberite avatar iz raspoložive liste');

define('_US_PRESSLOGIN','Kliknite na tipku ispod za prijavu');

define('_US_ADMINNO','Korisnici u webmaster grupi ne mogu biti izbrisani');
define('_US_GROUPS','Korisnièke grupe');
?>
