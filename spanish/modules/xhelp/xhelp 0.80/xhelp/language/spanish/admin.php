<?php
//$Id: admin.php,v 1.8 2005/11/30 16:45:39 eric_juden Exp $

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','%s Menú del Administrador');
define('_AM_XHELP_BLOCK_TEXT','Administrar Bloques');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','Administrar Departamentos');
define('_AM_XHELP_MENU_MANAGE_STAFF','Administrar Técnicos');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','Modificar Plantillas de Email');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','Modificar Campos de Incidencias');
define('_AM_XHELP_MENU_GROUP_PERM','Permisos de Grupos');
define('_AM_XHELP_MENU_MIMETYPES','Administrar Tipos de Archivos');
define('_AM_XHELP_MENU_PREFERENCES','Preferencias');
define('_AM_XHELP_MENU_ADD_STAFF','Añadir Técnico');
define('_AM_XHELP_UPDATE_MODULE','Actualizar Módulo');
define('_AM_XHELP_MENU_MANAGE_ROLES','Administrar Roles');
define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','Administrar Notificaciones');
define('_AM_XHELP_MENU_MANAGE_FAQ','Administrar FAQ');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);
define('_AM_XHELP_SEC_TICKET_MERGE', 9);
define('_AM_XHELP_SEC_FILE_DELETE', 10);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','Añadir Incidencias');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','Modificar Incidencias');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','Borrar Incidencias');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Cambiar Propiedad de la Incidencia');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','Cambiar Situación de la Incidencia');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','Cambiar Prioridad de la incidencia');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','Crear Incidencia por Usuario');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','Añadir Respuesta');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','Modificar Respuesta');
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','Juntar Incidencias');
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','Borrar Archivos Adjuntos');
define('_AM_XHELP_SEC_TEXT_FAQ_ADD','Añadir FAQs');
define('_AM_XHELP_SEC_TEXT_TICKET_TAKE_OWNERSHIP','Tomar Propiedad de la Incidencia');

// Admin Menu
define('_AM_XHELP_ADMIN_ABOUT','Acerca');
define('_AM_XHELP_ADMIN_GOTOMODULE','Ir al Módulo');

//Permissions
define('_AM_XHELP_GROUP_PERM','Premisos de Grupos');
define('_AM_XHELP_GROUP_PERM_TITLE','Modificar Premisos de Grupos');
define('_AM_XHELP_GROUP_PERM_NAME','Permisos');
define('_AM_XHELP_GROUP_PERM_DESC','Selecciona el servicio(s) que cada grupo podrá modificar');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','Error: técnico no actualizado');
define('_AM_XHELP_MESSAGE_FILE_READONLY','Este archivo es de sólo-lectura. Por favor haz de la carpeta modules/xhelp/language/english/mail_templates escribible');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','Archivo actualizado');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','Error: archivo no actualizado');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','Rol creado correctamente.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Error: rol no creado.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Rol borrado.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Error: rol no borrado.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Rol actualizado.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Error: rol no actualizado.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','Permisos de Departamento guardados correctamente.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Error: los permisos de departamento no han sido guardados.');
define('_AM_XHELP_MESSAGE_DEF_ROLES','Roles de permisos por defecto añadidos.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','Error: Roles de permisos por defecto  no añadidos.');
define('_AM_XHELP_MESSAGE_NO_DEPT','Error: departamento sin especificar');
define('_AM_XHELP_MESSAGE_NO_DESC','Error: no has especificado una descripción.');
define('_AM_MESSAGE_ADD_STATUS_ERR','Error: situación no añadida.');
define('_AM_MESSAGE_EDIT_STATUS_ERR','Error: situación no actualizada.');
define('_AM_XHELP_DEL_STATUS_ERR','Error: situación no borrada.');
define('_AM_XHELP_STATUS_HASTICKETS_ERR','Error: por favor, actualiza las incidencias usando esta situación.');
define('_AM_XHELP_MESSAGE_NO_ID','Error: id no especificado.');
define('_AM_XHELP_MESSAGE_NO_VALUE','Error: el tipo de archivo no está permitido.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','Error: el tipo de archivo no ha sido actualizado.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','Error: el tipo de archivo no ha sido borrado.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','Error: el tipo de archivo no ha sido añadido.');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','Borrar');
define('_AM_XHELP_BUTTON_EDIT','Editar');
define('_AM_XHELP_BUTTON_SUBMIT','Enviar');
define('_AM_XHELP_BUTTON_RESET','Limpiar');
define('_AM_XHELP_BUTTON_ADDSTAFF','Añadir Técnico');
define('_AM_XHELP_BUTTON_UPDATESTAFF','Actualizar Técnico');
define('_AM_XHELP_BUTTON_CANCEL','Cancelar');
define('_AM_XHELP_BUTTON_UPDATE','Actualizar');
define('_AM_XHELP_BUTTON_CREATE_ROLE','Crear Rol Nuevo');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','Limpiar Permisos');
//define('_AM_XHELP_BUTTON_ADD_DEPT','Añadir Departamento');

