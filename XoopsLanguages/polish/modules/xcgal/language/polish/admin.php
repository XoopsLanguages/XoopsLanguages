<?php
// polish lang ver. 0.3 alpha by Stanis�aw Wolanin, admin@polfran.pl 
// $Id: admin.php,v 1.1 2007/02/10 18:55:29 dap997 Exp $
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
define("_AM_CONFIG","xcGallery Konfiguracja");
define("_AM_GENERALCONF","Ustawienia og�lne");
define("_AM_CATMNGR","Kategorie");
define("_AM_USERMNGR","U�ytkownicy");
define("_AM_GROUPMNGR","Grupy");
define("_AM_ECARDMNGR","E-kartki");
define("_AM_PICAPP","Pliki do akceptacji");
define("_AM_BATCHADD","Wsadowe dodanie plik�w");

define("_AM_PARAM_MISSING","Script called without the required parameter(s).");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","xcGallery U�ytkownicy");
define("_AM_USERMGR_USHOW","Poka�, kto ma pliki/albumy");
define("_AM_USERMGR_USHOWDEL","Poka� albumy skasowanych u�ytkownik�w");
define("_AM_USERMGR_ULIST","Lista");
define("_AM_USERMGR_USER","U�ytkownik");
define("_AM_USERMGR_ALBUMS","Albumy");
define("_AM_USERMGR_PICS","Pliki");
define("_AM_USERMGR_QUOTA","Zajmuje na dysku");
define("_AM_USERMGR_ALB","Album");
define("_AM_USERMGR_DELUID","Del. user id");
define("_AM_USERMGR_OPT","Operacje");
define("_AM_USERMGR_NOTMOVE","** Don't Move **");
define("_AM_USERMGR_DEL","Skasuj");
define("_AM_USERMGR_PROPS","W�a�ciwo�ci");
define("_AM_USERMGR_EDITP","Edytuj Pliki");

