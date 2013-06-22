<?php
// Actualizado y convertido a UTF-8 Oswaldo Valladares xoopsdemo.tk
define('_MI_EXTGAL_NAME','Galería');
define('_MI_EXTGAL_DESC','Galería es un módulo para construir y gestionar galerías de imágenes');

// Menú principal
define('_MI_EXTGALLERY_USERALBUM','Mi album');
define('_MI_EXTGALLERY_PUBLIC_UPLOAD','Subida pública');

// Menú principal de administración
define('_MI_EXTGALLERY_INDEX','Página Principal');
define('_MI_EXTGALLERY_PUBLIC_CAT','Categoría/Albumes');
define('_MI_EXTGALLERY_PHOTO','Fotos');
define('_MI_EXTGALLERY_PERMISSIONS','Permisos');
define('_MI_EXTGALLERY_WATERMARK_BORDER','Marca de agua y borde');
define('_MI_EXTGALLERY_SLIDESHOW','Presentación de Diapositivas');
define('_MI_EXTGALLERY_EXTENSION','Extensión');
define('_MI_EXTGALLERY_ALBUM','Album');

// Opciones del módulo
define('_MI_EXTGAL_DISP_TYPE','Tipo de visualización');
define('_MI_EXTGAL_DISP_TYPE_DESC','Selecciona cómo se visualizará la foto');
define('_MI_EXTGAL_DISP_SET_ORDER','Tipo de órden de visualización de foto');
define('_MI_EXTGAL_DISP_SET_ORDER_DESC','Selecione el tipo de orden de visualización de foto, desc o asc , basado en la hora y fecha de carga de la foto enviada');
define('_MI_EXTGALLERY_DESC','Desc');
define('_MI_EXTGALLERY_ASC','Asc');
define('_MI_EXTGAL_NB_COLUMN','Número de columnas en cada album');
define('_MI_EXTGAL_NB_COLUMN_DESC','Cuántas columnas para la vista de miniaturas');
define('_MI_EXTGAL_NB_LINE','Número de líneas en el album');
define('_MI_EXTGAL_NB_LINE_DESC','Cuántas líneas en la vista de miniaturas');
define('_MI_EXTGAL_SAVE_L','Guardar foto grande');
define('_MI_EXTGAL_SAVE_L_DESC','Si guarda fotos grandes - más grande que la configuración media - el enlace de descarga apuntará a este fichero en la vista de foto.');
define('_MI_EXTGAL_M_WIDTH','Ancho para foto media');
define('_MI_EXTGAL_M_WIDTH_DESC','La foto se redimensionará para tener este ancho como máximo');
define('_MI_EXTGAL_M_HEIGTH','Alto para foto media');
define('_MI_EXTGAL_M_HEIGTH_DESC','La foto se redimensionará para tener esta altura como máximo');
define('_MI_EXTGAL_T_WIDTH','Ancho de miniatura');
define('_MI_EXTGAL_T_WIDTH_DESC','Ancho máximo para la miniatura');
define('_MI_EXTGAL_T_HEIGTH','Alto de la miniatura');
define('_MI_EXTGAL_T_HEIGTH_DESC','Alto máximo de la miniatura');
define('_MI_EXTGAL_M_WATERMARK','Habilitar marca de agua para foto media');
define('_MI_EXTGAL_M_WATERMARK_DESC','Esta opción habilita la marca de agua para las fotos nuevas. Debe configurar antes la marca de agua en la pestaña "Marca de Agua y Borde.');
define('_MI_EXTGAL_M_BORDER','Habilitar borde para foto media');
define('_MI_EXTGAL_M_BORDER_DESC','Esta opción habilita el borde para las fotos nuevas. Debe configurar antes el borde.');
define('_MI_EXTGAL_L_WATERMARK','Habilitar marca de agua para fotos grandes.');
define('_MI_EXTGAL_L_WATERMARK_DESC','Esta opción habilita la marca de agua para las nuevas fotos grandes. Debe configurar antes la marca de agua.');
define('_MI_EXTGAL_L_BORDER','Habilitar borde para fotos grandes.');
define('_MI_EXTGAL_L_BORDER_DESC','Esta opción habilita el borde para las nuevas fotos grandes. Debe configurar antes el borde.');
define('_MI_EXTGAL_NAME_PATTERN','Patrón de descripción automática de fotos');
define('_MI_EXTGAL_NAME_PATTERN_DESC','Si la foto no incluye descripción o ha sido subida en lote del lado del administrador, se usará el nombre del archivo para hacer una descripción automática.<br />Con una foto llamada \"Torneo-06-dic-2010_1.jpg\", obtendrá \"Torneo 06 dic 2010\" como descripción.');
define('_MI_EXTGAL_DISPLAY_EXTRA','Mostrar campo extra');
define('_MI_EXTGAL_DISPLAY_EXTRA_DESC','Permite añadir más información al formulario de envío. Por ejemplo, puede añadir un botón de Paypal para cada foto.');
define('_MI_EXTGAL_ALLOW_HTML','Permitir HTML en el campo extra');
define('_MI_EXTGAL_ALLOW_HTML_DESC','Parmite, o no, HTML en la descripción y en información extra.');
define('_MI_EXTGAL_HIDDEN_FIELD','Esta constante se usa para eliminar avisos de PHP. Este texto no se usa en el módulo');
define('_MI_EXTGAL_SAVE_ORIG','Guardar foto original');
define('_MI_EXTGAL_SAVE_ORIG_DESC','Permite guardar la foto original antes de añadirle marca de agua y borde si alguna de esas opciones está habilitada para fotos grandes. La opción \"Grabar foto grande\" <b>debe estar habilitada</b> para usar esta opción.<br /><b>La versión original podrá ser descargada dependiendo de los permisos de grupo para \"Puede descargar las imágenes originales\".</b>.<br />Si un usuario no tiene permiso para descargar la original, se le entregará la versión \"grande\".');
define('_MI_EXTGAL_ADM_NBPHOTO','Fotos por página en el lado del administrador');
define('_MI_EXTGAL_ADM_NBPHOTO_DESC','Número de fotos que se mostrarán en la tabla de aprobar y editar.');
define('_MI_EXTGAL_GRAPHLIB','Librería gráfica');
define('_MI_EXTGAL_GRAPHLIB_DESC','Seleccione la librería gráfica que desea usar. Tenga cuidado, esta es una opción avanzada, no la modifique si no sabe lo que está haciendo.');
define('_MI_EXTGAL_GRAPHLIB_PATH','Ruta a la librería gráfica');
define('_MI_EXTGAL_GRAPHLIB_PATH_DESC','Ruta a la librería gráfica en el servidor <b>CON</b> barra al final.');
define('_MI_EXTGAL_ENABLE_RATING','Habilitar calificación de fotos');
define('_MI_EXTGAL_ENABLE_RATING_DESC','Esta opción permite activar o desactivar globalmente la función de calificación.');
define('_MI_EXTGAL_DISP_PH_TITLE','Título de foto');
define('_MI_EXTGAL_DISP_PH_TITLE_DESC','Esta opción permite elegir si uno quiere poner título a la foto, o no, en la vista de album.');
define('_MI_EXTGAL_DISP_CAT_IMG','Imagen de categoría');
define('_MI_EXTGAL_DISP_CAT_IMG_DESC','Esta opción determina si se puede subir una imagen representativa de la categoría.');
define('_MI_EXTGAL_M_QUALITY','Calidad de la foto media');
define('_MI_EXTGAL_M_QUALITY_DESC','Ajusta la calidad para la foto media donde 0 (mala) a 100 (buena)');
define('_MI_EXTGAL_T_QUALITY','Calidad de la miniatura');
define('_MI_EXTGAL_T_QUALITY_DESC','Ajusta la calidad para la foto media donde 0 (mala) a 100 (buena)');
//DNPROSSI - Double define to be removed
/* define('_MI_EXTGALLERY_ALBUM','Album'); */
define('_MI_EXTGAL_EXT_UPLOAD','Página de subida');
define('_MI_EXTGAL_EXT_UPLOAD_DESC','Seleccione el tipo de subida que tendrá el usuario. Extendida requiere un plugin de Java.');
define('_MI_EXTGALLERY_EXTENDED','Extendida');
define('_MI_EXTGALLERY_STANDARD','Estándar');