define('_AM_XHELP_EDIT_DEPARTMENT','Editar Departamento');
define('_AM_XHELP_EXISTING_DEPARTMENTS','Departamentos Existentes');
define('_AM_XHELP_MANAGE_DEPARTMENTS','Administrar Departamentos');
define('_AM_XHELP_MANAGE_STAFF','Administrar Técnicos');
define('_AM_XHELP_EXISTING_STAFF','Técnicos Existentes');
define('_AM_XHELP_ADD_STAFF','Añadir Técnicos');
define('_AM_XHELP_EDIT_STAFF','Editar Técnicos');
define('_AM_XHELP_INDEX','Indice');
define('_AM_XHELP_DEPARTMENT_SERVERS','Buzón de Correo de Departamento');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Dirección de email');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Tipo de Buzón de Correo');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Prioridad de Incidencia por Defecto');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Servidor');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Puerto');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Acciones');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Añadir Buzón de Correo al monitor');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Nombre de usuario');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Contraseña');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','Dirección de Email para contestar');
define('_AM_XHELP_DEPARTMENT_NO_ID','No se ha encontrado el ID del departamento. Abortando.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Buzón de Correo añadido al Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Error guardando el buzón de correo al Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','Buzón de Correo del Departamento no especificado.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Borrado el Buzón de Correo del Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Error borrando el Buzón de Correo del Departamento.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','Antes de guardar debes asignar el usuario al menos a un departamento');
define('_AM_XHELP_STAFF_ERROR_ROLES','Antes de guardar debes asignar al usuario al menos un rol');
define('_AM_XHELP_STAFF_ERROR_USERS','Tienes que seleccionar un usuario para ser Técnico.');
define('_AM_XHELP_STAFF_EXISTS','Error: este usuario ya es un Técnico.');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','Añadir Departamento');
define('_AM_XHELP_TEXT_EDIT_DEPT','Editar Nombre de  Departamento');
define('_AM_XHELP_TEXT_EDIT','Editar');
define('_AM_XHELP_TEXT_DELETE','Borrar');
define('_AM_XHELP_TEXT_SELECTUSER','Selecciona Usuario');
define('_AM_XHELP_TEXT_DEPARTMENTS','Departamentos');
define('_AM_XHELP_TEXT_USER','Usuario');
define('_AM_XHELP_TEXT_ALL_DEPTS','Todos');
define('_AM_XHELP_TEXT_NO_DEPTS','Ninguno');
define('_AM_XHELP_TEXT_MAKE_DEPTS','Tienes que tener un departamento antes de añadir un técnico!');
define('_AM_XHELP_LINK_ADD_DEPT','Añadir Departamentos');
define('_AM_XHELP_TEXT_TOP_CLOSERS','Top "Cerradores"');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Peores "Cerradores"');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','Incidencias prioritarias abiertas');
define('_AM_XHELP_TEXT_NO_OWNER','Sin propietario');
define('_AM_XHELP_TEXT_NO_DEPT','Sin Departamento');
define('_AM_XHELP_TEXT_RESPONSE_TIME','Más rápidos en las respuestas');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','Más lentos en las respuestas');
define('_AM_XHELP_TEXT_PRIORITY','Prioridad');
define('_AM_XHELP_TEXT_ELAPSED','Hace');
define('_AM_XHELP_TEXT_STATUS','situación');
define('_AM_XHELP_TEXT_SUBJECT','Asunto');
define('_AM_XHELP_TEXT_DEPARTMENT','Departamento');
define('_AM_XHELP_TEXT_OWNER','Propietario');
define('_AM_XHELP_TEXT_LAST_UPDATED','Última actualización');
define('_AM_XHELP_TEXT_LOGGED_BY','Creado por');
define('_AM_XHELP_TEXT_EXISTING_ROLES','Roles existentes');
define('_AM_XHELP_TEXT_NO_ROLES','No se han encontrado Roles');
define('_AM_XHELP_TEXT_ROLES','Roles');
define('_AM_XHELP_TEXT_CREATE_ROLE','Crear Rol Nuevo');
define('_AM_XHELP_TEXT_EDIT_ROLE','Editar Rol');
define('_AM_XHELP_TEXT_NAME','Nombre');
define('_AM_XHELP_TEXT_PERMISSIONS','Permisos');
define('_AM_XHELP_TEXT_SELECT_ALL','Seleccionar Todos');
define('_AM_XHELP_TEXT_DEPT_PERMS','Personalizar Permisos de Departamentos');
define('_AM_XHELP_TEXT_CUSTOMIZE','Personalizar');
define('_AM_XHELP_TEXT_ACTIONS','Acciones');
define('_AM_XHELP_TEXT_ID','ID');
define('_AM_XHELP_TEXT_LOOKUP_USER','Lookup User');
define('_AM_XHELP_TEXT_BY','Por');
define('_AM_XHELP_TEXT_ASCENDING','Ascendente');
define('_AM_XHELP_TEXT_DESCENDING','Descendente');
define('_AM_XHELP_TEXT_SORT_BY','Ordenador por:');
define('_AM_XHELP_TEXT_ORDER_BY','Solicitado por:');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','Nº por página:');
define('_AM_XHELP_TEXT_SEARCH_MIME','Buscar tipos de archivo');
define('_AM_XHELP_TEXT_SEARCH_BY','Buscar por:');
define('_AM_XHELP_TEXT_SEARCH_TEXT','Buscar texto:');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','Vover a Buscar');
define('_AM_XHELP_TEXT_FIND_USERS','Encontrar Usuario');

