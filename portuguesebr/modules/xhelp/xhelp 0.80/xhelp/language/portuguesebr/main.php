<?php
//traduzido por Silviotech - www.santoxoops.com.br / www.xoops.pr.gov.br

define('_XHELP_CATEGORY1','Nomear Técnico');
define('_XHELP_CATEGORY2','Deletar Respostas');
define('_XHELP_CATEGORY3','Deletar Tickets');
define('_XHELP_CATEGORY4','Log Usuários\Tickets');
define('_XHELP_CATEGORY5','Modificar Respostas');
define('_XHELP_CATEGORY6','Modificar informação do Ticket');

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

define('_XHELP_SEC_TEXT_TICKET_ADD','Adicionar Tickets');
define('_XHELP_SEC_TEXT_TICKET_EDIT','Modificar Tickets');
define('_XHELP_SEC_TEXT_TICKET_DELETE','Apagar Tickets');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Alterar Responsabilidade sobre Ticket');
define('_XHELP_SEC_TEXT_TICKET_STATUS','Alterar Status do Ticket');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','Alterar Prioridade do Ticket');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','Log do Ticket para Usuário');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','Adicionar Resposta');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','Modificar Resposta');
define('_XHELP_SEC_TEXT_TICKET_MERGE','Merge Tickets');
define('_XHELP_SEC_TEXT_FILE_DELETE','Delete File Attachments');

define('_XHELP_JSC_TEXT_DELETE','Você tem certeza que deseja apagar este ticket?');

