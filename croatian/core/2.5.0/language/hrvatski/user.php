<?php
// $Id: user.php 4897 2010-06-19 02:55:48Z phppp $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 25.1.2011.
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Niste registrirani?  Kliknite <a href=register.php>ovdje</a>.');
define('_US_LOSTPASSWORD','Izgubili ste lozinku?');
define('_US_NOPROBLEM','Nema problema. Jednostavno upišite email adresu koju ste naveli pri registraciji.');
define('_US_YOUREMAIL','Vaš email: ');
define('_US_SENDPASSWORD','Pošalji lozinku');
define('_US_LOGGEDOUT','Sada ste odjavljeni');
define('_US_THANKYOUFORVISIT','Hvala vam na posjeti našem portalu!');
define('_US_INCORRECTLOGIN','Neispravna prijava!');
define('_US_LOGGINGU','Hvala na prijavi, %s.');
// 2001-11-17 ADD
define('_US_NOACTTPADM','Odabrani korisnički račun je deaktiviran ili još nije aktiviran.<br />Molim kontaktirajte administratora za detalje.');
define('_US_ACTKEYNOT','Aktivacijski ključ je neispravan!');
define('_US_ACONTACT','Izabrani korisnički račun je već aktiviran!');
define('_US_ACTLOGIN','Vaš korisnički račun je aktivan. Prijavite se sa lozinkom koju ste naveli pri registraciji.');
define('_US_NOPERMISS','Oprostite, nemate pristupa za izvršavanje ove radnje!');
define('_US_SURETODEL','Da li sigurno želite izbrisati svoj korisnički račun?');
define('_US_REMOVEINFO','Ovo će ukloniti sve vaše podatke iz naše baze podataka.');
define('_US_BEENDELED','Vaš korisnički račun je izbrisan.');
define('_US_ACTFAILD','Aktivacija nije uspjela!');
//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Registracija korisnika');
define('_US_NICKNAME','Korisničko ime');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Dopusti ostalim korisnicima da vide vašu email adresu');
define('_US_WEBSITE','Web stranice');
define('_US_TIMEZONE','Vremenska zona');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Ponovi lozinku');
define('_US_SUBMIT','Potvrdi');
define('_US_USERNAME','Korisničko ime');
define('_US_FINISH','Završi');
define('_US_REGISTERNG','Ne mogu registrirati novog korisnika.');
define('_US_MAILOK','Primi povremene obavijesti<br /> od administratora i moderatora?');
define('_US_DISCLAIMER','Pridržavanje');
define('_US_IAGREE','Slažem se s gore navedenim');
define('_US_UNEEDAGREE', 'Oprostite, morate se slagati s uvjetima za uspješnu registraciju.');
define('_US_NOREGISTER','Oprostite, trenutno su onemogućene nove registracije');
// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktivacijski link za %s');
define('_US_YOURREGISTERED','Sad ste registrirani. Email s aktivacijskim linkom je poslan na upisanu adresu. Molimo vas, da slijedite upute u email poruci za aktivaciju vašega računa. ');
define('_US_YOURREGMAILNG','Sada ste registrirani. Ipak, na poslužitelju se pojavila greška zbog koje vam nismo mogli poslali aktivacijski email na vašu email adresu. Ispričavamo se zbog neugodnosti i molimo vas, da o tome obavijestite administratora stranice.');
define('_US_YOURREGISTERED2','Sada ste registrirani. Molimo, pričekajte da administrator stranice aktivira vaš račun. O tome ćete biti obaviješteni putem emaila.  To može potrajati, stoga vas molimo za strpljenje.');
// %s is your site name
define('_US_NEWUSERREGAT','Nova registracija korisnika na %s');
// %s is a username
define('_US_HASJUSTREG','%s je upravo registriran!');
define('_US_INVALIDMAIL','GREŠKA: Neispravna email adresa');
define('_US_EMAILNOSPACES','GREŠKA: Email adresa ne može sadržavati razmake.');
define('_US_INVALIDNICKNAME','GREŠKA: Neispravno korisničko ime');
define('_US_NICKNAMETOOLONG','Korisničko ime je predugo. Mora sadržavati manje od %s znakova.');
define('_US_NICKNAMETOOSHORT','Korisničko ime je prekratko. Mora sadržavati više od %s znakova.');
define('_US_NAMERESERVED','GREŠKA: Ime je rezervirano.');
define('_US_NICKNAMENOSPACES','Korisničko ime ne može sadržavati razmake.');
define('_US_NICKNAMETAKEN','GREŠKA: Korisničko ime je zauzeto.');
define('_US_EMAILTAKEN','GREŠKA: Email adresa je već u upotrebi.');
define('_US_ENTERPWD','GREŠKA: Morate upisati lozinku.');
define('_US_SORRYNOTFOUND','Oprostite, ne možemo pronaći informacije o korisniku.');
// %s is your site name
define('_US_NEWPWDREQ','Traženje nove lozinke na %s');
define('_US_YOURACCOUNT', 'Vaš korisnički račun na %s');
define('_US_MAILPWDNG','mail_lozinka: Ne mogu ažurirati nove podatke. Kontaktirajte Administratora');
// %s is a username
define('_US_PWDMAILED','Lozinka za %s je poslana.');
define('_US_CONFMAIL','Email s potvrdom za %s je poslan.');
define('_US_ACTVMAILNG', 'Oprostite, slanje obaviještajnog emaila za %s nije uspjelo');
define('_US_ACTVMAILOK', 'Email obavijesti za %s je poslan.');
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
define('_US_EDITPROFILE','Uredi račun');
define('_US_LOGOUT','Odjava');
define('_US_INBOX','Ulazna pošta');
define('_US_MEMBERSINCE','Član od');
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
define('_US_SHOWSIG','Uvijek dodaj moj potpis');
define('_US_CDISPLAYMODE','Način prikazivanja komentara');
define('_US_CSORTORDER','Redoslijed prikazivanja komentara');
define('_US_PASSWORD','Lozinka');
define('_US_TYPEPASSTWICE','(upišite novu lozinku dva puta ako je želite promijeniti)');
define('_US_SAVECHANGES','Spremi promjene');
define('_US_NOEDITRIGHT',"Oprostite, nemate prava za uređivanje postavki ovog korisnika.");
define('_US_PASSNOTSAME','Lozinke su međusobno različite. Moraju biti identične.');
define('_US_PWDTOOSHORT','Oprostite, vaša lozinka mora sadržavati barem <strong>%s</strong> znakova .');
define('_US_PROFUPDATED','Vaš profil je ažuriran!');
define('_US_USECOOKIE','Spremi moje korisničko ime u kolačić za 1 godinu');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Izbriši račun');
define('_US_MYAVATAR', 'Moj avatar');
define('_US_UPLOADMYAVATAR', 'Upload avatara');
define('_US_MAXPIXEL','Maksimalno pixela');
define('_US_MAXIMGSZ','Maksimalna veličina slike avatara (Bajtova)');
define('_US_SELFILE','Izaberite datoteku');
define('_US_OLDDELETED','Vaš stari avatar će biti izbrisan!');
define('_US_CHOOSEAVT', 'Izaberite avatar iz raspoložive liste');
define('_US_PRESSLOGIN', 'Kliknite na tipku ispod za prijavu');
define('_US_ADMINNO', 'Korisnici u webmaster grupi ne mogu biti izbrisani');
define('_US_GROUPS', 'Korisničke grupe');
define('_US_REMEMBERME', 'Zapamti me');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Dobro došli na %s');

?>