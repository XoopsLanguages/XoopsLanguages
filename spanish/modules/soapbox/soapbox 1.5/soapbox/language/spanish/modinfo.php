<?php
/**
 * $Id: modinfo.php v 1.5 27 February 2004 hsalazar Exp $
 * Module: Soapbox
 * Version: v 1.5
 * Release Date: 18 February 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SB_MD_NAME","Soapbox");

// A brief description of this module
define("_MI_SB_MD_DESC","Editoriales para tu sitio");

// Sub menus in main menu block
define("_MI_SB_SUB_SMNAME1","Enviar un art&iacute;culo");

// A brief description of this module
define("_MI_SB_ALLOWSUBMIT","1. Env&iacute;os de usuarios:");
define("_MI_SB_ALLOWSUBMITDSC","&iquest;Permitir a los usuarios enviar art&iacute;culos a tu sitio Web?");

define("_MI_SB_AUTOAPPROVE","2. Auto aprobar art&iacute;culos:");
define("_MI_SB_AUTOAPPROVEDSC","&iquest;Aprobar autom&aacute;ticamente los art&iacute;culos enviados sin que el administrador intervenga.");

define("_MI_SB_ALLOWADMINHITS","3. Contar lecturas del administrador:");
define("_MI_SB_ALLOWADMINHITSDSC","&iquest;Permitir que las lecturas del administrador cuenten en las estad&iacute;sticas de conteo de lecturas?");

define("_MI_SB_PERPAGE","4. Art&iacute;culos m&aacute;ximos por p&aacute;gina (administrador):");
define("_MI_SB_PERPAGEDSC","N&uacute;mero de art&iacute;culos que se mostrar&aacute;n en cada p&aacute;gina, en el lado del administrador.");

define("_MI_SB_PERPAGEINDEX","5. Art&iacute;culos m&aacute;ximos por p&aacute;gina (usuario):");
define("_MI_SB_PERPAGEINDEXDSC","N&uacute;mero de art&iacute;culos que se mostrar&aacute;n en cada p&aacute;gina, en el lado del usuario.");

define("_MI_SB_IMGDIR","6. Directorio base de im&aacute;genes:");
define("_MI_SB_IMGDIRDSC","Directorio que contiene las im&aacute;genes operativas. (No lleva \"/\" al final)");

define("_MI_SB_UPLOADDIR","7. Directorio para subir im&aacute;genes:");
define("_MI_SB_UPLOADDIRDSC","Directorio que contendr&aacute; las im&aacute;genes de columnistas y art&iacute;culos. (No lleva \"/\" al final)");

define("_MI_SB_IMGWIDTH","8. Anchura m&aacute;xima de imagen:");
define("_MI_SB_IMGWIDTHDSC","Define la anchura m&aacute;xima permitida para im&aacute;genes que se quieren subir.");

define("_MI_SB_IMGHEIGHT","9. Altura m&aacute;xima de imagen:");
define("_MI_SB_IMGHEIGHTDSC","Define la altura m&aacute;xima permitida para im&aacute;genes que se quieren subir.");

define("_MI_SB_MAXFILESIZE","10. Peso m&aacute;ximo a subir:");
define("_MI_SB_MAXFILESIZEDSC","Define el tama&ntilde;o m&aacute;ximo permitido para archivos que se quieren subir. El l&iacute;mite m&aacute;ximo es el permitido por el servidor.");

define("_MI_SB_DATEFORMAT","11. Formato de la fecha:");
define("_MI_SB_DATEFORMATDSC","Define el formato de despliegue de fecha para los art&iacute;culos.");

define("_MI_SB_ALLOWCOMMENTS","12. Controlar comentarios a nivel art&iacute;culo:");
define("_MI_SB_ALLOWCOMMENTSDSC","Si la opci&oacute;n es 'S&iacute;', s&oacute;lo se aceptar&aacute;n comentarios en los art&iacute;culos cuya casilla de comentarios est&eacute; marcada en la forma de creaci&oacute;n. <br /><br />Si la opci&oacute;n es 'No', los comentarios ser&aacute;n manejados anivel global (mira donde est&aacute; la etiqueta 'Reglas sobre comentarios'.");

define("_MI_SB_MOREARTS","13. Art&iacute;culos en la caja de autor:");
define("_MI_SB_MOREARTSDSC","Deine cu&aacute;ntos art&iacute;culos mostrar en la caja lateral mostrada en cada art&iacute;culo.");

define("_MI_SB_COLSINMENU","14. &iquest;Incluir columnas en el men&uacute;?:");
define("_MI_SB_COLSINMENUDSC","Si la opci&oacute;n es 'S&iacute;', los usuarios autorizados podr&aacute;n ver los nombre de las columnas en su men&uacute; del m&oacute;dulo. Esto no se recomienda para sitios con MUCHAS columnas.");

define("_MI_SB_COLSPERINDEX","15. Columnas en &iacute;ndice:");
define("_MI_SB_COLSPERINDEXDSC","Define cu&aacute;ntos llamados a columnas deben aparecer en cada &iacute;ndice [Valor por defecto = 3]");

define("_MI_SB_ALLOWRATING","16. &iquest;Art&iacute;culos calificables?:");
define("_MI_SB_ALLOWRATINGDSC","Si la opci&oacute;n es 'S&iacute;', los art&iacute;culos mostrar&aacute;n un calificador que permitir&aacute; a los lectores evaluar el art&iacute;culo. [Valor por defecto = Yes]");

define("_MI_SB_INTROTIT","17. Titular de la introducci&oacute;n:");
define("_MI_SB_INTROTITDSC","Texto del titular en la p&aacute;gina &iacute;ndice.");
define("_MI_SB_INTROTITDFLT","Bienvenido a este espacio");

define("_MI_SB_INTROTEXT","18. Texto introductorio:");
define("_MI_SB_INTROTEXTDSC","Contenido del mensaje introductorio que se muestra en la p&aacute;gina &iacute;ndice.");
define("_MI_SB_INTROTEXTDFLT","En esta &aacute;rea del sitio hallar&aacute;s nuestro cat&aacute;logo de columnas editoriales, as&iacute; como el &uacute;ltimo art&iacute;culo de cada uno de nuestros autores. Haz clic en el nombre de una columna para ver los art&iacute;culos publicados bajo esa columna, o sobre el nombre de un art&iacute;culo para ir a leer directamente el art&iacute;culo. Seg&uacute;n tus privilegios, tal vez puedas calificar art&iacute;culos, elegir opciones de notificaci&oacute;n o dejar comentarios.");

define("_MI_SB_BUTTSTXT","19. Botones de creaci&oacute;n visibles:");
define("_MI_SB_BUTTSTXTDSC","Si se define como 'S&iacute;', las tablas de la p&aacute;gina inicial del lado administrativo mostrar&aacute;n un bot&oacute;n 'Crear'. Default: 'No'.");

define("_MI_SB_WARNING","Este m&oacute;dulo se ofrece tal cual, sin la menor garant&iacute;a. Aunque este m&oacute;dulo no est&aacute; en fase beta, est&aacute; sometido a un activo desarrollo por su autor. Esta versi&oacute;n se puede usar en un sitio Web vivo o en un ambiente de producci&oacute;n en l&iacute;nea, pero su uso cae bajo tu propia responsabilidad, lo cual exime al autor de toda responsabilidad por lo que su uso pueda significar.");
define("_MI_SB_AUTHORMSG","Soapbox es mi primer m&oacute;dulo para XOOPS y contiene todos los errores propios de alguien que apenas empieza en el mundo del PHP y esas cosas. Mis primeros pasos en este mundo los di con la ayuda de Catzwolf, ahora retirado del mundo XOOPS, y Soapbox tiene con &eacute;l una gran deuda, que incluye aciertos y errores.<br /><br />La historia de Soapbox se detalla m&aacute;s en la documentaci&oacute;n, pero debo reconocer aqu&iacute; la ayuda valiosa de muchos usuarios de XOOPS, que incluye a: herko, w4z004, marcan, ackbarr, Mithrandir, Predator y muchos m&aacute;s.<br /><br />Por supuesto, tambi&eacute;n hay que contar con la ayuda de quienes han criticado, elogiado o comentado el m&oacute;dulo, a quienes han buscado en &eacute;l m&aacute;s de lo que puede dar y en general a todos quienes han corrido el riesgo de instalarlo en sus sitios para emplearlo a su gusto. A todos ustedes, amigos, muchas gracias.");

// Names of admin menu items
define("_MI_SB_ADMENU1","&Iacute;ndice");
define("_MI_SB_ADMENU2","Columnas");
define("_MI_SB_ADMENU3","Art&iacute;culos");
define("_MI_SB_ADMENU4","Permisos");
define("_MI_SB_ADMENU5","Bloques");
define("_MI_SB_ADMENU6","Ir al m&oacute;dulo");

//Names of Blocks and Block information
define("_MI_SB_ARTSRATED","Art&iacute;culos mejor calificados");
define("_MI_SB_ARTSRATED_DSC","Muestra los art&iacute;culos mejor calificados");
define("_MI_SB_ARTSNEW","Art&iacute;culos recientes");
define("_MI_SB_ARTSNEW_DSC","Muestra art&iacute;culos recientes");
define("_MI_SB_ARTSTOP","Art&iacute;culos m&aacute;s le&iacute;dos");
define("_MI_SB_ARTSTOP_DSC","Muestra los art&iacute;culos m&aacute;s le&iacute;dos");
define("_MI_SB_ARTSPOTLIGHT","Art&iacute;culos destacados [una columna]");
define("_MI_SB_ARTSPOTLIGHT_DSC","Muestra los art&iacute;culos destacados [una columna]");
define("_MI_SB_ARTSPOTLIGHT2","Art&iacute;culos destacados [multicolumna]");
define("_MI_SB_ARTSPOTLIGHT2_DSC","Muestra los art&iacute;culos destacados [multicolumna]");

// Defines for the About page
define("_MI_SB_AUTHOR_INFO","Informaci&oacute;n sobre el autor");
define("_MI_SB_AUTHOR_WEBSITE","Sitio Web");
define("_MI_SB_AUTHOR_EMAIL","E-mail");
define("_MI_SB_AUTHOR_CREDITS","Cr&eacute;ditos del m&oacute;dulo");
define("_MI_SB_MODULE_INFO","Informaci&oacute;n general sobre el m&oacute;dulo");
define("_MI_SB_MODULE_STATUS","Versi&oacute;n");
define("_MI_SB_MODULE_DEMO","Sitio demo");
define("_MI_SB_MODULE_SUPPORT","Sitio de soporte");
define("_MI_SB_MODULE_BUG","Env&iacute;o de bugs");
define("_MI_SB_MODULE_FEATURE","Pedir funcionalidad");
define("_MI_SB_MODULE_DISCLAIMER","Aclaraci&oacute;n");
define("_MI_SB_AUTHOR_WORD","Nota del autor");

// Text for notifications
define("_MI_SB_GLOBAL_NOTIFY","Global");
define("_MI_SB_GLOBAL_NOTIFYDSC","Opciones globales de notificaci&oacute;n.");

define("_MI_SB_COLUMN_NOTIFY","Columna");
define("_MI_SB_COLUMN_NOTIFYDSC","Opciones de notificaci&oacute;n que se aplican a la columna actual.");

define("_MI_SB_ARTICLE_NOTIFY","Art&iacute;culo");
define("_MI_SB_ARTICLE_NOTIFYDSC","Opciones de notificaci&oacute;n que se aplican al art&iacute;culo actual.");

define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFY","Nueva columna");
define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYCAP","Notificarme cuando sea creada una nueva columna.");
define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYDSC","Recibir notificaci&oacute;n cuando se cree una nueva columna.");
define("_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Nueva columna");

define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFY","Modificaci&oacute;n de art&iacute;culo solicitada");
define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYCAP","Notificarme cuando haya una solicitud de modificaci&oacute;n de art&iacute;culo.");
define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYDSC","Recibir notificaci&oacute;n cuando se env&iacute;e una solicitud de modificaci&oacute;n de art&iacute;culo.");
define("_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Modificaci&oacute;n de art&iacute;culo solicitada");

define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFY","Reporte de art&iacute;culo roto enviado");
define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYCAP","Notificarme cuando haya un reporte de art&iacute;culo roto.");
define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYDSC","Recibir notificaci&oacute;n cuando se env&iacute; un reporte de art&iacute;culo roto.");
define("_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Art&iacute;culo roto reportado");

define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFY","Art&iacute;culo enviado");
define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYCAP","Notificarme cuando alguien env&iacute;e un art&iacute;culo y espere autorizaci&oacute;n.");
define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYDSC","Recibir notificaci&oacute;n cuando se env&iacute;e un nuevo art&iacute;culo y falte aprobarlo.");
define("_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Nuevo art&iacute;culo enviado");

define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFY","Art&iacute;culo nuevo");
define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFYCAP","Notificarme cuando se publique cualquier nuevo art&iacute;culo.");
define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFYDSC","Recibir notificaci&oacute;n cuando se publique un nuevo art&iacute;culo.");
define("_MI_SB_GLOBAL_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Art&iacute;culo nuevo");

define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFY","Art&iacute;culo enviado");
define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYCAP","Notificarme cuando alguien env&iacute;e un art&iacute;culo a la columna actual y falte aprobarlo.");   
define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYDSC","Recibir notificaci&oacute;n cuando se env&iacute;e un nuevo art&iacute;culo a la columna actual y falte aprobarlo.");      
define("_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Nuevo art&iacute;culo enviado a columna"); 

define("_MI_SB_COLUMN_NEWARTICLE_NOTIFY","NArt&iacute;culo nuevo");
define("_MI_SB_COLUMN_NEWARTICLE_NOTIFYCAP","Notificarme cuando se publique un nuevo art&iacute;culo en la columna actual.");   
define("_MI_SB_COLUMN_NEWARTICLE_NOTIFYDSC","Recibir notificaci&oacute;n cuando se publique un nuevo art&iacute;culo en la columna actual.");      
define("_MI_SB_COLUMN_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Nuevo art&iacute;culo en columna"); 

define("_MI_SB_ARTICLE_APPROVE_NOTIFY","Art&iacute;culo aprobado");
define("_MI_SB_ARTICLE_APPROVE_NOTIFYCAP","Notificarme cuando este art&iacute;culo sea aprobado.");
define("_MI_SB_ARTICLE_APPROVE_NOTIFYDSC","Recibir notificaci&oacute;n cuando este art&iacute;culo sea aprobado.");
define("_MI_SB_ARTICLE_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Art&iacute;culo aprobado");

define("_MI_SB_ALLOWEDSUBMITGROUPS","&iquest;Qu&eacute; grupos pueden enviar?");
define("_MI_SB_ALLOWEDSUBMITGROUPSDSC","Grupos de usuarios que pueden enviar art&iacute;culos.");

//HACK by domifara
define("_MI_SB_FORM_OPTIONS","Opciones de formulario");
define("_MI_SB_FORM_OPTIONS_DESC","Elige el editor que deseas usar. Si tienes una instalaci&oacute;n 'simple' (es decir, si s&oacute;lo usas la clase de editor del n&uacute;cleo de XOOPS, que se ofrece en el paquete convencional), entonces s&oacute;lo puedes elegir DHTML");
define("_MI_SB_FORM_COMPACT","Compacto");
define("_MI_SB_FORM_DHTML","DHTML");
define("_MI_SB_FORM_SPAW","Editor Spaw");
define("_MI_SB_FORM_HTMLAREA","Editor HtmlArea");
define("_MI_SB_FORM_FCK","Editor FCK");
define("_MI_SB_FORM_KOIVI","Editor Koivi");
define("_MI_SB_FORM_TINYMCE","Editor TinyMCE");

// 1.06
define("_MI_SB_SUBMITS", 'Submissions');
define("_MI_SB_ADD_ARTICLE", 'Add Article');
define("_MI_SB_ADD_COLUMN", 'Add Column');