<<<<<<< .mine
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
//  Date:       11/15/2008                                                   //
//  Module:     Shoutbox                                                     //
//  File:       language/english/modinfo.php                                 //
//  Version:    4.03                                                         //
//  ------------------------------------------------------------------------ //
//  File:       language/bosanski/modinfo.php                                //
//  Preveo na Bosanski: Saba* info@g-orahovica.com* http://g-orahovica.com*  //
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

// The name of this module
define("_MI_SHOUTBOX_NAME","LiveChat");

// A brief description of this module
define("_MI_SHOUTBOX_DESC","LiveChat je modul za kontaktiranje korisnika i mo&#382;e se koristiti i u PopUp prozoru.");

// Menu
define('_MI_SHOUTBOX_MENU_DB','Baza podataka');
define('_MI_SHOUTBOX_MENU_FILE','CSV podatak');
define('_MI_SHOUTBOX_MENU_STATUS','Statut');

// Names of blocks for this module (Not all module has blocks)
define("_MI_SHOUTBOX_BLOCK","LiveChat");

// Categories
define("_MI_SHOUTBOX_CAT1","--- Globalno pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT1","Globalno pode&scaron;avanje"); 
define("_MI_SHOUTBOX_CAT2","--- Blok pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT2","Blok pode&scaron;avanje");
define("_MI_SHOUTBOX_CAT3","--- PopUp pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT3","PopUp pode&scaron;avanje"); 
define("_MI_SHOUTBOX_CAT4","--- Text Input pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT4","Text Input pode&scaron;avanje"); 

// Config language definitions...
define("_MI_SHOUTBOX_TITLE1","Smijubli Gosti pisati?"); 
define("_MI_SHOUTBOX_TITLE2","SmijublibGosti izabrati Nik Ime?");
define("_MI_SHOUTBOX_DESC2","Dozvoljava&scaron; li Gostima da mogu izabrati sebi &#382;eljeno Nik Ime?");
define("_MI_SHOUTBOX_TITLE3","Dozvola za bbcode");
define("_MI_SHOUTBOX_DESC3","Dozvoljava&scaron; li bbcode? Npr. [b], [url=], itd..");
define("_MI_SHOUTBOX_TITLE4","Vremenski Format");
define("_MI_SHOUTBOX_DESC4","Ukoliko nisi siguran(a) za vremenski Format mo&#382;e&scaron; prona&#263;i ovdje? (<a href='http://www.php.net/manual/en/function.date.php' target='_blank'>Vremenski Formati</a>)");
define("_MI_SHOUTBOX_TITLE5","Pode&scaron;avanje");
define("_MI_SHOUTBOX_DESC5","Max. broj postova u upotrebi prije brisanja. (0 = bez brisanja!!!)");
define("_MI_SHOUTBOX_TITLE6","Max. poruka");
define("_MI_SHOUTBOX_DESC6","Koliko treba poruka prikazati u LiveChatu?");
define("_MI_SHOUTBOX_TITLE7","Arhiva");
define("_MI_SHOUTBOX_DESC7","Defini&scaron;i gdje &#263;e poruke biti arhivirane");
define("_MI_SHOUTBOX_OP7_F","Podatak [cvs]");
define("_MI_SHOUTBOX_OP7_D","Baza podataka [mysql]");

define("_MI_SHOUTBOX_TITLE11","Treba li smilise prikazati u bloku?"); 
define("_MI_SHOUTBOX_TITLE12","IFrame bloka od poslatih poruka &scaron;irina");
define("_MI_SHOUTBOX_DESC12","&Scaron;irina od iframe u bloku.");
define("_MI_SHOUTBOX_TITLE13","IFrame bloka od poslatih poruka visina");
define("_MI_SHOUTBOX_DESC13","Visina iframe u bloku.");
define("_MI_SHOUTBOX_TITLE14","IFrame bloka od poslatih poruka od okvira &scaron;irina");
define("_MI_SHOUTBOX_TITLE15","PopUp Prozor uklju&#269;i");
define("_MI_SHOUTBOX_DESC15","Mogu li &#269;lanovi koristiti blok?");
define("_MI_SHOUTBOX_TITLE16","Opciju za Auto-Aktulizaciju prika&#382;i");
define("_MI_SHOUTBOX_DESC16","Opciju za Auto-Aktulizaciju prika&#382;i u bloku");
define("_MI_SHOUTBOX_OP16_BA0","Ne prikazu opciju za Auto-Aktulizaciju");
define("_MI_SHOUTBOX_OP16_BA1","Opciju za Auto-Aktulizaciju prika&#382;i");
define("_MI_SHOUTBOX_TITLE17","Pode&scaron;avanje WordWrap poruka u LiveChatu");
define("_MI_SHOUTBOX_DESC17","Ovim se ograni&#269;ava broj slova po jednom redku upisanih u LiveChatu. Ako je 0 izabrana onda se WordWraping ne koristi i isklju&#269;en je.");
define("_MI_SHOUTBOX_TITLE18","Avatar prika&#382;i");
define("_MI_SHOUTBOX_DESC18","Odredi dali treba Avatare prikazivati u upisanim porukama u LiveChatu");

