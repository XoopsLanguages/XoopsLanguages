<?php
// $Id: main.php,v 1.45 2008/04/13 13:20:36 marcellobrandao Exp $
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
//Present in many files (videos pictures etc...)
define("_MD_YOGURT_DELETE","Izbri&scaron;i");
define("_MD_YOGURT_EDITDESC","Uredi opis");
define("_MD_YOGURT_TOKENEXPIRED","Tvoj session  je istekao<br />Molimo te probaj pnovo");
define("_MD_YOGURT_DESC_EDITED","Opis je uspje&scaron;no ure&#273;en");
define("_MD_YOGURT_CAPTION","Opis slike");
define("_MD_YOGURT_YOUCANUPLOAD","Mo&#382;e&scaron; samo format jpg slika uploadati do %s KBytes");
define("_MD_YOGURT_UPLOADPICTURE","Uploaduj sliku");
define("_MD_YOGURT_NOCACHACA","Lo&scaron;e, Lo&scaron; Modul...Ako ti treba pomo&#263; pitaj!<br />
Do&scaron;lo je do gre&scaron;ke,probaj ponovo,ukoliko ne ide javi se Webmasteru. ");//Funny general error message
define("_MD_YOGURT_PAGETITLE","%s - %s's Network");
define("_MD_YOGURT_SUBMIT","Po&scaron;alji");
define("_MD_YOGURT_VIDEOS","Video");
define("_MD_YOGURT_SCRAPBOOK","Knjiga");
define("_MD_YOGURT_PHOTOS","Slike");
define("_MD_YOGURT_FRIENDS","Dru&scaron;tvo");
define("_MD_YOGURT_TRIBES","Web Stranice");
define("_MD_YOGURT_NOTRIBESYET","Nema upisanih Web stranica jo&scaron;");
define("_MD_YOGURT_MYTRIBES","Moja web stranica");
define("_MD_YOGURT_ALLTRIBES","Sve Web stranice");
define("_MD_YOGURT_PROFILE","Profil");
define("_MD_YOGURT_HOME","Home");
define("_MD_YOGURT_CONFIGSTITLE","Moja Administracija");

##################################################### PICTURES #######################################################
//submit.php (for pictures submission
define("_MD_YOGURT_UPLOADED","Upload je uspjeo!");

//delpicture.php
define("_MD_YOGURT_ASKCONFIRMDELETION","Jesi li siguran-a da ovu sliku treba izbrisati?");
define("_MD_YOGURT_CONFIRMDELETION","Da izbri&scaron;i je!");

//album.php
define("_MD_YOGURT_YOUHAVE","Ima&scaron; za sada ukupno %s slika u svome Albumu.");
define("_MD_YOGURT_YOUCANHAVE","Tebi je dozvoljeno %s slika u Album uploadati.");
define("_MD_YOGURT_DELETED","Slika je uspje&scaron;no izbrisana");
define("_MD_YOGURT_SUBMIT_PIC_TITLE","Upload Slika");
define("_MD_YOGURT_SELECT_PHOTO","Izaberi sliku");
define("_MD_YOGURT_NOTHINGYET","Nema slikau u svome Albumu jo&scaron;");
define("_MD_YOGURT_AVATARCHANGE","Napravi od ove slike sebi Avatar");
define("_MD_YOGURT_PRIVATIZE","Samo ti mo&#382;e&scaron; vidjeti ovu sliku u tvome Albumu");
define("_MD_YOGURT_UNPRIVATIZE","Svako mo&#382;e gledati ovu sliku u tvome Albumu");
define("_MD_YOGURT_MYPHOTOS","Moje slike");

//avatar.php
define("_MD_YOGURT_AVATAR_EDITED","Promjenuo-la si svoj avatar!");

//private.php
define("_MD_YOGURT_PRIVATIZED","Od sada samo ti mo&#382;e&scaron; vidjeti svoje slike u tvome Albumu");
define("_MD_YOGURT_UNPRIVATIZED","Od sada svi mogu vidjeti tvoje slike u tvome Albumu");

########################################################## FRIENDS ###################################################
//friends.php
define("_MD_YOGURT_FRIENDSTITLE","Od %s Dru&scaron;tvo");
define("_MD_YOGURT_NOFRIENDSYET","Nema svog dru&scaron;tva jo&scaron;");//also present in index.php
define("_MD_YOGURT_MYFRIENDS","Moje dru&scaron;tvo");
define("_MD_YOGURT_FRIENDSHIPCONFIGS","Set the configs of this friendship. Evaluate your friend.");

//class/yogurtfriendship.php
define("_MD_YOGURT_EDITFRIENDSHIP","Ovi &#268;lanovi su tvoje dru&scaron;tvo:");
define("_MD_YOGURT_FRIENDNAME","Nik ime");
define("_MD_YOGURT_LEVEL","Level druga:");
define("_MD_YOGURT_UNKNOWNACCEPTED","Nepoznaje me i odbio-la me za predlog da budemo u istom dru&scaron;tvu");
define("_MD_YOGURT_AQUAITANCE","Poznajemo se");//also present in index.php
define("_MD_YOGURT_FRIEND","Pravi drug");//also present in index.php
define("_MD_YOGURT_BESTFRIEND","Najbolji mi je drug");//also present in index.php
define("_MD_YOGURT_FAN","Moj Fan");//also present in index.php
define("_MD_YOGURT_SEXY","Sexy");//also present in index.php
define("_MD_YOGURT_SEXYNO","Nije sexy");
define("_MD_YOGURT_SEXYYES","Da,jeste");
define("_MD_YOGURT_SEXYALOT","Veoma sexy!");
define("_MD_YOGURT_TRUSTY","Povjerljiv-a");
define("_MD_YOGURT_TRUSTYNO","Nije povjerljiv-a");
define("_MD_YOGURT_TRUSTYYES","Da");
define("_MD_YOGURT_TRUSTYALOT","Veoma povjerljiv-a");
define("_MD_YOGURT_COOL","Cool");
define("_MD_YOGURT_COOLNO","Nije cool");
define("_MD_YOGURT_COOLYES","Da,jeste");
define("_MD_YOGURT_COOLALOT","Voma cool");
define("_MD_YOGURT_PHOTO","Slike moga dru&scaron;tva");
define("_MD_YOGURT_UPDATEFRIEND","Aktuliziraj dru&scaron;tvo");

//editfriendship.php
define("_MD_YOGURT_FRIENDSHIPUPDATED","Dru&scaron;tvo je aktulizirano");

//submitfriendpetition.php
define("_MD_YOGURT_PETITIONED","Pitanje za dru&#382;enje ovom &#268;lanu je poslato ,<br/>do njega-nje je dali &#263;e te prihvatiti u svoje dru&scaron;tvo <br/>i ho&#263;e li te ubaciti u listu svoga dru&scaron;tva.");
define("_MD_YOGURT_ALREADY_PETITIONED","Ti si ve&#263; pitao-la ovog a da se dru&#382;ite ili je on-ona tebe <br />, sa&#269;ekaj da vidi&scaron; ho&#263;e li te ubaciti u listu svoga dru&scaron;tva ili &#263;e te odbiti,<br/>vidi tako&#273;e da on-ona i tebe ne pita dali &#382;eli&scaron; njega-nju da prihvati&scaron; u svoje dru&scaron;tvo.");

//makefriends.php
define("_MD_YOGURT_FRIENDMADE","Dodaj kao prijatelja!");

//delfriendship.php
define("_MD_YOGURT_FRIENDSHIPTERMINATED","Ti si sada prijatelj sa ovim &#268;lanom!");

############################################ VIDEOS ############################################################
//mainvideo.php
define("_MD_YOGURT_SETMAINVIDEO","Ovaj video je sada na stranici tvoga Profila kao tvoj favorit video");

//seutubo.php
define("_MD_YOGURT_YOUTUBECODE","YouTube URL samo je dozvoljen [<a href='http://youtube.com' target='_blank'>?</a>]");
define("_MD_YOGURT_ADDVIDEO","Dodaj video");
define("_MD_YOGURT_ADDFAVORITEVIDEOS","Dodaj svoj favorit video u Profil");
define("_MD_YOGURT_ADDVIDEOSHELP","Idi na youtube, izaberi sebi video, <a href=http://www.youtube.com>YouTube</a> kopiraj link videa<br/>vrati se ovdje, dodaj kopirani link u ozna&#269;eno polje "); //The name of the site will show after this
define("_MD_YOGURT_MYVIDEOS","Moji Video");
define("_MD_YOGURT_MAKEMAIN","Napravi ovaj video kao favorit(glavni)");
define("_MD_YOGURT_NOVIDEOSYET","Nema video klipova jo&scaron;!");

//delvideo.php
define("_MD_YOGURT_ASKCONFIRMVIDEODELETION","Jesi li siguran-a da ovaj video treba izbrisati?");
define("_MD_YOGURT_CONFIRMVIDEODELETION","Da siguran-na sam!");
define("_MD_YOGURT_VIDEODELETED","Tvoj video je izbrisan");

//video_submited.php
define("_MD_YOGURT_VIDEOSAVED","Tvoj video je memorisan");

############################## TRIBES ########################################################
//class/yogurt_tribes.php
define("_MD_YOGURT_SUBMIT_TRIBE","Kreiraj web link");
define("_MD_YOGURT_UPLOADTRIBE","Zapamti link");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_IMAGE","Baner web stranice");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_TITLE","Naziv");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_DESC","Opis");//also present in many ther tribes related
define("_MD_YOGURTCREATEYOURTRIBE","Napravi predstavu svoje web stranice!");//also present in many ther tribes related

