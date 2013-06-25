<?php
//traduzido por Silviotech - www.santoxoops.com.br / www.xoops.pr.gov.br

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','Menu de Administração do Xhelp');
define('_AM_XHELP_BLOCK_TEXT','Administrar Blocos');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','Administrar Departamentos');
define('_AM_XHELP_MENU_MANAGE_STAFF','Administrar Técnicos');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','Templates dos Email´s');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','Modificar Campos do Ticket');
define('_AM_XHELP_MENU_GROUP_PERM','Permissões');
define('_AM_XHELP_MENU_MIMETYPES','Extensões Permitidas');
define('_AM_XHELP_MENU_PREFERENCES','Preferencias');
define('_AM_XHELP_MENU_ADD_STAFF','Adicionar Técnico');
define('_AM_XHELP_UPDATE_MODULE','Atualizar Modulo');
define('_AM_XHELP_MENU_MANAGE_ROLES','Administrar Funções');
define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','Administrar Notificações');

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

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','Adicionar Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','Modificar Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','Apagar Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Mudar Responsabilidade do Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','Mudar Status do Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','Mudar Prioridade do Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','Log Ticket para usuário');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','Adicionar Resposta');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','Modificar Resposta');
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','Funda Tickets');
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','Apagar Arquivos em Anexos');

// Admin Menu
define('_AM_XHELP_ADMIN_ABOUT','Sobre');
define('_AM_XHELP_ADMIN_GOTOMODULE','Ir para o módulo');

//Permissions
define('_AM_XHELP_GROUP_PERM','Permissões de Grupo');
define('_AM_XHELP_GROUP_PERM_TITLE','Alterar permissões dos Grupos');
define('_AM_XHELP_GROUP_PERM_NAME','Permissões');
define('_AM_XHELP_GROUP_PERM_DESC','Selecione as permissões para os grupos');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','Erro: Técnico não foi atualizado');
define('_AM_XHELP_MESSAGE_FILE_READONLY','Este arquivo é somente de leitura. Por favor atualize a permissões de escrita na pasta:  modules/xhelp/language/seuidioma/mail_templates');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','Arquivo atualizado!');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','Erro: arquivo não foi atualizado!');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','Função inserida com sucesso.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Erro: função não foi criada.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Função foi apagada com sucesso.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Erro: função não foi apagada.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Função atualizada com sucesso.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Erro: função não foi atualizada.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','permissões de Departamento atualizadas com sucesso.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Erro: não foram atualizadas as permissões de departamento');
define('_AM_XHELP_MESSAGE_DEF_ROLES','foram adicionadas as funções padrões de permissão  com sucesso.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','Erro: não foram adicionadas as funções padrões de permissão.');
define('_AM_XHELP_MESSAGE_NO_DEPT','Erro: nenhum departamento especificado');
define('_AM_XHELP_MESSAGE_NO_DESC','Erro: você não especificou uma descrição.');
define('_AM_MESSAGE_ADD_STATUS_ERR','Erro: status não foi adicionado.');
define('_AM_MESSAGE_EDIT_STATUS_ERR','Erro: status não foi atualizado.');
define('_AM_XHELP_DEL_STATUS_ERR','Erro: status não foi apagado.');
define('_AM_XHELP_MESSAGE_NO_ID','Erro: id não foi especificado.');
define('_AM_XHELP_MESSAGE_NO_VALUE','Erro: o valor de mimetype não foi especificado.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','Erro: o mimetype não foi atualizado.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','Erro: o mimetype não foi apagado.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','Erro: o mimetype não foi adicionado.');

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
define('_AM_XHELP_DEPARTMENT_SERVERS','Caixa postal de departamento');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Endereço de Email');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Tipo de caixa postal');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Prioridade padrão do Ticket');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Servidor');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Porta');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Ações');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Adicionar Caixa postal para monitorar');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Usuário');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Senha');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','Resposta para Endereço de E-mail');
define('_AM_XHELP_DEPARTMENT_NO_ID','Não foi achado o ID do Departamento. Abortando.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Caixa postal adicionada para o Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Erro em salvar a Caixa postal para Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','Caixa postal de departamento não foi especificada.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Apagada Caixa postal de Departamento.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Erro ao remover Caixa postal de Departamento.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','Você tem que nomear um técnico a um ou mais departamentos antes de salvar');
define('_AM_XHELP_STAFF_ERROR_ROLES','Você tem que nomear um técnico a um ou mais funções antes de salvar');
define('_AM_XHELP_STAFF_ERROR_USERS','Você tem que nomear um usuário para membro do suporte.');
define('_AM_XHELP_STAFF_EXISTS','Erro: este usuário já é um membro de suporte.');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','Adicionar Departamento:');
define('_AM_XHELP_TEXT_EDIT_DEPT','Editar nome do Departamento:');
define('_AM_XHELP_TEXT_EDIT','Editar');
define('_AM_XHELP_TEXT_DELETE','Deletar');
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
define('_AM_XHELP_TEXT_LAST_UPDATED','Ultimas Atualizações:');
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
define('_AM_XHELP_TEXT_LOOKUP_USER','Observe o Usuário');
define('_AM_XHELP_TEXT_BY','Por');
define('_AM_XHELP_TEXT_ASCENDING','Ascendente');
define('_AM_XHELP_TEXT_DESCENDING','Descente');
define('_AM_XHELP_TEXT_SORT_BY','Classificar por:');
define('_AM_XHELP_TEXT_ORDER_BY','Ordene por:');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','Número por Página:');
define('_AM_XHELP_TEXT_SEARCH_MIME','Procurar Mimetypes');
define('_AM_XHELP_TEXT_SEARCH_BY','Procurar por:');
define('_AM_XHELP_TEXT_SEARCH_TEXT','Procurar Texto:');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','Voltar a Procurar');
define('_AM_XHELP_TEXT_FIND_USERS','Localizar Usuário');

