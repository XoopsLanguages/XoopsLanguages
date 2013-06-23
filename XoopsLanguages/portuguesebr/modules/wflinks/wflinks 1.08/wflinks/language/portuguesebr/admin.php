<?php
/**
 * $Id: admin.php v 1.06 2008/06/16 McDonald Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 2008/06/16
 * Developer: John N / mcdonald
 * Team: WF-Projects
 * Translations: GibaPhp /
 * Revisions: 
 * Licence: GNU
 * Format: UTF-8
 */

define("_AM_WFL_WARNINSTALL1","AVISO: O diretório %s existe no seu servidor. <br />por razões de segurança, você deve remover este diretório.");
define("_AM_WFL_WARNINSTALL2","AVISO: O arquivo %s existe no seu servidor. <br />por razões de segurança, você deve remover este diretório.");
define("_AM_WFL_WARNINSTALL3","AVISO: O diretorio %s não existe no seu servidor. <br />Este local é necessário para o WF-Links.");

define("_AM_WFL_MODULE_NAME","WF-Links");

define("_AM_WFL_BMODIFY","Modificar");
define("_AM_WFL_BDELETE","Apagar");
define("_AM_WFL_BCREATE","Criar");
define("_AM_WFL_BADD","Adicionar");
define("_AM_WFL_BAPPROVE","Aprovar");
define("_AM_WFL_BIGNORE","Ignorar");
define("_AM_WFL_BCANCEL","Cancelar");
define("_AM_WFL_BSAVE","Salvar");
define("_AM_WFL_BRESET","Limpar");
define("_AM_WFL_BMOVE","Mover links");
define("_AM_WFL_BUPLOAD","Enviar");
define("_AM_WFL_BDELETEIMAGE","Apagar imagens selecionadas");
define("_AM_WFL_BRETURN","Voltar!");
define("_AM_WFL_DBERROR","Erro ao acessar o banco de dados: Favor informar erro no site do WF-Project");
// Other Options
define("_AM_WFL_TEXTOPTIONS","Opções de texto:");
define("_AM_WFL_DISABLEHTML"," Desabilitar Tags HTML");
define("_AM_WFL_DISABLESMILEY"," Desabilitar icones de Smilie");
define("_AM_WFL_DISABLEXCODE"," Desabilitar BBcodes");
define("_AM_WFL_DISABLEIMAGES"," Desabilitar Imagens");
define("_AM_WFL_DISABLEBREAK"," Converter 'quebra de linha' ?");
define("_AM_WFL_UPLOADFILE","Link enviado com sucesso");
define("_AM_WFL_NOMENUITEMS","Nenhum sub-item dentro do menu");
// Admin Bread crumb
define("_AM_WFL_PREFS","Preferências");
define("_AM_WFL_BUPDATE","Atualizar módulo");
define("_AM_WFL_BINDEX","Página principal");
define("_AM_WFL_BPERMISSIONS","Permissões");
// define("_AM_WFL_BLOCKADMIN","Blocos");
define("_AM_WFL_BLOCKADMIN","Blocos");
define("_AM_WFL_GOMODULE","Ir para o módulo");
define("_AM_WFL_ABOUT","Sobre");
// Admin Summary
define("_AM_WFL_SCATEGORY","Categoria: <strong>%s</strong> ");
define("_AM_WFL_SFILES","Links: <strong>%s</strong> ");
define("_AM_WFL_SNEWFILESVAL","Enviados: <strong>%s</strong> ");
define("_AM_WFL_SMODREQUEST","Modificados: <strong>%s</strong> ");
define("_AM_WFL_SREVIEWS","Revisões: ");

// Admin Main Menu
define("_AM_WFL_MCATEGORY","Administração de categorias");
define("_AM_WFL_MLINKS","Administrar links");
define("_AM_WFL_MLISTBROKEN","Lista de links quebrados");
define("_AM_WFL_MLISTPINGTIMES","Lista de links Pingtime");
define("_AM_WFL_INDEXPAGE","Página principal da administração");
define("_AM_WFL_MCOMMENTS","Comentários");
define("_AM_WFL_MVOTEDATA","Votações");
define("_AM_WFL_MUPLOADS","Enviar imagem");

