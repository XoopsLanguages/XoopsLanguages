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
define("_MI_SHOUTBOX_NAME","Shoutbox");

// A brief description of this module
define("_MI_SHOUTBOX_DESC","Tillader en shoutbox med tilhørende popop.");

// Menu
define('_MI_SHOUTBOX_MENU_DB','Database');
define('_MI_SHOUTBOX_MENU_FILE','Fil');
define('_MI_SHOUTBOX_MENU_STATUS','Status');

// Names of blocks for this module (Not all module has blocks)
define("_MI_SHOUTBOX_BLOCK","Shoutbox");

// Categories
define("_MI_SHOUTBOX_CAT1","--- Global Settings ---");
define("_MI_SHOUTBOX_PREF_CAT1","Global Settings"); 
define("_MI_SHOUTBOX_CAT2","--- Block Settings ---");
define("_MI_SHOUTBOX_PREF_CAT2","Block Settings");
define("_MI_SHOUTBOX_CAT3","--- PopUp Settings ---");
define("_MI_SHOUTBOX_PREF_CAT3","PopUp Settings"); 
define("_MI_SHOUTBOX_CAT4","--- Text Input Settings ---");
define("_MI_SHOUTBOX_PREF_CAT4","Text Input Settings"); 

// Config language definitions...
define("_MI_SHOUTBOX_TITLE1","Må gæster skrive?"); 
define("_MI_SHOUTBOX_TITLE2","Må gæster vælge navn?");
define("_MI_SHOUTBOX_DESC2","Hvis gæster må skrive må de vælge eget navn?");
define("_MI_SHOUTBOX_TITLE3","Tillad bbcode");
define("_MI_SHOUTBOX_DESC3","Tillad brugere at bruge bbcode? Ex [b], [url =] mv.");
define("_MI_SHOUTBOX_TITLE4","Tidsstempel Format");
define("_MI_SHOUTBOX_DESC4","I hvilken form bør tidspunktet formateres? (<a href = 'http://www.php.net/manual/en/function.date.php' target = '_blank' > Manual </ a >)");
define("_MI_SHOUTBOX_TITLE5","Titel");
define("_MI_SHOUTBOX_DESC5","Største Shouter før trimning finder sted. (0 = ingen afpudsning, være forsigtige !!!)");
define("_MI_SHOUTBOX_TITLE6","Max shouter");
define("_MI_SHOUTBOX_DESC6","Hvor mange shouter skal vises?");
define("_MI_SHOUTBOX_TITLE7","Opbevaring");
define("_MI_SHOUTBOX_DESC7","Definer, hvor de shouter bør opbevares");
define("_MI_SHOUTBOX_OP7_F","File [csv]");
define("_MI_SHOUTBOX_OP7_D","Database [MySQL]");

