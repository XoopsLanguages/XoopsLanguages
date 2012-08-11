<?php
// $Id: modinfo.php,v 1.27 2007/10/26 22:43:41 marcellobrandao Exp $
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
//  Preveo na Bosanski Saba, moj email info@g-orahovica.com(www.g-orahovica.com)//
//  ------------------------------------------------------------------------ //
define("_MI_YOG_NUMBPICT_TITLE","Broj slika");
define("_MI_YOG_NUMBPICT_DESC" ,"Odredi koliko &#269;lan mo&#382;e slika u svoj Album uploadati");
define("_MI_YOG_ADMENU1","Po&#269;etna");
define("_MI_YOG_ADMENU2" ,"O Modulu");
define("_MI_YOG_SMNAME1" ,"Po&scaron;alji");
define("_MI_YOG_THUMW_TITLE" , "Thumb &scaron;irina");
define("_MI_YOG_THUMBW_DESC" , "Thumbnails &scaron;irina u pixelima<br />Ovde se odre&#273;uje veli&#269;ina prikazivanja Thumbnailsa<br />odredi &scaron;irinu za prikazivanje u indexu <br />Orginalna veli&#269;ina slike se ne remeti");
define("_MI_YOG_THUMBH_TITLE" , "Thumb visina");
define("_MI_YOG_THUMBH_DESC" , "Thumbnails visina u pixelima<br />Ovde se odre&#273;uje veli&#269;ina prikazivanja Thumbnailsa<br />odredi visinu za prikazivanje u indexu <br />Orginalna veli&#269;ina slike se ne remeti");
define("_MI_YOG_RESIZEDW_TITLE" , "Promjeni &scaron;irinu slike");
define("_MI_YOG_RESIZEDW_DESC" , "Promjeni &scaron;irinu slike u pixelima <br />Ovde se odre&#273;uje veli&#269;ina prikazivanja slike <br />odredi &scaron;irinu za prikazivanje <br />Orginalna veli&#269;ina slike se ne remeti<br /> Samo ako je originalna slika ve&#263;a od odre&#273;ene &scaron;irine <br />onda se ona se umanjuje da nebi remetila izgled stranice");
define("_MI_YOG_RESIZEDH_TITLE" , "Promjeni visinu slike");
define("_MI_YOG_RESIZEDH_DESC" , "Promjeni visinu slike u pixelima <br />Ovde se odre&#273;uje veli&#269;ina prikazivanja slike <br />odredi visinu za prikazivanje <br />Orginalna veli&#269;ina slike se ne remeti<br /> Samo ako je originalna slika ve&#263;a od odre&#273;ene visine <br />onda se ona se umanjuje da nebi remetila izgled stranice");
define("_MI_YOG_ORIGINALW_TITLE" , "Max.&scaron;irina originalne slike");
define("_MI_YOG_ORIGINALW_DESC" , "Max.&scaron;irina originalne slike u pixelima <br />Ovu &scaron;irinu nemogu &#269;lanovi prilikom uploada prelaziti <br />ova veli&#269;ina je najve&#263;a<br /> ili ako se prelazi veli&#269;ina nema uploada");
define("_MI_YOG_ORIGINALH_TITLE" , "Max.visina originalne slike");
define("_MI_YOG_ORIGINALH_DESC" , "Max.visina originalne slike u pixelima <br />Ovu visinu nemogu &#269;lanovi prilikom uploada prelaziti <br />ova veli&#269;ina je najve&#263;a <br />ili ako se prelazi veli&#269;ina nema uploada");
define("_MI_YOG_PATHUPLOAD_TITLE" , "Veza za Upload ");
define("_MI_YOG_PATHUPLOAD_DESC" , "Veza za upload direktorij<br />u linux-u ide ovako /var/www/uploads<br />u windows serverima ide ovako C:/Program Files/www");
define("_MI_YOG_LINKPATHUPLOAD_TITLE","Link za upload direktorij");
define("_MI_YOG_LINKPATHUPLOAD_DESC","Adresa root servera za direktorij upload-a <br />like http://www.yoursite.com/uploads");
define("_MI_YOG_MAXFILEBYTES_TITLE","Max.veli&#269;ina u bytima");
define("_MI_YOG_MAXFILEBYTES_DESC","Ovo je najve&#263;a veli&#269;ina slike u bytima<br />  512000 byta ima u 500 KB<br /> Max. je odre&#273;en u php.ini fajlu. Tvoj server je pode&scaron;en na ".ini_get('post_max_size'));

