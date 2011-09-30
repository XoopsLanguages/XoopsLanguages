<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Nieuws');

// A brief description of this module
define('_MI_NEWS_DESC','Maak een Slashdot-like nieuwssectie, waar gebruikers niews en commentaren kunnen plaatsen.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Nieuws onderwerpen'); //Topics
define('_MI_NEWS_BNAME3','Groot Artikel');
define('_MI_NEWS_BNAME4','Top Nieuws');
define('_MI_NEWS_BNAME5','Recent Nieuws');
define('_MI_NEWS_BNAME6','Modereer Nieuws');
define('_MI_NEWS_BNAME7','Navigeer door onderwerpen'); //topics

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Nieuws inzenden');
define('_MI_NEWS_SMNAME2','Nieuwsarchief');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Categorieën Manager');
define('_MI_NEWS_ADMENU3', 'Post/bewerk Nieuws');
define('_MI_NEWS_GROUPPERMS', 'Permissies');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS', 'Prune/onderhoud nieuws');
// Added by Hervé
define('_MI_NEWS_EXPORT', 'Nieuws Exporteren');

// Title of config items
define('_MI_STORYHOME', 'Selecteer het aantal nieuwsartikelen dat getoond moet worden op de  nieuws Index pagina'); //top
define('_MI_NOTIFYSUBMIT', 'Selecteer ja indien er bij een nieuwe inzending een notificatie naar de admin/webmaster gestuurd moet worden');
define('_MI_DISPLAYNAV', 'Selecteer ja indien de navigatiebox op iedere nieuwspagina bovenaan getoond moet worden');
define('_MI_AUTOAPPROVE','Nieuwsinzendingen automatisch goedkeuren. (zonder admin interventie)?');
define("_MI_ALLOWEDSUBMITGROUPS", "Groepen die nieuws mogen inzenden");
define("_MI_ALLOWEDAPPROVEGROUPS", "Groepen die nieuwsinzendingen mogen goedkeuren");
define("_MI_NEWSDISPLAY", "Nieuws Display Layout");
define("_MI_NAMEDISPLAY","Auteursnaam");
define("_MI_COLUMNMODE","Columns");
define("_MI_STORYCOUNTADMIN","Aantal artikelen dat getoond moet worden in de admin sectie. (Deze instelling zal ook worden toegepast mbt het aantal te tonen onderwerpen en statistiekoverzicht in de adminsectie) : ");
define('_MI_UPLOADFILESIZE', 'MAX Filesize Upload (KB) 1048576 = 1 Meg');
define("_MI_UPLOADGROUPS","Groepen die mogen uploaden"); //Authorized groups to upload


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "De geselecteerde groepen mogen nieuws inzenden"); //The selected groups will be able to submit news items
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "De geselecteerde groepen mogen nieuws goedkeuren"); //The selected groups will be able to approve news items
define("_MI_NEWSDISPLAYDESC", "Classis toont all nieuws gesorteerd op publicatiedatum.>br />Nieuws tonen op onderwerp groeppeerd het nieuws op onderwerp, waarbij het laatste artikel volledig getoond wordt en de overige artikelen op alleen de titel"); //Classic shows all news ordered by date of publish. News by topic will group the news by topic with the latest story in full and the others with just the title
define('_MI_ADISPLAYNAMEDSC', 'Selecteer hoe de auteursnaam getoond moet worden');
define("_MI_COLUMNMODE_DESC","Kies het aantal kolommen waarin de artikelen getoond dienen te worden"); //You can choose the number of columns to display articles list
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Selecteer de groepen die naar de server mogen uploaden");

// Name of config item values
define("_MI_NEWSCLASSIC", "Classic");
define("_MI_NEWSBYTOPIC", "Op nieuwscategorie"); //By Topic
define("_MI_DISPLAYNAME1", "Gebruikersnaam");
define("_MI_DISPLAYNAME2", "Echte naam");
define("_MI_DISPLAYNAME3", "Geen auteursnaam tonen");
define("_MI_UPLOAD_GROUP1","Submitters and Approvers");
define("_MI_UPLOAD_GROUP2","Approvers Only");
define("_MI_UPLOAD_GROUP3","Uploaden Gedeactiveerd");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Algemeen');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Algemene news notificatie opties.');