// Nombre del bloque
define('_MI_EXTGAL_B_PHOTO','Foto');
define('_MI_EXTGAL_B_SLIDESHOW','Presentación de Diapositivas');
define('_MI_EXTGAL_B_SUB','Mayor Remitente');
define('_MI_EXTGAL_B_AJAX','Vista de Presentación de Diapositivas');
// Notificaciones
define('_MI_EXTGAL_GLOBAL_NOTIFY','Notificación global');
define('_MI_EXTGAL_GLOBAL_NOTIFYDSC','');
define('_MI_EXTGAL_ALBUM_NOTIFY','Notificación de album');
define('_MI_EXTGAL_ALBUM_NOTIFYDSC','');
define('_MI_EXTGAL_PHOTO_NOTIFY','Notificación de foto');
define('_MI_EXTGAL_PHOTO_NOTIFYDSC','');
define('_MI_EXTGAL_NEW_PHOTO_NOTIFY','Nueva foto');
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYCAP','Notificarme cuando se añada una foto nueva');
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYDSC','');
define('_MI_EXTGAL_NEW_PHOTO_NOTIFYSBJ','Envio de foto nueva');
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFY','Notificarme cuando hay una foto nueva pendiente');
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYCAP','Notificarme cuando hay una foto nueva pendiente');
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYDSC','');
define('_MI_EXTGAL_NEW_PHOTO_PENDING_NOTIFYSBJ','Nueva foto pendiente');
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFY','Notificarme cuando se añada una nueva foto a este album');
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYCAP','Notificarme cuando se añada una nueva foto a este album');
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYDSC','');
define('_MI_EXTGAL_NEW_PHOTO_ALBUM_NOTIFYSBJ','Nueva foto enviada');
// DNPROSSI ADDED in ver 1.09
define('_MI_EXTGAL_FORM_OPTIONS','Formulario de Opciones');
define('_MI_EXTGAL_FORM_OPTIONS_DESC','Seleccione el editor a usar. Si tiene una instalación "simple" (ejemplo:  utilizar solo el editor estandard, proporcionado en el paquete estándar del sistema), a continuación, puede seleccionar DHTML y compacto');
define('_MI_EXTGAL_ENABLE_INFO','Ver Información de Foto');
define('_MI_EXTGAL_ENABLE_INFO_DESC','Si se desactiva toda la información de la foto (remitente, la resolución, la fecha, etc) no podrán ser vistos');
define('_MI_EXTGAL_ENABLE_ECARDS','Ver Postales');
define('_MI_EXTGAL_ENABLE_ECARDS_DESC','Habilita/deshabilita el ícono de Postal cuando <b>Ver Información de Foto</b> este habilitado');
define('_MI_EXTGAL_ENABLE_PHOTO_HITS','Ver Número de Visitas');
define('_MI_EXTGAL_ENABLE_PHOTO_HITS_DESC','Habilita/deshabilita ver el número de visitas cuando <b>Ver Información de Foto</b> este habilitado');
define('_MI_EXTGAL_ENABLE_SUBMITTER_LNK','Ver Remitente');
define('_MI_EXTGAL_ENABLE_SUBMITTER_LNK_DESC','Habilita/deshabilita Ver remitente cuando <b>Ver Información de Foto</b> este habilitado');
define('_MI_EXTGAL_ENABLE_RESOLUTION','Ver Resolución');
define('_MI_EXTGAL_ENABLE_RESOLUTION_DESC','Habilita/deshabilita Ver Resolución cuando <b>Ver Información de Foto</b> este habilitado');
define('_MI_EXTGAL_ENABLE_DATE','Ver Fecha');
define('_MI_EXTGAL_ENABLE_DATE_DESC','Habilita/deshabilita Ver Fecha cuando <b>Ver Información de Foto</b> este habilitado');
define('_MI_EXTGAL_ENABLE_DOWNLOAD','Ver Descargas');
define('_MI_EXTGAL_ENABLE_DOWNLOAD_DESC','Habilita/deshabilita Descargar y Ver la Cantidad de Descargas cuando <b>Ver Información de Foto</b> este habilitado');
define('_MI_EXTGAL_ENABLE_SHOW_COMMENTS','Ver Comentarios');
define('_MI_EXTGAL_ENABLE_SHOW_COMMENTS_DESC','Habilita/deshabilita Ver la cantidad de Comentarios cuando <b>Ver Información de Foto</b> este habilitado');

