<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * FmContent language file
 *
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author      Andricq Nicolas (AKA MusS)
 * @version     $Id$
 */

if (!defined('_MI_FMCONTENT_NAME')) {
    // Module info
    define('_MI_FMCONTENT_NAME','fmContent');
    define('_MI_FMCONTENT_DESC','Beheer paginacontent');
// Menu
    define('_FMCONTENT_HOME','Home');
    define('_FMCONTENT_TOPIC','Onderwerp');
    define('_FMCONTENT_CONTENT','Content');
    define('_FMCONTENT_PERM','Permissies');
    define('_FMCONTENT_TOOLS','Gereedschap');
    define('_FMCONTENT_ABOUT','Over');
    define('_FMCONTENT_HELP','Hulp');
    define('_FMCONTENT_SUBMIT','Indienen');
// Block
    define('_FMCONTENT_MENU','Contentmenu');
    define('_FMCONTENT_PAGE','Contentpagina');
    define('_FMCONTENT_LIST','Contentlijst');
// Editor
    define("_FMCONTENT_FORM_EDITOR","Formulieroptie");
    define("_FMCONTENT_FORM_EDITOR_DESC","Selecteer de editor om te gebruiken voor het bewerken van de content.");
// Urls
    define('_FMCONTENT_FRIENDLYURL','URL herschrijfmethode');
    define('_FMCONTENT_FRIENDLYURL_DESC','Selecteer de URL herschrijfmethode om te gebruiken.<ul>
    <li>"Standaard Mode": Module standard URL</li>
    <li>"HerschrijfMode": you must use .htaccess file and edit .htaccess sample code if you change SEO / URL Rewrite options</li>
    <li>"Verkorte herschrijving": you can make URL whit out page id and module use alias for get page info. you must edit .htaccess, you can remove module name and Url extension and use Root base for have short URL</li></ul>');
    define('_FMCONTENT_URL_STANDARD','Standaard Mode');
    define('_FMCONTENT_URL_REWRITE','Herschrijfmode');
    define('_FMCONTENT_URL_SHORT','Verkorte herschrijving');
// Rewrite Mode
    define('_FMCONTENT_REWRITEBASE','HerschrijfMode: .htaccess bestandspositie');
    define('_FMCONTENT_REWRITEBASE_DESC','
      "Module": .htaccess bestand moet in de modulemap staan.<br />
      "Root": .htaccess bestand moet in de XOOPS rootmap staan.');
    define('_FMCONTENT_REWRITEBASE_MODS','Module');
    define('_FMCONTENT_REWRITEBASE_ROOT','Root');
// Rewrite Name
    define('_FMCONTENT_REWRITENAME','Herschrijfmode: modulenaam');
    define('_FMCONTENT_REWRITENAME_DESC','Definieer de modulenaam te gebruiken in URL herschrijven.<br />Door wijzigen/verwijderen van deze waarde, dient het .htaccess bestand aangepast te worden.');
// Rewrite Extension
    define('_FMCONTENT_REWRITEEXT','Herschrijfmode: Url extensie');
    define('_FMCONTENT_REWRITEEXT_DESC','Definieer extensie voor URL herschrijven (standaard .html)<br />Door wijzigen/verwijderen van deze waarde, dient het .htaccess bestand aangepast te worden.');
// static name
    define('_FMCONTENT_STATICNAME','Herschrijfmode: onderwerp statische paginas');
    define('_FMCONTENT_STATICNAME_DESC','Onderwerpnaam van statische pagina in herschreven URL');
// Lenght Id
    define('_FMCONTENT_LENGHTID','Herschrijfmode:: lengte voor pagina-ID');
    define('_FMCONTENT_LENGHTID_DESC','Aantal digits in gebruik voor URL voor pagina-ID');
// Group Access
    define('_FMCONTENT_GROUPS','Permissies groepen');
    define('_FMCONTENT_GROUPS_DESC','Selecteer algemene toegangspermissies voor groepen.');
//Advertisement 
    define('_FMCONTENT_ADVERTISEMENT','advertentie');
    define('_FMCONTENT_ADVERTISEMENT_DESC','Tekst invullen Enter text or html/Javascript code for your contents');
// Edit in place
    define('_FMCONTENT_EDITINPLACE','Inline bewerkingen gebruiken?');
    define('_FMCONTENT_EDITINPLACE_DESC','Inline bewerkingen van de content');
// Tell a friend
    define('_FMCONTENT_TELLAFRIEND','Gebruik Tell a friend module?');
    define('_FMCONTENT_TELLAFRIEND_DESC','De Tell a friend module dient geïnstalleerd te zijn om deze optie te laten werken.');
// Tell a friend
    define('_FMCONTENT_USETAG','Gebruik TAG module om labels te generen');
    define('_FMCONTENT_USETAG_DESC','De TAG module dient geïnstalleerd te zijn om deze optie te laten werken.');
// minimum length of single words
    define('_FMCONTENT_MINWORDLENGHT','Lengte Meta Keywords');
    define('_FMCONTENT_MINWORDLENGHT_DESC','Kies de minimum lengte van losse woorden');
// minimum length of single words
    define('_FMCONTENT_MINWORDOCCUR','Meta Keywords Zichtbaar');
    define('_FMCONTENT_MINWORDOCCUR_DESC','Kies de minimum zichtbaarheid van losse woorden');
// Show options
    define('_FMCONTENT_DISP_OPTION','Algemene weergavemethode');
    define('_FMCONTENT_DISP_OPTION_DESC','Selecteer welke weergaveopties worden gebruikt in content<br />"Onderwerpgebaseerd" gebruikt weergave-opties ingesteld bij onderwerpinstellingen');
    define('_FMCONTENT_DISP_OPTION_MODULE','Modulegebaseerd');
    define('_FMCONTENT_DISP_OPTION_TOPIC','Onderwerpgebaseerd');
// Title
    define('_FMCONTENT_DISPTITLE','Titel weergeven');
    define('_FMCONTENT_DISPTITLE_DESC','');
// Topic
    define('_FMCONTENT_DISPTOPIC','Onderwerptitel weergeven');
    define('_FMCONTENT_DISPTOPIC_DESC','');
// Date
    define('_FMCONTENT_DISPDATE','Datum weergeven');
    define('_FMCONTENT_DISPDATE_DESC','');
// Author
    define('_FMCONTENT_DISPAUTHOR','Auteur weergeven');
    define('_FMCONTENT_DISPAUTHOR_DESC','');
// Navigation Link
    define('_FMCONTENT_DISPNAV','Vorige/volgende navigatie weergeven');
    define('_FMCONTENT_DISPNAV_DESC','');
// PDF Link
    define('_FMCONTENT_DISPPDF','PDF icoon weergeven');
    define('_FMCONTENT_DISPPDF_DESC','');
// Print Link
    define('_FMCONTENT_DISPPRINT','Print icoon weergeven');
    define('_FMCONTENT_DISPPRINT_DESC','');
// Hits Link
    define('_FMCONTENT_DISHITS','Aantal klikken weergeven');
    define('_FMCONTENT_DISHITS_DESC','');
// Mail Link
    define('_FMCONTENT_DISPMAIL','E-mail icoon weergeven');
    define('_FMCONTENT_DISPMAIL_DESC','');
// Comments
    define('_FMCONTENT_DISPCOMS','Reacties tellen weergeven');
    define('_FMCONTENT_DISPCOMS_DESC','');
// Per page
    define('_FMCONTENT_PERPAGE','Inhoud per pagina');
    define('_FMCONTENT_PERPAGE_DESC','Aantal content weergevenin onderwerp/indexpagina');
// Columns
    define('_FMCONTENT_COLUMNS','Kolommen');
    define('_FMCONTENT_COLUMNS_DESC','Aantal kolommen in elke pagina');
// Show type
    define('_FMCONTENT_SHOWTYPE','Weergavemodus');
    define('_FMCONTENT_SHOWTYPE_DESC','Weergave sjabloon voor de content vermeld in onderwerp/indexpagina');
    define('_FMCONTENT_SHOWTYPE_0','Modulegebaseerd');
    define('_FMCONTENT_SHOWTYPE_1','Nieuwsweergave');
    define('_FMCONTENT_SHOWTYPE_2','Tabelweergave');
    define('_FMCONTENT_SHOWTYPE_3','Afbeeldingsweergave');
    define('_FMCONTENT_SHOWTYPE_4','Lijstweergave');
//Template
    define('_FMCONTENT_TEMPLATE','Sjabloon');
    define('_FMCONTENT_TEMPLATE_DESC','Algemeen sjabloon voor de module instellen');
    define('_FMCONTENT_TEMPLATE_1','Legacy');
    define('_FMCONTENT_TEMPLATE_2','jQuery UI');
    define('_FMCONTENT_TEMPLATE_3','HTML 5');
// Show order
    define('_FMCONTENT_SHOWORDER','Weergavevolgorde');
    define('_FMCONTENT_SHOWORDER_DESC','Selecteer aflopende/oplopende volgorde');
    define('_FMCONTENT_DESC','Aflopend');
    define('_FMCONTENT_ASC','Oplopend');
// Show sort
    define('_FMCONTENT_SHOWSORT','Sorteren op');
    define('_FMCONTENT_SHOWSORT_DESC','Sorteermethode voor de content weergegeven in de module');
    define('_FMCONTENT_SHOWSORT_1','Content id');
    define('_FMCONTENT_SHOWSORT_2','Content aangemaakt');
    define('_FMCONTENT_SHOWSORT_3','Content bijgewerkt');
    define('_FMCONTENT_SHOWSORT_4','Content titel');
    define('_FMCONTENT_SHOWSORT_5','Ingesteld paginavolgorde');
    define('_FMCONTENT_SHOWSORT_6','Willekeurig');
// Admin page
    define('_FMCONTENT_ADMIN_PERPAGE','Contentpagina aantal items Admin');
    define('_FMCONTENT_ADMIN_PERPAGE_DESC','Aantal items weergeven op contentpagina aan Adminzijde');
// Admin Show order
    define('_FMCONTENT_ADMIN_SHOWORDER','Contentpagina weergavevolgorde Admin');
    define('_FMCONTENT_ADMIN_SHOWORDER_DESC','Selecteer aflopende/oplopende volgorde voor contentpagina aan Adminzijde');
// Admin sort
    define('_FMCONTENT_ADMIN_SHOWSORT','Contentpagina sorteervolgorde Admin');
    define('_FMCONTENT_ADMIN_SHOWSORT_DESC','Sorteermethode voor items weergeven op contentpagina aan Adminzijde<br />Elke optie behalve "Admin contentvolgorde" wjzigt alle handmatige ingestelde volgorde van contentpaginas.');
// Admin topic page
    define('_FMCONTENT_ADMIN_PERPAGE_TOPIC','Onderwerppagina aantal items Admin');
    define('_FMCONTENT_ADMIN_PERPAGE_TOPIC_DESC','Aantal items weergeven op onderwerpagina aan Adminzijde');
// Admin topic Show order
    define('_FMCONTENT_ADMIN_SHOWORDER_TOPIC','Onderwerppagina weergavevolgorde Admin');
    define('_FMCONTENT_ADMIN_SHOWORDER_TOPIC_DESC','Select Descendant/Ascendant order for admin Topic page');
    define('_FMCONTENT_ADMIN_SHOWSORT_TOPIC_1','Onderwerp ID');
    define('_FMCONTENT_ADMIN_SHOWSORT_TOPIC_2','Onderwerp gewicht');
    define('_FMCONTENT_ADMIN_SHOWSORT_TOPIC_3','Datum onderwerp aangemaakt');
// Admin topic sort
    define('_FMCONTENT_ADMIN_SHOWSORT_TOPIC','Volgorde onderwerppagina aan Adminzijde');
    define('_FMCONTENT_ADMIN_SHOWSORT_TOPIC_DESC','Sorteervolgorde  voor items opgesomd op onderwerppagina aan adminzijde');
// Admin index limit
    define('_FMCONTENT_ADMIN_INDEX_LIMIT','Items in Admin index');
    define('_FMCONTENT_ADMIN_INDEX_LIMIT_DESC','Aantal items in admin indexpagina');
//rss
    define('_FMCONTENT_RSS_SHOW','RSS icoon weergeven');
    define('_FMCONTENT_RSS_SHOW_DESC','Weergeven/verbergen RSS icoon in module');
    define('_FMCONTENT_RSS_TIMECACHE','RSS cache tijd');
    define('_FMCONTENT_RSS_TIMECACHE_DESC','Cache tijd voor RSS paginas in minuten');
    define('_FMCONTENT_RSS_PERPAGE','RSS nummer');
    define('_FMCONTENT_RSS_PERPAGE_DESC','Selecteer aantal items weergegeven in RSS pagina');
    define('_FMCONTENT_RSS_LOGO','RSS logo URL');
    define('_FMCONTENT_RSS_LOGO_DESC','Pad voor sitelogo weergegeven in RSS (relatief tot Xoops root map)');
// Print    
    define('_FMCONTENT_PRINT_LOGO','Sitetitel weergeven');
    define('_FMCONTENT_PRINT_LOGO_DESC','Weergeven/verbergen sitetitel op printpagina');
    define('_FMCONTENT_PRINT_LOGOFLOAT','Uitlijnen Printlogo');
    define('_FMCONTENT_PRINT_LOGOFLOAT_DESC','Selecteer links, rechts of midden als positie voor printlogo');
    define('_FMCONTENT_PRINT_LEFT','Links');
    define('_FMCONTENT_PRINT_RIGHT','Rechts');
    define('_FMCONTENT_PRINT_CENTER','Midden');
    define('_FMCONTENT_PRINT_LOGOURL','URL Printlogo');
    define('_FMCONTENT_PRINT_LOGOURL_DESC','Pad voor sitelogo weergegeven in printpagina (relatief tot Xoops root map)');
    define('_FMCONTENT_PRINT_TITLE','Titel weergeven');
    define('_FMCONTENT_PRINT_TITLE_DESC','');
    define('_FMCONTENT_PRINT_IMG','Afbeelding weergeven');
    define('_FMCONTENT_PRINT_IMG_DESC','');
    define('_FMCONTENT_PRINT_SHORT','verkorte tekst weergeven');
    define('_FMCONTENT_PRINT_SHORT_DESC','');
    define('_FMCONTENT_PRINT_TEXT','Hoofdtekst weergeven');
    define('_FMCONTENT_PRINT_TEXT_DESC','');
    define('_FMCONTENT_PRINT_DATE','Datum weergeven');
    define('_FMCONTENT_PRINT_DATE_DESC','');
    define('_FMCONTENT_PRINT_AUTHOR','Auteur weergeven');
    define('_FMCONTENT_PRINT_AUTHOR_DESC','');
    define('_FMCONTENT_PRINT_LINK','Pagina URL weergeven');
    define('_FMCONTENT_PRINT_LINK_DESC','');
//img
    define('_FMCONTENT_IMAGE_DIR','Uploadpad voor afbeeldingen');
    define('_FMCONTENT_IMAGE_DIR_DESC','Uploadpad voor afbeeldingen gebruikt bij content');
    define('_FMCONTENT_IMAGE_SIZE','Bestandsgrootte afbeeldingen (in bytes)');
    define('_FMCONTENT_IMAGE_SIZE_DESC','Max toegestane bestandsgrootte voor afbeeldingen (1048576 bytes = 1 MegaByte)');
    define('_FMCONTENT_IMAGE_MAXWIDTH','Max breedte afbeeldingen (pixel)');
    define('_FMCONTENT_IMAGE_MAXWIDTH_DESC','Max toegestane breedte voor uploaden van afbeeldingen');
    define('_FMCONTENT_IMAGE_MAXHEIGHT','Max hoogte afbeeldingen (pixel)');
    define('_FMCONTENT_IMAGE_MAXHEIGHT_DESC','Max toegestane hoogte voor uploaden van afbeeldingen');
    define('_FMCONTENT_IMAGE_MIME','Afbeelding mime types');
    define('_FMCONTENT_IMAGE_MIME_DESC','Toegestane mime-types voor uploaden van afbeeldingen');
    define('_FMCONTENT_IMAGE_WIDTH','Max breedte afbeelding in contentlijst (pixel)');
    define('_FMCONTENT_IMAGE_WIDTH_DESC','Max toegestane breedte voor afbeeldingen in content opgesomd in index-/onderwerppaginas<br /> Een max breedte/hoogte voor afbeeldingen in contentpaginags is ingesteld in /css/style.css');
    define('_FMCONTENT_IMAGE_FLOAT','Afbeeldingsuitlijning');
    define('_FMCONTENT_IMAGE_FLOAT_DESC','Selecteer linker- of rechterpositie om afbeeldingen weer te geven die toegevoegd zijn aan content');
    define('_FMCONTENT_IMAGE_LEFT','Links');
    define('_FMCONTENT_IMAGE_RIGHT','Rechts');
    define('_FMCONTENT_IMAGE_LIGHTBOX','Lightbox gebruiken');
    define('_FMCONTENT_IMAGE_LIGHTBOX_DESC','Lightbox effect gebruiken om afbeeldingen weer te geven in origineel formaat');
//social
    define('_FMCONTENT_SOCIAL','Delen via /Social links weergeven');
    define('_FMCONTENT_SOCIAL_DESC','Sociale netwerk and Delen via iconen weergeven in elke content');
    define('_FMCONTENT_BOOKMARK','Delen via');
    define('_FMCONTENT_SOCIALNETWORM','Sociale netwerken');
    define('_FMCONTENT_NONE','Geen');
    define('_FMCONTENT_BOTH','Beiden');
//Multiple Columns 
    define('_FMCONTENT_MULTIPLE_COLUMNS','Meerdere kolommen');
    define('_FMCONTENT_MULTIPLE_COLUMNS_DESC','Selecteer het aantal kolommen om content weer te geven. <br />Deze optie werkt alleen in contentpagina en voor content in <b>tekst</b> velden');
    define('_FMCONTENT_MULTIPLE_COLUMNS_1','Een kolom');
    define('_FMCONTENT_MULTIPLE_COLUMNS_2','Twee kolommen');
    define('_FMCONTENT_MULTIPLE_COLUMNS_3','Drie kolommen');
    define('_FMCONTENT_MULTIPLE_COLUMNS_4','Vier kolommen');
// All user posts
    define('_FMCONTENT_ALLUSERPOST','"content van dezelfde auteur" link weergeven');
    define('_FMCONTENT_ALLUSERPOST_DESC','Weergeven/verbergen van content van dezelfde auteur in elke content');
// regular expression
    define('_FMCONTENT_REGULAR_EXPRESSION','Automatisch Alias URL-patroon');
    define('_FMCONTENT_REGULAR_EXPRESSION_DESC','Reguliere Expressie voor genereren van automatisch Alias URL-patroon. <br />Wanneer de taal niet wordt ondersteund, in Alias URL de reguliere expressie kan worden ingesteld. Standaardinstellingen zijn : <b>`[^a-z0-9]`i</b>');
    define('_FMCONTENT_REGULAR_EXPRESSION_CONFIG','`[^a-z0-9]`i');
// Breadcrumb
    define('_FMCONTENT_BREADCRUMB_SHOW','Broodkruimelpad weergeven');
    define('_FMCONTENT_BREADCRUMB_MODNAME','modulenaam weergeven');
    define('_FMCONTENT_BREADCRUMB_TOHOME','Startpagina link weergeven');
// break 
    define('_FMCONTENT_BREAK_GENERAL','Algemeen');
    define('_FMCONTENT_BREAK_SEO','SEO / URL herschrijven');
    define('_FMCONTENT_BREAK_DISPLAY','Weergeven');
    define('_FMCONTENT_BREAK_RSS','RSS');
    define('_FMCONTENT_BREAK_IMAGE','Afbeelding');
    define('_FMCONTENT_BREAK_ADMIN','Beheer');
    define('_FMCONTENT_BREAK_PRINT','Afdrukken');
    define('_FMCONTENT_BREAK_BREADCRUMB','Broodkruimelpad');
    define('_FMCONTENT_BREAK_COMNOTI','Reacties en notificaties');
// about	
    define('_FMCONTENT_ADMIN_ABOUT','Over');
    define('_FMCONTENT_ABOUT_DESCRIPTION','Omschrijving:');
    define('_FMCONTENT_ABOUT_AUTHOR','Auteur:');
    define('_FMCONTENT_ABOUT_CREDITS','Credits:');
    define('_FMCONTENT_ABOUT_LICENSE','Licentie:');
    define('_FMCONTENT_ABOUT_MODULE_INFO','Module Info:');
    define('_FMCONTENT_ABOUT_RELEASEDATE','Vrijgegeven:');
    define("_FMCONTENT_ABOUT_UPDATEDATE","Bijgewerkt: ");
    define('_FMCONTENT_ABOUT_MODULE_STATUS','Status:');
    define('_FMCONTENT_ABOUT_WEBSITE','Website:');
    define('_FMCONTENT_ABOUT_AUTHOR_INFO','Info auteur');
    define('_FMCONTENT_ABOUT_AUTHOR_NAME','Naam auteur:');
    define('_FMCONTENT_ABOUT_CHANGELOG','Wijzigingsbeheer');
//install/action
    define('_FMCONTENT_SQL_FOUND','SQL Database gevonden');
    define('_FMCONTENT_CREATE_TABLES','Tabellen aanmaken');
    define('_FMCONTENT_TABLE_CREATED','Tabellen aangemaakt');
    define('_FMCONTENT_TABLE_RESERVED','Tabellen gereserveerd');
    define('_FMCONTENT_SQL_NOT_FOUND','SQL Database niet gevonden');
    define('_FMCONTENT_SQL_NOT_VALID','SQL Database niet valide');
    define('_FMCONTENT_INSERT_DATA','Invoegen van gegevens');
    
// homepage   
    define('_FMCONTENT_HOMEPAGE','Instellen startpagina');
    define('_FMCONTENT_HOMEPAGE_DESC','Het instellen van content weergavemodus in module indexpagina');
    define('_FMCONTENT_HOMEPAGE_1','Lijst van alle content van alle onderwerpen');
    define('_FMCONTENT_HOMEPAGE_2','Lijst van alle onderwerpen');
    define('_FMCONTENT_HOMEPAGE_3',"Lijst van alle statische pagina's");
    define('_FMCONTENT_HOMEPAGE_4','Geselecteerde statische content weergeven');
}
?>