<?php
// polish lang ver. 0.3 alpha by Stanisław Wolanin, admin@polfran.pl 
// $Id: admin.php,v 1.0 2003/11/7 17:53:00 derya Exp $
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
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
define("_AM_CONFIG","xcGallery Konfiguracja");
define("_AM_GENERALCONF","Ustawienia ogólne");
define("_AM_CATMNGR","Kategorie");
define("_AM_USERMNGR","Użytkownicy");
define("_AM_GROUPMNGR","Grupy");
define("_AM_BATCHADD","Wsadowe dodanie plików");
define("_AM_ECARDMNGR","E-kartki");
define("_AM_PICAPP","Pliki do akceptacji");

define("_AM_PARAM_MISSING","Wywołanie skryptu bez wymaganego parametru !");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","xcGallery Użytkownicy");
define("_AM_USERMGR_USHOW","Pokaż, kto ma pliki/albumy");
define("_AM_USERMGR_USHOWDEL","Pokaż albumy skasowanych użytkowników");
define("_AM_USERMGR_ULIST","Lista");
define("_AM_USERMGR_USER","Użytkownik");
define("_AM_USERMGR_ALBUMS","Albumy");
define("_AM_USERMGR_PICS","Pliki");
define("_AM_USERMGR_QUOTA","Zajmuje na dysku");
define("_AM_USERMGR_ALB","Album");
define("_AM_USERMGR_DELUID","Del. user id");
define("_AM_USERMGR_OPT","Operacje");
define("_AM_USERMGR_NOTMOVE","** Don't Move **");
define("_AM_USERMGR_DEL","Skasuj");
define("_AM_USERMGR_PROPS","Właściwości");
define("_AM_USERMGR_EDITP","Edytuj Pliki");

