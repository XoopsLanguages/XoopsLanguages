<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * xsitemap - MODULE FOR XOOPS CMS
 * Copyright (c) Urbanspaceman (http://www.takeaweb.it)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Urbanspaceman (http://www.takeaweb.it)
 * @license         GPL
 * @package         xsitemap
 * @author 			Urbanspaceman (http://www.takeaweb.it)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 	
//Menu
define("_AM_XSITEMAP_MANAGER_INDEX","Index");

define("_AM_XSITEMAP_THEREARE_PLUGIN","Ci sono <span style=\"color: #ff0000; font-weight: bold\">%s</span> Plugins nel database");
define("_AM_XSITEMAP_THEREARE_PLUGIN_ONLINE","Ci sono <span style='color: #ff0000; font-weight: bold'>%s</span> Plugins attivi");

define("_AM_XSITEMAP_MANAGER_ABOUT","About");
define("_AM_XSITEMAP_MANAGER_PREFERENCES","Preferenze");
define("_AM_XSITEMAP_MANAGER_UPDATE","Aggiorna");
define("_AM_XSITEMAP_MANAGER_PERMISSIONS","Permessi");

//Index
define("_AM_XSITEMAP_MANAGER_PLUGIN","Plugin");


//General
define("_AM_XSITEMAP_FORMOK","Registrato con successo");
define("_AM_XSITEMAP_FORMDELOK","Eliminato con successo");
define("_AM_XSITEMAP_FORMSUREDEL","Sei sicuro di voler cancellare : <b><span style=\"color : Red\"> %s </span></b>");
define("_AM_XSITEMAP_FORMSURERENEW","Sei sicuro di voler aggiornare : <b><span style=\"color : Red\"> %s </span></b>");
define("_AM_XSITEMAP_FORMUPLOAD","Upload");
define("_AM_XSITEMAP_FORMIMAGE_PATH","File presenti in %s");
define("_AM_XSITEMAP_FORMACTION","Azione");
define("_AM_XSITEMAP_OFF","Non attivo");
define("_AM_XSITEMAP_ON","Attivo");
define("_AM_XSITEMAP_EDIT","Modifica");
define("_AM_XSITEMAP_DELETE","Elimina");
define("_AM_XSITEMAP_PLUGIN_ADD","Aggiungere un plugin");
define("_AM_XSITEMAP_PLUGIN_EDIT","Modificare un plugin");
define("_AM_XSITEMAP_PLUGIN_ID","Id");
define("_AM_XSITEMAP_PLUGIN_NAME","Nome del modulo");
define("_AM_XSITEMAP_PLUGIN_MOD_VERSION","Versione");
define("_AM_XSITEMAP_PLUGIN_MOD_TABLE","Tabella delle categorie del modulo (Es. per il modulo News la tabella è 'topics') ");
define("_AM_XSITEMAP_PLUGIN_CAT_ID","Campo per la categoria principale (Es. per il modulo News il campo è 'topic_id')");
define("_AM_XSITEMAP_PLUGIN_CAT_PID","Campo per la categoria parent (Es. per il modulo News il campo è 'topic_pid')");
define("_AM_XSITEMAP_PLUGIN_CAT_NAME","Campo per il nome della categoria (Es. per il modulo News il campo è 'topic_title')");
define("_AM_XSITEMAP_PLUGIN_WEIGHT","Ordinamento <br/> (Es. per ordinare in base al titolo le categorie del modulo News, inserisci 'topic_title')");
define("_AM_XSITEMAP_PLUGIN_CALL","Chiamata (La chiamata è il percorso che viene richiamato dal link nella mappa del sito. Per il modulo News ad esempio è 'index.php?storytopic=')");
define("_AM_XSITEMAP_PLUGIN_SUBMITTER","Autore");
define("_AM_XSITEMAP_PLUGIN_DATE_CREATED","Creato il");
define("_AM_XSITEMAP_PLUGIN_ONLINE","Online");

define("_AM_XSITEMAP_PLUGIN_MOD_TABLE_SHORT","Tabella delle categorie");
define("_AM_XSITEMAP_PLUGIN_CAT_ID_SHORT","Identificativo categoria principale");
define("_AM_XSITEMAP_PLUGIN_CAT_PID_SHORT","Identificativo sotto categoria ");
define("_AM_XSITEMAP_PLUGIN_CAT_NAME_SHORT","Nome della categoria");
define("_AM_XSITEMAP_PLUGIN_WEIGHT_SHORT","Ordinato per");
define("_AM_XSITEMAP_PLUGIN_CALL_SHORT","Chiamata");


//Permissions
define("_AM_XSITEMAP_PERMISSIONS_ACCESS","Permessi di vedere");
define("_AM_XSITEMAP_PERMISSIONS_SUBMIT","Permessi di inviare");

//About.php
define("_AM_XSITEMAP_ABOUT_RELEASEDATE","Data di rilascio");
define("_AM_XSITEMAP_ABOUT_AUTHOR","Autore");
define("_AM_XSITEMAP_ABOUT_CREDITS","Crediti");
define("_AM_XSITEMAP_ABOUT_CREDITS_TEXT","La grafica di Xsitemap si basa sul foglio di stile e sulle immagini create da <a href='http://www.astuteo.com'>ASTUTEO</a>");
define("_AM_XSITEMAP_ABOUT_TNX","Ringraziamenti");
define("_AM_XSITEMAP_ABOUT_TNX_TEXT","Ringrazio <b>Chanoir</b> e <b>GIJOE</b> per aver sviluppato il modulo originale SITEMAP che ha ispirato questo nuovo <b>XSITEMAP</b>, ringrazio <b>TRABIS</b> e <b>Alessandro</b> per l'aiuto datomi durante le fasi di sviluppo, ringrazio anche il <b>Team Development Module</b> per aver creato il modulo <b>TDMCreate</b> che è stato di fondamentale importanza per la realizzazione di <b>XSITEMAP</b>. ");
define("_AM_XSITEMAP_ABOUT_README","Informazioni");
define("_AM_XSITEMAP_ABOUT_MANUAL","Aiuto");
define("_AM_XSITEMAP_ABOUT_LICENSE","Licenza");
define("_AM_XSITEMAP_ABOUT_MODULE_STATUS","Stato");
define("_AM_XSITEMAP_ABOUT_MODULE_PLUGIN","Moduli supportati");
define("_AM_XSITEMAP_ABOUT_MODULE_DESC","Descrizione");
define("_AM_XSITEMAP_ABOUT_MODULE_DESC_TEXT","Modulo per la gestione e visualizzazione della Mappa del sito");
define("_AM_XSITEMAP_ABOUT_WEBSITE","Sito web");
define("_AM_XSITEMAP_ABOUT_AUTHOR_NAME","Autore");
define("_AM_XSITEMAP_ABOUT_AUTHOR_WORD","Parole dell'autore");
define("_AM_XSITEMAP_ABOUT_CHANGELOG","Change Log");
define("_AM_XSITEMAP_ABOUT_MODULE_INFO","Informazioni sul modulo");
define("_AM_XSITEMAP_ABOUT_AUTHOR_INFO","Informazioni sull'autore");
define("_AM_XSITEMAP_ABOUT_DISCLAIMER","Disclaimer");
define("_AM_XSITEMAP_ABOUT_DISCLAIMER_TEXT","Licenza GPL - Nessuna garanzia");
define("_AM_XSITEMAP_ABOUT_BY","Realizzato da <a href ='http://www.takeaweb.it'>TAKEAWEB</a>");

//add by urbanspaceman 22/08/2009
define("_AM_XSITEMAP_ABOUT_TRANSLATION","Traduzioni");
define("_AM_XSITEMAP_ABOUT_TRANSLATION_TEXT","<ul><li>Italiano : Urbanspaceman</li><li>PortogheseBr : Artsgeral</li><li>English : dbman</li></ul>");

//add by urbanspaceman 26/08/2009
//xml.php
define("_AM_XSITEMAP_XML","XML");
define("_AM_XSITEMAP_MANAGER_XML","Gestione XML");
define("_AM_XSITEMAP_XML_LASTUPD","Ultimo aggiornamento del file xsitemap.xml");
define("_AM_XSITEMAP_UPDATE_XML","Aggiorna il file XML");
define("_AM_XSITEMAP_XML_UPDATE","File XML aggiornato con successo");
define("_AM_XSITEMAP_XML_ERROR_UPDATE","Errore durante l'aggiornamento del file XML");
define("_AM_XSITEMAP_XML_VIEW_XML","Guarda il file XML");


//1.52

// About.php
define("_AM_XSITEMAP_ABOUT_UPDATEDATE",               "Updated: ");
define("_AM_XSITEMAP_ABOUT_DESCRIPTION",          "Description: ");
define("_AM_XSITEMAP_ADMIN_ABOUT",          "About");

//ModuleAdmin
define('_AM_MODULEADMIN_MISSING','Error: The ModuleAdmin class is missing. Please install the ModuleAdmin Class into /Frameworks (see /docs/readme.txt)');
define("_AM_MARQUEE_BGCOLOR_SHORT","Background color");

// Text for Admin footer
define("_AM_XSITEMAP_FOOTER","<div class='center smallsmall italic pad5'>xSiteMap is maintained by the <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");