define('_AM_XHELP_SEARCH_BEGINEGINDATE','Fecha de inicio');
define('_AM_XHELP_SEARCH_ENDDATE','Fecha de Fin');

define('_AM_XHELP_TEXT_ADD_STATUS','Añadir Estado');
define('_AM_XHELP_TEXT_STATE','Estado');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','Administrar Estados');
define('_AM_XHELP_TEXT_EDIT_STATUS','Editar Estados');

define('_AM_XHELP_TEXT_NO_RECORDS','No se han encontrado resultados');
define('_AM_XHELP_TEXT_MAIL_EVENTS','Eventos de Correo');
define('_AM_XHELP_TEXT_MAILBOX','Buzón de Correo');
define('_AM_XHELP_TEXT_EVENT_CLASS','Eventos de Clases');
define('_AM_XHELP_TEXT_TIME','Tiempo');
define('_AM_XHELP_NO_EVENTS','No se han encontrado eventos');
define('_AM_XHELP_SEARCH_EVENTS','Buscar eventos de correo');
define('_AM_XHELP_BUTTON_SEARCH','Buscar');
define('_AM_XHELP_BUTTON_TEST','Testear');
define('_AM_XHELP_POSITION','Posición');
define('_AM_XHELP_TEXT_MANAGE_FILES','Administrar Archivos');
define('_AM_XHELP_TEXT_TICKETID','ID de Incidencia');
define('_AM_XHELP_TEXT_FILENAME','Nombre');
define('_AM_XHELP_TEXT_MIMETYPE','Extensión');
define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','Uso de espacio Total');
define('_AM_XHELP_TEXT_SIZE','Tamaño');
define('_AM_XHELP_TEXT_DELETE_RESOLVED','Borrar archivos adjuntos de las incidencias resueltas?');
define('_AM_XHELP_TEXT_NO_FILES','No se han encontrado archivos');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','Archivos adjuntos resueltos');
define('_AM_XHELP_TEXT_ALL_ATTACH','Todos los archivos adjuntos');
define('_AM_XHELP_TEXT_MAINTENANCE','Tareas de Mantenimiento');
define('_AM_XHELP_TEXT_ORPHANED','Borrar registros huérfanos de los técnicos de la tabla xhelp_staff?');
define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','Borrar técnico del departamento');
define('_AM_XHELP_MSG_NO_DEPTID','Error: no se ha especificado la id del departamento.');
define('_AM_XHELP_MSG_NO_UID','Error: no se ha especificado el usuario.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','Error: el técnico no ha sido borrado del departamento.');


