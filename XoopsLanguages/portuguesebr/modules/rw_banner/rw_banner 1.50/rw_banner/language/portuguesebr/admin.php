<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    Copyright (c) 2006 BrInfo                              //
//                     <http://www.brinfo.com.br>                            //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
// Author: Rodrigo Pereira Lima (BrInfo - Soluções Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descrição: Sistema de gerenciamento de mídias publicitárias               //
// ------------------------------------------------------------------------- //

//admin/index.php
define("_ADM_MSG1","Status Alterado com Sucesso!!");
define("_ADM_MSG2","Banner Alterado com Sucesso!!");
define("_ADM_MSG8","Banner Cadastrado com Sucesso!!");
define("_ADM_MSG101","Banner Deletado com Sucesso!!");
define("_ADM_MSG10","Houve um problema ao cadastrar o banner.");
define("_ADM_MSG11","Houve um problema ao editar o banner.");
define("_ADM_MSG3","Tem certeza que deseja remover esta categoria e todos os seus banners???");
define("_ADM_MSG4","Categoria Alterada com Sucesso!!");
define("_ADM_MSG5","Categoria Cadastrada com Sucesso!!");
define("_ADM_MSG102","Categoria e seus Banners deletados com Sucesso!!");
define("_ADM_MSG6","Houve um problema ao cadastrar a categoria.");
define("_ADM_MSG7","Houve um problema ao editar a categoria.");
define("_ADM_MSG12","Selecione um modelo de bloco primeiro.");
define("_ADM_MSG13","Bloco Criado com sucesso! Adicione o código abaixo no template no local exato onde deseja que o bloco seja exibido.");
define("_ADM_MSG14","Bloco Alterado com Sucesso!!");
define("_ADM_MSG15","Tem certeza que deseja excluir este Bloco?");
define("_ADM_MSG16","Bloco Deletado com Sucesso!!");
define("_ADM_MSG17","Pasta padrão de upload dos banners criada com sucesso!!!");
define("_ADM_MSG18","Ocorreu um erro ao tentar criar a pasta padrão de upload dos banners!!! Tente novamente.");
define("_ADM_MSG19","Tem certeza que deseja excluir este banner?");
define("_ADM_MSG20","Tem certeza que deseja excluir esta Tag?<br />Atenção: Excluindo a tag do banco de dados remova ela dos templates em que estava sendo usada para evitar problemas.");
define("_ADM_MSG21","Tag Deletada com Sucesso!!");
define("_ADM_MSG22","Tag Cadastrada com Sucesso!!");
define("_ADM_MSG23","Houve um problema ao cadastrar a tag.");
define("_ADM_MSG24","Tag Alterada com Sucesso!!");
define("_ADM_MSG25","Houve um problema ao editar a tag.");

