<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_NW_DBUPDATED","¡Base de datos actualizada satisfactoriamente!");
define("_AM_NW_CONFIG","Configuración de los noticias");
define("_AM_NW_AUTOARTICLES","Noticias automáticas");
define("_AM_NW_STORYID","ID del noticia");
define("_AM_NW_TITLE","Título");
define("_AM_NW_TOPIC","Tema");
define("_AM_NW_POSTER","Redactor");
define("_AM_NW_PROGRAMMED","Fecha/Hora programada");
define("_AM_NW_ACTION","Acción");
define("_AM_NW_EDIT","Editar");
define("_AM_NW_DELETE","Eliminar");
define("_AM_NW_LAST10ARTS","Últimas %d Noticias");
define("_AM_NW_PUBLISHED","Publicado"); // Published Date
define("_AM_NW_GO","Continuar");
define("_AM_NW_EDITARTICLE","Editar noticia");
define("_AM_NW_POSTNEWARTICLE","Enviar noticia");
define("_AM_NW_ARTPUBLISHED","Su noticia ha sido publicada");
define("_AM_NW_HELLO","Hola %s, ");
define("_AM_NW_YOURARTPUB","La noticia que redactó en nuestro sitio fué publicada.");
define("_AM_NW_TITLEC","Título: ");
define("_AM_NW_URLC","URL: ");
define("_AM_NW_PUBLISHEDC","Publicado: ");
define("_AM_NW_RUSUREDEL","¿Está seguro que quiere borrar este comentario y todos los relacionados?");
define("_AM_NW_YES","Si");
define("_AM_NW_NO","No");
define("_AM_NW_INTROTEXT","Introducción");
define("_AM_NW_EXTEXT","Texto extendido");
define("_AM_NW_ALLOWEDHTML","HTML permitido:");
define("_AM_NW_DISAMILEY","Desactivar caritas");
define("_AM_NW_DISHTML","Desactivar HTML");
define("_AM_NW_APPROVE","Aprobar");
define("_AM_NW_MOVETOTOP","Mover esta historia al tope");
define("_AM_NW_CHANGEDATETIME","Cambiar la Fecha/Hora de publicación");
define("_AM_NW_NOWSETTIME","Está ahora fijada a: %s"); // %s is datetime of publish
define("_AM_NW_CURRENTTIME","Fecha actual: %s");  // %s is the current datetime
define("_AM_NW_SETDATETIME","Fecha/Hora de publicación");
define("_AM_NW_MONTHC","Mes:");
define("_AM_NW_DAYC","Día:");
define("_AM_NW_YEARC","Año:");
define("_AM_NW_TIMEC","Hora:");
define("_AM_NW_PREVIEW","Previsualizar");
define("_AM_NW_SAVE","Publicar");
define("_AM_NW_PUBINHOME","Publicar en el inicio");
define("_AM_NW_ADD","Agregar");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_NW_ADDMTOPIC","Agregar un tema principal");
define("_AM_NW_TOPICNAME","Nombre del tema");
// Warning, changed from 40 to 255 characters.
define("_AM_NW_MAX40CHAR","(max: 255 caracteres)");
define("_AM_NW_TOPICIMG","Imagen del tema");
define("_AM_NW_IMGNAEXLOC","Nombre de la imagen + extensión localizada en %s");
define("_AM_NW_FEXAMPLE","por ejemplo: juegos.gif");
define("_AM_NW_ADDSUBTOPIC","Agregar un subtema");
define("_AM_NW_IN","in");
define("_AM_NW_MODIFYTOPIC","Modificar tema");
define("_AM_NW_MODIFY","Modificar");
define("_AM_NW_PARENTTOPIC","Tema raíz");
define("_AM_NW_SAVECHANGE","Guardar cambios");
define("_AM_NW_DEL","Eliminar");
define("_AM_NW_CANCEL","Cancelar");
define("_AM_NW_WAYSYWTDTTAL","Advertencia: ¿Está seguro de que quiere borrar este tema y todas sus historias y comentarios?");


// Added in Beta6
define("_AM_NW_TOPICSMNGR","Gestor de temas");
define("_AM_NW_PEARTICLES","Enviar/Editar noticias");
define("_AM_NW_NEWSUB","Nuevos envios");
define("_AM_NW_POSTED","Enviado");
define("_AM_NW_GENERALCONF","Configuración general");

// Added in RC2
define("_AM_NW_TOPICDISPLAY","Mostrar imagen del tema");
define("_AM_NW_TOPICALIGN","Posición");
define("_AM_NW_RIGHT","Derecha");
define("_AM_NW_LEFT","Izquierda");

