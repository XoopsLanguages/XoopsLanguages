<?php // Xoops Spanish Support (http://www.esxoops.com)
// $Id: modulesadmin.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Administraci�n de M�dulos");
define("_MD_AM_MODULE","M�dulo");
define("_MD_AM_VERSION","Versi�n");
define("_MD_AM_LASTUP","�ltima Actualizaci�n");
define("_MD_AM_DEACTIVATED","Desactivado");
define("_MD_AM_ACTION","Acci�n");
define("_MD_AM_DEACTIVATE","Desactivar");
define("_MD_AM_ACTIVATE","Activar");
define("_MD_AM_UPDATE","Actualizar");
define("_MD_AM_DUPEN","&iexcl;Duplicar a entrada na tabla de m�dulos!");
define("_MD_AM_DEACTED","O m�dulo seleccioado foi Desactivado. Agora poder� desinstalalo de xeito Seguro.");
define("_MD_AM_ACTED","&iexcl;&iexcl;O m�dulo seleccioado foi Activado!!");
define("_MD_AM_UPDTED","&iexcl;O m�dulo seleccioado foi Actualizado!");
define("_MD_AM_SYSNO","O M�dulo non pode ser Desactivado");
define("_MD_AM_STRTNO","Este m�dulo est� configurado como a s�a p�xina de inicio por defecto. Por favor, primero cambie o m�dulo de inicio nas preferencias do seu sitio.");

// added in RC2
define("_MD_AM_PCMFM","Por favor, Confirme:");

// added in RC3
define("_MD_AM_ORDER","Orde");
define("_MD_AM_ORDER0","(0 = oculto)");
define("_MD_AM_ACTIVE","Activo");
define("_MD_AM_INACTIVE","Inactivo");
define("_MD_AM_NOTINSTALLED","Non Instalado");
define("_MD_AM_NOCHANGE","Non Cambiar");
define("_MD_AM_INSTALL","Instalar");
define("_MD_AM_UNINSTALL","Desinstalar");
define("_MD_AM_SUBMIT","Enviar");
define("_MD_AM_CANCEL","Cancelar");
define("_MD_AM_DBUPDATE","&iexcl;Base de Datos actualizada Satisfactoriamente!");
define("_MD_AM_BTOMADMIN","Voltar � p�gina de administraci�n de m�dulos");

// %s represents module name
define("_MD_AM_FAILINS","Imposible  Instalar %s.");
define("_MD_AM_FAILACT","Imposible activar %s.");
define("_MD_AM_FAILDEACT","Imposible  desactivar %s.");
define("_MD_AM_FAILUPD","Imposible actualizar %s.");
define("_MD_AM_FAILUNINS","Imposible desinstalar %s.");
define("_MD_AM_FAILORDER","Imposible Reordenar %s.");
define("_MD_AM_FAILWRITE","Imposible Escribir no men� de principal.");
define("_MD_AM_ALEXISTS","O m�dulo %s xa existe.");
define("_MD_AM_ERRORSC","Erro(s):");
define("_MD_AM_OKINS","M�dulo %s instalado satisfactoriamente.");
define("_MD_AM_OKACT","M�dulo %s activado  satisfactoriamente.");
define("_MD_AM_OKDEACT","M�dulo %s desactivado satisfactoriamente.");
define("_MD_AM_OKUPD","M�dulo %s actualizado satisfactoriamente.");
define("_MD_AM_OKUNINS","M�dulo %s desinstalado satisfactoriamente.");
define("_MD_AM_OKORDER","M�dulo %s reordeado satisfactoriamente.");

define('_MD_AM_RUSUREINS', 'Presione o bot�n para Instalar o m�dulo');
define('_MD_AM_RUSUREUPD', 'Presione o bot�n para Actualizar o m�dulo');
define('_MD_AM_RUSUREUNINS', '�Realmente desexa desinstalar o m�dulo?');
define('_MD_AM_LISTUPBLKS', 'Os seguintes bloques poden ser actualizados. <br />Seleccione os bloques nos que desexa que o contenido (template e opci�ns) poida ser sobrescrito.<br />');
define('_MD_AM_NEWBLKS', 'Novos Bloques');
define('_MD_AM_DEPREBLKS', 'Bloques Desaprobados');


// added in 2.3 - julionc
define('_MD_AM_INSTALLING', 'Instalando ');
define('_MD_AM_TABLE_RESERVED', '%s � unha tabla reservada');
define('_MD_AM_CREATE_TABLES', 'Creando tablas...');
define('_MD_AM_TABLE_CREATED', 'Tabla %s creada');
define('_MD_AM_INSERT_DATA', '&nbsp;&nbsp; Informaci�n gardada na tabla %s');
define('_MD_AM_INSERT_DATA_FAILD', 'Imposible engadir %s � base de datos.');
define('_MD_AM_INSERT_DATA_DONE', 'Informaci�n do m�dulo gardada satisfactoriamente.');
define('_MD_AM_MODULEID', ' ID do M�dulo: %s');
define('_MD_AM_SQL_FOUND', 'Arquivo SQL localizado en %s ');
define('_MD_AM_SQL_NOT_FOUND', 'Arquivo SQL non atopado en %s');
define('_MD_AM_SQL_NOT_CREATE', 'Erro: non se puido crear %s ');
define('_MD_AM_SQL_NOT_VALID', '%s non � un arquivo SQL v�lido');

define('_MD_AM_GROUP_ID', ' ID do Grupo: %s ');
define('_MD_AM_NAME', ' Nome: ');
define('_MD_AM_VALUE', ' Valor: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD', 'Engadindi plantillas...');
define('_MD_AM_TEMPLATES_DELETE', 'Eliminando plantillas...');
define('_MD_AM_TEMPLATES_UPDATE', 'Actualizando plantillas...');