define('_AM_XHELP_SEARCH_BEGINEGINDATE','Data Inicial');
define('_AM_XHELP_SEARCH_ENDDATE','Data Final');

define('_AM_XHELP_TEXT_ADD_STATUS','Adicionar Status');
define('_AM_XHELP_TEXT_STATE','Status');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','Administrar Status');
define('_AM_XHELP_TEXT_EDIT_STATUS','Editar Status');

define('_AM_XHELP_TEXT_NO_RECORDS','Nenhum Registro Localizado');
define('_AM_XHELP_TEXT_MAIL_EVENTS','Enviar Eventos');
define('_AM_XHELP_TEXT_MAILBOX','Caixa postal');
define('_AM_XHELP_TEXT_EVENT_CLASS','Classe de evento');
define('_AM_XHELP_TEXT_TIME','Tempo');
define('_AM_XHELP_NO_EVENTS','Nenhum Evento Localizado');
define('_AM_XHELP_SEARCH_EVENTS','Procurar por Eventos Enviados');
define('_AM_XHELP_BUTTON_SEARCH','Procurar');
define('_AM_XHELP_BUTTON_TEST','Teste');
define('_AM_XHELP_POSITION','Posição');
define('_AM_XHELP_TEXT_MANAGE_FILES','Administrar Arquivos');
define('_AM_XHELP_TEXT_TICKETID','Ticket ID');
define('_AM_XHELP_TEXT_FILENAME','Nome do arquivo');
define('_AM_XHELP_TEXT_MIMETYPE','Mimetype');
define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','Espaço total usado');
define('_AM_XHELP_TEXT_SIZE','Tamanho');
define('_AM_XHELP_TEXT_DELETE_RESOLVED','Apaguar anexos do tickets resolvidos?');
define('_AM_XHELP_TEXT_NO_FILES','Nenhum Arquivo Localizado');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','Anexos resolvidos');
define('_AM_XHELP_TEXT_ALL_ATTACH','Todos os Anexos');
define('_AM_XHELP_TEXT_MAINTENANCE','Tarefas de manutenção');
define('_AM_XHELP_TEXT_ORPHANED','Remova registros dos membros órfãos da tabela xhelp_staff?');
define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','Remova o membro do departamento');
define('_AM_XHELP_MSG_NO_DEPTID','Erro: nenhum id de departamento foi especificado.');
define('_AM_XHELP_MSG_NO_UID','Erro: nenhum usuário foi especificado.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','Erro: nenhum membro foi afastado do departamento.');


