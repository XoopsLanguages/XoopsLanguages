<?php
//$Id: main.php,v 1.9 2005/11/30 16:45:39 eric_juden Exp $

define('_XHELP_CATEGORY1','Asignar Propietario');
define('_XHELP_CATEGORY2','Borrar Respuestas');
define('_XHELP_CATEGORY3','Borrar Incidencias');
define('_XHELP_CATEGORY4','Log Users\' Incidencias');
define('_XHELP_CATEGORY5','Modificar Respuestas');
define('_XHELP_CATEGORY6','Modificar al Información de la Incidencia');

define('_XHELP_SEC_TICKET_ADD', 0);
define('_XHELP_SEC_TICKET_EDIT', 1);
define('_XHELP_SEC_TICKET_DELETE', 2);
define('_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_XHELP_SEC_TICKET_STATUS', 4);
define('_XHELP_SEC_TICKET_PRIORITY', 5);
define('_XHELP_SEC_TICKET_LOGUSER', 6);
define('_XHELP_SEC_RESPONSE_ADD', 7);
define('_XHELP_SEC_RESPONSE_EDIT', 8);
define('_XHELP_SEC_TICKET_MERGE', 9);
define('_XHELP_SEC_FILE_DELETE', 10);

define('_XHELP_SEC_TEXT_TICKET_ADD','Añadir Incidencias');
define('_XHELP_SEC_TEXT_TICKET_EDIT','Modificar Incidencias');
define('_XHELP_SEC_TEXT_TICKET_DELETE','Borrar Incidencias');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Cambiar Propietario de la Incidencia');
define('_XHELP_SEC_TEXT_TICKET_STATUS','Cambiar Situación de la Incidencia');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','Cambiar la Prioridad de la Incidencia');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','Log Incidencia para Usuario');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','Añade Respuesta');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','Modifica Respuesta');
define('_XHELP_SEC_TEXT_TICKET_MERGE','Juntar Incidencias');
define('_XHELP_SEC_TEXT_FILE_DELETE','Borrar Archivos Adjuntos');

define('_XHELP_JSC_TEXT_DELETE','¿Seguro que quieres borrar la incidencia?');