//abandontribe.php
define("_MD_YOGURT_ASKCONFIRMABANDONTRIBE","Jesi li siguran-a da ovu web stranicu treba izbrisati?");
define("_MD_YOGURT_CONFIRMABANDON","Da!");
define("_MD_YOGURT_TRIBEABANDONED","Ti nisi u ovoj grupi koja posje&#263;uje ovu web stranicu.");

//becomemembertribe.php
define("_MD_YOGURT_YOUAREMEMBERNOW","Sad si i ti u grupi dru&scaron;tva koji posje&#263;uju ovu web stranicu");
define("_MD_YOGURT_YOUAREMEMBERALREADY","Ti si ve&#263; &#269;lan ovog dru&scaron;tva koji posje&#263;uju ovu web stranicu");

//delete_tribe.php
define("_MD_YOGURT_ASKCONFIRMTRIBEDELETION","Jesi li siguran da ovu web stranicu sa njenim &#269;lanovima treba izbrisati?");
define("_MD_YOGURT_CONFIRMTRIBEDELETION","Da!");
define("_MD_YOGURT_TRIBEDELETED","Web stranica je izbrisana!");

//edit_tribe.php
define("_MD_YOGURT_MAINTAINOLDIMAGE","Sa&#269;uvaj ovu sliku");//also present in other tribes related
define("_MD_YOGURT_TRIBEEDITED","Web stranica je ure&#273;ena");
define("_MD_YOGURT_EDIT_TRIBE","Uredi svoju web stranicu");//also present in other tribes related
define("_MD_YOGURT_TRIBEOWNER","Ti si vlasnik ove grupe u tvojo web stranici!");//also present in other tribes related
define("_MD_YOGURT_MEMBERSDOFTRIBE","&#268;lanovi tvoje web stranice");//also present in other tribes related

