<?php

/**
 * Module: XoopsTube
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Xoopstube
 * @author          XOOPS Development Team
 * @copyright       2001-2013 The XOOPS Project
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @version         $Id$
 * @link            http://sourceforge.net/projects/xoops/
 * @since           1.0.6
 */


// Module Info
// The name of this module
define("_MI_XTUBE_NAME", "XoopsTube");

// A brief description of this module
define("_MI_XTUBE_DESC", "Met de module <em>XoopsTube</em> kunt u videos van sites als YouTube, DailyMotion, LiveLeak, etc. toevoegen aan uw eigen website en ze onderverdelen in categorieën.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_XTUBE_BNAME1", "Recente videos (t)");
define("_MI_XTUBE_BNAME2", "Recente videos");
define("_MI_XTUBE_BNAME3", "Top videos (t)");
define("_MI_XTUBE_BNAME4", "Top videos");
define("_MI_XTUBE_BNAME5", "Recente videos (h)");
define("_MI_XTUBE_BNAME6", "Willekeurige videos");
define("_MI_XTUBE_BNAME7", "Willekeurige videos (h)");

// Sub menu titles
define("_MI_XTUBE_SMNAME1", "Inzenden");
define("_MI_XTUBE_SMNAME2", "Populair");
define("_MI_XTUBE_SMNAME3", "Hoogste beoordeling");
define("_MI_XTUBE_SMNAME4", "Laatste");

// Names of admin menu items
define("_MI_XTUBE_BINDEX", "Hoofd index");
define("_MI_XTUBE_INDEXPAGE", "Index pagina management");
define("_MI_XTUBE_MCATEGORY", "Categorie management");
define("_MI_XTUBE_MVIDEOS", "Video management");
define("_MI_XTUBE_MUPLOADS", "Afbeeldingen uploaden");
define("_MI_XTUBE_PERMISSIONS", "Rechten instellingen");
define("_MI_XTUBE_BLOCKADMIN", "Blok instellingen");
define("_MI_XTUBE_MVOTEDATA", "Stemmen");

// Title of config items
define('_MI_XTUBE_POPULAR', 'Videos populariteit teller');
define('_MI_XTUBE_POPULARDSC', "Aantal keren bekeken waarna een video de status 'populair' krijgt.");

//Display Icons
define("_MI_XTUBE_ICONDISPLAY", "Videos populair en nieuw:");
define("_MI_XTUBE_DISPLAYICONDSC", "Selekteer hoe de populair en nieuw iconen worden getoond.");
define("_MI_XTUBE_DISPLAYICON1", "Toon als icoon");
define("_MI_XTUBE_DISPLAYICON2", "Toon als tekst");
define("_MI_XTUBE_DISPLAYICON3", "Niet tonen");

define("_MI_XTUBE_DAYSNEW", "Nieuwe videos:");
define("_MI_XTUBE_DAYSNEWDSC", "Aantal dagen dat een video de status 'nieuw' heeft.");
define("_MI_XTUBE_DAYSUPDATED", "Bijgewerkte videos:");
define("_MI_XTUBE_DAYSUPDATEDDSC", "Aantal dagen dat een video de status 'geupdate' heeft.");

define('_MI_XTUBE_PERPAGE', 'Videos in index:');
define('_MI_XTUBE_PERPAGEDSC', 'Aantal videos dat getoond wordt in iedere categorie index.');

define('_MI_XTUBE_USESHOTS', 'Screenshots tonen?');
define('_MI_XTUBE_USESHOTSDSC', 'Selekteer Ja om screenshots voor iedere video te tonen');
define('_MI_XTUBE_SHOTWIDTH', 'Screenshot breedte');
define('_MI_XTUBE_SHOTWIDTHDSC', 'Toon breedte voor screenshot afbeelding');
define('_MI_XTUBE_SHOTHEIGHT', 'Screenshot hoogte');
define('_MI_XTUBE_SHOTHEIGHTDSC', 'Toon hoogte voor screenshot afbeelding');
define('_MI_XTUBE_CHECKHOST', 'Niet toestaan om een video direkt door te linken? (leeching)');
define('_MI_XTUBE_REFERERS', 'Deze websites mogen direct door linken naar de videos van deze module<br />Scheiden door #');
define("_MI_XTUBE_ANONPOST", "Anonieme gebruikers inzendingen:");
define("_MI_XTUBE_ANONPOSTDSC", "Anonieme gebruikers toestaan om in te zenden en/of te uploaden?");
define('_MI_XTUBE_AUTOAPPROVE', 'Ingezonden videos automatisch goedkeuren');
define('_MI_XTUBE_AUTOAPPROVEDSC', 'Selekteren om ingezonden videos zonder moderatie goed te keuren.');

