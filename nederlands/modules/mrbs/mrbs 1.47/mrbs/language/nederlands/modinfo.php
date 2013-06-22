<?php

$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PREFERENCES","Instellingen");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PERMISSION","Toegangsrechten");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_DESC_PERMISSION","Anonieme groep kan enkel details rechten hebben");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_INDEX","Index");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HOW_TO","How To guide");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ABOUT","Over");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ROOMS_AREAS","Kamers en Gebouwen");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HELP","Help");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_UPDATES","Updates");

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_BOOKING','Toegang details');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_CREATE_BOOKING','Maken van een reservatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MODIFY_BOOKING','Beheer van reservaties');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FULL_ADMIN','Volledig beheer');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN','Naam van de beheerder');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL','Email van de beheerder');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY','Bedrijfsnaam');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO','Bedrijfslogo');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO_DESC','Naam van het logobestand. Dit bestand moet in de MRBS folder staan.<br />
Om een bedrijfslogo te tonen i.p.v. de bedrijfsnaam.<br />
Een leeg veld toont de bedrijfsnaam'
);
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO','Meer informatie over je bedrijf');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO_DESC','Extra informatie over je bedrijf<br />
Een leeg veld toont niks');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL','Webadres van je bedrijf');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL_DESC','Link naar je website in de hoofding van het scherm<br />
Een leeg veld toont niks');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE','Url basis');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE_DESC','Indien je een proxy gebruikt in het bedrijf kan er een probleem zijn bij het doorgeven van de URL,<br />
indien dit het geval is geef dan hier de basisURL voor de MRBS folder in.<br />
Deze instelling is ook aan te raden indien je gebruik maakt van email verwittiging,<br />
zodat je zeker bent dat telkens de juiste URL is meegegeven.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER','Toon reservatiemaker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_DESC','Toon echte naam, gebruikersnaam, allebei of niks');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_UNAME','gebruikersnaam');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NAME','echte naam');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_BOTH','allebei');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NONE','niks');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH','Toon kalender van vorige maand');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH_DESC','2 of 3 kalenders in het reservatiescherm');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS','Periodes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_DESC','Gebruik klok gebaseerde intervals (uit)<br /> of vooraf ingestelde periodes (aan).<br />
Indien je vooraf ingestelde periodes gebuikt dan worden de instellingen van<br />
Resolutie, Startuur, Einduur, Eindminuten en 24H formaat genegeerd.<br />
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_TRUE','Periodes aan');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_FALSE','Periodes uit');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS','Gebruikte periodes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS_DESC','Geef hier de periodes in die je wenst te gebruiken met de code P1 tot P60, elk gescheiden door een komma<br />
Editeer de lang.* bestanden in de MRBS folder om de tekst aan te passen (rond lijn 290).<br />
Je kan maximum 60 periodes gebruiken');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION','Resolutie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION_DESC','Welk blok in seconden kan je reserveren.<br />
1800 sec = 30 min');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION','Standaard duur van een reservatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION_DESC','Standaard duur van een reservatie in seconden.<br />
Niet gebruikt als je werkt met periodes. Standaard 3600 seconden = 1 uur');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS','Eerste uur van de dag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_DESC','Waarde tussen 0 en 23');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES','Eerste minuten van de dag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES_DESC','Waarde tussen 0 en 59');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS','Laatste uur van de dag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_DESC','Waarde tussen 0 en 23');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES','Laatste minuten van de dag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES_DESC','Waarde tussen 0 en 59');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS','Startdag van de week');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_DESC','Op welke dag start de week 0 = Zondag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS','Dagen verbergen');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS_DESC','Dagen die je niet wenst te zien in het reservatiescherm (komma als scheidingsteken)<br />
0 voor Zondag, 1 voor Maandag, enz.<br />
Voorbeeld, je wil Zaterdag en Zondag niet zien <b>0,6</b><br />
Standaard zijn de verborgen dagen volledig onzichtbaar in de maand en week tabel.<br />
Je kan ze zichtbaar maken als smalle kolom of grijze kolom door het CSS bestand aan te passen.<br />
Zoek naar $column_hidden_width in mrbs.css.php.<br />
Opmerking: niet tegenstaande ze verborgen zijn in week en maand overzicht,<br />
kan je nog altijd een reservatie maken via het ingavescherm<br />
en je kan ze nog altijd zichtbaar maken in het overzicht door via de datumselectie er rechtstreeks naartoe te gaan.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT','Datumformaat in voettekst van de pagina');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_DESC','Toon de datum als "Jul 10" of "10 Jul".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_0','Ex: Jul 10');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_1','Ex: 10 Jul');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT','Tijdsaanduiding op de pagina');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_DESC','12H aanduiding of 24H aanduiding.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_0','12H');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_1','24H');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS','Maximum aantal herhalende ingaves');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS_DESC','Max nodig +1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS','Standaard rapportoverzicht in dagen');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT','Aantal resultaten per pagina bij het zoeken');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE','Pagina automatisch vernieuwen (in seconden)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE_DESC','0 om niet te gebruiken.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER','Uitzicht voettekst pagina');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_DESC','Complete voettekst met een link naar dagen, weken en maand voor en na de huidige datum.<br />
Of een eenvoudige voettekst met een link naar de huidige dag, week en maand.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_TRUE','Eenvoudige voettekst');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_FALSE','Volledige voettekst');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT','Uitzicht selectievak kamers en gebouwen');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_DESC','Kamers en gebouwen tonen als een lijst of een drop-down selectievak.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_LIST','Lijst');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_SELECT','Dropdown selectievak');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS','Details boekingen in maandoverzicht');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_DESC','Boekingen in het maandoverzicht kunnen getoond worden als start/eind uur, korte beschrijving of allebei.<br />
Kies "beschrijving" voor korte beschrijving, "slot" voor start/end uur of "allebei" voor beide.<br />
Standaard is "allebei", maar je ziet er maximum 6 per dag en niet 12.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_D','Beschrijving');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_S','Slot');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_B','Allebei');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER','Weeknummer');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_DESC','Weergave van de weken in de voettekst van je pagina (trailer.inc) als weeknummers (42) i.p.v. "Eerste dag van de week" (13 Oct)".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_TRUE','Toon weeknummerr');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_FALSE','Verberg weeknummer');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE','Tijdsaanduiding rechts');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_DESC','Om ook de tijdsaanduiding rechts van je dag en week overzicht te zien".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_TRUE','Toon tijd aan de rechterkant');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_FALSE','Verberg tijd aan de rechterkant');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR','Javascript cursor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_DESC','Werking actieve cursor in dag/week/maand overzicht.<br />
Standaard gebruikt het systeem highlighting via de CSS :hover pseudo-class.<br />
Oudere browsers zoals IE6 ondersteunen dit niet en MRBS zal automatisch overschakelen naar JavaScript highlighting.<br />
Hierbij zijn er drie mogelijkheden: "bgcolor","class" and "hybrid" (Zie volgende instelling).<br />
Bij echt oude browsers kan je JavaScript highlighting beter uitschakelen.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_TRUE','javascript cursor AAN');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_FALSE','javascript cursor UIT');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD','Highlight methode');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_DESC','"Hybrid" is aan te raden en is sneller in oudere browsers zoals IE6<br />
Dit is de enige keer dat JavaScript highlighting wordt gebruikt.<br />
Anders gebruikt men steeds CSS highlighting of "javascript cursor" aan staat of niet.<br />
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_HYBRID','Hybrid');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_CLASS','Class');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_BGCOLOR','Bgcolor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK','(+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_DESC','Altijd de (+) link tonen');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_TRUE','Toon (+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_FALSE','Verberg (+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW','Standaard startscherm');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DESC','Maand, week of dag overzicht');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DAY','Dag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_WEEK','Week');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_MONTH','Maand');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM','Standaard kamer');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM_DESC','Standaard kamer die moet getoond worden op de eerste pagina (gebruikt door index.php)<br />
Je kan de kamernummers zien door naar de Aanpassen of Verwijderen URL van de kamer te kijken op de beheerpagina.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING','Scrollen in de cellen van het maandoverzicht aanzetten');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_DESC','Kies Ja als je wil kunnen scrollen in de cellen van het maandoverzicht.<br />
Note: Dit werkt niet met IE6 en IE8 Beta2
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE','Tijdzone van de webserver');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE_DESC','Stel hier de tijdzone van je webserver in. vb: Europe/London of Europe/Brussels<br />
Deze instelling is belangrijk als je PHP5 gebruikt op een Linux server en er reservaties worden <br />
gemaakt vanuit verschillende tijdzones en wanneer je SMTP gebruikt voor het verzenden van emailberichten met MRBS
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION','Verificatiemethode gebruiker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_DESC','Hoe het Xoops user ID gebruiken en vasthouden.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_PHP','php');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_HTTP','http');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS','Email (globale) beheerder bij het plaatsen van een reservatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_DESC','Kies Ja als je dit wil');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS','Email gebouwgeheerder bij het plaatsen van een reservatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_DESC','Kies Ja als je dit wil.<br />
Emailadres van een gebouwbeheerder stel je in via de Beheer Kamers en Gebouwen pagina.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS','Email kamerbeheerder bij het plaatsen van een reservatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_DESC','Kies Ja als je dit wil.<br />
Emailadres van een kamerbeheerder stel je in via de Beheer kamers en Gebouwen pagina.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE','Email (globale) beheerder bij het verwijderen van een reservatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_DESC','Kies Ja als je dit wil.<br />
Email zal verzonden worden naar de (globale) mrbs beheerder,<br />
gebouwbeheerder indien ingesteld en reservatiemaker als Email reservatiemaker aanstaat (zie verder).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL','Email alle beheerders');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_DESC','Kies Ja als je bericht wenst te ontvangen van elke aanpassing (nieuwe ingaves).<br />
Ook als ze aangepast worden. Standaard is Nee (enkel ,nieuwe ingaves)
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS','Email details');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_DESC','Kies Ja als je details wil zien in het mailbericht, anders krijg je enkel een link naar de webpagina van die reservatie.<br />
Niet belangrijk voor verwijderde reservaties.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER','Email reservatiemaker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_DESC','Kies Ja als je wil dat de reservatiemaker een kopie ontvangt van de gemaakte / aangepaste reservatie.<br />