define("_AM_NW_EXPARTS","Artículos expirados");
define("_AM_NW_EXPIRED","Expirado");
define("_AM_NW_CHANGEEXPDATETIME","Cambiar la Fecha/Hora de expiración");
define("_AM_NW_SETEXPDATETIME","Fecha/Hora de expiración");
define("_AM_NW_NOWSETEXPTIME","Está ahora fijada a: %s");

// Added in RC3
define("_AM_NW_ERRORTOPICNAME","Debe ingresar un nombre de tema.");
define("_AM_NW_EMPTYNODELETE","Nada que borrar.");

// Added 240304 (Mithrandir)
define("_AM_NW_GROUPPERM","Administrar permisos");
define("_AM_NW_SELFILE","Archivo adjunto");

// Added by Hervé
define("_AM_NW_UPLOAD_DBERROR_SAVE","Error mientras se adjuntaba el archivo al documento.");
define("_AM_NW_UPLOAD_ERROR","Error mientras se subía el archivo");
define("_AM_NW_UPLOAD_ATTACHFILE","archivo(s) adjunto(s)");
define("_AM_NW_APPROVEFORM","Permisos de aprobación");
define("_AM_NW_SUBMITFORM","Permisos de envío");
define("_AM_NW_VIEWFORM","Permisos de acceso");
define("_AM_NW_APPROVEFORM_DESC","Seleccione qué grupos podrán aprobar noticias.");
define("_AM_NW_SUBMITFORM_DESC","Seleccione qué grupos podrán enviar noticias.");
define("_AM_NW_VIEWFORM_DESC","Seleccione qué grupos podrán ver noticias.");
define("_AM_NW_DELETE_SELFILES","Eliminar el archivo seleccionado");
define("_AM_NW_TOPIC_PICTURE","Subir imagen");
define("_AM_NW_UPLOAD_WARNING","<b>Atención, no olvide aplicar permisos de escritura al directorio : %s</b>");

define("_AM_NW_UPGRADECOMPLETE","Actualización completada.");
define("_AM_NW_UPDATEMODULE","Actualizar plantillas del módulo y bloques.");
define("_AM_NW_UPGRADEFAILED","Falló la actualización.");
define("_AM_NW_UPGRADE","Actualizar");
define("_AM_NW_ADD_TOPIC","Agregar un tema");
define("_AM_NW_ADD_TOPIC_ERROR","Error, el tema ya existe.");
define("_AM_NW_ADD_TOPIC_ERROR1","ERROR: No puede seleccionar este tema como tema raíz.");
define("_AM_NW_SUB_MENU","Publicar este tema como un submenú");
define("_AM_NW_SUB_MENU_YESNO","Submenú");
define("_AM_NW_HITS","Clics");
define("_AM_NW_CREATED","Creado");

