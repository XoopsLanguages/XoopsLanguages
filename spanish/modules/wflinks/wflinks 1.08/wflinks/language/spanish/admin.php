<?php
/**
 * $Id: admin.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
//Traducción por debianus. Sugerencias y reporte de errores en http://es.impresscms.org
define("_AM_WFL_WARNINSTALL1","Aviso: el directorio %s existe en su servidor. <br />Por favor, por razones de seguridad elimine este directorio.");
define("_AM_WFL_WARNINSTALL2","Aviso: el archivo %s existe en tu servidor. <br />Por favor, por razones de seguridad elimine este archivo.");
define("_AM_WFL_WARNINSTALL3","Aviso: la carpeta %s no existe en su servidor. <br />Esta carpeta es necesaria para el funcionamiento de WF-Links.");
define("_AM_WFL_MODULE_NAME","WF-Links");
define("_AM_WFL_BMODIFY","Modificar");
define("_AM_WFL_BDELETE","Eliminar");
define("_AM_WFL_BCREATE","Crear");
define("_AM_WFL_BADD","Agregar");
define("_AM_WFL_BAPPROVE","Aprobar");
define("_AM_WFL_BIGNORE","Ignorar");
define("_AM_WFL_BCANCEL","Cancelar");
define("_AM_WFL_BSAVE","Guardar");
define("_AM_WFL_BRESET","Restablecer");
define("_AM_WFL_BMOVE","Mover enlaces");
define("_AM_WFL_BUPLOAD","Enviar");
define("_AM_WFL_BDELETEIMAGE","Eliminar la imagen seleccionada");
define("_AM_WFL_BRETURN","Regresar a donde estaba");
define("_AM_WFL_DBERROR","Error accediendo a la base de datos: por favor, reportelo");
// Other Options
define("_AM_WFL_TEXTOPTIONS","Opciones de texto:");
define("_AM_WFL_DISABLEHTML","Desactivar etiquetas HTML");
define("_AM_WFL_DISABLESMILEY","Desactivar caritas");
define("_AM_WFL_DISABLEXCODE","Desactivar códigos de ImpressCMS");
define("_AM_WFL_DISABLEIMAGES","Desactivar imagenes");
define("_AM_WFL_DISABLEBREAK","¿Usar conversion <em>linebreak</em>?");
define("_AM_WFL_UPLOADFILE","Enlace enviado con éxito");
define("_AM_WFL_NOMENUITEMS","No hay items en el menú");
// Admin Bread crumb
define("_AM_WFL_PREFS","Preferencias");
define("_AM_WFL_BUPDATE","Actualizar el módulo");
define("_AM_WFL_BINDEX","Índice");
define("_AM_WFL_BPERMISSIONS","Permisos");
// define("_AM_WFL_BLOCKADMIN","Bloques");
define("_AM_WFL_BLOCKADMIN","Configuración de bloques");
define("_AM_WFL_GOMODULE","Ir al módulo");
define("_AM_WFL_ABOUT","Acerca de...");
// Admin Summary
define("_AM_WFL_SCATEGORY","Categoría: <strong>%s</strong> ");
define("_AM_WFL_SFILES","Enlaces: <strong>%s</strong> ");
define("_AM_WFL_SNEWFILESVAL","Enviados: <strong>%s</strong> ");
define("_AM_WFL_SMODREQUEST","Modificados: <strong>%s</strong> ");
define("_AM_WFL_SREVIEWS","Revisiones: ");
// Admin Main Menu
define("_AM_WFL_MCATEGORY","Administración de categorías");
define("_AM_WFL_MLINKS","Administración de enlaces");
define("_AM_WFL_MLISTBROKEN","Listado de enlaces rotos");
define("_AM_WFL_MLISTPINGTIMES","Listado de enlaces comprobados");
define("_AM_WFL_INDEXPAGE","Administración de la página principal");
define("_AM_WFL_MCOMMENTS","Comentarios");
define("_AM_WFL_MVOTEDATA","Información de votos");
define("_AM_WFL_MUPLOADS","Enviar imágenes");
// Catgeory defines
define("_AM_WFL_CCATEGORY_CREATENEW","Crear nueva categoría");
define("_AM_WFL_CCATEGORY_MODIFY","Modificar categoría");
define("_AM_WFL_CCATEGORY_MOVE","Mover categoría");
define("_AM_WFL_CCATEGORY_MODIFY_TITLE","Título de la categoría:");
define("_AM_WFL_CCATEGORY_MODIFY_FAILED","Fallo moviendo el enlace: no se puede mover a esta categoría");
define("_AM_WFL_CCATEGORY_MODIFY_FAILEDT","Fallo moviendo el enlace: no se puede encontrar esta categoría");
define("_AM_WFL_CCATEGORY_MODIFY_MOVED","Enlaces movidos y categoría eliminada");
define("_AM_WFL_CCATEGORY_CREATED","Categoría creada satisfactoriamente");
define("_AM_WFL_CCATEGORY_MODIFIED","Categoría modificada satisfactoriamente");
define("_AM_WFL_CCATEGORY_DELETED","Categoría eliminada satisfactoriamente");
define("_AM_WFL_CCATEGORY_AREUSURE","Aviso: ¿está seguro que desea eliminar esta categoría incluyendo todos sus enlaces y comentarios?");
define("_AM_WFL_CCATEGORY_NOEXISTS","Deberá crear una categoría antes de agregar un enlace");
define("_AM_WFL_FCATEGORY_GROUPPROMPT","Permisos de acceso a categorías:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione los grupos de usuarios que tendrán acceso a esta categoría.</span></div>");
define("_AM_WFL_FCATEGORY_SUBGROUPPROMPT","Permisos de envíos de la categoría:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione los grupos de usuarios que podrán enviar enlaces a esta categoría.</span></div>");
define("_AM_WFL_FCATEGORY_MODGROUPPROMPT","Permisos de moderación de la categoría:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione los grupos de usuarios que podrán moderar esta categoría.</span></div>");
define("_AM_WFL_FCATEGORY_TITLE","Título de la categoría:");
define("_AM_WFL_FCATEGORY_WEIGHT","Peso de la categoría:");
define("_AM_WFL_FCATEGORY_SUBCATEGORY","Establecer como subcategoría:");
define("_AM_WFL_FCATEGORY_CIMAGE","Seleccionar imagen de la categoría:");
define("_AM_WFL_FCATEGORY_DESCRIPTION","Redactar descripción de la categoría:");
define("_AM_WFL_FCATEGORY_SUMMARY","Establecer resúmen de la categoría:");
/**
 * Index page Defines
 */
