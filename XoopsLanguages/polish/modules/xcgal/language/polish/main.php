<?php
// polish lang ver. 0.3 alpha by Stanis³aw Wolanin, admin@polfran.pl 
// $Id: main.php,v 1.1 2007/02/10 18:55:29 dap997 Exp $
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
define("_MD_KEYS","S³owa kluczowe");
define("_MD_CONTINUE","Dalej");

define("_MD_RANDOM","Losowo wybrane pliki");
define("_MD_LASTUP","Ostatnio dodane");
define("_MD_LASTCOM","Ostatnio dodane komentarze");
define("_MD_TOPN","Najpopularniejsze");
define("_MD_TOPRATED","Najwy¿ej oceniane");
define("_MD_LASTHITS","Ostatnio ogl±dane");
define("_MD_SEARCH","Wyniki wyszukiwania");
define("_MD_USEARCH","Plik dodany przez ");
define("_MD_MOST_SENT","Najczê¶ciej wysy³ane e-kartki");

define("_MD_ACCESS_DENIED","Nie masz uprawnieñ, aby ogladaæ tê stronê.");
define("_MD_PERM_DENIED","Nie masz uprawnieñ, aby wykonaæ te operacje.");
define("_MD_PARAM_MISSING","Skrypt zosta³ wywo³any bez wymaganego parametru.");
define("_MD_NON_EXIST_AP","Wybrany plik lub album nie istnieje!");
define("_MD_QUOTA_EXCEEDED","Przekroczono limit miejsca. <br /><br />Twój przydzia³: [quota]K, Twoje pliki u¿ywaja obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.");
define("_MD_GD_FILE_TYPE_ERR","Je¿eli w u¿yciu jest biblioteka GD, dozwolone formaty zdjêæ to wy³±cznie JPEG i PNG.");
define("_MD_INVALID_IMG","Zdjêcie, które przes³ano, nie mo¿e byc obs³u¿one przez bibliotekê GD.");
define("_MD_RESIZE_FAILED","Nie mo¿na stworzyæ miniatury lub zdjêcia po¶redniej wielko¶ci.");
define("_MD_NO_IMG_TO_DISPLAY","Brak pliku do wy¶wietlenia");
define("_MD_NO_EXIST_CAT","Wybrana kategoria nie istnieje");
define("_MD_ORPHAN_CAT","Kategoria nie ma ga³êzi nadrzêdnej, uruchom menadzera kategorii, aby rozwi±zaæ ten problem.");
define("_MD_DIRECTORY_RO","Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mog± byæ skasowane.");
define("_MD_PIC_IN_INVALID_ALBUM","Plik znajduje siê w nieistniejacym albumie (%s)!?");
define("_MD_GD_VERSION_ERR","PHP dzia³aj±ce na tym serwerze nie obs³uguje bibliteki GD version 2.x, prze³acz do GD wersja 1.x w konfiguracji galerii");
define("_MD_NO_GD_FOUND","PHP dzia³aj±ce na tym serwerze nie obs³uguje bibliteki GD, sprawd¼ czy ImageMagick lub Netpbm jest zainstalowany");
define("_MD_IM_ERROR","B³±d biblioteki ImageMagick:");
define("_MD_IM_ERROR_CMD","B³±d:");
define("_MD_IM_ERROR_CONV","B³±d konwersji pliku:");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Przejd¼ do listy albumów");
define("_MD_THM_ALB_LL","Albumy");
define("_MD_THM_GAL_MYT","Do prywatnej galerii");
define("_MD_THM_GAL_MYL","Moja galeria");
define("_MD_THM_ADM_MT","Prze³±cz w tryb administratora");
define("_MD_THM_ADM_ML","Tryb administratora");
define("_MD_THM_USER_MT","Prze³±cz w tryb u¿ytkownika");
define("_MD_THM_USER_ML","Tryb u¿ytkownika");
define("_MD_THM_UPLT","Przes³anie pliku do albumu");
define("_MD_THM_UPLL","Przes³anie pliku");
define("_MD_THM_LAST_UPL","Ostatnio dodane");
define("_MD_THM_LAST_COM","Ostatnie komentarze");
define("_MD_THM_MOST_VIEW","Najpopularniejsze");
define("_MD_THM_TOP_RATE","Top Lista");
define("_MD_THM_SEARCH","Szukaj");
define("_MD_THM_UPL_APPR","Akceptacja zdjêæ");

