<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendario para Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');

// Index
define('_AM_APCAL_TIMEZONE', 'Zonas horarias');
define('_AM_APCAL_MODULEADMIN_CONFIG', 'Configuraciones');
define('_AM_APCAL_NBWAITINGEVENTS', 'Hay %s eventos pendientes de aprobaci&oacute;n.');
define('_AM_APCAL_NBEVENTS', 'Hay %s eventos entrantes.');
define('_AM_APCAL_NBCATS', 'Hay %s categor&iacute;as.');
define('_AM_APCAL_MODULEADMIN_CONFIG_PHP', 'You must have at least php version %s (your current version is %s)');
define('_AM_APCAL_MODULEADMIN_CONFIG_XOOPS', 'You must have at least xoops version %s (your current version is %s)');
define('_AM_APCAL_PREFS', 'Preferencias');
define('_AM_APCAL_UPDATE', 'Actualizar');
define('_AM_APCAL_BLOCKS', 'Bloques');
define('_AM_APCAL_GOTOMODULE', 'Ir al m&oacute;dulo');

// titles
define("_AM_APCAL_ADMISSION","Eventos admitidos");
define("_AM_APCAL_MENU_EVENTS","Administraci&oacute;n de Eventos");
define("_AM_APCAL_MENU_CATEGORIES","Administrar Categor&iacute;as");
define("_AM_APCAL_MENU_CAT2GROUP","Permisos de Categor&iacute;as");
define("_AM_APCAL_ICALENDAR_IMPORT","Importar iCalendar");
define("_AM_APCAL_GROUPPERM","Permisos Globales");
define("_AM_APCAL_TABLEMAINTAIN","Mantenimiento de Tablas (Actualizar)");
define("_AM_APCAL_MYBLOCKSADMIN","Administraci&oacute;n de Bloques&Grupos del Calendario");

// forms
define("_AM_APCAL_BUTTON_EXTRACT","Extraer");
define("_AM_APCAL_BUTTON_ADMIT","Admitir");
define("_AM_APCAL_BUTTON_MOVE","Mover");
define("_AM_APCAL_BUTTON_COPY","Copiar");
define("_AM_APCAL_CONFIRM_DELETE","Eliminar evento(s) OK?");
define("_AM_APCAL_CONFIRM_MOVE","Eliminar un enlace a una categor&iacute;a antigua y a&ntilde;adir un enlace a la catergor&iacute;a especificada OK?");
define("_AM_APCAL_CONFIRM_COPY","A&ntilde;adir un enlace a la categor&iacute;a especificada OK?");
define("_AM_APCAL_OPT_PAST","Pasado");
define("_AM_APCAL_OPT_FUTURE","Futuro");
define("_AM_APCAL_OPT_PASTANDFUTURE","Pasado & Futuro");

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY",'y-m-d');
define("_AM_APCAL_DTFMT_LIST_NORMAL",'y-m-d<\b\r />H:i');

// timezones
define("_AM_APCAL_TZOPT_SERVER","Como Zona horaria del Servidor");
define("_AM_APCAL_TZOPT_GMT","Como GMT");
define("_AM_APCAL_TZOPT_USER","Como Zona horaria del Usuario");

// admission
define("_AM_APCAL_LABEL_ADMIT","Los eventos marcados son:  pedientes de adminitir");
define("_AM_APCAL_MES_ADMITTED","Evento(s) admitido");
define("_AM_APCAL_ADMIT_TH0","Usuario");
define("_AM_APCAL_ADMIT_TH1","Fecha de inicio");
define("_AM_APCAL_ADMIT_TH2","Fecha de Fin");
define("_AM_APCAL_ADMIT_TH3","Nombre");
define("_AM_APCAL_ADMIT_TH4","Regla");