// Mimetypes
define("_AM_XHELP_MIME_ID","ID");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","Tipo do Aplicativo");
define("_AM_XHELP_MIME_ADMIN","Admin");
define("_AM_XHELP_MIME_USER","Usuário");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","Criar Extensão");
define("_AM_XHELP_MIME_MODIFYF","Modificar Extensão");
define("_AM_XHELP_MIME_EXTF","Extensão do Arquivo:");
define("_AM_XHELP_MIME_NAMEF","Tipo do Aplicativo/Nome:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Aplicativo Associado a extensão.</span></div>");
define("_AM_XHELP_MIME_TYPEF","Extensões:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Adicione cada extensão associada ao aplicativo.Cada extensão dever estar separada por um espaço.</span></div>");
define("_AM_XHELP_MIME_ADMINF","Extensão permitida aos Admins");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Extensões disponível para envio pelos Admins:</b>");
define("_AM_XHELP_MIME_USERF","Extensão permitida aos usuários");
define("_AM_XHELP_MIME_USERFINFO","<b>Extensões disponível para envio pelos Usuários:</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","Nenhuma extensão foi selecionada.");
define("_AM_XHELP_MIME_FINDMIMETYPE","Procurar nova extensão:");
define("_AM_XHELP_MIME_EXTFIND","Procurar extensão de arquivo:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Digite a extensão que deseja procurar.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>Novas Extensões poder ser criadas, editadas ou apagadas facilmente.</li>
	<li>Procurar um extensão nova por um site da Web externo.</li>
	<li>VVisualização das Extensões para envio por Admins e Usuários.</li>
	<li>Mudar a opção de envio da entensão.</li></ul>
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","Criar");
define("_AM_XHELP_MIME_CLEAR","Limpar");
define("_AM_XHELP_MIME_CANCEL","Cancelar");
define("_AM_XHELP_MIME_MODIFY","Modificar");
define("_AM_XHELP_MIME_DELETE","Deletar");
define("_AM_XHELP_MIME_FINDIT","Procurar Extensão!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","Deletar Extensão Selecionada?");
define("_AM_XHELP_MIME_MIMEDELETED","Extensão %s foi excluida");
define("_AM_XHELP_MIME_CREATED","Informações sobre Extensão foram criadas");
define("_AM_XHELP_MIME_MODIFIED","Informações sobre Extensão foram atualizadas");

define("_AM_XHELP_MINDEX_ACTION","Ação");
define("_AM_XHELP_MINDEX_PAGE","<b>Página:<b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","Editar Item");
define("_AM_XHELP_ICO_DELETE","Deletar Item");
define("_AM_XHELP_ICO_ONLINE","Online");
define("_AM_XHELP_ICO_OFFLINE","Offline");
define("_AM_XHELP_ICO_APPROVED","Aprovado");
define("_AM_XHELP_ICO_NOTAPPROVED","Não Aprovado");

define("_AM_XHELP_ICO_LINK","Relatar Link");
define("_AM_XHELP_ICO_URL","Adicionar URL Informada");
define("_AM_XHELP_ICO_ADD","Adicionar");
define("_AM_XHELP_ICO_APPROVE","Aprovar");
define("_AM_XHELP_ICO_STATS","Estatus");

define("_AM_XHELP_ICO_IGNORE","Ignorar");
define("_AM_XHELP_ICO_ACK","Relatório quebrado");
define("_AM_XHELP_ICO_REPORT","Relatório Quebrado?");
define("_AM_XHELP_ICO_CONFIRM","Relatório quebrado");
define("_AM_XHELP_ICO_CONBROKEN","Relatório quebrado?");

define("_AM_XHELP_UPLOADFILE","Arquivo Enviado");
define('_AM_XHELP_TEXT_TICKET_INFO','Informações dos Tickets');
define('_AM_XHELP_TEXT_OPEN_TICKETS','Tickets Abertos');
define('_AM_XHELP_TEXT_HOLD_TICKETS','Tickets Bloqueados');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','Tickets Finalizados');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','Total Tickets');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','Nome do Template:');
define('_AM_XHELP_TEXT_DESCRIPTION','Descrição:');
define('_AM_XHELP_TEXT_PATH','Caminho');
define('_AM_XHELP_TEXT_GENERAL_TAGS','Tags Gerais');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - URL do site');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - Nome do site');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - Email do administrator');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - Nome do modulo');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - link para o modulo');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','Não modifique as tags aqui relacionadas!');