define("_MD_THM_ALBMGR_LNK","Tworzenie / porz±dkowanie albumów");
define("_MD_THM_MODIFY_LNK","Modyfikacja moich albumów");
define("_MD_THM_CAT","Kategoria");
define("_MD_THM_ALB","Albumy");
define("_MD_THM_PIC","Pliki");
define("_MD_THM_ALBONPAGE","albumów: %d, stron: %d");
define("_MD_THM_DATE","DATA");
define("_MD_THM_NAME","NAZWA PLIKU");
define("_MD_THM_SORT_DA","Sortowanie wg daty rosn±co");
define("_MD_THM_SORT_DD","Sortowanie wg daty malej±co");
define("_MD_THM_SORT_NA","Sortowanie wg nazwy rosn±co");
define("_MD_THM_SORT_ND","Sortowanie wg nazwy malej±co");
define("_MD_THM_PICPAGE","plików: %d stron: %d");
define("_MD_THM_USERPAGE","u¿ytkowników: %d, stron: %d");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","Nazwa pliku: ");
define("_MD_FUNC_FSIZE","Rozmiar pliku: ");
define("_MD_FUNC_DIM","Wymiary: ");
define("_MD_FUNC_DATE","Data dodania: ");
define("_MD_FUNC_COM","komentarzy: %s ");
define("_MD_FUNC_VIEW","ods³on: %s ");
define("_MD_FUNC_VOTE","(glosów: %s)");
define("_MD_FUNC_SEND","%s razy");
define("_MD_FUNC_DELUSER","U¿ytkownik skasowany");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Zakoñczono prace administratora galerii...");
define("_MD_ADMIN_ENTER","Prze³±czanie do trybu administratora galerii...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","Albumy musz± mieæ nazwê!");
define("_MD_ALBMGR_CONF_MOD","Czy na pewno chcesz dokonaæ tych modyfikacji?");
define("_MD_ALBMGR_NO_CHANGE","Nie dokonale¶/a¶ ¿adnej zmiany!");
define("_MD_ALBMGR_NEW_ALB","Nowy album");
define("_MD_ALBMGR_CONF_DEL1","Czy na pewno chcesz skasowaæ ten album?");
define("_MD_ALBMGR_CONF_DEL2","Wszystkie pliki i komentarze, które zawiera, zostan± stracone!");
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

