<?php
// $Id: notification.php 2 2005-11-02 18:23:29Z skalpa $

// RMV-NOTIFY

// Text for various templates...

define ('_NOT_NOTIFICATIONOPTIONS', 'Opci�ns de notificaci�n ');
define ('_NOT_UPDATENOW', 'Actualizar');
define ('_NOT_UPDATEOPTIONS', 'Actualizar Opci�ns de notificaci�n');

define ('_NOT_CLEAR', 'Limpar');
define ('_NOT_CHECKALL', 'Marcar Todo');
define ('_NOT_MODULE', 'M�dulo');
define ('_NOT_CATEGORY', 'Categor�a');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Nome');
define ('_NOT_EVENT', 'Acontecemento');
define ('_NOT_EVENTS', 'Acontecementos');
define ('_NOT_ACTIVENOTIFICATIONS', 'Activar notificaci�ns');
define ('_NOT_NAMENOTAVAILABLE', 'Nome non dispo��bel');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Nome NON dispo��bel');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Tipo non dispo��bel');
define ('_NOT_ITEMURLNOTAVAILABLE', 'URL non dispo��bel');
define ('_NOT_DELETINGNOTIFICATIONS', 'Borrando notificaci�ns');
define ('_NOT_DELETESUCCESS', 'Notificaci�n(es) borrada(s) satisfactoriamente.');
define ('_NOT_UPDATEOK', 'Opci�ns de notificaci�n actualizadas');
define ('_NOT_NOTIFICATIONMETHODIS', 'M�todo de notificaci�n ');
define ('_NOT_EMAIL', 'Correo');
define ('_NOT_PM', 'Mensaxe Privada');
define ('_NOT_DISABLE', 'Deshabilitado');
define ('_NOT_CHANGE', 'Cambiar');

define ('_NOT_NOACCESS', 'Non ten permiso para acceder a esta p�xina.');

// Text for module config options

define ('_NOT_ENABLE', 'Habilitar');
define ('_NOT_NOTIFICATION', 'Notificaci�n');

define ('_NOT_CONFIG_ENABLED', 'Activar Notificaci�n');
define ('_NOT_CONFIG_ENABLEDDSC', 'Este m�dulo permitir� recibir notificaci�n de acontecementos espec�ficos sucedidos.  Escolla "Si" para activalo.');

define ('_NOT_CONFIG_EVENTS', 'Activar acontecementos espec�ficos');
define ('_NOT_CONFIG_EVENTSDSC', 'Determine os eventos aos que poder� subscribirse o usuario.');

define ('_NOT_CONFIG_ENABLE', 'Activar Notificaci�n');
define ('_NOT_CONFIG_ENABLEDSC', 'Este m�dulo permitir� recibir notificaci�n de cando un acontecemento espec�fico sucedeu. Determine se os usuarios deber�an ser notificados nun Bloque, no M�dulo ou �mbolos dous. Para que a notificaci�n do Bloque sexa operativa, previamente deber�a ter activado dito bloque.');
define ('_NOT_CONFIG_DISABLE', 'Desactivar Notificaci�n');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Activar en BLOQUE');
define ('_NOT_CONFIG_ENABLEINLINE', 'Activar en M�DULO');
define ('_NOT_CONFIG_ENABLEBOTH', 'Activar en BLOQUE-M�DULO');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Comentario Engadido');
define ('_NOT_COMMENT_NOTIFYCAP', 'Recibir notificaci�n cando un novo comentario sexa escrito.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Recibir notificaci�n cando un novo comentario sexa escrito o aprobado.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Comentario engadido a {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Comentario Enviado');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Recibir notificaci�n cando un novo comentario sexa enviado(agardando aprobaci�n).');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Receibir notificaci�n cando un novo comentario sexa enviado(agardando aprobaci�n).');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Comentario enviado para {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Axenda');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Axendar este elemento (sin notificaci�n)');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Manter un seguimento deste elemento sen recibir ningunha notificaci�n ao respecto.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'M�todo de notificaci�n: de que xeito desexa recibir a notificaci�n cando realice un seguimento? (por exemplo dun foro)');
define ('_NOT_METHOD_EMAIL', 'Correo (usar email do meu perfil)');
define ('_NOT_METHOD_PM', 'Mensaxe Privada');
define ('_NOT_METHOD_DISABLE', 'Deshabilitado momentaneamente');

define ('_NOT_NOTIFYMODE', 'Modo de notificaci�n por defecto');
define ('_NOT_MODE_SENDALWAYS', 'Recibir notificaci�n de t�dalas actualizaci�ns seleccionadas');
define ('_NOT_MODE_SENDONCE', 'Ser notificado s� unha vez');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Notificarmo unha vez e non volver facelo at� o meu pr�ximo acceso');
?>