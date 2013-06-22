<?php
// $Id$
// Module Info

// The name of this module
define('_AMS_MI_NEWS_NAME','Artikelen');

// A brief description of this module
define('_AMS_MI_NEWS_DESC','Creeert  een Slashdot-like artikel sectie, waar gebruikers artikelen kunnen posten en voorzien van commetaar.');

// Names of blocks for this module (Not all module has blocks)
define('_AMS_MI_NEWS_BNAME1','Nieuws Onderwerpen');
define('_AMS_MI_NEWS_BNAME3','Top Verhaal');
define('_AMS_MI_NEWS_BNAME4','Top Nieuws');
define('_AMS_MI_NEWS_BNAME5','Recent Nieuws');
define('_AMS_MI_NEWS_BNAME6','Modereer Nieuws');
define('_AMS_MI_NEWS_BNAME7','Navigeer door de onderwerpen');
define('_AMS_MI_NEWS_BNAME8','Meest Actieve Autheurs');
define('_AMS_MI_NEWS_BNAME9','Meest Gelezen Autheurs');
define('_AMS_MI_NEWS_BNAME10','Hoogst beoordeelde Autheurs');
define('_AMS_MI_NEWS_BNAME11','Hoogst beoordeelde artikelen');

// Sub menus in main menu block
define('_AMS_MI_NEWS_SMNAME1','Stuur Artikel in');
define('_AMS_MI_NEWS_SMNAME2','Archief');

// Names of admin menu items
define('_AMS_MI_NEWS_ADMENU2','Onderwerpen Beheer');
define('_AMS_MI_NEWS_ADMENU3','Beheer Artikelen');
define('_AMS_MI_NEWS_GROUPPERMS','Inzend/Goedkeur Rechten');

// Title of config items
define('_AMS_MI_STORYHOME','Selecteer het aantal artikelen dat getoond moet worden op de eerste pagina');
define('_AMS_MI_NOTIFYSUBMIT','Selecteer ja om een notifictie mail naar de webmaster te sturen bij een nieuwe inzending');
define('_AMS_MI_DISPLAYNAV','Seleteer ja om het navigatieblok boven iedere pagina te tonen');
define('_AMS_MI_AUTOAPPROVE','Artikelen automatisch goedkeuren zonder tussenkomst van Moderator?');
define("_AMS_MI_ALLOWEDSUBMITGROUPS","Groepen die Artikelen kunnen inzenden");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS","Groepen die Artikelen kunnen goedkeuren");
define("_AMS_MI_NEWSDISPLAY","Artikel Display Layout");
define("_AMS_MI_NAMEDISPLAY","Naam van de Autheur");
define("_AMS_MI_COLUMNMODE","Kolommens");
define("_AMS_MI_STORYCOUNTADMIN","aantal nieuwe artikelen dat in administratie omgeving getoond wordt: ");
define('_AMS_MI_UPLOADFILESIZE','MAX Bestandsgrootte Upload (KB) 1048576 = 1 Meg');
define("_AMS_MI_UPLOADGROUPS","Groepen die bestanden mogen uploaden");
define("_AMS_MI_MAXITEMS","Maximaal toegestaan aantal items");
define("_AMS_MI_MAXITEMDESC","Dit stelt het maximale aantal items in dat een gebruiker kan selecteren in de navigatie box op index of onderwerp pagina's");


// Description of each config items
define('_AMS_MI_STORYHOMEDSC','');
define('_AMS_MI_NOTIFYSUBMITDSC','');
define('_AMS_MI_DISPLAYNAVDSC','');
define('_AMS_MI_AUTOAPPROVEDSC','');
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC","De geselecteerde groepen mogen artikelen inzenden");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC","De geselecteerde groepen mogen artikelen geodkeuren");
define("_AMS_MI_NEWSDISPLAYDESC","Classic toont alle artikelen gesorteerd op datum van publicatie. Artikelen op onderwerp zal de artikelen groeperen op onderwerp met het laatste artikel volledig en de rest alleen met hun titel");
define('_AMS_MI_ADISPLAYNAMEDSC','Selecteer hoe de naam van de Autheur\s naam getoond moet worden');
define("_AMS_MI_COLUMNMODE_DESC","Je kunt kiezen uit het aantal kolommen om de artikel lijst te tonen");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Selecteer de groepen die bestanden mogen uploaden");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC","Classic");
define("_AMS_MI_NEWSBYTOPIC","Op Onderwerp");
define("_AMS_MI_DISPLAYNAME1","Gebruikersnaam");
define("_AMS_MI_DISPLAYNAME2","Echte Naam");
define("_AMS_MI_DISPLAYNAME3","Toon de Autheur niet");
define("_AMS_MI_UPLOAD_GROUP1","Inzenders en goedkeurders");
define("_AMS_MI_UPLOAD_GROUP2","Alleen Goedkeurders");
define("_AMS_MI_UPLOAD_GROUP3","Upload Uitgeschakeld");