define('_XHELP_MESSAGE_ADD_DEPT','Departamento añadido');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','Error: departamento no añadido');
define('_XHELP_MESSAGE_UPDATE_DEPT','Departamento actualizado');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','Error: departamento no actualizado');
define('_XHELP_MESSAGE_DEPT_DELETE','Departamento borrado');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','Error: departamento no borrado');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','Error: técnico no añadido');
define('_XHELP_MESSAGE_ADDSTAFF','técnico añadido');
define('_XHELP_MESSAGE_STAFF_DELETE','técnico borrado');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','Error: técnico no borrado');
define('_XHELP_MESSAGE_EDITSTAFF','Perfil del técnico actualizado');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','Error: técnico no actualizado');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','Error: viejos departamentos no borrados');
define('_XHELP_MESSAGE_DEPT_EXISTS','El Departamento ya existe');
define('_XHELP_MESSAGE_ADDTICKET','Incidencia creada');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','Error: incidencia no creada');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','Error: la acción no ha sido guardada en la base de datos');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','La Prioridad de la Incidencia actualizada');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','Error: La Prioridad de la Incidencia no ha sido actualizada');
define('_XHELP_MESSAGE_UPDATE_STATUS','Situación de la incidencia actualizado');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','Error: Situación de la incidencia no actualizado');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','Departamento de la incidencia actualizado');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','Error: Departamento de la incidencia no actualizado');
define('_XHELP_MESSAGE_CLAIM_OWNER','Has reclamado la propiedad de la incidencia');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','Error: la propiedad de la incidencia no ha sido reclamada');
define('_XHELP_MESSAGE_ASSIGN_OWNER','Se te ha asignado la propiedad de la incidencia');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','Error: No se te ha asignado la propiedad de la incidencia');
define('_XHELP_MESSAGE_UPDATE_OWNER','Has actualizado la propiedad de la incidencia.');
define('_XHELP_MESSAGE_ADDFILE','Archivo adjuntado correctamente');
define('_XHELP_MESSAGE_ADDFILE_ERROR','Error: no se ha adjuntado el archivo');
define('_XHELP_MESSAGE_ADDRESPONSE','Respuesta publicada correctamente');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','Error: la respuesta no se ha publicado');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','Error: casilla callsClosed no actualizada');
define('_XHELP_MESSAGE_ALREADY_OWNER','%s ya es el propietario de la incidencia');
define('_XHELP_MESSAGE_ALREADY_STATUS','La Incidencia ya está en esa situación');
define('_XHELP_MESSAGE_DELETE_TICKET','La Incidencia ha sido borrada');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','Error: La Incidencia no ha sido borrada');
define('_XHELP_MESSAGE_ADD_SIGNATURE','Firma añadida');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','Error: Firma no actualizada');
define('_XHELP_MESSAGE_RESPONSE_TPL','Respuesta Pre-definidas actualizadas');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','Error: respuesta no actualizada');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','Respuesta Pre-definidas borradas');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','Error: Respuesta Pre-definidas no borradas');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','Revisión añadida');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','Error: revisión no añadida');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','Error: información del técnico no ha sido actualizada');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','Error: firma no actualizada');
define('_XHELP_MESSAGE_UPDATE_SIG','Frima actualizada');
define('_XHELP_MESSAGE_EDITTICKET','Incidencia actualizada');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','Error: no se ha actualizado la incidencia');
define('_XHELP_MESSAGE_USER_MOREINFO','Incidencia actualizada.');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','Error: la información no ha sido añadida');
define('_XHELP_MESSAGE_USER_NO_INFO','Error: no has enviado ninguna información');
define('_XHELP_MESSAGE_EDITRESPONSE','Respuesta actualizada');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','Error: respuesta no actualizada');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','Notificaciones actualizadas');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','Las Notificaciones no han sido actualizadas');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','El usuario no tiene notificaciones');
define('_XHELP_MESSAGE_NO_DEPTS','Error: no existen departamentos. Contacte con el administrador.');
define('_XHELP_MESSAGE_NO_STAFF','Error: no hay técnicos. Contacte con el administrador.');
define('_XHELP_MESSAGE_TICKET_REOPEN','Incidencia re-abierta correctamente.');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','Error: incidencia no re-abierta.');
define('_XHELP_MESSAGE_TICKET_CLOSE','Incidencia cerrada correctamente.');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','Error: la incidencia no se ha cerrado.');
define('_XHELP_MESSAGE_NOT_USER','Error: no puedes hacer cambios en esta incidencia.');
define('_XHELP_MESSAGE_NO_TICKETS','Error: No has seleccionado ninguna Incidencia.');
define('_XHELP_MESSAGE_NOOWNER','Sin Propietario');
define('_XHELP_MESSAGE_UNKNOWN','Desconocido');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','Error: El tipo de archivos no está permitido.');
define('_XHELP_MESSAGE_NO_UID','Error: uid sin especificar');
define('_XHELP_MESSAGE_NO_PRIORITY','Error: prioridad sin especificar');
define('_XHELP_MESSAGE_FILE_ERROR','Error: No se puede guardar el archivo adjunto por estas razones:<br />%s');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','Error: email no actualizado');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','Seguro que desea borrar estas incidencias?');
define('_XHELP_MESSAGE_DELETE_TICKETS','Incidencias borradas correctamente');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','Error: las incidencias no se han borrado');
define('_XHELP_MESSAGE_VALIDATE_ERROR','La incidencia tiene errores; por favor corríjalos y envíela de nuevo.');
define('_XHELP_MESSAGE_UNAME_TAKEN',' está actualmente en uso.');
define('_XHELP_MESSAGE_INVALID',' es inválido.');
define('_XHELP_MESSAGE_REQUIRED',' es requerido.');
define('_XHELP_MESSAGE_LONG',' es demasiado largo.');
define('_XHELP_MESSAGE_SHORT',' es demasiado corto.');
define('_XHELP_MESSAGE_NOT_ENTERED',' no fue introducido.');
define('_XHELP_MESSAGE_NOT_NUMERIC',' es no numérico.');
define('_XHELP_MESSAGE_RESERVED',' está reservado.');
define('_XHELP_MESSAGE_NO_SPACES',' debería no tener espacios');
define('_XHELP_MESSAGE_NOT_SAME',' no es la misma.');
define('_XHELP_MESSAGE_NOT_SUPPLIED',' no está soportado.');
define('_XHELP_MESSAGE_CREATE_USER_ERROR','Usuario no creado');
define('_XHELP_MESSAGE_NO_REGISTER','Por favor, regístrese para crear una incidencia.');
define('_XHELP_MESSAGE_NEW_USER_ERR','Error: tu cuenta no está creada.');
define('_XHELP_MESSAGE_EMAIL_USED','Error: el email ya está registrado.');
define('_XHELP_MESSAGE_DELETE_FILE_ERR','Error: el archivo no se ha borrado.');
define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','Error: la búsqueda no se ha borrado.');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','Error: subir ficheros estñá desactivado.');
define('_XHELP_MESSAGE_UPLOAD_ERR','Archivo %s desde %s no ha sido guardado porque %s.');

