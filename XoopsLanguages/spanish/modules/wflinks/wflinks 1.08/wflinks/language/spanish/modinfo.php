<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
//Traducción por debianus. Sugerencias y reporte de errores en http://es.impresscms.org
// Module Info
// The name of this module
define("_MI_WFL_NAME","WF-links");

// A brief description of this module
define("_MI_WFL_DESC","Crea una sección de enlaces donde los usuarios pueden enlazar, enviar y calificar varios sitios web.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Enlaces recientes");
define("_MI_WFL_BNAME2","Enlaces importantes");

// Sub menu titles
define("_MI_WFL_SMNAME1","Enviar");
define("_MI_WFL_SMNAME2","Populares");
define("_MI_WFL_SMNAME3","Valoraciones");
define("_MI_WFL_SMNAME4","Nuevos enlaces");

// Names of admin menu items
define("_MI_WFL_BINDEX","Inicio");
define("_MI_WFL_INDEXPAGE","Administración de la página principal");
define("_MI_WFL_MCATEGORY","Administración de categorías");
define("_MI_WFL_MLINKS","Administración de enlaces");
define("_MI_WFL_MUPLOADS","Enviar imágenes");
define("_MI_WFL_PERMISSIONS","Configuración de permisos");
define("_MI_WFL_BLOCKADMIN","Configuración de bloques");
define("_MI_WFL_MVOTEDATA","Información de los votos");

// Title of config items
define('_MI_WFL_POPULAR','Cantidad de visitas para que un enlace sea considerado popular:');
define('_MI_WFL_POPULARDSC','Número de visitas antes que un enlace sea considerado como popular.');

