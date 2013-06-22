<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","M&oacute;dulo Calendario con Planificador");

// Default Locale
define("_MI_APCAL_DEFAULTLOCALE","usa");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","Mini Calendario");
define("_MI_APCAL_BNAME_MINICAL_DESC","Mostrar Bloque MiniCalendario");
define("_MI_APCAL_BNAME_MINICALEX","MiniCalendarEx");
define("_MI_APCAL_BNAME_MINICALEX_DESC","Mini Calendario Extensible con plugin Sistema");
define("_MI_APCAL_BNAME_MONTHCAL","Calendario Mensual");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","Mostrar en Tama&ntilde;o Completo el Calendario Mensual");
define("_MI_APCAL_BNAME_TODAYS","Eventos de hoy");
define("_MI_APCAL_BNAME_TODAYS_DESC","Mostrar eventos de hoy");
define("_MI_APCAL_BNAME_THEDAYS","Eventos del %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","Mostrar eventos para el d&iacute;a indicado");
define("_MI_APCAL_BNAME_COMING","Eventos entrantes");
define("_MI_APCAL_BNAME_COMING_DESC","Mostrar Eventos entrantes");
define("_MI_APCAL_BNAME_AFTER","Eventos posteriores al %s");
define("_MI_APCAL_BNAME_AFTER_DESC","Mostrar eventos posteriores al d&iacute;a indicado");
define("_MI_APCAL_BNAME_NEW","Eventos reci&eacute;n publicados");
define("_MI_APCAL_BNAME_NEW_DESC","Mostrar Eventos ordenados con el m&aacute;s nuevo en la parte superior");
define("_MI_APCAL_BNAME_MAP", 'Mapa de eventos de este mes');
define("_MI_APCAL_BNAME_MAP_DESC", '');

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","Enviar");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCAL_USERS_AUTHORITY", "Permisos de los Usuarios");
define("_MI_APCAL_GUESTS_AUTHORITY", "Permisos de los Invitados");
define("_MI_APCAL_DEFAULT_VIEW", "Vista por Defecto centrada");
define("_MI_APCAL_MINICAL_TARGET", "Ver Objetivo desde el MiniCalendario");
define("_MI_APCAL_COMING_NUMROWS", "N&uacute;mero de eventos en el Bloque de Eventos entrantes");
define("_MI_APCAL_SKINFOLDER", "Nombre de la carpeta personal");
define("_MI_APCAL_LOCALE", "Mostrar vacaciones en:");
define("_MI_APCAL_SUNDAYCOLOR", "Color  del Domingo");
define("_MI_APCAL_WEEKDAYCOLOR", "Color del fin de semana");
define("_MI_APCAL_SATURDAYCOLOR", "Color del S&aacute;bado");
define("_MI_APCAL_HOLIDAYCOLOR", "Color de las vacaciones");
define("_MI_APCAL_TARGETDAYCOLOR", "Color del d&iacute;a seleccionado");
define("_MI_APCAL_SUNDAYBGCOLOR", "Color de Fondo del Domingo");
define("_MI_APCAL_WEEKDAYBGCOLOR", "Color de Fondo of weekday");
define("_MI_APCAL_SATURDAYBGCOLOR", "Color de Fondo del S&aacute;bado");
define("_MI_APCAL_HOLIDAYBGCOLOR", "Color de Fondo de las Vacaciones");
define("_MI_APCAL_TARGETDAYBGCOLOR", "Color de Fondo del d&iacute;a seleccionado");
define("_MI_APCAL_CALHEADCOLOR", "Color de la cabecera del calendario");
define("_MI_APCAL_CALHEADBGCOLOR", "Color de Fondo de la cabecera del calendario");
define("_MI_APCAL_CALFRAMECSS", "Estilo para el marco del calendario");
define("_MI_APCAL_CANOUTPUTICS", "Permisos sobre los archivos ics exportables");
define("_MI_APCAL_MAXRRULEEXTRACT", "L&iacute;mite Superior de los eventos exportables por Regla.(CONT)");
define("_MI_APCAL_WEEKSTARTFROM", "D&iacute;a inicial de la semana");
define("_MI_APCAL_WEEKNUMBERING", "Regla de numeraci&oacute;n para las semanas");
define("_MI_APCAL_DAYSTARTFROM", "L&iacute;mite para separar d&iacute;as");
define("_MI_APCAL_TIMEZONE_USING", "Zona horaria del servidor");
define("_MI_APCAL_USE24HOUR", "Sistema de 24 horas(No significa sistema de 12 horas)");
define("_MI_APCAL_NAMEORUNAME" , "Mostrar nombre de la persona que publica" ) ;