define("_AM_NW_TOPIC_DESCR","Descripción del tema");
define("_AM_NW_USERS_LIST","Lista de usuarios");
define("_AM_NW_PUBLISH_FRONTPAGE","Publicar en la página de inicio");
define("_AM_NW_UPGRADEFAILED1","Imposible crear la tabla stories_files.");
define("_AM_NW_UPGRADEFAILED2","Imposible cambiar la longitud del título en el tema.");
define("_AM_NW_UPGRADEFAILED21","Imposible agregar los nuevos campos a la tabla de temas.");
define("_AM_NW_UPGRADEFAILED3","Imposible crear la tabla stories_votedata.");
define("_AM_NW_UPGRADEFAILED4","Imposible crear los campos 'rating' y 'votes' para la tabla 'story'.");
define("_AM_NW_UPGRADEFAILED0","Por favor anote los mensajes y trate de corregir los errores con phpMyadmin y las definiciones sql disponibles en el directorio 'sql' del módulo news.");
define("_AM_NW_UPGR_ACCESS_ERROR","Error, para lanzar el script de actualización, debe tener permisos de administrador en este módulo.");
define("_AM_NW_PRUNE_BEFORE","Purgar noticias publicadas antes de");
define("_AM_NW_PRUNE_EXPIREDONLY","Eliminar sólo las noticias expiradas");
define("_AM_NW_PRUNE_CONFIRM","Peligro, se dispone a eliminar permanentemente las noticias publicadas antes del %s .<br />Esta acción es irreversible y serán eliminadas %s noticias.<br />¿Está seguro de querer continuar?");
define("_AM_NW_PRUNE_TOPICS","Limitar a los siguientes temas");
define("_AM_NW_PRUNENEWS","Purgar noticias");
define("_AM_NW_EXPORT_NEWS","Exportar noticias (en XML)");
define("_AM_NW_EXPORT_NOTHING","Lo siento pero no hay nada que exportar, por favor verifique los criterios.");
define("_AM_NW_PRUNE_DELETED","%d noticias han sido eliminadas.");
define("_AM_NW_PERM_WARNING","<h2><u>Atención</u>: <br />El botón de envío de cada formulario es independiente de los otros, por lo que necesitará hacer un envío de datos en cada uno de los 3 formularios y con su botón correspondiente.</h2>");
define("_AM_NW_EXPORT_BETWEEN","Exportar noticias publicadas entre");
define("_AM_NW_EXPORT_AND"," y ");
define("_AM_NW_EXPORT_PRUNE_DSC","Si no selecciona ninguno serán utilizados todos los temas<br/> por el contrario, sólo los temas seleccionados serán usados.");
define("_AM_NW_EXPORT_INCTOPICS","Incluir definiciones de temas");
define("_AM_NW_EXPORT_ERROR","Error al intentar crear el archivo %s. Operación detenida.");
define("_AM_NW_EXPORT_READY","Su archivo de exportación xml está listo para ser descargado. <br /><a href='%s'>Haga clic en este enlace para descargarlo</a>.<br />No olvide <a href='%s'>eliminarlo</a> una vez descargado.");
define("_AM_NW_RSS_URL","URL de la agregación RSS");
define("_AM_NW_NEWSLETTER","Boletín de noticias");
define("_AM_NW_NEWSLETTER_BETWEEN","Seleccionar noticias publicadas entre");
define("_AM_NW_NEWSLETTER_READY","Su boletín de noticias está listo para ser descargado. <br /><a href='%s'>Haga clic en este enlace para descargarlo</a>.<br />No olvide <a href='%s'>eliminarlo</a> una vez descargado.");
define("_AM_NW_DELETED_OK","Archivo eliminado satisfactoriamente.");
define("_AM_NW_DELETED_PB","Ha ocurrido un error al intentar eliminar el archivo.");
define("_AM_NW_STATS0","Estadísticas de las noticias");
define("_AM_NW_STATS","Estadísticas");
define("_AM_NW_STATS1","Redactores únicos");
define("_AM_NW_STATS2","Totales");
define("_AM_NW_STATS3","Estadísticas de las noticias");
define("_AM_NW_STATS4","Noticias más leídas");
define("_AM_NW_STATS5","Noticias menos leídas");
define("_AM_NW_STATS6","Noticias más valoradas");
define("_AM_NW_STATS7","Redactores más leídos");
define("_AM_NW_STATS8","Redactores más valorados");
define("_AM_NW_STATS9","Mejores colaboradores");
define("_AM_NW_STATS10","Estadísticas de los redactores");
define("_AM_NW_STATS11","Total noticias");
define("_AM_NW_HELP","Ayuda");
define("_AM_NW_MODULEADMIN","Administración del módulo");
define("_AM_NW_GENERALSET","Ajustes generales");
define("_AM_NW_GOTOMOD","Ir al módulo");
define("_AM_NW_NOTHING","Lo siento pero no hay nada que descargar, revise los criterios.");
define("_AM_NW_NOTHING_PRUNE","Lo siento pero no hay nada que purgar, revise los criterios.");
define("_AM_NW_TOPIC_COLOR","Color del tema");
define("_AM_NW_COLOR","Color");
define("_AM_NW_REMOVE_BR","Convertir la etiqueta html &lt;br&gt; en una nueva línea");
// Added in 1.3 RC2
define("_AM_NW_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Por favor, actualice el módulo.</font></a>");

// Added in verisn 1.50
define("_AM_NW_NEWSLETTER_HEADER","Cabecera");
define("_AM_NW_NEWSLETTER_FOOTER","Pie de Pag.");
define("_AM_NW_NEWSLETTER_HTML_TAGS","¿Eliminar etiquetas html?");
define("_AM_NW_VERIFY_TABLES","Mantenimiento de tablas");
define("_AM_NW_METAGEN","Metagen");
define("_AM_NW_METAGEN_DESC","Metagen es un sistema que le ayudará a indexar su página mejor en los buscadores.<br />Si no indica ninguno de los campos (palabras clave y descripción) el módulo los añadirá automáticamente.");
define("_AM_NW_BLACKLIST","Lista negra");
define("_AM_NW_BLACKLIST_DESC","Las palabras que aparezcan en la lista no podrán ser usadas como palabras clave (keywords)");
define("_AM_NW_BLACKLIST_ADD","Añadir");
define("_AM_NW_BLACKLIST_ADD_DSC","Indique las palabras que serán añadidas a la lista<br />(una palabra por línea)");
define("_AM_NW_META_KEYWORDS_CNT","Número máximo de palabras clave para la autogeneración");
define("_AM_NW_META_KEYWORDS_ORDER","Orden de las palabras clave");
define("_AM_NW_META_KEYWORDS_INTEXT","Crearlas según el orden en el que aparezcan en el texto");
define("_AM_NW_META_KEYWORDS_FREQ1","Orden de frecuencia de las palabras");
define("_AM_NW_META_KEYWORDS_FREQ2","Invertir el orden de la frecuencia de las palabras");

