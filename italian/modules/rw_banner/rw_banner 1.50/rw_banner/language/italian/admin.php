<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    Copyright (c) 2006 BrInfo                              //
//                     <http://www.brinfo.com.br>                            //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
// Author: Rodrigo Pereira Lima (BrInfo - Soluções Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descrição: Sistema de gerenciamento de mídias publicitárias               //
// ------------------------------------------------------------------------- //

//admin/index.php
define('_ADM_MSG1','Status modificato!!');
define('_ADM_MSG2','Banner modificato!!');
define('_ADM_MSG8','Banner creato!!');
define('_ADM_MSG101','Banner eliminato!!');
	define('_ADM_MSG10','There was a problem adding the banner.');
	define('_ADM_MSG11','There was a problem editing the banner.');
	define('_ADM_MSG3','Are you sure you want to remove this category and all its banners???');
define('_ADM_MSG4','Categoria modificata!!');
define('_ADM_MSG5','Categoria creata!!');
	define('_ADM_MSG102','Category an its banners deleted successfully!!');
	define('_ADM_MSG6','There was a problem adding the category.');
	define('_ADM_MSG7','There was a problem editing the category.');
	define('_ADM_MSG12','Select a block model first.');
	define('_ADM_MSG13','Blocco creato! Insert the code below in the template in the exact place you want the block to be shown.');
define('_ADM_MSG14','Blocco modificato!!');
	define('_ADM_MSG15','Are you sure you want to delete this block?');
	define('_ADM_MSG16','Block deleted successfully!!');
	define('_ADM_MSG17','Default upload folder for banners created successfully!!!');
	define('_ADM_MSG18','There was an error creating the default upload folder for the banners!!! Please, try again.');
	define('_ADM_MSG19','Are you sure you want to delete this banner?');
	define('_ADM_MSG20','Are you sure you want to remove this tag?<br />WARNING: By deleting the tag from the database, also remove it from the templates it was being used to avoid any problems.');
	define('_ADM_MSG21','Tag deleted successfully!!');
define('_ADM_MSG22','Tag creato!!');
	define('_ADM_MSG23','There was a problem adding the tag.');
define('_ADM_MSG24','Tag modificato!!');
	define('_ADM_MSG25','There was a problem editing the tag.');

define('_ADM_TITLE1','Banner registrati ');
define('_ADM_TITLE2','ID');
define('_ADM_TITLE3','CLIENTE');
define('_ADM_TITLE4','CATEGORIA');
define('_ADM_TITLE5','VISUAL.');
define('_ADM_TITLE6','VISUAL. RIMANENTI');
define('_ADM_TITLE7','CLICK');
define('_ADM_TITLE8','% DI CLICK');
define('_ADM_TITLE9','DATA CREAZIONE');
define('_ADM_TITLE10','STATUS');
define('_ADM_TITLE11','OPZIONI');
define('_ADM_TITLE12','Categorie registrate');
define('_ADM_TITLE13','TITOLO');
define('_ADM_TITLE14','NR. BANNER');
define('_ADM_TITLE15','MODULO');
define('_ADM_TITLE16','Clienti con banner');
define('_ADM_TITLE17','CLIENTE');
define('_ADM_TITLE18','CONTATTO');
define('_ADM_TITLE19','EMAIL');
define('_ADM_TITLE20','BANNER');
define('_ADM_TITLE39','CLICK RIMANENTI');
	define('_ADM_TITLE40','Template Blocks');
	define('_ADM_TITLE41','Select the block model you want to insert in your templates');
define('_ADM_TITLE42','Selezionare blocco');
define('_ADM_TITLE43','DESCRIZIONE');
define('_ADM_TITLE44','COLONNA NR.');
define('_ADM_TITLE45','TEMPO DI REFRESH (ms)');
define('_ADM_TITLE46','Stile');
	define('_ADM_TITLE47','Insert here the CSS for the block. Pay attention, in the field there is already a CSS model for a default block, don\'t change the name of the classes, simply adapt them to your needs.');
	define('_ADM_TITLE48','Insert here a brief description about the block. We recommend to write in here the template to which it is used and further information that can let clear the purpose of the block.');
	define('_ADM_TITLE49','INCLUSION ID');
	define('_ADM_TITLE50','Click on the button "Generate" to create the inclusion code for the block. This code should be inserted in the template, in the exact place where the banner block will be shown. Remember that the color, postion, font and size formats depend on the CSS chosen by you in this screen.');
	define('_ADM_TITLE51','Generate inclusion code');
	define('_ADM_TITLE52','FILE');
	define('_ADM_TITLE53','The time has to be set in miliseconds. E.g.: If you want to change the banners every 10 seconds, insert the value of 10000 miliseconds. For 30 seconds, 30000 miliseconds and so on.');
define('_ADM_TITLE99','DATA SCADENZA');

