<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    es
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 4091 2010-01-05 17:02:11Z forxoops $
 */

// Navigation
define( '_AM_SYSTEM_MODULES_ADMIN', 'Administraci�n de m�dulos' );
define( '_AM_SYSTEM_MODULES_LIST', 'Mostrar m�dulos');
define( '_AM_SYSTEM_MODULES_TOINSTALL', 'Instalar m�dulo' );
define( '_AM_SYSTEM_MODULES_VALIDATE', 'Validar cambios' );
define( '_AM_SYSTEM_MODULES_SUBMITRES', 'Enviar resultado');

// Messages
define( '_AM_SYSTEM_MODULES_RUSUREINS', 'Presione el bot�n para instalar el m�dulo');
define( '_AM_SYSTEM_MODULES_RUSUREUNINS', '�Desinstalar el m�dulo?' );
define( '_AM_SYSTEM_MODULES_RUSUREUPD', 'Presiones el bot�n para actualizar el m�dulo');
define( '_AM_SYSTEM_MODULES_BTOMADMIN', 'Volver a la p�gina de admin. de m�dulos' );
define( '_AM_SYSTEM_MODULES_INSTALLING', 'Instalando ');
define( '_AM_SYSTEM_MODULES_UNINSTAL', 'Desinstalar ' );
define( '_AM_SYSTEM_MODULES_DEACTIVATE', 'Desactivar ');
define( '_AM_SYSTEM_MODULES_ACTIVATE', 'Activar ');
define( '_AM_SYSTEM_MODULES_UPDATING', 'Actualizar ');

// Main
define( '_AM_SYSTEM_MODULES_INSTALL', 'Instalar' );
define( '_AM_SYSTEM_MODULES_UNINSTALL', 'Desinstalar' );
define( '_AM_SYSTEM_MODULES_UPDATE', 'Actualizar' );
define( '_AM_SYSTEM_MODULES_VIEWLARGE', 'Vista grande' );
define( '_AM_SYSTEM_MODULES_VIEWLINE', 'Vista peque�a' );


// %s represents module name
define("_AM_SYSTEM_MODULES_FAILINS","Imposible  instalar %s.");
define("_AM_SYSTEM_MODULES_FAILACT","Imposible activar %s.");
define("_AM_SYSTEM_MODULES_FAILDEACT","Imposible  desactivar %s.");
define("_AM_SYSTEM_MODULES_FAILUPD","Imposible actualizar %s.");
define("_AM_SYSTEM_MODULES_FAILUNINS","Imposible desinstalar %s.");
define("_AM_SYSTEM_MODULES_FAILORDER","Imposible reordenar %s.");
define("_AM_SYSTEM_MODULES_FAILWRITE","Imposible escribir en el men� de principal.");
define("_AM_SYSTEM_MODULES_ALEXISTS","El m�dulo %s ya existe.");
define("_AM_SYSTEM_MODULES_ERRORSC","Error(es):");
define("_AM_SYSTEM_MODULES_OKINS","M�dulo %s instalado correctamente.");
define("_AM_SYSTEM_MODULES_OKACT","M�dulo %s activado  correctamente.");
define("_AM_SYSTEM_MODULES_OKDEACT","M�dulo %s desactivado correctamente.");
define("_AM_SYSTEM_MODULES_OKUPD","M�dulo %s actualizado correctamente.");
define("_AM_SYSTEM_MODULES_OKUNINS","M�dulo %s desinstalado correctamente.");
define("_AM_SYSTEM_MODULES_OKORDER","M�dulo %s Eliminandoreordenado correctamente.");

define( '_AM_SYSTEM_MODULES_MODULE', 'M�dulo' );
define( '_AM_SYSTEM_MODULES_VERSION', 'Versi�n' );
define( '_AM_SYSTEM_MODULES_LASTUP', 'Actualizado' );
define( '_AM_SYSTEM_MODULES_DEACTIVATED', 'Desactivado' );
define( '_AM_SYSTEM_MODULES_ACTION', 'Acci�n' );
define( '_AM_SYSTEM_MODULES_MENU', 'Men�' );
define( '_AM_SYSTEM_MODULES_HIDE', 'Ocultar' );
define( '_AM_SYSTEM_MODULES_SHOW', 'Mostrar' );

