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

//xoops_version.php
define('_MI_RWBANNER_NAME','rw-banner');
define('_MI_RWBANNER_DESC','Sistema per la gestione e visualizzazione casuale di banner.');
define('_MI_RWBANNER_DIR_NAME','rw_banner');

define('_MI_RWBANNER_TABLE1','rw_banner');
define('_MI_RWBANNER_TABLE2','rw_categorias');
define('_MI_RWBANNER_TABLE3','rw_tags');

define('_MI_RWBLOCK1_NAME','Banner Casuale');
	define('_MI_RWBLOCK1_NAME_DESC','Creates a block with 1 or more random banners.');
define('_MI_RWBLOCK2_NAME','Statistiche Cliente');
	define('_MI_RWBLOCK2_NAME_DESC','Creates a block that shows to client the statistics of his banners');
define('_MI_RWBLOCK3_NAME','Banner DHTML');
	define('_MI_RWBLOCK3_NAME_DESC','Creates a block that shows a DHTML window with automatic closure centerd at the screen.');
define('_MI_RWBLOCK4_NAME','anner AJAX');
	define('_MI_RWBLOCK4_NAME_DESC','Creates a block that shows banners and uses AJAX to refresh the block and change the banners.');
define('_MI_RWBLOCK5_NAME','Banner Drop-in');
	define('_MI_RWBLOCK5_NAME_DESC','Creates a block that show a DHTML box that appears into the screen with the selected banners.');
define('_MI_RWBLOCK6_NAME','Banner LightBox');
	define('_MI_RWBLOCK6_NAME_DESC','Shows the banners in a DHTML DIV full of cool effects.');

define('_MI_RW_DIRIMAGES','Directory per Banner:');
	define('_MI_RW_DIRIMAGES_DESC','Default banner upload directory');
define('_MI_RW_SHOWCADFORM','Gli utenti possono caricare banner:');
	define('_MI_RW_SHOWCADFORM_DESC','Allow that users add their banners through a form on the main page of the module? If yes, the registration form will be shown.');
define('_MI_RW_NUMREGISTROS','Numero di Banner:');
	define('_MI_RW_NUMREGISTROS_DESC','Number of banners shown in the module\'s administration interface.');
define('_MI_RW_PERMCLIENT','Il cliente pu&ograve; modificare i banner:');
	define('_MI_RW_PERMCLIENT_DESC','Yes allows the banner client to change his banners.');
define('_MI_RW_CAMPOSPERM','Campi modificabili dal cliente:');
	define('_MI_RW_CAMPOSPERM_DESC','Select the fields the cliente will be allowed to change if the configuration above is active.');

