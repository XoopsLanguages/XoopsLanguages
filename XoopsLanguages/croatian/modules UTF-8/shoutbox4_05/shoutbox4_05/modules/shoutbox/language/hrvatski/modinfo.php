<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
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
//  Original Author: Alphalogic <alphafake@hotmail.com>					     //
//  Original Author Website: http://www.alphalogic-network.de		         //
//  ------------------------------------------------------------------------ //
//  XOOPS Version made by: (XOOPS 1.3.x and 2.0.x version)			         //
//  Jan304 <http://www.jan304.org>									         //
//  ------------------------------------------------------------------------ //
//  Author:     tank                                                         //
//  Website:    http://www.customvirtualdesigns.com                          //
//  E-Mail:     tanksplace@comcast.net                                       //
//  Date:       12/15/2008                                                   //
//  Module:     Shoutbox                                                     //
//  File:       language/english/modinfo.php                                 //
//  Version:    4.05                                                         //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 4.01 Initial CVD Release 10/05/2008                              //
//  ***                                                                      //
//  Version 4.02  11/01/2008                                                 //
//  New: Add captcha enable parameter text                                   //
//  New: Improve upon some of the text translations                          //
//  ***                                                                      //
//  Version 4.03  11/15/2008                                                 //
//  New: Eliminate local module copy of the captcha class                    //
//  New: Add preference parameter for setting/enabling wordwrap              //
//  New: Add preference parameter to enable/disable avatar display in block  //
//  New: Add Frameworks captcha support                                      //
//  ***                                                                      //
//  Version 4.04  12/01/2008                                                 //
//  New: Add selectable guest avatars                                        //
//  ***                                                                      //
//  Version 4.05  12/15/2008                                                 //
//  Bug Fix: Clean up a few minor typos                                      //
//  ***                                                                      //

// The name of this module
define("_MI_SHOUTBOX_NAME","Brbljaonica");

// A brief description of this module
define("_MI_SHOUTBOX_DESC","Omogući blok brbljaonica sa dodatnim skočnim prozorom.");

// Menu
define('_MI_SHOUTBOX_MENU_DB','Baza podataka');
define('_MI_SHOUTBOX_MENU_FILE','Datoteka');
define('_MI_SHOUTBOX_MENU_STATUS','Status');

// Names of blocks for this module (Not all module has blocks)
define("_MI_SHOUTBOX_BLOCK","Brbljaonica");

// Categories
define("_MI_SHOUTBOX_CAT1","--- Opće postavke ---");
define("_MI_SHOUTBOX_PREF_CAT1","Opće postavke"); 
define("_MI_SHOUTBOX_CAT2","--- Postavke bloka ---");
define("_MI_SHOUTBOX_PREF_CAT2","Postavke bloka");
define("_MI_SHOUTBOX_CAT3","--- Postavke skočnog prozora ---");
define("_MI_SHOUTBOX_PREF_CAT3","Postavke skočnog prozora"); 
define("_MI_SHOUTBOX_CAT4","--- Postavke unosa teksta ---");
define("_MI_SHOUTBOX_PREF_CAT4","Postavke unosa teksta"); 

// Config language definitions...
define("_MI_SHOUTBOX_TITLE1","Da li se gosti mogu oglašavati?"); 
define("_MI_SHOUTBOX_TITLE2","Da li gosti mogu izabrati ime?");
define("_MI_SHOUTBOX_DESC2","Ako se gosti mogu oglašavati, da li mogu izabrati svoje ime?");
define("_MI_SHOUTBOX_TITLE3","Dozvoli bbcode");
define("_MI_SHOUTBOX_DESC3","Dozvoli korisnicima da koriste bbcode? Npr. [b], [url=], itd..");
define("_MI_SHOUTBOX_TITLE4","Oblik vremenske oznake");
define("_MI_SHOUTBOX_DESC4","U kojem obliku će biti vrijeme objava? (<a href='http://www.php.net/manual/en/function.date.php' target='_blank'>Priručnik</a>)");
define("_MI_SHOUTBOX_TITLE5","Rezanje");
define("_MI_SHOUTBOX_DESC5","Maksimalni broj objava prije nego počne rezanje. (0 = nema rezanja, budite pažljivi)");
define("_MI_SHOUTBOX_TITLE6","Max objava");
define("_MI_SHOUTBOX_DESC6","Koliko objava će biti prikazano?");
define("_MI_SHOUTBOX_TITLE7","Pohrana");
define("_MI_SHOUTBOX_DESC7","Odredi gdje će objave biti pohranjene");
define("_MI_SHOUTBOX_OP7_F","Datoteka [csv]");
define("_MI_SHOUTBOX_OP7_D","Baza podataka [mysql]");

