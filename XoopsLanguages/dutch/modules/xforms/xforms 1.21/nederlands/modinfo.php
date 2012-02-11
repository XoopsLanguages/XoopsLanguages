<?php
######### (liaise) version 1.0  additions #########
// The name of this module
define("_MI_xforms_NAME","xForms");

// A brief description of this module
define("_MI_xforms_DESC","Contactformulier generator");

// admin/menu.php
define("_MI_xforms_ADMENU1","Formulieren beheren");
define("_MI_xforms_ADMENU2","Formulier toevoegen");

//	preferences
define("_MI_xforms_TEXT_WIDTH","Standaard breedte voor tekstregels");
define("_MI_xforms_TEXT_MAX","Standaard maximum lengte voor tekstregels");
define("_MI_xforms_TAREA_ROWS","Standaard aantal rijen voor tekstvakken");
define("_MI_xforms_TAREA_COLS","Standaard aantal kolommen voor tekstvakken");

######### (liaise) version 1.1  additions #########
//	preferences
define("_MI_xforms_MAIL_CHARSET","Tekst-codering voor het verzenden van e-mailberichten");

//	template descriptions
define("_MI_xforms_TMPL_MAIN_DESC","Hoofdpagina van xforms");
define("_MI_xforms_TMPL_ERROR_DESC","Deze pagina weergeven wanneer er fouten optreden");

######### (liaise) version 1.2 additions #########
//	template descriptions
define("_MI_xforms_TMPL_FORM_DESC","Sjabloon voor formulieren");

//	preferences
define("_MI_xforms_MOREINFO","Verstuur extra informatie mee gezamelijk met het ingediende formulier");
define("_MI_xforms_MOREINFO_USER","Gebruikersnaam en URL naar gebruikersprofiel");
define("_MI_xforms_MOREINFO_IP","IP adres van de indiener");
define("_MI_xforms_MOREINFO_AGENT","useragent van de indiener (browser info)");
define("_MI_xforms_MOREINFO_FORM","URL van het ingediende formulier");
define("_MI_xforms_MAIL_CHARSET_DESC","Laat leeg voor "._CHARSET);
define("_MI_xforms_PREFIX","Tekst voorvoegsel voor verplichte velden");
define("_MI_xforms_SUFFIX","Tekst achtervoegsel voor verpichte velden");
define("_MI_xforms_INTRO","Introductietekst op hoofdpagina");
define("_MI_xforms_GLOBAL","Tekst die wordt weergegeven op iedere formulierpagina");

// admin/menu.php
define("_MI_xforms_ADMENU3","Elementen toevoegen");
define("_MI_xforms_ADMENU5","Over");

######### (liaise) version 1.21 additions #########
// preferences default values
define("_MI_xforms_INTRO_DEFAULT","Neem contact op via het volgende betekend:");
define("_MI_xforms_GLOBAL_DEFAULT","[b]* Verplicht[/b]");

######### (liaise) version 1.23 additions #########
define("_MI_xforms_UPLOADDIR","Fysiek pad om bestanden op te slaan ZONDER // (trailing slash) ");
define("_MI_xforms_UPLOADDIR_DESC","Alle bestanden worden hier opgeslagen wanneer een formulierwordt verstuurd via priveboodschap");

######### (xforms) version 1.0 additions ##########
define( "_MI_xforms_CAPTCHA", "Captcha gebruiken in formulier?" );
define( "_MI_xforms_CAPTCHADSC", "Selecteer <em>Ja</em> om captcha te gebruiken in het formulier.<br />Standaard: <em>Ja</em>" );
define("_MI_xforms_ADMENU4","Importeren vanuit Liaise");

######### (xforms) version 1.0.0.1 additions ##########
define("_MI_xforms_NOFORM","Tekst die getoond wordt aan de gebruiker wanneer er geen formulieren zichtbaar zijn.");
define("_MI_xforms_NOFORM_DEFAULT","Sorry, er zijn op dit moment geen formulieren (zichtbaar).");

define("_MI_xforms_ADMENU0","Home");
?>