define('_MD_AM_TEMPLATE_ID', 'Id da plantilla: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA', 'Plantilla %s engadida � base de datos');
define('_MD_AM_TEMPLATE_ADD_ERROR', 'Erro: imposible engadir a plantilla %s � base de datos.');
define('_MD_AM_TEMPLATE_COMPILED', 'Plantilla %s compilada ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED', 'Erro: Fallou � compilar a plantilla %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA', 'Plantilla %s eliminada da base de datos. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD', 'Erro: imposible eliminar a plantilla %s da base de datos. ');
define('_MD_AM_TEMPLATE_INSERT_DATA', 'Plantilla %s engadida � base de datos. ');
define('_MD_AM_TEMPLATE_RECOMPILE', 'Plantilla %s recompilada');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD', 'Erro: recompilaci�n da Plantilla %s fallida');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR', 'Erro: imposible recompilar a plantilla %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR', 'Erro: imposible eliminar a anterior plantilla %s. Detendo a actualizaci�n de este arquivo. ');
define('_MD_AM_TEMPLATE_UPDATE', 'Plantilla %s actualizada. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR', 'Erro: imposible actualizar a plantilla %s. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD', 'Engadindo bloques...');
define('_MD_AM_BLOCKS_DELETE', 'Eliminando bloque...');
define('_MD_AM_BLOCKS_REBUILD', 'Reconstruindo bloques...');

define('_MD_AM_BLOCK_ID', ' Id do bloque: %s ');

define('_MD_AM_BLOCK_ACCESS', 'Engadindo o permiso de acceso � bloque');
define('_MD_AM_BLOCK_ACCESS_ERROR', 'Erro: imposible aplicar o permiso de acceso');
define('_MD_AM_BLOCK_ADD', 'Bloque %s engadido ');
define('_MD_AM_BLOCK_ADD_ERROR', 'Erro: imposible engadir o bloque %s � base de datos. ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE', 'Erro da base de datos: %s ');
define('_MD_AM_BLOCK_CREATED', 'Bloque %s creado ');
define('_MD_AM_BLOCK_DELETE', 'Bloque %s eliminado ');
define('_MD_AM_BLOCK_DELETE_DATA', 'Plantilla do bloque %s eliminada da base de datos. ');
define('_MD_AM_BLOCK_DELETE_ERROR', 'Erro: imposible borrar o bloque %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR', 'Erro: imposible eliminar a plantilla do bloque %s da base de datos');
define('_MD_AM_BLOCK_DEPRECATED', 'Plantilla do bloque %s en desuso ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR', 'Erro: imposible eliminar a plantilla do bloque en desuso.  ');
define('_MD_AM_BLOCK_UPDATE', 'Bloque %s actualizado. ');

/* Configs */
define('_MD_AM_GONFIG_ID', 'ID da Configuraci�n: %s');
define('_MD_AM_MODULE_DATA_ADD', 'Engadindo la informaci�n de configuraci�n do m�dulo...');
define('_MD_AM_MODULE_DATA_DELETE', 'Eliminando as opci�ns de configuraci�n do m�dulo...');
define('_MD_AM_MODULE_DATA_UPDATE', 'Informaci�n do m�dulo actualizada.');

define('_MD_AM_CONFIG_ADD', ' Opci�ns de configuraci�n engadidas');
define('_MD_AM_CONFIG_DATA_ADD', ' Configuraci�n %s engadida � base de datos');
define('_MD_AM_CONFIG_DATA_ADD_ERROR', ' Erro: imposible gardar a configuraci�n %s � base de datos. ');
define('_MD_AM_GONFIG_DATA_DELETE', 'Informaci�n da configuraci�n eliminada da base de datos. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR', 'Erro: imposible eliminar a informaci�n da configuraci�n da base de datos');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD', 'Establecendo permisos do grupo...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR', 'Erro: imposible eliminar os permisos do grupo ');
define('_MD_AM_GROUP_PERMS_DELETED', 'Permisos do grupo eliminados ');

define('_MD_AM_ACCESS_ADMIN_ADD', 'Engadidos os permisos de acceso para a ID do Grupo %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR', 'Erro: imposible gardar os permisos de acceso para a ID do grupo %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR', 'Aplicados os dereitos de acceso para a ID do grupo: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR', 'Erro: imposible aplicar dereitos de acceso do usuario para la ID do grupo: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE', 'Fallou a execuci�n de %s');
define('_MD_AM_FAILED_SUCESS', '%s executado correctamente.');

define('_MD_AM_DELETE_ERROR', 'Erro: imposible eliminar %s');
define('_MD_AM_UPDATE_ERROR', 'Erro: imposible actualizar %s');
define('_MD_AM_DELETE_MOD_TABLES', 'Eliminando as tablas do m�dulo...');

define('_MD_AM_COMMENTS_DELETE', 'Eliminando comentarios...');
define('_MD_AM_COMMENTS_DELETE_ERROR', 'Erro: imposible eliminar os comentarios');
define('_MD_AM_COMMENTS_DELETED', 'Comentarios eliminados');

define('_MD_AM_NOTIFICATIONS_DELETE', 'Eliminando notificaci�ns...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR', 'Erro: imposible eliminar notificaci�ns');
define('_MD_AM_NOTIFICATIONS_DELETED', 'Notificaci�ns eliminadas');

define('_MD_AM_TABLE_DROPPED', 'Tabla %s eliminada');
define('_MD_AM_TABLE_DROPPED_ERROR', 'Erro: Imposible eliminar a tabla %s');
define('_MD_AM_TABLE_DROPPED_FAILDED', 'Erro: Non se permitiu borrar a tabla %s');
?>