define('_ADM_TAG_TITLE01','ID');
define('_ADM_TAG_TITLE02','TITOLO');
define('_ADM_TAG_TITLE03','TAG SMARTY');
define('_ADM_TAG_TITLE04','CATEGORIA');
define('_ADM_TAG_TITLE05','BANNER TOTALI');
define('_ADM_TAG_TITLE06','COLONNE TOTALI');
define('_ADM_TAG_TITLE07','STATUS');
define('_ADM_TAG_TITLE08','Aggiungere nuovo tag');
define('_ADM_TAG_TITLE09','Titolo:');
define('_ADM_TAG_TITLE10','Categoria:');
define('_ADM_TAG_TITLE11','Numero di Banner:');
define('_ADM_TAG_TITLE12','Numero di Colonne:');
define('_ADM_TAG_TITLE13','Tutte le categorie');
define('_ADM_TAG_TITLE14','Tag Smarty:');
	define('_ADM_TAG_TITLE15','WARNING: This will be name for the created tag, therefore you cannnot use spaces, accents or any special chars. If you want to combine words separate each word by an underline(_).');
define('_ADM_TAG_TITLE16','Mostrare solo nel modulo:');
define('_ADM_TAG_TITLE17','Tutti i moduli');
	define('_ADM_TAG_TITLE18','Status del Tag:');
define('_ADM_TAG_TITLE19','MODULI');
define('_ADM_TAG_TITLE20','NOTE:');
	define('_ADM_TAG_TITLE21','We recommmend to enter in this field all the places where the tag was used so that when you do not want to continue using it, it\'ll be easy to remove it.');
define('_ADM_TAG_TITLE22','Codice del Banner:');
	define('_ADM_TAG_TITLE23','Case you do not want that this TAG shows random banners, places in this field the Code of banner that you desires to show and only it will be shown.');

define('_ADM_TAG_STATUS1','Tag Attivo');
define('_ADM_TAG_STATUS2','Tag Non Attivo');

define('_ADM_VALUE_BTN1','Crea Banner');
define('_ADM_VALUE_BTN2','Visualizza Banner');
define('_ADM_VALUE_BTN3','Modifica Banner');
define('_ADM_VALUE_BTN4','Elimina Banner');
define('_ADM_VALUE_BTN5','Crea Categoria');
define('_ADM_VALUE_BTN6','Modifica Categoria');
define('_ADM_VALUE_BTN7','Elimina Categoria');
define('_ADM_VALUE_BTN8','Crea Cliente');
define('_ADM_VALUE_BTN9','Modifica Categoria');
define('_ADM_VALUE_BTN10','Crea');
	define('_ADM_VALUE_BTN11','Template blocks');
define('_ADM_VALUE_BTN12','Crea Tag');

define('_ADM_BANNER_STATUS1','Banner Attivo');
define('_ADM_BANNER_STATUS2','Banner Non Attivo');
	define('_ADM_BANNER_STATUS3','Sent per Client. Waiting for action!');
define('_ADM_BLOCK_STATUS1','Attivo');
define('_ADM_BLOCK_STATUS2','Non Attivo');

define('_ADM_BANNER_EXIBREST','Illimitato');

	define('_ADM_CATEG_ALLMOD','All');
	define('_ADM_NO_CATEG','Define Categ');

define('_AM_RWBANNER_PREF','Preferenze');
define('_AM_RWBANNER_OPTS','Blocchi / Gruppi');
define('_AM_RWBANNER_GOMOD','Vai al modulo');
define('_AM_RWBANNER_ABOUT','Informazioni sul modulo');
define('_AM_RWBANNER_DEMO','Supporto');
	define('_AM_RWBANNER_MODADMIN','- General Admin:');
define('_AM_RWBANNER_INDEX','Indice');

define('_AM_RWBANNER_LIST_BANNER','Lista di tutti i banner registrati');
	define('_AM_RWBANNER_LIST_BANNER_DESC','List of banners registered in the system. Through this list you can have a brief statistic of all banners as well as edit or delete them. To change the exhibition order of the banners click on the columns name.');
define('_AM_RWBANNER_LIST_CATEG','Lista delle categorie registrate');
	define('_AM_RWBANNER_LIST_CATEG_DESC','List of all registered categories in the system. Through this list you can edit and delete the categories.');
define('_AM_RWBANNER_LIST_USERS','Lista di tutti i clienti con banner');
	define('_AM_RWBANNER_LIST_USERS_DESC','List of all registered users that have banners registered in the system.');
define('_AM_RWBANNER_LIST_TAG','Lista dei Tag Smarty registrati');
	define('_AM_RWBANNER_LIST_TAG_DESC','List of all registered smarty tags in the system. These tags are automatically created when the site is started and show the blocks in your site\'s theme or in the templates from the modules according to your defined configuration.<br /> To show the banners in the templates or in the theme edit the desired file including the tag in the exact place where the banners should be shown. You can deactivate the tags at any time clicking on the icon in the status column but remember that only the active tags will show banners. <p style=\'color:#FF0000;\'><b>WATCH OUT:</b> To activate the TAGS function it is necessarey to hack the xoops core, to learn how to apply this hack read the README.TXT file</p>');

