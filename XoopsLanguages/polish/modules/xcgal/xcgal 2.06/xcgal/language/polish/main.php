<?php
// polish lang ver. 0.3 alpha by Stanisław Wolanin, admin@polfran.pl 
// $Id: main.php,v 1.0 2003/11/7 17:53:00 derya Exp $
//  ------------------------------------------------------------------------ //
//                    xcGallery - XOOPS Gallery Modul                        //
//                    Copyright (c) 2003 Derya Kiran                         //
//                           meeresstille@gmx.de                             //
//         http://www.myxoopsforge.org/modules/xfmod/project/?xcgal          //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10                                   //
//  (http://coppermine.sourceforge.net/)                                     //
//  developed by Grégory DEMAR                                               //
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
// shortcuts for Byte, Kilo, Mega
define("_MD_BYTES","Bajtów");
define("_MD_KB","KB");
define("_MD_MB","MB");

define("_MD_NPICS","%s plik(ów)");
define("_MD_PICS","Plików");
define("_MD_ALBUM","Album");
define("_MD_ERROR","Wstecz");
define("_MD_KEYS","Słowa kluczowe");
define("_MD_CONTINUE","Dalej");

define("_MD_RANDOM","Losowo wybrane pliki");
define("_MD_LASTUP","Ostatnio dodane");
define("_MD_LASTCOM","Ostatnio dodane komentarze");
define("_MD_TOPN","Najpopularniejsze");
define("_MD_TOPRATED","Najwyżej oceniane");
define("_MD_LASTHITS","Ostatnio oglądane");
define("_MD_SEARCH","Wyniki wyszukiwania");
define("_MD_USEARCH","Plik dodany przez ");
define("_MD_MOST_SENT","Najczęściej wysyłane e-kartki");

define("_MD_ACCESS_DENIED","Nie masz uprawnień, aby ogladać tę stronę.");
define("_MD_PERM_DENIED","Nie masz uprawnień, aby wykonać te operacje.");
define("_MD_PARAM_MISSING","Skrypt został wywołany bez wymaganego parametru.");
define("_MD_NON_EXIST_AP","Wybrany plik lub album nie istnieje!");
define("_MD_QUOTA_EXCEEDED","Przekroczono limit miejsca. <br /><br />Twój przydział: [quota]K, Twoje pliki używaja obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.");
define("_MD_GD_FILE_TYPE_ERR","Jeżeli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.");
define("_MD_INVALID_IMG","Zdjęcie, które przesłano, nie może być obsłużone przez bibliotekę GD.");
define("_MD_RESIZE_FAILED","Nie można stworzyć miniatury lub zdjęcia pośredniej wielkości.");
define("_MD_NO_IMG_TO_DISPLAY","Brak pliku do wyświetlenia");
define("_MD_NO_EXIST_CAT","Wybrana kategoria nie istnieje");
define("_MD_ORPHAN_CAT","Kategoria nie ma gałęzi nadrzędnej, uruchom menadzera kategorii, aby rozwiązać ten problem.");
define("_MD_DIRECTORY_RO","Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mogą być skasowane.");
define("_MD_PIC_IN_INVALID_ALBUM","Plik znajduje się w nieistniejącym albumie (%s)!?");
define("_MD_GD_VERSION_ERR","PHP działające na tym serwerze nie obsługuje bibliteki GD version 2.x, przełącz do GD wersja 1.x w konfiguracji galerii");
define("_MD_NO_GD_FOUND","PHP działające na tym serwerze nie obsługuje bibliteki GD, sprawdź czy ImageMagick lub Netpbm jest zainstalowany");
define("_MD_IM_ERROR","Błąd biblioteki ImageMagick:");
define("_MD_IM_ERROR_CMD","Błąd:");
define("_MD_IM_ERROR_CONV","Błąd konwersji pliku:");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Przejdź do listy albumów");
define("_MD_THM_ALB_LL","Albumy");
define("_MD_THM_GAL_MYT","Do prywatnej galerii");
define("_MD_THM_GAL_MYL","Moja galeria");
define("_MD_THM_ADM_MT","Przełącz w tryb administratora");
define("_MD_THM_ADM_ML","Tryb administratora");
define("_MD_THM_USER_MT","Przełącz w tryb użytkownika");
define("_MD_THM_USER_ML","Tryb użytkownika");
define("_MD_THM_UPLT","Przesłanie pliku do albumu");
define("_MD_THM_UPLL","Przesłanie pliku");
define("_MD_THM_UPLLMORE","Przesłanie kilku plików");


