<?php
//$Id: modinfo.php,v 1.9 2005/11/30 16:45:39 eric_juden Exp $
define('_MI_XHELP_NAME','xhelp');
define('_MI_XHELP_DESC','Usado para guardar las peticiones de ayuda de los clientes');

//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','Plantilla para addTicket.php');
define('_MI_XHELP_TEMP_SEARCH','Plantilla para search.php');
define('_MI_XHELP_TEMP_STAFF_INDEX','Plantilla de Técnicos para index.php');
define('_MI_XHELP_TEMP_STAFF_PROFILE','Plantilla para profile.php');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','Plantilla de Técnicos para ticket.php');
define('_MI_XHELP_TEMP_USER_INDEX','Plantilla de Usuario para index.php');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','Plantilla de Usuario para ticket.php');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','Plantilla para response.php');
define('_MI_XHELP_TEMP_LOOKUP','Plantilla para lookup.php');
define('_MI_XHELP_TEMP_STAFFREVIEW','Plantilla para valorar un Técnico');
define('_MI_XHELP_TEMP_EDITTICKET','Plantilla para editar una incidencia');
define('_MI_XHELP_TEMP_EDITRESPONSE','Plantilla para editar una respuesta');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','Plantilla para los anuncios');
define('_MI_XHELP_TEMP_STAFF_HEADER','Plantilla para el Menú de los Técnicos');
define('_MI_XHELP_TEMP_USER_HEADER','Plantilla para el Menú de Opciones de los Usuarios');
define('_MI_XHELP_TEMP_PRINT','Plantilla para la Impresión de Incidencias');
define('_MI_XHELP_TEMP_STAFF_ALL','Plantilla para "Ver Todos" de los Técnicos');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','Plantilla para mostrar las Incidencias de los Técnicos');
define('_MI_XHELP_TEMP_SETDEPT','Plantilla para fijar el Dapartamento');
define('_MI_XHELP_TEMP_SETPRIORITY','Plantilla para fijar la prioridad');
define('_MI_XHELP_TEMP_SETOWNER','Plantilla para fijar el propietario');
define('_MI_XHELP_TEMP_SETSTATUS','Plantilla para fijar el estado');
define('_MI_XHELP_TEMP_DELETE','Plantilla para acciones encadenadas de borrar incidencias');
define('_MI_XHELP_TEMP_BATCHRESPONSE','Plantilla para acciones encadenadas de responder');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','Plantilla para las incidencias creadas por anónimos');
define('_MI_XHELP_TEMP_ERROR','Plantilla para la página de ERROR');


// Block variables
define('_MI_XHELP_BNAME1','Mis Incidencias Abiertas');
define('_MI_XHELP_BNAME1_DESC','Muestra la lista de las incidencias abiertas por el usuario');
define('_MI_XHELP_BNAME2','Incidencias de Departamento');
define('_MI_XHELP_BNAME2_DESC','Muestar el número de incidencias de cada departamento.');
define('_MI_XHELP_BNAME3','Incidencias recientemente vistas');
define('_MI_XHELP_BNAME3_DESC','MUestra las incidencias que el técnico ha visto recientemente.');
define('_MI_XHELP_BNAME4','Acciones de Incidencias');
define('_MI_XHELP_BNAME4_DESC','Muestar las acciones que pueden hacerse');
define('_MI_XHELP_BNAME5','Acciones Principales de Incidencias');
define('_MI_XHELP_BNAME5_DESC','Muestra las acciones principales del sistema');





// Submenu
define('_MI_XHELP_SMNAME1','Resumen');
define('_MI_XHELP_SMNAME2','Crear Incidencia');
define('_MI_XHELP_SMNAME3','Mi Perfil');
define('_MI_XHELP_SMNAME4','Ver Todos');
define('_MI_XHELP_SMNAME5','Buscar');
define('_MI_XHELP_SMNAME6','Ver Informes');