define("_ADM_TITLE1","Banners Cadastrados");
define("_ADM_TITLE2","COD");
define("_ADM_TITLE3","CLIENTE");
define("_ADM_TITLE4","CATEGORIA");
define("_ADM_TITLE5","IMPRES.");
define("_ADM_TITLE6","IMP. REST.");
define("_ADM_TITLE7","CLIQUES");
define("_ADM_TITLE8","% DE CLIQUES");
define("_ADM_TITLE9","DATA CRIAÇÃO");
define("_ADM_TITLE10","STATUS");
define("_ADM_TITLE11","OPÇÕES");
define("_ADM_TITLE12","Categorias Cadastradas");
define("_ADM_TITLE13","TÍTULO");
define("_ADM_TITLE14","QT. BANNERS");
define("_ADM_TITLE15","MÓDULO");
define("_ADM_TITLE16","Clientes com Banner");
define("_ADM_TITLE17","CLIENTE");
define("_ADM_TITLE18","CONTATO");
define("_ADM_TITLE19","E-MAIL");
define("_ADM_TITLE20","BANNERS");
define("_ADM_TITLE39","CLIQUES REST.");
define("_ADM_TITLE40","Blocos de Template");
define("_ADM_TITLE41","Selecione o modelo de bloco que deseja inserir nos seus templates");
define("_ADM_TITLE42","Selecione um bloco");
define("_ADM_TITLE43","DESCRIÇÃO");
define("_ADM_TITLE44","Nº COLUNAS");
define("_ADM_TITLE45","TEMPO DE REFRESH (ms)");
define("_ADM_TITLE46","Estilo");
define("_ADM_TITLE47","Coloque aqui o css do bloco. Atenção, no campo já existe um modelo de css para um bloco padrão, não mude o nome das classes, simplismente complemente-as de acordo com sua necessidade.");
define("_ADM_TITLE48","Coloque aqui uma breve descrição sobre o bloco. Aconselho mensionar aqui em qual template ele será usado e mais informações que possam deixar claro para que o bloco está sendo usado.");
define("_ADM_TITLE49","CÓDIGO DE INCLUSÃO");
define("_ADM_TITLE50","Clique no botão \"Gerar\" para gerar o código de inclusão do bloco. Este código deve ser inserido no template, no local exato onde deseja que o bloco de banners seja exibido. Lembre-se que a formatção de cores, posicionamento, fontes e tamanho depende do estilo(css) escolhido por você nesta mesma tela.");
define("_ADM_TITLE51","Gerar Código de Inclusão");
define("_ADM_TITLE52","ARQUIVO");
define("_ADM_TITLE53","O tempo deve ser setado em milisegundos. Ex.: Caso queira que os banners sejam trocados a cada 10 segundos, coloque o valor de 10000 milisegundos. Para 30 segundos, 30000 milisegundos e assim por diante.");
define("_ADM_TITLE99","DATA FINAL");

define("_ADM_TAG_TITLE01","COD");
define("_ADM_TAG_TITLE02","TÍTULO");
define("_ADM_TAG_TITLE03","TAG SMARTY");
define("_ADM_TAG_TITLE04","CATEGORIA");
define("_ADM_TAG_TITLE05","QTDE. BANNERS");
define("_ADM_TAG_TITLE06","QTDE. COLUNAS");
define("_ADM_TAG_TITLE07","STATUS");
define("_ADM_TAG_TITLE08","Adicionar Nova Tag");
define("_ADM_TAG_TITLE09","Título:");
define("_ADM_TAG_TITLE10","Categoria:");
define("_ADM_TAG_TITLE11","Quantidade de Banners:");
define("_ADM_TAG_TITLE12","Quantidade de Colunas:");
define("_ADM_TAG_TITLE13","Todas as Categorias");
define("_ADM_TAG_TITLE14","Tag Smarty:");
define("_ADM_TAG_TITLE15","Atenção: Este será o nome da tag criada, portando você não pode usar espaços, acentos ou caracteres especiais. Caso queria usar um nome composto separe as partes por underline(_).");
define("_ADM_TAG_TITLE16","Exibir somente no módulo:");
define("_ADM_TAG_TITLE17","Todos os Módulos");
define("_ADM_TAG_TITLE18","Status da Tag:");
define("_ADM_TAG_TITLE19","MÓDULOS");
define("_ADM_TAG_TITLE20","Observações:");
define("_ADM_TAG_TITLE21","Aconselho que seja colocado aqui neste campo os locais onde a tag foi usada para que no caso de não querer mais usá-la fique fácil de retirá-la depois.");
define("_ADM_TAG_TITLE22","Código do Banner:");
define("_ADM_TAG_TITLE23","Caso não queira que esta TAG exiba banners randômicos, coloque neste campo o Código do banner que deseja exibir e somente ele será exibido.");

define("_ADM_TAG_STATUS1","Tag Ativa");
define("_ADM_TAG_STATUS2","Tag Inativa");

define("_ADM_VALUE_BTN1","Cadastrar Banner");
define("_ADM_VALUE_BTN2","Visualizar Banner");
define("_ADM_VALUE_BTN3","Editar Banner");
define("_ADM_VALUE_BTN4","Remover Banner");
define("_ADM_VALUE_BTN5","Cadastrar Categoria");
define("_ADM_VALUE_BTN6","Editar Categoria");
define("_ADM_VALUE_BTN7","Remover Categoria");
define("_ADM_VALUE_BTN8","Cadastrar Cliente");
define("_ADM_VALUE_BTN9","Editar Categoria");
define("_ADM_VALUE_BTN10","Cadastrar");
define("_ADM_VALUE_BTN11","Blocos de Template");
define("_ADM_VALUE_BTN12","Cadastrar Tag");

