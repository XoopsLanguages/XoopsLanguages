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

//xoops_version.php
define("_MI_RWBANNER_NAME","rw-banner");
define("_MI_RWBANNER_DESC","Sistema de Gerenciamento e exibição de banners randômicos.");
define("_MI_RWBANNER_DIR_NAME","rw_banner");

define("_MI_RWBANNER_TABLE1","rw_banner");
define("_MI_RWBANNER_TABLE2","rw_categorias");
define("_MI_RWBANNER_TABLE3","rw_tags");

define("_MI_RWBLOCK1_NAME","Banner Rotativo");
define("_MI_RWBLOCK1_NAME_DESC","Cria um bloco com 1 ou mais banners randômicos");
define("_MI_RWBLOCK2_NAME","Estatísticas do Cliente");
define("_MI_RWBLOCK2_NAME_DESC","Cria um bloco que exibe para o cliente as estatísticas de seus banners");
define("_MI_RWBLOCK3_NAME","Banner DHTML");
define("_MI_RWBLOCK3_NAME_DESC","Cria um bloco que exibe uma janela DHTML de fechamento automático centralizada na tela.");
define("_MI_RWBLOCK4_NAME","Ajax Banner");
define("_MI_RWBLOCK4_NAME_DESC","Cria um bloco que exibe os banners e utiliza ajax para dar refresh no bloco e mudar os banners.");
define("_MI_RWBLOCK5_NAME","Drop-in Banner");
define("_MI_RWBLOCK5_NAME_DESC","Cria um bloco que exibe um box DHTML que surge na tela com os banners selecionados.");
define("_MI_RWBLOCK6_NAME","LightBox Banner");
define("_MI_RWBLOCK6_NAME_DESC","Exibe o banners numa Div DHTML cheia de efeitos legais.");

define('_MI_RW_DIRIMAGES',"Dir. Banners:");
define('_MI_RW_DIRIMAGES_DESC',"Diretório padrão para o upload dos banners");
define('_MI_RW_SHOWCADFORM',"Permitir Cadastro:");
define('_MI_RW_SHOWCADFORM_DESC',"Permitir que usuários cadastrem seus banners através de formulário na página principal do módulo? Se sim formulário de cadastro é exibido.");
define('_MI_RW_NUMREGISTROS',"Quantidade de Banners:");
define('_MI_RW_NUMREGISTROS_DESC',"Quantidade de Banners exibidos por página na administração do módulo.");
define('_MI_RW_PERMCLIENT',"Cliente pode alterar banner:");
define('_MI_RW_PERMCLIENT_DESC',"Sim permite que o cliente de banner possa alterar os dados de seus banners.");
define('_MI_RW_CAMPOSPERM',"Campos Permitidos:");
define('_MI_RW_CAMPOSPERM_DESC',"Selecione os campos que o cliente terá permissão de alterar caso a opção acima esteja ativada.");