define("_AM_USERMGR_UONPAGE","%d użytkowników na %d stronie");
define("_AM_USERMGR_NOUSER","Nie ma takiego użytkownika!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","Wyszukiwanie nowych plików");
define("_AM_SRCHNEW_SEL_DIR","Wybierz katalog");
define("_AM_SRCHNEW_SEL_DIR_MSG","Wybrana funkcja umożliwia wsadowe dodawanie do galerii zdjęć które zostały przesłane na serwer.<br /><br />Wybierz katalog do którego zostały przesłane wybrane pliki");
define("_AM_SRCHNEW_NO_PIC_ADD","Nie ma tu pliku do dodania");
define("_AM_SRCHNEW_NEED_ONE_ALB","Użycie tej funckji wymaga istnienia przynajmniej jednego albumu do którego masz uprawnienia");
define("_AM_SRCHNEW_WARNING","Uwaga");
define("_AM_SRCHNEW_CHG_PERM","Skrypt nie może zapisywać plików do wybranego katalogu. Zmień ustawienia na 755 lub 777 zanim spróbujesz dodać pliki!");
define("_AM_SRCHNEW_TARGET_ALB","<b>Zapisuje zdjęcia z katalogu &quot;</b>%s<b>&quot; do albumu </b>%s");
define("_AM_SRCHNEW_FOLDER","Katalog");
define("_AM_SRCHNEW_IMAGE","Plik");
define("_AM_SRCHNEW_ALB","Album");
define("_AM_SRCHNEW_RESULT","Wynik");
define("_AM_SRCHNEW_DIR_RO","Nie można tu zapisać. ");
define("_AM_SRCHNEW_CANT_READ","Nie można st±d odczytać. ");
define("_AM_SRCHNEW_INSERT","Dodawanie nowych plików do galerii");
define("_AM_SRCHNEW_LIST_NEW","Lista nowych plików");
define("_AM_SRCHNEW_INS_SEL","Wstaw wybrane pliki");
define("_AM_SRCHNEW_NO_PIC","Nie znaleziono nowych plików");
define("_AM_SRCHNEW_PATIENT","Proszę o cierpliwość, skrypt potrzebuje czasu na dodanie zdjęć");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : oznacza, że zdjęcie zostało dodane<li><b>DP</b> : oznacza, że zdjęcie jest zduplikowane i istnieje już w bazie<li><b>PB</b> : oznacza brak możliwości dodania pliku. Sprawdź swoje uprawnienia do zapisywania katalogów i plików<li>Jeśli znaki OK, DP, PB nie pojawiają się, kliknij na pliku, aby otrzymać komunikat generowany przez PHP<li>Jeżeli przeglądarka nie załadowała strony, wciśnij klawisz F5, aby ją odświeżyć</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","Nazwa grupy");
define("_AM_GRPMGR_QUOTA","Miejsce na dane");
define("_AM_GRPMGR_RATE","Może oceniać pliki");
define("_AM_GRPMGR_SENDCARD","Może wysyłać e-kartki");
define("_AM_GRPMGR_COM","Może zamieszczać komentarze");
define("_AM_GRPMGR_UPLOAD","Może przesyłać pliki");
define("_AM_GRPMGR_PRIVATE","Może mieć galerię osobist±");
define("_AM_GRPMGR_APPLY","Zastosuj zmiany");
define("_AM_GRPMGR_MANAGE","Zarządzanie grupami");
define("_AM_GRPMGR_PUB_APPR","Zgoda na pub. upl.(1)");
define("_AM_GRPMGR_PRIV_APPR","Zgoda na priv. upl.(2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> Przesyłanie zdjęć do albumu publicznego wymaga zgody administratora");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> Przesyłanie zdjęć do albumu użytkownika wymaga zgody administratora");
define("_AM_GRPMGR_NOTES","Notka");
define("_AM_GRPMGR_SYN","Synchronizacja");
define("_AM_GRPMGR_SYN_NOTE","Kliknij 'Synchronizacja' by uzgodnić grupy xcGallery z grupami Xoops");
define("_AM_GRPMGR_EMPTY","Tabela grup xcGallery była pusta!<br /><br />Utworzono domyślne grupy.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","Brak parametrów do operacji '%s'!");
define("_AM_CAT_UNKOWN","Wybrana kategoria nie istnieje w bazie danych");
define("_AM_CAT_UGAL_CAT_RO","Galerie użytkowników nie mogą być kasowane!");
define("_AM_CAT_MNGCAT","Zarządzaj kategoriami");
define("_AM_CAT_CONF_DEL","Czy napewno SKASOWAĆ tę kategorię");
define("_AM_CAT_CAT","Kategoria");
define("_AM_CAT_OP","Operacje");
define("_AM_CAT_MOVE","Przesuń do");
define("_AM_CAT_UPCR","Uaktualnij/stwórz kategorię");
define("_AM_CAT_PARENT","Kategoria nadrzędna");
define("_AM_CAT_TITLE","Tytuł kategorii");
define("_AM_CAT_DESC","Opis kategorii");
define("_AM_CAT_NOCAT","* Brak kategorii *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","xcGallery - zarządzanie e-kartkami");
define("_AM_CARDMGR_TIME","data");
define("_AM_CARDMGR_SUNAME","nadawca");
define("_AM_CARDMGR_SEMAIL","e-mail");
define("_AM_CARDMGR_SIP","IP");
define("_AM_CARDMGR_PID","ID pliku");
define("_AM_CARDMGR_STATUS","odebrane");
define("_AM_CARDMGR_DEL_SELECTED","Skasuj zaznaczoną e-kartkę");
define("_AM_CARDMGR_DEL_ALL","Skasuj wszystkie e-kartki");
define("_AM_CARDMGR_DEL_PICKED","Skasuj wszystkie zaznaczone e-kartki");
define("_AM_CARDMGR_DEL_UNPICKED","Skasuj wszystkie NIE zaznaczone e-kartki");
define("_AM_CARDMGR_CONPAGE","%d e-kartek na %d stronie(ach)");

?>
