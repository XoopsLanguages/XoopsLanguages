<?php

/**
 * Module: XoopsTube
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Xoopstube
 * @author          XOOPS Development Team
 * @copyright       2001-2013 The XOOPS Project
 * @link            http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @since           1.0.6
 * @Language        Spanish Traducción de Evasan y Debianus para http://es.impresscms.org
 * @version         $Id$
 */

define("_AM_XTUBE_WARNINSTALL1", "Advertencia: El directorio %s existe en su servidor. <br />Por favor, elimina el mismo por razones de seguridad.");
define("_AM_XTUBE_WARNINSTALL2", "Advertencia: El archivo %s existe en su servidor. <br />Por favor, elimina el mismo por razones de seguridad.");
define("_AM_XTUBE_WARNINSTALL3", "Advertencia: La carpeta %s no existe en su servidor. <br />Este carpeta es requerida por XoopsTube.");

define("_AM_XTUBE_MODULE_NAME", "XoopsTube");

define("_AM_XTUBE_BMODIFY", "Modificar");
define("_AM_XTUBE_BDELETE", "Eliminar");
define("_AM_XTUBE_BCREATE", "Crear");
define("_AM_XTUBE_BADD", "Añadir");
define("_AM_XTUBE_BAPPROVE", "Aprobar");
define("_AM_XTUBE_BIGNORE", "Ignorar");
define("_AM_XTUBE_BCANCEL", "Cancelar");
define("_AM_XTUBE_BSAVE", "Guardar");
define("_AM_XTUBE_BRESET", "Restablecer");
define("_AM_XTUBE_BMOVE", "Mover videos");
define("_AM_XTUBE_BUPLOAD", "Subir");
define("_AM_XTUBE_BDELETEIMAGE", "Eliminar la imágen seleccionada");
define("_AM_XTUBE_BRETURN", "Retornar a donde estaba");
define("_AM_XTUBE_DBERROR", "Error en el acceso a la base de datos");
// Other Options
define("_AM_XTUBE_TEXTOPTIONS", "Opciones de texto:");
define("_AM_XTUBE_DISABLEHTML", " Desactivar etiquetas HTML");
define("_AM_XTUBE_DISABLESMILEY", " Desactivar caritas");
define("_AM_XTUBE_DISABLEXCODE", " Desactivar códigos ImpressCMS");
define("_AM_XTUBE_DISABLEIMAGES", " Desactivar imágenes");
define("_AM_XTUBE_DISABLEBREAK", " ¿Usar ImpressCMS 'linebreak conversion'?");
define("_AM_XTUBE_UPLOADFILE", "Video subido con éxito");
define("_AM_XTUBE_NOMENUITEMS", "No hay items dentro del menú");
// Admin Bread crumb
define("_AM_XTUBE_PREFS", "Preferencias");
define("_AM_XTUBE_BUPDATE", "Actualizar el módulo");
define("_AM_XTUBE_BINDEX", "Índice principal");
define("_AM_XTUBE_BPERMISSIONS", "Permisos");
define("_AM_XTUBE_BLOCKADMIN", "Bloques");
define("_AM_XTUBE_GOMODULE", "Ir al módulo");
define("_AM_XTUBE_ABOUT", "Acerca de");
// Admin Summary
define("_AM_XTUBE_SCATEGORY", "Categorías: ");
define("_AM_XTUBE_SFILES", "Vídeos: ");
define("_AM_XTUBE_SNEWFILESVAL", "Subidos: ");
define("_AM_XTUBE_SMODREQUEST", "Modificados: ");
define("_AM_XTUBE_SREVIEWS", "Críticas: ");

// Admin Main Menu
define("_AM_XTUBE_MCATEGORY", "Gestión de la categorías");
define("_AM_XTUBE_MVIDEOS", "Gestión de vídeo");
define("_AM_XTUBE_MLISTBROKEN", "Listar vídeos rotos");
define("_AM_XTUBE_MLISTPINGTIMES", "Listar Pingtime de enlaces");
define("_AM_XTUBE_INDEXPAGE", "Gestión de la página índice");
define("_AM_XTUBE_MCOMMENTS", "Comentarios");
define("_AM_XTUBE_MVOTEDATA", "Fecha de los votos");
define("_AM_XTUBE_MUPLOADS", "Subir imagen");

// Catgeory defines
define("_AM_XTUBE_CCATEGORY_CREATENEW", "Crear nueva categoría");
define("_AM_XTUBE_CCATEGORY_MODIFY", "Modificar categoría");
define("_AM_XTUBE_CCATEGORY_MOVE", "Mover la categoría");
define("_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Título de la categoría:");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Error moviendo los vídeos: no se han podido mover a esta categoría");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Error moviendo los vídeos: no se puede encontrar esta categoría");
define("_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Videos movidos y categoría eliminada");
define("_AM_XTUBE_CCATEGORY_CREATED", "Nueva categoría creada y base de datos actualizada con éxito");
define("_AM_XTUBE_CCATEGORY_MODIFIED", "La categoría seleccionada fue modificada y la base de datos fue actualizada con éxito");
define("_AM_XTUBE_CCATEGORY_DELETED", "Categoría seleccionada eliminada y base de datos actualizada con éxito");
define("_AM_XTUBE_CCATEGORY_AREUSURE", "Advertencia: ¿Está seguro de querer eliminar esta categoría y TODOS los vídeos y comentarios de la misma?");
define("_AM_XTUBE_CCATEGORY_NOEXISTS", "Debe crear una categoría antes de poder añadir un nuevo vídeo");
define("_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Permisos de acceso a la categoría:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione el grupo de usuarios que tendrán acceso a esta categoría.</span></div>");
define("_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Permisos para subir vídeos a esta categoría :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione el grupo de usuarios que podrán subir nuevos vídeos a esta categoría.</span></div>");
define("_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Permisos de moderación en la categoría:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione el grupo de usuarios que que tendrán permisos para poder moderar esta categoría.</span></div>");