define("_AM_WFL_IPAGE_UPDATED","Página principal modificada satisfactoriamente");
define("_AM_WFL_IPAGE_INFORMATION","Información de la página principal");
define("_AM_WFL_IPAGE_MODIFY","Modificar página principal");
define("_AM_WFL_IPAGE_CIMAGE","Seleccionar imagen principal del módulo:");
define("_AM_WFL_IPAGE_CTITLE","Título del módulo:");
define("_AM_WFL_IPAGE_CHEADING","Encabezado del módulo:");
define("_AM_WFL_IPAGE_CHEADINGA","Alineación del encabezado:");
define("_AM_WFL_IPAGE_CFOOTER","Pie de página del módulo:");
define("_AM_WFL_IPAGE_CFOOTERA","Alineación del pie de página:");
define("_AM_WFL_IPAGE_CLEFT","Izquierda");
define("_AM_WFL_IPAGE_CCENTER","Central");
define("_AM_WFL_IPAGE_CRIGHT","Derecha");
/**
 * Permissions defines
 */
define("_AM_WFL_PERM_MANAGEMENT","Administración de permisos");
define("_AM_WFL_PERM_PERMSNOTE","<div><b>NOTA:</b> Por favor sepa que no solo debe configurar los permisos aquí sino que también debe hacerlo en la administración de grupos de ImpressCMS. Para ello acceda a <b>Sistema > Grupos</b> y elija los grupos correspondientes para configurar su acceso al módulo y a los bloques.</div>");
define("_AM_WFL_PERM_CPERMISSIONS","Permisos por categorías");
define("_AM_WFL_PERM_CSELECTPERMISSIONS","Seleccione las categorías que cada grupo puede ver");
define("_AM_WFL_PERM_CNOCATEGORY","No puede configurar permisos porque aún no hay categorías creadas");
define("_AM_WFL_PERM_FPERMISSIONS","Permisos por enlace");
define("_AM_WFL_PERM_FNOFILES","No puede configurar permisos porque aún no hay enlaces creados");
define("_AM_WFL_PERM_FSELECTPERMISSIONS","Seleccione los enlaces que cada grupo puede ver");
/**
 * Upload defines
 */
