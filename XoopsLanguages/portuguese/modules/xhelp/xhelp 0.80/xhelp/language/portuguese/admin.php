<?php
//traduzido por Silviotech - www.santoxoops.com.br / www.xoops.pr.gov.br
//adaptado para portugues de portugal por _Vlad_

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','Menu de Administração do Xhelp');
define('_AM_XHELP_BLOCK_TEXT','Administrar Blocos');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','Administrar Departamentos');
define('_AM_XHELP_MENU_MANAGE_STAFF','Administrar Técnicos');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','Templates dos Email´s');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','Modificar Campos do Ticket');
define('_AM_XHELP_MENU_GROUP_PERM','Permissões');
define('_AM_XHELP_MENU_MIMETYPES','Extensões Permitidas');
define('_AM_XHELP_MENU_PREFERENCES','Preferências');
define('_AM_XHELP_MENU_ADD_STAFF','Adicionar Técnico');
define('_AM_XHELP_UPDATE_MODULE','Atualizar Modulo');
define('_AM_XHELP_MENU_MANAGE_ROLES','Administrar Funções');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','Adicionar Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','Modificar Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','Apagar Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Mudar Responsabilidade do Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','Mudar Status do Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','Mudar Prioridade do Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','Log Ticket para utilizador');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','Adicionar Resposta');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','Modificar Resposta');

//Permissions
define('_AM_XHELP_GROUP_PERM','Permissões de Grupo');
define('_AM_XHELP_GROUP_PERM_TITLE','Alterar permissões dos Grupos');
define('_AM_XHELP_GROUP_PERM_NAME','Permissões');
define('_AM_XHELP_GROUP_PERM_DESC','Selecione as permissões para os grupos');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','Erro: Técnico não foi atualizado');
define('_AM_XHELP_MESSAGE_FILE_READONLY','Este arquivo é somente de leitura. Por favor actualize a permissões de escrita na pasta:  modules/xhelp/language/seuidioma/mail_templates');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','Arquivo actualizado!');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','Erro: arquivo não foi actualizado!');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','Função inserida com sucesso.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Erro: função não foi criada.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Função foi apagada com sucesso.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Erro: função não foi apagada.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Função actualizada com sucesso.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Erro: função não foi actualizada.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','permissões de Departamento actualizadas com sucesso.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Erro: não foram actualizadas as permissões de departamento');
define('_AM_XHELP_MESSAGE_DEF_ROLES','foram adicionadas as funções padrões de permissão  com sucesso.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','Erro: não foram adicionadas as funções padrões de permissão.');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','Apagar');
define('_AM_XHELP_BUTTON_EDIT','Editar');
define('_AM_XHELP_BUTTON_SUBMIT','Enviar');
define('_AM_XHELP_BUTTON_RESET','Limpar');
define('_AM_XHELP_BUTTON_ADDSTAFF','Adicionar Técnico');
define('_AM_XHELP_BUTTON_UPDATESTAFF','Atualizar Técnico');
define('_AM_XHELP_BUTTON_CANCEL','Cancelar');
define('_AM_XHELP_BUTTON_UPDATE','Atualizar');
define('_AM_XHELP_BUTTON_CREATE_ROLE','Criar nova Função');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','Apagar Permissões');
define('_AM_XHELP_BUTTON_ADD_DEPT','Adicionar Departamento');