define('_XHELP_MESSAGE_NO_ADD_TICKET','No tienes permiso para crear incidencias.');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','No tienes permiso para borrar incidencias.');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','No tienes permiso para editar incidencias.');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','No tienes permiso para cambiar la propiedad.');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','No tienes permiso para cambiar la prioridad.');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','No tienes permiso para cambiar la situación.');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','YNo tienes permiso para publicar respuestas.');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','No tienes permiso para editar respuestas.');
define('_XHELP_MESSAGE_NO_MERGE','No tienes permiso para juntar incidencias.');
define('_XHELP_MESSAGE_NO_TICKET2','Error: no has especificado la incidencia para copiar.');
define('_XHELP_MESSAGE_ADDED_EMAIL','Email añadido.');
define('_XHELP_MESSAGE_ADDED_EMAIL_ERROR','Error: email no añadido.');
define('_XHELP_MESSAGE_NO_EMAIL','Error: no has especiicado un email para añadir.');
define('_XHELP_MESSAGE_ADD_EMAIL','La notificación por email actualizada.');
define('_XHELP_MESSAGE_ADD_EMAIL_ERROR','Error: La notificación por email no ha sido actualizada.');
define('_XHELP_MESSAGE_NO_MERGE_TICKET','No tienes permiso para borrar el email.');
define('_XHELP_MESSAGE_NO_FILE_DELETE','No tienes permiso para borrar archivos.');
define('_XHELP_MESSAGE_NO_CUSTFLD_ADDED','Error: valores no guardados.');

define('_XHELP_ERROR_INV_TICKET','Error: Incidencia incorrecta.  Por favor, revise la incidencia y pruebe de nuevo!');
define('_XHELP_ERROR_INV_RESPONSE','Error: IRespuesta no válida. Por favor, revise la respuesta y pruebe de nuevo!');
define('_XHELP_ERROR_NODEPTPERM','No puedes publicar una respuesta en esta incidencia. Reason: No eres parte de los técnicos en este departamento.');
define('_XHELP_ERROR_INV_STAFF','Error: El usuario no es parte de los Técnicos.');
define('_XHELP_ERROR_INV_TEMPLATE','Error: REellene en ambos casis el nombre de plantilla y el texto antes de enviarlo');
define('_XHELP_ERROR_INV_USER','Error: no tienes permiso para ver esta incidencia.');

define('_XHELP_TITLE_ADDTICKET','Crear Incidencia');
define('_XHELP_TITLE_ADDRESPONSE','Añadir Respuesta');
define('_XHELP_TITLE_EDITTICKET','Editar Info de la Incidencia');
define('_XHELP_TITLE_EDITRESPONSE','Editar Respuesta');
define('_XHELP_TITLE_SEARCH','Buscar');