define("_ADM_BANNER_STATUS1","Banner Ativo");
define("_ADM_BANNER_STATUS2","Banner Inativo");
define("_ADM_BANNER_STATUS3","Enviado por Cliente. Aguardando ação!");
define("_ADM_BLOCK_STATUS1","Ativo");
define("_ADM_BLOCK_STATUS2","Inativo");

define("_ADM_BANNER_EXIBREST","Ilimitado");

define("_ADM_CATEG_ALLMOD","Todos");
define("_ADM_NO_CATEG","Definir Categ");

define("_AM_RWBANNER_PREF","Preferências");
define("_AM_RWBANNER_OPTS","Blocos / Grupos");
define("_AM_RWBANNER_GOMOD","Ir para o Módulo");
define("_AM_RWBANNER_ABOUT","Sobre o Módulo");
define("_AM_RWBANNER_DEMO","Suporte");
define("_AM_RWBANNER_MODADMIN","- Administração Geral:");
define("_AM_RWBANNER_INDEX","Índice");

define("_AM_RWBANNER_LIST_BANNER","Lista de Banners Cadastrados");
define("_AM_RWBANNER_LIST_BANNER_DESC","Lista de banners cadastrados no sistema. Através desta lista você pode ter uma breve estatística dos banners bem como editá-los e excluí-los. Para alterar a ordem de exibição dos banners na lista basta clicar sobre o nome da coluna.");
define("_AM_RWBANNER_LIST_CATEG","Lista de Categorias Cadastradas");
define("_AM_RWBANNER_LIST_CATEG_DESC","Lista de categorias cadastradas no sistema. Através desta lista você pode editar e excluir as categorias.");
define("_AM_RWBANNER_LIST_USERS","Lista de Clientes com Banner");
define("_AM_RWBANNER_LIST_USERS_DESC","Lista de usuários cadastrados no site que possuem banners no sistema.");
define("_AM_RWBANNER_LIST_TAG","Lista de Tags Smarty Cadastradas");
define("_AM_RWBANNER_LIST_TAG_DESC","Lista de tags smarty cadastradas no site. Estas tags são criadas automaticamente quando o site é iniciado e exibem os banners no tema do site ou nos templates dos módulos de acordo com as configurações setadas.<br /> Para exibir os banner nos templates ou no tema edite o arquivo desejado incluindo a tag no local exato onde queira que os banners apareçam. Você pode desativar as tags a qualquer momento clicando sobre o ícone da coluna status mas lembre-se que apenas tags ativas exibirão banners. <p style='color:#FF0000;'><b>ATENÇÃO:</b> Para ativar a função de TAGS é necessário fazer um hack no core do xoops, para saber como fazer este hack leia o arquivo LEIAME.TXT</p>");

define("_AM_RWBANNER_NODIR",'A pasta padrão de upload dos banner não existe ou está inacessível.<br /><font color="red">Pasta Padrão: "%s"</font> <a href="main.php?op=criardir">Criar Pasta</a>');

define("_ADM_TOTAL_BANNER_LEG","Total de Banners Cadastrados:");

//admin/edita.php
define("_ADM_MSG5_ED","Todos os campos são de preenchimento obrigatório!!!");

define("_ADM_TITLE21","Editar Banner nº");
define("_ADM_TITLE22","Cliente:");
define("_ADM_TITLE23","Categoria:");
define("_ADM_TITLE24","Número de exibições:");
define("_ADM_TITLE500","Número de cliques:");
define("_ADM_TITLE5001","Período de Exibição (em dias):");
define("_ADM_TITLE25","Imagem(Url):");
define("_ADM_TITLE26","Link(Url):");
define("_ADM_TITLE27","Usar Html?");
define("_ADM_TITLE28","Código HTML:");
define("_ADM_TITLE29","Target:");
define("_ADM_TITLE51_ED","Ulpload Banner:");
define("_ADM_TITLE5000","Observações:");
define("_ADM_TITLE5000_DESC","Neste campo o cliente definiu alguns detalhes sobre o banner e sua exibição, analise o conteúdo deste campo para definir o esquema de publicidade deste banner.");