// Catgeory defines
define("_AM_WFL_CCATEGORY_CREATENEW","Criar nova categoria");
define("_AM_WFL_CCATEGORY_MODIFY","Modificar categoria");
define("_AM_WFL_CCATEGORY_MOVE","Mover links da categoria");
define("_AM_WFL_CCATEGORY_MODIFY_TITLE","Título da categoria:");
define("_AM_WFL_CCATEGORY_MODIFY_FAILED","Movimentação Falhou: Categoria não pode ser movida");
define("_AM_WFL_CCATEGORY_MODIFY_FAILEDT","Movimentação Falhou: Categoria não encontrada");
define("_AM_WFL_CCATEGORY_MODIFY_MOVED","Links movidos e categoria apagada");
define("_AM_WFL_CCATEGORY_CREATED","Nova categoria criada e banco de dados atualizado com sucesso");
define("_AM_WFL_CCATEGORY_MODIFIED","A Categoria escolhida foi modificada e o banco de dados foi atualizado com sucesso");
define("_AM_WFL_CCATEGORY_DELETED","A Categoria escolhida foi removida e o banco de dados foi atualizado com sucesso");
define("_AM_WFL_CCATEGORY_AREUSURE","ATENÇãO: Você tem certeza que deseja apagar esta categoria e TODOS os seus arquivos e comentários?");
define("_AM_WFL_CCATEGORY_NOEXISTS","Você precisa antes criar uma Categoria para incluir um link.");
define("_AM_WFL_FCATEGORY_GROUPPROMPT","Permissões de Acesso nas Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem acessar esta categoria.</span></div>");
define("_AM_WFL_FCATEGORY_SUBGROUPPROMPT","Permissões de Acesso nas Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem enviar novos links para esta categoria.</span></div>");
define("_AM_WFL_FCATEGORY_MODGROUPPROMPT","Permissões de Acesso nas Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem moderar esta categoria.</span></div>");

define("_AM_WFL_FCATEGORY_TITLE","Título da categoria:");
define("_AM_WFL_FCATEGORY_WEIGHT","Importância da categoria:");
define("_AM_WFL_FCATEGORY_SUBCATEGORY","Colocar como sub-categoria:");
define("_AM_WFL_FCATEGORY_CIMAGE","Selecionar imagem da categoria:");
define("_AM_WFL_FCATEGORY_DESCRIPTION","Descrição da categoria:");
define("_AM_WFL_FCATEGORY_SUMMARY","Sumário da categoria:");
/**
 * Index page Defines
 */
define("_AM_WFL_IPAGE_UPDATED","Página principal Modificada e o banco de dados foi atualizado com sucesso!");
define("_AM_WFL_IPAGE_INFORMATION","Informação da página principal");
define("_AM_WFL_IPAGE_MODIFY","Modificar página principal");
define("_AM_WFL_IPAGE_CIMAGE","Selecione imagem do índice:");
define("_AM_WFL_IPAGE_CTITLE","Título:");
define("_AM_WFL_IPAGE_CHEADING","Cabeçalho:");
define("_AM_WFL_IPAGE_CHEADINGA","Alinhamento do cabeçalho:");
define("_AM_WFL_IPAGE_CFOOTER","Rodapé:");
define("_AM_WFL_IPAGE_CFOOTERA","Alinhamento do rodapé:");
define("_AM_WFL_IPAGE_CLEFT","Alinhar na esquerda");
define("_AM_WFL_IPAGE_CCENTER","Alinhar ao centro");
define("_AM_WFL_IPAGE_CRIGHT","Alinhar na direita");
/**
 * Permissions defines
 */
define("_AM_WFL_PERM_MANAGEMENT","Administração de Permissões");
define("_AM_WFL_PERM_PERMSNOTE","<div><b>NOTA:</b> Mesmo que as permissões sejam definidas corretamente aqui, um grupo pode não ter acesso ao Módulo ou aos Blocos se não definir o acesso ao módulo. Para fazer isto, vá até a <b>Administração do Sistema > Grupos </b>, escolha o grupo apropriado e dê-lhe acesso ao módulo.</div>");
define("_AM_WFL_PERM_CPERMISSIONS","Permissões de Categoria");
define("_AM_WFL_PERM_CSELECTPERMISSIONS","Escolha as categorias que cada grupo pode ver");
define("_AM_WFL_PERM_CNOCATEGORY","Não foi possível ajustar permissões porque não há categorias criadas!");
define("_AM_WFL_PERM_FPERMISSIONS","Permissões de links");
define("_AM_WFL_PERM_FNOFILES","Não foi possível ajustar permissões porque não há links!");
define("_AM_WFL_PERM_FSELECTPERMISSIONS","Escolha os links que cada grupo pode ver");
/**
 * Upload defines
 */