define('_XHELP_MESSAGE_ADD_DEPT','Departamento adicionado com sucesso!');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','Erro:Departamento não foi adicionado');
define('_XHELP_MESSAGE_UPDATE_DEPT','Departamento atualizado com sucesso');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','Erro: Departamento não foi atualizado');
define('_XHELP_MESSAGE_DEPT_DELETE','Departamento foi deletado');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','Erro: Departamento não foi deletado');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','Erro: Técnico não foi adicionado');
define('_XHELP_MESSAGE_ADDSTAFF','Técnico adicionado com sucesso');
define('_XHELP_MESSAGE_STAFF_DELETE','Técnico foi deletado com sucesso');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','Erro: Técnico não foi deletado');
define('_XHELP_MESSAGE_EDITSTAFF','Perfil de Técnico atualizado com sucesso');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','Erro: técnico não foi atualizado');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','Erro: departamentos atingos não foram removidos');
define('_XHELP_MESSAGE_DEPT_EXISTS','Departamento já existe');
define('_XHELP_MESSAGE_ADDTICKET','Ticket enviado, departamento responsável foi acionado');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','Erro: ticket foi enviado');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','Erro: ação não foi adicionada ao banco de dados');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','Prioridade atualizada com sucesso');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','Erro: Prioridade não foi atualizada');
define('_XHELP_MESSAGE_UPDATE_STATUS','Status do Ticket atualizado com sucesso');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','Erro: Status não foi atualizado');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','Departamento do Ticket atualizado');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','Erro: não doi possível atualizar o Departamento do Ticket');
define('_XHELP_MESSAGE_CLAIM_OWNER','Ticket sob sua responsabilidade');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','Erro:Ticket não foi reivindicado');
define('_XHELP_MESSAGE_ASSIGN_OWNER','Ticket encaminhado');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','Erro ao encaminhar ticket');
define('_XHELP_MESSAGE_UPDATE_OWNER','Ticket enviado ao Técnico Responsável selecionado.');
define('_XHELP_MESSAGE_ADDFILE','File uploaded successfully');
define('_XHELP_MESSAGE_ADDFILE_ERROR','Erro: arquivo não pode ser enviado');
define('_XHELP_MESSAGE_ADDRESPONSE','Informação processada e cliente nofificado que seu Ticket respondido');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','Erro: Resposta não foi enviada');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','Erro: Ticket finalizado este campo foi desabilitado');
define('_XHELP_MESSAGE_ALREADY_OWNER','%s já é responsável por este Ticket');
define('_XHELP_MESSAGE_ALREADY_STATUS','Ticket já é fixado com esta prioridade');
define('_XHELP_MESSAGE_DELETE_TICKET','Ticket deletado com sucesso');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','Erro: ticket não foi deletado');
define('_XHELP_MESSAGE_ADD_SIGNATURE','Signature adicionada com sucesso');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','Erro: não foi possível atualizar a Assinatura');
define('_XHELP_MESSAGE_RESPONSE_TPL','Respostas Pré-definidas atualizadas com sucesso');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','Erro: não foi possível atualizar a resposta');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','Respostas Pré-definidas deletadas com sucesso');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','Erro: Resposta Pré-definida não pode ser excluida');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','Avaliação enviada com sucesso, Obrigado');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','Erro: não foi possível atualizar a Avaliação');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','Erro: Infomação de técnico não foi atualizada');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','Erro: não foi possível atualizar a Assinatura');
define('_XHELP_MESSAGE_UPDATE_SIG','Assinatura Atualizada');
define('_XHELP_MESSAGE_EDITTICKET','Ticket Atualizado');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','Erro: não foi possível atualizar o Ticket');
define('_XHELP_MESSAGE_USER_MOREINFO','Ticket atualizado com sucesso.');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','Erro: informação não foi adicionada');
define('_XHELP_MESSAGE_USER_NO_INFO','Erro: você não submeteu nenhuma informação nova');
define('_XHELP_MESSAGE_EDITRESPONSE','Resposta atualizada com sucesso');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','Erro em atualizar resposta');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','Notificações atualizadas com sucesso');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','Erro em atualizar ae Notificações');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','Usuário não teve nenhuma notificação');
define('_XHELP_MESSAGE_NO_DEPTS','Erro: nenhum departamento. Contate o administrador.');
define('_XHELP_MESSAGE_NO_STAFF','Erro: nenhum técnico existente neste departamento. Contate o administrador.');
define('_XHELP_MESSAGE_TICKET_REOPEN','Ticket reaberto com sucesso.');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','Erro: ticket não foi reaberto.');
define('_XHELP_MESSAGE_TICKET_CLOSE','Ticket concluido com sucesso.');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','Erro: ticket não foi concluido.');
define('_XHELP_MESSAGE_NOT_USER','Erro: não pode re-abrir ticket que não foram enviados por você.');
define('_XHELP_MESSAGE_NO_TICKETS','Erro: Nenhum ticket selecionado.');
define('_XHELP_MESSAGE_NOOWNER','Nenhum');
define('_XHELP_MESSAGE_UNKNOWN','Desconhecido');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','Erro: tipo de arquivo não é permitido. Por favor relate isso no ticket.');
define('_XHELP_MESSAGE_NO_UID','Erro: id inexistente');
define('_XHELP_MESSAGE_NO_PRIORITY','Erro: Prioridade não informada');
define('_XHELP_MESSAGE_FILE_ERROR','Erro: Impossível upload de arquivo pelas seguintes razões:<br />%s');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','Erro: email não foi atualizado');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','Você tem certeza que deseja apagar estes tickets?');
define('_XHELP_MESSAGE_DELETE_TICKETS','Tickets deletado com sucesso');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','Erro: tickets não foram deletados');
define('_XHELP_MESSAGE_VALIDATE_ERROR','Seu ticket tem erros, por favor corrija e submeta novamente.');
define('_XHELP_MESSAGE_UNAME_TAKEN',' já está em uso.');
define('_XHELP_MESSAGE_INVALID',' é inválido.');
define('_XHELP_MESSAGE_REQUIRED',' é requerido.');
define('_XHELP_MESSAGE_LONG',' é muito longo.');
define('_XHELP_MESSAGE_SHORT',' é muito pequeno.');
define('_XHELP_MESSAGE_NOT_ENTERED',' não foi adicionado.');
define('_XHELP_MESSAGE_NOT_NUMERIC',' não é numérico.');
define('_XHELP_MESSAGE_RESERVED',' está reservado.');
define('_XHELP_MESSAGE_NO_SPACES',' não deve ter espaços');
define('_XHELP_MESSAGE_NOT_SAME',' não é o mesmo.');
define('_XHELP_MESSAGE_NOT_SUPPLIED',' não é provido.');
define('_XHELP_MESSAGE_CREATE_USER_ERROR','Usuário não foi criado');
define('_XHELP_MESSAGE_NO_REGISTER','Inscrição está fechada. Não é possivel enviar um ticket neste momento, permitido apenas para usuários já cadastrados.');
define('_XHELP_MESSAGE_NEW_USER_ERR','Erro: sua conta de usuário não foi criada.');
define('_XHELP_MESSAGE_EMAIL_USED','Erro: e-mail já foi registrado.');
define('_XHELP_MESSAGE_DELETE_FILE_ERR','Error: file was not deleted.');
define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','Error: search was not deleted.');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','Erro: envio de arquivo está desabilitado para este módulo.');
define('_XHELP_MESSAGE_UPLOAD_ERR','Arquivo %s de %s  não foi enviado porque %s.');

