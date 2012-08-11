<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    es
 * _CHARSET     UTF-8
 * @version     $Id:$
 */

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER","Mantenimiento");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","Mantenimiento completo");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","Basurero");

define("_AM_SYSTEM_MAINTENANCE_SESSION","Vaciar tabla de sesiones");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Mantenimiento de la sesión : OK");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Mantenimiento de la sesión : Error");
define("_AM_SYSTEM_MAINTENANCE_CACHE","Vaciar directorio cache");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","Mantenimiento del caché : OK");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","Mantenimiento del caché : Error");
define("_AM_SYSTEM_MAINTENANCE_TABLES","Mantenimiento de las tablas");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","Mantenimiento de las tablas : OK");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","Mantenimiento de las tablas : Error");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","OPtimiza, comprueba, repara y analiza sus tablas");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","Mantenimiento de la base de datos : OK");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","Mantenimiento de la base de datos : Error");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","Optimizar tabla(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","Comprobar tabla(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","Reparar tabla(s)");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","Analizar tabla(s)");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC", 
"ANALYZE TABLE analiza y almacena la key distribution para una tabla. Durante el análisis, la tabla se bloquea (color rojo).<br />
CHECK TABLE comprueba las tablas para ver si hay errores.<br />
OPTIMIZE TABLE para recuperar el espacio no usado y para desfragmentar los datos almacenados.<br />
REPAIR TABLE repara una tabla dañada.");

define("_AM_SYSTEM_MAINTENANCE_RESULT","Resulta");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","No Resulta");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","Tarea de limpieza del caché");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","Tarea de la tabla de sesiones");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","Tarea de la base de datos");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","No hay opción para el mantenimiento");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","Tablas");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","Optimizar");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","Revisar"); 
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","Reparar");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","Analizar");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","Basurero");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","Seleccione tablas o módulos");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","Agregar el comando DROP TABLE IF EXISTS 'tablas' en el basurero");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR","OR");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND","AND");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES","Debe seleccionar las tablas o módulos");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES","No hay tablas");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES","Tablas");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES","Estructuras");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS","Número de registros");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED","Archivo creado");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT","Resultado");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS","registro(s)");

// Tips
define('_AM_SYSTEM_MAINTENANCE_TIPS', 
'<ul>
<li>Podrá hacer un mantenimiento de la instalación de sus Xoops: Vaciar su tabla de sesiones y caché, así como mantener el resto de sus tablas</li>
</ul>' );

?>