// Mimetypes
define("_AM_XHELP_MIME_ID","ID");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","Tipo de Aplicación");
define("_AM_XHELP_MIME_ADMIN","Técnico");
define("_AM_XHELP_MIME_USER","Usuario");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","Crear Extensión");
define("_AM_XHELP_MIME_MODIFYF","Modificar Extensión");
define("_AM_XHELP_MIME_EXTF","Extensión de Archivo");
define("_AM_XHELP_MIME_NAMEF","Tipo/Nombre de Aplicación<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escribe la aplicación con la que se relaciona esta extensión.</span></div>");
define("_AM_XHELP_MIME_TYPEF","Extensiones<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escribe el tipo de archivo con el que se relaciona la extensión. Cada tipo de archivos debe estar separado por un espacio en blanco.</span></div>");
define("_AM_XHELP_MIME_ADMINF","Extensiones permitidas para el adminstrador");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Los tipos de archivos que están disponibles para subidas del administrador</b>");
define("_AM_XHELP_MIME_USERF","Extensiones permitidas para los usuarios");
define("_AM_XHELP_MIME_USERFINFO","<b>Los tipos de archivo que están permitidos para las subodas de los usuarios</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","Sin extensiones encontradas.");
define("_AM_XHELP_MIME_FINDMIMETYPE","Encontrar nuevos tipos de archivo?");
define("_AM_XHELP_MIME_EXTFIND","Buscar Extensiones<div style='padding-top: 8px;'><span style='font-weight: normal;'>Introduce la extensión que deseas buscar.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>Los nuevos tipos de archivo pueden ser creados/editados/borrados mediantes esta formulario.</li>
	<li>Buscar nuevos tipos de archivo fuera de este website.</li> 
	<li>Ver tipos de archivo permitidos para las subidas del Admiistrador y Usuarios.</li> 
	<li>Cambiar el estado de los tipos de archivo de las subidas.</li></ul> 
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","Crear");
define("_AM_XHELP_MIME_CLEAR","Resetear");
define("_AM_XHELP_MIME_CANCEL","Cancelar");
define("_AM_XHELP_MIME_MODIFY","Modificar");
define("_AM_XHELP_MIME_DELETE","Borrar");
define("_AM_XHELP_MIME_FINDIT","Busca la Extensión!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","Borrar los tipos de archivo seleccionados?");
define("_AM_XHELP_MIME_MIMEDELETED","Tipo de archivo %s borrado");
define("_AM_XHELP_MIME_CREATED","Información de tipo de archivo creada");
define("_AM_XHELP_MIME_MODIFIED","Información de tipo de archivo modificada");

define("_AM_XHELP_MINDEX_ACTION","Acción");
define("_AM_XHELP_MINDEX_PAGE","<b>Página</b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","Editar");
define("_AM_XHELP_ICO_DELETE","Borrar");
define("_AM_XHELP_ICO_ONLINE","Online");
define("_AM_XHELP_ICO_OFFLINE","Offline");
define("_AM_XHELP_ICO_APPROVED","Aprovado");
define("_AM_XHELP_ICO_NOTAPPROVED","No Aprovado");

define("_AM_XHELP_ICO_LINK","Related Link");
define("_AM_XHELP_ICO_URL","Add Related URL");
define("_AM_XHELP_ICO_ADD","Añadir");
define("_AM_XHELP_ICO_APPROVE","Aprovar");
define("_AM_XHELP_ICO_STATS","Estadísticas");

define("_AM_XHELP_ICO_IGNORE","Ignorar");
define("_AM_XHELP_ICO_ACK","Conocimiento de Informe Roto");
define("_AM_XHELP_ICO_REPORT","Conoces algún Iforme Roto?");
define("_AM_XHELP_ICO_CONFIRM","Informe Roto Confirmado");
define("_AM_XHELP_ICO_CONBROKEN","Confirmar Informe Roto?");

define("_AM_XHELP_UPLOADFILE","Archivo adjuntado correctamente");
define('_AM_XHELP_TEXT_TICKET_INFO','Información de Incidencias');
define('_AM_XHELP_TEXT_OPEN_TICKETS','Incidencias Abiertas');
define('_AM_XHELP_TEXT_HOLD_TICKETS','Incidencias Pendientes');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','Incidencias Cerradas');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','Incidencias Totales');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','Nombre de Plantilla');
define('_AM_XHELP_TEXT_DESCRIPTION','Descripción');
define('_AM_XHELP_TEXT_PATH','Ruta');
define('_AM_XHELP_TEXT_GENERAL_TAGS','Tags Comunes');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - URL del sitio');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - nombre del sitio');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - email del administrador');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - nombre del módulo');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - link a la página del módulo');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','No modifiques otra tags que no sean estas!');

