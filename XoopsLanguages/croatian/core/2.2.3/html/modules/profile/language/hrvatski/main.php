<?php
// $Id: main.php,v 1.1.2.13.2.2 2005/09/26 15:07:47 mithyt2 Exp $
define("_PROFILE_MA_ERRORDURINGSAVE","Greška prilikom spremanja");
define('_PROFILE_MA_USERREG','Registracija korisnika!');
define('_PROFILE_MA_NICKNAME','Korisnièko ime');
define('_PROFILE_MA_REALNAME','Stvarno ime');
define('_PROFILE_MA_EMAIL','Email');
define('_PROFILE_MA_ALLOWVIEWEMAIL','Dopusti ostalim  korisnicima da vide vašu email adresu');
define('_PROFILE_MA_TIMEZONE','Vremenska zona');
define('_PROFILE_MA_AVATAR','Avatar');
define('_PROFILE_MA_VERIFYPASS','Ponovi lozinku');
define('_PROFILE_MA_SUBMIT','Potvrdi');
define('_PROFILE_MA_USERNAME','Korisnièko ime');
define('_PROFILE_MA_FINISH','Završi');
define('_PROFILE_MA_REGISTERNG','Ne mogu registrirati novog korisnika.');
define('_PROFILE_MA_MAILOK','Primi povremene obavijesti<br /> od administratora i moderatora?');
define('_PROFILE_MA_DISCLAIMER','Suzdržavanje');
define('_PROFILE_MA_IAGREE','Slažem se s gore navedenim');
define('_PROFILE_MA_UNEEDAGREE','Oprostite, morate se slagati s uvjetima za uspješnu registraciju.');
define('_PROFILE_MA_NOREGISTER','Oprostite, trenutno su onemoguèene nove registracije');

// %s is username. This is a subject for email
define('_PROFILE_MA_USERKEYFOR','Aktivacijski link za %s');
define('_PROFILE_MA_ACTLOGIN','Vaš raèun je aktiviran. Molimo prijavi te se sa lozinkom koju ste naveli pri registraciji.');
define('_PROFILE_MA_ACTKEYNOT','Neispravan aktivaciski link!');
define('_PROFILE_MA_ACONTACT','Izabrani raèun je veæ aktivan!');

define('_PROFILE_MA_YOURREGISTERED','Poruka s aktivacijskim linkom je poslana na upisanu adresu. Molimo vas, da slijedite upute u poruci za aktivaciju vašega raèuna. ');
define('_PROFILE_MA_YOURREGMAILNG','Sada ste registrirani, ali se na serveru pojavila greška zbog koje vam nismo mogli poslali aktivacijski link. Isprièavamo se za neugodnosti i molimo vas, da o tome obavijestite administratora stranice.');
define('_PROFILE_MA_YOURREGISTERED2','Sada ste registrirani. Molimo, da prièekate administratora stranice, koji æe ruèno aktivirati vaš raèun. O tome æete biti obaviješteni putem emaila. To može potrajati, stoga vas molimo za strpljenje.');

// %s is your site name
define('_PROFILE_MA_NEWUSERREGAT','Nova registracija korisnika %s');
// %s is a username
define('_PROFILE_MA_HASJUSTREG','%s je upravo registriran!');