// Added in version 1.67 Beta
define("_AM_NW_SUBPREFIX","Sub-prefijo");

define("_AM_NW_CLONER","Gestor de Clones");
define("_AM_NW_CLONER_CLONES","Clones");
define("_AM_NW_CLONER_ADD","Agregar Clon");
define("_AM_NW_CLONER_ID","ID");
define("_AM_NW_CLONER_NAME","Nombre");
define("_AM_NW_CLONER_DIRFOL","Directorio/Carpeta");
define("_AM_NW_CLONER_VERSION","Versión");

define("_AM_NW_CLONER_NEWNAME","Nombre del Módulo");
define("_AM_NW_CLONER_NEWNAMEDESC","Esto también afectará a la creación de la carpeta del módulo nuevo. <br /> mayúsculas, minúsculas y los espacios son ignorados y se auto corrigen. <br /> ej. nuevo nombre = <b>Biblioteca</b> nuevo dir  = <b>biblioteca</b>, <br /> nuevo nombre <b>Mi Biblioteca</b> new dir = <b>mibiblioteca</b>. <br /><br /> módulo de inicio es: <font color='#008400'><b> %s </b></font><br />");
define("_AM_NW_CLONER_NEWNAMELABEL","Nuevo Módulo:");

define("_AM_NW_CLONER_DIREXISTS","Directorio/Carpeta '%s' ya exíste!!");
define("_AM_NW_CLONER_CREATED","El Módulo '%s' fue clonado correctamente!!");
define("_AM_NW_CLONER_UPRADED","El Módulo '%s' ha sido actualizado correctamente!!");
define("_AM_NW_CLONER_NOMODULEID","No se ha establecido la ID del módulo!"); 

define("_AM_NW_CLONER_UPDATE","Actualizar");
define("_AM_NW_CLONER_INSTALL","Instalar");
define("_AM_NW_CLONER_UNINSTALL","Desinstalar");
define("_AM_NW_CLONER_ACTION_INSTALL","Instalar/Desinstalar"); 

define("_AM_NW_CLONER_IMPORTNEWS","Importar datos originales del módulo de Noticias");
define("_AM_NW_CLONER_IMPORTNEWSDESC1","Módulo original de Noticias existe! ¿Importar datos ahora?");
define("_AM_NW_CLONER_IMPORTNEWSDESC2","El botón de importación sólo aparece si la tabla stories del módulo x"."News está vacia. <br />
                                         Si ha añadido el tema de la historia antes de importar<br />
                                         El módulo original de Noticias tendrá que desinstalar / reinstalar x"."News. <br />
                                         Si usted ya ha importado los datos originales del módulo Noticias, déjelo como está.");
define("_AM_NW_CLONER_IMPORTNEWSSUB","Importar");
define("_AM_NW_CLONER_NEWSIMPORTED","Los datos originales del módulo News se importaron correctamente.");

// Added in version 1.68 Beta
define("_AM_NW_DESCRIPTION","<H3>x"."News es un módulo clonable de noticias </H3> 
							  donde los usuarios pueden publicar noticias y comentarios. El módulo puede ser clonado para que ser un método único para muchas tareas diferentes. Otras noticias que las de costumbre,  También puede ser utilizado para obtener información, enlaces y más, todos con sus propios bloques, temas y sus ajustes.");

// Added in version 1.68 RC1
define("_AM_NW_CLONER_CLONEDELETED","'%s' El clon se ha eliminado con éxito.");
define("_AM_NW_CLONER_CLONEDELETEDERR","'%s' El clon no puede ser eliminado - revise los permisos.");
define("_AM_NW_CLONER_CLONEUPGRADED","Actualizado");
define("_AM_NW_CLONER_UPGRADEFORCE","Forzar actualización");
define("_AM_NW_CLONER_CLONEDELETION","Eliminando clon");
define("_AM_NW_CLONER_SUREDELETE","¿Está seguro que desea eliminar el<font color='#000000'>'%s'</font> clon?<br />");
define("_AM_NW_CLONER_CLONEID","La ID del clon no estaba definida"); 

// Added in version 1.68 RC2
define("_AM_NW_INDEX","Index"); 

// Added in version 1.68 RC3
define("_AM_NW_DOLINEBREAK","Enable Line Break");

define("_AM_NW_TOPICS","Topics");
?>
