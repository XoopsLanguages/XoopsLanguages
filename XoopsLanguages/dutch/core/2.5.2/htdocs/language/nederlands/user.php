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
 
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/
defined('XOOPS_ROOT_PATH') or die('Beperkte toegang');

//%%%%%%    File Name user.php     %%%%%
define('_US_NOTREGISTERED', 'Nog niet geregistreerd? Klik dan <a href="register.php">hier</a>');
define('_US_LOSTPASSWORD', 'Wachtwoord vergeten?');
define('_US_NOPROBLEM', 'Geen probleem. Vul het e-mail adres in dat u bij registratie hebt opgegeven.');
define('_US_YOUREMAIL', 'Uw e-mail adres:');
define('_US_SENDPASSWORD', 'Wachtwoord versturen');
define('_US_LOGGEDOUT', 'U bent nu uitgelogd');
define('_US_THANKYOUFORVISIT', 'Bedankt voor het bezoeken van onze site!');
define('_US_INCORRECTLOGIN', 'Onjuiste Login!');
define('_US_LOGGINGU', 'Welkom %s .');
// 2001-11-17 ADD
define('_US_NOACTTPADM', 'De geselecteerde gebruiker is geblokkeerd of nog niet geactiveerd. <br /> Neem contact op met de beheerder voor meer informatie.');
define('_US_ACTKEYNOT', 'Activatie sleutel niet correct!');
define('_US_ACONTACT', 'Het geselecteerde account is al geactiveerd!');
define('_US_ACTLOGIN', 'Het account is geactiveerd. Gelieve in te loggen met het door u opgegeven wachtwoord.');
define('_US_NOPERMISS', 'Sorry, u heeft geen toestemming om deze actie uit te voeren!');
define('_US_SURETODEL', 'Weet u zeker dat u uw account wilt verwijderen?');
define('_US_REMOVEINFO', 'Hiermee verwijdert u al uw informatie uit onze database.');
define('_US_BEENDELED', 'Uw account is verwijderd.');
define('_US_ACTFAILD', 'Activatie mislukt!');
//%%%%%%    File Name register.php     %%%%%
define('_US_USERREG', 'Gebruikers registratie');
define('_US_NICKNAME', 'Gebruikersnaam');
define('_US_EMAIL', 'E-mail');
define('_US_ALLOWVIEWEMAIL', 'Toon mijn e-mail adres aan andere gebruikers');
define('_US_WEBSITE', 'Website');
define('_US_TIMEZONE', 'Tijdzone');
define('_US_AVATAR', 'Avatar');
define('_US_VERIFYPASS', 'Bevestig wachtwoord');
define('_US_SUBMIT', 'Verstuur');
define('_US_USERNAME', 'Gebruikersnaam');
define('_US_FINISH', 'Voltooien');
define('_US_REGISTERNG', 'Kan nieuwe gebruiker niet registreren.');
define('_US_MAILOK', 'E-mail berichten <br /> van beheerders en moderators ontvangen?');
define('_US_DISCLAIMER', 'Disclaimer');
define('_US_IAGREE', 'Ik ga akkoord met het bovenstaande');
define('_US_UNEEDAGREE', 'U dient akkoord te gaan met onze disclaimer voordat u zich kunt registreren.');
define('_US_NOREGISTER', 'Sorry, we staan op het moment geen nieuwe gebruikers toe.');
// %s is username. This is a subject for email
define('_US_USERKEYFOR', 'Gebruikers activatiecode voor %s ');
define('_US_YOURREGISTERED', 'U bent nu geregistreerd. Een e-mail met activatiesleutel is verzonden naar het e-mail account dat u heeft opgegeven. Volg de instructies in de e-mail om uw account te activeren.');
define('_US_YOURREGMAILNG', 'U bent nu geregistreerd. Maar we waren we niet in staat om de activatie e-mail te sturen naar uw e-mail account omdat er een interne fout is opgetreden op onze server. Onze excuses voor het ongemak, stuur alstublieft de beheerder een e-mail om hem / haar te verwittigen van de situatie.');
define('_US_YOURREGISTERED2', 'U bent nu geregistreerd. Gelieve te wachten tot uw account is geactiveerd door de beheerders. U ontvangt een e-mail als dit is gedaan. Dit kan een tijdje duren dus wees geduldig.');
// %s is your site name
define('_US_NEWUSERREGAT', 'Registratie nieuwe gebruiker op %s ');
// %s is a username
define('_US_HASJUSTREG', ' %s  heeft zich zojuist geregistreerd!');
define('_US_INVALIDMAIL', 'FOUT: Ongeldig e-mail adres');
define('_US_EMAILNOSPACES', 'FOUT: E-mail adressen mogen geen spaties bevatten.');
define('_US_INVALIDNICKNAME', 'FOUT: Ongeldige gebruikersnaam.');
define('_US_NICKNAMETOOLONG', 'De ingevoerde gebruikersnaam is te lang. Deze mag niet meer dan %s  karakters bevatten.');
define('_US_NICKNAMETOOSHORT', 'De ingevoerde gebruikersnaam is te kort. Hij moet meer dan %s  karakters bevatten.');
define('_US_NAMERESERVED', 'FOUT: Deze naam is reeds gereserveerd.');
define('_US_NICKNAMENOSPACES', 'De ingevoerde gebruikersnaam mag geen spaties bevatten.');
define('_US_NICKNAMETAKEN', 'FOUT: Deze gebruikersnaam is al bezet.');
define('_US_EMAILTAKEN', 'FOUT: Dit e-mail adres is al geregistreerd.');
define('_US_ENTERPWD', 'FOUT: U moet een wachtwoord invullen.');
define('_US_SORRYNOTFOUND', 'Sorry, er werd geen overeenkomende gebruiker gevonden.');
// %s is your site name
define('_US_NEWPWDREQ', 'Nieuw wachtwoord aanvragen op %s ');
define('_US_YOURACCOUNT', 'Uw account op %s ');
  define('_US_MAILPWDNG', 'FOUT: Mail wachtwoord: kon gebruikersinvoer niet bijwerken. Neem AUB contact op met de beheerder');
