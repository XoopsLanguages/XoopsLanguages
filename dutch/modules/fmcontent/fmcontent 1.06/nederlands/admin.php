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

if (!defined('_FMCONTENT_PREFERENCES')) {
    // Index page
    define('_FMCONTENT_ADD_CONTENT','Content toevoegen');
    define('_FMCONTENT_ADD_TOPIC','Onderwerp toevoegen');
    define('_FMCONTENT_ADD_MENU','Link toevoegen');
    define('_FMCONTENT_LAST_TOPIC','Laatste onderwerpen');
    define('_FMCONTENT_LAST_CONTENTS','Laatste content');
// Topic page
    define('_FMCONTENT_FORM_TOPIC','Onderwerpen beheren');
    define('_FMCONTENT_TOPIC_ID','ID');
    define('_FMCONTENT_TOPIC_NUM','Gewicht');
    define('_FMCONTENT_TOPIC_NAME','Titel');
    define('_FMCONTENT_TOPIC_PARENT','Ouder onderwerp');
    define('_FMCONTENT_TOPIC_DESC','Omschrijving');
    define('_FMCONTENT_TOPIC_IMG','Afbeelding');
    define('_FMCONTENT_TOPIC_WEIGHT','Gewicht');
    define('_FMCONTENT_TOPIC_SHOWTYPE','Weergavemodus');
    define('_FMCONTENT_TOPIC_SHOWTYPE_DESC','Content weergavesjabloon voor dit onderwerp<br />"Module gebaseerd" gebruikt weergave-opties ingesteld bij de module-instellingen.');
    define('_FMCONTENT_TOPIC_PERPAGE','Per pagina');
    define('_FMCONTENT_TOPIC_COLUMNS','Kolommen');
    define('_FMCONTENT_TOPIC_ONLINE','Online');
    define('_FMCONTENT_TOPIC_MENU','Menu');
    define('_FMCONTENT_TOPIC_ACTION','Acties');
    define('_FMCONTENT_TOPIC_PID','Ouder');
    define('_FMCONTENT_TOPIC_COLOR','Onderwerpkleur');
    define('_FMCONTENT_TOPIC_DATE_CREATED','Tijd aangemaakt');
    define('_FMCONTENT_TOPIC_DATE_UPDATE','Tijd bijgewerkte');
    define('_FMCONTENT_TOPIC_SHOWTOPIC','Onderwerptitel weergeven');
    define('_FMCONTENT_TOPIC_SHOWAUTHOR','Auteur weergeven');
    define('_FMCONTENT_TOPIC_SHOWDATE','Datum weergeven');
    define('_FMCONTENT_TOPIC_SHOWDPF','PDF icoon weergeven');
    define('_FMCONTENT_TOPIC_SHOWPRINT','Print icoon weergeven');
    define('_FMCONTENT_TOPIC_SHOWMAIL','E-mail icoon weergeven');
    define('_FMCONTENT_TOPIC_SHOWNAV','Vorige/Volgende navigatie weergeven');
    define('_FMCONTENT_TOPIC_SHOWHITS','Klikken weergeven');
    define('_FMCONTENT_TOPIC_SHOWCOMS','Reacties tellen weergeven');
    define('_FMCONTENT_TOPIC_HOMEPAGE','Onderwerppagina instellen');
    define('_FMCONTENT_TOPIC_HOMEPAGE_DESC','Instellen van het weergavetype om inhoud weer te geven op de onderwerppagina');
    define('_FMCONTENT_TOPIC_HOMEPAGE_1','Een lijst met alle content van alle onderwerpen');
    define('_FMCONTENT_TOPIC_HOMEPAGE_2','Een lijst met alle onderwerpen');
    define('_FMCONTENT_TOPIC_HOMEPAGE_3',"Een lijst met alle statische pagina's");
    define('_FMCONTENT_TOPIC_HOMEPAGE_4','Toon geselecteerde statische inhoud');
    define('_FMCONTENT_TOPIC_OPTIONS','Selecteer opties om onderwerpen weer te geven');
    define('_FMCONTENT_TOPIC_OPTIONS_DESC','Instellen van de weergave-opties om onderwerpen weer te geven.');
    define('_FMCONTENT_TOPIC_ALIAS','Alias (voor URL)');
// Content page
    define('_FMCONTENT_FORM','Content beheren');
    define('_FMCONTENT_FORMTYPE','Type');
    define('_FMCONTENT_FORMTYPE_CONTENT','Content');
    define('_FMCONTENT_FORMTYPE_LINK','Link');
    define('_FMCONTENT_FORMTYPE_HEADER','Inleiding');
    define('_FMCONTENT_FORMTYPE_SEPARATOR','Scheidingslijn');
    define('_FMCONTENT_FORMTITLE','Titel');
    define('_FMCONTENT_FORMTITLE_DISP','Paginatitel weergeven?');
    define('_FMCONTENT_FORMAUTHOR','Bron (Naam)');
    define('_FMCONTENT_FORMSOURCE','Bron (URL)');
    define('_FMCONTENT_FORMPARENT','Ouder');
    define('_FMCONTENT_FORMTEXT','Tekst');
    define('_FMCONTENT_FORMTEXT_DESC','Hoofdcontent van de pagina');
    define('_FMCONTENT_FORMGROUP','Groepen');
    define('_FMCONTENT_FORMALIAS','Alias (voor URL)');
    define('_FMCONTENT_FORMACTIF','Online');
    define('_FMCONTENT_FORMDISPLAY','Menu');
    define('_FMCONTENT_FORMLINK','Link');
    define('_FMCONTENT_FORMDEFAULT','Standaard');
    define('_FMCONTENT_THEME','Thema');
    define('_FMCONTENT_FORMOPTION','Opties');
    define('_FMCONTENT_FORMHTML','HTML');
    define('_FMCONTENT_FORMPREV','Vorige link');
    define('_FMCONTENT_FORMNEXT','Volgende link');
    define('_FMCONTENT_DOHTML','HTML code toestaan');
    define('_FMCONTENT_BREAKS','Regeleinde omzetten');
    define('_FMCONTENT_DOIMAGE','XOOPS Afbeeldingen toestaan');
    define('_FMCONTENT_DOXCODE','XOOPS BBcode toestaan');
    define('_FMCONTENT_DOSMILEY','XOOPS Smilies toestaan');
    define('_FMCONTENT_SHORT','Verkorte tekst');
    define('_FMCONTENT_IMG','Afbeelding');
    define('_FMCONTENT_FORMUPLOAD','Selecteer Afbeelding');
    define('_FMCONTENT_CONTENT_TITLE','Titel');
    define('_FMCONTENT_CONTENT_MANAGER','Contentbeheer');
    define('_FMCONTENT_CONTENT_ID','ID');
    define('_FMCONTENT_CONTENT_NUM','Gewicht');
    define('_FMCONTENT_CONTENT_PAGE','Pagina');
    define('_FMCONTENT_CONTENT_TYPE','Type');
    define('_FMCONTENT_CONTENT_OWNER','Eigenaar');
    define('_FMCONTENT_CONTENT_ACTIF','Actief');
    define('_FMCONTENT_CONTENT_DEFAULT','Standaard');
    define('_FMCONTENT_CONTENT_ORDER','Volgorde');
    define('_FMCONTENT_CONTENT_ACTION','Acties');
    define('_FMCONTENT_CONTENT_VIEW','Bekijken');
    define('_FMCONTENT_CONTENT_EDIT','Bewerken');
    define('_FMCONTENT_CONTENT_DELETE','Verwijderen');
    define('_FMCONTENT_CONTENT_DOWN','Beneden');
    define('_FMCONTENT_CONTENT_UP','Boven');
    define('_FMCONTENT_CONTENT_SHORT','Verkorte omschrijving');
    define('_FMCONTENT_CONTENT_TOPIC','Onderwerp');
    define('_FMCONTENT_CONTENT_TOPIC_DESC','Selectie legen stelt de content in als een statische pagina');
    define('_FMCONTENT_MENU_TOPIC','Menunaam');
    define('_FMCONTENT_CONTENT_MENU','Menutitel');
    define('_FMCONTENT_STATIC','Statische pagina');
    define('_FMCONTENT_STATICS',"Statische pagina's");
    define('_FMCONTENT_ALL_ITEMS','Alle content/item lijst');
    define('_FMCONTENT_ALL_ITEMS_FROM','Item lijst gefilterd op: ');
// Menu page
    define('_FMCONTENT_MENU_DEFAULT','Standaard');
    define('_FMCONTENT_CONTENT_CHILD','Kind');
// Tools page
    define('_FMCONTENT_FORMFOLDER_TITLE','Kloon module');
    define('_FMCONTENT_FORMFOLDER_NAME','Mapnaam');
    define('_FMCONTENT_LOG_TITLE','Kloon module log');
    define('_FMCONTENT_FORMPURGE_TITLE','PVerwijder pagina of kloon');
    define('_FMCONTENT_ALIAS_TITLE','Alias vernieuwen');
    define('_FMCONTENT_ALIAS_CONTENT','Content alias vernieuwen');
    define('_FMCONTENT_ALIAS_TOPIC','Onderwerp alias vernieuwen');
// Permissions
    define('_FMCONTENT_PERMISSIONS_ACCESS','Toegangspermissies');
    define('_FMCONTENT_PERMISSIONS_SUBMIT','Indienpermissies');
    define('_FMCONTENT_PERMISSIONS_GLOBAL','Globale permissies');
    define('_FMCONTENT_PERMISSIONS_GLOBAL_4','Stemmen');
    define('_FMCONTENT_PERMISSIONS_GLOBAL_8','Indienen vanuit de gebruikerszijde');
    define('_FMCONTENT_PERMISSIONS_GLOBAL_16','Automatisch goedkeuren');
// Admin message
    define('_FMCONTENT_MSG_DBUPDATE','Database succevol bijgewerkt!');
    define('_FMCONTENT_MSG_ERRORDELETE','Deze content kan niet worden verwijderd! <br />Verwijder of verplaats alle onderliggende content.');
    define('_FMCONTENT_MSG_WAIT','Even wachten...');
    define('_FMCONTENT_MSG_DELETE','Zeker weten dat het volgende verwijderd moet worden: %s ?');
    define('_FMCONTENT_MSG_EDIT_ERROR','Kon de pagina niet vinden of pagina ID bestaat niet!');
    define('_FMCONTENT_MSG_UPDATE_ERROR','Database niet bijgewerkt! Bijwerken content mislukt');
    define('_FMCONTENT_MSG_INSERT_ERROR','Database niet bijgewerkt! Invoegen content mislukt ');
    define('_FMCONTENT_MSG_CLONE_ERROR','Deze map bestaat reeds!');
    define('_FMCONTENT_MSG_NOPERMSSET','Permissie kan niet ingesteld worden: Nog geen onderwerpen aangemaakt! Please create a Topic first.');
	 define('_FMCONTENT_MSG_ALIASERROR','De geselecteerde Alias bestaat reeds. Pas de Alias aan en probeer opnieuw');
// Tips
    define('_FMCONTENT_HOME_TIPS',
    '<ul>
	<li>Nog niet</li>
	</ul>');
    define('_FMCONTENT_TOPIC_TIPS',
    '<ul>
	<li>Opnieuw ordenen, bekijken, bewerken, of verwijderen van elk onderwerp</li>
	<li>Onderwerp en bijbehorende content weergeven in een blok als menu</li>
	<!--<li>Acief, gebruik diverse onderwerpen me AJAX</li>-->
	<li>Klik op een titel van het onderwerp om alle bijbehorende content weer te geven</li>
	</ul>');
    define('_FMCONTENT_CONTENT_TIPS',
    "<ul>
	<li>Opnieuw ordenen, bekijken, bewerken of verwijderen van alle content en pagina's</li>
	<li>Aanmaken van content, link, sectie hoofd of deler</li>
	<li>Om de volgorde van de content te wijzigen (wat direct te zien is in het menu), klik en sleep de content naar de gewenste positie.</li>
	</ul>");
    define('_FMCONTENT_TOOLS_TIPS',
    '<ul>
	<li>Nog niet</li>
	</ul>');
    define('_FMCONTENT_PERMISSIONS_TIPS',
    '<ul>
	<li>Toegangs, indienen en globale permissies voor de module</li>
	</ul>');
// Configuration
    define("_FMCONTENT_CONFIG_CHECK","Configuratiecontrole");
    define("_FMCONTENT_CONFIG_PHP","Minimum PHP benodigd: %s (huidige versie is %s)");
    define("_FMCONTENT_CONFIG_XOOPS","Minimum XOOPS benodigd:  %s (huidige versie is %s)");
}
?>