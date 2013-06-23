<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 * Format: UTF-8
 */

// Module Info
// The name of this module
define("_MI_WFL_NAME","WF-Links");

// A brief description of this module
define("_MI_WFL_DESC","Linken module waarbij gebruikers linken kunnen bezoeken, insturen en beoordelen.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Recente linken");
define("_MI_WFL_BNAME2","Top linken");

// Sub menu titles
define("_MI_WFL_SMNAME1","Inzenden");
define("_MI_WFL_SMNAME2","Populair");
define("_MI_WFL_SMNAME3","Hoogste beoordeling");
define("_MI_WFL_SMNAME4","Laatste linken");

// Names of admin menu items
define("_MI_WFL_BINDEX","Hoofd index");
define("_MI_WFL_INDEXPAGE","Index pagina management");
define("_MI_WFL_MCATEGORY","Categorie management");
define("_MI_WFL_MLINKS","Linken management");
define("_MI_WFL_MUPLOADS","Afbeeldingen uploaden");
define("_MI_WFL_PERMISSIONS","Rechten instellingen");
define("_MI_WFL_BLOCKADMIN","Blok instellingen");
define("_MI_WFL_MVOTEDATA","Stemmen");

// Title of config items
define('_MI_WFL_POPULAR','Linken populariteit teller');
define('_MI_WFL_POPULARDSC',"Aantal kliks waarna een link de status 'populair' krijgt.");

//Display Icons
define("_MI_WFL_ICONDISPLAY","Linken populair en nieuw:");
define("_MI_WFL_DISPLAYICONDSC","Selekteer hoe de populair en nieuw iconen worden getoond.");
define("_MI_WFL_DISPLAYICON1","Toon als icoon");
define("_MI_WFL_DISPLAYICON2","Toon als tekst");
define("_MI_WFL_DISPLAYICON3","Niet tonen");

define("_MI_WFL_DAYSNEW","Nieuwe linken:");
define("_MI_WFL_DAYSNEWDSC","Aantal dagen dat een link de status 'nieuw' heeft.");
define("_MI_WFL_DAYSUPDATED","Bijgewerkte linken:");
define("_MI_WFL_DAYSUPDATEDDSC","Aantal dagen dat een link de status 'geupdate' heeft.");

define('_MI_WFL_PERPAGE','Linken in index:');
define('_MI_WFL_PERPAGEDSC','Aantal linken dat getoond wordt in iedere categorie index.');

define('_MI_WFL_USESHOTS','Screenshots tonen?');
define('_MI_WFL_USESHOTSDSC','Selekteer Ja om screenshots voor iedere link te tonen');
define('_MI_WFL_SHOTWIDTH','Screenshot breedte');
define('_MI_WFL_SHOTWIDTHDSC','Toon breedte voor screenshot afbeelding');
define('_MI_WFL_SHOTHEIGHT','Screenshot hoogte');
define('_MI_WFL_SHOTHEIGHTDSC','Toon hoogte voor screenshot afbeelding');
define('_MI_WFL_CHECKHOST','Niet toestaan om een link direct door te linken? (leeching)');
define('_MI_WFL_REFERERS','Deze websites mogen direct door linken naar de linken van deze module<br />Scheiden door #');
define("_MI_WFL_ANONPOST","Anonieme gebruikers inzendingen:");
define("_MI_WFL_ANONPOSTDSC","Anonieme gebruikers toestaan om in te zenden en/of te uploaden?");
define('_MI_WFL_AUTOAPPROVE','Ingezonden linken automatisch goedkeuren');
define('_MI_WFL_AUTOAPPROVEDSC','Selekteren om ingezonden linken zonder moderatie goed te keuren.');

define('_MI_WFL_MAXFILESIZE','Upload omvang (KB)');
define('_MI_WFL_MAXFILESIZEDSC','Maximale toegestane linkomvang bij linkenuploaden.');
define('_MI_WFL_IMGWIDTH','Breedte te uploaden afbeelding');
define('_MI_WFL_IMGWIDTHDSC','Maximale toegestane afbeeldingsbreedte bij linken uploaden.');
define('_MI_WFL_IMGHEIGHT','Hoogte te uploaden afbeelding');
define('_MI_WFL_IMGHEIGHTDSC','Maximale toegestane afbeeldingshoogte bij linken uploaden.');