// %s is a username
define('_US_PWDMAILED', 'Wachtwoord aan %s verstuurd.');
define('_US_CONFMAIL', 'Bevestigings e-mail aan %s verstuurd.');
define('_US_ACTVMAILNG', 'Verzenden kennisgevings e-mail naar %s is mislukt');
define('_US_ACTVMAILOK', 'Kennisgevings e-mail naar %s  verzonden.');
//%%%%%%    File Name userinfo.php     %%%%%
define('_US_SELECTNG', 'Geen gebruiker geselecteerd! Ga terug en probeer het opnieuw.');
define('_US_PM', 'PM');
define('_US_ICQ', 'ICQ');
define('_US_AIM', 'AIM');
define('_US_YIM', 'YIM');
define('_US_MSNM', 'MSNM');
define('_US_LOCATION', 'Locatie');
define('_US_OCCUPATION', 'Beroep');
define('_US_INTEREST', 'Interesses');
define('_US_SIGNATURE', 'Handtekening');
define('_US_EXTRAINFO', 'Extra Info');
define('_US_EDITPROFILE', 'Bewerk profiel');
define('_US_LOGOUT', 'Afmelden');
define('_US_INBOX', 'Inbox');
define('_US_MEMBERSINCE', 'Gebruiker sinds');
define('_US_RANK', 'Rang');
define('_US_POSTS', 'Commentaren / Posts');
define('_US_LASTLOGIN', 'Laatste Login');
define('_US_ALLABOUT', 'Alles over %s ');
define('_US_STATISTICS', 'Statistieken');
define('_US_MYINFO', 'Mijn info');
define('_US_BASICINFO', 'Basisinformatie');
define('_US_MOREABOUT', 'Meer over mij');
define('_US_SHOWALL', 'Toon alles');
//%%%%%%    File Name edituser.php     %%%%%
define('_US_PROFILE', 'Profiel');
define('_US_REALNAME', 'Echte naam');
define('_US_SHOWSIG', 'Toon mijn handtekening');
define('_US_CDISPLAYMODE', 'Reactie Weergavemodus');
define('_US_CSORTORDER', 'Reactie Sorteervolgorde');
define('_US_PASSWORD', 'Wachtwoord');
define('_US_TYPEPASSTWICE', '(Voer een nieuw wachtwoord twee keer in om het te veranderen)');
define('_US_SAVECHANGES', 'Wijzigingen opslaan');
define('_US_NOEDITRIGHT', 'Sorry, je hebt niet genoeg rechten om de gegevens van deze gebruiker te bewerken.');
define('_US_PASSNOTSAME', 'De ingevoerde wachtwoorden zijn verschillend. Ze moeten identiek zijn.');
define('_US_PWDTOOSHORT', 'Sorry, uw wachtwoord moet op z\'n minst <strong>%s</strong> karakters lang zijn.');
define('_US_PROFUPDATED', 'Uw profiel is bijgewerkt!');
define('_US_USECOOKIE', 'Bewaar mijn gebruikersnaam in een cookie voor 1 jaar');
define('_US_NO', 'Nee');
define('_US_DELACCOUNT', 'Account verwijderen');
define('_US_MYAVATAR', 'Mijn Avatar');
define('_US_UPLOADMYAVATAR', 'Upload Avatar');
define('_US_MAXPIXEL', 'Maximaal aantal pixels');
define('_US_MAXIMGSZ', 'Maximale afmeting afbeelding (bytes)');
define('_US_SELFILE', 'Selecteer bestand');
define('_US_OLDDELETED', 'Uw oude avatar zal worden verwijderd!');
define('_US_CHOOSEAVT', 'Kies een avatar uit de lijst');
define('_US_PRESSLOGIN', 'Druk op de onderstaande knop om in te loggen');
define('_US_ADMINNO', 'Gebruikers in de webmasters groep kunnen niet worden verwijderd');
define('_US_GROUPS', 'Gebruikers groepen');
define('_US_REMEMBERME', 'Onthouden');
// Welcoming email/PM subject
define('_US_WELCOME_SUBJECT', 'Welkom bij %s ');
?>