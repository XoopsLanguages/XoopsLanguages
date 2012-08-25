<?php

// The name of this module
define("_MI_SHOUTBOX_NAME","Shoutbox");

// A brief description of this module
define("_MI_SHOUTBOX_DESC","Enables a shoutbox block with an additional popup.");

// Menu
define('_MI_SHOUTBOX_MENU_DB','Database');
define('_MI_SHOUTBOX_MENU_FILE','Bestand');
define('_MI_SHOUTBOX_MENU_STATUS','Status');

// Names of blocks for this module (Not all module has blocks)
define("_MI_SHOUTBOX_BLOCK","Shoutbox");

// Categories
define("_MI_SHOUTBOX_CAT1","--- Algemene instellingen ---");
define("_MI_SHOUTBOX_PREF_CAT1","Algemene instellingen");
define("_MI_SHOUTBOX_CAT2","--- Blok instellingen ---");
define("_MI_SHOUTBOX_PREF_CAT2","Blok instellingen");
define("_MI_SHOUTBOX_CAT3","--- PopUp instellingen ---");
define("_MI_SHOUTBOX_PREF_CAT3","PopUp instellingen");
define("_MI_SHOUTBOX_CAT4","--- Tekst Input instellingen ---");
define("_MI_SHOUTBOX_PREF_CAT4","Tekst Input instellingen");

