<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Misc Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: misc.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: es
// _CHARSET : ISO-8859-1
// Translator: XOOPS Translation Team
// RMV-NOTIFY
// Text for various templates...
define ('_NOT_NOTIFICATIONOPTIONS', 'Opciones de notificaci�n ');
define ('_NOT_UPDATENOW', 'Actualizar');
define ('_NOT_UPDATEOPTIONS', 'Actualizar opciones de notificaci�n');
define ('_NOT_CLEAR', 'Limpiar');
define ('_NOT_CHECKALL', 'Marcar todo');
define ('_NOT_MODULE', 'M�dulo');
define ('_NOT_CATEGORY', 'Categor�a');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Nombre');
define ('_NOT_EVENT', 'Evento');
define ('_NOT_EVENTS', 'Eventos');
define ('_NOT_ACTIVENOTIFICATIONS', 'Activar notificaciones');
define ('_NOT_NAMENOTAVAILABLE', 'Nombre no disponible');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Nombre no disponible');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Tipo no disponible');
define ('_NOT_ITEMURLNOTAVAILABLE', 'URL no disponible');
define ('_NOT_DELETINGNOTIFICATIONS', 'Borrando notificaciones');
define ('_NOT_DELETESUCCESS', 'Notificaci�n(es) borrada(s) satisfactoriamente.');
define ('_NOT_UPDATEOK', 'Opciones de notificaci�n actualizadas');
define ('_NOT_NOTIFICATIONMETHODIS', 'M�todo de notificaci�n ');
define ('_NOT_EMAIL', 'Correo');
define ('_NOT_PM', 'Mensaje privado');
define ('_NOT_DISABLE', 'Deshabilitado');
define ('_NOT_CHANGE', 'Cambiar');
define ('_NOT_NOACCESS', 'No tiene permiso para acceder a esta p�gina.');
// Text for module config options
define ('_NOT_ENABLE', 'Habilitar');
define ('_NOT_NOTIFICATION', 'Notificaci�n');
define ('_NOT_CONFIG_ENABLED', 'Activar notificaci�n');
define ('_NOT_CONFIG_ENABLEDDSC', 'El m�dulo permite recibir notificaciones de eventos espec�ficos ocurridos.  Elija "S�" para activarlo.');
define ('_NOT_CONFIG_EVENTS', 'Activar eventos espec�ficos');
define ('_NOT_CONFIG_EVENTSDSC', 'Determine los eventos a los que podr� suscribirse el usuario.');
define ('_NOT_CONFIG_ENABLE', 'Activar notificaci�n');
define ('_NOT_CONFIG_ENABLEDSC', 'Este m�dulo permitir� recibir notificaci�n cuando un evento espec�fico haya ocurrido. Determine si los usuarios deber�an ser notificados en un bloque, en el m�dulo o en ambos. Para que la notificaci�n del Bloque sea operativa, previamente deber�a haber activado dicho bloque.');
define ('_NOT_CONFIG_DISABLE', 'Desactivar notificaci�n');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Activar en un bloque');
define ('_NOT_CONFIG_ENABLEINLINE', 'Activar en el m�dulo');
define ('_NOT_CONFIG_ENABLEBOTH', 'Activar en BLOQUE-M�DULO');
// For notification about comment events
define ('_NOT_COMMENT_NOTIFY', 'Comentario agregado');
define ('_NOT_COMMENT_NOTIFYCAP', 'Recibir notificaci�n cuando un nuevo comentario sea escrito.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Recibir notificaci�n cuando un nuevo comentario sea escrito o aprobado.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Comentario agregado a {X_ITEM_TYPE}');
define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Comentario enviado');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Recibir notificaci�n cuando un nuevo comentario sea enviado(aguardando aprobaci�n).');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Receibir notificaci�n cuando un nuevo comentario sea enviado(aguardando aprobaci�n).');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Comentario enviado para {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define ('_NOT_BOOKMARK_NOTIFY', 'Seguimiento');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Realizar seguimiento de este contenido (sin notificaci�n)');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Mantener un seguimiento de este contenido sin recibir ninguna notificaci�n al respecto.');
// For user profile
// FIXME: These should be reworded a little...
define ('_NOT_NOTIFYMETHOD', 'M�todo de notificaci�n: �de qu� manera desea recibir la notificaci�n cuando realice un seguimiento? (por ejemplo de un foro)');
define ('_NOT_METHOD_EMAIL', 'Correo (usar e-mail de mi perfil)');
define ('_NOT_METHOD_PM', 'Mensaje privado');
define ('_NOT_METHOD_DISABLE', 'Desactivado moment�neamente');
define ('_NOT_NOTIFYMODE', 'Modo de notificaci�n por defecto');
define ('_NOT_MODE_SENDALWAYS', 'Recibir notificaci�n de todas las actualizaciones seleccionadas');
define ('_NOT_MODE_SENDONCE', 'Recibir notifiaci�n s�lo una vez');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Notific�rmelo una vez y no volver a hacerlo hasta mi pr�xima visita');
define ('_NOT_NOTHINGTODELETE', 'No hay nada que borrar.');

?>