// Config variables
define('_MI_XHELP_TITLE','Nombre de Helpdesk');
define('_MI_XHELP_TITLE_DSC','Escribe tu nombre de HelpDesk:');
define('_MI_XHELP_UPLOAD','Directorio de Subidas');
define('_MI_XHELP_UPLOAD_DSC','Directorio donde se guardarán los archivos subidos en las incidencias');
define('_MI_XHELP_ALLOW_UPLOAD','Aceptar subidas');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','Permitir a los usuarios a subir ficheros?');
define('_MI_XHELP_UPLOAD_SIZE','Tamaño');
define('_MI_XHELP_UPLOAD_SIZE_DSC','Tamaño máximo de archivo (en bytes)');
define('_MI_XHELP_UPLOAD_WIDTH','Anchura');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','Anchura máxima de imágen (en pixeles)');
define('_MI_XHELP_UPLOAD_HEIGHT','Altura');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','Altura máxima de imágen (en pixeles)');
define('_MI_XHELP_ANNOUNCEMENTS','Anunciar nuevas incidencias');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','Permite añadir noticias al xhelp. Actualiza el módulo para ver las categorías añadidas');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"Actualizar el módulo. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Pincha aqui</a> para recibir nuevas categorías.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***Anuncios desactivados***');
define('_MI_XHELP_ALLOW_REOPEN','Permitir Re-abrir incidencias');
define('_MI_XHELP_ALLOW_REOPEN_DSC','Permitir Re-abrir las incidencias a los usuarios después de haber sido cerradas?');
define('_MI_XHELP_STAFF_TC','Número de incidencias a mostrar para los Técnicos');
define('_MI_XHELP_STAFF_TC_DSC','Cuántas incidencias se han de mostrar en el index de los técnicos?');
define('_MI_XHELP_STAFF_ACTIONS','Acciones del Técnico');
define('_MI_XHELP_STAFF_ACTIONS_DSC','Cómo quieres que sea la vista de acciones por defecto? "En línea" está por defecto, "En bloques" necesita que actives las acciones de técnicos en bloques.');
define('_MI_XHELP_ACTION1','En línea');
define('_MI_XHELP_ACTION2','En bloques');
define('_MI_XHELP_DEFAULT_DEPT','Departamento por defecto');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"Será el departamento por defecto cuando creas la incidencia. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>Pulsa aqui</a> para actualizar la lista.");
define('_MI_XHELP_OVERDUE_TIME','Tiempo de Incidencia');
define('_MI_XHELP_OVERDUE_TIME_DSC','Determina el tiempo (en horas) que tiene el técnico para resolver la incidencia.');
define('_MI_XHELP_ALLOW_ANON','Permitir a usuarios anónimos');
define('_MI_XHELP_ALLOW_ANON_DSC','Permite que usuarios anónimos creen incidencias. Serán enviados al registro posteriormente.');
define('_MI_XHELP_APPLY_VISIBILITY','Aplicar las directivas de visibilidad a los técnicos?');
define('_MI_XHELP_APPLY_VISIBILITY_DSC','Limita a los técnicos a ver únicamente los departamentos sobre los que tiene permisos según los criterios de XOOPS.');
define('_MI_XHELP_DISPLAY_NAME','Mostrar nombre de usuario o nombre real?');
define('_MI_XHELP_DISPLAY_NAME_DSC','Mostrar el nombre de usuario o el nombre real al crear incidencias.');
define('_MI_XHELP_USERNAME','Usuario');
define('_MI_XHELP_REALNAME','Nombre Real');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','Administrar Bloques');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','Administrar Departamentos');
define('_MI_XHELP_MENU_MANAGE_STAFF','Administrar Técnicos');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','Modificar plantillas de e-mail');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','Modificar campos de incidencias');
define('_MI_XHELP_MENU_GROUP_PERM','Permisos de Grupos');
define('_MI_XHELP_MENU_ADD_STAFF','Añadir Técnico');
define('_MI_XHELP_MENU_MIMETYPES','Administrar Tipos de Archivo');
define('_MI_XHELP_MENU_CHECK_TABLES','Comprobar Tablas');
define('_MI_XHELP_MENU_MANAGE_ROLES','Administrar Roles');
define('_MI_XHELP_MENU_MAIL_EVENTS','Eventos de Correo');
define('_MI_XHELP_MENU_CHECK_EMAIL','Comprobar Email');
define('_MI_XHELP_MENU_MANAGE_FILES','Administrar Archivos');
define('_MI_XHELP_ADMIN_ABOUT','Acerca');
define('_MI_XHELP_TEXT_MANAGE_STATUSES','Administrar Estados');
define('_MI_XHELP_TEXT_MANAGE_FIELDS','Administrar Campos');
define('_MI_XHELP_TEXT_NOTIFICATIONS','Administrar Notificaciones');
define('_MI_XHELP_TEXT_MANAGE_FAQ','Administrar FAQ');

//NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','Departamento');
define('_MI_XHELP_DEPT_NOTIFYDSC','Las opciones de notificación que se aplican a un cierto departamento');

define('_MI_XHELP_TICKET_NOTIFY','Incidencia');
define('_MI_XHELP_TICKET_NOTIFYDSC','Las opciones de notificación que se aplican a una incidencia');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','Técnico: Nueva Incidencia');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','Notificarme cuando una incidencia sea creada');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','Recibir notificación cuando una nueva incidencia sea creada');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','{X_MODULE} Incidencia creada - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','Técnico: Borrar Incidencia');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','Notificarme cuando una incidencia sea borrada');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','Recibir notificación cuando una incidencia sea borrada');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} Incidencia Borrada - id {TICKET_ID}');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','Técnico: Incidencia Modificada');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','Notificarme cuando una incidencia sea modificada');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','Recibir notificación cuando una incidencia sea modificada');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} Incidencia modificada - id {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','Técnico: Nueva Respuesta');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','Notificarme cuando una nueva respuesta sea creada');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','Recibir notificación cuando una nueva respuesta sea creada');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','{X_MODULE} Nueva respuesta en la incidencia - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','Técnico: Respuesta Modificada');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','Notificarme cuando una respuesta sea modificada');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','Recibir notificación cuando una respuesta sea editada');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} Respuesta modificada en la incidencia - id {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','Técnico: Situación de incidencia cambiada');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','Notificarme cuando el estado sea modificado');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','Recibir notificación cuando el estado cambie');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} El estado de la incidencia - id {TICKET_ID} ha cambiado');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','Técnico: Prioridad cambiada');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','Notificarme cuando la prioridad sea modificad');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','Recibir notificación cuando la prioridad cambie');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} La prioridad de la incicenica - id {TICKET_ID} ha cambiado');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','Técnico: Nuevo Propietario');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','Notificarme cuando se me asigne/desasigne una incidencia');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','Recibir notificación cuando cambie la propiedad de una incidencia');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','{X_MODULE} La propiedad de la incidencia - id {TICKET_ID} ha cambiado');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');