define('_AM_XHELP_CURRENTVER','Versão atual: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','Versão de banco de dados: <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','Seu banco de dados esta em dia. Nenhuma atualização é necessária.');
define('_AM_XHELP_DB_NEEDUPDATE','Seu banco de dados está desatualizado. Por favor atualize suas tabelas do banco de dados!');
define('_AM_XHELP_UPDATE_NOW','Atualize Agora!');
define('_AM_XHELP_DB_NEEDINSTALL','Seu banco de dados está fora de sinclonismo com a versão instalada. Por favor instale a mesma versão do banco de dados');
define('_AM_XHELP_VERSION_ERR','Incapaz determinar uma prévia da versão.');
define('_AM_XHELP_MSG_MODIFYTABLE','Tabela modificada %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Erro em modifica a tabela %s');
define('_AM_XHELP_MSG_ADDTABLE','Tabela adicionada %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Erro em adicionar tabela %s');
define('_AM_XHELP_MSG_UPDATESTAFF','Técnico atualizado #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Erro em atualizar técnico #%s');
define('_AM_XHELP_UPDATE_DB','Atualizando Banco de dados:');
define('_AM_XHELP_UPDATE_TO','Atualizando para a versão %s:');
define('_AM_XHELP_UPDATE_OK','Sucesso em atualizar a versão %s');
define('_AM_XHELP_UPDATE_ERR','Error em atualizar a versão %s');
define('_AM_XHELP_MSG_UPD_PERMS','Staff #%s permissões adicionadas para departamento %s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','Tabela %s removidas de seu banco de dados.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','Técnico #%s tem permissões globais.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Error: Tabela %s não foram removidas de seu banco de dados.');
define('_AM_XHELP_MSG_RENAME_TABLE','Tabela %s foi renomeada %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Error: tabela %s não foi renomeada.');
define('_AM_XHELP_MSG_UPDATE_ROLE','%s permissões da função foram atualizadas.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','Erro: %s permissões das funções não foram atualizadas.');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM','Você tem certeza que deseja remover o departamento #%u?');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM','Você tem certeza que deseja remover o membro #%u?');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM','Você tem certeza que deseja remover a caixa postal %s?');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','Erro: status \'%s\' não foi adicionado.');
define('_AM_XHELP_MSG_ADD_STATUS','Status \'%s\' foi adicionado.');
define('_AM_XHELP_MSG_CHANGED_STATUS','Tickets atualizados com novo status.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','Erro: status do ticket não foi atualizarado.');
define('_AM_XHELP_MSG_DELETE_RESOLVED','Você tem certeza que deseja remover anexos de tickets resolvidos?');
define('_AM_XHELP_MSG_DELETE_FILE','Você tem certeza que deseja remover este anexo?');
define('_AM_XHELP_MSG_ADD_CONFIG_ERR','Erro: configuração para departamento não foi adicionado');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','Erro: configuração para departamento não foi atualizado');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','Seus registros de membros estão atualizados.');

define('_AM_XHELP_TEXT_CONTRIB_INFO','Informações de Contribuição');
define('_AM_XHELP_TEXT_DEVELOPERS','Desenvolvedores');
define('_AM_XHELP_TEXT_TRANSLATORS','Tradutores');
define('_AM_XHELP_TEXT_TESTERS','Testadores');
define('_AM_XHELP_TEXT_DOCUMENTER','Documentadores');
define('_AM_XHELP_TEXT_CODE','Correções');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','Informação de Desenvolvimento do Módulo');
define('_AM_XHELP_TEXT_DEMO_SITE','Site de Demostração');
define('_AM_XHELP_DEMO_SITE','Site 3Dev de Demostração');
define('_AM_XHELP_TEXT_OFFICIAL_SITE','Site de Suporte Oficial');
define('_AM_XHELP_OFFICIAL_SITE','3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG','Achou um bug?');
define('_AM_XHELP_REPORT_BUG','Relatório do Bug');
define('_AM_XHELP_TEXT_NEW_FEATURE','Adicionar uma característica?');
define('_AM_XHELP_NEW_FEATURE','Nova Característica');
define('_AM_XHELP_TEXT_QUESTIONS','Perguntas?');
define('_AM_XHELP_QUESTIONS','Faça para desenvolvedoo do módulo uma pergunta');
define('_AM_XHELP_TEXT_RELEASE_DATE','Data do Release');
define('_AM_XHELP_TEXT_DISCLAIMER','Retratação');
define('_AM_XHELP_DISCLAIMER','Atenção: Este módulo ainda está em fase de Beta. Não deveria ser usado em um site da web. Os desenvolvedores  não são responsáveis por qualquer coisa que pode acontecer usando este módulo.');
define('_AM_XHELP_TEXT_CHANGELOG','Log de mudanças');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','Visibilidade de departamento');