define('_XHELP_TEXT_SIZE','Tamaño:');
define('_XHELP_TEXT_REALNAME','Nombre Real');
define('_XHELP_TEXT_ID','ID:');
define('_XHELP_TEXT_NAME','Nombre de Usuario:');
define('_XHELP_TEXT_USER','Usuario:');
define('_XHELP_TEXT_USERID','ID de Usuario:');
define('_XHELP_TEXT_LOOKUP','Lookup');
define('_XHELP_TEXT_LOOKUP_USER','Escribir como usuario');
define('_XHELP_TEXT_EMAIL','Email:');
define('_XHELP_TEXT_ASSIGNTO','Departamento:');
define('_XHELP_TEXT_PRIORITY','Prioridad:');
define('_XHELP_TEXT_STATUS','Situación:');
define('_XHELP_TEXT_SUBJECT','Asunto:');
define('_XHELP_TEXT_DEPARTMENT','Departamento:');
define('_XHELP_TEXT_OWNER','Propietario:');
define('_XHELP_TEXT_CLOSEDBY','Cerrado por:');
define('_XHELP_TEXT_NOTAPPLY','N/A');
define('_XHELP_TEXT_TIMESPENT','Tiempo Usado:');
define('_XHELP_TEXT_DESCRIPTION','Descripción:');
define('_XHELP_TEXT_ADDFILE','Añadir Archivo:');
define('_XHELP_TEXT_FILE','Archivo:');
define('_XHELP_TEXT_RESPONSE','Respuesta');
define('_XHELP_TEXT_RESPONSES','Respuestas');
define('_XHELP_TEXT_CLAIMOWNER','Reclamar Propiedad:');
define('_XHELP_TEXT_CLAIM_OWNER','Reclamar Propiedad');
define('_XHELP_TEXT_TICKETDETAILS','Detalles de Incidencia #%u');
define('_XHELP_TEXT_MINUTES',' minutos');
define('_XHELP_TEXT_SEARCH','Buscar:');
define('_XHELP_TEXT_SEARCHBY','Por:');
define('_XHELP_SEARCH_DESC','Descripción');
define('_XHELP_SEARCH_SUBJECT','Asunto');
define('_XHELP_TEXT_NUMRESULTS','Nº de resultados por página:');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','Resultados de la Búsqueda');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','Respuestas Pre-Definidas:');
define('_XHELP_TEXT_PREDEFINED0','-- Crear Respuesta --');
define('_XHELP_TEXT_NO_USERS','Usuarios no encontrados');
define('_XHELP_TEXT_SEARCH_AGAIN','Buscar otra vez');
define('_XHELP_TEXT_LOGGED_BY','Escrito por:');
define('_XHELP_TEXT_LOG_TIME','Fecha:');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','Detalles del Propietario');
define('_XHELP_TEXT_ACTIVITY_LOG','Registro de Acciones');
define('_XHELP_TEXT_HELPDESK_TICKET','Asistencia Técnica de Incidencias:');
define('_XHELP_TEXT_YES','Si');
define('_XHELP_TEXT_NO','No');
define('_XHELP_TEXT_ALL_TICKETS','Todas las Incidencias');
define('_XHELP_TEXT_HIGH_PRIORITY','Nuevas Incidencias sin Propietario');
define('_XHELP_TEXT_NEW_TICKETS','Incidencias Nuevas');
define('_XHELP_TEXT_MY_TICKETS','Incidencias abiertas asignados a mi');
define('_XHELP_TEXT_SUBMITTED_TICKETS','Incidencias eviadas por mi');
define('_XHELP_TEXT_ANNOUNCEMENTS','Anuncios');
define('_XHELP_TEXT_MY_PERFORMANCE','Mi Perfil');
define('_XHELP_TEXT_RESPONSE_TIME','Tiempo medio de respuesta:');
define('_XHELP_TEXT_RATING','Valoración:');
define('_XHELP_TEXT_NUMREVIEWS','Nº de Revisiones:');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','Nº de Incidencias Cerradas:');
define('_XHELP_TEXT_TEMPLATE_NAME','Nombre de Plantilla:');
define('_XHELP_TEXT_MESSAGE','Mensaje:');
define('_XHELP_TEXT_ACTIONS','Acciones:');
define('_XHELP_TEXT_ACTIONS2','Acciones');
define('_XHELP_TEXT_MY_NOTIFICATIONS','Mis Notificaciones');
define('_XHELP_TEXT_SELECT_ALL','Seleccionar todas');
define('_XHELP_TEXT_USER_IP','IP:');
define('_XHELP_TEXT_OWNERSHIP','Propietario');
define('_XHELP_TEXT_ASSIGN_OWNER','Asignar Propietario');
define('_XHELP_TEXT_TICKET','Incidencia');
define('_XHELP_TEXT_USER_RATING','Valoración de usuario:');
define('_XHELP_TEXT_EDIT_RESPONSE','Editar Respuesta');
define('_XHELP_TEXT_FILE_ADDED','Archivo Añadido:');
define('_XHELP_TEXT_ACTION','Acciones:');
define('_XHELP_TEXT_LAST_TICKETS','Últimas incidencias publicadas por:');
define('_XHELP_TEXT_RATE_STAFF','Valorar respuesta');
define('_XHELP_TEXT_COMMENTS','Comentarios:');
define('_XHELP_TEXT_MY_OPEN_TICKETS','Mis Incidencias Abiertas');
define('_XHELP_TEXT_RATE_RESPONSE','Valorar Respuesta?');
define('_XHELP_TEXT_RESPONSE_RATING','Valoración de la Respuesta:');
define('_XHELP_TEXT_REOPEN_TICKET','Re-abrir el Incidencia?');
define('_XHELP_TEXT_MORE_INFO','Nueva Respuesta');
define('_XHELP_TEXT_REOPEN_REASON','Razón para re-abrir la incidencia (opcional)');
define('_XHELP_TEXT_MORE_INFO2','Escribe aqui para publicar una nueva respuesta');
define('_XHELP_TEXT_NO_DEPT','Sin Departamento');
define('_XHELP_TEXT_NOT_EMAIL','Email Address:');
define('_XHELP_TEXT_LAST_REVIEWS','Últimas revisiones del técnico:');
define('_XHELP_TEXT_SORT_TICKETS','Ordena las incidencias por esta columna');
define('_XHELP_TEXT_ELAPSED','Hace:');
define('_XHELP_TEXT_FILTERTICKETS','Filtro de Incidencias:');
define('_XHELP_TEXT_LIMIT','Registros por página');
define('_XHELP_TEXT_SUBMITTEDBY','Enviado por:');
define('_XHELP_TEXT_NO_INCLUDE','Cualquiera');
define('_XHELP_TEXT_PRIVATE_RESPONSE','Respuesta Privada:');
define('_XHELP_TEXT_PRIVATE','Privado');
define('_XHELP_TEXT_CLOSE_TICKET','Cerrar Incidencia?');
define('_XHELP_TEXT_ADD_SIGNATURE','Añadir firma a las respuestas?');
define('_XHELP_TEXT_LASTUPDATE','Última respuesta:');
define('_XHELP_TEXT_BATCH_ACTIONS','Acciones en cadena:');
define('_XHELP_TEXT_BATCH_DEPARTMENT','Cambiar de Departamento');
define('_XHELP_TEXT_BATCH_PRIORITY','Cambiar Prioridad');
define('_XHELP_TEXT_BATCH_STATUS','Cambiar Situación');
define('_XHELP_TEXT_BATCH_DELETE','Borrar Incidencias');
define('_XHELP_TEXT_BATCH_RESPONSE','Responder');
define('_XHELP_TEXT_BATCH_OWNERSHIP','Reclamar/Asignar Propietario');
define('_XHELP_TEXT_UPDATE_COMP','Actualización Completa!');
define('_XHELP_TEXT_TOPICS_ADDED','Tópico añadido');
define('_XHELP_TEXT_DEPTS_ADDED','Departamento añadido');
define('_XHELP_TEXT_CLOSE_WINDOW','Cerrar Ventana');
define('_XHELP_TEXT_USER_LOOKUP','Publicar como otro usuario');
define('_XHELP_TEXT_EVENT','Eventos');
define('_XHELP_TEXT_AVAIL_FILETYPES','Tipos de Archivo permitidos');
define('_XHELP_USER_REGISTER','Registro de Usuario');

