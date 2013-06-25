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

define("_MD_XTUBE_NOVIDEO", "Este vídeo não existe!");
define("_MD_XTUBE_SUBCATLISTING", "Lista de Categorias");
define("_MD_XTUBE_ISADMINNOTICE", "Webmaster: há um problema com esta imagem.");
define("_MD_XTUBE_THANKSFORINFO", "Obrigado pelo envio do vídeo.<br />Você será avisado quando o webmaster aprová-lo.");
define("_MD_XTUBE_ISAPPROVED", "Obrigado pelo envio do vídeo.<br />Ele foi aprovado e agora aparecerá na listagem.");
define("_MD_XTUBE_THANKSFORHELP", "Obrigado por ajudar a manter a integridade deste diretório.");
define("_MD_XTUBE_FORSECURITY", "Por razões de segurança o seu nome de usuário e endereço IP serão temporariamente gravados.");
define("_MD_XTUBE_DESCRIPTION", "Descrição");
define("_MD_XTUBE_SUBMITCATHEAD", "Formulário de envio de vídeo");
define("_MD_XTUBE_MAIN", "Início");
define("_MD_XTUBE_POPULAR", "Popular");
define("_MD_XTUBE_NEWTHISWEEK", "Novidade desta semana");
define("_MD_XTUBE_UPTHISWEEK", "Atualizados esta semana");
define("_MD_XTUBE_POPULARITYLTOM", "Popularidade (dos menos para os mais vistos)");
define("_MD_XTUBE_POPULARITYMTOL", "Popularidade (dos mais para os menos vistos)");
define("_MD_XTUBE_TITLEATOZ", "Título (A para Z)");
define("_MD_XTUBE_TITLEZTOA", "Título (Z para A)");
define("_MD_XTUBE_DATEOLD", "Data (Vídeo antigos listados primeiro)");
define("_MD_XTUBE_DATENEW", "Data (Vídeos novos listados primeiro)");
define("_MD_XTUBE_RATINGLTOH", "Classificação (dos menos cotados para os mais cotados)");
define("_MD_XTUBE_RATINGHTOL", "Classificação (dos mais cotados para os menos cotados)");
define("_MD_XTUBE_DESCRIPTIONC", "Descrição: ");
define("_MD_XTUBE_CATEGORYC", "Categoria: ");
define("_MD_XTUBE_VERSION", "Versão");
define("_MD_XTUBE_SUBMITDATE", "Enviado em ");
define("_MD_XTUBE_VIDEOHITS", "<span style='font-weight: bold;'>Visualizado:</span> %s vezes");
define("_MD_XTUBE_PUBLISHERC", "Publicado por: ");
define("_MD_XTUBE_RATINGC", "Classificação: ");
define("_MD_XTUBE_ONEVOTE", "1 Voto");
define("_MD_XTUBE_NUMVOTES", "%s Votos");
define("_MD_XTUBE_RATETHISFILE", "Classifique este vídeo");
define("_MD_XTUBE_MODIFY", "Modificado");
define("_MD_XTUBE_REPORTBROKEN", "Reporte link quebrado");
define("_MD_XTUBE_BROKENREPORT", "Reporte vídeo defeituoso");
define("_MD_XTUBE_SUBMITBROKEN", "Enviar");
define("_MD_XTUBE_BEFORESUBMIT", "Antes de informar um vídeo com problemas, por favor verifique se o problema é no link ou no site de origem do vídeo, e se este site não está apenas temporariamente off-line.");
define("_MD_XTUBE_TELLAFRIEND", "Recomendar");
define("_MD_XTUBE_EDIT", "Editar");
define("_MD_XTUBE_THEREARE", "Há <span style='font-weight: bold;'>%s</span> <em>Categorias</em> e <span style='font-weight: bold;'>%s</span> <em>Vídeos</em> listados");
define("_MD_XTUBE_THEREIS", "Há <span style='font-weight: bold;'>%s</span> <em>Categoria</em> e <span style='font-weight: bold;'>%s</span> <em>Vídeos</em> listados");
define("_MD_XTUBE_LATESTLIST", "Listas mais recentes");
define("_MD_XTUBE_FILETITLE", "Título do Vídeo: ");
define("_MD_XTUBE_DLVIDID", "Código do Video: ");
define("_MD_XTUBE_VIDEO_DLVIDID_NOTE", "
<span style='font-size: small;'><span style='font-weight: bold;'>YouTube:</span> http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span><br />
<span style='font-weight: bold;'>MetaCafe:</span> http://www.metacafe.com/watch/<span style='color: #FF0000;'>191543/sperm_whale_encounters_underwater_robot</span>/<br />
<span style='font-weight: bold;'>SPIKE/ifilm:</span> http://www.ifilm.com/video/<span style='color: #FF0000;'>2718605</span><br />
<span style='font-weight: bold;'>Photobucket:</span> http://i39.photobucket.com/albums/<span style='color: #FF0000;'>e168/vailtom/th_BigSquid</span>.jpg<br />
<span style='font-weight: bold;'>Google Video:</span> http://video.google.com/videoplay?docid=<span style='color: #FF0000;'>4761076111111865377</span>&q=rov&total=913&start=...<br />
<span style='font-weight: bold;'>MySpace TV:</span> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<span style='color: #FF0000;'>13171141</span><br />
<span style='font-weight: bold;'>DailyMotion:</span> http://www.dailymotion.com/video/<span style='color: #FF0000;'>x40bhg</span>_blondesecretary_fun<br />
<span style='font-weight: bold;'>Blip.tv </span>embed code<span style='font-weight: bold;'>:</span> http://blip.tv/play/<span style='color: #FF0000;'>Abe6EwA</span> ...<br />
<span style='font-weight: bold;'>ClipFish:</span> http://www.clipfish.de/player.php?videoid=<span style='color: #FF0000;'>MTg1NTYyfDM1Ng</span>%3D%3D<br />
<span style='font-weight: bold;'>LiveLeak:</span> http://www.liveleak.com/view?i=<span style='color: #FF0000;'>a59_1205566630</span><br />
<span style='font-weight: bold;'>Maktoob:</span> file=http://<span style='color: #FF0000;'>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</span>.flv (from embed-code)<br />
<span style='font-weight: bold;'>Veoh:</span> http://www.veoh.com/videos/<span style='color: #FF0000;'>v15069875yApCz7r3</span>?jsonParams=...<br />
<span style='font-weight: bold;'>Vimeo:</span> http://www.vimeo.com/<span style='color: #FF0000;'>2246499</span><br />
<span style='font-weight: bold;'>Megavideo:</span> http://www.megavideo.com/?v=<span style='color: #FF0000;'>J6YSRE0T</span><br />
<span style='font-weight: bold;'>Viddler:</span> http://www.viddler.com/player/<span style='color: #FF0000;'>d32d2b94</span>/ (see embed code)</span>");
define("_MD_XTUBE_VIDEO_PICURL", "Picture url: ");
define("_MD_XTUBE_VIDEO_PICURLNOTE", "Url da Foto quando for um código do Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Viddler ou Maktoob");
define("_MD_XTUBE_VIDSOURCE", "Código do Video:");
define("_MD_XTUBE_YOUTUBE", "YouTube");
define("_MD_XTUBE_METACAFE", "MetaCafe");
define("_MD_XTUBE_IFILM", "Spike");
define("_MD_XTUBE_GOOGLEVIDEO", "Google Video");
define("_MD_XTUBE_MYSPAVETV", "MySpace TV");
define("_MD_XTUBE_PHOTOBUCKET", "Photobucket");
define("_MD_XTUBE_DAILYMOTION", "DailyMotion");
define("_MD_XTUBE_VIDEO_PUBLISHER", "Nome do editor do Video:");
define("_MD_XTUBE_HOMEPAGEC", "WebSite: ");
define("_MD_XTUBE_NOTSPECIFIED", "Não Especificado");
define("_MD_XTUBE_PUBLISHER", "Publicador");
define("_MD_XTUBE_UPDATEDON", "Atualizado em");
define("_MD_XTUBE_PRICEFREE", "Gratuíto");
define("_MD_XTUBE_VIEWDETAILS", "Ver Vídeo-Clip");
define("_MD_XTUBE_OPTIONS", "Opções: ");
define("_MD_XTUBE_NOTIFYAPPROVE", "Notifique-me quando este vídeo for aprovado");
define("_MD_XTUBE_VOTEAPPRE", "Seu voto é apreciado.");
define("_MD_XTUBE_THANKYOU", "Obrigado por votar aqui no %s"); // %s é o nome do seu site
define("_MD_XTUBE_VOTEONCE", "Por favor, não vote no mesmo vídeo mais de uma vez.");
define("_MD_XTUBE_RATINGSCALE", "A escala é de 1 a 10, com 1 sendo fraco e 10 sendo excelente.");
define("_MD_XTUBE_BEOBJECTIVE", "Por favor seja objetivo. Se todos receberem 1 ou 10, a classificação não será muito útil.");
define("_MD_XTUBE_DONOTVOTE", "Não vote em seu próprio vídeo.");
define("_MD_XTUBE_RATEIT", "Classificado!");
define("_MD_XTUBE_INTFILEFOUND", "Veja este vídeo em %s"); // %s é o nome do seu site
define("_MD_XTUBE_RANK", "Classificação");
define("_MD_XTUBE_CATEGORY", "Categoria");
define("_MD_XTUBE_HITS", "Visualizado");
define("_MD_XTUBE_RATING", "Classificação");
define("_MD_XTUBE_VOTE", "Voto");
define("_MD_XTUBE_SORTBY", "Ordenar por:");
define("_MD_XTUBE_TITLE", "Título");
define("_MD_XTUBE_DATE", "Data");
define("_MD_XTUBE_POPULARITY", "Popularidade");
define("_MD_XTUBE_TOPRATED", "Classificação");
define("_MD_XTUBE_CURSORTBY", "Vídeos atualmente classificados em: %s");
define("_MD_XTUBE_CANCEL", "Cancelar");
define("_MD_XTUBE_ALREADYREPORTED", "Você enviou um aviso de problemas com este vídeo.");
define("_MD_XTUBE_MUSTREGFIRST", "Sinto, você não tem permissão para executar esta ação.<br />Por favor, primeiro se registre ou faça o login!");
define("_MD_XTUBE_NORATING", "Nenhuma clasificação selecionada.");
define("_MD_XTUBE_VOTEFORTITLE", "Classifique este Vídeo: ");
define("_MD_XTUBE_CANTVOTEOWN", "Você não pode votar no vídeo que você mesmo enviou.<br />Todos os votos são registrados e revistos.");
define("_MD_XTUBE_SUBMITVIDEO", "Enviar vídeo");
define("_MD_XTUBE_SUB_SNEWMNAMEDESC", "<ul><li>Todos os videos novos estão sujeitos à validação e pode levar até 24 horas antes que apareçam na listagem. </li><li>Nos reservamos o direito de recusar qualquer vídeo ou alteração posterior de conteúdo que não tenha sido aprovada. </li></ul>");
define("_MD_XTUBE_MAINLISTING", "Lista das Categorias Principais");
define("_MD_XTUBE_LASTWEEK", "Última Semana");
define("_MD_XTUBE_LAST30DAYS", "Últimos 30 Dias");
define("_MD_XTUBE_1WEEK", "1 Semana");
define("_MD_XTUBE_2WEEKS", "2 Semanas");
define("_MD_XTUBE_30DAYS", "30 Dias");
define("_MD_XTUBE_SHOW", "Mostrar");
define("_MD_XTUBE_DAYS", "dias");
define("_MD_XTUBE_NEWlinks", "Novos vídeos");
define("_MD_XTUBE_TOTALNEWVIDEOS", "Total de novos vídeos");
define("_MD_XTUBE_DTOTALFORLAST", "Total dos últimos novos vídeos");
define("_MD_XTUBE_AGREE", "Eu concordo");
define("_MD_XTUBE_DOYOUAGREE", "Você concorda com os termos acima?");
define("_MD_XTUBE_DISCLAIMERAGREEMENT", "Disclaimer");
define("_MD_XTUBE_DUPLOADSCRSHOT", "Upload de ScreenShot de Imagem:");
define("_MD_XTUBE_RESOURCEID", "Vídeo id#: ");
define("_MD_XTUBE_REPORTER", "Informe Original: ");
define("_MD_XTUBE_DATEREPORTED", "Data do Informe: ");
define("_MD_XTUBE_RESOURCEREPORTED", "Vídeo informado com problemas");
define("_MD_XTUBE_RESOURCEREPORTED2", "Este vídeo foi informado estar com problemas. Nós estamos trabalhando para corrigir isso.");
define("_MD_XTUBE_BROWSETOTOPIC", "<span style='font-weight: bold;'>Navegue pelos vídeos listados em ordem alfabética.</span>");
define("_MD_XTUBE_WEBMASTERACKNOW", "Informação de problemas com vídeo recebida: ");
define("_MD_XTUBE_WEBMASTERCONFIRM", "Informação de problemas com vídeo confirmada: ");
define("_MD_XTUBE_ERRORSENDEMAIL", "Informação de problemas com vídeo confirmada, mas ocorreu um erro ao enviar a notificação por e-mail ao webmaster.");

define("_MD_XTUBE_DELETE", "Excluir");
define("_MD_XTUBE_DISPLAYING", "Exibir por: ");
define("_MD_XTUBE_LEGENDTEXTNEW", "Novo Hoje");
define("_MD_XTUBE_LEGENDTEXTNEWTHREE", "Novo a 3 Dias");
define("_MD_XTUBE_LEGENDTEXTTHISWEEK", "Novo Nesta Semana");
define("_MD_XTUBE_LEGENDTEXTNEWLAST", "Com mais de 1 Semana");
define("_MD_XTUBE_THISFILEDOESNOTEXIST", "Erro: este vídeo não existe!");
define("_MD_XTUBE_BROKENREPORTED", "Vídeo com Problemas Reportado");

define("_MD_XTUBE_REV_SNEWMNAMEDESC", "Por favor, preencha completamente o formulário abaixo, e nós adicionaremos seu cometário o mais rápido possível.<br /><br />
Obrigado por enviar sua opinião. Queremos dar aos nossos visitantes a possibilide de encontrar vídeos de qualidade com rapidez.<br /><br />
Todos os comentários serão revisados por algum de nossos webmasters antes de serem colocados no website.
");
define("_MD_XTUBE_ISNOTAPPROVED", "Seu envio terá primeiro que ser aprovado por um moderador.");
define("_MD_XTUBE_HOMEPAGETITLEC", "Título da Home Page: ");
define("_MD_XTUBE_SCREENSHOT", "ScreenShot:");
define("_MD_XTUBE_SCREENSHOTCLICK", "Exibir imagem plena");
define("_MD_XTUBE_OTHERBYUID", "Outros vídeo por: ");
define("_MD_XTUBE_NOOTHERBYUID", "Nenhum outros vídeos por: ");
define("_MD_XTUBE_LINKTIMES", "Duração do Vídeo: ");
define("_MD_XTUBE_MAINTOTAL", "Total de Vídeos: ");
define("_MD_XTUBE_VIDEONOW", "Exibir vídeo");
define("_MD_XTUBE_PAGES", "<span style='font-weight: bold;'>Páginas</span>");
define("_MD_XTUBE_RATEDRESOURCE", "clasificação do Vídeo");
define("_MD_XTUBE_SUBMITTER", "Enviado por");
define("_MD_XTUBE_ERROR", "Erro ao atualizar a base de dados: a informação não foi salva");
define("_MD_XTUBE_COPYRIGHT", "copyright");
define("_MD_XTUBE_INFORUM", "Discutir no Fórum");
// added frankblack
define("_MD_XTUBE_NOTALLOWESTOSUBMIT", "Você não tem permissão para enviar vídeos");
define("_MD_XTUBE_INFONOSAVEDB", "A informação não foi salva na base de dados: <br /><br />");

define("_MD_XTUBE_NEWLAST", "Novos enviados antes da última semana");
define("_MD_XTUBE_NEWTHIS", "Novos enviados nesta semana");
define("_MD_XTUBE_THREE", "Novos enviados nos últimos três dias");
define("_MD_XTUBE_TODAY", "Novos enviados hoje");
define("_MD_XTUBE_NO_FILES", "Ainda não há vídeos");

define("_MD_XTUBE_NOPERMISSIONTOPOST", "Você não tem permissão para postar nesta categoria.");
define("_MD_XTUBE_RESOURCES", "Vídeos");

define("_MD_XTUBE_PUBLISHDATE", "Publicado em");
define("_MD_XTUBE_APPROVE", "Aprovado");
define("_MD_XTUBE_MODERATOR_OPTIONS", "Opções do Moderador");

// added by McDonald
define("_MD_XTUBE_TIME", "Hora:");
define("_MD_XTUBE_TIMEB", "<span style='font-weight: bold;'>Hora:</span>");
define("_MD_XTUBE_KEYWORDS", "Palavras-chave:");
define("_MD_XTUBE_KEYWORDS_NOTE", "Palavras-chave devem ser separadas com vírgula (palavrachave1, palavrachave2, palavrachave3)");
define("_MD_XTUBE_NOVIDEOLOAD", "Obrigado pelo seu envio!");
define("_MD_XTUBE_LINKID", "Vídeo id");
define("_MD_XTUBE_ADDTO", "Adicionar em: ");
define("_MD_XTUBE_NEWVIDEOS", "Vídeos Recentes");
define("_MD_XTUBE_TAKINGUBACK", "Retornar.");
define("_MD_XTUBE_ADMINSECTION", "Seção Administrativa");

// Version 1.04 RC-1
define("_MD_XTUBE_BLIPTV", "Blip.tv");

// Version 1.04 RC-2
define("_MD_XTUBE_CLIPFISH", "ClipFish");
define("_MD_XTUBE_LIVELEAK", "LiveLeak");
define('_MD_XTUBE_MAKTOOB', 'Maktoob');
define('_MD_XTUBE_VEOH', 'Veoh');
define('_MD_XTUBE_STOPIT', 'STOP IT YOU FOOL!!');
define("_MD_XTUBE_VIDEO_DLVIDIDDSC", "Take over red part as given in the examples below");

//Version 1.04 RC-3
define("_MD_XTUBE_MODIFYNOTALLOWED", "You're not allowed to modify others videos!!");

// Version 1.05 RC-1
define('_MD_XTUBE_VIMEO', 'Vimeo');
define('_MD_XTUBE_MEGAVIDEO', 'Megavideo');
define('_MD_XTUBE_VIDDLER', 'Viddler');
define('_MD_XTUBE_UPDATED', 'Updated!');
define('_MD_XTUBE_NEW', 'New!');

function getXtubeAlphabet()
{
    $xtubeAlphabet = array(
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'K',
        'L',
        'M',
        'N',
        'O',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        'Z'
    );

    return $xtubeAlphabet;
}

//define("_MD_XTUBE_DLURL","Código de Video Embedded: "); //verificando remoção...
//define("_MD_XTUBE_DLURL_NOTE","<span style='font-size: small;'>(video embedded code = http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span>)</span>"); //verificando remoção...
//define("_MD_XTUBE_LINK_DIRCA"," Classificação de Conteúdo da Internet: "); //verificando remoção...

//define("_MD_XTUBE_COUNTRYSORT","País");
//define("_MD_XTUBE_COUNTRYLTOH","País (de A para Z)"); //verificando remoção...
//define("_MD_XTUBE_COUNTRYHTOL","Country (de Z para A)"); //verificando remoção...
