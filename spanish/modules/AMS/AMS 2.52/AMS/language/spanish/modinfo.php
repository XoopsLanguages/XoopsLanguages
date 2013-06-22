<?php
// $Id$
// Module Info

// The name of this module
define("_AMS_MI_NEWS_NAME","Artículos");

// A brief description of this module
define("_AMS_MI_NEWS_DESC","Crear una sección de artículos al estilo Slashdot, donde los usuarios puedan enviar artículos y comentarios.");

// Names of blocks for this module (Not all module has blocks)
define("_AMS_MI_NEWS_BNAME1","Temas de las Noticias");
define("_AMS_MI_NEWS_BNAME3","Gran Historia");
define("_AMS_MI_NEWS_BNAME4","Noticias Top");
define("_AMS_MI_NEWS_BNAME5","Noticias Recientes");
define("_AMS_MI_NEWS_BNAME6","Moderar Noticias");
define("_AMS_MI_NEWS_BNAME7","Navegar por los temas");
define("_AMS_MI_NEWS_BNAME8","Autores Más Activos");
define("_AMS_MI_NEWS_BNAME9","Autores Más Leídos");
define("_AMS_MI_NEWS_BNAME10","Autores Más Valorados");
define("_AMS_MI_NEWS_BNAME11","Artículos Más Valorados");
define("_AMS_MI_NEWS_BNAME12","AMS Spotlight");

// Sub menus in main menu block
define("_AMS_MI_NEWS_SMNAME1","Enviar Artículo");
define("_AMS_MI_NEWS_SMNAME2","Archivo");

// Names of admin menu items
define("_AMS_MI_NEWS_ADMENU2","Administrador de Temas");
define("_AMS_MI_NEWS_ADMENU3","Administrar Artículos");
define("_AMS_MI_NEWS_GROUPPERMS","Enviar/Aprobar Permisos");

// Title of config items
define("_AMS_MI_STORYHOME","Elija el número de artículos a mostrar en la página principal");
define("_AMS_MI_STORYCOUNTTOPIC","Elija el número de artículos a mostrar en la página de Temas");
define("_AMS_MI_NOTIFYSUBMIT","Elija Sí para enviar un mensaje de notificación al webmaster encima de los nuevos envíos");
define("_AMS_MI_DISPLAYNAV","Elija Sí para mostrar una caja de navegación encima de cada página del módulo");
define("_AMS_MI_AUTOAPPROVE","¿Auto-aprobar artículos sin la intervención del admin?");
define("_AMS_MI_ALLOWEDSUBMITGROUPS","Grupos que pueden Enviar Artículos");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS","Grupos que pueden Aprobar Artículos");
define("_AMS_MI_NEWSDISPLAY","Plantilla de visualización del Artículo");
define("_AMS_MI_NAMEDISPLAY","Nombre del Autor");
define("_AMS_MI_COLUMNMODE","Columnas");
define("_AMS_MI_STORYCOUNTADMIN","Número de artículos nuevos a mostrar en el área de administración: ");
define("_AMS_MI_UPLOADFILESIZE","Máx. tamaño de Subida (KB) 1048576 = 1 Meg");
define("_AMS_MI_UPLOADGROUPS","Grupos autorizados para subir");
define("_AMS_MI_MAXITEMS","Máximos elementos permitidos");
define("_AMS_MI_MAXITEMDESC","Aquí configurará el número máximo de elementos seleccionables para un usuario en la caja de navegación del Índice o de las páginas de Temas");


// Description of each config items
define("_AMS_MI_STORYHOMEDSC","Aquí controlará el número de elementos mostrados en la parte superior de la página (ejemplo: cuando ningún tema sea seleccionado)");
define("_AMS_MI_NOTIFYSUBMITDSC","");
define("_AMS_MI_DISPLAYNAVDSC","");
define("_AMS_MI_AUTOAPPROVEDSC","");
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC","Los grupos seleccionados podrán enviar artículos");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC","Los grupos seleccionados podrán aprobar artículos");
define("_AMS_MI_NEWSDISPLAYDESC","La Vista Clásica mostrará todos los artículos ordenados por fecha de publicación. Los artículos por tema agruparán a los artículos según su tema mostrando en la parte superior al último artículo publicado y el título de los demás (anteriores)");
define("_AMS_MI_ADISPLAYNAMEDSC","Elija cómo se mostrará el nombre del autor");
define("_AMS_MI_COLUMNMODE_DESC","Podrá elegir el número de columnas usadas en la página de artículos");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_STORYCOUNTTOPIC_DESC","Esto determinará cuántos elementos serán mostrados en cada Tema. (no en la portada)");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Elija los grupos que podrán subir contenido al servidor");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC","Clásica");
define("_AMS_MI_NEWSBYTOPIC","Por Tema");
define("_AMS_MI_DISPLAYNAME1","Nombre de Usuario");
define("_AMS_MI_DISPLAYNAME2","Nombre Real");
define("_AMS_MI_DISPLAYNAME3","No mostrar Autor");
define("_AMS_MI_UPLOAD_GROUP1","Autores y Aprobadores");
define("_AMS_MI_UPLOAD_GROUP2","Sólo Aprobadores");
define("_AMS_MI_UPLOAD_GROUP3","Subidas Deshabilitadas");
define("_AMS_MI_INDEX_NAME","Nombre del Index");
define("_AMS_MI_INDEX_DESC","Esto será mostrado en el nivel superior del menú de navegación de Temas y en la vista artículo");