');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND','Emailsysteem');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_DESC','Kies het mailsysteem dat je wenst te gebruiken.<br />
Ofwel "mail","smtp" of "sendmail".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_MAIL','mail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SMTP','smtp');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SENDMAIL','Sendmail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH','Sendmail path');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH_DESC','Het path naar het Sendmail programma (enkel indien je de optie "sendmail" gebruikt).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS','Sendmail parameters');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS_DESC','Extra Sendmail parameters (enkel indien je de optie "sendmail" gebruikt).<br />
Voorbeeld : -t -i
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST','Smtp server');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST_DESC','Gebruikte smtp server.<br />
Enkel indien je "smtp" gebruikt.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT','Smtp poort');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT_DESC','Kies de gebruikte smtp poort.<br />
Enkel indien je "smtp" gebruikt.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH','Smtp authenticatie');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_DESC','Ja indien je SMTP authenticatie gebruikt.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME','Smtp gebruikersnaam');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME_DESC','Gebruikersnaam voor SMTP authenticatie.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD','Smtp wachtwoord');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD_DESC','Wachtwoord voor SMTP authenticatie.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG','Emailtaal van de beheerder');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG_DESC','Kies de gebruikte taal voor de emails (kies een beschikbare taal).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM','Email van');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM_DESC','Het gebruikte emailadres in het Van vakje.<br />
Indien leeg gebruikt het systeem het emailadres van de beheerder.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS','Email ontvangers');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS_DESC','Geef de emailadressen voor ontvangers.<br />
Je kan meerdere adressen ingeven op volgende manier "john@doe.com,scott@tiger.com".<br />
Indien leeg gebruikt het systeem het emailadres van de beheerder.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC','Carbon copy email ontvangers');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC_DESC','Geef de emailadressen voor de CC ontvangers.<br />
Je kan meerdere adressen ingeven op volgende manier "john@doe.com,scott@tiger.com".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING','Unicode codering');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_DESC','Standaard UTF-8 voor alle informatie<br />
Indien niet zullen de tekens met verschillende coderingen bewaard worden in de database afhankelijk van de gebruikerstaal');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_0','Geen UTF-8 gebruiken');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_1','Wel UTF-8 gebruiken');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS','Standaard taal');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS_DESC','Standaard taal voor het volledige systeem.<br />
Maak een keuze uit de aangeboden lijst voor de standaardtaal van het systeem.<br />
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE','Automatisch de taal aanpassen');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_DESC',"Aan of uit. Automatisch de taal van MRBS instellen gebaseerd op de browserinstelling van de gebruiker.<br />
indien 'uit', gebruikt het systeem de Standaard taal instelling.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_0','Aan');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_1','Uit');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG','Taal voor het FAQ bestand');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG_DESC',"Standaard engels.<br />
Maak een keuze uit de aangeboden lijst.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME','Thema');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME_DESC','Maak een keuze uit de aangeboden lijst.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES','Soorten reservaties');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES_DESC','maak je eigen soorten reservaties.<br />
Gebruik A tot Z (met uitzondering van E en I die standaard aanstaan als intern en extern).<br />
Gebruik een komma als scheidingsteken<br />
Editeer de lang.* bestanden in de "mrbs" folder om de tekst aan te passen (rond lijn 260).<br />
Editeer de *.inc bestanden (rond lijn 70) in de "Themes" folder om de kleuren aan te passen.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_0','Zondag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_1','Maandag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_2','Dinsdag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_3','Woensdag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_4','Donderdag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_5','Vrijdag');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_6','Zaterdag');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET','Karakterset mail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET_DESC','Je kan de standaard karakterset gebruikt in mails wijzigen (standaard utf-8), zorg er wel voor dat de gekozen karakterset de door jou gebruikte tekens kan tonen.<br />
voorbeeld : iso-8859-1 .
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING','Gebruik een limiet voor aantal dagen op voorhand reserveren');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_DESC','Beperk het maken van reservaties in tijd. Niet van toepassing voor full admins');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_TRUE','Ja');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_FALSE','Nee');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING','Aantal dagen dat men op voorhand kan reserveren');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING_DESC','Limiet moet hiervoor aanstaan. Optie hierboven.');

?>