define('_XHELP_MESSAGE_NO_ADD_TICKET','Você não tem permissão para anotar tickets.');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','Você não tem permissão para apagar tickets.');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','Você não tem permissão para editar tickets.');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','Você não tem permissão para mudar a responsabilidade.');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','Você não tem permissão para mudar a prioridade.');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','Você não tem permissão para mudar o status.');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','Você não tem permissão para adicionar respostas.');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','Você não tem permissão para editar respostas.');
define('_XHELP_MESSAGE_NO_MERGE','You do not have permission to merge tickets.');
define('_XHELP_MESSAGE_NO_TICKET2','Error: you did not specify a ticket to merge with.');
define('_XHELP_MESSAGE_ADDED_EMAIL','Email added successfully.');
define('_XHELP_MESSAGE_ADDED_EMAIL_ERROR','Error: email was not added.');
define('_XHELP_MESSAGE_NO_EMAIL','Error: you did not specify an email to add.');
define('_XHELP_MESSAGE_ADD_EMAIL','Email notification was updated.');
define('_XHELP_MESSAGE_ADD_EMAIL_ERROR','Error: email was not updated.');
define('_XHELP_MESSAGE_NO_MERGE_TICKET','You do not have permission to suppress an email.');
define('_XHELP_MESSAGE_NO_FILE_DELETE','You do not have permission to delete files.');
define('_XHELP_MESSAGE_NO_CUSTFLD_ADDED','Error: custom field values were not saved.');

define('_XHELP_ERROR_INV_TICKET','Erro: Ticket inválido.  Por favor confira o Ticket e tente novamente!');
define('_XHELP_ERROR_INV_RESPONSE','Erro: Resposta inválida. Por favor confira a Resposta e tente novamente!');
define('_XHELP_ERROR_NODEPTPERM','Você não pode enviar uma resposta para este Ticket. Razão: Você não é um técncio do departamento responsável pelo Ticket.');
define('_XHELP_ERROR_INV_STAFF','Erro: Usuário não é um Técnico Nomeado.');
define('_XHELP_ERROR_INV_TEMPLATE','Erro: Preencha o nome de modelo e o texto antes de enviar');
define('_XHELP_ERROR_INV_USER','Error: you do not have permission to view this ticket.');

define('_XHELP_TITLE_ADDTICKET','Abertura de Ticket de solicitação de Suporte');
define('_XHELP_TITLE_ADDRESPONSE','Adicionar Resposta');
define('_XHELP_TITLE_EDITTICKET','Editar infomação do Ticket');
define('_XHELP_TITLE_EDITRESPONSE','Editar Resposta');
define('_XHELP_TITLE_SEARCH','Procurar');

