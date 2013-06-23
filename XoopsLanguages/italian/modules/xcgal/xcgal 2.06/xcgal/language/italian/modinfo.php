<?php
// $Id: modinfo.php,v 1.3 2005/09/22 08:40:51 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
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
//  ------------------------------------------------------------------------ //
//  Italian translation by Daniele Lembo - samik.freesuperhost.com           //
//  ------------------------------------------------------------------------ //

define("_MI_XCGAL_NAME","xcGallery");
define("_MI_XCGAL_ADMENU1","Riepilogo amministratore");
define("_MI_XCGAL_ADMENU2","Categorie");
define("_MI_XCGAL_ADMENU3","Utenti");
define("_MI_XCGAL_ADMENU4","Gruppi");
define("_MI_XCGAL_ADMENU5","Ecard");
define("_MI_XCGAL_ADMENU6","Batch e immagini");

define("_MI_XCGAL_SCROLL","Thumbnail a scorrimento");
define("_MI_XCGAL_CATMENU","Categorie di xcGallery");
define("_MI_XCGAL_STATIC","Thumbnail statiche");
define("_MI_XCGAL_METAALB","Meta Album");

define("_MI_ANONSEE","Abilita gli utenti anonimi a visualizzare le immagini?");
define("_MI_SUBCAT_LEVEL","Visualizzazione lista album: numero di livelli di categorie da visualizzare");
define("_MI_ALB_PER_PAGE","Visualizzazione lista album: numero di album da visualizzare");
define("_MI_ALB_LIST_COLS","Visualizzazione lista album: numero di colonne per la lista degli album");
define("_MI_ALB_THUMB_SIZE","Visualizzazione lista album: dimensione thumbnail in pixel");
define("_MI_MAIN_LAYOUT","Visualizzazione lista album: il contenuto della pagina principale");
define("_MI_THUMBCOLS","Visualizzazione thumbnail: numero di colonne sulla pagina dei thumbnail");
define("_MI_THUMBROWS","Visualizzazione thumbnail: numero di righe sulla pagina dei thumbnail");
define("_MI_MAX_TABS","Visualizzazione thumbnail: numero massimo di tab da visualizzare");
define("_MI_TEXT_THUMBVIEW","Visualizzazione thumbnail: visualizza la descrizione dell'immagine (in aggiunta al titolo) sotto la thumbnail");
define("_MI_COM_COUNT","Visualizzazione thumbnail: visualizza il numero dei commenti sotto la thumbnail");
define("_MI_DEF_SORT","Visualizzazione thumbnail: ordinamento di default per le immagini");
define("_MI_SORT_NA","Nome crescente");
define("_MI_SORT_ND","Nome decrescente");
define("_MI_SORT_DA","Data crescente");
define("_MI_SORT_DD","Data decrescente");
define("_MI_MIN_VOTES","Visualizzazione thumbnail: numero minimo di voti perch&eacute; un'immagine appaia tra i pi&uacute; votati");
define("_MI_DIS_PICINFO","Visualizzazione immagine: informazioni visibili per default");
define("_MI_JPG_QUAL","Impostazioni immagini e thumbnail: qualit&aacute; per i file JPEG");
define("_MI_THUMB_WIDTH","Impostazioni immagini e thumbnail: altezza o larghezza massime di una thumbnail *");
define("_MI_MAKE_INTERM","Impostazioni immagini e thumbnail: crea immagini intermedie");
define("_MI_PICTURE_WIDTH","Impostazioni immagini e thumbnail: altezza o larghezza massime di un'immagine intermedia *");
define("_MI_MAX_UPL_SIZE","Impostazioni immagini e thumbnail: dimensione massima per le immagini (KB)");
define("_MI_MAX_UPL_WIDTH","Impostazioni immagini e thumbnail: altezza o larghezza massime per le immagini (pixels)");
define("_MI_ALLOW_PRIVATE","Impostazioni utente: gli utenti possono avere album privati");
define("_MI_UF_NAME1","Campo personalizzato 1 per la descrizione dell'immagine (lascia in bianco se non utilizzato)");
define("_MI_UF_NAME2","Campo personalizzato 2 per la descrizione dell'immagine (lascia in bianco se non utilizzato)");
define("_MI_UF_NAME3","Campo personalizzato 3 per la descrizione dell'immagine (lascia in bianco se non utilizzato)");
define("_MI_UF_NAME4","Campo personalizzato 4 per la descrizione dell'immagine (lascia in bianco se non utilizzato)");
define("_MI_FORB_FNAME","Caratteri non permessi per il nome del file");
define("_MI_FILE_EXT","Estensioni accettate per i file immagine");
define("_MI_THUMB_METHOD","Metodo di ridimensionamento delle immagini");
define("_MI_IMPATH","Path di ImageMagick/Netpbm (esempio /usr/bin/X11/)");
define("_MI_ALLOW_IMG_TYPES","Tipi di immagini consentiti (validi solo per ImageMagick)");
define("_MI_IM_OPTIONS","Opzioni della riga di comando di ImageMagick");
define("_MI_READ_EXIF","Leggi i dati EXIF nei file JPEG (necessita php exif extension");
define("_MI_FULLPATH","Directory dell'album *");
define("_MI_USERPICS","Directory per le immagini dell'utente *");
define("_MI_NORMAL_PFX","Prefisso per le immagini intermedie *");
define("_MI_THUMB_PFX","Prefisso per le thumbnail *");
define("_MI_DIR_MODE","Modalit&aacute; di default per le directory");
define("_MI_PIC_MODE","Modalit&aacute; di default per le immagini");
define("_MI_COOKIE_NAME","Nome del cookie usato dallo script");
define("_MI_COOKIE_PATH","Path del cookie used dallo script");
define("_MI_DEBUG_MODE","Abilita modalit&aacute; debug per la galleria");
define("_MI_ECRAD_SEE_MORE","Indirizzo per il link 'Visualizza pi&uacute; immagini' delle e-card");
define("_MI_ECRAD_TYPE","Seleziona il tipo di ecard");
define("_MI_TEXT_CARD","Testo");
define("_MI_HTML_CARD","Html");
define("_MI_ECRAD_PER_HOUR","Ecards abilitate, che un utente pu&oacute; inviare");
define("_MI_ECRAD_SAVE","Quanto tempo devono essere salvate nel database le ecard (days)");
define("_MI_ECRAD_TEXT","Testo delle ecard");
define("_MI_ECRAD_TEXTDESC","(testo delle ecards e testo alternativo per le ecard html)<br /><b>Tag utili</b><br />{X_SITEURL} visualizzer&aacute; ".XOOPS_URL."<br />{X_SITENAME} visualizzer&aacute; il nome del sito<br />{R_NAME} visualizzer&aacute; il nome del ricevente<br />{R_MAIL} visualizzer&aacute; la mail del ricevente<br />{S_NAME} visualizzer&aacute; il nome del mittente<br />{S_MAIL} visualizzer&aacute; la mail del mittente<br />{SAVE_DAYS} visualizzer&aacute; il numero di giorni in cui l'ecard rimarr&aacute; salvata nel db<br />{CARD_LINK} visualizzer&aacute; il link alla ecard");
define("_MI_ECRAD_TEXT_VALUE","Caro {R_NAME},\n\n{S_NAME}({S_MAIL}) ha inviato una ecard per te.\nCortesemente, vieni a vederla cliccando su {CARD_LINK}).\nLa tua ecard rimarr&aacute; salvata per {SAVE_DAYS} giorni nel nostro database.\n\nSaluti\n{X_SITENAME} team ({X_SITEURL})");
define("_MI_KEEP_VOTES","Per quanto tempo i voti devono essere salvati nel database (days) (0 se non devono essere cancellati");
define("_MI_SEARCH_THUMB","Visualizza thumbnail al posto dell'icona di xcGallery nella ricerca e nella pagina dell'utente");
define("_MI_WATERMARKING","Use watermarking for JPG");
define("_MI_WATERMARK_TEXTDESC","Watermark must be saved at xcgal/images/watermark.png");
define("_MI_BATCHSHOWALL","Batchupload - Show all");
define("_MI_BATCHSHOWALLDESC","All files are shown, also files that are already in an album. For NO only new files are displayed");
?>