//submit_tribe.php
define("_MD_YOGURT_TRIBE_CREATED","Tvoja web stranica je kreirana");

//kickfromtribe.php
define("_MD_YOGURT_CONFIRMKICK","Da izbaci ga- je van!");
define("_MD_YOGURT_ASKCONFIRMKICKFROMTRIBE","Jesi li siguran-a da ovog &#268;lana &#382;eli&scaron; izbaciti ga-je?");
define("_MD_YOGURT_TRIBEKICKED","Banovao-la si ovog &#268;lana iz svoje web stranice, ko zna mo&#382;da opet se sprijateljite uskoro!");

//Tribes.php
define("_MD_YOGURT_TRIBE_ABANDON","Napusti ovu grupu u ovoj web stranici");
define("_MD_YOGURT_TRIBE_JOIN","Pridru&#382;i se ovoj grupi koji su na ovoj web stranici i poka&#382;i im ko si ti!");
define("_MD_YOGURT_TRIBE_SEARCH","Pretra&#382;i grupu");
define("_MD_YOGURT_TRIBE_SEARCHKEYWORD","Keyword");

######################################### SCRAPS #####################################################
//scrapbook.php
define('_MD_YOGURT_ENTERTEXTSCRAP',"Upi&scaron;i tekst ovdje");
define("_MD_YOGURT_SENDSCRAP","Po&scaron;alji upis");
define("_MD_YOGURT_ANSWERSCRAP","Odgovori");//also present in configs.php
define("_MD_YOGURT_MYSCRAPBOOK","Moja knjiga");
define("_MD_YOGURT_CANCEL","Odustani");//also present in configs.php
define("_MD_YOGURT_SCRAPTIPS","BBCode npr. Smajli&#263;i-upustvo");
define("_MD_YOGURT_BOLD","bold");
define("_MD_YOGURT_ITALIC","italic");
define("_MD_YOGURT_UNDERLINE","underline");
define("_MD_YOGURT_NOSCRAPSYET","Nema jo&scaron; upisa u knjizi gostiju");

