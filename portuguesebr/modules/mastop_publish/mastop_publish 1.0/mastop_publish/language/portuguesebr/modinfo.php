<?php
### =============================================================
### Mastop InfoDigital - Paixão por Internet
### =============================================================
### Arquivo de Tradução para Informações do Módulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital © 2003-2006
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id$
### =============================================================

//V1.0
define("MPU_MOD_NOME","Mastop Publish");
define("MPU_MOD_DESC","Crie páginas estáticas para seu site!");
define("MPU_MOD_DIR","mastop_publish");
define("MPU_MOD_TABELA1","mpu_mpb_mpublish");
define("MPU_MOD_TABELA2","mpu_fil_files");
define("MPU_MOD_TABELA3","mpu_med_media");
define("MPU_MOD_TABELA4","mpu_cfi_contentfiles");
define("MPU_MOD_TEMPLATE1","mpu_index.tpl.html");
define("MPU_MOD_TEMPLATE1_DESC","Layout da Página");
define("MPU_MOD_BLOCOS","Blocos");


define("MPU_MOD_BLOCO1","Menu");
define("MPU_MOD_BLOCO1_DESC","Menu em CSS com Submenus");
define("MPU_MOD_BLOCO1_FILE","mpu_menucss.bloco.php");
define("MPU_MOD_BLOCO1_SHOW","mpu_menucss_exibe");
define("MPU_MOD_BLOCO1_EDIT","mpu_menucss_edita");
define("MPU_MOD_BLOCO1_TEMPLATE","mpu_menucss.block.tpl.html");

define("MPU_MOD_BLOCO2","Navegação");
define("MPU_MOD_BLOCO2_DESC","Barra de Navegação");
define("MPU_MOD_BLOCO2_FILE","mpu_navigation.bloco.php");
define("MPU_MOD_BLOCO2_SHOW","mpu_navigation_exibe");
define("MPU_MOD_BLOCO2_EDIT","mpu_navigation_edita");

define("MPU_MOD_BLOCO3","Veja Também");
define("MPU_MOD_BLOCO3_DESC","Exibe as páginas que estão dentro da mesma categoria que a página atual");
define("MPU_MOD_BLOCO3_FILE","mpu_related.bloco.php");
define("MPU_MOD_BLOCO3_SHOW","mpu_related_exibe");
define("MPU_MOD_BLOCO3_EDIT","mpu_related_edita");
define("MPU_MOD_BLOCO3_TEMPLATE","mpu_related.block.tpl.html");


define("MPU_MOD_BLOCO4","Menu em Árvore");
define("MPU_MOD_BLOCO4_DESC","Menu em Árvore com Submenus");
define("MPU_MOD_BLOCO4_FILE","mpu_menutree.bloco.php");
define("MPU_MOD_BLOCO4_SHOW","mpu_menutree_exibe");
define("MPU_MOD_BLOCO4_EDIT","mpu_menutree_edita");
define("MPU_MOD_BLOCO4_TEMPLATE","mpu_menutree.block.tpl.html");


define("MPU_MOD_BLOCO5","Menu Horizontal");
define("MPU_MOD_BLOCO5_DESC","Menu Horizontal em CSS com Submenus");
define("MPU_MOD_BLOCO5_FILE","mpu_menuhor.bloco.php");
define("MPU_MOD_BLOCO5_SHOW","mpu_menuhor_exibe");
define("MPU_MOD_BLOCO5_EDIT","mpu_menuhor_edita");
define("MPU_MOD_BLOCO5_TEMPLATE","mpu_menuhor.block.tpl.html");