define('_MI_NEWS_STORY_NOTIFY', 'Artikel');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Notificatie opties horend bij het huidige artikel.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuw Onderwerp');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificeer mij wanneer een nieuw onderwerp is aangemaakt.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang notificatie wanneer een nieuw onderwerp is aangemaakt.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nieuw onderwerp');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Nieuw Artikel ingezonden');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Notificeer mij wanneer een nieuw artikel is ingezonden (wachtend op goedkeuring).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Ontvang notificatie wanneer een nieuw artikel is ingezonden (wachtend op goedkeuring).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nieuw artikel ingezonden wachtend op goedkeuring');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nieuw Artikel');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Notificeer mij wanneer een nieuw artikel is gepost.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Ontvang notificatie wanneer een nieuw artikel is gepost.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nieuw artikel is gepost');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Artikel goedgekeurd');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Notificeer mij wanneer dit artikel is goedgekeurd.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Ontvang notificatie wanneer dit artikel is goedgekeurd.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Artikel goedgekeurd');

define('_MI_RESTRICTINDEX', 'Categorieën restricties op de Index Pagina?');
define('_MI_RESTRICTINDEXDSC', 'Is je instelling JA, dan zien de gebruikers alleen de nieuws-items in de categorieën waar ze leestoegang to hebben'); //If set to yes, users will only see news items listed in the index from the topics, they have access to as set in News Permissions

define('_MI_NEWSBYTHISAUTHOR', 'Artikelen van dezelfde auteur');
define('_MI_NEWSBYTHISAUTHORDSC', 'Als je deze instelling op Ja zet, dan zal er een link \'Artikelen afkomstig van deze auteur\' zichtbaar zijn '); //then a link \'Articles by this author\' will be visible

define('_MI_NEWS_PREVNEX_LINK','Vorige en Volgende link tonen ?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Als je deze instelt op  \'Ja\', zullen er twee twee nieuwe links onder ieder artikel zichtbaar zijn. Deze links worden gebruikt om te navigeren naar het vorige of volgende artikel volgens publicatie datum');
define('_MI_NEWS_SUMMARY_SHOW','Overzichts tabel tonen?'); //Show summary table
define('_MI_NEWS_SUMMARY_SHOW_DESC','Als je voor deze optie kiest zal er een opsomming van links naar alle recent gepubliceerde artikelen onder ieder artikel zichtbaar zijn'); //zal onder ieder  When you use this option, a summary containing links to all the recent published articles is visible at the bottom of each article
define('_MI_NEWS_AUTHOR_EDIT','Mogen auteurs hun eigen nieuwsartikel bewerken?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Met deze instelling mogen auteurs hun nieuwsartikel bewerken.');
define('_MI_NEWS_RATE_NEWS','Mogen gebruikers op een artikel stemmen?');
define('_MI_NEWS_TOPICS_RSS','RSS feeds per categorie activeren?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Als je deze instelling op JA zet dan zal de categorie inhoud als RSS feed beschikbaar zijn");
define('_MI_NEWS_DATEFORMAT', "Datum Formaat");
define('_MI_NEWS_DATEFORMAT_DESC',"Please refer to the Php documentation (http://fr.php.net/manual/en/function.date.php) for more information on how to select the format. Attentie: Indien je geen instelling aangeeft dan zal het standaard datum formaat gebruikt worden. ");
define('_MI_NEWS_META_DATA', "Meta data mogelijk maken (keywords en beschrijving)?");
define('_MI_NEWS_META_DATA_DESC', "Als je de instelling op JA zet dan mogen de  approvers de volgende meta data invoeren: keywords and beschrijving");
define('_MI_NEWS_BNAME8','Random nieuws');
define('_MI_NEWS_NEWSLETTER','Nieuwsbrief');
define('_MI_NEWS_STATS','Statistieken');
define("_MI_NEWS_FORM_OPTIONS","Formulier Optie");
define("_MI_NEWS_FORM_COMPACT","Standaard Xoopseditor");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw Editor");
define("_MI_NEWS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_NEWS_FORM_FCK","FCK Editor");
define("_MI_NEWS_FORM_KOIVI","Koivi Editor");
define("_MI_NEWS_FORM_OPTIONS_DESC","Selecteer de editor die je wilt gebruiken. Als je een eenvoudige installatie hebt gedaan (bijv.: je hebt alleen de standaard xoops editor tot je beschikking), dan kun je alleen kiezen tussen: DHTML of Standaard Xoopseditor");
define("_MI_NEWS_KEYWORDS_HIGH","Keywords highlighting gebruiken?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Als je van deze optie gebruik maakt, zullen de gezochte sleutelwoorden in de nieuwsartikel resultaten oplichten");
define("_MI_NEWS_HIGH_COLOR","Kleur van highlight keywords ?");
define("_MI_NEWS_HIGH_COLOR_DES","Gebruik deze optie alléén als je JA bij de vorige instelling hebt gekozen!");
define("_MI_NEWS_INFOTIPS","Lengte van Tooltips");
define("_MI_NEWS_INFOTIPS_DES","Als je van deze optie gebruik maakt zullen links gerelateerd naar het nieuwsartikel de eerste (n) karakters van het betreffende bericht tonen. Als je de waarde op 0 zet dan zal de infotips leeg zijn");
define("_MI_NEWS_SITE_NAVBAR","Gebruikmaking van de Mozilla and Opera Site Navigation's Bar?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Als je van deze instelling gebruik maakt worden bezoekers van je website in staat gesteld om gebruik te maken van de Site Navigation's Bar om door je artikelen te navigeren.");
define("_MI_NEWS_TABS_SKIN","Selecteer de weergave om te gebruiken in de TABS");
define("_MI_NEWS_TABS_SKIN_DESC","Deze weergave zal worden gebruikt in alle blokken die TABS bevatten.");
define("_MI_NEWS_SKIN_1","Bar Style");
define("_MI_NEWS_SKIN_2","Beveled");
define("_MI_NEWS_SKIN_3","Classic");
define("_MI_NEWS_SKIN_4","Folders");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plat");
define("_MI_NEWS_SKIN_7","Dikgedrukt");
define("_MI_NEWS_SKIN_8","ZDnet style");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Archieven');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Toon links in printbare versies van de artikelen ?");
define("_MI_NEWS_DUBLINCORE","Ativeer Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Voor meer informatie, <a href='http://dublincore.org/'>visit this link</a>");
define("_MI_NEWS_BOOKMARK_ME","Display a 'Bookmark dit artikel in deze sites blok ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Dit blok zal zichtbaar zijn op de artikelen pagina");
define("_MI_NEWS_FF_MICROFORMAT","Activeer Firefox 2 Micro Summaries ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Voor meer informatie, zie <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>this page</a>");
define("_MI_NEWS_WHOS_WHO","Wie is Wie");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Onderwerp Directorie");
define("_MI_NEWS_ADVERTISEMENT","Advertentie");
define("_MI_NEWS_ADV_DESCR","Plaats tekst of een javasscript code on te tonen in je artikelen");
define("_MI_NEWS_MIME_TYPES","Enter authorized Mime Types for upload (separated them on a new line)");
define("_MI_NEWS_ENHANCED_PAGENAV","Gebruik uitgebreide pagina navigator ?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Met deze optie kun je de pagina scheiden met bijvoorbeeld : [pagebreak:Page Title], De links to the pagina's worden vervangen door een dropdownlijst en je kan [summary] gebruiken voor het maken van een automatische samenvatting van pagina's.");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Categorie');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Notificatie opties welke horen bij de huidige categorie');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Nieuwe Story geplaatst');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Notificeer mij wanneer een nieuw verhaal is geplaatst in deze categorie.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Ontvang notificatie wanneer een nieuw verhaal is geplaatst in deze categorie.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nieuw news artikel');