define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','Usuario: Incidencia Borrada');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','Notificarme cuando una incidencia sea borrada');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','Recibir notificación cuando una incidencia sea borrada');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} Incidencia Borrada - id {TICKET_ID}');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','Usuario: Incidencia Modificada');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','Notificarme cuando la incidencia sea modificada');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','Recibir notificación cuando la incidencia sea modificada');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} Incidencia modificada - id {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','Usuario: Nueva Respuesta');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','Notificarme cuando se publique una respuesta');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','Recibir notificación cuando una respuesta sea creada para la incidencia');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','Usuario: Respuesta Modificada');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','Notificarme cuando una repuesta sea modificada');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','Recibir notificación cuando una respuesta sea modificada para la incidencia');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} Respuesta de incidencia modificada - id {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','Usuario: Estado Cambiado');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','Notificarme cuando el estado cambie');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','Recibir notificación cuando cambie el estado de la incidencia');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} Estado de incidencia cambiado - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','Usuario: Prioridad Cambiada');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','Notificarme cuando la prioridad cambie');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','Recibir notificaciones cuando la prioridad de la incidencia cambie');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} Prioridad de la incidencia cambiada - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');

define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','Usuario: Nuevo Propietario');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','Notificarme cuando el propietario cambie');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','Recibir notificación cuando el propietario de la incidencia cambie');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','{X_MODULE} Propietario de la incidencia cambiado - id {TICKET_ID}');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','Usuario: Nueva Incidencia');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','Confirmar cuando la incidencia es creada');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','Recibir notificación cuando la incidencia es creada');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','Técnico: Incidencia Cerrada');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','Notificarme cuando la incidencia se cierre');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','Recibir notificación cuando la incidencia se cierre');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','{X_MODULE} Incidencia cerrada - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','Usuario: Incidencia Cerrada');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','Confirmarme cuando la incidencia se cierre');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','Recibir notificación cuando la incidencia se cierre');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','{X_MODULE} Incidencia cerrada - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','Usuario: Nuevo Usuario Creado');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','Notificar al usuario cuando una nueva cuenta se cree');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','Recibir notificación cuando un nuevo usuario sea creado via e-mail (Necesita Activación)');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','{X_MODULE} Nuevo Usuario Creado');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','Usuario: Nuevo Usuario Creado');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','Notificar al usuario cuando una nueva cuenta se cree');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','Recibir notificación cuando un nuevo usuario es creado por email (Auto Activación)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','{X_MODULE} Nuevo Usuario Creado');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','Usuario: Nuevo Usuario Creado');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','Notificar al usuario cuando una nueva cuenta se cree');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','Recibir notificación cuando un nuevo usuario es creado por email (Requiere Activación del Administrador)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','{X_MODULE} Nuevo Usuario Creado');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');

define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','Usuario: Email Error');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYCAP','Notificar al usuario cuando su email no se guarde');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYDSC','Recibir notificación cuando el email no se guarde');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYSBJ','RE: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYTPL','ticket_email_error.tpl');

define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','Técnico: Juntar Incidcencias');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYCAP','Notificarme cuando las incidencias se junten');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYDSC','Recibir notificación cuando las incidencias se junten');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} Incidencia juntadas');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYTPL','dept_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','Usuario: Juntar Incidcencias');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYCAP','Notificarme cuando las incidencias se junten');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYDSC','Recibir notificación cuando las incidencias se junten');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} Incidencia juntadas');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYTPL','ticket_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','Usuario: Nueva Incidencia por Email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYCAP','Confirmarme cuando una incidencia se cree por email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYDSC','Recibir información cuando una incidencia se cree por email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ','RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYTPL','ticket_newticket_byemail_notify.tpl');

// Be sure to add new mail_templates to array in admin/index.php - modifyEmlTpl()
//Posterior al 0.75
define('_MI_XHELP_TEMP_EDITSEARCH','Plantilla para editar una búsqueda guardada.');
define('_MI_XHELP_NUM_TICKET_UPLOADS','Máximo nº de archivos para adjuntar');
define('_MI_XHELP_NUM_TICKET_UPLOADS_DSC','El númeor máximo de archivos que se pueden adjuntar en una incidencia (no añade los campos).');
define('_MI_XHELP_TEMP_USER_ALL','Plantilla para la página "Ver Todos"');

?>