define('_AM_XHELP_CURRENTVER','Versión actual <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','Versión de la Base de Datos <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','Tu Base de Datos está actualizada. No requiere actualizaciones.');
define('_AM_XHELP_DB_NEEDUPDATE','Tu Base de Datos está obsoleta. Por favor, actualiza las tablas de tu Base de Datos!');
define('_AM_XHELP_UPDATE_NOW','Actualizar Ahora!');
define('_AM_XHELP_DB_NEEDINSTALL','Tu base de datos no es compatible con esta versión. Por favor, instala la misma versión que la base de datos');
define('_AM_XHELP_VERSION_ERR','No se puede determinar la versión.');
define('_AM_XHELP_MSG_MODIFYTABLE','Tabla modificada %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Error modificando la tabla %s');
define('_AM_XHELP_MSG_ADDTABLE','Tabla añadida %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Error añadiendo tabla %s');
define('_AM_XHELP_MSG_UPDATESTAFF','Actualizado Técnico #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Error actualizando Técnico #%s');
define('_AM_XHELP_UPDATE_DB','Actualizando Base de Datos');
define('_AM_XHELP_UPDATE_TO','Actualizando a la versión %s');
define('_AM_XHELP_UPDATE_OK','Actualización a la version %s correcta');
define('_AM_XHELP_UPDATE_ERR','Errors actualizando a la version %s');
define('_AM_XHELP_MSG_UPD_PERMS','Permisos de Técnico #%s añadidos al departamento %s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','La Tabla %s ha sido borrada.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','El Técnico #%s tiene permisos globales.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Error: la tabla %s NO ha sido borrada.');
define('_AM_XHELP_MSG_RENAME_TABLE','La Tabla %s ha sido renombrada: %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Error: la tabla %s no ha sido renombrada.');
define('_AM_XHELP_MSG_UPDATE_ROLE','Los permisos del Rol %s han sido actualizados.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','Error: Los permisos del Rol %s NO han sido actualizados.');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM','Seguro que quieres borrar el departamento #%u?');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM','Seguro que quieres quitar el técnico #%u?');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM','Seguro que quieres borrar el buzón de correo %s?');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','Error: situación \'%s\' no añadido.');
define('_AM_XHELP_MSG_ADD_STATUS','Situación \'%s\' añadido.');
define('_AM_XHELP_MSG_CHANGED_STATUS','La Incidencia se ha actualizado con la nueva situación.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','Error: La Incidencia no se ha actualizado con la nueva situación.');
define('_AM_XHELP_MSG_DELETE_RESOLVED','Seguro que quieres borrar todos los archivos adjuntos de las incidencias resueltas?');
define('_AM_XHELP_MSG_DELETE_FILE','Seguro que quieres borrar este archivo adjunto?');
define('_AM_XHELP_MSG_ADD_CONFIG_ERR','Error: el valor de configuración del departamento no se ha guardado');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','Error: el valor de configuración del departamento no se ha actualizado');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','Los registros de los técnicos están actualizados.');