define('_XHELP_TEXT_SETDEPT','Elije aplicación:');
define('_XHELP_TEXT_SETPRIORITY','Elije la prioridad de la Incidencia:');
define('_XHELP_TEXT_SETOWNER','Elije Propietario:');
define('_XHELP_TEXT_SETSTATUS','Fija la situación de la Incidencia:');
define('_XHELP_TEXT_MERGE_TICKET','Juntar Incidencias');
define('_XHELP_TEXT_MERGE_TITLE','Introduce el ID de la incidencia con la que la quieres juntar.');
define('_XHELP_TEXT_EMAIL_NOTIFICATION','Notificación por E-mail:');
define('_XHELP_TEXT_EMAIL_NOTIFICATION_TITLE','Añadir nueva dirección de e-mail para recibir avisos.');
define('_XHELP_TEXT_RECEIVE_NOTIFICATIONS','recibir Notificaciones:');
define('_XHELP_TEXT_EMAIL_SUPPRESS','Emails cancelados. Click para mandar las notificaciones al email.');
define('_XHELP_TEXT_EMAIL_NOT_SUPPRESS','Emails están siendo enviados. Click para cancelar.');
define('_XHELP_TEXT_TICKET_NOTIFICATIONS','Notificaciones de Incidencias');
define('_XHELP_TEXT_STATE','Estado:');
define('_XHELP_TEXT_BY_STATUS','Por Situación:');
define('_XHELP_TEXT_BY_STATE','Por Estado:');
define('_XHELP_TEXT_SEARCH_OR','-- O --');
define('_XHELP_TEXT_VIEW1','Vista Básica');
define('_XHELP_TEXT_VIEW2','Vista Avanzada');
define('_XHELP_TEXT_SAVE_SEARCH','Guardar Búsqueda?');
define('_XHELP_TEXT_SEARCH_NAME','Nombre de la Búsqueda:');
define('_XHELP_TEXT_SAVED_SEARCHES','Búsquedas previas guardadas');
define('_XHELP_TEXT_SWITCH_TO','Pulsar para ');
define('_XHELP_TEXT_ADDITIONAL_INFO','Información Adicional');

