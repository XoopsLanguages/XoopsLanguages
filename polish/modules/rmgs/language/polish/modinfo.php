<?php
/***********************************************************************
* $Id: modinfo.php,v 0.1.0 16/12/2005 15:42 BitC3R0 Exp $              *
* -------------------------------------------------------              *
* RMSOFT Gallery System 2.0                                            *
* Sistema Avanzado de Galerías                                         *
* CopyRight (c) 2005 - 2006. Red Mxico Soft                           *
* http://www.redmexico.com.mx                                          *
* http://www.xoops-mexico.net                                          *
*                                                                      *
* This program is free software; you can redistribute it and/or        *
* modify it under the terms of the GNU General Public License as       *
* published by the Free Software Foundation; either version 2 of       *
* the License, or (at your option) any later version.                  *
*                                                                      *
* This program is distributed in the hope that it will be useful,      *
* but WITHOUT ANY WARRANTY; without even the implied warranty of       *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the         *
* GNU General Public License for more details.                         *
*                                                                      *
* You should have received a copy of the GNU General Public            *
* License along with this program; if not, write to the Free           *
* Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,       *
* MA 02111-1307 USA                                                    *
*                                                                      *
* -------------------------------------------------------              *
* modinfo.php: Archivo en lenguaje espaol para la informacin bsica  *
* del mdulo                                                           *
* -------------------------------------------------------              *
* @copyright:  2005 - 2006. BitC3R0.                                  *
* @autor: BitC3R0                                                      *
* @paquete: Archivo PHP                                                *
* @version: 0.1.0                                                      *
* @modificado: 16/12/2005 03:42:07 p.m.                                *
***********************************************************************/

define('_MI_RMGS_NAME','RMSOFT GS 2.0');
define('_MI_RMGS_DESC','Zaawansowany System Galerii i Album�w');

// Menu del Administrador
define('_MI_RMGS_ADM1','Aktualny status');
define('_MI_RMGS_ADM2','Kategorie');
define('_MI_RMGS_ADM3','Nowa Kategoria');
define('_MI_RMGS_ADM4','Wgraj Obrazy');
define('_MI_RMGS_ADM5','U�ytkownicy');
define('_MI_RMGS_ADM6','Wys�ano');

// Menu de Usuarios
define('_MI_RMGS_USR1','Moje Obrazy');
define('_MI_RMGS_USR2','Wgraj Obrazy');
define('_MI_RMGS_USR3','Szukaj Obraz�w');
define('_MI_RMGS_USR4','Ulubione');

