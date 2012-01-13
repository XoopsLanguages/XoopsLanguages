<?php
// $Id: modinfo.php, v 3.1 2011/03/04 12:52:25 mamba Exp $
// Module Info

// The name of this module
define("_MI_MYLINKS_NAME", "My Links");

// A brief description of this module
define("_MI_MYLINKS_DESC", "Maakt een web links sectie waar bezoekers websites kunnen zoeken/inzenden/beoordelen.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1", "Recente Links");
define("_MI_MYLINKS_BNAME1DESC", "Geeft recent toegevoegde links weer");
define("_MI_MYLINKS_BNAME2", "Top Links");
define("_MI_MYLINKS_BNAME2DESC", "Geeft de meest bezochte links weer");
define("_MI_MYLINKS_BNAME3", "Willekeurige Link");
define("_MI_MYLINKS_BNAME3DESC", "Geeft een willekeurige link weer");
// Sub menu titles
define("_MI_MYLINKS_SMNAME1", "Inzenden");
define("_MI_MYLINKS_SMNAME2", "Populair");
define("_MI_MYLINKS_SMNAME3", "Top Beoordeeld");

// Names of admin menu items
define("_MI_MYLINKS_ADMENU2", "Links Toev./ Aanp.");
define("_MI_MYLINKS_ADMENU3", "Ingezonden Links");
define("_MI_MYLINKS_ADMENU4", "Gebroken Links");
define("_MI_MYLINKS_ADMENU5", "Aangepaste Links");
define("_MI_MYLINKS_ADMENU6", "Permissies");
define("_MI_MYLINKS_ADMENU7", "Sjabloon beheer");

// Template Descriptions
define("_MI_MYLINKS_TPLDESC_BROKEN", "Gebroken Link Sjabloon");
define("_MI_MYLINKS_TPLDESC_LINK", "Link Sjabloon");
define("_MI_MYLINKS_TPLDESC_INDEX", "Module Index Sjabloon");
define("_MI_MYLINKS_TPLDESC_MODLINK", "Link aanpassen Sjabloon");
define("_MI_MYLINKS_TPLDESC_RATELINK", "Link beoordelen Sjabloon");
define("_MI_MYLINKS_TPLDESC_SINGLELINK", "Enkele Link Sjabloon");
define("_MI_MYLINKS_TPLDESC_SUBMIT", "Link inzenden Sjabloon");
define("_MI_MYLINKS_TPLDESC_TOPTEN", "Top tien Sjabloon");
define("_MI_MYLINKS_TPLDESC_VIEWCAT", "Categorie bekijken Sjabloon");
define("_MI_MYLINKS_TPLDESC_ADMIN_INDEX", "Beheer Index Sjabloon");
define("_MI_MYLINKS_TPLDESC_ADMIN_ABOUT", "Beheer Over Sjabloon");
define("_MI_MYLINKS_TPLDESC_ADMIN_HELP", "Beheer Help Sjabloon");
define("_MI_MYLINKS_TPLDESC_SEARCHINC", "Zoek form. Sjabloon");

