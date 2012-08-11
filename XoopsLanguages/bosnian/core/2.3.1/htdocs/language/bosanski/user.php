<?php
// $Id: user.php,v 1.1 2003/01/02 16:53:48 w4z004 Exp $
//%%%%%%                File Name user.php                 %%%%%
define('_US_NOTREGISTERED','Ti nisi jo&scaron; registrovan(a)? Klikni <a href=register.php>ovdje</a> i registruj se besplatno je.');
define('_US_LOSTPASSWORD','Lozinku si zaboravio(la)?');
define('_US_NOPROBLEM','Nema frke. Upi&scaron;i ovdje svoju E-Mail-Adresu sa kojom si se regostrovao(la).');
define('_US_YOUREMAIL','Tvoja E-Mail-Adresa: ');
define('_US_SENDPASSWORD','Lozinku po&scaron;alji mi');
define('_US_LOGGEDOUT','Ti si se izlogovao(la).');
define('_US_THANKYOUFORVISIT','Hvala ti na posjeti,navrati opet ba!');
define('_US_INCORRECTLOGIN','Gre&scaron;ka pri ulogovanju!');
define('_US_LOGGINGU','Hvala, &scaron;to si se ulogovao(la), %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Izabrani &#269;lan ne postoji u Bazi podataka ili njegova registracija nije jo&scaron; odobrena.<br />Molim te javi se webmasteru ukoliko &#269;eka&scaron; odobrenje tvoje registracije.');
define('_US_ACTKEYNOT','Pogre&scaron;an je Aktivacijski klju&#269;!');
define('_US_ACONTACT','Izabrani Profil je ve&#263; aktiviran!');
define('_US_ACTLOGIN','Tvoj Profil je aktiviran. Molim te uloguj se sa svojom Lozinkom.');
define('_US_NOPERMISS','Oprosti, ti nema&scaron; odgovaraju&#263;e odobrenje!');
define('_US_SURETODEL','Jesi li siguran, da svoj Profil &#382;eli&scaron; izbrisati?');
define('_US_REMOVEINFO','Sa brisanjem tvog Profila bi&#263;e svi tvoji podaci iz Baze podataka izbrisani.');
define('_US_BEENDELED','Tvok Profil je potpuno izbrisan.');
//

//%%%%%%                File Name register.php                 %%%%%
define('_US_USERREG','Registracija &#269;lana:');
define('_US_NICKNAME','Nik ime');
define('_US_EMAIL','E-Mail');
define('_US_ALLOWVIEWEMAIL','Ovu informaciju i drugim &#269;lanovima vidno prika&#382;i.');
define('_US_WEBSITE','Start stranica');
define('_US_TIMEZONE','Vremenska zona<br />(+1 za Bosnu)');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Lozinku ponovi:');
define('_US_SUBMIT','Po&scaron;alji');
define('_US_USERNAME','Nik ime');
define('_US_FINISH','Zavr&scaron;i');
define('_US_REGISTERNG','Novi &#269;lan se nemo&#382;e registrovati.');
define('_US_MAILOK','&#381;eli&scaron; li Administratorima i Moderatorima dozvoliti, da ti preko E-Mail-Obavijesti &scaron;alju ?');
define('_US_DISCLAIMER','Pravilnik(obavezno pro&#269;itati)');
define('_US_IAGREE','Pravilnik sam pro&#269;itao(la) i sla&#382;em se sa njim.');
define('_US_UNEEDAGREE','Oprosti, ali ti prije svega MORA&Scaron; prihvatiti Pravilnik, da bi se registrovao(la).');
define('_US_NOREGISTER','Oprosti, trenutne nove registracije nisu dozvoljene(kontaktiraj webmastera)');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Klju&#269; aktiviranja registracije za %s');

define('_US_YOURREGISTERED','Sada si registrovan(a). Klju&#269; aktiviranja tvoje registracije ti je poslat na tvoj navedeni Mail. Molim te prati upustvo u  E-Mailu i svoju registraciju aktiviranjem potvrdi. ');
define('_US_YOURREGMAILNG','Sada si registrovan(a). Na&#382;alost nemo&#382;emo ti poslati E-Mail zbog interne gre&scaron;ke da bi aktivirao(la) svoju registraciju. Molim te obrati se nekako webmasteru.');
define('_US_YOURREGISTERED2','Sada si registrovan(a). Molim te strpi se malo, jer tvoju registraciju mora webmaster odobriti. Dobi&#263;e&scaron; potvrdni Mail, kad bude ti registracija odobrena. Aktiviranje tvoje registracije mo&#382;e potrajati, sve zavisi od webmastera i molim te budui strpljiv(a).');

// %s is your site name
define('_US_NEWUSERREGAT','Novi &#269;lan za %s');
// %s is a username
define('_US_HASJUSTREG','%s se upravo registrovao(la)!');

