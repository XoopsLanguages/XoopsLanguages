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
define("_MD_YOGURT_DELETE", "Usu�");
define("_MD_YOGURT_EDITDESC", "Zmie� opis");
define("_MD_YOGURT_TOKENEXPIRED", "Twoj token jest niepoprawny<br />Spr�buj jeszcze raz");
define("_MD_YOGURT_DESC_EDITED","Opis zosta� zmieniony");
define("_MD_YOGURT_CAPTION","Opis");
define("_MD_YOGURT_YOUCANUPLOAD","Mo�esz wys�a� Fotografie w formacie jpg's o razmiarze do %s KB");
define("_MD_YOGURT_UPLOADPICTURE","Wy�lij zdi�cie");
define("_MD_YOGURT_NOCACHACA","Niestety ten modu� wykona� nieoczekiwan� operacj�!<br />
Spr�buj wkr�tce. ");//
define("_MD_YOGURT_PAGETITLE","%s - %s's Globalni");
define("_MD_YOGURT_SUBMIT","Publikuj");
define("_MD_YOGURT_VIDEOS","Video");
define("_MD_YOGURT_SCRAPBOOK","Notatki");
define("_MD_YOGURT_PHOTOS","Fotki");
define("_MD_YOGURT_FRIENDS","Znajomi");
define("_MD_YOGURT_TRIBES","Grupy");
define("_MD_YOGURT_NOTRIBESYET","Nie nale�ysz do zadnych Klan�w");
define("_MD_YOGURT_MYTRIBES","Moje Grupy");
define("_MD_YOGURT_ALLTRIBES","Wszystkie Grupy");
define("_MD_YOGURT_PROFILE","Profil");
define("_MD_YOGURT_HOME","Home");
define("_MD_YOGURT_CONFIGSTITLE","Ustawienia");

##################################################### PICTURES #######################################################
//submit.php (for pictures submission
define("_MD_YOGURT_UPLOADED","Wys�ono z powodzeniem");

//delpicture.php
define("_MD_YOGURT_ASKCONFIRMDELETION","Czy usun�� zdi�cie?");
define("_MD_YOGURT_CONFIRMDELETION","Tak!");

//album.php
define("_MD_YOGURT_YOUHAVE", " Masz %s zdi�� w twoim albumie.");
define("_MD_YOGURT_YOUCANHAVE", "Mo�esz wys�a� %s Fotek.");
define("_MD_YOGURT_DELETED","Usuni�to z powodzeniem");
define("_MD_YOGURT_SUBMIT_PIC_TITLE","Wy�lij zdi�cie");
define("_MD_YOGURT_SELECT_PHOTO","Wybierz Fotk�");
define("_MD_YOGURT_NOTHINGYET","Jeszcze nie ma zdi�c w tym albumie");
define("_MD_YOGURT_AVATARCHANGE","To zi�cie ma by� moim AVATAREM");
define("_MD_YOGURT_PRIVATIZE","Tylko ty mo�esz oglada� zdi�cia w twoim albumie");
define("_MD_YOGURT_UNPRIVATIZE","Wszyscy b�d� mogli ogl�da� zdi�cie w twoim albumie");
define("_MD_YOGURT_MYPHOTOS","Moje Fotki");

//avatar.php
define("_MD_YOGURT_AVATAR_EDITED","Zmieniono zdi�cie g��wne Twojego profilu!");

//private.php
define("_MD_YOGURT_PRIVATIZED","Od teraz tylko ty mo�esz oglada� to zdi�cie(a)");
define("_MD_YOGURT_UNPRIVATIZED","Od tej chwili wszyscy widz� twoje zdi�cia");

########################################################## FRIENDS ###################################################
//friends.php
define("_MD_YOGURT_FRIENDSTITLE","%s Znajomi");
define("_MD_YOGURT_NOFRIENDSYET","Nie masz jeszcze przyjac�");//also present in index.php
define("_MD_YOGURT_MYFRIENDS","Moi Przyjaciele");
define("_MD_YOGURT_FRIENDSHIPCONFIGS","Zmie� ustawienia. Oce� przyjaci�.");

//class/yogurtfriendship.php
define("_MD_YOGURT_EDITFRIENDSHIP","Twoje relacje z u�ytkownikiem:");
define("_MD_YOGURT_FRIENDNAME","Imi�");
define("_MD_YOGURT_LEVEL","Stopie� przyja�ni:");
define("_MD_YOGURT_UNKNOWNACCEPTED","Zaakceptowa�em zaproszenie");
define("_MD_YOGURT_AQUAITANCE","Znajomo��");//also present in index.php
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
define("_MD_YOGURT_PHOTO","Zdi�cie u�ytkownika");
define("_MD_YOGURT_UPDATEFRIEND","Zmie�");

//editfriendship.php
define("_MD_YOGURT_FRIENDSHIPUPDATED","Zmiany uzytkownika wprowadzono pomy�lnie");

//submitfriendpetition.php
define("_MD_YOGURT_PETITIONED","Zaproszenie do grona przyjaci� zosta�o wys�ane, Czekaj na akceptacj� Twojego zaproszenia:)");
define("_MD_YOGURT_ALREADY_PETITIONED","Ju� pos�a�e� zaproszenie  do tego u�ytkownika albo odwrotnie <br />, Czekaj zanim on przyjmie albo odrzuci twoje zaproszenie albo sprawd� kontrolnie otrzymane zaproszenia .");

//makefriends.php
define("_MD_YOGURT_FRIENDMADE","Dodano do grona przyjaci�");

//delfriendship.php
define("_MD_YOGURT_FRIENDSHIPTERMINATED","Zerwali�cie relacje z tym u�ytkownikiem!");

############################################ VIDEOS ############################################################
//mainvideo.php
define("_MD_YOGURT_SETMAINVIDEO","To video zosta�o ustawione jako g��wne w Twoim profilu");

//seutubo.php
define("_MD_YOGURT_YOUTUBECODE","YouTube KOD: lub Adres URL");
define("_MD_YOGURT_ADDVIDEO","Dodaj video");
define("_MD_YOGURT_ADDFAVORITEVIDEOS","Dodaj do ulubionych film�w");
define("_MD_YOGURT_ADDVIDEOSHELP","Jesli chcesz wys�a� nam sw�j film skarzystaj z tego linku
<a href=http://www.youtube.com>YouTube</a> Nast�pnie wklej w swoim profilu ADRES URL do filmu"); //The name of the site will show after this
define("_MD_YOGURT_MYVIDEOS","Moje Video");
define("_MD_YOGURT_MAKEMAIN","Ten Film ma by� moim g��wnym VIDEO");
define("_MD_YOGURT_NOVIDEOSYET","Nie masz jeszcze film�w Video!");

//delvideo.php
define("_MD_YOGURT_ASKCONFIRMVIDEODELETION","Czy napewno usun�� ten film ?");
define("_MD_YOGURT_CONFIRMVIDEODELETION","TAK!");
define("_MD_YOGURT_VIDEODELETED","Film zosta� usuni�ty");

//video_submited.php
define("_MD_YOGURT_VIDEOSAVED","Twoje wideo zosta�o zapisane");

############################## TRIBES ########################################################
//class/yogurt_tribes.php
define("_MD_YOGURT_SUBMIT_TRIBE","Stw�rz now� grup� urzytkownik�w");
define("_MD_YOGURT_UPLOADTRIBE","Zapisz GRUP�");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_IMAGE","Symbol lub zdi�cie GRUPY");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_TITLE","Tytu�");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_DESC","Opis");//also present in many ther tribes related
define("_MD_YOGURTCREATEYOURTRIBE","Utw�rz!");//also present in many ther tribes related

//abandontribe.php
define("_MD_YOGURT_ASKCONFIRMABANDONTRIBE","Czy chcesz opu�ci� grup�?");
define("_MD_YOGURT_CONFIRMABANDON","Tak chc� opu�ci� t� grup�!");
define("_MD_YOGURT_TRIBEABANDONED","Nie mozesz do�aczy� do grupy.");

//becomemembertribe.php
define("_MD_YOGURT_YOUAREMEMBERNOW","Jestes teraz cz�onkiem grupy");
define("_MD_YOGURT_YOUAREMEMBERALREADY","Jeste� cz�onkiem tej Grupy ");

//delete_tribe.php
define("_MD_YOGURT_ASKCONFIRMTRIBEDELETION","Czy jeste� pewien �e chcesz usun�� t� Grup�?");
define("_MD_YOGURT_CONFIRMTRIBEDELETION","Tak usu� GRUP�!");
define("_MD_YOGURT_TRIBEDELETED","Grupa Usuni�ta!");

//edit_tribe.php
define("_MD_YOGURT_MAINTAINOLDIMAGE","Przypisz to zdi�cie");//also present in other tribes related
define("_MD_YOGURT_TRIBEEDITED","Grupa zmieniona");
define("_MD_YOGURT_EDIT_TRIBE","Edycja Grupy");//also present in other tribes related
define("_MD_YOGURT_TRIBEOWNER","Jeste� za�o�ycielem tej grupy!");//also present in other tribes related
define("_MD_YOGURT_MEMBERSDOFTRIBE","Cz�onkowie Grupy");//also present in other tribes related

//submit_tribe.php
define("_MD_YOGURT_TRIBE_CREATED","Grupa zosta�a stworzona");

//kickfromtribe.php
define("_MD_YOGURT_CONFIRMKICK","Wyrzu� go z grupy!");
define("_MD_YOGURT_ASKCONFIRMKICKFROMTRIBE","Jeste� pewien(na) �e chcesz usun�� t� osob� z grupy ?");
define("_MD_YOGURT_TRIBEKICKED","Dosta�es bana, kto wie spr�buj si� przy��czy� w przysz�o�ci!");

//Tribes.php
define("_MD_YOGURT_TRIBE_ABANDON","Opu�c grup�");
define("_MD_YOGURT_TRIBE_JOIN","Do�acz do grupy i powiedz wszystkim KIM JESTE�!");
define("_MD_YOGURT_TRIBE_SEARCH","Szukaj grupy");
define("_MD_YOGURT_TRIBE_SEARCHKEYWORD","S�owa kluczowe");

######################################### SCRAPS #####################################################
//scrapbook.php
define('_MD_YOGURT_ENTERTEXTSCRAP',"Wpisz tekst lub KOD Xoops");
define("_MD_YOGURT_SENDSCRAP","Nowa");
define("_MD_YOGURT_ANSWERSCRAP","Odpowied�");//also present in configs.php
define("_MD_YOGURT_MYSCRAPBOOK","Moja ksia�ka");
define("_MD_YOGURT_CANCEL","Odrzu�");//also present in configs.php
define("_MD_YOGURT_SCRAPTIPS","Notatki");
define("_MD_YOGURT_BOLD","bold");
define("_MD_YOGURT_ITALIC","italic");
define("_MD_YOGURT_UNDERLINE","podkre�lenie");
define("_MD_YOGURT_NOSCRAPSYET","Nie masz �adnych notatek");

//submit_scrap.php
define("_MD_YOGURT_SCRAP_SENT","Dzi�kujemy, Notatka wys�ana");

//delete_scrap.php
define("_MD_YOGURT_ASKCONFIRMSCRAPDELETION","Usun�� t� notatk�?");
define("_MD_YOGURT_CONFIRMSCRAPDELETION","TAK, usu� j�.");
define("_MD_YOGURT_SCRAPDELETED","Notatka usuni�ta!");

############################ CONFIGS ##############################################
//configs.php
define("_MD_YOGURT_CONFIGSEVERYONE","Wszyscy");
define("_MD_YOGURT_CONFIGSONLYEUSERS","Zarejestrowani");
define("_MD_YOGURT_CONFIGSONLYEFRIENDS","Znajomi.");
define("_MD_YOGURT_CONFIGSONLYME","Tylko JA");
define("_MD_YOGURT_CONFIGSPICTURES","Zdi�cia");
define("_MD_YOGURT_CONFIGSVIDEOS","Filmy");
define("_MD_YOGURT_CONFIGSTRIBES","Grupy");
define("_MD_YOGURT_CONFIGSSCRAPS","Notatki");
define("_MD_YOGURT_CONFIGSSCRAPSSEND","Dopisywanie Notatki");
define("_MD_YOGURT_CONFIGSFRIENDS","Znajomi");
define("_MD_YOGURT_CONFIGSPROFILECONTACT","Dane Kontaktowe");
define("_MD_YOGURT_CONFIGSPROFILEGENERAL","Info");
define("_MD_YOGURT_CONFIGSPROFILESTATS","Statystyki");
define("_MD_YOGURT_WHOCAN","Komu zezwalasz na przegl�danie:");

//submit_configs.php
define("_MD_YOGURT_CONFIGSSAVE","Kanfiguracja zapisana!");

//class/yogurt_controler.php
define("_MD_YOGURT_NOPRIVILEGE","W�a�ciciel tego profilu zezwoli� na , <br />wi�cej ni� wy macie teraz. <br />Wy�li pro�b� o zmian� uprawnie� <br />Je�eli nie logowa� si� nie m�g� odpowiedzie� na twoje zaproszenie");

###################################### OTHERS ##############################

//index.php
define("_MD_YOGURT_VISITORS","Odwiedzali tw�j profil (najcz�ciej)");
define("_MD_YOGURT_USERDETAILS","Szczeg�y uzytkownika");
define("_MD_YOGURT_USERCONTRIBUTIONS","Wk�ad u�ytkownika");
define("_MD_YOGURT_FANS","Fani");
define("_MD_YOGURT_UNKNOWNREJECTING","Nie znam tej osoby, nie dodawajjej do grona znajomych.");
define("_MD_YOGURT_UNKNOWNACCEPTING","Jeszcze nie znam tej osoby, ale dodaj� j� do znajomych.");
define("_MD_YOGURT_ASKINGFRIEND","Czy %s jest twoim znajomym?");
define("_MD_YOGURT_ASKBEFRIEND","Wys�a� zaproszenie?");
define("_MD_YOGURT_EDITPROFILE","Edytuj profil");
define("_MD_YOGURT_SELECTAVATAR","Wy�lij zdi�cia do swojego albumu i wybierz jedno jako sw�j AVATAR.");
define("_MD_YOGURT_SELECTMAINVIDEO","Dodaj Filmy i wybierz jeden jako g��wny w twoim profilu");
define("_MD_YOGURT_NOAVATARYET","Nie wybrano AVATARA");
define("_MD_YOGURT_NOMAINVIDEOYET","Nie wybrano g��wnego Video");
define("_MD_YOGURT_MYPROFILE","M�j profil");
define("_MD_YOGURT_YOUHAVEXPETITIONS","Masz %u odpowiedzi od znajomych.");
define("_MD_YOGURT_CONTACTINFO","Kantakt Info");
define("_MD_YOGURT_SUSPENDUSER","U�ytkownicy w zawieszeniu");
define("_MD_YOGURT_SUSPENDTIME","Czas wstrzymania(w sek)");
define("_MD_YOGURT_UNSUSPEND","Przywr�ceni");
define("_MD_YOGURT_SUSPENSIONADMIN","Administracja ZAWIESZE�");

//suspend.php
define("_MD_YOGURT_SUSPENDED","Zawieszony od %s");
define("_MD_YOGURT_USERSUSPENDED","Zawieszony!");//als0 present in index.php

//unsuspend.php
define("_MD_YOGURT_USERUNSUSPENDED","Przywr�cony");

//searchmembers.php
define("_MD_YOGURT_SEARCH","Szukaj Cz�onk�w");
define("_MD_YOGURT_AVATAR","Avatar");
define("_MD_YOGURT_REALNAME","Prawdziwe imi�");
define("_MD_YOGURT_REGDATE","Data wst�pienia");
define("_MD_YOGURT_EMAIL","Email");
define("_MD_YOGURT_PM","PM");
define("_MD_YOGURT_URL","URL");
define("_MD_YOGURT_ADMIN","ADMIN");
define("_MD_YOGURT_PREVIOUS","Wstecz");
define("_MD_YOGURT_NEXT","Dalej");
define("_MD_YOGURT_USERSFOUND","%s znaleziono u�ytkownik�w ");
define("_MD_YOGURT_TOTALUSERS", "Og�em: %s u�ytkownik�w");
define("_MD_YOGURT_NOFOUND","Nie znaleziono uzytkownika");
define("_MD_YOGURT_UNAME","Nazwa u�ytkownika");
define("_MD_YOGURT_ICQ","ICQ Numer");
define("_MD_YOGURT_AIM","AIM Handle");
define("_MD_YOGURT_YIM","YIM Handle");
define("_MD_YOGURT_MSNM","MSNM Handle");
define("_MD_YOGURT_LOCATION","Lokalizacja");
define("_MD_YOGURT_OCCUPATION","Zaw�d");
define("_MD_YOGURT_INTEREST","Zainteresowania");
define("_MD_YOGURT_URLC","URL ");
define("_MD_YOGURT_LASTLOGMORE","Ostatnio zalogowany pu�niej ni�<span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_LASTLOGLESS","Ostatnio zalogowany wcze�niej ni� <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_REGMORE","Do��czy� najpu�niej <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_REGLESS","Do��czy� wcze�niej ni� <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_POSTSMORE","Napisa� wi�cej post�w ni� <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_POSTSLESS","Napisa� mniej post�w ni�<span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_SORT","Sortuj ");
define("_MD_YOGURT_ORDER","Order");
define("_MD_YOGURT_LASTLOGIN","ostatnie logowanie");
define("_MD_YOGURT_POSTS","Posty");
define("_MD_YOGURT_ASC","Rosn�co");
define("_MD_YOGURT_DESC","Malej�co");
define("_MD_YOGURT_LIMIT","Ilo�� rekord�w na stronie");
define("_MD_YOGURT_RESULTS", "Wynik wyszukiwania");

//26/10/2007
define("_MD_YOGURT_VIDEOSNOTENABLED", "Administrator wy��czy� t� sekcj�");
define("_MD_YOGURT_FRIENDSNOTENABLED", "Administrator wy��czy� t� sekcj�");
define("_MD_YOGURT_TRIBESNOTENABLED", "Administrator wy��czy� t� sekcj�");
define("_MD_YOGURT_PICTURESNOTENABLED", "Administrator wy��czy� t� sekcj�");
define("_MD_YOGURT_SCRAPSNOTENABLED", "Administrator wy��czy� t� sekcj�");


//26/01/2008
define("_MD_YOG_ALLFRIENDS" , "Poka� znajomych");
define("_MD_YOG_ALLTRIBES" , "Poka� grupy");

//31/01/2008
define("_MD_YOGURT_FRIENDSHIPNOTACCEPTED" , "Znajomo�c odrzucona");

//07/04/2008
define("_MD_YOGURT_USERDOESNTEXIST","Ten uzytkownik nie istnieje");
define("_MD_YOGURT_FANSTITLE","%s's Fan�w");
define("_MD_YOGURT_NOFANSYET","Nie ma �adnych Fan�w");





?>