define("_AM_WFL_LINK_IMAGEUPLOAD","Imagem enviada com sucesso para o servidor.");
define("_AM_WFL_LINK_NOIMAGEEXIST","Erro: Não foi selecionado nenhum arquivo!");
define("_AM_WFL_LINK_IMAGEEXIST","Imagem já existe na pasta de upload!");
define("_AM_WFL_LINK_FILEDELETED","Arquivo foi removido.");
define("_AM_WFL_LINK_FILEERRORDELETE","Erro ao remover link: link não encontrado.");
define("_AM_WFL_LINK_NOFILEERROR","Erro ao remover link: nenhum link selecionado.");
define("_AM_WFL_LINK_DELETEFILE","ATENÇãO: Você tem certeza que deseja apagar esta imagem de link.");
define("_AM_WFL_LINK_IMAGEINFO","Status do Servidor");
define("_AM_WFL_LINK_SPHPINI","<b>Informação retirada do link PHP ini:</b>");
define("_AM_WFL_LINK_SAFEMODESTATUS","Modo Seguro: ");
define("_AM_WFL_LINK_REGISTERGLOBALS","Registros Globais: ");
define("_AM_WFL_LINK_SERVERUPLOADSTATUS","Status de Uploads: ");
define("_AM_WFL_LINK_MAXUPLOADSIZE","Tamanho Max de Upload: ");
define("_AM_WFL_LINK_MAXPOSTSIZE","Tamanho Max de Mensagem: ");
define("_AM_WFL_LINK_SAFEMODEPROBLEMS"," (Isto pode causar problemas)");
define("_AM_WFL_LINK_GDLIBSTATUS","Suporte Biblioteca GD: ");
define("_AM_WFL_LINK_GDLIBVERSION","Versão Biblioteca GD: ");
define("_AM_WFL_LINK_GDON","<b>Ativo</b> (Thumbnails Disponíveis)");
define("_AM_WFL_LINK_GDOFF","<b>Inativo</b> (Nenhum Thumbnail Disponível)");
define("_AM_WFL_LINK_OFF","<b>OFF</b>");
define("_AM_WFL_LINK_ON","<b>ON</b>");
define("_AM_WFL_LINK_CATIMAGE","Imagens de Categoria");
define("_AM_WFL_LINK_SCREENSHOTS","Imagens de ScreenShots");
define("_AM_WFL_LINK_MAINIMAGEDIR","Imagens Principais");
define("_AM_WFL_LINK_FCATIMAGE","Caminho para Imagens de Categoria");
define("_AM_WFL_LINK_FSCREENSHOTS","Caminho para Imagens de Screenshot");
define("_AM_WFL_LINK_FMAINIMAGEDIR","Caminho para Imagens Principais");
define("_AM_WFL_LINK_FUPLOADIMAGETO","Enviar Imagem: ");
define("_AM_WFL_LINK_FUPLOADPATH","Caminho do Upload: ");
define("_AM_WFL_LINK_FUPLOADURL","URL de Upload : ");
define("_AM_WFL_LINK_FOLDERSELECTION","Selecione Destino de Upload:");
define("_AM_WFL_LINK_FSHOWSELECTEDIMAGE","Mostrar Imagem Selecionada:");
define("_AM_WFL_LINK_FUPLOADIMAGE","Enviar nova imagem para a pasta selecionada:");

// Main Index defines
define("_AM_WFL_MINDEX_LINKSUMMARY","Sumário de administração do módulo");
define("_AM_WFL_MINDEX_PUBLISHEDLINK","Links publicados:");
define("_AM_WFL_MINDEX_AUTOPUBLISHEDLINK","Links auto publicados:");
define("_AM_WFL_MINDEX_AUTOEXPIRE","Links auto expirados:");
define("_AM_WFL_MINDEX_EXPIRED","Links expirados:");
define("_AM_WFL_MINDEX_OFFLINELINK","Links Offline: ");
define("_AM_WFL_MINDEX_ID","ID");
define("_AM_WFL_MINDEX_TITLE","Título do link");
define("_AM_WFL_MINDEX_POSTER","Enviado por");
define("_AM_WFL_MINDEX_ONLINE","Status");
define("_AM_WFL_MINDEX_ONLINESTATUS","Online Status");
define("_AM_WFL_MINDEX_PUBLISH","Publicar");
define("_AM_WFL_MINDEX_PUBLISHED","Publicado");
define("_AM_WFL_MINDEX_EXPIRE","Expirado");
define("_AM_WFL_MINDEX_NOTSET","Data não ajustada");
define("_AM_WFL_MINDEX_SUBMITTED","Data do envio");

