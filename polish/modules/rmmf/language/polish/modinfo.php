<?php
/*******************************************************************
* $Id: modinfo.php,v 1.0.5 24/05/2006 00:49 BitC3R0 Exp $          *
* -------------------------------------------------------          *
* RMSOFT MyFolder 1.0                                              *
* Módulo para el manejo de un portafolio profesional               *
* CopyRight Š 2006. Red México Soft                                *
* Autor: BitC3R0                                                   *
* http://www.redmexico.com.mx                                      *
* http://www.xoops-mexico.net                                      *
* --------------------------------------------                     *
* This program is free software; you can redistribute it and/or    *
* modify it under the terms of the GNU General Public License as   *
* published by the Free Software Foundation; either version 2 of   *
* the License, or (at your option) any later version.              *
*                                                                  *
* This program is distributed in the hope that it will be useful,  *
* but WITHOUT ANY WARRANTY; without even the implied warranty of   *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the     *
* GNU General Public License for more details.                     *
*                                                                  *
* You should have received a copy of the GNU General Public        *
* License along with this program; if not, write to the Free       *
* Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,   *
* MA 02111-1307 USA                                                *
*                                                                  *
* -------------------------------------------------------          *
* modinfo.php:                                                     *
* Archivo de lenguage para la configuración del módulo             *
* -------------------------------------------------------          *
* @copyright: Š 2006. BitC3R0.                                     *
* @autor: BitC3R0                                                  *
* @paquete: RMSOFT GS 2.0                                          *
* @version: 1.0.5                                                  *
* @Polskie tłumaczenie - Sylwester Pyrka www.ibr.org.pl            *
*******************************************************************/

define('_MI_RMMF_MODDESC', 'Moduł portfolio');


// OPCIONES DE CONFIGURACION
define('_MI_RMMF_EDITOR', 'Typ edytora:');
define('_MI_RMMF_FORM_COMPACT', 'Compact');
define('_MI_RMMF_FORM_DHTML', 'DHTML');
define('_MI_RMMF_FORM_SPAW', 'Spaw Editor');
define('_MI_RMMF_FORM_HTMLAREA', 'HtmlArea Editor');
define('_MI_RMMF_FORM_FCK', 'FCK Editor');
define('_MI_RMMF_FORM_KOIVI', 'Koivi Editor');
define('_MI_RMMF_FORMATDATE', 'Format daty:');
define('_MI_RMMF_IMGW', 'Szerokość obrazka:');
define('_MI_RMMF_IMGH', 'Wysokość obrazka:');
define('_MI_RMMF_THW', 'Szerokość miniatury:');
define('_MI_RMMF_THH', 'Wysokość miniatury');
define('_MI_RMMF_IMGSNUM', 'Liczba obrazków pracy:');
define('_MI_RMMF_STORE', 'Folder składowania obrazków:');
define('_MI_RMMF_STORE_DESC', 'Ten folder musi mieć uprawnienia zapisu!');
define('_MI_RMMF_TITLE', 'Nazwa modułu:');
define('_MI_RMMF_RECENTSNUM', 'Ilość prac do pokazywania w bloku wcześniejszych prac:');
define('_MI_RMMF_RECENTSNUM_DESC', '<span style="font-size: 10px;">Pokazać na stronie głównej modułu.</span>');
define('_MI_RMMF_FEATUREDNUM', 'Liczba wyróżnionych prac:');
define('_MI_RMMF_WORKSNUM', 'Prac na stronie:');

// BLOKI
define('_MI_RMMF_BKRECENT', 'Wcześniejsze prace');
define('_MI_RMMF_BKCOMMENTS', 'Komentarze');
define('_MI_RMMF_BKFATURED', 'Wyróżnione prace');

// OPCJE MENU
define('_MI_RMMF_AM1', 'Istniejące prace');
define('_MI_RMMF_AM2', 'Nowa praca');
define('_MI_RMMF_AM3', 'Kategorie');
define('_MI_RMMF_AM4', 'Nowa kategoria');
?>