// Text for notifications

define('_AMS_MI_NEWS_GLOBAL_NOTIFY','Globaal');
define('_AMS_MI_NEWS_GLOBAL_NOTIFYDSC','Globale nieuws notificatie opties.');

define('_AMS_MI_NEWS_STORY_NOTIFY','Artikel');
define('_AMS_MI_NEWS_STORY_NOTIFYDSC','Notificatie opties die van toepassing zijn op het huidige artikel.');

define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY','Nieuw Onderwerp');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Stel me op de hoogte als een nieuw onderwerp wordt aangemaakt.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Ontvang een notificatie als een nieuw onderwerp wordt aangemaakt.');
define('_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie: Nieuw nieuws onderwerp');

define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY','Nieuw Artikel Ingestuurd');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP','Notificeer me als er een nieuw artikel wordt ingestuurd (dat op geodkeuring wacht).');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC','Ontvang een notificatie als een nieuw artikel is ingestuurd (dat wacht op geodkeuring).');
define('_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuw artikel ingestuurd');

define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY','Nieuw Artikel');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP','Notificeer meals een nieuw artikel wordt geplaatst.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC','Ontvang een notificatie al een nieuw artikel wordt geplaatst.');
define('_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuw Artikel');

define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFY','Artikel Goedgekeurd');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP','Notificeer me als dit artikel is goedgekeurd.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC','Ontvang een notificatie als dit artikel is goedgekeurd.');
define('_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificatie : Artikel is goedgekeurd');

define('_AMS_MI_RESTRICTINDEX','Beperkt Onderwerpen op Index Pagina?');
define('_AMS_MI_RESTRICTINDEXDSC','Als deze op ja staat, Dan zullen de gebruikers alleen die artikelen zien waarvoor zij de rechten hebben om deze te lezen, zoals deze ingesteld staan bij de Artikel Rechten');

define("_AMS_MI_ANONYMOUS_VOTE","Sta Anoniem beoordelen van Artikelen toe");
define("_AMS_MI_ANONYMOUS_VOTE_DESC","Als deze is ingeschakeld, kunnen annonieme gebruikers artikelen beoordelen");

define("_AMS_MI_AUDIENCE","Publieks Niveau's");

define("_AMS_MI_SPOTLIGHT","Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS","Spotlight Artikel Kandidaten");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC","Dit is het aantal Artikelen dat getoond gaat worden in het spotlight configuratie als selecteerbaar om getoond te worden in het blok");

define("_AMS_MI_EDITOR","Editor");
define("_AMS_MI_EDITOR_DESC","Kies de editor die gebruikt moet worden in het inzend formulier - niet-default editors MOETEN separaat worden geïnstallleerd");
define("_AMS_MI_EDITOR_DEFAULT","Xoops Default");
define("_AMS_MI_EDITOR_DHTML","DHTML");
define("_AMS_MI_EDITOR_HTMLAREA","HtmlArea Editor");
define("_AMS_MI_EDITOR_FCK","FCK WYSIWYG Editor");
define("_AMS_MI_EDITOR_KOIVI","Koivi WYSIWYG Editor");
define("_AMS_MI_EDITOR_TINYMCE","TinyMCE WYSIWYG Editor");

define("_AMS_MI_EDITOR_USER_CHOICE","Schakel editor keuze aan de gebruiker");
define("_AMS_MI_EDITOR_USER_CHOICE_DESC","Turn the user choose what they want editor");

define("_AMS_MI_EDITOR_CHOICE","Editor Keuzes");
define("_AMS_MI_EDITOR_CHOICE_DESC","Keuzes van de redactie in staat gesteld om de gebruiker");

define("_AMS_MI_SPOTLIGHT_TEMPLATE","Spotlight Templates");
define("_AMS_MI_SPOTLIGHT_TEMPLATE_DESC","Welke template in staat gesteld te om admin te worden gebruikt in de schijnwerpers blok");

define("_AMS_MI_ABOUT","Over");
define("_AMS_MI_MIME_TYPES","MIME Types");

?>