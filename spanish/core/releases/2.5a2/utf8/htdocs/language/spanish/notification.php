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
define ('_NOT_NOTIFICATIONOPTIONS', 'Opciones de notificación ');
define ('_NOT_UPDATENOW', 'Actualizar');
define ('_NOT_UPDATEOPTIONS', 'Actualizar opciones de notificación');
define ('_NOT_CLEAR', 'Limpiar');
define ('_NOT_CHECKALL', 'Marcar todo');
define ('_NOT_MODULE', 'Módulo');
define ('_NOT_CATEGORY', 'Categoría');
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
define ('_NOT_DELETESUCCESS', 'Notificación(es) borrada(s) satisfactoriamente.');
define ('_NOT_UPDATEOK', 'Opciones de notificación actualizadas');
define ('_NOT_NOTIFICATIONMETHODIS', 'Método de notificación ');
define ('_NOT_EMAIL', 'Correo');
define ('_NOT_PM', 'Mensaje privado');
define ('_NOT_DISABLE', 'Deshabilitado');
define ('_NOT_CHANGE', 'Cambiar');
define ('_NOT_NOACCESS', 'No tiene permiso para acceder a esta página.');
// Text for module config options
define ('_NOT_ENABLE', 'Habilitar');
define ('_NOT_NOTIFICATION', 'Notificación');
define ('_NOT_CONFIG_ENABLED', 'Activar notificación');
define ('_NOT_CONFIG_ENABLEDDSC', 'El módulo permite recibir notificaciones de eventos específicos ocurridos.  Elija "Sí" para activarlo.');
define ('_NOT_CONFIG_EVENTS', 'Activar eventos específicos');
define ('_NOT_CONFIG_EVENTSDSC', 'Determine los eventos a los que podrá suscribirse el usuario.');
define ('_NOT_CONFIG_ENABLE', 'Activar notificación');
define ('_NOT_CONFIG_ENABLEDSC', 'Este módulo permitirá recibir notificación cuando un evento específico haya ocurrido. Determine si los usuarios deberían ser notificados en un bloque, en el módulo o en ambos. Para que la notificación del Bloque sea operativa, previamente debería haber activado dicho bloque.');
define ('_NOT_CONFIG_DISABLE', 'Desactivar notificación');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Activar en un bloque');
define ('_NOT_CONFIG_ENABLEINLINE', 'Activar en el módulo');
define ('_NOT_CONFIG_ENABLEBOTH', 'Activar en BLOQUE-MÓDULO');
// For notification about comment events
define ('_NOT_COMMENT_NOTIFY', 'Comentario agregado');
define ('_NOT_COMMENT_NOTIFYCAP', 'Recibir notificación cuando un nuevo comentario sea escrito.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Recibir notificación cuando un nuevo comentario sea escrito o aprobado.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Comentario agregado a {X_ITEM_TYPE}');
define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Comentario enviado');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Recibir notificación cuando un nuevo comentario sea enviado(aguardando aprobación).');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Receibir notificación cuando un nuevo comentario sea enviado(aguardando aprobación).');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Comentario enviado para {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define ('_NOT_BOOKMARK_NOTIFY', 'Seguimiento');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Realizar seguimiento de este contenido (sin notificación)');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Mantener un seguimiento de este contenido sin recibir ninguna notificación al respecto.');
// For user profile
// FIXME: These should be reworded a little...
define ('_NOT_NOTIFYMETHOD', 'Método de notificación: ¿de qué manera desea recibir la notificación cuando realice un seguimiento? (por ejemplo de un foro)');
define ('_NOT_METHOD_EMAIL', 'Correo (usar e-mail de mi perfil)');
define ('_NOT_METHOD_PM', 'Mensaje privado');
define ('_NOT_METHOD_DISABLE', 'Desactivado momentáneamente');
define ('_NOT_NOTIFYMODE', 'Modo de notificación por defecto');
define ('_NOT_MODE_SENDALWAYS', 'Recibir notificación de todas las actualizaciones seleccionadas');
define ('_NOT_MODE_SENDONCE', 'Recibir notifiación sólo una vez');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Notificármelo una vez y no volver a hacerlo hasta mi próxima visita');
define ('_NOT_NOTHINGTODELETE', 'No hay nada que borrar.');

?>