define("_AM_XTUBE_FCATEGORY_TITLE", "Título de la categoría :");
define("_AM_XTUBE_FCATEGORY_WEIGHT", "Immportancia de la categoría:");
define("_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Fijar como subcategoría:");
define("_AM_XTUBE_FCATEGORY_CIMAGE", "Selecciona la imágen de la categoría:");
define("_AM_XTUBE_FCATEGORY_DESCRIPTION", "Establecer descripción de la categoría:");
define("_AM_XTUBE_FCATEGORY_SUMMARY", "Establecer sumario de la categoría:");
/**
 * Index page Defines
 */
define("_AM_XTUBE_IPAGE_UPDATED", "Página índice modificada y base de datos actualizada con éxito");
define("_AM_XTUBE_IPAGE_INFORMATION", "Información de la página índice");
define("_AM_XTUBE_IPAGE_MODIFY", "Modificar página índice");
define("_AM_XTUBE_IPAGE_CIMAGE", "Seleccionar imágen del índice:");
define("_AM_XTUBE_IPAGE_CTITLE", "Título del índice:");
define("_AM_XTUBE_IPAGE_CHEADING", "Cabecera del índice:");
define("_AM_XTUBE_IPAGE_CHEADINGA", "Alineación de la cabecera del índice:");
define("_AM_XTUBE_IPAGE_CFOOTER", "Pie de página del índice:");
define("_AM_XTUBE_IPAGE_CFOOTERA", "Alineación del pie de página del índice:");
define("_AM_XTUBE_IPAGE_CLEFT", "Alineación izquierda");
define("_AM_XTUBE_IPAGE_CCENTER", "Alineación central");
define("_AM_XTUBE_IPAGE_CRIGHT", "Alineación derecha");
/**
 * Permissions defines
 */
define("_AM_XTUBE_PERM_MANAGEMENT", "Gestión de permisos");
define("_AM_XTUBE_PERM_PERMSNOTE", "<div><span style='font-weight: bold;'>NOTE:</span> Por favor, tenga cuidado porque si ha fijado correctamente los permisos para ver aquí, un grupo podría no ver los artículos o los bloques si uted no has conferido permisos de acceso al módulo a ese grupo. Para hacer esto vaya a las Preferencias del sistema, Grupos, elija el grupo apropiado y haga clic en las cuadros necesarios para garantizar el acceso a los miembros de ese grupo.");
define("_AM_XTUBE_PERM_CPERMISSIONS", "Permisos de la categoría");
define("_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Seleccione las categorías que cada grupo de usuarios podrá visualizar");
define("_AM_XTUBE_PERM_CNOCATEGORY", "No se pueden establecer los permisos: las categorías no han sido creadas todavía");
define("_AM_XTUBE_PERM_FPERMISSIONS", "Permisos del vídeo");
define("_AM_XTUBE_PERM_FNOFILES", "No se pueden fijar los permisos: los vídeos no han sido creados todavía");
define("_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Seleccione los vídeos que cada grupo puede ver");
/**
 * Upload defines
 */
define("_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Imágen subida con éxito al servidor de destino");
define("_AM_XTUBE_VIDEO_NOIMAGEEXIST", "Error: ninguna imagen fue seleccionada para ser subida. Por favor, inténtelo de nuevo");
define("_AM_XTUBE_VIDEO_IMAGEEXIST", "La imágen ya existe en el área de subidas");
define("_AM_XTUBE_VIDEO_FILEDELETED", "La imagen ha sido eliminada.");
define("_AM_XTUBE_VIDEO_FILEERRORDELETE", "Error eliminando el vídeo: no fue encontrado en el servidor.");
define("_AM_XTUBE_VIDEO_NOFILEERROR", "Error eliminando la imagen: ninguna fue seleccionada.");
define("_AM_XTUBE_VIDEO_DELETEFILE", "Advertencia: ¿estás seguro que desea eliminar este enlace a la imágen?");
define("_AM_XTUBE_VIDEO_IMAGEINFO", "Estado del servidor");
define("_AM_XTUBE_VIDEO_SPHPINI", "<span style='font-weight: bold;'>Información tomada del enlace de PHP ini:</span>");
define("_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Estado de 'Safe Mode': ");
define("_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: ");
define("_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Estado de 'Server Uploads': ");
define("_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Tamaño máximo de subida permitido: ");
define("_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Tamaño máximo de envíos permitido: ");
define("_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (Esto puede causar problemas)");
define("_AM_XTUBE_VIDEO_GDLIBSTATUS", "Estado de la librería GD: ");
define("_AM_XTUBE_VIDEO_GDLIBVERSION", "Versión de la librería GD: ");
define("_AM_XTUBE_VIDEO_GDON", "<span style='font-weight: bold;'>Activado</span> (Miniaturas disponibles)");
define("_AM_XTUBE_VIDEO_GDOFF", "<span style='font-weight: bold;'>Desactivado</span> (Miniaturas no disponibles)");
define("_AM_XTUBE_VIDEO_OFF", "<span style='font-weight: bold;'>OFF</span>");
define("_AM_XTUBE_VIDEO_ON", "<span style='font-weight: bold;'>ON</span>");
define("_AM_XTUBE_VIDEO_CATIMAGE", "Imágenes de las categorías");
define("_AM_XTUBE_VIDEO_SCREENSHOTS", "Capturas de pantalla");
define("_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Imágenes principales");
define("_AM_XTUBE_VIDEO_FCATIMAGE", "Ruta a la imágen de la categoría");
define("_AM_XTUBE_VIDEO_FSCREENSHOTS", "Ruta a la imagen de captura de pantalla");
define("_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Ruta a la imágen principal");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Subir imágen: ");
define("_AM_XTUBE_VIDEO_FUPLOADPATH", "Ruta de subida: ");
define("_AM_XTUBE_VIDEO_FUPLOADURL", "URL de subida: ");
define("_AM_XTUBE_VIDEO_FOLDERSELECTION", "Seleccionar el destino del archivo subido:");
define("_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Mostrar la imágen seleccionada:");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Subir nueva imágen al destino seleccionado:");

