<?php
/**
* $Id: main.php v 1.06 2008/06/16 McDonald Exp $
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

define("_MD_WFL_NOLINK","Este link não existe!");
define("_MD_WFL_SUBCATLISTING","Lista de categorias");
define("_MD_WFL_ISADMINNOTICE","Admin: Há um problema com está imagem");
define("_MD_WFL_THANKSFORINFO","Obrigado por sua inclusão. Você será avisado assim que o administrador aprovar. Isto poderá levar algum tempo, por isto, tenha paciência.");
define("_MD_WFL_ISAPPROVED","Obrigado por sua inclusão. Seu pedido foi aprovado e aparecerá imediatamente em nossa lista.");
define("_MD_WFL_THANKSFORHELP","Obrigado por ajudar a manter a integridade deste site.");
define("_MD_WFL_FORSECURITY","Para sua segurança, estaremos gravando temporariamente seu IP.");
define("_MD_WFL_DESCRIPTION","Descrição");
define("_MD_WFL_SUBMITCATHEAD","Enviar o formulário do link.");
define("_MD_WFL_MAIN","Início");
define("_MD_WFL_POPULAR","Popular");
define("_MD_WFL_NEWTHISWEEK","Novos esta semana");
define("_MD_WFL_UPTHISWEEK","Atualizados esta semana");
define("_MD_WFL_POPULARITYLTOM","Popularidade (Menos vistos)");
define("_MD_WFL_POPULARITYMTOL","Popularidade (Mais vistos)");
define("_MD_WFL_TITLEATOZ","Titúlo (A - Z)");
define("_MD_WFL_TITLEZTOA","Titúlo (Z - A)");
define("_MD_WFL_DATEOLD","Data (Antigos primeiros)");
define("_MD_WFL_DATENEW","Data (Novos primeiros)");
define("_MD_WFL_RATINGLTOH","Pontuação (Menos pontos primeiros)");
define("_MD_WFL_RATINGHTOL","Pontuação (Mais pontos primeiros)");
define("_MD_WFL_DESCRIPTIONC","Descrição: ");
define("_MD_WFL_CATEGORYC","Categoria: ");
define("_MD_WFL_VERSION","Versão");
define("_MD_WFL_SUBMITDATE","Incluido");
define("_MD_WFL_LINKHITS","<b>Visitas</b>: %s vezes");
define("_MD_WFL_URLRATING","<b>Avaliações</b>: %s");
define("_MD_WFL_PUBLISHERC","Publicado por: ");
define("_MD_WFL_RATINGC","Avaliação: ");
define("_MD_WFL_PAGERANK","PageRank™: ");
define("_MD_WFL_PAGERANKALT","Google PageRank™: ");
define("_MD_WFL_ONEVOTE","1 voto");
define("_MD_WFL_NUMVOTES","%s votos");
define("_MD_WFL_RATETHISFILE","Votar no lik");
define("_MD_WFL_MODIFY","Modificar");
define("_MD_WFL_REPORTBROKEN","Informar link quebrado");
define("_MD_WFL_BROKENREPORT","Informar sobre link quebrado");
define("_MD_WFL_SUBMITBROKEN","Ok!");
define("_MD_WFL_BEFORESUBMIT","Antes de informar um link quebrado, por favor, certifique-se que o link está realmente corrompido e que ele não se encontra temporariamente indisponível.");
define("_MD_WFL_TELLAFRIEND","Recomendar");
define("_MD_WFL_EDIT","Editar");
define("_MD_WFL_THEREARE","Há <b>%s</b> <i>Categorias</i> e <b>%s</b> <i>Links</i> listados");
define("_MD_WFL_THEREIS","Há <b>%s</b> <i>Categoria</i> e <b>%s</b> <i>Link(s)</i> listado(s)");
define("_MD_WFL_LATESTLIST","Últimos listados");
define("_MD_WFL_FILETITLE","Titúlo do link: ");
define("_MD_WFL_DLURL","URL link: ");
define("_MD_WFL_LINK_DIRCA","Avaliação de conteúdo da internet: ");
define("_MD_WFL_HOMEPAGEC","Página principal: ");
define("_MD_WFL_NOTSPECIFIED","Não especificada");
define("_MD_WFL_PUBLISHER","Publicado por:");
define("_MD_WFL_UPDATEDON","Atualizado em");
define("_MD_WFL_PRICEFREE","Livre");
define("_MD_WFL_VIEWDETAILS","Veja todos detalhes");
define("_MD_WFL_OPTIONS", 'Opções: ');
define("_MD_WFL_NOTIFYAPPROVE", 'Avise-me quando este link for aprovado');
define("_MD_WFL_VOTEAPPRE","Seu voto é bem-vindo");
define("_MD_WFL_THANKYOU","Obrigado pelas vezes que você votou aqui %s"); // %s is your site name
define("_MD_WFL_VOTEONCE","Por favor não vote para de uma vez para o mesmo recurso.");
define("_MD_WFL_RATINGSCALE","A escala é de 1 - 10, 1 = ruim e 10 = excelente.");
define("_MD_WFL_BEOBJECTIVE","Por favor seja objetivo, se todos receberem o 1 ou o 10, as avaliações não serão muito úteis.");
define("_MD_WFL_DONOTVOTE","Não vote em seu próprio recurso.");
define("_MD_WFL_RATEIT","Avalie-o!");
define("_MD_WFL_INTFILEFOUND","Aqui está um bom link pra colocar no %s"); // %s is your site name
define("_MD_WFL_RANK","Ranking");
define("_MD_WFL_CATEGORY","Categoria");
define("_MD_WFL_HITS","Cliques");
define("_MD_WFL_RATING","Avaliação");
define("_MD_WFL_VOTE","Votos");
define("_MD_WFL_SORTBY","Organizados por:");
define("_MD_WFL_TITLE","Titúlo");
define("_MD_WFL_DATE","Data");
define("_MD_WFL_POPULARITY","Popularidade");
define("_MD_WFL_TOPRATED","Avaliação");
define("_MD_WFL_CURSORTBY","Link atuais ordenados por: %s");
define("_MD_WFL_CANCEL","Cancelar");
define("_MD_WFL_ALREADYREPORTED","Você já enviou um relatório de link quebrado para este recurso.");
define("_MD_WFL_MUSTREGFIRST","Lamento, você não tem permissão para efetuar esta operação, <br />por favor faça o seu login/registro primeiro!");
define("_MD_WFL_NORATING","Nenhuma avaliação selecionada");
define("_MD_WFL_VOTEFORTITLE","Avalie este link: ");
define("_MD_WFL_CANTVOTEOWN","Você não pode votar no seu próprio link. <br />Todos os votos serão avaliados e revistos.");
define("_MD_WFL_SUBMITLINK","Incluir link");
define("_MD_WFL_SUB_SNEWMNAMEDESC","<ul><li>Todos os links serão préviamente avaliados e pode demorar um tempo para a sua publicação.</li><li>Reservamo-nos o direito de rejeitar qualquer link cujo conteúdo não nos pareça apropriado.</li></ul>");
define("_MD_WFL_MAINLISTING","Categoria principal");
define("_MD_WFL_LASTWEEK","Última semana");
define("_MD_WFL_LAST30DAYS","Últimos 30 dias");
define("_MD_WFL_1WEEK","1 semana");
define("_MD_WFL_2WEEKS","2 semanas");
define("_MD_WFL_30DAYS","30 dias");
define("_MD_WFL_SHOW","Mostrar");
define("_MD_WFL_DAYS","dias");
define("_MD_WFL_NEWlinks","Novos links");
define("_MD_WFL_TOTALNEWLINKS","Total de novos links");
define("_MD_WFL_DTOTALFORLAST","Total de novos links nos últimos");
define("_MD_WFL_AGREE","Eu concordo");
define("_MD_WFL_DOYOUAGREE","Você concorda com os termos?");
define("_MD_WFL_DISCLAIMERAGREEMENT","Termos de Uso");
define("_MD_WFL_DUPLOADSCRSHOT","Enviar ScreenShot:");
define("_MD_WFL_RESOURCEID","id#: ");
define("_MD_WFL_REPORTER","Relato original: ");
define("_MD_WFL_DATEREPORTED","Data do relato: ");
define("_MD_WFL_RESOURCEREPORTED","Relato de link quebrado");
define("_MD_WFL_RESOURCEREPORTED2","Este link já foi relatado como quebrado, nós estamos trabalhando para corrigir este problema!");
define("_MD_WFL_BROWSETOTOPIC","<b>Procurar links por ordem alfabética</b>");
define("_MD_WFL_WEBMASTERACKNOW","Relatório de link quebrado reconhecido:: ");
define("_MD_WFL_WEBMASTERCONFIRM","Relatório de link quebrado confirmado: ");
define("_MD_WFL_ERRORSENDEMAIL","Relatório de link quebrado confirmado, mas com erro ao enviar a mensagem para o administrador.");

define("_MD_WFL_DELETE","Apagar");
define("_MD_WFL_DISPLAYING","Exibir por: ");
define("_MD_WFL_LEGENDTEXTNEW","Novos hoje");
define("_MD_WFL_LEGENDTEXTNEWTHREE","Novos em 3 dias");
define("_MD_WFL_LEGENDTEXTTHISWEEK","Novos esta semana");
define("_MD_WFL_LEGENDTEXTNEWLAST","Após uma semana");
define("_MD_WFL_THISFILEDOESNOTEXIST","Erro: este link não existe!");
define("_MD_WFL_BROKENREPORTED","Link quebrado relatado");

define("_MD_WFL_REV_SNEWMNAMEDESC"," 
Por favor preencha completamente o formulário abaixo, e nós adicionaremos sua revisão o mais breve possível.<br /><br />
Agradecemos a sua participação. Nós queremos dar a nossos usuários a possibilidade para achar links de qualidade e com rapidez.<br /><br />Todas as avaliações são revistas pelos admin antes de serem publicadas. 
");
define("_MD_WFL_ISNOTAPPROVED","A sua participação tem que se aprovada por um administrador primeiro.");
define("_MD_WFL_HOMEPAGETITLEC","Titúlo da página principal: ");
define("_MD_WFL_SCREENSHOT","ScreenShot:");
define("_MD_WFL_SCREENSHOTCLICK","Exibir imagem completa");
define("_MD_WFL_OTHERBYUID","Outros links por: ");
define("_MD_WFL_LINKTIMES","Tempo do link: ");
define("_MD_WFL_MAINTOTAL","Total de Links: ");
define("_MD_WFL_LINKNOW","Visitar Link");
define("_MD_WFL_PAGES","<b>Páginas</b>");
define("_MD_WFL_RATEDRESOURCE","Avaliar recurso");
define("_MD_WFL_SUBMITTER","Enviado por");
define("_MD_WFL_ERROR","Erro ao atualizar o Banco de Dados. Esta Informação não foi gravada");
define("_MD_WFL_COPYRIGHT","copyright");
define("_MD_WFL_INFORUM","Discutir no Fórum");
// added frankblack
define("_MD_WFL_NOTALLOWESTOSUBMIT","Você Não tem autorização para incluir links");
define("_MD_WFL_INFONOSAVEDB","As Informações não foram salvas no banco de dados: <br /><br />");

define("_MD_WFL_NEWLAST","Novos enviados antes da última semana");
define("_MD_WFL_NEWTHIS","Novos enviados esta semana");
define("_MD_WFL_THREE","Novos enviados nos últimos 3 dias");
define("_MD_WFL_TODAY","Novos enviados hoje");
define("_MD_WFL_NO_FILES","Nenhum link até agora");

define("_MD_WFL_NOPERMISSIONTOPOST","Você não tem permissão para enviar link nesta categoria.");

define("_MD_WFL_PUBLISHDATE","Publicado");
define("_MD_WFL_APPROVE","Aprovado");
define("_MD_WFL_MODERATOR_OPTIONS","Opções de moderação"); 

// added by McDonald
define("_MD_WFL_COUNTRY","País:");
define("_MD_WFL_COUNTRYB","<b>País:</b>");
define("_MD_WFL_KEYWORDS","Palavra chave:");
define("_MD_WFL_KEYWORDS_NOTE","<i>Palavra chave poderá ser separada por virgula (Palavra chave1, Palavra chave2).</i>");
define("_MD_WFL_NOLINKLOAD","Obrigado pela postagem!");
define("_MD_WFL_LINKID","Link id");
define("_MD_WFL_COUNTRYSORT","País");
define("_MD_WFL_COUNTRYLTOH","País (A to Z)");
define("_MD_WFL_COUNTRYHTOL","País (Z to A)");
define("_MD_WFL_BACKBUTTON","Voltar");
define("_MD_WFL_ADMINSECTION","Administração");
define("_MD_WFL_ADDTO","Adicionar: ");
define("_MD_WFL_INFORMATION","Informação");
define("_MD_WFL_ADDRESS","Endereço:");
define("_MD_WFL_LINK_GOOGLEMAP","Google Maps");
define("_MD_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_MD_WFL_LINK_MSLIVEMAP","MS Live Maps");
define("_MD_WFL_LINK_CHECKMAP","Verificar mapa");
define("_MD_WFL_STREET1","Rua 1");
define("_MD_WFL_STREET2","Rua 2 (opcional)");
define("_MD_WFL_TOWN","Cidade");
define("_MD_WFL_STATE","Estado");
define("_MD_WFL_ZIPCODE","CEP");
define("_MD_WFL_TELEPHONE","Telefone");
define("_MD_WFL_TEL","Tel. ");
define("_MD_WFL_FAX","Fax. ");
define("_MD_WFL_GETMAP","Veja o mapa");

// Version 1.05 RC5
define("_MD_WFL_VOIP","VoIP ");
define("_MD_WFL_PRINT","Imprimir");
define("_MD_WFL_NOITEMSELECTED","Você não escolheu um link válido!");
define("_MD_WFL_MOBILE","Mobile");

// Version 1.05 RC6
define("_MD_WFL_VAT","VAT");
define("_MD_WFL_VATWIKI", '<small>Para mais informações, veja <a href="http://en.wikipedia.org/wiki/Value_added_tax_identification_number" target="_blank">Wikipedia</a> (obs: Este valor não se aplica no Brasil)');
define("_MD_WFL_EMAIL","Email");
define("_MD_WFL_LINK_CREATEADDRESS", '<b>Formulário de Endereço</b>');

//Version 1.06 RC2
define('_MD_WFL_STOPIT','PARE DE ENGANAR!!');
?>