define('_XHELP_ROLE_NAME1','Mánager de Incidencia');
define('_XHELP_ROLE_NAME2','Soporte');
define('_XHELP_ROLE_NAME3','Visor');
define('_XHELP_ROLE_DSC1','Puede hacerlo todo');
define('_XHELP_ROLE_DSC2','Crea incidencias y respuestas, cambia estado y prioridad, y crea incidencias como un usuario');
define('_XHELP_ROLE_DSC3','No puede cambiar nada');
define('_XHELP_ROLE_VAL1', 511);
define('_XHELP_ROLE_VAL2', 241);
define('_XHELP_ROLE_VAL3', 0);



// Ticket.php - Actions
define('_XHELP_TEXT_SELECTED','Con la Selección:');
define('_XHELP_TEXT_ADD_RESPONSE','Añadir Respuesta');
define('_XHELP_TEXT_EDIT_TICKET','Editar Incidencia');
define('_XHELP_TEXT_DELETE_TICKET','Borrar Incidencia');
define('_XHELP_TEXT_PRINT_TICKET','Imprimir Incidencia');
define('_XHELP_TEXT_UPDATE_PRIORITY','Cambiar Prioridad');
define('_XHELP_TEXT_UPDATE_STATUS','Cambiar Situación');

define('_XHELP_PIC_ALT_USER_AVATAR','Avatar de Usuario');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','Sin Auto Actualizar');
define('_XHELP_TEXT_AUTO_REFRESH1','Auto Actualizar cada 1 minutos');
define('_XHELP_TEXT_AUTO_REFRESH2','Auto Actualizar cada 5 minutos');
define('_XHELP_TEXT_AUTO_REFRESH3','Auto Actualizar cada 10 minutos');
define('_XHELP_TEXT_AUTO_REFRESH4','Auto Actualizar cada 30 minutos');
define('_XHELP_AUTO_REFRESH0', 0);          // Change these to
define('_XHELP_AUTO_REFRESH1', 60);         // adjust the values
define('_XHELP_AUTO_REFRESH2', 300);        // in the select box
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

define('_XHELP_MENU_MAIN','Resumen');
define('_XHELP_MENU_LOG_TICKET','Crear Incidencia');
define('_XHELP_MENU_MY_PROFILE','Mi Perfil');
define('_XHELP_MENU_ALL_TICKETS','Ver Todos');
define('_XHELP_MENU_SEARCH','Buscar');

define('_XHELP_SEARCH_EMAIL','Email');
define('_XHELP_SEARCH_USERNAME','Usuario');
define('_XHELP_SEARCH_UID','ID de Usuario');

define('_XHELP_BUTTON_ADDRESPONSE','Añadir Respuesta');
define('_XHELP_BUTTON_ADDTICKET','Crear Incidencia');
define('_XHELP_BUTTON_EDITTICKET','Editar Incidencia');
define('_XHELP_BUTTON_RESET','Limpiar');
define('_XHELP_BUTTON_EDITRESPONSE','Actualizar Respuesta');
define('_XHELP_BUTTON_SEARCH','Buscar');
define('_XHELP_BUTTON_LOG_USER','Seleccionar');
define('_XHELP_BUTTON_FIND_USER','Encontrar Usuario');
define('_XHELP_BUTTON_SUBMIT','Enviar');
define('_XHELP_BUTTON_DELETE','Borrar');
define('_XHELP_BUTTON_UPDATE','Actualizar');
define('_XHELP_BUTTON_UPDATE_PRIORITY','Actualizar Prioridad');
define('_XHELP_BUTTON_UPDATE_STATUS','Actualizar Situación');
define('_XHELP_BUTTON_ADD_INFO','Añadir Información');
define('_XHELP_BUTTON_SET','Fijar');
define('_XHELP_BUTTON_ADD_EMAIL','Añadir Email');
define('_XHELP_BUTTON_RUN','Ejecutar');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_TEXT_PRIORITY1','Alta');
define('_XHELP_TEXT_PRIORITY2','Medo-Alta');
define('_XHELP_TEXT_PRIORITY3','Medio');
define('_XHELP_TEXT_PRIORITY4','Medio-Baja');
define('_XHELP_TEXT_PRIORITY5','Baja');