define('_MI_WFL_UPLOADDIR','Upload bestand (No trailing slash)');
define('_MI_WFL_ALLOWSUBMISS','Gebruikersinzendingen:');
define('_MI_WFL_ALLOWSUBMISSDSC','Gebruikers toestaan nieuwe linken in te zenden');
define('_MI_WFL_ALLOWUPLOADS','Gebruikers uploads:');
define('_MI_WFL_ALLOWUPLOADSDSC','Gebruikers toestaan nieuwe linken direct te uploaden in de website');
define('_MI_WFL_SCREENSHOTS','Screenshots upload map');
define('_MI_WFL_CATEGORYIMG','Categorieën afbeelding upload map');
define('_MI_WFL_MAINIMGDIR','Hoofd Afbeeldingen map');
define('_MI_WFL_USETHUMBS','Gebruik Thumb Nails:');
define("_MI_WFL_USETHUMBSDSC","Ondersteunde link typen: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links gebruikt thumb nails voor afbeeldingen. Selekteer 'Nee' Om het orgineel te gebruiken wanneer de server deze optie niet ondersteund.</div>");
define('_MI_WFL_DATEFORMAT','Datum weergave:');
define('_MI_WFL_DATEFORMATDSC','Standaard datumweergave voor WF-links. <br />Zie <a href="http://docs.php.net/manual/nl/function.date.php" target="_blank">PHP handleiding</a>');
define('_MI_WFL_SHOWDISCLAIMER','Toon disclaimer voordat gebruikers inzenden?');
define('_MI_WFL_SHOWDISCLAIMERDSC','Toon de opgave richtlijnen voordat een gebruiker een link kan inzenden?');
define('_MI_WFL_SHOWLINKDISCL','Toon disclaimer voordat een gebruiker kan linken?');
define('_MI_WFL_SHOWLINKDISCLDSC','Toon richtlijnen voor linken voordat een link opend?');
define('_MI_WFL_DISCLAIMER','Voer de inzend disclaimer tekst in:');
define('_MI_WFL_LINKDISCLAIMER','Voer de link disclaimer tekst in:');
define('_MI_WFL_SUBCATS','Sub-categorieën:');
define("_MI_WFL_SUBMITART","link inzenden:");
define("_MI_WFL_SUBMITARTDSC","Selekteer de groep die nieuwe linken kan inzenden.");
define("_MI_WFL_RATINGGROUPS","link beoordeling:");
define("_MI_WFL_RATINGGROUPSDSC","Selekteer groepen die linken kunnen beoordelen.");
define("_MI_WFL_IMGUPDATE","Thumbnails bijwerken?");
define("_MI_WFL_IMGUPDATEDSC","Als geselekteerde thumbnail afbeeldingen bij iedere pagina render bijgewerkt wordt, anders wordt de eerste thumbnail gebruikt.");
define("_MI_WFL_QUALITY","Thumbnail kwaliteit:");
define("_MI_WFL_QUALITYDSC","Laagste kwaliteit: 0 Hoogste: 100");
define("_MI_WFL_KEEPASPECT","Handhaaf de verhouding van een afbeelding?");
define("_MI_WFL_KEEPASPECTDSC","");
define("_MI_WFL_ADMINPAGE","Beheerdersindex linken aantal:");
define("_MI_WFL_AMDMINPAGEDSC","Aantal nieuwe linken dat wordt getoond in het beheerdersgedeelte.");
define("_MI_WFL_ARTICLESSORT","Standaard linken volgorde:");
define("_MI_WFL_ARTICLESSORTDSC","Selekteer de standaard volgorde voor de link indexen.");
define("_MI_WFL_TITLE","Titel");
define("_MI_WFL_RATING","Beoordeling");
define("_MI_WFL_WEIGHT","Gewicht");
define("_MI_WFL_POPULARITY","Populariteit");
define("_MI_WFL_SUBMITTED2","Inzenddatum");
define('_MI_WFL_COPYRIGHT','Copyright opmerking:');
define('_MI_WFL_COPYRIGHTDSC','Selekteer om een copyright opmerking te tonen op de linken pagina.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC','Selekteer Ja sub-categorieën te tonen. Nee selekteren zal sub-categorieën verbergen in de indexen');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY','Globaal');
define('_MI_WFL_GLOBAL_NOTIFYDSC','Globale linken informatie opties.');
define('_MI_WFL_CATEGORY_NOTIFY','Categorie');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Informatie optie behorend bij de huidige linken categorie.');
define('_MI_WFL_LINK_NOTIFY','Link');
define('_MI_WFL_FILE_NOTIFYDSC','Informatie optie behorend bij de huidige link.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY','Nieuwe categorie');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP','Informeer mij wanneer een nieuwe linkcategorie is aangemaakt.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC','Ontvang informatie wanneer een nieuwe linkcategorie is aangemaakt.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe linkcategorie');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Verzoek link aanpassing');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Informeer mij over ieder verzoek om link aanpassing.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','Ontvang informatie wanneer een aanpassingsverzoek voor een link is ingezonden.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Link wijziging aangevraagd');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Gebroken link rapport');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Informeer mij over ieder gebroken linkrapport.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','Ontvang informatie wanneer een gebroken linkrapportage is ingezonden.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Gebroken link gerapporteerd');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Link ingezonden');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Informeer mij wanneer een nieuwe link is ingezonden (wachtend op goedkeuring).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','Ontvang informatie wanneer een nieuwe link is ingezonden (wachtend op goedkeuring).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link ingezonden');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Nieuwe link geplaatst');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Informeer mij wanneer een nieuwe link is geplaatst.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','Ontvang informatie wanneer een nieuwe link is geplaatst.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link geplaatst');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Link ingezonden');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Informeer mij wanneer een nieuwe link is ingezonden (wachtend op goedkeuring) in de huidige categorie.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','Ontvang informatie wanneer een nieuwe link is ingezonden (wachtend op goedkeuring) in de huidige categorie.');      
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link ingezonden in categorie'); 

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Nieuwe link');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Informeer mij wanneer een nieuwe link is geplaatst in de huidige categorie.');   
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','Ontvang informatie wanneer een nieuwe link is geplaatst in de huidige categorie.');      
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link geplaatst in categorie'); 