define("_MI_YOG_PICTURE_NOTIFYTIT","Album");
define("_MI_YOG_PICTURE_NOTIFYDSC","Obavje&scaron;tenja koja se odnose na Albume &#269;lanova");
define("_MI_YOG_PICTURE_NEWPIC_NOTIFY","Nova slika");
define("_MI_YOG_PICTURE_NEWPIC_NOTIFYCAP","Obavjesti me ako ovaj &#269;lan uploaduje novu sliku");
define("_MI_YOG_PICTURE_NEWPOST_NOTIFYDSC","Nova slika -opis obavijesti");
define("_MI_YOG_PICTURE_NEWPIC_NOTIFYSBJ","{X_OWNER_NAME} je uploadovao(la) novu sliku u svoj Album");
//define("_MI_YOGURT_HOTTEST","Najgledaniji Albumi");
//define("_MI_YOGURT_HOTTEST_DESC","Ovaj blok prikazuje najgledanije Albume");
//define("_MI_YOGURT_HOTFRIENDS","Najgledaniji drugari");
//define("_MI_YOGURT_HOTFRIENDS_DESC","Ovaj blok prikazuje &#269;lanove koji su ovog &#269;lana dodali u listu svojih drugara");
define("_MI_YOG_PICTURE_TEMPLATEINDEXDESC","Ovaj template prikazuje slike od ovog &#269;lana");
define("_MI_YOG_PICTURE_TEMPLATEFRIENDSDESC","Ovaj template prikazuje drugare od ovog &#269;lana");
//define("_MI_YOG_PICTURE_TEMPLATENOTIFICATIONS","Ovaj template prikazuje obavijest za ovog &#269;lana");
define("_MI_YOGURT_MYFRIENDS","Drugari");
define("_MI_YOG_FRIENDSPERPAGE_TITLE" , "Drugara po stranici");
define("_MI_YOG_FRIENDSPERPAGE_DESC" , "Odredi broj koliko drugara po stranici<br /> u indexu treba prikazati");
define("_MI_YOG_PICTURESPERPAGE_TITLE","Slika po stranici prije djeljenja stranice");

define("_MI_YOGURT_LAST","Zadnje slike-Blok");
define("_MI_YOGURT_LAST_DESC","Zadnje poslate slike,bez obzira kojem Albumu pripadaju");
define("_MI_YOG_DELETEPHYSICAL_TITLE","Izbri&scaron;i slike iz upload direktorija");
define("_MI_YOG_DELETEPHYSICAL_DESC","Ako si Da zabrao onda se bri&scaron;u podaci iz upload direktorija kao i iz baze podataka<br /> Budi oprezan sa brisanjem,jer mo&#382;e&scaron; i nepo&#382;eljno od drugih &#269;lanova im izbrisati slike ili podatke iz baze podataka<br /> a tako&#273;e mo&#382;e&scaron; naravno HD od servera brisanjem pove&#263;ati<br />Konfiguri&scaron;i ovaj dio po potrebi.");

