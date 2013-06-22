<?php
// $Id$ 

define('_MI_POPNUPBLOG_APPL_DESC','');
define('_MI_POPNUPBLOG_1_LINE','Bitácora actualizada recientemente');
define('_MI_POPNUPBLOG_CONF_DESC','Descripción');
define('_MI_POPNUPBLOG_TRACKBACK','TrackBack');
define('_MI_POPNUPBLOG_REWRITE_TITLE','Use el motor de reescritura de Apache');
define('_MI_POPNUPBLOG_NAME','PopnupBLOG');
define('_MI_POPNUPBLOG_DESC','Popnup Blog');
define('_MI_POPNUPBLOG_UNUSE_UPDATE_PING','No utilizar ping de actualización');
define('_MI_POPNUPBLOG_UNUSE_TRACKBACK','No utilizar trackback');
define('_MI_POPNUPBLOG_APPL_WAITING_TITLE','Nueva aplicación PopnupBlog');
define('_MI_POPNUPBLOG_NAME_BIG_BLOCK','PopnupBlog');
define('_MI_POPNUPBLOG_USE_REWRITE','Usar reescritura');
define('_MI_POPNUPBLOG_UPDATE_PING','Usar ping de actualización');
define('_MI_POPNUPBLOG_1_LINE_DESC','Bloque de vista de 1 línea');
define('_MI_POPNUPBLOG_REWRITE_DESC','El usuario puede usar un url de blog: de /modules/popnupblog/view/index.php?uid=1 a /modules/popnupblog/view/1.html (expertos solamente)');
define('_MI_POPNUPBLOG_APPL_WAITING','Nueva aplicación');
define('_MI_POPNUPBLOG_UPDATE_PING_DESC','Usar ping de actulización');
define('_MI_POPNUPBLOG_WRITE','Escribir Bitácora');
define('_MI_POPNUPBLOG_PREFERENCE','Preferencias');
define('_MI_POPNUPBLOG_APPLY','Nueva Bitácora');
define('_MI_POPNUPBLOG_TRACKBACK_DESC','Activar característica Trackback');
define('_MI_POPNUPBLOG_UNUSE_REWRITE','No usar reescritura');
define('_MI_POPNUPBLOG_APPL_DENY','no permitir');
define('_MI_POPNUPBLOG_CONFIG_RSS_DEF','El usuario de popnup blog puede escribir');
define('_MI_POPNUPBLOG_USE_TRACKBACK','Usar trackback');
define('_MI_POPNUPBLOG_APPL_ALLOW','permitir');
define('_MI_POPNUPBLOG_APPL_OK','Permitir aplicación para el usuario');
define('_MI_POPNUPBLOG_USE_UPDATE_PING','Usar ping de actualización');
define('_MI_POPNUPBLOG_CONFIG_RSS_DESC','Descripción de esta bitácora en el canal rss');
// Add 2004.10.27 by yoshis
define('_MI_POPNUPBLOG_MAILSERVER','Servidor de correo');
define('_MI_POPNUPBLOG_MAILSERVER_DESC','Escriba el servidor de correo pop3 para recibir bitácora');
define('_MI_POPNUPBLOG_MAILUSER','Usuario de correo');
define('_MI_POPNUPBLOG_MAILUSER_DESC','Escribir el nombre de usuario de correo para recibir bitácora');
define('_MI_POPNUPBLOG_MAILPWD','Contraseña de correo');
define('_MI_POPNUPBLOG_MAILPWD_DESC','Escriba la contraseña de correo para recibir bitácora');
define('_MI_POPNUPBLOG_MAILADDR','Dirección de correo');
define('_MI_POPNUPBLOG_MAILADDR_DESC','Escriba la dirección de correo para recibir bitácora');
// Add 2005.01.22 by yoshis
define('_MI_POPNUPBLOG_GUESTBLOGID','Permitir Blog ID desde correo anónimo');
define('_MI_POPNUPBLOG_ACTVTYPE','Seleccionar tipo de activación para las bitácoras nuevas');
define('_MI_POPNUPBLOG_AUTOACTV','Activar automáticamente');
define('_MI_POPNUPBLOG_ADMINACTV','Activación por el administrador');
define('_MI_POPNUPBLOG_NEWUNOTIFY','¿Avisar por correo cuando se registre una nueva bitácora?');
define('_MI_POPNUPBLOG_SHOWNAME','Reemplazar el nombre del usuario con el nombre real');
// For Notify
define('_MI_POPNUPBLOG_BLOG_NOTIFY','Foro');
define('_MI_POPNUPBLOG_BLOG_NOTIFYDSC','Opciones de aviso que se aplican a la bitácora actual');

define('_MI_POPNUPBLOG_GLOBAL_NOTIFY','Global');
define('_MI_POPNUPBLOG_GLOBAL_NOTIFYDSC','Opciones globales de aviso de bitácora');

define('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFY','Nuevo artículo');
define('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFYCAP','Avíseme de cualquier artículo nuevo en la bitácora actual');
define('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFYDSC','Reciba un aviso cuando se publique cualquier nuevo mensaje en la bitácora actual.');
define('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-aviso : Nuevo artículo en la bitácora');

define('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFY','Nueva bitácora');
define('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFYCAP','Avíseme cuando se cree una nueva bitácora');
define('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFYDSC','Reciba un aviso cuando se cree una nueva bitácora');
define('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-aviso : Nueva bitácora');

define('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFY','Nuevo artículo');
define('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFYCAP','Avíseme de artículos nuevos');
define('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFYDSC','Reciba un aviso cuando se publique cualquier artículo nuevo');
define('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Artículo nuevo');

define('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFY','Nuevo artículo (Texto completo)');
define('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFYCAP','Avíseme de cualquier artículo nuevo (incluya el texto completo en el mensaje)');
define('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFYDSC','Reciba un aviso de texto completo cuando se publique cualquier mensaje nuevo.');
define('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Artículo nuevo (texto completo)');

?>