define("_MI_SHOUTBOX_TITLE31","Prika&#382;i 'Ko je online'"); 
define("_MI_SHOUTBOX_DESC31","Prika&#382;i u popup prozoru Ko je online trenutno. Upozorenje: Ko je online blok mora biti aktiviran!"); 
define("_MI_SHOUTBOX_TITLE32","Prika&#382;i smilise u PopUp prozoru"); 
define("_MI_SHOUTBOX_TITLE33","Uklju&#269;i sound obavijest ako neko upi¹e poruku u LiveChat?"); 
define("_MI_SHOUTBOX_TITLE34","Smiju li Gosti koristiti popup prozor?"); 
define("_MI_SHOUTBOX_DESC34","Ako je popup prozor aktiviran, smiju li ga Gosti koristiti?"); 
define("_MI_SHOUTBOX_TITLE35","IRC-komande"); 
define("_MI_SHOUTBOX_DESC35","Uklju&#269;i IRC komande. U ovom trenutku dovoljene su samo ove komande /quit i /nick ."); 
define("_MI_SHOUTBOX_TITLE36","Auto-fokus"); 
define("_MI_SHOUTBOX_DESC36","Automatski treba prozor isko&#269;iti ako neko poruku upi&scaron;e u LiveChat."); 
define("_MI_SHOUTBOX_TITLE37","PopUp &scaron;irina"); 
define("_MI_SHOUTBOX_DESC37","Standardna popup &scaron;irina (u pixelima)"); 
define("_MI_SHOUTBOX_TITLE38","Standardna visina"); 
define("_MI_SHOUTBOX_DESC38","Standardna popup visina (u pixelima)"); 
define("_MI_SHOUTBOX_TITLE40","Tip tekst poruka u LiveChatu"); 
define("_MI_SHOUTBOX_DESC40","Izaberi formu za tekst poruka"); 
define("_MI_SHOUTBOX_OP40_TL","Jedna linija za tekst poruke");
define("_MI_SHOUTBOX_OP40_TA","Multi-linije za tekst poruke");
define("_MI_SHOUTBOX_TITLE41","Redovi za tekst podru&#269;je"); 
define("_MI_SHOUTBOX_DESC41","Visina podru&#269;ja redova za tekst poruke<br />Samo koristiti ovu opciju ako se koristi = Multi-linije za tekst poruke"); 
define("_MI_SHOUTBOX_TITLE42","Kolone za podru&#269;je teksta poruke"); 
define("_MI_SHOUTBOX_DESC42","&Scaron;irina kolone za podru&#269;je teksta poruke<br />Samo koristiti ovu opciju ako se koristi = Multi-linije za tekst poruke"); 
define("_MI_SHOUTBOX_TITLE43","Du&#382;ina linije teksta"); 
define("_MI_SHOUTBOX_DESC43","&Scaron;irina od jedne linije za upisivanje poruke"); 
define("_MI_SHOUTBOX_TITLE44","Max. broj rije&#269;i u poruci"); 
define("_MI_SHOUTBOX_DESC44","Max. du&#382;ina teksta poruke za upis"); 
define("_MI_SHOUTBOX_TITLE45","Max. upis teksta za upozorenje"); 
define("_MI_SHOUTBOX_DESC45","Uklju&#269;i upozorenje kada se dostigne max. upis teksta u poruci"); 
define("_MI_SHOUTBOX_TITLE46","Captcha uklju&#269;"); 
define("_MI_SHOUTBOX_DESC46","Uklju&#269;i captcha potvr&#273;ivanje upisa poruke (anti-spam preventiva)"); 
define("_MI_SHOUTBOX_OP46_A","Isklju&#269;eno - Frameworks/captcha nije prona&#273;en");
define("_MI_SHOUTBOX_OP46_B","Isklju&#269;i Captcha");
define("_MI_SHOUTBOX_OP46_C","Uklju&#269;i Frameworks Captcha");
define("_MI_SHOUTBOX_OP46_D","Uklju&#269;i Core Captcha");
define('_MI_SHOUTBOX_EMPTY','');
?>=======
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
//  Date:       11/01/2008                                                   //
//  Module:     Shoutbox                                                     //
//  File:       language/english/modinfo.php                                 //
//  Version:    4.02                                                         //
//  Preveo na bosanski: Saba                                                 //
//  Website:   http//g-orahovica.com                                         //
//  E-Mail:    info@g-orahovica.com                                          //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 4.01 Initial CVD Release 10/05/2008                              //
//  ***                                                                      //
//  Version 4.02  11/01/2008                                                 //
//  New: Add captcha enable parameter text                                   //
//  New: Improve upon some of the text translations                          //
//  ***                                                                      //

