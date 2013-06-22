<?php
// $Id$
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AMS_AM_DBUPDATED","¡Base de Datos actualizada Correctamente!");
define("_AMS_AM_CONFIG","Configuración AMS");
define("_AMS_AM_AUTOARTICLES","Artículos automatizados");
define("_AMS_AM_STORYID","ID de la historia");
define("_AMS_AM_TITLE","Título");
define("_AMS_AM_TOPIC","Tema");
define("_AMS_AM_ARTICLE","Artículo");
define("_AMS_AM_POSTER","Autor");
define("_AMS_AM_PROGRAMMED","Hora/Fecha programada");
define("_AMS_AM_ACTION","Acción");
define("_AMS_AM_EDIT","Editar");
define("_AMS_AM_DELETE","Borrar");
define("_AMS_AM_LAST10ARTS","Últimos %d Artículos");
define("_AMS_AM_PUBLISHED","Publicado"); // Published Date
define("_AMS_AM_GO","¡Enviar!");
define("_AMS_AM_EDITARTICLE","Editar Artículo");
define("_AMS_AM_POSTNEWARTICLE","Enviar Nuevo Artículo");
define("_AMS_AM_ARTPUBLISHED","¡Su artículo ha sido publicado!");
define("_AMS_AM_HELLO","Hola %s,");
define("_AMS_AM_YOURARTPUB","El artículo que envío a nuestro sitio ha sido publicado.");
define("_AMS_AM_TITLEC","Título: ");
define("_AMS_AM_URLC","URL: ");
define("_AMS_AM_PUBLISHEDC","Publicado: ");
define("_AMS_AM_RUSUREDEL","¿Está seguro de que desea eliminar este artículo con todos sus comentarios?");
define("_AMS_AM_YES","Sí");
define("_AMS_AM_NO","No");
define("_AMS_AM_INTROTEXT","Texto de Introducción");
define("_AMS_AM_EXTEXT","Texto Extendido");
define("_AMS_AM_ALLOWEDHTML","HTML permitido:");
define("_AMS_AM_DISAMILEY","Deshabilitar emoticonos");
define("_AMS_AM_DISHTML","Deshabilitar HTML");
define("_AMS_AM_APPROVE","Aprobar");
define("_AMS_AM_MOVETOTOP","Desplazar esta historia al tope");
define("_AMS_AM_CHANGEDATETIME","Modificar la fecha/hora de publicación");
define("_AMS_AM_NOWSETTIME","Configurado ahora: %s"); // %s is datetime of publish
define("_AMS_AM_CURRENTTIME","Hora actual: %s");  // %s is the current datetime
define("_AMS_AM_SETDATETIME","Configurar la fecha/hora de publicación");
define("_AMS_AM_MONTHC","Mes:");
define("_AMS_AM_DAYC","Día:");
define("_AMS_AM_YEARC","Año:");
define("_AMS_AM_TIMEC","Hora:");
define("_AMS_AM_PREVIEW","Vista Previa");
define("_AMS_AM_SAVE","Guardar");
define("_AMS_AM_PUBINHOME","¿Publicar en Inicio?");
define("_AMS_AM_ADD","Añadir");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AMS_AM_ADDMTOPIC","Añadir un tema Principal");
define("_AMS_AM_TOPICNAME","Nombre del tema");
define("_AMS_AM_MAX40CHAR","(max: 40 caracteres)");
define("_AMS_AM_TOPICIMG","Imagen del Tema");
define("_AMS_AM_IMGNAEXLOC","nombre de la imagen + extensión localizada en %s");
define("_AMS_AM_FEXAMPLE","por ejemplo: games.gif");
define("_AMS_AM_ADDSUBTOPIC","Añadir un SUB-Tema");
define("_AMS_AM_IN","en");
define("_AMS_AM_MODIFYTOPIC","Modificar Tema");
define("_AMS_AM_MODIFY","Modificar");
define("_AMS_AM_PARENTTOPIC","Tema Padre");
define("_AMS_AM_SAVECHANGE","Guardar Cambios");
define("_AMS_AM_DEL","Borrar");
define("_AMS_AM_CANCEL","Cancelar");
define("_AMS_AM_WAYSYWTDTTAL","ATENCIÓN: ¿Está seguro de que desea eliminar este tópico con todas sus historias y comentarios?");