// Main Index defines
define("_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Sumario de la administración del módulo");
define("_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Videos publicados:");
define("_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Videos autopublicados:");
define("_AM_XTUBE_MINDEX_AUTOEXPIRE", "Vídeos autoexpirados:");
define("_AM_XTUBE_MINDEX_EXPIRED", "Videos expirados:");
define("_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Vídeos 'offline':");
define("_AM_XTUBE_MINDEX_ID", "ID");
define("_AM_XTUBE_MINDEX_TITLE", "Título del vídeo");
define("_AM_XTUBE_MINDEX_POSTER", "Envió");
define("_AM_XTUBE_MINDEX_ONLINE", "Estado");
define("_AM_XTUBE_MINDEX_ONLINESTATUS", "En línea");
define("_AM_XTUBE_MINDEX_PUBLISH", "Publicado");
define("_AM_XTUBE_MINDEX_PUBLISHED", "Publicado");
define("_AM_XTUBE_MINDEX_EXPIRE", "Expirado");
define("_AM_XTUBE_MINDEX_NOTSET", "Fecha no fijada");
define("_AM_XTUBE_MINDEX_SUBMITTED", "Fecha subida");

define("_AM_XTUBE_MINDEX_ACTION", "Acción");
define("_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "Advertencia: No hay vídeos que reúnan este criterio");
define("_AM_XTUBE_MINDEX_PAGE", "<span style='font-weight: bold;'>Página:<span style='font-weight: bold;'> ");
define('_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>Detalles de la página principal de XoopsTube.</li><li>Puede fácilmente cambiar la imágen logo, la cabecera del índice principal y el texto del pie de página para ajustarlos a sus necesidades</li></ul><br />Nota: La imágen del logo que elija será usada en XoopsTube.');
define("_AM_XTUBE_MINDEX_RESPONSE", "Tiempo de respuesta");
// Submitted Links
define("_AM_XTUBE_SUB_SUBMITTEDFILES", "Videos subidos");
define("_AM_XTUBE_SUB_FILESWAITINGINFO", "Esperando información de los vídeos");
define("_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Videos esperando validación: ");
define("_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<span style='font-weight: bold;'>Aprobar</span> información del nuevo vídeo sin validación.");
define("_AM_XTUBE_SUB_EDITWAITINGFILE", "<span style='font-weight: bold;'>Editar</span> la información del nuevo vídeo y entonces aprobarlo.");
define("_AM_XTUBE_SUB_DELETEWAITINGFILE", "<span style='font-weight: bold;'>Eliminar</span> la información del nuevo vídeo.");
define("_AM_XTUBE_SUB_NOFILESWAITING", "No hay vídeos que reúnan este criterio");
define("_AM_XTUBE_SUB_NEWFILECREATED", "Creados los datos del nuevo vídeo y base de datos actualizada con éxito");
// Vote Information
define("_AM_XTUBE_VOTE_RATINGINFOMATION", "Información de la votación");
define("_AM_XTUBE_VOTE_TOTALVOTES", "Total de votos: ");
define("_AM_XTUBE_VOTE_REGUSERVOTES", "Votos de los usuarios registrados: %s");
define("_AM_XTUBE_VOTE_ANONUSERVOTES", "Votos de usuarios anónimos: %s");
define("_AM_XTUBE_VOTE_USER", "Usuario");
define("_AM_XTUBE_VOTE_IP", "Dirección IP");
define("_AM_XTUBE_VOTE_DATE", "Subido");
define("_AM_XTUBE_VOTE_RATING", "Valoración");
define("_AM_XTUBE_VOTE_NOREGVOTES", "Votos de usuarios no registrados");
define("_AM_XTUBE_VOTE_NOUNREGVOTES", "Votos de usuarios no registrados"); //No Unregistered User Votes: duda con la anterior
define("_AM_XTUBE_VOTE_VOTEDELETED", "Datos de votos eliminados.");
define("_AM_XTUBE_VOTE_ID", "ID");
define("_AM_XTUBE_VOTE_FILETITLE", "Título del vídeo");
define("_AM_XTUBE_VOTE_DISPLAYVOTES", "Información de la votación");
define("_AM_XTUBE_VOTE_NOVOTES", "No hay votos de los usuarios a mostrar");
define("_AM_XTUBE_VOTE_DELETE", "No mostrar los votos de los usuarios");
define("_AM_XTUBE_VOTE_DELETEDSC", "<span style='font-weight: bold;'>Eliminar</span> la información de los votos seleccionados de la base de datos.");
define("_AM_XTUBE_VOTEDELETED", "Los votos seleccionados han sido eliminados de la base de datos");

define("_AM_XTUBE_VOTE_USERAVG", "Valoración media de los usuarios");
define("_AM_XTUBE_VOTE_TOTALRATE", "Total de votos");
define("_AM_XTUBE_VOTE_MAXRATE", "Máximo voto del item");
define("_AM_XTUBE_VOTE_MINRATE", "Mínimo voto del item");
define("_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "El más votado por");
define("_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Menos votado por");
define("_AM_XTUBE_VOTE_MOSTVOTERSUID", "El votante más activo");
define("_AM_XTUBE_VOTE_REGISTERED", "Votos de usuarios registrados");
define("_AM_XTUBE_VOTE_NONREGISTERED", "Votos de usuarios anónimos");
// Modifications
define("_AM_XTUBE_MOD_TOTMODREQUESTS", "Total de las modificaciones solicitadas: ");
define("_AM_XTUBE_MOD_MODREQUESTS", "Vídeos modificados");
define("_AM_XTUBE_MOD_MODREQUESTSINFO", "Información de los vídeos modificados");
define("_AM_XTUBE_MOD_MODID", "ID");
define("_AM_XTUBE_MOD_MODTITLE", "Título");
define("_AM_XTUBE_MOD_MODPOSTER", "Enviado originalmente por: ");
define("_AM_XTUBE_MOD_DATE", "Subido");
define("_AM_XTUBE_MOD_NOMODREQUEST", "No hay peticiones que cumplan este criterio");
define("_AM_XTUBE_MOD_TITLE", "Título del vídeo: ");
define("_AM_XTUBE_MOD_LID", "Vídeo ID: ");
define("_AM_XTUBE_MOD_CID", "Categoría: ");
define("_AM_XTUBE_MOD_URL", "URL del vídeo: ");
define("_AM_XTUBE_MOD_PUBLISHER", "Publicador: ");
define("_AM_XTUBE_MOD_FORUMID", "Foro: ");
define("_AM_XTUBE_MOD_SCREENSHOT", "Captura de pantalla: ");
define("_AM_XTUBE_MOD_HOMEPAGE", "Página web: ");
define("_AM_XTUBE_MOD_HOMEPAGETITLE", "Título de la web: ");
define("_AM_XTUBE_MOD_SHOTIMAGE", "Captura de pantalla: ");
define("_AM_XTUBE_MOD_DESCRIPTION", "Descripción: ");
define("_AM_XTUBE_MOD_MODIFYSUBMITTER", "Enviado por: ");
define("_AM_XTUBE_MOD_MODIFYSUBMIT", "Lo envió");
define("_AM_XTUBE_MOD_PROPOSED", "Detalles del vídeo propuesto");
define("_AM_XTUBE_MOD_ORIGINAL", "Detalles del vídeo original");
define("_AM_XTUBE_MOD_REQDELETED", "La modificación solicitada fue eliminada de la base de datos");
define("_AM_XTUBE_MOD_REQUPDATED", "El vídeo seleccionado fue modificado y la base de datos actualizada con éxito");
define('_AM_XTUBE_MOD_VIEW', 'Ver');
// Link management
define("_AM_XTUBE_VIDEO_ID", "Video ID: ");
define("_AM_XTUBE_VIDEO_IP", "Dirección IP de quien lo subió: ");
define("_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: bold;'>Extensiones de vídeo permitidas</span>:</div>");
define("_AM_XTUBE_VIDEO_MODIFYFILE", "Modificar información del vídeo");
define("_AM_XTUBE_VIDEO_CREATENEWFILE", "Crear nuevo vídeo");
define("_AM_XTUBE_VIDEO_TITLE", "Título del vídeo: ");
define("_AM_XTUBE_VIDEO_DLVIDID", "Video id-code: ");
define("_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<span style='font-size: small;'><span style='font-weight: bold;'>YouTube:</span> http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span><br />
<span style='font-weight: bold;'>MetaCafe:</span> http://www.metacafe.com/watch/<span style='color: #FF0000;'>191543/sperm_whale_encounters_underwater_robot</span>/<br />
<span style='font-weight: bold;'>SPIKE/ifilm:</span> http://www.ifilm.com/video/<span style='color: #FF0000;'>2718605</span><br />
<span style='font-weight: bold;'>Photobucket:</span> http://i39.photobucket.com/albums/<span style='color: #FF0000;'>e168/vailtom/th_BigSquid</span>.jpg<br />
<span style='font-weight: bold;'>Google Video:</span> http://video.google.com/videoplay?docid=<span style='color: #FF0000;'>4761076111111865377</span>&q=rov&total=913&start=...<br />
<span style='font-weight: bold;'>MySpace TV:</span> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<span style='color: #FF0000;'>13171141</span><br />
<span style='font-weight: bold;'>DailyMotion:</span> http://www.dailymotion.com/video/<span style='color: #FF0000;'>x40bhg</span>_blondesecretary_fun<br />
<span style='font-weight: bold;'>Blip.tv </span>embed code<span style='font-weight: bold;'>:</span> http://blip.tv/play/<span style='color: #FF0000;'>Abe6EwA</span> ...<br />
<span style='font-weight: bold;'>ClipFish:</span> http://www.clipfish.de/player.php?videoid=<span style='color: #FF0000;'>MTg1NTYyfDM1Ng</span>%3D%3D<br />
<span style='font-weight: bold;'>LiveLeak:</span> http://www.liveleak.com/view?i=<span style='color: #FF0000;'>a59_1205566630</span><br />
<span style='font-weight: bold;'>Maktoob:</span> file=http://<span style='color: #FF0000;'>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</span>.flv (from embed-code)<br />
<span style='font-weight: bold;'>Veoh:</span> http://www.veoh.com/videos/<span style='color: #FF0000;'>v15069875yApCz7r3</span>?jsonParams=...<br />
<span style='font-weight: bold;'>Vimeo:</span> http://www.vimeo.com/<span style='color: #FF0000;'>2246499</span><br />
<span style='font-weight: bold;'>Megavideo:</span> http://www.megavideo.com/?v=<span style='color: #FF0000;'>J6YSRE0T</span><br />
<span style='font-weight: bold;'>Viddler:</span> http://www.viddler.com/player/<span style='color: #FF0000;'>d32d2b94</span>/ (see embed code)<br />
<span style='font-weight: bold;'>XoopsTube:</span> <span style='color: #FF0000;'>Take over from above selection menu</span></span>");
define("_AM_XTUBE_VIDEO_PICURL", "URL de la imagen: ");
define("_AM_XTUBE_VIDEO_PICURLNOTE", "<span style='font-size: small;'>URL de la imagen cuando procede de Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler o Maktoob.</span>");
define("_AM_XTUBE_VIDEO_DESCRIPTION", "Descripción: ");
define("_AM_XTUBE_VIDEO_CATEGORY", "Categoría principal: ");
define("_AM_XTUBE_VIDEO_FILESSTATUS", "¿Permitir el acceso sin conexión?<br /><br /><span style='font-weight: normal;'>el vídeo no será visible para todos los usuarios.</span>");
define("_AM_XTUBE_VIDEO_SETASUPDATED", " ¿Fijar el estado del vídeo como actualizado?<br /><br /><span style='font-weight: normal;'>el mismo mostrará el icono de 'actualizado'.</span>");
define("_AM_XTUBE_VIDEO_SHOTIMAGE", "Captura de pantalla: ");
define("_AM_XTUBE_VIDEO_DISCUSSINFORUM", "¿Añadir discusión en este foro?");
define("_AM_XTUBE_VIDEO_PUBLISHDATE", "Fecha de publicación:");
define("_AM_XTUBE_VIDEO_EXPIREDATE", "Fecha de expiración:");
define("_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Eliminar la fecha de publicación:");
define("_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Eliminar la fecha de expiración:");
define("_AM_XTUBE_VIDEO_PUBLISHDATESET", " Fijar la fecha de publicación: ");
define("_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Fijar la fecha/hora de publicación");
define("_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Fijar la fecha/hora de la expiración");
define("_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<span style='font-weight: bold;'>Establecer la fecha de la publicación: </span>");
define("_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<span style='font-weight: bold;'>Establecer nueva fecha de publicación: </span><br />Publicado:");
define("_AM_XTUBE_VIDEO_SETPUBDATESETS", "<span style='font-weight: bold;'>Establecer la fecha de publicación: </span><br />Publicado el:");
define("_AM_XTUBE_VIDEO_EXPIREDATESET", " Fijar la fecha de expiración: ");
define("_AM_XTUBE_VIDEO_SETEXPIREDATE", "<span style='font-weight: bold;'>Fijar la fecha de expiración: </span>");
define("_AM_XTUBE_VIDEO_DELEDITMESS", "¿Eliminar el reporte de enlace roto?<br /><br /><span style='font-weight: normal;'>Si elige <span style='font-weight: bold;'>Si</span> el reporte será elimiando y confirmará que el vídeo está disponible.</span>");
define("_AM_XTUBE_VIDEO_MUSTBEVALID", "La captura debe ser una imagen válida de vídeo en el directorio %s (ej. shot.gif). Déje este campo en blanco si no hay enlace a ninguna imagen.");
define("_AM_XTUBE_VIDEO_EDITAPPROVE", "Aprobar vídeo:");
define("_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Nuevo vídeo creado y base de datos actualizada con éxito.");
define("_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "El vídeo seleccionado fue modificado y la base de datos actualizada con éxito.");
define("_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "¿Realmente desea eliminar el vídeo seleccionado?");
define("_AM_XTUBE_VIDEO_FILEWASDELETED", "El vídeo %s fue eliminado con éxito de la base de datos.");
define("_AM_XTUBE_VIDEO_FILEAPPROVED", "Vídeo aprobado y base de datos actualizada con éxito.");
define("_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<span style='font-weight: bold;'>-Crear noticia desde el enlace</span>");
define("_AM_XTUBE_VIDEO_SUBMITNEWS", "¿Remitir el nuevo vídeo como noticia?");
define("_AM_XTUBE_VIDEO_NEWSCATEGORY", "Seleccione la categoría de noticias para la remisión:");
define("_AM_XTUBE_VIDEO_NEWSTITLE", "Título de la noticia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Déjelo en blanco para usar como tal el título del vídeo</span></div>");
define("_AM_XTUBE_VIDEO_PUBLISHER", "Nombre de quien publica el vídeo: ");

/**
 * Broken links defines
 */
define("_AM_XTUBE_SBROKENSUBMIT", "Roto: ");
define("_AM_XTUBE_BROKEN_FILE", "Reportes de vídeos con enlaces rotos");
define("_AM_XTUBE_BROKEN_FILEIGNORED", "El reporte es ignorado y se ha eliminado de la base de datos con éxito.");
define("_AM_XTUBE_BROKEN_NOWACK", "Estado acerca de la confirmación cambiado y base de datos actualizada.");
define("_AM_XTUBE_BROKEN_NOWCON", "Se cambió el estado de la confirmación y la base de datos se actualizó.");
define("_AM_XTUBE_BROKEN_REPORTINFO", "Información sobre reportes de vídeos con enlaces rotos");
define("_AM_XTUBE_BROKEN_REPORTSNO", "Reportes de vídeos con enlaces rotos en espera:");
define("_AM_XTUBE_BROKEN_IGNOREDESC", "<span style='font-weight: bold;'>Ignorar</span> el reporte y solo eliminar el mismo.");
define("_AM_XTUBE_BROKEN_DELETEDESC", "<span style='font-weight: bold;'>Eliminar</span> los datos del enlace reportado y el reporte mismo de la base de datos.");
define("_AM_XTUBE_BROKEN_EDITDESC", "<span style='font-weight: bold;'>Modificar</span> el vídeo para solucionar el problema.");
define("_AM_XTUBE_BROKEN_ACKDESC", "<span style='font-weight: bold;'>Confirmado</span> Establecer como tal el reporte del vídeo con enlace roto.");
define("_AM_XTUBE_BROKEN_CONFIRMDESC", "<span style='font-weight: bold;'>Confirmado</span> Establecer como tal el reporte del vídeo con enlace roto.");
define("_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Confirmado");
define("_AM_XTUBE_BROKEN_DCONFIRMED", "Confirmado");

define("_AM_XTUBE_BROKEN_ID", "ID");
define("_AM_XTUBE_BROKEN_TITLE", "Título");
define("_AM_XTUBE_BROKEN_REPORTER", "Revisor");
define("_AM_XTUBE_BROKEN_FILESUBMITTER", "Remitente");
define("_AM_XTUBE_BROKEN_DATESUBMITTED", "Fecha de la remisión");
define("_AM_XTUBE_BROKEN_ACTION", "Acción");
define("_AM_XTUBE_BROKEN_NOFILEMATCH", "No hay reportes de enlaces de vídeos rotos que reúnan estos criterios.");
define("_AM_XTUBE_BROKENFILEDELETED", "El vídeo fue eliminado de la base de datos y el reporte de estar roto el enlace también.");
define("_AM_XTUBE_BROKEN_VIDSOURCE", "Fuente del vídeo");
/**
 * About defines
 */
define("_AM_XTUBE_BY", "por");
// block defines
define("_AM_XTUBE_BADMIN", "Administración de bloques");
define("_AM_XTUBE_BLKDESC", "Descripción");
define("_AM_XTUBE_TITLE", "Título");
define("_AM_XTUBE_SIDE", "Alineación");
define("_AM_XTUBE_WEIGHT", "Orden");
define("_AM_XTUBE_VISIBLE", "Visible");
define("_AM_XTUBE_ACTION", "Acción");
define("_AM_XTUBE_SBLEFT", "Izquierda");
define("_AM_XTUBE_SBRIGHT", "Derecha");
define("_AM_XTUBE_CBLEFT", "Centro-izquierda");
define("_AM_XTUBE_CBRIGHT", "Centro-derecha");
define("_AM_XTUBE_CBCENTER", "Centro-centro");
define("_AM_XTUBE_ACTIVERIGHTS", "Permisos para activar");
define("_AM_XTUBE_ACCESSRIGHTS", "Permisos para acceder");
// image admin icon
define("_AM_XTUBE_ICO_EDIT", "Editar este ítem");
define("_AM_XTUBE_ICO_DELETE", "Eliminar este ítem");
define("_AM_XTUBE_ICO_RESOURCE", "Modificar este ítem");

define("_AM_XTUBE_ICO_ONLINE", "Online");
define("_AM_XTUBE_ICO_OFFLINE", "Offline");
define("_AM_XTUBE_ICO_APPROVED", "Aprobado");
define("_AM_XTUBE_ICO_NOTAPPROVED", "No aprobado");

define("_AM_XTUBE_ICO_VIDEO", "Vídeo relacionado");
define("_AM_XTUBE_ICO_URL", "Añadir URL relacionado");
define("_AM_XTUBE_ICO_ADD", "Añadir");
define("_AM_XTUBE_ICO_APPROVE", "Aprobar");
define("_AM_XTUBE_ICO_STATS", "Estadísticas");
define("_AM_XTUBE_ICO_VIEW", "Ver este ítem");

define("_AM_XTUBE_ICO_IGNORE", "Ignorar");
define("_AM_XTUBE_ICO_ACK", "Reconocer el reporte del problema");
define("_AM_XTUBE_ICO_REPORT", "¿Reconocer el reporte del problema?");
define("_AM_XTUBE_ICO_CONFIRM", "Reporte de rotura confirmado");
define("_AM_XTUBE_ICO_CONBROKEN", "¿Confirmar el reporte de rotura?");
define("_AM_XTUBE_ICO_RES", "Editar recursos/vídeos para este item");
define("_AM_XTUBE_MOD_URLRATING", "Valoración del contenido:"); //Interent Content Rating-traducción problemática
// Alternate category
define("_AM_XTUBE_ALTCAT_CREATEF", "Añadir categoría alternativa");
define("_AM_XTUBE_MALTCAT", "Gestión de categorías alternativas");
define("_AM_XTUBE_ALTCAT_MODIFYF", "Gestión de categorías alternativas");
define("_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Las categorías alternativas pueden ser añadidas o eliminadas fácilmente mediante este formulario.</li></ul>");
define('_AM_XTUBE_ALTCAT_CREATED', 'La categoría alternativa fue guardada');

define("_AM_XTUBE_MRESOURCES", "Gestión de recursos");
define("_AM_XTUBE_RES_CREATED", "Gestión de recursos");
define("_AM_XTUBE_RES_ID", "ID");
define("_AM_XTUBE_RES_DESC", "Descripción");
define("_AM_XTUBE_RES_NAME", "Nombre del recurso");
define("_AM_XTUBE_RES_TYPE", "Tipo del recurso");
define("_AM_XTUBE_RES_USER", "Usuario");
define("_AM_XTUBE_RES_CREATEF", "Añadir recurso");
define("_AM_XTUBE_RES_MODIFYF", "Modificar recurso");
define("_AM_XTUBE_RES_NAMEF", "Nombre del recurso:");
define("_AM_XTUBE_RES_DESCF", "Descripción del recurso:");
define("_AM_XTUBE_RES_URLF", "URL del recurso:");
define("_AM_XTUBE_RES_ITEMIDF", "Item ID:");
define("_AM_XTUBE_RES_INFOTEXT", "<ul><li>Nuevos recursos pueden ser fácilmente añadidos, modificados o eliminados a través de este formulario.</li>
    <li>Listar todos los recursos enlazados a un vídeo</li>
    <li>Modificar el nombre del recurso y la descripción</li></ul>
    ");
define("_AM_XTUBE_LISTBROKEN", "Mostrar los vídeos que posiblemente estén rotos. Nota: los resultados que se muestren no están confirmados y deberían ser tomados sólamente como indicios de posibles problemas.<br /><br />");
define("_AM_XTUBE_PINGTIMES", "Mostrar los estimados tiempos de 'round ping' de cada vídeo.<br /><br />Nota: los resultados que se muestren no están confirmados y deberían ser tomados sólamente como indicios de posibles problemas.<br /><br />");

define("_AM_XTUBE_NO_FORUM", "No seleccionó ningún foro");

define("_AM_XTUBE_PERM_RATEPERMISSIONS", "Permisos para valorar");
define("_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Seleccionar los grupos que pueden valorar un vídeo en las categorías seleccionadas.");

define("_AM_XTUBE_PERM_AUTOPERMISSIONS", "Autoaprobar vídeos");
define("_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selecione los grupos que pueden aprobar nuevos vídeos sin la intervención del administrador.");

define("_AM_XTUBE_PERM_SPERMISSIONS", "Permisos para subir");
define("_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Selecciona los grupos que pueden subir nuevos vídeos a las categorías seleccionadas.");

define("_AM_XTUBE_PERM_APERMISSIONS", "Grupos que pueden moderar");
define("_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Selecciona los grupos que tienen privilegios para moderar las categorías seleccionadas.");

define("_AM_XTUBE_TIME", "Tiempo:");
define("_AM_XTUBE_KEYWORDS", "Palabras clave:");
define("_AM_XTUBE_KEYWORDS_NOTE", "<span style='font-size: small;'><em>Las palabras clave deberían ser separadas con una coma (palabraclave1, palabraclave2).</em>");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Metadescripción");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "Para tener más éxito con relación a los motores de búsqueda, puede personalizar la meta descripción que le gustaría usar para este artículo. Si deja este campo vació cuando cree la categoría, automáticamente será difundida con el campo de resumen de este artículo.");

define("_AM_XTUBE_VIDSOURCE", "Fuente del vídeo:");
define("_AM_XTUBE_VIDSOURCE2", "Fuente del vídeo:");
define("_AM_XTUBE_YOUTUBE", "YouTube");
define("_AM_XTUBE_METACAFE", "MetaCafe");
define("_AM_XTUBE_IFILM", "Spike");
define("_AM_XTUBE_GOOGLEVIDEO", "Google Video");
define("_AM_XTUBE_MYSPAVETV", "MySpace TV");
define("_AM_XTUBE_PHOTOBUCKET", "Photobucket");
define("_AM_XTUBE_DAILYMOTION", "DailyMotion");

// Version 1.04 RC-1
define("_AM_XTUBE_BLIPTV", "Blip.tv");
define("_AM_XTUBE_XOOPSTUBE", "XoopsTube");
define("_AM_XTUBE_ICO_EXPIRE", "Expirado");
define("_AM_XTUBE_MXOOPSTUBE", "Añadir XoopsTube Clip");
define("_AM_XTUBE_VIDEO_CATVIDEOIMG", "Imágenes del vídeo");
define("_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Ruta a las imágenes del vídeo");
define("_AM_XTUBE_VUPLOAD_VIDEOEXIST", "El vídeo ya existe");
define("_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Video subido");
define("_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "No existe el vídeo");
define("_AM_XTUBE_VUPLOAD_FILEDELETED", "Video eliminado");
define("_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Error");
define("_AM_XTUBE_VUPLOAD_NOFILEERROR", "No hay archivo");
define("_AM_XTUBE_VUPLOAD_DELETEFILE", "Eliminar el archivo del vídeo");
define("_AM_XTUBE_VUPLOAD_CATVIDEO", "Archivos de vídeo");
define("_AM_XTUBE_VUPLOAD_FCATVIDEO", "Directorio de subida de vídeos");
define("_AM_XTUBE_VUPLOADS", "Subir vídeo "); //Video Upload
define("_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Ruta para subir el vídeo:");
define("_AM_XTUBE_VUPLOAD_FUPLOADURL", "URL para subir el vídeo:");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Subir vídeo: ");
define("_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Seleccione el destino de la subida");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Video a subir");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Seleccionar un archivo de vídeo");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "El archivo de vídeo debe ser del tipo FLV");
define("_AM_XTUBE_BDELETEVIDEO", "Eliminar vídeo");
define("_AM_XTUBE_NOVIDEO", "No mostrar vídeo");
define("_AM_XTUBE_NOIMAGE", "No mostrar imagen");
define("_AM_XTUBE_NOSELECT", "No hay selección");
define("_AM_XTUBE_NOFILESELECT", "No se seleccionó archivo");
define("_AM_XTUBE_XOOPSTUBEVIDEO", "Archivo de vídeo de XoopsTube:");
define("_AM_WFL_WARNINSTALL4", "<span style='font-weight: bold;'>Advertencia:</span> <span style='text-decoration: underline;'>La carpeta</span> %s no tiene permisos de escritura. <br />La misma necesita que el servidor pueda escribir en ella (CHMOD 777) para el uso de XoopsTube.");
// Uploader class
define("_AM_XTUBE_READWRITEERROR", "No ha seleccionado ningún archivo a subir o el servidor no tiene permisos de lectura/esritura para subir este archivo.");
define("_AM_XTUBE_INVALIDFILESIZE", "Tamaño de archivo no válido");
define("_AM_XTUBE_FILENAMEEMPTY", "El archivo está vacío");
define("_AM_XTUBE_NOFILEUPLOAD", "Hubo un error y el archivo no fue subido");
define("_AM_XTUBE_UPLOADERRORZERO", "Hubo un problema en la subida. Error: 0");
define("_AM_XTUBE_UPLOADERRORONE", "El archivo que está intentando subir es demasiado grande. Error: 1");
define("_AM_XTUBE_UPLOADERRORTWO", "El archivo que está intentando subir es demasiado grande. Error: 2");
define("_AM_XTUBE_UPLOADERRORTHREE", "El archivo fue subido sólo parcialmente. Error: 3");
define("_AM_XTUBE_UPLOADERRORFOUR", "No se seleccionó archivo a subir. Error: 4");
define("_AM_XTUBE_UPLOADERRORFIVE", "No se seleccionó archivo a subir. Error: 5");
define("_AM_XTUBE_NOUPLOADDIR", "El directorio de subida no fue seleccionado");
define("_AM_XTUBE_FAILOPENDIR", "Fallo al abrir el directorio: ");
define("_AM_XTUBE_FAILOPENDIRWRITEPERM", "Fallo al abrir el directorio con permisos de escritura: ");
define("_AM_XTUBE_FILESIZEMAXSIZE", "Tamaño del archivo: %u. Máximo tamaño permitido: %u");
define("_AM_XTUBE_FILESIZEMAXWIDTH", "Ancho de la imagen: %u. Máximo permitido: %u");
define("_AM_XTUBE_FILESIZEMAXHEIGHT", "Altura de la imagen: %u. Máximo permitido: %u");
define("_AM_XTUBE_MIMENOTALLOW", "Tipo MIME no permitido: ");
define("_AM_XTUBE_FAILEDUPLOADING", "Fallo al subir el archivo: ");
define("_AM_XTUBE_ALREADYEXISTTRYAGAIN", " ya existe en el servidor. Por favor, renombre el archivo e inténtelo de nuevo.<br />");
define("_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Hubo errores en la subida</h4>");
define("_AM_XTUBE_DOESNOTEXIST", " no existe");

// Version 1.04 RC-2
define("_AM_XTUBE_CLIPFISH", "ClipFish");
define("_AM_XTUBE_LIVELEAK", "LiveLeak");
define('_AM_XTUBE_MAKTOOB', 'Maktoob');
define('_AM_XTUBE_VEOH', 'Veoh');
define("_AM_XTUBE_FILE", "Archivo ");
define("_AM_XTUBE_INFORMATION", "Información del vídeo");
define("_AM_XTUBE_VIDEO_DLVIDIDDSC", "Tenga en cuenta que la parte roja debe estar como en los ejemplos que se muestran más abajo.");
define("_AM_XTUBE_VIDEO_VIEWS", "Vistas: ");
define("_AM_XTUBE_ERROR_CATISCAT", "No puede establecer una categoría como una subcategoría de ella misma");

// Version 1.04 RC-3
define("_AM_XTUBE_MOD_VIDID", "id-code: ");
define("_AM_XTUBE_MOD_VIDSOURCE", "Fuente del vídeo: ");
define("_AM_XTUBE_MOD_TIME", "Tiempo: ");
define("_AM_XTUBE_MOD_KEYWORDS", "Palabras clave: ");
define("_AM_XTUBE_MOD_ITEM_TAG", "Etiquetas: ");
define("_AM_XTUBE_MOD_PICURL", "URL de la imagen: ");
define("_AM_XTUBE_IPAGE_SHOWLATEST", "¿Mostrar las últimas listas?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL", "¿Cuantos vídeos a mostrar?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL_DSC", "0 desactiva esta opción.");

// Version 1.05 RC-1
define('_AM_XTUBE_VIMEO', 'Vimeo');
define('_AM_XTUBE_MEGAVIDEO', 'Megavideo');
define('_AM_XTUBE_VIDDLER', 'Viddler');
define('_AM_XTUBE_CATTITLE', 'Category');

// 1.06 Beta 2

//Definitions for FileCheck
define("_AM_XTUBE_FILECHECKS",		"Information");
define("_AM_XTUBE_UPLOADMAX",		"Maximum upload size: ");
define("_AM_XTUBE_POSTMAX",			"Maximum post size: ");
define("_AM_XTUBE_UPLOADS",			"Uploads allowed: ");
define("_AM_XTUBE_UPLOAD_ON",		"On");
define("_AM_XTUBE_UPLOAD_OFF",		"Off");
define("_AM_XTUBE_GDIMGSPPRT",		"GD image lib supported: ");
define("_AM_XTUBE_GDIMGON",			"Yes");
define("_AM_XTUBE_GDIMGOFF",		"No");
define("_AM_XTUBE_GDIMGVRSN",		"GD image lib version: ");
define("_AM_XTUBE_UPDATE_SUCCESS", "Updated Successfully");

define("_AM_XTUBE_WARNING", "Warning: ");
define("_AM_XTUBE_NOT_EXISTS", "does NOT exist");
define("_AM_XTUBE_UNABLE_TO_WRITE", "I am unable to write to: ");