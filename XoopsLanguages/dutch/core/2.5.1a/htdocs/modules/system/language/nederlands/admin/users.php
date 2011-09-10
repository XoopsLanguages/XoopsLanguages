<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @version     $Id: users.php 5622 2010-10-24 04:11:44Z beckmi $
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
 
// Navigatie
define("_AM_SYSTEM_USERS_NAV_MANAGER","Gebruikerbeheer");
define("_AM_SYSTEM_USERS_NAV_MAIN","Gebruikerbeheer");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","Uitgebreid zoeken");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","Gebruiker toevoegen");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","Gebruker bewerken");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","Gebruiker verwijderen");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>Xoops gebruikers beheren</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","Gebruiker");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Uid");
define("_AM_SYSTEM_USERS_STATUS","Status");
define("_AM_SYSTEM_USERS_NAME","Naam");
define("_AM_SYSTEM_USERS_UNAME","Gebruikersnaam");
define("_AM_SYSTEM_USERS_EMAIL","E-mail");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Groepen bewerken");
define("_AM_SYSTEM_USERS_REG_DATE","Registratiedatum");
define("_AM_SYSTEM_USERS_LAST_LOGIN","Laatst ingelogd");
define("_AM_SYSTEM_USERS_POSTS","Reacties/plaatsingen");
define("_AM_SYSTEM_USERS_LEVEL","Niveau");
define("_AM_SYSTEM_USERS_ACTION","Actie");
define("_AM_SYSTEM_USERS_FINDUS","Gebruikers zoeken");
define("_AM_SYSTEM_USERS_AVATAR","Avatar");
define("_AM_SYSTEM_USERS_REALNAME","Echte naam");
define("_AM_SYSTEM_USERS_REGDATE","Geregistreerd op datum");
define("_AM_SYSTEM_USERS_PM","PM");
define("_AM_SYSTEM_USERS_URL","URL");
define("_AM_SYSTEM_USERS_PREVIOUS","Vorige");
define("_AM_SYSTEM_USERS_NEXT","Volgende");
define("_AM_SYSTEM_USERS_USERSFOUND","%s gebruiker(s) niet gevonden");
define("_AM_SYSTEM_USERS_ACTUS", "Actieve gebruikers: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Inactieve gebruikers: %s");
define("_AM_SYSTEM_USERS_NOFOUND","Geen gebruikers gevonden!");
define("_AM_SYSTEM_USERS_ICQ","ICQ");
define("_AM_SYSTEM_USERS_AIM","AIM");
define("_AM_SYSTEM_USERS_YIM","YIM");
define("_AM_SYSTEM_USERS_MSNM","MSNM");
define("_AM_SYSTEM_USERS_TIMEZONE","Tijdszone");
define("_AM_SYSTEM_USERS_SHOWSIG","Handtekening altijd toevoegen");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Weergave reacties");
define("_AM_SYSTEM_USERS_CSORTORDER","Sorteervolgorde reacties");
define("_AM_SYSTEM_USERS_EXTRAINFO","Extra Informatie");
define("_AM_SYSTEM_USERS_LOCATION","Plaats");
define("_AM_SYSTEM_USERS_OCCUPATION","Beroep");
define("_AM_SYSTEM_USERS_INTEREST","Interesse");
define("_AM_SYSTEM_USERS_URLC","URL bevat");
define("_AM_SYSTEM_USERS_LOCATIONC","Plaats bevat");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Beroep bevat");
define("_AM_SYSTEM_USERS_INTERESTC","Interesse bevat");
define("_AM_SYSTEM_USERS_LASTLOGMORE","Datum laatst ingelogd is meer dan <span style='color:#ff0000;'>X</span> dagen geleden");
define("_AM_SYSTEM_USERS_LASTLOGLESS","Datum laatst ingelogd is minder dan <span style='color:#ff0000;'>X</span> dagen geleden");
define("_AM_SYSTEM_USERS_REGMORE","Registratiedatum is meer dan <span style='color:#ff0000;'>X</span> dagen geleden");
define("_AM_SYSTEM_USERS_REGLESS","Registratiedatum is minder dan <span style='color:#ff0000;'>X</span> dagen geleden");
define("_AM_SYSTEM_USERS_POSTSMORE","Aantal plaatsingen is minder dan <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Aantal plaatsingen is meer dan <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Gesorteerd op");
define("_AM_SYSTEM_USERS_ORDER","Volgorde");
define("_AM_SYSTEM_USERS_LASTLOGIN","Laatst ingelogd");
define("_AM_SYSTEM_USERS_ASC","Oplopende volgorde");
define("_AM_SYSTEM_USERS_DESC","Aflopende volgorde");
define("_AM_SYSTEM_USERS_LIMIT","Aantal gebruikes per pagina");
define("_AM_SYSTEM_USERS_RESULTS", "Zoekresultaten");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Type gebruikers om weer te geven");
define("_AM_SYSTEM_USERS_MAILOK","Alleen gebruikers die e-mail accepteren");
define("_AM_SYSTEM_USERS_MAILNG","Alleen gebruikers die e-mail niet accepteren");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Type gebruikers om weer te geven");
define("_AM_SYSTEM_USERS_ACTIVE","Alleen actieve gebruikers");
define("_AM_SYSTEM_USERS_INACTIVE","Alleen inactieve gebruikers");
define("_AM_SYSTEM_USERS_BOTH", "Alle gebruikers");
define("_AM_SYSTEM_USERS_SENDMAIL", "E-mail versturen");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Gebruikers toevoegen aan %s groep");
define("_AM_SYSTEM_USERS_GROUPS", "Groepen");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Groep toevoegen");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Groep verwijderen");
define("_AM_SYSTEM_USERS_AYSYWTDU","Zeker weten dat u %s wilt verwijderen?");
define("_AM_SYSTEM_USERS_BYTHIS","Alle informatie van deze gebruiker zal permanent verwijderd worden door deze actie.");
define("_AM_SYSTEM_USERS_YES","Ja");
define("_AM_SYSTEM_USERS_NO","Nee");
define("_AM_SYSTEM_USERS_YMCACF","Nog niet alle verplichte velden zijn ingevuld!");
define("_AM_SYSTEM_USERS_CNRNU","Kan geen nieuwe gebruiker registreren");
define("_AM_SYSTEM_USERS_EDEUSER","Bewerk/verwijder gebruikers");
define("_AM_SYSTEM_USERS_NICKNAME","Gebruikersnaam");
define("_AM_SYSTEM_USERS_MODIFYUSER","Gebruiken bewerken");
define("_AM_SYSTEM_USERS_DELUSER","Gebruiker verwijderen");
define("_AM_SYSTEM_USERS_GO","Ga!");
define("_AM_SYSTEM_USERS_ADDUSER","Gebruiker toevoegen");
define("_AM_SYSTEM_USERS_OPTION","Optie");
define("_AM_SYSTEM_USERS_THEME","Thema");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Toestaan dat het e-mailadres voor andere gebruikers zichtbaar is");
define("_AM_SYSTEM_USERS_RANK","Gebruikersrang");
define("_AM_SYSTEM_USERS_NSRA","Geen speciale gebruikersrangen gekoppeld");
define("_AM_SYSTEM_USERS_NSRID","Geen speciale gebruikersrangen in de database");
define("_AM_SYSTEM_USERS_ACCESSLEV","Toegangsniveau");
define("_AM_SYSTEM_USERS_SIGNATURE","Handtekening");
define("_AM_SYSTEM_USERS_PASSWORD","Wachtwoord");
define("_AM_SYSTEM_USERS_INDICATECOF","* geeft de verplichte velden aan");
define("_AM_SYSTEM_USERS_NOTACTIVE","Deze gebruiker is niet geactiveerd. De gebruiker nu activeren?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Bijwerken gebruiker");
define("_AM_SYSTEM_USERS_USERINFO","Gebruikers Info");
define("_AM_SYSTEM_USERS_USERID","GebruikersID");
define("_AM_SYSTEM_USERS_RETYPEPD","Nogmaals wachtwoord");
define("_AM_SYSTEM_USERS_CHANGEONLY","(Alleen voor wijzigingen)");
define("_AM_SYSTEM_USERS_USERPOST","Gebruikersplaatsingen");
define("_AM_SYSTEM_USERS_STORIES","Berichten");
define("_AM_SYSTEM_USERS_COMMENTS","Reacties");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Druk op onderstaande knop om data te synchroniseren als de actuele status niet overeenkomt met de bovenstaande weergeeven data.");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Synchroniseren");
define("_AM_SYSTEM_USERS_USERDONEXIT","Gebruiker bestaat niet!");
define("_AM_SYSTEM_USERS_STNPDNM","Sorry, the new passwords do not match. Click back and try again");
define("_AM_SYSTEM_USERS_CNGTCOM","Kan totale reacties niet weergeven");
define("_AM_SYSTEM_USERS_CNGTST","Kan totale berichten niet weergeven");
define("_AM_SYSTEM_USERS_CNUUSER","Kan de gebruiker niet bijwerken");
define("_AM_SYSTEM_USERS_CNGUSERID","Kan gebruiker ID's niet weergeven");
define("_AM_SYSTEM_USERS_LIST","Lijst");
define("_AM_SYSTEM_USERS_NOUSERS", "Geen gebruikers geselecteerd");
define("_AM_SYSTEM_USERS_CNRNU2","De nieuwe gebruiker kan niet toegevoegd worden aan een groep %s.");
define("_AM_SYSTEM_USERS_SEARCH","Zoeken");
define("_AM_SYSTEM_USERS_SEARCH_USER","Zoek gebruiker:");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Uitgebreid zoeken");
define("_AM_SYSTEM_USERS_EDIT","Groepslid bewerken");
define("_AM_SYSTEM_USERS_DEL","Groepslid verwijderen");
define("_AM_SYSTEM_USERS_DELETE","Verwijderen");
define("_AM_SYSTEM_USERS_SUBMIT","Bevestigen");
define("_AM_SYSTEM_USERS_PURGE","Opruimen");
define("_AM_SYSTEM_USERS_ADD","Toevoegen groepslid");
define("_AM_SYSTEM_USERS_VIEW","Bekijk informatie groepslid");
define("_AM_SYSTEM_USERS_NO_FOUND","Geen gevonden gebruikers");
define("_AM_SYSTEM_USERS_NOT_CONNECT","Nooit aangesloten");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Verwijder gebruiker : %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Verwijder");
define("_AM_SYSTEM_USERS_NO_SUPP", "Gebruiker kan niet verwijderd worden: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "Admin kan niet verwijderd worden: %s <br />");
define("_AM_SYSTEM_USERS_ERROR", "FOUT:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "All groepen");
define("_AM_SYSTEM_USERS_ALLUSER", "Alle gebruikers");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Alleen actieve gebruikers");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Alleen inactieve gebruikers");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","Gebruikersnaam %s bestaat reeds al");
define("_AM_SYSTEM_USERS_MAIL_ERROR","E-mail geruiker %s bestaat reeds al");

?>