define("_AM_WFL_LINK_IMAGEUPLOAD","Imagen enviada al servidor satisfactoriamente");
define("_AM_WFL_LINK_NOIMAGEEXIST","Error: no selecciono ningún archivo para enviar; seleccione alguno");
define("_AM_WFL_LINK_IMAGEEXIST","La imagen ya fue enviada al servidor anteriormente");
define("_AM_WFL_LINK_FILEDELETED","El enlace ha sido eliminado.");
define("_AM_WFL_LINK_FILEERRORDELETE","Error eliminando enlace: no encontrado.");
define("_AM_WFL_LINK_NOFILEERROR","Error eliminando enlace: no seleccionó ningún enlace para eliminar.");
define("_AM_WFL_LINK_DELETEFILE","Aviso: ¿esta seguro de querer eliminar esta imagen?");
define("_AM_WFL_LINK_IMAGEINFO","Estado del servidor");
define("_AM_WFL_LINK_SPHPINI","<b>Información obtenida desde PHPini:</b>");
define("_AM_WFL_LINK_SAFEMODESTATUS","Estado de <em>Safe Mode</em>: ");
define("_AM_WFL_LINK_REGISTERGLOBALS","Estado de <em>Register Globals</em>: ");
define("_AM_WFL_LINK_SERVERUPLOADSTATUS","Estado de <em>Server Uploads</em>: ");
define("_AM_WFL_LINK_MAXUPLOADSIZE","Tamaño máximo de subida de archivos permitido: ");
define("_AM_WFL_LINK_MAXPOSTSIZE","Tamaño máximo de envíos permitido: ");
define("_AM_WFL_LINK_SAFEMODEPROBLEMS"," (Esto puede causar problemas)");
define("_AM_WFL_LINK_GDLIBSTATUS","Soporte de la librería GD: ");
define("_AM_WFL_LINK_GDLIBVERSION","Versión de la librería GD: ");
define("_AM_WFL_LINK_GDON","<b>Habilitado</b> (Miniaturas habilitadas)");
define("_AM_WFL_LINK_GDOFF","<b>Inhabilitado</b> (Miniaturas deshabilitadas)");
define("_AM_WFL_LINK_OFF","<b>Inactivo</b>");
define("_AM_WFL_LINK_ON","<b>Activo</b>");
define("_AM_WFL_LINK_CATIMAGE","Usar en categorías");
define("_AM_WFL_LINK_SCREENSHOTS","Usar como capturas");
define("_AM_WFL_LINK_MAINIMAGEDIR","Usar como imagen principal");
define("_AM_WFL_LINK_FCATIMAGE","Ruta de las categorías");
define("_AM_WFL_LINK_FSCREENSHOTS","Ruta de las capturas");
define("_AM_WFL_LINK_FMAINIMAGEDIR","Ruta de las imagenes principales");
define("_AM_WFL_LINK_FUPLOADIMAGETO","Enviar imagen: ");
define("_AM_WFL_LINK_FUPLOADPATH","Ruta de subida: ");//pendiente
define("_AM_WFL_LINK_FUPLOADURL","URL de subida: ");//pendiente
define("_AM_WFL_LINK_FOLDERSELECTION","Seleccione el destino de la imagen:");
define("_AM_WFL_LINK_FSHOWSELECTEDIMAGE","Seleccionar una imagen:");
define("_AM_WFL_LINK_FUPLOADIMAGE","Enviar imagen al destino seleccionado:");