// events manager & importing iCalendar
define("_AM_APCAL_LABEL_IMPORTFROMWEB","Importar datos de iCalendar desde la p&aacute;gina web (Introduce la URL desde 'http://' o 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","Datos de env&iacute;o de iCalendar(Selecciona un archivo desde tu ordenador)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","Los eventos marcados son:");
define("_AM_APCAL_LABEL_IO_OUTPUT","Exportar a iCalendar");
define("_AM_APCAL_LABEL_IO_DELETE","Eliminar");
define("_AM_APCAL_MES_EVENTLINKTOCAT","Evento(s) enlazado a esta categor&iacute;a");
define("_AM_APCAL_MES_EVENTUNLINKED","Enlace del Evento(s) eliminado de la antigua categor&iacute;a");
define("_AM_APCAL_FMT_IMPORTED","Evento(s) importado de '%s'");
define("_AM_APCAL_MES_DELETED","Evento(s) eliminado");
define("_AM_APCAL_IO_TH0","Usuario");
define("_AM_APCAL_IO_TH1","Fecha de Inicio");
define("_AM_APCAL_IO_TH2","Fecha de Fin");
define("_AM_APCAL_IO_TH3","Nombre");
define("_AM_APCAL_IO_TH4","Regla");
define("_AM_APCAL_IO_TH5","Admisi&oacute;n");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "Puede a&ntilde;adir" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "Super a&ntilde;adir" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "Puede editar" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "Super editar" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "Puede eliminar" ) ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "Super eliminar" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "Puede tocar otros" ) ;
define( '_AM_APCAL_CAT2GROUPDESC' , "Marcar categor&iacute;as a las cuales puede acceder" ) ;
define( '_AM_APCAL_GROUPPERMDESC' , "Seleccionar los permisos que cada grupo puede tenero<br />Si necesitas esta funcionalidad,  marca 'Permisos de Usuarios' como 'Permisos de Grupo' con anterioridad.<br />La configuraci&oacute;n de 2 Grupos como Administradores e Invitados ser&aacute; igorada." ) ;

// Table Maintenance
define( '_AM_APCAL_MB_SUCCESSUPDATETABLE' , "Tabla(s) actualizada correctamente" ) ;
define( '_AM_APCAL_MB_FAILUPDATETABLE' , "La actualizaci&oacute;n de la tabla ha fallado" ) ;
define( '_AM_APCAL_NOTICE_NOERRORS' , "No hay errores ni en la Tabla ni en los datos." ) ;
define( '_AM_APCAL_ALRT_CATTABLENOTEXIST' , "La tabla de categor&iacute;as no existe.<br />\nQuieres crear la Tabla ?" ) ;
define( '_AM_APCAL_ALRT_OLDTABLE' , "La tabla de estructura de Eventos es antigua.<br />\nQuieres actualizarla ?" ) ;
define( '_AM_APCAL_ALRT_TOOOLDTABLE' , "Table error occured.<br />\nPerhaps you used APCal 0.3x or earlier.<br />\nFirst, update into 0.4x or 0.5x." ) ;
define( '_AM_APCAL_FMT_SERVER_TZ_ALL' , "Zona horaria del Servidor (Invierno): %+2.1f<br />Zona horaria del Servidor  (Verano): %+2.1f<br />Nombre de la Zona del Servidor: %s<br />Valor de la configuraci&oacute;n de XOOPS: %+2.1f<br />Valor del APCal usando: %+2.1f<br />" ) ;
define( '_AM_APCAL_FMT_WRONGSTZ', 'Hay %s evento(s) guardados con una zona horaria incorrecta.<br />Quieres repararlos?' );
define( '_AM_APCAL_TH_SERVER_TZ_COUNT' , "Eventos" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE' , "Zonas horarias" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE_TO' , "Modificaciones (-14.0??14.0)" ) ;
define( '_AM_APCAL_JSALRT_SERVER_TZ' , "No olvides hace una copia de seguridad de la tablas de eventos antes de esta operaci&oacute;n" ) ;
define( '_AM_APCAL_NOTICE_SERVER_TZ' , "Si tu Servidor tiene Zona horaria de verano y algunos eventos se han registrado en el APCal 0.6x o 0.7x, no presiones este bot&oacute;n.<br />ej)Es l&oacute;gico mostrar ambos -5.0 y -4.0 en EDT" ) ;
define( '_AM_APCAL_MB_SUCCESSTZUPDATE' , "Events are modified with the timezone(s)." ) ;