define('_MI_XTUBE_MAXFILESIZE', 'Upload omvang (KB)');
define('_MI_XTUBE_MAXFILESIZEDSC', 'Maximale toegestane linkomvang bij linkenuploaden.');
define('_MI_XTUBE_IMGWIDTH', 'Breedte te uploaden afbeelding');
define('_MI_XTUBE_IMGWIDTHDSC', 'Maximale toegestane afbeeldingsbreedte bij linkenuploaden.');
define('_MI_XTUBE_IMGHEIGHT', 'Hoogte te uploaden afbeelding');
define('_MI_XTUBE_IMGHEIGHTDSC', 'Maximale toegestane afbeeldingshoogte bij linkenuploaden.');

define('_MI_XTUBE_UPLOADDIR', 'Upload bestand (geen trailing slash)');
define('_MI_XTUBE_ALLOWSUBMISS', 'Gebruikersinzendingen:');
define('_MI_XTUBE_ALLOWSUBMISSDSC', 'Gebruikers toestaan nieuwe videos in te zenden');
define('_MI_XTUBE_ALLOWUPLOADS', 'Gebruikers uploads:');
define('_MI_XTUBE_ALLOWUPLOADSDSC', 'Gebruikers toestaan nieuwe videos direct te uploaden in de website');
define('_MI_XTUBE_SCREENSHOTS', 'Screenshots upload bestand');
define('_MI_XTUBE_CATEGORYIMG', 'categorieën afbeelding uploadbestand');
define('_MI_XTUBE_MAINIMGDIR', 'Hoofd afbeeldingen bestand');
define('_MI_XTUBE_USETHUMBS', 'Gebruik thumbnails:');
define("_MI_XTUBE_USETHUMBSDSC", "Ondersteunde afbeeldingstypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>XoopsTube gebruikt thumbnails voor afbeeldingen. Selekteer 'Nee' Om het orgineel te gebruiken wanneer de server deze optie niet ondersteund.</div>");
define('_MI_XTUBE_DATEFORMAT', 'Datum weergave:');
define('_MI_XTUBE_DATEFORMATDSC', 'Standaard datumweergave voor XoopsTube:');
define('_MI_XTUBE_SHOWDISCLAIMER', 'Toon disclaimer voordat gebruikers inzenden?');
define('_MI_XTUBE_SHOWDISCLAIMERDSC', 'Toon de opgave richtlijnen voordat een gebruiker een video kan inzenden?');
define('_MI_XTUBE_SHOWVIDEODISCL', 'Toon disclaimer voordat een gebruiker kan linken?');
define('_MI_XTUBE_SHOWVIDEODISCLDSC', 'Toon richtlijnen voor videos voordat een video opend?');
define('_MI_XTUBE_DISCLAIMER', 'Voer de inzend disclaimer tekst in:');
define('_MI_XTUBE_VIDEODISCLAIMER', 'Voer de video disclaimer tekst in:');
define('_MI_XTUBE_SUBCATS', 'Sub-categorieën:');
define("_MI_XTUBE_SUBMITART", "video inzenden:");
define("_MI_XTUBE_SUBMITARTDSC", "Selekteer de groep die nieuwe videos kan inzenden.");
define("_MI_XTUBE_RATINGGROUPS", "video beoordeling:");
define("_MI_XTUBE_RATINGGROUPSDSC", "Selekteer groepen die videos kunnen beoordelen.");
define("_MI_XTUBE_IMGUPDATE", "Thumbnails bijwerken?");
define("_MI_XTUBE_IMGUPDATEDSC", "Als de geselekteerde thumbnails per pagina worden geupdate, anders wordt de eerste thumbnail gebruikt.");
define("_MI_XTUBE_QUALITY", "Thumbnail kwaliteit:");
define("_MI_XTUBE_QUALITYDSC", "Laagste kwaliteit: 0 Hoogste: 100");
define("_MI_XTUBE_KEEPASPECT", "Handhaaf de verhouding van een afbeelding?");
define("_MI_XTUBE_KEEPASPECTDSC", "");
define("_MI_XTUBE_ADMINPAGE", "Beheerdersindex videos aantal:");
define("_MI_XTUBE_AMDMINPAGEDSC", "Aantal nieuwe videos dat wordt getoond in het beheerdersgedeelte.");
define("_MI_XTUBE_ARTICLESSORT", "Standaard videos volgorde:");
define("_MI_XTUBE_ARTICLESSORTDSC", "Selekteer de standaard volgorde voor de video indexen.");
define("_MI_XTUBE_TITLE", "Titel");
define("_MI_XTUBE_RATING", "Beoordeling");
define("_MI_XTUBE_WEIGHT", "Gewicht");
define("_MI_XTUBE_POPULARITY", "Populariteit");
define("_MI_XTUBE_SUBMITTED2", "inzenddatum");
define('_MI_XTUBE_COPYRIGHT', 'Copyright opmerking:');
define('_MI_XTUBE_COPYRIGHTDSC', 'Selekteer om een copyright opmerking te tonen op de video pagina.');