define('_XHELP_TEXT_SIZE','Tamanho:');
define('_XHELP_TEXT_REALNAME','Nome Real');
define('_XHELP_TEXT_ID','ID:');
define('_XHELP_TEXT_NAME','Cliente:');
define('_XHELP_TEXT_USER','Usuário:');
define('_XHELP_TEXT_USERID','ID do Usuário:');
define('_XHELP_TEXT_LOOKUP','Observe');
define('_XHELP_TEXT_LOOKUP_USER','Observe Usuário');
define('_XHELP_TEXT_EMAIL','Email:');
define('_XHELP_TEXT_ASSIGNTO','Enviar para:');
define('_XHELP_TEXT_PRIORITY','Prioridade:');
define('_XHELP_TEXT_STATUS','Status:');
define('_XHELP_TEXT_SUBJECT','Titulo:');
define('_XHELP_TEXT_DEPARTMENT','Departamento:');
define('_XHELP_TEXT_OWNER','Técnico:');
define('_XHELP_TEXT_CLOSEDBY','Finalizado por:');
define('_XHELP_TEXT_NOTAPPLY','N/A');
define('_XHELP_TEXT_TIMESPENT','Tempo de Atendimento:');
define('_XHELP_TEXT_DESCRIPTION','Solicitação:');
define('_XHELP_TEXT_ADDFILE','Adicionar Arquivo:');
define('_XHELP_TEXT_FILE','Arquivo:');
define('_XHELP_TEXT_RESPONSE','Resposta');
define('_XHELP_TEXT_RESPONSES','Respostas');
define('_XHELP_TEXT_CLAIMOWNER','Assumir Ticket:');
define('_XHELP_TEXT_CLAIM_OWNER','Assumir Ticket');
define('_XHELP_TEXT_TICKETDETAILS','Detalhes do Ticket');
define('_XHELP_TEXT_MINUTES','minutos');
define('_XHELP_TEXT_SEARCH','Procurar:');
define('_XHELP_TEXT_SEARCHBY','por:');
define('_XHELP_SEARCH_DESC','Solicitação');
define('_XHELP_SEARCH_SUBJECT','Titulo');
define('_XHELP_TEXT_NUMRESULTS','Número de Resultados por página:');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','Resultados da procura');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','Respostas Pré-definidas:');
define('_XHELP_TEXT_PREDEFINED0','-- Criar Resposta --');
define('_XHELP_TEXT_NO_USERS','Nenhum usuário localizado');
define('_XHELP_TEXT_SEARCH_AGAIN','Procurar Novamente');
define('_XHELP_TEXT_LOGGED_BY','Usuário');
define('_XHELP_TEXT_LOG_TIME','Data de Abertura:');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','Detalhes de Responsabilidade Técnica');
define('_XHELP_TEXT_ACTIVITY_LOG','Informações sobre Atendimento');
define('_XHELP_TEXT_HELPDESK_TICKET','Ticket de Suporte:');
define('_XHELP_TEXT_YES','Sim');
define('_XHELP_TEXT_NO','Não');
define('_XHELP_TEXT_ALL_TICKETS','Todos Tickets');
define('_XHELP_TEXT_HIGH_PRIORITY','Tickets aguardando resposta');
define('_XHELP_TEXT_NEW_TICKETS','Novos Tickets');
define('_XHELP_TEXT_MY_TICKETS','Tickets sob minha responsabilidade');
define('_XHELP_TEXT_SUBMITTED_TICKETS','Meus Tickets enviados');
define('_XHELP_TEXT_ANNOUNCEMENTS','Anúncios');
define('_XHELP_TEXT_MY_PERFORMANCE','Minha Performance');
define('_XHELP_TEXT_RESPONSE_TIME','Média de tempo para Resposta:');
define('_XHELP_TEXT_RATING','Avaliação:');
define('_XHELP_TEXT_NUMREVIEWS','Número de Revisões:');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','Numero de Tickets Finalizados:');
define('_XHELP_TEXT_TEMPLATE_NAME','Nome do Template:');
define('_XHELP_TEXT_MESSAGE','Mensagem:');
define('_XHELP_TEXT_ACTIONS','Ações:');
define('_XHELP_TEXT_ACTIONS2','Ações');
define('_XHELP_TEXT_MY_NOTIFICATIONS','Minhas Notificações');
define('_XHELP_TEXT_SELECT_ALL','Selecionar todos');
define('_XHELP_TEXT_USER_IP','IP do Usuário:');
define('_XHELP_TEXT_OWNERSHIP','Atendimento');
define('_XHELP_TEXT_ASSIGN_OWNER','Nomear Técnico');
define('_XHELP_TEXT_TICKET','Ticket');
define('_XHELP_TEXT_USER_RATING','Avaliação de usuário:');
define('_XHELP_TEXT_EDIT_RESPONSE','Editar Resposta');
define('_XHELP_TEXT_FILE_ADDED','Arquivo Adicionado:');
define('_XHELP_TEXT_ACTION','Ação:');
define('_XHELP_TEXT_LAST_TICKETS','Ultimos Tickets do cliente:');
define('_XHELP_TEXT_RATE_STAFF','Resposta avaliação técncia');
define('_XHELP_TEXT_COMMENTS','Comentários:');
define('_XHELP_TEXT_MY_OPEN_TICKETS','Meus Tickets Abertos');
define('_XHELP_TEXT_RATE_RESPONSE','Avaliar Atendimento?');
define('_XHELP_TEXT_RESPONSE_RATING','Avaliação de resposta:');
define('_XHELP_TEXT_REOPEN_TICKET','Reabrir Ticket?');
define('_XHELP_TEXT_MORE_INFO','Deseja mais informações sobre este assunto?');
define('_XHELP_TEXT_REOPEN_REASON','Argumento para reabrir Ticket (opcional)');
define('_XHELP_TEXT_MORE_INFO2','Descreva aqui as infomações adicionais desejadas!');
define('_XHELP_TEXT_NO_DEPT','Nenhum Departamento');
define('_XHELP_TEXT_NOT_EMAIL','Endereço de Email:');
define('_XHELP_TEXT_LAST_REVIEWS','Mais recentes Revisões de Técnicos:');
define('_XHELP_TEXT_SORT_TICKETS','Tipos de Tickets nesta coluna');
define('_XHELP_TEXT_ELAPSED','Decorrido:');
define('_XHELP_TEXT_FILTERTICKETS','Filtro de Tickets:');
define('_XHELP_TEXT_LIMIT','Registros por página');
define('_XHELP_TEXT_SUBMITTEDBY','Enviado Por:');
define('_XHELP_TEXT_NO_INCLUDE','QUALQUER');
define('_XHELP_TEXT_PRIVATE_RESPONSE','Resposta privada:');
define('_XHELP_TEXT_PRIVATE','Privado');
define('_XHELP_TEXT_CLOSE_TICKET','Finalizar Ticket?');
define('_XHELP_TEXT_ADD_SIGNATURE','Adicionar Assinatura nas respostas?');
define('_XHELP_TEXT_LASTUPDATE','Última Atualização:');
define('_XHELP_TEXT_BATCH_ACTIONS','Ações de grupo:');
define('_XHELP_TEXT_BATCH_DEPARTMENT','Mudar Departamento');
define('_XHELP_TEXT_BATCH_PRIORITY','Mudar Prioridade');
define('_XHELP_TEXT_BATCH_STATUS','Mudar Status');
define('_XHELP_TEXT_BATCH_DELETE','Apagar Tickets');
define('_XHELP_TEXT_BATCH_RESPONSE','Responder');
define('_XHELP_TEXT_BATCH_OWNERSHIP','Pegue/Nomeie Responsabilidade');
define('_XHELP_TEXT_UPDATE_COMP','Atualização Completa!');
define('_XHELP_TEXT_TOPICS_ADDED','Tópicos Adicionados');
define('_XHELP_TEXT_DEPTS_ADDED','Departamentos Adicionados');
define('_XHELP_TEXT_CLOSE_WINDOW','Fecha janela');
define('_XHELP_TEXT_USER_LOOKUP',' Observe o Usuário');
define('_XHELP_TEXT_EVENT','Evento');
define('_XHELP_TEXT_AVAIL_FILETYPES','Extensões disponíveis');
define('_XHELP_USER_REGISTER','Inscrição de Usuário');