// Config language definitions...
define("_MI_SHOUTBOX_TITLE1", "Mogen gasten plaatsen?");
define("_MI_SHOUTBOX_TITLE2", "Mogen gasten een naam kiezen?");
define("_MI_SHOUTBOX_DESC2", "Als gasten mogen plaatsen, mogen ze ook een eigen naam kiezen?");
define("_MI_SHOUTBOX_TITLE3", "bbcode toestaan");
define("_MI_SHOUTBOX_DESC3", "Sta gebruikers toe om bbcode te gebruiken? bv [b], [url=], enz..");
define("_MI_SHOUTBOX_TITLE4", "Tijdsaanduiding formaat");
define("_MI_SHOUTBOX_DESC4", "In welk formaat wordt de tijd van de shout weergegeven? (<a href='http://www.php.net/manual/en/function.date.php' target='_blank'>Beschrijving</a>)");
define("_MI_SHOUTBOX_TITLE5", "Trimming");
define("_MI_SHOUTBOX_DESC5", "Maximum shouts before trimming takes place. (0 = no trimming, be cautious!!!)");
define("_MI_SHOUTBOX_TITLE6", "Max Shouts");
define("_MI_SHOUTBOX_DESC6", "Hoeveeel shouts worden weergegeven?");
define("_MI_SHOUTBOX_TITLE7", "Opslag");
define("_MI_SHOUTBOX_DESC7", "Definieer waar de shouts worden opgeslagen");
define("_MI_SHOUTBOX_TITLE8", "Echte naam");
define("_MI_SHOUTBOX_DESC8", "Wordt de echte naam van de gebruiker getoont? Bij 'Nee', gebruikersnaam wordt getoond");
define("_MI_SHOUTBOX_OP7_F", "Bestand [csv]");
define("_MI_SHOUTBOX_OP7_D", "Database [mysql]");
define("_MI_SHOUTBOX_TITLE11","Smiley bar weergeven in blok?");
define("_MI_SHOUTBOX_TITLE12", "Shout berichten blok IFrame breedte");
define("_MI_SHOUTBOX_DESC12", "De breedte van het iframe in het blok.");
define("_MI_SHOUTBOX_TITLE13", "Shout berichten blok IFrame hoogte");
define("_MI_SHOUTBOX_DESC13", "De hoogte van het iframein het blok.");
define("_MI_SHOUTBOX_TITLE14", "Shout berichten IFrame randbreedte");
define("_MI_SHOUTBOX_TITLE15", "PopUp scherm actief");
define("_MI_SHOUTBOX_DESC15", "Mogen gebruikers het blok gebruiken?");
define("_MI_SHOUTBOX_TITLE16", "Auto-vernieuwing opties weergeven");
define("_MI_SHOUTBOX_DESC16", "Auto-vernieuwing opties weergeven in blok");
define("_MI_SHOUTBOX_OP16_BA0", "Auto-vernieuwing opties niet weergeven");
define("_MI_SHOUTBOX_OP16_BA1", "Auto-refresh opties weergeven");
define("_MI_SHOUTBOX_TITLE17", "Shout berichten woord afbreken Instelling");
define("_MI_SHOUTBOX_DESC17", "Deze waarde stelt een limiet op het aantal tekens per regel weer te geven in het shoutbox blok iframe. Het instellen van deze waarde op 0 schakelt afbreken van woorden in.");
define("_MI_SHOUTBOX_TITLE18", "Avatar weergeven");
define("_MI_SHOUTBOX_DESC18", "Determines if avatars are displayed in ShoutBox block");
define("_MI_SHOUTBOX_TITLE19", "Gast Avatar");
define("_MI_SHOUTBOX_DESC19", "<table><tr>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest1.gif\" width=60></td>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest2.gif\" width=60></td>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest3.gif\" width=60></td>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest4.gif\" width=60></td>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest5.gif\" width=60></td>
                               </tr><tr>
                               <td>gast1</td>
                               <td>gast2</td>
                               <td>gast3</td>
                               <td>gast4</td>
                               <td>gast5</td>
                               </tr></table>");
define("_MI_SHOUTBOX_OP19_GA0", "Geen");
define("_MI_SHOUTBOX_OP19_GA1", "gast1");
define("_MI_SHOUTBOX_OP19_GA2", "gast2");
define("_MI_SHOUTBOX_OP19_GA3", "gast3");
define("_MI_SHOUTBOX_OP19_GA4", "gast4");
define("_MI_SHOUTBOX_OP19_GA5", "gast5");

define("_MI_SHOUTBOX_TITLE31", "'Wie is online' weergeven");
define("_MI_SHOUTBOX_DESC31", "In de popup 'wie is online' weergeven. Waarschuwing: Wie is online blok moet ingeschakeld zijn!");
define("_MI_SHOUTBOX_TITLE32", "Smiley bar in PopUp weergeven");
define("_MI_SHOUTBOX_TITLE33", "Geluid afspelen bij nieuw bericht?");
define("_MI_SHOUTBOX_TITLE34", "Mogen gasten de popup gebruiken?");
define("_MI_SHOUTBOX_DESC34", "Mogen gasten de popup gebruiken als deze is geactiveerd?");
define("_MI_SHOUTBOX_TITLE35", "IRC-kloon");
define("_MI_SHOUTBOX_DESC35", "IRC commandos activeren. Op dit moment worden alleen /quit en /nick ondersteund.");
define("_MI_SHOUTBOX_TITLE36", "Auto-focus");
define("_MI_SHOUTBOX_DESC36", "Focust automatisch het popup scherm wanneer er een nieuw bericht is.");
define("_MI_SHOUTBOX_TITLE37", "PopUp breedte");
define("_MI_SHOUTBOX_DESC37", "Standaard popup breedte (in pixels)");
define("_MI_SHOUTBOX_TITLE38", "PopUp hoogte");
define("_MI_SHOUTBOX_DESC38", "Standaar popup hoogte (in pixels)");
define("_MI_SHOUTBOX_TITLE40", "Shout Tekst invoer Type");
define("_MI_SHOUTBOX_DESC40", "Shout tekst invoer selectie");
define("_MI_SHOUTBOX_OP40_TL", "Enkele lijn Tekst");
define("_MI_SHOUTBOX_OP40_TA", "Multi-lijn Tekstveld");
define("_MI_SHOUTBOX_TITLE41", "Tekstveld rijen");
define("_MI_SHOUTBOX_DESC41", "Hoogte van tekstveld in rijen<br />Alleen mogelijk wanneer Shout tekst invoer selectie = Multi-lijn tekstveld");
define("_MI_SHOUTBOX_TITLE42", "Tekstveld kolommen");
define("_MI_SHOUTBOX_DESC42", "Breedte van tekstveld in kolommen<br />Alleen mogelijk wanneer Shout tekst invoer selectie = Multi-lijn tekstveld");
define("_MI_SHOUTBOX_TITLE43", "Tekstlijn lengte");
define("_MI_SHOUTBOX_DESC43", "Breedte van enkele tekstlijn invoer in kakakters");
define("_MI_SHOUTBOX_TITLE44", "Tekst Max karakters");
define("_MI_SHOUTBOX_DESC44", "Maximum lengte voor tekstinvoer");
define("_MI_SHOUTBOX_TITLE45", "Text Input Maximum waarschuwingen");
define("_MI_SHOUTBOX_DESC45", "Activeert waarschuwingsberichten wanneer maximum tekstveldlimiet is bereikt");
define("_MI_SHOUTBOX_TITLE46", "Captcha inschakelen");
define("_MI_SHOUTBOX_DESC46", "Activeert captcha bevestigingscode (anti-spam instellinge)");
define("_MI_SHOUTBOX_OP46_A", "Uitgeschakeld - Frameworks/captcha niet gevonden");
define("_MI_SHOUTBOX_OP46_B", "Disable Captcha");
define("_MI_SHOUTBOX_OP46_C", "Enable Frameworks Captcha");
define("_MI_SHOUTBOX_OP46_D", "Enable Core Captcha");
define('_MI_SHOUTBOX_EMPTY', '');
?>