define("_AM_WFL_MINDEX_ACTION","Ação");
define("_AM_WFL_MINDEX_NOLINKSFOUND","Aviso: Nenhum link corresponde com esta caracteristica");
define("_AM_WFL_MINDEX_PAGE","<b>Página:<b> ");
define('_AM_WFL_MINDEX_PAGEINFOTXT','<ul><li>WF-links - Detalhes da página principal.</li><li>Pode facilmente mudar o logotipo, topo, texto de cabeçalho e rodapé.</li></ul><br /><br />AVISO: A imagem de logo vai ser usada em todo o módulo WF-links.');
define("_AM_WFL_MINDEX_RESPONSE","Tempo de resposta");
// Submitted Links
define("_AM_WFL_SUB_SUBMITTEDFILES","Links enviados");
define("_AM_WFL_SUB_FILESWAITINGINFO","Informação de link em espera");
define("_AM_WFL_SUB_FILESWAITINGVALIDATION","Links esperando validação: ");
define("_AM_WFL_SUB_APPROVEWAITINGFILE","<b>Aprovar</b> informações de novo link sem validação.");
define("_AM_WFL_SUB_EDITWAITINGFILE","<b>Editar</b> informações do novo link e aprovação.");
define("_AM_WFL_SUB_DELETEWAITINGFILE","<b>Apagar</b> informações do novo link.");
define("_AM_WFL_SUB_NOFILESWAITING","não há links com estas características");
define("_AM_WFL_SUB_NEWFILECREATED","Novo link criado e banco de dados atualizado com sucesso!");
// Vote Information
define("_AM_WFL_VOTE_RATINGINFOMATION","Informação de votações");
define("_AM_WFL_VOTE_TOTALVOTES","Total de votos: ");
define("_AM_WFL_VOTE_REGUSERVOTES","Votos de membros registrados: %s");
define("_AM_WFL_VOTE_ANONUSERVOTES","Votos de membros anônimos: %s");
define("_AM_WFL_VOTE_USER","Membro");
define("_AM_WFL_VOTE_IP","IP");
define("_AM_WFL_VOTE_DATE","Votado a");
define("_AM_WFL_VOTE_RATING","Pontuação");
define("_AM_WFL_VOTE_NOREGVOTES","Nenhum voto de membro");
define("_AM_WFL_VOTE_NOUNREGVOTES","Nenhum voto de anônimos");
define("_AM_WFL_VOTE_VOTEDELETED","Votação deletada.");
define("_AM_WFL_VOTE_ID","ID");
define("_AM_WFL_VOTE_FILETITLE","Título do link");
define("_AM_WFL_VOTE_DISPLAYVOTES","Informação da data da votação");
define("_AM_WFL_VOTE_NOVOTES","nenhum voto para mostrar");
define("_AM_WFL_VOTE_DELETE","Apagar votação");
define("_AM_WFL_VOTE_DELETEDSC","<b>Apagar</b> a votação selecionada do banco de dados.");
define("_AM_WFL_VOTEDELETED","votação selecionada apagada e banco de dados atualizado");

