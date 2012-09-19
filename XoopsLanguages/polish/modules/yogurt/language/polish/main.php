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
define("_MD_YOGURT_DELETE", "Usuń");
define("_MD_YOGURT_EDITDESC", "Zmień opis");
define("_MD_YOGURT_TOKENEXPIRED", "Twoj token jest niepoprawny<br />Spróbuj jeszcze raz");
define("_MD_YOGURT_DESC_EDITED","Opis został zmieniony");
define("_MD_YOGURT_CAPTION","Opis");
define("_MD_YOGURT_YOUCANUPLOAD","Możesz wysłać Fotografie w formacie jpg's o razmiarze do %s KB");
define("_MD_YOGURT_UPLOADPICTURE","Wyślij zdięcie");
define("_MD_YOGURT_NOCACHACA","Niestety ten moduł wykonał nieoczekiwaną operację!<br />
Spróbuj wkrótce. ");//
define("_MD_YOGURT_PAGETITLE","%s - %s's Globalni");
define("_MD_YOGURT_SUBMIT","Publikuj");
define("_MD_YOGURT_VIDEOS","Video");
define("_MD_YOGURT_SCRAPBOOK","Notatki");
define("_MD_YOGURT_PHOTOS","Fotki");
define("_MD_YOGURT_FRIENDS","Znajomi");
define("_MD_YOGURT_TRIBES","Grupy");
define("_MD_YOGURT_NOTRIBESYET","Nie należysz do zadnych Klanów");
define("_MD_YOGURT_MYTRIBES","Moje Grupy");
define("_MD_YOGURT_ALLTRIBES","Wszystkie Grupy");
define("_MD_YOGURT_PROFILE","Profil");
define("_MD_YOGURT_HOME","Home");
define("_MD_YOGURT_CONFIGSTITLE","Ustawienia");

##################################################### PICTURES #######################################################
//submit.php (for pictures submission
define("_MD_YOGURT_UPLOADED","Wysłono z powodzeniem");

//delpicture.php
define("_MD_YOGURT_ASKCONFIRMDELETION","Czy usunąć zdięcie?");
define("_MD_YOGURT_CONFIRMDELETION","Tak!");

//album.php
define("_MD_YOGURT_YOUHAVE", " Masz %s zdięć w twoim albumie.");
define("_MD_YOGURT_YOUCANHAVE", "Możesz wysłać %s Fotek.");
define("_MD_YOGURT_DELETED","Usunięto z powodzeniem");
define("_MD_YOGURT_SUBMIT_PIC_TITLE","Wyślij zdięcie");
define("_MD_YOGURT_SELECT_PHOTO","Wybierz Fotkę");
define("_MD_YOGURT_NOTHINGYET","Jeszcze nie ma zdięc w tym albumie");
define("_MD_YOGURT_AVATARCHANGE","To zięcie ma być moim AVATAREM");
define("_MD_YOGURT_PRIVATIZE","Tylko ty możesz ogladać zdięcia w twoim albumie");
define("_MD_YOGURT_UNPRIVATIZE","Wszyscy będą mogli oglądać zdięcie w twoim albumie");
define("_MD_YOGURT_MYPHOTOS","Moje Fotki");

//avatar.php
define("_MD_YOGURT_AVATAR_EDITED","Zmieniono zdięcie główne Twojego profilu!");

//private.php
define("_MD_YOGURT_PRIVATIZED","Od teraz tylko ty możesz ogladać to zdięcie(a)");
define("_MD_YOGURT_UNPRIVATIZED","Od tej chwili wszyscy widzą twoje zdięcia");

########################################################## FRIENDS ###################################################
//friends.php
define("_MD_YOGURT_FRIENDSTITLE","%s Znajomi");
define("_MD_YOGURT_NOFRIENDSYET","Nie masz jeszcze przyjacół");//also present in index.php
define("_MD_YOGURT_MYFRIENDS","Moi Przyjaciele");
define("_MD_YOGURT_FRIENDSHIPCONFIGS","Zmień ustawienia. Oceń przyjaciół.");

//class/yogurtfriendship.php
define("_MD_YOGURT_EDITFRIENDSHIP","Twoje relacje z użytkownikiem:");
define("_MD_YOGURT_FRIENDNAME","Imię");
define("_MD_YOGURT_LEVEL","Stopień przyjaźni:");
define("_MD_YOGURT_UNKNOWNACCEPTED","Zaakceptowałem zaproszenie");
define("_MD_YOGURT_AQUAITANCE","Znajomość");//also present in index.php
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
define("_MD_YOGURT_PHOTO","Zdięcie użytkownika");
define("_MD_YOGURT_UPDATEFRIEND","Zmień");

//editfriendship.php
define("_MD_YOGURT_FRIENDSHIPUPDATED","Zmiany uzytkownika wprowadzono pomyślnie");

//submitfriendpetition.php
define("_MD_YOGURT_PETITIONED","Zaproszenie do grona przyjaciół zostało wysłane, Czekaj na akceptację Twojego zaproszenia:)");
define("_MD_YOGURT_ALREADY_PETITIONED","Już posłałeś zaproszenie  do tego użytkownika albo odwrotnie <br />, Czekaj zanim on przyjmie albo odrzuci twoje zaproszenie albo sprawdź kontrolnie otrzymane zaproszenia .");

//makefriends.php
define("_MD_YOGURT_FRIENDMADE","Dodano do grona przyjaciół");

//delfriendship.php
define("_MD_YOGURT_FRIENDSHIPTERMINATED","Zerwaliście relacje z tym użytkownikiem!");

############################################ VIDEOS ############################################################
//mainvideo.php
define("_MD_YOGURT_SETMAINVIDEO","To video zostało ustawione jako główne w Twoim profilu");

//seutubo.php
define("_MD_YOGURT_YOUTUBECODE","YouTube KOD: lub Adres URL");
define("_MD_YOGURT_ADDVIDEO","Dodaj video");
define("_MD_YOGURT_ADDFAVORITEVIDEOS","Dodaj do ulubionych filmów");
define("_MD_YOGURT_ADDVIDEOSHELP","Jesli chcesz wysłać nam swój film skarzystaj z tego linku
<a href=http://www.youtube.com>YouTube</a> Następnie wklej w swoim profilu ADRES URL do filmu"); //The name of the site will show after this
define("_MD_YOGURT_MYVIDEOS","Moje Video");
define("_MD_YOGURT_MAKEMAIN","Ten Film ma być moim głównym VIDEO");
define("_MD_YOGURT_NOVIDEOSYET","Nie masz jeszcze filmów Video!");

//delvideo.php
define("_MD_YOGURT_ASKCONFIRMVIDEODELETION","Czy napewno usunąć ten film ?");
define("_MD_YOGURT_CONFIRMVIDEODELETION","TAK!");
define("_MD_YOGURT_VIDEODELETED","Film został usunięty");

//video_submited.php
define("_MD_YOGURT_VIDEOSAVED","Twoje wideo zostało zapisane");

############################## TRIBES ########################################################
//class/yogurt_tribes.php
define("_MD_YOGURT_SUBMIT_TRIBE","Stwórz nową grupę urzytkowników");
define("_MD_YOGURT_UPLOADTRIBE","Zapisz GRUPĘ");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_IMAGE","Symbol lub zdięcie GRUPY");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_TITLE","Tytuł");//also present in many ther tribes related
define("_MD_YOGURT_TRIBE_DESC","Opis");//also present in many ther tribes related
define("_MD_YOGURTCREATEYOURTRIBE","Utwórz!");//also present in many ther tribes related

//abandontribe.php
define("_MD_YOGURT_ASKCONFIRMABANDONTRIBE","Czy chcesz opuścić grupę?");
define("_MD_YOGURT_CONFIRMABANDON","Tak chcę opuścić tą grupę!");
define("_MD_YOGURT_TRIBEABANDONED","Nie mozesz dołaczyć do grupy.");

//becomemembertribe.php
define("_MD_YOGURT_YOUAREMEMBERNOW","Jestes teraz członkiem grupy");
define("_MD_YOGURT_YOUAREMEMBERALREADY","Jesteś członkiem tej Grupy ");

//delete_tribe.php
define("_MD_YOGURT_ASKCONFIRMTRIBEDELETION","Czy jesteś pewien że chcesz usunąć tą Grupę?");
define("_MD_YOGURT_CONFIRMTRIBEDELETION","Tak usuń GRUPĘ!");
define("_MD_YOGURT_TRIBEDELETED","Grupa Usunięta!");

//edit_tribe.php
define("_MD_YOGURT_MAINTAINOLDIMAGE","Przypisz to zdięcie");//also present in other tribes related
define("_MD_YOGURT_TRIBEEDITED","Grupa zmieniona");
define("_MD_YOGURT_EDIT_TRIBE","Edycja Grupy");//also present in other tribes related
define("_MD_YOGURT_TRIBEOWNER","Jesteś założycielem tej grupy!");//also present in other tribes related
define("_MD_YOGURT_MEMBERSDOFTRIBE","Członkowie Grupy");//also present in other tribes related

//submit_tribe.php
define("_MD_YOGURT_TRIBE_CREATED","Grupa została stworzona");

//kickfromtribe.php
define("_MD_YOGURT_CONFIRMKICK","Wyrzuć go z grupy!");
define("_MD_YOGURT_ASKCONFIRMKICKFROMTRIBE","Jesteś pewien(na) że chcesz usunąć tą osobę z grupy ?");
define("_MD_YOGURT_TRIBEKICKED","Dostałes bana, kto wie spróbuj się przyłączyć w przyszłości!");

//Tribes.php
define("_MD_YOGURT_TRIBE_ABANDON","Opuśc grupę");
define("_MD_YOGURT_TRIBE_JOIN","Dołacz do grupy i powiedz wszystkim KIM JESTEś!");
define("_MD_YOGURT_TRIBE_SEARCH","Szukaj grupy");
define("_MD_YOGURT_TRIBE_SEARCHKEYWORD","Słowa kluczowe");

######################################### SCRAPS #####################################################
//scrapbook.php
define('_MD_YOGURT_ENTERTEXTSCRAP',"Wpisz tekst lub KOD Xoops");
define("_MD_YOGURT_SENDSCRAP","Nowa");
define("_MD_YOGURT_ANSWERSCRAP","Odpowiedź");//also present in configs.php
define("_MD_YOGURT_MYSCRAPBOOK","Moja ksiażka");
define("_MD_YOGURT_CANCEL","Odrzuć");//also present in configs.php
define("_MD_YOGURT_SCRAPTIPS","Notatki");
define("_MD_YOGURT_BOLD","bold");
define("_MD_YOGURT_ITALIC","italic");
define("_MD_YOGURT_UNDERLINE","podkreślenie");
define("_MD_YOGURT_NOSCRAPSYET","Nie masz żadnych notatek");

//submit_scrap.php
define("_MD_YOGURT_SCRAP_SENT","Dziękujemy, Notatka wysłana");

//delete_scrap.php
define("_MD_YOGURT_ASKCONFIRMSCRAPDELETION","Usunąć tę notatkę?");
define("_MD_YOGURT_CONFIRMSCRAPDELETION","TAK, usuń ją.");
define("_MD_YOGURT_SCRAPDELETED","Notatka usunięta!");

############################ CONFIGS ##############################################
//configs.php
define("_MD_YOGURT_CONFIGSEVERYONE","Wszyscy");
define("_MD_YOGURT_CONFIGSONLYEUSERS","Zarejestrowani");
define("_MD_YOGURT_CONFIGSONLYEFRIENDS","Znajomi.");
define("_MD_YOGURT_CONFIGSONLYME","Tylko JA");
define("_MD_YOGURT_CONFIGSPICTURES","Zdięcia");
define("_MD_YOGURT_CONFIGSVIDEOS","Filmy");
define("_MD_YOGURT_CONFIGSTRIBES","Grupy");
define("_MD_YOGURT_CONFIGSSCRAPS","Notatki");
define("_MD_YOGURT_CONFIGSSCRAPSSEND","Dopisywanie Notatki");
define("_MD_YOGURT_CONFIGSFRIENDS","Znajomi");
define("_MD_YOGURT_CONFIGSPROFILECONTACT","Dane Kontaktowe");
define("_MD_YOGURT_CONFIGSPROFILEGENERAL","Info");
define("_MD_YOGURT_CONFIGSPROFILESTATS","Statystyki");
define("_MD_YOGURT_WHOCAN","Komu zezwalasz na przeglądanie:");

//submit_configs.php
define("_MD_YOGURT_CONFIGSSAVE","Kanfiguracja zapisana!");

//class/yogurt_controler.php
define("_MD_YOGURT_NOPRIVILEGE","Właściciel tego profilu zezwolił na , <br />więcej niż wy macie teraz. <br />Wyśli prośbę o zmianę uprawnień <br />Jeżeli nie logował się nie mógł odpowiedzieć na twoje zaproszenie");

###################################### OTHERS ##############################

//index.php
define("_MD_YOGURT_VISITORS","Odwiedzali twój profil (najczęściej)");
define("_MD_YOGURT_USERDETAILS","Szczegóły uzytkownika");
define("_MD_YOGURT_USERCONTRIBUTIONS","Wkład użytkownika");
define("_MD_YOGURT_FANS","Fani");
define("_MD_YOGURT_UNKNOWNREJECTING","Nie znam tej osoby, nie dodawajjej do grona znajomych.");
define("_MD_YOGURT_UNKNOWNACCEPTING","Jeszcze nie znam tej osoby, ale dodaję ją do znajomych.");
define("_MD_YOGURT_ASKINGFRIEND","Czy %s jest twoim znajomym?");
define("_MD_YOGURT_ASKBEFRIEND","Wysłać zaproszenie?");
define("_MD_YOGURT_EDITPROFILE","Edytuj profil");
define("_MD_YOGURT_SELECTAVATAR","Wyślij zdięcia do swojego albumu i wybierz jedno jako swój AVATAR.");
define("_MD_YOGURT_SELECTMAINVIDEO","Dodaj Filmy i wybierz jeden jako główny w twoim profilu");
define("_MD_YOGURT_NOAVATARYET","Nie wybrano AVATARA");
define("_MD_YOGURT_NOMAINVIDEOYET","Nie wybrano głównego Video");
define("_MD_YOGURT_MYPROFILE","Mój profil");
define("_MD_YOGURT_YOUHAVEXPETITIONS","Masz %u odpowiedzi od znajomych.");
define("_MD_YOGURT_CONTACTINFO","Kantakt Info");
define("_MD_YOGURT_SUSPENDUSER","Użytkownicy w zawieszeniu");
define("_MD_YOGURT_SUSPENDTIME","Czas wstrzymania(w sek)");
define("_MD_YOGURT_UNSUSPEND","Przywróceni");
define("_MD_YOGURT_SUSPENSIONADMIN","Administracja ZAWIESZEŃ");

//suspend.php
define("_MD_YOGURT_SUSPENDED","Zawieszony od %s");
define("_MD_YOGURT_USERSUSPENDED","Zawieszony!");//als0 present in index.php

//unsuspend.php
define("_MD_YOGURT_USERUNSUSPENDED","Przywrócony");

//searchmembers.php
define("_MD_YOGURT_SEARCH","Szukaj Członków");
define("_MD_YOGURT_AVATAR","Avatar");
define("_MD_YOGURT_REALNAME","Prawdziwe imię");
define("_MD_YOGURT_REGDATE","Data wstąpienia");
define("_MD_YOGURT_EMAIL","Email");
define("_MD_YOGURT_PM","PM");
define("_MD_YOGURT_URL","URL");
define("_MD_YOGURT_ADMIN","ADMIN");
define("_MD_YOGURT_PREVIOUS","Wstecz");
define("_MD_YOGURT_NEXT","Dalej");
define("_MD_YOGURT_USERSFOUND","%s znaleziono użytkowników ");
define("_MD_YOGURT_TOTALUSERS", "Ogółem: %s użytkowników");
define("_MD_YOGURT_NOFOUND","Nie znaleziono uzytkownika");
define("_MD_YOGURT_UNAME","Nazwa użytkownika");
define("_MD_YOGURT_ICQ","ICQ Numer");
define("_MD_YOGURT_AIM","AIM Handle");
define("_MD_YOGURT_YIM","YIM Handle");
define("_MD_YOGURT_MSNM","MSNM Handle");
define("_MD_YOGURT_LOCATION","Lokalizacja");
define("_MD_YOGURT_OCCUPATION","Zawód");
define("_MD_YOGURT_INTEREST","Zainteresowania");
define("_MD_YOGURT_URLC","URL ");
define("_MD_YOGURT_LASTLOGMORE","Ostatnio zalogowany puźniej niż<span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_LASTLOGLESS","Ostatnio zalogowany wcześniej niż <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_REGMORE","Dołączył najpuźniej <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_REGLESS","Dołączył wcześniej niż <span style='color:#ff0000;'>X</span> dni temu");
define("_MD_YOGURT_POSTSMORE","Napisał więcej postów niż <span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_POSTSLESS","Napisał mniej postów niż<span style='color:#ff0000;'>X</span>");
define("_MD_YOGURT_SORT","Sortuj ");
define("_MD_YOGURT_ORDER","Order");
define("_MD_YOGURT_LASTLOGIN","ostatnie logowanie");
define("_MD_YOGURT_POSTS","Posty");
define("_MD_YOGURT_ASC","Rosnąco");
define("_MD_YOGURT_DESC","Malejąco");
define("_MD_YOGURT_LIMIT","Ilość rekordów na stronie");
define("_MD_YOGURT_RESULTS", "Wynik wyszukiwania");

//26/10/2007
define("_MD_YOGURT_VIDEOSNOTENABLED", "Administrator wyłączył tę sekcję");
define("_MD_YOGURT_FRIENDSNOTENABLED", "Administrator wyłączył tę sekcję");
define("_MD_YOGURT_TRIBESNOTENABLED", "Administrator wyłączył tę sekcję");
define("_MD_YOGURT_PICTURESNOTENABLED", "Administrator wyłączył tę sekcję");
define("_MD_YOGURT_SCRAPSNOTENABLED", "Administrator wyłączył tę sekcję");


//26/01/2008
define("_MD_YOG_ALLFRIENDS" , "Pokaż znajomych");
define("_MD_YOG_ALLTRIBES" , "Pokaż grupy");

//31/01/2008
define("_MD_YOGURT_FRIENDSHIPNOTACCEPTED" , "Znajomośc odrzucona");

//07/04/2008
define("_MD_YOGURT_USERDOESNTEXIST","Ten uzytkownik nie istnieje");
define("_MD_YOGURT_FANSTITLE","%s's Fanów");
define("_MD_YOGURT_NOFANSYET","Nie ma żadnych Fanów");





?>