define('_US_INVALIDMAIL','Gre&scaron;ka: Neispravna E-Mail-Adresa!');
define('_US_EMAILNOSPACES','Gre&scaron;ka: E-Mail-Addresa sadr&#382;i nedozvoljeni prazni razmak!');
define('_US_INVALIDNICKNAME','Gre&scaron;ka: Zabranjeno Nik ime!');
define('_US_NICKNAMETOOLONG','Nik ime je preduga&#269;ko! Nik ime mora maximalno %s oznaka imati.');
define('_US_NICKNAMETOOSHORT','Nik ime je prekratko! Nik ime mora maximalno %s oznaka imati.');
define('_US_NAMERESERVED','Gre&scaron;ka: Dieser Username ist bereits reserviert!');
define('_US_NICKNAMENOSPACES','Nik ime nesmije imati praznih razmaka!');
define('_US_NICKNAMETAKEN','Gre&scaron;ka: Ovo Nik ime ve&#263; postoji!');
define('_US_EMAILTAKEN','Gre&scaron;ka: Ova E-Mail-Adresa ve&#263; ima u Bazi podataka!');
define('_US_ENTERPWD','Gre&scaron;ka: Mora&scaron; svoju Lozinku upisati!');
define('_US_SORRYNOTFOUND','Nikakve informacije &#269;lana nisu prona&#273;ene!');




// %s is your site name
define('_US_NEWPWDREQ','Nova Lozinka je zatra&#382;ena za %s');
define('_US_YOURACCOUNT','Tvoj Profil na %s');

define('_US_MAILPWDNG','E-Mail-Lozinka: Tvoje pode&scaron;avanje se nemo&#382;e aktulizirati!. Molim te kontaktiraj sa webmasterom!');

// %s is a username
define('_US_PWDMAILED','Lozinka za %s je poslata.');
define('_US_CONFMAIL','Potvrdni-E-Mail za %s je poslat.');
define('_US_ACTVMAILNG','Gre&scaron;ka kod aktiviranja E-Mail za %s');
define('_US_ACTVMAILOK','Aktiviranje-E-Mail za %s je poslat.');

//%%%%%%                File Name userinfo.php                 %%%%%
define('_US_SELECTNG','Nijedan &#269;lan nije izabran! Molim te vrati se nazad i probaj ponovo.');
define('_US_PM','PN');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Mjesto boravka');
define('_US_OCCUPATION','Zanimanje');
define('_US_INTEREST','Hobi');
define('_US_SIGNATURE','Signatura');
define('_US_EXTRAINFO','Dodatne informacije o sebi');
define('_US_EDITPROFILE','Profil uredi');
define('_US_LOGOUT','Izloguj se');
define('_US_INBOX','Privatne poruke');
define('_US_MEMBERSINCE','Na&scaron; &#269;lan je od');
define('_US_RANK','Rang');
define('_US_POSTS','Komentara/Postova');
define('_US_LASTLOGIN','Zadnja posjeta');
define('_US_ALLABOUT','Sve o %s');
define('_US_STATISTICS','Statistika');
define('_US_MYINFO','Moj info');
define('_US_BASICINFO','Glavni podaci');
define('_US_MOREABOUT','Dodatni info');
define('_US_SHOWALL','Sve prika&#382;i');

//%%%%%%                File Name edituser.php                 %%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Ime');
define('_US_SHOWSIG','Ihre Signaturu uvijek prika&#382;i');
define('_US_CDISPLAYMODE','Kommentaransicht');
define('_US_CSORTORDER','Redoslijed Komentara:');
define('_US_PASSWORD','Lozinka');
define('_US_TYPEPASSTWICE','(Upi&scaron;i novu Lozinku 2x istu da bi staru promjenuo(la))');
define('_US_SAVECHANGES','Promjenu memori&scaron;i');
define('_US_NOEDITRIGHT',"Oprosti, nema&scaron; odgovaraju&#263;e odobrenje da bi informaciju &#269;lana promjenio(la).");
define('_US_PASSNOTSAME','Obje upisane Lozinke su razli&#269;iti. Moraju iste biti.');
define('_US_PWDTOOSHORT','Lozinka mora najmanje imati <b>%s</b> oznaka.');
define('_US_PROFUPDATED','Tvoj Profil je aktuliziran!');
define('_US_USECOOKIE','Treba li tvoje Nik ime za godinu dana memorisati u cookisu?');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Profil izbri&scaron;i');
define('_US_MYAVATAR','Moj Avatar');
define('_US_UPLOADMYAVATAR','Uploaduj sebi sa svog PC-a Avatar');
define('_US_MAXPIXEL','max. veli&#269;ina slike');
define('_US_MAXIMGSZ','max. veli&#269;ina podatka slike');
define('_US_SELFILE','Pretra&#382;i');
define('_US_OLDDELETED','Tvoj stari Avatar bi&#263;e zamjenom trajno izbrisan!');
define('_US_CHOOSEAVT','Izaberi sebi Avatara iz Liste!');
define('_US_PRESSLOGIN','Klikni na donji Buton da bi se ulogovao(la)');
define('_US_ADMINNO','&#268;lanovi iz webmaster grupe se nemogu izbrisati');
define('_US_GROUPS','Grupe &#268;lanova');
define('_US_REMEMBERME','Podsjeti me');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Dobrodo&scaron;li na %s');
?>