// Main Index defines
define("_AM_WFL_MINDEX_LINKSUMMARY","Resúmen del módulo");
define("_AM_WFL_MINDEX_PUBLISHEDLINK","Enlaces publicados:");
define("_AM_WFL_MINDEX_AUTOPUBLISHEDLINK","Autopublicar enlace:");
define("_AM_WFL_MINDEX_AUTOEXPIRE","Auto expirar enlace:");
define("_AM_WFL_MINDEX_EXPIRED","Enlaces vencidos:");
define("_AM_WFL_MINDEX_OFFLINELINK","Enlaces no activos:");
define("_AM_WFL_MINDEX_ID","ID");
define("_AM_WFL_MINDEX_TITLE","Título del enlace");
define("_AM_WFL_MINDEX_POSTER","Enviado por");
define("_AM_WFL_MINDEX_ONLINE","Estado");
define("_AM_WFL_MINDEX_ONLINESTATUS","Estado (activo o no)");
define("_AM_WFL_MINDEX_PUBLISH","Publicación");
define("_AM_WFL_MINDEX_PUBLISHED","Publicado");
define("_AM_WFL_MINDEX_EXPIRE","Vencimiento");
define("_AM_WFL_MINDEX_NOTSET","Fecha no establecida");
define("_AM_WFL_MINDEX_ACTION","Acción");
define("_AM_WFL_MINDEX_NOLINKSFOUND","Aviso: no hay enlaces que coincidan con este criterio");
define("_AM_WFL_MINDEX_PAGE","<b>Página:<b> ");
define('_AM_WFL_MINDEX_PAGEINFOTXT','<ul><li>Detalles de la página principal del módulo WF-links.</li><li>Puede cambiar de forma sencilla la imagen del logo, el encabezado principal y el pié de página así como la alineación de los mismos.</li></ul><br />Nota: La imagen del logo que elija será usada para WF-links.');
define("_AM_WFL_MINDEX_RESPONSE","Tiempo de respuesta");
define("_AM_WFL_MINDEX_SUBMITTED","Enviado el");
// Submitted Links
define("_AM_WFL_SUB_SUBMITTEDFILES","Enlaces Enviados");
define("_AM_WFL_SUB_FILESWAITINGINFO","Enlaces esperando");
define("_AM_WFL_SUB_FILESWAITINGVALIDATION","Enlaces esperando aprobación: ");
define("_AM_WFL_SUB_APPROVEWAITINGFILE","<b>Aprobar</b> enlace sin validación.");
define("_AM_WFL_SUB_EDITWAITINGFILE","<b>Editar</b> enlace y luego aprobar.");
define("_AM_WFL_SUB_DELETEWAITINGFILE","<b>Eliminar</b> el enlace.");
define("_AM_WFL_SUB_NOFILESWAITING","Aún no hay enlaces que coincidan con este criterio");
define("_AM_WFL_SUB_NEWFILECREATED","El nuevo enlace fue creado y la base de datos fue actualizada con éxito.");
// Vote Information
define("_AM_WFL_VOTE_RATINGINFOMATION","Información de votos");
define("_AM_WFL_VOTE_TOTALVOTES","Total de votos: ");
define("_AM_WFL_VOTE_REGUSERVOTES","Votos de usuarios registrados: %s");
define("_AM_WFL_VOTE_ANONUSERVOTES","Votos de visitantes anónimos: %s");
define("_AM_WFL_VOTE_USER","Usuario");
define("_AM_WFL_VOTE_IP","Dirección IP");
define("_AM_WFL_VOTE_DATE","Enviado el");
define("_AM_WFL_VOTE_RATING","Valoración");
define("_AM_WFL_VOTE_NOREGVOTES","No hay votos de usuarios registrados");
define("_AM_WFL_VOTE_NOUNREGVOTES","No hay votos de visitantes anónimos");
define("_AM_WFL_VOTE_VOTEDELETED","Fecha de votación borrada.");
define("_AM_WFL_VOTE_ID","ID");
define("_AM_WFL_VOTE_FILETITLE","Título del enlace");
define("_AM_WFL_VOTE_DISPLAYVOTES","Información de las votaciones");
define("_AM_WFL_VOTE_NOVOTES","Aún no hay votos que mostrar");
define("_AM_WFL_VOTE_DELETE","No hay votos que mostrar");
define("_AM_WFL_VOTE_DELETEDSC","<b>Elimina</b> los votos de la base de datos.");
define("_AM_WFL_VOTEDELETED","Votos seleccionados eliminados satisfactoriamente");
define("_AM_WFL_VOTE_USERAVG","Calificación promedio de usuarios");
define("_AM_WFL_VOTE_TOTALRATE","Total de votos");
define("_AM_WFL_VOTE_MAXRATE","Valoración mínima");
define("_AM_WFL_VOTE_MINRATE","Valoración máxima");
define("_AM_WFL_VOTE_MOSTVOTEDTITLE","Más votado por");
define("_AM_WFL_VOTE_LEASTVOTEDTITLE","Ultimo votado por");
define("_AM_WFL_VOTE_MOSTVOTERSUID","Votante más activo");
define("_AM_WFL_VOTE_REGISTERED","Votos de usuarios registrados");
define("_AM_WFL_VOTE_NONREGISTERED","Votos de visitantes anónimos");
// Modifications
define("_AM_WFL_MOD_TOTMODREQUESTS","Requerimientos de modificación: ");
define("_AM_WFL_MOD_MODREQUESTS","Enlaces modificados");
define("_AM_WFL_MOD_MODREQUESTSINFO","Modificar información del enlace");
define("_AM_WFL_MOD_MODID","ID");
define("_AM_WFL_MOD_MODTITLE","Título");
define("_AM_WFL_MOD_MODPOSTER","Autor original: ");
define("_AM_WFL_MOD_DATE","Enviado por");
define("_AM_WFL_MOD_NOMODREQUEST","Aún no hay requerimientos que coincidan con este criterio.");
define("_AM_WFL_MOD_TITLE","Título: ");
define("_AM_WFL_MOD_LID","ID: ");
define("_AM_WFL_MOD_CID","Categoría: ");
define("_AM_WFL_MOD_URL","URL: ");
define("_AM_WFL_MOD_PUBLISHER","Publicado por: ");
define("_AM_WFL_MOD_FORUMID","Foro: ");
define("_AM_WFL_MOD_SCREENSHOT","Captura: ");
define("_AM_WFL_MOD_HOMEPAGE","Página: ");
define("_AM_WFL_MOD_HOMEPAGETITLE","Título de la página: ");
define("_AM_WFL_MOD_SHOTIMAGE","Captura: ");
define("_AM_WFL_MOD_DESCRIPTION","Descripción: ");
define("_AM_WFL_MOD_MODIFYSUBMITTER","Enviado por: ");
define("_AM_WFL_MOD_MODIFYSUBMIT","Enviado por");
define("_AM_WFL_MOD_PROPOSED","Detalles del enlace propuesto");
define("_AM_WFL_MOD_ORIGINAL","Detalles del enlace original");
define("_AM_WFL_MOD_REQDELETED","Solicitud de modificación eliminada de la base de datos");
define("_AM_WFL_MOD_REQUPDATED","Solicitud de modificación aprobada y base de datos actualizada");
define('_AM_WFL_MOD_VIEW','Ver');
// Link management
define("_AM_WFL_LINK_ID","ID: ");
define("_AM_WFL_LINK_IP","IP de quien envió: ");
define("_AM_WFL_LINK_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Administrar extensiones de enlace permitidas</b>:</div>");
define("_AM_WFL_LINK_MODIFYFILE","Modificar enlace");
define("_AM_WFL_LINK_CREATENEWFILE","Crear enlace");
define("_AM_WFL_LINK_TITLE","Título: ");
define("_AM_WFL_LINK_DLURL","URL: ");
define("_AM_WFL_LINK_DIRCA","Calificación del contenido: ");
define("_AM_WFL_LINK_DESCRIPTION","Descripción: ");
define("_AM_WFL_LINK_CATEGORY","Categoría: ");
define("_AM_WFL_LINK_FILESSTATUS","¿Enlace no activo?<br /><br /><span style='font-weight: normal;'>El enlace no estará visible para los usuarios.</span>");
define("_AM_WFL_LINK_SETASUPDATED"," ¿Estado actualizado?<br /><br /><span style='font-weight: normal;'>El enlace mostrará un ícono de actualizado.</span>");
define("_AM_WFL_LINK_SHOTIMAGE","Captura: ");
define("_AM_WFL_LINK_DISCUSSINFORUM","¿Agregar discusión en este foro?");
define("_AM_WFL_LINK_PUBLISHDATE","Fecha de publicación:");
define("_AM_WFL_LINK_EXPIREDATE","Fecha de expiración:");
define("_AM_WFL_LINK_CLEARPUBLISHDATE","<br /><br />Eliminar fecha de publicación:");
define("_AM_WFL_LINK_CLEAREXPIREDATE","<br /><br />Eliminar fecha de expiración:");
define("_AM_WFL_LINK_PUBLISHDATESET"," Configurar fecha de publicación: ");
define("_AM_WFL_LINK_SETDATETIMEPUBLISH"," Configurar la fecha de publicación");
define("_AM_WFL_LINK_SETDATETIMEEXPIRE"," Configurar la fecha de expiración");
define("_AM_WFL_LINK_SETPUBLISHDATE","<b>Configurar fecha de publicación: </b>");
define("_AM_WFL_LINK_SETNEWPUBLISHDATE","<b>Configurar nueva fecha de publicación: </b><br />Publicado el:");
define("_AM_WFL_LINK_SETPUBDATESETS","<b>Configurar fecha de publicación: </b><br />Publicaciones del:");
define("_AM_WFL_LINK_EXPIREDATESET"," Configurar fecha de expiración: ");
define("_AM_WFL_LINK_SETEXPIREDATE","<b>Configurar fecha de expiración: </b>");
define("_AM_WFL_LINK_DELEDITMESS","¿Eliminar reporte de enlace erróneo?<br /><br /><span style='font-weight: normal;'>Cuando elige <b>SI</b> los reportes de enlaces erróneos serán automáticamente eliminados y el enlace se confirmará otra vez.</span>");
define("_AM_WFL_LINK_MUSTBEVALID","La captura deberá ser una imagen válida del directorio %s (ej. shot.gif). Deje esto en blanco si no hay imagenes.");
define("_AM_WFL_LINK_EDITAPPROVE","Aprobar enlace:");
define("_AM_WFL_LINK_NEWFILEUPLOAD","Nuevo enlace creado y base de datos actualizada satisfactoriamente");
define("_AM_WFL_LINK_FILEMODIFIEDUPDATE","Enlace modificado y base de datos actualizada satisfactoriamente");
define("_AM_WFL_LINK_REALLYDELETEDTHIS","¿Realmente desea eliminar el enlace seleccionado?");
define("_AM_WFL_LINK_FILEWASDELETED","¡Enlace %s eliminado de la base de datos satisfactoriamente!");
define("_AM_WFL_LINK_FILEAPPROVED","Enlace aprobado y base de datos actualizada satisfactoriamente");
define("_AM_WFL_LINK_CREATENEWSSTORY","<b>Crear un artículo sobre el enlace</b>");
define("_AM_WFL_LINK_SUBMITNEWS","¿Enviar el enlace como una noticia?");
define("_AM_WFL_LINK_NEWSCATEGORY","Seleccionar la categoría de la noticia:");
define("_AM_WFL_LINK_NEWSTITLE","Título de la noticia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Dejar en blanco para usar el título del enlace</span></div>");
define("_AM_WFL_LINK_PUBLISHER","Enviado por: ");
/**
 * Broken links defines
 */