//Display Icons
define("_MI_WFL_ICONDISPLAY","Avisos de popular y nuevo:");
define("_MI_WFL_DISPLAYICONDSC","Seleccione como mostrará los avisos de enlaces populares y nuevos.");
define("_MI_WFL_DISPLAYICON1","Mostrar como iconos");
define("_MI_WFL_DISPLAYICON2","Mostrar como texto");
define("_MI_WFL_DISPLAYICON3","No mostrar");
define("_MI_WFL_DAYSNEW","Días como nuevo:");
define("_MI_WFL_DAYSNEWDSC","Número de días en los que un enlace será considerado como nuevo.");
define("_MI_WFL_DAYSUPDATED","Días como actualizado:");
define("_MI_WFL_DAYSUPDATEDDSC","Número de días en los que un enlace será considerado como actualizado.");
define('_MI_WFL_PERPAGE','Enlaces por categoría:');
define('_MI_WFL_PERPAGEDSC','Máximo número de enlaces que se mostrará en cada categoría.');
define('_MI_WFL_USESHOTS','Mostrar captura de pantalla:');
define('_MI_WFL_USESHOTSDSC','Seleccionar <em>Si</em> para mostrar una captura de pantalla en cada enlace');
define('_MI_WFL_SHOTWIDTH','Ancho de la imagen:');
define('_MI_WFL_SHOTWIDTHDSC','Ancho que tendrá la captura de pantalla');
define('_MI_WFL_SHOTHEIGHT','Alto de la imagen:');
define('_MI_WFL_SHOTHEIGHTDSC','Alto que tendrá la captura de pantalla');
define('_MI_WFL_CHECKHOST','Inhabilitar enlaces directos (leeching):');
define('_MI_WFL_REFERERS','Listado de sitios que tienen permitido enlazar directamente<br />Separados con #');
define("_MI_WFL_ANONPOST","Envío de usuario anónimo:");
define("_MI_WFL_ANONPOSTDSC","¿Desea permitir a los usuarios anónimos realizar envíos o subidas a su sitio?");
define('_MI_WFL_AUTOAPPROVE','Aprobar envíos automáticamente:');
define('_MI_WFL_AUTOAPPROVEDSC','Seleccionar SI para aprobar los envíos sin la intervención del moderador.');
define('_MI_WFL_MAXFILESIZE','Tamaño de la imagen a enviar (Kb):');
define('_MI_WFL_MAXFILESIZEDSC','Tamaño máximo permitido para la imagen.');
define('_MI_WFL_IMGWIDTH','Ancho de la imagen a enviar:');
define('_MI_WFL_IMGWIDTHDSC','Ancho máximo permitido para la imagen');
define('_MI_WFL_IMGHEIGHT','Alto de la imagen a enviar:');
define('_MI_WFL_IMGHEIGHTDSC','Alto máximo permitido para la imagen');
define('_MI_WFL_UPLOADDIR','Directorio de subida (no haga <em>trailing slash</em>)');
define('_MI_WFL_ALLOWSUBMISS','Envío de usuarios:');
define('_MI_WFL_ALLOWSUBMISSDSC','Permitir a los usuarios enviar nuevos enlaces');
define('_MI_WFL_ALLOWUPLOADS','Subidas de usuarios:');
define('_MI_WFL_ALLOWUPLOADSDSC','Permitir a los usuarios enviar enlaces directamente a su sitio');
define('_MI_WFL_SCREENSHOTS','Directorio para la captura de pantalla');
define('_MI_WFL_CATEGORYIMG','Directorio para la imagen de la categoría');
define('_MI_WFL_MAINIMGDIR','Directorio para la imagen principal');
define('_MI_WFL_USETHUMBS','Usar miniaturas:');
define("_MI_WFL_USETHUMBSDSC","Tipos de formatos soportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links usará thumbnails para mostrar las imagenes. Configure 'No' para utilizar la imagen original si el servidor no soporta esta opción.</div>");
define('_MI_WFL_DATEFORMAT','Formato de fecha:');
define('_MI_WFL_DATEFORMATDSC','Formato predeterminado para las fechas en WF-links');
define('_MI_WFL_SHOWDISCLAIMER','Mostrar condiciones de uso antes del envío de enlaces:');
define('_MI_WFL_SHOWDISCLAIMERDSC','Se mostrarán las condiciones de uso antes de que un usuario envíe un enlace');
define('_MI_WFL_SHOWLINKDISCL','Mostrar condiciones de uso antes de que el usuario visite un sitio:');
define('_MI_WFL_SHOWLINKDISCLDSC','Se mostrarán las condiciones de uso antes de que un usuario visite un enlace');
define('_MI_WFL_DISCLAIMER','Introduzca las condiciones de uso para envíos:');
define('_MI_WFL_LINKDISCLAIMER','Introduzca las condiciones de uso para visitar sitios:');
define('_MI_WFL_SUBCATS','Subcategorías:');
define("_MI_WFL_SUBMITART","Envíos de enlaces:");
define("_MI_WFL_SUBMITARTDSC","Seleccionar grupos que pueden enviar nuevos enlaces.");
define("_MI_WFL_RATINGGROUPS","Valoración de enlaces:");
define("_MI_WFL_RATINGGROUPSDSC","Seleccionar grupos que pueden calificar un enlace.");
define("_MI_WFL_IMGUPDATE","¿Actualizar miniaturas?");
define("_MI_WFL_IMGUPDATEDSC","Si eligió usar miniaturas, las imágenes serán actualizadas cada vez que carga la página; de otro modo se utilizará la primera miniatura únicamente. <br /><br />");
define("_MI_WFL_QUALITY","Calidad de la miniatura:");
define("_MI_WFL_QUALITYDSC","Baja: 0 Alta: 100");
define("_MI_WFL_KEEPASPECT","¿Mantener la proporción?");
define("_MI_WFL_KEEPASPECTDSC","");
define("_MI_WFL_ADMINPAGE","Enlaces en la administración:");
define("_MI_WFL_AMDMINPAGEDSC","Máximo número de enlaces que se mostrará en la administración.");
define("_MI_WFL_ARTICLESSORT","Ordenamiento de los enlaces:");
define("_MI_WFL_ARTICLESSORTDSC","Seleccionar un órden por defecto para el listado de enlaces.");
define("_MI_WFL_TITLE","Título");
define("_MI_WFL_RATING","Valoración");
define("_MI_WFL_WEIGHT","Peso");
define("_MI_WFL_POPULARITY","Popularidad");
define("_MI_WFL_SUBMITTED2","Fecha de envío");
define('_MI_WFL_COPYRIGHT','Anuncio de <em>Copyright</em/>:');
define('_MI_WFL_COPYRIGHTDSC','Seleccionar si mostrará un anuncio sobre copyright en la página de enlaces.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC','Seleccione SI para mostrar subcategorías. Seleccionando NO, ocultará las subcategorías del listado');
// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY','Global');
define('_MI_WFL_GLOBAL_NOTIFYDSC','Opciones globales de notificación de enlaces.');
define('_MI_WFL_CATEGORY_NOTIFY','Categoría');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Opciones de notificación que se aplicarán en la categoría actual.');
define('_MI_WFL_LINK_NOTIFY','Enlaces');
define('_MI_WFL_FILE_NOTIFYDSC','Opciones de notificación que se aplicarán en el enlace actual.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY','Nuevas Categorías');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP','Notificarme cuando una nueva categoría es creada.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC','Recibir notificación cuando una nueva categoría es creada.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : nuevas categorías');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Solicitud de modificación de enlaces');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Notificarme de cualquier solicitud de modificación de enlace.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','Recibir notificación cuando se reciba cualquier solicitud de modificación de enlace.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : solicitud de modificación de enlaces');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Reporte de enlace erróneo');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Notificarme de cualquier reporte de enlace erróneo.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','Recibir notificación cuando se reciba un reporte de enlace erróneo.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : reporte de enlace erróneo');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Enlace enviado');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Notificarme cuando cualquier nuevo enlace sea enviado y este aguardando aprobación.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','Recibir notificación de cualquier nuevo enlace enviado que este aguardando aprobación.');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace enviado');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Nuevo enlace');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Notificarme cuando un nuevo enlace es publicado.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','Recibir notificación cuando un nuevo enlace es publicado.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Enlace enviado');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Notificarme cuando cualquier nuevo enlace sea enviado en esta categoría y este aguardando aprobación.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','Recibir notificación de cualquier nuevo enlace enviado en esta categoría y que este aguardando aprobación.');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace enviado en la nategoría');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Nuevo enlace');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Notificarme cuando un nuevo enlace es publicado en esta categoría.');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','Recibir notificación cuando un nuevo enlace es publicado en esta categoría.');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : nuevo enlace publicado en la categoría');
define('_MI_WFL_LINK_APPROVE_NOTIFY','Enlace aprobado');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Notificarme cuando este enlace sea aprobado.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','Recibir notificación cuando este enlace sea aprobado.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificar : enlace aprobado');
define('_MI_WFL_AUTHOR_INFO',"Información del desarrollador");
define('_MI_WFL_AUTHOR_NAME',"Desarrollador");
define('_MI_WFL_AUTHOR_DEVTEAM',"Equipo de desarrolladores");
define('_MI_WFL_AUTHOR_WEBSITE',"Sitio web del desarrollador");
define('_MI_WFL_AUTHOR_EMAIL',"Email del desarrollador");
define('_MI_WFL_AUTHOR_CREDITS',"Créditos");
define('_MI_WFL_MODULE_INFO',"Información sobre el desarrollo del módulo");
define('_MI_WFL_MODULE_STATUS',"Estado del desarrollo");
define('_MI_WFL_MODULE_DEMO',"Sitio de demostración");
define('_MI_WFL_MODULE_SUPPORT',"Sitio oficial de soporte");
define('_MI_WFL_MODULE_BUG',"Reportar un fallo de este módulo");
define('_MI_WFL_MODULE_FEATURE',"Sugerir una nueva característica para este módulo");
define('_MI_WFL_MODULE_DISCLAIMER',"Declaración de limitación de responsabilidad");
define('_MI_WFL_RELEASE',"Fecha de realización: ");
define('_MI_WFL_MODULE_MAILLIST',"Listas de correoWF-Project");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS',"Lista de correo de nuevas versiones");
define('_MI_WFL_MODULE_MAILBUGS',"Lista de correo sobre errores");
define('_MI_WFL_MODULE_MAILFEATURES',"Lista de correo de nuevas características");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Get the latest announcements from WF-Project.");
define('_MI_WFL_MODULE_MAILBUGSDSC',"Bug Tracking and submission mailing list");
define('_MI_WFL_MODULE_MAILFEATURESDSC',"Request New Features mailing list.");
define('_MI_WFL_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.");
define('_MI_WFL_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_WFL_AUTHOR_BUGFIXES',"Historial de solución de errores");
define('_MI_WFL_COPYRIGHT2','Copyright');
define('_MI_WFL_COPYRIGHTIMAGE',"Unless stated otherwise, this Module (WF-Links) and its images are copyright to the WF-Projects team.<br /><br />You have the permission to copy, edit and change WF-Links to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the WF-Projects team.");
define('_MI_WFL_SELECTFORUM',"Seleccionar foro:");
define('_MI_WFL_SELECTFORUMDSC',"Seleccione el foro que tiene instalado para ser usado por WF-Links.");
define('_MI_WFL_DISPLAYFORUM1',"Newbb (all)");
define('_MI_WFL_DISPLAYFORUM2',"IPB Forum");
define('_MI_WFL_DISPLAYFORUM3',"PHPBB2");
// added by McDonald
define("_MI_WFL_COUNTRY","País:");
define('_MI_WFL_EDITOR',"Editor a usar (administradores):");
define('_MI_WFL_EDITORCHOICE',"Seleccione el editor que se usará en la administración. Si solo ha hecho una instalación normal de ImpressCMS (sin ningún extra), podrá seleccionar DHTML y TinyMCE");
define('_MI_WFL_EDITORUSER',"Editor a usar (usuarios):");
define('_MI_WFL_EDITORCHOICEUSER',"Seleccione el editor que se usará en la administración. Si solo ha hecho una instalación normal de ImpressCMS (sin ningún extra), podrá seleccionar DHTML y TinyMCE");
define("_MI_WFL_FORM_DHTML","DHTML");
define("_MI_WFL_FORM_COMPACT","Compact");
define("_MI_WFL_FORM_SPAW","Spaw Editor");
define("_MI_WFL_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_WFL_FORM_FCK","FCK Editor");
define("_MI_WFL_FORM_KOIVI","Koivi Editor");
define("_MI_WFL_FORM_INBETWEEN","Inbetween");
define("_MI_WFL_FORM_TINYEDITOR","TinyEditor");
define("_MI_WFL_FORM_TINYMCE","TinyMCE");
define("_MI_WFL_FORM_DHTMLEXT","DHTML extendido");
define("_MI_WFL_SORTCATS","Ordenar categorías por:");
define("_MI_WFL_SORTCATSDSC","Seleccione como las categorías y subcategorías serán ordenadas.");
define("_MI_WFL_KEYLENGTH","Máximo número de caracteres para las palabras clave:");
define("_MI_WFL_KEYLENGTHDSC","De forma predeterminada son 255");
define("_MI_WFL_OTHERLINKS","¿Mostrar otros enlaces enviados por el mismo usuario?");
define("_MI_WFL_OTHERLINKSDSC","Elija si otros envíos del mismo usuario serán o no mostrados.");
define("_MI_WFL_TOTALCHARS","¿Limitar el número total de caracteres para la descripción?");
define("_MI_WFL_TOTALCHARSDSC","Establezca el número total de caraceres para la descripción en las vistas de las categorías.");
define("_MI_WFL_QUICKVIEW","¿Mostrar opción de vista rápida?");
define("_MI_WFL_QUICKVIEWDSC","Activa/Desactiva dicha opción.");
define('_MI_WFL_ICONS_CREDITS',"Iconos por");
define("_MI_WFL_SHOWSBOOKMARKS","¿Mostrar Marcadores Sociales?");
define("_MI_WFL_SHOWSBOOKMARKSDSC","Selecione <em>Sí</em> si desea que un bloque de Marcadores Sociales sea mostrado debajo de cada artículo.");
define("_MI_WFL_SHOWPAGERANK","¿Mostrar Google PageRank?");
define("_MI_WFL_SHOWPAGERANKSDSC","Selecione <em>Sí</em> si desea que sea mostrado.");
define("_MI_WFL_USERTAGDESCR","Los usuarios pueden enviar solapas:");
define("_MI_WFL_USERTAGDSC","Selecione si los usuarios pueden o no enviar solapas.");

// Version 1.05 RC5
define('_MI_WFL_DATEFORMATADMIN','Administración de fechas:');
define('_MI_WFL_DATEFORMATADMINDSC','Administración predeterminada de fechas para WF-Links<br />Lea el <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">Manual de PHP</a>');
define("_MI_WFL_USEADDRESSDESCR","¿Usar direcciones y mapas?");
define("_MI_WFL_USEADDRESSDSC","Seleccione si desea usar o no la característica de adición de direcciones y mapas.");
define("_MI_WFL_HEADERPRINT","[Opciones de impresión] Cabecera de página a imprimir");
define("_MI_WFL_HEADERPRINTDSC","La misma será la cabecera que se imprimirá en cada enlace junto con la información de éste.");
define("_MI_WFL_LOGOURLPRINT","[Opciones de impresión] URL del logo a imprimir");
define("_MI_WFL_LOGOURLDSCPRINT","URL del logo que se imprimirá en la parte superior de la página.");
define("_MI_WFL_FOOTERPRINT","[Opciones de impresión] Pie de página de impresión");
define("_MI_WFL_FOOTERPRINTDSC","Pie de página que será impreso en cada enlace");
define("_MI_WFL_BNAME3","Estadísticas del patrocinador de WF-Links");
define("_MI_WFL_VCARD_CREDITS","Script de vCard por");

// Version 1.05 RC6
define("_MI_WFL_FLAGIMG","Directorio para las imágenes de las banderas de los países");
define("_MI_WFL_FLAGIMGDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_WFL_CATEGORYIMGDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_WFL_SCREENSHOTSDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_WFL_MAINIMGDIRDSC","Introduzca un URL (sin 'trailing slash')");
define("_MI_WFL_USEAUTOSCRSHOT","Usar autocaptura de pantallas");
define("_MI_WFL_USEAUTOSCRSHOTDSC","Se creará una captura automáticamente basada en el URL. Como las imágenes que ya estén en el servidor serán sobreescritas, puede que esta característica no pueda usarse en todos los sitios.");
define("_MI_WFL_MOZSHOT_CREDITS","Autocaptura de pantalla por");
define("_MI_WFL_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (todo el código fuente está publicado con la licencia <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a>)');

// Version 1.06 RC-1
define("_MI_WFL_BNAME4","'Nube de etiquetas' de WF-Links");
define("_MI_WFL_BNAME5","Etiquetas relevantes de WF-Links");

// Version 1.06 RC-3
define('_MI_WFL_DISPLAYFORUM4',"Newbbex");
define("_MI_WFL_TITLE_A","Título (A)");
define("_MI_WFL_TITLE_D","Título (D)");
define("_MI_WFL_RATING_A","Valoración (A)");
define("_MI_WFL_RATING_D","Valoración (D)");
define("_MI_WFL_SUBMITTED_A","Fecha de envío (A)");
define("_MI_WFL_SUBMITTED_D","Fecha de envío (D)");
define("_MI_WFL_POPULARITY_A","Popularidad (A)");
define("_MI_WFL_POPULARITY_D","Popularidad (D)");
define("_MI_WFL_COUNTRY_A","País (A)");
define("_MI_WFL_COUNTRY_D","País (D)");

// Version 1.08

// Admin Summary
//define("_MI_WFL_SCATEGORY","Category");
define("_MI_WFL_SNEWFILESVAL","Submitted");
define("_MI_WFL_SMODREQUEST","Modified");
//define("_MI_WFL_SREVIEWS","Reviews: ");
define("_MI_WFL_SBROKENSUBMIT","Broken");
define("_MI_WFL_DOCUMENTATION","Docs");

define('_MI_WFL_ADD_LINK','Add Link');
define('_MI_WFL_ADD_CATEGORY','Add Category');