// Configuración
define('_MI_RMGS_FDATE','Format Daty:');
define('_MI_RMGS_MODTITLE','Tytu� Modu�u:');
define('_MI_RMGS_UPLOADSQ','Liczba obraz�w do wgrania w jednym czasie:');
define('_MI_RMGS_STOREDIR','�cie�ka przechowywania obraz�w:');
define('_MI_RMGS_STOREDIRDESC','<span style=\'font-size: 10px;\'>�cie�ka musi mie� prawa zapisu. Je�li zmienisz t� �cie�k�musisz skopiowa� zawartos� skarego folderu, aby zapewni� funkcjonowanie obraz�w ze starego folderu.</span>');
define('_MI_RMGS_QUOTA','Poczatkowy limit dysku dla u�ytkownik�w:');
define('_MI_RMGS_QUOTADESC','<span style=\'font-size: 10px;\'>Wska� wielko�� w MB. W ka�dej chwili mozesz zmieni� t� warto�� dla ka�dego u�ytkownika.</span>');
define('_MI_RMGS_IMGWIDTH','Szeroko�� obrazu:');
define('_MI_RMGS_IMGHEIGHT','Wysoko�� obrazu:');
define('_MI_RMGS_THWIDTH','Szeroko�� miniatury:');
define('_MI_RMGS_THHEIGHT','Wysoko�� miniatury:');
define('_MI_RMGS_ACTIVEOTHER','Mo�liwe pozosta�e formaty:');
define('_MI_RMGS_ACTIVEOTHER_DESC','<span style="font-size: 10px;">Mo�liwe pola dla wprowadznia pozosta�ych format�w.</span>');
define('_MI_RMGS_OTHERLOCAL','Pozw�l na lokalne wprowadzanie pozosta�ych format�w:');
define('_MI_RMGS_OTHERSIZESLIMIT','Wielko�ci pozosta�ych format�w:');
define('_MI_RMGS_MINKEY','Minimalna d�ugo�� tagu (etykiety):');
define('_MI_RMGS_MAXKEY','Maksymalna d�ugo�� tagu (etykiety):');
define('_MI_RMGS_THUMSINDEX','Miniatur na stronie g��wnej:');
define('_MI_RMGS_CATNEWDAYS','Ilo�� dni, dla kt�rych kategoria jest now�:');
define('_MI_RMGS_COLUMNS','Kolumn w galerii:');
define('_MI_RMGS_IMGASNEW','Ilo�� dni, dla kt�rych obraz jest nowym:');
define('_MI_RMGS_IMGASUPDATE','Ilo�� dni, dla kt�rych obraz jest zaktualizowany:');
define('_MI_RMGS_ALLOWUPLOAD','Mo�liwo�� wgrywania obraz�w:');
define('_MI_RMGS_ALLOWSETS','Pozw�l na dodawanie album�w:');
define('_MI_RMGS_ALLOWPOSTAL','Tworzenie poczt�wek:');
define('_MI_RMGS_VOTEANONY','Zezwalaj anonimowym u�ytkownikom na g�osowanie:');
define('_MI_RMGS_POSTALDAYS','Ilos� dni pozostawania pcozt�wki w bazie danych:');
define('_MI_RMGS_POSTALANONYM','Zezwalaj anonimowym u�ytkownikom na wysy�anie poczt�wek:');
define('_MI_RMGS_EDITOR','Tytp Edytora:');
define('_MI_RMGS_MAILPOSTAL','Email dla poczt�wek:');
define('_MI_RMGS_MAILPOSTAL_DESC','Ten adres e-mail b�dzie wy�wietlony u odbiorcy.');
define('_MI_RMGS_HOMEACCESS','Minimum wy�wietle� do pokazania obrazu na stronie g��wnej:');
define('_MI_RMGS_HOMEWIDTH','Szeroko�� Obrazka na stronie g��wnej modu�u:');
define('_MI_RMGS_HOMEUPDATE','Ilo�� dni do generowania obraz�w na stronie g��wnej:');
define('_MI_RMGS_POPULAR','Zezw�l na rozwa�anie obraz�w jako popularnych:');
define('_MI_RMGS_BESTVOTES','Liczba g�os�w do rozwa�enia obrazy za najlepiej oceniane:');
define('_MI_RMGS_BESTVOTES_DESC','Kiedy obraz uzyska tak� ilo�� g�os�w b�dzie wy�wietlany w kategorii najwy�ej ocenione');

// Editores
define('_MI_RMGS_FORM_COMPACT','Compact');
define('_MI_RMGS_FORM_DHTML','DHTML');
define('_MI_RMGS_FORM_SPAW','Spaw Editor');
define('_MI_RMGS_FORM_HTMLAREA','HtmlArea Editor');
define('_MI_RMGS_FORM_FCK','FCK Editor');
define('_MI_RMGS_FORM_KOIVI','Koivi Editor');

// Bloques
define('_MI_RMGS_RANDOMBK','Przypadkowy obraz');
define('_MI_RMGS_BKRECENTS','Ostatnio dodany obraz');

define('_MI_RMGS_BKREC_IMAGES','poka� Obrazy:');
define('_MI_RMGS_BKPOPULARS','Najbardziej popularne');
define('_MI_RMGS_BKVOTED','Najlepiej ocenione');
define('_MI_RMGS_BKCATS','Kategorie');

//Added by Kaotik
define('_MI_RMGS_RANDOMIMGBK','Przypadkowe Obrazy');
define('_MI_RMGS_BKCOL_NUMBER','Liczba Kolumn:');
?>