define("_MI_SHOUTBOX_TITLE11","Prikaži traku emotikona u bloku?"); 
define("_MI_SHOUTBOX_TITLE12","IFrame širina bloka poruka");
define("_MI_SHOUTBOX_DESC12","Širina iframe-a u bloku.");
define("_MI_SHOUTBOX_TITLE13","IFrame visina bloka poruka");
define("_MI_SHOUTBOX_DESC13","Visina iframe-a u bloku.");
define("_MI_SHOUTBOX_TITLE14","IFrame širina ruba");
define("_MI_SHOUTBOX_TITLE15","Uključi skočni prozor");
define("_MI_SHOUTBOX_DESC15","Mogu li korisnici koristiti blok?");
define("_MI_SHOUTBOX_TITLE16","Opcije auto-osvježenja u bloku");
define("_MI_SHOUTBOX_DESC16","Opcije auto-osvježenja u bloku");
define("_MI_SHOUTBOX_OP16_BA0","Ne prikazuj opcije auto-osvježenja");
define("_MI_SHOUTBOX_OP16_BA1","Prikaži opcije auto-osvježenja");
define("_MI_SHOUTBOX_TITLE17","Postavke prijeloma riječi");
define("_MI_SHOUTBOX_DESC17","Ova vrijednost određuje koliko će biti prikazano znakova po redu u bloku brbljaonice. Postavite ovu vrijednost na 0 da bi onemogućili prijelom riječi.");
define("_MI_SHOUTBOX_TITLE18","Prikaz avatara");
define("_MI_SHOUTBOX_DESC18","Određuje da li će avatari biti prikazani u bloku brbljaonice");
define("_MI_SHOUTBOX_TITLE19","Avatar gosta");
define("_MI_SHOUTBOX_DESC19","<table><tr>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest1.gif\" width=60></td>
                               <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest2.gif\" width=60></td>
							   <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest3.gif\" width=60></td>
							   <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest4.gif\" width=60></td>
							   <td><img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest5.gif\" width=60></td>
							   </tr><tr>
							   <td>gost1</td>
							   <td>gost2</td>
							   <td>gost3</td>
							   <td>gost4</td>
							   <td>gost5</td>
							   </tr></table>");
define("_MI_SHOUTBOX_OP19_GA0","Ništa");
define("_MI_SHOUTBOX_OP19_GA1","gost1");
define("_MI_SHOUTBOX_OP19_GA2","gost2");
define("_MI_SHOUTBOX_OP19_GA3","gost3");
define("_MI_SHOUTBOX_OP19_GA4","gost4");
define("_MI_SHOUTBOX_OP19_GA5","gost5");

define("_MI_SHOUTBOX_TITLE31","Pokaži 'Tko je online'"); 
define("_MI_SHOUTBOX_DESC31","Prikaži u skočnom prozoru tko je online Upozorenje: Tko je online blok mora biti uključen!"); 
define("_MI_SHOUTBOX_TITLE32","Prikaži emotikone u skočnom prozoru"); 
define("_MI_SHOUTBOX_TITLE33","Odsviraj zvuk kod nove poruke?"); 
define("_MI_SHOUTBOX_TITLE34","Mogu li gosti koristiti skočni prozor?"); 
define("_MI_SHOUTBOX_DESC34","Ako je skočni prozor uključen, mogu li ga gosti korisiti?"); 
define("_MI_SHOUTBOX_TITLE35","IRC-slično"); 
define("_MI_SHOUTBOX_DESC35","Omogući IRC komande. Za sad su podržane samo /quit i /nick."); 
define("_MI_SHOUTBOX_TITLE36","Auto-fokus"); 
define("_MI_SHOUTBOX_DESC36","Automatski fokusira skočni prozor kad dođe nova poruka."); 
define("_MI_SHOUTBOX_TITLE37","Širina skočnog prozora"); 
define("_MI_SHOUTBOX_DESC37","Zadana širina skočnog prozora (u pixelima)"); 
define("_MI_SHOUTBOX_TITLE38","Visina skočnog prozora"); 
define("_MI_SHOUTBOX_DESC38","Zadana visina skočnog prozora (u pixelima)"); 
define("_MI_SHOUTBOX_TITLE40","Vrsta unosa teksta"); 
define("_MI_SHOUTBOX_DESC40","Odabir obrazca unosa teksta"); 
define("_MI_SHOUTBOX_OP40_TL","Tekst u jednom redu");
define("_MI_SHOUTBOX_OP40_TA","Polje teksta u više redova");
define("_MI_SHOUTBOX_TITLE41","Redovi polja teksta"); 
define("_MI_SHOUTBOX_DESC41","Visinia polja teksta u redovima<br />Primjenjivo samo kad je Odabir obrazca unosa teksta = Polje teksta u više redova"); 
define("_MI_SHOUTBOX_TITLE42","Stupci polja teksta"); 
define("_MI_SHOUTBOX_DESC42","Širina polja teksta u stupcima<br />Primjenjivo samo kad je Odabir obrazca unosa teksta = Polje teksta u više redova"); 
define("_MI_SHOUTBOX_TITLE43","Dužina linije teksta"); 
define("_MI_SHOUTBOX_DESC43","Širina jedne linije unosa teksta u znakovima"); 
define("_MI_SHOUTBOX_TITLE44","Maksimalni broj znakova teksta"); 
define("_MI_SHOUTBOX_DESC44","Maksimalna dužina unosa teksta"); 
define("_MI_SHOUTBOX_TITLE45","Upozorenja maksimalnog unosa teksta"); 
define("_MI_SHOUTBOX_DESC45","Omogućava poruku upozorenja kad se približava maksimalnom unosu teksta"); 
define("_MI_SHOUTBOX_TITLE46","Omogući Captcha"); 
define("_MI_SHOUTBOX_DESC46","Omogućava upotrebu captcha potvrdnog koda (mjera anti-spama)"); 
define("_MI_SHOUTBOX_OP46_A","Onemogućeno - Frameworks/captcha nije pronađeno");
define("_MI_SHOUTBOX_OP46_B","Onemogući Captcha");
define("_MI_SHOUTBOX_OP46_C","Omogući Frameworks Captcha");
define("_MI_SHOUTBOX_OP46_D","Omogući Core Captcha");
define('_MI_SHOUTBOX_EMPTY','');
?>