define("_MI_RWBANNER_HISTORY","
<b>=> Version 1.5 (10/09/2006)<br/>
===================================<br/></b>
<ul>
<li>Resolvido enfim o problema de contabilização dos banners em flash. Todo o action script do banner do módulo foi refeito e os bugs corrigidos.</li>
<li>Todo o módulo foi reformulado. Agora todo o seu código é orientado a objeto e está muito mais rápido e estável.</li>
<li>Incluída a opção de período para a exibição dos banners. Na hora de cadastrar um você define um perído (em dias) para esse banner ser exibido, terminado esse período o banner é desativado e não mais é exibido para os usuários.</li>
<li>Com um pequeno hack no core do xoops, agora é possível incluir banners em qualquer módulo que aceite bbcodes como o news ou o cbb. Portanto agora é possível exibir banners em notícias, artigos, posts de fórum e muito mais. Para maiores informações sobre como usar este recurso leia o arquivo readme.txt</li>
<li>Adicionada a função de gerenciar as TAGS SMARTY do módulo. Antes, para exibir seus banners no tema do site ou nos templates dos módulos você tinha que criar manualmente as tags inserindo o comando no arquivo header.php. Agora, o hack continua necessário, porém você só o inclui uma vez e a partir daí cria, edita, muda o status e apaga as tags direto pela administração do site.</li>
<li>2 novos blocos com efeitos DHTML foram criados, Drop-in Banner e LightBox Banner. Agora você pode dar um novo destaque aos seus banners.</li>
</ul>
<b>=> Version 1.4 RC (02/04/2006)<br/>
===================================<br/></b>
<ul>
<li>Inclusão de um novo bloco. Ajax Banner, este bloco monta uma tabela com os banners selecionados através dos critérios de configuração e muda os banners exibidos de x em x segundos também definidos nas configurações.<li>
<li>Criados os templates para todos os blocos. Agora ficou muito mais fácil alterar o formato da exibição dos banners dentro dos blocos.<li>
</ul>
<b>=> Version 1.3.2 RC1 (23/02/2006)<br/>
===================================<br/></b>
<ul>
<li>Inclusão de um novo bloco. Banner DHTML, este bloco cria uma área flutuante que se fecha automaticamente em X segundos e possui opção para seleção de cor de fundo e da borda, quantos banners serão exibidos, em quantas colunas, mostrar o banner 1 vez a cada X reloads entre outras.</li>
</ul>
<b>=> Version 1.3.2 RC (05/02/2006)<br/>
===================================<br/></b>
<ul>
<li>Corrigido o problema de contabilização de cliques dos banners em flash.</li>
<li>Alteração na tela de inclusão e edição de banners e inclusão e edição de categorias. Agora está sendo usado a classe de formulários do próprio xoops.</li>
<li>Inclusão também na área de adição e edição de banners a opção de upload do banner, agora não é necessário que se coloque toda vez a url da imagem, podendo ser escolhida a opção de url ou upload. Para banners em flash (swf) somente usar o upload para que as estátisticas deste banner funcionem.</li>
<li>Corrigidos os bugs da página do módulo no lado do usuário, agora os usuários do site que são clientes de banners podem acompanhar as estatísticas de seus banners através desta área.</li>
<li>Inclusão da opção de contratação de banners por clique, quando for atingido o total de cliques contratados o banner se torna inativo e não é mais exibido.</li>
</ul>
<b>=> Version 1.3 RC (18/09/2005)<br/>
===================================<br/></b>
<ul>
<li>Alteração na função de exibição dos banners no header e nos templates. Foi adicionada a opção de se exibir uma categoria somente em um módulo específico.</li>
<li>Devido à esta alteração na função, foi incluída mais uma opção nos formulários de cadastro e edição de categorias, com esta nova opção, o administrador do módulo tem como vincular uma categoria a um módulo específico, fazendo com que os banners dessa categoria só sejam exibidos no módulo vinculado.</li>
<li>Foram criadas as constantes de idioma.</li>
<li>Um bug ainda persiste, ainda não consegui resolver o problema de contabilização de cliques para banner em flash e código html.</li>
</ul>
<b>=> Version 1.1 RC (14/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Foram corrigidos vários bugs encontrados na versão anterior.</li>
<li>Incluída a opção de cadastrar banners para um determinado cliente.</li>
<li>A área administrativa foi modificada, ficando mais intuítiva e organizada.</li>
<li>Adicionado um novo bloco, estatíticas do cliente, que exibe para o cliente as principais estatísticas de seus banners.</li>
<li>Criada a área do cliente, onde ele tem acesso as estatísticas de seus banners, opção de alteração da url dos banners e ainda o envio das estatísticas por email.</li>
</ul>
<b>=> Version 0.9 Beta 1 (11/09/2005)<br/>
==================================<br/></b>
<ul>
<li>Lançamento público da 1ª versão de testes.</li>
</ul>");

define('_MI_RWBANNER_AUTHOR_WORD_DESC',"Agradeço a todos os amigos da comunidade
 <a href='http://www.xoopstotal.com.br' target='_blank'>XoopsTotal</a> que me ajudaram
 com idéias e sugestões para o desenvolvimento deste módulo. Um agradecimento todo especial aos grandes amigos
 <a href='http://www.xoopstotal.com.br/userinfo.php?uid=11' target='_blank'>Wilson</a> ,
 <a href='http://www.xoopstotal.com.br/userinfo.php?uid=5' target='_blank'>Giba</a> e
<a href='http://www.xoopstotal.com.br/userinfo.php?uid=8' target='_blank'>EyeKeeper</a>
pela enorme ajuda, suas brilhantes idéias, traduções e também pela colaboração em todas as fases de testes do módulo.");

// About.php constants
define('_MI_RWBANNER_AUTHOR_INFO',"Desenvolvedores");
define('_MI_RWBANNER_DEVELOPER_LEAD',"Desenvolvedor Líder");
define('_MI_RWBANNER_DEVELOPER_CONTRIBUTOR',"Colaboradores");
define('_MI_RWBANNER_DEVELOPER_WEBSITE',"Website");
define('_MI_RWBANNER_DEVELOPER_EMAIL',"Email");
define('_MI_RWBANNER_DEVELOPER_CREDITS',"Créditos");
define('_MI_RWBANNER_MODULE_INFO',"Informações de Desenvolvimento do módulo");
define('_MI_RWBANNER_MODULE_STATUS',"Condições");
define('_MI_RWBANNER_MODULE_RELEASE_DATE',"Data da versão");
define('_MI_RWBANNER_MODULE_DEMO',"Site de demonstração");
define('_MI_RWBANNER_MODULE_SUPPORT',"Site oficial de suporte");
define('_MI_RWBANNER_MODULE_BUG',"Reportar um bug para este módulo");
define('_MI_RWBANNER_MODULE_SUBMIT_BUG',"Enviar um bug");
define('_MI_RWBANNER_MODULE_FEATURE',"Sugestões e novas características para este módulo");
define('_MI_RWBANNER_MODULE_SUBMIT_FEATURE',"Solicitar uma nova característica");
define('_MI_RWBANNER_MODULE_DISCLAIMER',"Disclaimer");
define('_MI_RWBANNER_AUTHOR_WORD',"Palavras do autor");
define('_MI_RWBANNER_VERSION_HISTORY',"História da versão");
define('_MI_RWBANNER_BY',"Por");
// RC
define('_MI_RWBANNER_WARNING_RC',"Este módulo foi disponibilizado sem quaisquer garantias. Este módulo é uma versão Release Candidate e não pode ser usado em um site de produção. O módulo ainda está sob desenvolvimento ativo e seu uso é de sua própria responsabilidade, o que significa que os autores não se responsabilizam.");

//admin/menu.php
define("_ADM_MENU_TITLE1","Índice");
define("_ADM_MENU_TITLE2","Blocos/Grupos");
define("_ADM_MENU_TITLE3","Cadastrar Banner");
define("_ADM_MENU_TITLE4","Cadastrar Categoria");
define("_ADM_MENU_TITLE5","Suporte");
define("_ADM_MENU_TITLE6","Sobre o Módulo");
define("_ADM_MENU_TITLE7","Preferências");
define("_ADM_MENU_TITLE8","Cadastrar Tags");

?>