// Description of each config items
define('_MI_XTUBE_SUBCATSDSC', 'Selekteer Ja om sub-categorieën te tonen. Nee selekteren zal sub-categorieën verbergen in de indexen');

// Text for notifications
define('_MI_XTUBE_GLOBAL_NOTIFY', 'Globaal');
define('_MI_XTUBE_GLOBAL_NOTIFYDSC', 'Globale video informatie opties.');
define('_MI_XTUBE_CATEGORY_NOTIFY', 'Categorie');
define('_MI_XTUBE_CATEGORY_NOTIFYDSC', 'Informatie optie behorend bij de huidige video categorie.');
define('_MI_XTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_XTUBE_FILE_NOTIFYDSC', 'Informatie optie behorend bij de huidige video.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuwe categorie');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Informeer mij wanneer een nieuwe videocategorie is aangemaakt.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe videocategorie is aangemaakt.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe videocategorie');

define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Verzoek video aanpassing');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Informeer mij over ieder verzoek om video aanpassing.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Ontvang informatie wanneer een aanpassingsverzoek voor een video is ingezonden.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Video wijziging aangevraagd');

define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Gebroken video rapport');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Informeer mij over ieder gebroken videorapport.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Ontvang informatie wanneer een gebroken videorapportage is ingezonden.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Gebroken video gerapporteerd');

define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video ingezonden');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is ingezonden (wachtend op goedkeuring).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is ingezonden (wachtend op goedkeuring).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video ingezonden');

define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nieuwe video geplaatst');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is geplaatst.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is geplaatst.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video geplaatst');

define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Video ingezonden');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is ingezonden (wachtend op goedkeuring) in de huidige categorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is ingezonden (wachtend op goedkeuring) in de huidige categorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video ingezonden in categorie');

define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nieuwe video');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is geplaatst in de huidige categorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is geplaatst in de huidige categorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video geplaatst in categorie');

define('_MI_XTUBE_VIDEO_APPROVE_NOTIFY', 'Video goedgekeurd');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Informeer mij wanneer deze video is goedgekeurd.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Ontvang informatie wanneer deze video is goedgekeurd.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Video goedgekeurd');