define( '_AM_SYSTEM_MODULES_DUPEN', 'Duplicar entrada en la tabla de m�dulos' );
define( '_AM_SYSTEM_MODULES_DEACTED', 'El m�dulo ha sido desactivado. Ahora puede desinstalarlo' );
define( '_AM_SYSTEM_MODULES_ACTED', 'M�dulo activado correctamente' );
define( '_AM_SYSTEM_MODULES_UPDTED', 'El m�dulo ha sido actualizado' );
define( '_AM_SYSTEM_MODULES_SYSNO', 'El m�dulo de sistema no puede desactivarse.' );
define( '_AM_SYSTEM_MODULES_STRTNO', 'Este m�dulo est� configurado como predeterminado para la p�gina de inicio. Por favor, cambie esta configuraci�n desde preferencias.' );

define( '_AM_SYSTEM_MODULES_ORDER', 'Orden' );
define( '_AM_SYSTEM_MODULES_ORDER0', '(0 = ocultar)' );
define( '_AM_SYSTEM_MODULES_ACTIVE', 'Activo' );
define( '_AM_SYSTEM_MODULES_INACTIVE', 'Inactivo' );
define( '_AM_SYSTEM_MODULES_NOTINSTALLED', 'Sin instalar' );
define( '_AM_SYSTEM_MODULES_NOCHANGE', 'No cambiar' );
define( '_AM_SYSTEM_MODULES_SUBMIT', 'Enviar' );
define( '_AM_SYSTEM_MODULES_CANCEL', 'Cancelar' );
define( '_AM_SYSTEM_MODULES_DBUPDATE', 'Base de datos actualizada' );
define('_AM_SYSTEM_MODULES_LISTUPBLKS', 'Los siguientes bloques pueden ser actualizados. <br />Seleccione los bloques en los que desea que el contenido (plantilla y opciones) pueda ser sobrescrito.<br />');
define('_AM_SYSTEM_MODULES_NEWBLKS', 'Nuevos bloques');
define('_AM_SYSTEM_MODULES_DEPREBLKS', 'Bloques desaprobados'); 

// Logger
define('_AM_SYSTEM_MODULES_TABLE_RESERVED', '%s es una tabla reservada');
define('_AM_SYSTEM_MODULES_CREATE_TABLES', 'Creando tablas...');
define('_AM_SYSTEM_MODULES_TABLE_CREATED', 'Tabla %s creada');
define('_AM_SYSTEM_MODULES_INSERT_DATA', '&nbsp;&nbsp; Informaci�n guardada en la tabla %s');
define('_AM_SYSTEM_MODULES_INSERT_DATA_FAILD', 'Imposible a�adir %s a la base de datos.');
define('_AM_SYSTEM_MODULES_INSERT_DATA_DONE', 'Informaci�n del m�dulo guardada satisfactoriamente.');
define('_AM_SYSTEM_MODULES_MODULEID', ' ID del M�dulo: %s');
define('_AM_SYSTEM_MODULES_SQL_FOUND', 'Archivo SQL localizado en %s ');
define('_AM_SYSTEM_MODULES_SQL_NOT_FOUND', 'Archivo SQL no encontrado en %s');
define('_AM_SYSTEM_MODULES_SQL_NOT_CREATE', 'Error: no se pudo crear %s ');
define('_AM_SYSTEM_MODULES_SQL_NOT_VALID', '%s no es un archivo SQL v�lido');

define('_AM_SYSTEM_MODULES_GROUP_ID', ' ID del Grupo: %s ');
define('_AM_SYSTEM_MODULES_NAME', ' Nombre: ');
define('_AM_SYSTEM_MODULES_VALUE', ' Valor: ');

/* Templates */
define('_AM_SYSTEM_MODULES_TEMPLATES_ADD', 'A�adiendo plantillas...');
define('_AM_SYSTEM_MODULES_TEMPLATES_DELETE', 'Eliminando plantillas...');
define('_AM_SYSTEM_MODULES_TEMPLATES_UPDATE', 'Actualizando plantillas...');
define('_AM_SYSTEM_MODULES_TEMPLATE_ID', 'Id de la plantilla: %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA', 'Plantilla %s agregada a la base de datos');
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR', 'Error: imposible a�adir la plantilla %s a la base de datos.');
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED', 'Plantilla %s compilada ');
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED', 'Error: Fallo al compilar la plantilla %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA', 'Plantilla %s eliminada de la base de datos. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD', 'Error: imposible eliminar la plantilla %s de la base de datos. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA', 'Plantilla %s a�adida a la base de datos. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE', 'Plantilla %s recompilada');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD', 'Error: recompilaci�n de la Plantilla %s fallida');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR', 'Error: imposible recompilar la plantilla %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR', 'Error: imposible eliminar la anterior plantilla %s. Deteniendo la actualizaci�n de este archivo. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE', 'Plantilla %s actualizada. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR', 'Error: imposible actualizar la plantilla %s. ');

