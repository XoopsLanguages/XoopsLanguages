<?php
// $Id: admin.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

define("_AM_XCHAT_CHAT", "Xoops Czat");
define("_AM_XCHAT_CHAT_ADMINPAGE", "Na tej stronie mo�esz administrowa� modu�em Xoops Czat. Wybierz rodzaj czynno�ci.");
define("_AM_XCHAT_D1", "Aby utworzy� lub zmodyfikowa� pok�j.");
define("_AM_XCHAT_D2", "Aby wyszuka� i skasowa� wiadomo�ci z bazy danych.");
define("_AM_XCHAT_D3", "Aby zablokowa� na jaki� czas u�ytkownika.");
define("_AM_XCHATCONFIG","Preferencje");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","Menad�er pokoj�w");
define("_AM_XCHAT_ADMENU2","Menad�er wiadomo�ci");
define("_AM_XCHAT_ADMENU3","Blokowanie u�ytkownik�w");
define("_AM_XCHAT_CHAT_ROOM", "Pok�j i rodzaj czynno�ci:");
define("_AM_XCHAT_REDIT", "Modyfikuj");
define("_AM_XCHAT_RERASE", "Skasuj");
define("_AM_XCHAT_PROCEED", "Zatwierd�");
define("_AM_XCHAT_ADDROOM", "Dodaj pok�j");
define('_AM_XCHAT_ROOM_TYPE', 'Typ pokoju:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> Wybierz '<b>2</b>' aby stworzy� pok�j widoczny dla wszystkich lub '<b>3</b>' aby stworzy� pok�j widoczny jedynie dla okre�lonej grupy u�ytkownik�w.");
define("_AM_XCHAT_RCREATE", "Dodaj");
define("_AM_XCHAT_ROOMNAME", "Nazwa:");
define("_AM_XCHAT_ROOM_GROUP", "Grupa u�ytkownik�w, kt�rzy maj� prawa do pokoju");
define("_AM_XCHAT_CHATGO", "Zatwierd�");
define("_AM_XCHAT_ADMININIT", "Menu administracyjne XoopsCzat");
define("_AM_XCHAT_MSRC", "Wyszukaj");
define("_AM_XCHAT_MSGSEARCH", "Wyszukaj wiadomo�ci");
define("_AM_XCHAT_MERASEALL", "Reset");
define("_AM_XCHAT_MSGTRASH", "Skasuj wszystkie wiadomo�ci");
define("_AM_XCHAT_BSELECT", "Wybierz");
define("_AM_XCHAT_BANUSER", "Zatwierd�");
define("_AM_XCHAT_BANAUSER", "Zablokuj u�ytkownika:");
define("_AM_XCHAT_BDELDESCR", "Zablokowani u�ytkownicy: prosz� zaznaczy� u�ytkownika i klikn�� przycisk aby dopu�ci� go na nowo do pokoju.");
define("_AM_XCHAT_NOUSERSBANNED", "Brak zablokowanych u�ytkownik�w.");
define("_AM_XCHAT_BBAN", "Zadecydowa�e� o zablokowaniu u�ytkownika  <b>%s</b>, teraz okre�l ile dni nie b�dzie mia� on dost�pu do pokoju.");
define("_AM_XCHAT_BDAYS", "dzien(dni)");
define("_AM_XCHAT_BFOR", "Przez");
define("_AM_XCHAT_BSET", "Ustaw");
define("_AM_XCHAT_BBANNED", "U�ytkownik <b>%s</b> zosta� zablokowany ");
define("_AM_XCHAT_BBANNEDTIME", "na <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "Powr�t do menu blokowania u�ytkownik�w");
define("_AM_XCHAT_BDEL", "Usu�");
define("_AM_XCHAT_BREM", "Wybrany u�ytkownik mo�e zn�w korzysta� z pokoju!");
define("_AM_XCHAT_MLIST", "Zatwierd�");
define("_AM_XCHAT_SEARCHCRITERIA", "Wybierz wiadomo�ci z okresu");
define("_AM_XCHAT_DFROM", "od");
define("_AM_XCHAT_DTO", "do");
define("_AM_XCHAT_MLISTALL", "Zaznacz wszystkie wiadomo�ci");
define("_AM_XCHAT_MLISTTODAY", "Zaznacz dzisiejsze wiadomo�ci");
define("_AM_XCHAT_MSRCRES", "Wynik wyszukiania");
define("_AM_XCHAT_MLISTDESCR", "Aby skasowa� wiadomo�� kliknij na polu tekstowym z tre�ci� wiadomo�ci.");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "Pok�j");
define("_AM_XCHAT_MMSG", "Tekst");
define("_AM_XCHAT_MERASE", "Skasuj");
define("_AM_XCHAT_MPOSTEDBY", "Autor");
define("_AM_XCHAT_MDATE", "Data");
define("_AM_XCHAT_WARNING", "Ostrze�enie:");
define("_AM_XCHAT_MSURETODELETEALL", "Czy na pewno chcesz wykasowa� wszystkie wiadomo�ci z bazy?<br><b>"._AM_CHAT_WARNING."</b> Ta operacja jest nieodwracalna!");
define("_AM_XCHAT_MDELOK", "Zatwierd�");
define("_AM_XCHAT_MINIT", "Powr�t do menu kasowania wiadomo�ci");
define("_AM_XCHAT_MNOMESSAGES", "Brak wiadomo�ci w zadanym okresie.");
define("_AM_XCHAT_REPEATSEARCH", "Pon�w");
define("_AM_XCHAT_EDITROOM", "Edytuj pok�j");
define("_AM_XCHAT_MDALL", "Skasowano wszystkie wiadomo�ci!");
define("_AM_XCHAT_SURETODELETE", "Jeste� pewien, �e chcesz skasowa� pok�j? <b>%s</b>?");
define("_AM_XCHAT_DELCONFIRM", "Zatwierd�");
define("_AM_XCHAT_RINIT", "Powr�t do menu zarz�dzania pokojami");
define("_AM_XCHAT_RDELETED", "Wykasowano pok�j <b>%s</b>!");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> Wpisz '<b>2</b>' aby pok�j by� widoczny dla wszystkich lub '<b>3</b>' by widoczny by� tylko dla okre�lonej grupy u�ytkownik�w.");
define("_AM_XCHAT_RSAVE","Zapisz");
define("_AM_XCHAT_CHAT_ID","Id pokoju:");
define("_AM_XCHAT_RUPDATED", "Konfiguracja pokoju <b>%s</b> zosta�a uaktualniona!");
define("_AM_XCHAT_RCREATED", "Stworzono nowy pok�j <b>%s</b>!");
define("_AM_XCHAT_DEFECTION", "W trakcie tworzenia pokoju wyst�pi� b��d.<br> Sprawd�, czy podane informacje s� prawid�owe.");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>Nie mo�na zmienia� typu dla domy�lnego pokoju</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>Nie mo�na ustawi� tego pokoju jako domy�lny</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>Nie mo�na wykasowa� domy�lnego pokoju</b>.");
define("_AM_XCHAT_RDBERR", "B��d bady danych:");
define("_AM_XCHAT_NOTFOUND", "<b>Nie znaleziono pokoju</b>.");
define("_AM_XCHAT_MCLOSEWIN", "Z powrotem do menu zarz�dzania wiadomo�ciami");
define("_AM_XCHAT_MERASEMSG", "Wykasuj wiadomo��");
define("_AM_XCHAT_MERASECONFIRMATION", "Potwierd�, �e zaznaczone wiadomo�ci maj� zosta� wykasowane.<br><b>"._AM_CHAT_WARNING."</b> Operacja jest nieodwracalna!");
define("_AM_XCHAT_ERASEDEFINIT", "Wykasuj");
define("_AM_XCHAT_MDELETED", "Zaznaczone wiadomo�ci zosta�y wykasowane.");

?>
