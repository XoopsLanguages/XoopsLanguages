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
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ba
// _CHARSET : UTF-8
// Translator: XOOPSBA.ORG Team, http://www.xoopsba.org
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED', 'Niste još registrovani? Kliknite <a href="register.php">ovdje</a>.');
define('_US_LOSTPASSWORD', 'Zaboravili ste lozinku?');
define('_US_NOPROBLEM', 'Nema problema. Upišite jednostavno email adresu koju ste naveli prilikom učlanjenja.');
define('_US_YOUREMAIL', 'Vaša email adresa: ');
define('_US_SENDPASSWORD', 'Pošalji lozinku');
define('_US_LOGGEDOUT', 'Sada ste odjavljeni');
define('_US_THANKYOUFORVISIT', 'Hvala na posjeti, navratite nam opet!');
define('_US_INCORRECTLOGIN', 'Neispravna prijava!');
define('_US_LOGGINGU', 'Hvala na prijavi, %s.');
// 2001-11-17 ADD
define('_US_NOACTTPADM', 'Odabrani član ne postoji ili još nije aktiviran.<br />Molimo vas kontaktirajte webmastera za daljnju proceduru.');
define('_US_ACTKEYNOT', 'Pogrešan aktivacijski ključ!');
define('_US_ACONTACT', 'Izabrani članski profil je vec aktiviran!');
define('_US_ACTLOGIN', 'Vaš članski profil je aktiviran. Prijavite se sa lozinkom koju ste naveli prilikom registracije.');
define('_US_NOPERMISS', 'Oprostite, nemate odobrenje za izvršavanje ove radnje!');
define('_US_SURETODEL', 'Da li stvarno želite izbrisati vaš članski profil?');
define('_US_REMOVEINFO', 'Sa brisanjem vašeg profila biće izbrisani svi vaši podaci iz naše baze podataka.');
define('_US_BEENDELED', 'Vaš članski profil je izbrisan.');
define('_US_ACTFAILD', 'Aktivacija nije uspjela!');
//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG', 'Učlanjenje');
define('_US_NICKNAME', 'Ime člana');
define('_US_EMAIL', 'Email');
define('_US_ALLOWVIEWEMAIL', 'Dopusti ostalim članovima da vide vašu email adresu');
define('_US_WEBSITE', 'Web stranica');
define('_US_TIMEZONE', 'Vremenska zona<br />(+1 za Bosnu)');
define('_US_AVATAR', 'Avatar');
define('_US_VERIFYPASS', 'Ponovi lozinku');
define('_US_SUBMIT', 'Potvrdi');
define('_US_USERNAME', 'Ime člana');
define('_US_FINISH', 'Završi');
define('_US_REGISTERNG', 'Ne mogu registrovati novog člana.');
define('_US_MAILOK', 'Primi obavijesti<br />od administratora i moderatora?');
define('_US_DISCLAIMER', 'Pravilnik');
define('_US_IAGREE', 'Slažem se s gore navedenim');
define('_US_UNEEDAGREE', 'Oprostite, da bi se učlanili morate prihvatiti naš pravilnik.');
define('_US_NOREGISTER', 'Oprostite, nova učlanjenja nisu dozvoljena (kontaktirajte webmastera)');
// %s is username. This is a subject for email
define('_US_USERKEYFOR', 'Link aktiviranja registracije za %s');
define('_US_YOURREGISTERED', 'Sada ste učlanjeni. Link aktiviranja je poslan na vašu email adresu. Molimo vas pratite upustva u email-u za aktivaciju vašeg profila. ');
define('_US_YOURREGMAILNG', 'Sada ste učlanjeni. Nažalost, zbog interne greške na serveru nismo u mogućnosti poslati vam aktivacijski email. Molimo vas da obavijestite webmastera.');
define('_US_YOURREGISTERED2', 'Sada ste učlanjeni. Vaš profil se mora još aktivirati od strane administratora. Bićete obaviješteni putem email-a. Budite strpljivi može potrajati.');
// %s is your site name
define('_US_NEWUSERREGAT', 'Nova registracija člana na %s');
// %s is a username
define('_US_HASJUSTREG', '%s se upravo registrovao(la)!');
define('_US_INVALIDMAIL', 'GREŠKA: Neispravna email adresa');
define('_US_EMAILNOSPACES', 'GREŠKA: Email adresa sadrži razmake.');
define('_US_INVALIDNICKNAME', 'GREŠKA: Neispravno ime člana');
define('_US_NICKNAMETOOLONG', 'Ime člana je predugo! Mora imati manje od %s znakova.');
define('_US_NICKNAMETOOSHORT', 'Ime člana je prekratko! Mora imati više od %s znakova.');
define('_US_NAMERESERVED', 'GREŠKA: Ime je rezervisano.');
define('_US_NICKNAMENOSPACES', 'Ime člana ne može imati razmake.');
define('_US_NICKNAMETAKEN', 'GREŠKA: Ime člana se već koristi.');
define('_US_EMAILTAKEN', 'GREŠKA: Email adresa je već u upotrebi.');
define('_US_ENTERPWD', 'GREŠKA: Morate upisati lozinku.');
define('_US_SORRYNOTFOUND', 'Oprostite, ne možemo pronaći informacije o članu.');
// %s is your site name
define('_US_NEWPWDREQ', 'Nova lozinka zatražena na %s');
define('_US_YOURACCOUNT', 'Vaš članski profil na %s');
define('_US_MAILPWDNG', 'mail_lozinka: ne mogu aktualizirati podatke. Kontaktirajte webmastera');
// %s is a username
define('_US_PWDMAILED', 'Lozinka za %s je poslana.');
define('_US_CONFMAIL', 'Potvrdni email za %s je poslan.');
define('_US_ACTVMAILNG', 'Greška kod slanja obaviještajnog email-a za %s');
define('_US_ACTVMAILOK', 'Obaviještajni email za %s je poslan.');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG', 'Niste izabrali člana! Molimo vas vratite se nazad i probajte ponovo.');
define('_US_PM', 'PM');
define('_US_ICQ', 'ICQ');
define('_US_AIM', 'AIM');
define('_US_YIM', 'YIM');
define('_US_MSNM', 'MSNM');
define('_US_LOCATION', 'Lokacija');
define('_US_OCCUPATION', 'Zanimanje');
define('_US_INTEREST', 'Hobi');
define('_US_SIGNATURE', 'Potpis');
define('_US_EXTRAINFO', 'Dodatne informacije');
define('_US_EDITPROFILE', 'Uredi profil');
define('_US_LOGOUT', 'Odjavi se');
define('_US_INBOX', 'Privatne poruke');
define('_US_MEMBERSINCE', 'Član od');
define('_US_RANK', 'Rang');
define('_US_POSTS', 'Komentara/Postova');
define('_US_LASTLOGIN', 'Zadnja prijava');
define('_US_ALLABOUT', 'Sve o %s');
define('_US_STATISTICS', 'Statistike');
define('_US_MYINFO', 'Moje informacije');
define('_US_BASICINFO', 'Osnovni podaci');
define('_US_MOREABOUT', 'Više o meni');
define('_US_SHOWALL', 'Prikaži sve');
//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE', 'Profil');
define('_US_REALNAME', 'Stvarno ime');
define('_US_SHOWSIG', 'Uvijek dodaj moj potpis');
define('_US_CDISPLAYMODE', 'Način prikazivanja komentara');
define('_US_CSORTORDER', 'Redoslijed prikazivanja komentara');
define('_US_PASSWORD', 'Lozinka');
define('_US_TYPEPASSTWICE', '(upišite novu lozinku dva puta da bi je promijenili)');
define('_US_SAVECHANGES', 'Spremi promjene');
define('_US_NOEDITRIGHT', "Oprostite, nemate prava za promjenu informacija ovog člana.");
define('_US_PASSNOTSAME', 'Upisane lozinke nisu iste. Moraju biti identične.');
define('_US_PWDTOOSHORT', 'Lozinka mora sadržavati <strong>%s</strong> znakova.');
define('_US_PROFUPDATED', 'Vaš profil je aktualiziran!');
define('_US_USECOOKIE', 'Sačuvaj moje ime u kolačiću (cookie) za 1 godinu');
define('_US_NO', 'Ne');
define('_US_DELACCOUNT', 'Izbriši profil');
define('_US_MYAVATAR', 'Moj avatar');
define('_US_UPLOADMYAVATAR', 'Unesi svoj avatar');
define('_US_MAXPIXEL', 'max. veličina slike -pixels');
define('_US_MAXIMGSZ', 'max. veličina slike -baytes');
define('_US_SELFILE', 'Izaberite fajl');
define('_US_OLDDELETED', 'Vaš stari avatar će biti trajno izbrisan!');
define('_US_CHOOSEAVT', 'Izaberite avatara iz liste');
define('_US_PRESSLOGIN', 'Kliknite tipku ispod za prijavu');
define('_US_ADMINNO', 'Član iz webmaster grupe se ne može izbrisati');
define('_US_GROUPS', 'Grupe članova');
define('_US_REMEMBERME', 'Zapamti me');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Dobro došli na %s');

?>