// Text for notifications

define("_AMS_MI_NEWS_GLOBAL_NOTIFY","Global");
define("_AMS_MI_NEWS_GLOBAL_NOTIFYDSC","Opciones de notificación Global para las noticias.");

define("_AMS_MI_NEWS_STORY_NOTIFY","Historia");
define("_AMS_MI_NEWS_STORY_NOTIFYDSC","Opciones de notificación que se aplican a la historia actual.");

define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY","Nuevo Tema");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP","Notificarme la creación de nuevos temas.");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC","Recibir notificación de la creación de nuevos temas.");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificar : Nuevo tema de noticias");

define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY","Nueva historia enviada");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP","Notificarme el envío de cualquier artículo enviado (en espera de aprobación).");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC","Recibir notificación de cualquier nuevo artículo enviado (en espera de aprobación).");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificar : Nuevo artículo enviado");

define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY","Nueva Historia");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP","Notificarme el envío de cualquier artículo nuevo.");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC","Recibir notificación de cualquier artículo nuevo.");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificar : Artículo Nuevo");

define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFY","Historia Aprobada");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP","Notificarme la aprobación de esta historia.");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC","Recibir notificación de cuando este artículo sea aprobado.");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificar : Artículo Aprobado");

define("_AMS_MI_RESTRICTINDEX","¿Restringir Temas a la página de Inicio?");
define("_AMS_MI_RESTRICTINDEXDSC","Si elige sí, los usuarios sólo verán los artículos listados en el índice de los temas. Tendrán acceso a los artículos según hayan sido marcados los permisos");

define("_AMS_MI_ANONYMOUS_VOTE","¿Podrán los usuarios anónimos valorar los artículos?");
define("_AMS_MI_ANONYMOUS_VOTE_DESC","Si está activado, los usuarios anónimos podrán valorar artículos");

define("_AMS_MI_AUDIENCE","Niveles de Audiencia");

define("_AMS_MI_SPOTLIGHT","Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS","Artículos Candidatos al Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC","Este es el número de artículos que serán listados en la página de configuración del spotlight como seleccionables para los artículos categorizados como parte de spotlight");

define("_AMS_MI_EDITOR","Editor");
define("_AMS_MI_EDITOR_DESC","Elija qué editor desea usar en el formulario de envío - Los editores distintos al incluido por defecto DEBEN ser instalados independientemente por usted.");
define("_AMS_MI_EDITOR_DEFAULT","El que usa Xoops por Defecto");
define("_AMS_MI_EDITOR_DHTML","DHTML");
define("_AMS_MI_EDITOR_HTMLAREA","Editor HtmlArea");
define("_AMS_MI_EDITOR_FCK","Editor FCK");
define("_AMS_MI_EDITOR_KOIVI","Editor Koivi");
define("_AMS_MI_EDITOR_TINYMCE","Editor TinyMCE");

define("_AMS_MI_EDITOR_USER_CHOICE","Permitir la posisibilidad de elegir editor al usuario");
define("_AMS_MI_EDITOR_USER_CHOICE_DESC","Permitirle al usuario elegir el tipo de editor a usar");

define("_AMS_MI_EDITOR_CHOICE","Editores disponibles");
define("_AMS_MI_EDITOR_CHOICE_DESC","Editores disponibles para el usuario");

define("_AMS_MI_SPOTLIGHT_TEMPLATE","Plantillas del Spotlight");
define("_AMS_MI_SPOTLIGHT_TEMPLATE_DESC","Qué plantillas estarán disponibles para el bloque spotlight para el admin");

define("_AMS_MI_ABOUT","Acerca de");
define("_AMS_MI_MIME_TYPES","Tipos MIME");

?>