define('_MI_XTUBE_AUTHOR_INFO', "Ontwikkelaarsinformatie");
define('_MI_XTUBE_AUTHOR_NAME', "Ontwikkelaar");
define('_MI_XTUBE_AUTHOR_DEVTEAM', "Ontwikkelingsteam");
define('_MI_XTUBE_AUTHOR_WEBSITE', "Ontwikkelaarswebsite");
define('_MI_XTUBE_AUTHOR_EMAIL', "Ontwikkelaarsemail");
define('_MI_XTUBE_AUTHOR_CREDITS', "Credits");
define('_MI_XTUBE_MODULE_INFO', "Module ontwikkelingsinformation");
define('_MI_XTUBE_MODULE_STATUS', "Ontwikkelingsstatus");
define('_MI_XTUBE_MODULE_DEMO', "Demo Site");
define('_MI_XTUBE_MODULE_SUPPORT', "Officiele support site");
define('_MI_XTUBE_MODULE_BUG', "Rapporteer een bug in deze module");
define('_MI_XTUBE_MODULE_FEATURE', "Suggesties voor nieuwe opties in deze module");
define('_MI_XTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_XTUBE_RELEASE', "Vrijgave datum: ");

define('_MI_XTUBE_MODULE_MAILLIST', "WF-Project Mailinglijst");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTS', "Aankondigingen mailinglijst");
define('_MI_XTUBE_MODULE_MAILBUGS', "Bug mailinglijst");
define('_MI_XTUBE_MODULE_MAILFEATURES', "Nieuwe opties mailinglijst");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Ontvang de laatste aankondigingen van het WF-Project.");
define('_MI_XTUBE_MODULE_MAILBUGSDSC', "Bug Tracking en inzendingen mailinglijst");
define('_MI_XTUBE_MODULE_MAILFEATURESDSC', "Verzoek nieuwe opties mailinglijst.");

define('_MI_XTUBE_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY MCDONALD \"AS IS\" AND \"WITH ALL FAULTS.\"
MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN McDonalds Store WEBSITE. IN NO
EVENT WILL MCDONALD BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
MCDONALD HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_XTUBE_AUTHOR_CREDITSTEXT', "Het WF-Projects Team wil de volgende mensen bedanken voor hun hulp en ondersteuning gedurende de ontwikkelingsfase van deze module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_XTUBE_AUTHOR_BUGFIXES', "Bug fix geschiedenis");

define('_MI_XTUBE_COPYRIGHTIMAGE', "Tenzij anders aangegeven, vallen deze module (WF-Links) en zijn afbeeldingen onder het copyright van het WF-Projects team.<br /><br />U heeft de toestemming om WF-Links te copieren, aan te passen en/of te wijzigen om te voldoen aan uw persoonlijke eisen. U gaat er mee akkoord dat u geen wijzigingen aanbrengt, toevoegd aan, en/of de broncode van deze software herdistribueerd zonder de uitdrukkelijke toestemming van het WF-Projects team.");

// added by McDonald
define('_MI_XTUBE_EDITOR', "Te gebruiken editor (admin):");
define('_MI_XTUBE_EDITORCHOICE', "Selekteer de te gebruiken editor voor admins. Als u een eenvoudige installatie heeft (bijv. u gebruikt alleen de Xoops core editors), dan kunt u gewoon DHTML en Compact kiezen.");
define('_MI_XTUBE_EDITORUSER', "Te gebruiken editor (gebruiker):");
define('_MI_XTUBE_EDITORCHOICEUSER', "Selekteer de te gebruiken editor voor gebruikers. Als u een eenvoudige installatie heeft (bijv. u gebruikt alleen de Xoops core editors), dan kunt u gewoon DHTML en Compact kiezen.");
define("_MI_XTUBE_FORM_DHTML", "DHTML");
define("_MI_XTUBE_FORM_COMPACT", "Compact");
define("_MI_XTUBE_FORM_SPAW", "Spaw");
define("_MI_XTUBE_FORM_HTMLAREA", "HtmlArea");
define("_MI_XTUBE_FORM_FCK", "FCKeditor");
define("_MI_XTUBE_FORM_KOIVI", "Koivi");
define("_MI_XTUBE_FORM_TINYEDITOR", "TinyEditor");
define("_MI_XTUBE_OTHERVIDEOS", "Toon andere videos die door de Inzender zijn ingezonden?");
define("_MI_XTUBE_OTHERVIDEOSDSC", "Kies Ja als u andere videos van de Inzender wilt tonen.");
define("_MI_XTUBE_SHOWSBOOKMARKS", "Toon Social Bookmarks?");
define("_MI_XTUBE_SHOWSBOOKMARKSDSC", "Kies Ja om de Social Bookmark iconen te tonen.");
define("_MI_XTUBE_TOTALCHARS", "Kies het totaal aantal karakters voor de omschrijving?");
define("_MI_XTUBE_TOTALCHARSDSC", "Kies het totaal aantal karakters voor de omschrijving van de videos op de Index Pagina.");
define("_MI_XTUBE_SORTCATS", "Sorteer categorieën op:");
define("_MI_XTUBE_SORTCATSDSC", "Selekteer hoe categorieën en sub-categorieën gesorteerd moeten worden.");
define("_MI_XTUBE_USEMETADESCR", "Genereer meta omschrijving:");
define("_MI_XTUBE_USEMETADSC", "Met deze optie wordt de meta omschrijving gebaseerd op die van de video omschrijving.");
define("_MI_XTUBE_USERTAGDESCR", "Gebruiker kan Tags invoeren:");
define("_MI_XTUBE_USERTAGDSC", "Kies Ja als de gebruiker tags mag inzenden.");

