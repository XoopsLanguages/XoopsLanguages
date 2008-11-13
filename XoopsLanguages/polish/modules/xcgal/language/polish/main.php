<?php
// polish lang ver. 0.3 alpha by Stanis�aw Wolanin, admin@polfran.pl 
// $Id: main.php,v 1.1 2007/02/10 18:55:29 dap997 Exp $
//  ------------------------------------------------------------------------ //
//                    xcGallery - XOOPS Gallery Modul                        //
//                    Copyright (c) 2003 Derya Kiran                         //
//                           meeresstille@gmx.de                             //
//         http://www.myxoopsforge.org/modules/xfmod/project/?xcgal          //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10                                   //
//  (http://coppermine.sourceforge.net/)                                     //
//  developed by Gr�gory DEMAR                                               //
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
define("_MD_BYTES","Bajt�w");
define("_MD_KB","KB");
define("_MD_MB","MB");

define("_MD_NPICS","%s plik(�w)");
define("_MD_PICS","Plik�w");
define("_MD_ALBUM","Album");
define("_MD_ERROR","Wstecz");
define("_MD_KEYS","S�owa kluczowe");
define("_MD_CONTINUE","Dalej");

define("_MD_RANDOM","Losowo wybrane pliki");
define("_MD_LASTUP","Ostatnio dodane");
define("_MD_LASTCOM","Ostatnio dodane komentarze");
define("_MD_TOPN","Najpopularniejsze");
define("_MD_TOPRATED","Najwy�ej oceniane");
define("_MD_LASTHITS","Ostatnio ogl�dane");
define("_MD_SEARCH","Wyniki wyszukiwania");
define("_MD_USEARCH","Plik dodany przez ");
define("_MD_MOST_SENT","Najcz�ciej wysy�ane e-kartki");

define("_MD_ACCESS_DENIED","Nie masz uprawnie�, aby oglada� t� stron�.");
define("_MD_PERM_DENIED","Nie masz uprawnie�, aby wykona� te operacje.");
define("_MD_PARAM_MISSING","Skrypt zosta� wywo�any bez wymaganego parametru.");
define("_MD_NON_EXIST_AP","Wybrany plik lub album nie istnieje!");
define("_MD_QUOTA_EXCEEDED","Przekroczono limit miejsca. <br /><br />Tw�j przydzia�: [quota]K, Twoje pliki u�ywaja obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.");
define("_MD_GD_FILE_TYPE_ERR","Je�eli w u�yciu jest biblioteka GD, dozwolone formaty zdj�� to wy��cznie JPEG i PNG.");
define("_MD_INVALID_IMG","Zdj�cie, kt�re przes�ano, nie mo�e byc obs�u�one przez bibliotek� GD.");
define("_MD_RESIZE_FAILED","Nie mo�na stworzy� miniatury lub zdj�cia po�redniej wielko�ci.");
define("_MD_NO_IMG_TO_DISPLAY","Brak pliku do wy�wietlenia");
define("_MD_NO_EXIST_CAT","Wybrana kategoria nie istnieje");
define("_MD_ORPHAN_CAT","Kategoria nie ma ga��zi nadrz�dnej, uruchom menadzera kategorii, aby rozwi�za� ten problem.");
define("_MD_DIRECTORY_RO","Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mog� by� skasowane.");
define("_MD_PIC_IN_INVALID_ALBUM","Plik znajduje si� w nieistniejacym albumie (%s)!?");
define("_MD_GD_VERSION_ERR","PHP dzia�aj�ce na tym serwerze nie obs�uguje bibliteki GD version 2.x, prze�acz do GD wersja 1.x w konfiguracji galerii");
define("_MD_NO_GD_FOUND","PHP dzia�aj�ce na tym serwerze nie obs�uguje bibliteki GD, sprawd� czy ImageMagick lub Netpbm jest zainstalowany");
define("_MD_IM_ERROR","B��d biblioteki ImageMagick:");
define("_MD_IM_ERROR_CMD","B��d:");
define("_MD_IM_ERROR_CONV","B��d konwersji pliku:");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Przejd� do listy album�w");
define("_MD_THM_ALB_LL","Albumy");
define("_MD_THM_GAL_MYT","Do prywatnej galerii");
define("_MD_THM_GAL_MYL","Moja galeria");
define("_MD_THM_ADM_MT","Prze��cz w tryb administratora");
define("_MD_THM_ADM_ML","Tryb administratora");
define("_MD_THM_USER_MT","Prze��cz w tryb u�ytkownika");
define("_MD_THM_USER_ML","Tryb u�ytkownika");
define("_MD_THM_UPLT","Przes�anie pliku do albumu");
define("_MD_THM_UPLL","Przes�anie pliku");
define("_MD_THM_LAST_UPL","Ostatnio dodane");
define("_MD_THM_LAST_COM","Ostatnie komentarze");
define("_MD_THM_MOST_VIEW","Najpopularniejsze");
define("_MD_THM_TOP_RATE","Top Lista");
define("_MD_THM_SEARCH","Szukaj");
define("_MD_THM_UPL_APPR","Akceptacja zdj��");

