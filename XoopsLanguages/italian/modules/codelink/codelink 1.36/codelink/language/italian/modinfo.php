<?php
/**
 * ****************************************************************************
 *  - Original Copyright (TDM)
 *  - TDMCreate By TDM - TEAM DEV MODULE FOR XOOPS
 *  - Licence GPL Copyright (c) (http://www.tdmxoops.net)
 *  - Developers TEAM TDMCreate Xoops - (http://www.xoops.org)
 *  - Revision By TXMod Xoops (http://www.txmodxoops.org)
 * ****************************************************************************
 *  CODELINK - MODULE FOR XOOPS
 *  Copyright (c) 2007 - 2012
 *  TXMod Xoops (http://www.txmodxoops.org)
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  ---------------------------------------------------------------------------
 *  @copyright       TXMod Xoops (http://www.txmodxoops.org)
 *  @license         GPL see LICENSE
 *  @package         codelink
 *  @author          TXMod Xoops (info@txmodxoops.org)
 *
 *  Version : 1.36 Mon 2012/01/09 14:23:56 : Timgno Exp $
 * ****************************************************************************
 */
//Info
define("_MI_CODELINK_NAME", "CodeLink");
define("_MI_CODELINK_DESC", "Modulo per la visualizzazione dei links, dei bottoni e dei banners del sito, prelievo del codice per lo scambio con altri siti");
// Admin Menu
define("_MI_CODELINK_ADMENU1", "Dashboard");
define("_MI_CODELINK_ADMENU2", "Link");
define("_MI_CODELINK_ADMENU3", "Button");
define("_MI_CODELINK_ADMENU4", "Banner");
define("_MI_CODELINK_ADMENU5", "About");
// Submenu user
define("_MI_CODELINK_SMLINKS","Link");
define("_MI_CODELINK_SMBUTTONS","Bottoni");
define("_MI_CODELINK_SMBANNERS","Banner");
//Config
define("_MI_CODELINK_BANNER_IMG_SIZE","Dimensioni massime autorizzate per banner_img");
define("_MI_CODELINK_BANNER_IMG_MIMETYPES","Tipi di mime autorizzati per banner_img");
define("_MI_CODELINK_BUTTON_IMG_SIZE","Dimensioni massime autorizzate per button_img");
define("_MI_CODELINK_BUTTON_IMG_MIMETYPES","Tipi di mime autorizzati per button_img");
//Blocks
define("_MI_CODELINK_BANNER_BLOCK_RECENT","banner recenti");
define("_MI_CODELINK_BANNER_BLOCK_DAY","banner di oggi");
define("_MI_CODELINK_BANNER_BLOCK_RANDOM","banner a caso");
define("_MI_CODELINK_BUTTON_BLOCK_RECENT","button recenti");
define("_MI_CODELINK_BUTTON_BLOCK_DAY","button di oggi");
define("_MI_CODELINK_BUTTON_BLOCK_RANDOM","button a caso");
define("_MI_CODELINK_LINK_BLOCK_RECENT","link recenti");
define("_MI_CODELINK_LINK_BLOCK_DAY","link di oggi");
define("_MI_CODELINK_LINK_BLOCK_RANDOM","link a caso");
// preferenze
define("_MI_CODELINK_BUTTONSIMAGEDIR", "Percorso immagini bottoni");
define("_MI_CODELINK_BUTTONSIMGDIRDSC", "Questo &egrave il percorso dove sono memorizzate le immagini dei bottoni");
define("_MI_CODELINK_BANNERSIMAGEDIR", "Percorso immagini banner");
define("_MI_CODELINK_BANNERSIMGDIRDSC", "Questo &egrave il percorso dove sono memorizzate le immagini dei banner");
define("_MI_CODELINK_ADMINPAGE", "Numero elementi per pagina");
define("_MI_CODELINK_AMDMINPAGEDSC", "Numero di elementi da mostrare nell'area amministrativa");
define("_MI_CODELINK_PERPAGE", "Numero elementi per pagina");
define("_MI_CODELINK_PERPAGEDSC", "Numero di elementi da mostrare in ogni pagina");
define("_MI_CODELINK_DIVIDEBYLINKS", "Ammontare di link parte a parte:");
define("_MI_CODELINK_DIVBYLINKSDSC", "Questo permette di scegliere come i link saranno suddivisi nella pagina");
define("_MI_CODELINK_DIVIDEBYBUTTONS", "Ammontare di bottoni parte a parte:");
define("_MI_CODELINK_DIVBYBUTTONSDSC", "Questo permette di scegliere come i bottoni saranno suddivisi nella pagina");
define("_MI_CODELINK_ELEMVIEW", "Elementi nei blocchi:");
define("_MI_CODELINK_ELEMVIEWDSC", "Numero di elementi da visualizzare nei blocchi");
define("_MI_CODELINK_EDITOR", "Editor");
define("_MI_CODELINK_EDITORDSC", "Set di editor per le modifiche in textarea");
define("_MI_CODELINK_ADVERTISE", "Annunci");
define("_MI_CODELINK_ADVERTISEDSC", "Spazio per il codice degli annunci pubblicitari");
define("_MI_CODELINK_KEYWORDS", "Parole chiavi");
define("_MI_CODELINK_KEYWORDSDSC", "Palore chiavi o keywords per il SEO");
// Seo URL Rewrite
define("_MI_CODELINK_HTACCESS", "Mod-Rewrite SEO con htaccess");
define("_MI_CODELINK_HTACCESS_DESC", "Guarda in /docs per htaccess da aggiungere alla tua XOOPS ROOT PATH");
define("_MI_CODELINK_BASEURL", "Mod-rewrite SEO URL di base");
define("_MI_CODELINK_BASEURL_DESC", "Non cambiare questo a meno che vi hanno alterato htaccess per questo");
define("_MI_CODELINK_ENDOFURL", "Mod-rewrite SEO fine dell&#39;URL");
define("_MI_CODELINK_ENDOFURL_DESC", "Fine dell&#39;URL standard del file HTML con SEO htaccess abilitato");

?>