define("_AM_WFL_SBROKENSUBMIT","Erróneos: <strong>%s</strong> ");
define("_AM_WFL_BROKEN_FILE","Reporte de enlaces erróneos");
define("_AM_WFL_BROKEN_FILEIGNORED","Reporte de enlace erróneo ignorado y satisfactoriamente eliminado de la base de datos");
define("_AM_WFL_BROKEN_NOWACK","Estado del enlace cambiado y base de datos actualizada");
define("_AM_WFL_BROKEN_NOWCON","Estado confirmado y base de datos actualizada");
define("_AM_WFL_BROKEN_REPORTINFO","Información del enlace erróneo");
define("_AM_WFL_BROKEN_REPORTSNO","Reportes de enlace erróneos aguardando:");
define("_AM_WFL_BROKEN_IGNOREDESC","<b>Ignorar</b> reportes y eliminar los reportes de enlace erróneos.");
define("_AM_WFL_BROKEN_DELETEDESC","<b>Eliminar</b> los datos de enlaces reportados y los reportes de enlace roto para este enlace.");
define("_AM_WFL_BROKEN_EDITDESC","<b>Modificar</b> el enlace y arreglar el problema.");
define("_AM_WFL_BROKEN_ACKDESC","<b>Examinado</b> Fijar como examinado el estado de enlace roto reportado.");
define("_AM_WFL_BROKEN_CONFIRMDESC","<b>Confirmado</b> Fijar como confirmado el estado de enlace roto reportado.");
define("_AM_WFL_BROKEN_ACKNOWLEDGED","Examinado");
define("_AM_WFL_BROKEN_DCONFIRMED","Confirmado");