define('_PROFILE_MA_INVALIDMAIL','GREŠKA: Nepostojeæa email adresa');
define('_PROFILE_MA_EMAILNOSPACES','GREŠKA: Email adresa ne može sadržavati razmake.');
define('_PROFILE_MA_INVALIDNICKNAME','GREŠKA: Neispravno korisnièko ime');
define("_PROFILE_MA_INVALIDDISPLAYNAME","GREŠKA: Neispravan nadimak");
define('_PROFILE_MA_NICKNAMETOOLONG','Korisnièko ime je predugo. Mora sadržavati manje od %s znakova.');
define('_PROFILE_MA_DISPLAYNAMETOOLONG','Nadimak je predugi. Mora sadržavati manje od %s znakova.');
define('_PROFILE_MA_NICKNAMETOOSHORT','Korisnièko ime je prekratko. Mora sadržavati više od %s znakova.');
define('_PROFILE_MA_DISPLAYNAMETOOSHORT','Nadimak je prekratak. Mora sadržavati više od %s znakova.');
define('_PROFILE_MA_NAMERESERVED','GREŠKA: Ime je zauzeto.');
define('_PROFILE_MA_DISPLAYNAMERESERVED','GREŠKA: Nadimak je zauzeti.');
define('_PROFILE_MA_NICKNAMENOSPACES','Korisnièko ime ne može sadržavati razmake.');
define('_PROFILE_MA_DISPLAYNAMENOSPACES','Nadimak ne može sadržavati razmake.');
define('_PROFILE_MA_NICKNAMETAKEN','GREŠKA: Korisnièko ime je zauzeto.');
define('_PROFILE_MA_DISPLAYNAMETAKEN','GREŠKA: Nadimak je zauzeti.');
define('_PROFILE_MA_EMAILTAKEN','GREŠKA: Email adresa je veæ u upotrebi.');
define('_PROFILE_MA_ENTERPWD','GREŠKA: Morate upisati lozinku.');
define('_PROFILE_MA_SORRYNOTFOUND','Oprostite, ne možemo pronaæi informacije o korisniku.');
define("_PROFILE_MA_WRONGPASSWORD","GREŠKA: Neispravna lozinka");
define("_PROFILE_MA_USERALREADYACTIVE","Korisnik s email adresom %s je veæ aktiviran");

// %s is your site name
define('_PROFILE_MA_YOURACCOUNT','Vaš raèun na %s');

// %s is a username
define('_PROFILE_MA_ACTVMAILNG','Greška tijekom slanja obavijesti za %s');
define('_PROFILE_MA_ACTVMAILOK','Obavijest uspješno poslana za %s .');

define("_PROFILE_MA_DEFAULT","Zadane postavke");

//%%%%%%		File Name userinfo.php 		%%%%%
define('_PROFILE_MA_SELECTNG','Niste izabrali korisnika! Molimo vas vratite se nazad i pokušajte ponovo.');
define('_PROFILE_MA_PM','PP');
define('_PROFILE_MA_ICQ','ICQ');
define('_PROFILE_MA_AIM','AIM');
define('_PROFILE_MA_YIM','YIM');
define('_PROFILE_MA_MSNM','MSNM');
define('_PROFILE_MA_LOCATION','Lokacija');
define('_PROFILE_MA_OCCUPATION','Zanimanje');
define('_PROFILE_MA_INTEREST','Interesi');
define('_PROFILE_MA_SIGNATURE','Potpis');
define('_PROFILE_MA_EXTRAINFO','Dodatne informacije');
define('_PROFILE_MA_EDITPROFILE','Uredi raèun');
define('_PROFILE_MA_LOGOUT','Odjava');
define('_PROFILE_MA_INBOX','Ulazna pošta');
define('_PROFILE_MA_MEMBERSINCE','Èlan od');
define('_PROFILE_MA_RANK','Rang');
define('_PROFILE_MA_POSTS','Komentara/Objava');
define('_PROFILE_MA_LASTLOGIN','Zadnja prijava');
define('_PROFILE_MA_ALLABOUT','Sve o %s');
define('_PROFILE_MA_STATISTICS','Statistika');
define('_PROFILE_MA_MYINFO','Moje informacije');
define('_PROFILE_MA_BASICINFO','Osnovne informacije');
define('_PROFILE_MA_MOREABOUT','Više o meni');
define('_PROFILE_MA_SHOWALL','Prikaži sve');