// Categories
define( '_AM_APCAL_CAT_TH_TITLE' , 'Nombre' ) ;
define( '_AM_APCAL_CAT_TH_DESC' , 'Descripci&oacute;n' ) ;
define( '_AM_APCAL_CAT_TH_PARENT' , 'Categor&iacute;a Principal' ) ;
define( '_AM_APCAL_CAT_TH_OPTIONS' , 'Opciones' ) ;
define( '_AM_APCAL_CAT_TH_LASTMODIFY' , '&Uacute;ltima modificada' ) ;
define( '_AM_APCAL_CAT_TH_OPERATION' , 'Operaci&oacute;n' ) ;
define( '_AM_APCAL_CAT_TH_ENABLED' , 'Habilitar' ) ;
define( '_AM_APCAL_CAT_TH_WEIGHT' , 'Tama&ntilde;o' ) ;
define( '_AM_APCAL_CAT_TH_SUBMENU' , 'Registrar un  SubMenu' ) ;
define( '_AM_APCAL_BTN_UPDATE' , 'ACTUALIZAR' ) ;
define( '_AM_APCAL_MENU_CAT_EDIT' , 'Editar una Categor&iacute;a' ) ;
define( '_AM_APCAL_MENU_CAT_NEW' , 'Crear una nueva Categor&iacute;a' ) ;
define( '_AM_APCAL_MB_MAKESUBCAT' , 'SubCategor&iacute;a' ) ;
define( '_AM_APCAL_MB_MAKETOPCAT' , 'Crear una categor&iacute;a in a nivel Superior' ) ;
define( '_AM_APCAL_MB_CAT_INSERTED' , 'Nueva categor&iacute;a creada' ) ;
define( '_AM_APCAL_MB_CAT_UPDATED' , 'Categor&iacute;a actualizada' ) ;
define( '_AM_APCAL_FMT_CAT_DELETED' , '%s Categor&iacute;as eliminadas' ) ;
define( '_AM_APCAL_FMT_CAT_BATCHUPDATED' , '%s Categor&iacute;as actualizadas' ) ;
define( '_AM_APCAL_FMT_CATDELCONFIRM' , 'Quieres eliminar la categor&iacute;a %s ?' ) ;
define('_AM_APCAL_CANBEMAIN', 'Usar como una categor&iacute;a principal');
define('_AM_APCAL_COLOR', 'Color');

// Plugins
define('_AM_APCAL_PI_UPDATED' , 'Los Plugins se han actualizado' ) ;
define('_AM_APCAL_PI_TH_TYPE' , 'Tipo' ) ;
define('_AM_APCAL_PI_TH_OPTIONS' , 'Opciones (Habitualmente en blanco)' ) ;
define('_AM_APCAL_PI_TH_TITLE' , 'Nombre' ) ;
define('_AM_APCAL_PI_TH_DIRNAME' , 'M&oacute;dulo\'s Nombre del directorio' ) ;
define('_AM_APCAL_PI_TH_FILE' , 'Archvo Plugin' ) ;
define('_AM_APCAL_PI_TH_DOTGIF' , 'Punto GIF' ) ;
define('_AM_APCAL_PI_TH_OPERATION' , 'Operaci&oacute;n' ) ;
define('_AM_APCAL_PI_ENABLED' , 'Habilitado' ) ;
define('_AM_APCAL_PI_DELETE' , 'Eliminado' ) ;
define('_AM_APCAL_PI_NEW' , 'Nuevo' ) ;
define('_AM_APCAL_PI_VIEWYEARLY' , 'Vista Anual' ) ;
define('_AM_APCAL_PI_VIEWMONTHLY' , 'Vista Mensual' ) ;
define('_AM_APCAL_PI_VIEWWEEKLY' , 'Vista Semanal' ) ;
define('_AM_APCAL_PI_VIEWDAILY' , 'Vista Diaria' ) ;

// Blocks & Groups Admin
define('_AM_APCAL_TITLE', 'Nombre');
define('_AM_APCAL_SIDE', 'Direcci&oacute;n');
define('_AM_APCAL_WEIGHT', 'Tama&ntilde;o');
define('_AM_APCAL_VISIBLEIN', 'Visible en');
define('_AM_APCAL_BCACHETIME', 'Duraci&oacute;n del Cach&eacute;');
define('_AM_APCAL_ACTION', 'Acci&oacute;n');
define('_AM_APCAL_ACTIVERIGHTS', 'Derechos de Administraci&oacute;n del M&oacute;dulo');
define('_AM_APCAL_ACCESSRIGHTS', 'Derechos de acceso al M&oacute;dulo');
define('_AM_APCAL_BADMIN', 'Administraci&oacute;n de Bloques');
//define('_AM_APCAL_ADGS', 'Groups');

}

?>