define("_AM_WFL_VOTE_USERAVG","Média de votos");
define("_AM_WFL_VOTE_TOTALRATE","Total de Votos");
define("_AM_WFL_VOTE_MAXRATE","Máximo de votos");
define("_AM_WFL_VOTE_MINRATE","Minimo de votos");
define("_AM_WFL_VOTE_MOSTVOTEDTITLE","Mais votados");
define("_AM_WFL_VOTE_LEASTVOTEDTITLE","Menos votados");
define("_AM_WFL_VOTE_MOSTVOTERSUID","maioria dos eleitores ativos");
define("_AM_WFL_VOTE_REGISTERED","Votos registrados");
define("_AM_WFL_VOTE_NONREGISTERED","Votos anônimos");
// Modifications
define("_AM_WFL_MOD_TOTMODREQUESTS","Total de pedidos de modificação: ");
define("_AM_WFL_MOD_MODREQUESTS","Links modificados");
define("_AM_WFL_MOD_MODREQUESTSINFO","Informações de links modificados");
define("_AM_WFL_MOD_MODID","ID");
define("_AM_WFL_MOD_MODTITLE","Título");
define("_AM_WFL_MOD_MODPOSTER","Mensagem original: ");
define("_AM_WFL_MOD_DATE","Enviado");
define("_AM_WFL_MOD_NOMODREQUEST","Não há pedidos que correspondem a estas características");
define("_AM_WFL_MOD_TITLE","Título do link: ");
define("_AM_WFL_MOD_LID","ID do link: ");
define("_AM_WFL_MOD_CID","Categoria: ");
define("_AM_WFL_MOD_URL","Url do link: ");
define("_AM_WFL_MOD_PUBLISHER","Publicado por: ");
define("_AM_WFL_MOD_FORUMID","Fórum: ");
define("_AM_WFL_MOD_SCREENSHOT","Screenshot: ");
define("_AM_WFL_MOD_HOMEPAGE","Home Page: ");
define("_AM_WFL_MOD_HOMEPAGETITLE","Título da Home Page: ");
define("_AM_WFL_MOD_SHOTIMAGE","Screenshot: ");
define("_AM_WFL_MOD_DESCRIPTION","Descrição: ");
define("_AM_WFL_MOD_MODIFYSUBMITTER","Enviado por: ");
define("_AM_WFL_MOD_MODIFYSUBMIT","Enviar");
define("_AM_WFL_MOD_PROPOSED","Detalhes propostos");
define("_AM_WFL_MOD_ORIGINAL","Detalhes originais");
define("_AM_WFL_MOD_REQDELETED","Pedido de modificação removido do banco de dados");
define("_AM_WFL_MOD_REQUPDATED","Link selecionado modificado e banco de dados atualizado");
define('_AM_WFL_MOD_VIEW','Ver');
// Link management
define("_AM_WFL_LINK_ID","ID do link: ");
define("_AM_WFL_LINK_IP","IP dos Uploaders: ");
define("_AM_WFL_LINK_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extensões permitidas na administração de links</b>:</div>");
define("_AM_WFL_LINK_MODIFYFILE","Modificar informações do link");
define("_AM_WFL_LINK_CREATENEWFILE","Criar novo link");
define("_AM_WFL_LINK_TITLE","Título do link: ");
define("_AM_WFL_LINK_DLURL","URL do Link: ");
define("_AM_WFL_LINK_DIRCA"," Avaliação do conteãºdo: ");
define("_AM_WFL_LINK_DESCRIPTION","Descrição do link: ");
define("_AM_WFL_LINK_CATEGORY","Categoria principal do link: ");
define("_AM_WFL_LINK_FILESSTATUS"," colocar link como offline?<br /><br /><span style='font-weight: normal;'>o link não será visto pelos usuários.</span>");
define("_AM_WFL_LINK_SETASUPDATED"," Colocar link como atualizado?<br /><br /><span style='font-weight: normal;'>o link ficará com o ícone de atualizado</span>");
define("_AM_WFL_LINK_SHOTIMAGE","ScreenShot do Link: ");
define("_AM_WFL_LINK_DISCUSSINFORUM","Discutir link no fórum?");
define("_AM_WFL_LINK_PUBLISHDATE","Data de publicação do link:");
define("_AM_WFL_LINK_EXPIREDATE","Data de expiração do link:");
define("_AM_WFL_LINK_CLEARPUBLISHDATE","<br /><br />Remover data de publicação:");
define("_AM_WFL_LINK_CLEAREXPIREDATE","<br /><br />Remover data de expiração:");
define("_AM_WFL_LINK_PUBLISHDATESET"," Data de publicação atual: ");
define("_AM_WFL_LINK_SETDATETIMEPUBLISH"," Inserir data/Tempo de publicação");
define("_AM_WFL_LINK_SETDATETIMEEXPIRE"," Inserir data/Tempo de expiração");
define("_AM_WFL_LINK_SETPUBLISHDATE","<b>Inserir data em que deverá ser Publicado: </b>");
define("_AM_WFL_LINK_SETNEWPUBLISHDATE","<b>Nova data em que deverá ser Publicado: </b><br />Publicado a:");
define("_AM_WFL_LINK_SETPUBDATESETS","<b>Data de Futura Publicação: </b><br />Publicar na data:");
define("_AM_WFL_LINK_EXPIREDATESET"," Data de Expiração Atual: ");
define("_AM_WFL_LINK_SETEXPIREDATE","<b>Inserir data que deverá Expirar: </b>");
define("_AM_WFL_LINK_DELEDITMESS","Apagar relatório de link quebrado?<br /><br /><span style='font-weight: normal;'>Quando você escolher <b>SIM</b> O relatório de erro será apagado e você confirmará que o link está funcionando novamente!</span>");
define("_AM_WFL_LINK_MUSTBEVALID","ScreenShot precisa possuir um formato válido e estar na pasta %s (ex. shot.gif). Deixe em branco se não houver ScreenShot.");
define("_AM_WFL_LINK_EDITAPPROVE","Aprovar link:");
define("_AM_WFL_LINK_NEWFILEUPLOAD","Novo link criado e banco de dados atualizado!");
define("_AM_WFL_LINK_FILEMODIFIEDUPDATE","Link escolhido foi modificado e banco de dados atualizado!");
define("_AM_WFL_LINK_REALLYDELETEDTHIS","Apagar o link selecionado?");
define("_AM_WFL_LINK_FILEWASDELETED","Link %s apagado corretamente do banco de dados!");
define("_AM_WFL_LINK_FILEAPPROVED","Link aprovado e banco de dados atualizado!");
define("_AM_WFL_LINK_CREATENEWSSTORY","<b>Criar notícia com base neste link</b>");
define("_AM_WFL_LINK_SUBMITNEWS","Enviar novo link como notícia?");
define("_AM_WFL_LINK_NEWSCATEGORY","Selecione a categoria de Notícias para a qual deve ser enviada:");
define("_AM_WFL_LINK_NEWSTITLE","Título de Notícia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco ou use o título do link</span></div>");
define("_AM_WFL_LINK_PUBLISHER","Nome do link publicado: ");

/**
 * Broken links defines
 */
