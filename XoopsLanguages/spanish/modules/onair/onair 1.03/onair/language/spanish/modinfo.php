<?php
//%%%%%%	Names, titles	%%%%%
define("_MI_ONAIR_MODULE_NAME","En el Aire rotador");
define("_MI_ONAIR_HELP","Ayuda");

// A brief description of this module
define("_MI_ONAIR_MODULE_DESC","Establecer el scrip on-air con este módulo para mostrar quien está de Turno con tiempo, estación, foto etc");

//%%%%%%	Configs		%%%%%
define("_MI_ONAIR_PLAYLISTMENU","Ver las listas de reproducción");
define("_MI_ONAIR_TIMETYPE","Tipo de Tiempo - usar 12 horas ? (no = 24 horas)");
define("_MI_ONAIR_TIMEZONE","Elija la zona horaria, predeterminada es -6");
define("_MI_ONAIR_MAXFILESIZE","Max. tamaño del archivo cargado en bytes");
define("_MI_ONAIR_SHOTDIR","Donde se colocaron las fotos");
define("_MI_ONAIR_IMGDIR","Donde se colocaron las imágenes");
define("_MI_ONAIR_IMGHEIGHT","Max. Alto de imágenes");
define("_MI_ONAIR_IMGWIDTH","Max. ancho de imágenes");
define("_MI_ONAIR_SHOTHEIGHT","Alto de Fotos");
define("_MI_ONAIR_SHOTWIDTH","Ancho de Fotos");
define("_MI_ONAIR_TIMETYPE","Elija el tipo de tiempo Eu (24 horas) o US (12 horas): ");
define("_MI_ONAIR_ALLOWHTML","¿Permitir HTML?");
define("_MI_ONAIR_PROGRAM_EDIT","Mostrar/Editar/Eliminar/Aprobar");
define("_MI_ONAIR_ADDNEW","Nuevo Evento");
define("_MI_ONAIR_ADDIMAGE","Subir Imagen");
define("_MI_ONAIR_CONFIG","Configuraciones");

//%%%%%%	Plugins	%%%%%
define("_MI_ONAIR_PLUGINDIR_DIRETTORE_DESC","Url para el Director - u otro programa que carga 
<br>como <i>Artista - título</i> a un simple archivo .txt.");
define("_MI_ONAIR_PLUGINDIR_DIRETTORE","Url pista-info archivo (formato txt).");
define("_MI_ONAIR_PLUGINDIR_SP","Url de archivo .txt generados por la estación de reproducción.");
define("_MI_ONAIR_PLUGINDIR_SP_DESC","El archivo debe estar en formato txt y ubicado en algún lugar de su servidor.<br> Si lo desea, también puede mostrar información de otro servidor, pero que sea sencillo<br> solo 1 - 2 lineas de texto de otro modo esto será demasiado para el bloque de información,<br> y el bloque se vera muy lleno de texto");
define("_MI_ONAIR_PLUGINDIR_WINAMP","Now Playing 1.4 por Antti Nevala & Lauri Nevala Información de la pista (formato txt)");
define("_MI_ONAIR_PLUGINDIR_WINAMP_DSC","Url en el archivo .txt- generaro por Now Playing.");

//%%%%%%	Stream	%%%%%
define("_MI_ONAIR_STREAM","Enlace para 'escuchando' (archivo m3u, stream en vivo o enlace de radio en la red.)<br> Debe ser una ruta absoluta como (http://www.misitio.com/stream.wma) o similar.");
define("_MI_ONAIR_STREAM_DESC","Este ambiente es como una dirección URL para el flujo de las radios de Internet, wma,m3u,asx, <br>sino que también puede ser un vínculo para un gráfico en la red, un trailer de película ...lo que quieras.");
?>