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

define("_AM_XCHAT_CHAT","Xoops Czat");
define("_AM_XCHAT_CHAT_ADMINPAGE","Na tej stronie mo¿esz administrowaæ modu³em Xoops Czat. Wybierz rodzaj czynno¶ci.");
define("_AM_XCHAT_D1","Aby utworzyæ lub zmodyfikowaæ pokój.");
define("_AM_XCHAT_D2","Aby wyszukaæ i skasowaæ wiadomo¶ci z bazy danych.");
define("_AM_XCHAT_D3","Aby zablokowaæ na jaki¶ czas u¿ytkownika.");
define("_AM_XCHATCONFIG","Preferencje");
define("_AM_XCHAT_AD1","rooms.php");
define("_AM_XCHAT_AD2","messages.php");
define("_AM_XCHAT_AD3","banusers.php");
define("_AM_XCHAT_ADMENU1","Menad¿er pokojów");
define("_AM_XCHAT_ADMENU2","Menad¿er wiadomo¶ci");
define("_AM_XCHAT_ADMENU3","Blokowanie u¿ytkowników");
define("_AM_XCHAT_CHAT_ROOM","Pokój i rodzaj czynno¶ci:");
define("_AM_XCHAT_REDIT","Modyfikuj");
define("_AM_XCHAT_RERASE","Skasuj");
define("_AM_XCHAT_PROCEED","Zatwierd¼");
define("_AM_XCHAT_ADDROOM","Dodaj pokój");
define('_AM_XCHAT_ROOM_TYPE','Typ pokoju:');
define("_AM_XCHAT_TYPEDESCR","<b>"._AM_XCHAT_ROOM_TYPE."</b> Wybierz '<b>2</b>' aby stworzyæ pokój widoczny dla wszystkich lub '<b>3</b>' aby stworzyæ pokój widoczny jedynie dla okre¶lonej grupy u¿ytkowników.");
define("_AM_XCHAT_RCREATE","Dodaj");
define("_AM_XCHAT_ROOMNAME","Nazwa:");
define("_AM_XCHAT_ROOM_GROUP","Grupa u¿ytkowników, którzy maj± prawa do pokoju");
define("_AM_XCHAT_CHATGO","Zatwierd¼");
define("_AM_XCHAT_ADMININIT","Menu administracyjne XoopsCzat");
define("_AM_XCHAT_MSRC","Wyszukaj");
define("_AM_XCHAT_MSGSEARCH","Wyszukaj wiadomo¶ci");
define("_AM_XCHAT_MERASEALL","Reset");
define("_AM_XCHAT_MSGTRASH","Skasuj wszystkie wiadomo¶ci");
define("_AM_XCHAT_BSELECT","Wybierz");
define("_AM_XCHAT_BANUSER","Zatwierd¼");
define("_AM_XCHAT_BANAUSER","Zablokuj u¿ytkownika:");
define("_AM_XCHAT_BDELDESCR","Zablokowani u¿ytkownicy: proszê zaznaczyæ u¿ytkownika i klikn±æ przycisk aby dopu¶ciæ go na nowo do pokoju.");
define("_AM_XCHAT_NOUSERSBANNED","Brak zablokowanych u¿ytkowników.");
define("_AM_XCHAT_BBAN","Zadecydowa³e¶ o zablokowaniu u¿ytkownika  <b>%s</b>, teraz okre¶l ile dni nie bêdzie mia³ on dostêpu do pokoju.");
define("_AM_XCHAT_BDAYS","dzien(dni)");
define("_AM_XCHAT_BFOR","Przez");
define("_AM_XCHAT_BSET","Ustaw");
define("_AM_XCHAT_BBANNED","U¿ytkownik <b>%s</b> zosta³ zablokowany ");
define("_AM_XCHAT_BBANNEDTIME","na <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT","Powrót do menu blokowania u¿ytkowników");
define("_AM_XCHAT_BDEL","Usuñ");
define("_AM_XCHAT_BREM","Wybrany u¿ytkownik mo¿e znów korzystaæ z pokoju!");
define("_AM_XCHAT_MLIST","Zatwierd¼");
define("_AM_XCHAT_SEARCHCRITERIA","Wybierz wiadomo¶ci z okresu");
define("_AM_XCHAT_DFROM","od");
define("_AM_XCHAT_DTO","do");
define("_AM_XCHAT_MLISTALL","Zaznacz wszystkie wiadomo¶ci");
define("_AM_XCHAT_MLISTTODAY","Zaznacz dzisiejsze wiadomo¶ci");
define("_AM_XCHAT_MSRCRES","Wynik wyszukiania");
define("_AM_XCHAT_MLISTDESCR","Aby skasowaæ wiadomo¶æ kliknij na polu tekstowym z tre¶ci± wiadomo¶ci.");
define("_AM_XCHAT_MID","Id");
define("_AM_XCHAT_MROOM","Pokój");
define("_AM_XCHAT_MMSG","Tekst");
define("_AM_XCHAT_MERASE","Skasuj");
define("_AM_XCHAT_MPOSTEDBY","Autor");
define("_AM_XCHAT_MDATE","Data");
define("_AM_XCHAT_WARNING","Ostrze¿enie:");
define("_AM_XCHAT_MSURETODELETEALL","Czy na pewno chcesz wykasowaæ wszystkie wiadomo¶ci z bazy?<br><b>"._AM_CHAT_WARNING."</b> Ta operacja jest nieodwracalna!");
define("_AM_XCHAT_MDELOK","Zatwierd¼");
define("_AM_XCHAT_MINIT","Powrót do menu kasowania wiadomo¶ci");
define("_AM_XCHAT_MNOMESSAGES","Brak wiadomo¶ci w zadanym okresie.");
define("_AM_XCHAT_REPEATSEARCH","Ponów");
define("_AM_XCHAT_EDITROOM","Edytuj pokój");
define("_AM_XCHAT_MDALL","Skasowano wszystkie wiadomo¶ci!");
define("_AM_XCHAT_SURETODELETE","Jeste¶ pewien, ¿e chcesz skasowaæ pokój? <b>%s</b>?");
define("_AM_XCHAT_DELCONFIRM","Zatwierd¼");
define("_AM_XCHAT_RINIT","Powrót do menu zarz±dzania pokojami");
define("_AM_XCHAT_RDELETED","Wykasowano pokój <b>%s</b>!");
define("_AM_XCHAT_TYPEDEDIT","<b>"._AM_XCHAT_ROOM_TYPE."</b> Wpisz '<b>2</b>' aby pokój by³ widoczny dla wszystkich lub '<b>3</b>' by widoczny by³ tylko dla okre¶lonej grupy u¿ytkowników.");
define("_AM_XCHAT_RSAVE","Zapisz");
define("_AM_XCHAT_CHAT_ID","Id pokoju:");
define("_AM_XCHAT_RUPDATED","Konfiguracja pokoju <b>%s</b> zosta³a uaktualniona!");
define("_AM_XCHAT_RCREATED","Stworzono nowy pokój <b>%s</b>!");
define("_AM_XCHAT_DEFECTION","W trakcie tworzenia pokoju wyst±pi³ b³±d.<br> Sprawd¼, czy podane informacje s± prawid³owe.");
define("_AM_XCHAT_UNABLETOEDITTYPE","<b>Nie mo¿na zmieniaæ typu dla domy¶lnego pokoju</b>.");
define("_AM_XCHAT_TYPEMISMATCH","<b>Nie mo¿na ustawiæ tego pokoju jako domy¶lny</b>.");
define("_AM_XCHAT_UNABLETOERASE","<b>Nie mo¿na wykasowaæ domy¶lnego pokoju</b>.");
define("_AM_XCHAT_RDBERR","B³±d bady danych:");
define("_AM_XCHAT_NOTFOUND","<b>Nie znaleziono pokoju</b>.");
define("_AM_XCHAT_MCLOSEWIN","Z powrotem do menu zarz±dzania wiadomo¶ciami");
define("_AM_XCHAT_MERASEMSG","Wykasuj wiadomo¶æ");
define("_AM_XCHAT_MERASECONFIRMATION","Potwierd¼, ¿e zaznaczone wiadomo¶ci maj± zostaæ wykasowane.<br><b>"._AM_CHAT_WARNING."</b> Operacja jest nieodwracalna!");
define("_AM_XCHAT_ERASEDEFINIT","Wykasuj");
define("_AM_XCHAT_MDELETED","Zaznaczone wiadomo¶ci zosta³y wykasowane.");

?>