//submit_scrap.php
define("_MD_YOGURT_SCRAP_SENT","Hvala ti na upisu!");

//delete_scrap.php
define("_MD_YOGURT_ASKCONFIRMSCRAPDELETION","Jesi li siguran-a da ovaj upis treba izbrisati?");
define("_MD_YOGURT_CONFIRMSCRAPDELETION","Da.");
define("_MD_YOGURT_SCRAPDELETED","Upis je izbrisan");

############################ CONFIGS ##############################################
//configs.php
define("_MD_YOGURT_CONFIGSEVERYONE","Svi");
define("_MD_YOGURT_CONFIGSONLYEUSERS","Samo registrovani");
define("_MD_YOGURT_CONFIGSONLYEFRIENDS","Moje dr&scaron;tvo.");
define("_MD_YOGURT_CONFIGSONLYME","Samo ja");
define("_MD_YOGURT_CONFIGSPICTURES","mogu vidjeti moje slike");      
define("_MD_YOGURT_CONFIGSVIDEOS","mogu vidjeti moj video"); 
define("_MD_YOGURT_CONFIGSTRIBES","mogu vidjeti moju grupu u web stranici"); 
define("_MD_YOGURT_CONFIGSSCRAPS","mogu vidjeti moju knjigu gostiju"); 
define("_MD_YOGURT_CONFIGSSCRAPSSEND","poslati ti upis");
define("_MD_YOGURT_CONFIGSFRIENDS","Vidjeti tvoje dru&scaron;tvo");
define("_MD_YOGURT_CONFIGSPROFILECONTACT","Vidjeti tvoj kontakt info"); 
define("_MD_YOGURT_CONFIGSPROFILEGENERAL","Vidjeti tvoj Info"); 
define("_MD_YOGURT_CONFIGSPROFILESTATS","Vidjeti tvoje statistiku");
define("_MD_YOGURT_WHOCAN","Ko mo&#382;e:");

//submit_configs.php
define("_MD_YOGURT_CONFIGSSAVE","Konfiguracija je memorisana!");

//class/yogurt_controler.php
define("_MD_YOGURT_NOPRIVILEGE","Vlasnik ovog Profila je ti dozvolio/la samo toliko da vidi&scaron;,<br />mora&scaron; se ulogovati ili biti u njegovom/njenom dru&scaron;tvu pa<br/> &#263;e&scaron; onda mo&#382;da vidjeti puno vi&scaron;e. <br />Ako se registruje&scaron; mo&#382;da &#263;ete se i dru&#382;iti. <br />Vrijedi se registrovati ili ulogovati.");

###################################### OTHERS ##############################

