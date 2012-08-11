<?php
// $Id: main.php,v 1.1 2008/05/11 10:21:45 kurak_bu Exp $
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
define("_MD_YOGURT_DELETE","Usuñ");
define("_MD_YOGURT_EDITDESC","Zmieñ opis");
define("_MD_YOGURT_TOKENEXPIRED","Twoj token jest niepoprawny<br />Spróbuj jeszcze raz");
define("_MD_YOGURT_DESC_EDITED","Opis zosta³ zmieniony");
define("_MD_YOGURT_CAPTION","Opis");
define("_MD_YOGURT_YOUCANUPLOAD","Mo¿esz wys³aæ Fotografie w formacie jpg's o razmiarze do %s KB");
define("_MD_YOGURT_UPLOADPICTURE","Wy¶lij zdiêcie");
define("_MD_YOGURT_NOCACHACA","Niestety ten modu³ wykona³ nieoczekiwan± operacjê!<br />
Spróbuj wkrótce. ");//
define("_MD_YOGURT_PAGETITLE","%s - %s's Globalni");
define("_MD_YOGURT_SUBMIT","Publikuj");
define("_MD_YOGURT_VIDEOS","Video");
define("_MD_YOGURT_SCRAPBOOK","Notatki");
define("_MD_YOGURT_PHOTOS","Fotki");
define("_MD_YOGURT_FRIENDS","Znajomi");
define("_MD_YOGURT_TRIBES","Grupy");
define("_MD_YOGURT_NOTRIBESYET","Nie nale¿ysz do zadnych Klanów");
define("_MD_YOGURT_MYTRIBES","Moje Grupy");
define("_MD_YOGURT_ALLTRIBES","Wszystkie Grupy");
define("_MD_YOGURT_PROFILE","Profil");
define("_MD_YOGURT_HOME","Home");
define("_MD_YOGURT_CONFIGSTITLE","Ustawienia");

##################################################### PICTURES #######################################################
//submit.php (for pictures submission
define("_MD_YOGURT_UPLOADED","Wys³ono z powodzeniem");

//delpicture.php
define("_MD_YOGURT_ASKCONFIRMDELETION","Czy usun±æ zdiêcie?");
define("_MD_YOGURT_CONFIRMDELETION","Tak!");

//album.php
define("_MD_YOGURT_YOUHAVE"," Masz %s zdiêæ w twoim albumie.");
define("_MD_YOGURT_YOUCANHAVE","Mo¿esz wys³aæ %s Fotek.");
define("_MD_YOGURT_DELETED","Usuniêto z powodzeniem");
define("_MD_YOGURT_SUBMIT_PIC_TITLE","Wy¶lij zdiêcie");
define("_MD_YOGURT_SELECT_PHOTO","Wybierz Fotkê");
define("_MD_YOGURT_NOTHINGYET","Jeszcze nie ma zdiêc w tym albumie");
define("_MD_YOGURT_AVATARCHANGE","To ziêcie ma byæ moim AVATAREM");
define("_MD_YOGURT_PRIVATIZE","Tylko ty mo¿esz ogladaæ zdiêcia w twoim albumie");
define("_MD_YOGURT_UNPRIVATIZE","Wszyscy bêd± mogli ogl±daæ zdiêcie w twoim albumie");
define("_MD_YOGURT_MYPHOTOS","Moje Fotki");

//avatar.php
define("_MD_YOGURT_AVATAR_EDITED","Zmieniono zdiêcie g³ówne Twojego profilu!");

//private.php
define("_MD_YOGURT_PRIVATIZED","Od teraz tylko ty mo¿esz ogladaæ to zdiêcie(a)");
define("_MD_YOGURT_UNPRIVATIZED","Od tej chwili wszyscy widz± twoje zdiêcia");

########################################################## FRIENDS ###################################################
//friends.php
define("_MD_YOGURT_FRIENDSTITLE","%s Znajomi");
define("_MD_YOGURT_NOFRIENDSYET","Nie masz jeszcze przyjacó³");//also present in index.php
define("_MD_YOGURT_MYFRIENDS","Moi Przyjaciele");
define("_MD_YOGURT_FRIENDSHIPCONFIGS","Zmieñ ustawienia. Oceñ przyjació³.");

//class/yogurtfriendship.php
define("_MD_YOGURT_EDITFRIENDSHIP","Twoje relacje z u¿ytkownikiem:");
define("_MD_YOGURT_FRIENDNAME","Imiê");
define("_MD_YOGURT_LEVEL","Stopieñ przyja¼ni:");
define("_MD_YOGURT_UNKNOWNACCEPTED","Zaakceptowa³em zaproszenie");
define("_MD_YOGURT_AQUAITANCE","Znajomo¶æ");//also present in index.php
define("_MD_YOGURT_FRIEND","Kolega");//also present in index.php
define("_MD_YOGURT_BESTFRIEND","Najlepszy przyjaciel");//also present in index.php
define("_MD_YOGURT_FAN","Fan");//also present in index.php
define("_MD_YOGURT_SEXY","Sexy");//also present in index.php
define("_MD_YOGURT_SEXYNO","Nope");
define("_MD_YOGURT_SEXYYES","Yes");
define("_MD_YOGURT_SEXYALOT","Very much!");
define("_MD_YOGURT_TRUSTY","Trusty");
define("_MD_YOGURT_TRUSTYNO","Nope");
define("_MD_YOGURT_TRUSTYYES","Yes");
define("_MD_YOGURT_TRUSTYALOT","Very much");
define("_MD_YOGURT_COOL","Cool");
define("_MD_YOGURT_COOLNO","Nope");
define("_MD_YOGURT_COOLYES","Yes");
define("_MD_YOGURT_COOLALOT","Very much");
define("_MD_YOGURT_PHOTO","Zdiêcie u¿ytkownika");
define("_MD_YOGURT_UPDATEFRIEND","Zmieñ");

//editfriendship.php
define("_MD_YOGURT_FRIENDSHIPUPDATED","Zmiany uzytkownika wprowadzono pomy¶lnie");

//submitfriendpetition.php
define("_MD_YOGURT_PETITIONED","Zaproszenie do grona przyjació³ zosta³o wys³ane, Czekaj na akceptacjê Twojego zaproszenia:)");
define("_MD_YOGURT_ALREADY_PETITIONED","Ju¿ pos³a³e¶ zaproszenie  do tego u¿ytkownika albo odwrotnie <br />, Czekaj zanim on przyjmie albo odrzuci twoje zaproszenie albo sprawd¼ kontrolnie otrzymane zaproszenia .");

//makefriends.php
define("_MD_YOGURT_FRIENDMADE","Dodano do grona przyjació³");

//delfriendship.php
define("_MD_YOGURT_FRIENDSHIPTERMINATED","Zerwali¶cie relacje z tym u¿ytkownikiem!");

############################################ VIDEOS ############################################################
//mainvideo.php
define("_MD_YOGURT_SETMAINVIDEO","To video zosta³o ustawione jako g³ówne w Twoim profilu");

//seutubo.php
define("_MD_YOGURT_YOUTUBECODE","YouTube KOD: lub Adres URL");
define("_MD_YOGURT_ADDVIDEO","Dodaj video");
define("_MD_YOGURT_ADDFAVORITEVIDEOS","Dodaj do ulubionych filmów");
define("_MD_YOGURT_ADDVIDEOSHELP","Jesli chcesz wys³aæ nam swój film skarzystaj z tego linku
<a href=http://www.youtube.com>YouTube</a> Nastêpnie wklej w swoim profilu ADRES URL do filmu"); //The name of the site will show after this
define("_MD_YOGURT_MYVIDEOS","Moje Video");
define("_MD_YOGURT_MAKEMAIN","Ten Film ma byæ moim g³ównym VIDEO");
define("_MD_YOGURT_NOVIDEOSYET","Nie masz jeszcze filmów Video!");

//delvideo.php
define("_MD_YOGURT_ASKCONFIRMVIDEODELETION","Czy napewno usun±æ ten film ?");
define("_MD_YOGURT_CONFIRMVIDEODELETION","TAK!");
define("_MD_YOGURT_VIDEODELETED","Film zosta³ usuniêty");

//video_submited.php
define("_MD_YOGURT_VIDEOSAVED","Twoje wideo zosta³o zapisane");

############################## TRIBES ########################################################
//class/yogurt_tribes.php
define("_MD_YOGURT_SUBMIT_TRIBE","Stwórz now± grupê urzytkowników");
define("_MD_YOGURT_UPLOADTRIBE","Zapisz GRUPÊ");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_IMAGE","Symbol lub zdiêcie GRUPY");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_TITLE","Tytu³");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_DESC","Opis");//also present in many ther tribes related
define("_MD_YOGURTCREATEYOURTRIBE","Utwórz!");//also present in many ther tribes related

//abandontribe.php
define("_MD_YOGURT_ASKCONFIRMABANDONTRIBE","Czy chcesz opu¶ciæ grupê?");
define("_MD_YOGURT_CONFIRMABANDON","Tak chcê opu¶ciæ t± grupê!");
define("_MD_YOGURT_TRIBEABANDONED","Nie mozesz do³aczyæ do grupy.");

//becomemembertribe.php
define("_MD_YOGURT_YOUAREMEMBERNOW","Jestes teraz cz³onkiem grupy");
define("_MD_YOGURT_YOUAREMEMBERALREADY","Jeste¶ cz³onkiem tej Grupy ");

//delete_tribe.php
define("_MD_YOGURT_ASKCONFIRMTRIBEDELETION","Czy jeste¶ pewien ¿e chcesz usun±æ t± Grupê?");
define("_MD_YOGURT_CONFIRMTRIBEDELETION","Tak usuñ GRUPÊ!");
define("_MD_YOGURT_TRIBEDELETED","Grupa Usuniêta!");

//edit_tribe.php
define("_MD_YOGURT_MAINTAINOLDIMAGE","Przypisz to zdiêcie");//also present in other tribes related
define("_MD_YOGURT_TRIBEEDITED","Grupa zmieniona");
define("_MD_YOGURT_EDIT_TRIBE","Edycja Grupy");//also present in other tribes related
define("_MD_YOGURT_TRIBEOWNER","Jeste¶ za³o¿ycielem tej grupy!");//also present in other tribes related
define("_MD_YOGURT_MEMBERSDOFTRIBE","Cz³onkowie Grupy");//also present in other tribes related

//submit_tribe.php
define("_MD_YOGURT_TRIBE_CREATED","Grupa zosta³a stworzona");

//kickfromtribe.php
define("_MD_YOGURT_CONFIRMKICK","Wyrzuæ go z grupy!");
define("_MD_YOGURT_ASKCONFIRMKICKFROMTRIBE","Jeste¶ pewien(na) ¿e chcesz usun±æ t± osobê z grupy ?");
define("_MD_YOGURT_TRIBEKICKED","Dosta³es bana, kto wie spróbuj siê przy³±czyæ w przysz³o¶ci!");

//Tribes.php
define("_MD_YOGURT_TRIBE_ABANDON","Opu¶c grupê");
define("_MD_YOGURT_TRIBE_JOIN","Do³acz do grupy i powiedz wszystkim KIM JESTE¶!");
define("_MD_YOGURT_TRIBE_SEARCH","Szukaj grupy");
define("_MD_YOGURT_TRIBE_SEARCHKEYWORD","S³owa kluczowe");

######################################### SCRAPS #####################################################
//scrapbook.php
define('_MD_YOGURT_ENTERTEXTSCRAP',"Wpisz tekst lub KOD Xoops");
define("_MD_YOGURT_SENDSCRAP","Nowa");
define("_MD_YOGURT_ANSWERSCRAP","Odpowied¼");//also present in configs.php
define("_MD_YOGURT_MYSCRAPBOOK","Moja ksia¿ka");
define("_MD_YOGURT_CANCEL","Odrzuæ");//also present in configs.php
define("_MD_YOGURT_SCRAPTIPS","Notatki");
define("_MD_YOGURT_BOLD","bold");
define("_MD_YOGURT_ITALIC","italic");
define("_MD_YOGURT_UNDERLINE","podkre¶lenie");
define("_MD_YOGURT_NOSCRAPSYET","Nie masz ¿adnych notatek");

//submit_scrap.php
define("_MD_YOGURT_SCRAP_SENT","Dziêkujemy, Notatka wys³ana");

//delete_scrap.php
define("_MD_YOGURT_ASKCONFIRMSCRAPDELETION","Usun±æ tê notatkê?");
define("_MD_YOGURT_CONFIRMSCRAPDELETION","TAK, usuñ j±.");
define("_MD_YOGURT_SCRAPDELETED","Notatka usuniêta!");

############################ CONFIGS ##############################################
//configs.php
define("_MD_YOGURT_CONFIGSEVERYONE","Wszyscy");
define("_MD_YOGURT_CONFIGSONLYEUSERS","Zarejestrowani");
define("_MD_YOGURT_CONFIGSONLYEFRIENDS","Znajomi.");
define("_MD_YOGURT_CONFIGSONLYME","Tylko JA");
define("_MD_YOGURT_CONFIGSPICTURES","Zdiêcia");
define("_MD_YOGURT_CONFIGSVIDEOS","Filmy");
define("_MD_YOGURT_CONFIGSTRIBES","Grupy");
define("_MD_YOGURT_CONFIGSSCRAPS","Notatki");
define("_MD_YOGURT_CONFIGSSCRAPSSEND","Dopisywanie Notatki");
define("_MD_YOGURT_CONFIGSFRIENDS","Znajomi");
define("_MD_YOGURT_CONFIGSPROFILECONTACT","Dane Kontaktowe");
define("_MD_YOGURT_CONFIGSPROFILEGENERAL","Info");
define("_MD_YOGURT_CONFIGSPROFILESTATS","Statystyki");
define("_MD_YOGURT_WHOCAN","Komu zezwalasz na przegl±danie:");

//submit_configs.php
define("_MD_YOGURT_CONFIGSSAVE","Kanfiguracja zapisana!");

//class/yogurt_controler.php
define("_MD_YOGURT_NOPRIVILEGE","W³a¶ciciel tego profilu zezwoli³ na , <br />wiêcej ni¿ wy macie teraz. <br />Wy¶li pro¶bê o zmianê uprawnieñ <br />Je¿eli nie logowa³ siê nie móg³ odpowiedzieæ na twoje zaproszenie");

###################################### OTHERS ##############################

//index.php
define("_MD_YOGURT_VISITORS","Odwiedzali twój profil (najczê¶ciej)");
define("_MD_YOGURT_USERDETAILS","Szczegó³y uzytkownika");
define("_MD_YOGURT_USERCONTRIBUTIONS","Wk³ad u¿ytkownika");
define("_MD_YOGURT_FANS","Fani");
define("_MD_YOGURT_UNKNOWNREJECTING","Nie znam tej osoby, nie dodawajjej do grona znajomych.");
define("_MD_YOGURT_UNKNOWNACCEPTING","Jeszcze nie znam tej osoby, ale dodajê j± do znajomych.");
define("_MD_YOGURT_ASKINGFRIEND","Czy %s jest twoim znajomym?");
define("_MD_YOGURT_ASKBEFRIEND","Wys³aæ zaproszenie?");
define("_MD_YOGURT_EDITPROFILE","Edytuj profil");
define("_MD_YOGURT_SELECTAVATAR","Wy¶lij zdiêcia do swojego albumu i wybierz jedno jako swój AVATAR.");
define("_MD_YOGURT_SELECTMAINVIDEO","Dodaj Filmy i wybierz jeden jako g³ówny w twoim profilu");
define("_MD_YOGURT_NOAVATARYET","Nie wybrano AVATARA");
define("_MD_YOGURT_NOMAINVIDEOYET","Nie wybrano g³ównego Video");
define("_MD_YOGURT_MYPROFILE","Mój profil");
define("_MD_YOGURT_YOUHAVEXPETITIONS","Masz %u odpowiedzi od znajomych.");
define("_MD_YOGURT_CONTACTINFO","Kantakt Info");
define("_MD_YOGURT_SUSPENDUSER","U¿ytkownicy w zawieszeniu");
define("_MD_YOGURT_SUSPENDTIME","Czas wstrzymania(w sek)");
define("_MD_YOGURT_UNSUSPEND","Przywróceni");
define("_MD_YOGURT_SUSPENSIONADMIN","Administracja ZAWIESZEÑ");

//suspend.php
define("_MD_YOGURT_SUSPENDED","Zawieszony od %s");
define("_MD_YOGURT_USERSUSPENDED","Zawieszony!");//als0 present in index.php

//unsuspend.php
define("_MD_YOGURT_USERUNSUSPENDED","Przywrócony");

//searchmembers.php
define("_MD_YOGURT_SEARCH","Szukaj Cz³onków");
define("_MD_YOGURT_AVATAR","Avatar");
define("_MD_YOGURT_REALNAME","Prawdziwe imiê");
define("_MD_YOGURT_REGDATE","Data wst±pienia");
define("_MD_YOGURT_EMAIL","Email");
define("_MD_YOGURT_PM","PM");
define("_MD_YOGURT_URL","URL");
define("_MD_YOGURT_ADMIN","ADMIN");
define("_MD_YOGURT_PREVIOUS","Wstecz");
define("_MD_YOGURT_NEXT","Dalej");
define("_MD_YOGURT_USERSFOUND","%s znaleziono u¿ytkowników ");
define("_MD_YOGURT_TOTALUSERS","Ogó³em: %s u¿ytkowników");
define("_MD_YOGURT_NOFOUND","Nie znaleziono uzytkownika");
define("_MD_YOGURT_UNAME","Nazwa u¿ytkownika");
define("_MD_YOGURT_ICQ","ICQ Numer");
define("_MD_YOGURT_AIM","AIM Handle");
define("_MD_YOGURT_YIM","YIM Handle");
define("_MD_YOGURT_MSNM","MSNM Handle");
define("_MD_YOGURT_LOCATION","Lokalizacja");
define("_MD_YOGURT_OCCUPATION","Zawód");
define("_MD_YOGURT_INTEREST","Zainteresowania");
define("_MD_YOGURT_URLC","URL ");
define("_MD_YOGURT_LASTLOGMORE","Ostatnio zalogowany pu¼niej ni¿<span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_LASTLOGLESS","Ostatnio zalogowany wcze¶niej ni¿ <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_REGMORE","Do³±czy³ najpu¼niej <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_REGLESS","Do³±czy³ wcze¶niej ni¿ <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_POSTSMORE","Napisa³ wiêcej postów ni¿ <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_POSTSLESS","Napisa³ mniej postów ni¿<span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_SORT","Sortuj ");
define("_MD_YOGURT_ORDER","Order");
define("_MD_YOGURT_LASTLOGIN","ostatnie logowanie");
define("_MD_YOGURT_POSTS","Posty");
define("_MD_YOGURT_ASC","Rosn±co");
define("_MD_YOGURT_DESC","Malej±co");
define("_MD_YOGURT_LIMIT","Ilo¶æ rekordów na stronie");
define("_MD_YOGURT_RESULTS","Wynik wyszukiwania");

//26/10/2007
define("_MD_YOGURT_VIDEOSNOTENABLED","Administrator wy³±czy³ tê sekcjê");
define("_MD_YOGURT_FRIENDSNOTENABLED","Administrator wy³±czy³ tê sekcjê");
define("_MD_YOGURT_TRIBESNOTENABLED","Administrator wy³±czy³ tê sekcjê");
define("_MD_YOGURT_PICTURESNOTENABLED","Administrator wy³±czy³ tê sekcjê");
define("_MD_YOGURT_SCRAPSNOTENABLED","Administrator wy³±czy³ tê sekcjê");


//26/01/2008
define("_MD_YOG_ALLFRIENDS" , "Poka¿ znajomych");
define("_MD_YOG_ALLTRIBES" , "Poka¿ grupy");

//31/01/2008
define("_MD_YOGURT_FRIENDSHIPNOTACCEPTED" , "Znajomo¶c odrzucona");

//07/04/2008
define("_MD_YOGURT_USERDOESNTEXIST","Ten uzytkownik nie istnieje");
define("_MD_YOGURT_FANSTITLE","%s's Fanów");
define("_MD_YOGURT_NOFANSYET","Nie ma ¿adnych Fanów");





?>