define('_MI_EXTGAL_INFO_VIEW','Ver Info');
define('_MI_EXTGAL_INFO_VIEW_DESC','Muestra-oculta la info  de las miniaturas o fotos del álbum');
define('_MI_EXTGAL_INFO_BOTH','Ambos');
define('_MI_EXTGAL_INFO_ALBUM','Album');
define('_MI_EXTGAL_INFO_PHOTO','Foto');
define('_MI_EXTGAL_INFO_PUBUSR','Publica o Info de Usuario');
define('_MI_EXTGAL_INFO_PUBUSR_DESC','Muestra-oculta la info del album público o del usuario y foto');
define('_MI_EXTGAL_INFO_PUBLIC','Público');
define('_MI_EXTGAL_INFO_USER','Usuario');
define('_MI_EXTGAL_JQUERY',"Uso de jQuery");
define('_MI_EXTGAL_JQUERY_DESC',"Puede habilitar/deshabilitar jQuery en las plantillas del módulo. si jQuery es cargado en su tema y tiene problemas con efectos Ajax del theme (Interferencia de la librería jQuery),debe desactivar jQuery en extgallery y use el jQuery del tema.");

define('_MI_EXTGAL_SOCIAL',"Uso de Red Social");
define('_MI_EXTGAL_SOCIAL_DESC',"Puede usar Red Socal y el ícono de marcador para cada foto");

define('_MI_EXTGAL_NONE',"Ninguno");
define('_MI_EXTGAL_SOCIALNETWORM',"Redes Sociales");

define('_MI_EXTGAL_BOOKMARK',"Márcame");
?>