define('_AM_XHELP_TEXT_CONTRIB_INFO','Informaciónd de Contribuciones');
define('_AM_XHELP_TEXT_DEVELOPERS','Desarrolladores');
define('_AM_XHELP_TEXT_TRANSLATORS','Traductores');
define('_AM_XHELP_TEXT_TESTERS','Testers');
define('_AM_XHELP_TEXT_DOCUMENTER','Documentadores');
define('_AM_XHELP_TEXT_CODE','Parches');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','Información del Dearrollo del Módulo');
define('_AM_XHELP_TEXT_DEMO_SITE','Demo Site');
define('_AM_XHELP_DEMO_SITE','3Dev Demo Site');
define('_AM_XHELP_TEXT_OFFICIAL_SITE','Página Oficial de Soporte');
define('_AM_XHELP_OFFICIAL_SITE','3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG','Conoces un bug?');
define('_AM_XHELP_REPORT_BUG','Envía un Bug');
define('_AM_XHELP_TEXT_NEW_FEATURE','Nueva funcionalidad?');
define('_AM_XHELP_NEW_FEATURE','Nueva funcionalidad');
define('_AM_XHELP_TEXT_QUESTIONS','Preguntas?');
define('_AM_XHELP_QUESTIONS','Pregunta a los dearrolladores del módulo');
define('_AM_XHELP_TEXT_RELEASE_DATE','Fecha de versión');
define('_AM_XHELP_TEXT_DISCLAIMER','Disclaimer');
define('_AM_XHELP_DISCLAIMER','ATENCIÓN: Este módulo es una BETA. Los desarrolladores no se harán cargo del mal funcionamiento del módulo.');
define('_AM_XHELP_TEXT_CHANGELOG','Cambios');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','Visibilidad de Departamento');

define('_AM_XHELP_PATH_CONFIG',"Configuración de Directorios");
define('_AM_XHELP_PATH_TICKETATTACH','Archivos adjuntos de Incidencias');
define('_AM_XHELP_PATH_EMAILTPL','Plantillas de Email');
define('_AM_XHELP_TEXT_CREATETHEDIR','Crear Carpeta');
define('_AM_XHELP_TEXT_SETPERM','Fijar Permisos');

define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight: bold; color: green;'>Disponible</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight: bold; color: red;'>No disponible</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight: bold; color: red;'>No accesible</span>");
define('_AM_XHELP_PATH_CREATED',"Carpeta creada");
define('_AM_XHELP_PATH_NOTCREATED',"No se puede crear la carpeta");
define('_AM_XHELP_MESSAGE_ACTIVATE','Barra Activa');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Barra Inactiva');
define('_AM_XHELP_TEXT_ACTIVE','Activo');
define('_AM_XHELP_TEXT_INACTIVE','In-Activo');
define('_AM_XHELP_TEXT_ACTIVITY','Actividad');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','Actualizar el Buzón de Correo del Departamento');