// Title of config items
define('_MI_MYLINKS_POPULAR', 'Kies het aantal hits zodat de links als populair wordt gemarkeerd');
define('_MI_MYLINKS_NEWLINKS', 'Kies het maximum aantal weergegeven nieuwe links op de index pagina');
define('_MI_MYLINKS_PERPAGE', 'Kies het maximum aantal weergegeven links per pagina');
define('_MI_MYLINKS_USESHOTS', 'Een voorbeeld weergeven voor elke link');
define('_MI_MYLINKS_USEFRAMES', 'Wil je de gekozen pagina in een frame laten weergeven?');
define('_MI_MYLINKS_SHOTWIDTH', 'Maximum toegestane breedte van elke voorbeeld afbeelding (in pixels)');
define('_MI_MYLINKS_SHOTPROVIDER', 'Kies een voorbeeld provider');
define('_MI_MYLINKS_ANONPOST', 'Inzendingen van anonieme bezoekers toestaan?');
define('_MI_MYLINKS_AUTOAPPROVE', 'Nieuwe links automatisch goedkeuren zonder tussenkomst van de beheerder?');
define('_MI_MYLINKS_INCADMIN', 'Beheerder bezoeken meetellen in het aantal hits?');
define('_MI_MYLINKS_SHOWEXTRAFUNC', 'Extra functionaliteit bij een link weergeven?');
define('_MI_MYLINKS_CANPRINT', 'Kies welke gebruikers mogen printen');
define('_MI_MYLINKS_CANPDF', 'Kies welke gebruikers een pdf mogen maken');
define('_MI_MYLINKS_CANBOOKMARK', 'Kies welke gebruikers een link als favoriet mogen opslaan');
define('_MI_MYLINKS_CANQRCODE', 'Kies welke gebruikers een qrcode (3D barcode) mogen maken');
define('_MI_MYLINKS_SHOWLOGO', 'Logo weergeven?');
define('_MI_MYLINKS_SHOWXOOPSSEARCH', 'XOOPS sitebreed zoek formulier weergeven in module sjablonen?');
define('_MI_MYLINKS_SHOWTOOLBAR', 'Horizontaal Menu bovenin de module sjablonen weergeven?');
define('_MI_MYLINKS_SHOWLETTERS', 'Alfabetische index bovenin de module sjablonen weergeven?');
define('_MI_MYLINKS_SHOWFEED', 'RSS/Atom feed pictogrammen weergeven?');
define('_MI_MYLINKS_SHOWSITEINFO', 'Link statistieken info weergeven?');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC', '');
define('_MI_MYLINKS_NEWLINKSDSC', '');
define('_MI_MYLINKS_PERPAGEDSC', '');
define('_MI_MYLINKS_USEFRAMEDSC', '');
define('_MI_MYLINKS_USESHOTSDSC', '');
define('_MI_MYLINKS_SHOTWIDTHDSC', '');
define('_MI_MYLINKS_SHOTPROVIDERDSC', 'Provider van voorbeeld afbeeldingen als de afbeeldingen uit de afbeeldingmap niet worden gebruikt.');
define('_MI_MYLINKS_AUTOAPPROVEDSC', '');
define('_MI_MYLINKS_INCADMINDSC', '');
define('_MI_MYLINKS_SHOWEXTRAFUNCDSC', 'Print, pdf, qrcode, favoriet opties weergeven');
define('_MI_MYLINKS_CANPRINTDSC', '');
define('_MI_MYLINKS_CANPDFDSC', '');
define('_MI_MYLINKS_CANBOOKMARKDSC', '');
define('_MI_MYLINKS_CANQRCODEDSC', 'Nota: QRCODE module moet geinstalleerd zijn om deze functie te gebruiken');
define('_MI_MYLINKS_SHOWLOGODSC', '');
define('_MI_MYLINKS_SHOWXOOPSSEARCHDSC', '');
define('_MI_MYLINKS_SHOWTOOLBARDSC', '');
define('_MI_MYLINKS_SHOWLETTERSDSC', '');
define('_MI_MYLINKS_SHOWFEEDDSC', '');
define('_MI_MYLINKS_SHOWSITEINFODSC', 'Menu met Alexa, Archive, & Google stats Weergeven');

// Values for config items
define('_MI_MYLINKS_DISALLOW', 0);
define('_MI_MYLINKS_ALLOW', 1);
define('_MI_MYLINKS_MEMBERONLY', 2);
define('_MI_MYLINKS_ALLOWDSC', 'All gebruikers toestaan');
define('_MI_MYLINKS_DISALLOWDSC', 'Alle gebruikers verbieden');
define('_MI_MYLINKS_MEMBERONLYDSC', 'Alleen geregistreerde gebruikers');
define('_MI_MYLINKS_SHPROV0', 'Thumbshots.org');
define('_MI_MYLINKS_SHPROV1', 'Nemui.org');
define('_MI_MYLINKS_SHPROV0_VAL', 'http://open.thumbshots.org/image.pxf?url=');
define('_MI_MYLINKS_SHPROV1_VAL', 'http://mozshot.nemui.org/shot?');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY', 'Globaal');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC', 'Globale links notificatie opties.');

