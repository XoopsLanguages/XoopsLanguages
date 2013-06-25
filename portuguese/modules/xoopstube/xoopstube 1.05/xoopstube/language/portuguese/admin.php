<?php

/**
 * Module: XoopsTube
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Xoopstube
 * @author          XOOPS Development Team
 * @copyright       2001-2013 The XOOPS Project
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @version         $Id$
 * @link            http://sourceforge.net/projects/xoops/
 * @since           1.0.6
 */

//É necessário revisão de vários termos para o português de portugal, mas eu penso que deverá ajudar o que já está concluído.

define("_AM_XTUBE_WARNINSTALL1", "AVISO: o diretório %s já existe no seu servidor. <br />Por favor, por razõe de segurança, remova antes este diretório.");
define("_AM_XTUBE_WARNINSTALL2", "AVISO: o arquivo %s já existe no seu servidor. <br />Por favor, por razõe de segurança, remova antes este arquivo.");
define("_AM_XTUBE_WARNINSTALL3", "AVISO: a pasta %s não existe em seu servidor. <br />Esta pasta é necessária para o funcionamento do XoopsTube.");

define("_AM_XTUBE_MODULE_NAME", "XoopsTube");

define("_AM_XTUBE_BMODIFY", "Modificar");
define("_AM_XTUBE_BDELETE", "Excluir");
define("_AM_XTUBE_BCREATE", "Criar");
define("_AM_XTUBE_BADD", "Adicionar");
define("_AM_XTUBE_BAPPROVE", "Aprovar");
define("_AM_XTUBE_BIGNORE", "Ignorar");
define("_AM_XTUBE_BCANCEL", "Cancelar");
define("_AM_XTUBE_BSAVE", "Salvar");
define("_AM_XTUBE_BRESET", "Limpar");
define("_AM_XTUBE_BMOVE", "Mover Vídeos");
define("_AM_XTUBE_BUPLOAD", "Upload");
define("_AM_XTUBE_BDELETEIMAGE", "Excluir imagem selecionada");
define("_AM_XTUBE_BRETURN", "Retornar para onde você estava!");
define("_AM_XTUBE_DBERROR", "Erros de acesso a Base de Dados");
// Other Options
define("_AM_XTUBE_TEXTOPTIONS", "Opções de Texto:");
define("_AM_XTUBE_DISABLEHTML", " Desabilitar tags HTML");
define("_AM_XTUBE_DISABLESMILEY", " Desabilitar Ícones Smilie");
define("_AM_XTUBE_DISABLEXCODE", " Desabilitar xCode");
define("_AM_XTUBE_DISABLEIMAGES", " Desabilitar Imagens");
define("_AM_XTUBE_DISABLEBREAK", " Usar conversão de quebra de linha xCode?");
define("_AM_XTUBE_UPLOADFILE", "Upload de Vídeo bem-sucedido");
define("_AM_XTUBE_NOMENUITEMS", "Não há ítens no menu");
// Admin Bread crumb
define("_AM_XTUBE_PREFS", "Preferências");
define("_AM_XTUBE_BUPDATE", "Atualização do Módulo");
define("_AM_XTUBE_BINDEX", "Página Principal");
define("_AM_XTUBE_BPERMISSIONS", "Permissões");
// define("_AM_XTUBE_BLOCKADMIN","Blocks");
define("_AM_XTUBE_BLOCKADMIN", "Ajustes dos Blocos");
define("_AM_XTUBE_GOMODULE", "Ir para o módulo");
define("_AM_XTUBE_ABOUT", "Sobre o módulo");
// Admin Summary
define("_AM_XTUBE_SCATEGORY", "Categoria: ");
define("_AM_XTUBE_SFILES", "Vídeos: ");
define("_AM_XTUBE_SNEWFILESVAL", "Enviado em: ");
define("_AM_XTUBE_SMODREQUEST", "Modificado em: ");
define("_AM_XTUBE_SREVIEWS", "Visualizações: ");

// Admin Main Menu
define("_AM_XTUBE_MCATEGORY", "Gerenciamento de Categorias");
define("_AM_XTUBE_MVIDEOS", "Gerenciamento de Vídeos");
define("_AM_XTUBE_MLISTBROKEN", "Vídeo com Problemas");
define("_AM_XTUBE_MLISTPINGTIMES", "Lista de Links Pingtime");
define("_AM_XTUBE_INDEXPAGE", "Gerenciamento da Páginal Principal");
define("_AM_XTUBE_MCOMMENTS", "Comentários");
define("_AM_XTUBE_MVOTEDATA", "Dados de Votação");
define("_AM_XTUBE_MUPLOADS", "Upload de Imagens");

// Catgeory defines
define("_AM_XTUBE_CCATEGORY_CREATENEW", "Criar Nova Categoria");
define("_AM_XTUBE_CCATEGORY_MODIFY", "Modificar Categoria");
define("_AM_XTUBE_CCATEGORY_MOVE", "Mover Vídeos de Categoria");
define("_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Título da Categoria:");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Falhou ao mover vídeos: não pôde mover para esta categoria");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Falhou ao mover vídeos: não pôde encontrar esta categoria");
define("_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Vídeos movidos e categoria excluída");
define("_AM_XTUBE_CCATEGORY_CREATED", "Nova categoria criada e Base de Dados atualizada com sucesso");
define("_AM_XTUBE_CCATEGORY_MODIFIED", "A categoria selecionada foi modificada e a Base de Dados atualizada com sucesso");
define("_AM_XTUBE_CCATEGORY_DELETED", "A categoria selecionada foi excluída e a Base de Dados atualizada com sucesso");
define("_AM_XTUBE_CCATEGORY_AREUSURE", "ADVERTÊNCIA: você tem certeza de que quer excluir esta Categoria e TODAS as informações dos vídeos e os comentários?");
define("_AM_XTUBE_CCATEGORY_NOEXISTS", "Você deve criar pelo menos uma Categoria, antes de poder adicionar um novo vídeo");
define("_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Premissões de Acesso às Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usuários que terão acesso a esta categoria.</span></div>");
define("_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Premissões de Envio às Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usuários que terão permissão para enviar novos vídeos para esta categoria.</span></div>");
define("_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Premissões de Moderação das Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usuários que terão permissão para moderar esta categoria.</span></div>");

