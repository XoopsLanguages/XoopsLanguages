<?php
// $Id: admin.php, see below 
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

// Menu
define("_AM_ACHAT_MODULEADMIN", "Administraci&oacute;n:");

define("_AM_ACHAT_CREDIT", "aChat 0.2 es una creaci&oacute;n de Niluge_KiWi<br />(c) Julio-Agosto 2006");
										
// Home
define("_AM_ACHAT_WELCOME", "Bienvenido al administrador del m&oacute;dulo aChat");
define("_AM_ACHAT_NBRE_MSG", "n&uacute;mero de mensajes en la base de datos");
define("_AM_ACHAT_MESSAGES", "mensajes");
define("_AM_ACHAT_EMPTY_FIELD", "Por favor llene los campos  solicitados");

// Permissions
define("_AM_ACHAT_PERM_CANPOST", "Puede eviar mensajes");

// Purge
define("_AM_ACHAT_PURGEPERNBRE", "Purgar por n&uacute;mero de mensajes");
define("_AM_ACHAT_PURGE_HOWMANY", "¿Cu&aacute;ntos mensajes purgar?");
define("_AM_ACHAT_PURGE_CREATELOG", "Crear un archivo log conteniendo los mensajes purgados");
define("_AM_ACHAT_PURGE_VALIDATE", "Esta seguro que quiere purgar&nbsp;");
define("_AM_ACHAT_PURGE_SUPPR_NOLOG", "sin crear logs&nbsp;");
define("_AM_ACHAT_PURGE_ERROR_WRITEFILE", "Ha ocurrido un error al momento de la creaci&oacute;n del archivo log, por favor verifique que la carpeta seleccionada en los par&aacute;metros del m&oacute;dulo existe y que los derechos de escritura son los correctos.");
define("_AM_ACHAT_PURGE_LOG_WRITTEN", "Archivo log creado");
define("_AM_ACHAT_PURGE_CANCELED", "Purgado anulado.");
define("_AM_ACHAT_PURGE_OK", "Purgado efectuado");
define("_AM_ACHAT_PURGE_NBREMSGDEL", "N&uacute;mero de mensajes suprimidos: ");
define("_AM_ACHAT_PURGE_ERROR", "Ha ocurrido un error al purgar los mensajes.");
define("_AM_ACHAT_PURGEPERDATE", "Purgar por fecha");
define("_AM_ACHAT_PURGE_KEEP_HMDAYS", "Guardar los mensajes de los x &uacute;ltimos d&aacute;as");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY", "los mensajes enviados anteriormente a los ");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY2", " &uacute;ltimos d&aacute;as");
define("_AM_ACHAT_PURGE_NOMSG", "Sin mensajes para suprimir.");

// Delete Messages
define("_AM_ACHAT_DELETEMSG","Suprimir un mensaje");
define("_AM_ACHAT_DELETEMSG_MID","Mid del mensaje a suprimir<br />(&uacute;ltimo n&uacute;mero mostrado al sobrevolar el alias del que env&iacute;a el mensaje,<br /> visible solamente para los admin)");
define("_AM_ACHAT_DELETEMSG_OK","Mensaje n&uacute;mero %u suprimido.");
define("_AM_ACHAT_DELETEMSG_ERROR","Ha ocurrido un error al eliminar el mensaje %u.");

// Utilities ( Clone ) ( from myHome module )
define("_AM_ACHAT_CLONE", "Clonado del m&oacute;dulo");

define("_AM_ACHAT_CLONENAME", "Nombre del cl&oacute;n<br /><i>
                                         <ul>
                                             <li>No m&aacute;s de 16 caracteres</li>
                                             <li>No caracteres especiales</li>
                                             <li>No nombre de m&oacute;dulo ya existente</li>
                                             <li>Letras capitales y espacios son válidos</li>
                                         </ul></i>
                                         Ejemplo: 'Mi Modulo 01'. ");

define("_AM_ACHAT_SUBMIT", "Clonar");
define("_AM_ACHAT_CLEAR", "Borrar");
define("_AM_ACHAT_CANCEL", "Anular");

define("_AM_ACHAT_CLONED", "M&oacute;dulo clonado exitosamente");
define("_AM_ACHAT_MODULEXISTS", "Este m&oacute;dulo ya existe");
define("_AM_ACHAT_NOTCLONED", "Los par&aacute;metros del clonado son incorrectos");
define("_AM_ACHAT_CLONE_TROUBLE", "Los par&aacute;metros de su servicio de alojamientos no permite el clonado.
					 Por favor vuelva a intentarlo en un medio que autorice el cambio de permisos de escritura.
                                         (Ejemplo : en local)");
?>