// The name of this module
define("_MI_SHOUTBOX_NAME","Shoutbox");

// A brief description of this module
define("_MI_SHOUTBOX_DESC","Dopusta se chatanje u Bloku i popup prozoru.");

// Menu
define('_MI_SHOUTBOX_MENU_DB','Baza podataka');
define('_MI_SHOUTBOX_MENU_FILE','Podaci');
define('_MI_SHOUTBOX_MENU_STATUS','Statut');

// Names of blocks for this module (Not all module has blocks)
define("_MI_SHOUTBOX_BLOCK","Shoutbox");

// Categories
define("_MI_SHOUTBOX_CAT1","--- Globalno pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT1","******* Globalno pode&scaron;avanje *******");
define("_MI_SHOUTBOX_CAT2","--- Blok pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT2","******* Blok pode&scaron;avanje *******");
define("_MI_SHOUTBOX_CAT3","--- PopUp pode&scaron;avanje ---"); 
define("_MI_SHOUTBOX_PREF_CAT3","******* PopUp pode&scaron;avanje *******"); 
define("_MI_SHOUTBOX_CAT4","--- Text Input pode&scaron;avanje ---");
define("_MI_SHOUTBOX_PREF_CAT4","******* Text Input pode&scaron;avanje *******");

// Config language definitions...
define("_MI_SHOUTBOX_TITLE1","Smijuli Gosti pisati?"); 
define("_MI_SHOUTBOX_TITLE2","Dali Gosti smiju izabrati Nik Ime?");
define("_MI_SHOUTBOX_DESC2","Dozvoljavate li Gostima da mogu izabrati &#382;eljeno Nik Ime?");
define("_MI_SHOUTBOX_TITLE3","Dozvola za bbcode");
define("_MI_SHOUTBOX_DESC3","Dozvoli korisnicima bbcode? Kao [b], [url=], i td..");
define("_MI_SHOUTBOX_TITLE4","Vrijeme Format");
define("_MI_SHOUTBOX_DESC4","Ukoliko niste sigurni za vremenski Format mo&#382;ete prona&#263;i ovdje? (<a href='http://www.php.net/manual/en/function.date.php' target='_blank'>Vremenski Formati</a>)");
define("_MI_SHOUTBOX_TITLE5","Trimming/Postovi");
define("_MI_SHOUTBOX_DESC5","Maksimalno postova prije nego &scaron;to brisanje bude aktivno. (0 = ne brisati, svi postovi)");
define("_MI_SHOUTBOX_TITLE6","Maksimaln broj Postova");
define("_MI_SHOUTBOX_DESC6","Koliko &#263;e biti prikazano Postova u Modulu?");
define("_MI_SHOUTBOX_TITLE7","Arhiva");
define("_MI_SHOUTBOX_DESC7","Defininirajte gdje &#263;e se nalaziti Arhiva Postova");
define("_MI_SHOUTBOX_OP7_F","U tekst podatku [cvs]");
define("_MI_SHOUTBOX_OP7_D","U Bazi podataka [mysql]");

