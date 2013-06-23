<?php

  //Properties admin page
  define('_MI_DOWNLOADHOME','Diretório de Download');
  define('_MI_DOWNLOADHOMEDSC','Diretório onde os arquivos de recurso serão armazenados e baixados');
  define('_MI_XASSET_SHOW_MIN_LICENSE','Mostrar Minha Licença.');
  define('_MI_XASSET_SHOW_MIN_L_DESC','Mostrar o mínimo da coluna das licenças na página de avaliação .');
  define('_MI_XASSET_SHOW_MAX_DOWNLOADS','Mostrar o máximo de Downloads.');
  define('_MI_XASSET_SHOW_MAX_D_DESC','Mostra o Máximo de colunas na página de avaliação.');
  define('_MI_XASSET_SHOW_MAX_DAYS','Mostrar Máximo de dias.');
  define('_MI_XASSET_SHOW_MAX_DAYS_DESC','Mostra o máximo de dias na coluna da página de avaliação.');
  define('_MI_XASSET_SHOW_EXPIRES','Mostrar a Data de Expiração.');
  define('_MI_XASSET_SHOW_EXPIRES_DESC','Mostra da Data de expiração na página da coluna de avaliações.');
  define('_MI_XASSET_SHOW_SAMPLES','Mostra Coluna de Exemplos');
  define('_MI_XASSET_EXPIRE_WARND','Aviso ao cliente associado sobre expiração');
  define('_MI_XASSET_EXPIRE_WARNDE','Envia um email sobre a expiração com x dias de antecencia para o associado.');
  define('_MI_XASSET_ORDERC_CAP','Ordem deve ser completada em  (secs)');
  define('_MI_XASSET_ORDERC_CAPDE','Com Quanto tempo a ordem deve ser completada até ser direcionada a esta nova página indicada');
  define('_MI_XASSET_ORDERC_RED','Ordem Completada Redirecionando');
  define('_MI_XASSET_ORDERC_REDDE','A página a que a ordem quando completa e seu redirecionamento de novo. Deixar o espaço em branco e será redirecionado para o padrão xAsset/index.php ');
  define('_MI_XASSET_ENCRYPT_KEY','Chave secreta de Encripitação');
  define('_MI_XASSET_ENCRYPT_KEYD','Esta chave é usada para encriptar dados e assim  proteger seus arquivos de video. Uma chave aleatória é gerada para você. ');
  define('_MI_XASSET_BANDWIDTH','Taxa para a largura de banda '); 
  define('_MI_XASSET_BANDWIDTHD','Ajustar a Banda (velocidade) em que o vídeo de FLV será tocado. O valor é kilobytes por segundo por cliente. '); 
  //admin menus
  define('_MI_XASSET_MENU_PREFERENCES','Preferências');
  define('_MI_XASSET_MENU_CHECK_TABLES','Verificar Tabelas');
  define('_MI_XASSET_MENU_MANAGE_APPLICATIONS','Gerenciar Aplicações');
  define('_MI_XASSET_MENU_MANAGE_LICENSES','Ger. Licenças');
  define('_MI_XASSET_MENU_MANAGE_STATS','Ger. Status de Download');
  define('_MI_XASSET_MENU_MANAGE_PACKAGES','Ger. Pacotes');
  define('_MI_XASSET_MENU_MANAGE_LINKS','Ger. Links');
  define('_MI_XASSET_MENU_MANAGE_REGIONS','Ger. Regiões');
  define('_MI_XASSET_MENU_MANAGE_COUNTRIES','Ger. Paises');
  define('_MI_XASSET_MENU_MANAGE_ZONES','Ger. Zonas');
  define('_MI_XASSET_MENU_MANAGE_TAXES','Ger. Taxas e Rates');
  define('_MI_XASSET_MENU_MANAGE_CURRENCIES','Ger. Moedas');
  define('_MI_XASSET_MENU_MANAGE_GATEWAYS','Ger. Gateways');
  define('_MI_XASSET_MENU_MANAGE_GATE_LOGS','Ver Logs de Gateway');
  define('_MI_XASSET_MENU_MANAGE_ORDERS','Ver Ordens');
  define('_MI_XASSET_MENU_MANAGE_MEMBERSHIP','Ger. Memberships');
  //template names
  define('_MI_XASSET_VERSION_ADMIN_INDEX','Página Incial do Admin');
  define('_MI_XASSET_VERSION_ADMIN_APP_MAINTENANCE','Admin - Manutenção de Aplicação');
  define('_MI_XASSET_VERSION_ADMIN_LICENCE_MAINTENANCE','Admin - Manutenção de Licença');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_MAINTENANCE','Admin - Manutenção de Pacotes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LICENSE_BLOCK','Admin - Adiciona bloco de Licença');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_APPLICATION','Admin - Licença por Aplicações');
  define('_MI_XASSET_VERSION_ADMIN_LICENSES_BY_CLIENTS','Admin - Licenças por Clientes');
  define('_MI_XASSET_VERSION_ADMIN_GROUPS_PACKAGES','Admin - Pacotes de Grupos e Pacotes');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_GROUP','Admin - Incluir Pacote e Grupos de blocos do Pacote');
  define('_MI_XASSET_VERSION_ADMIN_ADD_PACKAGE_BLOCK','Admin - Incluir Bloco de Pacote');
  define('_MI_XASSET_VERSION_ADMIN_APPLICATION_LINKS','Admin - Links da Aplicação');
  define('_MI_XASSET_VERSION_ADMIN_ADD_LINKS','Admin - Inluir Links da Aplicação');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_LINKS','Admin - Editar Links da Aplicação');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_APPLICATION','Admin Add/Edit Application Block');
  define('_MI_XASSET_VERSION_ADMIN_USERS_INDEX','Admin Users Index');
  define('_MI_XASSET_VERSION_ADMIN_ADDEDIT_USER','Admin Add/Edit User Block');
  define('_MI_XASSET_VERSION_ADMIN_EDIT_PACKAGE_GROUP','Admin Package Group Edit Page');
  define('_MI_XASSET_VERSION_ADMIN_PACKAGE_EDIT','Admin - Editar página do Pacote');
  define('_MI_XASSET_VERSION_ADMIN_DOWNLOAD_STATS_INDEX','Admin - Status de Download na página principal');
  define('_MI_XASSET_VERSION_INDEX_PAGE','Página inicial');
  define('_MI_XASSET_VERSION_LICENSE_INDEX','Página inicial de Licença');
  define('_MI_XASSET_VERSION_ERROR_PAGE','Erro na página');
  define('_MI_XASSET_VERSION_PACKAGE_INDEX','Página inicial de Pacote');
  define('_MI_XASSET_VERSION_EVALUATION_INDEX','Página inicial de Avaliação de Aplicações');
  define('_MI_XASSET_VERSION_COUNTRY_ADD','Admin - Adicionar País no Bloco');
  define('_MI_XASSET_VERSION_COUNTRY_INDEX','Admin - Página inicial do País');
  define('_MI_XASSET_VERSION_REGION_INDEX','Página inicial de Região');
  define('_MI_XASSET_VERSION_REGION_ADD','Incluir página de Região');
  define('_MI_XASSET_VERSION_ZONE_ADD','Admin - Incluir Zona no Bloco');
  define('_MI_XASSET_VERSION_ZONE_INDEX','Admin - Página inicial das Zonas');
  define('_MI_XASSET_VERSION_TAXRATES_INDEX','Admin - Página inicial de Taxes & Rates');
  define('_MI_XASSET_VERSION_TAX_CLASS_ADD','Admin - Incluir Classe de Taxa no Bloco');
  define('_MI_XASSET_VERSION_TAX_RATE_ADD','Admin - Inlui Tax Rate no Bloco');
  define('_MI_XASSET_VERSION_REGIONZONE_INDEX','Admin - Incluir Zona da Região no Bloco');
  define('_MI_XASSET_VERSION_APPLICATION_PRODUCT_ADD','Admin - Incluir Aplicação do produto no Bloco');
  define('_MI_XASSET_VERSION_CURRENCY_ADD','Admin - Incluir A moeda corrente no bloco ');
  define('_MI_XASSET_VERSION_CURRENCY_INDEX','Admin - Página inicial da Moeda corrente');
  define('_MI_XASSET_VERSION_GATEWAY_INDEX','Admin - Página inicial do Gateway de pagamento ');
  define('_MI_XASSET_VERSION_ORDER_STAGE1','Página de Pagamento - Etapa 1');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS','Página de Pagamento - Detalhes do Usuário');
  define('_MI_XASSET_VERSION_ORDER_USER_DETAILS_ADD','Página de Pagamento - Os detalhes do usuário incluir/editar no bloco ');
  define('_MI_XASSET_VERSION_ORDER_INDEX','Página inicial de Pagamento');
  define('_MI_XASSET_VERSION_ORDER_CART','Página inicial do carrinho de compras ');
  define('_MI_XASSET_VERSION_CONFIG','Admin - Página inicial de Configuração');
  define('_MI_XASSET_VERSION_ORDER_CHECKOUT','Página de caixa Geral do pagamento');
  define('_MI_XASSET_VERSION_GATEWAY_LOGS','Página de Logs do Gateway');
  define('_MI_XASSET_VERSION_GATEWAY_DET','Página de Detalhes dos Logs de Gateway');
  define('_MI_XASSET_VERSION_PRODUCT','Página do Produto');
  define('_MI_XASSET_VERSION_DOWNLOADS','Página do Meus Downloads');
  define('_MI_XASSET_VERSION_ORDER_TRACKING','Admin - Ordem que segue a página inicial');
  define('_MI_XASSET_VERSION_SUPPORT','Admin - Página inicial de Suporte');
  define('_MI_XASSET_VERSION_ORDER_DETAILS','Admin - Página de Detalhes do Pagamento');
  define('_MI_XASSET_VERSION_ADMIN_MEMBERSHIP','Admin - Página inicial do Associado / MemberShip');
  define('_MI_XASSET_VERSION_OEXTRA','Order Extra Gateway Information Page');
  define('_MI_XASSET_VERSION_SUBS','My Subscriptions index page');
  define('_MI_XASSET_VERSION_PLAYER','Bloco Video player');
  define('_MI_XASSET_VERSION_VIDEO','Página inicial de Video');
  define('_MI_XASSET_BLOCK_DOWNOPT','Bloco - Opção de melhores Downloads');
  define('_MI_XASSET_BLOCK_PICTOPT','Bloco - Opções de Aplicação de imagem');
  //blocks
  define('_MI_XASSET_CURRENCY','Moedas');
  define('_MI_XASSET_CURRENCYD','Escolha a sua moeda');
  define('_MI_XASSET_TOP','Top Downloads');
  define('_MI_XASSET_TOPD','Mostra os arquyivos de melhores downloaded/visualizações');
  define('_MI_XASSET_APP_PICS','Aplicação de Imagens');
  define('_MI_XASSET_APP_PICSD','Mostra uma aplicação com as definições da imagem');
  define('_MI_XASSET_APP_APPS','Aplicações');
  define('_MI_XASSET_APP_APPSD','Listar todas as aplicações no bloco');
  //submenu nams
  define('_MI_XASSET_SUBMENU_MY_DOWNLOAD','Download');
  define('_MI_XASSET_SUBMENU_MY_LICENSED','Minhas Licenças');
  define('_MI_XASSET_SUBMENU_EVALUATION','Informações');
  define('_MI_XASSET_SUBMENU_MY_CART','Meu Carrinho');
  define('_MI_XASSET_SUBMENU_MY_DETAILS','Meus Detalhes');
  define('_MI_XASSET_SUBMENU_MY_DOWNLOADS','Meus Downloads');
  define('_MI_XASSET_SUBMENU_MY_SUBS','Minhas subscrições ');
  //module xoops_version constants
  define('_MI_XASSET_MODULE_NAME','xasset - Distribuição Segura de Software');
  define('_MI_XASSET_MODULE_DESCRIPTION','Asset - Gerenciamento de Distribuição');
  //email temapltes constats
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFY','Cliente : Produto Pago');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYSBJ','Obrigado pela sua compra efetuada.');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYCAP','Avise-me quando um produto for comprado');
  define('_MI_XASSET_APP_NEW_PURCHASE_NOTIFYDSC','Enviar notificação a um cliente quando o produto for comprado');

  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFY','Admin : Pagamento de Produto');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYSBJ','O cliente comprou um produto .');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYCAP','Notificar-me quando um cliente compra um produto .');
  define('_MI_XASSET_APP_NEW_PURCHASE_ADMIN_NOTIFYDSC','Enviar ao admin uma notificação quando uma compra é feita ');
  
  define('_MI_XASSET_APP_NEW_USER_NOTIFY','Cliente : Email bem-vindo .');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYSBJ','Registo de Xasset.co.uk & informação do início de uma sessão ');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAP','Notificar o cliente da informação do registo & do início de uma sessão .');
  define('_MI_XASSET_APP_NEW_USER_NOTIFYCAPDSC','Enviar email ao novo usuário registado.'); 

  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFY','Cliente : Aviso de expiração de associado.');
  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFYSBJ','Seu associado está para expirar.');
  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFYCAP','Notificar o cliente quando o associado estiver para expirar .');
  define('_MI_XASSET_APP_EXPIRE_WARN_NOTIFYDSC','Enviar e-mail para o cliente quando o associado estiver para expirar.'); 

  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFY','Cliente : Associado Expirado.');
  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFYSBJ','Seu associado está expirado.');
  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFYCAP','Notifique-me quando um associado expirar.');
  define('_MI_XASSET_APP_EXPIRE_MEMBER_NOTIFYDSC','Enviar um e-mail para o cliente do associado quando expirar.');

  define('_MI_XASSET_ORDER_COMPLETE_NOTIFY','Cliente : Ordem Completa.');
  define('_MI_XASSET_ORDER_COMPLETE_NOTIFYSBJ','Sua ordem está completa.');
  define('_MI_XASSET_ORDER_COMPLETE_NOTIFYCAP','Notificar o cliente quando o pagamento for efetuado e estiver completo.');
  define('_MI_XASSET_ORDER_COMPLETE_NOTIFYDSC','Enviar um e-mail para o cliente quando o pagamento estiver completo.');

?>
