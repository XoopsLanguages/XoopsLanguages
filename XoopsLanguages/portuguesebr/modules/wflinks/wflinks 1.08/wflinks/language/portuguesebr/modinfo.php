<?php
/**
 * $Id: modinfo.php v 1.06 2008/06/16 McDonald Exp $
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

// Module Info
// The name of this module
define("_MI_WFL_NAME","WF-links");

// A brief description of this module
define("_MI_WFL_DESC","Criar uma seção de links onde os usuários podem visualizar/incluir/votar.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Links recentes");
define("_MI_WFL_BNAME2","Melhores links");

// Sub menu titles
define("_MI_WFL_SMNAME1","Enviar");
define("_MI_WFL_SMNAME2","Popular");
define("_MI_WFL_SMNAME3","Mais votados");
define("_MI_WFL_SMNAME4","Última listagem");

// Names of admin menu items
define("_MI_WFL_BINDEX","Página Principal");
define("_MI_WFL_INDEXPAGE","Página principal de gerenciamento");
define("_MI_WFL_MCATEGORY","Gerenciamento de categoria");
define("_MI_WFL_MLINKS","Gerenciamento de links");
define("_MI_WFL_MUPLOADS","Envio de imagens");
define("_MI_WFL_PERMISSIONS","Permissões");
define("_MI_WFL_BLOCKADMIN","Blocos");
define("_MI_WFL_MVOTEDATA","Votos");

// Title of config items
define('_MI_WFL_POPULAR','Cliques Popular');
define('_MI_WFL_POPULARDSC','O número de cliques que um link será considerado como Popular no seu site.');

//Display Icons
define("_MI_WFL_ICONDISPLAY","Links populares e novos:");
define("_MI_WFL_DISPLAYICONDSC","Selecione como você irá mostrar os ícones populares e os novos na sua lista de links");
define("_MI_WFL_DISPLAYICON1","Mostrar como ícones");
define("_MI_WFL_DISPLAYICON2","Mostrar como texto");
define("_MI_WFL_DISPLAYICON3","Não mostrar");

define("_MI_WFL_DAYSNEW","Links do dia:");
define("_MI_WFL_DAYSNEWDSC","O número de dias que um link será considerado como novo.");
define("_MI_WFL_DAYSUPDATED","Dias para Links atualizado:");
define("_MI_WFL_DAYSUPDATEDDSC","O número de dias necessário para que um link seja considerado como Atualizado.");

define('_MI_WFL_PERPAGE','Número de Links na lista:');
define('_MI_WFL_PERPAGEDSC','Número de Links que será mostrado em cada categoria por padrão.');

define('_MI_WFL_USESHOTS','Mostrar screenshots?');
define('_MI_WFL_USESHOTSDSC','Selecione SIM caso você precise mostrar screenshots (pequenas imagens) para cada link no seu site');
define('_MI_WFL_SHOTWIDTH','Mostrar comprimento da Imagem');
define('_MI_WFL_SHOTWIDTHDSC','Mostrar comprimento do screenshot');
define('_MI_WFL_SHOTHEIGHT','Mostrar altura da Imagem');
define('_MI_WFL_SHOTHEIGHTDSC','Mostrar altura do screenshot');
define('_MI_WFL_CHECKHOST','Desabilitar links diretos de outros sites para seus links?');
define('_MI_WFL_REFERERS','Estes sites podem fazer links diretos <br />Separar com uma | ');
define("_MI_WFL_ANONPOST","Envio por Usuários Anônimos:");
define("_MI_WFL_ANONPOSTDSC","Permitir que usuários anônimos possam enviar novos links?");
define('_MI_WFL_AUTOAPPROVE','Auto-aprovação de links enviados');
define('_MI_WFL_AUTOAPPROVEDSC','Se escolher esta opção, os novos links serão aprovados automaticamente quando forem enviados ao seu site. (não recomendado).');

define('_MI_WFL_MAXFILESIZE','Tamanho do Upload em (KB)');
define('_MI_WFL_MAXFILESIZEDSC','Tamanho máximo permitido para os arquivos enviados.');
define('_MI_WFL_IMGWIDTH','Comprimento Imagem no Upload');
define('_MI_WFL_IMGWIDTHDSC','Comprimento máximo da imagem quando se envia arquivo de imagem.');
define('_MI_WFL_IMGHEIGHT','Altura da Imagem no Upload');
define('_MI_WFL_IMGHEIGHTDSC','Altura máxima da imagem quando se envia arquivo de imagem.');

define('_MI_WFL_UPLOADDIR','Pasta de Uploads (Sem barra final / )');
define('_MI_WFL_ALLOWSUBMISS','Sugestão por Membros:');
define('_MI_WFL_ALLOWSUBMISSDSC','Permitir que membros possam fazer sugestão de Links');
define('_MI_WFL_ALLOWUPLOADS','Envio por Membros:');
define('_MI_WFL_ALLOWUPLOADSDSC','Permitir que os membros enviem diretamente para o site');
define('_MI_WFL_SCREENSHOTS','Pasta de Upload dos Screenshots');
define('_MI_WFL_CATEGORYIMG','Pasta de Upload de Imagem nas Categorias');
define('_MI_WFL_MAINIMGDIR','Pasta Principal de Imagens');
define('_MI_WFL_USETHUMBS','Usar Thumbnails:');
define("_MI_WFL_USETHUMBSDSC","Formatos suportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links vai usar thumbnails nas imagens. Escolha  'Não' para usar a imagem original se o servidor não suportar esta opção.</div>");
define('_MI_WFL_DATEFORMAT','Relógio:');
define('_MI_WFL_DATEFORMATDSC','Relógio usado por padrão no WF-Links:');
define('_MI_WFL_SHOWDISCLAIMER','Mostrar Termos de Uso antes do upload de arquivo?');
define('_MI_WFL_SHOWDISCLAIMERDSC','Antes dos usuários incluirem um link, mostrar o regulamento.');
define('_MI_WFL_SHOWLINKDISCL','Mostrar termos de uso antes do link do usuário?');
define('_MI_WFL_SHOWLINKDISCLDSC','Mostrar regulamentos antes do usuário abrir o link?');
define('_MI_WFL_DISCLAIMER','Escreva o texto dos termos de uso:');
define('_MI_WFL_LINKDISCLAIMER','Entre com o link dos termos de uso:');
define('_MI_WFL_SUBCATS','Sub-Categorias:');
define("_MI_WFL_SUBMITART","Inclusão do link:");
define("_MI_WFL_SUBMITARTDSC","Selecione grupos que podem adicionar novos links.");
define("_MI_WFL_RATINGGROUPS","Pontuação:");
define("_MI_WFL_RATINGGROUPSDSC","Selecione grupos que podem votar nos links.");
define("_MI_WFL_IMGUPDATE","Atualizar Thumbnails?");
define("_MI_WFL_IMGUPDATEDSC","Se for escolhido os thumbnails, eles serão atualizados a cada visualização da página, senão vai ser usada a primeira imagem sempre. <br /><br />");
define("_MI_WFL_QUALITY","Qualidade do Thumbnail:");
define("_MI_WFL_QUALITYDSC","Qualidade 0 (menor) 10 (maior)");
define("_MI_WFL_KEEPASPECT","Manter Aspect Ratio da Imagem?");
define("_MI_WFL_KEEPASPECTDSC","");
define("_MI_WFL_ADMINPAGE","Número de Arquivos na página principal no Admin:");
define("_MI_WFL_AMDMINPAGEDSC","Número de novos arquivos a ser mostrado na zona de admin de módulos");
define("_MI_WFL_ARTICLESSORT","Ordem padrão dos links:");
define("_MI_WFL_ARTICLESSORTDSC","selecione a ordem que os links serão listados");
define("_MI_WFL_TITLE","Título");
define("_MI_WFL_RATING","Votos");
define("_MI_WFL_WEIGHT","Importância");
define("_MI_WFL_POPULARITY","Popularidade");
define("_MI_WFL_SUBMITTED2","Data de Envio");
define('_MI_WFL_COPYRIGHT','Copyright:');
define('_MI_WFL_COPYRIGHTDSC','Selecione para mostrar Copyright na página de links.');
// Description of each config items
define('_MI_WFL_SUBCATSDSC','Selecione SIM para mostrar sub-categorias. Ao Selecionar NÃO vai esconder as sub-categorias nas listagens.');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY','Global');
define('_MI_WFL_GLOBAL_NOTIFYDSC','Opções globais de notificações.');
define('_MI_WFL_CATEGORY_NOTIFY','Categoria');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Opções de notificações correspondentes apenas à categoria corrente.');
define('_MI_WFL_LINK_NOTIFY','Link');
define('_MI_WFL_FILE_NOTIFYDSC','Opções de notificações aplicadas ao link atual');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY','Nova categoria');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP','Avise-me quando uma nova categoria de link for criada.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC','Receber uma notificação sobre todo pedidos para uma nova categoria de link for criada');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Nova categoria de link');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Pedido de modificação do link');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Avise-me quando qualquer modificação de link for enviada.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','Receber notificações para todo pedido de modificação de link..');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Novo pedido de modificação de link');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Notificação de Link corrompindo');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Avise-me sobre relatórios de links quebrados.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','Receber notificações quando qualquer relatório de link quebrado for enviado.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Relatório de Link quebrado');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Link enviado');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Avise-me sobre todos os links enviados (aguardando aprovação).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','Receber notificação de todo link enviado (aguardando aprovação).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificar : Novo link enviado');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Novo Link');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Avise-me de todos novos links publicados');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','Receber notificação de todo novo link publicado.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Novo link');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Link enviado');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Avise-me quando um novo link for enviado (aguardando aprovação) para a categoria atual.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','Receber notificação quando novo link for enviado (aguardando aprovação) para a categoria atual.');      
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Novo link enviado na categoria'); 

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Novo link');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Avise-me quando um novo link for incluido na categoria atual.');   
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','Receber notificação quando um novo link for incluido na categoria atual.');      
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Nova categoria'); 

define('_MI_WFL_LINK_APPROVE_NOTIFY','Link Aprovado');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Avise-me quando o link for aprovado.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','Receber notificação quando o link for aprovador.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notificação : Link aprovado');

define('_MI_WFL_AUTHOR_INFO',"Informação do desenvolvedor");
define('_MI_WFL_AUTHOR_NAME',"Desenvolvedor");
define('_MI_WFL_AUTHOR_DEVTEAM',"Equipe de desenvolvimento");
define('_MI_WFL_AUTHOR_WEBSITE',"Site do desenvolvedor");
define('_MI_WFL_AUTHOR_EMAIL',"E-mail do desenvolvedor");
define('_MI_WFL_AUTHOR_CREDITS',"Creditos");
define('_MI_WFL_MODULE_INFO',"Informação do desenvolvimento do Módulo");
define('_MI_WFL_MODULE_STATUS',"Status do Desenvolvimento");
define('_MI_WFL_MODULE_DEMO',"Site demonstração");
define('_MI_WFL_MODULE_SUPPORT',"Site de suporte oficial");
define('_MI_WFL_MODULE_BUG',"Relate um erro");
define('_MI_WFL_MODULE_FEATURE',"Sugira uma característica nova para este módulo");
define('_MI_WFL_MODULE_DISCLAIMER',"Termo de uso");
define('_MI_WFL_RELEASE',"Data de lançamento: ");

define('_MI_WFL_MODULE_MAILLIST',"WF-Project Lista de discussão");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS',"Anúncios na lista de discussão");
define('_MI_WFL_MODULE_MAILBUGS',"Falha na lista de discussão");
define('_MI_WFL_MODULE_MAILFEATURES',"Características da lista de discussão");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Pegue os últimos anuncios do WF-Project.");
define('_MI_WFL_MODULE_MAILBUGSDSC',"Enviar o erro para lista de discussão.");
define('_MI_WFL_MODULE_MAILFEATURESDSC',"Características novas do pedido da lista de discussão.");

define('_MI_WFL_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFL_AUTHOR_CREDITSTEXT',"A equipe do WF-Projects gostaria de agradecer as seguintes pessoas por sua ajuda e apoio durante a fase do desenvolvimento deste módulo.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, GibaPhp");
define('_MI_WFL_AUTHOR_BUGFIXES',"Historico de reparos de erro");

define('_MI_WFL_COPYRIGHT2','Copyright');
define('_MI_WFL_COPYRIGHTIMAGE',"A menos que indicado de outra maneira, este módulo (WF-Links) e suas imagens são registradas à equipe do WF-Projects.<br /><br />Você pode copiar, editar e mudar o WF-Links para servir suas exigências pessoais. Você concorda em não modificar, apaptar e redistribuir o código fonte sem autorização da equipe WF-Projects.");

define('_MI_WFL_SELECTFORUM',"Selecione forum:");
define('_MI_WFL_SELECTFORUMDSC',"Selecione o forum que você instalou e será usado pelo WF-Links.");

define('_MI_WFL_DISPLAYFORUM1',"Newbb (todos)");
define('_MI_WFL_DISPLAYFORUM2',"IPB Forum");
define('_MI_WFL_DISPLAYFORUM3',"Módulo PHPBB2");

// added by McDonald
define("_MI_WFL_COUNTRY","País:");
define('_MI_WFL_EDITOR',"Usar editor:");
define('_MI_WFL_EDITORCHOICE',"Selecione o editor para o administrador. Se você tem uma instalação 'simples' (e.g você está usando somente a classe de editores padrão do core, fornecidos no pacote padrão core), é só selecionar o DHTML Compacto para trabalhar corretamente.");
define('_MI_WFL_EDITORUSER',"Usar editor (usuário):");
define('_MI_WFL_EDITORCHOICEUSER',"Selecione editor para o usuário. Se você tem uma instalação 'simples' (e.g você está usando somente a classe de editores padrão do core, fornecidos no pacote padrão core), é só selecionar o DHTML Compacto para trabalhar corretamente.");
define("_MI_WFL_FORM_DHTML","DHTML");
define("_MI_WFL_FORM_COMPACT","Compact");
define("_MI_WFL_FORM_SPAW","Spaw Editor");
define("_MI_WFL_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_WFL_FORM_FCK","FCK Editor");
define("_MI_WFL_FORM_KOIVI","Koivi Editor");
define("_MI_WFL_FORM_INBETWEEN","Inbetween");
define("_MI_WFL_FORM_TINYEDITOR","Tinyeditor");
define("_MI_WFL_FORM_TINYMCE","TinyMCE");
define("_MI_WFL_FORM_DHTMLEXT","DHTML Extended");
define("_MI_WFL_SORTCATS","Classificar por categorias:");
define("_MI_WFL_SORTCATSDSC","Escolha como categorias e subcategorias serão ordenadas.");
define("_MI_WFL_KEYLENGTH","Digite o máximo de caracteres para meta palavras-chave:");
define("_MI_WFL_KEYLENGTHDSC","Padrão será 255 caracteres");
define("_MI_WFL_OTHERLINKS","Mostrar outros links enviados pelo Autor?");
define("_MI_WFL_OTHERLINKSDSC","Selecione se outros links do autor serão exibidas.");
define("_MI_WFL_TOTALCHARS","Escolher o total de caracteres para a descrição?");
define("_MI_WFL_TOTALCHARSDSC","Definir o total de caracteres para a descrição da categoria.");
define("_MI_WFL_QUICKVIEW","Mostrar opção de visualização rápida");
define("_MI_WFL_QUICKVIEWDSC","Isto irá transformar (ligar)on/off(desligar) a opção Rápida de Visualização.");
define('_MI_WFL_ICONS_CREDITS',"Icones por");
define("_MI_WFL_SHOWSBOOKMARKS","Exibir Social Bookmarks?");
define("_MI_WFL_SHOWSBOOKMARKSDSC","Selecione Sim se quiser que um Social Bookmark seja exibido no link.");
define("_MI_WFL_SHOWPAGERANK","Exibir Google PageRank?");
define("_MI_WFL_SHOWPAGERANKSDSC","Escolha Sim se pretende que o PageRank do Google seja exibido.");
define("_MI_WFL_USERTAGDESCR","Usuário pode enviar Tags:");
define("_MI_WFL_USERTAGDSC","Selecione Sim para autorizar o usuário a enviar tags.");

// Version 1.05 RC5
define('_MI_WFL_DATEFORMATADMIN','Administração de datas e horas:');
define('_MI_WFL_DATEFORMATADMINDSC','O padrão na administração é Timestamp para o WF-Links<br />Veja também o <a href="http://jp.php.net/manual/pt_BR/function.date.php" target="_blank">manual do PHP sobre datas.</a>');
define("_MI_WFL_USEADDRESSDESCR","Utilize o endereço e opções de mapas?");
define("_MI_WFL_USEADDRESSDSC","Selecione Sim para utilizar o endereço e o recurso de mapas.");
define("_MI_WFL_HEADERPRINT","[PRINT OPTIONS] Imprimir cabeçalho da página");
define("_MI_WFL_HEADERPRINTDSC","Cabeçalho que será impresso para cada link");
define("_MI_WFL_LOGOURLPRINT","[PRINT OPTIONS] URL do Logo a imprimir");
define("_MI_WFL_LOGOURLDSCPRINT","URL do logotipo que serão impressas no topo da página");
define("_MI_WFL_FOOTERPRINT","[PRINT OPTIONS] Imprimir rodapé da página");
define("_MI_WFL_FOOTERPRINTDSC","Rodapé que será impresso para cada link");
define("_MI_WFL_BNAME3","WF-Links - Estatísticas do Patrocinador ");
define("_MI_WFL_VCARD_CREDITS","vCard pelo script");

// Version 1.05 RC6
define("_MI_WFL_FLAGIMG","Imagem da bandeira do País no diretório");
define("_MI_WFL_FLAGIMGDSC","Digite o URL sem uma barra final");
define("_MI_WFL_CATEGORYIMGDSC","Digite o URL sem uma barra final");
define("_MI_WFL_SCREENSHOTSDSC","Digite o URL sem uma barra final");
define("_MI_WFL_MAINIMGDIRDSC","Digite o URL sem uma barra final");
define("_MI_WFL_USEAUTOSCRSHOT","Usar Auto Screenshot");
define("_MI_WFL_USEAUTOSCRSHOTDSC","Isto irá criar automaticamente uma tela (ScreenShot) com base na url. Este recurso de screenshots poderá ser ignorado e poderá não funcionar para todos os sites.");
define("_MI_WFL_MOZSHOT_CREDITS","Auto Screenshot por");
define("_MI_WFL_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>MozShot</a> (todos os códigos fontes estão a sua disposição no <a href="http://www.ruby-lang.org/pt/" target=_blank>Ruby site Pt</a> licença)');

// Version 1.06 RC-1
define("_MI_WFL_BNAME4","WF-Links Tag Cloud");
define("_MI_WFL_BNAME5","WF-Links Melhores Tags");

// Version 1.06 RC-3
define('_MI_WFL_DISPLAYFORUM4',"Newbbex");
define("_MI_WFL_TITLE_A","Título (A)");
define("_MI_WFL_TITLE_D","Título (D)");
define("_MI_WFL_RATING_A","Votos (A)");
define("_MI_WFL_RATING_D","Votos (D)");
define("_MI_WFL_SUBMITTED_A","Data de Envio (A)");
define("_MI_WFL_SUBMITTED_D","Data de Envio (D)");
define("_MI_WFL_POPULARITY_A","Popularidade (A)");
define("_MI_WFL_POPULARITY_D","Popularidade (D)");
define("_MI_WFL_COUNTRY_A","País (A)");
define("_MI_WFL_COUNTRY_D","País (D)");

// Version 1.08

// Admin Summary
//define("_MI_WFL_SCATEGORY","Category");
define("_MI_WFL_SNEWFILESVAL","Submitted");
define("_MI_WFL_SMODREQUEST","Modified");
//define("_MI_WFL_SREVIEWS","Reviews: ");
define("_MI_WFL_SBROKENSUBMIT","Broken");
define("_MI_WFL_DOCUMENTATION","Docs");

define('_MI_WFL_ADD_LINK','Add Link');
define('_MI_WFL_ADD_CATEGORY','Add Category');