define("_MD_DB_ALB_NEED_TITLE","Musisz podaæ tytu³ dla albumu!");
define("_MD_DB_NO_NEED","Zmiana nie jest konieczna.");
define("_MD_DB_ALB_UPDATED","Album zosta³ uaktualniony");
define("_MD_DB_UNKOWN","Wybrany album nie istnieje, lub nie masz uprawnieñ do przesy³ania");
define("_MD_DB_NO_PICUP","Plik nie zosta³ dodany!<br /><br />Je¿eli wybrano plik do przes³ania, sprawd¼ czy serwer na to zezwala...");
define("_MD_DB_ERR_MKDIR","Nie uda³o siê utworzyæ katalogu %s !");
define("_MD_DB_DEST_DIR_RO","Katalog docelowy %s nie mo¿e byæ zapisany przez skrypt!");
define("_MD_DB_ERR_FEXT","Prawid³owe s± tylko pliki typu: <br /><br />%s.");
define("_MD_DB_ERR_MOVE","Nie mo¿na przenie¶æ %s do %s !");
define("_MD_DB_ERR_PIC_SIZE","Plik, który przesy³asz, ma zbyt du¿y rozmiar (maksymalnie dozwolony: %s x %s)!");
define("_MD_DB_ERR_FSIZE","Plik, który przesy³asz, ma zbyt du¿y rozmiar (maksymalnie dozwolony: to %s KB)!");
define("_MD_DB_ERR_IMG_INVALID","Plik, który przesy³asz, jest w niedozwolonym formacie!");
define("_MD_DB_IMG_ALLOWED","mo¿esz przes³aæ tylko %s plików.");
define("_MD_DB_ERR_INSERT","Plik \'%s\' nie mo¿e zostaæ wstawiony do albumu ");
define("_MD_DB_UPLOAD_SUCC","Plik zosta³ przes³any <br /><br />Bêdzie widoczny po akceptacji przez administratora.");
define("_MD_DB_UPL_SUCC","Plik zosta³ przes³any");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","Tytu³");
define("_MD_DEL_FS_PIC","pe³ny rozmiar");
define("_MD_DEL_DEL_SUCCESS","skasowano");
define("_MD_DEL_NS_PIC","normalny rozmiar");
define("_MD_DEL_ERR_DEL","nie mo¿e byc skasowane");
define("_MD_DEL_THUMB","miniatura");
define("_MD_DEL_COMMENT","komentarz");
define("_MD_DEL_IMGALB","zdjêcie z albumu");
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
define("_MD_DIS_FULL","Kliknij, aby zobaczyæ w pe³nym rozmiarze");
define("_MD_DIS_TITLE","Informacja o pliku");
define("_MD_DIS_FNAME","Nazwa pliku");
define("_MD_DIS_ANAME","Nazwa albumu");
define("_MD_DIS_RATING","Ocena (%s g³osów)");
define("_MD_DIS_FSIZE","Rozmiar pliku");
define("_MD_DIS_DIMEMS","Wymiary");
define("_MD_DIS_DISPLAYED","Wy¶wietleñ");
define("_MD_DIS_CAMERA","Aparat fotograficzny");
define("_MD_DIS_DATA_TAKEN","Data zrobienia zdjêcia");
define("_MD_DIS_APERTURE","Przes³ona");
define("_MD_DIS_EXPTIME","Czas ekspozycji");
define("_MD_DIS_FLENGTH","Ogniskowa");
define("_MD_DIS_COMMENT","Komentarz");
define("_MD_DIS_BACK_TNPAGE","Powrót do strony z miniaturami");
define("_MD_DIS_SHOW_PIC_INFO","Wy¶wietl/Ukryj informacjê o pliku");
define("_MD_DIS_SEND_CARD","Wy¶lij ten plik jako e-kartkê");
define("_MD_DIS_CARD_DISABLE","e-kartki s± wy³±czone");
define("_MD_DIS_CARD_DISABLEMSG","Nie masz uprawnieñ do wysy³ania e-kartek");
define("_MD_DIS_NEXT","Poprzedni plik");
define("_MD_DIS_PREV","Nastêpny plik");
define("_MD_DIS_PICPOS","PLIK %s/%s");
define("_MD_DIS_RATE_THIS","Oceñ ten plik ");
define("_MD_DIS_NO_VOTE","(Brak g³osów)");
define("_MD_DIS_RATINGCUR","(obecna ocena : %s / 5 g³osów: %s)");
define("_MD_DIS_RUBBISH","Do niczego");
define("_MD_DIS_POOR","S³abe");
define("_MD_DIS_FAIR","Niez³e");
define("_MD_DIS_GOOD","Dobre");
define("_MD_DIS_EXCELLENT","Wspania³e");
define("_MD_DIS_GREAT","Doskona³e");
define("_MD_DIS_UPLOADER","Dodany przez");
define("_MD_DIS_EXIF_ERR","PHP dzia³aj±ce na tym serwerze nie czyta danych EXIF w plikach JPEG, proszê wy³aczyc tê opcjê w konfiguracji galerii");
define("_MD_DIS_VIEW_MORE_BY","zobacz wiecej plików dodanych przez ");
define("_MD_DIS_SUBIP","IP u¿ytkownika");
define("_MD_DIS_SENT","Wy¶lij jako e-kartkê");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","Wy¶lij e-kartkê");
define("_MD_CARD_INVALIDE_EMAIL","<b>Uwaga!</b> : niepoprawny adres e-mail !");
define("_MD_CARD_ECARD_TITLE","e-kartka od %s dla Ciebie");
define("_MD_CARD_VIEW_ECARD","Je¿eli e-kartka nie wy¶wietla siê poprawnie, kliknij ten link");
define("_MD_CARD_VIEW_MORE_PICS","Kliknij ten link, aby zobaczyæ wiêcej zdjêæ!");
define("_MD_CARD_SEND_SUCCESS","Twoja e-kartka zosta³a wys³ana");
define("_MD_CARD_SEND_FAILED","Niestety, serwer nie mo¿e wys³aæ twojej e-kartki...");
define("_MD_CARD_FROM","Od");
define("_MD_CARD_YOUR_NAME","Twoje imiê");
define("_MD_CARD_YOUR_EMAIL","Twój adres e-mail");
define("_MD_CARD_TO","Do");
define("_MD_CARD_RCPT_NAME","Nazwa odbiorcy");
define("_MD_CARD_RCPT_EMAIL","Adres e-mail odbiorcy");
define("_MD_CARD_GREETINGS","Temat");
define("_MD_CARD_MESSAGE","Wiadomo¶æ");
define("_MD_CARD_PERHOUR","Mo¿esz wys³aæ tylko %s e-kartek w ci±gu godziny. Zapraszamy pó¼niej");
define("_MD_CARD_NOTINDB","E-kartka nie mo¿e byæ dodana do bazy danych!<br />Proszê powiadomiæ administratora strony");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Informacje&nbsp;o pliku");
define("_MD_EDITPICS_TITLE","Tytu³");
define("_MD_EDITPICS_DESC","Opis");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s wy¶wietleñ - %s komentarzy");
define("_MD_EDITPICS_APPROVE","Akceptuj plik");
define("_MD_EDITPICS_PP_APPROVE","Odrocz akceptacjê");
define("_MD_EDITPICS_DEL_PIC","Skasuj plik");
define("_MD_EDITPICS_RVIEW","Wyzeruj licznik wy¶wietleñ");
define("_MD_EDITPICS_RVOTES","Wyzeruj ranking g³osowañ");
define("_MD_EDITPICS_DCOM","Skasuj komentarze");
define("_MD_EDITPICS_UPL_APPROVAL","Akceptacja zdjêæ");
define("_MD_EDITPICS_EDIT","Edytuj pliki");
define("_MD_EDITPICS_NEXT","Zobacz nastêpne zdjêcia");
define("_MD_EDITPICS_PREV","Zobacz poprzednie zdjêcia");
define("_MD_EDITPICS_NUMDIS","Ilo¶æ zdjêæ do wy¶wietlenia");
define("_MD_EDITPICS_APPLY","Zastosuj zmiany");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Czy na pewno chcesz skasowaæ ten album? Zostan± skasowane równie¿ wszystkie pliki i komentarze.");
define("_MD_INDEX_DEL","KASUJ");
define("_MD_INDEX_MOD","W£A¦CIWO¦CI");
define("_MD_INDEX_EDIT","EDYCJA PLIKÓW");
define("_MD_INDEX_STAT1","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, ods³ony: <b>[views]</b>");
define("_MD_INDEX_STAT2","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, ods³ony: <b>[views]</b>");
define("_MD_INDEX_USERS_GAL","galeria %s");
define("_MD_INDEX_STAT3","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, ods³ony: <b>[views]</b>");
define("_MD_INDEX_ULIST","Lista u¿ytkowników");
define("_MD_INDEX_NO_UGAL","Galerie u¿ytkowników nie istniej± lub nie masz do nich dostêpu");
define("_MD_INDEX_NALBS","albumów: %s");
define("_MD_INDEX_NPICS","plików: %s");
define("_MD_INDEX_LASTADD",", ostatnio dodany: %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Uaktualnij album %s");
define("_MD_MODIFYALB_GEN_SET","Ustawienia ogólne");
define("_MD_MODIFYALB_ALB_TITLE","Tytu³ albumu");
define("_MD_MODIFYALB_ALB_CAT","Kategoria albumu");
define("_MD_MODIFYALB_ALB_DESC","Opis albumu");
define("_MD_MODIFYALB_ALB_THUMB","Miniatury albumu");
define("_MD_MODIFYALB_ALB_PERM","Uprawnienia albumu");
define("_MD_MODIFYALB_CAN_VIEW","Mo¿e byæ ogl±dany przez");
define("_MD_MODIFYALB_CAN_UPLOAD","Go¶cie mog± przesy³aæ pliki");
define("_MD_MODIFYALB_CAN_COM","Go¶cie mog± dodawaæ komentarze");
define("_MD_MODIFYALB_CAN_RATE","Go¶cie mog± oceniaæ pliki");
define("_MD_MODIFYALB_USER_GAL","Galeria u¿ytkownika");
define("_MD_MODIFYALB_NO_CAT","* Bez kategorii *");
define("_MD_MODIFYALB_ALB_EMPTY","Album jest pusty");
define("_MD_MODIFYALB_LAST_UPL","Ostatnio przes³ane");
define("_MD_MODIFYALB_PUB_ALB","Wszyscy (album publiczny)");
define("_MD_MODIFYALB_ME_ONLY","Tylko ja");
define("_MD_MODIFYALB_OWNER_ONLY","Tylko w³a¶ciciel albumu: (%s)");
define("_MD_MODIFYALB_GROUP_ONLY","Cz³onkowie grupy: '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","Nie mo¿na modyfikowaæ ¿adnego albumu w bazie.");
define("_MD_MODIFYALB_UPDATE","Uaktualnij album");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","Niestety, ju¿ ocenia³e¶ ten plik");
define("_MD_RATE_OK","Twój g³os zosta³ zarejestrowany");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Wyszukiwanie zdjêæ");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Wysy³anie plików");
define("_MD_UPL_MAX_FSIZE","Maksymalny rozmiar pliku to %s KB");
define("_MD_UPL_ALBUM","Album");
define("_MD_UPL_PICTURE","Zdjêcie");
define("_MD_UPL_PIC_TITLE","Tytu³ zdjêcia");
define("_MD_UPL_DESCRIPTION","Opis zdjêcia");
define("_MD_UPL_KEYWORDS","S³owa kluczowe (oddzielone spacjami)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","Niestety, nie ma albumu do którego móg³by¶ przes³aæ pliki");
define("_MD_UPL_YOURALB","Twoje albumy");
define("_MD_UPL_ALBPUB","Albumy udostêpnione");
define("_MD_UPL_OUSERALB","Albumy innych u¿ytkowników");



?>