define("_MI_YOGURT_MYVIDEOS","Video klipovi");
define("_MI_YOG_PICTURE_TEMPLATEALBUMDESC","Template za galeriju slika");
define("_MI_YOGURT_MYPICTURES","Slike");
define("_MI_YOGURT_MODULEDESC","Ovaj modul je sli&#269;an kao na My Space ili Orcut.");
define("_MI_YOG_TUBEW_TITLE","&Scaron;irina od you tube videa");
define("_MI_YOG_TUBEW_DESC","Postavi &scaron;irinu u pixelima za youtube video player");
define("_MI_YOG_TUBEH_TITLE","Visina od you tube videa");
define("_MI_YOG_TUBEH_DESC","Postavi visinu u pixelima za youtube video player");
define("_MI_YOG_PICTURE_TEMPLATESCRAPBOOKDESC","Template za knjigu gostiju");
define("_MI_YOG_PICTURE_TEMPLATESEUTUBODESC","Template za video sekcije");
define("_MI_YOG_PICTURE_TEMPLATETRIBESDESC","Template za web stranice");
define("_MI_YOGURT_MYSCRAPS","Knjiga gostiju");
define("_MI_YOGURT_MYTRIBES","Web stranice");
define("_MI_YOG_TEMPLATENAVBARDESC","Template za gornju navigaciju na svim stranicama");

define("_MI_YOG_VIDEOSPERPAGE_TITLE","Videa po stranici");
define("_MI_YOG_VIDEO_NOTIFYTIT","Video klipovi");
define("_MI_YOG_VIDEO_NOTIFYDSC","Video obavje&scaron;tenja");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFY","Novi video");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFYCAP","Obavjesti me ako ovaj &#269;lan uploaduje novi video");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFYDSC","Novi video -opis obavijesti");
define("_MI_YOG_VIDEO_NEWVIDEO_NOTIFYSBJ","{X_OWNER_NAME} je uploadao novi video u svoj Profil");

define("_MI_YOG_SCRAP_NOTIFYTIT","Knjiga gostiju");
define("_MI_YOG_SCRAP_NOTIFYDSC","Knjiga gostiju-obavijesti");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFY","Novi upis");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFYCAP","Obavjesti me ako ima novi upis u ovoj knjizi gostiju");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFYDSC","Novi upis -opis obavijesti");
define("_MI_YOG_SCRAP_NEWSCRAP_NOTIFYSBJ","{X_OWNER_NAME} ima novi upis u knjizi gostiju");

define("_MI_YOG_MAINTUBEW_TITLE","Glavnog videa &scaron;irina");
define("_MI_YOG_MAINTUBEW_DESC","&Scaron;irina video playera na prvoj stranici Modula");
define("_MI_YOG_MAINTUBEH_TITLE","Glavnog videa visina");
define("_MI_YOG_MAINTUBEH_DESC","Visina video playera na prvoj stranici Modula");

//24/09/2007
define("_MI_YOGURT_MYCONFIGS","Pode&scaron;avanje");
define("_MI_YOG_PICTURE_TEMPLATECONFIGSDESC","Template za pode&scaron;avanje &#269;lanova");
define("_MI_YOG_PICTURE_TEMPLATEFOOTERDESC","Template za pode&scaron;avanje dna stranice Modula");
define("_MI_YOG_PICTURE_TEMPLATEEDITTRIBE","Template za pode&scaron;avanje pripadnika web stranica");
define("_MI_YOGURT_LICENSE",'Creative Commons Atribuição - Sendo Vedada a Criação de Obras Derivadas 2.5 Brasil License');

//19/10/2007
define("_MI_YOG_TRIBESPERPAGE_TITLE","Web stranica po stranici");
define("_MI_YOG_TRIBESPERPAGE_DESC","Web stranica po stranici prije djeljenja stranice");
define("_MI_YOG_PICTURE_TEMPLATESEARCHRESULTDESC","This template shows the results of a search for comunities");
define("_MI_YOG_PICTURE_TEMPLATETRIBEDESC","Ovaj template prikazuje webstranice i njene &#269;lanove");

//22/10/2007
define("_MI_YOGURT_MYPROFILE","Profil");
define("_MI_YOGURT_SEARCH","Tra&#382;i &#269;lana");
define("_MI_YOG_PICTURE_TEMPLATESEARCHRESULTSDESC","Template za rezultate pretrage");
define("_MI_YOG_PICTURE_TEMPLATESEARCHFORMDESC","Template za formu pretrage");