/* Blocks */
define('_AM_SYSTEM_MODULES_BLOCKS_ADD', 'Agregando bloques...');
define('_AM_SYSTEM_MODULES_BLOCKS_DELETE', 'Eliminando bloque...');
define('_AM_SYSTEM_MODULES_BLOCKS_REBUILD', 'Reconstruyendo bloques...');
define('_AM_SYSTEM_MODULES_BLOCK_ID', ' Id del bloque: %s ');
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS', 'A�adido el permiso de acceso al bloque');
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR', 'Error: imposible aplicar el permiso de acceso');
define('_AM_SYSTEM_MODULES_BLOCK_ADD', 'Bloque %s a�adido ');
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR', 'Error: imposible agregar el bloque %s a la base de datos. ');
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE', 'Error de la base de datos: %s ');
define('_AM_SYSTEM_MODULES_BLOCK_CREATED', 'Bloque %s creado ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE', 'Bloque %s eliminado ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA', 'Plantilla del bloque %s eliminada de la base de datos. ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR', 'Error: imposible borrar el bloque %s');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR', 'Error: imposible eliminar la plantilla del bloque %s de la base de datos');
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED', 'Plantilla del bloque %s en desuso ');
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR', 'Error: imposible eliminar la plantilla del bloque en desuso.  ');
define('_AM_SYSTEM_MODULES_BLOCK_UPDATE', 'Bloque %s actualizado. ');

/* Configs */
define('_AM_SYSTEM_MODULES_GONFIG_ID', 'ID de la Configuraci�n: %s');
define('_AM_SYSTEM_MODULES_MODULE_DATA_ADD', 'A�adiendo la informaci�n de configuraci�n del m�dulo...');
define('_AM_SYSTEM_MODULES_MODULE_DATA_DELETE', 'Eliminando las opciones de configuraci�n del m�dulo...');
define('_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE', 'Informaci�n del m�dulo actualizada.');

define('_AM_SYSTEM_MODULES_CONFIG_ADD', ' Opciones de configuraci�n agregadas');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD', ' Configuraci�n %s agregada a la base de datos');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR', ' Error: imposible guardar la configuraci�n %s a la base de datos. ');
define('_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE', 'Informaci�n de la configuraci�n eliminada de la base de datos. ');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR', 'Error: imposible eliminar la informaci�n de configuraci�n de la base de datos');

// Access
define('_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD', 'Estableciendo permisos del grupo...');

define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR', 'Error: imposible eliminar los permisos del grupo ');
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED', 'Permisos del grupo eliminados ');

define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD', 'Agregados los permisos de acceso para el ID del Grupo %s');
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR', 'Error: imposible guardar los permisos de acceso para la ID del grupo %s');
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR', 'Aplicados los derechos de acceso para la ID del grupo: %s');
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR', 'Error: imposible aplicar derechos de acceso del usuario para la ID del grupo: %s');

// execute module specific install script if any
define('_AM_SYSTEM_MODULES_FAILED_EXECUTE', 'Fall� la ejecuci�n de %s');
define('_AM_SYSTEM_MODULES_FAILED_SUCESS', '%s ejecutado correctamente.');

define('_AM_SYSTEM_MODULES_DELETE_ERROR', 'Error: imposible eliminar %s');
define('_AM_SYSTEM_MODULES_UPDATE_ERROR', 'Error: imposible actualizar %s');
define('_AM_SYSTEM_MODULES_DELETE_MOD_TABLES', 'Eliminando las tablas del m�dulo...');

define('_AM_SYSTEM_MODULES_COMMENTS_DELETE', 'Eliminando comentarios...');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR', 'Error: imposible eliminar los comentarios');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETED', 'Comentarios eliminados');

define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE', 'Eliminando notificaciones...');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR', 'Error: imposible eliminar notificaciones');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED', 'Notificaciones eliminadas');

define('_AM_SYSTEM_MODULES_TABLE_DROPPED', 'Tabla %s eliminada');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR', 'Error: Imposible eliminar la tabla %s');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED', 'Error: No se permiti� borrar la tabla %s');

// Tips
define( '_AM_SYSTEM_MODULES_TIPS', 
'<ul>
<li>Si instala un m�dulo nuevo, recuerde configurar las preferencias del mismo as� como sus bloques y permisos de usuarios.</li>
<li>Para ocultar el m�dulo en el men� principal, use el valor 0 para su orden.</li>
<li>Elimine archivos de los m�dulos antiguos o no usados para evitar ataques externos aprovechando el c�digo obsoleto de los mismos.</li>
</ul>');
define( '_AM_SYSTEM_MODULES_CONFIRM_TIPS',
'<ul>
<li>Comprobar todas las modificaciones para validar.</li>
</ul>');

?>