define('_AM_XHELP_PATH_CONFIG',"Configuração de Diretório do módulo");
define('_AM_XHELP_PATH_TICKETATTACH','Anexos dos Tickets');
define('_AM_XHELP_PATH_EMAILTPL','Modelos de e-mail');
define('_AM_XHELP_TEXT_CREATETHEDIR','Criar a pasta ');
define('_AM_XHELP_TEXT_SETPERM','Setar Permissões');

define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight: bold; color: green;'>Disponível</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight: bold; color: red;'>Não disponível</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight: bold; color: red;'>Sem permissão</span>");
define('_AM_XHELP_PATH_CREATED',"Pasta criada com sucesso");
define('_AM_XHELP_PATH_NOTCREATED',"A pasta não pôde ser criada");
define('_AM_XHELP_MESSAGE_ACTIVATE','Pino Ativo');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Pino Inativo');
define('_AM_XHELP_TEXT_ACTIVE','Ativo');
define('_AM_XHELP_TEXT_INACTIVE','Em-ativo');
define('_AM_XHELP_TEXT_ACTIVITY','Atividade');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','Atualizar Caixa postal de Departamento');

define('_AM_XHELP_TEXT_MANAGE_FIELDS','Administrar os Campos Padrões');
define('_AM_XHELP_ADD_FIELD','Adicionar Campo');
define('_AM_XHELP_EDIT_FIELD','Modificar Campo');
define('_AM_XHELP_TEXT_NAME_DESC','Nomeie que exibirá a todo o mundo ao preencher informação de ingresso.');
define('_AM_XHELP_TEXT_FIELDNAME','Nome de campo');
define('_AM_XHELP_TEXT_FIELDNAME_DESC','Usado no código para o nome do elemento.');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC','Qualquer texto para ajudar clarifica o para o qual o campo é (Mesma coisa este texto está fazendo nesta página.)');
define('_AM_XHELP_TEXT_CONTROLTYPE','Tipo de Controle');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC','O tipo de controle de HTML que fará seu campo.');
define('_AM_XHELP_TEXT_DEPT_DESC','De qual departamentos gostaria este campo seja exibido?');
define('_AM_XHELP_TEXT_REQUIRED','Requerido');
define('_AM_XHELP_TEXT_REQUIRED_DESC','Deva este campo seja requerido durante abertura de ticket?');
define('_AM_XHELP_TEXT_DATATYPE','Tipo de Dados');
define('_AM_XHELP_TEXT_DATATYPE_DESC','Que tipo de dados é este campo?');
define('_AM_XHELP_TEXT_VALIDATION','Validação');
define('_AM_XHELP_TEXT_VALIDATION_DESC','Use uma expressão regular para validar os dados digitados pelo usuário.');
define('_AM_XHELP_TEXT_WEIGHT','Peso');
define('_AM_XHELP_TEXT_WEIGHT_DESC','Usado por ordenar campos.');
define('_AM_XHELP_TEXT_FIELDVALUES','Lista de Valor de campo');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','Exemplo:<br />NE=Não especificado<br />m=Masculino<br />f=Feminino<br /><br />Isto é usado para caixas seletas ou algo com valores de múltiplo. The info before the = is the key, and the info after is the value.');
define('_AM_XHELP_TEXT_DEFAULTVALUE','Valor Padrão');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC','O valor padrão que será provido no campo.<br />Para um campo que tem mais de 1 possível valor, use a chave do elemento.');
define('_AM_XHELP_TEXT_LENGTH','Comprimento');
define('_AM_XHELP_TEXT_LENGTH_DESC','Comprimento do campo.');

define('_AM_XHELP_TEXT_REGEX_CUSTOM','Padrão');
define('_AM_XHELP_TEXT_REGEX_USPHONE','Número de telefone');
define('_AM_XHELP_TEXT_REGEX_USZIP','CEP + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL','Endereço de e-mail');

define('_XHELP_CONTROL_DESC_TXTBOX','Caixa de texto');
define('_XHELP_CONTROL_DESC_TXTAREA','Caixa de Texto de Multi-linha');
define('_XHELP_CONTROL_DESC_SELECT','Caixa seleta');
define('_XHELP_CONTROL_DESC_MULTISELECT','Caixa de Multi-Seleção');
define('_XHELP_CONTROL_DESC_YESNO','Sim / Não');
define('_XHELP_CONTROL_DESC_CHECKBOX','Checkbox');
define('_XHELP_CONTROL_DESC_RADIOBOX','Radiobox');
define('_XHELP_CONTROL_DESC_DATETIME','Data+Hora');
define('_XHELP_CONTROL_DESC_FILE','Arquivo');