define("MPU_MOD_BUSCA_FUNC","mpu_mpublish_busca");
define("MPU_MOD_WYSIWYG","Usar editor visual para criar páginas?");
define("MPU_MOD_WYSIWYG_DESC","Com o editor visual (WYSIWYG) você pode criar páginas com todos os recursos em HTML de forma mais rápida, sem precisar saber programar.");
define("MPU_MOD_WYSIWYG_PATH","Caminho para o Editor");
define("MPU_MOD_WYSIWYG_BT1B","Botões do Editor - Início Linha 1");
define("MPU_MOD_WYSIWYG_BT1B_DESC","Botões que aparecerão no início da primeira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT1","Botões do Editor - Fim Linha 1");
define("MPU_MOD_WYSIWYG_BT1_DESC","Botões que aparecerão no fim da primeira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT2B","Botões do Editor - Início Linha 2");
define("MPU_MOD_WYSIWYG_BT2B_DESC","Botões que aparecerão no início da segunda linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT2","Botões do Editor - Fim Linha 2");
define("MPU_MOD_WYSIWYG_BT2_DESC","Botões que aparecerão no fim da segunda linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT3B","Botões do Editor - Início Linha 3");
define("MPU_MOD_WYSIWYG_BT3B_DESC","Botões que aparecerão no início da terceira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT3","Botões do Editor - Fim Linha 3");
define("MPU_MOD_WYSIWYG_BT3_DESC","Botões que aparecerão no fim da terceira linha do editor visual.");
define("MPU_MOD_WYSIWYG_BT4","Botões do Editor - Linha 4");
define("MPU_MOD_WYSIWYG_BT4_DESC","Botões que aparecerão na quarta linha do editor visual.");
define("MPU_MOD_WYSIWYG_PLUGINS","Plugins do Editor");
define("MPU_MOD_WYSIWYG_PLUGINS_DESC","Digite os plugins que serão usados no editor visual (separados por vírgulas)");
define("MPU_MOD_WYSIWYG_PATH_DESC","Digite o caminho (path) para o TinyMCE a partir do diretório raiz do seu site (SEM BARRA NO FINAL!).");
define("MPU_MOD_WYSIWYG_LANG","Linguagem padrão do Editor");
define("MPU_MOD_WYSIWYG_LANG_DESC","Digite o nome do arquivo de linguagem para o editor visual (Ex.: en). Para baixar mais pacotes de linguagem, <a href='http://tinymce.moxiecode.com/language.php' target='_blank'>clique aqui</a>.");
define("MPU_MOD_NOMES_ID","Usar Texto no lugar do ID na URL?");
define("MPU_MOD_NOMES_ID_DESC","Selecionando 'Sim', será usado o Texto do Menu no lugar do ID do conteúdo na URL. O sistema aceita ambos por padrão para trazer uma página. Esta configuração só afeta os links gerados pelo sistema.");
define("MPU_MOD_MMAXFILESIZE","Tamanho máximo para envio de mídias.");
define("MPU_MOD_MMAXFILESIZE_DESC","Valores em Kbytes");
define("MPU_MOD_MAXFILESIZE","Tamanho máximo para envio de arquivos.");
define("MPU_MOD_MAXFILESIZE_DESC","Valores em Kbytes");
define("MPU_MOD_GZIP","Usar compactação GZIP no Editor?");
define("MPU_MOD_GZIP_DESC","Se seu servidor suportar GZIP, este recurso usa um arquivo javascript compactado que faz com que o editor carregue mais rapidamente.<br /><b>Atenção:</b> Para que este recurso funcione corretamente, o diretório raiz do Editor Visual (definido acima, no parâmetro de configuração '".MPU_MOD_WYSIWYG_PATH."') deve ter permissões de escrita!");
define("MPU_MOD_CONTENTMIMES","Extensões permitidas no gerenciador de arquivos de conteúdo.");
define("MPU_MOD_CONTENTMIMES_DESC","Selecione as extensões permitidas para envio no gerenciador de arquivos de conteúdo. Mantenha a tecla <b>CTRL</b> pressionada para selecionar mais de uma opção.");
define("MPU_MOD_MIMETYPES","Extensões permitidas no gerenciador de arquivos.");
define("MPU_MOD_MIMETYPES_DESC","Selecione as extensões permitidas para envio no gerenciador de arquivos. Mantenha a tecla <b>CTRL</b> pressionada para selecionar mais de uma opção.");
define("MPU_MOD_WYSIWYG_FRMTDATA","Formato da Data para o Editor");
define("MPU_MOD_WYSIWYG_FRMTDATA_DESC","<b>%d</b> representa 'Dia', <b>%m</b> representa 'Mês' e <b>%Y</b> representa 'Ano'");
define("MPU_MOD_WYSIWYG_FRMTHORA","Formato da Data para o Editor");
define("MPU_MOD_WYSIWYG_FRMTHORA_DESC","<b>%H</b> representa 'Hora', <b>%M</b> representa 'Minuto' e <b>%S</b> representa 'Segundo'");
define("MPU_MOD_IFRAME_WIDTH","Largura para IFrames");
define("MPU_MOD_IFRAME_WIDTH_DESC","Defina a largura (em pixels) usada nas páginas com IFrame");
define("MPU_MOD_IFRAME_HEIGHT","Altura para IFrames");
define("MPU_MOD_IFRAME_HEIGHT_DESC","Defina a altura (em pixels) usada nas páginas com IFrame");
define("MPU_MOD_RELATED","Exibir links para páginas relacionadas no final de cada página?");
define("MPU_MOD_RELATED_DESC","Esta opção permite exibir links para páginas que estão na mesma categoria que a página atual. <br />Você pode desabilitar esta opção caso esteja usando o bloco 'Páginas Relacionadas'");
define("MPU_MOD_NAVIGATION","Exibir barra de navegação no topo das páginas?");
define("MPU_MOD_NAVIGATION_DESC","Esta opção possibilita a exibição da barra de navegação no topo das páginas. <br />Você pode desabilitar esta opção caso esteja usando o bloco 'Barra de Navegação'");
define("MPU_MOD_CAPTCHA","Utilizar CAPTCHA nos comentários?");
define("MPU_MOD_CAPTCHA_DESC","<a href='http://pt.wikipedia.org/wiki/CAPTCHA' target='_blank'>CAPTCHA</a> é uma técnica que solicita que o usuário escreva uma série de letras ou números que aparecem num quadro antes de enviar o comentário, para evitar que o sistema seja usado por máquinas que vasculham a internet (biblioteca GD é requerida).");
define("MPU_MOD_CAPTCHA_LABEL","Código de Segurança");
define("MPU_MOD_CAPTCHA_ERROR","Código de Segurança Inválido!<br /> Tente Novamente");
define("MPU_MOD_HIGHLIGHT_SEARCH","<b style='color: red'>Os seguintes termos de pesquisa foram destacados:</b> ");