define('_MI_MYLINKS_CATEGORY_NOTIFY', 'Categorie');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC', 'Notificatie opties die alleen van toepassing zijn op de huidige categorie.');

define('_MI_MYLINKS_LINK_NOTIFY', 'Link');
define('_MI_MYLINKS_LINK_NOTIFYDSC', 'Notificatie opties die alleen van toepassing zijn op de huidige link.');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuwe Categorie');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Melden wanneer er een nieuwe categorie is aangemaakt.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang een melding wanneer er een nieuwe categorie is aangemaakt.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Nieuwe link categorie');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Aanpassen Link Verzocht');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Melden wanneer er een verzoek tot aanpassing wordt gedaan.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Ontvang een melding wanneer er een verzoek tot aanpassing is verzonden.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Link Aanpassing Verzocht');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Gebroken Link Ingezonden');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Melden wanneer een link als gebroken wordt gemeld.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Ontvang een melding wanneer een link als gebroken wordt aangemeld.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Gebroken Link Ingezonden');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Nieuwe Link Ingezonden');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Melden wanneer er een nieuwe link is ingezonden (in afwachting).');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Ontvang een melding wanneer er een nieuwe link is ingezonden, die wacht op goedkeuring.');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Nieuwe link ingezonden');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY', 'Nieuwe Link');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Melden wanneer er een nieuwe link is geplaatst.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Ontvang een melding wanneer er een nieuwe link op de site is geplaatst.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Nieuwe link');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY', 'Nieuwe Link Ingezonden');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Melden wanneer er een nieuwe link is ingezonden (in afwachting) voor de huidige categorie.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Ontvang een melding wanneer er een nieuwe link is ingezonden (die wacht op goedkeuring) voor de huidige categorie.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Nieuwe link in categorie ingezonden');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY', 'Nieuwe Link');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Melden wanneer er een nieuwe link is geplaatst voor de huidige categorie..');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Ontvang een melding wanneer er een nieuwe link is geplaatst op de site voor de huidige categorie..');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Nieuwe link in categorie');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY', 'Link Goedgekeurd');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP', 'Melden wanneer deze link is goedgekeurd.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC', 'Ontvang een melding wanneer deze link is goedgekeurd.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-melding : Link goedgekeurd');

// index.php
define("_MYLINKS_ADMIN_HOME", "Start");
define("_MYLINKS_ADMIN_INDEX", "FAQ");
define("_MYLINKS_ADMIN_ABOUT", "Over");
define("_MYLINKS_ADMIN_HELP", "Help");
define("_MYLINKS_ADMIN_SLIDES", "Dia's");
define("_MYLINKS_ADMIN_PREFERENCES", "Voorkeuren");


define("_MYLINKS_ADMIN_HOME_DESC", "Start");
define("_MI_MYLINKS_ADMENU2_DESC", "Links Toevoegen/Aanpassen");
define("_MI_MYLINKS_ADMENU3_DESC", "Ingezonden Links");
define("_MI_MYLINKS_ADMENU4_DESC", "Gebroken Links");
define("_MI_MYLINKS_ADMENU5_DESC", "Aangepaste Links");
define("_MI_MYLINKS_ADMENU6_DESC", "Blokken/Groepen Beheer");
define("_MI_MYLINKS_ADMENU7_DESC", "Sjabloon Beheer");
define("_MYLINKS_ADMIN_ABOUT_DESC", "Info over de module");
define("_MYLINKS_ADMIN_HELP_DESC", "Help");

/**
 * Module Prefs
 */
define( '_XO_MIF_MYLINKS_EDITORS', 'Kies tekstverwerker:' );
define( '_XO_MIF_MYLINKS_EDITORS_DSC', 'Kies de tekstverwerker die je wilt gebruiken.<br />Het kan nodig zijn om er eerst een te insttalleren voordat je hem kan gebruiken.' );