define("_MI_SHOUTBOX_TITLE11","Prika&#382;i smilise u Bloku?"); 
define("_MI_SHOUTBOX_TITLE12","IFrame veli&#269;ina");
define("_MI_SHOUTBOX_DESC12","Ovo &#263;e biti aktivno i u bloku.");
define("_MI_SHOUTBOX_TITLE13","IFrame du&#382;ina");
define("_MI_SHOUTBOX_DESC13","Ova du&#382;ina &#263;e biti aktivna i u Bloku.");
define("_MI_SHOUTBOX_TITLE14","IFrame &scaron;irna(preporuka 0)");
define("_MI_SHOUTBOX_TITLE15","Aktivirati i PopUp Prozor");
define("_MI_SHOUTBOX_DESC15","Dali Korisnici smiju ga koristiti?");
define("_MI_SHOUTBOX_TITLE16","Auto-aktualizacija u Bloku?");
define("_MI_SHOUTBOX_OP16_BA0","Ne prikazuj auto-aktulizacija opciju");
define("_MI_SHOUTBOX_OP16_BA1","Prika&#382;i auto-aktulizacija opciju");

define("_MI_SHOUTBOX_TITLE31","Ko je online'"); 
define("_MI_SHOUTBOX_DESC31","Prikazivuje se Korisnicima u popup Prozoru ko je sve on-line. Pa&#382;nja: Ovo &#263;e biti aktivno samo ak je PoP-UP prozor Aktivan!"); 
define("_MI_SHOUTBOX_TITLE32","Dozvolite smilise u PopUp"); 
define("_MI_SHOUTBOX_TITLE33","Nove poruke sa tonom signalizirati?"); 
define("_MI_SHOUTBOX_TITLE34","Gostima dozvoliti popup?"); 
define("_MI_SHOUTBOX_DESC34","Dali i Gosti smiju Koristiti PopUP Prozor?"); 
define("_MI_SHOUTBOX_TITLE35","IRC-a-Komande"); 
define("_MI_SHOUTBOX_DESC35","Dozvoljavateli IRC Komande. U ovom momentu online /quit i /nick."); 
define("_MI_SHOUTBOX_TITLE36","Auto-Fokus"); 
define("_MI_SHOUTBOX_DESC36","Ova opcija &#263;e prikazati Automatski PopUP kod Novih Poruka(ako je aktivirana opcija)."); 
define("_MI_SHOUTBOX_TITLE37","PopUp du&#382;ina"); 
define("_MI_SHOUTBOX_DESC37","Standardna popup du&#382;ina (u pixelima)"); 
define("_MI_SHOUTBOX_TITLE38","PopUp &scaron;irina"); 
define("_MI_SHOUTBOX_DESC38","Standardna popup &scaron;irina (u pixelima)"); 
define("_MI_SHOUTBOX_TITLE40","Shout Tekst Input Tip"); 
define("_MI_SHOUTBOX_DESC40","Shout tekst upis iz opcije izabrati"); 
define("_MI_SHOUTBOX_OP40_TL","Zasebna linija teksta");
define("_MI_SHOUTBOX_OP40_TA","Multi-liija tekstt Area");
define("_MI_SHOUTBOX_TITLE41","Tekst Area redovi"); 
define("_MI_SHOUTBOX_DESC41","Visina tekst area u redovima"); 
define("_MI_SHOUTBOX_TITLE42","Tekst Area Columns"); 
define("_MI_SHOUTBOX_DESC42","&Scaron;irina tekst area u columns"); 
define("_MI_SHOUTBOX_TITLE43","Tekst linije du&#382;ina"); 
define("_MI_SHOUTBOX_DESC43","&Scaron;irina samo linije teksta upisanih slova"); 
define("_MI_SHOUTBOX_TITLE44","Tekst Max slova"); 
define("_MI_SHOUTBOX_DESC44","Max. du&#382;ina od tekst upisa"); 
define("_MI_SHOUTBOX_TITLE45","Tekst Input Max. obavijesti"); 
define("_MI_SHOUTBOX_DESC45","Omogu&#263;uju se dojava poruke kada se pribli&#382;i postizanje maksimalno ograni&#269;enje unosa teksta");
define("_MI_SHOUTBOX_TITLE46","Captcha uklju&#269;"); 
define("_MI_SHOUTBOX_DESC46","Uklju&#269 captcha sa code obavezom za goste (anti-spam prevencija)");
define('_MI_SHOUTBOX_EMPTY','');
?>>>>>>>> .r2418