define('_XHELP_STATUS0','Abierto');
define('_XHELP_STATUS1','Pendiente');
define('_XHELP_STATUS2','Cerrado');

define('_XHELP_STATE1','Activo');
define('_XHELP_STATE2','Cerrado');
define('_XHELP_NUM_STATE1', 1);
define('_XHELP_NUM_STATE2', 2);

define('_XHELP_RATING0','Sin Valoración');
define('_XHELP_RATING1','Malo');
define('_XHELP_RATING2','Debajo de la media');
define('_XHELP_RATING3','Medio');
define('_XHELP_RATING4','Por encima de la media');
define('_XHELP_RATING5','Excelente');

// Log Messages
define('_XHELP_LOG_ADDTICKET','Incidencia creada');
define('_XHELP_LOG_ADDTICKET_FORUSER','Incidencia creada por %s por %s');
define('_XHELP_LOG_EDITTICKET','Información editada');
define('_XHELP_LOG_UPDATE_PRIORITY','Prioridad actualizada de pri:%u a pri:%u');
define('_XHELP_LOG_UPDATE_STATUS','Situación actualizada de %s a %s');
define('_XHELP_LOG_CLAIM_OWNERSHIP','Reclamada la propiedad');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','Asignada la propiedad a %s');
define('_XHELP_LOG_ADDRESPONSE','Respuesta añadida');
define('_XHELP_LOG_USER_MOREINFO','Añadida más información');
define('_XHELP_LOG_EDIT_RESPONSE','Respuesta # %s editada');
define('_XHELP_LOG_REOPEN_TICKET','Incidencia re-abierta');
define('_XHELP_LOG_CLOSE_TICKET','Incidencia cerrada');
define('_XHELP_LOG_ADDRATING','Valorada la respuesta %u');
define('_XHELP_LOG_SETDEPT','Asignado a la aplicación %s');
define('_XHELP_LOG_MERGETICKETS','Incidencia juntada de %s a %s');
define('_XHELP_LOG_DELETEFILE','Archivo %s borrado');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','No se han encontrado Incidencias');
define('_XHELP_NO_RESPONSES_ERROR','No se han encontrado Respuestas');
define('_XHELP_NO_MAILBOX_ERROR','Buzón de mail no válido');
define('_XHELP_NO_FILES_ERROR','No se han encontrado Archivos');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','Comentarios?');
define("_XHELP_ANNOUNCE_READMORE","Leer más...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 comentario");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s comentarios");
define("_XHELP_TICKET_MD5SIGNATURE","Clave de Soporte:");


define('_XHELP_NO_OWNER','Sin propietario');
define('_XHELP_RESPONSE_EDIT','Respuesta modificada por %s en %s');

define('_XHELP_TIME_SECS','segundos');
define('_XHELP_TIME_MINS','minutos');
define('_XHELP_TIME_HOURS','horas');
define('_XHELP_TIME_DAYS','dias');
define('_XHELP_TIME_WEEKS','semanas');
define('_XHELP_TIME_YEARS','años');

define('_XHELP_TIME_SEC','segundo');
define('_XHELP_TIME_MIN','minuto');
define('_XHELP_TIME_HOUR','hora');
define('_XHELP_TIME_DAY','dia');
define('_XHELP_TIME_WEEK','semana');
define('_XHELP_TIME_YEAR','año');

define('_XHELP_MAILEVENT_CLASS0', 0);     // Connection message
define('_XHELP_MAILEVENT_CLASS1', 1);     // Parse message
define('_XHELP_MAILEVENT_CLASS2', 2);     // Storage message
define('_XHELP_MAILEVENT_CLASS3', 3);     // General message