define("_MI_APCAL_GMLAT" , "\"Mapa Google\" latitud por defecto" ) ;
define("_MI_APCAL_GMLNG" , "\"Mapa Google\" longitud por defecto" ) ;
define("_MI_APCAL_GMZOOM" , "\"Mapa Google\" Nivel de Zoom por defecto" ) ;
define("_MI_APCAL_GMHEIGHT" , "Altura (en pixels) del \"Mapa de Google\"" ) ;
define("_MI_APCAL_USEURLREWRITE" , "Usar la reescritura de URL" ) ;
define("_MI_APCAL_WIDERWEEKEND" , "Ampliar las columnas en la vista mensual para:" ) ;
define('_MI_APCAL_GETTHMCOLOR', 'Archivo principal css de la carpeta de tu Tema');
define('_MI_APCAL_THMORDEFAULT', 'Colores de:');
define('_MI_APCAL_ENABLECALMAP', 'Mostrar el Mapa de Google en la vista del calendario');
define('_MI_APCAL_ENABLEEVENTMAP', 'Mostrar el Mapa de Google en la vista del evento');
define('_MI_APCAL_ENABLESHARING', 'Habilitar que los Usuarios compartan el calendario en sus P&aacute;ginas web');
define('_MI_APCAL_EVENTNAVENABLED', 'Hablitar el Men&uacute; de Navegaci&oacute;n en la vista de Eventos');
define('_MI_APCAL_DISPLAYCATTITLE', 'Mostar el nombre de la Categor&iacute;a como Nombre de la p&aacute;gina del m&oacute;dulo');
define('_MI_APCAL_ENABLESOCIAL', 'Habilitar enlaces a Redes sociales');
define('_MI_APCAL_NBPICS', 'M&aacute;ximo n&uacute;mero de im&aacute;genes permitidas (0 si no quieres ninguna)');
define('_MI_APCAL_PICSWIDTH', 'Ancho m&aacute;ximo de las im&aacute;genes para mostrarlas en la vista de eventos');
define('_MI_APCAL_PICSHEIGHT', 'Altura m&aacute;xima de las im&aacute;genes para mostrarlas en la vista de eventos');
define('_MI_APCAL_SHOWPICMONTHLY', 'Mostrar la imagen Principal en la vista mensual');
define('_MI_APCAL_SHOWPICWEEKLY', 'Mostrar la imagen principal en la vista semanal');
define('_MI_APCAL_SHOWPICDAILY', 'Mostrar la imagen Principal en la vista diaria');
define('_MI_APCAL_SHOWPICLIST', 'Mostrar la imagen principal en la lista de eventos');
define('_MI_APCAL_EVENTBGCOLOR', 'Color de Fondo de la fila de eventos');
define('_MI_APCAL_EVENTCOLOR', 'Color de la fila de eventos');
define('_MI_APCAL_ALLCATSCOLOR', 'Color para la categor&iacute;a por defecto');
define('_MI_APCAL_DISPLAYTIMEZONE', 'Mostrar zonas horarias cuando se muestre la hora');

define('_MI_APCAL_USERS', 'Usuarios');
define('_MI_APCAL_COLORS', 'Colores');
define('_MI_APCAL_SETTINGS', 'Configuraci&iacute;n General');
define('_MI_APCAL_CALSETTINGS', 'Configuraci&oacute;n del Calendario');
define('_MI_APCAL_CALDISPLAY', 'Mostrar Calendario');
define('_MI_APCAL_EVENTS', 'Eventos');
define('_MI_APCAL_PICTURES', 'Im&aacute;genes');
define('_MI_APCAL_MAP', 'Mapa Google');
define('_MI_APCAL_COMMENTSNOT', 'Comentarios y & Notificaciones');

// Description of each config items
define("_MI_APCAL_EDITBYGUESTDSC", "Permisos de a&ntilde;adir eventos por los Invitados");
define("_MI_APCAL_LOCALEDESC", "Nota: Las vacaciones est&aacute;n a&ntilde;adidas para USA, Canada, Canada-fr y France exclusivamente. Para otros pa&iacute;ses, debes crearlas t&uacute; mismo.");
define("_MI_APCAL_DESCNAMEORUNAME" , "Selecciona qu&eacute; 'nombre' se muestra" );
define("_MI_APCAL_DESCUSEURLREWRITE" , "<b>Para hacerlo funcionar, copia  /modules/APCal/doc/.htaccess a /modules/APCal/.</b><br /><br />Nota: Si no tienes el apache \"mod_rewrite\" instalado en tu Servidor, es posible que no funcione. Por favor, contacta con tu administrador de sistemas para m&aacute;s detalles." ) ;
define("_MI_APCAL_WIDERWEEKENDDESC" , "Presiona la Tecla \"Ctrl\" de tu teclado mientras seleccionas m&aacute;s de un d&iacute;a." );
define('_MI_APCAL_THMORDEFAULTDESC', 'Tema: A&ntilde;ade a tu archivo css principal las siguientes l&iacute;neas. (Recomendado)<br />Personalizar:  Rellena los siguientes 13 campos.<br />Por Defecto: Usa los colores por defecto.');

