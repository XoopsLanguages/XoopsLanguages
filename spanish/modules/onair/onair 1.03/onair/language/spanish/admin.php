<?php
//%%%%%%	Config etc	%%%%%
define("_AM_ONAIR_CONFIG","Configurar");
define("_AM_ONAIR_EDIT","Editar");
define("_AM_ONAIR_EVENTDEL","Eliminado");
define("_AM_ONAIR_EVENTMOD","Modificado");

//%%%%%%	Tables, titles, posts	%%%%%
define("_AM_ONAIR_DAY","Dia");
define("_AM_ONAIR_START","Inicio");
define("_AM_ONAIR_STOP","Parar");
define("_AM_ONAIR_STATION","Nombre de Emisora");
define("_AM_ONAIR_ACTION","Acción");
define("_AM_ONAIR_NAME","Nombre del Locutor");
define("_AM_ONAIR_IMAGE","Foto");
define("_AM_ONAIR_DESCRIPTION","Descripción");
define("_AM_ONAIR_TITLE","Título");
define("_AM_ONAIR_MESSAGE","Evento:");
define("_AM_ONAIR_IMAGE_SELECTFORMAT","Seleccione el formato de la imagen");
define("_AM_ONAIR_DEL","Eliminar");
define("_AM_ONAIR_APPROVE2","Aprobar evento?");
define("_AM_ONAIR_SUBMIT","Submit");
define("_AM_ONAIR_SUREDELETE","Eliminar este evento?");
define("_AM_ONAIR_EDITENTRY","Editar este programa");
define("_AM_ONAIR_EVENTAPPROVE","Evento había sido aprobado");
define("_AM_ONAIR_ENTRY","Introduzca nuevo evento");
define("_AM_ONAIR_NODESCRIPTION","No hay descripción para este evento.");

//%%%%%%	Days	%%%%%
define("_AM_ONAIR_SUNDAYNAME","Domingo");
define("_AM_ONAIR_MONDAYNAME","Lunes");
define("_AM_ONAIR_TUEDAYNAME","Martes");
define("_AM_ONAIR_WEDDAYNAME","Miércoles");
define("_AM_ONAIR_THUDAYNAME","Jueves");
define("_AM_ONAIR_FRIDAYNAME","Viernes");
define("_AM_ONAIR_SATDAYNAME","Sábado");
$oa_days = array( 
            0 => 'domingo', 1 => 'lunes', 
			2 => 'martes', 3 => 'miércoles',
			4 => 'jueves', 5 => 'viernes',
            6 => 'sábado', 7 => 'domingo', 
            );
			
//%%%%%%	Images etc	%%%%%
define("_AM_IMAGEUPLOAD_","Subir nueva imagen");
define("_AM_SELECT_IMAGE","Selecciona una imagen");
define("_AM_ONAIR_PROGRAM_EDIT","Editar evento");
define("_AM_ONAIR_ADDNEW","Agregar nuevo evento");
define("_AM_ONAIR_UPLOADSUCCESS","<h4>Archivo subido con éxito!</h4>");
define("AM_ONAIR_SAVEDAS","Guardado como: ");
define("_AM_ONAIR_FULLPATH","Ruta completa: ");
define("_AM_ONAIR_ADDIMAGE","Subir imagen nueva");
define("_AM_ONAIR_GOING2UPLOADFORM","Obteniendo formulario de subida <br> Espere....");

//%%%%%%	Plugins	%%%%%
define("_AM_ONAIR_PLUGINSELECT","Seleccione (Now Playing) plugin para el uso");
define("_AM_ONAIR_PLUGINNONE","-----");
define("_AM_ONAIR_PLUGINDIRETTORE","Director (o txt-fil incluido)");
define("_AM_ONAIR_PLUGINSP","Lista de Reproducción de la Estación");
define("_AM_ONAIR_PLUGINWINAMP","Winamp (Now Playing 1.4)");

//%%%%%%	Stream file	%%%%%
define("_AM_ONAIR_STREAM","Enlace para escuchar (vacío por defecto)");

//%%%%%%	Various messages	%%%%%
define("_AM_ONAIR_ERRORINSERT","Error al insertar datos");
define("_AM_ONAIR_DATE","Fecha para mostrar");
define("_AM_ONAIR_PLAYLIST","Lista de Pistas (info alternativa etc)");
define("_AM_ONAIR_PLAYLISTSHOWALL","Mostrar las listas de reproducción");
define("_AM_ONAIR_BACK2INDEX","Volver al menu principal");
define("_AM_ONAIR_MAKEPLAYLIST","Crear lista de reproducción");
define("_AM_ONAIR_PL","A partir de estos datos");
define("_AM_ONAIR_ADDPLAYLIST","Crear nueva lista de reproducción");
define("_AM_ONAIR_GOING2PLAYLISTFORM","Obteniendo el formulario de lista de reproducción....");

define("_AM_ONAIR_NAMEMODULE","En el Aire");
define("_AM_ONAIR_NEWEVENT","Tiene un nuevo evento");
define("_AM_ONAIR_THANKS","¡Los datos se guardaron en la base de datos!");
define("_AM_ONAIR_NOTEXISTEVENT","¡Debe adjuntar la lista de reproduccion a eventos existentes!");
define("_AM_ONAIR_SHOWPLAYLISTS","Mostrar todas las listas de reproducción");
define("_AM_ONAIR_HELP","Ayuda");
?>