<?php
// $Id: notification.php 2 2005-11-02 18:23:29Z skalpa $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Opcións de notificación ');
define('_NOT_UPDATENOW','Actualizar');
define('_NOT_UPDATEOPTIONS','Actualizar Opcións de notificación');

define('_NOT_CLEAR','Limpar');
define('_NOT_CHECKALL','Marcar Todo');
define('_NOT_MODULE','Módulo');
define('_NOT_CATEGORY','Categoría');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Nome');
define('_NOT_EVENT','Acontecemento');
define('_NOT_EVENTS','Acontecementos');
define('_NOT_ACTIVENOTIFICATIONS','Activar notificacións');
define('_NOT_NAMENOTAVAILABLE','Nome non dispoñíbel');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Nome NON dispoñíbel');
define('_NOT_ITEMTYPENOTAVAILABLE','Tipo non dispoñíbel');
define('_NOT_ITEMURLNOTAVAILABLE','URL non dispoñíbel');
define('_NOT_DELETINGNOTIFICATIONS','Borrando notificacións');
define('_NOT_DELETESUCCESS','Notificación(es) borrada(s) satisfactoriamente.');
define('_NOT_UPDATEOK','Opcións de notificación actualizadas');
define('_NOT_NOTIFICATIONMETHODIS','Método de notificación ');
define('_NOT_EMAIL','Correo');
define('_NOT_PM','Mensaxe Privada');
define('_NOT_DISABLE','Deshabilitado');
define('_NOT_CHANGE','Cambiar');

define('_NOT_NOACCESS','Non ten permiso para acceder a esta páxina.');

// Text for module config options

define('_NOT_ENABLE','Habilitar');
define('_NOT_NOTIFICATION','Notificación');

define('_NOT_CONFIG_ENABLED','Activar Notificación');
define('_NOT_CONFIG_ENABLEDDSC','Este módulo permitirá recibir notificación de acontecementos específicos sucedidos.  Escolla "Si" para activalo.');

define('_NOT_CONFIG_EVENTS','Activar acontecementos específicos');
define('_NOT_CONFIG_EVENTSDSC','Determine os eventos aos que poderá subscribirse o usuario.');

define('_NOT_CONFIG_ENABLE','Activar Notificación');
define('_NOT_CONFIG_ENABLEDSC','Este módulo permitirá recibir notificación de cando un acontecemento específico sucedeu. Determine se os usuarios deberían ser notificados nun Bloque, no Módulo ou ámbolos dous. Para que a notificación do Bloque sexa operativa, previamente debería ter activado dito bloque.');
define('_NOT_CONFIG_DISABLE','Desactivar Notificación');
define('_NOT_CONFIG_ENABLEBLOCK','Activar en BLOQUE');
define('_NOT_CONFIG_ENABLEINLINE','Activar en MÓDULO');
define('_NOT_CONFIG_ENABLEBOTH','Activar en BLOQUE-MÓDULO');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Comentario Engadido');
define('_NOT_COMMENT_NOTIFYCAP','Recibir notificación cando un novo comentario sexa escrito.');
define('_NOT_COMMENT_NOTIFYDSC','Recibir notificación cando un novo comentario sexa escrito o aprobado.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificación : Comentario engadido a {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Comentario Enviado');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Recibir notificación cando un novo comentario sexa enviado(agardando aprobación).');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Receibir notificación cando un novo comentario sexa enviado(agardando aprobación).');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificación : Comentario enviado para {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Axenda');
define('_NOT_BOOKMARK_NOTIFYCAP','Axendar este elemento (sin notificación)');
define('_NOT_BOOKMARK_NOTIFYDSC','Manter un seguimento deste elemento sen recibir ningunha notificación ao respecto.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Método de notificación: de que xeito desexa recibir a notificación cando realice un seguimento? (por exemplo dun foro)');
define('_NOT_METHOD_EMAIL','Correo (usar email do meu perfil)');
define('_NOT_METHOD_PM','Mensaxe Privada');
define('_NOT_METHOD_DISABLE','Deshabilitado momentaneamente');

define('_NOT_NOTIFYMODE','Modo de notificación por defecto');
define('_NOT_MODE_SENDALWAYS','Recibir notificación de tódalas actualizacións seleccionadas');
define('_NOT_MODE_SENDONCE','Ser notificado só unha vez');
define('_NOT_MODE_SENDONCEPERLOGIN','Notificarmo unha vez e non volver facelo até o meu próximo acceso');
?>