define("_ADM_VALUE_BTN10_ED","Enviar");

//admin/editacateg.php
define("_ADM_MSG6_EDC","Esta categoria possui banners cadastrados, não se esqueça de editá-los, alterando os tamanhos para que fiquem compatíveis com as novas configurações da categoria, caso contrário, podem acontecer problemas na exibição dos banners!!!");

define("_ADM_TITLE30","Editar Categoria nº");
define("_ADM_TITLE31","Título:");
define("_ADM_TITLE32","Largura dos Banners:");
define("_ADM_TITLE33","Altura dos Banners:");
define("_ADM_TITLE34","Vincular ao Módulo:");

//admin/insere.php
define("_ADM_TITLE35","Adicionar Novo Banner");
define("_ADM_TITLE36","Número de exibições:");

//admin/inserecateg.php
define("_ADM_TITLE38","Adicionar Nova Categoria");
define("_ADM_TITLE37","Escolhendo um ou mais módulos nesta opção, você vai fazer com que os banners gerados por esta tag só apareçam no módulo escolhido.");

//admin/myblocksadmin.php
define("_AM_RWBANNER_BLOCKS","Blocos");
define("_AM_RWBANNER_BLOCKSINFO","Você pode configurar o bloco aqui ou no módulo Sistema. Por aqui você ainda tem a opção de clonar um bloco.");
define("_AM_RWBANNER_GROUPS","Grupos");
define("_AM_RWBANNER_GROUPSINFO","Configurar permissões do módulo e do bloco para cada grupo");
define("_AM_RWBANNER_POSITION","Posição");


define("_ADM_BTN_OP1","Cadastrar");
define("_ADM_BTN_OP2","Editar");
define("_ADM_BTN_OP3","Ilimitado");

//admin/upgrade.php
define("_AM_RWBANNER_UPGRADEFAILED","Ocorreram falhas durante o processo de atualização, tente novamente!");
define("_AM_RWBANNER_UPGRADEFAILED1","Falha ao criar a tabela de banners!");
define("_AM_RWBANNER_UPGRADEFAILED2","Falha ao criar a tabela de Categoria!");
define("_AM_RWBANNER_UPGRADEFAILED3","Falha ao criar a tabela de TAGS!");

define("_AM_RWBANNER_UPGRADECOMPLETE","Atualização das tabelas realizada com sucesso! Siga os passos abaixo para ativar todos os recursos do módulo e depois clique no link a seguir.");
define("_AM_RWBANNER_UPGRADECOMPLETE1","O código para exibição de banners no tema e nos templates do site mudou, você precisa alterar o código antigo no arquivo ".XOOPS_ROOT_PATH."/header.php pelo código abaixo:");
define("_AM_RWBANNER_UPGRADECOMPLETE2","O módulo agora possui uma nova funcionalidade, exibição de banners em textos de outros módulos, possibilitando que você exiba seus banners em qualquer módulo que aceite bbcodes tal como o news, articles, XT-Conteúdo dentre outros, inclusive os módulos de fórum. Para que essa nova funcionalidade fique ativa, você precisa fazer um hack no ".XOOPS_ROOT_PATH."/class/module.textsanitizer.php.<br />O hack deve ser feito no final da função xoopsCodeDecode. Para facilitar, veja o arquivo function_bbcode_xoops2015.txt dentro da pasta docs do módulo.");

define("_AM_RWBANNER_UPDATEMODULE","Atualizar Templates e Blocos");

define("_AM_RWBANNER_IMPORT","Importar");
define("_AM_IMPORT_TITLE","Importar banners do Sistema do Xoops selecionados para o RW-Banner");
define("_AM_IMPORT_TITLE1","Categoria RW-Banner");
define("_AM_IMPORT_TITLE2","Cliente RW-Banner");
define("_AM_IMPORT_TITLE3","Importar?");
define("_AM_SUCCESS_IMPORT","Importação realizada com sucesso. Como o sistema antigo possuia menos dados para os banners, edite os banners importados e configure-os corretamente.");
define("_AM_FAIL_IMPORT","Falhas ocorreram durante o processo de importação!!");
?>