define("_AM_XTUBE_FCATEGORY_TITLE", "Título da Categoria:");
define("_AM_XTUBE_FCATEGORY_WEIGHT", "Peso da Categoria:");
define("_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Defina como Sub-Categoria de:");
define("_AM_XTUBE_FCATEGORY_CIMAGE", "Selecione uma imagem para a Categoria:");
define("_AM_XTUBE_FCATEGORY_DESCRIPTION", "Defina a descrição da Categoria:");
define("_AM_XTUBE_FCATEGORY_SUMMARY", "Defina o sumário da Categoria:");
/**
 * Index page Defines
 */
define("_AM_XTUBE_IPAGE_UPDATED", "Página Principal modificada e Base de Dados atualizada com sucesso!");
define("_AM_XTUBE_IPAGE_INFORMATION", "Informações da Página Principal");
define("_AM_XTUBE_IPAGE_MODIFY", "Modificar Página Principal");
define("_AM_XTUBE_IPAGE_CIMAGE", "Selecione uma imagem para a Página Principal:");
define("_AM_XTUBE_IPAGE_CTITLE", "Título da Página Principal:");
define("_AM_XTUBE_IPAGE_CHEADING", "Cabeçalho da Página Principal:");
define("_AM_XTUBE_IPAGE_CHEADINGA", "Alinhamento do cabeçalho da Página Principal:");
define("_AM_XTUBE_IPAGE_CFOOTER", "Rodapé da Página Principal:");
define("_AM_XTUBE_IPAGE_CFOOTERA", "Alinhamento do rodapé da Página Principal:");
define("_AM_XTUBE_IPAGE_CLEFT", "Alinhar a Esquerda");
define("_AM_XTUBE_IPAGE_CCENTER", "Centralizar");
define("_AM_XTUBE_IPAGE_CRIGHT", "Alinhar a Direita");
/**
 * Permissions defines
 */
define("_AM_XTUBE_PERM_MANAGEMENT", "Gerenciamento de Permissões");
define("_AM_XTUBE_PERM_PERMSNOTE", "<div><span style='font-weight: bold;'>NOTA:</span> Por favor, esteja ciente de que mesmo que você ajuste corretamente aqui as permissões de visualização, um grupo pode não ver os vídeos ou blocos se você não der também ao grupo permissão para acessar o módulo. Para fazer isso, vá em <span style='font-weight: bold;'>System > Grupos</span>, escolha o grupo apropriado e clique nos checkboxes que permitem esse acesso.</div>");
define("_AM_XTUBE_PERM_CPERMISSIONS", "Permissões das Categorias");
define("_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Selecione as categorias que cada grupo tem permissão de ver");
define("_AM_XTUBE_PERM_CNOCATEGORY", "Não pôde definir as permissões: ainda não foi criada nenhuma Categoria!");
define("_AM_XTUBE_PERM_FPERMISSIONS", "Permissões de Vídeo");
define("_AM_XTUBE_PERM_FNOFILES", "Não pôde definir as permissões: ainda não foi criado nenhum vídeo!");
define("_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Selecione os vídeos que cada grupo tem permissão de ver");
/**
 * Upload defines
 */
define("_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Imagem subida com suceso ao destino no servidor");
define("_AM_XTUBE_VIDEO_NOIMAGEEXIST", "Erro: nenhum vídeo foi selecionado para upload. Por favor, tente novamente!");
define("_AM_XTUBE_VIDEO_IMAGEEXIST", "A Imagem já existe na área de upload!");
define("_AM_XTUBE_VIDEO_FILEDELETED", "O Vídeo foi excluído.");
define("_AM_XTUBE_VIDEO_FILEERRORDELETE", "Erro ao excluir Vídeo: vídeo não foi encontrado no servidor.");
define("_AM_XTUBE_VIDEO_NOFILEERROR", "Erro ao ao excluir Vídeo: nenhum vídeo foi selecionado para exclusão.");
define("_AM_XTUBE_VIDEO_DELETEFILE", "ADVERTÊNCIA: você tem certeza de que quer excluir este link de Imagem?");
define("_AM_XTUBE_VIDEO_IMAGEINFO", "Status do Servidor");
define("_AM_XTUBE_VIDEO_SPHPINI", "<span style='font-weight: bold;'>Informação obtida do PHP ini Link:</span>");
define("_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Status do Modo Seguro: ");
define("_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Registros Globais: ");
define("_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Status de Upload do Servidor: ");
define("_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Máximo tamanho de arquivo para upload: ");
define("_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Tamanho máximo permitido para um post: ");
define("_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (isto pode causar problemas)");
define("_AM_XTUBE_VIDEO_GDLIBSTATUS", "Suporte a GD Library: ");
define("_AM_XTUBE_VIDEO_GDLIBVERSION", "Versão do GD Library: ");
define("_AM_XTUBE_VIDEO_GDON", "<span style='font-weight: bold;'>Habilitado</span> (Thumbs Nails disponível)");
define("_AM_XTUBE_VIDEO_GDOFF", "<span style='font-weight: bold;'>Desabilitado</span> (Thumb Nails indisponível)");
define("_AM_XTUBE_VIDEO_OFF", "<span style='font-weight: bold;'>Desligado</span>");
define("_AM_XTUBE_VIDEO_ON", "<span style='font-weight: bold;'>Ligado</span>");
define("_AM_XTUBE_VIDEO_CATIMAGE", "Categorias de Images");
define("_AM_XTUBE_VIDEO_SCREENSHOTS", "Imagens ScreenShot");
define("_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Imagens principais");
define("_AM_XTUBE_VIDEO_FCATIMAGE", "Caminho para as categorias de imagens");
define("_AM_XTUBE_VIDEO_FSCREENSHOTS", "Caminho para as categorias de ScreenShot");
define("_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Caminho para as imagens principais");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Upload das Imagens: ");
define("_AM_XTUBE_VIDEO_FUPLOADPATH", "Caminho para os Uploads: ");
define("_AM_XTUBE_VIDEO_FUPLOADURL", "URL do Upload: ");
define("_AM_XTUBE_VIDEO_FOLDERSELECTION", "Selecione o destino do Upload:");
define("_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Exibir a imagem selecionada:");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Subir nova imagem para o destino selecionado:");