define('_XHELP_MAILEVENT_DESC0','No se ha podido conectar al servidor.');
define('_XHELP_MAILEVENT_DESC1','No se ha podido enviar el correo.');
define('_XHELP_MAILEVENT_DESC2','No se ha podido guardar el correo.');
define('_XHELP_MAILEVENT_DESC3','');
define('_XHELP_MBOX_ERR_LOGIN','La conexión ha fallado: login/password incorrectos');
define('_XHELP_MBOX_INV_BOXTYPE','El tipo del buzón de correo no está soportado');

define('_XHELP_MAIL_CLASS0','Conexión');
define('_XHELP_MAIL_CLASS1','Enviando');
define('_XHELP_MAIL_CLASS2','Guardando');
define('_XHELP_MAIL_CLASS3','General');

define('_XHELP_GROUP_PERM_DEPT','xhelp_dept');
define('_XHELP_MISMATCH_EMAIL','%s ha sido notificado que su mensaje no ha sido almacenado. La clave de soporte coincide, pero e mensaje debería haber sido enviado desde %s.');
define('_XHELP_MESSAGE_MERGE','Se ha juntado correctamente.');
define('_XHELP_MESSAGE_MERGE_ERROR','Error: no se ha juntado conrrectamente.');
define('_XHELP_RESPONSE_NO_TICKET','No se ha encontrado ninguna incidencia para esta respuesta');
define('_XHELP_MESSAGE_NO_ANON','Mensaje desde %s bloqueado, los usuarios anónimos no pueden publicar incidencias');
define('_XHELP_MESSAGE_EMAIL_DEPT_MBOX','Mensasaje desde %s bloqueado, el emisor es un correo del departamento');

define('_XHELP_SIZE_BYTES','Bytes');
define('_XHELP_SIZE_KB','KB');
define('_XHELP_SIZE_MB','MB');
define('_XHELP_SIZE_GB','GB');
define('_XHELP_SIZE_TB','TB');

define('_XHELP_TEXT_USER_NOT_ACTIVATED','El usuario no ha acabado el proceso de activación.');
define('_XHELP_DEFAULT_PRIORITY', 4);

define('_XHELP_TEXT_ADMIN_DISABLED','<em>[Desactivado por el Administrador]</em>');

define('_XHELP_TEXT_CURRENT_NOTIFICATION','Método Actual de Notification');
define('_XHELP_NOTIFY_METHOD1','Mensaje Privado');
define('_XHELP_NOTIFY_METHOD2','Email');

//Añadidos tras la 0.75

define('_XHELP_TEXT_TICKET_LISTS','Lista de Incidencias');
define('_XHELP_TEXT_LIST_NAME','Nombre de Lista');
define('_XHELP_TEXT_CREATE_NEW_LIST','Crear Nueva Lista');
define('_XHELP_TEXT_NO_RECORDS','No se han encontrado coincidencias');
define('_XHELP_TEXT_EDIT','Editar');
define('_XHELP_TEXT_DELETE','Borrar');
define('_XHELP_TEXT_CREATE_SAVED_SEARCH','Creada la Búsqueda Guardada');
define('_XHELP_MSG_ADD_TICKETLIST_ERR','Error: la lista de incidencia no ha sido creada.');
define('_XHELP_MSG_DEL_TICKETLIST_ERR','Error: la lista de incidencia no ha sido borrada.');
define('_XHELP_MSG_NO_ID','Error: no has especificado el ID.');
define('_XHELP_TEXT_VIEW_MORE_TICKETS','Ver más Incidencias');
define('_XHELP_MSG_NO_EDIT_SEARCH','Error: no tienes permiso para modificar la búsqueda.');
define('_XHELP_MSG_NO_DEL_SEARCH','Error: no tienes permiso para borrar la búsqueda.');
define('_XHELP_TEXT_ADD_FAQ','Añadir FAQ');
define('_XHELP_TEXT_FAQ','FAQ');
define('_XHELP_MESSAGE_NO_FAQ','Error: No hay Faq / configurar la aplicación de las FAQ');

//Cambios tras la 0.77
define('_XHELP_TEXT_REPORTS','Informes');
define('_XHELP_TEXT_VIEW_REPORT','Ver Informe');
define('_XHELP_TEXT_REPORT_NAME','Nombre del informe');
define('_XHELP_TEXT_ADD_STAFF','Añadir Técnico');
define('_XHELP_TEXT_TOTAL','Total');
define('_XHELP_TEXT_NO_JPGRAPH','Error: JPGraph no está instalado. Por favor, revisa el readme.txt de xHelp.')
?>