define('_AM_XHELP_EDIT_DEPARTMENT','Editar Departamento');
define('_AM_XHELP_EXISTING_DEPARTMENTS','Departamentos atuais:');
define('_AM_XHELP_MANAGE_DEPARTMENTS','Administração de Departamentos');
define('_AM_XHELP_MANAGE_STAFF','Administração de Técnicos');
define('_AM_XHELP_EXISTING_STAFF','Técnicos atuais:');
define('_AM_XHELP_ADD_STAFF','Adicionar Técnicos');
define('_AM_XHELP_EDIT_STAFF','Editar Técnico');
define('_AM_XHELP_INDEX','Visão Geral');
define('_AM_XHELP_ADMIN_GOTOMODULE','Ir para o módulo');
define('_AM_XHELP_DEPARTMENT_SERVERS','Caixa postal de departamento');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Endereço de Email');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Tipo de caixa postal');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Prioridade padrão do Ticket');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Servidor');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Porta');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Ações');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Adicionar Caixa postal para monitorar');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Utilizador');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Senha');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','Resposta para Endereço de E-mail');
define('_AM_XHELP_DEPARTMENT_NO_ID','Não foi achado o ID do Departamento. Abortando.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Caixa postal adicionada para o Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Erro ao salvar a Caixa postal para Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','Caixa postal de departamento não foi especificada.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Apagada Caixa postal de Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Erro ao remover Caixa postal de Departamento.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','Você tem que nomear um técnico a um ou mais departamentos antes de salvar');
define('_AM_XHELP_STAFF_ERROR_ROLES','Você tem que nomear um técnico a um ou mais funções antes de salvar');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','Adicionar Departamento:');
define('_AM_XHELP_TEXT_EDIT_DEPT','Editar nome do Departamento:');
define('_AM_XHELP_TEXT_EDIT','Editar');
define('_AM_XHELP_TEXT_DELETE','Apagar');
define('_AM_XHELP_TEXT_SELECTUSER','Selecionar Técnico:');
define('_AM_XHELP_TEXT_DEPARTMENTS','Departamentos:');
define('_AM_XHELP_TEXT_USER','Técnicos:');
define('_AM_XHELP_TEXT_ALL_DEPTS','Todos os departamentos');
define('_AM_XHELP_TEXT_NO_DEPTS','None');
define('_AM_XHELP_TEXT_MAKE_DEPTS','Você tem que criar os departamentos antes de adicionar técnicos!');
define('_AM_XHELP_LINK_ADD_DEPT','Adicionar Departamentos');
define('_AM_XHELP_TEXT_TOP_CLOSERS','Técnicos mais ativos');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Piores Atendimentos');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','Tickets Abertos com prioridade de Urgência');
define('_AM_XHELP_TEXT_NO_OWNER','Nenhum Técnico');
define('_AM_XHELP_TEXT_NO_DEPT','Nenhum Departamento');
define('_AM_XHELP_TEXT_RESPONSE_TIME','Tempo de Resposta mais rápido');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','Tempo de Resposta mais lento');
define('_AM_XHELP_TEXT_PRIORITY','Prioridade:');
define('_AM_XHELP_TEXT_ELAPSED','Decorrido:');
define('_AM_XHELP_TEXT_STATUS','Status:');
define('_AM_XHELP_TEXT_SUBJECT','Titulo:');
define('_AM_XHELP_TEXT_DEPARTMENT','Departamento:');
define('_AM_XHELP_TEXT_OWNER','Técnico:');
define('_AM_XHELP_TEXT_LAST_UPDATED','Ultimas Actualizações:');
define('_AM_XHELP_TEXT_LOGGED_BY','Enviado Por:');
define('_AM_XHELP_TEXT_EXISTING_ROLES','Funções existentes');
define('_AM_XHELP_TEXT_NO_ROLES','Não existe funções');
define('_AM_XHELP_TEXT_ROLES','Funções:');
define('_AM_XHELP_TEXT_CREATE_ROLE','Criar nova Função');
define('_AM_XHELP_TEXT_EDIT_ROLE','Editar Função');
define('_AM_XHELP_TEXT_NAME','Nome:');
define('_AM_XHELP_TEXT_PERMISSIONS','Permissões:');
define('_AM_XHELP_TEXT_SELECT_ALL','Selecionar todas');
define('_AM_XHELP_TEXT_DEPT_PERMS','Personalizar Permissões de Departamento');
define('_AM_XHELP_TEXT_CUSTOMIZE','Personalizar');
define('_AM_XHELP_TEXT_ACTIONS','Ações:');
define('_AM_XHELP_TEXT_ID','ID:');
define('_AM_XHELP_TEXT_LOOKUP_USER','Observe o Utilizador');
define('_AM_XHELP_SEARCH_BEGINEGINDATE','Data Inicial');
define('_AM_XHELP_SEARCH_ENDDATE','Data Final');


define('_AM_XHELP_TEXT_MAIL_EVENTS','Eventos Enviados');
define('_AM_XHELP_TEXT_MAILBOX','Caixa Postal:');
define('_AM_XHELP_TEXT_EVENT_CLASS','Classe de evento:');
define('_AM_XHELP_TEXT_TIME','Tempo:');
define('_AM_XHELP_NO_EVENTS','Não há Eventos');
define('_AM_XHELP_SEARCH_EVENTS','Procurar Eventos Enviados');
define('_AM_XHELP_BUTTON_SEARCH','Procurar');




