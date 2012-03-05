<?php
// $Id: blocks.php,v 1.1 2007/07/16 09:17:56 kurak_bu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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

define('_MB_EXTGALLERY_PHOTO_NUMBER',"Liczba zdjęć do pokazania");
define('_MB_EXTGALLERY_DIRECTION',"Kierunek wyświetlania zdjęć");
define('_MB_EXTGALLERY_HORIZONTALLY',"Poziomo");
define('_MB_EXTGALLERY_VERTICALLY',"Pionowo");
define('_MB_EXTGALLERY_DISPLAY_TITLE',"Wyświetl tytuł zdjęcia");
define('_MB_EXTGALLERY_ALL_CATEGORIES',"Wszystkie kategorie");
define('_MB_EXTGALLERY_USER_NUMBER',"Numer użytkownika do wyświetlenia");
define('_MB_EXTGALLERY_PANEL_WIDTH',"szerokość panelu");
define('_MB_EXTGALLERY_PANEL_HEIGHT',"wysokość panelu");
define('_MB_EXTGALLERY_FRAME_WIDTH',"szerokość ramki");
define('_MB_EXTGALLERY_FRAME_HEIGHT',"wysokość ramki");
define('_MB_EXTGALLERY_BACKGROUND',"kolor tła");
define('_MB_EXTGALLERY_MOREINFO',"Więcej");
define('_MB_EXTGALLERY_TRANSITION_SPEED',"prędkość przewijania slajdów");
define('_MB_EXTGALLERY_TRANSITION_INTERVAL',"czas pokazywania slajdów");
define('_MB_EXTGALLERY_OVERLAY_HEIGHT',"overlay height");
define('_MB_EXTGALLERY_OVERLAY_COLOR',"overlay color");
define('_MB_EXTGALLERY_OVERLAY_TEXT_COLOR',"overlay text color");
define('_MB_EXTGALLERY_CAPTION_TEXT_COLOR',"caption text color");
define('_MB_EXTGALLERY_BORDER',"border");
define('_MB_EXTGALLERY_OVERLAY_OPACITY',"overlay opacity");
define('_MB_EXTGALLERY_OVERLAY_FONT_SIZE',"overlay font size");
define('_MB_EXTGALLERY_SELECT_THEME',"Select theme");
define('_MB_EXTGALLERY_LIGHT',"light");
define('_MB_EXTGALLERY_DARK',"dark");
define('_MB_EXTGALLERY_CUSTOM',"custom");
define('_MB_EXTGALLERY_POSITION',"Position");
define('_MB_EXTGALLERY_BOTTOM',"Bottom");
define('_MB_EXTGALLERY_TOP',"Top");
define('_MB_EXTGALLERY_EASING',"Easing");
define('_MB_EXTGALLERY_EASING_OP1',"swing");
define('_MB_EXTGALLERY_EASING_OP2',"linear");
define('_MB_EXTGALLERY_EASING_OP3',"easeInOutBack");
define('_MB_EXTGALLERY_EASING_OP4',"easeInOutQuad");
define('_MB_EXTGALLERY_EASING_OP5',"easeOutBounce");
define('_MB_EXTGALLERY_SHOW_TYPE',"Set order");
define('_MB_EXTGALLERY_TYPE_OP1',"Random Photo");
define('_MB_EXTGALLERY_TYPE_OP2',"Last Photo");
define('_MB_EXTGALLERY_TYPE_OP3',"Top View Photo");
define('_MB_EXTGALLERY_TYPE_OP4',"Top Rated Photo");
define('_MB_EXTGALLERY_TYPE_OP5',"Top Ecard Photo");
define('_MB_EXTGALLERY_USE_AJAX_EFFECTS',"Ajax effects ");
define('_MB_EXTGALLERY_AJAX_NONE',"Normal");
define('_MB_EXTGALLERY_AJAX_LIGHTBOX',"Lightbox");
define('_MB_EXTGALLERY_AJAX_OVERLAY',"Overlay");
define('_MB_EXTGALLERY_AJAX_TOOLTIP',"Tooltip");
define('_MB_EXTGALLERY_AJAX_FANCYBOX',"Fancybox");
define('_MB_EXTGALLERY_FANCYBOX_BGCOLOR',"Background color");
define('_MB_EXTGALLERY_FANCYBOX_OPACITY',"Opacity");
define('_MB_EXTGALLERY_FANCYBOX_TIN',"Transition in");
define('_MB_EXTGALLERY_FANCYBOX_TOUT',"Transition out");
define('_MB_EXTGALLERY_FANCYBOX_NONE',"None");
define('_MB_EXTGALLERY_FANCYBOX_ELASTIC',"Elastic");
define('_MB_EXTGALLERY_FANCYBOX_TITLEPOSITION',"Title position");
define('_MB_EXTGALLERY_FANCYBOX_OVER',"Over");
define('_MB_EXTGALLERY_FANCYBOX_INSIDE',"Inside");
define('_MB_EXTGALLERY_FANCYBOX_OUTSIDE',"Outside");
define('_MB_EXTGALLERY_FANCYBOX_SHOWTYPE',"Show type");
define('_MB_EXTGALLERY_FANCYBOX_SINGLE',"Single");
define('_MB_EXTGALLERY_FANCYBOX_GROUP',"Group");
define('_MB_EXTGALLERY_OVERLAY_BG',"Overlay background");
define('_MB_EXTGALLERY_OVERLAY_WIDHT',"Overlay widht");
define('_MB_EXTGALLERY_OVERLAY_HEIGHT',"Overlay height");
define('_MB_EXTGALLERY_TOOLTIP_WIDHT',"Tooltip Widht");
define('_MB_EXTGALLERY_TOOLTIP_BORDER_WIDHT',"Tooltip border Widht");
define('_MB_EXTGALLERY_TOOLTIP_BORDERCOLOR',"Tooltip border color");
define('_MB_EXTGALLERY_ALBUM_CONF',"Album configuration");
define('_MB_EXTGALLERY_ALBUM_NOT_ENABLE',"Album not enabled");
define('_MB_EXTGALLERY_AJAX_PRETTPHOTO',"PrettPhoto");
define('_MB_EXTGALLERY_PRETTPHOTO_SPEED',"Animation Speed");
define('_MB_EXTGALLERY_PRETTPHOTO_FAST',"Fast");
define('_MB_EXTGALLERY_PRETTPHOTO_SLOW',"Slow");
define('_MB_EXTGALLERY_PRETTPHOTO_THEME',"Theme");
define('_MB_EXTGALLERY_PRETTPHOTO_THEME1',"dark_rounded");
define('_MB_EXTGALLERY_PRETTPHOTO_THEME2',"dark_square");
define('_MB_EXTGALLERY_PRETTPHOTO_THEME3',"facebook");
define('_MB_EXTGALLERY_PRETTPHOTO_THEME4',"light_rounded");
define('_MB_EXTGALLERY_PRETTPHOTO_THEME5',"light_square");
define('_MB_EXTGALLERY_PRETTPHOTO_AUTOPLAY',"Slideshow autoplay");
define('_MB_EXTGALLERY_PRETTPHOTO_SLIDESPEED',"Slideshow speed");
define('_MB_EXTGALLERY_GVIEW',"Galleryview");
define('_MB_EXTGALLERY_GRIA',"Galleria");
define('_MB_EXTGALLERY_GRIA_WIDTH',"Panel width");
define('_MB_EXTGALLERY_GRIA_HEIGHT',"Height");
define('_MB_EXTGALLERY_GRIA_BGCOLOR',"Background color");
define('_MB_EXTGALLERY_GRIA_BCOLOR',"Border color");
define('_MB_EXTGALLERY_GRIA_BGIMG',"Background image");
define('_MB_EXTGALLERY_GRIA_BGIMG_OP1',"white");
define('_MB_EXTGALLERY_GRIA_BGIMG_OP2',"block");
define('_MB_EXTGALLERY_GRIA_AUTOPLAY',"Activate Autoplay");
define('_MB_EXTGALLERY_GRIA_TRANS',"Transition type");
define('_MB_EXTGALLERY_GRIA_TRANS_TYP1',"fade");
define('_MB_EXTGALLERY_GRIA_TRANS_TYP2',"flash");
define('_MB_EXTGALLERY_GRIA_TRANS_TYP3',"pulse");
define('_MB_EXTGALLERY_GRIA_TRANS_TYP4',"slide");
define('_MB_EXTGALLERY_GRIA_TRANS_TYP5',"fadeslide");
define('_MB_EXTGALLERY_GRIA_TSPEED',"Transition speed");
define('_MB_EXTGALLERY_AJAX_JCAROUSEL',"jCarousel");
define('_MB_EXTGALLERY_JCAROUSEL_HWIDTH',"jCarousel horizontal width");
define('_MB_EXTGALLERY_JCAROUSEL_VWIDTH',"jCarousel vertical width");
define('_MB_EXTGALLERY_JCAROUSEL_VHIGHT',"jCarousel vertical height");
define('_MB_EXTGALLERY_JQUERY',"Use jquery");
define('_MB_EXTGALLERY_MICRO',"microgallery");
define('_MB_EXTGALLERY_MICRO_SIZE',"Microgallery size");
define('_MB_EXTGALLERY_MICRO_SIZE_OP1',"small");
define('_MB_EXTGALLERY_MICRO_SIZE_OP2',"medium");
define('_MB_EXTGALLERY_MICRO_SIZE_OP3',"large");
define('_MB_EXTGALLERY_TRUE',"true");
define('_MB_EXTGALLERY_FALSE',"false");
define('_MB_EXTGALLERY_PHOTO_NUMBER_TABLE',"Nubmer of columns in table show");
define('_MB_EXTGALLERY_TABLE',"Table");

?>