define('_MI_RWBANNER_HISTORY','<b>=> Version 1.5 (10/09/2006)<br/>
===================================<br/></b>
<ul>
<li>Finally, the counting problem for the flash banner was solved. Each action script of the banner module was rewritten and the bugs corrected.</li>
<li>The module was entirely reformulated. Now its code is object-oriented and it is much faster and more stable.</li>
<li>Added an option for the period of exhibition for the banners. When you add a banner you define a period (in days) to show this banner. After this period the banner is deactivated and it won\'t be shown to the users anymore.</li>
<li>With a small hack in the xoops core, it\'s possible to add banners to any modules that accepts bbcode as the news or CBB modules. Therefore, now it\'s possible to show banners inside news, artciles, forum posts and many other places. For further information on how to use this hack read the file README.TXT</li>
<li>Added a function to manage the SMARTY TAGS of the module. Previously to show your banners in the theme of your site or in the module templates you had to create the tags manually by inserting the command in the header.php file. Now, the hack is still necessary, although you create it only once and after you create, edit, change the status and delete the tags directly via the site administation.</li>
<li>2 new blocks with DHTML effects were added, Drop-in Banner and LightBox Banner. Now you can give a new highlight to your banners.</li>
</ul>
<b>=> Version 1.4 RC (02/04/2006)<br/>
===================================<br/></b>
<ul>
<li>New block added. Ajax Banner: this block creates a table with the selected banners based on the configuration criterias and change the shown banners form x to x seconds. The time is also defined in the configurations.<li>
<li>Templates for all the blocks were created. Now it\'s much easier to change the exibition format within the blocks.<li>
</ul>
<b>=> Version 1.3.2 RC1 (23/02/2006)<br/>
===================================<br/></b>
<ul>
<li>New block added. DHTML Banner: this block creates a floating area that closes automatically in X seconds and it has the option to select background and border color, how many banners will be shown, in how many columns, show the banner once each X reloads, among other features.</li>
</ul>
<b>=> Version 1.3.2 RC (05/02/2006)<br/>
===================================<br/></b>
<ul>
<li>The click counting bug for flash banners was corrected.</li>
<li>The screen for adding and editing banners was changed as well as the screen for adding and editing the categories. Now these screens are using the xoops form class.</li>
<li>To the screen for adding and editing banners was added a field for uploading banners, now it is not necessary anymore to add the url of the image. It\'s possible to choose the URL or upload option. For flash banners (swf) use only the upload option so that the statistics for this banner work.</li>
<li>Bugs corrected in the user\'s side in the module: now the site users that are banner clients can see the statistics of their banners through this area.</li>
<li>Added the option to acquire a banner per clicks. When the total of clicks acquired is reached, the banner becomes inactive and is not shown anymore.</li>
</ul>
<b>=> Version 1.3 RC (18/09/2005)<br/>
===================================<br/></b>
<ul>
<li>The banner exhibition function in the header and in the templates was changed. There was an option added to show one category in one particular module.</li>
<li>Due to this change in the function, there was added another option in the registration forms and by the editing of categories. With this new option the module administrator is able to link a category to a specific module bringing the banners for this category to be shown in the linked module.</li>
<li>The language constants were created.</li>
<li>A bug remains and I couldn\'t solve the click counting problem yet for flash banners and HTML code.</li>
</ul>
<b>=> Version 1.1 RC (14/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Many bugs were corrected in the previous version.</li>
<li>Added an option to add banners for a particular client.</li>
<li>The administration area was changed, being more intuitive, organized.</li>
<li>Added a new block, client statistics, that shows the client the main statistics of his banners.</li>
<li>Created an area for the client where he has access to the statistics of his banners, possiblity to change the url of the banners and, further, the submission of the statistics per e-mail.</li>
</ul>
<b>=> Version 0.9 Beta 1 (11/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Public Release of the first test version.</li>
</ul>');

define('_MI_RWBANNER_AUTHOR_WORD_DESC','I thank all my friends at the
 <a href=\'http://www.xoopstotal.com.br\' target=\'_blank\'>XoopsTotal</a> Comunity that they had helped with ideas and suggestions for the development of this module.
 A special gratefulness to the great friends
 <a href=\'http://www.xoopstotal.com.br/userinfo.php?uid=11\' target=\'_blank\'>Wilson</a> ,
 <a href=\'http://www.xoopstotal.com.br/userinfo.php?uid=5\' target=\'_blank\'>Giba</a> e
<a href=\'http://www.xoopstotal.com.br/userinfo.php?uid=8\' target=\'_blank\'>EyeKeeper</a>
for the enormous aid, its shining ideas, translations and also for the contribution in all the phases of tests of the module.');

// About.php constants
define('_MI_RWBANNER_AUTHOR_INFO','Sviluppato da');
	define('_MI_RWBANNER_DEVELOPER_LEAD','Lead Developer');
define('_MI_RWBANNER_DEVELOPER_CONTRIBUTOR','Contributi');
define('_MI_RWBANNER_DEVELOPER_WEBSITE','Sito');
define('_MI_RWBANNER_DEVELOPER_EMAIL','Email');
define('_MI_RWBANNER_DEVELOPER_CREDITS','Crediti');
	define('_MI_RWBANNER_MODULE_INFO','Module development information');
define('_MI_RWBANNER_MODULE_STATUS','Stato');
define('_MI_RWBANNER_MODULE_RELEASE_DATE','Versione e data');
define('_MI_RWBANNER_MODULE_DEMO','Sito dimostrativo');
define('_MI_RWBANNER_MODULE_SUPPORT','Sito supporto ufficiale');
define('_MI_RWBANNER_MODULE_BUG','Invia segnalazione errore/bug');
define('_MI_RWBANNER_MODULE_SUBMIT_BUG','Invia segnalazione errore/bug');
define('_MI_RWBANNER_MODULE_FEATURE','Invia suggerimenti');
define('_MI_RWBANNER_MODULE_SUBMIT_FEATURE','Invia richiesta nuova caratteristica');
	define('_MI_RWBANNER_MODULE_DISCLAIMER','Disclaimer');
	define('_MI_RWBANNER_AUTHOR_WORD','Author words');
	define('_MI_RWBANNER_VERSION_HISTORY','Version History');
	define('_MI_RWBANNER_BY','By');
// RC
	define('_MI_RWBANNER_WARNING_RC','This module is available as it is. This module is a Release Candidate and can not be used in a production site. This module is under active development and its use is of your own responsability, which means the authors are not responsible for any harms.');

//admin/menu.php
define('_ADM_MENU_TITLE1','Indice');
define('_ADM_MENU_TITLE2','Blocchi/Gruppi');
define('_ADM_MENU_TITLE3','Crea Banner');
define('_ADM_MENU_TITLE4','Crea Categorie');
define('_ADM_MENU_TITLE5','Supporto');
define('_ADM_MENU_TITLE6','Informazioni sul Modulo');
define('_ADM_MENU_TITLE7','Preferenze');
define('_ADM_MENU_TITLE8','Crea Tag');

?>
