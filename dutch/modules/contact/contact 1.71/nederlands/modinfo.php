<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// Module Info

// The name of this module
define("_MI_CONTACT_NAME","Contact");
// A brief description of this module
define("_MI_CONTACT_DESC","E-mail contact module");

define('_MI_CONTACT_SETTINGS', 'Instellingen');
define('_MI_CONTACT_SETTINGS_DSC', 'Contacteer ons Verzameling instellingen');
define('_MI_CONTACT_GEN', 'Algemeen' );
define('_MI_CONTACT_GEN_DSC', 'Algemene instellingen voor intro en onderwerp/e-mail definities' );

// Config stuff
define("_MI_CONTACT_GETICQ", "Bewaar ICQ" );
define("_MI_CONTACT_GETICQDSC", "Ja - vraag naar ICQ" );

define("_MI_CONTACT_ALLOWSENDCONFIRM", "Sta bevestigingsberichten toe" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC", "Ja - toon een check box aan de gebruiker, om "
										."een bevestigingse-mail toe te sturen." );

define("_MI_CONTACT_GETURL", "Bewaar gebruikers URL" );
define("_MI_CONTACT_GETURLDSC", "Ja - vraag naar de website van de gebruiker" );

define("_MI_CONTACT_GETCOMPANY", "Bewaar gebruikers bedrijfsnaam" );
define("_MI_CONTACT_GETCOMPANYDSC", "Ja - vraag naar de bedrijfsnaam van de gebruiker" );

define("_MI_CONTACT_GETLOC", "Bewaar gebruikers locatie" );
define("_MI_CONTACT_GETLOCDSC", "Ja - vraag naar de locatie van de gebruiker, niet het volledige adres" );

define("_MI_CONTACT_ADDRESS", "Bewaar gebruikers adres" );
define("_MI_CONTACT_ADDRESSDSC", "Ja - Vraag naar het adres van de gebruiker" );

define("_MI_CONTACT_INTROHEAD", "Introductie Titel weergave" );
define("_MI_CONTACT_INTROHEAD_DESC", "Dit is de titel, gekoppeld aan de <b>Introductie Tekst</b>");
define("_MI_CONTACT_INTROHEAD_DEFAULT",  "Introductie") ;

define("_MI_CONTACT_INTRO", "Introductie Tekst" );
define("_MI_CONTACT_INTRO_DESC", "Tekst die kan worden toegevoegd aan het begin van de <b>Contacteer ons</b><br />"
								."boodschap.  B.v. - Welkomst tekst, e-mailadres, telefoonnummers etc" );
define("_MI_CONTACT_INTRO_DEFAULT","Vul het formulier volledig in en verstuur, we zullen <br /> zo spoedig mogelijk reageren!");

define("_MI_CONTACT_SECURITY", "Beveiligingscheck" );
define("_MI_CONTACT_SECURITYDSC", "Ja - Activeer <b>Beveiligingscheck</b> om gebruikers toe te staan om berichtn te verzenden.<br />"
	                             ."Dit help <b>Contacteer ons</b> tevens om SPAM te voorkomen!" );
								 
define("_MI_CONTACT_SITEKEY", "Willekeurige sleutel" );
define("_MI_CONTACT_SITEKEYDSC", "Maakt mix van letters en/of cijfers om <b>Beveiligingscheck</b><br />"
								."meer wisselend en korrellig te maken!" );
								
define("_MI_CONTACT_HEAD", "Contacteer Titel" );
define("_MI_CONTACT_HEADDSC", "Titel voor Contacteer ons Formulier");
define("_MI_CONTACT_HEADDEFAULT","Contactformulier");

define("_MI_CONTACT_THANKYOU", "Dank bericht");
define("_MI_CONTACT_THANKYOUDSC", "Bericht aan gebruiker om hem te bedanken voor het opnemen van contact");
define("_MI_CONTACT_THANKYOUDEFAULT", "Bedankt voor het bericht. We zullen zo spoedig mogelijk contact opnemen!");