// Mimetypes
define("_AM_XHELP_MIME_ID","ID");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","Tipo do Aplicação");
define("_AM_XHELP_MIME_ADMIN","Admin");
define("_AM_XHELP_MIME_USER","Utilizador");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","Criar Extensão");
define("_AM_XHELP_MIME_MODIFYF","Modificar Extensão");
define("_AM_XHELP_MIME_EXTF","Extensão do Arquivo:");
define("_AM_XHELP_MIME_NAMEF","Tipo do Aplicação/Nome:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Aplicativo Associado a extensão.</span></div>");
define("_AM_XHELP_MIME_TYPEF","Extensões:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Adicione cada extensão associada ao aplicativo.Cada extensão dever estar separada por um espaço.</span></div>");
define("_AM_XHELP_MIME_ADMINF","Extensão permitida aos Admins");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Extensões disponível para envio pelos Admins:</b>");
define("_AM_XHELP_MIME_USERF","Extensão permitida aos utilizadores");
define("_AM_XHELP_MIME_USERFINFO","<b>Extensões disponível para envio pelos utilizadores:</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","Nenhuma extensão foi selecionada.");
define("_AM_XHELP_MIME_FINDMIMETYPE","Procurar nova extensão:");
define("_AM_XHELP_MIME_EXTFIND","Procurar extensão de arquivo:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Digite a extensão que deseja procurar.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>Novas Extensões poder ser criadas, editadas ou apagadas facilmente.</li>
	<li>Procurar um extensão nova por um site da Web externo.</li>
	<li>VVisualização das Extensões para envio por Admins e Utilizadores.</li>
	<li>Mudar a opção de envio da entensão.</li></ul>
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","Criar");
define("_AM_XHELP_MIME_CLEAR","Limpar");
define("_AM_XHELP_MIME_CANCEL","Cancelar");
define("_AM_XHELP_MIME_MODIFY","Modificar");
define("_AM_XHELP_MIME_DELETE","Apagar");
define("_AM_XHELP_MIME_FINDIT","Procurar Extensão!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","Apagar Extensão Selecionada?");
define("_AM_XHELP_MIME_MIMEDELETED","Extensão %s foi excluida");
define("_AM_XHELP_MIME_CREATED","Informações sobre Extensão foram criadas");
define("_AM_XHELP_MIME_MODIFIED","Informações sobre Extensão foram actualizadas");

define("_AM_XHELP_MINDEX_ACTION","Ação");
define("_AM_XHELP_MINDEX_PAGE","<b>Página:<b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","Editar Item");
define("_AM_XHELP_ICO_DELETE","Apagar Item");
define("_AM_XHELP_ICO_ONLINE","Online");
define("_AM_XHELP_ICO_OFFLINE","Offline");
define("_AM_XHELP_ICO_APPROVED","Aprovado");
define("_AM_XHELP_ICO_NOTAPPROVED","Não Aprovado");

define("_AM_XHELP_ICO_LINK","Relatar Link");
define("_AM_XHELP_ICO_URL","Adicionar URL Informada");
define("_AM_XHELP_ICO_ADD","Adicionar");
define("_AM_XHELP_ICO_APPROVE","Aprovar");
define("_AM_XHELP_ICO_STATS","Estado");

define("_AM_XHELP_ICO_IGNORE","Ignorar");
define("_AM_XHELP_ICO_ACK","Relatório Inválido");
define("_AM_XHELP_ICO_REPORT","Relatório Inválido?");
define("_AM_XHELP_ICO_CONFIRM","Relatório Inválido");
define("_AM_XHELP_ICO_CONBROKEN","Relatório Inválido?");

define("_AM_XHELP_UPLOADFILE","Arquivo Enviado");
define('_AM_XHELP_TEXT_TICKET_INFO','Informações dos Tickets');
define('_AM_XHELP_TEXT_OPEN_TICKETS','Tickets Abertos');
define('_AM_XHELP_TEXT_HOLD_TICKETS','Tickets Bloqueados');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','Tickets Terminados');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','Total Tickets');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','Nome do Template:');
define('_AM_XHELP_TEXT_DESCRIPTION','Descrição:');
define('_AM_XHELP_TEXT_GENERAL_TAGS','Tags Gerais');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - URL do site');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - Nome do site');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - Email do administrator');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - Nome do modulo');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - link para o modulo');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','Não modifique as tags aqui relacionadas!');

define('_AM_XHELP_CURRENTVER','Versão actual: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','Versão da base de dados: <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','A sua base de dados está em dia. Nenhuma actualização é necessária.');
define('_AM_XHELP_DB_NEEDUPDATE','A sua base de dados está desactualizada. Por favor actualize suas tabelas da sua base de dados!');
define('_AM_XHELP_UPDATE_NOW','Actualize Agora!');
define('_AM_XHELP_DB_NEEDINSTALL','A sua base de dados está fora de sincronismo com a versão instalada. Por favor instale a mesma versão da sua base de dados ');
define('_AM_XHELP_VERSION_ERR','Incapaz determinar uma prévia da versão.');
define('_AM_XHELP_MSG_MODIFYTABLE','Tabela modificada %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Erro ao modificar a tabela %s');
define('_AM_XHELP_MSG_ADDTABLE','Tabela adicionada %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Erro ao adicionar tabela %s');
define('_AM_XHELP_MSG_UPDATESTAFF','Técnico actualizado #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Erro ao actualizar técnico #%s');
define('_AM_XHELP_UPDATE_DB','Actualizando Base de dados:');
define('_AM_XHELP_UPDATE_TO','Actualizando para a versão %s:');
define('_AM_XHELP_UPDATE_OK','Sucesso ao actualizar a versão %s');
define('_AM_XHELP_UPDATE_ERR','Error ao actualizar a versão %s');
define('_AM_XHELP_MSG_UPD_PERMS','Staff #%s permissões adicionadas para departamento %s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','Tabela %s removidas da sua base de dados.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','Técnico #%s tem permissões globais.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Error: Tabela %s não foram removidas da sua base de dados.');
define('_AM_XHELP_MSG_RENAME_TABLE','Tabela %s foi renomeada %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Error: tabela %s não foi renomeada.');
?>