define('_XHELP_TEXT_SETDEPT','Escolha um departamento:');
define('_XHELP_TEXT_SETPRIORITY','Escolha a prioridade do ticket:');
define('_XHELP_TEXT_SETOWNER','Escolha um Técnico:');
define('_XHELP_TEXT_SETSTATUS','Escolha o status do ticket:');
define('_XHELP_TEXT_MERGE_TICKET','Merge Tickets');
define('_XHELP_TEXT_MERGE_TITLE','Enter the ticket ID you want to merge with.');
define('_XHELP_TEXT_EMAIL_NOTIFICATION','Email Notification:');
define('_XHELP_TEXT_EMAIL_NOTIFICATION_TITLE','Add an email address to be notified of ticket updates.');
define('_XHELP_TEXT_RECEIVE_NOTIFICATIONS','Receive Notifications:');
define('_XHELP_TEXT_EMAIL_SUPPRESS','Emails are suppressed. Click to send email notifications.');
define('_XHELP_TEXT_EMAIL_NOT_SUPPRESS','Emails are being sent. Click to suppress.');
define('_XHELP_TEXT_TICKET_NOTIFICATIONS','Ticket Notifications');
define('_XHELP_TEXT_STATE','State:');
define('_XHELP_TEXT_BY_STATUS','By Status:');
define('_XHELP_TEXT_BY_STATE','By State:');
define('_XHELP_TEXT_SEARCH_OR','-- OR --');
define('_XHELP_TEXT_VIEW1','Basic View');
define('_XHELP_TEXT_VIEW2','Advanced View');
define('_XHELP_TEXT_SAVE_SEARCH','Save Search?');
define('_XHELP_TEXT_SEARCH_NAME','Search Name:');
define('_XHELP_TEXT_SAVED_SEARCHES','Previously Saved Searches');
define('_XHELP_TEXT_SWITCH_TO','Switch To ');
define('_XHELP_TEXT_ADDITIONAL_INFO','Additional Information');