define("_AM_WFL_SBROKENSUBMIT","Quebrado: <strong>%s</strong> ");
define("_AM_WFL_BROKEN_FILE","Relatório de link quebrado");
define("_AM_WFL_BROKEN_FILEIGNORED","Relatório de link quebrado ignorado e removido do banco de dados!");
define("_AM_WFL_BROKEN_NOWACK","Status recebido alterado e banco de dados atualizado!");
define("_AM_WFL_BROKEN_NOWCON","Status Atual modificado e banco de dados atualizado!");
define("_AM_WFL_BROKEN_REPORTINFO","Informação do Relatório de link Quebrado");
define("_AM_WFL_BROKEN_REPORTSNO","Relatórios em Espera:");
define("_AM_WFL_BROKEN_IGNOREDESC","<b>Ignorar</b> o relatório será ignorado e removido.");
define("_AM_WFL_BROKEN_DELETEDESC","<b>Apagar</b> o link e o relatório.");
define("_AM_WFL_BROKEN_EDITDESC","<b>Editar</b> o link para corrigir este problema.");
define("_AM_WFL_BROKEN_ACKDESC","<b>Recebido</b> declara ter recebido o relatório.");
define("_AM_WFL_BROKEN_CONFIRMDESC","<b>Confirmado</b> confirma o relatório recebido.");
define("_AM_WFL_BROKEN_ACKNOWLEDGED","Reconhecido");
define("_AM_WFL_BROKEN_DCONFIRMED","Confirmado");

define("_AM_WFL_BROKEN_ID","ID");
define("_AM_WFL_BROKEN_TITLE","Título");
define("_AM_WFL_BROKEN_REPORTER","Informado por");
define("_AM_WFL_BROKEN_FILESUBMITTER","Enviado por");
define("_AM_WFL_BROKEN_DATESUBMITTED","Data de Envio");
define("_AM_WFL_BROKEN_ACTION","Ação");
define("_AM_WFL_BROKEN_NOFILEMATCH","Não existem Relatórios com estas características");
define("_AM_WFL_BROKENFILEDELETED","Link removido e Relatório apagado do Banco de Dados");
/**
 * About defines
 */
define("_AM_WFL_BY","por");
// block defines
define("_AM_WFL_BADMIN","Administração de Blocos");
define("_AM_WFL_BLKDESC","Descrição");
define("_AM_WFL_TITLE","Título");
define("_AM_WFL_SIDE","Alinhamento");
define("_AM_WFL_WEIGHT","Importância");
define("_AM_WFL_VISIBLE","Visível");
define("_AM_WFL_ACTION","Ação");
define("_AM_WFL_SBLEFT","Esquerda");
define("_AM_WFL_SBRIGHT","Direita");
define("_AM_WFL_CBLEFT","Centro-Esq");
define("_AM_WFL_CBRIGHT","Centro-Dir");
define("_AM_WFL_CBCENTER","Centro-Centro");
define("_AM_WFL_ACTIVERIGHTS","Direito de Ativar");
define("_AM_WFL_ACCESSRIGHTS","Direito de Acessar");
// image admin icon
define("_AM_WFL_ICO_EDIT","Editar este item");
define("_AM_WFL_ICO_DELETE","Apagar este item");
define("_AM_WFL_ICO_RESOURCE","Editar este recurso");

define("_AM_WFL_ICO_ONLINE","Online");
define("_AM_WFL_ICO_OFFLINE","Offline");
define("_AM_WFL_ICO_APPROVED","Aprovado");
define("_AM_WFL_ICO_NOTAPPROVED","Não aprovado");

define("_AM_WFL_ICO_LINK","Link Correspondente");
define("_AM_WFL_ICO_URL","Adicionar URL Correspondente");
define("_AM_WFL_ICO_ADD","Adicionar");
define("_AM_WFL_ICO_APPROVE","Aprovar");
define("_AM_WFL_ICO_STATS","Estatísticas");
define("_AM_WFL_ICO_VIEW","Veja este item");

define("_AM_WFL_ICO_IGNORE","Ignorar");
define("_AM_WFL_ICO_ACK","Relatório de Link quebrado Recebido");
define("_AM_WFL_ICO_REPORT","Receber Relatório de Link Quebrado?");
define("_AM_WFL_ICO_CONFIRM","Relatório de Link Quebrado Confirmado!");
define("_AM_WFL_ICO_CONBROKEN","Confirmar Relatório de Link Quebrado?");
define("_AM_WFL_ICO_RES","Editar recurso/Links para este item");
define("_AM_WFL_MOD_URLRATING","Avaliação do conteãºdo na internet:");
// Alternate category
define("_AM_WFL_ALTCAT_CREATEF","Adicionar categoria alternativa");
define("_AM_WFL_MALTCAT","Administrar categoria alternativa");
define("_AM_WFL_ALTCAT_MODIFYF","Administrar categoria alternativa");
define("_AM_WFL_ALTCAT_INFOTEXT","<ul><li>As categorias alternativas podem ser adicionadas ou removidas facilmente através deste formulário.</li></ul>");
define('_AM_WFL_ALTCAT_CREATED','Categorias alternativas forão salvas!');