//26/10/2007
define("_MI_YOG_ENABLEPICT_TITLE","Aktiviraj slika sekcije");
define("_MI_YOG_ENABLEPICT_DESC","Aktiviraj slika sekcije gdje &#269;lanovi mogu svoje galerije kreirati");
define("_MI_YOG_ENABLEFRIENDS_TITLE","Aktiviraj drugara sekcije");
define("_MI_YOG_ENABLEFRIENDS_DESC","Aktiviraj drugara sekcije gdje &#269;lanovi mogu svojim drugarima svakodnevno u listi upravljati");
define("_MI_YOG_ENABLEVIDEOS_TITLE","Aktiviraj video sekcije");
define("_MI_YOG_ENABLEVIDEOS_DESC","Aktiviraj video sekcije gdje &#269;lanovi mogu svoje video galerije kreirati");
define("_MI_YOG_ENABLESCRAPS_TITLE","Aktiviraj knjiga gostiju sekcije");
define("_MI_YOG_ENABLESCRAPS_DESC","Aktiviraj knjiga gostiju sekcije gdje mogu &#269;lanovi javno komunicirati upisivanjem u knjige gostiju jedni drugima");
define("_MI_YOG_ENABLETRIBES_TITLE","Aktiviraj web stranica sekcije");
define("_MI_YOG_ENABLETRIBES_DESC","Aktiviraj web stranica sekcije gdje mogu &#269;lanovi upisivati web stranice na netu koje posje&#263;uju i ujedno svoje dru&scaron;tvo u&#269;lanjivati na te web stranice");
define("_MI_YOG_SCRAPSPERPAGE_TITLE","Broj web stranica po stranici");
define("_MI_YOG_SCRAPSPERPAGE_DESC","Broj web stranica po stranici prije djeljenja stranice ");

//25/11/2007
define("_MI_YOGURT_FRIENDS_DESC","Drugari");
define("_MI_YOGURT_FRIENDS","Drugari");

//26/01/2008
define("_MI_YOG_IMGORDER_TITLE","Redoslijed slika");
define("_MI_YOG_IMGORDER_DESC","Trebali prikazati prvo najnovije slike?");

//08/04/2008
define("_MI_YOG_PICTURE_TEMPLATENOTIFICATIONS","Template za obavijesti");

//11/04/2008
define("_MI_YOG_FRIENDSHIP_NOTIFYTIT","Moje dru&scaron;tvo");
define("_MI_YOG_FRIENDSHIP_NOTIFYDSC","Ponuda prijateljstva");
define("_MI_YOG_FRIEND_NEWPETITION_NOTIFY","Ponude za  dru&#382;enje");
define("_MI_YOG_FRIEND_NEWPETITION_NOTIFYCAP","Obavjesti me ako mi je neko ponudio dru&#382;enje");
define("_MI_YOG_FRIEND_NEWPETITION_NOTIFYDSC","Obavjesti me ako mi je neko ponudio dru&#382;enje");
define("_MI_YOG_FRIEND_NEWPETITION_NOTIFYSBJ","Neko ti je ponudio dru&#382;enje");

//13/04/2008
define("_MI_YOG_PICTURE_TEMPLATEFANS","Template za Fan stranicu");

//17/07/2008
define("_MI_YOG_ENABLEAUDIO_TITLE","Aktiviraj Audio sekciju");
define("_MI_YOG_ENABLEAUDIO_DESC","Aktiviraj Audio sekciju za korisnike gdje mogu sebi muziku svoju u player listu unositi");
define("_MI_YOG_PICTURE_TEMPLATEAUDIODESC","Template za Audio stranice");
define("_MI_YOG_NUMBAUDIO_TITLE","MaxMax.broj Audio podataka po korisniku");
define("_MI_YOG_AUDIOSPERPAGE_TITLE","Broj mp3 podataka po stranici");

//19/04/2008
define("_MI_YOGURT_MYAUDIOS","Moja Muzika");
?>