// Added in version 1.63
define('_MI_NEWS_TAGS', "Gebruik het tags systeem?");
define('_MI_NEWS_TAGS_DSC', "Dit is gebaseerd op de XOOPS module TAG from phppp");
define("_MI_NEWS_BNAME10", "Tags Cloud");
define("_MI_NEWS_BNAME11", "Top Tags");
define("_MI_NEWS_INTRO_TEXT", "Introducte tekst om te tonen op de submit pagina");
define("_MI_NEWS_IMAGE_MAX_WIDTH", "Maximale afbeeldingshogte wanneer dit is aangepast");
define("_MI_NEWS_IMAGE_MAX_HEIGHT", "Maximale afbeeldingshoogte wanneer dit is aangepast");
//Added in 1.67
define("_MI_NEWS_HELP",          "Hulp");
define("_MI_NEWS_ABOUT",          "Over");
define("_MI_NEWS_HOME",          "Overzicht");
define("_MI_NEWS_UPGRADE",          "Bijwerken");
define("_MI_NEWS_DESCRIPTION",          "Met deze module kunt u een beperkt aantal nieuwsberichten op uw site plaatsen. </br></br>
U kunt allerlei artikelen aanmaken en ze organiseren in onderwerpen.</br></br>
Met het ingebouwde permissiemanagement kunt u groepen rechten geven om artikelen in te dienen, groepen rechten geven om artikelen goed te keuren en bepalen welke groepen de artikelen mogen bekijken.");
?>