define('_MI_WFL_LINK_APPROVE_NOTIFY','Link goedgekeurd');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Informeer mij wanneer deze link is goedgekeurd.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','Ontvang informatie wanneer deze link is goedgekeurd.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-informatie : Link goedgekeurd');

define('_MI_WFL_AUTHOR_INFO',"Ontwikkelaarsinformatie");
define('_MI_WFL_AUTHOR_NAME',"Ontwikkelaar");
define('_MI_WFL_AUTHOR_DEVTEAM',"Ontwikkelingsteam");
define('_MI_WFL_AUTHOR_WEBSITE',"Ontwikkelaarswebsite");
define('_MI_WFL_AUTHOR_EMAIL',"Ontwikkelaarsemail");
define('_MI_WFL_AUTHOR_CREDITS',"Credits");
define('_MI_WFL_MODULE_INFO',"Module ontwikkelingsinformation");
define('_MI_WFL_MODULE_STATUS',"Ontwikkelingsstatus");
define('_MI_WFL_MODULE_DEMO',"Demo Site");
define('_MI_WFL_MODULE_SUPPORT',"Officiele support site");
define('_MI_WFL_MODULE_BUG',"Rapporteer een bug in deze module");
define('_MI_WFL_MODULE_FEATURE',"Suggesties voor nieuwe opties in deze module");
define('_MI_WFL_MODULE_DISCLAIMER',"Disclaimer");
define('_MI_WFL_RELEASE',"Vrijgave datum: ");

define('_MI_WFL_MODULE_MAILLIST',"WF-Project Mailinglijst");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS',"Aankondigingen mailinglijst");
define('_MI_WFL_MODULE_MAILBUGS',"Bug mailinglijst");
define('_MI_WFL_MODULE_MAILFEATURES',"Nieuwe opties mailinglijst");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Ontvang de laatste aankondigingen van het WF-Project.");
define('_MI_WFL_MODULE_MAILBUGSDSC',"Bug Tracking en inzendingen mailinglijst");
define('_MI_WFL_MODULE_MAILFEATURESDSC',"Verzoek nieuwe opties mailinglijst.");

