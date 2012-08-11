<?php
/**
 * Name: admin.php
 * Description: Xoops FAQ module admin language defines
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package : XOOPS
 * @Module : Xoops FAQ
 * @subpackage : Module Language
 * @since 2.3.0
 * @author John Neill
 * @version $Id: admin.php 0000 10/04/2009 09:05:06 John Neill $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

/**
 * Icons
 */
define('_XO_LA_EDIT','Bewerk item ' );
define('_XO_LA_DELETE','Verwijder item' );

define('_AM_XOOPSFAQ_CREATENEW','Nieuw item toevoegen' );
define('_AM_XOOPSFAQ_MODIFYITEM','Bewerk item: %s' );

/**
 * Content
 */
//define('_AM_XOOPSFAQ_CONTENTS_HEADER','FAQ Content Management' );
//define('_AM_XOOPSFAQ_CONTENTS_SUBHEADER','' );
define('_AM_XOOPSFAQ_CONTENTS_LIST_DSC','' );
define('_AM_XOOPSFAQ_CONTENTS_ID','#' );
define('_AM_XOOPSFAQ_CONTENTS_TITLE','Vraag' );
define('_AM_XOOPSFAQ_CONTENTS_WEIGHT','Gewicht' );
define('_AM_XOOPSFAQ_CONTENTS_PUBLISH','Gepubliseerd' );
define('_AM_XOOPSFAQ_CONTENTS_ACTIVE','Actief' );
define('_AM_XOOPSFAQ_ACTIONS','Acties' );
define('_AM_XOOPSFAQ_E_CONTENTS_CATEGORY','Categorie:' );
define('_AM_XOOPSFAQ_E_CONTENTS_CATEGORY_DSC','Selecteer de categorie om de vraag onder te plaatsen ' );
define('_AM_XOOPSFAQ_E_CONTENTS_TITLE','Titelvraag:' );
define('_AM_XOOPSFAQ_E_CONTENTS_TITLE_DSC','Vul een titel in voor de vraag.' );
define('_AM_XOOPSFAQ_E_CONTENTS_CONTENT','Vraag kern:' );
define('_AM_XOOPSFAQ_E_CONTENTS_CONTENT_DSC','Plaats hier de uitgebreide vraag.' );
define('_AM_XOOPSFAQ_E_CONTENTS_PUBLISH','Publicatiedatum:' );
define('_AM_XOOPSFAQ_E_CONTENTS_PUBLISH_DSC','Selecteer een datum waarop de vraag is gepubliseerd.' );
define('_AM_XOOPSFAQ_E_CONTENTS_WEIGHT','Gewicht:' );
define('_AM_XOOPSFAQ_E_CONTENTS_WEIGHT_DSC','Vul een waarde in voor het gewicht. Gebruikt voor sorteren. ' );
define('_AM_XOOPSFAQ_E_CONTENTS_ACTIVE','Actief:' );
define('_AM_XOOPSFAQ_E_CONTENTS_ACTIVE_DSC','Selecteer "JA" om de vraag weer te geven.' );
define('_AM_XOOPSFAQ_E_DOHTML','Toon als HTML' );
define('_AM_XOOPSFAQ_E_BREAKS','Converteer Linebreaks naar Xoops breaks' );
define('_AM_XOOPSFAQ_E_DOIMAGE','Toon Xoops afbeeldingen' );
define('_AM_XOOPSFAQ_E_DOXCODE','Toon Xoops Codes' );
define('_AM_XOOPSFAQ_E_DOSMILEY','Toon Xoops Smilies' );

/**
 * Category
 */
//define('_XO_LA_ADDCAT','Add Category' );
define('_AM_XOOPSFAQ_CATEGORY_HEADER','Faq Categoriebeheer' );
//define('_AM_XOOPSFAQ_CATEGORY_SUBHEADER','' );
define('_AM_XOOPSFAQ_CATEGORY_DELETE_DSC','Verwijdercontrole! Je staat op het punt om dit item te verwijderen. De actie kan geannuleerd worden door te klikken op Annuleren of bevestigd worden door te klikken op Verstuur.<br /><br />Deze actie is niet te herstellen!' );
define('_AM_XOOPSFAQ_CATEGORY_EDIT_DSC','Bewerkmodus: Bewerk hier de eigenschappen van het item. Klik op indienen om de wijzigingen door te voeren of klik op annuleren om de wijzigingen ongedaan te maken.' );
define('_AM_XOOPSFAQ_CATEGORY_LIST_DSC','' );
define('_AM_XOOPSFAQ_CATEGORY_ID','#' );
define('_AM_XOOPSFAQ_CATEGORY_TITLE','Titel' );
define('_AM_XOOPSFAQ_CATEGORY_WEIGHT','gewicht' );
//define('_XO_LA_ACTIONS','Actions' );
define('_AM_XOOPSFAQ_E_CATEGORY_TITLE','Titel:' );
define('_AM_XOOPSFAQ_E_CATEGORY_TITLE_DSC','' );
define('_AM_XOOPSFAQ_E_CATEGORY_WEIGHT','Gewicht:' );
define('_AM_XOOPSFAQ_E_CATEGORY_WEIGHT_DSC','' );