define("_AM_WFL_MRESOURCES","Administração de recurso");
define("_AM_WFL_RES_CREATED","Administração de recurso");
define("_AM_WFL_RES_ID","ID");
define("_AM_WFL_RES_DESC","Descrição");
define("_AM_WFL_RES_NAME","Nome do recurso");
define("_AM_WFL_RES_TYPE","Tipo do recurso");
define("_AM_WFL_RES_USER","Membro");
define("_AM_WFL_RES_CREATEF","Adicionar recurso");
define("_AM_WFL_RES_MODIFYF","Modificar recurso");
define("_AM_WFL_RES_NAMEF","Nome do recurso:");
define("_AM_WFL_RES_DESCF","Descrição do recurso:");
define("_AM_WFL_RES_URLF","URL do recurso:");
define("_AM_WFL_RES_ITEMIDF","ID do item:");
define("_AM_WFL_RES_INFOTEXT","<ul><li>Novos recursos podem ser adicionados, editados ou removidos facilmente através deste formulário.</li>
	<li>Listar todos os recursos ligados ao link</li>
	<li>modificar nome do recurso e descrição</li></ul>
	");
define("_AM_WFL_LISTBROKEN","Exibir os links que talvez estejam quebrados. OBS: Estes resultados podem não ser exatos e devem ser conferidos.<br /><br />Por favor, verifique a existência do link antes de qualquer ação.<br /><br />");
define("_AM_WFL_PINGTIMES","Exibir primeiramente o tempo de resposta para cada link. <br /><br />OBS: Estes resultados podem não ser exatos e devem ser conferidos.<br /><br />");

define("_AM_WFL_NO_FORUM","Nenhum fórum selecionado");

define("_AM_WFL_PERM_RATEPERMISSIONS","Permissões de avaliação");
define("_AM_WFL_PERM_RATEPERMISSIONS_TEXT","Selecione os grupos que poderão votar nas categorias selecionadas.");

define("_AM_WFL_PERM_AUTOPERMISSIONS","Auto Aprovar Links");
define("_AM_WFL_PERM_AUTOPERMISSIONS_TEXT","Selecione os grupos que terão novos link aprovados sem intervenção do administrador.");

define("_AM_WFL_PERM_SPERMISSIONS","Enviar permissões");
define("_AM_WFL_PERM_SPERMISSIONS_TEXT","Selecione os grupos que poderão enviar novos links para a categoria selecionada.");

define("_AM_WFL_PERM_APERMISSIONS","Grupo de moderadores");
define("_AM_WFL_PERM_APERMISSIONS_TEXT","Selecione os grupos que terão privilégios de moderação para a categoria selecionada.");

// added by McDonald
define("_AM_WFL_COUNTRY","País:");
define("_AM_WFL_KEYWORDS","Palavra chave:");
define("_AM_WFL_KEYWORDS_NOTE","<i>Palavra chave pode ser separada por virgula (Palavra chave1, Palavra chave2).</i>");
define("_AM_WFL_CHECKURL","Check URL");
define("_AM_WFL_CATTITLE","Categoria");
define("_AM_WFL_LINK_GOOGLEMAP","Google Maps");
define("_AM_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_AM_WFL_LINK_MSLIVEMAP","MS Live Maps");
define("_AM_WFL_LINK_CHECKMAP","Verificar mapa");
define("_AM_WFL_STREET1","Rua 1");
define("_AM_WFL_STREET2","Rua 2 (opcional)");
define("_AM_WFL_TOWN","Cidade");
define("_AM_WFL_STATE","Estado");
define("_AM_WFL_ZIPCODE","CEP");
define("_AM_WFL_TELEPHONE","Telefone");
define("_AM_WFL_FAX","Fax");

// Version 1.05 RC2
define("_AM_WFL_WARNINSTALL4","<b>AVISO:</b> <u>Pasta</u> %s não tem permissão de escrita/gravação. <br />Essa pasta deve ser gravável (CHMOD 777) para WF-Links.");
// Version 1.05 RC5
define("_AM_WFL_VOIP","VoIP");
define("_AM_WFL_LINK_SUBMITTER","Nome do apresentador do Link: ");
define("_AM_WFL_MOBILE","Mobile");
define("_AM_WFL_CATSPONSOR","Escolha a categoria do Patrocinador:");
define("_AM_WFL_CATSPONSORDSC","Se você selecionar um id do banner de clientes a partir do formulário abaixo não serão salvos!");
define("_AM_WFL_BANNER","Banner");
define("_AM_WFL_FBANNER","Banner");
define("_AM_WFL_BANNERID","Escolha o ID do Banner:");
define("_AM_WFL_BANNERIDDSC","Se você tiver selecionado um cliente, sob a forma acima do banner id não serão salvos!");

// Version 1.05 RC6
define("_AM_WFL_VAT","Reg. VAT Num.");
define("_AM_WFL_VATWIKI","Para maiores informações veja no <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a> (Este recurso não se aplica no brasil neste momento)");
define("_AM_WFL_EMAIL","E-Mail");
define("_AM_WFL_ICO_EXPIRE","Expirado");
define("_AM_WFL_LINK_NORESPONSE", 'Sem resposta');
define("_AM_WFL_LINK_CREATEADDRESS", '&nbsp;<b>Formulário de Endereços</b>');
define("_AM_WFL_LINK_MISCLINKSETTINGS", '&nbsp;<b>Várias configurações de Link</b>');

// Version 1.06 RC1
define("_AM_WFL_READWRITEERROR","Você não escolheu um arquivo para fazer o upload ou o servidor não tem permissões suficientes para ler/escrever para carregar este arquivo!");
define("_AM_WFL_INVALIDFILESIZE","Tamanho do arquivo inválido");
define("_AM_WFL_FILENAMEEMPTY","Nome do arquivo está vazio");
define("_AM_WFL_NOFILEUPLOAD","Nenhum arquivo carregado, isto é µm erro");
define("_AM_WFL_UPLOADERRORZERO","Houve um problema com seu upload. Erro: 0");
define("_AM_WFL_UPLOADERRORONE","O arquivo que você está tentando carregar é muito grande. Erro: 1");
define("_AM_WFL_UPLOADERRORTWO","O arquivo que você está tentando carregar é muito grande. Erro: 2");
define("_AM_WFL_UPLOADERRORTHREE","O arquivo que você está tentando carregar apenas foi carregado parcialmente. Erro: 3");
define("_AM_WFL_UPLOADERRORFOUR","Nenhum arquivo selecionado para upload. Erro: 4");
define("_AM_WFL_UPLOADERRORFIVE","Nenhum arquivo selecionado para upload. Erro: 5");
define("_AM_WFL_NOUPLOADDIR","O Diretório para Enviar (upload) não foi definido");
define("_AM_WFL_FAILOPENDIR","Falha na abertura diretório: ");
define("_AM_WFL_FAILOPENDIRWRITEPERM","Falha na abertura do diretório com permissões de escrita: ");
define("_AM_WFL_FILESIZEMAXSIZE","Tamanho do arquivo: %u. O tamanho máximo permitido éº %u");
define("_AM_WFL_FILESIZEMAXWIDTH","Largura do Arquivo: %u. Largura máxima permitida éº %u");
define("_AM_WFL_FILESIZEMAXHEIGHT","Altura do Arquivo: %u. A altura máxima permitida éº %u");
define("_AM_WFL_MIMENOTALLOW","Tipo MIME não permitido: ");
define("_AM_WFL_FAILEDUPLOADING","Falhou carregamento do arquivo: ");
define("_AM_WFL_FILE","Arquivo ");
define("_AM_WFL_ALREADYEXISTTRYAGAIN"," Já existe no servidor. Por favor, renomear esse arquivo e tentar novamente.<br />");
define("_AM_WFL_ERRORSRETURNUPLOAD","<h4>Erros retornados ao fazer o upload</h4>");
define("_AM_WFL_DOESNOTEXIST"," não existe!");
define("_AM_WFL_INFORMATION","Informações: ");
define("_AM_WFL_HITS","Acessos: ");
define("_AM_WFL_PAGERANK","PageRank?: ");
define("_AM_WFL_ERROR_CATISCAT","Não é possível definir uma categoria como uma sub-categoria de si mesmo!");
define("_AM_WFL_MOD_COUNTRY","País:");
define("_AM_WFL_MOD_KEYWORDS","Palavras-chave:");
define("_AM_WFL_MOD_ITEM_TAG","Tags:");
define("_AM_WFL_MOD_GOOGLEMAP","Google Maps:");
define("_AM_WFL_MOD_YAHOOMAP","Yahoo Maps:");
define("_AM_WFL_MOD_MULTIMAP","Multimap:");
define("_AM_WFL_MOD_STREET1","End 1:");
define("_AM_WFL_MOD_STREET2","End 2 (opcional):");
define("_AM_WFL_MOD_TOWN","Cidade:");
define("_AM_WFL_MOD_STATE","Estado:");
define("_AM_WFL_MOD_ZIP","Cep:");
define("_AM_WFL_MOD_TEL","Telefone:");
define("_AM_WFL_MOD_FAX","Fax:");
define("_AM_WFL_MOD_VOIP","VoIP:");
define("_AM_WFL_MOD_MOBILE","Mobile:");
define("_AM_WFL_MOD_EMAIL","E-Mail:");
define("_AM_WFL_MOD_VAT","VAT:");

// version 1.06 RC-2
define("_AM_WFL_IPAGE_SHOWLATEST","Mostrar últimas listagens?");
define("_AM_WFL_IPAGE_LATESTTOTAL","Quantos links para mostrar?");
define("_AM_WFL_IPAGE_LATESTTOTAL_DSC","0 Transforma esta opção em off.");

//version 1.06 Final
define("_AM_WFL_DOCUMENTATION","Documentação");
define("_AM_WFL_SHOWNOIMAGE","Show no image");
define("_AM_WFL_NOSELECTION","No selection");
define("_AM_WFL_NOFILESELECT","No selected file");
?>