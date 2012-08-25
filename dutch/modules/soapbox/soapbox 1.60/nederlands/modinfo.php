<?php
/**
 * $Id: modinfo.php v 1.5 23 August 2004 hsalazar Exp $
 * Module: Soapbox
 * Version: v 1.5
 * Release Date: 23 August 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SB_MD_NAME", "Soapbox");

// A brief description of this module
define("_MI_SB_MD_DESC", "OpEd voor de site");

// Sub menus in main menu block
define("_MI_SB_SUB_SMNAME1", "Artikel indienen");

// A brief description of this module
define("_MI_SB_ALLOWSUBMIT", "1. Gebruikersindieningen:");
define("_MI_SB_ALLOWSUBMITDSC", "Geeft gebruikers de gelegenheid om artikelen in te dienen.");

define("_MI_SB_AUTOAPPROVE", "2. Auto-goedkeuring artikelen:");
define("_MI_SB_AUTOAPPROVEDSC", "Keurt automatisch de ingediende artikelen goed zonder tussenkomst van een webmaster.");

define("_MI_SB_ALLOWADMINHITS", "3. Admin counter reads:");
define("_MI_SB_ALLOWADMINHITSDSC", "Admin klikken opnemen in statistieken?");

define("_MI_SB_PERPAGE", "4. Maximum artikelen per pagina (Beheerzijde):");
define("_MI_SB_PERPAGEDSC", "Maximum aantal artikelen die gelijktijdig per pagina getoond worden aan de beheerzijde.");

define("_MI_SB_PERPAGEINDEX", "5. Maximum artikelen per pagina (Gebruikerzijde):");
define("_MI_SB_PERPAGEINDEXDSC", "Maximum aantal artikelen die gelijktijdig per pagina getoond worden aan de gebruikerzijde.");

define("_MI_SB_IMGDIR", "6. Afbeeldingen basismap:");
define("_MI_SB_IMGDIRDSC", "Dit is de map waarin de operationele afbeeldingen zich bevinden. (Geen tekens \"/\")");

define("_MI_SB_UPLOADDIR", "7. Afbeeldingen uploadmap:");
define("_MI_SB_UPLOADDIRDSC", "Dit is de map waar de kolommen en artikelen afbeeldingen worden opgeslagen. (geen tekens \"/\")");

define("_MI_SB_IMGWIDTH", "8. Maximum afbeeldingsbreedte:");
define("_MI_SB_IMGWIDTHDSC", "Instellen van de maximum toegstane breedte wanneer een afbeelding wordt opgeslagen.");

define("_MI_SB_IMGHEIGHT", "9. Maximum afbeeldingshoogte:");
define("_MI_SB_IMGHEIGHTDSC", "Instellen van de maximum toegstane hoogte wanneer een afbeelding wordt opgeslagen.");

define("_MI_SB_MAXFILESIZE", "10. Maximum bestandsgrootte:");
define("_MI_SB_MAXFILESIZEDSC", "Instellen van de maximum toegstane bestandsgrootte wanneer een afbeelding wordt opgeslagen.");

define("_MI_SB_DATEFORMAT", "11. Datumformaat:");
define("_MI_SB_DATEFORMATDSC", "Instellen van het datumformaat gebruikt voor weergave bij artikelen.");

define("_MI_SB_ALLOWCOMMENTS", "12. Beheer reacties op artikelniveau:");
define("_MI_SB_ALLOWCOMMENTSDSC", "Als deze optie ingesteld is op 'JA', dan zijn alleen reacties te zien bij artikelen waarvan de optie reacties is aangevinkt aan de adminzijde. <br /><br />Selecteer 'NEE' om op een globaal niveau de reacties te beheren (Zie ook bij  'reactieregels'.");

define("_MI_SB_MOREARTS", "13. Artikelen in auteur overzichtsbox:");
define("_MI_SB_MOREARTSDSC", "Instellen van het aantal artikelen weergegeven in de overzichtsbox.");

define("_MI_SB_COLSINMENU", "14. Kolommen toevoegen in menu?:");
define("_MI_SB_COLSINMENUDSC", "Als deze optie ingesteld is op 'JA', geautoriseerde gebruikers zijn in staat om de kolomnamen te zien in het gebruikersmenu. Dit is niet aan te raden voor sites met veel kolommen.");

define("_MI_SB_COLSPERINDEX", "15. Kolomteasers op de indexpagina?:");
define("_MI_SB_COLSPERINDEXDSC", "Hoeveel kolomteasers dienen weergegeven te worden op de index pagina? [Standaard = 3]");

define("_MI_SB_ALLOWRATING", "16. Mogelijk tot stemmen toevoegen aan artikelen?:");
define("_MI_SB_ALLOWRATINGDSC", "Als deze optie is ingesteld op 'JA', artikelen worden getoond met stemknoppen om te kunnen stemmen op het artikel? [Standaard = Ja]");

define("_MI_SB_INTROTIT", "17. IntroductieTitel:");
define("_MI_SB_INTROTITDSC", "Titel weergeven op de indexpagina.");
define("_MI_SB_INTROTITDFLT", "Welkom op deze ruimte");

define("_MI_SB_INTROTEXT", "18. Introductietekst:");
define("_MI_SB_INTROTEXTDSC", "Introductietekst voor de indexpagina.");
define("_MI_SB_INTROTEXTDFLT", "In this area of the site you will find our catalogue of editorial columns, as well as the latest article from each of our authors. Click on a column's name to see all the articles associated to that column, or on an article's name to read directly the article. Depending on privileges, you can rate each article, select notification options or leave your comments.");

define("_MI_SB_BUTTSTXT", "19. Zichtbare toevoeg knoppen:");
define("_MI_SB_BUTTSTXTDSC", "Als deze optie ingesteld is op 'JA', tabellen van de indexpagina in de adminzijde toont een 'Toevoegen' knop. Standaard = Nee.");

define("_MI_SB_WARNING", "Deze module wordt vrijgegeven zonder enkele garantie. Deze module is niet in beta maar constant in ontwikkeling. Deze release kan gebruikt worden in een productie-omgeving, maar met eigen verantwoordelijkheid, wat betekend dat de auteur niet verantwoordelijk is.");
define("_MI_SB_AUTHORMSG","Soapbox is de eerste XOOPS module gemaakt door mij en bevat daarmee fouten die een beginner in de wereld van PHP doorgaans maakt. De eerste stappen maakte ik met hulp van Catzwolf, waar Soapbox veel aan te danken heeft.<br /><br />De geschiedenis van Soapbox wordt in meer detail verteld in de documentatie, maar dank gaat uit naar meerdere XOOPS gebruikers, inclusief herko, w4z004, marcan, ackbarr, Mithrandir, Predator en meer.<br /><br />Natuurlijk worden hiermee ook diegene bedoeld die de module hebben beoordeeld en getest, diegene die hebben gekeken naar de ontwikkeling, en iedereen in het algemeen die het risico hebben geaccepteerd en de module gebruiken.");

// Names of admin menu items
define("_MI_SB_ADMENU1", "Beheer");
define("_MI_SB_ADMENU2", "Kolom toevoegen");
define("_MI_SB_ADMENU3", "Artikel toevoegen");
define("_MI_SB_ADMENU4", "Permissies");
define("_MI_SB_ADMENU5", "Blokken");
define("_MI_SB_ADMENU6", "Ga naar de module");

//Names of Blocks and Block information
define("_MI_SB_ARTSRATED", "Best beoordeelde artikelen");
define("_MI_SB_ARTSRATED_DSC", "Toont best beoordeelde artikelen");
define("_MI_SB_ARTSNEW", "Recente artikelen");
define("_MI_SB_ARTSNEW_DSC", "Toont meest recente artikelen");
define("_MI_SB_ARTSTOP", "Meest gelezen artikelen");
define("_MI_SB_ARTSTOP_DSC", "Toont meest gelezen artikelen");
define("_MI_SB_ARTSPOTLIGHT", "Spotlight artikelen [Enkele kolom]");
define("_MI_SB_ARTSPOTLIGHT_DSC", "Toont spotlight artikelen [enkele kolom]");
define("_MI_SB_ARTSPOTLIGHT2", "Spotlight artikelen [meerdere kolommen]");
define("_MI_SB_ARTSPOTLIGHT2_DSC", "Toont spotlight artikelen [meerdere kolommen]");

// Defines for the About page
define("_MI_SB_AUTHOR_INFO","Auteur informatie");
define("_MI_SB_AUTHOR_WEBSITE","Auteur website");
define("_MI_SB_AUTHOR_EMAIL","Autheur e-mail");
define("_MI_SB_AUTHOR_CREDITS","Module credits");
define("_MI_SB_MODULE_INFO","Algemene module informatie");
define("_MI_SB_MODULE_STATUS","Versie");
define("_MI_SB_MODULE_DEMO","Demo websaite");
define("_MI_SB_MODULE_SUPPORT","Support website");
define("_MI_SB_MODULE_BUG","Fout registreren");
define("_MI_SB_MODULE_FEATURE","Verbetering verzoeken");
define("_MI_SB_MODULE_DISCLAIMER","Disclaimer");
define("_MI_SB_AUTHOR_WORD","Auteur reactie");

// Text for notifications
define("_MI_SB_GLOBAL_NOTIFY", "Algemeen");
define("_MI_SB_GLOBAL_NOTIFYDSC", "Algemene notificatie-opties.");

define("_MI_SB_COLUMN_NOTIFY", "Kolom");
define("_MI_SB_COLUMN_NOTIFYDSC", "Notificatie-opties voor de huidige kolom.");

define("_MI_SB_ARTICLE_NOTIFY", "Artikel");
define("_MI_SB_ARTICLE_NOTIFYDSC", "Notificatie-opties voor het huidige artikel.");

define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFY", "Nieuwe kolom");
define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYCAP", "Notificeer mij wanneer een nieuwe kolom is toegevoegd.");
define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYDSC", "Ontvang notificatie wanneer een nieuwe kolom is toegevoegd.");
define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuwe kolom");

define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFY", "Verzoek om artikel te bewerken");
define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYCAP", "Notificeer mij wanneer een artikelwijziging is verzocht.");
define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYDSC", "Ontvang notificatie wanneer een artikelwijziging is verzocht.");
define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notifictie : Artikelwijziging verzocht");

define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFY", "Gebroken artikel ingediend");
define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYCAP", "Notificeer mij wanneer een gebroken artikel is gerapporteeerd.");
define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYDSC", "Ontvang notificatie wanneer een gebroken artikel is gerapporteerd.");
define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Gebroken artikel gerapporteerd");

define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFY", "Artikel ingediend");
define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYCAP", "Notificeer mij wanneer een nieuw artikel is ingediend (wacht op goedkeuring).");
define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYDSC", "Ontvang notificatie wanneer een nieuw artikel is ingediend (Wacht op goedkeuring).");
define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuw artikel ingediend");

define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFY", "Nieuw artikel");
define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFYCAP", "Notificeer mij wanneer een nieuw artikel is gepubliceerd.");
define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFYDSC", "Ontvang notificatie wanneer een nieuw artikel is gepubliceer.");
define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuw artikel");

define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFY", "Artikel goedgekeurd");
define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYCAP", "Notificeer mij wanneer een nieuw artikel is ingediend (wacht op goedkeuring) in de huidige kolom.");   
define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYDSC", "Ontvang notificatie wanneer een nieuw artikel is ingediend (wacht op goedkeuring) in de huidige kolom.");      
define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuw artikel ingediend in kolom"); 

define("_MI_SB_COLUMN_NEWARTICLE_NOTIFY", "Nieuw artikel");
define("_MI_SB_COLUMN_NEWARTICLE_NOTIFYCAP", "Notificeer mij wanneer een nieuw artikel is toegevoegd aan de huidige kolom");   
define("_MI_SB_COLUMN_NEWARTICLE_NOTIFYDSC", "Ontvang notificatie wanneer een nieuw artikel is toegevoegd aan de huidige kolom.");      
define("_MI_SB_COLUMN_NEWARTICLE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Nieuw artikel in kolom"); 

define("_MI_SB_ARTICLE_APPROVE_NOTIFY", "Artikel goedgekeurd");
define("_MI_SB_ARTICLE_APPROVE_NOTIFYCAP", "Notificeer mij wanneer dit artikel is goedgekeurd.");
define("_MI_SB_ARTICLE_APPROVE_NOTIFYDSC", "Notificatie ontvangen wanneer artikel is goedgekeurd.");
define("_MI_SB_ARTICLE_APPROVE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie : Artikel goedgekeurd");

define("_MI_SB_ALLOWEDSUBMITGROUPS","Welke groepen kunnen artikelen indienen?");
define("_MI_SB_ALLOWEDSUBMITGROUPSDSC","User groups that can submit articles.");

//HACK by domifara
define("_MI_SB_FORM_OPTIONS","Formulier opties");
define("_MI_SB_FORM_OPTIONS_DESC","Selecteer de editor om te gebruiken. If you have a 'simple' install (e.g you use only xoops core editor class, provided in the standard xoops core package), then you can just select DHTML");
define("_MI_SB_FORM_COMPACT","Compact");
define("_MI_SB_FORM_DHTML","DHTML");
define("_MI_SB_FORM_SPAW","Spaw Editor");
define("_MI_SB_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_SB_FORM_FCK","FCK Editor");
define("_MI_SB_FORM_KOIVI","Koivi Editor");
define("_MI_SB_FORM_TINYMCE","TinyMCE Editor");

// 1.06
define("_MI_SB_SUBMITS", 'Ingediende artikelen');
define("_MI_SB_ADD_ARTICLE", 'Artikel toevoegen');
define("_MI_SB_ADD_COLUMN", 'Kolom toevoegen');

