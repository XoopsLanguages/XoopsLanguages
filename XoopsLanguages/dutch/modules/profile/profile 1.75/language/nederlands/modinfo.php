<?php
/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE: nl
 * _CHARSET : UTF-8
 * Vertaald door	Renetjuh
 * (Ver)taalfouten of suggesties?
 * AUB hier melden: http://www.xoops.nl
**/

define("_PROFILE_MI_NAME","Gebruikers Profiel");
define("_PROFILE_MI_DESC","Module voor het beheren van extra gebruikersgegevens");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT","Bewerk account");
define("_PROFILE_MI_CHANGEPASS","Wijzig wachtwoord");
define("_PROFILE_MI_CHANGEMAIL","Wijzig e-mail adres");

//Admin links
define("_PROFILE_MI_INDEX","Index");
define("_PROFILE_MI_CATEGORIES","Categorieën");
define("_PROFILE_MI_FIELDS","Velden");
define("_PROFILE_MI_USERS","Gebruikers");
define("_PROFILE_MI_STEPS","Registratiestappen");
define("_PROFILE_MI_PERMISSIONS","Rechten");
define("_PROFILE_MI_VALIDATION", "Validatie");
define('_PROFILE_MI_DIRECTORY', "Map");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE","Gebruikers Profiel");
define("_PROFILE_MI_CATEGORY_DESC","Voor de gebruikersvelden");

//User Profile Fields
define("_PROFILE_MI_URL_TITLE","Website");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS","Algemene instellingen");
define("_PROFILE_MI_CAT_SETTINGS_DSC","");
define("_PROFILE_MI_CAT_USER","Gebruikersinstellingen");
define("_PROFILE_MI_CAT_USER_DSC","");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH","Laat de laatste gebruikers-activiteiten in het gebruikersprofiel zien");

//Pages
define("_PROFILE_MI_PAGE_INFO","Gebruikers Informatie");
define("_PROFILE_MI_PAGE_EDIT","Bewerk Gebruiker");
define("_PROFILE_MI_PAGE_SEARCH","Zoeken");

define("_PROFILE_MI_STEP_BASIC", "Basis");
define("_PROFILE_MI_STEP_COMPLEMENTARY", "Aanvullend");

define("_PROFILE_MI_CATEGORY_PERSONAL","Persoonlijk");
define("_PROFILE_MI_CATEGORY_MESSAGING","Berichten");
define("_PROFILE_MI_CATEGORY_SETTINGS","Instellingen");
define("_PROFILE_MI_CATEGORY_COMMUNITY","Community");

define("_PROFILE_MI_NEVER_LOGGED_IN", "Nooit ingelogd");

define('_PROFILE_MI_TITLE', 'Paginatitel');
define('_PROFILE_MI_TITLE_DESC', 'Bewerk de titel van de indexpagina');
define('_PROFILE_MI_DESCRIPTION', 'Omschrijving van de pagina');
define('_PROFILE_MI_DESCRIPTION_DESC', 'Bewerk de omschrijving van de indexpagina');
define('_PROFILE_MI_CLICKABLE', 'Aanklikbare links toestaan.');
define('_PROFILE_MI_CLICKABLE_DESC', '');
define('_PROFILE_MI_GROUPS', 'Groepen weergeven');
define('_PROFILE_MI_GROUPS_DESC', 'Groepen weergeven in map');
define('_PROFILE_MI_DISPLAY', 'Velden weergeven');
define('_PROFILE_MI_DISPLAY_DESC', 'Velden weergeven in map (Module bijwerken om toegevoegde velden weer te geven)');

// Version 1.68
define('_PROFILE_MI_PUBLICKEY', 'Publieke Captcha sleutel weergeven');
define('_PROFILE_MI_PRIVATEKEY', 'Persoonlijke Captcha sleutel');
define('_PROFILE_MI_PUBLICKEY_DESC', 'Publiek <a href="http://www.recaptcha.net">Re-Captcha.net</a> Key');
define('_PROFILE_MI_PRIVATEKEY_DESC', 'Persoonlijk <a href="http://www.recaptcha.net">Re-Captcha.net</a> Key');

//Version 1.69
define('_PROFILE_MI_FIELD_IP', 'Het <strong>IP Adres van %s</strong> wordt opgeslagen.');
define('_PROFILE_MI_FIELD_PROXYIP', 'Het <strong>Proxy IP Adres van %s</strong> wordt opgeslagen.');
define('_PROFILE_MI_FIELD_NETWORKADDY', 'Het <strong>Netbios Adres van %s</strong> wordt opgeslagen.');