// version 1.02
define("_MI_XTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_XTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_XTUBE_DATEFORMATADMIN', 'Datum weergave administratie:');
define('_MI_XTUBE_DATEFORMATADMINDSC', 'Standaard datum weergave administratie van XoopsTube');

// Version 1.04 RC-1
define('_MI_XTUBE_VIDEODIR', 'Video upload map:');
define('_MI_XTUBE_VIDEODIRDSC', 'Stel de map voor XoopsTube video bestanden in');
define('_MI_XTUBE_VIDEOIMGDIR', 'Video screenshots upload map:');
define('_MI_XTUBE_VIDEOIMGDIRDSC', 'Stel de map in voor XoopsTube video screenshots');
define('_MI_XTUBE_FLVPLAYER_CREDITS', 'FLV Speler');
define('_MI_XTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player door LongTail Video (Jeroen Wijering)');
define('_MI_XTUBE_VUPLOADS', 'Video upload');
define('_MI_XTUBE_CATEGORYIMGDSC', '');
define('_MI_XTUBE_MAINIMGDIRDSC', '');
define('_MI_XTUBE_BNAME8', 'XoopsTube Sponsor Statistieken');
define('_MI_XTUBE_ICONS_CREDITS', "Icons");

// Version 1.04 RC-2
define('_MI_XTUBE_MODULE_MANUAL', 'Handleiding');
define('_MI_XTUBE_MODULE_MANUALWIKI', 'Wiki Handleiding');
define('_MI_XTUBE_MODULE_REQUESTNEWFEATURE', 'Vraag een nieuwe eigenschap aan');
define('_MI_XTUBE_MODULE_SUBMITBUG', 'Rapporteer een bug in deze module');
define("_MI_XTUBE_BNAME9", "XoopsTube Tag Cloud");
define("_MI_XTUBE_BNAME10", "XoopsTube Top Tags");
define('_MI_XTUBE_FLVPLAYER_MANUAL', 'FLV Speler Handleiding');
define('_MI_XTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define("_MI_XTUBE_CATCOLUMNS", "Kies het aantal categorie kolommen:");
define("_MI_XTUBE_CATCOLUMNSDSC", "Kies het aantal kolommen, standaard is 2");
define("_MI_XTUBE_RATINGDISPLAY", "Stem opties laten zien?");
define("_MI_XTUBE_RATINGDISPLAYDSC", "Kies <em>Ja</em> om de Stem opties te laten zien. Kies <em>Nee</em> om de Stem oties niet te laten zien. <em>Nee</em> blokeert ook de toegang tot de Stem Pagina.");
define("_MI_XTUBE_AUTOPLAY", "Automatisch afspelen video");
define("_MI_XTUBE_AUTOPLAYDSC", "Kies <em>Ja</em> om de videoclips automatisch af te spelen.");
define('_MI_XTUBE_VERSION', 'Versie');
define('_MI_XTUBE_LICENSE', 'Licentie');
define('_MI_XTUBE_LICENSEDSC', 'GNU General Public License (GPL) - een kopie van de GNU licentie is bijgesloten (license.txt).');