// Added in Beta6
define("_AMS_AM_TOPICSMNGR","Administrador de Temas");
define("_AMS_AM_PEARTICLES","Administrar Artículos");
define("_AMS_AM_NEWSUB","Nuevos Envíos");
define("_AMS_AM_POSTED","Enviado");
define("_AMS_AM_GENERALCONF","Configuración General");

// Added in RC2
define("_AMS_AM_TOPICDISPLAY","¿Mostrar Imagen?");
define("_AMS_AM_TOPICALIGN","Posición");
define("_AMS_AM_RIGHT","Derecha");
define("_AMS_AM_LEFT","Izquierda");

define("_AMS_AM_EXPARTS","Artículos Expirados");
define("_AMS_AM_EXPIRED","Expirado");
define("_AMS_AM_CHANGEEXPDATETIME","Modificar la fecha/hora de expiración");
define("_AMS_AM_SETEXPDATETIME","Fijar la fecha/hora de expiración");
define("_AMS_AM_NOWSETEXPTIME","Está configurado ahora: %s");

// Added in RC3
define("_AMS_AM_ERRORTOPICNAME","¡Debe introducir un nombre de tema!");
define("_AMS_AM_EMPTYNODELETE","¡No hay nada que borrar!");

// Added 240304 (Mithrandir)
define("_AMS_AM_GROUPPERM","Enviar/Aprobar Permisos");
define("_AMS_AM_SELFILE","Elegir archivo");
// Added Novasmart in 2.42	

define("_MULTIPLE_PAGE_GUIDE","Escriba [pagebreak] para paginar el contenido");

// Added by Hervé
define("_AMS_AM_UPLOAD_DBERROR_SAVE","Error mientras se adjuntaba el archivo al artículo");
define("_AMS_AM_UPLOAD_ERROR","Error mientras se subía el archivo");
define("_AMS_AM_UPLOAD_ATTACHFILE","Archivos adjuntos");
define("_AMS_AM_APPROVEFORM","Aprobar Permisos");
define("_AMS_AM_SUBMITFORM","Enviar permisos");
define("_AMS_AM_VIEWFORM","Mostrar Permisos");
define("_AMS_AM_APPROVEFORM_DESC","Elija, quién podrá aprobar artículos");
define("_AMS_AM_SUBMITFORM_DESC","Elija, quién podrá enviar artículos");
define("_AMS_AM_VIEWFORM_DESC","Elija, quién podrá acceder a los tópicos");
define("_AMS_AM_DELETE_SELFILES","Borrar los archivos elegidos");
define("_AMS_AM_TOPIC_PICTURE","Subir imagen");
define("_AMS_AM_UPLOAD_WARNING","<B>Atención, no se olvide de aplicar permisos de escritura para el siguiente directorio: %s</B>");

define("_AMS_AM_NEWS_UPGRADECOMPLETE","Actualización Completa");
define("_AMS_AM_NEWS_UPDATEMODULE","Actualizar plantillas y bloques del módulo");
define("_AMS_AM_NEWS_UPGRADEFAILED","Actualización fallida");
define("_AMS_AM_NEWS_UPGRADE","Actualizar");
define("_AMS_AM_ADD_TOPIC","Añadir un Tema");
define("_AMS_AM_ADD_TOPIC_ERROR","¡Atención, el tema ya existe!");
define("_AMS_AM_ADD_TOPIC_ERROR1","¡ATENCIÓN: imposible elegir este tema como tema padre!");
define("_AMS_AM_SUB_MENU","Publicar este tema como submenú");
define("_AMS_AM_SUB_MENU_YESNO","¿Sub-menú?");
define("_AMS_AM_HITS","Hits");
define("_AMS_AM_CREATED","Creado");
define("_AMS_AM_COMMENTS","Comentarios");
define("_AMS_AM_VERSION","Versión");
define("_AMS_AM_PUBLISHEDARTICLES","Artículos Publicados");
define("_AMS_AM_TOPICBANNER","Banner");
define("_AMS_AM_BANNERINHERIT","Características heredadas");
define("_AMS_AM_RATING","Valorar");
define("_AMS_AM_FILTER","Filtro");
define("_AMS_AM_SORTING","Configurar Orden");
define("_AMS_AM_SORT","Ordenar");
define("_AMS_AM_ORDER","Orden");
define("_AMS_AM_STATUS","Estado");
define("_AMS_AM_OF","de");