// Administração - Menu
define('MPU_MOD_MENU_ADD','Adicionar Conteúdo');
define('MPU_MOD_MENU_LNK','Gerenciar Arquivos HTML');
define('MPU_MOD_MENU_LST','Gerenciar Conteúdos');
define('MPU_MOD_MENU_MED','Mídias');
define('MPU_MOD_MENU_GER','Gerenciar');
define('MPU_MOD_MENU_FIL','Arquivos');


//Module Paths
define('MPU_MEDIA_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/media");
define('MPU_MEDIA_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/media");
define('MPU_FILES_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/files");
define('MPU_FILES_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/files");
define('MPU_HTML_URL', XOOPS_URL."/modules/".MPU_MOD_DIR."/html");
define('MPU_HTML_PATH', XOOPS_ROOT_PATH."/modules/".MPU_MOD_DIR."/html");

//V1.1
define("MPU_MOD_CANEDIT","Os autores podem editar as próprias páginas?");
define("MPU_MOD_CANEDIT_DESC","Selecione 'sim' para que os autores (mesmo não estando no grupo de administradores) possam editar as próprias páginas.");
define("MPU_MOD_CANCREATE","Os autores podem criar subpáginas?");
define("MPU_MOD_CANCREATE_DESC","Selecione 'sim' para que os autores (mesmo não estando no grupo de administradores) possam criar subpáginas dentro das próprias páginas.");
define("MPU_MOD_CANDELETE","Os autores podem excluir as próprias páginas?");
define("MPU_MOD_CANDELETE_DESC","Selecione 'sim' para que os autores (mesmo não estando no grupo de administradores) possam excluir suas páginas.");

define("MPU_MOD_BLOCO6","Menu Páginas Relacionadas");
define("MPU_MOD_BLOCO6_DESC","Menu contendo páginas relacionadas à página atual");
define("MPU_MOD_BLOCO6_FILE","mpu_menurelated.bloco.php");
define("MPU_MOD_BLOCO6_SHOW","mpu_menurelated_exibe");
define("MPU_MOD_BLOCO6_EDIT","mpu_menurelated_edita");
define("MPU_MOD_BLOCO6_TEMPLATE","mpu_menurelated.block.tpl.html");


define("MPU_MOD_WYSIWYG_BKG","Usar fundo branco no editor?");
define("MPU_MOD_WYSIWYG_BKG_DESC","Ativando esta opção, o fundo do editor visual será sempre branco e não herdará as configurações do seu tema atual.");

define("MPU_MOD_HOME_ID","ID da Página Principal");
define("MPU_MOD_HOME_ID_DESC","Digite o ID da página que abrirá por padrão ao acessar o módulo. Deixe em branco para que a página principal seja sempre a última página adicionada.");