define('_MI_WFL_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.");

define('_MI_WFL_AUTHOR_CREDITSTEXT',"Het WF-Projects Team wil de volgende mensen bedanken voor hun hulp en ondersteuning gedurende de ontwikkelingsfase van deze module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_WFL_AUTHOR_BUGFIXES',"Bug Fix geschiedenis");

define('_MI_WFL_COPYRIGHT2','Copyright');
define('_MI_WFL_COPYRIGHTIMAGE',"Tenzij anders aangegeven, vallen deze module (WF-Links) en zijn afbeeldingen onder het copyright van het WF-Projects team.<br /><br />U heeft de toestemming om WF-Links te copieren, aan te passen en/of te wijzigen om te voldoen aan uw persoonlijke eisen. U gaat er mee akkoord dat u geen wijzigingen aanbrengt, toevoegd aan, en/of de broncode van deze software herdistribueerd zonder de uitdrukkelijke toestemming van het WF-Projects team.");

define('_MI_WFL_SELECTFORUM',"Selekteer forum:");
define('_MI_WFL_SELECTFORUMDSC',"Selekteer het forum dat u heeft geïnstalleerd en dat zal worden gebruikt door WF-Links.");

define('_MI_WFL_DISPLAYFORUM1',"Newbb/CBB (all)");
define('_MI_WFL_DISPLAYFORUM2',"IPB Forum");
define('_MI_WFL_DISPLAYFORUM3',"PHPBB2 Module");

// added by McDonald
define("_MI_WFL_COUNTRY","Land:");
define("_MI_WFL_EDITOR","Te gebruiken editor (admin):");
define("_MI_WFL_EDITORCHOICE","Selekteer de te gebruiken editor voor admins. Als u een eenvoudige installatie heeft (bijv. u gebruikt alleen de Xoops core editors), dan kunt u gewoon DHTML en Compact kiezen.");
define("_MI_WFL_EDITORUSER","Te gebruiken editor (gebruiker):");
define("_MI_WFL_EDITORCHOICEUSER","Selekteer de te gebruiken editor voor gebruikers. Als u een eenvoudige installatie heeft (bijv. u gebruikt alleen de Xoops core editors), dan kunt u gewoon DHTML en Compact kiezen.");
define("_MI_WFL_FORM_DHTML","DHTML");
define("_MI_WFL_FORM_COMPACT","Compact");
define("_MI_WFL_FORM_SPAW","Spaw Editor");
define("_MI_WFL_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_WFL_FORM_FCK","FCK Editor");
define("_MI_WFL_FORM_KOIVI","Koivi Editor");
define("_MI_WFL_FORM_INBETWEEN","Inbetween");
define("_MI_WFL_FORM_TINYEDITOR","TinyEditor");
define("_MI_WFL_FORM_TINYMCE","TinyMCE");
define("_MI_WFL_FORM_DHTMLEXT","DHTML Extended");
define("_MI_WFL_SORTCATS","Sorteer categorieën op:");
define("_MI_WFL_SORTCATSDSC","Selekteer hoe categorieën en sub-categorieën gesorteerd moeten worden.");
define("_MI_WFL_KEYLENGTH","Voer het max. aantal karakters in voor meta keywords:");
define("_MI_WFL_KEYLENGTHDSC", 'Voer het max. aantal karakters in voor meta keywords.<br />
  Zie <strong><a href="http://nl.wikipedia.org/wiki/Metatag" target="_blank">Wikipedia</a></strong> voor meer informatie.<br />
Standaard: <em>255</em>');
define("_MI_WFL_OTHERLINKS","Toon andere links die door de Inzender zijn ingezonden?");
define("_MI_WFL_OTHERLINKSDSC","Kies Ja als u andere links van de Inzender wilt tonen.");
define("_MI_WFL_TOTALCHARS","Kies het totaal aantal karakters voor de omschrijving?");
define("_MI_WFL_TOTALCHARSDSC","Kies het totaal aantal karakters voor de omschrijving van de videos op de Index Pagina.");
define("_MI_WFL_QUICKVIEW","Laat Quick View optie zien?");
define("_MI_WFL_QUICKVIEWDSC","Kies Ja als u de Quick View optie wilt laten zien.");
define('_MI_WFL_ICONS_CREDITS',"Icons door");
define("_MI_WFL_SHOWSBOOKMARKS","Laat Social Bookmarks zien?");
define("_MI_WFL_SHOWSBOOKMARKSDSC","Kies Ja als u Social Bookmarks wilt laten zien onder een artikel.");
define("_MI_WFL_SHOWPAGERANK","Laat Google PageRank™ zien?");
define("_MI_WFL_SHOWPAGERANKSDSC","Kies Ja als u Google PageRank™ wilt laten zien.");
define("_MI_WFL_USERTAGDESCR","Gebruiker kan Tags invoeren?");
define("_MI_WFL_USERTAGDSC","Kies Ja als de gebruiker tags mag inzenden.");

//Version 1.05 RC5
define("_MI_WFL_DATEFORMATADMIN","Datum weergave administratie:");
define("_MI_WFL_DATEFORMATADMINDSC", 'Standaard datum weergave administratie van WF-Links. <br />Zie <a href="http://docs.php.net/manual/nl/function.date.php" target="_blank">PHP handleiding</a>');
define("_MI_WFL_USEADDRESSDESCR","Gebruik adres en kaart funkties?");
define("_MI_WFL_USEADDRESSDSC","Kies Ja om de adres en kaart funkties te gebruiken");
define("_MI_WFL_HEADERPRINT","[PRINT OPTIES] Print pagina koptekst");
define("_MI_WFL_HEADERPRINTDSC","Koptekst die voor iedere link geprint wordt");
define("_MI_WFL_LOGOURLPRINT","[PRINT OPTIES] Logo print url");
define("_MI_WFL_LOGOURLDSCPRINT","Url van het logo dat bovenaan de pagina geprint wordt");
define("_MI_WFL_FOOTERPRINT","[PRINT OPTIES] Print pagina voettekst");
define("_MI_WFL_FOOTERPRINTDSC","Voettekst die voor iedere link geprint wordt");
define("_MI_WFL_BNAME3","WF-Links Sponsor Statistieken");
define("_MI_WFL_VCARD_CREDITS","vCard script door");

// Version 1.05 RC6
define("_MI_WFL_FLAGIMG","Map voor landen vlaggen");
define("_MI_WFL_FLAGIMGDSC","Geef de url zonder met een slash te eindigen");
define("_MI_WFL_CATEGORYIMGDSC","Geef de url zonder met een slash te eindigen");
define("_MI_WFL_SCREENSHOTSDSC","Geef de url zonder met een slash te eindigen");
define("_MI_WFL_MAINIMGDIRDSC","Geef de url zonder met een slash te eindigen");
define("_MI_WFL_USEAUTOSCRSHOT","Gebruik Auto Screenshot");
define("_MI_WFL_USEAUTOSCRSHOTDSC","Dit maakt automatisch een screenshot gebaseerd op de url. Als u Ja kiest wordt de geuploade screenshots niet toegepast. Deze optie werkt waarschijnlijk niet voor alle websites.");
define("_MI_WFL_MOZSHOT_CREDITS","Auto Screenshot door");
define("_MI_WFL_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (alle broncode geleverd onder <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> licentie)');

// Version 1.06 RC-1
define("_MI_WFL_BNAME4","WF-Links Tag Cloud");
define("_MI_WFL_BNAME5","WF-Links Top Tags");

// Version 1.06 RC-3
define('_MI_WFL_DISPLAYFORUM4',"Newbbex");
define("_MI_WFL_TITLE_A","Titel (A)");
define("_MI_WFL_TITLE_D","Titel (D)");
define("_MI_WFL_RATING_A","Beoordeling (A)");
define("_MI_WFL_RATING_D","Beoordeling (D)");
define("_MI_WFL_SUBMITTED_A","Inzenddatum (A)");
define("_MI_WFL_SUBMITTED_D","Inzenddatum (D)");
define("_MI_WFL_POPULARITY_A","Populariteit (A)");
define("_MI_WFL_POPULARITY_D","Populariteit (D)");
define("_MI_WFL_COUNTRY_A","Land (A)");
define("_MI_WFL_COUNTRY_D","Land (D)");

// Version 1.08

// Admin Summary
//define("_MI_WFL_SCATEGORY","Category");
define("_MI_WFL_SNEWFILESVAL","Submitted");
define("_MI_WFL_SMODREQUEST","Modified");
//define("_MI_WFL_SREVIEWS","Reviews: ");
define("_MI_WFL_SBROKENSUBMIT","Broken");
define("_MI_WFL_DOCUMENTATION","Docs");

define('_MI_WFL_ADD_LINK','Add Link');
define('_MI_WFL_ADD_CATEGORY','Add Category');