define("_MD_THM_LAST_UPL","Ostatnio dodane");
define("_MD_THM_LAST_COM","Ostatnie komentarze");
define("_MD_THM_MOST_VIEW","Najpopularniejsze");
define("_MD_THM_TOP_RATE","Top Lista");
define("_MD_THM_SEARCH","Szukaj");
define("_MD_THM_UPL_APPR","Akceptacja zdjęć");

define("_MD_THM_ALBMGR_LNK","Tworzenie / porządkowanie albumów");
define("_MD_THM_MODIFY_LNK","Modyfikacja moich albumów");
define("_MD_THM_CAT","Kategoria");
define("_MD_THM_ALB","Albumy");
define("_MD_THM_PIC","Pliki");
define("_MD_THM_ALBONPAGE","albumów: %d, stron: %d");
define("_MD_THM_DATE","DATA");
define("_MD_THM_NAME","NAZWA PLIKU");
define("_MD_THM_SORT_DA","Sortowanie wg daty rosnąco");
define("_MD_THM_SORT_DD","Sortowanie wg daty malejąco");
define("_MD_THM_SORT_NA","Sortowanie wg nazwy rosnąco");
define("_MD_THM_SORT_ND","Sortowanie wg nazwy malejąco");
define("_MD_THM_PICPAGE","plików: %d stron: %d");
define("_MD_THM_USERPAGE","użytkowników: %d, stron: %d");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","Nazwa pliku: ");
define("_MD_FUNC_FSIZE","Rozmiar pliku: ");
define("_MD_FUNC_DIM","Wymiary: ");
define("_MD_FUNC_DATE","Data dodania: ");
define("_MD_FUNC_COM","komentarzy: %s ");
define("_MD_FUNC_VIEW","odsłon: %s ");
define("_MD_FUNC_VOTE","(glosów: %s)");
define("_MD_FUNC_SEND","%s razy");
define("_MD_FUNC_DELUSER","Użytkownik skasowany");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Zakończono prace administratora galerii...");
define("_MD_ADMIN_ENTER","Przełączanie do trybu administratora galerii...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","Albumy muszą mieć nazwę!");
define("_MD_ALBMGR_CONF_MOD","Czy na pewno chcesz dokonać tych modyfikacji?");
define("_MD_ALBMGR_NO_CHANGE","Nie dokonaleś/aś żadnej zmiany!");
define("_MD_ALBMGR_NEW_ALB","Nowy album");
define("_MD_ALBMGR_CONF_DEL1","Czy na pewno chcesz skasować ten album?");
define("_MD_ALBMGR_CONF_DEL2","Wszystkie pliki i komentarze, które zawiera, zostaną stracone!");
define("_MD_ALBMGR_SELECT_FIRST","Wybierz najpierw album");
define("_MD_ALBMGR_ALB_MGR","Menadzer albumów");
define("_MD_ALBMGR_MY_GAL","* Moja galeria *");
define("_MD_ALBMGR_NO_CAT","* Bez kategorii *");
define("_MD_ALBMGR_DEL","Kasuj");
define("_MD_ALBMGR_NEW","Nowy");
define("_MD_ALBMGR_APPLY","Wykonaj modyfikacje");
define("_MD_ALBMGR_SELECT","Wybierz kategorie");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","Musisz podać tytuł dla albumu!");
define("_MD_DB_NO_NEED","Zmiana nie jest konieczna.");
define("_MD_DB_ALB_UPDATED","Album został uaktualniony");
define("_MD_DB_UNKOWN","Wybrany album nie istnieje, lub nie masz uprawnień do przesyłania");
define("_MD_DB_NO_PICUP","Plik nie został dodany!<br /><br />Jeżeli wybrano plik do przesłania, sprawdź czy serwer na to zezwala...");
define("_MD_DB_ERR_MKDIR","Nie udało się utworzyć katalogu %s !");
define("_MD_DB_DEST_DIR_RO","Katalog docelowy %s nie może być zapisany przez skrypt!");
define("_MD_DB_ERR_FEXT","Prawidłowe są tylko pliki typu: <br /><br />%s.");
define("_MD_DB_ERR_MOVE","Nie można przenieść %s do %s !");
define("_MD_DB_ERR_PIC_SIZE","Plik, który przesyłasz, ma zbyt duży rozmiar (maksymalnie dozwolony: %s x %s)!");
define("_MD_DB_ERR_FSIZE","Plik, który przesyłasz, ma zbyt duży rozmiar (maksymalnie dozwolony: to %s KB)!");
define("_MD_DB_ERR_IMG_INVALID","Plik, który przesyłasz, jest w niedozwolonym formacie!");
define("_MD_DB_IMG_ALLOWED","możesz przesłać tylko %s plików.");
define("_MD_DB_ERR_INSERT","Plik \'%s\' nie może zostać wstawiony do albumu ");
define("_MD_DB_UPLOAD_SUCC","Plik został przesłany <br /><br />Będzie widoczny po akceptacji przez administratora.");
define("_MD_DB_UPL_SUCC","Plik został przesłany");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","Tytuł");
define("_MD_DEL_FS_PIC","pełny rozmiar");
define("_MD_DEL_DEL_SUCCESS","skasowano");
define("_MD_DEL_NS_PIC","normalny rozmiar");
define("_MD_DEL_ERR_DEL","nie może byc skasowane");
define("_MD_DEL_THUMB","miniatura");
define("_MD_DEL_COMMENT","komentarz");
define("_MD_DEL_IMGALB","zdjęcie z albumu");
define("_MD_DEL_ALB_DEL_SUC","Skasowano album \'%s\' ");
define("_MD_DEL_ALBMGR","Menedzer albumów");
define("_MD_DEL_INVALID","Otrzymano niewlasciwe dane \'%s\'");
define("_MD_DEL_CREATE","Tworzenie albumu \'%s\'");
define("_MD_DEL_UPDATE","Uaktualnienie albumu: \'%s\' tytul: \'%s\' index: \'%s\'");
define("_MD_DEL_DELPIC","Kasowanie pliku");
define("_MD_DEL_DELALB","Kasowanie albumu");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","Czy na pewno chcesz skasowac ten plik? Zostana skasowane równiez komentarze do niego.");
define("_MD_DIS_DEL_PIC","SKASUJ TEN PLIK");
define("_MD_DIS_SIZE","%s x %s pikseli");
define("_MD_DIS_VIEWS","%s razy");
define("_MD_DIS_SLIDE","Pokaz slajdów");
define("_MD_DIS_STOP_SLIDE","ZATRZYMAJ Pokaz slajdów");
define("_MD_DIS_FULL","Kliknij, aby zobaczyć w pełnym rozmiarze");
define("_MD_DIS_TITLE","Informacja o pliku");
define("_MD_DIS_FNAME","Nazwa pliku");
define("_MD_DIS_ANAME","Nazwa albumu");
define("_MD_DIS_RATING","Ocena (%s głosów)");
define("_MD_DIS_FSIZE","Rozmiar pliku");
define("_MD_DIS_DIMEMS","Wymiary");
define("_MD_DIS_DISPLAYED","Wyświetleń");
define("_MD_DIS_CAMERA","Aparat fotograficzny");
define("_MD_DIS_DATA_TAKEN","Data zrobienia zdjęcia");
define("_MD_DIS_APERTURE","Przesłona");
define("_MD_DIS_EXPTIME","Czas ekspozycji");
define("_MD_DIS_FLENGTH","Ogniskowa");
define("_MD_DIS_COMMENT","Komentarz");
define("_MD_DIS_BACK_TNPAGE","Powrót do strony z miniaturami");
define("_MD_DIS_SHOW_PIC_INFO","Wyświetl/Ukryj informację o pliku");
define("_MD_DIS_SEND_CARD","Wyślij ten plik jako e-kartkę");
define("_MD_DIS_CARD_DISABLE","e-kartki są wyłączone");
define("_MD_DIS_CARD_DISABLEMSG","Nie masz uprawnień do wysyłania e-kartek");
define("_MD_DIS_NEXT","Poprzedni plik");
define("_MD_DIS_PREV","Następny plik");
define("_MD_DIS_PICPOS","PLIK %s/%s");
define("_MD_DIS_RATE_THIS","Oceń ten plik ");
define("_MD_DIS_NO_VOTE","(Brak głosów)");
define("_MD_DIS_RATINGCUR","(obecna ocena : %s / 5 głosów: %s)");
define("_MD_DIS_RUBBISH","Do niczego");
define("_MD_DIS_POOR","Słabe");
define("_MD_DIS_FAIR","Niezłe");
define("_MD_DIS_GOOD","Dobre");
define("_MD_DIS_EXCELLENT","Wspaniałe");
define("_MD_DIS_GREAT","Doskonałe");
define("_MD_DIS_UPLOADER","Dodany przez");
define("_MD_DIS_EXIF_ERR","PHP działające na tym serwerze nie czyta danych EXIF w plikach JPEG, proszę wyłaczyc tę opcję w konfiguracji galerii");
define("_MD_DIS_VIEW_MORE_BY","zobacz wiecej plików dodanych przez ");
define("_MD_DIS_SUBIP","IP użytkownika");
define("_MD_DIS_SENT","Wyślij jako e-kartkę");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","Wyślij e-kartkę");
define("_MD_CARD_INVALIDE_EMAIL","<b>Uwaga!</b> : niepoprawny adres e-mail !");
define("_MD_CARD_ECARD_TITLE","e-kartka od %s dla Ciebie");
define("_MD_CARD_VIEW_ECARD","Jeżeli e-kartka nie wyświetla się poprawnie, kliknij ten link");
define("_MD_CARD_VIEW_MORE_PICS","Kliknij ten link, aby zobaczyć więcej zdjęć!");
define("_MD_CARD_SEND_SUCCESS","Twoja e-kartka została wysłana");
define("_MD_CARD_SEND_FAILED","Niestety, serwer nie może wysłać Twojej e-kartki...");
define("_MD_CARD_FROM","Od");
define("_MD_CARD_YOUR_NAME","Twoje imię");
define("_MD_CARD_YOUR_EMAIL","Twój adres e-mail");
define("_MD_CARD_TO","Do");
define("_MD_CARD_RCPT_NAME","Nazwa odbiorcy");
define("_MD_CARD_RCPT_EMAIL","Adres e-mail odbiorcy");
define("_MD_CARD_GREETINGS","Temat");
define("_MD_CARD_MESSAGE","Wiadomość");
define("_MD_CARD_PERHOUR","Możesz wysłać tylko %s e-kartek w ciągu godziny. Zapraszamy później");
define("_MD_CARD_NOTINDB","E-kartka nie może być dodana do bazy danych!<br />Proszę powiadomić administratora strony");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Informacje&nbsp;o pliku");
define("_MD_EDITPICS_TITLE","Tytuł");
define("_MD_EDITPICS_DESC","Opis");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s wyświetleń - %s komentarzy");
define("_MD_EDITPICS_APPROVE","Akceptuj plik");
define("_MD_EDITPICS_PP_APPROVE","Odrocz akceptację");
define("_MD_EDITPICS_DEL_PIC","Skasuj plik");
define("_MD_EDITPICS_RVIEW","Wyzeruj licznik wyświetleń");
define("_MD_EDITPICS_RVOTES","Wyzeruj ranking głosowań");
define("_MD_EDITPICS_DCOM","Skasuj komentarze");
define("_MD_EDITPICS_UPL_APPROVAL","Akceptacja zdjęć");
define("_MD_EDITPICS_EDIT","Edytuj pliki");
define("_MD_EDITPICS_NEXT","Zobacz następne zdjęcia");
define("_MD_EDITPICS_PREV","Zobacz poprzednie zdjęcia");
define("_MD_EDITPICS_NUMDIS","Ilość zdjęć do wyświetlenia");
define("_MD_EDITPICS_APPLY","Zastosuj zmiany");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Czy na pewno chcesz skasować ten album? Zostaną skasowane również wszystkie pliki i komentarze.");
define("_MD_INDEX_DEL","KASUJ");
define("_MD_INDEX_MOD","WŁAŚCIWOŚCI");
define("_MD_INDEX_EDIT","EDYCJA PLIKÓW");
define("_MD_INDEX_STAT1","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>");
define("_MD_INDEX_STAT2","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, odsłony: <b>[views]</b>");
define("_MD_INDEX_USERS_GAL","galeria %s");
define("_MD_INDEX_STAT3","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>");
define("_MD_INDEX_ULIST","Lista użytkowników");
define("_MD_INDEX_NO_UGAL","Galerie użytkowników nie istnieją lub nie masz do nich dostępu");
define("_MD_INDEX_NALBS","albumów: %s");
define("_MD_INDEX_NPICS","plików: %s");
define("_MD_INDEX_LASTADD",", ostatnio dodany: %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Uaktualnij album %s");
define("_MD_MODIFYALB_GEN_SET","Ustawienia ogólne");
define("_MD_MODIFYALB_ALB_TITLE","Tytuł albumu");
define("_MD_MODIFYALB_ALB_CAT","Kategoria albumu");
define("_MD_MODIFYALB_ALB_DESC","Opis albumu");
define("_MD_MODIFYALB_ALB_THUMB","Miniatury albumu");
define("_MD_MODIFYALB_ALB_PERM","Uprawnienia albumu");
define("_MD_MODIFYALB_CAN_VIEW","Może być oglądany przez");
define("_MD_MODIFYALB_CAN_UPLOAD","Goście mogą przesyłać pliki");
define("_MD_MODIFYALB_CAN_COM","Goście mogą dodawać komentarze");
define("_MD_MODIFYALB_CAN_RATE","Goście mogą oceniać pliki");
define("_MD_MODIFYALB_USER_GAL","Galeria użytkownika");
define("_MD_MODIFYALB_NO_CAT","* Bez kategorii *");
define("_MD_MODIFYALB_ALB_EMPTY","Album jest pusty");
define("_MD_MODIFYALB_LAST_UPL","Ostatnio przesłane");
define("_MD_MODIFYALB_PUB_ALB","Wszyscy (album publiczny)");
define("_MD_MODIFYALB_ME_ONLY","Tylko ja");
define("_MD_MODIFYALB_OWNER_ONLY","Tylko właściciel albumu: (%s)");
define("_MD_MODIFYALB_GROUP_ONLY","Członkowie grupy: '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","Nie można modyfikować żadnego albumu w bazie.");
define("_MD_MODIFYALB_UPDATE","Uaktualnij album");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","Niestety, już oceniałeś ten plik");
define("_MD_RATE_OK","Twój głos został zarejestrowany");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Wyszukiwanie zdjęć");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Wysyłanie plików");
define("_MD_UPL_MAX_FSIZE","Maksymalny rozmiar pliku to %s KB");
define("_MD_UPL_ALBUM","Album");
define("_MD_UPL_PICTURE","Zdjęcie");
define("_MD_UPL_PIC_TITLE","Tytuł zdjęcia");
define("_MD_UPL_DESCRIPTION","Opis zdjęcia");
define("_MD_UPL_KEYWORDS","Słowa kluczowe (oddzielone spacjami)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","Niestety, nie ma albumu do którego mógłbyś przesłać pliki");
define("_MD_UPL_YOURALB","Twoje albumy");
define("_MD_UPL_ALBPUB","Albumy udostępnione");
define("_MD_UPL_OUSERALB","Albumy innych użytkowników");
?>