define("_AM_WFL_BROKEN_ID","ID");
define("_AM_WFL_BROKEN_TITLE","Título");
define("_AM_WFL_BROKEN_REPORTER","Reportado por");
define("_AM_WFL_BROKEN_FILESUBMITTER","Enviado por");
define("_AM_WFL_BROKEN_DATESUBMITTED","Enviado el");
define("_AM_WFL_BROKEN_ACTION","Acción");
define("_AM_WFL_BROKEN_NOFILEMATCH","Aún no hay reporte de enlaces erróneos");
define("_AM_WFL_BROKENFILEDELETED","Enlace eliminado de la base de datos");
/**
 * About defines
 */
define("_AM_WFL_BY","por");
// block defines
define("_AM_WFL_BADMIN","Administración de bloques");
define("_AM_WFL_BLKDESC","Descripción");
define("_AM_WFL_TITLE","Título");
define("_AM_WFL_SIDE","Alineación");
define("_AM_WFL_WEIGHT","Peso");
define("_AM_WFL_VISIBLE","Visible");
define("_AM_WFL_ACTION","Acción");
define("_AM_WFL_SBLEFT","Izquierda");
define("_AM_WFL_SBRIGHT","Derecha");
define("_AM_WFL_CBLEFT","Central izquierdo");
define("_AM_WFL_CBRIGHT","Central derecho");
define("_AM_WFL_CBCENTER","Central medio");
define("_AM_WFL_ACTIVERIGHTS","Derechos para activar");//Active Rights
define("_AM_WFL_ACCESSRIGHTS","Derechos de acceso");//Access Rights
// image admin icon
define("_AM_WFL_ICO_EDIT","Modificar este ítem");
define("_AM_WFL_ICO_DELETE","Eliminar este ítem");
define("_AM_WFL_ICO_RESOURCE","Modificar este recurso");
define("_AM_WFL_ICO_ONLINE","Activo");
define("_AM_WFL_ICO_OFFLINE","Inactivo");
define("_AM_WFL_ICO_APPROVED","Aprobado");
define("_AM_WFL_ICO_NOTAPPROVED","No aprobado");
define("_AM_WFL_ICO_LINK","Enlaces calificados");
define("_AM_WFL_ICO_URL","Agregar URL relacionada");
define("_AM_WFL_ICO_ADD","Agregar");
define("_AM_WFL_ICO_APPROVE","Aprobar");
define("_AM_WFL_ICO_STATS","Estadísticas");
define("_AM_WFL_ICO_VIEW","Ver este ítem");
define("_AM_WFL_ICO_IGNORE","Ignorar");
define("_AM_WFL_ICO_ACK","Reporte de enlace erróneo reconocido (examinado)");
define("_AM_WFL_ICO_REPORT","¿Reconocer reporte de enlace erróneo?");
define("_AM_WFL_ICO_CONFIRM","Reporte de enlace erróneo confirmado");
define("_AM_WFL_ICO_CONBROKEN","¿Confirmar reporte de enlace erróneo?");
define("_AM_WFL_ICO_RES","Modificar recursos/enlaces para este ítem");
define("_AM_WFL_MOD_URLRATING","Valoración del contenido:");//Interent Content Rating
// Alternate category
define("_AM_WFL_ALTCAT_CREATEF","Agregar categoría alternativa");
define("_AM_WFL_MALTCAT","Administración de categorías alternativas");
define("_AM_WFL_ALTCAT_MODIFYF","Administración de categorías alternativas");
define("_AM_WFL_ALTCAT_INFOTEXT","<ul><li>Las categorías alternativas pueden ser agregadas o eliminadas fácilmente mediante este formulario.</li></ul>");
define('_AM_WFL_ALTCAT_CREATED','Categorías alternativas almacenadas');
define("_AM_WFL_MRESOURCES","Administración de recursos");
define("_AM_WFL_RES_CREATED","Administración de recursos");
define("_AM_WFL_RES_ID","ID");
define("_AM_WFL_RES_DESC","Descripción");
define("_AM_WFL_RES_NAME","Nombre");
define("_AM_WFL_RES_TYPE","Tipo");
define("_AM_WFL_RES_USER","Usuario");
define("_AM_WFL_RES_CREATEF","Agregar recurso");
define("_AM_WFL_RES_MODIFYF","Modificar recurso");
define("_AM_WFL_RES_NAMEF","Nombre:");
define("_AM_WFL_RES_DESCF","Descripción:");
define("_AM_WFL_RES_URLF","URL:");
define("_AM_WFL_RES_ITEMIDF","Item ID:");
define("_AM_WFL_RES_INFOTEXT","<ul><li>Nuevos recursos pueden ser agregados, modificados o removidos fácilmente mediante este formulario.</li>
	<li>Listado de todos los recursos enlazados al enlace</li>
	<li>Modificar nombre y descripción del recurso</li></ul>
	");
define("_AM_WFL_LISTBROKEN","Mostrar enlaces que posiblemente estén fallando. Nota: Estos resultados pueden no ser exactos y se deben tomar como una referencia.<br /><br />Compruebe que el enlace exista antes de realizar cualquier acción.<br /><br />");
define("_AM_WFL_PINGTIMES","Mostrar los primeros ping time de cada enlace.<br /><br />Nota: Estos resultados pueden no ser exactos y se deben tomar como una referencia.<br /><br />");
define("_AM_WFL_NO_FORUM","No seleccionar foro");
define("_AM_WFL_PERM_RATEPERMISSIONS","Permisos para calificación");
define("_AM_WFL_PERM_RATEPERMISSIONS_TEXT","Seleccionar grupos que puedan calificar enlaces en las categorías seleccionadas.");
define("_AM_WFL_PERM_AUTOPERMISSIONS","Permisos de autoaprobación");
define("_AM_WFL_PERM_AUTOPERMISSIONS_TEXT","Seleccionar grupos que podrán enviar nuevos enlaces que se autoaprobarán sin la intervención del administrador.");
define("_AM_WFL_PERM_SPERMISSIONS","Permisos para enviar");
define("_AM_WFL_PERM_SPERMISSIONS_TEXT","Seleccionar grupos que pueden enviar nuevos enlaces en las categorías seleccionadas.");
define("_AM_WFL_PERM_APERMISSIONS","Permisos de moderación");
define("_AM_WFL_PERM_APERMISSIONS_TEXT","Sellecionar grupos que tienen privilegios para moderar las categorías seleccionadas.");
// added by McDonald
define("_AM_WFL_COUNTRY","País:");
define("_AM_WFL_KEYWORDS","Palabras clave:");
define("_AM_WFL_KEYWORDS_NOTE","Las palabras clave deberían estar separadas por una coma (palabra1, palabra2, etc.)");
define("_AM_WFL_CHECKURL","Comprobar URL");
define("_AM_WFL_CATTITLE","Categoría");
define("_AM_WFL_LINK_GOOGLEMAP","Google Maps");
define("_AM_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_AM_WFL_LINK_MULTIMAP","Multimap");
define("_AM_WFL_LINK_CHECKMAP","Comprobar mapa");
define("_AM_WFL_STREET1","Calle 1");
define("_AM_WFL_STREET2","Calle 2 (opcional)");
define("_AM_WFL_TOWN","Ciudad");
define("_AM_WFL_STATE","Estado");
define("_AM_WFL_ZIPCODE","Código postal");
define("_AM_WFL_TELEPHONE","Teléfono");
define("_AM_WFL_FAX","Fax");
// Version 1.05 RC2
define("_AM_WFL_WARNINSTALL4","<b>Aviso:</b> <u>La carpeta</u> %s no es escribible. <br />Esta carpeta necesita tener permisos de escritura (CHMOD 777) para que WF-Links pueda escribir en ella.");
// Version 1.05 RC5
define("_AM_WFL_VOIP","VoIP");
define("_AM_WFL_LINK_SUBMITTER","Nombre de quien envió el enlace: ");
define("_AM_WFL_MOBILE","Teléfono móvil");
define("_AM_WFL_CATSPONSOR","Seleccione una categoría para el espónsor:");
define("_AM_WFL_CATSPONSORDSC","Si selecciona un cliente, el id del banner del formulario que se muestra debajo no será guardado");
define("_AM_WFL_BANNER","Banner");
define("_AM_WFL_FBANNER","Banner");
define("_AM_WFL_BANNERID","Seleccione Banner ID:");
define("_AM_WFL_BANNERIDDSC","Si selecciona un cliente, el id del banner del formulario que se muestra arriba no será guardado");
// Version 1.05 RC6
define("_AM_WFL_VAT","VAT Reg No");
define("_AM_WFL_VATWIKI","Para más información, haga clic en <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>");
define("_AM_WFL_EMAIL","Correo electrónico");
define("_AM_WFL_ICO_EXPIRE","Expirado");
define("_AM_WFL_LINK_NORESPONSE", 'Sin respuesta');
define("_AM_WFL_LINK_CREATEADDRESS", '&nbsp;<b>Formulario de direcciones</b>');
define("_AM_WFL_LINK_MISCLINKSETTINGS", '&nbsp;<b>Preferencias de la miscelanea de enlaces</b>');//Miscellaneous Link settings
// Version 1.06 RC1
define("_AM_WFL_READWRITEERROR","No seleccionó un archivo a subir o el servidor tiene insuficientes permisos de lectura/escritura para alojar este archivo");
define("_AM_WFL_INVALIDFILESIZE","Tamaño de archivo inválido");
define("_AM_WFL_FILENAMEEMPTY","El archivo está vacío");
define("_AM_WFL_NOFILEUPLOAD","Error: no se alojó ningún archivo");
define("_AM_WFL_UPLOADERRORZERO","Hubo un problema en el envío del archivo. Error: 0");
define("_AM_WFL_UPLOADERRORONE","El archivo que intenta enviar al servidor es demasiado grande. Error: 1");
define("_AM_WFL_UPLOADERRORTWO","El archivo que intenta enviar al servidor es demasiado grande. Error: 2");
define("_AM_WFL_UPLOADERRORTHREE","El archivo que intenta enviar al servidor fue sólo parcialmente alojado. Error: 3");
define("_AM_WFL_UPLOADERRORFOUR","No seleccionó ningún archivo. Error: 4");
define("_AM_WFL_UPLOADERRORFIVE","No seleccionó ningún archivo. Error: 5");
define("_AM_WFL_NOUPLOADDIR","No seleccionó ningún directorio en el servidor para alojar el archivo");
define("_AM_WFL_FAILOPENDIR","Error al abrir el directorio: ");
define("_AM_WFL_FAILOPENDIRWRITEPERM","Error al abrir el directorio con permisos de escritura: ");
define("_AM_WFL_FILESIZEMAXSIZE","Tamaño del archivo: %u. Tamaño máximo permitido: %u");
define("_AM_WFL_FILESIZEMAXWIDTH","Anchura del archivo: %u. Anchura máxima permitida: %u");
define("_AM_WFL_FILESIZEMAXHEIGHT","Altura del archivo: %u. Máxima altura permitida: %u");
define("_AM_WFL_MIMENOTALLOW","MIME type no permitido: ");
define("_AM_WFL_FAILEDUPLOADING","Fallo al alojar el archivo: ");
define("_AM_WFL_FILE","Archivo");
define("_AM_WFL_ALREADYEXISTTRYAGAIN"," ya está en el servidor. Por favor, renómbrelo a inténtelo de nuevo.<br />");
define("_AM_WFL_ERRORSRETURNUPLOAD","<h4>Errores al alojar el archivo</h4>");
define("_AM_WFL_DOESNOTEXIST"," no existe");
define("_AM_WFL_INFORMATION","Información del enlace");
define("_AM_WFL_HITS","Clics: ");
define("_AM_WFL_PAGERANK","PageRank: ");
define("_AM_WFL_ERROR_CATISCAT","No puede establecer una categoría como subcategoría de ella misma.");
define("_AM_WFL_MOD_COUNTRY","País:");
define("_AM_WFL_MOD_KEYWORDS","Palabras clave:");
define("_AM_WFL_MOD_ITEM_TAG","Etiquetas:");
define("_AM_WFL_MOD_GOOGLEMAP","Google Maps:");
define("_AM_WFL_MOD_YAHOOMAP","Yahoo Maps:");
define("_AM_WFL_MOD_MULTIMAP","Multimapa:");
define("_AM_WFL_MOD_STREET1","Calle 1:");
define("_AM_WFL_MOD_STREET2","Calle 2 (opcional):");
define("_AM_WFL_MOD_TOWN","Ciudad:");
define("_AM_WFL_MOD_STATE","Estado-provincia:");
define("_AM_WFL_MOD_ZIP","Código Postal:");
define("_AM_WFL_MOD_TEL","Teléfono:");
define("_AM_WFL_MOD_FAX","Fax:");
define("_AM_WFL_MOD_VOIP","VoIP:");
define("_AM_WFL_MOD_MOBILE","Móvil:");
define("_AM_WFL_MOD_EMAIL","E-Mail:");
define("_AM_WFL_MOD_VAT","VAT:");
// version 1.06 RC-2
define("_AM_WFL_IPAGE_SHOWLATEST","¿Mostrar últimos listados?");
define("_AM_WFL_IPAGE_LATESTTOTAL","¿Cuantos enlaces se mostrarán?");
define("_AM_WFL_IPAGE_LATESTTOTAL_DSC","0 desactiva esta opción.");
 //version 1.06 Final
define("_AM_WFL_DOCUMENTATION","Documentación");
define("_AM_WFL_SHOWNOIMAGE","No mostrar imagen");
define("_AM_WFL_NOSELECTION","No hay selección");
define("_AM_WFL_NOFILESELECT","No se seleccionó ningún archivo");
define("_AM_WFL_SHOWNOIMAGE","Show no image");
define("_AM_WFL_NOSELECTION","No selection");
define("_AM_WFL_NOFILESELECT","No selected file");
?>