//%%%%%%		File Name edituser.php 		%%%%%
define('_PROFILE_MA_PROFILE','Profil');
define('_PROFILE_MA_DISPLAYNAME','Nadimak');
define('_PROFILE_MA_SHOWSIG','Uvijek prièvrsti moj potpis');
define('_PROFILE_MA_CDISPLAYMODE','Naèin prikazivanja komentara');
define('_PROFILE_MA_CSORTORDER','Redoslijed prikazivanja komentara');
define('_PROFILE_MA_PASSWORD','Lozinka');
define('_PROFILE_MA_TYPEPASSTWICE','(upišite novu lozinku dvaput, ako je želite promijeniti)');
define('_PROFILE_MA_SAVECHANGES','Spremi promjene');
define('_PROFILE_MA_NOEDITRIGHT',"Oprostite, nemate prava za ureðivanje postavke ovog korisnika.");
define('_PROFILE_MA_PASSNOTSAME','Lozinke su meðusobno razlièite. Pokušajte ponovno.');
define('_PROFILE_MA_PWDTOOSHORT','Oprostite, vaša lozinka mora sadržavati barem <b>%s</b> znakova.');
define("_PROFILE_MA_NOPASSWORD","Molim unesite lozinku");
define('_PROFILE_MA_PROFUPDATED','Vaš profil je obnovljen!');
define('_PROFILE_MA_USECOOKIE','Spremite moje korisnièko ime u kolaèiæ za 1 godinu');
define('_PROFILE_MA_NO','Ne');
define('_PROFILE_MA_DELACCOUNT','Izbriši raèun');
define('_PROFILE_MA_MYAVATAR','Moj Avatar');
define('_PROFILE_MA_UPLOADMYAVATAR','Upload avatara');
define('_PROFILE_MA_MAXPIXEL','Maksimalno pixela');
define('_PROFILE_MA_MAXIMGSZ','Maksimalna velièina slike (Bajtova)');
define('_PROFILE_MA_SELFILE','Izaberite datoteku');
define('_PROFILE_MA_OLDDELETED','Vaš stari avatar æe biti izbrisan!');
define('_PROFILE_MA_CHOOSEAVT','Izaberite avatar iz raspoložive liste');

define('_PROFILE_MA_PRESSLOGIN','Kliknite na tipku ispod za prijavu');

define('_PROFILE_MA_ADMINNO','Korisnici u  webmaster grupi ne mogu biti izbrisani');
define('_PROFILE_MA_GROUPS','Korisnièke grupe');

define('_PROFILE_MA_NOPERMISS','Oprostite, vi nemate prava za izvršenje ove radnje!');
define('_PROFILE_MA_SURETODEL','Sigurno želite izbrisati svoj raèun?');
define('_PROFILE_MA_REMOVEINFO','Ovo æe ukloniti sve vaše informacije iz baze podataka.');
define('_PROFILE_MA_BEENDELED','Vaš raèun je izbrisan.');

//changepass.php
define("_PROFILE_MA_CHANGEPASSWORD","Promijeni lozinku");
define("_PROFILE_MA_PASSWORDCHANGED","Lozinka uspješno promijenjena");
define("_PROFILE_MA_OLDPASSWORD","Sadašnja lozinka");
define("_PROFILE_MA_NEWPASSWORD","Nova lozinka");

//search.php
define("_PROFILE_MA_SORTBY","Sortiraj po");
define("_PROFILE_MA_ORDER","Redoslijed");
define("_PROFILE_MA_PERPAGE","Broj prikazivanja korisnika po stranici");
define("_PROFILE_MA_LATERTHAN","%s je kasnije od");
define("_PROFILE_MA_EARLIERTHAN","%s je prije od");
define("_PROFILE_MA_LARGERTHAN","%s je veèe od");
define("_PROFILE_MA_SMALLERTHAN","%s je manje od");

define("_PROFILE_MA_NOUSERSFOUND","Nema pronaðenih korisnika");
define("_PROFILE_MA_RESULTS","Rezultati pretraživanja");

//changemail.php
define("_PROFILE_MA_CHANGEMAIL","Promijeni email");
define("_PROFILE_MA_NEWMAIL","Nova email adresa");

define("_PROFILE_MA_NEWEMAILREQ","Novi zahtjev za promijenu email adrese");
define("_PROFILE_MA_NEWMAILMSGSENT","Email s aktivacijskim linkom je poslan na upisanu adresu. Odazivajuæi se na link æete završiti postupak promijene email adrese");
define("_PROFILE_MA_EMAILCHANGED","Vaša email adresa je promijenjena");

define("_PROFILE_MA_CONFCODEMISSING","Nedostaje kod za potvrdu");
?>