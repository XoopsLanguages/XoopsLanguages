<?php
// $Id: modfile.php, see below 
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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

// By JAWi Tugal
// v 0.2 2006/08/29 23:37:18

// Module Info

// The name of this module
define('_MI_ACHAT_NAME', 'aChat');
// A brief description of this module
define('_MI_ACHAT_DESC','un m&oacute;dulo de chat, ¡Tagboard con AJAX!');

// Menu
define("_MI_ACHAT_HOME", "Inicio");
define("_MI_ACHAT_PURGE", "Purgar");
define("_MI_ACHAT_PERM", "Permisos");
define("_MI_ACHAT_UTILITIES", "Utilidades");

define("_MI_ACHAT_SMNAME1","Ver los logs");
define("_MI_ACHAT_SMNAME2","Ver el historial");

define("_MI_ACHAT_GOTO_INDEX","Ir al m&oacute;dulo");
define("_MI_ACHAT_HELP","Ayuda");

// Templates
define('_MI_ACHAT_TDESC0',"El template principal que se encarga de mostar el m&oacute;dulo en p&aacute;gina completa.");
define('_MI_ACHAT_TDESC1',"El template que se encarga de mostrar el bucle de los mensajes.");
define('_MI_ACHAT_TDESC2',"El template que se encarga de mostrar los logs al momento de purgar con log.");

// Blocks
define('_MI_ACHAT_BNAME1','aChat');
define('_MI_ACHAT_BDESC1','Bloque que muestra aChat');
define('_MI_ACHAT_BNAME2','aChat est&aacute;tico');
define('_MI_ACHAT_BDESC2',"Bloque que muestra los &uacute;ltimos mensajes, sin auto actulizaci&oacute;n y sin formulario de env&iacute;o");

// Config
define('_MI_ACHAT_NBRE_MSG_AFF','N&uacute;mero de mensajes a mostrar');
define('_MI_ACHAT_NBRE_MSG_AFFDSC','N&uacute;mero de mensajes enviados que se muestran en las p&aacute;ginas del m&oacute;dulo aChat (index.php)');

define('_MI_ACHAT_TMP_REFRESH','Tiempo de actualizaci&oacute;n de los mensajes');
define('_MI_ACHAT_TMP_REFRESHDSC','(en segundos)<br /> Puede colocar un n&uacute;mero con decimal.<br />Por ejemplo: 1.5<br />CUIDADO: m&aacute;s de 3 segundos provoca un bug.');

define('_MI_ACHAT_USER_SMILIES','¿Utilizar caritas (smilies)?');
define('_MI_ACHAT_USE_BBCODES','¿Utilizar BBCodes?');

define('_MI_ACHAT_ALLOWED_COLORS','Colores disponibles para los mensajes');
define('_MI_ACHAT_ALLOWED_COLORSDESC','C&oacute;digo de color RGB hexadecimal, separados con |, sin el # por delante.<br />Ejemplo : "000000|FFFFFF" abilitar&aacute; colores en negro y blanco.<br />Dejar vac&iacute;o para usar los 8 colores por defecto.');

define('_MI_ACHAT_PURGE_FOLDER','Carpeta que contiene los archivos logs generados al purgar.');
define('_MI_ACHAT_PURGE_FOLDERDESC','Dejar vac&iacute;o para usar la carpeta por defecto (modules/aChat/logs)');

define('_MI_ACHAT_NICK4GUESTS','¿Permitir que los usuario an&oacute;nimos coloquen un alias?');
define('_MI_ACHAT_NICK4GUESTSDESC',"Los alias de los usuarios an&oacute;nimos son grises para diferenciarlos (color modificable en la hoja de estilos css (modules/aChat/templates/aChat.css)");
?>