/**
 * Buttons
 */
//define('_XO_LA_CREATENEW','Nieuw toevoegen' );
define('_AM_XOOPSFAQ_NOLISTING','Geen items gevonden' );

/**
 * Database and error
 */
define('_AM_XOOPSFAQ_SUBERROR','Er is een FOUT opgetreden<br />' );
define('_AM_XOOPSFAQ_RUSURECAT','Zeker weten dat deze categorie verwijderd wordt met alle onderliggende vragen?' );
define('_AM_XOOPSFAQ_DBSUCCESS','Database is succesvol bijgewerkt!' );
define('_AM_XOOPSFAQ_ERRORNOCATEGORY','FOUT: Geen categorienaam ingevuld, keer terug en vul een categorienaam in' );
define('_AM_XOOPSFAQ_ERRORCOULDNOTADDCAT','FOUT: Kon geen categorie toevoegen aan de database.' );
define('_AM_XOOPSFAQ_ERRORCOULDNOTDELCAT','FOUT: Kon het opgevraagde categorie niet verwijderen.' );
define('_AM_XOOPSFAQ_ERRORCOULDNOTEDITCAT','FOUT: Kon het opgevraagde item niet wijzigen.' );
define('_AM_XOOPSFAQ_ERRORCOULDNOTDELCONTENTS','FOUT: Kon geen FAQ inhoud verwijderen.' );
define('_AM_XOOPSFAQ_ERRORCOULDNOTUPCONTENTS','FOUT: Kon geen FAQ inhoud bijwerken.' );
define('_AM_XOOPSFAQ_ERRORCOULDNOTADDCONTENTS','FOUT: Kon geen FAQ inhoud toevoegen.' );
define('_AM_XOOPSFAQ_NOTHTINGTOSHOW','Geen items om weer te geven' );
define('_AM_XOOPSFAQ_ERRORNOCAT','FOUT: There are no Categories created yet. Before you can create a new FAQ, you must create a Category first.' );

//1.22

// About.php
define("_AM_XOOPSFAQ_ABOUT_RELEASEDATE","Vrijgegeven: ");
define("_AM_XOOPSFAQ_ABOUT_UPDATEDATE","Bijgewerkt: ");
define("_AM_XOOPSFAQ_ABOUT_AUTHOR","Auteur: ");
define("_AM_XOOPSFAQ_ABOUT_CREDITS","Credits: ");
define("_AM_XOOPSFAQ_ABOUT_LICENSE","Licentie: ");
define("_AM_XOOPSFAQ_ABOUT_MODULE_STATUS","Status: ");
define("_AM_XOOPSFAQ_ABOUT_WEBSITE","Website: ");
define("_AM_XOOPSFAQ_ABOUT_AUTHOR_NAME","Naam auteur: ");
define("_AM_XOOPSFAQ_ABOUT_CHANGELOG","Wijzigingsbeheer");
define("_AM_XOOPSFAQ_ABOUT_MODULE_INFO","Module Info");
define("_AM_XOOPSFAQ_ABOUT_AUTHOR_INFO","Author Info");
define("_AM_XOOPSFAQ_ABOUT_DESCRIPTION","Omschrijving: ");

// Configuration
define("_AM_XOOPSFAQ_CONFIG_CHECK","Configuratiecontrole");
define("_AM_XOOPSFAQ_CONFIG_PHP","Minimum PHP versie benodigd: %s (huidige versie is %s)");
define("_AM_XOOPSFAQ_CONFIG_XOOPS","Minimum XOOPS versie benodigd:  %s (huidige versie is %s)");

define("_AM_XOOPSFAQ_ADMIN_PREFERENCES","Instellingen");
define("_AM_XOOPSFAQ_ADMIN_INDEX_TXT1","The XoopsFAQ module is used to create a list of Frequently Asked Questions (FAQs) for your website. It is typically used to create a list of common questions about your website, service or product(s), but you could use it to list questions and answers about anything really. FAQs can be organized into categories.");

// Text for Admin footer
define("_AM_XOOPSFAQ_ADMIN_FOOTER","<div class='center smallsmall italic pad5'>XOOPS FAQ wordt onderhouden door <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");

//define('_AM_XOOPSFAQ_ADMIN_'," "); //