define('_PROFILE_MI_CHECKIP', 'Check IP adres of registeer.');
define('_PROFILE_MI_CHECKPROXYIP', 'Check Proxy IP adres of registeer');
define('_PROFILE_MI_CHECKNETWORKADDY', 'Check Netwerk Adres of Registeer');
define('_PROFILE_MI_CHECKIP_DESC', 'Dit vereist een <em>IP veld</em> dat gevoegd moet worden aan het formulier. (Zet uit voor het bewerken)');
define('_PROFILE_MI_CHECKPROXYIP_DESC', 'Dit vereist een <em>Proxy IP veld</em> dat gevoegd moet worden aan het formulier. (Zet uit voor het bewerken)');
define('_PROFILE_MI_CHECKNETWORKADDY_DESC', 'Dit vereist een <em>Netwerk Adres veld</em> dat gevoegd moet worden aan het formulier. (Zet uit voor het bewerken)');

//Version 1.72
//Admin links
define('_PROFILE_MI_DASHBOARD', 'Overzicht');
define('_PROFILE_MI_ABOUT', 'Over deze Module');

//Preferences
define('_PROFILE_MI_LOCAL', 'Gebruik IP lokalisatie en alleen registratie toestaan');
define('_PROFILE_MI_LOCAL_DESC', 'Een IPDB API sleutel is benodigd om IP Lokalisatie te gebruiken, vergeet niet de lokalisatiegebieden in te stellen met de 3 onderstaande instellingen.');
define('_PROFILE_MI_IPDB_APIKEY', 'IPDB API sleutel');
define('_PROFILE_MI_IPDB_APIKEY_DESC', 'Registeer op <a href="http://ipinfodb.com/register.php">IPDB Registratie</a> voor het ontvangen van een API sleutel');
define('_PROFILE_MI_COUNTRYCODE', 'Registraties toegestaan vanuit land');
define('_PROFILE_MI_COUNTRYCODE_DESC', 'This is the country which registration is allowed by. [Scheiden door een selectie van ctrl + klik]');
define('_PROFILE_MI_DISTRICT', 'Registraties toegestaan vanuit postcode (alleen US/CA)');
define('_PROFILE_MI_DISTRICT_DESC', 'Dit is de postcode van de regio vanwaar de registratie is toegestaan [Scheiden met een | symbool]');
define('_PROFILE_MI_CITY', 'Plaats van registratie');
define('_PROFILE_MI_CITY_DESC', 'Dit is de plaats vanwaar de registratie is gedaan (alleen US/CA) [Scheiden met een | symbool]');
define('_PROFILE_MI_HTACCESS', 'HTAccess SEO (bekijk htaccess. in /docs)');
define('_PROFILE_MI_HTACCESS_DESC', 'Het .htaccess dient hiervoor gewijzigd te worden.');
define('_PROFILE_MI_BASEURL', 'Basis van de URL voor SEO (wijzig htaccess. in /docs)');
define('_PROFILE_MI_BASEURL_DESC', 'Basispad van SEO');
define('_PROFILE_MI_ENDOFURL', 'Einde van de URL voor HTML (wijzig htaccess. in /docs)');
define('_PROFILE_MI_ENDOFURL_DESC', 'Einde van de URL voor standaard output.');

//Version 1.75
//Preferences
define('_PROFILE_MI_SPEEDTEST', 'Ondersteun snelheidstest Versie 1.03+');
define('_PROFILE_MI_SPEEDTEST_DESC', 'Testen van snelheid toestaan om minimale snelheid voor registratie in te stellen.');
define('_PROFILE_MI_TEST_UPLINK', 'Uploadsnelheid beperken');
define('_PROFILE_MI_TEST_DOWNLINK', 'Downloadsnelheid beperken');
define('_PROFILE_MI_SPEEDTEST_TEST', 'Snelheidstest beperkingen');
define('_PROFILE_MI_SPEEDTEST_TEST_DESC', 'Dit zijn de opties die bezoekers langsgaan om te registreren voor de site.');
define('_PROFILE_MI_SPEEDTEST_UPLINK', 'Minimum Uploadsnelheid (Mbps)');
define('_PROFILE_MI_SPEEDTEST_UPLINK_DESC', 'Dit is de minimum uploadsnelheid die bezoekers nodig hebben om te registeren voor de site, wanneer upload restrictie aanstaat.');
define('_PROFILE_MI_SPEEDTEST_DOWNLINK', 'Minimum Downloadsnelheid (Mbps)');
define('_PROFILE_MI_SPEEDTEST_DOWNLINK_DESC', 'Dit is de minumum downloadsnelheid die bezoekers nodig hebben om te registreren voor de site, wanneer download restrictie aanstaat.');
?>