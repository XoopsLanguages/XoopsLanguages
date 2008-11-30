<?php
// $Id: user.php,v 1.10 2004/02/06 19:27:06 onokazu Exp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Niste registrirani?  Kliknite <a href=register.php>ovdje</a>.');
define('_US_LOSTPASSWORD','Izgubili ste lozinku?');
define('_US_NOPROBLEM','Nema problema! Jednostavno upi�ite email adresu koju ste naveli pri registraciji.');
define('_US_YOUREMAIL','Va� email: ');
define('_US_SENDPASSWORD','Po�alji lozinku');
define('_US_LOGGEDOUT','Sada ste odjavljeni');
define('_US_THANKYOUFORVISIT','Hvala vam na posjeti na�em portalu!');
define('_US_INCORRECTLOGIN','Neispravna prijava!');
define('_US_LOGGINGU','Hvala na prijavi, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Odabrani korisni�ki ra�un je deaktiviran ili jo� nije aktiviran.<br />Molim kontaktirajte administratora za detalje.');
define('_US_ACTKEYNOT','Aktivacijski klju� je neispravan!');
define('_US_ACONTACT','Izabrani korisni�ki ra�un se koristi!');
define('_US_ACTLOGIN','Va� korisni�ki ra�un je aktivan. Prijavite se sa lozinkom koju ste naveli pri registraciji.');
define('_US_NOPERMISS','Oprostite, nemate pristupa za izvr�avanjenje ove radnje!');
define('_US_SURETODEL','Sigurno �elite izbrisati svoj korisni�ki ra�un?');
define('_US_REMOVEINFO','Ovo �e ukloniti sve va�e podatke iz na�e baze podataka.');
define('_US_BEENDELED','Va� korisni�ki ra�un je izbrisan.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Registracija korisnika');
define('_US_NICKNAME','Korisni�ko ime');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Dopusti ostalim korisnicima da vide va�u email adresu');
define('_US_WEBSITE','Web stranica');
define('_US_TIMEZONE','Vremenska zona');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Ponovi lozinku');
define('_US_SUBMIT','Potvrdi');
define('_US_USERNAME','Korisni�ko ime');
define('_US_FINISH','Zavr�i');
define('_US_REGISTERNG','Ne mogu registrirati novog korisnika.');
define('_US_MAILOK','Primi povremene obavijesti<br /> od administratora i moderatora?');
define('_US_DISCLAIMER','Suzdr�avanje');
define('_US_IAGREE','Sla�em se s gore navedenim');
define('_US_UNEEDAGREE', 'Oprostite, morate se slagati s uvjetima za uspje�nu registraciju.');
define('_US_NOREGISTER','Oprostite, trenutno su onemogu�ene nove registracije');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktivacijski link za %s');

define('_US_YOURREGISTERED','Poruka s aktivacijskim linkom je poslana na upisanu adresu. Molimo vas, da slijedite upute u poruci za aktivaciju va�ega ra�una. ');
define('_US_YOURREGMAILNG','Sada ste registrirani, ali se na serveru pojavila gre�ka zbog koje vam nismo mogli poslali aktivacijski link. Ispri�avamo se za neugodnosti i molimo vas, da o tome obavijestite administratora stranice.');
define('_US_YOURREGISTERED2','Sada ste registrirani. Molimo, da pri�ekate administratora stranice, koji �e ru�no aktivirati va� ra�un. O tome �ete biti obavije�teni putem emaila. To mo�e potrajati, stoga vas molimo za strpljenje.');

// %s is your site name
define('_US_NEWUSERREGAT','Nova registracija korisnika %s');
// %s is a username
define('_US_HASJUSTREG','%s je upravo registriran!');

