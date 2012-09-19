<?php
/***********************************************************************
* $Id: modinfo.php,v 0.1.0 16/12/2005 15:42 BitC3R0 Exp $              *
* -------------------------------------------------------              *
* RMSOFT Gallery System 2.0                                            *
* Sistema Avanzado de GalerĂ­as                                         *
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

define('_MI_RMGS_NAME', 'RMSOFT GS 2.0');
define('_MI_RMGS_DESC', 'Zaawansowany System Galerii i Albumów');

// Menu del Administrador
define('_MI_RMGS_ADM1', 'Aktualny status');
define('_MI_RMGS_ADM2', 'Kategorie');
define('_MI_RMGS_ADM3', 'Nowa Kategoria');
define('_MI_RMGS_ADM4', 'Wgraj Obrazy');
define('_MI_RMGS_ADM5', 'Użytkownicy');
define('_MI_RMGS_ADM6', 'Wysłano');

// Menu de Usuarios
define('_MI_RMGS_USR1', 'Moje Obrazy');
define('_MI_RMGS_USR2', 'Wgraj Obrazy');
define('_MI_RMGS_USR3', 'Szukaj Obrazów');
define('_MI_RMGS_USR4', 'Ulubione');

// ConfiguraciĂłn
define('_MI_RMGS_FDATE', 'Format Daty:');
define('_MI_RMGS_MODTITLE', 'Tytuł Modułu:');
define('_MI_RMGS_UPLOADSQ', 'Liczba obrazów do wgrania w jednym czasie:');
define('_MI_RMGS_STOREDIR', 'Ścieżka przechowywania obrazów:');
define('_MI_RMGS_STOREDIRDESC', '<span style=\'font-size: 10px;\'>Ścieżka musi mieć prawa zapisu. Jeśli zmienisz tę ścieżkęmusisz skopiować zawartosć skarego folderu, aby zapewnić funkcjonowanie obrazów ze starego folderu.</span>');
define('_MI_RMGS_QUOTA', 'Poczatkowy limit dysku dla użytkowników:');
define('_MI_RMGS_QUOTADESC', '<span style=\'font-size: 10px;\'>Wskaż wielkość w MB. W każdej chwili mozesz zmienić tę wartość dla każdego użytkownika.</span>');
define('_MI_RMGS_IMGWIDTH', 'Szerokość obrazu:');
define('_MI_RMGS_IMGHEIGHT', 'Wysokość obrazu:');
define('_MI_RMGS_THWIDTH', 'Szerokość miniatury:');
define('_MI_RMGS_THHEIGHT', 'Wysokość miniatury:');
define('_MI_RMGS_ACTIVEOTHER', 'Możliwe pozostałe formaty:');
define('_MI_RMGS_ACTIVEOTHER_DESC', '<span style="font-size: 10px;">Możliwe pola dla wprowadznia pozostałych formatów.</span>');
define('_MI_RMGS_OTHERLOCAL', 'Pozwól na lokalne wprowadzanie pozostałych formatów:');
define('_MI_RMGS_OTHERSIZESLIMIT', 'Wielkości pozostałych formatów:');
define('_MI_RMGS_MINKEY', 'Minimalna długość tagu (etykiety):');
define('_MI_RMGS_MAXKEY', 'Maksymalna długość tagu (etykiety):');
define('_MI_RMGS_THUMSINDEX', 'Miniatur na stronie głównej:');
define('_MI_RMGS_CATNEWDAYS', 'Ilość dni, dla których kategoria jest nową:');
define('_MI_RMGS_COLUMNS', 'Kolumn w galerii:');
define('_MI_RMGS_IMGASNEW', 'Ilość dni, dla których obraz jest nowym:');
define('_MI_RMGS_IMGASUPDATE', 'Ilość dni, dla których obraz jest zaktualizowany:');
define('_MI_RMGS_ALLOWUPLOAD', 'Możliwość wgrywania obrazów:');
define('_MI_RMGS_ALLOWSETS', 'Pozwól na dodawanie albumów:');
define('_MI_RMGS_ALLOWPOSTAL', 'Tworzenie pocztówek:');
define('_MI_RMGS_VOTEANONY', 'Zezwalaj anonimowym użytkownikom na głosowanie:');
define('_MI_RMGS_POSTALDAYS', 'Ilosć dni pozostawania pcoztówki w bazie danych:');
define('_MI_RMGS_POSTALANONYM', 'Zezwalaj anonimowym użytkownikom na wysyłanie pocztówek:');
define('_MI_RMGS_EDITOR', 'Tytp Edytora:');
define('_MI_RMGS_MAILPOSTAL', 'Email dla pocztówek:');
define('_MI_RMGS_MAILPOSTAL_DESC', 'Ten adres e-mail będzie wyświetlony u odbiorcy.');
define('_MI_RMGS_HOMEACCESS', 'Minimum wyświetleń do pokazania obrazu na stronie głównej:');
define('_MI_RMGS_HOMEWIDTH', 'Szerokość Obrazka na stronie głównej modułu:');
define('_MI_RMGS_HOMEUPDATE', 'Ilość dni do generowania obrazów na stronie głównej:');
define('_MI_RMGS_POPULAR', 'Zezwól na rozważanie obrazów jako popularnych:');
define('_MI_RMGS_BESTVOTES', 'Liczba głosów do rozważenia obrazy za najlepiej oceniane:');
define('_MI_RMGS_BESTVOTES_DESC', 'Kiedy obraz uzyska taką ilość głosów będzie wyświetlany w kategorii najwyżej ocenione');

// Editores
define('_MI_RMGS_FORM_COMPACT', 'Compact');
define('_MI_RMGS_FORM_DHTML', 'DHTML');
define('_MI_RMGS_FORM_SPAW', 'Spaw Editor');
define('_MI_RMGS_FORM_HTMLAREA', 'HtmlArea Editor');
define('_MI_RMGS_FORM_FCK', 'FCK Editor');
define('_MI_RMGS_FORM_KOIVI', 'Koivi Editor');

// Bloques
define('_MI_RMGS_RANDOMBK', 'Przypadkowy obraz');
define('_MI_RMGS_BKRECENTS', 'Ostatnio dodany obraz');

define('_MI_RMGS_BKREC_IMAGES', 'pokaż Obrazy:');
define('_MI_RMGS_BKPOPULARS', 'Najbardziej popularne');
define('_MI_RMGS_BKVOTED', 'Najlepiej ocenione');
define('_MI_RMGS_BKCATS', 'Kategorie');

//Added by Kaotik
define('_MI_RMGS_RANDOMIMGBK', 'Przypadkowe Obrazy');
define('_MI_RMGS_BKCOL_NUMBER', 'Liczba Kolumn:');
?>