// Main Index defines
define("_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Sumário do Módulo de Administração");
define("_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Vídeo Publicados:");
define("_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Vídeo Auto-Publicados:");
define("_AM_XTUBE_MINDEX_AUTOEXPIRE", "Vídeos Auto-Expirados:");
define("_AM_XTUBE_MINDEX_EXPIRED", "Vídeos Expirados:");
define("_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Vídeos Offline:");
define("_AM_XTUBE_MINDEX_ID", "ID");
define("_AM_XTUBE_MINDEX_TITLE", "título do Vídeo");
define("_AM_XTUBE_MINDEX_POSTER", "Postado por");
define("_AM_XTUBE_MINDEX_ONLINE", "Status");
define("_AM_XTUBE_MINDEX_ONLINESTATUS", "Status Online");
define("_AM_XTUBE_MINDEX_PUBLISH", "Publicado");
define("_AM_XTUBE_MINDEX_PUBLISHED", "Publicado");
define("_AM_XTUBE_MINDEX_EXPIRE", "Expirado");
define("_AM_XTUBE_MINDEX_NOTSET", "Data não definida");
define("_AM_XTUBE_MINDEX_SUBMITTED", "Data do Envio");

define("_AM_XTUBE_MINDEX_ACTION", "Ação");
define("_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "NOTA: não há vídeos que atendam este critério");
define("_AM_XTUBE_MINDEX_PAGE", "<span style='font-weight: bold;'>Página:<span style='font-weight: bold;'> ");
define('_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>Detalhes da página principal dos vídeos.</li><li>Você pode facilmente mudar a imagem de logotipo, cabeçalho, texto do cabeçalho e rodapé da página principal para deixar do jeito que você quiser</li></ul><br />Nota: a imagem de logotipo escolhida será usada no módulo todo.');
define("_AM_XTUBE_MINDEX_RESPONSE", "Tempo de Resposta");
// Submitted Links
define("_AM_XTUBE_SUB_SUBMITTEDFILES", "Vídeo Enviados");
define("_AM_XTUBE_SUB_FILESWAITINGINFO", "Informação de Vídeos em Espera");
define("_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Vídeos Aguardando Validação: ");
define("_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<span style='font-weight: bold;'>Aprovar</span> a informação sobre novo vídeo sem validação.");
define("_AM_XTUBE_SUB_EDITWAITINGFILE", "<span style='font-weight: bold;'>Editar</span> a informação do novo vídeo e então aprovar.");
define("_AM_XTUBE_SUB_DELETEWAITINGFILE", "<span style='font-weight: bold;'>Excluir</span> a informação do novo vídeo.");
define("_AM_XTUBE_SUB_NOFILESWAITING", "Não há vídeos que atendam este critério");
define("_AM_XTUBE_SUB_NEWFILECREATED", "Os dados do novo vídeo foram criados e a Base de Dados foi atualizada com sucesso");
// Vote Information
define("_AM_XTUBE_VOTE_RATINGINFOMATION", "Informações de Votação");
define("_AM_XTUBE_VOTE_TOTALVOTES", "Total de votos: ");
define("_AM_XTUBE_VOTE_REGUSERVOTES", "Votos de Usuários Registrados: %s");
define("_AM_XTUBE_VOTE_ANONUSERVOTES", "Votos de Usuários Anônimos: %s");
define("_AM_XTUBE_VOTE_USER", "Usuário");
define("_AM_XTUBE_VOTE_IP", "Endereço IP");
define("_AM_XTUBE_VOTE_DATE", "Enviado");
define("_AM_XTUBE_VOTE_RATING", "Classificação");
define("_AM_XTUBE_VOTE_NOREGVOTES", "Não Há Votos de Usuários Registrados");
define("_AM_XTUBE_VOTE_NOUNREGVOTES", "Não Há Votos de Usuários Não Registrados");
define("_AM_XTUBE_VOTE_VOTEDELETED", "Dados de votação excluídos.");
define("_AM_XTUBE_VOTE_ID", "ID");
define("_AM_XTUBE_VOTE_FILETITLE", "Título do Vídeo");
define("_AM_XTUBE_VOTE_DISPLAYVOTES", "Informação dos Dados da Votação");
define("_AM_XTUBE_VOTE_NOVOTES", "Não há votos de usuários para exibir");
define("_AM_XTUBE_VOTE_DELETE", "Não há votos de usuários para exibir");
define("_AM_XTUBE_VOTE_DELETEDSC", "A informação sobre a votação selecionada foi <span style='font-weight: bold;'>excluída</span> da Base de Dados.");
define("_AM_XTUBE_VOTEDELETED", "Voto selecionado foi removido e a Base de Dados foi atualizada");

define("_AM_XTUBE_VOTE_USERAVG", "Avaliação média do usuário");
define("_AM_XTUBE_VOTE_TOTALRATE", "Total de Votos");
define("_AM_XTUBE_VOTE_MAXRATE", "Voto máximo do ítem");
define("_AM_XTUBE_VOTE_MINRATE", "Voto mínimo do ítem");
define("_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "Mais Votado");
define("_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Menos Votado");
define("_AM_XTUBE_VOTE_MOSTVOTERSUID", "Votante mais ativo");
define("_AM_XTUBE_VOTE_REGISTERED", "Votos de Registrados");
define("_AM_XTUBE_VOTE_NONREGISTERED", "Votos de Anônimos");
// Modifications
define("_AM_XTUBE_MOD_TOTMODREQUESTS", "Total de Solicitações de Alterações: ");
define("_AM_XTUBE_MOD_MODREQUESTS", "Vídeos Modificados");
define("_AM_XTUBE_MOD_MODREQUESTSINFO", "Informação dos Vídeos Modificados");
define("_AM_XTUBE_MOD_MODID", "ID");
define("_AM_XTUBE_MOD_MODTITLE", "Título");
define("_AM_XTUBE_MOD_MODPOSTER", "Postador Original: ");
define("_AM_XTUBE_MOD_DATE", "Enviado em");
define("_AM_XTUBE_MOD_NOMODREQUEST", "Não há solicitações que atendam estes critérios");
define("_AM_XTUBE_MOD_TITLE", "Título do Vídeo: ");
define("_AM_XTUBE_MOD_LID", "ID do Vídeo: ");
define("_AM_XTUBE_MOD_CID", "Categoria: ");
define("_AM_XTUBE_MOD_URL", "Url do Vídeo: ");
define("_AM_XTUBE_MOD_PUBLISHER", "Publicador: ");
define("_AM_XTUBE_MOD_FORUMID", "Fórum: ");
define("_AM_XTUBE_MOD_SCREENSHOT", "Imagem ScreenShot: ");
define("_AM_XTUBE_MOD_HOMEPAGE", "Home Page: ");
define("_AM_XTUBE_MOD_HOMEPAGETITLE", "Título da Home Page: ");
define("_AM_XTUBE_MOD_SHOTIMAGE", "Imagem ScreenShot: ");
define("_AM_XTUBE_MOD_DESCRIPTION", "Descrição: ");
define("_AM_XTUBE_MOD_MODIFYSUBMITTER", "Enviado por: ");
define("_AM_XTUBE_MOD_MODIFYSUBMIT", "Enviado por");
define("_AM_XTUBE_MOD_PROPOSED", "Detalhes do Vídeo Propostos");
define("_AM_XTUBE_MOD_ORIGINAL", "Detalhes Originais do Vídeo");
define("_AM_XTUBE_MOD_REQDELETED", "solicitação de Modificação removida da Base de Dados");
define("_AM_XTUBE_MOD_REQUPDATED", "O vídeo selecionado foi modificado e a Base de Dados foi atualizada com sucesso");
define('_AM_XTUBE_MOD_VIEW', 'View');
// Link management
define("_AM_XTUBE_VIDEO_ID", "ID do Vídeo: ");
define("_AM_XTUBE_VIDEO_IP", "Endereço IP do Uploader: ");
define("_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: bold;'>Extensões de Vídeo permitidas pelo Admininstrador</span>:</div>");
define("_AM_XTUBE_VIDEO_MODIFYFILE", "Informações de Modificação de Vídeos");
define("_AM_XTUBE_VIDEO_CREATENEWFILE", "Criar Novo Vídeo");
define("_AM_XTUBE_VIDEO_TITLE", "Título do Vídeo: ");
define("_AM_XTUBE_VIDEO_DLVIDID", "Video id-code: ");
define("_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<span style='font-size: small;'><span style='font-weight: bold;'>YouTube:</span> http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span ><br />
<span style='font-weight: bold;'>MetaCafe:</span> http://www.metacafe.com/watch/<span style='color: #FF0000;'>191543/sperm_whale_encounters_underwater_robot</span >/<br />
<span style='font-weight: bold;'>SPIKE/ifilm:</span> http://www.ifilm.com/video/<span style='color: #FF0000;'>2718605</span ><br />
<span style='font-weight: bold;'>Photobucket:</span> http://i39.photobucket.com/albums/<span style='color: #FF0000;'>e168/vailtom/th_BigSquid</span >.jpg<br />
<span style='font-weight: bold;'>Google Video:</span> http://video.google.com/videoplay?docid=<span style='color: #FF0000;'>4761076111111865377</span >&q=rov&total=913&start=...<br />
<span style='font-weight: bold;'>MySpace TV:</span> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<span style='color: #FF0000;'>13171141</span ><br />
<span style='font-weight: bold;'>DailyMotion:</span> http://www.dailymotion.com/video/<span style='color: #FF0000;'>x40bhg</span >_blondesecretary_fun<br />
<span style='font-weight: bold;'>Blip.tv </span>embed code<span style='font-weight: bold;'>:</span> http://blip.tv/play/<span style='color: #FF0000;'>Abe6EwA</span > ...<br />
<span style='font-weight: bold;'>ClipFish:</span> http://www.clipfish.de/player.php?videoid=<span style='color: #FF0000;'>MTg1NTYyfDM1Ng</span >%3D%3D<br />
<span style='font-weight: bold;'>LiveLeak:</span> http://www.liveleak.com/view?i=<span style='color: #FF0000;'>a59_1205566630</span ><br />
<span style='font-weight: bold;'>Maktoob:</span> file=http://<span style='color: #FF0000;'>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</span >.flv (from embed-code)<br />
<span style='font-weight: bold;'>Veoh:</span> http://www.veoh.com/videos/<span style='color: #FF0000;'>v15069875yApCz7r3</span >?jsonParams=...<br />
<span style='font-weight: bold;'>Vimeo:</span> http://www.vimeo.com/<span style='color: #FF0000;'>2246499</span ><br />
<span style='font-weight: bold;'>Megavideo:</span> http://www.megavideo.com/?v=<span style='color: #FF0000;'>J6YSRE0T</span ><br />
<span style='font-weight: bold;'>Viddler:</span> http://www.viddler.com/player/<span style='color: #FF0000;'>d32d2b94</span >/ (see embed code)<br />
<span style='font-weight: bold;'>XoopsTube:</span> <span style='color: #FF0000;'>Take over from above selection menu</span ></span>");
define("_AM_XTUBE_VIDEO_PICURL", "Picture url: ");
define("_AM_XTUBE_VIDEO_PICURLNOTE", "<span style='font-size: small;'>Url da Foto quando o código for do Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler ou Maktoob</span>");
define("_AM_XTUBE_VIDEO_DESCRIPTION", "Descrição do Vídeo: ");
define("_AM_XTUBE_VIDEO_CATEGORY", "Categoria Principal dos Vídeos: ");
define("_AM_XTUBE_VIDEO_FILESSTATUS", " Definir vídeo offline?<br /><br /><span style='font-weight: normal;'>o vídeo não será visível a todos os usuários.</span>");
define("_AM_XTUBE_VIDEO_SETASUPDATED", " Definir Status do vídeo como Atualizado?<br /><br /><span style='font-weight: normal;'>o vídeo exibirá o ícone de Atualizado.</span>");
define("_AM_XTUBE_VIDEO_SHOTIMAGE", "Imagem ScreenShot do Vídeo: ");
define("_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Adicionar discussão neste Fórum?");
define("_AM_XTUBE_VIDEO_PUBLISHDATE", "Data da Publicação do Vídeo:");
define("_AM_XTUBE_VIDEO_EXPIREDATE", "Data da Expiração do Vídeo:");
define("_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Remover data da publicação:");
define("_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Remover data da Expiração:");
define("_AM_XTUBE_VIDEO_PUBLISHDATESET", " Definir data da publicação: ");
define("_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Definir data/hora da publicação");
define("_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Definir data/hora da expiração");
define("_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<span style='font-weight: bold;'>Definir data da Publicação: </span>");
define("_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<span style='font-weight: bold;'>Definir nova data de publicação: </span><br />Publicado em:");
define("_AM_XTUBE_VIDEO_SETPUBDATESETS", "<span style='font-weight: bold;'>Escolher a data de Publicação: </span><br />Publicar na data:");
define("_AM_XTUBE_VIDEO_EXPIREDATESET", " Definir data da expiração: ");
define("_AM_XTUBE_VIDEO_SETEXPIREDATE", "<span style='font-weight: bold;'>Definir data da expiração: </span>");
define("_AM_XTUBE_VIDEO_DELEDITMESS", "Excluir relatório de vídeo com problemast?<br /><br /><span style='font-weight: normal;'>Quando você escolhe <span style='font-weight: bold;'>SIM</span> o Relatório de Problemas será automaticamente excluído e você confirma que o vídeo agora voltou a funcionar.</span>");
define("_AM_XTUBE_VIDEO_MUSTBEVALID", "A imagem de ScreenShot deve ser uma imagem de vídeo válida, no diretório %s (ex. shot.gif). Deixe em branco se não houver imagem disponível.");
define("_AM_XTUBE_VIDEO_EDITAPPROVE", "Aprovar vídeo:");
define("_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Novo Vídeo criado e Base de Dados atualizada com sucesso");
define("_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "O vídeo selecionado foi modificado e a Base de Dados atualizada com sucesso");
define("_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Realmente deseja excluir o vídeo selecionado?");
define("_AM_XTUBE_VIDEO_FILEWASDELETED", "O vídeo %s foi excluído da Base de Dados com sucesso!");
define("_AM_XTUBE_VIDEO_FILEAPPROVED", "O vídeo foi aprovado e a Base de Dados foi atualizada com sucesso");
define("_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<span style='font-weight: bold;'>Criar notícia a partir do link</span>");
define("_AM_XTUBE_VIDEO_SUBMITNEWS", "Enviar Novo Vídeo como um item de Notícias?");
define("_AM_XTUBE_VIDEO_NEWSCATEGORY", "Selecione a Categoria de Notícias para a qual será enviada a notícia:");
define("_AM_XTUBE_VIDEO_NEWSTITLE", "Título da Notícia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco para usar o Título do Vídeo</span></div>");
define("_AM_XTUBE_VIDEO_PUBLISHER", "Nome do publicador do vídeo: ");

/**
 * Broken links defines
 */
define("_AM_XTUBE_SBROKENSUBMIT", "Vídeo com Problema: ");
define("_AM_XTUBE_BROKEN_FILE", "Relato de Vídeo com Problemas");
define("_AM_XTUBE_BROKEN_FILEIGNORED", "Relato de problema ignorado e excluído da Base de Dados com sucesso!");
define("_AM_XTUBE_BROKEN_NOWACK", "Status do reconhecimento alterado e Base de dados atualizada!");
define("_AM_XTUBE_BROKEN_NOWCON", "Status de confirmação alterado e Base de dados atualizada!");
define("_AM_XTUBE_BROKEN_REPORTINFO", "Informação de Relato de Vídeos com Problemas");
define("_AM_XTUBE_BROKEN_REPORTSNO", "Relatos de Problemas Aguardando:");
define("_AM_XTUBE_BROKEN_IGNOREDESC", "<span style='font-weight: bold;'>Ignore</span> o relato e simplesmente exclua-o.");
define("_AM_XTUBE_BROKEN_DELETEDESC", "<span style='font-weight: bold;'>Exclua</span> o vídeo com problemas e os relatos.");
define("_AM_XTUBE_BROKEN_EDITDESC", "<span style='font-weight: bold;'>Edite</span> o vídeo para corrigir o problema.");
define("_AM_XTUBE_BROKEN_ACKDESC", "<span style='font-weight: bold;'>Reconhecimento: </span> defina o estado de reconhecimento do relato de vídeo com problemas.");
define("_AM_XTUBE_BROKEN_CONFIRMDESC", "<span style='font-weight: bold;'>Confirmado:</span> defina o estados de confirmado para o relato de vídeo com problemas.");
define("_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Reconhecido");
define("_AM_XTUBE_BROKEN_DCONFIRMED", "Confirmado");

define("_AM_XTUBE_BROKEN_ID", "ID");
define("_AM_XTUBE_BROKEN_TITLE", "Título");
define("_AM_XTUBE_BROKEN_REPORTER", "Relator");
define("_AM_XTUBE_BROKEN_FILESUBMITTER", "Enviado por");
define("_AM_XTUBE_BROKEN_DATESUBMITTED", "Data do envio");
define("_AM_XTUBE_BROKEN_ACTION", "Ação");
define("_AM_XTUBE_BROKEN_NOFILEMATCH", "Não há relatos de vídeos com problemas que atendam  estes critérios");
define("_AM_XTUBE_BROKENFILEDELETED", "vídeo e relato removidos da Base de Dados");
define("_AM_XTUBE_BROKEN_VIDSOURCE", "Código do Vídeo");
/**
 * About defines
 */
define("_AM_XTUBE_BY", "por");
// block defines
define("_AM_XTUBE_BADMIN", "Administração de blocos");
define("_AM_XTUBE_BLKDESC", "Descrição");
define("_AM_XTUBE_TITLE", "Título");
define("_AM_XTUBE_SIDE", "Alinhamento");
define("_AM_XTUBE_WEIGHT", "Peso");
define("_AM_XTUBE_VISIBLE", "Visível");
define("_AM_XTUBE_ACTION", "Ação");
define("_AM_XTUBE_SBLEFT", "Esquerda");
define("_AM_XTUBE_SBRIGHT", "Direita");
define("_AM_XTUBE_CBLEFT", "Centro-Esquerda");
define("_AM_XTUBE_CBRIGHT", "Centro-Direita");
define("_AM_XTUBE_CBCENTER", "Centro-Meio");
define("_AM_XTUBE_ACTIVERIGHTS", "Direitos de Alteração");
define("_AM_XTUBE_ACCESSRIGHTS", "Direitos de Acesso");
// image admin icon
define("_AM_XTUBE_ICO_EDIT", "Editar este Item");
define("_AM_XTUBE_ICO_DELETE", "Excluir este Item");
define("_AM_XTUBE_ICO_RESOURCE", "Editar este Recurso");

define("_AM_XTUBE_ICO_ONLINE", "On-line");
define("_AM_XTUBE_ICO_OFFLINE", "Off-line");
define("_AM_XTUBE_ICO_APPROVED", "Approvado");
define("_AM_XTUBE_ICO_NOTAPPROVED", "Não Aprovado");

define("_AM_XTUBE_ICO_VIDEO", "Vídeo relatado");
define("_AM_XTUBE_ICO_URL", "Adicionar URL Relatada");
define("_AM_XTUBE_ICO_ADD", "Adicionar");
define("_AM_XTUBE_ICO_APPROVE", "Aprovar");
define("_AM_XTUBE_ICO_STATS", "Estatísticas");
define("_AM_XTUBE_ICO_VIEW", "Ver este Item");

define("_AM_XTUBE_ICO_IGNORE", "Ignorar");
define("_AM_XTUBE_ICO_ACK", "Reconhecimento de Relato de Problemas");
define("_AM_XTUBE_ICO_REPORT", "Reconher o Relato de Problemas?");
define("_AM_XTUBE_ICO_CONFIRM", "Relato de Problemas Confirmado");
define("_AM_XTUBE_ICO_CONBROKEN", "Confirma Relato de Problemas?");
define("_AM_XTUBE_ICO_RES", "Editar Recurso/Vídeos para este Item");
define("_AM_XTUBE_MOD_URLRATING", "Avaliação do Conteudo pela Internet:");
// Alternate category
define("_AM_XTUBE_ALTCAT_CREATEF", "Adicionar Categoria Alternativa");
define("_AM_XTUBE_MALTCAT", "Gerenciar Categoria Alternativa");
define("_AM_XTUBE_ALTCAT_MODIFYF", "Gerenciamento de Categoria Alternativa");
define("_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Categorias Alternativas podem ser adicionadas ou removidas facilmente, através deste formulário.</li></ul>");
define("_AM_XTUBE_ALTCAT_CREATED", "Categorias Alternativas oram salvas!");

define("_AM_XTUBE_MRESOURCES", "Gerenciamento de Recursos");
define("_AM_XTUBE_RES_CREATED", "Gerenciamento de Recurso");
define("_AM_XTUBE_RES_ID", "ID");
define("_AM_XTUBE_RES_DESC", "Descrição");
define("_AM_XTUBE_RES_NAME", "Nome do Recurso");
define("_AM_XTUBE_RES_TYPE", "Tipo do Recurso");
define("_AM_XTUBE_RES_USER", "Usuário");
define("_AM_XTUBE_RES_CREATEF", "Adicionar Recurso");
define("_AM_XTUBE_RES_MODIFYF", "Modificar Recurso");
define("_AM_XTUBE_RES_NAMEF", "Nome do recurso:");
define("_AM_XTUBE_RES_DESCF", "Descrição do recurso:");
define("_AM_XTUBE_RES_URLF", "URL do Recurso:");
define("_AM_XTUBE_RES_ITEMIDF", "ID do Item de Recurso:");
define("_AM_XTUBE_RES_INFOTEXT", "<ul><li>Novos recursos podem ser adicionados, editados ou removidos facilmente, através deste formulário.</li>
    <li>Lista todos os recursos ligados a um vídeo</li>
    <li>Modifica o nome e descrição do recurso</li></ul>
    ");
define("_AM_XTUBE_LISTBROKEN", "Exibe vídeos que possivelmente estão com problemas. Obs.: Estes resultados não são precisos e devem ser considerados apenas como possibilidades.<br /><br />Por favor, primeiro cheque se o vídeo ainda existe, para depois executar qualquer ação.<br /><br />");
define("_AM_XTUBE_PINGTIMES", "Exibe o primeiro tempo estimado de round ping para cada vídeo.<br /><br />Obs.: Estes resultados não são precisos e devem ser considerados apenas como uma estimativa grosseira.<br /><br />");

define("_AM_XTUBE_NO_FORUM", "Nenhu fórum selecionado");

define("_AM_XTUBE_PERM_RATEPERMISSIONS", "Permissões de Avaliações");
define("_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Selecione os grupos que podem classificar um vídeo nas categorias selecionadas.");

define("_AM_XTUBE_PERM_AUTOPERMISSIONS", "Auto-aprovar Vídeos");
define("_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selecione os grupos que terão novos vídeos auto-aprovados sem a intervenção do administrador.");

define("_AM_XTUBE_PERM_SPERMISSIONS", "Permissões para Envio");
define("_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Selecione os grupos que podem enviar novos vídeos para as categorias selecionadas.");

define("_AM_XTUBE_PERM_APERMISSIONS", "Grupos de Moderadores");
define("_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Selecione os grupos que têm privilégios de moderador para as categorias selecionadas.");

define("_AM_XTUBE_TIME", "Hora:");
define("_AM_XTUBE_KEYWORDS", "Palavras-chave:");
define("_AM_XTUBE_KEYWORDS_NOTE", "<em>Palavras-chave devem ser separadas com vírgula (keyword1, keyword2).</em>");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta-Descrição");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "De modo a ajudar o Mecanismos de Busca, você pode personalizar a meta-descrição deste vídeo como você quiser. Se você deixar o campo vazio quando adicionar um vídeo, ele irá ser automaticamente preenchido com o campo Sumário deste vídeo.");

define("_AM_XTUBE_VIDSOURCE", "Video source:");
define("_AM_XTUBE_VIDSOURCE2", "Video source");
define("_AM_XTUBE_YOUTUBE", "YouTube");
define("_AM_XTUBE_METACAFE", "MetaCafe");
define("_AM_XTUBE_IFILM", "Spike");
define("_AM_XTUBE_GOOGLEVIDEO", "Google Video");
define("_AM_XTUBE_MYSPAVETV", "MySpace TV");
define("_AM_XTUBE_PHOTOBUCKET", "Photobucket");
define("_AM_XTUBE_DAILYMOTION", "DailyMotion");

// Version 1.04 RC-1
define("_AM_XTUBE_BLIPTV", "Blip.tv");
define("_AM_XTUBE_XOOPSTUBE", "XoopsTube");
define("_AM_XTUBE_ICO_EXPIRE", "Expirado");
define("_AM_XTUBE_MXOOPSTUBE", "Incluir Clip no XoopsTube");
define("_AM_XTUBE_VIDEO_CATVIDEOIMG", "Video imagens");
define("_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Caminho das Imagens de Video");
define("_AM_XTUBE_VUPLOAD_VIDEOEXIST", "Video já existe");
define("_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Video uploaded");
define("_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "Não existe Video");
define("_AM_XTUBE_VUPLOAD_FILEDELETED", "Video apagado");
define("_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Erro");
define("_AM_XTUBE_VUPLOAD_NOFILEERROR", "Nenhum Arquivo");
define("_AM_XTUBE_VUPLOAD_DELETEFILE", "Apagar o arquivo de Vídeo");
define("_AM_XTUBE_VUPLOAD_CATVIDEO", "Arquivos de Video");
define("_AM_XTUBE_VUPLOAD_FCATVIDEO", "Diretório de Upload de Video");
define("_AM_XTUBE_VUPLOADS", "Video Upload");
define("_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Caminho para o Upload de Video:");
define("_AM_XTUBE_VUPLOAD_FUPLOADURL", "Url de Upload do Video:");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Upload video: ");
define("_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Escolha o destino deste Upload");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Video para upload");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Escolha um arquivo de Vídeo");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Arquivo de vídeo deve ser do tipo FLV");
define("_AM_XTUBE_BDELETEVIDEO", "Apager vídeo");
define("_AM_XTUBE_NOVIDEO", "Não Mostrar o Video");
define("_AM_XTUBE_NOIMAGE", "Não Mostrar a Imagem");
define("_AM_XTUBE_NOSELECT", "Nada foi Selecionado");
define("_AM_XTUBE_NOFILESELECT", "Nenhum arquivo selecionado");
define("_AM_XTUBE_XOOPSTUBEVIDEO", "Arquivo de Vídeo XoopsTube:");
define("_AM_XTUBE_WARNINSTALL4", "<span style='font-weight: bold;'>ADVERTÊNCIA:</span> <span style='text-decoration: underline;'>Pasta</span> %s não tem permissões de escrita. <br />Esta pasta precisa de permissões de escrita (CHMOD 777) para o XoopsTube trabalhar corretamente.");
define("_AM_XTUBE_CATSPONSOR", "Escolha uma categoria de Patrocinador:");
define("_AM_XTUBE_CATSPONSORDSC", "Se você selecionar um código de cliente de banner a partir do formulário abaixo não serão salvos!");
define("_AM_XTUBE_BANNER", "Banner");
define("_AM_XTUBE_FBANNER", "Banner");
define("_AM_XTUBE_BANNERID", "Escolha um código de Banner:");
define("_AM_XTUBE_BANNERIDDSC", "Se você tiver selecionado um cliente, sob a forma acima do código do banner não serão salvos!");
// Uploader class
define("_AM_XTUBE_READWRITEERROR", "Você não escolheu um arquivo para fazer o upload ou o servidor não tem permissões suficientes para ler/escrever para carregar este arquivo!");
define("_AM_XTUBE_INVALIDFILESIZE", "Tamanho do Arquivo Inválido");
define("_AM_XTUBE_FILENAMEEMPTY", "Nome do arquivo está vazio");
define("_AM_XTUBE_NOFILEUPLOAD", "Nenhum arquivo uploaded, isto é um erro");
define("_AM_XTUBE_UPLOADERRORZERO", "Houve um problema com seu upload. Erro: 0");
define("_AM_XTUBE_UPLOADERRORONE", "O arquivo que você está tentando carregar é muito grande. Erro: 1");
define("_AM_XTUBE_UPLOADERRORTWO", "O arquivo que você está tentando carregar é muito grande. Erro: 2");
define("_AM_XTUBE_UPLOADERRORTHREE", "O arquivo que você está tentando carregar apenas foi parcialmente processado. Erro: 3");
define("_AM_XTUBE_UPLOADERRORFOUR", "Nenhum arquivo selecionado para upload. Erro: 4");
define("_AM_XTUBE_UPLOADERRORFIVE", "Nenhum arquivo selecionado para upload. Erro: 5");
define("_AM_XTUBE_NOUPLOADDIR", "Diretório de Upload não definido");
define("_AM_XTUBE_FAILOPENDIR", "Falha na abertura diretório: ");
define("_AM_XTUBE_FAILOPENDIRWRITEPERM", "Falha na abertura diretório com permissão escrita: ");
define("_AM_XTUBE_FILESIZEMAXSIZE", "Tamanho do arquivo: %u. O tamanho máximo permitido: %u");
define("_AM_XTUBE_FILESIZEMAXWIDTH", "Largura do Arquivo: %u. Largura máxima permitida: %u");
define("_AM_XTUBE_FILESIZEMAXHEIGHT", "Altura do arquivo: %u. A altura máxima permitida: %u");
define("_AM_XTUBE_MIMENOTALLOW", "MIME type Não é permitido: ");
define("_AM_XTUBE_FAILEDUPLOADING", "Falhou ao carregar o arquivo: ");
define("_AM_XTUBE_ALREADYEXISTTRYAGAIN", " Já existe no servidor. Por favor, renomear esse arquivo e tentar novamente.<br />");
define("_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Erros retornados ao fazer o upload</h4>");
define("_AM_XTUBE_DOESNOTEXIST", " não existe!");

// Version 1.04 RC-2
define("_AM_XTUBE_CLIPFISH", "ClipFish");
define("_AM_XTUBE_LIVELEAK", "LiveLeak");
define('_AM_XTUBE_MAKTOOB', 'Maktoob');
define('_AM_XTUBE_VEOH', 'Veoh');
define("_AM_XTUBE_FILE", "Arquivo ");
define("_AM_XTUBE_INFORMATION", "Video Information");
define("_AM_XTUBE_VIDEO_DLVIDIDDSC", "Take over red part as given in the examples below");
define("_AM_XTUBE_VIDEO_VIEWS", "Views: ");
define("_AM_XTUBE_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!");
//define("_AM_XTUBE_VIDEO_DLURL","Código do Vídeo Embedded: "); //Verificando remoção...
//define("_AM_XTUBE_VIDEO_DLURL_NOTE","<span style='font-size: small;'>(video embedded code = http://www.youtube.com/watch?v=<span style='color: #FF0000>IsOtq-qCqZ4</span >)</span>"); //Verificando remoção...
//define("_AM_XTUBE_VIDEO_DIRCA"," Avaliação do Conteúdo pela internet: "); //Verificando remoção...

// Version 1.04 RC-3
define("_AM_XTUBE_MOD_VIDID", "Video id-code: ");
define("_AM_XTUBE_MOD_VIDSOURCE", "Video source: ");
define("_AM_XTUBE_MOD_TIME", "Time: ");
define("_AM_XTUBE_MOD_KEYWORDS", "Keywords: ");
define("_AM_XTUBE_MOD_ITEM_TAG", "Tags: ");
define("_AM_XTUBE_MOD_PICURL", "Picture url: ");
define("_AM_XTUBE_IPAGE_SHOWLATEST", "Show Latest Listings?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL", "How many videos to show?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL_DSC", "0 Turns this option off.");

// Version 1.05 RC-1
define('_AM_XTUBE_VIMEO', 'Vimeo');
define('_AM_XTUBE_MEGAVIDEO', 'Megavideo');
define('_AM_XTUBE_VIDDLER', 'Viddler');
define('_AM_XTUBE_CATTITLE', 'Category');

// 1.06 Beta 2

//Definitions for FileCheck
define("_AM_XTUBE_FILECHECKS",		"Information");
define("_AM_XTUBE_UPLOADMAX",		"Maximum upload size: ");
define("_AM_XTUBE_POSTMAX",			"Maximum post size: ");
define("_AM_XTUBE_UPLOADS",			"Uploads allowed: ");
define("_AM_XTUBE_UPLOAD_ON",		"On");
define("_AM_XTUBE_UPLOAD_OFF",		"Off");
define("_AM_XTUBE_GDIMGSPPRT",		"GD image lib supported: ");
define("_AM_XTUBE_GDIMGON",			"Yes");
define("_AM_XTUBE_GDIMGOFF",		"No");
define("_AM_XTUBE_GDIMGVRSN",		"GD image lib version: ");
define("_AM_XTUBE_UPDATE_SUCCESS", "Updated Successfully");

define("_AM_XTUBE_WARNING", "Warning: ");
define("_AM_XTUBE_NOT_EXISTS", "does NOT exist");
define("_AM_XTUBE_UNABLE_TO_WRITE", "I am unable to write to: ");