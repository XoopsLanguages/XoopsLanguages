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
define("_AM_XCHAT_CHAT_ADMINPAGE", "Na tej stronie możesz administrować modułem Xoops Czat. Wybierz rodzaj czynności.");
define("_AM_XCHAT_D1", "Aby utworzyć lub zmodyfikować pokój.");
define("_AM_XCHAT_D2", "Aby wyszukać i skasować wiadomości z bazy danych.");
define("_AM_XCHAT_D3", "Aby zablokować na jakiś czas użytkownika.");
define("_AM_XCHATCONFIG","Preferencje");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","Menadżer pokojów");
define("_AM_XCHAT_ADMENU2","Menadżer wiadomości");
define("_AM_XCHAT_ADMENU3","Blokowanie użytkowników");
define("_AM_XCHAT_CHAT_ROOM", "Pokój i rodzaj czynności:");
define("_AM_XCHAT_REDIT", "Modyfikuj");
define("_AM_XCHAT_RERASE", "Skasuj");
define("_AM_XCHAT_PROCEED", "Zatwierdź");
define("_AM_XCHAT_ADDROOM", "Dodaj pokój");
define('_AM_XCHAT_ROOM_TYPE', 'Typ pokoju:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> Wybierz '<b>2</b>' aby stworzyć pokój widoczny dla wszystkich lub '<b>3</b>' aby stworzyć pokój widoczny jedynie dla określonej grupy użytkowników.");
define("_AM_XCHAT_RCREATE", "Dodaj");
define("_AM_XCHAT_ROOMNAME", "Nazwa:");
define("_AM_XCHAT_ROOM_GROUP", "Grupa użytkowników, którzy mają prawa do pokoju");
define("_AM_XCHAT_CHATGO", "Zatwierdź");
define("_AM_XCHAT_ADMININIT", "Menu administracyjne XoopsCzat");
define("_AM_XCHAT_MSRC", "Wyszukaj");
define("_AM_XCHAT_MSGSEARCH", "Wyszukaj wiadomości");
define("_AM_XCHAT_MERASEALL", "Reset");
define("_AM_XCHAT_MSGTRASH", "Skasuj wszystkie wiadomości");
define("_AM_XCHAT_BSELECT", "Wybierz");
define("_AM_XCHAT_BANUSER", "Zatwierdź");
define("_AM_XCHAT_BANAUSER", "Zablokuj użytkownika:");
define("_AM_XCHAT_BDELDESCR", "Zablokowani użytkownicy: proszę zaznaczyć użytkownika i kliknąć przycisk aby dopuścić go na nowo do pokoju.");
define("_AM_XCHAT_NOUSERSBANNED", "Brak zablokowanych użytkowników.");
define("_AM_XCHAT_BBAN", "Zadecydowałeś o zablokowaniu użytkownika  <b>%s</b>, teraz określ ile dni nie będzie miał on dostępu do pokoju.");
define("_AM_XCHAT_BDAYS", "dzien(dni)");
define("_AM_XCHAT_BFOR", "Przez");
define("_AM_XCHAT_BSET", "Ustaw");
define("_AM_XCHAT_BBANNED", "Użytkownik <b>%s</b> został zablokowany ");
define("_AM_XCHAT_BBANNEDTIME", "na <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "Powrót do menu blokowania użytkowników");
define("_AM_XCHAT_BDEL", "Usuń");
define("_AM_XCHAT_BREM", "Wybrany użytkownik może znów korzystać z pokoju!");
define("_AM_XCHAT_MLIST", "Zatwierdź");
define("_AM_XCHAT_SEARCHCRITERIA", "Wybierz wiadomości z okresu");
define("_AM_XCHAT_DFROM", "od");
define("_AM_XCHAT_DTO", "do");
define("_AM_XCHAT_MLISTALL", "Zaznacz wszystkie wiadomości");
define("_AM_XCHAT_MLISTTODAY", "Zaznacz dzisiejsze wiadomości");
define("_AM_XCHAT_MSRCRES", "Wynik wyszukiania");
define("_AM_XCHAT_MLISTDESCR", "Aby skasować wiadomość kliknij na polu tekstowym z treścią wiadomości.");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "Pokój");
define("_AM_XCHAT_MMSG", "Tekst");
define("_AM_XCHAT_MERASE", "Skasuj");
define("_AM_XCHAT_MPOSTEDBY", "Autor");
define("_AM_XCHAT_MDATE", "Data");
define("_AM_XCHAT_WARNING", "Ostrzeżenie:");
define("_AM_XCHAT_MSURETODELETEALL", "Czy na pewno chcesz wykasować wszystkie wiadomości z bazy?<br><b>"._AM_CHAT_WARNING."</b> Ta operacja jest nieodwracalna!");
define("_AM_XCHAT_MDELOK", "Zatwierdź");
define("_AM_XCHAT_MINIT", "Powrót do menu kasowania wiadomości");
define("_AM_XCHAT_MNOMESSAGES", "Brak wiadomości w zadanym okresie.");
define("_AM_XCHAT_REPEATSEARCH", "Ponów");
define("_AM_XCHAT_EDITROOM", "Edytuj pokój");
define("_AM_XCHAT_MDALL", "Skasowano wszystkie wiadomości!");
define("_AM_XCHAT_SURETODELETE", "Jesteś pewien, że chcesz skasować pokój? <b>%s</b>?");
define("_AM_XCHAT_DELCONFIRM", "Zatwierdź");
define("_AM_XCHAT_RINIT", "Powrót do menu zarządzania pokojami");
define("_AM_XCHAT_RDELETED", "Wykasowano pokój <b>%s</b>!");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> Wpisz '<b>2</b>' aby pokój był widoczny dla wszystkich lub '<b>3</b>' by widoczny był tylko dla określonej grupy użytkowników.");
define("_AM_XCHAT_RSAVE","Zapisz");
define("_AM_XCHAT_CHAT_ID","Id pokoju:");
define("_AM_XCHAT_RUPDATED", "Konfiguracja pokoju <b>%s</b> została uaktualniona!");
define("_AM_XCHAT_RCREATED", "Stworzono nowy pokój <b>%s</b>!");
define("_AM_XCHAT_DEFECTION", "W trakcie tworzenia pokoju wystąpił błąd.<br> Sprawdź, czy podane informacje są prawidłowe.");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>Nie można zmieniać typu dla domyślnego pokoju</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>Nie można ustawić tego pokoju jako domyślny</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>Nie można wykasować domyślnego pokoju</b>.");
define("_AM_XCHAT_RDBERR", "Błąd bady danych:");
define("_AM_XCHAT_NOTFOUND", "<b>Nie znaleziono pokoju</b>.");
define("_AM_XCHAT_MCLOSEWIN", "Z powrotem do menu zarządzania wiadomościami");
define("_AM_XCHAT_MERASEMSG", "Wykasuj wiadomość");
define("_AM_XCHAT_MERASECONFIRMATION", "Potwierdź, że zaznaczone wiadomości mają zostać wykasowane.<br><b>"._AM_CHAT_WARNING."</b> Operacja jest nieodwracalna!");
define("_AM_XCHAT_ERASEDEFINIT", "Wykasuj");
define("_AM_XCHAT_MDELETED", "Zaznaczone wiadomości zostały wykasowane.");

?>
