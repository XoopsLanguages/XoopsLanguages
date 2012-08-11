<?php
// $Id: modinfo.php,v 1.6 2006/03/28 08:47:35 mcleines Exp $
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

define('_MI_XCGAL_NAME','xcGallery');
define('_MI_XCGAL_ADMENU1','Admin overview');
define('_MI_XCGAL_ADMENU2','Kategorier');
define('_MI_XCGAL_ADMENU3','Brugere');
define('_MI_XCGAL_ADMENU4','Grupper');
define('_MI_XCGAL_ADMENU5','Postkort');
define('_MI_XCGAL_ADMENU6','Batch Tilføj Billeder');

define('_MI_XCGAL_SCROLL','Scrolling Thumbnails');
define('_MI_XCGAL_CATMENU','xcGallery Kategorier');
define('_MI_XCGAL_STATIC','Statiske Thumbnails');
define('_MI_XCGAL_METAALB','Meta Albums');

define('_MI_ANONSEE','Tillad anonyme brugere at se billederne?');
define('_MI_SUBCAT_LEVEL','Album liste visning: Antal af niveauer af katagorier at vise');
define('_MI_ALB_PER_PAGE','Album liste visning: Antal af albums at vise');
define('_MI_ALB_LIST_COLS','Album liste visning:  Antal af kolonner for album listen');
define('_MI_ALB_THUMB_SIZE','Album liste visning: Størrelse på thumbnails i pixels');
define('_MI_MAIN_LAYOUT','Album liste visning:  Indholdet af forsiden');
define('_MI_THUMBCOLS','Thumbnail visning: Antal at kolonner på thumbnail siden');
define('_MI_THUMBROWS','Thumbnail visning: Antal af række på thumbnail siden');
define('_MI_MAX_TABS','Thumbnail visning:  Maksimum antal af tabs at vise');
define('_MI_TEXT_THUMBVIEW','Thumbnail visning:  Vis billede beskrivelser (ud over title) under thumbnailen');
define('_MI_COM_COUNT','Thumbnail visning: Vis antal af kommentare under thumbnailen');
define('_MI_DEF_SORT','Thumbnail visning:  Stadart soterings ordre for billeder');
define('_MI_SORT_NA','Navn stigende');
define('_MI_SORT_ND','Navn faldende');
define('_MI_SORT_DA','Dato stigende');
define('_MI_SORT_DD','Dato faldende');
define('_MI_MIN_VOTES','Thumbnail visning: Minimum antal af stemmer for at et billede dukker op på top bedømte listen');
define('_MI_DIS_PICINFO','Billede visning: Billede informationer er synlige som standard');
define('_MI_JPG_QUAL','Billeder og thumbnails indstillinger: Kvalitet på JPEG filer');
define('_MI_THUMB_WIDTH','Billeder og thumbnails indstillinger: Maks brede og højde på en thumbnail *');
define('_MI_MAKE_INTERM','Billeder og thumbnails indstillinger: Opret intermediate billeder');
define('_MI_PICTURE_WIDTH','Billeder og thumbnails indstillinger:  Maks brede og høje for et intermediate billede *');
define('_MI_MAX_UPL_SIZE','Billeder og thumbnails indstillinger: Maks størrelse for et uploaded billede (KB)');
define('_MI_MAX_UPL_WIDTH','Billeder og thumbnails indstillinger: Maks brede og højde på et uploaded billede (pixels)');
define('_MI_ALLOW_PRIVATE','Bruger indstillinger: Brugere kan have private albums');
define('_MI_UF_NAME1','Brugerdefineret felt 1 navn for billede beskrivelse (lad så blank hvis du ikke skal bruge det)');
define('_MI_UF_NAME2','Brugerdefineret felt 2 navn for billede beskrivelse (lad så blank hvis du ikke skal bruge det)');
define('_MI_UF_NAME3','Brugerdefineret felt 3 navn for billede beskrivelse (lad så blank hvis du ikke skal bruge det)');
define('_MI_UF_NAME4','Brugerdefineret felt 4 navn for billede beskrivelse (lad så blank hvis du ikke skal bruge det)');
define('_MI_FORB_FNAME','Bogstaver der er forbudt i filnavne');
define('_MI_FILE_EXT','Tilladte filtyper for uploadede billeder');
define('_MI_THUMB_METHOD','Metode til at formindske billeder');
define('_MI_IMPATH','Sti til ImageMagick/Netpbm konverterings værktøj (fx /usr/bin/X11/)');
define('_MI_ALLOW_IMG_TYPES','Tilladte billede typer (kun gyldig i ImageMagick)');
define('_MI_IM_OPTIONS','Kommando linje muligheder for ImageMagick');
define('_MI_READ_EXIF','Læs EXIF data i JPEG filer (php exif udvidelse nødvendig)');
define('_MI_FULLPATH','Album mappen *');
define('_MI_USERPICS','Mappen til bruger billede *');
define('_MI_NORMAL_PFX','Prefix for mellemstørrelse billeder *');
define('_MI_THUMB_PFX','The prefix for thumbnails *');
define('_MI_DIR_MODE','Standard indstilling for mapper');
define('_MI_PIC_MODE','Standard indstilling for billeder');
define('_MI_COOKIE_NAME','Navn på cookie brugt af scriptet');
define('_MI_COOKIE_PATH','Sti til cookie brugt af scriptet');
define('_MI_DEBUG_MODE','Slå Galleri fejlretningsindstilling til');
define('_MI_ECRAD_SEE_MORE','Destinations adresse for \'Se flere billeder\' linket i postkort');
define('_MI_ECRAD_TYPE','Vælg en postkort type');
define('_MI_TEXT_CARD','Tekst');
define('_MI_HTML_CARD','Html');
define('_MI_ECRAD_PER_HOUR','Antal tilladte postkort som en bruger kan sende pr time');
define('_MI_ECRAD_SAVE','Hvor lang tid skal postkortene gemmes i databasen (dage)');
define('_MI_ECRAD_TEXT','Postkort tekst');
define('_MI_ECRAD_TEXTDESC','(for tekst postkort og som alternativ tekst for html postkort)<br /><b>Brugbare Tags</b><br />{X_SITEURL} vil skrive ".XOOPS_URL."<br />{X_SITENAME} vil skrive site navnet<br />{R_NAME} vil skrive modtagerens navn<br />{R_MAIL} vil skrive modtagerens email<br />{S_NAME} vil skrive senderens navn<br />{S_MAIL} vil skrive senderens email<br />{SAVE_DAYS} vil skrive antallet af dage postkortet er gemt i db<br />{CARD_LINK} vil skrive postkort opsamlings url\'en');
define('_MI_ECRAD_TEXT_VALUE','Kære {R_NAME},\n\n{S_NAME}({S_MAIL}) har sendt et postkort til dig.\nHent det på {CARD_LINK}.\nDit postkort bliver gemt {SAVE_DAYS} dage i vores database.\n\nMed venlig hilsen\n{X_SITENAME} team ({X_SITEURL})');
define('_MI_KEEP_VOTES','Hvor længe skal stemmer gemmes i databasen (dage) (0 hvis de ikke skal slettes)');
define('_MI_SEARCH_THUMB','Vis thumbnails istedet for xcGallery ikon på søg og brugerinfo sider');
define('_MI_WATERMARKING','Brug vandmærke på JPG');
define('_MI_WATERMARK_TEXTDESC','Vandmærke skal gemmes i xcgal/images/watermark.png');
define('_MI_BATCHSHOWALL','Masseupload - vis alle');
define('_MI_BATCHSHOWALLDESC','Alle filer er vist, også filer der allerede er i et album. Ved Nej vises kun nye filer');
?>