define('_AM_RWBANNER_NODIR','La directory dove caricare i banner non esiste o non &egrave; accessibile.<br /><font color="red">Directory: "%s"</font><br /><a href="main.php?op=criardir">Crea la directory</a>');

define('_ADM_TOTAL_BANNER_LEG','Numero totale di banner registrati:');

//admin/edita.php
	define('_ADM_MSG5_ED','All the fields to be filled are mandatory!!!');

define('_ADM_TITLE21','Modifica banner nr.');
define('_ADM_TITLE22','Cliente:');
define('_ADM_TITLE23','Categoria:');
define('_ADM_TITLE24','Numero di visualizzazioni:');
define('_ADM_TITLE500','Numero di Click:');
define('_ADM_TITLE5001','Periodo di visualizzazione (in giorni):');
define('_ADM_TITLE25','Immagine(Url):');
	define('_ADM_TITLE26','Link(Url):');
define('_ADM_TITLE27','Utilizzare codice Html?');
define('_ADM_TITLE28','Codice HTML:');
	define('_ADM_TITLE29','Target:');
define('_ADM_TITLE51_ED','Carica Banner:');
define('_ADM_TITLE5000','Note:');
	define('_ADM_TITLE5000_DESC','In this field the client defined some details about the banner and its exhibition, analize the content of this field to define the publicity scheme for this banner.');

define('_ADM_VALUE_BTN10_ED','Invia');

//admin/editacateg.php
	define('_ADM_MSG6_EDC','This category has registered banners, don\'t forget to edit them, by changing the size so that they are compatible with the new category setup, otherwise, there can occur problems with the banner exhibition!!!');

define('_ADM_TITLE30','Modifica categoria nr.');
define('_ADM_TITLE31','Titolo:');
define('_ADM_TITLE32','Larghezza banner:');
define('_ADM_TITLE33','Altezza banner:');
	define('_ADM_TITLE34','Attach to module:');

//admin/insere.php
define('_ADM_TITLE35','Crea banner');
define('_ADM_TITLE36','Numero di visualizzazioni:');

//admin/inserecateg.php
define('_ADM_TITLE38','Crea categoria');
	define('_ADM_TITLE37','Choosing one or more modules in this option, you define that all the banners generated by this tag will be shown in the selected module.');

//admin/myblocksadmin.php
define('_AM_RWBANNER_BLOCKS','Blocchi');
	define('_AM_RWBANNER_BLOCKSINFO','You can setup the block here or in the system module. Here you can also have the option to clone a block.');
define('_AM_RWBANNER_GROUPS','Gruppi');
define('_AM_RWBANNER_GROUPSINFO','Impostare i permessi per ogni gruppo');
define('_AM_RWBANNER_POSITION','Posizione');


define('_ADM_BTN_OP1','Crea');
define('_ADM_BTN_OP2','Modifica');
define('_ADM_BTN_OP3','Illimit.');

//admin/upgrade.php
	define('_AM_RWBANNER_UPGRADEFAILED','There was an erro during the update process! Please, try again!');
	define('_AM_RWBANNER_UPGRADEFAILED1','Error while creating the banners table!');
	define('_AM_RWBANNER_UPGRADEFAILED2','Error while creating the category table!');
	define('_AM_RWBANNER_UPGRADEFAILED3','Error while creating the TAGS tabel!');
	
	define('_AM_RWBANNER_UPGRADECOMPLETE','Tables update executed successfully! Follow the steps below to activate all the module resources and after, click on the following link.');
	define('_AM_RWBANNER_UPGRADECOMPLETE1','The code for the banner exibition in the theme and templates for your site was changed, you have to change the old code in the following file ".XOOPS_ROOT_PATH."/header.php by the code below:');
	define('_AM_RWBANNER_UPGRADECOMPLETE2','Now the module has a new feature, banner exhibition in text from other modules, allowing that you show your banners in any module that accepts bbcodes such as the news, articles, XT-Conteúdo modules, including forums. So that this new feature becomes active you have to hack the ".XOOPS_ROOT_PATH."/class/module.textsanitizer.php file.<br />The hack has to be applied in the end of the xoopsCodeDecode function. To make it easier, take a look athe the file: function_bbcode_xoops2015.txt in the docs folder in this module.');

	define('_AM_RWBANNER_UPDATEMODULE','Update Templates and Blocks');

define('_AM_RWBANNER_IMPORT','Importa');
	define('_AM_IMPORT_TITLE','Import selected banners of the Xoops System for the RW-Banner ');
define('_AM_IMPORT_TITLE1','Categoria RW-Banner');
define('_AM_IMPORT_TITLE2','Cliente RW-Banner');
define('_AM_IMPORT_TITLE3','Importa?');
	define('_AM_SUCCESS_IMPORT','Successfully carried through importation. As the old system possessed given little for banners, edits banners imported and configures them correctly. ');
	define('_AM_FAIL_IMPORT','Some problems had occurred during the importation process! ');
?>