define("_MD_THM_ALBMGR_LNK","Tworzenie / porz�dkowanie album�w");
define("_MD_THM_MODIFY_LNK","Modyfikacja moich album�w");
define("_MD_THM_CAT","Kategoria");
define("_MD_THM_ALB","Albumy");
define("_MD_THM_PIC","Pliki");
define("_MD_THM_ALBONPAGE","album�w: %d, stron: %d");
define("_MD_THM_DATE","DATA");
define("_MD_THM_NAME","NAZWA PLIKU");
define("_MD_THM_SORT_DA","Sortowanie wg daty rosn�co");
define("_MD_THM_SORT_DD","Sortowanie wg daty malej�co");
define("_MD_THM_SORT_NA","Sortowanie wg nazwy rosn�co");
define("_MD_THM_SORT_ND","Sortowanie wg nazwy malej�co");
define("_MD_THM_PICPAGE","plik�w: %d stron: %d");
define("_MD_THM_USERPAGE","u�ytkownik�w: %d, stron: %d");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","Nazwa pliku: ");
define("_MD_FUNC_FSIZE","Rozmiar pliku: ");
define("_MD_FUNC_DIM","Wymiary: ");
define("_MD_FUNC_DATE","Data dodania: ");
define("_MD_FUNC_COM","komentarzy: %s ");
define("_MD_FUNC_VIEW","ods�on: %s ");
define("_MD_FUNC_VOTE","(glos�w: %s)");
define("_MD_FUNC_SEND","%s razy");
define("_MD_FUNC_DELUSER","U�ytkownik skasowany");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Zako�czono prace administratora galerii...");
define("_MD_ADMIN_ENTER","Prze��czanie do trybu administratora galerii...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","Albumy musz� mie� nazw�!");
define("_MD_ALBMGR_CONF_MOD","Czy na pewno chcesz dokona� tych modyfikacji?");
define("_MD_ALBMGR_NO_CHANGE","Nie dokonale�/a� �adnej zmiany!");
define("_MD_ALBMGR_NEW_ALB","Nowy album");
define("_MD_ALBMGR_CONF_DEL1","Czy na pewno chcesz skasowa� ten album?");
define("_MD_ALBMGR_CONF_DEL2","Wszystkie pliki i komentarze, kt�re zawiera, zostan� stracone!");
define("_MD_ALBMGR_SELECT_FIRST","Wybierz najpierw album");
define("_MD_ALBMGR_ALB_MGR","Menadzer album�w");
define("_MD_ALBMGR_MY_GAL","* Moja galeria *");
define("_MD_ALBMGR_NO_CAT","* Bez kategorii *");
define("_MD_ALBMGR_DEL","Kasuj");
define("_MD_ALBMGR_NEW","Nowy");
define("_MD_ALBMGR_APPLY","Wykonaj modyfikacje");
define("_MD_ALBMGR_SELECT","Wybierz kategorie");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","Musisz poda� tytu� dla albumu!");
define("_MD_DB_NO_NEED","Zmiana nie jest konieczna.");
define("_MD_DB_ALB_UPDATED","Album zosta� uaktualniony");
define("_MD_DB_UNKOWN","Wybrany album nie istnieje, lub nie masz uprawnie� do przesy�ania");
define("_MD_DB_NO_PICUP","Plik nie zosta� dodany!<br /><br />Je�eli wybrano plik do przes�ania, sprawd� czy serwer na to zezwala...");
define("_MD_DB_ERR_MKDIR","Nie uda�o si� utworzy� katalogu %s !");
define("_MD_DB_DEST_DIR_RO","Katalog docelowy %s nie mo�e by� zapisany przez skrypt!");
define("_MD_DB_ERR_FEXT","Prawid�owe s� tylko pliki typu: <br /><br />%s.");
define("_MD_DB_ERR_MOVE","Nie mo�na przenie�� %s do %s !");
define("_MD_DB_ERR_PIC_SIZE","Plik, kt�ry przesy�asz, ma zbyt du�y rozmiar (maksymalnie dozwolony: %s x %s)!");
define("_MD_DB_ERR_FSIZE","Plik, kt�ry przesy�asz, ma zbyt du�y rozmiar (maksymalnie dozwolony: to %s KB)!");
define("_MD_DB_ERR_IMG_INVALID","Plik, kt�ry przesy�asz, jest w niedozwolonym formacie!");
define("_MD_DB_IMG_ALLOWED","mo�esz przes�a� tylko %s plik�w.");
define("_MD_DB_ERR_INSERT","Plik \'%s\' nie mo�e zosta� wstawiony do albumu ");
define("_MD_DB_UPLOAD_SUCC","Plik zosta� przes�any <br /><br />B�dzie widoczny po akceptacji przez administratora.");
define("_MD_DB_UPL_SUCC","Plik zosta� przes�any");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","Tytu�");
define("_MD_DEL_FS_PIC","pe�ny rozmiar");
define("_MD_DEL_DEL_SUCCESS","skasowano");
define("_MD_DEL_NS_PIC","normalny rozmiar");
define("_MD_DEL_ERR_DEL","nie mo�e byc skasowane");
define("_MD_DEL_THUMB","miniatura");
define("_MD_DEL_COMMENT","komentarz");
define("_MD_DEL_IMGALB","zdj�cie z albumu");
define("_MD_DEL_ALB_DEL_SUC","Skasowano album \'%s\' ");
define("_MD_DEL_ALBMGR","Menedzer album�w");
define("_MD_DEL_INVALID","Otrzymano niewlasciwe dane \'%s\'");
define("_MD_DEL_CREATE","Tworzenie albumu \'%s\'");
define("_MD_DEL_UPDATE","Uaktualnienie albumu: \'%s\' tytul: \'%s\' index: \'%s\'");
define("_MD_DEL_DELPIC","Kasowanie pliku");
define("_MD_DEL_DELALB","Kasowanie albumu");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","Czy na pewno chcesz skasowac ten plik? Zostana skasowane r�wniez komentarze do niego.");
define("_MD_DIS_DEL_PIC","SKASUJ TEN PLIK");
define("_MD_DIS_SIZE","%s x %s pikseli");
define("_MD_DIS_VIEWS","%s razy");
define("_MD_DIS_SLIDE","Pokaz slajd�w");
define("_MD_DIS_STOP_SLIDE","ZATRZYMAJ Pokaz slajd�w");
define("_MD_DIS_FULL","Kliknij, aby zobaczy� w pe�nym rozmiarze");
define("_MD_DIS_TITLE","Informacja o pliku");
define("_MD_DIS_FNAME","Nazwa pliku");
define("_MD_DIS_ANAME","Nazwa albumu");
define("_MD_DIS_RATING","Ocena (%s g�os�w)");
define("_MD_DIS_FSIZE","Rozmiar pliku");
define("_MD_DIS_DIMEMS","Wymiary");
define("_MD_DIS_DISPLAYED","Wy�wietle�");
define("_MD_DIS_CAMERA","Aparat fotograficzny");
define("_MD_DIS_DATA_TAKEN","Data zrobienia zdj�cia");
define("_MD_DIS_APERTURE","Przes�ona");
define("_MD_DIS_EXPTIME","Czas ekspozycji");
define("_MD_DIS_FLENGTH","Ogniskowa");
define("_MD_DIS_COMMENT","Komentarz");
define("_MD_DIS_BACK_TNPAGE","Powr�t do strony z miniaturami");
define("_MD_DIS_SHOW_PIC_INFO","Wy�wietl/Ukryj informacj� o pliku");
define("_MD_DIS_SEND_CARD","Wy�lij ten plik jako e-kartk�");
define("_MD_DIS_CARD_DISABLE","e-kartki s� wy��czone");
define("_MD_DIS_CARD_DISABLEMSG","Nie masz uprawnie� do wysy�ania e-kartek");
define("_MD_DIS_NEXT","Poprzedni plik");
define("_MD_DIS_PREV","Nast�pny plik");
define("_MD_DIS_PICPOS","PLIK %s/%s");
define("_MD_DIS_RATE_THIS","Oce� ten plik ");
define("_MD_DIS_NO_VOTE","(Brak g�os�w)");
define("_MD_DIS_RATINGCUR","(obecna ocena : %s / 5 g�os�w: %s)");
define("_MD_DIS_RUBBISH","Do niczego");
define("_MD_DIS_POOR","S�abe");
define("_MD_DIS_FAIR","Niez�e");
define("_MD_DIS_GOOD","Dobre");
define("_MD_DIS_EXCELLENT","Wspania�e");
define("_MD_DIS_GREAT","Doskona�e");
define("_MD_DIS_UPLOADER","Dodany przez");
define("_MD_DIS_EXIF_ERR","PHP dzia�aj�ce na tym serwerze nie czyta danych EXIF w plikach JPEG, prosz� wy�aczyc t� opcj� w konfiguracji galerii");
define("_MD_DIS_VIEW_MORE_BY","zobacz wiecej plik�w dodanych przez ");
define("_MD_DIS_SUBIP","IP u�ytkownika");
define("_MD_DIS_SENT","Wy�lij jako e-kartk�");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","Wy�lij e-kartk�");
define("_MD_CARD_INVALIDE_EMAIL","<b>Uwaga!</b> : niepoprawny adres e-mail !");
define("_MD_CARD_ECARD_TITLE","e-kartka od %s dla Ciebie");
define("_MD_CARD_VIEW_ECARD","Je�eli e-kartka nie wy�wietla si� poprawnie, kliknij ten link");
define("_MD_CARD_VIEW_MORE_PICS","Kliknij ten link, aby zobaczy� wi�cej zdj��!");
define("_MD_CARD_SEND_SUCCESS","Twoja e-kartka zosta�a wys�ana");
define("_MD_CARD_SEND_FAILED","Niestety, serwer nie mo�e wys�a� twojej e-kartki...");
define("_MD_CARD_FROM","Od");
define("_MD_CARD_YOUR_NAME","Twoje imi�");
define("_MD_CARD_YOUR_EMAIL","Tw�j adres e-mail");
define("_MD_CARD_TO","Do");
define("_MD_CARD_RCPT_NAME","Nazwa odbiorcy");
define("_MD_CARD_RCPT_EMAIL","Adres e-mail odbiorcy");
define("_MD_CARD_GREETINGS","Temat");
define("_MD_CARD_MESSAGE","Wiadomo��");
define("_MD_CARD_PERHOUR","Mo�esz wys�a� tylko %s e-kartek w ci�gu godziny. Zapraszamy p�niej");
define("_MD_CARD_NOTINDB","E-kartka nie mo�e by� dodana do bazy danych!<br />Prosz� powiadomi� administratora strony");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Informacje&nbsp;o pliku");
define("_MD_EDITPICS_TITLE","Tytu�");
define("_MD_EDITPICS_DESC","Opis");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s wy�wietle� - %s komentarzy");
define("_MD_EDITPICS_APPROVE","Akceptuj plik");
define("_MD_EDITPICS_PP_APPROVE","Odrocz akceptacj�");
define("_MD_EDITPICS_DEL_PIC","Skasuj plik");
define("_MD_EDITPICS_RVIEW","Wyzeruj licznik wy�wietle�");
define("_MD_EDITPICS_RVOTES","Wyzeruj ranking g�osowa�");
define("_MD_EDITPICS_DCOM","Skasuj komentarze");
define("_MD_EDITPICS_UPL_APPROVAL","Akceptacja zdj��");
define("_MD_EDITPICS_EDIT","Edytuj pliki");
define("_MD_EDITPICS_NEXT","Zobacz nast�pne zdj�cia");
define("_MD_EDITPICS_PREV","Zobacz poprzednie zdj�cia");
define("_MD_EDITPICS_NUMDIS","Ilo�� zdj�� do wy�wietlenia");
define("_MD_EDITPICS_APPLY","Zastosuj zmiany");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Czy na pewno chcesz skasowa� ten album? Zostan� skasowane r�wnie� wszystkie pliki i komentarze.");
define("_MD_INDEX_DEL","KASUJ");
define("_MD_INDEX_MOD","W�A�CIWO�CI");
define("_MD_INDEX_EDIT","EDYCJA PLIK�W");
define("_MD_INDEX_STAT1","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, ods�ony: <b>[views]</b>");
define("_MD_INDEX_STAT2","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, ods�ony: <b>[views]</b>");
define("_MD_INDEX_USERS_GAL","galeria %s");
define("_MD_INDEX_STAT3","pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, ods�ony: <b>[views]</b>");
define("_MD_INDEX_ULIST","Lista u�ytkownik�w");
define("_MD_INDEX_NO_UGAL","Galerie u�ytkownik�w nie istniej� lub nie masz do nich dost�pu");
define("_MD_INDEX_NALBS","album�w: %s");
define("_MD_INDEX_NPICS","plik�w: %s");
define("_MD_INDEX_LASTADD",", ostatnio dodany: %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Uaktualnij album %s");
define("_MD_MODIFYALB_GEN_SET","Ustawienia og�lne");
define("_MD_MODIFYALB_ALB_TITLE","Tytu� albumu");
define("_MD_MODIFYALB_ALB_CAT","Kategoria albumu");
define("_MD_MODIFYALB_ALB_DESC","Opis albumu");
define("_MD_MODIFYALB_ALB_THUMB","Miniatury albumu");
define("_MD_MODIFYALB_ALB_PERM","Uprawnienia albumu");
define("_MD_MODIFYALB_CAN_VIEW","Mo�e by� ogl�dany przez");
define("_MD_MODIFYALB_CAN_UPLOAD","Go�cie mog� przesy�a� pliki");
define("_MD_MODIFYALB_CAN_COM","Go�cie mog� dodawa� komentarze");
define("_MD_MODIFYALB_CAN_RATE","Go�cie mog� ocenia� pliki");
define("_MD_MODIFYALB_USER_GAL","Galeria u�ytkownika");
define("_MD_MODIFYALB_NO_CAT","* Bez kategorii *");
define("_MD_MODIFYALB_ALB_EMPTY","Album jest pusty");
define("_MD_MODIFYALB_LAST_UPL","Ostatnio przes�ane");
define("_MD_MODIFYALB_PUB_ALB","Wszyscy (album publiczny)");
define("_MD_MODIFYALB_ME_ONLY","Tylko ja");
define("_MD_MODIFYALB_OWNER_ONLY","Tylko w�a�ciciel albumu: (%s)");
define("_MD_MODIFYALB_GROUP_ONLY","Cz�onkowie grupy: '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","Nie mo�na modyfikowa� �adnego albumu w bazie.");
define("_MD_MODIFYALB_UPDATE","Uaktualnij album");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","Niestety, ju� ocenia�e� ten plik");
define("_MD_RATE_OK","Tw�j g�os zosta� zarejestrowany");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Wyszukiwanie zdj��");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Wysy�anie plik�w");
define("_MD_UPL_MAX_FSIZE","Maksymalny rozmiar pliku to %s KB");
define("_MD_UPL_ALBUM","Album");
define("_MD_UPL_PICTURE","Zdj�cie");
define("_MD_UPL_PIC_TITLE","Tytu� zdj�cia");
define("_MD_UPL_DESCRIPTION","Opis zdj�cia");
define("_MD_UPL_KEYWORDS","S�owa kluczowe (oddzielone spacjami)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","Niestety, nie ma albumu do kt�rego m�g�by� przes�a� pliki");
define("_MD_UPL_YOURALB","Twoje albumy");
define("_MD_UPL_ALBPUB","Albumy udost�pnione");
define("_MD_UPL_OUSERALB","Albumy innych u�ytkownik�w");



?>
