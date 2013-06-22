<?php   
/**
 * ****************************************************************************
 *       - Original Copyright (TDM)
 *       - TDMCreate By TDM - TEAM DEV MODULE FOR XOOPS
 *       - Licence GPL Copyright (c) (http://www.tdmxoops.net)
 *       - Developers TEAM TDMCreate Xoops - (http://www.xoops.org)
 * ****************************************************************************
 *       FEEDS - MODULE FOR XOOPS
 *        Copyright (c) 2007 - 2012
 *       TXMod Xoops (http://www.txmodxoops.org)
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  ------------------------------------------------------------------------
 * @copyright       TXMod Xoops (http://www.txmodxoops.org)
 * @license         GPL see LICENSE
 * @package         feeds
 * @author          TXMod Xoops (info@txmodxoops.org)
 *
 * Version : 1.01 Sat 2012/02/25 20:23:53 : Timgno Exp $
 * ****************************************************************************
 */ 
// Admin
define("_MI_FEEDS_NAME","Feeds");
define("_MI_FEEDS_DESC","Questo modulo raccoglie, attraverso dei plugin, i dati rss dei singoli moduli");
//Menu
define("_MI_FEEDS_ADMENU1","Dashboard");
define("_MI_FEEDS_ADMENU2","Gestione Feed");
define("_MI_FEEDS_ADMENU3","Gestione Plugin");
define("_MI_FEEDS_ADMENU4","About");
//Blocks
define("_MI_FEEDS_FEED_BLOCK_RECENT","Feed recenti");
define("_MI_FEEDS_FEED_BLOCK_DAY","Feed di oggi");
define("_MI_FEEDS_FEED_BLOCK_RANDOM","Feed a caso");
define("_MI_FEEDS_PLUGIN_BLOCK_RECENT","Plugin recenti");
define("_MI_FEEDS_PLUGIN_BLOCK_DAY","Plugin di oggi");
define("_MI_FEEDS_PLUGIN_BLOCK_RANDOM","Plugin a caso");
//Config
define("_MI_FEEDS_EDITOR","Editor");
define("_MI_FEEDS_KEYWORDS","Keywords");
define("_MI_FEEDS_KEYWORDS_DESC","Enter here the keywords (separate by comma)");
define("_MI_FEEDS_SIZE","Mime size images");
define("_MI_FEEDS_MIMETYPES","Mime Types images");
define("_MI_FEEDS_ADVERTISE","Code of advertise");
define("_MI_FEEDS_ADVERTISE_DESC","Insert here the code of advertisement");
define("_MI_FEEDS_PERPAGEADMIN","Numero elementi per pagina");
define("_MI_FEEDS_PERPAGEAMDMIN_DESC","Numero di elementi da mostrare nell'area amministrativa");
define("_MI_FEEDS_PERPAGEUSER","Numero elementi per pagina");
define("_MI_FEEDS_PERPAGEUSER_DESC","Numero di elementi da mostrare in ogni pagina");
define("_MI_FEEDS_DIVIDEBY","Ammontare parte a parte:");
define("_MI_FEEDS_DIVIDEBY_DESC","Questo permette di scegliere come saranno suddivisi nella pagina utente");
//Tag
define("_MI_FEEDS_USETAG","Usa modulo TAG");
define("_MI_FEEDS_USETAG_DESC","E&#39; necessario installare il modulo TAG, al fine di utilizzare questa opzione");
// Seo URL Rewrite
define("_MI_FEEDS_HTACCESS","Mod-Rewrite SEO con htaccess");
define("_MI_FEEDS_HTACCESS_DESC","Guarda in /docs per htaccess da aggiungere alla tua XOOPS ROOT PATH");
define("_MI_FEEDS_BASEURL","Mod-rewrite SEO URL di base");
define("_MI_FEEDS_BASEURL_DESC","Non cambiare questo a meno che vi hanno alterato htaccess per questo");
define("_MI_FEEDS_ENDOFURL","Mod-rewrite SEO fine dell&#39;URL");
define("_MI_FEEDS_ENDOFURL_DESC","Fine dell&#39;URL standard del file HTML con SEO htaccess abilitato");
define("_MI_FEEDS_ACTSOCIALNETWORKS","View Socialnetworks?");
define("_MI_FEEDS_CTSOCIALNETWORKS_DESC","If you want to see the buttons of socialnetworks, click on Yes");
define("_MI_FEEDS_BARSOCIALS","Bar socialnetworks");
define("_MI_FEEDS_BARSOCIALS_DESC","Activate the code of socialnetworks");
define("_MI_FEEDS_FBCOMMENTS","Facebook Comments");
define("_MI_FEEDS_FBCOMMENTS_DESC","Activate view of Facebook comments box");
// Notifications
define("_MI_FEEDS_GLOBAL_NOTIFY","Global");
define("_MI_FEEDS_GLOBAL_NOTIFYDSC","Global download opzioni di notifica.");
define("_MI_FEEDS_CATEGORY_NOTIFY","Categoria");
define("_MI_FEEDS_CATEGORY_NOTIFYDSC","Opzioni di notifica, che si applicano alla categoria di file corrente.");
define("_MI_FEEDS_FILE_NOTIFY","File");
define("_MI_FEEDS_FILE_NOTIFYDSC","Opzioni di notifica, che si applicano al file corrente.");
define("_MI_FEEDS_GLOBAL_NEWCATEGORY_NOTIFY","Nuova categoria");
define("_MI_FEEDS_GLOBAL_NEWCATEGORY_NOTIFYCAP","Notificami quando un nuovo file di categoria &#232; stato creato.");
define("_MI_FEEDS_GLOBAL_NEWCATEGORY_NOTIFYDSC","Ricevere la notifica quando una categoria di file viene creato un nuovo");
define("_MI_FEEDS_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notizia: Nuova categoria di file");
define("_MI_FEEDS_GLOBAL_FILEMODIFY_NOTIFY","Modificare file richiesto");
define("_MI_FEEDS_GLOBAL_FILEMODIFY_NOTIFYCAP","Inviate una richiesta di modifica del file.");
define("_MI_FEEDS_GLOBAL_FILEMODIFY_NOTIFYDSC","Ricevere la notifica quando una qualsiasi richiesta di modifica del file di presentazione.");
define("_MI_FEEDS_GLOBAL_FILEMODIFY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-comunica: modifica del file richiesto");
define("_MI_FEEDS_GLOBAL_FILEBROKEN_NOTIFY","File Broken Presentata");
define("_MI_FEEDS_GLOBAL_FILEBROKEN_NOTIFYCAP","Inviate qualsiasi file di report rotto.");
define("_MI_FEEDS_GLOBAL_FILEBROKEN_NOTIFYDSC","Ricevere la notifica quando un file di report rotto &#232; presentato.");
define("_MI_FEEDS_GLOBAL_FILEBROKEN_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-comunica: Broken file segnalato");
define("_MI_FEEDS_GLOBAL_FILESUBMIT_NOTIFY","File inviato");
define("_MI_FEEDS_GLOBAL_FILESUBMIT_NOTIFYCAP","Inviate quando un nuovo file &#232; presentato (in attesa di approvazione).");
define("_MI_FEEDS_GLOBAL_FILESUBMIT_NOTIFYDSC","Ricevere una notifica quando un nuovo file &#232; presentato (in attesa di approvazione).");
define("_MI_FEEDS_GLOBAL_FILESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} automatique notifica: Nuovo file presentate");
define("_MI_FEEDS_GLOBAL_NEWFILE_NOTIFY","Nuovo file");
define("_MI_FEEDS_GLOBAL_NEWFILE_NOTIFYCAP","Inviate Quando un file viene inserita.");
define("_MI_FEEDS_GLOBAL_NEWFILE_NOTIFYDSC","Ricevere la notifica quando un file viene inserita.");
define("_MI_FEEDS_GLOBAL_NEWFILE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notifica: Nuovo file");
define("_MI_FEEDS_CATEGORY_FILESUBMIT_NOTIFY","File inviato");
define("_MI_FEEDS_CATEGORY_FILESUBMIT_NOTIFYCAP","Notificami quando un nuovo file &#232; presentato (in attesa di approvazione) per la categoria corrente.");
define("_MI_FEEDS_CATEGORY_FILESUBMIT_NOTIFYDSC","Ricevere la notifica quando un nuovo file &#232; presentato (in attesa di approvazione) per la categoria corrente.");
define("_MI_FEEDS_CATEGORY_FILESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notizia: Nuovo file inviato nella categoria");
define("_MI_FEEDS_CATEGORY_NEWFILE_NOTIFY","Nuovo file");
define("_MI_FEEDS_CATEGORY_NEWFILE_NOTIFYCAP","Notificami quando un nuovo file viene inviato alla categoria corrente.");
define("_MI_FEEDS_CATEGORY_NEWFILE_NOTIFYDSC","Ricezione di una notifica quando un file viene aggiunta alla categoria corrente.");
define("_MI_FEEDS_CATEGORY_NEWFILE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} nuovo file in categoria");
define("_MI_FEEDS_FILE_APPROVE_NOTIFY","File Approvato");
define("_MI_FEEDS_FILE_APPROVE_NOTIFYCAP","Fammi sapere quando il file viene approvato.");
define("_MI_FEEDS_FILE_APPROVE_NOTIFYDSC","Ricevere la notifica quando il file &#232; approvato.");
define("_MI_FEEDS_FILE_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-comunica: File Approvato");