define('_XHELP_DATATYPE_TEXT','Texto');
define('_XHELP_DATATYPE_NUMBER_INT','Número (INTEIRO)');
define('_XHELP_DATATYPE_NUMBER_DEC','Número (Decimal)');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM','Você deseja remover o campo #%u?');
define('_AM_XHELP_VALID_ERR_CONTROLTYPE','Tipo de Controle Selecionado inválido.');
define('_AM_XHELP_TEXT_SESSION_RESET','Limpar Erros');
define('_AM_XHELP_VALID_ERR_NAME','Nome não fixado');
define('_AM_XHELP_VALID_ERR_FIELDNAME','Nome de campo não fixado');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','Nome de campo não pode ser igual');
define('_AM_XHELP_VALID_ERR_LENGTH','Comprimento deveria ser um valor de número entre %u e %u');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','Valor Padrão deve estar em lista de opção');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','Valor "%s" é maior que o comprimento de campo, %u caracteres');
define('_AM_XHELP_VALID_ERR_VALUE','Você tem que prover um jogo de valor para este campo');
define('_AM_XHELP_MSG_FIELD_ADD_OK','Campo adicionado com sucesso');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','Erros aconteceram enquanto o campo era adicionado');
define('_AM_XHELP_MSG_FIELD_UPD_OK','Campo atualizado com sucesso');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','Erros aconteceram enquanto o campo era atualizado');
define('_AM_XHELP_MSG_SUBMISSION_ERR','Sua submissão tem erros.  Por favor corrija e submeta novamente');
define('_AM_XHELP_MSG_NEED_UID','Erro: você tem que selecionar um usuário primeiro.');

define('_AM_XHELP_TEXT_DEFAULT_STATUS','Padrão de Status');

define('_AM_XHELP_VALID_ERR_MIME_EXT','Extensão de Arquivo não defenida');
define('_AM_XHELP_VALID_ERR_MIME_NAME','Tipo de aplicação ou Nome não fixados');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','Mime types não fixados');

define('_AM_XHELP_TEXT_NOTIF_NAME','Nome de notificação');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','Membros subscritos');

define('_AM_XHELP_NOTIF_NEW_TICKET','Novo Ticket');
define('_AM_XHELP_NOTIF_DEL_TICKET','Ticket Deletado');
define('_AM_XHELP_NOTIF_MOD_TICKET','Ticket Modificado');
define('_AM_XHELP_NOTIF_NEW_RESPONSE','Nova Resposta');
define('_AM_XHELP_NOTIF_MOD_RESPONSE','Resposta Modificada');
define('_AM_XHELP_NOTIF_MOD_STATUS','Modificado Status do Ticket');
define('_AM_XHELP_NOTIF_MOD_PRIORITY','Modificada Prioridade do Ticket');
define('_AM_XHELP_NOTIF_MOD_OWNER','Modificado Responsável pelo Ticket');
define('_AM_XHELP_NOTIF_CLOSE_TICKET','Ticket Fechado');
define('_AM_XHELP_NOTIF_MERGE_TICKET','Ticket Fixado');

//Used for Manage Notifications page
define('_AM_XHELP_STAFF_SETTING1','Todos os Técnicos');
define('_AM_XHELP_STAFF_SETTING2','Departamentos');
define('_AM_XHELP_STAFF_SETTING3','Responsabilidade pelo Ticket');
define('_AM_XHELP_STAFF_SETTING4','Notificação Desativada');
define('_AM_XHELP_USER_SETTING1','Notificação Ativada');
define('_AM_XHELP_USER_SETTING2','Notificação Desativada');
define('_AM_XHELP_TEXT_SUBMITTER','Enviador');
define('_AM_XHELP_TEXT_NOTIF_STAFF','Notificação dos Técnicos');
define('_AM_XHELP_TEXT_NOTIF_USER','Notificação de usuário');
define('_AM_XHELP_TEXT_ASSOC_TPL','Modelos associados');
define('_AM_XHELP_TEXT_AND','e');

//Novas
define('_AM_XHELP_STATUS_HASTICKETS_ERR','Erro: por favor atualize os tickets que usam este estatus.');
?>