//index.php
define("_MD_YOGURT_VISITORS","Posjetioci (ko je gledao tvoj Profil)");
define("_MD_YOGURT_USERDETAILS","Detalji &#268;lana");
define("_MD_YOGURT_USERCONTRIBUTIONS","Doprinos &#268;lana");
define("_MD_YOGURT_FANS","Fanovi");
define("_MD_YOGURT_UNKNOWNREJECTING","Ne poznajem ovu osobu i ne &#382;elim ga u svome dru&scaron;tvu");
define("_MD_YOGURT_UNKNOWNACCEPTING","Ne poznajem ovu osobu, ali ga dodajem u listu moga dru&scaron;tva");
define("_MD_YOGURT_ASKINGFRIEND"," %s je tvoj prijatelj?");
define("_MD_YOGURT_ASKBEFRIEND","Pitaj ovog &#268;lana da se dru&#382;ite?");
define("_MD_YOGURT_EDITPROFILE","Uredi svoj Profil");
define("_MD_YOGURT_SELECTAVATAR","Uploaduj sliku u svoj Album i izaberi je kao svoj Avatar.");
define("_MD_YOGURT_SELECTMAINVIDEO","Dodaj video i odredi ga kao svoj glavni video");
define("_MD_YOGURT_NOAVATARYET","Nema Avatar jo&scaron;");
define("_MD_YOGURT_NOMAINVIDEOYET","Nema video jo&scaron;");
define("_MD_YOGURT_MYPROFILE","Moj Profil");
define("_MD_YOGURT_YOUHAVEXPETITIONS","Ima&scaron; od %u pitanje da se dru&#382;ite.");
define("_MD_YOGURT_CONTACTINFO","Kontakt Info");
define("_MD_YOGURT_SUSPENDUSER","Banuj &#268;lana");
define("_MD_YOGURT_SUSPENDTIME","Vrijeme Banovanja u (sekundama)");
define("_MD_YOGURT_UNSUSPEND","Skini Ban &#268;lanu");
define("_MD_YOGURT_SUSPENSIONADMIN","Banovanje Admin Tools");

//suspend.php
define("_MD_YOGURT_SUSPENDED","&#268;lan je Banovan do %s");
define("_MD_YOGURT_USERSUSPENDED","&#268;lan je Banovan!");//als0 present in index.php

//unsuspend.php
define("_MD_YOGURT_USERUNSUSPENDED","&#268;lanu je skinut Ban");

//searchmembers.php
define("_MD_YOGURT_SEARCH","Tra&#382;i &#268;lanove");
define("_MD_YOGURT_AVATAR","Avatar");
define("_MD_YOGURT_REALNAME","Pravo ime");
define("_MD_YOGURT_REGDATE","Datum registracije");
define("_MD_YOGURT_EMAIL","Email");
define("_MD_YOGURT_PM","PM");
define("_MD_YOGURT_URL","URL");
define("_MD_YOGURT_ADMIN","ADMIN");
define("_MD_YOGURT_PREVIOUS","Prethodna");
define("_MD_YOGURT_NEXT","Sljede&#263;a");
define("_MD_YOGURT_USERSFOUND","%s &#268;lanova je prona&#273;eno");
define("_MD_YOGURT_TOTALUSERS","Ukupno: %s &#268;lanova");
define("_MD_YOGURT_NOFOUND","Nijedan &#268;lan nije prona&#273;en");
define("_MD_YOGURT_UNAME","Nik ime");
define("_MD_YOGURT_ICQ","ICQ Broj");
define("_MD_YOGURT_AIM","AIM ");
define("_MD_YOGURT_YIM","YIM ");
define("_MD_YOGURT_MSNM","MSNM ");
define("_MD_YOGURT_LOCATION","Mjesto boravka");
define("_MD_YOGURT_OCCUPATION","Hobi");
define("_MD_YOGURT_INTEREST","Interesi");
define("_MD_YOGURT_URLC","URL ");
define("_MD_YOGURT_LASTLOGMORE","Zadnja posjeta koja je bila vi&scaron;e od <span style='color:#ff0000;'>X</span> dana");
define("_MD_YOGURT_LASTLOGLESS","Last login is less than <span style='color:#ff0000;'>X</span> dana");
define("_MD_YOGURT_REGMORE","Zadnja posjeta koja je bila manje od <span style='color:#ff0000;'>X</span> days ago");
define("_MD_YOGURT_REGLESS","Datum registracije koji je bilo vi&scaron;e od <span style='color:#ff0000;'>X</span> dana");
define("_MD_YOGURT_POSTSMORE","Broj postova koji je vi&scaron;e od <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_POSTSLESS","Broj postova koji je manji od <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_SORT","Sortiraj po");
define("_MD_YOGURT_ORDER","Redoslijed");
define("_MD_YOGURT_LASTLOGIN","Last login");
define("_MD_YOGURT_POSTS","Broj postova");
define("_MD_YOGURT_ASC","Noviji prvo");
define("_MD_YOGURT_DESC","Stariji prvo");
define("_MD_YOGURT_LIMIT","Broj &#268;lanova po stranici");
define("_MD_YOGURT_RESULTS","Rezultat pretrage");