define("_MI_SHOUTBOX_TITLE11","Vis smiley bar i blok?");
define("_MI_SHOUTBOX_TITLE12","shouter Message Block IFrame bredde");
define("_MI_SHOUTBOX_DESC12","Bredden af det iframe i blokken.");
define("_MI_SHOUTBOX_TITLE13","shouter Message Block IFrame højden");
define("_MI_SHOUTBOX_DESC13","Højden af iframe i blokken.");
define("_MI_SHOUTBOX_TITLE14","shouter Message IFrame grænsen bredde");
define("_MI_SHOUTBOX_TITLE15","popup-vindue Aktiver");
define("_MI_SHOUTBOX_DESC15","Må brugere bruge blok?");
define("_MI_SHOUTBOX_TITLE16","Auto-refresh Valg Display");
define("_MI_SHOUTBOX_DESC16","Auto-refresh option display i blok");
define("_MI_SHOUTBOX_OP16_BA0","Vis ikke auto-refresh option");
define("_MI_SHOUTBOX_OP16_BA1","Vis auto-refresh option");
define("_MI_SHOUTBOX_TITLE17","shouter Message Wordwrap Setting");
define("_MI_SHOUTBOX_DESC17","Denne værdi er der fastsat en grænse for antallet af tegn til at vise per linie i Shoutbox blokere frame. Setting denne værdi til 0 deaktiverer tvunget wordwrapping.");
define("_MI_SHOUTBOX_TITLE18","Avatar Display");
define("_MI_SHOUTBOX_DESC18","Bestemmer, hvis avatarer der vises i Shoutbox blok");
define("_MI_SHOUTBOX_TITLE19","Gæst Avatar");
define("_MI_SHOUTBOX_DESC19","<table> <tr>
                                <td> <img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest1.gif\" width=60> </ td>
                                <td> <img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest2.gif\" width=60> </ td>
<td> <img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest3.gif\" width=60> </ td>
<td> <img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest4.gif\" width=60> </ td>
<td> <img src=\"".XOOPS_URL."/modules/shoutbox/images/guestavatars/guest5.gif\" width=60> </ td>
</ Tr> <tr>
<td> Gæst1 </ td>
                                <td> Gæst2 </ td>
<td> Gæst3 </ td>
<td> Gæst4 </ td>
<td> Gæst5 </ td>
</ Tr> </ table> ");
define("_MI_SHOUTBOX_OP19_GA0","Ingen");
define("_MI_SHOUTBOX_OP19_GA1","Gæst1");
define("_MI_SHOUTBOX_OP19_GA2","Gæst2");
define("_MI_SHOUTBOX_OP19_GA3","Gæst3");
define("_MI_SHOUTBOX_OP19_GA4","Gæst4");
define("_MI_SHOUTBOX_OP19_GA5","Gæst5");

define("_MI_SHOUTBOX_TITLE31","Vis» Hvem er online ' ");
define("_MI_SHOUTBOX_DESC31","Vis i popup Hvem er on-line. Advarsel: Hvem er on-line blok skal være aktiveret!");
define("_MI_SHOUTBOX_TITLE32","Vis smiley bar i POPUP");
define("_MI_SHOUTBOX_TITLE33","Spil lyd på ny besked?");
define("_MI_SHOUTBOX_TITLE34","Må gæster bruge popup?");
define("_MI_SHOUTBOX_DESC34","Hvis popup er aktiveret, kan gæsterne bruge det?");
define("_MI_SHOUTBOX_TITLE35","IRC-a-like");
define("_MI_SHOUTBOX_DESC35","Aktiver IRC-kommandoer. På dette tidspunkt understøttes kun / quit og / Nick.");
define("_MI_SHOUTBOX_TITLE36","Auto-fokus");
define("_MI_SHOUTBOX_DESC36","maskinskrevet fokus popup-vindue, når der kommer en ny besked.");
define("_MI_SHOUTBOX_TITLE37","popup Bredde");
define("_MI_SHOUTBOX_DESC37","Default popup bredde (i pixel)");
define("_MI_SHOUTBOX_TITLE38","PopUp Højde");
define("_MI_SHOUTBOX_DESC38","Default popup højde (i pixel)");
define("_MI_SHOUTBOX_TITLE40","shouter Text Input Type");
define("_MI_SHOUTBOX_DESC40","shouter indtastning af tekst form udvælgelse");
define("_MI_SHOUTBOX_OP40_TL","Single Line Text");
define("_MI_SHOUTBOX_OP40_TA","Multi-line Text Area");
define("_MI_SHOUTBOX_TITLE41","Text Area Rækker");
define("_MI_SHOUTBOX_DESC41","Højde af teksten område i rækker <br /> Gælder kun, når shout Tekst Entry Form Selection = Multi-line Text Area");
define("_MI_SHOUTBOX_TITLE42","Text Area Kolonner");
define("_MI_SHOUTBOX_DESC42","Bredde af teksten område i kolonner <br /> Gælder kun, når shout Tekst Entry Form Selection = Multi-line Text Area");
define("_MI_SHOUTBOX_TITLE43","Text Line Længde");
define("_MI_SHOUTBOX_DESC43","Bredde af enkelt linje tekst indrejse i tegn");
define("_MI_SHOUTBOX_TITLE44","Text Max karakterer");
define("_MI_SHOUTBOX_DESC44","Maksimal længde af indtastning af tekst");
define("_MI_SHOUTBOX_TITLE45","Text Input Største Indberetninger");
define("_MI_SHOUTBOX_DESC45","Aktiverer alarm beskeder når de nærmer sig og opnå maksimal indtastning af tekst grænse");
define("_MI_SHOUTBOX_TITLE46","Captcha Aktiver");
define("_MI_SHOUTBOX_DESC46","Aktiverer captcha bekræftelseskode krav (anti-spam-foranstaltning)");
define("_MI_SHOUTBOX_OP46_A","Disabled - rammer / captcha ikke fundet");
define("_MI_SHOUTBOX_OP46_B","Deaktiver Captcha");
define("_MI_SHOUTBOX_OP46_C","Aktiver Rammestrukturer Captcha");
define("_MI_SHOUTBOX_OP46_D","Aktiver Core Captcha");
define('_MI_SHOUTBOX_EMPTY','');
?>