define('_XHELP_ROLE_NAME1','Administrador de Tickets');
define('_XHELP_ROLE_NAME2','Suporte');
define('_XHELP_ROLE_NAME3','Browser');
define('_XHELP_ROLE_DSC1','Pode fazer tudo');
define('_XHELP_ROLE_DSC2','Adicionar Tickets e respostas,  mudança de status e prioridade, e Log de Tickets para um usuário');
define('_XHELP_ROLE_DSC3','Não pode fazer nenhuma mudança');
define('_XHELP_ROLE_VAL1', 511);
define('_XHELP_ROLE_VAL2', 241);
define('_XHELP_ROLE_VAL3', 0);



// Ticket.php - Actions
define('_XHELP_TEXT_SELECTED','Com Seleção:');
define('_XHELP_TEXT_ADD_RESPONSE','Responder');
define('_XHELP_TEXT_EDIT_TICKET','Editar');
define('_XHELP_TEXT_DELETE_TICKET','Deletar');
define('_XHELP_TEXT_PRINT_TICKET','Imprimir');
define('_XHELP_TEXT_UPDATE_PRIORITY','Prioridade');
define('_XHELP_TEXT_UPDATE_STATUS','Status');

define('_XHELP_PIC_ALT_USER_AVATAR','Logo Usuário');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','Desativar Auto Atualização');
define('_XHELP_TEXT_AUTO_REFRESH1','Atualizar a cada 1 minuto');
define('_XHELP_TEXT_AUTO_REFRESH2','Atualizar a cada 5 minutos');
define('_XHELP_TEXT_AUTO_REFRESH3','Atualizar a cada 10 minutos');
define('_XHELP_TEXT_AUTO_REFRESH4','Atualizar a cada 30 minutos');
define('_XHELP_AUTO_REFRESH0', 0);          // Mude estes para
define('_XHELP_AUTO_REFRESH1', 60);         // ajuste os valores
define('_XHELP_AUTO_REFRESH2', 300);        // na caixa seleta
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

define('_XHELP_MENU_MAIN','Principal');
define('_XHELP_MENU_LOG_TICKET','Abrir Ticket');
define('_XHELP_MENU_MY_PROFILE','Meu Perfil');
define('_XHELP_MENU_ALL_TICKETS','Ver todos os Tickets');
define('_XHELP_MENU_SEARCH','Procurar');

define('_XHELP_SEARCH_EMAIL','Email');
define('_XHELP_SEARCH_USERNAME','Cliente');
define('_XHELP_SEARCH_UID','ID do Cliente');