define('_AM_XHELP_TEXT_MANAGE_FIELDS','Administrar Campos');
define('_AM_XHELP_ADD_FIELD','Añadir Campo');
define('_AM_XHELP_EDIT_FIELD','Modificar Campo');
define('_AM_XHELP_TEXT_NAME_DESC','Nombre del Campo a mostrar');
define('_AM_XHELP_TEXT_FIELDNAME','Nombre del Campo');
define('_AM_XHELP_TEXT_FIELDNAME_DESC','Nombre en la Base de Datos y HTML. Usa alfanuméricos y "_" sólo.');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC','Información Adicional del Campo');
define('_AM_XHELP_TEXT_CONTROLTYPE','Tipo de Control');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC','Tipo de Control HTML usado');
define('_AM_XHELP_TEXT_DEPT_DESC','Mostrar este campo para cada Departamento');
define('_AM_XHELP_TEXT_REQUIRED','Requerido');
define('_AM_XHELP_TEXT_REQUIRED_DESC','Este campo será requerido durante la creación de la incidencia?');
define('_AM_XHELP_TEXT_DATATYPE','Tipo de Dato');
define('_AM_XHELP_TEXT_DATATYPE_DESC','Tipo de información guardada');
define('_AM_XHELP_TEXT_VALIDATION','Validación');
define('_AM_XHELP_TEXT_VALIDATION_DESC','Usa una expresión para validar los datosw introducidos por el usuario.');
define('_AM_XHELP_TEXT_WEIGHT','Ancho');
define('_AM_XHELP_TEXT_WEIGHT_DESC','Usado para ordenar los campos');
define('_AM_XHELP_TEXT_FIELDVALUES','Valores de la Lista');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','Ejemplo:<br />u=Unspecified<br />m=Male<br />f=Female<br /><br />Se usa para múltiplers valores. Lo anterior al  = es la clave, y el resto el valor.');
define('_AM_XHELP_TEXT_DEFAULTVALUE','Valor por Defecto');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC','El valor que tendrá el campo por defecto.<br />Para campos con más de un posible valor, usa las cláves del campo.');
define('_AM_XHELP_TEXT_LENGTH','Tamaño');
define('_AM_XHELP_TEXT_LENGTH_DESC','Tamaño del campo personalizado.');

define('_AM_XHELP_TEXT_REGEX_CUSTOM','Personalizado');
define('_AM_XHELP_TEXT_REGEX_USPHONE','Teléfono');
define('_AM_XHELP_TEXT_REGEX_USZIP','US Zip + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL','Dirección de e-mail');

define('_XHELP_CONTROL_DESC_TXTBOX','Caja de Texto');
define('_XHELP_CONTROL_DESC_TXTAREA','Texto Multi-linea');
define('_XHELP_CONTROL_DESC_SELECT','Caja de Selección');
define('_XHELP_CONTROL_DESC_MULTISELECT','Multi-Select');
define('_XHELP_CONTROL_DESC_YESNO','Si / No');
define('_XHELP_CONTROL_DESC_CHECKBOX','Checkbox');
define('_XHELP_CONTROL_DESC_RADIOBOX','Radiobox');
define('_XHELP_CONTROL_DESC_DATETIME','Fecha+Hora');
define('_XHELP_CONTROL_DESC_FILE','Archivo');

define('_XHELP_DATATYPE_TEXT','Text');
define('_XHELP_DATATYPE_NUMBER_INT','Número (INTEGER)');
define('_XHELP_DATATYPE_NUMBER_DEC','Número (Decimal)');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM','Seguro que quieres borrar el campo #%u?');
define('_AM_XHELP_VALID_ERR_CONTROLTYPE','Tipo de Control No Válido.');
define('_AM_XHELP_TEXT_SESSION_RESET','Limpiar Formulario');
define('_AM_XHELP_VALID_ERR_NAME','Nombre no fijado');
define('_AM_XHELP_VALID_ERR_FIELDNAME','Nombre de campo no fijado');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','El nombre del campo debe ser único');
define('_AM_XHELP_VALID_ERR_LENGTH','La longitud debe estar entre %u y %u');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','El valor por defecto debe estar en la lista');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','El valor "%s" es mayor que la longitud del campo, %u caracteres');
define('_AM_XHELP_VALID_ERR_VALUE','Debes introducir un valor para este campo');
define('_AM_XHELP_MSG_FIELD_ADD_OK','Campo añadido');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','Ha ocurrido un ERROR');
define('_AM_XHELP_MSG_FIELD_UPD_OK','Campo actualizado');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','Ha ocurrido un ERROR mientras se actualizaba el campo');
define('_AM_XHELP_MSG_SUBMISSION_ERR','El formulario tiene errores.  Por favor, corrígelos y envíalo de nuevo');
define('_AM_XHELP_MSG_NEED_UID','Error: primero debes eleccionar un usuario.');