define("_MI_CONTACT_TIMEOUT", "Redirect Pagina Timeout");
define("_MI_CONTACT_TIMEOUTDSC", "Dit is het aantal seconden dat de redirect pagina wordt getoond na het versturen van een bericht.");																						   

define("_MI_CONTACT_SHOWDEPT", "Tonen \"Sectie/Onderwerp\"Sectie");
define("_MI_CONTACT_SHOWDEPTDSC", "Ja - toont een dropdown menu met aanwezige secties/onderwerpen<br />"
                                 ."Als er geen secties worden getoont, worden alle berichten verzonden naar het e-mailadres van de website" );
								 
define("_MI_CONTACT_DEPTTITLE", "\"Sectie/Onderwerp\" Titel");
define("_MI_CONTACT_DEPTTITLEDSC", "Titel tonen in \"Sectie/Onderwerp\" van het Contacteer ons formulier");
define("_MI_CONTACT_DEPTTITLEDEFAULT", "Sectie/Onderwerp");

define("_MI_CONTACT_DEPT", "Secties" );
define("_MI_CONTACT_DEPTDSC", "Secties maken het u mogelijk om e-mailadressen gekoppeld aan secties  te defineren. Berichten, die<br />"
                             ."door gebruikers vanuit een specifieke Sectie/onderwerp worden verstuurd, naar het <br />"
							 ."door u gedefineerde e-mailadres.<br /><br />"
							 ."Defineer ieder sectie/e-mail als volgt:<br /><br />"
							 ."sectie1,e-maildres1|sectie2,e-mailadres2|sectie3,e-mailadres3 etc. - elke sectie en e-mailadres moeten worden gescheiden<br />"
							 ."door een komma ',', en iedere sectie/e-mail combinatie moeten worden gescheiden door een: '|'" );

define("_MI_CONTACT_VALIDATEDOMAIN", "Valideer E-mail Domein");
define("_MI_CONTACT_VALIDATEDOMAINDSC", "Ja - Activeer \"deep-check\" van domein.tld opgegeven in het e-mailadres.<br />"
                                       ."Nee - Doet een simpele controle of het e-mailadres is ingevoerd.");
									   
define("_MI_CONTACT_SHOWMOREINFO", "Tonen \"Meer Informatie\" Sectie" );
define("_MI_CONTACT_SHOWMOREINFODSC", "Ja - Toont een sectie met multi-checkbox die u heeft gedefineerd bij \"Meer Informatie\"");									   							 

define("_MI_CONTACT_MOREINFOTITLE", "\"Meer Informatie\" Titel" );
define("_MI_CONTACT_MOREINFOTITLEDSC", "Toont titel in \"Meer Informatie\" gedeelte van het Contacteer ons formulier" );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Een vraag om meer informatie");

define("_MI_CONTACT_MOREINFO", "\"Meer Informatie\" Items");
define("_MI_CONTACT_MOREINFODSC", "\"Meer Informatie\" items maken het mogelijk om gebruikers items te tonen die zij kunnen bekijken<br />"
                                 ."als ze geinteresseerd zijn of meer willen weten. Het is een mogelijkheid om uw bezoekers te sturen<br />"
								 ."als u dat zou willen.  Als voorbeeld van een commerciele applicatie - een winkel zal eerst<br />"
								 ."algemene informatie willen verstrekken, waarbij de klant wel een specifieke verkoper kan benaderen.  Dit is tevens een<br />"
								 ."manier om klanten te vergaren.<br /><br />"
								 ."Defineer ieder item als volgt:<br /><br />"
								 ."item1|item2|item3 etc. - ieder item moet worden gescheiden door een: '|'");


//1.71
// index.php
//define("_MI_CONTACT_ADMIN_INDEX",                  "Home");

define('_MI_CONTACT_MENU_00',"Home"); 
define("_MI_CONTACT_ADMIN_HOME_DESC","Ga terug naar begin");

define("_MI_CONTACT_ADMIN_ABOUT",                  "Over");
define("_MI_CONTACT_ADMIN_ABOUT_DESC" , "Over deze module");

define("_MI_CONTACT_ADMIN_HELP",                 "Help");
define("_MI_CONTACT_ADMIN_HELP_DESC" , "Module help");								
?>