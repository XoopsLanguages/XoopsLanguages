<?php

  //Properties admin page
  define('_MI_DOWNLOADHOME','Diret�rio de Download');
  define('_MI_DOWNLOADHOMEDSC','Diret�rio onde os arquivos de recurso ser�o armazenados e baixados');
  define('_MI_XASSET_SHOW_MIN_LICENSE','Mostrar Minha Licen�a.');
  define('_MI_XASSET_SHOW_MIN_L_DESC','Mostrar o m�nimo da coluna das licen�as na p�gina de avalia��o .');
  define('_MI_XASSET_SHOW_MAX_DOWNLOADS','Mostrar o m�ximo de Downloads.');
  define('_MI_XASSET_SHOW_MAX_D_DESC','Mostra o M�ximo de colunas na p�gina de avalia��o.');
  define('_MI_XASSET_SHOW_MAX_DAYS','Mostrar M�ximo de dias.');
  define('_MI_XASSET_SHOW_MAX_DAYS_DESC','Mostra o m�ximo de dias na coluna da p�gina de avalia��o.');
  define('_MI_XASSET_SHOW_EXPIRES','Mostrar a Data de Expira��o.');
  define('_MI_XASSET_SHOW_EXPIRES_DESC','Mostra da Data de expira��o na p�gina da coluna de avalia��es.');
  define('_MI_XASSET_SHOW_SAMPLES','Mostra Coluna de Exemplos');
  define('_MI_XASSET_EXPIRE_WARND','Aviso ao cliente associado sobre expira��o');
  define('_MI_XASSET_EXPIRE_WARNDE','Envia um email sobre a expira��o com x dias de antecencia para o associado.');
  define('_MI_XASSET_ORDERC_CAP','Ordem deve ser completada em  (secs)');
  define('_MI_XASSET_ORDERC_CAPDE','Com Quanto tempo a ordem deve ser completada at� ser direcionada a esta nova p�gina indicada');
  define('_MI_XASSET_ORDERC_RED','Ordem Completada Redirecionando');
  define('_MI_XASSET_ORDERC_REDDE','A p�gina a que a ordem quando completa e seu redirecionamento de novo. Deixar o espa�o em branco e ser� redirecionado para o padr�o xAsset/index.php ');
  define('_MI_XASSET_ENCRYPT_KEY','Chave secreta de Encripita��o');
  define('_MI_XASSET_ENCRYPT_KEYD','Esta chave � usada para encriptar dados e assim  proteger seus arquivos de video. Uma chave aleat�ria � gerada para voc�. ');
  define('_MI_XASSET_BANDWIDTH','Taxa para a largura de banda '); 
  define('_MI_XASSET_BANDWIDTHD','Ajustar a Banda (velocidade) em que o v�deo de FLV ser� tocado. O valor � kilobytes por segundo por cliente. '); 
  //admin menus
  define('_MI_XASSET_MENU_PREFERENCES','Prefer�ncias');
  define('_MI_XASSET_MENU_CHECK_TABLES','Verificar Tabelas');
  define('_MI_XASSET_MENU_MANAGE_APPLICATIONS','Gerenciar Aplica��es');
  define('_MI_XASSET_MENU_MANAGE_LICENSES','Ger. Licen�as');
  define('_MI_XASSET_MENU_MANAGE_STATS','Ger. Status de Download');
  define('_MI_XASSET_MENU_MANAGE_PACKAGES','Ger. Pacotes');
  define('_MI_XASSET_MENU_MANAGE_LINKS','Ger. Links');
  define('_MI_XASSET_MENU_MANAGE_REGIONS','Ger. Regi�es');
  define('_MI_XASSET_MENU_MANAGE_COUNTRIES','Ger. Paises');
  define('_MI_XASSET_MENU_MANAGE_ZONES','Ger. Zonas');
  define('_MI_XASSET_MENU_MANAGE_TAXES','Ger. Taxas e Rates');
  define('_MI_XASSET_MENU_MANAGE_CURRENCIES','Ger. Moedas');
  define('_MI_XASSET_MENU_MANAGE_GATEWAYS','Ger. Gateways');
  define('_MI_XASSET_MENU_MANAGE_GATE_LOGS','Ver Logs de Gateway');
  define('_MI_XASSET_MENU_MANAGE_ORDERS','Ver Ordens');
  define('_MI_XASSET_MENU_MANAGE_MEMBERSHIP','Ger. Memberships');
  //template names
  define('_MI_XASSET_VERSION_ADMIN_INDEX','P�gina Incial do Admin');
  define('_MI_XASSET_VERSION_ADMIN_APP_MAINTENANCE','Admin - Manuten��o de Aplica��o');
  define('_MI_XASSET_VERSION_ADMIN_LICENCE_MAINTENANCE','Admin - Manuten��o de Licen�a');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_MAINTENANCE','Admin - Manuten��o de Pacotes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LICENSE_BLOCK','Admin - Adiciona bloco de Licen�a');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_APPLICATION','Admin - Licen�a por Aplica��es');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_CLIENTS','Admin - Licen�as por Clientes');
  define('_MI_XASSET_VERSION_ADMIN_GROUPS_PACKAGES','Admin - Pacotes de Grupos e Pacotes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_GROUP','Admin - Incluir Pacote e Grupos de blocos do Pacote');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_BLOCK','Admin - Incluir Bloco de Pacote');
  define('_MI_XASSET_VERSION_ADMIN_APPLICATION_LINKS','Admin - Links da Aplica��o');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LINKS','Admin - Inluir Links da Aplica��o');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_LINKS','Admin - Editar Links da Aplica��o');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_APPLICATION','Admin Add/Edit Application Block');
  define('_MI_XASSET_VERSION_ADMIN_USERS_INDEX','Admin Users Index');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_USER','Admin Add/Edit User Block');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_PACKAGE_GROUP','Admin Package Group Edit Page');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_EDIT','Admin - Editar p�gina do Pacote');
  define('_MI_XASSET_VERSION_ADMIN_DOWNLOAD_STATS_INDEX','Admin - Status de Download na p�gina principal');
  define('_MI_XASSET_VERSION_INDEX_PAGE','P�gina inicial');
  define('_MI_XASSET_VERSION_LICENSE_INDEX','P�gina inicial de Licen�a');
  define('_MI_XASSET_VERSION_ERROR_PAGE','Erro na p�gina');
  define('_MI_XASSET_VERSION_PACKAGE_INDEX','P�gina inicial de Pacote');
  define('_MI_XASSET_VERSION_EVALUATION_INDEX','P�gina inicial de Avalia��o de Aplica��es');
  define('_MI_XASSET_VERSION_COUNTRY_ADD','Admin - Adicionar Pa�s no Bloco');
  define('_MI_XASSET_VERSION_COUNTRY_INDEX','Admin - P�gina inicial do Pa�s');
  define('_MI_XASSET_VERSION_REGION_INDEX','P�gina inicial de Regi�o');
  define('_MI_XASSET_VERSION_REGION_ADD','Incluir p�gina de Regi�o');
  define('_MI_XASSET_VERSION_ZONE_ADD','Admin - Incluir Zona no Bloco');
  define('_MI_XASSET_VERSION_ZONE_INDEX','Admin - P�gina inicial das Zonas');
  define('_MI_XASSET_VERSION_TAXRATES_INDEX','Admin - P�gina inicial de Taxes & Rates');
  define('_MI_XASSET_VERSION_TAX_CLASS_ADD','Admin - Incluir Classe de Taxa no Bloco');
  define('_MI_XASSET_VERSION_TAX_RATE_ADD','Admin - Inlui Tax Rate no Bloco');
  define('_MI_XASSET_VERSION_REGIONZONE_INDEX','Admin - Incluir Zona da Regi�o no Bloco');
  define('_MI_XASSET_VERSION_APPLICATION_PRODUCT_ADD','Admin - Incluir Aplica��o do produto no Bloco');
  define('_MI_XASSET_VERSION_CURRENCY_ADD','Admin - Incluir A moeda corrente no bloco ');
  define('_MI_XASSET_VERSION_CURRENCY_INDEX','Admin - P�gina inicial da Moeda corrente');
  define('_MI_XASSET_VERSION_GATEWAY_INDEX','Admin - P�gina inicial do Gateway de pagamento ');
  define('_MI_XASSET_VERSION_ORDER_STAGE1','P�gina de Pagamento - Etapa 1');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS','P�gina de Pagamento - Detalhes do Usu�rio');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS_ADD','P�gina de Pagamento - Os detalhes do usu�rio incluir/editar no bloco ');
  define('_MI_XASSET_VERSION_ORDER_INDEX','P�gina inicial de Pagamento');
  define('_MI_XASSET_VERSION_ORDER_CART','P�gina inicial do carrinho de compras ');
  define('_MI_XASSET_VERSION_CONFIG','Admin - P�gina inicial de Configura��o');
  define('_MI_XASSET_VERSION_ORDER_CHECKOUT','P�gina de caixa Geral do pagamento');
  define('_MI_XASSET_VERSION_GATEWAY_LOGS','P�gina de Logs do Gateway');
  define('_MI_XASSET_VERSION_GATEWAY_DET','P�gina de Detalhes dos Logs de Gateway');
  define('_MI_XASSET_VERSION_PRODUCT','P�gina do Produto');
  define('_MI_XASSET_VERSION_DOWNLOADS','P�gina do Meus Downloads');
  define('_MI_XASSET_VERSION_ORDER_TRACKING','Admin - Ordem que segue a p�gina inicial');
  define('_MI_XASSET_VERSION_SUPPORT','Admin - P�gina inicial de Suporte');
  define('_MI_XASSET_VERSION_ORDER_DETAILS','Admin - P�gina de Detalhes do Pagamento');
  define('_MI_XASSET_VERSION_ADMIN_MEMBERSHIP','Admin - P�gina inicial do Associado / MemberShip');
  define('_MI_XASSET_VERSION_OEXTRA','Order Extra Gateway Information Page');
  define('_MI_XASSET_VERSION_SUBS','My Subscriptions index page');
  define('_MI_XASSET_VERSION_PLAYER','Bloco Video player');
  define('_MI_XASSET_VERSION_VIDEO','P�gina inicial de Video');
  define('_MI_XASSET_BLOCK_DOWNOPT','Bloco - Op��o de melhores Downloads');
  define('_MI_XASSET_BLOCK_PICTOPT','Bloco - Op��es de Aplica��o de imagem');
  //blocks
  define('_MI_XASSET_CURRENCY','Moedas');
  define('_MI_XASSET_CURRENCYD','Escolha a sua moeda');
  define('_MI_XASSET_TOP','Top Downloads');
  define('_MI_XASSET_TOPD','Mostra os arquyivos de melhores downloaded/visualiza��es');
  define('_MI_XASSET_APP_PICS','Aplica��o de Imagens');
  define('_MI_XASSET_APP_PICSD','Mostra uma aplica��o com as defini��es da imagem');
  define('_MI_XASSET_APP_APPS','Aplica��es');
  define('_MI_XASSET_APP_APPSD','Listar todas as aplica��es no bloco');
  //submenu nams
  define('_MI_XASSET_SUBMENU_MY_DOWNLOAD','Download');
  define('_MI_XASSET_SUBMENU_MY_LICENSED','Minhas Licen�as');
  define('_MI_XASSET_SUBMENU_EVALUATION','Informa��es');
  define('_MI_XASSET_SUBMENU_MY_CART','Meu Carrinho');
  define('_MI_XASSET_SUBMENU_MY_DETAILS','Meus Detalhes');
  define('_MI_XASSET_SUBMENU_MY_DOWNLOADS','Meus Downloads');
  define('_MI_XASSET_SUBMENU_MY_SUBS','Minhas subscri��es ');
  //module xoops_version constants
  define('_MI_XASSET_MODULE_NAME','xasset - Distribui��o Segura de Software');
  define('_MI_XASSET_MODULE_DESCRIPTION','Asset - Gerenciamento de Distribui��o');
  //email temapltes constats
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFY','Cliente : Produto Pago');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYSBJ','Obrigado pela sua compra efetuada.');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYCAP','Avise-me quando um produto for comprado');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYDSC','Enviar notifica��o a um cliente quando o produto for comprado');

  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFY','Admin : Pagamento de Produto');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYSBJ','O cliente comprou um produto .');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYCAP','Notificar-me quando um cliente compra um produto .');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYDSC','Enviar ao admin uma notifica��o quando uma compra � feita ');
  
  define('_MI_XASSET_APP_NEW_USER_NOTIFY','Cliente : Email bem-vindo .');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYSBJ','Registo de Xasset.co.uk & informa��o do in�cio de uma sess�o ');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAP','Notificar o cliente da informa��o do registo & do in�cio de uma sess�o .');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAPDSC','Enviar email ao novo usu�rio registado.'); 

  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFY','Cliente : Aviso de expira��o de associado.');
  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFYSBJ','Seu associado est� para expirar.');
  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFYCAP','Notificar o cliente quando o associado estiver para expirar .');
  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFYDSC','Enviar e-mail para o cliente quando o associado estiver para expirar.'); 

  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFY','Cliente : Associado Expirado.');
  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFYSBJ','Seu associado est� expirado.');
  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFYCAP','Notifique-me quando um associado expirar.');
  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFYDSC','Enviar um e-mail para o cliente do associado quando expirar.');

  define('_MI_XASSET_ORDER_COMPLETE_NOTIFY','Cliente : Ordem Completa.');
  define('_MI_XASSET_ORDER_COMPLETE_NOTIFYSBJ','Sua ordem est� completa.');
  define('_MI_XASSET_ORDER_COMPLETE_NOTIFYCAP','Notificar o cliente quando o pagamento for efetuado e estiver completo.');
  define('_MI_XASSET_ORDER_COMPLETE_NOTIFYDSC','Enviar um e-mail para o cliente quando o pagamento estiver completo.');

?>