define('_AM_XHELP_TEXT_DEFAULT_STATUS','Situación por Defecto');

define('_AM_XHELP_VALID_ERR_MIME_EXT','Extensión del archivo no fijada');
define('_AM_XHELP_VALID_ERR_MIME_NAME','Nombre/Tipo de la aplicación no fijada');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','Tipo de archivo no fijado');

define('_AM_XHELP_TEXT_NOTIF_NAME','Nombre de Notificación');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','Miembros suscritos');

define('_AM_XHELP_NOTIF_NEW_TICKET','Nueva Incidencia');
define('_AM_XHELP_NOTIF_DEL_TICKET','Borrar Incidencia');
define('_AM_XHELP_NOTIF_MOD_TICKET','Modificar Incidencia');
define('_AM_XHELP_NOTIF_NEW_RESPONSE','Nueva Respuesta');
define('_AM_XHELP_NOTIF_MOD_RESPONSE','Modificar Respuesta');
define('_AM_XHELP_NOTIF_MOD_STATUS','Cambiar Situación de Incidencia');
define('_AM_XHELP_NOTIF_MOD_PRIORITY','Cambiar Prioridad de Incidencia');
define('_AM_XHELP_NOTIF_MOD_OWNER','Cambiar Propiedad de Incidencia');
define('_AM_XHELP_NOTIF_CLOSE_TICKET','Incidencia Cerrada');
define('_AM_XHELP_NOTIF_MERGE_TICKET','Juntar Incidencias');

//Used for Manage Notifications page
define('_AM_XHELP_STAFF_SETTING1','Todos los Técnicos');
define('_AM_XHELP_STAFF_SETTING2','Técnicos de Departamento');
define('_AM_XHELP_STAFF_SETTING3','Propietario');
define('_AM_XHELP_STAFF_SETTING4','Notificaciones Off');
define('_AM_XHELP_USER_SETTING1','Notificaciones On');
define('_AM_XHELP_USER_SETTING2','Notificaciones Off');
define('_AM_XHELP_TEXT_SUBMITTER','Enviador');
define('_AM_XHELP_TEXT_NOTIF_STAFF','Notificación de los Técnicos');
define('_AM_XHELP_TEXT_NOTIF_USER','Notificación de los Usuarios');
define('_AM_XHELP_TEXT_ASSOC_TPL','Plantillas Asociadas');
define('_AM_XHELP_TEXT_AND','y');
define('_AM_XHELP_TEXT_STAFF','Técnicos');

define('_AM_XHELP_TEXT_PLUGIN_VERSION','Versión Plugin');
define('_AM_XHELP_TEXT_TESTED_VERSIONS','Versiones Testeadas ');
define('_AM_XHELP_TEXT_AUTHOR','Autor');

//Añadidos a partir de la 0.75
define('_AM_XHELP_TEXT_DEFAULT','Por Defecto');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT','Fijar como Departamento por defecto');
define('_AM_XHELP_TEXT_DEFAULT_DEPT','Departamento por defecto');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT','Departamento por defecto actualizado.');
define('_AM_XHELP_MSG_UPDATE_SEARCH','La búsqueda guardada #%u ha sido actualizada.');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR','Error: La búsqueda guardada #%u no ha sido actualizada.');

//Cambios tras la 0.77
define('_AM_XHELP_PATH_PERMSET','Se han asignado los permisos a la carpeta correctamente.');
define('_AM_XHELP_PATH_NOTPERMSET','No se ha podido asignar los permisos a la carpeta..');

?>