// Options of each config items
define("_MI_APCAL_OPT_AUTH_NONE", "No puede a&ntilde;adir");
define("_MI_APCAL_OPT_AUTH_WAIT", "Puede a&ntilde;adir, pero los Eventos necesitan ser aprobados");
define("_MI_APCAL_OPT_AUTH_POST", "Puede a&ntilde;adir eventos sin aprobaci&oacute;n");
define("_MI_APCAL_OPT_AUTH_BYGROUP", "Especificado en los Permisos de Grupo");
define("_MI_APCAL_OPT_MINI_PHPSELF", "P&aacute;gina actual");
define("_MI_APCAL_OPT_MINI_MONTHLY", "Calendario Mensual");
define("_MI_APCAL_OPT_MINI_WEEKLY", "Calendario Semanal");
define("_MI_APCAL_OPT_MINI_DAILY", "Calendario Diario");
define("_MI_APCAL_OPT_MINI_LIST", "Lista de Eventos");
define("_MI_APCAL_OPT_CANOUTPUTICS", "Puede exportar");
define("_MI_APCAL_OPT_CANNOTOUTPUTICS", "No puede exportar");
define("_MI_APCAL_OPT_STARTFROMSUN", "Domingo");
define("_MI_APCAL_OPT_STARTFROMMON", "Lunes");
define("_MI_APCAL_OPT_WEEKNOEACHMONTH", "por cada mes");
define("_MI_APCAL_OPT_WEEKNOWHOLEYEAR", "Por cada a&ntilde;o");
define("_MI_APCAL_OPT_USENAME" , "Nombre Real" ) ;
define("_MI_APCAL_OPT_USEUNAME" , "Nombre del login" ) ;
define("_MI_APCAL_OPT_TZ_USEXOOPS" , "valor del archivo de configuraci&oacute;n de XOOPS" ) ;
define("_MI_APCAL_OPT_TZ_USEWINTER" , "Valor dado por el horario de Invierno del Servidor(recomendado)" ) ;
define("_MI_APCAL_OPT_TZ_USESUMMER" , "valor dado por el horario de Verano del Servidor" ) ;
define('_MI_APCAL_OPT_THM', 'Tema');
define('_MI_APCAL_OPT_CUSTOM', 'Personalizar');
define('_MI_APCAL_OPT_DEFAULT', 'Por Defecto');
define("_MI_APCAL_OPT_NONE", "Ninguno");
define('_MI_APCAL_SUNDAY', 'Domingo');
define('_MI_APCAL_MONDAY', 'Lunes');
define('_MI_APCAL_TUESDAY', 'Martes');
define('_MI_APCAL_WEDNESDAY', 'Mi&eacute;rcoles');
define('_MI_APCAL_THURSDAY', 'Jueves');
define('_MI_APCAL_FRIDAY', 'Viernes');
define('_MI_APCAL_SATURDAY', 'S&aacute;bado');

// Admin Menus
define('_MI_APCAL_INDEX', 'Principal');
define("_MI_APCAL_ADMENU0","Admitir Eventos");
define("_MI_APCAL_ADMENU1","Administrador de Eventos");
define("_MI_APCAL_ADMENU_CAT","Administrador de Categor&iacute;as");
define("_MI_APCAL_ADMENU_CAT2GROUP","Permisos de Categor&iacute;as");
define("_MI_APCAL_ADMENU2","Permisos Globales");
define("_MI_APCAL_ADMENU_TM","administraci&oacute;n de Tablas");
define("_MI_APCAL_ADMENU_PLUGINS","Administrador de Plugins");
define("_MI_APCAL_ADMENU_ICAL","Importar iCalendar");
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Plantillas');
define("_MI_APCAL_ADMENU_MYBLOCKSADMIN","Administraci&oacute;n de Bloques & Grupos");

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'Global');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'Opciones de notificaciones Globales del Calendario.');
define('_MI_APCAL_CATEGORY_NOTIFY', 'Categor&iacute;a');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', 'Opciones de Notificaci&oacute;n aplicables a la categor&iacute;a actual.');
define('_MI_APCAL_EVENT_NOTIFY', 'Evento');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'Opciones de Notificaci&oacute;n aplicables al evento actual.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', 'Nuevo Evento');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Notificarme cuando un nuevo evento es creado.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Notificarme con la descripci&oacute;n inclu&iacute;da cuando un nuevo evento es creado.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Nuevo evento');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', 'Nuevo evento en la categor&iacute;a');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'Notificarme cuando un nuevo evento se ha creado en la Categor&iacute;a.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'Notificarme con la descripci&oacute;n inclu&iacute;da cuando un nuevo evento es creado in la Categor&iacute;a.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n : Nuevo evento en la Categor&iacute;a {CATEGORY_TITLE}');

}

?>