define('_XHELP_BUTTON_ADDRESPONSE','Adicionar Resposta');
define('_XHELP_BUTTON_ADDTICKET','Enviar Ticket');
define('_XHELP_BUTTON_EDITTICKET','Editar Ticket');
define('_XHELP_BUTTON_RESET','Limpar');
define('_XHELP_BUTTON_EDITRESPONSE','Atualizar Resposta');
define('_XHELP_BUTTON_SEARCH','Procurar');
define('_XHELP_BUTTON_LOG_USER','Log por Cliente');
define('_XHELP_BUTTON_FIND_USER','Procurar Cliente');
define('_XHELP_BUTTON_SUBMIT','Enviar');
define('_XHELP_BUTTON_DELETE','Deletar');
define('_XHELP_BUTTON_UPDATE','Atualizar');
define('_XHELP_BUTTON_UPDATE_PRIORITY','Atualizar Prioridade');
define('_XHELP_BUTTON_UPDATE_STATUS','Atualizar Status');
define('_XHELP_BUTTON_ADD_INFO','Adicionar Informação');
define('_XHELP_BUTTON_SET','Fixar');
define('_XHELP_BUTTON_ADD_EMAIL','Add Email');
define('_XHELP_BUTTON_RUN','Run');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_TEXT_PRIORITY1','Emergência');
define('_XHELP_TEXT_PRIORITY2','Urgente');
define('_XHELP_TEXT_PRIORITY3','Alta');
define('_XHELP_TEXT_PRIORITY4','Média');
define('_XHELP_TEXT_PRIORITY5','Baixa');

define('_XHELP_STATUS0','Aberto');
define('_XHELP_STATUS1','Bloqueado');
define('_XHELP_STATUS2','Finalizado');

define('_XHELP_STATE1','Unresolved');
define('_XHELP_STATE2','Resolved');
define('_XHELP_NUM_STATE1', 1);
define('_XHELP_NUM_STATE2', 2);

define('_XHELP_RATING0','Nenhuma avaliação');
define('_XHELP_RATING1','Pessimo');
define('_XHELP_RATING2','Ruim');
define('_XHELP_RATING3','Médio');
define('_XHELP_RATING4','Otimo');
define('_XHELP_RATING5','Excelente');

// Log Messages
define('_XHELP_LOG_ADDTICKET','Ticket Aberto');
define('_XHELP_LOG_ADDTICKET_FORUSER','Ticket enviado por %s para %s');
define('_XHELP_LOG_EDITTICKET','Informação do Ticket foi atualizada');
define('_XHELP_LOG_UPDATE_PRIORITY','Prioridade alterada de pri:%u para pri:%u');
define('_XHELP_LOG_UPDATE_STATUS','Status alterado de %s para %s');
define('_XHELP_LOG_CLAIM_OWNERSHIP','Ticket Assumido');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','Tecnico nomeado para %s');
define('_XHELP_LOG_ADDRESPONSE','Ticket Respondido');
define('_XHELP_LOG_USER_MOREINFO','Mais infomações adicionada');
define('_XHELP_LOG_EDIT_RESPONSE','Resposta # %s edited');
define('_XHELP_LOG_REOPEN_TICKET','Ticket reaberto');
define('_XHELP_LOG_CLOSE_TICKET','Ticket finalizado');
define('_XHELP_LOG_ADDRATING','Resposta de avaliação %u');
define('_XHELP_LOG_SETDEPT','Nomeado o departamento %s');
define('_XHELP_LOG_MERGETICKETS','Merged ticket %s to %s');
define('_XHELP_LOG_DELETEFILE','File %s deleted');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','Não há tickets');
define('_XHELP_NO_RESPONSES_ERROR','Não há respostas');
define('_XHELP_NO_MAILBOX_ERROR','Invalid Mailbox Specified');
define('_XHELP_NO_FILES_ERROR','Não há arquivos');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','Cometários?');
define("_XHELP_ANNOUNCE_READMORE","Ler mais...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 comentário");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s comentários");
define("_XHELP_TICKET_MD5SIGNATURE","Codigo de Suporte:");


define('_XHELP_NO_OWNER','Aguardando Técnico');
define('_XHELP_RESPONSE_EDIT','Resposta alterada por %s as %s');