define('_US_INVALIDMAIL','GRE�KA: Neispravna email adresa');
define('_US_EMAILNOSPACES','GRE�KA: Email adresa ne mo�e sadr�avati razmake.');
define('_US_INVALIDNICKNAME','GRE�KA: Neispravno korisni�ko ime');
define('_US_NICKNAMETOOLONG','Korisni�ko ime je predugo. Mora sadr�avati manje od %s znakova.');
define('_US_NICKNAMETOOSHORT','Korisni�ko ime je prekratko. Mora sadr�avati vi�e od %s znakova.');
define('_US_NAMERESERVED','GRE�KA: Ime je zauzeto.');
define('_US_NICKNAMENOSPACES','Korisni�ko ime ne mo�e sadr�avati razmake.');
define('_US_NICKNAMETAKEN','GRE�KA: Korisni�ko ime je zauzeto.');
define('_US_EMAILTAKEN','GRE�KA: Email adresa je ve� u upotrbi.');
define('_US_ENTERPWD','GRE�KA: Morate upisati lozinku.');
define('_US_SORRYNOTFOUND','Oprostite, ne mo�emo prona�i informacije o korisniku.');




// %s is your site name
define('_US_NEWPWDREQ','Tra�enje nove lozinke od  %s');
define('_US_YOURACCOUNT', 'Va� ra�un na %s');

define('_US_MAILPWDNG','mail_lozinka: Ne mogu obnoviti nove podatke. Kontaktirajte Administratora');

// %s is a username
define('_US_PWDMAILED','Lozinka za %s je poslana.');
define('_US_CONFMAIL','Email s potvrdom za %s je poslan.');
define('_US_ACTVMAILNG', 'Oprostite, slanje korisni�ke informacije za %s nije uspjelo');
define('_US_ACTVMAILOK', 'Korisni�ke informacije za %s je poslana.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Niste izabrali korisnika! Molimo vas vratite se nazad i poku�ajte ponovo.');
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
define('_US_EDITPROFILE','Uredi ra�un');
define('_US_LOGOUT','Odjava');
define('_US_INBOX','Ulazna po�ta');
define('_US_MEMBERSINCE','�lan od');
define('_US_RANK','Rang');
define('_US_POSTS','Komentara/Objava');
define('_US_LASTLOGIN','Zadnja prijava');
define('_US_ALLABOUT','Sve o %s');
define('_US_STATISTICS','Statistika');
define('_US_MYINFO','Moje informacije');
define('_US_BASICINFO','Osnovne informacije');
define('_US_MOREABOUT','Vi�e o meni');
define('_US_SHOWALL','Prika�i sve');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Stvarno ime');
define('_US_SHOWSIG','Uvijek pri�vrsti moj potpis');
define('_US_CDISPLAYMODE','Na�in prikazivanja komentara');
define('_US_CSORTORDER','Redoslijed prikazivanja komentara');
define('_US_PASSWORD','Lozinka');
define('_US_TYPEPASSTWICE','(upi�ite novu lozinku dvaput, ako je �elite promijeniti)');
define('_US_SAVECHANGES','Spremi promjene');
define('_US_NOEDITRIGHT',"Oprostite, nemate prava za ure�ivanje postavke ovog korisnika.");
define('_US_PASSNOTSAME','Lozinke su me�usobno razli�ite. Poku�ajte ponovno.');
define('_US_PWDTOOSHORT','Oprostite, va�a lozinka mora sadr�avati barem <b>%s</b> znakova .');
define('_US_PROFUPDATED','Va� profil je obnovljen!');
define('_US_USECOOKIE','Spremite moje korisni�ko ime za 1 godinu');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Izbri�i ra�un');
define('_US_MYAVATAR', 'Moj avatar');
define('_US_UPLOADMYAVATAR', 'Upload avatara');
define('_US_MAXPIXEL','Maksimalno pixela');
define('_US_MAXIMGSZ','Maksimalna veli�ina slike avatara (Bajtova)');
define('_US_SELFILE','Izaberite datoteku');
define('_US_OLDDELETED','Va� stari avatar �e biti izbrisan!');
define('_US_CHOOSEAVT', 'Izaberite avatar iz raspolo�ive liste');

define('_US_PRESSLOGIN', 'Kliknite na tipku ispod za prijavu');

define('_US_ADMINNO', 'Korisnici u webmaster grupi ne mogu biti izbrisani');
define('_US_GROUPS', 'Korisni�ke grupe');
?>