//26/10/2007
define("_MD_YOGURT_VIDEOSNOTENABLED","Administrator je ovu funkciju isklju&#269;io");
define("_MD_YOGURT_FRIENDSNOTENABLED","Administrator je ovu funkciju isklju&#269;io");
define("_MD_YOGURT_TRIBESNOTENABLED","Administrator je ovu funkciju isklju&#269;io");
define("_MD_YOGURT_PICTURESNOTENABLED","Administrator je ovu funkciju isklju&#269;io");
define("_MD_YOGURT_SCRAPSNOTENABLED","Administrator je ovu funkciju isklju&#269;io");


//26/01/2008
define("_MD_YOG_ALLFRIENDS" , "Vidi svo dru&#382;tvo");
define("_MD_YOG_ALLTRIBES" , "Vidi sve web stranice");

//31/01/2008
define("_MD_YOGURT_FRIENDSHIPNOTACCEPTED" , "Dru&#382;enje je odbijeno");

//07/04/2008
define("_MD_YOGURT_USERDOESNTEXIST","Ovaj &#268;lan ne postoji, nijeaktiviran ili je izbrisan");
define("_MD_YOGURT_FANSTITLE","Od %s  Fanovi");
define("_MD_YOGURT_NOFANSYET","Nema Fanova jo&scaron;");

//17/04/2008
define("_MD_YOGURT_AUDIONOTENABLED","Administrator je ovu funkciju isklju&#269;io");
define("_MD_YOGURT_NOAUDIOYET","Nema jo&scaron; audio podataka.");
define("_MD_YOGURT_AUDIOS","Moj MP3 Player");
define("_MD_YOGURT_CONFIGSAUDIOS","Vidi svoje MP3");
define("_MD_YOGURT_UPLOADEDAUDIO","Audio fajl je uploadan");

define("_MD_YOGURT_SELECTAUDIO","Tra&#382;i svoj mp3 ");
define("_MD_YOGURT_AUTHORAUDIO","Autor/Izvo&#273;a&#269;");
define("_MD_YOGURT_TITLEAUDIO","Naziv mp3 ili pjesme");
define("_MD_YOGURT_ADDAUDIO","Dodaj mp3 ");
define("_MD_YOGURT_SUBMITAUDIO","Uploaduj");
define("_MD_YOGURT_ADDAUDIOHELP","Izaberi  mp3  sa svoga PC, max.veli&#269;ine %s ,<br /> Ostavi prazan naslov i od autora polje,onda se automatski informacije naziva podatka preuzimaju iz mp3");

//19/04/2008
define("_MD_YOGURT_PLAYER","Moj Player!");
define("_MD_YOGURT_AUDIODELETED","Tvoj mp3 je izbrisan!");
define("_MD_YOGURT_ASKCONFIRMAUDIODELETION","Jesi li siguran-a da ovaj mp3 treba izbrisati?");
define("_MD_YOGURT_CONFIRMAUDIODELETION","Da!");

define("_MD_YOGURT_META","MP3 Info");
define("_MD_YOGURT_META_TITLE","Naslov");
define("_MD_YOGURT_META_ALBUM","Album");
define("_MD_YOGURT_META_ARTIST","Izvo&#273;a&#269;");
define("_MD_YOGURT_META_YEAR","Godina");


?>