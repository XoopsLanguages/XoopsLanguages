<?php

// $Id: main.php,v 1.3 2007/08/23 20:07:40 kurak_bu Exp $
//  ------------------------------------------------------------------------ //
//                    xcGallery - XOOPS Gallery Modul                        //
//                    Copyright (c) 2003 Derya Kiran                         //
//                           meeresstille@gmx.de                             //
//         http://www.myxoopsforge.org/modules/xfmod/project/?xcgal          //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10                                   //
//  (http://coppermine.sourceforge.net/)                                     //
//  developed by Grégory DEMAR                                               //
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


define("_MD_EXTGALLERY_CATEGORIESALBUMS","Kategorie / Albumy");
define("_MD_EXTGALLERY_ALBUMS","Albumy");
define("_MD_EXTGALLERY_NBALBUMS","Albumów");
define("_MD_EXTGALLERY_NBPHOTOS","Zdjêæ");
define("_MD_EXTGALLERY_DESC","Opis");
define("_MD_EXTGALLERY_SEND_ECARD","Wy¶lij e-kartkê");
define("_MD_EXTGALLERY_EXTRA_INFO","Dodatkowe informacje");
define("_MD_EXTGALLERY_NOPERM","Nie masz uprawnieñ do wykonywania tej czynno¶ci");
define("_MD_EXTGALLERY_PHOTO_TITLE","Tytu³");
define("_MD_EXTGALLERY_PHOTO_WEIGHT","Waga");

// Album page
define("_MD_EXTGALLERY_HITS","Wy¶wietleñ");
define("_MD_EXTGALLERY_COMMENTS","Komentarzy");

// Photo page
define("_MD_EXTGALLERY_PREVIEW","Wstecz");
define("_MD_EXTGALLERY_NEXT","Dalej");
define("_MD_EXTGALLERY_OF","z");
define("_MD_EXTGALLERY_VOTE_FOR_THIS_PHOTO","G³osuj na to zdjêcie");
define("_MD_EXTGALLERY_PHOTO_INFORMATION","Informacje");
define("_MD_EXTGALLERY_RESOLUTION","Rozdzielczo¶æ");
define("_MD_EXTGALLERY_PIXELS","pixeli");
define("_MD_EXTGALLERY_VIEW","Liczba");
define("_MD_EXTGALLERY_FILE_SIZE","Rozmiar");
define("_MD_EXTGALLERY_ADDED","Dodano");
define("_MD_EXTGALLERY_SCORE","Wynik");
define("_MD_EXTGALLERY_VOTES","g³osów");
define("_MD_EXTGALLERY_DOWNLOAD_ORIG","Pobierz orygina³");
define("_MD_EXTGALLERY_DOWNLOADS","pobrañ");
define("_MD_EXTGALLERY_SENDS","wys³añ");
define("_MD_EXTGALLERY_ALL_PHOTO_BY","wszystkie zdjêcia ");
define("_MD_EXTGALLERY_SUBMITTER","Doda³");

// Send eCard page
define("_MD_EXTGALLERY_TO","Do");
define("_MD_EXTGALLERY_FROM","Od");
define("_MD_EXTGALLERY_FROM_NAME","Nazwa");
define("_MD_EXTGALLERY_FROM_EMAIL","E-mail");
define("_MD_EXTGALLERY_TO_NAME","Nazwa");
define("_MD_EXTGALLERY_TO_EMAIL","E-mail");
define("_MD_EXTGALLERY_GREETINGS","Tre¶æ");
define("_MD_EXTGALLERY_SECURITY","Przepisz kod z obrazka");

// View eCard page and mail
define("_MD_EXTGALLERY_CLICK_FOR_MORE","Kliknij tutaj aby zobaczyæ wiêcej zdjêæ!");
define("_MD_EXTGALLERY_ECARD_TITLE","E-karkta od %s dla Ciebie");

// Public upload page
define("_MD_EXTGALLERY_PUBLIC_UPLOAD","Wy¶lij zdjêcie do galerii");
define("_MD_EXTGALLERY_PHOTO","Zdjêcie");
define('_MD_EXTGALLERY_NOT_AN_ALBUM',"Musisz wybraæ poprawny album");
define('_MD_EXTGALLERY_UPLOAD_ERROR',"B³±d podczas wysy³ania");

// Public modify page
define("_MD_EXTGALLERY_MODIFY_PHOTO","Modifikuj zdjêcie");
define("_MD_EXTGALLERY_CATEGORY","Kategoria");
define("_MD_EXTGALLERY_PHOTO_UPDATED","Zdjêie zmodyfikowane");

// Public rating page
define("_MD_EXTGALLERY_VOTE_THANKS","Dziêkujemy za oddany g³os");
define("_MD_EXTGALLERY_ALREADY_VOTED","Ju¿ g³osowa³e¶ na to zdjêcie");

// Public send eCard page
define("_MD_EXTGALLERY_ECARD_SENT","Wys³ano");
define("_MD_EXTGALLERY_CAPTCHA_ERROR","¬le przepisany kod. Spróbuj ponownie.");

// Public Upload photo page
define("_MD_EXTGALLERY_PHOTO_UPLOADED","Wy³ano pomy¶lnie. Dziêkujemy.");
define("_MD_EXTGALLERY_PHOTO_PENDING","Dziêkujemy za dodanie, Twoje zdjêcie musi byæ zatwierdzone przez admina.");

// Public user's album
define("_MD_EXTGALLERY_USERS_SUB_PHOTO_ALBUM"," - w³asny album");
/*define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");
define("_MD_EXTGALLERY_","");*/

?>