define("_AM_USERMGR_UONPAGE","%d u�ytkownik�w na %d stronie");
define("_AM_USERMGR_NOUSER","Nie ma takiego u�ytkownika!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","Wyszukiwanie nowych plik�w");
define("_AM_SRCHNEW_SEL_DIR","Wybierz katalog");
define("_AM_SRCHNEW_SEL_DIR_MSG","Wybrana funkcja umo�liwia wsadowe dodawanie do galerii zdj�� kt�re zosta�y przes�ane na serwer.<br /><br />Wybierz katalog do kt�rego zosta�y przes�ane wybrane pliki");
define("_AM_SRCHNEW_NO_PIC_ADD","Nie ma tu pliku do dodania");
define("_AM_SRCHNEW_NEED_ONE_ALB","U�ycie tej funckji wymaga istnienia przynajmniej jednego albumu do kt�rego masz uprawnienia");
define("_AM_SRCHNEW_WARNING","Uwaga");
define("_AM_SRCHNEW_CHG_PERM","Skrypt nie mo�e zapisywa� plik�w do wybranego katalogu. Zmie� ustawienia na 755 lub 777 zanim spr�bujesz doda� pliki!");
define("_AM_SRCHNEW_TARGET_ALB","<b>Zapisuje zdj�cia do katalogu &quot;</b>%s<b>&quot; </b>%s");
define("_AM_SRCHNEW_FOLDER","Katalog");
define("_AM_SRCHNEW_IMAGE","Plik");
define("_AM_SRCHNEW_ALB","Album");
define("_AM_SRCHNEW_RESULT","Wynik");
define("_AM_SRCHNEW_DIR_RO","Nie mo�na tu zapisa�. ");
define("_AM_SRCHNEW_CANT_READ","Nie mo�na st�d odczyta�. ");
define("_AM_SRCHNEW_INSERT","Dodawanie nowych plik�w do galerii");
define("_AM_SRCHNEW_LIST_NEW","Lista nowych plik�w");
define("_AM_SRCHNEW_INS_SEL","Wstaw wybrane pliki");
define("_AM_SRCHNEW_NO_PIC","Nie znaleziono nowych plik�w");
define("_AM_SRCHNEW_PATIENT","Prosz� o cierpliwo��, skrypt potrzebuje czasu na dodanie zdj��");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : oznacza, �e zdj�cie zosta�o dodane<li><b>DP</b> : oznacza, �e zdj�cie jest zduplikowane i istnieje ju� w bazie<li><b>PB</b> : oznacza brak mo�liwo�ci dodania pliku. Sprawd� swoje uprawnienia do zapisywania katalog�w i plik�w<li>Je�li znaki OK, DP, PB nie pojawiaj� si�, kliknij na pliku, aby otrzyma� komunikat generowany przez PHP<li>Je�eli przegl�darka nie za�adowa�a strony, wci�nij klawisz F5, aby j� od�wie�y�</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","Nazwa grupy");
define("_AM_GRPMGR_QUOTA","Miejsce na dane");
define("_AM_GRPMGR_RATE","Mo�e ocenia� pliki");
define("_AM_GRPMGR_SENDCARD","Mo�e wysy�a� e-kartki");
define("_AM_GRPMGR_COM","Mo�e zamieszcza� komentarze");
define("_AM_GRPMGR_UPLOAD","Mo�e przesy�a� pliki");
define("_AM_GRPMGR_PRIVATE","Mo�e mie� galeri� osobist�");
define("_AM_GRPMGR_APPLY","Zastosuj zmiany");
define("_AM_GRPMGR_MANAGE","Zarz�dzanie grupami");
define("_AM_GRPMGR_PUB_APPR","Zgoda na pub. upl.(1)");
define("_AM_GRPMGR_PRIV_APPR","Zgoda na priv. upl.(2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> Przesy�anie zdj�� do albumu publicznego wymaga zgody administratora");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> Przesy�anie zdj�� do albumu u�ytkownika wymaga zgody administratora");
define("_AM_GRPMGR_NOTES","Notka");
define("_AM_GRPMGR_SYN","Synchronizacja");
define("_AM_GRPMGR_SYN_NOTE","Kliknij 'Synchronizacja' by uzgodni� grupy xcGallery z grupami Xoops");
define("_AM_GRPMGR_EMPTY","Tabela grup xcGallery by�a pusta!<br /><br />Utworzono domy�lne grupy.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","PBrak parametr�w do operacji '%s'!");
define("_AM_CAT_UNKOWN","Wybrana kategoria nie istnieje w bazie danych");
define("_AM_CAT_UGAL_CAT_RO","Galerie u�ytkownik�w nie mog� by� kasowane!");
define("_AM_CAT_MNGCAT","Zarz�dzaj kategoriami");
define("_AM_CAT_CONF_DEL","Czy napewno SKASOWA� t� kategori�");
define("_AM_CAT_CAT","Kategoria");
define("_AM_CAT_OP","Operacje");
define("_AM_CAT_MOVE","Przesu� do");
define("_AM_CAT_UPCR","Uaktualnij/stw�rz kategori�");
define("_AM_CAT_PARENT","Kategoria nadrz�dna");
define("_AM_CAT_TITLE","Tytu� kategorii");
define("_AM_CAT_DESC","COpis kategorii");
define("_AM_CAT_NOCAT","* Brak kategorii *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","xcGallery - zarz�dzanie e-kartkami");
define("_AM_CARDMGR_TIME","datA");
define("_AM_CARDMGR_SUNAME","nadawcA");
define("_AM_CARDMGR_SEMAIL","e-mail");
define("_AM_CARDMGR_SIP","IP");
define("_AM_CARDMGR_PID","ID pliku");
define("_AM_CARDMGR_STATUS","odebrane");
define("_AM_CARDMGR_DEL_SELECTED","Skasuj zaznaczon� e-kartk�");
define("_AM_CARDMGR_DEL_ALL","Skasuj wszystkie e-kartki");
define("_AM_CARDMGR_DEL_PICKED","Skasuj wszystkie zaznaczone e-kartki");
define("_AM_CARDMGR_DEL_UNPICKED","Skasuj wszystkie NIE zaznaczone e-kartki");
define("_AM_CARDMGR_CONPAGE","%d e-kartek na %d stronie(ach)");

?>