define('_XHELP_TIME_SECS','segundos');
define('_XHELP_TIME_MINS','minutos');
define('_XHELP_TIME_HOURS','horas');
define('_XHELP_TIME_DAYS','dias');
define('_XHELP_TIME_WEEKS','semanas');
define('_XHELP_TIME_YEARS','anos');

define('_XHELP_TIME_SEC','segundo');
define('_XHELP_TIME_MIN','minuto');
define('_XHELP_TIME_HOUR','hora');
define('_XHELP_TIME_DAY','dia');
define('_XHELP_TIME_WEEK','semana');
define('_XHELP_TIME_YEAR','anos');

define('_XHELP_MAILEVENT_CLASS0', 0);     // Mensagem de conexão
define('_XHELP_MAILEVENT_CLASS1', 1);     // Analise da mensagem
define('_XHELP_MAILEVENT_CLASS2', 2);     // Mensagem de armazenamento
define('_XHELP_MAILEVENT_CLASS3', 3);     // Mensagem geral

define('_XHELP_MAILEVENT_DESC0','Não pôde conectar ao servidor.');
define('_XHELP_MAILEVENT_DESC1','Não pôde analisar a mensagem.');
define('_XHELP_MAILEVENT_DESC2','Não pôde armazenar mensagem.');
define('_XHELP_MAILEVENT_DESC3','');

define('_XHELP_MAIL_CLASS0','Conexão');
define('_XHELP_MAIL_CLASS1','Analisando gramaticalmente');
define('_XHELP_MAIL_CLASS2','Armazenamento');
define('_XHELP_MAIL_CLASS3','Geral');

define('_XHELP_MAILEVENT_DESC0','Não pôde conectar a servidor.');
define('_XHELP_MAILEVENT_DESC1','Não pôde analisar gramaticalmente mensagem.');
define('_XHELP_MAILEVENT_DESC2','Não pôde armazenar mensagem.');
define('_XHELP_MAILEVENT_DESC3','');
define('_XHELP_MBOX_ERR_LOGIN','Falha na Conexão com servidor de e-mail: login inválido ou senha');
define('_XHELP_MBOX_INV_BOXTYPE','Tipo de caixa postal especificado não é suportada');

define('_XHELP_MAIL_CLASS0','Conexão');
define('_XHELP_MAIL_CLASS1','Analisando gramaticalmente');
define('_XHELP_MAIL_CLASS2','Armazenamento');
define('_XHELP_MAIL_CLASS3','Geral');

define('_XHELP_GROUP_PERM_DEPT','xhelp_dept');
define('_XHELP_MISMATCH_EMAIL','%s foi notificado que a mensagem dele não foi armazenada. Chave de suporte emparelhou, mas mensagem deveria ter sido enviada de %s ao invés.');
define('_XHELP_MESSAGE_MERGE','Fusão completada.');
define('_XHELP_MESSAGE_MERGE_ERROR','Erro: fusão não foi completada.');
define('_XHELP_RESPONSE_NO_TICKET','Nenhum ticket localizado com esta resposta');
define('_XHELP_MESSAGE_NO_ANON','Mensagem de %s bloqueado, envio de ticket por usuários anônimos desativada');
define('_XHELP_MESSAGE_EMAIL_DEPT_MBOX','Mensagem de %s bloqueado, remetente é uma caixa postal de departamento');

define('_XHELP_SIZE_BYTES','Bytes');
define('_XHELP_SIZE_KB','KB');
define('_XHELP_SIZE_MB','MB');
define('_XHELP_SIZE_GB','GB');
define('_XHELP_SIZE_TB','TB');

define('_XHELP_TEXT_USER_NOT_ACTIVATED','Usuário não terminou processo de ativação.');
define('_XHELP_DEFAULT_PRIORITY', 4);

define('_XHELP_TEXT_ADMIN_DISABLED','<em>[Desabilitado pelo Administrador]</em>');

define('_XHELP_TEXT_CURRENT_NOTIFICATION','Método de Notificação atual');
define('_XHELP_NOTIFY_METHOD1','Mensagem Privada');
define('_XHELP_NOTIFY_METHOD2','Email');
?>