define("_AMS_AM_MANAGEAUDIENCES","Administrar Niveles de Audiencia");
define("_AMS_AM_AUDIENCENAME","Nombre de Audiencia");
define("_AMS_AM_ACCESSRIGHTS","Derechos de Acceso");
define("_AMS_AM_LINKEDFORUM","Foro enlazado");
define("_AMS_AM_VERSIONCOUNT","Versiones");
define("_AMS_AM_AUDIENCEHASSTORIES","%u artículos tiene esta audiencia, por favor, elija un nuevo nivel de audiencia para estos artículos");
define("_AMS_AM_RUSUREDELAUDIENCE","¿Está seguro de que desea eliminar este nivel de audiencia completamente?");
define("_AMS_AM_PLEASESELECTNEWAUDIENCE","Por favor, elija nivel de Audicencia a Remplazar");
define("_AMS_AM_AUDIENCEDELETED","Audiencia eliminada satisfactoriamente");
define("_AMS_AM_ERROR_AUDIENCENOTDELETED","Error - Audiencia NO borrada");
define("_AMS_AM_CANNOTDELETEDEFAULTAUDIENCE","Error - Imposible eliminar la audiencia por defecto");

define("_AMS_AM_NOTOPICSELECTED","No eligió Tema");
define("_AMS_AM_SUBMIT","Enviar");
define("_AMS_AM_ERROR_REORDERERROR","Error - Ocurrieron errores durante el reordenamiento");
define("_AMS_AM_REORDERSUCCESSFUL","Temas Reordenados");

define("_AMS_AM_NONE","Sin Imagen");
define("_AMS_AM_AUTHOR","Avatar del Autor");

define("_AMS_AM_SPOT_ADD","Añadir Mini Bloque Spotlight");
define("_AMS_AM_SPOT_EDITBLOCK","Editar configuraciones del bloque");
define("_AMS_AM_SPOT_NAME","Nombre");
define("_AMS_AM_SPOT_SHOWIMAGE","Mostrar Imagen");
define("_AMS_AM_SPOT_SHOWIMAGE_DESC","Elija una imagen a mostrar o configúrela para mostrarse como imagen del tema o avatar del autor");
define("_AMS_AM_SPOT_WEIGHT","Peso");
define("_AMS_AM_SPOT_DISPLAY","Mostrar");
define("_AMS_AM_SPOT_MAIN","Principal");
define("_AMS_AM_SPOT_MINI","Mini");
define("_AMS_AM_SPOTLIGHT","Spotlight");
define("_AMS_AM_WEIGHT","Peso");
define("_AMS_AM_SPOT_SAVESUCCESS","Spotlight grabado correctamente");
define("_AMS_AM_SPOT_DELETESUCCESS","Spotlight eliminado correctamente");
define("_AMS_AM_RUSUREDELSPOTLIGHT","¿Está seguro de que desea eliminar este Spotlight?");

define("_AMS_AM_SPOT_LATESTARTICLE","Últimos artículos");
define("_AMS_AM_SPOT_LATESTINTOPIC","Lo último en este Tema");
define("_AMS_AM_SPOT_SPECIFICARTICLE","Especificar Artículo");
define("_AMS_AM_SPOT_NOIMAGE","Sin Imagen");
define("_AMS_AM_SPOT_MODE_SELECT","Modo Spotlight");
define("_AMS_AM_SPOT_SPECIFYIMAGE","Especificar Imagen");
define("_AMS_AM_SPOT_TOPICIMAGE","Imagen del Tema");
define("_AMS_AM_SPOT_AUTHORIMAGE","Avatar del Autor");
define("_AMS_AM_SPOT_IMAGE","Imagen");
define("_AMS_AM_SPOT_AUTOTEASER","Recorte Automático");
define("_AMS_AM_SPOT_MAXLENGTH","Máxima longitud del Auto-Recorte");
define("_AMS_AM_SPOT_TEASER","Recortar Texto Manualmente");
define("_AMS_AM_SPOT_TOPIC_DESC","Si 'Lo último en este Tema' es elegido, qué tema debería ser seleccionado");
define("_AMS_AM_SPOT_ARTICLE_DESC","Si 'Especificar Artículo' está seleccionado, qué artículo debería ser mostrado");
define("_AMS_AM_SPOT_CUSTOM","Personalizado");

define("_AMS_AM_PREFERENCES","Preferencias");
define("_AMS_AM_GOMOD","Vaya al Módulo");
define("_AMS_AM_ABOUT","Acerca de");
define("_AMS_AM_MODADMIN","Administración del Módulo");
?>